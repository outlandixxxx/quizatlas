import { PLATFORM_ID, TransferState } from '@angular/core';
import { TestBed } from '@angular/core/testing';
import { ActivatedRoute, convertToParamMap, provideRouter } from '@angular/router';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { of, Subject } from 'rxjs';
import { ChoiceShuffler } from './choice-shuffler';
import { ActiveQuizComponent } from '../../features/user/active-quiz/active-quiz.component';
import { TrialQuiz } from '../../features/public/trial-quiz/trial-quiz';
import { QuizApi } from '../../features/user/services/quiz.api';
import { QuizAttemptApi } from '../../features/user/services/quiz-attempt.api';
import { BookmarkApi } from '../../features/user/services/bookmark.api';
import { TrialQuizApi } from './trial-quiz-api';
import { Seo } from './seo';
import en from '../../../assets/i18n/en.json';
import fr from '../../../assets/i18n/fr.json';

const choices = [
  { id: 101, choice_text: 'Correct original first choice', order: 1 },
  { id: 102, choice_text: 'Second choice', order: 2 },
  { id: 103, choice_text: 'Third choice', order: 3 },
  { id: 104, choice_text: 'Fourth choice', order: 4 },
];
const question = (id: number, selected: number[] = []) => ({
  id,
  question: `Question ${id}`,
  type: 'single_choice',
  marks: 1,
  order: id,
  choices,
  selected_choice_ids: selected,
  is_bookmarked: false,
});
const initialLanguage = document.documentElement.lang;
afterEach(() => {
  vi.restoreAllMocks();
  document.documentElement.lang = initialLanguage;
});

describe('ChoiceShuffler', () => {
  it('returns a new permutation without mutating choices or losing their identities', () => {
    vi.spyOn(Math, 'random').mockReturnValue(0);
    const shuffled = TestBed.inject(ChoiceShuffler).shuffle(choices, 'question');
    expect(shuffled.map((choice) => choice.id)).toEqual([102, 103, 104, 101]);
    expect(choices.map((choice) => choice.id)).toEqual([101, 102, 103, 104]);
    expect(shuffled).not.toBe(choices);
    expect(shuffled[3]).toBe(choices[0]);
  });

  it('allows every choice to occupy every position across all random branches', () => {
    const random = vi.spyOn(Math, 'random');
    const shuffler = TestBed.inject(ChoiceShuffler);
    const permutations = new Set<string>();
    const positions = [0, 0, 0, 0];
    for (let first = 0; first < 4; first++) {
      for (let second = 0; second < 3; second++) {
        for (let third = 0; third < 2; third++) {
          random
            .mockReturnValueOnce((first + 0.5) / 4)
            .mockReturnValueOnce((second + 0.5) / 3)
            .mockReturnValueOnce((third + 0.5) / 2);
          const result = shuffler.shuffle(choices, 'question');
          permutations.add(result.map((choice) => choice.id).join(','));
          positions[result.findIndex((choice) => choice.id === 101)]++;
        }
      }
    }
    expect(permutations.size).toBe(24);
    expect(positions).toEqual([6, 6, 6, 6]);
  });

  it('handles empty and single-choice arrays', () => {
    const shuffler = TestBed.inject(ChoiceShuffler);
    expect(shuffler.shuffle([], 'empty')).toEqual([]);
    expect(shuffler.shuffle([choices[0]], 'single')).toEqual([choices[0]]);
  });

  it('reuses the server permutation once for hydration, then creates a fresh order for a new load', () => {
    const random = vi.spyOn(Math, 'random').mockReturnValue(0);
    const transfer = new TransferState();
    TestBed.configureTestingModule({
      providers: [
        { provide: PLATFORM_ID, useValue: 'server' },
        { provide: TransferState, useValue: transfer },
      ],
    });
    const serverOrder = TestBed.inject(ChoiceShuffler).shuffle(choices, 'trial:slug:1');
    expect(transfer.isEmpty).toBe(false);
    TestBed.resetTestingModule();
    TestBed.configureTestingModule({
      providers: [
        { provide: PLATFORM_ID, useValue: 'browser' },
        { provide: TransferState, useValue: transfer },
      ],
    });
    random.mockReturnValue(0.999);
    const browser = TestBed.inject(ChoiceShuffler);
    expect(browser.shuffle(choices, 'trial:slug:1')).toEqual(serverOrder);
    expect(transfer.isEmpty).toBe(true);
    expect(browser.shuffle(choices, 'trial:slug:1')).toEqual(choices);
  });
});

