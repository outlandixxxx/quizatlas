<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ComplexAnalysisBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'complex-analysis')->firstOrFail();

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
                'title' => 'Nombres complexes : notions de base',
                'description' => 'Forme cartésienne, parties réelle et imaginaire.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Dans z=3+5i, la partie réelle vaut :',
                        '3',
                        '5',
                        '8',
                        '-3',
                        'La partie réelle est le coefficient sans i.'
                    ),
                    $makeQuestion(
                        'i² vaut :',
                        '-1',
                        '1',
                        '0',
                        'i',
                        'C\'est la définition de l\'unité imaginaire.'
                    ),
                    $makeQuestion(
                        '(3+2i)+(1-5i) vaut :',
                        '4-3i',
                        '2+7i',
                        '4+7i',
                        '2-3i',
                        'On additionne séparément parties réelle et imaginaire.'
                    ),
                    $makeQuestion(
                        '(1+i)(1-i) vaut :',
                        '2',
                        '0',
                        '1',
                        '-2',
                        'Le produit vaut 1-i²=2.'
                    ),
                    $makeQuestion(
                        'Le conjugué de 3+4i est :',
                        '3-4i',
                        '-3+4i',
                        '3+4i',
                        '4+3i',
                        'Le signe de la partie imaginaire est inversé.'
                    ),
                    $makeQuestion(
                        'Le module de 3+4i vaut :',
                        '5',
                        '7',
                        '12',
                        '25',
                        '√(3²+4²)=5.'
                    ),
                    $makeQuestion(
                        'Un argument de 1+i est :',
                        'π/4',
                        'π/2',
                        'π',
                        '0',
                        'Le point (1,1) fait un angle de 45° avec l\'axe réel.'
                    ),
                    $makeQuestion(
                        'La forme polaire générale est :',
                        'r(cosθ+i sinθ)',
                        'r+θi',
                        'r(cosθ-sinθ)',
                        'θ(cosr+i sinr)',
                        'C\'est la représentation trigonométrique standard.'
                    ),
                    $makeQuestion(
                        'i⁴ vaut :',
                        '1',
                        '-1',
                        'i',
                        '-i',
                        'Les puissances de i se répètent avec une période de quatre.'
                    ),
                    $makeQuestion(
                        '|z|=2 représente :',
                        'Un cercle de centre 0 et de rayon 2',
                        'Une droite',
                        'Un point unique',
                        'L\'axe réel',
                        'Le module fixe la distance à l\'origine.'
                    ),
                ],
            ],
            [
                'title' => 'Addition, soustraction et multiplication',
                'description' => 'Opérations élémentaires sur les complexes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Dans z=3+5i, la partie réelle vaut :',
                        '3',
                        '5',
                        '8',
                        '-3',
                        'La partie réelle est le coefficient sans i.'
                    ),
                    $makeQuestion(
                        'i² vaut :',
                        '-1',
                        '1',
                        '0',
                        'i',
                        'C\'est la définition de l\'unité imaginaire.'
                    ),
                    $makeQuestion(
                        '(3+2i)+(1-5i) vaut :',
                        '4-3i',
                        '2+7i',
                        '4+7i',
                        '2-3i',
                        'On additionne séparément parties réelle et imaginaire.'
                    ),
                    $makeQuestion(
                        '(1+i)(1-i) vaut :',
                        '2',
                        '0',
                        '1',
                        '-2',
                        'Le produit vaut 1-i²=2.'
                    ),
                    $makeQuestion(
                        'Le conjugué de 3+4i est :',
                        '3-4i',
                        '-3+4i',
                        '3+4i',
                        '4+3i',
                        'Le signe de la partie imaginaire est inversé.'
                    ),
                    $makeQuestion(
                        'Le module de 3+4i vaut :',
                        '5',
                        '7',
                        '12',
                        '25',
                        '√(3²+4²)=5.'
                    ),
                    $makeQuestion(
                        'Un argument de 1+i est :',
                        'π/4',
                        'π/2',
                        'π',
                        '0',
                        'Le point (1,1) fait un angle de 45° avec l\'axe réel.'
                    ),
                    $makeQuestion(
                        'La forme polaire générale est :',
                        'r(cosθ+i sinθ)',
                        'r+θi',
                        'r(cosθ-sinθ)',
                        'θ(cosr+i sinr)',
                        'C\'est la représentation trigonométrique standard.'
                    ),
                    $makeQuestion(
                        'i⁴ vaut :',
                        '1',
                        '-1',
                        'i',
                        '-i',
                        'Les puissances de i se répètent avec une période de quatre.'
                    ),
                    $makeQuestion(
                        '|z|=2 représente :',
                        'Un cercle de centre 0 et de rayon 2',
                        'Une droite',
                        'Un point unique',
                        'L\'axe réel',
                        'Le module fixe la distance à l\'origine.'
                    ),
                ],
            ],
            [
                'title' => 'Conjugué et module',
                'description' => 'Calcul du module et du conjugué.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Dans z=3+5i, la partie réelle vaut :',
                        '3',
                        '5',
                        '8',
                        '-3',
                        'La partie réelle est le coefficient sans i.'
                    ),
                    $makeQuestion(
                        'i² vaut :',
                        '-1',
                        '1',
                        '0',
                        'i',
                        'C\'est la définition de l\'unité imaginaire.'
                    ),
                    $makeQuestion(
                        '(3+2i)+(1-5i) vaut :',
                        '4-3i',
                        '2+7i',
                        '4+7i',
                        '2-3i',
                        'On additionne séparément parties réelle et imaginaire.'
                    ),
                    $makeQuestion(
                        '(1+i)(1-i) vaut :',
                        '2',
                        '0',
                        '1',
                        '-2',
                        'Le produit vaut 1-i²=2.'
                    ),
                    $makeQuestion(
                        'Le conjugué de 3+4i est :',
                        '3-4i',
                        '-3+4i',
                        '3+4i',
                        '4+3i',
                        'Le signe de la partie imaginaire est inversé.'
                    ),
                    $makeQuestion(
                        'Le module de 3+4i vaut :',
                        '5',
                        '7',
                        '12',
                        '25',
                        '√(3²+4²)=5.'
                    ),
                    $makeQuestion(
                        'Un argument de 1+i est :',
                        'π/4',
                        'π/2',
                        'π',
                        '0',
                        'Le point (1,1) fait un angle de 45° avec l\'axe réel.'
                    ),
                    $makeQuestion(
                        'La forme polaire générale est :',
                        'r(cosθ+i sinθ)',
                        'r+θi',
                        'r(cosθ-sinθ)',
                        'θ(cosr+i sinr)',
                        'C\'est la représentation trigonométrique standard.'
                    ),
                    $makeQuestion(
                        'i⁴ vaut :',
                        '1',
                        '-1',
                        'i',
                        '-i',
                        'Les puissances de i se répètent avec une période de quatre.'
                    ),
                    $makeQuestion(
                        '|z|=2 représente :',
                        'Un cercle de centre 0 et de rayon 2',
                        'Une droite',
                        'Un point unique',
                        'L\'axe réel',
                        'Le module fixe la distance à l\'origine.'
                    ),
                ],
            ],
            [
                'title' => 'Argument et forme polaire',
                'description' => 'Arguments et représentation polaire.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Dans z=3+5i, la partie réelle vaut :',
                        '3',
                        '5',
                        '8',
                        '-3',
                        'La partie réelle est le coefficient sans i.'
                    ),
                    $makeQuestion(
                        'i² vaut :',
                        '-1',
                        '1',
                        '0',
                        'i',
                        'C\'est la définition de l\'unité imaginaire.'
                    ),
                    $makeQuestion(
                        '(3+2i)+(1-5i) vaut :',
                        '4-3i',
                        '2+7i',
                        '4+7i',
                        '2-3i',
                        'On additionne séparément parties réelle et imaginaire.'
                    ),
                    $makeQuestion(
                        '(1+i)(1-i) vaut :',
                        '2',
                        '0',
                        '1',
                        '-2',
                        'Le produit vaut 1-i²=2.'
                    ),
                    $makeQuestion(
                        'Le conjugué de 3+4i est :',
                        '3-4i',
                        '-3+4i',
                        '3+4i',
                        '4+3i',
                        'Le signe de la partie imaginaire est inversé.'
                    ),
                    $makeQuestion(
                        'Le module de 3+4i vaut :',
                        '5',
                        '7',
                        '12',
                        '25',
                        '√(3²+4²)=5.'
                    ),
                    $makeQuestion(
                        'Un argument de 1+i est :',
                        'π/4',
                        'π/2',
                        'π',
                        '0',
                        'Le point (1,1) fait un angle de 45° avec l\'axe réel.'
                    ),
                    $makeQuestion(
                        'La forme polaire générale est :',
                        'r(cosθ+i sinθ)',
                        'r+θi',
                        'r(cosθ-sinθ)',
                        'θ(cosr+i sinr)',
                        'C\'est la représentation trigonométrique standard.'
                    ),
                    $makeQuestion(
                        'i⁴ vaut :',
                        '1',
                        '-1',
                        'i',
                        '-i',
                        'Les puissances de i se répètent avec une période de quatre.'
                    ),
                    $makeQuestion(
                        '|z|=2 représente :',
                        'Un cercle de centre 0 et de rayon 2',
                        'Une droite',
                        'Un point unique',
                        'L\'axe réel',
                        'Le module fixe la distance à l\'origine.'
                    ),
                ],
            ],
            [
                'title' => 'Puissances et racines simples',
                'description' => 'Puissances de i et racines élémentaires.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Dans z=3+5i, la partie réelle vaut :',
                        '3',
                        '5',
                        '8',
                        '-3',
                        'La partie réelle est le coefficient sans i.'
                    ),
                    $makeQuestion(
                        'i² vaut :',
                        '-1',
                        '1',
                        '0',
                        'i',
                        'C\'est la définition de l\'unité imaginaire.'
                    ),
                    $makeQuestion(
                        '(3+2i)+(1-5i) vaut :',
                        '4-3i',
                        '2+7i',
                        '4+7i',
                        '2-3i',
                        'On additionne séparément parties réelle et imaginaire.'
                    ),
                    $makeQuestion(
                        '(1+i)(1-i) vaut :',
                        '2',
                        '0',
                        '1',
                        '-2',
                        'Le produit vaut 1-i²=2.'
                    ),
                    $makeQuestion(
                        'Le conjugué de 3+4i est :',
                        '3-4i',
                        '-3+4i',
                        '3+4i',
                        '4+3i',
                        'Le signe de la partie imaginaire est inversé.'
                    ),
                    $makeQuestion(
                        'Le module de 3+4i vaut :',
                        '5',
                        '7',
                        '12',
                        '25',
                        '√(3²+4²)=5.'
                    ),
                    $makeQuestion(
                        'Un argument de 1+i est :',
                        'π/4',
                        'π/2',
                        'π',
                        '0',
                        'Le point (1,1) fait un angle de 45° avec l\'axe réel.'
                    ),
                    $makeQuestion(
                        'La forme polaire générale est :',
                        'r(cosθ+i sinθ)',
                        'r+θi',
                        'r(cosθ-sinθ)',
                        'θ(cosr+i sinr)',
                        'C\'est la représentation trigonométrique standard.'
                    ),
                    $makeQuestion(
                        'i⁴ vaut :',
                        '1',
                        '-1',
                        'i',
                        '-i',
                        'Les puissances de i se répètent avec une période de quatre.'
                    ),
                    $makeQuestion(
                        '|z|=2 représente :',
                        'Un cercle de centre 0 et de rayon 2',
                        'Une droite',
                        'Un point unique',
                        'L\'axe réel',
                        'Le module fixe la distance à l\'origine.'
                    ),
                ],
            ],
            [
                'title' => 'Lieux géométriques dans le plan complexe',
                'description' => 'Cercles, droites et interprétation géométrique.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Dans z=3+5i, la partie réelle vaut :',
                        '3',
                        '5',
                        '8',
                        '-3',
                        'La partie réelle est le coefficient sans i.'
                    ),
                    $makeQuestion(
                        'i² vaut :',
                        '-1',
                        '1',
                        '0',
                        'i',
                        'C\'est la définition de l\'unité imaginaire.'
                    ),
                    $makeQuestion(
                        '(3+2i)+(1-5i) vaut :',
                        '4-3i',
                        '2+7i',
                        '4+7i',
                        '2-3i',
                        'On additionne séparément parties réelle et imaginaire.'
                    ),
                    $makeQuestion(
                        '(1+i)(1-i) vaut :',
                        '2',
                        '0',
                        '1',
                        '-2',
                        'Le produit vaut 1-i²=2.'
                    ),
                    $makeQuestion(
                        'Le conjugué de 3+4i est :',
                        '3-4i',
                        '-3+4i',
                        '3+4i',
                        '4+3i',
                        'Le signe de la partie imaginaire est inversé.'
                    ),
                    $makeQuestion(
                        'Le module de 3+4i vaut :',
                        '5',
                        '7',
                        '12',
                        '25',
                        '√(3²+4²)=5.'
                    ),
                    $makeQuestion(
                        'Un argument de 1+i est :',
                        'π/4',
                        'π/2',
                        'π',
                        '0',
                        'Le point (1,1) fait un angle de 45° avec l\'axe réel.'
                    ),
                    $makeQuestion(
                        'La forme polaire générale est :',
                        'r(cosθ+i sinθ)',
                        'r+θi',
                        'r(cosθ-sinθ)',
                        'θ(cosr+i sinr)',
                        'C\'est la représentation trigonométrique standard.'
                    ),
                    $makeQuestion(
                        'i⁴ vaut :',
                        '1',
                        '-1',
                        'i',
                        '-i',
                        'Les puissances de i se répètent avec une période de quatre.'
                    ),
                    $makeQuestion(
                        '|z|=2 représente :',
                        'Un cercle de centre 0 et de rayon 2',
                        'Une droite',
                        'Un point unique',
                        'L\'axe réel',
                        'Le module fixe la distance à l\'origine.'
                    ),
                ],
            ],
            [
                'title' => 'Formes cartésienne et polaire',
                'description' => 'Conversions entre les deux représentations.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Dans z=3+5i, la partie réelle vaut :',
                        '3',
                        '5',
                        '8',
                        '-3',
                        'La partie réelle est le coefficient sans i.'
                    ),
                    $makeQuestion(
                        'i² vaut :',
                        '-1',
                        '1',
                        '0',
                        'i',
                        'C\'est la définition de l\'unité imaginaire.'
                    ),
                    $makeQuestion(
                        '(3+2i)+(1-5i) vaut :',
                        '4-3i',
                        '2+7i',
                        '4+7i',
                        '2-3i',
                        'On additionne séparément parties réelle et imaginaire.'
                    ),
                    $makeQuestion(
                        '(1+i)(1-i) vaut :',
                        '2',
                        '0',
                        '1',
                        '-2',
                        'Le produit vaut 1-i²=2.'
                    ),
                    $makeQuestion(
                        'Le conjugué de 3+4i est :',
                        '3-4i',
                        '-3+4i',
                        '3+4i',
                        '4+3i',
                        'Le signe de la partie imaginaire est inversé.'
                    ),
                    $makeQuestion(
                        'Le module de 3+4i vaut :',
                        '5',
                        '7',
                        '12',
                        '25',
                        '√(3²+4²)=5.'
                    ),
                    $makeQuestion(
                        'Un argument de 1+i est :',
                        'π/4',
                        'π/2',
                        'π',
                        '0',
                        'Le point (1,1) fait un angle de 45° avec l\'axe réel.'
                    ),
                    $makeQuestion(
                        'La forme polaire générale est :',
                        'r(cosθ+i sinθ)',
                        'r+θi',
                        'r(cosθ-sinθ)',
                        'θ(cosr+i sinr)',
                        'C\'est la représentation trigonométrique standard.'
                    ),
                    $makeQuestion(
                        'i⁴ vaut :',
                        '1',
                        '-1',
                        'i',
                        '-i',
                        'Les puissances de i se répètent avec une période de quatre.'
                    ),
                    $makeQuestion(
                        '|z|=2 représente :',
                        'Un cercle de centre 0 et de rayon 2',
                        'Une droite',
                        'Un point unique',
                        'L\'axe réel',
                        'Le module fixe la distance à l\'origine.'
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
