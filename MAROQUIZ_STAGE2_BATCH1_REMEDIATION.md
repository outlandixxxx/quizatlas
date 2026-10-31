# MaroQuiz — Stage 2, Batch 1 remediation

Date: 2026-10-31. Scope: SEC-001, SEC-002, FUN-001, FUN-002 and FUN-004 from `MAROQUIZ_FINAL_SECURITY_AND_FUNCTIONAL_AUDIT.md`.

Quiz participation now applies a shared eligibility policy, preserves complete answer sets, keeps the selected mode fixed, and grades timed-out exams through the same transactional finalization path as submission. No migration, real-data correction, deployment or push was performed.

## Reproduction and root causes

Before application edits, the original isolated audit probes reproduced all five findings. Five new failing Laravel regressions independently reproduced the main boundaries. Evidence: `/tmp/maroquiz-batch1/original-probes.jsonl` and `tests-before.log`.

| Finding | Confirmed failure before changes | Root cause and correction |
| --- | --- | --- |
| SEC-001 | An unrelated ordinary student received questions with 200 and started an inactive, privately owned quiz with 201. | Direct participation routes checked neither availability nor sharing eligibility. `Quiz::eligibleTo()` and `QuizPolicy::participate()` now govern direct reads, starts and attempt operations, with the same query scope used by related lists. |
| SEC-002 | An owned, in-progress exam result returned correct keys and the explanation with 200. | Result ownership was checked, but completion was not. The result service now requires completed status and a completion timestamp. The controller first resolves any server-side expiry. Mode changes cannot turn the same exam into a tutor attempt. |
| FUN-001 | A two-correct-choice submission scored correctly but returned only the first selected/correct key. The new full-set request was initially rejected with 422. | Angular stored one letter and sent additive scalar selections; persistence, resume, feedback and review used different representations. The new atomic `choice_ids` contract replaces a complete set; Angular and result DTOs preserve every ID/key. |
| FUN-002 | A one-minute exam accepted an answer and submission one hour after starting. | Only a browser countdown enforced time, and refresh rebuilt the full duration. The server now derives the deadline from `started_at + quiz.duration`, rejects late changes, finalizes expiry and returns authoritative timing metadata. |
| FUN-004 | A repeated submit returned 500. | Expected quiz exceptions inherited from generic `Exception`, bypassing the API exception renderer. Closed/expired attempts now return 409; invalid answer associations return 422. Locks and one transaction protect scoring and rewards. |

## Participation policy

A participation-eligible quiz must be active and have an active, nondeleted subject and major. Soft-deleted quizzes are excluded. This availability requirement applies to students, owners, teachers/managers and administrators.

For active resources:

- Public quizzes (`owner_id = null`) are available to authenticated participants.
- Owned quizzes are available to their owner, administrators, or students enrolled through an active quiz share.
- A manager/teacher role alone does not grant access to somebody else's private quiz.
- Inactive shares do not confer participation access. Joining checks quiz and parent availability; repeated joins preserve one enrollment.
- Attempt reads, answers, submission, result and the retained mode endpoint still require attempt ownership. Administrators do not receive another student's attempt through these endpoints.
- Guest participation requests return 401, disallowed access returns 403, and missing/soft-deleted bound resources return 404.

Question retrieval, quiz lists, practice lists/counts, recommendations, bookmarks, ratings and relevant public catalog/landing lists use the same rules. Anonymous trial selection and grading use the public subset; an old trial token cannot reveal a quiz that has become private or unavailable. Existing bookmark/enrollment rows are retained.

Owner/admin authoring preview remains separate from participation. An owner can still inspect their inactive quiz through the existing teacher authoring route. Another teacher cannot use that route as a bypass. No management CRUD permissions were broadened.

## Answers, feedback and scoring

The inspected schema supports `single_choice`, `true_false` and `multiple_choice`, and stores one `user_answers` row per selected choice. The current real catalog remains 26,613 `multiple_choice` questions, including 40 with multiple correct choices. No type or correct-answer flag was changed.

The preferred request is:

```json
{"question_id": 123, "choice_ids": [456, 457]}
```

An empty list clears the selection. IDs must be distinct choices of that question, and the question must belong to the attempt's quiz. Single-choice and true/false questions permit at most one ID. Multiple-choice questions permit a complete set without inferring its size from the secret correct-answer flags. Mixed scalar/set payloads are rejected.

The scalar `choice_id` / `selected` API remains supported. A positive single-choice selection replaces its predecessor; `selected: false` removes the specified selection. All replacements execute while the parent attempt is locked. Angular sends complete sets and blocks overlapping saves, showing an error if a save cannot be confirmed.

