import { Component, OnInit, inject, signal } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ActivatedRoute, RouterLink } from '@angular/router';
import { FormBuilder, ReactiveFormsModule, Validators } from '@angular/forms';
import { TranslocoModule } from '@jsverse/transloco';

import { AdminQuestionApi } from '../services/question.api';
import { AdminChoiceApi } from '../services/choice.api';
import { Question, QuestionType, Choice } from '../../../core/models/question';

@Component({
  selector: 'app-admin-quiz-questions',
  standalone: true,
  imports: [CommonModule, RouterLink, ReactiveFormsModule, TranslocoModule],
  templateUrl: './quiz-questions.html',
  styleUrl: './quiz-questions.scss',
})
export class AdminQuizQuestions implements OnInit {
  private readonly route = inject(ActivatedRoute);
  private readonly fb = inject(FormBuilder);
  private readonly questionApi = inject(AdminQuestionApi);
  private readonly choiceApi = inject(AdminChoiceApi);

  quizId!: number;

  readonly questions = signal<Question[]>([]);
  readonly isLoading = signal(false);
  readonly errorMsg = signal<string | null>(null);

  readonly expandedIds = signal<Set<number>>(new Set());

  // Question modal
  readonly isQuestionModalOpen = signal(false);
  readonly editingQuestionId = signal<number | null>(null);
  readonly isSavingQuestion = signal(false);

  readonly questionTypes: QuestionType[] = ['single_choice', 'multiple_choice', 'true_false'];

  readonly questionForm = this.fb.nonNullable.group({
    question: ['', [Validators.required]],
    type: ['single_choice' as QuestionType, [Validators.required]],
    marks: [1, [Validators.required, Validators.min(1)]],
    explanation: [''],
    order: [1, [Validators.required, Validators.min(1)]],
  });

  // Choice inline add/edit
  readonly addingChoiceForQuestionId = signal<number | null>(null);
  readonly editingChoiceId = signal<number | null>(null);
  readonly isSavingChoice = signal(false);

  readonly choiceForm = this.fb.nonNullable.group({
    choice_text: ['', [Validators.required]],
    is_correct: [false],
  });

  // Delete confirmation (shared for question/choice)
  readonly deleteQuestionTarget = signal<Question | null>(null);
  readonly deleteChoiceTarget = signal<Choice | null>(null);
  readonly isDeleting = signal(false);

  ngOnInit(): void {
    this.quizId = Number(this.route.snapshot.paramMap.get('quizId'));
    this.fetchQuestions();
  }

  fetchQuestions(): void {
    this.isLoading.set(true);
    this.errorMsg.set(null);

    this.questionApi.list(this.quizId).subscribe({
      next: (res) => {
        this.questions.set(res.data);
        this.isLoading.set(false);
      },
      error: () => {
        this.errorMsg.set('Failed to load questions.');
        this.isLoading.set(false);
      },
    });
  }

  toggleExpand(questionId: number): void {
    const set = new Set(this.expandedIds());
    set.has(questionId) ? set.delete(questionId) : set.add(questionId);
    this.expandedIds.set(set);
  }

  isExpanded(questionId: number): boolean {
    return this.expandedIds().has(questionId);
  }

  // ---- Question CRUD ----

  openCreateQuestion(): void {
    this.editingQuestionId.set(null);
    this.questionForm.reset({
      question: '',
      type: 'single_choice',
      marks: 1,
      explanation: '',
      order: this.questions().length + 1,
    });
    this.isQuestionModalOpen.set(true);
  }

  openEditQuestion(q: Question): void {
    this.editingQuestionId.set(q.id);
    this.questionForm.reset({
      question: q.question,
      type: q.type,
      marks: q.marks,
      explanation: q.explanation ?? '',
      order: q.order,
    });
    this.isQuestionModalOpen.set(true);
  }

  closeQuestionModal(): void {
    this.isQuestionModalOpen.set(false);
  }

