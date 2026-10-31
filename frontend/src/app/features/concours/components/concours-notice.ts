import { ChangeDetectionStrategy, Component, input } from '@angular/core';
import { TranslocoPipe } from '@jsverse/transloco';

@Component({
  selector: 'app-concours-notice',
  standalone: true,
  imports: [TranslocoPipe],
  changeDetection: ChangeDetectionStrategy.OnPush,
  template: `<div class="section-notice">
    <span class="material-symbols-rounded" aria-hidden="true">{{ icon() }}</span>
    <div>
      <h3>{{ titleKey() | transloco }}</h3>
      <p>{{ bodyKey() | transloco }}</p>
    </div>
  </div>`,
  styles: [
    `
      .section-notice {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 24px;
        border: 1px dashed var(--border-color);
        border-radius: var(--radius-card);
      }
      .material-symbols-rounded {
        font-size: 26px;
        padding: 10px;
        border-radius: 12px;
        background: var(--color-surface-hover);
        flex-shrink: 0;
      }
      h3 {
        font-size: 16px;
        margin: 0 0 6px;
      }
      p {
        margin: 0;
        line-height: 1.7;
        color: var(--color-text-secondary);
        font-size: 14px;
      }
      @media (max-width: 540px) {
        .section-notice {
          padding: 18px;
          gap: 12px;
        }
      }
    `,
  ],
})
export class ConcoursNotice {
  readonly icon = input('info');
  readonly titleKey = input.required<string>();
  readonly bodyKey = input.required<string>();
}
