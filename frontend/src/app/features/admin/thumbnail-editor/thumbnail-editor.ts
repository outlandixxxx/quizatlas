import { Component, DestroyRef, EventEmitter, Input, Output, inject } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { TranslocoPipe } from '@jsverse/transloco';
import { firstValueFrom } from 'rxjs';
import { LocalRenderApi } from '../services/local-render.api';
import { ThumbnailPalette, ThumbnailReview, ThumbnailSpec, thumbnailDocument, thumbnailPreviewDataUrl } from '../services/thumbnail.models';

@Component({
  selector: 'app-thumbnail-editor', standalone: true, imports: [FormsModule, TranslocoPipe],
  templateUrl: './thumbnail-editor.html', styleUrl: './thumbnail-editor.scss',
})
export class ThumbnailEditor {
  private readonly renderer = inject(LocalRenderApi);
  private destroyed = false;
  private readonly destroy = inject(DestroyRef);
  @Input({ required: true }) document!: { render_options?: object };
  @Input({ required: true }) review!: ThumbnailReview;
  @Input() disabled = false;
  @Input() confirmLatinLocale = false;
  @Output() reviewChange = new EventEmitter<ThumbnailReview>();
  busy = false;
  error = '';
  readonly colors: (keyof Omit<ThumbnailPalette, 'id'>)[] = ['background', 'primary', 'secondary', 'text', 'muted', 'badge', 'badgeText'];

  constructor() { this.destroy.onDestroy(() => this.destroyed = true); }

  update(field: 'hook' | 'supporting' | 'layout', value: string) {
    if (this.disabled || this.busy) return;
    this.changed({ ...this.review.spec, [field]: value });
  }
  setColor(field: keyof Omit<ThumbnailPalette, 'id'>, value: string) {
    if (this.disabled || this.busy) return;
    this.changed({ ...this.review.spec, palette: { ...this.review.spec.palette, [field]: value } });
  }
  illustration(id: string) {
    if (this.disabled || this.busy) return;
    const asset = this.review.proposal.assets.find(asset => asset.id === id && asset.available);
    if (asset) this.changed({ ...this.review.spec, asset: { id: asset.id, sha256: asset.sha256 } });
  }
  selectSuggestion(index: number) {
    if (this.disabled || this.busy) return;
    const suggestion = this.review.proposal.suggestions[index];
    if (suggestion) this.changed({ ...this.review.spec, ...suggestion });
  }
  restore() {
    if (!this.disabled && !this.busy) this.changed(JSON.parse(JSON.stringify(this.review.proposal.spec)));
  }
  async locale(value: string) {
    if (!this.confirmLatinLocale || !['fr', 'en'].includes(value) || this.disabled || this.busy) return;
    this.busy = true; this.error = '';
    this.reviewChange.emit({ ...this.review, ready: false });
    try {
      const spec = { ...this.review.spec, locale: value as 'fr' | 'en' };
      const { data: proposal } = await firstValueFrom(this.renderer.thumbnailOptions(thumbnailDocument(this.document, spec)));
      if (!this.destroyed) this.reviewChange.emit({ ...this.review, proposal, spec: proposal.spec, ready: false });
    } catch { this.error = 'thumbnailEditor.previewError'; }
    finally { this.busy = false; }
  }
  private changed(spec: ThumbnailSpec) {
    this.error = '';
    this.reviewChange.emit({ ...this.review, spec, ready: false });
  }
  async preview() {
    if (this.disabled || this.busy || !this.review.spec.hook.trim()) return;
    this.busy = true; this.error = '';
    const before = this.review;
    this.reviewChange.emit({ ...before, ready: false });
    try {
      const blob = await firstValueFrom(this.renderer.thumbnailPreview(thumbnailDocument(this.document, before.spec)));
      if (this.destroyed) return;
      const previewUrl = await thumbnailPreviewDataUrl(blob);
      if (!this.destroyed) this.reviewChange.emit({ ...before, previewUrl, ready: true });
    } catch (error: any) {
      this.error = typeof error?.error?.message === 'string' ? error.error.message : 'thumbnailEditor.previewError';
    } finally { this.busy = false; }
  }
}
