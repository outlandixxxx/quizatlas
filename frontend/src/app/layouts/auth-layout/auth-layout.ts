import { ChangeDetectionStrategy, Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { Sidebar } from '../../shared/components/ui/navigation/sidebar/sidebar';
import { Topbar } from '../../shared/components/ui/navigation/topbar/topbar';



@Component({
  imports: [
    RouterOutlet,
    Sidebar,
    Topbar,
  ],
  selector: 'app-auth-layout',
templateUrl: './auth-layout.html',
styleUrl: './auth-layout.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class AuthLayout {}