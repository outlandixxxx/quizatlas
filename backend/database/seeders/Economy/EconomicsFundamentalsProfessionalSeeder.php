```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconomicsFundamentalsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'economics-fundamentals')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Économie avancée, efficacité et allocation des ressources',
                'questions' => [
                    [
                        'question' => 'Dans un cadre concurrentiel sans externalité, quelle condition caractérise l\'efficacité allocative ?',
                        'answers' => [
                            ['answer' => 'Le bénéfice marginal social est égal au coût marginal social au niveau efficace de production', 'iscorrect' => true],
                            ['answer' => 'Le prix est nécessairement égal au coût fixe moyen', 'iscorrect' => false],
                            ['answer' => 'Toutes les entreprises réalisent le même profit économique', 'iscorrect' => false],
                            ['answer' => 'Le surplus du producteur est toujours supérieur au surplus du consommateur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un marché concurrentiel peut-il être inefficace en présence d\'une externalité négative ?',
                        'answers' => [
                            ['answer' => 'Le coût social marginal peut être supérieur au coût privé marginal pris en compte par les agents', 'iscorrect' => true],
                            ['answer' => 'Le prix reflète toujours parfaitement le dommage externe', 'iscorrect' => false],
                            ['answer' => 'La demande privée devient nécessairement nulle', 'iscorrect' => false],
                            ['answer' => 'Les producteurs supportent toujours tous les coûts sociaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que l\'efficacité de Pareto ?',
                        'answers' => [
                            ['answer' => Une situation dans laquelle il est impossible d\'améliorer le bien-être d\'un agent sans réduire celui d\'au moins un autre', 'iscorrect' => true],
                            ['answer' => Une situation où les revenus sont parfaitement égaux', 'iscorrect' => false],
                            ['answer' => 'Une situation où le gouvernement fixe tous les prix', 'iscorrect' => false],
                            ['answer' => 'Une situation où tous les consommateurs obtiennent la même quantité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une allocation efficace n\'implique-t-elle pas nécessairement une répartition équitable ?',
                        'answers' => [
                            ['answer' => 'L\'efficacité concerne la taille des gains totaux, alors que l\'équité concerne notamment leur répartition', 'iscorrect' => true],
                            ['answer' => 'Efficacité et équité sont toujours strictement identiques', 'iscorrect' => false],
                            ['answer' => 'Une allocation efficace garantit toujours l\'égalité des revenus', 'iscorrect' => false],
                            ['answer' => 'L\'équité ne dépend jamais des institutions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente la disposition marginale à payer d\'un consommateur ?',
                        'answers' => [
                            ['answer' => 'La valeur maximale qu\'il attribue à une unité supplémentaire du bien dans les conditions considérées', 'iscorrect' => true],
                            ['answer' => 'Son revenu mensuel total', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal du producteur', 'iscorrect' => false],
                            ['answer' => 'Le montant de sa fiscalité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'échange volontaire peut-il créer un gain mutuel ?',
                        'answers' => [
                            ['answer' => 'Les évaluations relatives d\'un bien peuvent différer entre les parties', 'iscorrect' => true],
                            ['answer' => 'Les ressources deviennent illimitées après l\'échange', 'iscorrect' => false],
                            ['answer' => 'Les coûts de transaction sont toujours nuls', 'iscorrect' => false],
                            ['answer' => 'Toutes les parties évaluent toujours les biens de la même manière', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut survenir lorsqu\'un prix plafond est durablement inférieur au prix d\'équilibre ?',
                        'answers' => [
                            ['answer' => 'Des mécanismes de rationnement non-prix, des pénuries et éventuellement des marchés parallèles peuvent apparaître', 'iscorrect' => true],
                            ['answer' => 'Le surplus total augmente nécessairement', 'iscorrect' => false],
                            ['answer' => 'L\'offre augmente immédiatement au même niveau', 'iscorrect' => false],
                            ['answer' => 'Les coûts sociaux disparaissent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe peut-elle générer une perte sèche plus importante lorsque l\'offre et la demande sont relativement élastiques ?',
                        'answers' => [
                            ['answer' => 'La taxe réduit davantage la quantité échangée lorsque les agents réagissent fortement aux prix', 'iscorrect' => true],
                            ['answer' => 'La demande ne réagit jamais aux prix', 'iscorrect' => false],
                            ['answer' => 'Les producteurs absorbent toujours 100 % de la taxe', 'iscorrect' => false],
                            ['answer' => 'Les quantités échangées augmentent sous l\'effet de la taxe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une subvention peut-elle créer une perte d\'efficacité dans certains marchés ?',
                        'answers' => [
                            ['answer' => 'Elle peut encourager une production ou une consommation dont le coût marginal social dépasse le bénéfice marginal social', 'iscorrect' => true],
                            ['answer' => 'Toute subvention est toujours efficace', 'iscorrect' => false],
                            ['answer' => 'Une subvention réduit toujours la quantité échangée', 'iscorrect' => false],
                            ['answer' => 'Elle supprime nécessairement les externalités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût d\'opportunité est-il central dans l\'évaluation des politiques publiques ?',
                        'answers' => [
                            ['answer' => Les ressources publiques utilisées pour un projet ne peuvent plus être utilisées simultanément pour leur meilleure alternative', 'iscorrect' => true],
                            ['answer' => 'Les dépenses publiques n\'ont jamais d\'alternative', 'iscorrect' => false],
                            ['answer' => 'Le coût d\'opportunité correspond toujours au coût comptable', 'iscorrect' => false],
                            ['answer' => 'Il ne concerne que les ménages', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Organisation industrielle et stratégie concurrentielle',
                'questions' => [
                    [
                        'question' => 'Pourquoi les entreprises d\'un oligopole doivent-elles intégrer les réactions de leurs concurrents dans leurs décisions ?',
                        'answers' => [
                            ['answer' => 'Leur propre décision peut modifier les stratégies optimales des autres entreprises et réciproquement', 'iscorrect' => true],
                            ['answer' => 'Les concurrents ne réagissent jamais aux prix', 'iscorrect' => false],
                            ['answer' => 'Chaque entreprise fait face à une demande parfaitement indépendante', 'iscorrect' => false],
                            ['answer' => 'L\'oligopole fonctionne exactement comme un marché sans interaction stratégique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe d\'un équilibre de Nash dans un jeu simultané ?',
                        'answers' => [
                            ['answer' => Chaque joueur choisit une stratégie qui est optimale compte tenu des stratégies des autres', 'iscorrect' => true],
                            ['answer' => 'Tous les joueurs doivent obtenir le même gain', 'iscorrect' => false],
                            ['answer' => 'Le résultat doit nécessairement maximiser le bien-être collectif', 'iscorrect' => false],
                            ['answer' => 'Les joueurs choisissent leurs stratégies au hasard', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un équilibre de Nash peut-il être inefficace du point de vue collectif ?',
                        'answers' => [
                            ['answer' => 'Les incitations individuelles peuvent conduire à un résultat inférieur à une alternative coopérative ou coordonnée', 'iscorrect' => true],
                            ['answer' => 'Un équilibre de Nash maximise toujours le surplus total', 'iscorrect' => false],
                            ['answer' => 'Les joueurs n\'ont aucune préférence', 'iscorrect' => false],
                            ['answer' => 'La concurrence disparaît toujours', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les jeux répétés peuvent-ils favoriser la coopération entre entreprises ?',
                        'answers' => [
                            ['answer' => 'La perspective de futures interactions peut rendre les représailles crédibles contre une déviation de la coopération', 'iscorrect' => true],
                            ['answer' => 'Les entreprises deviennent automatiquement altruistes', 'iscorrect' => false],
                            ['answer' => 'Les prix deviennent fixes pour toujours', 'iscorrect' => false],
                            ['answer' => 'Les concurrents cessent d\'observer les marchés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut faciliter la collusion tacite ?',
                        'answers' => [
                            ['answer' => Un nombre réduit d\'entreprises, des interactions fréquentes et une forte transparence des prix', 'iscorrect' => true],
                            ['answer' => 'Un grand nombre de concurrents atomisés dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Une absence totale d\'information', 'iscorrect' => false],
                            ['answer' => 'Une demande parfaitement instable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les barrières stratégiques à l\'entrée peuvent-elles être utilisées par une entreprise dominante ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent réduire la probabilité d\'entrée et protéger les profits futurs', 'iscorrect' => true],
                            ['answer' => 'Elles garantissent que la demande disparaît', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment tous les coûts fixes', 'iscorrect' => false],
                            ['answer' => 'Elles rendent automatiquement l\'entreprise preneuse de prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un prix prédateur ?',
                        'answers' => [
                            ['answer' => 'Un prix fixé à un niveau suffisamment bas pour chercher à évincer ou discipliner des concurrents dans certaines stratégies', 'iscorrect' => true],
                            ['answer' => 'Un prix toujours supérieur au coût marginal', 'iscorrect' => false],
                            ['answer' => 'Un prix fixé par les consommateurs', 'iscorrect' => false],
                            ['answer' => 'Un prix nécessairement réglementé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une fusion peut-elle créer à la fois des gains d\'efficacité et des risques concurrentiels ?',
                        'answers' => [
                            ['answer' => 'Elle peut générer des économies de coûts tout en augmentant le pouvoir de marché', 'iscorrect' => true],
                            ['answer' => 'Une fusion réduit toujours les coûts et les prix', 'iscorrect' => false],
                            ['answer' => 'Une fusion ne change jamais le degré de concentration', 'iscorrect' => false],
                            ['answer' => 'Une fusion supprime automatiquement toute concurrence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux de concentration d\'un marché est-il surveillé par les autorités de concurrence ?',
                        'answers' => [
                            ['answer' => 'Une concentration élevée peut signaler un risque accru de pouvoir de marché ou de comportement coordonné', 'iscorrect' => true],
                            ['answer' => 'Une concentration élevée garantit toujours une concurrence plus forte', 'iscorrect' => false],
                            ['answer' => 'La concentration mesure directement le PIB', 'iscorrect' => false],
                            ['answer' => 'Les marchés concentrés n\'ont jamais de gains d\'efficacité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'innovation peut-elle rendre l\'analyse concurrentielle dynamique plutôt que statique ?',
                        'answers' => [
                            ['answer' => 'Une innovation peut modifier les coûts, les préférences, les barrières à l\'entrée et les positions concurrentielles dans le temps', 'iscorrect' => true],
                            ['answer' => 'L\'innovation ne change jamais la structure des marchés', 'iscorrect' => false],
                            ['answer' => 'Les entreprises innovantes perdent automatiquement leur pouvoir de marché', 'iscorrect' => false],
                            ['answer' => 'Les coûts deviennent toujours identiques après une innovation', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Marché du travail, capital humain et inégalités',
                'questions' => [
                    [
                        'question' => 'Dans un modèle concurrentiel simple, la demande de travail dépend notamment de :',
                        'answers' => [
                            ['answer' => 'La productivité marginale du travail et la valeur de la production supplémentaire qu\'il permet de générer', 'iscorrect' => true],
                            ['answer' => 'Uniquement du taux de natalité', 'iscorrect' => false],
                            ['answer' => 'Uniquement du niveau des impôts sur le patrimoine', 'iscorrect' => false],
                            ['answer' => 'Uniquement des exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du capital humain peut-elle modifier la structure des salaires ?',
                        'answers' => [
                            ['answer' => 'Elle peut augmenter la productivité de certains travailleurs et accroître la demande de compétences spécifiques', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours les salaires des travailleurs qualifiés', 'iscorrect' => false],
                            ['answer' => 'Elle supprime nécessairement la demande de travail', 'iscorrect' => false],
                            ['answer' => 'Elle rend toutes les compétences parfaitement substituables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que le salaire réel ?',
                        'answers' => [
                            ['answer' => 'Le salaire exprimé en termes de quantité de biens et services qu\'il permet d\'acheter', 'iscorrect' => true],
                            ['answer' => 'Le salaire nominal avant toute conversion monétaire', 'iscorrect' => false],
                            ['answer' => 'Le chiffre d\'affaires d\'un salarié', 'iscorrect' => false],
                            ['answer' => 'Le salaire après impôt uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'inflation peut-elle réduire le salaire réel lorsque les salaires nominaux sont rigides à court terme ?',
                        'answers' => [
                            ['answer' => 'Les prix augmentent alors que la rémunération nominale ne s\'ajuste pas au même rythme', 'iscorrect' => true],
                            ['answer' => 'Les salaires nominaux augmentent toujours plus vite que les prix', 'iscorrect' => false],
                            ['answer' => 'L\'inflation ne touche jamais les biens de consommation', 'iscorrect' => false],
                            ['answer' => 'Le pouvoir d\'achat augmente automatiquement avec l\'inflation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence existe entre chômage frictionnel et chômage structurel ?',
                        'answers' => [
                            ['answer' => 'Le chômage frictionnel provient notamment des transitions entre emplois, tandis que le chômage structurel reflète des inadéquations plus durables entre compétences et emplois', 'iscorrect' => true],
                            ['answer' => 'Les deux concepts désignent exactement le même phénomène', 'iscorrect' => false],
                            ['answer' => 'Le chômage structurel est uniquement saisonnier', 'iscorrect' => false],
                            ['answer' => 'Le chômage frictionnel est toujours causé par une récession', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi des marchés du travail avec recherche d\'emploi peuvent-ils générer un chômage de transition même en période de bonne activité ?',
                        'answers' => [
                            ['answer' => 'La rencontre entre entreprises et travailleurs prend du temps et l\'information est imparfaite', 'iscorrect' => true],
                            ['answer' => 'Tous les emplois sont immédiatement accessibles', 'iscorrect' => false],
                            ['answer' => 'Les travailleurs ne recherchent jamais d\'emploi', 'iscorrect' => false],
                            ['answer' => 'Les entreprises connaissent parfaitement tous les candidats', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un salaire d\'efficience ?',
                        'answers' => [
                            ['answer' => 'Un salaire supérieur au niveau qui égaliserait nécessairement l\'offre et la demande, destiné notamment à améliorer productivité ou rétention', 'iscorrect' => true],
                            ['answer' => 'Un salaire fixé obligatoirement par la banque centrale', 'iscorrect' => false],
                            ['answer' => 'Un salaire toujours inférieur au salaire de marché', 'iscorrect' => false],
                            ['answer' => 'Un salaire versé uniquement aux dirigeants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les asymétries d\'information peuvent-elles influencer le marché du travail ?',
                        'answers' => [
                            ['answer' => L\'employeur peut difficilement observer parfaitement la productivité ou l\'effort du travailleur', 'iscorrect' => true],
                            ['answer' => 'La productivité est toujours parfaitement observable', 'iscorrect' => false],
                            ['answer' => 'Les salariés connaissent toujours toutes les informations financières de l\'entreprise', 'iscorrect' => false],
                            ['answer' => 'Les marchés du travail n\'ont jamais de contrats', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la répartition des revenus peut-elle différer entre pays ayant un niveau de PIB similaire ?',
                        'answers' => [
                            ['answer' => 'Les institutions, systèmes fiscaux, structures sectorielles et dotations en compétences peuvent différer', 'iscorrect' => true],
                            ['answer' => 'Le PIB détermine toujours parfaitement la distribution des revenus', 'iscorrect' => false],
                            ['answer' => 'Les politiques publiques n\'affectent jamais les revenus', 'iscorrect' => false],
                            ['answer' => 'Tous les marchés du travail sont identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'inégalité des revenus ne peut-elle pas être évaluée uniquement par le revenu moyen ?',
                        'answers' => [
                            ['answer' => 'Une même moyenne peut correspondre à des distributions très différentes des revenus entre les ménages', 'iscorrect' => true],
                            ['answer' => 'Le revenu moyen mesure parfaitement toutes les inégalités', 'iscorrect' => false],
                            ['answer' => 'Les distributions de revenus sont toujours symétriques', 'iscorrect' => false],
                            ['answer' => 'Le revenu moyen ne peut jamais être calculé', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Macroéconomie monétaire et transmission des politiques',
                'questions' => [
                    [
                        'question' => 'Pourquoi une banque centrale relève-t-elle généralement son taux directeur pour lutter contre une inflation trop élevée ?',
                        'answers' => [
                            ['answer' => 'Pour resserrer les conditions financières et réduire progressivement les pressions de demande', 'iscorrect' => true],
                            ['answer' => 'Pour augmenter automatiquement les dépenses publiques', 'iscorrect' => false],
                            ['answer' => 'Pour déprécier nécessairement la monnaie', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer le crédit bancaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment un taux directeur plus élevé peut-il influencer la consommation des ménages ?',
                        'answers' => [
                            ['answer' => 'Il peut augmenter le coût de l\'emprunt et encourager davantage l\'épargne, réduisant certaines dépenses', 'iscorrect' => true],
                            ['answer' => 'Il augmente toujours la consommation', 'iscorrect' => false],
                            ['answer' => 'Il n\'a aucun effet sur les conditions de crédit', 'iscorrect' => false],
                            ['answer' => 'Il rend tous les biens moins chers instantanément', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment la politique monétaire peut-elle affecter l\'investissement ?',
                        'answers' => [
                            ['answer' => Une variation du coût du capital peut modifier le nombre de projets dont la rentabilité dépasse le coût de financement', 'iscorrect' => true],
                            ['answer' => 'Les entreprises investissent toujours indépendamment des taux', 'iscorrect' => false],
                            ['answer' => 'L\'investissement dépend uniquement des exportations', 'iscorrect' => false],
                            ['answer' => 'Les taux n\'affectent jamais les flux de trésorerie futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le canal du crédit est-il important dans la transmission monétaire ?',
                        'answers' => [
                            ['answer' => 'Les variations des conditions de financement peuvent influencer la quantité et le coût des crédits accordés aux ménages et aux entreprises', 'iscorrect' => true],
                            ['answer' => 'Le crédit est indépendant des banques', 'iscorrect' => false],
                            ['answer' => 'Les banques ne modifient jamais leurs critères de prêt', 'iscorrect' => false],
                            ['answer' => 'Le crédit n\'a aucun effet sur l\'activité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux de change peut-il constituer un canal supplémentaire de transmission monétaire ?',
                        'answers' => [
                            ['answer' => Les variations de taux peuvent influencer les flux de capitaux, le taux de change, les importations et les exportations', 'iscorrect' => true],
                            ['answer' => 'Les taux n\'affectent jamais les devises', 'iscorrect' => false],
                            ['answer' => 'Le commerce extérieur est indépendant des prix relatifs', 'iscorrect' => false],
                            ['answer' => 'Les importations ne réagissent jamais au taux de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les anticipations sont-elles centrales dans une politique monétaire crédible ?',
                        'answers' => [
                            ['answer' => 'Elles influencent les décisions actuelles et la façon dont les agents intègrent la politique future dans leurs prix et contrats', 'iscorrect' => true],
                            ['answer' => 'Les anticipations n\'ont aucun effet avant que les décisions soient prises', 'iscorrect' => false],
                            ['answer' => 'Elles déterminent automatiquement le PIB futur', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent complètement les taux directeurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une politique monétaire non conventionnelle ?',
                        'answers' => [
                            ['answer' => 'Une mesure utilisée lorsque les instruments traditionnels sont insuffisants ou fortement contraints, comme certains achats d\'actifs ou facilités spécifiques', 'iscorrect' => true],
                            ['answer' => 'Une politique sans lien avec la monnaie', 'iscorrect' => false],
                            ['answer' => 'Une politique qui interdit les banques commerciales', 'iscorrect' => false],
                            ['answer' => 'Une politique réservée exclusivement au commerce extérieur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale ne peut-elle pas toujours contrôler parfaitement l\'inflation à court terme ?',
                        'answers' => [
                            ['answer' => Certains déterminants de l\'inflation proviennent de chocs d\'offre, de prix mondiaux ou de facteurs hors de son contrôle direct', 'iscorrect' => true],
                            ['answer' => 'La banque centrale contrôle tous les prix individuellement', 'iscorrect' => false],
                            ['answer' => 'Les taux directeurs n\'ont aucun délai de transmission', 'iscorrect' => false],
                            ['answer' => 'Les anticipations sont toujours fixes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un resserrement monétaire peut-il produire un arbitrage entre inflation et activité ?',
                        'answers' => [
                            ['answer' => 'Réduire la demande pour contenir l\'inflation peut également ralentir la production et l\'emploi à court terme', 'iscorrect' => true],
                            ['answer' => 'Le resserrement augmente toujours la production', 'iscorrect' => false],
                            ['answer' => 'L\'inflation baisse toujours sans coût économique', 'iscorrect' => false],
                            ['answer' => 'Le chômage est totalement indépendant de la demande', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les délais de transmission rendent-ils la politique monétaire prospective ?',
                        'answers' => [
                            ['answer' => 'Les décisions prises aujourd\'hui influencent l\'économie progressivement, ce qui exige d\'anticiper les conditions futures', 'iscorrect' => true],
                            ['answer' => 'Les effets apparaissent toujours instantanément', 'iscorrect' => false],
                            ['answer' => 'Les politiques monétaires n\'ont aucun effet retardé', 'iscorrect' => false],
                            ['answer' => 'L\'inflation future est parfaitement connue', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Commerce international, change et interdépendance',
                'questions' => [
                    [
                        'question' => 'Pourquoi un pays peut-il importer un bien même s\'il possède un avantage absolu dans sa production ?',
                        'answers' => [
                            ['answer' => 'Il peut avoir un coût d\'opportunité plus élevé dans ce bien et donc un avantage comparatif dans un autre', 'iscorrect' => true],
                            ['answer' => 'L\'avantage absolu interdit toujours les échanges', 'iscorrect' => false],
                            ['answer' => 'Les importations sont toujours moins chères', 'iscorrect' => false],
                            ['answer' => 'Le pays ne peut jamais exporter en même temps', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les termes de l\'échange sont-ils importants pour un pays ?',
                        'answers' => [
                            ['answer' => 'Ils indiquent notamment le rapport entre les prix des exportations et ceux des importations', 'iscorrect' => true],
                            ['answer' => 'Ils mesurent directement le chômage', 'iscorrect' => false],
                            ['answer' => 'Ils représentent uniquement la balance budgétaire', 'iscorrect' => false],
                            ['answer' => 'Ils déterminent directement le PIB potentiel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation de la monnaie peut-elle améliorer la compétitivité extérieure seulement sous certaines conditions ?',
                        'answers' => [
                            ['answer' => 'L\'effet sur les exportations et les importations dépend des élasticités des volumes aux variations de prix relatifs', 'iscorrect' => true],
                            ['answer' => 'Une monnaie plus faible augmente toujours les importations', 'iscorrect' => false],
                            ['answer' => 'Les quantités échangées ne dépendent jamais des prix', 'iscorrect' => false],
                            ['answer' => 'La balance commerciale augmente toujours immédiatement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que la courbe en J décrit généralement ?',
                        'answers' => [
                            ['answer' => 'La possibilité d\'une détérioration initiale de la balance commerciale après une dépréciation avant une amélioration ultérieure', 'iscorrect' => true],
                            ['answer' => 'L\'évolution du chômage après une récession', 'iscorrect' => false],
                            ['answer' => 'La relation entre inflation et salaire réel', 'iscorrect' => false],
                            ['answer' => 'La croissance de la population active', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les chaînes de valeur mondiales peuvent-elles accroître la transmission des chocs internationaux ?',
                        'answers' => [
                            ['answer' => 'Une rupture d\'approvisionnement dans un pays peut perturber la production dans plusieurs autres pays', 'iscorrect' => true],
                            ['answer' => 'Les économies deviennent complètement indépendantes', 'iscorrect' => false],
                            ['answer' => 'Les importations cessent d\'être nécessaires', 'iscorrect' => false],
                            ['answer' => 'Les chocs locaux ne se transmettent jamais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse des droits de douane peut-elle avoir des effets ambigus sur l\'économie nationale ?',
                        'answers' => [
                            ['answer' => 'Elle peut protéger certains producteurs tout en augmentant les coûts pour certains consommateurs et entreprises utilisant des intrants importés', 'iscorrect' => true],
                            ['answer' => 'Elle bénéficie toujours à tous les agents', 'iscorrect' => false],
                            ['answer' => 'Elle réduit nécessairement tous les prix intérieurs', 'iscorrect' => false],
                            ['answer' => 'Elle augmente toujours la productivité totale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contrôles de capitaux peuvent-ils affecter le taux de change ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent modifier les flux internationaux de capitaux et donc l\'offre et la demande de monnaie', 'iscorrect' => true],
                            ['answer' => 'Les capitaux ne jouent aucun rôle sur le change', 'iscorrect' => false],
                            ['answer' => 'Ils fixent directement le prix de chaque bien', 'iscorrect' => false],
                            ['answer' => 'Ils suppriment les importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les flux de capitaux peuvent-ils rendre une économie vulnérable à un sudden stop ?',
                        'answers' => [
                            ['answer' => 'Une interruption brutale des entrées de capitaux peut provoquer des tensions de financement et une forte dépréciation', 'iscorrect' => true],
                            ['answer' => 'Les sorties de capitaux augmentent toujours les réserves', 'iscorrect' => false],
                            ['answer' => 'Les flux de capitaux sont toujours stables', 'iscorrect' => false],
                            ['answer' => 'La dépréciation améliore automatiquement tous les secteurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dette extérieure en monnaie étrangère peut-elle être risquée après une dépréciation ?',
                        'answers' => [
                            ['answer' => 'La valeur de la dette en monnaie domestique augmente lorsque la devise étrangère devient plus chère', 'iscorrect' => true],
                            ['answer' => 'La dette devient automatiquement moins importante', 'iscorrect' => false],
                            ['answer' => 'Le taux de change ne modifie jamais le service de la dette', 'iscorrect' => false],
                            ['answer' => 'Les exportations cessent nécessairement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le commerce international peut-il créer des gagnants et des perdants à l\'intérieur d\'un pays ?',
                        'answers' => [
                            ['answer' => 'Les facteurs de production et les secteurs ne bénéficient pas tous de la même manière de la spécialisation et de la concurrence internationale', 'iscorrect' => true],
                            ['answer' => 'Tous les travailleurs bénéficient toujours exactement de la même manière', 'iscorrect' => false],
                            ['answer' => 'Le commerce ne modifie jamais les prix relatifs', 'iscorrect' => false],
                            ['answer' => 'Les importations n\'affectent jamais la production nationale', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Développement économique, institutions et politiques publiques',
                'questions' => [
                    [
                        'question' => 'Pourquoi la qualité institutionnelle est-elle considérée comme un déterminant du développement à long terme ?',
                        'answers' => [
                            ['answer' => 'Elle influence les incitations à investir, entreprendre, innover et respecter les contrats', 'iscorrect' => true],
                            ['answer' => 'Elle détermine uniquement le niveau des prix', 'iscorrect' => false],
                            ['answer' => 'Elle remplace entièrement le capital humain', 'iscorrect' => false],
                            ['answer' => 'Elle rend les ressources naturelles inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les droits de propriété peuvent-ils favoriser l\'investissement ?',
                        'answers' => [
                            ['answer' => 'Ils réduisent le risque de perte arbitraire du rendement d\'un investissement', 'iscorrect' => true],
                            ['answer' => 'Ils garantissent toujours le succès des projets', 'iscorrect' => false],
                            ['answer' => 'Ils empêchent toute concurrence', 'iscorrect' => false],
                            ['answer' => 'Ils rendent le financement gratuit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle du capital humain dans le développement ?',
                        'answers' => [
                            ['answer' => 'Il améliore la productivité, les capacités d\'innovation et l\'adaptabilité de la population active', 'iscorrect' => true],
                            ['answer' => 'Il réduit toujours la mobilité du travail', 'iscorrect' => false],
                            ['answer' => 'Il remplace les institutions publiques', 'iscorrect' => false],
                            ['answer' => 'Il empêche la spécialisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'accès à la santé peut-il avoir un effet économique durable ?',
                        'answers' => [
                            ['answer' => Une meilleure santé peut accroître la capacité de travailler, d\'étudier et d\'accumuler du capital humain', 'iscorrect' => true],
                            ['answer' => 'La santé n\'affecte jamais la productivité', 'iscorrect' => false],
                            ['answer' => 'Elle réduit toujours l\'offre de travail', 'iscorrect' => false],
                            ['answer' => 'Elle remplace l\'éducation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'infrastructure peut-elle améliorer la productivité totale ?',
                        'answers' => [
                            ['answer' => 'De bonnes infrastructures réduisent certains coûts de transport, de communication et de coordination', 'iscorrect' => true],
                            ['answer' => 'Les infrastructures n\'affectent jamais les coûts', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent toujours les échanges', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent tous les travailleurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les politiques de développement doivent-elles tenir compte des incitations ?',
                        'answers' => [
                            ['answer' => 'Une politique peut produire des effets inattendus si elle modifie fortement les comportements des ménages et entreprises', 'iscorrect' => true],
                            ['answer' => 'Les agents ne réagissent jamais aux incitations', 'iscorrect' => false],
                            ['answer' => 'Les politiques ont toujours les mêmes effets dans tous les contextes', 'iscorrect' => false],
                            ['answer' => 'Les incitations concernent uniquement les consommateurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le capital physique peut-il connaître des rendements décroissants dans certains modèles ?',
                        'answers' => [
                            ['answer' => 'À technologie et autres facteurs donnés, ajouter davantage de capital peut produire des gains marginaux de plus en plus faibles', 'iscorrect' => true],
                            ['answer' => 'Le capital n\'augmente jamais la production', 'iscorrect' => false],
                            ['answer' => 'Les rendements augmentent toujours indéfiniment', 'iscorrect' => false],
                            ['answer' => 'Les travailleurs disparaissent nécessairement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la productivité globale peut-elle stagner malgré une accumulation du capital ?',
                        'answers' => [
                            ['answer' => 'Les gains supplémentaires de capital peuvent diminuer et les autres déterminants de la productivité peuvent rester faibles', 'iscorrect' => true],
                            ['answer' => 'Le capital garantit toujours une croissance permanente', 'iscorrect' => false],
                            ['answer' => 'La technologie n\'a aucun rôle', 'iscorrect' => false],
                            ['answer' => 'La productivité est indépendante de l\'efficacité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le capital naturel peut-il être intégré à une analyse du développement durable ?',
                        'answers' => [
                            ['answer' => 'La dégradation des ressources naturelles peut réduire les capacités productives futures et imposer des coûts sociaux', 'iscorrect' => true],
                            ['answer' => 'Les ressources naturelles sont toujours infinies', 'iscorrect' => false],
                            ['answer' => 'La croissance rend toute ressource renouvelable', 'iscorrect' => false],
                            ['answer' => 'L\'environnement n\'a aucun lien avec la production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est la plus pertinente pour évaluer une politique de développement ?',
                        'answers' => [
                            ['answer' => 'Comparer ses bénéfices, ses coûts, ses effets distributifs, ses incitations et ses conséquences à long terme', 'iscorrect' => true],
                            ['answer' => 'Mesurer uniquement son coût budgétaire immédiat', 'iscorrect' => false],
                            ['answer' => 'Mesurer uniquement la croissance du PIB à court terme', 'iscorrect' => false],
                            ['answer' => 'Ignorer les effets comportementaux', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse économique appliquée et prise de décision',
                'questions' => [
                    [
                        'question' => 'Pourquoi une analyse coûts-bénéfices doit-elle intégrer les coûts d\'opportunité ?',
                        'answers' => [
                            ['answer' => 'Une ressource utilisée pour un projet renonce à sa meilleure utilisation alternative', 'iscorrect' => true],
                            ['answer' => 'Les coûts d\'opportunité sont toujours nuls', 'iscorrect' => false],
                            ['answer' => 'Seuls les coûts comptables peuvent être pris en compte', 'iscorrect' => false],
                            ['answer' => 'Les ressources publiques n\'ont jamais de rareté', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les bénéfices futurs d\'un projet doivent-ils généralement être actualisés ?',
                        'answers' => [
                            ['answer' => Un euro disponible aujourd\'hui possède généralement une valeur différente d\'un euro reçu dans le futur', 'iscorrect' => true],
                            ['answer' => 'Les bénéfices futurs n\'ont aucune valeur économique', 'iscorrect' => false],
                            ['answer' => 'L\'actualisation augmente toujours les bénéfices futurs', 'iscorrect' => false],
                            ['answer' => 'Le temps n\'a aucun effet sur les choix économiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les analyses de scénarios sont-elles utiles dans les décisions économiques ?',
                        'answers' => [
                            ['answer' => 'Elles permettent d\'examiner la sensibilité d\'une décision à différentes hypothèses sur l\'avenir', 'iscorrect' => true],
                            ['answer' => 'Elles garantissent le scénario futur', 'iscorrect' => false],
                            ['answer' => 'Elles éliminent toute incertitude', 'iscorrect' => false],
                            ['answer' => 'Elles rendent les données inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une corrélation entre deux variables économiques ne prouve-t-elle pas nécessairement une causalité ?',
                        'answers' => [
                            ['answer' => Une troisième variable ou une relation inverse peut expliquer l\'association observée', 'iscorrect' => true],
                            ['answer' => 'La corrélation ne peut jamais être mesurée', 'iscorrect' => false],
                            ['answer' => 'Toute corrélation est nécessairement causale', 'iscorrect' => false],
                            ['answer' => 'Les variables économiques sont toujours indépendantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l\'intérêt d\'un groupe de contrôle dans l\'évaluation d\'une politique publique ?',
                        'answers' => [
                            ['answer' => 'Il fournit une référence permettant de mieux isoler l\'effet de la politique des autres facteurs', 'iscorrect' => true],
                            ['answer' => 'Il garantit automatiquement une causalité parfaite', 'iscorrect' => false],
                            ['answer' => 'Il supprime toutes les différences entre individus', 'iscorrect' => false],
                            ['answer' => 'Il remplace toutes les données macroéconomiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'endogénéité est-elle problématique dans une estimation économique ?',
                        'answers' => [
                            ['answer' => 'Une variable explicative peut être corrélée avec des facteurs non observés ou avec le terme d\'erreur, biaisant l\'estimation causale', 'iscorrect' => true],
                            ['answer' => 'Elle signifie simplement que les données sont trop nombreuses', 'iscorrect' => false],
                            ['answer' => 'Elle garantit une meilleure précision', 'iscorrect' => false],
                            ['answer' => 'Elle rend toutes les variables indépendantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les décideurs doivent-ils distinguer un effet moyen d\'un effet distributif ?',
                        'answers' => [
                            ['answer' => 'Une politique peut améliorer le résultat moyen tout en pénalisant certains groupes de manière importante', 'iscorrect' => true],
                            ['answer' => 'Les effets moyens et distributifs sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Les politiques économiques n\'ont jamais d\'effets distributifs', 'iscorrect' => false],
                            ['answer' => 'Le revenu moyen mesure parfaitement le bien-être de tous', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les analyses économiques doivent-elles expliciter leurs hypothèses ?',
                        'answers' => [
                            ['answer' => 'Les conclusions dépendent des mécanismes, paramètres et conditions supposés dans le modèle', 'iscorrect' => true],
                            ['answer' => 'Les hypothèses ne changent jamais les résultats', 'iscorrect' => false],
                            ['answer' => 'Les modèles sont toujours indépendants des hypothèses', 'iscorrect' => false],
                            ['answer' => 'Les hypothèses ne concernent que la comptabilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la comparaison de politiques nécessite-t-elle souvent une analyse marginale ?',
                        'answers' => [
                            ['answer' => 'La décision pertinente porte souvent sur le bénéfice et le coût d\'une unité supplémentaire d\'action', 'iscorrect' => true],
                            ['answer' => 'Les décisions économiques portent uniquement sur les montants totaux', 'iscorrect' => false],
                            ['answer' => 'Le raisonnement marginal ne s\'applique jamais aux politiques', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal est toujours égal à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle caractéristique définit le mieux une analyse économique professionnelle ?',
                        'answers' => [
                            ['answer' => 'Elle combine théorie, données, hypothèses explicites, analyse de sensibilité et évaluation des effets directs et indirects', 'iscorrect' => true],
                            ['answer' => 'Elle repose uniquement sur une intuition', 'iscorrect' => false],
                            ['answer' => 'Elle ignore les effets secondaires', 'iscorrect' => false],
                            ['answer' => 'Elle suppose que tous les agents réagissent de manière identique', 'iscorrect' => false],
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

                // Position des réponses mélangée pour éviter une bonne réponse toujours en première position.
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
