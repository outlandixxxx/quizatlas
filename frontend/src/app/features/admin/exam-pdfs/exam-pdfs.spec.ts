import { TestBed } from '@angular/core/testing';
import { provideRouter } from '@angular/router';
import { HttpEvent, HttpEventType, HttpResponse, provideHttpClient } from '@angular/common/http';
import { HttpTestingController, provideHttpClientTesting } from '@angular/common/http/testing';
import { TranslocoService, TranslocoTestingModule } from '@jsverse/transloco';
import { Subject as Stream, of, throwError } from 'rxjs';
import en from '../../../../assets/i18n/en.json';
import fr from '../../../../assets/i18n/fr.json';
import ar from '../../../../assets/i18n/ar.json';
import { AdminExamPdfs } from './exam-pdfs';
import { AdminExamPdfApi } from '../services/exam-pdf-admin.api';
import { ConcoursApi } from '../../../core/services/concours-api';
import { SubjectApi } from '../services/subject.api';
import { MajorApi } from '../services/major.api';
import { AdminExamPdf, PdfAction } from '../../../core/models/exam-pdf-admin';
import { ApiResponse } from '../../../core/models/api-response';

const document = (id = 1, extra: Partial<AdminExamPdf> = {}): AdminExamPdf => ({
  id, title: `PDF ${id}`, subject: null, major: null, year: 2024, file_size: '1 KB',
  page_count: null, questions_count: 8, view_url: '', version: 1, concours_id: 1,
  document_type: 'previous_exam', is_active: true, published: false, verified: false,
  workflow_status: 'draft', allowed_actions: ['edit', 'preview', 'verify', 'verify-publish', 'delete'],
  ...extra,
});
const meta = { current_page: 1, last_page: 2, per_page: 15, total: 20 };
const response = (data: AdminExamPdf): ApiResponse<AdminExamPdf> => ({ success: true, message: 'OK', data });
const file = (name: string) => new File(['%PDF-1.7\nFixture\n%%EOF\n'], name, { type: 'application/pdf', lastModified: 1 });
const translations = () => TranslocoTestingModule.forRoot({ langs: { en, fr, ar }, preloadLangs: true,
  translocoConfig: { availableLangs: ['en', 'fr', 'ar'], defaultLang: 'en', reRenderOnLangChange: true } });

