export interface Dashboard {
  hero: DashboardHero;
  stats: DashboardStats;
  in_progress_quizzes: InProgressQuiz[];
  recommended_quizzes: RecommendedQuiz[];
  recent_results: RecentResult[];
  daily_goal: DailyGoal;
  achievements: Achievement[];
  leaderboard: LeaderboardUser[];
}

export interface DashboardHero {
  user_name: string;
  last_quiz: string | null;
  quiz_id: number | null;
  progress: number;
}

export interface DashboardStats {
  completed_quizzes: number;
  completed_quizzes_trend: number;
  average_score: number;
  average_score_trend: number | null;
  streak: number;
  time_spent: number;
  time_spent_trend: number;
}

export interface InProgressQuiz {
  id: number;
  quiz_id: number;
  title: string;
  category: string | null;
  level: string;
  progress: number;
}

export interface RecommendedQuiz {
  id: number;
  title: string;
  category: string | null;
  level: string;
  duration: number;
}

export interface RecentResult {
  id: number;
  name: string;
  category: string | null;
  score: number;
  status: 'Passed' | 'Failed';
}

export interface DailyGoal {
  completed: number;
  target: number;
  percentage: number;
}

export interface Achievement {
  id: number;
  key: string;
  title: string;
  icon: string;
  unlocked: boolean;
  unlocked_at: string | null;
}

export interface LeaderboardUser {
  rank: number;
  name: string;
  points: number;
  avatar: string;
  isCurrentUser?: boolean;
}