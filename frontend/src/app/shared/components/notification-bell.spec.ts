import { TestBed } from '@angular/core/testing';
import { HttpTestingController } from '@angular/common/http/testing';
import { TranslocoService } from '@jsverse/transloco';
import { componentTestConfig } from '../../../testing/component-test';
import { PublicHeader } from '../../layouts/public-layout/components/public-header/public-header';
import { UserLayout } from '../../layouts/user-layout/user-layout';
import { AuthState } from '../../features/auth/services/auth-state';

describe('legacy chat alerts in the existing notification bells', () => {
  for (const [name, component] of [
    ['public', PublicHeader],
    ['dashboard', UserLayout],
  ] as const) {
    for (const [language, expected] of [
      ['fr', 'vous a envoyé un message'],
      ['en', 'sent you a message'],
      ['ar', 'أرسل لك رسالة'],
    ]) {
      it(`renders the ${name} bell chat alert in ${language} alongside Concours alerts`, async () => {
        await TestBed.configureTestingModule(componentTestConfig(component)).compileComponents();
        TestBed.inject(AuthState).setUser({
          id: 7,
          name: 'Fixture recipient',
          role: 'user',
        } as any);
        const fixture = TestBed.createComponent<PublicHeader | UserLayout>(component);
        TestBed.inject(TranslocoService).setActiveLang(language);
        fixture.detectChanges();
        const http = TestBed.inject(HttpTestingController);
        for (const request of http.match(() => true)) {
          request.flush({
            data: request.request.url.includes('/exam-pdfs')
              ? { items: [], meta: { total: 0 } }
              : { count: 0 },
          });
        }
        fixture.componentInstance.toggleNotifMenu();
        http
          .expectOne((request) => request.url.endsWith('/notifications'))
          .flush({
            data: [
              {
                id: 1,
                type: 'new_message',
                data: { from_user_name: 'Fixture sender' },
                read_at: null,
                created_at: new Date().toISOString(),
              },
              {
                id: 2,
                type: 'concours_published',
                data: {
                  concours_slug: 'permanent',
                  title_fr: 'Original official notice',
                  title_ar: 'إعلان رسمي',
                },
                read_at: null,
                created_at: new Date().toISOString(),
              },
            ],
          });
        await fixture.whenStable();
        fixture.detectChanges();
        const text = fixture.nativeElement.querySelector('.notif-dropdown').textContent;
        expect(text).toContain('Fixture sender');
        expect(text).toContain(expected);
        expect(text).not.toContain('notifications.sentMessage');
        expect(
          fixture.nativeElement.querySelector('app-concours-notification-text'),
        ).not.toBeNull();
        for (const request of http.match((request) =>
          request.url.endsWith('/notifications/unread-count'),
        )) {
          request.flush({ data: { count: 2 } });
        }
        fixture.destroy();
        http.verify();
      });
    }
  }
});
