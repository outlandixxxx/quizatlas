"""Focused production-recipe checks; synthetic environment, no database access."""
import json
import os
from pathlib import Path
import subprocess
import tempfile
import unittest

ROOT = Path(__file__).resolve().parents[2]
FIXTURE = {
    'APP_ENV': 'production', 'APP_DEBUG': 'false',
    'APP_KEY': 'base64:' + 'eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHg=',
    'JWT_SECRET': 'fixture-signing-secret-never-used-' * 2,
    'APP_URL': 'https://api.example.test', 'FRONTEND_URL': 'https://example.test',
    'POSTGRES_DB': 'release_fixture', 'DB_DATABASE': 'release_fixture',
    'POSTGRES_USER': 'fixture_owner', 'POSTGRES_PASSWORD': 'fixture-owner-password',
    'DB_USERNAME': 'fixture_runtime', 'DB_PASSWORD': 'fixture-runtime-password',
    'REDIS_PASSWORD': 'fixture-redis-password',
}


class ReleaseConfigTest(unittest.TestCase):
    def compose(self, values, profile=False):
        with tempfile.NamedTemporaryFile(mode='w') as env_file:
            env_file.write('\n'.join(k + '=' + v for k, v in values.items()))
            env_file.flush()
            clean_env = {k: v for k, v in os.environ.items() if k not in FIXTURE}
            return subprocess.run(['docker', 'compose', '--env-file', env_file.name,
                '-f', 'docker-compose.prod.yml'] + (['--profile', 'exam-expiry'] if profile else []) +
                ['config', '--no-env-resolution', '--format', 'json'],
                cwd=ROOT, env=clean_env, capture_output=True)

    def test_compose_rejects_missing_release_values(self):
        result = self.compose({})
        self.assertNotEqual(result.returncode, 0)
        self.assertIn(b'APP_KEY', result.stderr)

    def test_compose_keeps_private_services_and_opt_in_scheduler(self):
        default = self.compose(FIXTURE)
        self.assertEqual(default.returncode, 0, default.stderr.decode())
        self.assertNotIn('scheduler', json.loads(default.stdout)['services'])
        result = self.compose(FIXTURE, profile=True)
        self.assertEqual(result.returncode, 0, result.stderr.decode())
        services = json.loads(result.stdout)['services']
        php = services['php']['environment']
        self.assertEqual(php['APP_ENV'], 'production')
        self.assertEqual(php['APP_DEBUG'], 'false')
        self.assertNotEqual(php['DB_USERNAME'], services['postgres']['environment']['POSTGRES_USER'])
        self.assertEqual(php['DB_URL'], '')
        self.assertEqual(php['POSTGRES_PASSWORD'], '')
        for name in ['php', 'postgres', 'redis', 'frontend', 'scheduler']:
            self.assertFalse(services[name].get('ports'))
        scheduler = services['scheduler']
        self.assertEqual(scheduler['profiles'], ['exam-expiry'])
        self.assertEqual(scheduler['command'], ['php', 'artisan', 'schedule:work'])
        self.assertEqual(scheduler['restart'], 'unless-stopped')
        self.assertEqual(scheduler['environment']['APP_KEY'], FIXTURE['APP_KEY'])
        for name in ['CONCOURS_DISCOVERY_ENABLED', 'CONCOURS_NOTIFICATIONS_ENABLED', 'CONCOURS_PUSH_ENABLED']:
            self.assertEqual(scheduler['environment'][name], 'false')
        storage = next(v for v in services['nginx']['volumes'] if v['target'] == '/var/www/html/storage')
        self.assertTrue(storage['read_only'])

    def validator(self, values):
        command = ['docker', 'exec', '-i']
        for key, value in values.items():
            command += ['-e', key + '=' + value]
        command += ['quizatlas-php', 'php']
        return subprocess.run(command,
            input=(ROOT/'infrastructure/docker/php/validate-production.php').read_bytes(), capture_output=True)

    def test_runtime_validator_accepts_complete_configuration(self):
        result = self.validator(FIXTURE)
        self.assertEqual(result.returncode, 0, result.stderr.decode())
        self.assertEqual(result.stdout, b'')

    def test_runtime_validator_rejects_unsafe_configuration_without_echoing_values(self):
        values = dict(FIXTURE, APP_DEBUG='true', APP_KEY='fixture-invalid-key',
            JWT_SECRET='fixture-short', APP_URL='http://example.test',
            DB_USERNAME=FIXTURE['POSTGRES_USER'], REDIS_PASSWORD='')
        result = self.validator(values)
        self.assertNotEqual(result.returncode, 0)
        for field in ['APP_DEBUG', 'APP_KEY', 'JWT_SECRET', 'APP_URL', 'DB_USERNAME', 'REDIS_PASSWORD']:
            self.assertIn(field.encode(), result.stderr)
        for secret in ['APP_KEY', 'JWT_SECRET', 'DB_PASSWORD', 'POSTGRES_PASSWORD']:
            self.assertNotIn(values[secret].encode(), result.stdout + result.stderr)

    def test_entrypoint_shell_syntax(self):
        result = subprocess.run(['sh', '-n', str(ROOT/'infrastructure/docker/php/entrypoint.prod.sh')], capture_output=True)
        self.assertEqual(result.returncode, 0, result.stderr.decode())


if __name__ == '__main__':
    unittest.main()
