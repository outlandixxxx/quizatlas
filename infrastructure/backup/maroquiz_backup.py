#!/usr/bin/env python3
"""Private Docker/PostgreSQL backups, verified publication lookup and isolated recovery tools."""
import argparse
import contextlib
import datetime as dt
import fcntl
import grp
import hashlib
import json
import os
from pathlib import Path, PurePosixPath
import re
import shutil
import stat
import subprocess
import sys
import tarfile
import tempfile
import time
import uuid
from zoneinfo import ZoneInfo

UTC = dt.timezone.utc
ZONE = ZoneInfo('Africa/Casablanca')
NAME = re.compile(r'maroquiz-\d{4}-\d{2}-\d{2}T\d{6}[+-]\d{4}-[0-9a-f]{8}\Z')
MAX_MANIFEST = 32 * 1024 * 1024
DOCKER = ['docker', '--host', 'unix:///var/run/docker.sock']


class BackupError(Exception):
    pass


def require(condition, message):
    if not condition:
        raise BackupError(message)


def run(args, *, label, stdin=None, stdout=None, timeout=3600, data=None, env=None):
    """Never print child output: Docker/PG errors can contain private values."""
    try:
        return subprocess.run(args, input=data, stdin=stdin, stdout=stdout or subprocess.PIPE,
                              stderr=subprocess.PIPE, check=True, timeout=timeout, env=env).stdout
    except (subprocess.SubprocessError, OSError) as error:
        raise BackupError(f'{label} failed; child output suppressed to protect credentials.') from error


def digest(stream):
    value = hashlib.sha256()
    size = 0
    while block := stream.read(1024 * 1024):
        value.update(block)
        size += len(block)
    return value.hexdigest(), size


def file_digest(path):
    with path.open('rb') as stream:
        return digest(stream)[0]


def safe_member(name):
    path = PurePosixPath(name)
    require(name and not path.is_absolute() and '..' not in path.parts and '\\' not in name,
            'Unsafe path in backup archive.')
    require(str(path) == name.rstrip('/'), 'Non-canonical path in backup archive.')


def snapshot(root):
    """Hash contents and detect renames, deletion and even change-then-revert writes."""
    require(root.is_dir() and not root.is_symlink(), 'Upload root is missing or is a symlink.')
    files = {}
    for path in [root, *sorted(root.rglob('*'))]:
        info = path.lstat()
        require(stat.S_ISREG(info.st_mode) or stat.S_ISDIR(info.st_mode),
                'Uploads contain a symlink or special file; review storage before backing up.')
        name = path.relative_to(root).as_posix()
        safe_member(name)
        entry = {'type': 'directory' if path.is_dir() else 'file', 'mode': stat.S_IMODE(info.st_mode),
                 'uid': info.st_uid, 'gid': info.st_gid, 'size': info.st_size if path.is_file() else 0,
                 'mtime_ns': info.st_mtime_ns, 'ctime_ns': info.st_ctime_ns,
                 'device': info.st_dev, 'inode': info.st_ino}
        if entry['type'] == 'file':
            with os.fdopen(os.open(path, os.O_RDONLY | os.O_NOFOLLOW), 'rb') as stream:
                entry['sha256'] = digest(stream)[0]
                after = os.fstat(stream.fileno())
            require((info.st_ino, info.st_size, info.st_mtime_ns, info.st_ctime_ns) ==
                    (after.st_ino, after.st_size, after.st_mtime_ns, after.st_ctime_ns),
                    'An upload changed while being read; retry during a quiet period.')
        files[name] = entry
    return files


def archive_uploads(root, target, files):
    with tarfile.open(target, 'w', format=tarfile.PAX_FORMAT) as archive:
        for name, entry in files.items():
            header = tarfile.TarInfo(name)
            header.mode, header.uid, header.gid = entry['mode'], entry['uid'], entry['gid']
            header.mtime = entry['mtime_ns'] // 1_000_000_000
            if entry['type'] == 'directory':
                header.type = tarfile.DIRTYPE
                archive.addfile(header)
            else:
                header.size = entry['size']
                with os.fdopen(os.open(root / name, os.O_RDONLY | os.O_NOFOLLOW), 'rb') as stream:
                    info = os.fstat(stream.fileno())
                    require((info.st_ino, info.st_size, info.st_mtime_ns, info.st_ctime_ns) ==
                            (entry['inode'], entry['size'], entry['mtime_ns'], entry['ctime_ns']),
                            'Uploads changed during backup; previous backups retained.')
                    archive.addfile(header, stream)


