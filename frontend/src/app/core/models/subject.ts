import { Major } from './major';

export interface Subject {
  id: number;
  major: Major;
  name: string;
  slug: string;
  description: string | null;
  is_active: boolean;
}

export interface SubjectPayload {
  major_id: number;
  name: string;
  description?: string | null;
  is_active?: boolean;
}