<?php

namespace Tests\Feature;

use App\Models\QuizAttempt;
use App\Models\Achievement;
use App\Models\Bookmark;
use App\Models\QuizShare;
use App\Models\QuizShareEnrollment;
use App\Services\QuizAttemptService;
use App\Services\ScoreCalculationService;
use App\Services\UserAnswerService;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Tests\QuizTestCase;

class QuizParticipationTest extends QuizTestCase
{
    public function test_private_and_inactive_quizzes_cannot_be_read_or_started_by_another_student(): void
    {
        $owner = $this->student('manager');
        $student = $this->student();
        foreach ([['owner_id' => $owner->id], ['is_active' => false]] as $attributes) {
            $quiz = $this->quiz($attributes);
            $this->question($quiz);
            $this->asUser($student)->getJson('/api/v1/quizzes/'.$quiz->id.'/questions')->assertForbidden();
            $this->asUser($student)->postJson('/api/v1/quizzes/'.$quiz->id.'/start', ['mode' => 'exam'])->assertForbidden();
        }
        $this->assertDatabaseCount('quiz_attempts', 0);
    }

    public function test_in_progress_exam_result_never_exposes_feedback(): void
    {
        $student = $this->student();
        $quiz = $this->quiz();
        $this->question($quiz);
        $id = $this->asUser($student)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->assertCreated()->json('data.id');
        $response = $this->asUser($student)->getJson('/api/v1/quiz-attempts/'.$id.'/result')->assertConflict();
        $this->assertStringNotContainsString('Fixture explanation', $response->getContent());
    }

    public function test_full_answer_set_replaces_and_clears_multiple_selections(): void
    {
        $student = $this->student();
        $quiz = $this->quiz();
        $q = $this->question($quiz);
        $id = $this->asUser($student)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->json('data.id');
        foreach ([[$q->choices[0]->id, $q->choices[1]->id], [$q->choices[1]->id], []] as $ids) {
            $this->asUser($student)->postJson('/api/v1/quiz-attempts/'.$id.'/answer', ['question_id' => $q->id, 'choice_ids' => $ids])->assertOk();
            $this->assertEquals($ids, QuizAttempt::findOrFail($id)->userAnswers()->orderBy('choice_id')->pluck('choice_id')->all());
        }
    }

    public function test_late_answer_finalizes_saved_answers_and_cannot_extend_the_deadline(): void
    {
        $student = $this->student();
        $quiz = $this->quiz();
        $q = $this->question($quiz);
        $id = $this->asUser($student)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->json('data.id');
        QuizAttempt::findOrFail($id)->update(['started_at' => now()->subHour()]);
        $this->asUser($student)->postJson('/api/v1/quiz-attempts/'.$id.'/answer', ['question_id' => $q->id, 'choice_id' => $q->choices[0]->id])->assertConflict();
        $this->assertSame('expired', QuizAttempt::findOrFail($id)->status);
        $this->assertDatabaseCount('user_answers', 0);
    }

    public function test_duplicate_submission_is_a_conflict_with_no_duplicate_rewards(): void
    {
        $student = $this->student();
        $quiz = $this->quiz();
        $this->question($quiz);
        $id = $this->asUser($student)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->json('data.id');
        $this->asUser($student)->postJson('/api/v1/quiz-attempts/'.$id.'/submit')->assertOk();
        $xp = $student->fresh()->xp;
        $this->asUser($student)->postJson('/api/v1/quiz-attempts/'.$id.'/submit')->assertConflict();
        $this->assertSame($xp, $student->fresh()->xp);
        $this->assertDatabaseCount('xp_transactions', 1);
    }