class HashReader:
    def __init__(self, stream):
        self.stream, self.hash, self.size = stream, hashlib.sha256(), 0

    def read(self, size=-1):
        block = self.stream.read(size)
        self.hash.update(block)
        self.size += len(block)
        return block


def catalog(bundle):
    """Read publication metadata. Full byte verification is a separate operation."""
    require(NAME.fullmatch(bundle.name) and bundle.is_dir() and not bundle.is_symlink(), 'Invalid backup directory.')
    expected = {f'{bundle.name}.tar.gz', 'manifest.json', 'SHA256SUMS'}
    require({p.name for p in bundle.iterdir()} == expected, 'Backup components are missing or unexpected.')
    for path in bundle.iterdir():
        require(path.is_file() and not path.is_symlink(), 'Backup components must be regular files.')
    require((bundle / 'manifest.json').stat().st_size <= MAX_MANIFEST, 'Manifest exceeds the supported size.')
    sums = {}
    require((bundle / 'SHA256SUMS').stat().st_size < 4096, 'Checksum file is oversized.')
    for line in (bundle / 'SHA256SUMS').read_text().splitlines():
        match = re.fullmatch(r'([0-9a-f]{64})  (.+)', line)
        require(match is not None and match[2] not in sums, 'Invalid checksum file.')
        sums[match[2]] = match[1]
    require(set(sums) == expected - {'SHA256SUMS'}, 'Checksum entries are incomplete.')
    require(file_digest(bundle / 'manifest.json') == sums['manifest.json'], 'Manifest checksum mismatch.')
    manifest = json.loads((bundle / 'manifest.json').read_text())
    require(isinstance(manifest, dict) and manifest.get('schema_version') == 1 and manifest.get('id') == bundle.name
            and manifest.get('status') == 'complete', 'Invalid or incomplete manifest.')
    require(manifest.get('timezone') == 'Africa/Casablanca', 'Unexpected backup timezone.')
    completed = dt.datetime.fromisoformat(manifest['completed_at_utc'])
    require(completed.utcoffset() == dt.timedelta(0), 'Backup completion timestamp must be UTC.')
    require(bundle.name.startswith('maroquiz-' + dt.date.fromisoformat(manifest['local_date']).isoformat() + 'T'),
            'Backup date and identifier disagree.')
    require(isinstance(manifest['components'], dict) and set(manifest['components']) == {'database.dump', 'uploads.tar'},
            'Manifest components are incomplete.')
    return manifest, sums