Resume restores every selected ID after display-choice shuffling. Tutor feedback contains every correct/selected ID and the explanation. Exam answer responses contain no feedback. An incomplete attempt cannot use the result service to obtain explanations or correct keys. Mode is chosen before starting and stays fixed; changing it returns 409, including when attempting to resume through `start` with a different mode.

Final results add `selected_choice_ids`, `correct_choice_ids`, `user_answer_keys` and `correct_answer_keys`. The legacy first-key fields remain for compatibility. Review marks every correct and selected choice. An asynchronous-result regression also checks that the authoritative score renders after navigation.

Scoring remains exact-set matching with the existing marks, percentage and pass threshold. Unanswered questions earn zero. Client-supplied score, percentage and pass/fail values cannot override calculation. The existing XP formulas are retained, including the existing per-correct-selected-choice XP rule.

## Deadline, expiry and concurrency policy

The implemented product decisions are those supplied by the user:

1. Exam deadline = server `started_at + quiz.duration` in minutes. The server clock is authoritative; `now >= deadline` is expired. There is no grace period.
2. Expiry grades answers saved before that deadline. Unanswered questions receive no marks. Legacy late-answer rows are preserved but excluded from timeout scoring, displayed graded selections and answer XP.
3. Expiry records `status = expired`, a final score/percentage/pass outcome, and `submitted_at = deadline`. The final result remains accessible to an eligible owner of the attempt.
4. Existing completion/score/streak/achievement rewards are applied once. Graded timeouts participate in completion history, statistics, leaderboards, ratings, teacher results and the completed-quiz tab while retaining their expired status.
5. New answers and modifications after the deadline are rejected with 409. If processing crosses the boundary, a savepoint rolls back that action, then expiry and rewards commit before the error is returned.
6. Tutor mode has no exam deadline. The expiration command excludes tutor attempts.

All quiz mutation paths acquire a user row lock followed by an attempt row lock. Locking the user also handles concurrent starts when no attempt row exists and serializes achievement/XP work across different attempts by that user. Final status, score and rewards commit in one transaction. Duplicate submission returns 409 without awarding anything again. Expiration, submission and late saves use the same locked state.

`QuizAttemptResource` returns `server_time`, `deadline_at` and `remaining_seconds`. Angular resumes that state, derives its display from elapsed time rather than interval ticks, and rechecks the server on visibility/connection return. At local zero it asks the server to resolve expiry; it does not turn an early local countdown into an early normal submission. Reload does not start another attempt.

`quiz-attempts:expire` is registered with Laravel's scheduler every minute for attempts whose browser is closed or offline. It also finalizes due attempts after quiz deactivation/soft deletion. Requests enforce the exact deadline independently of this periodic sweep. The command was run only against disposable fixtures, never against the development database.

No migration is needed: the existing start time, duration, mode, expired status, submission timestamp and answer rows provide the required state. No historical-result backfill runs.

## Validation

All logs below are under `/tmp/maroquiz-batch1/` and are local, temporary evidence. Test fixtures never used the existing development tables for writes. No seeders were run.

| Check | Result / evidence |
| --- | --- |
| Original new regressions | 5 failures before fixes; `tests-before.log`. |
| Final focused Laravel quiz suite | **21 tests, 278 assertions passed**; `quiz-final.log`. |
| Broader Laravel regressions | **189 tests, 3,711 assertions, one expected skip**; `laravel-regression-final.log`. The skipped PostgreSQL opt-in test was run separately. Six `SeededCommunityTest` methods and the seeder-invoking directory-root method were deliberately excluded. The final sharing-route test was additionally covered by the focused suite. |
| Real PostgreSQL concurrency | **1 test, 38 assertions passed**; `postgres-concurrency.log`. A randomly named empty test database was created and removed. Independent PHP workers synchronized at a barrier. |
| Focused Angular, including existing choice shuffler tests | **27 tests in four files passed**; `angular-quiz-final.log`. |
| Broader Angular with temporary type configuration | **380 passed, one existing stale admin-menu assertion failed (381 tests / 71 files)**; `angular-full-final.log`. |
| Ordinary Angular command | Fails during compilation with the existing `node:crypto` / missing Node types errors in the revision specs; `angular-ordinary.log`. The repository test configuration was not changed. |
| Production frontend build | **Passed**, 464.78 kB initial raw / 132.16 kB estimated transfer, zero prerendered routes; `build-final.log`. Eleven existing style-budget warnings remain. The sandboxed first attempt could not resolve Google Fonts; the authorized network-enabled build passed. |
| PHP syntax | **34 PHP files passed syntax checks**; `php-lint.log`. |
| Chromium acceptance | **Passed**, three acceptance scenarios, 27 quiz API requests and zero uncaught page errors; `browser.log`. |

