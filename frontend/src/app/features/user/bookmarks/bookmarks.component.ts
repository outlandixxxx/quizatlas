import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Router } from '@angular/router';
import { TranslocoModule, TranslocoService } from '@jsverse/transloco';

import { BookmarkApi, ApiBookmarkItem } from '../services/bookmark.api';

export interface BookmarkRow {
  id: number;
  questionId: number;
  quizId: number;
  topic: string;
  questionText: string;
  savedDate: string;
}

@Component({
  selector: 'app-bookmarks',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './bookmarks.component.html',
  styleUrl: './bookmarks.component.scss'
})
export class BookmarksComponent implements OnInit {
  private readonly bookmarkApi = inject(BookmarkApi);
  private readonly router = inject(Router);
  private readonly transloco = inject(TranslocoService);

  bookmarks: BookmarkRow[] = [];
  isLoading = false;

  ngOnInit(): void {
    this.load();
  }

  private mapRow(item: ApiBookmarkItem): BookmarkRow {
    return {
      id: item.id,
      questionId: item.question_id,
      quizId: item.quiz_id,
      topic: item.subject_name ?? this.transloco.translate('bookmarks.generalTopic'),
      questionText: item.question_text,
      savedDate: new Date(item.saved_at).toLocaleDateString(this.transloco.getActiveLang(), { month: 'short', day: 'numeric', year: 'numeric' }),
    };
  }

  private load(): void {
    this.isLoading = true;
    this.bookmarkApi.list().subscribe({
      next: (res) => {
        this.bookmarks = res.data.data.map((b) => this.mapRow(b));
        this.isLoading = false;
      },
      error: () => { this.isLoading = false; }
    });
  }

  removeBookmark(row: BookmarkRow): void {
    this.bookmarkApi.toggle(row.questionId).subscribe({
      next: () => {
        this.bookmarks = this.bookmarks.filter((b) => b.id !== row.id);
      }
    });
  }

  practiceQuestion(row: BookmarkRow): void {
    this.router.navigate(['/app/quiz', row.quizId]);
  }
}