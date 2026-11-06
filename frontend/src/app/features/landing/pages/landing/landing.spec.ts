import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TestBed } from '@angular/core/testing';
import { RouterLink, provideRouter } from '@angular/router';
import { TranslocoModule, TranslocoService, TranslocoTestingModule } from '@jsverse/transloco';
import { Landing } from './landing';
import { Seo } from '../../../../core/services/seo';
import { BRANDING } from '../../../../core/constants/branding';
import { PublicFooter } from '../../../../layouts/public-layout/components/public-footer/footer';
import { About } from '../../../public/about/about';
import { NewsletterApi } from '../../../../core/services/newsletter-api';
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
    seo.setJsonLd.mockClear();
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
      expect(seo.setJsonLd).toHaveBeenCalledTimes(1);
      const schema = seo.setJsonLd.mock.calls[0][0];
      const organizations = schema.filter((item: { '@type': string }) => item['@type'] === 'Organization');
      expect(organizations).toHaveLength(1);
      expect(organizations[0].sameAs).toEqual(BRANDING.socialLinks.map((social) => social.url));
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

describe('official social links', () => {
  const urls = [
    'https://www.tiktok.com/@maroquizy',
    'https://www.facebook.com/people/MaroQuiz/61593907344333/',
    'https://www.instagram.com/contact.maroquiz/',
    'https://www.youtube.com/@MaroQuiz00',
    'https://www.linkedin.com/in/maro-quiz-331739439/',
  ];

  it.each([['en', en], ['fr', fr], ['ar', ar]] as const)(
    'renders all official accounts accessibly in the footer and About page in %s',
    async (lang, translations) => {
      TestBed.configureTestingModule({
        imports: [PublicFooter, About, TranslocoTestingModule.forRoot({
          langs: { en, fr, ar }, preloadLangs: true,
          translocoConfig: { availableLangs: ['en', 'fr', 'ar'], defaultLang: lang },
        })],
        providers: [provideRouter([]), { provide: NewsletterApi, useValue: { subscribe: vi.fn() } }],
      });
      TestBed.inject(TranslocoService).setActiveLang(lang);
      const footer = TestBed.createComponent(PublicFooter);
      const about = TestBed.createComponent(About);
      for (const fixture of [footer, about]) {
        fixture.detectChanges();
        await fixture.whenStable();
        fixture.detectChanges();
        const nav = fixture.nativeElement.querySelector('app-social-links nav') as HTMLElement;
        expect(nav.getAttribute('aria-label')).toBe(translations.social.followUs);
        const links = [...nav.querySelectorAll('a')];
        expect(links.map((link) => link.getAttribute('href'))).toEqual(urls);
        for (const [index, link] of links.entries()) {
          expect(link.getAttribute('target')).toBe('_blank');
          expect(link.relList.contains('noopener')).toBe(true);
          expect(link.relList.contains('noreferrer')).toBe(true);
          expect(link.getAttribute('aria-label')).toBe(
            translations.social.linkLabel.replace('{{platform}}', BRANDING.socialLinks[index].name),
          );
          expect(link.querySelector('svg')?.getAttribute('aria-hidden')).toBe('true');
          expect(link.querySelector('path')?.getAttribute('d')).toBeTruthy();
        }
      }
      expect(about.nativeElement.querySelectorAll('app-social-links bdi[dir="ltr"]')).toHaveLength(5);
      expect(footer.nativeElement.querySelector('a[href="/privacy"]')).not.toBeNull();
      expect(footer.nativeElement.querySelector('input[type="email"]')).not.toBeNull();
      expect(about.nativeElement.querySelector('h1')?.textContent).toContain(translations.about.title);
      expect(about.nativeElement.querySelector('.about-social h2')?.textContent).toContain(translations.social.followUs);
    },
  );
});
