export interface UserPreferences {
  emailNotifications?: boolean;
  soundEffects?: boolean;
  theme?: string;
  [key: string]: any;
}

export interface User {
  id: number;
  name: string;
  email: string;
  role: string;
  university?: string | null;
  major?: string | null;
  academic_year?: string | null;
  target_exam_date?: string | null;
  bio?: string | null;
  country?: string | null;
  avatar_url?: string | null;
  xp?: number;
  level?: number;
  xp_into_current_level?: number;
  xp_for_next_level?: number;
  current_streak?: number;
  is_premium?: boolean;
  preferences?: UserPreferences;
  created_at?: string;
  updated_at?: string;
}