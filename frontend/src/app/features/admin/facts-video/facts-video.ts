import { ContentUsage } from '../content-usage/content-usage';
import { CommonModule } from '@angular/common';
import { Component, DestroyRef, OnInit, inject, signal } from '@angular/core';
import { FormBuilder, ReactiveFormsModule, Validators } from '@angular/forms';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { TranslocoModule, TranslocoService } from '@jsverse/transloco';
import { EMPTY, Subscription, catchError, exhaustMap, firstValueFrom, startWith, switchMap, takeWhile, tap, timer } from 'rxjs';
import { FactsDocument, FactsLanguage, FactsMajor, FactsVideoApi, FactsVideoConfig } from '../services/facts-video.api';
import { DurationEstimate, LocalRenderApi, RenderJob } from '../services/local-render.api';

@Component({
  selector: 'app-admin-facts-video', standalone: true,
  imports: [ContentUsage, CommonModule, ReactiveFormsModule, TranslocoModule],
  templateUrl: './facts-video.html', styleUrl: './facts-video.scss',
})
export class AdminFactsVideo implements OnInit {
  private readonly fb = inject(FormBuilder);
  private readonly api = inject(FactsVideoApi);
  readonly renderer = inject(LocalRenderApi);
  private readonly destroyRef = inject(DestroyRef);
  private readonly i18n = inject(TranslocoService);
  private polling?: Subscription;
  readonly majors = signal<FactsMajor[]>([]);
  readonly estimate = signal<DurationEstimate | null>(null);
  readonly document = signal<FactsDocument | null>(null);
  readonly job = signal<RenderJob | null>(null);
  readonly busy = signal(false);
  readonly approved = signal(false);
  readonly estimating = signal(false);
  readonly error = signal('');
  readonly loading = signal(true);
  readonly available = signal<number | null>(null);
  readonly form = this.fb.nonNullable.group({
    major_id: [null as number | null, Validators.required],
    language: ['fr' as FactsLanguage], profile: ['facts-short' as 'facts-short' | 'facts-long'],
    video_count: [1, [Validators.required, Validators.min(1), Validators.max(60), Validators.pattern(/^\d+$/)]],
    count: [1, [Validators.required, Validators.min(1), Validators.max(12), Validators.pattern(/^\d+$/)]],
    orientation: ['vertical' as 'vertical' | 'horizontal'], quality: ['draft' as 'draft' | 'final'],
    music: [true], sfx: [true], musicVolume: [0.6, [Validators.min(0), Validators.max(1)]],
  });
  get maxFacts() { return this.form.controls.profile.value === 'facts-short' ? 12 : 300; }
  get rendering() { return this.busy() || ['queued', 'running'].includes(this.job()?.status || ''); }

