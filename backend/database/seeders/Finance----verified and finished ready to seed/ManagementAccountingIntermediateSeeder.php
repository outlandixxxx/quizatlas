<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ManagementAccountingIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'management-accounting')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Comptabilité de gestion — Analyse des coûts',
                'description' => 'Analysez les comportements des coûts et leur utilisation dans les décisions de gestion.',
                'questions' => [
                    [
                        'question' => 'Une entreprise supporte 60 000 € de coûts fixes et 8 € de coût variable par unité. Pour 5 000 unités produites, quel est le coût total ?',
                        'explanation' => 'Le coût variable total est de 5 000 × 8 = 40 000 €. Le coût total est donc 60 000 + 40 000 = 100 000 €.',
                        'choices' => [
                            ['choice_text' => '100 000 €', 'is_correct' => true],
                            ['choice_text' => '68 000 €', 'is_correct' => false],
                            ['choice_text' => '40 000 €', 'is_correct' => false],
                            ['choice_text' => '108 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût fixe total reste-t-il généralement stable à court terme dans une plage d’activité donnée ?',
                        'explanation' => 'Un coût fixe ne dépend pas directement du volume à court terme, tant que l’entreprise reste dans la capacité prévue.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il ne varie pas directement avec le volume dans la plage d’activité considérée', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il devient variable lorsque la production augmente', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il disparaît lorsque la production diminue', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est toujours égal à zéro', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût variable unitaire est-il souvent utile dans une analyse de court terme ?',
                        'explanation' => 'Il permet d’estimer comment le coût total évolue lorsque le volume change.',
                        'choices' => [
                            ['choice_text' => 'Il aide à mesurer l’effet d’une unité supplémentaire sur les coûts variables', 'is_correct' => true],
                            ['choice_text' => 'Il remplace toujours les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Il représente toujours le coût de revient complet', 'is_correct' => false],
                            ['choice_text' => 'Il n’a aucun lien avec le volume', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise produit 4 000 unités avec 32 000 € de coûts variables. Quel est le coût variable unitaire ?',
                        'explanation' => '32 000 € ÷ 4 000 = 8 € par unité.',
                        'choices' => [
                            ['choice_text' => '8 €', 'is_correct' => true],
                            ['choice_text' => '4 €', 'is_correct' => false],
                            ['choice_text' => '32 €', 'is_correct' => false],
                            ['choice_text' => '128 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût fixe par unité diminue-t-il généralement lorsque le volume augmente ?',
                        'explanation' => 'Le même montant fixe est réparti sur davantage d’unités.',
                        'choices' => [
                            ['choice_text' => 'Parce que le même coût fixe total est réparti sur un plus grand volume', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts fixes disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût variable devient nul', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix de vente augmente automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’utiliser un coût moyen unique pour plusieurs produits très différents ?',
                        'explanation' => 'Une moyenne peut masquer les différences de consommation de ressources entre produits.',
                        'choices' => [
                            ['choice_text' => 'Elle peut masquer les différences réelles de consommation de ressources entre produits', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente automatiquement la précision', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les coûts indirects', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit la même rentabilité pour tous les produits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi certains coûts semi-variables doivent-ils être séparés en composante fixe et variable ?',
                        'explanation' => 'Cette séparation améliore l’analyse du comportement des coûts et les prévisions.',
                        'choices' => [
                            ['choice_text' => 'Pour mieux prévoir l’évolution des coûts lorsque le niveau d’activité change', 'is_correct' => true],
                            ['choice_text' => 'Pour transformer tous les coûts en charges fixes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les dépenses variables', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une baisse du coût total', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une augmentation du volume peut-elle réduire le coût unitaire sans réduire le coût total ?',
                        'explanation' => 'Le volume supplémentaire augmente souvent les coûts variables totaux alors que le coût fixe est réparti sur davantage d’unités.',
                        'choices' => [
                            ['choice_text' => 'Parce que le volume supplémentaire peut augmenter le coût total tout en répartissant mieux les coûts fixes', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts variables deviennent nuls', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes deviennent négatifs', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix de vente réduit toujours le coût', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts par activité peuvent-ils être plus pertinents qu’une moyenne globale ?',
                        'explanation' => 'Ils permettent de mieux relier les ressources consommées aux activités qui les génèrent.',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de mieux relier les ressources consommées aux activités responsables des coûts', 'is_correct' => true],
                            ['choice_text' => 'Ils suppriment tous les coûts indirects', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent toujours des coûts plus faibles', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent inutile le suivi budgétaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider l’analyse du comportement des coûts ?',
                        'explanation' => 'Il faut toujours considérer la période, la capacité et la plage d’activité étudiée.',
                        'choices' => [
                            ['choice_text' => 'Analyser le comportement du coût dans le contexte et la plage d’activité concernés', 'is_correct' => true],
                            ['choice_text' => 'Supposer que tous les coûts ont le même comportement', 'is_correct' => false],
                            ['choice_text' => 'Ignorer le niveau d’activité', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement les coûts historiques sans contexte', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Analyse coût-volume-profit',
                'description' => 'Appliquez les relations entre volume, coûts, prix et bénéfice.',
                'questions' => [
                    [
                        'question' => 'Une entreprise vend un produit 50 € avec un coût variable unitaire de 30 €. Quelle est la marge sur coût variable unitaire ?',
                        'explanation' => '50 € - 30 € = 20 €.',
                        'choices' => [
                            ['choice_text' => '20 €', 'is_correct' => true],
                            ['choice_text' => '30 €', 'is_correct' => false],
                            ['choice_text' => '50 €', 'is_correct' => false],
                            ['choice_text' => '80 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a 100 000 € de coûts fixes et une marge sur coût variable unitaire de 25 €. Quel est le seuil de rentabilité en unités ?',
                        'explanation' => '100 000 € ÷ 25 € = 4 000 unités.',
                        'choices' => [
                            ['choice_text' => '4 000 unités', 'is_correct' => true],
                            ['choice_text' => '2 500 unités', 'is_correct' => false],
                            ['choice_text' => '25 000 unités', 'is_correct' => false],
                            ['choice_text' => '125 000 unités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du prix de vente peut-elle réduire le seuil de rentabilité, toutes choses égales par ailleurs ?',
                        'explanation' => 'Un prix plus élevé augmente la marge disponible pour couvrir les coûts fixes.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle augmente la marge sur coût variable par unité', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle réduit automatiquement les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle supprime les coûts variables', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle élimine la nécessité de vendre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le bénéfice augmente-t-il généralement lorsque le volume dépasse le seuil de rentabilité ?', 'explanation' => 'Au-delà du seuil, chaque unité supplémentaire contribue à couvrir les coûts puis à augmenter le résultat.',
                        'choices' => [
                            ['choice_text' => 'Parce que la marge sur coût variable supplémentaire contribue alors au bénéfice', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts fixes augmentent à chaque unité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts variables deviennent nuls', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix de vente disparaît', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise vend 6 000 unités avec une marge unitaire de 15 € et supporte 70 000 € de coûts fixes. Quel bénéfice simplifié obtient-elle ?',
                        'explanation' => 'Marge totale = 6 000 × 15 = 90 000 €. Bénéfice = 90 000 - 70 000 = 20 000 €.',
                        'choices' => [
                            ['choice_text' => '20 000 €', 'is_correct' => true],
                            ['choice_text' => '70 000 €', 'is_correct' => false],
                            ['choice_text' => '90 000 €', 'is_correct' => false],
                            ['choice_text' => '160 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise avec une forte proportion de coûts fixes peut-elle présenter un risque opérationnel plus élevé ?',
                        'explanation' => 'Les coûts fixes doivent être couverts même lorsque le volume diminue.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une baisse des ventes peut laisser une charge fixe importante à couvrir', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts fixes diminuent toujours avec les ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes sont remboursés par les clients', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts variables deviennent fixes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la marge de sécurité ?',
                        'explanation' => 'Elle mesure l’écart entre le niveau réel ou prévu de ventes et le seuil de rentabilité.',
                        'choices' => [
                            ['choice_text' => 'L’écart entre les ventes prévues ou réalisées et le seuil de rentabilité', 'is_correct' => true],
                            ['choice_text' => 'L’écart entre les actifs et les passifs', 'is_correct' => false],
                            ['choice_text' => 'La différence entre les dettes et les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'La différence entre deux banques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une marge de sécurité élevée peut-elle être rassurante ?',
                        'explanation' => 'Elle indique que les ventes peuvent diminuer avant que l’entreprise atteigne le seuil de rentabilité.',
                        'choices' => [
                            ['choice_text' => 'Parce que les ventes peuvent baisser davantage avant d’atteindre le seuil de rentabilité', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle garantit une hausse des prix', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle réduit automatiquement les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle supprime les coûts variables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réduction du coût variable peut-elle améliorer fortement le bénéfice ?', 'is_correct' => true,
                        'explanation' => 'Elle augmente la marge sur coût variable pour chaque unité vendue.',
                        'choices' => [
                            ['choice_text' => 'Elle augmente la contribution de chaque unité aux coûts fixes et au bénéfice', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente nécessairement les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Elle diminue automatiquement le prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les revenus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal intérêt de l’analyse coût-volume-profit ?',
                        'explanation' => 'Elle aide à comprendre comment les variations de prix, volume et coûts influencent le résultat.',
                        'choices' => [
                            ['choice_text' => 'Évaluer l’effet du prix, du volume et des coûts sur le bénéfice', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les états financiers', 'is_correct' => false],
                            ['choice_text' => 'Garantir le résultat futur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les charges fixes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Budgets et prévisions',
                'description' => 'Analysez la construction et l’utilisation des budgets intermédiaires.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un budget des ventes influence-t-il souvent le budget de production ?',
                        'explanation' => 'Les ventes prévues déterminent les quantités à produire, en tenant compte des stocks souhaités.',
                        'choices' => [
                            ['choice_text' => 'Parce que la production doit généralement être planifiée en fonction des ventes prévues et des stocks', 'is_correct' => true],
                            ['choice_text' => 'Parce que les ventes et la production sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les stocks n’ont aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que le budget de production détermine toujours les ventes réelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi intégrer les stocks souhaités dans le budget de production ?',
                        'explanation' => 'Les stocks de début et de fin influencent la quantité à produire.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer la quantité à produire en tenant compte des niveaux de stock', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les achats', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer uniquement les salaires', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir les ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les ventes prévues sont de 10 000 unités, le stock final souhaité de 1 500 unités et le stock initial de 1 000 unités, combien faut-il produire ?', 'explanation' => 'Production = ventes prévues + stock final souhaité - stock initial = 10 000 + 1 500 - 1 000 = 10 500 unités.',
                        'choices' => [
                            ['choice_text' => '10 500 unités', 'is_correct' => true],
                            ['choice_text' => '9 500 unités', 'is_correct' => false],
                            ['choice_text' => '11 500 unités', 'is_correct' => false],
                            ['choice_text' => '10 000 unités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un budget de trésorerie est-il différent d’un budget de résultat ?',
                        'explanation' => 'Le budget de trésorerie se concentre sur les encaissements et décaissements tandis que le budget de résultat suit les produits et charges selon leur logique comptable.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il se concentre sur les flux de trésorerie et leur calendrier', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il ne contient jamais de montants', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il mesure uniquement les bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Parce que les décaissements et charges sont toujours identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les budgets doivent-ils être coordonnés entre les services ?',
                        'explanation' => 'Les décisions d’un service peuvent créer des besoins ou contraintes pour les autres.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer la cohérence entre ventes, production, achats, personnel et trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les services d’avoir des objectifs différents', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les budgets individuels', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir les ventes futures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une prévision de hausse des ventes peut-elle nécessiter un financement supplémentaire ?', 'explanation' => 'Une hausse des ventes peut entraîner plus de stocks, créances, production et dépenses.',
                        'choices' => [
                            ['choice_text' => 'Parce que la croissance peut augmenter les besoins opérationnels et le fonds de roulement', 'is_correct' => true],
                            ['choice_text' => 'Parce que les ventes supplémentaires sont toujours encaissées immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes réduisent toujours les coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce que les stocks disparaissent avec la croissance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un budget flexible peut-il être utile lorsque le niveau d’activité varie ?', 'explanation' => 'Il permet de comparer les coûts réels à un budget ajusté au niveau d’activité observé.',
                        'choices' => [
                            ['choice_text' => 'Il permet d’adapter les références budgétaires au niveau réel d’activité', 'is_correct' => true],
                            ['choice_text' => 'Il garantit que tous les coûts restent fixes', 'is_correct' => false],
                            ['choice_text' => 'Il supprime les écarts budgétaires', 'is_correct' => false],
                            ['choice_text' => 'Il remplace le budget annuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un budget révisé ne doit-il pas automatiquement remplacer l’analyse du budget initial ?', 'explanation' => 'Le budget initial permet de mesurer les hypothèses originales et la qualité de la planification.',
                        'choices' => [
                            ['choice_text' => 'Parce que le budget initial reste utile pour analyser les hypothèses et la performance de la planification', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un budget initial ne doit jamais être modifié', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un budget révisé est toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les hypothèses n’évoluent jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les prévisions doivent-elles être régulièrement comparées aux réalisations ?', 'explanation' => 'La comparaison aide à identifier les erreurs d’hypothèses et à améliorer les prévisions.',
                        'choices' => [
                            ['choice_text' => 'Pour apprendre des écarts et améliorer les prévisions futures', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les résultats réels identiques aux prévisions', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données réelles', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les décisions correctives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’une bonne planification budgétaire ?', 'is_correct' => true,
                        'explanation' => 'La planification budgétaire sert à aligner les ressources, les objectifs et les capacités financières.',
                        'choices' => [
                            ['choice_text' => 'Aligner les ressources disponibles avec les objectifs opérationnels et financiers', 'is_correct' => true],
                            ['choice_text' => 'Garantir le chiffre d’affaires futur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les incertitudes économiques', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute modification des plans', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Analyse des écarts',
                'description' => 'Interprétez les écarts entre résultats réels et données budgétaires.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un écart favorable sur un coût ?', 
                        'explanation' => 'Pour un coût, un écart favorable signifie généralement que le coût réel est inférieur au montant de référence.',
                        'choices' => [
                            ['choice_text' => 'Un coût réel inférieur au coût prévu ou de référence', 'is_correct' => true],
                            ['choice_text' => 'Un coût réel supérieur au budget', 'is_correct' => false],
                            ['choice_text' => 'Une baisse des ventes', 'is_correct' => false],
                            ['choice_text' => 'Une hausse automatique du chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise avait prévu 12 € de coût matière par unité et constate 13 €. Quel type d’écart de prix apparaît ?', 
                        'explanation' => 'Le coût réel est supérieur au coût prévu, ce qui constitue un écart défavorable sur le coût matière, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Un écart défavorable de 1 € par unité', 'is_correct' => true],
                            ['choice_text' => 'Un écart favorable de 1 € par unité', 'is_correct' => false],
                            ['choice_text' => 'Un écart nul', 'is_correct' => false],
                            ['choice_text' => 'Un écart favorable de 13 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse des écarts est-elle utile ?', 'is_correct' => true,
                        'explanation' => 'Elle permet de comprendre les causes des différences entre les prévisions et les réalisations.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les causes des différences et prendre des mesures correctives', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les écarts', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir les résultats futurs', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute comparaison budgétaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un coût réel inférieur au budget est-il toujours favorable dans l’absolu ?', 
                        'explanation' => 'Une économie peut être liée à une baisse de qualité, de volume ou à un problème temporaire.',
                        'choices' => [
                            ['choice_text' => 'Non, il faut comprendre la cause et vérifier ses conséquences opérationnelles', 'is_correct' => true],
                            ['choice_text' => 'Oui, toute baisse de coût est toujours positive', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle garantit toujours une meilleure qualité', 'is_correct' => false],
                            ['choice_text' => 'Non, tous les écarts sont nécessairement négatifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser séparément les écarts de prix et de quantité pour les matières ?', 'is_correct' => true,
                        'explanation' => 'Un coût total peut varier en raison d’un changement de prix, de quantité consommée ou des deux.',
                        'choices' => [
                            ['choice_text' => 'Pour distinguer l’effet du prix de celui de la quantité consommée', 'is_correct' => true],
                            ['choice_text' => 'Parce que le prix et la quantité sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les coûts matières', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute analyse opérationnelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les écarts de main-d’œuvre peuvent-ils être liés à la productivité ?', 
                        'explanation' => 'Le temps réellement utilisé peut différer du temps standard ou prévu.',
                        'choices' => [
                            ['choice_text' => 'Parce que le temps réel par unité peut différer du temps prévu', 'is_correct' => true],
                            ['choice_text' => 'Parce que les salaires ne dépendent jamais du temps', 'is_correct' => false],
                            ['choice_text' => 'Parce que la productivité dépend uniquement des prix', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts de personnel sont toujours fixes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un écart favorable sur les coûts peut-il nécessiter une investigation ?', 
                        'explanation' => 'Une baisse de coûts peut résulter d’une dégradation de la qualité ou d’un volume inférieur.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut résulter d’une économie durable ou d’une réduction problématique', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un écart favorable est toujours une erreur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les économies sont interdites', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il ne peut jamais avoir d’effet opérationnel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les écarts doivent-ils être interprétés avec le niveau d’activité ?', 
                        'explanation' => 'Une partie des coûts varie naturellement avec le volume.',
                        'choices' => [
                            ['choice_text' => 'Parce que les coûts réels dépendent souvent du niveau d’activité réalisé', 'is_correct' => true],
                            ['choice_text' => 'Parce que le niveau d’activité n’a aucun effet sur les coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce que les budgets sont toujours fixes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le volume est toujours égal au budget', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse d’écart doit-elle déboucher sur une action lorsque la cause est contrôlable ?', 
                        'explanation' => 'L’objectif du contrôle de gestion est d’améliorer les décisions et la performance.',
                        'choices' => [
                            ['choice_text' => 'Pour corriger les causes maîtrisables et améliorer la performance', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les budgets futurs', 'is_correct' => false],
                            ['choice_text' => 'Pour masquer les écarts', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute responsabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne analyse des écarts ?', 
                        'explanation' => 'Il faut mesurer, expliquer et relier les écarts à des actions de gestion.',
                        'choices' => [
                            ['choice_text' => 'Mesurer l’écart, identifier sa cause et déterminer les actions appropriées', 'is_correct' => true],
                            ['choice_text' => 'Corriger automatiquement tous les écarts', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les écarts faibles et importants', 'is_correct' => false],
                            ['choice_text' => 'Comparer uniquement le chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Décisions de production et sous-traitance',
                'description' => 'Utilisez les coûts pertinents pour comparer fabrication interne et achat externe.',
                'questions' => [
                    [
                        'question' => 'Une entreprise fabrique une pièce pour 22 € dont 8 € sont des coûts variables et le reste des coûts fixes. Un fournisseur propose la pièce à 15 €. Quel élément faut-il analyser en premier ?', 
                        'explanation' => 'Il faut déterminer quelle partie des coûts fixes disparaîtrait réellement si la production était arrêtée.',
                        'choices' => [
                            ['choice_text' => 'Les coûts évitables de fabrication et l’utilisation alternative des ressources', 'is_correct' => true],
                            ['choice_text' => 'Le coût historique total de 22 € uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un coût fixe attribué à un produit peut-il être non pertinent dans une décision de sous-traitance ?', 
                        'explanation' => 'S’il continue après la sous-traitance, il ne constitue pas une économie réelle.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut continuer même après l’abandon de la production interne', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts fixes sont toujours des revenus', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les coûts fixes disparaissent toujours', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes n’existent jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la capacité libérée par une décision de sous-traitance doit-elle être valorisée ?', 'is_correct' => true,
                        'explanation' => 'La capacité libérée peut être utilisée pour une autre activité rentable, ce qui crée un coût d’opportunité.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut être utilisée pour une autre activité générant une contribution', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une capacité libre est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle réduit automatiquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle augmente nécessairement les coûts fixes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le prix proposé par un fournisseur ne suffit-il pas à lui seul pour décider de sous-traiter ?', 'is_correct' => true,
                        'explanation' => 'La décision dépend aussi des coûts évitables, de la capacité, de la qualité, du risque fournisseur et d’autres facteurs.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il faut aussi analyser les coûts évitables, la qualité, la capacité et les risques', 'is_correct' => true],
                            ['choice_text' => 'Parce que le prix fournisseur n’a jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que la sous-traitance est toujours plus coûteuse', 'is_correct' => false],
                            ['choice_text' => 'Parce que la qualité est toujours identique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une décision de fabrication interne peut-elle rester intéressante malgré un coût comptable apparent plus élevé ?', 
                        'explanation' => 'Certains coûts attribués peuvent ne pas être évitables et la production interne peut créer des avantages qualitatifs.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une partie des coûts comptables peut ne pas être évitable', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts comptables ne doivent jamais être utilisés', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix du fournisseur est toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que la fabrication interne est toujours préférable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur qualitatif peut influencer une décision de sous-traitance ?', 
                        'explanation' => 'La dépendance à un fournisseur et le niveau de qualité sont des facteurs importants.',
                        'choices' => [
                            ['choice_text' => 'La qualité et la fiabilité du fournisseur', 'is_correct' => true],
                            ['choice_text' => 'La couleur du logo du fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de comptes bancaires de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le niveau historique des capitaux propres uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une capacité de production saturée change-t-elle l’analyse d’une commande supplémentaire ?', 
                        'explanation' => 'Lorsque la capacité est limitée, accepter une commande peut faire perdre une autre contribution.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’acceptation de la commande peut entraîner un coût d’opportunité', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts fixes deviennent nuls', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix de vente devient sans importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que la capacité n’influence jamais les décisions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une commande spéciale peut-elle être refusée même si elle apporte une marge positive ?', 
                        'explanation' => 'Elle peut utiliser une capacité rare, cannibaliser les ventes existantes ou générer des effets qualitatifs négatifs.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut mobiliser des ressources rares ou détériorer d’autres activités', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une marge positive est toujours insuffisante', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une commande spéciale est toujours déficitaire', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une commande ne produit jamais de revenus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la durée du contrat fournisseur est-elle pertinente ?', 'is_correct' => true,
                        'explanation' => 'Une relation longue peut modifier le risque, la flexibilité et les coûts futurs.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle influence la flexibilité future, la dépendance et les conditions économiques', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un contrat long garantit toujours des coûts faibles', 'is_correct' => false],
                            ['choice_text' => 'Parce que la durée n’a aucun effet sur le risque', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un contrat long élimine toutes les incertitudes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le bon principe pour une décision de fabrication ou achat ?', 
                        'explanation' => 'Il faut comparer les conséquences futures pertinentes et intégrer les effets qualitatifs importants.',
                        'choices' => [
                            ['choice_text' => 'Comparer les coûts évitables, coûts d’opportunité et conséquences qualitatives des deux options', 'is_correct' => true],
                            ['choice_text' => 'Comparer uniquement le coût complet historique', 'is_correct' => false],
                            ['choice_text' => 'Choisir systématiquement le fournisseur le moins cher', 'is_correct' => false],
                            ['choice_text' => 'Choisir systématiquement la fabrication interne', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Centres de responsabilité',
                'description' => 'Découvrez l’évaluation des performances des différents centres de responsabilité.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un centre de coûts ?', 
                        'explanation' => 'Un centre de coûts est une unité dont la performance est principalement suivie à travers les coûts qu’elle contrôle.',
                        'choices' => [
                            ['choice_text' => 'Une unité dont la performance est principalement évaluée à travers les coûts qu’elle contrôle', 'is_correct' => true],
                            ['choice_text' => 'Une unité responsable uniquement des ventes', 'is_correct' => false],
                            ['choice_text' => 'Une banque interne', 'is_correct' => false],
                            ['choice_text' => 'Un centre qui ne possède aucun coût', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un centre de profit ?', 
                        'explanation' => 'Un centre de profit est évalué sur les produits et coûts qu’il peut influencer afin d’apprécier sa contribution au résultat.',
                        'choices' => [
                            ['choice_text' => 'Une unité dont la performance est évaluée à travers ses produits et coûts', 'is_correct' => true],
                            ['choice_text' => 'Une unité qui ne suit que les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Une unité sans responsabilité financière', 'is_correct' => false],
                            ['choice_text' => 'Un simple compte bancaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer les coûts contrôlables des coûts non contrôlables lors de l’évaluation d’un manager ?', 
                        'explanation' => 'Il est plus juste d’évaluer un responsable sur les éléments qu’il peut réellement influencer.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer le responsable principalement sur les éléments qu’il peut réellement influencer', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les coûts non contrôlables', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les charges du centre', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre tous les centres identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un manager peut-il être pénalisé injustement si on lui attribue des coûts qu’il ne contrôle pas ?', 'is_correct' => true,
                        'explanation' => 'L’évaluation devient biaisée si elle dépend d’éléments externes à son périmètre de responsabilité.',
                        'choices' => [
                            ['choice_text' => 'Parce que sa performance serait affectée par des décisions qu’il ne peut pas influencer', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les coûts sont toujours contrôlables', 'is_correct' => false],
                            ['choice_text' => 'Parce que les managers ne doivent jamais être évalués', 'is_correct' => false],
                            ['choice_text' => 'Parce que les résultats sont toujours indépendants des coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les centres de responsabilité favorisent-ils la responsabilisation ?', 'is_correct' => true,
                        'explanation' => 'Ils associent des objectifs et indicateurs à des responsables identifiés.',
                        'choices' => [
                            ['choice_text' => 'Ils associent des résultats et ressources à des responsables identifiés', 'is_correct' => true],
                            ['choice_text' => 'Ils suppriment toute autonomie des managers', 'is_correct' => false],
                            ['choice_text' => 'Ils empêchent toute comparaison', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les budgets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les centres de profit doivent-ils être évalués avec prudence lorsqu’ils utilisent des ressources communes ?', 'is_correct' => true,
                        'explanation' => 'La répartition des coûts communs peut influencer fortement le profit attribué à chaque centre.',
                        'choices' => [
                            ['choice_text' => 'Parce que les méthodes de répartition des coûts communs peuvent influencer leur résultat apparent', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts communs n’existent jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un centre de profit ne doit jamais utiliser de ressources communes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bénéfice est toujours indépendant des règles de répartition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des indicateurs non financiers dans l’évaluation des centres ?', 
                        'explanation' => 'La qualité, le délai et la satisfaction peuvent expliquer les résultats financiers et leur durabilité.',
                        'choices' => [
                            ['choice_text' => 'Pour intégrer la qualité, les délais, la productivité ou la satisfaction client', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les indicateurs financiers', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une rentabilité immédiate', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute mesure quantitative', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les objectifs des centres doivent-ils rester cohérents avec ceux de l’entreprise ?', 'is_correct' => true,
                        'explanation' => 'Un centre peut améliorer son propre indicateur tout en nuisant à la performance globale.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’une optimisation locale dégrade la performance globale', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre tous les centres identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les responsabilités individuelles', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les managers de prendre des décisions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque existe lorsqu’un manager cherche uniquement à respecter son budget de coûts ?', 
                        'explanation' => 'Il peut réduire des dépenses utiles au détriment de la qualité, des délais ou de la performance à long terme.',
                        'choices' => [
                            ['choice_text' => 'Il peut réduire des coûts au détriment de la qualité ou de la performance globale', 'is_correct' => true],
                            ['choice_text' => 'Il augmente toujours automatiquement la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Il supprime tous les coûts indirects', 'is_correct' => false],
                            ['choice_text' => 'Il garantit toujours une meilleure satisfaction client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider un bon système de responsabilité ?', 
                        'explanation' => 'Les indicateurs doivent être cohérents avec le pouvoir de décision et les objectifs de l’organisation.',
                        'choices' => [
                            ['choice_text' => 'Aligner responsabilités, pouvoir de décision, indicateurs et objectifs', 'is_correct' => true],
                            ['choice_text' => 'Évaluer chaque manager sur tous les coûts de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement le bénéfice net', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les facteurs non financiers', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Prix, marges et décisions commerciales',
                'description' => 'Analysez l’impact des prix et des marges sur les décisions commerciales.',
                'questions' => [
                    [
                        'question' => 'Une entreprise vend un produit 80 € avec un coût variable de 50 €. Quelle est sa marge sur coût variable par unité ?', 
                        'explanation' => '80 € - 50 € = 30 €.',
                        'choices' => [
                            ['choice_text' => '30 €', 'is_correct' => true],
                            ['choice_text' => '50 €', 'is_correct' => false],
                            ['choice_text' => '80 €', 'is_correct' => false],
                            ['choice_text' => '130 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une remise de prix peut-elle être acceptable dans certaines situations ?', 
                        'explanation' => 'Si elle augmente suffisamment le volume ou permet de couvrir les coûts pertinents, elle peut contribuer au résultat.',
                        'choices' => [
                            ['choice_text' => 'Si la contribution supplémentaire compense la réduction de prix et les effets associés', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une remise augmente toujours la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix n’a jamais d’effet sur la marge', 'is_correct' => false],
                            ['choice_text' => 'Parce que le volume n’a aucune importance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du prix peut-elle diminuer le volume vendu ?', 'is_correct' => true,
                        'explanation' => 'La demande de certains produits est sensible au prix.',
                        'choices' => [
                            ['choice_text' => 'Parce que certains clients peuvent réduire leur demande lorsque le prix augmente', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts fixes augmentent automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les produits deviennent toujours obsolètes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes sont indépendantes des prix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle analyser le volume en plus de la marge unitaire ?', 'is_correct' => true,
                        'explanation' => 'Une marge élevée sur un petit volume peut générer moins de contribution totale qu’une marge plus faible sur un grand volume.',
                        'choices' => [
                            ['choice_text' => 'Parce que la contribution totale dépend de la marge unitaire et du volume vendu', 'is_correct' => true],
                            ['choice_text' => 'Parce que le volume ne change jamais la contribution', 'is_correct' => false],
                            ['choice_text' => 'Parce que la marge unitaire suffit toujours', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes sont toujours nuls', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux produits ont respectivement une marge unitaire de 10 € et 20 €. Le premier se vend à 10 000 unités et le second à 2 000 unités. Quel produit génère la contribution totale la plus élevée ?', 
                        'explanation' => 'Produit 1 : 10 × 10 000 = 100 000 €. Produit 2 : 20 × 2 000 = 40 000 €.',
                        'choices' => [
                            ['choice_text' => 'Le premier produit avec 100 000 € de contribution', 'is_correct' => true],
                            ['choice_text' => 'Le second produit avec 40 000 € de contribution', 'is_correct' => false],
                            ['choice_text' => 'Les deux produits sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Aucun des deux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique de prix doit-elle tenir compte des coûts mais aussi du marché ?', 
                        'explanation' => 'Un prix doit être économiquement viable tout en restant acceptable pour les clients et cohérent avec la concurrence.',
                        'choices' => [
                            ['choice_text' => 'Parce que la rentabilité dépend des coûts mais aussi de la demande et de la concurrence', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts n’ont aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que le marché détermine toujours exactement le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un prix élevé est toujours meilleur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un produit à forte marge peut-il ne pas être prioritaire ?', 
                        'explanation' => 'Il peut consommer beaucoup de ressources rares, avoir une faible demande ou un faible volume.',
                        'choices' => [
                            ['choice_text' => 'Parce que sa contribution totale ou son utilisation des ressources peut être moins intéressante', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une forte marge est toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il doit toujours être vendu à perte', 'is_correct' => false],
                            ['choice_text' => 'Parce que le volume n’a aucun intérêt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une contrainte de capacité peut-elle modifier le classement des produits ?', 'is_correct' => true,
                        'explanation' => 'Lorsque la ressource est limitée, il peut être plus pertinent de comparer la contribution par unité de ressource rare.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il devient important de mesurer la contribution par unité de ressource rare', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les marges deviennent identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts variables disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes deviennent sans importance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser les remises par segment de clients ?', 'is_correct' => true,
                        'explanation' => 'Les remises peuvent avoir des effets différents selon la sensibilité au prix, le volume et la rentabilité des clients.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer si la remise génère suffisamment de volume ou de fidélisation pour compenser son coût', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les remises ont le même effet', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les clients à faible volume', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement les prix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider l’analyse d’une décision de prix ?', 'is_correct' => true,
                        'explanation' => 'Le management doit considérer prix, volume, coûts, capacité et réaction du marché.',
                        'choices' => [
                            ['choice_text' => 'Évaluer conjointement prix, volume, coûts, capacité et comportement de la demande', 'is_correct' => true],
                            ['choice_text' => 'Se concentrer uniquement sur le coût historique', 'is_correct' => false],
                            ['choice_text' => 'Choisir toujours le prix maximal', 'is_correct' => false],
                            ['choice_text' => 'Ignorer le volume vendu', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Activity-Based Costing et coûts indirects',
                'description' => 'Comprenez les principes intermédiaires de l’ABC et de l’affectation des coûts par activité.',
                'questions' => [
                    [
                        'question' => 'Pourquoi la méthode ABC peut-elle être plus précise qu’une répartition globale des frais indirects ?', 
                        'explanation' => 'Elle attribue les coûts en fonction des activités réellement consommées par les objets de coût.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle relie les coûts indirects aux activités qui les génèrent', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle supprime tous les coûts indirects', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle utilise toujours une seule clé de répartition', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle ne nécessite aucune donnée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un inducteur de coût dans une approche ABC ?', 
                        'explanation' => 'C’est un facteur qui explique la consommation ou le niveau d’une activité et donc d’un coût.',
                        'choices' => [
                            ['choice_text' => 'Un facteur utilisé pour expliquer ou mesurer la consommation d’une activité', 'is_correct' => true],
                            ['choice_text' => 'Un compte bancaire', 'is_correct' => false],
                            ['choice_text' => 'Un type de produit', 'is_correct' => false],
                            ['choice_text' => 'Une dette financière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une activité de contrôle qualité coûte 40 000 € et nécessite 800 contrôles. Quel est le coût par contrôle ?', 
                        'explanation' => '40 000 € ÷ 800 = 50 € par contrôle.',
                        'choices' => [
                            ['choice_text' => '50 €', 'is_correct' => true],
                            ['choice_text' => '40 €', 'is_correct' => false],
                            ['choice_text' => '80 €', 'is_correct' => false],
                            ['choice_text' => '320 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un produit complexe peut-il être sous-costé avec une méthode traditionnelle trop agrégée ?', 
                        'explanation' => 'Un produit qui consomme davantage d’activités complexes peut recevoir une part insuffisante des frais selon une clé globale.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une clé globale peut sous-estimer sa consommation réelle d’activités indirectes', 'is_correct' => true],
                            ['choice_text' => 'Parce que les produits complexes coûtent toujours moins cher', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts indirects sont toujours nuls', 'is_correct' => false],
                            ['choice_text' => 'Parce que le nombre d’activités n’a aucun effet sur le coût', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’ABC peut-il aider à la tarification ?', 'is_correct' => true,
                        'explanation' => 'Une meilleure connaissance du coût de chaque produit ou service peut améliorer les décisions de prix.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut améliorer la connaissance du coût réel des produits et services', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il fixe automatiquement le prix du marché', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il supprime les coûts variables', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il garantit une marge identique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi tous les coûts indirects ne nécessitent-ils pas une méthode ABC ?', 
                        'explanation' => 'L’ABC peut être coûteux à mettre en place et sa valeur doit être comparée à son coût et à la complexité du système.',
                        'choices' => [
                            ['choice_text' => 'Parce que le coût et la complexité de la méthode doivent être justifiés par l’utilité de l’information', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’ABC est toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts indirects sont toujours négligeables', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une seule clé est toujours parfaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi choisir un mauvais inducteur de coût peut-il fausser les résultats ABC ?', 'is_correct' => true,
                        'explanation' => 'Un inducteur inadéquat attribue les coûts selon une relation qui ne reflète pas correctement la consommation des ressources.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut attribuer les coûts selon une relation qui ne reflète pas leur consommation réelle', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les inducteurs donnent toujours le même résultat', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’ABC ne dépend jamais des données', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts indirects deviennent automatiquement variables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’ABC est-il particulièrement utile dans les entreprises ayant de nombreux produits et processus ?', 'is_correct' => true,
                        'explanation' => 'La diversité des produits peut entraîner des consommations très différentes d’activités indirectes.',
                        'choices' => [
                            ['choice_text' => 'Parce que la diversité des produits peut créer des consommations très différentes d’activités', 'is_correct' => true],
                            ['choice_text' => 'Parce que les entreprises complexes n’ont aucun coût direct', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les produits consomment les mêmes ressources', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’ABC élimine les besoins de mesure', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les informations ABC doivent-elles être mises à jour lorsque les processus changent ?', 'is_correct' => true,
                        'explanation' => 'Les coûts et activités évoluent lorsque l’organisation ou les processus changent.',
                        'choices' => [
                            ['choice_text' => 'Parce que les activités, volumes et inducteurs peuvent changer', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts restent toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un modèle ABC ne peut jamais évoluer', 'is_correct' => false],
                            ['choice_text' => 'Parce que les produits changent toujours de prix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal objectif de l’ABC ?', 
                        'explanation' => 'L’objectif est de fournir une meilleure compréhension de la consommation des activités et des ressources.',
                        'choices' => [
                            ['choice_text' => 'Améliorer l’affectation des coûts indirects en reliant les ressources aux activités', 'is_correct' => true],
                            ['choice_text' => 'Supprimer la comptabilité financière', 'is_correct' => false],
                            ['choice_text' => 'Garantir une hausse des marges', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le budget', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Planification et performance',
                'description' => 'Reliez les objectifs, indicateurs et résultats au pilotage de la performance.',
                'questions' => [
                    [
                        'question' => 'Pourquoi les indicateurs de performance doivent-ils être alignés sur la stratégie ?', 'is_correct' => true,
                        'explanation' => 'Un indicateur qui ne reflète pas les priorités stratégiques peut conduire les managers à optimiser les mauvais objectifs.',
                        'choices' => [
                            ['choice_text' => 'Pour que les comportements encouragés par les indicateurs soutiennent réellement la stratégie', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les objectifs financiers', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre tous les indicateurs identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les managers de décider', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un indicateur de coût seul peut-il être insuffisant pour mesurer la performance ?', 
                        'explanation' => 'Une réduction des coûts peut dégrader la qualité, les délais ou la satisfaction client.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut ignorer la qualité, les délais et les résultats commerciaux', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts ne doivent jamais être mesurés', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un coût faible signifie toujours une mauvaise performance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les indicateurs financiers sont inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer la performance actuelle à une référence historique ?', 
                        'explanation' => 'La comparaison dans le temps permet d’identifier les tendances et les changements.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les évolutions et tendances de performance', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que l’entreprise atteindra toujours le même niveau', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données historiques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les analyses futures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer aussi la performance avec un objectif ou budget ?', 
                        'explanation' => 'Une référence budgétaire permet de mesurer les écarts par rapport au plan.',
                        'choices' => [
                            ['choice_text' => 'Pour mesurer la différence entre les résultats obtenus et les objectifs fixés', 'is_correct' => true],
                            ['choice_text' => 'Pour modifier automatiquement les résultats réels', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir le respect du budget', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le besoin de planification', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les responsables doivent-ils distinguer les indicateurs de résultats des indicateurs de processus ?', 'is_correct' => true,
                        'explanation' => 'Les résultats mesurent ce qui a été obtenu tandis que les processus expliquent souvent comment la performance est produite.',
                        'choices' => [
                            ['choice_text' => 'Pour suivre à la fois les résultats obtenus et les facteurs qui les génèrent', 'is_correct' => true],
                            ['choice_text' => 'Parce que les indicateurs de processus remplacent toujours les résultats', 'is_correct' => false],
                            ['choice_text' => 'Parce que les processus ne peuvent pas être mesurés', 'is_correct' => false],
                            ['choice_text' => 'Parce que les résultats financiers sont inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une amélioration d’un indicateur local peut-elle être négative pour l’entreprise ?', 
                        'explanation' => 'Un manager peut améliorer son centre au détriment d’un autre ou de l’objectif global.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une optimisation locale peut créer une détérioration ailleurs', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute amélioration locale est impossible', 'is_correct' => false],
                            ['choice_text' => 'Parce que les indicateurs ne servent qu’à la comptabilité financière', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un indicateur ne peut jamais être comparé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la planification doit-elle tenir compte des ressources limitées ?', 
                        'explanation' => 'Les entreprises disposent d’un budget, de temps, de personnel et de capacités limités.',
                        'choices' => [
                            ['choice_text' => 'Parce que les ressources disponibles imposent des arbitrages entre les différentes activités', 'is_correct' => true],
                            ['choice_text' => 'Parce que les ressources sont toujours illimitées', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un budget n’a aucun rapport avec les ressources', 'is_correct' => false],
                            ['choice_text' => 'Parce que les décisions ne créent jamais de compromis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un objectif de réduction des coûts doit-il être accompagné de mesures de qualité ?', 
                        'explanation' => 'Une réduction de coût peut être obtenue au prix d’une dégradation de la qualité.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter que les économies ne provoquent une baisse de qualité', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute réduction de coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce que la qualité n’a aucun lien avec les coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce que les clients ne tiennent jamais compte de la qualité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un tableau de bord combine-t-il généralement plusieurs indicateurs ?', 
                        'explanation' => 'La performance est multidimensionnelle et ne peut être représentée correctement par une seule mesure.',
                        'choices' => [
                            ['choice_text' => 'Parce que la performance comporte plusieurs dimensions complémentaires', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un indicateur unique est toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les indicateurs financiers n’ont aucune valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que plus d’indicateurs garantissent automatiquement de meilleures décisions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un bon système de pilotage de la performance ?', 
                        'explanation' => 'Il doit aider à détecter les écarts, comprendre leurs causes et soutenir les décisions.',
                        'choices' => [
                            ['choice_text' => 'Fournir des informations utiles pour orienter les actions et améliorer les résultats', 'is_correct' => true],
                            ['choice_text' => 'Garantir automatiquement les objectifs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les écarts', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les managers', 'is_correct' => false],
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
                    'duration' => 24,
                    'passing_score' => 70,
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Intermediate',
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