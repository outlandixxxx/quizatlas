import { environment } from '../../../../../environments/environment';
import { TestBed } from '@angular/core/testing';
import { ActivatedRoute, Router, convertToParamMap, provideRouter } from '@angular/router';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { NEVER, Subject, of, throwError } from 'rxjs';
import { AuthApi } from '../../services/auth-api';
import { AuthState } from '../../services/auth-state';
import { GoogleAuthService } from '../../../../core/services/google-auth.service';
import { RecaptchaService } from '../../../../core/services/recaptcha.service';
import { Token } from '../../../../core/services/token';
import { LoginForm } from './login-form';

const user = {
  id: 1,
  name: 'Test learner',
  username: 'learner',
  email: 'learner@example.test',
  role: 'user',
};
const response = { data: { access_token: 'test-access-token', user } };

describe('Redesigned login form', () => {
  const api = { login: vi.fn(), googleLogin: vi.fn(), resendVerification: vi.fn() };
  const recaptcha = { execute: vi.fn() };
  const google = { renderButton: vi.fn() };
  const token = { set: vi.fn() };
  const route = { snapshot: { queryParamMap: convertToParamMap({}) } };

  beforeEach(async () => {
    api.login.mockReset().mockReturnValue(of(response));
    api.googleLogin.mockReset().mockReturnValue(of(response));
    api.resendVerification.mockReset().mockReturnValue(of({ success: true }));
    recaptcha.execute.mockReset().mockResolvedValue('test-recaptcha');
    google.renderButton.mockReset().mockReturnValue(NEVER);
    token.set.mockReset();
    route.snapshot.queryParamMap = convertToParamMap({});
    await TestBed.configureTestingModule({
      imports: [
        LoginForm,
        TranslocoTestingModule.forRoot({
          langs: { en: {} },
          preloadLangs: true,
          translocoConfig: {
            availableLangs: ['en'],
            defaultLang: 'en',
            missingHandler: { logMissingKey: false },
          },
        }),
      ],
      providers: [
        provideRouter([]),
        { provide: ActivatedRoute, useValue: route },
        { provide: AuthApi, useValue: api },
        { provide: RecaptchaService, useValue: recaptcha },
        { provide: GoogleAuthService, useValue: google },
        { provide: Token, useValue: token },
      ],
    }).compileComponents();
    vi.spyOn(TestBed.inject(Router), 'navigate').mockResolvedValue(true);
    vi.spyOn(TestBed.inject(Router), 'navigateByUrl').mockResolvedValue(true);
  });
  afterEach(() => vi.restoreAllMocks());

  async function render() {
    const fixture = TestBed.createComponent(LoginForm);
    await fixture.whenStable();
    fixture.detectChanges();
    return fixture;
  }

  it('keeps labeled fields, password visibility, remember-me, recovery routes, and Google sign-in', async () => {
    const fixture = await render();
    const root: HTMLElement = fixture.nativeElement;
    expect(root.querySelector('label[for="login-email"]')).toBeTruthy();
    expect(root.querySelector('input[autocomplete="email"]')).toBeTruthy();
    expect(root.querySelector('#login-password')?.getAttribute('type')).toBe('password');
    (root.querySelector('.password-toggle') as HTMLButtonElement).click();
    fixture.detectChanges();
    expect(root.querySelector('#login-password')?.getAttribute('type')).toBe('text');
    expect(root.querySelector('.password-toggle')?.getAttribute('aria-pressed')).toBe('true');
    (root.querySelector('[type="checkbox"]') as HTMLInputElement).click();
    expect(fixture.componentInstance.form.controls.remember.value).toBe(true);
    expect(root.querySelector('a[href="/forgot-password"]')).toBeTruthy();
    expect(root.querySelector('a[href="/register"]')).toBeTruthy();
    expect(google.renderButton).toHaveBeenCalledWith(
      root.querySelector('.google-button-container'),
    );
  });

  it('keeps invalid credentials local and marks the fields as touched', async () => {
    const fixture = await render();
    fixture.nativeElement
      .querySelector('form')
      .dispatchEvent(new Event('submit', { bubbles: true, cancelable: true }));
    expect(fixture.componentInstance.form.controls.email.touched).toBe(true);
    expect(fixture.componentInstance.form.controls.password.touched).toBe(true);
    expect(recaptcha.execute).not.toHaveBeenCalled();
    expect(api.login).not.toHaveBeenCalled();
  });

  it('submits the existing payload with reCAPTCHA and preserves student redirects', async () => {
    const fixture = await render();
    fixture.componentInstance.form.setValue({
      email: user.email,
      password: 'test-password',
      remember: true,
    });
    fixture.nativeElement
      .querySelector('form')
      .dispatchEvent(new Event('submit', { bubbles: true, cancelable: true }));
    await fixture.whenStable();
    expect(recaptcha.execute).toHaveBeenCalledWith('login');
    expect(api.login).toHaveBeenCalledWith({
      email: user.email,
      password: 'test-password',
      recaptcha_token: 'test-recaptcha',
    });
    expect(token.set).toHaveBeenCalledWith('test-access-token');
    expect(TestBed.inject(AuthState).user()).toEqual(user);
    expect(TestBed.inject(Router).navigate).toHaveBeenCalledWith(['/app/dashboard']);
  });

  it('disables the submit button during the request and re-enables it when complete', async () => {
    const pending = new Subject<any>();
    api.login.mockReturnValue(pending);
    const fixture = await render();
    fixture.componentInstance.form.setValue({
      email: user.email,
      password: 'test-password',
      remember: false,
    });
    fixture.componentInstance.login();
    await fixture.whenStable();
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('.login-submit').disabled).toBe(true);
    expect(fixture.nativeElement.querySelector('form').getAttribute('aria-busy')).toBe('true');
    pending.next(response);
    pending.complete();
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('.login-submit').disabled).toBe(false);
  });

  it('retains the email-verification error and resend action', async () => {
    vi.spyOn(console, 'error').mockImplementation(() => {});
    api.login.mockReturnValue(throwError(() => ({ status: 403 })));
    const fixture = await render();
    fixture.componentInstance.form.setValue({
      email: user.email,
      password: 'test-password',
      remember: false,
    });
    fixture.componentInstance.login();
    await fixture.whenStable();
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('[role="alert"]').textContent).toContain(
      'auth.emailVerification.loginBlocked',
    );
    fixture.nativeElement.querySelector('.link-btn').click();
    fixture.detectChanges();
    expect(api.resendVerification).toHaveBeenCalledWith({ email: user.email });
    expect(fixture.nativeElement.querySelector('.resend-block [role="status"]')).toBeTruthy();
  });

  it('honours returnUrl after Google authentication', async () => {
    route.snapshot.queryParamMap = convertToParamMap({ returnUrl: '/app/quizzes' });
    const credentials = new Subject<string>();
    google.renderButton.mockReturnValue(credentials);
    await render();
    credentials.next('test-google-credential');
    expect(api.googleLogin).toHaveBeenCalledWith({ credential: 'test-google-credential' });
    expect(TestBed.inject(Router).navigateByUrl).toHaveBeenCalledWith('/app/quizzes');
  });

  it('keeps the registration verification message', async () => {
    route.snapshot.queryParamMap = convertToParamMap({ registered: '1' });
    const fixture = await render();
    expect(fixture.nativeElement.querySelector('.success-msg').textContent).toContain(
      'auth.emailVerification.registeredRedirect',
    );
  });
  it('hides raw production login errors while preserving the existing error feedback', async () => {
    const previousProduction = environment.production;
    environment.production = true;
    const log = vi.spyOn(console, 'error').mockImplementation(() => {});
    try {
      api.login.mockReturnValue(
        throwError(() => ({ status: 500, error: { message: 'internal details' } })),
      );
      const fixture = await render();
      fixture.componentInstance.form.setValue({
        email: user.email,
        password: 'test-password',
        remember: false,
      });
      fixture.componentInstance.login();
      await fixture.whenStable();
      fixture.detectChanges();
      expect(log).not.toHaveBeenCalled();
      expect(fixture.nativeElement.querySelector('[role="alert"]').textContent).toContain(
        'auth.loginError',
      );
      expect(api.login).toHaveBeenCalledWith({
        email: user.email,
        password: 'test-password',
        recaptcha_token: 'test-recaptcha',
      });
    } finally {
      environment.production = previousProduction;
    }
  });
});
