<?php

namespace Tests\Feature;

use App\Models\Achievement;
use App\Models\QuizAttempt;
use App\Models\User;
use App\Services\XpService;
use Tests\QuizTestCase;

class QuizProgressionTest extends QuizTestCase
{
    private function progression(User $user): array
    {
        return [
            'total_xp' => $user->xp,
            'level' => $user->level(),
            'xp_into_current_level' => $user->xpIntoCurrentLevel(),
            'xp_for_next_level' => $user->xpForNextLevel(),
        ];
    }

    public function test_submission_and_result_expose_real_progression_and_level_up_without_client_awards(): void
    {
        $user = $this->student();
        $user->update(['xp' => 70]);
        $quiz = $this->quiz();
        $this->question($quiz);
        $id = $this->asUser($user)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->json('data.id');

        $response = $this->asUser($user)->postJson('/api/v1/quiz-attempts/'.$id.'/submit', [
            'xp_earned' => 99999, 'xp' => 99999, 'level' => 100, 'score' => 100,
        ])->assertOk()->assertJsonPath('rewards.xp_earned', 40)
            ->assertJsonPath('rewards.level_before', 1)->assertJsonPath('rewards.level_after', 2)
            ->assertJsonPath('rewards.leveled_up', true);
        $expected = $this->progression($user->fresh());
        $this->assertSame(110, $expected['total_xp']);
        $this->assertSame($expected, $response->json('rewards.progression'));
        $this->asUser($user)->getJson('/api/v1/quiz-attempts/'.$id.'/result')->assertOk()
            ->assertJsonPath('data.progression', ['xp_earned' => 40, ...$expected])
            ->assertJsonPath('data.unanswered_count', 1)->assertJsonPath('data.score', 0);

        // A lost submit response can be reconciled repeatedly without another award.
        $this->asUser($user)->postJson('/api/v1/quiz-attempts/'.$id.'/submit')->assertConflict();
        $this->asUser($user)->getJson('/api/v1/quiz-attempts/'.$id)->assertOk()->assertJsonPath('data.status', 'submitted');
        $this->asUser($user)->getJson('/api/v1/quiz-attempts/'.$id.'/result')->assertOk();
        $this->assertSame(110, $user->fresh()->xp);
        $this->assertDatabaseCount('xp_transactions', 1);
    }

    public function test_attempt_xp_stays_fixed_while_total_progression_reflects_later_awards(): void
    {
        $user = $this->student();
        $user->update(['xp' => 0]);
        Achievement::create(['key' => 'first_quiz', 'title' => 'First quiz', 'description' => 'Fixture', 'xp_reward' => 100]);
        $quiz = $this->quiz();
        $question = $this->question($quiz);
        $id = $this->asUser($user)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->json('data.id');
        $this->asUser($user)->postJson('/api/v1/quiz-attempts/'.$id.'/answer', [
            'question_id' => $question->id, 'choice_ids' => $question->choices->where('is_correct', true)->pluck('id')->all(),
        ])->assertOk();
        $submit = $this->asUser($user)->postJson('/api/v1/quiz-attempts/'.$id.'/submit')->assertOk();
        // Existing rules: 2 correct choices * 10 + completion 40 + perfect 100.
        $submit->assertJsonPath('rewards.xp_earned', 160)->assertJsonPath('rewards.progression.total_xp', 260)
            ->assertJsonCount(1, 'rewards.newly_unlocked_achievements');
        app(XpService::class)->award($user->fresh(), 25, 'fixture', 'Later independent award');
        $this->asUser($user)->getJson('/api/v1/quiz-attempts/'.$id.'/result')->assertOk()
            ->assertJsonPath('data.progression', ['xp_earned' => 160, ...$this->progression($user->fresh())]);
        $this->assertSame(285, $user->fresh()->xp);
        $this->assertDatabaseCount('user_achievements', 1);
    }

    public function test_expiration_retrieval_and_refresh_award_completion_only_once(): void
    {
        $user = $this->student();
        $user->update(['xp' => 0]);
        $quiz = $this->quiz();
        $this->question($quiz);
        $id = $this->asUser($user)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->json('data.id');
        QuizAttempt::findOrFail($id)->update(['started_at' => now()->subMinutes(2)]);
        foreach (range(1, 3) as $_) {
            $this->asUser($user)->getJson('/api/v1/quiz-attempts/'.$id.'/result')->assertOk()
                ->assertJsonPath('data.status', 'expired')->assertJsonPath('data.progression.xp_earned', 40)
                ->assertJsonPath('data.progression.level', 1)->assertJsonPath('data.progression.total_xp', 40);
        }
        $this->assertDatabaseCount('xp_transactions', 1);
        $this->assertSame(40, $user->fresh()->xp);
    }

    public function test_progression_remains_private_and_unfinished_results_are_unavailable(): void
    {
        $owner = $this->student();
        $other = $this->student();
        $quiz = $this->quiz();
        $this->question($quiz);
        $id = $this->asUser($owner)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->json('data.id');
        $this->asUser($owner)->getJson('/api/v1/quiz-attempts/'.$id.'/result')->assertConflict()->assertJsonMissingPath('data.progression');
        $this->asUser($owner)->postJson('/api/v1/quiz-attempts/'.$id.'/submit')->assertOk();
        $this->asUser($other)->getJson('/api/v1/quiz-attempts/'.$id.'/result')->assertForbidden()->assertJsonMissingPath('data.progression');
        $this->asUser(null)->getJson('/api/v1/quiz-attempts/'.$id.'/result')->assertUnauthorized()->assertJsonMissingPath('data.progression');
    }
}
