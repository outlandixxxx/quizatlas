# Quiz-video usage lifecycle and selective repair

## Template-specific usage (2026-11-15)

Quiz video consumption is now independent for `long`, `five-seconds`,
`defi-du-jour`, and `niveau-concours`. Each scope keeps both question-ID and exact
normalized-text duplicate protection. The confirmed FR/EN interface choice does
not make the same stored question reusable within a template. Facts, Posts and
revision usage are unchanged. Preparation still does not consume questions.

Historical global quiz-video keys require **reclassification**, not a reset.
Unknown history stays restricted until its original template is established.
The local-only command below verifies the original authorization hash, current
stored source versions and exact question associations, then backs up the
affected records before changing identity keys and recording proven template
scopes on historical associations. Operation IDs, statuses, receipts, snapshots,
display counters and generated files remain unchanged. For older single jobs
whose saved input omitted worker profile/fps, only these bounded options may be
recovered, and only if the original authorization hash matches exactly.

Finish all active quiz rendering first. Choose a fresh private evidence filename
(the collector refuses overwrites); the command refuses apply while any quiz
reservation remains unresolved. No production connection is made or permitted.

```bash
mkdir -p -m 700 backend/storage/app/private/quiz-video-scope
node video-generator/quiz-video-scope-evidence.js \
  --out "$PWD/backend/storage/app/private/quiz-video-scope/evidence.json"
docker exec quizatlas-php php artisan content-usage:scope-quiz-videos \
  --evidence=/var/www/html/storage/app/private/quiz-video-scope/evidence.json --dry-run
# Inspect planned scopes and skipped records before explicit local apply:
docker exec quizatlas-php php artisan content-usage:scope-quiz-videos \
  --evidence=/var/www/html/storage/app/private/quiz-video-scope/evidence.json \
  --apply --expect-database=quizatlas
```

The default private backup directory is
`backend/storage/app/private/quiz-video-scope-repairs` (0700, JSON files 0600,
verified SHA-256). Rerunning the same evidence reports already-scoped operations
without changing them. Missing or ambiguous evidence is reported and left held.
No migration, reseeding or video regeneration is needed.

Local verification on 2026-11-15 reclassified 13 operations / 662 usage items
(including 20 already-released items), preserving all 1,284 affected claims.
The repeat dry run planned zero changes. Arabic radiology availability is now
30 long / 49 five-seconds / 49 defi-du-jour / 50 niveau-concours, instead of 28
in every scope. The one unresolved historical assignment remains question
27725 / assignment 758 / proposal 54; its missing original input is not guessed.
Private before/after API evidence is in
`backend/storage/app/private/quiz-video-scope-20261115/`; the checksummed backup is
`backend/storage/app/private/quiz-video-scope-repairs/quiz-video-scope-e4c6db7a-6ea6-456f-9ed2-11f9f81a14c2.json`.

## Confirmed causes and correction

`VideoBatchGenerator` saved `VideoSetQuestion` rows while preparing proposals.
`restrictsVideoReuse()` treated every association without a reset/release marker
as consumed, even though every local `VideoSet` still had `status=draft`.
The selector combined these restrictions with registry claims, while the generic
registry count endpoint did not include the association restrictions. Preparing
several videos exhausted health subjects without rendering them.

Quiz JSON downloads also claimed questions permanently. A JSON snapshot now has
an idempotent retained export record without claiming questions; other export
purposes keep their existing behavior.

New associations carry `quiz_video_usage_lifecycle=generation`; they describe
approved content without restricting other drafts. A batch explicitly excludes
its own sibling selections. Generation authorizes the unchanged stored snapshot
and reserves registry identities atomically. Unknown historical assignments
continue blocking selection/generation until reviewed. Conflicts preserve the
approved snapshot and require explicit admin changes.

Counts, selection and preparation share eligibility, template/language checks,
registry identities and deduplication. Arabic and Latin content are separated.
The existing schema does not distinguish French from English for Latin-script
questions: the admin confirms that locale; both use the same question identity,
so selecting another language cannot evade consumption.

Single and batch results validate media before recording usage. A validated
single result is durably reconciled even if the worker exited unexpectedly.
Unknown mappings remain held. Batch progress consumes only completed source IDs
before export; export failure never frees successful questions. Retry preserves
job, snapshot, choice IDs and outputs. Short display numbers are claimed at start;
failed unused claims release, and retry checks whether their number was reused.
Internal proposal IDs/video numbers and existing filenames are preserved.

Automatic expired-lease recovery no longer releases quiz-video operations without
output reconciliation. Resume through the retained local job, or use the scoped
repair after reviewing its evidence. Facts and revision purposes remain separate.