describe('PDF Bank administration', () => {
  const api = {
    list: vi.fn(), candidates: vi.fn(), update: vi.fn(), uploadWithProgress: vi.fn(),
    savePreparationOptions: vi.fn(), batch: vi.fn(), transition: vi.fn(), remove: vi.fn(),
  };
  const rows = [document(), document(2, { verified: true, workflow_status: 'verified', is_active: false, allowed_actions: ['edit', 'preview', 'publish'] }),
    document(3, { verified: true, published: true, workflow_status: 'published', allowed_actions: ['edit', 'preview', 'unpublish'], delete_blocked_reason: 'Published records cannot be deleted.' })];
  beforeEach(() => {
    for (const mock of Object.values(api)) mock.mockReset();
    api.list.mockReturnValue(of({ data: { items: rows, meta } }));
    api.candidates.mockReturnValue(of([]));
    api.update.mockReturnValue(of(response(rows[0])));
    api.uploadWithProgress.mockImplementation(() => of(new HttpResponse({ body: response(rows[0]) })));
    api.transition.mockReturnValue(of({ data: { document: rows[0], skipped: false } }));
    api.remove.mockReturnValue(of({ data: { id: 1 } }));
    TestBed.configureTestingModule({ imports: [AdminExamPdfs, translations()], providers: [
      provideRouter([]), provideHttpClient(),
      { provide: AdminExamPdfApi, useValue: api },
      { provide: ConcoursApi, useValue: { references: () => of([]) } },
      { provide: SubjectApi, useValue: { listAll: () => of([]) } },
      { provide: MajorApi, useValue: { listAll: () => of([]) } },
    ] });
  });
  function editor() {
    const fixture = TestBed.createComponent(AdminExamPdfs);
    fixture.detectChanges();
    return { fixture, component: fixture.componentInstance };
  }
  function pick(component: AdminExamPdfs, files: File[]) {
    component.onFileSelected({ target: { files, value: '' } } as unknown as Event);
  }
  it.each(['fr', 'ar'] as const)('renders %s status labels and only server-permitted row transitions', (lang) => {
    TestBed.inject(TranslocoService).setActiveLang(lang);
    const { fixture } = editor();
    const dom: HTMLElement = fixture.nativeElement;
    const tableRows = dom.querySelectorAll('tbody tr');
    const labels = { fr, ar }[lang].pdfBank;
    expect(tableRows[0].textContent).toContain(labels.actions.verify);
    expect(tableRows[1].textContent).toContain(labels.states.verified);
    expect(tableRows[2].textContent).toContain(labels.actions.unpublish);
    expect(tableRows[2].textContent).not.toContain(labels.actions.verify);
    expect(tableRows[2].querySelector<HTMLButtonElement>('.delete-btn')?.disabled).toBe(true);
  });
  it('selects only the current page and clears selection on page, search or filter changes', () => {
    const { fixture, component } = editor();
    component.toggleSelection(1, true);
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('thead input').indeterminate).toBe(true);
    component.selectPage(true);
    expect(component.selectedIds()).toEqual([1, 2, 3]);
    component.goToPage(2);
    expect(component.selectedIds()).toEqual([]);
    expect(api.list).toHaveBeenLastCalledWith(2, '', {});
    component.toggleSelection(2, true);
    component.onSearchChange('summary');
    expect(component.selectedIds()).toEqual([]);
    component.setFilter('document_type', 'summary');
    expect(api.list).toHaveBeenLastCalledWith(1, 'summary', { document_type: 'summary' });
  });
  it('confirms bulk publication and shows partial successes, unchanged records and specific errors', () => {
    api.batch.mockReturnValue(of({ data: { counts: { succeeded: 1, skipped: 1, failed: 1 }, results: [
      { id: 1, status: 'succeeded' }, { id: 2, status: 'failed', message: '<script>Missing source exam</script>' }, { id: 3, status: 'skipped' },
    ] } }));
    const { fixture, component } = editor();
    component.selectPage(true);
    component.requestAction('verify-publish');
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('[role=dialog]')?.textContent).toContain(en.pdfBank.confirmPublish);
    expect(api.batch).not.toHaveBeenCalled();
    component.confirmAction();
    expect(api.batch).not.toHaveBeenCalled();
    component.reviewed.set(true);
    component.confirmAction();
    fixture.detectChanges();
    expect(api.batch).toHaveBeenCalledWith(rows, 'verify-publish');
    expect(component.selectedIds()).toEqual([]);
    expect(component.results()?.counts).toEqual({ succeeded: 1, skipped: 1, failed: 1 });
    expect(fixture.nativeElement.querySelector('.operation-results')?.textContent).toContain('Missing source exam');
    expect(fixture.nativeElement.querySelector('.operation-results script')).toBeNull();
  });
  it.each(['verify', 'publish', 'verify-publish', 'unpublish'] as PdfAction[])('uses the confirmed single %s workflow', (action) => {
    const { component } = editor();
    const pdf = document(1, { allowed_actions: [action] });
    component.requestAction(action, pdf);
    expect(api.transition).not.toHaveBeenCalled();
    component.reviewed.set(true);
    component.confirmAction();
    expect(api.transition).toHaveBeenCalledWith(pdf, action);
    expect(api.batch).not.toHaveBeenCalled();
  });
  it('requires delete confirmation, blocks unsafe rows and retains errors returned by the server', () => {
    const { component } = editor();
    component.requestAction('delete', rows[2]);
    expect(component.errorMsg()).toContain('cannot be deleted');
    expect(api.remove).not.toHaveBeenCalled();
    component.requestAction('delete', rows[0]);
    expect(api.remove).not.toHaveBeenCalled();
    api.remove.mockReturnValue(throwError(() => ({ error: { message: 'This PDF is now shared.' } })));
    component.confirmAction();
    expect(component.confirmationError()).toBe('This PDF is now shared.');
    expect(component.confirmation()).not.toBeNull();
  });
  it('uploads one PDF per request with independent titles, real progress, and retries only failures', async () => {
    const streams = [new Stream<HttpEvent<ApiResponse<AdminExamPdf>>>(), new Stream<HttpEvent<ApiResponse<AdminExamPdf>>>()];
    api.uploadWithProgress.mockReturnValueOnce(streams[0]).mockReturnValueOnce(streams[1]);
    const { fixture, component } = editor();
    component.openUploadModal();
    const one = file('one.pdf');
    const two = file('two.pdf');
    pick(component, [one, two, one]);
    expect(component.uploadQueue()).toHaveLength(2);
    expect(component.errorMsg()).toBe(en.pdfBank.duplicateFile);
    component.setUploadTitle(component.uploadQueue()[0].id, 'Titre du premier PDF');
    component.setUploadTitle(component.uploadQueue()[1].id, 'عنوان الوثيقة الثانية');
    component.form.controls.publish.setValue(true);
    component.upload();
    expect(api.uploadWithProgress).toHaveBeenCalledTimes(1);
    streams[0].next({ type: HttpEventType.UploadProgress, loaded: 10, total: 20 });
    expect(component.uploadQueue()[0].progress).toBe(50);
    streams[0].next(new HttpResponse({ body: response(document()) }));
    await vi.waitFor(() => expect(api.uploadWithProgress).toHaveBeenCalledTimes(2));
    streams[1].error({ error: { errors: { file: ['Invalid PDF signature.'] } } });
    await vi.waitFor(() => expect(component.isSaving()).toBe(false));
    expect(component.uploadQueue().map((entry) => entry.state)).toEqual(['succeeded', 'failed']);
    expect(component.uploadQueue()[1].error).toBe('Invalid PDF signature.');
    expect(component.isModalOpen()).toBe(true);
    const first = api.uploadWithProgress.mock.calls[0][0] as FormData;
    const second = api.uploadWithProgress.mock.calls[1][0] as FormData;
    expect(first.get('title')).toBe('Titre du premier PDF');
    expect(second.get('title')).toBe('عنوان الوثيقة الثانية');
    for (const body of [first, second]) {
      expect(body.getAll('file')).toHaveLength(1);
      expect(body.has('files[]')).toBe(false);
      expect(body.get('publish')).toBe('0');
    }
    component.upload();
    await vi.waitFor(() => expect(component.isSaving()).toBe(false));
    expect(api.uploadWithProgress).toHaveBeenCalledTimes(3);
    expect(api.uploadWithProgress.mock.calls[2][0].get('title')).toBe('عنوان الوثيقة الثانية');
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelectorAll('.upload-row[data-state=succeeded]')).toHaveLength(2);
  });
  it('validates file size and per-file titles and allows removal before uploading', async () => {
    const { component } = editor();
    component.openUploadModal();
    const large = file('large.pdf');
    Object.defineProperty(large, 'size', { value: 20 * 1024 * 1024 + 1 });
    pick(component, [large, file('title-needed.pdf'), file('remove.pdf')]);
    expect(component.uploadQueue()[0].state).toBe('invalid');
    expect(component.uploadQueue()[0].error).toBe(en.pdfBank.invalidFile);
    component.setUploadTitle(component.uploadQueue()[1].id, '   ');
    component.removeUpload(component.uploadQueue()[2].id);
    component.upload();
    await vi.waitFor(() => expect(component.isSaving()).toBe(false));
    expect(api.uploadWithProgress).not.toHaveBeenCalled();
    expect(component.uploadQueue()[1].error).toBe(en.pdfBank.titleRequired);
  });
  it('omits hidden historical fields when editing and never replaces the existing file', () => {
    const { fixture, component } = editor();
    component.openUploadModal(document(1, { source_url: 'https://original.example.test', attribution: 'Historical source', questions_count: 15 }));
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('[formControlName=questions_count]')).toBeNull();
    expect(fixture.nativeElement.querySelector('[formControlName=source_url]')).toBeNull();
    expect(fixture.nativeElement.querySelector('[formControlName=attribution]')).toBeNull();
    component.form.controls.title.setValue('Edited title');
    component.upload();
    const body = api.update.mock.calls[0][1] as FormData;
    for (const key of ['questions_count', 'source_url', 'attribution', 'file']) expect(body.has(key)).toBe(false);
    expect(body.get('version')).toBe('1');
  });
  it('keeps PDF Bank translation keys aligned in French, Arabic and English', () => {
    const keys = (value: object): string[] => Object.entries(value).flatMap(([key, val]) => typeof val === 'string' ? [key] : keys(val).map((child) => key + '.' + child)).sort();
    expect(keys(fr.pdfBank)).toEqual(keys(en.pdfBank));
    expect(keys(ar.pdfBank)).toEqual(keys(en.pdfBank));
  });
});

