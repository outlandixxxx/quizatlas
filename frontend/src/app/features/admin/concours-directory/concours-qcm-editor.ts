import {
  Component,
  DestroyRef,
  computed,
  effect,
  inject,
  input,
  signal,
  untracked,
} from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { FormsModule } from '@angular/forms';
import { TranslocoPipe, TranslocoService } from '@jsverse/transloco';
import { Subject, Subscription, debounceTime, distinctUntilChanged, finalize } from 'rxjs';
import { ConcoursApi } from '../../../core/services/concours-api';
import {
  PreparationOption,
  orderedPreparationOptions,
  preparationOptionName,
} from '../../../core/models/concours';
import {
  QcmCandidate,
  QcmKind,
  QcmLink,
  QcmPage,
  emptyQcmPage,
} from '../../../core/models/concours-qcm';

@Component({
  selector: 'app-concours-qcm-editor',
  standalone: true,
  imports: [FormsModule, TranslocoPipe],
  templateUrl: './concours-qcm-editor.html',
  styleUrl: './concours-qcm-editor.scss',
})
export class ConcoursQcmEditor {
  private readonly api = inject(ConcoursApi);
  private readonly destroy = inject(DestroyRef);
  private readonly translations = inject(TranslocoService);
  readonly concoursId = input.required<number>();
  readonly options = input<PreparationOption[]>([]);
  readonly choices = computed(() => orderedPreparationOptions(this.options()));
  readonly kind = signal<QcmKind>('subjects');
  readonly candidates = signal(emptyQcmPage<QcmCandidate>());
  readonly links = signal(emptyQcmPage<QcmLink>());
  readonly loadingCandidates = signal(false);
  readonly loadingLinks = signal(false);
  readonly saving = signal(false);
  readonly error = signal('');
  readonly selected = signal<QcmCandidate | null>(null);
  readonly version = signal(0);
  readonly selectedOptions = signal<number[]>([]);
  readonly searchChanges = new Subject<string>();
  private candidateRequest?: Subscription;
  private linkRequest?: Subscription;
  search = '';
  constructor() {
    effect(() => {
      const id = this.concoursId();
      if (id)
        untracked(() => {
          this.resetSelection();
          this.loadCandidates(1, id);
          this.loadLinks(1, id);
        });
    });
    this.searchChanges
      .pipe(debounceTime(300), distinctUntilChanged(), takeUntilDestroyed(this.destroy))
      .subscribe(() => {
        if (!this.saving()) {
          this.loadCandidates();
          this.loadLinks();
        }
      });
  }
  private message(error: any): string {
    return (
      Object.values(error.error?.errors ?? {})
        .flat()
        .join(' ') ||
      error.error?.message ||
      this.translations.translate('concoursQcm.loadError')
    );
  }
  resetSelection(): void {
    this.selected.set(null);
    this.selectedOptions.set([]);
    this.version.set(0);
  }
  changeKind(kind: QcmKind): void {
    if (this.saving()) return;
    this.kind.set(kind);
    this.search = '';
    this.error.set('');
    this.resetSelection();
    this.loadCandidates();
    this.loadLinks();
  }
  loadCandidates(page = 1, id = this.concoursId()): void {
    this.candidateRequest?.unsubscribe();
    this.loadingCandidates.set(true);
    this.candidates.set(emptyQcmPage());
    this.candidateRequest = this.api
      .qcmCandidates(id, this.kind(), this.search, page)
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (response) => {
          this.candidates.set(response.data);
          this.loadingCandidates.set(false);
        },
        error: (error) => {
          this.error.set(this.message(error));
          this.loadingCandidates.set(false);
        },
      });
  }
  loadLinks(page = 1, id = this.concoursId()): void {
    this.linkRequest?.unsubscribe();
    this.loadingLinks.set(true);
    this.links.set(emptyQcmPage());
    this.linkRequest = this.api
      .qcmLinks(id, this.kind(), this.search, page)
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (response) => {
          this.links.set(response.data);
          this.loadingLinks.set(false);
        },
        error: (error) => {
          this.error.set(this.message(error));
          this.loadingLinks.set(false);
        },
      });
  }
  choose(item: QcmCandidate): void {
    if (this.saving()) return;
    const linked =
      'version' in item
        ? (item as QcmLink)
        : this.links().items.find((link) => link.id === item.id);
    this.selected.set(item);
    this.version.set(linked?.version ?? 0);
    this.selectedOptions.set(linked?.preparation_option_ids ?? []);
    this.error.set('');
  }
  name(option: PreparationOption): string {
    const parent = this.options().find((item) => item.id === option.parent_id),
      lang = this.translations.getActiveLang();
    return (
      (parent ? preparationOptionName(parent, lang) + ' › ' : '') +
      preparationOptionName(option, lang)
    );
  }
  toggle(id: number, checked: boolean): void {
    this.selectedOptions.update((ids) =>
      checked ? [...new Set([...ids, id])] : ids.filter((value) => value !== id),
    );
  }
  save(): void {
    const target = this.selected();
    if (!target || this.saving()) return;
    this.saving.set(true);
    this.error.set('');
    this.api
      .saveQcmLink(
        this.concoursId(),
        this.kind(),
        target.id,
        this.version(),
        this.selectedOptions(),
      )
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.saving.set(false)),
      )
      .subscribe({
        next: () => {
          this.resetSelection();
          this.loadLinks();
        },
        error: (error) => this.error.set(this.message(error)),
      });
  }
  remove(link: QcmLink): void {
    if (this.saving()) return;
    this.saving.set(true);
    this.error.set('');
    this.api
      .removeQcmLink(this.concoursId(), this.kind(), link)
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.saving.set(false)),
      )
      .subscribe({
        next: () => {
          this.resetSelection();
          this.loadLinks();
        },
        error: (error) => this.error.set(this.message(error)),
      });
  }
}
