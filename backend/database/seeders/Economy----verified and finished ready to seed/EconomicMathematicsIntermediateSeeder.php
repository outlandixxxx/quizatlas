```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconomicMathematicsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'economic-mathematics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Algèbre appliquée à l’économie',
                'questions' => [
                    [
                        'question' => 'Résoudre 2x + 6 = 18.',
                        'answers' => [
                            ['answer' => 'x = 6', 'iscorrect' => true],
                            ['answer' => 'x = 5', 'iscorrect' => false],
                            ['answer' => 'x = 7', 'iscorrect' => false],
                            ['answer' => 'x = 8', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Résoudre 5x - 10 = 15.',
                        'answers' => [
                            ['answer' => 'x = 5', 'iscorrect' => true],
                            ['answer' => 'x = 4', 'iscorrect' => false],
                            ['answer' => 'x = 6', 'iscorrect' => false],
                            ['answer' => 'x = 7', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si 3x + 2 = 20, quelle est la valeur de x ?',
                        'answers' => [
                            ['answer' => '6', 'iscorrect' => true],
                            ['answer' => '5', 'iscorrect' => false],
                            ['answer' => '7', 'iscorrect' => false],
                            ['answer' => '8', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si 4x - 8 = 2x + 10, quelle est la valeur de x ?',
                        'answers' => [
                            ['answer' => '9', 'iscorrect' => true],
                            ['answer' => '7', 'iscorrect' => false],
                            ['answer' => '8', 'iscorrect' => false],
                            ['answer' => '10', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si la fonction de coût est C(q) = 200 + 8q et q = 25, quel est le coût total ?',
                        'answers' => [
                            ['answer' => '400', 'iscorrect' => true],
                            ['answer' => '300', 'iscorrect' => false],
                            ['answer' => '450', 'iscorrect' => false],
                            ['answer' => '500', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si R(q) = 20q et C(q) = 100 + 5q, quelle est l’expression du profit ?',
                        'answers' => [
                            ['answer' => 'π(q) = 15q - 100', 'iscorrect' => true],
                            ['answer' => 'π(q) = 25q + 100', 'iscorrect' => false],
                            ['answer' => 'π(q) = 15q + 100', 'iscorrect' => false],
                            ['answer' => 'π(q) = 20q - 5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une demande est donnée par Q = 120 - 4P. Quelle quantité est demandée pour P = 15 ?',
                        'answers' => [
                            ['answer' => '60', 'iscorrect' => true],
                            ['answer' => '50', 'iscorrect' => false],
                            ['answer' => '70', 'iscorrect' => false],
                            ['answer' => '80', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une offre est donnée par Q = 20 + 3P. Quelle quantité est offerte pour P = 20 ?',
                        'answers' => [
                            ['answer' => '80', 'iscorrect' => true],
                            ['answer' => '60', 'iscorrect' => false],
                            ['answer' => '70', 'iscorrect' => false],
                            ['answer' => '90', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le revenu est R = 50q et les coûts C = 10q + 200, à partir de quelle quantité le profit devient-il positif ?',
                        'answers' => [
                            ['answer' => 'Plus de 5 unités', 'iscorrect' => true],
                            ['answer' => 'Plus de 2 unités', 'iscorrect' => false],
                            ['answer' => 'Plus de 4 unités', 'iscorrect' => false],
                            ['answer' => 'Plus de 10 unités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si 2x + y = 14 et x = 4, quelle est la valeur de y ?',
                        'answers' => [
                            ['answer' => '6', 'iscorrect' => true],
                            ['answer' => '5', 'iscorrect' => false],
                            ['answer' => '7', 'iscorrect' => false],
                            ['answer' => '8', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Pourcentages, indices et taux de variation',
                'questions' => [
                    [
                        'question' => 'Une variable passe de 250 à 300. Quel est son taux de croissance ?',
                        'answers' => [
                            ['answer' => '20 %', 'iscorrect' => true],
                            ['answer' => '15 %', 'iscorrect' => false],
                            ['answer' => '25 %', 'iscorrect' => false],
                            ['answer' => '10 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une valeur passe de 500 à 425. Quel est son taux de variation ?',
                        'answers' => [
                            ['answer' => '-15 %', 'iscorrect' => true],
                            ['answer' => '-10 %', 'iscorrect' => false],
                            ['answer' => '-12,5 %', 'iscorrect' => false],
                            ['answer' => '-20 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un prix de 1 200 augmente de 7,5 %. Quel est son nouveau niveau ?',
                        'answers' => [
                            ['answer' => '1 290', 'iscorrect' => true],
                            ['answer' => '1 275', 'iscorrect' => false],
                            ['answer' => '1 300', 'iscorrect' => false],
                            ['answer' => '1 285', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un salaire de 2 500 diminue de 12 %. Quel est le nouveau salaire ?',
                        'answers' => [
                            ['answer' => '2 200', 'iscorrect' => true],
                            ['answer' => '2 250', 'iscorrect' => false],
                            ['answer' => '2 180', 'iscorrect' => false],
                            ['answer' => '2 300', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un indice passe de 125 à 150. Quelle est la variation en pourcentage ?',
                        'answers' => [
                            ['answer' => '20 %', 'iscorrect' => true],
                            ['answer' => '25 %', 'iscorrect' => false],
                            ['answer' => '15 %', 'iscorrect' => false],
                            ['answer' => '10 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un indice avec base 100 devient 108, cela correspond à une hausse de :',
                        'answers' => [
                            ['answer' => '8 %', 'iscorrect' => true],
                            ['answer' => '10 %', 'iscorrect' => false],
                            ['answer' => '6 %', 'iscorrect' => false],
                            ['answer' => '12 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une variable augmente de 10 % puis diminue de 10 %. Par rapport à sa valeur initiale, elle est finalement :',
                        'answers' => [
                            ['answer' => 'Inférieure de 1 %', 'iscorrect' => true],
                            ['answer' => 'Identique', 'iscorrect' => false],
                            ['answer' => 'Supérieure de 1 %', 'iscorrect' => false],
                            ['answer' => 'Inférieure de 10 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un prix de 800 augmente de 15 % puis de 5 %. Quel est son niveau final ?',
                        'answers' => [
                            ['answer' => '966', 'iscorrect' => true],
                            ['answer' => '960', 'iscorrect' => false],
                            ['answer' => '968', 'iscorrect' => false],
                            ['answer' => '980', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une quantité diminue de 20 %, quel facteur multiplicatif doit être appliqué ?',
                        'answers' => [
                            ['answer' => '0,80', 'iscorrect' => true],
                            ['answer' => '0,20', 'iscorrect' => false],
                            ['answer' => '1,20', 'iscorrect' => false],
                            ['answer' => '0,75', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un montant passe de 1 500 à 1 725. Quel est le taux de croissance ?',
                        'answers' => [
                            ['answer' => '15 %', 'iscorrect' => true],
                            ['answer' => '12 %', 'iscorrect' => false],
                            ['answer' => '18 %', 'iscorrect' => false],
                            ['answer' => '20 %', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fonctions économiques et pente',
                'questions' => [
                    [
                        'question' => 'Dans y = 5x - 12, quel est le coefficient directeur ?',
                        'answers' => [
                            ['answer' => '5', 'iscorrect' => true],
                            ['answer' => '-12', 'iscorrect' => false],
                            ['answer' => '12', 'iscorrect' => false],
                            ['answer' => '-5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans C(q) = 300 + 7q, quelle est la pente de la fonction de coût ?',
                        'answers' => [
                            ['answer' => '7', 'iscorrect' => true],
                            ['answer' => '300', 'iscorrect' => false],
                            ['answer' => '-7', 'iscorrect' => false],
                            ['answer' => '307', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonction de demande Q = 150 - 5P a quelle pente par rapport au prix ?',
                        'answers' => [
                            ['answer' => '-5', 'iscorrect' => true],
                            ['answer' => '5', 'iscorrect' => false],
                            ['answer' => '150', 'iscorrect' => false],
                            ['answer' => '-150', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fonction d’offre Q = 20 + 2P a quelle pente par rapport au prix ?',
                        'answers' => [
                            ['answer' => '2', 'iscorrect' => true],
                            ['answer' => '-2', 'iscorrect' => false],
                            ['answer' => '20', 'iscorrect' => false],
                            ['answer' => '-20', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le taux de variation de y entre les points (2, 5) et (6, 13) ?',
                        'answers' => [
                            ['answer' => '2', 'iscorrect' => true],
                            ['answer' => '1', 'iscorrect' => false],
                            ['answer' => '3', 'iscorrect' => false],
                            ['answer' => '4', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente la pente d’une fonction économique ?',
                        'answers' => [
                            ['answer' => 'La variation d’une variable associée à une variation d’une autre variable', 'iscorrect' => true],
                            ['answer' => 'La valeur totale de la fonction', 'iscorrect' => false],
                            ['answer' => 'Toujours le prix d’un bien', 'iscorrect' => false],
                            ['answer' => 'Toujours le coût fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une droite a une pente négative, lorsque x augmente, y tend à :',
                        'answers' => [
                            ['answer' => 'Diminuer', 'iscorrect' => true],
                            ['answer' => 'Augmenter', 'iscorrect' => false],
                            ['answer' => 'Rester toujours identique', 'iscorrect' => false],
                            ['answer' => 'Devenir automatiquement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le point d’intersection avec l’axe des y de y = 3x + 9 ?',
                        'answers' => [
                            ['answer' => '(0, 9)', 'iscorrect' => true],
                            ['answer' => '(9, 0)', 'iscorrect' => false],
                            ['answer' => '(3, 9)', 'iscorrect' => false],
                            ['answer' => '(0, 3)', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour la fonction y = 40 - 4x, quelle valeur de y obtient-on pour x = 5 ?',
                        'answers' => [
                            ['answer' => '20', 'iscorrect' => true],
                            ['answer' => '24', 'iscorrect' => false],
                            ['answer' => '16', 'iscorrect' => false],
                            ['answer' => '15', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une demande est Q = 100 - 2P, pour quelle valeur de P la quantité demandée est-elle nulle ?',
                        'answers' => [
                            ['answer' => '50', 'iscorrect' => true],
                            ['answer' => '25', 'iscorrect' => false],
                            ['answer' => '100', 'iscorrect' => false],
                            ['answer' => '20', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Systèmes d’équations et équilibre économique',
                'questions' => [
                    [
                        'question' => 'Si la demande est Qd = 100 - 2P et l’offre Qs = 20 + 2P, quel est le prix d’équilibre ?',
                        'answers' => [
                            ['answer' => '20', 'iscorrect' => true],
                            ['answer' => '15', 'iscorrect' => false],
                            ['answer' => '25', 'iscorrect' => false],
                            ['answer' => '30', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le même système, quelle est la quantité d’équilibre ?',
                        'answers' => [
                            ['answer' => '60', 'iscorrect' => true],
                            ['answer' => '50', 'iscorrect' => false],
                            ['answer' => '70', 'iscorrect' => false],
                            ['answer' => '80', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si Qd = 90 - P et Qs = 10 + P, quel est le prix d’équilibre ?',
                        'answers' => [
                            ['answer' => '40', 'iscorrect' => true],
                            ['answer' => '30', 'iscorrect' => false],
                            ['answer' => '50', 'iscorrect' => false],
                            ['answer' => '20', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le système Qd = 90 - P et Qs = 10 + P, quelle est la quantité d’équilibre ?',
                        'answers' => [
                            ['answer' => '50', 'iscorrect' => true],
                            ['answer' => '40', 'iscorrect' => false],
                            ['answer' => '60', 'iscorrect' => false],
                            ['answer' => '70', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une demande est Qd = 150 - 3P et l’offre Qs = 30 + P. Quel est le prix d’équilibre ?',
                        'answers' => [
                            ['answer' => '30', 'iscorrect' => true],
                            ['answer' => '25', 'iscorrect' => false],
                            ['answer' => '35', 'iscorrect' => false],
                            ['answer' => '40', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec Qd = 150 - 3P et Qs = 30 + P, quelle est la quantité d’équilibre ?',
                        'answers' => [
                            ['answer' => '60', 'iscorrect' => true],
                            ['answer' => '50', 'iscorrect' => false],
                            ['answer' => '70', 'iscorrect' => false],
                            ['answer' => '80', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si deux équations linéaires donnent le même prix et la même quantité, que représente ce point ?',
                        'answers' => [
                            ['answer' => 'Un point d’intersection ou d’équilibre des deux relations', 'iscorrect' => true],
                            ['answer' => 'Un maximum nécessairement', 'iscorrect' => false],
                            ['answer' => 'Un minimum nécessairement', 'iscorrect' => false],
                            ['answer' => 'Une valeur sans interprétation économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un équilibre de marché, pourquoi égalise-t-on l’offre et la demande ?',
                        'answers' => [
                            ['answer' => 'Parce que le marché s’équilibre lorsque la quantité offerte correspond à la quantité demandée', 'iscorrect' => true],
                            ['answer' => 'Parce que les coûts deviennent nuls', 'iscorrect' => false],
                            ['answer' => 'Parce que les prix sont toujours égaux à zéro', 'iscorrect' => false],
                            ['answer' => 'Parce que l’entreprise maximise toujours ses ventes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si l’offre devient Qs = 30 + 2P alors que la demande reste Qd = 90 - P, quel est le nouveau prix d’équilibre ?',
                        'answers' => [
                            ['answer' => '20', 'iscorrect' => true],
                            ['answer' => '15', 'iscorrect' => false],
                            ['answer' => '25', 'iscorrect' => false],
                            ['answer' => '30', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec Qd = 90 - P et Qs = 30 + 2P, quelle est la quantité d’équilibre ?',
                        'answers' => [
                            ['answer' => '70', 'iscorrect' => true],
                            ['answer' => '60', 'iscorrect' => false],
                            ['answer' => '80', 'iscorrect' => false],
                            ['answer' => '50', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Dérivées et analyse marginale',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x) = x² ?',
                        'answers' => [
                            ['answer' => '2x', 'iscorrect' => true],
                            ['answer' => 'x', 'iscorrect' => false],
                            ['answer' => 'x²', 'iscorrect' => false],
                            ['answer' => '2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x) = 5x ?',
                        'answers' => [
                            ['answer' => '5', 'iscorrect' => true],
                            ['answer' => 'x', 'iscorrect' => false],
                            ['answer' => '5x²', 'iscorrect' => false],
                            ['answer' => '1', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x) = x³ ?',
                        'answers' => [
                            ['answer' => '3x²', 'iscorrect' => true],
                            ['answer' => 'x²', 'iscorrect' => false],
                            ['answer' => '3x', 'iscorrect' => false],
                            ['answer' => 'x⁴', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si C(q) = 100 + 4q + q², quel est le coût marginal C\'(q) ?',
                        'answers' => [
                            ['answer' => '4 + 2q', 'iscorrect' => true],
                            ['answer' => '100 + 4q', 'iscorrect' => false],
                            ['answer' => '4 + q', 'iscorrect' => false],
                            ['answer' => '2q²', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si R(q) = 20q - q², quelle est la recette marginale ?',
                        'answers' => [
                            ['answer' => '20 - 2q', 'iscorrect' => true],
                            ['answer' => '20 - q', 'iscorrect' => false],
                            ['answer' => '20q - 2', 'iscorrect' => false],
                            ['answer' => 'q² - 20', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si C(q) = 100 + 5q + 2q², quelle est la dérivée seconde ?',
                        'answers' => [
                            ['answer' => '4', 'iscorrect' => true],
                            ['answer' => '2', 'iscorrect' => false],
                            ['answer' => '4q', 'iscorrect' => false],
                            ['answer' => '5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert principalement une dérivée en économie ?',
                        'answers' => [
                            ['answer' => 'À mesurer une variation marginale d’une variable par rapport à une autre', 'iscorrect' => true],
                            ['answer' => 'À calculer uniquement des pourcentages', 'iscorrect' => false],
                            ['answer' => 'À remplacer toutes les données', 'iscorrect' => false],
                            ['answer' => 'À mesurer uniquement le PIB', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une optimisation simple, quelle condition est souvent nécessaire pour un optimum intérieur ?',
                        'answers' => [
                            ['answer' => 'La première dérivée est égale à zéro', 'iscorrect' => true],
                            ['answer' => 'La fonction doit être nulle partout', 'iscorrect' => false],
                            ['answer' => 'La deuxième dérivée doit toujours être zéro', 'iscorrect' => false],
                            ['answer' => 'La variable doit être négative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour distinguer un maximum local d’un minimum local à partir de la dérivée seconde, quelle condition correspond généralement à un maximum ?',
                        'answers' => [
                            ['answer' => 'Une dérivée seconde négative au point critique', 'iscorrect' => true],
                            ['answer' => 'Une dérivée seconde positive', 'iscorrect' => false],
                            ['answer' => 'Une dérivée seconde nulle dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Une première dérivée positive', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le profit est π(q) = 40q - q² - 100, quelle quantité maximise le profit ?',
                        'answers' => [
                            ['answer' => 'q = 20', 'iscorrect' => true],
                            ['answer' => 'q = 10', 'iscorrect' => false],
                            ['answer' => 'q = 30', 'iscorrect' => false],
                            ['answer' => 'q = 40', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Intérêts, valeur actuelle et capitalisation',
                'questions' => [
                    [
                        'question' => 'Quel est le montant futur de 1 000 placés à 10 % pendant une période avec capitalisation annuelle ?',
                        'answers' => [
                            ['answer' => '1 100', 'iscorrect' => true],
                            ['answer' => '1 010', 'iscorrect' => false],
                            ['answer' => '1 200', 'iscorrect' => false],
                            ['answer' => '1 050', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le facteur de capitalisation de 5 % sur trois périodes ?',
                        'answers' => [
                            ['answer' => '1,157625', 'iscorrect' => true],
                            ['answer' => '1,15', 'iscorrect' => false],
                            ['answer' => '1,05', 'iscorrect' => false],
                            ['answer' => '1,165', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur actuelle de 1 100 reçus dans un an avec un taux d’actualisation de 10 % ?',
                        'answers' => [
                            ['answer' => '1 000', 'iscorrect' => true],
                            ['answer' => '990', 'iscorrect' => false],
                            ['answer' => '1 010', 'iscorrect' => false],
                            ['answer' => '900', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi actualise-t-on les flux futurs en économie et finance ?',
                        'answers' => [
                            ['answer' => 'Pour tenir compte de la valeur temporelle de l’argent et comparer des flux intervenant à des dates différentes', 'iscorrect' => true],
                            ['answer' => 'Parce que les flux futurs n’ont aucune valeur', 'iscorrect' => false],
                            ['answer' => 'Pour augmenter automatiquement les flux futurs', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toute incertitude', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un capital de 2 000 est placé à 4 % pendant deux périodes. Quel est le montant final ?',
                        'answers' => [
                            ['answer' => '2 163,20', 'iscorrect' => true],
                            ['answer' => '2 160', 'iscorrect' => false],
                            ['answer' => '2 080', 'iscorrect' => false],
                            ['answer' => '2 120', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt obtenu sur 5 000 à 6 % en intérêts simples pendant un an ?',
                        'answers' => [
                            ['answer' => '300', 'iscorrect' => true],
                            ['answer' => '250', 'iscorrect' => false],
                            ['answer' => '350', 'iscorrect' => false],
                            ['answer' => '600', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un flux reçu plus tard a-t-il généralement une valeur actuelle plus faible à taux positif ?',
                        'answers' => [
                            ['answer' => Il doit être actualisé sur une période plus longue', 'iscorrect' => true],
                            ['answer' => Il augmente automatiquement de valeur', 'iscorrect' => false],
                            ['answer' => Le taux d’intérêt devient négatif', 'iscorrect' => false],
                            ['answer' => Le temps n’a aucun effet économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investissement coûte 1 000 aujourd’hui et produit 1 200 dans deux ans. Avec un taux de 10 %, sa valeur actuelle du flux futur est approximativement :',
                        'answers' => [
                            ['answer' => '991,74', 'iscorrect' => true],
                            ['answer' => '1 000', 'iscorrect' => false],
                            ['answer' => '1 080', 'iscorrect' => false],
                            ['answer' => '900', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur réduit la valeur actuelle d’un flux futur ?',
                        'answers' => [
                            ['answer' => 'Un taux d’actualisation plus élevé', 'iscorrect' => true],
                            ['answer' => 'Une période plus courte', 'iscorrect' => false],
                            ['answer' => 'Une hausse certaine du flux futur', 'iscorrect' => false],
                            ['answer' => 'Une baisse du nombre de périodes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la capitalisation composée diffère-t-elle de l’intérêt simple ?',
                        'answers' => [
                            ['answer' => 'Les intérêts déjà accumulés produisent eux-mêmes des intérêts dans la capitalisation composée', 'iscorrect' => true],
                            ['answer' => 'L’intérêt simple utilise toujours un taux négatif', 'iscorrect' => false],
                            ['answer' => 'La capitalisation composée ignore le temps', 'iscorrect' => false],
                            ['answer' => 'Les deux méthodes donnent toujours le même résultat', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Optimisation économique',
                'questions' => [
                    [
                        'question' => 'Si le profit est π(q) = 60q - q² - 200, quelle quantité maximise le profit ?',
                        'answers' => [
                            ['answer' => 'q = 30', 'iscorrect' => true],
                            ['answer' => 'q = 20', 'iscorrect' => false],
                            ['answer' => 'q = 40', 'iscorrect' => false],
                            ['answer' => 'q = 60', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si f(x) = 30x - x², pour quelle valeur de x la fonction atteint-elle son maximum ?',
                        'answers' => [
                            ['answer' => '15', 'iscorrect' => true],
                            ['answer' => '10', 'iscorrect' => false],
                            ['answer' => '20', 'iscorrect' => false],
                            ['answer' => '30', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise choisit q lorsque le revenu marginal est égal au coût marginal. Pourquoi ?',
                        'answers' => [
                            ['answer' => 'Parce que l’unité marginale cesse d’augmenter le profit lorsque son coût dépasse son revenu', 'iscorrect' => true],
                            ['answer' => 'Parce que le chiffre d’affaires total doit être nul', 'iscorrect' => false],
                            ['answer' => 'Parce que le coût fixe devient nul', 'iscorrect' => false],
                            ['answer' => 'Parce que la demande doit être parfaitement élastique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si π\'(q) = 50 - 2q, quelle quantité satisfait la condition du premier ordre ?',
                        'answers' => [
                            ['answer' => '25', 'iscorrect' => true],
                            ['answer' => '20', 'iscorrect' => false],
                            ['answer' => '30', 'iscorrect' => false],
                            ['answer' => '50', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si π\'\'(q) = -4, que peut-on conclure au point critique ?',
                        'answers' => [
                            ['answer' => 'La fonction est concave localement et le point critique correspond à un maximum local', 'iscorrect' => true],
                            ['answer' => 'Le point critique est nécessairement un minimum', 'iscorrect' => false],
                            ['answer' => 'Le point critique n’existe pas', 'iscorrect' => false],
                            ['answer' => 'La fonction est toujours croissante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une firme a C(q) = 100 + 2q² et R(q) = 20q. Quelle quantité maximise le profit ?',
                        'answers' => [
                            ['answer' => 'q = 5', 'iscorrect' => true],
                            ['answer' => 'q = 10', 'iscorrect' => false],
                            ['answer' => 'q = 8', 'iscorrect' => false],
                            ['answer' => 'q = 4', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une contrainte budgétaire doit-elle être prise en compte dans une optimisation économique ?',
                        'answers' => [
                            ['answer' => 'Les ressources disponibles limitent l’ensemble des choix réalisables', 'iscorrect' => true],
                            ['answer' => 'Les ressources sont toujours illimitées', 'iscorrect' => false],
                            ['answer' => 'La contrainte n’a aucun effet sur l’optimum', 'iscorrect' => false],
                            ['answer' => 'Elle détermine uniquement les préférences', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une fonction d’utilité est U(x,y) = x + 2y et le consommateur choisit entre deux biens, que représente une solution intérieure ?',
                        'answers' => [
                            ['answer' => 'Un choix où des quantités positives des deux biens sont consommées sous la contrainte budgétaire', 'iscorrect' => true],
                            ['answer' => 'Un choix où le budget n’est pas utilisé', 'iscorrect' => false],
                            ['answer' => 'Un choix où tous les prix sont nuls', 'iscorrect' => false],
                            ['answer' => 'Un choix où les deux biens sont gratuits', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les solutions de coin sont-elles importantes en économie mathématique ?',
                        'answers' => [
                            ['answer' => 'L’optimum peut se trouver sur une frontière plutôt qu’à un point intérieur', 'iscorrect' => true],
                            ['answer' => 'Elles garantissent toujours un maximum global', 'iscorrect' => false],
                            ['answer' => 'Elles n’existent jamais sous contrainte', 'iscorrect' => false],
                            ['answer' => 'Elles signifient que les contraintes sont inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif général d’une optimisation économique ?',
                        'answers' => [
                            ['answer' => 'Trouver le meilleur choix réalisable selon une fonction objectif et des contraintes données', 'iscorrect' => true],
                            ['answer' => 'Choisir systématiquement la variable la plus élevée', 'iscorrect' => false],
                            ['answer' => 'Éliminer toutes les contraintes', 'iscorrect' => false],
                            ['answer' => 'Choisir toujours une valeur égale à zéro', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Statistiques économiques intermédiaires',
                'questions' => [
                    [
                        'question' => 'Quelle est la moyenne de 12, 18, 20 et 30 ?',
                        'answers' => [
                            ['answer' => '20', 'iscorrect' => true],
                            ['answer' => '18', 'iscorrect' => false],
                            ['answer' => '22', 'iscorrect' => false],
                            ['answer' => '21', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la médiane de 4, 8, 10, 12, 20, 25 ?',
                        'answers' => [
                            ['answer' => '11', 'iscorrect' => true],
                            ['answer' => '10', 'iscorrect' => false],
                            ['answer' => '12', 'iscorrect' => false],
                            ['answer' => '11,5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la médiane est-elle souvent plus robuste que la moyenne face aux valeurs extrêmes ?',
                        'answers' => [
                            ['answer' => 'Elle dépend davantage de l’ordre des observations que de leur distance exacte', 'iscorrect' => true],
                            ['answer' => 'Elle utilise toujours toutes les valeurs au même poids numérique', 'iscorrect' => false],
                            ['answer' => 'Elle augmente toujours lorsqu’une valeur extrême augmente', 'iscorrect' => false],
                            ['answer' => 'Elle est calculée uniquement à partir de la valeur maximale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si toutes les observations d’une série sont multipliées par 2, que devient la moyenne ?',
                        'answers' => [
                            ['answer' => 'Elle est également multipliée par 2', 'iscorrect' => true],
                            ['answer' => 'Elle reste inchangée', 'iscorrect' => false],
                            ['answer' => 'Elle est divisée par 2', 'iscorrect' => false],
                            ['answer' => 'Elle est multipliée par 4', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si toutes les observations augmentent de 5 unités, que devient la moyenne ?',
                        'answers' => [
                            ['answer' => 'Elle augmente de 5 unités', 'iscorrect' => true],
                            ['answer' => 'Elle augmente de 25 unités', 'iscorrect' => false],
                            ['answer' => 'Elle reste inchangée', 'iscorrect' => false],
                            ['answer' => 'Elle diminue de 5 unités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une variable passe de 80 à 92. Quel est le taux de croissance ?',
                        'answers' => [
                            ['answer' => '15 %', 'iscorrect' => true],
                            ['answer' => '12 %', 'iscorrect' => false],
                            ['answer' => '10 %', 'iscorrect' => false],
                            ['answer' => '20 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le coefficient multiplicatif d’une croissance de 12 % ?',
                        'answers' => [
                            ['answer' => '1,12', 'iscorrect' => true],
                            ['answer' => '0,12', 'iscorrect' => false],
                            ['answer' => '1,20', 'iscorrect' => false],
                            ['answer' => '1,02', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le coefficient multiplicatif d’une baisse de 7 % ?',
                        'answers' => [
                            ['answer' => '0,93', 'iscorrect' => true],
                            ['answer' => '0,07', 'iscorrect' => false],
                            ['answer' => '1,07', 'iscorrect' => false],
                            ['answer' => '0,97', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les taux de croissance successifs doivent-ils être composés plutôt qu’additionnés ?',
                        'answers' => [
                            ['answer' => 'Chaque variation s’applique à la nouvelle base obtenue après la variation précédente', 'iscorrect' => true],
                            ['answer' => 'Les pourcentages ne sont jamais cumulatifs', 'iscorrect' => false],
                            ['answer' => 'La première variation disparaît toujours', 'iscorrect' => false],
                            ['answer' => 'La deuxième variation est toujours indépendante de la première base', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une moyenne pondérée est-elle utile pour un indice économique ?',
                        'answers' => [
                            ['answer' => 'Elle peut donner davantage d’importance aux composantes représentant une plus grande part de la dépense ou de l’activité', 'iscorrect' => true],
                            ['answer' => 'Elle ignore les poids économiques', 'iscorrect' => false],
                            ['answer' => 'Elle attribue toujours le même poids à chaque élément', 'iscorrect' => false],
                            ['answer' => 'Elle ne peut être utilisée qu’en finance', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Intermediate',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                $answers = $questionData['answers'];
                shuffle($answers);

                foreach ($answers as $answerData) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer' => $answerData['answer'],
                        'iscorrect' => $answerData['iscorrect'],
                    ]);
                }
            }
        }
    }
}
```
