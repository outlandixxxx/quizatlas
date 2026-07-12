import {
  Injectable,
  computed,
  signal,
} from '@angular/core';

import { User } from '../../../core/models/user';

@Injectable({
  providedIn: 'root',
})
export class AuthState {

  private readonly _user = signal<User | null>(null);

  readonly user = this._user.asReadonly();

  readonly authenticated = computed(
    () => this._user() !== null
  );

  readonly loading = signal(false);

  setUser(user: User): void {

    this._user.set(user);

  }

  clear(): void {

    this._user.set(null);

  }

  startLoading(): void {

    this.loading.set(true);

  }

  stopLoading(): void {

    this.loading.set(false);

  }

}