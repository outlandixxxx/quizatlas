```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class InvestmentAnalysisProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'investment-analysis')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Due Diligence et thèse d’investissement',
                'questions' => [
                    [
                        'question' => 'Dans une due diligence professionnelle, quel élément doit être prioritairement confronté aux déclarations du management ?',
                        'answers' => [
                            ['text' => 'Les données opérationnelles, financières et les indicateurs indépendants de l’entreprise', 'iscorrect' => true],
                            ['text' => 'Uniquement la présentation destinée aux investisseurs', 'iscorrect' => false],
                            ['text' => 'Uniquement l’évolution récente du cours', 'iscorrect' => false],
                            ['text' => 'Le consensus médiatique uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une thèse d’investissement robuste doit principalement expliquer :',
                        'answers' => [
                            ['text' => 'Pourquoi l’actif est mal valorisé, quels catalyseurs peuvent corriger l’écart et quels risques invalideraient la thèse', 'iscorrect' => true],
                            ['text' => 'Pourquoi le cours doit obligatoirement augmenter', 'iscorrect' => false],
                            ['text' => 'Pourquoi les concurrents sont toujours moins performants', 'iscorrect' => false],
                            ['text' => 'Pourquoi l’analyse technique suffit à elle seule', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel signal peut remettre en cause une thèse fondée sur une forte croissance structurelle ?',
                        'answers' => [
                            ['text' => Une baisse durable du taux de réinvestissement rentable ou du rendement du capital investi, 'iscorrect' => true],
                            ['text' => 'Une hausse ponctuelle du cours', 'iscorrect' => false],
                            ['text' => 'Une publication trimestrielle conforme aux attentes', 'iscorrect' => false],
                            ['text' => 'Une hausse temporaire du volume échangé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les avantages concurrentiels doivent-ils être analysés dans le temps ?',
                        'answers' => [
                            ['text' => 'Parce qu’un avantage actuel peut être érodé par l’innovation, la réglementation ou l’arrivée de concurrents', 'iscorrect' => true],
                            ['text' => 'Parce qu’un avantage concurrentiel est toujours permanent', 'iscorrect' => false],
                            ['text' => 'Parce que les marges ne dépendent jamais de la concurrence', 'iscorrect' => false],
                            ['text' => 'Parce que le marché ne change pas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément constitue généralement un meilleur catalyseur d’investissement qu’une simple anticipation de hausse du cours ?',
                        'answers' => [
                            ['text' => 'Un événement identifiable susceptible de modifier les fondamentaux ou la perception de la valeur', 'iscorrect' => true],
                            ['text' => 'Une rumeur non vérifiée', 'iscorrect' => false],
                            ['text' => 'Une hausse récente sans explication', 'iscorrect' => false],
                            ['text' => 'Un volume isolé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise affiche une croissance supérieure à celle du secteur mais détruit de la valeur sur ses nouveaux investissements. Quelle conclusion est la plus pertinente ?',
                        'answers' => [
                            ['text' => 'La croissance supplémentaire peut être destructrice de valeur malgré sa rapidité', 'iscorrect' => true],
                            ['text' => 'Toute croissance est nécessairement créatrice de valeur', 'iscorrect' => false],
                            ['text' => 'Le ROIC est sans importance', 'iscorrect' => false],
                            ['text' => 'Le risque disparaît avec la croissance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse de la structure actionnariale peut-elle être pertinente ?',
                        'answers' => [
                            ['text' => 'Elle peut révéler des incitations, des conflits d’intérêts et des mécanismes de contrôle influençant la gouvernance', 'iscorrect' => true],
                            ['text' => 'Elle permet de connaître avec certitude le cours futur', 'iscorrect' => false],
                            ['text' => 'Elle remplace l’analyse financière', 'iscorrect' => false],
                            ['text' => 'Elle supprime le risque de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un scénario d’invalidation dans une thèse d’investissement ?',
                        'answers' => [
                            ['text' => 'Définir les conditions observables qui indiqueraient que les hypothèses fondamentales ne sont plus valides', 'iscorrect' => true],
                            ['text' => 'Garantir une sortie profitable', 'iscorrect' => false],
                            ['text' => 'Éliminer toute incertitude', 'iscorrect' => false],
                            ['text' => 'Prévoir exactement le prochain cours', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse des incitations du management est-elle importante ?',
                        'answers' => [
                            ['text' => 'Les systèmes de rémunération peuvent influencer les décisions d’investissement, de croissance et d’allocation du capital', 'iscorrect' => true],
                            ['text' => 'Les dirigeants n’ont jamais d’influence sur l’allocation du capital', 'iscorrect' => false],
                            ['text' => 'Les incitations déterminent automatiquement le cours', 'iscorrect' => false],
                            ['text' => 'Elles remplacent l’analyse des flux de trésorerie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une bonne due diligence doit-elle chercher uniquement les éléments confirmant la thèse ?',
                        'answers' => [
                            ['text' => 'Non, elle doit également rechercher activement les informations susceptibles de réfuter la thèse', 'iscorrect' => true],
                            ['text' => 'Oui, car les informations contradictoires sont inutiles', 'iscorrect' => false],
                            ['text' => 'Oui, si la valorisation paraît attractive', 'iscorrect' => false],
                            ['text' => 'Non, mais uniquement pour les obligations', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Valorisation intrinsèque professionnelle',
                'questions' => [
                    [
                        'question' => 'Dans une valorisation DCF professionnelle, pourquoi les flux de trésorerie doivent-ils être cohérents avec le taux d’actualisation utilisé ?',
                        'answers' => [
                            ['text' => 'Parce que la définition des flux et la structure du coût du capital doivent correspondre au point de vue des apporteurs de capitaux valorisés', 'iscorrect' => true],
                            ['text' => 'Parce que tous les flux doivent être actualisés au taux sans risque', 'iscorrect' => false],
                            ['text' => 'Parce que le WACC est toujours identique au taux de croissance', 'iscorrect' => false],
                            ['text' => 'Parce que le FCFE et le FCFF sont toujours interchangeables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème apparaît si le taux de croissance terminale dépasse durablement le taux de croissance nominale de l’économie sans justification crédible ?',
                        'answers' => [
                            ['text' => 'La valeur terminale peut devenir économiquement difficile à soutenir', 'iscorrect' => true],
                            ['text' => 'La valeur intrinsèque devient automatiquement plus précise', 'iscorrect' => false],
                            ['text' => 'Le WACC devient nul', 'iscorrect' => false],
                            ['text' => 'Les flux historiques deviennent inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une valorisation par scénarios est-elle souvent préférable à une estimation ponctuelle ?',
                        'answers' => [
                            ['text' => 'Elle permet d’intégrer plusieurs trajectoires plausibles de croissance, marges, investissements et multiples', 'iscorrect' => true],
                            ['text' => 'Elle garantit la bonne prévision', 'iscorrect' => false],
                            ['text' => 'Elle élimine le risque de modèle', 'iscorrect' => false],
                            ['text' => 'Elle rend le prix de marché inutile', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal intérêt d’une méthode de somme des parties ?',
                        'answers' => [
                            ['text' => 'Valoriser séparément des activités dont les profils économiques et multiples appropriés diffèrent fortement', 'iscorrect' => true],
                            ['text' => 'Utiliser le même multiple pour toutes les divisions', 'iscorrect' => false],
                            ['text' => 'Ignorer les activités déficitaires', 'iscorrect' => false],
                            ['text' => 'Supprimer les coûts centraux automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise est valorisée sur la base d’un multiple très supérieur à son historique. Quelle question est prioritaire ?',
                        'answers' => [
                            ['text' => 'Quelles améliorations fondamentales justifient le changement de multiple par rapport au passé ?', 'iscorrect' => true],
                            ['text' => 'Le multiple historique doit-il être ignoré systématiquement ?', 'iscorrect' => false],
                            ['text' => 'Le cours est-il nécessairement trop élevé ?', 'iscorrect' => false],
                            ['text' => 'Le secteur a-t-il toujours raison ?', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur d’une option réelle peut-elle être importante dans certaines entreprises ?',
                        'answers' => [
                            ['text' => 'Parce que la flexibilité future d’investir, d’abandonner ou d’étendre un projet peut avoir une valeur économique', 'iscorrect' => true],
                            ['text' => 'Parce que toute entreprise possède une option financière cotée', 'iscorrect' => false],
                            ['text' => 'Parce que les options réelles remplacent toujours le DCF', 'iscorrect' => false],
                            ['text' => 'Parce qu’elles éliminent l’incertitude', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’une valorisation utilise des multiples de sociétés comparables sans ajustement ?',
                        'answers' => [
                            ['text' => 'Les différences de croissance, rentabilité, risque et structure financière peuvent rendre la comparaison trompeuse', 'iscorrect' => true],
                            ['text' => 'Les multiples deviennent toujours négatifs', 'iscorrect' => false],
                            ['text' => 'Les comparables ne peuvent jamais être utilisés', 'iscorrect' => false],
                            ['text' => 'Le marché cesse d’être liquide', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le prix payé pour une acquisition peut-il détruire de la valeur même si l’entreprise acquise est excellente ?',
                        'answers' => [
                            ['text' => 'Un prix d’acquisition excessif peut transférer toute la valeur future attendue aux vendeurs', 'iscorrect' => true],
                            ['text' => 'Une excellente entreprise ne peut jamais être surpayée', 'iscorrect' => false],
                            ['text' => 'Les synergies sont toujours garanties', 'iscorrect' => false],
                            ['text' => 'Le prix d’acquisition n’a aucun effet sur les rendements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle DCF, pourquoi une analyse de sensibilité locale peut-elle être insuffisante ?',
                        'answers' => [
                            ['text' => 'Parce que plusieurs hypothèses peuvent évoluer simultanément et modifier fortement la distribution des valeurs', 'iscorrect' => true],
                            ['text' => 'Parce qu’une seule hypothèse suffit toujours', 'iscorrect' => false],
                            ['text' => 'Parce que le DCF ne dépend jamais des hypothèses', 'iscorrect' => false],
                            ['text' => 'Parce que le WACC est constant dans toutes les situations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une valorisation prudente doit généralement intégrer :',
                        'answers' => [
                            ['text' => 'Des hypothèses explicites, une marge de sécurité et une analyse des risques de modèle', 'iscorrect' => true],
                            ['text' => 'Uniquement le scénario optimiste', 'iscorrect' => false],
                            ['text' => 'Uniquement le consensus', 'iscorrect' => false],
                            ['text' => 'Une croissance infinie', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Allocation du capital et création de valeur',
                'questions' => [
                    [
                        'question' => 'Quelle condition rend généralement une acquisition créatrice de valeur pour l’acquéreur avant financement ?',
                        'answers' => [
                            ['text' => 'La valeur actuelle des synergies et bénéfices attendus doit excéder le coût total de l’acquisition et des risques associés', 'iscorrect' => true],
                            ['text' => 'Le chiffre d’affaires de la cible doit simplement augmenter', 'iscorrect' => false],
                            ['text' => 'La cible doit toujours être plus grande que l’acquéreur', 'iscorrect' => false],
                            ['text' => 'Le prix payé n’a aucune importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise rachète ses propres actions à un prix largement supérieur à leur valeur intrinsèque. Quel risque existe ?',
                        'answers' => [
                            ['text' => 'Une destruction de valeur pour les actionnaires restant au capital', 'iscorrect' => true],
                            ['text' => 'Une création automatique de valeur', 'iscorrect' => false],
                            ['text' => 'Une augmentation garantie du ROIC', 'iscorrect' => false],
                            ['text' => 'Une réduction certaine du risque opérationnel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer le rendement du réinvestissement au coût du capital est-il central ?',
                        'answers' => [
                            ['text' => 'Parce que la croissance financée par de nouveaux investissements ne crée de valeur que si le rendement économique est suffisamment supérieur au coût du capital', 'iscorrect' => true],
                            ['text' => 'Parce que toute croissance détruit de la valeur', 'iscorrect' => false],
                            ['text' => 'Parce que le coût du capital mesure uniquement la dette', 'iscorrect' => false],
                            ['text' => 'Parce que le ROIC est sans rapport avec l’investissement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsqu’une entreprise conserve trop de trésorerie sans opportunités d’investissement rentables ?',
                        'answers' => [
                            ['text' => 'Un coût d’opportunité et une allocation inefficiente du capital peuvent peser sur la création de valeur', 'iscorrect' => true],
                            ['text' => 'La valeur intrinsèque augmente nécessairement', 'iscorrect' => false],
                            ['text' => 'Le ROIC augmente automatiquement', 'iscorrect' => false],
                            ['text' => 'Le risque disparaît complètement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société dont le ROIC dépasse durablement son WACC et qui peut réinvestir une part importante de ses bénéfices à ce rendement possède potentiellement :',
                        'answers' => [
                            ['text' => 'Une capacité importante de création de valeur composée dans le temps', 'iscorrect' => true],
                            ['text' => 'Une croissance nécessairement destructrice', 'iscorrect' => false],
                            ['text' => 'Un besoin obligatoire de réduire les investissements', 'iscorrect' => false],
                            ['text' => 'Une absence de risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique de dividende doit-elle être évaluée avec la politique de réinvestissement ?',
                        'answers' => [
                            ['text' => 'Parce que distribuer ou conserver les bénéfices dépend des opportunités de réinvestissement disponibles', 'iscorrect' => true],
                            ['text' => 'Parce que le dividende détermine toujours le ROIC', 'iscorrect' => false],
                            ['text' => 'Parce qu’une entreprise doit toujours distribuer 100 % de ses bénéfices', 'iscorrect' => false],
                            ['text' => 'Parce que le réinvestissement n’a aucun effet sur la valeur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur peut aider à analyser l’efficacité d’une acquisition passée ?',
                        'answers' => [
                            ['text' => 'L’évolution du ROIC, des flux de trésorerie et des synergies par rapport aux hypothèses initiales', 'iscorrect' => true],
                            ['text' => 'Uniquement la variation du cours le lendemain', 'iscorrect' => false],
                            ['text' => 'Uniquement la taille de la cible', 'iscorrect' => false],
                            ['text' => 'Uniquement le nombre d’employés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise finance des projets à faible rendement uniquement pour augmenter son chiffre d’affaires. Quelle faiblesse cela révèle-t-il ?',
                        'answers' => [
                            ['text' => 'Une priorité excessive donnée à la croissance comptable au détriment du rendement du capital', 'iscorrect' => true],
                            ['text' => 'Une allocation optimale du capital', 'iscorrect' => false],
                            ['text' => 'Une amélioration certaine de la valeur intrinsèque', 'iscorrect' => false],
                            ['text' => 'Une réduction automatique du risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’un endettement utilisé pour financer systématiquement des rachats d’actions ?',
                        'answers' => [
                            ['text' => 'Une augmentation du levier financier et de la fragilité financière si les flux futurs diminuent', 'iscorrect' => true],
                            ['text' => 'Une disparition du risque financier', 'iscorrect' => false],
                            ['text' => 'Une garantie de hausse du BPA', 'iscorrect' => false],
                            ['text' => 'Une baisse certaine du WACC', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède plusieurs projets avec des rendements très différents. Quelle approche est la plus rationnelle ?',
                        'answers' => [
                            ['text' => Prioriser les projets selon leur rendement ajusté du risque, leur valeur créée et leurs contraintes de capital, 'iscorrect' => true],
                            ['text' => 'Financer automatiquement tous les projets', 'iscorrect' => false],
                            ['text' => 'Choisir uniquement le projet au chiffre d’affaires le plus élevé', 'iscorrect' => false],
                            ['text' => 'Choisir uniquement le projet le plus risqué', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse quantitative et scénarios',
                'questions' => [
                    [
                        'question' => 'Quel est l’intérêt principal d’une simulation Monte Carlo appliquée à une valorisation ?',
                        'answers' => [
                            ['text' => 'Explorer une distribution de valeurs possibles plutôt qu’un seul résultat déterministe', 'iscorrect' => true],
                            ['text' => 'Garantir la valeur intrinsèque exacte', 'iscorrect' => false],
                            ['text' => 'Supprimer les hypothèses', 'iscorrect' => false],
                            ['text' => 'Remplacer toute analyse fondamentale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépendances entre variables doivent-elles être prises en compte dans une simulation ?',
                        'answers' => [
                            ['text' => 'Parce que supposer l’indépendance de variables liées peut produire une distribution de résultats irréaliste', 'iscorrect' => true],
                            ['text' => 'Parce que toutes les variables sont toujours indépendantes', 'iscorrect' => false],
                            ['text' => 'Parce que les corrélations n’ont aucun effet', 'iscorrect' => false],
                            ['text' => 'Parce que les scénarios sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’un modèle quantitatif excessivement complexe ?',
                        'answers' => [
                            ['text' => 'Le surajustement, la faible interprétabilité et une dépendance excessive à des hypothèses difficiles à vérifier', 'iscorrect' => true],
                            ['text' => 'Une précision automatiquement supérieure', 'iscorrect' => false],
                            ['text' => 'Une disparition du risque de modèle', 'iscorrect' => false],
                            ['text' => 'Une indépendance totale vis-à-vis des données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le biais de survivant dans l’analyse financière ?',
                        'answers' => [
                            ['text' => 'Le fait d’analyser uniquement les actifs ou entreprises ayant survécu, en ignorant ceux qui ont disparu', 'iscorrect' => true],
                            ['text' => 'Le fait de surestimer les pertes des entreprises actuelles', 'iscorrect' => false],
                            ['text' => 'Le fait de supprimer les entreprises rentables', 'iscorrect' => false],
                            ['text' => 'Le fait de mesurer uniquement la volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le backtesting d’une stratégie d’investissement doit-il être interprété avec prudence ?',
                        'answers' => [
                            ['text' => 'Les résultats historiques peuvent être affectés par le surajustement, les biais de données et les changements de régime', 'iscorrect' => true],
                            ['text' => 'Parce que les données historiques sont toujours inutiles', 'iscorrect' => false],
                            ['text' => 'Parce que toute stratégie rentable historiquement échoue nécessairement', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés ne disposent pas de données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un stress test ?',
                        'answers' => [
                            ['text' => 'Évaluer la résilience d’un portefeuille ou d’une entreprise sous des conditions fortement défavorables', 'iscorrect' => true],
                            ['text' => 'Prévoir exactement la prochaine crise', 'iscorrect' => false],
                            ['text' => 'Garantir l’absence de pertes', 'iscorrect' => false],
                            ['text' => 'Remplacer les scénarios centraux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une matrice de scénarios peut-elle être supérieure à une prévision unique ?',
                        'answers' => [
                            ['text' => 'Elle permet d’examiner plusieurs combinaisons de variables et leurs conséquences sur la valeur', 'iscorrect' => true],
                            ['text' => 'Elle élimine toutes les incertitudes', 'iscorrect' => false],
                            ['text' => 'Elle garantit le scénario central', 'iscorrect' => false],
                            ['text' => 'Elle rend les probabilités inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsqu’un modèle utilise trop de paramètres par rapport au nombre d’observations disponibles ?',
                        'answers' => [
                            ['text' => 'Une estimation instable et un risque élevé de surajustement', 'iscorrect' => true],
                            ['text' => 'Une meilleure généralisation automatique', 'iscorrect' => false],
                            ['text' => 'Une absence de variance', 'iscorrect' => false],
                            ['text' => 'Une disparition du risque statistique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les distributions de rendement ne doivent-elles pas toujours être modélisées par une loi normale simple ?',
                        'answers' => [
                            ['text' => 'Les marchés peuvent présenter asymétrie, queues épaisses et événements extrêmes', 'iscorrect' => true],
                            ['text' => 'Parce que les rendements sont toujours uniformes', 'iscorrect' => false],
                            ['text' => 'Parce que les prix ne varient jamais', 'iscorrect' => false],
                            ['text' => 'Parce que la volatilité est toujours nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une analyse de sensibilité dans un modèle financier ?',
                        'answers' => [
                            ['text' => 'Identifier les variables auxquelles le résultat est le plus sensible', 'iscorrect' => true],
                            ['text' => 'Garantir la prévision', 'iscorrect' => false],
                            ['text' => 'Supprimer les variables incertaines', 'iscorrect' => false],
                            ['text' => 'Remplacer les données historiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gestion professionnelle des risques',
                'questions' => [
                    [
                        'question' => 'Pourquoi le VaR ne doit-il pas être considéré comme une mesure complète du risque ?',
                        'answers' => [
                            ['text' => 'Il ne décrit pas nécessairement l’ampleur des pertes au-delà du seuil et dépend fortement du modèle', 'iscorrect' => true],
                            ['text' => 'Il mesure tous les risques avec certitude', 'iscorrect' => false],
                            ['text' => 'Il ne dépend jamais des hypothèses', 'iscorrect' => false],
                            ['text' => 'Il élimine les événements extrêmes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage présente l’Expected Shortfall par rapport à la VaR ?',
                        'answers' => [
                            ['text' => 'Il mesure la perte moyenne conditionnelle dans la partie défavorable au-delà du seuil considéré', 'iscorrect' => true],
                            ['text' => 'Il ignore les pertes extrêmes', 'iscorrect' => false],
                            ['text' => 'Il mesure uniquement le rendement', 'iscorrect' => false],
                            ['text' => 'Il ne dépend d’aucune distribution', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de liquidité peut-il amplifier une perte de marché ?',
                        'answers' => [
                            ['text' => 'Une faible liquidité peut obliger à vendre à des prix défavorables et augmenter les coûts d’exécution', 'iscorrect' => true],
                            ['text' => 'La liquidité garantit toujours un meilleur prix', 'iscorrect' => false],
                            ['text' => 'La liquidité n’a aucun rapport avec les prix', 'iscorrect' => false],
                            ['text' => 'Un actif illiquide est nécessairement sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque principal d’un portefeuille fortement exposé à un seul facteur macroéconomique ?',
                        'answers' => [
                            ['text' => 'Une variation défavorable de ce facteur peut affecter simultanément une grande partie du portefeuille', 'iscorrect' => true],
                            ['text' => 'Le rendement devient automatiquement garanti', 'iscorrect' => false],
                            ['text' => 'La diversification augmente automatiquement', 'iscorrect' => false],
                            ['text' => 'La volatilité disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stress tests doivent-ils inclure des scénarios non linéaires ?',
                        'answers' => [
                            ['text' => 'Certaines positions, options et relations de marché peuvent produire des pertes disproportionnées lors de chocs importants', 'iscorrect' => true],
                            ['text' => 'Tous les portefeuilles ont une relation parfaitement linéaire', 'iscorrect' => false],
                            ['text' => 'Les options n’ont jamais de convexité', 'iscorrect' => false],
                            ['text' => 'Les crises sont toujours proportionnelles aux mouvements normaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît lorsqu’un portefeuille utilise fortement l’effet de levier ?',
                        'answers' => [
                            ['text' => 'Les pertes peuvent être amplifiées et provoquer des besoins de liquidité ou des ventes forcées', 'iscorrect' => true],
                            ['text' => 'La volatilité disparaît', 'iscorrect' => false],
                            ['text' => 'Le rendement devient certain', 'iscorrect' => false],
                            ['text' => 'Le risque de contrepartie devient nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de contrepartie est-il important dans certains instruments dérivés ?',
                        'answers' => [
                            ['text' => 'La valeur du contrat dépend notamment de la capacité de la contrepartie à honorer ses obligations', 'iscorrect' => true],
                            ['text' => 'Les dérivés sont toujours garantis par l’État', 'iscorrect' => false],
                            ['text' => 'La contrepartie ne peut jamais faire défaut', 'iscorrect' => false],
                            ['text' => 'Le risque de marché disparaît avec un dérivé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une couverture imparfaite ?',
                        'answers' => [
                            ['text' => 'Réduire une exposition défavorable même lorsque le risque ne peut pas être éliminé complètement', 'iscorrect' => true],
                            ['text' => 'Garantir une couverture parfaite', 'iscorrect' => false],
                            ['text' => 'Créer automatiquement un rendement supplémentaire', 'iscorrect' => false],
                            ['text' => 'Supprimer tous les coûts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de modèle doit-il être intégré dans la gouvernance d’investissement ?',
                        'answers' => [
                            ['text' => 'Les décisions peuvent dépendre d’hypothèses, données ou modèles qui peuvent être mal spécifiés', 'iscorrect' => true],
                            ['text' => 'Les modèles sont toujours exacts', 'iscorrect' => false],
                            ['text' => 'Les données ne contiennent jamais d’erreurs', 'iscorrect' => false],
                            ['text' => 'La gouvernance concerne uniquement les banques centrales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une stratégie possède un rendement moyen élevé mais des pertes extrêmes rares. Quelle analyse complémentaire est particulièrement pertinente ?',
                        'answers' => [
                            ['text' => 'L’exposition aux queues de distribution et aux scénarios de pertes extrêmes', 'iscorrect' => true],
                            ['text' => 'Uniquement la moyenne historique', 'iscorrect' => false],
                            ['text' => 'Uniquement le nombre de transactions', 'iscorrect' => false],
                            ['text' => 'Uniquement le rendement du dernier mois', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Stratégies d’investissement et facteurs avancés',
                'questions' => [
                    [
                        'question' => 'Quel est l’un des principaux défis d’une stratégie value professionnelle ?',
                        'answers' => [
                            ['text' => 'Distinguer les entreprises réellement sous-évaluées des entreprises dont les faibles multiples reflètent une détérioration structurelle', 'iscorrect' => true],
                            ['text' => 'Acheter automatiquement toutes les actions à faible P/E', 'iscorrect' => false],
                            ['text' => 'Ignorer la qualité des bénéfices', 'iscorrect' => false],
                            ['text' => 'Éliminer l’analyse fondamentale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le momentum peut-il présenter un risque de retournement brutal ?',
                        'answers' => [
                            ['text' => 'Une modification rapide des flux, du sentiment ou des facteurs peut provoquer des débouclages simultanés', 'iscorrect' => true],
                            ['text' => 'Le momentum garantit une tendance permanente', 'iscorrect' => false],
                            ['text' => 'Les investisseurs ne peuvent jamais vendre', 'iscorrect' => false],
                            ['text' => 'Le momentum élimine la volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une stratégie quality, quel ensemble de caractéristiques est généralement recherché ?',
                        'answers' => [
                            ['text' => 'Rentabilité élevée, bilan solide, génération de cash et capacité durable à réinvestir', 'iscorrect' => true],
                            ['text' => 'Dette maximale et marges faibles', 'iscorrect' => false],
                            ['text' => 'Volatilité maximale uniquement', 'iscorrect' => false],
                            ['text' => 'Faible chiffre d’affaires uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie factorielle peut-elle subir une longue période de sous-performance ?',
                        'answers' => [
                            ['text' => 'Les primes factorielles ne sont pas nécessairement réalisées régulièrement et peuvent dépendre du régime de marché', 'iscorrect' => true],
                            ['text' => 'Les facteurs garantissent une performance mensuelle', 'iscorrect' => false],
                            ['text' => 'Les facteurs sont toujours parfaitement rémunérés', 'iscorrect' => false],
                            ['text' => 'La diversification empêche toute sous-performance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît lorsqu’un investisseur combine plusieurs stratégies partageant les mêmes expositions factorielles ?',
                        'answers' => [
                            ['text' => 'Une concentration cachée du risque malgré une apparente diversification entre stratégies', 'iscorrect' => true],
                            ['text' => 'Une diversification parfaite', 'iscorrect' => false],
                            ['text' => 'Une disparition des facteurs', 'iscorrect' => false],
                            ['text' => 'Une garantie de rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts de transaction sont-ils essentiels dans l’évaluation d’une stratégie quantitative ?',
                        'answers' => [
                            ['text' => 'Une stratégie rentable avant coûts peut devenir non rentable après prise en compte du turnover et de l’impact de marché', 'iscorrect' => true],
                            ['text' => 'Les coûts n’affectent jamais les rendements', 'iscorrect' => false],
                            ['text' => 'Le turnover réduit toujours les coûts', 'iscorrect' => false],
                            ['text' => 'Les coûts sont uniquement comptables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la capacité d’une stratégie est-elle une contrainte importante ?',
                        'answers' => [
                            ['text' => 'Une stratégie peut perdre son efficacité lorsque les actifs sous gestion deviennent trop importants par rapport à la liquidité disponible', 'iscorrect' => true],
                            ['text' => 'Les stratégies deviennent toujours meilleures avec plus de capital', 'iscorrect' => false],
                            ['text' => 'La liquidité augmente automatiquement avec les encours', 'iscorrect' => false],
                            ['text' => 'La capacité n’a aucun rapport avec les coûts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une approche combinant plusieurs facteurs ?',
                        'answers' => [
                            ['text' => 'Réduire potentiellement la dépendance à une seule prime tout en conservant plusieurs sources de rendement', 'iscorrect' => true],
                            ['text' => 'Garantir une surperformance', 'iscorrect' => false],
                            ['text' => 'Éliminer tous les risques', 'iscorrect' => false],
                            ['text' => 'Supprimer les coûts de transaction', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de crowding est-il important dans une stratégie factorielle populaire ?',
                        'answers' => [
                            ['text' => 'Des positions similaires détenues par de nombreux investisseurs peuvent amplifier les ventes lors d’un débouclage', 'iscorrect' => true],
                            ['text' => 'Le crowding garantit une liquidité supérieure', 'iscorrect' => false],
                            ['text' => 'Il élimine les corrélations', 'iscorrect' => false],
                            ['text' => 'Il rend les stratégies sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est la plus robuste pour évaluer une stratégie d’investissement factorielle ?',
                        'answers' => [
                            ['text' => 'Analyser sa logique économique, sa robustesse statistique, ses coûts, ses drawdowns et son comportement selon les régimes', 'iscorrect' => true],
                            ['text' => 'Examiner uniquement son meilleur rendement annuel', 'iscorrect' => false],
                            ['text' => 'Utiliser uniquement une période favorable', 'iscorrect' => false],
                            ['text' => 'Ignorer les coûts et les drawdowns', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Décision d’investissement institutionnelle',
                'questions' => [
                    [
                        'question' => 'Dans un comité d’investissement institutionnel, quelle qualité est essentielle pour une recommandation ?',
                        'answers' => [
                            ['text' => 'Une chaîne de raisonnement traçable reliant hypothèses, valorisation, risques et décision', 'iscorrect' => true],
                            ['text' => 'Une prévision certaine du cours', 'iscorrect' => false],
                            ['text' => 'Une opinion sans données', 'iscorrect' => false],
                            ['text' => 'Un argument fondé uniquement sur le consensus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une recommandation professionnelle doit-elle présenter les principaux risques avant la décision finale ?',
                        'answers' => [
                            ['text' => 'Pour permettre d’évaluer le rendement attendu conjointement avec les scénarios défavorables', 'iscorrect' => true],
                            ['text' => 'Pour empêcher toute décision', 'iscorrect' => false],
                            ['text' => 'Pour garantir une performance positive', 'iscorrect' => false],
                            ['text' => 'Parce que les risques sont toujours plus importants que la valeur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action possède une valeur intrinsèque estimée élevée mais un catalyseur incertain et très éloigné. Quelle question est importante ?',
                        'answers' => [
                            ['text' => 'Le rendement attendu compense-t-il suffisamment le coût d’opportunité et le risque d’attendre la réalisation de la thèse ?', 'iscorrect' => true],
                            ['text' => 'Le cours doit-il monter immédiatement ?', 'iscorrect' => false],
                            ['text' => 'Le catalyseur est-il garanti ?', 'iscorrect' => false],
                            ['text' => 'La valeur intrinsèque suffit-elle toujours à elle seule ?', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût d’opportunité est-il central dans une décision d’investissement ?',
                        'answers' => [
                            ['text' => 'Le capital investi dans une opportunité ne peut simultanément être utilisé pour une autre opportunité présentant un meilleur rapport rendement-risque', 'iscorrect' => true],
                            ['text' => 'Le capital n’a jamais d’alternative', 'iscorrect' => false],
                            ['text' => 'Toutes les opportunités ont le même rendement', 'iscorrect' => false],
                            ['text' => 'Le coût d’opportunité concerne uniquement les obligations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une marge de sécurité ?',
                        'answers' => [
                            ['text' => 'Réduire l’impact des erreurs d’estimation et des événements défavorables imprévus', 'iscorrect' => true],
                            ['text' => 'Garantir un rendement positif', 'iscorrect' => false],
                            ['text' => 'Éliminer la volatilité', 'iscorrect' => false],
                            ['text' => 'Remplacer toute analyse de risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une thèse d’investissement dépend de cinq hypothèses très optimistes. Quelle approche est la plus prudente ?',
                        'answers' => [
                            ['text' => 'Tester la thèse avec des hypothèses moins favorables et déterminer quelles hypothèses sont réellement indispensables', 'iscorrect' => true],
                            ['text' => 'Conserver toutes les hypothèses optimistes', 'iscorrect' => false],
                            ['text' => 'Ignorer les scénarios négatifs', 'iscorrect' => false],
                            ['text' => 'Utiliser uniquement le prix cible le plus élevé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une décision d’investissement doit-elle être réévaluée après l’achat ?',
                        'answers' => [
                            ['text' => 'Parce que les fondamentaux, les hypothèses, la valorisation et les risques peuvent évoluer', 'iscorrect' => true],
                            ['text' => 'Parce que tout investissement doit être vendu rapidement', 'iscorrect' => false],
                            ['text' => 'Parce que le cours quotidien suffit à invalider toute thèse', 'iscorrect' => false],
                            ['text' => 'Parce que les hypothèses ne doivent jamais rester stables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement peut constituer un biais comportemental dans la gestion d’un portefeuille ?',
                        'answers' => [
                            ['text' => 'Conserver une position uniquement pour éviter de reconnaître une erreur passée', 'iscorrect' => true],
                            ['text' => 'Réévaluer régulièrement les hypothèses', 'iscorrect' => false],
                            ['text' => 'Comparer plusieurs scénarios', 'iscorrect' => false],
                            ['text' => 'Réduire une position lorsque la thèse est invalidée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les décisions d’investissement ?',
                        'answers' => [
                            ['text' => 'Pour permettre une analyse ultérieure de la qualité du processus indépendamment du seul résultat', 'iscorrect' => true],
                            ['text' => 'Pour garantir que chaque investissement sera rentable', 'iscorrect' => false],
                            ['text' => 'Pour éviter toute modification de stratégie', 'iscorrect' => false],
                            ['text' => 'Pour supprimer les erreurs futures', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle distinction est essentielle dans l’évaluation d’un gestionnaire ?',
                        'answers' => [
                            ['text' => 'Distinguer la qualité du processus de décision de la simple performance réalisée sur une courte période', 'iscorrect' => true],
                            ['text' => 'Considérer toute sous-performance comme une preuve d’incompétence', 'iscorrect' => false],
                            ['text' => 'Évaluer uniquement le meilleur investissement', 'iscorrect' => false],
                            ['text' => 'Ignorer les conditions de marché', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Professional',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                // Mélange des réponses afin que la bonne réponse
                // ne soit pas systématiquement en première position.
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
