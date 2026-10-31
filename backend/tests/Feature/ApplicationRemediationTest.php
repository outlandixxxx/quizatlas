<?php

namespace Tests\Feature;

use App\Models\Bookmark;
use App\Models\ChatConversation;
use App\Models\Friendship;
use App\Models\QuizAttempt;
use Illuminate\Support\Facades\Artisan;
use Tests\QuizTestCase;

class ApplicationRemediationTest extends QuizTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $names = ['2026_08_02_215019_friendships_table.php', '2026_09_04_211710_create_blog_asks_table.php',
            '2026_09_04_211739_create_blog_responses_table.php', '2026_09_04_211754_create_notifications_table.php',
            '2026_09_05_203923_create_chat_conversations_table.php.php', '2026_09_05_204030_create_chat_messages_table.php.php'];
        Artisan::call('migrate', ['--path' => array_map(fn ($n) => database_path('migrations/'.$n), $names), '--realpath' => true]);
    }

    public function test_bookmark_toggle_reload_and_user_isolation_survive_dashboard_and_result_reads(): void
    {
        $a = $this->student(); $b = $this->student();
        $quiz = $this->quiz(); $q = $this->question($quiz);
        $url = '/api/v1/quizzes/'.$quiz->id.'/questions';
        $toggle = '/api/v1/bookmarks/questions/'.$q->id.'/toggle';
        $this->asUser($a)->getJson($url)->assertOk()->assertJsonPath('data.questions.0.is_bookmarked', false);
        $this->asUser($a)->postJson($toggle)->assertOk()->assertJsonPath('data.bookmarked', true);
        $this->asUser($a)->getJson('/api/v1/user/dashboard')->assertOk();
        $this->asUser($a)->getJson($url)->assertOk()->assertJsonPath('data.questions.0.is_bookmarked', true);
        $this->asUser($b)->getJson($url)->assertOk()->assertJsonPath('data.questions.0.is_bookmarked', false);
        $this->asUser($b)->getJson('/api/v1/bookmarks')->assertOk()->assertJsonPath('data.meta.total', 0);
        $id = $this->asUser($a)->postJson('/api/v1/quizzes/'.$quiz->id.'/start')->json('data.id');
        $this->asUser($a)->postJson('/api/v1/quiz-attempts/'.$id.'/submit')->assertOk();
        $this->asUser($a)->getJson('/api/v1/quiz-attempts/'.$id.'/result')->assertOk()->assertJsonPath('data.questions.0.is_bookmarked', true);
        $this->asUser($a)->postJson($toggle)->assertOk()->assertJsonPath('data.bookmarked', false);
        $this->asUser($a)->getJson($url)->assertOk()->assertJsonPath('data.questions.0.is_bookmarked', false);
        $this->assertDatabaseCount('bookmarks', 0);
    }

    public function test_landing_uses_persisted_pass_outcomes_for_different_mark_totals_and_thresholds(): void
    {
        $user = $this->student();
        foreach ([[1, 1, 50, true], [200, 100, 60, false], [20, 15, 70, true], [10, 0, 0, true]] as [$total,$score,$threshold,$passed]) {
            $quiz = $this->quiz(['total_marks'=>$total, 'passing_score'=>$threshold]);
            QuizAttempt::create(['user_id'=>$user->id,'quiz_id'=>$quiz->id,'mode'=>'exam','status'=>'submitted',
                'started_at'=>now()->subMinute(),'submitted_at'=>now(),'score'=>$score,'percentage'=>100*$score/$total,'passed'=>$passed]);
        }
        $before = QuizAttempt::orderBy('id')->get()->toJson();
        $this->asUser(null)->getJson('/api/v1/landing')->assertOk()->assertJsonPath('data.stats.passing_rate', 75);
        $this->assertSame($before, QuizAttempt::orderBy('id')->get()->toJson());
    }

    public function test_manager_builder_uses_scoped_routes_and_cannot_use_the_admin_group(): void
    {
        $owner = $this->student('manager'); $other = $this->student('manager'); $student = $this->student();
        $subject = $this->quiz()->subject;
        $payload = ['subject_id'=>$subject->id,'title'=>'Owned fixture','duration'=>20,'passing_score'=>50,'is_active'=>true];
        $this->asUser($owner)->postJson('/api/v1/quizzes', $payload)->assertForbidden();
        $id = $this->asUser($owner)->postJson('/api/v1/teacher/quizzes', [...$payload,'owner_id'=>$other->id])->assertCreated()->json('data.id');
        $this->assertDatabaseHas('quizzes', ['id'=>$id,'owner_id'=>$owner->id]);
        $this->asUser($other)->putJson('/api/v1/teacher/quizzes/'.$id, [...$payload,'title'=>'Unauthorized'])->assertForbidden();
        $this->asUser($other)->deleteJson('/api/v1/teacher/quizzes/'.$id)->assertForbidden();
        $this->asUser($student)->postJson('/api/v1/teacher/quizzes', $payload)->assertForbidden();
        $this->asUser($owner)->putJson('/api/v1/teacher/quizzes/'.$id, [...$payload,'title'=>'Edited fixture'])->assertOk()->assertJsonPath('data.title','Edited fixture');
        $qData = ['quiz_id'=>$id,'question'=>'Atomic fixture','type'=>'multiple_choice','marks'=>2,'order'=>1,
            'choices'=>[['choice_text'=>'First','is_correct'=>true],['choice_text'=>'Second','is_correct'=>true],['choice_text'=>'Third','is_correct'=>false]]];
        $q = $this->asUser($owner)->postJson('/api/v1/teacher/questions', $qData)->assertCreated()->json('data');
        $this->assertCount(3,$q['choices']);
        $this->asUser($other)->putJson('/api/v1/teacher/questions/'.$q['id'],$qData)->assertForbidden();
        $this->asUser($other)->deleteJson('/api/v1/teacher/questions/'.$q['id'])->assertForbidden();
        $this->asUser($owner)->putJson('/api/v1/teacher/questions/'.$q['id'],[...$qData,'question'=>'Edited question','choices'=>$q['choices']])->assertOk()->assertJsonPath('data.question','Edited question');
        $this->asUser($owner)->deleteJson('/api/v1/teacher/questions/'.$q['id'])->assertOk();
        $this->asUser($owner)->deleteJson('/api/v1/teacher/quizzes/'.$id)->assertOk();
        $this->assertSoftDeleted('quizzes',['id'=>$id]);
    }

    public function test_blog_and_chat_creation_have_201_status_and_human_readable_messages(): void
    {
        $user = $this->student(); $friend = $this->student();
        $ask = $this->asUser($user)->postJson('/api/v1/blog/asks',['title'=>'Fixture question','body'=>'Fixture body'])->assertCreated();
        $this->assertIsString($ask->json('message')); $this->assertNotSame('201',$ask->json('message'));
        $this->asUser($user)->postJson('/api/v1/blog/asks/'.$ask->json('data.id').'/responses',['body'=>'Fixture answer'])->assertCreated();
        Friendship::create(['user_id'=>$user->id,'friend_id'=>$friend->id,'status'=>'accepted']);
        $conversation = ChatConversation::create(['user_one_id'=>$user->id,'user_two_id'=>$friend->id]);
        $response = $this->asUser($user)->postJson('/api/v1/chat/conversations/'.$conversation->id.'/messages',['body'=>'Fixture message'])->assertCreated();
        $this->assertNotSame('201',$response->json('message'));
        $this->asUser($this->student())->postJson('/api/v1/chat/conversations/'.$conversation->id.'/messages',['body'=>'Forbidden'])->assertNotFound();
    }

    public function test_teacher_creation_uses_active_catalogue_and_rejects_cross_owner_content(): void
    {
        $owner=$this->student('manager'); $other=$this->student('manager');
        $quiz=$this->quiz(['owner_id'=>$owner->id]); $q=$this->question($quiz);
        $this->asUser($owner)->getJson('/api/v1/teacher/subjects')->assertOk()->assertJsonCount(1,'data');
        $payload=['subject_id'=>$quiz->subject_id,'title'=>'Fixture','duration'=>1,'passing_score'=>50];
        $quiz->subject->update(['is_active'=>false]);
        $this->asUser($owner)->postJson('/api/v1/teacher/quizzes',$payload)->assertUnprocessable();
        $this->asUser($owner)->getJson('/api/v1/teacher/subjects')->assertOk()->assertJsonCount(0,'data');
        // Existing owner drafts remain editable under their original subject.
        $this->asUser($owner)->putJson('/api/v1/teacher/quizzes/'.$quiz->id,$payload)->assertOk();
        $qPayload=['quiz_id'=>$quiz->id,'question'=>'Fixture','type'=>'single_choice','marks'=>1,'order'=>2,
            'choices'=>[['choice_text'=>'Yes','is_correct'=>true],['choice_text'=>'No','is_correct'=>false]]];
        $this->asUser($other)->postJson('/api/v1/teacher/questions',$qPayload)->assertForbidden();
        $this->asUser($other)->getJson('/api/v1/teacher/quizzes/'.$quiz->id)->assertForbidden();
        $this->asUser(null)->postJson('/api/v1/teacher/quizzes',$payload)->assertUnauthorized();
        $this->assertDatabaseCount('questions',1);
    }

    public function test_teacher_question_sets_are_atomic_and_retain_choice_ids_and_saved_answers_on_edit(): void
    {
        $owner=$this->student('manager'); $quiz=$this->quiz(['owner_id'=>$owner->id]);
        $payload=['quiz_id'=>$quiz->id,'question'=>'Fixture','type'=>'true_false','marks'=>2,'order'=>1,
            'choices'=>[['choice_text'=>'Vrai','is_correct'=>true],['choice_text'=>'Faux','is_correct'=>false]]];
        $q=$this->asUser($owner)->postJson('/api/v1/teacher/questions',$payload)->assertCreated()->json('data');
        $ids=array_column($q['choices'],'id');
        $attempt=\App\Models\QuizAttempt::create(['user_id'=>$owner->id,'quiz_id'=>$quiz->id,'mode'=>'tutor','status'=>'in_progress','started_at'=>now()]);
        $answer=$attempt->userAnswers()->create(['question_id'=>$q['id'],'choice_id'=>$ids[0]]);
        $choices=$q['choices']; $choices[0]['choice_text']='Edited wording';
        $edited=$this->asUser($owner)->putJson('/api/v1/teacher/questions/'.$q['id'],[...$payload,'marks'=>3,'choices'=>$choices])->assertOk()->json('data');
        $this->assertSame($ids,array_column($edited['choices'],'id'));
        $this->assertDatabaseHas('user_answers',['id'=>$answer->id,'choice_id'=>$ids[0]]);
        $this->assertSame(3,$quiz->fresh()->total_marks);
        $foreign=$this->question($this->quiz(['owner_id'=>$owner->id]));
        $bad=$choices; $bad[0]['id']=$foreign->choices[0]->id;
        $this->asUser($owner)->putJson('/api/v1/teacher/questions/'.$q['id'],[...$payload,'question'=>'Must rollback','choices'=>$bad])->assertUnprocessable();
        $this->assertDatabaseHas('questions',['id'=>$q['id'],'question'=>'Fixture','marks'=>3]);
        $this->assertSame(3,$quiz->fresh()->total_marks);
        $this->asUser($owner)->putJson('/api/v1/teacher/questions/'.$q['id'],[...$payload,
            'choices'=>[$choices[1],['choice_text'=>'Replacement','is_correct'=>true]]])->assertUnprocessable();
        $this->assertDatabaseHas('user_answers',['id'=>$answer->id,'choice_id'=>$ids[0]]);
        $bad=$payload; $bad['choices'][1]['is_correct']=true;
        $this->asUser($owner)->postJson('/api/v1/teacher/questions',$bad)->assertUnprocessable();
        $this->assertSame(1,$quiz->questions()->count());
    }
}
