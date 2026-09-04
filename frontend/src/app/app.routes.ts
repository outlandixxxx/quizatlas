import { Routes } from '@angular/router';
import { roleGuard } from './core/guards/role.guard';

// Layouts
import { PublicLayout } from './layouts/public-layout/public-layout';
import { AuthLayout } from './layouts/auth-layout/auth-layout';
import { UserLayout } from './layouts/user-layout/user-layout';

// Features - Public & Legal
import { Landing } from './features/landing/pages/landing/landing';
import { Terms } from './features/legal/pages/terms/terms';
import { Privacy } from './features/legal/pages/privacy/privacy';

// Features - Auth
import { Login } from './features/auth/pages/login/login';
import { Register } from './features/auth/pages/register/register';
import { ForgotPassword } from './features/auth/pages/forgot-password/forgot-password';
import { ResetPassword } from './features/auth/pages/reset-password/reset-password';

// Features - User Space
import { Dashboard } from './features/user/dashboard/dashboard';
import { SettingsComponent } from './features/user/settings/settings.component';
import { LeaderboardComponent } from './features/user/leaderboard/leaderboard.component';
import { BookmarksComponent } from './features/user/bookmarks/bookmarks.component';
import { AnalyticsComponent } from './features/user/analytics/analytics.component';
import { LibraryComponent } from './features/user/library/library.component';
import { QuizzesComponent } from './features/user/quizzes/quizzes.component';
import { ActiveQuizComponent } from './features/user/active-quiz/active-quiz.component';
import { ProfileComponent } from './features/user/profile/profile.component';
import { PracticeHubComponent } from './features/user/practices/practice-hub.component';
import { CustomPracticeComponent } from './features/user/practices/custom-practice.component';
import { QuizResultComponent } from './features/user/quiz-result/quiz-result.component';
import { guestGuard } from './core/guards/guest-guard';
import { authGuard } from './core/guards/auth-guard';
import { TrialQuiz } from './features/public/trial-quiz/trial-quiz';
import { Help } from './features/public/help/help';
import { Faq } from './features/public/faq/faq';
import { About } from './features/public/about/about';
import { Blog } from './features/public/blog/blog';
import { AchievementsComponent } from './features/user/achievement/achievements.component';
import { TeacherShareResultsComponent } from './features/teacher/pages/result/teacher-share-results.component';
import { TeacherDashboardComponent } from './features/teacher/pages/dashboard/teacher-dashboard.component';
import { QuestionBuilderComponent } from './features/teacher/pages/question-builder/question-builder.component';
import { CreateQuizComponent } from './features/teacher/pages/create-quiz/create-quiz.component';
import { QuizJoinComponent } from './features/teacher/pages/quiz-join/quiz-join.component';

export const routes: Routes = [
  {
    path: '',
    component: PublicLayout,
    children: [
      { path: '', component: Landing, title: 'MaroQuiz — Home' },
      { path: 'terms', component: Terms, title: 'Terms of Service — MaroQuiz' },
      { path: 'privacy', component: Privacy, title: 'Privacy Policy — MaroQuiz' },
      { path: 'trial/major/:majorSlug', component: TrialQuiz, title: 'Trial Quiz — MaroQuiz' },
      { path: 'trial/subject/:subjectSlug', component: TrialQuiz, title: 'Trial Quiz — MaroQuiz' },
      { path: 'about', component: About, title: 'About — MaroQuiz' },
      { path: 'faq', component: Faq, title: 'FAQ — MaroQuiz' },
      { path: 'help', component: Help, title: 'Help Center — MaroQuiz' },
      { path: 'blog', component: Blog, title: 'Blog — MaroQuiz' },
    ],
  },
  {
    path: '',
    component: AuthLayout,
    canActivate: [guestGuard],
    children: [
      { path: 'login', component: Login, title: 'Login — MaroQuiz' },
      { path: 'register', component: Register, title: 'Register — MaroQuiz' },
      { path: 'forgot-password', component: ForgotPassword, title: 'Forgot Password — MaroQuiz' },
      { path: 'reset-password', component: ResetPassword, title: 'Reset Password — MaroQuiz' },
    ],
  },
  {
    path: 'app',
    component: UserLayout,
    canActivate: [authGuard],
    children: [
      { path: '', redirectTo: 'dashboard', pathMatch: 'full' },
      { path: 'dashboard', component: Dashboard, title: 'Dashboard — MaroQuiz' },
      { path: 'practice', component: PracticeHubComponent, title: 'Practice Hub — MaroQuiz' },
      { path: 'practice/custom', component: CustomPracticeComponent, title: 'Custom Practice — MaroQuiz' },
      { path: 'quizzes', component: QuizzesComponent, title: 'Quizzes — MaroQuiz' },
      { path: 'quiz/:id', component: ActiveQuizComponent, title: 'Active Quiz Session — MaroQuiz' },
      { path: 'results/:id', component: QuizResultComponent, title: 'Quiz Results — MaroQuiz' },
      { path: 'library', component: LibraryComponent, title: 'Exam & PDF Library — MaroQuiz' },
      { path: 'analytics', component: AnalyticsComponent, title: 'Analytics — MaroQuiz' },
      { path: 'bookmarks', component: BookmarksComponent, title: 'Bookmarks — MaroQuiz' },
      { path: 'leaderboard', component: LeaderboardComponent, title: 'Leaderboard — MaroQuiz' },
      { path: 'settings', component: SettingsComponent, title: 'Settings — MaroQuiz' },
      { path: 'profile', component: ProfileComponent, title: 'Profile — MaroQuiz' },
      { path: 'achievements', component: AchievementsComponent, title: 'Achievements — MaroQuiz' },
      { path: 'join', component: QuizJoinComponent, title: 'Join a Quiz — MaroQuiz' },

      // Teacher / professor space — role-guarded, nested under UserLayout so
      // sidebar/header/ad-slots render normally
      {
        path: 'teacher',
        component: TeacherDashboardComponent,
        title: 'My Classes — MaroQuiz',
        canActivate: [roleGuard],
        data: { roles: ['admin', 'manager'] },
      },
      {
        path: 'teacher/shares/:shareId/results',
        component: TeacherShareResultsComponent,
        title: 'Class Results — MaroQuiz',
        canActivate: [roleGuard],
        data: { roles: ['admin', 'manager'] },
      },
      {
        path: 'teacher/quizzes/new',
        component: CreateQuizComponent,
        title: 'New Quiz — MaroQuiz',
        canActivate: [roleGuard],
        data: { roles: ['admin', 'manager'] },
      },
      {
        path: 'teacher/quizzes/:quizId/questions',
        component: QuestionBuilderComponent,
        title: 'Build Quiz — MaroQuiz',
        canActivate: [roleGuard],
        data: { roles: ['admin', 'manager'] },
      },
    ],
  },
  { path: '**', redirectTo: '' },
];