import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TestBed } from '@angular/core/testing';
import { RouterLink, provideRouter } from '@angular/router';
import { TranslocoModule, TranslocoService, TranslocoTestingModule } from '@jsverse/transloco';
import { Landing } from './landing';
import { Seo } from '../../../../core/services/seo';
import en from '../../../../../assets/i18n/en.json';
import fr from '../../../../../assets/i18n/fr.json';
import ar from '../../../../../assets/i18n/ar.json';

describe('Landing hero question preview', () => {
  const seo = {
    setTitle: vi.fn(),
    setDescription: vi.fn(),
    setSocialTags: vi.fn(),
    setJsonLd: vi.fn(),
  };

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [
        Landing,
        TranslocoTestingModule.forRoot({
          langs: { en, fr, ar },
          preloadLangs: true,
          translocoConfig: {
            availableLangs: ['en', 'fr', 'ar'],
            defaultLang: 'en',
          },
        }),
      ],
      providers: [provideRouter([]), { provide: Seo, useValue: seo }],
    })
      .overrideComponent(Landing, {
        set: {
          imports: [CommonModule, RouterLink, TranslocoModule],
          schemas: [CUSTOM_ELEMENTS_SCHEMA],
        },
      })
      .compileComponents();
  });

  it.each([
    ['en', en],
    ['fr', fr],
    ['ar', ar],
  ] as const)(
    'renders the example question and four answers in %s without requiring an API',
    async (lang, translations) => {
      TestBed.inject(TranslocoService).setActiveLang(lang);
      const fixture = TestBed.createComponent(Landing);
      await fixture.whenStable();
      fixture.detectChanges();

      const card: HTMLElement = fixture.nativeElement.querySelector('.quiz-card');
      expect(card.querySelector('h2')?.textContent).toBe(
        translations.landing.redesign.example_question,
      );
      expect(card.getAttribute('aria-labelledby')).toBe(card.querySelector('h2')?.id);
      expect(card.getAttribute('aria-describedby')).toBe(
        card.querySelector('.example-caption')?.id,
      );
      expect(card.querySelectorAll('.answer')).toHaveLength(4);
      expect(card.querySelector('.answer.active')?.textContent).toContain(
        translations.landing.redesign.answer_B,
      );
      expect(card.querySelector('.example-caption')?.textContent).toBe(
        translations.landing.redesign.quiz_example,
      );
      expect(fixture.nativeElement.querySelector('.orbit').getAttribute('aria-hidden')).toBe(
        'true',
      );
      expect(seo.setJsonLd).toHaveBeenCalled();
    },
  );

  it('renders translated text as text rather than injecting HTML', async () => {
    const payload = '<img src=x onerror="alert(1)">';
    TestBed.inject(TranslocoService).setTranslationKey(
      'landing.redesign.example_question',
      payload,
      { lang: 'en' },
    );
    const fixture = TestBed.createComponent(Landing);
    await fixture.whenStable();
    fixture.detectChanges();

    const question = fixture.nativeElement.querySelector('.quiz-card h2');
    expect(question.textContent).toBe(payload);
    expect(question.querySelector('img')).toBeNull();
  });
});
