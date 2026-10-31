import { TestBed } from '@angular/core/testing';
import { Router, provideRouter } from '@angular/router';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { of, throwError } from 'rxjs';
import fr from '../../../assets/i18n/fr.json';
import en from '../../../assets/i18n/en.json';
import ar from '../../../assets/i18n/ar.json';
import { ConcoursFollow } from './components/concours-follow';
import { FollowedConcours } from '../user/concours-following/followed-concours';
import { ConcoursFollowingApi } from '../../core/services/concours-following-api';
import { ConcoursBrowserPush } from '../../core/services/concours-browser-push';
import { AuthState } from '../auth/services/auth-state';
import { LanguageService } from '../../core/services/language';
import { emptyConcoursFollow } from '../../core/models/concours-follow';
import { concoursNotificationUrl } from '../../core/services/notification-api';
import { ConcoursNotificationText } from '../../shared/components/concours-notification-text';
import { API_BASE_URL } from '../../core/constants/api-base-url';

const course: any = {
  id: 7,
  slug: 'permanent',
  name_fr: 'Concours permanent',
  name_ar: 'مباراة دائمة',
  is_active: true,
  preparation_options: [
    {
      id: 11,
      concours_id: 7,
      name_fr: 'Grade A',
      name_en: 'Grade A',
      name_ar: 'الدرجة أ',
      parent_id: null,
      is_active: true,
      display_order: 0,
    },
  ],
};
const configuration = {
  delivery_enabled: true,
  reminder_days: [7, 1],
  push_available: false,
  vapid_public_key: null,
};
const user: any = {
  id: 2,
  name: 'Fixture user',
  username: 'fixture',
  role: 'user',
  email: 'fixture@example.test',
};
const translations = (language: string) =>
  TranslocoTestingModule.forRoot({
    langs: { fr, en, ar },
    preloadLangs: true,
    translocoConfig: { availableLangs: ['fr', 'en', 'ar'], defaultLang: language },
  });

