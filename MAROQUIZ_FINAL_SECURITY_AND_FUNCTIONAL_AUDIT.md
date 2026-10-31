# MaroQuiz — final security, functionality and production-readiness audit

**Stage 1: inspection, isolated testing and reporting only.**

Audit dates: 30–31 October 2026 UTC. Checkout: `main`, `c08df7707fd646b189da0690b93b6a63b0807948`, including the existing uncommitted work. This report assesses the local checkout and deployment recipes, not an inspected VPS installation.

**Recommendation: NO-GO for the current checkout and production recipe.** No application fixes, migrations, seeders, dependency upgrades, cleanup, publication or deployment were performed.

## A. Executive summary

MaroQuiz has substantial working functionality and useful security boundaries. The Concours publication and PDF controls, exact frontend API credential boundary, anonymous SSR, revision source validation, short-lived render tickets and local job capabilities are particularly strong. The current production frontend builds successfully. All **175 Laravel tests / 4,596 assertions** passed in SQLite in memory. Generator checks exercised real Chromium PNG/PDF rendering, searchable A4 output, Arabic continuations, source mappings, ZIP safety, corruption detection and retry preservation.

There are nevertheless confirmed release blockers:

1. An authenticated user can retrieve and start another owner's inactive/private quiz by numeric ID without enrollment or an access check.
2. An in-progress exam result request exposes correct-answer information and explanations before submission.
3. Quiz participation displays one selected answer while the backend retains multiple selections. Changing an answer can leave hidden choices saved. Multiple-answer results also report only the first answer. This matters across the current catalogue: all 26,613 stored questions have type `multiple_choice`; 40 require more than one correct choice.
4. Exam duration is a resetting browser countdown without a backend deadline. A one-minute exam accepted answers and submission after an hour in the isolated reproduction.
5. The default seeding path creates a preverified administrator with a shared source-defined demo password. This must never become the production bootstrap path.
6. The production build recipe copies the local backend `.env`, existing host dependencies and local backend files into the PHP image. The current root environment does not supply the production variables required by Compose. Fresh-volume ownership also requires correction or a successful isolated startup rehearsal.

The default Angular test command fails to compile. With a temporary configuration supplying Node types, the full run passed 359/363 tests; the focused rerun passed 49/50, resolving the two timeouts and the login assertion failure. The remaining failure is a stale admin-menu expectation. These are reported separately from application defects.

Composer identified an affected Symfony MIME dependency. Its presence is confirmed; exploitation through the inspected application is not. No confirmed critical remote exploit, administrative authentication bypass or public production-secret exposure was established.

Production SSR/API capacity, actual proxy attribution, TLS, certificates, recovery and VPS controls remain unverified. Passing local tests does not close those deployment gates.

## B. Scope, methodology and preservation

### Inspected scope

Reviewed the application and route structure in `backend/app`, `backend/routes`, `backend/config`, migrations, existing seeders and tests; Angular routing, core authentication/HTTP/SEO/i18n code, public/user/admin/teacher/Concours interfaces and tests; `revision-generator`, `video-generator`, `fact-generator`; Compose files, Dockerfiles, Nginx, PHP upload configuration and certificate-renewal script. Recursive source searches covered raw SQL, dynamic sorting, HTML execution, storage, child processes, credentials, network destinations and test side effects. Sensitive paths received direct code inspection; this was not a formal line-by-line certification of every dependency.

Tools: Git, ripgrep, Python hashing/static inventory, PHP/PDO read-only PostgreSQL transactions, PHPUnit, Angular/Vitest, production Angular build, Node test runner, Playwright/Chromium, FFmpeg/ffprobe, Composer audit/platform checks, npm audit for authorized generator trees, Docker read-only inspection, local Nginx syntax checks and Redis read-only commands.

