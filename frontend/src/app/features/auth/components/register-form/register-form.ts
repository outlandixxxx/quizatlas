import { ChangeDetectionStrategy, Component, inject } from '@angular/core';
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
import { Divider } from '../../../../shared/components/ui/divider/divider';
import { Checkbox } from '../../../../shared/components/ui/checkbox/checkbox';
import { SocialButton } from '../../../../shared/components/ui/social-button/social-button';

import { AuthApi } from '../../services/auth-api';
import { AuthState } from '../../services/auth-state';
import { Token } from '../../../../core/services/token';

@Component({
  selector: 'app-register-form',
  standalone: true,
  imports: [
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
  templateUrl: './register-form.html',
  styleUrl: './register-form.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class RegisterForm {

  private readonly fb = inject(FormBuilder);
  private readonly router = inject(Router);
  private readonly authApi = inject(AuthApi);
  private readonly token = inject(Token);

  readonly authState = inject(AuthState);

  readonly form = this.fb.nonNullable.group(
    {
      name: ['', [Validators.required, Validators.minLength(3)]],

      email: ['', [Validators.required, Validators.email]],

      password: ['', [Validators.required, Validators.minLength(8)]],

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

    this.authState.startLoading();

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
      })
      .pipe(
        finalize(() => this.authState.stopLoading())
      )
      .subscribe({

        next: response => {

          this.token.set(response.data.access_token);

          this.authState.setUser(response.data.user);

          this.router.navigate(['/dashboard']);

        },

        error: error => {

          console.error(error);

          alert(
            error?.error?.message ??
            'Registration failed.'
          );

        },

      });

  }

}