import { DestroyRef } from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { EMPTY, catchError, switchMap } from 'rxjs';
import { PublicPageError } from '../page-error/page-error';
import { seoTranslationsReady } from '../../../core/seo/translations-ready';
import {
  ChangeDetectorRef,
  Component,
  OnInit,
  effect,
  inject,
} from '@angular/core';
import {
  CommonModule,
} from '@angular/common';
import {
  RouterLink,
  ActivatedRoute,
} from '@angular/router';
import {
  TranslocoModule,
  TranslocoService,
} from '@jsverse/transloco';

import {
  TrialQuestion,
  TrialGradeResult,
  TrialRelatedSubject,
} from '../../../core/models/trial-quiz';
import { TrialQuizApi } from '../../../core/services/trial-quiz-api';
import { Seo } from '../../../core/services/seo';
import { LanguageService } from '../../../core/services/language';

const LETTERS = ['A', 'B', 'C', 'D', 'E', 'F'];

@Component({
  selector: 'app-trial-quiz',
  standalone: true,
  imports: [
    CommonModule,
    PublicPageError,
    RouterLink,
    TranslocoModule,
  ],
  templateUrl: './trial-quiz.html',
  styleUrl: './trial-quiz.scss',
})
export class TrialQuiz implements OnInit {
  private readonly route = inject(ActivatedRoute);
  private readonly trialApi = inject(TrialQuizApi);
  private readonly cdr = inject(ChangeDetectorRef);
  private readonly seo = inject(Seo);
  private readonly transloco = inject(TranslocoService);
  private readonly languageService =
    inject(LanguageService);

  readonly letters = LETTERS;
  private readonly destroyRef = inject(DestroyRef);
  pageError: number | null = null;

  private canonicalUrl = '';

  label = '';
  description: string | null = null;

  quizzesCount = 0;
  questionsCount = 0;

  levels: string[] = [];

  relatedSubjects: TrialRelatedSubject[] = [];

  trialToken = '';

  questions: TrialQuestion[] = [];
  currentIndex = 0;

  mode: 'tutor' | 'exam' = 'exam';

  submittedState: Record<number, boolean> = {};

  userAnswers: Record<number, number> = {};

  isLoading = false;
  isFinished = false;

  gradeResults: Record<number, TrialGradeResult> = {};

  finalScore = {
    correct: 0,
    total: 0,
    percentage: 0,
  };

  private readonly seoTranslations = seoTranslationsReady('fr');

  private readonly seoLanguageEffect =
    effect(() => {
      this.languageService.language();

      if (this.label) {
        this.updateSeoMetadata();
      }
    });

  ngOnInit(): void {
    this.route.paramMap.pipe(
      switchMap(params => {
        const majorSlug = params.get('majorSlug');
        const subjectSlug = params.get('subjectSlug');
        this.resetTrial();
        this.canonicalUrl = `https://maroquiz.com/trial/${majorSlug ? 'major' : 'subject'}/${encodeURIComponent(majorSlug || subjectSlug || '')}`;
        this.seo.setCanonical(this.canonicalUrl);
        const request = majorSlug ? this.trialApi.getByMajor(majorSlug)
          : this.trialApi.getBySubject(subjectSlug || '');
        return request.pipe(catchError(error => {
          this.isLoading = false;
          this.pageError = this.seo.setHttpError(error.status);
          this.cdr.markForCheck();
          return EMPTY;
        }));
      }),
      takeUntilDestroyed(this.destroyRef),
    ).subscribe(res => {
      this.label = res.data.label;
      this.description = res.data.description;
      this.quizzesCount = res.data.quizzes_count;
      this.questionsCount = res.data.questions_count;
      this.levels = res.data.levels ?? [];
      this.relatedSubjects = res.data.related_subjects ?? [];
      this.trialToken = res.data.trial_token;
      this.questions = res.data.questions;
      this.isLoading = false;
      this.updateSeoMetadata();
      this.cdr.markForCheck();
    });
  }

  private resetTrial(): void {
    this.isLoading = true;
    this.pageError = null;
    this.label = '';
    this.description = null;
    this.quizzesCount = 0;
    this.questionsCount = 0;
    this.levels = [];
    this.relatedSubjects = [];
    this.trialToken = '';
    this.questions = [];
    this.currentIndex = 0;
    this.submittedState = {};
    this.userAnswers = {};
    this.gradeResults = {};
    this.isFinished = false;
    this.finalScore = { correct: 0, total: 0, percentage: 0 };
  }

  private updateSeoMetadata(): void {
    if (!this.seoTranslations()) return;
    if (!this.label) {
      return;
    }

    const title =
      this.transloco.translate(
        'trial.seo_title',
        {
          topic: this.label,
        }, 'fr'
      );

    const description =
      this.transloco.translate(
        'trial.seo_description',
        {
          topic: this.label,
        }, 'fr'
      );

    this.seo.setTitle(title);
    this.seo.setDescription(
      description
    );

    this.seo.setSocialTags({
      title,
      description,
      url: this.canonicalUrl,
      language: 'fr',
    });
  }

  get currentQuestion(): TrialQuestion {
    return this.questions[
      this.currentIndex
    ];
  }

  get answeredCount(): number {
    return Object.keys(
      this.userAnswers
    ).length;
  }

  get isCurrentSubmitted(): boolean {
    return !!this.submittedState[
      this.currentQuestion.id
    ];
  }

  getLevelLabel(
    level: string
  ): string {
    const normalized =
      level.trim().toLowerCase();

    const keyMap: Record<
      string,
      string
    > = {
      beginner:
        'trial.level_beginner',
      intermediate:
        'trial.level_intermediate',
      advanced:
        'trial.level_advanced',
      professional:
        'trial.level_professional',
    };

    const key = keyMap[normalized];

    return key
      ? this.transloco.translate(key)
      : level;
  }

  selectChoice(choiceId: number): void {
    const trialToken = this.trialToken;
    const question =
      this.currentQuestion;

    this.userAnswers[
      question.id
    ] = choiceId;

    this.cdr.detectChanges();

    if (this.mode === 'tutor') {
      this.trialApi
        .grade(this.trialToken, {
          [question.id]: choiceId,
        })
        .subscribe({
          next: (res) => {
            if (trialToken !== this.trialToken) return;
            const result =
              res.data.results[0];

            if (result) {
              this.gradeResults[
                question.id
              ] = result;

              this.submittedState[
                question.id
              ] = true;
            }

            this.cdr.detectChanges();
          },
        });
    }
  }

  nextQuestion(): void {
    if (
      this.currentIndex <
      this.questions.length - 1
    ) {
      this.currentIndex++;
    }
  }

  prevQuestion(): void {
    if (this.currentIndex > 0) {
      this.currentIndex--;
    }
  }

  goToQuestion(i: number): void {
    this.currentIndex = i;
  }

  setMode(
    mode: 'tutor' | 'exam'
  ): void {
    this.mode = mode;
  }

  submitTrial(): void {
    const trialToken = this.trialToken;
    this.trialApi
      .grade(
        this.trialToken,
        this.userAnswers
      )
      .subscribe({
        next: (res) => {
          if (trialToken !== this.trialToken) return;
          res.data.results.forEach(
            (r) => {
              this.gradeResults[
                r.question_id
              ] = r;
            }
          );

          this.finalScore = {
            correct:
              res.data.correct_count,
            total:
              res.data.total_questions,
            percentage:
              res.data.percentage,
          };

          this.isFinished = true;

          this.cdr.detectChanges();
        },
      });
  }
}