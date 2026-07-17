import { Routes } from '@angular/router';

import { Landing } from './features/landing/pages/landing/landing';

import { Login } from './features/auth/pages/login/login';
import { Register } from './features/auth/pages/register/register';
import { ForgotPassword } from './features/auth/pages/forgot-password/forgot-password';
import { ResetPassword } from './features/auth/pages/reset-password/reset-password';

import { Terms } from './features/legal/pages/terms/terms';
import { Privacy } from './features/legal/pages/privacy/privacy';

import { Dashboard } from './features/user/dashboard/pages/dashboard/dashboard';

import { AuthLayout } from './layouts/auth-layout/auth-layout';
import { UserLayout } from './layouts/user-layout/user-layout';

export const routes: Routes = [

  /*
  |--------------------------------------------------------------------------
  | Public Website
  |--------------------------------------------------------------------------
  */

  {
    path: '',
    component: Landing,
    title: 'QuizAtlas',
  },

  /*
  |--------------------------------------------------------------------------
  | Authentication
  |--------------------------------------------------------------------------
  */

  {
    path: '',
    component: AuthLayout,
    children: [
      {
        path: 'login',
        component: Login,
        title: 'Login',
      },
      {
        path: 'register',
        component: Register,
        title: 'Register',
      },
      {
        path: 'forgot-password',
        component: ForgotPassword,
        title: 'Forgot Password',
      },
      {
        path: 'reset-password',
        component: ResetPassword,
        title: 'Reset Password',
      },
      {
        path: 'terms',
        component: Terms,
        title: 'Terms of Service',
      },
      {
        path: 'privacy',
        component: Privacy,
        title: 'Privacy Policy',
      },
    ],
  },

  /*
  |--------------------------------------------------------------------------
  | User Space
  |--------------------------------------------------------------------------
  */

  {
    path: 'app',
    component: UserLayout,
    children: [
      {
        path: 'dashboard',
        component: Dashboard,
        title: 'Dashboard',
      },
    ],
  },

  /*
  |--------------------------------------------------------------------------
  | Admin Space
  |--------------------------------------------------------------------------
  */

  // We'll add the admin routes later.

  {
    path: '**',
    redirectTo: '',
  },

];