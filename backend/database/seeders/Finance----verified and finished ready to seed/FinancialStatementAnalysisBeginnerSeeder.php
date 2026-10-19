<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialStatementAnalysisBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-statement-analysis')->firstOrFail();

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
                'title' => 'Introduction à l’analyse des états financiers',
                'description' => 'Introduction à l’analyse des états financiers',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de l’analyse des états financiers ?',
                        'explanation' => 'L’analyse des états financiers vise principalement à évaluer la situation financière et les performances d’une entreprise.',
                        'choices' => [
                            ['choice_text' => 'Fixer le prix de vente des produits à partir des coûts de production', 'is_correct' => false],
                            ['choice_text' => 'Évaluer la situation financière et les performances d’une entreprise', 'is_correct' => true],
                            ['choice_text' => 'Déterminer chaque jour la valeur boursière exacte de l’entreprise et de ses concurrents', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la satisfaction des clients et la notoriété de la marque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quels sont les principaux utilisateurs des états financiers ?',
                        'explanation' => 'Les investisseurs, créanciers, dirigeants et autres parties prenantes utilisent les états financiers pour prendre leurs décisions.',
                        'choices' => [
                            ['choice_text' => 'Les actionnaires majoritaires et les administrateurs de la société', 'is_correct' => false],
                            ['choice_text' => 'Les autorités fiscales et les salariés, qui en sont les seuls destinataires', 'is_correct' => false],
                            ['choice_text' => 'Les clients et les concurrents, afin de comparer les prix pratiqués', 'is_correct' => false],
                            ['choice_text' => 'Les investisseurs, les créanciers, les dirigeants et d’autres parties prenantes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que permet principalement l’analyse financière ?',
                        'explanation' => 'L’analyse financière permet de comprendre les forces, faiblesses, risques et performances financières d’une entreprise.',
                        'choices' => [
                            ['choice_text' => 'Prévoir avec exactitude les résultats et le cours de l’action de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Établir la liste des produits les plus vendus et des clients les plus fidèles', 'is_correct' => false],
                            ['choice_text' => 'Comprendre les forces, faiblesses, risques et performances financières d’une entreprise', 'is_correct' => true],
                            ['choice_text' => 'Vérifier la conformité juridique des contrats signés avec les fournisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi compare-t-on les états financiers sur plusieurs années ?',
                        'explanation' => 'Comparer plusieurs années permet d’identifier les tendances et l’évolution de la situation financière.',
                        'choices' => [
                            ['choice_text' => 'Pour calculer le montant des impôts à payer l’année suivante', 'is_correct' => false],
                            ['choice_text' => 'Pour fixer le prix d’émission des prochaines actions de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier que l’entreprise a bien respecté les règles de la comptabilité applicables', 'is_correct' => false],
                            ['choice_text' => 'Pour identifier les tendances et l’évolution de la situation financière', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un état financier ?',
                        'explanation' => 'Un état financier est un document présentant des informations financières structurées sur une entreprise.',
                        'choices' => [
                            ['choice_text' => 'Un document interne fixant les objectifs de ventes de la prochaine année', 'is_correct' => false],
                            ['choice_text' => 'Un rapport décrivant les produits et les services proposés aux clients', 'is_correct' => false],
                            ['choice_text' => 'Un document présentant des informations financières structurées sur une entreprise', 'is_correct' => true],
                            ['choice_text' => 'Un registre listant les opérations d’achat et de vente jour après jour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les états financiers sont-ils importants pour les investisseurs ?',
                        'explanation' => 'Ils fournissent des informations utiles pour évaluer la performance et la situation financière avant de décider d’investir.',
                        'choices' => [
                            ['choice_text' => 'Ils assurent aux actionnaires un rendement minimum sur leur investissement', 'is_correct' => false],
                            ['choice_text' => 'Ils fournissent des informations utiles pour évaluer la performance et la situation financière', 'is_correct' => true],
                            ['choice_text' => 'Ils prévoient avec précision le cours que l’action atteindra au cours de l’année suivante pour l’investisseur', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent l’analyse du secteur et de la concurrence dans la décision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie analyser une entreprise dans le temps ?',
                        'explanation' => 'Analyser une entreprise dans le temps signifie comparer ses résultats et indicateurs financiers entre différentes périodes.',
                        'choices' => [
                            ['choice_text' => 'Mesurer la valeur de l’entreprise à une date unique de référence', 'is_correct' => false],
                            ['choice_text' => 'Comparer ses performances à celles de ses principaux concurrents du secteur', 'is_correct' => false],
                            ['choice_text' => 'Décomposer ses résultats en pourcentage du chiffre d’affaires pour une année donnée', 'is_correct' => false],
                            ['choice_text' => 'Comparer ses résultats et indicateurs financiers entre différentes périodes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quelle information peut révéler une baisse continue du chiffre d’affaires ?',
                        'explanation' => 'Une baisse continue du chiffre d’affaires peut signaler une possible détérioration de l’activité commerciale.',
                        'choices' => [
                            ['choice_text' => 'Une amélioration probable de la rentabilité de l’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Un recours plus faible à l’endettement bancaire', 'is_correct' => false],
                            ['choice_text' => 'Une possible détérioration de l’activité commerciale', 'is_correct' => true],
                            ['choice_text' => 'Une hausse mécanique de la trésorerie disponible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il interpréter les chiffres financiers dans leur contexte ?',
                        'explanation' => 'Un même chiffre peut avoir une signification différente selon le secteur et la situation propre de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Un même chiffre peut avoir une signification différente selon le secteur et la situation de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Le contexte permet de corriger les erreurs de calcul commises par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un chiffre élevé correspond à une bonne performance quelle que soit l’activité', 'is_correct' => false],
                            ['choice_text' => 'Les chiffres ne prennent un sens qu’une fois convertis en pourcentage du chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une limite importante de l’analyse des états financiers ?',
                        'explanation' => 'L’analyse repose en partie sur des données historiques, qui ne garantissent pas les résultats futurs.',
                        'choices' => [
                            ['choice_text' => 'Elle ne s’applique qu’aux entreprises cotées, car les autres ne publient aucun chiffre', 'is_correct' => false],
                            ['choice_text' => 'Elle repose en partie sur des données historiques qui ne garantissent pas les résultats futurs', 'is_correct' => true],
                            ['choice_text' => 'Elle exige un accès à des informations confidentielles non publiées par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Elle fournit des prévisions exactes pour les grandes entreprises cotées en bourse', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Bilan et structure financière',
                'description' => 'Bilan et structure financière',
                'questions' => [
                    [
                        'question' => 'Que présente principalement le bilan ?',
                        'explanation' => 'Le bilan présente les actifs, les passifs et les capitaux propres d’une entreprise à une date donnée.',
                        'choices' => [
                            ['choice_text' => 'Les actifs, les passifs et les capitaux propres à une date donnée', 'is_correct' => true],
                            ['choice_text' => 'Les produits, les charges et le résultat sur une période donnée', 'is_correct' => false],
                            ['choice_text' => 'Les encaissements et les décaissements de trésorerie d’une période', 'is_correct' => false],
                            ['choice_text' => 'Les ventes, les coûts et les marges par produit sur l’année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un actif ?',
                        'explanation' => 'Un actif est une ressource contrôlée par l’entreprise, pouvant lui procurer des avantages économiques futurs.',
                        'choices' => [
                            ['choice_text' => 'Une obligation actuelle de l’entreprise résultant d’événements passés', 'is_correct' => false],
                            ['choice_text' => 'Une dépense engagée par l’entreprise qui ne lui procure aucun avantage futur', 'is_correct' => false],
                            ['choice_text' => 'Un apport des actionnaires qui finance durablement les opérations de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une ressource contrôlée par l’entreprise pouvant procurer des avantages économiques futurs', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un passif ?',
                        'explanation' => 'Un passif est une obligation actuelle de l’entreprise résultant d’événements passés.',
                        'choices' => [
                            ['choice_text' => 'Une ressource contrôlée par l’entreprise qui procure des avantages futurs', 'is_correct' => false],
                            ['choice_text' => 'Une obligation actuelle de l’entreprise résultant d’événements passés', 'is_correct' => true],
                            ['choice_text' => 'Un produit encaissé par l’entreprise lors d’une vente de la période', 'is_correct' => false],
                            ['choice_text' => 'Un apport en capital réalisé par les actionnaires de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représentent les capitaux propres ?',
                        'explanation' => 'Les capitaux propres représentent la part résiduelle des actifs de l’entreprise après déduction des passifs.',
                        'choices' => [
                            ['choice_text' => 'La somme des actifs et des passifs à la date du bilan', 'is_correct' => false],
                            ['choice_text' => 'La part résiduelle des actifs après déduction des passifs', 'is_correct' => true],
                            ['choice_text' => 'La part des actifs financée par des emprunts bancaires', 'is_correct' => false],
                            ['choice_text' => 'Le total des bénéfices distribués aux actionnaires depuis l’origine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle relation fondamentale doit respecter le bilan ?',
                        'explanation' => 'Le bilan doit toujours respecter l’équation fondamentale : Actifs = Passifs + Capitaux propres.',
                        'choices' => [
                            ['choice_text' => 'Actifs = Revenus - Dépenses', 'is_correct' => false],
                            ['choice_text' => 'Passifs = Actifs + Capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Actifs = Passifs + Capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Capitaux propres = Actifs + Passifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel est généralement un actif courant ?',
                        'explanation' => 'Les créances clients, censées être encaissées à court terme, sont généralement classées en actifs courants.',
                        'choices' => [
                            ['choice_text' => 'Les créances clients', 'is_correct' => true],
                            ['choice_text' => 'Un emprunt à long terme', 'is_correct' => false],
                            ['choice_text' => 'Le capital social', 'is_correct' => false],
                            ['choice_text' => 'Une dette obligataire à long terme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel est généralement un passif courant ?',
                        'explanation' => 'Les dettes fournisseurs, généralement à régler à court terme, sont classées en passifs courants.',
                        'choices' => [
                            ['choice_text' => 'Un emprunt bancaire sur dix ans', 'is_correct' => false],
                            ['choice_text' => 'Les stocks de produits', 'is_correct' => false],
                            ['choice_text' => 'Le capital social versé', 'is_correct' => false],
                            ['choice_text' => 'Les dettes fournisseurs', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que peut indiquer une forte proportion de dettes dans le bilan ?',
                        'explanation' => 'Une forte proportion de dettes peut indiquer une dépendance plus importante au financement par endettement.',
                        'choices' => [
                            ['choice_text' => 'Une capacité renforcée à financer l’activité par les bénéfices mis en réserve', 'is_correct' => false],
                            ['choice_text' => 'Une baisse du risque de défaut de paiement de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une proportion élevée de capitaux propres dans le financement', 'is_correct' => false],
                            ['choice_text' => 'Une dépendance plus importante au financement par endettement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyse-t-on la structure des actifs ?',
                        'explanation' => 'Analyser la structure des actifs permet de comprendre comment les ressources de l’entreprise sont investies.',
                        'choices' => [
                            ['choice_text' => 'Pour connaître l’origine des fonds qui financent l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer le bénéfice dégagé sur chaque produit vendu', 'is_correct' => false],
                            ['choice_text' => 'Pour comprendre comment les ressources de l’entreprise sont investies', 'is_correct' => true],
                            ['choice_text' => 'Pour calculer le montant d’impôt dû sur les actifs détenus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut signifier une augmentation importante des créances clients ?',
                        'explanation' => 'Une forte hausse des créances peut signaler une hausse des ventes à crédit ou, au contraire, des difficultés de recouvrement.',
                        'choices' => [
                            ['choice_text' => 'Elle indique que les clients règlent leurs factures plus vite qu’auparavant', 'is_correct' => false],
                            ['choice_text' => 'Elle reflète un remboursement anticipé des emprunts bancaires contractés par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Elle peut signaler une hausse des ventes à crédit ou des difficultés de recouvrement', 'is_correct' => true],
                            ['choice_text' => 'Elle traduit une hausse des dettes de l’entreprise envers ses fournisseurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Compte de résultat et rentabilité',
                'description' => 'Compte de résultat et rentabilité',
                'questions' => [
                    [
                        'question' => 'Que présente principalement le compte de résultat ?',
                        'explanation' => 'Le compte de résultat présente les produits, les charges et le résultat d’une entreprise sur une période.',
                        'choices' => [
                            ['choice_text' => 'Les actifs, les passifs et les capitaux propres à une date', 'is_correct' => false],
                            ['choice_text' => 'Les entrées et sorties de trésorerie classées par activité', 'is_correct' => false],
                            ['choice_text' => 'Les résultats prévus et le budget de l’exercice suivant', 'is_correct' => false],
                            ['choice_text' => 'Les produits, les charges et le résultat d’une période', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le chiffre d’affaires ?',
                        'explanation' => 'Le chiffre d’affaires correspond au montant des ventes réalisées par l’entreprise sur une période.',
                        'choices' => [
                            ['choice_text' => 'Le bénéfice dégagé par l’entreprise après déduction des charges', 'is_correct' => false],
                            ['choice_text' => 'Le montant des ventes réalisées par l’entreprise sur une période', 'is_correct' => true],
                            ['choice_text' => 'Le montant des achats de marchandises réalisés sur la période', 'is_correct' => false],
                            ['choice_text' => 'La valeur totale des biens que l’entreprise possède à la clôture de l’exercice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment obtient-on généralement le résultat net ?',
                        'explanation' => 'Le résultat net s’obtient en retranchant de l’ensemble des produits de la période l’ensemble des charges, impôt sur les bénéfices compris.',
                        'choices' => [
                            ['choice_text' => 'En retranchant du chiffre d’affaires les seules charges d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'En retranchant les dettes totales des actifs totaux de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'En additionnant les flux de trésorerie opérationnels, d’investissement et de financement de la période', 'is_correct' => false],
                            ['choice_text' => 'En retranchant de l’ensemble des produits de la période l’ensemble des charges, impôt compris', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que mesure la marge bénéficiaire ?',
                        'explanation' => 'La marge bénéficiaire mesure la part du chiffre d’affaires conservée sous forme de bénéfice, selon la marge considérée.',
                        'choices' => [
                            ['choice_text' => 'La part du chiffre d’affaires conservée sous forme de bénéfice selon la marge considérée', 'is_correct' => true],
                            ['choice_text' => 'Le rapport entre les bénéfices et le total des actifs de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le rapport entre le chiffre d’affaires et le total des actifs détenus', 'is_correct' => false],
                            ['choice_text' => 'La croissance du chiffre d’affaires d’une année sur l’autre en pourcentage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une charge d’exploitation ?',
                        'explanation' => 'Une charge d’exploitation est une dépense liée au fonctionnement courant de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Une dépense liée au fonctionnement courant de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Une dépense liée à l’acquisition d’un équipement durable', 'is_correct' => false],
                            ['choice_text' => 'Une charge liée au financement par emprunt bancaire de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un produit encaissé lors de la vente de marchandises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du chiffre d’affaires ne garantit-elle pas une hausse du bénéfice ?',
                        'explanation' => 'Les charges peuvent augmenter plus rapidement que les ventes, réduisant ainsi le bénéfice malgré la hausse du chiffre d’affaires.',
                        'choices' => [
                            ['choice_text' => 'Le chiffre d’affaires est calculé après déduction des charges', 'is_correct' => false],
                            ['choice_text' => 'Les charges diminuent mécaniquement quand les ventes augmentent', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice ne dépend que des charges financières de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Les charges peuvent augmenter plus rapidement que les ventes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le résultat d’exploitation ?',
                        'explanation' => 'Le résultat d’exploitation est un résultat lié principalement à l’activité opérationnelle de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Un résultat lié principalement aux placements financiers de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un résultat obtenu après déduction de l’impôt et des intérêts', 'is_correct' => false],
                            ['choice_text' => 'Un résultat lié principalement aux cessions exceptionnelles d’actifs de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un résultat lié principalement à l’activité opérationnelle de l’entreprise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que peut indiquer une baisse de la marge opérationnelle ?',
                        'explanation' => 'Une baisse de la marge opérationnelle peut indiquer une détérioration de la rentabilité de l’activité opérationnelle.',
                        'choices' => [
                            ['choice_text' => 'Une détérioration de la rentabilité de l’activité opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration de la maîtrise des charges d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'Une hausse de la part du résultat financier dans le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Une réduction de l’endettement de l’entreprise au cours de la période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi compare-t-on les marges entre entreprises du même secteur ?',
                        'explanation' => 'Comparer les marges entre entreprises comparables permet de mieux apprécier leur efficacité et leur rentabilité dans un contexte pertinent.',
                        'choices' => [
                            ['choice_text' => 'Pour prévoir avec précision l’évolution du cours de leurs actions', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer leur capacité à rembourser leurs dettes à court terme', 'is_correct' => false],
                            ['choice_text' => 'Pour établir le montant d’impôt que chacune doit verser à l’État', 'is_correct' => false],
                            ['choice_text' => 'Pour mieux apprécier leur efficacité et leur rentabilité dans un contexte comparable', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réalise 100 000 € de ventes et 80 000 € de charges. Quel est son résultat simplifié (ventes moins charges, sans autre élément) ?',
                        'explanation' => '100 000 € - 80 000 € = 20 000 €.',
                        'choices' => [
                            ['choice_text' => '20 000 €', 'is_correct' => true],
                            ['choice_text' => '80 000 €', 'is_correct' => false],
                            ['choice_text' => '100 000 €', 'is_correct' => false],
                            ['choice_text' => '180 000 €', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Tableau des flux de trésorerie',
                'description' => 'Tableau des flux de trésorerie',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal du tableau des flux de trésorerie ?',
                        'explanation' => 'Le tableau des flux de trésorerie présente les entrées et sorties de trésorerie de l’entreprise sur une période.',
                        'choices' => [
                            ['choice_text' => 'Présenter les entrées et sorties de trésorerie sur une période', 'is_correct' => true],
                            ['choice_text' => 'Présenter les actifs, passifs et capitaux propres à une date', 'is_correct' => false],
                            ['choice_text' => 'Présenter les produits et les charges de l’exercice et le résultat', 'is_correct' => false],
                            ['choice_text' => 'Présenter la répartition du capital entre les actionnaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelles sont les grandes catégories de flux de trésorerie ?',
                        'explanation' => 'Les flux de trésorerie sont généralement classés en flux opérationnels, d’investissement et de financement.',
                        'choices' => [
                            ['choice_text' => 'Flux d’exploitation, de stockage et de distribution', 'is_correct' => false],
                            ['choice_text' => 'Flux d’actifs, de passifs et de capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Flux opérationnels, d’investissement et de financement', 'is_correct' => true],
                            ['choice_text' => 'Flux comptables, bancaires et réglementaires de l’exercice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représentent les flux de trésorerie opérationnels ?',
                        'explanation' => 'Les flux opérationnels représentent les flux liés principalement aux activités courantes de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Les flux liés principalement aux achats et ventes d’immobilisations', 'is_correct' => false],
                            ['choice_text' => 'Les flux liés principalement aux apports des actionnaires et aux emprunts', 'is_correct' => false],
                            ['choice_text' => 'Les flux liés principalement aux activités courantes de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Les flux liés principalement aux écarts de conversion entre devises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à un flux d’investissement ?',
                        'explanation' => 'Le paiement effectué pour acquérir une immobilisation utilisée par l’entreprise constitue une sortie de trésorerie d’investissement. Un achat à crédit sans paiement immédiat ne crée pas encore ce flux.',                        'choices' => [
                            ['choice_text' => 'Le paiement d’un fournisseur courant', 'is_correct' => false],
                            ['choice_text' => 'La réception d’un paiement client', 'is_correct' => false],
                            ['choice_text' => 'Le paiement d’un salaire courant', 'is_correct' => false],
                              ['choice_text' => 'Le paiement pour l’achat d’une machine utilisée durablement par l’entreprise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à un flux de financement ?',
                        'explanation' => 'L’encaissement des fonds provenant d’un emprunt constitue une entrée de trésorerie de financement. La seule signature du contrat, sans versement des fonds, ne constitue pas un flux de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'L’achat de marchandises', 'is_correct' => false],
                            ['choice_text' => 'L’encaissement des fonds provenant d’un emprunt', 'is_correct' => true],
                            ['choice_text' => 'L’encaissement d’une vente', 'is_correct' => false],
                            ['choice_text' => 'Le paiement d’une facture d’électricité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le bénéfice net et la trésorerie peuvent-ils être différents ?',
                        'explanation' => 'Certains produits et charges comptables ne correspondent pas immédiatement à des mouvements de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Parce que certains produits et charges comptables ne correspondent pas immédiatement à des mouvements de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Parce que la trésorerie intègre des produits et charges comptables qui ne donnent lieu à aucun mouvement de fonds au cours de la même période', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bénéfice ne prend en compte que les opérations d’investissement et de financement', 'is_correct' => false],
                            ['choice_text' => 'Parce que la trésorerie est calculée sur une période plus longue que le bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un flux de trésorerie positif ?',
                        'explanation' => 'Un flux de trésorerie positif correspond à une entrée nette de trésorerie sur la période considérée.',
                        'choices' => [
                            ['choice_text' => 'Une entrée nette de trésorerie sur la période considérée', 'is_correct' => true],
                            ['choice_text' => 'Une hausse du bénéfice net sur la période considérée', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation du chiffre d’affaires sur la période', 'is_correct' => false],
                            ['choice_text' => 'Une diminution des dettes bancaires de l’entreprise sur la période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les flux opérationnels sont-ils importants pour une entreprise ?',
                        'explanation' => 'Ils montrent dans quelle mesure l’activité courante génère ou consomme de la trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Ils révèlent dans quelle mesure l’entreprise lève des capitaux de façon régulière auprès des investisseurs', 'is_correct' => false],
                            ['choice_text' => 'Ils montrent dans quelle mesure l’activité courante génère ou consomme de la trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Ils mesurent le montant des dividendes que l’entreprise doit distribuer', 'is_correct' => false],
                            ['choice_text' => 'Ils indiquent la valeur des bâtiments et des équipements détenus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit 50 000 € de ses clients et paie 30 000 € à ses fournisseurs. Quel est le flux net simplifié ?',
                        'explanation' => '50 000 € - 30 000 € = 20 000 € d’entrée nette de trésorerie.',
                        'choices' => [
                            ['choice_text' => '20 000 € d’entrée nette de trésorerie', 'is_correct' => true],
                            ['choice_text' => '30 000 € de sortie nette de trésorerie', 'is_correct' => false],
                            ['choice_text' => '50 000 € de sortie nette de trésorerie', 'is_correct' => false],
                            ['choice_text' => '80 000 € d’entrée nette de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise rentable peut-elle connaître des difficultés de trésorerie ?',
                        'explanation' => 'Ses bénéfices peuvent être immobilisés dans les créances, les stocks ou d’autres besoins de financement plutôt que disponibles en trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Son bénéfice net est calculé avant la prise en compte des charges d’exploitation courantes', 'is_correct' => false],
                            ['choice_text' => 'Ses bénéfices peuvent être immobilisés dans les créances, les stocks ou d’autres besoins de financement', 'is_correct' => true],
                            ['choice_text' => 'Son bénéfice mesure la valeur de ses actifs et non la performance de son activité', 'is_correct' => false],
                            ['choice_text' => 'Ses ventes sont enregistrées au compte de résultat à la date de leur encaissement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Analyse de la liquidité',
                'description' => 'Analyse de la liquidité',
                'questions' => [
                    [
                        'question' => 'Que mesure principalement la liquidité ?',
                        'explanation' => 'La liquidité mesure la capacité de l’entreprise à faire face à ses obligations à court terme.',
                        'choices' => [
                            ['choice_text' => 'La capacité de l’entreprise à faire face à ses obligations à court terme', 'is_correct' => true],
                            ['choice_text' => 'La capacité de l’entreprise à rembourser ses dettes financières à long terme', 'is_correct' => false],
                            ['choice_text' => 'La rentabilité des capitaux investis par les actionnaires', 'is_correct' => false],
                            ['choice_text' => 'La rapidité avec laquelle l’entreprise renouvelle ses stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que compare généralement le ratio de liquidité générale ?',
                        'explanation' => 'Le ratio de liquidité générale compare les actifs courants aux passifs courants.',
                        'choices' => [
                            ['choice_text' => 'Les actifs immobilisés aux capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Les actifs courants aux passifs courants', 'is_correct' => true],
                            ['choice_text' => 'Les dettes totales aux actifs totaux', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice net aux capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une liquidité générale supérieure à 1 signifie généralement que :',
                        'explanation' => 'Un ratio supérieur à 1 signifie que les actifs courants sont supérieurs aux passifs courants.',
                        'choices' => [
                            ['choice_text' => 'Les actifs courants sont supérieurs aux passifs courants', 'is_correct' => true],
                            ['choice_text' => 'Les capitaux propres sont supérieurs aux dettes de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Les actifs courants sont inférieurs aux passifs courants', 'is_correct' => false],
                            ['choice_text' => 'Les ventes de la période sont supérieures aux charges de la période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le ratio de liquidité réduite cherche notamment à exclure ?',
                        'explanation' => 'Le ratio de liquidité réduite exclut généralement les stocks, car ils peuvent être moins rapidement convertibles en trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Les dettes fournisseurs, car elles viennent à échéance à court terme', 'is_correct' => false],
                            ['choice_text' => 'Les stocks, car ils peuvent être moins rapidement convertibles en trésorerie', 'is_correct' => true],
                            ['choice_text' => 'La trésorerie, car elle est déjà comptée dans les actifs immobilisés', 'is_correct' => false],
                            ['choice_text' => 'Les créances clients, car elles ne seront encaissées qu’à long terme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stocks peuvent-ils poser un problème de liquidité ?',
                        'explanation' => 'Les stocks peuvent nécessiter du temps pour être vendus et encaissés, contrairement à des actifs plus liquides.',
                        'choices' => [
                            ['choice_text' => 'Ils sont comptabilisés au passif et augmentent ainsi les dettes', 'is_correct' => false],
                            ['choice_text' => 'Ils sont exclus du bilan tant qu’ils ne sont pas vendus', 'is_correct' => false],
                            ['choice_text' => 'Ils peuvent nécessiter du temps pour être vendus et encaissés', 'is_correct' => true],
                            ['choice_text' => 'Ils perdent leur valeur dès leur entrée dans l’entrepôt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède 120 000 € d’actifs courants et 80 000 € de passifs courants. Quel est son ratio de liquidité générale ?',
                        'explanation' => '120 000 € ÷ 80 000 € = 1,5.',
                        'choices' => [
                            ['choice_text' => '1,5', 'is_correct' => true],
                            ['choice_text' => '0,67', 'is_correct' => false],
                            ['choice_text' => '2,0', 'is_correct' => false],
                            ['choice_text' => '80', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une liquidité très faible peut-elle être préoccupante ?',
                        'explanation' => 'Une liquidité très faible signifie que l’entreprise peut avoir des difficultés à régler ses obligations à court terme.',
                        'choices' => [
                            ['choice_text' => 'L’entreprise peut avoir des difficultés à régler ses obligations à court terme', 'is_correct' => true],
                            ['choice_text' => 'L’entreprise peut avoir des difficultés à rembourser ses emprunts bancaires à vingt ans', 'is_correct' => false],
                            ['choice_text' => 'L’entreprise réalise des pertes sur l’ensemble de ses ventes', 'is_correct' => false],
                            ['choice_text' => 'L’entreprise détient trop de capitaux propres par rapport à ses dettes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une liquidité élevée n’est-elle pas toujours synonyme d’efficacité ?',
                        'explanation' => 'Des ressources trop importantes conservées en liquidités peuvent rester peu productives plutôt qu’investies utilement.',
                        'choices' => [
                            ['choice_text' => 'Elle traduit un excès de dettes à court terme dans le bilan', 'is_correct' => false],
                            ['choice_text' => 'Elle signale que l’entreprise retarde le paiement de ses fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Les actifs courants sont alors comptabilisés à une valeur inférieure à leur coût', 'is_correct' => false],
                            ['choice_text' => 'Des ressources trop importantes peuvent rester peu productives', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut améliorer directement la liquidité ?',
                        'explanation' => 'Une augmentation des encaissements ou une réduction des sorties de trésorerie améliore directement la liquidité disponible.',
                        'choices' => [
                            ['choice_text' => 'Une hausse des ventes à crédit réglées par les clients à un an', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation des encaissements ou une réduction des sorties de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Une accélération des investissements en immobilisations de long terme', 'is_correct' => false],
                            ['choice_text' => 'Un allongement des délais accordés aux clients pour régler leurs factures à l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il comparer les ratios de liquidité dans le temps ?',
                        'explanation' => 'Comparer les ratios dans le temps permet d’identifier une amélioration ou une détérioration de la capacité à faire face aux obligations courantes.',
                        'choices' => [
                            ['choice_text' => 'Pour mesurer l’évolution de la rentabilité des capitaux investis par les actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Pour anticiper précisément les besoins de financement de l’année suivante', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier que les règles comptables ont été appliquées de la même façon', 'is_correct' => false],
                            ['choice_text' => 'Pour identifier une amélioration ou une détérioration de la capacité à faire face aux obligations courantes', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Analyse de l’endettement et de la solvabilité',
                'description' => 'Analyse de l’endettement et de la solvabilité',
                'questions' => [
                    [
                        'question' => 'Que mesure principalement la solvabilité ?',
                        'explanation' => 'La solvabilité mesure la capacité d’une entreprise à faire face à ses obligations financières sur le long terme.',
                        'choices' => [
                            ['choice_text' => 'La capacité d’une entreprise à régler ses factures et salaires dans les prochaines semaines', 'is_correct' => false],
                            ['choice_text' => 'La capacité d’une entreprise à faire face à ses obligations financières sur le long terme', 'is_correct' => true],
                            ['choice_text' => 'La capacité d’une entreprise à augmenter ses ventes et ses parts de marché sur le long terme', 'is_correct' => false],
                            ['choice_text' => 'La capacité d’une entreprise à distribuer des dividendes réguliers à ses actionnaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le ratio d’endettement ?',
                        'explanation' => 'Le ratio d’endettement est un indicateur permettant d’évaluer l’importance du financement par dette de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Un indicateur permettant d’évaluer la rapidité de rotation des stocks', 'is_correct' => false],
                            ['choice_text' => 'Un indicateur permettant d’évaluer l’importance du financement par dette', 'is_correct' => true],
                            ['choice_text' => 'Un indicateur permettant de comparer le bénéfice net aux capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Un indicateur permettant de mesurer la part des ventes réalisées à crédit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un niveau élevé d’endettement peut-il augmenter le risque financier ?',
                        'explanation' => 'Un endettement élevé impose à l’entreprise des obligations financières qui peuvent devenir difficiles à honorer.',
                        'choices' => [
                            ['choice_text' => 'Les intérêts de la dette réduisent le chiffre d’affaires de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Les créanciers deviennent propriétaires de l’entreprise dès le premier emprunt', 'is_correct' => false],
                            ['choice_text' => 'L’entreprise doit supporter des obligations financières qui peuvent devenir difficiles à honorer', 'is_correct' => true],
                            ['choice_text' => 'La dette augmente le capital social et dilue la valeur des actions existantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure généralement le ratio de couverture des intérêts ?',
                        'explanation' => 'Le ratio de couverture des intérêts mesure la capacité du résultat d’exploitation à couvrir les charges d’intérêts.',
                        'choices' => [
                            ['choice_text' => 'La capacité de la trésorerie à couvrir les dividendes versés', 'is_correct' => false],
                            ['choice_text' => 'La capacité des capitaux propres à couvrir les dettes totales', 'is_correct' => false],
                            ['choice_text' => 'La capacité du chiffre d’affaires à couvrir les charges de personnel de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'La capacité du résultat d’exploitation à couvrir les charges d’intérêts', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise ayant beaucoup de dettes peut-elle malgré tout être solvable ?',
                        'explanation' => 'Oui, si ses flux et ressources lui permettent de respecter ses obligations financières malgré un niveau de dette élevé.',
                        'choices' => [
                            ['choice_text' => 'Non, car dès que les dettes dépassent les capitaux propres elle est insolvable', 'is_correct' => false],
                            ['choice_text' => 'Oui, à condition que ses dettes soient inférieures à son chiffre d’affaires annuel', 'is_correct' => false],
                            ['choice_text' => 'Oui, si ses flux et ressources lui permettent de respecter ses obligations financières', 'is_correct' => true],
                            ['choice_text' => 'Non, car les intérêts de la dette dépassent par nature le résultat d’exploitation de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage possible du financement par dette ?',
                        'explanation' => 'Le financement par dette permet de financer des investissements sans diluer directement la propriété des actionnaires.',
                        'choices' => [
                            ['choice_text' => 'Il fait entrer de nouveaux associés au capital de l’entreprise sans modifier son contrôle', 'is_correct' => false],
                            ['choice_text' => 'Il permet de financer des investissements sans avoir à rémunérer les prêteurs', 'is_correct' => false],
                            ['choice_text' => 'Il permet de réduire le risque de l’entreprise en transférant l’ensemble de ses pertes futures aux prêteurs', 'is_correct' => false],
                            ['choice_text' => 'Il permet de financer des investissements sans diluer directement la propriété des actionnaires', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est un risque du financement excessif par dette ?',
                        'explanation' => 'Un endettement excessif augmente le risque de défaut et le poids des charges financières.',
                        'choices' => [
                            ['choice_text' => 'Une dilution de la participation des actionnaires existants', 'is_correct' => false],
                            ['choice_text' => 'Une hausse des produits financiers et du chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation du risque de défaut et des charges financières', 'is_correct' => true],
                            ['choice_text' => 'Une baisse du risque de défaut grâce à la déductibilité des intérêts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi compare-t-on l’endettement entre entreprises du même secteur ?',
                        'explanation' => 'Les besoins de financement et les niveaux d’endettement peuvent varier selon le modèle économique, d’où l’intérêt de comparer des entreprises comparables.',
                        'choices' => [
                            ['choice_text' => 'Les entreprises d’un secteur donné doivent respecter le même plafond légal d’endettement', 'is_correct' => false],
                            ['choice_text' => 'Les investisseurs exigent des entreprises du même secteur qu’elles publient leurs ratios', 'is_correct' => false],
                            ['choice_text' => 'Les comparaisons sectorielles permettent d’égaliser durablement le niveau de dette de ces entreprises du secteur', 'is_correct' => false],
                            ['choice_text' => 'Les besoins de financement et les niveaux d’endettement peuvent varier selon le modèle économique', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède 500 000 € de dettes et 1 000 000 € d’actifs. Quel est le ratio dettes/actifs simplifié ?',
                        'explanation' => '500 000 € ÷ 1 000 000 € = 50 %.',
                        'choices' => [
                            ['choice_text' => '50 %', 'is_correct' => true],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '100 %', 'is_correct' => false],
                            ['choice_text' => '200 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut indiquer une baisse régulière du ratio d’endettement ?',
                        'explanation' => 'Une baisse régulière peut indiquer une diminution relative du recours à la dette, selon la composition des autres éléments financiers.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation relative du recours à la dette, selon la composition du financement et de la structure des actifs', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration de la liquidité immédiate, selon la composition de la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Une baisse du chiffre d’affaires, selon la composition des charges de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une diminution relative du recours à la dette, selon la composition des autres éléments financiers', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Ratios de rentabilité et efficacité',
                'description' => 'Ratios de rentabilité et efficacité',
                'questions' => [
                    [
                        'question' => 'Que mesure le ROA ?',
                        'explanation' => 'Le ROA (Return on Assets) mesure la rentabilité générée par les actifs de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'La rentabilité des capitaux propres apportés par les actionnaires', 'is_correct' => false],
                            ['choice_text' => 'La rentabilité générée par les actifs de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'La vitesse à laquelle l’entreprise encaisse ses créances clients', 'is_correct' => false],
                            ['choice_text' => 'La part des dettes dans le financement des actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure le ROE ?',
                        'explanation' => 'Le ROE (Return on Equity) mesure la rentabilité des capitaux propres.',
                        'choices' => [
                            ['choice_text' => 'La rentabilité des capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'La liquidité des stocks', 'is_correct' => false],
                            ['choice_text' => 'Le montant des ventes', 'is_correct' => false],
                            ['choice_text' => 'Le total des dettes fournisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le ROE est-il important pour les actionnaires ?',
                        'explanation' => 'Le ROE indique la rentabilité générée relativement aux capitaux que les actionnaires ont investis.',
                        'choices' => [
                            ['choice_text' => 'Il indique le montant du dividende qui sera versé l’année suivante', 'is_correct' => false],
                            ['choice_text' => 'Il indique la rentabilité générée relativement aux capitaux qu’ils ont investis', 'is_correct' => true],
                            ['choice_text' => 'Il mesure la part des dettes par rapport aux capitaux qu’ils ont investis', 'is_correct' => false],
                            ['choice_text' => 'Il indique la rentabilité générée relativement à l’ensemble des actifs de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la rotation des actifs ?',
                        'explanation' => 'La rotation des actifs est un indicateur de l’efficacité avec laquelle les actifs sont utilisés pour générer des ventes.',
                        'choices' => [
                            ['choice_text' => 'Un indicateur de la rapidité avec laquelle les actifs sont convertis en trésorerie par l’entreprise sur l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Un indicateur de la rentabilité dégagée par les actifs à partir du résultat net', 'is_correct' => false],
                            ['choice_text' => 'Un indicateur de l’efficacité avec laquelle les actifs sont utilisés pour générer des ventes', 'is_correct' => true],
                            ['choice_text' => 'Un indicateur de la part des actifs financée par la dette de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut indiquer une amélioration de la rotation des actifs ?',
                        'explanation' => 'Une amélioration de la rotation des actifs peut indiquer une utilisation plus efficace des actifs pour générer du chiffre d’affaires.',
                        'choices' => [
                            ['choice_text' => 'Une utilisation moins efficace des actifs pour générer du chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Une meilleure couverture des charges d’intérêts par le résultat', 'is_correct' => false],
                            ['choice_text' => 'Une utilisation plus efficace des actifs pour générer du chiffre d’affaires', 'is_correct' => true],
                            ['choice_text' => 'Une baisse de la part des dettes dans le financement des actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réalise 200 000 € de bénéfice net avec 1 000 000 € de capitaux propres. Quel est son ROE simplifié ?',
                        'explanation' => '200 000 € ÷ 1 000 000 € = 20 %.',
                        'choices' => [
                            ['choice_text' => '20 %', 'is_correct' => true],
                            ['choice_text' => '5 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => false],
                            ['choice_text' => '200 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une rentabilité élevée doit-elle être analysée avec le niveau de risque ?',
                        'explanation' => 'Un rendement élevé peut avoir été obtenu avec un niveau de risque ou d’endettement également élevé, ce qui nuance la performance apparente.',
                        'choices' => [
                            ['choice_text' => 'Les ratios de rentabilité sont calculés différemment selon le niveau de risque de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une rentabilité élevée provient en principe d’un niveau d’endettement faible', 'is_correct' => false],
                            ['choice_text' => 'Un rendement élevé peut être obtenu avec un niveau de risque ou d’endettement également élevé', 'is_correct' => true],
                            ['choice_text' => 'Le risque de l’entreprise est supporté par ses créanciers et non par ses actionnaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le ROE peut-il augmenter grâce à l’endettement ?',
                        'explanation' => 'L’effet de levier peut amplifier la rentabilité des capitaux propres lorsque les conditions sont favorables.',
                        'choices' => [
                            ['choice_text' => 'Les intérêts de la dette sont comptabilisés comme un produit qui accroît le résultat', 'is_correct' => false],
                            ['choice_text' => 'La dette augmente les capitaux propres, ce qui fait progresser le ROE', 'is_correct' => false],
                            ['choice_text' => 'L’effet de levier peut amplifier la rentabilité des capitaux propres lorsque les conditions sont favorables', 'is_correct' => true],
                            ['choice_text' => 'Le ROE est calculé sur les dettes et non sur les capitaux propres de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur permet de comparer le bénéfice net au chiffre d’affaires ?',
                        'explanation' => 'La marge nette rapporte le bénéfice net au chiffre d’affaires.',
                        'choices' => [
                            ['choice_text' => 'Le ratio d’endettement', 'is_correct' => false],
                            ['choice_text' => 'La marge nette', 'is_correct' => true],
                            ['choice_text' => 'Le ratio de liquidité générale', 'is_correct' => false],
                            ['choice_text' => 'La rotation des stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les ratios de rentabilité doivent-ils être comparés dans le temps ?',
                        'explanation' => 'Comparer les ratios dans le temps permet d’identifier les tendances et de comprendre si la performance s’améliore ou se détériore.',
                        'choices' => [
                            ['choice_text' => 'Pour comparer la performance de l’entreprise avec celle de ses concurrents directs du secteur d’activité', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le montant des dividendes à verser aux actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Pour identifier les tendances et comprendre si la performance s’améliore ou se détériore', 'is_correct' => true],
                            ['choice_text' => 'Pour prévoir avec exactitude les bénéfices des prochains exercices', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Analyse comparative et interprétation financière',
                'description' => 'Analyse comparative et interprétation financière',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’analyse horizontale ?',
                        'explanation' => 'L’analyse horizontale consiste à comparer une même donnée financière entre plusieurs périodes.',
                        'choices' => [
                            ['choice_text' => 'L’expression de chaque poste d’un état financier en pourcentage d’un total', 'is_correct' => false],
                            ['choice_text' => 'La comparaison de ratios financiers entre entreprises d’un même secteur', 'is_correct' => false],
                            ['choice_text' => 'L’étude des relations entre l’actif et le passif à la clôture', 'is_correct' => false],
                            ['choice_text' => 'La comparaison d’une même donnée financière entre plusieurs périodes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’analyse verticale ?',
                        'explanation' => 'L’analyse verticale étudie la composition d’un état financier en exprimant certains postes en pourcentage d’une base de référence.',
                        'choices' => [
                            ['choice_text' => 'La comparaison d’un même poste d’un état financier entre plusieurs exercices', 'is_correct' => false],
                            ['choice_text' => 'L’étude de l’évolution du chiffre d’affaires d’une année sur l’autre', 'is_correct' => false],
                            ['choice_text' => 'L’étude de la composition d’un état financier en exprimant certains postes en pourcentage d’une base', 'is_correct' => true],
                            ['choice_text' => 'La comparaison des ratios de l’entreprise avec la moyenne de son secteur d’activité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on des ratios financiers ?',
                        'explanation' => 'Les ratios financiers facilitent l’interprétation et la comparaison de différentes informations financières.',
                        'choices' => [
                            ['choice_text' => 'Pour prévoir avec exactitude les résultats des prochains exercices', 'is_correct' => false],
                            ['choice_text' => 'Pour dispenser les lecteurs de consulter le bilan et le compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Pour harmoniser les méthodes comptables utilisées par les différentes entreprises d’un même secteur', 'is_correct' => false],
                            ['choice_text' => 'Pour faciliter l’interprétation et la comparaison de différentes informations financières', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter d’interpréter un ratio isolément ?',
                        'explanation' => 'La signification d’un ratio et son évolution dépendent du contexte, du secteur et d’autres indicateurs complémentaires.',
                        'choices' => [
                            ['choice_text' => 'Son évolution et sa signification dépendent du contexte, du secteur et d’autres indicateurs', 'is_correct' => true],
                            ['choice_text' => 'Un ratio n’a de sens que s’il est supérieur à 1, quel que soit le secteur', 'is_correct' => false],
                            ['choice_text' => 'Les ratios sont calculés à partir de données prévisionnelles non vérifiables', 'is_correct' => false],
                            ['choice_text' => 'Les ratios mesurent une seule période et ne peuvent pas être comparés dans le temps ni entre entreprises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente ses ventes de 10 % mais ses bénéfices diminuent de 5 %. Que peut-on envisager ?',
                        'explanation' => 'Les coûts ou charges ont probablement augmenté suffisamment pour réduire la rentabilité, malgré la hausse des ventes.',
                        'choices' => [
                            ['choice_text' => 'Les charges ont probablement diminué plus vite que les ventes n’ont augmenté', 'is_correct' => false],
                            ['choice_text' => 'Les coûts ou les charges ont probablement augmenté suffisamment pour réduire la rentabilité', 'is_correct' => true],
                            ['choice_text' => 'Les ventes ont probablement été encaissées en retard, ce qui réduit le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'L’entreprise a probablement réduit son endettement, ce qui diminue le bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède une bonne rentabilité mais une faible liquidité. Quelle conclusion est la plus prudente ?',
                        'explanation' => 'Une entreprise peut être rentable tout en rencontrant des tensions de trésorerie à court terme, car rentabilité et liquidité mesurent des dimensions différentes.',
                        'choices' => [
                            ['choice_text' => 'Elle est probablement en situation de faillite imminente dans les prochains mois', 'is_correct' => false],
                            ['choice_text' => 'Elle réalise probablement des bénéfices comptables fictifs sans vente réelle', 'is_correct' => false],
                            ['choice_text' => 'Elle peut être rentable tout en rencontrant des tensions de trésorerie à court terme', 'is_correct' => true],
                            ['choice_text' => 'Sa rentabilité est probablement surestimée, car la liquidité mesure exactement la même chose', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer une entreprise à ses concurrents directs ?',
                        'explanation' => 'Comparer une entreprise à ses concurrents directs permet d’apprécier sa performance et sa structure financière par rapport à des entreprises comparables.',
                        'choices' => [
                            ['choice_text' => 'Pour s’assurer qu’elle applique les mêmes méthodes comptables que ses concurrents', 'is_correct' => false],
                            ['choice_text' => 'Pour apprécier sa performance et sa structure financière par rapport à des entreprises comparables', 'is_correct' => true],
                            ['choice_text' => 'Pour déterminer la part de marché qu’elle détient dans son secteur d’activité', 'is_correct' => false],
                            ['choice_text' => 'Pour prévoir à quel moment elle sera rachetée par un concurrent direct', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a une marge nette de 8 % alors que la moyenne du secteur est de 5 %. Que peut-on raisonnablement observer ?',
                        'explanation' => 'Sa rentabilité nette est supérieure à la moyenne du secteur sur cet indicateur précis, sans que cela permette de conclure sur d’autres dimensions.',
                        'choices' => [
                            ['choice_text' => 'Sa rentabilité nette est supérieure à la moyenne du secteur sur cet indicateur', 'is_correct' => true],
                            ['choice_text' => 'Son risque financier est inférieur à celui de la moyenne du secteur', 'is_correct' => false],
                            ['choice_text' => 'Sa liquidité est supérieure à celle de la moyenne du secteur', 'is_correct' => false],
                            ['choice_text' => 'Sa croissance du chiffre d’affaires dépasse celle de la moyenne du secteur d’activité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les méthodes comptables peuvent-elles affecter les comparaisons financières ?',
                        'explanation' => 'Des méthodes comptables différentes peuvent influencer la présentation ou la mesure de certains éléments financiers, rendant les comparaisons moins directes.',
                        'choices' => [
                            ['choice_text' => 'Les méthodes comptables déterminent le montant réel de la trésorerie de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Des méthodes différentes peuvent influencer la présentation ou la mesure de certains éléments financiers', 'is_correct' => true],
                            ['choice_text' => 'Les méthodes comptables modifient le chiffre d’affaires encaissé auprès des clients', 'is_correct' => false],
                            ['choice_text' => 'Les normes comptables interdisent la comparaison entre entreprises de pays différents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche fournit généralement une analyse financière plus fiable ?',
                        'explanation' => 'Combiner plusieurs états financiers, ratios, tendances et comparaisons sectorielles offre une vision plus complète qu’un indicateur isolé.',
                        'choices' => [
                            ['choice_text' => 'Se concentrer sur le bénéfice net, indicateur le plus complet de l’année', 'is_correct' => false],
                            ['choice_text' => 'Retenir le ratio le plus favorable à l’entreprise pour la période', 'is_correct' => false],
                            ['choice_text' => 'Combiner plusieurs états financiers, ratios, tendances et comparaisons sectorielles', 'is_correct' => true],
                            ['choice_text' => 'S’appuyer sur la trésorerie finale de l’année pour juger l’ensemble de la situation financière', 'is_correct' => false],
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
