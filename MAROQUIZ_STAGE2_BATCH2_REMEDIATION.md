# MaroQuiz — Stage 2, Batch 2 remediation

Date: 2026-10-31. Local implementation completed; no deployment, push, real-database migration or reset.

## Changes and finding status

| Finding | Evidence and outcome |
| --- | --- |
| FUN-003 bookmarks | Reproduced `is_bookmarked: null`. The question resource now stores the supplied boolean. Toggle, reload, dashboard/result reads and cross-user isolation pass; existing bookmark rows are preserved. |
| FUN-005 teacher builder | Confirmed manager pages called admin-only CRUD routes. Added teacher routes inside the existing admin/manager group, using existing owner/admin policies. Managers can create/edit/delete their own content; ownership is server-assigned; other owners and ordinary students are denied. Admin middleware and sharing policies remain unchanged. |
| FUN-006 ordinary tests | Reproduced `node:crypto` compilation failure. Spec compilation includes Node types and the normal Angular target uses the existing single-worker runner configuration. The exact admin-menu expectation now includes the approved Facts Video Generator entry; navigation was not changed. |
| FUN-007 pass rate | Reproduced 50% where fixture outcomes require 75%. Landing statistics now count authoritative persisted `passed` outcomes among completed attempts. Tests cover different mark totals and thresholds and confirm attempts are unchanged. |
| FUN-008 translations | Filled the confirmed 24 French and 23 Arabic missing keys, preserving the existing English meaning and EN/FR/AR structure. Added translated teacher controls/errors and full key/interpolation parity tests. No educational text or slugs changed. |
| FUN-009 font/mobile observation | **Not reproduced with fonts loaded:** all 81 route/language/viewport samples fit. Expanded result reviews and question editors also fit. No CSS or redesign was needed. Font-blocked resilience remains outside this verification. |
| FUN-010 concurrency | **Resolved by Batch 1.** Existing locks passed PostgreSQL regression, including a newly explicit answer-versus-normal-submit race. No additional locking or uniqueness migration. The original audit now records this resolution while retaining its historical failure analysis. |
| Blog/chat creation | Reproduced numeric message/HTTP 200 instead of 201. Corrected the three creation callers to supply a string message and status 201. Authorization and response structure remain unchanged. |

Teacher questions and choices now save atomically in one request/transaction. Single-choice and true/false sets are validated, existing choice IDs survive edits, foreign choice IDs and reparenting are rejected, and choices referenced by saved answers cannot be removed. Question/quiz deletion uses existing soft-delete services. True/false wording fields are editable. The UI exposes owned-content editing/deletion and preserves existing inactive drafts under their unchanged subject; new quizzes require active subjects and majors. This follows existing policies and adds no shared-editor privilege or immutable content snapshot.

## Measured performance and migration

Reviewed local PostgreSQL plans using a read-only transaction, then benchmarked synthetic data in a disposable PostgreSQL database at the existing catalogue scale: 237 users, 278 subjects, 2,489 quizzes, 26,613 questions, 106,612 choices and 5,575 attempts. No seeders or real-content copies were used.

Migration `backend/database/migrations/2026_10_31_120000_add_quiz_read_indexes.php` adds four B-tree indexes: `questions(quiz_id, order)`, `choices(question_id, order)`, `quizzes(subject_id)`, and `quiz_attempts(quiz_id, user_id, status, id)`. Its rollback drops only those named indexes. The actual migration passed up/down/up in the disposable database, with all four indexes present after reapplication. **It was not applied to the development database.**

Median of five `EXPLAIN (ANALYZE, BUFFERS)` runs, milliseconds; local synthetic measurements, not VPS or endpoint latency:

| Query | Before | Indexed | After rollback |
| --- | ---: | ---: | ---: |
| Question choices | 13.726 | 0.032 | 7.872 |
| Ordered quiz questions | 4.064 | 0.043 | 2.986 |
| Subject quizzes | 0.484 | 0.028 | 0.273 |
| Active attempt lookup | 0.738 | 0.023 | 0.524 |
| Popular-quiz correlated counts | 1673.312 | 14.908 | 896.450 |
| Completed dashboard attempts | 0.965 | 0.800 | 0.866 |
| User ranking aggregate | 3.362 | 2.761 | 3.104 |

