
<?php

return [
    // Maximum allowed questions in one video.
    'max_questions_per_video' => 30,
    'minimum_selection_score' => 45,
'duplicate_similarity_threshold' => 88,
'minimum_fill_ratio' => 0.75,

    // Basic question validation.
    'minimum_question_characters' => 8,
    'maximum_question_characters' => 500,
    'minimum_choices' => 2,
    'require_exactly_one_correct_choice' => true,
    'reject_duplicate_choice_texts' => true,

    // Question-length scoring ranges.
    'ideal_question_length' => [
        'min' => 30,
        'max' => 180,
    ],

    'acceptable_question_length' => [
        'min' => 8,
        'max' => 300,
    ],

    // Scoring bonuses.
    'weights' => [
        'one_correct_answer' => 20,
        'distinct_choices' => 10,
        'four_choices' => 20,
        'three_choices' => 12,
        'two_choices' => 5,
        'other_choice_count' => 10,
        'ideal_question_length' => 15,
        'acceptable_question_length' => 8,
        'question_mark_or_starter' => 10,
        'reasoning_signal' => 15,
        'has_explanation' => 10,
    ],

    // Initial wording signals; these are clues, not quality guarantees.
    'question_starters' => [
        'quel', 'quelle', 'quels', 'quelles',
        'combien', 'comment', 'pourquoi',
        'what', 'which', 'how', 'why', 'when',
        'ماذا', 'كيف', 'لماذا', 'كم',
    ],

    'reasoning_keywords' => [
        'calculer', 'calcul', 'comparer',
        'différence', 'difference',
        'pourcentage', 'proportion',
        'déduire', 'deduire', 'estimer',
        'maximum', 'minimum',
        'calculate', 'compare', 'percentage',
        'ratio', 'determine', 'equation',
        'probability', 'probabilité',
    ],
];