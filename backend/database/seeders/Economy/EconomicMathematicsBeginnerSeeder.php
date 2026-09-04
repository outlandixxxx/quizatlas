```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconomicMathematicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'economic-mathematics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bases mathématiques pour l\'économie',
                'questions' => [
                    [
                        'question' => 'Quelle est la valeur de 5 + 7 ?',
                        'answers' => [
                            ['answer' => '12', 'iscorrect' => true],
                            ['answer' => '10', 'iscorrect' => false],
                            ['answer' => '11', 'iscorrect' => false],
                            ['answer' => '13', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur de 15 - 8 ?',
                        'answers' => [
                            ['answer' => '7', 'iscorrect' => true],
                            ['answer' => '6', 'iscorrect' => false],
                            ['answer' => '8', 'iscorrect' => false],
                            ['answer' => '9', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur de 6 × 4 ?',
                        'answers' => [
                            ['answer' => '24', 'iscorrect' => true],
                            ['answer' => '20', 'iscorrect' => false],
                            ['answer' => '18', 'iscorrect' => false],
                            ['answer' => '28', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur de 36 ÷ 6 ?',
                        'answers' => [
                            ['answer' => '6', 'iscorrect' => true],
                            ['answer' => '5', 'iscorrect' => false],
                            ['answer' => '7', 'iscorrect' => false],
                            ['answer' => '8', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur de 3² ?',
                        'answers' => [
                            ['answer' => '9', 'iscorrect' => true],
                            ['answer' => '6', 'iscorrect' => false],
                            ['answer' => '8', 'iscorrect' => false],
                            ['answer' => '12', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la moitié de 80 ?',
                        'answers' => [
                            ['answer' => '40', 'iscorrect' => true],
                            ['answer' => '20', 'iscorrect' => false],
                            ['answer' => '30', 'iscorrect' => false],
                            ['answer' => '60', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si x = 5, quelle est la valeur de x + 3 ?',
                        'answers' => [
                            ['answer' => '8', 'iscorrect' => true],
                            ['answer' => '7', 'iscorrect' => false],
                            ['answer' => '9', 'iscorrect' => false],
                            ['answer' => '10', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si x = 4, quelle est la valeur de 2x ?',
                        'answers' => [
                            ['answer' => '8', 'iscorrect' => true],
                            ['answer' => '6', 'iscorrect' => false],
                            ['answer' => '4', 'iscorrect' => false],
                            ['answer' => '10', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle expression représente le triple d\'un nombre x ?',
                        'answers' => [
                            ['answer' => '3x', 'iscorrect' => true],
                            ['answer' => 'x + 1', 'iscorrect' => false],
                            ['answer' => 'x²', 'iscorrect' => false],
                            ['answer' => 'x / 3', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle expression représente la moitié d\'un nombre x ?',
                        'answers' => [
                            ['answer' => 'x / 2', 'iscorrect' => true],
                            ['answer' => '2x', 'iscorrect' => false],
                            ['answer' => 'x + 2', 'iscorrect' => false],
                            ['answer' => 'x²', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Pourcentages et variations économiques',
                'questions' => [
                    [
                        'question' => 'Une hausse de 100 à 120 représente une augmentation de :',
                        'answers' => [
                            ['answer' => '20 %', 'iscorrect' => true],
                            ['answer' => '10 %', 'iscorrect' => false],
                            ['answer' => '15 %', 'iscorrect' => false],
                            ['answer' => '25 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une baisse de 200 à 150 représente une diminution de :',
                        'answers' => [
                            ['answer' => '25 %', 'iscorrect' => true],
                            ['answer' => '20 %', 'iscorrect' => false],
                            ['answer' => '30 %', 'iscorrect' => false],
                            ['answer' => '15 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Combien représentent 10 % de 500 ?',
                        'answers' => [
                            ['answer' => '50', 'iscorrect' => true],
                            ['answer' => '40', 'iscorrect' => false],
                            ['answer' => '60', 'iscorrect' => false],
                            ['answer' => '100', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Combien représentent 25 % de 400 ?',
                        'answers' => [
                            ['answer' => '100', 'iscorrect' => true],
                            ['answer' => '80', 'iscorrect' => false],
                            ['answer' => '90', 'iscorrect' => false],
                            ['answer' => '125', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un prix de 80 augmente de 10 %. Quel est le nouveau prix ?',
                        'answers' => [
                            ['answer' => '88', 'iscorrect' => true],
                            ['answer' => '86', 'iscorrect' => false],
                            ['answer' => '90', 'iscorrect' => false],
                            ['answer' => '82', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un prix de 200 baisse de 15 %. Quel est le nouveau prix ?',
                        'answers' => [
                            ['answer' => '170', 'iscorrect' => true],
                            ['answer' => '175', 'iscorrect' => false],
                            ['answer' => '165', 'iscorrect' => false],
                            ['answer' => '180', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une quantité passe de 50 à 60. Quel est le taux de croissance ?',
                        'answers' => [
                            ['answer' => '20 %', 'iscorrect' => true],
                            ['answer' => '10 %', 'iscorrect' => false],
                            ['answer' => '15 %', 'iscorrect' => false],
                            ['answer' => '25 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une valeur augmente de 5 % à partir de 1 000. Quelle est la nouvelle valeur ?',
                        'answers' => [
                            ['answer' => '1 050', 'iscorrect' => true],
                            ['answer' => '1 005', 'iscorrect' => false],
                            ['answer' => '1 500', 'iscorrect' => false],
                            ['answer' => '1 040', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un salaire de 2 000 augmente de 8 %. Quel est le nouveau salaire ?',
                        'answers' => [
                            ['answer' => '2 160', 'iscorrect' => true],
                            ['answer' => '2 080', 'iscorrect' => false],
                            ['answer' => '2 120', 'iscorrect' => false],
                            ['answer' => '2 180', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une variable passe de 400 à 360. Quel est son taux de variation ?',
                        'answers' => [
                            ['answer' => '-10 %', 'iscorrect' => true],
                            ['answer' => '-5 %', 'iscorrect' => false],
                            ['answer' => '10 %', 'iscorrect' => false],
                            ['answer' => '-15 %', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Équations et applications économiques',
                'questions' => [
                    [
                        'question' => 'Résoudre x + 5 = 12.',
                        'answers' => [
                            ['answer' => 'x = 7', 'iscorrect' => true],
                            ['answer' => 'x = 5', 'iscorrect' => false],
                            ['answer' => 'x = 6', 'iscorrect' => false],
                            ['answer' => 'x = 8', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Résoudre x - 4 = 10.',
                        'answers' => [
                            ['answer' => 'x = 14', 'iscorrect' => true],
                            ['answer' => 'x = 6', 'iscorrect' => false],
                            ['answer' => 'x = 12', 'iscorrect' => false],
                            ['answer' => 'x = 16', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Résoudre 3x = 21.',
                        'answers' => [
                            ['answer' => 'x = 7', 'iscorrect' => true],
                            ['answer' => 'x = 6', 'iscorrect' => false],
                            ['answer' => 'x = 8', 'iscorrect' => false],
                            ['answer' => 'x = 9', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Résoudre x / 4 = 9.',
                        'answers' => [
                            ['answer' => 'x = 36', 'iscorrect' => true],
                            ['answer' => 'x = 13', 'iscorrect' => false],
                            ['answer' => 'x = 32', 'iscorrect' => false],
                            ['answer' => 'x = 45', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le coût total est C = 100 + 5q et q = 20, quel est C ?',
                        'answers' => [
                            ['answer' => '200', 'iscorrect' => true],
                            ['answer' => '180', 'iscorrect' => false],
                            ['answer' => '150', 'iscorrect' => false],
                            ['answer' => '220', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si la demande est Q = 100 - 2P et P = 20, quelle est Q ?',
                        'answers' => [
                            ['answer' => '60', 'iscorrect' => true],
                            ['answer' => '40', 'iscorrect' => false],
                            ['answer' => '80', 'iscorrect' => false],
                            ['answer' => '20', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si l\'offre est Q = 10 + 3P et P = 20, quelle est Q ?',
                        'answers' => [
                            ['answer' => '70', 'iscorrect' => true],
                            ['answer' => '60', 'iscorrect' => false],
                            ['answer' => '80', 'iscorrect' => false],
                            ['answer' => '50', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le revenu R = P × Q, avec P = 15 et Q = 20, quel est R ?',
                        'answers' => [
                            ['answer' => '300', 'iscorrect' => true],
                            ['answer' => '250', 'iscorrect' => false],
                            ['answer' => '350', 'iscorrect' => false],
                            ['answer' => '400', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le profit est égal à 500 et les coûts à 300, quel est le chiffre d’affaires ?',
                        'answers' => [
                            ['answer' => '800', 'iscorrect' => true],
                            ['answer' => '200', 'iscorrect' => false],
                            ['answer' => '700', 'iscorrect' => false],
                            ['answer' => '900', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les recettes sont 1 000 et les coûts 750, quel est le profit ?',
                        'answers' => [
                            ['answer' => '250', 'iscorrect' => true],
                            ['answer' => '150', 'iscorrect' => false],
                            ['answer' => '200', 'iscorrect' => false],
                            ['answer' => '300', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fonctions linéaires et graphiques économiques',
                'questions' => [
                    [
                        'question' => 'Dans y = 2x + 5, quel est le coefficient directeur ?',
                        'answers' => [
                            ['answer' => '2', 'iscorrect' => true],
                            ['answer' => '5', 'iscorrect' => false],
                            ['answer' => '7', 'iscorrect' => false],
                            ['answer' => '1', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans y = 3x - 4, quelle est l’ordonnée à l’origine ?',
                        'answers' => [
                            ['answer' => '-4', 'iscorrect' => true],
                            ['answer' => '3', 'iscorrect' => false],
                            ['answer' => '4', 'iscorrect' => false],
                            ['answer' => '7', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si y = 4x + 2 et x = 3, quelle est y ?',
                        'answers' => [
                            ['answer' => '14', 'iscorrect' => true],
                            ['answer' => '12', 'iscorrect' => false],
                            ['answer' => '10', 'iscorrect' => false],
                            ['answer' => '16', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une droite ayant une pente positive est généralement :',
                        'answers' => [
                            ['answer' => 'Croissante', 'iscorrect' => true],
                            ['answer' => 'Décroissante', 'iscorrect' => false],
                            ['answer' => 'Toujours verticale', 'iscorrect' => false],
                            ['answer' => 'Toujours horizontale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une droite horizontale a une pente de :',
                        'answers' => [
                            ['answer' => '0', 'iscorrect' => true],
                            ['answer' => '1', 'iscorrect' => false],
                            ['answer' => '-1', 'iscorrect' => false],
                            ['answer' => '100', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une variable augmente de 2 lorsque x augmente de 1, la pente est :',
                        'answers' => [
                            ['answer' => '2', 'iscorrect' => true],
                            ['answer' => '1', 'iscorrect' => false],
                            ['answer' => '0,5', 'iscorrect' => false],
                            ['answer' => '3', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une fonction de demande Q = 100 - 5P, le signe de la pente par rapport au prix est :',
                        'answers' => [
                            ['answer' => 'Négatif', 'iscorrect' => true],
                            ['answer' => 'Positif', 'iscorrect' => false],
                            ['answer' => 'Nul', 'iscorrect' => false],
                            ['answer' => 'Toujours indéterminé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une fonction d’offre Q = 20 + 4P, le signe de la pente par rapport au prix est :',
                        'answers' => [
                            ['answer' => 'Positif', 'iscorrect' => true],
                            ['answer' => 'Négatif', 'iscorrect' => false],
                            ['answer' => 'Nul', 'iscorrect' => false],
                            ['answer' => 'Impossible à déterminer', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une courbe représente un coût croissant avec la quantité, sa pente est généralement :',
                        'answers' => [
                            ['answer' => 'Positive', 'iscorrect' => true],
                            ['answer' => 'Négative', 'iscorrect' => false],
                            ['answer' => 'Nulle', 'iscorrect' => false],
                            ['answer' => 'Toujours égale à 1', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente graphiquement un point d’équilibre de marché ?',
                        'answers' => [
                            ['answer' => 'Le point où les courbes d’offre et de demande se croisent', 'iscorrect' => true],
                            ['answer' => 'Le point où seule la demande existe', 'iscorrect' => false],
                            ['answer' => 'Le point où seul le prix est nul', 'iscorrect' => false],
                            ['answer' => 'Le point le plus éloigné de l’origine', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Suites, taux de croissance et intérêts',
                'questions' => [
                    [
                        'question' => 'Quelle est la prochaine valeur de la suite 2, 4, 6, 8, … ?',
                        'answers' => [
                            ['answer' => '10', 'iscorrect' => true],
                            ['answer' => '9', 'iscorrect' => false],
                            ['answer' => '11', 'iscorrect' => false],
                            ['answer' => '12', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une suite arithmétique, que représente la différence commune ?',
                        'answers' => [
                            ['answer' => 'La variation constante entre deux termes successifs', 'iscorrect' => true],
                            ['answer' => 'Le produit de deux termes successifs', 'iscorrect' => false],
                            ['answer' => 'Le quotient entre les termes', 'iscorrect' => false],
                            ['answer' => 'Le premier terme uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la différence commune de 5, 9, 13, 17, … ?',
                        'answers' => [
                            ['answer' => '4', 'iscorrect' => true],
                            ['answer' => '3', 'iscorrect' => false],
                            ['answer' => '5', 'iscorrect' => false],
                            ['answer' => '2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un capital de 1 000 augmente de 10 % sur une période. Quel est le montant final ?',
                        'answers' => [
                            ['answer' => '1 100', 'iscorrect' => true],
                            ['answer' => '1 010', 'iscorrect' => false],
                            ['answer' => '1 200', 'iscorrect' => false],
                            ['answer' => '1 090', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec un taux simple de 5 %, combien représentent les intérêts annuels sur 2 000 ?',
                        'answers' => [
                            ['answer' => '100', 'iscorrect' => true],
                            ['answer' => '50', 'iscorrect' => false],
                            ['answer' => '150', 'iscorrect' => false],
                            ['answer' => '200', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le facteur de croissance correspondant à une hausse de 8 % ?',
                        'answers' => [
                            ['answer' => '1,08', 'iscorrect' => true],
                            ['answer' => '0,08', 'iscorrect' => false],
                            ['answer' => '1,8', 'iscorrect' => false],
                            ['answer' => '8', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le facteur multiplicatif correspondant à une baisse de 20 % ?',
                        'answers' => [
                            ['answer' => '0,80', 'iscorrect' => true],
                            ['answer' => '0,20', 'iscorrect' => false],
                            ['answer' => '1,20', 'iscorrect' => false],
                            ['answer' => '0,02', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un montant de 500 augmente de 10 % puis de 10 %. Quel est le montant final ?',
                        'answers' => [
                            ['answer' => '605', 'iscorrect' => true],
                            ['answer' => '600', 'iscorrect' => false],
                            ['answer' => '610', 'iscorrect' => false],
                            ['answer' => '650', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi deux hausses successives de 10 % ne correspondent-elles pas exactement à une hausse totale de 20 % ?',
                        'answers' => [
                            ['answer' => 'La deuxième hausse s’applique à une base déjà augmentée', 'iscorrect' => true],
                            ['answer' => 'Les pourcentages ne peuvent pas être utilisés successivement', 'iscorrect' => false],
                            ['answer' => 'La deuxième hausse est toujours nulle', 'iscorrect' => false],
                            ['answer' => 'La première hausse disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le facteur de capitalisation après deux périodes à 5 % par période ?',
                        'answers' => [
                            ['answer' => '1,1025', 'iscorrect' => true],
                            ['answer' => '1,10', 'iscorrect' => false],
                            ['answer' => '1,05', 'iscorrect' => false],
                            ['answer' => '1,15', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Moyennes, indices et statistiques de base',
                'questions' => [
                    [
                        'question' => 'Quelle est la moyenne arithmétique de 10, 20 et 30 ?',
                        'answers' => [
                            ['answer' => '20', 'iscorrect' => true],
                            ['answer' => '15', 'iscorrect' => false],
                            ['answer' => '25', 'iscorrect' => false],
                            ['answer' => '30', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la médiane de 3, 5, 7, 9, 11 ?',
                        'answers' => [
                            ['answer' => '7', 'iscorrect' => true],
                            ['answer' => '5', 'iscorrect' => false],
                            ['answer' => '9', 'iscorrect' => false],
                            ['answer' => '11', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la moyenne de 4, 6, 8 et 10 ?',
                        'answers' => [
                            ['answer' => '7', 'iscorrect' => true],
                            ['answer' => '6', 'iscorrect' => false],
                            ['answer' => '8', 'iscorrect' => false],
                            ['answer' => '9', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est particulièrement sensible aux valeurs extrêmes ?',
                        'answers' => [
                            ['answer' => 'La moyenne arithmétique', 'iscorrect' => true],
                            ['answer' => 'La médiane', 'iscorrect' => false],
                            ['answer' => 'Le mode uniquement', 'iscorrect' => false],
                            ['answer' => 'Le minimum uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure un indice de prix ?',
                        'answers' => [
                            ['answer' => 'Une évolution relative des prix par rapport à une période ou une base de référence', 'iscorrect' => true],
                            ['answer' => 'Uniquement le niveau du PIB', 'iscorrect' => false],
                            ['answer' => 'Uniquement le nombre d’emplois', 'iscorrect' => false],
                            ['answer' => 'Le patrimoine des ménages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un indice passe de 100 à 110, quelle est l’augmentation correspondante ?',
                        'answers' => [
                            ['answer' => '10 %', 'iscorrect' => true],
                            ['answer' => '5 %', 'iscorrect' => false],
                            ['answer' => '15 %', 'iscorrect' => false],
                            ['answer' => '20 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un indice passe de 120 à 132, quelle est l’augmentation correspondante ?',
                        'answers' => [
                            ['answer' => '10 %', 'iscorrect' => true],
                            ['answer' => '12 %', 'iscorrect' => false],
                            ['answer' => '8 %', 'iscorrect' => false],
                            ['answer' => '15 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une moyenne pondérée peut-elle être préférable à une moyenne simple ?',
                        'answers' => [
                            ['answer' => 'Parce qu’elle attribue des poids différents aux observations selon leur importance', 'iscorrect' => true],
                            ['answer' => 'Parce qu’elle ignore les données', 'iscorrect' => false],
                            ['answer' => 'Parce qu’elle donne toujours le même résultat qu’une moyenne simple', 'iscorrect' => false],
                            ['answer' => 'Parce qu’elle ne nécessite aucune pondération', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un prix passe de 50 à 55. Quel indice, avec 50 comme base 100, obtient-on ?',
                        'answers' => [
                            ['answer' => '110', 'iscorrect' => true],
                            ['answer' => '105', 'iscorrect' => false],
                            ['answer' => '115', 'iscorrect' => false],
                            ['answer' => '120', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les indices sont-ils utiles en économie ?',
                        'answers' => [
                            ['answer' => 'Ils permettent de comparer des niveaux ou des évolutions relatives entre périodes ou groupes', 'iscorrect' => true],
                            ['answer' => 'Ils remplacent toutes les données brutes', 'iscorrect' => false],
                            ['answer' => 'Ils mesurent toujours directement le bien-être', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent toutes les différences entre périodes', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Coûts, recettes, profits et optimisation',
                'questions' => [
                    [
                        'question' => 'Une entreprise vend 100 unités à 20 chacune. Quel est son chiffre d’affaires ?',
                        'answers' => [
                            ['answer' => '2 000', 'iscorrect' => true],
                            ['answer' => '1 800', 'iscorrect' => false],
                            ['answer' => '2 200', 'iscorrect' => false],
                            ['answer' => '1 500', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réalise 3 000 de recettes et 2 200 de coûts. Quel est son profit ?',
                        'answers' => [
                            ['answer' => '800', 'iscorrect' => true],
                            ['answer' => '700', 'iscorrect' => false],
                            ['answer' => '1 000', 'iscorrect' => false],
                            ['answer' => '600', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les coûts fixes sont de 500 et les coûts variables de 1 000, quels sont les coûts totaux ?',
                        'answers' => [
                            ['answer' => '1 500', 'iscorrect' => true],
                            ['answer' => '500', 'iscorrect' => false],
                            ['answer' => '1 000', 'iscorrect' => false],
                            ['answer' => '2 000', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le coût total de 100 unités est de 2 000, quel est le coût moyen par unité ?',
                        'answers' => [
                            ['answer' => '20', 'iscorrect' => true],
                            ['answer' => '10', 'iscorrect' => false],
                            ['answer' => '25', 'iscorrect' => false],
                            ['answer' => '30', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les recettes augmentent de 500 tandis que les coûts augmentent de 300, de combien le profit augmente-t-il ?',
                        'answers' => [
                            ['answer' => '200', 'iscorrect' => true],
                            ['answer' => '300', 'iscorrect' => false],
                            ['answer' => '500', 'iscorrect' => false],
                            ['answer' => '800', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a un coût marginal de 10 pour une unité supplémentaire et obtient une recette marginale de 15. Quelle décision est cohérente ?',
                        'answers' => [
                            ['answer' => 'Produire l’unité supplémentaire peut augmenter le profit', 'iscorrect' => true],
                            ['answer' => 'Réduire nécessairement la production', 'iscorrect' => false],
                            ['answer' => 'Fermer immédiatement', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal doit devenir nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le coût marginal est supérieur au revenu marginal, que suggère le raisonnement marginal simple ?',
                        'answers' => [
                            ['answer' => 'Réduire la production peut améliorer le profit', 'iscorrect' => true],
                            ['answer' => 'Augmenter toujours la production', 'iscorrect' => false],
                            ['answer' => 'Maintenir toujours la production', 'iscorrect' => false],
                            ['answer' => 'Augmenter nécessairement les coûts fixes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût marginal est-il important dans l’optimisation ?',
                        'answers' => [
                            ['answer' => 'Il indique le coût associé à une unité supplémentaire de production', 'iscorrect' => true],
                            ['answer' => 'Il représente toujours le coût total', 'iscorrect' => false],
                            ['answer' => 'Il mesure directement les ventes', 'iscorrect' => false],
                            ['answer' => 'Il représente le salaire moyen', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le seuil de rentabilité en quantité si les coûts fixes sont 1 000 et la marge unitaire est 20 ?',
                        'answers' => [
                            ['answer' => '50 unités', 'iscorrect' => true],
                            ['answer' => '40 unités', 'iscorrect' => false],
                            ['answer' => '60 unités', 'iscorrect' => false],
                            ['answer' => '80 unités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le profit économique doit-il tenir compte du coût d’opportunité ?',
                        'answers' => [
                            ['answer' => 'Parce qu’une ressource utilisée dans l’entreprise pourrait avoir une meilleure utilisation alternative', 'iscorrect' => true],
                            ['answer' => 'Parce que le coût d’opportunité est toujours nul', 'iscorrect' => false],
                            ['answer' => 'Parce que seuls les coûts comptables importent', 'iscorrect' => false],
                            ['answer' => 'Parce que les ressources sont illimitées', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Élasticité et applications quantitatives',
                'questions' => [
                    [
                        'question' => 'Si le prix augmente de 10 % et la quantité demandée baisse de 20 %, quelle est l’élasticité-prix approximative de la demande ?',
                        'answers' => [
                            ['answer' => '-2', 'iscorrect' => true],
                            ['answer' => '2', 'iscorrect' => false],
                            ['answer' => '-0,5', 'iscorrect' => false],
                            ['answer' => '0,5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une élasticité-prix de la demande égale à -0,5 indique une demande :',
                        'answers' => [
                            ['answer' => 'Inélastique', 'iscorrect' => true],
                            ['answer' => 'Élastique', 'iscorrect' => false],
                            ['answer' => 'Parfaitement élastique', 'iscorrect' => false],
                            ['answer' => 'Unitairement élastique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le prix d’un produit augmente de 5 % et sa demande diminue de 5 %, l’élasticité approximative est :',
                        'answers' => [
                            ['answer' => '-1', 'iscorrect' => true],
                            ['answer' => '1', 'iscorrect' => false],
                            ['answer' => '-5', 'iscorrect' => false],
                            ['answer' => '0,5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le revenu augmente de 10 % et la demande d’un bien augmente de 15 %, son élasticité-revenu approximative est :',
                        'answers' => [
                            ['answer' => '1,5', 'iscorrect' => true],
                            ['answer' => '0,5', 'iscorrect' => false],
                            ['answer' => '-1,5', 'iscorrect' => false],
                            ['answer' => '2,5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le prix du bien X augmente de 10 % et la demande du bien Y augmente de 5 %, l’élasticité croisée est approximativement :',
                        'answers' => [
                            ['answer' => '0,5', 'iscorrect' => true],
                            ['answer' => '-0,5', 'iscorrect' => false],
                            ['answer' => '2', 'iscorrect' => false],
                            ['answer' => '-2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une élasticité-revenu positive correspond généralement à :',
                        'answers' => [
                            ['answer' => 'Un bien normal', 'iscorrect' => true],
                            ['answer' => 'Un bien inférieur uniquement', 'iscorrect' => false],
                            ['answer' => 'Un bien sans demande', 'iscorrect' => false],
                            ['answer' => 'Un facteur fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une élasticité croisée positive suggère généralement que deux biens sont :',
                        'answers' => [
                            ['answer' => 'Substituts', 'iscorrect' => true],
                            ['answer' => 'Complémentaires', 'iscorrect' => false],
                            ['answer' => 'Toujours indépendants', 'iscorrect' => false],
                            ['answer' => 'Des biens publics', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une élasticité croisée négative suggère généralement que deux biens sont :',
                        'answers' => [
                            ['answer' => 'Complémentaires', 'iscorrect' => true],
                            ['answer' => 'Substituts', 'iscorrect' => false],
                            ['answer' => 'Toujours indépendants', 'iscorrect' => false],
                            ['answer' => 'Des biens inférieurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsque la demande est élastique, une hausse du prix tend généralement à :',
                        'answers' => [
                            ['answer' => 'Réduire la recette totale', 'iscorrect' => true],
                            ['answer' => 'Augmenter la recette totale', 'iscorrect' => false],
                            ['answer' => 'Ne pas modifier la recette', 'iscorrect' => false],
                            ['answer' => 'Supprimer les coûts fixes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsque la demande est inélastique, une hausse du prix tend généralement à :',
                        'answers' => [
                            ['answer' => 'Augmenter la recette totale', 'iscorrect' => true],
                            ['answer' => 'Réduire la recette totale', 'iscorrect' => false],
                            ['answer' => 'Laisser toujours la recette identique', 'iscorrect' => false],
                            ['answer' => 'Réduire nécessairement l’offre', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Beginner',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                // Mélange des réponses afin que la bonne réponse ne soit pas toujours en première position.
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