    public function test_active_private_access_requires_ownership_active_enrollment_or_admin_role(): void
    {
        $owner = $this->student('manager');
        $student = $this->student();
        $enrolled = $this->student();
        $manager = $this->student('manager');
        $admin = $this->student('admin');
        $quiz = $this->quiz(['owner_id' => $owner->id]);
        $q = $this->question($quiz);
        $share = QuizShare::create(['professor_id' => $owner->id, 'quiz_id' => $quiz->id, 'join_code' => 'FIXTURE1', 'is_active' => true]);
        QuizShareEnrollment::create(['quiz_share_id' => $share->id, 'student_id' => $enrolled->id, 'joined_at' => now()]);
        foreach ([[$student, 403], [$manager, 403], [$owner, 200], [$admin, 200], [$enrolled, 200]] as [$user, $status]) {
            $this->asUser($user)->getJson('/api/v1/quizzes/'.$quiz->id.'/questions')->assertStatus($status);
            $this->asUser($user)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->assertStatus($status === 200 ? 201 : 403);
        }
        $share->update(['is_active' => false]);
        $this->asUser($enrolled)->getJson('/api/v1/quizzes/'.$quiz->id.'/questions')->assertForbidden();
        $id = $enrolled->quizAttempts()->firstOrFail()->id;
        foreach ([['GET', '/result'], ['GET', ''], ['POST', '/submit'], ['POST', '/answer']] as [$method, $suffix]) {
            $this->asUser($enrolled)->json($method, '/api/v1/quiz-attempts/'.$id.$suffix,
                ['question_id' => $q->id, 'choice_ids' => [$q->choices[0]->id]])->assertForbidden();
        }
    }

    public function test_parent_activation_and_soft_deletion_apply_to_all_participants(): void
    {
        $admin = $this->student('admin');
        $student = $this->student();
        foreach (['subject_inactive', 'major_inactive', 'subject_deleted', 'major_deleted', 'quiz_deleted'] as $case) {
            $quiz = $this->quiz();
            $this->question($quiz);
            match ($case) {
                'subject_inactive' => $quiz->subject->update(['is_active' => false]),
                'major_inactive' => $quiz->subject->major->update(['is_active' => false]),
                'subject_deleted' => $quiz->subject->delete(),
                'major_deleted' => $quiz->subject->major->delete(),
                'quiz_deleted' => $quiz->delete(),
            };
            foreach ([$admin, $student] as $user) {
                $status = $case === 'quiz_deleted' ? 404 : 403;
                $this->asUser($user)->getJson('/api/v1/quizzes/'.$quiz->id.'/questions')->assertStatus($status);
                $this->asUser($user)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->assertStatus($status);
            }
        }
        $this->assertDatabaseCount('quiz_attempts', 0);
    }

    public function test_guest_and_cross_user_cannot_read_or_mutate_attempts_in_any_state(): void
    {
        $owner = $this->student();
        $other = $this->student();
        $quiz = $this->quiz();
        $q = $this->question($quiz);
        $attempt = app(QuizAttemptService::class)->start($quiz, $owner->id);
        foreach (['in_progress', 'submitted', 'expired'] as $state) {
            $attempt->update(['status' => $state, 'submitted_at' => $state === 'in_progress' ? null : now()]);
            foreach ([[$other, 403], [null, 401]] as [$user, $status]) {
                foreach ([['GET', '/result'], ['GET', ''], ['POST', '/submit'], ['POST', '/answer'], ['PUT', '/mode']] as [$method, $suffix]) {
                    $this->asUser($user)->json($method, '/api/v1/quiz-attempts/'.$attempt->id.$suffix,
                        ['question_id' => $q->id, 'choice_ids' => [$q->choices[0]->id], 'mode' => 'tutor'])->assertStatus($status);
                }
            }
        }
        $this->asUser(null)->getJson('/api/v1/quizzes/'.$quiz->id.'/questions')->assertUnauthorized();
        $this->asUser(null)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->assertUnauthorized();
        $this->assertDatabaseCount('user_answers', 0);
        $this->assertDatabaseCount('xp_transactions', 0);
    }

