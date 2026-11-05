# Global generated-content usage

This registry concerns generated/exported material only. Ordinary quizzes, answers,
scores, XP and educational records are unchanged. Existing renderer templates,
Revision JSON explanations and publication workflows are reused.

## Workflows and success boundaries

| Existing workflow | Read-only actions | Action that consumes content |
| --- | --- | --- |
| Posts weekly pack, captions, corrections and fact JSON | Preview, replace, inspect JSON | Explicit Copy saves the complete weekly JSON privately first; all snippets share that logical export. Confirm uses the same export and retains existing SocialPost publication behavior. |
| Quiz video | Batch preparation, preview, inspect JSON | Copy saves the existing video JSON; rendering verifies the MP4 after worker success and reports completion. An explicitly linked JSON export and its MP4 share claims. |
| Facts Short / Long | Options, selection, export endpoint used for previews, live duration estimates | Starting a real render reserves its server-validated facts; a successful verified MP4 consumes them. Both profiles share the same registry. |
| Revision JSON | Existing GET exporter and preview | Copy retains the existing exporter output. The exporter has not been rebuilt. |
| Revision PNG / PDF / ZIP | Preview, editing, selection | Verified local output completion, or partial outputs released through the runner, commits their mapped question IDs. Derived formats explicitly reference their original operation and consume once. |

Saving a retained JSON is a successful JSON export, even if a subsequent clipboard
write fails. The original bytes can be downloaded from the admin usage panel.
That receipt does not claim that an MP4 or PDF was generated.

Failed/cancelled revision batches retain already completed/downloaded pages and
their used claims; only unproduced sources are released. Retry reuses the original
operation and already successful files. A fully completed revision batch must cover
every selected source. The existing renderer manifest supplies per-page mappings.

## Storage and identity

Migration: `database/migrations/2026_11_04_100000_create_content_usage_registry.php`.
It creates only:

- `content_usage_operations`: UUID, administrator, kind, request hash, attempt,
  status, parent operations, lease/completion timestamps and safe output receipts.
- `content_usage_items`: original source type/ID, fingerprint, exact source-version
  hash, status, label and derived-output lineage.
- `content_usage_claims`: uniquely constrained source-ID and normalized-text keys.

There are no cascading foreign keys to questions/facts: deleting or reseeding a
source does not erase its historical fingerprint. Do not clear these tables when
preserving usage history. Back up the registry with its application database.

Normalization uses Unicode NFC, HTML entity decoding, lowercase and collapsed
whitespace. Accents, Arabic marks, punctuation and mathematical operators remain.
Questions use their prompt; facts claim every nonempty language variant. Identical
normalized prompts in different quizzes, or identical fact translations under new
IDs, conflict. This is deterministic text matching, not semantic deduplication.
An existing source ID remains blocked even if its text is subsequently edited.

JSON files live on Laravel's private `local` disk under `content-exports/` and are
served through authenticated admin routes with checksum verification. The default
root is `storage/app/private`. Receipts contain names, sizes and SHA-256 values,
not absolute paths. Revision receipts summarize the verified artifact set.
Local MP4/revision outputs stay in the existing generator output directories;
runner state and pending reporting capabilities are stored with mode `0600` in
`video-generator/.local-jobs/`. No output or historical file is deleted.

## Concurrency, retries and recovery

Operations lock their row inside transactions. Unique claim keys arbitrate racing
reservations; a conflicting batch rolls back completely. A UUID plus canonical
payload hash makes replay idempotent; an ID cannot be reassigned to other content
or another administrator. Changing capture timestamps does not create a new use.

Laravel validates IDs and educational content against existing models/exporters.
The browser obtains a short-lived, single-use, purpose/payload-bound render ticket.
Only the loopback runner receives the attempt-bound HMAC reporting capability;
the admin JWT never goes to Node. Callbacks are enabled in `local`/`testing` only.
Output names/receipts are constrained and revision source IDs must belong to the
operation. Capabilities are invalidated by retry attempt fencing.

Lease defaults in `config/content_usage.php`:

- Reservation: 900 seconds. The runner sends a heartbeat about every 60 seconds.
- Failed reporting: durable outbox, retried every 15 seconds and after restart.
- Recovery: Laravel scheduler every five minutes, with overlap protection.

The existing Laravel scheduler must be running for automatic recovery. Expired
claims remain conservatively unavailable until recovery; a late completion cannot
revive an expired/released attempt. On a permanent reporting failure or lease
expiry, the worker is stopped, outputs are retained and unconfirmed outputs are
not advertised as completed. Reconnect and review/recover before retrying.

Run from `backend/` (or inside the existing PHP container):

```bash
php artisan content-usage:recover --dry-run
php artisan content-usage:recover
```

The admin panel can also release expired reservations. Completed usage is never
released. Legitimate derived formats must explicitly reference completed source
items owned by the same administrator and matching the same source version.

## Activation and boundaries

The migration has **not** been applied to the existing local educational database
or to production. It was tested with isolated SQLite and fresh PostgreSQL fixtures.
The new registry-backed generator actions need that migration before normal use.
For a later reviewed local activation, from `backend/`:

```bash
php artisan migrate --path=database/migrations/2026_11_04_100000_create_content_usage_registry.php
```