## Local result, 2026-11-14

The idle local runner was stopped before inventory/repair. No active rendering
job was reset. Inventory scanned retained job/input/output locations; standalone
Canva comparison output was explicitly identified separately. Frame filenames
were scanned without loading images. Successful records, media, uncertain jobs,
approved associations and other content purposes were preserved.

657 question-assignment restrictions were released, restoring 657 distinct
eligible health questions. One failed, ungenerated operation was reconciled.
The original approved associations, scores and numbering remain present.
Two successfully generated questions and one uncertain question remain excluded.
The uncertain record is question `27725`, assignment `758`, video proposal `54`;
its failed historical operation has no retained source/output mapping sufficient
to prove safe release. It was deliberately preserved.

| Subject | Language | Eligible | Successful | Active | Released | Uncertain | Available before → after |
|---|---|---:|---:|---:|---:|---:|---:|
| Anesthésie-réanimation | FR | 50 | 0 | 0 | 47 | 0 | 3 → 50 |
| التخدير والإنعاش | AR | 50 | 0 | 0 | 47 | 0 | 3 → 50 |
| Assistance médico-sociale | FR | 49 | 0 | 0 | 47 | 0 | 2 → 49 |
| المساعدة الطبية الاجتماعية | AR | 49 | 0 | 0 | 47 | 0 | 2 → 49 |
| Infirmier polyvalent | FR | 49 | 0 | 0 | 47 | 0 | 2 → 49 |
| التمريض متعدد التخصصات | AR | 49 | 0 | 0 | 47 | 0 | 2 → 49 |
| Kinésithérapie et rééducation | FR | 50 | 0 | 0 | 47 | 0 | 3 → 50 |
| العلاج الطبيعي وإعادة التأهيل | AR | 50 | 0 | 0 | 47 | 0 | 3 → 50 |
| Laboratoire médical | FR | 48 | 0 | 0 | 47 | 0 | 1 → 48 |
| المختبرات الطبية | AR | 48 | 0 | 0 | 47 | 0 | 1 → 48 |
| Techniques de radiologie | FR | 50 | 0 | 0 | 47 | 0 | 3 → 50 |
| تقنيات الأشعة | AR | 50 | 2 | 0 | 47 | 0 | 1 → 48 |
| Sage-femme | FR | 50 | 0 | 0 | 47 | 0 | 3 → 50 |
| القبالة | AR | 50 | 0 | 0 | 46 | 1 | 3 → 49 |

Totals: 32 → 689 available, with existing quality/deduplication rules retained.
Do not sum the report's FR and EN rows for Latin content: these are alternative
confirmed locales for the same underlying question pool.

Private evidence (ignored by Git):

- `backend/storage/app/private/quiz-video-repair-20261114/inventory-v2.json`
- `.../all-before-final.json`, `.../applied.json`, `.../all-after.json`
- `.../api-after.json`: authenticated existing API checks, all 14 combinations.
- Backup: `backend/storage/app/private/content-usage-repairs/quiz-video-repair-5f78ece0-b917-4480-be84-58823fb8d243.json`
- Backup SHA-256: `79612ac185c891ebf393b3a0ad322f8abb75727193474628108993c90c2008bf`.

The backup contains original records/states and changed IDs. It has mode 0600,
with a SHA-256 sidecar; its directory has mode 0700. The database transaction
checks actual availability against the dry-run projection before commit.

## Repeatable local command

Stop all local runners/standalone renders first. Inventory refuses a responding
runner or live retained worker. Use fresh filenames; evidence is never overwritten.

```bash
mkdir -p -m 700 backend/storage/app/private/quiz-video-repair
node video-generator/quiz-usage-inventory.js \
  --out "$PWD/backend/storage/app/private/quiz-video-repair/inventory.json" \
  --review-dir five-seconds-polish-20261109
docker exec quizatlas-php php artisan content-usage:repair-quiz-videos \
  --dry-run \
  --inventory=/var/www/html/storage/app/private/quiz-video-repair/inventory.json \
  --report=/var/www/html/storage/app/private/quiz-video-repair/before.json
```

`--review-dir` is specific to the reviewed comparison folder on this checkout.
Omit it elsewhere. It cannot hide a UUID job, input JSON, or an uninspected path.
Unknown records stay held. Inventory absence is usable only when original job
and output locations/history are complete; missing/deleted history requires
investigation. Do not attest completeness when this cannot be established.

After reviewing the database identity, per-subject report and exact plan:

