```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FinancialMathematicsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'financial-mathematics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Intérêt composé et capitalisation',
                'questions' => [
                    [
                        'question' => 'Un capital de 5 000 € est placé à 6 % par an pendant 3 ans avec capitalisation annuelle. Quelle est sa valeur acquise ?',
                        'answers' => [
                            ['text' => '5 955,08 €', 'iscorrect' => true],
                            ['text' => '5 900,00 €', 'iscorrect' => false],
                            ['text' => '5 300,00 €', 'iscorrect' => false],
                            ['text' => '6 060,00 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence fondamentale distingue l’intérêt composé de l’intérêt simple ?',
                        'answers' => [
                            ['text' => 'Les intérêts sont réinvestis et produisent eux-mêmes des intérêts', 'iscorrect' => true],
                            ['text' => 'Le taux devient automatiquement plus élevé', 'iscorrect' => false],
                            ['text' => 'Le capital initial est réduit à chaque période', 'iscorrect' => false],
                            ['text' => 'La durée du placement n’intervient plus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur acquise de 10 000 € à 5 % pendant 4 ans avec capitalisation annuelle ?',
                        'answers' => [
                            ['text' => '12 155,06 €', 'iscorrect' => true],
                            ['text' => '12 000,00 €', 'iscorrect' => false],
                            ['text' => '10 500,00 €', 'iscorrect' => false],
                            ['text' => '11 500,00 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un capital double en combien de temps environ à 10 % composé annuellement, selon la règle des 72 ?',
                        'answers' => [
                            ['text' => 'Environ 7,2 ans', 'iscorrect' => true],
                            ['text' => 'Environ 10 ans', 'iscorrect' => false],
                            ['text' => 'Environ 5 ans', 'iscorrect' => false],
                            ['text' => 'Environ 14,4 ans', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux annuel reste constant, quel effet produit une augmentation du nombre de périodes de capitalisation ?',
                        'answers' => [
                            ['text' => Elle augmente généralement la valeur acquise', 'iscorrect' => true],
                            ['text' => Elle réduit toujours la valeur acquise', 'iscorrect' => false],
                            ['text' => Elle annule les intérêts', 'iscorrect' => false],
                            ['text' => Elle ne peut jamais modifier la valeur acquise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux nominal annuel de 8 % est capitalisé trimestriellement. Quel est le taux par trimestre ?',
                        'answers' => [
                            ['text' => '2 %', 'iscorrect' => true],
                            ['text' => '8 %', 'iscorrect' => false],
                            ['text' => '4 %', 'iscorrect' => false],
                            ['text' => '0,8 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour un taux nominal positif donné, une capitalisation mensuelle produit généralement un taux effectif annuel :',
                        'answers' => [
                            ['text' => 'Supérieur au taux nominal annuel', 'iscorrect' => true],
                            ['text' => 'Inférieur au taux nominal dans tous les cas', 'iscorrect' => false],
                            ['text' => 'Toujours égal à zéro', 'iscorrect' => false],
                            ['text' => 'Indépendant de la fréquence de capitalisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur est utilisé pour capitaliser un montant pendant n périodes au taux i ?',
                        'answers' => [
                            ['text' => '(1 + i)^n', 'iscorrect' => true],
                            ['text' => '1 + in', 'iscorrect' => false],
                            ['text' => 'i/n', 'iscorrect' => false],
                            ['text' => 'n/i', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un placement de 2 000 € rapporte 8 % composé pendant deux ans. Quelle est la valeur acquise ?',
                        'answers' => [
                            ['text' => '2 332,80 €', 'iscorrect' => true],
                            ['text' => '2 320,00 €', 'iscorrect' => false],
                            ['text' => '2 160,00 €', 'iscorrect' => false],
                            ['text' => '2 400,00 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la croissance composée devient-elle particulièrement importante sur une longue période ?',
                        'answers' => [
                            ['text' => Parce que les intérêts accumulés sont eux-mêmes capitalisés', 'iscorrect' => true],
                            ['text' => 'Parce que le capital initial augmente automatiquement chaque année', 'iscorrect' => false],
                            ['text' => 'Parce que le taux devient exponentiellement plus élevé', 'iscorrect' => false],
                            ['text' => 'Parce que les périodes cessent d’avoir une importance', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Actualisation et valeur actuelle',
                'questions' => [
                    [
                        'question' => 'Quelle est la valeur actuelle de 12 100 € reçus dans deux ans avec un taux de 10 % ?',
                        'answers' => [
                            ['text' => '10 000 €', 'iscorrect' => true],
                            ['text' => '11 000 €', 'iscorrect' => false],
                            ['text' => '10 900 €', 'iscorrect' => false],
                            ['text' => '9 000 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux d’actualisation augmente, la valeur actuelle d’un flux futur positif :',
                        'answers' => [
                            ['text' => 'Diminue', 'iscorrect' => true],
                            ['text' => 'Augmente', 'iscorrect' => false],
                            ['text' => 'Reste toujours identique', 'iscorrect' => false],
                            ['text' => 'Devient toujours négative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un flux de 20 000 € est attendu dans 3 ans. Avec un taux de 8 %, quelle est approximativement sa valeur actuelle ?',
                        'answers' => [
                            ['text' => '15 876,69 €', 'iscorrect' => true],
                            ['text' => '18 400,00 €', 'iscorrect' => false],
                            ['text' => '17 500,00 €', 'iscorrect' => false],
                            ['text' => '16 800,00 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe économique derrière l’actualisation ?',
                        'answers' => [
                            ['text' => Un montant disponible aujourd’hui peut être investi et générer un rendement', 'iscorrect' => true],
                            ['text' => 'Les montants futurs sont toujours plus précieux', 'iscorrect' => false],
                            ['text' => 'Le risque disparaît avec le temps', 'iscorrect' => false],
                            ['text' => 'Les taux d’intérêt ne concernent que les banques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une somme de 15 000 € sera reçue dans 5 ans à un taux de 6 %. Sa valeur actuelle est approximativement :',
                        'answers' => [
                            ['text' => '11 209,44 €', 'iscorrect' => true],
                            ['text' => '12 500,00 €', 'iscorrect' => false],
                            ['text' => '14 100,00 €', 'iscorrect' => false],
                            ['text' => '10 000,00 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel taux permet de convertir une valeur future en valeur actuelle ?',
                        'answers' => [
                            ['text' => 'Le taux d’actualisation', 'iscorrect' => true],
                            ['text' => 'Le taux de croissance du chiffre d’affaires', 'iscorrect' => false],
                            ['text' => 'Le taux de marge', 'iscorrect' => false],
                            ['text' => 'Le taux de change uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsque la date de réception d’un flux est repoussée, sa valeur actuelle, à taux positif constant :',
                        'answers' => [
                            ['text' => 'Diminue', 'iscorrect' => true],
                            ['text' => 'Augmente', 'iscorrect' => false],
                            ['text' => 'Reste toujours identique', 'iscorrect' => false],
                            ['text' => 'Devient nécessairement nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une VAN positive indique généralement que :',
                        'answers' => [
                            ['text' => 'Le projet crée de la valeur au taux d’actualisation retenu', 'iscorrect' => true],
                            ['text' => 'Le projet est sans aucun risque', 'iscorrect' => false],
                            ['text' => 'Les flux futurs sont garantis', 'iscorrect' => false],
                            ['text' => 'Le taux d’actualisation est nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La valeur actuelle d’un flux futur de 5 000 € dans un an au taux de 5 % est :',
                        'answers' => [
                            ['text' => '4 761,90 €', 'iscorrect' => true],
                            ['text' => '4 750,00 €', 'iscorrect' => false],
                            ['text' => '5 250,00 €', 'iscorrect' => false],
                            ['text' => '4 500,00 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément doit être pris en compte lorsque plusieurs flux sont reçus à des dates différentes ?',
                        'answers' => [
                            ['text' => 'La date de chaque flux', 'iscorrect' => true],
                            ['text' => 'Uniquement le montant du dernier flux', 'iscorrect' => false],
                            ['text' => 'Uniquement le taux nominal', 'iscorrect' => false],
                            ['text' => 'Le nombre d’employés de l’entreprise', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Rentes et annuités financières',
                'questions' => [
                    [
                        'question' => 'Une annuité ordinaire comporte des paiements :',
                        'answers' => [
                            ['text' => 'À la fin de chaque période', 'iscorrect' => true],
                            ['text' => 'Au début de chaque période', 'iscorrect' => false],
                            ['text' => 'Uniquement à la dernière période', 'iscorrect' => false],
                            ['text' => 'À des dates aléatoires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur actuelle d’une annuité de 1 000 € pendant 3 ans au taux de 5 % ?',
                        'answers' => [
                            ['text' => '2 723,25 €', 'iscorrect' => true],
                            ['text' => '3 150,00 €', 'iscorrect' => false],
                            ['text' => '2 850,00 €', 'iscorrect' => false],
                            ['text' => '2 500,00 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une annuité à terme à échoir se distingue d’une annuité ordinaire parce que les paiements ont lieu :',
                        'answers' => [
                            ['text' => 'Au début des périodes', 'iscorrect' => true],
                            ['text' => 'À la fin des périodes', 'iscorrect' => false],
                            ['text' => 'Une seule fois', 'iscorrect' => false],
                            ['text' => 'Après toutes les périodes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'À paiements et taux identiques, une annuité à terme à échoir a généralement une valeur actuelle :',
                        'answers' => [
                            ['text' => 'Supérieure à celle d’une annuité ordinaire', 'iscorrect' => true],
                            ['text' => 'Inférieure dans tous les cas', 'iscorrect' => false],
                            ['text' => 'Toujours nulle', 'iscorrect' => false],
                            ['text' => 'Exactement identique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur actuelle d’une rente perpétuelle de 600 € par an au taux de 6 % ?',
                        'answers' => [
                            ['text' => '10 000 €', 'iscorrect' => true],
                            ['text' => '3 600 €', 'iscorrect' => false],
                            ['text' => '10 600 €', 'iscorrect' => false],
                            ['text' => '9 400 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le nombre de paiements d’une annuité augmente, à paiement positif constant, sa valeur actuelle tend à :',
                        'answers' => [
                            ['text' => 'Augmenter', 'iscorrect' => true],
                            ['text' => 'Diminuer toujours', 'iscorrect' => false],
                            ['text' => 'Devenir automatiquement nulle', 'iscorrect' => false],
                            ['text' => 'Rester identique quel que soit le nombre de paiements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur est essentiel dans la valeur actuelle d’une annuité ?',
                        'answers' => [
                            ['text' => 'Le taux et le nombre de périodes', 'iscorrect' => true],
                            ['text' => 'Uniquement le nom du bénéficiaire', 'iscorrect' => false],
                            ['text' => 'Uniquement la devise', 'iscorrect' => false],
                            ['text' => 'Uniquement le premier paiement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une annuité de 2 000 € sur 4 ans au taux de 5 % a une valeur actuelle approximative de :',
                        'answers' => [
                            ['text' => '7 091,97 €', 'iscorrect' => true],
                            ['text' => '8 000,00 €', 'iscorrect' => false],
                            ['text' => '7 500,00 €', 'iscorrect' => false],
                            ['text' => '6 500,00 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le calcul d’une annuité, que représente la valeur future ?',
                        'answers' => [
                            ['text' => 'La valeur accumulée de l’ensemble des paiements à une date future donnée', 'iscorrect' => true],
                            ['text' => 'Le premier paiement uniquement', 'iscorrect' => false],
                            ['text' => 'Le taux d’intérêt', 'iscorrect' => false],
                            ['text' => 'La durée sans les paiements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une rente perpétuelle ne peut-elle être évaluée avec une formule d’annuité finie classique sans adaptation ?',
                        'answers' => [
                            ['text' => 'Parce que le nombre de paiements est théoriquement infini', 'iscorrect' => true],
                            ['text' => 'Parce qu’elle ne comporte aucun taux', 'iscorrect' => false],
                            ['text' => 'Parce que les paiements sont nécessairement décroissants', 'iscorrect' => false],
                            ['text' => 'Parce qu’elle n’a aucune valeur économique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Taux nominaux, effectifs et équivalents',
                'questions' => [
                    [
                        'question' => 'Un taux nominal annuel de 12 % capitalisé mensuellement donne quel taux périodique ?',
                        'answers' => [
                            ['text' => '1 % par mois', 'iscorrect' => true],
                            ['text' => '12 % par mois', 'iscorrect' => false],
                            ['text' => '6 % par mois', 'iscorrect' => false],
                            ['text' => '0,12 % par mois', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le taux effectif annuel correspondant à 12 % nominal capitalisé mensuellement, approximativement ?',
                        'answers' => [
                            ['text' => '12,68 %', 'iscorrect' => true],
                            ['text' => '12,00 %', 'iscorrect' => false],
                            ['text' => '13,20 %', 'iscorrect' => false],
                            ['text' => '11,00 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe permet de déterminer un taux effectif à partir d’un taux périodique ?',
                        'answers' => [
                            ['text' => 'Capitaliser le taux périodique sur le nombre de périodes de l’année', 'iscorrect' => true],
                            ['text' => 'Multiplier uniquement par le nombre de mois sans capitalisation', 'iscorrect' => false],
                            ['text' => 'Soustraire les périodes du taux', 'iscorrect' => false],
                            ['text' => 'Diviser le capital par le taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux trimestriel de 2 % correspond à quel taux nominal annuel simplement annualisé ?',
                        'answers' => [
                            ['text' => '8 %', 'iscorrect' => true],
                            ['text' => '6 %', 'iscorrect' => false],
                            ['text' => '2 %', 'iscorrect' => false],
                            ['text' => '24 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux taux sont dits équivalents lorsqu’ils :',
                        'answers' => [
                            ['text' => 'Produisent le même facteur d’accumulation sur une même durée', 'iscorrect' => true],
                            ['text' => 'Ont toujours la même valeur numérique', 'iscorrect' => false],
                            ['text' => 'Sont nécessairement exprimés en pourcentage annuel', 'iscorrect' => false],
                            ['text' => 'Ne comportent aucune capitalisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour comparer un taux mensuel avec un taux annuel, il faut notamment :',
                        'answers' => [
                            ['text' => 'Les convertir sur une base temporelle cohérente', 'iscorrect' => true],
                            ['text' => 'Additionner les deux taux', 'iscorrect' => false],
                            ['text' => 'Ignorer la capitalisation', 'iscorrect' => false],
                            ['text' => 'Comparer uniquement leurs chiffres', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'À taux nominal positif identique, quelle fréquence de capitalisation produit généralement le taux effectif le plus élevé ?',
                        'answers' => [
                            ['text' => 'La fréquence la plus élevée', 'iscorrect' => true],
                            ['text' => 'La fréquence la plus faible', 'iscorrect' => false],
                            ['text' => 'Une fréquence nulle', 'iscorrect' => false],
                            ['text' => 'Toutes produisent nécessairement le même résultat', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux annuel de 6 % capitalisé semestriellement correspond à quel taux par semestre ?',
                        'answers' => [
                            ['text' => '3 %', 'iscorrect' => true],
                            ['text' => '6 %', 'iscorrect' => false],
                            ['text' => '1 %', 'iscorrect' => false],
                            ['text' => '12 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le taux effectif annuel approximatif d’un taux nominal de 6 % capitalisé semestriellement ?',
                        'answers' => [
                            ['text' => '6,09 %', 'iscorrect' => true],
                            ['text' => '6,50 %', 'iscorrect' => false],
                            ['text' => '6,00 %', 'iscorrect' => false],
                            ['text' => '5,50 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux effectif est-il particulièrement utile pour comparer des crédits ou placements ?',
                        'answers' => [
                            ['text' => 'Il intègre l’effet de la fréquence de capitalisation', 'iscorrect' => true],
                            ['text' => 'Il élimine tous les frais dans tous les contrats', 'iscorrect' => false],
                            ['text' => 'Il garantit le rendement futur', 'iscorrect' => false],
                            ['text' => 'Il est toujours égal au taux nominal', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Amortissement des emprunts',
                'questions' => [
                    [
                        'question' => 'Que représente l’amortissement financier d’un emprunt ?',
                        'answers' => [
                            ['text' => 'Le remboursement progressif du principal de la dette', 'iscorrect' => true],
                            ['text' => 'Uniquement les intérêts payés', 'iscorrect' => false],
                            ['text' => 'Le bénéfice de l’emprunteur', 'iscorrect' => false],
                            ['text' => 'La valeur des actifs de l’entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une mensualité constante, la part d’intérêts est généralement calculée sur :',
                        'answers' => [
                            ['text' => 'Le capital restant dû au début de la période', 'iscorrect' => true],
                            ['text' => 'Le montant de la dernière mensualité', 'iscorrect' => false],
                            ['text' => 'Le capital initial pour toute la durée', 'iscorrect' => false],
                            ['text' => 'Le nombre de mensualités restantes uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsque le capital restant dû diminue, la part d’intérêts d’une mensualité tend généralement à :',
                        'answers' => [
                            ['text' => 'Diminuer', 'iscorrect' => true],
                            ['text' => 'Augmenter', 'iscorrect' => false],
                            ['text' => 'Rester toujours identique', 'iscorrect' => false],
                            ['text' => 'Devenir immédiatement nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un prêt à mensualités constantes, si la part d’intérêts diminue, la part consacrée au principal :',
                        'answers' => [
                            ['text' => 'Augmente généralement', 'iscorrect' => true],
                            ['text' => 'Diminue toujours', 'iscorrect' => false],
                            ['text' => 'Reste nulle', 'iscorrect' => false],
                            ['text' => 'Disparaît automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un tableau d’amortissement ?',
                        'answers' => [
                            ['text' => 'Suivre chaque échéance et la répartition entre intérêts et principal', 'iscorrect' => true],
                            ['text' => 'Calculer uniquement les impôts', 'iscorrect' => false],
                            ['text' => 'Déterminer le chiffre d’affaires futur', 'iscorrect' => false],
                            ['text' => 'Évaluer uniquement les stocks', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un emprunt de 10 000 € au taux mensuel de 1 % génère combien d’intérêts pendant le premier mois si aucun principal n’est encore remboursé ?',
                        'answers' => [
                            ['text' => '100 €', 'iscorrect' => true],
                            ['text' => '10 €', 'iscorrect' => false],
                            ['text' => '1 000 €', 'iscorrect' => false],
                            ['text' => '1 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que devient normalement le solde d’un prêt entièrement amortissable à la dernière échéance ?',
                        'answers' => [
                            ['text' => 'Il est ramené à zéro, hors éventuels ajustements contractuels', 'iscorrect' => true],
                            ['text' => 'Il double', 'iscorrect' => false],
                            ['text' => 'Il reste égal au capital initial', 'iscorrect' => false],
                            ['text' => 'Il devient automatiquement négatif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur augmente généralement le coût total des intérêts d’un prêt, toutes choses égales par ailleurs ?',
                        'answers' => [
                            ['text' => 'Une durée de remboursement plus longue', 'iscorrect' => true],
                            ['text' => 'Un remboursement plus rapide', 'iscorrect' => false],
                            ['text' => 'Une réduction du taux', 'iscorrect' => false],
                            ['text' => 'Une diminution du capital emprunté', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux d’intérêt d’un prêt augmente et que le capital et la durée restent identiques, le coût financier tend à :',
                        'answers' => [
                            ['text' => 'Augmenter', 'iscorrect' => true],
                            ['text' => 'Diminuer', 'iscorrect' => false],
                            ['text' => 'Rester nécessairement identique', 'iscorrect' => false],
                            ['text' => 'Devenir nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les intérêts d’un prêt amortissable sont-ils souvent plus élevés au début ?',
                        'answers' => [
                            ['text' => 'Parce que le capital restant dû est alors plus important', 'iscorrect' => true],
                            ['text' => 'Parce que le taux augmente chaque mois', 'iscorrect' => false],
                            ['text' => 'Parce que le principal n’existe pas encore', 'iscorrect' => false],
                            ['text' => 'Parce que les intérêts sont calculés uniquement à la fin', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Valeur nette actuelle et décision d’investissement',
                'questions' => [
                    [
                        'question' => 'Quelle est l’idée centrale de la VAN ?',
                        'answers' => [
                            ['text' => Comparer la valeur actuelle des flux futurs à l’investissement initial', 'iscorrect' => true],
                            ['text' => 'Comparer uniquement deux chiffres d’affaires', 'iscorrect' => false],
                            ['text' => 'Calculer le taux de change', 'iscorrect' => false],
                            ['text' => 'Mesurer uniquement la rentabilité comptable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si la VAN d’un projet est égale à zéro, cela signifie généralement que :',
                        'answers' => [
                            ['text' => 'Le projet couvre exactement le rendement exigé selon le taux d’actualisation retenu', 'iscorrect' => true],
                            ['text' => 'Le projet ne génère aucun flux', 'iscorrect' => false],
                            ['text' => 'Le projet est nécessairement déficitaire', 'iscorrect' => false],
                            ['text' => 'Le projet est sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet nécessite 10 000 € aujourd’hui et génère une valeur actuelle de 12 000 € en flux futurs. Sa VAN est :',
                        'answers' => [
                            ['text' => '2 000 €', 'iscorrect' => true],
                            ['text' => '10 000 €', 'iscorrect' => false],
                            ['text' => '12 000 €', 'iscorrect' => false],
                            ['text' => '22 000 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux d’actualisation augmente, la VAN d’un projet dont les flux futurs sont positifs tend à :',
                        'answers' => [
                            ['text' => 'Diminuer', 'iscorrect' => true],
                            ['text' => 'Augmenter toujours', 'iscorrect' => false],
                            ['text' => 'Rester identique', 'iscorrect' => false],
                            ['text' => 'Devenir nécessairement infinie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle composante doit être actualisée dans une VAN ?',
                        'answers' => [
                            ['text' => 'Les flux futurs du projet', 'iscorrect' => true],
                            ['text' => 'Uniquement l’investissement initial déjà réalisé', 'iscorrect' => false],
                            ['text' => 'Uniquement les coûts historiques', 'iscorrect' => false],
                            ['text' => 'Les actifs non financiers uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet avec une VAN positive est généralement considéré comme :',
                        'answers' => [
                            ['text' => 'Créateur de valeur selon les hypothèses retenues', 'iscorrect' => true],
                            ['text' => 'Automatiquement sans risque', 'iscorrect' => false],
                            ['text' => 'Toujours inférieur à un projet à VAN nulle', 'iscorrect' => false],
                            ['text' => 'Impossible à analyser', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le calendrier des flux influence-t-il la VAN ?',
                        'answers' => [
                            ['text' => 'Parce que des flux éloignés dans le temps ont une valeur actuelle différente', 'iscorrect' => true],
                            ['text' => 'Parce que tous les flux futurs ont toujours la même valeur', 'iscorrect' => false],
                            ['text' => 'Parce que le taux disparaît après un an', 'iscorrect' => false],
                            ['text' => 'Parce que les flux futurs ne peuvent jamais être actualisés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si deux projets ont le même montant total de flux, mais que le premier reçoit les flux plus tôt, à taux positif, sa VAN est généralement :',
                        'answers' => [
                            ['text' => 'Plus élevée', 'iscorrect' => true],
                            ['text' => 'Plus faible', 'iscorrect' => false],
                            ['text' => 'Toujours identique', 'iscorrect' => false],
                            ['text' => 'Nécessairement nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut rendre l’analyse de VAN plus sensible ?',
                        'answers' => [
                            ['text' => Le choix du taux d’actualisation', 'iscorrect' => true],
                            ['text' => 'Le nom du projet', 'iscorrect' => false],
                            ['text' => 'La couleur du tableau financier', 'iscorrect' => false],
                            ['text' => 'Le nombre de pages du rapport', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle règle simplifiée est souvent utilisée pour un projet indépendant ?',
                        'answers' => [
                            ['text' => 'Accepter le projet si sa VAN est positive, sous réserve des autres contraintes de décision', 'iscorrect' => true],
                            ['text' => 'Accepter tout projet à VAN négative', 'iscorrect' => false],
                            ['text' => 'Refuser systématiquement toute VAN positive', 'iscorrect' => false],
                            ['text' => 'Ignorer le taux d’actualisation', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Taux de rendement et analyse financière',
                'questions' => [
                    [
                        'question' => 'Que cherche à mesurer le taux de rendement interne (TRI) ?',
                        'answers' => [
                            ['text' => 'Le taux qui rend la VAN du projet égale à zéro', 'iscorrect' => true],
                            ['text' => 'Le taux d’inflation uniquement', 'iscorrect' => false],
                            ['text' => 'Le taux de croissance du chiffre d’affaires', 'iscorrect' => false],
                            ['text' => 'Le taux de change annuel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le TRI d’un projet dépasse le taux de rendement exigé, le projet est généralement :',
                        'answers' => [
                            ['text' => 'Attrayant selon le critère du TRI, sous réserve des autres considérations', 'iscorrect' => true],
                            ['text' => 'Automatiquement sans risque', 'iscorrect' => false],
                            ['text' => 'Toujours déficitaire', 'iscorrect' => false],
                            ['text' => 'Impossible à évaluer', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel lien existe entre VAN et TRI ?',
                        'answers' => [
                            ['text' => Le TRI est le taux auquel la VAN devient nulle', 'iscorrect' => true],
                            ['text' => 'La VAN est toujours égale au TRI', 'iscorrect' => false],
                            ['text' => 'Le TRI mesure uniquement les intérêts simples', 'iscorrect' => false],
                            ['text' => 'Aucun lien conceptuel n’existe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un calcul du TRI peut-il être plus délicat qu’une VAN ?',
                        'answers' => [
                            ['text' => 'Il nécessite de rechercher le taux qui annule la VAN', 'iscorrect' => true],
                            ['text' => 'Il ne prend jamais en compte les flux', 'iscorrect' => false],
                            ['text' => 'Il utilise uniquement des données comptables historiques', 'iscorrect' => false],
                            ['text' => 'Il ne dépend d’aucun taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet coûte 5 000 € et produit des flux futurs. Pour calculer son TRI, il faut notamment connaître :',
                        'answers' => [
                            ['text' => Les montants et dates des flux de trésorerie', 'iscorrect' => true],
                            ['text' => 'Uniquement le coût initial', 'iscorrect' => false],
                            ['text' => 'Uniquement le nombre d’employés', 'iscorrect' => false],
                            ['text' => 'Uniquement le chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur mesure directement la valeur créée en euros selon un taux d’actualisation ?',
                        'answers' => [
                            ['text' => 'La VAN', 'iscorrect' => true],
                            ['text' => 'Le taux nominal', 'iscorrect' => false],
                            ['text' => 'Le taux de change', 'iscorrect' => false],
                            ['text' => 'Le taux d’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un TRI supérieur au taux exigé signifie généralement que :',
                        'answers' => [
                            ['text' => 'Le rendement implicite du projet dépasse le rendement minimum requis', 'iscorrect' => true],
                            ['text' => 'Le projet n’a aucun risque', 'iscorrect' => false],
                            ['text' => 'La VAN est nécessairement infinie', 'iscorrect' => false],
                            ['text' => 'Le projet n’a aucun flux futur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage de la VAN par rapport au simple rendement comptable ?',
                        'answers' => [
                            ['text' => 'Elle prend explicitement en compte la valeur temporelle des flux', 'iscorrect' => true],
                            ['text' => 'Elle ignore les flux de trésorerie', 'iscorrect' => false],
                            ['text' => 'Elle ne nécessite aucun taux', 'iscorrect' => false],
                            ['text' => 'Elle élimine le risque de prévision', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un projet possède des flux de trésorerie atypiques avec plusieurs changements de signe, le TRI peut :',
                        'answers' => [
                            ['text' => 'Présenter plusieurs solutions possibles ou être difficile à interpréter', 'iscorrect' => true],
                            ['text' => 'Être toujours égal à zéro', 'iscorrect' => false],
                            ['text' => 'Être automatiquement supérieur à la VAN', 'iscorrect' => false],
                            ['text' => 'Ne dépendre d’aucun flux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une analyse d’investissement, pourquoi est-il utile d’utiliser plusieurs indicateurs ?',
                        'answers' => [
                            ['text' => 'Parce que chaque indicateur apporte une perspective différente sur la rentabilité et la valeur', 'iscorrect' => true],
                            ['text' => 'Parce qu’un seul indicateur est toujours faux', 'iscorrect' => false],
                            ['text' => 'Parce que les flux de trésorerie n’ont aucune importance', 'iscorrect' => false],
                            ['text' => 'Parce que le taux d’actualisation peut être ignoré', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Révision intermédiaire des mathématiques financières',
                'questions' => [
                    [
                        'question' => 'Quelle méthode faut-il utiliser pour déterminer aujourd’hui la valeur d’un paiement futur ?',
                        'answers' => [
                            ['text' => 'L’actualisation', 'iscorrect' => true],
                            ['text' => 'La capitalisation', 'iscorrect' => false],
                            ['text' => 'La simple addition', 'iscorrect' => false],
                            ['text' => 'La dépréciation comptable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme explique principalement la croissance composée ?',
                        'answers' => [
                            ['text' => 'La capitalisation des intérêts déjà acquis', 'iscorrect' => true],
                            ['text' => 'La diminution automatique du taux', 'iscorrect' => false],
                            ['text' => 'La suppression des intérêts précédents', 'iscorrect' => false],
                            ['text' => 'La conversion des intérêts en charges', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux nominal de 10 % capitalisé semestriellement implique un taux périodique de :',
                        'answers' => [
                            ['text' => '5 % par semestre', 'iscorrect' => true],
                            ['text' => '10 % par semestre', 'iscorrect' => false],
                            ['text' => '2 % par semestre', 'iscorrect' => false],
                            ['text' => '20 % par semestre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément est essentiel pour calculer la valeur actuelle d’une rente ?',
                        'answers' => [
                            ['text' => 'Le montant des paiements, le taux et le nombre de périodes', 'iscorrect' => true],
                            ['text' => 'Uniquement le nombre de paiements', 'iscorrect' => false],
                            ['text' => 'Uniquement le capital initial', 'iscorrect' => false],
                            ['text' => 'Uniquement la devise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal avantage d’un tableau d’amortissement ?',
                        'answers' => [
                            ['text' => 'Il montre l’évolution de la dette et de ses composantes au fil des périodes', 'iscorrect' => true],
                            ['text' => 'Il prédit les cours boursiers', 'iscorrect' => false],
                            ['text' => 'Il calcule uniquement les ventes', 'iscorrect' => false],
                            ['text' => 'Il élimine le coût du crédit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si deux investissements ont des flux identiques mais à des dates différentes, lequel est généralement préférable à taux positif si ses flux arrivent plus tôt ?',
                        'answers' => [
                            ['text' => 'Celui dont les flux arrivent plus tôt', 'iscorrect' => true],
                            ['text' => 'Celui dont les flux arrivent plus tard', 'iscorrect' => false],
                            ['text' => 'Ils ont toujours exactement la même valeur', 'iscorrect' => false],
                            ['text' => 'Aucun ne peut être comparé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur correspond à la valeur créée ou détruite exprimée en valeur monétaire actuelle ?',
                        'answers' => [
                            ['text' => 'La VAN', 'iscorrect' => true],
                            ['text' => 'Le taux nominal', 'iscorrect' => false],
                            ['text' => 'Le taux périodique', 'iscorrect' => false],
                            ['text' => 'Le nombre de périodes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement avec la VAN lorsque le taux d’actualisation augmente ?',
                        'answers' => [
                            ['text' => 'Elle diminue pour un projet avec des flux futurs positifs', 'iscorrect' => true],
                            ['text' => 'Elle augmente toujours', 'iscorrect' => false],
                            ['text' => 'Elle devient automatiquement égale au coût initial', 'iscorrect' => false],
                            ['text' => 'Elle ne change jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel calcul permet de déterminer le taux qui annule la VAN ?',
                        'answers' => [
                            ['text' => 'Le calcul du TRI', 'iscorrect' => true],
                            ['text' => 'Le calcul de l’intérêt simple', 'iscorrect' => false],
                            ['text' => 'Le calcul du taux de change', 'iscorrect' => false],
                            ['text' => 'Le calcul de la marge brute', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit être vérifié avant d’appliquer une formule financière ?',
                        'answers' => [
                            ['text' => 'La cohérence entre le taux, la durée et l’unité de période', 'iscorrect' => true],
                            ['text' => 'La couleur utilisée dans le tableau', 'iscorrect' => false],
                            ['text' => 'Le nombre de lignes du document', 'iscorrect' => false],
                            ['text' => 'Le nom du produit financier uniquement', 'iscorrect' => false],
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
                        'answer' => $answerData['text'],
                        'iscorrect' => $answerData['iscorrect'],
                    ]);
                }
            }
        }
    }
}
```
