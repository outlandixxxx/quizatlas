<?php

namespace Tests\Feature;

use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;
use App\Models\User;
use App\Services\RevisionNotesJsonExporter;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class RevisionImagesTest extends TestCase
{
    public function createApplication()
    {
        $keys = ['APP_CONFIG_CACHE', 'APP_ROUTES_CACHE'];
        $old = [];
        foreach ($keys as $key) {
            $old[$key] = [$_ENV[$key] ?? null, $_SERVER[$key] ?? null];
            $_ENV[$key] = $_SERVER[$key] = '/tmp/revision-tests-no-'.strtolower($key).'.php';
        }
        try { $app = parent::createApplication(); }
        finally {
            foreach ($keys as $key) {
                foreach (['_ENV', '_SERVER'] as $index => $bag) {
                    if ($old[$key][$index] === null) unset($GLOBALS[$bag][$key]);
                    else $GLOBALS[$bag][$key] = $old[$key][$index];
                }
            }
        }
        $app['config']->set(['app.env' => 'testing', 'database.default' => 'sqlite', 'database.connections.sqlite.database' => ':memory:', 'database.connections.sqlite.url' => null, 'cache.default' => 'array', 'jwt.secret' => str_repeat('revision-test-', 8), 'jwt.blacklist_enabled' => false]);
        return $app;
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->assertSame('sqlite', DB::connection()->getDriverName());
        $this->assertSame(':memory:', DB::connection()->getDatabaseName());
        foreach (['0001_01_01_000000_create_users_table.php', '2026_07_27_193254_add_profile_fields_to_users_table.php', '2026_07_02_205142_create_majors_table.php', '2026_07_02_211641_create_subjects_table.php', '2026_07_02_225022_create_quizzes_table.php', '2026_07_30_155427_add_nullable_difficulty_to_quizzes.php', '2026_07_05_232730_create_questions_table.php', '2026_07_06_211337_create_choices_table.php', '2026_11_04_100000_create_content_usage_registry.php'] as $file) {
            Artisan::call('migrate', ['--path' => database_path('migrations/'.$file), '--realpath' => true]);
        }
    }

    private function login(string $role = 'admin'): void
    {
        $user = User::create(['name' => 'Revision tests', 'email' => $role.'@example.test', 'password' => 'Local-test-password-123!', 'role' => $role]);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($user));
    }

    private function quiz(): Quiz
    {
        $major = Major::create(['name' => 'Science', 'slug' => 'science', 'is_active' => true]);
        $subject = Subject::create(['major_id' => $major->id, 'name' => 'Biology', 'slug' => 'biology', 'is_active' => true]);
        return Quiz::create(['subject_id' => $subject->id, 'title' => 'Enzymes', 'duration' => 10, 'passing_score' => 50, 'total_marks' => 0, 'difficulty' => 'Beginner']);
    }

    private function question(Quiz $quiz, int $order, ?string $text): Question
    {
        return Question::create(['quiz_id' => $quiz->id, 'question' => 'Question?', 'order' => $order, 'explanation' => $text]);
    }

    public function test_export_keeps_original_fields_and_text_and_adds_ids_with_stable_tie_order(): void
    {
        $this->login(); $quiz = $this->quiz();
        $later = $this->question($quiz, 3, 'La condition est importante.');
        $first = $this->question($quiz, 1, "  Première explication.\nشرط مهم  ");
        $tie = $this->question($quiz, 1, 'Même ordre, autre identifiant.');
        $deleted = $this->question($quiz, 0, 'Supprimée.'); $deleted->delete();
        $before = Question::withTrashed()->get()->toJson();
        $response = $this->getJson('/api/v1/quizzes/'.$quiz->id.'/revision-json')->assertOk();
        $response->assertJsonPath('data.meta.format_version', '1.1')->assertJsonPath('data.meta.total_explanations', 3)
            ->assertJsonPath('data.quiz.difficulty', 'Beginner')->assertJsonPath('data.notes.0.explanation', $first->explanation)
            ->assertJsonPath('data.notes.0.order', 1)->assertJsonPath('data.notes.0.question_id', $first->id)
            ->assertJsonPath('data.notes.1.question_id', $tie->id)->assertJsonPath('data.notes.2.question_id', $later->id);
        $this->assertSame($before, Question::withTrashed()->get()->toJson());
    }

    public function test_empty_and_missing_explanations_are_explicit_errors(): void
    {
        $this->login(); $quiz = $this->quiz();
        $this->getJson('/api/v1/quizzes/'.$quiz->id.'/revision-json')->assertUnprocessable()->assertJsonValidationErrors('quiz');
        $this->question($quiz, 1, " \n ");
        $this->getJson('/api/v1/quizzes/'.$quiz->id.'/revision-json')->assertUnprocessable()->assertJsonValidationErrors('quiz');
    }

    public function test_admin_boundary_is_preserved(): void
    {
        $quiz = $this->quiz();
        $this->getJson('/api/v1/quizzes/'.$quiz->id.'/revision-json')->assertUnauthorized();
        $this->getJson('/api/v1/quizzes/'.$quiz->id.'/revision-json?include=corrected_questions')->assertUnauthorized();
        $this->login('user');
        $this->getJson('/api/v1/quizzes/'.$quiz->id.'/revision-json')->assertForbidden();
        $this->getJson('/api/v1/quizzes/'.$quiz->id.'/revision-json?include=corrected_questions')->assertForbidden();
        $this->postJson('/api/v1/local-render/ticket', ['content' => '{}'])->assertForbidden();
    }

    public function test_draft_render_tickets_reuse_exporter_and_reject_changed_sources(): void
    {
        $this->login(); $quiz = $this->quiz(); $question = $this->question($quiz, 1, 'Texte exact.');
        $source = app(RevisionNotesJsonExporter::class)->build($quiz);
        $doc = ['type' => 'revision-batch', 'format_version' => 'revision-batch-v1', 'major' => $source['major'], 'subject' => $source['subject'],
            'quizzes' => [['source' => $source, 'version' => 1, 'paragraphs' => [['id' => 'p1', 'text' => 'Modification manuelle autorisée.', 'sourceQuestionIds' => [$question->id]]], 'issues' => []]]];
        $ticket = $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc), 'purpose' => 'render', 'operation_id' => (string) \Illuminate\Support\Str::uuid()])->assertOk()->json('data.ticket');
        $this->postJson('/api/v1/local-render/authorize', ['ticket' => $ticket, 'content_hash' => hash('sha256', json_encode($doc)), 'purpose' => 'render'])->assertOk();
        $this->postJson('/api/v1/local-render/authorize', ['ticket' => $ticket, 'content_hash' => hash('sha256', json_encode($doc)), 'purpose' => 'render'])->assertForbidden();
        $doc['quizzes'][0]['source']['notes'][0]['explanation'] = 'Fausse source.';
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc), 'purpose' => 'render', 'operation_id' => (string) \Illuminate\Support\Str::uuid()])->assertUnprocessable();
        $doc['quizzes'][0]['source'] = $source; $doc['quizzes'][] = $doc['quizzes'][0];
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc), 'purpose' => 'render', 'operation_id' => (string) \Illuminate\Support\Str::uuid()])->assertUnprocessable();
        $this->assertSame('Texte exact.', $question->fresh()->explanation);
    }

    public function test_pdf_and_combined_tickets_preserve_source_and_enforce_modes_and_limits(): void
    {
        $this->login(); $quiz = $this->quiz(); $question = $this->question($quiz, 1, 'Texte source conservé.');
        $source = app(RevisionNotesJsonExporter::class)->build($quiz);
        $doc = ['type' => 'revision-batch', 'format_version' => 'revision-batch-v1', 'major' => $source['major'], 'subject' => $source['subject'],
            'language' => 'ar', 'quizzes' => [['source' => $source, 'version' => 1, 'paragraphs' => [['id' => 'p1', 'text' => $question->explanation, 'sourceQuestionIds' => [$question->id]]], 'issues' => []]]];
        $before = Question::withTrashed()->get()->toJson();
        foreach (['png', 'pdf', 'both'] as $mode) {
            $doc['output_mode'] = $mode;
            $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc), 'purpose' => 'render', 'operation_id' => (string) \Illuminate\Support\Str::uuid()])->assertOk();
        }
        $doc['output_mode'] = 'html';
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc), 'purpose' => 'render', 'operation_id' => (string) \Illuminate\Support\Str::uuid()])->assertUnprocessable();
        $doc['output_mode'] = null;
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc), 'purpose' => 'render', 'operation_id' => (string) \Illuminate\Support\Str::uuid()])->assertUnprocessable();
        $doc['output_mode'] = 'pdf'; $doc['language'] = 'xx';
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc), 'purpose' => 'render', 'operation_id' => (string) \Illuminate\Support\Str::uuid()])->assertUnprocessable();
        $doc['language'] = 'fr'; $doc['quizzes'] = array_fill(0, 1001, $doc['quizzes'][0]);
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc), 'purpose' => 'render', 'operation_id' => (string) \Illuminate\Support\Str::uuid()])->assertUnprocessable();
        $this->assertSame($before, Question::withTrashed()->get()->toJson());
    }

    private function choice(Question $question, string $text, bool $correct, int $order = 1): Choice
    {
        return Choice::create(['question_id' => $question->id, 'choice_text' => $text, 'is_correct' => $correct, 'order' => $order]);
    }

    public function test_corrected_extension_extracts_only_all_real_correct_choices_and_keeps_legacy_contract(): void
    {
        $this->login(); $quiz = $this->quiz();
        $single = $this->question($quiz, 2, "Explication SQL :\nSELECT * FROM t WHERE x < 3;");
        $correct = $this->choice($single, 'x² < 3 et 70 °C', true, 3); $this->choice($single, 'Incorrect secret option', false);
        $multi = $this->question($quiz, 1, 'Deux réponses, sans déduplication.'); $multi->update(['type' => 'multiple_choice']);
        $first = $this->choice($multi, 'Texte identique', true, 1); $tie = $this->choice($multi, 'Texte identique', true, 1); $last = $this->choice($multi, 'العربية', true, 2);
        $deleted = $this->choice($multi, 'Deleted', true); $deleted->delete(); $this->choice($multi, 'Wrong', false);
        foreach ([['Vrai', 'Faux'], ['خطأ', 'صحيح']] as $index => [$right, $wrong]) {
            $q = $this->question($quiz, 3 + $index, 'Explication conservée.'); $q->update(['type' => 'true_false']);
            $this->choice($q, $wrong, false, 1); $this->choice($q, $right, true, 2);
        }
        $before = [Question::withTrashed()->get()->toJson(), Choice::withTrashed()->get()->toJson()];
        $base = $this->getJson('/api/v1/quizzes/'.$quiz->id.'/revision-json')->assertOk()->json('data');
        $this->assertArrayNotHasKey('correction', $base);
        $data = $this->getJson('/api/v1/quizzes/'.$quiz->id.'/revision-json?include=corrected_questions')->assertOk()->json('data');
        $this->assertSame($base['notes'], $data['notes']); $this->assertSame('1.1', $data['meta']['format_version']);
        $this->assertSame([], $data['correction']['issues']); $questions = $data['correction']['questions'];
        $this->assertSame([$multi->id, $single->id], array_slice(array_column($questions, 'question_id'), 0, 2));
        $this->assertSame([$first->id, $tie->id, $last->id], array_column($questions[0]['correct_answers'], 'choice_id'));
        $this->assertSame($correct->choice_text, $questions[1]['correct_answers'][0]['text']);
        $this->assertTrue($questions[2]['correct_answers'][0]['truth_value']); $this->assertFalse($questions[3]['correct_answers'][0]['truth_value']);
        $this->assertStringNotContainsString('Incorrect secret option', json_encode($data));
        $this->assertSame($before, [Question::withTrashed()->get()->toJson(), Choice::withTrashed()->get()->toJson()]);
        $this->getJson('/api/v1/quizzes/'.$quiz->id.'/revision-json?include=unknown')->assertUnprocessable();
    }

    public function test_incomplete_contradictory_and_unsupported_sources_block_only_corrected_mode(): void
    {
        $this->login(); $quiz = $this->quiz();
        $q = $this->question($quiz, 1, 'Explication autonome.'); $q->update(['question' => '']);
        $q2 = $this->question($quiz, 2, 'Deux réponses incompatibles.'); $this->choice($q2, 'One', true); $this->choice($q2, 'Two', true);
        $q3 = $this->question($quiz, 3, 'Unknown truth.'); $q3->update(['type' => 'true_false']); $this->choice($q3, 'A', true); $this->choice($q3, 'B', false);
        $q4 = $this->question($quiz, 4, 'Un schéma est nécessaire.'); $q4->update(['question' => '<img src="https://example.invalid/figure.png">']); $this->choice($q4, 'Yes', true);
        $source = app(RevisionNotesJsonExporter::class)->build($quiz, true);
        $codes = array_column($source['correction']['issues'], 'code');
        foreach (['missing_question', 'missing_answer', 'contradictory_answers', 'unsupported_truth_value', 'unsupported_media'] as $code) $this->assertContains($code, $codes);
        $this->getJson('/api/v1/quizzes/'.$quiz->id.'/revision-json')->assertOk();
        $doc = $this->correctedDocument($source);
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc), 'purpose' => 'render', 'operation_id' => (string) \Illuminate\Support\Str::uuid()])->assertUnprocessable();
        $this->assertSame('', $q->fresh()->question);
    }

    private function correctedDocument(array $source): array
    {
        return ['type' => 'revision-batch', 'format_version' => 'revision-batch-v1', 'content_mode' => 'corrected-questions', 'output_mode' => 'both', 'language' => 'fr', 'major' => $source['major'], 'subject' => $source['subject'], 'quizzes' => [['source' => $source, 'version' => 1, 'paragraphs' => array_map(fn ($n) => ['id' => 'p'.$n['question_id'], 'text' => $n['explanation'], 'sourceQuestionIds' => [$n['question_id']]], $source['notes']), 'issues' => []]]];
    }

    public function test_corrected_tickets_bind_question_answers_ownership_and_individual_explanation_mappings(): void
    {
        $this->login(); $quiz = $this->quiz(); $q = $this->question($quiz, 1, 'Original explanation.'); $this->choice($q, 'Correct', true); $this->choice($q, 'Incorrect', false);
        $source = app(RevisionNotesJsonExporter::class)->build($quiz, true); $doc = $this->correctedDocument($source);
        $doc['quizzes'][0]['paragraphs'][0]['text'] = 'An explicit draft explanation edit.';
        $ticket = $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc), 'purpose' => 'render', 'operation_id' => (string) \Illuminate\Support\Str::uuid()])->assertOk()->json('data.ticket');
        $this->postJson('/api/v1/local-render/authorize', ['ticket' => $ticket, 'content_hash' => hash('sha256', json_encode($doc)), 'purpose' => 'render'])->assertOk();
        $this->postJson('/api/v1/local-render/authorize', ['ticket' => $ticket, 'content_hash' => hash('sha256', json_encode($doc)), 'purpose' => 'render'])->assertForbidden();
        foreach (['question', 'type', 'quiz_id', 'question_id', 'order'] as $field) {
            $bad = $doc; $bad['quizzes'][0]['source']['correction']['questions'][0][$field] = 'substituted';
            $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($bad), 'purpose' => 'render', 'operation_id' => (string) \Illuminate\Support\Str::uuid()])->assertUnprocessable();
        }
        foreach (['choice_id', 'question_id', 'order', 'text', 'truth_value'] as $field) {
            $bad = $doc; $bad['quizzes'][0]['source']['correction']['questions'][0]['correct_answers'][0][$field] = 'substituted';
            $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($bad), 'purpose' => 'render', 'operation_id' => (string) \Illuminate\Support\Str::uuid()])->assertUnprocessable();
        }
        $bad = $doc; $bad['quizzes'][0]['paragraphs'][] = $bad['quizzes'][0]['paragraphs'][0];
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($bad), 'purpose' => 'render', 'operation_id' => (string) \Illuminate\Support\Str::uuid()])->assertUnprocessable();
        $bad = $doc; $bad['content_mode'] = 'invented'; $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($bad), 'purpose' => 'render', 'operation_id' => (string) \Illuminate\Support\Str::uuid()])->assertUnprocessable();
        $this->assertSame('Original explanation.', $q->fresh()->explanation);
    }
}
