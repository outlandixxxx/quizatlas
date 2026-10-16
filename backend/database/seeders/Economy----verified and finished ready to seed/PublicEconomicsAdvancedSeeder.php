```php
<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PublicEconomicsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'public-economics')->firstOrFail();

        $quizzes = [

            // =========================================================
            // QUIZ 1 — Efficacité, bien-être et équilibre
            // =========================================================
            [
                'title' => 'Efficacité économique et allocation des ressources',
                'description' => 'Analyse avancée de l’efficacité allocative, des améliorations de Pareto et des conditions nécessaires à une allocation socialement souhaitable.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Dans une économie sans externalités ni asymétries d’information, sous quelles conditions un équilibre concurrentiel peut-il être efficace au sens de Pareto ?',
                        'choices' => [
                            ['choice_text' => 'Lorsque les marchés sont complets et que les conditions usuelles de concurrence et d’information sont satisfaites', 'is_correct' => true],
                            ['choice_text' => 'Uniquement lorsque l’État fixe directement tous les prix', 'is_correct' => false],
                            ['choice_text' => 'Uniquement lorsque toutes les dépenses publiques sont nulles', 'is_correct' => false],
                            ['choice_text' => 'Lorsque toutes les entreprises ont le même coût marginal', 'is_correct' => false],
                        ],
                        'explanation' => 'Les résultats fondamentaux du bien-être reposent sur des hypothèses restrictives, notamment l’absence de certaines défaillances du marché, des marchés suffisamment complets et une concurrence appropriée.',
                    ],
                    [
                        'question' => 'Une allocation est Pareto-efficace. Quelle affirmation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Il n’existe aucune réallocation réalisable permettant d’améliorer la situation d’au moins une personne sans détériorer celle des autres', 'is_correct' => true],
                            ['choice_text' => 'La répartition des revenus est nécessairement égalitaire', 'is_correct' => false],
                            ['choice_text' => 'Le gouvernement ne peut plus modifier aucune politique', 'is_correct' => false],
                            ['choice_text' => 'Toutes les personnes disposent nécessairement du même niveau de bien-être', 'is_correct' => false],
                        ],
                        'explanation' => 'L’efficacité de Pareto concerne l’impossibilité d’une amélioration mutuellement favorable ; elle ne garantit pas une répartition égalitaire.',
                    ],
                    [
                        'question' => 'Pourquoi une allocation peut-elle être Pareto-efficace tout en étant considérée comme socialement inacceptable ?',
                        'choices' => [
                            ['choice_text' => 'L’efficacité de Pareto ne fournit pas à elle seule un critère de justice distributive', 'is_correct' => true],
                            ['choice_text' => 'Une allocation Pareto-efficace détruit nécessairement le surplus', 'is_correct' => false],
                            ['choice_text' => 'Pareto impose toujours une égalité parfaite des revenus', 'is_correct' => false],
                            ['choice_text' => 'Pareto ne concerne que les entreprises publiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Plusieurs allocations peuvent être Pareto-efficaces avec des répartitions très différentes des ressources entre individus.',
                    ],
                    [
                        'question' => 'Une taxe corrective réduit une externalité négative mais crée une perte sèche sur le marché concerné. Comment évaluer correctement la politique ?',
                        'choices' => [
                            ['choice_text' => 'Comparer la perte sur le marché avec le gain social résultant de la réduction de l’externalité', 'is_correct' => true],
                            ['choice_text' => 'Conclure automatiquement que toute perte sèche rend la taxe inefficace', 'is_correct' => false],
                            ['choice_text' => 'Ignorer le dommage externe puisqu’il n’apparaît pas dans le prix initial', 'is_correct' => false],
                            ['choice_text' => 'Comparer uniquement les recettes fiscales encaissées', 'is_correct' => false],
                        ],
                        'explanation' => 'Une taxe corrective peut créer une perte privée tout en augmentant le bien-être total en réduisant un dommage externe ; le bilan doit intégrer les deux effets.',
                    ],
                    [
                        'question' => 'Dans un modèle simple de concurrence parfaite avec une externalité négative de production, quelle condition caractérise l’optimum social ?',
                        'choices' => [
                            ['choice_text' => Le bénéfice marginal doit être égal au coût social marginal, incluant le coût externe', 'is_correct' => true],
                            ['choice_text' => 'Le bénéfice marginal doit être égal au seul coût privé marginal', 'is_correct' => false],
                            ['choice_text' => 'Le coût privé doit être nul', 'is_correct' => false],
                            ['choice_text' => 'Le prix doit être égal au coût fixe total', 'is_correct' => false],
                        ],
                        'explanation' => 'L’optimum social intègre le coût externe : le critère pertinent est l’égalité entre bénéfice marginal et coût social marginal.',
                    ],
                    [
                        'question' => 'Une politique publique augmente le surplus de certains ménages mais réduit celui d’autres ménages. Pourquoi le critère de Pareto ne suffit-il pas à décider ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la comparaison nécessite alors un jugement sur les effets distributifs ou un critère social supplémentaire', 'is_correct' => true],
                            ['choice_text' => 'Parce que le surplus n’a aucune utilité analytique', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une politique redistributive est toujours inefficace', 'is_correct' => false],
                            ['choice_text' => 'Parce que les transferts publics sont toujours neutres', 'is_correct' => false],
                        ],
                        'explanation' => 'Dès qu’une politique crée des gagnants et des perdants, l’efficacité de Pareto ne permet pas à elle seule de classer les situations.',
                    ],
                    [
                        'question' => 'Pourquoi l’analyse coût-bénéfice peut-elle compléter le critère de Pareto ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de comparer des gains et des pertes lorsque presque toute politique importante crée des effets distributifs', 'is_correct' => true],
                            ['choice_text' => 'Elle impose une égalité parfaite des revenus', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine toute incertitude sur les bénéfices futurs', 'is_correct' => false],
                            ['choice_text' => 'Elle interdit l’utilisation de prix fictifs', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse coût-bénéfice fournit un cadre pour comparer les gains et les coûts sociaux, même lorsque les effets ne sont pas unanimement favorables.',
                    ],
                    [
                        'question' => 'Pourquoi le principe du second best est-il pertinent en économie publique ?',
                        'choices' => [
                            ['choice_text' => 'Lorsque plusieurs conditions d’optimalité ne peuvent pas être satisfaites simultanément, corriger une seule distorsion peut ne pas améliorer le bien-être global', 'is_correct' => true],
                            ['choice_text' => 'Il signifie qu’il faut toujours choisir la deuxième meilleure politique', 'is_correct' => false],
                            ['choice_text' => 'Il s’applique uniquement aux budgets publics', 'is_correct' => false],
                            ['choice_text' => 'Il suppose qu’il n’existe aucune autre distorsion', 'is_correct' => false],
                        ],
                        'explanation' => 'La théorie du second best montre que la correction isolée d’une distorsion peut être insuffisante ou contre-productive lorsque d’autres distorsions restent présentes.',
                    ],
                    [
                        'question' => 'Une économie présente simultanément une externalité et un pouvoir de marché. Pourquoi une intervention fondée uniquement sur une taxe corrective calculée à partir de l’externalité peut-elle être imparfaite ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le prix de marché reflète déjà une autre distorsion et que les deux marges de correction doivent être considérées ensemble', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une externalité ne peut jamais être taxée', 'is_correct' => false],
                            ['choice_text' => 'Parce que le pouvoir de marché élimine toujours les externalités', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une taxe ne modifie jamais les quantités', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque plusieurs défaillances coexistent, les politiques doivent être conçues en tenant compte des interactions entre les distorsions.',
                    ],
                    [
                        'question' => 'Quelle difficulté fondamentale apparaît lorsqu’on cherche à maximiser le bien-être social à partir des utilités individuelles ?',
                        'choices' => [
                            ['choice_text' => 'Il faut définir comment agréger et pondérer les intérêts des différents individus', 'is_correct' => true],
                            ['choice_text' => 'Les préférences individuelles sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Les prix de marché suffisent toujours à définir la fonction de bien-être social', 'is_correct' => false],
                            ['choice_text' => 'Les transferts n’affectent jamais le bien-être', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction de bien-être social nécessite des hypothèses normatives sur la manière de comparer et de pondérer les situations des différents individus.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 2 — Externalités et instruments correctifs
            // =========================================================
            [
                'title' => 'Externalités et instruments correctifs',
                'description' => 'Analyse approfondie des externalités, des taxes correctives, des subventions et des solutions institutionnelles.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Une taxe pigouvienne est correctement calibrée lorsque son montant marginal correspond idéalement à :',
                        'choices' => [
                            ['choice_text' => 'Le dommage externe marginal au niveau socialement pertinent de l’activité', 'is_correct' => true],
                            ['choice_text' => 'La totalité du coût fixe de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'La recette moyenne de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le montant total de la production nationale', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le cadre standard, la taxe corrective vise à faire internaliser le dommage externe marginal au niveau approprié de l’activité.',
                    ],
                    [
                        'question' => 'Pourquoi une taxe pigouvienne peut-elle être difficile à calibrer en pratique ?',
                        'choices' => [
                            ['choice_text' => 'Le dommage externe marginal est souvent difficile à mesurer précisément', 'is_correct' => true],
                            ['choice_text' => 'Les taxes ne peuvent jamais modifier les comportements', 'is_correct' => false],
                            ['choice_text' => 'Les producteurs connaissent toujours parfaitement toutes les externalités', 'is_correct' => false],
                            ['choice_text' => 'Le coût externe est toujours identique pour tous les niveaux de production', 'is_correct' => false],
                        ],
                        'explanation' => 'La mesure des dommages environnementaux, sanitaires ou sociaux peut être incertaine et dépendre fortement du niveau d’activité.',
                    ],
                    [
                        'question' => 'Une norme quantitative impose directement une limite d’émission. Par rapport à une taxe pigouvienne, quel élément caractérise principalement la norme ?',
                        'choices' => [
                            ['choice_text' => 'Elle fixe directement une contrainte sur le niveau ou la quantité de pollution', 'is_correct' => true],
                            ['choice_text' => 'Elle permet toujours d’atteindre le même coût de réduction pour toutes les entreprises', 'is_correct' => false],
                            ['choice_text' => 'Elle produit nécessairement des recettes publiques', 'is_correct' => false],
                            ['choice_text' => 'Elle ne nécessite aucun contrôle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une norme fixe directement une limite tandis qu’une taxe agit principalement par les incitations de prix.',
                    ],
                    [
                        'question' => 'Deux entreprises ont des coûts de dépollution très différents. Quel instrument peut atteindre une quantité globale de dépollution à moindre coût lorsque les conditions sont favorables ?',
                        'choices' => [
                            ['choice_text' => 'Un système de permis échangeables', 'is_correct' => true],
                            ['choice_text' => 'Une obligation identique de réduction pour chaque entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une interdiction uniforme de toute production', 'is_correct' => false],
                            ['choice_text' => 'Une subvention indépendante du niveau de dépollution', 'is_correct' => false],
                        ],
                        'explanation' => 'Les permis échangeables permettent aux réductions de pollution de se concentrer davantage là où elles coûtent le moins, sous des hypothèses appropriées.',
                    ],
                    [
                        'question' => 'Pourquoi l’échange de permis peut-il réduire le coût total de conformité ?',
                        'choices' => [
                            ['choice_text' => 'Les entreprises ayant un coût marginal de réduction plus faible peuvent effectuer davantage de réductions', 'is_correct' => true],
                            ['choice_text' => 'Toutes les entreprises doivent réduire exactement la même quantité', 'is_correct' => false],
                            ['choice_text' => 'Les permis éliminent automatiquement toutes les externalités', 'is_correct' => false],
                            ['choice_text' => 'Le prix des permis est nécessairement nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Les échanges réallouent les efforts de réduction vers les entreprises ayant les coûts marginaux de dépollution les plus faibles.',
                    ],
                    [
                        'question' => 'Dans quel cas une subvention à la dépollution peut-elle être moins attractive qu’une taxe sur les émissions ?',
                        'choices' => [
                            ['choice_text' => 'Lorsqu’elle encourage aussi l’entrée ou l’expansion de producteurs polluants en réduisant leur coût de production', 'is_correct' => true],
                            ['choice_text' => 'Lorsqu’elle modifie les incitations à réduire les émissions', 'is_correct' => false],
                            ['choice_text' => 'Lorsqu’elle est financée par le budget public', 'is_correct' => false],
                            ['choice_text' => 'Lorsqu’elle possède un montant positif', 'is_correct' => false],
                        ],
                        'explanation' => 'Une subvention par unité de dépollution peut inciter à réduire les émissions mais peut également rendre la production plus attractive, avec des effets secondaires sur le niveau d’activité.',
                    ],
                    [
                        'question' => 'Une externalité est géographiquement concentrée et les victimes ainsi que les producteurs sont peu nombreux. Quelle solution privée peut devenir plus réaliste ?',
                        'choices' => [
                            ['choice_text' => La négociation directe entre les parties, si les droits sont bien définis et les coûts de transaction faibles', 'is_correct' => true],
                            ['choice_text' => 'Une interdiction nationale systématique', 'is_correct' => false],
                            ['choice_text' => 'Une taxe identique imposée à tous les secteurs', 'is_correct' => false],
                            ['choice_text' => 'Une politique monétaire restrictive', 'is_correct' => false],
                        ],
                        'explanation' => 'La négociation privée peut être efficace dans des situations de faible nombre de parties et de faibles coûts de transaction, conformément à l’intuition du théorème de Coase.',
                    ],
                    [
                        'question' => 'Pourquoi le résultat d’une négociation privée sur une externalité peut-il dépendre de l’attribution initiale des droits ?',
                        'choices' => [
                            ['choice_text' => 'L’allocation finale peut rester efficace tandis que la répartition des gains de la négociation change', 'is_correct' => true],
                            ['choice_text' => 'Les droits n’ont aucun effet sur les transferts possibles', 'is_correct' => false],
                            ['choice_text' => 'Les droits déterminent toujours l’efficacité sans exception', 'is_correct' => false],
                            ['choice_text' => 'Une externalité n’est jamais négociable', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec des coûts de transaction suffisamment faibles, la négociation peut conduire à une allocation efficace, mais le partage des gains dépend des droits initiaux.',
                    ],
                    [
                        'question' => 'Une entreprise réduit ses émissions jusqu’à ce que son coût marginal de dépollution soit égal à la taxe environnementale. Pourquoi cette condition est-elle importante ?',
                        'choices' => [
                            ['choice_text' => Elle caractérise le choix de dépollution qui minimise le coût privé étant donné le signal de prix fourni par la taxe', 'is_correct' => true],
                            ['choice_text' => 'Elle implique que l’entreprise maximise nécessairement le profit sans aucune contrainte', 'is_correct' => false],
                            ['choice_text' => 'Elle signifie que le dommage externe est nul', 'is_correct' => false],
                            ['choice_text' => 'Elle impose la même technologie à toutes les entreprises', 'is_correct' => false],
                        ],
                        'explanation' => 'Une taxe sur les émissions crée un coût marginal de pollution qui incite l’entreprise à dépolluer jusqu’à égalisation de son coût marginal de réduction avec le signal fiscal, selon le modèle standard.',
                    ],
                    [
                        'question' => 'Une politique climatique fixe simultanément un prix du carbone et une limite stricte sur les émissions. Quel risque conceptuel doit être examiné ?',
                        'choices' => [
                            ['choice_text' => Le risque de superposer des instruments poursuivant la même marge de correction sans tenir compte de leurs interactions', 'is_correct' => true],
                            ['choice_text' => 'Le fait qu’un prix ne puisse jamais influencer la quantité', 'is_correct' => false],
                            ['choice_text' => 'L’impossibilité totale de mesurer les émissions', 'is_correct' => false],
                            ['choice_text' => 'L’absence automatique de tout effet distributif', 'is_correct' => false],
                        ],
                        'explanation' => 'Plusieurs instruments peuvent être complémentaires, mais leur combinaison doit être analysée pour éviter des coûts inutiles ou des interactions indésirables.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 3 — Biens publics et révélation des préférences
            // =========================================================
            [
                'title' => 'Biens publics et révélation des préférences',
                'description' => 'Analyse avancée de la fourniture des biens publics, du free-riding et des mécanismes de révélation des préférences.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Pour un bien public pur, quelle condition caractérise de manière simplifiée l’optimum de Samuelson ?',
                        'choices' => [
                            ['choice_text' => 'La somme des dispositions marginales à payer individuelles doit égaler le coût marginal de fourniture', 'is_correct' => true],
                            ['choice_text' => 'La disposition à payer du consommateur médian doit égaler le coût total', 'is_correct' => false],
                            ['choice_text' => 'Le coût marginal doit être nul', 'is_correct' => false],
                            ['choice_text' => 'Chaque individu doit payer exactement le coût marginal du bien', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un bien public, les quantités sont consommées conjointement ; les bénéfices marginaux individuels sont donc additionnés verticalement et comparés au coût marginal.',
                    ],
                    [
                        'question' => 'Pourquoi additionne-t-on verticalement les demandes individuelles d’un bien public ?',
                        'choices' => [
                            ['choice_text' => Tous les individus bénéficient de la même quantité du bien public, de sorte que leurs dispositions marginales à payer s’additionnent pour cette quantité', 'is_correct' => true],
                            ['choice_text' => 'Parce que chaque individu consomme une quantité différente', 'is_correct' => false],
                            ['choice_text' => 'Parce que les préférences sont parfaitement identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les biens publics sont toujours gratuits', 'is_correct' => false],
                        ],
                        'explanation' => 'Contrairement à un bien privé, une même unité de bien public peut bénéficier simultanément à plusieurs personnes.',
                    ],
                    [
                        'question' => 'Pourquoi le problème du free-riding complique-t-il la révélation de la disposition à payer ?',
                        'choices' => [
                            ['choice_text' => 'Un individu peut avoir intérêt à sous-déclarer son bénéfice en espérant que les autres financent le bien', 'is_correct' => true],
                            ['choice_text' => 'La disposition à payer est toujours observable directement', 'is_correct' => false],
                            ['choice_text' => 'Le bien public devient automatiquement rival', 'is_correct' => false],
                            ['choice_text' => 'Les individus ne disposent d’aucune préférence pour les biens publics', 'is_correct' => false],
                        ],
                        'explanation' => 'Le comportement stratégique peut rendre difficile l’obtention d’informations sincères sur les bénéfices individuels.',
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un mécanisme de Vickrey-Clarke-Groves dans une version adaptée aux biens publics ?',
                        'choices' => [
                            ['choice_text' => Créer des incitations à révéler les préférences de manière plus sincère sous les hypothèses du mécanisme', 'is_correct' => true],
                            ['choice_text' => 'Garantir un déficit public nul', 'is_correct' => false],
                            ['choice_text' => 'Éliminer tous les coûts de production', 'is_correct' => false],
                            ['choice_text' => 'Rendre les biens publics automatiquement privés', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mécanismes VCG cherchent à aligner l’incitation individuelle avec la révélation de préférences, même si leur application aux biens publics comporte des contraintes importantes.',
                    ],
                    [
                        'question' => 'Une municipalité sous-finance systématiquement un service collectif parce que les habitants déclarent une disposition à payer très faible. Quelle interprétation est plausible ?',
                        'choices' => [
                            ['choice_text' => Les déclarations observées peuvent être stratégiques et ne pas refléter le véritable bénéfice social', 'is_correct' => true],
                            ['choice_text' => 'Un prix faible garantit toujours une faible valeur sociale', 'is_correct' => false],
                            ['choice_text' => 'Les habitants n’utilisent jamais les services publics', 'is_correct' => false],
                            ['choice_text' => 'La municipalité a nécessairement surestimé les coûts', 'is_correct' => false],
                        ],
                        'explanation' => 'Le free-riding peut pousser les individus à minimiser stratégiquement leur disposition à payer.',
                    ],
                    [
                        'question' => 'Quelle caractéristique distingue principalement un bien public pur d’une ressource commune ?',
                        'choices' => [
                            ['choice_text' => Le bien public pur est non rival et non excluable, tandis qu’une ressource commune est généralement rivale et difficilement excluable', 'is_correct' => true],
                            ['choice_text' => 'Les deux sont toujours parfaitement excluables', 'is_correct' => false],
                            ['choice_text' => 'Une ressource commune est toujours non rivale', 'is_correct' => false],
                            ['choice_text' => 'Un bien public pur est nécessairement vendu sur un marché privé', 'is_correct' => false],
                        ],
                        'explanation' => 'La rivalité constitue la différence essentielle : l’usage d’une ressource commune par une personne réduit généralement ce qui reste pour les autres.',
                    ],
                    [
                        'question' => 'Pourquoi une ressource commune peut-elle être surexploitée ?',
                        'choices' => [
                            ['choice_text' => Chaque utilisateur peut ne pas supporter l’intégralité du coût de la réduction du stock disponible pour les autres', 'is_correct' => true],
                            ['choice_text' => 'La ressource est toujours non rivale', 'is_correct' => false],
                            ['choice_text' => 'Le coût privé est toujours supérieur au coût social', 'is_correct' => false],
                            ['choice_text' => 'L’usage individuel augmente toujours la quantité restante', 'is_correct' => false],
                        ],
                        'explanation' => 'La difficulté d’exclusion et la rivalité peuvent conduire à une internalisation insuffisante du coût imposé aux autres utilisateurs.',
                    ],
                    [
                        'question' => 'Un parc public est accessible gratuitement mais devient extrêmement congestionné aux heures de pointe. Quel changement économique apparaît ?',
                        'choices' => [
                            ['choice_text' => Le caractère rival du service augmente avec la congestion', 'is_correct' => true],
                            ['choice_text' => 'Le parc devient automatiquement non rival', 'is_correct' => false],
                            ['choice_text' => 'La congestion élimine la valeur du bien', 'is_correct' => false],
                            ['choice_text' => 'Le coût d’opportunité de l’usage devient nul', 'is_correct' => false],
                        ],
                        'explanation' => 'La congestion signifie que l’usage supplémentaire dégrade le bénéfice reçu par les autres, ce qui renforce la rivalité.',
                    ],
                    [
                        'question' => 'Quel instrument peut contribuer à gérer une ressource commune congestionnée lorsque l’exclusion technique est possible ?',
                        'choices' => [
                            ['choice_text' => Un péage ou une tarification de l’usage', 'is_correct' => true],
                            ['choice_text' => 'Une subvention à toute utilisation supplémentaire', 'is_correct' => false],
                            ['choice_text' => 'Une suppression totale des droits de propriété', 'is_correct' => false],
                            ['choice_text' => 'Une baisse automatique des coûts marginaux', 'is_correct' => false],
                        ],
                        'explanation' => 'La tarification peut internaliser une partie du coût de congestion et réduire la demande excessive lorsque l’accès est contrôlable.',
                    ],
                    [
                        'question' => 'Pourquoi la fourniture publique d’un bien public ne garantit-elle pas automatiquement l’efficience ?',
                        'choices' => [
                            ['choice_text' => 'L’État peut lui-même disposer d’informations imparfaites, faire face à des coûts administratifs ou choisir une quantité inappropriée', 'is_correct' => true],
                            ['choice_text' => 'Les biens publics n’ont jamais de coût', 'is_correct' => false],
                            ['choice_text' => 'L’État connaît nécessairement les préférences exactes de chaque citoyen', 'is_correct' => false],
                            ['choice_text' => 'Une décision publique est toujours Pareto-optimale', 'is_correct' => false],
                        ],
                        'explanation' => 'La défaillance du marché ne signifie pas que toute intervention publique est automatiquement optimale ; il existe aussi des contraintes d’information et de gouvernance.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 4 — Fiscalité optimale et incidence
            // =========================================================
            [
                'title' => 'Fiscalité optimale et incidence des impôts',
                'description' => 'Analyse avancée de l’incidence fiscale, des élasticités, des distorsions et des compromis entre rendement et équité.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Pourquoi l’incidence légale d’un impôt ne détermine-t-elle pas nécessairement son incidence économique ?',
                        'choices' => [
                            ['choice_text' => Les prix et quantités s’ajustent selon les élasticités de l’offre et de la demande', 'is_correct' => true],
                            ['choice_text' => 'Les entreprises ignorent toujours les taxes', 'is_correct' => false],
                            ['choice_text' => 'Les consommateurs ne réagissent jamais aux prix', 'is_correct' => false],
                            ['choice_text' => 'Une taxe légale est toujours répartie à parts égales', 'is_correct' => false],
                        ],
                        'explanation' => 'La répartition économique de la charge dépend des réactions des acheteurs et vendeurs, et non uniquement de l’agent légalement chargé de verser l’impôt.',
                    ],
                    [
                        'question' => 'Dans une analyse de taxation optimale, pourquoi les élasticités de la demande sont-elles importantes ?',
                        'choices' => [
                            ['choice_text' => Les biens dont la demande réagit peu au prix peuvent générer des recettes avec une distorsion comportementale relativement plus faible', 'is_correct' => true],
                            ['choice_text' => 'L’élasticité n’a aucun rapport avec la perte sèche', 'is_correct' => false],
                            ['choice_text' => 'Les biens parfaitement élastiques doivent toujours être taxés au taux maximal', 'is_correct' => false],
                            ['choice_text' => 'Une faible élasticité implique toujours une baisse des recettes', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le raisonnement classique de Ramsey, l’élasticité de la demande joue un rôle dans le choix des taux fiscaux afin de limiter les distorsions pour un objectif de recettes donné.',
                    ],
                    [
                        'question' => 'Pourquoi une taxe uniforme sur tous les biens n’est-elle pas nécessairement optimale dans un modèle avec distorsions comportementales ?',
                        'choices' => [
                            ['choice_text' => Parce que les biens peuvent avoir des élasticités différentes et donc générer des pertes sèches différentes pour une même variation fiscale', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les taxes ont exactement le même effet', 'is_correct' => false],
                            ['choice_text' => 'Parce que les consommateurs n’ont jamais de préférences', 'is_correct' => false],
                            ['choice_text' => 'Parce que les biens ne peuvent jamais être taxés différemment', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les comportements réagissent différemment aux prix, la charge fiscale peut produire des distorsions différentes selon les marchés.',
                    ],
                    [
                        'question' => 'Une taxe sur le revenu du travail crée un écart entre salaire brut et salaire net. Quelle décision peut-elle influencer ?',
                        'choices' => [
                            ['choice_text' => L’arbitrage entre travail et loisir', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le volume d’exportations', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le niveau des réserves de change', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la consommation des entreprises', 'is_correct' => false],
                        ],
                        'explanation' => 'Le salaire net modifie le coût d’opportunité du loisir et le rendement du travail, ce qui peut affecter l’offre de travail.',
                    ],
                    [
                        'question' => 'Pourquoi un impôt sur le capital peut-il produire plusieurs distorsions différentes ?',
                        'choices' => [
                            ['choice_text' => Il peut influencer l’épargne, l’investissement, le financement et parfois la localisation des capitaux', 'is_correct' => true],
                            ['choice_text' => 'Il ne peut affecter qu’une seule décision', 'is_correct' => false],
                            ['choice_text' => 'Il réduit nécessairement uniquement la consommation courante', 'is_correct' => false],
                            ['choice_text' => 'Le capital est toujours parfaitement immobile', 'is_correct' => false],
                        ],
                        'explanation' => 'La fiscalité du capital peut affecter plusieurs marges de décision, ce qui complique l’évaluation de son coût économique.',
                    ],
                    [
                        'question' => 'Quel problème peut apparaître avec un taux marginal d’imposition très élevé sur une dernière tranche de revenu ?',
                        'choices' => [
                            ['choice_text' => Un effet de désincitation sur certaines marges de travail, d’activité ou de déclaration du revenu', 'is_correct' => true],
                            ['choice_text' => 'Une garantie de hausse des recettes fiscales', 'is_correct' => false],
                            ['choice_text' => 'Une disparition automatique des inégalités', 'is_correct' => false],
                            ['choice_text' => 'Une baisse certaine du revenu avant impôt', 'is_correct' => false],
                        ],
                        'explanation' => 'Un taux marginal élevé peut modifier les comportements sur plusieurs marges, ce qui affecte le revenu déclaré et l’offre d’activité.',
                    ],
                    [
                        'question' => 'Quel est l’objectif central de la règle de Ramsey dans sa formulation élémentaire ?',
                        'choices' => [
                            ['choice_text' => Lever un montant donné de recettes en minimisant les distorsions liées aux taxes sur les biens', 'is_correct' => true],
                            ['choice_text' => 'Maximiser l’égalité des revenus sans contrainte de rendement', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les taxes indirectes', 'is_correct' => false],
                            ['choice_text' => 'Taxer davantage les biens parfaitement élastiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La règle de Ramsey fournit un cadre classique pour déterminer une structure fiscale minimisant les distorsions sous une contrainte de recettes.',
                    ],
                    [
                        'question' => 'Pourquoi l’application pure de Ramsey peut-elle entrer en conflit avec des objectifs d’équité ?',
                        'choices' => [
                            ['choice_text' => Parce que la règle d’efficacité ne prend pas à elle seule en compte la distribution des charges entre ménages', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle impose toujours des taux négatifs', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle suppose que les préférences n’existent pas', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle concerne uniquement les dépenses militaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Les règles de fiscalité optimale doivent généralement combiner considérations d’efficacité et objectifs distributifs.',
                    ],
                    [
                        'question' => 'Une taxe augmente les recettes publiques moins que proportionnellement lorsque le taux augmente fortement. Quelle explication comportementale est possible ?',
                        'choices' => [
                            ['choice_text' => Les comportements imposables se contractent ou changent suffisamment pour réduire la base fiscale', 'is_correct' => true],
                            ['choice_text' => 'Une taxe ne peut jamais modifier une base fiscale', 'is_correct' => false],
                            ['choice_text' => 'Les recettes sont indépendantes du taux', 'is_correct' => false],
                            ['choice_text' => 'Le taux d’imposition et la base fiscale sont toujours parfaitement indépendants', 'is_correct' => false],
                        ],
                        'explanation' => 'La hausse d’un taux peut modifier l’offre de travail, la consommation, l’investissement, l’évitement ou d’autres comportements, réduisant la base taxable.',
                    ],
                    [
                        'question' => 'Pourquoi l’analyse de l’incidence fiscale doit-elle parfois considérer les marchés situés en amont et en aval ?',
                        'choices' => [
                            ['choice_text' => Une taxe peut se transmettre à travers plusieurs prix et modifier les revenus de différents agents tout au long de la chaîne économique', 'is_correct' => true],
                            ['choice_text' => 'Les taxes restent toujours sur le marché où elles sont légalement prélevées', 'is_correct' => false],
                            ['choice_text' => 'Les entreprises intermédiaires n’ont aucune réaction', 'is_correct' => false],
                            ['choice_text' => 'Les chaînes de production n’ont aucun effet sur les prix', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ajustements de prix peuvent se propager entre fournisseurs, producteurs, distributeurs et consommateurs, modifiant l’incidence finale.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 5 — Redistribution et équité
            // =========================================================
            [
                'title' => 'Redistribution, équité et efficacité',
                'description' => 'Analyse des politiques redistributives et des arbitrages entre équité, efficacité et incitations.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Pourquoi deux systèmes fiscaux ayant le même montant de recettes peuvent-ils avoir des effets très différents sur l’équité ?',
                        'choices' => [
                            ['choice_text' => 'La répartition de la charge fiscale entre les différentes catégories de ménages peut être très différente', 'is_correct' => true],
                            ['choice_text' => 'L’équité dépend uniquement du total des recettes', 'is_correct' => false],
                            ['choice_text' => 'Deux systèmes donnant les mêmes recettes sont nécessairement identiques', 'is_correct' => false],
                            ['choice_text' => 'La fiscalité n’affecte jamais la distribution des revenus', 'is_correct' => false],
                        ],
                        'explanation' => 'Le montant total des recettes ne renseigne pas sur la distribution de la charge entre ménages selon leurs revenus et caractéristiques.',
                    ],
                    [
                        'question' => 'Une politique redistributive combine un impôt progressif et un transfert ciblé. Pourquoi faut-il analyser le système dans son ensemble ?',
                        'choices' => [
                            ['choice_text' => Parce que l’effet redistributif final dépend simultanément des prélèvements et des transferts', 'is_correct' => true],
                            ['choice_text' => 'Parce que les impôts n’affectent jamais les transferts', 'is_correct' => false],
                            ['choice_text' => 'Parce que chaque instrument produit toujours le même effet', 'is_correct' => false],
                            ['choice_text' => 'Parce que les revenus avant impôt sont déterminés par l’État', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évaluation redistributive doit comparer la distribution avant et après l’ensemble des prélèvements et prestations pertinents.',
                    ],
                    [
                        'question' => 'Pourquoi le revenu avant impôt n’est-il pas toujours un bon indicateur de la situation économique finale d’un ménage ?',
                        'choices' => [
                            ['choice_text' => 'Les impôts, transferts et services publics peuvent modifier sensiblement les ressources et le niveau de vie après redistribution', 'is_correct' => true],
                            ['choice_text' => 'Le revenu avant impôt est toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Les transferts n’ont aucune valeur économique', 'is_correct' => false],
                            ['choice_text' => 'Les services publics ne procurent jamais de bénéfice', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse distributive doit souvent considérer le revenu disponible et, selon l’objectif, les bénéfices monétaires ou en nature des services publics.',
                    ],
                    [
                        'question' => 'Un transfert augmente le revenu disponible d’un ménage pauvre mais réduit légèrement son offre de travail. Quel arbitrage faut-il examiner ?',
                        'choices' => [
                            ['choice_text' => Le gain redistributif doit être comparé au coût d’efficacité lié à la baisse éventuelle de l’offre de travail', 'is_correct' => true],
                            ['choice_text' => 'Il faut ignorer tout effet sur le comportement', 'is_correct' => false],
                            ['choice_text' => 'Une redistribution ne peut jamais modifier l’offre de travail', 'is_correct' => false],
                            ['choice_text' => 'Le transfert est nécessairement inefficace', 'is_correct' => false],
                        ],
                        'explanation' => 'Les politiques redistributives peuvent améliorer l’équité tout en modifiant les incitations, d’où le besoin d’un arbitrage global.',
                    ],
                    [
                        'question' => 'Pourquoi un système de prestations avec un taux de retrait très élevé peut-il créer une trappe à pauvreté ?',
                        'choices' => [
                            ['choice_text' => Une grande partie du revenu supplémentaire est compensée par une baisse des prestations, ce qui réduit le gain net d’une augmentation d’activité', 'is_correct' => true],
                            ['choice_text' => 'Les prestations augmentent toujours plus vite que le revenu', 'is_correct' => false],
                            ['choice_text' => 'Le bénéficiaire reçoit nécessairement plus lorsqu’il travaille davantage', 'is_correct' => false],
                            ['choice_text' => 'Le taux de retrait n’a aucun effet sur les incitations', 'is_correct' => false],
                        ],
                        'explanation' => 'Le taux de retrait des prestations agit comme un taux marginal implicite et peut réduire fortement le rendement financier de l’activité supplémentaire.',
                    ],
                    [
                        'question' => 'Pourquoi un impôt négatif sur le revenu peut-il être considéré comme un instrument combinant redistribution et incitation ?',
                        'choices' => [
                            ['choice_text' => Il peut garantir un minimum de revenu tout en laissant une partie du revenu du travail aux bénéficiaires', 'is_correct' => true],
                            ['choice_text' => 'Il interdit toute activité professionnelle', 'is_correct' => false],
                            ['choice_text' => 'Il rend tous les revenus identiques', 'is_correct' => false],
                            ['choice_text' => 'Il supprime nécessairement le budget social', 'is_correct' => false],
                        ],
                        'explanation' => 'Un impôt négatif peut créer un soutien au revenu tout en maintenant une incitation marginale à augmenter le revenu du travail selon son barème.',
                    ],
                    [
                        'question' => 'Quelle différence essentielle existe entre égalité des revenus et égalité des opportunités ?',
                        'choices' => [
                            ['choice_text' => L’égalité des opportunités cherche surtout à réduire les différences injustifiées d’accès ou de possibilités, tandis que l’égalité des revenus vise la distribution des résultats monétaires', 'is_correct' => true],
                            ['choice_text' => 'Les deux notions sont strictement identiques', 'is_correct' => false],
                            ['choice_text' => 'L’égalité des opportunités implique toujours des revenus identiques', 'is_correct' => false],
                            ['choice_text' => 'L’égalité des revenus ne concerne jamais les politiques publiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces deux objectifs sont distincts : une politique peut améliorer les chances d’accès à l’éducation sans égaliser complètement les revenus finaux.',
                    ],
                    [
                        'question' => 'Une subvention à l’éducation supérieure bénéficie surtout aux ménages à revenu élevé car ils sont beaucoup plus nombreux à utiliser le dispositif. Quel risque redistributif apparaît ?',
                        'choices' => [
                            ['choice_text' => Une politique officiellement universelle peut être régressive si les bénéfices sont davantage captés par les ménages aisés', 'is_correct' => true],
                            ['choice_text' => 'Toute subvention éducative est nécessairement progressive', 'is_correct' => false],
                            ['choice_text' => 'L’universalité garantit automatiquement une redistribution vers les plus pauvres', 'is_correct' => false],
                            ['choice_text' => 'Le profil des bénéficiaires n’a aucun lien avec l’effet distributif', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effet redistributif dépend de l’utilisation effective du programme et de la distribution des bénéfices entre groupes de revenus.',
                    ],
                    [
                        'question' => 'Pourquoi les économistes peuvent-ils utiliser des poids sociaux différents selon le revenu dans une fonction de bien-être social ?',
                        'choices' => [
                            ['choice_text' => Pour représenter explicitement une préférence normative accordant davantage de poids aux gains des ménages plus défavorisés', 'is_correct' => true],
                            ['choice_text' => 'Parce que les préférences individuelles sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un poids social est une taxe financière', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir automatiquement l’efficacité productive', 'is_correct' => false],
                        ],
                        'explanation' => 'Les poids sociaux permettent d’introduire un jugement normatif sur la valeur relative des gains de différents groupes.',
                    ],
                    [
                        'question' => 'Pourquoi une politique de redistribution peut-elle augmenter le bien-être social même si elle réduit légèrement le PIB ?',
                        'choices' => [
                            ['choice_text' => 'Le gain d’équité peut être valorisé suffisamment pour compenser la perte d’efficacité dans la fonction de bien-être retenue', 'is_correct' => true],
                            ['choice_text' => 'Une baisse du PIB augmente toujours le bien-être', 'is_correct' => false],
                            ['choice_text' => 'L’efficacité économique est toujours sans importance', 'is_correct' => false],
                            ['choice_text' => 'La redistribution ne modifie jamais les ressources disponibles', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction de bien-être social peut valoriser la redistribution et considérer qu’un léger coût d’efficacité est justifié par un gain distributif important.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 6 — Dépenses publiques et choix intertemporels
            // =========================================================
            [
                'title' => 'Dépenses publiques et arbitrages intertemporels',
                'description' => 'Analyse avancée du choix des dépenses publiques, de l’investissement public et des arbitrages entre générations.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Pourquoi la distinction entre dépense publique courante et investissement public est-elle importante ?',
                        'choices' => [
                            ['choice_text' => Les investissements peuvent produire des bénéfices sur plusieurs périodes tandis que les dépenses courantes financent principalement des besoins immédiats', 'is_correct' => true],
                            ['choice_text' => 'Les dépenses courantes n’ont jamais d’utilité sociale', 'is_correct' => false],
                            ['choice_text' => 'Les investissements publics ne mobilisent aucune ressource aujourd’hui', 'is_correct' => false],
                            ['choice_text' => 'Toutes les dépenses ont exactement le même profil temporel', 'is_correct' => false],
                        ],
                        'explanation' => 'La dimension temporelle permet d’évaluer si une dépense actuelle génère des bénéfices futurs et comment son financement doit être réparti dans le temps.',
                    ],
                    [
                        'question' => 'Un projet public génère des bénéfices pendant vingt ans. Pourquoi l’actualisation est-elle pertinente ?',
                        'choices' => [
                            ['choice_text' => Les bénéfices futurs doivent être comparés à leur valeur présente pour évaluer correctement le projet', 'is_correct' => true],
                            ['choice_text' => 'Elle rend tous les bénéfices futurs nuls', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine toute incertitude', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de comparer uniquement les coûts comptables', 'is_correct' => false],
                        ],
                        'explanation' => 'L’actualisation traduit les flux futurs en valeur présente afin de rendre comparables des coûts et bénéfices intervenant à différentes dates.',
                    ],
                    [
                        'question' => 'Un projet public présente une valeur actuelle nette positive au taux d’actualisation social retenu. Quelle conclusion est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => Sous les hypothèses de l’analyse, les bénéfices actualisés excèdent les coûts actualisés', 'is_correct' => true],
                            ['choice_text' => 'Le projet est nécessairement optimal dans toutes les dimensions', 'is_correct' => false],
                            ['choice_text' => 'Le projet ne comporte aucun risque', 'is_correct' => false],
                            ['choice_text' => 'Le projet doit être financé exclusivement par l’impôt', 'is_correct' => false],
                        ],
                        'explanation' => 'Une valeur actuelle nette positive indique que les bénéfices actualisés dépassent les coûts actualisés dans le cadre retenu.',
                    ],
                    [
                        'question' => 'Pourquoi le taux d’actualisation social peut-il influencer fortement la décision d’investissement public ?',
                        'choices' => [
                            ['choice_text' => Un taux élevé réduit davantage le poids des bénéfices lointains et peut défavoriser les projets à rendement très étalé dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Le taux d’actualisation ne modifie jamais la valeur présente', 'is_correct' => false],
                            ['choice_text' => 'Un taux élevé augmente toujours la valeur des bénéfices futurs', 'is_correct' => false],
                            ['choice_text' => 'Le taux d’actualisation concerne uniquement les dépenses courantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus le taux est élevé, plus les flux éloignés dans le temps sont fortement actualisés.',
                    ],
                    [
                        'question' => 'Pourquoi l’investissement public peut-il être financé par dette dans une perspective intergénérationnelle ?',
                        'choices' => [
                            ['choice_text' => Les générations futures peuvent bénéficier de l’infrastructure et contribuer aussi à son financement futur', 'is_correct' => true],
                            ['choice_text' => 'La dette ne représente jamais une charge future', 'is_correct' => false],
                            ['choice_text' => 'Toutes les générations bénéficient exactement du même montant', 'is_correct' => false],
                            ['choice_text' => 'L’emprunt rend le projet gratuit', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque l’investissement profite sur plusieurs périodes, son financement peut être réparti dans le temps, sous réserve de soutenabilité.',
                    ],
                    [
                        'question' => 'Un projet public réduit les émissions de carbone pendant cinquante ans mais a des coûts immédiats élevés. Quel aspect doit être particulièrement soigneusement évalué ?',
                        'choices' => [
                            ['choice_text' => La valorisation actualisée des dommages climatiques évités et l’incertitude sur les bénéfices futurs', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la dépense de la première année', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le nombre de fonctionnaires affectés au projet', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les recettes fiscales de l’année suivante', 'is_correct' => false],
                        ],
                        'explanation' => 'Les projets environnementaux de très long terme nécessitent une évaluation des bénéfices futurs, de l’actualisation et de l’incertitude.',
                    ],
                    [
                        'question' => 'Pourquoi la qualité d’un investissement public peut-elle être plus importante que son volume ?',
                        'choices' => [
                            ['choice_text' => Un volume élevé de dépenses ne garantit pas un rendement social élevé si les projets sont mal sélectionnés ou mal réalisés', 'is_correct' => true],
                            ['choice_text' => 'Tout investissement public est nécessairement productif', 'is_correct' => false],
                            ['choice_text' => 'Le volume des dépenses détermine automatiquement leur rentabilité', 'is_correct' => false],
                            ['choice_text' => 'La productivité ne concerne que les entreprises privées', 'is_correct' => false],
                        ],
                        'explanation' => 'L’efficacité des investissements dépend de leur sélection, de leur mise en œuvre, de leur maintenance et de leurs bénéfices réels.',
                    ],
                    [
                        'question' => 'Une dépense publique actuelle finance une réduction durable des dépenses énergétiques futures. Pourquoi faut-il considérer cette économie future dans l’évaluation ?',
                        'choices' => [
                            ['choice_text' => Elle constitue un bénéfice futur qui réduit le coût économique net du projet', 'is_correct' => true],
                            ['choice_text' => 'Les économies futures sont sans valeur', 'is_correct' => false],
                            ['choice_text' => 'Les économies ne peuvent jamais être actualisées', 'is_correct' => false],
                            ['choice_text' => 'Le coût initial doit toujours être le seul critère', 'is_correct' => false],
                        ],
                        'explanation' => 'Les économies futures constituent des flux économiques pertinents et doivent être intégrées dans l’analyse actualisée.',
                    ],
                    [
                        'question' => 'Pourquoi une règle budgétaire limitant mécaniquement tous les déficits peut-elle être problématique en présence d’investissements publics rentables ?',
                        'choices' => [
                            ['choice_text' => Elle peut empêcher un financement intertemporel potentiellement justifié pour des projets générant des bénéfices futurs importants', 'is_correct' => true],
                            ['choice_text' => 'Les investissements publics ne produisent jamais de bénéfices futurs', 'is_correct' => false],
                            ['choice_text' => 'Les déficits sont toujours socialement souhaitables', 'is_correct' => false],
                            ['choice_text' => 'Une règle budgétaire n’a aucun effet sur la composition des dépenses', 'is_correct' => false],
                        ],
                        'explanation' => 'Une contrainte trop rigide peut traiter de la même manière les dépenses courantes et certains investissements publics à rendement social élevé.',
                    ],
                    [
                        'question' => 'Un projet public a une VAN légèrement positive mais une forte incertitude sur ses bénéfices futurs. Quelle approche est la plus rigoureuse ?',
                        'choices' => [
                            ['choice_text' => Tester la sensibilité du résultat aux hypothèses clés et intégrer l’incertitude dans la décision', 'is_correct' => true],
                            ['choice_text' => 'Accepter automatiquement le projet puisque la VAN est positive', 'is_correct' => false],
                            ['choice_text' => 'Ignorer complètement les scénarios défavorables', 'is_correct' => false],
                            ['choice_text' => 'Remplacer tous les bénéfices futurs par zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Une VAN ponctuelle peut être fragile lorsque les hypothèses sont incertaines ; l’analyse de sensibilité et des scénarios améliore la qualité de la décision.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 7 — Dette publique et soutenabilité
            // =========================================================
            [
                'title' => 'Dette publique et soutenabilité budgétaire',
                'description' => 'Analyse avancée des mécanismes d’endettement, des soldes primaires, des taux d’intérêt et de la dynamique de la dette.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Quel élément est essentiel dans la dynamique du ratio dette/PIB ?',
                        'choices' => [
                            ['choice_text' => 'L’écart entre le taux d’intérêt effectif payé sur la dette et le taux de croissance du PIB, ainsi que le solde primaire', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le montant nominal de la dette', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le niveau des exportations', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le taux de chômage', 'is_correct' => false],
                        ],
                        'explanation' => 'La dynamique du ratio dette/PIB dépend notamment du taux d’intérêt, de la croissance nominale et des soldes primaires.',
                    ],
                    [
                        'question' => 'Si le taux de croissance nominale du PIB est durablement supérieur au taux d’intérêt moyen sur la dette, quel effet mécanique favorable peut apparaître ?',
                        'choices' => [
                            ['choice_text' => Le ratio dette/PIB peut être plus facile à stabiliser, toutes choses égales par ailleurs', 'is_correct' => true],
                            ['choice_text' => 'La dette nominale diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Le déficit primaire devient automatiquement nul', 'is_correct' => false],
                            ['choice_text' => 'Les intérêts disparaissent', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque la croissance nominale dépasse le taux d’intérêt, la dynamique du ratio est plus favorable, toutes choses égales par ailleurs.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un solde primaire ?',
                        'choices' => [
                            ['choice_text' => 'Le solde budgétaire hors charges d’intérêts', 'is_correct' => true],
                            ['choice_text' => 'La dette publique hors inflation', 'is_correct' => false],
                            ['choice_text' => 'Le solde commercial hors importations', 'is_correct' => false],
                            ['choice_text' => 'Le PIB après impôt', 'is_correct' => false],
                        ],
                        'explanation' => 'Le solde primaire exclut les paiements d’intérêts afin d’isoler la position budgétaire courante avant le service de la dette.',
                    ],
                    [
                        'question' => 'Pourquoi un déficit primaire persistant peut-il poser problème pour la dynamique de la dette ?',
                        'choices' => [
                            ['choice_text' => Il ajoute directement un besoin de financement avant même de considérer la charge d’intérêts', 'is_correct' => true],
                            ['choice_text' => 'Il réduit automatiquement la dette', 'is_correct' => false],
                            ['choice_text' => 'Il n’a aucun effet sur les besoins d’emprunt', 'is_correct' => false],
                            ['choice_text' => 'Il implique toujours un excédent courant', 'is_correct' => false],
                        ],
                        'explanation' => 'Un déficit primaire signifie que les recettes ne couvrent pas les dépenses hors intérêts, ce qui nécessite un financement supplémentaire.',
                    ],
                    [
                        'question' => 'Une hausse soudaine des taux d’intérêt augmente le coût du refinancement d’une dette arrivant progressivement à maturité. Quelle conséquence peut suivre ?',
                        'choices' => [
                            ['choice_text' => Une augmentation graduelle de la charge d’intérêts à mesure que la dette est refinancée', 'is_correct' => true],
                            ['choice_text' => 'Une réduction immédiate de toutes les dépenses publiques', 'is_correct' => false],
                            ['choice_text' => 'Une disparition instantanée de la dette existante', 'is_correct' => false],
                            ['choice_text' => 'Un effet nécessairement nul sur le budget', 'is_correct' => false],
                        ],
                        'explanation' => 'La maturité de la dette détermine la vitesse avec laquelle les nouveaux taux se transmettent au coût moyen du financement.',
                    ],
                    [
                        'question' => 'Pourquoi la maturité moyenne de la dette est-elle une variable de gestion importante ?',
                        'choices' => [
                            ['choice_text' => Elle influence le risque de refinancement et la vitesse de transmission des variations de taux au coût de la dette', 'is_correct' => true],
                            ['choice_text' => 'Elle détermine directement le PIB', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tout risque budgétaire', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les intérêts indépendants des marchés', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dette à maturité plus longue peut réduire le risque de refinancement à court terme, mais elle implique d’autres arbitrages de coût et de risque.',
                    ],
                    [
                        'question' => 'Quel facteur peut améliorer mécaniquement le ratio dette/PIB sans réduction immédiate de la dette nominale ?',
                        'choices' => [
                            ['choice_text' => Une croissance du PIB nominal supérieure à la croissance de la dette', 'is_correct' => true],
                            ['choice_text' => 'Une hausse du déficit primaire', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du taux d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'Une contraction du PIB', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ratio dépend du numérateur et du dénominateur ; une hausse suffisamment rapide du PIB peut réduire le ratio même si la dette augmente.',
                    ],
                    [
                        'question' => 'Pourquoi une dette publique élevée n’implique-t-elle pas automatiquement une crise budgétaire ?',
                        'choices' => [
                            ['choice_text' => La capacité de financement dépend aussi des taux, de la maturité, de la croissance, de la crédibilité budgétaire et de la structure des créanciers', 'is_correct' => true],
                            ['choice_text' => 'Une dette élevée est toujours sans coût', 'is_correct' => false],
                            ['choice_text' => 'Le ratio dette/PIB n’a aucune utilité', 'is_correct' => false],
                            ['choice_text' => 'Les investisseurs ignorent toujours la politique budgétaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La soutenabilité dépend de la dynamique globale de la dette et de la capacité de l’État à conserver un accès durable au financement.',
                    ],
                    [
                        'question' => 'Un gouvernement passe d’un déficit primaire à un excédent primaire. Quel effet peut-il avoir sur la dynamique de la dette ?',
                        'choices' => [
                            ['choice_text' => Il réduit le besoin de financement et peut contribuer à stabiliser ou réduire le ratio de dette', 'is_correct' => true],
                            ['choice_text' => 'Il augmente mécaniquement la dette dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Il rend le PIB nécessairement plus faible', 'is_correct' => false],
                            ['choice_text' => 'Il supprime automatiquement toute charge d’intérêt existante', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amélioration du solde primaire réduit le flux de nouveaux besoins de financement et contribue à la soutenabilité, selon la dynamique des autres variables.',
                    ],
                    [
                        'question' => 'Pourquoi un choc temporaire sur les recettes publiques peut-il être différent d’une détérioration structurelle ?',
                        'choices' => [
                            ['choice_text' => Un choc temporaire peut être lissé dans le temps tandis qu’une détérioration structurelle exige une correction durable', 'is_correct' => true],
                            ['choice_text' => 'Les deux ont toujours exactement les mêmes implications', 'is_correct' => false],
                            ['choice_text' => 'Un choc temporaire ne peut jamais modifier la dette', 'is_correct' => false],
                            ['choice_text' => 'Une détérioration structurelle disparaît automatiquement avec le temps', 'is_correct' => false],
                        ],
                        'explanation' => 'La nature temporaire ou permanente du choc influence la stratégie de financement et la nécessité d’un ajustement budgétaire durable.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 8 — Évaluation avancée des politiques publiques
            // =========================================================
            [
                'title' => 'Évaluation avancée des politiques publiques',
                'description' => 'Méthodes avancées d’évaluation causale, analyse coût-bénéfice et arbitrage entre efficacité, équité et contraintes administratives.',
                'difficulty' => 'Advanced',
                'questions' => [
                    [
                        'question' => 'Pourquoi une simple comparaison avant-après peut-elle donner une estimation biaisée de l’effet causal d’une politique ?',
                        'choices' => [
                            ['choice_text' => D’autres facteurs peuvent avoir changé simultanément et expliquer une partie du résultat observé', 'is_correct' => true],
                            ['choice_text' => 'Une politique ne peut jamais modifier un indicateur avant-après', 'is_correct' => false],
                            ['choice_text' => 'Les données avant la politique sont toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Une comparaison avant-après mesure nécessairement l’effet causal exact', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans groupe de comparaison ou autre stratégie d’identification, les variations observées peuvent être dues à d’autres facteurs.',
                    ],
                    [
                        'question' => 'Une région pilote une politique tandis qu’une région similaire ne la reçoit pas. Quelle méthode exploite naturellement cette configuration ?',
                        'choices' => [
                            ['choice_text' => Une comparaison avec groupe traité et groupe de contrôle', 'is_correct' => true],
                            ['choice_text' => 'Une analyse purement comptable des dépenses', 'is_correct' => false],
                            ['choice_text' => 'Une mesure uniquement descriptive du budget', 'is_correct' => false],
                            ['choice_text' => 'Une comparaison des exportations nationales', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence d’un groupe comparable non traité permet de construire une stratégie de comparaison afin d’isoler plus crédiblement l’effet de la politique.',
                    ],
                    [
                        'question' => 'Dans une approche en différences-de-différences, quelle hypothèse est particulièrement importante ?',
                        'choices' => [
                            ['choice_text' => En l’absence de traitement, les tendances des groupes auraient été suffisamment parallèles', 'is_correct' => true],
                            ['choice_text' => 'Les groupes doivent avoir exactement le même niveau initial', 'is_correct' => false],
                            ['choice_text' => 'Le traitement doit être appliqué à tous les agents', 'is_correct' => false],
                            ['choice_text' => 'La variable étudiée doit être constante', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hypothèse de tendances parallèles est essentielle pour interpréter l’écart de variations entre groupes comme un effet causal du traitement.',
                    ],
                    [
                        'question' => 'Une politique augmente le taux d’emploi de 4 points dans le groupe traité contre 1 point dans le groupe de contrôle. En différences simples de variation, quel effet estimé obtient-on ?',
                        'choices' => [
                            ['choice_text' => 'Une hausse estimée de 3 points attribuable à la politique', 'is_correct' => true],
                            ['choice_text' => 'Une hausse de 5 points', 'is_correct' => false],
                            ['choice_text' => 'Une baisse de 3 points', 'is_correct' => false],
                            ['choice_text' => 'Aucun effet mesurable', 'is_correct' => false],
                        ],
                        'explanation' => 'L’estimation simplifiée consiste à soustraire la variation du groupe de contrôle de celle du groupe traité : 4 - 1 = 3 points.',
                    ],
                    [
                        'question' => 'Pourquoi une analyse coût-bénéfice doit-elle éviter de compter deux fois le même bénéfice ?',
                        'choices' => [
                            ['choice_text' => Un double comptage surestime artificiellement la valeur sociale du projet', 'is_correct' => true],
                            ['choice_text' => 'Les bénéfices sociaux sont toujours nuls', 'is_correct' => false],
                            ['choice_text' => 'Le coût-bénéfice ne peut jamais utiliser plusieurs indicateurs', 'is_correct' => false],
                            ['choice_text' => 'Les bénéfices doivent toujours être comptés trois fois', 'is_correct' => false],
                        ],
                        'explanation' => 'Les effets économiques peuvent être liés entre eux ; additionner deux fois le même gain conduit à une surestimation de la VAN sociale.',
                    ],
                    [
                        'question' => 'Une politique de transport réduit le temps de trajet et augmente la valeur foncière autour des infrastructures. Pourquoi faut-il être prudent lors de l’addition des deux bénéfices ?',
                        'choices' => [
                            ['choice_text' => Une partie de la hausse des valeurs foncières peut déjà capitaliser les bénéfices du temps de trajet', 'is_correct' => true],
                            ['choice_text' => 'Les valeurs foncières n’ont jamais de rapport avec les infrastructures', 'is_correct' => false],
                            ['choice_text' => 'Les deux bénéfices sont nécessairement indépendants', 'is_correct' => false],
                            ['choice_text' => 'Le temps de trajet ne peut jamais avoir de valeur économique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les prix d’actifs peuvent capitaliser des avantages futurs, de sorte qu’une addition naïve peut conduire à un double comptage.',
                    ],
                    [
                        'question' => 'Pourquoi l’effet moyen d’une politique ne décrit-il pas nécessairement son efficacité pour tous les groupes ?',
                        'choices' => [
                            ['choice_text' => Les effets peuvent être hétérogènes selon le revenu, l’âge, la localisation ou d’autres caractéristiques', 'is_correct' => true],
                            ['choice_text' => 'Tous les agents réagissent toujours de la même façon', 'is_correct' => false],
                            ['choice_text' => 'Une politique n’a jamais d’effets différents selon les personnes', 'is_correct' => false],
                            ['choice_text' => 'L’effet moyen est toujours inférieur à tous les effets individuels', 'is_correct' => false],
                        ],
                        'explanation' => 'Une moyenne peut masquer des gagnants, des perdants et des intensités d’impact très différentes entre groupes.',
                    ],
                    [
                        'question' => 'Une politique affiche un bénéfice net social positif mais augmente fortement les inégalités. Quelle conclusion est la plus prudente ?',
                        'choices' => [
                            ['choice_text' => 'La décision dépend du poids accordé à l’équité dans le critère social utilisé', 'is_correct' => true],
                            ['choice_text' => 'Le projet doit nécessairement être accepté', 'is_correct' => false],
                            ['choice_text' => 'Le projet doit nécessairement être rejeté', 'is_correct' => false],
                            ['choice_text' => 'Les effets distributifs sont sans importance économique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une VAN sociale positive selon un critère donné ne règle pas automatiquement la question de la distribution des gains et pertes.',
                    ],
                    [
                        'question' => 'Pourquoi une politique pilote peut-elle être préférable à une généralisation immédiate lorsqu’un programme est innovant mais incertain ?',
                        'choices' => [
                            ['choice_text' => Elle permet d’apprendre sur les coûts et les effets avant d’engager l’ensemble des ressources publiques', 'is_correct' => true],
                            ['choice_text' => 'Un pilote garantit toujours le succès futur', 'is_correct' => false],
                            ['choice_text' => 'Un pilote élimine toutes les erreurs statistiques', 'is_correct' => false],
                            ['choice_text' => 'Un pilote ne nécessite aucun indicateur d’évaluation', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expérimentation progressive permet de réduire l’exposition aux erreurs de conception et d’obtenir des informations supplémentaires avant l’extension.',
                    ],
                    [
                        'question' => 'Une politique réussit son objectif mais nécessite une administration extrêmement coûteuse. Quelle dimension supplémentaire doit être intégrée à l’évaluation ?',
                        'choices' => [
                            ['choice_text' => Les coûts administratifs et de mise en œuvre doivent être inclus dans le coût social du programme', 'is_correct' => true],
                            ['choice_text' => 'Les coûts administratifs doivent toujours être ignorés', 'is_correct' => false],
                            ['choice_text' => 'Seuls les transferts vers les ménages comptent', 'is_correct' => false],
                            ['choice_text' => 'Les coûts de mise en œuvre sont toujours identiques entre programmes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une politique peut être efficace sur son objectif mais peu efficiente si sa mise en œuvre mobilise des ressources administratives excessives.',
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
                    'duration' => 10,
                    'passing_score' => 50,
                    'total_marks' => 10,
                    'is_active' => true,
                    'difficulty' => $quizData['difficulty'],
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

                // Mélange des objets complets afin de garder
                // is_correct associé à la bonne réponse.
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
```
