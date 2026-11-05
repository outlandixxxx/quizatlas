import { TestBed } from '@angular/core/testing';
import { Subject } from 'rxjs';
import { Http } from '../../../core/services/http';
import { AuthState } from '../../auth/services/auth-state';
import { ApiQuizResult, QuizAttemptApi } from './quiz-attempt.api';

const progression = { xp_earned: 40, total_xp: 110, level: 2, xp_into_current_level: 30, xp_for_next_level: 243 };
const result = { id: 9, status: 'submitted', submitted_at: '2026-11-04T10:00:00Z', progression } as ApiQuizResult;

describe('server-authoritative quiz progression', () => {
  let pending: Subject<any>;
  let auth: AuthState;
  let api: QuizAttemptApi;
  const http = { get: vi.fn(), post: vi.fn() };
  beforeEach(() => {
    pending = new Subject();
    http.get.mockReset().mockReturnValue(pending);
    http.post.mockReset().mockReturnValue(pending);
    TestBed.configureTestingModule({ providers: [{ provide: Http, useValue: http }] });
    auth = TestBed.inject(AuthState);
    auth.setUser({ id: 1, name: 'Fixture', username: 'fixture', email: 'fixture@example.test', role: 'user', xp: 70 });
    api = TestBed.inject(QuizAttemptApi);
  });

  it.each(['submit', 'getResult'] as const)('updates the existing user from %s without another request', method => {
    if (method === 'submit') api.submit(9).subscribe();
    else api.getResult(9).subscribe();
    pending.next({ data: result, rewards: { progression } });
    expect(auth.user()).toMatchObject({ id: 1, name: 'Fixture', xp: 110, level: 2, xp_into_current_level: 30, xp_for_next_level: 243 });
    expect(http.get.mock.calls.length + http.post.mock.calls.length).toBe(1);
  });

  it.each(['logout', 'another-user', 'newer-xp'] as const)('ignores an obsolete response after %s', change => {
    api.getResult(9).subscribe();
    if (change === 'logout') auth.clear();
    else auth.setUser({ ...auth.user()!, id: change === 'another-user' ? 2 : 1, xp: 500 });
    const expected = auth.user();
    pending.next({ data: result });
    expect(auth.user()).toEqual(expected);
  });

  it.each([{ id: 10 }, { status: 'in_progress' }, { submitted_at: null }])('ignores mismatched or unfinished progression: %j', change => {
    api.getResult(9).subscribe();
    pending.next({ data: { ...result, ...change } });
    expect(auth.user()?.xp).toBe(70);
  });
});