    public function test_lists_practice_bookmarks_recommendations_and_trials_filter_private_content(): void
    {
        $student = $this->student();
        $owner = $this->student('manager');
        $public = $this->quiz();
        $publicQuestion = $this->question($public);
        $private = $this->quiz(['subject_id' => $public->subject_id, 'owner_id' => $owner->id]);
        $privateQuestion = $this->question($private);
        $inactive = $this->quiz(['subject_id' => $public->subject_id, 'is_active' => false]);
        $this->question($inactive);
        Bookmark::create(['user_id' => $student->id, 'question_id' => $privateQuestion->id]);
        $this->asUser($student)->getJson('/api/v1/user/quizzes')->assertOk()->assertJsonPath('data.meta.total', 1);
        $this->asUser($student)->getJson('/api/v1/practice/subjects/'.$public->subject_id.'/chapters')->assertOk()->assertJsonCount(1, 'data');
        $this->asUser($student)->getJson('/api/v1/bookmarks')->assertOk()->assertJsonPath('data.meta.total', 0);
        $this->asUser($student)->postJson('/api/v1/bookmarks/questions/'.$privateQuestion->id.'/toggle')->assertForbidden();
        $dashboard = app(\App\Services\DashboardService::class)->getDashboard($student);
        $this->assertSame([$public->id], array_column($dashboard['recommended_quizzes'], 'id'));
        $landing = $this->asUser(null)->getJson('/api/v1/landing')->assertOk()->json('data');
        $this->assertSame([$public->id], array_column($landing['popular_quizzes'], 'id'));
        $this->assertSame([$public->id], array_column($landing['new_quizzes'], 'id'));
        $trial = $this->asUser(null)->getJson('/api/v1/trial/subject/'.$public->subject->slug)->assertOk();
        $this->assertSame([$publicQuestion->id], array_column($trial->json('data.questions'), 'id'));
        $this->asUser(null)->postJson('/api/v1/trial/grade', [
            'trial_token' => Crypt::encryptString((string) $privateQuestion->id),
            'answers' => [$privateQuestion->id => $privateQuestion->choices[0]->id],
        ])->assertUnprocessable();
    }

    public function test_single_and_true_false_replace_and_deselect_in_both_answer_contracts(): void
    {
        $student = $this->student();
        $quiz = $this->quiz();
        $attempt = app(QuizAttemptService::class)->start($quiz, $student->id);
        foreach (['single_choice', 'true_false'] as $type) {
            $q = $this->question($quiz, $type, [true, false]);
            $url = '/api/v1/quiz-attempts/'.$attempt->id.'/answer';
            foreach ([$q->choices[0]->id, $q->choices[1]->id] as $choiceId) {
                $this->asUser($student)->postJson($url, ['question_id' => $q->id, 'choice_id' => $choiceId])->assertOk();
                $this->assertSame([$choiceId], $attempt->userAnswers()->where('question_id', $q->id)->pluck('choice_id')->all());
            }
            $this->asUser($student)->postJson($url, ['question_id' => $q->id, 'choice_id' => $choiceId, 'selected' => false])->assertOk();
            $this->assertSame(0, $attempt->userAnswers()->where('question_id', $q->id)->count());
            $this->asUser($student)->postJson($url, ['question_id' => $q->id, 'choice_ids' => $q->choices->pluck('id')->all()])->assertUnprocessable();
            $this->asUser($student)->postJson($url, ['question_id' => $q->id, 'choice_ids' => [$q->choices[0]->id]])->assertOk();
            $this->asUser($student)->postJson($url, ['question_id' => $q->id, 'choice_ids' => []])->assertOk();
        }
        $this->assertDatabaseCount('user_answers', 0);
    }

