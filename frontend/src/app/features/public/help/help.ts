import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';

@Component({
  selector: 'app-help',
  standalone: true,
  imports: [CommonModule, RouterLink, TranslocoModule],
  templateUrl: './help.html',
  styleUrl: './help.scss',
})
export class Help {}