describe('Regular quiz shuffled answer mapping', () => {
  const quizApi = { getQuestions: vi.fn() };
  const attempts = { start: vi.fn(), saveAnswer: vi.fn(), updateMode: vi.fn() };
  beforeEach(async () => {
    vi.spyOn(Math, 'random').mockReturnValue(0);
    attempts.start.mockReset().mockReturnValue(of({ data: { id: 77, mode: 'exam' } }));
    attempts.saveAnswer.mockReset().mockReturnValue(of({ data: null }));
    attempts.updateMode.mockReset().mockReturnValue(of({ data: { mode: 'tutor' } }));
    quizApi.getQuestions.mockReset().mockReturnValue(
      of({
        data: {
          title: 'Quiz',
          duration: 20,
          subject_name: 'Subject',
          difficulty: 'Beginner',
          questions: [question(1, [101]), question(2)],
        },
      }),
    );
    await TestBed.configureTestingModule({
      imports: [ActiveQuizComponent],
      providers: [
        provideRouter([]),
        {
          provide: ActivatedRoute,
          useValue: { snapshot: { paramMap: convertToParamMap({ id: '9' }) } },
        },
        { provide: QuizApi, useValue: quizApi },
        { provide: QuizAttemptApi, useValue: attempts },
        { provide: BookmarkApi, useValue: {} },
      ],
    })
      .overrideComponent(ActiveQuizComponent, { set: { template: '', imports: [] } })
      .compileComponents();
  });
  function render() {
    const fixture = TestBed.createComponent(ActiveQuizComponent);
    fixture.detectChanges();
    return fixture;
  }

  it('restores a resumed answer by ID after shuffling and keeps its position stable while navigating', () => {
    const fixture = render();
    const quiz = fixture.componentInstance;
    expect(quiz.currentQuestion.options.map((option) => option.choiceId)).toEqual([
      102, 103, 104, 101,
    ]);
    expect(quiz.currentQuestion.options.map((option) => option.label)).toEqual([
      'A.',
      'B.',
      'C.',
      'D.',
    ]);
    expect(quiz.selectedOption).toBe('D');
    const originalOrder = quiz.currentQuestion.options;
    quiz.nextQuestion();
    quiz.prevQuestion();
    expect(quiz.currentQuestion.options).toBe(originalOrder);
    expect(quiz.selectedOption).toBe('D');
    fixture.destroy();
  });

  it('submits the shuffled choice ID and highlights the correct displayed letter returned by the backend', () => {
    attempts.saveAnswer.mockReturnValue(
      of({
        data: {
          correct_choice_ids: [101],
          explanation: 'The original first choice is correct.',
        },
      }),
    );
    const fixture = render();
    const quiz = fixture.componentInstance;
    quiz.selectOption('A');
    expect(attempts.saveAnswer).toHaveBeenCalledWith(77, {
      question_id: 1,
      choice_id: 102,
      selected: true,
    });
    expect(quiz.selectedOption).toBe('A');
    expect(quiz.currentQuestion.correctAnswer).toBe('D');
    expect(quiz.isSubmitted).toBe(true);
    expect(quiz.currentQuestion.explanation).toBe('The original first choice is correct.');
    fixture.destroy();
  });

  it('reveals a resumed answer in tutor mode using the same shuffled ID mapping', () => {
    const fixture = render();
    const quiz = fixture.componentInstance;
    quiz.setMode('tutor');
    expect(attempts.saveAnswer).toHaveBeenCalledWith(77, {
      question_id: 1,
      choice_id: 101,
      selected: true,
    });
    fixture.destroy();
  });

  it('applies late feedback to the answered question after navigating forward', () => {
    const feedback = new Subject<{ data: { correct_choice_ids: number[]; explanation: string } }>();
    attempts.saveAnswer.mockReturnValue(feedback);
    const fixture = render();
    const quiz = fixture.componentInstance;
    quiz.selectOption('A');
    quiz.nextQuestion();
    feedback.next({
      data: { correct_choice_ids: [101], explanation: 'Feedback for question one.' },
    });
    expect(quiz.questions[0].correctAnswer).toBe('D');
    expect(quiz.questions[1].correctAnswer).toBe('');
    fixture.destroy();
  });
});

