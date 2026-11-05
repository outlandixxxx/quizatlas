<?php

namespace Database\Seeders\Support;

use App\Models\{Choice, Major, Question, Quiz, Subject};
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\{DB, Schema};
use RuntimeException;

/** Closed catalogue: never infer ownership from a major name or a slug prefix. */
final class HealthQcmCatalogue
{
    private const CATALOGUE = [
        'AnesthesieReanimationFRSeeder' => ['anesthesie-reanimation-fr', 'anesthesie-reanimation-fr-50', '01'],
        'AnesthesieReanimationARSeeder' => ['anesthesie-reanimation-ar', 'anesthesie-reanimation-ar-50', '02'],
        'AssistanceMedicoSocialeFRSeeder' => ['assistance-medico-sociale-fr', 'assistance-medico-sociale-qcm-01-fr', '01'],
        'AssistanceMedicoSocialeARSeeder' => ['assistance-medico-sociale-ar', 'assistance-medico-sociale-qcm-01-ar', '01'],
        'InfirmierPolyvalentFRSeeder' => ['infirmier-polyvalent-fr', 'infirmier-polyvalent-qcm-01-fr', '02'],
        'InfirmierPolyvalentARSeeder' => ['infirmier-polyvalent-ar', 'infirmier-polyvalent-qcm-01-ar', '01'],
        'KinesitherapieReeducationFRSeeder' => ['kinesitherapie-reeducation-fr', 'kinesitherapie-reeducation-qcm-01-fr', '01'],
        'KinesitherapieReeducationARSeeder' => ['kinesitherapie-reeducation-ar', 'kinesitherapie-reeducation-qcm-01-ar', '01'],
        'LaboratoireMedicalFRSeeder' => ['laboratoire-medical-fr', 'laboratoire-medical-qcm-01-fr', '01'],
        'LaboratoireMedicalARSeeder' => ['laboratoire-medical-ar', 'laboratoire-medical-qcm-01-ar', '01'],
        'RadiologieFRSeeder' => ['technicien-radiologie-fr', 'concours-sante-radiologie-fr-01', '01'],
        'RadiologieARSeeder' => ['technicien-radiologie-ar', 'concours-sante-radiologie-ar-01', '01'],
        'SageFemmeFRSeeder' => ['sage-femme-fr', 'sage-femme-qcm-01-fr', '01'],
        'SageFemmeARSeeder' => ['sage-femme-ar', 'sage-femme-qcm-01-ar', '01'],
    ];

    private ?array $references = null;

    public function definitions(): array
    {
        $definitions = [];
        foreach (self::CATALOGUE as $name => [$subject, $legacy, $number]) {
            $class = 'Database\\Seeders\\'.$name;
            $data = (new $class)->definition();
            if ($data['subject_slug'] !== $subject || $data['slug'] !== "health-competition-{$subject}-qcm-{$number}"
                || count($data['questions']) !== 50) {
                throw new RuntimeException("Invalid Health QCM identity/count: {$name}.");
            }
            foreach ($data['questions'] as $item) {
                if (! is_string($item['q']) || ! is_string($item['e']) || count($item['c']) !== 4
                    || ! is_int($item['a']) || ! array_key_exists($item['a'], $item['c'])
                    || count(array_filter($item['c'], 'is_string')) !== 4) {
                    throw new RuntimeException("Invalid Health question/answer definition: {$name}.");
                }
            }
            $definitions[$class] = $data + ['legacy_slug' => $legacy];
        }

        return $definitions;
    }

