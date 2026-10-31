<?php

namespace App\Services;

use App\Models\Quiz;
use Illuminate\Validation\ValidationException;

/** Validate frozen sources using the existing exporter, without another extraction path. */
class RevisionImageSourceValidator
{
    public function __construct(private RevisionNotesJsonExporter $exporter) {}

    public function validate(array $document): void
    {
        if ((array_key_exists('output_mode', $document) && ! in_array($document['output_mode'], ['png', 'pdf', 'both'], true))
            || (array_key_exists('language', $document) && ! in_array($document['language'], ['fr', 'en', 'ar'], true))
            || (array_key_exists('content_mode', $document) && ! in_array($document['content_mode'], ['explanations', 'corrected-questions'], true))) {
            throw ValidationException::withMessages(['content' => 'Unsupported revision output mode or book language.']);
        }
        $items = $document['quizzes'] ?? null;
        if (! is_array($items) || count($items) < 1 || count($items) > 1000) {
            throw ValidationException::withMessages(['content' => 'Select between 1 and 1000 quizzes.']);
        }
        $seen = [];
        foreach ($items as $item) {
            $source = $item['source'] ?? [];
            $id = $source['quiz']['id'] ?? null;
            $quiz = is_int($id) && ! isset($seen[$id]) ? Quiz::find($id) : null;
            if (! $quiz) {
                throw ValidationException::withMessages(['content' => 'A selected quiz is unavailable or duplicated. Refresh the selection.']);
            }
            $seen[$id] = true;
            $corrected = ($document['content_mode'] ?? 'explanations') === 'corrected-questions';
            $current = $this->exporter->build($quiz, $corrected);
            if ($corrected && (($source['correction'] ?? null) !== $current['correction'] || count($current['correction']['issues']))) {
                throw ValidationException::withMessages(['content' => $current['correction']['issues'][0]['message'] ?? 'Question/correct-answer source has changed or was substituted. Refresh the source.']);
            }
            if ($corrected) {
                $paragraphs = $item['paragraphs'] ?? [];
                if (! is_array($paragraphs)) throw ValidationException::withMessages(['content' => 'Invalid revision explanations.']);
                $mapped = [];
                foreach ($paragraphs as $paragraph) {
                    $ids = $paragraph['sourceQuestionIds'] ?? [];
                    if (! is_array($ids) || count($ids) !== 1 || ! is_int($ids[0] ?? null) || isset($mapped[$ids[0]]) || ! is_string($paragraph['text'] ?? null) || trim($paragraph['text']) === '') {
                        throw ValidationException::withMessages(['content' => 'Corrected questions require one separate nonempty revision explanation per source question. Review the draft mappings; no edit was discarded.']);
                    }
                    $mapped[$ids[0]] = true;
                }
                $expected = array_column($current['notes'], 'question_id');
                if (count($mapped) !== count($expected) || array_diff($expected, array_keys($mapped))) {
                    throw ValidationException::withMessages(['content' => 'Every source question requires its own mapped explanation.']);
                }
            }
            // Capture timestamps may differ; all educational content and IDs must match.
            if (($document['major'] ?? null) !== $current['major'] || ($document['subject'] ?? null) !== $current['subject']
                || ($source['major'] ?? null) !== $current['major'] || ($source['subject'] ?? null) !== $current['subject']
                || ($source['quiz'] ?? null) !== $current['quiz'] || ($source['notes'] ?? null) !== $current['notes']
                || ($source['meta']['total_explanations'] ?? null) !== $current['meta']['total_explanations']
                || ($source['meta']['format_version'] ?? null) !== $current['meta']['format_version']) {
                throw ValidationException::withMessages(['content' => 'A selected revision source has changed or belongs to another subject. Refresh the selection; existing drafts have not been overwritten.']);
            }
        }
    }
}
