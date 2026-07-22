import { Routes } from '@angular/router';

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
import { Dashboard } from './features/user/dashboard/pages/dashboard/dashboard';

export const routes: Routes = [

  /*
  |--------------------------------------------------------------------------
  | Public Website (Wrapped in PublicLayout for Header + Footer)
  |--------------------------------------------------------------------------
  */
  {
    path: '',
    component: PublicLayout,
    children: [
      {
        path: '',
        component: Landing,
        title: 'QuizAtlas — Home',
      },
      {
        path: 'terms',
        component: Terms,
        title: 'Terms of Service — QuizAtlas',
      },
      {
        path: 'privacy',
        component: Privacy,
        title: 'Privacy Policy — QuizAtlas',
      },
    ],
  },

  /*
  |--------------------------------------------------------------------------
  | Authentication (Minimal Auth Shell)
  |--------------------------------------------------------------------------
  */
  {
    path: '',
    component: AuthLayout,
    children: [
      {
        path: 'login',
        component: Login,
        title: 'Login — QuizAtlas',
      },
      {
        path: 'register',
        component: Register,
        title: 'Register — QuizAtlas',
      },
      {
        path: 'forgot-password',
        component: ForgotPassword,
        title: 'Forgot Password — QuizAtlas',
      },
      {
        path: 'reset-password',
        component: ResetPassword,
        title: 'Reset Password — QuizAtlas',
      },
    ],
  },

  /*
  |--------------------------------------------------------------------------
  | User Space (Dashboard Layout with Sidebar/Toolbar)
  |--------------------------------------------------------------------------
  */
  {
    path: 'app',
    component: UserLayout,
    children: [
      {
        path: 'dashboard',
        component: Dashboard,
        title: 'Dashboard — QuizAtlas',
      },
    ],
  },

  /*
  |--------------------------------------------------------------------------
  | Wildcard / Fallback
  |--------------------------------------------------------------------------
  */
  {
    path: '**',
    redirectTo: '',
  },

];