    /** Read-only report; never executes a seeder or changes data. */
    public function plan(): array
    {
        $hasSlug = Schema::hasColumn('quizzes', 'slug');
        $rows = [];
        foreach ($this->definitions() as $class => $data) {
            $subject = $this->subject($data);
            $candidates = $this->candidates($data, $subject, $hasSlug, false);
            $rows[] = [class_basename($class), $data['slug'],
                $candidates->map(fn ($q) => $q->id.($q->trashed() ? ' (deleted)' : ''))->implode(', ') ?: 'new',
                $candidates->map(fn ($q) => $q->id.': '.$q->questions_count.'/50, '.($q->is_active ? 'active' : 'inactive'))->implode('; ') ?: '0/50, inactive',
                $candidates->count() > 1 ? 'AMBIGUOUS: review explicit cleanup IDs' : 'reuse / create'];
        }

        return $rows;
    }

    public function seed(string $class): void
    {
        $this->writable();
        $data = $this->definitions()[$class] ?? throw new RuntimeException('Seeder outside the Health allowlist.');
        DB::transaction(function () use ($data): void {
            $this->lockMajor();
            $this->synchronize($data);
        }, 3);
    }

    /** Explicit IDs only. Every cleanup and all 14 seeds commit together or roll back. */
    public function repair(array $cleanupIds): void
    {
        $this->writable();
        DB::transaction(function () use ($cleanupIds): void {
            $this->lockMajor();
            $definitions = $this->definitions();
            foreach ($cleanupIds as $id) {
                $quiz = Quiz::withTrashed()->lockForUpdate()->findOrFail($id);
                $this->assertCleanup($quiz, $definitions);
                $quiz->forceDelete();
            }
            foreach ($definitions as $data) $this->synchronize($data);
        }, 3);
    }

    public function cleanupPreview(array $ids): array
    {
        $rows = [];
        $definitions = $this->definitions();
        foreach ($ids as $id) {
            $quiz = Quiz::withTrashed()->findOrFail($id);
            $this->assertCleanup($quiz, $definitions, false);
            $rows[] = [$id, $quiz->title, 'eligible; deletion ONLY with --apply and confirmation'];
        }

        return $rows;
    }

    private function writable(): void
    {
        if (! Schema::hasColumn('quizzes', 'slug')) {
            throw new RuntimeException('Missing quizzes.slug. Review/apply only the additive stable-quiz-slugs migration first.');
        }
        if (app()->environment('production') && ! app()->isDownForMaintenance()) {
            throw new RuntimeException('Health QCM writes require production maintenance mode and paused background writers.');
        }
    }

    private function lockMajor(): void
    {
        Major::where('slug', 'health-competition')->lockForUpdate()->sole();
    }

    private function subject(array $data, bool $lock = false): Subject
    {
        $query = Subject::where('slug', $data['subject_slug'])
            ->whereHas('major', fn ($q) => $q->where('slug', 'health-competition'));

        return ($lock ? $query->lockForUpdate() : $query)->sole();
    }

    private function candidates(array $data, Subject $subject, bool $hasSlug = true, bool $lock = true): Collection
    {
        $query = Quiz::withTrashed()->where('subject_id', $subject->id)->where(function ($q) use ($data, $hasSlug): void {
            $q->where('title', $data['title']);
            if ($hasSlug) $q->orWhereIn('slug', [$data['slug'], $data['legacy_slug']]);
            // Detect renamed legacy copies before creating a second quiz. Full source
            // ownership is checked below; one shared question is never enough to adopt it.
            $q->orWhereHas('questions', fn ($questions) => $questions->withTrashed()
                ->whereIn('question', array_column($data['questions'], 'q')));
        });

        return ($lock ? $query->lockForUpdate() : $query->withCount('questions'))->get();
    }

