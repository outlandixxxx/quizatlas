import {
  Component,
  Injector,
  afterNextRender,
  effect,
  inject,
  input,
  output,
  signal,
  DestroyRef,
} from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { TranslocoPipe } from '@jsverse/transloco';
import { forkJoin, of, finalize } from 'rxjs';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { AuthState } from '../../auth/services/auth-state';
import { ConcoursFollowingApi } from '../../../core/services/concours-following-api';
import { ConcoursBrowserPush } from '../../../core/services/concours-browser-push';
import { LanguageService } from '../../../core/services/language';
import {
  DirectoryRecord,
  orderedPreparationOptions,
  preparationOptionName,
} from '../../../core/models/concours';
import {
  ConcoursFollow as Follow,
  ConcoursNotificationConfiguration,
  emptyConcoursFollow,
} from '../../../core/models/concours-follow';

@Component({
  selector: 'app-concours-follow',
  standalone: true,
  imports: [FormsModule, TranslocoPipe],
  templateUrl: './concours-follow.html',
  styleUrl: './concours-follow.scss',
})
export class ConcoursFollow {
  readonly concours = input.required<DirectoryRecord>();
  readonly initial = input<Follow | null>(null);
  readonly changed = output<Follow>();
  readonly auth = inject(AuthState);
  readonly language = inject(LanguageService);
  private readonly router = inject(Router);
  private readonly injector = inject(Injector);
  private readonly destroy = inject(DestroyRef);
  private readonly client = signal(false);
  readonly state = signal<Follow>(emptyConcoursFollow());
  readonly configuration = signal<ConcoursNotificationConfiguration | null>(null);
  readonly loading = signal(false);
  readonly saving = signal(false);
  readonly error = signal('');
  readonly pushMessage = signal('');
  readonly ready = signal(false);
  preferences = emptyConcoursFollow();
  get push() {
    return this.injector.get(ConcoursBrowserPush);
  }
  constructor() {
    afterNextRender(() => this.client.set(true));
    effect((onCleanup) => {
      const concours = this.concours(),
        initial = this.initial();
      const user = this.auth.user();
      if (!this.client() || !user) {
        this.state.set(emptyConcoursFollow());
        this.ready.set(false);
        return;
      }
      const request = this.load(concours.id, initial);
      onCleanup(() => request.unsubscribe());
    });
  }
  options() {
    return orderedPreparationOptions(this.concours().preparation_options ?? []);
  }
  optionName = (option: Parameters<typeof preparationOptionName>[0]) =>
    preparationOptionName(option, this.language.language());
  private load(id: number, initial: Follow | null) {
    this.loading.set(true);
    this.error.set('');
    this.ready.set(false);
    const api = this.injector.get(ConcoursFollowingApi);
    return forkJoin({
      state: initial ? of({ data: initial }) : api.show(id),
      configuration: api.configuration(),
    })
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.loading.set(false)),
      )
      .subscribe({
        next: (r) => {
          this.state.set(r.state.data);
          this.preferences = {
            ...r.state.data,
            preparation_option_ids: [...r.state.data.preparation_option_ids],
            reminder_days: [...r.state.data.reminder_days],
          };
          this.configuration.set(r.configuration.data);
          this.ready.set(true);
        },
        error: () => this.error.set('concoursFollowing.loadError'),
      });
  }
  reload() {
    this.load(this.concours().id, null);
  }
  toggle() {
    if (!this.auth.authenticated()) {
      void this.router.navigate(['/login'], {
        queryParams: { returnUrl: '/concours/' + this.concours().slug },
      });
      return;
    }
    this.save(!this.state().active);
  }
  setDay(day: number, checked: boolean) {
    this.preferences.reminder_days = checked
      ? [...new Set([...this.preferences.reminder_days, day])]
      : this.preferences.reminder_days.filter((d) => d !== day);
  }
  save(active = true) {
    if (!this.ready() || this.saving()) return;
    this.saving.set(true);
    this.error.set('');
    const data = { ...this.preferences, active, version: this.state().version };
    this.injector
      .get(ConcoursFollowingApi)
      .save(this.concours().id, data)
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.saving.set(false)),
      )
      .subscribe({
        next: (r) => {
          this.state.set(r.data);
          this.preferences = { ...r.data };
          void this.push.syncFollow(this.concours().id, r.data.active && r.data.browser_push);
          this.changed.emit(r.data);
        },
        error: (e) =>
          this.error.set(
            e.status === 409 ? 'concoursFollowing.conflict' : 'concoursFollowing.saveError',
          ),
      });
  }
  async enableBrowser() {
    this.pushMessage.set('');
    const key = this.configuration()?.vapid_public_key;
    if (!this.configuration()?.push_available || !key) return;
    try {
      const enabled = await this.push.enable(key, this.language.language());
      this.pushMessage.set(
        enabled ? 'concoursFollowing.browserEnabled' : 'concoursFollowing.permissionDenied',
      );
    } catch {
      this.pushMessage.set('concoursFollowing.browserError');
    }
  }
  async disableBrowser() {
    await this.push.disable();
    this.pushMessage.set('concoursFollowing.browserDisabled');
  }
}