```bash
docker exec quizatlas-php php artisan content-usage:repair-quiz-videos \
  --apply --expect-database=quizatlas --expect-plan=REVIEWED_PLAN_HASH \
  --runner-stopped --inventory-complete \
  --inventory=/var/www/html/storage/app/private/quiz-video-repair/inventory.json \
  --report=/var/www/html/storage/app/private/quiz-video-repair/applied.json
```

Optional `--major=ID` must be identical for dry-run/apply. A changed plan aborts.
The command is idempotent; it does not reset successful usage or delete records.
Restart the renderer using the existing launcher after reviewing results. It was
left stopped after this repair; no full video render or production batch started.

## Production procedure — prepared only, not executed

Deploy the reviewed code separately, then obtain authorization for the specific
production repair. Do not reuse the local plan hash, IDs or availability report.
Create a fresh, database-specific inventory covering **all original local render
locations that generated videos against that production catalogue**. Confirm
its mappings against the VPS records; retain uncertain/missing histories. Transfer
the reviewed inventory and checksum to private storage in the PHP container.
No rendering engines or Node installation are needed on the VPS.

Use `/opt/maroquiz/docker-compose.prod.yml`. Back up affected production records
and confirm the actual target/role before applying. This read-only identity check
must report `maroquiz_app`; do not switch to a database owner/superuser:

```bash
cd /opt/maroquiz
docker compose -f docker-compose.prod.yml exec -T php php -r \
'require "vendor/autoload.php"; $app=require "bootstrap/app.php"; $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap(); echo json_encode(Illuminate\Support\Facades\DB::selectOne("SELECT current_database() AS database, current_user AS role")),PHP_EOL;'

docker compose -f docker-compose.prod.yml exec -T php php artisan \
  content-usage:repair-quiz-videos --dry-run \
  --inventory=/var/www/html/storage/app/private/quiz-video-repair/inventory-vps.json \
  --report=/var/www/html/storage/app/private/quiz-video-repair/before-vps.json
```

Only after separate production authorization and report review:

```bash
docker compose -f docker-compose.prod.yml exec -T php php artisan \
  content-usage:repair-quiz-videos --apply --allow-production \
  --expect-database=CONFIRMED_PRODUCTION_DATABASE --expect-plan=REVIEWED_VPS_PLAN_HASH \
  --runner-stopped --inventory-complete \
  --inventory=/var/www/html/storage/app/private/quiz-video-repair/inventory-vps.json \
  --report=/var/www/html/storage/app/private/quiz-video-repair/applied-vps.json
```

The runtime role needs its normal SELECT/UPDATE permissions on affected tables,
DELETE on `content_usage_claims`, and permissions for the short-lived table locks.
No migration, schema ownership, TRUNCATE, seeding or superuser is required. A
lock/permission failure aborts the transaction; investigate without broad grants.
Keep runners stopped until the API counts and preserved successful usage match
the production report. Do not run the blanket `reset-quiz-videos` command.

## Focused verification

59 isolated Laravel tests (49 registry and 10 preparation); 34 Angular tests; 37 Node lifecycle,
inventory, export and recovery checks passed. Node included a tiny temporary
FFmpeg/FFprobe fixture; no catalogue/batch rendering. Heavy checks ran sequentially
with bounded workers. No comprehensive suite or production build was repeated.

```bash
docker exec quizatlas-php vendor/bin/phpunit tests/Feature/VideoPreparationUsageTest.php tests/Feature/ContentUsageTest.php
taskset -c 0,1 node --max-old-space-size=256 --test --test-concurrency=1 video-generator/content-usage.test.js video-generator/batch-recovery.test.js video-generator/quiz-usage-inventory.test.js video-generator/quiz-batch.test.js
cd frontend
NG_BUILD_MAX_WORKERS=1 taskset -c 0,1 node --max-old-space-size=768 node_modules/@angular/cli/bin/ng.js test --watch=false --ts-config=tsconfig.quiz-video-usage-spec.json --include=src/app/features/admin/youtube-videos/youtube-videos.spec.ts --include=src/app/features/admin/content-usage/content-usage.spec.ts --include=src/app/features/admin/services/content-usage.api.spec.ts --include=src/app/features/admin/services/video-batch.api.spec.ts --runner-config=vitest.style.config.mjs
```

Changed areas: backend video preparation/selection/export/authorization/registry,
short-number claims, repair command/service, focused feature tests; Angular video
preparation/count components and API clients with FR/AR/EN labels/tests; local
runner receipts/reconciliation and read-only inventory with focused tests. No
seeders, educational records, migrations, production infrastructure or outputs
were modified. No commit, push or deployment was performed.
