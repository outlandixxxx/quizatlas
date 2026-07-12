import { inject } from '@angular/core';
import { HttpInterceptorFn } from '@angular/common/http';

import { Token } from '../services/token';

export const authInterceptor: HttpInterceptorFn = (req, next) => {

  const tokenService = inject(Token);

  const token = tokenService.get();

  if (!token) {

    return next(req);

  }

  const authRequest = req.clone({

    setHeaders: {

      Authorization: `Bearer ${token}`,

    },

  });

  return next(authRequest);

};