def verify(bundle):
    manifest, sums = catalog(bundle)
    archive_path = bundle / f'{bundle.name}.tar.gz'
    require(file_digest(archive_path) == sums[archive_path.name], 'Backup archive SHA-256 mismatch.')
    seen = set()
    with tarfile.open(archive_path, 'r|gz') as archive:
        for member in archive:
            require(member.isfile() and member.name in {'manifest.json', 'database.dump', 'uploads.tar'}
                    and member.name not in seen, 'Unsafe or duplicate backup archive member.')
            seen.add(member.name)
            stream = archive.extractfile(member)
            if member.name == 'manifest.json':
                require(member.size <= MAX_MANIFEST and stream.read() == (bundle / 'manifest.json').read_bytes(),
                        'Internal and external manifests differ.')
                continue
            reader = HashReader(stream)
            if member.name == 'uploads.tar':
                uploaded = {}
                with tarfile.open(fileobj=reader, mode='r|') as uploads:
                    for entry in uploads:
                        safe_member(entry.name)
                        require((entry.isfile() or entry.isdir()) and entry.name not in uploaded,
                                'Unsafe or duplicate upload archive member.')
                        data = {'type': 'directory' if entry.isdir() else 'file', 'size': entry.size,
                                'mode': entry.mode, 'uid': entry.uid, 'gid': entry.gid}
                        if entry.isfile():
                            data['sha256'], _ = digest(uploads.extractfile(entry))
                        uploaded[entry.name] = data
                expected = {name: {k: v for k, v in entry.items()
                                  if k in {'type', 'size', 'mode', 'uid', 'gid', 'sha256'}}
                            for name, entry in manifest['uploads']['files'].items()}
                require(uploaded == expected, 'Upload inventory, metadata or SHA-256 mismatch.')
            else:
                require(reader.read(5) == b'PGDMP', 'Database component is not a PostgreSQL custom dump.')
            while reader.read(1024 * 1024):
                pass
            require(reader.hash.hexdigest() == manifest['components'][member.name]['sha256']
                    and reader.size == manifest['components'][member.name]['size_bytes'],
                    'Component checksum or size mismatch.')
    require(seen == {'manifest.json', 'database.dump', 'uploads.tar'}, 'Backup archive is incomplete.')
    return manifest


@contextlib.contextmanager
def lock(directory, filename):
    with os.fdopen(os.open(directory / filename, os.O_CREAT | os.O_RDWR | os.O_NOFOLLOW, 0o600), 'w') as handle:
        try:
            fcntl.flock(handle, fcntl.LOCK_EX | fcntl.LOCK_NB)
        except BlockingIOError as error:
            raise BackupError('Another backup process holds the lock; no work performed.') from error
        yield


def private_directory(directory, *, group=None, root_owned=False):
    require(directory.is_absolute() and directory.resolve() == directory and not directory.is_symlink(),
            'Backup directory must be an absolute path without symlinks.')
    require(directory.exists(), 'Backup directory is missing; install the private destination first.')
    info = directory.stat()
    allowed = 0o027 if group is not None else 0o077  # no group writes, and no other access
    require(directory.is_dir() and info.st_uid == (0 if root_owned else os.geteuid())
            and not stat.S_IMODE(info.st_mode) & allowed, 'Backup directory ownership/permissions are unsafe.')
    if group is not None:
        require(info.st_gid == group, 'Backup directory group does not match the configured reader group.')


def disk_space(directory, database_bytes, upload_bytes, reserve_mb):
    required = 3 * (database_bytes + upload_bytes) + reserve_mb * 1024 * 1024
    require(shutil.disk_usage(directory).free >= required,
            'Insufficient free disk space; no previous backup was deleted. Increase space or move backup storage.')


def latest(directory, yesterday=False, now=None):
    now = now or dt.datetime.now(UTC)
    day = (now.astimezone(ZONE).date() - dt.timedelta(days=1)).isoformat() if yesterday else None
    candidates = []
    for bundle in directory.iterdir():
        if not NAME.fullmatch(bundle.name) or bundle.is_symlink() or not bundle.is_dir():
            continue
        try:
            manifest, sums = catalog(bundle)
            if day is None or manifest['local_date'] == day:
                candidates.append((manifest['completed_at_utc'], bundle, sums))
        except (BackupError, OSError, ValueError, KeyError, TypeError, AttributeError):
            continue
    for _, bundle, sums in sorted(candidates, key=lambda entry: entry[0], reverse=True):
        # Publication already verified every component. Rechecking the outer
        # digest proves those verified bytes remain intact, including on lookup.
        try:
            if file_digest(bundle / f'{bundle.name}.tar.gz') == sums[f'{bundle.name}.tar.gz']:
                return {'id': bundle.name, 'sha256': sums[f'{bundle.name}.tar.gz'],
                        'manifest_sha256': sums['manifest.json'],
                        'size_bytes': (bundle / f'{bundle.name}.tar.gz').stat().st_size}
        except OSError:
            continue
    raise BackupError('No complete, checksum-verified backup found for the requested date.')


