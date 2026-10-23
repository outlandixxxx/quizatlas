# Maroquiz style rollout

The landing-page concept is applied across all routed pages. The app keeps its Angular framework, route guards, API services, data bindings, and existing actions. No deployment is part of this work.

Every page uses the shared charcoal `#29252F`, warm cream `#F7F5F1`, orange `#F47745`, and yellow `#F2C94C` palette. Light/dark surfaces, status indicators, selected states, navigation, forms, tables, and progress displays use these colors or their tints. Orange/yellow controls use charcoal text.

The official artwork is `src/assets/images/Logo MaroQuiz.png` (1254×1254). Its URL lives in `src/app/core/constants/branding.ts`, and the shared `app-logo` component displays it in public headers/footers, account pages, and student/admin sidebars. The favicon, social image defaults, and organization metadata use the same asset. The original image is retained without recoloring.

The shared palette is in `src/styles/abstracts/_variables.scss`; page patterns are in `src/styles/abstracts/_page.scss`. The landing and login layout scopes retain their responsive layouts. Existing API connections, routing, page actions, and translation catalogs are preserved.

| Area | Pages |
| --- | --- |
| Landing | Home, grouped major/subject catalog, activity tables |
| Account | Login, registration, password recovery/reset, email verification |
| Public | About, help, FAQ, blog, question detail, major/subject trial quizzes |
| Legal | Terms, privacy, data deletion |
| Student | Dashboard, quiz browser, practice hub, custom practice, active quiz, results, library, analytics, bookmarks, rankings, settings, profile, achievements, public profile, inbox, conversation |
| Teacher | Dashboard/sharing, quiz creation, question builder, join code, class results |
| Admin | Dashboard, majors, subjects, quizzes, questions, exam PDFs, video tools, revision JSON, social pack, facts |

The rollout includes light/dark mode, Arabic layout direction, keyboard focus styles, reduced-motion support, responsive spacing, and scrollable wide tables. Real quiz content, scores, user images, and API responses are retained.

## Checks

Latest validation: 30 focused tests passed across 11 files, including the official logo path, accessible name, proportions, and home link. TypeScript and whitespace checks passed. The palette source audit covers 110 stylesheets and found no off-palette color literals. Main text/button color pairs exceed 4.5:1 contrast. Production browser and SSR builds passed (658.99 kB initial bundle, 165.65 kB estimated transfer). Bundle/component-style budget warnings and the existing social-pack optional-chain warning remain. The built official logo matches the supplied asset byte for byte.

- `npm run test:style`: focused authentication, shared form controls, subject grouping/search, and activity table regression checks.
- `npm run build`: production browser and SSR compilation for all routes.
- The general test suite has unrelated pre-existing auth/theme import failures.
- Local browser checks now pass for home, login, and registration at 1440px and 375px: official logo assets, no duplicate/old wordmarks, no horizontal overflow, and working mobile navigation. Registration branding renders at 184px on desktop and 144px on mobile; the login logo renders at 112px. Other routed pages have not had browser visual review.

## Routed component styles

- `src/app/features/legal/pages/terms/terms.scss`
- `src/app/features/legal/pages/privacy/privacy.scss`
- `src/app/features/legal/pages/data-deletion/data-deletion.scss`
- `src/app/features/public/trial-quiz/trial-quiz.scss`
- `src/app/features/public/about/about.scss`
- `src/app/features/public/faq/faq.scss`
- `src/app/features/public/help/help.scss`
- `src/app/features/public/blog/blog.scss`
- `src/app/features/public/blog/blog-detail/blog-detail.scss`
- `src/app/features/auth/pages/email-verified/email-verified.scss`
- `src/app/features/auth/pages/login/login.scss`
- `src/app/features/auth/pages/register/register.scss`
- `src/app/features/auth/pages/forgot-password/forgot-password.scss`
- `src/app/features/auth/pages/reset-password/reset-password.scss`
- `src/app/features/user/dashboard/dashboard.scss`
- `src/app/features/user/practices/practice-hub.component.scss`
- `src/app/features/user/practices/custom-practice.component.scss`
- `src/app/features/user/quizzes/quizzes.component.scss`
- `src/app/features/user/active-quiz/active-quiz.component.scss`
- `src/app/features/user/quiz-result/quiz-result.component.scss`
- `src/app/features/user/library/library.component.scss`
- `src/app/features/user/analytics/analytics.component.scss`
- `src/app/features/user/bookmarks/bookmarks.component.scss`
- `src/app/features/user/leaderboard/leaderboard.component.scss`
- `src/app/features/user/settings/settings.component.scss`
- `src/app/features/user/profile/profile.component.scss`
- `src/app/features/user/achievement/achievements.component.scss`
- `src/app/features/teacher/pages/quiz-join/quiz-join.component.scss`
- `src/app/features/user/user-public-profile/user-public-profile.component.scss`
- `src/app/features/user/chat/chat-inbox/chat-inbox.component.scss`
- `src/app/features/user/chat/chat-thread/chat-thread.component.scss`
- `src/app/features/teacher/pages/dashboard/teacher-dashboard.component.scss`
- `src/app/features/teacher/pages/result/teacher-share-results.component.scss`
- `src/app/features/teacher/pages/create-quiz/create-quiz.component.scss`
- `src/app/features/teacher/pages/question-builder/question-builder.component.scss`
- `src/app/features/admin/dashboard/dashboard.scss`
- `src/app/features/admin/majors/majors.scss`
- `src/app/features/admin/subjects/subjects.scss`
- `src/app/features/admin/quizzes/quizzes.scss`
- `src/app/features/admin/youtube-videos/youtube-videos.scss`
- `src/app/features/admin/revision-json/revision-json.scss`
- `src/app/features/admin/social-pack/social-pack.scss`
- `src/app/features/admin/facts/facts.scss`
- `src/app/features/admin/quiz-questions/quiz-questions.scss`
- `src/app/features/admin/exam-pdfs/exam-pdfs.scss`
