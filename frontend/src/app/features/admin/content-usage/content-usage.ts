import { Component, DestroyRef, Input, OnInit, OnChanges, inject, signal } from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { TranslocoModule, TranslocoService } from '@jsverse/transloco';
import { Subject, catchError, of, switchMap } from 'rxjs';
import { ContentUsageApi, FactVideoScope, UsageOperation, UsagePage, UsageStatus, UsageType } from '../services/content-usage.api';

@Component({
  selector: 'app-content-usage', standalone: true, imports: [TranslocoModule],
  templateUrl: './content-usage.html', styleUrl: './content-usage.scss',
})
export class ContentUsage implements OnInit, OnChanges {
  @Input() initialType: UsageType = 'question';
  @Input() factLanguage?: FactVideoScope['language'];
  @Input() factVideoType?: FactVideoScope['video_type'];
  private initialized = false;
  private readonly api = inject(ContentUsageApi);
  private readonly destroy = inject(DestroyRef);
  readonly i18n = inject(TranslocoService);
  readonly type = signal<UsageType>('question');
  readonly status = signal<UsageStatus | ''>('');
  readonly result = signal<UsagePage | null>(null);
  readonly loading = signal(false);
  readonly recovering = signal(false);
  readonly error = signal('');
  private readonly requests = new Subject<number>();

  ngOnInit(): void {
    this.initialized = true;
    this.type.set(this.initialType);
    this.requests.pipe(switchMap(page => {
      this.loading.set(true); this.result.set(null); this.error.set('');
      const scope = this.type() === 'fact' && this.factLanguage && this.factVideoType ? { language: this.factLanguage, video_type: this.factVideoType } : undefined;
      const request = scope ? this.api.list(this.type(), this.status(), page, scope) : this.api.list(this.type(), this.status(), page);
      return request.pipe(catchError(() => {
        this.error.set(this.i18n.translate('contentUsage.loadError')); return of(null);
      }));
    }), takeUntilDestroyed(this.destroy)).subscribe(result => { this.result.set(result); this.loading.set(false); });
    this.refresh();
  }
  ngOnChanges(): void { if (this.initialized) this.refresh(); }
  refresh(page = 1): void { this.requests.next(page); }
  changeType(event: Event): void { this.type.set((event.target as HTMLSelectElement).value as UsageType); this.refresh(); }
  changeStatus(event: Event): void { this.status.set((event.target as HTMLSelectElement).value as UsageStatus | ''); this.refresh(); }
  recover(): void {
    if (this.recovering()) return;
    this.recovering.set(true); this.error.set('');
    this.api.recover().pipe(takeUntilDestroyed(this.destroy)).subscribe({
      next: () => { this.recovering.set(false); this.refresh(); },
      error: () => { this.recovering.set(false); this.error.set(this.i18n.translate('contentUsage.recoverError')); },
    });
  }
  download(op: UsageOperation): void {
    this.api.download(op.id).pipe(takeUntilDestroyed(this.destroy)).subscribe({
      next: blob => {
        const url = URL.createObjectURL(blob), link = document.createElement('a');
        link.href = url; link.download = op.output?.[0]?.name || 'maroquiz-export.json'; link.click();
        setTimeout(() => URL.revokeObjectURL(url), 1000);
      },
      error: () => this.error.set(this.i18n.translate('contentUsage.downloadError')),
    });
  }
}
