import { BRANDING } from '../constants/branding';
import { Injectable, inject, DOCUMENT, RESPONSE_INIT } from '@angular/core';
import { Meta, Title } from '@angular/platform-browser';
import { canonicalUrl, isPrivatePath } from '../seo/urls';

@Injectable({ providedIn: 'root' })
export class Seo {
  private readonly meta = inject(Meta);
  private readonly title = inject(Title);
  private readonly document = inject(DOCUMENT);
  private readonly response = inject(RESPONSE_INIT, { optional: true });

  private readonly jsonLdId = 'structured-data';

  beginPage(url: string): void {
    if (this.response) this.response.status = 200;
    this.removeJsonLd();
    this.setIndexable(!isPrivatePath(new URL(url, 'https://maroquiz.com').pathname));
    this.setCanonical(canonicalUrl(url));
  }

  setIndexable(indexable: boolean): void {
    this.meta.updateTag({ name: 'robots', content: indexable ? 'index, follow' : 'noindex, follow' });
  }

  setHttpError(status: number): number {
    const code = status === 404 || status === 410 ? status : 503;
    if (this.response) this.response.status = code;
    this.setIndexable(false);
    this.removeJsonLd();
    return code;
  }

  setTitle(title: string): void {
    this.title.setTitle(title);
  }

  setDescription(description: string): void {
    this.meta.updateTag({ name: 'description', content: description });
  }

  setCanonical(url: string): void {
    url = canonicalUrl(url);
    let link = this.document.head.querySelector('link[rel="canonical"]') as HTMLLinkElement | null;

    if (!link) {
      link = this.document.createElement('link');
      link.setAttribute('rel', 'canonical');
      this.document.head.appendChild(link);
    }

    link.setAttribute('href', url);
  }

  /**
   * Injects (or replaces) a JSON-LD <script> tag in <head>.
   * Pass a plain object (or array of objects) representing the schema.org data.
   */
  setJsonLd(data: object | object[]): void {
    this.removeJsonLd();

    const script = this.document.createElement('script');
    script.type = 'application/ld+json';
    script.id = this.jsonLdId;
    // Preserve JSON values while preventing a closing script tag in SSR HTML.
    script.textContent = JSON.stringify(data).replace(/</g, '\\u003c');
    this.document.head.appendChild(script);
  }

  removeJsonLd(): void {
    const existing = this.document.getElementById(this.jsonLdId);
    if (existing) {
      existing.remove();
    }
  }

  setSocialTags(config: {
    title: string;
    description: string;
    image?: string;
    type?: string;
    url?: string;
    language?: string;
  }): void {
    const image = config.image || BRANDING.logoUrl;
    const type = config.type || 'website';

    this.meta.updateTag({ property: 'og:title', content: config.title });
    this.meta.updateTag({ property: 'og:description', content: config.description });
    this.meta.updateTag({ property: 'og:image', content: image });
    this.meta.updateTag({ property: 'og:type', content: type });

    this.meta.updateTag({
      property: 'og:url',
      content: canonicalUrl(config.url || this.document.head.querySelector('link[rel="canonical"]')?.getAttribute('href') || 'https://maroquiz.com/'),
    });
    const locale = ({ en: 'en_US', fr: 'fr_FR', ar: 'ar_MA' } as Record<string, string>)[config.language || this.document.documentElement.lang] ?? 'en_US';
    this.meta.updateTag({ property: 'og:locale', content: locale });
    this.meta.updateTag({ name: 'twitter:card', content: 'summary_large_image' });
    this.meta.updateTag({ property: 'og:image:alt', content: config.title });
    this.meta.updateTag({ name: 'twitter:image:alt', content: config.title });
    this.meta.updateTag({ name: 'twitter:title', content: config.title });
    this.meta.updateTag({ name: 'twitter:description', content: config.description });
    this.meta.updateTag({ name: 'twitter:image', content: image });
  }
}
