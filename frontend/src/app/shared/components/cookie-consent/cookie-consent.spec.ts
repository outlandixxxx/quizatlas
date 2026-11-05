import { signal } from '@angular/core';
import { ComponentFixture, TestBed } from '@angular/core/testing';
import { provideRouter } from '@angular/router';
import { TranslocoService, TranslocoTestingModule } from '@jsverse/transloco';
import en from '../../../../assets/i18n/en.json';
import fr from '../../../../assets/i18n/fr.json';
import ar from '../../../../assets/i18n/ar.json';
import { GoogleConsent, GoogleTracking } from '../../../core/services/google-tracking';
import { CookieConsent } from './cookie-consent';

describe('cookie choices', () => {
  const dialogMethods = ['showModal', 'close'] as const;
  const originalDialogMethods = dialogMethods.map(method => Object.getOwnPropertyDescriptor(HTMLDialogElement.prototype, method));
  const tracking = { ready: signal(true), panelOpen: signal(true), consent: signal<GoogleConsent | null>(null), choose: vi.fn() };
  beforeEach(() => {
    tracking.ready.set(true);
    tracking.panelOpen.set(true);
    tracking.consent.set(null);
    tracking.choose.mockReset().mockImplementation((analytics, advertising) => {
      tracking.consent.set({ version: 1, analytics, advertising, expiresAt: Date.now() + 60000 });
      tracking.panelOpen.set(false);
    });
    TestBed.configureTestingModule({ imports: [CookieConsent, TranslocoTestingModule.forRoot({
      langs: { en, fr, ar }, preloadLangs: true,
      translocoConfig: { availableLangs: ['en', 'fr', 'ar'], defaultLang: 'en' },
    })], providers: [provideRouter([]), { provide: GoogleTracking, useValue: tracking }] });
    // JSDOM does not implement native dialog focus containment; Chromium covers it.
    for (const method of dialogMethods) {
      Object.defineProperty(HTMLDialogElement.prototype, method, { configurable: true, value: function (this: HTMLDialogElement) {
        if (method === 'showModal') this.setAttribute('open', '');
        else this.removeAttribute('open');
      } });
    }
  });
  afterEach(() => {
    TestBed.resetTestingModule();
    dialogMethods.forEach((method, i) => {
      if (originalDialogMethods[i]) Object.defineProperty(HTMLDialogElement.prototype, method, originalDialogMethods[i]!);
      else Reflect.deleteProperty(HTMLDialogElement.prototype, method);
    });
  });

  const mount = async () => {
    const fixture = TestBed.createComponent(CookieConsent);
    fixture.detectChanges();
    await fixture.whenStable();
    return fixture;
  };
  const open = async (fixture: ComponentFixture<CookieConsent>) => {
    fixture.nativeElement.querySelector('.cookie-customize, .cookie-settings').click();
    await fixture.whenStable();
    return fixture.nativeElement.querySelector('dialog') as HTMLDialogElement;
  };

  it.each([['en', en], ['fr', fr], ['ar', ar]] as const)('shows a compact translated banner before preferences in %s', async (language, dictionary) => {
    TestBed.inject(TranslocoService).setActiveLang(language);
    const fixture = await mount();
    const banner = fixture.nativeElement.querySelector('[role="region"]');
    expect(banner.textContent).toContain(dictionary.cookieConsent.title);
    expect(banner.textContent).toContain(dictionary.cookieConsent.customize);
    expect(banner.getAttribute('dir')).toBe(language === 'ar' ? 'rtl' : 'ltr');
    expect(banner.querySelector('a').getAttribute('href')).toBe('/privacy');
    expect(banner.querySelectorAll('button')).toHaveLength(3);
    expect(fixture.nativeElement.querySelector('dialog, input')).toBeNull();
    expect(tracking.choose).not.toHaveBeenCalled();

    const dialog = await open(fixture);
    expect(dialog.getAttribute('dir')).toBe(language === 'ar' ? 'rtl' : 'ltr');
    expect(dialog.textContent).toContain(dictionary.cookieConsent.preferencesTitle);
    expect(dialog.querySelectorAll('input')).toHaveLength(2);
    for (const input of dialog.querySelectorAll('input')) {
      expect(input.checked).toBe(false);
      expect(input.closest('label')?.htmlFor).toBe(input.id);
      expect(dialog.querySelector(`#${input.getAttribute('aria-labelledby')}`)?.textContent).toBeTruthy();
      expect(dialog.querySelector(`#${input.getAttribute('aria-describedby')}`)?.textContent).toBeTruthy();
    }
    expect(dialog.getAttribute('aria-labelledby')).toBe('cookie-preferences-heading');
    expect(dialog.getAttribute('aria-describedby')).toBe('cookie-preferences-description');
    expect(dialog.open).toBe(true);
    expect(document.activeElement).toBe(dialog.querySelector('h2'));
    expect(tracking.choose).not.toHaveBeenCalled();
  });

  it.each([['reject', false], ['accept', true]] as const)('%s all explicitly chooses both categories from the banner', async (action, value) => {
    const fixture = await mount();
    fixture.nativeElement.querySelector(`.cookie-${action}`).click();
    await fixture.whenStable();
    expect(tracking.choose).toHaveBeenCalledExactlyOnceWith(value, value);
    expect(fixture.nativeElement.querySelector('.cookie-banner, dialog')).toBeNull();
    expect(document.activeElement).toBe(fixture.nativeElement.querySelector('.cookie-settings'));
  });

  it.each([[true, false], [false, true], [true, true], [false, false]])('saves independent explicit choices: analytics=%s advertising=%s', async (analytics, advertising) => {
    const fixture = await mount();
    const dialog = await open(fixture);
    if (analytics) dialog.querySelector<HTMLLabelElement>('label[for="cookie-analytics"]')!.click();
    if (advertising) dialog.querySelector<HTMLLabelElement>('label[for="cookie-advertising"]')!.click();
    expect(tracking.choose).not.toHaveBeenCalled();
    dialog.querySelector<HTMLButtonElement>('.cookie-save')!.click();
    await fixture.whenStable();
    expect(tracking.choose).toHaveBeenCalledExactlyOnceWith(analytics, advertising);
    expect(document.activeElement).toBe(fixture.nativeElement.querySelector('.cookie-settings'));
  });

  it.each([['reject', false], ['accept', true]] as const)('%s optional ignores unsaved draft choices', async (action, value) => {
    const fixture = await mount();
    const dialog = await open(fixture);
    dialog.querySelector<HTMLInputElement>('input')!.click();
    dialog.querySelector<HTMLButtonElement>(`.cookie-${action}`)!.click();
    await fixture.whenStable();
    expect(tracking.choose).toHaveBeenCalledExactlyOnceWith(value, value);
    expect(fixture.nativeElement.querySelector('dialog')).toBeNull();
  });

  it('opens and closes preferences immediately without waiting for navigation or a service change', async () => {
    const fixture = await mount();
    fixture.nativeElement.querySelector('.cookie-customize').click();
    const dialog = fixture.nativeElement.querySelector('dialog') as HTMLDialogElement;
    expect(dialog.open).toBe(true);
    expect(document.activeElement).toBe(dialog.querySelector('h2'));
    dialog.querySelector<HTMLButtonElement>('.cookie-close')!.click();
    expect(fixture.nativeElement.querySelector('dialog')).toBeNull();
    expect(document.activeElement).toBe(fixture.nativeElement.querySelector('.cookie-customize'));
    expect(tracking.choose).not.toHaveBeenCalled();
  });

  it('closes without granting consent, returns focus and discards unsaved choices', async () => {
    const fixture = await mount();
    let dialog = await open(fixture);
    dialog.querySelector<HTMLInputElement>('input')!.click();
    dialog.querySelector<HTMLButtonElement>('.cookie-close')!.click();
    await fixture.whenStable();
    expect(tracking.choose).not.toHaveBeenCalled();
    expect(tracking.consent()).toBeNull();
    expect(document.activeElement).toBe(fixture.nativeElement.querySelector('.cookie-customize'));
    dialog = await open(fixture);
    expect(dialog.querySelector<HTMLInputElement>('input')!.checked).toBe(false);
  });

  it.each([[true, false], [false, true]])('reopens saved preferences and Escape leaves them unchanged: %s/%s', async (analytics, advertising) => {
    tracking.panelOpen.set(false);
    tracking.consent.set({ version: 1, analytics, advertising, expiresAt: Date.now() + 60000 });
    const fixture = await mount();
    const dialog = await open(fixture);
    const inputs = dialog.querySelectorAll('input');
    expect(inputs[0].checked).toBe(analytics);
    expect(inputs[1].checked).toBe(advertising);
    inputs[0].click();
    const cancel = new Event('cancel', { cancelable: true });
    dialog.dispatchEvent(cancel);
    await fixture.whenStable();
    expect(cancel.defaultPrevented).toBe(true);
    expect(tracking.choose).not.toHaveBeenCalled();
    expect(tracking.consent()).toMatchObject({ analytics, advertising });
    expect(document.activeElement).toBe(fixture.nativeElement.querySelector('.cookie-settings'));
  });

  it('withdraws both saved categories through the existing service', async () => {
    tracking.panelOpen.set(false);
    tracking.consent.set({ version: 1, analytics: true, advertising: true, expiresAt: Date.now() + 60000 });
    const fixture = await mount();
    const dialog = await open(fixture);
    expect(dialog.querySelector('.cookie-note')?.textContent).toContain(en.cookieConsent.reloadNotice);
    dialog.querySelector<HTMLButtonElement>('.cookie-reject')!.click();
    await fixture.whenStable();
    expect(tracking.choose).toHaveBeenCalledExactlyOnceWith(false, false);
    expect(tracking.consent()).toMatchObject({ analytics: false, advertising: false });
  });

  it('closes preferences if the existing service receives a choice from another tab', async () => {
    const fixture = await mount();
    await open(fixture);
    tracking.consent.set({ version: 1, analytics: false, advertising: false, expiresAt: Date.now() + 60000 });
    tracking.panelOpen.set(false);
    await fixture.whenStable();
    expect(fixture.nativeElement.querySelector('dialog')).toBeNull();
    expect(document.activeElement).toBe(fixture.nativeElement.querySelector('.cookie-settings'));
    expect(tracking.choose).not.toHaveBeenCalled();
  });

  it('renders no consent controls before browser initialization, including SSR', async () => {
    tracking.ready.set(false);
    const fixture = await mount();
    expect(fixture.nativeElement.querySelector('button, input, section, dialog')).toBeNull();
  });
});
