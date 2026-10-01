<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AppliedMathematicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'applied-mathematics')->firstOrFail();

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
                'title' => 'Taux, proportions et pourcentages',
                'description' => 'Ratios, pourcentages et calculs pratiques.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        '180 km en 3 h correspondent à :',
                        '60 km/h',
                        '30 km/h',
                        '90 km/h',
                        '540 km/h',
                        'La vitesse moyenne est 180/3=60 km/h.'
                    ),
                    $makeQuestion(
                        '25 % de 80 vaut :',
                        '20',
                        '10',
                        '25',
                        '40',
                        '0,25×80=20.'
                    ),
                    $makeQuestion(
                        'Un capital de 1000 € à 5 % simple produit :',
                        '50 €',
                        '5 €',
                        '100 €',
                        '1050 €',
                        '1000×0,05=50.'
                    ),
                    $makeQuestion(
                        'Une recette de 3000 € et des coûts de 1800 € donnent un bénéfice de :',
                        '1200 €',
                        '4800 €',
                        '1000 €',
                        '1800 €',
                        'Bénéfice=recettes-coûts.'
                    ),
                    $makeQuestion(
                        'L\'aire d\'un rectangle 8×5 vaut :',
                        '40',
                        '13',
                        '26',
                        '80',
                        'Aire=8×5=40.'
                    ),
                    $makeQuestion(
                        'Un volume 2×3×4 vaut :',
                        '24',
                        '9',
                        '12',
                        '18',
                        'Volume=2×3×4=24.'
                    ),
                    $makeQuestion(
                        'Dans une optimisation, une contrainte :',
                        'Limite les solutions admissibles',
                        'Donne toujours l\'optimum',
                        'Supprime les variables',
                        'Rend le coût nul',
                        'Les contraintes définissent les choix autorisés.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'obtenir 4 sur un dé équilibré est :',
                        '1/6',
                        '1/4',
                        '1/2',
                        '1/3',
                        'Une face sur six correspond au 4.'
                    ),
                    $makeQuestion(
                        'La moyenne de 4,6,8 est :',
                        '6',
                        '5',
                        '7',
                        '18',
                        '(4+6+8)/3=6.'
                    ),
                    $makeQuestion(
                        'Une approximation numérique peut être acceptable si :',
                        'Son erreur reste suffisamment faible pour l\'application',
                        'Elle est toujours exacte',
                        'Elle n\'a pas d\'unité',
                        'Elle n\'est jamais vérifiée',
                        'L\'utilité dépend du niveau de précision requis.'
                    ),
                ],
            ],
            [
                'title' => 'Mathématiques financières appliquées',
                'description' => 'Intérêts, coûts, recettes et bénéfices.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        '180 km en 3 h correspondent à :',
                        '60 km/h',
                        '30 km/h',
                        '90 km/h',
                        '540 km/h',
                        'La vitesse moyenne est 180/3=60 km/h.'
                    ),
                    $makeQuestion(
                        '25 % de 80 vaut :',
                        '20',
                        '10',
                        '25',
                        '40',
                        '0,25×80=20.'
                    ),
                    $makeQuestion(
                        'Un capital de 1000 € à 5 % simple produit :',
                        '50 €',
                        '5 €',
                        '100 €',
                        '1050 €',
                        '1000×0,05=50.'
                    ),
                    $makeQuestion(
                        'Une recette de 3000 € et des coûts de 1800 € donnent un bénéfice de :',
                        '1200 €',
                        '4800 €',
                        '1000 €',
                        '1800 €',
                        'Bénéfice=recettes-coûts.'
                    ),
                    $makeQuestion(
                        'L\'aire d\'un rectangle 8×5 vaut :',
                        '40',
                        '13',
                        '26',
                        '80',
                        'Aire=8×5=40.'
                    ),
                    $makeQuestion(
                        'Un volume 2×3×4 vaut :',
                        '24',
                        '9',
                        '12',
                        '18',
                        'Volume=2×3×4=24.'
                    ),
                    $makeQuestion(
                        'Dans une optimisation, une contrainte :',
                        'Limite les solutions admissibles',
                        'Donne toujours l\'optimum',
                        'Supprime les variables',
                        'Rend le coût nul',
                        'Les contraintes définissent les choix autorisés.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'obtenir 4 sur un dé équilibré est :',
                        '1/6',
                        '1/4',
                        '1/2',
                        '1/3',
                        'Une face sur six correspond au 4.'
                    ),
                    $makeQuestion(
                        'La moyenne de 4,6,8 est :',
                        '6',
                        '5',
                        '7',
                        '18',
                        '(4+6+8)/3=6.'
                    ),
                    $makeQuestion(
                        'Une approximation numérique peut être acceptable si :',
                        'Son erreur reste suffisamment faible pour l\'application',
                        'Elle est toujours exacte',
                        'Elle n\'a pas d\'unité',
                        'Elle n\'est jamais vérifiée',
                        'L\'utilité dépend du niveau de précision requis.'
                    ),
                ],
            ],
            [
                'title' => 'Géométrie et mesures appliquées',
                'description' => 'Longueurs, surfaces, volumes et conversions.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        '180 km en 3 h correspondent à :',
                        '60 km/h',
                        '30 km/h',
                        '90 km/h',
                        '540 km/h',
                        'La vitesse moyenne est 180/3=60 km/h.'
                    ),
                    $makeQuestion(
                        '25 % de 80 vaut :',
                        '20',
                        '10',
                        '25',
                        '40',
                        '0,25×80=20.'
                    ),
                    $makeQuestion(
                        'Un capital de 1000 € à 5 % simple produit :',
                        '50 €',
                        '5 €',
                        '100 €',
                        '1050 €',
                        '1000×0,05=50.'
                    ),
                    $makeQuestion(
                        'Une recette de 3000 € et des coûts de 1800 € donnent un bénéfice de :',
                        '1200 €',
                        '4800 €',
                        '1000 €',
                        '1800 €',
                        'Bénéfice=recettes-coûts.'
                    ),
                    $makeQuestion(
                        'L\'aire d\'un rectangle 8×5 vaut :',
                        '40',
                        '13',
                        '26',
                        '80',
                        'Aire=8×5=40.'
                    ),
                    $makeQuestion(
                        'Un volume 2×3×4 vaut :',
                        '24',
                        '9',
                        '12',
                        '18',
                        'Volume=2×3×4=24.'
                    ),
                    $makeQuestion(
                        'Dans une optimisation, une contrainte :',
                        'Limite les solutions admissibles',
                        'Donne toujours l\'optimum',
                        'Supprime les variables',
                        'Rend le coût nul',
                        'Les contraintes définissent les choix autorisés.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'obtenir 4 sur un dé équilibré est :',
                        '1/6',
                        '1/4',
                        '1/2',
                        '1/3',
                        'Une face sur six correspond au 4.'
                    ),
                    $makeQuestion(
                        'La moyenne de 4,6,8 est :',
                        '6',
                        '5',
                        '7',
                        '18',
                        '(4+6+8)/3=6.'
                    ),
                    $makeQuestion(
                        'Une approximation numérique peut être acceptable si :',
                        'Son erreur reste suffisamment faible pour l\'application',
                        'Elle est toujours exacte',
                        'Elle n\'a pas d\'unité',
                        'Elle n\'est jamais vérifiée',
                        'L\'utilité dépend du niveau de précision requis.'
                    ),
                ],
            ],
            [
                'title' => 'Optimisation et prise de décision',
                'description' => 'Ressources, coûts et choix sous contraintes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        '180 km en 3 h correspondent à :',
                        '60 km/h',
                        '30 km/h',
                        '90 km/h',
                        '540 km/h',
                        'La vitesse moyenne est 180/3=60 km/h.'
                    ),
                    $makeQuestion(
                        '25 % de 80 vaut :',
                        '20',
                        '10',
                        '25',
                        '40',
                        '0,25×80=20.'
                    ),
                    $makeQuestion(
                        'Un capital de 1000 € à 5 % simple produit :',
                        '50 €',
                        '5 €',
                        '100 €',
                        '1050 €',
                        '1000×0,05=50.'
                    ),
                    $makeQuestion(
                        'Une recette de 3000 € et des coûts de 1800 € donnent un bénéfice de :',
                        '1200 €',
                        '4800 €',
                        '1000 €',
                        '1800 €',
                        'Bénéfice=recettes-coûts.'
                    ),
                    $makeQuestion(
                        'L\'aire d\'un rectangle 8×5 vaut :',
                        '40',
                        '13',
                        '26',
                        '80',
                        'Aire=8×5=40.'
                    ),
                    $makeQuestion(
                        'Un volume 2×3×4 vaut :',
                        '24',
                        '9',
                        '12',
                        '18',
                        'Volume=2×3×4=24.'
                    ),
                    $makeQuestion(
                        'Dans une optimisation, une contrainte :',
                        'Limite les solutions admissibles',
                        'Donne toujours l\'optimum',
                        'Supprime les variables',
                        'Rend le coût nul',
                        'Les contraintes définissent les choix autorisés.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'obtenir 4 sur un dé équilibré est :',
                        '1/6',
                        '1/4',
                        '1/2',
                        '1/3',
                        'Une face sur six correspond au 4.'
                    ),
                    $makeQuestion(
                        'La moyenne de 4,6,8 est :',
                        '6',
                        '5',
                        '7',
                        '18',
                        '(4+6+8)/3=6.'
                    ),
                    $makeQuestion(
                        'Une approximation numérique peut être acceptable si :',
                        'Son erreur reste suffisamment faible pour l\'application',
                        'Elle est toujours exacte',
                        'Elle n\'a pas d\'unité',
                        'Elle n\'est jamais vérifiée',
                        'L\'utilité dépend du niveau de précision requis.'
                    ),
                ],
            ],
            [
                'title' => 'Probabilités, statistiques et décisions',
                'description' => 'Probabilités et statistiques pour des situations concrètes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        '180 km en 3 h correspondent à :',
                        '60 km/h',
                        '30 km/h',
                        '90 km/h',
                        '540 km/h',
                        'La vitesse moyenne est 180/3=60 km/h.'
                    ),
                    $makeQuestion(
                        '25 % de 80 vaut :',
                        '20',
                        '10',
                        '25',
                        '40',
                        '0,25×80=20.'
                    ),
                    $makeQuestion(
                        'Un capital de 1000 € à 5 % simple produit :',
                        '50 €',
                        '5 €',
                        '100 €',
                        '1050 €',
                        '1000×0,05=50.'
                    ),
                    $makeQuestion(
                        'Une recette de 3000 € et des coûts de 1800 € donnent un bénéfice de :',
                        '1200 €',
                        '4800 €',
                        '1000 €',
                        '1800 €',
                        'Bénéfice=recettes-coûts.'
                    ),
                    $makeQuestion(
                        'L\'aire d\'un rectangle 8×5 vaut :',
                        '40',
                        '13',
                        '26',
                        '80',
                        'Aire=8×5=40.'
                    ),
                    $makeQuestion(
                        'Un volume 2×3×4 vaut :',
                        '24',
                        '9',
                        '12',
                        '18',
                        'Volume=2×3×4=24.'
                    ),
                    $makeQuestion(
                        'Dans une optimisation, une contrainte :',
                        'Limite les solutions admissibles',
                        'Donne toujours l\'optimum',
                        'Supprime les variables',
                        'Rend le coût nul',
                        'Les contraintes définissent les choix autorisés.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'obtenir 4 sur un dé équilibré est :',
                        '1/6',
                        '1/4',
                        '1/2',
                        '1/3',
                        'Une face sur six correspond au 4.'
                    ),
                    $makeQuestion(
                        'La moyenne de 4,6,8 est :',
                        '6',
                        '5',
                        '7',
                        '18',
                        '(4+6+8)/3=6.'
                    ),
                    $makeQuestion(
                        'Une approximation numérique peut être acceptable si :',
                        'Son erreur reste suffisamment faible pour l\'application',
                        'Elle est toujours exacte',
                        'Elle n\'a pas d\'unité',
                        'Elle n\'est jamais vérifiée',
                        'L\'utilité dépend du niveau de précision requis.'
                    ),
                ],
            ],
            [
                'title' => 'Méthodes numériques et applications scientifiques',
                'description' => 'Approximation, erreurs et calcul scientifique.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        '180 km en 3 h correspondent à :',
                        '60 km/h',
                        '30 km/h',
                        '90 km/h',
                        '540 km/h',
                        'La vitesse moyenne est 180/3=60 km/h.'
                    ),
                    $makeQuestion(
                        '25 % de 80 vaut :',
                        '20',
                        '10',
                        '25',
                        '40',
                        '0,25×80=20.'
                    ),
                    $makeQuestion(
                        'Un capital de 1000 € à 5 % simple produit :',
                        '50 €',
                        '5 €',
                        '100 €',
                        '1050 €',
                        '1000×0,05=50.'
                    ),
                    $makeQuestion(
                        'Une recette de 3000 € et des coûts de 1800 € donnent un bénéfice de :',
                        '1200 €',
                        '4800 €',
                        '1000 €',
                        '1800 €',
                        'Bénéfice=recettes-coûts.'
                    ),
                    $makeQuestion(
                        'L\'aire d\'un rectangle 8×5 vaut :',
                        '40',
                        '13',
                        '26',
                        '80',
                        'Aire=8×5=40.'
                    ),
                    $makeQuestion(
                        'Un volume 2×3×4 vaut :',
                        '24',
                        '9',
                        '12',
                        '18',
                        'Volume=2×3×4=24.'
                    ),
                    $makeQuestion(
                        'Dans une optimisation, une contrainte :',
                        'Limite les solutions admissibles',
                        'Donne toujours l\'optimum',
                        'Supprime les variables',
                        'Rend le coût nul',
                        'Les contraintes définissent les choix autorisés.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'obtenir 4 sur un dé équilibré est :',
                        '1/6',
                        '1/4',
                        '1/2',
                        '1/3',
                        'Une face sur six correspond au 4.'
                    ),
                    $makeQuestion(
                        'La moyenne de 4,6,8 est :',
                        '6',
                        '5',
                        '7',
                        '18',
                        '(4+6+8)/3=6.'
                    ),
                    $makeQuestion(
                        'Une approximation numérique peut être acceptable si :',
                        'Son erreur reste suffisamment faible pour l\'application',
                        'Elle est toujours exacte',
                        'Elle n\'a pas d\'unité',
                        'Elle n\'est jamais vérifiée',
                        'L\'utilité dépend du niveau de précision requis.'
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