describe('concours follow and dashboard controls', () => {
  const api = { show: vi.fn(), save: vi.fn(), list: vi.fn(), configuration: vi.fn() };
  const push = {
    supported: true,
    enabled: vi.fn(() => false),
    busy: vi.fn(() => false),
    enable: vi.fn(),
    disable: vi.fn(),
    syncFollow: vi.fn(),
  };
  beforeEach(() => {
    for (const mock of Object.values(api)) mock.mockReset();
    api.show.mockReturnValue(of({ data: emptyConcoursFollow() }));
    api.configuration.mockReturnValue(of({ data: configuration }));
    api.save.mockImplementation((_id: number, follow: any) =>
      of({ data: { ...follow, id: 1, version: follow.version + 1 } }),
    );
    api.list.mockReturnValue(
      of({ data: { items: [], meta: { current_page: 1, last_page: 1, per_page: 10, total: 0 } } }),
    );
    push.enable.mockReset();
    push.disable.mockReset();
    push.syncFollow.mockReset();
  });
  async function setup(language = 'fr', authenticated = true) {
    TestBed.configureTestingModule({
      imports: [translations(language)],
      providers: [
        provideRouter([]),
        { provide: ConcoursFollowingApi, useValue: api },
        { provide: ConcoursBrowserPush, useValue: push },
        { provide: LanguageService, useValue: { language: () => language } },
      ],
    });
    if (authenticated) TestBed.inject(AuthState).setUser(user);
    const fixture = TestBed.createComponent(ConcoursFollow);
    fixture.componentRef.setInput('concours', course);
    fixture.detectChanges();
    await fixture.whenStable();
    fixture.detectChanges();
    return { fixture, component: fixture.componentInstance };
  }
  for (const lang of ['fr', 'en', 'ar'])
    it(`renders translated following preferences in ${lang} without requesting browser permission`, async () => {
      const { fixture, component } = await setup(lang);
      component.toggle();
      fixture.detectChanges();
      expect(fixture.nativeElement.textContent).toContain(
        ({ fr, en, ar } as any)[lang].concoursFollowing.preferences,
      );
      expect(fixture.nativeElement.querySelector('select[multiple]')).not.toBeNull();
      expect(push.enable).not.toHaveBeenCalled();
      expect(api.save).toHaveBeenCalledWith(
        7,
        expect.objectContaining({ active: true, version: 0, browser_push: false }),
      );
    });
  it('keeps browsing anonymous and sends follow actions through login with the permanent return URL', async () => {
    const { component } = await setup('fr', false);
    const navigate = vi.spyOn(TestBed.inject(Router), 'navigate').mockResolvedValue(true);
    component.toggle();
    expect(navigate).toHaveBeenCalledWith(['/login'], {
      queryParams: { returnUrl: '/concours/permanent' },
    });
    expect(api.show).not.toHaveBeenCalled();
    expect(api.save).not.toHaveBeenCalled();
  });
  it('saves only explicitly chosen tracks, event types and reminder preferences', async () => {
    const { component } = await setup();
    component.toggle();
    component.preferences.preparation_option_ids = [11];
    component.preferences.updates = false;
    component.setDay(7, false);
    component.save();
    expect(api.save).toHaveBeenLastCalledWith(
      7,
      expect.objectContaining({ preparation_option_ids: [11], updates: false, reminder_days: [1] }),
    );
    component.toggle();
    expect(api.save).toHaveBeenLastCalledWith(7, expect.objectContaining({ active: false }));
    expect(push.syncFollow).toHaveBeenLastCalledWith(7, false);
  });
  it('preserves edits on conflicts and offers an explicit reload', async () => {
    const { component } = await setup();
    component.preferences.preparation_option_ids = [11];
    api.save.mockReturnValueOnce(throwError(() => ({ status: 409 })));
    component.toggle();
    expect(component.error()).toBe('concoursFollowing.conflict');
    expect(component.preferences.preparation_option_ids).toEqual([11]);
    component.reload();
    expect(api.show).toHaveBeenCalledTimes(2);
  });
  it('shows delivery-disabled and optional push states honestly and never requests unsupported push', async () => {
    api.configuration.mockReturnValue(of({ data: { ...configuration, delivery_enabled: false } }));
    const { fixture, component } = await setup();
    component.toggle();
    fixture.detectChanges();
    expect(fixture.nativeElement.textContent).toContain(fr.concoursFollowing.deliveryPending);
    await component.enableBrowser();
    expect(push.enable).not.toHaveBeenCalled();
  });
  it('shows a paginated followed-concours list and honest empty/error states', async () => {
    await setup();
    api.list.mockReturnValueOnce(
      of({
        data: {
          items: [
            { ...emptyConcoursFollow(), id: 1, active: true, concours: course, available: true },
          ],
          meta: { current_page: 1, last_page: 2, total: 11, per_page: 10 },
        },
      }),
    );
    const fixture = TestBed.createComponent(FollowedConcours);
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('a').getAttribute('href')).toBe(
      '/concours/permanent',
    );
    fixture.componentInstance.load(2);
    expect(api.list).toHaveBeenLastCalledWith(2);
    api.list.mockReturnValueOnce(throwError(() => ({ status: 503 })));
    fixture.componentInstance.load();
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('[role=alert]')).not.toBeNull();
  });
  for (const lang of ['fr', 'en', 'ar'])
    it(`renders a translated bell event and safe permanent link in ${lang}`, async () => {
      await setup(lang);
      const fixture = TestBed.createComponent(ConcoursNotificationText);
      const notification: any = {
        id: 1,
        type: 'concours_deadline',
        data: {
          concours_slug: 'permanent',
          title_fr: 'Original officiel',
          title_ar: 'عنوان رسمي',
          days_before: 7,
        },
      };
      fixture.componentRef.setInput('notification', notification);
      fixture.detectChanges();
      expect(fixture.nativeElement.textContent).toContain(
        ({ fr, en, ar } as any)[lang].concoursFollowing.events.deadline,
      );
      expect(fixture.nativeElement.textContent).toContain(
        lang === 'ar' ? 'عنوان رسمي' : 'Original officiel',
      );
      expect(concoursNotificationUrl(notification)).toBe(
        '/concours/permanent#official-announcement',
      );
      expect(
        concoursNotificationUrl({ ...notification, data: { concours_slug: 'https://evil.test' } }),
      ).toBeNull();
    });
});

