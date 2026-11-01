import { Component, DestroyRef, effect, inject, input, signal, untracked } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { firstValueFrom, finalize, Subscription } from 'rxjs';
import { ConcoursApi, WizardPdfLink } from '../../../core/services/concours-api';
import { AdminExamPdfApi } from '../services/exam-pdf-admin.api';
import { AdminExamPdf, AdminExamPdfListMeta } from '../../../core/models/exam-pdf-admin';

export type WizardPdfKind = 'previous_exam' | 'correction' | 'summary' | 'preparation_guide';

@Component({
  selector: 'app-concours-pdf-wizard',
  standalone: true,
  imports: [FormsModule],
  templateUrl: './concours-pdf-wizard.html',
  styleUrl: './concours-pdf-wizard.scss',
})
export class ConcoursPdfWizard {
  private readonly api = inject(ConcoursApi);
  private readonly bank = inject(AdminExamPdfApi);
  private readonly destroy = inject(DestroyRef);
  readonly concoursId = input.required<number>();
  readonly kinds = input.required<WizardPdfKind[]>();
  readonly displayedYear = input<number | null>(null);
  readonly kind = signal<WizardPdfKind>('previous_exam');
  readonly available = signal<AdminExamPdf[]>([]);
  readonly linked = signal<WizardPdfLink[]>([]);
  readonly meta = signal<AdminExamPdfListMeta | null>(null);
  readonly selected = signal<number[]>([]);
  readonly loading = signal(false);
  readonly busy = signal(false);
  readonly error = signal('');
  readonly success = signal('');
  readonly files = signal<File[]>([]);
  readonly originalPapers = signal<AdminExamPdf[]>([]);
  readonly selectedLinked = signal<number[]>([]);
  private pageRequest?: Subscription;
  search = '';
  year: number | null = null;
  correctionExamId: number | null = null;

  constructor() {
    effect(() => {
      const id = this.concoursId();
      const kinds = this.kinds();
      untracked(() => {
        if (!id || !kinds.length) return;
        this.kind.set(kinds[0]);
        this.year = this.displayedYear();
        this.load(1);
        this.loadLinked();
      });
    });
  }

  changeType(value: WizardPdfKind): void {
    if (this.busy() || !this.kinds().includes(value)) return;
    this.kind.set(value);
    this.search = '';
    this.selected.set([]);
    this.selectedLinked.set([]);
    this.correctionExamId = null;
    this.files.set([]);
    this.error.set('');
    this.load(1);
    if (value === 'correction') this.loadOriginalPapers();
  }

  load(page = 1): void {
    this.pageRequest?.unsubscribe();
    this.loading.set(true);
    this.error.set('');
    this.pageRequest = this.bank.list(page, this.search, { document_type: this.kind(), per_page: 20 })
      .pipe(takeUntilDestroyed(this.destroy), finalize(() => this.loading.set(false)))
      .subscribe({
        next: (r) => { this.available.set(r.data.items); this.meta.set(r.data.meta); },
        error: () => this.error.set('Impossible de charger la banque PDF.'),
      });
  }

  loadLinked(): void {
    this.api.wizardDetails(this.concoursId()).pipe(takeUntilDestroyed(this.destroy)).subscribe({
      next: (r) => this.linked.set(r.data.pdfs),
      error: () => this.error.set('Impossible de charger les documents associés.'),
    });
  }

  loadOriginalPapers(): void {
    this.bank.candidates(this.concoursId()).pipe(takeUntilDestroyed(this.destroy)).subscribe({
      next: (items) => this.originalPapers.set(items),
      error: () => this.error.set('Impossible de charger les examens pour les corrigés.'),
    });
  }

  toggle(id: number, selected: boolean): void {
    this.selected.update((ids) => selected ? [...new Set([...ids, id])] : ids.filter((x) => x !== id));
  }

  isLinked(id: number): boolean {
    return this.linked().some((pdf) => pdf.id === id);
  }

  toggleLinked(id: number, checked: boolean): void {
    this.selectedLinked.update((ids) => checked ? [...new Set([...ids, id])] : ids.filter((value) => value !== id));
  }

