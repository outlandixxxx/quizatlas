import { Component, input } from '@angular/core';
import { TranslocoPipe } from '@jsverse/transloco';
import { BRANDING } from '../../../core/constants/branding';

@Component({
  selector: 'app-social-links',
  standalone: true,
  imports: [TranslocoPipe],
  template: `
    <nav class="social-links" [attr.aria-label]="'social.followUs' | transloco">
      @for (social of links; track social.name) {
        <a
          class="social-circle"
          [class.with-label]="showLabels()"
          [href]="social.url"
          [attr.aria-label]="'social.linkLabel' | transloco: { platform: social.name }"
          target="_blank"
          rel="noopener noreferrer"
        >
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
            <path [attr.d]="icons[social.name]" fill-rule="evenodd" />
          </svg>
          @if (showLabels()) {
            <bdi lang="en" dir="ltr">{{ social.name }}</bdi>
          }
        </a>
      }
    </nav>
  `,
  styleUrl: './social-links.scss',
})
export class SocialLinks {
  readonly showLabels = input(false);
  readonly links = BRANDING.socialLinks;
  readonly icons: Record<(typeof BRANDING.socialLinks)[number]['name'], string> = {
    TikTok:
      'M16.6 2c.3 2.6 1.8 4.2 4.4 4.4v3.4a8.4 8.4 0 0 1-4.4-1.3v7.1a6.4 6.4 0 1 1-5.5-6.3v3.5a3 3 0 1 0 2.1 2.8V2z',
    Facebook:
      'M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.51 1.5-3.9 3.78-3.9 1.1 0 2.24.2 2.24.2v2.46H15.2c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12z',
    Instagram:
      'M7 2a5 5 0 0 0-5 5v10a5 5 0 0 0 5 5h10a5 5 0 0 0 5-5V7a5 5 0 0 0-5-5H7zm0 2h10a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3zm5 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm6.5-2.5a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0z',
    YouTube:
      'M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8zM9.6 15.6V8.4l6.2 3.6z',
    LinkedIn:
      'M19 0H5a5 5 0 0 0-5 5v14a5 5 0 0 0 5 5h14a5 5 0 0 0 5-5V5a5 5 0 0 0-5-5zM8 19H5V8h3zm-1.5-12.3a1.75 1.75 0 1 1 0-3.5 1.75 1.75 0 0 1 0 3.5zM20 19h-3v-5.6c0-3.4-4-3.1-4 0V19h-3V8h3v1.8c1.4-2.6 7-2.8 7 2.5z',
  };
}
