import { TestBed } from '@angular/core/testing';
import { ActivatedRoute, Router, convertToParamMap, provideRouter } from '@angular/router';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { of, Subject } from 'rxjs';
import en from '../../../../../assets/i18n/en.json';
import { CreateQuizComponent } from './create-quiz.component';
import { TeacherShareApi } from '../../services/teacher-share.api';

describe('teacher quiz edit form', () => {
  const api = { subjects: vi.fn(), getQuiz: vi.fn(), updateQuiz: vi.fn(), createQuiz: vi.fn() };
  beforeEach(() => {
    Object.values(api).forEach(fn => fn.mockReset());
    api.subjects.mockReturnValue(of({data:[{id:2,name:'Active subject'}]}));
    api.getQuiz.mockReturnValue(of({data:{id:3,subject_id:1,subject:{id:1,name:'Existing retired subject'},title:'Owned quiz',description:'',duration:20,passing_score:50,is_active:false}}));
    api.updateQuiz.mockReturnValue(of({data:{id:3}}));
    TestBed.configureTestingModule({imports:[TranslocoTestingModule.forRoot({langs:{en},preloadLangs:true,
      translocoConfig:{availableLangs:['en'],defaultLang:'en'}})],providers:[provideRouter([]),
      {provide:ActivatedRoute,useValue:{snapshot:{paramMap:convertToParamMap({quizId:'3'})}}},{provide:TeacherShareApi,useValue:api}]});
  });
  it('loads and updates the owned quiz instead of creating a second quiz', () => {
    const navigate=vi.spyOn(TestBed.inject(Router),'navigate').mockResolvedValue(true);
    const fixture=TestBed.createComponent(CreateQuizComponent);fixture.detectChanges();
    const c=fixture.componentInstance;expect(c.form.title).toBe('Owned quiz');
    c.form.title='Edited quiz';c.save();
    expect(api.createQuiz).not.toHaveBeenCalled();expect(api.updateQuiz).toHaveBeenCalledWith(3,expect.objectContaining({title:'Edited quiz'}));
    expect(navigate).toHaveBeenCalledWith(['/app/teacher/quizzes',3,'questions']);
  });
  it('retains the current retired subject when the active subject list arrives later', () => {
    const pending=new Subject();api.subjects.mockReturnValue(pending);
    const fixture=TestBed.createComponent(CreateQuizComponent);fixture.detectChanges();
    pending.next({data:[{id:2,name:'Active subject'}]});
    expect(fixture.componentInstance.subjects.map(s=>s.id)).toEqual([2,1]);
  });
});
