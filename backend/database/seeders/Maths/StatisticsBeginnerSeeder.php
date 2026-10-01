<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class StatisticsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'statistics')->firstOrFail();

        $makeQuestion = static function (
            string $question,
            string $correct,
            string $wrong1,
            string $wrong2,
            string $wrong3,
            string $explanation
        ): array {
            return [
                'question' => $question,
                'choices' => [
                    ['choice_text' => $correct, 'is_correct' => true],
                    ['choice_text' => $wrong1, 'is_correct' => false],
                    ['choice_text' => $wrong2, 'is_correct' => false],
                    ['choice_text' => $wrong3, 'is_correct' => false],
                ],
                'explanation' => $explanation,
            ];
        };

        $quizzes = [
            [
                'title' => 'Organisation des données',
                'description' => 'Types de données, tableaux et fréquences.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La moyenne de 2,4,6 est :',
                        '4',
                        '3',
                        '6',
                        '12',
                        'On calcule (2+4+6)/3=4.'
                    ),
                    $makeQuestion(
                        'La médiane d\'une série ordonnée est :',
                        'La valeur centrale',
                        'La plus grande valeur',
                        'La plus petite valeur',
                        'La somme',
                        'Elle partage la série ordonnée en deux parties de même effectif.'
                    ),
                    $makeQuestion(
                        'Le mode est :',
                        'La valeur la plus fréquente',
                        'La moyenne',
                        'La valeur centrale',
                        'L\'écart maximal',
                        'Le mode est l\'observation ayant la fréquence la plus élevée.'
                    ),
                    $makeQuestion(
                        'L\'étendue d\'une série est :',
                        'Maximum - minimum',
                        'Moyenne - médiane',
                        'Somme / effectif',
                        'Variance / moyenne',
                        'Elle mesure l\'écart entre la plus grande et la plus petite valeur.'
                    ),
                    $makeQuestion(
                        'Si toutes les valeurs augmentent de 3, la moyenne :',
                        'Augmente de 3',
                        'Double',
                        'Ne change pas',
                        'Diminue de 3',
                        'Ajouter une constante à toutes les observations ajoute la même constante à la moyenne.'
                    ),
                    $makeQuestion(
                        'Une fréquence est généralement comprise entre :',
                        '0 et 1',
                        '-1 et 0',
                        '1 et 10',
                        '0 et 1000',
                        'Une fréquence relative est une proportion, donc elle se situe entre 0 et 1.'
                    ),
                    $makeQuestion(
                        'L\'écart-type mesure :',
                        'La dispersion autour de la moyenne',
                        'La médiane',
                        'Le nombre de classes',
                        'Le mode',
                        'Il est lié à la variance et traduit la dispersion des observations.'
                    ),
                    $makeQuestion(
                        'Un échantillon est :',
                        'Une partie de la population étudiée',
                        'Toute la population',
                        'Une moyenne',
                        'Une fréquence',
                        'On observe souvent un échantillon pour tirer des informations sur une population plus large.'
                    ),
                    $makeQuestion(
                        'Un histogramme est adapté surtout à :',
                        'Des données quantitatives regroupées par intervalles',
                        'Des phrases',
                        'Des matrices',
                        'Des équations différentielles',
                        'L\'histogramme représente des fréquences par classes pour une variable quantitative.'
                    ),
                    $makeQuestion(
                        'Une valeur extrême peut fortement influencer :',
                        'La moyenne',
                        'Le nombre de variables',
                        'Le mode toujours',
                        'La taille de l\'échantillon',
                        'La moyenne utilise toutes les valeurs et est sensible aux observations très éloignées.'
                    ),
                ],
            ],
            [
                'title' => 'Moyenne, médiane et mode',
                'description' => 'Comparer les principales mesures de tendance centrale.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La moyenne de 2,4,6 est :',
                        '4',
                        '3',
                        '6',
                        '12',
                        'On calcule (2+4+6)/3=4.'
                    ),
                    $makeQuestion(
                        'La médiane d\'une série ordonnée est :',
                        'La valeur centrale',
                        'La plus grande valeur',
                        'La plus petite valeur',
                        'La somme',
                        'Elle partage la série ordonnée en deux parties de même effectif.'
                    ),
                    $makeQuestion(
                        'Le mode est :',
                        'La valeur la plus fréquente',
                        'La moyenne',
                        'La valeur centrale',
                        'L\'écart maximal',
                        'Le mode est l\'observation ayant la fréquence la plus élevée.'
                    ),
                    $makeQuestion(
                        'L\'étendue d\'une série est :',
                        'Maximum - minimum',
                        'Moyenne - médiane',
                        'Somme / effectif',
                        'Variance / moyenne',
                        'Elle mesure l\'écart entre la plus grande et la plus petite valeur.'
                    ),
                    $makeQuestion(
                        'Si toutes les valeurs augmentent de 3, la moyenne :',
                        'Augmente de 3',
                        'Double',
                        'Ne change pas',
                        'Diminue de 3',
                        'Ajouter une constante à toutes les observations ajoute la même constante à la moyenne.'
                    ),
                    $makeQuestion(
                        'Une fréquence est généralement comprise entre :',
                        '0 et 1',
                        '-1 et 0',
                        '1 et 10',
                        '0 et 1000',
                        'Une fréquence relative est une proportion, donc elle se situe entre 0 et 1.'
                    ),
                    $makeQuestion(
                        'L\'écart-type mesure :',
                        'La dispersion autour de la moyenne',
                        'La médiane',
                        'Le nombre de classes',
                        'Le mode',
                        'Il est lié à la variance et traduit la dispersion des observations.'
                    ),
                    $makeQuestion(
                        'Un échantillon est :',
                        'Une partie de la population étudiée',
                        'Toute la population',
                        'Une moyenne',
                        'Une fréquence',
                        'On observe souvent un échantillon pour tirer des informations sur une population plus large.'
                    ),
                    $makeQuestion(
                        'Un histogramme est adapté surtout à :',
                        'Des données quantitatives regroupées par intervalles',
                        'Des phrases',
                        'Des matrices',
                        'Des équations différentielles',
                        'L\'histogramme représente des fréquences par classes pour une variable quantitative.'
                    ),
                    $makeQuestion(
                        'Une valeur extrême peut fortement influencer :',
                        'La moyenne',
                        'Le nombre de variables',
                        'Le mode toujours',
                        'La taille de l\'échantillon',
                        'La moyenne utilise toutes les valeurs et est sensible aux observations très éloignées.'
                    ),
                ],
            ],
            [
                'title' => 'Moyennes pondérées et fréquences cumulées',
                'description' => 'Calculer des moyennes pondérées et lire des distributions.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La moyenne de 2,4,6 est :',
                        '4',
                        '3',
                        '6',
                        '12',
                        'On calcule (2+4+6)/3=4.'
                    ),
                    $makeQuestion(
                        'La médiane d\'une série ordonnée est :',
                        'La valeur centrale',
                        'La plus grande valeur',
                        'La plus petite valeur',
                        'La somme',
                        'Elle partage la série ordonnée en deux parties de même effectif.'
                    ),
                    $makeQuestion(
                        'Le mode est :',
                        'La valeur la plus fréquente',
                        'La moyenne',
                        'La valeur centrale',
                        'L\'écart maximal',
                        'Le mode est l\'observation ayant la fréquence la plus élevée.'
                    ),
                    $makeQuestion(
                        'L\'étendue d\'une série est :',
                        'Maximum - minimum',
                        'Moyenne - médiane',
                        'Somme / effectif',
                        'Variance / moyenne',
                        'Elle mesure l\'écart entre la plus grande et la plus petite valeur.'
                    ),
                    $makeQuestion(
                        'Si toutes les valeurs augmentent de 3, la moyenne :',
                        'Augmente de 3',
                        'Double',
                        'Ne change pas',
                        'Diminue de 3',
                        'Ajouter une constante à toutes les observations ajoute la même constante à la moyenne.'
                    ),
                    $makeQuestion(
                        'Une fréquence est généralement comprise entre :',
                        '0 et 1',
                        '-1 et 0',
                        '1 et 10',
                        '0 et 1000',
                        'Une fréquence relative est une proportion, donc elle se situe entre 0 et 1.'
                    ),
                    $makeQuestion(
                        'L\'écart-type mesure :',
                        'La dispersion autour de la moyenne',
                        'La médiane',
                        'Le nombre de classes',
                        'Le mode',
                        'Il est lié à la variance et traduit la dispersion des observations.'
                    ),
                    $makeQuestion(
                        'Un échantillon est :',
                        'Une partie de la population étudiée',
                        'Toute la population',
                        'Une moyenne',
                        'Une fréquence',
                        'On observe souvent un échantillon pour tirer des informations sur une population plus large.'
                    ),
                    $makeQuestion(
                        'Un histogramme est adapté surtout à :',
                        'Des données quantitatives regroupées par intervalles',
                        'Des phrases',
                        'Des matrices',
                        'Des équations différentielles',
                        'L\'histogramme représente des fréquences par classes pour une variable quantitative.'
                    ),
                    $makeQuestion(
                        'Une valeur extrême peut fortement influencer :',
                        'La moyenne',
                        'Le nombre de variables',
                        'Le mode toujours',
                        'La taille de l\'échantillon',
                        'La moyenne utilise toutes les valeurs et est sensible aux observations très éloignées.'
                    ),
                ],
            ],
            [
                'title' => 'Variance et écart-type',
                'description' => 'Mesurer et interpréter la dispersion.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La moyenne de 2,4,6 est :',
                        '4',
                        '3',
                        '6',
                        '12',
                        'On calcule (2+4+6)/3=4.'
                    ),
                    $makeQuestion(
                        'La médiane d\'une série ordonnée est :',
                        'La valeur centrale',
                        'La plus grande valeur',
                        'La plus petite valeur',
                        'La somme',
                        'Elle partage la série ordonnée en deux parties de même effectif.'
                    ),
                    $makeQuestion(
                        'Le mode est :',
                        'La valeur la plus fréquente',
                        'La moyenne',
                        'La valeur centrale',
                        'L\'écart maximal',
                        'Le mode est l\'observation ayant la fréquence la plus élevée.'
                    ),
                    $makeQuestion(
                        'L\'étendue d\'une série est :',
                        'Maximum - minimum',
                        'Moyenne - médiane',
                        'Somme / effectif',
                        'Variance / moyenne',
                        'Elle mesure l\'écart entre la plus grande et la plus petite valeur.'
                    ),
                    $makeQuestion(
                        'Si toutes les valeurs augmentent de 3, la moyenne :',
                        'Augmente de 3',
                        'Double',
                        'Ne change pas',
                        'Diminue de 3',
                        'Ajouter une constante à toutes les observations ajoute la même constante à la moyenne.'
                    ),
                    $makeQuestion(
                        'Une fréquence est généralement comprise entre :',
                        '0 et 1',
                        '-1 et 0',
                        '1 et 10',
                        '0 et 1000',
                        'Une fréquence relative est une proportion, donc elle se situe entre 0 et 1.'
                    ),
                    $makeQuestion(
                        'L\'écart-type mesure :',
                        'La dispersion autour de la moyenne',
                        'La médiane',
                        'Le nombre de classes',
                        'Le mode',
                        'Il est lié à la variance et traduit la dispersion des observations.'
                    ),
                    $makeQuestion(
                        'Un échantillon est :',
                        'Une partie de la population étudiée',
                        'Toute la population',
                        'Une moyenne',
                        'Une fréquence',
                        'On observe souvent un échantillon pour tirer des informations sur une population plus large.'
                    ),
                    $makeQuestion(
                        'Un histogramme est adapté surtout à :',
                        'Des données quantitatives regroupées par intervalles',
                        'Des phrases',
                        'Des matrices',
                        'Des équations différentielles',
                        'L\'histogramme représente des fréquences par classes pour une variable quantitative.'
                    ),
                    $makeQuestion(
                        'Une valeur extrême peut fortement influencer :',
                        'La moyenne',
                        'Le nombre de variables',
                        'Le mode toujours',
                        'La taille de l\'échantillon',
                        'La moyenne utilise toutes les valeurs et est sensible aux observations très éloignées.'
                    ),
                ],
            ],
            [
                'title' => 'Quartiles et boîte à moustaches',
                'description' => 'Décrire la position et la dispersion avec les quartiles.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La moyenne de 2,4,6 est :',
                        '4',
                        '3',
                        '6',
                        '12',
                        'On calcule (2+4+6)/3=4.'
                    ),
                    $makeQuestion(
                        'La médiane d\'une série ordonnée est :',
                        'La valeur centrale',
                        'La plus grande valeur',
                        'La plus petite valeur',
                        'La somme',
                        'Elle partage la série ordonnée en deux parties de même effectif.'
                    ),
                    $makeQuestion(
                        'Le mode est :',
                        'La valeur la plus fréquente',
                        'La moyenne',
                        'La valeur centrale',
                        'L\'écart maximal',
                        'Le mode est l\'observation ayant la fréquence la plus élevée.'
                    ),
                    $makeQuestion(
                        'L\'étendue d\'une série est :',
                        'Maximum - minimum',
                        'Moyenne - médiane',
                        'Somme / effectif',
                        'Variance / moyenne',
                        'Elle mesure l\'écart entre la plus grande et la plus petite valeur.'
                    ),
                    $makeQuestion(
                        'Si toutes les valeurs augmentent de 3, la moyenne :',
                        'Augmente de 3',
                        'Double',
                        'Ne change pas',
                        'Diminue de 3',
                        'Ajouter une constante à toutes les observations ajoute la même constante à la moyenne.'
                    ),
                    $makeQuestion(
                        'Une fréquence est généralement comprise entre :',
                        '0 et 1',
                        '-1 et 0',
                        '1 et 10',
                        '0 et 1000',
                        'Une fréquence relative est une proportion, donc elle se situe entre 0 et 1.'
                    ),
                    $makeQuestion(
                        'L\'écart-type mesure :',
                        'La dispersion autour de la moyenne',
                        'La médiane',
                        'Le nombre de classes',
                        'Le mode',
                        'Il est lié à la variance et traduit la dispersion des observations.'
                    ),
                    $makeQuestion(
                        'Un échantillon est :',
                        'Une partie de la population étudiée',
                        'Toute la population',
                        'Une moyenne',
                        'Une fréquence',
                        'On observe souvent un échantillon pour tirer des informations sur une population plus large.'
                    ),
                    $makeQuestion(
                        'Un histogramme est adapté surtout à :',
                        'Des données quantitatives regroupées par intervalles',
                        'Des phrases',
                        'Des matrices',
                        'Des équations différentielles',
                        'L\'histogramme représente des fréquences par classes pour une variable quantitative.'
                    ),
                    $makeQuestion(
                        'Une valeur extrême peut fortement influencer :',
                        'La moyenne',
                        'Le nombre de variables',
                        'Le mode toujours',
                        'La taille de l\'échantillon',
                        'La moyenne utilise toutes les valeurs et est sensible aux observations très éloignées.'
                    ),
                ],
            ],
            [
                'title' => 'Graphiques et distributions',
                'description' => 'Choisir et interpréter des représentations adaptées.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La moyenne de 2,4,6 est :',
                        '4',
                        '3',
                        '6',
                        '12',
                        'On calcule (2+4+6)/3=4.'
                    ),
                    $makeQuestion(
                        'La médiane d\'une série ordonnée est :',
                        'La valeur centrale',
                        'La plus grande valeur',
                        'La plus petite valeur',
                        'La somme',
                        'Elle partage la série ordonnée en deux parties de même effectif.'
                    ),
                    $makeQuestion(
                        'Le mode est :',
                        'La valeur la plus fréquente',
                        'La moyenne',
                        'La valeur centrale',
                        'L\'écart maximal',
                        'Le mode est l\'observation ayant la fréquence la plus élevée.'
                    ),
                    $makeQuestion(
                        'L\'étendue d\'une série est :',
                        'Maximum - minimum',
                        'Moyenne - médiane',
                        'Somme / effectif',
                        'Variance / moyenne',
                        'Elle mesure l\'écart entre la plus grande et la plus petite valeur.'
                    ),
                    $makeQuestion(
                        'Si toutes les valeurs augmentent de 3, la moyenne :',
                        'Augmente de 3',
                        'Double',
                        'Ne change pas',
                        'Diminue de 3',
                        'Ajouter une constante à toutes les observations ajoute la même constante à la moyenne.'
                    ),
                    $makeQuestion(
                        'Une fréquence est généralement comprise entre :',
                        '0 et 1',
                        '-1 et 0',
                        '1 et 10',
                        '0 et 1000',
                        'Une fréquence relative est une proportion, donc elle se situe entre 0 et 1.'
                    ),
                    $makeQuestion(
                        'L\'écart-type mesure :',
                        'La dispersion autour de la moyenne',
                        'La médiane',
                        'Le nombre de classes',
                        'Le mode',
                        'Il est lié à la variance et traduit la dispersion des observations.'
                    ),
                    $makeQuestion(
                        'Un échantillon est :',
                        'Une partie de la population étudiée',
                        'Toute la population',
                        'Une moyenne',
                        'Une fréquence',
                        'On observe souvent un échantillon pour tirer des informations sur une population plus large.'
                    ),
                    $makeQuestion(
                        'Un histogramme est adapté surtout à :',
                        'Des données quantitatives regroupées par intervalles',
                        'Des phrases',
                        'Des matrices',
                        'Des équations différentielles',
                        'L\'histogramme représente des fréquences par classes pour une variable quantitative.'
                    ),
                    $makeQuestion(
                        'Une valeur extrême peut fortement influencer :',
                        'La moyenne',
                        'Le nombre de variables',
                        'Le mode toujours',
                        'La taille de l\'échantillon',
                        'La moyenne utilise toutes les valeurs et est sensible aux observations très éloignées.'
                    ),
                ],
            ],
            [
                'title' => 'Population, échantillon et qualité des données',
                'description' => 'Distinguer population, échantillon et sources de biais.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La moyenne de 2,4,6 est :',
                        '4',
                        '3',
                        '6',
                        '12',
                        'On calcule (2+4+6)/3=4.'
                    ),
                    $makeQuestion(
                        'La médiane d\'une série ordonnée est :',
                        'La valeur centrale',
                        'La plus grande valeur',
                        'La plus petite valeur',
                        'La somme',
                        'Elle partage la série ordonnée en deux parties de même effectif.'
                    ),
                    $makeQuestion(
                        'Le mode est :',
                        'La valeur la plus fréquente',
                        'La moyenne',
                        'La valeur centrale',
                        'L\'écart maximal',
                        'Le mode est l\'observation ayant la fréquence la plus élevée.'
                    ),
                    $makeQuestion(
                        'L\'étendue d\'une série est :',
                        'Maximum - minimum',
                        'Moyenne - médiane',
                        'Somme / effectif',
                        'Variance / moyenne',
                        'Elle mesure l\'écart entre la plus grande et la plus petite valeur.'
                    ),
                    $makeQuestion(
                        'Si toutes les valeurs augmentent de 3, la moyenne :',
                        'Augmente de 3',
                        'Double',
                        'Ne change pas',
                        'Diminue de 3',
                        'Ajouter une constante à toutes les observations ajoute la même constante à la moyenne.'
                    ),
                    $makeQuestion(
                        'Une fréquence est généralement comprise entre :',
                        '0 et 1',
                        '-1 et 0',
                        '1 et 10',
                        '0 et 1000',
                        'Une fréquence relative est une proportion, donc elle se situe entre 0 et 1.'
                    ),
                    $makeQuestion(
                        'L\'écart-type mesure :',
                        'La dispersion autour de la moyenne',
                        'La médiane',
                        'Le nombre de classes',
                        'Le mode',
                        'Il est lié à la variance et traduit la dispersion des observations.'
                    ),
                    $makeQuestion(
                        'Un échantillon est :',
                        'Une partie de la population étudiée',
                        'Toute la population',
                        'Une moyenne',
                        'Une fréquence',
                        'On observe souvent un échantillon pour tirer des informations sur une population plus large.'
                    ),
                    $makeQuestion(
                        'Un histogramme est adapté surtout à :',
                        'Des données quantitatives regroupées par intervalles',
                        'Des phrases',
                        'Des matrices',
                        'Des équations différentielles',
                        'L\'histogramme représente des fréquences par classes pour une variable quantitative.'
                    ),
                    $makeQuestion(
                        'Une valeur extrême peut fortement influencer :',
                        'La moyenne',
                        'Le nombre de variables',
                        'Le mode toujours',
                        'La taille de l\'échantillon',
                        'La moyenne utilise toutes les valeurs et est sensible aux observations très éloignées.'
                    ),
                ],
            ],
            [
                'title' => 'Interprétation statistique',
                'description' => 'Tirer des conclusions prudentes à partir des données.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La moyenne de 2,4,6 est :',
                        '4',
                        '3',
                        '6',
                        '12',
                        'On calcule (2+4+6)/3=4.'
                    ),
                    $makeQuestion(
                        'La médiane d\'une série ordonnée est :',
                        'La valeur centrale',
                        'La plus grande valeur',
                        'La plus petite valeur',
                        'La somme',
                        'Elle partage la série ordonnée en deux parties de même effectif.'
                    ),
                    $makeQuestion(
                        'Le mode est :',
                        'La valeur la plus fréquente',
                        'La moyenne',
                        'La valeur centrale',
                        'L\'écart maximal',
                        'Le mode est l\'observation ayant la fréquence la plus élevée.'
                    ),
                    $makeQuestion(
                        'L\'étendue d\'une série est :',
                        'Maximum - minimum',
                        'Moyenne - médiane',
                        'Somme / effectif',
                        'Variance / moyenne',
                        'Elle mesure l\'écart entre la plus grande et la plus petite valeur.'
                    ),
                    $makeQuestion(
                        'Si toutes les valeurs augmentent de 3, la moyenne :',
                        'Augmente de 3',
                        'Double',
                        'Ne change pas',
                        'Diminue de 3',
                        'Ajouter une constante à toutes les observations ajoute la même constante à la moyenne.'
                    ),
                    $makeQuestion(
                        'Une fréquence est généralement comprise entre :',
                        '0 et 1',
                        '-1 et 0',
                        '1 et 10',
                        '0 et 1000',
                        'Une fréquence relative est une proportion, donc elle se situe entre 0 et 1.'
                    ),
                    $makeQuestion(
                        'L\'écart-type mesure :',
                        'La dispersion autour de la moyenne',
                        'La médiane',
                        'Le nombre de classes',
                        'Le mode',
                        'Il est lié à la variance et traduit la dispersion des observations.'
                    ),
                    $makeQuestion(
                        'Un échantillon est :',
                        'Une partie de la population étudiée',
                        'Toute la population',
                        'Une moyenne',
                        'Une fréquence',
                        'On observe souvent un échantillon pour tirer des informations sur une population plus large.'
                    ),
                    $makeQuestion(
                        'Un histogramme est adapté surtout à :',
                        'Des données quantitatives regroupées par intervalles',
                        'Des phrases',
                        'Des matrices',
                        'Des équations différentielles',
                        'L\'histogramme représente des fréquences par classes pour une variable quantitative.'
                    ),
                    $makeQuestion(
                        'Une valeur extrême peut fortement influencer :',
                        'La moyenne',
                        'Le nombre de variables',
                        'Le mode toujours',
                        'La taille de l\'échantillon',
                        'La moyenne utilise toutes les valeurs et est sensible aux observations très éloignées.'
                    ),
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
                ]
            );

            foreach ($quizData['questions'] as $index => $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $index + 1,
                    ],
                    [
                        'question' => $questionData['question'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'],
                    ]
                );

                $question->choices()->delete();
                $choices = $questionData['choices'];
                shuffle($choices);

                foreach ($choices as $choiceIndex => $choice) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choice['choice_text'],
                        'is_correct' => $choice['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}
