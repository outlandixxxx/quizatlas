import { environment } from '../../../environments/environment';

/** Keep raw backend error details out of production browser logs. */
export function logClientError(context: string, error: unknown): void {
  if (!environment.production) console.error(context, error);
}