  ngOnInit() {
    this.form.controls.profile.valueChanges.pipe(startWith(this.form.controls.profile.value),
      switchMap(profile => this.api.options(profile)), takeUntilDestroyed(this.destroyRef)).subscribe({
      next: ({ data }) => { this.majors.set(data); this.loading.set(false); },
      error: error => { this.loading.set(false); this.error.set(this.message(error)); },
    });
    this.form.controls.profile.valueChanges.pipe(takeUntilDestroyed(this.destroyRef)).subscribe(() => {
      this.form.controls.orientation.setValue('vertical', { emitEvent: false });
      this.form.controls.count.setValidators([Validators.required, Validators.min(1), Validators.max(this.maxFacts), Validators.pattern(/^\d+$/)]);
      this.form.controls.count.updateValueAndValidity({ emitEvent: false });
    });
    this.form.valueChanges.pipe(
      tap(() => { this.approved.set(false); this.estimate.set(null); this.document.set(null); this.error.set(''); this.estimating.set(true); this.available.set(null); }),
      // switchMap cancels a stale request immediately, including during debounce.
      switchMap(() => timer(350).pipe(switchMap(() => {
        if (this.form.invalid) { this.estimating.set(false); return EMPTY; }
        return this.api.export(this.config()).pipe(
          switchMap(({ data }) => {
            this.available.set(data.meta.available);
            const document = { ...data, render_options: this.options() };
            return this.renderer.estimate(this.snapshot(document)).pipe(tap(({ data: estimate }) => { this.document.set(document); this.estimate.set(estimate); this.estimating.set(false); }));
          }), catchError(error => { this.estimating.set(false); this.error.set(this.message(error)); return EMPTY; }),
        );
      }))), takeUntilDestroyed(this.destroyRef),
    ).subscribe();
    const batch = this.renderer.recentFactsBatch?.();
    if (batch) this.poll(batch);
    else if (typeof sessionStorage !== 'undefined') {
      const previous = sessionStorage.getItem('maroquiz-facts-current-job');
      if (previous && /^[a-f0-9-]{36}$/.test(previous)) this.poll(previous);
    }
  }
  private config(): FactsVideoConfig {
    const raw = this.form.getRawValue();
    return { major_id: raw.major_id!, language: raw.language, profile: raw.profile, count: Number(raw.count), ...(Number(raw.video_count) > 1 ? { batch_size: Number(raw.video_count) } : {}) };
  }
  private options(): NonNullable<FactsDocument['render_options']> {
    const raw = this.form.getRawValue();
    return { orientation: raw.orientation, quality: raw.quality, music: raw.music, sfx: raw.sfx, musicVolume: Number(raw.musicVolume) };
  }
  snapshot(document: FactsDocument) {
    const count = Number(this.form.controls.count.value);
    const videos: FactsDocument[] = [];
    for (let index = 0; index < document.facts.length; index += count) {
      const facts = document.facts.slice(index, index + count);
      videos.push({ ...document, video: { title: `${document.major.name} · ${videos.length + 1} · ${document.language.toUpperCase()}` }, facts });
    }
    return { type: 'facts-batch' as const, videos };
  }
  propose() { if (!this.rendering) this.form.updateValueAndValidity(); }
  async replace(index: number) {
    const current = this.document();
    if (!current || this.rendering || this.estimating()) return;
    this.busy.set(true); this.approved.set(false); this.error.set('');
    this.form.disable({ emitEvent: false });
    try {
      const config = { ...this.config(), count: 1, batch_size: 1 };
      const { data } = await firstValueFrom(this.api.export(config, undefined, current.facts.map(f => f.id)));
      const facts = current.facts.map((fact, i) => i === index ? data.facts[0] : fact);
      const next = { ...current, facts };
      this.document.set(null); this.estimate.set(null);
      const result = await firstValueFrom(this.renderer.estimate(this.snapshot(next)));
      this.document.set(next); this.estimate.set(result.data);
    } catch (error) { this.error.set(this.message(error)); }
    finally { this.busy.set(false); this.form.enable({ emitEvent: false }); }
  }
  async retry() {
    const job = this.job();
    if (!job || this.rendering || !['failed', 'cancelled'].includes(job.status)) return;
    this.busy.set(true); this.error.set('');
    try { this.job.set((await firstValueFrom(this.renderer.retry(job.id))).data); this.poll(job.id); }
    catch (error) { this.error.set(this.message(error)); }
    finally { this.busy.set(false); }
  }
  duration(seconds: number | null | undefined): string {
    if (seconds == null) return '—';
    const total = Math.ceil(seconds);
    return `${Math.floor(total / 60)}:${String(total % 60).padStart(2, '0')}`;
  }
  async generate() {
    const document = this.document();
    if (this.rendering || this.form.invalid || !document || !this.estimate() || !this.approved()) return;
    this.busy.set(true); this.error.set(''); this.job.set(null);
    // Capture settings and IDs together, then revalidate the same selection in Laravel.
    const config = this.config();
    const options = this.options();
    this.form.disable({ emitEvent: false });
    try {
      const { data } = await firstValueFrom(this.api.export(config, document.facts.map(f => f.id)));
      if (JSON.stringify(data.facts) !== JSON.stringify(document.facts)) throw new Error(this.i18n.translate('factsVideo.changed'));
      const started = await firstValueFrom(this.renderer.start(this.snapshot({ ...data, render_options: options })));
      this.job.set(started.data);
      try { sessionStorage.setItem('maroquiz-facts-current-job', started.data.id); } catch { /* The runner persists independently of browser storage. */ }
      this.poll(started.data.id);
    } catch (error) { this.error.set(this.message(error)); this.form.enable({ emitEvent: false }); }
    finally { this.busy.set(false); }
  }
  private poll(id: string) {
    this.polling?.unsubscribe();
    const deadline = Date.now() + 12 * 60 * 60 * 1000;
    this.polling = timer(0, 2000).pipe(
      exhaustMap(() => this.renderer.job(id).pipe(catchError(error => { this.error.set(this.message(error)); return EMPTY; }))),
      tap(({ data }) => {
        this.job.set(data);
        if (['queued', 'running'].includes(data.status)) this.form.disable({ emitEvent: false });
        else this.form.enable({ emitEvent: false });
      }),
      takeWhile(({ data }) => ['queued', 'running'].includes(data.status) && (!!data.batch || Date.now() < deadline), true),
      takeUntilDestroyed(this.destroyRef),
    ).subscribe({ error: error => { this.error.set(this.message(error)); this.form.enable({ emitEvent: false }); } });
  }
  reconnect() { const id = this.job()?.id; if (id) { this.error.set(''); this.poll(id); } }
  async cancel() {
    const job = this.job();
    if (!job || !['queued', 'running'].includes(job.status)) return;
    try { this.job.set((await firstValueFrom(this.renderer.cancel(job.id))).data); }
    catch (error) { this.error.set(this.message(error)); }
  }
  private message(error: unknown): string {
    const value = error as { status?: number; error?: { message?: string; errors?: Record<string, string[]> } };
    if (value?.status === 0 || (error as { name?: string })?.name === 'TimeoutError') return this.i18n.translate('factsVideo.runnerOffline');
    const detail = Object.values(value?.error?.errors || {}).flat().find(Boolean);
    return detail || value?.error?.message || (error instanceof Error ? error.message : this.i18n.translate('factsVideo.failed'));
  }
}
