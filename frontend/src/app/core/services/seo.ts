import { Injectable, inject, DOCUMENT } from '@angular/core';
import { Meta, Title } from '@angular/platform-browser';

@Injectable({ providedIn: 'root' })
export class Seo {
  private readonly meta = inject(Meta);
  private readonly title = inject(Title);
  private readonly document = inject(DOCUMENT);

  private readonly jsonLdId = 'structured-data';

  setTitle(title: string): void {
    this.title.setTitle(title);
  }

  setDescription(description: string): void {
    this.meta.updateTag({ name: 'description', content: description });
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
    script.textContent = JSON.stringify(data);
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
  }): void {
    const image = config.image || 'https://maroquiz.com/assets/images/logo-en.webp';
    const type = config.type || 'website';

    this.meta.updateTag({ property: 'og:title', content: config.title });
    this.meta.updateTag({ property: 'og:description', content: config.description });
    this.meta.updateTag({ property: 'og:image', content: image });
    this.meta.updateTag({ property: 'og:type', content: type });

    this.meta.updateTag({ name: 'twitter:card', content: 'summary' });
    this.meta.updateTag({ name: 'twitter:title', content: config.title });
    this.meta.updateTag({ name: 'twitter:description', content: config.description });
    this.meta.updateTag({ name: 'twitter:image', content: image });
  }

}
