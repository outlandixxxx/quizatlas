import { inject } from '@angular/core';
import { CanActivateFn, Router } from '@angular/router';

import { Token } from '../services/token';

/**
 * Guest Guard
 * Prevents authenticated users from opening login/register pages.
 */
export const guestGuard: CanActivateFn = (route, state) => {
  const tokenService = inject(Token);
  const router = inject(Router);

  if (tokenService.has()) {
    return router.createUrlTree(['/app/dashboard']);
  }

  return true;
};