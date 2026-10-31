import { HttpInterceptorFn, HttpErrorResponse } from '@angular/common/http';
import { catchError, throwError } from 'rxjs';

import { environment } from '../../../environments/environment';

export const errorInterceptor: HttpInterceptorFn = (req, next) => {
  return next(req).pipe(
    catchError((error: HttpErrorResponse) => {
      // Authentication cleanup belongs only to authInterceptor's API/credential guard.

      // Log full error details only in dev — production users shouldn't see
      // backend implementation details (stack traces, internal messages) in
      // their browser console (L12).
      if (!environment.production) {
        console.error(`[HTTP Error ${error.status}]`, error.error?.message || error.message);
      }

      return throwError(() => error);
    }),
  );
};
