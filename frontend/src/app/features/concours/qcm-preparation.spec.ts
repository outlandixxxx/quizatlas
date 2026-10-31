import { TestBed } from '@angular/core/testing';
import { Router, UrlTree, provideRouter } from '@angular/router';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { Subject, of, throwError } from 'rxjs';
import en from '../../../assets/i18n/en.json';
import fr from '../../../assets/i18n/fr.json';
import ar from '../../../assets/i18n/ar.json';
import { ConcoursQcmList } from './components/concours-qcm-list';
import { ConcoursQcmEditor } from '../admin/concours-directory/concours-qcm-editor';
import { ConcoursApi } from '../../core/services/concours-api';
import { ConcoursQcm, QcmPage, emptyQcmPage } from '../../core/models/concours-qcm';
import { authGuard } from '../../core/guards/auth-guard';
import { Token } from '../../core/services/token';

const quiz = (id: number): ConcoursQcm => ({
  id,
  title: `Existing QCM ${id}`,
  subject_name: 'Mathematics',
  questions_count: 8,
  duration: 15,
  difficulty: 'Beginner',
});
const page = <T>(items: T[], current = 1, last = 1): QcmPage<T> => ({
  items,
  meta: {
    current_page: current,
    last_page: last,
    per_page: 12,
    total: last === 1 ? items.length : 13,
  },
});
const translations = (language = 'en') =>
  TranslocoTestingModule.forRoot({
    langs: { en, fr, ar },
    preloadLangs: true,
    translocoConfig: { availableLangs: ['en', 'fr', 'ar'], defaultLang: language },
  });

describe('public concours QCM integration', () => {
  const api = { qcm: vi.fn() };
  beforeEach(() => {
    api.qcm.mockReset().mockReturnValue(of({ data: page([quiz(13)]) }));
  });
  function setup(language = 'en', initial = page([quiz(1)], 1, 2)) {
    TestBed.configureTestingModule({
      imports: [translations(language)],
      providers: [provideRouter([]), { provide: ConcoursApi, useValue: api }],
    });
    const fixture = TestBed.createComponent(ConcoursQcmList);
    fixture.componentRef.setInput('slug', 'permanent');
    fixture.componentRef.setInput('initial', initial);
    fixture.detectChanges();
    return fixture;
  }
  for (const lang of ['fr', 'en', 'ar']) {
    it(`renders preloaded metadata and existing quiz routes in ${lang} without fetching private content`, () => {
      const fixture = setup(lang);
      expect(fixture.nativeElement.querySelectorAll('.qcm-card')).toHaveLength(1);
      expect(fixture.nativeElement.textContent).toContain('Existing QCM 1');
      expect(fixture.nativeElement.querySelector('a').getAttribute('href')).toBe('/app/quiz/1');
      expect(api.qcm).not.toHaveBeenCalled();
    });
  }
  it('paginates on the server and resets to page one when the selected preparation option changes', () => {
    const fixture = setup();
    fixture.componentInstance.go(2);
    expect(api.qcm).toHaveBeenLastCalledWith('permanent', '', 2);
    fixture.componentRef.setInput('option', '11');
    fixture.detectChanges();
    expect(api.qcm).toHaveBeenLastCalledWith('permanent', '11', 1);
    expect(fixture.componentInstance.data().items[0].id).toBe(13);
  });
  it('cancels stale filter requests and never displays results from the previous track', () => {
    const first = new Subject<any>(),
      second = new Subject<any>();
    api.qcm.mockReturnValueOnce(first).mockReturnValueOnce(second);
    const fixture = setup();
    fixture.componentRef.setInput('option', '11');
    fixture.detectChanges();
    fixture.componentRef.setInput('option', '12');
    fixture.detectChanges();
    first.next({ data: page([quiz(100)]) });
    second.next({ data: page([quiz(200)]) });
    fixture.detectChanges();
    expect(fixture.componentInstance.data().items.map((item) => item.id)).toEqual([200]);
    expect(fixture.nativeElement.textContent).not.toContain('Existing QCM 100');
  });
  it('uses honest empty and retry states and does not retain stale cards on failure', () => {
    const fixture = setup('en', emptyQcmPage());
    expect(fixture.nativeElement.textContent).toContain(en.concoursQcm.emptyTitle);
    api.qcm.mockReturnValueOnce(throwError(() => ({ status: 503 })));
    fixture.componentRef.setInput('option', '11');
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('[role=alert]').textContent).toContain(
      en.concoursQcm.loadError,
    );
    expect(fixture.nativeElement.querySelectorAll('.qcm-card')).toHaveLength(0);
    fixture.componentInstance.load();
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelectorAll('.qcm-card')).toHaveLength(1);
  });
  it('keeps the existing authenticated quiz guard and login return URL', () => {
    const has = vi.fn().mockReturnValue(false);
    TestBed.configureTestingModule({
      providers: [provideRouter([]), { provide: Token, useValue: { has } }],
    });
    const check = () =>
      TestBed.runInInjectionContext(() => authGuard({} as never, { url: '/app/quiz/9' } as never));
    expect(TestBed.inject(Router).serializeUrl(check() as UrlTree)).toBe(
      '/login?returnUrl=%2Fapp%2Fquiz%2F9',
    );
    has.mockReturnValue(true);
    expect(check()).toBe(true);
  });
});

