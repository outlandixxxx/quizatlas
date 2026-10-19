<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ManagementAccountingProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'management-accounting')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Comptabilité de gestion — Décisions stratégiques et allocation des ressources',
                'description' => 'Évaluez les décisions stratégiques d’allocation des ressources, de capacité et de rentabilité.',
                'questions' => [
                    [
                        'question' => 'Une entreprise dispose d’un capital limité et plusieurs projets présentent une rentabilité positive. Quel principe doit guider la sélection des projets ?',
                        'explanation' => 'Lorsque les ressources sont limitées, il faut comparer la valeur créée et le risque associé à chaque utilisation du capital.',
                        'choices' => [
                            ['choice_text' => 'Prioriser les projets qui créent la meilleure valeur compte tenu du capital et du risque engagés', 'is_correct' => true],
                            ['choice_text' => 'Choisir automatiquement les projets ayant le plus gros chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Choisir toujours le projet ayant les coûts fixes les plus élevés', 'is_correct' => false],
                            ['choice_text' => 'Financer tous les projets sans limite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût d’opportunité est-il particulièrement important dans une décision stratégique de capacité ?',
                        'explanation' => 'Une ressource rare utilisée pour une activité ne peut généralement pas être utilisée simultanément pour une autre.',
                        'choices' => [
                            ['choice_text' => 'Parce que chaque utilisation d’une ressource rare implique de renoncer à une autre utilisation possible', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un coût d’opportunité est toujours enregistré comme une charge comptable', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ressources rares sont toujours gratuites', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les alternatives produisent exactement la même contribution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une direction envisage d’abandonner une activité qui affiche une perte après allocation de frais généraux. Quelle analyse est indispensable avant la décision ?',
                        'explanation' => 'Il faut déterminer quels coûts disparaîtraient réellement et quelle contribution serait perdue.',
                        'choices' => [
                            ['choice_text' => 'Identifier les coûts réellement évitables et la contribution que l’activité fournit au résultat global', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement tous les coûts attribués à l’activité', 'is_correct' => false],
                            ['choice_text' => 'Se baser uniquement sur la perte comptable affichée', 'is_correct' => false],
                            ['choice_text' => 'Abandonner systématiquement toute activité présentant une perte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse stratégique doit-elle intégrer les conséquences qualitatives d’une décision de sous-traitance ?',
                        'explanation' => 'La qualité, la dépendance fournisseur, les compétences internes et la continuité peuvent affecter la valeur future.',
                        'choices' => [
                            ['choice_text' => 'Parce que la qualité, la dépendance et la continuité opérationnelle peuvent avoir une valeur économique importante', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts n’ont aucune importance dans une sous-traitance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les facteurs qualitatifs remplacent toujours les calculs financiers', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un fournisseur externe élimine tous les risques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une marge élevée par produit ne suffit-elle pas à déterminer la meilleure utilisation d’une machine contrainte ?',
                        'explanation' => 'La meilleure décision dépend de la contribution générée par unité de ressource rare.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il faut comparer la contribution par unité de capacité rare', 'is_correct' => true],
                            ['choice_text' => 'Parce que la marge unitaire n’a jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les machines contraintes ne coûtent rien', 'is_correct' => false],
                            ['choice_text' => 'Parce que le volume produit est toujours plus important que la contribution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle investir dans l’automatisation même si le coût fixe augmente ?',
                        'explanation' => 'L’automatisation peut réduire les coûts variables, augmenter la capacité ou améliorer la productivité.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un coût fixe supplémentaire peut être compensé par des économies variables ou une capacité accrue', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une hausse des coûts fixes améliore toujours le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’automatisation ne nécessite jamais d’investissement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts variables disparaissent toujours complètement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une décision d’investissement stratégique doit-elle être testée dans plusieurs scénarios ?',
                        'explanation' => 'Les hypothèses de volume, prix, coûts et utilisation des ressources peuvent différer des prévisions.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer la robustesse de la décision lorsque les hypothèses économiques changent', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que le scénario optimiste se réalisera', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’incertitude', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer complètement l’analyse financière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une capacité excédentaire peut-elle représenter un problème économique même sans décaissement supplémentaire immédiat ?',
                        'explanation' => 'Elle immobilise des ressources qui pourraient être employées dans d’autres activités.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle mobilise du capital et des ressources qui pourraient créer davantage de valeur ailleurs', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle constitue toujours une dette', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle génère automatiquement une perte comptable', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle réduit toujours les coûts variables unitaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la rentabilité actuelle d’une activité peut-elle être insuffisante pour juger son avenir stratégique ?',
                        'explanation' => 'Une activité peut avoir un rôle dans l’accès au marché, les synergies, les compétences ou les revenus futurs.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il faut aussi considérer les synergies, les capacités futures et les conséquences stratégiques', 'is_correct' => true],
                            ['choice_text' => 'Parce que la rentabilité actuelle est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts n’ont aucune valeur pour une décision stratégique', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une activité rentable doit toujours être abandonnée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider une allocation professionnelle des ressources ?',
                        'explanation' => 'La meilleure allocation combine création de valeur, rareté des ressources, risque et cohérence stratégique.',
                        'choices' => [
                            ['choice_text' => 'Allouer les ressources aux usages créant le plus de valeur ajustée au risque et cohérente avec la stratégie', 'is_correct' => true],
                            ['choice_text' => 'Allouer toutes les ressources à l’activité ayant le chiffre d’affaires le plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Maximiser systématiquement la capacité installée', 'is_correct' => false],
                            ['choice_text' => 'Choisir uniquement les projets aux coûts fixes les plus faibles', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Performance professionnelle et contrôle de gestion',
                'description' => 'Analysez les systèmes de pilotage, les indicateurs et l’alignement des responsabilités.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un système de performance fondé uniquement sur le bénéfice à court terme peut-il être dangereux ?',
                        'explanation' => 'Il peut encourager le report d’investissements et la réduction de dépenses utiles à long terme.',
                        'choices' => [
                            ['choice_text' => 'Il peut encourager des décisions améliorant le résultat immédiat au détriment de la performance future', 'is_correct' => true],
                            ['choice_text' => 'Parce que le bénéfice ne doit jamais être mesuré', 'is_correct' => false],
                            ['choice_text' => 'Parce que les résultats à court terme sont toujours négatifs', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements n’ont aucune influence sur la stratégie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le tableau de bord d’un centre de responsabilité doit-il combiner indicateurs financiers et non financiers ?',
                        'explanation' => 'Les indicateurs non financiers expliquent souvent les facteurs qui déterminent les résultats futurs.',
                        'choices' => [
                            ['choice_text' => 'Pour suivre à la fois les résultats et les facteurs opérationnels qui les déterminent', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les indicateurs financiers', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute comparaison quantitative', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir automatiquement une amélioration des résultats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer la responsabilité d’un manager de la performance globale de l’entreprise ?',
                        'explanation' => 'Le manager ne contrôle qu’une partie des décisions et ressources de l’organisation.',
                        'choices' => [
                            ['choice_text' => 'Parce que le manager ne contrôle qu’une partie des facteurs qui influencent le résultat global', 'is_correct' => true],
                            ['choice_text' => 'Parce que les managers ne doivent jamais être évalués', 'is_correct' => false],
                            ['choice_text' => 'Parce que les résultats globaux n’ont aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les coûts sont nécessairement contrôlables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un indicateur de productivité doit-il être complété par un indicateur de qualité ?',
                        'explanation' => 'Une productivité accrue peut provenir d’une réduction de ressources qui dégrade la qualité.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’une amélioration de productivité ne soit obtenue au détriment de la qualité', 'is_correct' => true],
                            ['choice_text' => 'Parce que la qualité et la productivité sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que la productivité ne peut jamais être mesurée', 'is_correct' => false],
                            ['choice_text' => 'Parce que la qualité n’a aucun coût économique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un système de bonus peut-il créer des comportements opportunistes ?',
                        'explanation' => 'Les managers peuvent chercher à optimiser les critères récompensés plutôt que la performance globale.',
                        'choices' => [
                            ['choice_text' => 'Parce que les responsables peuvent optimiser la mesure récompensée plutôt que la performance globale', 'is_correct' => true],
                            ['choice_text' => 'Parce que tout système de bonus est nécessairement inefficace', 'is_correct' => false],
                            ['choice_text' => 'Parce que les managers ne réagissent jamais aux incitations', 'is_correct' => false],
                            ['choice_text' => 'Parce que les indicateurs financiers ne peuvent jamais être utilisés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les objectifs doivent-ils être cohérents entre les différents niveaux de l’organisation ?',
                        'explanation' => 'Des objectifs contradictoires peuvent conduire à une optimisation locale au détriment du résultat global.',
                        'choices' => [
                            ['choice_text' => 'Pour aligner les décisions locales sur les objectifs stratégiques de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Pour donner exactement le même objectif à tous les services', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute autonomie des managers', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les centres de responsabilité de mesurer leur performance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un indicateur doit-il être accompagné d’une définition précise de son périmètre ?',
                        'explanation' => 'Une définition claire évite des interprétations différentes et facilite la comparaison.',
                        'choices' => [
                            ['choice_text' => 'Pour garantir une interprétation cohérente et une comparaison fiable', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute évolution de l’indicateur', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les données plus complexes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données historiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réduction des coûts peut-elle être considérée comme défavorable dans certaines circonstances ?',
                        'explanation' => 'La réduction peut provenir d’une baisse de qualité, de service, de maintenance ou d’investissement.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut compromettre la qualité, le service ou la capacité future', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une réduction de coût est toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts doivent toujours augmenter', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une baisse de coûts réduit toujours les ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les indicateurs de satisfaction client peuvent-ils être considérés comme des indicateurs avancés de performance ?',
                        'explanation' => 'Ils peuvent signaler des tendances susceptibles d’influencer les revenus et la fidélisation futurs.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils peuvent anticiper les effets futurs sur la fidélisation et les revenus', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils remplacent systématiquement les comptes financiers', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils mesurent directement les bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Parce que la satisfaction est toujours indépendante de la rentabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif ultime du contrôle de gestion ?',
                        'explanation' => 'Le contrôle de gestion doit fournir des informations permettant d’aligner les ressources et les actions sur la stratégie.',
                        'choices' => [
                            ['choice_text' => 'Aider l’organisation à atteindre ses objectifs en améliorant la qualité des décisions et du pilotage', 'is_correct' => true],
                            ['choice_text' => 'Réduire tous les coûts à zéro', 'is_correct' => false],
                            ['choice_text' => 'Maximiser systématiquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les dirigeants dans la prise de décision', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Analyse professionnelle des écarts',
                'description' => 'Interprétez les écarts de prix, quantité, volume, efficacité et mix dans une perspective managériale.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un écart de coût favorable doit-il être analysé avec la qualité des intrants utilisés ?',
                        'explanation' => 'Une économie de prix peut provenir d’un achat de moindre qualité et entraîner d’autres coûts.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une économie sur les achats peut provoquer des coûts ou problèmes supplémentaires ailleurs', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une baisse de prix est toujours mauvaise', 'is_correct' => false],
                            ['choice_text' => 'Parce que la qualité n’a aucun lien avec les coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce que les achats ne peuvent jamais influencer le résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise constate un écart défavorable de consommation de matières mais un écart favorable de prix. Quelle interprétation est possible ?',
                        'explanation' => 'L’entreprise peut avoir acheté moins cher mais consommé davantage de matières.',
                        'choices' => [
                            ['choice_text' => 'Les matières ont pu être achetées à un prix inférieur mais utilisées en quantité excessive', 'is_correct' => true],
                            ['choice_text' => 'Le prix et la quantité doivent toujours varier dans le même sens', 'is_correct' => false],
                            ['choice_text' => 'L’écart global est nécessairement nul', 'is_correct' => false],
                            ['choice_text' => 'La consommation n’a aucun effet sur les coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse des écarts doit-elle distinguer l’effet volume de l’effet prix de vente ?',
                        'explanation' => 'Le chiffre d’affaires peut changer parce que les quantités ou les prix ont évolué.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer séparément l’effet des quantités vendues et des prix appliqués', 'is_correct' => true],
                            ['choice_text' => 'Parce que prix et volume sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix ne contribue jamais au chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Parce que le volume n’a aucune influence sur les ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un écart d’efficacité favorable doit-il être examiné avec le niveau de qualité produit ?', 'is_correct' => true,
                        'explanation' => 'Une amélioration apparente d’efficacité peut venir d’un raccourcissement du processus entraînant davantage de défauts.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une efficacité apparente peut être obtenue en dégradant la qualité', 'is_correct' => true],
                            ['choice_text' => 'Parce que la qualité ne peut jamais être liée à la productivité', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un écart favorable est toujours trompeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les indicateurs qualitatifs ne servent pas au contrôle de gestion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser un écart selon sa matérialité et sa fréquence ?', 'is_correct' => true,
                        'explanation' => 'Un petit écart récurrent peut être plus important à terme qu’un grand écart ponctuel.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer sa véritable importance économique et la priorité de l’action corrective', 'is_correct' => true],
                            ['choice_text' => 'Parce que seuls les grands écarts doivent être contrôlés', 'is_correct' => false],
                            ['choice_text' => 'Parce que la fréquence n’a aucun intérêt', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer automatiquement les écarts récurrents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un écart de volume favorable peut-il masquer une baisse de rentabilité ?',
                        'explanation' => 'Le volume peut augmenter alors que le mix se déplace vers des produits moins rentables.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’augmentation des volumes peut être concentrée sur des produits à faible contribution', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute hausse de volume réduit la marge', 'is_correct' => false],
                            ['choice_text' => 'Parce que les produits ont toujours la même marge', 'is_correct' => false],
                            ['choice_text' => 'Parce que le mix n’a aucun effet sur le résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse des écarts doit-elle être reliée aux responsables opérationnels ?', 'is_correct' => true,
                        'explanation' => 'Les responsables disposent souvent des informations nécessaires pour expliquer les causes des variations.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils peuvent identifier les causes concrètes et décider des actions correctives', 'is_correct' => true],
                            ['choice_text' => 'Parce que la comptabilité ne produit jamais de données utiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que les responsables sont automatiquement coupables des écarts', 'is_correct' => false],
                            ['choice_text' => 'Parce que les écarts n’ont aucune dimension financière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle éviter de récompenser automatiquement tous les écarts favorables ?',
                        'explanation' => 'Un écart favorable peut être obtenu par une décision qui dégrade la performance globale.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un écart favorable peut provenir d’un comportement nuisible aux objectifs globaux', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les écarts favorables sont mauvais', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un budget ne doit jamais être comparé au réel', 'is_correct' => false],
                            ['choice_text' => 'Parce que les managers ne doivent jamais être évalués', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse des écarts peut-elle contribuer à améliorer les budgets futurs ?',
                        'explanation' => 'Les écarts fournissent des informations sur les hypothèses qui étaient trop optimistes ou trop prudentes.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle fournit des informations permettant d’améliorer les hypothèses futures', 'is_correct' => true],
                            ['choice_text' => 'Parce que les budgets futurs doivent être identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les écarts doivent être supprimés des historiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que le budget n’a jamais besoin d’être amélioré', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une analyse professionnelle des écarts ?', 'is_correct' => true,
                        'explanation' => 'L’objectif est d’expliquer les écarts, distinguer les causes contrôlables et orienter l’action.',
                        'choices' => [
                            ['choice_text' => 'Mesurer, décomposer, expliquer et relier les écarts aux décisions et responsabilités', 'is_correct' => true],
                            ['choice_text' => 'Corriger automatiquement tous les écarts', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les écarts non monétaires', 'is_correct' => false],
                            ['choice_text' => 'Évaluer uniquement le montant total de l’écart', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Rentabilité des produits et clients',
                'description' => 'Évaluez les produits et clients selon leur contribution réelle et leur consommation de ressources.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un produit à forte marge brute peut-il avoir une rentabilité faible après prise en compte du coût de service ?',
                        'explanation' => 'Les activités de support, logistique, personnalisation et maintenance peuvent consommer beaucoup de ressources.',
                        'choices' => [
                            ['choice_text' => 'Parce que son service, sa distribution ou sa complexité peuvent générer des coûts importants', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une marge brute élevée est toujours trompeuse', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût de service n’a aucun lien avec la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts indirects n’existent pas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse de rentabilité par client peut-elle révéler des clients à chiffre d’affaires élevé mais faible contribution ?',
                        'explanation' => 'Ces clients peuvent obtenir de fortes remises et consommer beaucoup de services.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils peuvent cumuler remises élevées et consommation importante de ressources', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un chiffre d’affaires élevé entraîne toujours une faible marge', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût de servir n’a jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les clients coûtent exactement le même montant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle conserver un client à faible rentabilité individuelle ?', 'is_correct' => true,
                        'explanation' => 'Le client peut générer des références, des ventes croisées ou un potentiel stratégique.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut apporter des synergies, références ou opportunités commerciales futures', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un client faiblement rentable est toujours stratégique', 'is_correct' => false],
                            ['choice_text' => 'Parce que la rentabilité n’a aucune importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les clients ne peuvent jamais être segmentés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le prix d’un produit doit-il être comparé à sa consommation de ressources ?',
                        'explanation' => 'Un produit générant une marge élevée mais consommant énormément de ressources rares peut être moins intéressant.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer la valeur créée par rapport aux ressources nécessaires', 'is_correct' => true],
                            ['choice_text' => 'Parce que le prix de vente détermine seul la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ressources sont illimitées', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts indirects ne doivent jamais être attribués', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un client très exigeant peut-il nécessiter un prix différent ?', 'is_correct' => true,
                        'explanation' => 'La personnalisation, les petites commandes, les retours et les services supplémentaires augmentent le coût de service.',
                        'choices' => [
                            ['choice_text' => 'Parce que son niveau de service peut mobiliser davantage de ressources', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un client exigeant doit toujours payer le prix maximal', 'is_correct' => false],
                            ['choice_text' => 'Parce que le coût de service ne peut jamais être mesuré', 'is_correct' => false],
                            ['choice_text' => 'Parce que la demande n’influence pas le prix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les analyses de rentabilité doivent-elles être actualisées ?', 'is_correct' => true,
                        'explanation' => 'Les prix, volumes, coûts et comportements clients évoluent.',
                        'choices' => [
                            ['choice_text' => 'Parce que les coûts, prix, volumes et comportements des clients peuvent évoluer', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une rentabilité ne change jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce que les produits sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts de service sont fixes dans le temps', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la rentabilité moyenne d’un portefeuille de produits peut masquer des produits destructeurs de valeur ?', 'is_correct' => true,
                        'explanation' => 'Des produits très rentables peuvent compenser temporairement des produits déficitaires.',
                        'choices' => [
                            ['choice_text' => 'Parce que les performances individuelles peuvent être très différentes à l’intérieur de la moyenne', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une moyenne est toujours fausse', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les produits doivent être rentables', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts ne peuvent pas être comparés par produit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les remises commerciales doivent-elles être intégrées dans une analyse de rentabilité client ?', 'is_correct' => true,
                        'explanation' => 'Une remise réduit la marge disponible et peut modifier fortement la contribution du client.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles réduisent le revenu réellement conservé par l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles augmentent toujours la marge', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles n’ont aucun effet sur les prix nets', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles sont toujours interdites', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse par segment peut-elle être plus utile qu’une moyenne globale ?', 'is_correct' => true,
                        'explanation' => 'Les différents segments peuvent avoir des prix, coûts et comportements très différents.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle révèle les différences de performance et de consommation de ressources entre segments', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une moyenne globale n’est jamais correcte', 'is_correct' => false],
                            ['choice_text' => 'Parce que les segments ont toujours les mêmes marges', 'is_correct' => false],
                            ['choice_text' => 'Parce que la rentabilité globale ne sert jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif doit poursuivre une analyse professionnelle de rentabilité client ?', 'is_correct' => true,
                        'explanation' => 'Elle doit permettre de comprendre les leviers de valeur et d’adapter prix, service et ressources.',
                        'choices' => [
                            ['choice_text' => 'Identifier les leviers de création de valeur et orienter les décisions commerciales et opérationnelles', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les clients à faible marge', 'is_correct' => false],
                            ['choice_text' => 'Maximiser uniquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Attribuer tous les coûts de l’entreprise à chaque client', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Prix de transfert et centres de responsabilité',
                'description' => 'Analysez les mécanismes de prix de transfert et leurs impacts sur la performance des divisions.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un prix de transfert interne influence-t-il les résultats des deux divisions concernées ?',
                        'explanation' => 'Le prix représente un revenu pour la division vendeuse et un coût pour la division acheteuse.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il constitue simultanément un revenu pour une division et un coût pour l’autre', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il ne concerne qu’une seule division', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il ne modifie jamais les indicateurs internes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un prix de transfert est toujours sans impact économique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un prix de transfert fondé sur le prix de marché peut-il être pertinent ?', 'is_correct' => true,
                        'explanation' => 'Il peut fournir un repère indépendant lorsque des transactions comparables existent.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il fournit une référence externe observable lorsque le marché est comparable', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il garantit toujours le meilleur résultat pour chaque division', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les marchés sont parfaits', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un prix de marché élimine tout conflit interne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le prix de transfert doit-il considérer les coûts d’opportunité lorsqu’une division est en capacité contrainte ?',
                        'explanation' => 'La division vendeuse pourrait utiliser sa capacité pour vendre à l’extérieur à un prix plus élevé.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une vente interne peut remplacer une vente externe plus rentable', 'is_correct' => true],
                            ['choice_text' => 'Parce que la capacité contrainte n’a aucun coût économique', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes externes sont toujours interdites', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix interne doit toujours être inférieur au coût variable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un prix de transfert trop élevé peut-il pénaliser la division acheteuse ?', 'is_correct' => true,
                        'explanation' => 'Un prix interne élevé augmente ses coûts et peut faire apparaître une rentabilité artificiellement faible.',
                        'choices' => [
                            ['choice_text' => 'Il augmente ses coûts internes et peut réduire artificiellement sa performance mesurée', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un coût élevé améliore toujours sa marge', 'is_correct' => false],
                            ['choice_text' => 'Parce que les divisions ne partagent aucun résultat', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix interne n’est jamais pris en compte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un prix de transfert trop faible peut-il pénaliser la division vendeuse ?', 'is_correct' => true,
                        'explanation' => 'Le revenu interne peut être inférieur à la valeur économique de la capacité utilisée.',
                        'choices' => [
                            ['choice_text' => 'Il peut sous-estimer la contribution de la division vendeuse et favoriser artificiellement l’acheteur', 'is_correct' => true],
                            ['choice_text' => 'Il augmente toujours la rentabilité du vendeur', 'is_correct' => false],
                            ['choice_text' => 'Il supprime les coûts de production', 'is_correct' => false],
                            ['choice_text' => 'Il garantit le meilleur résultat global', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un système de prix de transfert doit-il rechercher l’alignement avec l’intérêt global du groupe ?', 'is_correct' => true,
                        'explanation' => 'Une décision optimale au niveau d’une division peut être défavorable au groupe.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’une optimisation d’une division ne réduise la performance globale', 'is_correct' => true],
                            ['choice_text' => 'Parce que chaque division doit maximiser son résultat indépendamment', 'is_correct' => false],
                            ['choice_text' => 'Parce que les divisions n’ont aucun objectif local', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un prix de transfert ne sert qu’à la fiscalité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les prix de transfert peuvent-ils devenir particulièrement complexes dans les groupes internationaux ?', 'is_correct' => true,
                        'explanation' => 'Ils doivent alors prendre en compte des considérations économiques, organisationnelles et réglementaires supplémentaires.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils peuvent avoir des effets économiques, fiscaux et réglementaires multiples', 'is_correct' => true],
                            ['choice_text' => 'Parce que les divisions internationales ne peuvent jamais commercer entre elles', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts n’existent plus entre pays', 'is_correct' => false],
                            ['choice_text' => 'Parce que les prix de transfert sont toujours identiques au prix client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les décisions de prix de transfert doivent-elles tenir compte de la capacité disponible du vendeur ?', 'is_correct' => true,
                        'explanation' => 'Le coût d’opportunité dépend de la possibilité d’utiliser la capacité pour une vente externe.',
                        'choices' => [
                            ['choice_text' => 'Parce que le coût d’opportunité change selon que la capacité est libre ou contrainte', 'is_correct' => true],
                            ['choice_text' => 'Parce que la capacité ne change jamais les coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce que la capacité libre est toujours plus coûteuse', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes externes ne sont jamais pertinentes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les indicateurs divisionnels doivent-ils être interprétés avec les décisions de prix de transfert ?', 'is_correct' => true,
                        'explanation' => 'Le prix interne peut modifier fortement les revenus et coûts attribués aux divisions.',
                        'choices' => [
                            ['choice_text' => 'Parce que le prix interne peut modifier significativement la performance apparente des divisions', 'is_correct' => true],
                            ['choice_text' => 'Parce que les indicateurs divisionnels sont indépendants des transactions internes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les prix de transfert suppriment tous les coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce que les divisions ont toujours les mêmes résultats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe professionnel doit guider la fixation d’un prix de transfert interne ?', 'is_correct' => true,
                        'explanation' => 'Il faut chercher un mécanisme qui favorise la prise de décision cohérente avec l’intérêt global.',
                        'choices' => [
                            ['choice_text' => 'Aligner les incitations des divisions avec l’économie réelle et l’intérêt global de l’organisation', 'is_correct' => true],
                            ['choice_text' => 'Maximiser systématiquement le résultat de la division vendeuse', 'is_correct' => false],
                            ['choice_text' => 'Minimiser systématiquement le prix interne', 'is_correct' => false],
                            ['choice_text' => 'Utiliser toujours le coût historique complet', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Balanced Scorecard et pilotage stratégique',
                'description' => 'Analysez les indicateurs financiers et non financiers dans une perspective stratégique.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une approche équilibrée de la performance ne doit-elle pas se limiter aux indicateurs financiers ?', 'is_correct' => true,
                        'explanation' => 'Les résultats financiers sont souvent la conséquence de facteurs opérationnels, clients et organisationnels.',
                        'choices' => [
                            ['choice_text' => 'Parce que les résultats financiers futurs dépendent aussi des clients, processus et capacités organisationnelles', 'is_correct' => true],
                            ['choice_text' => 'Parce que les indicateurs financiers sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que la stratégie ne concerne jamais la finance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les indicateurs non financiers garantissent toujours le bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux de satisfaction client peut-il être considéré comme un indicateur avancé ?', 'is_correct' => true,
                        'explanation' => 'Il peut influencer la fidélisation, la réputation et les ventes futures.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut anticiper les conséquences futures sur la fidélisation et le chiffre d’affaires', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il représente directement le bénéfice net', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il remplace la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est indépendant de la performance commerciale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les indicateurs de processus interne sont-ils importants dans le pilotage stratégique ?', 'is_correct' => true,
                        'explanation' => 'Les processus déterminent souvent les coûts, délais et qualité qui influencent les résultats futurs.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils permettent de suivre les mécanismes qui produisent les résultats futurs', 'is_correct' => true],
                            ['choice_text' => 'Parce que les processus n’affectent jamais les coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce que les résultats financiers ne sont pas mesurables', 'is_correct' => false],
                            ['choice_text' => 'Parce que les processus sont toujours indépendants de la stratégie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les objectifs stratégiques doivent-ils être traduits en mesures opérationnelles ?', 'is_correct' => true,
                        'explanation' => 'Les managers ont besoin d’indicateurs concrets pour piloter les actions qui contribuent à la stratégie.',
                        'choices' => [
                            ['choice_text' => 'Pour transformer la stratégie en actions mesurables et pilotables', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les objectifs stratégiques', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir automatiquement l’exécution', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute mesure financière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi trop d’indicateurs peuvent-ils réduire l’efficacité d’un tableau de bord ?', 'is_correct' => true,
                        'explanation' => 'Une quantité excessive d’indicateurs peut réduire la visibilité des priorités.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils peuvent diluer l’attention et rendre les priorités moins lisibles', 'is_correct' => true],
                            ['choice_text' => 'Parce que les indicateurs sont toujours inutiles lorsqu’ils sont nombreux', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un tableau de bord ne doit contenir qu’un seul chiffre', 'is_correct' => false],
                            ['choice_text' => 'Parce que les indicateurs financiers sont interdits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les indicateurs doivent-ils être régulièrement réexaminés ?', 'is_correct' => true,
                        'explanation' => 'La stratégie et l’environnement évoluent, ce qui peut modifier la pertinence des mesures.',
                        'choices' => [
                            ['choice_text' => 'Parce que les priorités stratégiques et les conditions opérationnelles peuvent changer', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un indicateur ne peut jamais rester pertinent', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toutes les données historiques', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les comparaisons', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les indicateurs stratégiques doivent-ils avoir des responsables clairement identifiés ?', 'is_correct' => true,
                        'explanation' => 'Une responsabilité claire facilite le suivi et la mise en œuvre des actions.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer la responsabilité du suivi et des actions correctives', 'is_correct' => true],
                            ['choice_text' => 'Pour attribuer automatiquement les erreurs à une personne', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher la collaboration', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les objectifs collectifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un indicateur non financier peut-il être plus utile qu’un indicateur financier pour une décision opérationnelle immédiate ?', 'is_correct' => true,
                        'explanation' => 'Un indicateur comme le taux de défaut ou le délai de traitement peut être directement actionnable.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut mesurer directement le facteur opérationnel que le manager peut influencer', 'is_correct' => true],
                            ['choice_text' => 'Parce que les indicateurs financiers ne servent jamais aux décisions', 'is_correct' => false],
                            ['choice_text' => 'Parce que les indicateurs non financiers sont toujours exacts', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils garantissent automatiquement la rentabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un système de pilotage stratégique doit-il relier les indicateurs entre eux ?', 'is_correct' => true,
                        'explanation' => 'Les différentes dimensions de performance sont souvent interdépendantes.',
                        'choices' => [
                            ['choice_text' => 'Pour comprendre les relations entre capacités, processus, clients et résultats financiers', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre toutes les mesures identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les indicateurs financiers', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute analyse causale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un système équilibré de mesure de la performance ?', 'is_correct' => true,
                        'explanation' => 'Il doit relier les actions quotidiennes aux objectifs stratégiques et aux résultats futurs.',
                        'choices' => [
                            ['choice_text' => 'Créer une vision intégrée reliant performance financière, clients, processus et capacités futures', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les budgets', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement les objectifs stratégiques', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Cas professionnels intégrés',
                'description' => 'Résolvez des cas complexes intégrant coûts, prix, capacité, performance et stratégie.',
                'questions' => [
                    [
                        'question' => 'Une usine est proche de sa capacité maximale. Le produit A génère 25 € de contribution pour 5 heures machine et le produit B 18 € pour 2 heures. Quel choix est économiquement prioritaire sous contrainte de machine ?',
                        'explanation' => 'A génère 5 € par heure machine et B 9 € par heure machine.',
                        'choices' => [
                            ['choice_text' => 'Le produit B', 'is_correct' => true],
                            ['choice_text' => 'Le produit A', 'is_correct' => false],
                            ['choice_text' => 'Les deux de manière identique', 'is_correct' => false],
                            ['choice_text' => 'Aucun des deux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une division veut accepter une commande à prix réduit. La capacité est saturée et la commande remplace une vente externe plus rentable. Quelle donnée est la plus importante ?',
                        'explanation' => 'Le coût d’opportunité de la vente externe perdue doit être intégré à la décision.',
                        'choices' => [
                            ['choice_text' => 'La contribution perdue sur l’activité externe évincée', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le coût historique du produit', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les coûts fixes totaux de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le chiffre d’affaires de l’année précédente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réduit fortement les dépenses de maintenance pour atteindre son objectif annuel de coûts. Quelle analyse doit être menée ?', 'is_correct' => true,
                        'explanation' => 'La réduction peut augmenter les résultats immédiats mais accroître les pannes et coûts futurs.',
                        'choices' => [
                            ['choice_text' => 'Évaluer les économies immédiates avec les risques de pannes, de qualité et de coûts futurs', 'is_correct' => true],
                            ['choice_text' => 'Considérer automatiquement la réduction comme favorable', 'is_correct' => false],
                            ['choice_text' => 'Supprimer définitivement la maintenance', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les effets futurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un client génère 1 million d’euros de chiffre d’affaires mais nécessite beaucoup de livraisons urgentes et de support personnalisé. Quelle décision est la plus professionnelle ?', 'is_correct' => true,
                        'explanation' => 'Il faut analyser la rentabilité réelle du client après prise en compte du coût de service.',
                        'choices' => [
                            ['choice_text' => 'Mesurer la rentabilité réelle du client et identifier les leviers de réduction du coût de service ou d’ajustement du prix', 'is_correct' => true],
                            ['choice_text' => 'Considérer automatiquement le client comme très rentable', 'is_correct' => false],
                            ['choice_text' => 'Supprimer immédiatement le client', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les coûts de service', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un budget prévoit une forte baisse du coût unitaire mais le volume réel est beaucoup plus faible que prévu. Quel outil est le plus adapté pour évaluer correctement la performance des coûts ?', 'is_correct' => true,
                        'explanation' => 'Un budget flexible ajuste les coûts variables au volume réellement observé.',
                        'choices' => [
                            ['choice_text' => 'Un budget flexible adapté au niveau réel d’activité', 'is_correct' => true],
                            ['choice_text' => 'Le budget fixe original uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires historique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le résultat net sans analyse de volume', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une division présente un excellent taux de rendement mais refuse un investissement rentable pour l’entreprise. Quel problème de pilotage peut être en cause ?', 'is_correct' => true,
                        'explanation' => 'L’indicateur peut encourager le manager à protéger son taux de rendement au lieu de maximiser la valeur globale.',
                        'choices' => [
                            ['choice_text' => 'Un problème d’alignement entre l’indicateur divisionnel et l’intérêt global de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Un manque systématique de rentabilité du projet', 'is_correct' => false],
                            ['choice_text' => 'Une absence de coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Une erreur de calcul de toutes les ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise envisage d’automatiser une activité. Le projet augmente les coûts fixes de 200 000 € mais réduit les coûts variables de 4 € par unité. Pour 60 000 unités supplémentaires, quel est le gain variable potentiel avant coûts fixes additionnels ?',
                        'explanation' => '60 000 × 4 € = 240 000 € d’économie variable potentielle.',
                        'choices' => [
                            ['choice_text' => '240 000 €', 'is_correct' => true],
                            ['choice_text' => '200 000 €', 'is_correct' => false],
                            ['choice_text' => '60 000 €', 'is_correct' => false],
                            ['choice_text' => '440 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le cas précédent, pourquoi le projet d’automatisation ne doit-il pas être accepté uniquement parce qu’il génère une économie variable ?',
                        'is_correct' => true,
                        'explanation' => 'Il faut comparer l’économie au coût fixe supplémentaire et tenir compte du volume réellement attendu.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il faut vérifier si les économies attendues couvrent durablement l’investissement et les coûts fixes supplémentaires', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute économie variable est sans valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes additionnels n’ont aucun effet', 'is_correct' => false],
                            ['choice_text' => 'Parce que le volume produit ne compte pas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une décision de réduction de gamme doit-elle intégrer l’effet sur les coûts communs et la demande future ?', 'is_correct' => true,
                        'explanation' => 'La suppression d’un produit peut modifier les coûts fixes et les ventes croisées.',
                        'choices' => [
                            ['choice_text' => 'Parce que les coûts communs peuvent rester et que la suppression peut affecter les autres ventes', 'is_correct' => true],
                            ['choice_text' => 'Parce que tout produit supprimé fait disparaître tous les coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce que les clients ne réagissent jamais à une réduction de gamme', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes croisées n’existent pas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur principe pour résoudre un cas professionnel de contrôle de gestion complexe ?', 'is_correct' => true,
                        'explanation' => 'Une décision solide combine données différentielles, contraintes, risque, comportement, stratégie et conséquences à court et long terme.',
                        'choices' => [
                            ['choice_text' => 'Combiner coûts pertinents, capacité, opportunités, risques, comportements et objectifs stratégiques', 'is_correct' => true],
                            ['choice_text' => 'Utiliser uniquement le coût complet historique', 'is_correct' => false],
                            ['choice_text' => 'Choisir automatiquement l’option au prix le plus bas', 'is_correct' => false],
                            ['choice_text' => 'Se concentrer uniquement sur le résultat comptable immédiat', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Gouvernance financière et amélioration continue',
                'description' => 'Analysez les mécanismes professionnels de gouvernance, amélioration des coûts et performance durable.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une initiative d’amélioration des coûts doit-elle mesurer les effets après sa mise en œuvre ?', 'is_correct' => true,
                        'explanation' => 'Une économie prévue peut ne pas se réaliser complètement ou produire des effets secondaires.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que les économies réelles et les effets secondaires correspondent aux hypothèses', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir automatiquement les économies prévues', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le budget', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute modification du processus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût cible peut-il être utile lors du développement d’un nouveau produit ?', 'is_correct' => true,
                        'explanation' => 'Le coût cible part du prix acceptable par le marché et de la marge souhaitée pour déterminer le coût à atteindre.',
                        'choices' => [
                            ['choice_text' => 'Il permet de déterminer le coût maximal compatible avec un prix de marché et une marge souhaitée', 'is_correct' => true],
                            ['choice_text' => 'Il consiste à additionner toutes les dépenses historiques', 'is_correct' => false],
                            ['choice_text' => 'Il garantit que le marché acceptera le produit', 'is_correct' => false],
                            ['choice_text' => 'Il élimine tous les coûts de développement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un produit peut être vendu 120 € et l’entreprise souhaite une marge de 30 €. Quel est le coût cible simplifié ?',
                        'explanation' => 'Coût cible = prix cible - marge cible = 120 € - 30 € = 90 €.',
                        'choices' => [
                            ['choice_text' => '90 €', 'is_correct' => true],
                            ['choice_text' => '30 €', 'is_correct' => false],
                            ['choice_text' => '120 €', 'is_correct' => false],
                            ['choice_text' => '150 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’amélioration continue des coûts ne signifie-t-elle pas nécessairement réduire chaque coût ?', 'is_correct' => true,
                        'explanation' => 'Une dépense peut créer de la valeur même si elle est importante ; l’objectif est d’optimiser la consommation de ressources.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’objectif est d’améliorer la valeur créée par les ressources et non de réduire aveuglément les dépenses', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts élevés sont toujours meilleurs', 'is_correct' => false],
                            ['choice_text' => 'Parce que la réduction de coût est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'Parce que les entreprises ne doivent jamais modifier leurs processus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la standardisation des processus peut-elle réduire les coûts ?', 'is_correct' => true,
                        'explanation' => 'Des processus standardisés peuvent réduire les variations, erreurs et reprises.',
                        'choices' => [
                            ['choice_text' => 'Elle peut réduire les variations, erreurs, temps de traitement et activités sans valeur', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours une réduction du personnel', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime automatiquement les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche l’innovation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi distinguer les activités à valeur ajoutée et sans valeur ajoutée peut-il améliorer le contrôle de gestion ?', 'is_correct' => true,
                        'explanation' => 'Cette distinction aide à identifier les ressources consommées sans contribution directe à la valeur perçue.',
                        'choices' => [
                            ['choice_text' => 'Pour cibler les activités qui consomment des ressources sans créer suffisamment de valeur', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les activités de contrôle', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire toutes les tâches administratives à zéro', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une hausse des ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les économies réalisées doivent-elles être distinguées des économies réellement capturées ?', 'is_correct' => true,
                        'explanation' => 'Une réduction théorique des coûts ne produit pas nécessairement un gain financier si le volume, les prix ou les dépenses compensatoires changent.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une économie théorique peut être annulée par des changements de volume ou d’autres coûts', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les économies sont automatiquement encaissées', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts ne peuvent jamais être comparés', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une économie est toujours un gain de trésorerie immédiat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les initiatives d’amélioration doivent-elles intégrer des indicateurs de risque et de qualité ?', 'is_correct' => true,
                        'explanation' => 'Une amélioration financière peut devenir négative si elle augmente fortement le risque ou dégrade le service.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’une amélioration financière apparente ne crée un risque ou une dégradation de qualité', 'is_correct' => true],
                            ['choice_text' => 'Parce que la qualité n’a aucun coût', 'is_correct' => false],
                            ['choice_text' => 'Parce que les risques sont toujours impossibles à mesurer', 'is_correct' => false],
                            ['choice_text' => 'Parce que tout projet de réduction des coûts est risqué', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’amélioration continue doit-elle être intégrée aux objectifs managériaux ?', 'is_correct' => true,
                        'explanation' => 'Les managers sont essentiels pour identifier les inefficiences et maintenir les améliorations.',
                        'choices' => [
                            ['choice_text' => 'Pour inscrire l’amélioration des processus dans les responsabilités et décisions quotidiennes', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les managers responsables de tous les coûts de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’autonomie des équipes', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter la mesure des résultats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif professionnel d’une gouvernance des coûts mature ?', 'is_correct' => true,
                        'explanation' => 'Une gouvernance mature cherche à créer de la valeur durable plutôt qu’à réduire les coûts de façon isolée.',
                        'choices' => [
                            ['choice_text' => 'Optimiser durablement les ressources en conciliant coût, qualité, risque, capacité et stratégie', 'is_correct' => true],
                            ['choice_text' => 'Réduire tous les coûts au minimum absolu', 'is_correct' => false],
                            ['choice_text' => 'Maximiser uniquement les économies immédiates', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les activités non directement productives', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Cas de synthèse pour décideurs',
                'description' => 'Quiz intégrateur de niveau professionnel sur la décision, la performance, les coûts et la stratégie.',
                'questions' => [
                    [
                        'question' => 'Une entreprise doit choisir entre deux produits avec une capacité de production limitée. Le produit A génère 50 € de contribution et consomme 5 heures ; le produit B génère 36 € et consomme 3 heures. Lequel offre la meilleure contribution par heure ?', 
                        'explanation' => 'Produit A : 50 / 5 = 10 €. Produit B : 36 / 3 = 12 € par heure.',
                        'choices' => [
                            ['choice_text' => 'Le produit B, avec 12 € de contribution par heure', 'is_correct' => true],
                            ['choice_text' => 'Le produit A, avec 10 € par heure', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Aucun des deux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un responsable propose de fermer un produit affichant une perte de 40 000 € après allocation de 100 000 € de coûts fixes communs. Quel point est essentiel ?', 'is_correct' => true,
                        'explanation' => 'Si les 100 000 € de coûts communs ne disparaissent pas, ils continueront après l’abandon et ne doivent pas être considérés comme des économies.',
                        'choices' => [
                            ['choice_text' => 'Déterminer quelle partie des coûts de 100 000 € disparaîtrait réellement', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les 100 000 € du budget immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Conclure que le produit est forcément destructeur de valeur', 'is_correct' => false],
                            ['choice_text' => 'Ignorer la contribution du produit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une division souhaite accepter une commande spéciale très rentable sur une marge unitaire mais la commande exige toute la capacité restante. Quelle information manque avant de décider ?', 'is_correct' => true,
                        'explanation' => 'Il faut déterminer l’activité évincée et sa contribution perdue.',
                        'choices' => [
                            ['choice_text' => 'La contribution de l’utilisation alternative de la capacité', 'is_correct' => true],
                            ['choice_text' => 'Le montant historique des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les coûts fixes déjà engagés', 'is_correct' => false],
                            ['choice_text' => 'Le nombre total d’employés du groupe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente sa marge en réduisant fortement le service après-vente. Les coûts diminuent mais les réclamations augmentent. Quel diagnostic est le plus pertinent ?', 'is_correct' => true,
                        'explanation' => 'L’économie immédiate peut être compensée par une dégradation de la satisfaction et des coûts futurs.',
                        'choices' => [
                            ['choice_text' => 'L’amélioration financière doit être évaluée avec les effets sur la qualité, la fidélisation et les coûts futurs', 'is_correct' => true],
                            ['choice_text' => 'La réduction de coûts est automatiquement une réussite', 'is_correct' => false],
                            ['choice_text' => 'Les réclamations ne sont pas pertinentes en comptabilité de gestion', 'is_correct' => false],
                            ['choice_text' => 'Le service après-vente doit toujours être supprimé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un manager respecte son budget de coûts mais dépasse fortement le budget de défauts qualité. Quel problème le système de pilotage peut-il présenter ?', 'is_correct' => true,
                        'explanation' => 'Le système récompense la baisse des coûts sans intégrer suffisamment la qualité.',
                        'choices' => [
                            ['choice_text' => 'Les indicateurs encouragent une optimisation du coût au détriment de la qualité', 'is_correct' => true],
                            ['choice_text' => 'Le manager est nécessairement performant', 'is_correct' => false],
                            ['choice_text' => 'Le budget de qualité est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'Les défauts qualité ne représentent jamais un coût', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une analyse ABC révèle qu’un client important génère beaucoup de petites commandes et de livraisons urgentes. Quelle action est la plus appropriée ?', 'is_correct' => true,
                        'explanation' => 'Il faut rechercher des leviers comme minimums de commande, tarification du service ou meilleure planification.',
                        'choices' => [
                            ['choice_text' => 'Revoir les conditions commerciales et opérationnelles pour réduire le coût de service ou mieux le facturer', 'is_correct' => true],
                            ['choice_text' => 'Supprimer automatiquement le client', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les coûts de service puisque le chiffre d’affaires est élevé', 'is_correct' => false],
                            ['choice_text' => 'Réduire tous les services sans analyse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un budget flexible montre que les coûts variables sont conformes au niveau réel d’activité, mais les coûts réels restent supérieurs aux références par unité. Quelle conclusion est la plus adaptée ?', 'is_correct' => true,
                        'explanation' => 'Le problème peut venir d’un coût unitaire plus élevé, même lorsque le volume explique une partie de l’écart total.',
                        'choices' => [
                            ['choice_text' => 'Il faut rechercher un problème de prix, d’efficacité ou de productivité par unité', 'is_correct' => true],
                            ['choice_text' => 'Le volume est forcément responsable de tout l’écart', 'is_correct' => false],
                            ['choice_text' => 'Le budget flexible est inutile', 'is_correct' => false],
                            ['choice_text' => 'Les coûts sont nécessairement maîtrisés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une division refuse un projet ayant une valeur économique positive parce qu’il réduit son taux de rendement moyen. Quelle faiblesse de mesure apparaît ?', 'is_correct' => true,
                        'explanation' => 'Le taux moyen peut créer une incitation à refuser des investissements qui augmentent pourtant la valeur totale.',
                        'choices' => [
                            ['choice_text' => 'L’indicateur peut encourager la division à protéger son taux au détriment de la création de valeur globale', 'is_correct' => true],
                            ['choice_text' => 'Le projet est forcément déficitaire', 'is_correct' => false],
                            ['choice_text' => 'Le taux de rendement est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'La division ne doit jamais investir', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut réduire son coût cible de 10 % sans diminuer la valeur perçue par le client. Quelle approche est la plus pertinente ?', 'is_correct' => true,
                        'explanation' => 'La réduction du coût doit rechercher les fonctions et processus qui consomment des ressources sans créer suffisamment de valeur.',
                        'choices' => [
                            ['choice_text' => 'Analyser les fonctions, processus et caractéristiques pour éliminer les coûts sans valeur suffisante', 'is_correct' => true],
                            ['choice_text' => 'Réduire uniformément toutes les dépenses de 10 %', 'is_correct' => false],
                            ['choice_text' => 'Réduire uniquement la qualité des matières', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le prix sans analyser le marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume le mieux la comptabilité de gestion de niveau professionnel ?', 'is_correct' => true,
                        'explanation' => 'La comptabilité de gestion professionnelle relie les coûts, ressources, comportements, risques et objectifs stratégiques aux décisions.',
                        'choices' => [
                            ['choice_text' => 'Utiliser les informations de coûts et de performance pour créer de la valeur tout en intégrant stratégie, risque et comportement', 'is_correct' => true],
                            ['choice_text' => 'Se concentrer uniquement sur la réduction des coûts', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement les coûts historiques', 'is_correct' => false],
                            ['choice_text' => 'Maximiser uniquement les résultats à court terme', 'is_correct' => false],
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
                    'duration' => 32,
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