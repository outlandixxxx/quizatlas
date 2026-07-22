import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { TranslocoDirective, TranslocoPipe } from '@jsverse/transloco';
import { Logo } from '../../../../shared/components/ui/logo/logo'; 

@Component({
  selector: 'app-public-footer',
  standalone: true,
  imports: [
    CommonModule, 
    RouterModule, 
    TranslocoDirective, 
    TranslocoPipe, 
    Logo
  ],
  templateUrl: './footer.html',
  styleUrl: './footer.scss'
})
export class PublicFooter {}