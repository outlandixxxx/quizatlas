import { ChangeDetectionStrategy, Component, inject, signal } from '@angular/core';
import {
  FormBuilder,
  ReactiveFormsModule,
  Validators,
} from '@angular/forms';
import { RouterLink } from '@angular/router';
import { finalize } from 'rxjs';

import { TranslocoPipe } from '@jsverse/transloco';

import { TextField } from '../../../../shared/components/ui/text-field/text-field';
import { PrimaryButton } from '../../../../shared/components/ui/primary-button/primary-button';

import { AuthApi } from '../../services/auth-api';
import { AuthState } from '../../services/auth-state';

@Component({
  selector: 'app-forgot-password-form',
  standalone: true,
  imports: [
    ReactiveFormsModule,
    RouterLink,
    TranslocoPipe,
    TextField,
    PrimaryButton,
  ],
  templateUrl: './forgot-password-form.html',
  styleUrl: './forgot-password-form.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class ForgotPasswordForm {

  private readonly fb = inject(FormBuilder);

  private readonly authApi = inject(AuthApi);

  readonly authState = inject(AuthState);

  readonly emailSent = signal(false);

  readonly form = this.fb.nonNullable.group({

    email: ['', [
      Validators.required,
      Validators.email,
    ]],

  });

  submit(): void {

    if (this.form.invalid) {

      this.form.markAllAsTouched();

      return;

    }

    this.authState.startLoading();

    this.authApi
      .forgotPassword({
        email: this.form.controls.email.value,
      })
      .pipe(
        finalize(() => this.authState.stopLoading())
      )
      .subscribe({

        next: () => {

          this.emailSent.set(true);

        },

        error: error => {

          console.error(error);

          alert(

            error?.error?.message ??

            'Unable to send reset link.'

          );

        },

      });

  }

}