describe('PDF Bank HTTP contracts', () => {
  beforeEach(() => TestBed.configureTestingModule({ providers: [provideHttpClient(), provideHttpClientTesting()] }));
  afterEach(() => TestBed.inject(HttpTestingController).verify());
  it('reports upload events for a single multipart file without setting a multipart boundary manually', () => {
    const http = TestBed.inject(HttpTestingController);
    const body = new FormData();
    body.set('file', file('one.pdf'));
    body.set('title', 'My PDF');
    const events: HttpEvent<ApiResponse<AdminExamPdf>>[] = [];
    TestBed.inject(AdminExamPdfApi).uploadWithProgress(body).subscribe((event) => events.push(event));
    const request = http.expectOne((req) => req.url.endsWith('/exam-pdfs'));
    expect(request.request.reportProgress).toBe(true);
    expect(request.request.body).toBe(body);
    expect(request.request.headers.has('Content-Type')).toBe(false);
    request.event({ type: HttpEventType.UploadProgress, loaded: 1, total: 2 });
    request.flush(response(document()));
    expect(events.some((event) => event.type === HttpEventType.UploadProgress)).toBe(true);
  });
  it('sends versions and confirmations for transitions, bounded batches and safe deletion', () => {
    const api = TestBed.inject(AdminExamPdfApi);
    const http = TestBed.inject(HttpTestingController);
    api.transition(document(), 'verify-publish').subscribe();
    const single = http.expectOne((req) => req.url.endsWith('/admin/exam-pdfs/1/verify-publish'));
    expect(single.request.body).toEqual({ version: 1, distribution_confirmed: true, publication_confirmed: true });
    single.flush({ data: { document: document(), skipped: false } });
    api.batch([document()], 'publish').subscribe();
    const batch = http.expectOne((req) => req.url.endsWith('/admin/exam-pdfs/batch'));
    expect(batch.request.body).toEqual({ action: 'publish', items: [{ id: 1, version: 1 }], distribution_confirmed: false, publication_confirmed: true });
    batch.flush({ data: { counts: { succeeded: 1, failed: 0, skipped: 0 }, results: [] } });
    api.remove(document()).subscribe();
    const deletion = http.expectOne((req) => req.url.endsWith('/admin/exam-pdfs/1'));
    expect(deletion.request.method).toBe('DELETE');
    expect(deletion.request.body).toEqual({ version: 1, confirmed: true });
    deletion.flush({ data: { id: 1 } });
  });
});
