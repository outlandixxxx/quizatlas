<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AlgebraBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'algebra')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction aux expressions algébriques',
                'description' => 'Découvrez les variables, constantes, coefficients et expressions algébriques simples.',
                'questions' => [
                    [
                        'question' => 'Dans l’expression 3x + 5, quelle est la variable ?',
                        'choices' => [
                            ['choice_text' => 'x', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '3x', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans 3x + 5, x est la variable, car sa valeur peut changer.'
                    ],
                    [
                        'question' => 'Dans l’expression 7x, quel est le coefficient de x ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient est le nombre qui multiplie la variable. Ici, le coefficient de x est 7.'
                    ],
                    [
                        'question' => 'Quel est le terme constant dans 4x + 9 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => '4x', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme constant est le terme qui ne contient pas de variable. Ici, c’est 9.'
                    ],
                    [
                        'question' => 'Combien de termes contient l’expression 2x + 3y - 5 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trois termes sont 2x, 3y et -5.'
                    ],
                    [
                        'question' => 'Quelle expression représente « un nombre x augmenté de 6 » ?',
                        'choices' => [
                            ['choice_text' => 'x + 6', 'is_correct' => true],
                            ['choice_text' => 'x - 6', 'is_correct' => false],
                            ['choice_text' => '6x', 'is_correct' => false],
                            ['choice_text' => 'x/6', 'is_correct' => false],
                        ],
                        'explanation' => 'Augmenter x de 6 signifie ajouter 6 à x, donc x + 6.'
                    ],
                    [
                        'question' => 'Quelle expression représente « le double de x » ?',
                        'choices' => [
                            ['choice_text' => '2x', 'is_correct' => true],
                            ['choice_text' => 'x + 2', 'is_correct' => false],
                            ['choice_text' => 'x/2', 'is_correct' => false],
                            ['choice_text' => 'x²', 'is_correct' => false],
                        ],
                        'explanation' => 'Le double d’un nombre correspond à sa multiplication par 2 : 2x.'
                    ],
                    [
                        'question' => 'Quelle expression représente « le tiers de x » ?',
                        'choices' => [
                            ['choice_text' => 'x/3', 'is_correct' => true],
                            ['choice_text' => '3x', 'is_correct' => false],
                            ['choice_text' => 'x - 3', 'is_correct' => false],
                            ['choice_text' => 'x + 3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le tiers de x est obtenu en divisant x par 3.'
                    ],
                    [
                        'question' => 'Lesquels sont des termes semblables ?',
                        'choices' => [
                            ['choice_text' => '3x et 7x', 'is_correct' => true],
                            ['choice_text' => '3x et 7y', 'is_correct' => false],
                            ['choice_text' => 'x et x²', 'is_correct' => false],
                            ['choice_text' => '4 et 4x', 'is_correct' => false],
                        ],
                        'explanation' => '3x et 7x contiennent la même variable avec le même exposant. Ils sont donc semblables.'
                    ],
                    [
                        'question' => 'Quel est le coefficient de x dans -5x ?',
                        'choices' => [
                            ['choice_text' => '-5', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => '-x', 'is_correct' => false],
                        ],
                        'explanation' => 'Le signe moins fait partie du coefficient : le coefficient de x est -5.'
                    ],
                    [
                        'question' => 'Quelle expression représente « 4 de moins qu’un nombre x » ?',
                        'choices' => [
                            ['choice_text' => 'x - 4', 'is_correct' => true],
                            ['choice_text' => 'x + 4', 'is_correct' => false],
                            ['choice_text' => '4x', 'is_correct' => false],
                            ['choice_text' => 'x/4', 'is_correct' => false],
                        ],
                        'explanation' => '« 4 de moins que x » signifie soustraire 4 à x.'
                    ],
                ],
            ],

            [
                'title' => 'Réduction et calcul d’expressions',
                'description' => 'Apprenez à regrouper les termes semblables et à calculer des expressions simples.',
                'questions' => [
                    [
                        'question' => 'Réduisez l’expression 3x + 5x.',
                        'choices' => [
                            ['choice_text' => '8x', 'is_correct' => true],
                            ['choice_text' => '15x', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '2x', 'is_correct' => false],
                        ],
                        'explanation' => 'Les termes sont semblables : 3x + 5x = 8x.'
                    ],
                    [
                        'question' => 'Réduisez l’expression 9y - 4y.',
                        'choices' => [
                            ['choice_text' => '5y', 'is_correct' => true],
                            ['choice_text' => '13y', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '36y', 'is_correct' => false],
                        ],
                        'explanation' => '9y - 4y = (9 - 4)y = 5y.'
                    ],
                    [
                        'question' => 'Réduisez l’expression 2a + 3 + 4a.',
                        'choices' => [
                            ['choice_text' => '6a + 3', 'is_correct' => true],
                            ['choice_text' => '9a', 'is_correct' => false],
                            ['choice_text' => '6a', 'is_correct' => false],
                            ['choice_text' => '5a + 3', 'is_correct' => false],
                        ],
                        'explanation' => 'On regroupe 2a et 4a : 2a + 4a = 6a. Le résultat est donc 6a + 3.'
                    ],
                    [
                        'question' => 'Réduisez l’expression 7x - 2 + 3x + 5.',
                        'choices' => [
                            ['choice_text' => '10x + 3', 'is_correct' => true],
                            ['choice_text' => '10x - 7', 'is_correct' => false],
                            ['choice_text' => '4x + 3', 'is_correct' => false],
                            ['choice_text' => '10x + 7', 'is_correct' => false],
                        ],
                        'explanation' => '7x + 3x = 10x et -2 + 5 = 3. Donc l’expression se réduit à 10x + 3.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 2x + 3 lorsque x = 4 ?',
                        'choices' => [
                            ['choice_text' => '11', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'En remplaçant x par 4 : 2 × 4 + 3 = 8 + 3 = 11.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 5y - 2 lorsque y = 3 ?',
                        'choices' => [
                            ['choice_text' => '13', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '17', 'is_correct' => false],
                        ],
                        'explanation' => '5 × 3 - 2 = 15 - 2 = 13.'
                    ],
                    [
                        'question' => 'Réduisez l’expression 4m + 2m - m.',
                        'choices' => [
                            ['choice_text' => '5m', 'is_correct' => true],
                            ['choice_text' => '6m', 'is_correct' => false],
                            ['choice_text' => '7m', 'is_correct' => false],
                            ['choice_text' => '3m', 'is_correct' => false],
                        ],
                        'explanation' => '4m + 2m - m = (4 + 2 - 1)m = 5m.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 3a + 2b lorsque a = 2 et b = 5 ?',
                        'choices' => [
                            ['choice_text' => '16', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => '3 × 2 + 2 × 5 = 6 + 10 = 16.'
                    ],
                    [
                        'question' => 'Réduisez l’expression 8p - 3p + 2p.',
                        'choices' => [
                            ['choice_text' => '7p', 'is_correct' => true],
                            ['choice_text' => '9p', 'is_correct' => false],
                            ['choice_text' => '5p', 'is_correct' => false],
                            ['choice_text' => '13p', 'is_correct' => false],
                        ],
                        'explanation' => '8p - 3p + 2p = (8 - 3 + 2)p = 7p.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de x² lorsque x = 5 ?',
                        'choices' => [
                            ['choice_text' => '25', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'x² = 5² = 25.'
                    ],
                ],
            ],

            [
                'title' => 'Propriétés de l’égalité',
                'description' => 'Comprenez les transformations simples d’une égalité et apprenez à conserver son équilibre.',
                'questions' => [
                    [
                        'question' => 'Si x + 4 = 10, quelle opération permet d’isoler x ?',
                        'choices' => [
                            ['choice_text' => 'Soustraire 4 aux deux membres', 'is_correct' => true],
                            ['choice_text' => 'Ajouter 4 aux deux membres', 'is_correct' => false],
                            ['choice_text' => 'Multiplier les deux membres par 4', 'is_correct' => false],
                            ['choice_text' => 'Diviser les deux membres par 4', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour annuler +4, on soustrait 4 aux deux membres de l’égalité.'
                    ],
                    [
                        'question' => 'Si 3x = 18, comment trouver x ?',
                        'choices' => [
                            ['choice_text' => 'Diviser les deux membres par 3', 'is_correct' => true],
                            ['choice_text' => 'Ajouter 3 aux deux membres', 'is_correct' => false],
                            ['choice_text' => 'Soustraire 3 aux deux membres', 'is_correct' => false],
                            ['choice_text' => 'Multiplier les deux membres par 3', 'is_correct' => false],
                        ],
                        'explanation' => 'On divise les deux membres par 3 pour obtenir x = 18/3.'
                    ],
                    [
                        'question' => 'Quelle propriété est utilisée lorsque l’on ajoute le même nombre aux deux membres d’une équation ?',
                        'choices' => [
                            ['choice_text' => La conservation de l’égalité', 'is_correct' => true],
                            ['choice_text' => La distributivité', 'is_correct' => false],
                            ['choice_text' => La commutativité', 'is_correct' => false],
                            ['choice_text' => La factorisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Ajouter la même quantité aux deux membres conserve la valeur de l’égalité.'
                    ],
                    [
                        'question' => 'Si x - 7 = 12, quelle opération faut-il effectuer des deux côtés ?',
                        'choices' => [
                            ['choice_text' => Ajouter 7', 'is_correct' => true],
                            ['choice_text' => Soustraire 7', 'is_correct' => false],
                            ['choice_text' => Multiplier par 7', 'is_correct' => false],
                            ['choice_text' => Diviser par 7', 'is_correct' => false],
                        ],
                        'explanation' => 'On ajoute 7 aux deux membres pour annuler -7.'
                    ],
                    [
                        'question' => 'Si x/5 = 4, quelle opération permet d’obtenir x ?',
                        'choices' => [
                            ['choice_text' => Multiplier les deux membres par 5', 'is_correct' => true],
                            ['choice_text' => Diviser les deux membres par 5', 'is_correct' => false],
                            ['choice_text' => Ajouter 5 aux deux membres', 'is_correct' => false],
                            ['choice_text' => Soustraire 5 aux deux membres', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour annuler une division par 5, on multiplie les deux membres par 5.'
                    ],
                    [
                        'question' => 'Si 2x + 3 = 11, quelle transformation donne 2x = 8 ?',
                        'choices' => [
                            ['choice_text' => Soustraire 3 aux deux membres', 'is_correct' => true],
                            ['choice_text' => Ajouter 3 aux deux membres', 'is_correct' => false],
                            ['choice_text' => Diviser immédiatement par 3', 'is_correct' => false],
                            ['choice_text' => Multiplier par 3', 'is_correct' => false],
                        ],
                        'explanation' => 'On soustrait 3 aux deux membres : 2x + 3 - 3 = 11 - 3, donc 2x = 8.'
                    ],
                    [
                        'question' => 'Si 5x - 2 = 13, quelle est l’étape suivante après avoir ajouté 2 aux deux membres ?',
                        'choices' => [
                            ['choice_text' => 5x = 15', 'is_correct' => true],
                            ['choice_text' => 5x = 11', 'is_correct' => false],
                            ['choice_text' => 5x = 26', 'is_correct' => false],
                            ['choice_text' => x = 15', 'is_correct' => false],
                        ],
                        'explanation' => '5x - 2 + 2 = 13 + 2, donc 5x = 15.'
                    ],
                    [
                        'question' => 'Quelle règle est correcte pour une équation ?',
                        'choices' => [
                            ['choice_text' => Une même opération peut être effectuée aux deux membres', 'is_correct' => true],
                            ['choice_text' => On peut toujours modifier un seul membre', 'is_correct' => false],
                            ['choice_text' => Il faut toujours multiplier par la variable', 'is_correct' => false],
                            ['choice_text' => Il faut toujours ajouter un nombre positif', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour conserver une égalité, on applique la même opération aux deux membres, avec les conditions habituelles.'
                    ],
                    [
                        'question' => 'Si 4x = 28, quelle valeur de x obtient-on ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                        'explanation' => 'x = 28 ÷ 4 = 7.'
                    ],
                    [
                        'question' => 'Si x + 9 = 15, quelle est la valeur de x ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'x = 15 - 9 = 6.'
                    ],
                ],
            ],

            [
                'title' => 'Équations du premier degré',
                'description' => 'Résolvez des équations simples à une inconnue.',
                'questions' => [
                    [
                        'question' => 'Résolvez l’équation x + 7 = 12.',
                        'choices' => [
                            ['choice_text' => 'x = 5', 'is_correct' => true],
                            ['choice_text' => 'x = 19', 'is_correct' => false],
                            ['choice_text' => 'x = 4', 'is_correct' => false],
                            ['choice_text' => 'x = 6', 'is_correct' => false],
                        ],
                        'explanation' => 'x = 12 - 7 = 5.'
                    ],
                    [
                        'question' => 'Résolvez l’équation x - 8 = 3.',
                        'choices' => [
                            ['choice_text' => 'x = 11', 'is_correct' => true],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                            ['choice_text' => 'x = -5', 'is_correct' => false],
                            ['choice_text' => 'x = 24', 'is_correct' => false],
                        ],
                        'explanation' => 'x = 3 + 8 = 11.'
                    ],
                    [
                        'question' => 'Résolvez l’équation 2x = 16.',
                        'choices' => [
                            ['choice_text' => 'x = 8', 'is_correct' => true],
                            ['choice_text' => 'x = 14', 'is_correct' => false],
                            ['choice_text' => 'x = 32', 'is_correct' => false],
                            ['choice_text' => 'x = 6', 'is_correct' => false],
                        ],
                        'explanation' => 'x = 16 ÷ 2 = 8.'
                    ],
                    [
                        'question' => 'Résolvez l’équation 3x + 2 = 14.',
                        'choices' => [
                            ['choice_text' => 'x = 4', 'is_correct' => true],
                            ['choice_text' => 'x = 3', 'is_correct' => false],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                            ['choice_text' => 'x = 6', 'is_correct' => false],
                        ],
                        'explanation' => '3x + 2 = 14 donne 3x = 12, puis x = 4.'
                    ],
                    [
                        'question' => 'Résolvez l’équation 5x - 5 = 20.',
                        'choices' => [
                            ['choice_text' => 'x = 5', 'is_correct' => true],
                            ['choice_text' => 'x = 4', 'is_correct' => false],
                            ['choice_text' => 'x = 6', 'is_correct' => false],
                            ['choice_text' => 'x = 3', 'is_correct' => false],
                        ],
                        'explanation' => '5x - 5 = 20 donne 5x = 25, donc x = 5.'
                    ],
                    [
                        'question' => 'Résolvez l’équation 4x + 1 = 17.',
                        'choices' => [
                            ['choice_text' => 'x = 4', 'is_correct' => true],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                            ['choice_text' => 'x = 3', 'is_correct' => false],
                            ['choice_text' => 'x = 16', 'is_correct' => false],
                        ],
                        'explanation' => '4x = 16, donc x = 4.'
                    ],
                    [
                        'question' => 'Résolvez l’équation 6x - 6 = 18.',
                        'choices' => [
                            ['choice_text' => 'x = 4', 'is_correct' => true],
                            ['choice_text' => 'x = 3', 'is_correct' => false],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                            ['choice_text' => 'x = 6', 'is_correct' => false],
                        ],
                        'explanation' => '6x = 24, donc x = 4.'
                    ],
                    [
                        'question' => 'Résolvez l’équation 7x = 49.',
                        'choices' => [
                            ['choice_text' => 'x = 7', 'is_correct' => true],
                            ['choice_text' => 'x = 8', 'is_correct' => false],
                            ['choice_text' => 'x = 6', 'is_correct' => false],
                            ['choice_text' => 'x = 42', 'is_correct' => false],
                        ],
                        'explanation' => 'x = 49 ÷ 7 = 7.'
                    ],
                    [
                        'question' => 'Résolvez l’équation 2x - 4 = 10.',
                        'choices' => [
                            ['choice_text' => 'x = 7', 'is_correct' => true],
                            ['choice_text' => 'x = 6', 'is_correct' => false],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                            ['choice_text' => 'x = 14', 'is_correct' => false],
                        ],
                        'explanation' => '2x = 14, donc x = 7.'
                    ],
                    [
                        'question' => 'Résolvez l’équation 3x - 9 = 0.',
                        'choices' => [
                            ['choice_text' => 'x = 3', 'is_correct' => true],
                            ['choice_text' => 'x = 9', 'is_correct' => false],
                            ['choice_text' => 'x = -3', 'is_correct' => false],
                            ['choice_text' => 'x = 0', 'is_correct' => false],
                        ],
                        'explanation' => '3x = 9, donc x = 3.'
                    ],
                ],
            ],

            [
                'title' => 'Distributivité et parenthèses',
                'description' => 'Utilisez la distributivité pour développer et simplifier des expressions.',
                'questions' => [
                    [
                        'question' => 'Développez 3(x + 2).',
                        'choices' => [
                            ['choice_text' => '3x + 6', 'is_correct' => true],
                            ['choice_text' => '3x + 2', 'is_correct' => false],
                            ['choice_text' => 'x + 6', 'is_correct' => false],
                            ['choice_text' => '3x + 5', 'is_correct' => false],
                        ],
                        'explanation' => 'On distribue 3 aux deux termes : 3 × x + 3 × 2 = 3x + 6.'
                    ],
                    [
                        'question' => 'Développez 5(x - 4).',
                        'choices' => [
                            ['choice_text' => '5x - 20', 'is_correct' => true],
                            ['choice_text' => '5x - 4', 'is_correct' => false],
                            ['choice_text' => '5x + 20', 'is_correct' => false],
                            ['choice_text' => 'x - 20', 'is_correct' => false],
                        ],
                        'explanation' => '5 × x - 5 × 4 = 5x - 20.'
                    ],
                    [
                        'question' => 'Développez 2(3x + 4).',
                        'choices' => [
                            ['choice_text' => '6x + 8', 'is_correct' => true],
                            ['choice_text' => '6x + 4', 'is_correct' => false],
                            ['choice_text' => '3x + 8', 'is_correct' => false],
                            ['choice_text' => '5x + 6', 'is_correct' => false],
                        ],
                        'explanation' => '2 × 3x = 6x et 2 × 4 = 8.'
                    ],
                    [
                        'question' => 'Développez 4(2x - 3).',
                        'choices' => [
                            ['choice_text' => '8x - 12', 'is_correct' => true],
                            ['choice_text' => '8x - 3', 'is_correct' => false],
                            ['choice_text' => '6x - 12', 'is_correct' => false],
                            ['choice_text' => '8x + 12', 'is_correct' => false],
                        ],
                        'explanation' => '4 × 2x = 8x et 4 × (-3) = -12.'
                    ],
                    [
                        'question' => 'Quelle est la forme développée de 7(x + 1) ?',
                        'choices' => [
                            ['choice_text' => '7x + 7', 'is_correct' => true],
                            ['choice_text' => '7x + 1', 'is_correct' => false],
                            ['choice_text' => 'x + 7', 'is_correct' => false],
                            ['choice_text' => '7x - 7', 'is_correct' => false],
                        ],
                        'explanation' => '7(x + 1) = 7x + 7.'
                    ],
                    [
                        'question' => 'Simplifiez 2(x + 3) + x.',
                        'choices' => [
                            ['choice_text' => '3x + 6', 'is_correct' => true],
                            ['choice_text' => '2x + 3', 'is_correct' => false],
                            ['choice_text' => '3x + 3', 'is_correct' => false],
                            ['choice_text' => '2x + 6', 'is_correct' => false],
                        ],
                        'explanation' => '2(x + 3) = 2x + 6, puis 2x + 6 + x = 3x + 6.'
                    ],
                    [
                        'question' => 'Simplifiez 3(x - 2) + 2x.',
                        'choices' => [
                            ['choice_text' => '5x - 6', 'is_correct' => true],
                            ['choice_text' => '5x - 2', 'is_correct' => false],
                            ['choice_text' => '3x - 4', 'is_correct' => false],
                            ['choice_text' => '6x - 5', 'is_correct' => false],
                        ],
                        'explanation' => '3(x - 2) = 3x - 6, puis 3x - 6 + 2x = 5x - 6.'
                    ],
                    [
                        'question' => 'Développez 6(2 + y).',
                        'choices' => [
                            ['choice_text' => '12 + 6y', 'is_correct' => true],
                            ['choice_text' => '6 + 2y', 'is_correct' => false],
                            ['choice_text' => '12y + 6', 'is_correct' => false],
                            ['choice_text' => '6y + 2', 'is_correct' => false],
                        ],
                        'explanation' => '6 × 2 + 6 × y = 12 + 6y.'
                    ],
                    [
                        'question' => 'Développez -2(x + 5).',
                        'choices' => [
                            ['choice_text' => '-2x - 10', 'is_correct' => true],
                            ['choice_text' => '-2x + 10', 'is_correct' => false],
                            ['choice_text' => '2x - 10', 'is_correct' => false],
                            ['choice_text' => '-2x - 5', 'is_correct' => false],
                        ],
                        'explanation' => '-2 × x + (-2) × 5 = -2x - 10.'
                    ],
                    [
                        'question' => 'Quelle expression est équivalente à 5(x - 1) + 2 ?',
                        'choices' => [
                            ['choice_text' => '5x - 3', 'is_correct' => true],
                            ['choice_text' => '5x - 1', 'is_correct' => false],
                            ['choice_text' => '5x + 1', 'is_correct' => false],
                            ['choice_text' => '5x - 7', 'is_correct' => false],
                        ],
                        'explanation' => '5(x - 1) + 2 = 5x - 5 + 2 = 5x - 3.'
                    ],
                ],
            ],

            [
                'title' => 'Factorisation élémentaire',
                'description' => 'Identifiez les facteurs communs et factorisez des expressions simples.',
                'questions' => [
                    [
                        'question' => 'Factorisez 3x + 6.',
                        'choices' => [
                            ['choice_text' => '3(x + 2)', 'is_correct' => true],
                            ['choice_text' => '3(x + 6)', 'is_correct' => false],
                            ['choice_text' => 'x(3 + 6)', 'is_correct' => false],
                            ['choice_text' => '6(x + 3)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur commun est 3 : 3x + 6 = 3(x + 2).'
                    ],
                    [
                        'question' => 'Factorisez 5x + 15.',
                        'choices' => [
                            ['choice_text' => '5(x + 3)', 'is_correct' => true],
                            ['choice_text' => '5(x + 15)', 'is_correct' => false],
                            ['choice_text' => 'x(5 + 15)', 'is_correct' => false],
                            ['choice_text' => '15(x + 5)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur commun est 5 : 5x + 15 = 5(x + 3).'
                    ],
                    [
                        'question' => 'Factorisez 4x - 8.',
                        'choices' => [
                            ['choice_text' => '4(x - 2)', 'is_correct' => true],
                            ['choice_text' => '4(x + 2)', 'is_correct' => false],
                            ['choice_text' => '2(x - 8)', 'is_correct' => false],
                            ['choice_text' => '8(x - 4)', 'is_correct' => false],
                        ],
                        'explanation' => '4 est un facteur commun : 4x - 8 = 4(x - 2).'
                    ],
                    [
                        'question' => 'Quel est le facteur commun de 6x et 12 ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => '6x', 'is_correct' => false],
                        ],
                        'explanation' => '6 divise à la fois 6x et 12. C’est un facteur commun.'
                    ],
                    [
                        'question' => 'Factorisez 7x + 14y.',
                        'choices' => [
                            ['choice_text' => '7(x + 2y)', 'is_correct' => true],
                            ['choice_text' => '7(x + 14y)', 'is_correct' => false],
                            ['choice_text' => '14(x + 7y)', 'is_correct' => false],
                            ['choice_text' => 'x(7 + 14y)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur commun est 7 : 7x + 14y = 7(x + 2y).'
                    ],
                    [
                        'question' => 'Factorisez 9a - 3b.',
                        'choices' => [
                            ['choice_text' => '3(3a - b)', 'is_correct' => true],
                            ['choice_text' => '3(3a + b)', 'is_correct' => false],
                            ['choice_text' => '9(a - 3b)', 'is_correct' => false],
                            ['choice_text' => 'a(9 - 3b)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur commun est 3 : 9a - 3b = 3(3a - b).'
                    ],
                    [
                        'question' => 'Factorisez 8x + 4.',
                        'choices' => [
                            ['choice_text' => '4(2x + 1)', 'is_correct' => true],
                            ['choice_text' => '8(x + 4)', 'is_correct' => false],
                            ['choice_text' => '4(2x + 4)', 'is_correct' => false],
                            ['choice_text' => '2(4x + 4)', 'is_correct' => false],
                        ],
                        'explanation' => '8x + 4 = 4(2x + 1).'
                    ],
                    [
                        'question' => 'Quelle expression est factorisée correctement ?',
                        'choices' => [
                            ['choice_text' => '2x + 2y = 2(x + y)', 'is_correct' => true],
                            ['choice_text' => '2x + 2y = 2(x + 2y)', 'is_correct' => false],
                            ['choice_text' => '2x + 2y = x(2 + y)', 'is_correct' => false],
                            ['choice_text' => '2x + 2y = 4(x + y)', 'is_correct' => false],
                        ],
                        'explanation' => 'En mettant 2 en facteur commun, on obtient 2(x + y).'
                    ],
                    [
                        'question' => 'Factorisez 10x - 20.',
                        'choices' => [
                            ['choice_text' => '10(x - 2)', 'is_correct' => true],
                            ['choice_text' => '10(x + 2)', 'is_correct' => false],
                            ['choice_text' => '20(x - 10)', 'is_correct' => false],
                            ['choice_text' => '5(x - 2)', 'is_correct' => false],
                        ],
                        'explanation' => '10 est un facteur commun : 10x - 20 = 10(x - 2).'
                    ],
                    [
                        'question' => 'Factorisez 12p + 18q.',
                        'choices' => [
                            ['choice_text' => '6(2p + 3q)', 'is_correct' => true],
                            ['choice_text' => '3(4p + 6q)', 'is_correct' => false],
                            ['choice_text' => '6(2p + 18q)', 'is_correct' => false],
                            ['choice_text' => '12(p + 18q)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le plus grand facteur numérique commun est 6 : 12p + 18q = 6(2p + 3q).'
                    ],
                ],
            ],

            [
                'title' => 'Puissances et identités algébriques simples',
                'description' => 'Manipulez les puissances simples et reconnaissez quelques identités algébriques élémentaires.',
                'questions' => [
                    [
                        'question' => 'Combien vaut x² lorsque x = 6 ?',
                        'choices' => [
                            ['choice_text' => '36', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                        'explanation' => '6² = 6 × 6 = 36.'
                    ],
                    [
                        'question' => 'Combien vaut x³ lorsque x = 2 ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => '2³ = 2 × 2 × 2 = 8.'
                    ],
                    [
                        'question' => 'Quelle expression est égale à x × x ?',
                        'choices' => [
                            ['choice_text' => 'x²', 'is_correct' => true],
                            ['choice_text' => '2x', 'is_correct' => false],
                            ['choice_text' => 'x + 2', 'is_correct' => false],
                            ['choice_text' => 'x³', 'is_correct' => false],
                        ],
                        'explanation' => 'Multiplier x par lui-même deux fois donne x².'
                    ],
                    [
                        'question' => 'Quel développement correspond à (x + 2)² ?',
                        'choices' => [
                            ['choice_text' => 'x² + 4x + 4', 'is_correct' => true],
                            ['choice_text' => 'x² + 4', 'is_correct' => false],
                            ['choice_text' => 'x² + 2x + 4', 'is_correct' => false],
                            ['choice_text' => 'x² + 4x + 2', 'is_correct' => false],
                        ],
                        'explanation' => '(x + 2)² = x² + 2 × x × 2 + 2² = x² + 4x + 4.'
                    ],
                    [
                        'question' => 'Quel développement correspond à (x - 3)² ?',
                        'choices' => [
                            ['choice_text' => 'x² - 6x + 9', 'is_correct' => true],
                            ['choice_text' => 'x² - 9', 'is_correct' => false],
                            ['choice_text' => 'x² - 3x + 9', 'is_correct' => false],
                            ['choice_text' => 'x² + 6x + 9', 'is_correct' => false],
                        ],
                        'explanation' => '(x - 3)² = x² - 6x + 9.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 2² + 3² ?',
                        'choices' => [
                            ['choice_text' => '13', 'is_correct' => true],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => '2² + 3² = 4 + 9 = 13.'
                    ],
                    [
                        'question' => 'Quelle identité correspond à (a + b)² ?',
                        'choices' => [
                            ['choice_text' => 'a² + 2ab + b²', 'is_correct' => true],
                            ['choice_text' => 'a² + b²', 'is_correct' => false],
                            ['choice_text' => 'a² + ab + b²', 'is_correct' => false],
                            ['choice_text' => 'a² - 2ab + b²', 'is_correct' => false],
                        ],
                        'explanation' => 'L’identité remarquable est (a + b)² = a² + 2ab + b².'
                    ],
                    [
                        'question' => 'Quelle identité correspond à (a - b)² ?',
                        'choices' => [
                            ['choice_text' => 'a² - 2ab + b²', 'is_correct' => true],
                            ['choice_text' => 'a² + 2ab + b²', 'is_correct' => false],
                            ['choice_text' => 'a² - b²', 'is_correct' => false],
                            ['choice_text' => 'a² + ab - b²', 'is_correct' => false],
                        ],
                        'explanation' => '(a - b)² = a² - 2ab + b².'
                    ],
                    [
                        'question' => 'Quelle expression correspond à (a + b)(a - b) ?',
                        'choices' => [
                            ['choice_text' => 'a² - b²', 'is_correct' => true],
                            ['choice_text' => 'a² + b²', 'is_correct' => false],
                            ['choice_text' => 'a² - 2ab + b²', 'is_correct' => false],
                            ['choice_text' => 'a² + 2ab + b²', 'is_correct' => false],
                        ],
                        'explanation' => '(a + b)(a - b) = a² - b².'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 3² × 3³ ?',
                        'choices' => [
                            ['choice_text' => '3⁵', 'is_correct' => true],
                            ['choice_text' => '3⁶', 'is_correct' => false],
                            ['choice_text' => '6⁵', 'is_correct' => false],
                            ['choice_text' => '9⁵', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsqu’on multiplie des puissances de même base, on additionne les exposants : 3² × 3³ = 3⁵.'
                    ],
                ],
            ],

            [
                'title' => 'Problèmes algébriques simples',
                'description' => 'Traduisez des situations courantes en expressions et équations simples.',
                'questions' => [
                    [
                        'question' => 'Un nombre augmenté de 5 vaut 17. Quel est ce nombre ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '22', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                        ],
                        'explanation' => 'Si x + 5 = 17, alors x = 17 - 5 = 12.'
                    ],
                    [
                        'question' => 'Le double d’un nombre vaut 24. Quel est ce nombre ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '48', 'is_correct' => false],
                        ],
                        'explanation' => 'Si 2x = 24, alors x = 12.'
                    ],
                    [
                        'question' => 'Un nombre diminué de 9 vaut 4. Quel est ce nombre ?',
                        'choices' => [
                            ['choice_text' => '13', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '-5', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                        ],
                        'explanation' => 'Si x - 9 = 4, alors x = 4 + 9 = 13.'
                    ],
                    [
                        'question' => 'Le triple d’un nombre vaut 36. Quel est ce nombre ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '108', 'is_correct' => false],
                        ],
                        'explanation' => 'Si 3x = 36, alors x = 12.'
                    ],
                    [
                        'question' => 'Un nombre augmenté de son double vaut 18. Quel est ce nombre ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'Si x + 2x = 18, alors 3x = 18 et x = 6.'
                    ],
                    [
                        'question' => 'Le périmètre d’un carré est de 28 cm. Quelle est la longueur d’un côté ?',
                        'choices' => [
                            ['choice_text' => '7 cm', 'is_correct' => true],
                            ['choice_text' => '14 cm', 'is_correct' => false],
                            ['choice_text' => '8 cm', 'is_correct' => false],
                            ['choice_text' => '6 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Le périmètre d’un carré vaut 4c. Donc 4c = 28, d’où c = 7 cm.'
                    ],
                    [
                        'question' => 'Une mère a 4 ans de plus que le double de l’âge de sa fille. Si la fille a 8 ans, quel âge a la mère ?',
                        'choices' => [
                            ['choice_text' => '20 ans', 'is_correct' => true],
                            ['choice_text' => '16 ans', 'is_correct' => false],
                            ['choice_text' => '18 ans', 'is_correct' => false],
                            ['choice_text' => '12 ans', 'is_correct' => false],
                        ],
                        'explanation' => 'Le double de 8 est 16. En ajoutant 4, on obtient 20 ans.'
                    ],
                    [
                        'question' => 'Un article coûte x DH. Trois articles coûtent 75 DH. Quelle est la valeur de x ?',
                        'choices' => [
                            ['choice_text' => '25 DH', 'is_correct' => true],
                            ['choice_text' => '20 DH', 'is_correct' => false],
                            ['choice_text' => '30 DH', 'is_correct' => false],
                            ['choice_text' => '15 DH', 'is_correct' => false],
                        ],
                        'explanation' => '3x = 75, donc x = 75 ÷ 3 = 25 DH.'
                    ],
                    [
                        'question' => 'Un rectangle a une longueur de 10 cm et une largeur de x cm. Son périmètre est de 30 cm. Quelle est sa largeur ?',
                        'choices' => [
                            ['choice_text' => '5 cm', 'is_correct' => true],
                            ['choice_text' => '10 cm', 'is_correct' => false],
                            ['choice_text' => '4 cm', 'is_correct' => false],
                            ['choice_text' => '15 cm', 'is_correct' => false],
                        ],
                        'explanation' => '2(10 + x) = 30, donc 10 + x = 15 et x = 5 cm.'
                    ],
                    [
                        'question' => 'Un étudiant a obtenu 12 points et veut atteindre 20 points en ajoutant x points. Quelle équation représente la situation ?',
                        'choices' => [
                            ['choice_text' => '12 + x = 20', 'is_correct' => true],
                            ['choice_text' => '12x = 20', 'is_correct' => false],
                            ['choice_text' => 'x - 12 = 20', 'is_correct' => false],
                            ['choice_text' => '12 + 20 = x', 'is_correct' => false],
                        ],
                        'explanation' => 'Le score initial de 12 augmenté de x doit être égal à 20 : 12 + x = 20.'
                    ],
                ],
            ],

            [
                'title' => 'Révision générale d’algèbre débutante',
                'description' => 'Révisez les notions fondamentales d’algèbre avec des exercices variés.',
                'questions' => [
                    [
                        'question' => 'Quelle est la valeur de 4x + 1 pour x = 3 ?',
                        'choices' => [
                            ['choice_text' => '13', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                        ],
                        'explanation' => '4 × 3 + 1 = 12 + 1 = 13.'
                    ],
                    [
                        'question' => 'Résolvez x + 11 = 20.',
                        'choices' => [
                            ['choice_text' => 'x = 9', 'is_correct' => true],
                            ['choice_text' => 'x = 31', 'is_correct' => false],
                            ['choice_text' => 'x = 11', 'is_correct' => false],
                            ['choice_text' => 'x = 8', 'is_correct' => false],
                        ],
                        'explanation' => 'x = 20 - 11 = 9.'
                    ],
                    [
                        'question' => 'Réduisez 6x + 2x - 3x.',
                        'choices' => [
                            ['choice_text' => '5x', 'is_correct' => true],
                            ['choice_text' => '11x', 'is_correct' => false],
                            ['choice_text' => '9x', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                        ],
                        'explanation' => '6x + 2x - 3x = (6 + 2 - 3)x = 5x.'
                    ],
                    [
                        'question' => 'Développez 4(x + 3).',
                        'choices' => [
                            ['choice_text' => '4x + 12', 'is_correct' => true],
                            ['choice_text' => '4x + 3', 'is_correct' => false],
                            ['choice_text' => 'x + 12', 'is_correct' => false],
                            ['choice_text' => '7x', 'is_correct' => false],
                        ],
                        'explanation' => '4(x + 3) = 4x + 12.'
                    ],
                    [
                        'question' => 'Factorisez 6x + 18.',
                        'choices' => [
                            ['choice_text' => '6(x + 3)', 'is_correct' => true],
                            ['choice_text' => '3(2x + 18)', 'is_correct' => false],
                            ['choice_text' => '6(x + 18)', 'is_correct' => false],
                            ['choice_text' => '18(x + 6)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur commun est 6 : 6x + 18 = 6(x + 3).'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 2a + 3 pour a = 7 ?',
                        'choices' => [
                            ['choice_text' => '17', 'is_correct' => true],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                        ],
                        'explanation' => '2 × 7 + 3 = 14 + 3 = 17.'
                    ],
                    [
                        'question' => 'Quelle identité est correcte ?',
                        'choices' => [
                            ['choice_text' => '(x + 1)² = x² + 2x + 1', 'is_correct' => true],
                            ['choice_text' => '(x + 1)² = x² + 1', 'is_correct' => false],
                            ['choice_text' => '(x + 1)² = x² + x + 1', 'is_correct' => false],
                            ['choice_text' => '(x + 1)² = x² + 2', 'is_correct' => false],
                        ],
                        'explanation' => 'En utilisant (a + b)² = a² + 2ab + b² avec b = 1, on obtient x² + 2x + 1.'
                    ],
                    [
                        'question' => 'Résolvez 5x = 35.',
                        'choices' => [
                            ['choice_text' => 'x = 7', 'is_correct' => true],
                            ['choice_text' => 'x = 6', 'is_correct' => false],
                            ['choice_text' => 'x = 8', 'is_correct' => false],
                            ['choice_text' => 'x = 30', 'is_correct' => false],
                        ],
                        'explanation' => 'x = 35 ÷ 5 = 7.'
                    ],
                    [
                        'question' => 'Quelle expression représente « cinq fois un nombre x, diminué de 2 » ?',
                        'choices' => [
                            ['choice_text' => '5x - 2', 'is_correct' => true],
                            ['choice_text' => '5(x - 2)', 'is_correct' => false],
                            ['choice_text' => 'x - 10', 'is_correct' => false],
                            ['choice_text' => '5x + 2', 'is_correct' => false],
                        ],
                        'explanation' => 'Cinq fois x donne 5x, puis on diminue de 2 : 5x - 2.'
                    ],
                    [
                        'question' => 'Si 2x + 6 = 18, quelle est la valeur de x ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => '2x = 12, donc x = 6.'
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => 10,
                    'passing_score' => 50,
                    'total_marks' => 10,
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

                // Mélange complet des choix tout en conservant is_correct.
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