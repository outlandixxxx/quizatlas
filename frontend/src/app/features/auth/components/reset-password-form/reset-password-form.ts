import { ChangeDetectionStrategy, Component, inject, signal } from '@angular/core';
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

import { AuthApi } from '../../services/auth-api';
import { AuthState } from '../../services/auth-state';

@Component({
  selector: 'app-reset-password-form',
  standalone: true,
  imports: [
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

  readonly form = this.fb.nonNullable.group({

    email: [
      this.route.snapshot.queryParamMap.get('email') ?? '',
      [
        Validators.required,
        Validators.email,
      ],
    ],

    token: [
      this.route.snapshot.queryParamMap.get('token') ?? '',
      Validators.required,
    ],

    password: [
      '',
      [
        Validators.required,
        Validators.minLength(8),
      ],
    ],

    password_confirmation: [
      '',
      Validators.required,
    ],

  });

  submit(): void {

    if (this.form.invalid) {

      this.form.markAllAsTouched();

      return;

    }

    this.authState.startLoading();

    this.authApi
      .resetPassword(this.form.getRawValue())
      .pipe(
        finalize(() => this.authState.stopLoading())
      )
      .subscribe({

        next: () => {

          this.passwordChanged.set(true);

        },

        error: error => {

          console.error(error);

          alert(

            error?.error?.message ??

            'Unable to reset password.'

          );

        },

      });

  }

  login(): void {

    this.router.navigate(['/login']);

  }

}