    public function test_invalid_associations_and_ambiguous_payloads_are_422_and_leave_answers_unchanged(): void
    {
        $student = $this->student();
        $quiz = $this->quiz();
        $q = $this->question($quiz);
        $other = $this->question($this->quiz());
        $attempt = app(QuizAttemptService::class)->start($quiz, $student->id);
        foreach ([
            ['question_id' => $other->id, 'choice_ids' => [$other->choices[0]->id]],
            ['question_id' => $q->id, 'choice_ids' => [$other->choices[0]->id]],
            ['question_id' => $q->id, 'choice_id' => $other->choices[0]->id],
            ['question_id' => $q->id, 'choice_ids' => [$q->choices[0]->id, $q->choices[0]->id]],
            ['question_id' => $q->id, 'choice_ids' => [], 'choice_id' => $q->choices[0]->id],
            ['question_id' => $q->id, 'choice_ids' => [], 'selected' => true],
        ] as $data) {
            $this->asUser($student)->postJson('/api/v1/quiz-attempts/'.$attempt->id.'/answer', $data)->assertUnprocessable();
        }
        $this->assertDatabaseCount('user_answers', 0);
    }

    public function test_resume_and_result_return_all_selections_and_backend_grades_exact_sets(): void
    {
        $student = $this->student();
        $quiz = $this->quiz(['total_marks' => 3]);
        $multi = $this->question($quiz);
        $partial = $this->question($quiz);
        $this->question($quiz, 'single_choice', [true, false]);
        $id = $this->asUser($student)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->json('data.id');
        $ids = $multi->choices->where('is_correct', true)->pluck('id')->all();
        $this->asUser($student)->postJson('/api/v1/quiz-attempts/'.$id.'/answer', ['question_id' => $multi->id, 'choice_ids' => $ids])->assertOk()->assertJsonPath('data', null);
        $this->asUser($student)->postJson('/api/v1/quiz-attempts/'.$id.'/answer', ['question_id' => $partial->id, 'choice_ids' => [$partial->choices[0]->id]])->assertOk();
        $this->asUser($student)->getJson('/api/v1/quizzes/'.$quiz->id.'/questions')->assertOk()->assertJsonPath('data.questions.0.selected_choice_ids', $ids);
        $this->asUser($student)->postJson('/api/v1/quiz-attempts/'.$id.'/submit', ['score' => 9999, 'percentage' => 100, 'passed' => true])->assertOk()->assertJsonPath('data.score', 1)->assertJsonPath('data.passed', false);
        $this->asUser($student)->getJson('/api/v1/quiz-attempts/'.$id.'/result')->assertOk()
            ->assertJsonPath('data.questions.0.user_answer_keys', ['A', 'B'])
            ->assertJsonPath('data.questions.0.correct_answer_keys', ['A', 'B'])
            ->assertJsonPath('data.questions.0.selected_choice_ids', $ids)
            ->assertJsonPath('data.correct_count', 1)->assertJsonPath('data.incorrect_count', 1)->assertJsonPath('data.unanswered_count', 1);
        $this->asUser($student)->postJson('/api/v1/quiz-attempts/'.$id.'/answer', ['question_id' => $multi->id, 'choice_ids' => []])->assertConflict();
    }