describe('optional browser push permission lifecycle', () => {
  const api = { registerPush: vi.fn(), disablePush: vi.fn() };
  const native = { permission: 'default', requestPermission: vi.fn() };
  const subscription = {
    toJSON: () => ({
      endpoint: 'https://fcm.googleapis.com/fcm/send/fixture',
      keys: { p256dh: 'fixture', auth: 'fixture' },
    }),
    unsubscribe: vi.fn().mockResolvedValue(true),
  };
  const registration = {
    active: { postMessage: vi.fn() },
    pushManager: { getSubscription: vi.fn(), subscribe: vi.fn() },
  };
  beforeEach(() => {
    localStorage.clear();
    native.permission = 'default';
    native.requestPermission.mockReset().mockImplementation(async () => {
      native.permission = 'granted';
      return 'granted';
    });
    registration.active.postMessage
      .mockClear()
      .mockImplementation((_message: any, ports?: MessagePort[]) =>
        ports?.[0]?.postMessage({ ok: true }),
      );
    registration.pushManager.getSubscription.mockReset().mockResolvedValue(null);
    registration.pushManager.subscribe.mockReset().mockResolvedValue(subscription);
    subscription.unsubscribe.mockClear();
    api.registerPush
      .mockReset()
      .mockReturnValue(of({ data: { id: 5, user_id: 2, follow_ids: [7] } }));
    api.disablePush.mockReset().mockReturnValue(of({ data: { disabled: true } }));
    vi.stubGlobal('Notification', native);
    vi.stubGlobal('PushManager', class {});
    Object.defineProperty(window, 'isSecureContext', { configurable: true, value: true });
    Object.defineProperty(navigator, 'serviceWorker', {
      configurable: true,
      value: {
        register: vi.fn().mockResolvedValue(registration),
        ready: Promise.resolve(registration),
        getRegistration: vi.fn().mockResolvedValue(registration),
      },
    });
    TestBed.configureTestingModule({
      providers: [
        { provide: ConcoursFollowingApi, useValue: api },
        { provide: API_BASE_URL, useValue: 'https://api.maroquiz.com/api/v1' },
      ],
    });
    TestBed.inject(AuthState).setUser(user);
  });
  afterEach(() => {
    vi.unstubAllGlobals();
    localStorage.clear();
  });
  it('never prompts on initialization or unsupported browsers', async () => {
    const service = TestBed.inject(ConcoursBrowserPush);
    expect(native.requestPermission).not.toHaveBeenCalled();
    expect(api.registerPush).not.toHaveBeenCalled();
    Object.defineProperty(service, 'supported', { value: false });
    expect(await service.enable('AAAA', 'fr')).toBe(false);
    expect(native.requestPermission).not.toHaveBeenCalled();
  });
  it('requests permission only on explicit enable and registers an encrypted push subscription', async () => {
    const service = TestBed.inject(ConcoursBrowserPush);
    expect(service.supported).toBe(true);
    expect(await service.enable('BAAA', 'ar')).toBe(true);
    expect(native.requestPermission).toHaveBeenCalledOnce();
    expect(registration.pushManager.subscribe).toHaveBeenCalledWith(
      expect.objectContaining({ userVisibleOnly: true }),
    );
    expect(api.registerPush).toHaveBeenCalledWith(
      expect.objectContaining({ permission: 'granted', language: 'ar' }),
    );
    expect(registration.active.postMessage).toHaveBeenCalledWith(
      expect.objectContaining({ type: 'consent', enabled: true, follow_ids: [7] }),
    );
  });
  it('does not subscribe after denied permission', async () => {
    native.requestPermission.mockResolvedValue('denied');
    const service = TestBed.inject(ConcoursBrowserPush);
    expect(await service.enable('BAAA', 'en')).toBe(false);
    expect(api.registerPush).not.toHaveBeenCalled();
    expect(registration.pushManager.subscribe).not.toHaveBeenCalled();
  });
  it('disables local display, the native endpoint and server delivery when permission is withdrawn', async () => {
    const service = TestBed.inject(ConcoursBrowserPush);
    await service.enable('BAAA', 'fr');
    registration.pushManager.getSubscription.mockResolvedValue(subscription);
    native.permission = 'denied';
    document.dispatchEvent(new Event('visibilitychange'));
    expect(service.enabled()).toBe(false);
    await vi.waitFor(() => expect(api.disablePush).toHaveBeenCalledWith(5));
    expect(subscription.unsubscribe).toHaveBeenCalled();
    expect(registration.active.postMessage).toHaveBeenCalledWith(
      { type: 'consent', enabled: false },
      expect.any(Array),
    );
  });
  it('unsubscribes after failed server registration and never reports success', async () => {
    api.registerPush.mockReturnValueOnce(throwError(() => ({ status: 503 })));
    const service = TestBed.inject(ConcoursBrowserPush);
    await expect(service.enable('BAAA', 'fr')).rejects.toBeDefined();
    expect(subscription.unsubscribe).toHaveBeenCalled();
    expect(service.enabled()).toBe(false);
  });
});
