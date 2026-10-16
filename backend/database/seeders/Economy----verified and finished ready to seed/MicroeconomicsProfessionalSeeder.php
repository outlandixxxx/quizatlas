```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class MicroeconomicsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'microeconomics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Théorie avancée du consommateur et dualité',
                'questions' => [
                    [
                        'question' => 'Dans la formulation de minimisation de dépense, quel est l\'objectif du consommateur ?',
                        'answers' => [
                            ['answer' => 'Atteindre un niveau d\'utilité donné au coût minimal compte tenu des prix', 'iscorrect' => true],
                            ['answer' => 'Maximiser la quantité consommée sans contrainte budgétaire', 'iscorrect' => false],
                            ['answer' => 'Maximiser le profit de l\'entreprise', 'iscorrect' => false],
                            ['answer' => 'Minimiser uniquement le prix d\'un seul bien', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que la fonction de dépense ?',
                        'answers' => [
                            ['answer' => 'La dépense minimale nécessaire pour atteindre un niveau d\'utilité donné aux prix considérés', 'iscorrect' => true],
                            ['answer' => 'La dépense totale observée sans tenir compte des préférences', 'iscorrect' => false],
                            ['answer' => 'Le revenu maximal obtenu par le consommateur', 'iscorrect' => false],
                            ['answer' => 'Le coût total de production d\'une entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la demande hicksienne est-elle appelée demande compensée ?',
                        'answers' => [
                            ['answer' => 'Parce qu\'elle maintient le niveau d\'utilité constant lorsqu\'un prix varie', 'iscorrect' => true],
                            ['answer' => 'Parce qu\'elle maintient toujours le revenu nominal constant', 'iscorrect' => false],
                            ['answer' => 'Parce qu\'elle compense directement les producteurs', 'iscorrect' => false],
                            ['answer' => 'Parce qu\'elle ignore les prix relatifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que permet principalement l\'identité de Roy ?',
                        'answers' => [
                            ['answer' => 'Récupérer la demande marshallienne à partir de la fonction d\'utilité indirecte sous les conditions appropriées', 'iscorrect' => true],
                            ['answer' => 'Calculer directement le coût marginal d\'une entreprise', 'iscorrect' => false],
                            ['answer' => 'Déterminer la production d\'un monopole naturel', 'iscorrect' => false],
                            ['answer' => 'Mesurer uniquement l\'élasticité de l\'offre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que permet principalement l\'identité de Shephard ?',
                        'answers' => [
                            ['answer' => 'Obtenir les demandes hicksiennes à partir de la fonction de dépense, sous les hypothèses régulières', 'iscorrect' => true],
                            ['answer' => 'Calculer directement le profit d\'un monopole', 'iscorrect' => false],
                            ['answer' => 'Déterminer le taux de chômage', 'iscorrect' => false],
                            ['answer' => 'Mesurer la productivité totale des facteurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel résultat exprime l\'équation de Slutsky ?',
                        'answers' => [
                            ['answer' => 'La variation de la demande due à un changement de prix peut être décomposée entre effet de substitution et effet de revenu', 'iscorrect' => true],
                            ['answer' => 'Le revenu est toujours indépendant des prix', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal est toujours constant', 'iscorrect' => false],
                            ['answer' => 'La demande marshallienne et hicksienne sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les préférences localement non saturées sont-elles utiles dans l\'analyse du consommateur ?',
                        'answers' => [
                            ['answer' => Elles permettent notamment de justifier que le consommateur dépense toute sa contrainte budgétaire dans les modèles standards', 'iscorrect' => true],
                            ['answer' => 'Elles impliquent que les biens sont toujours gratuits', 'iscorrect' => false],
                            ['answer' => 'Elles rendent toutes les courbes d\'indifférence verticales', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment le choix entre les biens', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la convexité des préférences est-elle importante pour la stabilité du choix optimal ?',
                        'answers' => [
                            ['answer' => 'Elle favorise une préférence pour les combinaisons moyennes et contribue à la convexité de l\'ensemble des solutions optimales', 'iscorrect' => true],
                            ['answer' => 'Elle implique que tout consommateur choisit un seul bien', 'iscorrect' => false],
                            ['answer' => 'Elle rend le revenu indépendant des prix', 'iscorrect' => false],
                            ['answer' => 'Elle interdit tout effet de substitution', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une économie avec plusieurs biens, pourquoi une variation du prix d\'un bien peut-elle affecter la demande des autres ?',
                        'answers' => [
                            ['answer' => Le changement modifie à la fois les prix relatifs et le pouvoir d\'achat réel du consommateur', 'iscorrect' => true],
                            ['answer' => 'Les autres prix deviennent automatiquement identiques', 'iscorrect' => false],
                            ['answer' => 'Les préférences changent toujours instantanément', 'iscorrect' => false],
                            ['answer' => 'Le revenu nominal devient nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'analyse du consommateur peut-elle être formulée en problème primal et dual ?',
                        'answers' => [
                            ['answer' => 'La maximisation d\'utilité et la minimisation de dépense représentent deux formulations cohérentes du même comportement sous des contraintes différentes', 'iscorrect' => true],
                            ['answer' => 'Le problème dual ignore complètement les préférences', 'iscorrect' => false],
                            ['answer' => 'Le problème primal concerne seulement les entreprises', 'iscorrect' => false],
                            ['answer' => 'Les deux formulations donnent nécessairement des paniers incompatibles', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Théorie avancée de la firme et minimisation des coûts',
                'questions' => [
                    [
                        'question' => 'Dans une décision de minimisation de coût avec deux facteurs variables, quelle condition caractérise une solution intérieure ?',
                        'answers' => [
                            ['answer' => 'Le rapport des productivités marginales des facteurs correspond au rapport de leurs prix', 'iscorrect' => true],
                            ['answer' => 'Les quantités des deux facteurs doivent être identiques', 'iscorrect' => false],
                            ['answer' => 'Les coûts fixes doivent être nuls', 'iscorrect' => false],
                            ['answer' => 'Le produit marginal des deux facteurs doit être nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une fonction de coût conditionnelle ?',
                        'answers' => [
                            ['answer' => 'Elle donne les coûts minimaux nécessaires pour produire une quantité donnée avec les prix des facteurs donnés', 'iscorrect' => true],
                            ['answer' => 'Elle décrit uniquement la demande des consommateurs', 'iscorrect' => false],
                            ['answer' => 'Elle donne toujours le profit maximal indépendamment de la technologie', 'iscorrect' => false],
                            ['answer' => 'Elle mesure uniquement les coûts fixes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les isoquantes sont-elles généralement décroissantes dans le modèle standard ?',
                        'answers' => [
                            ['answer' => Si un facteur augmente, une quantité moindre d\'un autre peut être nécessaire pour maintenir la même production lorsque les facteurs sont productifs', 'iscorrect' => true],
                            ['answer' => 'Les facteurs sont toujours parfaitement complémentaires', 'iscorrect' => false],
                            ['answer' => 'Les coûts deviennent nécessairement nuls', 'iscorrect' => false],
                            ['answer' => 'La demande détermine directement leur pente', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente l\'isocoût ?',
                        'answers' => [
                            ['answer' => 'Toutes les combinaisons de facteurs ayant le même coût total', 'iscorrect' => true],
                            ['answer' => 'Toutes les combinaisons de biens ayant la même utilité', 'iscorrect' => false],
                            ['answer' => 'Tous les niveaux de production ayant le même prix', 'iscorrect' => false],
                            ['answer' => 'Toutes les quantités demandées par les consommateurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un changement du salaire peut-il modifier la combinaison optimale de facteurs ?',
                        'answers' => [
                            ['answer' => 'Il modifie le prix relatif du travail et donc l\'arbitrage entre les facteurs', 'iscorrect' => true],
                            ['answer' => 'Il ne modifie que le revenu des consommateurs', 'iscorrect' => false],
                            ['answer' => 'Il ne concerne jamais les coûts de production', 'iscorrect' => false],
                            ['answer' => 'Il rend tous les facteurs parfaitement substituables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une élasticité de substitution élevée entre deux facteurs ?',
                        'answers' => [
                            ['answer' => 'Le ratio d\'utilisation des facteurs réagit fortement à une variation de leurs prix relatifs', 'iscorrect' => true],
                            ['answer' => 'Les facteurs sont nécessairement parfaitement complémentaires', 'iscorrect' => false],
                            ['answer' => 'Le coût total ne varie jamais', 'iscorrect' => false],
                            ['answer' => 'La production reste toujours fixe indépendamment des facteurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût marginal d\'une firme concurrentielle représente-t-il sa courbe d\'offre à court terme dans certaines hypothèses ?',
                        'answers' => [
                            ['answer' => La firme choisit une quantité telle que le prix égale le coût marginal au-dessus du minimum du coût variable moyen', 'iscorrect' => true],
                            ['answer' => 'Elle offre toujours sa production au minimum du coût moyen', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal est indépendant des décisions de production', 'iscorrect' => false],
                            ['answer' => 'L\'offre correspond toujours à la demande individuelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts irrécupérables ne doivent-ils pas influencer une décision marginale future ?',
                        'answers' => [
                            ['answer' => 'Ils sont engagés et non récupérables quelle que soit l\'option future retenue', 'iscorrect' => true],
                            ['answer' => 'Ils varient avec chaque unité future', 'iscorrect' => false],
                            ['answer' => 'Ils représentent toujours le coût marginal', 'iscorrect' => false],
                            ['answer' => 'Ils deviennent toujours négatifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les économies d\'échelle peuvent-elles être liées aux coûts fixes élevés ?',
                        'answers' => [
                            ['answer' => 'L\'augmentation de la production permet de répartir les coûts fixes sur davantage d\'unités', 'iscorrect' => true],
                            ['answer' => 'Les coûts variables deviennent automatiquement négatifs', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs financent directement les coûts fixes', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal devient nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une fonction de production présentant des rendements d\'échelle croissants peut-elle favoriser une structure industrielle concentrée ?',
                        'answers' => [
                            ['answer' => 'Une grande échelle de production peut réduire le coût unitaire par rapport à plusieurs petites unités de production', 'iscorrect' => true],
                            ['answer' => 'Les petites entreprises ont toujours des coûts plus faibles', 'iscorrect' => false],
                            ['answer' => 'La concurrence devient automatiquement parfaite', 'iscorrect' => false],
                            ['answer' => 'Les facteurs deviennent gratuits à grande échelle', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Pouvoir de marché et tarification optimale',
                'questions' => [
                    [
                        'question' => 'Dans le modèle standard de monopole, pourquoi le prix est-il supérieur au coût marginal à l\'optimum ?',
                        'answers' => [
                            ['answer' => 'Le monopole choisit une quantité où le revenu marginal égale le coût marginal, alors que le prix est supérieur au revenu marginal sur une demande décroissante', 'iscorrect' => true],
                            ['answer' => 'Le coût marginal est toujours négatif', 'iscorrect' => false],
                            ['answer' => 'La demande est parfaitement élastique', 'iscorrect' => false],
                            ['answer' => 'Le prix est fixé par le gouvernement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle relation relie l\'indice de Lerner à l\'élasticité-prix de la demande dans le modèle simple de monopole ?',
                        'answers' => [
                            ['answer' => 'Le pouvoir de marge est inversement lié à la valeur absolue de l\'élasticité de la demande', 'iscorrect' => true],
                            ['answer' => 'Le pouvoir de marge augmente toujours avec une demande plus élastique', 'iscorrect' => false],
                            ['answer' => 'Le pouvoir de marché est indépendant de la demande', 'iscorrect' => false],
                            ['answer' => 'L\'élasticité n\'a aucun rôle dans la tarification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une firme ayant plusieurs marchés peut-elle pratiquer des prix différents selon les marchés ?',
                        'answers' => [
                            ['answer' => 'Les élasticités et dispositions à payer peuvent différer entre les segments et permettre une tarification différenciée', 'iscorrect' => true],
                            ['answer' => 'Les coûts marginaux doivent être différents dans tous les marchés', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs ont toujours le même revenu', 'iscorrect' => false],
                            ['answer' => 'La discrimination par les prix ne dépend jamais de l\'élasticité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une discrimination par les prix du troisième degré, quel groupe tend à recevoir le prix le plus élevé ?',
                        'answers' => [
                            ['answer' => 'Le groupe dont la demande est relativement moins élastique, sous les conditions standard', 'iscorrect' => true],
                            ['answer' => 'Toujours le groupe ayant le revenu le plus faible', 'iscorrect' => false],
                            ['answer' => 'Toujours le groupe ayant le revenu le plus élevé', 'iscorrect' => false],
                            ['answer' => 'Le groupe dont l\'offre est la plus élastique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un monopole peut-il fermer malgré un prix supérieur au coût marginal sur certaines unités ?',
                        'answers' => [
                            ['answer' => 'Si les recettes ne couvrent pas les coûts pertinents nécessaires au maintien de l\'activité, selon l\'horizon considéré', 'iscorrect' => true],
                            ['answer' => 'Parce que le revenu marginal est toujours nul', 'iscorrect' => false],
                            ['answer' => 'Parce que le prix ne couvre jamais le coût variable', 'iscorrect' => false],
                            ['answer' => 'Parce que la demande est toujours infinie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le monopole naturel justifie-t-il parfois une réglementation spécifique ?',
                        'answers' => [
                            ['answer' => Les économies d\'échelle peuvent rendre la concurrence duplicative coûteuse tandis que le pouvoir de marché reste important', 'iscorrect' => true],
                            ['answer' => 'Les entreprises concurrentes ont toujours des coûts identiques', 'iscorrect' => false],
                            ['answer' => 'La demande est toujours parfaitement inélastique', 'iscorrect' => false],
                            ['answer' => 'Les coûts fixes sont inexistants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème apparaît avec une tarification au coût marginal d\'un monopole naturel à coûts moyens décroissants ?',
                        'answers' => [
                            ['answer' => 'Le prix peut être inférieur au coût moyen et ne pas couvrir les coûts totaux', 'iscorrect' => true],
                            ['answer' => 'Le prix devient nécessairement supérieur au coût moyen', 'iscorrect' => false],
                            ['answer' => 'Le profit devient toujours maximal', 'iscorrect' => false],
                            ['answer' => 'La production devient toujours nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les frais fixes peuvent-ils conduire à des tarifs binômes dans certains marchés ?',
                        'answers' => [
                            ['answer' => Un tarif fixe peut financer les coûts communs tandis que le prix marginal se rapproche du coût marginal d\'usage', 'iscorrect' => true],
                            ['answer' => 'Le prix marginal devient nécessairement supérieur au coût marginal', 'iscorrect' => false],
                            ['answer' => 'Les coûts fixes disparaissent', 'iscorrect' => false],
                            ['answer' => 'Tous les consommateurs paient exactement la même quantité consommée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle préférer une tarification non uniforme à un prix unique ?',
                        'answers' => [
                            ['answer' => 'Elle peut extraire davantage de surplus ou servir des segments qui seraient exclus par un prix unique', 'iscorrect' => true],
                            ['answer' => 'Un prix unique est toujours légalement obligatoire', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs ont toujours des demandes identiques', 'iscorrect' => false],
                            ['answer' => 'Les coûts fixes empêchent toute segmentation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle limite importante peut rencontrer une politique de réglementation du prix d\'un monopole ?',
                        'answers' => [
                            ['answer' => 'Elle peut modifier les incitations à investir, à innover ou à maintenir la qualité', 'iscorrect' => true],
                            ['answer' => 'Elle ne peut jamais influencer le comportement du monopole', 'iscorrect' => false],
                            ['answer' => 'Elle garantit toujours l\'investissement optimal', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toujours tous les coûts', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Oligopoles, jeux et concurrence dynamique',
                'questions' => [
                    [
                        'question' => 'Dans un modèle de Cournot avec plusieurs firmes symétriques, comment une augmentation du nombre de firmes affecte-t-elle généralement le prix d\'équilibre ?',
                        'answers' => [
                            ['answer' => 'Elle tend à rapprocher le prix du coût marginal', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours le prix', 'iscorrect' => false],
                            ['answer' => 'Elle ne change jamais le prix', 'iscorrect' => false],
                            ['answer' => 'Elle rend automatiquement la demande parfaitement inélastique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le modèle de Bertrand peut-il donner un résultat plus concurrentiel que Cournot ?',
                        'answers' => [
                            ['answer' => 'La concurrence porte directement sur les prix et les consommateurs peuvent se déplacer vers l\'offre moins chère dans les hypothèses appropriées', 'iscorrect' => true],
                            ['answer' => 'Les firmes ne prennent aucune décision stratégique', 'iscorrect' => false],
                            ['answer' => 'Les quantités sont imposées par le gouvernement', 'iscorrect' => false],
                            ['answer' => 'Le modèle suppose toujours des produits différenciés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il lorsqu\'une entreprise devient leader dans un modèle de Stackelberg ?',
                        'answers' => [
                            ['answer' => 'Elle choisit sa décision en anticipant la réaction optimale de la firme suiveuse', 'iscorrect' => true],
                            ['answer' => 'Elle ne tient jamais compte de la réaction de la suiveuse', 'iscorrect' => false],
                            ['answer' => 'La suiveuse choisit avant elle', 'iscorrect' => false],
                            ['answer' => 'Les deux entreprises choisissent simultanément par définition', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un avantage de premier entrant peut-il exister ?',
                        'answers' => [
                            ['answer' => 'Le premier entrant peut influencer les décisions futures des concurrents grâce à un engagement crédible ou à une capacité installée', 'iscorrect' => true],
                            ['answer' => 'Le premier entrant obtient toujours le monopole légal', 'iscorrect' => false],
                            ['answer' => 'Les concurrents sont toujours interdits d\'entrée', 'iscorrect' => false],
                            ['answer' => 'Le premier entrant ne possède aucune contrainte stratégique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'engagement peut-il avoir une valeur stratégique ?',
                        'answers' => [
                            ['answer' => 'Une décision crédible prise avant l\'action d\'un rival peut modifier son ensemble de choix et son comportement optimal', 'iscorrect' => true],
                            ['answer' => 'Un engagement ne modifie jamais les incitations', 'iscorrect' => false],
                            ['answer' => 'Il élimine nécessairement tout risque concurrentiel', 'iscorrect' => false],
                            ['answer' => 'Il rend les stratégies indépendantes du temps', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les jeux répétés peuvent-ils soutenir une coopération tacite ?',
                        'answers' => [
                            ['answer' => 'La perte future d\'une relation profitable peut dissuader une déviation à court terme', 'iscorrect' => true],
                            ['answer' => 'La répétition rend toute triche impossible', 'iscorrect' => false],
                            ['answer' => 'Les firmes cessent de maximiser leur profit', 'iscorrect' => false],
                            ['answer' => 'Les prix deviennent automatiquement réglementés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la transparence peut-elle parfois faciliter une coordination anticoncurrentielle ?',
                        'answers' => [
                            ['answer' => Elle peut rendre les déviations plus facilement détectables et permettre des représailles plus rapides', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours le pouvoir de surveillance', 'iscorrect' => false],
                            ['answer' => 'Elle empêche les entreprises d\'observer les prix', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute concurrence par les prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts de changement pour les consommateurs peuvent-ils renforcer le pouvoir de marché d\'une firme ?',
                        'answers' => [
                            ['answer' => 'Ils rendent plus difficile le déplacement des clients vers des concurrents', 'iscorrect' => true],
                            ['answer' => 'Ils rendent tous les produits parfaitement substituables', 'iscorrect' => false],
                            ['answer' => 'Ils réduisent automatiquement les marges', 'iscorrect' => false],
                            ['answer' => 'Ils empêchent toute innovation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les plateformes à effets de réseau peuvent-elles devenir très concentrées ?',
                        'answers' => [
                            ['answer' => 'L\'utilité pour un utilisateur peut augmenter avec le nombre d\'autres utilisateurs, renforçant les avantages des acteurs déjà établis', 'iscorrect' => true],
                            ['answer' => 'Les utilisateurs préfèrent toujours les petits réseaux', 'iscorrect' => false],
                            ['answer' => 'Les économies d\'échelle disparaissent avec la taille', 'iscorrect' => false],
                            ['answer' => 'Les coûts de changement sont toujours nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la concurrence sur les marchés numériques peut-elle nécessiter une analyse dynamique ?',
                        'answers' => [
                            ['answer' => Les effets de réseau, les données, l\'innovation et les coûts de changement peuvent modifier rapidement les positions de marché', 'iscorrect' => true],
                            ['answer' => 'Les structures numériques sont parfaitement stables', 'iscorrect' => false],
                            ['answer' => 'Les utilisateurs ne changent jamais de plateforme', 'iscorrect' => false],
                            ['answer' => 'Les coûts fixes sont toujours inexistants', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Économie de l\'information et contrats',
                'questions' => [
                    [
                        'question' => 'Pourquoi le marché des voitures d\'occasion est-il un exemple classique de sélection adverse potentielle ?',
                        'answers' => [
                            ['answer' => 'Le vendeur connaît souvent mieux la qualité du véhicule que l\'acheteur, ce qui peut pousser les véhicules de bonne qualité à sortir du marché', 'iscorrect' => true],
                            ['answer' => 'Les acheteurs connaissent toujours parfaitement la qualité', 'iscorrect' => false],
                            ['answer' => 'La qualité est toujours vérifiable sans coût', 'iscorrect' => false],
                            ['answer' => 'Les vendeurs n\'ont aucun intérêt économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les garanties peuvent-elles servir de mécanisme de signalisation ?',
                        'answers' => [
                            ['answer' => Un vendeur offrant une garantie coûteuse peut signaler sa confiance dans la qualité du produit', 'iscorrect' => true],
                            ['answer' => 'Une garantie réduit toujours la qualité', 'iscorrect' => false],
                            ['answer' => 'Les garanties ne transmettent aucune information', 'iscorrect' => false],
                            ['answer' => 'Les vendeurs de mauvaise qualité ont toujours plus intérêt à garantir', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un signal économique crédible ?',
                        'answers' => [
                            ['answer' => 'Une action observable dont le coût ou la difficulté diffère suffisamment entre les types d\'agents pour transmettre de l\'information', 'iscorrect' => true],
                            ['answer' => 'Une action que tous les agents peuvent imiter au même coût', 'iscorrect' => false],
                            ['answer' => 'Une action qui ne modifie aucune croyance', 'iscorrect' => false],
                            ['answer' => 'Une décision sans conséquence économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'éducation peut-elle servir de signal sur le marché du travail même lorsqu\'elle n\'augmente pas toute la productivité observée ?',
                        'answers' => [
                            ['answer' => 'Le niveau d\'éducation peut révéler certaines caractéristiques des travailleurs aux employeurs', 'iscorrect' => true],
                            ['answer' => 'L\'éducation élimine toutes les asymétries', 'iscorrect' => false],
                            ['answer' => 'Tous les travailleurs ont exactement le même niveau d\'éducation', 'iscorrect' => false],
                            ['answer' => 'L\'éducation n\'a aucun coût', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un mécanisme d\'incitation dans un contrat principal-agent ?',
                        'answers' => [
                            ['answer' => 'Une règle de rémunération ou de partage du risque destinée à influencer l\'effort ou les décisions de l\'agent', 'iscorrect' => true],
                            ['answer' => 'Une clause sans relation avec le comportement', 'iscorrect' => false],
                            ['answer' => 'Une règle qui supprime tout risque', 'iscorrect' => false],
                            ['answer' => 'Un prix fixé par le marché des biens', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le partage du risque est-il important dans un contrat optimal ?',
                        'answers' => [
                            ['answer' => Le contrat doit arbitrer entre les incitations de l\'agent et la répartition efficace du risque entre les parties', 'iscorrect' => true],
                            ['answer' => 'Le risque ne peut jamais être partagé', 'iscorrect' => false],
                            ['answer' => 'L\'agent est toujours neutre au risque', 'iscorrect' => false],
                            ['answer' => 'Le principal ne supporte jamais aucun risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une franchise peut-elle réduire l\'aléa moral dans une assurance ?',
                        'answers' => [
                            ['answer' => 'Elle laisse à l\'assuré une partie du coût de l\'événement et maintient une incitation à réduire le risque', 'iscorrect' => true],
                            ['answer' => 'Elle garantit une couverture intégrale', 'iscorrect' => false],
                            ['answer' => 'Elle élimine toute incertitude', 'iscorrect' => false],
                            ['answer' => 'Elle augmente toujours la fréquence des sinistres', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la réputation peut-elle constituer un mécanisme disciplinaire sur un marché ?',
                        'answers' => [
                            ['answer' => 'La perspective de pertes futures peut décourager un comportement opportuniste aujourd\'hui', 'iscorrect' => true],
                            ['answer' => 'La réputation rend toutes les transactions gratuites', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute asymétrie d\'information', 'iscorrect' => false],
                            ['answer' => 'Elle garantit toujours la qualité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contrats incomplets sont-ils importants en théorie économique ?',
                        'answers' => [
                            ['answer' => 'Certaines actions, états futurs ou dimensions de qualité ne peuvent pas être parfaitement spécifiés ou vérifiés', 'iscorrect' => true],
                            ['answer' => 'Tous les contrats peuvent toujours prévoir tous les états', 'iscorrect' => false],
                            ['answer' => 'Les contrats incomplets suppriment les coûts de transaction', 'iscorrect' => false],
                            ['answer' => 'Ils rendent l\'information parfaite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les droits de contrôle peuvent-ils être importants lorsque les contrats sont incomplets ?',
                        'answers' => [
                            ['answer' => 'Ils déterminent qui peut prendre certaines décisions lorsque les situations ne sont pas explicitement prévues dans le contrat', 'iscorrect' => true],
                            ['answer' => 'Ils garantissent toujours un résultat identique', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent toutes les incitations', 'iscorrect' => false],
                            ['answer' => 'Ils empêchent toute révision des contrats', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Économie du bien-être et politiques de concurrence',
                'questions' => [
                    [
                        'question' => 'Pourquoi le surplus total est-il utilisé comme indicateur d\'efficacité allocative dans le modèle standard ?',
                        'answers' => [
                            ['answer' => 'Il agrège les gains des consommateurs et des producteurs associés aux échanges', 'iscorrect' => true],
                            ['answer' => 'Il mesure directement l\'égalité des revenus', 'iscorrect' => false],
                            ['answer' => 'Il ignore totalement les échanges', 'iscorrect' => false],
                            ['answer' => 'Il correspond toujours au PIB national', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un monopole génère-t-il souvent une perte sèche ?',
                        'answers' => [
                            ['answer' => 'Certaines unités mutuellement avantageuses au niveau social ne sont pas produites', 'iscorrect' => true],
                            ['answer' => 'Toutes les unités produites coûtent plus cher au producteur que leur prix', 'iscorrect' => false],
                            ['answer' => 'Le monopole produit toujours au-dessus de la quantité concurrentielle', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs ne retirent aucune utilité du produit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réglementation du monopole fondée uniquement sur le prix peut-elle être insuffisante ?',
                        'answers' => [
                            ['answer' => 'Elle peut négliger la qualité, l\'investissement, l\'innovation et la soutenabilité financière de l\'entreprise', 'iscorrect' => true],
                            ['answer' => 'Le prix n\'a aucun effet sur le comportement du monopole', 'iscorrect' => false],
                            ['answer' => 'La qualité est toujours parfaitement observable et constante', 'iscorrect' => false],
                            ['answer' => 'L\'investissement ne dépend jamais des revenus futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique de concurrence doit-elle parfois distinguer efficacité statique et dynamique ?',
                        'answers' => [
                            ['answer' => Une structure de marché peut réduire l\'efficience immédiate tout en favorisant ou décourageant l\'innovation future', 'iscorrect' => true],
                            ['answer' => Les deux concepts sont toujours identiques', 'iscorrect' => false],
                            ['answer' => L\'innovation est indépendante de la concurrence', 'iscorrect' => false],
                            ['answer' => L\'efficacité dynamique concerne uniquement le budget public', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les fusions peuvent-elles parfois améliorer le bien-être même lorsqu\'elles augmentent la concentration ?',
                        'answers' => [
                            ['answer' => Elles peuvent générer des économies de coûts, améliorer l\'innovation ou créer des complémentarités productives', 'iscorrect' => true],
                            ['answer' => Une concentration plus forte réduit toujours tous les coûts', 'iscorrect' => false],
                            ['answer' => Les fusions ne modifient jamais le pouvoir de marché', 'iscorrect' => false],
                            ['answer' => Les consommateurs bénéficient toujours d\'un prix plus élevé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une autorité de concurrence examine-t-elle les barrières à l\'entrée après une fusion ?',
                        'answers' => [
                            ['answer' => Des barrières élevées peuvent permettre au nouveau pouvoir de marché de persister plus longtemps', 'iscorrect' => true],
                            ['answer' => Les barrières éliminent toujours les profits', 'iscorrect' => false],
                            ['answer' => Les barrières garantissent toujours l\'entrée rapide de nouveaux concurrents', 'iscorrect' => false],
                            ['answer' => Elles n\'ont aucun rôle dans la concurrence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets de réseau peuvent-ils poser un défi à la politique de concurrence ?',
                        'answers' => [
                            ['answer' => Une entreprise dominante peut bénéficier d\'un avantage renforcé par la taille de son réseau, ce qui complique l\'entrée de concurrents', 'iscorrect' => true],
                            ['answer' => Les effets de réseau réduisent toujours la concentration', 'iscorrect' => false],
                            ['answer' => Les réseaux n\'influencent jamais les choix des utilisateurs', 'iscorrect' => false],
                            ['answer' => Ils garantissent automatiquement la concurrence parfaite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la politique de concurrence doit-elle tenir compte des gains d\'efficacité vérifiables ?',
                        'answers' => [
                            ['answer' => Une pratique qui réduit la concurrence peut néanmoins générer certains gains de coût ou d\'innovation qu\'il faut comparer aux dommages concurrentiels', 'iscorrect' => true],
                            ['answer' => Les gains d\'efficacité ne peuvent jamais exister dans une entreprise dominante', 'iscorrect' => false],
                            ['answer' => Toute réduction de concurrence est automatiquement bénéfique', 'iscorrect' => false],
                            ['answer' => Les gains d\'efficacité rendent les consommateurs indifférents aux prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'équité peut-elle nécessiter un critère différent de l\'efficacité dans une politique publique ?',
                        'answers' => [
                            ['answer' => Une politique peut accroître le surplus total tout en modifiant défavorablement sa répartition entre groupes', 'iscorrect' => true],
                            ['answer' => L\'efficacité garantit toujours l\'égalité', 'iscorrect' => false],
                            ['answer' => L\'équité n\'a aucune dimension économique', 'iscorrect' => false],
                            ['answer' => Une politique efficace profite toujours proportionnellement à tous', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est la plus solide pour évaluer une intervention microéconomique complexe ?',
                        'answers' => [
                            ['answer' => 'Comparer les effets d\'équilibre, les incitations, les coûts d\'opportunité, l\'efficacité, l\'équité et les réactions stratégiques', 'iscorrect' => true],
                            ['answer' => 'Mesurer uniquement le prix observé après la politique', 'iscorrect' => false],
                            ['answer' => 'Supposer que les agents ne modifient pas leur comportement', 'iscorrect' => false],
                            ['answer' => 'Ignorer les effets indirects et dynamiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Choix intertemporel, risque et décisions avancées',
                'questions' => [
                    [
                        'question' => 'Pourquoi l\'actualisation est-elle centrale dans les décisions intertemporelles ?',
                        'answers' => [
                            ['answer' => 'Elle permet de comparer des coûts et bénéfices intervenant à différentes dates en tenant compte de la valeur temporelle des ressources', 'iscorrect' => true],
                            ['answer' => 'Elle rend tous les flux futurs égaux aux flux présents', 'iscorrect' => false],
                            ['answer' => 'Elle élimine toute incertitude', 'iscorrect' => false],
                            ['answer' => 'Elle concerne uniquement les marchés financiers publics', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du taux d\'intérêt réel augmente-t-elle le coût d\'opportunité de la consommation actuelle ?',
                        'answers' => [
                            ['answer' => 'Une unité consommée aujourd\'hui représente davantage de consommation future à laquelle il faut renoncer', 'iscorrect' => true],
                            ['answer' => 'La consommation future devient toujours moins valorisée', 'iscorrect' => false],
                            ['answer' => 'Le revenu réel augmente toujours', 'iscorrect' => false],
                            ['answer' => 'L\'épargne devient sans rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'effet de substitution d\'une hausse du taux d\'intérêt encourage-t-il généralement l\'épargne ?',
                        'answers' => [
                            ['answer' => La consommation future devient relativement plus avantageuse par rapport à la consommation présente', 'iscorrect' => true],
                            ['answer' => 'La consommation présente devient moins coûteuse relativement à la future', 'iscorrect' => false],
                            ['answer' => 'Le revenu réel devient nécessairement nul', 'iscorrect' => false],
                            ['answer' => 'L\'épargne ne produit aucun rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'effet de revenu d\'une hausse du taux d\'intérêt peut-il réduire l\'épargne chez un épargnant ?',
                        'answers' => [
                            ['answer' => Une meilleure rémunération de l\'épargne peut accroître sa richesse intertemporelle et modifier le besoin d\'épargner', 'iscorrect' => true],
                            ['answer' => 'Le taux d\'intérêt réduit toujours la richesse de l\'épargnant', 'iscorrect' => false],
                            ['answer' => 'L\'épargne devient toujours impossible', 'iscorrect' => false],
                            ['answer' => 'La consommation future cesse d\'exister', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que l\'équivalent certain d\'une loterie pour un agent averse au risque ?',
                        'answers' => [
                            ['answer' => 'Le montant certain qui procure la même utilité que la loterie risquée', 'iscorrect' => true],
                            ['answer' => 'La valeur maximale de tous les gains possibles', 'iscorrect' => false],
                            ['answer' => 'Le montant correspondant toujours à l\'espérance mathématique', 'iscorrect' => false],
                            ['answer' => 'La perte maximale possible', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'équivalent certain est-il inférieur à l\'espérance monétaire pour un agent strictement averse au risque ?',
                        'answers' => [
                            ['answer' => La concavité de l\'utilité implique que l\'agent préfère le certain à un risque ayant la même espérance', 'iscorrect' => true],
                            ['answer' => 'L\'agent préfère toujours les loteries', 'iscorrect' => false],
                            ['answer' => 'L\'utilité est linéaire par définition', 'iscorrect' => false],
                            ['answer' => 'Les probabilités n\'entrent pas dans le calcul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la diversification peut-elle réduire le risque sans diminuer nécessairement le rendement espéré ?',
                        'answers' => [
                            ['answer' => 'Les risques spécifiques aux actifs peuvent se compenser lorsque leurs rendements ne sont pas parfaitement corrélés', 'iscorrect' => true],
                            ['answer' => 'La diversification augmente toujours le rendement espéré', 'iscorrect' => false],
                            ['answer' => 'Tous les actifs deviennent parfaitement indépendants', 'iscorrect' => false],
                            ['answer' => 'Le risque systématique disparaît toujours', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'information parfaite modifie-t-elle la valeur économique de l\'assurance ?',
                        'answers' => [
                            ['answer' => Une information parfaite sur les risques peut réduire certaines asymétries et changer la tarification des contrats', 'iscorrect' => true],
                            ['answer' => 'L\'assurance devient toujours inutile', 'iscorrect' => false],
                            ['answer' => 'Le risque disparaît toujours avec l\'information', 'iscorrect' => false],
                            ['answer' => 'Les préférences cessent d\'exister', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un individu peut-il choisir un portefeuille moins diversifié que celui recommandé par un modèle standard ?',
                        'answers' => [
                            ['answer' => 'Il peut avoir des contraintes, des préférences, des informations ou des coûts de transaction absents du modèle simplifié', 'iscorrect' => true],
                            ['answer' => 'La diversification est toujours irrationnelle', 'iscorrect' => false],
                            ['answer' => 'Les actifs sont toujours parfaitement corrélés', 'iscorrect' => false],
                            ['answer' => 'Les préférences n\'affectent jamais les choix sous risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'incertitude peut-elle modifier les décisions d\'investissement d\'une entreprise ?',
                        'answers' => [
                            ['answer' => 'L\'irréversibilité, l\'incertitude et la possibilité d\'attendre peuvent donner une valeur à l\'option de retarder l\'investissement', 'iscorrect' => true],
                            ['answer' => 'L\'incertitude accélère toujours tous les investissements', 'iscorrect' => false],
                            ['answer' => 'L\'incertitude n\'a aucun effet sur les projets irréversibles', 'iscorrect' => false],
                            ['answer' => 'Le coût d\'opportunité disparaît en présence de risque', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Économie industrielle, innovation et plateformes',
                'questions' => [
                    [
                        'question' => 'Pourquoi les effets de réseau directs peuvent-ils produire des marchés où le gagnant prend une grande part du marché ?',
                        'answers' => [
                            ['answer' => 'Une base d\'utilisateurs plus importante peut rendre la plateforme plus attractive et renforcer son avantage initial', 'iscorrect' => true],
                            ['answer' => 'Les utilisateurs préfèrent toujours les réseaux plus petits', 'iscorrect' => false],
                            ['answer' => 'Les coûts de changement sont nécessairement nuls', 'iscorrect' => false],
                            ['answer' => 'Les effets de réseau réduisent toujours la concentration', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets de réseau indirects sont-ils importants sur une plateforme multi-faces ?',
                        'answers' => [
                            ['answer' => La présence d\'un groupe d\'utilisateurs peut augmenter la valeur de la plateforme pour un autre groupe', 'iscorrect' => true],
                            ['answer' => 'Les deux groupes n\'interagissent jamais économiquement', 'iscorrect' => false],
                            ['answer' => 'La demande de chaque côté est toujours indépendante', 'iscorrect' => false],
                            ['answer' => 'La plateforme ne peut jamais modifier ses prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une plateforme peut-elle subventionner un côté du marché ?',
                        'answers' => [
                            ['answer' => 'Attirer un groupe peut augmenter la valeur de la plateforme et les revenus générés par l\'autre côté', 'iscorrect' => true],
                            ['answer' => 'Toutes les plateformes doivent faire payer le même prix à tous', 'iscorrect' => false],
                            ['answer' => 'Les effets de réseau sont absents', 'iscorrect' => false],
                            ['answer' => 'La subvention réduit toujours la taille du réseau', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts de changement constituent-ils une source de pouvoir de marché ?',
                        'answers' => [
                            ['answer' => 'Ils rendent les consommateurs moins susceptibles de quitter le fournisseur existant après une hausse de prix', 'iscorrect' => true],
                            ['answer' => 'Ils rendent les concurrents automatiquement plus productifs', 'iscorrect' => false],
                            ['answer' => 'Ils réduisent nécessairement les marges', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent la fidélité des clients', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les brevets peuvent-ils avoir un rôle ambivalent ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent encourager l\'innovation en protégeant les rendements tout en créant temporairement un pouvoir de marché', 'iscorrect' => true],
                            ['answer' => 'Ils éliminent toujours le pouvoir de marché', 'iscorrect' => false],
                            ['answer' => 'Ils empêchent toute innovation', 'iscorrect' => false],
                            ['answer' => 'Ils garantissent une diffusion instantanée de la technologie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la concurrence peut-elle stimuler l\'innovation ?',
                        'answers' => [
                            ['answer' => 'Les entreprises peuvent chercher à innover pour réduire les coûts, différencier leurs produits ou éviter d\'être dépassées', 'iscorrect' => true],
                            ['answer' => 'La concurrence élimine toujours les profits nécessaires à l\'innovation', 'iscorrect' => false],
                            ['answer' => 'Les entreprises innovent uniquement lorsqu\'elles sont monopolistiques', 'iscorrect' => false],
                            ['answer' => 'L\'innovation est indépendante de toute incitation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un marché dominant peut-il devenir difficile à contester même sans barrières réglementaires explicites ?',
                        'answers' => [
                            ['answer' => 'Les économies d\'échelle, les effets de réseau, les données et les coûts de changement peuvent créer des barrières endogènes', 'iscorrect' => true],
                            ['answer' => 'L\'entrée est toujours impossible juridiquement', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs n\'ont jamais de préférences', 'iscorrect' => false],
                            ['answer' => 'Les nouveaux entrants disposent toujours des mêmes avantages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'interoperabilité peut-elle réduire le pouvoir de marché d\'une plateforme ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire les coûts de changement et faciliter la concurrence entre services', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours les coûts pour les consommateurs', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les effets de réseau dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Elle rend les plateformes parfaitement monopolistiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les acquisitions de jeunes entreprises innovantes peuvent-elles attirer l\'attention des autorités de concurrence ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent éliminer un concurrent potentiel ou modifier la trajectoire future de l\'innovation', 'iscorrect' => true],
                            ['answer' => 'Toute acquisition est nécessairement anticoncurrentielle', 'iscorrect' => false],
                            ['answer' => 'Les jeunes entreprises ne peuvent jamais devenir concurrentes', 'iscorrect' => false],
                            ['answer' => 'L\'innovation n\'a aucun lien avec la concurrence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse de concurrence numérique ne doit-elle pas se limiter aux prix ?',
                        'answers' => [
                            ['answer' => 'La qualité, la confidentialité, les données, l\'innovation et les coûts de changement peuvent être des dimensions importantes de la concurrence', 'iscorrect' => true],
                            ['answer' => 'Les prix sont toujours inexistants dans le numérique', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs ne valorisent jamais la qualité', 'iscorrect' => false],
                            ['answer' => 'Les données n\'ont aucune valeur économique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse microéconomique professionnelle des politiques publiques',
                'questions' => [
                    [
                        'question' => 'Pourquoi une analyse d\'impact réglementaire doit-elle comparer le scénario avec et sans intervention ?',
                        'answers' => [
                            ['answer' => 'Pour estimer le véritable effet causal ou contrefactuel de la politique', 'iscorrect' => true],
                            ['answer' => 'Pour garantir que la réglementation aura un effet positif', 'iscorrect' => false],
                            ['answer' => 'Pour éviter toute collecte de données', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer les effets indirects', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets de second tour sont-ils importants dans une politique de prix ?',
                        'answers' => [
                            ['answer' => 'Les agents peuvent modifier leurs quantités, leurs investissements, leurs contrats et leurs comportements après le changement initial', 'iscorrect' => true],
                            ['answer' => 'Les effets indirects n\'existent jamais', 'iscorrect' => false],
                            ['answer' => 'Les agents gardent toujours leurs choix initiaux', 'iscorrect' => false],
                            ['answer' => 'Les marchés sont indépendants des incitations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'analyse marginale est-elle particulièrement utile pour déterminer la taille optimale d\'une politique ?',
                        'answers' => [
                            ['answer' => 'Elle compare le bénéfice et le coût de l\'unité supplémentaire d\'intervention', 'iscorrect' => true],
                            ['answer' => 'Elle élimine les coûts fixes de l\'État', 'iscorrect' => false],
                            ['answer' => 'Elle mesure uniquement les effets historiques', 'iscorrect' => false],
                            ['answer' => 'Elle suppose que les ressources sont illimitées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique peut-elle être efficace mais politiquement difficile à mettre en œuvre ?',
                        'answers' => [
                            ['answer' => 'Les gains agrégés peuvent être diffus tandis que les pertes pour certains groupes sont concentrées', 'iscorrect' => true],
                            ['answer' => 'Une politique efficace bénéficie toujours immédiatement à tous', 'iscorrect' => false],
                            ['answer' => 'L\'efficacité implique toujours l\'unanimité politique', 'iscorrect' => false],
                            ['answer' => 'Les groupes affectés ne réagissent jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'équité horizontale et l\'équité verticale sont-elles distinctes ?',
                        'answers' => [
                            ['answer' => 'L\'équité horizontale traite de situations comparables entre personnes semblables, tandis que l\'équité verticale concerne la différence de traitement entre personnes de capacités ou situations différentes', 'iscorrect' => true],
                            ['answer' => 'Les deux notions sont identiques', 'iscorrect' => false],
                            ['answer' => 'L\'équité horizontale concerne uniquement les entreprises', 'iscorrect' => false],
                            ['answer' => 'L\'équité verticale concerne uniquement les importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'élasticité peut-elle être essentielle pour calibrer une taxe environnementale ?',
                        'answers' => [
                            ['answer' => 'Elle influence la réponse des quantités et donc l\'efficacité et les recettes de la taxe', 'iscorrect' => true],
                            ['answer' => 'Elle détermine uniquement la population concernée', 'iscorrect' => false],
                            ['answer' => 'Une taxe est indépendante de toute réaction comportementale', 'iscorrect' => false],
                            ['answer' => 'Les quantités restent nécessairement constantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe uniforme peut-elle être moins efficace qu\'une taxe différenciée dans certains cas ?',
                        'answers' => [
                            ['answer' => 'Les dommages marginaux peuvent différer selon les activités, les technologies ou les agents', 'iscorrect' => true],
                            ['answer' => 'Les externalités sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Une taxe uniforme garantit toujours l\'optimum', 'iscorrect' => false],
                            ['answer' => 'Les entreprises répondent toutes de façon identique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contraintes informationnelles limitent-elles la capacité de l\'État à atteindre un optimum théorique ?',
                        'answers' => [
                            ['answer' => 'Le régulateur peut ne pas connaître précisément les coûts, préférences, technologies ou dommages pertinents', 'iscorrect' => true],
                            ['answer' => 'L\'État possède toujours une information complète', 'iscorrect' => false],
                            ['answer' => 'Les agents privés ne possèdent aucune information', 'iscorrect' => false],
                            ['answer' => 'Les données économiques sont toujours parfaitement observables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la conception d\'une politique doit-elle tenir compte des réactions stratégiques ?',
                        'answers' => [
                            ['answer' => 'Les entreprises et individus peuvent modifier leur comportement pour profiter ou s\'adapter aux règles adoptées', 'iscorrect' => true],
                            ['answer' => 'Les agents acceptent toujours les règles sans adaptation', 'iscorrect' => false],
                            ['answer' => 'Les politiques ne changent jamais les incitations', 'iscorrect' => false],
                            ['answer' => 'Les stratégies n\'existent que dans les marchés financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche correspond le mieux à une évaluation microéconomique professionnelle ?',
                        'answers' => [
                            ['answer' => 'Combiner théorie, données, contrefactuel, analyse marginale, réactions comportementales, effets distributifs et incertitude', 'iscorrect' => true],
                            ['answer' => 'Utiliser uniquement une comparaison descriptive avant-après', 'iscorrect' => false],
                            ['answer' => 'Ignorer les coûts d\'opportunité', 'iscorrect' => false],
                            ['answer' => 'Supposer que les agents ne modifient jamais leurs décisions', 'iscorrect' => false],
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
