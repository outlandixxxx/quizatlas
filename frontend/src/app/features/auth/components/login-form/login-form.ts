import {
  AfterViewInit,
  ChangeDetectionStrategy,
  Component,
  ElementRef,
  OnInit,
  ViewChild,
  inject,
  signal,
} from '@angular/core';
import {
  FormBuilder,
  ReactiveFormsModule,
  Validators,
} from '@angular/forms';

import { ActivatedRoute, Router, RouterLink } from '@angular/router';
import { finalize } from 'rxjs';

import { TranslocoPipe } from '@jsverse/transloco';

import { TextField } from '../../../../shared/components/ui/text-field/text-field';
import { PasswordField } from '../../../../shared/components/ui/password-field/password-field';
import { PrimaryButton } from '../../../../shared/components/ui/primary-button/primary-button';
import { Divider } from '../../../../shared/components/ui/divider/divider';
import { Checkbox } from '../../../../shared/components/ui/checkbox/checkbox';
import { SocialButton } from '../../../../shared/components/ui/social-button/social-button';

import { AuthApi } from '../../services/auth-api';
import { Token } from '../../../../core/services/token';
import { AuthState } from '../../services/auth-state';
import { GoogleAuthService } from '../../../../core/services/google-auth.service';
import { FacebookAuthService } from '../../../../core/services/facebook-auth.service';
import { CommonModule } from '@angular/common';
import { environment } from '../../../../../environments/environment';
import { RecaptchaService } from '../../../../core/services/recaptcha.service';

@Component({
  selector: 'app-login-form',
  standalone: true,
  imports: [
    CommonModule,
    ReactiveFormsModule,
    RouterLink,
    TranslocoPipe,
    TextField,
    PasswordField,
    PrimaryButton,
    Divider,
    Checkbox,
    SocialButton,
  ],
  templateUrl: './login-form.html',
  styleUrl: './login-form.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class LoginForm implements AfterViewInit, OnInit {

  @ViewChild('googleBtn') googleBtn!: ElementRef<HTMLDivElement>;

  private readonly router = inject(Router);
  private readonly route = inject(ActivatedRoute);
  private readonly fb = inject(FormBuilder);

  private readonly authApi = inject(AuthApi);
  private readonly token = inject(Token);
  private readonly googleAuth = inject(GoogleAuthService);
  private readonly facebookAuth = inject(FacebookAuthService);
private readonly recaptcha = inject(RecaptchaService);
  readonly authState = inject(AuthState);

  readonly errorMsg = signal<string | null>(null);
  readonly successMsg = signal<string | null>(null);
  readonly showResend = signal<boolean>(false);
  readonly resendSent = signal<boolean>(false);

  readonly form = this.fb.nonNullable.group({

    email: ['', [Validators.required, Validators.email]],

    password: ['', [Validators.required]],

    remember: [false],

  });


  ngOnInit(): void {
    if (this.route.snapshot.queryParamMap.get('registered') === '1') {
      this.successMsg.set('auth.emailVerification.registeredRedirect');
    }
  }


  ngAfterViewInit(): void {
    this.googleAuth.renderButton(this.googleBtn.nativeElement).subscribe({
      next: credential => this.handleGoogleCredential(credential),
      error: error => console.error(error),
    });
  }

  login(): void {
    if (this.form.invalid) {
      this.form.markAllAsTouched();
      return;
    }

    this.errorMsg.set(null);
    this.successMsg.set(null);
    this.showResend.set(false);
    this.resendSent.set(false);
    this.authState.startLoading();

    this.recaptcha
  .execute('login')
  .then((recaptchaToken) => {
    this.submitLogin(recaptchaToken);
  })
  .catch(() => {
    this.authState.stopLoading();
    this.errorMsg.set('auth.loginError');
  });

  }

  private submitLogin(recaptchaToken: string): void {
    this.authApi
      .login({
        email: this.form.controls.email.value,
        password: this.form.controls.password.value,
        recaptcha_token: recaptchaToken,
      })
      .pipe(finalize(() => this.authState.stopLoading()))
      .subscribe({
        next: (response) => {
          this.token.set(response.data.access_token);
          this.authState.setUser(response.data.user);

          // Dynamic Role-Based Redirection
          const role = response.data.user.role;
          this.redirectUserByRole(role);
        },
        error: (error) => {
          console.error(error);

          const validationErrors = error?.error?.errors;

          if (validationErrors?.recaptcha_token?.[0]) {
            this.errorMsg.set(validationErrors.recaptcha_token[0]);
          } else if (error?.status === 403) {
            this.errorMsg.set('auth.emailVerification.loginBlocked');
            this.showResend.set(true);
          } else {
            this.errorMsg.set('auth.loginError');
          }
        },
      });
  }

  resendVerificationEmail(): void {
    const email = this.form.controls.email.value;

    if (!email) {
      return;
    }

    this.resendSent.set(false);

    this.authApi.resendVerification({ email }).subscribe({
      next: () => this.resendSent.set(true),
      error: () => this.resendSent.set(true),
    });
  }

  private handleGoogleCredential(credential: string): void {
    this.errorMsg.set(null);
    this.authState.startLoading();

    this.authApi
      .googleLogin({ credential })
      .pipe(finalize(() => this.authState.stopLoading()))
      .subscribe({
        next: response => {
          this.token.set(response.data.access_token);
          this.authState.setUser(response.data.user);
          this.redirectUserByRole(response.data.user.role);
        },
        error: error => {
          console.error(error);
          this.errorMsg.set('auth.loginError');
        },
      });
  }

  loginWithFacebook(): void {
    this.errorMsg.set(null);

    this.facebookAuth.login().subscribe({
      next: accessToken => {
        this.authState.startLoading();

        this.authApi
          .facebookLogin({ access_token: accessToken })
          .pipe(finalize(() => this.authState.stopLoading()))
          .subscribe({
            next: response => {
              this.token.set(response.data.access_token);
              this.authState.setUser(response.data.user);
              this.redirectUserByRole(response.data.user.role);
            },
            error: error => {
              console.error(error);
              this.errorMsg.set('auth.facebook.cancelled');
            },
          });
      },
      error: error => {
        console.error(error);
        this.errorMsg.set('auth.facebook.cancelled');
      },
    });
  }

  private redirectUserByRole(role: string): void {
    const returnUrl = this.route.snapshot.queryParamMap.get('returnUrl');

    if (returnUrl) {
      this.router.navigateByUrl(returnUrl);
      return;
    }

    switch (role) {
      case 'admin':
        this.router.navigate(['/admin/dashboard']);
        break;
      case 'manager':
        this.router.navigate(['/app/teacher']);
        break;
      default:
        this.router.navigate(['/app/dashboard']);
        break;
    }
  }

}
