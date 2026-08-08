import { inject } from '@angular/core';
import { HttpInterceptorFn, HttpErrorResponse } from '@angular/common/http';
import { Router } from '@angular/router';
import { catchError, throwError } from 'rxjs';

import { Token } from '../services/token';
import { AuthState } from '../../features/auth/services/auth-state';

export const errorInterceptor: HttpInterceptorFn = (req, next) => {
  const tokenService = inject(Token);
  const authState = inject(AuthState);
  const router = inject(Router);

  return next(req).pipe(
    catchError((error: HttpErrorResponse) => {
      if (error.status === 401) {
        // Token is invalid or expired
        tokenService.clear();
        authState.clear();

        // Avoid infinite redirect loop if already on login/auth routes
        if (!router.url.includes('/login')) {
          router.navigate(['/login']);
        }
      }

      // Log error details for debugging
      console.error(`[HTTP Error ${error.status}]`, error.error?.message || error.message);

      return throwError(() => error);
    })
  );
};