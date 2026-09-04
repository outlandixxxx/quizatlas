<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AlgebraIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'algebra')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Équations du premier degré',
                'description' => 'Résolvez des équations du premier degré nécessitant plusieurs étapes de transformation.',
                'questions' => [
                    [
                        'question' => 'Résolvez 3x + 7 = 22.',
                        'choices' => [
                            ['choice_text' => 'x = 5', 'is_correct' => true],
                            ['choice_text' => 'x = 4', 'is_correct' => false],
                            ['choice_text' => 'x = 6', 'is_correct' => false],
                            ['choice_text' => 'x = 7', 'is_correct' => false],
                        ],
                        'explanation' => '3x + 7 = 22 donne 3x = 15, puis x = 5.'
                    ],
                    [
                        'question' => 'Résolvez 5x - 9 = 2x + 12.',
                        'choices' => [
                            ['choice_text' => 'x = 7', 'is_correct' => true],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                            ['choice_text' => 'x = 6', 'is_correct' => false],
                            ['choice_text' => 'x = 8', 'is_correct' => false],
                        ],
                        'explanation' => '5x - 2x = 12 + 9, donc 3x = 21 et x = 7.'
                    ],
                    [
                        'question' => 'Résolvez 4(x - 3) = 20.',
                        'choices' => [
                            ['choice_text' => 'x = 8', 'is_correct' => true],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                            ['choice_text' => 'x = 7', 'is_correct' => false],
                            ['choice_text' => 'x = 10', 'is_correct' => false],
                        ],
                        'explanation' => '4(x - 3) = 20 donne x - 3 = 5, donc x = 8.'
                    ],
                    [
                        'question' => 'Résolvez 2(x + 5) - 3 = 15.',
                        'choices' => [
                            ['choice_text' => 'x = 4', 'is_correct' => true],
                            ['choice_text' => 'x = 6', 'is_correct' => false],
                            ['choice_text' => 'x = 3', 'is_correct' => false],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                        ],
                        'explanation' => '2x + 10 - 3 = 15, donc 2x + 7 = 15, puis 2x = 8 et x = 4.'
                    ],
                    [
                        'question' => 'Résolvez 7 - 2x = 15.',
                        'choices' => [
                            ['choice_text' => 'x = -4', 'is_correct' => true],
                            ['choice_text' => 'x = 4', 'is_correct' => false],
                            ['choice_text' => 'x = -3', 'is_correct' => false],
                            ['choice_text' => 'x = 3', 'is_correct' => false],
                        ],
                        'explanation' => '7 - 2x = 15 donne -2x = 8, donc x = -4.'
                    ],
                    [
                        'question' => 'Résolvez 3(2x - 1) = 4x + 9.',
                        'choices' => [
                            ['choice_text' => 'x = 6', 'is_correct' => true],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                            ['choice_text' => 'x = 4', 'is_correct' => false],
                            ['choice_text' => 'x = 9', 'is_correct' => false],
                        ],
                        'explanation' => '6x - 3 = 4x + 9, donc 2x = 12 et x = 6.'
                    ],
                    [
                        'question' => 'Résolvez 8x + 4 = 5x + 25.',
                        'choices' => [
                            ['choice_text' => 'x = 7', 'is_correct' => true],
                            ['choice_text' => 'x = 6', 'is_correct' => false],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                            ['choice_text' => 'x = 9', 'is_correct' => false],
                        ],
                        'explanation' => '8x - 5x = 25 - 4, donc 3x = 21 et x = 7.'
                    ],
                    [
                        'question' => 'Résolvez (x + 4)/3 = 6.',
                        'choices' => [
                            ['choice_text' => 'x = 14', 'is_correct' => true],
                            ['choice_text' => 'x = 18', 'is_correct' => false],
                            ['choice_text' => 'x = 10', 'is_correct' => false],
                            ['choice_text' => 'x = 22', 'is_correct' => false],
                        ],
                        'explanation' => 'x + 4 = 18, donc x = 14.'
                    ],
                    [
                        'question' => 'Résolvez (2x - 5)/4 = 3.',
                        'choices' => [
                            ['choice_text' => 'x = 8,5', 'is_correct' => true],
                            ['choice_text' => 'x = 6,5', 'is_correct' => false],
                            ['choice_text' => 'x = 7,5', 'is_correct' => false],
                            ['choice_text' => 'x = 9,5', 'is_correct' => false],
                        ],
                        'explanation' => '2x - 5 = 12, donc 2x = 17 et x = 8,5.'
                    ],
                    [
                        'question' => 'Résolvez 5 - (2x + 1) = -8.',
                        'choices' => [
                            ['choice_text' => 'x = 6', 'is_correct' => true],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                            ['choice_text' => 'x = 7', 'is_correct' => false],
                            ['choice_text' => 'x = 4', 'is_correct' => false],
                        ],
                        'explanation' => '5 - 2x - 1 = -8, donc 4 - 2x = -8, puis -2x = -12 et x = 6.'
                    ],
                ],
            ],

            [
                'title' => 'Systèmes de deux équations',
                'description' => 'Résolvez des systèmes linéaires à deux inconnues par substitution et élimination.',
                'questions' => [
                    [
                        'question' => 'Résolvez le système x + y = 10 et x - y = 2.',
                        'choices' => [
                            ['choice_text' => 'x = 6, y = 4', 'is_correct' => true],
                            ['choice_text' => 'x = 5, y = 5', 'is_correct' => false],
                            ['choice_text' => 'x = 4, y = 6', 'is_correct' => false],
                            ['choice_text' => 'x = 7, y = 3', 'is_correct' => false],
                        ],
                        'explanation' => 'En additionnant les deux équations, on obtient 2x = 12, donc x = 6. Ensuite y = 4.'
                    ],
                    [
                        'question' => 'Quel couple satisfait 2x + y = 11 et x - y = 1 ?',
                        'choices' => [
                            ['choice_text' => 'x = 4, y = 3', 'is_correct' => true],
                            ['choice_text' => 'x = 3, y = 4', 'is_correct' => false],
                            ['choice_text' => 'x = 5, y = 1', 'is_correct' => false],
                            ['choice_text' => 'x = 2, y = 7', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec x - y = 1, on a y = x - 1. Alors 2x + x - 1 = 11, donc 3x = 12 et x = 4, y = 3.'
                    ],
                    [
                        'question' => 'Résolvez x + 2y = 8 et 3x - 2y = 4.',
                        'choices' => [
                            ['choice_text' => 'x = 3, y = 2,5', 'is_correct' => true],
                            ['choice_text' => 'x = 2, y = 3', 'is_correct' => false],
                            ['choice_text' => 'x = 4, y = 2', 'is_correct' => false],
                            ['choice_text' => 'x = 3, y = 3', 'is_correct' => false],
                        ],
                        'explanation' => 'En additionnant, 4x = 12, donc x = 3. Puis 3 + 2y = 8, donc y = 2,5.'
                    ],
                    [
                        'question' => 'Quel couple satisfait 2x + 3y = 13 et x + y = 5 ?',
                        'choices' => [
                            ['choice_text' => 'x = 2, y = 3', 'is_correct' => true],
                            ['choice_text' => 'x = 3, y = 2', 'is_correct' => false],
                            ['choice_text' => 'x = 1, y = 4', 'is_correct' => false],
                            ['choice_text' => 'x = 4, y = 1', 'is_correct' => false],
                        ],
                        'explanation' => 'De x + y = 5, on obtient x = 5 - y. Dans la première équation : 10 - 2y + 3y = 13, donc y = 3 et x = 2.'
                    ],
                    [
                        'question' => 'Le système x + y = 7 et 2x + 2y = 14 possède :',
                        'choices' => [
                            ['choice_text' => 'Une infinité de solutions', 'is_correct' => true],
                            ['choice_text' => 'Une seule solution', 'is_correct' => false],
                            ['choice_text' => 'Aucune solution', 'is_correct' => false],
                            ['choice_text' => 'Deux solutions exactement', 'is_correct' => false],
                        ],
                        'explanation' => 'La deuxième équation est exactement le double de la première. Les deux équations décrivent donc la même droite.'
                    ],
                    [
                        'question' => 'Le système x + y = 5 et x + y = 8 possède :',
                        'choices' => [
                            ['choice_text' => 'Aucune solution', 'is_correct' => true],
                            ['choice_text' => 'Une seule solution', 'is_correct' => false],
                            ['choice_text' => 'Une infinité de solutions', 'is_correct' => false],
                            ['choice_text' => 'Deux solutions', 'is_correct' => false],
                        ],
                        'explanation' => 'Une même expression x + y ne peut pas être simultanément égale à 5 et à 8.'
                    ],
                    [
                        'question' => 'Résolvez 4x + y = 13 et x - y = 2.',
                        'choices' => [
                            ['choice_text' => 'x = 3, y = 1', 'is_correct' => true],
                            ['choice_text' => 'x = 2, y = 3', 'is_correct' => false],
                            ['choice_text' => 'x = 4, y = -1', 'is_correct' => false],
                            ['choice_text' => 'x = 1, y = 3', 'is_correct' => false],
                        ],
                        'explanation' => 'De x - y = 2, y = x - 2. Alors 4x + x - 2 = 13, donc 5x = 15 et x = 3, y = 1.'
                    ],
                    [
                        'question' => 'Quel est le point d’intersection des droites y = x + 1 et y = 7 - x ?',
                        'choices' => [
                            ['choice_text' => '(3, 4)', 'is_correct' => true],
                            ['choice_text' => '(4, 3)', 'is_correct' => false],
                            ['choice_text' => '(2, 5)', 'is_correct' => false],
                            ['choice_text' => '(5, 2)', 'is_correct' => false],
                        ],
                        'explanation' => 'x + 1 = 7 - x donne 2x = 6, donc x = 3 et y = 4.'
                    ],
                    [
                        'question' => 'Résolvez 3x + 2y = 16 et x + y = 6.',
                        'choices' => [
                            ['choice_text' => 'x = 4, y = 2', 'is_correct' => true],
                            ['choice_text' => 'x = 2, y = 4', 'is_correct' => false],
                            ['choice_text' => 'x = 5, y = 1', 'is_correct' => false],
                            ['choice_text' => 'x = 3, y = 3', 'is_correct' => false],
                        ],
                        'explanation' => 'x + y = 6 donne y = 6 - x. Ainsi 3x + 12 - 2x = 16, donc x = 4 et y = 2.'
                    ],
                    [
                        'question' => 'Quel couple satisfait 5x - 2y = 4 et x + y = 2 ?',
                        'choices' => [
                            ['choice_text' => 'x = 8/7, y = 6/7', 'is_correct' => true],
                            ['choice_text' => 'x = 1, y = 1', 'is_correct' => false],
                            ['choice_text' => 'x = 6/7, y = 8/7', 'is_correct' => false],
                            ['choice_text' => 'x = 2, y = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'y = 2 - x. Donc 5x - 2(2 - x) = 4, soit 7x = 8. Ainsi x = 8/7 et y = 6/7.'
                    ],
                ],
            ],

            [
                'title' => 'Polynômes et opérations',
                'description' => 'Additionnez, soustrayez et multipliez des polynômes en respectant les termes semblables.',
                'questions' => [
                    [
                        'question' => 'Réduisez (3x² + 2x - 1) + (x² - 5x + 4).',
                        'choices' => [
                            ['choice_text' => '4x² - 3x + 3', 'is_correct' => true],
                            ['choice_text' => '4x² + 7x + 3', 'is_correct' => false],
                            ['choice_text' => '3x² - 3x + 3', 'is_correct' => false],
                            ['choice_text' => '4x² - 3x - 5', 'is_correct' => false],
                        ],
                        'explanation' => 'On regroupe les termes de même degré : 3x² + x² = 4x², 2x - 5x = -3x et -1 + 4 = 3.'
                    ],
                    [
                        'question' => 'Réduisez (5x² - 3x + 2) - (2x² + x - 6).',
                        'choices' => [
                            ['choice_text' => '3x² - 4x + 8', 'is_correct' => true],
                            ['choice_text' => '3x² - 2x - 4', 'is_correct' => false],
                            ['choice_text' => '7x² - 2x + 8', 'is_correct' => false],
                            ['choice_text' => '3x² + 4x - 8', 'is_correct' => false],
                        ],
                        'explanation' => 'On distribue le signe moins : 5x² - 3x + 2 - 2x² - x + 6 = 3x² - 4x + 8.'
                    ],
                    [
                        'question' => 'Développez (x + 3)(x + 2).',
                        'choices' => [
                            ['choice_text' => 'x² + 5x + 6', 'is_correct' => true],
                            ['choice_text' => 'x² + 6x + 5', 'is_correct' => false],
                            ['choice_text' => 'x² + 5x + 5', 'is_correct' => false],
                            ['choice_text' => 'x² + x + 6', 'is_correct' => false],
                        ],
                        'explanation' => 'x² + 2x + 3x + 6 = x² + 5x + 6.'
                    ],
                    [
                        'question' => 'Développez (2x - 3)(x + 4).',
                        'choices' => [
                            ['choice_text' => '2x² + 5x - 12', 'is_correct' => true],
                            ['choice_text' => '2x² + 11x - 12', 'is_correct' => false],
                            ['choice_text' => '2x² - 5x - 12', 'is_correct' => false],
                            ['choice_text' => '2x² + 8x - 3', 'is_correct' => false],
                        ],
                        'explanation' => '2x² + 8x - 3x - 12 = 2x² + 5x - 12.'
                    ],
                    [
                        'question' => 'Quel est le degré du polynôme 7x⁴ - 2x² + x - 9 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'Le degré est le plus grand exposant de x apparaissant avec un coefficient non nul. Ici, c’est 4.'
                    ],
                    [
                        'question' => 'Quel est le coefficient de x³ dans -4x³ + 7x - 2 ?',
                        'choices' => [
                            ['choice_text' => '-4', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme en x³ est -4x³, donc son coefficient est -4.'
                    ],
                    [
                        'question' => 'Développez (x - 5)².',
                        'choices' => [
                            ['choice_text' => 'x² - 10x + 25', 'is_correct' => true],
                            ['choice_text' => 'x² - 25', 'is_correct' => false],
                            ['choice_text' => 'x² - 5x + 25', 'is_correct' => false],
                            ['choice_text' => 'x² + 10x + 25', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec (a - b)² = a² - 2ab + b², on obtient x² - 10x + 25.'
                    ],
                    [
                        'question' => 'Quel est le résultat de x(3x - 4) + 2x ?',
                        'choices' => [
                            ['choice_text' => '3x² - 2x', 'is_correct' => true],
                            ['choice_text' => '3x² + 6x', 'is_correct' => false],
                            ['choice_text' => '3x² - 4x', 'is_correct' => false],
                            ['choice_text' => '5x² - 2x', 'is_correct' => false],
                        ],
                        'explanation' => 'x(3x - 4) = 3x² - 4x, puis +2x donne 3x² - 2x.'
                    ],
                    [
                        'question' => 'Développez (3x + 1)(x - 2).',
                        'choices' => [
                            ['choice_text' => '3x² - 5x - 2', 'is_correct' => true],
                            ['choice_text' => '3x² - 6x + 1', 'is_correct' => false],
                            ['choice_text' => '3x² + 5x - 2', 'is_correct' => false],
                            ['choice_text' => '3x² - x - 2', 'is_correct' => false],
                        ],
                        'explanation' => '3x² - 6x + x - 2 = 3x² - 5x - 2.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 2(x² + 3x - 1) - (x² - x + 4) ?',
                        'choices' => [
                            ['choice_text' => 'x² + 7x - 6', 'is_correct' => true],
                            ['choice_text' => '3x² + 5x + 2', 'is_correct' => false],
                            ['choice_text' => 'x² + 5x - 2', 'is_correct' => false],
                            ['choice_text' => 'x² + 6x - 5', 'is_correct' => false],
                        ],
                        'explanation' => '2x² + 6x - 2 - x² + x - 4 = x² + 7x - 6.'
                    ],
                ],
            ],

            [
                'title' => 'Factorisation et identités remarquables',
                'description' => 'Identifiez les facteurs communs et utilisez les identités remarquables pour factoriser.',
                'questions' => [
                    [
                        'question' => 'Factorisez x² + 5x + 6.',
                        'choices' => [
                            ['choice_text' => '(x + 2)(x + 3)', 'is_correct' => true],
                            ['choice_text' => '(x + 1)(x + 6)', 'is_correct' => false],
                            ['choice_text' => '(x - 2)(x - 3)', 'is_correct' => false],
                            ['choice_text' => '(x + 5)(x + 1)', 'is_correct' => false],
                        ],
                        'explanation' => 'On cherche deux nombres dont le produit vaut 6 et la somme 5 : 2 et 3.'
                    ],
                    [
                        'question' => 'Factorisez x² - 9.',
                        'choices' => [
                            ['choice_text' => '(x - 3)(x + 3)', 'is_correct' => true],
                            ['choice_text' => '(x - 9)(x + 1)', 'is_correct' => false],
                            ['choice_text' => '(x - 3)²', 'is_correct' => false],
                            ['choice_text' => 'x(x - 9)', 'is_correct' => false],
                        ],
                        'explanation' => 'Il s’agit d’une différence de deux carrés : x² - 3² = (x - 3)(x + 3).'
                    ],
                    [
                        'question' => 'Factorisez x² - 7x + 12.',
                        'choices' => [
                            ['choice_text' => '(x - 3)(x - 4)', 'is_correct' => true],
                            ['choice_text' => '(x + 3)(x + 4)', 'is_correct' => false],
                            ['choice_text' => '(x - 2)(x - 6)', 'is_correct' => false],
                            ['choice_text' => '(x + 2)(x - 6)', 'is_correct' => false],
                        ],
                        'explanation' => '-3 et -4 ont pour produit 12 et pour somme -7.'
                    ],
                    [
                        'question' => 'Factorisez 3x² + 12x.',
                        'choices' => [
                            ['choice_text' => '3x(x + 4)', 'is_correct' => true],
                            ['choice_text' => '3(x² + 12x)', 'is_correct' => false],
                            ['choice_text' => 'x(3x + 12x)', 'is_correct' => false],
                            ['choice_text' => '3x(x + 12)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur commun est 3x : 3x² + 12x = 3x(x + 4).'
                    ],
                    [
                        'question' => 'Factorisez 4x² - 25.',
                        'choices' => [
                            ['choice_text' => '(2x - 5)(2x + 5)', 'is_correct' => true],
                            ['choice_text' => '(4x - 5)(x + 5)', 'is_correct' => false],
                            ['choice_text' => '(2x - 25)(2x + 1)', 'is_correct' => false],
                            ['choice_text' => '(x - 5)(4x + 5)', 'is_correct' => false],
                        ],
                        'explanation' => '4x² - 25 = (2x)² - 5², donc (2x - 5)(2x + 5).'
                    ],
                    [
                        'question' => 'Factorisez x² + 2x - 15.',
                        'choices' => [
                            ['choice_text' => '(x + 5)(x - 3)', 'is_correct' => true],
                            ['choice_text' => '(x + 3)(x - 5)', 'is_correct' => false],
                            ['choice_text' => '(x - 5)(x - 3)', 'is_correct' => false],
                            ['choice_text' => '(x + 15)(x - 1)', 'is_correct' => false],
                        ],
                        'explanation' => '5 et -3 ont pour produit -15 et pour somme 2.'
                    ],
                    [
                        'question' => 'Quelle factorisation est correcte pour 2x² - 8 ?',
                        'choices' => [
                            ['choice_text' => '2(x - 2)(x + 2)', 'is_correct' => true],
                            ['choice_text' => '2(x - 4)(x + 2)', 'is_correct' => false],
                            ['choice_text' => '2(x - 2)²', 'is_correct' => false],
                            ['choice_text' => '(2x - 8)(x + 1)', 'is_correct' => false],
                        ],
                        'explanation' => '2x² - 8 = 2(x² - 4) = 2(x - 2)(x + 2).'
                    ],
                    [
                        'question' => 'Factorisez 5x² - 20x + 20.',
                        'choices' => [
                            ['choice_text' => '5(x - 2)²', 'is_correct' => true],
                            ['choice_text' => '5(x - 4)²', 'is_correct' => false],
                            ['choice_text' => '(5x - 2)²', 'is_correct' => false],
                            ['choice_text' => '5(x² - 20x + 20)', 'is_correct' => false],
                        ],
                        'explanation' => '5x² - 20x + 20 = 5(x² - 4x + 4) = 5(x - 2)².'
                    ],
                    [
                        'question' => 'Factorisez x² + 10x + 25.',
                        'choices' => [
                            ['choice_text' => '(x + 5)²', 'is_correct' => true],
                            ['choice_text' => '(x + 10)²', 'is_correct' => false],
                            ['choice_text' => '(x + 5)(x - 5)', 'is_correct' => false],
                            ['choice_text' => '(x + 25)(x + 1)', 'is_correct' => false],
                        ],
                        'explanation' => 'x² + 10x + 25 = x² + 2 × 5x + 25 = (x + 5)².'
                    ],
                    [
                        'question' => 'Factorisez 6x² + 9x.',
                        'choices' => [
                            ['choice_text' => '3x(2x + 3)', 'is_correct' => true],
                            ['choice_text' => '6x(x + 9)', 'is_correct' => false],
                            ['choice_text' => '3(2x² + 9x)', 'is_correct' => false],
                            ['choice_text' => 'x(6x + 9x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur commun maximal est 3x : 6x² + 9x = 3x(2x + 3).'
                    ],
                ],
            ],

            [
                'title' => 'Inéquations du premier degré',
                'description' => 'Résolvez des inéquations et représentez leurs ensembles de solutions.',
                'questions' => [
                    [
                        'question' => 'Résolvez 3x + 2 > 11.',
                        'choices' => [
                            ['choice_text' => 'x > 3', 'is_correct' => true],
                            ['choice_text' => 'x < 3', 'is_correct' => false],
                            ['choice_text' => 'x ≥ 3', 'is_correct' => false],
                            ['choice_text' => 'x > 9', 'is_correct' => false],
                        ],
                        'explanation' => '3x > 9, donc x > 3.'
                    ],
                    [
                        'question' => 'Résolvez 5x - 4 ≤ 16.',
                        'choices' => [
                            ['choice_text' => 'x ≤ 4', 'is_correct' => true],
                            ['choice_text' => 'x ≥ 4', 'is_correct' => false],
                            ['choice_text' => 'x < 4', 'is_correct' => false],
                            ['choice_text' => 'x ≤ 12', 'is_correct' => false],
                        ],
                        'explanation' => '5x ≤ 20, donc x ≤ 4.'
                    ],
                    [
                        'question' => 'Résolvez -2x + 6 > 10.',
                        'choices' => [
                            ['choice_text' => 'x < -2', 'is_correct' => true],
                            ['choice_text' => 'x > -2', 'is_correct' => false],
                            ['choice_text' => 'x < 2', 'is_correct' => false],
                            ['choice_text' => 'x > 2', 'is_correct' => false],
                        ],
                        'explanation' => '-2x > 4. En divisant par -2, on inverse le sens : x < -2.'
                    ],
                    [
                        'question' => 'Quelle est la solution de 4(x - 1) ≥ 12 ?',
                        'choices' => [
                            ['choice_text' => 'x ≥ 4', 'is_correct' => true],
                            ['choice_text' => 'x ≤ 4', 'is_correct' => false],
                            ['choice_text' => 'x > 3', 'is_correct' => false],
                            ['choice_text' => 'x ≥ 3', 'is_correct' => false],
                        ],
                        'explanation' => 'x - 1 ≥ 3, donc x ≥ 4.'
                    ],
                    [
                        'question' => 'Résolvez 7 - 3x ≤ 1.',
                        'choices' => [
                            ['choice_text' => 'x ≥ 2', 'is_correct' => true],
                            ['choice_text' => 'x ≤ 2', 'is_correct' => false],
                            ['choice_text' => 'x > 2', 'is_correct' => false],
                            ['choice_text' => 'x < 2', 'is_correct' => false],
                        ],
                        'explanation' => '-3x ≤ -6. En divisant par -3, on obtient x ≥ 2.'
                    ],
                    [
                        'question' => 'Quel intervalle correspond à -2 < x ≤ 5 ?',
                        'choices' => [
                            ['choice_text' => ']−2, 5]', 'is_correct' => true],
                            ['choice_text' => '[−2, 5[', 'is_correct' => false],
                            ['choice_text' => ']−2, 5[', 'is_correct' => false],
                            ['choice_text' => '[−2, 5]', 'is_correct' => false],
                        ],
                        'explanation' => '-2 est exclu et 5 est inclus, donc l’intervalle est ]−2, 5].'
                    ],
                    [
                        'question' => 'Résolvez 2x + 1 < x + 7.',
                        'choices' => [
                            ['choice_text' => 'x < 6', 'is_correct' => true],
                            ['choice_text' => 'x > 6', 'is_correct' => false],
                            ['choice_text' => 'x < 8', 'is_correct' => false],
                            ['choice_text' => 'x > 8', 'is_correct' => false],
                        ],
                        'explanation' => '2x - x < 7 - 1, donc x < 6.'
                    ],
                    [
                        'question' => 'Résolvez 3(x + 2) > 2x + 9.',
                        'choices' => [
                            ['choice_text' => 'x > 3', 'is_correct' => true],
                            ['choice_text' => 'x < 3', 'is_correct' => false],
                            ['choice_text' => 'x > 5', 'is_correct' => false],
                            ['choice_text' => 'x < 5', 'is_correct' => false],
                        ],
                        'explanation' => '3x + 6 > 2x + 9, donc x > 3.'
                    ],
                    [
                        'question' => 'Résolvez (x - 2)/3 ≥ 4.',
                        'choices' => [
                            ['choice_text' => 'x ≥ 14', 'is_correct' => true],
                            ['choice_text' => 'x ≥ 12', 'is_correct' => false],
                            ['choice_text' => 'x ≤ 14', 'is_correct' => false],
                            ['choice_text' => 'x ≥ 10', 'is_correct' => false],
                        ],
                        'explanation' => 'x - 2 ≥ 12, donc x ≥ 14.'
                    ],
                    [
                        'question' => 'Quelle est la solution de -5 < 2x + 1 ≤ 9 ?',
                        'choices' => [
                            ['choice_text' => '-3 < x ≤ 4', 'is_correct' => true],
                            ['choice_text' => '-2 < x ≤ 4', 'is_correct' => false],
                            ['choice_text' => '-3 ≤ x < 4', 'is_correct' => false],
                            ['choice_text' => '-6 < x ≤ 8', 'is_correct' => false],
                        ],
                        'explanation' => '−5 < 2x + 1 ≤ 9 donne −6 < 2x ≤ 8, puis −3 < x ≤ 4.'
                    ],
                ],
            ],

            [
                'title' => 'Équations du second degré',
                'description' => 'Identifiez et résolvez des équations quadratiques simples par factorisation ou propriétés des racines.',
                'questions' => [
                    [
                        'question' => 'Quelles sont les solutions de x² - 9 = 0 ?',
                        'choices' => [
                            ['choice_text' => 'x = -3 et x = 3', 'is_correct' => true],
                            ['choice_text' => 'x = 3 seulement', 'is_correct' => false],
                            ['choice_text' => 'x = -9 et x = 9', 'is_correct' => false],
                            ['choice_text' => 'Aucune solution réelle', 'is_correct' => false],
                        ],
                        'explanation' => 'x² = 9, donc x = ±3.'
                    ],
                    [
                        'question' => 'Quelles sont les solutions de x² - 5x + 6 = 0 ?',
                        'choices' => [
                            ['choice_text' => 'x = 2 et x = 3', 'is_correct' => true],
                            ['choice_text' => 'x = 1 et x = 6', 'is_correct' => false],
                            ['choice_text' => 'x = -2 et x = -3', 'is_correct' => false],
                            ['choice_text' => 'x = 2 et x = -3', 'is_correct' => false],
                        ],
                        'explanation' => 'x² - 5x + 6 = (x - 2)(x - 3), donc x = 2 ou x = 3.'
                    ],
                    [
                        'question' => 'Résolvez x² + 7x + 12 = 0.',
                        'choices' => [
                            ['choice_text' => 'x = -3 et x = -4', 'is_correct' => true],
                            ['choice_text' => 'x = 3 et x = 4', 'is_correct' => false],
                            ['choice_text' => 'x = -2 et x = -6', 'is_correct' => false],
                            ['choice_text' => 'x = 2 et x = 6', 'is_correct' => false],
                        ],
                        'explanation' => 'x² + 7x + 12 = (x + 3)(x + 4), donc x = -3 ou x = -4.'
                    ],
                    [
                        'question' => 'Quel est le discriminant de x² - 4x + 3 = 0 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => 'Δ = b² - 4ac = (-4)² - 4 × 1 × 3 = 16 - 12 = 4.'
                    ],
                    [
                        'question' => 'Combien de solutions réelles possède x² + 4x + 4 = 0 ?',
                        'choices' => [
                            ['choice_text' => 'Une solution réelle double', 'is_correct' => true],
                            ['choice_text' => 'Deux solutions réelles distinctes', 'is_correct' => false],
                            ['choice_text' => 'Aucune solution réelle', 'is_correct' => false],
                            ['choice_text' => 'Trois solutions', 'is_correct' => false],
                        ],
                        'explanation' => 'x² + 4x + 4 = (x + 2)². Le discriminant vaut 0, donc il existe une racine double x = -2.'
                    ],
                    [
                        'question' => 'Résolvez 2x² - 8 = 0.',
                        'choices' => [
                            ['choice_text' => 'x = -2 et x = 2', 'is_correct' => true],
                            ['choice_text' => 'x = 4 et x = -4', 'is_correct' => false],
                            ['choice_text' => 'x = 2 seulement', 'is_correct' => false],
                            ['choice_text' => 'x = -4 et x = 2', 'is_correct' => false],
                        ],
                        'explanation' => '2x² = 8, donc x² = 4 et x = ±2.'
                    ],
                    [
                        'question' => 'Quelle est la somme des racines de 2x² - 6x + 4 = 0 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour ax² + bx + c = 0, la somme des racines vaut -b/a. Ici, 6/2 = 3.'
                    ],
                    [
                        'question' => 'Quel est le produit des racines de 3x² + 2x - 5 = 0 ?',
                        'choices' => [
                            ['choice_text' => '-5/3', 'is_correct' => true],
                            ['choice_text' => '5/3', 'is_correct' => false],
                            ['choice_text' => '-2/3', 'is_correct' => false],
                            ['choice_text' => '2/3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit des racines vaut c/a = -5/3.'
                    ],
                    [
                        'question' => 'Quelles sont les solutions de x² - 2x - 8 = 0 ?',
                        'choices' => [
                            ['choice_text' => 'x = 4 et x = -2', 'is_correct' => true],
                            ['choice_text' => 'x = 2 et x = -4', 'is_correct' => false],
                            ['choice_text' => 'x = 8 et x = -1', 'is_correct' => false],
                            ['choice_text' => 'x = -4 et x = -2', 'is_correct' => false],
                        ],
                        'explanation' => 'x² - 2x - 8 = (x - 4)(x + 2), donc x = 4 ou x = -2.'
                    ],
                    [
                        'question' => 'Quelle équation possède les racines 5 et -2 ?',
                        'choices' => [
                            ['choice_text' => 'x² - 3x - 10 = 0', 'is_correct' => true],
                            ['choice_text' => 'x² + 3x - 10 = 0', 'is_correct' => false],
                            ['choice_text' => 'x² - 7x + 10 = 0', 'is_correct' => false],
                            ['choice_text' => 'x² + 7x + 10 = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le polynôme ayant pour racines 5 et -2 est (x - 5)(x + 2) = x² - 3x - 10.'
                    ],
                ],
            ],

            [
                'title' => 'Fractions algébriques',
                'description' => 'Simplifiez et manipulez des expressions rationnelles simples en tenant compte des valeurs interdites.',
                'questions' => [
                    [
                        'question' => 'Simplifiez (x² - 9)/(x - 3), avec x ≠ 3.',
                        'choices' => [
                            ['choice_text' => 'x + 3', 'is_correct' => true],
                            ['choice_text' => 'x - 3', 'is_correct' => false],
                            ['choice_text' => 'x² + 3', 'is_correct' => false],
                            ['choice_text' => 'x + 9', 'is_correct' => false],
                        ],
                        'explanation' => 'x² - 9 = (x - 3)(x + 3). Après simplification par x - 3, il reste x + 3.'
                    ],
                    [
                        'question' => 'Quelle est la valeur interdite dans 5/(x - 2) ?',
                        'choices' => [
                            ['choice_text' => 'x = 2', 'is_correct' => true],
                            ['choice_text' => 'x = -2', 'is_correct' => false],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                            ['choice_text' => 'x = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur ne peut pas être nul. x - 2 = 0 donne x = 2.'
                    ],
                    [
                        'question' => 'Simplifiez 6x/9.',
                        'choices' => [
                            ['choice_text' => '2x/3', 'is_correct' => true],
                            ['choice_text' => '3x/2', 'is_correct' => false],
                            ['choice_text' => '6x/3', 'is_correct' => false],
                            ['choice_text' => '2x/9', 'is_correct' => false],
                        ],
                        'explanation' => 'On simplifie le facteur commun 3 : 6x/9 = 2x/3.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 1/x pour x = 4 ?',
                        'choices' => [
                            ['choice_text' => '1/4', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '4/1', 'is_correct' => false],
                        ],
                        'explanation' => 'En remplaçant x par 4, on obtient 1/4.'
                    ],
                    [
                        'question' => 'Simplifiez (x² + 4x)/(x), avec x ≠ 0.',
                        'choices' => [
                            ['choice_text' => 'x + 4', 'is_correct' => true],
                            ['choice_text' => 'x² + 4', 'is_correct' => false],
                            ['choice_text' => 'x + 4x', 'is_correct' => false],
                            ['choice_text' => '4x', 'is_correct' => false],
                        ],
                        'explanation' => 'On factorise x au numérateur : x(x + 4)/x = x + 4.'
                    ],
                    [
                        'question' => 'Additionnez 1/x + 2/x.',
                        'choices' => [
                            ['choice_text' => '3/x', 'is_correct' => true],
                            ['choice_text' => '3/(2x)', 'is_correct' => false],
                            ['choice_text' => '2/x²', 'is_correct' => false],
                            ['choice_text' => 'x/3', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dénominateurs sont identiques : 1/x + 2/x = 3/x.'
                    ],
                    [
                        'question' => 'Simplifiez (x² - 4)/(x + 2), avec x ≠ -2.',
                        'choices' => [
                            ['choice_text' => 'x - 2', 'is_correct' => true],
                            ['choice_text' => 'x + 2', 'is_correct' => false],
                            ['choice_text' => 'x² - 2', 'is_correct' => false],
                            ['choice_text' => 'x - 4', 'is_correct' => false],
                        ],
                        'explanation' => 'x² - 4 = (x - 2)(x + 2), donc l’expression se simplifie en x - 2.'
                    ],
                    [
                        'question' => 'Quelle est la valeur interdite dans (x + 1)/(x² - 9) ?',
                        'choices' => [
                            ['choice_text' => 'x = -3 et x = 3', 'is_correct' => true],
                            ['choice_text' => 'x = 9', 'is_correct' => false],
                            ['choice_text' => 'x = -9 et x = 9', 'is_correct' => false],
                            ['choice_text' => 'x = 1', 'is_correct' => false],
                        ],
                        'explanation' => 'x² - 9 = (x - 3)(x + 3), donc le dénominateur s’annule pour x = ±3.'
                    ],
                    [
                        'question' => 'Quelle est la forme simplifiée de 4x²/(2x), avec x ≠ 0 ?',
                        'choices' => [
                            ['choice_text' => '2x', 'is_correct' => true],
                            ['choice_text' => '2x²', 'is_correct' => false],
                            ['choice_text' => '4x', 'is_correct' => false],
                            ['choice_text' => 'x/2', 'is_correct' => false],
                        ],
                        'explanation' => '4x²/(2x) = 2x après simplification par 2x.'
                    ],
                    [
                        'question' => 'Quelle expression est équivalente à 1 - 2/x ?',
                        'choices' => [
                            ['choice_text' => '(x - 2)/x', 'is_correct' => true],
                            ['choice_text' => '(1 - 2)/x', 'is_correct' => false],
                            ['choice_text' => '(x - 1)/2x', 'is_correct' => false],
                            ['choice_text' => 'x/(x - 2)', 'is_correct' => false],
                        ],
                        'explanation' => 'On met au même dénominateur : 1 = x/x, donc x/x - 2/x = (x - 2)/x.'
                    ],
                ],
            ],

            [
                'title' => 'Puissances et racines algébriques',
                'description' => 'Manipulez les puissances, les racines et les règles de calcul algébrique associées.',
                'questions' => [
                    [
                        'question' => 'Simplifiez x³ × x⁴.',
                        'choices' => [
                            ['choice_text' => 'x⁷', 'is_correct' => true],
                            ['choice_text' => 'x¹²', 'is_correct' => false],
                            ['choice_text' => '2x⁷', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une même base, on additionne les exposants : x³ × x⁴ = x⁷.'
                    ],
                    [
                        'question' => 'Simplifiez x⁸/x³, avec x ≠ 0.',
                        'choices' => [
                            ['choice_text' => 'x⁵', 'is_correct' => true],
                            ['choice_text' => 'x¹¹', 'is_correct' => false],
                            ['choice_text' => 'x²', 'is_correct' => false],
                            ['choice_text' => '1/x⁵', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’une division de puissances de même base, on soustrait les exposants : x⁸/x³ = x⁵.'
                    ],
                    [
                        'question' => 'Quelle expression est équivalente à (x²)³ ?',
                        'choices' => [
                            ['choice_text' => 'x⁶', 'is_correct' => true],
                            ['choice_text' => 'x⁵', 'is_correct' => false],
                            ['choice_text' => 'x⁸', 'is_correct' => false],
                            ['choice_text' => '3x²', 'is_correct' => false],
                        ],
                        'explanation' => 'Une puissance d’une puissance donne x^(2×3) = x⁶.'
                    ],
                    [
                        'question' => 'Simplifiez √(x²) pour x ≥ 0.',
                        'choices' => [
                            ['choice_text' => 'x', 'is_correct' => true],
                            ['choice_text' => 'x²', 'is_correct' => false],
                            ['choice_text' => '2x', 'is_correct' => false],
                            ['choice_text' => '√x', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour x ≥ 0, √(x²) = x.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 2⁻3 ?',
                        'choices' => [
                            ['choice_text' => '1/8', 'is_correct' => true],
                            ['choice_text' => '-8', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '1/6', 'is_correct' => false],
                        ],
                        'explanation' => '2⁻3 = 1/2³ = 1/8.'
                    ],
                    [
                        'question' => 'Simplifiez √50.',
                        'choices' => [
                            ['choice_text' => '5√2', 'is_correct' => true],
                            ['choice_text' => '10√5', 'is_correct' => false],
                            ['choice_text' => '25√2', 'is_correct' => false],
                            ['choice_text' => '2√5', 'is_correct' => false],
                        ],
                        'explanation' => '50 = 25 × 2, donc √50 = √25 × √2 = 5√2.'
                    ],
                    [
                        'question' => 'Quelle expression est égale à x⁰ pour x ≠ 0 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                        ],
                        'explanation' => 'Toute puissance de base non nulle avec exposant zéro vaut 1.'
                    ],
                    [
                        'question' => 'Simplifiez (2x³)(3x²).',
                        'choices' => [
                            ['choice_text' => '6x⁵', 'is_correct' => true],
                            ['choice_text' => '5x⁶', 'is_correct' => false],
                            ['choice_text' => '6x⁶', 'is_correct' => false],
                            ['choice_text' => '5x⁵', 'is_correct' => false],
                        ],
                        'explanation' => 'On multiplie les coefficients 2 × 3 = 6 et on additionne les exposants : x³ × x² = x⁵.'
                    ],
                    [
                        'question' => 'Quelle est l’écriture équivalente à 1/x² ?',
                        'choices' => [
                            ['choice_text' => 'x⁻²', 'is_correct' => true],
                            ['choice_text' => 'x²', 'is_correct' => false],
                            ['choice_text' => '-x²', 'is_correct' => false],
                            ['choice_text' => '2x⁻¹', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition des exposants négatifs, x⁻² = 1/x² pour x ≠ 0.'
                    ],
                    [
                        'question' => 'Simplifiez √(18x²) pour x ≥ 0.',
                        'choices' => [
                            ['choice_text' => '3x√2', 'is_correct' => true],
                            ['choice_text' => '9x√2', 'is_correct' => false],
                            ['choice_text' => '6x√2', 'is_correct' => false],
                            ['choice_text' => '3x²√2', 'is_correct' => false],
                        ],
                        'explanation' => '√(18x²) = √(9 × 2 × x²) = 3x√2 puisque x ≥ 0.'
                    ],
                ],
            ],

            [
                'title' => 'Problèmes algébriques et modélisation',
                'description' => 'Traduisez des situations concrètes en équations et utilisez l’algèbre pour trouver les inconnues.',
                'questions' => [
                    [
                        'question' => 'La somme de deux nombres consécutifs est 41. Quels sont ces nombres ?',
                        'choices' => [
                            ['choice_text' => '20 et 21', 'is_correct' => true],
                            ['choice_text' => '19 et 22', 'is_correct' => false],
                            ['choice_text' => '18 et 23', 'is_correct' => false],
                            ['choice_text' => '21 et 22', 'is_correct' => false],
                        ],
                        'explanation' => 'Si le premier nombre vaut x, le second vaut x + 1. Alors 2x + 1 = 41, donc x = 20.'
                    ],
                    [
                        'question' => 'La somme de trois nombres consécutifs est 72. Quel est le nombre du milieu ?',
                        'choices' => [
                            ['choice_text' => '24', 'is_correct' => true],
                            ['choice_text' => '23', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '22', 'is_correct' => false],
                        ],
                        'explanation' => 'Les nombres sont x - 1, x et x + 1. Leur somme vaut 3x = 72, donc x = 24.'
                    ],
                    [
                        'question' => 'Un rectangle a une longueur de 3 cm de plus que sa largeur et un périmètre de 26 cm. Quelle est sa largeur ?',
                        'choices' => [
                            ['choice_text' => '5 cm', 'is_correct' => true],
                            ['choice_text' => '4 cm', 'is_correct' => false],
                            ['choice_text' => '6 cm', 'is_correct' => false],
                            ['choice_text' => '7 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Soit x la largeur. La longueur vaut x + 3. Alors 2(x + x + 3) = 26, donc 4x + 6 = 26 et x = 5.'
                    ],
                    [
                        'question' => 'Deux nombres ont une somme de 30 et une différence de 8. Quel est le plus grand ?',
                        'choices' => [
                            ['choice_text' => '19', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                        ],
                        'explanation' => 'Si x est le plus grand : x + y = 30 et x - y = 8. En additionnant, 2x = 38, donc x = 19.'
                    ],
                    [
                        'question' => 'Un père a trois fois l’âge de son fils. Ensemble, ils ont 48 ans. Quel âge a le fils ?',
                        'choices' => [
                            ['choice_text' => '12 ans', 'is_correct' => true],
                            ['choice_text' => '16 ans', 'is_correct' => false],
                            ['choice_text' => '9 ans', 'is_correct' => false],
                            ['choice_text' => '8 ans', 'is_correct' => false],
                        ],
                        'explanation' => 'Si le fils a x ans, le père a 3x. Donc x + 3x = 48, soit 4x = 48 et x = 12.'
                    ],
                    [
                        'question' => 'Un prix après une réduction de 20 % est de 240 DH. Quel était le prix initial ?',
                        'choices' => [
                            ['choice_text' => '300 DH', 'is_correct' => true],
                            ['choice_text' => '288 DH', 'is_correct' => false],
                            ['choice_text' => '320 DH', 'is_correct' => false],
                            ['choice_text' => '280 DH', 'is_correct' => false],
                        ],
                        'explanation' => 'Après une réduction de 20 %, le prix représente 80 % du prix initial. Donc 240 ÷ 0,8 = 300 DH.'
                    ],
                    [
                        'question' => 'Un nombre augmenté de 15 donne son double. Quel est ce nombre ?',
                        'choices' => [
                            ['choice_text' => '15', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                        ],
                        'explanation' => 'x + 15 = 2x, donc x = 15.'
                    ],
                    [
                        'question' => 'Un taxi facture 8 DH de prise en charge puis 5 DH par kilomètre. Quel est le prix pour 6 km ?',
                        'choices' => [
                            ['choice_text' => '38 DH', 'is_correct' => true],
                            ['choice_text' => '30 DH', 'is_correct' => false],
                            ['choice_text' => '40 DH', 'is_correct' => false],
                            ['choice_text' => '35 DH', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coût est 8 + 5 × 6 = 8 + 30 = 38 DH.'
                    ],
                    [
                        'question' => 'Une classe compte 4 élèves de plus que le double d’une autre classe. Si la première classe compte 28 élèves, combien en compte la seconde ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => '28 = 2x + 4, donc 2x = 24 et x = 12.'
                    ],
                    [
                        'question' => 'Une somme de 900 DH est répartie entre deux personnes. La première reçoit 100 DH de plus que la seconde. Combien reçoit la première ?',
                        'choices' => [
                            ['choice_text' => '500 DH', 'is_correct' => true],
                            ['choice_text' => '450 DH', 'is_correct' => false],
                            ['choice_text' => '550 DH', 'is_correct' => false],
                            ['choice_text' => '400 DH', 'is_correct' => false],
                        ],
                        'explanation' => 'Soit x la part de la seconde. Alors x + (x + 100) = 900, donc 2x = 800, x = 400. La première reçoit 500 DH.'
                    ],
                ],
            ],

            [
                'title' => 'Fonctions linéaires et affines',
                'description' => 'Comprenez les fonctions linéaires et affines, leurs coefficients et leurs représentations.',
                'questions' => [
                    [
                        'question' => 'Quel est le coefficient directeur de f(x) = 3x + 2 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une fonction affine f(x) = ax + b, le coefficient directeur est a. Ici, a = 3.'
                    ],
                    [
                        'question' => 'Quelle est l’ordonnée à l’origine de f(x) = -2x + 5 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-5', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ordonnée à l’origine est la constante b dans f(x) = ax + b. Ici, b = 5.'
                    ],
                    [
                        'question' => 'Quelle est l’image de 4 par f(x) = 2x - 1 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'f(4) = 2 × 4 - 1 = 7.'
                    ],
                    [
                        'question' => 'Quel est l’antécédent de 11 par f(x) = 3x + 2 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'On cherche x tel que 3x + 2 = 11. Ainsi 3x = 9 et x = 3.'
                    ],
                    [
                        'question' => 'Quelle fonction est linéaire ?',
                        'choices' => [
                            ['choice_text' => 'f(x) = 4x', 'is_correct' => true],
                            ['choice_text' => 'f(x) = 4x + 1', 'is_correct' => false],
                            ['choice_text' => 'f(x) = x²', 'is_correct' => false],
                            ['choice_text' => 'f(x) = 4', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction linéaire est de la forme f(x) = ax, sans terme constant.'
                    ],
                    [
                        'question' => 'Une droite passe par les points (0, 2) et (3, 8). Quel est son coefficient directeur ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient directeur vaut (8 - 2)/(3 - 0) = 6/3 = 2.'
                    ],
                    [
                        'question' => 'Quelle équation correspond à une droite de pente -3 passant par (0, 4) ?',
                        'choices' => [
                            ['choice_text' => 'y = -3x + 4', 'is_correct' => true],
                            ['choice_text' => 'y = 3x + 4', 'is_correct' => false],
                            ['choice_text' => 'y = -3x - 4', 'is_correct' => false],
                            ['choice_text' => 'y = 4x - 3', 'is_correct' => false],
                        ],
                        'explanation' => 'Une droite s’écrit y = ax + b. La pente est -3 et l’ordonnée à l’origine est 4.'
                    ],
                    [
                        'question' => 'Quel est le zéro de la fonction f(x) = 2x - 6 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le zéro vérifie 2x - 6 = 0, donc x = 3.'
                    ],
                    [
                        'question' => 'Quelle affirmation est vraie pour f(x) = -5x + 1 ?',
                        'choices' => [
                            ['choice_text' => 'La fonction est décroissante', 'is_correct' => true],
                            ['choice_text' => 'La fonction est croissante', 'is_correct' => false],
                            ['choice_text' => 'La fonction est constante', 'is_correct' => false],
                            ['choice_text' => 'La fonction est linéaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient directeur est -5, donc il est négatif et la fonction est décroissante.'
                    ],
                    [
                        'question' => 'Pour f(x) = 4x - 7, quelle est la valeur de f(-2) ?',
                        'choices' => [
                            ['choice_text' => '-15', 'is_correct' => true],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'f(-2) = 4(-2) - 7 = -8 - 7 = -15.'
                    ],
                ],
            ],

            [
                'title' => 'Révision intermédiaire d’algèbre',
                'description' => 'Consolidez les notions intermédiaires d’équations, polynômes, factorisation et fonctions.',
                'questions' => [
                    [
                        'question' => 'Résolvez 4x - 7 = 13.',
                        'choices' => [
                            ['choice_text' => 'x = 5', 'is_correct' => true],
                            ['choice_text' => 'x = 4', 'is_correct' => false],
                            ['choice_text' => 'x = 6', 'is_correct' => false],
                            ['choice_text' => 'x = 3', 'is_correct' => false],
                        ],
                        'explanation' => '4x = 20, donc x = 5.'
                    ],
                    [
                        'question' => 'Factorisez x² - 16.',
                        'choices' => [
                            ['choice_text' => '(x - 4)(x + 4)', 'is_correct' => true],
                            ['choice_text' => '(x - 8)(x + 2)', 'is_correct' => false],
                            ['choice_text' => '(x - 4)²', 'is_correct' => false],
                            ['choice_text' => 'x(x - 16)', 'is_correct' => false],
                        ],
                        'explanation' => 'x² - 16 = x² - 4² = (x - 4)(x + 4).'
                    ],
                    [
                        'question' => 'Quel est le discriminant de x² + 6x + 5 = 0 ?',
                        'choices' => [
                            ['choice_text' => '16', 'is_correct' => true],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Δ = 6² - 4 × 1 × 5 = 36 - 20 = 16.'
                    ],
                    [
                        'question' => 'Quel couple résout x + y = 9 et x - y = 3 ?',
                        'choices' => [
                            ['choice_text' => 'x = 6, y = 3', 'is_correct' => true],
                            ['choice_text' => 'x = 3, y = 6', 'is_correct' => false],
                            ['choice_text' => 'x = 5, y = 4', 'is_correct' => false],
                            ['choice_text' => 'x = 7, y = 2', 'is_correct' => false],
                        ],
                        'explanation' => 'En additionnant, 2x = 12, donc x = 6 et y = 3.'
                    ],
                    [
                        'question' => 'Réduisez 3x + 2 - 5x + 7.',
                        'choices' => [
                            ['choice_text' => '-2x + 9', 'is_correct' => true],
                            ['choice_text' => '8x + 9', 'is_correct' => false],
                            ['choice_text' => '-2x + 5', 'is_correct' => false],
                            ['choice_text' => '2x + 9', 'is_correct' => false],
                        ],
                        'explanation' => '3x - 5x = -2x et 2 + 7 = 9.'
                    ],
                    [
                        'question' => 'Pour f(x) = 3x - 2, quelle est l’image de 5 ?',
                        'choices' => [
                            ['choice_text' => '13', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'f(5) = 3 × 5 - 2 = 13.'
                    ],
                    [
                        'question' => 'Résolvez 2x + 5 < 17.',
                        'choices' => [
                            ['choice_text' => 'x < 6', 'is_correct' => true],
                            ['choice_text' => 'x > 6', 'is_correct' => false],
                            ['choice_text' => 'x ≤ 6', 'is_correct' => false],
                            ['choice_text' => 'x < 11', 'is_correct' => false],
                        ],
                        'explanation' => '2x < 12, donc x < 6.'
                    ],
                    [
                        'question' => 'Quelle est la forme développée de (x + 4)² ?',
                        'choices' => [
                            ['choice_text' => 'x² + 8x + 16', 'is_correct' => true],
                            ['choice_text' => 'x² + 16', 'is_correct' => false],
                            ['choice_text' => 'x² + 4x + 16', 'is_correct' => false],
                            ['choice_text' => 'x² + 8x + 4', 'is_correct' => false],
                        ],
                        'explanation' => '(x + 4)² = x² + 2 × 4x + 16 = x² + 8x + 16.'
                    ],
                    [
                        'question' => 'Quelle est la solution de x² - 4x = 0 ?',
                        'choices' => [
                            ['choice_text' => 'x = 0 ou x = 4', 'is_correct' => true],
                            ['choice_text' => 'x = 2 uniquement', 'is_correct' => false],
                            ['choice_text' => 'x = -4 ou x = 0', 'is_correct' => false],
                            ['choice_text' => 'x = 4 uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'x² - 4x = x(x - 4), donc x = 0 ou x = 4.'
                    ],
                    [
                        'question' => 'Simplifiez (x² - 25)/(x - 5), avec x ≠ 5.',
                        'choices' => [
                            ['choice_text' => 'x + 5', 'is_correct' => true],
                            ['choice_text' => 'x - 5', 'is_correct' => false],
                            ['choice_text' => 'x + 25', 'is_correct' => false],
                            ['choice_text' => 'x² + 5', 'is_correct' => false],
                        ],
                        'explanation' => 'x² - 25 = (x - 5)(x + 5), donc l’expression se simplifie en x + 5.'
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
                    'difficulty' => 'Intermediate',
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

                // Mélange des choix avant l'attribution de l'ordre.
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