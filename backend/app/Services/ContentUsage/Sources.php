<?php

namespace App\Services\ContentUsage;

use App\Models\{Fact, Question, Quiz, VideoSet};
use App\Services\{RevisionImageSourceValidator, RevisionNotesJsonExporter, VideoSetJsonExporter};

final class Sources
{
    public function __construct(private RevisionNotesJsonExporter $revisions, private RevisionImageSourceValidator $revisionSources, private VideoSetJsonExporter $videos) {}

    public function render(array $doc): array
    {
        $type = $doc['type'] ?? 'quiz';
        if ($type === 'revision-batch') {
            $this->revisionSources->validate($doc);
            $ids = [];
            foreach ($doc['quizzes'] as $quiz) foreach ($quiz['source']['notes'] as $note) $ids[] = $note['question_id'];
            return ['kind' => 'revision-media', 'sources' => $this->questions($ids)];
        }
        if (in_array($type, ['facts-short', 'facts-long'], true)) {
            $language = $doc['language'] ?? '';
            abort_unless(in_array($language, ['fr', 'ar', 'en'], true), 422, 'Unsupported facts language.');
            $items = $doc['facts'] ?? [];
            abort_unless(is_array($items) && count($items) >= 1 && count($items) <= 300, 422);
            $sources = [];
            foreach ($items as $item) {
                abort_unless(is_array($item), 422, 'Invalid fact source.');
                $fact = $this->fact($item['id'] ?? null);
                abort_unless($fact->subject->major_id === ($doc['major']['id'] ?? null)
                    && $fact->subject_id === ($item['subject_id'] ?? null) && $fact->subject->name === ($item['subject_name'] ?? null)
                    && trim($fact->{'text_'.$language}) === ($item['text'] ?? null) && trim($fact->{'text_'.$language}) !== ''
                    && ($item['detail'] ?? '') === '' && $fact->source_url === ($item['source_url'] ?? null), 422, 'A selected fact differs from its stored source.');
                $sources[] = Fingerprint::source($fact);
            }
            return ['kind' => $type, 'sources' => $sources];
        }
        abort_unless($type === 'quiz', 422, 'Unsupported generator type.');
        $video = VideoSet::findOrFail($this->sourceId($doc['video']['id'] ?? null));
        $expected = $this->videos->build($video);
        $payload = $doc; unset($payload['type'], $payload['render_options']);
        $this->same($expected, $payload);
        return ['kind' => 'quiz-video', 'sources' => $this->questions(array_column($expected['questions'], 'id'))];
    }

