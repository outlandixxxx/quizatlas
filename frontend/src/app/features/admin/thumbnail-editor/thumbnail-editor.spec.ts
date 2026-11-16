import { TestBed } from '@angular/core/testing';
import { TranslocoService } from '@jsverse/transloco';
import { of, Subject, throwError } from 'rxjs';
import { componentTestConfig } from '../../../../testing/component-test';
import { LocalRenderApi } from '../services/local-render.api';
import { ThumbnailReview, thumbnailPreviewDataUrl } from '../services/thumbnail.models';
import { ThumbnailEditor } from './thumbnail-editor';
import { thumbnailFixture } from './testing/thumbnail-fixture';
import fr from '../../../../assets/i18n/fr.json';
import ar from '../../../../assets/i18n/ar.json';

describe('Reusable video thumbnail editor', () => {
  const renderer = { thumbnailOptions: vi.fn(), thumbnailPreview: vi.fn() };
  beforeEach(() => {
    renderer.thumbnailOptions.mockReset(); renderer.thumbnailPreview.mockReset();
    TestBed.configureTestingModule({ ...componentTestConfig(ThumbnailEditor), providers: [
      ...componentTestConfig(ThumbnailEditor).providers!, { provide: LocalRenderApi, useValue: renderer },
    ] });
  });
  function editor(review = thumbnailFixture()) {
    const fixture = TestBed.createComponent(ThumbnailEditor);
    fixture.componentRef.setInput('document', { questions: [{ id: 8, text: 'Une question réelle ?' }] });
    fixture.componentRef.setInput('review', review);
    fixture.detectChanges();
    const changes: ThumbnailReview[] = [];
    fixture.componentInstance.reviewChange.subscribe(value => {
      changes.push(value); fixture.componentRef.setInput('review', value);
    });
    return { fixture, component: fixture.componentInstance, changes };
  }
  it('edits hooks, support, colors and layouts without changing source content or using a generation request', () => {
    const { component, fixture, changes } = editor();
    const source = component.document;
    component.update('hook', 'Nouvelle accroche fidèle'); fixture.detectChanges();
    expect(changes.at(-1)?.ready).toBe(false);
    component.update('supporting', 'Texte secondaire'); fixture.detectChanges();
    component.update('layout', 'editorial'); fixture.detectChanges();
    component.setColor('primary', '#FFCC22'); fixture.detectChanges();
    expect(component.review.spec).toMatchObject({ hook: 'Nouvelle accroche fidèle', supporting: 'Texte secondaire', layout: 'editorial', palette: { primary: '#FFCC22' } });
    expect(component.document).toBe(source);
    expect(renderer.thumbnailPreview).not.toHaveBeenCalled();
    expect(renderer.thumbnailOptions).not.toHaveBeenCalled();
  });
  it('previews the exact edited specification, blocks concurrent preview and reapproves only after a valid image', async () => {
    const pending = new Subject<Blob>(); renderer.thumbnailPreview.mockReturnValue(pending);
    const { component, changes } = editor();
    const attempt = component.preview();
    await component.preview();
    expect(renderer.thumbnailPreview).toHaveBeenCalledTimes(1);
    expect(changes.at(-1)?.ready).toBe(false);
    expect(renderer.thumbnailPreview.mock.calls[0][0].render_options.thumbnail).toEqual(component.review.spec);
    pending.next(new Blob(['jpeg-fixture'], { type: 'image/jpeg' })); pending.complete();
    await attempt;
    expect(changes.at(-1)?.ready).toBe(true);
    expect(changes.at(-1)?.previewUrl).toMatch(/^data:image\/jpeg;base64,/);
  });
  it('keeps the last preview stale on failure and restores the deterministic original suggestion on request', async () => {
    renderer.thumbnailPreview.mockReturnValue(throwError(() => new Error('Busy')));
    const { component, fixture, changes } = editor();
    component.selectSuggestion(1); fixture.detectChanges();
    expect(component.review.spec.hook).toBe('Forces');
    await component.preview(); fixture.detectChanges();
    expect(changes.at(-1)?.ready).toBe(false);
    expect(fixture.nativeElement.querySelector('[role=alert]')).not.toBeNull();
    component.restore(); fixture.detectChanges();
    expect(component.review.spec.seed).toBe('fixture-stable-seed');
    expect(component.review.spec.hook).toBe('Une question réelle ?');
  });
  it('rejects non-JPEG or oversized preview bodies before loading them into the interface', async () => {
    await expect(thumbnailPreviewDataUrl(new Blob(['html'], { type: 'text/html' }))).rejects.toThrow('Invalid thumbnail preview');
    await expect(thumbnailPreviewDataUrl(new Blob([new Uint8Array(2 * 1024 * 1024 + 1)], { type: 'image/jpeg' }))).rejects.toThrow('Invalid thumbnail preview');
  });
  it.each([['fr', fr], ['ar', ar]] as const)('renders %s controls and preserves Arabic/Latin source direction safely', async (locale, translations) => {
    TestBed.inject(TranslocoService).setActiveLang(locale);
    const review = thumbnailFixture({ locale, hook: '<img src=x> ما قيمة x = 3؟', subject: null, template: 'facts-short', format: 'portrait' });
    const { fixture } = editor(review);
    // NgModel writes its initial control value on the next stability turn.
    await fixture.whenStable();
    fixture.detectChanges();
    const root = fixture.nativeElement as HTMLElement;
    expect(root.querySelector('section')?.getAttribute('dir')).toBe(locale === 'ar' ? 'rtl' : 'ltr');
    expect(root.textContent).toContain(translations.thumbnailEditor.title);
    expect(root.querySelector('textarea')?.value).toBe(review.spec.hook);
    expect(root.querySelectorAll('img')).toHaveLength(0);
    expect(root.querySelector('figure')?.classList.contains('portrait')).toBe(true);
  });
});
