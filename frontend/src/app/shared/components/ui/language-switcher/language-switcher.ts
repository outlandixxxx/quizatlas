import {
  ChangeDetectionStrategy,
  Component,
  HostListener,
  inject,
  signal
} from '@angular/core';

import { CommonModule } from '@angular/common';
import { LanguageService } from '../../../../core/services/language';
import { Language } from '../../../../core/models/language';



@Component({
  selector: 'app-language-switcher',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './language-switcher.html',
  styleUrl: './language-switcher.scss',
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class LanguageSwitcher {

  readonly languageService = inject(LanguageService);

  readonly opened = signal(false);

  readonly languages = [

    {
      code:'en' as Language,
      label:'English'
    },

    {
      code:'fr' as Language,
      label:'Français'
    },

    {
      code:'ar' as Language,
      label:'العربية'
    }

  ];

  toggle():void{

    this.opened.update(v=>!v);

  }

  choose(language:Language):void{

    this.languageService.setLanguage(language);

    this.opened.set(false);

  }

  current(){

    return this.languages.find(

      x=>x.code===this.languageService.language()

    )!;

  }

  @HostListener('document:click')

  close(){

    this.opened.set(false);

  }

}