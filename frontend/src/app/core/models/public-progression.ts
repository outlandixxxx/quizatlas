export interface PublicLevelThreshold {
  level: number;
  xp_start: number;
  xp_end: number;
}

export interface PublicAchievementPreview {
  key: string;
  title: string;
  description: string;
  icon: string;
  xp_reward: number;
}

export interface PublicProgressionShowcase {
  levels: PublicLevelThreshold[];
  achievements: PublicAchievementPreview[];
}