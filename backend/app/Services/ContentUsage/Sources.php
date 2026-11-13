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
        if ($type === 'facts-batch') {
            $videos = $doc['videos'] ?? null;
            abort_unless(is_array($videos) && count($videos) >= 1 && count($videos) <= 60, 422, 'Choose 1–60 approved fact videos.');
            $sources = []; $ids = []; $texts = []; $first = $videos[0];
            foreach ($videos as $video) {
                abort_unless(is_array($video) && in_array($video['type'] ?? null, ['facts-short', 'facts-long'], true)
                    && $video['type'] === ($first['type'] ?? null) && ($video['language'] ?? null) === ($first['language'] ?? null)
                    && ($video['major']['id'] ?? null) === ($first['major']['id'] ?? null), 422, 'Mixed or nested fact batches are unsupported.');
                $validated = $this->render($video);
                foreach ($video['facts'] as $fact) {
                    $text = \App\Services\SocialQuestionSelector::normalizeText($fact['text']);
                    abort_if(isset($ids[$fact['id']]) || isset($texts[$text]), 422, 'A fact appears twice in the batch.');
                    $ids[$fact['id']] = true; $texts[$text] = true;
                }
                $sources = array_merge($sources, $validated['sources']);
            }
            return ['kind' => $first['type'], 'sources' => $sources];
        }
        if ($type === 'quiz-batch') {
            $videos = $doc['videos'] ?? null;
            abort_unless(is_array($videos) && count($videos) >= 1 && count($videos) <= 60, 422, 'Choose 1–60 approved videos.');
            $sources = []; $ids = [];
            foreach ($videos as $video) {
                abort_unless(is_array($video) && ($video['type'] ?? 'quiz') === 'quiz', 422, 'Only quiz videos are allowed in this batch.');
                $id = $this->sourceId($video['video']['id'] ?? null);
                abort_if(isset($ids[$id]), 422, 'A video appears twice in the batch.');
                $ids[$id] = true;
                $sources = array_merge($sources, $this->render($video)['sources']);
            }
            return ['kind' => 'quiz-video', 'sources' => $sources];
        }
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
                abort_unless($fact->major_id === ($doc['major']['id'] ?? null)
                    && trim($fact->{'text_'.$language}) === ($item['text'] ?? null) && trim($fact->{'text_'.$language}) !== ''
                    && ($item['detail'] ?? '') === '' && $fact->source_url === ($item['source_url'] ?? null), 422, 'A selected fact differs from its stored source.');
                $sources[] = Fingerprint::factVideo($fact, $language, $type);
            }
            return ['kind' => $type, 'sources' => $sources];
        }
        abort_unless($type === 'quiz', 422, 'Unsupported generator type.');
        $video = VideoSet::findOrFail($this->sourceId($doc['video']['id'] ?? null));
        $expected = $this->videos->build($video, $doc['video']['template'] ?? null, $doc['video']['language'] ?? null);
        $payload = $doc; unset($payload['type'], $payload['render_options']);
        $this->legacyLanguage($expected, $payload);
        $this->displayNumber($payload);
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
            $expected = $this->videos->build(VideoSet::findOrFail($this->sourceId($doc['video']['id'] ?? null)), $doc['video']['template'] ?? null, $doc['video']['language'] ?? null);
            unset($doc['render_options']);
            $this->legacyLanguage($expected, $doc);
            $this->displayNumber($doc);
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
                abort_unless($fact->major_id === ($day['major']['id'] ?? null), 422);
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
            if ($question) {
                abort_unless($model->quiz->subject_id === ($item['subject_id'] ?? null), 422, 'A source belongs to another Subject.');
            } elseif (isset($item['major_id'])) {
                abort_unless($model->major_id === $item['major_id'], 422, 'A Fact belongs to another Major.');
            } elseif (isset($item['subject_id'])) {
                // Retained Posts exports may still carry the historical Subject ID.
                abort_unless($model->subject_id === $item['subject_id'], 422, 'A historical Fact association changed.');
            }
            abort_unless(in_array($item['format'], $question ? \App\Models\SocialPost::QUESTION_FORMATS : \App\Models\SocialPost::FACT_FORMATS, true), 422);
            if ($question) abort_unless($model->quiz->owner_id === null, 422);
            $sources[] = Fingerprint::source($model);
        }
        return $sources;
    }

    private function legacyLanguage(array &$expected, array $actual): void
    {
        // Existing approved snapshots predate explicit per-question locale.
        if (isset($actual['video']['display_number'])) return;
        foreach ($expected['questions'] as $i => &$q) {
            if (!isset($actual['questions'][$i]['language'])) unset($q['language']);
        }
    }

    private function displayNumber(array &$doc): void
    {
        if (!array_key_exists('display_number', $doc['video'] ?? [])) return; // Retained legacy snapshots.
        $number = $doc['video']['display_number'];
        abort_unless(in_array($doc['video']['template'] ?? null, ['five-seconds', 'defi-du-jour', 'niveau-concours'], true)
            && is_int($number) && $number > 0 && $number <= 999999, 422, 'Invalid displayed QCM number.');
        unset($doc['video']['display_number']); // Presentation metadata; all educational fields remain source-checked.
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
        $f = Fact::with('major')->findOrFail($id);
        abort_unless($f->is_verified && $f->major?->is_active, 422, 'An unverified or inactive fact is unavailable.');
        return $f;
    }
    private function questions(array $ids): array { return array_map(fn ($id) => Fingerprint::source($this->question($id)), $ids); }
}
