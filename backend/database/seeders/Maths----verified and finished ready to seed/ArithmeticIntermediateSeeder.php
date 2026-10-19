<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArithmeticIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arithmetic')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Calculs avec fractions et décimaux',
                'description' => 'Appliquez les règles de calcul sur les fractions et les nombres décimaux dans des situations variées.',
                'questions' => [
                    [
                        'question' => 'Combien font 3/4 + 1/8 ?',
                        'choices' => [
                            ['choice_text' => '7/8', 'is_correct' => true],
                            ['choice_text' => '4/12', 'is_correct' => false],
                            ['choice_text' => '5/8', 'is_correct' => false],
                            ['choice_text' => '3/8', 'is_correct' => false],
                        ],
                        'explanation' => '3/4 = 6/8, donc 6/8 + 1/8 = 7/8.'
                    ],
                    [
                        'question' => 'Combien font 5/6 - 1/3 ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '2/3', 'is_correct' => false],
                            ['choice_text' => '4/6', 'is_correct' => false],
                            ['choice_text' => '1/3', 'is_correct' => false],
                        ],
                        'explanation' => '1/3 = 2/6, donc 5/6 - 2/6 = 3/6 = 1/2.'
                    ],
                    [
                        'question' => 'Combien font 2/3 × 9/4 ?',
                        'choices' => [
                            ['choice_text' => '3/2', 'is_correct' => true],
                            ['choice_text' => '18/7', 'is_correct' => false],
                            ['choice_text' => '11/12', 'is_correct' => false],
                            ['choice_text' => '2/3', 'is_correct' => false],
                        ],
                        'explanation' => '2/3 × 9/4 = 18/12 = 3/2.'
                    ],
                    [
                        'question' => 'Combien font 3/5 ÷ 9/10 ?',
                        'choices' => [
                            ['choice_text' => '2/3', 'is_correct' => true],
                            ['choice_text' => '3/2', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '5/9', 'is_correct' => false],
                        ],
                        'explanation' => 'Diviser par 9/10 revient à multiplier par 10/9 : 3/5 × 10/9 = 30/45 = 2/3.'
                    ],
                    [
                        'question' => 'Quelle est l’écriture décimale de 7/20 ?',
                        'choices' => [
                            ['choice_text' => '0,35', 'is_correct' => true],
                            ['choice_text' => '0,7', 'is_correct' => false],
                            ['choice_text' => '0,25', 'is_correct' => false],
                            ['choice_text' => '0,45', 'is_correct' => false],
                        ],
                        'explanation' => '7/20 = 35/100 = 0,35.'
                    ],
                    [
                        'question' => 'Combien font 4,75 + 2,8 ?',
                        'choices' => [
                            ['choice_text' => '7,55', 'is_correct' => true],
                            ['choice_text' => '6,83', 'is_correct' => false],
                            ['choice_text' => '7,45', 'is_correct' => false],
                            ['choice_text' => '8,55', 'is_correct' => false],
                        ],
                        'explanation' => '4,75 + 2,80 = 7,55.'
                    ],
                    [
                        'question' => 'Combien font 8,4 ÷ 0,7 ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '1,2', 'is_correct' => false],
                        ],
                        'explanation' => '8,4 ÷ 0,7 = 84 ÷ 7 = 12.'
                    ],
                    [
                        'question' => 'Quelle est la fraction irréductible correspondant à 0,6 ?',
                        'choices' => [
                            ['choice_text' => '3/5', 'is_correct' => true],
                            ['choice_text' => '6/5', 'is_correct' => false],
                            ['choice_text' => '1/6', 'is_correct' => false],
                            ['choice_text' => '2/3', 'is_correct' => false],
                        ],
                        'explanation' => '0,6 = 6/10 = 3/5 après simplification.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 1,25 × 4 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '4,25', 'is_correct' => false],
                            ['choice_text' => '5,25', 'is_correct' => false],
                            ['choice_text' => '4,5', 'is_correct' => false],
                        ],
                        'explanation' => '1,25 × 4 = 5.'
                    ],
                    [
                        'question' => 'Quelle fraction est la plus grande ?',
                        'choices' => [
                            ['choice_text' => '5/8', 'is_correct' => true],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '7/12', 'is_correct' => false],
                        ],
                        'explanation' => '5/8 = 0,625, tandis que 3/5 = 0,6, 1/2 = 0,5 et 7/12 ≈ 0,583.'
                    ],
                ],
            ],

            [
                'title' => 'Divisibilité, facteurs et nombres premiers',
                'description' => 'Résolvez des problèmes intermédiaires portant sur les facteurs, les nombres premiers et la divisibilité.',
                'questions' => [
                    [
                        'question' => 'Quelle est la décomposition en facteurs premiers de 84 ?',
                        'choices' => [
                            ['choice_text' => '2² × 3 × 7', 'is_correct' => true],
                            ['choice_text' => '2 × 3² × 7', 'is_correct' => false],
                            ['choice_text' => '2² × 3²', 'is_correct' => false],
                            ['choice_text' => '2 × 42', 'is_correct' => false],
                        ],
                        'explanation' => '84 = 2 × 42 = 2 × 2 × 21 = 2² × 3 × 7.'
                    ],
                    [
                        'question' => 'Quel est le PGCD de 24 et 36 ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => 'Les diviseurs communs incluent 1, 2, 3, 4, 6 et 12. Le plus grand est 12.'
                    ],
                    [
                        'question' => 'Quel est le PPCM de 6 et 8 ?',
                        'choices' => [
                            ['choice_text' => '24', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '48', 'is_correct' => false],
                        ],
                        'explanation' => '24 est le plus petit multiple commun positif de 6 et 8.'
                    ],
                    [
                        'question' => 'Le nombre 231 est-il divisible par 3 ?',
                        'choices' => [
                            ['choice_text' => 'Oui, car 2 + 3 + 1 = 6', 'is_correct' => true],
                            ['choice_text' => 'Non, car il est impair', 'is_correct' => false],
                            ['choice_text' => 'Oui, car il se termine par 1', 'is_correct' => false],
                            ['choice_text' => 'Non, car 231 est inférieur à 300', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme des chiffres de 231 vaut 6, qui est divisible par 3.'
                    ],
                    [
                        'question' => 'Quel est le plus petit nombre premier supérieur à 20 ?',
                        'choices' => [
                            ['choice_text' => '23', 'is_correct' => true],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '22', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                        ],
                        'explanation' => '21 est divisible par 3, 22 est divisible par 2 et 25 est divisible par 5. 23 est premier.'
                    ],
                    [
                        'question' => 'Combien de diviseurs positifs possède 36 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => '36 possède les diviseurs 1, 2, 3, 4, 6, 9, 12, 18 et 36, soit 9 diviseurs.'
                    ],
                    [
                        'question' => 'Quel nombre est à la fois divisible par 4 et par 6 ?',
                        'choices' => [
                            ['choice_text' => '24', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                        ],
                        'explanation' => '24 est divisible par 4 et par 6.'
                    ],
                    [
                        'question' => 'Quel est le PGCD de 45 et 60 ?',
                        'choices' => [
                            ['choice_text' => '15', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'Les diviseurs communs de 45 et 60 incluent 1, 3, 5 et 15. Le plus grand est 15.'
                    ],
                    [
                        'question' => 'Quelle affirmation est correcte concernant 97 ?',
                        'choices' => [
                            ['choice_text' => '97 est un nombre premier', 'is_correct' => true],
                            ['choice_text' => '97 est divisible par 3', 'is_correct' => false],
                            ['choice_text' => '97 est divisible par 5', 'is_correct' => false],
                            ['choice_text' => '97 est divisible par 7', 'is_correct' => false],
                        ],
                        'explanation' => '97 n’est divisible par aucun des nombres premiers inférieurs ou égaux à sa racine carrée, donc il est premier.'
                    ],
                    [
                        'question' => 'Quel est le PPCM de 9 et 12 ?',
                        'choices' => [
                            ['choice_text' => '36', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '108', 'is_correct' => false],
                        ],
                        'explanation' => 'Les multiples communs commencent à 36. Donc PPCM(9, 12) = 36.'
                    ],
                ],
            ],

            [
                'title' => 'Rapports, proportions et pourcentages',
                'description' => 'Utilisez les rapports, les proportions et les pourcentages pour résoudre des problèmes numériques.',
                'questions' => [
                    [
                        'question' => 'Un prix de 250 DH augmente de 20 %. Quel est le nouveau prix ?',
                        'choices' => [
                            ['choice_text' => '300 DH', 'is_correct' => true],
                            ['choice_text' => '270 DH', 'is_correct' => false],
                            ['choice_text' => '290 DH', 'is_correct' => false],
                            ['choice_text' => '320 DH', 'is_correct' => false],
                        ],
                        'explanation' => '20 % de 250 = 50. Le nouveau prix est donc 250 + 50 = 300 DH.'
                    ],
                    [
                        'question' => 'Un article de 400 DH bénéficie d’une réduction de 15 %. Quel est son prix après réduction ?',
                        'choices' => [
                            ['choice_text' => '340 DH', 'is_correct' => true],
                            ['choice_text' => '360 DH', 'is_correct' => false],
                            ['choice_text' => '350 DH', 'is_correct' => false],
                            ['choice_text' => '380 DH', 'is_correct' => false],
                        ],
                        'explanation' => '15 % de 400 = 60. Le prix final est 400 - 60 = 340 DH.'
                    ],
                    [
                        'question' => 'Dans une classe, le rapport garçons/filles est de 2/3. S’il y a 18 filles, combien y a-t-il de garçons ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                        ],
                        'explanation' => 'Si 3 parts correspondent à 18 filles, une part vaut 6. Les garçons représentent 2 parts, soit 12.'
                    ],
                    [
                        'question' => 'Si 5 cahiers coûtent 45 DH, combien coûtent 8 cahiers au même prix unitaire ?',
                        'choices' => [
                            ['choice_text' => '72 DH', 'is_correct' => true],
                            ['choice_text' => '64 DH', 'is_correct' => false],
                            ['choice_text' => '75 DH', 'is_correct' => false],
                            ['choice_text' => '80 DH', 'is_correct' => false],
                        ],
                        'explanation' => 'Un cahier coûte 45 ÷ 5 = 9 DH. Donc 8 × 9 = 72 DH.'
                    ],
                    [
                        'question' => 'Un nombre est augmenté de 25 % et passe à 100. Quel était le nombre initial ?',
                        'choices' => [
                            ['choice_text' => '80', 'is_correct' => true],
                            ['choice_text' => '75', 'is_correct' => false],
                            ['choice_text' => '85', 'is_correct' => false],
                            ['choice_text' => '90', 'is_correct' => false],
                        ],
                        'explanation' => 'Après une augmentation de 25 %, le résultat représente 125 % du nombre initial. 100 ÷ 1,25 = 80.'
                    ],
                    [
                        'question' => 'Une population passe de 800 à 920 personnes. Quel est le taux d’augmentation ?',
                        'choices' => [
                            ['choice_text' => '15 %', 'is_correct' => true],
                            ['choice_text' => '12 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => false],
                        ],
                        'explanation' => 'L’augmentation est de 120. 120 ÷ 800 = 0,15, soit 15 %.'
                    ],
                    [
                        'question' => 'Dans une recette, le rapport farine/sucre est de 3/2. Si 600 g de farine sont utilisés, quelle quantité de sucre faut-il ?',
                        'choices' => [
                            ['choice_text' => '400 g', 'is_correct' => true],
                            ['choice_text' => '300 g', 'is_correct' => false],
                            ['choice_text' => '450 g', 'is_correct' => false],
                            ['choice_text' => '500 g', 'is_correct' => false],
                        ],
                        'explanation' => '600 g représentent 3 parts, donc une part vaut 200 g. Le sucre représente 2 parts, soit 400 g.'
                    ],
                    [
                        'question' => 'Quel pourcentage représente 45 sur 180 ?',
                        'choices' => [
                            ['choice_text' => '25 %', 'is_correct' => true],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '30 %', 'is_correct' => false],
                            ['choice_text' => '15 %', 'is_correct' => false],
                        ],
                        'explanation' => '45 ÷ 180 = 0,25, donc 25 %.'
                    ],
                    [
                        'question' => 'Un salaire de 8 000 DH augmente de 7,5 %. Quelle est l’augmentation en valeur ?',
                        'choices' => [
                            ['choice_text' => '600 DH', 'is_correct' => true],
                            ['choice_text' => '500 DH', 'is_correct' => false],
                            ['choice_text' => '750 DH', 'is_correct' => false],
                            ['choice_text' => '800 DH', 'is_correct' => false],
                        ],
                        'explanation' => '8 000 × 0,075 = 600 DH.'
                    ],
                    [
                        'question' => 'Si 12 ouvriers réalisent un travail en 10 jours au même rythme, combien de jours faudrait-il à 6 ouvriers ?',
                        'choices' => [
                            ['choice_text' => '20 jours', 'is_correct' => true],
                            ['choice_text' => '15 jours', 'is_correct' => false],
                            ['choice_text' => '12 jours', 'is_correct' => false],
                            ['choice_text' => '5 jours', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre d’ouvriers est divisé par 2, donc le temps est multiplié par 2 : 10 × 2 = 20 jours.'
                    ],
                ],
            ],

            [
                'title' => 'Puissances et notation scientifique',
                'description' => 'Manipulez les puissances entières et les nombres écrits sous forme scientifique.',
                'questions' => [
                    [
                        'question' => 'Combien vaut 2⁵ ?',
                        'choices' => [
                            ['choice_text' => '32', 'is_correct' => true],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '64', 'is_correct' => false],
                        ],
                        'explanation' => '2⁵ = 2 × 2 × 2 × 2 × 2 = 32.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 10⁻³ ?',
                        'choices' => [
                            ['choice_text' => '0,001', 'is_correct' => true],
                            ['choice_text' => '0,01', 'is_correct' => false],
                            ['choice_text' => '0,1', 'is_correct' => false],
                            ['choice_text' => '1 000', 'is_correct' => false],
                        ],
                        'explanation' => '10⁻³ = 1/10³ = 1/1 000 = 0,001.'
                    ],
                    [
                        'question' => 'Simplifiez 2³ × 2⁴.',
                        'choices' => [
                            ['choice_text' => '2⁷', 'is_correct' => true],
                            ['choice_text' => '2¹²', 'is_correct' => false],
                            ['choice_text' => '4⁷', 'is_correct' => false],
                            ['choice_text' => '2¹', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une même base, on additionne les exposants : 2³ × 2⁴ = 2⁷.'
                    ],
                    [
                        'question' => 'Simplifiez 5⁶ ÷ 5².',
                        'choices' => [
                            ['choice_text' => '5⁴', 'is_correct' => true],
                            ['choice_text' => '5³', 'is_correct' => false],
                            ['choice_text' => '5⁸', 'is_correct' => false],
                            ['choice_text' => '25⁴', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une division de puissances de même base, on soustrait les exposants : 6 - 2 = 4.'
                    ],
                    [
                        'question' => 'Quelle est l’écriture scientifique de 4 500 000 ?',
                        'choices' => [
                            ['choice_text' => '4,5 × 10⁶', 'is_correct' => true],
                            ['choice_text' => '45 × 10⁵', 'is_correct' => false],
                            ['choice_text' => '4,5 × 10⁵', 'is_correct' => false],
                            ['choice_text' => '0,45 × 10⁶', 'is_correct' => false],
                        ],
                        'explanation' => '4 500 000 = 4,5 × 10⁶.'
                    ],
                    [
                        'question' => 'Quelle est l’écriture scientifique de 0,00072 ?',
                        'choices' => [
                            ['choice_text' => '7,2 × 10⁻⁴', 'is_correct' => true],
                            ['choice_text' => '7,2 × 10⁻³', 'is_correct' => false],
                            ['choice_text' => '72 × 10⁻⁴', 'is_correct' => false],
                            ['choice_text' => '0,72 × 10⁻⁴', 'is_correct' => false],
                        ],
                        'explanation' => '0,00072 = 7,2 × 10⁻⁴.'
                    ],
                    [
                        'question' => 'Combien vaut (3²)³ ?',
                        'choices' => [
                            ['choice_text' => '3⁶', 'is_correct' => true],
                            ['choice_text' => '3⁵', 'is_correct' => false],
                            ['choice_text' => '6³', 'is_correct' => false],
                            ['choice_text' => '3⁸', 'is_correct' => false],
                        ],
                        'explanation' => 'Une puissance d’une puissance donne 3^(2×3) = 3⁶.'
                    ],
                    [
                        'question' => 'Combien vaut 4⁰ ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '−1', 'is_correct' => false],
                        ],
                        'explanation' => 'Toute puissance de base non nulle élevée à l’exposant 0 vaut 1.'
                    ],
                    [
                        'question' => 'Quelle expression est égale à 1/8 ?',
                        'choices' => [
                            ['choice_text' => '2⁻³', 'is_correct' => true],
                            ['choice_text' => '2³', 'is_correct' => false],
                            ['choice_text' => '8⁻³', 'is_correct' => false],
                            ['choice_text' => '2⁻²', 'is_correct' => false],
                        ],
                        'explanation' => '2⁻³ = 1/2³ = 1/8.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 3 × 10⁴ + 2 × 10⁴ ?',
                        'choices' => [
                            ['choice_text' => '5 × 10⁴', 'is_correct' => true],
                            ['choice_text' => '6 × 10⁸', 'is_correct' => false],
                            ['choice_text' => '5 × 10⁸', 'is_correct' => false],
                            ['choice_text' => '3 × 10⁸', 'is_correct' => false],
                        ],
                        'explanation' => 'Les puissances de 10 sont identiques, donc on additionne les coefficients : (3 + 2) × 10⁴ = 5 × 10⁴.'
                    ],
                ],
            ],

            [
                'title' => 'Calcul littéral et valeurs numériques',
                'description' => 'Utilisez des expressions arithmétiques contenant des variables et calculez leurs valeurs numériques.',
                'questions' => [
                    [
                        'question' => 'Si x = 5, quelle est la valeur de 3x + 2 ?',
                        'choices' => [
                            ['choice_text' => '17', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'En remplaçant x par 5 : 3 × 5 + 2 = 17.'
                    ],
                    [
                        'question' => 'Si a = 4 et b = 3, quelle est la valeur de 2a + b ?',
                        'choices' => [
                            ['choice_text' => '11', 'is_correct' => true],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => '2 × 4 + 3 = 11.'
                    ],
                    [
                        'question' => 'Si x = 6, quelle est la valeur de x² - 4 ?',
                        'choices' => [
                            ['choice_text' => '32', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                        'explanation' => '6² - 4 = 36 - 4 = 32.'
                    ],
                    [
                        'question' => 'Si a = 8 et b = 2, quelle est la valeur de (a + b) ÷ 2 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => '(8 + 2) ÷ 2 = 10 ÷ 2 = 5.'
                    ],
                    [
                        'question' => 'Si x = 3 et y = 4, quelle est la valeur de x² + y² ?',
                        'choices' => [
                            ['choice_text' => '25', 'is_correct' => true],
                            ['choice_text' => '49', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                        'explanation' => '3² + 4² = 9 + 16 = 25.'
                    ],
                    [
                        'question' => 'Quelle expression représente le triple d’un nombre n augmenté de 5 ?',
                        'choices' => [
                            ['choice_text' => '3n + 5', 'is_correct' => true],
                            ['choice_text' => '3(n + 5)', 'is_correct' => false],
                            ['choice_text' => 'n + 15', 'is_correct' => false],
                            ['choice_text' => '5n + 3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le triple de n est 3n, puis on ajoute 5, ce qui donne 3n + 5.'
                    ],
                    [
                        'question' => 'Quelle expression représente la moitié d’un nombre x diminuée de 3 ?',
                        'choices' => [
                            ['choice_text' => 'x/2 - 3', 'is_correct' => true],
                            ['choice_text' => '(x - 3)/2', 'is_correct' => false],
                            ['choice_text' => '2x - 3', 'is_correct' => false],
                            ['choice_text' => 'x/(2 - 3)', 'is_correct' => false],
                        ],
                        'explanation' => 'La moitié de x est x/2, puis on diminue cette valeur de 3.'
                    ],
                    [
                        'question' => 'Si t = 10, quelle est la valeur de 100 - 4t ?',
                        'choices' => [
                            ['choice_text' => '60', 'is_correct' => true],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '96', 'is_correct' => false],
                            ['choice_text' => '50', 'is_correct' => false],
                        ],
                        'explanation' => '100 - 4 × 10 = 100 - 40 = 60.'
                    ],
                    [
                        'question' => 'Si m = 2 et n = 5, quelle est la valeur de mn + n ?',
                        'choices' => [
                            ['choice_text' => '15', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'mn + n = 2 × 5 + 5 = 15.'
                    ],
                    [
                        'question' => 'Si p = 7, quelle est la valeur de 2(p - 3) ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => '2(7 - 3) = 2 × 4 = 8.'
                    ],
                ],
            ],

            [
                'title' => 'Ordre de grandeur et arrondis',
                'description' => 'Estimez des résultats, choisissez des arrondis appropriés et contrôlez la cohérence des calculs.',
                'questions' => [
                    [
                        'question' => 'Quel est l’arrondi à l’unité de 7,6 ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '7,5', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chiffre des dixièmes est 6, donc on arrondit 7 vers le haut : 8.'
                    ],
                    [
                        'question' => 'Quel est l’arrondi au dixième de 12,46 ?',
                        'choices' => [
                            ['choice_text' => '12,5', 'is_correct' => true],
                            ['choice_text' => '12,4', 'is_correct' => false],
                            ['choice_text' => '12,6', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chiffre des centièmes est 6, donc 12,46 s’arrondit à 12,5.'
                    ],
                    [
                        'question' => 'Quel est l’arrondi au centième de 3,276 ?',
                        'choices' => [
                            ['choice_text' => '3,28', 'is_correct' => true],
                            ['choice_text' => '3,27', 'is_correct' => false],
                            ['choice_text' => '3,3', 'is_correct' => false],
                            ['choice_text' => '3,20', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chiffre des millièmes est 6, donc le centième 7 devient 8 : 3,28.'
                    ],
                    [
                        'question' => 'Quelle est la meilleure estimation de 198 × 49 ?',
                        'choices' => [
                            ['choice_text' => '10 000', 'is_correct' => true],
                            ['choice_text' => '2 000', 'is_correct' => false],
                            ['choice_text' => '20 000', 'is_correct' => false],
                            ['choice_text' => '500', 'is_correct' => false],
                        ],
                        'explanation' => '198 est proche de 200 et 49 de 50. 200 × 50 = 10 000.'
                    ],
                    [
                        'question' => 'Quelle est la meilleure estimation de 597 ÷ 19 ?',
                        'choices' => [
                            ['choice_text' => '30', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '60', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                        ],
                        'explanation' => '597 est proche de 600 et 19 de 20. 600 ÷ 20 = 30.'
                    ],
                    [
                        'question' => 'Quel résultat est le plus plausible pour 49,8 + 31,2 ?',
                        'choices' => [
                            ['choice_text' => '81', 'is_correct' => true],
                            ['choice_text' => '8,1', 'is_correct' => false],
                            ['choice_text' => '801', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => '49,8 + 31,2 = 81 exactement.'
                    ],
                    [
                        'question' => 'Quel est l’arrondi à la dizaine de 364 ?',
                        'choices' => [
                            ['choice_text' => '360', 'is_correct' => true],
                            ['choice_text' => '370', 'is_correct' => false],
                            ['choice_text' => '300', 'is_correct' => false],
                            ['choice_text' => '400', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chiffre des unités est 4, donc 364 s’arrondit à 360.'
                    ],
                    [
                        'question' => 'Quel est l’arrondi à la centaine de 1 649 ?',
                        'choices' => [
                            ['choice_text' => '1 600', 'is_correct' => true],
                            ['choice_text' => '1 700', 'is_correct' => false],
                            ['choice_text' => '1 500', 'is_correct' => false],
                            ['choice_text' => '1 650', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chiffre des dizaines est 4, donc on conserve 1 600.'
                    ],
                    [
                        'question' => 'Quel ordre de grandeur est adapté pour 7,9 × 4,1 ?',
                        'choices' => [
                            ['choice_text' => '32', 'is_correct' => true],
                            ['choice_text' => '3,2', 'is_correct' => false],
                            ['choice_text' => '320', 'is_correct' => false],
                            ['choice_text' => '0,32', 'is_correct' => false],
                        ],
                        'explanation' => '7,9 est proche de 8 et 4,1 de 4, donc 8 × 4 ≈ 32.'
                    ],
                    [
                        'question' => 'Un calcul donne 0,0042 comme résultat. Lequel est cohérent avec cet ordre de grandeur ?',
                        'choices' => [
                            ['choice_text' => 'Un nombre très inférieur à 1', 'is_correct' => true],
                            ['choice_text' => 'Un nombre proche de 4', 'is_correct' => false],
                            ['choice_text' => 'Un nombre supérieur à 100', 'is_correct' => false],
                            ['choice_text' => 'Un nombre proche de 42', 'is_correct' => false],
                        ],
                        'explanation' => '0,0042 est très inférieur à 1. C’est donc bien un très petit nombre.'
                    ],
                ],
            ],

            [
                'title' => 'Problèmes arithmétiques à plusieurs étapes',
                'description' => 'Résolvez des problèmes nécessitant plusieurs opérations et une organisation logique des calculs.',
                'questions' => [
                    [
                        'question' => 'Un magasin vend 3 articles à 120 DH chacun et accorde ensuite une réduction totale de 30 DH. Quel est le montant payé ?',
                        'choices' => [
                            ['choice_text' => '330 DH', 'is_correct' => true],
                            ['choice_text' => '360 DH', 'is_correct' => false],
                            ['choice_text' => '300 DH', 'is_correct' => false],
                            ['choice_text' => '390 DH', 'is_correct' => false],
                        ],
                        'explanation' => '3 × 120 = 360 DH, puis 360 - 30 = 330 DH.'
                    ],
                    [
                        'question' => 'Un réservoir contient 250 litres. On utilise 18 % du contenu. Combien de litres restent ?',
                        'choices' => [
                            ['choice_text' => '205 litres', 'is_correct' => true],
                            ['choice_text' => '212 litres', 'is_correct' => false],
                            ['choice_text' => '232 litres', 'is_correct' => false],
                            ['choice_text' => '195 litres', 'is_correct' => false],
                        ],
                        'explanation' => '18 % de 250 = 45 litres. Il reste donc 250 - 45 = 205 litres.'
                    ],
                    [
                        'question' => 'Une famille dépense 2/5 de son budget mensuel de 7 500 DH pour le logement. Quel montant cela représente-t-il ?',
                        'choices' => [
                            ['choice_text' => '3 000 DH', 'is_correct' => true],
                            ['choice_text' => '2 500 DH', 'is_correct' => false],
                            ['choice_text' => '3 500 DH', 'is_correct' => false],
                            ['choice_text' => '4 000 DH', 'is_correct' => false],
                        ],
                        'explanation' => '7 500 × 2/5 = 1 500 × 2 = 3 000 DH.'
                    ],
                    [
                        'question' => 'Un étudiant obtient 14, 16 et 18 aux trois premiers contrôles. Quelle note doit-il obtenir au quatrième pour avoir une moyenne de 17 ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '19', 'is_correct' => false],
                            ['choice_text' => '17', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une moyenne de 17 sur 4 notes, il faut un total de 68. Les trois premières donnent 48, donc la quatrième doit être 20.'
                    ],
                    [
                        'question' => 'Un trajet comporte 180 km. Une voiture parcourt les 2/3 du trajet le matin. Quelle distance reste-t-il à parcourir ?',
                        'choices' => [
                            ['choice_text' => '60 km', 'is_correct' => true],
                            ['choice_text' => '90 km', 'is_correct' => false],
                            ['choice_text' => '120 km', 'is_correct' => false],
                            ['choice_text' => '80 km', 'is_correct' => false],
                        ],
                        'explanation' => '2/3 de 180 = 120 km. Il reste 180 - 120 = 60 km.'
                    ],
                    [
                        'question' => 'Une entreprise possède 480 dossiers. Elle en archive 35 %, puis distribue 120 dossiers. Combien de dossiers restent-ils non archivés et non distribués ?',
                        'choices' => [
                            ['choice_text' => '192', 'is_correct' => true],
                            ['choice_text' => '168', 'is_correct' => false],
                            ['choice_text' => '240', 'is_correct' => false],
                            ['choice_text' => '288', 'is_correct' => false],
                        ],
                        'explanation' => '35 % de 480 = 168. Après archivage, il reste 312, puis 312 - 120 = 192.'
                    ],
                    [
                        'question' => 'Un article coûte 500 DH. Son prix augmente de 10 %, puis diminue de 10 %. Quel est son prix final ?',
                        'choices' => [
                            ['choice_text' => '495 DH', 'is_correct' => true],
                            ['choice_text' => '500 DH', 'is_correct' => false],
                            ['choice_text' => '505 DH', 'is_correct' => false],
                            ['choice_text' => '490 DH', 'is_correct' => false],
                        ],
                        'explanation' => 'Après +10 %, le prix est 550 DH. Une réduction de 10 % de 550 vaut 55 DH, donc le prix final est 495 DH.'
                    ],
                    [
                        'question' => 'Une classe compte 32 étudiants. Les 3/8 participent à un concours. Combien d’étudiants participent ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => '32 ÷ 8 = 4, puis 4 × 3 = 12.'
                    ],
                    [
                        'question' => 'Un train parcourt 360 km en 4 heures. À la même vitesse moyenne, combien de temps faut-il pour 540 km ?',
                        'choices' => [
                            ['choice_text' => '6 heures', 'is_correct' => true],
                            ['choice_text' => '5 heures', 'is_correct' => false],
                            ['choice_text' => '7 heures', 'is_correct' => false],
                            ['choice_text' => '8 heures', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse est de 360 ÷ 4 = 90 km/h. Pour 540 km, 540 ÷ 90 = 6 heures.'
                    ],
                    [
                        'question' => 'Une somme de 2 400 DH est partagée selon le rapport 2:3:5. Quelle est la plus grande part ?',
                        'choices' => [
                            ['choice_text' => '1 200 DH', 'is_correct' => true],
                            ['choice_text' => '720 DH', 'is_correct' => false],
                            ['choice_text' => '480 DH', 'is_correct' => false],
                            ['choice_text' => '960 DH', 'is_correct' => false],
                        ],
                        'explanation' => 'Le total des parts est 10. Une part vaut 2 400 ÷ 10 = 240 DH. La plus grande représente 5 parts : 1 200 DH.'
                    ],
                ],
            ],

            [
                'title' => 'Calculs mixtes et priorités avancées',
                'description' => 'Combinez plusieurs opérations en appliquant correctement les priorités de calcul.',
                'questions' => [
                    [
                        'question' => 'Quel est le résultat de 18 - 3 × 4 + 2 ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '62', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'On effectue d’abord 3 × 4 = 12, puis 18 - 12 + 2 = 8.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 24 ÷ 3 × 2 ?',
                        'choices' => [
                            ['choice_text' => '16', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'La division et la multiplication ont la même priorité et se calculent de gauche à droite : 24 ÷ 3 = 8, puis 8 × 2 = 16.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 5 + 18 ÷ 3 - 2 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => '18 ÷ 3 = 6, puis 5 + 6 - 2 = 9.'
                    ],
                    [
                        'question' => 'Quel est le résultat de (12 - 4) ÷ 2 + 7 ?',
                        'choices' => [
                            ['choice_text' => '11', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                        ],
                        'explanation' => '(12 - 4) = 8, puis 8 ÷ 2 = 4 et 4 + 7 = 11.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 3 × (7 - 2) + 4 ?',
                        'choices' => [
                            ['choice_text' => '19', 'is_correct' => true],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                        ],
                        'explanation' => '7 - 2 = 5, puis 3 × 5 = 15 et 15 + 4 = 19.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 40 ÷ (2 × 4) + 3 ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '23', 'is_correct' => false],
                        ],
                        'explanation' => '2 × 4 = 8, puis 40 ÷ 8 = 5, et 5 + 3 = 8.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 7² - 3 × 5 ?',
                        'choices' => [
                            ['choice_text' => '34', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '64', 'is_correct' => false],
                            ['choice_text' => '49', 'is_correct' => false],
                        ],
                        'explanation' => '7² = 49 et 3 × 5 = 15. Donc 49 - 15 = 34.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 2³ + 4 × 3 - 5 ?',
                        'choices' => [
                            ['choice_text' => '15', 'is_correct' => true],
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '19', 'is_correct' => false],
                        ],
                        'explanation' => '2³ = 8 et 4 × 3 = 12. Donc 8 + 12 - 5 = 15.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 50 - [8 + 3 × 4] ?',
                        'choices' => [
                            ['choice_text' => '30', 'is_correct' => true],
                            ['choice_text' => '34', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '42', 'is_correct' => false],
                        ],
                        'explanation' => '3 × 4 = 12, donc 8 + 12 = 20, puis 50 - 20 = 30.'
                    ],
                    [
                        'question' => 'Quel est le résultat de (6 + 2)² ÷ 4 ?',
                        'choices' => [
                            ['choice_text' => '16', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => '(6 + 2)² = 8² = 64, puis 64 ÷ 4 = 16.'
                    ],
                ],
            ],

            [
                'title' => 'Moyennes et statistiques arithmétiques',
                'description' => 'Calculez des moyennes simples et utilisez des données numériques élémentaires.',
                'questions' => [
                    [
                        'question' => 'Quelle est la moyenne de 12, 15 et 18 ?',
                        'choices' => [
                            ['choice_text' => '15', 'is_correct' => true],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                        ],
                        'explanation' => '(12 + 15 + 18) ÷ 3 = 45 ÷ 3 = 15.'
                    ],
                    [
                        'question' => 'Quelle est la moyenne de 8, 10, 12 et 14 ?',
                        'choices' => [
                            ['choice_text' => '11', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '11,5', 'is_correct' => false],
                        ],
                        'explanation' => '(8 + 10 + 12 + 14) ÷ 4 = 44 ÷ 4 = 11.'
                    ],
                    [
                        'question' => 'Un étudiant obtient 14 et 18 à deux épreuves. Quelle est sa moyenne ?',
                        'choices' => [
                            ['choice_text' => '16', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '16,5', 'is_correct' => false],
                        ],
                        'explanation' => '(14 + 18) ÷ 2 = 32 ÷ 2 = 16.'
                    ],
                    [
                        'question' => 'La moyenne de quatre nombres est 18. Quelle est leur somme ?',
                        'choices' => [
                            ['choice_text' => '72', 'is_correct' => true],
                            ['choice_text' => '54', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '90', 'is_correct' => false],
                        ],
                        'explanation' => 'Somme = moyenne × nombre de valeurs = 18 × 4 = 72.'
                    ],
                    [
                        'question' => 'La moyenne de cinq nombres est 12. Quatre d’entre eux ont une somme de 50. Quel est le cinquième nombre ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme totale doit être 5 × 12 = 60. Le cinquième vaut donc 60 - 50 = 10.'
                    ],
                    [
                        'question' => 'Quelle est l’étendue des valeurs 7, 12, 4, 15 et 9 ?',
                        'choices' => [
                            ['choice_text' => '11', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                        ],
                        'explanation' => 'L’étendue = valeur maximale - valeur minimale = 15 - 4 = 11.'
                    ],
                    [
                        'question' => 'Quelle est la médiane de 4, 7, 9, 12 et 15 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'Les valeurs sont déjà ordonnées. La valeur centrale est 9.'
                    ],
                    [
                        'question' => 'La moyenne de trois nombres est 20. Deux nombres sont 16 et 24. Quel est le troisième ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '22', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme totale doit être 60. Or 16 + 24 = 40, donc le troisième nombre est 20.'
                    ],
                    [
                        'question' => 'La moyenne de 10 et x est 17. Quelle est la valeur de x ?',
                        'choices' => [
                            ['choice_text' => '24', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => '(10 + x) ÷ 2 = 17, donc 10 + x = 34 et x = 24.'
                    ],
                    [
                        'question' => 'Les notes d’un étudiant sont 10, 12, 15 et 19. Quelle note supplémentaire lui donnerait une moyenne de 14 sur cinq notes ?',
                        'choices' => [
                            ['choice_text' => '14', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme actuelle est 56. Pour une moyenne de 14 sur 5 notes, il faut 70. La note manquante est donc 14.'
                    ],
                ],
            ],

            [
                'title' => 'Révision intermédiaire d’arithmétique',
                'description' => 'Évaluez votre maîtrise intermédiaire de l’arithmétique à travers des exercices variés.',
                'questions' => [
                    [
                        'question' => 'Combien font 3/4 + 2/3 ?',
                        'choices' => [
                            ['choice_text' => '17/12', 'is_correct' => true],
                            ['choice_text' => '5/7', 'is_correct' => false],
                            ['choice_text' => '13/12', 'is_correct' => false],
                            ['choice_text' => '7/12', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur commun est 12 : 3/4 = 9/12 et 2/3 = 8/12, donc 17/12.'
                    ],
                    [
                        'question' => 'Quel est le PGCD de 72 et 90 ?',
                        'choices' => [
                            ['choice_text' => '18', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                        'explanation' => 'Le plus grand diviseur commun de 72 et 90 est 18.'
                    ],
                    [
                        'question' => 'Un prix de 800 DH est réduit de 12,5 %. Quel est le nouveau prix ?',
                        'choices' => [
                            ['choice_text' => '700 DH', 'is_correct' => true],
                            ['choice_text' => '720 DH', 'is_correct' => false],
                            ['choice_text' => '750 DH', 'is_correct' => false],
                            ['choice_text' => '680 DH', 'is_correct' => false],
                        ],
                        'explanation' => '12,5 % de 800 = 100. Le nouveau prix est donc 800 - 100 = 700 DH.'
                    ],
                    [
                        'question' => 'Quelle est l’écriture scientifique de 0,000009 ?',
                        'choices' => [
                            ['choice_text' => '9 × 10⁻⁶', 'is_correct' => true],
                            ['choice_text' => '9 × 10⁻⁵', 'is_correct' => false],
                            ['choice_text' => '9 × 10⁻⁷', 'is_correct' => false],
                            ['choice_text' => '0,9 × 10⁻⁶', 'is_correct' => false],
                        ],
                        'explanation' => '0,000009 = 9 × 10⁻⁶.'
                    ],
                    [
                        'question' => 'Si x = 4, quelle est la valeur de 2x² - 3x + 1 ?',
                        'choices' => [
                            ['choice_text' => '21', 'is_correct' => true],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                        ],
                        'explanation' => '2 × 4² - 3 × 4 + 1 = 32 - 12 + 1 = 21.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 36 ÷ 3 + 2 × 5 ?',
                        'choices' => [
                            ['choice_text' => '22', 'is_correct' => true],
                            ['choice_text' => '70', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                        ],
                        'explanation' => '36 ÷ 3 = 12 et 2 × 5 = 10. Donc 12 + 10 = 22.'
                    ],
                    [
                        'question' => 'La moyenne de 5, 9, 13 et 17 est égale à :',
                        'choices' => [
                            ['choice_text' => '11', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => '(5 + 9 + 13 + 17) ÷ 4 = 44 ÷ 4 = 11.'
                    ],
                    [
                        'question' => 'Un nombre augmente de 20 % puis passe à 144. Quel était le nombre initial ?',
                        'choices' => [
                            ['choice_text' => '120', 'is_correct' => true],
                            ['choice_text' => '115', 'is_correct' => false],
                            ['choice_text' => '125', 'is_correct' => false],
                            ['choice_text' => '130', 'is_correct' => false],
                        ],
                        'explanation' => '144 représente 120 % du nombre initial. 144 ÷ 1,2 = 120.'
                    ],
                    [
                        'question' => 'Quel est le PPCM de 15 et 20 ?',
                        'choices' => [
                            ['choice_text' => '60', 'is_correct' => true],
                            ['choice_text' => '30', 'is_correct' => false],
                            ['choice_text' => '45', 'is_correct' => false],
                            ['choice_text' => '75', 'is_correct' => false],
                        ],
                        'explanation' => 'Les multiples communs commencent à 60, donc PPCM(15,20) = 60.'
                    ],
                    [
                        'question' => 'Une somme de 1 800 DH est divisée selon le rapport 2:4:3. Quelle est la part correspondant à 4 parts ?',
                        'choices' => [
                            ['choice_text' => '800 DH', 'is_correct' => true],
                            ['choice_text' => '600 DH', 'is_correct' => false],
                            ['choice_text' => '900 DH', 'is_correct' => false],
                            ['choice_text' => '400 DH', 'is_correct' => false],
                        ],
                        'explanation' => 'Le total est 9 parts. Une part vaut 1 800 ÷ 9 = 200 DH. Quatre parts valent donc 800 DH.'
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

                // Mélange des choix sans détacher la bonne réponse de son indicateur.
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