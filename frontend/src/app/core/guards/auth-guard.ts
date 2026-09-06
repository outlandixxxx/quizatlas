import { inject } from '@angular/core';
import { CanActivateFn, Router } from '@angular/router';

import { Token } from '../services/token';

/**
 * Auth Guard
 * Blocks unauthenticated users from accessing protected app routes.
 */
export const authGuard: CanActivateFn = (route, state) => {
  const tokenService = inject(Token);
  const router = inject(Router);

  if (tokenService.has()) {
    return true;
  }

  return router.createUrlTree(['/login'], { queryParams: { returnUrl: state.url } });
};