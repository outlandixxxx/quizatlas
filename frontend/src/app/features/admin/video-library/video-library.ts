import { A11yModule } from '@angular/cdk/a11y';
import { Component, DestroyRef, ElementRef, ViewChild, inject, signal } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { TranslocoPipe, TranslocoService } from '@jsverse/transloco';
import { Subscription, finalize } from 'rxjs';
import { VideoLibraryApi } from '../../../core/services/video-library-api';
import {
  VIDEO_CATEGORIES, VIDEO_FORMATS, VIDEO_LANGUAGES, VIDEO_STATUSES, VIDEO_TEMPLATES,
  VideoLibraryErrors, VideoLibraryInput, VideoLibraryPage, VideoLibraryReviewRow,
  VideoLibraryVideo,
} from '../../../core/models/video-library';

interface ReviewDraft extends VideoLibraryInput {
  key: number;
  youtube_id: string | null;
  checkedUrl: string;
  existing: VideoLibraryVideo | null;
  errors: VideoLibraryErrors;
  metadata_error: string | null;
  state: 'review' | 'created' | 'existing';
}

@Component({
  standalone: true,
  imports: [FormsModule, TranslocoPipe, A11yModule],
  templateUrl: './video-library.html',
  styleUrl: './video-library.scss',
})
export class AdminVideoLibrary {
  private readonly api = inject(VideoLibraryApi);
  private readonly destroy = inject(DestroyRef);
  private readonly translations = inject(TranslocoService);
  private listRequest?: Subscription;
  private nextKey = 0;
  @ViewChild('editHeading') editHeading?: ElementRef<HTMLElement>;
  readonly formats = VIDEO_FORMATS;
  readonly categories = VIDEO_CATEGORIES;
  readonly templates = VIDEO_TEMPLATES;
  readonly languages = VIDEO_LANGUAGES;
  readonly statuses = VIDEO_STATUSES;
  readonly data = signal<VideoLibraryPage | null>(null);
  readonly rows = signal<ReviewDraft[]>([]);
  readonly loading = signal(false);
  readonly reviewing = signal(false);
  readonly saving = signal(false);
  readonly editing = signal<VideoLibraryVideo | null>(null);
  readonly pendingDelete = signal<VideoLibraryVideo | null>(null);
  readonly error = signal('');
  readonly notice = signal('');
  readonly editErrors = signal<VideoLibraryErrors>({});
  readonly rowReviewing = signal<number | null>(null);
  urls = '';
  search = '';
  publication = '';
  defaults: Omit<VideoLibraryInput, 'url'> = {
    title: '', format: 'short', category: 'quiz', template: 'general', language: 'fr', status: 'draft',
  };
  editForm: VideoLibraryInput = this.emptyInput();

  constructor() { this.fetch(); }

  private emptyInput(): VideoLibraryInput {
    return { url: '', title: '', format: 'short', category: 'quiz', template: 'general', language: 'fr', status: 'draft' };
  }

  fetch(page = 1) {
    this.listRequest?.unsubscribe();
    this.loading.set(true);
    this.error.set('');
    this.listRequest = this.api.list({
      q: this.search, status: this.publication as VideoLibraryInput['status'] | '', page, per_page: 15,
    }, true).pipe(takeUntilDestroyed(this.destroy), finalize(() => this.loading.set(false))).subscribe({
      next: (response) => this.data.set(response.data),
      error: () => { this.data.set(null); this.error.set('videoLibraryAdmin.loadError'); },
    });
  }

  review() {
    if (this.busy()) return;
    const urls = this.urls.split(/\r?\n/).map((url) => url.trim()).filter(Boolean);
    if (!urls.length || urls.length > 50) { this.error.set('videoLibraryAdmin.urlLimit'); return; }
    this.reviewing.set(true);
    this.error.set('');
    this.notice.set('');
    this.api.review(urls, this.defaults).pipe(
      takeUntilDestroyed(this.destroy), finalize(() => this.reviewing.set(false)),
    ).subscribe({
      next: ({ data }) => {
        // Preserve manual edits when the same URL is reviewed again.
        const previous = new Map(this.rows().map((row) => [row.url, row]));
        this.rows.set(data.rows.map((row) => this.reviewDraft(row, previous.get(row.url))));
      },
      error: () => this.error.set('videoLibraryAdmin.reviewError'),
    });
  }

  private reviewDraft(row: VideoLibraryReviewRow, previous?: ReviewDraft): ReviewDraft {
    return {
      ...this.defaults,
      ...row,
      ...(previous ? this.payload(previous) : {}),
      url: row.url,
      title: previous?.title || row.title || '',
      key: previous?.key ?? ++this.nextKey,
      youtube_id: row.youtube_id ?? null,
      checkedUrl: row.url,
      existing: row.existing ?? null,
      errors: row.errors ?? {},
      metadata_error: row.metadata_error ?? null,
      state: row.existing ? 'existing' : 'review',
    };
  }

  changed(row: ReviewDraft, field: keyof VideoLibraryInput) {
    row.errors = { ...row.errors };
    delete row.errors[field];
    if (field === 'url') {
      row.youtube_id = null;
      row.existing = null;
      row.state = 'review';
    }
    this.rows.update((rows) => [...rows]);
  }

