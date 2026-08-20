import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { forkJoin } from 'rxjs';
import { TranslocoModule } from '@jsverse/transloco';
import { TeacherShareApi } from '../../services/teacher-share.api';
import { QuestionType, TeacherQuestion } from '../../../../core/models/teacher-quiz';

interface DraftChoice {
  choice_text: string;
  is_correct: boolean;
}

const TYPE_LABEL_KEYS: Record<QuestionType, string> = {
  single_choice: 'teacher.builder.typeSingleChoice',
  multiple_choice: 'teacher.builder.typeMultipleChoice',
  true_false: 'teacher.builder.typeTrueFalse',
};

@Component({
  selector: 'app-question-builder',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule],
  templateUrl: './question-builder.component.html',
  styleUrl: './question-builder.component.scss',
})
export class QuestionBuilderComponent implements OnInit {
  private readonly route = inject(ActivatedRoute);
  private readonly router = inject(Router);
  private readonly teacherApi = inject(TeacherShareApi);

  quizId = 0;
  questions: TeacherQuestion[] = [];
  isLoading = false;
  isSaving = false;
  errorMsg = '';

  showForm = false;
  draftText = '';
  draftType: QuestionType = 'single_choice';
  draftMarks = 1;
  draftExplanation = '';
  draftChoices: DraftChoice[] = [];

  ngOnInit(): void {
    this.quizId = Number(this.route.snapshot.paramMap.get('quizId'));
    this.load();
  }

  typeLabel(type: QuestionType): string {
    return TYPE_LABEL_KEYS[type] ?? type;
  }

  load(): void {
    this.isLoading = true;
    this.teacherApi.getQuizQuestions(this.quizId).subscribe({
      next: (res) => { this.questions = res.data; this.isLoading = false; },
      error: () => { this.isLoading = false; }
    });
  }

  openForm(): void {
    this.showForm = true;
    this.draftText = '';
    this.draftType = 'single_choice';
    this.draftMarks = 1;
    this.draftExplanation = '';
    this.resetChoicesForType();
  }

  closeForm(): void {
    this.showForm = false;
  }

  onTypeChange(): void {
    this.resetChoicesForType();
  }

  private resetChoicesForType(): void {
    if (this.draftType === 'true_false') {
      // Left blank intentionally — teacher fills in the correct-language
      // true/false wording themselves, consistent with the subject's content language.
      this.draftChoices = [
        { choice_text: '', is_correct: true },
        { choice_text: '', is_correct: false },
      ];
    } else {
      this.draftChoices = [
        { choice_text: '', is_correct: true },
        { choice_text: '', is_correct: false },
      ];
    }
  }

  addChoiceField(): void {
    this.draftChoices.push({ choice_text: '', is_correct: false });
  }

  removeChoiceField(index: number): void {
    if (this.draftChoices.length <= 2) return;
    this.draftChoices.splice(index, 1);
  }

  toggleCorrect(index: number): void {
    if (this.draftType === 'single_choice' || this.draftType === 'true_false') {
      this.draftChoices.forEach((c, i) => { c.is_correct = i === index; });
    } else {
      this.draftChoices[index].is_correct = !this.draftChoices[index].is_correct;
    }
  }

  saveQuestion(): void {
    if (!this.draftText.trim()) {
      this.errorMsg = 'teacher.builder.errorQuestionRequired';
      return;
    }
    if (this.draftChoices.some(c => !c.choice_text.trim())) {
      this.errorMsg = 'teacher.builder.errorChoicesRequired';
      return;
    }
    if (!this.draftChoices.some(c => c.is_correct)) {
      this.errorMsg = 'teacher.builder.errorMarkCorrect';
      return;
    }

    this.isSaving = true;
    this.errorMsg = '';

    this.teacherApi.createQuestion({
      quiz_id: this.quizId,
      question: this.draftText,
      type: this.draftType,
      marks: this.draftMarks,
      explanation: this.draftExplanation || undefined,
      order: this.questions.length + 1,
    }).subscribe({
      next: (res) => {
        const questionId = res.data.id;

        const choiceRequests = this.draftChoices.map((c, i) =>
          this.teacherApi.createChoice({
            question_id: questionId,
            choice_text: c.choice_text,
            is_correct: c.is_correct,
            order: i + 1,
          })
        );

        forkJoin(choiceRequests).subscribe({
          next: () => {
            this.isSaving = false;
            this.showForm = false;
            this.load();
          },
          error: () => {
            this.isSaving = false;
            this.errorMsg = 'teacher.builder.errorChoicesSaveFailed';
            this.load();
          }
        });
      },
      error: () => {
        this.isSaving = false;
        this.errorMsg = 'teacher.builder.errorCreateFailed';
      }
    });
  }

  deleteQuestion(question: TeacherQuestion): void {
    this.teacherApi.deleteQuestion(question.id).subscribe({
      next: () => this.load(),
    });
  }

  finishAndShare(): void {
    this.router.navigate(['/app/teacher']);
  }
}