Commands actually used from the workspace root, unless noted:

```bash
# Wrappers force testing configuration, temporary storage and isolated databases.
docker exec -i quizatlas-php php /dev/stdin --filter QuizParticipationTest < /tmp/maroquiz-batch1-tests.php

docker exec -i quizatlas-php php /dev/stdin --filter '^(?!.*(?:SeededCommunityTest|test_roots_are_idempotent_and_do_not_create_official_content)).*$' < /tmp/maroquiz-batch1-tests.php

# Creates/removes only its randomly named disposable PostgreSQL database.
docker exec -i quizatlas-php php < /tmp/maroquiz-batch1-pg.php

docker exec -i quizatlas-php php < /tmp/maroquiz-batch1-lint.php
node /tmp/maroquiz-batch1-browser.cjs

# In frontend/:
npm test -- --watch=false
npm test -- --watch=false --ts-config=../../../../../tmp/maroquiz-batch1/tsconfig.quiz.json --include='src/app/features/user/active-quiz/*.spec.ts' --include='src/app/features/user/quiz-result/*.spec.ts' --include='src/app/features/user/quizzes/*.spec.ts' --include='src/app/core/services/choice-shuffler.spec.ts' --runner-config=vitest.style.config.mjs
npm test -- --watch=false --ts-config=../../../../../tmp/maroquiz-batch1/tsconfig.full.json --runner-config=vitest.style.config.mjs
npm run build -- --configuration production
```

The temporary Angular configs extend the existing spec config and supply Node types without changing the repository configuration. PostgreSQL concurrency tests opt in only when `QUIZ_CONCURRENCY_DATABASE` matches `maroquiz_batch1_test_<12 hex characters>` and the database is empty. They are intentionally skipped by the normal in-memory suite.

Coverage includes ordinary/owner/enrolled/unrelated-manager/admin access; inactive and soft-deleted parents; guest and cross-user access in all attempt states; sharing and authoring preview; full-set selection/deselection/replacement/resume; single-choice and true/false constraints; invalid associations; tutor feedback and fixed mode; normal completion; deadline equality; offline scheduling; legacy late rows; a save crossing the deadline; forged score values; duplicate/stale requests; historical-result preservation; and XP/achievement idempotence.

The PostgreSQL workers verify concurrent empty-row starts, competing whole-set replacements, duplicate submissions, simultaneous expiry/submission/late replacement, and different attempts earning the same user's first-completion achievement. They check final saved sets, scores, completion transaction counts, achievement counts and the user's XP balance.

Browser acceptance uses the production Angular CSR build and actual Laravel participation/result endpoints backed by a disposable SQLite file. Ancillary layout APIs are stubbed and external hosts are blocked. Its clock advance affects only that fixture's server clock. It verifies selection/deselection, single-answer replacement/clearing, refresh without a new start or deadline change, failed-save handling, offline timeout with one completion reward, 2/2 normal completion, duplicate submission returning 409, untimed fixed tutor mode, complete feedback, Arabic RTL resume and private quiz rejection. Screenshots: `/tmp/maroquiz-batch1/expired-result-390.png` and `/tmp/maroquiz-batch1/tutor-rtl-390.png`. Harness retries corrected fixture timing/format expectations; these did not mutate real data.

## Preservation and scope

Baseline: branch `main`, HEAD `c08df7707fd646b189da0690b93b6a63b0807948`, 1,253 tracked files, 103 already modified tracked files and 1,058 nonignored untracked files. The baseline fingerprinted 6,107 existing files, including protected storage and generator output directories.

The complete read-only database snapshots before/after match exactly: **60 tables**, all row counts and fingerprints, columns, constraints, indexes and captured runtime configuration. Relevant preserved counts:

| Record | Unchanged count |
| --- | ---: |
| Users | 237 |
| Majors / subjects | 11 / 278 |
| Quizzes | 2,489 |
| Questions | 26,613 |
| Choices | 106,612 |
| Quiz attempts | 5,575 |
| User answers | 57,086 |
| User achievements | 987 |
| XP transactions | 15,451 |
| PDF records | 4 |

Evidence: `db-before.json`, `db-after.json`, `db-final.json`, `files-before.json`, `files-final.json` and `summary-final.json`. No existing file was removed. Only the 41 scoped existing files listed below changed; eight implementation/test files and this report were added. All other existing file hashes, including the original audit and protected media/storage, are unchanged.

