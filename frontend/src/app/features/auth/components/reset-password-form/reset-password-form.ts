import { ChangeDetectionStrategy, Component, inject, signal } from '@angular/core';
import {
  FormBuilder,
  ReactiveFormsModule,
  Validators,
  AbstractControl,
  ValidationErrors,
} from '@angular/forms';

import { ActivatedRoute, Router, RouterLink } from '@angular/router';

import { finalize } from 'rxjs';

import { TranslocoPipe } from '@jsverse/transloco';

import { TextField } from '../../../../shared/components/ui/text-field/text-field';
import { PasswordField } from '../../../../shared/components/ui/password-field/password-field';
import { PrimaryButton } from '../../../../shared/components/ui/primary-button/primary-button';

import { AuthApi } from '../../services/auth-api';
import { AuthState } from '../../services/auth-state';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-reset-password-form',
  standalone: true,
  imports: [
    CommonModule,
    ReactiveFormsModule,
    RouterLink,
    TranslocoPipe,
    TextField,
    PasswordField,
    PrimaryButton,
  ],
  templateUrl: './reset-password-form.html',
  styleUrl: './reset-password-form.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class ResetPasswordForm {

  private readonly fb = inject(FormBuilder);
  private readonly authApi = inject(AuthApi);
  readonly authState = inject(AuthState);
  private readonly route = inject(ActivatedRoute);
  private readonly router = inject(Router);

  readonly passwordChanged = signal(false);
  readonly errorMsg = signal<string | null>(null);

  readonly hasValidLink =
    !!this.route.snapshot.queryParamMap.get('email') &&
    !!this.route.snapshot.queryParamMap.get('token');

  readonly form = this.fb.nonNullable.group(
    {
      email: [
        this.route.snapshot.queryParamMap.get('email') ?? '',
        [Validators.required, Validators.email],
      ],

      token: [
        this.route.snapshot.queryParamMap.get('token') ?? '',
        Validators.required,
      ],

      password: [
        '',
        [
          Validators.required,
          Validators.minLength(12),
          Validators.pattern(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).+$/),
        ],
      ],

      password_confirmation: [
        '',
        Validators.required,
      ],
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

  submit(): void {

    if (this.form.invalid) {
      this.form.markAllAsTouched();
      return;
    }

    this.errorMsg.set(null);
    this.authState.startLoading();

    this.authApi
      .resetPassword(this.form.getRawValue())
      .pipe(finalize(() => this.authState.stopLoading()))
      .subscribe({

        next: () => {
          this.passwordChanged.set(true);
        },

        error: error => {
          console.error(error);
          this.errorMsg.set('auth.resetPassword.error');
        },

      });

  }

  login(): void {
    this.router.navigate(['/login']);
  }

}