def prune(directory, days, keep, now=None):
    if days == 0:
        return
    cutoff = (now or dt.datetime.now(UTC)) - dt.timedelta(days=days)
    for bundle in directory.iterdir():
        if bundle.name == keep or not NAME.fullmatch(bundle.name) or bundle.is_symlink() or not bundle.is_dir():
            continue
        try:
            manifest, _ = catalog(bundle)
            if dt.datetime.fromisoformat(manifest['completed_at_utc']) < cutoff:
                verify(bundle)  # Never remove unrecognized, incomplete or corrupt data.
                shutil.rmtree(bundle)
        except (BackupError, OSError, ValueError, KeyError, TypeError, AttributeError, tarfile.TarError):
            print('WARNING: An expired backup could not be safely verified/pruned; retained it.', file=sys.stderr)


def unpack(bundle, destination):
    verify(bundle)
    require(not destination.exists(), 'Unpack destination must be new; existing directories are never overwritten.')
    destination.mkdir(parents=True, mode=0o700)
    with tarfile.open(bundle / f'{bundle.name}.tar.gz', 'r|gz') as archive:
        for member in archive:
            # verify() already checked the exact regular-file allowlist.
            with (destination / member.name).open('xb') as output:
                shutil.copyfileobj(archive.extractfile(member), output)
            (destination / member.name).chmod(0o600)
    print('Verified components unpacked. No database connection or restoration performed.')


