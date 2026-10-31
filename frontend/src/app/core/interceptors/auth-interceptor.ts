import { DOCUMENT, inject } from '@angular/core';
import { HttpInterceptorFn } from '@angular/common/http';
import { Router } from '@angular/router';
import { catchError, throwError } from 'rxjs';

import { Token } from '../services/token';
import { AuthState } from '../../features/auth/services/auth-state';
import { API_BASE_URL } from '../constants/api-base-url';
import { apiRequestPath, isPublicApiPath } from '../utils/api-url';

export const authInterceptor: HttpInterceptorFn = (req, next) => {
  const tokenService = inject(Token);
  const token = tokenService.get();
  // SSR has no local-storage session. Avoid reading Domino's unsupported baseURI getter.
  if (!token) return next(req);
  const authState = inject(AuthState);
  const router = inject(Router);
  const path = apiRequestPath(req.url, inject(API_BASE_URL), inject(DOCUMENT).baseURI);
  const authenticatedApi = path !== null && !isPublicApiPath(path);
  const authRequest =
    authenticatedApi && token && !req.headers.has('Authorization')
      ? req.clone({ setHeaders: { Authorization: `Bearer ${token}` } })
      : req;

  return next(authRequest).pipe(
    catchError((error) => {
      // A response to an older token must not invalidate a newly logged-in session.
      if (
        error.status === 401 &&
        authenticatedApi &&
        token &&
        authRequest.headers.get('Authorization') === `Bearer ${token}` &&
        tokenService.get() === token
      ) {
        tokenService.clear();
        authState.clear();
        if (!/^\/login(?:[/?#]|$)/.test(router.url)) void router.navigate(['/login']);
      }
      return throwError(() => error);
    }),
  );
};