  removeSelectedLinks(): void {
    const ids = this.selectedLinked();
    if (!ids.length || this.busy()) return;
    this.busy.set(true);
    this.error.set('');
    this.api.unlinkPdfs(this.concoursId(), ids)
      .pipe(takeUntilDestroyed(this.destroy), finalize(() => this.busy.set(false)))
      .subscribe({
        next: () => {
          this.selectedLinked.set([]);
          this.success.set('Associations supprimées. Les PDF originaux sont conservés.');
          this.loadLinked();
        },
        error: (err) => this.error.set(err.error?.message ?? 'Impossible de supprimer les associations.'),
      });
  }

  linkedOfKind(): WizardPdfLink[] {
    return this.linked().filter((pdf) => pdf.document_type === this.kind());
  }

  attach(): void {
    const ids = this.selected();
    if (!ids.length || this.busy()) return;
    this.busy.set(true);
    this.error.set('');
    this.api.attachPdfs(this.concoursId(), ids)
      .pipe(takeUntilDestroyed(this.destroy), finalize(() => this.busy.set(false)))
      .subscribe({
        next: () => { this.selected.set([]); this.success.set('Documents associés sans duplication.'); this.loadLinked(); },
        error: (err) => this.error.set(err.error?.message || Object.values(err.error?.errors ?? {}).flat().join(' ') || 'Association impossible.'),
      });
  }

  unlink(pdf: WizardPdfLink): void {
    if (this.busy() || pdf.concours_id === this.concoursId()) return;
    this.busy.set(true);
    this.api.unlinkPdfs(this.concoursId(), [pdf.id])
      .pipe(takeUntilDestroyed(this.destroy), finalize(() => this.busy.set(false)))
      .subscribe({
        next: () => { this.success.set('Association supprimée. Le PDF original reste dans la banque.'); this.loadLinked(); },
        error: (err) => this.error.set(err.error?.message ?? 'Suppression du lien impossible.'),
      });
  }

  pickFiles(event: Event): void {
    const input = event.target as HTMLInputElement;
    const files = Array.from(input.files ?? []);
    input.value = '';
    if (files.length > 15 || files.some((f) => f.size > 20 * 1024 * 1024 || !/\.pdf$/i.test(f.name) || (f.type && f.type !== 'application/pdf'))) {
      this.files.set([]);
      this.error.set('Sélectionnez au maximum 15 PDF de 20 Mio chacun.');
      return;
    }
    this.error.set('');
    this.files.set(files);
  }

  async upload(): Promise<void> {
    if (!this.files().length || this.busy()) return;
    const kind = this.kind();
    const exam = kind === 'correction' ? this.originalPapers().find((row) => row.id === this.correctionExamId) : null;
    if (kind === 'correction' && !exam) {
      this.error.set('Choisissez d’abord l’examen correspondant au corrigé.');
      return;
    }
    this.busy.set(true);
    this.error.set('');
    const created: number[] = [];
    try {
      for (const file of this.files()) {
        const form = new FormData();
        form.set('file', file);
        form.set('title', file.name.replace(/\.pdf$/i, ''));
        form.set('document_type', kind);
        form.set('concours_id', String(this.concoursId()));
        form.set('is_active', '1');
        form.set('publish', '0');
        if (exam) {
          form.set('corrects_exam_pdf_id', String(exam.id));
          if (exam.year !== null) form.set('year', String(exam.year));
        } else if (this.year !== null) {
          form.set('year', String(this.year));
        }
        const response = await firstValueFrom(this.bank.upload(form));
        created.push(response.data.id);
      }
      if (created.length) await firstValueFrom(this.api.attachPdfs(this.concoursId(), created));
      this.files.set([]);
      this.success.set(`${created.length} PDF importé(s) et associé(s). Vérifiez les droits de diffusion puis publiez-les depuis Exam PDFs.`);
      this.loadLinked();
      this.load(1);
      if (kind === 'previous_exam') this.loadOriginalPapers();
    } catch (error: any) {
      this.error.set(`${created.length} PDF déjà importé(s). ${error?.error?.message ?? 'Import interrompu. Les fichiers réussis restent dans la banque.'}`);
      this.loadLinked();
    } finally {
      this.busy.set(false);
    }
  }
}
