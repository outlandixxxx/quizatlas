import { Routes } from '@angular/router';

import { MainLayout } from './layouts/main-layout/main-layout';
import { Home } from './features/home/pages/home/home';
import { Login } from './features/auth/pages/login/login';
import { Dashboard } from './features/dashboard/pages/dashboard/dashboard';

export const routes: Routes = [
  {
    path: '',
    component: MainLayout,
    children: [
      {
        path: '',
        component: Home,
        title: 'QuizAtlas',
      },
      {
        path: 'dashboard',
        component: Dashboard,
        title: 'Dashboard',
      },
    ],
  },
  {
    path: 'login',
    component: Login,
    title: 'Login',
  },
  {
    path: '**',
    redirectTo: '',
  },
];