PERF-001 receives these measured improvements; the broader missing-index inventory is not declared resolved. PERF-004 remains a growth risk: dashboard materialization, all-user ranking and unbounded chat history were not demonstrated bottlenecks at current scale (local chat is empty). Recommend bounded chat queries and aggregate/window-based statistics with ordering, unread and authorization regressions when justified. No speculative rewrite or additional indexes were introduced. SSR/proxy capacity remains for infrastructure verification.

## Verification already completed

The following checks ran for this batch before the revised incremental-testing policy arrived. They are retained as evidence and will not be repeated for unrelated changes.

| Check | Result |
| --- | --- |
| New application regressions before fixes | Four failures reproduced bookmark, pass-rate, manager-route and creation-response defects. |
| Normal full Angular command | **389 tests / 75 files passed.** No temporary test configuration, removed tests or reduced assertions. |
| Laravel regression | **196 tests / 3,804 assertions; one expected PostgreSQL opt-in skip.** Seven seeder-invoking methods were explicitly excluded; no seeders ran. |
| Disposable PostgreSQL concurrency | **1 test / 46 assertions passed.** Parallel starts, full-set saves, duplicate submission, answer-versus-submit, expiry/submission/late answer and achievement/XP idempotence. |
| PostgreSQL performance migration | Apply, rollback and reapply passed; query plans/timings captured. Both disposable PostgreSQL databases were removed. |
| Production frontend build | Passed; existing style-budget warnings remain. |
| Changed PHP syntax | All 11 PHP files passed. |
| Revision Generator | Existing three Node test files: **10 tests passed**, using temporary outputs. |
| Facts generator | Existing Node test-file run passed. No real video job was generated. |
| Chromium UI | Real teacher create/edit/delete and bookmark refresh/dashboard/unbookmark passed against disposable Laravel SQLite fixtures; cross-owner read returned 403. **81 responsive samples, zero overflow and zero uncaught page errors.** |

Browser matrix: landing, ENSA Concours, terms, privacy, data deletion, active tutor quiz, completed result, new teacher quiz and question builder; EN/FR/AR at 390/820/1440px. Inter and Material Symbols were verified as loaded FontFace objects, backed by downloaded font bytes. Result reviews and question editors were expanded. Revision, Facts Video and YouTube Video admin routes also loaded in English/LTR. Public data used the prior read-only response snapshot; ancillary/admin APIs were stubbed. Quiz, bookmark and teacher requests used actual Laravel endpoints and disposable data. This does not establish deployed font delivery, SSR capacity, a complete accessibility audit or live generator/provider acceptance. The matrix predates the final form-loading/save guards; those are included in the final passing Angular suite and build. No further matrix rerun was needed for those guards.

Existing Batch 1 tests cover quiz authorization, full multiple-answer sets, expiry/unanswered scoring, fixed untimed tutor mode, results and reward idempotence. Their service implementations were preserved. The Laravel/Angular runs also retain Concours, authentication, admin and generator-interface regressions.

Commands used (workspace root unless noted; PHP wrappers force isolated databases, temporary storage and fake mail/notifications):

```bash
# frontend/ — ordinary project commands
npm test -- --watch=false
npm run build -- --configuration production

# Root — excludes only the six SeededCommunityTest methods and one seeder-invoking directory test
docker exec -i quizatlas-php php /dev/stdin --filter '^(?!.*(?:SeededCommunityTest|test_roots_are_idempotent_and_do_not_create_official_content)).*$' < /tmp/maroquiz-batch2-tests.php
docker exec -i quizatlas-php php < /tmp/maroquiz-batch2-pg.php
docker exec -i quizatlas-php php < /tmp/maroquiz-batch2-performance.php
docker exec -i quizatlas-php php < /tmp/maroquiz-batch2-lint.php
node /tmp/maroquiz-batch2-browser.cjs
node --test revision-generator/revision.test.js revision-generator/book.test.js revision-generator/corrected.test.js
node --test fact-generator/facts-video.test.js
```

Temporary evidence: `/tmp/maroquiz-batch2/`, especially `angular-final.log`, `laravel-final.log`, `postgres-concurrency.log`, `isolated-performance.json`, `build-final.log`, `browser-expanded.log`, `responsive-matrix.json`, `font-manifest.json` and `php-lint.log`. These files are local evidence, not deployment artifacts.

