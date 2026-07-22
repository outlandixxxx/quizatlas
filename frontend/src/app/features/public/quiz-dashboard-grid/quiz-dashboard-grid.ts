import { ChangeDetectionStrategy, Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';

@Component({
  selector: 'app-quiz-dashboard-grid',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './quiz-dashboard-grid.html',
  styleUrl: './quiz-dashboard-grid.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class QuizDashboardGrid {}