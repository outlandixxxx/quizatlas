#!/usr/bin/env python3
"""Opt-in real PG17 restore rehearsal: new RAM-backed container, no network/ports/host DB volumes."""
import importlib.util
import json
import os
from pathlib import Path
import subprocess
import tempfile
import time
import uuid

spec = importlib.util.spec_from_file_location('backup', Path(__file__).resolve().parents[1] / 'backup/maroquiz_backup.py')
backup = importlib.util.module_from_spec(spec)
spec.loader.exec_module(backup)
container = 'maroquiz-backup-test-' + uuid.uuid4().hex[:12]
docker = backup.DOCKER


def command(args, **options):
    return backup.run([*docker, *args], label='Isolated PostgreSQL fixture', timeout=120, **options)


class FixtureSource:
    def __init__(self, base):
        self.project = base / 'fixture-project'
        self.root = base / 'fixture-storage/app'
        for directory in ['private', 'public/avatars', 'exam_pdfs/concours/announcements']:
            (self.root / directory).mkdir(parents=True, exist_ok=True)
        for name, content in [('exam_pdfs/exam.pdf', b'%PDF-1.7\nExam fixture\n%%EOF'),
                              ('exam_pdfs/concours/announcements/session.pdf', b'%PDF-1.7\nSession fixture\n%%EOF'),
                              ('public/avatars/avatar.png', b'avatar fixture')]:
            (self.root / name).write_bytes(content)
        self.postgres_volume, self.storage_volume = 'isolated-ram-postgres', 'isolated-temp-files'
        self.disk_roots = {'local': 'private', 'public': 'public', 'exam_pdfs': 'exam_pdfs'}
        self.info = self.metadata()

    def metadata(self):
        sql = "SELECT json_build_object('database', current_database(), 'server_version', version(), 'size_bytes', pg_database_size(current_database()));"
        return json.loads(command(['exec', container, 'psql', '-XAt', '-U', 'fixture', '-d', 'fixture', '-c', sql]))

    def dump(self, path):
        with path.open('xb') as stream:
            command(['exec', container, 'pg_dump', '-U', 'fixture', '-d', 'fixture', '--format=custom', '--no-owner', '--no-acl', '--no-password'], stdout=stream)

    def validate_dump(self, path):
        with path.open('rb') as stream:
            command(['exec', '-i', container, 'pg_restore', '--file=/dev/null', '--no-owner', '--no-acl'], stdin=stream)


def main():
    # No automatic image download; this test cannot use an existing application container.
    command(['image', 'inspect', 'postgres:17', '--format', '{{.Id}}'])
    started = False
    try:
        command(['run', '--pull=never', '--rm', '-d', '--name', container, '--network', 'none',
                 '--tmpfs', '/var/lib/postgresql/data:rw,nosuid,size=256m',
                 '-e', 'POSTGRES_HOST_AUTH_METHOD=trust', '-e', 'POSTGRES_USER=fixture', '-e', 'POSTGRES_DB=fixture', 'postgres:17'])
        started = True
        until = time.monotonic() + 45
        while True:
            check = subprocess.run([*docker, 'exec', container, 'pg_isready', '-U', 'fixture', '-d', 'fixture'], capture_output=True)
            if check.returncode == 0:
                break
            if time.monotonic() > until:
                raise RuntimeError('Isolated PostgreSQL startup timed out')
            time.sleep(.25)
        sql = """CREATE TABLE exam_pdfs (id bigint PRIMARY KEY, file_path text NOT NULL);
        INSERT INTO exam_pdfs VALUES (1, 'exam.pdf'), (2, 'concours/announcements/session.pdf');
        CREATE TABLE users (id bigint PRIMARY KEY, avatar_url text);
        INSERT INTO users VALUES (1, 'avatars/avatar.png');"""
        command(['exec', '-i', container, 'psql', '-X', '-v', 'ON_ERROR_STOP=1', '-U', 'fixture', '-d', 'fixture'], data=sql.encode())
        with tempfile.TemporaryDirectory(prefix='maroquiz-real-backup-') as scratch:
            base = Path(scratch)
            destination = base / 'backups'
            destination.mkdir(mode=0o700)
            source = FixtureSource(base)
            bundle = backup.create_backup(destination, source, reserve_mb=1)
            backup.verify(bundle)
            recovery = base / 'isolated-recovery'
            backup.unpack(bundle, recovery)
            command(['exec', container, 'createdb', '-U', 'fixture', 'restored_fixture'])
            with (recovery / 'database.dump').open('rb') as stream:
                command(['exec', '-i', container, 'pg_restore', '-U', 'fixture', '-d', 'restored_fixture',
                         '--no-owner', '--no-acl', '--exit-on-error', '--single-transaction'], stdin=stream)
            counts = command(['exec', container, 'psql', '-XAt', '-U', 'fixture', '-d', 'restored_fixture', '-c',
                              'SELECT (SELECT count(*) FROM exam_pdfs), (SELECT count(*) FROM users);']).decode().strip()
            assert counts == '2|1', counts
            import tarfile
            with tarfile.open(recovery / 'uploads.tar') as archive:
                for name in ['exam_pdfs/exam.pdf', 'exam_pdfs/concours/announcements/session.pdf', 'public/avatars/avatar.png']:
                    assert archive.extractfile(name).read() == (source.root / name).read_bytes()
            print(json.dumps({'postgres_version': 17, 'dump_validation': 'passed', 'sha256_and_upload_inventory': 'passed',
                              'restore_to_new_fixture_database': 'passed', 'restored_pdfs': 2, 'restored_users': 1,
                              'production_or_local_application_databases_accessed': False}))
    finally:
        if started:
            # Only this randomly named fixture container, with no attached persistent volumes.
            command(['rm', '-f', container])


if __name__ == '__main__':
    os.umask(0o077)
    main()
