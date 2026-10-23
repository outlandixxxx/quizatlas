import { Component, inject } from '@angular/core';
import { Seo } from '../../../core/services/seo';
import { PublicPageError } from './page-error';

@Component({
  standalone: true,
  imports: [PublicPageError],
  template: '<app-public-page-error [status]="404" />',
})
export class NotFound {
  constructor() { inject(Seo).setHttpError(404); }
}