  saveQuestion(): void {
    if (this.questionForm.invalid) {
      this.questionForm.markAllAsTouched();
      return;
    }

    this.isSavingQuestion.set(true);
    const payload = { ...this.questionForm.getRawValue(), quiz_id: this.quizId };
    const id = this.editingQuestionId();

    const request$ = id
      ? this.questionApi.update(id, payload)
      : this.questionApi.create(payload);

    request$.subscribe({
      next: () => {
        this.isSavingQuestion.set(false);
        this.isQuestionModalOpen.set(false);
        this.fetchQuestions();
      },
      error: (err) => {
        this.isSavingQuestion.set(false);
        this.errorMsg.set(err?.error?.message || 'Failed to save question.');
      },
    });
  }

  confirmDeleteQuestion(q: Question): void {
    this.deleteQuestionTarget.set(q);
  }

  cancelDeleteQuestion(): void {
    this.deleteQuestionTarget.set(null);
  }

  deleteQuestion(): void {
    const target = this.deleteQuestionTarget();
    if (!target) return;

    this.isDeleting.set(true);
    this.questionApi.delete(target.id).subscribe({
      next: () => {
        this.isDeleting.set(false);
        this.deleteQuestionTarget.set(null);
        this.fetchQuestions();
      },
      error: () => {
        this.isDeleting.set(false);
        this.errorMsg.set('Failed to delete question.');
      },
    });
  }

  // ---- Choice CRUD ----

  openAddChoice(question: Question): void {
    this.editingChoiceId.set(null);
    this.choiceForm.reset({ choice_text: '', is_correct: false });
    this.addingChoiceForQuestionId.set(question.id);
  }

  openEditChoice(choice: Choice): void {
    this.addingChoiceForQuestionId.set(null);
    this.editingChoiceId.set(choice.id);
    this.choiceForm.reset({ choice_text: choice.choice_text, is_correct: choice.is_correct });
  }

  cancelChoiceForm(): void {
    this.addingChoiceForQuestionId.set(null);
    this.editingChoiceId.set(null);
  }

  saveChoice(question: Question): void {
    if (this.choiceForm.invalid) {
      this.choiceForm.markAllAsTouched();
      return;
    }

    this.isSavingChoice.set(true);
    const raw = this.choiceForm.getRawValue();
    const editingId = this.editingChoiceId();

    const payload = {
      ...raw,
      question_id: question.id,
      order: editingId
        ? question.choices.find((c) => c.id === editingId)?.order ?? 1
        : question.choices.length + 1,
    };

    const request$ = editingId
      ? this.choiceApi.update(editingId, payload)
      : this.choiceApi.create(payload);

    request$.subscribe({
      next: () => {
        this.isSavingChoice.set(false);
        this.cancelChoiceForm();
        this.fetchQuestions();
      },
      error: () => {
        this.isSavingChoice.set(false);
        // Backend returns a generic error here (not a clean validation
        // message) when a second "correct" choice is added to a
        // single_choice/true_false question — show a specific hint instead
        // of a raw "Internal server error".
        this.errorMsg.set(
          'Failed to save choice. If this question only allows one correct answer, make sure no other choice is already marked correct.'
        );
      },
    });
  }

  confirmDeleteChoice(choice: Choice): void {
    this.deleteChoiceTarget.set(choice);
  }

  cancelDeleteChoice(): void {
    this.deleteChoiceTarget.set(null);
  }

  deleteChoice(): void {
    const target = this.deleteChoiceTarget();
    if (!target) return;

    this.isDeleting.set(true);
    this.choiceApi.delete(target.id).subscribe({
      next: () => {
        this.isDeleting.set(false);
        this.deleteChoiceTarget.set(null);
        this.fetchQuestions();
      },
      error: () => {
        this.isDeleting.set(false);
        this.errorMsg.set('Failed to delete choice.');
      },
    });
  }
}