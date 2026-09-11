import { Injectable, PLATFORM_ID, inject } from '@angular/core';
import { isPlatformBrowser } from '@angular/common';

@Injectable({
  providedIn: 'root',
})
export class Token {

  private readonly TOKEN_KEY = 'quizatlas_access_token';
  private readonly platformId = inject(PLATFORM_ID);
  private readonly isBrowser = isPlatformBrowser(this.platformId);

  get(): string | null {

    if (!this.isBrowser) {
      return null;
    }

    return localStorage.getItem(this.TOKEN_KEY);

  }

  set(token: string): void {

    if (!this.isBrowser) {
      return;
    }

    localStorage.setItem(this.TOKEN_KEY, token);

  }

  remove(): void {

    if (!this.isBrowser) {
      return;
    }

    localStorage.removeItem(this.TOKEN_KEY);

  }

  has(): boolean {

    return this.get() !== null;

  }

  clear(): void {

    this.remove();

}

}