    private function synchronize(array $data): void
    {
        $subject = $this->subject($data, true);
        $globalMatches = Quiz::withTrashed()->whereIn('slug', [$data['slug'], $data['legacy_slug']])->lockForUpdate()->get();
        if ($globalMatches->contains(fn ($q) => (int) $q->subject_id !== (int) $subject->id)) {
            throw new RuntimeException("Slug collision outside the expected subject: {$data['slug']}. No reassignment performed.");
        }
        $candidates = $this->candidates($data, $subject);
        if ($candidates->count() > 1) {
            throw new RuntimeException("Ambiguous Health quizzes for {$data['subject_slug']}: ".$candidates->pluck('id')->implode(', ').'. Preview explicit cleanup IDs first.');
        }
        $quiz = $candidates->first() ?? new Quiz(['subject_id' => $subject->id, 'title' => $data['title'],
            'description' => $data['description'], 'duration' => 60, 'passing_score' => 60,
            'difficulty' => 'Beginner', 'owner_id' => null, 'is_active' => false]);
        if ($quiz->owner_id !== null) throw new RuntimeException("Refusing privately owned quiz {$quiz->id}.");
        [$questions, $choices] = $this->inspect($quiz, $data);
        if ($quiz->exists && $quiz->title !== $data['title']
            && ! in_array($quiz->slug, [$data['slug'], $data['legacy_slug']], true)
            && ($questions->count() !== 50 || $choices->count() !== 200)) {
            throw new RuntimeException("Renamed/partial quiz {$quiz->id} has no reliable legacy identity; review it explicitly. No duplicate created.");
        }
        $needsContent = $quiz->trashed() || (int) $quiz->total_marks !== 50 || $questions->count() !== 50
            || $questions->contains(fn ($q) => $q->trashed() || $q->type !== 'multiple_choice' || (int) $q->marks !== 1)
            || $choices->count() !== 200 || $choices->contains(function ($c) use ($questions, $data) {
                $question = $questions->firstWhere('id', $c->question_id);
                return $c->trashed() || (bool) $c->is_correct !== ((int) $c->order - 1 === $data['questions'][(int) $question->order - 1]['a']);
            });
        if ($quiz->exists && $needsContent && ($dependency = $this->dependency($quiz, $questions, $choices))) {
            throw new RuntimeException("Quiz {$quiz->id} needs content changes but is referenced by {$dependency}; preserved unchanged.");
        }
        $quiz->slug = $data['slug'];
        if ($needsContent) $quiz->total_marks = 50;
        if ($quiz->trashed()) { $quiz->is_active = false; $quiz->deleted_at = null; }
        if (! $quiz->exists || $quiz->isDirty()) $quiz->save();
        if (! $needsContent) return;

        foreach ($data['questions'] as $index => $item) {
            $question = $questions->firstWhere('order', $index + 1) ?? new Question(['quiz_id' => $quiz->id, 'order' => $index + 1]);
            $question->fill(['question' => $item['q'], 'type' => 'multiple_choice', 'marks' => 1, 'explanation' => $item['e']]);
            $question->deleted_at = null;
            if (! $question->exists || $question->isDirty()) $question->save();
            foreach ($item['c'] as $choiceIndex => $text) {
                $choice = $choices->first(fn ($c) => $c->question_id == $question->id && $c->order == $choiceIndex + 1)
                    ?? new Choice(['question_id' => $question->id, 'order' => $choiceIndex + 1]);
                $choice->fill(['choice_text' => $text, 'is_correct' => $choiceIndex === $item['a']]);
                $choice->deleted_at = null;
                if (! $choice->exists || $choice->isDirty()) $choice->save();
            }
        }
    }