    public function test_mode_is_fixed_from_start_and_tutor_feedback_preserves_complete_sets_without_deadline(): void
    {
        $student = $this->student();
        $quiz = $this->quiz();
        $q = $this->question($quiz);
        $id = $this->asUser($student)->postJson('/api/v1/quizzes/'.$quiz->id.'/start', ['mode' => 'tutor'])->assertCreated()->assertJsonPath('data.deadline_at', null)->json('data.id');
        $this->asUser($student)->putJson('/api/v1/quiz-attempts/'.$id.'/mode', ['mode' => 'exam'])->assertConflict();
        $this->asUser($student)->putJson('/api/v1/quiz-attempts/'.$id.'/mode', ['mode' => 'tutor'])->assertOk();
        $this->asUser($student)->postJson('/api/v1/quizzes/'.$quiz->id.'/start', ['mode' => 'exam'])->assertConflict();
        QuizAttempt::findOrFail($id)->update(['started_at' => now()->subDay()]);
        $ids = $q->choices->where('is_correct', true)->pluck('id')->all();
        $this->asUser($student)->postJson('/api/v1/quiz-attempts/'.$id.'/answer', ['question_id' => $q->id, 'choice_ids' => $ids])->assertOk()
            ->assertJsonPath('data.correct_choice_ids', $ids)->assertJsonPath('data.selected_choice_ids', $ids)->assertJsonPath('data.is_correct', true);
        $this->artisan('quiz-attempts:expire')->assertSuccessful();
        $this->assertSame('in_progress', QuizAttempt::findOrFail($id)->status);
        $exam = app(QuizAttemptService::class)->start($this->quiz(), $student->id, 'exam');
        $this->asUser($student)->putJson('/api/v1/quiz-attempts/'.$exam->id.'/mode', ['mode' => 'tutor'])->assertConflict();
        $this->expectException(\Symfony\Component\HttpKernel\Exception\HttpException::class);
        app(UserAnswerService::class)->getFeedback($exam, $q->id);
    }

    public function test_expiry_grades_saved_answers_at_exact_deadline_and_rewards_only_once(): void
    {
        $this->travelTo(now()->startOfSecond());
        $student = $this->student();
        $xpBefore = $student->xp;
        Achievement::create(['key' => 'first_quiz', 'title' => 'First', 'description' => 'Fixture', 'xp_reward' => 100]);
        $quiz = $this->quiz(['total_marks' => 2]);
        $q = $this->question($quiz);
        $this->question($quiz);
        $start = $this->asUser($student)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->assertCreated()->json('data');
        $id = $start['id'];
        $this->travel(59)->seconds();
        $this->asUser($student)->postJson('/api/v1/quiz-attempts/'.$id.'/answer', ['question_id' => $q->id, 'choice_ids' => $q->choices->where('is_correct', true)->pluck('id')->all()])->assertOk();
        $this->asUser($student)->getJson('/api/v1/quizzes/'.$quiz->id.'/questions')->assertOk()
            ->assertJsonPath('data.attempt.deadline_at', $start['deadline_at'])->assertJsonPath('data.attempt.remaining_seconds', 1);
        $this->travel(1)->seconds();
        $this->asUser($student)->postJson('/api/v1/quiz-attempts/'.$id.'/answer', ['question_id' => $q->id, 'choice_ids' => []])->assertConflict();
        $attempt = QuizAttempt::findOrFail($id);
        $this->assertSame('expired', $attempt->status);
        $this->assertSame(1, $attempt->score);
        $this->assertTrue($attempt->passed);
        $this->assertEquals($attempt->deadline(), $attempt->submitted_at);
        $this->assertSame($xpBefore + 160, $student->fresh()->xp); // 2 correct choices + completion + first achievement.
        $this->assertDatabaseCount('user_achievements', 1);
        $this->assertDatabaseCount('xp_transactions', 3);
        $this->artisan('quiz-attempts:expire')->assertSuccessful();
        $this->asUser($student)->postJson('/api/v1/quiz-attempts/'.$id.'/submit')->assertConflict();
        $this->asUser($student)->getJson('/api/v1/quiz-attempts/'.$id.'/result')->assertOk()
            ->assertJsonPath('data.status', 'expired')->assertJsonPath('data.unanswered_count', 1)->assertJsonPath('data.time_spent_seconds', 60);
        $this->asUser($student)->getJson('/api/v1/quiz-attempts/history')->assertOk()->assertJsonPath('data.meta.total', 1);
        $this->asUser($student)->getJson('/api/v1/user/quizzes?status=submitted')->assertOk()
            ->assertJsonPath('data.meta.total', 1)->assertJsonPath('data.data.0.status', 'expired')->assertJsonPath('data.data.0.is_completed', true);
        $this->assertSame($xpBefore + 160, $student->fresh()->xp);
        $this->assertDatabaseCount('xp_transactions', 3);
        $this->travelBack();
    }

