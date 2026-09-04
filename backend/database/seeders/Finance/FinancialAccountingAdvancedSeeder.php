<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialAccountingAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-accounting')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Comptabilité financière — Analyse avancée du résultat',
                'description' => 'Analyse approfondie de la qualité du résultat et des facteurs qui influencent la performance comptable.',
                'questions' => [
                    [
                        'question' => 'Une entreprise affiche une forte progression du résultat net mais une faible croissance de la trésorerie opérationnelle. Quel élément faut-il examiner en priorité ?',
                        'explanation' => 'Il faut rechercher les effets du besoin en fonds de roulement, des créances, des stocks et des autres éléments non directement encaissés.',
                        'choices' => [
                            ['choice_text' => 'Les variations du fonds de roulement et la conversion du résultat en trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le nombre d’actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la valeur comptable des immobilisations', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le chiffre d’affaires de l’exercice précédent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un bénéfice exceptionnel ne doit-il pas être considéré automatiquement comme une source durable de performance ?',
                        'explanation' => 'Un élément exceptionnel n’est généralement pas récurrent et ne reflète donc pas nécessairement la performance future.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut ne pas être reproductible dans les périodes futures', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un bénéfice exceptionnel est toujours une erreur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les éléments exceptionnels sont toujours des dettes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un bénéfice exceptionnel réduit toujours la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente fortement son chiffre d’affaires mais voit sa marge opérationnelle diminuer. Quelle analyse est la plus pertinente ?',
                        'explanation' => 'Il faut rechercher si les coûts progressent plus rapidement que les revenus ou si la politique commerciale pèse sur les marges.',
                        'choices' => [
                            ['choice_text' => 'Analyser l’évolution des coûts, des prix, du mix des ventes et de la productivité', 'is_correct' => true],
                            ['choice_text' => 'Conclure automatiquement à une amélioration de la performance', 'is_correct' => false],
                            ['choice_text' => 'Ignorer la marge puisque le chiffre d’affaires progresse', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les charges fixes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse du résultat avant et après éléments financiers peut-elle être utile ?',
                        'explanation' => 'Elle aide à distinguer la performance opérationnelle de l’effet de la structure de financement.',
                        'choices' => [
                            ['choice_text' => 'Pour distinguer la performance de l’activité de l’effet du financement', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer l’analyse des charges', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer uniquement la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer uniquement les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse des charges peut-elle parfois être trompeuse comme indicateur de performance ?',
                        'explanation' => 'Une baisse temporaire peut provenir d’un élément exceptionnel ou d’une réduction qui compromet l’activité future.',
                        'choices' => [
                            ['choice_text' => 'Elle peut être temporaire ou résulter d’une réduction qui affaiblit l’activité', 'is_correct' => true],
                            ['choice_text' => 'Une baisse des charges est toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Une baisse des charges ne peut jamais améliorer la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Les charges n’ont aucun effet sur le résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer la croissance du résultat avec celle du chiffre d’affaires ?',
                        'explanation' => 'Cela permet d’identifier si la rentabilité progresse plus ou moins vite que l’activité.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer l’évolution de la marge et de la qualité de la croissance', 'is_correct' => true],
                            ['choice_text' => 'Parce que les deux montants doivent toujours évoluer au même rythme', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter l’analyse des charges', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer uniquement la dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du résultat net peut-elle être liée à une baisse exceptionnelle des charges financières ?',
                        'explanation' => 'Le résultat net dépend notamment du coût du financement, indépendamment de la performance opérationnelle.',
                        'choices' => [
                            ['choice_text' => 'Parce que les charges financières influencent le résultat après performance opérationnelle', 'is_correct' => true],
                            ['choice_text' => 'Parce que les intérêts sont toujours comptabilisés comme revenus', 'is_correct' => false],
                            ['choice_text' => 'Parce que la dette n’a aucun effet sur le résultat', 'is_correct' => false],
                            ['choice_text' => 'Parce que les charges financières sont toujours des actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse du résultat doit-elle distinguer les éléments récurrents des éléments non récurrents ?',
                        'explanation' => 'Cette distinction permet d’estimer plus correctement la capacité de l’entreprise à reproduire sa performance.',
                        'choices' => [
                            ['choice_text' => 'Pour mieux apprécier la performance soutenable dans le futur', 'is_correct' => true],
                            ['choice_text' => 'Pour éliminer tous les éléments exceptionnels des comptes', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer les charges en produits', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le besoin de prévisions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle présenter une rentabilité élevée malgré un niveau de liquidité faible ?',
                        'explanation' => 'Le résultat et la liquidité mesurent des dimensions différentes de la situation financière.',
                        'choices' => [
                            ['choice_text' => 'Parce que le résultat comptable et la liquidité suivent des mécanismes différents', 'is_correct' => true],
                            ['choice_text' => 'Parce que la rentabilité garantit toujours le cash disponible', 'is_correct' => false],
                            ['choice_text' => 'Parce que la liquidité ne concerne que les banques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bénéfices sont toujours encaissés immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est la plus robuste pour analyser la qualité du résultat ?', 'explanation' => 'Une analyse robuste examine la récurrence des éléments, les flux de trésorerie, les marges et les hypothèses comptables.',
                        'choices' => [
                            ['choice_text' => 'Combiner analyse des marges, récurrence des résultats, flux de trésorerie et éléments exceptionnels', 'is_correct' => true],
                            ['choice_text' => 'Utiliser uniquement le bénéfice net', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Analyse avancée des créances',
                'description' => 'Analyse des créances clients, de leur recouvrabilité et de leur impact financier.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une hausse des créances plus rapide que celle du chiffre d’affaires peut-elle être un signal d’alerte ?',
                        'explanation' => 'Elle peut indiquer un allongement des délais de paiement ou une hausse du risque client.',
                        'choices' => [
                            ['choice_text' => 'Elle peut signaler un recouvrement plus lent ou des conditions de crédit plus souples', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours une meilleure liquidité', 'is_correct' => false],
                            ['choice_text' => 'Elle signifie automatiquement une hausse de la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le risque de défaut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse par ancienneté des créances est-elle importante ?',
                        'explanation' => 'Plus une créance reste impayée longtemps, plus son risque de recouvrement peut devenir significatif.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les créances dont le risque de non-recouvrement augmente avec le temps', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les montants facturés', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire automatiquement les dettes fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer les créances en immobilisations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une provision ou dépréciation sur créance peut-elle être nécessaire ?', 'explanation' => 'Elle permet de refléter le risque qu’une partie de la créance ne soit pas recouvrée, selon les règles applicables.',
                        'choices' => [
                            ['choice_text' => 'Pour refléter une perte de valeur probable ou un risque de non-recouvrement', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter artificiellement le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer la créance en trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise affiche un ratio de créances très élevé par rapport aux ventes. Quel risque peut-il apparaître ?', 'explanation' => 'Une concentration élevée de créances peut augmenter le besoin de financement et le risque de défaut.',
                        'choices' => [
                            ['choice_text' => 'Une pression sur la trésorerie et un risque de crédit client plus important', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration automatique de la liquidité', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des dettes', 'is_correct' => false],
                            ['choice_text' => 'Une hausse garantie du résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il examiner les clients significatifs séparément dans une analyse des créances ?', 'explanation' => 'Un client important peut représenter une part significative du risque total.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un seul client peut représenter une part importante du risque de crédit', 'is_correct' => true],
                            ['choice_text' => 'Parce que les petits clients ne paient jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un grand client est toujours sans risque', 'is_correct' => false],
                            ['choice_text' => 'Parce que les créances sont indépendantes du chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les créances contestées méritent-elles une attention particulière ?', 'explanation' => 'Une contestation peut retarder ou compromettre l’encaissement.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent présenter un risque supérieur de retard ou de perte', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles sont toujours encaissées immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles deviennent automatiquement des immobilisations', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles augmentent toujours le bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une amélioration du délai de recouvrement peut-elle libérer des ressources financières ?',
                        'explanation' => 'Les créances sont converties plus rapidement en trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Parce que les ventes sont transformées plus rapidement en encaissements', 'is_correct' => true],
                            ['choice_text' => 'Parce que les ventes diminuent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dettes augmentent automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les créances disparaissent sans paiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un taux élevé de créances irrécouvrables peut-il réduire les capitaux propres ?', 'explanation' => 'Les pertes sur créances diminuent le résultat, ce qui peut réduire les capitaux propres.',
                        'choices' => [
                            ['choice_text' => 'Les pertes constatées sur créances peuvent réduire le résultat et donc les capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Les créances irrécouvrables augmentent toujours les bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Elles créent automatiquement de nouveaux actifs', 'is_correct' => false],
                            ['choice_text' => 'Elles réduisent directement les ventes futures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi rapprocher la balance âgée des créances avec les encaissements récents ?', 'explanation' => 'Cela permet d’évaluer la qualité du portefeuille de créances et l’efficacité du recouvrement.',
                        'choices' => [
                            ['choice_text' => 'Pour apprécier la qualité des créances et l’efficacité du recouvrement', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les dettes fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer les immobilisations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur objectif de la gestion comptable des créances ?', 'explanation' => 'Il faut maintenir des créances recouvrables tout en soutenant les ventes et en maîtrisant le coût du crédit client.',
                        'choices' => [
                            ['choice_text' => 'Soutenir les ventes tout en maîtrisant le risque de crédit et le besoin de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Maximiser systématiquement les créances', 'is_correct' => false],
                            ['choice_text' => 'Éliminer tout crédit client', 'is_correct' => false],
                            ['choice_text' => 'Augmenter les délais de paiement sans limite', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Analyse avancée des stocks',
                'description' => 'Évaluez la valorisation, la rotation et les risques liés aux stocks.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un inventaire physique est-il indispensable pour une analyse fiable des stocks ?', 'explanation' => 'Les enregistrements comptables doivent être confrontés aux quantités réellement présentes.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que les quantités comptabilisées correspondent aux biens réellement détenus', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les stocks comptables', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir la hausse des ventes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les coûts de stockage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse de la rotation des stocks peut-elle être préoccupante ?', 'explanation' => 'Elle peut indiquer que les marchandises restent plus longtemps en stock.',
                        'choices' => [
                            ['choice_text' => 'Elle peut indiquer une accumulation ou une baisse de la vitesse d’écoulement', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours une amélioration de la marge', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit automatiquement le besoin de financement', 'is_correct' => false],
                            ['choice_text' => 'Elle signifie toujours une hausse des ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stocks obsolètes peuvent-ils nécessiter une dépréciation ?', 'explanation' => 'Leur valeur récupérable ou économique peut devenir inférieure à leur valeur comptable.',
                        'choices' => [
                            ['choice_text' => 'Parce que leur valeur économique peut devenir inférieure à leur valeur comptable', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un stock obsolète augmente toujours de valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les stocks ne peuvent jamais être dépréciés', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une dépréciation augmente automatiquement le bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle présenter un stock élevé et une faible marge ?', 'explanation' => 'Un stock élevé peut être associé à des coûts de stockage importants ou à des produits difficiles à écouler.',
                        'choices' => [
                            ['choice_text' => 'Les stocks peuvent immobiliser du capital et comporter des coûts ou risques supplémentaires', 'is_correct' => true],
                            ['choice_text' => 'Un stock élevé garantit toujours une marge élevée', 'is_correct' => false],
                            ['choice_text' => 'Les stocks n’ont aucune influence économique', 'is_correct' => false],
                            ['choice_text' => 'La marge dépend uniquement du niveau de stock', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser la rotation des stocks avec les niveaux de service client ?', 'explanation' => 'Une réduction excessive des stocks peut libérer du capital mais provoquer des ruptures.',
                        'choices' => [
                            ['choice_text' => 'Pour équilibrer efficacité financière et capacité à répondre à la demande', 'is_correct' => true],
                            ['choice_text' => 'Parce que le service client est indépendant des stocks', 'is_correct' => false],
                            ['choice_text' => 'Pour maximiser les stocks dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les coûts logistiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût des ventes doit-il être rapproché des mouvements de stock ?', 'explanation' => 'Cela permet de comprendre la consommation des marchandises et la marge brute.',
                        'choices' => [
                            ['choice_text' => 'Pour relier les ventes aux marchandises effectivement consommées ou vendues', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les inventaires', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les actifs sans justification', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer uniquement les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte augmentation des stocks avec des ventes stables mérite-t-elle une investigation ?', 'explanation' => 'Elle peut signaler un ralentissement de la rotation, une mauvaise prévision ou un problème de demande.',
                        'choices' => [
                            ['choice_text' => 'Elle peut signaler une accumulation anormale ou une prévision de demande incorrecte', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit une hausse des ventes futures', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit automatiquement les coûts', 'is_correct' => false],
                            ['choice_text' => 'Elle signifie toujours une forte croissance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les inventaires de fin de période peuvent-ils influencer fortement le résultat ?', 'explanation' => 'La valeur du stock final influence le coût des ventes et donc la marge ou le résultat selon le cadre comptable applicable.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils influencent la détermination du coût des ventes et du résultat', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils constituent toujours des produits', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils augmentent automatiquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le stock final n’apparaît jamais dans les états financiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une erreur d’inventaire peut-elle affecter plusieurs périodes comptables ?', 'explanation' => 'Une erreur de stock final d’une période peut influencer le stock initial et le coût des ventes de la période suivante.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut affecter à la fois le stock final d’une période et le stock initial de la suivante', 'is_correct' => true],
                            ['choice_text' => 'Parce que les stocks changent automatiquement les capitaux propres de toutes les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Parce que les erreurs de stock n’ont jamais de période spécifique', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût des ventes est indépendant des stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif doit poursuivre un système avancé de gestion comptable des stocks ?', 'explanation' => 'Il doit assurer une information fiable tout en maîtrisant le risque de surstockage, d’obsolescence et de rupture.',
                        'choices' => [
                            ['choice_text' => 'Garantir une valorisation fiable tout en maîtrisant les risques d’obsolescence et de surstockage', 'is_correct' => true],
                            ['choice_text' => 'Maximiser systématiquement la quantité de stocks', 'is_correct' => false],
                            ['choice_text' => 'Réduire tous les stocks à zéro', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout inventaire physique', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Immobilisations et dépréciation avancées',
                'description' => 'Analyse approfondie des immobilisations, amortissements et pertes de valeur.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une immobilisation peut-elle nécessiter une dépréciation en plus de son amortissement ?', 'explanation' => 'L’amortissement répartit le coût tandis que la dépréciation peut refléter une baisse supplémentaire de valeur.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une perte de valeur supplémentaire peut survenir indépendamment du rythme normal d’amortissement', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’amortissement augmente toujours la valeur de l’actif', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une dépréciation remplace systématiquement l’amortissement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une immobilisation ne peut jamais perdre de valeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel événement peut constituer un indice de perte de valeur d’une immobilisation ?', 'explanation' => 'Une baisse importante de la capacité économique de l’actif peut constituer un indice de dépréciation.',
                        'choices' => [
                            ['choice_text' => 'Une détérioration importante de sa capacité à générer des avantages économiques', 'is_correct' => true],
                            ['choice_text' => 'Une hausse des ventes de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une baisse des dettes fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation de la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la durée d’utilité doit-elle être réexaminée lorsqu’il existe des changements importants ?', 'explanation' => 'Une modification de l’utilisation attendue peut affecter le rythme d’amortissement.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un changement dans l’utilisation prévue peut modifier les estimations d’amortissement', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’amortissement ne dépend jamais des estimations', 'is_correct' => false],
                            ['choice_text' => 'Parce que les immobilisations sont toujours amorties sur un an', 'is_correct' => false],
                            ['choice_text' => 'Parce que la durée d’utilisation modifie directement le chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une immobilisation fortement sous-utilisée peut-elle devenir un sujet comptable et financier ?', 'explanation' => 'Une utilisation réduite peut remettre en cause les flux attendus et la valeur économique de l’actif.',
                        'choices' => [
                            ['choice_text' => 'Elle peut réduire les avantages économiques futurs attendus et signaler une perte de valeur', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours une meilleure rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente automatiquement sa valeur', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme l’actif en créance client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur comptable d’une immobilisation peut-elle différer de sa valeur de marché ?', 'explanation' => 'La valeur comptable découle des règles comptables, tandis que la valeur de marché dépend des conditions économiques et des transactions observables.',
                        'choices' => [
                            ['choice_text' => 'Parce que les deux valeurs sont déterminées selon des bases et objectifs différents', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute valeur comptable est nécessairement une valeur de marché', 'is_correct' => false],
                            ['choice_text' => 'Parce que la valeur de marché est toujours égale au coût historique', 'is_correct' => false],
                            ['choice_text' => 'Parce que les immobilisations n’ont jamais de valeur de marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le choix de la méthode d’amortissement peut-il influencer les résultats par période ?', 'explanation' => 'Différentes méthodes répartissent le coût de l’actif différemment au cours du temps.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent répartir les charges à des rythmes différents', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les méthodes produisent toujours exactement les mêmes charges', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’amortissement est toujours une recette', 'is_correct' => false],
                            ['choice_text' => 'Parce que la méthode n’a aucun effet sur le résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les actifs totalement amortis doivent-ils néanmoins être suivis tant qu’ils existent ?', 'explanation' => 'Ils peuvent toujours être utilisés et doivent être identifiables jusqu’à leur sortie ou leur mise au rebut.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer leur suivi physique et comptable jusqu’à leur sortie', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils continuent automatiquement à générer des charges d’amortissement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils deviennent automatiquement des passifs', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils doivent toujours être réévalués à leur coût d’origine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la sortie d’une immobilisation peut-elle produire un résultat comptable ?', 'explanation' => 'Le produit de cession peut différer de la valeur comptable nette de l’actif.',
                        'choices' => [
                            ['choice_text' => 'Parce que le prix de cession peut être différent de la valeur comptable nette', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une sortie d’actif est toujours une charge égale à zéro', 'is_correct' => false],
                            ['choice_text' => 'Parce que la cession augmente toujours les stocks', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une immobilisation ne peut jamais être vendue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les investissements importants doivent-ils être rapprochés de leur rendement attendu ?', 'explanation' => 'Une immobilisation consomme du capital et doit être évaluée selon sa contribution économique.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier si le capital immobilisé génère un rendement suffisant', 'is_correct' => true],
                            ['choice_text' => 'Parce que tout investissement est nécessairement rentable', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les immobilisations', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actifs ne produisent jamais de flux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne gestion comptable des immobilisations ?', 'explanation' => 'Elle combine identification, suivi, amortissement, contrôle de valeur et documentation des mouvements.',
                        'choices' => [
                            ['choice_text' => 'Assurer leur identification, leur suivi, leur amortissement et l’évaluation des pertes de valeur', 'is_correct' => true],
                            ['choice_text' => 'Les maintenir à leur coût initial sans exception', 'is_correct' => false],
                            ['choice_text' => 'Les amortir toujours en une seule année', 'is_correct' => false],
                            ['choice_text' => 'Les retirer automatiquement des comptes après paiement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Clôture avancée et qualité des comptes',
                'description' => 'Approfondissez les procédures de clôture, les écritures de régularisation et les contrôles.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une clôture comptable doit-elle intégrer une revue des charges à payer ?', 'explanation' => 'Certaines charges liées à la période peuvent ne pas avoir encore été facturées ou réglées.',
                        'choices' => [
                            ['choice_text' => 'Pour ne pas omettre les charges qui se rapportent à la période clôturée', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement les actifs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les dettes fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute régularisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les produits constatés d’avance doivent-ils être analysés à la clôture ?', 'explanation' => 'Une partie des montants encaissés peut concerner une période future.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter de reconnaître comme produits actuels des montants liés à une période future', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter le chiffre d’affaires de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire les passifs', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une clôture rapide mais sans contrôles suffisants présente-t-elle un risque ?', 'explanation' => 'La rapidité peut entraîner des omissions, erreurs de rattachement ou anomalies non détectées.',
                        'choices' => [
                            ['choice_text' => 'Elle peut produire des états financiers incomplets ou incorrects', 'is_correct' => true],
                            ['choice_text' => 'Elle améliore automatiquement la qualité des comptes', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine toutes les régularisations', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit des écritures parfaitement exactes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi réaliser une analyse des variations importantes pendant la clôture ?', 'explanation' => 'Une variation inhabituelle peut révéler une erreur ou une évolution économique nécessitant une explication.',
                        'choices' => [
                            ['choice_text' => 'Pour distinguer les évolutions économiques réelles des anomalies comptables', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute variation future', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter artificiellement le résultat', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer les données historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une clôture avancée doit-elle intégrer la vérification des comptes de bilan ?', 'explanation' => 'Les comptes de bilan doivent être justifiés et cohérents avant la production des états financiers.',
                        'choices' => [
                            ['choice_text' => 'Pour s’assurer que les actifs, passifs et capitaux propres sont correctement justifiés', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer le compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute analyse de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une hausse du chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi documenter les écritures de clôture complexes ?', 'explanation' => 'Une documentation claire facilite la revue, l’audit et la compréhension des hypothèses utilisées.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre leur vérification et leur compréhension ultérieure', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute modification', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les contrôles', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les états financiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les comptes interentreprises doivent-ils être rapprochés lors de la clôture d’un groupe ?', 'explanation' => 'Les soldes réciproques doivent être cohérents avant les travaux de consolidation.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer la cohérence des soldes réciproques entre entités', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les ventes du groupe', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les transactions internes', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer les dettes en capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les écritures inhabituelles de fin d’exercice doivent-elles être examinées avec attention ?', 'explanation' => 'Elles peuvent être légitimes mais présentent parfois un risque plus élevé d’erreur ou de mauvaise classification.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles peuvent avoir un impact significatif et nécessiter une justification particulière', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles sont toujours frauduleuses', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles n’ont jamais d’effet sur les comptes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles doivent toujours être supprimées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contrôles post-clôture peuvent-ils être utiles ?', 'explanation' => 'Ils permettent d’identifier certaines erreurs apparues ou révélées après la clôture.',
                        'choices' => [
                            ['choice_text' => 'Pour détecter des anomalies ou événements ultérieurs pertinents', 'is_correct' => true],
                            ['choice_text' => 'Pour rouvrir automatiquement tous les comptes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les écritures de clôture', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir qu’aucune information nouvelle n’existera', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’une clôture comptable de qualité professionnelle ?', 'explanation' => 'Elle doit produire des états financiers fiables, complets, justifiés et correctement rattachés à la période.',
                        'choices' => [
                            ['choice_text' => 'Produire des comptes complets, fiables, justifiés et correctement rattachés à la période', 'is_correct' => true],
                            ['choice_text' => 'Maximiser artificiellement le résultat', 'is_correct' => false],
                            ['choice_text' => 'Réduire toutes les charges', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout contrôle externe', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Contrôle interne et fiabilité des données',
                'description' => 'Analysez les mécanismes de contrôle qui contribuent à la qualité de l’information comptable.',
                'questions' => [
                    [
                        'question' => 'Pourquoi la séparation des tâches est-elle importante dans le processus fournisseurs ?', 'explanation' => 'Elle limite la possibilité qu’une même personne contrôle toutes les étapes d’une opération.',
                        'choices' => [
                            ['choice_text' => 'Elle réduit le risque qu’une seule personne puisse créer et dissimuler une opération irrégulière', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit l’absence totale de fraude', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente automatiquement les achats', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les fournisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi contrôler les coordonnées bancaires d’un fournisseur avant un paiement sensible ?', 'explanation' => 'Une modification frauduleuse des coordonnées peut entraîner un détournement de fonds.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire le risque de paiement vers un mauvais bénéficiaire', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les dettes fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire les ventes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les contrôles bancaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une validation indépendante des écritures manuelles importantes est-elle utile ?', 'explanation' => 'Elle fournit un contrôle supplémentaire sur les montants, comptes et justifications.',
                        'choices' => [
                            ['choice_text' => 'Elle ajoute un niveau de revue sur des opérations présentant un risque plus élevé', 'is_correct' => true],
                            ['choice_text' => 'Elle empêche toute écriture future', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le besoin de pièces justificatives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les accès au logiciel comptable doivent-ils être contrôlés ?', 'explanation' => 'Un contrôle des accès réduit le risque de modifications non autorisées.',
                        'choices' => [
                            ['choice_text' => 'Pour limiter les modifications et accès non autorisés aux données comptables', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute collaboration', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les revenus', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les sauvegardes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver une piste d’audit des modifications comptables ?', 'explanation' => 'Elle permet de retracer les changements et d’identifier les utilisateurs et dates concernés.',
                        'choices' => [
                            ['choice_text' => 'Pour retracer les modifications, leurs auteurs et leur contexte', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute modification future', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir l’absence d’erreur', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les rapprochements sont-ils des contrôles importants ?', 'explanation' => 'Ils permettent de confronter plusieurs sources indépendantes d’information.',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de détecter des écarts entre différentes sources de données', 'is_correct' => true],
                            ['choice_text' => 'Ils augmentent automatiquement la précision des données sans intervention', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment toutes les anomalies', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent toutes les procédures de contrôle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une anomalie isolée doit-elle parfois être investiguée même si son montant est faible ?', 'explanation' => 'Elle peut révéler une erreur de processus ou un problème systémique.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut révéler une faiblesse plus large du processus', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une petite anomalie est toujours frauduleuse', 'is_correct' => false],
                            ['choice_text' => 'Parce que son montant sera toujours significatif', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle augmente automatiquement les charges', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contrôles doivent-ils être adaptés aux risques ?', 'explanation' => 'Les contrôles doivent concentrer les efforts sur les processus qui présentent les conséquences ou probabilités les plus importantes.',
                        'choices' => [
                            ['choice_text' => 'Pour concentrer les ressources de contrôle sur les risques les plus significatifs', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre tous les contrôles identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer les contrôles simples', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir zéro incident dans toutes les situations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une sauvegarde des données comptables est-elle importante ?', 'explanation' => 'Elle permet de restaurer l’information après une perte, une erreur ou un incident technique.',
                        'choices' => [
                            ['choice_text' => 'Pour préserver la continuité et la récupération des données en cas d’incident', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les contrôles internes', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir que les données sont toujours exactes', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter le chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume un contrôle interne comptable efficace ?', 'explanation' => 'Il doit combiner prévention, détection, traçabilité, responsabilités et revue des opérations sensibles.',
                        'choices' => [
                            ['choice_text' => 'Prévenir, détecter, documenter et corriger les anomalies avec des responsabilités claires', 'is_correct' => true],
                            ['choice_text' => 'Faire confiance uniquement aux automatismes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute revue humaine', 'is_correct' => false],
                            ['choice_text' => 'Contrôler uniquement les opérations de faible montant', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Analyse intégrée des états financiers',
                'description' => 'Intégrez bilan, compte de résultat et flux de trésorerie dans un diagnostic comptable avancé.',
                'questions' => [
                    [
                        'question' => 'Une entreprise augmente ses bénéfices mais voit ses créances et stocks progresser fortement. Quel risque peut apparaître ?', 'explanation' => 'Une croissance comptable peut consommer beaucoup de trésorerie via le fonds de roulement.',
                        'choices' => [
                            ['choice_text' => 'Une hausse du besoin de financement de l’exploitation', 'is_correct' => true],
                            ['choice_text' => 'Une disparition des dettes', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration automatique de la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Une baisse automatique du chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser la dette avec le flux de trésorerie opérationnel ?', 'explanation' => 'La capacité à rembourser dépend davantage des ressources de trésorerie disponibles que du bénéfice seul.',
                        'choices' => [
                            ['choice_text' => 'Pour apprécier la capacité réelle de l’activité à servir la dette', 'is_correct' => true],
                            ['choice_text' => 'Parce que la dette est indépendante de la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer uniquement les actifs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les intérêts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle afficher un bénéfice croissant tout en ayant une rentabilité des actifs en baisse ?', 'explanation' => 'Les actifs peuvent augmenter plus rapidement que le résultat.',
                        'choices' => [
                            ['choice_text' => 'Parce que la base d’actifs peut augmenter plus rapidement que le résultat', 'is_correct' => true],
                            ['choice_text' => 'Parce que le bénéfice et les actifs sont toujours inversement liés', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actifs n’entrent jamais dans l’analyse de rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bénéfices réduisent toujours les actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse des capitaux propres peut-elle survenir malgré une stabilité des actifs ?', 'explanation' => 'Une augmentation des passifs ou des pertes peut réduire les capitaux propres selon l’équation comptable.',
                        'choices' => [
                            ['choice_text' => 'Une hausse des passifs ou des pertes peut réduire l’intérêt résiduel des propriétaires', 'is_correct' => true],
                            ['choice_text' => 'Les capitaux propres augmentent toujours lorsque les actifs restent stables', 'is_correct' => false],
                            ['choice_text' => 'Les passifs n’ont aucun effet sur les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Les pertes augmentent toujours les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les flux de financement doivent-ils être analysés séparément des flux opérationnels ?', 'explanation' => 'Les deux catégories proviennent de sources économiques différentes.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils renseignent sur des mécanismes financiers différents', 'is_correct' => true],
                            ['choice_text' => 'Parce que les flux de financement sont toujours négatifs', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux opérationnels ne sont jamais importants', 'is_correct' => false],
                            ['choice_text' => 'Parce que les deux catégories sont toujours identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise finance régulièrement ses pertes opérationnelles par de nouveaux emprunts. Quelle problématique stratégique apparaît ?', 'explanation' => 'L’endettement ne peut durablement remplacer la capacité de l’activité à générer des ressources.',
                        'choices' => [
                            ['choice_text' => 'La soutenabilité du modèle économique et de la structure financière', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration automatique de la solvabilité', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des coûts financiers', 'is_correct' => false],
                            ['choice_text' => 'Une réduction certaine du risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un bilan très solide aujourd’hui ne garantit-il pas une situation financière saine dans plusieurs années ?', 'explanation' => 'Les performances futures, les investissements, les dettes et les conditions économiques peuvent évoluer.',
                        'choices' => [
                            ['choice_text' => 'Parce que la situation financière évolue avec les opérations et les conditions économiques', 'is_correct' => true],
                            ['choice_text' => 'Parce que les actifs disparaissent automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un bilan ne sert jamais à évaluer la situation financière', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dettes restent toujours constantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse intégrée des états financiers est-elle plus informative qu’une lecture isolée du compte de résultat ?', 'explanation' => 'Le bilan et les flux de trésorerie permettent de comprendre la structure financière et les mouvements de ressources.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle relie performance, structure financière et mouvements de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Parce que le compte de résultat n’a aucune utilité', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bilan remplace tous les autres documents', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux de trésorerie sont toujours identiques au bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une croissance financée principalement par des dettes peut-elle augmenter le risque financier ?', 'explanation' => 'Les obligations de remboursement peuvent augmenter plus vite que la capacité de génération de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Parce que les obligations fixes peuvent augmenter plus rapidement que les flux disponibles', 'is_correct' => true],
                            ['choice_text' => 'Parce que la dette réduit toujours les coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’endettement garantit une croissance stable', 'is_correct' => false],
                            ['choice_text' => 'Parce que les capitaux propres deviennent automatiquement négatifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume le mieux une analyse financière intégrée ?', 'explanation' => 'Les trois états principaux doivent être rapprochés pour comprendre la performance, la structure et la liquidité.',
                        'choices' => [
                            ['choice_text' => 'Relier résultat, bilan et flux de trésorerie pour comprendre la situation économique complète', 'is_correct' => true],
                            ['choice_text' => 'Se concentrer uniquement sur le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement le bilan', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les flux de trésorerie', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Cas avancés de diagnostic comptable',
                'description' => 'Résolvez des situations comptables complexes à partir d’indices financiers.',
                'questions' => [
                    [
                        'question' => 'Une entreprise affiche une croissance de 25 % des ventes, une hausse de 50 % des créances et une baisse de la trésorerie. Quelle hypothèse mérite le plus d’attention ?', 'explanation' => 'Les créances progressent beaucoup plus vite que les ventes et peuvent absorber la trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Un allongement du délai de recouvrement ou une politique de crédit plus agressive', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration automatique de la liquidité', 'is_correct' => false],
                            ['choice_text' => 'Une baisse certaine des ventes futures', 'is_correct' => false],
                            ['choice_text' => 'Une diminution des risques clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société présente un stock en forte croissance mais des ventes stagnantes. Quelle investigation est prioritaire ?', 'explanation' => 'Il faut déterminer si le stock reflète une erreur de prévision, une baisse de demande ou une accumulation anormale.',
                        'choices' => [
                            ['choice_text' => 'Analyser la rotation, l’obsolescence et les prévisions de demande', 'is_correct' => true],
                            ['choice_text' => 'Augmenter encore les stocks', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les stocks puisque les ventes sont stables', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les charges d’exploitation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un bénéfice positif mais des pertes de trésorerie récurrentes et un endettement croissant. Quelle conclusion est la plus prudente ?', 'explanation' => 'Il faut examiner la qualité du résultat et la soutenabilité du financement.',
                        'choices' => [
                            ['choice_text' => 'La soutenabilité financière doit être examinée malgré le bénéfice comptable positif', 'is_correct' => true],
                            ['choice_text' => 'Le bénéfice prouve que la situation est forcément saine', 'is_correct' => false],
                            ['choice_text' => 'La dette est sans importance', 'is_correct' => false],
                            ['choice_text' => 'Les flux de trésorerie ne sont pas utiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise vend une immobilisation pour un prix supérieur à sa valeur comptable nette. Quel phénomène comptable peut apparaître ?', 'explanation' => 'La différence entre le prix de cession et la valeur comptable peut générer un résultat de cession.',
                        'choices' => [
                            ['choice_text' => 'Une plus-value ou un gain de cession', 'is_correct' => true],
                            ['choice_text' => 'Une dette fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation automatique des stocks', 'is_correct' => false],
                            ['choice_text' => 'Une créance client permanente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise constate qu’une partie importante de ses stocks est obsolète. Quel risque comptable principal apparaît ?', 'explanation' => 'La valeur comptable peut être supérieure à la valeur économique récupérable.',
                        'choices' => [
                            ['choice_text' => 'Une sous-évaluation de la charge ou une surévaluation potentielle des actifs si aucune perte de valeur n’est constatée', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation automatique du bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Une hausse automatique de la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des dettes fournisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client important conteste une facture très élevée à quelques jours de la clôture. Pourquoi cette situation mérite-t-elle une attention particulière ?', 'explanation' => 'La contestation peut influencer la recouvrabilité et l’évaluation de la créance.',
                        'choices' => [
                            ['choice_text' => 'Elle peut affecter la recouvrabilité et l’évaluation de la créance à la clôture', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit le paiement immédiat', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente automatiquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme la créance en immobilisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reporte une dépense importante de fin d’année à l’exercice suivant sans justification économique. Quel risque existe ?', 'explanation' => 'Le résultat de l’exercice actuel peut être artificiellement amélioré.',
                        'choices' => [
                            ['choice_text' => 'Une surévaluation artificielle du résultat de l’exercice', 'is_correct' => true],
                            ['choice_text' => 'Une réduction automatique des actifs', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation des dettes fiscales uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une hausse automatique des stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède plusieurs comptes bancaires et constate des différences répétées lors des rapprochements. Quelle action est la plus pertinente ?', 'explanation' => 'Les différences récurrentes peuvent révéler une faiblesse de processus, d’enregistrement ou de contrôle.',
                        'choices' => [
                            ['choice_text' => 'Identifier la cause racine des écarts et renforcer le processus de rapprochement', 'is_correct' => true],
                            ['choice_text' => 'Ignorer les écarts faibles', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les comptes bancaires', 'is_correct' => false],
                            ['choice_text' => 'Modifier directement les soldes sans justificatif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société constate une forte hausse du bénéfice liée presque entièrement à une opération non récurrente. Quelle analyse doit être faite ?', 'explanation' => 'Il faut déterminer le niveau de performance récurrente sans cet élément.',
                        'choices' => [
                            ['choice_text' => 'Évaluer la performance récurrente indépendamment de l’opération exceptionnelle', 'is_correct' => true],
                            ['choice_text' => 'Utiliser automatiquement le bénéfice exceptionnel comme base de prévision', 'is_correct' => false],
                            ['choice_text' => 'Ignorer complètement le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Augmenter automatiquement les charges futures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le réflexe principal d’un comptable ou analyste face à une anomalie significative ?', 'explanation' => 'Une anomalie doit être comprise, documentée et corrigée si elle résulte d’une erreur.',
                        'choices' => [
                            ['choice_text' => 'Identifier sa cause, mesurer son impact, la documenter et la corriger si nécessaire', 'is_correct' => true],
                            ['choice_text' => 'La modifier immédiatement sans analyse', 'is_correct' => false],
                            ['choice_text' => 'L’ignorer si elle concerne un seul compte', 'is_correct' => false],
                            ['choice_text' => 'La déplacer vers une autre période sans justification', 'is_correct' => false],
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
                    'duration' => 27,
                    'passing_score' => 70,
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Advanced',
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