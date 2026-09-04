<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MathematicalFundamentalsSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'mathematical-fundamentals')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondamentaux du calcul numérique — Niveau Beginner — Quiz 1',
                'description' => 'QCM de mathématiques sur fondamentaux du calcul numérique, destiné au niveau Beginner.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle est la valeur de 7 + 5 ?',
                        'choices' => [
                            [
                                'choice_text' => '13',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '11',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'On additionne 7 et 5, ce qui donne 12.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de 18 − 9 ?',
                        'choices' => [
                            [
                                'choice_text' => '10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '9',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Soustraire 9 de 18 donne 9.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de 6 × 4 ?',
                        'choices' => [
                            [
                                'choice_text' => '28',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '22',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '20',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '24',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '6 multiplié par 4 vaut 24.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de 36 ÷ 6 ?',
                        'choices' => [
                            [
                                'choice_text' => '7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '36 divisé par 6 donne 6.',
                    ],
                    [
                        'question' => 'Quel nombre est pair ?',
                        'choices' => [
                            [
                                'choice_text' => '17',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '35',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '21',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '28',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Un nombre pair est divisible par 2 ; 28 l\'est.',
                    ],
                    [
                        'question' => 'Quel est le signe de −8 + 3 ?',
                        'choices' => [
                            [
                                'choice_text' => 'Impossible à déterminer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Positif',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Nul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Négatif',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '−8 + 3 = −5, qui est négatif.',
                    ],
                    [
                        'question' => 'Quelle fraction est équivalente à 1/2 ?',
                        'choices' => [
                            [
                                'choice_text' => '4/6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2/3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2/4',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '3/5',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Multiplier le numérateur et le dénominateur de 1/2 par 2 donne 2/4.',
                    ],
                    [
                        'question' => 'Quelle est la valeur absolue de −13 ?',
                        'choices' => [
                            [
                                'choice_text' => '−13',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '13',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '26',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La valeur absolue représente la distance à zéro : |−13| = 13.',
                    ],
                    [
                        'question' => 'Quel est le plus grand nombre ?',
                        'choices' => [
                            [
                                'choice_text' => '0,18',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,08',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,8',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '0,8 est supérieur aux trois autres nombres décimaux proposés.',
                    ],
                    [
                        'question' => 'Quel est le résultat de 3² ?',
                        'choices' => [
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '9',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '3² signifie 3 × 3, donc 9.',
                    ],
                ],
            ],
            [
                'title' => 'Fractions, décimaux et pourcentages — Niveau Beginner — Quiz 2',
                'description' => 'QCM de mathématiques sur fractions, décimaux et pourcentages, destiné au niveau Beginner.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Que représente 0,25 sous forme de fraction irréductible ?',
                        'choices' => [
                            [
                                'choice_text' => '1/2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3/4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2/5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1/4',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '0,25 = 25/100 = 1/4 après simplification.',
                    ],
                    [
                        'question' => 'Combien vaut 3/4 + 1/4 ?',
                        'choices' => [
                            [
                                'choice_text' => '1/2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3/4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5/4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Les dénominateurs sont identiques : 3/4 + 1/4 = 4/4 = 1.',
                    ],
                    [
                        'question' => 'Combien vaut 5/6 − 1/6 ?',
                        'choices' => [
                            [
                                'choice_text' => '1/3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5/6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1/2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2/3',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '5/6 − 1/6 = 4/6, qui se simplifie en 2/3.',
                    ],
                    [
                        'question' => 'Quel pourcentage correspond à 0,4 ?',
                        'choices' => [
                            [
                                'choice_text' => '40 %',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '25 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '60 %',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Pour convertir 0,4 en pourcentage, on multiplie par 100 : 40 %.',
                    ],
                    [
                        'question' => 'Quel est 20 % de 50 ?',
                        'choices' => [
                            [
                                'choice_text' => '10',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '15',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '20',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '20 % de 50 = 0,20 × 50 = 10.',
                    ],
                    [
                        'question' => 'Quelle écriture décimale correspond à 3/5 ?',
                        'choices' => [
                            [
                                'choice_text' => '0,3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,6',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '0,5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,8',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '3 ÷ 5 = 0,6.',
                    ],
                    [
                        'question' => 'Quelle fraction est la plus grande ?',
                        'choices' => [
                            [
                                'choice_text' => '3/8',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4/9',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1/2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5/8',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '5/8 = 0,625, supérieur aux trois autres fractions.',
                    ],
                    [
                        'question' => 'Une réduction de 10 % sur 80 € donne quel prix ?',
                        'choices' => [
                            [
                                'choice_text' => '74 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '72 €',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '70 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '78 €',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '10 % de 80 vaut 8 ; 80 − 8 = 72 € .',
                    ],
                    [
                        'question' => 'Quelle fraction est irréductible ?',
                        'choices' => [
                            [
                                'choice_text' => '9/12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '15/20',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3/7',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '6/8',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '3 et 7 n\'ont aucun diviseur commun supérieur à 1.',
                    ],
                    [
                        'question' => 'Quel est le résultat de 0,7 + 0,2 ?',
                        'choices' => [
                            [
                                'choice_text' => '1,2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,9',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '0,8',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '0,7 + 0,2 = 0,9.',
                    ],
                ],
            ],
            [
                'title' => 'Puissances, racines et notation scientifique — Niveau Beginner — Quiz 3',
                'description' => 'QCM de mathématiques sur puissances, racines et notation scientifique, destiné au niveau Beginner.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle est la valeur de 2³ ?',
                        'choices' => [
                            [
                                'choice_text' => '9',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '2³ = 2 × 2 × 2 = 8.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de 10² ?',
                        'choices' => [
                            [
                                'choice_text' => '50',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1000',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '100',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '20',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '10² = 10 × 10 = 100.',
                    ],
                    [
                        'question' => 'Quelle est la racine carrée de 49 ?',
                        'choices' => [
                            [
                                'choice_text' => '9',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '7',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '7 × 7 = 49, donc √49 = 7.',
                    ],
                    [
                        'question' => 'Que vaut 5⁰ ?',
                        'choices' => [
                            [
                                'choice_text' => '−1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '0',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Toute puissance d\'un nombre non nul à l\'exposant 0 vaut 1.',
                    ],
                    [
                        'question' => 'Quelle expression est équivalente à 3 × 3 × 3 × 3 ?',
                        'choices' => [
                            [
                                'choice_text' => '4³',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3³',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3⁴',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le facteur 3 apparaît quatre fois, donc on écrit 3⁴.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de √81 ?',
                        'choices' => [
                            [
                                'choice_text' => '10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '9',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '9 × 9 = 81.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de 4² + 3² ?',
                        'choices' => [
                            [
                                'choice_text' => '25',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '49',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '24',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '14',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '4² + 3² = 16 + 9 = 25.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de 2⁵ ?',
                        'choices' => [
                            [
                                'choice_text' => '16',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '64',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '32',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '25',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '2⁵ = 2 × 2 × 2 × 2 × 2 = 32.',
                    ],
                    [
                        'question' => 'Quelle expression donne l\'inverse de 10 ?',
                        'choices' => [
                            [
                                'choice_text' => '−10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1/10',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '100',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'inverse de 10 est 1/10.',
                    ],
                    [
                        'question' => 'Quel nombre a pour carré 36 parmi les positifs proposés ?',
                        'choices' => [
                            [
                                'choice_text' => '7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '6² = 36.',
                    ],
                ],
            ],
            [
                'title' => 'Ratios, proportions et variations — Niveau Beginner — Quiz 4',
                'description' => 'QCM de mathématiques sur ratios, proportions et variations, destiné au niveau Beginner.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Si 2 cahiers coûtent 6 €, combien coûtent 5 cahiers au même prix unitaire ?',
                        'choices' => [
                            [
                                'choice_text' => '12 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '15 €',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '20 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '18 €',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un cahier coûte 3 € ; 5 × 3 = 15 € .',
                    ],
                    [
                        'question' => 'Dans la proportion 3/5 = x/10, quelle est la valeur de x ?',
                        'choices' => [
                            [
                                'choice_text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'En multipliant 3/5 par 10, on obtient x = 6.',
                    ],
                    [
                        'question' => 'Un ratio 2:3 signifie que, sur 5 parts, combien correspondent à la première quantité ?',
                        'choices' => [
                            [
                                'choice_text' => '3 parts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5 parts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2 parts',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '1 part',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le ratio 2:3 contient 2 parts pour la première quantité et 3 pour la seconde.',
                    ],
                    [
                        'question' => 'Si 4 litres de peinture couvrent 20 m², combien 1 litre couvre-t-il ?',
                        'choices' => [
                            [
                                'choice_text' => '10 m²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4 m²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '16 m²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5 m²',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '20 ÷ 4 = 5 m² par litre.',
                    ],
                    [
                        'question' => 'Une recette pour 4 personnes utilise 300 g de farine. Combien faut-il pour 8 personnes ?',
                        'choices' => [
                            [
                                'choice_text' => '450 g',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '600 g',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '500 g',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '900 g',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le nombre de personnes double, donc la quantité double : 600 g.',
                    ],
                    [
                        'question' => 'Quelle relation décrit une situation de proportionnalité ?',
                        'choices' => [
                            [
                                'choice_text' => 'y = 3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'y = 3x',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'y = x + 3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'y = x² + 3',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Dans y = 3x, y est obtenu en multipliant toujours x par la même constante 3.',
                    ],
                    [
                        'question' => 'Si 15 % d\'une quantité vaut 30, quelle est la quantité totale ?',
                        'choices' => [
                            [
                                'choice_text' => '150',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '300',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '180',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '200',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '0,15 × quantité = 30, donc quantité = 30 ÷ 0,15 = 200.',
                    ],
                    [
                        'question' => 'Un objet passe de 50 € à 60 €. Quel est le taux d\'augmentation ?',
                        'choices' => [
                            [
                                'choice_text' => '25 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '20 %',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '15 %',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'augmentation est de 10 € ; 10/50 = 0,20, soit 20 %.',
                    ],
                    [
                        'question' => 'Si 3 kg de pommes coûtent 7,50 €, quel est le prix de 1 kg ?',
                        'choices' => [
                            [
                                'choice_text' => '3,50 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2,50 €',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '3 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2 €',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '7,50 ÷ 3 = 2,50 € par kilogramme.',
                    ],
                    [
                        'question' => 'Une carte à l\'échelle 1:100 000 indique 3 cm. Quelle distance réelle cela représente-t-il ?',
                        'choices' => [
                            [
                                'choice_text' => '3 km',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '300 m',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '30 km',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '300 km',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '1 cm représente 100 000 cm = 1 km, donc 3 cm représentent 3 km.',
                    ],
                ],
            ],
            [
                'title' => 'Unités et mesures — Niveau Beginner — Quiz 5',
                'description' => 'QCM de mathématiques sur unités et mesures, destiné au niveau Beginner.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Combien de mètres y a-t-il dans 3 km ?',
                        'choices' => [
                            [
                                'choice_text' => '300 m',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '300 000 m',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3 000 m',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '30 000 m',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '1 km = 1 000 m, donc 3 km = 3 000 m.',
                    ],
                    [
                        'question' => 'Combien de centimètres y a-t-il dans 2,5 m ?',
                        'choices' => [
                            [
                                'choice_text' => '2 500 cm',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '25 cm',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '205 cm',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '250 cm',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '1 m = 100 cm, donc 2,5 m = 250 cm.',
                    ],
                    [
                        'question' => 'Quelle unité est la plus adaptée pour mesurer une masse de 5 000 g ?',
                        'choices' => [
                            [
                                'choice_text' => 'm²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'kg',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'mm',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '5 000 g correspondent à 5 kg ; le kilogramme est une unité de masse adaptée.',
                    ],
                    [
                        'question' => 'Combien de minutes représentent 2 h 30 ?',
                        'choices' => [
                            [
                                'choice_text' => '150 minutes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '120 minutes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '130 minutes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '180 minutes',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '2 heures = 120 minutes ; 120 + 30 = 150.',
                    ],
                    [
                        'question' => 'Quel est le périmètre d\'un carré de côté 6 cm ?',
                        'choices' => [
                            [
                                'choice_text' => '24 cm',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '18 cm',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '36 cm',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12 cm',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le périmètre d\'un carré est 4 × côté : 4 × 6 = 24 cm.',
                    ],
                    [
                        'question' => 'Quelle est l\'aire d\'un rectangle de 8 cm sur 3 cm ?',
                        'choices' => [
                            [
                                'choice_text' => '24 cm²',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '22 cm²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '48 cm²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '11 cm²',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Aire = longueur × largeur = 8 × 3 = 24 cm².',
                    ],
                    [
                        'question' => 'Combien de litres y a-t-il dans 2 000 mL ?',
                        'choices' => [
                            [
                                'choice_text' => '20 L',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '200 L',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,2 L',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2 L',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '1 L = 1 000 mL, donc 2 000 mL = 2 L.',
                    ],
                    [
                        'question' => 'Quelle conversion est correcte ?',
                        'choices' => [
                            [
                                'choice_text' => '1 m² = 100 000 cm²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1 m² = 100 cm²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1 m² = 10 000 cm²',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '1 m² = 1 000 cm²',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Comme 1 m = 100 cm, alors 1 m² = 100² = 10 000 cm².',
                    ],
                    [
                        'question' => 'Quelle unité mesure une longueur ?',
                        'choices' => [
                            [
                                'choice_text' => 'seconde',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'litre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'mètre',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'gramme',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le mètre est une unité de longueur.',
                    ],
                    [
                        'question' => 'Un angle droit mesure combien de degrés ?',
                        'choices' => [
                            [
                                'choice_text' => '45°',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '90°',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '180°',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '60°',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Par définition, un angle droit mesure 90°.',
                    ],
                ],
            ],
            [
                'title' => 'Ensembles et logique élémentaire — Niveau Beginner — Quiz 6',
                'description' => 'QCM de mathématiques sur ensembles et logique élémentaire, destiné au niveau Beginner.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Si A = {1,2,3} et B = {3,4,5}, quel est A ∩ B ?',
                        'choices' => [
                            [
                                'choice_text' => '{1,2}',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '{3}',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '{1,2,3,4,5}',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '{4,5}',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'intersection contient les éléments communs aux deux ensembles ; seul 3 est commun.',
                    ],
                    [
                        'question' => 'Si A = {1,2} et B = {2,3}, quel est A ∪ B ?',
                        'choices' => [
                            [
                                'choice_text' => '{2}',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '{1,2,3}',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '{1,2}',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '{1,3}',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'union rassemble tous les éléments présents dans au moins un des deux ensembles.',
                    ],
                    [
                        'question' => 'Quelle proposition est toujours vraie pour deux ensembles disjoints ?',
                        'choices' => [
                            [
                                'choice_text' => 'Ils ont exactement deux éléments communs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Leur union est vide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Leur intersection est vide',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils sont égaux',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Des ensembles disjoints n\'ont aucun élément commun, donc leur intersection est ∅.',
                    ],
                    [
                        'question' => 'Si P est vraie et Q est fausse, quelle est la valeur de P ET Q ?',
                        'choices' => [
                            [
                                'choice_text' => 'Fausse',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Vraie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Indéterminée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Toujours vraie',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une conjonction ET est vraie seulement lorsque les deux propositions sont vraies.',
                    ],
                    [
                        'question' => 'Si P est vraie et Q est fausse, quelle est la valeur de P OU Q ?',
                        'choices' => [
                            [
                                'choice_text' => 'Indéterminée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Vraie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Fausse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Impossible à calculer',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une disjonction OU est vraie lorsqu\'au moins une des propositions est vraie.',
                    ],
                    [
                        'question' => 'Quel est le complément de l\'ensemble des élèves présents dans l\'ensemble de tous les élèves ?',
                        'choices' => [
                            [
                                'choice_text' => 'Les professeurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tous les élèves',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les élèves absents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les élèves présents',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le complément regroupe les éléments du référentiel qui ne sont pas dans l\'ensemble considéré.',
                    ],
                    [
                        'question' => 'Quel symbole signifie « appartient à » ?',
                        'choices' => [
                            [
                                'choice_text' => '∪',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '⊂',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '≠',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '∈',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Le symbole ∈ indique qu\'un élément appartient à un ensemble.',
                    ],
                    [
                        'question' => 'Quel symbole signifie « sous-ensemble de » ?',
                        'choices' => [
                            [
                                'choice_text' => '⊂',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '∈',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '≈',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '∩',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'A ⊂ B signifie que A est un sous-ensemble de B.',
                    ],
                    [
                        'question' => 'Si une proposition est vraie, que vaut sa négation ?',
                        'choices' => [
                            [
                                'choice_text' => 'Fausse',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Inconnue',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Vraie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Toujours vraie',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La négation inverse la valeur de vérité de la proposition.',
                    ],
                    [
                        'question' => 'Quel est le cardinal de {a,b,c,d} ?',
                        'choices' => [
                            [
                                'choice_text' => '3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '0',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le cardinal correspond au nombre d\'éléments distincts : il y en a 4.',
                    ],
                ],
            ],
            [
                'title' => 'Ordre, estimation et approximation — Niveau Beginner — Quiz 7',
                'description' => 'QCM de mathématiques sur ordre, estimation et approximation, destiné au niveau Beginner.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quel nombre est le plus proche de 50 ?',
                        'choices' => [
                            [
                                'choice_text' => '47',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '44',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '49,8',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '52,5',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '49,8 est à seulement 0,2 de 50, ce qui est la plus petite distance proposée.',
                    ],
                    [
                        'question' => 'Quelle valeur est la meilleure approximation de √10 ?',
                        'choices' => [
                            [
                                'choice_text' => '4,16',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2,16',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5,16',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3,16',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '√10 ≈ 3,162, donc 3,16 est une bonne approximation.',
                    ],
                    [
                        'question' => 'Quel est l\'ordre croissant correct ?',
                        'choices' => [
                            [
                                'choice_text' => '1 < 0,75 < 0,5 < 0,2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,2 < 0,5 < 0,75 < 1',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '0,5 < 0,2 < 1 < 0,75',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,75 < 0,2 < 0,5 < 1',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'On compare les nombres décimaux de leur plus petite à leur plus grande valeur.',
                    ],
                    [
                        'question' => 'Quel est le résultat arrondi à l\'unité de 7,6 ?',
                        'choices' => [
                            [
                                'choice_text' => '7,5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '9',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '7,6 est plus proche de 8 que de 7.',
                    ],
                    [
                        'question' => 'Quel est le résultat arrondi au dixième de 3,24 ?',
                        'choices' => [
                            [
                                'choice_text' => '3,24',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3,2',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '3,1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3,3',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le chiffre des centièmes est 4, donc le dixième reste 2.',
                    ],
                    [
                        'question' => 'Quel est l\'ordre décroissant correct ?',
                        'choices' => [
                            [
                                'choice_text' => '10 > 3 > 7 > 1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10 > 7 > 3 > 1',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '7 > 10 > 3 > 1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1 > 3 > 7 > 10',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'ordre décroissant va du plus grand au plus petit.',
                    ],
                    [
                        'question' => 'Quelle estimation est raisonnable pour 49 × 21 ?',
                        'choices' => [
                            [
                                'choice_text' => 'Environ 100 000',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Environ 10 000',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Environ 1 000',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Environ 100',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '49 × 21 est proche de 50 × 20 = 1 000.',
                    ],
                    [
                        'question' => 'Quelle expression donne une valeur supérieure à 1 ?',
                        'choices' => [
                            [
                                'choice_text' => '0,3 + 0,4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1 + 0,2',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '0,8 + 0,1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,2 × 3',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '1 + 0,2 = 1,2, qui est supérieur à 1.',
                    ],
                    [
                        'question' => 'Quel intervalle contient 3,7 ?',
                        'choices' => [
                            [
                                'choice_text' => '[3, 4]',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '[0,3]',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '[1,2]',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '[4,5]',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '3,7 est compris entre 3 et 4, bornes incluses.',
                    ],
                    [
                        'question' => 'Combien de chiffres significatifs possède 0,0045 ?',
                        'choices' => [
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Les zéros initiaux ne sont pas significatifs ; 4 et 5 constituent deux chiffres significatifs.',
                    ],
                ],
            ],
            [
                'title' => 'Résolution de problèmes élémentaires — Niveau Beginner — Quiz 8',
                'description' => 'QCM de mathématiques sur résolution de problèmes élémentaires, destiné au niveau Beginner.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Un étudiant obtient 12, 15 et 18. Quelle est sa moyenne arithmétique ?',
                        'choices' => [
                            [
                                'choice_text' => '16',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '14',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '15',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '17',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '(12 + 15 + 18) ÷ 3 = 45 ÷ 3 = 15.',
                    ],
                    [
                        'question' => 'Un nombre augmenté de 7 vaut 20. Quel est ce nombre ?',
                        'choices' => [
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '14',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '27',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '13',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'On résout x + 7 = 20, donc x = 13.',
                    ],
                    [
                        'question' => 'Un rectangle a une longueur de 10 cm et une largeur de 4 cm. Quel est son aire ?',
                        'choices' => [
                            [
                                'choice_text' => '28 cm²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '40 cm²',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '80 cm²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '14 cm²',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Aire = 10 × 4 = 40 cm².',
                    ],
                    [
                        'question' => 'Une somme de 120 € est partagée également entre 6 personnes. Combien reçoit chacune ?',
                        'choices' => [
                            [
                                'choice_text' => '24 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '15 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '18 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '20 €',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '120 ÷ 6 = 20 € par personne.',
                    ],
                    [
                        'question' => 'Une voiture parcourt 180 km en 3 h. Quelle est sa vitesse moyenne ?',
                        'choices' => [
                            [
                                'choice_text' => '45 km/h',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '50 km/h',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '60 km/h',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '90 km/h',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Vitesse = distance ÷ temps = 180 ÷ 3 = 60 km/h.',
                    ],
                    [
                        'question' => 'Si x = 4, quelle est la valeur de 2x + 3 ?',
                        'choices' => [
                            [
                                'choice_text' => '10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '11',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '2 × 4 + 3 = 8 + 3 = 11.',
                    ],
                    [
                        'question' => 'Un réservoir contient 80 L et perd 15 L. Combien reste-t-il ?',
                        'choices' => [
                            [
                                'choice_text' => '95 L',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '70 L',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '65 L',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '55 L',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '80 − 15 = 65 L.',
                    ],
                    [
                        'question' => 'Un prix de 200 € augmente de 5 %. Quel est le nouveau prix ?',
                        'choices' => [
                            [
                                'choice_text' => '205 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '210 €',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '215 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '220 €',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '5 % de 200 = 10, donc le nouveau prix est 210 €.',
                    ],
                    [
                        'question' => 'Deux angles complémentaires mesurent 35° et x. Quelle est x ?',
                        'choices' => [
                            [
                                'choice_text' => '45°',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '65°',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '145°',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '55°',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Des angles complémentaires ont une somme de 90° : x = 90 − 35 = 55°.',
                    ],
                    [
                        'question' => 'Un nombre est divisible par 5. Quel chiffre peut terminer son écriture décimale ?',
                        'choices' => [
                            [
                                'choice_text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '7',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un entier divisible par 5 se termine par 0 ou 5 ; parmi les propositions, 0 convient.',
                    ],
                ],
            ],
            [
                'title' => 'Priorités opératoires et expressions — Niveau Intermediate — Quiz 1',
                'description' => 'QCM de mathématiques sur priorités opératoires et expressions, destiné au niveau Intermediate.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quelle est la valeur de 3 + 4 × 2 ?',
                        'choices' => [
                            [
                                'choice_text' => '11',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '14',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '16',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La multiplication est prioritaire : 4 × 2 = 8, puis 3 + 8 = 11.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de (3 + 4) × 2 ?',
                        'choices' => [
                            [
                                'choice_text' => '10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '11',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '18',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '14',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Les parenthèses sont calculées d\'abord : (3 + 4) × 2 = 7 × 2 = 14.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de 18 ÷ 3 + 2 ?',
                        'choices' => [
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'La division précède l\'addition : 18 ÷ 3 = 6, puis 6 + 2 = 8.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de 2(5 − 3) + 4 ?',
                        'choices' => [
                            [
                                'choice_text' => '10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '5 − 3 = 2, puis 2 × 2 + 4 = 8.',
                    ],
                    [
                        'question' => 'Quelle expression est égale à 4(2x + 3) ?',
                        'choices' => [
                            [
                                'choice_text' => '8x + 3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6x + 12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4x + 6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8x + 12',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'On distribue 4 : 4×2x + 4×3 = 8x + 12.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de |−7| + |3| ?',
                        'choices' => [
                            [
                                'choice_text' => '10',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '−4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '|−7| = 7 et |3| = 3 ; leur somme vaut 10.',
                    ],
                    [
                        'question' => 'Quel résultat obtient-on avec 5 − 2(3 − 7) ?',
                        'choices' => [
                            [
                                'choice_text' => '13',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '9',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '17',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '3 − 7 = −4 ; 2(−4) = −8 ; 5 − (−8) = 13.',
                    ],
                    [
                        'question' => 'Quelle fraction correspond à 1,25 ?',
                        'choices' => [
                            [
                                'choice_text' => '4/5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5/4',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '3/2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1/4',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '1,25 = 125/100 = 5/4.',
                    ],
                    [
                        'question' => 'Quelle valeur de x vérifie 3x − 5 = 16 ?',
                        'choices' => [
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '7',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '9',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '3x = 21, donc x = 7.',
                    ],
                    [
                        'question' => 'Quelle valeur de x vérifie 2(x + 4) = 18 ?',
                        'choices' => [
                            [
                                'choice_text' => '7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'x + 4 = 9, donc x = 5.',
                    ],
                ],
            ],
            [
                'title' => 'Divisibilité et théorie élémentaire des nombres — Niveau Intermediate — Quiz 2',
                'description' => 'QCM de mathématiques sur divisibilité et théorie élémentaire des nombres, destiné au niveau Intermediate.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quel est le plus grand diviseur commun de 18 et 24 ?',
                        'choices' => [
                            [
                                'choice_text' => '9',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les diviseurs communs sont 1, 2, 3 et 6 ; le plus grand est 6.',
                    ],
                    [
                        'question' => 'Quel est le plus petit multiple commun non nul de 6 et 8 ?',
                        'choices' => [
                            [
                                'choice_text' => '48',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '36',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '24',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '18',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les multiples communs commencent à 24.',
                    ],
                    [
                        'question' => 'Le nombre 91 est-il premier ?',
                        'choices' => [
                            [
                                'choice_text' => 'Non, car 91 = 7 × 13',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Non, car 91 = 9 × 10 + 1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Oui, car il n\'est divisible que par 1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Oui, car il est impair',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '91 possède les diviseurs 7 et 13, donc il n\'est pas premier.',
                    ],
                    [
                        'question' => 'Quel reste obtient-on en divisant 47 par 5 ?',
                        'choices' => [
                            [
                                'choice_text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '47 = 5 × 9 + 2, donc le reste est 2.',
                    ],
                    [
                        'question' => 'Quel nombre est divisible par 3 ?',
                        'choices' => [
                            [
                                'choice_text' => '2 545',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2 541',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2 543',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2 542',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La somme des chiffres de 2 541 est 12, multiple de 3.',
                    ],
                    [
                        'question' => 'Quelle décomposition en facteurs premiers est correcte pour 60 ?',
                        'choices' => [
                            [
                                'choice_text' => '2² × 3 × 5',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2 × 5²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2 × 3 × 10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2³ × 3',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '60 = 4 × 3 × 5 = 2² × 3 × 5.',
                    ],
                    [
                        'question' => 'Si un entier est pair, son carré est-il pair ?',
                        'choices' => [
                            [
                                'choice_text' => 'Non, jamais',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement s\'il est supérieur à 10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement s\'il est positif',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Oui, toujours',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Si n = 2k, alors n² = 4k², qui est pair.',
                    ],
                    [
                        'question' => 'Quel est le PGCD de 45 et 75 ?',
                        'choices' => [
                            [
                                'choice_text' => '10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '15',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '25',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '45 = 3×15 et 75 = 5×15 ; le PGCD est 15.',
                    ],
                    [
                        'question' => 'Quel est le PPCM de 9 et 12 ?',
                        'choices' => [
                            [
                                'choice_text' => '36',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '48',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '24',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '18',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le plus petit multiple commun positif de 9 et 12 est 36.',
                    ],
                    [
                        'question' => 'Quel chiffre doit remplacer □ pour que 4□2 soit divisible par 3 ?',
                        'choices' => [
                            [
                                'choice_text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'La somme des chiffres vaut 6 + □ ; avec □ = 3, elle vaut 9, multiple de 3.',
                    ],
                ],
            ],
            [
                'title' => 'Pourcentages composés et ratios — Niveau Intermediate — Quiz 3',
                'description' => 'QCM de mathématiques sur pourcentages composés et ratios, destiné au niveau Intermediate.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Un prix de 100 € augmente de 20 %. Quel est le nouveau prix ?',
                        'choices' => [
                            [
                                'choice_text' => '125 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '120 €',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '118 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '110 €',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '20 % de 100 vaut 20 ; le nouveau prix est 120 €.',
                    ],
                    [
                        'question' => 'Après une réduction de 20 %, 160 € devient combien ?',
                        'choices' => [
                            [
                                'choice_text' => '128 €',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '140 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '136 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '130 €',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '160 × 0,80 = 128 €.',
                    ],
                    [
                        'question' => 'Une quantité augmente de 10 % puis de 10 %. Le taux global d\'augmentation est de combien ?',
                        'choices' => [
                            [
                                'choice_text' => '21 %',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '22 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '19 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '20 %',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '1,10 × 1,10 = 1,21, soit une hausse globale de 21 %.',
                    ],
                    [
                        'question' => 'Dans un groupe, le ratio filles:garçons est 3:2. Sur 25 personnes, combien sont des filles ?',
                        'choices' => [
                            [
                                'choice_text' => '18',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '15',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Il y a 5 parts ; 25 ÷ 5 = 5 par part, donc 3×5 = 15 filles.',
                    ],
                    [
                        'question' => 'Si 40 % d\'une quantité vaut 72, quelle est cette quantité ?',
                        'choices' => [
                            [
                                'choice_text' => '172',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '180',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '160',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '200',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '0,40x = 72, donc x = 72/0,40 = 180.',
                    ],
                    [
                        'question' => 'Une valeur passe de 80 à 68. Quel est le taux de diminution ?',
                        'choices' => [
                            [
                                'choice_text' => '14 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '20 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '15 %',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'La baisse est de 12 ; 12/80 = 0,15, soit 15 %.',
                    ],
                    [
                        'question' => 'Un mélange contient eau:sirop = 4:1. Quelle part du mélange est du sirop ?',
                        'choices' => [
                            [
                                'choice_text' => '1/4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1/5',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '4/5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3/5',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le total est 5 parts, dont 1 de sirop : 1/5.',
                    ],
                    [
                        'question' => 'Une remise de 25 % sur 240 € représente combien ?',
                        'choices' => [
                            [
                                'choice_text' => '80 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '50 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '60 €',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '40 €',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '0,25 × 240 = 60 €.',
                    ],
                    [
                        'question' => 'Un salaire de 2 000 € augmente de 5 %. Quel montant obtient-on ?',
                        'choices' => [
                            [
                                'choice_text' => '2 200 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2 050 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2 100 €',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2 150 €',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '5 % de 2 000 = 100 ; nouveau salaire 2 100 €.',
                    ],
                    [
                        'question' => 'Une population de 5 000 habitants diminue de 8 %. Combien reste-t-il d\'habitants ?',
                        'choices' => [
                            [
                                'choice_text' => '4 400',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4 600',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '4 500',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4 800',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '8 % de 5 000 = 400 ; 5 000 − 400 = 4 600.',
                    ],
                ],
            ],
            [
                'title' => 'Géométrie et mesures — Niveau Intermediate — Quiz 4',
                'description' => 'QCM de mathématiques sur géométrie et mesures, destiné au niveau Intermediate.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quel est l\'aire d\'un triangle de base 10 cm et de hauteur 6 cm ?',
                        'choices' => [
                            [
                                'choice_text' => '16 cm²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '36 cm²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '60 cm²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '30 cm²',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Aire = (base × hauteur)/2 = 10×6/2 = 30 cm².',
                    ],
                    [
                        'question' => 'Un cercle de rayon 4 cm a une circonférence de quelle forme ?',
                        'choices' => [
                            [
                                'choice_text' => '8π cm',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '12π cm',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4π cm',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '16π cm',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La circonférence vaut 2πr = 2π×4 = 8π cm.',
                    ],
                    [
                        'question' => 'Un triangle rectangle a pour côtés de l\'angle droit 6 et 8. Quelle est l\'hypoténuse ?',
                        'choices' => [
                            [
                                'choice_text' => '14',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '16',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Par Pythagore, c² = 6² + 8² = 100, donc c = 10.',
                    ],
                    [
                        'question' => 'Quel est le complément d\'un angle de 37° ?',
                        'choices' => [
                            [
                                'choice_text' => '43°',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '63°',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '143°',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '53°',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Deux angles complémentaires ont une somme de 90° : 90 − 37 = 53°.',
                    ],
                    [
                        'question' => 'Quel est le supplément d\'un angle de 115° ?',
                        'choices' => [
                            [
                                'choice_text' => '245°',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '55°',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '65°',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '75°',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Deux angles supplémentaires ont une somme de 180° : 180 − 115 = 65°.',
                    ],
                    [
                        'question' => 'Quel est le volume d\'un pavé droit 3 × 4 × 5 ?',
                        'choices' => [
                            [
                                'choice_text' => '60',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '45',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '20',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'V = longueur × largeur × hauteur = 3×4×5 = 60 unités cubiques.',
                    ],
                    [
                        'question' => 'Deux droites perpendiculaires forment des angles de combien ?',
                        'choices' => [
                            [
                                'choice_text' => '60°',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '180°',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '45°',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '90°',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'La perpendicularité signifie que l\'angle formé est droit, donc 90°.',
                    ],
                    [
                        'question' => 'Dans un triangle, les angles sont 50° et 60°. Quel est le troisième ?',
                        'choices' => [
                            [
                                'choice_text' => '90°',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '70°',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '80°',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '60°',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La somme des angles d\'un triangle vaut 180° : 180 − 110 = 70°.',
                    ],
                    [
                        'question' => 'Quel est le périmètre d\'un rectangle de longueur 9 et largeur 5 ?',
                        'choices' => [
                            [
                                'choice_text' => '14',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '28',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '45',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '18',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'P = 2(9+5) = 28.',
                    ],
                    [
                        'question' => 'Si deux triangles ont leurs trois côtés correspondants proportionnels, ils sont...',
                        'choices' => [
                            [
                                'choice_text' => 'toujours rectangles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'nécessairement équilatéraux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'toujours isocèles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'semblables',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'La proportionnalité des trois côtés correspondants est un critère de similitude.',
                    ],
                ],
            ],
            [
                'title' => 'Repérage et coordonnées — Niveau Intermediate — Quiz 5',
                'description' => 'QCM de mathématiques sur repérage et coordonnées, destiné au niveau Intermediate.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Quelle est la distance entre (0,0) et (3,4) ?',
                        'choices' => [
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Distance = √(3²+4²) = √25 = 5.',
                    ],
                    [
                        'question' => 'Le point (−2,5) appartient à quel quadrant ?',
                        'choices' => [
                            [
                                'choice_text' => 'I',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'III',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'IV',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'II',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'x est négatif et y positif : le point est dans le deuxième quadrant.',
                    ],
                    [
                        'question' => 'Quelle est l\'abscisse du point (−4,7) ?',
                        'choices' => [
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '−4',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '−7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '7',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'abscisse correspond à la première coordonnée x.',
                    ],
                    [
                        'question' => 'Quelle est l\'ordonnée du point (3,−2) ?',
                        'choices' => [
                            [
                                'choice_text' => '−3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '−2',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'ordonnée correspond à la deuxième coordonnée y.',
                    ],
                    [
                        'question' => 'Quel est le milieu de A(2,4) et B(6,8) ?',
                        'choices' => [
                            [
                                'choice_text' => '(3,6)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '(2,2)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '(4,6)',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '(8,12)',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le milieu est ((2+6)/2,(4+8)/2) = (4,6).',
                    ],
                    [
                        'question' => 'Quelle est la pente de la droite passant par (1,2) et (3,6) ?',
                        'choices' => [
                            [
                                'choice_text' => '3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '1',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'm = (6−2)/(3−1) = 4/2 = 2.',
                    ],
                    [
                        'question' => 'Quelle équation décrit une droite horizontale passant par y = 5 ?',
                        'choices' => [
                            [
                                'choice_text' => 'x = 5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'y = x + 5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'y = 5',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'x + y = 5',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une droite horizontale garde une ordonnée constante.',
                    ],
                    [
                        'question' => 'Quelle équation représente l\'axe des abscisses ?',
                        'choices' => [
                            [
                                'choice_text' => 'y = 0',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'x = 1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x = 0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'y = 1',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Tous les points de l\'axe des abscisses ont une ordonnée nulle.',
                    ],
                    [
                        'question' => 'Quelle est la pente d\'une droite verticale ?',
                        'choices' => [
                            [
                                'choice_text' => 'Non définie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '−1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une droite verticale a une variation de x nulle ; sa pente n\'est donc pas définie.',
                    ],
                    [
                        'question' => 'Si y = 2x + 1, quelle est y pour x = 3 ?',
                        'choices' => [
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '7',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'y = 2×3 + 1 = 7.',
                    ],
                ],
            ],
            [
                'title' => 'Fonctions et variations — Niveau Intermediate — Quiz 6',
                'description' => 'QCM de mathématiques sur fonctions et variations, destiné au niveau Intermediate.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Pour f(x)=3x−2, quelle est f(4) ?',
                        'choices' => [
                            [
                                'choice_text' => '8',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '14',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'f(4)=3×4−2=10.',
                    ],
                    [
                        'question' => 'Quel ensemble contient les valeurs de sortie d\'une fonction ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le domaine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L\'image',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le noyau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le graphe',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'image d\'une fonction est l\'ensemble des valeurs prises par f(x).',
                    ],
                    [
                        'question' => 'Quel ensemble contient les valeurs autorisées de x ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le domaine de définition',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le codomaine uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L\'image',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le maximum',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le domaine de définition regroupe les entrées pour lesquelles la fonction est définie.',
                    ],
                    [
                        'question' => 'La fonction f(x)=x² est-elle paire ?',
                        'choices' => [
                            [
                                'choice_text' => 'Oui',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Seulement pour x>0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement pour x<0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Non',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'f(−x)=(−x)²=x²=f(x), donc elle est paire.',
                    ],
                    [
                        'question' => 'La fonction f(x)=x³ est-elle paire ?',
                        'choices' => [
                            [
                                'choice_text' => 'Oui, elle est paire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Non, elle est impaire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle est constante',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle n\'est ni paire ni impaire',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'f(−x)=−x³=−f(x), donc la fonction est impaire.',
                    ],
                    [
                        'question' => 'Quelle est la pente de f(x)=−4x+7 ?',
                        'choices' => [
                            [
                                'choice_text' => '7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '−4',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '−7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Dans y = mx+b, m est le coefficient de x : ici m = −4.',
                    ],
                    [
                        'question' => 'Pour f(x)=x+5, quelle valeur de x donne f(x)=12 ?',
                        'choices' => [
                            [
                                'choice_text' => '7',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '17',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'x + 5 = 12, donc x = 7.',
                    ],
                    [
                        'question' => 'Une fonction croissante augmente lorsque x...',
                        'choices' => [
                            [
                                'choice_text' => 'reste constant',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'diminue toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'devient nul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'augmente',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Par définition, une fonction croissante prend des valeurs plus grandes lorsque l\'entrée augmente.',
                    ],
                    [
                        'question' => 'Le graphe de y = |x| est symétrique par rapport à...',
                        'choices' => [
                            [
                                'choice_text' => 'l\'origine uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'l\'axe des abscisses',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'l\'axe des ordonnées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la droite y=x+1',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '|−x| = |x|, donc le graphe est symétrique par rapport à l\'axe vertical.',
                    ],
                    [
                        'question' => 'Si f(x)=2x², quelle est f(−3) ?',
                        'choices' => [
                            [
                                'choice_text' => '−18',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '18',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'f(−3)=2×(−3)²=2×9=18.',
                    ],
                ],
            ],
            [
                'title' => 'Suites et récurrence élémentaire — Niveau Intermediate — Quiz 7',
                'description' => 'QCM de mathématiques sur suites et récurrence élémentaire, destiné au niveau Intermediate.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Dans la suite 2,5,8,11,... quel est le terme suivant ?',
                        'choices' => [
                            [
                                'choice_text' => '14',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '13',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '15',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'On ajoute 3 à chaque terme, donc 11 + 3 = 14.',
                    ],
                    [
                        'question' => 'La suite 3,6,12,24,... est multipliée à chaque fois par...',
                        'choices' => [
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '3',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Chaque terme est le double du précédent.',
                    ],
                    [
                        'question' => 'Pour une suite arithmétique de premier terme 4 et de raison 3, quel est u4 ?',
                        'choices' => [
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '16',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '13',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'u4 = 4 + 3×3 = 13.',
                    ],
                    [
                        'question' => 'Pour une suite géométrique de premier terme 2 et de raison 3, quel est u3 ?',
                        'choices' => [
                            [
                                'choice_text' => '24',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '9',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '18',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'u3 = 2×3² = 18.',
                    ],
                    [
                        'question' => 'Quel est le terme suivant de 1, 4, 9, 16, ... ?',
                        'choices' => [
                            [
                                'choice_text' => '36',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '24',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '20',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '25',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Ce sont les carrés 1², 2², 3², 4² ; le suivant est 5²=25.',
                    ],
                    [
                        'question' => 'Une suite arithmétique a u1=10 et r=−2. Quel est u5 ?',
                        'choices' => [
                            [
                                'choice_text' => '2',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '−2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'u5 = 10 + 4×(−2) = 2.',
                    ],
                    [
                        'question' => 'Quelle formule décrit une suite arithmétique de premier terme u1 et raison r ?',
                        'choices' => [
                            [
                                'choice_text' => 'u_n = u1×r^(n−1)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'u_n = n(u1+r)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'u_n = u1 + nr²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'u_n = u1 + (n−1)r',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'C\'est la formule explicite d\'une suite arithmétique.',
                    ],
                    [
                        'question' => 'Quelle formule décrit une suite géométrique de premier terme u1 et raison q ?',
                        'choices' => [
                            [
                                'choice_text' => 'u_n = u1 + (n−1)q',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'u_n = u1 × q^(n−1)',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'u_n = u1q + n',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'u_n = n u1 q',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'C\'est la formule explicite d\'une suite géométrique.',
                    ],
                    [
                        'question' => 'Une suite constante est une suite dont la raison arithmétique vaut...',
                        'choices' => [
                            [
                                'choice_text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '−1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Ajouter 0 ne change jamais le terme ; une suite arithmétique de raison 0 est constante.',
                    ],
                    [
                        'question' => 'Si u_n = 2n + 1, quel est u5 ?',
                        'choices' => [
                            [
                                'choice_text' => '11',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '9',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'u5 = 2×5 + 1 = 11.',
                    ],
                ],
            ],
            [
                'title' => 'Probabilité et statistique élémentaires — Niveau Intermediate — Quiz 8',
                'description' => 'QCM de mathématiques sur probabilité et statistique élémentaires, destiné au niveau Intermediate.',
                'difficulty' => 'Intermediate',
                'questions' => [
                    [
                        'question' => 'Une pièce équilibrée est lancée une fois. Probabilité d\'obtenir pile ?',
                        'choices' => [
                            [
                                'choice_text' => '1/3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2/3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1/2',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '1/4',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les deux issues sont équiprobables : P(pile)=1/2.',
                    ],
                    [
                        'question' => 'Un dé équilibré à six faces est lancé. Probabilité d\'obtenir 6 ?',
                        'choices' => [
                            [
                                'choice_text' => '1/3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1/5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1/6',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '1/2',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une seule face favorable sur six donne 1/6.',
                    ],
                    [
                        'question' => 'Quelle est la moyenne de 4, 6 et 8 ?',
                        'choices' => [
                            [
                                'choice_text' => '18',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '(4+6+8)/3 = 18/3 = 6.',
                    ],
                    [
                        'question' => 'Quelle est la médiane de 2, 5, 7, 9, 12 ?',
                        'choices' => [
                            [
                                'choice_text' => '7',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '9',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La liste est ordonnée et la valeur centrale est 7.',
                    ],
                    [
                        'question' => 'Quel est le mode de 2,3,3,4,5 ?',
                        'choices' => [
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '3 apparaît deux fois, plus que les autres valeurs.',
                    ],
                    [
                        'question' => 'Quelle est l\'étendue de 4, 9, 12, 15 ?',
                        'choices' => [
                            [
                                'choice_text' => '9',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '19',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '11',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Étendue = maximum − minimum = 15 − 4 = 11.',
                    ],
                    [
                        'question' => 'Si deux événements sont incompatibles, leur intersection est...',
                        'choices' => [
                            [
                                'choice_text' => 'certaine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'vide',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'de probabilité 1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'égale à l\'un des événements',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Des événements incompatibles ne peuvent pas se produire simultanément.',
                    ],
                    [
                        'question' => 'La somme des probabilités de toutes les issues d\'une expérience complète vaut...',
                        'choices' => [
                            [
                                'choice_text' => '0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '100',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '−1',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une probabilité totale sur l\'ensemble des issues vaut 1, soit 100 %.',
                    ],
                    [
                        'question' => 'Quelle mesure est la plus sensible à une valeur extrême ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le mode',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La valeur minimale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La moyenne',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La médiane',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La moyenne utilise toutes les valeurs et est fortement influencée par les valeurs extrêmes.',
                    ],
                    [
                        'question' => 'Dans une série triée, le premier quartile Q1 correspond approximativement à...',
                        'choices' => [
                            [
                                'choice_text' => '50 % des observations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10 % des observations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '25 % des observations',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '75 % des observations',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Q1 est le quantile à 25 %, tandis que la médiane est à 50 %.',
                    ],
                ],
            ],
            [
                'title' => 'Raisonnement numérique avancé — Niveau Advanced — Quiz 1',
                'description' => 'QCM de mathématiques sur raisonnement numérique avancé, destiné au niveau Advanced.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Pour a > 0, b > 0 et a < b, quelle comparaison est toujours vraie ?',
                        'choices' => [
                            [
                                'choice_text' => '1/a < 1/b',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a² < 0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a+b < 0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1/a > 1/b',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'La fonction inverse décroît sur les réels strictement positifs.',
                    ],
                    [
                        'question' => 'Si x + 1/x ≥ 2 pour x>0, pour quelle valeur a-t-on égalité ?',
                        'choices' => [
                            [
                                'choice_text' => 'x = 1',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'x = 2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x = 0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x = −1',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'x + 1/x − 2 = (x−1)²/x ; pour x>0, l\'égalité impose x=1.',
                    ],
                    [
                        'question' => 'Si |x−3|<2, quel intervalle décrit x ?',
                        'choices' => [
                            [
                                'choice_text' => '1 < x < 5',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '1 < x < 3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3 < x < 5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '−2 < x < 2',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '|x−3|<2 signifie −2<x−3<2, donc 1<x<5.',
                    ],
                    [
                        'question' => 'Pour x réel, que vaut |x|² ?',
                        'choices' => [
                            [
                                'choice_text' => 'x',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x²',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2x',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '|x|',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le carré de la valeur absolue est égal au carré du nombre : |x|²=x².',
                    ],
                    [
                        'question' => 'Si n² est impair pour un entier n, alors n est...',
                        'choices' => [
                            [
                                'choice_text' => 'nul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'premier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'impair',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'pair',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le carré d\'un entier pair est pair ; donc si n² est impair, n doit être impair.',
                    ],
                    [
                        'question' => 'Quel est le signe de (−2)^5 ?',
                        'choices' => [
                            [
                                'choice_text' => 'Nul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Négatif',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Dépend de l\'exposant',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Positif',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une puissance impaire conserve le signe négatif.',
                    ],
                    [
                        'question' => 'Pour a≠0, b≠0, quelle règle est correcte ?',
                        'choices' => [
                            [
                                'choice_text' => '(ab)⁻¹ = a⁻¹b⁻¹',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '(ab)⁻¹ = a+b',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '(ab)⁻¹ = ab',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '(ab)⁻¹ = a⁻¹+b⁻¹',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'inverse d\'un produit est le produit des inverses.',
                    ],
                    [
                        'question' => 'Quel est l\'ordre de grandeur de 0,0048 × 10⁶ ?',
                        'choices' => [
                            [
                                'choice_text' => '4,8 × 10³',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '4,8 × 10⁶',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4,8 × 10²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4,8 × 10⁹',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '0,0048 = 4,8×10⁻³ ; multiplié par 10⁶ donne 4,8×10³.',
                    ],
                    [
                        'question' => 'Si 3^x = 81, quelle est x ?',
                        'choices' => [
                            [
                                'choice_text' => '3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '27',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '81 = 3⁴, donc x=4.',
                    ],
                    [
                        'question' => 'Si log10(x)=3, quelle est x ?',
                        'choices' => [
                            [
                                'choice_text' => '10 000',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '30',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '100',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1 000',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'log10(x)=3 signifie x=10³=1 000.',
                    ],
                ],
            ],
            [
                'title' => 'Équations, inéquations et systèmes — Niveau Advanced — Quiz 2',
                'description' => 'QCM de mathématiques sur équations, inéquations et systèmes, destiné au niveau Advanced.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Résoudre 2x−3 > 7 donne...',
                        'choices' => [
                            [
                                'choice_text' => 'x < 5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x > 2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x > 5',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'x ≥ 5',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '2x>10, donc x>5 après division par 2 positif.',
                    ],
                    [
                        'question' => 'Résoudre −3x + 6 ≥ 0 donne...',
                        'choices' => [
                            [
                                'choice_text' => 'x < 2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x ≥ −2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x ≥ 2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x ≤ 2',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '−3x≥−6 ; en divisant par −3, le sens de l\'inégalité s\'inverse : x≤2.',
                    ],
                    [
                        'question' => 'Le système x+y=10 et x−y=2 a pour solution...',
                        'choices' => [
                            [
                                'choice_text' => '(4,6)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '(8,2)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '(6,4)',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '(5,5)',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'En additionnant les équations, 2x=12 donc x=6 puis y=4.',
                    ],
                    [
                        'question' => 'Quel est le discriminant de x²−4x+3 ?',
                        'choices' => [
                            [
                                'choice_text' => '−4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '16',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '7',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Δ=b²−4ac=(−4)²−4×1×3=4.',
                    ],
                    [
                        'question' => 'Une équation quadratique de discriminant nul possède...',
                        'choices' => [
                            [
                                'choice_text' => 'une racine réelle double',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'trois racines réelles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'aucune solution réelle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'deux racines réelles distinctes',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Quand Δ=0, les deux racines se confondent.',
                    ],
                    [
                        'question' => 'Quelle condition rend la fraction (x+1)/(x−2) définie ?',
                        'choices' => [
                            [
                                'choice_text' => 'x < 2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x ≠ 2',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'x ≠ −1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x > 2',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le dénominateur ne doit jamais être nul, donc x−2≠0.',
                    ],
                    [
                        'question' => 'Pour x>0, résoudre √x = 5 donne...',
                        'choices' => [
                            [
                                'choice_text' => 'x = 5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x = 25',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'x = 125',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x = 10',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'En élevant au carré, x=25, qui vérifie bien l\'équation.',
                    ],
                    [
                        'question' => 'Le système 2x+4y=6 et x+2y=3 est...',
                        'choices' => [
                            [
                                'choice_text' => 'sans variable',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'dépendant (une infinité de solutions)',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'à solution unique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'impossible',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les deux équations sont équivalentes : la seconde multipliée par 2 donne la première.',
                    ],
                    [
                        'question' => 'Si |2x−1|=5, quelles sont les solutions ?',
                        'choices' => [
                            [
                                'choice_text' => 'x=5 ou x=−5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x=1 ou x=−1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x=2 ou x=−3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x=3 ou x=−2',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'On résout 2x−1=5 ou 2x−1=−5, donnant x=3 ou x=−2.',
                    ],
                    [
                        'question' => 'La solution de 1/x > 0 sur les réels est...',
                        'choices' => [
                            [
                                'choice_text' => 'x ≠ 0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x > 0',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'x < 0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'tous les réels',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '1 est positif, donc 1/x a le signe de x ; il faut x>0.',
                    ],
                ],
            ],
            [
                'title' => 'Géométrie euclidienne et analytique — Niveau Advanced — Quiz 3',
                'description' => 'QCM de mathématiques sur géométrie euclidienne et analytique, destiné au niveau Advanced.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Dans un triangle, la longueur d\'un côté est-elle strictement inférieure à la somme des deux autres ?',
                        'choices' => [
                            [
                                'choice_text' => 'Oui',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Seulement dans un triangle isocèle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Non, jamais',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement dans un triangle rectangle',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'C\'est l\'inégalité triangulaire.',
                    ],
                    [
                        'question' => 'Deux vecteurs non nuls sont orthogonaux lorsque leur produit scalaire est...',
                        'choices' => [
                            [
                                'choice_text' => '−1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'leur norme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Deux vecteurs sont orthogonaux si et seulement si leur produit scalaire est nul.',
                    ],
                    [
                        'question' => 'Quelle équation décrit un cercle de centre (2,−1) et de rayon 3 ?',
                        'choices' => [
                            [
                                'choice_text' => '(x−2)²+(y+1)²=9',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'x²+y²=9',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '(x−2)²+(y−1)²=3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '(x+2)²+(y−1)²=9',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La forme est (x−a)²+(y−b)²=r².',
                    ],
                    [
                        'question' => 'Deux droites de pentes m1 et m2 sont perpendiculaires si, lorsqu\'elles sont définies, ...',
                        'choices' => [
                            [
                                'choice_text' => 'm1m2=1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'm1=m2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'm1m2 = −1',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'm1+m2=−1',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Pour deux droites non verticales perpendiculaires, le produit des pentes vaut −1.',
                    ],
                    [
                        'question' => 'Quel est le produit scalaire de (1,2) et (3,4) ?',
                        'choices' => [
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '11',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '14',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '1×3 + 2×4 = 3+8=11.',
                    ],
                    [
                        'question' => 'La distance d\'un point à une droite est mesurée selon une direction...',
                        'choices' => [
                            [
                                'choice_text' => 'parallèle à la droite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'perpendiculaire à la droite',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'arbitraire uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'tangentielle',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La plus courte distance est portée par la perpendiculaire.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, si sin(θ)=3/5 pour un angle aigu θ, que vaut cos(θ) ?',
                        'choices' => [
                            [
                                'choice_text' => '5/3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4/5',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '3/4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2/5',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Dans un triangle 3-4-5, si le côté opposé vaut 3 et l\'hypoténuse 5, l\'adjacent vaut 4.',
                    ],
                    [
                        'question' => 'Quel est le centre de gravité d\'un triangle ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le centre du cercle inscrit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L\'intersection de ses médianes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L\'intersection de ses hauteurs uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Toujours un sommet',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les trois médianes d\'un triangle sont concourantes au centre de gravité.',
                    ],
                    [
                        'question' => 'Une transformation qui conserve les distances est appelée...',
                        'choices' => [
                            [
                                'choice_text' => 'homothétie quelconque',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'projection',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'translation uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'isométrie',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Une isométrie préserve les distances entre les points.',
                    ],
                    [
                        'question' => 'Le déterminant d\'une matrice 2×2 [[a,b],[c,d]] vaut...',
                        'choices' => [
                            [
                                'choice_text' => 'ab−cd',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a+b−c−d',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ad−bc',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ac−bd',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La formule du déterminant 2×2 est ad−bc.',
                    ],
                ],
            ],
            [
                'title' => 'Fonctions et modélisation — Niveau Advanced — Quiz 4',
                'description' => 'QCM de mathématiques sur fonctions et modélisation, destiné au niveau Advanced.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Si f(x)=e^x, quelle propriété de croissance est vraie sur R ?',
                        'choices' => [
                            [
                                'choice_text' => 'f est décroissante',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'f est strictement croissante',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'f est périodique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'f est constante',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La dérivée e^x est strictement positive sur R.',
                    ],
                    [
                        'question' => 'Pour f(x)=1/x, quel est le domaine de définition ?',
                        'choices' => [
                            [
                                'choice_text' => 'R tout entier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'R privé de 0',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'x≥0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x>0 uniquement',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La division par zéro est impossible ; tous les autres réels sont admis.',
                    ],
                    [
                        'question' => 'Quel est l\'effet d\'une translation verticale de +3 sur y=f(x) ?',
                        'choices' => [
                            [
                                'choice_text' => 'y=f(x)+3',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'y=f(x−3)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'y=3f(x)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'y=f(x)/3',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Ajouter 3 aux sorties déplace le graphe de 3 unités vers le haut.',
                    ],
                    [
                        'question' => 'Quel est le maximum de f(x)=−(x−2)²+5 ?',
                        'choices' => [
                            [
                                'choice_text' => '7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '−2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Le terme −(x−2)² est au plus 0, donc la valeur maximale est 5 pour x=2.',
                    ],
                    [
                        'question' => 'Quel est le minimum de f(x)=(x+1)²−4 ?',
                        'choices' => [
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '−1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '−4',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '0',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le carré est minimal à 0, donc f_min=−4.',
                    ],
                    [
                        'question' => 'Une fonction affine s\'écrit sous la forme...',
                        'choices' => [
                            [
                                'choice_text' => 'f(x)=ax²+b',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'f(x)=a^x+b',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'f(x)=a/x+b',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'f(x)=ax+b',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Une fonction affine est de la forme ax+b.',
                    ],
                    [
                        'question' => 'Si f et g sont croissantes, f+g est-elle croissante ?',
                        'choices' => [
                            [
                                'choice_text' => 'Non, jamais',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement si elles sont positives',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement si elles sont bornées',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Oui',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Pour x1<x2, les deux différences f(x2)-f(x1) et g(x2)-g(x1) sont positives ou nulles, donc leur somme aussi.',
                    ],
                    [
                        'question' => 'La composition (f∘g)(x) signifie...',
                        'choices' => [
                            [
                                'choice_text' => 'g(f(x))',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'f(x)+g(x)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'f(x)g(x)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'f(g(x))',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Par définition, f∘g applique d\'abord g puis f.',
                    ],
                    [
                        'question' => 'Pour f(x)=2x et g(x)=x+1, (f∘g)(3) vaut...',
                        'choices' => [
                            [
                                'choice_text' => '8',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'g(3)=4 puis f(4)=8.',
                    ],
                    [
                        'question' => 'Une fonction inversible doit notamment être...',
                        'choices' => [
                            [
                                'choice_text' => 'constante',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'strictement quadratique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'toujours paire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'injective sur son domaine',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Pour définir une fonction inverse sur son image, chaque sortie doit correspondre à au plus une entrée.',
                    ],
                ],
            ],
            [
                'title' => 'Combinatoire et probabilités — Niveau Advanced — Quiz 5',
                'description' => 'QCM de mathématiques sur combinatoire et probabilités, destiné au niveau Advanced.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Combien de résultats ordonnés peut-on obtenir en lançant deux dés à six faces ?',
                        'choices' => [
                            [
                                'choice_text' => '24',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '18',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '36',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Chaque dé a 6 possibilités indépendantes : 6×6=36.',
                    ],
                    [
                        'question' => 'Combien de façons d\'ordonner 5 objets distincts existe-t-il ?',
                        'choices' => [
                            [
                                'choice_text' => '100',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '120',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '60',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '25',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le nombre de permutations est 5! = 120.',
                    ],
                    [
                        'question' => 'Combien de couples non ordonnés peut-on choisir parmi 5 personnes ?',
                        'choices' => [
                            [
                                'choice_text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '15',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '20',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'C(5,2)=5×4/2=10.',
                    ],
                    [
                        'question' => 'Si A et B sont indépendants, alors P(A∩B)=...',
                        'choices' => [
                            [
                                'choice_text' => 'P(A)−P(B)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'P(A)/P(B)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'P(A)P(B)',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'P(A)+P(B)',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'indépendance implique que la probabilité de l\'intersection est le produit des probabilités.',
                    ],
                    [
                        'question' => 'Si P(A)=0,4 et P(B|A)=0,5, quelle est P(A∩B) ?',
                        'choices' => [
                            [
                                'choice_text' => '0,1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,8',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,9',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,2',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'P(A∩B)=P(A)P(B|A)=0,4×0,5=0,2.',
                    ],
                    [
                        'question' => 'Pour une variable de Bernoulli de paramètre p, l\'espérance vaut...',
                        'choices' => [
                            [
                                'choice_text' => '1−p',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'p',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'p²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une Bernoulli prend 1 avec probabilité p et 0 sinon ; son espérance est p.',
                    ],
                    [
                        'question' => 'Quelle est la probabilité d\'au moins un succès lors de deux essais indépendants de probabilité de succès p ?',
                        'choices' => [
                            [
                                'choice_text' => '1−(1−p)²',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2p',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1−p²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'p²',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'On prend le complément de « aucun succès » : 1−(1−p)².',
                    ],
                    [
                        'question' => 'Une probabilité conditionnelle P(A|B) est définie, si P(B)>0, par...',
                        'choices' => [
                            [
                                'choice_text' => 'P(A)P(B)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'P(A∩B)/P(B)',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'P(A∪B)/P(A)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'P(A)+P(B)',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Par définition, P(A|B)=P(A∩B)/P(B).',
                    ],
                    [
                        'question' => 'Quelle identité relie P(A∪B) à P(A), P(B) et P(A∩B) ?',
                        'choices' => [
                            [
                                'choice_text' => 'P(A∩B)−P(A)−P(B)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'P(A)P(B)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'P(A)−P(B)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'P(A)+P(B)−P(A∩B)',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'On retire l\'intersection comptée deux fois dans la somme.',
                    ],
                    [
                        'question' => 'La loi binomiale modélise principalement...',
                        'choices' => [
                            [
                                'choice_text' => 'une moyenne de deux variables normales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une durée continue uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une permutation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un nombre de succès sur n essais indépendants de Bernoulli',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'La binomiale compte les succès sur un nombre fixé d\'essais indépendants ayant la même probabilité de succès.',
                    ],
                ],
            ],
            [
                'title' => 'Statistique et interprétation — Niveau Advanced — Quiz 6',
                'description' => 'QCM de mathématiques sur statistique et interprétation, destiné au niveau Advanced.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quelle mesure décrit la dispersion autour de la moyenne en unités au carré ?',
                        'choices' => [
                            [
                                'choice_text' => 'L\'écart-type',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La médiane',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La covariance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La variance',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'La variance est la moyenne des carrés des écarts à la moyenne et s\'exprime en unités².',
                    ],
                    [
                        'question' => 'Quelle mesure de dispersion est exprimée dans les mêmes unités que les données ?',
                        'choices' => [
                            [
                                'choice_text' => 'La variance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La médiane',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L\'écart-type',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le coefficient de variation au carré',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'écart-type est la racine carrée de la variance et conserve les unités des données.',
                    ],
                    [
                        'question' => 'Pour une série statistique, que mesure la covariance entre X et Y ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le nombre de modalités',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement la moyenne de X',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une causalité certaine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une tendance de variation conjointe',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'La covariance indique si les variables ont tendance à varier dans le même sens ou en sens opposés.',
                    ],
                    [
                        'question' => 'Un coefficient de corrélation proche de 1 indique...',
                        'choices' => [
                            [
                                'choice_text' => 'une absence totale de relation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une forte relation linéaire négative',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une forte relation linéaire positive',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une causalité certaine',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une corrélation proche de 1 indique une association linéaire positive forte, sans établir de causalité.',
                    ],
                    [
                        'question' => 'Quel graphique est adapté à la relation entre deux variables quantitatives ?',
                        'choices' => [
                            [
                                'choice_text' => 'Table de vérité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Nuage de points',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Camembert uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Diagramme en barres d\'une seule modalité',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un nuage de points permet d\'observer une relation entre deux variables quantitatives.',
                    ],
                    [
                        'question' => 'La médiane partage une série ordonnée en deux parties contenant approximativement...',
                        'choices' => [
                            [
                                'choice_text' => '50 % des observations chacune',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '33 % et 67 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10 % et 90 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '25 % et 75 %',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La médiane correspond au 50e percentile.',
                    ],
                    [
                        'question' => 'Un échantillon représentatif vise surtout à...',
                        'choices' => [
                            [
                                'choice_text' => 'réduire la taille à 1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'maximiser le biais',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'refléter la population étudiée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'sélectionner uniquement les extrêmes',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La représentativité permet de généraliser les résultats avec davantage de confiance.',
                    ],
                    [
                        'question' => 'Une valeur aberrante peut notamment avoir pour effet de...',
                        'choices' => [
                            [
                                'choice_text' => 'ne jamais modifier la moyenne',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'modifier fortement la moyenne',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'supprimer la variance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'rendre la médiane toujours nulle',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une valeur extrême influence directement la moyenne et peut augmenter la dispersion.',
                    ],
                    [
                        'question' => 'Le premier quartile Q1 est tel qu\'environ combien de données lui sont inférieures ou égales ?',
                        'choices' => [
                            [
                                'choice_text' => '25 %',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '50 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '75 %',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Q1 est le 25e percentile.',
                    ],
                    [
                        'question' => 'Le troisième quartile Q3 correspond approximativement au...',
                        'choices' => [
                            [
                                'choice_text' => '75e percentile',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '25e percentile',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '90e percentile',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '50e percentile',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Q3 est le quantile à 75 %.',
                    ],
                ],
            ],
            [
                'title' => 'Raisonnement et preuves élémentaires — Niveau Advanced — Quiz 7',
                'description' => 'QCM de mathématiques sur raisonnement et preuves élémentaires, destiné au niveau Advanced.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Pour prouver une implication P⇒Q par contraposée, on montre...',
                        'choices' => [
                            [
                                'choice_text' => 'non P ⇒ Q',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'non Q ⇒ non P',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'P ⇒ non Q',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Q ⇒ P',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une implication est logiquement équivalente à sa contraposée.',
                    ],
                    [
                        'question' => 'Un contre-exemple à une affirmation universelle sert à...',
                        'choices' => [
                            [
                                'choice_text' => 'prouver qu\'elle est vraie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'définir une fonction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'calculer une moyenne',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'montrer que l\'affirmation est fausse',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Un seul cas qui satisfait les hypothèses et contredit la conclusion suffit à réfuter une affirmation universelle.',
                    ],
                    [
                        'question' => 'Si a=b et b=c, quelle propriété permet de conclure a=c ?',
                        'choices' => [
                            [
                                'choice_text' => 'Distributivité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Transitivité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Idempotence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Commutativité',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'égalité est transitive.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il vérifier le domaine lors d\'une manipulation algébrique ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pour ne pas introduire de valeurs interdites',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour changer le problème',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les paramètres',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour augmenter les solutions',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Des dénominateurs nuls ou radicandes inadmissibles peuvent rendre certaines étapes invalides.',
                    ],
                    [
                        'question' => 'Si x²=y², quelle conclusion générale est correcte sur les réels ?',
                        'choices' => [
                            [
                                'choice_text' => 'x²=y toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x=y uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x=−y uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x=y ou x=−y',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'x²−y²=(x−y)(x+y)=0, donc x=y ou x=−y.',
                    ],
                    [
                        'question' => 'Quel principe justifie que si a=b, alors a+c=b+c ?',
                        'choices' => [
                            [
                                'choice_text' => 'Compatibilité de l\'égalité avec l\'addition',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Règle de trois',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Principe des tiroirs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Transitivité de l\'ordre uniquement',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Ajouter la même quantité aux deux membres conserve l\'égalité.',
                    ],
                    [
                        'question' => 'Si 0<a<b et c>0, quelle relation est vraie ?',
                        'choices' => [
                            [
                                'choice_text' => 'ac<bc',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ac=bc',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ac<0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ac>bc',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Multiplier une inégalité par un nombre strictement positif conserve son sens.',
                    ],
                    [
                        'question' => 'Si a<b et c<0, que devient la comparaison après multiplication par c ?',
                        'choices' => [
                            [
                                'choice_text' => 'ac=bc',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ac>bc',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ac<0 toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ac<bc',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Multiplier une inégalité par un nombre négatif inverse le sens.',
                    ],
                    [
                        'question' => 'Quelle méthode suppose une hypothèse temporaire pour conduire à une contradiction ?',
                        'choices' => [
                            [
                                'choice_text' => 'Moyenne mobile',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Raisonnement par l\'absurde',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Interpolation linéaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Élimination gaussienne',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'On suppose l\'énoncé contraire puis on montre qu\'il mène à une contradiction.',
                    ],
                    [
                        'question' => 'Pour établir qu\'un entier est divisible par 6, il suffit de vérifier qu\'il est divisible par...',
                        'choices' => [
                            [
                                'choice_text' => '2 et 5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4 et 9',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2 et 3',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '3 et 5',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Comme 2 et 3 sont premiers entre eux, être divisible par les deux implique être divisible par 6.',
                    ],
                ],
            ],
            [
                'title' => 'Nombres complexes et structures de calcul — Niveau Advanced — Quiz 8',
                'description' => 'QCM de mathématiques sur nombres complexes et structures de calcul, destiné au niveau Advanced.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quelle relation fondamentale vérifie l\'unité imaginaire i ?',
                        'choices' => [
                            [
                                'choice_text' => 'i² = −1',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'i² = 1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'i² = 0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'i² = i',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Par définition, le nombre imaginaire i vérifie i²=−1.',
                    ],
                    [
                        'question' => 'Le module du nombre complexe z=a+ib vaut...',
                        'choices' => [
                            [
                                'choice_text' => 'a²+b²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a+b',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '√(a²+b²)',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '|a−b|',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le module est la distance de z à l\'origine dans le plan complexe.',
                    ],
                    [
                        'question' => 'Quel est le conjugué de 3−2i ?',
                        'choices' => [
                            [
                                'choice_text' => '3−2i',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '−3−2i',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3+2i',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '−3+2i',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le conjugué conserve la partie réelle et change le signe de la partie imaginaire.',
                    ],
                    [
                        'question' => 'Pour z≠0, le produit z·conj(z) est égal à...',
                        'choices' => [
                            [
                                'choice_text' => '|z|²',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2z',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '|z|',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'z²',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'z conj(z)=a²+b²=|z|².',
                    ],
                    [
                        'question' => 'Quel est l\'argument principal de 1+i ?',
                        'choices' => [
                            [
                                'choice_text' => 'π/2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'π/3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3π/4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'π/4',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Le point (1,1) forme un angle de 45°, soit π/4 radians.',
                    ],
                    [
                        'question' => 'Quelle identité est correcte pour les puissances de e ?',
                        'choices' => [
                            [
                                'choice_text' => 'e^{a+b}=e^a/e^b',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'e^{a+b}=e^a+e^b',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'e^{a+b}=e^{ab}',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'e^{a+b}=e^a e^b',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'La fonction exponentielle transforme l\'addition en produit.',
                    ],
                    [
                        'question' => 'Quelle valeur limite définit classiquement e ?',
                        'choices' => [
                            [
                                'choice_text' => 'lim_{n→0}(1+n)^{1/n}',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'lim_{n→∞}(1+1/n)^n',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'lim_{n→∞}(1−1/n)^n',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'lim_{n→∞}n^n',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Cette limite converge vers la constante e.',
                    ],
                    [
                        'question' => 'Pour a>0, quel est le domaine de définition de ln(ax) ?',
                        'choices' => [
                            [
                                'choice_text' => 'x<0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x>0',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'x≠0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x≥0',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Comme a>0, il faut ax>0, donc x>0.',
                    ],
                    [
                        'question' => 'Si z1=2+i et z2=1−i, que vaut z1+z2 ?',
                        'choices' => [
                            [
                                'choice_text' => '1+2i',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3+2i',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '(2+i)+(1−i)=3.',
                    ],
                    [
                        'question' => 'Pour un nombre complexe non nul écrit z=re^{iθ}, que représente r ?',
                        'choices' => [
                            [
                                'choice_text' => 'sa partie imaginaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'son conjugué',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'son argument uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'le module de z',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Dans la forme polaire, r=|z| est le module et θ est un argument.',
                    ],
                ],
            ],
            [
                'title' => 'Analyse quantitative et conditionnement — Niveau Professional — Quiz 1',
                'description' => 'QCM de mathématiques sur analyse quantitative et conditionnement, destiné au niveau Professional.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Une grandeur est multipliée par 1,08 puis par 0,95. Quel est le facteur global ?',
                        'choices' => [
                            [
                                'choice_text' => '1,026',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '1,13',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,912',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1,03',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le facteur global est 1,08×0,95=1,026, soit une hausse nette de 2,6 %.',
                    ],
                    [
                        'question' => 'Si un risque relatif passe de 2 % à 1,5 %, quelle réduction relative obtient-on ?',
                        'choices' => [
                            [
                                'choice_text' => '0,5 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '33,3 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '20 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '25 %',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'La baisse est 0,5 point ; rapportée à 2 %, cela donne 0,5/2=25 %.',
                    ],
                    [
                        'question' => 'Pour x>0, pourquoi ln(x) est-il utile dans une relation multiplicative ?',
                        'choices' => [
                            [
                                'choice_text' => 'Il rend toutes les variables entières',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il transforme un produit en somme',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il transforme toute fonction en polynôme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il supprime les unités',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'ln(ab)=ln(a)+ln(b), ce qui simplifie l\'analyse de modèles multiplicatifs.',
                    ],
                    [
                        'question' => 'Si une erreur absolue est de 0,2 sur une mesure de 8,0, quelle est l\'erreur relative ?',
                        'choices' => [
                            [
                                'choice_text' => '2 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,25 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2,5 %',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Erreur relative = 0,2/8 = 0,025 = 2,5 %.',
                    ],
                    [
                        'question' => 'Une quantité est proportionnelle à x³. Si x double, la quantité est multipliée par...',
                        'choices' => [
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '(2x)³=8x³.',
                    ],
                    [
                        'question' => 'Dans un modèle y=a x^b, quel outil permet d\'identifier b par linéarisation logarithmique ?',
                        'choices' => [
                            [
                                'choice_text' => 'y/a = x+b',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'y=ax+b',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ln y = ln a + b ln x',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ln y = a+bx²',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Prendre les logarithmes transforme le modèle de puissance en relation affine entre ln y et ln x.',
                    ],
                    [
                        'question' => 'Si la marge d\'erreur tolérée sur une grandeur de 200 est 1 %, quelle erreur absolue maximale est admise ?',
                        'choices' => [
                            [
                                'choice_text' => '20',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0,2',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '1 % de 200 = 2.',
                    ],
                    [
                        'question' => 'Deux estimations indépendantes ont des variances 4 et 9. Quelle variance possède leur somme ?',
                        'choices' => [
                            [
                                'choice_text' => '36',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6,5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '13',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Pour des variables indépendantes, Var(X+Y)=Var(X)+Var(Y)=13.',
                    ],
                    [
                        'question' => 'Si X et Y sont parfaitement corrélées positivement et centrées-réduites, leur corrélation vaut...',
                        'choices' => [
                            [
                                'choice_text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '−1',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une corrélation positive parfaite vaut 1.',
                    ],
                    [
                        'question' => 'Une sensibilité marginale de f par rapport à x décrit principalement...',
                        'choices' => [
                            [
                                'choice_text' => 'une probabilité conditionnelle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la variation locale de f lorsque x varie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la moyenne globale de f',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la médiane des x',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La dérivée partielle mesure une variation locale par rapport à une variable, les autres étant maintenues fixes.',
                    ],
                ],
            ],
            [
                'title' => 'Optimisation et décisions quantitatives — Niveau Professional — Quiz 2',
                'description' => 'QCM de mathématiques sur optimisation et décisions quantitatives, destiné au niveau Professional.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Pour minimiser une fonction différentiable sur un intervalle ouvert, une condition nécessaire à un optimum intérieur est...',
                        'choices' => [
                            [
                                'choice_text' => 'x=0 toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'f(x)=0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'f\'\'(x)=1 toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'f\'(x)=0',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Un point critique intérieur vérifie une dérivée nulle lorsque la dérivée existe.',
                    ],
                    [
                        'question' => 'Pour f(x)=x², quel test confirme que x=0 est un minimum local ?',
                        'choices' => [
                            [
                                'choice_text' => 'f\'\'(0)>0',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'f\'(0)>0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'f(0)<0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'f\'\'(0)<0',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'f\'\'(0)=2>0, donc la courbure est positive et x=0 est un minimum local.',
                    ],
                    [
                        'question' => 'Dans une fonction convexe, un minimum local est aussi...',
                        'choices' => [
                            [
                                'choice_text' => 'un minimum global',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'un maximum global',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'toujours unique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'toujours sur la frontière',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Toute fonction convexe a la propriété que tout minimum local est global.',
                    ],
                    [
                        'question' => 'Sous une contrainte linéaire simple, quelle géométrie est souvent utilisée pour un problème d\'optimisation linéaire à deux variables ?',
                        'choices' => [
                            [
                                'choice_text' => 'Les racines d\'un polynôme uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les sommets de la région admissible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les médianes statistiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les diagonales du cercle',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'optimum d\'une fonction linéaire sur un polyèdre atteint un sommet lorsqu\'un optimum existe.',
                    ],
                    [
                        'question' => 'Si le coût C(x)=100+5x et le revenu R(x)=8x, quel niveau x rend le bénéfice nul ?',
                        'choices' => [
                            [
                                'choice_text' => '50',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '20',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x≈33,33',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '25',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'B=R−C=3x−100 ; B=0 donne x=100/3≈33,33.',
                    ],
                    [
                        'question' => 'Avec une contrainte x+y=10 et une fonction objectif xy, quel choix maximise le produit pour x,y≥0 ?',
                        'choices' => [
                            [
                                'choice_text' => 'x=4,y=6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x=0,y=10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x=2,y=8',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x=y=5',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Pour une somme fixée, le produit est maximal lorsque les deux variables sont égales.',
                    ],
                    [
                        'question' => 'Si une fonction de coût est strictement convexe, le minimiseur global est...',
                        'choices' => [
                            [
                                'choice_text' => 'unique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'toujours multiple',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'forcément égal à zéro',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'toujours absent',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La stricte convexité garantit l\'unicité du minimiseur lorsqu\'il existe.',
                    ],
                    [
                        'question' => 'Dans une analyse de sensibilité, une petite dérivée absolue |df/dx| indique localement...',
                        'choices' => [
                            [
                                'choice_text' => 'une instabilité certaine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une forte probabilité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une dépendance inverse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une faible sensibilité à x',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Une petite variation locale de f par rapport à x signifie une faible sensibilité.',
                    ],
                    [
                        'question' => 'Pour comparer deux options à rendements différents dans le temps, quelle notion mathématique est centrale ?',
                        'choices' => [
                            [
                                'choice_text' => 'La valeur actualisée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La médiane',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le mode',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le périmètre',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'actualisation permet de ramener des flux futurs à une valeur comparable à une date donnée.',
                    ],
                    [
                        'question' => 'Dans une optimisation sous contraintes, un multiplicateur de Lagrange mesure notamment...',
                        'choices' => [
                            [
                                'choice_text' => 'la sensibilité de l\'objectif à la contrainte active',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une pente sans unité toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'le nombre de variables',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la variance des erreurs',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le multiplicateur est interprétable comme une valeur marginale de la contrainte sous des conditions usuelles.',
                    ],
                ],
            ],
            [
                'title' => 'Modèles discrets et algorithmiques — Niveau Professional — Quiz 3',
                'description' => 'QCM de mathématiques sur modèles discrets et algorithmiques, destiné au niveau Professional.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Un algorithme double une quantité à chaque étape. Sa croissance est de type...',
                        'choices' => [
                            [
                                'choice_text' => 'quadratique uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'linéaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'exponentiel',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'logarithmique',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Multiplier par une constante >1 à chaque étape donne une croissance exponentielle.',
                    ],
                    [
                        'question' => 'La somme 1+2+...+n vaut...',
                        'choices' => [
                            [
                                'choice_text' => 'n(n−1)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'n²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'n(n+1)/2',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2n+1',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La formule classique de la somme des n premiers entiers positifs est n(n+1)/2.',
                    ],
                    [
                        'question' => 'La somme d\'une progression géométrique finie de premier terme a, raison q≠1 et n termes vaut...',
                        'choices' => [
                            [
                                'choice_text' => 'a q^n',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'n(a+q)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a(1−q^n)/(1−q)',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'a+nq',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'C\'est la formule standard d\'une somme géométrique finie.',
                    ],
                    [
                        'question' => 'Pour un taux q avec |q|<1, la série géométrique 1+q+q²+... converge vers...',
                        'choices' => [
                            [
                                'choice_text' => 'q/(1−q)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1+q',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1/q',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1/(1−q)',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'La somme géométrique infinie converge vers 1/(1−q) lorsque |q|<1.',
                    ],
                    [
                        'question' => 'Si une erreur de discrétisation est d\'ordre O(h²), diviser h par 2 réduit asymptotiquement l\'erreur d\'un facteur...',
                        'choices' => [
                            [
                                'choice_text' => '3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '8',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '(h/2)²=h²/4, donc l\'erreur est environ quatre fois plus petite.',
                    ],
                    [
                        'question' => 'Un algorithme de complexité O(n log n) est, pour grandes tailles, généralement...',
                        'choices' => [
                            [
                                'choice_text' => 'plus efficace que O(n²)',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'identique à O(n²)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'moins efficace que O(n³) uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'toujours constant',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'n log n croît plus lentement que n² lorsque n devient grand.',
                    ],
                    [
                        'question' => 'Le terme dominant de 3n³+5n+7 est...',
                        'choices' => [
                            [
                                'choice_text' => '7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5n',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'n²',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3n³',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Le terme de plus haut degré domine la croissance asymptotique.',
                    ],
                    [
                        'question' => 'Une récurrence T(n)=2T(n/2)+n a une complexité typique de...',
                        'choices' => [
                            [
                                'choice_text' => 'O(log n)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'O(n²)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'O(n log n)',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'O(2^n)',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le théorème maître donne T(n)=O(n log n).',
                    ],
                    [
                        'question' => 'Un invariant de boucle sert principalement à...',
                        'choices' => [
                            [
                                'choice_text' => 'exprimer une propriété conservée à chaque itération',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'mesurer uniquement le temps CPU',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'générer des données aléatoires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'définir un type',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un invariant permet de raisonner sur la correction d\'une boucle.',
                    ],
                    [
                        'question' => 'Pourquoi une erreur d\'arrondi peut-elle s\'accumuler dans une série de calculs ?',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que chaque opération introduit potentiellement une petite perturbation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que toute addition est instable',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les nombres deviennent forcément premiers',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la moyenne devient nulle',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les erreurs numériques successives peuvent se propager et parfois s\'amplifier selon le problème et l\'algorithme.',
                    ],
                ],
            ],
            [
                'title' => 'Probabilités avancées et espérance — Niveau Professional — Quiz 4',
                'description' => 'QCM de mathématiques sur probabilités avancées et espérance, destiné au niveau Professional.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Si X et Y sont indépendantes, Var(X+Y) vaut...',
                        'choices' => [
                            [
                                'choice_text' => 'Var(X)−Var(Y)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Var(X)Var(Y)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Var(X)+Var(Y)',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '(Var(X)+Var(Y))²',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le terme de covariance est nul sous indépendance.',
                    ],
                    [
                        'question' => 'Si X et Y ont covariance nulle, sont-ils nécessairement indépendants ?',
                        'choices' => [
                            [
                                'choice_text' => 'Seulement si elles sont discrètes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Oui toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Non',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Seulement si leurs moyennes sont nulles',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une covariance nulle exprime l\'absence de relation linéaire mais n\'implique pas l\'indépendance en général.',
                    ],
                    [
                        'question' => 'L\'espérance d\'une combinaison linéaire aX+bY vaut...',
                        'choices' => [
                            [
                                'choice_text' => 'E[X]E[Y]+a+b',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'aE[X]+bE[Y]',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'abE[XY]',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'aE[X]−bE[Y] toujours',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'espérance est linéaire, sans nécessiter l\'indépendance.',
                    ],
                    [
                        'question' => 'Pour une variable normale standard Z, environ 95 % des valeurs sont situées...',
                        'choices' => [
                            [
                                'choice_text' => 'entre −3 et 3 exactement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'entre −1,96 et 1,96',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'entre −0,5 et 0,5',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'entre 0 et 1',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Pour la loi normale standard, l\'intervalle [−1,96,1,96] contient environ 95 % de la masse.',
                    ],
                    [
                        'question' => 'Un intervalle de confiance à 95 % doit être interprété comme...',
                        'choices' => [
                            [
                                'choice_text' => 'une probabilité de 95 % pour chaque donnée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une probabilité de 95 % que le paramètre fixe soit aléatoire dans cet intervalle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une garantie absolue',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une procédure qui couvre le paramètre dans environ 95 % des échantillons répétés',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'L\'interprétation fréquentiste porte sur la procédure répétée, pas sur le paramètre fixe comme variable aléatoire.',
                    ],
                    [
                        'question' => 'Le théorème central limite justifie souvent que la moyenne d\'un grand échantillon est approximativement...',
                        'choices' => [
                            [
                                'choice_text' => 'constante',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'binomiale dans tous les cas',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'uniforme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'normale sous des conditions usuelles',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Sous des conditions usuelles, la distribution de la moyenne standardisée tend vers une loi normale.',
                    ],
                    [
                        'question' => 'Pour une variable continue, P(X=a) vaut généralement...',
                        'choices' => [
                            [
                                'choice_text' => '0',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'P(X≤a)',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une variable continue attribue une probabilité nulle à un point isolé.',
                    ],
                    [
                        'question' => 'Quelle distribution modélise naturellement le nombre de succès sur n essais indépendants de probabilité p ?',
                        'choices' => [
                            [
                                'choice_text' => 'Exponentielle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniforme continue',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Normale uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Binomiale',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'C\'est précisément la définition de la loi binomiale.',
                    ],
                    [
                        'question' => 'Une loi exponentielle est souvent utilisée pour modéliser...',
                        'choices' => [
                            [
                                'choice_text' => 'un angle aléatoire uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une moyenne de rangs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un nombre de succès borné',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un temps d\'attente jusqu\'à un événement',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Elle est classique pour les temps d\'attente dans un processus de Poisson sous hypothèses appropriées.',
                    ],
                    [
                        'question' => 'Quelle propriété caractérise l\'absence de mémoire de la loi exponentielle ?',
                        'choices' => [
                            [
                                'choice_text' => 'E[X]=0 toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'P(X>s+t|X>s)=P(X>t)',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'P(X=s+t)=P(X=s)+P(X=t)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Var(X)=1 toujours',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La propriété sans mémoire est spécifique à la loi géométrique parmi les discrètes et exponentielle parmi les continues.',
                    ],
                ],
            ],
            [
                'title' => 'Statistique inférentielle et régression — Niveau Professional — Quiz 5',
                'description' => 'QCM de mathématiques sur statistique inférentielle et régression, destiné au niveau Professional.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Dans une régression linéaire simple, que représente le coefficient de pente ?',
                        'choices' => [
                            [
                                'choice_text' => 'La variance de Y',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L\'intercept uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La probabilité de causalité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La variation moyenne prédite de Y pour une unité de X',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'La pente mesure l\'association linéaire moyenne dans l\'unité de X considérée.',
                    ],
                    [
                        'question' => 'Un R² proche de 1 indique principalement...',
                        'choices' => [
                            [
                                'choice_text' => 'que le modèle est causal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'que X et Y sont identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'que le modèle linéaire explique une grande part de la variabilité de Y',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'qu\'il n\'y a aucun résidu',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'R² mesure la part de variation expliquée par le modèle dans ce cadre, sans prouver la causalité.',
                    ],
                    [
                        'question' => 'Une p-value faible contre une hypothèse nulle indique...',
                        'choices' => [
                            [
                                'choice_text' => 'que H0 est certainement fausse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'que les données sont peu compatibles avec H0 selon le modèle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'que l\'effet est forcément grand',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'que la causalité est démontrée',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une p-value mesure l\'extrême des données sous H0 ; elle ne donne pas la probabilité que H0 soit vraie.',
                    ],
                    [
                        'question' => 'Un biais de sélection apparaît lorsque...',
                        'choices' => [
                            [
                                'choice_text' => 'la procédure d\'échantillonnage favorise systématiquement certains profils',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'les données sont toujours continues',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'tous les sujets ont la même probabilité par définition',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la moyenne est exactement nulle',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La sélection non représentative peut déplacer systématiquement l\'estimation.',
                    ],
                    [
                        'question' => 'Dans un intervalle de prédiction, on cherche à estimer...',
                        'choices' => [
                            [
                                'choice_text' => 'uniquement la moyenne de la population',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'le rang médian historique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une future observation individuelle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une constante connue',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un intervalle de prédiction inclut l\'incertitude liée à une nouvelle observation, généralement plus large qu\'un intervalle pour la moyenne.',
                    ],
                    [
                        'question' => 'La multicolinéarité concerne principalement...',
                        'choices' => [
                            [
                                'choice_text' => 'la normalité parfaite des résidus',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'des variables explicatives fortement corrélées entre elles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une variable réponse binaire uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'des erreurs de saisie de dates',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La multicolinéarité rend l\'identification séparée des effets des prédicteurs plus instable.',
                    ],
                    [
                        'question' => 'L\'hétéroscédasticité signifie que...',
                        'choices' => [
                            [
                                'choice_text' => 'les prédicteurs sont indépendants',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la variance des erreurs n\'est pas constante',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la moyenne est nulle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la variable réponse est discrète',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'hétéroscédasticité désigne une variance des erreurs qui dépend du niveau des prédicteurs ou des observations.',
                    ],
                    [
                        'question' => 'Pourquoi standardiser une variable en z-score ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pour la centrer à moyenne 0 et écart-type 1',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour transformer toute variable en entier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour la rendre forcément positive',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer toute corrélation',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le z-score est z=(x−μ)/σ lorsque σ>0.',
                    ],
                    [
                        'question' => 'Une corrélation élevée entre X et Y suffit-elle à prouver X cause Y ?',
                        'choices' => [
                            [
                                'choice_text' => 'Non',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Seulement avec n=2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Oui toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Oui si R²>0,5',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La corrélation peut provenir d\'une variable confondante, d\'une causalité inverse ou d\'une coïncidence.',
                    ],
                    [
                        'question' => 'Un estimateur est dit sans biais si...',
                        'choices' => [
                            [
                                'choice_text' => 'il est toujours exact sur chaque échantillon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'sa variance est nulle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'son espérance égale le paramètre cible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'il est forcément optimal',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'absence de biais signifie E[estimateur]=paramètre.',
                    ],
                ],
            ],
            [
                'title' => 'Algèbre linéaire pour applications — Niveau Professional — Quiz 6',
                'description' => 'QCM de mathématiques sur algèbre linéaire pour applications, destiné au niveau Professional.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Quel est le rang maximal d\'une matrice 3×2 ?',
                        'choices' => [
                            [
                                'choice_text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '3',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le rang est au plus min(3,2)=2.',
                    ],
                    [
                        'question' => 'Une matrice carrée est inversible si et seulement si son déterminant est...',
                        'choices' => [
                            [
                                'choice_text' => 'non nul',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'positif uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'égal à 1 uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'nul',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Pour une matrice carrée, det(A)≠0 équivaut à l\'inversibilité.',
                    ],
                    [
                        'question' => 'Si A est inversible, (AB)=0 implique...',
                        'choices' => [
                            [
                                'choice_text' => 'A=B',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'B=A',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'B=0',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A=0',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Multiplier à gauche par A⁻¹ donne B=A⁻¹0=0.',
                    ],
                    [
                        'question' => 'Les valeurs propres d\'une matrice triangulaire sont...',
                        'choices' => [
                            [
                                'choice_text' => 'ses éléments diagonaux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'toujours toutes égales à 1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'les sommes des lignes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ses éléments hors diagonale uniquement',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le polynôme caractéristique d\'une matrice triangulaire est le produit λ−a_ii.',
                    ],
                    [
                        'question' => 'Pour deux vecteurs linéairement dépendants, il existe...',
                        'choices' => [
                            [
                                'choice_text' => 'toujours un produit scalaire nul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une relation linéaire non triviale entre eux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une base de R² automatiquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'toujours des normes égales',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La dépendance linéaire signifie qu\'une combinaison non triviale des vecteurs donne le vecteur nul.',
                    ],
                    [
                        'question' => 'Le produit matriciel AB est défini lorsque...',
                        'choices' => [
                            [
                                'choice_text' => 'le nombre de colonnes de A égale le nombre de lignes de B',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'les déterminants sont non nuls',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A et B ont toujours les mêmes dimensions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'les matrices sont diagonales',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'C\'est la condition de compatibilité des dimensions pour le produit matriciel.',
                    ],
                    [
                        'question' => 'Quelle opération ne commute généralement pas pour les matrices ?',
                        'choices' => [
                            [
                                'choice_text' => '0+A=A',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'AB=BA',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A+B=B+A',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A+A=2A',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le produit matriciel n\'est pas commutatif en général.',
                    ],
                    [
                        'question' => 'La trace d\'une matrice carrée est...',
                        'choices' => [
                            [
                                'choice_text' => 'le produit des lignes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'le rang toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'le déterminant',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la somme des éléments diagonaux',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Par définition, tr(A) est la somme des coefficients diagonaux.',
                    ],
                    [
                        'question' => 'Pour une matrice symétrique réelle, les valeurs propres sont...',
                        'choices' => [
                            [
                                'choice_text' => 'toujours négatives',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'réelles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'forcément complexes non réelles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'toujours nulles',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le théorème spectral assure des valeurs propres réelles et une diagonalisation orthogonale.',
                    ],
                    [
                        'question' => 'Une matrice orthogonale Q vérifie...',
                        'choices' => [
                            [
                                'choice_text' => 'Q^T=Q^{-1} uniquement si Q=0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Q^TQ=0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Q²=0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Q^TQ=I',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Par définition, Q^TQ=I, donc Q^T=Q^{-1}.',
                    ],
                ],
            ],
            [
                'title' => 'Équations différentielles et modèles — Niveau Professional — Quiz 7',
                'description' => 'QCM de mathématiques sur équations différentielles et modèles, destiné au niveau Professional.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'La solution générale de y\'=ky, k constant, est de la forme...',
                        'choices' => [
                            [
                                'choice_text' => 'y=e^x+k',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'y=Cx^k',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'y=C+kx',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'y=Ce^{kx}',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'L\'équation différentielle y\'=ky admet des solutions exponentielles Ce^{kx}.',
                    ],
                    [
                        'question' => 'Pour y\'=y et y(0)=2, quelle solution est correcte ?',
                        'choices' => [
                            [
                                'choice_text' => 'y=2e^x',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'y=2x',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'y=x+2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'y=e^{2x}',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La solution générale est Ce^x ; y(0)=2 impose C=2.',
                    ],
                    [
                        'question' => 'L\'équation y\'\'+y=0 admet des solutions de base...',
                        'choices' => [
                            [
                                'choice_text' => 'ln x et 1/x',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'sin x et cos x',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'e^x et e^{-x}',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x et x²',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'équation caractéristique r²+1=0 donne r=±i, d\'où sin et cos.',
                    ],
                    [
                        'question' => 'Pour l\'équation y\'=ay(1−y/K), K représente typiquement...',
                        'choices' => [
                            [
                                'choice_text' => 'la condition initiale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la capacité de charge',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'un bruit aléatoire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la dérivée seconde',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Dans le modèle logistique, K est la capacité de charge de l\'environnement.',
                    ],
                    [
                        'question' => 'Une condition initiale sert à...',
                        'choices' => [
                            [
                                'choice_text' => 'changer l\'ordre de l\'équation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'supprimer la dérivée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'sélectionner une solution particulière parmi les solutions générales',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'rendre toute équation linéaire',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Elle fixe une ou plusieurs valeurs de la solution à un point donné.',
                    ],
                    [
                        'question' => 'Dans un modèle dynamique stable autour d\'un équilibre, une petite perturbation...',
                        'choices' => [
                            [
                                'choice_text' => 'doit toujours diverger',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'tend à décroître ou à revenir vers l\'équilibre',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'reste forcément constante',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'devient instantanément nulle',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La stabilité signifie que les trajectoires proches restent proches et, dans un cas asymptotiquement stable, reviennent vers l\'équilibre.',
                    ],
                    [
                        'question' => 'Pour y\'+2y=0, le taux exponentiel de décroissance est lié à...',
                        'choices' => [
                            [
                                'choice_text' => '−2',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '0',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '−1/2',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'On écrit y\'=−2y, donc y=Ce^{−2x}.',
                    ],
                    [
                        'question' => 'La méthode d\'Euler explicite pour y\'=f(x,y) utilise...',
                        'choices' => [
                            [
                                'choice_text' => 'y_{n+1}=y_n+h f(x_n,y_n)',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'y_{n+1}=f(x_n,y_n)/h',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'y_{n+1}=y_n−h f(x_n,y_n)',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'y_{n+1}=h/y_n',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Euler avance d\'un pas h en utilisant la pente au point courant.',
                    ],
                    [
                        'question' => 'Un système linéaire stable continu a typiquement des valeurs propres dont les parties réelles sont...',
                        'choices' => [
                            [
                                'choice_text' => 'négatives',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'nulles uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'positives',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'toujours égales à 1',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Pour un système x\'=Ax, la partie réelle négative des valeurs propres assure la stabilité asymptotique dans le cas linéaire continu.',
                    ],
                    [
                        'question' => 'Dans une EDO du second ordre, deux conditions initiales sont souvent nécessaires pour...',
                        'choices' => [
                            [
                                'choice_text' => 'déterminer une solution unique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'obtenir automatiquement une solution nulle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'supprimer toutes les constantes physiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'rendre l\'équation algébrique',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une équation du second ordre possède généralement deux constantes d\'intégration.',
                    ],
                ],
            ],
            [
                'title' => 'Validation quantitative et pièges de modélisation — Niveau Professional — Quiz 8',
                'description' => 'QCM de mathématiques sur validation quantitative et pièges de modélisation, destiné au niveau Professional.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Un modèle prédit parfaitement les données d\'entraînement. Quelle conclusion prudente faut-il tirer ?',
                        'choices' => [
                            [
                                'choice_text' => 'La capacité de généralisation reste à vérifier',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La causalité est prouvée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le modèle est forcément optimal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il n\'existe aucun biais',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une excellente performance sur les données vues ne garantit pas la performance sur de nouvelles données.',
                    ],
                    [
                        'question' => 'Pourquoi utiliser une analyse dimensionnelle dans un modèle ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pour calculer uniquement des pourcentages',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour garantir la causalité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour vérifier la cohérence des unités des équations',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les constantes',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les termes additionnés doivent avoir les mêmes dimensions ; l\'analyse dimensionnelle détecte de nombreuses incohérences.',
                    ],
                    [
                        'question' => 'Si deux quantités ont des unités incompatibles, leur somme directe est...',
                        'choices' => [
                            [
                                'choice_text' => 'toujours correcte',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une multiplication',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'sans signification physique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'un nombre premier',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'On ne peut additionner directement que des grandeurs de même dimension physique.',
                    ],
                    [
                        'question' => 'Une erreur systématique se distingue d\'une erreur aléatoire car elle...',
                        'choices' => [
                            [
                                'choice_text' => 'n\'affecte qu\'un seul point',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'change de signe à chaque mesure',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'déplace les mesures dans une direction persistante',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 's\'annule forcément',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une erreur systématique introduit un biais persistant dans la mesure.',
                    ],
                    [
                        'question' => 'Pour réduire l\'impact de bruit aléatoire indépendant, augmenter le nombre d\'observations permet généralement de...',
                        'choices' => [
                            [
                                'choice_text' => 'réduire l\'incertitude sur la moyenne',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'augmenter le biais systématique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'rendre le signal exactement constant',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'supprimer toute erreur',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La variabilité de la moyenne diminue avec la taille de l\'échantillon dans les conditions usuelles.',
                    ],
                    [
                        'question' => 'Une transformation logarithmique d\'une variable positive peut notamment...',
                        'choices' => [
                            [
                                'choice_text' => 'rendre la variable négative',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'supprimer l\'ordre des données',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'augmenter toujours toutes les distances',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'compressser les grandes valeurs',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Le logarithme croît lentement et réduit l\'échelle des grandes valeurs tout en préservant l\'ordre sur les positifs.',
                    ],
                    [
                        'question' => 'Quand une approximation linéaire locale est-elle la plus pertinente ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pour des variations arbitrairement grandes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement au voisinage d\'un zéro',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement pour les fonctions constantes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour de petites variations autour d\'un point où la fonction est différentiable',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Le développement linéaire utilise la tangente et devient pertinent localement.',
                    ],
                    [
                        'question' => 'Une matrice mal conditionnée implique notamment que...',
                        'choices' => [
                            [
                                'choice_text' => 'la résolution est toujours exacte',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la matrice est forcément singulière',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'le déterminant vaut nécessairement 1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'de petites perturbations des données peuvent provoquer de grandes variations de la solution',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Un grand nombre de conditionnement signale une forte sensibilité numérique du problème.',
                    ],
                    [
                        'question' => 'Pourquoi valider un modèle sur des données séparées des données d\'entraînement ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pour forcer R² à 1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour estimer sa performance sur des données non vues',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les variables',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour augmenter artificiellement l\'entraînement',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La séparation réduit le risque de confondre mémorisation des données et généralisation.',
                    ],
                    [
                        'question' => 'Une extrapolation est particulièrement risquée lorsque...',
                        'choices' => [
                            [
                                'choice_text' => 'la variable est mesurée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'on interpole entre deux observations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'les données sont ordonnées',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'on prédit très loin de la plage observée',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'Les relations observées peuvent ne plus être valides hors de la plage des données.',
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
                    'difficulty' => $quizData['difficulty'],
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
