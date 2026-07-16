import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from '../../../core/services/http';

import { ApiResponse } from '../../../core/models/api-response';
import { AuthResponse } from '../../../core/models/auth-response';

@Injectable({
  providedIn: 'root',
})
export class AuthApi {

  private readonly http = inject(Http);

  login(data: {
    email: string;
    password: string;
  }): Observable<ApiResponse<AuthResponse>> {

    return this.http.post<ApiResponse<AuthResponse>>(
      '/auth/login',
      data
    );

  }

  register(data: unknown): Observable<ApiResponse<AuthResponse>> {

    return this.http.post<ApiResponse<AuthResponse>>(
      '/auth/register',
      data
    );

  }


  forgotPassword(data: {
  email: string;
}): Observable<ApiResponse<null>> {

  return this.http.post<ApiResponse<null>>(
    '/auth/forgot-password',
    data
  );

}

resetPassword(data: {
  token: string;
  email: string;
  password: string;
  password_confirmation: string;
}) {

  return this.http.post<ApiResponse<null>>(
    '/auth/reset-password',
    data
  );

}

  me(): Observable<ApiResponse<AuthResponse['user']>> {

    return this.http.get<ApiResponse<AuthResponse['user']>>(
      '/auth/me'
    );

  }

  logout() {

    return this.http.post(
      '/auth/logout',
      {}
    );

  }

  refresh() {

    return this.http.post<ApiResponse<AuthResponse>>(
      '/auth/refresh',
      {}
    );

  }

}