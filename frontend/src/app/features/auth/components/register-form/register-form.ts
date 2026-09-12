import { ChangeDetectionStrategy, Component, inject, signal } from '@angular/core';
import {
  FormBuilder,
  ReactiveFormsModule,
  Validators,
  AbstractControl,
  ValidationErrors,
} from '@angular/forms';

import { Router, RouterLink } from '@angular/router';
import { finalize } from 'rxjs';
import { TranslocoPipe } from '@jsverse/transloco';

import { TextField } from '../../../../shared/components/ui/text-field/text-field';
import { PasswordField } from '../../../../shared/components/ui/password-field/password-field';
import { PrimaryButton } from '../../../../shared/components/ui/primary-button/primary-button';
import { Checkbox } from '../../../../shared/components/ui/checkbox/checkbox';

import { AuthApi } from '../../services/auth-api';
import { AuthState } from '../../services/auth-state';
import { Token } from '../../../../core/services/token';
import { CommonModule } from '@angular/common';
import { environment } from '../../../../../environments/environment';
import { RecaptchaService } from '../../../../core/services/recaptcha.service';

@Component({
  selector: 'app-register-form',
  standalone: true,
  imports: [
    CommonModule,
    ReactiveFormsModule,
    RouterLink,
    TranslocoPipe,
    TextField,
    PasswordField,
    PrimaryButton,
    Checkbox
],
  templateUrl: './register-form.html',
  styleUrl: './register-form.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class RegisterForm {

  private readonly fb = inject(FormBuilder);
  private readonly router = inject(Router);
  private readonly authApi = inject(AuthApi);
  private readonly token = inject(Token);
private readonly recaptcha = inject(RecaptchaService);
  readonly authState = inject(AuthState);

  readonly errorMsg = signal<string | null>(null);
  readonly successMsg = signal<string | null>(null);

  readonly form = this.fb.nonNullable.group(
    {
      name: ['', [Validators.required, Validators.minLength(3)]],
      email: ['', [Validators.required, Validators.email]],
      password: [
        '',
        [
          Validators.required,
          Validators.minLength(12),
          Validators.pattern(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).+$/),
        ],
      ],
      password_confirmation: ['', Validators.required],
      terms: [false, Validators.requiredTrue],
    },
    {
      validators: this.passwordsMatch,
    }
  );

  private passwordsMatch(
    control: AbstractControl
  ): ValidationErrors | null {
    const password = control.get('password')?.value;
    const confirmation = control.get('password_confirmation')?.value;

    return password === confirmation
      ? null
      : { passwordMismatch: true };
  }

  register(): void {
    if (this.form.invalid) {
      this.form.markAllAsTouched();
      return;
    }

    this.errorMsg.set(null);
    this.successMsg.set(null);
    this.authState.startLoading();

    this.recaptcha
  .execute('register')
  .then((recaptchaToken) => {
    this.submitRegistration(recaptchaToken);
  })
  .catch(() => {
    this.authState.stopLoading();
    this.errorMsg.set('Verification failed. Please try again.');
  });
  }

  private submitRegistration(recaptchaToken: string): void {
    const {
      name,
      email,
      password,
      password_confirmation,
    } = this.form.getRawValue();

    this.authApi
      .register({
        name,
        email,
        password,
        password_confirmation,
        recaptcha_token: recaptchaToken,
      })
      .pipe(finalize(() => this.authState.stopLoading()))
      .subscribe({
        next: response => {
          this.successMsg.set(
            response.message ?? 'Registration successful. Please check your email to verify your account.'
          );
          this.form.reset();

          setTimeout(() => {
            this.router.navigate(['/login'], {
              queryParams: { registered: '1' },
            });
          }, 3000);
        },
        error: error => {
          console.error(error);

          const validationErrors = error?.error?.errors;

          if (validationErrors?.recaptcha_token?.[0]) {
            this.errorMsg.set(validationErrors.recaptcha_token[0]);
          } else if (validationErrors?.password?.[0]) {
            this.errorMsg.set(validationErrors.password[0]);
          } else if (validationErrors?.email?.[0]) {
            this.errorMsg.set(validationErrors.email[0]);
          } else if (validationErrors?.name?.[0]) {
            this.errorMsg.set(validationErrors.name[0]);
          } else if (error?.error?.message) {
            this.errorMsg.set(error.error.message);
          } else {
            this.errorMsg.set('auth.register.error');
          }
        },
      });
  }
}
