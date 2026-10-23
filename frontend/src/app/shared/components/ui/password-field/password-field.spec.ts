import { TestBed } from '@angular/core/testing';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { PasswordField } from './password-field';

describe('Password field', () => {
  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [
        PasswordField,
        TranslocoTestingModule.forRoot({
          langs: {
            en: {
              auth: { design: { show_password: 'Show password', hide_password: 'Hide password' } },
            },
          },
          preloadLangs: true,
          translocoConfig: { availableLangs: ['en'], defaultLang: 'en' },
        }),
      ],
    }).compileComponents();
  });
  it('keeps an accessible, non-submitting visibility toggle', async () => {
    const fixture = TestBed.createComponent(PasswordField);
    await fixture.whenStable();
    fixture.detectChanges();
    const root: HTMLElement = fixture.nativeElement;
    expect(root.querySelector('input')?.getAttribute('aria-label')).toBe('Password');
    const toggle = root.querySelector('button')!;
    expect(toggle.type).toBe('button');
    expect(toggle.getAttribute('aria-label')).toBe('Show password');
    toggle.click();
    fixture.detectChanges();
    expect(root.querySelector('input')?.type).toBe('text');
    expect(toggle.getAttribute('aria-pressed')).toBe('true');
    expect(toggle.getAttribute('aria-label')).toBe('Hide password');
  });
  it('preserves the form-control value and disabled state', async () => {
    const fixture = TestBed.createComponent(PasswordField);
    await fixture.whenStable();
    fixture.componentInstance.writeValue('test-password');
    fixture.componentInstance.setDisabledState(true);
    fixture.detectChanges();
    await fixture.whenStable();
    const input: HTMLInputElement = fixture.nativeElement.querySelector('input');
    expect(input.value).toBe('test-password');
    expect(input.disabled).toBe(true);
  });
});
