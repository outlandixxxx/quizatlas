import { inject } from '@angular/core';
import { CanActivateFn, Router } from '@angular/router';
import { catchError, map, of } from 'rxjs';
import { ExamPdfApi } from '../services/exam-pdf.api';

/** Keep private files reachable until they have actually been reviewed/mapped. */
export const legacyLibraryGuard: CanActivateFn = () => {
  const router = inject(Router);
  return inject(ExamPdfApi)
    .list({ page: 1, per_page: 1 })
    .pipe(
      map((response) => (response.data.meta.total > 0 ? true : router.parseUrl('/concours'))),
      catchError(() => of(true)),
    );
};
