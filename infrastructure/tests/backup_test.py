"""Backup failure-injection tests. Temporary files and fake Docker only."""
import contextlib
import datetime as dt
import importlib.util
import io
import json
import os
from pathlib import Path
import shutil
import subprocess
import sys
import tarfile
import tempfile
import unittest
from unittest.mock import patch

MODULE = Path(__file__).resolve().parents[1] / 'backup' / 'maroquiz_backup.py'
spec = importlib.util.spec_from_file_location('maroquiz_backup', MODULE)
backup = importlib.util.module_from_spec(spec)
spec.loader.exec_module(backup)


class Source:
    def __init__(self, base):
        self.project = base / 'project'
        self.root = base / 'storage' / 'app'
        for directory in ['public/avatars', 'private', 'exam_pdfs/concours/announcements']:
            (self.root / directory).mkdir(parents=True, exist_ok=True)
        (self.root / 'exam_pdfs/exam.pdf').write_bytes(b'%PDF-1.7\nexam fixture\n%%EOF')
        (self.root / 'exam_pdfs/concours/announcements/session.pdf').write_bytes(b'%PDF-1.7\nannouncement fixture\n%%EOF')
        (self.root / 'public/avatars/avatar.png').write_bytes(b'avatar fixture')
        self.info = {'database': 'fixture', 'size_bytes': 1024, 'server_version': '17 fixture'}
        self.disk_roots = {'local': 'private', 'public': 'public', 'exam_pdfs': 'exam_pdfs'}
        self.postgres_volume, self.storage_volume = 'fixture_postgres', 'fixture_storage'
        self.fail_dump = self.fail_validation = self.mutate = False

    def dump(self, path):
        if self.fail_dump:
            raise backup.BackupError('Injected dump failure')
        path.write_bytes(b'PGDMP' + b'fixture database bytes' * 20)
        if self.mutate:
            (self.root / 'exam_pdfs/exam.pdf').write_bytes(b'changed during dump')

    def validate_dump(self, path):
        if self.fail_validation:
            raise backup.BackupError('Injected dump validation failure')

    def metadata(self):
        return self.info


