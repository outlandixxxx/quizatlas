import { ChangeDetectionStrategy, Component, inject } from '@angular/core';
import {
  FormBuilder,
  ReactiveFormsModule,
  Validators,
} from '@angular/forms';

import { TextField } from '../../../../shared/components/ui/text-field/text-field';
import { PasswordField } from '../../../../shared/components/ui/password-field/password-field';
import { PrimaryButton } from '../../../../shared/components/ui/primary-button/primary-button';
import { Divider } from '../../../../shared/components/ui/divider/divider';
import { Checkbox } from '../../../../shared/components/ui/checkbox/checkbox';
import { SocialButton } from '../../../../shared/components/ui/social-button/social-button';
import { AuthApi } from '../../services/auth-api';
import { Token } from '../../../../core/services/token';
import { AuthState } from '../../services/auth-state';
import { Router } from '@angular/router';
import { finalize } from 'rxjs';


@Component({
  selector: 'app-login-form',
  standalone: true,
  imports: [
    ReactiveFormsModule,
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
export class LoginForm {

  private readonly router = inject(Router);
  private readonly fb = inject(FormBuilder);
  

  readonly form = this.fb.nonNullable.group({

    email: ['', [Validators.required, Validators.email]],

    password: ['', [Validators.required]],

    remember: [false],

  });

  private readonly authApi = inject(AuthApi);

private readonly token = inject(Token);

readonly authState = inject(AuthState);

login(): void {

  if (this.form.invalid) {

    this.form.markAllAsTouched();

    return;

  }

  this.authState.startLoading();

  this.authApi
    .login({
      email: this.form.controls.email.value,
      password: this.form.controls.password.value,
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
          'Login failed.'
        );

      }

    });

}

}