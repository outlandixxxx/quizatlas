import { inject } from '@angular/core';
import { toSignal } from '@angular/core/rxjs-interop';
import { TranslocoService } from '@jsverse/transloco';

// Re-emits after the active language is actually loaded, not just selected.
export function seoTranslationsReady(language?: string) {
  return toSignal(inject(TranslocoService).selectTranslation(language));
}