class DockerSource:
    """Read the actual deployment; never guess Compose's volume-name prefix."""
    def __init__(self, project):
        self.project = project
        require(project.is_absolute() and project.is_dir() and project.resolve() == project,
                'Production project directory is missing or uses symlinks.')
        compose = project / 'docker-compose.prod.yml'
        require(compose.is_file() and (project / '.env').is_file(), 'Production Compose file or environment is missing.')
        self.env = {k: v for k, v in os.environ.items() if not k.startswith(
            ('APP_', 'POSTGRES_', 'DB_', 'REDIS_', 'JWT_', 'FRONTEND_', 'COMPOSE_', 'DOCKER_'))}
        self.compose = ['compose', '--project-directory', str(project), '--env-file', str(project / '.env'), '-f', str(compose)]
        self.containers = {}
        for service, expected in [('php', 'maroquiz-php'), ('postgres', 'maroquiz-postgres')]:
            cid = self.docker([*self.compose, 'ps', '-q', service], label='Production service lookup', timeout=60).decode().strip()
            require(re.fullmatch(r'[a-f0-9]{12,64}', cid), 'Exactly one running production service is required.')
            labels = self.inspect(cid, '{{json .Config.Labels}}')
            require(labels.get('com.docker.compose.service') == service
                    and labels.get('com.docker.compose.project.working_dir') == str(project)
                    and str(compose) in labels.get('com.docker.compose.project.config_files', '').split(','),
                    'Container Compose labels do not match the intended production project/file.')
            require(self.docker(['inspect', '--format', '{{.Name}}', cid], label='Container name check').decode().strip() == '/' + expected,
                    'Unexpected production container name.')
            require(self.inspect(cid, '{{json .State.Running}}') is True, 'A required production container is not running.')
            self.containers[service] = cid
        self.storage_volume, self.storage_host = self.volume('php', '/var/www/html/storage')
        self.postgres_volume, self.postgres_host = self.volume('postgres', '/var/lib/postgresql/data')
        probe = Path(__file__).with_name('probe-storage.php').read_bytes()
        self.settings = json.loads(self.docker(['exec', '-i', self.containers['php'], 'php'],
                                              label='Read-only Laravel configuration probe', data=probe, timeout=60))
        require(self.settings['storage_path'] == '/var/www/html/storage'
                and self.settings['default_disk'] in {'local', 'public', 'exam_pdfs'},
                'Unsupported storage root or remote default disk; backup mapping must be reviewed.')
        db = self.settings['database']
        require(db['driver'] == 'pgsql' and db['host'] == 'postgres' and str(db['port']) == '5432' and not db.get('has_url'),
                'Laravel does not target the expected production PostgreSQL service.')
        require(re.fullmatch(r'[A-Za-z_][A-Za-z0-9_-]*', db['database']), 'Unexpected production database identifier.')
        self.root = self.storage_host / 'app'
        self.disk_roots = {}
        for disk, raw in self.settings['disks'].items():
            root = PurePosixPath(raw)
            base = PurePosixPath('/var/www/html/storage/app')
            require(root.is_relative_to(base) and '..' not in root.parts, 'An upload disk lies outside the backed-up app directory.')
            relative = root.relative_to(base).as_posix()
            self.disk_roots[disk] = relative
            require(not (self.root / relative).is_symlink(), 'An upload disk root is a symlink.')
        require((self.root / self.disk_roots['public']).is_dir()
                and (self.root / self.disk_roots['local']).is_dir(), 'A required Laravel upload directory is missing.')
        self.info = self.metadata()

    def docker(self, args, **kwargs):
        return run([*DOCKER, *args], env=self.env, **kwargs)

    def inspect(self, cid, template):
        return json.loads(self.docker(['inspect', '--format', template, cid], label='Read-only Docker inspection', timeout=60))

    def volume(self, service, destination):
        mounts = self.inspect(self.containers[service], '{{json .Mounts}}')
        require(not any(m['Destination'].startswith(destination + '/') for m in mounts),
                'Nested storage mounts require an explicit backup mapping review.')
        found = [m for m in mounts if m['Destination'] == destination and m['Type'] == 'volume']
        require(len(found) == 1, 'A required persistent Docker volume is missing.')
        mount = found[0]
        info = json.loads(self.docker(['volume', 'inspect', '--format', '{{json .}}', mount['Name']],
                                     label='Read-only volume inspection', timeout=60))
        require(info['Driver'] == 'local' and not info.get('Options') and info['Mountpoint'] == mount['Source'],
                'Unsupported Docker volume driver/options or inconsistent mountpoint.')
        source = Path(mount['Source'])
        require(source.is_dir() and source.resolve() == source, 'Volume mountpoint is unavailable on the Ubuntu host.')
        return mount['Name'], source

    def pg(self, command, **kwargs):
        # The password comes from the already-running container, never CLI values or logs.
        script = 'set -eu; export PGPASSWORD="$POSTGRES_PASSWORD"; ' + command
        return self.docker(['exec', '-i', self.containers['postgres'], 'sh', '-c', script], **kwargs)

    def metadata(self):
        query = """SELECT json_build_object('database', current_database(),
          'server_version', current_setting('server_version'), 'size_bytes', pg_database_size(current_database()),
          'pdfs', COALESCE((SELECT json_agg(file_path) FROM public.exam_pdfs WHERE file_path IS NOT NULL), '[]'::json),
          'avatars', COALESCE((SELECT json_agg(avatar_url) FROM public.users WHERE avatar_url IS NOT NULL), '[]'::json));"""
        info = json.loads(self.pg('exec psql -X -A -t --no-password --host=127.0.0.1 '
                                 '--username="$POSTGRES_USER" --dbname="$POSTGRES_DB" -v ON_ERROR_STOP=1',
                                 label='Database metadata/schema check', data=query.encode(), timeout=60))
        require(info['database'] == self.settings['database']['database'], 'Laravel and PostgreSQL name different databases.')
        for key, disk in [('pdfs', 'exam_pdfs'), ('avatars', 'public')]:
            base = self.root / self.disk_roots[disk]
            for name in info[key]:
                if key == 'avatars' and name.startswith(('https://', 'http://')):
                    continue  # Remote identity-provider avatars are not persistent local uploads.
                safe_member(name)
                # Built-in Angular avatars are versioned frontend assets,
                # not user-uploaded files in Laravel persistent storage.
                if key == 'avatars' and re.fullmatch(
                    r'assets/avatars/avatar-(?:0[1-9]|1[0-2])\.webp', name
                ):
                    require(
                        (Path('/opt/maroquiz/frontend/src') / name).is_file(),
                        'A built-in frontend avatar is missing.'
                    )
                    continue
                path = base / name
                require(path.is_file() and path.resolve().is_relative_to(self.root),
                        'A database-referenced PDF/avatar is missing or outside persistent storage.')
        return info

    def dump(self, path):
        with path.open('xb') as stream:
            self.pg('exec pg_dump --format=custom --no-owner --no-acl --no-password --host=127.0.0.1 '
                    '--username="$POSTGRES_USER" --dbname="$POSTGRES_DB"', label='Consistent PostgreSQL dump', stdout=stream)

    def validate_dump(self, path):
        with path.open('rb') as stream:
            self.docker(['exec', '-i', self.containers['postgres'], 'pg_restore', '--no-owner', '--no-acl', '--file=/dev/null'],
                        label='Full PostgreSQL archive read/decompression check', stdin=stream)