No reset, seed, backfill or production command is required by this implementation.
Existing SocialPost exclusions and draft video assignments remain respected; they
are not treated as proof of a successful historical render. Historical generator
files are not scanned or retroactively consumed.

Counts describe currently eligible catalogue **rows**, not unique fingerprints;
two identical rows can both report unavailable because one operation owns their
shared text. The admin panel fetches counts on demand/Refresh. It adds no query
to ordinary public quiz traffic.

The Angular operation cache and copied-export parent mapping last for the current
page session. After a reload, use retained JSON downloads and the existing resumed
revision job; fresh attempts to reuse consumed content are rejected safely.
The registry is scoped to one Laravel database; separate local and production
databases do not synchronize usage automatically.

All four existing local runner profiles are integrated: quiz, facts-short,
facts-long and revision-batch. Standalone CLI commands given manually authored
JSON outside Laravel have no authenticated source operation and are not tracked.
CLI rendering of already exported JSON is covered by its JSON-export receipt,
but does not assert media completion. No nonexistent generator is added. Rendering
engines remain local and remain excluded from the production Docker context.

## Focused verification

From the repository root, with the existing development PHP container:

```bash
docker exec quizatlas-php php vendor/bin/phpunit --filter 'ContentUsageTest|FactsVideoTest|RevisionImagesTest'
node --test video-generator/content-usage.test.js
python3 infrastructure/tests/content_usage_postgres.py
```

The opt-in PostgreSQL check uses an internal temporary Docker network, PostgreSQL
tmpfs and a read-only backend mount, with no application volumes/database access
and no image pulls. It needs existing `postgres:17` and development PHP images.
Its guarded fixture starts two real concurrent PHP transactions against PostgreSQL.
Node lifecycle tests use controlled workers and isolated temporary output files;
they do not regenerate production media.

From `frontend/`:

```bash
NG_BUILD_MAX_WORKERS=1 npm test -- --watch=false --ts-config=tsconfig.content-usage-spec.json --include=src/app/features/admin/content-usage/content-usage.spec.ts --include=src/app/features/admin/services/content-usage.api.spec.ts --include=src/app/features/admin/social-pack/social-pack.spec.ts --include=src/app/features/admin/revision-json/revision-json.spec.ts --include=src/app/features/admin/youtube-videos/youtube-videos.spec.ts --include=src/app/features/admin/facts-video/facts-video.spec.ts
NG_BUILD_MAX_WORKERS=1 npm run build -- --configuration production
```

Verification in this task: 34 focused Laravel tests passed (294 assertions),
35 Angular tests and eight Node lifecycle tests passed. Fresh PostgreSQL 17.10
migrations and real concurrent reservations, Posts publication and idempotent
retries passed in isolation. A normal production
build was blocked by Google Fonts DNS/network access; an offline production build
passed for browser and SSR with font inlining disabled for that invocation only.
Repository build settings were unchanged. Existing unrelated component stylesheet
budget warnings remain. No real MP4 was regenerated for these lifecycle checks.

## File inventory for this change

New backend files (paths relative to `backend/`):

- `app/Services/ContentUsage/{Fingerprint,Registry,Sources,Exports}.php`
- `app/Models/{ContentUsageOperation,ContentUsageItem}.php`
- `app/Http/Controllers/Api/{ContentUsageController,ContentUsageReportController}.php`
- `app/Services/VideoSetJsonExporter.php`
- `app/Console/Commands/RecoverContentUsage.php`, `config/content_usage.php`
- `database/migrations/2026_11_04_100000_create_content_usage_registry.php`
- `tests/Feature/ContentUsageTest.php`, `tests/Support/content_usage_postgres.php`
- `CONTENT_USAGE_TRACKING.md`

Modified backend files:

- `app/Http/Controllers/Api/{SocialPackController,VideoSetController,FactsVideoController,LocalRenderController}.php`
- `app/Services/{SocialQuestionSelector,SocialFactSelector,VideoQuestionSelector}.php`
- `routes/{api,console}.php`
- `tests/Feature/{FactsVideoTest,RevisionImagesTest}.php`

New frontend files (paths relative to `frontend/`):

- `src/app/features/admin/content-usage/content-usage.{ts,html,scss,spec.ts}`
- `src/app/features/admin/services/content-usage.api.{ts,spec.ts}`
- `src/app/features/admin/social-pack/social-pack.spec.ts`
- `tsconfig.content-usage-spec.json`

Modified frontend files:

- `src/app/features/admin/social-pack/social-pack.{ts,html}`
- `src/app/features/admin/youtube-videos/youtube-videos.{ts,html}`
- `src/app/features/admin/facts-video/facts-video.{ts,html}`
- `src/app/features/admin/revision-json/revision-json.{ts,html,spec.ts}`
- `src/app/features/admin/services/{local-render.api,video-batch.api,social-pack.api}.ts`
- `src/assets/i18n/{fr,ar,en}.json` (usage labels added alongside previous changes)

Local tooling: new `video-generator/content-usage.{js,test.js}` and
`infrastructure/tests/content_usage_postgres.py`; modified
`video-generator/local-runner.js`. No render template or seeder is changed.
