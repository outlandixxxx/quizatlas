import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';

interface FaqItem {
  key: string;
  open: boolean;
}

@Component({
  selector: 'app-faq',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './faq.html',
  styleUrl: './faq.scss',
})
export class Faq {
  items: FaqItem[] = [
    { key: 'q1', open: false },
    { key: 'q2', open: false },
    { key: 'q3', open: false },
    { key: 'q4', open: false },
    { key: 'q5', open: false },
    { key: 'q6', open: false },
  ];

  toggle(item: FaqItem): void {
    item.open = !item.open;
  }
}