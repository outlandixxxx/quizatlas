import { TestBed } from '@angular/core/testing';
import { TranslocoService } from '@jsverse/transloco';
import { of, Subject, throwError } from 'rxjs';
import { componentTestConfig } from '../../../../testing/component-test';
import { ContentUsage } from './content-usage';
import { ContentUsageApi, UsagePage } from '../services/content-usage.api';
import en from '../../../../assets/i18n/en.json';
import fr from '../../../../assets/i18n/fr.json';
import ar from '../../../../assets/i18n/ar.json';

const page: UsagePage = { counts: { total: 3, available: 1, reserved: 1, used: 1 },
  meta: { current_page: 1, last_page: 1, total: 3 }, data: [
    { source_type: 'question', source_id: 1, label: '<script>Stored text</script>', subject_id: 2, fingerprint: 'a'.repeat(64), status: 'used',
      operation: { id: '12345678-1234-1234-1234-123456789000', kind: 'quiz-json', status: 'used', output: [{ kind: 'json', name: 'quiz.json' }] } },
    { source_type: 'question', source_id: 2, label: 'A second question', subject_id: 2, fingerprint: 'b'.repeat(64), status: 'reserved',
      operation: { id: '12345678-1234-1234-1234-123456789001', kind: 'revision-media', status: 'reserved', expired: true, output: null } },
  ] };
let api: any;
beforeEach(() => {
  api = { list: vi.fn(() => of(page)), recover: vi.fn(() => of({ data: { released: 1 } })), download: vi.fn(() => of(new Blob(['{}']))) };
  TestBed.configureTestingModule({ ...componentTestConfig(ContentUsage), providers: [
    ...componentTestConfig(ContentUsage).providers!, { provide: ContentUsageApi, useValue: api },
  ] });
});
afterEach(() => TestBed.resetTestingModule());

it.each([['en', en], ['fr', fr], ['ar', ar]] as const)('renders real counts and safe output history in %s', async (lang, dictionary) => {
  TestBed.inject(TranslocoService).setActiveLang(lang);
  const fixture = TestBed.createComponent(ContentUsage); fixture.detectChanges(); await fixture.whenStable();
  const root = fixture.nativeElement as HTMLElement;
  expect(root.querySelector('section')?.getAttribute('dir')).toBe(lang === 'ar' ? 'rtl' : 'ltr');
  expect(root.textContent).toContain(dictionary.contentUsage.title);
  expect([...root.querySelectorAll('.usage-counts strong')].map(el => el.textContent)).toEqual(['3', '1', '1', '1']);
  expect(root.textContent).toContain('quiz.json');
  expect(root.textContent).toContain(dictionary.contentUsage.expired);
  expect(root.querySelector('script')).toBeNull();
  expect(root.textContent).toContain('<script>Stored text</script>');
  expect(root.querySelectorAll('select')).toHaveLength(2);
  expect([...root.querySelectorAll('select')].every(select => !!select.closest('label'))).toBe(true);
});

it('filters the existing admin catalogue without trusting stale responses', async () => {
  const pending = new Subject<UsagePage>(); api.list.mockReturnValueOnce(pending).mockReturnValue(of({ ...page, data: [] }));
  const fixture = TestBed.createComponent(ContentUsage); fixture.detectChanges();
  const select = fixture.nativeElement.querySelectorAll('select')[1] as HTMLSelectElement;
  select.value = 'used'; select.dispatchEvent(new Event('change'));
  await fixture.whenStable();
  pending.next(page);
  expect(api.list).toHaveBeenLastCalledWith('question', 'used', 1);
  expect(fixture.componentInstance.result()?.data).toEqual([]);
});

it('starts with facts and recovers only through the authenticated server endpoint', async () => {
  const fixture = TestBed.createComponent(ContentUsage); fixture.componentRef.setInput('initialType', 'fact'); fixture.detectChanges();
  await fixture.whenStable(); expect(api.list).toHaveBeenCalledWith('fact', '', 1);
  fixture.nativeElement.querySelector('.usage-recover').click();
  await fixture.whenStable(); expect(api.recover).toHaveBeenCalledTimes(1);
  expect(api.list).toHaveBeenCalledTimes(2);
});

it('shows an accessible error instead of stale counts when loading fails', async () => {
  api.list.mockReturnValue(throwError(() => Error('network')));
  const fixture = TestBed.createComponent(ContentUsage); fixture.detectChanges(); await fixture.whenStable();
  expect(fixture.nativeElement.querySelector('[role="alert"]')).not.toBeNull();
  expect(fixture.nativeElement.querySelector('.usage-counts')).toBeNull();
});
