<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialFundamentalsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-fundamentals')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondamentaux financiers — Décisions financières stratégiques',
                'description' => 'Évaluez la capacité à prendre des décisions financières stratégiques dans des situations professionnelles.',
                'questions' => [
                    [
                        'question' => 'Une entreprise connaît une croissance de 30 % de son chiffre d’affaires, mais son flux de trésorerie opérationnel devient négatif. Quelle est la priorité de l’analyse ?',
                        'explanation' => 'Il faut déterminer pourquoi la croissance consomme davantage de trésorerie qu’elle n’en génère.',
                        'choices' => [
                            ['choice_text' => 'Analyser le fonds de roulement, les créances, les stocks et la conversion du résultat en trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Conclure immédiatement que la croissance est rentable', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Ignorer la trésorerie puisque le chiffre d’affaires augmente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise souhaite financer une acquisition principalement par dette. Quel élément doit être testé en priorité ?',
                        'explanation' => 'La capacité future à supporter les charges et remboursements supplémentaires est essentielle.',
                        'choices' => [
                            ['choice_text' => 'La capacité future de génération de trésorerie à supporter le service de la dette', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le chiffre d’affaires historique', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le nombre d’actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la valeur comptable des stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une décision financière stratégique doit-elle généralement être analysée avec plusieurs scénarios ?',
                        'explanation' => 'Les décisions financières sont sensibles à l’évolution des ventes, coûts, taux, marges et conditions économiques.',
                        'choices' => [
                            ['choice_text' => 'Parce que la résilience de la décision peut varier fortement selon les hypothèses', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un seul scénario est toujours incorrect', 'is_correct' => false],
                            ['choice_text' => 'Parce que les scénarios permettent de garantir le résultat', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une analyse financière ne peut pas utiliser de prévisions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal danger d’une décision financière basée uniquement sur le rendement attendu ?',
                        'explanation' => 'Le rendement attendu ne suffit pas à apprécier le risque, la liquidité ou la capacité de financement.',
                        'choices' => [
                            ['choice_text' => 'Ignorer le niveau de risque et les contraintes financières nécessaires pour obtenir ce rendement', 'is_correct' => true],
                            ['choice_text' => 'Surestimer automatiquement les revenus', 'is_correct' => false],
                            ['choice_text' => 'Sous-estimer toujours les actifs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer automatiquement les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût d’opportunité est-il important dans l’allocation du capital ?',
                        'explanation' => 'Un capital engagé dans une décision ne peut généralement pas être utilisé simultanément pour une autre opportunité.',
                        'choices' => [
                            ['choice_text' => 'Parce que le capital utilisé pour une option n’est plus disponible pour les autres options', 'is_correct' => true],
                            ['choice_text' => 'Parce que le capital peut être utilisé plusieurs fois sans contrainte', 'is_correct' => false],
                            ['choice_text' => 'Parce que les opportunités alternatives n’ont jamais de valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût d’opportunité concerne uniquement les salariés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle conserver une réserve importante de trésorerie malgré un rendement faible sur cette trésorerie ?',
                        'explanation' => 'La liquidité peut fournir une protection contre les crises et soutenir des opportunités futures.',
                        'choices' => [
                            ['choice_text' => 'Pour préserver sa flexibilité face aux besoins imprévus et aux opportunités d’investissement', 'is_correct' => true],
                            ['choice_text' => 'Parce que la trésorerie est toujours plus rentable que les investissements', 'is_correct' => false],
                            ['choice_text' => 'Parce que la liquidité élimine tous les risques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les entreprises ne peuvent pas distribuer de dividendes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société affiche une rentabilité élevée mais dépend d’un seul client représentant 70 % de son chiffre d’affaires. Quel risque doit être intégré à l’analyse ?',
                        'explanation' => 'Une concentration commerciale élevée expose les revenus et les flux de trésorerie à la perte d’un client majeur.',
                        'choices' => [
                            ['choice_text' => 'Le risque de concentration des revenus et des flux de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le risque de change', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le risque fiscal', 'is_correct' => false],
                            ['choice_text' => 'Aucun risque significatif puisque la marge est élevée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la croissance des bénéfices doit-elle être évaluée avec la croissance du capital investi ?',
                        'explanation' => 'Une hausse du bénéfice peut nécessiter un investissement disproportionné en capital.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer si l’augmentation du bénéfice justifie réellement les ressources supplémentaires engagées', 'is_correct' => true],
                            ['choice_text' => 'Parce que le capital investi n’a jamais d’effet sur la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Parce que tout bénéfice supplémentaire crée automatiquement de la valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que le capital investi doit toujours être réduit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une structure financière flexible peut-elle avoir une valeur stratégique importante ?',
                        'explanation' => 'Une bonne flexibilité permet de réagir aux chocs et de saisir des opportunités sans dépendre immédiatement d’un financement externe.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de financer des besoins ou opportunités futures avec moins de contraintes', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit un rendement élevé', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les risques opérationnels', 'is_correct' => false],
                            ['choice_text' => 'Elle rend inutile la gestion de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume le mieux une décision financière professionnelle ?',
                        'explanation' => 'Une bonne décision combine rendement, risque, liquidité, financement, hypothèses et implications stratégiques.',
                        'choices' => [
                            ['choice_text' => 'Évaluer rendement, risque, liquidité, financement, scénarios et conséquences stratégiques', 'is_correct' => true],
                            ['choice_text' => 'Choisir uniquement l’option au rendement attendu le plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Choisir toujours le financement le moins cher', 'is_correct' => false],
                            ['choice_text' => 'Se concentrer uniquement sur le chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fondamentaux financiers — Création de valeur et allocation du capital',
                'description' => 'Analysez les décisions d’allocation du capital selon la rentabilité, le risque et le coût du capital.',
                'questions' => [
                    [
                        'question' => 'Une entreprise réalise un rendement de 7 % sur un projet alors que son coût du capital est estimé à 10 %. Quelle conclusion est la plus appropriée ?',
                        'explanation' => 'Un rendement inférieur au coût du capital indique généralement une destruction de valeur économique.',
                        'choices' => [
                            ['choice_text' => 'Le projet ne couvre pas le coût du capital engagé et peut détruire de la valeur', 'is_correct' => true],
                            ['choice_text' => 'Le projet crée automatiquement beaucoup de valeur', 'is_correct' => false],
                            ['choice_text' => 'Le coût du capital n’a aucun rapport avec la création de valeur', 'is_correct' => false],
                            ['choice_text' => 'Un rendement positif est toujours suffisant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rendement du capital investi est-il important dans l’allocation du capital ?',
                        'explanation' => 'Il permet de comparer le rendement généré aux ressources engagées.',
                        'choices' => [
                            ['choice_text' => 'Il permet d’évaluer l’efficacité du capital utilisé pour générer des résultats', 'is_correct' => true],
                            ['choice_text' => 'Il mesure uniquement la liquidité', 'is_correct' => false],
                            ['choice_text' => 'Il remplace toujours l’analyse des flux', 'is_correct' => false],
                            ['choice_text' => 'Il garantit la performance future', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise ne devrait-elle pas accepter automatiquement tous les projets ayant une VAN positive ?',
                        'explanation' => 'Les contraintes de capital, les risques, la stratégie et la capacité d’exécution doivent également être considérés.',
                        'choices' => [
                            ['choice_text' => 'Les contraintes de financement, de risque et de capacité d’exécution doivent aussi être prises en compte', 'is_correct' => true],
                            ['choice_text' => 'Une VAN positive est toujours incorrecte', 'is_correct' => false],
                            ['choice_text' => 'Les projets à VAN positive ne génèrent jamais de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Le risque n’a aucun rapport avec la décision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un projet à rendement élevé mais à très forte volatilité peut-il être moins attractif qu’un projet plus stable ?', 'explanation' => 'Un rendement élevé doit être évalué par rapport au risque et à la capacité financière de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Le projet peut présenter un rendement insuffisant par rapport au risque pris', 'is_correct' => true],
                            ['choice_text' => 'La volatilité augmente toujours la valeur', 'is_correct' => false],
                            ['choice_text' => 'Un rendement élevé garantit toujours le meilleur choix', 'is_correct' => false],
                            ['choice_text' => 'Le risque n’a aucun effet sur l’allocation du capital', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser la capacité d’exécution d’un investissement avant de l’approuver ?', 'explanation' => 'Un projet économiquement attractif peut échouer si l’organisation ne dispose pas des ressources opérationnelles nécessaires.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une bonne rentabilité théorique ne garantit pas une exécution réussie', 'is_correct' => true],
                            ['choice_text' => 'Parce que les projets financiers n’ont jamais besoin de ressources humaines', 'is_correct' => false],
                            ['choice_text' => 'Parce que la stratégie n’a aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les projections sont toujours certaines', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer plusieurs projets selon leur consommation de capital ?',
                        'explanation' => 'Un projet peut générer un rendement attractif mais monopoliser une part importante des ressources financières.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les projets qui créent le plus de valeur par rapport aux ressources mobilisées', 'is_correct' => true],
                            ['choice_text' => 'Pour choisir automatiquement le projet le plus coûteux', 'is_correct' => false],
                            ['choice_text' => 'Parce que le capital consommé est toujours sans importance', 'is_correct' => false],
                            ['choice_text' => 'Pour ignorer les rendements attendus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsque le management privilégie uniquement la croissance du chiffre d’affaires ?', 'explanation' => 'La croissance peut être obtenue au prix d’une baisse des marges ou d’une forte consommation de capital.',
                        'choices' => [
                            ['choice_text' => 'Une croissance sans rentabilité suffisante ou sans création de valeur', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration automatique de tous les ratios', 'is_correct' => false],
                            ['choice_text' => 'Une réduction certaine de la dette', 'is_correct' => false],
                            ['choice_text' => 'Une hausse garantie de la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la croissance rentable est-elle généralement plus attractive que la croissance non rentable ?', 'explanation' => 'La croissance rentable permet de générer des résultats supplémentaires sans détruire la valeur économique.', 'choices' => [
                            ['choice_text' => 'Parce qu’elle augmente l’activité tout en produisant un rendement suffisant sur les ressources engagées', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute croissance non rentable est toujours impossible', 'is_correct' => false],
                            ['choice_text' => 'Parce que le chiffre d’affaires devient secondaire', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements ne sont plus nécessaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les décisions d’allocation du capital doivent-elles être revues périodiquement ?', 'explanation' => 'Les hypothèses, risques et opportunités évoluent dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Parce que les conditions économiques, les risques et les performances réelles évoluent', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un projet approuvé ne change jamais', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les investissements existants', 'is_correct' => false],
                            ['choice_text' => 'Parce que les résultats historiques sont inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif ultime de l’allocation financière du capital ?', 'explanation' => 'L’objectif est de mobiliser les ressources là où elles produisent une valeur ajustée au risque suffisante.',
                        'choices' => [
                            ['choice_text' => 'Diriger les ressources vers les usages offrant une création de valeur suffisante compte tenu du risque', 'is_correct' => true],
                            ['choice_text' => 'Utiliser tout le capital disponible', 'is_correct' => false],
                            ['choice_text' => 'Maximiser uniquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Réduire tous les investissements', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fondamentaux financiers — Analyse professionnelle du risque et du rendement',
                'description' => 'Approfondissez l’évaluation du risque, de la volatilité et de la rémunération attendue.',
                'questions' => [
                    [
                        'question' => 'Pourquoi le rendement attendu ne constitue-t-il pas une garantie de résultat ?', 'explanation' => 'Le rendement attendu est une estimation soumise à l’incertitude.', 'choices' => [
                            ['choice_text' => 'Parce qu’il repose sur des hypothèses et des probabilités concernant des résultats futurs', 'is_correct' => true],
                            ['choice_text' => 'Parce que le rendement attendu est toujours négatif', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements n’ont jamais de flux futurs', 'is_correct' => false],
                            ['choice_text' => 'Parce que les marchés garantissent un rendement fixe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une volatilité élevée n’est-elle pas toujours synonyme d’investissement irrationnel ?', 'explanation' => 'Un niveau de volatilité peut être acceptable selon les objectifs, l’horizon et la capacité à supporter les pertes.',
                        'choices' => [
                            ['choice_text' => 'Son acceptabilité dépend de l’horizon, des objectifs et de la capacité à supporter les pertes', 'is_correct' => true],
                            ['choice_text' => 'Toute volatilité élevée garantit une perte', 'is_correct' => false],
                            ['choice_text' => 'La volatilité n’a jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'Les actifs volatils sont toujours meilleurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte corrélation entre plusieurs actifs réduit-elle l’intérêt de leur diversification ?', 'explanation' => 'Si les actifs réagissent de manière similaire, les pertes peuvent se produire simultanément.', 'choices' => [
                            ['choice_text' => 'Parce que les actifs risquent de subir simultanément les mêmes mouvements', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une forte corrélation garantit un rendement élevé', 'is_correct' => false],
                            ['choice_text' => 'Parce que la corrélation ne concerne que les obligations', 'is_correct' => false],
                            ['choice_text' => 'Parce que plusieurs actifs sont toujours parfaitement diversifiés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les investisseurs institutionnels accordent-ils de l’importance au risque de liquidité ?', 'explanation' => 'Ils peuvent avoir des obligations de paiement même lorsque les marchés sont sous tension.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils doivent pouvoir respecter leurs obligations même en période de stress de marché', 'is_correct' => true],
                            ['choice_text' => 'Parce que les investisseurs institutionnels ne peuvent jamais vendre', 'is_correct' => false],
                            ['choice_text' => 'Parce que la liquidité garantit le rendement', 'is_correct' => false],
                            ['choice_text' => 'Parce que la liquidité concerne uniquement les banques centrales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un actif très rentable historiquement peut-il être inadapté à certains investisseurs ?', 'explanation' => 'Il peut présenter une volatilité ou une illiquidité incompatible avec les besoins de l’investisseur.',
                        'choices' => [
                            ['choice_text' => 'Son risque ou son horizon peuvent être incompatibles avec les objectifs de l’investisseur', 'is_correct' => true],
                            ['choice_text' => 'Les actifs rentables sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'L’investisseur doit toujours choisir l’actif le moins rentable', 'is_correct' => false],
                            ['choice_text' => 'La rentabilité historique détermine automatiquement l’avenir', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi intégrer la perte potentielle maximale dans certaines décisions ?', 'explanation' => 'Une perte importante peut avoir des conséquences disproportionnées par rapport au rendement moyen attendu.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier si les scénarios défavorables restent compatibles avec la capacité financière', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir qu’aucune perte n’arrivera', 'is_correct' => false],
                            ['choice_text' => 'Pour ignorer le rendement', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer toutes les autres analyses', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de concentration est-il particulièrement important pour un investisseur disposant d’un patrimoine limité ?', 'explanation' => 'Une perte sur un actif très concentré peut affecter une part importante du patrimoine total.', 'choices' => [
                            ['choice_text' => 'Une seule perte peut représenter une part significative du patrimoine total', 'is_correct' => true],
                            ['choice_text' => 'La concentration garantit toujours de meilleurs rendements', 'is_correct' => false],
                            ['choice_text' => 'Le patrimoine limité réduit automatiquement les risques', 'is_correct' => false],
                            ['choice_text' => 'La diversification est inutile pour les petits patrimoines', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scénarios de stress doivent-ils rester plausibles ?', 'explanation' => 'Un stress test doit être sévère mais suffisamment réaliste pour être utile à la décision.', 'choices' => [
                            ['choice_text' => 'Pour tester sérieusement la résilience sans utiliser des hypothèses totalement arbitraires', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir les pertes maximales', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les scénarios normaux', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre automatiquement les modèles plus précis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer capacité de risque et tolérance au risque ?', 'explanation' => 'Une personne peut théoriquement supporter une perte financière mais ne pas être psychologiquement ou stratégiquement disposée à l’accepter.', 'choices' => [
                            ['choice_text' => 'La capacité financière à subir une perte peut différer de l’acceptation réelle de cette perte', 'is_correct' => true],
                            ['choice_text' => 'Les deux notions sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'La tolérance ne dépend jamais des objectifs', 'is_correct' => false],
                            ['choice_text' => 'La capacité financière n’a aucun rôle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe professionnel de base pour relier risque et rendement ?', 'explanation' => 'Le rendement attendu doit être jugé en fonction du risque réellement assumé et de la capacité à le supporter.', 'choices' => [
                            ['choice_text' => 'Évaluer la rémunération attendue relativement aux risques pris et à la capacité de les supporter', 'is_correct' => true],
                            ['choice_text' => 'Choisir systématiquement le rendement le plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les pertes potentielles', 'is_correct' => false],
                            ['choice_text' => 'Évaluer uniquement les performances historiques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fondamentaux financiers — Prévisions et scénarios professionnels',
                'description' => 'Analysez la construction, la fiabilité et l’utilisation des prévisions financières.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une prévision financière doit-elle clairement distinguer hypothèses et résultats ?', 'explanation' => 'Cette distinction permet de comprendre quels résultats dépendent de quelles hypothèses.', 'choices' => [
                            ['choice_text' => 'Pour rendre visible la relation entre hypothèses, calculs et résultats', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute révision de la prévision', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que les hypothèses seront exactes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les prévisions doivent-elles être comparées aux réalisations ?', 'explanation' => 'Cette comparaison permet d’identifier les erreurs d’hypothèses et d’améliorer les modèles futurs.', 'choices' => [
                            ['choice_text' => 'Pour identifier les écarts et améliorer les hypothèses futures', 'is_correct' => true],
                            ['choice_text' => 'Pour prouver que toutes les prévisions étaient correctes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le suivi réel', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute mise à jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un scénario défavorable doit-il être suffisamment sévère pour être utile ?', 'explanation' => 'Un scénario trop optimiste ne révèle pas les principales vulnérabilités financières.', 'choices' => [
                            ['choice_text' => 'Pour révéler les limites de résistance de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Pour prévoir exactement une crise future', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une perte', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le scénario de base', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il parfois utiliser un scénario de hausse des taux dans une prévision ?', 'explanation' => 'Une hausse des taux peut augmenter les charges financières et modifier les décisions d’investissement.', 'choices' => [
                            ['choice_text' => 'Pour évaluer la sensibilité de la dette et des investissements au coût du financement', 'is_correct' => true],
                            ['choice_text' => 'Parce que les taux augmentent toujours', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les charges financières', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une hausse de la rentabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les prévisions de trésorerie doivent-elles inclure les échéances de dette ?', 'explanation' => 'Les remboursements peuvent créer des besoins importants de liquidité à certaines dates.', 'choices' => [
                            ['choice_text' => 'Parce que les remboursements peuvent provoquer des besoins de liquidité importants', 'is_correct' => true],
                            ['choice_text' => 'Parce que les dettes n’ont jamais de date d’échéance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les intérêts n’affectent jamais la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les obligations financières sont uniquement comptables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle identifier les hypothèses les plus sensibles ?', 'explanation' => 'Certaines hypothèses peuvent modifier fortement la valeur ou la trésorerie projetée.', 'choices' => [
                            ['choice_text' => 'Pour concentrer les efforts d’analyse et de surveillance sur les principaux facteurs de résultat', 'is_correct' => true],
                            ['choice_text' => 'Pour éliminer toutes les hypothèses', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que ces hypothèses resteront constantes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le modèle plus compliqué', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle documenter les raisons d’un changement majeur de prévision ?', 'explanation' => 'La documentation permet de retracer les décisions et les changements d’hypothèses.', 'choices' => [
                            ['choice_text' => 'Pour assurer la traçabilité des hypothèses et des décisions', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les changements futurs', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les contrôles', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir la précision des projections', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des prévisions glissantes peut-il être utile ?', 'explanation' => 'Elles permettent d’actualiser continuellement la vision financière au fur et à mesure que l’information évolue.', 'choices' => [
                            ['choice_text' => 'Pour maintenir une vision prospective à jour lorsque les conditions évoluent', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les budgets annuels', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les données réelles', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir des résultats constants', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un scénario ne doit-il pas être présenté comme une prédiction certaine ?', 'explanation' => 'Un scénario représente une hypothèse possible et non une garantie de résultat futur.', 'choices' => [
                            ['choice_text' => 'Parce qu’un scénario représente une possibilité dépendant de plusieurs hypothèses', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un scénario est toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les prévisions ne doivent jamais être utilisées', 'is_correct' => false],
                            ['choice_text' => 'Parce que les résultats futurs sont toujours connus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif professionnel d’une bonne prévision financière ?', 'explanation' => 'Elle aide à anticiper les besoins, comparer des décisions et préparer différents futurs possibles.', 'choices' => [
                            ['choice_text' => 'Éclairer les décisions et préparer l’organisation à plusieurs évolutions plausibles', 'is_correct' => true],
                            ['choice_text' => 'Garantir l’avenir financier', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute incertitude', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la gestion financière', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fondamentaux financiers — Gouvernance financière et contrôle',
                'description' => 'Évaluez les principes de gouvernance, de contrôle interne, de traçabilité et de qualité financière.',
                'questions' => [
                    [
                        'question' => 'Pourquoi la séparation des tâches est-elle importante dans un processus financier ?', 'explanation' => 'Elle limite la capacité d’une seule personne à initier, autoriser et dissimuler une opération irrégulière.', 'choices' => [
                            ['choice_text' => 'Elle réduit le risque qu’une seule personne contrôle toutes les étapes sensibles d’une transaction', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit qu’aucune fraude n’est jamais possible', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toute responsabilité', 'is_correct' => false],
                            ['choice_text' => 'Elle permet à chacun d’approuver ses propres transactions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les modèles financiers importants doivent-ils être soumis à un contrôle d’accès ?', 'explanation' => 'Ils peuvent contenir des informations confidentielles et des hypothèses critiques.', 'choices' => [
                            ['choice_text' => 'Pour limiter les accès non autorisés et les modifications incorrectes', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute collaboration', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir automatiquement l’exactitude des calculs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les versions précédentes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un rapport financier important doit-il être traçable ?', 'explanation' => 'La traçabilité permet de comprendre l’origine des données et les modifications apportées.', 'choices' => [
                            ['choice_text' => 'Pour identifier les sources, changements et responsabilités', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute révision', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les contrôles humains', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir l’absence absolue d’erreur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les hypothèses importantes d’un modèle ?', 'explanation' => 'Une hypothèse documentée peut être revue, challengée et modifiée de manière contrôlée.', 'choices' => [
                            ['choice_text' => 'Pour permettre la compréhension, la validation et la révision des hypothèses', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute modification', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que les hypothèses sont toujours vraies', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les résultats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la qualité des données est-elle essentielle avant toute analyse financière ?', 'explanation' => 'Une analyse sophistiquée produira des résultats trompeurs si les données initiales sont erronées.', 'choices' => [
                            ['choice_text' => 'Parce qu’une analyse fiable dépend de données fiables', 'is_correct' => true],
                            ['choice_text' => 'Parce que les outils financiers corrigent toujours les données', 'is_correct' => false],
                            ['choice_text' => 'Parce que les données n’ont aucun effet sur les conclusions', 'is_correct' => false],
                            ['choice_text' => 'Parce que les erreurs disparaissent automatiquement dans les ratios', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contrôles financiers doivent-ils être proportionnés au risque ?', 'explanation' => 'Des contrôles excessifs peuvent être coûteux et ralentir les opérations, tandis que des contrôles insuffisants augmentent les risques.', 'choices' => [
                            ['choice_text' => 'Pour équilibrer le niveau de protection avec le coût et la criticité des risques', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre tous les processus identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer tous les contrôles simples', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro erreur dans toutes les situations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une validation indépendante peut-elle être utile pour une analyse financière critique ?', 'explanation' => 'Un regard indépendant peut détecter des erreurs ou hypothèses que l’auteur n’a pas identifiées.', 'choices' => [
                            ['choice_text' => 'Pour obtenir un regard différent sur les données, hypothèses et raisonnements', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer toutes les analyses internes', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute modification du modèle', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que personne ne fera d’erreur à l’avenir', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi versionner un modèle financier critique ?', 'explanation' => 'Le versionnement permet de suivre les changements et de revenir à une version antérieure si nécessaire.', 'choices' => [
                            ['choice_text' => 'Pour tracer les modifications et restaurer une version contrôlée si nécessaire', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les anciennes versions immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute amélioration', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir l’absence d’erreurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les indicateurs financiers importants doivent-ils avoir une définition claire ?', 'explanation' => 'Une même mesure peut être interprétée différemment si son périmètre n’est pas défini.', 'choices' => [
                            ['choice_text' => 'Pour éviter des interprétations différentes du même indicateur', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute évolution de l’indicateur', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir sa progression future', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une gouvernance financière mature ?', 'explanation' => 'Une bonne gouvernance combine responsabilité, contrôle, traçabilité, qualité des données et gestion des risques.', 'choices' => [
                            ['choice_text' => 'Responsabiliser les acteurs, contrôler les risques, assurer la qualité et conserver une traçabilité suffisante', 'is_correct' => true],
                            ['choice_text' => 'Centraliser toutes les décisions sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les validations', 'is_correct' => false],
                            ['choice_text' => 'Conserver toutes les données sans aucune classification', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fondamentaux financiers — Études de cas professionnelles intégrées',
                'description' => 'Évaluez la capacité à intégrer rentabilité, trésorerie, risque, financement et stratégie.',
                'questions' => [
                    [
                        'question' => 'Une entreprise connaît une croissance très forte, une marge stable et une augmentation rapide de ses créances. Quelle hypothèse doit être testée en priorité ?', 'explanation' => 'La croissance peut mobiliser des ressources importantes en fonds de roulement.', 'choices' => [
                            ['choice_text' => 'La capacité de la trésorerie à financer l’augmentation du besoin en fonds de roulement', 'is_correct' => true],
                            ['choice_text' => 'La disparition des besoins de financement', 'is_correct' => false],
                            ['choice_text' => 'La baisse automatique du risque client', 'is_correct' => false],
                            ['choice_text' => 'La rentabilité future garantie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a un projet rentable mais doit financer l’essentiel du coût par une dette à taux variable. Quelle analyse complémentaire est indispensable ?', 'explanation' => 'La sensibilité au niveau des taux peut modifier fortement le coût de financement et la rentabilité.', 'choices' => [
                            ['choice_text' => 'Analyser la sensibilité du projet aux variations des taux d’intérêt', 'is_correct' => true],
                            ['choice_text' => 'Ignorer les taux puisqu’ils sont variables', 'is_correct' => false],
                            ['choice_text' => 'Supposer que les taux restent toujours constants', 'is_correct' => false],
                            ['choice_text' => 'Analyser uniquement le chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un groupe industriel détient une grande quantité de trésorerie mais plusieurs filiales restent fortement endettées. Quel sujet stratégique peut être étudié ?', 'explanation' => 'Le groupe peut analyser l’allocation interne des liquidités et l’efficacité de sa structure financière.', 'choices' => [
                            ['choice_text' => 'L’allocation de la trésorerie et l’optimisation globale du financement du groupe', 'is_correct' => true],
                            ['choice_text' => 'La suppression de toutes les dettes sans analyse', 'is_correct' => false],
                            ['choice_text' => 'La distribution immédiate de toute la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'L’augmentation obligatoire de tous les stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise améliore sa rentabilité mais son besoin en fonds de roulement augmente fortement chaque année. Quelle question devient stratégique ?', 'explanation' => 'Une rentabilité élevée peut être insuffisante si la croissance consomme trop de trésorerie.', 'choices' => [
                            ['choice_text' => 'La rentabilité génère-t-elle suffisamment de trésorerie pour soutenir la croissance ?', 'is_correct' => true],
                            ['choice_text' => 'La rentabilité doit-elle être supprimée ?', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires doit-il toujours diminuer ?', 'is_correct' => false],
                            ['choice_text' => 'Le fonds de roulement doit-il être ignoré ?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur compare deux sociétés : la première a une marge supérieure mais une dette très élevée ; la seconde a une marge plus faible mais une structure financière plus solide. Quelle comparaison est la plus pertinente ?', 'explanation' => 'Le risque financier et la capacité de génération de cash doivent compléter l’analyse des marges.', 'choices' => [
                            ['choice_text' => 'Comparer rentabilité, flux de trésorerie, levier, risque et capacité de création de valeur', 'is_correct' => true],
                            ['choice_text' => 'Choisir automatiquement la société avec la marge la plus élevée', 'is_correct' => false],
                            ['choice_text' => 'Choisir automatiquement la société avec la dette la plus faible', 'is_correct' => false],
                            ['choice_text' => 'Comparer uniquement les chiffres d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise prévoit une hausse importante de ses ventes mais suppose que les délais de paiement clients resteront constants. Pourquoi cette hypothèse mérite-t-elle une vérification ?', 'explanation' => 'Le besoin de financement peut changer si les conditions commerciales évoluent avec la croissance.', 'choices' => [
                            ['choice_text' => 'Parce que le moindre changement des délais clients peut modifier fortement le besoin de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Parce que les délais clients n’ont jamais d’effet financier', 'is_correct' => false],
                            ['choice_text' => 'Parce que les créances disparaissent avec la croissance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes supplémentaires sont toujours encaissées immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut distribuer un dividende exceptionnel alors qu’une importante échéance de dette approche. Quelle analyse doit être prioritaire ?', 'explanation' => 'La distribution doit être évaluée par rapport aux obligations de liquidité et à la capacité de financement.', 'choices' => [
                            ['choice_text' => 'Vérifier la capacité de trésorerie et les obligations financières avant distribution', 'is_correct' => true],
                            ['choice_text' => 'Distribuer automatiquement tout l’excédent disponible', 'is_correct' => false],
                            ['choice_text' => 'Ignorer l’échéance de dette', 'is_correct' => false],
                            ['choice_text' => 'Augmenter immédiatement les stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société présente une excellente croissance historique mais dépend fortement d’une hypothèse de marché favorable. Que doit faire un analyste professionnel ?', 'explanation' => 'Il doit tester la robustesse de la performance sous des hypothèses moins favorables.', 'choices' => [
                            ['choice_text' => 'Tester la sensibilité des résultats à la modification de l’hypothèse de marché', 'is_correct' => true],
                            ['choice_text' => 'Projeter automatiquement la même croissance indéfiniment', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les facteurs de marché', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement les résultats de la première année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise souhaite réduire son coût de financement en augmentant fortement son levier. Quel contrepoids doit être recherché ?', 'explanation' => 'La réduction du coût peut s’accompagner d’une hausse importante du risque financier.', 'choices' => [
                            ['choice_text' => 'Évaluer l’augmentation du risque de défaut, de refinancement et de volatilité des flux', 'is_correct' => true],
                            ['choice_text' => 'Ignorer les risques puisque le coût baisse', 'is_correct' => false],
                            ['choice_text' => 'Maximiser la dette sans limite', 'is_correct' => false],
                            ['choice_text' => 'Réduire tous les capitaux propres immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur objectif d’une analyse financière professionnelle intégrée ?', 'explanation' => 'Elle doit permettre de comprendre la situation, les risques, les alternatives et les conséquences d’une décision.', 'choices' => [
                            ['choice_text' => 'Éclairer une décision en reliant performance, trésorerie, financement, risques et stratégie', 'is_correct' => true],
                            ['choice_text' => 'Produire uniquement davantage de ratios', 'is_correct' => false],
                            ['choice_text' => 'Se concentrer uniquement sur le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Maximiser le nombre de données présentées', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fondamentaux financiers — Évaluation professionnelle de la santé financière',
                'description' => 'Synthèse professionnelle sur la liquidité, la solvabilité, la rentabilité, la qualité des bénéfices et la résilience.',
                'questions' => [
                    [
                        'question' => 'Une entreprise présente une liquidité élevée, une rentabilité faible et beaucoup de trésorerie non utilisée. Quelle question stratégique est pertinente ?', 'explanation' => 'Une forte liquidité peut être utile, mais des ressources excessivement inactives peuvent réduire l’efficacité du capital.', 'choices' => [
                            ['choice_text' => 'La quantité de liquidité conservée est-elle cohérente avec les besoins et les opportunités de l’entreprise ?', 'is_correct' => true],
                            ['choice_text' => 'La trésorerie doit-elle toujours être éliminée', 'is_correct' => false],
                            ['choice_text' => 'La rentabilité est-elle inutile', 'is_correct' => false],
                            ['choice_text' => 'Les actifs liquides doivent-ils être convertis immédiatement en dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la solvabilité doit-elle être analysée avec la qualité des actifs ?', 'explanation' => 'Des actifs importants mais peu liquides ou peu productifs peuvent soutenir moins efficacement les obligations financières.', 'choices' => [
                            ['choice_text' => 'Parce que la capacité réelle de soutien des actifs dépend de leur valeur et de leur liquidité', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les actifs sont parfaitement équivalents', 'is_correct' => false],
                            ['choice_text' => 'Parce que la solvabilité dépend uniquement du chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actifs ne jouent aucun rôle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse de la qualité des bénéfices est-elle importante ?', 'explanation' => 'Des bénéfices liés à des éléments exceptionnels ou peu soutenables peuvent donner une image trop optimiste.', 'choices' => [
                            ['choice_text' => 'Pour déterminer dans quelle mesure les bénéfices sont récurrents et soutenables', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les bénéfices exceptionnels des états financiers', 'is_correct' => false],
                            ['choice_text' => 'Pour prouver que les bénéfices sont toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Pour ignorer la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la capacité d’autofinancement est-elle importante pour la croissance ?', 'explanation' => 'Elle indique dans quelle mesure l’activité peut contribuer au financement de ses besoins sans dépendre exclusivement de sources externes.', 'choices' => [
                            ['choice_text' => 'Elle permet d’évaluer la capacité de l’activité à contribuer au financement de ses propres besoins', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours une croissance sans dette', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Elle détermine uniquement le cours de l’action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse de santé financière doit-elle examiner les échéances futures ?', 'explanation' => 'Les obligations à venir peuvent créer des tensions même lorsque la situation actuelle paraît solide.', 'choices' => [
                            ['choice_text' => 'Parce que des obligations importantes à venir peuvent modifier rapidement la situation de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Parce que les échéances futures sont toujours sans importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dettes disparaissent avant leur échéance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les échéances ne concernent que les banques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle avoir une structure financière saine mais être vulnérable à un choc commercial ?', 'explanation' => 'Une dépendance forte à certains clients, produits ou marchés peut réduire la résilience opérationnelle.', 'choices' => [
                            ['choice_text' => 'Parce que la santé financière actuelle ne supprime pas les risques futurs liés au modèle économique', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une structure saine garantit tous les revenus futurs', 'is_correct' => false],
                            ['choice_text' => 'Parce que les risques commerciaux n’ont aucun effet financier', 'is_correct' => false],
                            ['choice_text' => 'Parce que les clients sont toujours parfaitement stables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stress tests complètent-ils les ratios financiers historiques ?', 'explanation' => 'Les ratios historiques décrivent le passé, tandis que les stress tests évaluent la résistance à des scénarios futurs défavorables.', 'choices' => [
                            ['choice_text' => 'Ils permettent d’évaluer la résilience sous des conditions futures défavorables', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent complètement les états financiers', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent les résultats futurs', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent inutiles les données historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversification des clients peut-elle avoir une valeur financière ?', 'explanation' => 'Elle réduit la dépendance aux revenus d’un seul client ou d’un petit nombre de clients.', 'choices' => [
                            ['choice_text' => 'Elle réduit le risque que la perte d’un client provoque une forte baisse des revenus', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit une croissance constante', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tous les risques commerciaux', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente toujours les marges', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la résilience financière est-elle importante même lorsque les indicateurs actuels sont positifs ?', 'explanation' => 'Les entreprises doivent pouvoir absorber des changements futurs sans remettre en cause leur continuité.', 'choices' => [
                            ['choice_text' => 'Parce qu’une situation actuelle positive peut se dégrader sous un choc futur', 'is_correct' => true],
                            ['choice_text' => 'Parce que les indicateurs actuels sont toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que la résilience concerne uniquement les entreprises déficitaires', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un choc futur est toujours certain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur résumé d’une évaluation professionnelle de la santé financière ?', 'explanation' => 'Il faut relier rentabilité, trésorerie, solvabilité, risques, qualité des bénéfices et capacité d’adaptation.', 'choices' => [
                            ['choice_text' => 'Évaluer rentabilité, liquidité, solvabilité, qualité des résultats, risques et résilience', 'is_correct' => true],
                            ['choice_text' => 'Se limiter au bénéfice net', 'is_correct' => false],
                            ['choice_text' => 'Se limiter au montant des actifs', 'is_correct' => false],
                            ['choice_text' => 'Se limiter au chiffre d’affaires', 'is_correct' => false],
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
                    'description' => $quizData['description'],
                    'duration' => 30,
                    'passing_score' => 70,
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Professional',
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