def create_backup(directory, source, *, retention=14, reserve_mb=1024, group=None, now=None):
    now = now or dt.datetime.now(UTC)
    started = time.monotonic()
    local = now.astimezone(ZONE)
    name = 'maroquiz-' + local.strftime('%Y-%m-%dT%H%M%S%z') + '-' + uuid.uuid4().hex[:8]
    with lock(directory, '.backup.lock'):
        before = snapshot(source.root)
        upload_bytes = sum(item['size'] for item in before.values())
        disk_space(directory, source.info['size_bytes'], upload_bytes, reserve_mb)
        with tempfile.TemporaryDirectory(prefix='.incomplete-', dir=directory) as scratch:
            work = Path(scratch)
            source.dump(work / 'database.dump')
            require((work / 'database.dump').stat().st_size > 5, 'Database dump is empty.')
            source.validate_dump(work / 'database.dump')
            archive_uploads(source.root, work / 'uploads.tar', before)
            source.metadata()  # Also detect missing referenced files at the end of the dump window.
            require(snapshot(source.root) == before,
                    'Uploads changed during backup; incomplete run discarded. Previous backups retained.')
            components = {file: {'sha256': file_digest(work / file), 'size_bytes': (work / file).stat().st_size}
                          for file in ['database.dump', 'uploads.tar']}
            manifest = {'schema_version': 1, 'status': 'complete', 'id': name,
                        'started_at_utc': now.isoformat(),
                        'completed_at_utc': (now + dt.timedelta(seconds=time.monotonic() - started)).isoformat(),
                        'timezone': 'Africa/Casablanca', 'local_date': local.date().isoformat(),
                        'project_path': str(source.project), 'compose_file': 'docker-compose.prod.yml',
                        'database': {'name': source.info['database'], 'server_version': source.info['server_version'],
                                     'source_volume': source.postgres_volume, 'format': 'pg_dump custom'},
                        'uploads': {'source_volume': source.storage_volume, 'root': 'storage/app',
                                    'disk_roots': source.disk_roots, 'files': before,
                                    'consistency': 'unchanged SHA-256 and filesystem metadata around dump/copy'},
                        'excluded': ['PostgreSQL raw data', 'Redis/cache/sessions/queues', 'Laravel logs/framework',
                                     'environment/secrets/roles/SSL', 'rebuildable assets', 'local rendering outputs'],
                        'components': components}
            (work / 'manifest.json').write_text(json.dumps(manifest, ensure_ascii=True, indent=2) + '\n')
            publish = work / name
            publish.mkdir(mode=0o700)
            archive_path = publish / f'{name}.tar.gz'
            with tarfile.open(archive_path, 'w:gz', compresslevel=6) as archive:
                for file in ['manifest.json', 'database.dump', 'uploads.tar']:
                    archive.add(work / file, arcname=file, recursive=False)
            shutil.copyfile(work / 'manifest.json', publish / 'manifest.json')
            (publish / 'SHA256SUMS').write_text(''.join(f'{file_digest(file)}  {file.name}\n'
                for file in [archive_path, publish / 'manifest.json']))
            verify(publish)
            require(shutil.disk_usage(directory).free >= reserve_mb * 1024 * 1024,
                    'Free disk space fell below the reserve; backup was not published and old backups retained.')
            for file in publish.iterdir():
                file.chmod(0o640 if group is not None else 0o600)
                if group is not None:
                    os.chown(file, 0, group)
                with file.open('rb') as stream:
                    os.fsync(stream.fileno())
            if group is not None:
                os.chown(publish, 0, group)
                publish.chmod(0o750)
            directory_fd = os.open(publish, os.O_RDONLY | os.O_DIRECTORY)
            try:
                os.fsync(directory_fd)
            finally:
                os.close(directory_fd)
            publish.rename(directory / name)  # Atomic publication, never a partially copied "successful" backup.
            directory_fd = os.open(directory, os.O_RDONLY | os.O_DIRECTORY)
            try:
                os.fsync(directory_fd)
            finally:
                os.close(directory_fd)
        prune(directory, retention, name, now=now)
        print(f'Backup verified and published: {name}')
        return directory / name


