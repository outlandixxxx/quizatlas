<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ManagementAccountingAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'management-accounting')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Comptabilité de gestion — Analyse avancée coût-volume-profit',
                'description' => 'Approfondissez l’analyse du seuil de rentabilité, du levier opérationnel et de la sensibilité du résultat.',
                'questions' => [
                    [
                        'question' => 'Une entreprise vend un produit 80 € et supporte un coût variable unitaire de 50 €. Ses coûts fixes sont de 240 000 €. Quel est son seuil de rentabilité en unités ?',
                        'explanation' => 'La marge sur coût variable unitaire est de 30 €. Le seuil est donc de 240 000 / 30 = 8 000 unités.',
                        'choices' => [
                            ['choice_text' => '8 000 unités', 'is_correct' => true],
                            ['choice_text' => '6 000 unités', 'is_correct' => false],
                            ['choice_text' => '9 600 unités', 'is_correct' => false],
                            ['choice_text' => '12 000 unités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise ayant une proportion élevée de coûts fixes présente-t-elle généralement un levier opérationnel plus important ?',
                        'explanation' => 'Une structure fortement chargée en coûts fixes entraîne une variation plus forte du résultat lorsque les ventes changent.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une variation du volume produit un effet plus important sur le résultat une fois les coûts fixes couverts', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts fixes deviennent variables', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts variables disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix de vente devient fixe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a une marge sur coût variable totale de 500 000 € et des coûts fixes de 400 000 €. Quel est le résultat avant éléments financiers et fiscaux dans un modèle simplifié ?',
                        'explanation' => 'Le résultat simplifié est égal à la marge sur coût variable moins les coûts fixes.',
                        'choices' => [
                            ['choice_text' => '100 000 €', 'is_correct' => true],
                            ['choice_text' => '900 000 €', 'is_correct' => false],
                            ['choice_text' => '400 000 €', 'is_correct' => false],
                            ['choice_text' => '500 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse du prix de vente peut-elle avoir un effet disproportionné sur le bénéfice ?',
                        'explanation' => 'Une baisse du prix réduit la marge unitaire, ce qui peut nécessiter une forte hausse du volume pour compenser.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle réduit directement la marge sur coût variable et peut exiger beaucoup plus de volume pour compenser', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle réduit automatiquement les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle augmente toujours la contribution unitaire', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle supprime les coûts variables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le point mort exprimé en unités et le point mort exprimé en chiffre d’affaires ne donnent-ils pas exactement la même information ?',
                        'explanation' => 'L’un mesure un volume physique tandis que l’autre mesure une valeur de ventes nécessaire pour atteindre l’équilibre.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’un mesure un volume et l’autre une valeur de ventes', 'is_correct' => true],
                            ['choice_text' => 'Parce que le chiffre d’affaires n’est pas lié aux ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les deux indicateurs utilisent des coûts complètement différents', 'is_correct' => false],
                            ['choice_text' => 'Parce que le point mort n’est jamais exprimable en unités', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise améliore sa marge unitaire de 20 % sans modifier ses coûts fixes. Quel effet est généralement attendu sur le seuil de rentabilité ?',
                        'explanation' => 'Une marge unitaire plus élevée permet de couvrir les coûts fixes avec moins d’unités.',
                        'choices' => [
                            ['choice_text' => 'Une diminution du seuil de rentabilité', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation automatique du seuil', 'is_correct' => false],
                            ['choice_text' => 'Aucun changement possible', 'is_correct' => false],
                            ['choice_text' => 'Une suppression des coûts fixes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise ayant un faible niveau de marge de sécurité est-elle plus vulnérable à une baisse des ventes ?',
                        'explanation' => 'Une faible marge de sécurité signifie que les ventes sont proches du seuil de rentabilité.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une faible baisse des ventes peut suffire à faire passer l’entreprise sous le seuil de rentabilité', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts fixes deviennent nuls', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts variables disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les prix deviennent automatiquement plus élevés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse coût-volume-profit doit-elle être utilisée avec prudence lorsque l’entreprise vend plusieurs produits ?',
                        'explanation' => 'Le mix des ventes influence la marge moyenne et donc le seuil de rentabilité.',
                        'choices' => [
                            ['choice_text' => 'Parce que le mix des ventes peut modifier fortement la marge moyenne et le seuil de rentabilité', 'is_correct' => true],
                            ['choice_text' => 'Parce que plusieurs produits ont toujours la même marge', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes disparaissent dans une entreprise multiproduit', 'is_correct' => false],
                            ['choice_text' => 'Parce que les volumes ne sont plus mesurables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un changement du mix de ventes peut-il réduire le bénéfice même si le chiffre d’affaires reste constant ?',
                        'explanation' => 'Le chiffre d’affaires peut être composé davantage de produits à faible contribution.',
                        'choices' => [
                            ['choice_text' => 'Parce que les produits vendus peuvent avoir des marges sur coût variable différentes', 'is_correct' => true],
                            ['choice_text' => 'Parce que le chiffre d’affaires fixe automatiquement le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes dépendent uniquement du prix moyen', 'is_correct' => false],
                            ['choice_text' => 'Parce que le volume ne compte jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal intérêt d’une analyse de sensibilité dans un modèle coût-volume-profit ?',
                        'explanation' => 'Elle permet d’observer comment le résultat évolue lorsque des hypothèses telles que le prix, le volume ou les coûts changent.',
                        'choices' => [
                            ['choice_text' => 'Mesurer la sensibilité du résultat aux changements des hypothèses clés', 'is_correct' => true],
                            ['choice_text' => 'Garantir les prévisions futures', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toute analyse budgétaire', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Budgets flexibles et contrôle budgétaire',
                'description' => 'Analysez les budgets flexibles et les écarts de manière avancée.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un budget flexible est-il particulièrement utile lorsque le volume réel diffère fortement du volume budgété ?',
                        'explanation' => 'Il permet de comparer le résultat réel à un budget ajusté au niveau d’activité réellement observé.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il permet de comparer les coûts à une référence correspondant au niveau réel d’activité', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il supprime automatiquement les écarts', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il transforme tous les coûts en coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il élimine les besoins de prévision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise avait budgété 10 000 unités avec 100 000 € de coûts variables. Elle produit réellement 12 000 unités. Pourquoi comparer directement les 100 000 € au coût réel peut-il être trompeur ?',
                        'explanation' => 'Le coût variable budgété doit être ajusté au volume réel avant d’évaluer la performance.',
                        'choices' => [
                            ['choice_text' => 'Parce que le niveau réel d’activité est différent du niveau prévu', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts variables ne dépendent jamais du volume', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes doivent être supprimés', 'is_correct' => false],
                            ['choice_text' => 'Parce que le budget initial est toujours faux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer un écart de volume d’un écart de prix ?',
                        'explanation' => 'Un écart peut provenir d’un changement de quantité consommée ou du prix unitaire.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier séparément l’effet de la quantité et celui du prix', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils ont toujours la même cause', 'is_correct' => false],
                            ['choice_text' => 'Parce que les prix ne changent jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce que la quantité n’influence pas les coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un écart favorable sur les coûts doit-il être interprété avec les indicateurs opérationnels ?',
                        'explanation' => 'Une économie peut parfois provenir d’une baisse de qualité, d’un retard ou d’une réduction d’activité.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une économie peut être obtenue au prix d’une dégradation d’autres performances', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un écart favorable est toujours négatif', 'is_correct' => false],
                            ['choice_text' => 'Parce que la qualité n’a jamais de coût', 'is_correct' => false],
                            ['choice_text' => 'Parce que les indicateurs non financiers ne servent jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse des écarts doit-elle distinguer les facteurs contrôlables des facteurs externes ?',
                        'explanation' => 'Un manager ne peut pas être évalué de la même manière sur une variation qu’il ne pouvait pas influencer.',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer équitablement la responsabilité des managers', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les facteurs externes', 'is_correct' => false],
                            ['choice_text' => 'Pour faire disparaître les écarts', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les budgets identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un budget fixe peut-il surestimer la mauvaise performance d’un responsable lorsque le volume réel est inférieur au budget ?',
                        'explanation' => 'Certains coûts variables devraient naturellement être plus faibles lorsque l’activité est inférieure au plan.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il ne tient pas compte de la baisse d’activité qui réduit normalement certains coûts variables', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les coûts restent identiques quel que soit le volume', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les budgets fixes sont toujours incorrects', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse d’écart doit-elle souvent descendre jusqu’à la cause opérationnelle ?',
                        'explanation' => 'Le simple montant de l’écart n’indique pas quelle action corrective est nécessaire.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier l’action concrète permettant de corriger ou prévenir l’écart', 'is_correct' => true],
                            ['choice_text' => 'Pour transformer l’écart en bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les indicateurs', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute responsabilité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un écart défavorable peut-il être acceptable dans certaines situations ?', 'explanation' => 'Une dépense supplémentaire peut être volontaire si elle soutient un objectif stratégique ou compense un risque.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une dépense supérieure peut être intentionnelle et économiquement justifiée', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les écarts défavorables sont positifs', 'is_correct' => false],
                            ['choice_text' => 'Parce que les budgets ne doivent jamais être respectés', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts supplémentaires n’ont aucune conséquence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle analyser des écarts en pourcentage plutôt qu’en valeur absolue uniquement ?',
                        'explanation' => 'Le pourcentage aide à apprécier l’importance relative de l’écart par rapport à la base de comparaison.',
                        'choices' => [
                            ['choice_text' => 'Pour apprécier l’importance relative de l’écart par rapport au montant de référence', 'is_correct' => true],
                            ['choice_text' => 'Parce que les montants absolus ne servent jamais', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les écarts importants', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir la comparabilité de tous les secteurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un système avancé de contrôle budgétaire ?',
                        'explanation' => 'Il doit relier les écarts aux causes et aux décisions correctives.',
                        'choices' => [
                            ['choice_text' => 'Identifier les écarts significatifs, comprendre leurs causes et orienter les actions', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les écarts', 'is_correct' => false],
                            ['choice_text' => 'Maximiser automatiquement les budgets', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la gestion opérationnelle', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Décisions à court terme et coûts pertinents',
                'description' => 'Appliquez les notions de coûts pertinents, coûts irrécupérables et coûts d’opportunité.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un coût irrécupérable ne doit-il généralement pas influencer une décision future ?',
                        'explanation' => 'Il est déjà engagé et ne change pas selon l’option choisie.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il est déjà engagé et ne diffère plus entre les alternatives futures', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il est toujours inférieur à zéro', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il n’a jamais existé', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il devient automatiquement un coût variable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une machine inutilisée pourrait être louée 40 000 € par an si elle n’est pas utilisée pour un nouveau projet. Quel type de coût représente ce manque à gagner pour le projet ?',
                        'explanation' => 'L’utilisation de la machine pour le projet fait renoncer à la possibilité de la louer.',
                        'choices' => [
                            ['choice_text' => 'Un coût d’opportunité', 'is_correct' => true],
                            ['choice_text' => 'Un coût irrécupérable', 'is_correct' => false],
                            ['choice_text' => 'Un coût fixe historique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une charge fiscale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts pertinents sont-ils généralement centrés sur le futur ?',
                        'explanation' => 'La décision influence les conséquences futures, pas les ressources déjà consommées.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une décision modifie principalement les conséquences économiques futures', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts historiques sont toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que le passé n’a aucune valeur analytique', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts futurs sont toujours certains', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une unité de production est saturée. Le produit A génère 30 € de marge et exige 3 heures machine. Le produit B génère 24 € et exige 2 heures machine. Quel produit est prioritaire selon la contribution par heure machine ?',
                        'explanation' => 'Produit A : 30/3 = 10 € par heure. Produit B : 24/2 = 12 € par heure.',
                        'choices' => [
                            ['choice_text' => 'Le produit B', 'is_correct' => true],
                            ['choice_text' => 'Le produit A', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont équivalents', 'is_correct' => false],
                            ['choice_text' => 'Aucun des deux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût complet peut-il être insuffisant pour une décision ponctuelle de capacité ?',
                        'explanation' => 'Une partie des coûts complets peut rester inchangée quelle que soit l’option choisie.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut inclure des coûts qui ne changent pas selon la décision', 'is_correct' => true],
                            ['choice_text' => 'Parce que le coût complet n’a jamais de valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes n’existent pas', 'is_correct' => false],
                            ['choice_text' => 'Parce que le prix de vente est toujours plus important', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un manager ne doit-il pas nécessairement fermer un produit qui affiche une perte après allocation de coûts fixes communs ?',
                        'explanation' => 'Si le produit contribue à couvrir une partie des coûts fixes communs qui ne disparaîtraient pas, sa suppression peut réduire le résultat global.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut encore contribuer à couvrir des coûts fixes qui resteraient après sa suppression', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un produit déficitaire est toujours rentable', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes disparaissent toujours lorsqu’un produit est supprimé', 'is_correct' => false],
                            ['choice_text' => 'Parce que la marge n’a aucun intérêt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une commande spéciale peut-elle être refusée malgré une contribution positive lorsqu’une capacité est saturée ?',
                        'explanation' => 'La commande peut remplacer une activité existante ayant une contribution plus importante.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut évincer une activité plus rentable et créer un coût d’opportunité', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une contribution positive est toujours insuffisante', 'is_correct' => false],
                            ['choice_text' => 'Parce que la capacité n’a aucun effet', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une commande spéciale ne génère jamais de revenu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets qualitatifs peuvent-ils modifier une décision qui paraît favorable sur les seuls coûts ?',
                        'explanation' => 'La qualité, le risque fournisseur, la satisfaction client et la réputation peuvent avoir une valeur économique importante.',
                        'choices' => [
                            ['choice_text' => 'Parce que certains effets économiques importants ne sont pas facilement chiffrables à court terme', 'is_correct' => true],
                            ['choice_text' => 'Parce que les données financières sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les facteurs qualitatifs sont sans valeur', 'is_correct' => false],
                            ['choice_text' => 'Parce que la décision doit toujours suivre le coût le plus faible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût d’opportunité est-il particulièrement important lorsque les ressources sont rares ?',
                        'explanation' => 'Une ressource rare ne peut pas être affectée simultanément à plusieurs usages.',
                        'choices' => [
                            ['choice_text' => 'Parce que choisir une utilisation implique de renoncer à la meilleure utilisation alternative', 'is_correct' => true],
                            ['choice_text' => 'Parce que les ressources rares sont toujours gratuites', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ressources rares ne génèrent jamais de contribution', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ressources illimitées ont un coût d’opportunité plus élevé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe professionnel doit guider une décision de court terme ?', 
                        'explanation' => 'Il faut comparer les conséquences futures différentielles, les alternatives et les effets qualitatifs importants.',
                        'choices' => [
                            ['choice_text' => 'Analyser les flux différentiels futurs, les coûts d’opportunité et les conséquences qualitatives', 'is_correct' => true],
                            ['choice_text' => 'Utiliser uniquement les coûts historiques complets', 'is_correct' => false],
                            ['choice_text' => 'Choisir toujours l’option au coût comptable le plus faible', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les ressources rares', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Coûts par activité et rentabilité des clients',
                'description' => 'Utilisez une approche avancée des activités pour analyser la rentabilité des produits et clients.',
                'questions' => [
                    [
                        'question' => 'Pourquoi deux clients ayant le même chiffre d’affaires peuvent-ils avoir des rentabilités très différentes ?',
                        'explanation' => 'Ils peuvent consommer des ressources différentes en livraison, support, commandes ou service personnalisé.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils peuvent consommer des ressources commerciales et opérationnelles différentes', 'is_correct' => true],
                            ['choice_text' => 'Parce que le chiffre d’affaires détermine toujours la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts indirects n’existent pas', 'is_correct' => false],
                            ['choice_text' => 'Parce que les prix sont toujours identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’ABC peut-il être utilisé pour analyser la rentabilité d’un client ?', 'is_correct' => true,
                        'explanation' => 'Les clients peuvent consommer différentes activités de service et de support.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il permet d’attribuer les coûts des activités réellement consommées par chaque client', 'is_correct' => true],
                            ['choice_text' => 'Parce que les clients sont tous traités de la même manière', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’ABC ne traite que les produits physiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que le chiffre d’affaires suffit toujours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une activité de traitement des commandes coûte 120 000 € pour 4 000 commandes. Quel est le coût moyen par commande ?', 'is_correct' => true,
                        'explanation' => '120 000 € ÷ 4 000 = 30 € par commande.',
                        'choices' => [
                            ['choice_text' => '30 €', 'is_correct' => true],
                            ['choice_text' => '40 €', 'is_correct' => false],
                            ['choice_text' => '120 €', 'is_correct' => false],
                            ['choice_text' => '480 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un client passant de nombreuses petites commandes peut-il être moins rentable qu’un client faisant une seule grosse commande ?',
                        'explanation' => 'Le nombre de commandes peut générer davantage de coûts de traitement même à chiffre d’affaires identique.',
                        'choices' => [
                            ['choice_text' => 'Parce que chaque commande peut consommer des ressources administratives et logistiques supplémentaires', 'is_correct' => true],
                            ['choice_text' => 'Parce que les petites commandes ont toujours un prix plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Parce que la fréquence des commandes n’a aucun effet sur les coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce que les clients importants sont toujours moins rentables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse de rentabilité par client peut-elle modifier une stratégie commerciale ?', 'is_correct' => true,
                        'explanation' => 'Elle peut révéler que certains clients très importants en chiffre d’affaires consomment aussi beaucoup de ressources.',
                        'choices' => [
                            ['choice_text' => 'Elle peut révéler que le chiffre d’affaires élevé ne correspond pas toujours à une forte contribution économique', 'is_correct' => true],
                            ['choice_text' => 'Parce que les gros clients sont toujours non rentables', 'is_correct' => false],
                            ['choice_text' => 'Parce que la rentabilité ne dépend jamais des coûts de service', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un client doit toujours être supprimé lorsqu’il consomme des ressources', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les inducteurs d’activité doivent-ils être choisis avec soin dans un modèle ABC ?', 'is_correct' => true,
                        'explanation' => 'Un mauvais inducteur peut déformer la relation entre ressources consommées et objets de coût.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer une relation raisonnable entre consommation d’activité et coûts attribués', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que tous les clients auront le même coût', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toutes les activités indirectes', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute collecte de données', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la complexité opérationnelle est-elle importante dans une analyse ABC ?', 'is_correct' => true,
                        'explanation' => 'Des produits ou clients complexes peuvent consommer davantage d’activités indirectes.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une plus grande complexité peut entraîner une consommation plus importante d’activités de support', 'is_correct' => true],
                            ['choice_text' => 'Parce que la complexité réduit toujours les coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un produit complexe n’a jamais de coûts directs', 'is_correct' => false],
                            ['choice_text' => 'Parce que le nombre d’activités n’a aucun effet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une information ABC peut-elle conduire à modifier une politique commerciale sans supprimer un client immédiatement ?', 'is_correct' => true,
                        'explanation' => 'L’entreprise peut ajuster les prix, les services, les minimums de commande ou les conditions commerciales.',
                        'choices' => [
                            ['choice_text' => 'Elle peut identifier des leviers d’amélioration comme les prix, services ou conditions de commande', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un client déficitaire doit toujours être supprimé', 'is_correct' => false],
                            ['choice_text' => 'Parce que les activités ne peuvent jamais être modifiées', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts ne peuvent être réduits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il intégrer les revenus et les coûts de service dans la rentabilité client ?', 'is_correct' => true,
                        'explanation' => 'Le chiffre d’affaires seul ne tient pas compte du coût de servir le client.',
                        'choices' => [
                            ['choice_text' => 'Pour mesurer la contribution économique réelle de la relation client', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts de service n’existent pas', 'is_correct' => false],
                            ['choice_text' => 'Parce que les revenus ne sont jamais importants', 'is_correct' => false],
                            ['choice_text' => 'Parce que la rentabilité client est toujours égale au chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal avantage stratégique d’une analyse avancée des coûts par activité ?', 'is_correct' => true,
                        'explanation' => 'Elle permet de comprendre les véritables facteurs de consommation des ressources et d’améliorer les décisions.',
                        'choices' => [
                            ['choice_text' => 'Identifier les activités qui consomment réellement les ressources et leurs facteurs de coût', 'is_correct' => true],
                            ['choice_text' => 'Réduire mécaniquement tous les coûts', 'is_correct' => false],
                            ['choice_text' => 'Remplacer toutes les données financières', 'is_correct' => false],
                            ['choice_text' => 'Garantir la rentabilité de tous les clients', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Centres de responsabilité et évaluation de performance',
                'description' => 'Approfondissez l’évaluation des managers et des centres de responsabilité.',
                'questions' => [
                    [
                        'question' => 'Pourquoi évaluer un manager sur le retour des actifs qu’il ne contrôle pas peut-il être injuste ?', 'is_correct' => true,
                        'explanation' => 'Le manager peut être influencé par des investissements ou décisions prises au niveau supérieur.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une partie de la performance peut dépendre de décisions qu’il ne contrôle pas', 'is_correct' => true],
                            ['choice_text' => 'Parce que les actifs ne doivent jamais être mesurés', 'is_correct' => false],
                            ['choice_text' => 'Parce que les managers ne doivent pas être évalués', 'is_correct' => false],
                            ['choice_text' => 'Parce que le retour sur actifs est toujours inutile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le résultat résiduel peut-il compléter une mesure de rentabilité ?', 'is_correct' => true,
                        'explanation' => 'Il tient compte du coût du capital engagé, ce qui peut limiter certains comportements de sous-investissement.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il prend en compte une charge liée au capital engagé avant d’évaluer la performance restante', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il ignore les coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il mesure uniquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il supprime les actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un manager peut-il refuser un projet économiquement positif pour son entreprise s’il est évalué uniquement par son taux de rendement ?', 
                        'explanation' => 'Un projet peut diminuer le taux moyen d’un centre déjà très rentable tout en créant de la valeur.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il peut réduire son taux moyen tout en créant pourtant une valeur positive pour l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un projet positif est toujours une perte', 'is_correct' => false],
                            ['choice_text' => 'Parce que les managers ignorent toujours la stratégie', 'is_correct' => false],
                            ['choice_text' => 'Parce que le rendement n’a aucun lien avec la décision', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les prix de transfert peuvent-ils créer des conflits entre centres ?', 'is_correct' => true,
                        'explanation' => 'Le prix de transfert modifie le revenu du centre vendeur et le coût du centre acheteur.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils influencent simultanément le résultat des centres concernés', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils n’affectent jamais les résultats internes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un prix de transfert est toujours égal au prix de marché', 'is_correct' => false],
                            ['choice_text' => 'Parce que les centres n’ont jamais d’intérêts différents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un système d’évaluation uniquement financier peut-il encourager des décisions à court terme ?', 'is_correct' => true,
                        'explanation' => 'Les managers peuvent réduire des investissements ou dépenses utiles pour améliorer le résultat immédiat.',
                        'choices' => [
                            ['choice_text' => 'Parce que les managers peuvent sacrifier des investissements ou la qualité future pour améliorer le résultat immédiat', 'is_correct' => true],
                            ['choice_text' => 'Parce que les indicateurs financiers sont toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les objectifs financiers ne peuvent jamais être mesurés', 'is_correct' => false],
                            ['choice_text' => 'Parce que les résultats à court terme sont toujours sans importance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les indicateurs non financiers complètent-ils les mesures financières dans un centre de responsabilité ?', 'is_correct' => true,
                        'explanation' => 'Ils peuvent mesurer les facteurs qui déterminent la performance future.',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de suivre des facteurs déterminants comme qualité, délai ou satisfaction', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent tous les indicateurs financiers', 'is_correct' => false],
                            ['choice_text' => 'Ils garantissent automatiquement la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent les coûts inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un centre de coûts peut-il être performant même si son résultat ne contient aucun revenu ?', 
                        'explanation' => 'Sa responsabilité peut porter sur l’efficacité avec laquelle il contrôle ses coûts et fournit ses services.',
                        'choices' => [
                            ['choice_text' => 'Parce que sa performance peut être liée à son efficacité de coûts et à la qualité de ses services internes', 'is_correct' => true],
                            ['choice_text' => 'Parce que les revenus sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un centre de coûts n’a aucune responsabilité', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il doit nécessairement réaliser un bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les objectifs des centres doivent-ils être alignés verticalement avec la stratégie ?', 'is_correct' => true,
                        'explanation' => 'Chaque niveau de responsabilité doit contribuer aux objectifs globaux plutôt qu’optimiser uniquement sa propre performance.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter que les décisions locales contredisent les priorités stratégiques de l’organisation', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer l’autonomie opérationnelle', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les centres identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer les objectifs individuels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la comparaison entre centres peut-elle être délicate lorsque leurs environnements diffèrent ?', 'is_correct' => true,
                        'explanation' => 'Les volumes, marchés, contraintes et ressources peuvent rendre les résultats difficilement comparables.',
                        'choices' => [
                            ['choice_text' => 'Parce que leurs niveaux d’activité, contraintes et ressources peuvent être différents', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les centres sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les indicateurs sont inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que les managers ne peuvent jamais être comparés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe professionnel doit guider l’évaluation d’un centre de responsabilité ?', 'is_correct' => true,
                        'explanation' => 'L’évaluation doit correspondre à l’autorité, aux ressources contrôlées et aux objectifs définis.',
                        'choices' => [
                            ['choice_text' => 'Aligner les indicateurs sur le pouvoir de décision, les ressources contrôlées et les objectifs', 'is_correct' => true],
                            ['choice_text' => 'Attribuer tous les coûts au manager', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement le bénéfice net de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les facteurs externes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Planification stratégique et décisions de capacité',
                'description' => 'Analysez les arbitrages de capacité, d’investissement et de ressources rares.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une entreprise doit-elle comparer la contribution par unité de ressource rare plutôt que simplement la marge unitaire ?', 'is_correct' => true,
                        'explanation' => 'Une ressource contrainte doit être affectée aux produits qui génèrent le plus de contribution par unité de cette ressource.',
                        'choices' => [
                            ['choice_text' => 'Parce que la ressource contrainte doit être utilisée là où elle produit la contribution la plus élevée', 'is_correct' => true],
                            ['choice_text' => 'Parce que la marge unitaire est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ressources rares sont gratuites', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les produits utilisent exactement la même quantité de ressources', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un produit A génère 40 € de contribution et utilise 5 heures de machine. Un produit B génère 30 € et utilise 2 heures. Quel produit doit être favorisé sous contrainte de machine ?', 'is_correct' => true,
                        'explanation' => 'A génère 8 € par heure machine et B 15 € par heure machine.',
                        'choices' => [
                            ['choice_text' => 'Le produit B', 'is_correct' => true],
                            ['choice_text' => 'Le produit A', 'is_correct' => false],
                            ['choice_text' => 'Les deux de manière identique', 'is_correct' => false],
                            ['choice_text' => 'Aucun des deux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une augmentation de capacité peut-elle améliorer le résultat même si les coûts fixes augmentent ?', 'is_correct' => true,
                        'explanation' => 'La capacité supplémentaire peut permettre de vendre davantage de produits générant une contribution supérieure aux coûts fixes additionnels.',
                        'choices' => [
                            ['choice_text' => 'Parce que la contribution supplémentaire peut dépasser les coûts fixes additionnels', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute augmentation de capacité réduit automatiquement les coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes supplémentaires sont sans effet', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes supplémentaires sont toujours garanties', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investissement de capacité doit-il être évalué avec plusieurs scénarios de demande ?', 'is_correct' => true,
                        'explanation' => 'Une capacité supplémentaire devient risquée si la demande prévue ne se matérialise pas.',
                        'choices' => [
                            ['choice_text' => 'Pour tester la rentabilité et le risque lorsque la demande réelle diffère des prévisions', 'is_correct' => true],
                            ['choice_text' => 'Parce que la demande future est toujours certaine', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir l’utilisation maximale de la capacité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes n’ont jamais d’importance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une capacité excédentaire peut-elle avoir un coût économique même si elle ne génère pas de décaissement supplémentaire immédiat ?', 
                        'explanation' => 'Le capital immobilisé dans une capacité inutilisée représente une ressource qui pourrait être employée ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle mobilise du capital et des ressources qui pourraient avoir un autre usage', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une capacité inutilisée crée toujours une dette', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle augmente directement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle réduit toujours les coûts variables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle accepter un projet à marge faible s’il utilise une capacité qui serait autrement inutilisée ?', 'is_correct' => true,
                        'explanation' => 'La contribution peut aider à couvrir des coûts existants sans déplacer une activité plus rentable.',
                        'choices' => [
                            ['choice_text' => 'Parce que la capacité inutilisée peut permettre de générer une contribution supplémentaire sans évincer une activité plus rentable', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une marge faible est toujours préférable', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes deviennent nuls', 'is_correct' => false],
                            ['choice_text' => 'Parce que la demande est garantie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la décision d’abandonner une activité doit-elle prendre en compte les coûts qui disparaîtraient réellement ?', 'is_correct' => true,
                        'explanation' => 'Si certains coûts restent après l’abandon, leur attribution à l’activité ne doit pas conduire à une conclusion erronée.',
                        'choices' => [
                            ['choice_text' => 'Parce que seuls les coûts réellement évitables influencent directement l’économie de la décision', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les coûts comptables disparaissent automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts fixes sont toujours évitables', 'is_correct' => false],
                            ['choice_text' => 'Parce que les activités abandonnées n’ont plus aucun effet financier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contraintes de ressources doivent-elles être intégrées à la planification stratégique ?', 'is_correct' => true,
                        'explanation' => 'Les décisions doivent tenir compte de la capacité disponible en capital, personnel, machines ou compétences.',
                        'choices' => [
                            ['choice_text' => 'Parce que les ressources limitées imposent des choix entre plusieurs investissements ou activités', 'is_correct' => true],
                            ['choice_text' => 'Parce que les ressources sont toujours illimitées', 'is_correct' => false],
                            ['choice_text' => 'Parce que la stratégie ne dépend jamais de la capacité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements n’utilisent jamais de ressources', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la planification par scénarios est-elle utile pour une décision de capacité importante ?', 'is_correct' => true,
                        'explanation' => 'Elle permet d’identifier les conditions sous lesquelles la décision reste rentable ou devient risquée.',
                        'choices' => [
                            ['choice_text' => 'Elle montre comment la décision se comporte sous différentes hypothèses de demande et de coûts', 'is_correct' => true],
                            ['choice_text' => 'Elle élimine l’incertitude', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit le scénario optimiste', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toute analyse financière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider une décision stratégique de capacité ?', 
                        'explanation' => 'La décision doit intégrer contribution, coûts additionnels, ressources rares, risque et scénarios.',
                        'choices' => [
                            ['choice_text' => 'Évaluer contribution, coûts incrémentaux, capacité, risque et scénarios de demande', 'is_correct' => true],
                            ['choice_text' => 'Choisir toujours la capacité maximale', 'is_correct' => false],
                            ['choice_text' => 'Choisir uniquement selon le coût fixe', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les contraintes de ressources', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité de gestion — Performance, stratégie et comportement managérial',
                'description' => 'Analysez les effets des systèmes de contrôle de gestion sur les comportements et les décisions.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un indicateur mal conçu peut-il provoquer un comportement contre-productif ?', 'is_correct' => true,
                        'explanation' => 'Les managers peuvent optimiser l’indicateur au détriment d’objectifs plus importants.',
                        'choices' => [
                            ['choice_text' => 'Parce que les responsables peuvent chercher à optimiser la mesure plutôt que la performance globale', 'is_correct' => true],
                            ['choice_text' => 'Parce que les indicateurs ne servent jamais à motiver', 'is_correct' => false],
                            ['choice_text' => 'Parce que les managers ignorent toujours les objectifs', 'is_correct' => false],
                            ['choice_text' => 'Parce que les indicateurs financiers sont toujours inutiles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un système de bonus basé uniquement sur la réduction des coûts peut-il être dangereux ?', 'is_correct' => true,
                        'explanation' => 'Il peut encourager des économies qui dégradent la qualité, l’innovation ou la satisfaction client.',
                        'choices' => [
                            ['choice_text' => 'Il peut encourager des réductions de coûts nuisibles à la qualité ou à la performance future', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute réduction de coûts est négative', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts ne doivent jamais être mesurés', 'is_correct' => false],
                            ['choice_text' => 'Parce que les managers ne peuvent pas influencer les coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les objectifs de performance doivent-ils être équilibrés entre court et long terme ?', 'is_correct' => true,
                        'explanation' => 'Une pression excessive sur le court terme peut conduire à sacrifier les investissements et la durabilité.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter que des gains immédiats ne soient obtenus au détriment de la performance future', 'is_correct' => true],
                            ['choice_text' => 'Parce que le court terme n’a jamais d’importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements ne doivent jamais être suivis', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bénéfices futurs sont toujours garantis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’alignement des indicateurs avec la stratégie est-il important pour éviter les comportements opportunistes ?', 'is_correct' => true,
                        'explanation' => 'Des indicateurs alignés réduisent l’incitation à optimiser une dimension au détriment des objectifs globaux.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il réduit les incitations à optimiser un indicateur au détriment des objectifs globaux', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les managers ont exactement les mêmes objectifs', 'is_correct' => false],
                            ['choice_text' => 'Parce que les indicateurs doivent toujours être financiers', 'is_correct' => false],
                            ['choice_text' => 'Parce que la stratégie n’a aucun rapport avec la performance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les indicateurs qualitatifs peuvent-ils être particulièrement importants dans les activités de service ?', 'is_correct' => true,
                        'explanation' => 'La qualité perçue, les délais et la satisfaction peuvent déterminer la fidélité et les revenus futurs.',
                        'choices' => [
                            ['choice_text' => 'Parce que la satisfaction, la qualité et les délais influencent directement la valeur future du service', 'is_correct' => true],
                            ['choice_text' => 'Parce que les chiffres financiers n’existent pas dans les services', 'is_correct' => false],
                            ['choice_text' => 'Parce que les services ne génèrent jamais de coûts', 'is_correct' => false],
                            ['choice_text' => 'Parce que la qualité n’est jamais mesurable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un manager peut-il volontairement retarder une dépense utile dans un système de bonus mal conçu ?', 'is_correct' => true,
                        'explanation' => 'S’il est évalué uniquement sur la réduction des coûts à court terme, il peut différer des dépenses créatrices de valeur.',
                        'choices' => [
                            ['choice_text' => 'Pour améliorer artificiellement sa performance immédiate au détriment de l’intérêt futur', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une dépense utile est toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements n’ont jamais d’effet sur la performance', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts futurs n’existent pas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les indicateurs de productivité doivent-ils être combinés avec des indicateurs de qualité ?', 'is_correct' => true,
                        'explanation' => 'Une productivité élevée obtenue par une dégradation de la qualité peut détruire de la valeur.',
                        'choices' => [
                            ['choice_text' => 'Pour éviter qu’une amélioration de productivité ne soit obtenue au prix d’une dégradation de la qualité', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute amélioration de productivité', 'is_correct' => false],
                            ['choice_text' => 'Parce que la qualité est toujours fixe', 'is_correct' => false],
                            ['choice_text' => 'Parce que les coûts ne sont pas liés à la productivité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un bon tableau de bord doit-il limiter les indicateurs réellement prioritaires ?', 'is_correct' => true,
                        'explanation' => 'Trop d’indicateurs peuvent diluer l’attention et rendre les priorités moins visibles.',
                        'choices' => [
                            ['choice_text' => 'Pour concentrer l’attention sur les mesures réellement utiles à la décision', 'is_correct' => true],
                            ['choice_text' => 'Parce que plus d’indicateurs sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les informations financières', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute mesure qualitative', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la performance d’un manager doit-elle être évaluée dans le contexte de son niveau d’autonomie ?', 'is_correct' => true,
                        'explanation' => 'Un manager ne peut être tenu pleinement responsable que des décisions et ressources qu’il contrôle réellement.',
                        'choices' => [
                            ['choice_text' => 'Parce que son pouvoir de décision détermine les résultats qu’il peut réellement influencer', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les managers ont exactement la même autonomie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les indicateurs doivent être identiques pour tous', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’autonomie ne concerne jamais les coûts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume un système de contrôle de gestion performant ?', 
                        'explanation' => 'Il doit orienter les comportements vers les objectifs globaux tout en fournissant une information utile et équilibrée.',
                        'choices' => [
                            ['choice_text' => 'Aligner stratégie, indicateurs, responsabilités et comportements autour de la performance globale', 'is_correct' => true],
                            ['choice_text' => 'Maximiser uniquement les économies immédiates', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement des indicateurs financiers', 'is_correct' => false],
                            ['choice_text' => 'Attribuer tous les résultats aux managers', 'is_correct' => false],
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
                    'duration' => 28,
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