class BackupTest(unittest.TestCase):
    def setUp(self):
        self.temporary = tempfile.TemporaryDirectory(prefix='maroquiz-backup-test-')
        self.base = Path(self.temporary.name)
        self.directory = self.base / 'backups'
        self.directory.mkdir(mode=0o700)
        self.source = Source(self.base)
        self.output = contextlib.redirect_stdout(io.StringIO())
        self.output.__enter__()

    def tearDown(self):
        self.output.__exit__(None, None, None)
        self.temporary.cleanup()

    def create(self, **options):
        return backup.create_backup(self.directory, self.source, reserve_mb=1, **options)

    def test_complete_archive_checksums_inventory_and_safe_unpack(self):
        bundle = self.create()
        manifest = backup.verify(bundle)
        self.assertEqual(set(manifest['components']), {'database.dump', 'uploads.tar'})
        self.assertIn('exam_pdfs/concours/announcements/session.pdf', manifest['uploads']['files'])
        self.assertIn('public/avatars/avatar.png', manifest['uploads']['files'])
        self.assertEqual((bundle / 'SHA256SUMS').stat().st_mode & 0o777, 0o600)
        destination = self.base / 'restore-inspection'
        backup.unpack(bundle, destination)
        with tarfile.open(destination / 'uploads.tar') as archive:
            self.assertEqual(archive.extractfile('exam_pdfs/exam.pdf').read(), (self.source.root / 'exam_pdfs/exam.pdf').read_bytes())
        with self.assertRaises(backup.BackupError):
            backup.unpack(bundle, destination)

    def test_dump_failure_never_deletes_an_expired_previous_backup(self):
        old = self.create(now=dt.datetime.now(backup.UTC) - dt.timedelta(days=30), retention=365)
        self.source.fail_dump = True
        with self.assertRaises(backup.BackupError):
            self.create(retention=14)
        self.assertTrue(old.exists())
        backup.verify(old)
        self.assertFalse(any(self.directory.glob('.incomplete-*')))

    def test_current_validation_failure_never_publishes_or_prunes(self):
        old = self.create(now=dt.datetime.now(backup.UTC) - dt.timedelta(days=30), retention=365)
        self.source.fail_validation = True
        with self.assertRaises(backup.BackupError):
            self.create()
        self.assertEqual([path for path in self.directory.iterdir() if backup.NAME.fullmatch(path.name)], [old])

    def test_upload_change_rejects_current_backup_and_preserves_old(self):
        old = self.create()
        self.source.mutate = True
        with self.assertRaisesRegex(backup.BackupError, 'Uploads changed'):
            self.create()
        self.assertTrue(old.exists())

    def test_low_disk_space_rejects_before_dump_and_retains_previous(self):
        old = self.create()
        with patch.object(backup.shutil, 'disk_usage', return_value=shutil._ntuple_diskusage(10, 9, 1)):
            with patch.object(self.source, 'dump') as dump:
                with self.assertRaisesRegex(backup.BackupError, 'Insufficient'):
                    self.create()
                dump.assert_not_called()
        self.assertTrue(old.exists())

    def test_lock_prevents_overlapping_dump(self):
        with backup.lock(self.directory, '.backup.lock'):
            with patch.object(self.source, 'dump') as dump:
                with self.assertRaisesRegex(backup.BackupError, 'lock'):
                    self.create()
                dump.assert_not_called()

    def test_symlinks_and_special_files_are_rejected_without_following(self):
        (self.source.root / 'external').symlink_to('/etc/passwd')
        with self.assertRaisesRegex(backup.BackupError, 'symlink'):
            self.create()

    def test_archive_corruption_is_detected(self):
        bundle = self.create()
        with (bundle / f'{bundle.name}.tar.gz').open('ab') as stream:
            stream.write(b'corruption')
        with self.assertRaisesRegex(backup.BackupError, 'SHA-256'):
            backup.verify(bundle)

    def test_a_checksummed_archive_with_a_traversal_member_is_still_rejected(self):
        bundle = self.create()
        archive = bundle / f'{bundle.name}.tar.gz'
        with tarfile.open(archive, 'w:gz') as stream:
            entry = tarfile.TarInfo('../unsafe')
            entry.size = 1
            stream.addfile(entry, io.BytesIO(b'x'))
        (bundle / 'SHA256SUMS').write_text(f'{backup.file_digest(archive)}  {archive.name}\n'
            f'{backup.file_digest(bundle / "manifest.json")}  manifest.json\n')
        with self.assertRaisesRegex(backup.BackupError, 'Unsafe'):
            backup.verify(bundle)
        self.assertFalse((self.base / 'unsafe').exists())

    def test_missing_components_and_modified_manifest_are_rejected(self):
        bundle = self.create()
        (bundle / 'manifest.json').write_text('{}')
        with self.assertRaises(backup.BackupError):
            backup.verify(bundle)
        (bundle / 'SHA256SUMS').unlink()
        with self.assertRaises(backup.BackupError):
            backup.verify(bundle)

    def test_success_prunes_only_verified_expired_backups(self):
        old = self.create(now=dt.datetime.now(backup.UTC) - dt.timedelta(days=30), retention=365)
        unrelated = self.directory / 'private-notes'
        unrelated.mkdir()
        current = self.create(retention=14)
        self.assertFalse(old.exists())
        self.assertTrue(current.exists())
        self.assertTrue(unrelated.exists())

    def test_corrupt_expired_backup_is_retained_for_manual_review(self):
        old = self.create(now=dt.datetime.now(backup.UTC) - dt.timedelta(days=30), retention=365)
        (old / 'manifest.json').write_text('{}')
        with contextlib.redirect_stderr(io.StringIO()):
            self.create(retention=14)
        self.assertTrue(old.exists())

    def test_yesterday_uses_the_vps_casablanca_date_not_client_utc_date(self):
        # At 23:30 UTC, Casablanca is already on the following local day.
        old = self.create(now=dt.datetime(2026, 7, 1, 10, tzinfo=backup.UTC), retention=365)
        self.create(now=dt.datetime(2026, 7, 2, 10, tzinfo=backup.UTC), retention=365)
        result = backup.latest(self.directory, yesterday=True, now=dt.datetime(2026, 7, 1, 23, 30, tzinfo=backup.UTC))
        self.assertEqual(result['id'], old.name)

    def test_no_partial_backup_is_returned_by_latest(self):
        (self.directory / '.incomplete-example').mkdir()
        with self.assertRaises(backup.BackupError):
            backup.latest(self.directory)

    def test_latest_skips_a_newer_backup_that_has_become_corrupt(self):
        valid = self.create(now=dt.datetime.now(backup.UTC) - dt.timedelta(days=1), retention=365)
        corrupt = self.create(retention=365)
        (corrupt / f'{corrupt.name}.tar.gz').write_bytes(b'corrupt archive')
        self.assertEqual(backup.latest(self.directory)['id'], valid.name)

    def test_subprocess_failure_suppresses_secret_output(self):
        secret = b'fixture-password-that-must-not-be-logged'
        with patch.object(backup.subprocess, 'run', side_effect=subprocess.CalledProcessError(1, ['fixture'], stderr=secret)):
            with self.assertRaises(backup.BackupError) as caught:
                backup.run(['fixture'], label='Fixture operation')
        self.assertNotIn(secret.decode(), str(caught.exception))

    def test_latest_exposes_authenticated_transfer_checksums_and_size(self):
        bundle = self.create()
        result = backup.latest(self.directory)
        self.assertEqual(result['sha256'], backup.file_digest(bundle / f'{bundle.name}.tar.gz'))
        self.assertEqual(result['manifest_sha256'], backup.file_digest(bundle / 'manifest.json'))
        self.assertEqual(result['size_bytes'], (bundle / f'{bundle.name}.tar.gz').stat().st_size)

    def test_linux_sync_command_and_helpers_are_removed(self):
        self.assertFalse(hasattr(backup, 'synchronize'))
        self.assertFalse(hasattr(backup, 'sync_directory'))
        result = subprocess.run([sys.executable, str(MODULE), 'sync'], capture_output=True, text=True)
        self.assertNotEqual(result.returncode, 0)
        self.assertIn('invalid choice', result.stderr)

    def deployment(self, *, outside_disk=False, nested_mount=False, missing_pdf=False):
        """Model real Docker inspection responses, with arbitrary volume-name prefixes."""
        project = self.base / 'production-project'
        project.mkdir()
        (project / 'docker-compose.prod.yml').write_text('services: {}\n')
        (project / '.env').write_text('FIXTURE_ONLY=true\n')
        database_host = self.base / 'postgres-volume'
        database_host.mkdir()
        cids = {'a' * 64: 'php', 'b' * 64: 'postgres'}
        settings = {'storage_path': '/var/www/html/storage', 'default_disk': 'local',
                    'disks': {disk: '/var/www/html/storage/app/' + relative for disk, relative in self.source.disk_roots.items()},
                    'database': {'driver': 'pgsql', 'host': 'postgres', 'port': 5432, 'database': 'fixture', 'has_url': False}}
        if outside_disk:
            settings['disks']['exam_pdfs'] = '/outside/backed-up-storage'
        calls = []
        def docker(args, **kwargs):
            calls.append(args)
            if args[0] == 'compose':
                return (('a' if args[-1] == 'php' else 'b') * 64).encode()
            if args[0] == 'inspect':
                template, service = args[2], cids[args[3]]
                if template == '{{.Name}}':
                    return ('/maroquiz-' + service).encode()
                if 'Labels' in template:
                    return json.dumps({'com.docker.compose.service': service,
                        'com.docker.compose.project.working_dir': str(project),
                        'com.docker.compose.project.config_files': str(project / 'docker-compose.prod.yml')}).encode()
                if 'Running' in template:
                    return b'true'
                mounts = [{'Destination': '/var/www/html/storage' if service == 'php' else '/var/lib/postgresql/data',
                           'Type': 'volume', 'Name': 'deployment_42_' + service,
                           'Source': str(self.source.root.parent if service == 'php' else database_host)}]
                if nested_mount and service == 'php':
                    mounts.append({'Destination': '/var/www/html/storage/app/exam_pdfs'})
                return json.dumps(mounts).encode()
            if args[0] == 'volume':
                return json.dumps({'Driver': 'local', 'Options': None,
                    'Mountpoint': str(self.source.root.parent if args[-1].endswith('php') else database_host)}).encode()
            if args[-1] == 'php':
                return json.dumps(settings).encode()
            return json.dumps({**self.source.info, 'pdfs': ['missing.pdf' if missing_pdf else 'exam.pdf'],
                               'avatars': ['avatars/avatar.png']}).encode()
        return project, docker, calls

    def test_docker_adapter_discovers_real_volume_names_and_only_runs_read_operations(self):
        project, docker, calls = self.deployment()
        with patch.object(backup.DockerSource, 'docker', side_effect=docker):
            source = backup.DockerSource(project)
        self.assertEqual(source.storage_volume, 'deployment_42_php')
        self.assertEqual(source.postgres_volume, 'deployment_42_postgres')
        self.assertEqual(source.root, self.source.root)
        self.assertFalse(any(token in {'up', 'down', 'rm', 'restart', 'stop', 'create'} for call in calls for token in call))

    def test_docker_adapter_fails_for_external_upload_roots_and_nested_mounts(self):
        for option in ['outside_disk', 'nested_mount']:
            with self.subTest(option=option):
                project, docker, _ = self.deployment(**{option: True})
                with patch.object(backup.DockerSource, 'docker', side_effect=docker):
                    with self.assertRaises(backup.BackupError):
                        backup.DockerSource(project)
                shutil.rmtree(project)
                shutil.rmtree(self.base / 'postgres-volume')

    def test_docker_adapter_fails_if_a_database_referenced_pdf_is_missing(self):
        project, docker, _ = self.deployment(missing_pdf=True)
        with patch.object(backup.DockerSource, 'docker', side_effect=docker):
            with self.assertRaisesRegex(backup.BackupError, 'referenced PDF/avatar'):
                backup.DockerSource(project)


if __name__ == '__main__':
    unittest.main()