def main():
    os.umask(0o077)
    parser = argparse.ArgumentParser(description=__doc__)
    commands = parser.add_subparsers(dest='command', required=True)
    backup = commands.add_parser('backup')
    backup.add_argument('--check', action='store_true', help='Read-only deployment/disk/required-file checks; no dump, cleanup or app writes.')
    listing = commands.add_parser('latest', help='Return metadata of the newest atomically published backup.')
    listing.add_argument('--backup-dir', default='/var/backups/maroquiz')
    listing.add_argument('--yesterday', action='store_true', help='Use yesterday in Africa/Casablanca, not the PC clock.')
    check = commands.add_parser('verify')
    check.add_argument('bundle', type=Path)
    extract = commands.add_parser('unpack', help='Unpack verified components only; never restore a database.')
    extract.add_argument('bundle', type=Path)
    extract.add_argument('--destination', type=Path, required=True)
    args = parser.parse_args()
    try:
        if args.command == 'verify':
            verify(args.bundle)
            print('PASS: archive, manifest, database component and every upload SHA-256 verified.')
        elif args.command == 'unpack':
            unpack(args.bundle, args.destination)
        elif args.command == 'latest':
            print(json.dumps(latest(Path(args.backup_dir), args.yesterday)))
        else:
            require(os.geteuid() == 0, 'Production backup must run as root; no work performed.')
            project = Path(os.environ.get('MAROQUIZ_PROJECT_DIR', '/opt/maroquiz'))
            directory = Path(os.environ.get('MAROQUIZ_BACKUP_DIR', '/var/backups/maroquiz'))
            group = grp.getgrnam(os.environ.get('MAROQUIZ_BACKUP_GROUP', 'maroquiz-backup')).gr_gid
            private_directory(directory, group=group, root_owned=True)
            require(directory.is_relative_to('/var/backups') and directory != Path('/var/backups')
                    and not directory.is_relative_to(project),
                    'Server backups must use a private directory under /var/backups, outside the project.')
            source = DockerSource(project)
            require(not directory.is_relative_to(source.storage_host) and not directory.is_relative_to(source.postgres_host),
                    'Backup destination must not be inside an application/database volume.')
            retention = int(os.environ.get('MAROQUIZ_RETENTION_DAYS', '14'))
            reserve = int(os.environ.get('MAROQUIZ_MIN_FREE_MB', '1024'))
            require(retention >= 1 and reserve >= 1, 'Production retention and disk reserve must be positive.')
            if args.check:
                files = snapshot(source.root)
                disk_space(directory, source.info['size_bytes'], sum(f['size'] for f in files.values()), reserve)
                print('PASS: production containers, volume mappings, required uploads and disk space; no backup or cleanup performed.')
            else:
                create_backup(directory, source, retention=retention, reserve_mb=reserve, group=group)
    except (BackupError, OSError, ValueError, KeyError, TypeError, AttributeError, tarfile.TarError) as error:
        message = str(error) if isinstance(error, BackupError) else 'Operation failed; private details suppressed. Check configuration, storage and permissions.'
        print('ERROR: ' + message, file=sys.stderr)
        return 1
    return 0


if __name__ == '__main__':
    sys.exit(main())
