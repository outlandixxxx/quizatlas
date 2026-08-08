export interface LandingStats {
  total_questions: number;
  total_quizzes_attempted: number;
}

export interface PopularQuiz {
  id: number;
  title: string;
  category: string | null;
  questions_count: number;
  average_rating: number | null;
  ratings_count: number;
}

export interface NewQuiz {
  id: number;
  title: string;
  category: string | null;
  questions_count: number;
}

export interface LeaderboardPreviewUser {
  rank: number;
  name: string;
  points: number;
  avatar: string | null;
}

export interface LandingData {
  stats: LandingStats;
  popular_quizzes: PopularQuiz[];
  new_quizzes: NewQuiz[];
  leaderboard_preview: LeaderboardPreviewUser[];
}