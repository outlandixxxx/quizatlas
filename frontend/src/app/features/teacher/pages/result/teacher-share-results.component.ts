import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ActivatedRoute } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';
import { TeacherShareApi } from '../../services/teacher-share.api';
import { ShareResults } from '../../../../core/models/teacher';

@Component({
  selector: 'app-teacher-share-results',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './teacher-share-results.component.html',
  styleUrl: './teacher-share-results.component.scss',
})
export class TeacherShareResultsComponent implements OnInit {
  private readonly route = inject(ActivatedRoute);
  private readonly teacherApi = inject(TeacherShareApi);

  results: ShareResults | null = null;
  isLoading = false;

  ngOnInit(): void {
    const shareId = Number(this.route.snapshot.paramMap.get('shareId'));
    this.isLoading = true;
    this.teacherApi.results(shareId).subscribe({
      next: (res) => { this.results = res.data; this.isLoading = false; },
      error: () => { this.isLoading = false; }
    });
  }

  get avgPercentage(): number {
    if (!this.results?.attempts.length) return 0;
    const sum = this.results.attempts.reduce((acc, a) => acc + a.percentage, 0);
    return Math.round(sum / this.results.attempts.length);
  }
}