export interface AchievementDetail {
  id: number;
  key: string;
  title: string;
  description: string;
  icon: string;
  xp_reward: number;
  unlocked: boolean;
  unlocked_at: string | null;
}