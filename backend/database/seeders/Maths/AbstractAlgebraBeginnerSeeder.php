<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AbstractAlgebraBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'abstract-algebra')->firstOrFail();

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
                'title' => 'Structures et lois de composition',
                'description' => 'Lois internes, associativité, commutativité et neutres.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une loi de composition interne doit :',
                        'Rester dans l\'ensemble',
                        'Être toujours commutative',
                        'Être toujours multiplicative',
                        'Être définie une seule fois',
                        'La fermeture signifie que le résultat reste dans l\'ensemble.'
                    ),
                    $makeQuestion(
                        'Une opération est associative si :',
                        '(a*b)*c=a*(b*c)',
                        'a*b=b*a',
                        'a*b=0',
                        'a+b=a-b',
                        'L\'associativité concerne le regroupement des opérations.'
                    ),
                    $makeQuestion(
                        'L\'élément neutre de l\'addition est :',
                        '0',
                        '1',
                        '-1',
                        '2',
                        'Ajouter 0 ne change pas l\'élément.'
                    ),
                    $makeQuestion(
                        'Un groupe possède notamment :',
                        'Un neutre et un inverse pour chaque élément',
                        'Seulement une addition',
                        'Uniquement deux éléments',
                        'Une distance',
                        'Ce sont des axiomes essentiels avec associativité et fermeture.'
                    ),
                    $makeQuestion(
                        'Z avec l\'addition est :',
                        'Un groupe abélien',
                        'Un corps',
                        'Un groupe multiplicatif',
                        'Un ensemble vide',
                        'Tous les entiers ont un opposé dans Z et l\'addition est commutative.'
                    ),
                    $makeQuestion(
                        'Un sous-groupe doit contenir :',
                        'L\'élément neutre',
                        'Aucun inverse',
                        'Plus d\'éléments que le groupe',
                        'Seulement des éléments positifs',
                        'Le neutre est indispensable à toute structure de groupe.'
                    ),
                    $makeQuestion(
                        'Un groupe cyclique est engendré par :',
                        'Un seul élément',
                        'Deux opérations',
                        'Aucun élément',
                        'Une matrice',
                        'Les multiples ou puissances d\'un générateur parcourent le groupe.'
                    ),
                    $makeQuestion(
                        'Un homomorphisme doit :',
                        'Préserver l\'opération',
                        'Inverser tous les éléments',
                        'Être constant',
                        'Supprimer le neutre',
                        'Il vérifie une identité compatible avec les lois des deux groupes.'
                    ),
                    $makeQuestion(
                        'Dans un anneau, la distributivité donne :',
                        'a(b+c)=ab+ac',
                        'a(b+c)=a+b+c',
                        'a(b+c)=abc',
                        'a(b+c)=a+b-c',
                        'La multiplication distribue sur l\'addition.'
                    ),
                    $makeQuestion(
                        'Modulo 5, 17 est congru à :',
                        '2',
                        '3',
                        '4',
                        '1',
                        'Le reste de 17 par 5 est 2.'
                    ),
                ],
            ],
            [
                'title' => 'Groupes et axiomes',
                'description' => 'Définition et exemples de groupes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une loi de composition interne doit :',
                        'Rester dans l\'ensemble',
                        'Être toujours commutative',
                        'Être toujours multiplicative',
                        'Être définie une seule fois',
                        'La fermeture signifie que le résultat reste dans l\'ensemble.'
                    ),
                    $makeQuestion(
                        'Une opération est associative si :',
                        '(a*b)*c=a*(b*c)',
                        'a*b=b*a',
                        'a*b=0',
                        'a+b=a-b',
                        'L\'associativité concerne le regroupement des opérations.'
                    ),
                    $makeQuestion(
                        'L\'élément neutre de l\'addition est :',
                        '0',
                        '1',
                        '-1',
                        '2',
                        'Ajouter 0 ne change pas l\'élément.'
                    ),
                    $makeQuestion(
                        'Un groupe possède notamment :',
                        'Un neutre et un inverse pour chaque élément',
                        'Seulement une addition',
                        'Uniquement deux éléments',
                        'Une distance',
                        'Ce sont des axiomes essentiels avec associativité et fermeture.'
                    ),
                    $makeQuestion(
                        'Z avec l\'addition est :',
                        'Un groupe abélien',
                        'Un corps',
                        'Un groupe multiplicatif',
                        'Un ensemble vide',
                        'Tous les entiers ont un opposé dans Z et l\'addition est commutative.'
                    ),
                    $makeQuestion(
                        'Un sous-groupe doit contenir :',
                        'L\'élément neutre',
                        'Aucun inverse',
                        'Plus d\'éléments que le groupe',
                        'Seulement des éléments positifs',
                        'Le neutre est indispensable à toute structure de groupe.'
                    ),
                    $makeQuestion(
                        'Un groupe cyclique est engendré par :',
                        'Un seul élément',
                        'Deux opérations',
                        'Aucun élément',
                        'Une matrice',
                        'Les multiples ou puissances d\'un générateur parcourent le groupe.'
                    ),
                    $makeQuestion(
                        'Un homomorphisme doit :',
                        'Préserver l\'opération',
                        'Inverser tous les éléments',
                        'Être constant',
                        'Supprimer le neutre',
                        'Il vérifie une identité compatible avec les lois des deux groupes.'
                    ),
                    $makeQuestion(
                        'Dans un anneau, la distributivité donne :',
                        'a(b+c)=ab+ac',
                        'a(b+c)=a+b+c',
                        'a(b+c)=abc',
                        'a(b+c)=a+b-c',
                        'La multiplication distribue sur l\'addition.'
                    ),
                    $makeQuestion(
                        'Modulo 5, 17 est congru à :',
                        '2',
                        '3',
                        '4',
                        '1',
                        'Le reste de 17 par 5 est 2.'
                    ),
                ],
            ],
            [
                'title' => 'Sous-groupes',
                'description' => 'Reconnaître des sous-groupes élémentaires.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une loi de composition interne doit :',
                        'Rester dans l\'ensemble',
                        'Être toujours commutative',
                        'Être toujours multiplicative',
                        'Être définie une seule fois',
                        'La fermeture signifie que le résultat reste dans l\'ensemble.'
                    ),
                    $makeQuestion(
                        'Une opération est associative si :',
                        '(a*b)*c=a*(b*c)',
                        'a*b=b*a',
                        'a*b=0',
                        'a+b=a-b',
                        'L\'associativité concerne le regroupement des opérations.'
                    ),
                    $makeQuestion(
                        'L\'élément neutre de l\'addition est :',
                        '0',
                        '1',
                        '-1',
                        '2',
                        'Ajouter 0 ne change pas l\'élément.'
                    ),
                    $makeQuestion(
                        'Un groupe possède notamment :',
                        'Un neutre et un inverse pour chaque élément',
                        'Seulement une addition',
                        'Uniquement deux éléments',
                        'Une distance',
                        'Ce sont des axiomes essentiels avec associativité et fermeture.'
                    ),
                    $makeQuestion(
                        'Z avec l\'addition est :',
                        'Un groupe abélien',
                        'Un corps',
                        'Un groupe multiplicatif',
                        'Un ensemble vide',
                        'Tous les entiers ont un opposé dans Z et l\'addition est commutative.'
                    ),
                    $makeQuestion(
                        'Un sous-groupe doit contenir :',
                        'L\'élément neutre',
                        'Aucun inverse',
                        'Plus d\'éléments que le groupe',
                        'Seulement des éléments positifs',
                        'Le neutre est indispensable à toute structure de groupe.'
                    ),
                    $makeQuestion(
                        'Un groupe cyclique est engendré par :',
                        'Un seul élément',
                        'Deux opérations',
                        'Aucun élément',
                        'Une matrice',
                        'Les multiples ou puissances d\'un générateur parcourent le groupe.'
                    ),
                    $makeQuestion(
                        'Un homomorphisme doit :',
                        'Préserver l\'opération',
                        'Inverser tous les éléments',
                        'Être constant',
                        'Supprimer le neutre',
                        'Il vérifie une identité compatible avec les lois des deux groupes.'
                    ),
                    $makeQuestion(
                        'Dans un anneau, la distributivité donne :',
                        'a(b+c)=ab+ac',
                        'a(b+c)=a+b+c',
                        'a(b+c)=abc',
                        'a(b+c)=a+b-c',
                        'La multiplication distribue sur l\'addition.'
                    ),
                    $makeQuestion(
                        'Modulo 5, 17 est congru à :',
                        '2',
                        '3',
                        '4',
                        '1',
                        'Le reste de 17 par 5 est 2.'
                    ),
                ],
            ],
            [
                'title' => 'Groupes cycliques et ordre',
                'description' => 'Générateurs et ordre d\'un élément.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une loi de composition interne doit :',
                        'Rester dans l\'ensemble',
                        'Être toujours commutative',
                        'Être toujours multiplicative',
                        'Être définie une seule fois',
                        'La fermeture signifie que le résultat reste dans l\'ensemble.'
                    ),
                    $makeQuestion(
                        'Une opération est associative si :',
                        '(a*b)*c=a*(b*c)',
                        'a*b=b*a',
                        'a*b=0',
                        'a+b=a-b',
                        'L\'associativité concerne le regroupement des opérations.'
                    ),
                    $makeQuestion(
                        'L\'élément neutre de l\'addition est :',
                        '0',
                        '1',
                        '-1',
                        '2',
                        'Ajouter 0 ne change pas l\'élément.'
                    ),
                    $makeQuestion(
                        'Un groupe possède notamment :',
                        'Un neutre et un inverse pour chaque élément',
                        'Seulement une addition',
                        'Uniquement deux éléments',
                        'Une distance',
                        'Ce sont des axiomes essentiels avec associativité et fermeture.'
                    ),
                    $makeQuestion(
                        'Z avec l\'addition est :',
                        'Un groupe abélien',
                        'Un corps',
                        'Un groupe multiplicatif',
                        'Un ensemble vide',
                        'Tous les entiers ont un opposé dans Z et l\'addition est commutative.'
                    ),
                    $makeQuestion(
                        'Un sous-groupe doit contenir :',
                        'L\'élément neutre',
                        'Aucun inverse',
                        'Plus d\'éléments que le groupe',
                        'Seulement des éléments positifs',
                        'Le neutre est indispensable à toute structure de groupe.'
                    ),
                    $makeQuestion(
                        'Un groupe cyclique est engendré par :',
                        'Un seul élément',
                        'Deux opérations',
                        'Aucun élément',
                        'Une matrice',
                        'Les multiples ou puissances d\'un générateur parcourent le groupe.'
                    ),
                    $makeQuestion(
                        'Un homomorphisme doit :',
                        'Préserver l\'opération',
                        'Inverser tous les éléments',
                        'Être constant',
                        'Supprimer le neutre',
                        'Il vérifie une identité compatible avec les lois des deux groupes.'
                    ),
                    $makeQuestion(
                        'Dans un anneau, la distributivité donne :',
                        'a(b+c)=ab+ac',
                        'a(b+c)=a+b+c',
                        'a(b+c)=abc',
                        'a(b+c)=a+b-c',
                        'La multiplication distribue sur l\'addition.'
                    ),
                    $makeQuestion(
                        'Modulo 5, 17 est congru à :',
                        '2',
                        '3',
                        '4',
                        '1',
                        'Le reste de 17 par 5 est 2.'
                    ),
                ],
            ],
            [
                'title' => 'Morphismes et isomorphismes',
                'description' => 'Homomorphismes, noyau et isomorphisme.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une loi de composition interne doit :',
                        'Rester dans l\'ensemble',
                        'Être toujours commutative',
                        'Être toujours multiplicative',
                        'Être définie une seule fois',
                        'La fermeture signifie que le résultat reste dans l\'ensemble.'
                    ),
                    $makeQuestion(
                        'Une opération est associative si :',
                        '(a*b)*c=a*(b*c)',
                        'a*b=b*a',
                        'a*b=0',
                        'a+b=a-b',
                        'L\'associativité concerne le regroupement des opérations.'
                    ),
                    $makeQuestion(
                        'L\'élément neutre de l\'addition est :',
                        '0',
                        '1',
                        '-1',
                        '2',
                        'Ajouter 0 ne change pas l\'élément.'
                    ),
                    $makeQuestion(
                        'Un groupe possède notamment :',
                        'Un neutre et un inverse pour chaque élément',
                        'Seulement une addition',
                        'Uniquement deux éléments',
                        'Une distance',
                        'Ce sont des axiomes essentiels avec associativité et fermeture.'
                    ),
                    $makeQuestion(
                        'Z avec l\'addition est :',
                        'Un groupe abélien',
                        'Un corps',
                        'Un groupe multiplicatif',
                        'Un ensemble vide',
                        'Tous les entiers ont un opposé dans Z et l\'addition est commutative.'
                    ),
                    $makeQuestion(
                        'Un sous-groupe doit contenir :',
                        'L\'élément neutre',
                        'Aucun inverse',
                        'Plus d\'éléments que le groupe',
                        'Seulement des éléments positifs',
                        'Le neutre est indispensable à toute structure de groupe.'
                    ),
                    $makeQuestion(
                        'Un groupe cyclique est engendré par :',
                        'Un seul élément',
                        'Deux opérations',
                        'Aucun élément',
                        'Une matrice',
                        'Les multiples ou puissances d\'un générateur parcourent le groupe.'
                    ),
                    $makeQuestion(
                        'Un homomorphisme doit :',
                        'Préserver l\'opération',
                        'Inverser tous les éléments',
                        'Être constant',
                        'Supprimer le neutre',
                        'Il vérifie une identité compatible avec les lois des deux groupes.'
                    ),
                    $makeQuestion(
                        'Dans un anneau, la distributivité donne :',
                        'a(b+c)=ab+ac',
                        'a(b+c)=a+b+c',
                        'a(b+c)=abc',
                        'a(b+c)=a+b-c',
                        'La multiplication distribue sur l\'addition.'
                    ),
                    $makeQuestion(
                        'Modulo 5, 17 est congru à :',
                        '2',
                        '3',
                        '4',
                        '1',
                        'Le reste de 17 par 5 est 2.'
                    ),
                ],
            ],
            [
                'title' => 'Anneaux',
                'description' => 'Addition, multiplication et distributivité.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une loi de composition interne doit :',
                        'Rester dans l\'ensemble',
                        'Être toujours commutative',
                        'Être toujours multiplicative',
                        'Être définie une seule fois',
                        'La fermeture signifie que le résultat reste dans l\'ensemble.'
                    ),
                    $makeQuestion(
                        'Une opération est associative si :',
                        '(a*b)*c=a*(b*c)',
                        'a*b=b*a',
                        'a*b=0',
                        'a+b=a-b',
                        'L\'associativité concerne le regroupement des opérations.'
                    ),
                    $makeQuestion(
                        'L\'élément neutre de l\'addition est :',
                        '0',
                        '1',
                        '-1',
                        '2',
                        'Ajouter 0 ne change pas l\'élément.'
                    ),
                    $makeQuestion(
                        'Un groupe possède notamment :',
                        'Un neutre et un inverse pour chaque élément',
                        'Seulement une addition',
                        'Uniquement deux éléments',
                        'Une distance',
                        'Ce sont des axiomes essentiels avec associativité et fermeture.'
                    ),
                    $makeQuestion(
                        'Z avec l\'addition est :',
                        'Un groupe abélien',
                        'Un corps',
                        'Un groupe multiplicatif',
                        'Un ensemble vide',
                        'Tous les entiers ont un opposé dans Z et l\'addition est commutative.'
                    ),
                    $makeQuestion(
                        'Un sous-groupe doit contenir :',
                        'L\'élément neutre',
                        'Aucun inverse',
                        'Plus d\'éléments que le groupe',
                        'Seulement des éléments positifs',
                        'Le neutre est indispensable à toute structure de groupe.'
                    ),
                    $makeQuestion(
                        'Un groupe cyclique est engendré par :',
                        'Un seul élément',
                        'Deux opérations',
                        'Aucun élément',
                        'Une matrice',
                        'Les multiples ou puissances d\'un générateur parcourent le groupe.'
                    ),
                    $makeQuestion(
                        'Un homomorphisme doit :',
                        'Préserver l\'opération',
                        'Inverser tous les éléments',
                        'Être constant',
                        'Supprimer le neutre',
                        'Il vérifie une identité compatible avec les lois des deux groupes.'
                    ),
                    $makeQuestion(
                        'Dans un anneau, la distributivité donne :',
                        'a(b+c)=ab+ac',
                        'a(b+c)=a+b+c',
                        'a(b+c)=abc',
                        'a(b+c)=a+b-c',
                        'La multiplication distribue sur l\'addition.'
                    ),
                    $makeQuestion(
                        'Modulo 5, 17 est congru à :',
                        '2',
                        '3',
                        '4',
                        '1',
                        'Le reste de 17 par 5 est 2.'
                    ),
                ],
            ],
            [
                'title' => 'Corps et arithmétique modulaire simple',
                'description' => 'Corps, inverses et calculs modulo.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une loi de composition interne doit :',
                        'Rester dans l\'ensemble',
                        'Être toujours commutative',
                        'Être toujours multiplicative',
                        'Être définie une seule fois',
                        'La fermeture signifie que le résultat reste dans l\'ensemble.'
                    ),
                    $makeQuestion(
                        'Une opération est associative si :',
                        '(a*b)*c=a*(b*c)',
                        'a*b=b*a',
                        'a*b=0',
                        'a+b=a-b',
                        'L\'associativité concerne le regroupement des opérations.'
                    ),
                    $makeQuestion(
                        'L\'élément neutre de l\'addition est :',
                        '0',
                        '1',
                        '-1',
                        '2',
                        'Ajouter 0 ne change pas l\'élément.'
                    ),
                    $makeQuestion(
                        'Un groupe possède notamment :',
                        'Un neutre et un inverse pour chaque élément',
                        'Seulement une addition',
                        'Uniquement deux éléments',
                        'Une distance',
                        'Ce sont des axiomes essentiels avec associativité et fermeture.'
                    ),
                    $makeQuestion(
                        'Z avec l\'addition est :',
                        'Un groupe abélien',
                        'Un corps',
                        'Un groupe multiplicatif',
                        'Un ensemble vide',
                        'Tous les entiers ont un opposé dans Z et l\'addition est commutative.'
                    ),
                    $makeQuestion(
                        'Un sous-groupe doit contenir :',
                        'L\'élément neutre',
                        'Aucun inverse',
                        'Plus d\'éléments que le groupe',
                        'Seulement des éléments positifs',
                        'Le neutre est indispensable à toute structure de groupe.'
                    ),
                    $makeQuestion(
                        'Un groupe cyclique est engendré par :',
                        'Un seul élément',
                        'Deux opérations',
                        'Aucun élément',
                        'Une matrice',
                        'Les multiples ou puissances d\'un générateur parcourent le groupe.'
                    ),
                    $makeQuestion(
                        'Un homomorphisme doit :',
                        'Préserver l\'opération',
                        'Inverser tous les éléments',
                        'Être constant',
                        'Supprimer le neutre',
                        'Il vérifie une identité compatible avec les lois des deux groupes.'
                    ),
                    $makeQuestion(
                        'Dans un anneau, la distributivité donne :',
                        'a(b+c)=ab+ac',
                        'a(b+c)=a+b+c',
                        'a(b+c)=abc',
                        'a(b+c)=a+b-c',
                        'La multiplication distribue sur l\'addition.'
                    ),
                    $makeQuestion(
                        'Modulo 5, 17 est congru à :',
                        '2',
                        '3',
                        '4',
                        '1',
                        'Le reste de 17 par 5 est 2.'
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
