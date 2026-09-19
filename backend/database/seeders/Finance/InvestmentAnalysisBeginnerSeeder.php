<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;

class InvestmentAnalysisBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'investment-analysis')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à l’analyse des investissements',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de l’analyse d’un investissement ?',
                        'answers' => [
                            ['text' => 'Évaluer sa valeur, son rendement potentiel et ses risques', 'iscorrect' => true],
                            ['text' => 'Garantir un bénéfice', 'iscorrect' => false],
                            ['text' => 'Éliminer toutes les fluctuations du marché', 'iscorrect' => false],
                            ['text' => 'Choisir uniquement l’investissement le plus cher', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que cherche principalement à déterminer l’analyse fondamentale ?',
                        'answers' => [
                            ['text' => 'La valeur intrinsèque d’un actif à partir de ses fondamentaux', 'iscorrect' => true],
                            ['text' => 'Le prix exact de demain', 'iscorrect' => false],
                            ['text' => 'Le taux bancaire uniquement', 'iscorrect' => false],
                            ['text' => 'Le volume de transactions uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un rendement d’investissement ?',
                        'answers' => [
                            ['text' => 'Le gain ou la perte généré par un investissement sur une période', 'iscorrect' => true],
                            ['text' => 'Uniquement le montant investi', 'iscorrect' => false],
                            ['text' => 'Uniquement le prix d’achat', 'iscorrect' => false],
                            ['text' => 'Le nombre d’actions détenues', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie le risque en finance ?',
                        'answers' => [
                            ['text' => 'L’incertitude concernant les résultats futurs d’un investissement', 'iscorrect' => true],
                            ['text' => 'Une garantie de perte', 'iscorrect' => false],
                            ['text' => 'Un rendement toujours négatif', 'iscorrect' => false],
                            ['text' => 'Le prix initial uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi compare-t-on la valeur estimée d’une action à son prix de marché ?',
                        'answers' => [
                            ['text' => 'Pour déterminer si elle semble sous-évaluée, correctement évaluée ou surévaluée', 'iscorrect' => true],
                            ['text' => 'Pour supprimer le risque', 'iscorrect' => false],
                            ['text' => 'Pour connaître automatiquement son prix futur', 'iscorrect' => false],
                            ['text' => 'Pour calculer uniquement ses dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action représente généralement :',
                        'answers' => [
                            ['text' => 'Une participation dans le capital d’une entreprise', 'iscorrect' => true],
                            ['text' => 'Une dette bancaire personnelle', 'iscorrect' => false],
                            ['text' => 'Un taux d’intérêt', 'iscorrect' => false],
                            ['text' => 'Une obligation gouvernementale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation représente généralement :',
                        'answers' => [
                            ['text' => 'Un titre de créance sur un émetteur', 'iscorrect' => true],
                            ['text' => 'Une part de propriété d’une entreprise', 'iscorrect' => false],
                            ['text' => 'Une action ordinaire', 'iscorrect' => false],
                            ['text' => 'Un dividende garanti', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversification est-elle utilisée par les investisseurs ?',
                        'answers' => [
                            ['text' => 'Pour réduire certains risques en combinant différents actifs', 'iscorrect' => true],
                            ['text' => 'Pour garantir un rendement positif', 'iscorrect' => false],
                            ['text' => 'Pour supprimer le risque systématique', 'iscorrect' => false],
                            ['text' => 'Pour investir dans un seul actif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un portefeuille d’investissement ?',
                        'answers' => [
                            ['text' => 'Un ensemble d’actifs détenus par un investisseur', 'iscorrect' => true],
                            ['text' => 'Un seul compte bancaire', 'iscorrect' => false],
                            ['text' => 'Une seule obligation', 'iscorrect' => false],
                            ['text' => 'Une facture commerciale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’investisseur doit-il considérer à la fois rendement et risque ?',
                        'answers' => [
                            ['text' => 'Parce qu’un rendement potentiel plus élevé peut s’accompagner d’un risque plus important', 'iscorrect' => true],
                            ['text' => 'Parce que le rendement est toujours égal au risque', 'iscorrect' => false],
                            ['text' => 'Parce que le risque n’a aucune importance', 'iscorrect' => false],
                            ['text' => 'Parce que tous les investissements ont le même rendement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse fondamentale d’une entreprise',
                'questions' => [
                    [
                        'question' => 'Quels éléments font partie des fondamentaux d’une entreprise ?',
                        'answers' => [
                            ['text' => 'Les revenus, bénéfices, flux de trésorerie, actifs et dettes', 'iscorrect' => true],
                            ['text' => 'Uniquement le cours de l’action', 'iscorrect' => false],
                            ['text' => 'Uniquement le volume échangé', 'iscorrect' => false],
                            ['text' => 'Uniquement la publicité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le chiffre d’affaires ?',
                        'answers' => [
                            ['text' => 'Les revenus générés par les ventes de l’entreprise', 'iscorrect' => true],
                            ['text' => 'Le bénéfice net uniquement', 'iscorrect' => false],
                            ['text' => 'La dette totale', 'iscorrect' => false],
                            ['text' => 'Les capitaux propres uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le bénéfice net ?',
                        'answers' => [
                            ['text' => 'Le résultat restant après la prise en compte des charges et impôts selon les règles comptables', 'iscorrect' => true],
                            ['text' => 'Le chiffre d’affaires avant charges', 'iscorrect' => false],
                            ['text' => 'La trésorerie uniquement', 'iscorrect' => false],
                            ['text' => 'La dette financière', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser l’évolution du chiffre d’affaires sur plusieurs années ?',
                        'answers' => [
                            ['text' => 'Pour identifier les tendances de croissance ou de ralentissement', 'iscorrect' => true],
                            ['text' => 'Pour garantir une hausse future', 'iscorrect' => false],
                            ['text' => 'Pour ignorer les bénéfices', 'iscorrect' => false],
                            ['text' => 'Pour supprimer le risque de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une marge bénéficiaire mesure généralement :',
                        'answers' => [
                            ['text' => 'La part du chiffre d’affaires conservée sous forme de bénéfice selon la marge considérée', 'iscorrect' => true],
                            ['text' => 'La dette totale de l’entreprise', 'iscorrect' => false],
                            ['text' => 'Le nombre d’employés', 'iscorrect' => false],
                            ['text' => 'Le cours de l’action uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi examiner le bilan d’une entreprise ?',
                        'answers' => [
                            ['text' => 'Pour évaluer notamment sa structure financière, ses actifs et ses obligations', 'iscorrect' => true],
                            ['text' => 'Pour connaître uniquement son cours futur', 'iscorrect' => false],
                            ['text' => 'Pour calculer uniquement ses dividendes', 'iscorrect' => false],
                            ['text' => 'Pour ignorer sa dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut indiquer une dette très élevée ?',
                        'answers' => [
                            ['text' => 'Une exposition financière potentiellement plus importante', 'iscorrect' => true],
                            ['text' => 'Une absence certaine de risque', 'iscorrect' => false],
                            ['text' => 'Une rentabilité garantie', 'iscorrect' => false],
                            ['text' => 'Une trésorerie infinie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les flux de trésorerie sont-ils importants dans l’analyse ?',
                        'answers' => [
                            ['text' => 'Ils renseignent sur les entrées et sorties réelles de liquidités', 'iscorrect' => true],
                            ['text' => 'Ils sont toujours identiques au bénéfice net', 'iscorrect' => false],
                            ['text' => 'Ils mesurent uniquement la dette', 'iscorrect' => false],
                            ['text' => 'Ils remplacent toutes les informations comptables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un avantage concurrentiel ?',
                        'answers' => [
                            ['text' => 'Un élément permettant à une entreprise de se différencier ou de défendre sa position', 'iscorrect' => true],
                            ['text' => 'Une dette supplémentaire', 'iscorrect' => false],
                            ['text' => 'Une taxe obligatoire', 'iscorrect' => false],
                            ['text' => 'Un dividende', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ne faut-il pas analyser une entreprise avec un seul indicateur ?',
                        'answers' => [
                            ['text' => 'Parce qu’une évaluation complète nécessite plusieurs dimensions financières et économiques', 'iscorrect' => true],
                            ['text' => 'Parce que les indicateurs sont inutiles', 'iscorrect' => false],
                            ['text' => 'Parce que le chiffre d’affaires suffit toujours', 'iscorrect' => false],
                            ['text' => 'Parce que le bénéfice ne peut jamais être analysé', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Ratios financiers et indicateurs d’investissement',
                'questions' => [
                    [
                        'question' => 'Que mesure généralement le ratio P/E ?',
                        'answers' => [
                            ['text' => 'Le prix d’une action par rapport au bénéfice par action', 'iscorrect' => true],
                            ['text' => 'La dette par rapport aux actifs', 'iscorrect' => false],
                            ['text' => 'Les ventes par rapport aux employés', 'iscorrect' => false],
                            ['text' => 'Le dividende par rapport aux actifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que compare le ratio P/B ?',
                        'answers' => [
                            ['text' => 'La valeur de marché des capitaux propres à leur valeur comptable', 'iscorrect' => true],
                            ['text' => 'Le bénéfice au chiffre d’affaires', 'iscorrect' => false],
                            ['text' => 'La dette aux intérêts', 'iscorrect' => false],
                            ['text' => 'Le dividende au chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure généralement le ratio P/S ?',
                        'answers' => [
                            ['text' => 'Le prix rapporté aux ventes', 'iscorrect' => true],
                            ['text' => 'Le prix rapporté uniquement aux actifs', 'iscorrect' => false],
                            ['text' => 'La dette rapportée aux capitaux propres', 'iscorrect' => false],
                            ['text' => 'Le rendement obligataire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure le ROE ?',
                        'answers' => [
                            ['text' => 'La rentabilité des capitaux propres', 'iscorrect' => true],
                            ['text' => 'La rentabilité des ventes uniquement', 'iscorrect' => false],
                            ['text' => 'Le rendement d’une obligation', 'iscorrect' => false],
                            ['text' => 'La volatilité du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure généralement le ratio de liquidité générale ?',
                        'answers' => [
                            ['text' => 'La capacité à couvrir les obligations à court terme avec les actifs courants', 'iscorrect' => true],
                            ['text' => 'La rentabilité des capitaux propres', 'iscorrect' => false],
                            ['text' => 'Le rendement d’une action', 'iscorrect' => false],
                            ['text' => 'Le taux de croissance économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer un ratio financier à celui des entreprises du même secteur ?',
                        'answers' => [
                            ['text' => 'Pour obtenir un point de comparaison pertinent', 'iscorrect' => true],
                            ['text' => 'Pour garantir que l’entreprise est rentable', 'iscorrect' => false],
                            ['text' => 'Pour supprimer les différences sectorielles', 'iscorrect' => false],
                            ['text' => 'Pour déterminer automatiquement le cours futur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un P/E très élevé peut indiquer que :',
                        'answers' => [
                            ['text' => 'Le marché intègre des attentes élevées concernant les bénéfices futurs', 'iscorrect' => true],
                            ['text' => 'L’entreprise est nécessairement sous-évaluée', 'iscorrect' => false],
                            ['text' => 'La dette est nulle', 'iscorrect' => false],
                            ['text' => 'Les bénéfices sont garantis', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un ratio élevé n’est-il pas automatiquement mauvais ?',
                        'answers' => [
                            ['text' => 'Il peut refléter des perspectives de croissance ou de qualité supérieures', 'iscorrect' => true],
                            ['text' => 'Les ratios n’ont aucune signification', 'iscorrect' => false],
                            ['text' => 'Tous les ratios élevés garantissent un bénéfice', 'iscorrect' => false],
                            ['text' => 'Un ratio élevé signifie toujours une faillite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est particulièrement lié à la capacité bénéficiaire par action ?',
                        'answers' => [
                            ['text' => 'Le bénéfice par action (BPA)', 'iscorrect' => true],
                            ['text' => 'Le ratio de liquidité', 'iscorrect' => false],
                            ['text' => 'Le taux de chômage', 'iscorrect' => false],
                            ['text' => 'La dette publique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il interpréter les ratios avec prudence ?',
                        'answers' => [
                            ['text' => 'Parce qu’ils dépendent du secteur, des méthodes comptables et du contexte économique', 'iscorrect' => true],
                            ['text' => 'Parce qu’ils sont toujours faux', 'iscorrect' => false],
                            ['text' => 'Parce qu’ils garantissent les rendements', 'iscorrect' => false],
                            ['text' => 'Parce qu’ils ne peuvent jamais être comparés', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque et rendement des investissements',
                'questions' => [
                    [
                        'question' => 'Quel est généralement le lien entre risque et rendement potentiel ?',
                        'answers' => [
                            ['text' => 'Un rendement potentiel plus élevé s’accompagne souvent d’un risque plus important', 'iscorrect' => true],
                            ['text' => 'Un risque élevé garantit toujours un rendement élevé', 'iscorrect' => false],
                            ['text' => 'Le risque n’a aucun rapport avec l’investissement', 'iscorrect' => false],
                            ['text' => 'Tous les actifs ont le même risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure la volatilité ?',
                        'answers' => [
                            ['text' => 'La dispersion ou variabilité des rendements', 'iscorrect' => true],
                            ['text' => 'Le bénéfice net uniquement', 'iscorrect' => false],
                            ['text' => 'Le nombre d’actions', 'iscorrect' => false],
                            ['text' => 'La valeur nominale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque systématique ?',
                        'answers' => [
                            ['text' => 'Un risque lié aux facteurs affectant largement le marché', 'iscorrect' => true],
                            ['text' => 'Un risque propre à une seule entreprise uniquement', 'iscorrect' => false],
                            ['text' => 'Un risque qui peut toujours être éliminé par diversification', 'iscorrect' => false],
                            ['text' => 'Un risque comptable uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque spécifique ?',
                        'answers' => [
                            ['text' => 'Un risque propre à une entreprise ou à un actif particulier', 'iscorrect' => true],
                            ['text' => 'Le risque de toute l’économie mondiale', 'iscorrect' => false],
                            ['text' => 'Le taux sans risque', 'iscorrect' => false],
                            ['text' => 'Le rendement du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque peut être réduit par une bonne diversification ?',
                        'answers' => [
                            ['text' => 'Une partie importante du risque spécifique', 'iscorrect' => true],
                            ['text' => 'Tout risque systématique', 'iscorrect' => false],
                            ['text' => 'Tous les risques économiques', 'iscorrect' => false],
                            ['text' => 'Le risque de marché entier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une volatilité élevée ?',
                        'answers' => [
                            ['text' => 'Les rendements ont tendance à fluctuer davantage', 'iscorrect' => true],
                            ['text' => 'Le rendement est nécessairement positif', 'iscorrect' => false],
                            ['text' => 'Le risque est nul', 'iscorrect' => false],
                            ['text' => 'Le prix est fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur doit-il connaître sa tolérance au risque ?',
                        'answers' => [
                            ['text' => 'Pour choisir des investissements compatibles avec sa capacité et son acceptation des pertes', 'iscorrect' => true],
                            ['text' => 'Pour garantir un rendement', 'iscorrect' => false],
                            ['text' => 'Pour éliminer les fluctuations', 'iscorrect' => false],
                            ['text' => 'Pour éviter toute diversification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un actif avec un rendement espéré élevé mais une forte volatilité peut :',
                        'answers' => [
                            ['text' => 'Présenter un potentiel attractif mais aussi une incertitude plus importante', 'iscorrect' => true],
                            ['text' => 'Être automatiquement sans risque', 'iscorrect' => false],
                            ['text' => 'Garantir une perte', 'iscorrect' => false],
                            ['text' => 'Avoir toujours une valeur stable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les performances historiques doivent-elles être interprétées avec prudence ?',
                        'answers' => [
                            ['text' => 'Parce que les performances passées ne garantissent pas les performances futures', 'iscorrect' => true],
                            ['text' => 'Parce que les données historiques sont toujours inutiles', 'iscorrect' => false],
                            ['text' => 'Parce que les rendements futurs sont connus', 'iscorrect' => false],
                            ['text' => 'Parce que le marché ne change jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie généralement un investissement « défensif » ?',
                        'answers' => [
                            ['text' => 'Un investissement recherché pour une volatilité ou une exposition au risque relativement plus faible', 'iscorrect' => true],
                            ['text' => 'Un investissement garantissant toujours un bénéfice', 'iscorrect' => false],
                            ['text' => 'Un actif nécessairement sans rendement', 'iscorrect' => false],
                            ['text' => 'Une action toujours spéculative', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse des actions',
                'questions' => [
                    [
                        'question' => 'Que représente le cours d’une action ?',
                        'answers' => [
                            ['text' => 'Le prix auquel les participants au marché évaluent et échangent l’action', 'iscorrect' => true],
                            ['text' => 'La valeur comptable obligatoire', 'iscorrect' => false],
                            ['text' => 'Le bénéfice annuel', 'iscorrect' => false],
                            ['text' => 'Le dividende futur garanti', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un dividende ?',
                        'answers' => [
                            ['text' => 'Une distribution de valeur aux actionnaires décidée selon les règles de l’entreprise', 'iscorrect' => true],
                            ['text' => 'Une dette obligatoire envers la banque', 'iscorrect' => false],
                            ['text' => 'Un impôt', 'iscorrect' => false],
                            ['text' => 'Un taux d’intérêt public', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une action de croissance ?',
                        'answers' => [
                            ['text' => 'Une action associée à des attentes importantes de croissance future', 'iscorrect' => true],
                            ['text' => 'Une obligation à court terme', 'iscorrect' => false],
                            ['text' => 'Une action dont le prix ne change jamais', 'iscorrect' => false],
                            ['text' => 'Une action sans entreprise sous-jacente', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une action de valeur ?',
                        'answers' => [
                            ['text' => 'Une action considérée comme relativement bon marché par rapport à certains fondamentaux', 'iscorrect' => true],
                            ['text' => 'Une action nécessairement sans risque', 'iscorrect' => false],
                            ['text' => 'Une action toujours en hausse', 'iscorrect' => false],
                            ['text' => 'Une obligation gouvernementale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser le bénéfice par action ?',
                        'answers' => [
                            ['text' => 'Pour évaluer la part du bénéfice attribuable à chaque action selon la définition utilisée', 'iscorrect' => true],
                            ['text' => 'Pour connaître directement le prix futur', 'iscorrect' => false],
                            ['text' => 'Pour mesurer uniquement la dette', 'iscorrect' => false],
                            ['text' => 'Pour calculer l’inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut indiquer une croissance régulière des bénéfices ?',
                        'answers' => [
                            ['text' => 'Une amélioration potentiellement durable de la capacité bénéficiaire', 'iscorrect' => true],
                            ['text' => 'Une garantie de hausse du cours', 'iscorrect' => false],
                            ['text' => 'Une absence de risque', 'iscorrect' => false],
                            ['text' => 'Une dette nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser le secteur d’une entreprise ?',
                        'answers' => [
                            ['text' => 'Pour comprendre son environnement concurrentiel et économique', 'iscorrect' => true],
                            ['text' => 'Pour ignorer ses états financiers', 'iscorrect' => false],
                            ['text' => 'Pour connaître automatiquement son dividende', 'iscorrect' => false],
                            ['text' => 'Pour supprimer le risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise disposant d’une forte marque peut bénéficier :',
                        'answers' => [
                            ['text' => 'D’un avantage concurrentiel potentiel', 'iscorrect' => true],
                            ['text' => 'D’une garantie de bénéfice', 'iscorrect' => false],
                            ['text' => 'D’une absence de concurrence', 'iscorrect' => false],
                            ['text' => 'D’une dette automatiquement nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie qu’une action est sous-évaluée selon une analyse fondamentale ?',
                        'answers' => [
                            ['text' => 'Son estimation de valeur est supérieure à son prix de marché', 'iscorrect' => true],
                            ['text' => 'Son prix de marché est toujours nul', 'iscorrect' => false],
                            ['text' => 'Elle ne possède aucun risque', 'iscorrect' => false],
                            ['text' => 'Elle verse toujours un dividende', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser plusieurs méthodes de valorisation d’une action ?',
                        'answers' => [
                            ['text' => 'Pour comparer les résultats et limiter la dépendance à une seule méthode', 'iscorrect' => true],
                            ['text' => 'Pour garantir le prix futur', 'iscorrect' => false],
                            ['text' => 'Pour supprimer toutes les hypothèses', 'iscorrect' => false],
                            ['text' => 'Pour éviter toute analyse financière', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse des obligations',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un coupon obligataire ?',
                        'answers' => [
                            ['text' => 'Le paiement d’intérêt prévu par les conditions de l’obligation', 'iscorrect' => true],
                            ['text' => 'Le prix de marché de l’action', 'iscorrect' => false],
                            ['text' => 'Le bénéfice de l’émetteur', 'iscorrect' => false],
                            ['text' => 'Une taxe obligatoire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la valeur nominale d’une obligation ?',
                        'answers' => [
                            ['text' => 'Le montant de référence prévu par les conditions de l’obligation', 'iscorrect' => true],
                            ['text' => 'Toujours son prix de marché', 'iscorrect' => false],
                            ['text' => 'Son rendement annuel', 'iscorrect' => false],
                            ['text' => 'Son bénéfice net', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement au prix d’une obligation existante lorsque les taux de marché augmentent ?',
                        'answers' => [
                            ['text' => 'Son prix tend à diminuer, toutes choses égales par ailleurs', 'iscorrect' => true],
                            ['text' => 'Son prix augmente toujours', 'iscorrect' => false],
                            ['text' => 'Son coupon disparaît', 'iscorrect' => false],
                            ['text' => 'Sa maturité devient nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de crédit d’une obligation ?',
                        'answers' => [
                            ['text' => 'Le risque que l’émetteur ne respecte pas ses obligations de paiement', 'iscorrect' => true],
                            ['text' => 'Le risque de hausse du dividende', 'iscorrect' => false],
                            ['text' => 'Le risque de croissance économique', 'iscorrect' => false],
                            ['text' => 'Le risque de change uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une obligation d’entreprise peut-elle offrir un rendement supérieur à une obligation sans risque de référence ?',
                        'answers' => [
                            ['text' => 'Elle peut intégrer une prime compensant notamment un risque de crédit plus élevé', 'iscorrect' => true],
                            ['text' => 'Parce que toutes les entreprises sont sans risque', 'iscorrect' => false],
                            ['text' => 'Parce que son coupon est toujours nul', 'iscorrect' => false],
                            ['text' => 'Parce que son prix est toujours inférieur à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la maturité d’une obligation ?',
                        'answers' => [
                            ['text' => 'La date à laquelle le principal doit normalement être remboursé', 'iscorrect' => true],
                            ['text' => 'La date du premier dividende', 'iscorrect' => false],
                            ['text' => 'Le taux du coupon', 'iscorrect' => false],
                            ['text' => 'La valeur comptable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le rendement à l’échéance ?',
                        'answers' => [
                            ['text' => 'Un rendement qui relie le prix actuel aux flux futurs de l’obligation sous certaines hypothèses', 'iscorrect' => true],
                            ['text' => 'Le coupon uniquement', 'iscorrect' => false],
                            ['text' => 'Le taux de croissance du PIB', 'iscorrect' => false],
                            ['text' => 'Le prix nominal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation avec une échéance longue est généralement :',
                        'answers' => [
                            ['text' => 'Plus sensible aux variations de taux que certaines obligations plus courtes, toutes choses égales par ailleurs', 'iscorrect' => true],
                            ['text' => 'Toujours sans risque', 'iscorrect' => false],
                            ['text' => 'Toujours plus rentable', 'iscorrect' => false],
                            ['text' => 'Indépendante des taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la notation de crédit est-elle utile ?',
                        'answers' => [
                            ['text' => 'Elle fournit une indication standardisée de la qualité de crédit estimée d’un émetteur ou d’une dette', 'iscorrect' => true],
                            ['text' => 'Elle garantit le remboursement', 'iscorrect' => false],
                            ['text' => 'Elle fixe toujours le prix de marché', 'iscorrect' => false],
                            ['text' => 'Elle élimine le risque de taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’un des principaux risques pour un détenteur d’obligation ?',
                        'answers' => [
                            ['text' => 'Le risque de taux et le risque de crédit', 'iscorrect' => true],
                            ['text' => 'Uniquement le risque de dividende', 'iscorrect' => false],
                            ['text' => 'Uniquement le risque opérationnel de l’investisseur', 'iscorrect' => false],
                            ['text' => 'Aucun risque', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Valorisation et comparaison des investissements',
                'questions' => [
                    [
                        'question' => 'Que signifie actualiser un flux futur ?',
                        'answers' => [
                            ['text' => 'Convertir sa valeur future en une valeur équivalente aujourd’hui', 'iscorrect' => true],
                            ['text' => 'Augmenter toujours sa valeur', 'iscorrect' => false],
                            ['text' => 'Supprimer le flux', 'iscorrect' => false],
                            ['text' => 'Transformer le flux en action', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on un taux d’actualisation ?',
                        'answers' => [
                            ['text' => 'Pour tenir compte de la valeur temporelle de l’argent et du risque selon le modèle', 'iscorrect' => true],
                            ['text' => 'Pour garantir un rendement', 'iscorrect' => false],
                            ['text' => 'Pour supprimer les flux futurs', 'iscorrect' => false],
                            ['text' => 'Pour calculer uniquement le chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la valeur actuelle nette ?',
                        'answers' => [
                            ['text' => 'La valeur actuelle des flux futurs moins l’investissement initial selon les hypothèses retenues', 'iscorrect' => true],
                            ['text' => 'Le chiffre d’affaires annuel', 'iscorrect' => false],
                            ['text' => 'Le bénéfice comptable uniquement', 'iscorrect' => false],
                            ['text' => 'La valeur nominale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une VAN positive signifie généralement que :',
                        'answers' => [
                            ['text' => 'Le projet crée de la valeur selon le taux d’actualisation et les flux retenus', 'iscorrect' => true],
                            ['text' => 'Le projet est sans risque', 'iscorrect' => false],
                            ['text' => 'Le rendement est garanti', 'iscorrect' => false],
                            ['text' => 'Les flux futurs sont certains', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une valorisation relative ?',
                        'answers' => [
                            ['text' => 'Une valorisation fondée sur la comparaison avec des actifs ou entreprises similaires', 'iscorrect' => true],
                            ['text' => 'Une valorisation sans données', 'iscorrect' => false],
                            ['text' => 'Une valorisation basée uniquement sur le nominal', 'iscorrect' => false],
                            ['text' => 'Une valorisation indépendante du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer des entreprises similaires ?',
                        'answers' => [
                            ['text' => 'Pour obtenir des références pertinentes de valorisation', 'iscorrect' => true],
                            ['text' => 'Pour garantir leur croissance', 'iscorrect' => false],
                            ['text' => 'Pour supprimer les différences sectorielles', 'iscorrect' => false],
                            ['text' => 'Pour connaître leur bénéfice futur exact', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut fortement influencer une valorisation par flux actualisés ?',
                        'answers' => [
                            ['text' => 'Les hypothèses concernant les flux futurs et le taux d’actualisation', 'iscorrect' => true],
                            ['text' => 'Uniquement le nom de l’entreprise', 'iscorrect' => false],
                            ['text' => 'Uniquement le nombre d’employés', 'iscorrect' => false],
                            ['text' => 'Uniquement la date de création', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi réaliser une analyse de sensibilité ?',
                        'answers' => [
                            ['text' => 'Pour observer comment la valeur estimée change lorsque certaines hypothèses changent', 'iscorrect' => true],
                            ['text' => 'Pour garantir une valeur exacte', 'iscorrect' => false],
                            ['text' => 'Pour supprimer les hypothèses', 'iscorrect' => false],
                            ['text' => 'Pour éviter toute analyse', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une hypothèse de croissance dans une valorisation ?',
                        'answers' => [
                            ['text' => 'Une estimation de l’évolution future d’un élément financier pertinent', 'iscorrect' => true],
                            ['text' => 'Une garantie contractuelle', 'iscorrect' => false],
                            ['text' => 'Une donnée nécessairement certaine', 'iscorrect' => false],
                            ['text' => 'Un taux sans risque obligatoire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il être prudent avec une valorisation unique ?',
                        'answers' => [
                            ['text' => 'Parce qu’elle dépend d’hypothèses et d’estimations incertaines', 'iscorrect' => true],
                            ['text' => 'Parce qu’une entreprise n’a jamais de valeur', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés sont toujours fermés', 'iscorrect' => false],
                            ['text' => 'Parce que les flux futurs sont toujours nuls', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Construction d’un portefeuille d’investissement',
                'questions' => [
                    [
                        'question' => 'Quel est le principal avantage d’un portefeuille diversifié ?',
                        'answers' => [
                            ['text' => 'Il peut réduire le risque spécifique grâce à la combinaison d’actifs', 'iscorrect' => true],
                            ['text' => 'Il garantit un rendement positif', 'iscorrect' => false],
                            ['text' => 'Il supprime tous les risques', 'iscorrect' => false],
                            ['text' => 'Il garantit que tous les actifs montent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la corrélation entre deux actifs ?',
                        'answers' => [
                            ['text' => 'Elle mesure leur tendance à évoluer ensemble ou en sens opposé', 'iscorrect' => true],
                            ['text' => 'Elle mesure uniquement leurs prix', 'iscorrect' => false],
                            ['text' => 'Elle garantit leurs rendements', 'iscorrect' => false],
                            ['text' => 'Elle indique leur valeur nominale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une faible corrélation entre deux actifs peut :',
                        'answers' => [
                            ['text' => 'Contribuer à réduire le risque du portefeuille', 'iscorrect' => true],
                            ['text' => 'Garantir un rendement positif', 'iscorrect' => false],
                            ['text' => 'Supprimer tous les risques', 'iscorrect' => false],
                            ['text' => 'Rendre les actifs identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie l’allocation d’actifs ?',
                        'answers' => [
                            ['text' => 'La répartition du portefeuille entre différentes catégories d’actifs', 'iscorrect' => true],
                            ['text' => 'Le calcul du bénéfice net', 'iscorrect' => false],
                            ['text' => 'Le choix d’un seul titre', 'iscorrect' => false],
                            ['text' => 'La fixation d’un dividende', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi inclure plusieurs classes d’actifs dans un portefeuille ?',
                        'answers' => [
                            ['text' => 'Pour diversifier les sources de rendement et de risque', 'iscorrect' => true],
                            ['text' => 'Pour supprimer toute volatilité', 'iscorrect' => false],
                            ['text' => 'Pour garantir une performance', 'iscorrect' => false],
                            ['text' => 'Pour éviter toute analyse', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le rééquilibrage d’un portefeuille ?',
                        'answers' => [
                            ['text' => 'Le retour des pondérations vers les objectifs définis', 'iscorrect' => true],
                            ['text' => 'La vente obligatoire de tous les actifs', 'iscorrect' => false],
                            ['text' => 'La suppression du portefeuille', 'iscorrect' => false],
                            ['text' => 'Le calcul des impôts uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur peut-il rééquilibrer son portefeuille ?',
                        'answers' => [
                            ['text' => 'Parce que les variations de marché peuvent modifier les pondérations initiales', 'iscorrect' => true],
                            ['text' => 'Parce que tous les actifs doivent avoir le même prix', 'iscorrect' => false],
                            ['text' => 'Pour garantir une hausse du marché', 'iscorrect' => false],
                            ['text' => 'Pour supprimer les dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un portefeuille prudent ?',
                        'answers' => [
                            ['text' => 'Un portefeuille généralement orienté vers une exposition au risque plus modérée', 'iscorrect' => true],
                            ['text' => 'Un portefeuille sans aucun risque', 'iscorrect' => false],
                            ['text' => 'Un portefeuille composé uniquement d’actions spéculatives', 'iscorrect' => false],
                            ['text' => 'Un portefeuille garantissant toujours un bénéfice', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’horizon d’investissement est-il important ?',
                        'answers' => [
                            ['text' => 'Parce qu’il influence la capacité de l’investisseur à supporter les fluctuations et à attendre les résultats', 'iscorrect' => true],
                            ['text' => 'Parce qu’il détermine toujours le rendement', 'iscorrect' => false],
                            ['text' => 'Parce qu’il supprime le risque', 'iscorrect' => false],
                            ['text' => 'Parce qu’il rend les actions sans volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est essentiel dans la construction d’un portefeuille ?',
                        'answers' => [
                            ['text' => 'Adapter l’allocation aux objectifs, à l’horizon et à la tolérance au risque', 'iscorrect' => true],
                            ['text' => 'Investir uniquement dans l’actif le plus performant récemment', 'iscorrect' => false],
                            ['text' => 'Éviter toute diversification', 'iscorrect' => false],
                            ['text' => 'Choisir toujours l’actif le plus risqué', 'iscorrect' => false],
                        ],
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
                    'description' => $quizData['title'],
                    'duration' => 10,
                    'passing_score' => 80,
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

                $answers = $questionData['answers'];
                shuffle($answers);

                foreach ($answers as $order => $answerData) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $answerData['text'],
                        'is_correct' => $answerData['iscorrect'],
                        'order' => $order + 1,
                    ]);
                }
            }
        }
    }
}