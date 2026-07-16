import { Routes } from '@angular/router';

import { MainLayout } from './layouts/main-layout/main-layout';
import { AuthLayout } from './layouts/auth-layout/auth-layout';

import { Landing } from './features/landing/pages/landing/landing';

import { Dashboard } from './features/dashboard/pages/dashboard/dashboard';

import { Login } from './features/auth/pages/login/login';
import { Register } from './features/auth/pages/register/register';
import { ForgotPassword } from './features/auth/pages/forgot-password/forgot-password';
import { ResetPassword } from './features/auth/pages/reset-password/reset-password';

import { Terms } from './features/legal/pages/terms/terms';
import { Privacy } from './features/legal/pages/privacy/privacy';

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
  | Dashboard
  |--------------------------------------------------------------------------
  */

  {
    path: '',
    component: MainLayout,
    children: [

     

    ],
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

  {
    path: '**',
    redirectTo: '',
  },

];