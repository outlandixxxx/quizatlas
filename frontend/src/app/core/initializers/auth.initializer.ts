import { firstValueFrom, catchError, finalize, of, tap } from 'rxjs';
import { Token } from '../services/token';
import { AuthApi } from '../../features/auth/services/auth-api';
import { AuthState } from '../../features/auth/services/auth-state';

/** Preserve the existing /auth/me behavior, but wait for it before checking admin roles. */
export function initializeAuth(token: Token, authApi: AuthApi, authState: AuthState) {
  return async (): Promise<void> => {
    if (!token.has()) return;
    authState.startLoading();
    await firstValueFrom(
      authApi.me().pipe(
        tap((response) => authState.setUser(response.data)),
        catchError(() => {
          token.clear();
          authState.clear();
          return of(null);
        }),
        finalize(() => authState.stopLoading()),
      ),
    );
  };
}