    public function test_scheduler_finalizes_offline_exams_and_does_not_rewrite_historical_results(): void
    {
        $student = $this->student();
        $quiz = $this->quiz();
        $q = $this->question($quiz);
        $attempt = app(QuizAttemptService::class)->start($quiz, $student->id);
        $attempt->update(['started_at' => now()->subHour()]);
        $historical = QuizAttempt::create(['quiz_id' => $quiz->id, 'user_id' => $student->id, 'mode' => 'exam', 'status' => 'submitted',
            'started_at' => now()->subDays(2), 'submitted_at' => now()->subDay(), 'score' => 42, 'percentage' => 71, 'passed' => true]);
        $original = $historical->fresh()->getRawOriginal();
        $this->artisan('quiz-attempts:expire')->assertSuccessful();
        $this->artisan('quiz-attempts:expire')->assertSuccessful();
        $this->assertSame('expired', $attempt->fresh()->status);
        $this->assertSame(0, $attempt->fresh()->score);
        $this->assertSame($original, $historical->fresh()->getRawOriginal());
        $this->assertDatabaseCount('xp_transactions', 1);
        $this->asUser($student)->getJson('/api/v1/quizzes/'.$quiz->id.'/questions')->assertOk()->assertJsonPath('data.attempt.id', $historical->id);
    }

    public function test_result_and_submit_can_each_finalize_an_overdue_attempt_without_new_answers(): void
    {
        $student = $this->student();
        foreach (['result', 'submit', 'start'] as $entry) {
            $quiz = $this->quiz();
            $this->question($quiz);
            $attempt = app(QuizAttemptService::class)->start($quiz, $student->id);
            $attempt->update(['started_at' => now()->subHour()]);
            if ($entry === 'start') {
                $this->asUser($student)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->assertCreated()->assertJsonPath('data.status', 'expired');
            } else {
                $this->asUser($student)->json($entry === 'submit' ? 'POST' : 'GET', '/api/v1/quiz-attempts/'.$attempt->id.'/'.$entry)->assertOk()->assertJsonPath('data.status', 'expired');
            }
            $this->assertSame(0, $attempt->fresh()->score);
        }
        $this->assertDatabaseCount('xp_transactions', 3);
    }

    public function test_stale_in_progress_model_cannot_save_or_award_again_after_submission(): void
    {
        $student = $this->student();
        $quiz = $this->quiz();
        $q = $this->question($quiz);
        $attempt = app(QuizAttemptService::class)->start($quiz, $student->id);
        app(QuizAttemptService::class)->submit($attempt);
        try {
            app(UserAnswerService::class)->saveAnswer($attempt, ['question_id' => $q->id, 'choice_ids' => [$q->choices[0]->id]]);
            $this->fail('A stale model was accepted.');
        } catch (\App\Exceptions\Quiz\QuizAlreadySubmittedException $e) {
            $this->assertSame(409, $e->status());
        }
        $this->assertDatabaseCount('user_answers', 0);
        $this->assertDatabaseCount('xp_transactions', 1);
    }

    public function test_legacy_late_answers_are_preserved_but_excluded_from_expiry_grading_and_xp(): void
    {
        $student = $this->student();
        $xp = $student->xp;
        $quiz = $this->quiz();
        $q = $this->question($quiz);
        $attempt = app(QuizAttemptService::class)->start($quiz, $student->id);
        $attempt->update(['started_at' => now()->subHour()]);
        foreach ($q->choices->where('is_correct', true) as $choice) {
            $attempt->userAnswers()->create(['question_id' => $q->id, 'choice_id' => $choice->id]);
        }
        $before = DB::table('user_answers')->orderBy('id')->get()->toJson();
        $this->asUser($student)->getJson('/api/v1/quiz-attempts/'.$attempt->id.'/result')->assertOk()
            ->assertJsonPath('data.status', 'expired')->assertJsonPath('data.score', 0)
            ->assertJsonPath('data.unanswered_count', 1)->assertJsonPath('data.questions.0.selected_choice_ids', []);
        $this->assertSame($before, DB::table('user_answers')->orderBy('id')->get()->toJson());
        $this->assertSame($xp + 40, $student->fresh()->xp);
    }

