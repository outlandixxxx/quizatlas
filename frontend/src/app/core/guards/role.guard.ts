import { inject } from '@angular/core';
import { CanActivateFn, Router } from '@angular/router';

import { AuthState } from '../../features/auth/services/auth-state';

export const roleGuard: CanActivateFn = (route) => {
  const authState = inject(AuthState);
  const router = inject(Router);

  const allowedRoles = route.data['roles'] as string[] | undefined;
  const userRole = authState.user()?.role;

  if (!allowedRoles || (userRole && allowedRoles.includes(userRole))) {
    return true;
  }

  router.navigate(['/app/dashboard']);
  return false;
};