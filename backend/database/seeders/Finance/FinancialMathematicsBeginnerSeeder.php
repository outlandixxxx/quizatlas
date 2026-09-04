```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FinancialMathematicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'financial-mathematics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction aux mathématiques financières',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal des mathématiques financières ?',
                        'answers' => [
                            ['text' => 'Analyser la valeur de l’argent dans le temps', 'iscorrect' => true],
                            ['text' => 'Déterminer la nationalité d’une entreprise', 'iscorrect' => false],
                            ['text' => 'Calculer uniquement les salaires', 'iscorrect' => false],
                            ['text' => 'Remplacer la comptabilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la valeur temporelle de l’argent ?',
                        'answers' => [
                            ['text' => 'Un montant disponible aujourd’hui peut avoir une valeur différente du même montant disponible plus tard', 'iscorrect' => true],
                            ['text' => 'L’argent conserve toujours exactement la même valeur', 'iscorrect' => false],
                            ['text' => 'Les prix ne changent jamais avec le temps', 'iscorrect' => false],
                            ['text' => 'Tous les investissements ont le même rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément est nécessaire pour calculer une valeur future simple ?',
                        'answers' => [
                            ['text' => 'Le capital initial, le taux et la durée', 'iscorrect' => true],
                            ['text' => 'Uniquement le capital initial', 'iscorrect' => false],
                            ['text' => 'Uniquement la durée', 'iscorrect' => false],
                            ['text' => 'Uniquement le taux d’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un capital de 1 000 € produit 5 % d’intérêt simple pendant un an, quel est l’intérêt ?',
                        'answers' => [
                            ['text' => '50 €', 'iscorrect' => true],
                            ['text' => '5 €', 'iscorrect' => false],
                            ['text' => '100 €', 'iscorrect' => false],
                            ['text' => '1 050 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec un intérêt simple de 5 % sur 1 000 € pendant deux ans, quel est l’intérêt total ?',
                        'answers' => [
                            ['text' => '100 €', 'iscorrect' => true],
                            ['text' => '50 €', 'iscorrect' => false],
                            ['text' => '105 €', 'iscorrect' => false],
                            ['text' => '1 100 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le capital final d’un placement de 1 000 € à intérêt simple de 5 % pendant deux ans ?',
                        'answers' => [
                            ['text' => '1 100 €', 'iscorrect' => true],
                            ['text' => '1 050 €', 'iscorrect' => false],
                            ['text' => '1 025 €', 'iscorrect' => false],
                            ['text' => '1 200 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le taux d’intérêt dans un calcul financier ?',
                        'answers' => [
                            ['text' => 'Le coût ou le rendement exprimé proportionnellement au capital', 'iscorrect' => true],
                            ['text' => 'Le montant total du capital', 'iscorrect' => false],
                            ['text' => 'La durée du placement uniquement', 'iscorrect' => false],
                            ['text' => 'Le nombre de paiements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux annuel est de 4 %, quelle est sa forme décimale ?',
                        'answers' => [
                            ['text' => '0,04', 'iscorrect' => true],
                            ['text' => '0,4', 'iscorrect' => false],
                            ['text' => '4,00', 'iscorrect' => false],
                            ['text' => '40', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un calcul financier, que représente généralement n ?',
                        'answers' => [
                            ['text' => 'Le nombre de périodes', 'iscorrect' => true],
                            ['text' => 'Le capital initial', 'iscorrect' => false],
                            ['text' => 'Le taux d’intérêt', 'iscorrect' => false],
                            ['text' => 'Le montant des intérêts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt simple produit par 2 000 € à 3 % pendant un an ?',
                        'answers' => [
                            ['text' => '60 €', 'iscorrect' => true],
                            ['text' => '30 €', 'iscorrect' => false],
                            ['text' => '600 €', 'iscorrect' => false],
                            ['text' => '2 060 €', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Intérêt simple',
                'questions' => [
                    [
                        'question' => 'Quelle formule permet de calculer l’intérêt simple ?',
                        'answers' => [
                            ['text' => 'I = C × i × n', 'iscorrect' => true],
                            ['text' => 'I = C + i + n', 'iscorrect' => false],
                            ['text' => 'I = C ÷ i × n', 'iscorrect' => false],
                            ['text' => 'I = C × i ÷ n', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un capital de 5 000 € est placé à 4 % pendant un an. Quel est l’intérêt ?',
                        'answers' => [
                            ['text' => '200 €', 'iscorrect' => true],
                            ['text' => '20 €', 'iscorrect' => false],
                            ['text' => '500 €', 'iscorrect' => false],
                            ['text' => '5 200 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un capital de 3 000 € est placé à 6 % pendant deux ans à intérêt simple. Quel est l’intérêt ?',
                        'answers' => [
                            ['text' => '360 €', 'iscorrect' => true],
                            ['text' => '180 €', 'iscorrect' => false],
                            ['text' => '306 €', 'iscorrect' => false],
                            ['text' => '3 360 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si l’intérêt simple est de 150 € sur un capital de 3 000 € pendant un an, quel est le taux ?',
                        'answers' => [
                            ['text' => '5 %', 'iscorrect' => true],
                            ['text' => '0,5 %', 'iscorrect' => false],
                            ['text' => '15 %', 'iscorrect' => false],
                            ['text' => '50 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un capital de 4 000 € génère 240 € d’intérêt à 6 %. Quelle est la durée ?',
                        'answers' => [
                            ['text' => '1 an', 'iscorrect' => true],
                            ['text' => '2 ans', 'iscorrect' => false],
                            ['text' => '6 ans', 'iscorrect' => false],
                            ['text' => '0,5 an', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'À intérêt simple, si le taux double et que le capital et la durée restent constants, l’intérêt :',
                        'answers' => [
                            ['text' => 'Double', 'iscorrect' => true],
                            ['text' => 'Reste identique', 'iscorrect' => false],
                            ['text' => 'Est divisé par deux', 'iscorrect' => false],
                            ['text' => 'Devient nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'À intérêt simple, si la durée double et que le taux reste constant, l’intérêt :',
                        'answers' => [
                            ['text' => 'Double', 'iscorrect' => true],
                            ['text' => 'Est divisé par deux', 'iscorrect' => false],
                            ['text' => 'Reste identique', 'iscorrect' => false],
                            ['text' => 'Est multiplié par quatre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel capital placé à 5 % pendant un an produit 250 € d’intérêt simple ?',
                        'answers' => [
                            ['text' => '5 000 €', 'iscorrect' => true],
                            ['text' => '1 250 €', 'iscorrect' => false],
                            ['text' => '500 €', 'iscorrect' => false],
                            ['text' => '25 000 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un placement de 10 000 € à 2 % pendant trois ans produit quel intérêt simple ?',
                        'answers' => [
                            ['text' => '600 €', 'iscorrect' => true],
                            ['text' => '200 €', 'iscorrect' => false],
                            ['text' => '400 €', 'iscorrect' => false],
                            ['text' => '10 600 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le capital final de 8 000 € placés à 4 % pendant deux ans à intérêt simple ?',
                        'answers' => [
                            ['text' => '8 640 €', 'iscorrect' => true],
                            ['text' => '8 320 €', 'iscorrect' => false],
                            ['text' => '8 080 €', 'iscorrect' => false],
                            ['text' => '9 280 €', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Intérêt composé',
                'questions' => [
                    [
                        'question' => 'Quelle est la principale différence entre intérêt simple et intérêt composé ?',
                        'answers' => [
                            ['text' => 'Avec l’intérêt composé, les intérêts accumulés peuvent eux-mêmes produire des intérêts', 'iscorrect' => true],
                            ['text' => 'L’intérêt composé ne dépend jamais du taux', 'iscorrect' => false],
                            ['text' => 'L’intérêt simple capitalise automatiquement chaque mois', 'iscorrect' => false],
                            ['text' => 'Il n’existe aucune différence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle formule représente la valeur future avec capitalisation composée annuelle ?',
                        'answers' => [
                            ['text' => 'VF = C(1 + i)^n', 'iscorrect' => true],
                            ['text' => 'VF = C + i + n', 'iscorrect' => false],
                            ['text' => 'VF = C × i × n', 'iscorrect' => false],
                            ['text' => 'VF = C ÷ (1 + i)^n', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur future de 1 000 € à 10 % composé pendant deux ans ?',
                        'answers' => [
                            ['text' => '1 210 €', 'iscorrect' => true],
                            ['text' => '1 200 €', 'iscorrect' => false],
                            ['text' => '1 100 €', 'iscorrect' => false],
                            ['text' => '1 020 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour un placement composé, augmenter le nombre de périodes de capitalisation tend à :',
                        'answers' => [
                            ['text' => Augmenter la valeur future lorsque le taux nominal et les autres conditions sont comparables', 'iscorrect' => true],
                            ['text' => 'Toujours réduire la valeur future à zéro', 'iscorrect' => false],
                            ['text' => 'Ne rien changer dans aucun cas', 'iscorrect' => false],
                            ['text' => 'Supprimer le taux d’intérêt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si 2 000 € sont placés à 5 % composé pendant un an, quelle est la valeur future ?',
                        'answers' => [
                            ['text' => '2 100 €', 'iscorrect' => true],
                            ['text' => '2 050 €', 'iscorrect' => false],
                            ['text' => '2 500 €', 'iscorrect' => false],
                            ['text' => '2 005 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur future de 1 000 € à 5 % composé pendant trois ans ?',
                        'answers' => [
                            ['text' => '1 157,63 €', 'iscorrect' => true],
                            ['text' => '1 150 €', 'iscorrect' => false],
                            ['text' => '1 050 €', 'iscorrect' => false],
                            ['text' => '1 500 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le facteur (1 + i)^n ?',
                        'answers' => [
                            ['text' => 'Le facteur d’accumulation composé', 'iscorrect' => true],
                            ['text' => 'Le taux d’inflation uniquement', 'iscorrect' => false],
                            ['text' => 'Le capital initial', 'iscorrect' => false],
                            ['text' => 'La durée en années uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec une capitalisation annuelle, les intérêts d’une période sont calculés sur :',
                        'answers' => [
                            ['text' => 'Le capital accumulé au début de la période', 'iscorrect' => true],
                            ['text' => 'Uniquement les intérêts de la période précédente', 'iscorrect' => false],
                            ['text' => 'Toujours le capital initial uniquement', 'iscorrect' => false],
                            ['text' => 'La durée uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’effet du temps sur un placement composé positif ?',
                        'answers' => [
                            ['text' => 'La capitalisation peut accélérer la croissance du capital au fil du temps', 'iscorrect' => true],
                            ['text' => 'Le capital devient nécessairement constant', 'iscorrect' => false],
                            ['text' => 'Les intérêts disparaissent', 'iscorrect' => false],
                            ['text' => 'Le taux devient automatiquement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'À taux positif, un placement composé pendant deux périodes produit généralement plus qu’un placement à intérêt simple de même capital, taux et durée lorsque la capitalisation des intérêts est effective. Pourquoi ?',
                        'answers' => [
                            ['text' => 'Parce que les intérêts de la première période produisent eux-mêmes des intérêts', 'iscorrect' => true],
                            ['text' => 'Parce que le taux devient automatiquement supérieur', 'iscorrect' => false],
                            ['text' => 'Parce que le capital initial double immédiatement', 'iscorrect' => false],
                            ['text' => 'Parce que la durée est annulée', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Valeur actuelle et actualisation',
                'questions' => [
                    [
                        'question' => 'Que signifie actualiser un flux financier ?',
                        'answers' => [
                            ['text' => 'Calculer sa valeur équivalente à une date antérieure en utilisant un taux d’actualisation', 'iscorrect' => true],
                            ['text' => 'Augmenter automatiquement son montant', 'iscorrect' => false],
                            ['text' => 'Supprimer le facteur temps', 'iscorrect' => false],
                            ['text' => 'Convertir le flux en devise étrangère', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle formule représente la valeur actuelle d’un montant futur unique ?',
                        'answers' => [
                            ['text' => 'VA = VF / (1 + i)^n', 'iscorrect' => true],
                            ['text' => 'VA = VF × (1 + i)^n', 'iscorrect' => false],
                            ['text' => 'VA = VF × i × n', 'iscorrect' => false],
                            ['text' => 'VA = VF + i + n', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur actuelle de 1 100 € reçus dans un an avec un taux d’actualisation de 10 % ?',
                        'answers' => [
                            ['text' => '1 000 €', 'iscorrect' => true],
                            ['text' => '990 €', 'iscorrect' => false],
                            ['text' => '1 010 €', 'iscorrect' => false],
                            ['text' => '1 210 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux d’actualisation augmente, toutes choses égales par ailleurs, la valeur actuelle d’un flux futur :',
                        'answers' => [
                            ['text' => 'Diminue', 'iscorrect' => true],
                            ['text' => 'Augmente toujours', 'iscorrect' => false],
                            ['text' => 'Reste toujours identique', 'iscorrect' => false],
                            ['text' => 'Devient nécessairement négative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Plus un flux est éloigné dans le temps, plus sa valeur actuelle est généralement :',
                        'answers' => [
                            ['text' => 'Faible pour un taux d’actualisation positif', 'iscorrect' => true],
                            ['text' => 'Élevée sans limite', 'iscorrect' => false],
                            ['text' => 'Toujours égale à sa valeur future', 'iscorrect' => false],
                            ['text' => 'Indépendante du taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle du taux d’actualisation ?',
                        'answers' => [
                            ['text' => 'Refléter le coût du temps et, selon le contexte, le risque associé aux flux futurs', 'iscorrect' => true],
                            ['text' => 'Déterminer uniquement la durée', 'iscorrect' => false],
                            ['text' => 'Garantir le paiement du flux', 'iscorrect' => false],
                            ['text' => 'Modifier la valeur nominale du contrat', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La valeur actuelle nette, ou VAN, compare principalement :',
                        'answers' => [
                            ['text' => 'La valeur actuelle des flux futurs avec l’investissement initial', 'iscorrect' => true],
                            ['text' => 'Deux taux d’inflation uniquement', 'iscorrect' => false],
                            ['text' => 'Deux salaires', 'iscorrect' => false],
                            ['text' => 'Le chiffre d’affaires avec les dividendes uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une VAN positive signifie généralement que :',
                        'answers' => [
                            ['text' => 'Les flux actualisés dépassent l’investissement initial selon le taux retenu', 'iscorrect' => true],
                            ['text' => 'Le projet ne produit aucun flux', 'iscorrect' => false],
                            ['text' => 'Le projet est nécessairement sans risque', 'iscorrect' => false],
                            ['text' => 'Le taux d’actualisation est nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe fondamental derrière l’actualisation ?',
                        'answers' => [
                            ['text' => 'Un euro aujourd’hui peut être investi et produire un rendement avant une réception future', 'iscorrect' => true],
                            ['text' => 'Un euro futur vaut toujours plus qu’un euro présent', 'iscorrect' => false],
                            ['text' => 'Le temps n’a aucun effet financier', 'iscorrect' => false],
                            ['text' => 'Tous les flux futurs sont certains', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit 2 000 € dans deux ans. Avec un taux de 10 %, sa valeur actuelle est approximativement :',
                        'answers' => [
                            ['text' => '1 652,89 €', 'iscorrect' => true],
                            ['text' => '1 800 €', 'iscorrect' => false],
                            ['text' => '2 200 €', 'iscorrect' => false],
                            ['text' => '1 900 €', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Rentes et annuités',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une rente financière ?',
                        'answers' => [
                            ['text' => 'Une série de paiements effectués à intervalles réguliers', 'iscorrect' => true],
                            ['text' => 'Un paiement unique sans échéance', 'iscorrect' => false],
                            ['text' => 'Un taux d’intérêt uniquement', 'iscorrect' => false],
                            ['text' => 'Une taxe financière', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une annuité ordinaire, les paiements sont effectués :',
                        'answers' => [
                            ['text' => 'À la fin de chaque période', 'iscorrect' => true],
                            ['text' => 'Au début de chaque période', 'iscorrect' => false],
                            ['text' => 'Uniquement tous les cinq ans', 'iscorrect' => false],
                            ['text' => 'Sans calendrier déterminé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une annuité à terme à échoir, les paiements sont effectués :',
                        'answers' => [
                            ['text' => 'Au début de chaque période', 'iscorrect' => true],
                            ['text' => 'À la fin de chaque période', 'iscorrect' => false],
                            ['text' => 'Une seule fois', 'iscorrect' => false],
                            ['text' => 'Uniquement après l’échéance finale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une rente de 500 € par an pendant trois ans comporte combien de paiements ?',
                        'answers' => [
                            ['text' => '3', 'iscorrect' => true],
                            ['text' => '2', 'iscorrect' => false],
                            ['text' => '4', 'iscorrect' => false],
                            ['text' => '5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur actuelle d’une rente ?',
                        'answers' => [
                            ['text' => 'La somme des valeurs actuelles de chacun des paiements futurs', 'iscorrect' => true],
                            ['text' => 'La somme des paiements sans tenir compte du temps', 'iscorrect' => false],
                            ['text' => 'Le premier paiement uniquement', 'iscorrect' => false],
                            ['text' => 'Le taux multiplié par la durée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les paiements d’une annuité restent constants mais que le taux d’actualisation augmente, sa valeur actuelle :',
                        'answers' => [
                            ['text' => 'Diminue', 'iscorrect' => true],
                            ['text' => 'Augmente toujours', 'iscorrect' => false],
                            ['text' => 'Reste toujours identique', 'iscorrect' => false],
                            ['text' => 'Devient automatiquement égale à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément distingue principalement une rente perpétuelle d’une annuité ?',
                        'answers' => [
                            ['text' => 'La rente perpétuelle continue indéfiniment alors que l’annuité comporte un nombre fini de paiements', 'iscorrect' => true],
                            ['text' => 'Une annuité ne comporte jamais d’intérêts', 'iscorrect' => false],
                            ['text' => 'Une rente perpétuelle ne comporte aucun paiement', 'iscorrect' => false],
                            ['text' => 'Les deux sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la formule de la valeur actuelle d’une rente perpétuelle constante, dans le cas simple ?',
                        'answers' => [
                            ['text' => 'VA = Paiement / taux', 'iscorrect' => true],
                            ['text' => 'VA = Paiement × taux', 'iscorrect' => false],
                            ['text' => 'VA = Paiement + taux', 'iscorrect' => false],
                            ['text' => 'VA = taux / paiement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une rente perpétuelle de 100 € par an avec un taux de 5 % vaut, dans le cas simple :',
                        'answers' => [
                            ['text' => '2 000 €', 'iscorrect' => true],
                            ['text' => '500 €', 'iscorrect' => false],
                            ['text' => '105 €', 'iscorrect' => false],
                            ['text' => '20 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une annuité à terme à échoir et une annuité ordinaire ont les mêmes paiements et le même taux, laquelle a généralement la valeur actuelle la plus élevée ?',
                        'answers' => [
                            ['text' => 'L’annuité à terme à échoir', 'iscorrect' => true],
                            ['text' => 'L’annuité ordinaire', 'iscorrect' => false],
                            ['text' => 'Elles ont toujours exactement la même valeur', 'iscorrect' => false],
                            ['text' => 'Aucune ne peut être évaluée', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Taux équivalents et capitalisation',
                'questions' => [
                    [
                        'question' => 'Pourquoi faut-il distinguer taux nominal et taux effectif ?',
                        'answers' => [
                            ['text' => 'Parce que la fréquence de capitalisation influence le rendement réellement obtenu', 'iscorrect' => true],
                            ['text' => 'Parce que le taux nominal est toujours supérieur au taux effectif', 'iscorrect' => false],
                            ['text' => 'Parce que les deux termes désignent toujours exactement la même chose', 'iscorrect' => false],
                            ['text' => 'Parce que le taux effectif ne dépend jamais de la capitalisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux nominal annuel de 12 % capitalisé mensuellement correspond à quel taux périodique mensuel ?',
                        'answers' => [
                            ['text' => '1 %', 'iscorrect' => true],
                            ['text' => '12 %', 'iscorrect' => false],
                            ['text' => '0,12 %', 'iscorrect' => false],
                            ['text' => '6 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec un taux nominal annuel de 12 % capitalisé mensuellement, combien de périodes de capitalisation y a-t-il par an ?',
                        'answers' => [
                            ['text' => '12', 'iscorrect' => true],
                            ['text' => '4', 'iscorrect' => false],
                            ['text' => '2', 'iscorrect' => false],
                            ['text' => '365', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie un taux effectif annuel ?',
                        'answers' => [
                            ['text' => 'Le rendement annuel réellement obtenu après prise en compte de la fréquence de capitalisation', 'iscorrect' => true],
                            ['text' => 'Le taux mensuel multiplié simplement par 12 dans tous les cas', 'iscorrect' => false],
                            ['text' => 'Le taux nominal sans capitalisation', 'iscorrect' => false],
                            ['text' => 'Le montant des intérêts en euros', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un taux annuel est capitalisé trimestriellement, combien de périodes y a-t-il par an ?',
                        'answers' => [
                            ['text' => '4', 'iscorrect' => true],
                            ['text' => '3', 'iscorrect' => false],
                            ['text' => '12', 'iscorrect' => false],
                            ['text' => '2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'À taux nominal identique, une fréquence de capitalisation plus élevée tend à produire :',
                        'answers' => [
                            ['text' => 'Un taux effectif plus élevé lorsque le taux est positif', 'iscorrect' => true],
                            ['text' => 'Un taux effectif nécessairement nul', 'iscorrect' => false],
                            ['text' => 'Toujours un taux effectif inférieur', 'iscorrect' => false],
                            ['text' => 'Aucun changement dans aucun cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe permet de comparer correctement deux taux exprimés sur des fréquences différentes ?',
                        'answers' => [
                            ['text' => 'Les convertir en taux équivalents sur une même base temporelle', 'iscorrect' => true],
                            ['text' => 'Additionner directement les taux', 'iscorrect' => false],
                            ['text' => 'Comparer uniquement les nombres sans fréquence', 'iscorrect' => false],
                            ['text' => 'Ignorer la capitalisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le taux effectif approximatif d’un taux nominal de 10 % capitalisé annuellement ?',
                        'answers' => [
                            ['text' => '10 %', 'iscorrect' => true],
                            ['text' => '5 %', 'iscorrect' => false],
                            ['text' => '20 %', 'iscorrect' => false],
                            ['text' => '0,10 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux périodique de 2 % appliqué chaque trimestre implique quel taux nominal annuel si le taux est simplement annualisé ?',
                        'answers' => [
                            ['text' => '8 %', 'iscorrect' => true],
                            ['text' => '2 %', 'iscorrect' => false],
                            ['text' => '24 %', 'iscorrect' => false],
                            ['text' => '0,5 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les taux équivalents sont-ils importants dans les décisions financières ?',
                        'answers' => [
                            ['text' => 'Ils permettent de comparer des placements ou financements ayant des fréquences de capitalisation différentes', 'iscorrect' => true],
                            ['text' => 'Ils éliminent automatiquement le risque', 'iscorrect' => false],
                            ['text' => 'Ils garantissent le rendement futur', 'iscorrect' => false],
                            ['text' => 'Ils remplacent les flux de trésorerie', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Applications financières et calculs pratiques',
                'questions' => [
                    [
                        'question' => 'Un investisseur place 5 000 € à 4 % composé pendant deux ans. Quelle est la valeur future ?',
                        'answers' => [
                            ['text' => '5 408 €', 'iscorrect' => true],
                            ['text' => '5 400 €', 'iscorrect' => false],
                            ['text' => '5 200 €', 'iscorrect' => false],
                            ['text' => '5 800 €', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un montant de 10 000 € doit être disponible dans trois ans. Avec un taux de 5 %, faut-il aujourd’hui plus ou moins de 10 000 € pour atteindre cet objectif ?',
                        'answers' => [
                            ['text' => 'Moins de 10 000 €', 'iscorrect' => true],
                            ['text' => 'Exactement 10 000 € dans tous les cas', 'iscorrect' => false],
                            ['text' => 'Plus de 10 000 €', 'iscorrect' => false],
                            ['text' => 'Aucun capital', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un emprunteur rembourse 1 000 € à la fin de chaque année pendant trois ans, il effectue :',
                        'answers' => [
                            ['text' => '3 paiements', 'iscorrect' => true],
                            ['text' => '2 paiements', 'iscorrect' => false],
                            ['text' => '4 paiements', 'iscorrect' => false],
                            ['text' => '1 paiement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un prêt amortissable à mensualités constantes, chaque mensualité comprend généralement :',
                        'answers' => [
                            ['text' => 'Une part d’intérêts et une part de remboursement du principal', 'iscorrect' => true],
                            ['text' => 'Uniquement des intérêts jusqu’à la dernière échéance', 'iscorrect' => false],
                            ['text' => 'Uniquement du principal dès le premier paiement', 'iscorrect' => false],
                            ['text' => 'Uniquement des frais administratifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsque le principal d’un prêt diminue, les intérêts calculés sur le solde restant tendent à :',
                        'answers' => [
                            ['text' => 'Diminuer si le taux reste constant', 'iscorrect' => true],
                            ['text' => 'Augmenter toujours', 'iscorrect' => false],
                            ['text' => 'Rester identiques dans tous les cas', 'iscorrect' => false],
                            ['text' => 'Devenir automatiquement nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un tableau d’amortissement ?',
                        'answers' => [
                            ['text' => 'Présenter l’évolution du capital restant dû, des intérêts et des remboursements', 'iscorrect' => true],
                            ['text' => 'Calculer uniquement le bénéfice de l’entreprise', 'iscorrect' => false],
                            ['text' => 'Prévoir le cours d’une action', 'iscorrect' => false],
                            ['text' => 'Mesurer uniquement l’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur compare deux projets ayant des flux à des dates différentes. Quel outil mathématique est essentiel ?',
                        'answers' => [
                            ['text' => 'L’actualisation des flux de trésorerie', 'iscorrect' => true],
                            ['text' => 'La multiplication des montants sans tenir compte du temps', 'iscorrect' => false],
                            ['text' => 'La moyenne arithmétique des taux uniquement', 'iscorrect' => false],
                            ['text' => 'Le nombre de salariés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit être respecté lorsqu’on compare deux investissements de durées différentes ?',
                        'answers' => [
                            ['text' => 'Tenir compte du calendrier des flux et utiliser une méthode cohérente de valorisation', 'iscorrect' => true],
                            ['text' => 'Comparer uniquement les investissements initiaux', 'iscorrect' => false],
                            ['text' => 'Ignorer les flux futurs', 'iscorrect' => false],
                            ['text' => 'Choisir automatiquement le projet le plus long', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux d’actualisation de 0 % implique, dans le cas d’un flux certain unique :',
                        'answers' => [
                            ['text' => 'Une valeur actuelle égale à la valeur future', 'iscorrect' => true],
                            ['text' => 'Une valeur actuelle toujours nulle', 'iscorrect' => false],
                            ['text' => 'Une valeur actuelle supérieure à la valeur future', 'iscorrect' => false],
                            ['text' => 'Une valeur future égale à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il conserver les unités temporelles cohérentes dans un calcul financier ?',
                        'answers' => [
                            ['text' => 'Parce que le taux et le nombre de périodes doivent correspondre à la même unité de temps', 'iscorrect' => true],
                            ['text' => 'Parce que les unités n’ont jamais d’importance', 'iscorrect' => false],
                            ['text' => 'Parce que le capital change selon l’unité utilisée', 'iscorrect' => false],
                            ['text' => 'Parce que tous les taux sont nécessairement mensuels', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Révision générale des mathématiques financières',
                'questions' => [
                    [
                        'question' => 'Quel concept permet de déterminer combien vaut aujourd’hui un flux futur ?',
                        'answers' => [
                            ['text' => 'La valeur actuelle', 'iscorrect' => true],
                            ['text' => 'La valeur nominale uniquement', 'iscorrect' => false],
                            ['text' => 'Le taux de change uniquement', 'iscorrect' => false],
                            ['text' => 'La marge commerciale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel concept permet de déterminer la valeur future d’un capital placé aujourd’hui ?',
                        'answers' => [
                            ['text' => 'La capitalisation', 'iscorrect' => true],
                            ['text' => 'L’amortissement comptable uniquement', 'iscorrect' => false],
                            ['text' => 'La dépréciation', 'iscorrect' => false],
                            ['text' => 'La conversion monétaire uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle méthode est appropriée pour une série de paiements réguliers ?',
                        'answers' => [
                            ['text' => 'Le calcul de la valeur d’une rente ou annuité', 'iscorrect' => true],
                            ['text' => 'Le calcul d’un seul flux uniquement', 'iscorrect' => false],
                            ['text' => 'La conversion en actions', 'iscorrect' => false],
                            ['text' => 'La simple addition des taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux d’intérêt augmente, la valeur future d’un capital positif placé aujourd’hui pendant une durée donnée :',
                        'answers' => [
                            ['text' => 'Augmente généralement', 'iscorrect' => true],
                            ['text' => 'Diminue toujours', 'iscorrect' => false],
                            ['text' => 'Reste nécessairement identique', 'iscorrect' => false],
                            ['text' => 'Devient automatiquement négative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux d’actualisation augmente, la valeur actuelle d’un flux futur positif :',
                        'answers' => [
                            ['text' => 'Diminue généralement', 'iscorrect' => true],
                            ['text' => 'Augmente toujours', 'iscorrect' => false],
                            ['text' => 'Reste identique dans tous les cas', 'iscorrect' => false],
                            ['text' => 'Devient toujours égale au flux futur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la principale raison de l’utilisation de l’actualisation en finance ?',
                        'answers' => [
                            ['text' => 'Comparer des flux financiers intervenant à des dates différentes', 'iscorrect' => true],
                            ['text' => 'Éliminer toutes les incertitudes', 'iscorrect' => false],
                            ['text' => 'Garantir un rendement', 'iscorrect' => false],
                            ['text' => 'Déterminer uniquement les coûts comptables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un calcul à intérêt composé, que se passe-t-il lorsque les intérêts sont réinvestis ?',
                        'answers' => [
                            ['text' => 'Ils peuvent produire eux-mêmes des intérêts lors des périodes suivantes', 'iscorrect' => true],
                            ['text' => 'Ils sont automatiquement supprimés', 'iscorrect' => false],
                            ['text' => 'Ils ne peuvent plus être pris en compte', 'iscorrect' => false],
                            ['text' => 'Ils deviennent toujours négatifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément doit être cohérent avec le taux périodique dans une formule financière ?',
                        'answers' => [
                            ['text' => 'Le nombre de périodes', 'iscorrect' => true],
                            ['text' => 'Le nom de l’investisseur', 'iscorrect' => false],
                            ['text' => 'La devise uniquement', 'iscorrect' => false],
                            ['text' => 'Le secteur d’activité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investissement présente une VAN positive au taux d’actualisation retenu. Quelle conclusion est la plus appropriée ?',
                        'answers' => [
                            ['text' => 'Il crée une valeur positive selon les hypothèses et le taux utilisés', 'iscorrect' => true],
                            ['text' => 'Il est nécessairement sans risque', 'iscorrect' => false],
                            ['text' => 'Il garantit un bénéfice futur', 'iscorrect' => false],
                            ['text' => 'Il doit obligatoirement être accepté dans toutes les situations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur réflexe avant d’effectuer un calcul financier ?',
                        'answers' => [
                            ['text' => 'Identifier les flux, les dates, le taux et l’unité de temps utilisés', 'iscorrect' => true],
                            ['text' => 'Choisir une formule au hasard', 'iscorrect' => false],
                            ['text' => 'Ignorer les dates des paiements', 'iscorrect' => false],
                            ['text' => 'Utiliser systématiquement un taux annuel avec des périodes mensuelles', 'iscorrect' => false],
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
