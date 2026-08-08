import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';

import { PracticeApi, ApiMajor, ApiSubject, ApiChapter } from '../services/practice.api';
import { QuizAttemptApi } from '../services/quiz-attempt.api';

export interface Major {
  id: number;
  name: string;
  icon: string;
  description: string | null;
}

export interface Subject {
  id: number;
  majorId: number;
  year: string;
  name: string;
  code: string | null;
  chaptersCount: number;
  questionsCount: number;
}

export interface Chapter {
  id: number;
  title: string;
  questionsCount: number;
}

@Component({
  selector: 'app-custom-practice',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule],
  templateUrl: './custom-practice.component.html',
  styleUrl: './custom-practice.component.scss'
})
export class CustomPracticeComponent implements OnInit {
  private readonly practiceApi = inject(PracticeApi);
  private readonly quizAttemptApi = inject(QuizAttemptApi);
  private readonly router = inject(Router);

  currentStep: 1 | 2 | 3 = 1;

  searchQuery = '';
  selectedYear = 'All';

  selectedMajor: Major | null = null;
  selectedSubject: Subject | null = null;

  selectedChapterIds = new Set<number>();

  questionCount = 20;
  quizMode: 'tutor' | 'exam' = 'tutor';

  years = ['All', '1st Year', '2nd Year', '3rd Year', '4th Year', '5th Year'];

  majors: Major[] = [];
  allSubjects: Subject[] = [];
  allChapters: Record<number, Chapter[]> = {};

  ngOnInit(): void {
    this.loadMajors();
  }

  private mapMajor(m: ApiMajor): Major {
    return { id: m.id, name: m.name, icon: m.icon, description: m.description };
  }

  private mapSubject(s: ApiSubject): Subject {
    return {
      id: s.id,
      majorId: s.major_id,
      year: s.year,
      name: s.name,
      code: s.code,
      chaptersCount: s.quizzes_count,
      questionsCount: s.questions_count,
    };
  }

  private mapChapter(c: ApiChapter): Chapter {
    return { id: c.id, title: c.title, questionsCount: c.questions_count };
  }

  private loadMajors(): void {
    this.practiceApi.getMajors().subscribe({
      next: (response) => {
        this.majors = response.data.map((m) => this.mapMajor(m));
      }
    });
  }

  private loadSubjects(majorId: number): void {
    this.practiceApi.getSubjects(majorId).subscribe({
      next: (response) => {
        this.allSubjects = response.data.map((s) => this.mapSubject(s));
      }
    });
  }

  private loadChapters(subjectId: number): void {
    this.practiceApi.getChapters(subjectId).subscribe({
      next: (response) => {
        const chapters = response.data.map((c) => this.mapChapter(c));
        this.allChapters[subjectId] = chapters;

        this.selectedChapterIds.clear();
        chapters.forEach((chapter) => this.selectedChapterIds.add(chapter.id));

        this.currentStep = 3;
      }
    });
  }

  get filteredMajors(): Major[] {
    if (!this.searchQuery.trim()) return this.majors;
    const q = this.searchQuery.toLowerCase();
    return this.majors.filter((major) =>
      major.name.toLowerCase().includes(q) ||
      (major.description ?? '').toLowerCase().includes(q)
    );
  }

  get filteredSubjects(): Subject[] {
    if (!this.selectedMajor) return [];
    return this.allSubjects.filter((subject) => {
      const matchesYear = this.selectedYear === 'All' || subject.year === this.selectedYear;
      const q = this.searchQuery.toLowerCase();
      const matchesSearch =
        !this.searchQuery.trim() ||
        subject.name.toLowerCase().includes(q) ||
        (subject.code ?? '').toLowerCase().includes(q);
      return matchesYear && matchesSearch;
    });
  }

  get filteredChapters(): Chapter[] {
    if (!this.selectedSubject) return [];
    const chapters = this.allChapters[this.selectedSubject.id] ?? [];
    if (!this.searchQuery.trim()) return chapters;
    const q = this.searchQuery.toLowerCase();
    return chapters.filter((chapter) => chapter.title.toLowerCase().includes(q));
  }

  chooseMajor(major: Major): void {
    this.selectedMajor = major;
    this.selectedSubject = null;
    this.selectedChapterIds.clear();
    this.searchQuery = '';
    this.selectedYear = 'All';
    this.loadSubjects(major.id);
    this.currentStep = 2;
  }

  chooseSubject(subject: Subject): void {
    this.selectedSubject = subject;
    this.searchQuery = '';
    this.selectedChapterIds.clear();
    this.loadChapters(subject.id);
  }

  toggleChapter(chapterId: number): void {
    if (this.selectedChapterIds.has(chapterId)) {
      this.selectedChapterIds.delete(chapterId);
    } else {
      this.selectedChapterIds.add(chapterId);
    }
  }

  selectAllChapters(select: boolean): void {
    if (!this.selectedSubject) return;
    if (select) {
      this.filteredChapters.forEach((chapter) => this.selectedChapterIds.add(chapter.id));
    } else {
      this.selectedChapterIds.clear();
    }
  }

  startPracticeSession(): void {
    if (!this.selectedSubject || this.selectedChapterIds.size === 0) {
      return;
    }

    const chapterQueue = [...this.selectedChapterIds];
    const firstQuizId = chapterQueue.shift()!;

    this.quizAttemptApi.start(firstQuizId, this.quizMode).subscribe({
      next: () => {
        this.router.navigate(['/app/quiz', firstQuizId]);
      }
    });
  }

  goToStep(step: 1 | 2 | 3): void {
    this.searchQuery = '';
    if (step === 1) this.currentStep = 1;
    if (step === 2 && this.selectedMajor) this.currentStep = 2;
  }
}