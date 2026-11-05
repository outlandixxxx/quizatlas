# Main official announcement

The old implementation had no main/secondary designation. `Concours::sessionAnnouncements()`
selected verified, published, non-superseded notices, and `ConcoursResource` filtered them by
the displayed session year. The overview rendered all those notices as compact cards,
without their descriptions. Other years were shown by the history feed. Deleting and
recreating a notice did not assign it a different official role.

The local read-only inspection found Bac Libre's displayed session to be 2027. Notice #1
was soft-deleted; replacement #2 was already verified, published and associated with 2027.
These local IDs are not instructions for changing a production database.

## Explicit correction procedure

1. Review and apply the additive migration
   `2026_11_05_100000_add_official_announcement_to_concours.php` during an authorized
   migration/deployment stage. It adds one nullable reference, with no backfill. It has
   **not** been applied to the existing development or production database by this task.
2. In Admin → Concours announcements, filter by Bac Libre and open the existing notice
   containing the intended main content. Confirm its titles, descriptions, dates, PDFs,
   parent Concours and session. Do not recreate it or use the document-replacement field.
3. Confirm that the displayed session and the notice's session agree. The notice must
   already be verified and published. If an association/year genuinely needs correcting,
   use the existing withdraw/edit/verify/publish workflow separately after reviewing it.
4. Click **Désigner comme annonce officielle principale** (translated for FR/AR/EN), review
   the confirmation and confirm. This changes placement only. It neither merges documents
   nor edits content, publication state, session associations or other notice records.
5. Refresh `/concours/bac-libre`. The chosen notice and its bilingual description appear
   in the main section. Other current-session notices remain in their own section; previous
   sessions remain in history. To change the choice, open another eligible notice and repeat.

Concurrent/stale changes return HTTP 409; reload the editor and review the current choice.
Each changed designation is recorded in the existing announcement revision history, with
the previous and new IDs and the acting administrator.

Existing Concours pages retain their old display until an administrator explicitly selects
a main notice. After selection, withdrawal, soft deletion, supersession or session rollover
never promotes another notice automatically. An administrator must choose an eligible notice
for the new/current session. No correction or production reclassification runs automatically.

## Focused verification

From the repository root (Laravel tests use a fresh in-memory SQLite database only):

```sh
docker exec -w /var/www/html quizatlas-php php vendor/bin/phpunit tests/Feature/ConcoursOfficialAnnouncementTest.php tests/Feature/ConcoursSessionTest.php tests/Feature/ConcoursAnnouncementTest.php
```

From `frontend/`:

```sh
NG_BUILD_MAX_WORKERS=1 npm test -- --watch=false --ts-config=tsconfig.concours-spec.json --include=src/app/features/concours/announcements.spec.ts --runner-config=vitest.style.config.mjs
NG_BUILD_MAX_WORKERS=1 npm run build -- --configuration production
```

Recorded results: 6 new backend tests passed (75 assertions), 64 Angular tests passed,
and the production browser/SSR build passed with stylesheet budget warnings. A disposable
PostgreSQL 17 fixture verified migration/rollback, foreign-key enforcement, no backfill and
preservation of existing bilingual/session rows. No existing application database was migrated.
The 20 existing announcement/session regression tests had 18 passes and 2 failures in
examination-date validation (`test_editorial_form_validation_and_calendar_date_precision`
and `test_partial_date_edits_validate_retained_values_without_changing_the_record`). Both
failures were reproduced with unchanged HEAD classes; their unrelated validation logic was
left unchanged.
