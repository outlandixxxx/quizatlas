import { ChangeDetectionStrategy, Component, inject, computed } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { TranslocoService } from '@jsverse/transloco';
import { toSignal } from '@angular/core/rxjs-interop';

@Component({
  selector: 'app-logo',
  standalone: true,
  imports: [CommonModule, RouterLink],
  templateUrl: './logo.html',
  styleUrl: './logo.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class Logo {
  private readonly transloco = inject(TranslocoService);

  // Converts the Transloco langChanges$ observable directly to a signal
  readonly activeLang = toSignal(this.transloco.langChanges$, {
    initialValue: this.transloco.getActiveLang() || 'fr',
  });

  // Computed signal that computes the image asset path
  readonly logoSrc = computed(() => {
    const rawLang = this.activeLang() || 'fr';
    let lang = 'fr';

    if (rawLang.startsWith('ar')) {
      lang = 'ar';
    } else if (rawLang.startsWith('en')) {
      lang = 'en';
    } else if (rawLang.startsWith('fr')) {
      lang = 'en';
    }

    return `assets/images/logo-${lang}.png`;
  });
}