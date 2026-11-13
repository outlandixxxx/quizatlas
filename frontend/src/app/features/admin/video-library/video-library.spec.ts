import { TestBed } from '@angular/core/testing';
import { TranslocoService, TranslocoTestingModule } from '@jsverse/transloco';
import { Subject, of, throwError } from 'rxjs';
import en from '../../../../assets/i18n/en.json';
import fr from '../../../../assets/i18n/fr.json';
import ar from '../../../../assets/i18n/ar.json';
import { VideoLibraryApi } from '../../../core/services/video-library-api';
import { VideoLibraryInput, VideoLibraryVideo } from '../../../core/models/video-library';
import { AdminVideoLibrary } from './video-library';

const input: VideoLibraryInput = {
  url: 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', title: 'A real video title',
  format: 'short', category: 'quiz', template: 'niveau-concours', language: 'fr', status: 'draft',
};
const video: VideoLibraryVideo = {
  ...input, id: 1, youtube_id: 'dQw4w9WgXcQ', thumbnail_url: '/api/v1/public/videos/1/thumbnail',
};
const response = <T>(data: T) => ({ success: true, message: 'OK', data });
const meta = { current_page: 1, last_page: 2, per_page: 15, total: 20 };

describe('Video library administration', () => {
  const api = { list: vi.fn(), review: vi.fn(), import: vi.fn(), update: vi.fn(), remove: vi.fn() };
  beforeEach(() => {
    for (const mock of Object.values(api)) mock.mockReset();
    api.list.mockReturnValue(of(response({ items: [video], meta })));
    api.review.mockReturnValue(of(response({ rows: [{ ...input, index: 0, youtube_id: video.youtube_id, existing: null, errors: {} }] })));
    api.import.mockReturnValue(of(response({ rows: [{ index: 0, status: 'created', video }] })));
    api.update.mockReturnValue(of(response(video)));
    api.remove.mockReturnValue(of(response({ id: 1 })));
    TestBed.configureTestingModule({
      imports: [AdminVideoLibrary, TranslocoTestingModule.forRoot({
        langs: { en, fr, ar }, preloadLangs: true,
        translocoConfig: { availableLangs: ['en', 'fr', 'ar'], defaultLang: 'en', reRenderOnLangChange: true },
      })],
      providers: [{ provide: VideoLibraryApi, useValue: api }],
    });
  });

  function setup() {
    const fixture = TestBed.createComponent(AdminVideoLibrary);
    fixture.detectChanges();
    return { fixture, component: fixture.componentInstance };
  }

  it('reviews one or several URLs with shared defaults before any saving request', () => {
    const { component } = setup();
    component.defaults.language = 'ar';
    component.defaults.template = 'language-day';
    component.urls = ` ${input.url}\r\nhttps://youtu.be/aqz-KE-bpKQ\n `;
    component.review();
    expect(api.review).toHaveBeenCalledWith([input.url, 'https://youtu.be/aqz-KE-bpKQ'], component.defaults);
    expect(api.import).not.toHaveBeenCalled();
    expect(component.rows()[0].youtube_id).toBe(video.youtube_id);
  });

  it('bounds review requests at 50 rows and prevents saving an unchecked URL change', () => {
    const { component } = setup();
    component.urls = Array(51).fill(input.url).join('\n');
    component.review();
    expect(api.review).not.toHaveBeenCalled();
    component.urls = input.url;
    component.review();
    const row = component.rows()[0];
    row.url = 'https://youtu.be/aqz-KE-bpKQ';
    component.changed(row, 'url');
    expect(component.readyCount()).toBe(0);
    component.saveReviewed();
    expect(api.import).not.toHaveBeenCalled();
  });

  it('preserves a manually edited title, classification and language while correcting an invalid URL', () => {
    api.review.mockReturnValueOnce(of(response({ rows: [{ ...input, url: 'invalid', index: 0, errors: { url: ['Invalid URL.'] } }] })));
    const { component } = setup();
    component.urls = 'invalid';
    component.review();
    const row = component.rows()[0];
    row.url = input.url;
    row.title = 'My manually corrected Arabic title';
    row.language = 'ar';
    row.category = 'facts';
    row.template = 'facts-short';
    component.changed(row, 'url');
    component.checkRow(row);
    const corrected = component.rows()[0];
    expect(corrected.title).toBe('My manually corrected Arabic title');
    expect(corrected.language).toBe('ar');
    expect(corrected.category).toBe('facts');
    expect(corrected.template).toBe('facts-short');
    expect(corrected.youtube_id).toBe(video.youtube_id);
    expect(corrected.errors).toEqual({});
    expect(component.readyCount()).toBe(1);
  });

  it('allows manual metadata fallback but does not save without an entered title', () => {
    api.review.mockReturnValue(of(response({ rows: [{ ...input, title: '', index: 0, youtube_id: video.youtube_id, metadata_error: 'metadata_not_configured' }] })));
    const { component, fixture } = setup();
    component.urls = input.url;
    component.review();
    expect(component.readyCount()).toBe(0);
    component.rows()[0].title = 'Manually entered title';
    component.changed(component.rows()[0], 'title');
    fixture.detectChanges();
    expect(component.readyCount()).toBe(1);
    component.saveReviewed();
    expect(api.import).toHaveBeenCalledWith([{ ...input, title: 'Manually entered title' }]);
  });

  it('shows existing equivalent URLs without importing or updating the matching record', () => {
    api.review.mockReturnValue(of(response({ rows: [{ ...input, index: 0, youtube_id: video.youtube_id, existing: video }] })));
    const { component, fixture } = setup();
    component.urls = input.url;
    component.review();
    fixture.detectChanges();
    expect(component.readyCount()).toBe(0);
    expect(fixture.nativeElement.querySelector('.validation-cell').textContent).toContain(en.videoLibraryAdmin.existing);
    component.saveReviewed();
    expect(api.import).not.toHaveBeenCalled();
    expect(api.update).not.toHaveBeenCalled();
  });

  it('identifies equivalent URLs within the review, imports once and resolves the other row to an existing match', () => {
    api.review.mockReturnValue(of(response({ rows: [
      { ...input, index: 0, youtube_id: video.youtube_id },
      { ...input, url: `https://youtu.be/${video.youtube_id}`, title: 'Keep this alternate title',
        index: 1, youtube_id: video.youtube_id, duplicate_in_batch: true },
    ] })));
    const { component, fixture } = setup();
    component.urls = `${input.url}\nhttps://youtu.be/${video.youtube_id}`;
    component.review();
    fixture.detectChanges();
    expect(component.readyCount()).toBe(1);
    expect(component.isBatchDuplicate(component.rows()[1])).toBe(true);
    expect(fixture.nativeElement.querySelector('.batch-duplicate').textContent).toContain(en.videoLibraryAdmin.duplicateBatch);
    component.saveReviewed();
    expect(api.import).toHaveBeenCalledWith([input]);
    expect(component.rows()[0].state).toBe('created');
    expect(component.rows()[1].state).toBe('existing');
    expect(component.rows()[1].existing?.id).toBe(video.id);
    expect(component.rows()[1].title).toBe('Keep this alternate title');
    expect(component.readyCount()).toBe(0);
    expect(api.update).not.toHaveBeenCalled();
  });

  it('preserves failed rows and reports successful rows after a partial bulk import', () => {
    api.review.mockReturnValue(of(response({ rows: [
      { ...input, index: 0, youtube_id: video.youtube_id },
      { ...input, title: 'Keep this title', url: 'https://youtu.be/aqz-KE-bpKQ', index: 1, youtube_id: 'aqz-KE-bpKQ' },
    ] })));
    api.import.mockReturnValue(of(response({ rows: [
      { index: 0, status: 'created', video },
      { index: 1, status: 'invalid', errors: { title: ['Please review this title.'] } },
    ] })));
    const { component } = setup();
    component.urls = `${input.url}\nhttps://youtu.be/aqz-KE-bpKQ`;
    component.review();
    component.saveReviewed();
    expect(component.rows()[0].state).toBe('created');
    expect(component.rows()[1].title).toBe('Keep this title');
    expect(component.rows()[1].errors).toEqual({ title: ['Please review this title.'] });
    expect(component.readyCount()).toBe(1);
  });

  it('prevents repeated imports in flight and accepts an existing match from a concurrent save', () => {
    const pending = new Subject<ReturnType<typeof response<{ rows: unknown[] }>>>();
    api.import.mockReturnValue(pending);
    const { component } = setup();
    component.urls = input.url;
    component.review();
    component.saveReviewed();
    component.saveReviewed();
    expect(api.import).toHaveBeenCalledTimes(1);
    expect(component.saving()).toBe(true);
    pending.next(response({ rows: [{ index: 0, status: 'existing', video }] }));
    pending.complete();
    expect(component.saving()).toBe(false);
    expect(component.rows()[0].state).toBe('existing');
    expect(api.update).not.toHaveBeenCalled();
  });

  it('preserves entered review data after a network failure so retry is safe', () => {
    api.import.mockReturnValueOnce(throwError(() => new Error('offline')));
    const { component } = setup();
    component.urls = input.url;
    component.review();
    component.rows()[0].title = 'Do not lose this title';
    component.saveReviewed();
    expect(component.rows()[0].title).toBe('Do not lose this title');
    expect(component.rows()[0].state).toBe('review');
    expect(component.error()).toBe('videoLibraryAdmin.saveError');
    component.saveReviewed();
    expect(component.rows()[0].state).toBe('created');
  });

  it('loads the existing classification for editing, keeps identity readonly and retains errors', () => {
    const { component, fixture } = setup();
    component.openEdit(video);
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('input[name=edit-url]').readOnly).toBe(true);
    expect(component.editForm.template).toBe('niveau-concours');
    component.editForm.title = 'Updated title';
    api.update.mockReturnValueOnce(throwError(() => ({ error: { errors: { title: ['Invalid title.'] } } })));
    component.saveEdit();
    expect(component.editForm.title).toBe('Updated title');
    expect(component.editErrors()).toEqual({ title: ['Invalid title.'] });
    component.saveEdit();
    expect(api.update).toHaveBeenLastCalledWith(1, { ...input, title: 'Updated title' });
    expect(component.editing()).toBeNull();
  });

  it('publishes and unpublishes through the API and requires explicit removal confirmation', () => {
    const { component } = setup();
    component.changePublication(video);
    expect(api.update).toHaveBeenLastCalledWith(1, { ...input, status: 'published' });
    component.changePublication({ ...video, status: 'published' });
    expect(api.update).toHaveBeenLastCalledWith(1, { ...input, status: 'draft' });
    expect(api.remove).not.toHaveBeenCalled();
    component.pendingDelete.set(video);
    expect(api.remove).not.toHaveBeenCalled();
    component.remove();
    expect(api.remove).toHaveBeenCalledWith(1);
    expect(component.pendingDelete()).toBeNull();
  });

  it.each(['fr', 'ar'] as const)('renders %s labels and direction while preserving content language', (language) => {
    TestBed.inject(TranslocoService).setActiveLang(language);
    const { fixture, component } = setup();
    const translations = { fr, ar }[language];
    expect(fixture.nativeElement.querySelector('h1').textContent).toContain(translations.videoLibraryAdmin.title);
    expect(fixture.nativeElement.querySelector('.video-library-admin').getAttribute('dir')).toBe(language === 'ar' ? 'rtl' : 'ltr');
    expect(component.defaults.language).toBe('fr');
  });

  it('renders titles and per-row server errors safely as text, and bounds the catalogue to one page', () => {
    const unsafe = '<img src=x onerror=alert(1)>';
    api.list.mockReturnValue(of(response({ items: [{ ...video, title: unsafe }], meta })));
    api.review.mockReturnValue(of(response({ rows: [{ ...input, index: 0, errors: { url: [unsafe] } }] })));
    const { fixture, component } = setup();
    component.urls = 'invalid';
    component.review();
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('img')).toBeNull();
    expect(fixture.nativeElement.textContent).toContain(unsafe);
    component.search = 'Math';
    component.publication = 'published';
    component.fetch(2);
    expect(api.list).toHaveBeenLastCalledWith({ q: 'Math', status: 'published', page: 2, per_page: 15 }, true);
  });
});