describe('concours QCM admin selectors', () => {
  const api = {
    qcmCandidates: vi.fn(),
    qcmLinks: vi.fn(),
    saveQcmLink: vi.fn(),
    removeQcmLink: vi.fn(),
  };
  const linked = {
    id: 5,
    title: 'Existing association',
    available: true,
    preparation_option_ids: [11],
    version: 3,
  };
  beforeEach(() => {
    api.qcmCandidates
      .mockReset()
      .mockReturnValue(of({ data: page([{ id: 5, title: 'Existing subject' }], 1, 2) }));
    api.qcmLinks.mockReset().mockReturnValue(of({ data: page([linked]) }));
    api.saveQcmLink.mockReset().mockReturnValue(of({ data: null }));
    api.removeQcmLink.mockReset().mockReturnValue(of({ data: null }));
    TestBed.configureTestingModule({
      imports: [translations()],
      providers: [{ provide: ConcoursApi, useValue: api }],
    });
  });
  function setup() {
    const fixture = TestBed.createComponent(ConcoursQcmEditor);
    fixture.componentRef.setInput('concoursId', 1);
    fixture.componentRef.setInput(
      'options',
      [11, 12].map((id) => ({
        id,
        concours_id: 1,
        parent_id: null,
        name_fr: `Option ${id}`,
        display_order: 0,
        is_active: true,
      })),
    );
    fixture.detectChanges();
    return fixture;
  }
  it('uses paginated searches and changes type without loading entire subject or quiz catalogues', () => {
    const fixture = setup();
    const component = fixture.componentInstance;
    component.search = 'math';
    component.loadCandidates(2);
    expect(api.qcmCandidates).toHaveBeenLastCalledWith(1, 'subjects', 'math', 2);
    component.changeKind('quizzes');
    fixture.detectChanges();
    expect(api.qcmCandidates).toHaveBeenLastCalledWith(1, 'quizzes', '', 1);
    expect(api.qcmLinks).toHaveBeenLastCalledWith(1, 'quizzes', '', 1);
  });
  it('updates an existing subject with multiple tracks using its version and does not create content', () => {
    const fixture = setup();
    const component = fixture.componentInstance;
    component.choose({ id: 5, title: 'Existing subject' });
    component.toggle(12, true);
    component.save();
    expect(api.saveQcmLink).toHaveBeenCalledWith(1, 'subjects', 5, 3, [11, 12]);
    expect(component.selected()).toBeNull();
  });
  it('supports whole-concours quiz links and retains selections on a stale-write rejection', () => {
    api.saveQcmLink.mockReturnValue(
      throwError(() => ({ error: { message: 'Refresh before saving.' } })),
    );
    const fixture = setup();
    const component = fixture.componentInstance;
    component.changeKind('quizzes');
    component.choose({ id: 99, title: 'Quiz 99' });
    component.save();
    expect(api.saveQcmLink).toHaveBeenCalledWith(1, 'quizzes', 99, 0, []);
    expect(component.selected()?.id).toBe(99);
    expect(component.error()).toContain('Refresh');
    expect(component.saving()).toBe(false);
  });
  it('unlinks only the selected association and retains unavailable records for management', () => {
    api.qcmLinks.mockReturnValue(of({ data: page([{ ...linked, available: false }]) }));
    const fixture = setup();
    fixture.detectChanges();
    expect(fixture.nativeElement.textContent).toContain(en.concoursQcm.unavailable);
    fixture.componentInstance.remove(linked);
    expect(api.removeQcmLink).toHaveBeenCalledWith(1, 'subjects', linked);
  });
});
