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
      { path: '', component: Landing, title: 'QuizAtlas — Home' },
      { path: 'terms', component: Terms, title: 'Terms of Service — QuizAtlas' },
      { path: 'privacy', component: Privacy, title: 'Privacy Policy — QuizAtlas' },
      { path: 'trial/major/:majorSlug', component: TrialQuiz, title: 'Trial Quiz — QuizAtlas' },
      { path: 'trial/subject/:subjectSlug', component: TrialQuiz, title: 'Trial Quiz — QuizAtlas' },
      { path: 'about', component: About, title: 'About — QuizAtlas' },
      { path: 'faq', component: Faq, title: 'FAQ — QuizAtlas' },
      { path: 'help', component: Help, title: 'Help Center — QuizAtlas' },
      { path: 'blog', component: Blog, title: 'Blog — QuizAtlas' },
    ],
  },
  {
    path: '',
    component: AuthLayout,
    canActivate: [guestGuard],
    children: [
      { path: 'login', component: Login, title: 'Login — QuizAtlas' },
      { path: 'register', component: Register, title: 'Register — QuizAtlas' },
      { path: 'forgot-password', component: ForgotPassword, title: 'Forgot Password — QuizAtlas' },
      { path: 'reset-password', component: ResetPassword, title: 'Reset Password — QuizAtlas' },
    ],
  },
  {
    path: 'app',
    component: UserLayout,
    canActivate: [authGuard],
    children: [
      { path: '', redirectTo: 'dashboard', pathMatch: 'full' },
      { path: 'dashboard', component: Dashboard, title: 'Dashboard — QuizAtlas' },
      { path: 'practice', component: PracticeHubComponent, title: 'Practice Hub — QuizAtlas' },
      { path: 'practice/custom', component: CustomPracticeComponent, title: 'Custom Practice — QuizAtlas' },
      { path: 'quizzes', component: QuizzesComponent, title: 'Quizzes — QuizAtlas' },
      { path: 'quiz/:id', component: ActiveQuizComponent, title: 'Active Quiz Session — QuizAtlas' },
      { path: 'results/:id', component: QuizResultComponent, title: 'Quiz Results — QuizAtlas' },
      { path: 'library', component: LibraryComponent, title: 'Exam & PDF Library — QuizAtlas' },
      { path: 'analytics', component: AnalyticsComponent, title: 'Analytics — QuizAtlas' },
      { path: 'bookmarks', component: BookmarksComponent, title: 'Bookmarks — QuizAtlas' },
      { path: 'leaderboard', component: LeaderboardComponent, title: 'Leaderboard — QuizAtlas' },
      { path: 'settings', component: SettingsComponent, title: 'Settings — QuizAtlas' },
      { path: 'profile', component: ProfileComponent, title: 'Profile — QuizAtlas' },
      { path: 'achievements', component: AchievementsComponent, title: 'Achievements — QuizAtlas' },
      { path: 'join', component: QuizJoinComponent, title: 'Join a Quiz — QuizAtlas' },

      // Teacher / professor space — role-guarded, nested under UserLayout so
      // sidebar/header/ad-slots render normally
      {
        path: 'teacher',
        component: TeacherDashboardComponent,
        title: 'My Classes — QuizAtlas',
        canActivate: [roleGuard],
        data: { roles: ['admin', 'manager'] },
      },
      {
        path: 'teacher/shares/:shareId/results',
        component: TeacherShareResultsComponent,
        title: 'Class Results — QuizAtlas',
        canActivate: [roleGuard],
        data: { roles: ['admin', 'manager'] },
      },
      {
        path: 'teacher/quizzes/new',
        component: CreateQuizComponent,
        title: 'New Quiz — QuizAtlas',
        canActivate: [roleGuard],
        data: { roles: ['admin', 'manager'] },
      },
      {
        path: 'teacher/quizzes/:quizId/questions',
        component: QuestionBuilderComponent,
        title: 'Build Quiz — QuizAtlas',
        canActivate: [roleGuard],
        data: { roles: ['admin', 'manager'] },
      },
    ],
  },
  { path: '**', redirectTo: '' },
];