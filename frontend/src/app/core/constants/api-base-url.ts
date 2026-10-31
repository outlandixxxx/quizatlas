import { InjectionToken } from '@angular/core';
import { environment } from '../../../environments/environment';

// The browser always uses the public address. SSR may override this provider.
export const API_BASE_URL = new InjectionToken<string>('API_BASE_URL', {
  providedIn: 'root',
  factory: () => environment.apiUrl,
});
