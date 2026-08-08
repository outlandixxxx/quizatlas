import { inject } from '@angular/core';
import { HttpInterceptorFn } from '@angular/common/http';
import { finalize } from 'rxjs';

import { LoadingService } from '../services/loading.service';

export const loadingInterceptor: HttpInterceptorFn = (req, next) => {
  const loadingService = inject(LoadingService);

  // Skip static assets, translation files (Transloco i18n), or explicitly skipped requests
  const isAssetOrTranslation = req.url.includes('/assets/') || req.url.endsWith('.json');
  const skipLoading = req.headers.has('X-Skip-Loading') || isAssetOrTranslation;

  if (skipLoading) {
    return next(req);
  }

  loadingService.show();

  return next(req).pipe(
    finalize(() => {
      loadingService.hide();
    })
  );
};