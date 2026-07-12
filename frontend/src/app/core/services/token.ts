import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root',
})
export class Token {

  private readonly TOKEN_KEY = 'quizatlas_access_token';

  get(): string | null {

    return localStorage.getItem(this.TOKEN_KEY);

  }

  set(token: string): void {

    localStorage.setItem(this.TOKEN_KEY, token);

  }

  remove(): void {

    localStorage.removeItem(this.TOKEN_KEY);

  }

  has(): boolean {

    return this.get() !== null;

  }

  clear(): void {

    this.remove();

}

}