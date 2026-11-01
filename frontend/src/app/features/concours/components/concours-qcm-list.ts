import { Component, DestroyRef, computed, effect, inject, input, signal, untracked } from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { RouterLink } from '@angular/router';
import { TranslocoPipe } from '@jsverse/transloco';
import { Subscription } from 'rxjs';
import { ConcoursApi } from '../../../core/services/concours-api';
import { ConcoursQcmFilters, ConcoursQcmPage, emptyQcmPage } from '../../../core/models/concours-qcm';
import { ConcoursNotice } from './concours-notice';
import { LanguageService } from '../../../core/services/language';

@Component({
  selector: 'app-concours-qcm-list',
  standalone: true,
  imports: [RouterLink, TranslocoPipe, ConcoursNotice],
  templateUrl: './concours-qcm-list.html',
  styleUrls: ['./pdf-resource-card.scss', './concours-qcm-list.scss'],
})
export class ConcoursQcmList {
  private readonly api = inject(ConcoursApi);
  private readonly destroy = inject(DestroyRef);
  private readonly language = inject(LanguageService);
  readonly labels = computed(() => {
    const lang = this.language.language();
    if (lang === 'ar') return {
      group: 'فلاتر الأسئلة', major: 'التخصص', allMajors: 'جميع التخصصات',
      subject: 'المادة', allSubjects: 'جميع المواد', level: 'المستوى', allLevels: 'جميع المستويات',
      search: 'البحث عن اختبار', searchPlaceholder: 'عنوان الاختبار', submit: 'بحث',
      clear: 'مسح الفلاتر', results: 'اختبارات متاحة',
    };
    if (lang === 'en') return {
      group: 'Quiz filters', major: 'Major', allMajors: 'All majors',
      subject: 'Subject', allSubjects: 'All subjects', level: 'Level', allLevels: 'All levels',
      search: 'Search quizzes', searchPlaceholder: 'Quiz title', submit: 'Search',
      clear: 'Clear filters', results: 'quizzes found',
    };
    return {
      group: 'Filtres QCM', major: 'Filière', allMajors: 'Toutes les filières',
      subject: 'Matière', allSubjects: 'Toutes les matières', level: 'Niveau', allLevels: 'Tous les niveaux',
      search: 'Rechercher un QCM', searchPlaceholder: 'Titre du QCM', submit: 'Rechercher',
      clear: 'Effacer les filtres', results: 'QCM trouvés',
    };
  });
  readonly slug = input.required<string>();
  readonly option = input('');
  readonly initial = input<ConcoursQcmPage>();
  readonly data = signal<ConcoursQcmPage>(emptyQcmPage());
  readonly loading = signal(false);
  readonly failed = signal(false);
  readonly majorId = signal('');
  readonly subjectId = signal('');
  readonly difficulty = signal('');
  readonly searchDraft = signal('');
  readonly search = signal('');
  readonly facets = signal<ConcoursQcmFilters>({ majors: [], subjects: [], levels: [] });
  readonly visibleSubjects = computed(() =>
    this.facets().subjects.filter((subject) => !this.majorId() || String(subject.major_id) === this.majorId()),
  );

  private request?: Subscription;
  private previousSlug = '';
  constructor() {
    effect(() => {
      const slug = this.slug(),
        option = this.option(),
        initial = this.initial();
      this.request?.unsubscribe();
      this.failed.set(false);
      const first = slug !== this.previousSlug;
      this.previousSlug = slug;
      if (first) {
        this.majorId.set('');
        this.subjectId.set('');
        this.difficulty.set('');
        this.search.set('');
        this.searchDraft.set('');
      }

      if (!initial) {
        this.data.set(emptyQcmPage());
        this.facets.set({ majors: [], subjects: [], levels: [] });
        this.loading.set(false);
        return;
      }
      if (first && !option) {
        this.data.set(initial);
        this.facets.set(initial.filters ?? { majors: [], subjects: [], levels: [] });
        this.loading.set(false);
        return;
      }
      untracked(() => this.load(1, slug, option));
    });
  }
  load(page = 1, slug = this.slug(), option = this.option()): void {
    this.request?.unsubscribe();
    this.loading.set(true);
    this.failed.set(false);
    this.data.set(emptyQcmPage());
    this.request = this.api
      .qcm(slug, option, page, {
        major_id: this.majorId() ? Number(this.majorId()) : undefined,
        subject_id: this.subjectId() ? Number(this.subjectId()) : undefined,
        difficulty: this.difficulty(),
        q: this.search(),
      })
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (response) => {
          this.data.set(response.data);
          this.facets.set(response.data.filters ?? { majors: [], subjects: [], levels: [] });
          this.loading.set(false);
        },
        error: () => {
          this.failed.set(true);
          this.loading.set(false);
        },
      });
  }
  selectMajor(value: string): void {
    this.majorId.set(value);
    this.subjectId.set('');
    this.load(1);
  }
  selectSubject(value: string): void {
    this.subjectId.set(value);
    this.load(1);
  }
  selectDifficulty(value: string): void {
    this.difficulty.set(value);
    this.load(1);
  }
  applySearch(): void {
    this.search.set(this.searchDraft().trim());
    this.load(1);
  }
  clearFilters(): void {
    this.majorId.set('');
    this.subjectId.set('');
    this.difficulty.set('');
    this.searchDraft.set('');
    this.search.set('');
    this.load(1);
  }
  hasFilters(): boolean {
    return !!(this.majorId() || this.subjectId() || this.difficulty() || this.search());
  }
  go(page: number): void {
    if (!this.loading() && page >= 1 && page <= this.data().meta.last_page) this.load(page);
  }
}
