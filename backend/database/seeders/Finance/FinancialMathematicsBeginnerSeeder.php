<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialMathematicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-mathematics')->firstOrFail();

        $quizSettings = [
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
        ];

        $quizzes = [
            [
                'title' => 'Introduction aux mathématiques financières',
                'description' => 'Introduction aux mathématiques financières',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal des mathématiques financières ?',
                        'explanation' => 'Les mathématiques financières étudient notamment la valeur de l’argent dans le temps, les taux et les calculs de capitalisation ou d’actualisation.',
                        'choices' => [
                            ['choice_text' => 'Analyser la valeur de l’argent dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Mesurer la performance comptable d’une entreprise', 'is_correct' => false],
                            ['choice_text' => 'Prévoir l’évolution des cours de la Bourse', 'is_correct' => false],
                            ['choice_text' => 'Contrôler la conformité fiscale des déclarations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la valeur temporelle de l’argent ?',
                        'explanation' => 'Un montant disponible aujourd’hui peut être investi et produire un rendement avant qu’un même montant futur soit reçu.',
                        'choices' => [
                            ['choice_text' => 'Un montant reçu plus tard vaut davantage qu’un montant identique reçu aujourd’hui, à taux positif', 'is_correct' => false],
                            ['choice_text' => 'Un montant disponible aujourd’hui a la même valeur que le même montant reçu plus tard, car la monnaie est stable', 'is_correct' => false],
                            ['choice_text' => 'Un montant disponible aujourd’hui peut avoir une valeur différente du même montant disponible plus tard', 'is_correct' => true],
                            ['choice_text' => 'La valeur d’un montant dépend de la monnaie dans laquelle il est exprimé et non de la date de réception', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément est nécessaire pour calculer une valeur future simple ?',
                        'explanation' => 'Le capital initial, le taux et la durée sont les trois éléments nécessaires pour calculer une valeur future simple.',
                        'choices' => [
                            ['choice_text' => 'Le capital final, le taux et la durée', 'is_correct' => false],
                            ['choice_text' => 'Le capital initial, le taux de change et la durée', 'is_correct' => false],
                            ['choice_text' => 'Le capital initial, le taux et la durée', 'is_correct' => true],
                            ['choice_text' => 'Le capital initial, le taux et le montant des intérêts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un capital de 1 000 € produit 5 % d’intérêt simple pendant un an, quel est l’intérêt ?',
                        'explanation' => '1 000 € × 5 % = 50 €.',
                        'choices' => [
                            ['choice_text' => '5 €', 'is_correct' => false],
                            ['choice_text' => '50 €', 'is_correct' => true],
                            ['choice_text' => '100 €', 'is_correct' => false],
                            ['choice_text' => '1 050 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec un intérêt simple de 5 % sur 1 000 € pendant deux ans, quel est l’intérêt total ?',
                        'explanation' => '1 000 € × 5 % × 2 ans = 100 €.',
                        'choices' => [
                            ['choice_text' => '50 €', 'is_correct' => false],
                            ['choice_text' => '100 €', 'is_correct' => true],
                            ['choice_text' => '105 €', 'is_correct' => false],
                            ['choice_text' => '1 100 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le capital final d’un placement de 1 000 € à intérêt simple de 5 % pendant deux ans ?',
                        'explanation' => 'Capital final = 1 000 € + (1 000 € × 5 % × 2 ans) = 1 100 €.',
                        'choices' => [
                            ['choice_text' => '1 025 €', 'is_correct' => false],
                            ['choice_text' => '1 050 €', 'is_correct' => false],
                            ['choice_text' => '1 100 €', 'is_correct' => true],
                            ['choice_text' => '1 200 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le taux d’intérêt dans un calcul financier ?',
                        'explanation' => 'Le taux d’intérêt exprime le coût ou le rendement proportionnellement au capital engagé.',
                        'choices' => [
                            ['choice_text' => 'Le montant total en euros des intérêts versés à l’échéance du placement', 'is_correct' => false],
                            ['choice_text' => 'La durée nécessaire pour doubler le capital initial', 'is_correct' => false],
                            ['choice_text' => 'Le pourcentage de frais prélevé à la souscription du placement', 'is_correct' => false],
                            ['choice_text' => 'Le coût ou le rendement exprimé proportionnellement au capital', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si le taux annuel est de 4 %, quelle est sa forme décimale ?',
                        'explanation' => '4 % s’écrit 4/100, soit 0,04 en écriture décimale.',
                        'choices' => [
                            ['choice_text' => '0,04', 'is_correct' => true],
                            ['choice_text' => '0,4', 'is_correct' => false],
                            ['choice_text' => '4,00', 'is_correct' => false],
                            ['choice_text' => '40', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un calcul financier, que représente généralement n ?',
                        'explanation' => 'Dans les formules financières, n désigne généralement le nombre de périodes considérées.',
                        'choices' => [
                            ['choice_text' => 'Le capital initial', 'is_correct' => false],
                            ['choice_text' => 'Le taux d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de périodes', 'is_correct' => true],
                            ['choice_text' => 'Le montant des intérêts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt simple produit par 2 000 € à 3 % pendant un an ?',
                        'explanation' => '2 000 € × 3 % = 60 €.',
                        'choices' => [
                            ['choice_text' => '30 €', 'is_correct' => false],
                            ['choice_text' => '60 €', 'is_correct' => true],
                            ['choice_text' => '600 €', 'is_correct' => false],
                            ['choice_text' => '2 060 €', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Intérêt simple',
                'description' => 'Intérêt simple',
                'questions' => [
                    [
                        'question' => 'Quelle formule permet de calculer l’intérêt simple ?',
                        'explanation' => 'L’intérêt simple se calcule en multipliant le capital, le taux et la durée.',
                        'choices' => [
                            ['choice_text' => 'I = C × i × n', 'is_correct' => true],
                            ['choice_text' => 'I = C + i + n', 'is_correct' => false],
                            ['choice_text' => 'I = C ÷ i × n', 'is_correct' => false],
                            ['choice_text' => 'I = C × i ÷ n', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un capital de 5 000 € est placé à 4 % pendant un an. Quel est l’intérêt ?',
                        'explanation' => '5 000 € × 4 % = 200 €.',
                        'choices' => [
                            ['choice_text' => '20 €', 'is_correct' => false],
                            ['choice_text' => '200 €', 'is_correct' => true],
                            ['choice_text' => '500 €', 'is_correct' => false],
                            ['choice_text' => '5 200 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un capital de 3 000 € est placé à 6 % pendant deux ans à intérêt simple. Quel est l’intérêt ?',
                        'explanation' => '3 000 € × 6 % × 2 ans = 360 €.',
                        'choices' => [
                            ['choice_text' => '180 €', 'is_correct' => false],
                            ['choice_text' => '306 €', 'is_correct' => false],
                            ['choice_text' => '360 €', 'is_correct' => true],
                            ['choice_text' => '3 360 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si l’intérêt simple est de 150 € sur un capital de 3 000 € pendant un an, quel est le taux ?',
                        'explanation' => '150 € ÷ (3 000 € × 1 an) = 5 %.',
                        'choices' => [
                            ['choice_text' => '0,5 %', 'is_correct' => false],
                            ['choice_text' => '5 %', 'is_correct' => true],
                            ['choice_text' => '15 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un capital de 4 000 € génère 240 € d’intérêt à 6 %. Quelle est la durée ?',
                        'explanation' => '240 € ÷ (4 000 € × 6 %) = 1 an.',
                        'choices' => [
                            ['choice_text' => '0,5 an', 'is_correct' => false],
                            ['choice_text' => '1 an', 'is_correct' => true],
                            ['choice_text' => '2 ans', 'is_correct' => false],
                            ['choice_text' => '6 ans', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À intérêt simple, si le taux double et que le capital et la durée restent constants, l’intérêt :',
                        'explanation' => 'L’intérêt simple est proportionnel au taux ; s’il double, l’intérêt double aussi.',
                        'choices' => [
                            ['choice_text' => 'Reste identique', 'is_correct' => false],
                            ['choice_text' => 'Est divisé par deux', 'is_correct' => false],
                            ['choice_text' => 'Devient nul', 'is_correct' => false],
                            ['choice_text' => 'Double', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'À intérêt simple, si la durée double et que le taux reste constant, l’intérêt :',
                        'explanation' => 'L’intérêt simple est proportionnel à la durée ; si elle double, l’intérêt double aussi.',
                        'choices' => [
                            ['choice_text' => 'Est divisé par deux', 'is_correct' => false],
                            ['choice_text' => 'Reste identique', 'is_correct' => false],
                            ['choice_text' => 'Est multiplié par quatre', 'is_correct' => false],
                            ['choice_text' => 'Double', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel capital placé à 5 % pendant un an produit 250 € d’intérêt simple ?',
                        'explanation' => '250 € ÷ 5 % = 5 000 €.',
                        'choices' => [
                            ['choice_text' => '500 €', 'is_correct' => false],
                            ['choice_text' => '1 250 €', 'is_correct' => false],
                            ['choice_text' => '5 000 €', 'is_correct' => true],
                            ['choice_text' => '25 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un placement de 10 000 € à 2 % pendant trois ans produit quel intérêt simple ?',
                        'explanation' => '10 000 € × 2 % × 3 ans = 600 €.',
                        'choices' => [
                            ['choice_text' => '60 €', 'is_correct' => false],
                            ['choice_text' => '200 €', 'is_correct' => false],
                            ['choice_text' => '400 €', 'is_correct' => false],
                            ['choice_text' => '600 €', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le capital final de 8 000 € placés à 4 % pendant deux ans à intérêt simple ?',
                        'explanation' => '8 000 € + (8 000 € × 4 % × 2 ans) = 8 640 €.',
                        'choices' => [
                            ['choice_text' => '8 080 €', 'is_correct' => false],
                            ['choice_text' => '8 320 €', 'is_correct' => false],
                            ['choice_text' => '8 640 €', 'is_correct' => true],
                            ['choice_text' => '9 280 €', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Intérêt composé',
                'description' => 'Intérêt composé',
                'questions' => [
                    [
                        'question' => 'Quelle est la principale différence entre intérêt simple et intérêt composé ?',
                        'explanation' => 'Contrairement à l’intérêt simple, les intérêts de l’intérêt composé s’ajoutent au capital et génèrent eux-mêmes des intérêts.',
                        'choices' => [
                            ['choice_text' => 'Avec l’intérêt simple, les intérêts de chaque période s’ajoutent au capital pour produire d’autres intérêts', 'is_correct' => false],
                            ['choice_text' => 'Avec l’intérêt composé, les intérêts accumulés peuvent eux-mêmes produire des intérêts', 'is_correct' => true],
                            ['choice_text' => 'L’intérêt composé est calculé sur le seul capital initial, alors que l’intérêt simple l’est sur le capital accumulé', 'is_correct' => false],
                            ['choice_text' => 'L’intérêt composé s’applique à des durées plus longues, alors que l’intérêt simple ne s’applique qu’aux durées inférieures à un an', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle formule représente la valeur future avec capitalisation composée annuelle ?',
                        'explanation' => 'La valeur future en capitalisation composée s’obtient en multipliant le capital par (1 + i) élevé à la puissance n.',
                        'choices' => [
                            ['choice_text' => 'VF = C + i + n', 'is_correct' => false],
                            ['choice_text' => 'VF = C(1 + i)^n', 'is_correct' => true],
                            ['choice_text' => 'VF = C × i × n', 'is_correct' => false],
                            ['choice_text' => 'VF = C ÷ (1 + i)^n', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur future de 1 000 € à 10 % composé pendant deux ans ?',
                        'explanation' => '1 000 € × 1,10² = 1 210 €.',
                        'choices' => [
                            ['choice_text' => '1 020 €', 'is_correct' => false],
                            ['choice_text' => '1 100 €', 'is_correct' => false],
                            ['choice_text' => '1 200 €', 'is_correct' => false],
                            ['choice_text' => '1 210 €', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pour un placement composé, augmenter le nombre de périodes de capitalisation tend à :',
                        'explanation' => 'Une capitalisation plus fréquente accélère l’accumulation des intérêts, ce qui augmente la valeur future à taux nominal comparable.',
                        'choices' => [
                            ['choice_text' => 'Diminuer la valeur future, car chaque période applique un taux périodique plus faible', 'is_correct' => false],
                            ['choice_text' => 'Laisser la valeur future inchangée, car le taux nominal annuel reste le même', 'is_correct' => false],
                            ['choice_text' => 'Réduire le taux nominal affiché de l’année lorsque les autres conditions sont comparables par ailleurs', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la valeur future lorsque le taux nominal et les autres conditions sont comparables', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si 2 000 € sont placés à 5 % composé pendant un an, quelle est la valeur future ?',
                        'explanation' => '2 000 € × 1,05 = 2 100 €.',
                        'choices' => [
                            ['choice_text' => '2 005 €', 'is_correct' => false],
                            ['choice_text' => '2 050 €', 'is_correct' => false],
                            ['choice_text' => '2 100 €', 'is_correct' => true],
                            ['choice_text' => '2 500 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur future de 1 000 € à 5 % composé pendant trois ans ?',
                        'explanation' => '1 000 € × 1,05³ = 1 157,63 €.',
                        'choices' => [
                            ['choice_text' => '1 102,50 €', 'is_correct' => false],
                            ['choice_text' => '1 150 €', 'is_correct' => false],
                            ['choice_text' => '1 157,63 €', 'is_correct' => true],
                            ['choice_text' => '1 215,51 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le facteur (1 + i)^n ?',
                        'explanation' => '(1 + i)^n représente le facteur par lequel le capital initial est multiplié après n périodes de capitalisation composée.',
                        'choices' => [
                            ['choice_text' => 'Le facteur d’accumulation composé', 'is_correct' => true],
                            ['choice_text' => 'Le facteur d’actualisation composé', 'is_correct' => false],
                            ['choice_text' => 'Le taux d’intérêt effectif annuel', 'is_correct' => false],
                            ['choice_text' => 'Le coefficient d’intérêt simple', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec une capitalisation annuelle, les intérêts d’une période sont calculés sur :',
                        'explanation' => 'En capitalisation composée, chaque période applique le taux au capital déjà accumulé, intérêts précédents inclus.',
                        'choices' => [
                            ['choice_text' => 'Le capital initial du placement, sans les intérêts', 'is_correct' => false],
                            ['choice_text' => 'Le capital accumulé à la fin de la période', 'is_correct' => false],
                            ['choice_text' => 'Le seul montant des intérêts de la période précédente', 'is_correct' => false],
                            ['choice_text' => 'Le capital accumulé au début de la période', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’effet du temps sur un placement composé positif ?',
                        'explanation' => 'Plus la durée est longue, plus les intérêts accumulés génèrent eux-mêmes des intérêts, accélérant la croissance du capital.',
                        'choices' => [
                            ['choice_text' => 'La capitalisation peut accélérer la croissance du capital au fil du temps', 'is_correct' => true],
                            ['choice_text' => 'La croissance du capital ralentit à mesure que les périodes s’additionnent', 'is_correct' => false],
                            ['choice_text' => 'La croissance du capital reste linéaire, comme avec l’intérêt simple', 'is_correct' => false],
                            ['choice_text' => 'L’effet du temps est comparable à celui de l’inflation, qui érode le capital', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À taux positif, un placement composé pendant deux périodes produit généralement plus qu’un placement à intérêt simple de même capital, taux et durée lorsque la capitalisation des intérêts est effective. Pourquoi ?',
                        'explanation' => 'Les intérêts de la première période s’ajoutent au capital et génèrent à leur tour des intérêts lors des périodes suivantes.',
                        'choices' => [
                            ['choice_text' => 'Parce que les intérêts de la première période produisent eux-mêmes des intérêts', 'is_correct' => true],
                            ['choice_text' => 'Parce que le taux d’intérêt est majoré au début de la deuxième période', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’intérêt simple est calculé sur la moitié du capital initial', 'is_correct' => false],
                            ['choice_text' => 'Parce que les intérêts de chaque période sont versés d’avance au début de la période suivante', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Valeur actuelle et actualisation',
                'description' => 'Valeur actuelle et actualisation',
                'questions' => [
                    [
                        'question' => 'Que signifie actualiser un flux financier ?',
                        'explanation' => 'Actualiser consiste à convertir un flux futur en une valeur équivalente à une date antérieure, en utilisant un taux d’actualisation.',
                        'choices' => [
                            ['choice_text' => 'Calculer sa valeur équivalente à une date ultérieure en utilisant un taux de capitalisation', 'is_correct' => false],
                            ['choice_text' => 'Ajuster son montant à l’inflation observée depuis sa date d’émission', 'is_correct' => false],
                            ['choice_text' => 'Convertir son montant nominal dans une autre devise au taux de change du jour', 'is_correct' => false],
                            ['choice_text' => 'Calculer sa valeur équivalente à une date antérieure en utilisant un taux d’actualisation', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quelle formule représente la valeur actuelle d’un montant futur unique ?',
                        'explanation' => 'La valeur actuelle s’obtient en divisant la valeur future par (1 + i) élevé à la puissance n.',
                        'choices' => [
                            ['choice_text' => 'VA = VF / (1 + i)^n', 'is_correct' => true],
                            ['choice_text' => 'VA = VF × (1 + i)^n', 'is_correct' => false],
                            ['choice_text' => 'VA = VF × i × n', 'is_correct' => false],
                            ['choice_text' => 'VA = VF + i + n', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur actuelle de 1 100 € reçus dans un an avec un taux d’actualisation de 10 % ?',
                        'explanation' => '1 100 € ÷ 1,10 = 1 000 €.',
                        'choices' => [
                            ['choice_text' => '990 €', 'is_correct' => false],
                            ['choice_text' => '1 000 €', 'is_correct' => true],
                            ['choice_text' => '1 010 €', 'is_correct' => false],
                            ['choice_text' => '1 210 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux d’actualisation augmente, toutes choses égales par ailleurs, la valeur actuelle d’un flux futur :',
                        'explanation' => 'Un taux d’actualisation plus élevé réduit davantage la valeur actuelle du flux futur.',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => false],
                            ['choice_text' => 'Reste stable', 'is_correct' => false],
                            ['choice_text' => 'Se rapproche de la valeur future', 'is_correct' => false],
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Plus un flux est éloigné dans le temps, plus sa valeur actuelle est généralement :',
                        'explanation' => 'Plus l’échéance est lointaine, plus le facteur d’actualisation réduit la valeur actuelle, pour un taux positif.',
                        'choices' => [
                            ['choice_text' => 'Élevée pour un taux positif', 'is_correct' => false],
                            ['choice_text' => 'Faible pour un taux d’actualisation positif', 'is_correct' => true],
                            ['choice_text' => 'Égale à la valeur future pour un taux positif', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de l’échéance pour un taux positif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle du taux d’actualisation ?',
                        'explanation' => 'Le taux d’actualisation reflète le coût du temps et, selon le contexte, le risque associé aux flux futurs.',
                        'choices' => [
                            ['choice_text' => 'Mesurer le montant des intérêts effectivement versés sur la période écoulée', 'is_correct' => false],
                            ['choice_text' => 'Fixer la durée de vie économique de l’investissement et le calendrier précis de ses flux futurs', 'is_correct' => false],
                            ['choice_text' => 'Refléter l’inflation passée, indépendamment du risque associé aux flux futurs', 'is_correct' => false],
                            ['choice_text' => 'Refléter le coût du temps et, selon le contexte, le risque associé aux flux futurs', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'La valeur actuelle nette, ou VAN, compare principalement :',
                        'explanation' => 'La VAN compare la valeur actuelle des flux futurs générés par un projet à son investissement initial.',
                        'choices' => [
                            ['choice_text' => 'La valeur future des flux générés avec le coût de financement du projet', 'is_correct' => false],
                            ['choice_text' => 'La valeur actuelle des flux futurs avec l’investissement initial', 'is_correct' => true],
                            ['choice_text' => 'Le bénéfice comptable annuel avec le montant des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Le taux de rendement attendu avec le taux d’inflation prévu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une VAN positive signifie généralement que :',
                        'explanation' => 'Une VAN positive signifie que la valeur actuelle des flux futurs dépasse l’investissement initial au taux retenu.',
                        'choices' => [
                            ['choice_text' => 'Les flux actualisés sont inférieurs à l’investissement initial selon le taux retenu', 'is_correct' => false],
                            ['choice_text' => 'Le projet rembourse son investissement initial en moins d’un an au taux retenu', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice comptable du projet dépasse son investissement initial', 'is_correct' => false],
                            ['choice_text' => 'Les flux actualisés dépassent l’investissement initial selon le taux retenu', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe fondamental derrière l’actualisation ?',
                        'explanation' => 'L’actualisation repose sur l’idée qu’un euro disponible aujourd’hui peut être investi et produire un rendement avant qu’un euro futur soit reçu.',
                        'choices' => [
                            ['choice_text' => 'Un euro futur vaut plus qu’un euro présent, car il intègre déjà les intérêts à venir', 'is_correct' => false],
                            ['choice_text' => 'Un euro futur est certain alors qu’un euro présent est exposé au risque de perte', 'is_correct' => false],
                            ['choice_text' => 'Un euro aujourd’hui peut être investi et produire un rendement avant une réception future', 'is_correct' => true],
                            ['choice_text' => 'Un euro présent est soumis à des frais de conservation qui réduisent sa valeur avant toute réception future', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit 2 000 € dans deux ans. Avec un taux de 10 %, sa valeur actuelle est approximativement :',
                        'explanation' => '2 000 € ÷ 1,10² = 1 652,89 €.',
                        'choices' => [
                            ['choice_text' => '1 500 €', 'is_correct' => false],
                            ['choice_text' => '1 652,89 €', 'is_correct' => true],
                            ['choice_text' => '1 800 €', 'is_correct' => false],
                            ['choice_text' => '1 900 €', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Rentes et annuités',
                'description' => 'Rentes et annuités',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une rente financière ?',
                        'explanation' => 'Une rente est une série de paiements effectués à intervalles réguliers.',
                        'choices' => [
                            ['choice_text' => 'Une série de paiements effectués à intervalles réguliers', 'is_correct' => true],
                            ['choice_text' => 'Un paiement unique versé à une date convenue à l’avance', 'is_correct' => false],
                            ['choice_text' => 'Une suite de versements d’intérêts calculés sur un capital unique', 'is_correct' => false],
                            ['choice_text' => 'Un taux d’intérêt appliqué à un capital placé sur plusieurs années', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une annuité ordinaire, les paiements sont effectués :',
                        'explanation' => 'Dans une annuité ordinaire, chaque paiement est versé à la fin de la période correspondante.',
                        'choices' => [
                            ['choice_text' => 'Au début de chaque période', 'is_correct' => false],
                            ['choice_text' => 'Au milieu de chaque période', 'is_correct' => false],
                            ['choice_text' => 'À la date de la dernière échéance', 'is_correct' => false],
                            ['choice_text' => 'À la fin de chaque période', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans une annuité à terme à échoir, les paiements sont effectués :',
                        'explanation' => 'Dans une annuité à terme à échoir, chaque paiement est versé au début de la période correspondante.',
                        'choices' => [
                            ['choice_text' => 'À la fin de chaque période', 'is_correct' => false],
                            ['choice_text' => 'Au début de chaque période', 'is_correct' => true],
                            ['choice_text' => 'À l’échéance finale de la rente', 'is_correct' => false],
                            ['choice_text' => 'À mi-parcours de la durée totale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une rente de 500 € par an pendant trois ans comporte combien de paiements ?',
                        'explanation' => 'Une rente annuelle sur trois ans comporte un paiement par an, soit trois paiements.',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la valeur actuelle d’une rente ?',
                        'explanation' => 'La valeur actuelle d’une rente est la somme des valeurs actuelles de chacun de ses paiements futurs.',
                        'choices' => [
                            ['choice_text' => 'La somme des valeurs futures de chacun des paiements capitalisés', 'is_correct' => false],
                            ['choice_text' => 'La valeur actuelle du dernier paiement multipliée par le nombre de périodes', 'is_correct' => false],
                            ['choice_text' => 'Le montant du premier paiement multiplié par le nombre de périodes', 'is_correct' => false],
                            ['choice_text' => 'La somme des valeurs actuelles de chacun des paiements futurs', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si les paiements d’une annuité restent constants mais que le taux d’actualisation augmente, sa valeur actuelle :',
                        'explanation' => 'Comme pour un flux unique, une hausse du taux d’actualisation réduit la valeur actuelle des paiements futurs d’une annuité.',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente', 'is_correct' => false],
                            ['choice_text' => 'Reste stable', 'is_correct' => false],
                            ['choice_text' => 'Se rapproche de la somme des paiements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément distingue principalement une rente perpétuelle d’une annuité ?',
                        'explanation' => 'Une rente perpétuelle verse des paiements indéfiniment, alors qu’une annuité comporte un nombre fini de paiements.',
                        'choices' => [
                            ['choice_text' => 'La rente perpétuelle verse un seul paiement alors que l’annuité en comporte plusieurs', 'is_correct' => false],
                            ['choice_text' => 'La rente perpétuelle continue indéfiniment alors que l’annuité comporte un nombre fini de paiements', 'is_correct' => true],
                            ['choice_text' => 'La rente perpétuelle est versée à taux variable alors que l’annuité est versée à taux fixe sur toute sa durée', 'is_correct' => false],
                            ['choice_text' => 'L’annuité continue indéfiniment alors que la rente perpétuelle comporte un nombre fini de paiements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la formule de la valeur actuelle d’une rente perpétuelle constante, dans le cas simple ?',
                        'explanation' => 'Pour une rente perpétuelle constante, la valeur actuelle s’obtient en divisant le paiement par le taux.',
                        'choices' => [
                            ['choice_text' => 'VA = Paiement / taux', 'is_correct' => true],
                            ['choice_text' => 'VA = Paiement × taux', 'is_correct' => false],
                            ['choice_text' => 'VA = Paiement + taux', 'is_correct' => false],
                            ['choice_text' => 'VA = taux / paiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une rente perpétuelle de 100 € par an avec un taux de 5 % vaut, dans le cas simple :',
                        'explanation' => '100 € ÷ 5 % = 2 000 €.',
                        'choices' => [
                            ['choice_text' => '20 €', 'is_correct' => false],
                            ['choice_text' => '500 €', 'is_correct' => false],
                            ['choice_text' => '2 000 €', 'is_correct' => true],
                            ['choice_text' => '2 100 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une annuité à terme à échoir et une annuité ordinaire ont les mêmes paiements et le même taux, laquelle a généralement la valeur actuelle la plus élevée ?',
                        'explanation' => 'Les paiements de l’annuité à terme à échoir sont reçus plus tôt (en début de période), ce qui leur donne une valeur actuelle plus élevée.',
                        'choices' => [
                            ['choice_text' => 'L’annuité ordinaire', 'is_correct' => false],
                            ['choice_text' => 'Celle dont le dernier paiement est le plus tardif', 'is_correct' => false],
                            ['choice_text' => 'Elles ont la même valeur actuelle, car les paiements et le taux sont identiques', 'is_correct' => false],
                            ['choice_text' => 'L’annuité à terme à échoir', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Taux équivalents et capitalisation',
                'description' => 'Taux équivalents et capitalisation',
                'questions' => [
                    [
                        'question' => 'Pourquoi faut-il distinguer taux nominal et taux effectif ?',
                        'explanation' => 'La fréquence de capitalisation influence le rendement réellement obtenu, d’où la nécessité de distinguer taux nominal et taux effectif.',
                        'choices' => [
                            ['choice_text' => 'Parce que la fréquence de capitalisation influence le rendement réellement obtenu', 'is_correct' => true],
                            ['choice_text' => 'Parce que le taux nominal inclut les frais alors que le taux effectif les exclut', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux effectif est exprimé par mois alors que le nominal l’est par an', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux nominal s’applique aux prêts alors que le taux effectif s’applique aux placements d’épargne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux nominal annuel de 12 % capitalisé mensuellement correspond à quel taux périodique mensuel ?',
                        'explanation' => 'Un taux nominal annuel de 12 % capitalisé mensuellement correspond à un taux périodique de 12 % ÷ 12 = 1 % par mois.',
                        'choices' => [
                            ['choice_text' => '0,12 %', 'is_correct' => false],
                            ['choice_text' => '1 %', 'is_correct' => true],
                            ['choice_text' => '6 %', 'is_correct' => false],
                            ['choice_text' => '12 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec un taux nominal annuel de 12 % capitalisé mensuellement, combien de périodes de capitalisation y a-t-il par an ?',
                        'explanation' => 'Une capitalisation mensuelle correspond à 12 périodes de capitalisation par an.',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '365', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie un taux effectif annuel ?',
                        'explanation' => 'Le taux effectif annuel représente le rendement réellement obtenu sur un an compte tenu de la fréquence de capitalisation.',
                        'choices' => [
                            ['choice_text' => 'Le taux périodique multiplié par le nombre de périodes de capitalisation de l’année', 'is_correct' => false],
                            ['choice_text' => 'Le rendement annuel net de l’impôt et de l’inflation, indépendamment de la fréquence de capitalisation retenue', 'is_correct' => false],
                            ['choice_text' => 'Le taux exprimé sur la durée totale du placement et non sur une base annuelle', 'is_correct' => false],
                            ['choice_text' => 'Le rendement annuel réellement obtenu après prise en compte de la fréquence de capitalisation', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si un taux annuel est capitalisé trimestriellement, combien de périodes y a-t-il par an ?',
                        'explanation' => 'Une capitalisation trimestrielle correspond à 4 périodes par an.',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À taux nominal identique, une fréquence de capitalisation plus élevée tend à produire :',
                        'explanation' => 'À taux nominal identique, une capitalisation plus fréquente augmente généralement le taux effectif obtenu.',
                        'choices' => [
                            ['choice_text' => 'Un taux effectif plus faible lorsque le taux est positif', 'is_correct' => false],
                            ['choice_text' => 'Un taux nominal plus élevé lorsque le taux est positif', 'is_correct' => false],
                            ['choice_text' => 'Un taux périodique plus élevé lorsque le taux est positif', 'is_correct' => false],
                            ['choice_text' => 'Un taux effectif plus élevé lorsque le taux est positif', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel principe permet de comparer correctement deux taux exprimés sur des fréquences différentes ?',
                        'explanation' => 'Pour comparer correctement deux taux sur des fréquences différentes, il faut les convertir en taux équivalents sur une même base temporelle.',
                        'choices' => [
                            ['choice_text' => 'Les convertir en taux équivalents sur une même base temporelle', 'is_correct' => true],
                            ['choice_text' => 'Comparer directement les valeurs affichées sans les convertir', 'is_correct' => false],
                            ['choice_text' => 'Calculer la moyenne arithmétique des deux taux affichés', 'is_correct' => false],
                            ['choice_text' => 'Retenir le taux dont la période de capitalisation est la plus courte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le taux effectif annuel d’un taux nominal de 10 % capitalisé annuellement ?',
                        'explanation' => 'Lorsque la capitalisation est annuelle, le taux effectif annuel est égal au taux nominal.',
                        'choices' => [
                            ['choice_text' => '0,10 %', 'is_correct' => false],
                            ['choice_text' => '5 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => true],
                            ['choice_text' => '20 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux périodique de 2 % appliqué chaque trimestre implique quel taux nominal annuel si le taux est simplement annualisé ?',
                        'explanation' => 'Un taux périodique de 2 % par trimestre, simplement annualisé, correspond à 2 % × 4 = 8 %.',
                        'choices' => [
                            ['choice_text' => '0,5 %', 'is_correct' => false],
                            ['choice_text' => '2 %', 'is_correct' => false],
                            ['choice_text' => '8 %', 'is_correct' => true],
                            ['choice_text' => '24 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les taux équivalents sont-ils importants dans les décisions financières ?',
                        'explanation' => 'Les taux équivalents permettent de comparer des placements ou financements dont les fréquences de capitalisation diffèrent.',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de comparer des placements ou financements ayant des fréquences de capitalisation différentes', 'is_correct' => true],
                            ['choice_text' => 'Ils permettent de réduire le risque de défaut des placements ou financements comparés', 'is_correct' => false],
                            ['choice_text' => 'Ils permettent de prévoir l’évolution future des taux directeurs des banques centrales', 'is_correct' => false],
                            ['choice_text' => 'Ils permettent de calculer l’impôt dû sur des placements ou des financements aux caractéristiques différentes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Applications financières et calculs pratiques',
                'description' => 'Applications financières et calculs pratiques',
                'questions' => [
                    [
                        'question' => 'Un investisseur place 5 000 € à 4 % composé pendant deux ans. Quelle est la valeur future ?',
                        'explanation' => '5 000 € × 1,04² = 5 408 €.',
                        'choices' => [
                            ['choice_text' => '5 200 €', 'is_correct' => false],
                            ['choice_text' => '5 400 €', 'is_correct' => false],
                            ['choice_text' => '5 408 €', 'is_correct' => true],
                            ['choice_text' => '5 800 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un montant de 10 000 € doit être disponible dans trois ans. Avec un taux de 5 %, faut-il aujourd’hui plus ou moins de 10 000 € pour atteindre cet objectif ?',
                        'explanation' => 'Avec un taux positif, un capital actualisé inférieur à 10 000 € suffit pour atteindre 10 000 € dans trois ans.',
                        'choices' => [
                            ['choice_text' => 'Plus de 10 000 €', 'is_correct' => false],
                            ['choice_text' => 'Exactement 10 000 €', 'is_correct' => false],
                            ['choice_text' => 'Au moins 10 000 €', 'is_correct' => false],
                            ['choice_text' => 'Moins de 10 000 €', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si un emprunteur rembourse 1 000 € à la fin de chaque année pendant trois ans, il effectue :',
                        'explanation' => 'Rembourser à la fin de chaque année pendant trois ans correspond à trois paiements.',
                        'choices' => [
                            ['choice_text' => '1 paiement', 'is_correct' => false],
                            ['choice_text' => '2 paiements', 'is_correct' => false],
                            ['choice_text' => '3 paiements', 'is_correct' => true],
                            ['choice_text' => '4 paiements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un prêt amortissable à mensualités constantes, chaque mensualité comprend généralement :',
                        'explanation' => 'Dans un prêt amortissable à mensualités constantes, chaque paiement comprend une part d’intérêts et une part de remboursement du capital.',
                        'choices' => [
                            ['choice_text' => 'Une part d’intérêts croissante et une part de principal décroissante', 'is_correct' => false],
                            ['choice_text' => 'Une part d’intérêts payée d’avance et le capital versé à la dernière échéance', 'is_correct' => false],
                            ['choice_text' => 'Une part d’intérêts fixe, calculée chaque mois sur le capital initial emprunté', 'is_correct' => false],
                            ['choice_text' => 'Une part d’intérêts et une part de remboursement du principal', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lorsque le principal d’un prêt diminue, les intérêts calculés sur le solde restant tendent à :',
                        'explanation' => 'Les intérêts se calculent sur le solde restant dû ; s’il diminue et que le taux reste constant, les intérêts diminuent aussi.',
                        'choices' => [
                            ['choice_text' => 'Diminuer si le taux reste constant', 'is_correct' => true],
                            ['choice_text' => 'Augmenter si le taux reste constant', 'is_correct' => false],
                            ['choice_text' => 'Rester stables si le taux reste constant', 'is_correct' => false],
                            ['choice_text' => 'Diminuer puis ré-augmenter avant la dernière échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un tableau d’amortissement ?',
                        'explanation' => 'Un tableau d’amortissement détaille pour chaque échéance le capital restant dû, les intérêts et les remboursements.',
                        'choices' => [
                            ['choice_text' => 'Comparer le coût total du prêt avec celui d’autres offres de crédit du marché', 'is_correct' => false],
                            ['choice_text' => 'Présenter l’évolution du capital restant dû, des intérêts et des remboursements', 'is_correct' => true],
                            ['choice_text' => 'Calculer le taux d’actualisation qui annule la valeur actuelle nette du prêt', 'is_correct' => false],
                            ['choice_text' => 'Présenter l’évolution du chiffre d’affaires, des charges d’exploitation et du résultat net', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur compare deux projets ayant des flux à des dates différentes. Quel outil mathématique est essentiel ?',
                        'explanation' => 'Comparer des flux à des dates différentes nécessite de les ramener à une même date grâce à l’actualisation.',
                        'choices' => [
                            ['choice_text' => 'Le calcul du bénéfice comptable annuel', 'is_correct' => false],
                            ['choice_text' => 'La moyenne simple des flux de chaque projet', 'is_correct' => false],
                            ['choice_text' => 'L’actualisation des flux de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Le calcul du ratio d’endettement des projets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit être respecté lorsqu’on compare deux investissements de durées différentes ?',
                        'explanation' => 'Il faut tenir compte du calendrier des flux et utiliser une méthode de valorisation cohérente pour comparer équitablement deux durées différentes.',
                        'choices' => [
                            ['choice_text' => 'Tenir compte du calendrier des flux et utiliser une méthode cohérente de valorisation', 'is_correct' => true],
                            ['choice_text' => 'Retenir le projet dont les flux totaux sont les plus élevés, quelle que soit leur date', 'is_correct' => false],
                            ['choice_text' => 'Ramener les deux durées à la plus courte en ignorant les flux au-delà', 'is_correct' => false],
                            ['choice_text' => 'Privilégier le projet au taux nominal affiché le plus élevé, sans autre calcul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux d’actualisation de 0 % implique, dans le cas d’un flux certain unique :',
                        'explanation' => 'Avec un taux d’actualisation nul, la valeur actuelle d’un flux certain unique est égale à sa valeur future.',
                        'choices' => [
                            ['choice_text' => 'Une valeur actuelle inférieure à la valeur future', 'is_correct' => false],
                            ['choice_text' => 'Une valeur actuelle supérieure à la valeur future', 'is_correct' => false],
                            ['choice_text' => 'Une valeur actuelle égale à la valeur future', 'is_correct' => true],
                            ['choice_text' => 'Une valeur actuelle égale à la valeur future divisée par n', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il conserver les unités temporelles cohérentes dans un calcul financier ?',
                        'explanation' => 'Le taux et le nombre de périodes doivent être exprimés dans la même unité de temps pour que le calcul soit correct.',
                        'choices' => [
                            ['choice_text' => 'Parce que le capital initial doit être exprimé dans la même unité de temps que le taux', 'is_correct' => false],
                            ['choice_text' => 'Parce que tout taux annuel doit être converti en taux mensuel avant d’être utilisé dans une formule', 'is_correct' => false],
                            ['choice_text' => 'Parce que la durée doit être exprimée en nombre d’années entières, quel que soit le taux', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux et le nombre de périodes doivent correspondre à la même unité de temps', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Révision générale des mathématiques financières',
                'description' => 'Révision générale des mathématiques financières',
                'questions' => [
                    [
                        'question' => 'Quel concept permet de déterminer combien vaut aujourd’hui un flux futur ?',
                        'explanation' => 'La valeur actuelle permet de déterminer combien vaut aujourd’hui un flux futur.',
                        'choices' => [
                            ['choice_text' => 'La valeur nominale', 'is_correct' => false],
                            ['choice_text' => 'La valeur actuelle', 'is_correct' => true],
                            ['choice_text' => 'La valeur future', 'is_correct' => false],
                            ['choice_text' => 'La valeur résiduelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel concept permet de déterminer la valeur future d’un capital placé aujourd’hui ?',
                        'explanation' => 'La capitalisation permet de déterminer la valeur future d’un capital placé aujourd’hui.',
                        'choices' => [
                            ['choice_text' => 'La capitalisation', 'is_correct' => true],
                            ['choice_text' => 'L’actualisation', 'is_correct' => false],
                            ['choice_text' => 'L’amortissement financier', 'is_correct' => false],
                            ['choice_text' => 'La dépréciation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle méthode est appropriée pour une série de paiements réguliers ?',
                        'explanation' => 'Une série de paiements réguliers se valorise par le calcul de la valeur d’une rente ou annuité.',
                        'choices' => [
                            ['choice_text' => 'Le calcul de la valeur future d’un flux unique', 'is_correct' => false],
                            ['choice_text' => 'Le calcul de l’intérêt simple sur un seul capital', 'is_correct' => false],
                            ['choice_text' => 'Le calcul de la valeur d’une rente ou annuité', 'is_correct' => true],
                            ['choice_text' => 'Le calcul du taux d’intérêt effectif d’un capital unique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux d’intérêt augmente, la valeur future d’un capital positif placé aujourd’hui pendant une durée donnée :',
                        'explanation' => 'Un taux plus élevé accroît généralement la valeur future d’un capital positif placé pendant une durée donnée.',
                        'choices' => [
                            ['choice_text' => 'Augmente généralement', 'is_correct' => true],
                            ['choice_text' => 'Diminue généralement', 'is_correct' => false],
                            ['choice_text' => 'Reste inchangée en général', 'is_correct' => false],
                            ['choice_text' => 'Diminue puis se stabilise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le taux d’actualisation augmente, la valeur actuelle d’un flux futur positif :',
                        'explanation' => 'Un taux d’actualisation plus élevé réduit généralement la valeur actuelle d’un flux futur positif.',
                        'choices' => [
                            ['choice_text' => 'Augmente généralement', 'is_correct' => false],
                            ['choice_text' => 'Diminue généralement', 'is_correct' => true],
                            ['choice_text' => 'Reste inchangée en général', 'is_correct' => false],
                            ['choice_text' => 'Augmente puis se stabilise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la principale raison de l’utilisation de l’actualisation en finance ?',
                        'explanation' => 'L’actualisation permet de comparer des flux financiers intervenant à des dates différentes en les ramenant à une même base temporelle.',
                        'choices' => [
                            ['choice_text' => 'Prévoir l’évolution des flux financiers sur plusieurs années', 'is_correct' => false],
                            ['choice_text' => 'Mesurer le risque de défaut des flux financiers à recevoir', 'is_correct' => false],
                            ['choice_text' => 'Convertir des flux financiers exprimés en devises différentes vers la monnaie locale', 'is_correct' => false],
                            ['choice_text' => 'Comparer des flux financiers intervenant à des dates différentes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans un calcul à intérêt composé, que se passe-t-il lorsque les intérêts sont réinvestis ?',
                        'explanation' => 'Lorsque les intérêts sont réinvestis, ils s’ajoutent au capital et génèrent à leur tour des intérêts lors des périodes suivantes.',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent produire eux-mêmes des intérêts lors des périodes suivantes', 'is_correct' => true],
                            ['choice_text' => 'Ils sont retranchés du capital pour calculer l’intérêt de la période suivante', 'is_correct' => false],
                            ['choice_text' => 'Ils sont versés à l’épargnant et n’alimentent plus le placement', 'is_correct' => false],
                            ['choice_text' => 'Ils cessent de produire des intérêts après la première période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément doit être cohérent avec le taux périodique dans une formule financière ?',
                        'explanation' => 'Le nombre de périodes doit être défini sur la même base temporelle que le taux périodique utilisé.',
                        'choices' => [
                            ['choice_text' => 'Le nombre de périodes', 'is_correct' => true],
                            ['choice_text' => 'Le montant du capital initial', 'is_correct' => false],
                            ['choice_text' => 'Le niveau d’inflation', 'is_correct' => false],
                            ['choice_text' => 'La valeur nominale du placement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investissement présente une VAN positive au taux d’actualisation retenu. Quelle conclusion est la plus appropriée ?',
                        'explanation' => 'Une VAN positive indique que le projet crée de la valeur selon les hypothèses de flux et le taux d’actualisation retenus, sans garantir l’absence de risque.',
                        'choices' => [
                            ['choice_text' => 'Il est rentable quel que soit le taux d’actualisation retenu', 'is_correct' => false],
                            ['choice_text' => 'Il crée une valeur positive selon les hypothèses et le taux utilisés', 'is_correct' => true],
                            ['choice_text' => 'Il offre le rendement le plus élevé parmi les projets envisageables', 'is_correct' => false],
                            ['choice_text' => 'Il rembourse son investissement initial en moins d’une année, au taux d’actualisation retenu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur réflexe avant d’effectuer un calcul financier ?',
                        'explanation' => 'Avant tout calcul financier, il faut clairement identifier les flux, leurs dates, le taux applicable et l’unité de temps utilisée.',
                        'choices' => [
                            ['choice_text' => 'Identifier les flux, les dates, le taux et l’unité de temps utilisés', 'is_correct' => true],
                            ['choice_text' => 'Arrondir les taux à l’entier le plus proche pour simplifier le calcul', 'is_correct' => false],
                            ['choice_text' => 'Utiliser un taux annuel avec des périodes mensuelles pour simplifier', 'is_correct' => false],
                            ['choice_text' => 'Fixer d’abord la durée totale sans examiner les flux ni leurs dates', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
                    'total_marks' => count($quizData['questions']),
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
                        'explanation' => $questionData['explanation'] ?? null,
                    ]
                );

                $question->choices()->delete();

                foreach ($questionData['choices'] as $choiceIndex => $choice) {
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
