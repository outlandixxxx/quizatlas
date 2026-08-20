import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';

@Component({
  selector: 'app-blog',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './blog.html',
  styleUrl: './blog.scss',
})
export class Blog {}