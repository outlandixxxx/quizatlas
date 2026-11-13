import { TestBed } from '@angular/core/testing';
import { provideRouter } from '@angular/router';
import { of, throwError } from 'rxjs';
import { vi } from 'vitest';
import { AdminFacts } from './facts';
import { FactApi, FactItem } from '../services/fact.api';
import { MajorApi } from '../services/major.api';

const fact: FactItem = { id: 3, major_id: 1, major: { id: 1, name: 'Physics', slug: 'physics' },
  text_fr: 'Un fait.', text_en: 'A fact.', text_ar: 'حقيقة.', source_url: null,
  is_verified: false, verified_at: null, created_at: '2026-11-08T00:00:00Z' };
function setup() {
  const api = {
    list: vi.fn((_filters: unknown) => of({ data: [fact], total: 1, last_page: 1 })), stats: () => of({ data: [] }),
    import: vi.fn((_items: unknown, _major: number | null) => of({ data: { created: 1, skipped_duplicates: 0, errors: [] } })),
    update: vi.fn((_id: number, _payload: unknown) => of({ data: fact })), create: vi.fn((_payload: unknown) => of({ data: fact })),
  };
  TestBed.configureTestingModule({ imports: [AdminFacts], providers: [provideRouter([]),
    { provide: FactApi, useValue: api },
    { provide: MajorApi, useValue: { listAll: () => of([{ id: 1, name: 'Physics', slug: 'physics', is_active: true }]) } },
  ] });
  const fixture = TestBed.createComponent(AdminFacts); fixture.detectChanges();
  return { page: fixture.componentInstance, fixture, api };
}
afterEach(() => TestBed.resetTestingModule());

it('creates and edits multilingual Facts with a Major and no Subject selector', () => {
  const { page, fixture, api } = setup();
  page.newFact(); fixture.detectChanges();
  expect(fixture.nativeElement.querySelector('#edit-major')).toBeTruthy();
  expect(fixture.nativeElement.querySelector('#edit-ar').getAttribute('dir')).toBe('rtl');
  expect(fixture.nativeElement.textContent).not.toContain('Subject');
  page.editMajorId.set(1); page.editFr.set(fact.text_fr); page.editEn.set(fact.text_en); page.editAr.set(fact.text_ar);
  page.saveFact();
  expect(api.create).toHaveBeenCalledWith({ major_id: 1, text_fr: fact.text_fr, text_en: fact.text_en, text_ar: fact.text_ar, source_url: null });
  page.editFact(fact); expect(page.editMajorId()).toBe(1); expect(page.editAr()).toBe(fact.text_ar);
  page.editFr.set('Texte corrigé.'); page.saveFact();
  expect(api.update).toHaveBeenCalledWith(3, expect.objectContaining({ major_id: 1, text_fr: 'Texte corrigé.', text_en: fact.text_en, text_ar: fact.text_ar }));
});

it('filters and imports by Major directly', () => {
  const { page, api } = setup();
  page.onFilterMajorChange('1');
  expect(api.list.mock.calls.at(-1)?.[0]).toMatchObject({ major_id: 1 });
  expect(api.list.mock.calls.at(-1)?.[0]).not.toHaveProperty('subject_id');
  page.onImportMajorChange('1'); page.onImportTextChange(JSON.stringify([{ fr: 'F', en: 'E', ar: 'ع' }])); page.importFacts();
  expect(api.import).toHaveBeenCalledWith([{ fr: 'F', en: 'E', ar: 'ع' }], 1);
});

it('keeps unsaved multilingual edits on a rejected update', () => {
  const { page, api } = setup(); page.editFact(fact); page.editAr.set('نص جديد');
  api.update.mockReturnValueOnce(throwError(() => ({ error: { message: 'Please choose a valid Major.' } })));
  page.saveFact(); expect(page.editing()?.id).toBe(3); expect(page.editAr()).toBe('نص جديد');
  expect(page.errorMsg()).toContain('valid Major'); expect(page.busyId()).toBeNull();
});