    public function test_an_answer_action_crossing_the_deadline_is_rolled_back_before_expiry_is_committed(): void
    {
        $this->travelTo(now()->startOfSecond());
        $student = $this->student();
        $quiz = $this->quiz();
        $q = $this->question($quiz);
        $attempt = app(QuizAttemptService::class)->start($quiz, $student->id);
        try {
            app(QuizAttemptService::class)->whileInProgress($attempt, function ($locked) use ($q) {
                $locked->userAnswers()->create(['question_id' => $q->id, 'choice_id' => $q->choices[0]->id]);
                $this->travel(60)->seconds();
            });
            $this->fail('A deadline-crossing action was accepted.');
        } catch (\App\Exceptions\Quiz\QuizAttemptExpiredException $e) {
            $this->assertSame(409, $e->status());
        }
        $this->assertSame('expired', $attempt->fresh()->status);
        $this->assertSame(0, $attempt->fresh()->score);
        $this->assertDatabaseCount('user_answers', 0);
        $this->assertDatabaseCount('xp_transactions', 1);
        $this->travelBack();
    }

    public function test_offline_expiration_still_runs_after_quiz_deactivation_or_soft_deletion(): void
    {
        $student = $this->student();
        foreach (['inactive', 'deleted'] as $state) {
            $quiz = $this->quiz();
            $this->question($quiz);
            $attempt = app(QuizAttemptService::class)->start($quiz, $student->id);
            $attempt->update(['started_at' => now()->subHour()]);
            if ($state === 'inactive') $quiz->update(['is_active' => false]); else $quiz->delete();
            $this->artisan('quiz-attempts:expire')->assertSuccessful();
            $this->assertSame('expired', $attempt->fresh()->status);
        }
        $this->assertDatabaseCount('xp_transactions', 2);
    }

    public function test_join_code_access_and_owner_authoring_preview_remain_available(): void
    {
        $owner = $this->student('manager');
        $otherTeacher = $this->student('manager');
        $student = $this->student();
        $quiz = $this->quiz(['owner_id' => $owner->id]);
        $this->question($quiz);
        $this->asUser($owner)->getJson('/api/v1/teacher/quizzes/'.$quiz->id.'/questions')->assertOk();
        $this->asUser($otherTeacher)->getJson('/api/v1/teacher/quizzes/'.$quiz->id.'/questions')->assertForbidden();
        $share = $this->asUser($owner)->postJson('/api/v1/teacher/shares', ['quiz_id' => $quiz->id])->assertCreated()->json('data');
        for ($i = 0; $i < 2; $i++) {
            $this->asUser($student)->postJson('/api/v1/quiz-shares/join', ['join_code' => strtolower($share['join_code'])])->assertOk();
        }
        $this->assertDatabaseCount('quiz_share_enrollments', 1);
        $this->asUser($student)->getJson('/api/v1/quizzes/'.$quiz->id.'/questions')->assertOk();
        $this->asUser($student)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->assertCreated();
        $quiz->update(['is_active' => false]);
        $this->asUser($student)->postJson('/api/v1/quiz-shares/join', ['join_code' => $share['join_code']])->assertNotFound();
        $this->asUser($student)->getJson('/api/v1/quizzes/'.$quiz->id.'/questions')->assertForbidden();
        $this->asUser($owner)->getJson('/api/v1/teacher/quizzes/'.$quiz->id.'/questions')->assertOk();
    }
}
