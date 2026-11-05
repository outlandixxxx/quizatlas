#!/usr/bin/env python3
"""Opt-in PostgreSQL concurrency check; no app database, existing volume, or image pull."""
import json
from pathlib import Path
import subprocess
import time
import uuid

ROOT = Path(__file__).resolve().parents[2]

def run(*args, check=True):
    return subprocess.run(args, check=check, text=True, capture_output=True)

def main():
    suffix = uuid.uuid4().hex[:12]
    network = 'mq-usage-test-' + suffix
    pg, php = network + '-pg', network + '-php'
    run('docker', 'image', 'inspect', 'postgres:17')  # Never pull implicitly.
    image = run('docker', 'inspect', '--format', '{{.Image}}', 'quizatlas-php').stdout.strip()
    try:
        run('docker', 'network', 'create', '--internal', network)
        run('docker', 'run', '--rm', '-d', '--name', pg, '--network', network, '--network-alias', 'postgres',
            '--tmpfs', '/var/lib/postgresql/data:rw,nosuid,size=512m',
            '-e', 'POSTGRES_HOST_AUTH_METHOD=trust', '-e', 'POSTGRES_USER=usage_fixture',
            '-e', 'POSTGRES_DB=mq_usage_test_' + suffix, 'postgres:17')
        deadline = time.monotonic() + 30
        while run('docker', 'exec', pg, 'pg_isready', '-U', 'usage_fixture', check=False).returncode:
            if time.monotonic() >= deadline:
                raise RuntimeError('The isolated PostgreSQL fixture did not start.')
            time.sleep(.25)
        env = {
            'APP_ENV': 'testing', 'CONTENT_USAGE_PG_TEST': '1', 'DB_CONNECTION': 'pgsql', 'DB_HOST': 'postgres',
            'DB_PORT': '5432', 'DB_DATABASE': 'mq_usage_test_' + suffix, 'DB_USERNAME': 'usage_fixture', 'DB_PASSWORD': '',
            'DB_URL': '', 'APP_CONFIG_CACHE': '/tmp/unused-config.php', 'APP_ROUTES_CACHE': '/tmp/unused-routes.php',
            'APP_KEY': 'base64:eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHg=',
            'LOG_CHANNEL': 'stderr', 'CACHE_STORE': 'array', 'SESSION_DRIVER': 'array', 'QUEUE_CONNECTION': 'sync',
        }
        command = ['docker', 'run', '--rm', '--name', php, '--network', network, '--read-only',
                   '--user', '1000:1000', '--tmpfs', '/tmp:rw,nosuid,mode=1777',
                   '--mount', f'type=bind,source={ROOT / "backend"},target=/app,readonly', '--workdir', '/app', '--entrypoint', 'php']
        for key, value in env.items():
            command += ['-e', f'{key}={value}']
        result = run(*command, image, 'tests/Support/content_usage_postgres.php')
        print(result.stdout.strip())
    finally:
        for container in [php, pg]:
            run('docker', 'rm', '-f', container, check=False)
        run('docker', 'network', 'rm', network, check=False)

if __name__ == '__main__':
    try:
        main()
    except subprocess.CalledProcessError as exc:
        raise SystemExit((exc.stderr or exc.stdout or 'Isolated Docker check failed.').strip())
