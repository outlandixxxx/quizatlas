import { Injectable, PLATFORM_ID, DestroyRef, effect, inject, signal } from '@angular/core';
import { isPlatformBrowser } from '@angular/common';
import { firstValueFrom, timeout } from 'rxjs';
import { ConcoursFollowingApi } from './concours-following-api';
import { AuthState } from '../../features/auth/services/auth-state';
import { Token } from './token';
import { API_BASE_URL } from '../constants/api-base-url';

@Injectable({ providedIn: 'root' })
export class ConcoursBrowserPush {
  private readonly api = inject(ConcoursFollowingApi);
  private readonly auth = inject(AuthState);
  private readonly token = inject(Token);
  private readonly base = inject(API_BASE_URL);
  private readonly browser = isPlatformBrowser(inject(PLATFORM_ID));
  private readonly storageKey = 'maroquiz.concours.push-device';
  readonly enabled = signal(false);
  readonly busy = signal(false);
  private operations = 0;
  private startOperation() {
    this.operations++;
    this.busy.set(true);
  }
  private endOperation() {
    this.operations--;
    this.busy.set(this.operations > 0);
  }
  readonly supported =
    this.browser &&
    typeof window !== 'undefined' &&
    window.isSecureContext &&
    'Notification' in window &&
    'serviceWorker' in navigator &&
    'PushManager' in window;
  private device: { id: number; user_id: number } | null = this.readDevice();
  constructor() {
    if (this.supported) {
      this.enabled.set(!!this.device && Notification.permission === 'granted');
      const destroy = inject(DestroyRef);
      const check = () => {
        if (this.device && Notification.permission !== 'granted') void this.disable();
      };
      document.addEventListener('visibilitychange', check);
      destroy.onDestroy(() => document.removeEventListener('visibilitychange', check));
      void navigator.permissions
        ?.query({ name: 'notifications' })
        .then((permission) => {
          if (!destroy.destroyed) {
            permission.onchange = check;
            destroy.onDestroy(() => (permission.onchange = null));
          }
        })
        .catch(() => {});
      effect(() => {
        const user = this.auth.user();
        const loading = this.auth.loading();
        if (
          this.device &&
          ((user && this.device.user_id !== user.id) || (!user && !loading && !this.token.has()))
        )
          void this.disable();
      });
    }
  }
  private readDevice() {
    if (!this.browser) return null;
    try {
      return JSON.parse(localStorage.getItem(this.storageKey) || 'null') as {
        id: number;
        user_id: number;
      } | null;
    } catch {
      return null;
    }
  }
  private async workerMessage(message: object) {
    if (!this.supported) return;
    const registration = await navigator.serviceWorker.getRegistration('/');
    if (!registration?.active) return;
    await new Promise<void>((resolve) => {
      const channel = new MessageChannel();
      const finish = () => {
        clearTimeout(timeout);
        channel.port1.close();
        channel.port2.close();
        resolve();
      };
      const timeout = setTimeout(finish, 1500);
      channel.port1.onmessage = finish;
      registration.active!.postMessage(message, [channel.port2]);
    });
  }
  async enable(publicKey: string, language: string): Promise<boolean> {
    if (!this.supported || this.busy() || !this.auth.user()) return false;
    const expectedUser = this.auth.user()!.id;
    this.startOperation();
    let subscription: PushSubscription | null = null;
    try {
      // The first permission request is reached only from the explicit enable button.
      const permission = await Notification.requestPermission();
      if (permission !== 'granted') {
        await this.disable();
        return false;
      }
      const registration = await navigator.serviceWorker.register('/concours-push-sw.js', {
        scope: '/',
        updateViaCache: 'none',
      });
      await navigator.serviceWorker.ready;
      subscription = await registration.pushManager.getSubscription();
      if (!subscription) {
        const encoded = publicKey.replace(/-/g, '+').replace(/_/g, '/');
        const bytes = Uint8Array.from(
          atob(encoded + '='.repeat((4 - (encoded.length % 4)) % 4)),
          (c) => c.charCodeAt(0),
        );
        subscription = await registration.pushManager.subscribe({
          userVisibleOnly: true,
          applicationServerKey: bytes,
        });
      }
      if (Notification.permission !== 'granted' || this.auth.user()?.id !== expectedUser) {
        await subscription.unsubscribe();
        return false;
      }
      const response = await firstValueFrom(
        this.api
          .registerPush({ ...subscription.toJSON(), permission: 'granted', language })
          .pipe(timeout(15000)),
      );
      this.device = { id: response.data.id, user_id: response.data.user_id };
      if (Notification.permission !== 'granted' || this.auth.user()?.id !== expectedUser) {
        await this.disable();
        return false;
      }
      localStorage.setItem(this.storageKey, JSON.stringify(this.device));
      registration.active?.postMessage({
        type: 'consent',
        enabled: true,
        user_id: response.data.user_id,
        follow_ids: response.data.follow_ids,
        api_base: this.base,
      });
      this.enabled.set(true);
      return true;
    } catch (error) {
      await subscription?.unsubscribe().catch(() => false);
      await this.disable();
      throw error;
    } finally {
      this.endOperation();
    }
  }
  async syncFollow(id: number, enabled: boolean) {
    await this.workerMessage({ type: 'follow', concours_id: id, enabled });
  }
  async disable(): Promise<void> {
    this.startOperation();
    try {
      const previous = this.device;
      this.enabled.set(false);
      this.device = null;
      if (!this.browser) return;
      localStorage.removeItem(this.storageKey);
      // Disable local display first, including delayed messages already accepted by a push vendor.
      await this.workerMessage({ type: 'consent', enabled: false }).catch(() => {});
      if (this.supported) {
        const registration = await navigator.serviceWorker
          .getRegistration('/')
          .catch(() => undefined);
        await registration?.pushManager
          .getSubscription()
          .then((s) => s?.unsubscribe())
          .catch(() => {});
      }
      if (previous && this.auth.user()?.id === previous.user_id) {
        await firstValueFrom(this.api.disablePush(previous.id).pipe(timeout(5000))).catch(() => {});
      }
    } finally {
      this.endOperation();
    }
  }
}
