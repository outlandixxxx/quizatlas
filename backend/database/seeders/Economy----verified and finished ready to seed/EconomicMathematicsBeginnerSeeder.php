<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EconomicMathematicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'economic-mathematics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bases mathématiques pour l\'économie',
                'description' => 'Quiz débutant sur les bases mathématiques utiles en économie.',
                'questions' => [
                    [
                        'question' => 'Quelle est la valeur de 5 + 7 ?',
                        'explanation' => 'On additionne 5 et 7 pour obtenir 12.',
                        'choices' => ['12', '10', '11', '13'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la valeur de 15 - 8 ?',
                        'explanation' => 'Soustraire 8 de 15 donne 7.',
                        'choices' => ['7', '6', '8', '9'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la valeur de 6 × 4 ?',
                        'explanation' => 'Multiplier 6 par 4 revient à additionner 6 quatre fois, ce qui donne 24.',
                        'choices' => ['24', '20', '18', '28'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la valeur de 36 ÷ 6 ?',
                        'explanation' => '36 divisé par 6 donne 6 car 6 × 6 = 36.',
                        'choices' => ['6', '5', '7', '8'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la valeur de 3² ?',
                        'explanation' => '3² signifie 3 multiplié par 3, donc 9.',
                        'choices' => ['9', '6', '8', '12'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la moitié de 80 ?',
                        'explanation' => 'La moitié d’un nombre correspond à sa division par 2. Ainsi, 80 ÷ 2 = 40.',
                        'choices' => ['40', '20', '30', '60'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si x = 5, quelle est la valeur de x + 3 ?',
                        'explanation' => 'En remplaçant x par 5, on obtient 5 + 3 = 8.',
                        'choices' => ['8', '7', '9', '10'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si x = 4, quelle est la valeur de 2x ?',
                        'explanation' => 'Si x vaut 4, alors 2x = 2 × 4 = 8.',
                        'choices' => ['8', '6', '4', '10'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle expression représente le triple d\'un nombre x ?',
                        'explanation' => 'Le triple d’un nombre signifie trois fois ce nombre, donc 3x.',
                        'choices' => ['3x', 'x + 1', 'x²', 'x / 3'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle expression représente la moitié d\'un nombre x ?',
                        'explanation' => 'La moitié de x s’obtient en divisant x par 2, soit x / 2.',
                        'choices' => ['x / 2', '2x', 'x + 2', 'x²'],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Pourcentages et variations économiques',
                'description' => 'Quiz débutant sur les pourcentages et les variations utilisés en économie.',
                'questions' => [
                    [
                        'question' => 'Une hausse de 100 à 120 représente une augmentation de :',
                        'explanation' => 'L’augmentation est de 20 sur une base de 100. Le taux de variation est donc 20 / 100 = 20 %.',
                        'choices' => ['20 %', '10 %', '15 %', '25 %'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une baisse de 200 à 150 représente une diminution de :',
                        'explanation' => 'La baisse est de 50. Rapportée à la valeur initiale de 200, elle correspond à 50 / 200 = 25 %.',
                        'choices' => ['25 %', '20 %', '30 %', '15 %'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Combien représentent 10 % de 500 ?',
                        'explanation' => '10 % de 500 se calcule par 0,10 × 500, ce qui donne 50.',
                        'choices' => ['50', '40', '60', '100'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Combien représentent 25 % de 400 ?',
                        'explanation' => '25 % correspond au quart. Le quart de 400 est donc 100.',
                        'choices' => ['100', '80', '90', '125'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Un prix de 80 augmente de 10 %. Quel est le nouveau prix ?',
                        'explanation' => '10 % de 80 vaut 8. Le nouveau prix est donc 80 + 8 = 88.',
                        'choices' => ['88', '86', '90', '82'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Un prix de 200 baisse de 15 %. Quel est le nouveau prix ?',
                        'explanation' => '15 % de 200 vaut 30. Le nouveau prix est donc 200 - 30 = 170.',
                        'choices' => ['170', '175', '165', '180'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une quantité passe de 50 à 60. Quel est le taux de croissance ?',
                        'explanation' => 'L’augmentation est de 10. Rapportée à la valeur initiale de 50, cela donne 10 / 50 = 20 %.',
                        'choices' => ['20 %', '10 %', '15 %', '25 %'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une valeur augmente de 5 % à partir de 1 000. Quelle est la nouvelle valeur ?',
                        'explanation' => '5 % de 1 000 vaut 50. La nouvelle valeur est donc 1 000 + 50 = 1 050.',
                        'choices' => ['1 050', '1 005', '1 500', '1 040'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Un salaire de 2 000 augmente de 8 %. Quel est le nouveau salaire ?',
                        'explanation' => '8 % de 2 000 vaut 160. En ajoutant cette hausse au salaire initial, on obtient 2 160.',
                        'choices' => ['2 160', '2 080', '2 120', '2 180'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une variable passe de 400 à 360. Quel est son taux de variation ?',
                        'explanation' => 'La variation est de -40. Rapportée à 400, elle donne -40 / 400 = -10 %.',
                        'choices' => ['-10 %', '-5 %', '10 %', '-15 %'],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Équations et applications économiques',
                'description' => 'Quiz débutant sur les équations simples et leurs applications économiques.',
                'questions' => [
                    [
                        'question' => 'Résoudre x + 5 = 12.',
                        'explanation' => 'On soustrait 5 des deux côtés : x = 12 - 5 = 7.',
                        'choices' => ['x = 7', 'x = 5', 'x = 6', 'x = 8'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Résoudre x - 4 = 10.',
                        'explanation' => 'On ajoute 4 aux deux côtés : x = 10 + 4 = 14.',
                        'choices' => ['x = 14', 'x = 6', 'x = 12', 'x = 16'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Résoudre 3x = 21.',
                        'explanation' => 'On divise les deux côtés par 3 : x = 21 / 3 = 7.',
                        'choices' => ['x = 7', 'x = 6', 'x = 8', 'x = 9'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Résoudre x / 4 = 9.',
                        'explanation' => 'On multiplie les deux côtés par 4 : x = 9 × 4 = 36.',
                        'choices' => ['x = 36', 'x = 13', 'x = 32', 'x = 45'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si le coût total est C = 100 + 5q et q = 20, quel est C ?',
                        'explanation' => 'En remplaçant q par 20, on obtient C = 100 + 5 × 20 = 100 + 100 = 200.',
                        'choices' => ['200', '180', '150', '220'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si la demande est Q = 100 - 2P et P = 20, quelle est Q ?',
                        'explanation' => 'En remplaçant P par 20, on obtient Q = 100 - 2 × 20 = 100 - 40 = 60.',
                        'choices' => ['60', '40', '80', '20'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si l\'offre est Q = 10 + 3P et P = 20, quelle est Q ?',
                        'explanation' => 'En remplaçant P par 20, on obtient Q = 10 + 3 × 20 = 10 + 60 = 70.',
                        'choices' => ['70', '60', '80', '50'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si le revenu R = P × Q, avec P = 15 et Q = 20, quel est R ?',
                        'explanation' => 'Le revenu est le prix multiplié par la quantité : R = 15 × 20 = 300.',
                        'choices' => ['300', '250', '350', '400'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si le profit est égal à 500 et les coûts à 300, quel est le chiffre d’affaires ?',
                        'explanation' => 'Le profit est égal au chiffre d’affaires moins les coûts. Donc le chiffre d’affaires est 500 + 300 = 800.',
                        'choices' => ['800', '200', '700', '900'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si les recettes sont 1 000 et les coûts 750, quel est le profit ?',
                        'explanation' => 'Le profit se calcule en soustrayant les coûts des recettes : 1 000 - 750 = 250.',
                        'choices' => ['250', '150', '200', '300'],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Fonctions linéaires et graphiques économiques',
                'description' => 'Quiz débutant sur les fonctions linéaires et leur représentation graphique.',
                'questions' => [
                    [
                        'question' => 'Dans y = 2x + 5, quel est le coefficient directeur ?',
                        'explanation' => 'Dans la forme y = ax + b, le coefficient directeur est a. Ici, a = 2.',
                        'choices' => ['2', '5', '7', '1'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Dans y = 3x - 4, quelle est l’ordonnée à l’origine ?',
                        'explanation' => 'Dans y = ax + b, l’ordonnée à l’origine est b. Ici, b = -4.',
                        'choices' => ['-4', '3', '4', '7'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si y = 4x + 2 et x = 3, quelle est y ?',
                        'explanation' => 'En remplaçant x par 3, on obtient y = 4 × 3 + 2 = 14.',
                        'choices' => ['14', '12', '10', '16'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une droite ayant une pente positive est généralement :',
                        'explanation' => 'Une pente positive signifie que y augmente lorsque x augmente. La droite est donc croissante.',
                        'choices' => ['Croissante', 'Décroissante', 'Toujours verticale', 'Toujours horizontale'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une droite horizontale a une pente de :',
                        'explanation' => 'Sur une droite horizontale, y ne change pas lorsque x change. La pente est donc égale à 0.',
                        'choices' => ['0', '1', '-1', '100'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si une variable augmente de 2 lorsque x augmente de 1, la pente est :',
                        'explanation' => 'La pente est la variation de y divisée par la variation de x. Ici, 2 / 1 = 2.',
                        'choices' => ['2', '1', '0,5', '3'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Dans une fonction de demande Q = 100 - 5P, le signe de la pente par rapport au prix est :',
                        'explanation' => 'Le coefficient de P est -5. La pente est donc négative, ce qui signifie que Q diminue lorsque P augmente dans ce modèle.',
                        'choices' => ['Négatif', 'Positif', 'Nul', 'Toujours indéterminé'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Dans une fonction d’offre Q = 20 + 4P, le signe de la pente par rapport au prix est :',
                        'explanation' => 'Le coefficient de P est +4. La pente est donc positive.',
                        'choices' => ['Positif', 'Négatif', 'Nul', 'Impossible à déterminer'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si une courbe représente un coût croissant avec la quantité, sa pente est généralement :',
                        'explanation' => 'Si le coût augmente lorsque la quantité augmente, la relation est croissante et sa pente est positive.',
                        'choices' => ['Positive', 'Négative', 'Nulle', 'Toujours égale à 1'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que représente graphiquement un point d’équilibre de marché ?',
                        'explanation' => 'Dans un graphique offre-demande, l’équilibre correspond au point où les deux courbes se croisent.',
                        'choices' => [
                            'Le point où les courbes d’offre et de demande se croisent',
                            'Le point où seule la demande existe',
                            'Le point où seul le prix est nul',
                            'Le point le plus éloigné de l’origine',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Suites, taux de croissance et intérêts',
                'description' => 'Quiz débutant sur les suites, la croissance et les intérêts.',
                'questions' => [
                    [
                        'question' => 'Quelle est la prochaine valeur de la suite 2, 4, 6, 8, … ?',
                        'explanation' => 'Chaque terme augmente de 2. Après 8 vient donc 10.',
                        'choices' => ['10', '9', '11', '12'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Dans une suite arithmétique, que représente la différence commune ?',
                        'explanation' => 'La différence commune est la quantité constante ajoutée à chaque terme pour obtenir le terme suivant.',
                        'choices' => [
                            'La variation constante entre deux termes successifs',
                            'Le produit de deux termes successifs',
                            'Le quotient entre les termes',
                            'Le premier terme uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la différence commune de 5, 9, 13, 17, … ?',
                        'explanation' => 'On ajoute 4 à chaque terme : 5 + 4 = 9, 9 + 4 = 13. La différence commune est donc 4.',
                        'choices' => ['4', '3', '5', '2'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Un capital de 1 000 augmente de 10 % sur une période. Quel est le montant final ?',
                        'explanation' => '10 % de 1 000 vaut 100. Le montant final est donc 1 000 + 100 = 1 100.',
                        'choices' => ['1 100', '1 010', '1 200', '1 090'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Avec un taux simple de 5 %, combien représentent les intérêts annuels sur 2 000 ?',
                        'explanation' => 'Les intérêts sont calculés par 2 000 × 0,05 = 100.',
                        'choices' => ['100', '50', '150', '200'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel est le facteur de croissance correspondant à une hausse de 8 % ?',
                        'explanation' => 'Une hausse de 8 % correspond à multiplier la valeur initiale par 1 + 0,08 = 1,08.',
                        'choices' => ['1,08', '0,08', '1,8', '8'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel est le facteur multiplicatif correspondant à une baisse de 20 % ?',
                        'explanation' => 'Après une baisse de 20 %, il reste 80 % de la valeur initiale, soit un facteur de 0,80.',
                        'choices' => ['0,80', '0,20', '1,20', '0,02'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Un montant de 500 augmente de 10 % puis de 10 %. Quel est le montant final ?',
                        'explanation' => 'Après la première hausse, le montant devient 550. Une deuxième hausse de 10 % donne 550 × 1,10 = 605.',
                        'choices' => ['605', '600', '610', '650'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi deux hausses successives de 10 % ne correspondent-elles pas exactement à une hausse totale de 20 % ?',
                        'explanation' => 'La deuxième hausse de 10 % s’applique au montant déjà augmenté. Les effets se composent donc et ne s’additionnent pas simplement.',
                        'choices' => [
                            'La deuxième hausse s’applique à une base déjà augmentée',
                            'Les pourcentages ne peuvent pas être utilisés successivement',
                            'La deuxième hausse est toujours nulle',
                            'La première hausse disparaît',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel est le facteur de capitalisation après deux périodes à 5 % par période ?',
                        'explanation' => 'Le facteur de capitalisation est 1,05² = 1,1025 après deux périodes.',
                        'choices' => ['1,1025', '1,10', '1,05', '1,15'],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Moyennes, indices et statistiques de base',
                'description' => 'Quiz débutant sur les moyennes, indices et statistiques de base en économie.',
                'questions' => [
                    [
                        'question' => 'Quelle est la moyenne arithmétique de 10, 20 et 30 ?',
                        'explanation' => 'La moyenne est obtenue en additionnant les valeurs puis en divisant par leur nombre : (10 + 20 + 30) / 3 = 20.',
                        'choices' => ['20', '15', '25', '30'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la médiane de 3, 5, 7, 9, 11 ?',
                        'explanation' => 'La médiane est la valeur située au centre d’une série ordonnée. Ici, la valeur centrale est 7.',
                        'choices' => ['7', '5', '9', '11'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la moyenne de 4, 6, 8 et 10 ?',
                        'explanation' => 'La somme est 28 et il y a 4 valeurs. La moyenne est donc 28 / 4 = 7.',
                        'choices' => ['7', '6', '8', '9'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel indicateur est particulièrement sensible aux valeurs extrêmes ?',
                        'explanation' => 'La moyenne arithmétique utilise toutes les valeurs directement, ce qui la rend sensible aux observations très élevées ou très faibles.',
                        'choices' => [
                            'La moyenne arithmétique',
                            'La médiane',
                            'Le mode uniquement',
                            'Le minimum uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que mesure un indice de prix ?',
                        'explanation' => 'Un indice de prix mesure l’évolution relative des prix par rapport à une période de base ou à une référence.',
                        'choices' => [
                            'Une évolution relative des prix par rapport à une période ou une base de référence',
                            'Uniquement le niveau du PIB',
                            'Uniquement le nombre d’emplois',
                            'Le patrimoine des ménages',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si un indice passe de 100 à 110, quelle est l’augmentation correspondante ?',
                        'explanation' => 'L’augmentation est de 10 points sur une base de 100, soit une hausse de 10 %.',
                        'choices' => ['10 %', '5 %', '15 %', '20 %'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si un indice passe de 120 à 132, quelle est l’augmentation correspondante ?',
                        'explanation' => 'L’augmentation est de 12 sur une base de 120. Le taux de variation est donc 12 / 120 = 10 %.',
                        'choices' => ['10 %', '12 %', '8 %', '15 %'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi une moyenne pondérée peut-elle être préférable à une moyenne simple ?',
                        'explanation' => 'Une moyenne pondérée permet de donner davantage d’importance à certaines observations lorsqu’elles représentent une part plus importante du total.',
                        'choices' => [
                            'Parce qu’elle attribue des poids différents aux observations selon leur importance',
                            'Parce qu’elle ignore les données',
                            'Parce qu’elle donne toujours le même résultat qu’une moyenne simple',
                            'Parce qu’elle ne nécessite aucune pondération',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Un prix passe de 50 à 55. Quel indice, avec 50 comme base 100, obtient-on ?',
                        'explanation' => 'L’indice est calculé par 55 / 50 × 100 = 110.',
                        'choices' => ['110', '105', '115', '120'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les indices sont-ils utiles en économie ?',
                        'explanation' => 'Les indices facilitent les comparaisons entre périodes ou groupes en exprimant les évolutions sous une forme standardisée.',
                        'choices' => [
                            'Ils permettent de comparer des niveaux ou des évolutions relatives entre périodes ou groupes',
                            'Ils remplacent toutes les données brutes',
                            'Ils mesurent toujours directement le bien-être',
                            'Ils éliminent toutes les différences entre périodes',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Coûts, recettes, profits et optimisation',
                'description' => 'Quiz débutant sur les coûts, recettes, profits et décisions de production.',
                'questions' => [
                    [
                        'question' => 'Une entreprise vend 100 unités à 20 chacune. Quel est son chiffre d’affaires ?',
                        'explanation' => 'Le chiffre d’affaires se calcule par prix × quantité : 20 × 100 = 2 000.',
                        'choices' => ['2 000', '1 800', '2 200', '1 500'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une entreprise réalise 3 000 de recettes et 2 200 de coûts. Quel est son profit ?',
                        'explanation' => 'Le profit est égal aux recettes moins les coûts : 3 000 - 2 200 = 800.',
                        'choices' => ['800', '700', '1 000', '600'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si les coûts fixes sont de 500 et les coûts variables de 1 000, quels sont les coûts totaux ?',
                        'explanation' => 'Les coûts totaux sont la somme des coûts fixes et des coûts variables : 500 + 1 000 = 1 500.',
                        'choices' => ['1 500', '500', '1 000', '2 000'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si le coût total de 100 unités est de 2 000, quel est le coût moyen par unité ?',
                        'explanation' => 'Le coût moyen correspond au coût total divisé par la quantité : 2 000 / 100 = 20.',
                        'choices' => ['20', '10', '25', '30'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si les recettes augmentent de 500 tandis que les coûts augmentent de 300, de combien le profit augmente-t-il ?',
                        'explanation' => 'La variation du profit est égale à la variation des recettes moins la variation des coûts : 500 - 300 = 200.',
                        'choices' => ['200', '300', '500', '800'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une entreprise a un coût marginal de 10 pour une unité supplémentaire et obtient une recette marginale de 15. Quelle décision est cohérente ?',
                        'explanation' => 'La recette supplémentaire de 15 est supérieure au coût supplémentaire de 10. Produire cette unité augmente donc le profit dans ce modèle simple.',
                        'choices' => [
                            'Produire l’unité supplémentaire peut augmenter le profit',
                            'Réduire nécessairement la production',
                            'Fermer immédiatement',
                            'Le coût marginal doit devenir nul',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si le coût marginal est supérieur au revenu marginal, que suggère le raisonnement marginal simple ?',
                        'explanation' => 'Lorsque le coût d’une unité supplémentaire dépasse le revenu qu’elle génère, cette unité réduit le profit. Réduire la production peut donc améliorer le profit.',
                        'choices' => [
                            'Réduire la production peut améliorer le profit',
                            'Augmenter toujours la production',
                            'Maintenir toujours la production',
                            'Augmenter nécessairement les coûts fixes',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi le coût marginal est-il important dans l’optimisation ?',
                        'explanation' => 'Le coût marginal indique combien coûte la production d’une unité supplémentaire et permet de comparer ce coût au revenu marginal.',
                        'choices' => [
                            'Il indique le coût associé à une unité supplémentaire de production',
                            'Il représente toujours le coût total',
                            'Il mesure directement les ventes',
                            'Il représente le salaire moyen',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel est le seuil de rentabilité en quantité si les coûts fixes sont 1 000 et la marge unitaire est 20 ?',
                        'explanation' => 'Le seuil de rentabilité en quantité se calcule par coûts fixes / marge unitaire : 1 000 / 20 = 50 unités.',
                        'choices' => ['50 unités', '40 unités', '60 unités', '80 unités'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi le profit économique doit-il tenir compte du coût d’opportunité ?',
                        'explanation' => 'Le profit économique tient compte non seulement des coûts explicites, mais aussi de la valeur des meilleures alternatives auxquelles les ressources utilisées ont été sacrifiées.',
                        'choices' => [
                            'Parce qu’une ressource utilisée dans l’entreprise pourrait avoir une meilleure utilisation alternative',
                            'Parce que le coût d’opportunité est toujours nul',
                            'Parce que seuls les coûts comptables importent',
                            'Parce que les ressources sont illimitées',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Élasticité et applications quantitatives',
                'description' => 'Quiz débutant sur les principaux calculs d’élasticité économique.',
                'questions' => [
                    [
                        'question' => 'Si le prix augmente de 10 % et la quantité demandée baisse de 20 %, quelle est l’élasticité-prix approximative de la demande ?',
                        'explanation' => 'L’élasticité-prix approximative est égale à la variation en pourcentage de la quantité divisée par la variation en pourcentage du prix : -20 % / 10 % = -2.',
                        'choices' => ['-2', '2', '-0,5', '0,5'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une élasticité-prix de la demande égale à -0,5 indique une demande :',
                        'explanation' => 'La valeur absolue de -0,5 est inférieure à 1. La quantité demandée réagit donc proportionnellement moins que le prix : la demande est inélastique.',
                        'choices' => ['Inélastique', 'Élastique', 'Parfaitement élastique', 'Unitairement élastique'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si le prix d’un produit augmente de 5 % et sa demande diminue de 5 %, l’élasticité approximative est :',
                        'explanation' => 'On divise la variation de la quantité par celle du prix : -5 % / 5 % = -1.',
                        'choices' => ['-1', '1', '-5', '0,5'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si le revenu augmente de 10 % et la demande d’un bien augmente de 15 %, son élasticité-revenu approximative est :',
                        'explanation' => 'L’élasticité-revenu est égale à la variation de la demande divisée par la variation du revenu : 15 % / 10 % = 1,5.',
                        'choices' => ['1,5', '0,5', '-1,5', '2,5'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si le prix du bien X augmente de 10 % et la demande du bien Y augmente de 5 %, l’élasticité croisée est approximativement :',
                        'explanation' => 'L’élasticité croisée est 5 % / 10 % = 0,5. Le signe positif est généralement compatible avec une relation de substitution.',
                        'choices' => ['0,5', '-0,5', '2', '-2'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une élasticité-revenu positive correspond généralement à :',
                        'explanation' => 'Une élasticité-revenu positive signifie que la demande augmente lorsque le revenu augmente, ce qui correspond généralement à un bien normal.',
                        'choices' => ['Un bien normal', 'Un bien inférieur uniquement', 'Un bien sans demande', 'Un facteur fixe'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une élasticité croisée positive suggère généralement que deux biens sont :',
                        'explanation' => 'Une élasticité croisée positive signifie qu’une hausse du prix d’un bien est associée à une hausse de la demande de l’autre, ce qui correspond généralement à des substituts.',
                        'choices' => ['Substituts', 'Complémentaires', 'Toujours indépendants', 'Des biens publics'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une élasticité croisée négative suggère généralement que deux biens sont :',
                        'explanation' => 'Une élasticité croisée négative indique qu’une hausse du prix d’un bien est associée à une baisse de la demande de l’autre, ce qui correspond généralement à des biens complémentaires.',
                        'choices' => ['Complémentaires', 'Substituts', 'Toujours indépendants', 'Des biens inférieurs'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Lorsque la demande est élastique, une hausse du prix tend généralement à :',
                        'explanation' => 'Lorsque la demande est élastique, la quantité demandée diminue proportionnellement davantage que le prix n’augmente, ce qui tend à réduire la recette totale.',
                        'choices' => ['Réduire la recette totale', 'Augmenter la recette totale', 'Ne pas modifier la recette', 'Supprimer les coûts fixes'],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Lorsque la demande est inélastique, une hausse du prix tend généralement à :',
                        'explanation' => 'Lorsque la demande est inélastique, la quantité demandée diminue proportionnellement moins que le prix n’augmente, ce qui tend à augmenter la recette totale.',
                        'choices' => ['Augmenter la recette totale', 'Réduire la recette totale', 'Laisser toujours la recette identique', 'Réduire nécessairement l’offre'],
                        'correct' => 0,
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
                    'description' => $quizData['description'] ?? null,
                    'duration' => $quizData['duration'] ?? 10,
                    'passing_score' => $quizData['passing_score'] ?? 80,
                    'total_marks' => $quizData['total_marks'] ?? 10,
                    'is_active' => $quizData['is_active'] ?? true,
                    'difficulty' => $quizData['difficulty'] ?? 'Beginner',
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
                        'explanation' => $questionData['explanation'] ?? null,
                    ]
                );

                $question->choices()->delete();

                $choicePairs = [];

                foreach ($questionData['choices'] as $idx => $text) {
                    $choicePairs[] = [
                        'text' => $text,
                        'is_correct' => $idx === $questionData['correct'],
                    ];
                }

                shuffle($choicePairs);

                foreach ($choicePairs as $order => $pair) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $pair['text'],
                        'is_correct' => $pair['is_correct'],
                        'order' => $order + 1,
                    ]);
                }
            }
        }
    }
}