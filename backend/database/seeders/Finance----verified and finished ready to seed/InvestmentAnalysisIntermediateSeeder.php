```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class InvestmentAnalysisIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'investment-analysis')
            ->firstOrFail();

        $quizzes = [

            /*
            |--------------------------------------------------------------------------
            | QUIZ 1
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Analyse fondamentale approfondie',
                'questions' => [
                    [
                        'question' => 'Une entreprise augmente fortement son chiffre d’affaires mais son bénéfice net diminue. Quelle analyse est la plus pertinente ?',
                        'answers' => [
                            ['text' => 'Examiner l’évolution des coûts, des marges et des charges financières', 'iscorrect' => true],
                            ['text' => 'Conclure immédiatement que l’entreprise est plus rentable', 'iscorrect' => false],
                            ['text' => 'Ignorer le bénéfice net', 'iscorrect' => false],
                            ['text' => 'Conclure que le cours doit nécessairement augmenter', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une croissance rapide du chiffre d’affaires peut-elle être préoccupante ?',
                        'answers' => [
                            ['text' => 'Si elle s’accompagne d’une dégradation des marges ou des flux de trésorerie', 'iscorrect' => true],
                            ['text' => 'Parce que toute croissance est nécessairement négative', 'iscorrect' => false],
                            ['text' => 'Parce que le chiffre d’affaires ne peut jamais augmenter', 'iscorrect' => false],
                            ['text' => 'Parce que la croissance élimine les bénéfices', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut signaler une amélioration de la qualité des bénéfices ?',
                        'answers' => [
                            ['text' => 'Une meilleure conversion du résultat en flux de trésorerie', 'iscorrect' => true],
                            ['text' => 'Une augmentation permanente des charges exceptionnelles', 'iscorrect' => false],
                            ['text' => 'Une baisse simultanée des ventes et des marges', 'iscorrect' => false],
                            ['text' => 'Une hausse artificielle de la dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse de la dette est-elle importante pour un investisseur en actions ?',
                        'answers' => [
                            ['text' => 'Parce que l’endettement influence le risque financier et la capacité de l’entreprise à faire face à ses obligations', 'iscorrect' => true],
                            ['text' => 'Parce que la dette détermine toujours le cours de l’action', 'iscorrect' => false],
                            ['text' => 'Parce qu’une dette élevée garantit une croissance élevée', 'iscorrect' => false],
                            ['text' => 'Parce que les capitaux propres deviennent inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une marge opérationnelle en baisse peut notamment indiquer :',
                        'answers' => [
                            ['text' => 'Une pression sur les prix, une hausse des coûts ou une détérioration de l’efficacité opérationnelle', 'iscorrect' => true],
                            ['text' => 'Une amélioration certaine de la rentabilité', 'iscorrect' => false],
                            ['text' => 'Une disparition du risque financier', 'iscorrect' => false],
                            ['text' => 'Une hausse automatique des dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer une entreprise avec ses concurrents directs ?',
                        'answers' => [
                            ['text' => 'Pour évaluer sa performance et sa valorisation dans son contexte sectoriel', 'iscorrect' => true],
                            ['text' => 'Pour supposer que toutes les entreprises sont identiques', 'iscorrect' => false],
                            ['text' => 'Pour éliminer les différences comptables', 'iscorrect' => false],
                            ['text' => 'Pour connaître exactement leurs cours futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un ROE très élevé mais également un endettement important. Quelle précaution faut-il prendre ?',
                        'answers' => [
                            ['text' => 'Vérifier dans quelle mesure le ROE élevé provient de l’effet de levier', 'iscorrect' => true],
                            ['text' => 'Conclure automatiquement à une excellente qualité financière', 'iscorrect' => false],
                            ['text' => 'Ignorer le niveau d’endettement', 'iscorrect' => false],
                            ['text' => 'Supposer que le risque est nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser les flux de trésorerie d’exploitation ?',
                        'answers' => [
                            ['text' => 'Pour apprécier la capacité de l’activité principale à générer des liquidités', 'iscorrect' => true],
                            ['text' => 'Pour calculer uniquement la valeur comptable', 'iscorrect' => false],
                            ['text' => 'Pour remplacer totalement le compte de résultat', 'iscorrect' => false],
                            ['text' => 'Pour mesurer uniquement les dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une forte croissance des créances clients par rapport aux ventes peut nécessiter :',
                        'answers' => [
                            ['text' => 'Une analyse de la qualité des ventes et du délai de recouvrement', 'iscorrect' => true],
                            ['text' => 'Une conclusion automatique de croissance saine', 'iscorrect' => false],
                            ['text' => 'L’abandon de l’analyse du bilan', 'iscorrect' => false],
                            ['text' => 'La suppression des dettes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est essentiel dans l’analyse fondamentale ?',
                        'answers' => [
                            ['text' => 'Relier les indicateurs financiers à la stratégie, au secteur et aux perspectives de l’entreprise', 'iscorrect' => true],
                            ['text' => 'Utiliser un seul ratio', 'iscorrect' => false],
                            ['text' => 'Ignorer les facteurs économiques', 'iscorrect' => false],
                            ['text' => 'Se concentrer uniquement sur le cours historique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | QUIZ 2
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Analyse des ratios et rentabilité',
                'questions' => [
                    [
                        'question' => 'Une entreprise présente un P/E inférieur à celui de son secteur. Quelle conclusion est la plus prudente ?',
                        'answers' => [
                            ['text' => 'L’action peut sembler moins chère relativement, mais il faut rechercher les raisons de cet écart', 'iscorrect' => true],
                            ['text' => 'L’action est automatiquement sous-évaluée', 'iscorrect' => false],
                            ['text' => 'L’entreprise est automatiquement meilleure que ses concurrents', 'iscorrect' => false],
                            ['text' => 'Le risque est nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un P/E élevé peut-il être justifié ?',
                        'answers' => [
                            ['text' => 'Par des perspectives de croissance bénéficiaire supérieures', 'iscorrect' => true],
                            ['text' => 'Parce que toute action chère est sans risque', 'iscorrect' => false],
                            ['text' => 'Parce que les bénéfices passés sont toujours garantis', 'iscorrect' => false],
                            ['text' => 'Parce que le P/E ne dépend jamais des attentes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une baisse du P/E peut résulter de :',
                        'answers' => [
                            ['text' => 'Une baisse du prix, une hausse des bénéfices, ou une combinaison des deux', 'iscorrect' => true],
                            ['text' => 'Uniquement d’une baisse des bénéfices', 'iscorrect' => false],
                            ['text' => 'Uniquement d’une hausse de la dette', 'iscorrect' => false],
                            ['text' => 'Uniquement d’une hausse du dividende', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le ROA et le ROE peuvent-ils raconter des histoires différentes ?',
                        'answers' => [
                            ['text' => 'Parce que le ROE est influencé par la structure de financement et l’endettement', 'iscorrect' => true],
                            ['text' => 'Parce qu’ils utilisent toujours exactement les mêmes dénominateurs', 'iscorrect' => false],
                            ['text' => 'Parce que le ROA mesure uniquement les ventes', 'iscorrect' => false],
                            ['text' => 'Parce que le ROE ne dépend jamais des capitaux propres', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une marge nette supérieure à celle des concurrents peut notamment refléter :',
                        'answers' => [
                            ['text' => Une meilleure maîtrise des coûts ou une structure économique plus favorable', 'iscorrect' => true],
                            ['text' => 'Une absence certaine de risque', 'iscorrect' => false],
                            ['text' => 'Une dette nécessairement plus faible', 'iscorrect' => false],
                            ['text' => 'Une croissance garantie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’analyser l’évolution d’un ratio sur plusieurs années ?',
                        'answers' => [
                            ['text' => 'Identifier les tendances plutôt que de se limiter à une photographie ponctuelle', 'iscorrect' => true],
                            ['text' => 'Garantir les performances futures', 'iscorrect' => false],
                            ['text' => 'Éliminer les effets économiques', 'iscorrect' => false],
                            ['text' => 'Remplacer les états financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un ratio dette/capitaux propres élevé peut généralement indiquer :',
                        'answers' => [
                            ['text' => 'Une utilisation importante du financement par dette par rapport aux capitaux propres', 'iscorrect' => true],
                            ['text' => 'Une absence totale de risque', 'iscorrect' => false],
                            ['text' => 'Une rentabilité garantie', 'iscorrect' => false],
                            ['text' => 'Une liquidité toujours excellente', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le ratio de liquidité est-il particulièrement utile pour l’analyse à court terme ?',
                        'answers' => [
                            ['text' => 'Il aide à apprécier la capacité à couvrir les obligations à court terme', 'iscorrect' => true],
                            ['text' => 'Il mesure directement la croissance future', 'iscorrect' => false],
                            ['text' => 'Il garantit le paiement des dividendes', 'iscorrect' => false],
                            ['text' => 'Il mesure uniquement le rendement boursier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède une marge élevée mais un faible taux de rotation des actifs. Quelle analyse peut être utile ?',
                        'answers' => [
                            ['text' => 'Évaluer simultanément la rentabilité des marges et l’efficacité d’utilisation des actifs', 'iscorrect' => true],
                            ['text' => 'Ignorer les actifs', 'iscorrect' => false],
                            ['text' => 'Conclure automatiquement à une excellente performance', 'iscorrect' => false],
                            ['text' => 'Analyser uniquement le dividende', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les ratios doivent-ils être comparés à des références appropriées ?',
                        'answers' => [
                            ['text' => 'Parce que leur interprétation dépend du secteur, du modèle économique et de la période', 'iscorrect' => true],
                            ['text' => 'Parce qu’un ratio possède toujours la même signification dans tous les secteurs', 'iscorrect' => false],
                            ['text' => 'Parce que les ratios ne sont jamais comparables', 'iscorrect' => false],
                            ['text' => 'Parce que les comparaisons éliminent le risque', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | QUIZ 3
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Valorisation des actions',
                'questions' => [
                    [
                        'question' => 'Quelle est la différence fondamentale entre prix de marché et valeur intrinsèque ?',
                        'answers' => [
                            ['text' => 'Le prix est observé sur le marché tandis que la valeur intrinsèque est une estimation fondée sur les caractéristiques économiques de l’actif', 'iscorrect' => true],
                            ['text' => 'Les deux sont toujours identiques', 'iscorrect' => false],
                            ['text' => 'La valeur intrinsèque est toujours observable directement', 'iscorrect' => false],
                            ['text' => 'Le prix de marché est toujours théorique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un modèle d’actualisation des dividendes ?',
                        'answers' => [
                            ['text' => 'Estimer la valeur d’une action à partir des dividendes futurs actualisés', 'iscorrect' => true],
                            ['text' => 'Calculer uniquement la dette', 'iscorrect' => false],
                            ['text' => 'Prévoir exactement le cours quotidien', 'iscorrect' => false],
                            ['text' => 'Mesurer la volatilité uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle de croissance constante des dividendes, une hausse du taux d’actualisation tend à :',
                        'answers' => [
                            ['text' => 'Réduire la valeur actuelle estimée, toutes choses égales par ailleurs', 'iscorrect' => true],
                            ['text' => 'Augmenter automatiquement la valeur', 'iscorrect' => false],
                            ['text' => 'Ne produire aucun effet', 'iscorrect' => false],
                            ['text' => 'Supprimer les dividendes futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les hypothèses de croissance sont-elles importantes dans la valorisation ?',
                        'answers' => [
                            ['text' => 'Parce qu’elles influencent directement les flux ou bénéfices futurs utilisés dans le modèle', 'iscorrect' => true],
                            ['text' => 'Parce qu’elles déterminent le prix historique', 'iscorrect' => false],
                            ['text' => 'Parce qu’elles éliminent le risque', 'iscorrect' => false],
                            ['text' => 'Parce qu’elles sont toujours certaines', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une valorisation par multiples ?',
                        'answers' => [
                            ['text' => 'Une méthode qui estime la valeur à partir de multiples observés sur des actifs comparables', 'iscorrect' => true],
                            ['text' => 'Une méthode sans aucune comparaison', 'iscorrect' => false],
                            ['text' => 'Une méthode basée uniquement sur les dividendes', 'iscorrect' => false],
                            ['text' => 'Une méthode qui ignore le marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le choix des entreprises comparables est-il important ?',
                        'answers' => [
                            ['text' => 'Parce que des comparables mal choisis peuvent conduire à une valorisation relative trompeuse', 'iscorrect' => true],
                            ['text' => 'Parce que toutes les entreprises ont le même multiple', 'iscorrect' => false],
                            ['text' => 'Parce que les multiples ne dépendent jamais du secteur', 'iscorrect' => false],
                            ['text' => 'Parce qu’un comparable garantit la performance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une analyse de sensibilité dans une valorisation ?',
                        'answers' => [
                            ['text' => 'L’étude de l’effet de variations des hypothèses sur la valeur estimée', 'iscorrect' => true],
                            ['text' => 'La suppression des hypothèses', 'iscorrect' => false],
                            ['text' => 'La garantie d’un prix futur', 'iscorrect' => false],
                            ['text' => 'La mesure du volume de transactions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une valorisation peut-elle produire une fourchette plutôt qu’un prix unique ?',
                        'answers' => [
                            ['text' => 'Parce que les flux futurs, taux et hypothèses comportent de l’incertitude', 'iscorrect' => true],
                            ['text' => 'Parce que les modèles sont toujours inutiles', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés n’ont pas de prix', 'iscorrect' => false],
                            ['text' => 'Parce que les actions n’ont aucune valeur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action semble sous-évaluée selon un modèle. Que faut-il faire avant de conclure ?',
                        'answers' => [
                            ['text' => 'Examiner les hypothèses, les risques et les raisons possibles de l’écart', 'iscorrect' => true],
                            ['text' => 'Acheter automatiquement', 'iscorrect' => false],
                            ['text' => 'Ignorer le secteur', 'iscorrect' => false],
                            ['text' => 'Supposer que le marché est nécessairement irrationnel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser plusieurs méthodes de valorisation ?',
                        'answers' => [
                            ['text' => 'Pour trianguler l’estimation et identifier les divergences entre méthodes', 'iscorrect' => true],
                            ['text' => 'Pour garantir le prix exact', 'iscorrect' => false],
                            ['text' => 'Pour éliminer toute incertitude', 'iscorrect' => false],
                            ['text' => 'Pour éviter l’analyse fondamentale', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | QUIZ 4
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Risque, rendement et mesures quantitatives',
                'questions' => [
                    [
                        'question' => 'Que mesure principalement l’écart-type des rendements ?',
                        'answers' => [
                            ['text' => 'La dispersion des rendements autour de leur moyenne', 'iscorrect' => true],
                            ['text' => 'La valeur nominale', 'iscorrect' => false],
                            ['text' => 'Le bénéfice par action', 'iscorrect' => false],
                            ['text' => 'La dette totale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une volatilité plus élevée implique généralement :',
                        'answers' => [
                            ['text' => 'Une plus grande variabilité des rendements', 'iscorrect' => true],
                            ['text' => 'Un rendement positif garanti', 'iscorrect' => false],
                            ['text' => 'Une absence de pertes', 'iscorrect' => false],
                            ['text' => 'Une corrélation nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de la covariance dans l’analyse de portefeuille ?',
                        'answers' => [
                            ['text' => 'Elle aide à comprendre comment deux actifs évoluent conjointement', 'iscorrect' => true],
                            ['text' => 'Elle mesure uniquement le rendement individuel', 'iscorrect' => false],
                            ['text' => 'Elle garantit la diversification', 'iscorrect' => false],
                            ['text' => 'Elle détermine automatiquement le prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure le coefficient bêta d’une action dans le cadre du CAPM ?',
                        'answers' => [
                            ['text' => 'La sensibilité du rendement de l’action aux variations du marché', 'iscorrect' => true],
                            ['text' => 'La rentabilité comptable', 'iscorrect' => false],
                            ['text' => 'Le dividende annuel', 'iscorrect' => false],
                            ['text' => 'La dette de l’entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un bêta supérieur à 1 indique généralement :',
                        'answers' => [
                            ['text' => 'Une sensibilité aux mouvements du marché supérieure à celle du marché de référence', 'iscorrect' => true],
                            ['text' => 'Une absence de risque', 'iscorrect' => false],
                            ['text' => 'Un rendement garanti', 'iscorrect' => false],
                            ['text' => 'Une corrélation négative automatique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le CAPM, quel élément représente la rémunération du risque systématique ?',
                        'answers' => [
                            ['text' => 'La prime de risque du marché multipliée par le bêta', 'iscorrect' => true],
                            ['text' => 'Le dividende uniquement', 'iscorrect' => false],
                            ['text' => 'Le bénéfice net', 'iscorrect' => false],
                            ['text' => 'La dette totale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversification réduit-elle principalement le risque spécifique ?',
                        'answers' => [
                            ['text' => 'Parce que les événements propres à certains actifs peuvent être compensés par ceux d’autres actifs', 'iscorrect' => true],
                            ['text' => 'Parce qu’elle élimine les facteurs macroéconomiques', 'iscorrect' => false],
                            ['text' => 'Parce qu’elle garantit des rendements positifs', 'iscorrect' => false],
                            ['text' => 'Parce que tous les actifs deviennent identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel portefeuille présente généralement un avantage de diversification plus important ?',
                        'answers' => [
                            ['text' => 'Un portefeuille composé d’actifs dont les rendements ne sont pas parfaitement corrélés', 'iscorrect' => true],
                            ['text' => 'Un portefeuille contenant plusieurs fois exactement le même actif', 'iscorrect' => false],
                            ['text' => 'Un portefeuille composé d’actifs parfaitement corrélés', 'iscorrect' => false],
                            ['text' => 'Un portefeuille contenant un seul titre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le ratio de Sharpe ?',
                        'answers' => [
                            ['text' => 'Une mesure du rendement excédentaire obtenu par unité de risque total', 'iscorrect' => true],
                            ['text' => 'Le bénéfice par action', 'iscorrect' => false],
                            ['text' => 'La dette par rapport aux capitaux propres', 'iscorrect' => false],
                            ['text' => 'Le rendement garanti', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un rendement moyen élevé ne suffit-il pas pour comparer deux investissements ?',
                        'answers' => [
                            ['text' => 'Parce qu’il faut également considérer la volatilité, les pertes potentielles et la nature du risque', 'iscorrect' => true],
                            ['text' => 'Parce que le rendement n’a aucune importance', 'iscorrect' => false],
                            ['text' => 'Parce que tous les investissements ont le même risque', 'iscorrect' => false],
                            ['text' => 'Parce que la volatilité garantit toujours un rendement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | QUIZ 5
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Analyse des obligations et du crédit',
                'questions' => [
                    [
                        'question' => 'Pourquoi le prix d’une obligation à coupon fixe diminue-t-il généralement lorsque les taux augmentent ?',
                        'answers' => [
                            ['text' => 'Parce que ses flux fixes deviennent relativement moins attractifs que ceux des nouvelles obligations', 'iscorrect' => true],
                            ['text' => 'Parce que son coupon devient automatiquement nul', 'iscorrect' => false],
                            ['text' => 'Parce que son émetteur disparaît automatiquement', 'iscorrect' => false],
                            ['text' => 'Parce que sa maturité devient plus courte', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le spread de crédit ?',
                        'answers' => [
                            ['text' => 'La différence de rendement entre une obligation risquée et une référence comparable de moindre risque', 'iscorrect' => true],
                            ['text' => 'La différence entre deux dividendes', 'iscorrect' => false],
                            ['text' => 'Le rendement nominal uniquement', 'iscorrect' => false],
                            ['text' => 'Le prix d’une action', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une augmentation du spread de crédit peut signaler :',
                        'answers' => [
                            ['text' => 'Une perception accrue du risque de crédit', 'iscorrect' => true],
                            ['text' => 'Une baisse certaine du risque', 'iscorrect' => false],
                            ['text' => 'Une garantie de remboursement', 'iscorrect' => false],
                            ['text' => 'Une hausse automatique du coupon contractuel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la duration mesure approximativement pour une obligation ?',
                        'answers' => [
                            ['text' => 'La sensibilité du prix de l’obligation aux variations des taux d’intérêt', 'iscorrect' => true],
                            ['text' => 'La probabilité exacte de défaut', 'iscorrect' => false],
                            ['text' => 'Le bénéfice de l’émetteur', 'iscorrect' => false],
                            ['text' => 'Le taux d’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'À duration plus élevée, une obligation est généralement :',
                        'answers' => [
                            ['text' => 'Plus sensible aux variations des taux d’intérêt', 'iscorrect' => true],
                            ['text' => 'Moins sensible dans tous les cas', 'iscorrect' => false],
                            ['text' => 'Sans risque de taux', 'iscorrect' => false],
                            ['text' => 'Sans risque de crédit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser la capacité d’un émetteur à payer ses intérêts ?',
                        'answers' => [
                            ['text' => 'Pour évaluer sa capacité à honorer le service de sa dette', 'iscorrect' => true],
                            ['text' => 'Pour déterminer son dividende', 'iscorrect' => false],
                            ['text' => 'Pour calculer uniquement son chiffre d’affaires', 'iscorrect' => false],
                            ['text' => 'Pour supprimer le risque de taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une baisse de la qualité de crédit d’un émetteur peut entraîner :',
                        'answers' => [
                            ['text' => 'Une hausse du rendement exigé par les investisseurs et une pression sur le prix de l’obligation', 'iscorrect' => true],
                            ['text' => 'Une baisse automatique du risque', 'iscorrect' => false],
                            ['text' => 'Une hausse garantie du prix', 'iscorrect' => false],
                            ['text' => 'Une suppression de la dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les obligations à long terme sont-elles généralement plus exposées au risque de taux ?',
                        'answers' => [
                            ['text' => 'Parce que leurs flux sont exposés plus longtemps aux variations des taux', 'iscorrect' => true],
                            ['text' => 'Parce qu’elles n’ont aucun coupon', 'iscorrect' => false],
                            ['text' => 'Parce qu’elles sont toujours émises par des entreprises risquées', 'iscorrect' => false],
                            ['text' => 'Parce que leur valeur nominale est nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une obligation négociée sous sa valeur nominale ?',
                        'answers' => [
                            ['text' => 'Son prix de marché est inférieur à sa valeur nominale', 'iscorrect' => true],
                            ['text' => 'L’émetteur est nécessairement en défaut', 'iscorrect' => false],
                            ['text' => 'Son coupon est nécessairement nul', 'iscorrect' => false],
                            ['text' => 'Elle n’a plus de maturité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rendement à l’échéance ne doit-il pas être interprété comme une garantie ?',
                        'answers' => [
                            ['text' => 'Parce qu’il repose sur des hypothèses concernant les flux, le prix et le remboursement', 'iscorrect' => true],
                            ['text' => 'Parce que les obligations n’ont jamais de flux', 'iscorrect' => false],
                            ['text' => 'Parce que le coupon est toujours variable', 'iscorrect' => false],
                            ['text' => 'Parce que le marché obligataire est sans prix', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | QUIZ 6
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Analyse macroéconomique et investissements',
                'questions' => [
                    [
                        'question' => 'Pourquoi l’inflation est-elle importante pour l’investisseur ?',
                        'answers' => [
                            ['text' => 'Elle peut réduire le pouvoir d’achat des rendements nominaux et influencer les taux d’intérêt', 'iscorrect' => true],
                            ['text' => 'Elle garantit une hausse des actions', 'iscorrect' => false],
                            ['text' => 'Elle élimine le risque de crédit', 'iscorrect' => false],
                            ['text' => 'Elle ne concerne que les entreprises publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des taux directeurs peut notamment :',
                        'answers' => [
                            ['text' => 'Augmenter le coût du financement et exercer une pression sur certaines valorisations', 'iscorrect' => true],
                            ['text' => 'Garantir une hausse de toutes les actions', 'iscorrect' => false],
                            ['text' => 'Supprimer l’inflation instantanément', 'iscorrect' => false],
                            ['text' => 'Réduire toujours le coût de la dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les bénéfices futurs d’une entreprise peuvent-ils être sensibles au cycle économique ?',
                        'answers' => [
                            ['text' => 'Parce que la demande, les coûts et les conditions de financement évoluent avec l’économie', 'iscorrect' => true],
                            ['text' => 'Parce que les bénéfices sont indépendants de l’activité économique', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés ne changent jamais', 'iscorrect' => false],
                            ['text' => 'Parce que les entreprises n’ont aucun coût', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise cyclique est généralement :',
                        'answers' => [
                            ['text' => 'Une entreprise dont l’activité et les résultats sont particulièrement sensibles au cycle économique', 'iscorrect' => true],
                            ['text' => 'Une entreprise sans chiffre d’affaires', 'iscorrect' => false],
                            ['text' => 'Une entreprise sans risque', 'iscorrect' => false],
                            ['text' => 'Une entreprise uniquement publique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les taux d’intérêt influencent-ils les valorisations ?',
                        'answers' => [
                            ['text' => 'Ils influencent notamment le taux d’actualisation et le coût du financement', 'iscorrect' => true],
                            ['text' => 'Ils déterminent directement tous les bénéfices', 'iscorrect' => false],
                            ['text' => 'Ils suppriment les flux de trésorerie', 'iscorrect' => false],
                            ['text' => 'Ils rendent les actions sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une croissance économique forte peut être favorable à certaines entreprises parce que :',
                        'answers' => [
                            ['text' => 'Elle peut soutenir la demande et les revenus des entreprises', 'iscorrect' => true],
                            ['text' => 'Elle garantit les bénéfices de toutes les entreprises', 'iscorrect' => false],
                            ['text' => 'Elle supprime toute concurrence', 'iscorrect' => false],
                            ['text' => 'Elle élimine les risques financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux de change peut-il être important pour une entreprise internationale ?',
                        'answers' => [
                            ['text' => 'Il peut modifier la valeur des revenus, coûts ou bénéfices générés dans différentes devises', 'iscorrect' => true],
                            ['text' => 'Il n’a aucun effet sur les multinationales', 'iscorrect' => false],
                            ['text' => 'Il garantit une hausse des bénéfices', 'iscorrect' => false],
                            ['text' => 'Il élimine le risque opérationnel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les investisseurs surveillent-ils les politiques monétaires ?',
                        'answers' => [
                            ['text' => 'Parce qu’elles influencent les taux, la liquidité et les conditions financières', 'iscorrect' => true],
                            ['text' => 'Parce qu’elles fixent le prix de chaque action', 'iscorrect' => false],
                            ['text' => 'Parce qu’elles garantissent les rendements', 'iscorrect' => false],
                            ['text' => 'Parce qu’elles remplacent l’analyse fondamentale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une récession peut particulièrement affecter :',
                        'answers' => [
                            ['text' => 'Les entreprises dont les revenus dépendent fortement de la consommation ou de l’investissement', 'iscorrect' => true],
                            ['text' => 'Uniquement les entreprises sans dette', 'iscorrect' => false],
                            ['text' => 'Uniquement les banques centrales', 'iscorrect' => false],
                            ['text' => 'Aucun secteur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi intégrer plusieurs scénarios macroéconomiques dans une analyse ?',
                        'answers' => [
                            ['text' => 'Pour évaluer la robustesse de l’investissement face à différents environnements économiques', 'iscorrect' => true],
                            ['text' => 'Pour garantir le scénario le plus favorable', 'iscorrect' => false],
                            ['text' => 'Pour supprimer l’incertitude', 'iscorrect' => false],
                            ['text' => 'Pour éviter toute analyse financière', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | QUIZ 7
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Analyse de portefeuille et allocation d’actifs',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal de l’allocation d’actifs ?',
                        'answers' => [
                            ['text' => 'Déterminer la répartition du capital entre différentes catégories d’actifs selon les objectifs et contraintes', 'iscorrect' => true],
                            ['text' => 'Choisir uniquement les actions les plus populaires', 'iscorrect' => false],
                            ['text' => 'Garantir le rendement maximal', 'iscorrect' => false],
                            ['text' => 'Éliminer toute volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur ayant un horizon long peut-il accepter davantage de volatilité ?',
                        'answers' => [
                            ['text' => 'Il dispose généralement de davantage de temps pour absorber les fluctuations et atteindre ses objectifs', 'iscorrect' => true],
                            ['text' => 'Parce que le risque disparaît avec le temps', 'iscorrect' => false],
                            ['text' => 'Parce que les actions sont garanties à long terme', 'iscorrect' => false],
                            ['text' => 'Parce que les pertes sont impossibles après plusieurs années', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la frontière efficiente dans la théorie moderne du portefeuille ?',
                        'answers' => [
                            ['text' => 'L’ensemble des portefeuilles offrant le meilleur rendement espéré pour un niveau de risque donné', 'iscorrect' => true],
                            ['text' => 'L’ensemble des investissements sans risque', 'iscorrect' => false],
                            ['text' => 'Le portefeuille ayant toujours le rendement maximal', 'iscorrect' => false],
                            ['text' => 'Une liste d’actions sous-évaluées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la corrélation est-elle importante dans la construction d’un portefeuille ?',
                        'answers' => [
                            ['text' => 'Elle influence le potentiel de diversification du portefeuille', 'iscorrect' => true],
                            ['text' => 'Elle détermine toujours le rendement futur', 'iscorrect' => false],
                            ['text' => 'Elle mesure directement les bénéfices', 'iscorrect' => false],
                            ['text' => 'Elle élimine le risque systématique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une allocation stratégique ?',
                        'answers' => [
                            ['text' => 'Une allocation de long terme fondée sur les objectifs et le profil de risque', 'iscorrect' => true],
                            ['text' => 'Une décision basée uniquement sur les fluctuations quotidiennes', 'iscorrect' => false],
                            ['text' => 'Une stratégie consistant à investir dans un seul titre', 'iscorrect' => false],
                            ['text' => 'Une garantie de rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rééquilibrage peut-il modifier temporairement les positions du portefeuille ?',
                        'answers' => [
                            ['text' => 'Parce que les pondérations réelles peuvent s’éloigner des pondérations cibles', 'iscorrect' => true],
                            ['text' => 'Parce que les actifs deviennent sans valeur', 'iscorrect' => false],
                            ['text' => 'Parce que le rendement est garanti', 'iscorrect' => false],
                            ['text' => 'Parce que tous les actifs doivent avoir le même poids', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un investissement indiciel ?',
                        'answers' => [
                            ['text' => 'Chercher à reproduire la performance d’un indice avec une stratégie généralement passive', 'iscorrect' => true],
                            ['text' => 'Garantir une surperformance de l’indice', 'iscorrect' => false],
                            ['text' => 'Éliminer tous les risques', 'iscorrect' => false],
                            ['text' => 'Investir uniquement dans une entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les frais d’investissement sont-ils importants ?',
                        'answers' => [
                            ['text' => 'Ils réduisent le rendement net obtenu par l’investisseur', 'iscorrect' => true],
                            ['text' => 'Ils augmentent automatiquement le rendement', 'iscorrect' => false],
                            ['text' => 'Ils éliminent le risque', 'iscorrect' => false],
                            ['text' => 'Ils garantissent la performance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal intérêt d’un ETF diversifié ?',
                        'answers' => [
                            ['text' => 'Il peut offrir une exposition à un ensemble d’actifs dans un seul véhicule', 'iscorrect' => true],
                            ['text' => 'Il garantit une performance positive', 'iscorrect' => false],
                            ['text' => 'Il élimine le risque de marché', 'iscorrect' => false],
                            ['text' => 'Il contient toujours uniquement des obligations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’allocation d’actifs doit-elle être cohérente avec les objectifs de l’investisseur ?',
                        'answers' => [
                            ['text' => 'Parce que les objectifs déterminent notamment l’horizon, les besoins de liquidité et le niveau de risque acceptable', 'iscorrect' => true],
                            ['text' => 'Parce que tous les investisseurs ont les mêmes objectifs', 'iscorrect' => false],
                            ['text' => 'Parce que le rendement est garanti', 'iscorrect' => false],
                            ['text' => 'Parce que le marché ne fluctue jamais', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | QUIZ 8
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Étude de cas et décision d’investissement',
                'questions' => [
                    [
                        'question' => 'Une entreprise affiche une forte croissance mais un endettement très élevé. Quelle approche est la plus appropriée ?',
                        'answers' => [
                            ['text' => 'Comparer les perspectives de croissance aux risques financiers et à la capacité de remboursement', 'iscorrect' => true],
                            ['text' => 'Acheter uniquement à cause de la croissance', 'iscorrect' => false],
                            ['text' => 'Ignorer la dette', 'iscorrect' => false],
                            ['text' => 'Conclure que la faillite est certaine', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action possède un P/E inférieur à son secteur mais ses bénéfices diminuent depuis plusieurs années. Quelle interprétation est la plus raisonnable ?',
                        'answers' => [
                            ['text' => 'Le faible multiple peut refléter des perspectives bénéficiaires moins favorables', 'iscorrect' => true],
                            ['text' => 'Le faible P/E prouve automatiquement une sous-évaluation', 'iscorrect' => false],
                            ['text' => 'La baisse des bénéfices est sans importance', 'iscorrect' => false],
                            ['text' => 'Le risque est nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur possède uniquement des actions d’un même secteur. Quel risque est particulièrement important ?',
                        'answers' => [
                            ['text' => 'Le risque de concentration sectorielle', 'iscorrect' => true],
                            ['text' => 'L’absence totale de risque', 'iscorrect' => false],
                            ['text' => 'Le risque de coupon obligataire', 'iscorrect' => false],
                            ['text' => 'Le risque de diversification excessive', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise affiche un excellent bénéfice net mais un flux de trésorerie d’exploitation faible. Que faut-il examiner ?',
                        'answers' => [
                            ['text' => 'Les éléments expliquant l’écart entre résultat comptable et génération de trésorerie', 'iscorrect' => true],
                            ['text' => 'Uniquement le cours de l’action', 'iscorrect' => false],
                            ['text' => 'Uniquement le dividende', 'iscorrect' => false],
                            ['text' => 'Rien, car le bénéfice suffit toujours', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action est fortement valorisée selon un modèle utilisant une croissance future très élevée. Quelle vérification est essentielle ?',
                        'answers' => [
                            ['text' => 'Tester la sensibilité de la valorisation à des hypothèses de croissance plus prudentes', 'iscorrect' => true],
                            ['text' => 'Accepter automatiquement l’hypothèse', 'iscorrect' => false],
                            ['text' => 'Ignorer le taux d’actualisation', 'iscorrect' => false],
                            ['text' => 'Supposer que la croissance est garantie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux investissements offrent le même rendement espéré mais l’un présente une volatilité nettement supérieure. Quelle considération est pertinente ?',
                        'answers' => [
                            ['text' => 'L’investissement moins volatil peut offrir un meilleur compromis risque-rendement selon les objectifs', 'iscorrect' => true],
                            ['text' => 'Le plus volatil est automatiquement meilleur', 'iscorrect' => false],
                            ['text' => 'La volatilité n’a jamais d’importance', 'iscorrect' => false],
                            ['text' => 'Les deux investissements sont nécessairement identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur proche de son objectif financier devrait généralement :',
                        'answers' => [
                            ['text' => 'Réévaluer son exposition au risque et ses besoins de liquidité', 'iscorrect' => true],
                            ['text' => 'Augmenter automatiquement le risque', 'iscorrect' => false],
                            ['text' => 'Ignorer son horizon', 'iscorrect' => false],
                            ['text' => 'Investir uniquement dans l’actif le plus volatil', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède une excellente rentabilité mais opère dans un secteur en déclin structurel. Que faut-il analyser ?',
                        'answers' => [
                            ['text' => 'La durabilité de ses avantages concurrentiels et sa capacité à s’adapter au changement sectoriel', 'iscorrect' => true],
                            ['text' => 'Uniquement son bénéfice actuel', 'iscorrect' => false],
                            ['text' => 'Uniquement son dividende', 'iscorrect' => false],
                            ['text' => 'Uniquement son cours historique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une décision d’investissement ne devrait-elle pas dépendre d’un seul scénario ?',
                        'answers' => [
                            ['text' => 'Parce que les résultats futurs sont incertains et peuvent différer fortement des hypothèses centrales', 'iscorrect' => true],
                            ['text' => 'Parce qu’un scénario est toujours inutile', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés sont parfaitement prévisibles', 'iscorrect' => false],
                            ['text' => 'Parce que les entreprises n’ont aucun risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle démarche constitue la meilleure synthèse d’une analyse d’investissement ?',
                        'answers' => [
                            ['text' => 'Combiner valorisation, fondamentaux, risques, perspectives et adéquation avec le profil de l’investisseur', 'iscorrect' => true],
                            ['text' => 'Choisir uniquement l’action ayant le plus augmenté récemment', 'iscorrect' => false],
                            ['text' => 'Choisir uniquement le P/E le plus faible', 'iscorrect' => false],
                            ['text' => 'Ignorer le risque pour maximiser le rendement', 'iscorrect' => false],
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

                // Mélange des réponses pour éviter que la bonne réponse
                // soit systématiquement en première position.
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