    /** Establish ownership using the exact source text, not a similar title or broad prefix. */
    private function inspect(Quiz $quiz, array $data, bool $allowDuplicates = false, bool $lock = true): array
    {
        if (! $quiz->exists) return [collect(), collect()];
        $query = Question::withTrashed()->where('quiz_id', $quiz->id);
        $questions = ($lock ? $query->lockForUpdate() : $query)->get();
        $query = Choice::withTrashed()->whereIn('question_id', $questions->pluck('id'));
        $choices = ($lock ? $query->lockForUpdate() : $query)->get();
        if (! $allowDuplicates && ($questions->pluck('order')->duplicates()->isNotEmpty()
            || $choices->groupBy('question_id')->contains(fn ($items) => $items->pluck('order')->duplicates()->isNotEmpty()))) {
            throw new RuntimeException("Duplicate question/choice positions in quiz {$quiz->id}. Explicit cleanup/review required.");
        }
        foreach ($questions as $question) {
            $item = $data['questions'][(int) $question->order - 1] ?? null;
            if (! $item || $question->question !== $item['q'] || $question->explanation !== $item['e']) {
                throw new RuntimeException("Quiz {$quiz->id} contains different/unrecognized content. Preserved unchanged.");
            }
            foreach ($choices->where('question_id', $question->id) as $choice) {
                if (! array_key_exists((int) $choice->order - 1, $item['c'])
                    || $choice->choice_text !== $item['c'][(int) $choice->order - 1]) {
                    throw new RuntimeException("Quiz {$quiz->id} has unrecognized choices. Preserved unchanged.");
                }
            }
        }

        return [$questions, $choices];
    }

    private function assertCleanup(Quiz $quiz, array $definitions, bool $lock = true): void
    {
        $matches = array_filter($definitions, function ($data) use ($quiz) {
            $subject = $this->subject($data);
            return (int) $quiz->subject_id === (int) $subject->id && ($quiz->title === $data['title']
                || in_array($quiz->slug, [$data['slug'], $data['legacy_slug']], true));
        });
        if ($quiz->owner_id !== null || count($matches) !== 1) {
            throw new RuntimeException("Quiz {$quiz->id} is not an identifiable public quiz from the 14 Health seeders.");
        }
        [$questions, $choices] = $this->inspect($quiz, reset($matches), true, $lock);
        if ($questions->isEmpty()) throw new RuntimeException("Cannot prove ownership of empty quiz {$quiz->id}; review manually.");
        if ($dependency = $this->dependency($quiz, $questions, $choices)) {
            throw new RuntimeException("Cannot delete quiz {$quiz->id}: referenced by {$dependency} (including historical/soft-deleted rows).");
        }
    }

    /** Inspect every incoming FK so future dependencies cannot be silently cascaded away. */
    private function dependency(Quiz $quiz, Collection $questions, Collection $choices): ?string
    {
        if ($this->references === null) {
            $this->references = [];
            foreach (Schema::getTables() as $table) {
                $name = $table['schema_qualified_name'] ?? $table['name'];
                foreach (Schema::getForeignKeys($name) as $fk) {
                    if (in_array($fk['foreign_table'], ['quizzes', 'questions', 'choices'], true)) {
                        $this->references[] = [$name, $table['name'], $table['schema'], $fk];
                    }
                }
            }
        }
        $targets = ['quizzes' => [$quiz->id], 'questions' => $questions->pluck('id')->all(), 'choices' => $choices->pluck('id')->all()];
        $applicationSchema = Schema::getCurrentSchemaName();
        foreach ($this->references as [$name, $base, $schema, $fk]) {
            $internalSchema = $schema === $applicationSchema && ($fk['foreign_schema'] ?? $schema) === $applicationSchema;
            if ($internalSchema && (($base === 'questions' && $fk['foreign_table'] === 'quizzes' && $fk['columns'] === ['quiz_id'])
                || ($base === 'choices' && $fk['foreign_table'] === 'questions' && $fk['columns'] === ['question_id']))) continue;
            $index = array_search('id', $fk['foreign_columns'], true);
            if ($index === false) throw new RuntimeException("Unsupported dependency {$name}; cleanup refused.");
            if (DB::table($name)->whereIn($fk['columns'][$index], $targets[$fk['foreign_table']])->exists()) return $name;
        }
        // The usage registry intentionally has no source FK. Preserve all its history, too.
        if (Schema::hasTable('content_usage_items') && DB::table('content_usage_items')->where('source_type', 'question')
            ->whereIn('source_id', $targets['questions'])->exists()) return 'content_usage_items';

        return null;
    }
}
