# MaroQuiz

Laravel 12 / PHP 8.4 API and Angular 21 application for quizzes, exam practice,
Concours preparation, PDFs and local video/revision generation. The production
application already runs on an Oracle Cloud VPS; this checkout contains local
changes awaiting release review.

## Local development

Use Linux/Ubuntu WSL, Docker Compose, Node.js 24 and npm. Keep the existing root
`.env` (Compose) and `backend/.env` (Laravel). For a new checkout, configure copies
of the corresponding `.env.example` files with your own values; never overwrite
an existing environment or commit credentials. Laravel connects to `postgres`
and `redis` on their container ports; host port mappings belong in root `.env`.

```bash
# From the repository root; use the existing volumes and configuration.
docker compose up -d postgres redis mailpit php nginx
docker compose exec php composer install --no-interaction

# Run the frontend separately, or use the existing Compose frontend service.
cd frontend
npm ci
npm start
```

The usual local frontend/API ports are 4200/8000; check your existing Compose
environment. Database initialization, migrations and seeders are deliberate
separate operations. Starting development must not reset the educational database.
See [seeding instructions](backend/SEEDING_GUIDE.md); legacy imports and demo
seeders are not the approved final production catalogue.

## Local generators

Quiz videos, Facts Short/YouTube videos, revision PNGs and PDF books share one
loopback runner on `127.0.0.1:3777`. Restore dependencies once in Ubuntu:

```bash
npm --prefix video-generator ci
npm --prefix fact-generator ci
npm --prefix revision-generator ci --ignore-scripts
bash video-generator/start-local-runner.sh
```

The generators also require Linux FFmpeg/FFprobe and Playwright Chromium; follow
the existing [video](video-generator/README.md), [facts](fact-generator/README.md)
and [revision](revision-generator/README.md) instructions. On Windows, launch
`start-maroquiz-video-renderer.cmd`; it delegates to the existing Ubuntu checkout.
Keep the console open. The launcher and its WSL paths have not been relocated.

Uploads, renderer jobs, custom music, dependencies and generated outputs remain
local and ignored. Required fonts, OFL licences, logos, synthesized sound effects,
templates, manifests and lockfiles belong in Git. Never publish runner state or
private source snapshots.

Generator source is backed up in GitHub for local use only. Production Docker
contexts exclude these directories; the VPS website does not run the renderer,
Playwright, Chromium or FFmpeg. Angular/Laravel admin integrations stay in the
application and connect to the renderer on the operator's local computer.

## Verification and release

Use affected tests for each change. The normal Angular command is
`npm test -- --watch=false` from `frontend/`. Laravel tests must use isolated
testing configuration/databases, with cached development configuration bypassed;
never run mutating helpers against the educational database. Permanent tests,
`frontend/scripts/`, `backend/tests/Support/` and infrastructure checks are retained.
Some manual acceptance helpers require local tokens, saved baselines or generated
results; their retained local inputs are intentionally not GitHub release content.
The two saved public-response fixtures under `backend/artifacts/` used by permanent
Laravel tests are explicitly included by `.gitignore`.

The [original audit](MAROQUIZ_FINAL_SECURITY_AND_FUNCTIONAL_AUDIT.md) and remediation
reports [1](MAROQUIZ_STAGE2_BATCH1_REMEDIATION.md),
[2](MAROQUIZ_STAGE2_BATCH2_REMEDIATION.md) and
[3](MAROQUIZ_STAGE2_BATCH3_REMEDIATION.md) retain the verified baseline and release
gates. Full release verification and final educational/Concours seeder selection
remain separate approved work. No seeder execution is part of repository cleanup.

Production preparation uses `docker-compose.prod.yml`,
`backend/.env.production.example`, the Batch 3 instructions and
`infrastructure/postgres/runtime-role.sql.example`. Preserve the existing VPS,
Docker volumes, Nginx, SSL, domains and production environment. Never copy local
`.env` to production. Database reset requires exact target confirmation, backup
and separate authorization; file deletion is a separate decision. The exam-expiry
scheduler profile is opt-in; discovery and notifications remain independently gated.

Daily VPS database/upload backups and optional independent native Windows downloads are
prepared in [the backup operations guide](infrastructure/backup/README.md). The
Casablanca timer, installation/recovery commands and checksum tests are included;
neither installation nor production access is performed by local preparation.

## Historical material

Historical phase reports, screenshots, mockups, obsolete backups and the unused
root seeder wrapper were moved to a unique archive under
`~/MaroQuiz-archives/`. Each cleanup archive contains an original-relative-path
manifest and the release inventory; restore individual files from there if needed.
JSON still read by manual scripts stays at its original local path and is ignored.
Generated media, private uploads, local backups and current runner jobs were kept
in place. The source-referenced [Concours factual-data policy](backend/CONCOURS_RSS_FACTUAL_METADATA.md)
and font licences remain in the repository.