    public function export(string $kind, array $doc): array
    {
        if ($kind === 'revision-json') {
            $quiz = Quiz::findOrFail($this->sourceId($doc['quiz']['id'] ?? null));
            $expected = $this->revisions->build($quiz, isset($doc['correction']));
            $this->same($expected, $doc);
            return $this->questions(array_column($expected['notes'], 'question_id'));
        }
        if ($kind === 'quiz-json') {
            $expected = $this->videos->build(VideoSet::findOrFail($this->sourceId($doc['video']['id'] ?? null)));
            $this->same($expected, $doc);
            return $this->questions(array_column($expected['questions'], 'id'));
        }
        abort_unless($kind === 'posts-json' && is_array($doc['days'] ?? null) && count($doc['days']) <= 14, 422, 'Unsupported Posts JSON.');
        $sources = [];
        foreach ($doc['days'] as $day) {
            abort_unless(is_array($day), 422, 'Invalid Posts day.');
            foreach (['question_du_jour', 'quiz_short', 'facebook_group', 'fact_short', 'fact_video'] as $slot) {
                abort_unless(!isset($day[$slot]) || is_array($day[$slot]), 422, 'Invalid Posts slot.');
            }
            abort_unless(is_array($day['facebook_group']['questions'] ?? []) && is_array($day['fact_video']['facts'] ?? []), 422, 'Invalid Posts sources.');
            $questions = array_filter([$day['question_du_jour']['question'] ?? null, $day['quiz_short']['question'] ?? null]);
            $questions = array_merge($questions, $day['facebook_group']['questions'] ?? []);
            foreach ($questions as $item) {
                abort_unless(is_array($item), 422, 'Invalid question source.');
                $question = $this->question($item['id'] ?? null);
                abort_unless($question->quiz->owner_id === null && $question->quiz_id === ($item['quiz_id'] ?? null)
                    && $question->quiz->subject_id === ($item['subject_id'] ?? null)
                    && $question->quiz->subject->major_id === ($day['major']['id'] ?? null)
                    && trim($question->question) === ($item['text'] ?? null)
                    && trim((string) $question->explanation) === ($item['explanation'] ?? null), 422, 'A Posts question differs from its stored source.');
                $choices = $question->choices->sortBy([['order', 'asc'], ['id', 'asc']])->values();
                $expected = $choices->map(fn ($c, $i) => ['id' => (int) $c->id, 'label' => chr(65 + $i), 'text' => trim($c->choice_text), 'is_correct' => (bool) $c->is_correct])->all();
                $this->same($expected, $item['choices'] ?? []);
                $correct = collect($expected)->firstWhere('is_correct', true);
                $this->same(['label' => $correct['label'] ?? null, 'text' => $correct['text'] ?? null], $item['correct'] ?? []);
                $sources[] = Fingerprint::source($question);
            }
            $facts = array_filter([$day['fact_short']['fact'] ?? null]);
            foreach (array_merge($facts, $day['fact_video']['facts'] ?? []) as $item) {
                abort_unless(is_array($item), 422, 'Invalid fact source.');
                $fact = $this->fact($item['id'] ?? null);
                abort_unless($fact->subject->major_id === ($day['major']['id'] ?? null), 422);
                foreach (['fr', 'ar', 'en'] as $language) abort_unless((string) $fact->{'text_'.$language} === ($item[$language] ?? null), 422, 'A Posts fact changed.');
                abort_unless($fact->source_url === ($item['source_url'] ?? null), 422);
                $sources[] = Fingerprint::source($fact);
            }
        }
        return $sources;
    }

    public function references(array $items): array
    {
        $sources = [];
        foreach ($items as $item) {
            $question = isset($item['question_id']); $fact = isset($item['fact_id']);
            abort_unless($question !== $fact, 422, 'Each item needs exactly one source.');
            $model = $question ? $this->question($item['question_id']) : $this->fact($item['fact_id']);
            $subjectId = $question ? $model->quiz->subject_id : $model->subject_id;
            abort_unless($subjectId === ($item['subject_id'] ?? null), 422, 'A source belongs to another Subject.');
            abort_unless(in_array($item['format'], $question ? \App\Models\SocialPost::QUESTION_FORMATS : \App\Models\SocialPost::FACT_FORMATS, true), 422);
            if ($question) abort_unless($model->quiz->owner_id === null, 422);
            $sources[] = Fingerprint::source($model);
        }
        return $sources;
    }

    private function same(mixed $expected, mixed $actual): void
    {
        abort_unless(Fingerprint::requestHash($expected) === Fingerprint::requestHash($actual), 422, 'The export differs from its stored source. Refresh the preview.');
    }
    private function sourceId(mixed $id): int
    {
        abort_unless(is_int($id) && $id > 0, 422, 'Invalid source ID.');
        return $id;
    }
    private function question(mixed $id): Question
    {
        abort_unless(is_int($id) && $id > 0, 422, 'Invalid question source ID.');
        $q = Question::with(['choices', 'quiz.subject.major'])->findOrFail($id);
        abort_unless($q->quiz?->is_active && $q->quiz->subject?->is_active && $q->quiz->subject->major?->is_active, 422, 'An inactive question source is unavailable.');
        return $q;
    }
    private function fact(mixed $id): Fact
    {
        abort_unless(is_int($id) && $id > 0, 422, 'Invalid fact source ID.');
        $f = Fact::with('subject.major')->findOrFail($id);
        abort_unless($f->is_verified && $f->subject?->is_active && $f->subject->major?->is_active, 422, 'An unverified or inactive fact is unavailable.');
        return $f;
    }
    private function questions(array $ids): array { return array_map(fn ($id) => Fingerprint::source($this->question($id)), $ids); }
}