No changes were made to Concours implementation, generators, PDF storage, environment/configuration files, seeders, migrations or production infrastructure. The only additions to the already-dirty shared route files are the attempt-status route and quiz-expiry schedule. The original audit report is preserved. No repository cleanup, deployment, notification/discovery activation or GitHub push occurred.

## Files changed in this batch

- `MAROQUIZ_STAGE2_BATCH1_REMEDIATION.md`
- `backend/app/Console/Commands/ExpireQuizAttempts.php`
- `backend/app/Exceptions/Quiz/InvalidQuizAnswerException.php`
- `backend/app/Exceptions/Quiz/QuizAlreadySubmittedException.php`
- `backend/app/Exceptions/Quiz/QuizAttemptExpiredException.php`
- `backend/app/Http/Controllers/Api/LandingController.php`
- `backend/app/Http/Controllers/Api/PublicCatalogController.php`
- `backend/app/Http/Controllers/Api/QuizRatingController.php`
- `backend/app/Http/Controllers/Api/TrialQuizController.php`
- `backend/app/Http/Controllers/User/BookmarkController.php`
- `backend/app/Http/Controllers/User/QuizAttemptController.php`
- `backend/app/Http/Controllers/User/QuizController.php`
- `backend/app/Http/Controllers/User/UserProfileController.php`
- `backend/app/Http/Requests/QuizAttempt/SaveAnswerRequest.php`
- `backend/app/Http/Resources/QuizAttemptResource.php`
- `backend/app/Http/Resources/QuizListResource.php`
- `backend/app/Http/Resources/QuizWithQuestionsResource.php`
- `backend/app/Models/Quiz.php`
- `backend/app/Models/QuizAttempt.php`
- `backend/app/Policies/QuizPolicy.php`
- `backend/app/Services/AchievementService.php`
- `backend/app/Services/DashboardService.php`
- `backend/app/Services/GamificationService.php`
- `backend/app/Services/LeaderboardService.php`
- `backend/app/Services/PracticeService.php`
- `backend/app/Services/QuizAttemptService.php`
- `backend/app/Services/ScoreCalculationService.php`
- `backend/app/Services/TeacherShareService.php`
- `backend/app/Services/UserAnswerService.php`
- `backend/routes/api.php`
- `backend/routes/console.php`
- `backend/tests/Feature/QuizConcurrencyTest.php`
- `backend/tests/Feature/QuizParticipationTest.php`
- `backend/tests/QuizTestCase.php`
- `backend/tests/Support/quiz-concurrency-worker.php`
- `frontend/src/app/core/services/choice-shuffler.spec.ts`
- `frontend/src/app/features/user/active-quiz/active-quiz.component.html`
- `frontend/src/app/features/user/active-quiz/active-quiz.component.spec.ts`
- `frontend/src/app/features/user/active-quiz/active-quiz.component.ts`
- `frontend/src/app/features/user/quiz-result/quiz-result.component.html`
- `frontend/src/app/features/user/quiz-result/quiz-result.component.spec.ts`
- `frontend/src/app/features/user/quiz-result/quiz-result.component.ts`
- `frontend/src/app/features/user/quizzes/quizzes.component.html`
- `frontend/src/app/features/user/quizzes/quizzes.component.spec.ts`
- `frontend/src/app/features/user/quizzes/quizzes.component.ts`
- `frontend/src/app/features/user/services/quiz-attempt.api.ts`
- `frontend/src/app/features/user/services/quiz.api.ts`
- `frontend/src/assets/i18n/ar.json`
- `frontend/src/assets/i18n/en.json`
- `frontend/src/assets/i18n/fr.json`

## Remaining limits

- Offline finalization requires a healthy Laravel scheduler. The registered sweep runs every minute, so background persistence/rewards can occur on the next scheduler tick; all requests still enforce the exact deadline. No scheduler or production infrastructure was activated here.
- The deadline uses the existing quiz duration, as requested. This batch adds no immutable duration/content snapshot; an authorized quiz edit can change those underlying values.
- Browser acceptance uses isolated fixtures and a controlled server-clock advance. It does not establish production queue/scheduler health, proxy behavior or capacity. External font/icon hosts were blocked, so screenshots show fallback icon names and do not validate final typography.
- Intentional tutor, anonymous trial feedback and owner/admin authoring previews remain available under their existing purposes. These are practice/content-access features; this change does not add proctoring or prevent study of the same public material outside an attempt.
- Ordinary Angular test configuration, the stale admin-menu assertion and the existing build style warnings remain outside this batch. Other findings in the comprehensive audit remain open; these local fixes do not establish overall production readiness.

Batch 1 stops after this implementation, validation and report.