## Files changed by this batch

Paths below are relative to the repository root; existing dirty work was retained.

- `MAROQUIZ_FINAL_SECURITY_AND_FUNCTIONAL_AUDIT.md` — FUN-010 resolution annotation only.
- `MAROQUIZ_STAGE2_BATCH2_REMEDIATION.md` — this report.
- `backend/app/Http/Controllers/Api/{BlogAskController,BlogResponseController,LandingController}.php`
- `backend/app/Http/Controllers/Chat/ChatController.php`
- `backend/app/Http/Controllers/User/{TeacherQuizController,TeacherQuestionController}.php` — new.
- `backend/app/Http/Resources/QuestionForAttemptResource.php`
- `backend/routes/api.php` — scoped teacher CRUD routes only.
- `backend/database/migrations/2026_10_31_120000_add_quiz_read_indexes.php` — new, unapplied locally.
- `backend/tests/Feature/ApplicationRemediationTest.php` — new.
- `backend/tests/Feature/QuizConcurrencyTest.php` — additional direct race coverage.
- `frontend/angular.json`, `frontend/tsconfig.spec.json`
- `frontend/src/app/app.routes.ts` — teacher edit route.
- `frontend/src/app/core/models/teacher-quiz.ts`
- `frontend/src/app/core/transloco/translation-parity.spec.ts` — new.
- `frontend/src/app/features/teacher/services/teacher-share.api.ts`, `teacher-share.api.spec.ts` (new).
- `frontend/src/app/features/teacher/pages/create-quiz/create-quiz.component.{ts,html,spec.ts}` (spec new).
- `frontend/src/app/features/teacher/pages/question-builder/question-builder.component.{ts,html,spec.ts}` (spec new).
- `frontend/src/app/features/teacher/pages/dashboard/teacher-dashboard.component.{ts,html}`
- `frontend/src/app/layouts/admin-layout/admin-layout.audit.spec.ts`
- `frontend/src/assets/i18n/{en,fr,ar}.json`

## Preservation and remaining boundaries

The before/after read-only development snapshots match exactly across **all 60 tables**, including row fingerprints/counts, columns, constraints, indexes and captured configuration. Preserved: 237 users, 2,489 quizzes, 26,613 questions, 106,612 choices, 5,575 attempts, 57,086 answers, 987 user achievements, 15,451 XP transactions and four PDF records. The migration table is unchanged. Browser SQLite fixtures were removed.

The captured workspace review found no existing files removed and only the 23 scoped existing files above changed from the batch baseline. Protected storage/output files, Batch 1 report and unrelated existing source hashes matched. Evidence: `db-before.json`, `db-after.json`, `files-before.json`, `files-review.json`, `summary-review.json`. Two seeder files appeared independently during this session (`EducationSciencesFinalSeeder.php`, `PrimaryEducation2022Seeder.php`); this remediation did not create, modify or execute them. They were left untouched. This report was added after that file review; no additional full preservation scan was performed.

No production operation, environment copying, infrastructure edit, educational-data correction, seeder execution, discovery/publication activation or repository cleanup occurred. Remaining limits are PERF-004/growth work, font-blocked behavior, existing style budgets and later infrastructure/deployment verification.

## Policy for subsequent work

Use the audit and Batch 1 report as the verified baseline. Run affected tests and necessary security regressions incrementally; expand scope for shared authorization, scoring or concurrency changes. Reserve comprehensive Laravel/Angular/PostgreSQL/browser/generator/SSR/infrastructure verification for the final approved remediation milestone. Do not repeat full database/file fingerprints after small changes.

Final deployment will use the **existing Oracle VPS**. A clean production application database may be planned because the user reports no real production data to preserve, but execution requires exact target confirmation, a backup and separate reset authorization. Preserve the local database/content and existing VPS, Docker, Nginx, SSL, domain and environment settings; review any necessary configuration changes and never copy local `.env` to production. Upload/storage review is separate: database reset approval does not authorize file deletion. Production-safe educational/Concours seeders, without demo credentials or development activity, and a fresh isolated PostgreSQL migration/seeding rehearsal belong to a later authorized stage. No final seeder preparation, production reset or deployment is authorized in this batch.
