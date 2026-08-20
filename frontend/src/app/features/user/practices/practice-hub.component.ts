import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterLink } from '@angular/router';
import { TranslocoModule, TranslocoService } from '@jsverse/transloco';

import { QuizAttemptApi, ApiHistoryItem } from '../services/quiz-attempt.api';
import { QuizJoinComponent } from '../../teacher/pages/quiz-join/quiz-join.component';

export interface HistoryRow {
  id: number;
  title: string;
  type: string;
  questionsCount: number;
  score: number;
  date: string;
}

@Component({
  selector: 'app-practice-hub',
  standalone: true,
  imports: [CommonModule, FormsModule, RouterLink, QuizJoinComponent, TranslocoModule],
  templateUrl: './practice-hub.component.html',
  styleUrl: './practice-hub.component.scss'
})
export class PracticeHubComponent implements OnInit {
  private readonly quizAttemptApi = inject(QuizAttemptApi);
  private readonly transloco = inject(TranslocoService);

  searchQuery = '';
  history: HistoryRow[] = [];
  isLoadingHistory = false;

  ngOnInit(): void {
    this.loadHistory();
  }

  private mapRow(item: ApiHistoryItem): HistoryRow {
    return {
      id: item.id,
      title: item.session_title,
      type: item.type,
      questionsCount: item.questions_count,
      score: item.score_percentage,
      date: this.formatDate(item.submitted_at),
    };
  }

  private formatDate(iso: string): string {
    return new Date(iso).toLocaleDateString(this.transloco.getActiveLang(), { month: 'short', day: 'numeric', year: 'numeric' });
  }

  private loadHistory(): void {
    this.isLoadingHistory = true;
    this.quizAttemptApi.getHistory(5).subscribe({
      next: (res) => {
        this.history = res.data.data.map((item) => this.mapRow(item));
        this.isLoadingHistory = false;
      },
      error: () => { this.isLoadingHistory = false; }
    });
  }

  get filteredHistory(): HistoryRow[] {
    if (!this.searchQuery.trim()) return this.history;
    const q = this.searchQuery.toLowerCase();
    return this.history.filter((h) => h.title.toLowerCase().includes(q));
  }
}