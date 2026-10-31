import { DirectoryRecord, DirectoryPage } from './concours';
export interface ConcoursFollow {
  id?: number;
  concours_id?: number;
  active: boolean;
  version: number;
  preparation_option_ids: number[];
  in_app: boolean;
  browser_push: boolean;
  announcements: boolean;
  updates: boolean;
  deadlines: boolean;
  reminder_days: number[];
}
export interface FollowedConcours extends ConcoursFollow {
  concours: DirectoryRecord;
  available: boolean;
}
export interface FollowPage {
  items: FollowedConcours[];
  meta: DirectoryPage['meta'];
}
export interface ConcoursNotificationConfiguration {
  delivery_enabled: boolean;
  reminder_days: number[];
  push_available: boolean;
  vapid_public_key: string | null;
}
export const emptyConcoursFollow = (): ConcoursFollow => ({
  active: false,
  version: 0,
  preparation_option_ids: [],
  in_app: true,
  browser_push: false,
  announcements: true,
  updates: true,
  deadlines: true,
  reminder_days: [7, 1],
});