  checkRow(row: ReviewDraft) {
    if (this.busy()) return;
    this.rowReviewing.set(row.key);
    this.error.set('');
    const { url: _url, ...defaults } = this.payload(row);
    this.api.review([row.url], defaults).pipe(
      takeUntilDestroyed(this.destroy), finalize(() => this.rowReviewing.set(null)),
    ).subscribe({
      next: ({ data }) => {
        const checked = data.rows[0];
        if (!checked) { this.error.set('videoLibraryAdmin.reviewError'); return; }
        this.rows.update((rows) => rows.map((item) => item.key === row.key ? this.reviewDraft(checked, row) : item));
      },
      error: () => this.error.set('videoLibraryAdmin.reviewError'),
    });
  }

  applyDefaults() {
    if (this.busy()) return;
    this.rows.update((rows) => rows.map((row) => row.state !== 'review' || row.existing ? row : {
      ...row, format: this.defaults.format, category: this.defaults.category,
      template: this.defaults.template, language: this.defaults.language, status: this.defaults.status,
    }));
  }

  busy() { return this.reviewing() || this.saving() || this.rowReviewing() !== null; }
  isBatchDuplicate(row: ReviewDraft) {
    if (!row.youtube_id || row.checkedUrl !== row.url || row.state !== 'review' || row.existing) return false;
    const rows = this.rows(), index = rows.indexOf(row);
    return rows.slice(0, index).some((previous) => previous.youtube_id === row.youtube_id && previous.checkedUrl === previous.url);
  }
  ready(row: ReviewDraft) {
    return row.state === 'review' && !row.existing && !this.isBatchDuplicate(row)
      && !!row.youtube_id && row.checkedUrl === row.url && !!row.title.trim();
  }
  readyCount() { return this.rows().filter((row) => this.ready(row)).length; }

  private payload(row: VideoLibraryInput): VideoLibraryInput {
    return { url: row.url, title: row.title, format: row.format, category: row.category,
      template: row.template, language: row.language, status: row.status };
  }

  saveReviewed() {
    if (this.busy()) return;
    const pending = this.rows().filter((row) => this.ready(row));
    if (!pending.length) return;
    this.saving.set(true);
    this.error.set('');
    this.notice.set('');
    this.api.import(pending.map((row) => this.payload(row))).pipe(
      takeUntilDestroyed(this.destroy), finalize(() => this.saving.set(false)),
    ).subscribe({
      next: ({ data }) => {
        for (const result of data.rows) {
          const row = pending[result.index];
          if (!row) continue;
          row.errors = result.errors ?? {};
          if (result.status === 'created') row.state = 'created';
          if (result.status === 'existing') {
            row.state = 'existing'; row.existing = result.video ?? null;
          }
          if (result.video && result.status !== 'invalid') {
            for (const duplicate of this.rows()) {
              if (duplicate !== row && duplicate.state === 'review' && duplicate.youtube_id === result.video.youtube_id
                && duplicate.checkedUrl === duplicate.url) {
                duplicate.state = 'existing';
                duplicate.existing = result.video;
                duplicate.errors = {};
              }
            }
          }
        }
        this.rows.update((rows) => [...rows]);
        this.notice.set('videoLibraryAdmin.importComplete');
        this.fetch();
      },
      error: () => this.error.set('videoLibraryAdmin.saveError'),
    });
  }

  openEdit(video: VideoLibraryVideo) {
    if (this.busy()) return;
    this.editing.set(video);
    this.editForm = this.payload(video);
    this.editErrors.set({});
    this.error.set('');
    // Wait for the conditional editor to render before moving focus.
    setTimeout(() => this.editHeading?.nativeElement.focus());
  }

  saveEdit() {
    const video = this.editing();
    if (!video || this.busy() || !this.editForm.title.trim()) return;
    this.saving.set(true);
    this.editErrors.set({});
    this.error.set('');
    this.api.update(video.id, this.payload(this.editForm)).pipe(
      takeUntilDestroyed(this.destroy), finalize(() => this.saving.set(false)),
    ).subscribe({
      next: () => { this.editing.set(null); this.notice.set('videoLibraryAdmin.updated'); this.fetch(this.data()?.meta.current_page); },
      error: (error) => { this.editErrors.set(error?.error?.errors ?? {}); this.error.set('videoLibraryAdmin.saveError'); },
    });
  }

  changePublication(video: VideoLibraryVideo) {
    if (this.busy()) return;
    this.saving.set(true);
    this.error.set('');
    this.api.update(video.id, { ...this.payload(video), status: video.status === 'published' ? 'draft' : 'published' }).pipe(
      takeUntilDestroyed(this.destroy), finalize(() => this.saving.set(false)),
    ).subscribe({
      next: () => { this.notice.set('videoLibraryAdmin.updated'); this.fetch(this.data()?.meta.current_page); },
      error: () => this.error.set('videoLibraryAdmin.saveError'),
    });
  }

  remove() {
    const video = this.pendingDelete();
    if (!video || this.busy()) return;
    this.saving.set(true);
    this.error.set('');
    this.api.remove(video.id).pipe(takeUntilDestroyed(this.destroy), finalize(() => this.saving.set(false))).subscribe({
      next: () => {
        this.pendingDelete.set(null); this.notice.set('videoLibraryAdmin.removed');
        const page = this.data()?.meta.current_page ?? 1;
        this.fetch(this.data()?.items.length === 1 && page > 1 ? page - 1 : page);
      },
      error: () => this.error.set('videoLibraryAdmin.removeError'),
    });
  }

  messages(errors: VideoLibraryErrors): string[] {
    return Object.values(errors).flatMap((value) => typeof value === 'string' ? [value] : value);
  }

  headingDirection() { return this.translations.getActiveLang() === 'ar' ? 'rtl' : 'ltr'; }
}
