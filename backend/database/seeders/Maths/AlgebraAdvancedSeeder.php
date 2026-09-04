<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AlgebraAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'algebra')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Équations algébriques avancées',
                'description' => 'Résolvez des équations nécessitant plusieurs transformations algébriques et vérifiez rigoureusement les solutions.',
                'questions' => [
                    [
                        'question' => 'Résolvez 3(x - 2) + 4 = 2x + 9.',
                        'choices' => [
                            ['choice_text' => 'x = 11', 'is_correct' => true],
                            ['choice_text' => 'x = 7', 'is_correct' => false],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                            ['choice_text' => 'x = 13', 'is_correct' => false],
                        ],
                        'explanation' => '3x - 6 + 4 = 2x + 9, donc 3x - 2 = 2x + 9 et finalement x = 11.'
                    ],
                    [
                        'question' => 'Résolvez 5(2x - 1) - 3 = 4(x + 2).',
                        'choices' => [
                            ['choice_text' => 'x = 8/3', 'is_correct' => true],
                            ['choice_text' => 'x = 16/3', 'is_correct' => false],
                            ['choice_text' => 'x = 3/2', 'is_correct' => false],
                            ['choice_text' => 'x = 10/3', 'is_correct' => false],
                        ],
                        'explanation' => '10x - 5 - 3 = 4x + 8, donc 6x = 16 et x = 8/3.'
                    ],
                    [
                        'question' => 'Résolvez (x - 1)/2 + (x + 3)/4 = 5.',
                        'choices' => [
                            ['choice_text' => 'x = 19/3', 'is_correct' => true],
                            ['choice_text' => 'x = 17/3', 'is_correct' => false],
                            ['choice_text' => 'x = 6', 'is_correct' => false],
                            ['choice_text' => 'x = 19/4', 'is_correct' => false],
                        ],
                        'explanation' => 'En multipliant par 4, on obtient 2x - 2 + x + 3 = 20, donc 3x = 19 et x = 19/3.'
                    ],
                    [
                        'question' => 'Résolvez 2x - 3 = 4 - (x + 5).',
                        'choices' => [
                            ['choice_text' => 'x = 2/3', 'is_correct' => true],
                            ['choice_text' => 'x = 3/2', 'is_correct' => false],
                            ['choice_text' => 'x = -2/3', 'is_correct' => false],
                            ['choice_text' => 'x = 2', 'is_correct' => false],
                        ],
                        'explanation' => '4 - (x + 5) = -x - 1. Donc 2x - 3 = -x - 1, soit 3x = 2 et x = 2/3.'
                    ],
                    [
                        'question' => 'Résolvez 7 - 2(3x - 4) = 5x + 1.',
                        'choices' => [
                            ['choice_text' => 'x = 14/11', 'is_correct' => true],
                            ['choice_text' => 'x = 11/14', 'is_correct' => false],
                            ['choice_text' => 'x = 7/5', 'is_correct' => false],
                            ['choice_text' => 'x = 2', 'is_correct' => false],
                        ],
                        'explanation' => '7 - 6x + 8 = 5x + 1, donc 15 - 6x = 5x + 1, puis 14 = 11x et x = 14/11.'
                    ],
                    [
                        'question' => 'Résolvez 2(x + 1) - 3(x - 2) = 10.',
                        'choices' => [
                            ['choice_text' => 'x = -2', 'is_correct' => true],
                            ['choice_text' => 'x = 2', 'is_correct' => false],
                            ['choice_text' => 'x = -4', 'is_correct' => false],
                            ['choice_text' => 'x = 4', 'is_correct' => false],
                        ],
                        'explanation' => '2x + 2 - 3x + 6 = 10, donc -x + 8 = 10 et x = -2.'
                    ],
                    [
                        'question' => 'Résolvez 3/5 x - 2 = 7.',
                        'choices' => [
                            ['choice_text' => 'x = 15', 'is_correct' => true],
                            ['choice_text' => 'x = 25/3', 'is_correct' => false],
                            ['choice_text' => 'x = 9', 'is_correct' => false],
                            ['choice_text' => 'x = 12', 'is_correct' => false],
                        ],
                        'explanation' => '3x/5 = 9, donc 3x = 45 et x = 15.'
                    ],
                    [
                        'question' => 'Quelle équation possède une infinité de solutions ?',
                        'choices' => [
                            ['choice_text' => '4x + 7 = 4x + 7', 'is_correct' => true],
                            ['choice_text' => '4x + 7 = 4x + 9', 'is_correct' => false],
                            ['choice_text' => '4x = 7', 'is_correct' => false],
                            ['choice_text' => '4x + 1 = 2x + 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux membres sont identiques pour toute valeur de x. L’équation est donc une identité.'
                    ],
                    [
                        'question' => 'Quelle équation n’a aucune solution ?',
                        'choices' => [
                            ['choice_text' => '3x + 2 = 3x + 7', 'is_correct' => true],
                            ['choice_text' => '3x + 2 = 8', 'is_correct' => false],
                            ['choice_text' => '2x = 6', 'is_correct' => false],
                            ['choice_text' => 'x - 5 = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'En supprimant 3x, on obtient 2 = 7, ce qui est impossible.'
                    ],
                    [
                        'question' => 'Résolvez 4(x - 1) = 2(3x + 1).',
                        'choices' => [
                            ['choice_text' => 'x = -3', 'is_correct' => true],
                            ['choice_text' => 'x = 3', 'is_correct' => false],
                            ['choice_text' => 'x = -1', 'is_correct' => false],
                            ['choice_text' => 'x = 1', 'is_correct' => false],
                        ],
                        'explanation' => '4x - 4 = 6x + 2, donc -6 = 2x et x = -3.'
                    ],
                ],
            ],

            [
                'title' => 'Systèmes linéaires avancés',
                'description' => 'Analysez des systèmes linéaires, leur compatibilité et l’interprétation matricielle de leurs solutions.',
                'questions' => [
                    [
                        'question' => 'Résolvez 2x + y = 11 et x - y = 1.',
                        'choices' => [
                            ['choice_text' => 'x = 4, y = 3', 'is_correct' => true],
                            ['choice_text' => 'x = 3, y = 4', 'is_correct' => false],
                            ['choice_text' => 'x = 5, y = 1', 'is_correct' => false],
                            ['choice_text' => 'x = 2, y = 7', 'is_correct' => false],
                        ],
                        'explanation' => 'En additionnant les équations, 3x = 12, donc x = 4. Ensuite y = 3.'
                    ],
                    [
                        'question' => 'Résolvez 3x + 2y = 16 et 5x - 2y = 8.',
                        'choices' => [
                            ['choice_text' => 'x = 3, y = 7/2', 'is_correct' => true],
                            ['choice_text' => 'x = 2, y = 5', 'is_correct' => false],
                            ['choice_text' => 'x = 4, y = 2', 'is_correct' => false],
                            ['choice_text' => 'x = 3, y = 2', 'is_correct' => false],
                        ],
                        'explanation' => 'En additionnant, 8x = 24, donc x = 3. Puis 9 + 2y = 16, donc y = 7/2.'
                    ],
                    [
                        'question' => 'Quel est le déterminant de la matrice [[2, 3], [4, 5]] ?',
                        'choices' => [
                            ['choice_text' => '-2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '22', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'det = 2 × 5 - 3 × 4 = 10 - 12 = -2.'
                    ],
                    [
                        'question' => 'Que peut-on conclure si le déterminant de la matrice des coefficients d’un système 2 × 2 est non nul ?',
                        'choices' => [
                            ['choice_text' => Le système possède une solution unique', 'is_correct' => true],
                            ['choice_text' => Le système possède une infinité de solutions', 'is_correct' => false],
                            ['choice_text' => Le système n’a aucune solution', 'is_correct' => false],
                            ['choice_text' => Le système est nécessairement homogène', 'is_correct' => false],
                        ],
                        'explanation' => 'Un déterminant non nul signifie que la matrice est inversible, donc le système possède une solution unique.'
                    ],
                    [
                        'question' => 'Le système x + y = 4 et 2x + 2y = 8 possède :',
                        'choices' => [
                            ['choice_text' => 'Une infinité de solutions', 'is_correct' => true],
                            ['choice_text' => 'Une solution unique', 'is_correct' => false],
                            ['choice_text' => 'Aucune solution', 'is_correct' => false],
                            ['choice_text' => 'Deux solutions', 'is_correct' => false],
                        ],
                        'explanation' => 'La deuxième équation est le double de la première.'
                    ],
                    [
                        'question' => 'Le système x + y = 4 et 2x + 2y = 9 possède :',
                        'choices' => [
                            ['choice_text' => 'Aucune solution', 'is_correct' => true],
                            ['choice_text' => 'Une solution unique', 'is_correct' => false],
                            ['choice_text' => 'Une infinité de solutions', 'is_correct' => false],
                            ['choice_text' => 'Deux solutions', 'is_correct' => false],
                        ],
                        'explanation' => 'Le double de la première équation donnerait 2x + 2y = 8, incompatible avec 9.'
                    ],
                    [
                        'question' => 'Quel est le point d’intersection des droites y = 2x + 1 et y = -x + 7 ?',
                        'choices' => [
                            ['choice_text' => '(2, 5)', 'is_correct' => true],
                            ['choice_text' => '(3, 7)', 'is_correct' => false],
                            ['choice_text' => '(1, 3)', 'is_correct' => false],
                            ['choice_text' => '(4, 9)', 'is_correct' => false],
                        ],
                        'explanation' => '2x + 1 = -x + 7 donne 3x = 6, donc x = 2 et y = 5.'
                    ],
                    [
                        'question' => 'Si A est inversible dans Ax = b, quelle formule donne x ?',
                        'choices' => [
                            ['choice_text' => 'x = A⁻¹b', 'is_correct' => true],
                            ['choice_text' => 'x = Ab', 'is_correct' => false],
                            ['choice_text' => 'x = bA⁻¹', 'is_correct' => false],
                            ['choice_text' => 'x = A + b', 'is_correct' => false],
                        ],
                        'explanation' => 'En multipliant Ax = b à gauche par A⁻¹, on obtient x = A⁻¹b.'
                    ],
                    [
                        'question' => 'Quelle est la solution de x + 2y = 7 et 3x - 2y = 5 ?',
                        'choices' => [
                            ['choice_text' => 'x = 3, y = 2', 'is_correct' => true],
                            ['choice_text' => 'x = 2, y = 3', 'is_correct' => false],
                            ['choice_text' => 'x = 1, y = 3', 'is_correct' => false],
                            ['choice_text' => 'x = 4, y = 1', 'is_correct' => false],
                        ],
                        'explanation' => 'En additionnant, 4x = 12, donc x = 3. Puis 3 + 2y = 7, donc y = 2.'
                    ],
                    [
                        'question' => 'Quelle opération de ligne conserve l’ensemble des solutions d’un système linéaire ?',
                        'choices' => [
                            ['choice_text' => Ajouter un multiple d’une ligne à une autre', 'is_correct' => true],
                            ['choice_text' => Multiplier une ligne par zéro', 'is_correct' => false],
                            ['choice_text' => Supprimer une ligne arbitrairement', 'is_correct' => false],
                            ['choice_text' => Modifier un seul coefficient d’une ligne', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ajout d’un multiple d’une ligne à une autre est une opération élémentaire qui conserve l’équivalence du système.'
                    ],
                ],
            ],

            [
                'title' => 'Polynômes et factorisation avancée',
                'description' => 'Étudiez les racines, facteurs, identités et structures des polynômes.',
                'questions' => [
                    [
                        'question' => 'Factorisez x² - 5x + 6.',
                        'choices' => [
                            ['choice_text' => '(x - 2)(x - 3)', 'is_correct' => true],
                            ['choice_text' => '(x + 2)(x + 3)', 'is_correct' => false],
                            ['choice_text' => '(x - 1)(x - 6)', 'is_correct' => false],
                            ['choice_text' => '(x + 1)(x - 6)', 'is_correct' => false],
                        ],
                        'explanation' => 'Les nombres -2 et -3 ont pour somme -5 et produit 6.'
                    ],
                    [
                        'question' => 'Factorisez x³ - 8.',
                        'choices' => [
                            ['choice_text' => '(x - 2)(x² + 2x + 4)', 'is_correct' => true],
                            ['choice_text' => '(x + 2)(x² - 2x + 4)', 'is_correct' => false],
                            ['choice_text' => '(x - 2)(x² - 2x + 4)', 'is_correct' => false],
                            ['choice_text' => '(x - 8)(x² + 1)', 'is_correct' => false],
                        ],
                        'explanation' => 'x³ - 2³ = (x - 2)(x² + 2x + 4).'
                    ],
                    [
                        'question' => 'Si P(3) = 0, quel facteur divise P(x) ?',
                        'choices' => [
                            ['choice_text' => 'x - 3', 'is_correct' => true],
                            ['choice_text' => 'x + 3', 'is_correct' => false],
                            ['choice_text' => 'x² - 3', 'is_correct' => false],
                            ['choice_text' => '3x - 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le théorème des facteurs indique que P(3) = 0 implique que x - 3 est un facteur.'
                    ],
                    [
                        'question' => 'Quel est le reste de la division de P(x) = x³ + 2x² - x + 4 par x - 2 ?',
                        'choices' => [
                            ['choice_text' => '18', 'is_correct' => true],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'Le reste vaut P(2) = 8 + 8 - 2 + 4 = 18.'
                    ],
                    [
                        'question' => 'Quel est le degré du produit de deux polynômes de degrés 4 et 7, non nuls ?',
                        'choices' => [
                            ['choice_text' => '11', 'is_correct' => true],
                            ['choice_text' => '28', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le degré du produit est la somme des degrés : 4 + 7 = 11.'
                    ],
                    [
                        'question' => 'Quelle est la multiplicité de la racine 2 dans P(x) = (x - 2)^3(x + 1) ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur x - 2 apparaît à la puissance 3.'
                    ],
                    [
                        'question' => 'Quelle est la somme des racines de x³ - 6x² + 11x - 6 ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '-6', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'Par les relations de Viète, la somme des racines vaut 6.'
                    ],
                    [
                        'question' => 'Quel est le produit des racines de 2x³ - 5x² + x + 6 = 0 ?',
                        'choices' => [
                            ['choice_text' => '-3', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '-6', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un polynôme cubique ax³ + bx² + cx + d, le produit des racines vaut -d/a. Ici, -6/2 = -3.'
                    ],
                    [
                        'question' => 'Quelle factorisation est correcte pour x⁴ - 16 ?',
                        'choices' => [
                            ['choice_text' => '(x - 2)(x + 2)(x² + 4)', 'is_correct' => true],
                            ['choice_text' => '(x - 4)(x + 4)', 'is_correct' => false],
                            ['choice_text' => '(x - 2)²(x + 2)²', 'is_correct' => false],
                            ['choice_text' => '(x - 4)²', 'is_correct' => false],
                        ],
                        'explanation' => 'x⁴ - 16 = (x² - 4)(x² + 4) = (x - 2)(x + 2)(x² + 4).'
                    ],
                    [
                        'question' => 'Quel polynôme possède les racines 1, -2 et 4 ?',
                        'choices' => [
                            ['choice_text' => '(x - 1)(x + 2)(x - 4)', 'is_correct' => true],
                            ['choice_text' => '(x + 1)(x - 2)(x + 4)', 'is_correct' => false],
                            ['choice_text' => '(x - 1)(x - 2)(x + 4)', 'is_correct' => false],
                            ['choice_text' => '(x + 1)(x + 2)(x - 4)', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque racine r correspond au facteur x - r.'
                    ],
                ],
            ],

            [
                'title' => 'Inéquations et valeur absolue',
                'description' => 'Résolvez des inéquations linéaires, quadratiques et des problèmes faisant intervenir la valeur absolue.',
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
                        'question' => 'Résolvez -2x + 6 > 10.',
                        'choices' => [
                            ['choice_text' => 'x < -2', 'is_correct' => true],
                            ['choice_text' => 'x > -2', 'is_correct' => false],
                            ['choice_text' => 'x < 2', 'is_correct' => false],
                            ['choice_text' => 'x > 2', 'is_correct' => false],
                        ],
                        'explanation' => '-2x > 4. En divisant par -2, le sens s’inverse : x < -2.'
                    ],
                    [
                        'question' => 'Quelle est la solution de |x| < 4 ?',
                        'choices' => [
                            ['choice_text' => '-4 < x < 4', 'is_correct' => true],
                            ['choice_text' => 'x < -4 ou x > 4', 'is_correct' => false],
                            ['choice_text' => '-4 ≤ x ≤ 4', 'is_correct' => false],
                            ['choice_text' => 'x > 4', 'is_correct' => false],
                        ],
                        'explanation' => '|x| < 4 signifie que x est à moins de 4 unités de zéro.'
                    ],
                    [
                        'question' => 'Résolvez |x - 2| ≤ 3.',
                        'choices' => [
                            ['choice_text' => '-1 ≤ x ≤ 5', 'is_correct' => true],
                            ['choice_text' => '-3 ≤ x ≤ 3', 'is_correct' => false],
                            ['choice_text' => 'x ≤ 5', 'is_correct' => false],
                            ['choice_text' => 'x ≥ -1', 'is_correct' => false],
                        ],
                        'explanation' => '-3 ≤ x - 2 ≤ 3. En ajoutant 2, on obtient -1 ≤ x ≤ 5.'
                    ],
                    [
                        'question' => 'Quelle est la solution de x² < 9 ?',
                        'choices' => [
                            ['choice_text' => '-3 < x < 3', 'is_correct' => true],
                            ['choice_text' => 'x < -3 ou x > 3', 'is_correct' => false],
                            ['choice_text' => '-3 ≤ x ≤ 3', 'is_correct' => false],
                            ['choice_text' => 'x > 3', 'is_correct' => false],
                        ],
                        'explanation' => 'x² < 9 équivaut à |x| < 3, donc -3 < x < 3.'
                    ],
                    [
                        'question' => 'Quelle est la solution de x² - 5x + 6 ≤ 0 ?',
                        'choices' => [
                            ['choice_text' => '2 ≤ x ≤ 3', 'is_correct' => true],
                            ['choice_text' => 'x ≤ 2', 'is_correct' => false],
                            ['choice_text' => 'x ≥ 3', 'is_correct' => false],
                            ['choice_text' => 'x < 2 ou x > 3', 'is_correct' => false],
                        ],
                        'explanation' => '(x - 2)(x - 3) ≤ 0. Le produit est négatif ou nul entre les racines.'
                    ],
                    [
                        'question' => 'Quelle est la solution de x² - 4x > 0 ?',
                        'choices' => [
                            ['choice_text' => 'x < 0 ou x > 4', 'is_correct' => true],
                            ['choice_text' => '0 < x < 4', 'is_correct' => false],
                            ['choice_text' => 'x ≤ 0 ou x ≥ 4', 'is_correct' => false],
                            ['choice_text' => 'x > 0', 'is_correct' => false],
                        ],
                        'explanation' => 'x² - 4x = x(x - 4). Le produit est positif à l’extérieur des racines 0 et 4.'
                    ],
                    [
                        'question' => 'Résolvez |2x - 1| = 5.',
                        'choices' => [
                            ['choice_text' => 'x = 3 ou x = -2', 'is_correct' => true],
                            ['choice_text' => 'x = 2 ou x = -3', 'is_correct' => false],
                            ['choice_text' => 'x = 3 ou x = 2', 'is_correct' => false],
                            ['choice_text' => 'x = -3 ou x = -2', 'is_correct' => false],
                        ],
                        'explanation' => '2x - 1 = 5 donne x = 3, ou 2x - 1 = -5 donne x = -2.'
                    ],
                    [
                        'question' => 'Quelle est la solution de |x + 3| > 2 ?',
                        'choices' => [
                            ['choice_text' => 'x < -5 ou x > -1', 'is_correct' => true],
                            ['choice_text' => '-5 < x < -1', 'is_correct' => false],
                            ['choice_text' => 'x > -5', 'is_correct' => false],
                            ['choice_text' => 'x < -1', 'is_correct' => false],
                        ],
                        'explanation' => 'x + 3 < -2 ou x + 3 > 2, donc x < -5 ou x > -1.'
                    ],
                    [
                        'question' => 'Quelle est la solution de 2 ≤ 3x + 2 < 11 ?',
                        'choices' => [
                            ['choice_text' => '0 ≤ x < 3', 'is_correct' => true],
                            ['choice_text' => '0 < x ≤ 3', 'is_correct' => false],
                            ['choice_text' => '-2 ≤ x < 3', 'is_correct' => false],
                            ['choice_text' => 'x < 3', 'is_correct' => false],
                        ],
                        'explanation' => '0 ≤ 3x < 9, puis 0 ≤ x < 3.'
                    ],
                ],
            ],

            [
                'title' => 'Expressions rationnelles',
                'description' => 'Simplifiez et analysez les expressions rationnelles en tenant compte des valeurs interdites.',
                'questions' => [
                    [
                        'question' => 'Simplifiez (x² - 9)/(x - 3), avec x ≠ 3.',
                        'choices' => [
                            ['choice_text' => 'x + 3', 'is_correct' => true],
                            ['choice_text' => 'x - 3', 'is_correct' => false],
                            ['choice_text' => 'x² + 3', 'is_correct' => false],
                            ['choice_text' => 'x + 9', 'is_correct' => false],
                        ],
                        'explanation' => 'x² - 9 = (x - 3)(x + 3), donc le quotient se simplifie en x + 3.'
                    ],
                    [
                        'question' => 'Quelles sont les valeurs interdites dans 1/(x² - 4) ?',
                        'choices' => [
                            ['choice_text' => 'x = -2 et x = 2', 'is_correct' => true],
                            ['choice_text' => 'x = 4', 'is_correct' => false],
                            ['choice_text' => 'x = -4 et x = 4', 'is_correct' => false],
                            ['choice_text' => 'x = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'x² - 4 = 0 donne x = ±2.'
                    ],
                    [
                        'question' => 'Quelle expression est équivalente à 1/x + 1/(x + 1) ?',
                        'choices' => [
                            ['choice_text' => '(2x + 1)/(x(x + 1))', 'is_correct' => true],
                            ['choice_text' => '(2x)/(x + 1)', 'is_correct' => false],
                            ['choice_text' => '1/(2x + 1)', 'is_correct' => false],
                            ['choice_text' => '(x + 1)/x', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur commun est x(x + 1), et le numérateur devient x + 1 + x = 2x + 1.'
                    ],
                    [
                        'question' => 'Résolvez (x + 1)/(x - 1) = 2.',
                        'choices' => [
                            ['choice_text' => 'x = 3', 'is_correct' => true],
                            ['choice_text' => 'x = 2', 'is_correct' => false],
                            ['choice_text' => 'x = 1', 'is_correct' => false],
                            ['choice_text' => 'x = -3', 'is_correct' => false],
                        ],
                        'explanation' => 'x + 1 = 2x - 2, donc x = 3. Cette valeur respecte x ≠ 1.'
                    ],
                    [
                        'question' => 'Simplifiez (x² - 4)/(x + 2), avec x ≠ -2.',
                        'choices' => [
                            ['choice_text' => 'x - 2', 'is_correct' => true],
                            ['choice_text' => 'x + 2', 'is_correct' => false],
                            ['choice_text' => 'x² - 2', 'is_correct' => false],
                            ['choice_text' => 'x - 4', 'is_correct' => false],
                        ],
                        'explanation' => 'x² - 4 = (x - 2)(x + 2), donc l’expression devient x - 2.'
                    ],
                    [
                        'question' => 'Quelle est la valeur interdite dans (x + 1)/(x² - 9) ?',
                        'choices' => [
                            ['choice_text' => 'x = -3 et x = 3', 'is_correct' => true],
                            ['choice_text' => 'x = -9 et x = 9', 'is_correct' => false],
                            ['choice_text' => 'x = 1', 'is_correct' => false],
                            ['choice_text' => 'x = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur s’annule lorsque x² = 9, donc x = ±3.'
                    ],
                    [
                        'question' => 'Simplifiez (x² + 4x)/(x), avec x ≠ 0.',
                        'choices' => [
                            ['choice_text' => 'x + 4', 'is_correct' => true],
                            ['choice_text' => 'x² + 4', 'is_correct' => false],
                            ['choice_text' => '4x', 'is_correct' => false],
                            ['choice_text' => 'x + 4x', 'is_correct' => false],
                        ],
                        'explanation' => 'x² + 4x = x(x + 4), donc le quotient vaut x + 4.'
                    ],
                    [
                        'question' => 'Résolvez 1/(x - 2) = 3.',
                        'choices' => [
                            ['choice_text' => 'x = 7/3', 'is_correct' => true],
                            ['choice_text' => 'x = 5/3', 'is_correct' => false],
                            ['choice_text' => 'x = 3', 'is_correct' => false],
                            ['choice_text' => 'x = 2/3', 'is_correct' => false],
                        ],
                        'explanation' => '1 = 3(x - 2), donc 1 = 3x - 6 et x = 7/3.'
                    ],
                    [
                        'question' => 'Quelle affirmation est correcte pour (x² - 1)/(x - 1) ?',
                        'choices' => [
                            ['choice_text' => Elle vaut x + 1 pour x ≠ 1', 'is_correct' => true],
                            ['choice_text' => Elle vaut x - 1 pour tout x', 'is_correct' => false],
                            ['choice_text' => Elle est définie en x = 1', 'is_correct' => false],
                            ['choice_text' => Elle vaut x² + 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le quotient se simplifie en x + 1, mais x = 1 reste interdit dans l’expression initiale.'
                    ],
                    [
                        'question' => 'Quelle est la forme simplifiée de 2/x - 3/(2x) ?',
                        'choices' => [
                            ['choice_text' => '1/(2x)', 'is_correct' => true],
                            ['choice_text' => '5/(2x)', 'is_correct' => false],
                            ['choice_text' => '1/x', 'is_correct' => false],
                            ['choice_text' => '-1/(2x)', 'is_correct' => false],
                        ],
                        'explanation' => '2/x = 4/(2x), donc 4/(2x) - 3/(2x) = 1/(2x).'
                    ],
                ],
            ],

            [
                'title' => 'Puissances et radicaux algébriques',
                'description' => 'Manipulez les puissances, les exposants négatifs et les racines dans les expressions algébriques.',
                'questions' => [
                    [
                        'question' => 'Simplifiez x³ × x⁵.',
                        'choices' => [
                            ['choice_text' => 'x⁸', 'is_correct' => true],
                            ['choice_text' => 'x¹⁵', 'is_correct' => false],
                            ['choice_text' => '2x⁸', 'is_correct' => false],
                            ['choice_text' => 'x²', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une même base, on additionne les exposants : 3 + 5 = 8.'
                    ],
                    [
                        'question' => 'Simplifiez x⁷/x³, avec x ≠ 0.',
                        'choices' => [
                            ['choice_text' => 'x⁴', 'is_correct' => true],
                            ['choice_text' => 'x¹⁰', 'is_correct' => false],
                            ['choice_text' => 'x²', 'is_correct' => false],
                            ['choice_text' => '1/x⁴', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’une division de puissances de même base, on soustrait les exposants.'
                    ],
                    [
                        'question' => 'Quelle expression est équivalente à (x²)⁴ ?',
                        'choices' => [
                            ['choice_text' => 'x⁸', 'is_correct' => true],
                            ['choice_text' => 'x⁶', 'is_correct' => false],
                            ['choice_text' => 'x¹⁶', 'is_correct' => false],
                            ['choice_text' => '4x²', 'is_correct' => false],
                        ],
                        'explanation' => 'Une puissance d’une puissance donne x^(2×4) = x⁸.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 2⁻4 ?',
                        'choices' => [
                            ['choice_text' => '1/16', 'is_correct' => true],
                            ['choice_text' => '-16', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '1/8', 'is_correct' => false],
                        ],
                        'explanation' => '2⁻4 = 1/2⁴ = 1/16.'
                    ],
                    [
                        'question' => 'Simplifiez √72.',
                        'choices' => [
                            ['choice_text' => '6√2', 'is_correct' => true],
                            ['choice_text' => '3√8', 'is_correct' => false],
                            ['choice_text' => '8√2', 'is_correct' => false],
                            ['choice_text' => '12√2', 'is_correct' => false],
                        ],
                        'explanation' => '72 = 36 × 2, donc √72 = 6√2.'
                    ],
                    [
                        'question' => 'Pour x ≥ 0, quelle est la valeur de √(x⁴) ?',
                        'choices' => [
                            ['choice_text' => 'x²', 'is_correct' => true],
                            ['choice_text' => 'x⁴', 'is_correct' => false],
                            ['choice_text' => '2x²', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                        ],
                        'explanation' => '√(x⁴) = √((x²)²) = |x²| = x² puisque x ≥ 0.'
                    ],
                    [
                        'question' => 'Simplifiez (2x³)(3x⁴).',
                        'choices' => [
                            ['choice_text' => '6x⁷', 'is_correct' => true],
                            ['choice_text' => '5x⁷', 'is_correct' => false],
                            ['choice_text' => '6x¹²', 'is_correct' => false],
                            ['choice_text' => '5x¹²', 'is_correct' => false],
                        ],
                        'explanation' => 'On multiplie les coefficients et on additionne les exposants : 2×3 = 6 et 3+4 = 7.'
                    ],
                    [
                        'question' => 'Quelle expression est équivalente à 1/x³, avec x ≠ 0 ?',
                        'choices' => [
                            ['choice_text' => 'x⁻³', 'is_correct' => true],
                            ['choice_text' => 'x³', 'is_correct' => false],
                            ['choice_text' => '-x³', 'is_correct' => false],
                            ['choice_text' => '3x⁻¹', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition, x⁻³ = 1/x³.'
                    ],
                    [
                        'question' => 'Simplifiez √(50x²) pour x ≥ 0.',
                        'choices' => [
                            ['choice_text' => '5x√2', 'is_correct' => true],
                            ['choice_text' => '10x√5', 'is_correct' => false],
                            ['choice_text' => '25x√2', 'is_correct' => false],
                            ['choice_text' => '5x²√2', 'is_correct' => false],
                        ],
                        'explanation' => '50x² = 25 × 2 × x², donc √(50x²) = 5x√2 pour x ≥ 0.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 3² × 3⁻1 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '1/3', 'is_correct' => false],
                        ],
                        'explanation' => '3² × 3⁻1 = 3^(2-1) = 3.'
                    ],
                ],
            ],

            [
                'title' => 'Fonctions et transformations algébriques',
                'description' => 'Analysez les fonctions affines, quadratiques et rationnelles à travers leurs propriétés algébriques.',
                'questions' => [
                    [
                        'question' => 'Pour f(x) = 3x - 5, quelle est l’image de 4 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'f(4) = 3 × 4 - 5 = 7.'
                    ],
                    [
                        'question' => 'Quel est l’antécédent de 10 par f(x) = 2x + 4 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => '2x + 4 = 10 donne 2x = 6, donc x = 3.'
                    ],
                    [
                        'question' => 'Quelle est l’abscisse du sommet de f(x) = x² - 8x + 3 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'L’abscisse du sommet vaut -b/(2a) = 8/2 = 4.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de f(x) = x² - 6x + 10 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sommet est en x = 3 et f(3) = 9 - 18 + 10 = 1.'
                    ],
                    [
                        'question' => 'Quelle est la pente de la droite passant par (1, 3) et (5, 11) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'm = (11 - 3)/(5 - 1) = 8/4 = 2.'
                    ],
                    [
                        'question' => 'Quelle fonction est strictement décroissante sur R ?',
                        'choices' => [
                            ['choice_text' => 'f(x) = -4x + 7', 'is_correct' => true],
                            ['choice_text' => 'f(x) = 4x + 7', 'is_correct' => false],
                            ['choice_text' => 'f(x) = x² + 1', 'is_correct' => false],
                            ['choice_text' => 'f(x) = 7', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction affine est décroissante lorsque son coefficient directeur est négatif.'
                    ],
                    [
                        'question' => 'Quels sont les zéros de f(x) = x² - 9 ?',
                        'choices' => [
                            ['choice_text' => '-3 et 3', 'is_correct' => true],
                            ['choice_text' => '0 et 9', 'is_correct' => false],
                            ['choice_text' => '-9 et 9', 'is_correct' => false],
                            ['choice_text' => '3 uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'x² - 9 = (x - 3)(x + 3), donc x = -3 ou x = 3.'
                    ],
                    [
                        'question' => 'Quelle est l’asymptote horizontale de f(x) = (2x + 1)/(x - 3) ?',
                        'choices' => [
                            ['choice_text' => 'y = 2', 'is_correct' => true],
                            ['choice_text' => 'y = -3', 'is_correct' => false],
                            ['choice_text' => 'x = 2', 'is_correct' => false],
                            ['choice_text' => 'y = 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Les degrés sont égaux, donc l’asymptote horizontale est le rapport des coefficients dominants : y = 2.'
                    ],
                    [
                        'question' => 'Quel est le domaine de définition de f(x) = √(2x - 6) ?',
                        'choices' => [
                            ['choice_text' => x ≥ 3', 'is_correct' => true],
                            ['choice_text' => x > 3', 'is_correct' => false],
                            ['choice_text' => x ≤ 3', 'is_correct' => false],
                            ['choice_text' => x ≥ -3', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut 2x - 6 ≥ 0, donc x ≥ 3.'
                    ],
                    [
                        'question' => 'Quelle transformation donne g(x) = f(x - 2) à partir de f ?',
                        'choices' => [
                            ['choice_text' => Une translation horizontale de 2 unités vers la droite', 'is_correct' => true],
                            ['choice_text' => Une translation de 2 unités vers la gauche', 'is_correct' => false],
                            ['choice_text' => Une translation verticale de 2 unités vers le haut', 'is_correct' => false],
                            ['choice_text' => Une réflexion par rapport à l’axe des abscisses', 'is_correct' => false],
                        ],
                        'explanation' => 'Remplacer x par x - 2 décale le graphe de 2 unités vers la droite.'
                    ],
                ],
            ],

            [
                'title' => 'Matrices et algèbre linéaire appliquée',
                'description' => 'Utilisez les opérations matricielles et les propriétés des matrices dans des problèmes algébriques avancés.',
                'questions' => [
                    [
                        'question' => 'Quel est le déterminant de [[3, 2], [1, 4]] ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'det = 3 × 4 - 2 × 1 = 10.'
                    ],
                    [
                        'question' => 'Quelle est la matrice identité d’ordre 2 ?',
                        'choices' => [
                            ['choice_text' => '[[1, 0], [0, 1]]', 'is_correct' => true],
                            ['choice_text' => '[[0, 1], [1, 0]]', 'is_correct' => false],
                            ['choice_text' => '[[1, 1], [0, 1]]', 'is_correct' => false],
                            ['choice_text' => '[[0, 0], [0, 0]]', 'is_correct' => false],
                        ],
                        'explanation' => 'La matrice identité possède des 1 sur la diagonale principale et des 0 ailleurs.'
                    ],
                    [
                        'question' => 'Quel est le produit de [[2, 0], [0, 3]] par le vecteur [4, 5] ?',
                        'choices' => [
                            ['choice_text' => '[8, 15]', 'is_correct' => true],
                            ['choice_text' => '[6, 20]', 'is_correct' => false],
                            ['choice_text' => '[8, 5]', 'is_correct' => false],
                            ['choice_text' => '[4, 15]', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit vaut [2×4, 3×5] = [8, 15].'
                    ],
                    [
                        'question' => 'Si det(A) = 3 et det(B) = 4, quelle est la valeur de det(AB) ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-12', 'is_correct' => false],
                        ],
                        'explanation' => 'det(AB) = det(A)det(B) = 3 × 4 = 12.'
                    ],
                    [
                        'question' => 'Si A est une matrice 3 × 3, quelle est la relation entre det(2A) et det(A) ?',
                        'choices' => [
                            ['choice_text' => det(2A) = 8 det(A)', 'is_correct' => true],
                            ['choice_text' => 'det(2A) = 2 det(A)', 'is_correct' => false],
                            ['choice_text' => 'det(2A) = 6 det(A)', 'is_correct' => false],
                            ['choice_text' => 'det(2A) = 4 det(A)', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une matrice 3 × 3, multiplier toute la matrice par 2 multiplie le déterminant par 2³ = 8.'
                    ],
                    [
                        'question' => 'Quand une matrice carrée A est-elle inversible ?',
                        'choices' => [
                            ['choice_text' => Lorsque det(A) ≠ 0', 'is_correct' => true],
                            ['choice_text' => Lorsque det(A) = 0', 'is_correct' => false],
                            ['choice_text' => Lorsqu’elle contient un zéro', 'is_correct' => false],
                            ['choice_text' => Lorsqu’elle est toujours symétrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une matrice carrée est inversible si et seulement si son déterminant est non nul.'
                    ],
                    [
                        'question' => 'Quel est le déterminant de [[4, 2], [6, 3]] ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '-6', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'det = 4 × 3 - 2 × 6 = 0.'
                    ],
                    [
                        'question' => 'Pour une matrice diagonale, comment calcule-t-on le déterminant ?',
                        'choices' => [
                            ['choice_text' => En multipliant les coefficients diagonaux', 'is_correct' => true],
                            ['choice_text' => En les additionnant toujours', 'is_correct' => false],
                            ['choice_text' => En les soustrayant', 'is_correct' => false],
                            ['choice_text' => En multipliant tous les coefficients', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déterminant d’une matrice diagonale est le produit des coefficients de sa diagonale principale.'
                    ],
                    [
                        'question' => 'Si A⁻¹ existe, quelle relation est correcte ?',
                        'choices' => [
                            ['choice_text' => AA⁻¹ = I', 'is_correct' => true],
                            ['choice_text' => AA⁻¹ = 0', 'is_correct' => false],
                            ['choice_text' => AA⁻¹ = A', 'is_correct' => false],
                            ['choice_text' => AA⁻¹ = 2A', 'is_correct' => false],
                        ],
                        'explanation' => 'Une matrice inverse est définie par AA⁻¹ = A⁻¹A = I.'
                    ],
                    [
                        'question' => 'Quel est le déterminant de la matrice triangulaire [[2, 1, 4], [0, 3, 5], [0, 0, 6]] ?',
                        'choices' => [
                            ['choice_text' => '36', 'is_correct' => true],
                            ['choice_text' => '30', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déterminant d’une matrice triangulaire est 2 × 3 × 6 = 36.'
                    ],
                ],
            ],

            [
                'title' => 'Récurrences et suites algébriques',
                'description' => 'Analysez les suites arithmétiques, géométriques et définies par récurrence.',
                'questions' => [
                    [
                        'question' => 'Une suite arithmétique vérifie u₁ = 4 et r = 3. Quelle est u₁₂ ?',
                        'choices' => [
                            ['choice_text' => '37', 'is_correct' => true],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '34', 'is_correct' => false],
                        ],
                        'explanation' => 'u₁₂ = 4 + 11 × 3 = 37.'
                    ],
                    [
                        'question' => 'Une suite géométrique vérifie u₀ = 5 et q = 2. Quelle est u₆ ?',
                        'choices' => [
                            ['choice_text' => '320', 'is_correct' => true],
                            ['choice_text' => '160', 'is_correct' => false],
                            ['choice_text' => '640', 'is_correct' => false],
                            ['choice_text' => '120', 'is_correct' => false],
                        ],
                        'explanation' => 'u₆ = 5 × 2⁶ = 5 × 64 = 320.'
                    ],
                    [
                        'question' => 'Une suite est définie par uₙ₊₁ = uₙ + 5 et u₀ = 2. Quelle est u₇ ?',
                        'choices' => [
                            ['choice_text' => '37', 'is_correct' => true],
                            ['choice_text' => '35', 'is_correct' => false],
                            ['choice_text' => '42', 'is_correct' => false],
                            ['choice_text' => '32', 'is_correct' => false],
                        ],
                        'explanation' => 'u₇ = 2 + 7 × 5 = 37.'
                    ],
                    [
                        'question' => 'Quelle est la raison de la suite 5, 9, 13, 17, ... ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'La différence entre deux termes consécutifs est toujours 4.'
                    ],
                    [
                        'question' => 'Quelle est la raison de la suite géométrique 3, 12, 48, 192, ... ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque terme est obtenu en multipliant le précédent par 4.'
                    ],
                    [
                        'question' => 'Quelle expression donne le terme général de 2, 5, 8, 11, ... ?',
                        'choices' => [
                            ['choice_text' => 'uₙ = 2 + 3(n - 1)', 'is_correct' => true],
                            ['choice_text' => 'uₙ = 2 + 2n', 'is_correct' => false],
                            ['choice_text' => 'uₙ = 3n + 2', 'is_correct' => false],
                            ['choice_text' => 'uₙ = 5 + 3n', 'is_correct' => false],
                        ],
                        'explanation' => 'La suite est arithmétique avec premier terme 2 et raison 3.'
                    ],
                    [
                        'question' => 'Une suite vérifie uₙ₊₁ = 3uₙ et u₀ = 2. Quelle est u₄ ?',
                        'choices' => [
                            ['choice_text' => '162', 'is_correct' => true],
                            ['choice_text' => '54', 'is_correct' => false],
                            ['choice_text' => '81', 'is_correct' => false],
                            ['choice_text' => '108', 'is_correct' => false],
                        ],
                        'explanation' => 'u₄ = 2 × 3⁴ = 2 × 81 = 162.'
                    ],
                    [
                        'question' => 'La suite uₙ = 4n - 1 est-elle croissante ?',
                        'choices' => [
                            ['choice_text' => 'Oui, car sa raison est 4', 'is_correct' => true],
                            ['choice_text' => 'Non, car sa raison est -1', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'Elle est décroissante', 'is_correct' => false],
                        ],
                        'explanation' => 'uₙ₊₁ - uₙ = 4, donc la suite est strictement croissante.'
                    ],
                    [
                        'question' => 'Quelle est la somme des cinq premiers termes de la suite arithmétique 2, 5, 8, 11, 14 ?',
                        'choices' => [
                            ['choice_text' => '40', 'is_correct' => true],
                            ['choice_text' => '35', 'is_correct' => false],
                            ['choice_text' => '42', 'is_correct' => false],
                            ['choice_text' => '45', 'is_correct' => false],
                        ],
                        'explanation' => '2 + 5 + 8 + 11 + 14 = 40.'
                    ],
                    [
                        'question' => 'Quelle est la somme 1 + 2 + 4 + 8 + 16 ?',
                        'choices' => [
                            ['choice_text' => '31', 'is_correct' => true],
                            ['choice_text' => '30', 'is_correct' => false],
                            ['choice_text' => '32', 'is_correct' => false],
                            ['choice_text' => '29', 'is_correct' => false],
                        ],
                        'explanation' => '1 + 2 + 4 + 8 + 16 = 31.'
                    ],
                ],
            ],

            [
                'title' => 'Raisonnement algébrique et identités',
                'description' => 'Appliquez les identités remarquables, les factorisations et les transformations algébriques pour simplifier des problèmes.',
                'questions' => [
                    [
                        'question' => 'Développez (x + 5)².',
                        'choices' => [
                            ['choice_text' => 'x² + 10x + 25', 'is_correct' => true],
                            ['choice_text' => 'x² + 5x + 25', 'is_correct' => false],
                            ['choice_text' => 'x² + 25', 'is_correct' => false],
                            ['choice_text' => 'x² + 10x + 5', 'is_correct' => false],
                        ],
                        'explanation' => '(x + 5)² = x² + 2×5x + 25 = x² + 10x + 25.'
                    ],
                    [
                        'question' => 'Développez (2x - 3)².',
                        'choices' => [
                            ['choice_text' => '4x² - 12x + 9', 'is_correct' => true],
                            ['choice_text' => '4x² - 9', 'is_correct' => false],
                            ['choice_text' => '4x² - 6x + 9', 'is_correct' => false],
                            ['choice_text' => '2x² - 12x + 9', 'is_correct' => false],
                        ],
                        'explanation' => '(2x - 3)² = 4x² - 12x + 9.'
                    ],
                    [
                        'question' => 'Quelle expression est égale à (x + 4)(x - 4) ?',
                        'choices' => [
                            ['choice_text' => 'x² - 16', 'is_correct' => true],
                            ['choice_text' => 'x² + 16', 'is_correct' => false],
                            ['choice_text' => 'x² - 8x + 16', 'is_correct' => false],
                            ['choice_text' => 'x² + 8x + 16', 'is_correct' => false],
                        ],
                        'explanation' => 'Il s’agit d’une différence de deux carrés : x² - 4² = x² - 16.'
                    ],
                    [
                        'question' => 'Factorisez x² + 10x + 25.',
                        'choices' => [
                            ['choice_text' => '(x + 5)²', 'is_correct' => true],
                            ['choice_text' => '(x + 25)(x + 1)', 'is_correct' => false],
                            ['choice_text' => '(x - 5)²', 'is_correct' => false],
                            ['choice_text' => '(x + 10)²', 'is_correct' => false],
                        ],
                        'explanation' => 'x² + 10x + 25 = (x + 5)².'
                    ],
                    [
                        'question' => 'Simplifiez (x + 2)² - x².',
                        'choices' => [
                            ['choice_text' => '4x + 4', 'is_correct' => true],
                            ['choice_text' => '4x + 2', 'is_correct' => false],
                            ['choice_text' => '2x + 4', 'is_correct' => false],
                            ['choice_text' => 'x² + 4', 'is_correct' => false],
                        ],
                        'explanation' => 'x² + 4x + 4 - x² = 4x + 4.'
                    ],
                    [
                        'question' => 'Factorisez 3x² - 12.',
                        'choices' => [
                            ['choice_text' => '3(x - 2)(x + 2)', 'is_correct' => true],
                            ['choice_text' => '3(x - 4)(x + 1)', 'is_correct' => false],
                            ['choice_text' => '(3x - 12)(x + 1)', 'is_correct' => false],
                            ['choice_text' => '3(x - 2)²', 'is_correct' => false],
                        ],
                        'explanation' => '3x² - 12 = 3(x² - 4) = 3(x - 2)(x + 2).'
                    ],
                    [
                        'question' => 'Quel est le résultat de (x - 3)(x + 5) ?',
                        'choices' => [
                            ['choice_text' => 'x² + 2x - 15', 'is_correct' => true],
                            ['choice_text' => 'x² - 2x - 15', 'is_correct' => false],
                            ['choice_text' => 'x² + 8x - 15', 'is_correct' => false],
                            ['choice_text' => 'x² - 15', 'is_correct' => false],
                        ],
                        'explanation' => 'x² + 5x - 3x - 15 = x² + 2x - 15.'
                    ],
                    [
                        'question' => 'Quelle identité permet de transformer a² - b² ?',
                        'choices' => [
                            ['choice_text' => '(a - b)(a + b)', 'is_correct' => true],
                            ['choice_text' => '(a - b)²', 'is_correct' => false],
                            ['choice_text' => '(a + b)²', 'is_correct' => false],
                            ['choice_text' => 'a(a - b)', 'is_correct' => false],
                        ],
                        'explanation' => 'La différence de deux carrés se factorise par (a - b)(a + b).'
                    ],
                    [
                        'question' => 'Quel est le résultat de (x + 1)³ pour x = 2 ?',
                        'choices' => [
                            ['choice_text' => '27', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour x = 2, (x + 1)³ = 3³ = 27.'
                    ],
                    [
                        'question' => 'Quelle expression est toujours positive pour tout x réel ?',
                        'choices' => [
                            ['choice_text' => 'x² + 1', 'is_correct' => true],
                            ['choice_text' => 'x² - 1', 'is_correct' => false],
                            ['choice_text' => 'x - 1', 'is_correct' => false],
                            ['choice_text' => '2x - 3', 'is_correct' => false],
                        ],
                        'explanation' => 'x² ≥ 0 pour tout réel x, donc x² + 1 > 0.'
                    ],
                ],
            ],

            [
                'title' => 'Révision avancée d’algèbre',
                'description' => 'Évaluez votre maîtrise des équations, fonctions, polynômes et matrices à travers des problèmes variés.',
                'questions' => [
                    [
                        'question' => 'Résolvez x² - 7x + 10 = 0.',
                        'choices' => [
                            ['choice_text' => 'x = 2 et x = 5', 'is_correct' => true],
                            ['choice_text' => 'x = -2 et x = -5', 'is_correct' => false],
                            ['choice_text' => 'x = 1 et x = 10', 'is_correct' => false],
                            ['choice_text' => 'x = 3 et x = 4', 'is_correct' => false],
                        ],
                        'explanation' => 'x² - 7x + 10 = (x - 2)(x - 5).'
                    ],
                    [
                        'question' => 'Quelle est la somme des racines de 2x² - 8x + 3 = 0 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '3/2', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme des racines vaut -b/a = 8/2 = 4.'
                    ],
                    [
                        'question' => 'Quel est le produit des racines de 2x² - 8x + 3 = 0 ?',
                        'choices' => [
                            ['choice_text' => '3/2', 'is_correct' => true],
                            ['choice_text' => '-3/2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit des racines vaut c/a = 3/2.'
                    ],
                    [
                        'question' => 'Quel est le domaine de f(x) = 1/(x² - 1) ?',
                        'choices' => [
                            ['choice_text' => R privé de {-1, 1}', 'is_correct' => true],
                            ['choice_text' => R privé de {1}', 'is_correct' => false],
                            ['choice_text' => R privé de {-1}', 'is_correct' => false],
                            ['choice_text' => Tous les réels', 'is_correct' => false],
                        ],
                        'explanation' => 'x² - 1 = 0 pour x = -1 et x = 1.'
                    ],
                    [
                        'question' => 'Quel est le déterminant de [[5, 1], [2, 3]] ?',
                        'choices' => [
                            ['choice_text' => '13', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'det = 5 × 3 - 1 × 2 = 13.'
                    ],
                    [
                        'question' => 'Quelle est la solution de 4x - 3 = 2x + 9 ?',
                        'choices' => [
                            ['choice_text' => 'x = 6', 'is_correct' => true],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                            ['choice_text' => 'x = 7', 'is_correct' => false],
                            ['choice_text' => 'x = 3', 'is_correct' => false],
                        ],
                        'explanation' => '2x = 12, donc x = 6.'
                    ],
                    [
                        'question' => 'Quelle est la forme factorisée de x² + x - 12 ?',
                        'choices' => [
                            ['choice_text' => '(x + 4)(x - 3)', 'is_correct' => true],
                            ['choice_text' => '(x - 4)(x + 3)', 'is_correct' => false],
                            ['choice_text' => '(x + 6)(x - 2)', 'is_correct' => false],
                            ['choice_text' => '(x - 6)(x + 2)', 'is_correct' => false],
                        ],
                        'explanation' => '4 et -3 ont pour produit -12 et pour somme 1.'
                    ],
                    [
                        'question' => 'Quelle est l’image de -2 par f(x) = x² + 3x - 4 ?',
                        'choices' => [
                            ['choice_text' => '-6', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'f(-2) = 4 - 6 - 4 = -6.'
                    ],
                    [
                        'question' => 'Quelle est la solution de (x - 4)(x + 2) = 0 ?',
                        'choices' => [
                            ['choice_text' => 'x = 4 ou x = -2', 'is_correct' => true],
                            ['choice_text' => 'x = -4 ou x = 2', 'is_correct' => false],
                            ['choice_text' => 'x = 4 uniquement', 'is_correct' => false],
                            ['choice_text' => 'x = -2 uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un produit est nul si au moins un facteur est nul.'
                    ],
                    [
                        'question' => 'Quelle propriété caractérise une matrice symétrique réelle ?',
                        'choices' => [
                            ['choice_text' => A = Aᵀ', 'is_correct' => true],
                            ['choice_text' => A = -Aᵀ', 'is_correct' => false],
                            ['choice_text' => det(A) = 0', 'is_correct' => false],
                            ['choice_text' => A² = I', 'is_correct' => false],
                        ],
                        'explanation' => 'Une matrice réelle est symétrique lorsque sa transposée lui est égale.'
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
                    'difficulty' => 'Advanced',
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