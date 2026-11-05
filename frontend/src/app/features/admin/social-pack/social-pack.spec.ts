import { TestBed } from '@angular/core/testing';
import { of, Subject, throwError } from 'rxjs';
import { vi } from 'vitest';
import { AdminSocialPack } from './social-pack';
import { ContentUsageApi } from '../services/content-usage.api';
import { MajorApi } from '../services/major.api';
import { SocialPack, SocialPackApi } from '../services/social-pack.api';

const operation = '12345678-1234-4234-8234-123456789012';
const pack: SocialPack = {
  generated_at: '2026-11-05T00:00:00Z', difficulties: ['Beginner'], facts_per_video: 30,
  days: [{ date: '2026-11-09', long_video: 'none', major: { id: 7, name: 'Science' }, subject: null,
    question_du_jour: null, quiz_short: null, facebook_group: null, fact_video: null, warnings: [],
    fact_short: { number: 1, fact: { id: 31, subject_id: 19, subject_name: 'Physics', fr: 'La lumière se propage.', ar: 'ينتشر الضوء.', en: 'Light travels.', source_url: null } },
  }],
};
let page: AdminSocialPack, api: any, usage: any, clipboard: ReturnType<typeof vi.fn>;

beforeEach(() => {
  vi.useFakeTimers();
  api = { preview: vi.fn(() => of({ data: pack })), confirm: vi.fn(() => of({ data: { created: 1, skipped: [] } })) };
  usage = { export: vi.fn((_kind: string, content: string) => of({ data: { content, operation: { id: operation } } })) };
  clipboard = vi.fn().mockResolvedValue(undefined);
  Object.defineProperty(navigator, 'clipboard', { configurable: true, value: { writeText: clipboard } });
  TestBed.configureTestingModule({ providers: [
    { provide: MajorApi, useValue: {} }, { provide: SocialPackApi, useValue: api }, { provide: ContentUsageApi, useValue: usage },
  ] });
  page = TestBed.runInInjectionContext(() => new AdminSocialPack());
  page.dayConfigs.set([{ date: '2026-11-09', dayOfWeek: 1, majorId: 7, longVideo: 'none' }]);
});
afterEach(() => { vi.clearAllTimers(); vi.useRealTimers(); TestBed.resetTestingModule(); });

it('builds a preview without allocating or exporting any content', () => {
  page.buildPack();
  expect(page.pack()).toEqual(pack); expect(page.isBuilding()).toBe(false);
  expect(usage.export).not.toHaveBeenCalled(); expect(api.confirm).not.toHaveBeenCalled();
  page.weekJson(); page.factShortJson(pack.days[0]);
  expect(usage.export).not.toHaveBeenCalled();
});

it('retains the complete pack before copying each derived caption or JSON', async () => {
  page.pack.set(pack);
  await page.copy('Caption', 'caption');
  await page.copy(page.factShortJson(pack.days[0]), 'fact');
  expect(usage.export.mock.calls).toEqual([['posts-json', page.weekJson()], ['posts-json', page.weekJson()]]);
  expect(clipboard.mock.calls[0]).toEqual(['Caption']); expect(page.copiedKey()).toBe('fact');
});

it('links confirmation to the retained pack and prevents overlapping or duplicate confirmations', () => {
  page.pack.set(pack); const pending = new Subject<any>(); api.confirm.mockReturnValue(pending);
  page.confirmPack(); page.confirmPack();
  expect(api.confirm).toHaveBeenCalledTimes(1);
  expect(api.confirm.mock.calls[0][1]).toBe(operation);
  expect(api.confirm.mock.calls[0][0][0]).toMatchObject({ fact_id: 31, subject_id: 19, format: 'fact_short' });
  pending.next({ data: { created: 1, skipped: [] } }); pending.complete();
  page.confirmPack(); expect(api.confirm).toHaveBeenCalledTimes(1); expect(page.confirmed()).toBe(true);
});

it('does not copy or confirm content when the central export rejects its availability', async () => {
  page.pack.set(pack);
  usage.export.mockReturnValue(throwError(() => ({ error: { message: 'Content is reserved or already used.' } })));
  await page.copy('Caption', 'caption'); page.confirmPack();
  expect(clipboard).not.toHaveBeenCalled(); expect(api.confirm).not.toHaveBeenCalled();
  expect(page.errorMsg()).toContain('already used'); expect(page.isConfirming()).toBe(false); expect(page.confirmed()).toBe(false);
});