describe('Trial shuffled choices', () => {
  const api = { getBySubject: vi.fn(), grade: vi.fn() };
  beforeEach(async () => {
    vi.spyOn(Math, 'random').mockReturnValue(0);
    api.getBySubject.mockReset().mockReturnValue(
      of({
        data: {
          label: 'Algorithmique',
          description: null,
          quizzes_count: 1,
          questions_count: 2,
          levels: [],
          related_subjects: [{ id: 8, name: 'Bases de données', slug: 'databases' }],
          trial_token: 'trial-token',
          questions: [question(1), question(2)],
        },
      }),
    );
    api.grade
      .mockReset()
      .mockReturnValue(
        of({
          data: {
            results: [
              {
                question_id: 1,
                is_correct: false,
                correct_choice_id: 101,
                explanation: 'Explanation',
              },
            ],
          },
        }),
      );
    await TestBed.configureTestingModule({
      imports: [
        TrialQuiz,
        TranslocoTestingModule.forRoot({
          langs: { en, fr },
          preloadLangs: true,
          translocoConfig: { availableLangs: ['en', 'fr'], defaultLang: 'en' },
        }),
      ],
      providers: [
        provideRouter([]),
        {
          provide: ActivatedRoute,
          useValue: { paramMap: of(convertToParamMap({ subjectSlug: 'algorithms' })) },
        },
        { provide: TrialQuizApi, useValue: api },
        {
          provide: Seo,
          useValue: {
            setCanonical: vi.fn(),
            setTitle: vi.fn(),
            setDescription: vi.fn(),
            setSocialTags: vi.fn(),
          },
        },
      ],
    }).compileComponents();
  });

  it('renders shuffled choices, submits their IDs, and highlights the correct answer by ID', async () => {
    const fixture = TestBed.createComponent(TrialQuiz);
    await fixture.whenStable();
    fixture.detectChanges();
    const quiz = fixture.componentInstance;
    const page: HTMLElement = fixture.nativeElement;
    expect(page.querySelectorAll('h1')).toHaveLength(1);
    expect(page.querySelector('.trial-heading-card .intro-description')?.textContent).toContain(
      'Algorithmique',
    );
    const questionCard = page.querySelector('.question-card')!;
    const related = page.querySelector('.related-subjects')!;
    expect(
      questionCard.compareDocumentPosition(related) & Node.DOCUMENT_POSITION_FOLLOWING,
    ).toBeTruthy();
    expect(page.lastElementChild).toBe(related);
    expect(quiz.currentQuestion.choices.map((choice) => choice.id)).toEqual([102, 103, 104, 101]);
    quiz.setMode('tutor');
    const options: HTMLElement[] = Array.from(
      fixture.nativeElement.querySelectorAll('.option-item'),
    );
    options[0].click();
    fixture.detectChanges();
    expect(api.grade).toHaveBeenCalledWith('trial-token', { 1: 102 });
    expect(options[0].classList.contains('incorrect')).toBe(true);
    expect(options[3].classList.contains('correct')).toBe(true);
    const order = quiz.currentQuestion.choices;
    quiz.nextQuestion();
    quiz.prevQuestion();
    expect(quiz.currentQuestion.choices).toBe(order);
    expect(choices.map((choice) => choice.id)).toEqual([101, 102, 103, 104]);
  });
});
