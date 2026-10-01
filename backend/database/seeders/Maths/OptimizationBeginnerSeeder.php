<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class OptimizationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'optimization')->firstOrFail();

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
                'title' => 'Introduction à l’optimisation',
                'description' => 'Objectif, variables de décision, contraintes et solutions admissibles.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Que cherche un problème d\'optimisation ?',
                        'La meilleure solution selon un critère',
                        'Une solution quelconque',
                        'La suppression des contraintes',
                        'Une constante',
                        'L\'objectif est de maximiser ou minimiser une fonction sur les solutions admissibles.'
                    ),
                    $makeQuestion(
                        'Une variable de décision est :',
                        'Une quantité que l\'on choisit',
                        'Une constante universelle',
                        'Une erreur',
                        'Une unité',
                        'Elle représente un choix que le décideur contrôle.'
                    ),
                    $makeQuestion(
                        'Une contrainte sert à :',
                        'Limiter les solutions autorisées',
                        'Maximiser automatiquement',
                        'Définir une moyenne',
                        'Supprimer l\'objectif',
                        'Les contraintes définissent le domaine admissible.'
                    ),
                    $makeQuestion(
                        'Pour f(x)=x², le minimum sur R est atteint en :',
                        'x=0',
                        'x=1',
                        'x=-1',
                        'x=2',
                        'x² est toujours ≥0 et vaut 0 en 0.'
                    ),
                    $makeQuestion(
                        'Une fonction croissante sur [a,b] atteint son maximum en :',
                        'b',
                        'a',
                        '(a+b)/2',
                        '0',
                        'Les valeurs augmentent quand x augmente.'
                    ),
                    $makeQuestion(
                        'Une solution qui respecte toutes les contraintes est :',
                        'Admissible',
                        'Optimale automatiquement',
                        'Impossible',
                        'Locale',
                        'L\'admissibilité ne garantit pas l\'optimalité.'
                    ),
                    $makeQuestion(
                        'Dans Z=3x+2y, si (x,y)=(2,1), Z vaut :',
                        '8',
                        '7',
                        '5',
                        '6',
                        '3×2+2×1=8.'
                    ),
                    $makeQuestion(
                        'Un problème de programmation linéaire utilise :',
                        'Une fonction objectif et des contraintes linéaires',
                        'Uniquement des fonctions trigonométriques',
                        'Des équations différentielles',
                        'Des matrices aléatoires',
                        'La programmation linéaire repose sur des expressions linéaires.'
                    ),
                    $makeQuestion(
                        'Une minimisation cherche :',
                        'La plus petite valeur admissible',
                        'La plus grande valeur admissible',
                        'Une valeur nulle',
                        'Une valeur arbitraire',
                        'Le but est de réduire au minimum la fonction objectif.'
                    ),
                    $makeQuestion(
                        'Pourquoi une frontière admissible peut-elle contenir l\'optimum ?',
                        'Parce que les contraintes peuvent pousser la meilleure solution sur la frontière',
                        'Parce que la frontière est toujours optimale',
                        'Parce que l\'intérieur est interdit',
                        'Parce que les dérivées n\'existent pas',
                        'L\'optimum dépend du domaine autorisé et peut se situer sur sa frontière.'
                    ),
                ],
            ],
            [
                'title' => 'Maximum, minimum et points critiques',
                'description' => 'Extrema simples et rôle des dérivées.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Que cherche un problème d\'optimisation ?',
                        'La meilleure solution selon un critère',
                        'Une solution quelconque',
                        'La suppression des contraintes',
                        'Une constante',
                        'L\'objectif est de maximiser ou minimiser une fonction sur les solutions admissibles.'
                    ),
                    $makeQuestion(
                        'Une variable de décision est :',
                        'Une quantité que l\'on choisit',
                        'Une constante universelle',
                        'Une erreur',
                        'Une unité',
                        'Elle représente un choix que le décideur contrôle.'
                    ),
                    $makeQuestion(
                        'Une contrainte sert à :',
                        'Limiter les solutions autorisées',
                        'Maximiser automatiquement',
                        'Définir une moyenne',
                        'Supprimer l\'objectif',
                        'Les contraintes définissent le domaine admissible.'
                    ),
                    $makeQuestion(
                        'Pour f(x)=x², le minimum sur R est atteint en :',
                        'x=0',
                        'x=1',
                        'x=-1',
                        'x=2',
                        'x² est toujours ≥0 et vaut 0 en 0.'
                    ),
                    $makeQuestion(
                        'Une fonction croissante sur [a,b] atteint son maximum en :',
                        'b',
                        'a',
                        '(a+b)/2',
                        '0',
                        'Les valeurs augmentent quand x augmente.'
                    ),
                    $makeQuestion(
                        'Une solution qui respecte toutes les contraintes est :',
                        'Admissible',
                        'Optimale automatiquement',
                        'Impossible',
                        'Locale',
                        'L\'admissibilité ne garantit pas l\'optimalité.'
                    ),
                    $makeQuestion(
                        'Dans Z=3x+2y, si (x,y)=(2,1), Z vaut :',
                        '8',
                        '7',
                        '5',
                        '6',
                        '3×2+2×1=8.'
                    ),
                    $makeQuestion(
                        'Un problème de programmation linéaire utilise :',
                        'Une fonction objectif et des contraintes linéaires',
                        'Uniquement des fonctions trigonométriques',
                        'Des équations différentielles',
                        'Des matrices aléatoires',
                        'La programmation linéaire repose sur des expressions linéaires.'
                    ),
                    $makeQuestion(
                        'Une minimisation cherche :',
                        'La plus petite valeur admissible',
                        'La plus grande valeur admissible',
                        'Une valeur nulle',
                        'Une valeur arbitraire',
                        'Le but est de réduire au minimum la fonction objectif.'
                    ),
                    $makeQuestion(
                        'Pourquoi une frontière admissible peut-elle contenir l\'optimum ?',
                        'Parce que les contraintes peuvent pousser la meilleure solution sur la frontière',
                        'Parce que la frontière est toujours optimale',
                        'Parce que l\'intérieur est interdit',
                        'Parce que les dérivées n\'existent pas',
                        'L\'optimum dépend du domaine autorisé et peut se situer sur sa frontière.'
                    ),
                ],
            ],
            [
                'title' => 'Domaine admissible et contraintes',
                'description' => 'Lecture et interprétation des contraintes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Que cherche un problème d\'optimisation ?',
                        'La meilleure solution selon un critère',
                        'Une solution quelconque',
                        'La suppression des contraintes',
                        'Une constante',
                        'L\'objectif est de maximiser ou minimiser une fonction sur les solutions admissibles.'
                    ),
                    $makeQuestion(
                        'Une variable de décision est :',
                        'Une quantité que l\'on choisit',
                        'Une constante universelle',
                        'Une erreur',
                        'Une unité',
                        'Elle représente un choix que le décideur contrôle.'
                    ),
                    $makeQuestion(
                        'Une contrainte sert à :',
                        'Limiter les solutions autorisées',
                        'Maximiser automatiquement',
                        'Définir une moyenne',
                        'Supprimer l\'objectif',
                        'Les contraintes définissent le domaine admissible.'
                    ),
                    $makeQuestion(
                        'Pour f(x)=x², le minimum sur R est atteint en :',
                        'x=0',
                        'x=1',
                        'x=-1',
                        'x=2',
                        'x² est toujours ≥0 et vaut 0 en 0.'
                    ),
                    $makeQuestion(
                        'Une fonction croissante sur [a,b] atteint son maximum en :',
                        'b',
                        'a',
                        '(a+b)/2',
                        '0',
                        'Les valeurs augmentent quand x augmente.'
                    ),
                    $makeQuestion(
                        'Une solution qui respecte toutes les contraintes est :',
                        'Admissible',
                        'Optimale automatiquement',
                        'Impossible',
                        'Locale',
                        'L\'admissibilité ne garantit pas l\'optimalité.'
                    ),
                    $makeQuestion(
                        'Dans Z=3x+2y, si (x,y)=(2,1), Z vaut :',
                        '8',
                        '7',
                        '5',
                        '6',
                        '3×2+2×1=8.'
                    ),
                    $makeQuestion(
                        'Un problème de programmation linéaire utilise :',
                        'Une fonction objectif et des contraintes linéaires',
                        'Uniquement des fonctions trigonométriques',
                        'Des équations différentielles',
                        'Des matrices aléatoires',
                        'La programmation linéaire repose sur des expressions linéaires.'
                    ),
                    $makeQuestion(
                        'Une minimisation cherche :',
                        'La plus petite valeur admissible',
                        'La plus grande valeur admissible',
                        'Une valeur nulle',
                        'Une valeur arbitraire',
                        'Le but est de réduire au minimum la fonction objectif.'
                    ),
                    $makeQuestion(
                        'Pourquoi une frontière admissible peut-elle contenir l\'optimum ?',
                        'Parce que les contraintes peuvent pousser la meilleure solution sur la frontière',
                        'Parce que la frontière est toujours optimale',
                        'Parce que l\'intérieur est interdit',
                        'Parce que les dérivées n\'existent pas',
                        'L\'optimum dépend du domaine autorisé et peut se situer sur sa frontière.'
                    ),
                ],
            ],
            [
                'title' => 'Programmation linéaire',
                'description' => 'Objectifs et contraintes linéaires simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Que cherche un problème d\'optimisation ?',
                        'La meilleure solution selon un critère',
                        'Une solution quelconque',
                        'La suppression des contraintes',
                        'Une constante',
                        'L\'objectif est de maximiser ou minimiser une fonction sur les solutions admissibles.'
                    ),
                    $makeQuestion(
                        'Une variable de décision est :',
                        'Une quantité que l\'on choisit',
                        'Une constante universelle',
                        'Une erreur',
                        'Une unité',
                        'Elle représente un choix que le décideur contrôle.'
                    ),
                    $makeQuestion(
                        'Une contrainte sert à :',
                        'Limiter les solutions autorisées',
                        'Maximiser automatiquement',
                        'Définir une moyenne',
                        'Supprimer l\'objectif',
                        'Les contraintes définissent le domaine admissible.'
                    ),
                    $makeQuestion(
                        'Pour f(x)=x², le minimum sur R est atteint en :',
                        'x=0',
                        'x=1',
                        'x=-1',
                        'x=2',
                        'x² est toujours ≥0 et vaut 0 en 0.'
                    ),
                    $makeQuestion(
                        'Une fonction croissante sur [a,b] atteint son maximum en :',
                        'b',
                        'a',
                        '(a+b)/2',
                        '0',
                        'Les valeurs augmentent quand x augmente.'
                    ),
                    $makeQuestion(
                        'Une solution qui respecte toutes les contraintes est :',
                        'Admissible',
                        'Optimale automatiquement',
                        'Impossible',
                        'Locale',
                        'L\'admissibilité ne garantit pas l\'optimalité.'
                    ),
                    $makeQuestion(
                        'Dans Z=3x+2y, si (x,y)=(2,1), Z vaut :',
                        '8',
                        '7',
                        '5',
                        '6',
                        '3×2+2×1=8.'
                    ),
                    $makeQuestion(
                        'Un problème de programmation linéaire utilise :',
                        'Une fonction objectif et des contraintes linéaires',
                        'Uniquement des fonctions trigonométriques',
                        'Des équations différentielles',
                        'Des matrices aléatoires',
                        'La programmation linéaire repose sur des expressions linéaires.'
                    ),
                    $makeQuestion(
                        'Une minimisation cherche :',
                        'La plus petite valeur admissible',
                        'La plus grande valeur admissible',
                        'Une valeur nulle',
                        'Une valeur arbitraire',
                        'Le but est de réduire au minimum la fonction objectif.'
                    ),
                    $makeQuestion(
                        'Pourquoi une frontière admissible peut-elle contenir l\'optimum ?',
                        'Parce que les contraintes peuvent pousser la meilleure solution sur la frontière',
                        'Parce que la frontière est toujours optimale',
                        'Parce que l\'intérieur est interdit',
                        'Parce que les dérivées n\'existent pas',
                        'L\'optimum dépend du domaine autorisé et peut se situer sur sa frontière.'
                    ),
                ],
            ],
            [
                'title' => 'Applications d’optimisation',
                'description' => 'Coûts, recettes, surfaces et décisions.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Que cherche un problème d\'optimisation ?',
                        'La meilleure solution selon un critère',
                        'Une solution quelconque',
                        'La suppression des contraintes',
                        'Une constante',
                        'L\'objectif est de maximiser ou minimiser une fonction sur les solutions admissibles.'
                    ),
                    $makeQuestion(
                        'Une variable de décision est :',
                        'Une quantité que l\'on choisit',
                        'Une constante universelle',
                        'Une erreur',
                        'Une unité',
                        'Elle représente un choix que le décideur contrôle.'
                    ),
                    $makeQuestion(
                        'Une contrainte sert à :',
                        'Limiter les solutions autorisées',
                        'Maximiser automatiquement',
                        'Définir une moyenne',
                        'Supprimer l\'objectif',
                        'Les contraintes définissent le domaine admissible.'
                    ),
                    $makeQuestion(
                        'Pour f(x)=x², le minimum sur R est atteint en :',
                        'x=0',
                        'x=1',
                        'x=-1',
                        'x=2',
                        'x² est toujours ≥0 et vaut 0 en 0.'
                    ),
                    $makeQuestion(
                        'Une fonction croissante sur [a,b] atteint son maximum en :',
                        'b',
                        'a',
                        '(a+b)/2',
                        '0',
                        'Les valeurs augmentent quand x augmente.'
                    ),
                    $makeQuestion(
                        'Une solution qui respecte toutes les contraintes est :',
                        'Admissible',
                        'Optimale automatiquement',
                        'Impossible',
                        'Locale',
                        'L\'admissibilité ne garantit pas l\'optimalité.'
                    ),
                    $makeQuestion(
                        'Dans Z=3x+2y, si (x,y)=(2,1), Z vaut :',
                        '8',
                        '7',
                        '5',
                        '6',
                        '3×2+2×1=8.'
                    ),
                    $makeQuestion(
                        'Un problème de programmation linéaire utilise :',
                        'Une fonction objectif et des contraintes linéaires',
                        'Uniquement des fonctions trigonométriques',
                        'Des équations différentielles',
                        'Des matrices aléatoires',
                        'La programmation linéaire repose sur des expressions linéaires.'
                    ),
                    $makeQuestion(
                        'Une minimisation cherche :',
                        'La plus petite valeur admissible',
                        'La plus grande valeur admissible',
                        'Une valeur nulle',
                        'Une valeur arbitraire',
                        'Le but est de réduire au minimum la fonction objectif.'
                    ),
                    $makeQuestion(
                        'Pourquoi une frontière admissible peut-elle contenir l\'optimum ?',
                        'Parce que les contraintes peuvent pousser la meilleure solution sur la frontière',
                        'Parce que la frontière est toujours optimale',
                        'Parce que l\'intérieur est interdit',
                        'Parce que les dérivées n\'existent pas',
                        'L\'optimum dépend du domaine autorisé et peut se situer sur sa frontière.'
                    ),
                ],
            ],
            [
                'title' => 'Révision générale de l’optimisation',
                'description' => 'Synthèse des notions essentielles.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Que cherche un problème d\'optimisation ?',
                        'La meilleure solution selon un critère',
                        'Une solution quelconque',
                        'La suppression des contraintes',
                        'Une constante',
                        'L\'objectif est de maximiser ou minimiser une fonction sur les solutions admissibles.'
                    ),
                    $makeQuestion(
                        'Une variable de décision est :',
                        'Une quantité que l\'on choisit',
                        'Une constante universelle',
                        'Une erreur',
                        'Une unité',
                        'Elle représente un choix que le décideur contrôle.'
                    ),
                    $makeQuestion(
                        'Une contrainte sert à :',
                        'Limiter les solutions autorisées',
                        'Maximiser automatiquement',
                        'Définir une moyenne',
                        'Supprimer l\'objectif',
                        'Les contraintes définissent le domaine admissible.'
                    ),
                    $makeQuestion(
                        'Pour f(x)=x², le minimum sur R est atteint en :',
                        'x=0',
                        'x=1',
                        'x=-1',
                        'x=2',
                        'x² est toujours ≥0 et vaut 0 en 0.'
                    ),
                    $makeQuestion(
                        'Une fonction croissante sur [a,b] atteint son maximum en :',
                        'b',
                        'a',
                        '(a+b)/2',
                        '0',
                        'Les valeurs augmentent quand x augmente.'
                    ),
                    $makeQuestion(
                        'Une solution qui respecte toutes les contraintes est :',
                        'Admissible',
                        'Optimale automatiquement',
                        'Impossible',
                        'Locale',
                        'L\'admissibilité ne garantit pas l\'optimalité.'
                    ),
                    $makeQuestion(
                        'Dans Z=3x+2y, si (x,y)=(2,1), Z vaut :',
                        '8',
                        '7',
                        '5',
                        '6',
                        '3×2+2×1=8.'
                    ),
                    $makeQuestion(
                        'Un problème de programmation linéaire utilise :',
                        'Une fonction objectif et des contraintes linéaires',
                        'Uniquement des fonctions trigonométriques',
                        'Des équations différentielles',
                        'Des matrices aléatoires',
                        'La programmation linéaire repose sur des expressions linéaires.'
                    ),
                    $makeQuestion(
                        'Une minimisation cherche :',
                        'La plus petite valeur admissible',
                        'La plus grande valeur admissible',
                        'Une valeur nulle',
                        'Une valeur arbitraire',
                        'Le but est de réduire au minimum la fonction objectif.'
                    ),
                    $makeQuestion(
                        'Pourquoi une frontière admissible peut-elle contenir l\'optimum ?',
                        'Parce que les contraintes peuvent pousser la meilleure solution sur la frontière',
                        'Parce que la frontière est toujours optimale',
                        'Parce que l\'intérieur est interdit',
                        'Parce que les dérivées n\'existent pas',
                        'L\'optimum dépend du domaine autorisé et peut se situer sur sa frontière.'
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
