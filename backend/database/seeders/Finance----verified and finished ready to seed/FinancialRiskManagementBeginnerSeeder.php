<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialRiskManagementBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-risk-management')->firstOrFail();

        $quizSettings = [
            ['duration' => 10, 'passing_score' => 80],
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
                'title' => 'Introduction à la gestion des risques financiers',
                'description' => 'Introduction à la gestion des risques financiers',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un risque financier ?',
                        'explanation' => 'Un risque financier correspond à la possibilité qu’un événement entraîne une perte ou un résultat différent de celui attendu.',
                        'choices' => [
                            ['choice_text' => 'La certitude qu’un événement financier entraîne une perte pour l’entreprise à une date connue', 'is_correct' => false],
                            ['choice_text' => 'La possibilité qu’un événement financier entraîne une perte ou un résultat différent de celui attendu', 'is_correct' => true],
                            ['choice_text' => 'L’écart constaté après coup entre le budget prévisionnel et les comptes réellement publiés', 'is_correct' => false],
                            ['choice_text' => 'La baisse constatée du cours d’une action, une fois la perte réalisée et enregistrée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal de la gestion des risques financiers ?',
                        'explanation' => 'La gestion des risques consiste notamment à identifier, mesurer et maîtriser les risques susceptibles d’affecter les résultats financiers.',
                        'choices' => [
                            ['choice_text' => 'Prévoir avec précision les cours futurs des marchés afin de réaliser des gains réguliers', 'is_correct' => false],
                            ['choice_text' => 'Maximiser le rendement des placements en acceptant le niveau de risque le plus élevé possible', 'is_correct' => false],
                            ['choice_text' => 'Contrôler la conformité des états comptables avec les normes avant leur publication aux actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Identifier, mesurer et maîtriser les risques susceptibles d’affecter les résultats financiers', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le risque de marché est principalement lié à :',
                        'explanation' => 'Le risque de marché provient notamment des variations défavorables des taux, devises, actions ou matières premières.',
                        'choices' => [
                            ['choice_text' => 'L’évolution défavorable de variables comme les taux, devises, actions ou matières premières', 'is_correct' => true],
                            ['choice_text' => 'L’incapacité d’un emprunteur à rembourser ses dettes dans les délais prévus par le contrat', 'is_correct' => false],
                            ['choice_text' => 'L’impossibilité de vendre un actif rapidement sans accepter une forte baisse de son prix', 'is_correct' => false],
                            ['choice_text' => 'Les pertes causées par des erreurs humaines, des pannes informatiques ou des fraudes internes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de crédit ?',
                        'explanation' => 'Le risque de crédit est le risque qu’un emprunteur ou une contrepartie ne respecte pas ses obligations.',
                        'choices' => [
                            ['choice_text' => 'Le risque que les taux d’intérêt évoluent défavorablement pendant la durée d’un prêt', 'is_correct' => false],
                            ['choice_text' => 'Le risque de ne pas pouvoir vendre rapidement un actif sans perdre de valeur', 'is_correct' => false],
                            ['choice_text' => 'Le risque qu’un emprunteur ou une contrepartie ne respecte pas ses obligations', 'is_correct' => true],
                            ['choice_text' => 'Le risque de pertes liées à des processus internes ou à des systèmes défaillants', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le risque de liquidité correspond notamment au risque :',
                        'explanation' => 'Le risque de liquidité apparaît lorsqu’une entité ne dispose pas de suffisamment de liquidités pour honorer ses obligations à temps.',
                        'choices' => [
                            ['choice_text' => 'De subir une perte parce que le cours d’un actif détenu évolue de façon défavorable', 'is_correct' => false],
                            ['choice_text' => 'De subir des pertes à cause de systèmes informatiques ou de processus internes défaillants', 'is_correct' => false],
                            ['choice_text' => 'De voir un emprunteur ne pas rembourser une dette à son échéance contractuelle', 'is_correct' => false],
                            ['choice_text' => 'De ne pas disposer de suffisamment de liquidités pour honorer ses obligations à temps', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle identifier ses risques financiers ?',
                        'explanation' => 'L’identification permet de comprendre les menaces potentielles et de mettre en place des mesures adaptées.',
                        'choices' => [
                            ['choice_text' => 'Pour prévoir exactement la date et le montant des pertes qui surviendront dans l’année', 'is_correct' => false],
                            ['choice_text' => 'Pour comprendre les menaces potentielles et mettre en place des mesures adaptées', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire le montant des impôts dus en déduisant chaque risque identifié du résultat', 'is_correct' => false],
                            ['choice_text' => 'Pour être assuré que les risques recensés ne se réaliseront plus par la suite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle action fait partie du processus de gestion des risques ?',
                        'explanation' => 'L’évaluation de la probabilité et de l’impact aide à mesurer l’importance des risques.',
                        'choices' => [
                            ['choice_text' => 'Calculer le bénéfice net après impôt de chaque exercice comptable', 'is_correct' => false],
                            ['choice_text' => 'Recruter le personnel du service commercial pour développer les ventes', 'is_correct' => false],
                            ['choice_text' => 'Évaluer la probabilité et l’impact des événements de risque', 'is_correct' => true],
                            ['choice_text' => 'Fixer le prix de vente des produits en fonction des coûts de production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie réduire un risque ?',
                        'explanation' => 'Réduire un risque consiste à diminuer sa probabilité ou son impact par des mesures adaptées.',
                        'choices' => [
                            ['choice_text' => 'Mettre en place des mesures permettant de diminuer sa probabilité ou son impact', 'is_correct' => true],
                            ['choice_text' => 'Décider d’accepter le risque en connaissance de cause sans engager d’action particulière', 'is_correct' => false],
                            ['choice_text' => 'Renoncer entièrement à l’activité concernée afin que le risque ne puisse plus exister', 'is_correct' => false],
                            ['choice_text' => 'Évaluer le risque une fois pour toutes puis l’inscrire dans un registre sans le suivre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi est-il impossible de supprimer tous les risques financiers ?',
                        'explanation' => 'L’environnement économique et financier comporte toujours une part d’incertitude.',
                        'choices' => [
                            ['choice_text' => 'Parce que seuls les risques de marché peuvent être mesurés, les autres étant impossibles à évaluer', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’environnement économique et financier comporte toujours une part d’incertitude', 'is_correct' => true],
                            ['choice_text' => 'Parce que supprimer un risque coûte toujours plus cher que la perte maximale qu’il pourrait causer', 'is_correct' => false],
                            ['choice_text' => 'Parce que les décisions de gestion n’ont d’effet que sur les coûts et jamais sur les risques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément permet de hiérarchiser les risques ?',
                        'explanation' => 'La probabilité d’occurrence et l’impact potentiel permettent de hiérarchiser les risques.',
                        'choices' => [
                            ['choice_text' => 'Leur ancienneté dans le registre des risques de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Leur appartenance à la catégorie de marché, de crédit ou de liquidité', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de fois où ils ont été cités dans les rapports de la direction', 'is_correct' => false],
                            ['choice_text' => 'Leur probabilité d’occurrence et leur impact potentiel', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Risque de marché et fluctuations financières',
                'description' => 'Risque de marché et fluctuations financières',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le risque de taux d’intérêt ?',
                        'explanation' => 'Le risque de taux correspond au risque qu’une variation des taux affecte défavorablement la valeur ou les coûts financiers.',
                        'choices' => [
                            ['choice_text' => 'Le risque qu’une variation des taux affecte défavorablement la valeur ou les coûts financiers', 'is_correct' => true],
                            ['choice_text' => 'Le risque qu’une variation des cours de change entraîne une perte sur les opérations en devises', 'is_correct' => false],
                            ['choice_text' => 'Le risque qu’une baisse du cours des actions réduise la valeur d’un portefeuille d’investissement', 'is_correct' => false],
                            ['choice_text' => 'Le risque qu’une variation du prix du pétrole ou du blé modifie les coûts de production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de change ?',
                        'explanation' => 'Le risque de change provient des variations des taux de change entre différentes monnaies.',
                        'choices' => [
                            ['choice_text' => 'Le risque de perte lié aux variations des taux d’intérêt appliqués aux emprunts d’une entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le risque de perte lié à la hausse générale des prix des biens et services sur plusieurs années', 'is_correct' => false],
                            ['choice_text' => 'Le risque de perte lié aux variations des taux de change entre différentes monnaies', 'is_correct' => true],
                            ['choice_text' => 'Le risque de perte lié à la baisse du prix des matières premières utilisées dans la production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise européenne doit payer un fournisseur américain en dollars dans trois mois. Quel risque peut-elle subir ?',
                        'explanation' => 'La variation du taux de change euro-dollar peut modifier le coût du paiement en euros.',
                        'choices' => [
                            ['choice_text' => 'Une variation défavorable du taux d’intérêt de la zone euro', 'is_correct' => false],
                            ['choice_text' => 'Une baisse du cours de bourse de l’entreprise américaine', 'is_correct' => false],
                            ['choice_text' => 'Un défaut de paiement de la part du fournisseur américain', 'is_correct' => false],
                            ['choice_text' => 'Une variation défavorable du taux de change euro-dollar', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des taux peut être défavorable à une entreprise fortement endettée à taux variable parce que :',
                        'explanation' => 'Une hausse des taux variables peut augmenter les charges d’intérêts.',
                        'choices' => [
                            ['choice_text' => 'Le capital restant dû est réévalué à la hausse', 'is_correct' => false],
                            ['choice_text' => 'Ses charges d’intérêts peuvent augmenter', 'is_correct' => true],
                            ['choice_text' => 'Ses ventes baissent dans la même proportion que les taux', 'is_correct' => false],
                            ['choice_text' => 'Ses actionnaires reçoivent des dividendes plus faibles par obligation légale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le risque lié au prix d’une matière première concerne principalement :',
                        'explanation' => 'Les entreprises dont les coûts ou revenus dépendent fortement d’une matière première sont exposées à ses variations de prix.',
                        'choices' => [
                            ['choice_text' => 'Les entreprises qui détiennent une part importante de leur trésorerie sous forme de dépôts bancaires', 'is_correct' => false],
                            ['choice_text' => 'Les entreprises qui réalisent la plupart de leurs ventes à des clients situés à l’étranger', 'is_correct' => false],
                            ['choice_text' => 'Les entreprises dont les coûts ou revenus dépendent fortement de cette matière première', 'is_correct' => true],
                            ['choice_text' => 'Les entreprises dont le financement repose principalement sur des emprunts à taux variable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une variation du cours d’une action peut-elle créer un risque pour un investisseur ?',
                        'explanation' => 'Une baisse du cours peut entraîner une perte de valeur du portefeuille.',
                        'choices' => [
                            ['choice_text' => 'Elle peut entraîner une perte de valeur du portefeuille', 'is_correct' => true],
                            ['choice_text' => 'Elle modifie le taux d’intérêt payé par l’émetteur sur sa dette', 'is_correct' => false],
                            ['choice_text' => 'Elle oblige l’entreprise émettrice à racheter ses titres à leur prix d’achat', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche l’investisseur de vendre ses actions avant la fin de l’année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la volatilité mesure généralement ?',
                        'explanation' => 'La volatilité mesure l’ampleur des variations d’un prix ou d’un rendement autour de son niveau moyen.',
                        'choices' => [
                            ['choice_text' => 'Le niveau moyen du prix d’un actif observé sur une longue période d’observation', 'is_correct' => false],
                            ['choice_text' => 'L’ampleur des variations d’un prix ou d’un rendement autour de son niveau moyen', 'is_correct' => true],
                            ['choice_text' => 'La facilité avec laquelle un actif peut être vendu rapidement sans perte de valeur', 'is_correct' => false],
                            ['choice_text' => 'Le sens général de la tendance d’un prix, orientée à la hausse ou à la baisse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un actif très volatil présente généralement :',
                        'explanation' => 'Un actif très volatil connaît des variations de prix plus importantes et une plus grande incertitude sur son rendement.',
                        'choices' => [
                            ['choice_text' => 'Des variations de prix plus importantes mais une incertitude plus faible sur son rendement', 'is_correct' => false],
                            ['choice_text' => 'Un rendement moyen plus faible et une exposition réduite aux fluctuations du marché', 'is_correct' => false],
                            ['choice_text' => 'Un prix de marché plus élevé et un rendement plus stable d’une période à l’autre', 'is_correct' => false],
                            ['choice_text' => 'Des variations de prix plus importantes et une incertitude plus élevée sur son rendement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel instrument peut être utilisé pour se protéger contre certains risques de marché ?',
                        'explanation' => 'Les produits dérivés tels que les contrats à terme ou les options peuvent servir à couvrir certaines expositions.',
                        'choices' => [
                            ['choice_text' => 'Un produit dérivé tel qu’un contrat à terme ou une option', 'is_correct' => true],
                            ['choice_text' => 'Un document comptable tel qu’un bilan ou un compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Un titre de propriété tel qu’une action ordinaire ou une part de société', 'is_correct' => false],
                            ['choice_text' => 'Un crédit commercial tel qu’un délai de paiement accordé à un client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversification peut-elle réduire certains risques de marché ?',
                        'explanation' => 'Différents actifs peuvent réagir différemment aux mêmes événements économiques.',
                        'choices' => [
                            ['choice_text' => 'Les performances des actifs d’un même portefeuille se compensent exactement, ce qui fait disparaître les variations de valeur', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’actifs détenus augmente le rendement attendu de chaque actif pris séparément dans le portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Les performances de différents actifs ne réagissent pas nécessairement de la même manière aux événements économiques', 'is_correct' => true],
                            ['choice_text' => 'Les frais de gestion sont répartis sur plusieurs actifs, ce qui diminue mécaniquement la volatilité de chacun d’eux', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Risque de crédit et risque de contrepartie',
                'description' => 'Risque de crédit et risque de contrepartie',
                'questions' => [
                    [
                        'question' => 'Quel est le principal danger lorsqu’une entreprise accorde un crédit à un client ?',
                        'explanation' => 'Le client peut ne pas rembourser tout ou partie de la somme due.',
                        'choices' => [
                            ['choice_text' => 'Que le client revende les produits livrés à un prix inférieur à leur coût', 'is_correct' => false],
                            ['choice_text' => 'Que le taux d’intérêt du marché baisse pendant la durée du crédit accordé', 'is_correct' => false],
                            ['choice_text' => 'Que le client règle sa facture en devises plutôt qu’en euros', 'is_correct' => false],
                            ['choice_text' => 'Que le client ne rembourse pas tout ou partie de la somme due', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une contrepartie dans une opération financière ?',
                        'explanation' => 'La contrepartie est l’autre partie engagée dans la transaction ou le contrat financier.',
                        'choices' => [
                            ['choice_text' => 'L’intermédiaire financier qui exécute l’ordre pour le compte de l’investisseur', 'is_correct' => false],
                            ['choice_text' => 'L’autre partie engagée dans la transaction ou le contrat financier', 'is_correct' => true],
                            ['choice_text' => 'L’organisme public qui supervise les marchés et contrôle la transaction', 'is_correct' => false],
                            ['choice_text' => 'La garantie remise par l’emprunteur pour couvrir les sommes empruntées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur peut aider à apprécier la capacité d’un emprunteur à rembourser sa dette ?',
                        'explanation' => 'Le niveau de dette doit notamment être comparé aux revenus ou à la capacité de génération de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Le niveau de ses ventes comparé à celles de ses concurrents sur le même marché', 'is_correct' => false],
                            ['choice_text' => 'Le montant de son capital social comparé au nombre de ses actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de dette comparé à ses revenus ou à sa capacité de génération de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Le rendement de ses actions comparé à la moyenne de l’indice boursier de référence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les banques analysent-elles la situation financière d’un emprunteur ?',
                        'explanation' => 'Cette analyse aide à apprécier sa capacité et sa probabilité de remboursement.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer sa capacité et sa probabilité de remboursement', 'is_correct' => true],
                            ['choice_text' => 'Pour estimer la valeur de revente de l’entreprise à ses actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le montant des dividendes qu’il pourra verser', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer la volatilité des cours de ses actions cotées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un défaut de paiement ?',
                        'explanation' => 'Un défaut de paiement correspond au non-respect d’une obligation de paiement selon les conditions prévues.',
                        'choices' => [
                            ['choice_text' => 'La différence entre le montant emprunté et le montant total remboursé avec les intérêts', 'is_correct' => false],
                            ['choice_text' => 'Le non-respect d’une obligation de paiement à la date ou selon les conditions prévues', 'is_correct' => true],
                            ['choice_text' => 'La baisse de valeur d’un actif détenu par un emprunteur au cours de la durée du prêt', 'is_correct' => false],
                            ['choice_text' => 'Le refus d’une banque d’accorder un nouveau crédit à un client jugé trop risqué', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède beaucoup de créances clients. Quel risque peut augmenter ?',
                        'explanation' => 'Un volume élevé de créances peut accroître le risque de retard ou de non-paiement.',
                        'choices' => [
                            ['choice_text' => 'Le risque que la valeur des stocks diminue à cause d’une baisse des prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Le risque que les fournisseurs exigent un paiement plus rapide de leurs factures', 'is_correct' => false],
                            ['choice_text' => 'Le risque que la valeur des immobilisations baisse en raison de leur usure', 'is_correct' => false],
                            ['choice_text' => 'Le risque que certains clients paient en retard ou ne paient pas', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier l’historique de paiement d’un client peut-il être utile ?',
                        'explanation' => 'L’historique fournit des informations sur le comportement de paiement passé du client.',
                        'choices' => [
                            ['choice_text' => 'Il fournit des informations sur son comportement de paiement passé', 'is_correct' => true],
                            ['choice_text' => 'Il prouve que le client remboursera ses prochaines factures', 'is_correct' => false],
                            ['choice_text' => 'Il informe sur le niveau de ses stocks et de ses investissements en cours', 'is_correct' => false],
                            ['choice_text' => 'Il révèle le taux de croissance probable du marché dans lequel il opère', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut faire une entreprise pour limiter le risque de crédit client ?',
                        'explanation' => 'Des limites de crédit et un suivi régulier des créances peuvent contribuer à réduire le risque.',
                        'choices' => [
                            ['choice_text' => 'Augmenter les délais de paiement accordés pour fidéliser la clientèle', 'is_correct' => false],
                            ['choice_text' => 'Facturer les clients en devises pour réduire le risque de change', 'is_correct' => false],
                            ['choice_text' => 'Définir des limites de crédit et surveiller régulièrement les créances', 'is_correct' => true],
                            ['choice_text' => 'Diversifier ses placements financiers et surveiller la volatilité des marchés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une garantie donnée par un emprunteur peut-elle réduire le risque du prêteur ?',
                        'explanation' => 'Une garantie peut contribuer à réduire la perte en cas de défaut, selon sa valeur et sa réalisation.',
                        'choices' => [
                            ['choice_text' => 'Non, elle ne réduit que la probabilité de défaut mais n’a pas d’effet sur la perte subie par le prêteur', 'is_correct' => false],
                            ['choice_text' => 'Oui, car elle empêche l’emprunteur de faire défaut tant que la garantie reste enregistrée', 'is_correct' => false],
                            ['choice_text' => 'Non, car le prêteur ne peut pas vendre la garantie même si l’emprunteur ne rembourse plus', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle peut contribuer à réduire la perte en cas de défaut selon sa valeur et sa réalisation', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est important dans la gestion du risque de crédit ?',
                        'explanation' => 'Éviter une concentration excessive sur une seule contrepartie réduit l’exposition à un défaut isolé.',
                        'choices' => [
                            ['choice_text' => 'Concentrer les crédits sur les clients dont le chiffre d’affaires est le plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Ne pas concentrer excessivement les expositions sur une seule contrepartie', 'is_correct' => true],
                            ['choice_text' => 'Fixer le même taux d’intérêt pour l’ensemble des emprunteurs, quelle que soit leur solvabilité', 'is_correct' => false],
                            ['choice_text' => 'Accorder les crédits en fonction de la durée de la relation commerciale plutôt que de la solvabilité', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Risque de liquidité et trésorerie',
                'description' => 'Risque de liquidité et trésorerie',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la liquidité financière ?',
                        'explanation' => 'La liquidité correspond à la capacité à disposer rapidement de ressources pour faire face aux obligations financières.',
                        'choices' => [
                            ['choice_text' => 'La capacité à générer un bénéfice net positif sur plusieurs exercices consécutifs', 'is_correct' => false],
                            ['choice_text' => 'La capacité à rembourser l’ensemble de ses dettes à long terme en cas de liquidation', 'is_correct' => false],
                            ['choice_text' => 'La capacité à disposer rapidement de ressources pour faire face aux obligations financières', 'is_correct' => true],
                            ['choice_text' => 'La capacité à vendre ses produits à un prix supérieur à celui de ses concurrents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise peut-elle être rentable tout en ayant un problème de liquidité ?',
                        'explanation' => 'Une entreprise peut être rentable mais manquer temporairement de liquidités en raison du décalage entre produits et encaissements.',
                        'choices' => [
                            ['choice_text' => 'Oui, car le bénéfice comptable ne signifie pas nécessairement que les liquidités sont immédiatement disponibles', 'is_correct' => true],
                            ['choice_text' => 'Non, car un bénéfice comptable positif se traduit forcément par un excédent équivalent de trésorerie disponible', 'is_correct' => false],
                            ['choice_text' => 'Non, car une entreprise qui réalise un bénéfice dispose obligatoirement de réserves en banque', 'is_correct' => false],
                            ['choice_text' => 'Oui, car une entreprise rentable est dispensée de rembourser ses dettes à l’échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut fortement consommer la trésorerie d’une entreprise en croissance ?',
                        'explanation' => 'Une croissance rapide peut augmenter fortement le besoin en fonds de roulement.',
                        'choices' => [
                            ['choice_text' => 'Une hausse importante du capital social de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation importante du besoin en fonds de roulement', 'is_correct' => true],
                            ['choice_text' => 'Une réduction importante des délais de paiement accordés aux clients', 'is_correct' => false],
                            ['choice_text' => 'Une baisse importante des charges financières versées aux prêteurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le besoin en fonds de roulement ?',
                        'explanation' => 'Le besoin en fonds de roulement résulte notamment des décalages entre encaissements et décaissements d’exploitation.',
                        'choices' => [
                            ['choice_text' => 'Le besoin de financement lié notamment à l’achat de bâtiments, de machines et d’autres immobilisations', 'is_correct' => false],
                            ['choice_text' => 'Le besoin de financement lié notamment au remboursement des emprunts bancaires de long terme', 'is_correct' => false],
                            ['choice_text' => 'Le besoin de financement lié notamment au versement des dividendes aux actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Le besoin de financement lié notamment aux décalages entre encaissements et décaissements d’exploitation', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle prévoir ses flux de trésorerie ?',
                        'explanation' => 'La prévision des flux permet d’anticiper les périodes de besoin ou d’excédent de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Pour anticiper les périodes de besoin ou d’excédent de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Pour déterminer le résultat fiscal servant au calcul de l’impôt sur les sociétés', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer la rentabilité des capitaux investis par les actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer la valeur boursière de l’entreprise à la clôture de l’exercice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut améliorer la liquidité d’une entreprise ?',
                        'explanation' => 'Des encaissements clients plus rapides améliorent généralement la disponibilité de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation des créances sans encaissement', 'is_correct' => false],
                            ['choice_text' => 'Une hausse permanente des stocks', 'is_correct' => false],
                            ['choice_text' => 'Une accélération des encaissements clients', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation des dépenses sans financement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver une réserve de liquidité peut-il être utile ?',
                        'explanation' => 'Une réserve de liquidité peut aider à faire face aux imprévus et aux périodes de tension.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de maximiser le rendement de l’entreprise grâce à des placements à long terme', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de réduire le montant des impôts dus grâce à la constitution de provisions', 'is_correct' => false],
                            ['choice_text' => 'Elle permet d’éliminer le risque de taux sur les emprunts à taux variable de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de faire face à des besoins imprévus ou à des périodes de tension de trésorerie', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une crise de liquidité ?',
                        'explanation' => 'Une crise de liquidité survient lorsqu’une entité rencontre des difficultés à obtenir suffisamment de liquidités pour honorer ses obligations.',
                        'choices' => [
                            ['choice_text' => 'Une situation dans laquelle une entité voit la valeur de ses actifs financiers baisser fortement sur les marchés', 'is_correct' => false],
                            ['choice_text' => 'Une situation dans laquelle une entité rencontre des difficultés à obtenir suffisamment de liquidités pour honorer ses obligations', 'is_correct' => true],
                            ['choice_text' => 'Une situation dans laquelle une entité ne parvient pas à dégager de bénéfice comptable sur plusieurs exercices', 'is_correct' => false],
                            ['choice_text' => 'Une situation dans laquelle une entité subit des pertes causées par des pannes informatiques ou des fraudes internes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur peut être utilisé pour apprécier la liquidité à court terme ?',
                        'explanation' => 'Le ratio de liquidité générale est un indicateur couramment utilisé pour apprécier la capacité à couvrir les obligations à court terme.',
                        'choices' => [
                            ['choice_text' => 'Le ratio de rentabilité des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Le ratio d’endettement à long terme', 'is_correct' => false],
                            ['choice_text' => 'Le ratio de liquidité générale', 'is_correct' => true],
                            ['choice_text' => 'La marge nette sur le chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le financement à court terme peut-il créer un risque ?',
                        'explanation' => 'Le financement à court terme peut nécessiter un renouvellement fréquent et exposer l’entreprise à un risque de refinancement.',
                        'choices' => [
                            ['choice_text' => 'L’entreprise peut devoir refinancer fréquemment ses besoins et être exposée à une disponibilité insuffisante des financements', 'is_correct' => true],
                            ['choice_text' => 'L’entreprise s’expose surtout à une baisse de la valeur de ses actions, indépendamment de ses échéances de remboursement', 'is_correct' => false],
                            ['choice_text' => 'L’entreprise supporte un taux d’intérêt toujours plus élevé qu’avec un financement long, ce qui limite ses bénéfices', 'is_correct' => false],
                            ['choice_text' => 'L’entreprise doit conserver les fonds empruntés sur des comptes bloqués et ne peut plus financer son exploitation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Risque opérationnel et risque financier',
                'description' => 'Risque opérationnel et risque financier',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le risque opérationnel ?',
                        'explanation' => 'Le risque opérationnel comprend notamment les pertes résultant de processus, personnes, systèmes ou événements externes défaillants.',
                        'choices' => [
                            ['choice_text' => 'Le risque de pertes résultant notamment de variations des taux, des devises ou des cours boursiers', 'is_correct' => false],
                            ['choice_text' => 'Le risque de pertes résultant notamment de processus, personnes, systèmes ou événements externes défaillants', 'is_correct' => true],
                            ['choice_text' => 'Le risque de pertes résultant notamment du non-remboursement de dettes par des emprunteurs ou des clients', 'is_correct' => false],
                            ['choice_text' => 'Le risque de pertes résultant notamment d’une insuffisance de trésorerie pour régler les dettes à l’échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une panne informatique majeure peut-elle constituer un risque financier ?',
                        'explanation' => 'Une panne informatique peut interrompre l’activité et provoquer des pertes financières.',
                        'choices' => [
                            ['choice_text' => 'Non, car une panne informatique est un problème technique sans conséquence sur les comptes de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Non, car seules les variations de cours et de taux sont classées parmi les risques financiers', 'is_correct' => false],
                            ['choice_text' => 'Oui, car elle déclenche immédiatement un risque de taux sur l’ensemble des dettes de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Oui, car elle peut interrompre l’activité et provoquer des pertes financières', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contrôles internes sont-ils importants ?',
                        'explanation' => 'Les contrôles internes contribuent à prévenir ou détecter les erreurs, fraudes et anomalies.',
                        'choices' => [
                            ['choice_text' => 'Ils contribuent à prévenir ou détecter les erreurs, fraudes et anomalies', 'is_correct' => true],
                            ['choice_text' => 'Ils contribuent à fixer le prix des produits et à négocier les conditions avec les clients', 'is_correct' => false],
                            ['choice_text' => 'Ils contribuent à prévoir l’évolution des taux d’intérêt et des cours de change futurs', 'is_correct' => false],
                            ['choice_text' => 'Ils contribuent à réduire l’impôt dû en optimisant la présentation des comptes annuels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fraude interne peut-elle créer un risque financier ?',
                        'explanation' => 'Une fraude peut entraîner des pertes directes ainsi que des sanctions et des coûts de réputation.',
                        'choices' => [
                            ['choice_text' => 'Non, car une fraude interne relève du droit pénal et n’a pas de conséquence sur les comptes de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Non, car seuls les événements extérieurs à l’entreprise peuvent être à l’origine de pertes financières', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle peut entraîner des pertes directes, des sanctions et des coûts de réputation', 'is_correct' => true],
                            ['choice_text' => 'Oui, mais son effet se limite à une baisse de la valeur comptable des stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quels éléments peuvent réduire certains risques opérationnels ?',
                        'explanation' => 'Des procédures claires, des contrôles internes et des plans de continuité permettent de réduire certains risques opérationnels.',
                        'choices' => [
                            ['choice_text' => 'Des couvertures de change, des options et des contrats à terme', 'is_correct' => false],
                            ['choice_text' => 'Des garanties réelles, des limites de crédit et un suivi des créances', 'is_correct' => false],
                            ['choice_text' => 'Des réserves de trésorerie, des lignes de crédit confirmées et un suivi des flux', 'is_correct' => false],
                            ['choice_text' => 'Des procédures claires, des contrôles internes et des plans de continuité', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un plan de continuité d’activité ?',
                        'explanation' => 'Un plan de continuité regroupe des mesures destinées à maintenir ou rétablir les activités essentielles après une perturbation.',
                        'choices' => [
                            ['choice_text' => 'Un ensemble de mesures permettant de répartir les placements entre plusieurs actifs pour limiter les pertes', 'is_correct' => false],
                            ['choice_text' => 'Un ensemble de mesures permettant de maintenir ou rétablir les activités essentielles après une perturbation', 'is_correct' => true],
                            ['choice_text' => 'Un ensemble de mesures permettant de fixer à l’avance le prix d’achat ou de vente d’un actif futur', 'is_correct' => false],
                            ['choice_text' => 'Un ensemble de règles permettant de limiter le montant de crédit accordé à chaque client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la dépendance à un seul fournisseur peut-elle être risquée ?',
                        'explanation' => 'Une interruption chez un fournisseur unique peut perturber fortement l’activité.',
                        'choices' => [
                            ['choice_text' => 'Les factures de ce fournisseur doivent être réglées avant celles des autres créanciers', 'is_correct' => false],
                            ['choice_text' => 'Le fournisseur peut exiger une participation au capital de l’entreprise cliente', 'is_correct' => false],
                            ['choice_text' => 'Une interruption chez ce fournisseur peut perturber fortement l’activité', 'is_correct' => true],
                            ['choice_text' => 'Le risque de taux sur la dette de l’entreprise augmente avec le nombre de commandes passées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer certaines fonctions financières est-il utile ?',
                        'explanation' => 'La séparation des tâches peut réduire les risques d’erreur et de fraude.',
                        'choices' => [
                            ['choice_text' => 'La séparation des tâches peut réduire les risques d’erreur et de fraude', 'is_correct' => true],
                            ['choice_text' => 'La séparation des tâches peut réduire le risque de change sur les achats en devises', 'is_correct' => false],
                            ['choice_text' => 'La séparation des tâches peut diminuer la volatilité des cours des actions détenues', 'is_correct' => false],
                            ['choice_text' => 'La séparation des tâches peut améliorer la solvabilité des clients de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel événement externe peut provoquer un risque opérationnel ?',
                        'explanation' => 'Une catastrophe naturelle peut perturber les activités et créer un risque opérationnel.',
                        'choices' => [
                            ['choice_text' => 'Une baisse du taux directeur décidée par la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Une catastrophe naturelle perturbant les activités de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Un défaut de paiement d’un client important de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une dépréciation de la monnaie dans laquelle l’entreprise facture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est préférable face au risque opérationnel ?',
                        'explanation' => 'Une bonne approche consiste à identifier les scénarios, évaluer leur impact et préparer des contrôles et plans de réponse.',
                        'choices' => [
                            ['choice_text' => 'Mesurer le risque de marché à l’aide d’indicateurs de cours puis considérer le sujet comme réglé', 'is_correct' => false],
                            ['choice_text' => 'Confier l’ensemble des contrôles à un seul responsable pour accélérer les décisions et limiter les coûts', 'is_correct' => false],
                            ['choice_text' => 'Se limiter aux incidents déjà survenus et supposer que les événements futurs leur ressembleront', 'is_correct' => false],
                            ['choice_text' => 'Identifier les scénarios possibles, évaluer leur impact et préparer des contrôles et plans de réponse', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Mesure et évaluation des risques financiers',
                'description' => 'Mesure et évaluation des risques financiers',
                'questions' => [
                    [
                        'question' => 'Pourquoi mesure-t-on les risques financiers ?',
                        'explanation' => 'La mesure permet d’estimer leur importance et d’aider à prendre des décisions adaptées.',
                        'choices' => [
                            ['choice_text' => 'Pour estimer leur importance et aider à prendre des décisions adaptées', 'is_correct' => true],
                            ['choice_text' => 'Pour prévoir avec exactitude le montant des pertes de la prochaine année', 'is_correct' => false],
                            ['choice_text' => 'Pour fixer le rendement que doivent obtenir les actionnaires de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour obtenir une réduction des impôts proportionnelle au niveau de risque mesuré', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une probabilité de perte ?',
                        'explanation' => 'Elle représente une estimation de la possibilité qu’un événement entraîne une perte.',
                        'choices' => [
                            ['choice_text' => 'Une estimation du montant maximal qu’un événement peut faire perdre', 'is_correct' => false],
                            ['choice_text' => 'Une estimation de la durée nécessaire pour retrouver le niveau de revenu antérieur', 'is_correct' => false],
                            ['choice_text' => 'Une estimation de la possibilité qu’un événement entraîne une perte', 'is_correct' => true],
                            ['choice_text' => 'Une estimation de la valeur actuelle des pertes déjà enregistrées en comptabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’impact d’un risque ?',
                        'explanation' => 'L’impact représente l’ampleur des conséquences lorsque le risque se réalise.',
                        'choices' => [
                            ['choice_text' => 'La fréquence à laquelle l’événement de risque se produit sur une période donnée', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de risque que l’organisation accepte de supporter pour atteindre ses objectifs', 'is_correct' => false],
                            ['choice_text' => 'Le délai écoulé entre la détection du risque et la décision de la direction', 'is_correct' => false],
                            ['choice_text' => 'L’ampleur des conséquences financières ou opérationnelles si le risque se réalise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un risque ayant une faible probabilité mais un impact extrêmement élevé doit-il être ignoré ?',
                        'explanation' => 'Un risque rare peut néanmoins nécessiter des mesures lorsque son impact potentiel est très élevé.',
                        'choices' => [
                            ['choice_text' => 'Oui, car une probabilité faible suffit à rendre le risque négligeable quelle que soit sa gravité', 'is_correct' => false],
                            ['choice_text' => 'Non, son impact potentiel peut justifier des mesures de prévention ou de protection', 'is_correct' => true],
                            ['choice_text' => 'Oui, car seuls les risques déjà réalisés dans le passé doivent faire l’objet de mesures', 'is_correct' => false],
                            ['choice_text' => 'Non, car il doit être traité avant les risques fréquents, sans considérer son coût de couverture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert une matrice des risques ?',
                        'explanation' => 'Une matrice classe généralement les risques selon leur probabilité et leur impact.',
                        'choices' => [
                            ['choice_text' => 'À répartir les actifs d’un portefeuille selon leur rendement et leur coût', 'is_correct' => false],
                            ['choice_text' => 'À comparer les prévisions de trésorerie avec les encaissements réellement constatés', 'is_correct' => false],
                            ['choice_text' => 'À classer les risques selon leur probabilité et leur impact', 'is_correct' => true],
                            ['choice_text' => 'À fixer les limites de crédit selon la solvabilité de chaque client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un scénario de stress ?',
                        'explanation' => 'Un scénario de stress est une situation défavorable utilisée pour tester la résistance financière.',
                        'choices' => [
                            ['choice_text' => 'Une situation défavorable utilisée pour évaluer la résistance financière d’une entreprise ou d’un portefeuille', 'is_correct' => true],
                            ['choice_text' => 'Une situation moyenne utilisée pour estimer le rendement attendu d’une entreprise ou d’un portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Une situation de marché favorable utilisée pour évaluer la capacité d’une entreprise à investir', 'is_correct' => false],
                            ['choice_text' => 'Un test de conformité utilisé pour vérifier que l’entreprise ou le portefeuille respecte les normes comptables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser plusieurs scénarios de risque ?',
                        'explanation' => 'Plusieurs scénarios permettent d’examiner la sensibilité des résultats à différentes situations possibles.',
                        'choices' => [
                            ['choice_text' => 'Pour choisir la situation la plus probable et ignorer ensuite les autres hypothèses', 'is_correct' => false],
                            ['choice_text' => 'Pour examiner la sensibilité des résultats à différentes situations possibles', 'is_correct' => true],
                            ['choice_text' => 'Pour répartir la responsabilité du risque entre plusieurs services de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour multiplier les couvertures jusqu’à ce que le risque résiduel soit nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelles données permettent d’étudier directement la variabilité passée des rendements d’un investissement ?',
                        'explanation' => 'Une série de rendements historiques permet d’observer leurs fluctuations et de mesurer leur dispersion, notamment par l’écart-type. Cette analyse décrit le passé sans garantir le risque futur.',
                        'choices' => [
                            ['choice_text' => 'Le prix d’achat du titre et sa date d’émission', 'is_correct' => false],
                            ['choice_text' => 'Le dividende versé l’an dernier et la date de son paiement', 'is_correct' => false],
                            ['choice_text' => 'La notoriété de l’émetteur et le nombre de ses clients', 'is_correct' => false],
                            ['choice_text' => 'Les rendements historiques et leur variabilité', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données historiques ne garantissent-elles pas les résultats futurs ?',
                        'explanation' => 'Les conditions économiques et financières peuvent changer avec le temps.',
                        'choices' => [
                            ['choice_text' => 'Les conditions économiques et financières peuvent changer', 'is_correct' => true],
                            ['choice_text' => 'Les rendements passés sont calculés avec des méthodes différentes selon les marchés', 'is_correct' => false],
                            ['choice_text' => 'Les données historiques sont publiées avec plusieurs années de retard par les marchés', 'is_correct' => false],
                            ['choice_text' => 'Les risques mesurés sur le passé disparaissent dès qu’ils sont identifiés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une bonne pratique lors de l’évaluation d’un risque ?',
                        'explanation' => 'Une évaluation robuste utilise plusieurs informations et hypothèses plutôt qu’un seul indicateur.',
                        'choices' => [
                            ['choice_text' => 'Retenir l’indicateur le plus récent et écarter les autres pour obtenir un résultat plus lisible', 'is_correct' => false],
                            ['choice_text' => 'Se fonder sur la moyenne historique et ne plus remettre en cause les hypothèses retenues', 'is_correct' => false],
                            ['choice_text' => 'Utiliser plusieurs informations et hypothèses plutôt que dépendre d’un seul indicateur', 'is_correct' => true],
                            ['choice_text' => 'Utiliser l’indicateur le plus complexe plutôt que de comparer plusieurs sources de données', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Gestion du risque et diversification',
                'description' => 'Gestion du risque et diversification',
                'questions' => [
                    [
                        'question' => 'Quel est le principe fondamental de la diversification ?',
                        'explanation' => 'La diversification consiste à répartir les investissements ou expositions afin de réduire la dépendance à un seul risque.',
                        'choices' => [
                            ['choice_text' => 'Répartir les investissements ou expositions afin d’obtenir un rendement identique sur chaque actif détenu', 'is_correct' => false],
                            ['choice_text' => 'Concentrer les investissements dans les actifs les plus performants afin de maximiser le rendement attendu', 'is_correct' => false],
                            ['choice_text' => 'Réduire le nombre d’actifs détenus afin de simplifier le suivi et de supprimer les frais de gestion', 'is_correct' => false],
                            ['choice_text' => 'Répartir les investissements ou expositions afin de réduire la dépendance à un seul risque', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'La diversification élimine-t-elle tous les risques ?',
                        'explanation' => 'La diversification réduit certains risques, mais elle ne supprime pas tous les risques généraux du marché.',
                        'choices' => [
                            ['choice_text' => 'Oui, car en détenant de nombreux actifs différents les pertes disparaissent de l’ensemble du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Non, elle réduit certains risques mais ne supprime pas les risques généraux du marché', 'is_correct' => true],
                            ['choice_text' => 'Non, car elle ne réduit que les risques de change et pas les risques propres à une entreprise', 'is_correct' => false],
                            ['choice_text' => 'Oui, au-delà d’un certain nombre d’actifs le risque de marché devient nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque peut être particulièrement réduit par une bonne diversification ?',
                        'explanation' => 'La diversification peut surtout réduire le risque spécifique lié à une entreprise ou un actif particulier.',
                        'choices' => [
                            ['choice_text' => 'Le risque systématique lié à l’évolution générale de l’économie et des marchés', 'is_correct' => false],
                            ['choice_text' => 'Le risque de taux lié à la politique monétaire de la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Le risque spécifique lié à une entreprise ou un actif particulier', 'is_correct' => true],
                            ['choice_text' => 'Le risque de liquidité lié à l’impossibilité de revendre rapidement un actif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi investir dans plusieurs secteurs peut-il être utile ?',
                        'explanation' => 'Les secteurs peuvent réagir différemment aux conditions économiques.',
                        'choices' => [
                            ['choice_text' => 'Les secteurs peuvent réagir différemment aux conditions économiques', 'is_correct' => true],
                            ['choice_text' => 'Les secteurs d’activité sont soumis aux mêmes règles comptables, ce qui réduit les écarts de performance', 'is_correct' => false],
                            ['choice_text' => 'Les frais de transaction sont plus faibles lorsque l’on détient des actions de secteurs différents', 'is_correct' => false],
                            ['choice_text' => 'Les dividendes versés par les entreprises de secteurs différents sont fiscalement exonérés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’une forte concentration sur une seule entreprise ?',
                        'explanation' => 'Un événement défavorable concernant cette entreprise peut provoquer une perte importante.',
                        'choices' => [
                            ['choice_text' => 'Un coût de transaction qui augmente avec le nombre de titres détenus dans le portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Un événement défavorable concernant cette entreprise peut provoquer une perte importante', 'is_correct' => true],
                            ['choice_text' => 'Une exposition au seul risque de marché général, les risques propres à l’entreprise étant éliminés', 'is_correct' => false],
                            ['choice_text' => 'Une impossibilité de revendre les titres tant que la position représente une part importante du portefeuille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux actifs ayant des comportements différents peuvent-ils améliorer la diversification ?',
                        'explanation' => 'Des actifs dont les rendements ne sont pas fortement corrélés peuvent améliorer la diversification.',
                        'choices' => [
                            ['choice_text' => 'Oui, surtout si les deux actifs appartiennent au même secteur d’activité', 'is_correct' => false],
                            ['choice_text' => 'Non, car la diversification dépend du nombre d’actifs et non de leur comportement', 'is_correct' => false],
                            ['choice_text' => 'Non, car un portefeuille de deux actifs ne peut pas réduire le risque spécifique', 'is_correct' => false],
                            ['choice_text' => 'Oui, surtout si leurs rendements ne sont pas fortement corrélés', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un portefeuille diversifié ?',
                        'explanation' => 'Un portefeuille diversifié répartit les investissements entre plusieurs actifs ou expositions.',
                        'choices' => [
                            ['choice_text' => 'Un ensemble d’investissements répartis entre plusieurs actifs ou expositions', 'is_correct' => true],
                            ['choice_text' => 'Un ensemble d’actions achetées le même jour auprès d’un seul intermédiaire financier', 'is_correct' => false],
                            ['choice_text' => 'Un ensemble de placements garantis par l’État, sans exposition aux marchés', 'is_correct' => false],
                            ['choice_text' => 'Un ensemble d’investissements dont la valeur reste stable d’une année à l’autre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il également surveiller la diversification dans le temps ?',
                        'explanation' => 'Les poids des actifs peuvent évoluer et créer progressivement une concentration excessive.',
                        'choices' => [
                            ['choice_text' => 'Les corrélations entre actifs deviennent nulles avec le temps et rendent la diversification inutile', 'is_correct' => false],
                            ['choice_text' => 'Les actifs moins performants sont retirés du portefeuille par les marchés eux-mêmes au bout de quelques mois', 'is_correct' => false],
                            ['choice_text' => 'Les poids des actifs peuvent évoluer et créer progressivement une concentration excessive', 'is_correct' => true],
                            ['choice_text' => 'Les frais de gestion augmentent chaque année et finissent par dépasser la valeur du portefeuille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie rééquilibrer un portefeuille ?',
                        'explanation' => 'Le rééquilibrage consiste à ajuster les positions afin de revenir vers les proportions souhaitées.',
                        'choices' => [
                            ['choice_text' => 'Ajuster les positions afin de suivre la hausse des actifs qui ont récemment le mieux performé', 'is_correct' => false],
                            ['choice_text' => 'Ajuster les positions afin de vendre chaque titre dès qu’il atteint son prix d’achat initial', 'is_correct' => false],
                            ['choice_text' => 'Ajuster les positions afin de convertir l’ensemble du portefeuille en liquidités à la fin de l’année', 'is_correct' => false],
                            ['choice_text' => 'Ajuster les positions afin de revenir vers les proportions d’investissement souhaitées', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quelle limite faut-il connaître concernant la diversification ?',
                        'explanation' => 'Une diversification excessive peut réduire la concentration sans nécessairement améliorer proportionnellement le rendement.',
                        'choices' => [
                            ['choice_text' => 'Une diversification mondiale supprime le risque de change mais augmente fortement le risque spécifique de chaque entreprise détenue', 'is_correct' => false],
                            ['choice_text' => 'Une diversification excessive peut réduire la concentration du portefeuille sans nécessairement améliorer proportionnellement son rendement', 'is_correct' => true],
                            ['choice_text' => 'Une diversification trop large rend le portefeuille plus exposé à une seule entreprise et accroît donc son risque spécifique', 'is_correct' => false],
                            ['choice_text' => 'Une diversification est inutile dès que le portefeuille contient plus de deux actifs, car le risque ne baisse plus ensuite', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Couverture et instruments de gestion des risques',
                'description' => 'Couverture et instruments de gestion des risques',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une couverture financière ?',
                        'explanation' => 'Une couverture financière vise à réduire l’impact défavorable d’un risque identifié.',
                        'choices' => [
                            ['choice_text' => 'Une stratégie visant à maximiser le rendement d’un portefeuille en acceptant davantage de volatilité', 'is_correct' => false],
                            ['choice_text' => 'Une stratégie visant à répartir les ventes entre plusieurs clients pour limiter le risque d’impayé', 'is_correct' => false],
                            ['choice_text' => 'Une stratégie visant à réduire l’impact financier défavorable d’un risque identifié', 'is_correct' => true],
                            ['choice_text' => 'Une stratégie visant à financer l’activité par des emprunts plutôt que par des capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel instrument peut être utilisé pour fixer à l’avance un prix futur ?',
                        'explanation' => 'Un contrat à terme peut permettre de fixer contractuellement certaines conditions futures.',
                        'choices' => [
                            ['choice_text' => 'Un contrat à terme', 'is_correct' => true],
                            ['choice_text' => 'Un compte à terme', 'is_correct' => false],
                            ['choice_text' => 'Un dépôt de garantie', 'is_correct' => false],
                            ['choice_text' => 'Une assurance-crédit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que confère généralement une option à son acheteur ?',
                        'explanation' => 'Une option donne généralement un droit, mais pas une obligation, d’acheter ou de vendre selon les conditions prévues.',
                        'choices' => [
                            ['choice_text' => 'L’obligation d’acheter ou de vendre un actif à la date d’échéance, quel que soit son cours', 'is_correct' => false],
                            ['choice_text' => 'Le droit, mais pas l’obligation, d’acheter ou de vendre un actif selon des conditions prévues', 'is_correct' => true],
                            ['choice_text' => 'Le droit de recevoir chaque année un dividende fixé à l’avance par l’émetteur de l’option', 'is_correct' => false],
                            ['choice_text' => 'L’obligation de livrer l’actif à l’acheteur si celui-ci le demande, moyennant une prime', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle utiliser une couverture de change ?',
                        'explanation' => 'Une couverture de change peut réduire l’incertitude liée aux variations futures des devises.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire l’incertitude liée aux variations futures des taux directeurs', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter ses gains lorsque la monnaie étrangère se déprécie par rapport à l’euro', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire le risque qu’un client étranger ne règle pas sa facture à l’échéance', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire l’incertitude liée aux variations futures des taux de change', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise craint une hausse future des taux d’intérêt sur sa dette. Quelle solution peut être envisagée ?',
                        'explanation' => 'Un instrument de couverture de taux adapté peut contribuer à réduire l’exposition à une hausse des taux.',
                        'choices' => [
                            ['choice_text' => 'Utiliser un instrument de couverture de taux adapté à son exposition', 'is_correct' => true],
                            ['choice_text' => 'Acheter une couverture de change pour se protéger contre la variation des devises', 'is_correct' => false],
                            ['choice_text' => 'Remplacer sa dette à taux fixe par une dette à taux variable plus avantageuse', 'is_correct' => false],
                            ['choice_text' => 'Placer sa trésorerie en actions pour compenser la hausse des intérêts payés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal objectif d’un contrat à terme utilisé comme couverture ?',
                        'explanation' => 'Un contrat à terme peut réduire l’incertitude concernant le prix futur d’un actif ou d’une devise.',
                        'choices' => [
                            ['choice_text' => 'Bénéficier de la hausse du prix de l’actif sous-jacent après la conclusion du contrat', 'is_correct' => false],
                            ['choice_text' => 'Obtenir un rendement supérieur à celui du marché sur la durée du contrat', 'is_correct' => false],
                            ['choice_text' => 'Réduire l’incertitude concernant le prix futur d’un actif ou d’une devise', 'is_correct' => true],
                            ['choice_text' => 'Financer l’achat de l’actif sous-jacent à un taux d’intérêt inférieur à celui du marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une couverture peut-elle avoir un coût ?',
                        'explanation' => 'Certains instruments ou stratégies de couverture impliquent des coûts ou des opportunités perdues.',
                        'choices' => [
                            ['choice_text' => 'Non, car une couverture ne génère ni prime ni frais et ne limite pas les gains possibles', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais ce coût est égal au montant de la perte évitée, de sorte que la couverture n’apporte rien', 'is_correct' => false],
                            ['choice_text' => 'Non, car le coût d’une couverture est toujours supporté par la contrepartie et jamais par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Oui, certains instruments ou stratégies de couverture impliquent des coûts ou des opportunités perdues', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle identifier précisément son exposition avant de mettre en place une couverture ?',
                        'explanation' => 'L’exposition doit être connue pour choisir une stratégie adaptée au montant, à la nature et à la durée du risque.',
                        'choices' => [
                            ['choice_text' => 'Pour s’assurer que la couverture dépasse largement le montant exposé, afin de compenser les pertes passées', 'is_correct' => false],
                            ['choice_text' => 'Pour choisir une stratégie adaptée au montant, à la nature et à la durée du risque', 'is_correct' => true],
                            ['choice_text' => 'Pour choisir une stratégie adaptée au résultat comptable, au nombre d’associés et à la taille de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour obtenir de la banque un taux d’intérêt préférentiel dès la première année de la couverture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un risque résiduel ?',
                        'explanation' => 'Le risque résiduel est le risque qui reste après les mesures de réduction ou de couverture.',
                        'choices' => [
                            ['choice_text' => 'Le risque évalué avant la mise en place des mesures de réduction ou de couverture', 'is_correct' => false],
                            ['choice_text' => 'Le risque que la contrepartie ne livre pas l’actif résiduel prévu à la fin du contrat', 'is_correct' => false],
                            ['choice_text' => 'Le risque qui subsiste après la mise en place des mesures de réduction ou de couverture', 'is_correct' => true],
                            ['choice_text' => 'Le risque maximal que l’organisation accepte de prendre pour atteindre ses objectifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une couverture ne doit-elle pas être considérée comme une garantie absolue ?',
                        'explanation' => 'Une couverture peut ne pas couvrir parfaitement l’exposition et comporter elle-même certains risques ou coûts.',
                        'choices' => [
                            ['choice_text' => 'Elle peut ne pas couvrir parfaitement l’exposition et comporte elle-même certains risques ou coûts', 'is_correct' => true],
                            ['choice_text' => 'Elle ne couvre que les risques de crédit et laisse l’entreprise sans protection contre les risques de marché', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme obligatoirement le risque en perte certaine, égale au montant de l’exposition couverte', 'is_correct' => false],
                            ['choice_text' => 'Elle est annulée par l’autorité des marchés dès que les prix évoluent de plus de quelques pour cent', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Culture du risque et décisions financières',
                'description' => 'Culture du risque et décisions financières',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une bonne culture du risque dans une organisation ?',
                        'explanation' => 'Une bonne culture du risque suppose que les risques soient identifiés, communiqués, surveillés et intégrés aux décisions.',
                        'choices' => [
                            ['choice_text' => 'Une culture où le risque est géré par le seul service de contrôle, sans lien avec les décisions des équipes', 'is_correct' => false],
                            ['choice_text' => 'Une culture où les risques sont identifiés, communiqués, surveillés et pris en compte dans les décisions', 'is_correct' => true],
                            ['choice_text' => 'Une culture où les risques sont identifiés une fois par an puis classés sans être suivis', 'is_correct' => false],
                            ['choice_text' => 'Une culture où les risques sont évités dès qu’ils apparaissent, même si cela conduit à renoncer aux projets rentables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les responsables financiers doivent-ils communiquer les risques aux dirigeants ?',
                        'explanation' => 'Les dirigeants ont besoin d’informations sur les risques pour prendre des décisions en connaissance de leurs conséquences potentielles.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre aux dirigeants de transférer la responsabilité des pertes aux responsables financiers', 'is_correct' => false],
                            ['choice_text' => 'Pour permettre de fixer des objectifs de rendement indépendants du niveau de risque accepté', 'is_correct' => false],
                            ['choice_text' => 'Pour permettre de remplacer les prévisions budgétaires par des estimations de pertes maximales', 'is_correct' => false],
                            ['choice_text' => 'Pour permettre des décisions tenant compte des conséquences financières possibles', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque doit-il être surveillé régulièrement ?',
                        'explanation' => 'Les expositions, les marchés et la situation financière peuvent évoluer dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Les expositions, les marchés et la situation financière peuvent évoluer', 'is_correct' => true],
                            ['choice_text' => 'Les produits dérivés doivent être renouvelés chaque jour pour rester valables', 'is_correct' => false],
                            ['choice_text' => 'Les rendements historiques sont recalculés chaque mois par les intermédiaires financiers', 'is_correct' => false],
                            ['choice_text' => 'Les normes comptables imposent une mise à jour mensuelle de toutes les estimations de risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement peut augmenter inutilement le risque financier ?',
                        'explanation' => 'Prendre une position importante sans comprendre son exposition peut augmenter inutilement le risque.',
                        'choices' => [
                            ['choice_text' => 'Diversifier raisonnablement les placements et vérifier régulièrement les limites de risque fixées', 'is_correct' => false],
                            ['choice_text' => 'Réaliser des scénarios de stress avant de prendre une décision d’investissement importante', 'is_correct' => false],
                            ['choice_text' => 'Prendre une position importante sans comprendre son exposition et ses conséquences potentielles', 'is_correct' => true],
                            ['choice_text' => 'Documenter les hypothèses et les responsabilités avant d’engager une opération risquée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi fixer des limites de risque peut-il être utile ?',
                        'explanation' => 'Les limites empêchent certaines expositions de dépasser un niveau jugé acceptable.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer à chaque exposition un rendement au moins égal à celui d’un placement sans risque', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire le nombre d’opérations traitées chaque jour par la salle de marché', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer l’analyse des risques par un plafond fixé une fois pour toutes', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher qu’une exposition dépasse un niveau jugé acceptable', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue le suivi des indicateurs de risque ?',
                        'explanation' => 'Le suivi permet de détecter les évolutions importantes et d’agir avant qu’elles ne deviennent critiques.',
                        'choices' => [
                            ['choice_text' => 'Il permet de transférer la responsabilité des pertes constatées aux organismes de contrôle externes', 'is_correct' => false],
                            ['choice_text' => 'Il permet de détecter les évolutions importantes et d’agir avant qu’elles ne deviennent critiques', 'is_correct' => true],
                            ['choice_text' => 'Il permet de prévoir précisément la date des crises et d’éviter ainsi les pertes', 'is_correct' => false],
                            ['choice_text' => 'Il permet de fixer l’appétit pour le risque de l’organisation sans consulter les dirigeants', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer rendement et risque ?',
                        'explanation' => 'Un rendement potentiel élevé peut être associé à une incertitude et à une possibilité de perte plus importantes.',
                        'choices' => [
                            ['choice_text' => 'Un rendement potentiel élevé est généralement associé à une incertitude plus faible et à une possibilité de perte réduite', 'is_correct' => false],
                            ['choice_text' => 'Un rendement potentiel faible est généralement associé à une possibilité de perte plus importante que celle d’un rendement élevé', 'is_correct' => false],
                            ['choice_text' => 'Un rendement potentiel élevé peut être associé à une incertitude et à une possibilité de perte plus importantes', 'is_correct' => true],
                            ['choice_text' => 'Un rendement potentiel élevé indique que le risque a déjà été supprimé grâce à la diversification du portefeuille', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’appétit pour le risque ?',
                        'explanation' => 'L’appétit pour le risque correspond au niveau et au type de risque qu’une organisation est disposée à accepter pour atteindre ses objectifs.',
                        'choices' => [
                            ['choice_text' => 'Le niveau et le type de risque qu’une organisation est disposée à accepter pour atteindre ses objectifs', 'is_correct' => true],
                            ['choice_text' => 'Le niveau et le type de perte maximale qu’une organisation a effectivement subie au cours de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Le niveau et le type de risque qu’une organisation est obligée de supporter selon la réglementation', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de rendement qu’une organisation espère obtenir sur ses placements financiers au cours de l’année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les décisions de risque doivent-elles être documentées ?',
                        'explanation' => 'La documentation conserve une trace des hypothèses, responsabilités, limites et décisions prises.',
                        'choices' => [
                            ['choice_text' => 'Pour conserver une trace des seuls résultats comptables et des dividendes distribués', 'is_correct' => false],
                            ['choice_text' => 'Pour conserver une trace des hypothèses, responsabilités, limites et décisions prises', 'is_correct' => true],
                            ['choice_text' => 'Pour permettre de modifier les décisions après coup sans avoir à justifier les écarts', 'is_correct' => false],
                            ['choice_text' => 'Pour permettre de transférer la responsabilité des pertes à l’auditeur externe de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle attitude est la plus adaptée face à un risque financier identifié ?',
                        'explanation' => 'Une bonne gestion consiste à analyser le risque, déterminer l’exposition et choisir une réponse proportionnée.',
                        'choices' => [
                            ['choice_text' => 'L’éviter totalement en renonçant à l’activité concernée quel que soit son intérêt', 'is_correct' => false],
                            ['choice_text' => 'Le transférer immédiatement à un tiers sans en évaluer l’ampleur ni le coût', 'is_correct' => false],
                            ['choice_text' => 'L’accepter sans analyse en comptant sur la diversification pour compenser les pertes', 'is_correct' => false],
                            ['choice_text' => 'L’analyser, déterminer son niveau d’exposition et choisir une réponse proportionnée', 'is_correct' => true],
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
