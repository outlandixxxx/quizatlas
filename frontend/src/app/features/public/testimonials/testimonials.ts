import { ChangeDetectionStrategy, Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';

@Component({
  selector: 'app-testimonials',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './testimonials.html',
  styleUrl: './testimonials.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class Testimonials {
  // Simple active tab tracking for the language toggles in the section heading
  activeLangTab = 'fr';

  setLangTab(lang: string): void {
    this.activeLangTab = lang;
  }
}