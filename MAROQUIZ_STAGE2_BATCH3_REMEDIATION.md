# MaroQuiz — Essential security corrections, Batch 3

2026-10-31. Local preparation only; the existing Oracle VPS was not contacted.

**1. Fixed**

- SEC-004: added an allowlisted Docker context and explicit application copies. Local environment files, private storage, host dependencies, caches, backups and test artifacts are excluded. Dependencies are installed inside build stages; runtime Composer platform validation is mandatory. Added the missing curl/DOM/mbstring extension build inputs required by the current lockfile.
- SEC-003: default/demo seeders now refuse environments outside local/testing. An explicit `ProductionAdminSeeder` requires supplied identity and a strong password, creates no demo activity, preserves existing administrator credentials and refuses account promotion/username collisions. No educational or Concours seeder was created or changed.
- INF-001: production Compose requires application/signing/database/Redis values, forces production/debug-off settings, uses separate runtime database credentials, clears `DB_URL` and removes the PostgreSQL owner password from PHP's environment. Runtime validation rejects invalid/missing values without printing secrets. This corrects the local recipe; it makes no claim about current VPS configuration.
- INF-002: startup copies public assets only, without deleting shared files or copying application/private storage. Writable directories are prepared for www-data; existing incompatible ownership fails explicitly. Nginx gets a read-only storage mount for the public-storage link. Existing volume contents are retained.
- DEP-001: only `symfony/mime` changed from 7.4.13 to **7.4.22**, the first patched compatible 7.4 release in the [Symfony advisory](https://symfony.com/blog/cve-2026-45070-email-header-injection-via-non-token-characters-in-mime-parameter-names). All other locked packages match the pre-batch lockfile; earlier unrelated lockfile changes were preserved.
- Scheduler support: prepared an opt-in `exam-expiry` service running `php artisan schedule:work`, with restart supervision and discovery/notification/push gates false. It is excluded from the default stack and was not activated.

**2. Deferred**

- Database grants: prepared `infrastructure/postgres/runtime-role.sql.example` for a separate DML-only runtime role and owner/migration connection. No local roles, grants or credentials were changed. Existing ownership, memberships and PUBLIC privileges require target-specific review before execution.
- SSR/API capacity: the production recipe currently defaults to public API HTTPS; it supplies no separate SSR identity or verified client-IP mapping. Shared SSR egress can consume the anonymous 30/min/IP allowance. Added an explicit `SSR_API_URL` override, retaining the existing default. Choosing an internal URL alone does not fix shared-IP throttling. Live topology/client-IP validation remains required; quotas and trusted proxy rules were unchanged.
- Full runtime-image builds, real named-volume rehearsal, final seeders, broad regressions and VPS-specific checks belong to the later approved release stage. Cosmetic hardening, renderer redesign and speculative performance work were not undertaken.

**3. Files changed**

- `.dockerignore`, `docker-compose.prod.yml`
- `infrastructure/docker/php/{Dockerfile.prod,entrypoint.prod.sh,validate-production.php}`
- `infrastructure/docker/frontend/Dockerfile.prod`
- `infrastructure/postgres/runtime-role.sql.example`
- `infrastructure/tests/release_config_test.py`
- `backend/.env.production.example`, `backend/composer.lock`
- `backend/config/bootstrap_admin.php`
- `backend/database/seeders/{DatabaseSeeder,UserSeeder,ProductionAdminSeeder}.php`
- `backend/tests/Feature/ReleaseSecurityTest.php`
- `MAROQUIZ_STAGE2_BATCH3_REMEDIATION.md`

**4. Focused tests — passed**

- `composer update symfony/mime:7.4.22 --minimal-changes --no-scripts --no-plugins --no-interaction --no-progress`: exactly one package updated. Existing autoload-layout/cache warnings remain; no cleanup was performed.
- `composer audit --locked --no-interaction --format=json`: no advisories or abandoned packages. `composer check-platform-reqs --no-dev`: passed in the existing local PHP runtime, not a newly built production image.
- `phpunit --filter ReleaseSecurityTest`: **6 tests / 42 assertions** passed in isolated SQLite memory. Covers production seeder gates, strong explicit bootstrap, idempotence/identity preservation, MIME parameter-name injection rejection and actual reset/verification mail serialization through an in-memory transport. A fixture snapshot assertion was corrected; no application preservation failure remained.
- Two directly affected `SeededCommunityTest` methods (username/idempotence and existing-account preservation) passed in the initial focused run; unrelated seeder tests were not run.
- `python3 infrastructure/tests/release_config_test.py -v`: **5 passed**. Validates Compose with synthetic values, missing-value rejection, disabled-by-default scheduler, private service ports, runtime secret checks and entrypoint shell syntax. No service was started by these checks.
- One BuildKit COPY-only export verified actual Docker context exclusions, including nested synthetic secret/dependency/backup probes. A separate disposable container using the existing local PHP image, no network and temporary filesystems verified public asset publication/restart and retained upload/shared-file fixtures. This was not a complete production-image build or existing-VPS volume test.
- Evidence/commands are in `/tmp/maroquiz-batch3/`; the Laravel command used the existing isolated wrapper with a focused filter. No full Laravel/Angular/Node/browser suites, frontend build, load benchmark or full database/file fingerprinting was performed.

**5. Remaining release blockers**

No additional confirmed application defect was found in this scope. Release approval still depends on final seeders and comprehensive release verification, actual image/platform validation, existing-volume rehearsal, restricted database-role verification, scheduler operation and SSR/API topology/capacity validation. The local changes do not establish VPS readiness.

**6. Later VPS deployment checks**

- Inventory and preserve the existing VPS/Compose project, volumes, Nginx, SSL, domains and production environment. Review these recipe changes against the actual deployment; never copy local `.env`. Confirm valid production keys/URLs, distinct owner/runtime credentials and mail/queue settings without printing secrets.
- Build/inspect the real release images once; check extensions/platform requirements and absence of local secrets/data. Rehearse fresh and existing volumes, www-data ownership, upload visibility, restart and rollback. Review legacy shared-volume application copies separately; this batch deletes none of them.
- Confirm the exact PostgreSQL target, ownership/default privileges and restricted runtime grants; apply reviewed role changes only with authorization. Use the separate owner for migrations. Bootstrap an admin only through explicitly supplied `BOOTSTRAP_ADMIN_*` values and `db:seed --class=ProductionAdminSeeder --force`; refresh config cache for bootstrap, then remove the bootstrap password and rebuild runtime config cache. This command was not run against any real database.
- Run exactly one supervised scheduler instance with the same release/storage/Redis cache: approved `docker compose -f docker-compose.prod.yml --profile exam-expiry up -d scheduler`, or an existing verified equivalent. Confirm every-minute expiry and recovery. Keep discovery/notifications/push disabled unless separately authorized; review any pre-existing scheduler before enabling another.
- Verify SSR DNS/routing/TLS, actual Laravel client-IP identity, shared-IP bursts, genuine 429/Retry-After and recovery before choosing SSR/proxy configuration. No limiter bypass or forwarded-header trust was added here.
- Production reset remains a separate final-stage operation requiring exact target confirmation, backup and explicit reset approval. Upload/storage deletion needs separate authorization. Local educational data remains protected.

No existing application database, stored content, uploads or generated outputs were modified. No real migrations/seeders, production connection/deployment/reset, scheduler activation, GitHub push or repository cleanup occurred.
