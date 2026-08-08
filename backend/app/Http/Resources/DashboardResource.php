<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DashboardResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'hero' => [
    'user_name' => $this['hero']['user_name'],
    'last_quiz' => $this['hero']['last_quiz'],
    'quiz_id' => $this['hero']['quiz_id'],
    'progress' => $this['hero']['progress'],
],

            'stats' => [
                'completed_quizzes' => $this['stats']['completed_quizzes'],
                'completed_quizzes_trend' => $this['stats']['completed_quizzes_trend'],
                'average_score' => $this['stats']['average_score'],
                'average_score_trend' => $this['stats']['average_score_trend'],
                'streak' => $this['stats']['streak'],
                'time_spent' => $this['stats']['time_spent'],
                'time_spent_trend' => $this['stats']['time_spent_trend'],
            ],

            'in_progress_quizzes' => $this['in_progress_quizzes'],

            'recommended_quizzes' => $this['recommended_quizzes'],

            'recent_results' => $this['recent_results'],

            'daily_goal' => [
                'completed' => $this['daily_goal']['completed'],
                'target' => $this['daily_goal']['target'],
                'percentage' => $this['daily_goal']['percentage'],
            ],

            'achievements' => $this['achievements'],

            'leaderboard' => $this['leaderboard'],
        ];
    }
}