import { EMPTY, Observable, expand, map, reduce } from 'rxjs';
import { ApiResponse } from '../../../core/models/api-response';

// These endpoints return page data without pagination metadata. Continue until
// a short (or empty) page, so a fixed per_page limit never truncates the picker.
export function collectReferencePages<T>(
  fetchPage: (page: number) => Observable<ApiResponse<T[]>>,
  pageSize: number,
): Observable<T[]> {
  return fetchPage(1).pipe(
    expand((response, index) => response.data.length === pageSize
      ? fetchPage(index + 2)
      : EMPTY),
    map(response => response.data),
    reduce((all, page) => all.concat(page), [] as T[]),
  );
}
