import { Routes } from '@angular/router';
import { roleGuard } from './core/guards/role.guard';
import { guestGuard } from './core/guards/guest-guard';
import { authGuard } from './core/guards/auth-guard';

import { PublicLayout } from './layouts/public-layout/public-layout';
import { Landing } from './features/landing/pages/landing/landing';

export const routes: Routes = [
  {
  path: '',
  component: PublicLayout,
  children: [
    { path: '', component: Landing, title: 'MaroQuiz — Home' },
      { path: 'terms', loadComponent: () => import('./features/legal/pages/terms/terms').then(m => m.Terms), title: 'Terms of Service — MaroQuiz' },
      { path: 'privacy', loadComponent: () => import('./features/legal/pages/privacy/privacy').then(m => m.Privacy), title: 'Privacy Policy — MaroQuiz' },
      { path: 'trial/major/:majorSlug', loadComponent: () => import('./features/public/trial-quiz/trial-quiz').then(m => m.TrialQuiz), title: 'Trial Quiz — MaroQuiz' },
      { path: 'trial/subject/:subjectSlug', loadComponent: () => import('./features/public/trial-quiz/trial-quiz').then(m => m.TrialQuiz), title: 'Trial Quiz — MaroQuiz' },
      { path: 'about', loadComponent: () => import('./features/public/about/about').then(m => m.About), title: 'About — MaroQuiz' },
      { path: 'faq', loadComponent: () => import('./features/public/faq/faq').then(m => m.Faq), title: 'FAQ — MaroQuiz' },
      { path: 'help', loadComponent: () => import('./features/public/help/help').then(m => m.Help), title: 'Help Center — MaroQuiz' },
      { path: 'blog', loadComponent: () => import('./features/public/blog/blog').then(m => m.Blog), title: 'Blog — MaroQuiz' },
      { path: 'blog/:id', loadComponent: () => import('./features/public/blog/blog-detail/blog-detail').then(m => m.BlogDetail), title: 'Question — MaroQuiz' },
    ],
  },
  {
    path: '',
    loadComponent: () => import('./layouts/auth-layout/auth-layout').then(m => m.AuthLayout),
    canActivate: [guestGuard],
    children: [
      { path: 'login', loadComponent: () => import('./features/auth/pages/login/login').then(m => m.Login), title: 'Login — MaroQuiz' },
      { path: 'register', loadComponent: () => import('./features/auth/pages/register/register').then(m => m.Register), title: 'Register — MaroQuiz' },
      { path: 'forgot-password', loadComponent: () => import('./features/auth/pages/forgot-password/forgot-password').then(m => m.ForgotPassword), title: 'Forgot Password — MaroQuiz' },
      { path: 'reset-password', loadComponent: () => import('./features/auth/pages/reset-password/reset-password').then(m => m.ResetPassword), title: 'Reset Password — MaroQuiz' },
    ],
  },
  {
    path: 'app',
    loadComponent: () => import('./layouts/user-layout/user-layout').then(m => m.UserLayout),
    canActivate: [authGuard],
    children: [
      { path: '', redirectTo: 'dashboard', pathMatch: 'full' },
      { path: 'dashboard', loadComponent: () => import('./features/user/dashboard/dashboard').then(m => m.Dashboard), title: 'Dashboard — MaroQuiz' },
      { path: 'practice', loadComponent: () => import('./features/user/practices/practice-hub.component').then(m => m.PracticeHubComponent), title: 'Practice Hub — MaroQuiz' },
      { path: 'practice/custom', loadComponent: () => import('./features/user/practices/custom-practice.component').then(m => m.CustomPracticeComponent), title: 'Custom Practice — MaroQuiz' },
      { path: 'quizzes', loadComponent: () => import('./features/user/quizzes/quizzes.component').then(m => m.QuizzesComponent), title: 'Quizzes — MaroQuiz' },
      { path: 'quiz/:id', loadComponent: () => import('./features/user/active-quiz/active-quiz.component').then(m => m.ActiveQuizComponent), title: 'Active Quiz Session — MaroQuiz' },
      { path: 'results/:id', loadComponent: () => import('./features/user/quiz-result/quiz-result.component').then(m => m.QuizResultComponent), title: 'Quiz Results — MaroQuiz' },
      { path: 'library', loadComponent: () => import('./features/user/library/library.component').then(m => m.LibraryComponent), title: 'Exam & PDF Library — MaroQuiz' },
      { path: 'analytics', loadComponent: () => import('./features/user/analytics/analytics.component').then(m => m.AnalyticsComponent), title: 'Analytics — MaroQuiz' },
      { path: 'bookmarks', loadComponent: () => import('./features/user/bookmarks/bookmarks.component').then(m => m.BookmarksComponent), title: 'Bookmarks — MaroQuiz' },
      { path: 'leaderboard', loadComponent: () => import('./features/user/leaderboard/leaderboard.component').then(m => m.LeaderboardComponent), title: 'Leaderboard — MaroQuiz' },
      { path: 'settings', loadComponent: () => import('./features/user/settings/settings.component').then(m => m.SettingsComponent), title: 'Settings — MaroQuiz' },
      { path: 'profile', loadComponent: () => import('./features/user/profile/profile.component').then(m => m.ProfileComponent), title: 'Profile — MaroQuiz' },
      { path: 'achievements', loadComponent: () => import('./features/user/achievement/achievements.component').then(m => m.AchievementsComponent), title: 'Achievements — MaroQuiz' },
      { path: 'join', loadComponent: () => import('./features/teacher/pages/quiz-join/quiz-join.component').then(m => m.QuizJoinComponent), title: 'Join a Quiz — MaroQuiz' },
      { path: 'users/:id', loadComponent: () => import('./features/user/user-public-profile/user-public-profile.component').then(m => m.UserPublicProfileComponent), title: 'Profile — MaroQuiz' },
      { path: 'messages', loadComponent: () => import('./features/user/chat/chat-inbox/chat-inbox.component').then(m => m.ChatInboxComponent), title: 'Messages — MaroQuiz' },
      { path: 'messages/:userId', loadComponent: () => import('./features/user/chat/chat-thread/chat-thread.component').then(m => m.ChatThreadComponent), title: 'Messages — MaroQuiz' },

      {
        path: 'teacher',
        loadComponent: () => import('./features/teacher/pages/dashboard/teacher-dashboard.component').then(m => m.TeacherDashboardComponent),
        title: 'My Classes — MaroQuiz',
        canActivate: [roleGuard],
        data: { roles: ['admin', 'manager'] },
      },
      {
        path: 'teacher/shares/:shareId/results',
        loadComponent: () => import('./features/teacher/pages/result/teacher-share-results.component').then(m => m.TeacherShareResultsComponent),
        title: 'Class Results — MaroQuiz',
        canActivate: [roleGuard],
        data: { roles: ['admin', 'manager'] },
      },
      {
        path: 'teacher/quizzes/new',
        loadComponent: () => import('./features/teacher/pages/create-quiz/create-quiz.component').then(m => m.CreateQuizComponent),
        title: 'New Quiz — MaroQuiz',
        canActivate: [roleGuard],
        data: { roles: ['admin', 'manager'] },
      },
      {
        path: 'teacher/quizzes/:quizId/questions',
        loadComponent: () => import('./features/teacher/pages/question-builder/question-builder.component').then(m => m.QuestionBuilderComponent),
        title: 'Build Quiz — MaroQuiz',
        canActivate: [roleGuard],
        data: { roles: ['admin', 'manager'] },
      },
    ],
  },
  {
    path: 'admin',
    loadComponent: () => import('./layouts/admin-layout/admin-layout').then(m => m.AdminLayout),
    canActivate: [authGuard, roleGuard],
    data: { roles: ['admin'] },
    children: [
      { path: '', redirectTo: 'dashboard', pathMatch: 'full' },
      { path: 'dashboard', loadComponent: () => import('./features/admin/dashboard/dashboard').then(m => m.AdminDashboard), title: 'Admin Dashboard — MaroQuiz' },
      { path: 'majors', loadComponent: () => import('./features/admin/majors/majors').then(m => m.AdminMajors), title: 'Manage Majors — MaroQuiz', canActivate: [roleGuard], data: { roles: ['admin'] } },
      { path: 'subjects', loadComponent: () => import('./features/admin/subjects/subjects').then(m => m.AdminSubjects), title: 'Manage Subjects — MaroQuiz', canActivate: [roleGuard], data: { roles: ['admin'] } },
      { path: 'quizzes', loadComponent: () => import('./features/admin/quizzes/quizzes').then(m => m.AdminQuizzes), title: 'Manage Quizzes — MaroQuiz', canActivate: [roleGuard], data: { roles: ['admin'] } },
      { path: 'quizzes/:quizId/questions', loadComponent: () => import('./features/admin/quiz-questions/quiz-questions').then(m => m.AdminQuizQuestions), title: 'Manage Questions — MaroQuiz', canActivate: [roleGuard], data: { roles: ['admin'] } },
      { path: 'exam-pdfs', loadComponent: () => import('./features/admin/exam-pdfs/exam-pdfs').then(m => m.AdminExamPdfs), title: 'Exam PDFs — MaroQuiz', canActivate: [roleGuard], data: { roles: ['admin'] } },
    ],
  },
  { path: '**', redirectTo: '' },
];