OWASP Top 10 concerns were used to organize access control, injection, authentication, configuration, integrity and resource-abuse review. Applicable verification principles were taken from [OWASP ASVS](https://owasp.org/www-project-application-security-verification-standard/). This report does not claim ASVS certification or exhaustive penetration-test coverage.

### Baseline and preservation result

| Item | Baseline | Final verification |
|---|---:|---|
| Git branch / HEAD | `main` / `c08df7707fd646b189da0690b93b6a63b0807948` | Unchanged |
| Tracked files | 1,253 | Existing contents preserved |
| Modified tracked files | 103 | Existing modifications preserved |
| Untracked, nonignored files | 1,057; Git status collapses these into 202 entries | Preserved; this report is the intentional new repository file |
| Protected source, stored files and output artifacts hashed | 6,106 files; 1,980,940,848 bytes | Zero changed, missing or added files before writing this report |
| PostgreSQL public tables | 60 | All table counts and row-content fingerprints identical |
| Total rows across those tables | 215,916 | Identical |
| Column definitions, constraints and indexes | Captured separately | Identical |
| Registered constraints | 233 | No unvalidated constraints found |
| Applied migrations / migration files | 56 / 56 | No migration applied by the audit |
| Stored application files in preservation manifest | 12 | Bytes preserved; includes the four current PDF-disk files |

The application has important existing data: 237 users, 11 majors, 278 subjects, 2,489 quizzes, 26,613 questions, 106,612 choices, 5,575 attempts, 57,086 user answers, 987 user achievements and 15,451 XP transactions. None was treated as disposable.

Existing uncommitted changes span Concours models/services/controllers/migrations, authentication and SSR stabilization, revision and video generators, frontend pages/translations/tests, PDF management and Docker/Nginx. They were included in the inspected state and were neither reverted nor reformatted.

The baseline and final manifest were collected before creating this report. A final repository check distinguishes this report from the original worktree. Build/test caches and temporary audit outputs are not application-source changes. No tracked source, existing stored PDF, existing job or existing generated output was intentionally altered.

### Test isolation

- Laravel suites were inspected before execution. Concours tests explicitly force SQLite `:memory:` and fake PDF storage. Facts/revision tests also force in-memory SQLite. SeededCommunity tests run their resets and seeders only inside their in-memory connection.
- The audit launcher bypassed cached route/config manifests, redirected Laravel storage to container `/tmp`, used array mail/cache/session settings and did not run `composer test` because that script clears the application's configuration cache.
- Additional security probes used synthetic users/quizzes in SQLite in memory, fake mail/notifications and blocked external HTTP. JWT singleton state was reset between simulated requests. Intermediate harness errors and incorrect synthetic state were corrected before drawing findings.
- Real database inspections used PostgreSQL `READ ONLY` transactions, statement timeouts and aggregate/content fingerprints. Public route checks used per-request savepoints and array cache, with external HTTP blocked. The real PDF disk was referenced for read-only availability checks; PDFs were not transformed, split or republished.
- Browser checks used the new production build, frozen public responses obtained from the read-only checks and synthetic private responses. They did not make authenticated writes to the development database. All browser traffic to production APIs and external providers was blocked.
- The runner protocol test used a temporary source copy, a fake local authorization API and one synthetic completed job. The real runner and its existing job states were not started or modified.

### Deliberate exclusions and limitations

No production-domain security tests, VPS access, discovery-provider requests, emails, push delivery, announcement publication, real-account password changes, public uploads, database resets, application migrations, automatic dependency fixes or uncontrolled load tests were performed. Production image builds/startup were not performed. Actual Oracle firewall/SSH/backup state, certificate SANs, deployed proxy headers and production traffic capacity cannot be certified from local source.

The frontend npm advisory query was declined; it was not retried through another route. Generator npm audits and Composer audit were authorized and completed. No complete Git-history secret scan, container-image CVE scan, formal screen-reader audit or contrast certification was performed. Long production-scale rendering and cross-platform Windows execution remain outside the verified results.

Raw audit evidence is under `/tmp/maroquiz-final-audit/`, with helper scripts under `/tmp/maroquiz-audit-*`. These are temporary local evidence, not release artifacts. The decisive sanitized reproductions and results are included below so the report remains useful without those files.

## C. Architecture and control inventory

| Layer | Actual implementation / version | Boundary and observations |
|---|---|---|
| Backend | Laravel **12.69.0**, PHP **8.4.27** | REST API prefix `/api/v1`; 179 registered Laravel routes in the uncached inventory |
| Authentication | `php-open-source-saver/jwt-auth` **2.9.3** | Bearer JWT, 60-minute TTL, 20,160-minute configured refresh window, blacklist enabled; password-version binding rejects old credentials |
| Frontend | Angular core **21.2.25**, SSR **21.2.28**, Express **5.2.1** | Lazy application routes; Transloco EN/FR/AR; production API `https://api.maroquiz.com/api/v1` |
| Node tooling | Host Node **24.18.0**, npm **11.16.0** | Frontend declares npm 11.6.2; Docker uses `node:24-alpine` |
| Database | PostgreSQL **17.10** | 60 tables; current app role is a superuser; local SSL off and listen address `*` inside container |
| Cache/session/queue | Redis; image `redis:8-alpine` | Local Redis cache and session stores, Redis queue configuration, JWT blacklist/cache counters; no queue worker in production Compose |
| Web/API gateway | Nginx image `nginx:1.29-alpine` | Local HTTP gateway; production TLS frontend and separate API host through PHP-FPM |
| Revision renderer | `revision-generator/`; PDF.js **6.4.299** | Reuses video Playwright installation; PNG/A4 PDF/both; explanations and corrected-question modes |
| Video/facts | Playwright **1.64.1**, FFmpeg **8.0.1** on audit host | YouTube quiz, Facts Short and Facts Long; loopback runner, one child job at a time |
| Composer integrations | Socialite, Web Push **11.0.0**, Symfony MIME **7.4.13** | Google token verification, reCAPTCHA, mail, optional push/discovery; external-service behavior not all exercised |

PHP 8.4 and Node 24 remain supported branches in the official [PHP lifecycle](https://www.php.net/supported-versions.php) and [Node release table](https://nodejs.org/en/about/previous-releases). That is not a claim that every current image package or floating image tag has been scanned or is fully patched.

### Services and deployment boundary

Development Compose defines Nginx, PHP, Angular dev server, PostgreSQL, Redis and Mailpit, plus opt-in discovery and notification scheduler profiles. Scheduler profiles were not activated. Actual local bindings included `0.0.0.0:8000`, `4200`, `6379`, `1025`, `8025` and PostgreSQL on published port **54089**, also with IPv6 wildcard bindings.

Production Compose defines Nginx, PHP, Angular Node SSR, PostgreSQL and Redis. Only Nginx publishes ports 80/443; database, Redis and SSR ports are internal. It does **not** deploy the Node media runner, Playwright or FFmpeg as services. Those generators are a local administrator-workstation toolchain. `LocalRenderController.php:23` and `:65` reject ticket operations outside `local`/`testing`; `local-runner.js:15` restricts its trusted API to loopback.

Keep this boundary explicit for release. Production admin generator routes currently remain visible in the Angular route tree, but production ticket endpoints return 404 and the production CSP excludes the loopback runner. That is an operational/UI limitation, not authorization to move the worker to the VPS. Use the local admin workflow, or separately design a production rendering service later.

### Route and authorization inventory

Public APIs include authentication entry points, landing/catalogue, trial quiz/grading, progression showcase, username search, blog reads, feedback/newsletter, Concours references/directory/announcements and approved PDF access. Most API routes share the global limiter.

JWT/fresh-token routes include own profile/preferences/avatar/password, quiz attempts/results/history, bookmarks, ratings, leaderboard/achievements, friends/chat, notifications, Concours follows/push-device ownership and quiz-share joining. Teacher operations additionally require `admin` or `manager`; administrative catalogue/content/export/render-ticket/video/facts/social-pack/PDF and Concours management routes require server-side admin checks.

Angular `/app/**` and `/admin/**` are client-rendered and carry `noindex, nofollow` in the SSR route configuration. Auth/role guards protect browser routing; they supplement server middleware. Public routes include landing, subjects, trials, blog, legal/help pages, Concours directory and permanent/detail pages. Teacher creation routes exist and expose the role mismatch in FUN-005.

## D. Security findings

Severity describes realistic impact and prerequisites. **Confirmed** means observed in a controlled test or directly established by the current code/configuration. A configuration finding does not mean that the VPS is already deployed with it.

| ID | Severity | Component | File/line | Evidence | Impact | Proposed correction |
|---|---|---|---|---|---|---|
| SEC-001 | High | Quiz access / BOLA | `backend/app/Http/Controllers/User/QuizController.php:80`; `backend/app/Http/Controllers/User/QuizAttemptController.php:26`; `backend/app/Services/QuizAttemptService.php:19` | Confirmed: ordinary user A received 200 for questions of user B's inactive owned quiz, and 201 from start, without enrollment | Private/unreleased educational content and participation restrictions can be bypassed by resource ID | Centralize quiz-view/start eligibility, including ownership/enrollment and active subject/major/quiz state; apply it to direct routes, listings/recommendations and related bookmark access |
| SEC-002 | Medium | Premature exam answer disclosure | `backend/app/Http/Controllers/User/QuizAttemptController.php:86`; `backend/app/Policies/QuizAttemptPolicy.php:13`; `backend/app/Services/ScoreCalculationService.php:94` | Confirmed: own `in_progress`, `exam` result returned correct answer key and explanation before any answer or submission | Defeats exam feedback boundary and undermines score/leaderboard meaning | Require a completed/appropriate attempt state before result disclosure; keep tutor feedback explicit and scoped |
| SEC-003 | High, release-conditional | Default seeded credentials | `backend/database/seeders/UserSeeder.php:13`, `:20`, `:45`; `backend/database/seeders/DatabaseSeeder.php:14` | Confirmed source behavior: fixed shared demo password; new administrator/manager/student fixtures are preverified; no production environment gate | Running the current default seeder for a release creates predictable privileged credentials | Separate demo fixtures from production bootstrap; require an independently supplied privileged credential and explicit environment guard; do not run current demo seeders on the target database |
| SEC-004 | High, build/distribution | Secret and local-data inclusion in image | `infrastructure/docker/php/Dockerfile.prod:45`; `:46`; `infrastructure/docker/frontend/Dockerfile.prod:5` | Confirmed recipe: no applicable Docker ignore file; `COPY backend .` includes the existing backend `.env` and overlays the no-dev vendor stage with local files | Local signing/provider/database secrets and development configuration can enter image layers; host dependencies and backend artifacts can contaminate the release image | Exclude secrets, storage/test artifacts and host dependency trees from build contexts; copy explicit release inputs; inject production secrets at runtime and verify the final image contents |
| SEC-005 | Medium, local network | Exposed development Redis/database/services | `docker-compose.yml:99`, `:110`, `:121` (service `ports` blocks) | Confirmed actual wildcard bindings; Redis replied `PONG` without authentication; development database has a published host port | Any reachable local/LAN client may reach Redis and other development services; host firewall/Windows forwarding reachability was not tested | Bind development ports to loopback or remove unnecessary publications; add appropriate authentication; never use the development Compose file as the production recipe |
| SEC-006 | Medium | Database privilege boundary | `docker-compose.yml:94`; `docker-compose.prod.yml:55`; `backend/config/database.php` PostgreSQL connection | Confirmed local app connection resolves to `rolsuper=true`; production recipe initializes a PostgreSQL role but does not provision a separate restricted runtime role | An application/database compromise has unnecessary cluster-level impact if the same role model is deployed | Separate database owner/migration privileges from runtime DML privileges; verify runtime grants before deployment |
| SEC-007 | Low | Production asset response hardening | `infrastructure/docker/nginx/default.prod.conf:51`–`:55` | Confirmed source configuration: location-level `add_header Cache-Control` changes inheritance of server-level security headers; blanket one-year immutable caching also includes unhashed images/fonts | Asset responses can omit the intended headers; replaced unhashed assets may remain stale | Preserve appropriate headers in asset locations and apply immutable caching only to fingerprinted assets; verify representative responses through actual Nginx |
| SEC-008 | Low | Limiter identity normalization | `backend/app/Providers/AppServiceProvider.php:42`, `:50`; `backend/app/Http/Requests/Auth/LoginRequest.php` normalization | Confirmed code distinction: email is used raw in limiter keys before FormRequest normalization | Case/whitespace variants can split a per-email limit; the separate 30/minute IP ceiling still constrains this, so it is not an unlimited brute-force bypass | Normalize account identifiers consistently in limiter keys and retain an aggregate IP/account control |

### Sanitized reproductions and regression requirements

**SEC-001 — confirmed access failure.** Synthetic fixture: user B owns quiz 1, `is_active=false`; user A has no enrollment. `GET /api/v1/quizzes/1/questions` as A returned **200** with `PRIVATE SYNTHETIC` and question/choice text. `POST /api/v1/quizzes/1/start` returned **201**. By contrast, `GET /api/v1/quiz-attempts/{B_attempt}/result` as A returned **403**, so the confirmed failure is quiz eligibility, not a general absence of attempt ownership checks. Add a guest/user/owner/enrolled/manager/admin matrix and inactive/deleted-parent cases. Verify lists, recommendations, QCM eligibility and direct endpoints agree. Preserve intentionally shared quizzes and existing content.

**SEC-002 — confirmed early feedback.** `GET /api/v1/quiz-attempts/1/result` returned **200**, `status: in_progress`, `mode: exam`, `correct_answer_key: A` and a synthetic explanation. Test pre-submit, submitted, expired, cross-user and tutor/exam behavior. The separate fact that tutor mode is selectable should be handled as an explicit product rule when defining which attempts qualify for ranked exam scores.

**SEC-003 — dangerous release default, no production compromise claimed.** Password values are deliberately omitted. The seeder preserves changed passwords on reruns, which is good, but a new database still receives predictable preverified accounts. Regression: production bootstrap must refuse demo credentials/fixtures; separately verify idempotence and preservation of existing real accounts. Current educational records must not be reset as part of correcting this.

**SEC-004 — image inclusion, not a claim that `.env` is publicly downloadable.** Both environment files are ignored by Git, but Git ignore rules do not constrain Docker `COPY`. The existing backend environment contains nonempty signing and integration-secret fields. The root environment lacks `APP_ENV`, `APP_DEBUG`, `APP_KEY` and `JWT_SECRET`, so it cannot reliably override a copied development environment. Nginx's dotfile deny and public document root are useful protections; they do not remove secrets from image layers. Regression: inspect an isolated release image for environment files, private storage, dev dependencies and test artifacts, then verify production mode and runtime secret injection. No image was built, registry pushed, or secret rotated during Stage 1.

**SEC-005/006 — deployment prerequisites.** Test local service bindings and unauthorized Redis access only on loopback, then verify restricted PostgreSQL grants in an isolated staging environment. The production Compose file already omits database/Redis public ports; preserve that control. Do not report the locally observed superuser or debug mode as confirmed deployed production state.

**SEC-007/008 — bounded hardening.** Verify asset response headers/cache behavior through production-equivalent Nginx and exercise normalized limiter keys with an array-backed test limiter. Avoid live brute-force requests. CSP currently permits inline scripts/styles for the actual application and third parties; tightening it needs report-only observation and Angular/Google/reCAPTCHA/PDF/video checks, not an untested header replacement.

### Controls inspected without a confirmed vulnerability

- Admin routes enforce server roles. Synthetic unauthenticated access returned **401**; ordinary-user access to admin catalogue and revision export returned **403**. Registration accepts `user`/`manager`, not `admin`; do not describe that public role choice alone as admin escalation.
- Attempt ownership policies, notification owner checks, Concours follow/device scoping, teacher-share ownership, friendship recipient checks, chat participant checks and blog acceptance/parent association checks are present. These were sampled by code review and existing tests, not exhaustively fuzzed for every route.
- Scoring is computed on the server from stored correct-choice sets. A supplied `score=999999` and `percentage=999` were ignored; the synthetic one-mark quiz returned score **1**, percentage **100**.
- Password hashing, reset/change credential binding, signed verification links and JWT blacklist configuration are present. Google login verifies an upstream token and audience; its live provider flow was not invoked.
- Synthetic logout returned **200**, and replay of the same token returned **401** (`blacklisted`). A token advanced beyond its 60-minute expiry received **401** at `/auth/refresh`; that route is protected by `jwt.auth`. The configured two-week refresh window therefore must not be described as a working expired-token refresh flow. Document the intended session/refresh contract and cover it explicitly in future authentication regression tests.
- The active browser login returns bearer tokens in JSON and stores them in localStorage. No application JWT `Set-Cookie` issuance was found. Consequently, HttpOnly/Secure/SameSite JWT-cookie flags are not established defects in the active flow. JWT configuration does retain cookie-parser options; any future switch to automatically attached cookie credentials must explicitly address those attributes and CSRF. LocalStorage remains readable by same-origin script, so XSS prevention and secret-free frontend bundles matter.
- The Angular interceptor checks exact API origin and path, avoids credentials on public/external requests, bypasses unsupported browser DOM handling for anonymous SSR and limits 401 logout to the credential actually sent. The local renderer uses `HttpBackend`, not a forwarded application JWT.
- No production-template `[innerHTML]` or sanitizer bypass leading to attacker HTML execution was found in the searched Angular source. SEO JSON-LD escapes unsafe delimiters. Renderer templates mostly use text nodes/`textContent`; static SVG/icon HTML is not evidence of attacker-controlled XSS.
- Raw SQL inspected used bound values or fixed/allowlisted columns. Question sorting has an allowlist; Concours QCM dynamic column/table choices are derived from fixed route kinds. No confirmed SQL/OS command injection was established.
- PDF uploads require admin access, bounded MIME/size/signature checks, generated paths, safe realpath containment and explicit distribution/publication controls. Header/EOF checks are not a full malware/PDF semantic scan. Serving adds PDF sandbox, no-store, noindex and frame restrictions; do not remove them casually.
- The real draft announcement returned **404** publicly; its linked official PDF returned **404**. The approved previous examination PDF returned **200** with `application/pdf`, `private, no-store`, `noindex` and sandbox policy. Correction linkage and public-state rechecks are covered in isolated tests.
- No private key or JWT-shaped token was found in the bounded scanned text files. The tracked candidate scan identified the demo seeder credential and synthetic test strings, not a proven active production-secret leak. This does not cover all Git history or ignored backups.

## E. Functional findings

| ID | Priority / status | Component and file/line | Reproducible behavior / impact | Smallest correction and regression |
|---|---|---|---|---|
| FUN-001 | High; confirmed | `frontend/src/app/features/user/active-quiz/active-quiz.component.ts:79`, `:202`, `:228`; `backend/app/Services/UserAnswerService.php:59`; `backend/app/Services/ScoreCalculationService.php:94` | UI stores one letter and always sends `selected:true`; backend adds rather than replaces for `multiple_choice`. Changing a choice leaves hidden selections. Reload/feedback/result DTOs take the first selection/correct answer. Synthetic two-correct-choice scoring reached 100%, but result exposed only key A for both selected/correct answer | Preserve question type and full selected-ID sets; explicitly deselect; return/display all selected/correct keys. Test changing a wrong choice, deselection, reload, tutor feedback, multiple correct answers, single-choice and true/false. Do not relabel or rewrite stored questions automatically |
| FUN-002 | Medium; confirmed | `frontend/src/app/features/user/active-quiz/active-quiz.component.ts:107`, `:270`; `backend/app/Services/UserAnswerService.php:23`; `backend/app/Services/QuizAttemptService.php:49` | Countdown restarts from full duration on load and merely stops at zero. Backend accepted an answer and submission for a one-minute attempt started an hour earlier | Define an authoritative exam deadline and grace policy, enforce it server-side, restore remaining time in the browser and define tutor exceptions. Test expiry, refresh, backgrounding and concurrent submit |
| FUN-003 | Low; confirmed | `backend/app/Http/Resources/QuizWithQuestionsResource.php:28`; `backend/app/Http/Resources/QuestionForAttemptResource.php:10`, `:25` | Caller passes a bookmark flag as a third constructor argument; resource declares no matching parameter/property. A stored synthetic bookmark returned `is_bookmarked:null` in the quiz view | Accept/store a boolean flag and serialize it. Test bookmarked/unbookmarked quiz reload and result views |
| FUN-004 | Medium; confirmed | `backend/app/Exceptions/Quiz/QuizAlreadySubmittedException.php:7`; `InvalidQuizAnswerException.php:7`; `backend/bootstrap/app.php:51` | Duplicate submit returned **500** because domain exceptions extend generic `Exception`, not the mapped API exception. The duplicate did not award another score/reward | Map expected conflicts/invalid answers to a documented 409/422 response; test duplicate submit, answers after submit and invalid question/choice association without extra XP |
| FUN-005 | Medium; confirmed by route/service inspection | `frontend/src/app/features/teacher/services/teacher-share.api.ts:32`, `:40`; `backend/routes/api.php:301` admin-only group; teacher route group `:256` | Manager-facing creation/builder pages call admin-only `/quizzes`, `/questions`, `/choices`. A manager allowed into the teacher UI cannot complete creation through those routes | Provide scoped teacher operations enforcing ownership, or align product access with supported roles. Never widen the entire admin group. Test manager creation/edit/delete/share and cross-owner denial |
| FUN-006 | Medium quality gate; confirmed | `frontend/tsconfig.spec.json:7`; `frontend/src/app/core/models/revision-sheet.spec.ts:1`; revision-json spec `:1`; `frontend/src/app/layouts/admin-layout/admin-layout.audit.spec.ts:35` | Default test command fails TS2307 for `node:crypto`. A temporary Node-types config runs the suite. Focused rerun leaves one stale menu expectation missing `Facts Video Generator`; login DOM/toggle work in real Chromium | Correct the intended test compilation configuration and review the menu expectation against the approved feature. Preserve actual assertions; rerun the normal full command. Two initial timeouts and the transient login failure are not recorded as confirmed application defects |
| FUN-007 | Low; confirmed | `backend/app/Http/Controllers/Api/LandingController.php:35` | Landing pass rate compares raw points to percentage passing threshold. Current public response reports 0 despite persisted passed attempts | Count authoritative `passed` submissions or compare percentages consistently; test a one-point quiz with a 50% pass threshold |
| FUN-008 | Low; confirmed | `frontend/src/assets/i18n/fr.json:1`; `ar.json:1`; `frontend/src/app/core/transloco/transloco.config.ts:7` | FR lacks 24 EN keys; AR lacks 23, mainly legal sections and one quiz search label. EN fallback is configured | Add approved translations for existing requirements; test key parity and meaningful fallback, especially legal/navigation/error text. Hardcoded admin English is partly intentional |
| FUN-009 | Low; conditional browser/font observation | `frontend/src/index.html:58`; `frontend/src/app/features/concours/concours-overview.ts:46`; `frontend/src/app/layouts/user-layout/user-layout.scss:765` | With external font requests blocked in the audit browser, AR ENSA at 390px had scrollWidth 405; user quiz/results had 399. Material icon ligatures appeared as text. EN public samples had no overflow | Recheck with real font delivery before assigning an ordinary-layout regression. Consider local/fallback icon/font resilience and fix any remaining RTL container overflow. Test font available/blocked, 390/820/1440 and keyboard navigation |
| FUN-010 | Resolved by Batch 1 locking; reverified in Batch 2 | `backend/app/Services/QuizAttemptService.php:26`; `backend/app/Services/UserAnswerService.php:23`; migration `2026_07_06_220742_create_quiz_attempts_table.php:14` | Start locks only an existing row; two first starts can both find none. No partial uniqueness prevents two in-progress attempts. Answer saves inspect a previously bound attempt and do not acquire the submission parent lock, allowing stale-state overlap | Serialize first-start creation and answer/submit state transitions; consider a scoped unique constraint after approved migration design. Test simultaneous first start and answer-vs-submit in disposable PostgreSQL, then verify one final score/answer state |

**FUN-010 remediation update (2026-10-31):** Batch 1 serializes first starts and all answer/finalization transitions with user/attempt row locks. Batch 2 reran the disposable PostgreSQL suite and added the direct answer-versus-normal-submission race: 1 test / 46 assertions passed. No additional locking or uniqueness migration was required. The original failure analysis above is retained as historical evidence; see `MAROQUIZ_STAGE2_BATCH1_REMEDIATION.md` and `MAROQUIZ_STAGE2_BATCH2_REMEDIATION.md`.


Also observed a smaller response-contract inconsistency in `backend/app/Http/Controllers/Api/BlogResponseController.php:50` and `backend/app/Http/Controllers/Chat/ChatController.php:181`: callers pass `201` as the second argument to `ApiResponse::success`, whose second argument is a message. The response remains HTTP 200 with a coerced message. Review affected creation calls and assert 201/status/message explicitly. No record corruption was established from this issue.

### Feature regression inventory

“Tested” refers to the stated test type, not an unqualified complete production journey.

| Significant feature | Classification | Evidence / limitation |
|---|---|---|
| Landing, public catalogue | Tested reads/SSR/browser; partial filters | Real read-only APIs 200; canonical/SSR and three viewports; pass-rate defect above |
| Registration, login, reset, verification | Partially verified | Code/validation/provider boundaries inspected; real browser password toggle and unit flows; no live mail, CAPTCHA or Google authentication |
| User dashboard / analytics / profile | Partially verified | Ownership and calculations inspected; seeded community/scoring suites; full real-account browser lifecycle not performed |
| Quiz start, answer, submit, retake | Confirmed defective | Isolated API participation works, server score authoritative; access, selection, timer, error and concurrency findings remain |
| Results | Confirmed defective | Ownership denies cross-user; early disclosure and truncated multi-answer DTO confirmed |
| Bookmarks | Confirmed defective display flag | Own scoped listing/toggle source and synthetic stored bookmark; reload flag null |
| Leaderboard / achievements / XP | Tested isolated consistency; partial UI | SeededCommunity suite validates ledger, attempts, ranks/achievements/idempotence; no real-user mutation |
| Ratings | Partially verified | Authenticated routes/model validation inspected; no new development ratings created |
| Friends / chat / notifications | Partially verified | Participant/recipient/owner checks inspected; no development messages/notifications sent; unbounded history risk below |
| Blog and community content | Partially verified | Public API read succeeds, template/content and accept-author checks reviewed; no real post created |
| Teacher sharing / builder | Confirmed creation role mismatch; partial sharing | Own share/results checks present; manager mutation calls conflict with admin middleware |
| Admin catalogue / question / choice CRUD | Partially verified | Server admin boundaries and requests reviewed; not every existing CRUD form was submitted in a browser |
| Concours categories / institutions / directory | Tested isolated plus current read-only reads | Public APIs 200; category hierarchy/filter/publication suites pass |
| Academic admissions / permanent pages | Tested current reads/SSR/browser | Bac Libre, ENSA, UM6SS are active distinct records; types examination/admission, not recruitment |
| Announcements / historical state / source attribution | Tested isolated plus current negative reads | Current draft/withdrawn records not public; current session/verification/publication tests pass |
| Exam PDFs / corrections | Tested isolated plus current file responses | Public/private gates, upload/signature/path/correction associations covered; stored files preserved |
| QCM associations / preparation tracks | Tested isolated; current associations empty | Current QCM tables contain zero links. ENSA public QCM endpoint returns valid empty listing; no mapping invented |
| Revision JSON / corrected-answer export | Tested isolated | Admin boundary, source snapshot validation, question/choice ownership and multiple/truth-value contracts |
| Revision PNG | Tested real Chromium | Dimensions, exact mapped content, pagination, ZIPs, partial retry preservation |
| Revision A4 PDF / combined books | Tested real Chromium/PDF.js | Searchable text, A4, fonts, contents links, Arabic continuation, corruption detection and byte preservation on retry |
| Questions corrigées | Tested synthetic rendering/API contracts | All answer types and all correct answers retained in generator; this is separate from the defective quiz-result DTO |
| Local worker protocol | Tested temporary runner | Ten security/limit cases pass; existing jobs untouched |
| YouTube Quiz / Facts Short / Facts Long | Partially verified; bounded draft smoke results in I | Schemas/timing/command construction reviewed and targeted synthetic render jobs run; final quality/large jobs remain staging/workstation acceptance work |
| Language switching / Arabic RTL | Partially verified | EN/AR preference restoration and intentional admin EN/LTR verified; FR/AR translation gaps and font-blocked mobile observations noted |
| Mobile / accessibility | Partially verified | Public EN pages at 390/820/1440: no document overflow, one h1, no sampled unnamed empty buttons; login keyboard focus/toggle checked. No complete screen-reader/contrast audit |
| SSR / SEO / direct refresh | Tested production build with controlled API responses | Public 200, unknown route 404, auth/private noindex, canonical domain correct; production Nginx/TLS and deployed API behavior unverified |
| Email/push/provider discovery | Live execution not tested by design | Tests use fakes; all live gates remained disabled; zero provider imports or publications |

## F. Performance and reliability findings

| ID | Priority / confidence | Evidence and affected files | Impact, correction and verification |
|---|---|---|
| PERF-001 | Medium; schema confirmed, timing contextual | PostgreSQL indexes show only PKs on `questions`, `quizzes`, `quiz_attempts`; 56 FK constraints lack a matching leading-column index. Hot relations include `choices.question_id`, `questions.quiz_id`, `quizzes.subject_id`, attempts by user/quiz. `LandingController.php:54` uses correlated counts plus per-item question counts | Catalogue/quiz/landing/result requests scan more content than needed. Read-only landing checks ranged about 3–13 seconds under varying concurrent audit load; an initial correlated integrity query hit its 20s guard. These are local observations, not VPS benchmarks. Add only measured hot-path indexes after approved migration review, eager-load/count consistently and compare PostgreSQL plans/timings |
| PERF-002 | Release gate; architecture confirmed, deployed capacity unverified | `AppServiceProvider.php:36`: anonymous 30/min/IP, authenticated 120/min/user. `concours-directory.ts:134`, `:172` requires at least list/categories/institutions, with child announcement reads adding work. Production Compose supplies no `SSR_API_URL`; SSR defaults to public API HTTPS | Multiple visitors share SSR egress identity and can exhaust the API allowance. With only three calls per cold page, 30 requests funds at most ten such page loads/minute for that identity; this is a request-budget illustration, not a measured capacity ceiling. Preserve limits until staging validates trusted topology, direct visitors versus SSR, burst behavior, hydration and genuine 429/Retry-After handling |
| PERF-003 | Medium, local worker; confirmed retention gap | `video-generator/local-runner.js:18`, `:24`, `:167`; `revision-generator/jobs.js:4`. Jobs persist and restore without an automatic retention policy/disk quota. Existing protected video outputs total 1,666,450,239 bytes; revision outputs 103,300,508 bytes | Long/failed renders and raw frames can exhaust workstation disk. Keep one-job concurrency; add explicit disk checks, bounded queue/output policies and an administrator-reviewed retention mechanism. Test cancellation, interruption, cleanup and partial-output preservation; do not delete existing jobs during remediation without approval |
| PERF-004 | Low/Medium; code risk, not load benchmark | `DashboardService.php:21` loads all submitted attempts; `ScoreCalculationService.php:140` ranks all users; `ChatController.php:117`, `:153` return unbounded message history/poll results | Growth increases memory, serialization and database work. Prefer aggregate/window queries and paginated message batches where usage warrants it; test stable ordering, ownership, unread semantics and query counts |

Public successful Concours metadata uses revalidation headers rather than shared private state. SSR HTML uses `no-cache`; private API and output paths should remain no-store where appropriate. The SSR process accepts only the intended production host, ignores untrusted forwarded-host input and uses a fixed configured API address. Host/header checks passed locally. No cross-user SSR HTML leakage was demonstrated.

Production SSR hydration is configured with an internal-to-public API origin map. Browser rendering used frozen responses; it does not establish deployed request multiplication or concurrent upstream capacity. No quota increase, forwarded-IP trust change or Redis flush was made.

Frontend initial production bundles total **464.78 kB raw / 132.15 kB estimated transfer**, below the 500kB initial warning. Eleven component styles exceed the 10kB warning, with no hard-budget build failure. The build fetches Google Fonts CSS, so clean/offline builds depend on external font availability. The initial sandboxed build failed DNS/font inlining; the authorized retry succeeded in approximately 111 seconds.

## G. Dependency and infrastructure findings

### DEP-001 — affected Symfony MIME dependency

**Medium package risk; application exploitability unconfirmed.** `backend/composer.lock:5338` resolves `symfony/mime` to **7.4.13**. `composer audit --locked` reports **CVE-2026-45070 / GHSA-vqc8-7275-q272**, email header injection through attacker-controlled MIME parameter **names**. The current 7.x range is affected below **7.4.22**. The [Symfony advisory](https://symfony.com/blog/cve-2026-45070-email-header-injection-via-non-token-characters-in-mime-parameter-names) explicitly corrects earlier claims that 7.4.12 was patched.

No inspected application code derives MIME parameter names from user input. Ordinary reset/verification email addresses or display names alone do not establish that prerequisite. Smallest correction in Stage 2: resolve a compatible patched 7.4 release, review the lockfile diff, run Composer audit/platform checks and mail serialization/reset/verification tests using a fake transport. Do not perform a broad Laravel upgrade for this finding.

Authorized npm audits reported **zero advisories** for the video and revision trees at audit time. Facts and video lockfile dependency-name/version graphs match exactly. These results do not cover the declined frontend advisory lookup or OS/browser binaries. Composer reported no abandoned packages. The current PHP container passes `composer check-platform-reqs --no-dev`; this does not validate an unbuilt final production image.

### Infrastructure risk register

| ID | Priority / status | Location and concrete issue | Correction / required check |
|---|---|---|---|
| INF-001 | High release blocker; confirmed configuration mismatch | `docker-compose.prod.yml:29`, `:55`, `:69`; current root `.env` structure. Production Compose warns that `POSTGRES_DB`, `POSTGRES_USER`, `POSTGRES_PASSWORD` are unset. Root Redis password is empty; backend environment remains local/debug unless separately overridden | Prepare a dedicated complete production environment, fail fast for required nonempty values, keep APP/DB/Redis/JWT/frontend URLs consistent and validate secret presence without printing values. Do not change the present environment in Stage 1 |
| INF-002 | High release gate; probable fresh-volume startup failure | `infrastructure/docker/php/Dockerfile.prod:55`; `entrypoint.prod.sh:7`; `docker-compose.prod.yml:31`. Entrypoint runs as `www-data` and writes `/var/www/shared`, whose fresh mount target is not explicitly prepared/chowned in the image. It copies the whole application, including persistent storage, on each startup | Prepare narrowly scoped shared public assets and writable directories with correct ownership. Rehearse fresh and existing volumes in an isolated release environment, including restart, upload visibility and preservation. No production image/container was started to claim this is already reproduced there |
| INF-003 | Medium readiness gap; confirmed local recipe omissions | `docker-compose.prod.yml` service definitions; `renew-ssl.sh:6`. No application service healthchecks, resource limits, production queue worker, deployment smoke/rollback or backup/restore automation is defined here. Renewal stops Nginx and assumes preexisting certificate volume/names | Supply explicit health/startup/recovery procedures, bounded resources/log rotation, tested backups, initial certificate provisioning and safe renewal. Only add a queue worker for explicitly approved required jobs; keep discovery/delivery off |
| INF-004 | Medium defense/capacity risk | `infrastructure/docker/frontend/Dockerfile.prod:9` final stage has no non-root USER; Compose provides no SSR memory/concurrency limits. Redis read-only configuration returns `maxmemory=0`, `maxmemory-policy=noeviction` locally | Run SSR under the intended non-root identity and set measured capacity controls. Size Redis/cache/queue/JWT revocation storage deliberately; test outage and memory behavior. Do not choose an eviction policy that silently breaks revocation/queues |
| INF-005 | Low reproducibility/hardening | Floating PHP/Node/PostgreSQL/Redis/Nginx tags and PECL install; no image digest inventory/scan. Production Composer builder uses `--ignore-platform-reqs`; host vendor can overwrite its result (SEC-004) | Build a clean release image, validate required extensions, record tested image digests/SBOM and scan it. Rebuild only in the later authorized release stage |

The Nginx syntax check passed for the **running development configuration only**. Production Nginx was reviewed as source; no TLS listener/certificate bootstrap test was performed. Check certificates cover `maroquiz.com`, `www.maroquiz.com` and `api.maroquiz.com`; validate HTTPS redirect, canonical host, HSTS rollout, API CORS, CSP, body limits, PHP execution restrictions, private cache policy and PDF behavior through the actual reverse proxy.

The active cookie-free bearer flow, CORS `supports_credentials=false`, exact origin restrictions and controller authorization are useful controls. Do not infer that CORS itself authorizes API actions. SSR trusts selected forwarded headers only; Laravel has no deployment-specific trusted-proxy setup here. That requires a topology-specific staging decision, not blindly trusting client-supplied `X-Forwarded-For`.

Renderers launch Chromium without explicitly enabling its sandbox; the observed Playwright launch includes `--no-sandbox`. Video/facts pages lack the explicit network-deny route used by revision pages. No input-driven remote-resource or script-execution exploit was found in the inspected templates. Keep this as a local-tool containment/verification concern: test Linux sandbox availability, deny unnecessary network/file resources and preserve Windows/WSL compatibility. Do not classify the renderer as a publicly deployed RCE service.

## H. Database integrity and reproducibility

### Confirmed current data state

| Check | Result |
|---|---|
| Questions with fewer than two choices | 0 |
| Questions with zero correct choices | 0 |
| Empty quizzes | 0 |
| Duplicate question-text groups within a quiz | 15; content-review issue, not automatically a vulnerability |
| Quizzes with incorrect stored total marks | 0 using grouped aggregate check |
| Invalid nonpositive quiz durations | 0; range 10–38 minutes in real data |
| Difficulty values | Beginner 2,142; Intermediate 120; Advanced 126; Professional 101 |
| Question types | 26,613 multiple-choice; no stored single-choice/true-false rows in the current dataset |
| Questions with multiple correct choices | 40 |
| Existing duplicate in-progress user/quiz groups | 0; does not remove FUN-010's race possibility |
| User-answer question belongs to another quiz than its attempt | 0 |
| User-answer choice belongs to another question | 0 |
| Database-enforced relation constraints | Present and validated; no unvalidated constraints found. This is not an exhaustive audit of every semantic association |

Foreign keys and uniqueness cover many important relationships, including answer tuples, bookmarks, categories, announcements, PDF/correction links and QCM preparation pivots. PostgreSQL does not automatically provide all useful child-side indexes here; PERF-001 identifies the hot-path concern. Start-state uniqueness and answer/submission serialization require separate consideration. No orphan repair or record deduplication was performed.

### Academic configuration verified without changes

- Ten categories include the academic parent and Bac/examination, schools/faculties, Master and Doctorat children. These are distinct from recruitment category roots.
- Seven institutions include UM5, UM6SS, ENSA, ENSAM and ENCG, along with the existing institutions.
- Four permanent Concours records exist: the existing recruitment page plus active `bac-libre` (**examination**), `ensa` (**admission**) and `um6ss` (**admission**).
- ENSA has Mathematics/Physics preparation options; UM6SS has Medicine/Pharmacy/Dentistry. There are five options total, with no current child options.
- Two announcements exist: one draft/unverified and one withdrawn/verified. No current public official announcement was invented for the academic pages.
- Four PDF records remain: official announcement, previous exam, linked correction and summary. Public serving re-evaluates the approval and parent state.
- Forty-six discoveries and their 46 revisions remain. QCM subject/quiz links and option pivots remain empty. The one stored follow was preserved.
- Runtime gates read **false** for discovery automation, notifications and push. No scheduler profile, notification delivery, publication or source fetch was enabled by the audit.

### Seeder-stage requirements

The current default `DatabaseSeeder` invokes user and educational seeders, not a complete reproducible academic release configuration. A category seeder exists, but the permanent records, institutions, preparation options/session policy and intended associations must be captured deliberately in the later approved seeder stage. Preserve permanent slugs, relationships, source provenance and document access policy. Do not export private user activity, development follow records, unapproved discoveries or demo credentials into production seed data by accident.

Record a manifest of intended release content, validate FK/order/idempotence in a disposable PostgreSQL database, reconcile category/institution identities explicitly and verify PDF asset storage separately from row creation. Approval of future seeders must not imply permission to reset either the current database or an unidentified VPS database.

## I. Test results and evidence

Commands below were run from the repository root unless stated otherwise. Wrapper scripts and raw logs are in temporary audit evidence. Initial environmental failures are retained rather than silently replaced by successful retries.

| Suite | Command | Passed | Failed | Skipped | Notes |
|---|---|---:|---:|---:|---|
| Laravel full suites | `docker exec -i quizatlas-php php < /tmp/maroquiz-audit-tests.php` | 175 | 0 | 0 | 4,596 assertions; 11m36s; SQLite in memory, isolated storage, fake delivery; current production PostgreSQL behavior is not fully represented |
| Additional API probes | `docker exec -i quizatlas-php php < /tmp/maroquiz-audit-probes.php` | — | — | — | 19 recorded cases including isolation check. Deliberately detected unsafe 200/201, duplicate-submit 500 and invalid pagination 500; includes logout/replay and expired refresh; not presented as a passing regression suite |
| Current public routes | `docker exec -i quizatlas-php php < /tmp/maroquiz-audit-public.php` | 17 expected status outcomes | 0 | 0 | PostgreSQL read-only transaction, no external HTTP; includes public PDFs 404/200 and draft/missing 404 |
| Angular default | `npm test -- --watch=false --runner-config=vitest.style.config.mjs` in `frontend/` | 0 executed | Compilation gate | 0 | TS2307 `node:crypto`; two existing revision specs; no source/test edited |
| Angular full with isolated types config | `npm test -- --watch=false --ts-config=../../../../../tmp/maroquiz-final-audit/tsconfig.full.json --runner-config=vitest.style.config.mjs` | 359 | 4 | 0 | 68 files / 363 tests. Two timeouts, login assertion, stale admin-menu assertion |
| Angular focused recheck | Previous command plus includes for `concours.spec.ts`, `login-form.spec.ts`, `admin-layout.audit.spec.ts` | 49 | 1 | 0 | 50 tests; only stale admin-menu assertion remains. Other initial failures passed without changing source/tests |
| Node revision/books/corrected/facts | `node --test --test-concurrency=1 revision-generator/revision.test.js revision-generator/book.test.js revision-generator/corrected.test.js fact-generator/facts-video.test.js` | 15 | 0 assertions | 0 | One additional test cancelled at its 180s timeout under concurrent load; command exited 1. Original sandbox attempts failed browser startup with EPERM |
| Focused PDF retry verification | `node --test --test-name-pattern='single A4 PDF' revision-generator/book.test.js` | 1 | 0 | 0 | Previously timed-out test passed in ~22.4s; cancellation retained in prior row |
| Production Angular build | `npm run build -- --configuration production --output-path /tmp/maroquiz-final-audit/angular-dist` in `frontend/` | 1 build | 0 | 0 | Authorized retry; initial sandbox attempt failed Google Fonts DNS/inlining and esbuild shutdown; 11 style warnings remain |
| SSR status/SEO matrix | `node /tmp/maroquiz-audit-browser.cjs` | 10 expected route statuses | 0 | 0 | New build, frozen local public API responses, private HTML contains no synthetic user email; unknown route 404 |
| SSR Host/header checks | Same browser harness | 2 | 0 | 0 | Unapproved Host 400; forwarded-host ignored, canonical not poisoned |
| Browser responsive public matrix | Same browser harness | 12 EN route/viewport samples | 0 observed EN overflow | 0 | Landing, directory, ENSA, login at 390/820/1440; fonts blocked; no claim of full WCAG compliance |
| Browser private/RTL sample | Same browser harness | — | — | — | Five route samples at 390; synthetic private API, admin EN/LTR; conditional overflow observations in FUN-009; no page errors |
| Temporary local runner security | `node /tmp/maroquiz-audit-runner.cjs` | 10 | 0 | 0 | Health, bad Host/Origin, missing/wrong/valid key, traversal, missing/invalid ticket, >2MiB body |
| Three video draft pipelines | `node /tmp/maroquiz-audit-videos.cjs` | 3 | 0 | 0 | One synthetic 15fps draft per profile; all MP4s independently inspected with ffprobe; temporary outputs only |
| Composer advisory audit | `docker exec quizatlas-php composer audit --locked --no-interaction --format=json` | — | 1 affected package | 0 | Symfony MIME advisory, no abandoned packages; unwritable Composer cache warning did not prevent lookup |
| npm generator advisory audits | `npm audit --json --fetch-retries=0` in video/revision directories | 2 clean lookups | 0 advisories reported | 0 | Facts dependency-version graph matches video. Frontend audit declined/unverified |
| PHP platform | `docker exec quizatlas-php composer check-platform-reqs --no-dev` | All reported requirements | 0 | 0 | Current local PHP container only |
| Nginx syntax | `docker exec quizatlas-nginx nginx -t` | 1 | 0 | 0 | Running development config only; production config not activated |
| Production Compose structure | `docker compose -f docker-compose.prod.yml config --quiet` | YAML parses | Environment warnings | 0 | Missing required PostgreSQL variables; no service started |
| Preservation | Original/final file and read-only database manifests | All protected files / 60 tables | 0 differences | 0 | Before adding the intentional report file |

The initial restricted Node test summary reported file-level failures; direct execution exposed Chromium's `Operation not permitted`, after which the authorized unsandboxed run exercised rendering. The limited Angular-config attempt without matching include filters and the initial absolute temporary config path were harness invocation errors, not new application findings. Subsequent full/focused commands above are the meaningful results.

The synthetic media smoke command is `node /tmp/maroquiz-audit-videos.cjs`. It renders one 15fps draft quiz and one draft for each facts profile into `/tmp/maroquiz-final-audit/video-smoke/`, with a four-minute process-group deadline per profile. Final per-profile outcomes are recorded in the completion note below. They do not certify long/high-quality renders, audio mix variants or Windows/WSL launcher behavior.

## J. Release blockers

1. Correct SEC-001 and SEC-002 with explicit access/state regression tests.
2. Correct selection/result semantics and exam timing (FUN-001/FUN-002); normalize expected quiz conflicts (FUN-004). Resolve or explicitly scope the unsupported manager builder flow (FUN-005).
3. Exclude default privileged demo credentials and copied local secrets/data/dependencies from the production bootstrap/image (SEC-003/SEC-004).
4. Supply a complete production environment and prove fresh/existing-volume startup safely (INF-001/INF-002). Verify restricted database role and internal-only services.
5. Resolve the normal Angular test gate and remaining deterministic expectation failure. Review the MIME patch within its actual exposure and dependency policy.
6. Complete staging SSR/proxy/quota, HTTPS/CORS/headers/PDF, backup/restore and rollback acceptance. Local unit/browser success cannot replace this gate.

## K. Recommended remediation sequence

This is a proposal for separately authorized Stage 2, not work performed here.

| Order | Work | Complexity | Required evidence before closing |
|---|---|---|---|
| 1. Critical security | No confirmed critical exploit in verified scope; immediately reassess if image/secret review finds released production credentials | Conditional | Verified reachability/credential exposure, followed by separately authorized containment |
| 2. High security | SEC-001 quiz eligibility; SEC-003 privileged bootstrap; SEC-004 clean production image inputs | Medium | Role/enrollment matrix, preserved content, clean image inspection, no demo privileged credentials |
| 3. Important functionality | SEC-002 completed-result boundary; FUN-001 full choice sets; FUN-002 server deadlines; FUN-003/004 display/conflict contracts; FUN-005 role-consistent teacher workflow | Medium | Synthetic API + real browser workflows across single/multiple/true-false, retake/expiry/refresh, cross-user denial and no extra rewards |
| 3. Quality/dependency gates | FUN-006 test config/expectation; DEP-001 compatible MIME patch | Small | Normal full frontend command, Laravel regression, dependency audit/platform and fake mail serialization tests |
| 4. Reliability/performance | INF-001/002 env/volumes; SEC-006 least privilege; PERF-001 measured hot indexes; PERF-002 staging SSR; FUN-010 concurrency | Medium to Large | Disposable PostgreSQL concurrency tests, plans/timings, fresh/existing-volume rehearsals, controlled staging bursts, genuine 429 headers and recovery |
| 4. Local generator reliability | PERF-003 retention/disk/cancellation and process containment; workstation prerequisites | Medium | Preserved existing jobs, interrupted/retry/cancel behavior, bounded disk/CPU/memory and final-format verification |
| 5. Lower-priority hardening | SEC-005 development bindings; SEC-007 headers/cache; SEC-008 limiter normalization; FUN-007/008 stats/translations; conditional font/RTL checks | Small to Medium | Local bindings, response header matrix, normalized limiter test, translation parity and three-viewport font/RTL verification |

Do not broaden admin routes to fix teacher access, relabel all question data to conceal the UI mismatch, increase quotas to conceal SSR amplification, or delete existing output/data to make tests pass. Any schema correction belongs in an approved migration with preservation checks.

## L. Remaining deployment prerequisites and repository assessment

### Production release prerequisites

- Approved reproducible educational and academic seeders, separated from demo users/activity; explicit target database identity and asset manifest. No reset is authorized by this report.
- A clean production environment with `APP_ENV=production`, debug off, independent application/JWT/database/Redis secrets, correct hostnames, CORS/frontend URL, mail/CAPTCHA/Google configuration and tested secure session settings if cookies are used.
- Database owner/runtime role separation, expected schema/migration inventory, tested backup/restore of PostgreSQL **and** private PDFs/public uploads, retention and recovery objectives.
- Fresh and existing storage-volume rehearsals; public asset visibility; writable Laravel cache/log directories; no copied development `.env` or host vendor/node_modules; production dependency/platform/image checks.
- Valid initial TLS certificates and renewal covering all intended hosts; DNS, Oracle security lists/NSGs and host firewall verified separately; no DB/Redis/SSR/worker public ports.
- Production-equivalent Nginx/API/SSR smoke checks: landing, catalogue, all permanent slugs, draft 404, approved PDF headers, unknown route 404, auth/admin denial, login/logout/reset, quiz answer/submit/results, language/RTL and canonical/noindex behavior.
- Bounded staging concurrency with separate real visitor identities and SSR egress, correct trusted proxies, timeouts, Retry-After, memory and PHP-FPM limits. Preserve anonymous 30/min/IP until justified by that evidence.
- Health checks, restart behavior, log rotation/disk alarms, exception/5xx/429 monitoring, Redis memory plan, backup verification and documented rollback. Enable only expressly approved queue/scheduler jobs. Discovery, mail/push delivery and publication remain independently gated.
- Local generator installation/launcher prerequisites documented separately from VPS services. No automatic migration of Playwright/Chromium/FFmpeg to production.

### Repository cleanliness — classification only

| Classification | Current examples | Reason / next action |
|---|---|---|
| KEEP | Laravel/Angular source, all required migrations, meaningful tests, lockfiles, Docker/Nginx/PHP configuration, active generator scripts/templates/fonts and their licenses, working launcher, essential README/implementation/deployment documentation | Required behavior/reproducibility; significant source files are currently untracked and must be reviewed/staged deliberately |
| ARCHIVE | Historical `backend/CONCOURS_PHASE*.md`, stabilization/provider reports, `frontend/artifacts/`, `backend/artifacts/`, historical screenshots/mockups | Valuable evidence; preserve provenance and referenced acceptance records before moving outside the release repository |
| REMOVE LATER | Disposable generated PNG/PDF/ZIP/frame/MP4 outputs, duplicate screenshots/logs, obsolete acceptance fixtures and Zone.Identifier debris | Not source; removal requires later review. No deletion performed. Some sample artifacts may deserve KEEP/ARCHIVE rather than blanket removal |
| INVESTIGATE | `video-generator-backup/`, one-off `frontend/scripts/check-*`/`preview-*`, root `run_seeder.php`, empty root README/LICENSE, old Nginx `.save`, local backup contents and large binary design files | Establish dependencies/references and retention requirements first; root seeder helper expects a different relative layout and must not become an undocumented production entry point |

The manifest contains 200 backend artifact files (~7.1 MB) and 545 frontend artifact files (~119.8 MB), plus large ignored render outputs. `.gitignore` covers environment files, common keys/dumps/logs, node_modules and video/facts output; per-directory revision ignores cover its outputs. **No `.dockerignore` provides the corresponding production build boundary.** Ignored backups/media can still be eligible build-context inputs, while `COPY backend .` definitely includes local backend files that Git ignores. Do not assume Git cleanliness makes an image safe.

Before GitHub release, inspect the full intended staged diff, scan staged contents and history as appropriate for secrets/private data, confirm every required untracked source/migration/test is included, preserve historical evidence outside the application where approved and verify build contexts independently. Stage 1 moved/deleted nothing and performed no Git push.

## M. Final go/no-go recommendation

**NO-GO.** The current implementation has reproduced access-control and quiz-workflow defects, and its production environment/build/startup recipe has unresolved release blockers. Strong local Concours and generator controls and successful builds/tests reduce uncertainty but do not compensate for these findings.

Proceed next only with the separately reviewed remediation stage. Reassess release status after the listed corrections, focused regressions, preservation checks and production-equivalent staging/recovery verification. Do not deploy, seed/reset, publish, clean up or enable automation on the strength of this report alone.

### Completion note

All three bounded draft pipelines completed without timeout:

| Profile | Runtime | MP4 | Other verified output |
|---|---:|---|---|
| YouTube Quiz | 178.521s | H.264, 1920×1080, 29.133s, 20,447,813 bytes; AAC stereo | Thumbnail and chapter text |
| Facts Short | 9.958s | H.264, 360×640, 10.133s, 736,618 bytes | Thumbnail and metadata; audio deliberately disabled in this fixture |
| Facts Long | 12.712s | H.264, 640×360, 11.733s, 1,115,780 bytes | Thumbnail and metadata; audio deliberately disabled in this fixture |

These are small FR draft fixtures. Final quality, large subject/video batches, Arabic video typography/audio variants and actual Windows launcher execution remain partially verified. The renderer code verifies facts streams/duration and decodes a sample frame; the quiz pipeline verifies its audio stream. No generated artifact was uploaded or published.

The final preservation comparison found **zero changes or removals among the original 6,106 protected files** and exactly one added repository file: this report. All **60 database tables / 215,916 rows**, column definitions, constraints and indexes match the baseline. Temporary audit HTTP listeners were closed; the preexisting development services were left running. Stage 1 is complete, and execution stopped without implementing corrections.
