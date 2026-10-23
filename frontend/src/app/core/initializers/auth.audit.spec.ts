import { TestBed } from '@angular/core/testing';
import { Subject, throwError } from 'rxjs';
import { initializeAuth } from './auth.initializer';
import { AuthApi } from '../../features/auth/services/auth-api';
import { AuthState } from '../../features/auth/services/auth-state';
import { Token } from '../services/token';
import { User } from '../models/user';
import { serverRoutes } from '../../app.routes.server';
import { RenderMode } from '@angular/ssr';

const admin = { id: 1, name: 'Admin', email: 'admin@example.test', username: 'admin', role: 'admin' } as User;

describe('Admin refresh initialization', () => {
  const token = { has: vi.fn(() => true), clear: vi.fn() };
  const api = { me: vi.fn() };
  let state: AuthState;
  beforeEach(() => {
    vi.clearAllMocks();
    token.has.mockReturnValue(true);
    TestBed.configureTestingModule({});
    state = TestBed.inject(AuthState);
  });
  function start() {
    return initializeAuth(token as unknown as Token, api as unknown as AuthApi, state)();
  }
  it('waits for the existing identity request before routing an admin after refresh', async () => {
    const response = new Subject<any>();
    api.me.mockReturnValue(response);
    const initialized = start();
    let resolved = false;
    void initialized.then(() => resolved = true);
    await Promise.resolve();
    expect(resolved).toBe(false);
    expect(state.loading()).toBe(true);
    response.next({ data: admin });
    await initialized;
    expect(state.user()?.role).toBe('admin');
    expect(state.loading()).toBe(false);
  });
  it('preserves the existing error cleanup when the identity request fails', async () => {
    api.me.mockReturnValue(throwError(() => ({ status: 401 })));
    await start();
    expect(token.clear).toHaveBeenCalledOnce();
    expect(state.authenticated()).toBe(false);
    expect(state.loading()).toBe(false);
  });
  it('makes no identity request without an existing token', async () => {
    token.has.mockReturnValue(false);
    await start();
    expect(api.me).not.toHaveBeenCalled();
  });
  it('keeps admin rendering in the browser where the existing token is available', () => {
    expect(serverRoutes.find(route => route.path === 'admin/**')?.renderMode).toBe(RenderMode.Client);
  });
});
