# MaroQuiz — Final release verification

2026-10-31. **GO for the next step: GitHub release preparation.**
This is not deployment approval. No verified local release blocker remains.

## Verification results

| Area | Result |
| --- | --- |
| Laravel | One isolated run: **198 tests, 3,819 assertions, one expected PostgreSQL opt-in skip**. Existing educational PostgreSQL was not accessed. |
| Seeder restrictions | Eleven seeder-invoking test methods excluded. No seeder executed. Unchanged bootstrap safeguards reuse Batch 3's passing evidence. |
| Angular | Normal `npm test -- --watch=false`: **389 tests / 75 files passed**, once. |
| Production build | Actual PHP and frontend images built successfully, once each. The frontend Dockerfile's `npm run build -- --configuration production` was the single required production build. |
| Built website | Concours/public, quiz, teacher, admin, revision, Facts Video and YouTube routes present. SSR bundle syntax and module import passed without starting a listener. |
| Docker contents | Both actual images inspected: no local environment files, private uploads/dumps, host dependencies, generator directories, Playwright, Chromium or FFmpeg found in application contents. |
| PHP runtime | Image uses www-data; storage/shared-public directories owned by UID/GID 33. Required extensions and actual-image `composer check-platform-reqs --no-dev` passed. Vendor is production-only; MIME 7.4.22 installed. |
| Configuration | Unchanged Batch 3 evidence reused: five Compose/runtime validation checks, non-destructive public-copy/restart checks and clean locked Composer advisory audit. Restricted-role template retained; scheduler opt-in and external automation gates unchanged. |
| Generators / concurrency | Entrypoints, manifests, lockfiles, fonts/licences, assets and launchers retained. Scoped comparison found 23 relevant files unchanged since Batch 2; reused 10 passing revision tests and PostgreSQL concurrency's 1 test / 46 assertions. No new rendering or database provision. |
| Release hygiene | Intended inventory matches cleanup. Focused credential-format review found no matches; conflict-marker and Git whitespace checks passed. |

**NON-BLOCKERS for GitHub preparation:** eleven existing style-budget warnings;
npm ci's summary of 16 moderate advisories, whose applicability was not assessed.
No dependency updates were made. The prior 81-case EN/FR/AR responsive matrix and
unchanged generator evidence were reused; no new browser/render/PDF/seeder work ran.

## Git release inventory

- Cleanup inventory accounted for all 1,567 intended files: 160 modified tracked files,
  321 untracked release files and seven deliberately archived tracked paths.
- All required application/Concours source, quiz/teacher fixes, migrations, existing
  seeders, bootstrap safeguards, tests, two permanent JSON fixtures, generator source,
  required sound/font/logo assets and Windows/WSL launcher are included.
- Secrets, dependencies, caches, uploads, backups, renderer jobs and generated media
  remain excluded. Git keeps local generator source; production Docker excludes it.
- This report adds one untracked file: **322 untracked / 1,568 intended files** afterward.
  Nothing was staged, committed, tagged or pushed; Git history is unchanged.

## Blockers

**None verified for GitHub release preparation.** Seeder selection/testing was
explicitly skipped and is not a blocker for this decision. Production database
initialization remains a separately authorized deployment operation.

## Deployment-stage checks

- Review the actual existing VPS environment, project/volume names, Nginx, domain,
  SSL, keys, URLs, mail/queue configuration and rollback plan; never copy local .env.
- Verify actual runtime-role privileges/ownership and separate migration credentials
  before applying reviewed grants. No local roles, grants or credentials changed here.
- Rehearse actual existing-volume ownership, upload visibility and rollback; image
  ownership and isolated copy checks do not establish the current VPS volume state.
- Authorize and verify exactly one healthy expiry scheduler; keep discovery,
  notifications and push disabled until separately approved.
- Validate deployed SSR/API routing, client-IP/proxy identity, shared-IP capacity,
  genuine 429/Retry-After and recovery. Limits/proxy trust were not changed locally.
- Any production reset requires exact target confirmation, backup and separate
  authorization. Storage/file deletion requires its own approval.

## Changes and evidence

Only this report was added. No application, infrastructure or seeder correction was needed.
Evidence: `/tmp/maroquiz-final-release/` (suite logs, build logs, hygiene/reuse checks,
image IDs/content inspection and SSR import result). Local verification tags:
`maroquiz-release-check-php:20261031`, `maroquiz-release-check-frontend:20261031`.
No real database operation, production service start, scheduler activation, VPS
connection, deployment or reset occurred. Existing data/uploads/outputs were preserved.
