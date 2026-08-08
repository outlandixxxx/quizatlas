import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-analytics',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './analytics.component.html',
  styleUrl: './analytics.component.scss'
})
export class AnalyticsComponent {
  timeframe = 'Last 30 Days';

  topicPerformance = [
    { topic: 'JavaScript', score: 90 },
    { topic: 'CSS', score: 85 },
    { topic: 'HTML', score: 80 },
    { topic: 'Python', score: 70 }
  ];
}