```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FinancialRiskManagementIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'financial-risk-management')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Identification et cartographie des risques financiers',
                'questions' => [
                    [
                        'question' => 'Quelle est la première étape d’une démarche structurée de gestion des risques financiers ?',
                        'answers' => [
                            ['answer' => 'Identifier les sources d’exposition et les événements susceptibles d’affecter les résultats', 'iscorrect' => true],
                            ['answer' => 'Choisir immédiatement un produit dérivé', 'iscorrect' => false],
                            ['answer' => 'Fixer un rendement garanti', 'iscorrect' => false],
                            ['answer' => 'Supprimer toutes les opérations financières', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une cartographie des risques ?',
                        'answers' => [
                            ['answer' => 'Visualiser et hiérarchiser les principaux risques selon leur probabilité et leur impact', 'iscorrect' => true],
                            ['answer' => 'Garantir l’absence de pertes', 'iscorrect' => false],
                            ['answer' => 'Remplacer les états financiers', 'iscorrect' => false],
                            ['answer' => 'Calculer uniquement le bénéfice net', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’appelle-t-on une exposition financière ?',
                        'answers' => [
                            ['answer' => 'La sensibilité d’une position ou d’une entreprise à l’évolution d’un facteur de risque', 'iscorrect' => true],
                            ['answer' => 'Le chiffre d’affaires annuel', 'iscorrect' => false],
                            ['answer' => 'Le nombre de salariés exposés physiquement', 'iscorrect' => false],
                            ['answer' => 'La valeur du capital social uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi distinguer les risques inhérents des risques résiduels ?',
                        'answers' => [
                            ['answer' => 'Pour mesurer le niveau de risque avant et après l’application des dispositifs de maîtrise', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer la nécessité de contrôles', 'iscorrect' => false],
                            ['answer' => 'Pour calculer les dividendes', 'iscorrect' => false],
                            ['answer' => 'Pour garantir un résultat positif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un risque de concentration apparaît lorsqu’une entreprise :',
                        'answers' => [
                            ['answer' => 'Dépend fortement d’une seule contrepartie, source de financement, devise ou catégorie d’actifs', 'iscorrect' => true],
                            ['answer' => 'Diversifie ses expositions', 'iscorrect' => false],
                            ['answer' => 'Réduit son endettement', 'iscorrect' => false],
                            ['answer' => 'Dispose de plusieurs fournisseurs indépendants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les corrélations entre facteurs de risque sont-elles importantes ?',
                        'answers' => [
                            ['answer' => 'Parce que plusieurs expositions peuvent évoluer simultanément et amplifier les pertes', 'iscorrect' => true],
                            ['answer' => 'Parce qu’elles garantissent toujours la diversification', 'iscorrect' => false],
                            ['answer' => 'Parce qu’elles déterminent uniquement les charges fiscales', 'iscorrect' => false],
                            ['answer' => 'Parce qu’elles empêchent toute variation des marchés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel document peut formaliser les principaux risques, leurs responsables et leurs mesures de maîtrise ?',
                        'answers' => [
                            ['answer' => 'Une cartographie ou un registre des risques', 'iscorrect' => true],
                            ['answer' => 'Une facture client', 'iscorrect' => false],
                            ['answer' => 'Un relevé bancaire isolé', 'iscorrect' => false],
                            ['answer' => 'Un catalogue commercial', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les risques doivent-ils être réévalués périodiquement ?',
                        'answers' => [
                            ['answer' => 'Les expositions, les marchés, les contreparties et les dispositifs de contrôle évoluent', 'iscorrect' => true],
                            ['answer' => 'Les risques disparaissent avec le temps', 'iscorrect' => false],
                            ['answer' => 'Les hypothèses initiales restent toujours exactes', 'iscorrect' => false],
                            ['answer' => 'La réglementation ne change jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur permet généralement de prioriser un risque ?',
                        'answers' => [
                            ['answer' => 'La combinaison de sa probabilité, de son impact et de la qualité des contrôles existants', 'iscorrect' => true],
                            ['answer' => 'Son nom uniquement', 'iscorrect' => false],
                            ['answer' => 'La taille du service financier', 'iscorrect' => false],
                            ['answer' => 'La date de création de l’entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un indicateur clé de risque, ou KRI ?',
                        'answers' => [
                            ['answer' => 'Alerter sur une évolution susceptible d’augmenter le niveau de risque', 'iscorrect' => true],
                            ['answer' => 'Garantir une rentabilité minimale', 'iscorrect' => false],
                            ['answer' => 'Remplacer toutes les analyses', 'iscorrect' => false],
                            ['answer' => 'Mesurer uniquement les ventes', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gestion du risque de crédit',
                'questions' => [
                    [
                        'question' => 'Quelle dimension complète généralement l’analyse du risque de crédit ?',
                        'answers' => [
                            ['answer' => 'La probabilité de défaut, l’exposition au défaut et la perte en cas de défaut', 'iscorrect' => true],
                            ['answer' => 'Uniquement le chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Uniquement le nombre de salariés', 'iscorrect' => false],
                            ['answer' => 'Uniquement le taux de dividende', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente l’exposition au défaut ?',
                        'answers' => [
                            ['answer' => 'Le montant auquel le prêteur ou la contrepartie est exposé au moment du défaut', 'iscorrect' => true],
                            ['answer' => 'Le bénéfice annuel du prêteur', 'iscorrect' => false],
                            ['answer' => 'La valeur totale des immobilisations', 'iscorrect' => false],
                            ['answer' => 'Le montant des ventes futures', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la perte en cas de défaut ?',
                        'answers' => [
                            ['answer' => 'La perte économique estimée après prise en compte notamment des recouvrements et garanties', 'iscorrect' => true],
                            ['answer' => 'Le montant total du chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'La probabilité de paiement', 'iscorrect' => false],
                            ['answer' => 'Le montant des intérêts futurs uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les garanties peuvent-elles réduire la perte potentielle ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent fournir une source de récupération en cas de défaut', 'iscorrect' => true],
                            ['answer' => 'Elles empêchent toujours le défaut', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent toujours 100 % du capital', 'iscorrect' => false],
                            ['answer' => 'Elles augmentent automatiquement la solvabilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de concentration de crédit est-il dangereux ?',
                        'answers' => [
                            ['answer' => 'Le défaut d’une contrepartie importante peut provoquer une perte disproportionnée', 'iscorrect' => true],
                            ['answer' => 'Il garantit une meilleure diversification', 'iscorrect' => false],
                            ['answer' => 'Il supprime le risque de défaut', 'iscorrect' => false],
                            ['answer' => 'Il réduit toujours les pertes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut signaler une détérioration de la qualité de crédit d’un emprunteur ?',
                        'answers' => [
                            ['answer' => 'Une dégradation durable de sa capacité à générer des flux de trésorerie et à honorer ses dettes', 'iscorrect' => true],
                            ['answer' => 'Une augmentation de ses liquidités', 'iscorrect' => false],
                            ['answer' => 'Une baisse de son endettement', 'iscorrect' => false],
                            ['answer' => 'Une amélioration de ses ratios financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les limites de crédit sont-elles utilisées ?',
                        'answers' => [
                            ['answer' => 'Pour encadrer le montant d’exposition acceptable envers une contrepartie', 'iscorrect' => true],
                            ['answer' => 'Pour garantir que la contrepartie paiera', 'iscorrect' => false],
                            ['answer' => 'Pour augmenter automatiquement le portefeuille', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer l’analyse de solvabilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt du suivi des créances échues ?',
                        'answers' => [
                            ['answer' => 'Détecter rapidement les retards de paiement et les signes potentiels de détérioration du crédit', 'iscorrect' => true],
                            ['answer' => 'Garantir une hausse du chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Éliminer les créances', 'iscorrect' => false],
                            ['answer' => 'Remplacer le budget de trésorerie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe peut réduire le risque lié aux contreparties ?',
                        'answers' => [
                            ['answer' => Diversifier les contreparties et adapter les limites à leur profil de risque', 'iscorrect' => true],
                            ['answer' => Accorder toute l’exposition à une seule entreprise', 'iscorrect' => false],
                            ['answer' => Ignorer les notations de crédit', 'iscorrect' => false],
                            ['answer' => Supprimer les garanties', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une notation de crédit ne doit-elle pas être utilisée comme unique source d’analyse ?',
                        'answers' => [
                            ['answer' => 'Une notation repose sur des hypothèses et informations qui peuvent évoluer ou être incomplètes', 'iscorrect' => true],
                            ['answer' => 'Les notations sont toujours fausses', 'iscorrect' => false],
                            ['answer' => 'Les notations garantissent les remboursements', 'iscorrect' => false],
                            ['answer' => 'Les notations mesurent uniquement la liquidité', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque de marché et sensibilité',
                'questions' => [
                    [
                        'question' => 'Quel est le principe de l’analyse de sensibilité ?',
                        'answers' => [
                            ['answer' => 'Mesurer comment une variation d’un facteur de risque influence la valeur ou le résultat', 'iscorrect' => true],
                            ['answer' => 'Garantir une valeur constante', 'iscorrect' => false],
                            ['answer' => 'Éliminer les fluctuations', 'iscorrect' => false],
                            ['answer' => 'Calculer uniquement le bénéfice comptable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation à taux fixe peut-elle perdre de la valeur lorsque les taux du marché augmentent ?',
                        'answers' => [
                            ['answer' => 'Oui, car les flux fixes existants deviennent relativement moins attractifs', 'iscorrect' => true],
                            ['answer' => 'Non, son prix ne peut jamais varier', 'iscorrect' => false],
                            ['answer' => 'Oui, mais uniquement si elle n’a aucun coupon', 'iscorrect' => false],
                            ['answer' => 'Non, car les taux n’influencent pas les obligations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de change transactionnel ?',
                        'answers' => [
                            ['answer' => 'Le risque qu’une variation de change modifie la valeur en monnaie domestique d’un flux futur en devise', 'iscorrect' => true],
                            ['answer' => 'Le risque d’une variation du nombre de clients', 'iscorrect' => false],
                            ['answer' => 'Le risque lié uniquement aux stocks', 'iscorrect' => false],
                            ['answer' => 'Le risque de changement de taux d’imposition', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise exportatrice peut-elle être exposée au risque de change ?',
                        'answers' => [
                            ['answer' => 'La valeur en monnaie domestique de ses recettes en devises peut varier', 'iscorrect' => true],
                            ['answer' => 'Ses ventes deviennent automatiquement nulles', 'iscorrect' => false],
                            ['answer' => 'Elle ne peut jamais recevoir de devises', 'iscorrect' => false],
                            ['answer' => 'Les taux de change n’affectent jamais les exportateurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de base dans une couverture ?',
                        'answers' => [
                            ['answer' => 'Le risque que l’instrument de couverture et l’exposition sous-jacente n’évoluent pas exactement de la même manière', 'iscorrect' => true],
                            ['answer' => 'Le risque que tous les marchés ferment', 'iscorrect' => false],
                            ['answer' => 'Une garantie de perte nulle', 'iscorrect' => false],
                            ['answer' => 'Le risque uniquement lié à la comptabilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse de la volatilité peut-elle augmenter le risque d’un portefeuille ?',
                        'answers' => [
                            ['answer' => 'Elle peut accroître l’amplitude des variations possibles de la valeur du portefeuille', 'iscorrect' => true],
                            ['answer' => 'Elle garantit une hausse des prix', 'iscorrect' => false],
                            ['answer' => 'Elle réduit toujours les pertes', 'iscorrect' => false],
                            ['answer' => 'Elle supprime le risque spécifique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une limite de position ?',
                        'answers' => [
                            ['answer' => 'Empêcher qu’une exposition à un facteur de marché dépasse un niveau autorisé', 'iscorrect' => true],
                            ['answer' => 'Garantir un rendement positif', 'iscorrect' => false],
                            ['answer' => 'Augmenter systématiquement la prise de risque', 'iscorrect' => false],
                            ['answer' => 'Supprimer toutes les positions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît lorsqu’un portefeuille est fortement dépendant des mouvements généraux des marchés ?',
                        'answers' => [
                            ['answer' => 'Le risque systématique ou risque de marché général', 'iscorrect' => true],
                            ['answer' => 'Uniquement le risque opérationnel', 'iscorrect' => false],
                            ['answer' => 'Uniquement le risque juridique', 'iscorrect' => false],
                            ['answer' => 'Uniquement le risque fournisseur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel outil permet d’évaluer les conséquences d’une hausse importante des taux ?',
                        'answers' => [
                            ['answer' => 'Une analyse de scénario ou un stress test', 'iscorrect' => true],
                            ['answer' => 'Une facture fournisseur', 'iscorrect' => false],
                            ['answer' => 'Une liste de clients', 'iscorrect' => false],
                            ['answer' => 'Un inventaire physique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scénarios de marché doivent-ils parfois combiner plusieurs facteurs ?',
                        'answers' => [
                            ['answer' => 'Parce qu’une crise peut provoquer simultanément des mouvements de taux, de change, d’actions et de liquidité', 'iscorrect' => true],
                            ['answer' => 'Parce que les facteurs financiers évoluent toujours indépendamment', 'iscorrect' => false],
                            ['answer' => 'Pour garantir un scénario favorable', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer l’incertitude', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque de liquidité et financement',
                'questions' => [
                    [
                        'question' => 'Quelle différence essentielle existe entre liquidité et solvabilité ?',
                        'answers' => [
                            ['answer' => 'La liquidité concerne la capacité à honorer les obligations à court terme, tandis que la solvabilité concerne la capacité financière plus globale à faire face aux dettes', 'iscorrect' => true],
                            ['answer' => 'Les deux notions sont toujours strictement identiques', 'iscorrect' => false],
                            ['answer' => 'La solvabilité concerne uniquement les ventes', 'iscorrect' => false],
                            ['answer' => 'La liquidité concerne uniquement les bénéfices', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un risque de refinancement ?',
                        'answers' => [
                            ['answer' => 'Le risque de ne pas pouvoir renouveler une source de financement arrivant à échéance à des conditions acceptables', 'iscorrect' => true],
                            ['answer' => 'Le risque de vendre trop rapidement des actifs', 'iscorrect' => false],
                            ['answer' => Le risque de baisse du chiffre d’affaires uniquement', 'iscorrect' => false],
                            ['answer' => 'Le risque de hausse des dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte dépendance au financement à court terme peut-elle être risquée ?',
                        'answers' => [
                            ['answer' => 'Elle expose l’entreprise à des besoins fréquents de refinancement et à un éventuel durcissement des conditions de crédit', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours les taux les plus bas', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les échéances', 'iscorrect' => false],
                            ['answer' => 'Elle augmente automatiquement la solvabilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un échéancier de trésorerie ?',
                        'answers' => [
                            ['answer' => 'Anticiper les entrées et sorties de liquidités et identifier les périodes de tension', 'iscorrect' => true],
                            ['answer' => 'Garantir les ventes futures', 'iscorrect' => false],
                            ['answer' => 'Calculer uniquement les amortissements', 'iscorrect' => false],
                            ['answer' => 'Éliminer les dettes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment une entreprise peut-elle réduire son besoin de liquidité à court terme ?',
                        'answers' => [
                            ['answer' => 'Améliorer le recouvrement des créances et mieux gérer ses stocks et échéances', 'iscorrect' => true],
                            ['answer' => 'Augmenter systématiquement les stocks', 'iscorrect' => false],
                            ['answer' => 'Retarder tous les encaissements', 'iscorrect' => false],
                            ['answer' => 'Multiplier les dettes sans plan de remboursement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de liquidité de marché ?',
                        'answers' => [
                            ['answer' => 'Le risque de ne pas pouvoir vendre ou acheter un actif rapidement sans provoquer une variation importante de son prix', 'iscorrect' => true],
                            ['answer' => 'Le risque de baisse des salaires', 'iscorrect' => false],
                            ['answer' => 'Le risque de défaut d’un emprunteur uniquement', 'iscorrect' => false],
                            ['answer' => 'Le risque de hausse du chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les actifs très peu liquides peuvent-ils être problématiques en période de crise ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent être difficiles à vendre rapidement ou nécessiter une décote importante', 'iscorrect' => true],
                            ['answer' => 'Ils sont toujours plus rentables', 'iscorrect' => false],
                            ['answer' => 'Ils ne peuvent jamais perdre de valeur', 'iscorrect' => false],
                            ['answer' => 'Ils garantissent une trésorerie immédiate', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réserve de liquidité doit-elle être dimensionnée avec prudence ?',
                        'answers' => [
                            ['answer' => 'Une réserve insuffisante peut exposer à une crise, tandis qu’une réserve excessive peut avoir un coût d’opportunité', 'iscorrect' => true],
                            ['answer' => 'Une réserve doit toujours représenter 100 % des actifs', 'iscorrect' => false],
                            ['answer' => Une réserve élevée garantit toujours un rendement supérieur', 'iscorrect' => false],
                            ['answer' => 'La liquidité n’a aucun coût', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel événement peut provoquer une tension de liquidité ?',
                        'answers' => [
                            ['answer' => 'Une baisse inattendue des encaissements combinée à des échéances importantes de paiement', 'iscorrect' => true],
                            ['answer' => 'Une amélioration du recouvrement', 'iscorrect' => false],
                            ['answer' => 'Une réduction des dépenses', 'iscorrect' => false],
                            ['answer' => 'Une augmentation des liquidités disponibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi diversifier les sources de financement peut-il être utile ?',
                        'answers' => [
                            ['answer' => 'Cela réduit la dépendance à une seule source et peut améliorer la flexibilité financière', 'iscorrect' => true],
                            ['answer' => 'Cela garantit toujours des coûts plus faibles', 'iscorrect' => false],
                            ['answer' => 'Cela supprime toutes les dettes', 'iscorrect' => false],
                            ['answer' => 'Cela élimine le risque de refinancement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque de taux d’intérêt',
                'questions' => [
                    [
                        'question' => 'Quel type de dette est directement sensible à une hausse des taux variables ?',
                        'answers' => [
                            ['answer' => 'Une dette dont le taux d’intérêt est révisé périodiquement selon une référence de marché', 'iscorrect' => true],
                            ['answer' => 'Une dette sans aucun intérêt', 'iscorrect' => false],
                            ['answer' => 'Une facture déjà payée', 'iscorrect' => false],
                            ['answer' => 'Une immobilisation entièrement amortie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’effet général d’une hausse des taux sur la valeur d’une obligation à taux fixe ?',
                        'answers' => [
                            ['answer' => 'Sa valeur de marché tend à diminuer, toutes choses égales par ailleurs', 'iscorrect' => true],
                            ['answer' => 'Sa valeur double automatiquement', 'iscorrect' => false],
                            ['answer' => 'Sa valeur devient toujours nulle', 'iscorrect' => false],
                            ['answer' => 'Elle ne change jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la duration d’une obligation aide notamment à mesurer ?',
                        'answers' => [
                            ['answer' => 'La sensibilité approximative du prix de l’obligation aux variations des taux d’intérêt', 'iscorrect' => true],
                            ['answer' => 'La probabilité de défaut d’un client', 'iscorrect' => false],
                            ['answer' => 'Le chiffre d’affaires de l’émetteur', 'iscorrect' => false],
                            ['answer' => 'La liquidité bancaire uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise ayant des actifs à taux fixe et des dettes à taux variable peut-elle être exposée à une hausse des taux ?',
                        'answers' => [
                            ['answer' => 'Oui, car le coût de sa dette peut augmenter alors que les revenus de ses actifs restent relativement fixes', 'iscorrect' => true],
                            ['answer' => 'Non, les actifs compensent toujours parfaitement la dette', 'iscorrect' => false],
                            ['answer' => 'Non, les taux ne concernent que les banques', 'iscorrect' => false],
                            ['answer' => 'Oui uniquement si elle n’a aucun actif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel instrument peut transformer une exposition à taux variable en exposition plus fixe ?',
                        'answers' => [
                            ['answer' => 'Un swap de taux d’intérêt adapté à l’exposition', 'iscorrect' => true],
                            ['answer' => 'Une facture fournisseur', 'iscorrect' => false],
                            ['answer' => 'Une action ordinaire', 'iscorrect' => false],
                            ['answer' => 'Un inventaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît si les échéances de révision des taux des actifs et des passifs sont différentes ?',
                        'answers' => [
                            ['answer' => 'Un risque de décalage ou de repricing pouvant modifier la marge financière', 'iscorrect' => true],
                            ['answer' => 'Un risque de fraude automatique', 'iscorrect' => false],
                            ['answer' => 'Un risque de disparition des actifs', 'iscorrect' => false],
                            ['answer' => 'Un risque de hausse automatique du capital', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse des taux peut-elle aussi créer un risque ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire certains revenus d’intérêts ou modifier la valeur des positions et les comportements de financement', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours des profits', 'iscorrect' => false],
                            ['answer' => 'Elle augmente nécessairement tous les coûts', 'iscorrect' => false],
                            ['answer' => 'Elle n’a jamais d’effet sur les entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert une analyse de gap de taux ?',
                        'answers' => [
                            ['answer' => 'À comparer les volumes d’actifs et de passifs sensibles aux variations de taux sur différentes échéances', 'iscorrect' => true],
                            ['answer' => 'À mesurer uniquement le risque de change', 'iscorrect' => false],
                            ['answer' => 'À calculer les impôts', 'iscorrect' => false],
                            ['answer' => 'À mesurer les ventes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les prévisions de taux sont-elles incertaines ?',
                        'answers' => [
                            ['answer' => 'Elles dépendent de facteurs économiques, monétaires et financiers difficiles à prévoir avec certitude', 'iscorrect' => true],
                            ['answer' => 'Les banques centrales annoncent toujours parfaitement les taux futurs', 'iscorrect' => false],
                            ['answer' => 'Les taux sont déterminés uniquement par les entreprises', 'iscorrect' => false],
                            ['answer' => 'Les taux ne changent jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider une couverture de taux ?',
                        'answers' => [
                            ['answer' => 'La couverture doit correspondre à la nature, au montant et à l’horizon de l’exposition', 'iscorrect' => true],
                            ['answer' => 'Il faut toujours couvrir 100 % des actifs', 'iscorrect' => false],
                            ['answer' => 'Il faut choisir l’instrument le plus complexe', 'iscorrect' => false],
                            ['answer' => 'Il faut ignorer les coûts de couverture', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque de change et couverture',
                'questions' => [
                    [
                        'question' => 'Quelle entreprise est naturellement exposée au risque de change ?',
                        'answers' => [
                            ['answer' => 'Une entreprise ayant des flux futurs importants libellés dans une devise différente de sa monnaie fonctionnelle', 'iscorrect' => true],
                            ['answer' => 'Une entreprise sans aucune opération financière', 'iscorrect' => false],
                            ['answer' => 'Une entreprise qui utilise uniquement sa monnaie domestique', 'iscorrect' => false],
                            ['answer' => 'Une entreprise sans créances ni dettes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une position de change nette ?',
                        'answers' => [
                            ['answer' => 'La différence entre les expositions en devises qui créent des flux entrants et sortants', 'iscorrect' => true],
                            ['answer' => 'Le chiffre d’affaires total', 'iscorrect' => false],
                            ['answer' => 'Le montant du capital social', 'iscorrect' => false],
                            ['answer' => 'La valeur des stocks', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise qui doit payer 1 million de dollars dans six mois est exposée à :',
                        'answers' => [
                            ['answer' => 'Une hausse du coût en monnaie domestique si le dollar s’apprécie', 'iscorrect' => true],
                            ['answer' => 'Une baisse certaine du coût', 'iscorrect' => false],
                            ['answer' => 'Aucun risque de change', 'iscorrect' => false],
                            ['answer' => 'Une hausse automatique du chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel instrument peut fixer un taux de change futur ?',
                        'answers' => [
                            ['answer' => 'Un contrat de change à terme', 'iscorrect' => true],
                            ['answer' => 'Une action ordinaire', 'iscorrect' => false],
                            ['answer' => 'Une facture passée', 'iscorrect' => false],
                            ['answer' => 'Un compte de résultat', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage distingue généralement une option de change d’un contrat à terme ?',
                        'answers' => [
                            ['answer' => 'L’option donne un droit sans imposer à son acheteur d’exécuter la transaction si elle devient défavorable', 'iscorrect' => true],
                            ['answer' => 'L’option est toujours gratuite', 'iscorrect' => false],
                            ['answer' => 'L’option garantit toujours un meilleur taux', 'iscorrect' => false],
                            ['answer' => 'L’option supprime tous les risques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le montant notionnel d’une couverture doit-il être surveillé ?',
                        'answers' => [
                            ['answer' => 'Une couverture excessive ou insuffisante peut créer une exposition supplémentaire ou laisser une partie du risque non couverte', 'iscorrect' => true],
                            ['answer' => 'Le notionnel n’a aucun rapport avec l’exposition', 'iscorrect' => false],
                            ['answer' => 'Plus le notionnel est élevé, plus le risque disparaît', 'iscorrect' => false],
                            ['answer' => 'Il doit toujours être égal au chiffre d’affaires annuel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une couverture naturelle du risque de change ?',
                        'answers' => [
                            ['answer' => 'Faire correspondre autant que possible les recettes et dépenses dans la même devise', 'iscorrect' => true],
                            ['answer' => 'Acheter uniquement des actions étrangères', 'iscorrect' => false],
                            ['answer' => 'Emprunter dans toutes les devises disponibles', 'iscorrect' => false],
                            ['answer' => 'Ignorer les flux en devises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise exportatrice peut-elle bénéficier d’une dépréciation de sa monnaie domestique ?',
                        'answers' => [
                            ['answer' => 'Ses recettes en devise étrangère peuvent représenter davantage de monnaie domestique, toutes choses égales par ailleurs', 'iscorrect' => true],
                            ['answer' => 'Ses recettes en devise disparaissent', 'iscorrect' => false],
                            ['answer' => 'Elle ne peut plus exporter', 'iscorrect' => false],
                            ['answer' => 'Cela garantit toujours une hausse du bénéfice', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’une couverture de change mal calibrée ?',
                        'answers' => [
                            ['answer' => 'Elle peut ne pas correspondre aux flux réels et générer une exposition résiduelle ou une position spéculative involontaire', 'iscorrect' => true],
                            ['answer' => 'Elle supprime toujours toute perte', 'iscorrect' => false],
                            ['answer' => 'Elle garantit le meilleur taux', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucun effet financier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il actualiser les prévisions de flux en devises ?',
                        'answers' => [
                            ['answer' => 'Les montants, dates et probabilités des flux peuvent changer au cours du temps', 'iscorrect' => true],
                            ['answer' => 'Les prévisions sont toujours certaines', 'iscorrect' => false],
                            ['answer' => 'Les devises ont toujours la même valeur', 'iscorrect' => false],
                            ['answer' => 'Les flux futurs ne peuvent jamais être modifiés', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque opérationnel et contrôle interne',
                'questions' => [
                    [
                        'question' => 'Quel élément distingue le risque opérationnel des risques de marché ?',
                        'answers' => [
                            ['answer' => 'Il provient notamment des processus, personnes, systèmes ou événements externes plutôt que directement des variations de marché', 'iscorrect' => true],
                            ['answer' => 'Il concerne uniquement les taux', 'iscorrect' => false],
                            ['answer' => 'Il ne peut jamais produire de pertes financières', 'iscorrect' => false],
                            ['answer' => 'Il concerne uniquement les investissements boursiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un contrôle préventif ?',
                        'answers' => [
                            ['answer' => 'Réduire la probabilité qu’une erreur ou une fraude se produise', 'iscorrect' => true],
                            ['answer' => 'Mesurer uniquement les pertes passées', 'iscorrect' => false],
                            ['answer' => 'Garantir l’absence de risque', 'iscorrect' => false],
                            ['answer' => 'Augmenter les dépenses', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un contrôle détectif ?',
                        'answers' => [
                            ['answer' => 'Identifier une erreur, une anomalie ou une fraude après ou pendant sa survenue', 'iscorrect' => true],
                            ['answer' => 'Empêcher toute activité', 'iscorrect' => false],
                            ['answer' => 'Garantir un bénéfice', 'iscorrect' => false],
                            ['answer' => 'Supprimer les procédures', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la séparation des tâches est-elle importante ?',
                        'answers' => [
                            ['answer' => 'Elle réduit le risque qu’une même personne puisse initier, exécuter et dissimuler une opération frauduleuse', 'iscorrect' => true],
                            ['answer' => 'Elle garantit zéro erreur', 'iscorrect' => false],
                            ['answer' => 'Elle augmente toujours les bénéfices', 'iscorrect' => false],
                            ['answer' => 'Elle supprime tous les contrôles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est associé à une défaillance informatique critique ?',
                        'answers' => [
                            ['answer' => 'Une interruption des opérations pouvant provoquer des pertes financières et des problèmes de service', 'iscorrect' => true],
                            ['answer' => 'Uniquement un risque de change', 'iscorrect' => false],
                            ['answer' => 'Une garantie de rendement', 'iscorrect' => false],
                            ['answer' => 'Une baisse automatique des taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester un plan de continuité ?',
                        'answers' => [
                            ['answer' => 'Pour vérifier qu’il peut réellement fonctionner et identifier ses faiblesses avant une crise', 'iscorrect' => true],
                            ['answer' => 'Pour garantir qu’aucune crise ne surviendra', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer les contrôles', 'iscorrect' => false],
                            ['answer' => 'Pour augmenter le risque opérationnel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel événement constitue un exemple de risque opérationnel externe ?',
                        'answers' => [
                            ['answer' => 'Une catastrophe naturelle qui perturbe les installations et les opérations', 'iscorrect' => true],
                            ['answer' => 'Une hausse prévue du chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Une réduction des créances', 'iscorrect' => false],
                            ['answer' => 'Une baisse du coût du financement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les incidents opérationnels doivent-ils être analysés ?',
                        'answers' => [
                            ['answer' => 'Pour identifier les causes et renforcer les contrôles afin de réduire le risque de répétition', 'iscorrect' => true],
                            ['answer' => 'Pour cacher les pertes', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer la documentation', 'iscorrect' => false],
                            ['answer' => 'Pour garantir des revenus futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un registre des incidents ?',
                        'answers' => [
                            ['answer' => 'Conserver les informations sur les événements, leurs impacts, leurs causes et les actions correctives', 'iscorrect' => true],
                            ['answer' => 'Garantir l’absence de nouveaux incidents', 'iscorrect' => false],
                            ['answer' => 'Remplacer les états financiers', 'iscorrect' => false],
                            ['answer' => 'Supprimer les audits', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque humain doit-il être pris en compte ?',
                        'answers' => [
                            ['answer' => 'Les erreurs, comportements inappropriés ou fraudes peuvent avoir des conséquences financières importantes', 'iscorrect' => true],
                            ['answer' => 'Les employés ne peuvent jamais provoquer de risque', 'iscorrect' => false],
                            ['answer' => 'Le risque humain concerne uniquement les ressources humaines', 'iscorrect' => false],
                            ['answer' => 'Il n’a aucun impact sur les finances', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Stress tests et scénarios de crise',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal d’un stress test financier ?',
                        'answers' => [
                            ['answer' => 'Évaluer la capacité d’une entreprise ou d’un portefeuille à résister à des conditions fortement défavorables', 'iscorrect' => true],
                            ['answer' => 'Prévoir exactement les marchés futurs', 'iscorrect' => false],
                            ['answer' => 'Garantir une rentabilité minimale', 'iscorrect' => false],
                            ['answer' => 'Supprimer les risques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence existe entre une analyse de sensibilité et un scénario de stress ?',
                        'answers' => [
                            ['answer' => 'La sensibilité examine généralement la variation d’un facteur, tandis qu’un scénario de stress peut combiner plusieurs chocs importants', 'iscorrect' => true],
                            ['answer' => 'Il n’existe aucune différence', 'iscorrect' => false],
                            ['answer' => 'La sensibilité concerne uniquement la comptabilité', 'iscorrect' => false],
                            ['answer' => 'Le stress test garantit toujours les pertes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel scénario peut être utilisé pour tester le risque de liquidité ?',
                        'answers' => [
                            ['answer' => 'Une baisse importante des encaissements accompagnée d’un accès plus difficile au financement', 'iscorrect' => true],
                            ['answer' => 'Une augmentation garantie des ventes', 'iscorrect' => false],
                            ['answer' => 'Une baisse des dettes sans autre changement', 'iscorrect' => false],
                            ['answer' => 'Une hausse certaine des liquidités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scénarios de crise doivent-ils être plausibles ?',
                        'answers' => [
                            ['answer' => 'Pour produire des résultats utiles à la préparation de l’organisation sans limiter l’analyse à des hypothèses irréalistes', 'iscorrect' => true],
                            ['answer' => 'Pour garantir qu’ils se réaliseront', 'iscorrect' => false],
                            ['answer' => 'Pour éliminer toutes les pertes', 'iscorrect' => false],
                            ['answer' => 'Pour rendre les résultats toujours favorables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tester plusieurs niveaux de choc ?',
                        'answers' => [
                            ['answer' => 'Pour comprendre comment la résistance financière évolue lorsque la gravité du scénario augmente', 'iscorrect' => true],
                            ['answer' => 'Pour garantir une seule réponse', 'iscorrect' => false],
                            ['answer' => 'Pour éviter toute analyse', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer l’incertitude', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut révéler un stress test ?',
                        'answers' => [
                            ['answer' => 'Des concentrations, des besoins de liquidité ou des pertes potentielles qui ne sont pas évidents dans des conditions normales', 'iscorrect' => true],
                            ['answer' => 'Le résultat financier exact de l’année prochaine', 'iscorrect' => false],
                            ['answer' => 'Une garantie de remboursement', 'iscorrect' => false],
                            ['answer' => 'La disparition de tous les risques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scénarios historiques ne suffisent-ils pas toujours ?',
                        'answers' => [
                            ['answer' => 'Une crise future peut présenter une combinaison ou une intensité de facteurs différente des crises passées', 'iscorrect' => true],
                            ['answer' => 'Les données historiques sont toujours inutiles', 'iscorrect' => false],
                            ['answer' => 'Les marchés ne changent jamais', 'iscorrect' => false],
                            ['answer' => 'Les crises historiques n’ont jamais existé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que doit faire une organisation après un stress test défavorable ?',
                        'answers' => [
                            ['answer' => 'Analyser les vulnérabilités et définir des mesures correctives ou des plans de contingence', 'iscorrect' => true],
                            ['answer' => 'Ignorer le résultat', 'iscorrect' => false],
                            ['answer' => 'Augmenter automatiquement toutes les expositions', 'iscorrect' => false],
                            ['answer' => 'Supprimer les indicateurs de risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi intégrer le risque de corrélation dans certains stress tests ?',
                        'answers' => [
                            ['answer' => 'Des facteurs habituellement peu liés peuvent devenir fortement corrélés pendant une crise', 'iscorrect' => true],
                            ['answer' => 'Les corrélations restent toujours constantes', 'iscorrect' => false],
                            ['answer' => 'La corrélation garantit les profits', 'iscorrect' => false],
                            ['answer' => 'Elle concerne uniquement les stocks', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une limite importante des stress tests ?',
                        'answers' => [
                            ['answer' => 'Ils dépendent des scénarios et hypothèses retenus et ne couvrent pas nécessairement tous les événements possibles', 'iscorrect' => true],
                            ['answer' => 'Ils prédisent parfaitement l’avenir', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent le besoin de gestion des risques', 'iscorrect' => false],
                            ['answer' => 'Ils garantissent toujours une perte maximale exacte', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gouvernance et politiques de gestion des risques',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle d’une politique de gestion des risques ?',
                        'answers' => [
                            ['answer' => 'Définir les principes, responsabilités, limites et méthodes utilisés pour gérer les risques', 'iscorrect' => true],
                            ['answer' => 'Garantir un bénéfice annuel', 'iscorrect' => false],
                            ['answer' => 'Supprimer tous les contrôles', 'iscorrect' => false],
                            ['answer' => 'Remplacer les états financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’appétit pour le risque ?',
                        'answers' => [
                            ['answer' => 'Le niveau global de risque qu’une organisation accepte de prendre pour atteindre ses objectifs', 'iscorrect' => true],
                            ['answer' => 'Le montant des bénéfices réalisés', 'iscorrect' => false],
                            ['answer' => 'La quantité de trésorerie disponible', 'iscorrect' => false],
                            ['answer' => 'Le montant total des ventes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence existe entre appétit pour le risque et limite de risque ?',
                        'answers' => [
                            ['answer' => 'L’appétit définit une orientation globale, tandis que les limites traduisent des seuils opérationnels précis', 'iscorrect' => true],
                            ['answer' => 'Les deux notions sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'La limite concerne uniquement le marketing', 'iscorrect' => false],
                            ['answer' => 'L’appétit désigne uniquement la trésorerie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la responsabilité des risques doit-elle être clairement définie ?',
                        'answers' => [
                            ['answer' => 'Pour savoir qui identifie, mesure, surveille et traite chaque exposition', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer les contrôles', 'iscorrect' => false],
                            ['answer' => 'Pour garantir que personne ne prendra de décision', 'iscorrect' => false],
                            ['answer' => 'Pour éviter la documentation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue la fonction de contrôle des risques ?',
                        'answers' => [
                            ['answer' => 'Surveiller les expositions, vérifier le respect des limites et produire des analyses indépendantes', 'iscorrect' => true],
                            ['answer' => 'Garantir les bénéfices', 'iscorrect' => false],
                            ['answer' => 'Exécuter toutes les transactions commerciales', 'iscorrect' => false],
                            ['answer' => 'Supprimer les décisions de la direction', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’indépendance de certaines fonctions de contrôle est-elle importante ?',
                        'answers' => [
                            ['answer' => 'Elle réduit le risque que les personnes responsables de la prise de risque contrôlent seules leurs propres décisions', 'iscorrect' => true],
                            ['answer' => 'Elle garantit des rendements positifs', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les risques de marché', 'iscorrect' => false],
                            ['answer' => 'Elle évite tout reporting', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépassements de limites doivent-ils être signalés ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent indiquer une exposition supérieure au niveau autorisé et nécessitent une analyse ou une action corrective', 'iscorrect' => true],
                            ['answer' => 'Ils garantissent un bénéfice', 'iscorrect' => false],
                            ['answer' => 'Ils ne nécessitent jamais de suivi', 'iscorrect' => false],
                            ['answer' => 'Ils suppriment automatiquement le risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un reporting régulier des risques ?',
                        'answers' => [
                            ['answer' => 'Fournir aux décideurs une vision actualisée des expositions et des tendances de risque', 'iscorrect' => true],
                            ['answer' => 'Garantir que les risques diminuent', 'iscorrect' => false],
                            ['answer' => 'Remplacer toute analyse quantitative', 'iscorrect' => false],
                            ['answer' => 'Empêcher les décisions financières', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les politiques de risque doivent-elles être mises à jour ?',
                        'answers' => [
                            ['answer' => 'Les activités, les marchés, les technologies, les réglementations et les profils d’exposition évoluent', 'iscorrect' => true],
                            ['answer' => 'Les risques restent identiques', 'iscorrect' => false],
                            ['answer' => 'Une politique ancienne est toujours suffisante', 'iscorrect' => false],
                            ['answer' => 'Les réglementations ne changent jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe améliore la gouvernance des risques ?',
                        'answers' => [
                            ['answer' => 'Une définition claire des responsabilités, des limites, des contrôles et des mécanismes d’escalade', 'iscorrect' => true],
                            ['answer' => 'L’absence de reporting', 'iscorrect' => false],
                            ['answer' => 'La concentration de toutes les décisions chez une seule personne', 'iscorrect' => false],
                            ['answer' => 'L’absence de limites', 'iscorrect' => false],
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
