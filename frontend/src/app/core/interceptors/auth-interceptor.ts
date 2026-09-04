import { inject } from '@angular/core';
import { HttpInterceptorFn } from '@angular/common/http';
import { Router } from '@angular/router';
import { catchError, throwError } from 'rxjs';

import { Token } from '../services/token';
import { AuthState } from '../../features/auth/services/auth-state'; // adjust path

export const authInterceptor: HttpInterceptorFn = (req, next) => {
  const tokenService = inject(Token);
  const authState = inject(AuthState);
  const router = inject(Router);

  const token = tokenService.get();

  const authRequest = token
    ? req.clone({ setHeaders: { Authorization: `Bearer ${token}` } })
    : req;

  return next(authRequest).pipe(
    catchError(error => {
      if (error.status === 401) {
        tokenService.clear();
        authState.clear();
        router.navigate(['/login']);
      }
      return throwError(() => error);
    })
  );
};