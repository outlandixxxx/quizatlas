import { Pipe, PipeTransform, inject } from '@angular/core';
import { TranslocoService } from '@jsverse/transloco';

@Pipe({ name: 'timeAgo', standalone: true, pure: false })
export class TimeAgoPipe implements PipeTransform {
  private readonly transloco = inject(TranslocoService);

  transform(value: string | Date | null | undefined): string {
    if (!value) return '';

    const date = new Date(value);
    const seconds = Math.floor((Date.now() - date.getTime()) / 1000);

    if (seconds < 60) return this.transloco.translate('time.justNow');

    const table: [number, string][] = [
      [60, 'minute'], [24, 'hour'], [30, 'day'], [12, 'month'], [Number.MAX_SAFE_INTEGER, 'year'],
    ];

    let amount = seconds;
    let unit = 'minute';

    for (const [div, label] of table) {
      if (amount < div) { unit = label; break; }
      amount = Math.floor(amount / div);
      unit = label;
    }

    const key = amount === 1 ? `time.${unit}Ago` : `time.${unit}sAgo`;
    return this.transloco.translate(key, { count: amount });
  }
}