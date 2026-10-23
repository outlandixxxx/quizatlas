import { TestBed } from '@angular/core/testing';
import { provideRouter } from '@angular/router';
import { signal } from '@angular/core';
import { AdminLayout } from './admin-layout';
import { AuthState } from '../../features/auth/services/auth-state';
import { AuthApi } from '../../features/auth/services/auth-api';
import { Token } from '../../core/services/token';
import { ThemeService } from '../../core/services/theme';
import { LanguageService } from '../../core/services/language';
import { User } from '../../core/models/user';

it('keeps the admin sidebar and English/LTR text when the saved site language is Arabic', async () => {
  await TestBed.configureTestingModule({
    imports: [AdminLayout],
    providers: [
      provideRouter([]),
      { provide: AuthApi, useValue: {} },
      { provide: Token, useValue: {} },
      { provide: ThemeService, useValue: { theme: signal('light') } },
      { provide: LanguageService, useValue: { language: signal('ar') } },
    ],
  }).compileComponents();
  TestBed.inject(AuthState).setUser({ id: 1, name: 'Admin', role: 'admin' } as User);
  document.documentElement.lang = 'ar';
  document.documentElement.dir = 'rtl';
  const fixture = TestBed.createComponent(AdminLayout);
  await fixture.whenStable();
  fixture.detectChanges();
  expect(document.documentElement.lang).toBe('en');
  expect(document.documentElement.dir).toBe('ltr');
  const root: HTMLElement = fixture.nativeElement;
  const labels = [...root.querySelectorAll('.nav-menu .label')].map((item) =>
    item.textContent?.trim(),
  );
  expect(labels).toEqual([
    'Dashboard',
    'Quizzes',
    'YouTube Videos',
    'Revision JSON',
    'Majors',
    'Subjects',
    'SOCIAL PACK',
    'FACTS',
    'Exam PDFs',
  ]);
  expect(root.querySelector('.nav-menu a')?.getAttribute('href')).toBe('/admin/dashboard');
  expect(root.textContent).toContain('Admin Panel');
  fixture.destroy();
  expect(document.documentElement.lang).toBe('ar');
  expect(document.documentElement.dir).toBe('rtl');
  document.documentElement.lang = 'en';
  document.documentElement.dir = 'ltr';
});
