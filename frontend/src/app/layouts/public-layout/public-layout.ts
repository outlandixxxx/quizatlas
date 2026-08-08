import { ChangeDetectionStrategy, Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterOutlet } from '@angular/router';
import { PublicHeader } from './components/public-header/public-header';
import { PublicFooter } from './components/public-footer/footer';
import { AdSlotComponent } from '../../features/ad-slot/ad-slot.component';



@Component({
  selector: 'app-public-layout',
  standalone: true,
  imports: [
    CommonModule,
    RouterOutlet,
    PublicHeader,
    PublicFooter,
    AdSlotComponent
  ],
  templateUrl: './public-layout.html',
  styleUrl: './public-layout.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class PublicLayout {}