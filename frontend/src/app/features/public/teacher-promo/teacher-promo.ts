import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';

@Component({
  selector: 'app-teacher-promo',
  standalone: true,
  imports: [CommonModule, RouterLink, TranslocoModule],
  templateUrl: './teacher-promo.html',
  styleUrl: './teacher-promo.scss',
})
export class TeacherPromo {}