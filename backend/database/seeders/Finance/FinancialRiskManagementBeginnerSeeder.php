```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FinancialRiskManagementBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'financial-risk-management')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la gestion des risques financiers',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un risque financier ?',
                        'answers' => [
                            ['answer' => 'La possibilité qu’un événement financier entraîne une perte ou un résultat différent de celui attendu', 'iscorrect' => true],
                            ['answer' => 'Une garantie de bénéfice', 'iscorrect' => false],
                            ['answer' => 'Une méthode de calcul du chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Un document comptable obligatoire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal de la gestion des risques financiers ?',
                        'answers' => [
                            ['answer' => Identifier, mesurer et maîtriser les risques susceptibles d’affecter les résultats financiers', 'iscorrect' => true],
                            ['answer' => Éliminer toutes les dépenses', 'iscorrect' => false],
                            ['answer' => Garantir un bénéfice chaque année', 'iscorrect' => false],
                            ['answer' => Augmenter systématiquement la dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le risque de marché est principalement lié à :',
                        'answers' => [
                            ['answer' => L’évolution défavorable de variables comme les taux, devises, actions ou matières premières', 'iscorrect' => true],
                            ['answer' => La couleur des billets', 'iscorrect' => false],
                            ['answer' => La taille du siège social', 'iscorrect' => false],
                            ['answer' => La politique de recrutement uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de crédit ?',
                        'answers' => [
                            ['answer' => Le risque qu’un emprunteur ou une contrepartie ne respecte pas ses obligations', 'iscorrect' => true],
                            ['answer' => Le risque d’une hausse des ventes', 'iscorrect' => false],
                            ['answer' => Le risque de changement de logo', 'iscorrect' => false],
                            ['answer' => Le risque d’augmentation des capitaux propres', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le risque de liquidité correspond notamment au risque :',
                        'answers' => [
                            ['answer' => De ne pas disposer de suffisamment de liquidités pour honorer ses obligations à temps', 'iscorrect' => true],
                            ['answer' => De vendre trop de produits', 'iscorrect' => false],
                            ['answer' => D’avoir trop de capitaux propres', 'iscorrect' => false],
                            ['answer' => De réduire les coûts administratifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle identifier ses risques financiers ?',
                        'answers' => [
                            ['answer' => Pour comprendre les menaces potentielles et mettre en place des mesures adaptées', 'iscorrect' => true],
                            ['answer' => Pour supprimer toute activité commerciale', 'iscorrect' => false],
                            ['answer' => Pour éviter de préparer des budgets', 'iscorrect' => false],
                            ['answer' => Pour garantir que les marchés resteront stables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle action fait partie du processus de gestion des risques ?',
                        'answers' => [
                            ['answer' => Évaluer la probabilité et l’impact des événements de risque', 'iscorrect' => true],
                            ['answer' => Ignorer les pertes potentielles', 'iscorrect' => false],
                            ['answer' => Supprimer les états financiers', 'iscorrect' => false],
                            ['answer' => Éviter toute analyse financière', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie réduire un risque ?',
                        'answers' => [
                            ['answer' => Mettre en place des mesures permettant de diminuer sa probabilité ou son impact', 'iscorrect' => true],
                            ['answer' => Garantir qu’il ne se produira jamais', 'iscorrect' => false],
                            ['answer' => Augmenter volontairement les pertes', 'iscorrect' => false],
                            ['answer' => Supprimer tous les contrôles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi est-il impossible de supprimer tous les risques financiers ?',
                        'answers' => [
                            ['answer' => Parce que l’environnement économique et financier comporte toujours une part d’incertitude', 'iscorrect' => true],
                            ['answer' => Parce que les entreprises refusent toujours de contrôler leurs risques', 'iscorrect' => false],
                            ['answer' => Parce que les risques n’existent que dans les banques', 'iscorrect' => false],
                            ['answer' => Parce que les marchés sont toujours prévisibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément permet de hiérarchiser les risques ?',
                        'answers' => [
                            ['answer' => Leur probabilité d’occurrence et leur impact potentiel', 'iscorrect' => true],
                            ['answer' => Leur ordre alphabétique', 'iscorrect' => false],
                            ['answer' => La taille du bureau du responsable financier', 'iscorrect' => false],
                            ['answer' => Le nombre d’employés de l’entreprise', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque de marché et fluctuations financières',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le risque de taux d’intérêt ?',
                        'answers' => [
                            ['answer' => Le risque qu’une variation des taux affecte défavorablement la valeur ou les coûts financiers', 'iscorrect' => true],
                            ['answer' => Le risque de baisse des salaires', 'iscorrect' => false],
                            ['answer' => Le risque de changement de fournisseur', 'iscorrect' => false],
                            ['answer' => Le risque de perte d’un client uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de change ?',
                        'answers' => [
                            ['answer' => Le risque de perte lié aux variations des taux de change entre différentes monnaies', 'iscorrect' => true],
                            ['answer' => Le risque de modification d’un contrat de travail', 'iscorrect' => false],
                            ['answer' => Le risque de baisse des stocks', 'iscorrect' => false],
                            ['answer' => Le risque de variation du nombre d’employés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise européenne doit payer un fournisseur américain en dollars dans trois mois. Quel risque peut-elle subir ?',
                        'answers' => [
                            ['answer' => Une variation défavorable du taux de change euro-dollar', 'iscorrect' => true],
                            ['answer' => Uniquement un risque de stock', 'iscorrect' => false],
                            ['answer' => Aucun risque financier', 'iscorrect' => false],
                            ['answer' => Uniquement un risque fiscal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse des taux peut être défavorable à une entreprise fortement endettée à taux variable parce que :',
                        'answers' => [
                            ['answer' => Ses charges d’intérêts peuvent augmenter', 'iscorrect' => true],
                            ['answer' => Sa dette disparaît', 'iscorrect' => false],
                            ['answer' => Son chiffre d’affaires double automatiquement', 'iscorrect' => false],
                            ['answer' => Ses capitaux propres deviennent automatiquement nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le risque lié au prix d’une matière première concerne principalement :',
                        'answers' => [
                            ['answer' => Les entreprises dont les coûts ou revenus dépendent fortement de cette matière première', 'iscorrect' => true],
                            ['answer' => Uniquement les entreprises sans activité commerciale', 'iscorrect' => false],
                            ['answer' => Uniquement les banques centrales', 'iscorrect' => false],
                            ['answer' => Aucun acteur financier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une variation du cours d’une action peut-elle créer un risque pour un investisseur ?',
                        'answers' => [
                            ['answer' => Elle peut entraîner une perte de valeur du portefeuille', 'iscorrect' => true],
                            ['answer' => Elle garantit toujours un dividende plus élevé', 'iscorrect' => false],
                            ['answer' => Elle supprime le risque de marché', 'iscorrect' => false],
                            ['answer' => Elle garantit le remboursement du capital', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la volatilité mesure généralement ?',
                        'answers' => [
                            ['answer' => L’ampleur des variations d’un prix ou d’un rendement autour de son niveau moyen', 'iscorrect' => true],
                            ['answer' => Le nombre de salariés d’une entreprise', 'iscorrect' => false],
                            ['answer' => Le montant du capital social uniquement', 'iscorrect' => false],
                            ['answer' => La durée d’un emprunt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un actif très volatil présente généralement :',
                        'answers' => [
                            ['answer' => Des variations de prix plus importantes et une incertitude plus élevée sur son rendement', 'iscorrect' => true],
                            ['answer' => Un rendement toujours positif', 'iscorrect' => false],
                            ['answer' => Aucun risque de perte', 'iscorrect' => false],
                            ['answer' => Une valeur parfaitement stable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel instrument peut être utilisé pour se protéger contre certains risques de marché ?',
                        'answers' => [
                            ['answer' => Un produit dérivé tel qu’un contrat à terme ou une option', 'iscorrect' => true],
                            ['answer' => Un relevé bancaire', 'iscorrect' => false],
                            ['answer' => Une facture client', 'iscorrect' => false],
                            ['answer' => Un inventaire physique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversification peut-elle réduire certains risques de marché ?',
                        'answers' => [
                            ['answer' => Les performances de différents actifs ne réagissent pas nécessairement de la même manière aux événements économiques', 'iscorrect' => true],
                            ['answer' => Elle garantit un rendement positif', 'iscorrect' => false],
                            ['answer' => Elle supprime tous les risques', 'iscorrect' => false],
                            ['answer' => Elle augmente automatiquement la valeur de chaque actif', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque de crédit et risque de contrepartie',
                'questions' => [
                    [
                        'question' => 'Quel est le principal danger lorsqu’une entreprise accorde un crédit à un client ?',
                        'answers' => [
                            ['answer' => Que le client ne rembourse pas tout ou partie de la somme due', 'iscorrect' => true],
                            ['answer' => Que le client augmente ses ventes', 'iscorrect' => false],
                            ['answer' => Que les stocks diminuent', 'iscorrect' => false],
                            ['answer' => Que les capitaux propres augmentent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une contrepartie dans une opération financière ?',
                        'answers' => [
                            ['answer' => L’autre partie engagée dans la transaction ou le contrat financier', 'iscorrect' => true],
                            ['answer' => Un élément du mobilier', 'iscorrect' => false],
                            ['answer' => Un document marketing', 'iscorrect' => false],
                            ['answer' => Une charge fiscale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur peut aider à apprécier la capacité d’un emprunteur à rembourser sa dette ?',
                        'answers' => [
                            ['answer' => Le niveau de dette comparé à ses revenus ou à sa capacité de génération de trésorerie', 'iscorrect' => true],
                            ['answer' => La couleur de son logo', 'iscorrect' => false],
                            ['answer' => Le nombre de bureaux', 'iscorrect' => false],
                            ['answer' => Le nombre de produits vendus uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les banques analysent-elles la situation financière d’un emprunteur ?',
                        'answers' => [
                            ['answer' => Pour évaluer sa capacité et sa probabilité de remboursement', 'iscorrect' => true],
                            ['answer' => Pour déterminer la couleur de sa carte bancaire', 'iscorrect' => false],
                            ['answer' => Pour garantir ses bénéfices futurs', 'iscorrect' => false],
                            ['answer' => Pour supprimer toutes ses dépenses', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un défaut de paiement ?',
                        'answers' => [
                            ['answer' => Le non-respect d’une obligation de paiement à la date ou selon les conditions prévues', 'iscorrect' => true],
                            ['answer' => Une hausse du chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => Une baisse des stocks', 'iscorrect' => false],
                            ['answer' => Une augmentation des investissements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède beaucoup de créances clients. Quel risque peut augmenter ?',
                        'answers' => [
                            ['answer' => Le risque que certains clients paient en retard ou ne paient pas', 'iscorrect' => true],
                            ['answer' => Le risque de hausse automatique des bénéfices', 'iscorrect' => false],
                            ['answer' => Le risque de baisse automatique des ventes', 'iscorrect' => false],
                            ['answer' => Aucun risque financier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier l’historique de paiement d’un client peut-il être utile ?',
                        'answers' => [
                            ['answer' => Il fournit des informations sur son comportement de paiement passé', 'iscorrect' => true],
                            ['answer' => Il garantit ses paiements futurs', 'iscorrect' => false],
                            ['answer' => Il indique toujours son chiffre d’affaires futur', 'iscorrect' => false],
                            ['answer' => Il supprime le besoin de contrôle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut faire une entreprise pour limiter le risque de crédit client ?',
                        'answers' => [
                            ['answer' => Définir des limites de crédit et surveiller régulièrement les créances', 'iscorrect' => true],
                            ['answer' => Accorder toujours des crédits illimités', 'iscorrect' => false],
                            ['answer' => Ne jamais suivre les paiements', 'iscorrect' => false],
                            ['answer' => Supprimer toutes les factures', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une garantie donnée par un emprunteur peut-elle réduire le risque du prêteur ?',
                        'answers' => [
                            ['answer' => Oui, elle peut contribuer à réduire la perte en cas de défaut selon sa valeur et sa réalisation', 'iscorrect' => true],
                            ['answer' => Non, une garantie n’a jamais aucune utilité', 'iscorrect' => false],
                            ['answer' => Oui, elle garantit toujours 100 % du remboursement', 'iscorrect' => false],
                            ['answer' => Elle augmente automatiquement le chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est important dans la gestion du risque de crédit ?',
                        'answers' => [
                            ['answer' => Ne pas concentrer excessivement les expositions sur une seule contrepartie', 'iscorrect' => true],
                            ['answer' => Accorder tout le crédit à un seul client', 'iscorrect' => false],
                            ['answer' => Ignorer la solvabilité des clients', 'iscorrect' => false],
                            ['answer' => Éviter toute analyse financière', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque de liquidité et trésorerie',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la liquidité financière ?',
                        'answers' => [
                            ['answer' => La capacité à disposer rapidement de ressources pour faire face aux obligations financières', 'iscorrect' => true],
                            ['answer' => La capacité à augmenter les ventes uniquement', 'iscorrect' => false],
                            ['answer' => La capacité à produire davantage', 'iscorrect' => false],
                            ['answer' => La capacité à réduire les salaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise peut-elle être rentable tout en ayant un problème de liquidité ?',
                        'answers' => [
                            ['answer' => Oui, car le bénéfice comptable ne signifie pas nécessairement que les liquidités sont immédiatement disponibles', 'iscorrect' => true],
                            ['answer' => Non, rentabilité et liquidité sont toujours identiques', 'iscorrect' => false],
                            ['answer' => Non, une entreprise rentable n’a jamais besoin de trésorerie', 'iscorrect' => false],
                            ['answer' => Oui uniquement si elle n’a aucune dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut fortement consommer la trésorerie d’une entreprise en croissance ?',
                        'answers' => [
                            ['answer' => Une augmentation importante du besoin en fonds de roulement', 'iscorrect' => true],
                            ['answer' => Une baisse des créances', 'iscorrect' => false],
                            ['answer' => Une réduction des stocks', 'iscorrect' => false],
                            ['answer' => Une augmentation immédiate des encaissements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le besoin en fonds de roulement ?',
                        'answers' => [
                            ['answer' => Le besoin de financement lié notamment aux décalages entre encaissements et décaissements d’exploitation', 'iscorrect' => true],
                            ['answer' => Le montant total des capitaux propres', 'iscorrect' => false],
                            ['answer' => Le bénéfice net annuel', 'iscorrect' => false],
                            ['answer' => La valeur du capital social uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle prévoir ses flux de trésorerie ?',
                        'answers' => [
                            ['answer' => Pour anticiper les périodes de besoin ou d’excédent de liquidité', 'iscorrect' => true],
                            ['answer' => Pour garantir une hausse des ventes', 'iscorrect' => false],
                            ['answer' => Pour éliminer tous les risques', 'iscorrect' => false],
                            ['answer' => Pour éviter toute dépense', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut améliorer la liquidité d’une entreprise ?',
                        'answers' => [
                            ['answer' => Une accélération des encaissements clients', 'iscorrect' => true],
                            ['answer' => Une augmentation des créances sans encaissement', 'iscorrect' => false],
                            ['answer' => Une hausse permanente des stocks', 'iscorrect' => false],
                            ['answer' => Une augmentation des dépenses sans financement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver une réserve de liquidité peut-il être utile ?',
                        'answers' => [
                            ['answer' => Elle permet de faire face à des besoins imprévus ou à des périodes de tension de trésorerie', 'iscorrect' => true],
                            ['answer' => Elle garantit des bénéfices élevés', 'iscorrect' => false],
                            ['answer' => Elle supprime tous les risques de marché', 'iscorrect' => false],
                            ['answer' => Elle augmente automatiquement le chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une crise de liquidité ?',
                        'answers' => [
                            ['answer' => Une situation dans laquelle une entité rencontre des difficultés à obtenir suffisamment de liquidités pour honorer ses obligations', 'iscorrect' => true],
                            ['answer' => Une période de forte croissance des ventes', 'iscorrect' => false],
                            ['answer' => Une hausse des capitaux propres', 'iscorrect' => false],
                            ['answer' => Une réduction des dettes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur peut être utilisé pour apprécier la liquidité à court terme ?',
                        'answers' => [
                            ['answer' => Le ratio de liquidité générale', 'iscorrect' => true],
                            ['answer' => Le taux de croissance du personnel', 'iscorrect' => false],
                            ['answer' => Le nombre de produits', 'iscorrect' => false],
                            ['answer' => Le montant du capital social uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le financement à court terme peut-il créer un risque ?',
                        'answers' => [
                            ['answer' => L’entreprise peut devoir refinancer fréquemment ses besoins et être exposée à une disponibilité insuffisante des financements', 'iscorrect' => true],
                            ['answer' => Il garantit toujours une liquidité parfaite', 'iscorrect' => false],
                            ['answer' => Il élimine le risque de taux', 'iscorrect' => false],
                            ['answer' => Il empêche toute variation du marché', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque opérationnel et risque financier',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le risque opérationnel ?',
                        'answers' => [
                            ['answer' => Le risque de pertes résultant notamment de processus, personnes, systèmes ou événements externes défaillants', 'iscorrect' => true],
                            ['answer' => Uniquement le risque de change', 'iscorrect' => false],
                            ['answer' => Uniquement le risque de taux', 'iscorrect' => false],
                            ['answer' => Uniquement le risque de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une panne informatique majeure peut-elle constituer un risque financier ?',
                        'answers' => [
                            ['answer' => Oui, car elle peut interrompre l’activité et provoquer des pertes financières', 'iscorrect' => true],
                            ['answer' => Non, les systèmes informatiques n’ont jamais d’impact financier', 'iscorrect' => false],
                            ['answer' => Non, car seuls les marchés créent des pertes', 'iscorrect' => false],
                            ['answer' => Oui uniquement pour les banques centrales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contrôles internes sont-ils importants ?',
                        'answers' => [
                            ['answer' => Ils contribuent à prévenir ou détecter les erreurs, fraudes et anomalies', 'iscorrect' => true],
                            ['answer' => Ils garantissent toujours zéro erreur', 'iscorrect' => false],
                            ['answer' => Ils remplacent tous les employés', 'iscorrect' => false],
                            ['answer' => Ils suppriment tous les risques financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fraude interne peut-elle créer un risque financier ?',
                        'answers' => [
                            ['answer' => Oui, elle peut entraîner des pertes directes, des sanctions et des coûts de réputation', 'iscorrect' => true],
                            ['answer' => Non, une fraude n’a jamais d’impact financier', 'iscorrect' => false],
                            ['answer' => Non, si l’entreprise est rentable', 'iscorrect' => false],
                            ['answer' => Oui uniquement lorsqu’elle concerne des clients', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut réduire certains risques opérationnels ?',
                        'answers' => [
                            ['answer' => Des procédures claires, des contrôles internes et des plans de continuité', 'iscorrect' => true],
                            ['answer' => L’absence de procédures', 'iscorrect' => false],
                            ['answer' => La suppression des contrôles', 'iscorrect' => false],
                            ['answer' => La concentration de toutes les tâches sur une seule personne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un plan de continuité d’activité ?',
                        'answers' => [
                            ['answer' => Un ensemble de mesures permettant de maintenir ou rétablir les activités essentielles après une perturbation', 'iscorrect' => true],
                            ['answer' => Un plan marketing annuel', 'iscorrect' => false],
                            ['answer' => Un budget publicitaire', 'iscorrect' => false],
                            ['answer' => Une méthode de calcul des dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la dépendance à un seul fournisseur peut-elle être risquée ?',
                        'answers' => [
                            ['answer' => Une interruption chez ce fournisseur peut perturber fortement l’activité', 'iscorrect' => true],
                            ['answer' => Elle garantit toujours les meilleurs prix', 'iscorrect' => false],
                            ['answer' => Elle élimine le risque opérationnel', 'iscorrect' => false],
                            ['answer' => Elle augmente automatiquement les ventes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi séparer certaines fonctions financières est-il utile ?',
                        'answers' => [
                            ['answer' => La séparation des tâches peut réduire les risques d’erreur et de fraude', 'iscorrect' => true],
                            ['answer' => Elle augmente toujours les dépenses', 'iscorrect' => false],
                            ['answer' => Elle supprime la nécessité de contrôles', 'iscorrect' => false],
                            ['answer' => Elle garantit des bénéfices plus élevés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel événement externe peut provoquer un risque opérationnel ?',
                        'answers' => [
                            ['answer' => Une catastrophe naturelle perturbant les activités de l’entreprise', 'iscorrect' => true],
                            ['answer' => Une amélioration du contrôle interne', 'iscorrect' => false],
                            ['answer' => Une baisse du nombre de créances', 'iscorrect' => false],
                            ['answer' => Une réduction du coût de financement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est préférable face au risque opérationnel ?',
                        'answers' => [
                            ['answer' => Identifier les scénarios possibles, évaluer leur impact et préparer des contrôles et plans de réponse', 'iscorrect' => true],
                            ['answer' => Ignorer les incidents passés', 'iscorrect' => false],
                            ['answer' => Attendre systématiquement qu’une crise survienne', 'iscorrect' => false],
                            ['answer' => Supprimer toutes les procédures', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Mesure et évaluation des risques financiers',
                'questions' => [
                    [
                        'question' => 'Pourquoi mesure-t-on les risques financiers ?',
                        'answers' => [
                            ['answer' => Pour estimer leur importance et aider à prendre des décisions adaptées', 'iscorrect' => true],
                            ['answer' => Pour garantir qu’aucune perte ne se produira', 'iscorrect' => false],
                            ['answer' => Pour supprimer les marchés financiers', 'iscorrect' => false],
                            ['answer' => Pour remplacer la comptabilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une probabilité de perte ?',
                        'answers' => [
                            ['answer' => Une estimation de la possibilité qu’un événement entraîne une perte', 'iscorrect' => true],
                            ['answer' => Une garantie de perte', 'iscorrect' => false],
                            ['answer' => Un chiffre d’affaires futur', 'iscorrect' => false],
                            ['answer' => Une mesure de liquidité uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’impact d’un risque ?',
                        'answers' => [
                            ['answer' => L’ampleur des conséquences financières ou opérationnelles si le risque se réalise', 'iscorrect' => true],
                            ['answer' => La probabilité uniquement', 'iscorrect' => false],
                            ['answer' => Le nombre de salariés', 'iscorrect' => false],
                            ['answer' => Le montant du capital social uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un risque ayant une faible probabilité mais un impact extrêmement élevé doit-il être ignoré ?',
                        'answers' => [
                            ['answer' => Non, son impact potentiel peut justifier des mesures de prévention ou de protection', 'iscorrect' => true],
                            ['answer' => Oui, toute faible probabilité est négligeable', 'iscorrect' => false],
                            ['answer' => Oui, car aucun risque rare ne compte', 'iscorrect' => false],
                            ['answer' => Oui, sauf pour les petites entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert une matrice des risques ?',
                        'answers' => [
                            ['answer' => À classer les risques selon leur probabilité et leur impact', 'iscorrect' => true],
                            ['answer' => À calculer uniquement le chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => À supprimer les risques', 'iscorrect' => false],
                            ['answer' => À déterminer les salaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un scénario de stress ?',
                        'answers' => [
                            ['answer' => Une situation défavorable utilisée pour évaluer la résistance financière d’une entreprise ou d’un portefeuille', 'iscorrect' => true],
                            ['answer' => Une prévision garantie', 'iscorrect' => false],
                            ['answer' => Une méthode de calcul des salaires', 'iscorrect' => false],
                            ['answer' => Une opération comptable obligatoire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser plusieurs scénarios de risque ?',
                        'answers' => [
                            ['answer' => Pour examiner la sensibilité des résultats à différentes situations possibles', 'iscorrect' => true],
                            ['answer' => Pour garantir le scénario le plus favorable', 'iscorrect' => false],
                            ['answer' => Pour supprimer l’incertitude', 'iscorrect' => false],
                            ['answer' => Pour éviter toute analyse', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle donnée peut être utile pour analyser le risque d’un investissement ?',
                        'answers' => [
                            ['answer' => Les rendements historiques et leur variabilité', 'iscorrect' => true],
                            ['answer' => La couleur du certificat', 'iscorrect' => false],
                            ['answer' => Le nombre de pages du rapport', 'iscorrect' => false],
                            ['answer' => Le nom du directeur uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données historiques ne garantissent-elles pas les résultats futurs ?',
                        'answers' => [
                            ['answer' => Les conditions économiques et financières peuvent changer', 'iscorrect' => true],
                            ['answer' => Parce que les données historiques sont toujours fausses', 'iscorrect' => false],
                            ['answer' => Parce que les marchés sont parfaitement prévisibles', 'iscorrect' => false],
                            ['answer' => Parce que les rendements ne peuvent jamais être mesurés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une bonne pratique lors de l’évaluation d’un risque ?',
                        'answers' => [
                            ['answer' => Utiliser plusieurs informations et hypothèses plutôt que dépendre d’un seul indicateur', 'iscorrect' => true],
                            ['answer' => Ignorer les données contradictoires', 'iscorrect' => false],
                            ['answer' => Utiliser uniquement l’opinion personnelle', 'iscorrect' => false],
                            ['answer' => Ne jamais mettre à jour les estimations', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gestion du risque et diversification',
                'questions' => [
                    [
                        'question' => 'Quel est le principe fondamental de la diversification ?',
                        'answers' => [
                            ['answer' => Répartir les investissements ou expositions afin de réduire la dépendance à un seul risque', 'iscorrect' => true],
                            ['answer' => Investir tout le capital dans un seul actif', 'iscorrect' => false],
                            ['answer' => Choisir uniquement les actifs les plus risqués', 'iscorrect' => false],
                            ['answer' => Garantir un rendement fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La diversification élimine-t-elle tous les risques ?',
                        'answers' => [
                            ['answer' => Non, elle réduit certains risques mais ne supprime pas les risques généraux du marché', 'iscorrect' => true],
                            ['answer' => Oui, elle élimine tous les risques', 'iscorrect' => false],
                            ['answer' => Oui, elle garantit toujours un bénéfice', 'iscorrect' => false],
                            ['answer' => Non, car elle augmente toujours tous les risques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque peut être particulièrement réduit par une bonne diversification ?',
                        'answers' => [
                            ['answer' => Le risque spécifique lié à une entreprise ou un actif particulier', 'iscorrect' => true],
                            ['answer' => Le risque de toute l’économie mondiale', 'iscorrect' => false],
                            ['answer' => Tous les risques de taux', 'iscorrect' => false],
                            ['answer' => Tous les risques de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi investir dans plusieurs secteurs peut-il être utile ?',
                        'answers' => [
                            ['answer' => Les secteurs peuvent réagir différemment aux conditions économiques', 'iscorrect' => true],
                            ['answer' => Tous les secteurs ont toujours les mêmes performances', 'iscorrect' => false],
                            ['answer' => Cela garantit un rendement positif', 'iscorrect' => false],
                            ['answer' => Cela supprime les fluctuations des marchés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’une forte concentration sur une seule entreprise ?',
                        'answers' => [
                            ['answer' => Un événement défavorable concernant cette entreprise peut provoquer une perte importante', 'iscorrect' => true],
                            ['answer' => Une garantie automatique de bénéfice', 'iscorrect' => false],
                            ['answer' => Une suppression du risque spécifique', 'iscorrect' => false],
                            ['answer' => Une stabilité parfaite du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux actifs ayant des comportements différents peuvent-ils améliorer la diversification ?',
                        'answers' => [
                            ['answer' => Oui, surtout si leurs rendements ne sont pas fortement corrélés', 'iscorrect' => true],
                            ['answer' => Non, la diversification dépend uniquement du nombre d’actifs', 'iscorrect' => false],
                            ['answer' => Non, deux actifs sont toujours identiques', 'iscorrect' => false],
                            ['answer' => Oui, mais uniquement si les deux actifs sont risqués', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un portefeuille diversifié ?',
                        'answers' => [
                            ['answer' => Un ensemble d’investissements répartis entre plusieurs actifs ou expositions', 'iscorrect' => true],
                            ['answer' => Un investissement dans une seule action', 'iscorrect' => false],
                            ['answer' => Un compte bancaire uniquement', 'iscorrect' => false],
                            ['answer' => Une dette unique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il également surveiller la diversification dans le temps ?',
                        'answers' => [
                            ['answer' => Les poids des actifs peuvent évoluer et créer progressivement une concentration excessive', 'iscorrect' => true],
                            ['answer' => Les portefeuilles restent toujours identiques', 'iscorrect' => false],
                            ['answer' => La diversification devient automatiquement parfaite', 'iscorrect' => false],
                            ['answer' => Les marchés ne changent jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie rééquilibrer un portefeuille ?',
                        'answers' => [
                            ['answer' => Ajuster les positions afin de revenir vers les proportions d’investissement souhaitées', 'iscorrect' => true],
                            ['answer' => Vendre automatiquement tous les actifs', 'iscorrect' => false],
                            ['answer' => Acheter uniquement l’actif le plus risqué', 'iscorrect' => false],
                            ['answer' => Garantir un rendement annuel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle limite faut-il connaître concernant la diversification ?',
                        'answers' => [
                            ['answer' => Une diversification excessive peut réduire la concentration du portefeuille sans nécessairement améliorer proportionnellement son rendement', 'iscorrect' => true],
                            ['answer' => Elle garantit toujours un rendement supérieur', 'iscorrect' => false],
                            ['answer' => Elle supprime les crises économiques', 'iscorrect' => false],
                            ['answer' => Elle élimine automatiquement les frais', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Couverture et instruments de gestion des risques',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une couverture financière ?',
                        'answers' => [
                            ['answer' => Une stratégie visant à réduire l’impact financier défavorable d’un risque identifié', 'iscorrect' => true],
                            ['answer' => Une garantie de rendement élevé', 'iscorrect' => false],
                            ['answer' => Une méthode de comptabilisation des ventes', 'iscorrect' => false],
                            ['answer' => Une augmentation automatique du risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel instrument peut être utilisé pour fixer à l’avance un prix futur ?',
                        'answers' => [
                            ['answer' => Un contrat à terme', 'iscorrect' => true],
                            ['answer' => Une facture passée', 'iscorrect' => false],
                            ['answer' => Un relevé bancaire', 'iscorrect' => false],
                            ['answer' => Une immobilisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel droit donne généralement une option à son acheteur ?',
                        'answers' => [
                            ['answer' => Le droit, mais pas l’obligation, d’acheter ou de vendre un actif selon des conditions prévues', 'iscorrect' => true],
                            ['answer' => L’obligation d’acheter dans tous les cas', 'iscorrect' => false],
                            ['answer' => L’obligation de vendre dans tous les cas', 'iscorrect' => false],
                            ['answer' => La garantie d’un bénéfice', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle utiliser une couverture de change ?',
                        'answers' => [
                            ['answer' => Pour réduire l’incertitude liée aux variations futures des taux de change', 'iscorrect' => true],
                            ['answer' => Pour augmenter automatiquement ses ventes', 'iscorrect' => false],
                            ['answer' => Pour supprimer toutes ses dettes', 'iscorrect' => false],
                            ['answer' => Pour éviter de facturer ses clients', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise craint une hausse future des taux d’intérêt sur sa dette. Quelle solution peut être envisagée ?',
                        'answers' => [
                            ['answer' => Utiliser un instrument de couverture de taux adapté à son exposition', 'iscorrect' => true],
                            ['answer' => Augmenter volontairement sa dette variable', 'iscorrect' => false],
                            ['answer' => Ignorer les taux', 'iscorrect' => false],
                            ['answer' => Supprimer les flux de trésorerie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal objectif d’un contrat à terme utilisé comme couverture ?',
                        'answers' => [
                            ['answer' => Réduire l’incertitude concernant le prix futur d’un actif ou d’une devise', 'iscorrect' => true],
                            ['answer' => Garantir le meilleur prix possible dans toutes les situations', 'iscorrect' => false],
                            ['answer' => Supprimer toutes les pertes commerciales', 'iscorrect' => false],
                            ['answer' => Garantir un bénéfice sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une couverture peut-elle avoir un coût ?',
                        'answers' => [
                            ['answer' => Oui, certains instruments ou stratégies de couverture impliquent des coûts ou des opportunités perdues', 'iscorrect' => true],
                            ['answer' => Non, toutes les couvertures sont gratuites', 'iscorrect' => false],
                            ['answer' => Non, une couverture augmente toujours le bénéfice', 'iscorrect' => false],
                            ['answer' => Oui uniquement pour les particuliers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle identifier précisément son exposition avant de mettre en place une couverture ?',
                        'answers' => [
                            ['answer' => Pour choisir une stratégie adaptée au montant, à la nature et à la durée du risque', 'iscorrect' => true],
                            ['answer' => Pour garantir un rendement maximal', 'iscorrect' => false],
                            ['answer' => Pour éviter toute comptabilité', 'iscorrect' => false],
                            ['answer' => Pour augmenter automatiquement son exposition', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un risque résiduel ?',
                        'answers' => [
                            ['answer' => Le risque qui subsiste après la mise en place des mesures de réduction ou de couverture', 'iscorrect' => true],
                            ['answer' => Le risque avant toute analyse', 'iscorrect' => false],
                            ['answer' => Un bénéfice garanti', 'iscorrect' => false],
                            ['answer' => Une dette totalement remboursée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une couverture ne doit-elle pas être considérée comme une garantie absolue ?',
                        'answers' => [
                            ['answer' => Elle peut ne pas couvrir parfaitement l’exposition et comporte elle-même certains risques ou coûts', 'iscorrect' => true],
                            ['answer' => Parce qu’elle augmente toujours les pertes', 'iscorrect' => false],
                            ['answer' => Parce qu’elle ne concerne jamais les risques financiers', 'iscorrect' => false],
                            ['answer' => Parce qu’une couverture supprime tous les bénéfices', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Culture du risque et décisions financières',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une bonne culture du risque dans une organisation ?',
                        'answers' => [
                            ['answer' => Une culture où les risques sont identifiés, communiqués, surveillés et pris en compte dans les décisions', 'iscorrect' => true],
                            ['answer' => Une culture où les risques sont toujours ignorés', 'iscorrect' => false],
                            ['answer' => Une culture où seul le directeur connaît les risques', 'iscorrect' => false],
                            ['answer' => 'Une culture sans aucune procédure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les responsables financiers doivent-ils communiquer les risques aux dirigeants ?',
                        'answers' => [
                            ['answer' => Pour permettre des décisions tenant compte des conséquences financières possibles', 'iscorrect' => true],
                            ['answer' => Pour garantir que toutes les décisions seront rentables', 'iscorrect' => false],
                            ['answer' => Pour supprimer les contrôles', 'iscorrect' => false],
                            ['answer' => Pour éviter toute planification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque doit-il être surveillé régulièrement ?',
                        'answers' => [
                            ['answer' => Les expositions, les marchés et la situation financière peuvent évoluer', 'iscorrect' => true],
                            ['answer' => Les risques restent toujours identiques', 'iscorrect' => false],
                            ['answer' => Les marchés ne changent jamais', 'iscorrect' => false],
                            ['answer' => Une seule analyse suffit pour toute la vie de l’entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement peut augmenter inutilement le risque financier ?',
                        'answers' => [
                            ['answer' => Prendre une position importante sans comprendre son exposition et ses conséquences potentielles', 'iscorrect' => true],
                            ['answer' => Diversifier raisonnablement', 'iscorrect' => false],
                            ['answer' => Surveiller les limites de risque', 'iscorrect' => false],
                            ['answer' => Réaliser des scénarios de stress', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi fixer des limites de risque peut-il être utile ?',
                        'answers' => [
                            ['answer' => Pour empêcher qu’une exposition dépasse un niveau jugé acceptable', 'iscorrect' => true],
                            ['answer' => Pour garantir un bénéfice', 'iscorrect' => false],
                            ['answer' => Pour supprimer toute activité financière', 'iscorrect' => false],
                            ['answer' => Pour éviter de mesurer les risques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue le suivi des indicateurs de risque ?',
                        'answers' => [
                            ['answer' => Il permet de détecter les évolutions importantes et d’agir avant qu’elles ne deviennent critiques', 'iscorrect' => true],
                            ['answer' => Il garantit qu’aucune perte ne surviendra', 'iscorrect' => false],
                            ['answer' => Il remplace toutes les décisions humaines', 'iscorrect' => false],
                            ['answer' => Il augmente automatiquement les revenus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer rendement et risque ?',
                        'answers' => [
                            ['answer' => Un rendement potentiel élevé peut être associé à une incertitude et à une possibilité de perte plus importantes', 'iscorrect' => true],
                            ['answer' => Un rendement élevé est toujours sans risque', 'iscorrect' => false],
                            ['answer' => Le risque et le rendement sont toujours identiques', 'iscorrect' => false],
                            ['answer' => Le rendement n’a aucun rapport avec l’investissement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’appétit pour le risque ?',
                        'answers' => [
                            ['answer' => Le niveau et le type de risque qu’une organisation est disposée à accepter pour atteindre ses objectifs', 'iscorrect' => true],
                            ['answer' => Le montant maximal de son chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => Le nombre d’employés autorisés', 'iscorrect' => false],
                            ['answer' => Le niveau de ses ventes quotidiennes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les décisions de risque doivent-elles être documentées ?',
                        'answers' => [
                            ['answer' => Pour conserver une trace des hypothèses, responsabilités, limites et décisions prises', 'iscorrect' => true],
                            ['answer' => Pour supprimer toute responsabilité', 'iscorrect' => false],
                            ['answer' => Pour empêcher tout contrôle futur', 'iscorrect' => false],
                            ['answer' => Pour garantir automatiquement un bénéfice', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle attitude est la plus adaptée face à un risque financier identifié ?',
                        'answers' => [
                            ['answer' => L’analyser, déterminer son niveau d’exposition et choisir une réponse proportionnée', 'iscorrect' => true],
                            ['answer' => L’ignorer systématiquement', 'iscorrect' => false],
                            ['answer' => Prendre immédiatement davantage de risques', 'iscorrect' => false],
                            ['answer' => Supposer qu’il disparaîtra automatiquement', 'iscorrect' => false],
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
                        'answer' => $answerData['answer'],
                        'iscorrect' => $answerData['iscorrect'],
                    ]);
                }
            }
        }
    }
}
```
