import { TestBed } from '@angular/core/testing';
import { ActivatedRoute, convertToParamMap, provideRouter } from '@angular/router';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { of, Subject } from 'rxjs';
import en from '../../../../../assets/i18n/en.json';
import { QuestionBuilderComponent } from './question-builder.component';
import { TeacherShareApi } from '../../services/teacher-share.api';

describe('owner question builder', () => {
  const api = { getQuizQuestions: vi.fn(), createQuestion: vi.fn(), updateQuestion: vi.fn(), deleteQuestion: vi.fn() };
  beforeEach(() => {
    Object.values(api).forEach(fn => fn.mockReset());
    api.getQuizQuestions.mockReturnValue(of({ data: [] }));
    api.createQuestion.mockReturnValue(of({ data: {} }));
    api.updateQuestion.mockReturnValue(of({ data: {} }));
    TestBed.configureTestingModule({ imports: [TranslocoTestingModule.forRoot({ langs: { en }, preloadLangs: true,
      translocoConfig: { availableLangs: ['en'], defaultLang: 'en' } })], providers: [provideRouter([]),
      { provide: ActivatedRoute, useValue: { snapshot: { paramMap: convertToParamMap({ quizId: '3' }) } } },
      { provide: TeacherShareApi, useValue: api }] });
  });
  it('saves the entire question and choices in one request', () => {
    const fixture=TestBed.createComponent(QuestionBuilderComponent);fixture.detectChanges();
    const c=fixture.componentInstance;c.openForm();c.draftText='Fixture question';
    c.draftChoices=[{choice_text:'One',is_correct:true},{choice_text:'Two',is_correct:false}];c.saveQuestion();
    expect(api.createQuestion).toHaveBeenCalledTimes(1);
    expect(api.createQuestion.mock.lastCall?.[0].choices).toHaveLength(2);
    expect(c.showForm).toBe(false);
  });
  it('allows teachers to enter true/false wording and keeps existing IDs during edits', () => {
    const fixture=TestBed.createComponent(QuestionBuilderComponent);fixture.detectChanges();
    const c=fixture.componentInstance;
    c.openForm({id:4,question:'Fixture',type:'true_false',marks:1,order:2,explanation:null,
      choices:[{id:10,choice_text:'Vrai',is_correct:true,order:1},{id:11,choice_text:'Faux',is_correct:false,order:2}]});
    fixture.changeDetectorRef.detectChanges();
    expect([...fixture.nativeElement.querySelectorAll('.choice-row input')].every((input:any)=>!input.disabled)).toBe(true);
    c.saveQuestion();
    expect(api.updateQuestion.mock.lastCall?.[1].choices.map((choice:any)=>choice.id)).toEqual([10,11]);
  });
  it('leaves the draft available after an unsuccessful atomic save', () => {
    const pending=new Subject();api.createQuestion.mockReturnValue(pending);
    const fixture=TestBed.createComponent(QuestionBuilderComponent);fixture.detectChanges();
    const c=fixture.componentInstance;c.openForm();c.draftText='Fixture';
    c.draftChoices=[{choice_text:'One',is_correct:true},{choice_text:'Two',is_correct:false}];c.saveQuestion();
    pending.error({status:422});
    expect(c.showForm).toBe(true);expect(c.isSaving).toBe(false);expect(c.errorMsg).toBeTruthy();
  });
});
