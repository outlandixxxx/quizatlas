```php
<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PublicEconomicsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'public-economics')->firstOrFail();

        $quizzes = [

            // =========================================================
            // QUIZ 1 — Conseil économique et conception des politiques
            // =========================================================
            [
                'title' => 'Conception professionnelle des politiques publiques',
                'description' => 'Étude de cas de conception, de ciblage et d’arbitrage des politiques publiques dans un contexte institutionnel réel.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Un ministère souhaite réduire la pollution industrielle avec un budget limité. Les entreprises ont des coûts de dépollution très différents. Quelle approche est la plus économiquement robuste ?',
                        'choices' => [
                            ['choice_text' => 'Utiliser un instrument donnant aux entreprises un signal économique commun tout en permettant aux réductions de pollution de se réaliser là où elles sont les moins coûteuses', 'is_correct' => true],
                            ['choice_text' => 'Imposer exactement la même réduction physique à chaque entreprise', 'is_correct' => false],
                            ['choice_text' => 'Subventionner toutes les entreprises indépendamment de leur niveau d’émissions', 'is_correct' => false],
                            ['choice_text' => 'Interdire toute production industrielle immédiatement', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les coûts marginaux de dépollution diffèrent, des instruments de prix ou de permis échangeables peuvent réduire la pollution au moindre coût agrégé sous des hypothèses appropriées.',
                    ],
                    [
                        'question' => 'Un gouvernement veut accroître les recettes fiscales sans provoquer une forte contraction d’une activité très élastique. Quel principe de conception doit être privilégié ?',
                        'choices' => [
                            ['choice_text' => Examiner les élasticités des bases taxables et limiter les taux qui génèrent de fortes distorsions marginales', 'is_correct' => true],
                            ['choice_text' => 'Augmenter uniformément tous les taux au maximum', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les réactions comportementales', 'is_correct' => false],
                            ['choice_text' => 'Taxer uniquement les activités dont la demande est parfaitement élastique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une conception fiscale professionnelle doit intégrer les réactions des agents car les changements de taux peuvent modifier les bases taxables.',
                    ],
                    [
                        'question' => 'Une réforme fiscale augmente légèrement l’efficacité mais réduit le revenu disponible des ménages les plus pauvres. Quelle information est nécessaire avant une recommandation finale ?',
                        'choices' => [
                            ['choice_text' => 'L’importance des effets distributifs et les objectifs normatifs retenus par les décideurs', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le nombre de contribuables', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le montant total des recettes', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le taux de croissance passé', 'is_correct' => false],
                        ],
                        'explanation' => 'Une recommandation professionnelle doit intégrer à la fois les effets d’efficacité et les conséquences distributives.',
                    ],
                    [
                        'question' => 'Une administration envisage une subvention générale à un secteur mais constate que les entreprises auraient investi même sans aide. Quel risque principal apparaît ?',
                        'choices' => [
                            ['choice_text' => Des effets d’aubaine entraînant un coût budgétaire sans augmentation proportionnelle de l’investissement', 'is_correct' => true],
                            ['choice_text' => 'Une disparition automatique de l’investissement privé', 'is_correct' => false],
                            ['choice_text' => 'Une baisse certaine de la productivité', 'is_correct' => false],
                            ['choice_text' => 'Une impossibilité de contrôler la dépense publique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une subvention versée à des bénéficiaires qui auraient réalisé l’investissement sans aide produit un effet d’aubaine et réduit l’efficacité budgétaire.',
                    ],
                    [
                        'question' => 'Un ministère reçoit deux propositions de réforme. La première coûte 500 millions et produit un bénéfice social estimé à 650 millions. La seconde coûte 300 millions et produit 400 millions de bénéfice. Laquelle a la VAN simplifiée la plus élevée ?',
                        'choices' => [
                            ['choice_text' => La première, avec une VAN de 150 millions contre 100 millions pour la seconde', 'is_correct' => true],
                            ['choice_text' => 'La seconde, avec une VAN de 300 millions', 'is_correct' => false],
                            ['choice_text' => 'Les deux ont une VAN identique', 'is_correct' => false],
                            ['choice_text' => 'La première a une VAN négative', 'is_correct' => false],
                        ],
                        'explanation' => 'La VAN simplifiée est bénéfice moins coût : 650 - 500 = 150 millions et 400 - 300 = 100 millions.',
                    ],
                    [
                        'question' => 'Un programme social a un excellent résultat moyen, mais l’impact pour les 20 % de ménages les plus pauvres est presque nul. Quelle analyse professionnelle est nécessaire ?',
                        'choices' => [
                            ['choice_text' => 'Une analyse des effets hétérogènes et de l’incidence du programme selon les groupes de revenu', 'is_correct' => true],
                            ['choice_text' => 'Uniquement une nouvelle mesure du budget total', 'is_correct' => false],
                            ['choice_text' => 'La suppression automatique du programme', 'is_correct' => false],
                            ['choice_text' => 'L’hypothèse que l’effet moyen représente tous les ménages', 'is_correct' => false],
                        ],
                        'explanation' => 'Une moyenne peut masquer une distribution très inégale des effets ; l’analyse professionnelle doit identifier les groupes bénéficiaires et ceux qui restent exclus.',
                    ],
                    [
                        'question' => 'Pourquoi une réforme publique doit-elle souvent être accompagnée d’une analyse de sensibilité ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les résultats dépendent parfois fortement d’hypothèses incertaines concernant les coûts, bénéfices ou réactions comportementales', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un modèle économique produit toujours le même résultat quelles que soient les hypothèses', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’analyse de sensibilité remplace les données', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle garantit que le projet sera rentable', 'is_correct' => false],
                        ],
                        'explanation' => 'Tester plusieurs hypothèses permet de mesurer la robustesse de la recommandation face à l’incertitude.',
                    ],
                    [
                        'question' => 'Une administration cherche à réduire le coût d’un programme sans réduire son résultat. Quelle démarche est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => Identifier les composantes de coût, comparer les modes de production et rechercher des gains d’efficience', 'is_correct' => true],
                            ['choice_text' => 'Réduire uniformément toutes les dépenses de 10 %', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les systèmes de suivi', 'is_correct' => false],
                            ['choice_text' => 'Réduire uniquement les dépenses visibles', 'is_correct' => false],
                        ],
                        'explanation' => 'Une approche efficiente cherche les sources réelles de coût et les possibilités d’optimisation sans dégrader les résultats.',
                    ],
                    [
                        'question' => 'Un gouvernement veut lancer un programme inédit mais dispose de peu d’informations sur son efficacité réelle. Quelle stratégie est généralement la plus prudente ?',
                        'choices' => [
                            ['choice_text' => Lancer une phase pilote avec un protocole d’évaluation clairement défini avant une extension à grande échelle', 'is_correct' => true],
                            ['choice_text' => 'Déployer immédiatement le programme à l’échelle nationale', 'is_correct' => false],
                            ['choice_text' => 'Ne collecter aucune donnée afin de simplifier la gestion', 'is_correct' => false],
                            ['choice_text' => 'Supposer que le programme sera efficace parce qu’il est innovant', 'is_correct' => false],
                        ],
                        'explanation' => 'Un pilote permet d’apprendre sur les coûts, l’efficacité et les effets imprévus avant d’engager l’ensemble des ressources publiques.',
                    ],
                    [
                        'question' => 'Quel élément distingue une recommandation économique professionnelle d’une simple observation statistique ?',
                        'choices' => [
                            ['choice_text' => 'La recommandation relie les résultats empiriques aux mécanismes économiques, aux coûts, aux risques et aux objectifs de décision', 'is_correct' => true],
                            ['choice_text' => 'Elle utilise nécessairement une seule statistique', 'is_correct' => false],
                            ['choice_text' => 'Elle ignore les considérations institutionnelles', 'is_correct' => false],
                            ['choice_text' => 'Elle choisit automatiquement la politique la plus coûteuse', 'is_correct' => false],
                        ],
                        'explanation' => 'La décision publique nécessite de passer des données à une analyse structurée des mécanismes, arbitrages et contraintes.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 2 — Fiscalité professionnelle
            // =========================================================
            [
                'title' => 'Architecture fiscale et arbitrages professionnels',
                'description' => 'Conception avancée d’un système fiscal en tenant compte des distorsions, de l’équité, de l’administration et du comportement des contribuables.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Une réforme vise à déplacer une partie de la fiscalité du travail vers une taxe à large assiette sur la consommation. Quel compromis doit être étudié en priorité ?',
                        'choices' => [
                            ['choice_text' => 'L’impact sur l’offre de travail, les prix relatifs, les ménages selon leur revenu et les possibilités de compensation', 'is_correct' => true],
                            ['choice_text' => 'Uniquement l’augmentation nominale des recettes', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le nombre de nouvelles déclarations fiscales', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les exportations', 'is_correct' => false],
                        ],
                        'explanation' => 'Un changement de structure fiscale modifie simultanément les incitations et la distribution de la charge ; une analyse complète doit intégrer ces dimensions.',
                    ],
                    [
                        'question' => 'Une administration constate qu’un taux d’imposition élevé s’accompagne d’une forte réduction de la base taxable. Quelle réponse est économiquement la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'Estimer l’élasticité de la base fiscale avant d’augmenter davantage le taux', 'is_correct' => true],
                            ['choice_text' => 'Augmenter encore le taux sans analyser les comportements', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tout impôt', 'is_correct' => false],
                            ['choice_text' => 'Fixer la base fiscale indépendamment des comportements', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse optimale dépend de la sensibilité de la base taxable aux taux et des objectifs de recettes et de redistribution.',
                    ],
                    [
                        'question' => 'Un pays souhaite réduire l’évasion fiscale sans augmenter fortement les taux. Quelle politique peut être particulièrement efficace ?',
                        'choices' => [
                            ['choice_text' => Améliorer l’administration fiscale, le contrôle fondé sur le risque et l’échange d’informations', 'is_correct' => true],
                            ['choice_text' => 'Augmenter uniformément toutes les pénalités sans améliorer le contrôle', 'is_correct' => false],
                            ['choice_text' => 'Réduire la qualité des registres fiscaux', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les mécanismes de déclaration', 'is_correct' => false],
                        ],
                        'explanation' => 'Une meilleure capacité administrative peut accroître la conformité sans dépendre uniquement d’une hausse des taux.',
                    ],
                    [
                        'question' => 'Une réforme fiscale introduit un crédit d’impôt remboursable pour les travailleurs à faible revenu. Quel objectif peut être poursuivi simultanément ?',
                        'choices' => [
                            ['choice_text' => 'Réduire la pauvreté tout en maintenant un gain financier lié à l’activité professionnelle', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute fiscalité indirecte', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement les salaires bruts', 'is_correct' => false],
                            ['choice_text' => 'Éliminer toute différence de revenu avant impôt', 'is_correct' => false],
                        ],
                        'explanation' => 'Un crédit remboursable peut compléter les revenus des travailleurs modestes tout en maintenant une partie du rendement financier du travail.',
                    ],
                    [
                        'question' => 'Pourquoi un taux fiscal marginal effectif peut-il être supérieur au taux d’imposition affiché ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une hausse du revenu peut simultanément augmenter l’impôt et réduire certains transferts', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les impôts sont calculés deux fois', 'is_correct' => false],
                            ['choice_text' => 'Parce que le taux affiché est toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce que les prestations sociales n’ont jamais d’effet sur le revenu net', 'is_correct' => false],
                        ],
                        'explanation' => 'L’interaction entre fiscalité et retrait des prestations peut créer une charge marginale implicite supérieure au seul taux fiscal.',
                    ],
                    [
                        'question' => 'Une réforme augmente fortement les taxes sur les bénéfices mais permet des déductions massives pour certains investissements. Pourquoi faut-il analyser les deux mesures conjointement ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le taux statutaire ne décrit pas à lui seul le coût fiscal effectif de l’investissement', 'is_correct' => true],
                            ['choice_text' => 'Parce que les déductions n’ont jamais d’effet économique', 'is_correct' => false],
                            ['choice_text' => 'Parce que les entreprises paient toujours le même impôt réel', 'is_correct' => false],
                            ['choice_text' => 'Parce que les investissements sont indépendants de la fiscalité', 'is_correct' => false],
                        ],
                        'explanation' => 'L’assiette, les déductions, amortissements et crédits d’impôt déterminent le taux effectif et les incitations réelles.',
                    ],
                    [
                        'question' => 'Pourquoi l’administration fiscale peut-elle préférer une assiette large avec un taux plus modéré à une multitude de niches fiscales ?',
                        'choices' => [
                            ['choice_text' => 'Une assiette plus large peut réduire les distorsions, simplifier l’administration et limiter les possibilités d’évitement', 'is_correct' => true],
                            ['choice_text' => 'Une assiette large supprime toujours les différences de revenu', 'is_correct' => false],
                            ['choice_text' => 'Les niches fiscales améliorent toujours l’efficience', 'is_correct' => false],
                            ['choice_text' => 'Un taux modéré produit toujours davantage de recettes', 'is_correct' => false],
                        ],
                        'explanation' => 'L’élargissement de l’assiette peut réduire les distorsions et les stratégies de contournement, sous réserve des objectifs distributifs.',
                    ],
                    [
                        'question' => 'Une taxe sur les terrains non développés est envisagée pour financer les collectivités. Quel argument d’efficacité peut soutenir cette taxe ?',
                        'choices' => [
                            ['choice_text' => 'L’offre de terrain étant relativement peu flexible, la taxe peut provoquer moins de distorsions que certaines taxes sur des activités très sensibles', 'is_correct' => true],
                            ['choice_text' => 'Les terrains sont parfaitement élastiques à la fiscalité', 'is_correct' => false],
                            ['choice_text' => 'La taxe n’a jamais d’effet sur les propriétaires', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine toutes les externalités urbaines', 'is_correct' => false],
                        ],
                        'explanation' => 'Une base fiscale peu élastique peut être attractive du point de vue de la limitation de certaines distorsions, même si d’autres effets doivent être étudiés.',
                    ],
                    [
                        'question' => 'Pourquoi l’incidence d’une taxe sur une ressource naturelle peut-elle différer de celle d’une taxe sur le travail ?',
                        'choices' => [
                            ['choice_text' => 'Les élasticités d’offre et de demande ainsi que la mobilité de chaque base sont différentes', 'is_correct' => true],
                            ['choice_text' => 'Toutes les bases fiscales réagissent nécessairement de la même manière', 'is_correct' => false],
                            ['choice_text' => 'La fiscalité naturelle ne peut pas être répercutée', 'is_correct' => false],
                            ['choice_text' => 'Le travail ne répond jamais aux prix', 'is_correct' => false],
                        ],
                        'explanation' => 'L’incidence dépend des réactions relatives des agents ; la mobilité et les élasticités varient fortement selon la base fiscale.',
                    ],
                    [
                        'question' => 'Un conseil économique évalue une réforme fiscale et estime que les recettes supplémentaires sont faibles mais que les coûts administratifs sont élevés. Quelle recommandation est la plus défendable ?',
                        'choices' => [
                            ['choice_text' => 'Réexaminer la réforme car son rendement net pourrait être insuffisant après prise en compte des coûts de collecte', 'is_correct' => true],
                            ['choice_text' => 'La maintenir automatiquement parce qu’elle augmente les recettes brutes', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute administration fiscale', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les coûts administratifs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une analyse professionnelle doit considérer le coût de perception et les ressources administratives nécessaires, pas seulement les recettes brutes.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 3 — Externalités et environnement
            // =========================================================
            [
                'title' => 'Politique environnementale et internalisation des externalités',
                'description' => 'Conception professionnelle des instruments environnementaux et analyse des coûts, bénéfices, risques et incitations.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Une autorité veut réduire les émissions avec un objectif quantitatif précis mais ne connaît pas parfaitement le coût de réduction des entreprises. Quel choix d’instrument dépend notamment de l’incertitude dominante ?',
                        'choices' => [
                            ['choice_text' => 'Le choix entre taxe et quantité réglementée doit tenir compte du degré relatif d’incertitude sur les coûts et dommages', 'is_correct' => true],
                            ['choice_text' => 'Une taxe est toujours meilleure quel que soit le contexte', 'is_correct' => false],
                            ['choice_text' => 'Une norme quantitative est toujours plus efficace', 'is_correct' => false],
                            ['choice_text' => 'L’incertitude ne doit jamais intervenir dans le choix d’instrument', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix entre instrument de prix et instrument quantitatif dépend notamment de la pente des dommages et des coûts ainsi que de l’incertitude.',
                    ],
                    [
                        'question' => 'Une taxe carbone est introduite progressivement. Les entreprises investissent dans des technologies propres en anticipation des hausses futures. Quel effet illustre cette stratégie ?',
                        'choices' => [
                            ['choice_text' => 'La crédibilité et la trajectoire attendue du signal-prix peuvent influencer les décisions d’investissement intertemporelles', 'is_correct' => true],
                            ['choice_text' => 'Les investissements ne réagissent jamais aux prix futurs anticipés', 'is_correct' => false],
                            ['choice_text' => 'Une taxe présente ne peut affecter que la consommation courante', 'is_correct' => false],
                            ['choice_text' => 'Les entreprises ignorent nécessairement les politiques annoncées', 'is_correct' => false],
                        ],
                        'explanation' => 'Les agents prennent des décisions sur plusieurs périodes et peuvent intégrer les politiques attendues dans leurs investissements.',
                    ],
                    [
                        'question' => 'Une taxe environnementale est efficace mais fortement régressive. Quelle réponse politique peut permettre de préserver le signal-prix tout en améliorant l’équité ?',
                        'choices' => [
                            ['choice_text' => Recyclage d’une partie des recettes sous forme de transferts ciblés ou de compensation aux ménages vulnérables', 'is_correct' => true],
                            ['choice_text' => 'Supprimer immédiatement la taxe', 'is_correct' => false],
                            ['choice_text' => 'Réduire les transferts aux ménages pauvres', 'is_correct' => false],
                            ['choice_text' => 'Exonérer totalement toutes les entreprises polluantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le recyclage des recettes peut dissocier l’objectif environnemental du problème distributif tout en conservant l’incitation à réduire les émissions.',
                    ],
                    [
                        'question' => 'Deux entreprises ont des coûts de dépollution très différents. Un système de permis échangeables conduit finalement à davantage de réduction chez celle dont le coût marginal est faible. Pourquoi cela peut-il être efficient ?',
                        'choices' => [
                            ['choice_text' => 'Le système égalise les incitations marginales et permet une répartition des réductions minimisant le coût total', 'is_correct' => true],
                            ['choice_text' => 'Toutes les entreprises doivent toujours réduire la même quantité', 'is_correct' => false],
                            ['choice_text' => 'Le coût marginal de dépollution devient nul', 'is_correct' => false],
                            ['choice_text' => 'Les permis rendent les entreprises identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les échanges permettent de concentrer les réductions là où elles sont relativement moins coûteuses jusqu’à une condition d’égalisation des coûts marginaux.',
                    ],
                    [
                        'question' => 'Une politique environnementale réduit les émissions domestiques mais provoque une délocalisation de la production vers un pays moins réglementé. Quel problème doit être analysé ?',
                        'choices' => [
                            ['choice_text' => Le risque de fuite de carbone et le déplacement des émissions plutôt que leur véritable réduction mondiale', 'is_correct' => true],
                            ['choice_text' => 'La disparition automatique de toute externalité', 'is_correct' => false],
                            ['choice_text' => 'L’impossibilité d’avoir un commerce international', 'is_correct' => false],
                            ['choice_text' => 'Une hausse certaine de la productivité mondiale', 'is_correct' => false],
                        ],
                        'explanation' => 'La politique environnementale doit considérer les réactions internationales lorsque les activités peuvent être déplacées vers des juridictions moins strictes.',
                    ],
                    [
                        'question' => 'Une réglementation impose la même technologie de dépollution à toutes les entreprises malgré des coûts différents. Quelle faiblesse économique peut apparaître ?',
                        'choices' => [
                            ['choice_text' => 'Les réductions peuvent être réalisées à un coût total supérieur à celui d’un système permettant une adaptation aux coûts marginaux', 'is_correct' => true],
                            ['choice_text' => 'La réglementation garantit toujours le coût minimal', 'is_correct' => false],
                            ['choice_text' => 'Les technologies imposées ont toujours le même rendement', 'is_correct' => false],
                            ['choice_text' => 'L’hétérogénéité des coûts n’a aucune conséquence', 'is_correct' => false],
                        ],
                        'explanation' => 'Une norme uniforme peut ignorer les différences de coûts et ne pas minimiser le coût agrégé d’un objectif environnemental donné.',
                    ],
                    [
                        'question' => 'Pourquoi l’évaluation d’un projet de réduction climatique doit-elle intégrer plusieurs scénarios sur le prix du carbone ?',
                        'choices' => [
                            ['choice_text' => 'La valeur des dommages évités et la rentabilité du projet peuvent dépendre fortement de l’évolution future de la politique climatique', 'is_correct' => true],
                            ['choice_text' => 'Le prix du carbone futur est toujours connu avec certitude', 'is_correct' => false],
                            ['choice_text' => 'Les projets climatiques n’ont pas de bénéfices futurs', 'is_correct' => false],
                            ['choice_text' => 'Un seul scénario garantit toujours une décision optimale', 'is_correct' => false],
                        ],
                        'explanation' => 'Les politiques climatiques sont soumises à l’incertitude ; les scénarios permettent de tester la robustesse des décisions.',
                    ],
                    [
                        'question' => 'Une entreprise réduit ses émissions d’une tonne pour un coût marginal de 100 dirhams alors qu’une autre pourrait réduire la même tonne pour 30 dirhams. Quelle allocation de réduction minimise le coût, toutes choses égales par ailleurs ?',
                        'choices' => [
                            ['choice_text' => Faire davantage porter l’effort de réduction sur l’entreprise au coût de 30 dirhams', 'is_correct' => true],
                            ['choice_text' => 'Imposer davantage de réduction à l’entreprise au coût de 100 dirhams', 'is_correct' => false],
                            ['choice_text' => 'Imposer exactement la même réduction sans considération de coûts', 'is_correct' => false],
                            ['choice_text' => 'Ne réduire aucune émission', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour minimiser le coût total d’un objectif de réduction, il est rationnel de réaliser davantage d’efforts là où le coût marginal est le plus faible.',
                    ],
                    [
                        'question' => 'Pourquoi un signal environnemental crédible à long terme peut-il avoir davantage d’effet qu’une mesure temporaire imprévisible ?',
                        'choices' => [
                            ['choice_text' => Il permet aux entreprises et ménages d’ajuster leurs investissements et leurs technologies sur plusieurs périodes', 'is_correct' => true],
                            ['choice_text' => 'Une mesure temporaire est toujours plus coûteuse', 'is_correct' => false],
                            ['choice_text' => 'Les agents ignorent toujours les anticipations', 'is_correct' => false],
                            ['choice_text' => 'Une politique temporaire ne modifie jamais les comportements', 'is_correct' => false],
                        ],
                        'explanation' => 'La crédibilité d’une trajectoire future influence les investissements durables et les décisions technologiques.',
                    ],
                    [
                        'question' => 'Une politique environnementale très efficace engendre des pertes concentrées dans une région industrielle particulière. Quelle mesure d’accompagnement est la plus cohérente ?',
                        'choices' => [
                            ['choice_text' => Combiner la politique environnementale avec des mesures ciblées de transition professionnelle et territoriale', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute politique environnementale', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les pertes locales au nom de l’efficacité agrégée', 'is_correct' => false],
                            ['choice_text' => 'Subventionner uniquement les entreprises les plus polluantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les politiques de transition peuvent réduire les coûts distributifs et politiques sans supprimer le signal environnemental principal.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 4 — Protection sociale et architecture des transferts
            // =========================================================
            [
                'title' => 'Conception professionnelle de la protection sociale',
                'description' => 'Analyse de systèmes de transferts, ciblage, incitations au travail et couverture des risques sociaux.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Une réforme veut réduire la pauvreté tout en limitant le taux marginal effectif d’imposition subi lors de la reprise d’un emploi. Quelle approche est pertinente ?',
                        'choices' => [
                            ['choice_text' => Concevoir une réduction progressive des prestations avec des taux de retrait modérés et coordonnés avec la fiscalité', 'is_correct' => true],
                            ['choice_text' => 'Retirer la totalité des prestations dès le premier dirham de revenu du travail', 'is_correct' => false],
                            ['choice_text' => 'Augmenter simultanément tous les taux de retrait', 'is_correct' => false],
                            ['choice_text' => 'Ignorer l’interaction entre prestations et impôts', 'is_correct' => false],
                        ],
                        'explanation' => 'La coordination entre transferts et fiscalité est essentielle pour éviter une trappe à pauvreté créée par des taux marginaux effectifs excessifs.',
                    ],
                    [
                        'question' => 'Une administration constate que beaucoup de ménages éligibles ne demandent pas une prestation sociale. Quel problème cela révèle-t-il ?',
                        'choices' => [
                            ['choice_text' => Un problème de non-recours qui peut réduire fortement l’efficacité réelle du programme', 'is_correct' => true],
                            ['choice_text' => 'Une preuve automatique que la prestation est trop généreuse', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale de besoin social', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration nécessairement forte de la redistribution', 'is_correct' => false],
                        ],
                        'explanation' => 'Un programme peut être généreux sur le papier mais avoir un impact limité si les personnes éligibles n’y accèdent pas.',
                    ],
                    [
                        'question' => 'Un transfert ciblé produit une forte réduction de la pauvreté par dirham dépensé mais exclut certains ménages juste au-dessus du seuil. Quel arbitrage apparaît ?',
                        'choices' => [
                            ['choice_text' => 'Le gain d’efficacité du ciblage doit être mis en balance avec le risque d’erreur d’exclusion et les effets de seuil', 'is_correct' => true],
                            ['choice_text' => 'Un ciblage précis est toujours préférable sans condition', 'is_correct' => false],
                            ['choice_text' => 'Les seuils de revenu n’ont jamais d’effet comportemental', 'is_correct' => false],
                            ['choice_text' => 'L’universalité est toujours moins équitable', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ciblage peut améliorer l’efficacité budgétaire mais générer des erreurs d’exclusion et des distorsions autour des seuils.',
                    ],
                    [
                        'question' => 'Une réforme remplace une prestation en nature par un transfert monétaire équivalent. Quel avantage potentiel apparaît ?',
                        'choices' => [
                            ['choice_text' => 'Le ménage gagne généralement davantage de liberté pour arbitrer entre différentes consommations', 'is_correct' => true],
                            ['choice_text' => 'La prestation devient automatiquement plus efficace dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Les contraintes budgétaires disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Le transfert monétaire impose la même consommation à tous', 'is_correct' => false],
                        ],
                        'explanation' => 'Un transfert monétaire laisse en principe davantage de liberté de choix, tandis qu’une prestation en nature peut être conçue pour encourager un bien spécifique.',
                    ],
                    [
                        'question' => 'Pourquoi un programme d’assurance sociale peut-il justifier des cotisations obligatoires même si certains individus préfèrent ne pas participer volontairement ?',
                        'choices' => [
                            ['choice_text' => 'Pour mutualiser les risques et limiter les problèmes de sélection ou de sous-assurance', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir un rendement identique à chaque individu', 'is_correct' => false],
                            ['choice_text' => 'Parce que les individus n’ont aucune préférence sur le risque', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une assurance obligatoire est toujours sans coût', 'is_correct' => false],
                        ],
                        'explanation' => 'L’obligation de participation peut soutenir la mutualisation des risques et éviter que seuls les agents à risque élevé rejoignent certains dispositifs.',
                    ],
                    [
                        'question' => 'Un système de retraite public dépend fortement des cotisations des actifs actuels pour financer les prestations actuelles. Quel risque structurel doit être surveillé ?',
                        'choices' => [
                            ['choice_text' => 'Une évolution défavorable du ratio entre cotisants et bénéficiaires', 'is_correct' => true],
                            ['choice_text' => 'Une hausse automatique de la productivité', 'is_correct' => false],
                            ['choice_text' => 'Une disparition du besoin de financement', 'is_correct' => false],
                            ['choice_text' => 'Une garantie d’excédent budgétaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un système fortement dépendant des transferts intergénérationnels, la démographie et le ratio cotisants/bénéficiaires sont déterminants.',
                    ],
                    [
                        'question' => 'Une prestation est retirée à 100 % dès que le bénéficiaire dépasse un seuil de revenu. Quel défaut de conception est particulièrement préoccupant ?',
                        'choices' => [
                            ['choice_text' => Un fort effet de seuil qui peut décourager une augmentation du revenu autour de la limite', 'is_correct' => true],
                            ['choice_text' => 'Une progressivité excessive du système', 'is_correct' => false],
                            ['choice_text' => 'Une disparition de la redistribution', 'is_correct' => false],
                            ['choice_text' => 'Une hausse automatique du revenu disponible', 'is_correct' => false],
                        ],
                        'explanation' => 'La perte brutale de la prestation crée un taux marginal implicite très élevé autour du seuil.',
                    ],
                    [
                        'question' => 'Une réforme remplace plusieurs prestations qui se chevauchent par un crédit social intégré. Quel avantage administratif peut-elle viser ?',
                        'choices' => [
                            ['choice_text' => Réduire les coûts de gestion, les incohérences et les taux marginaux cumulés', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute nécessité de contrôle', 'is_correct' => false],
                            ['choice_text' => 'Garantir automatiquement un budget social inférieur', 'is_correct' => false],
                            ['choice_text' => 'Éliminer toute différence de situation entre ménages', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intégration de dispositifs peut simplifier l’administration et rendre plus cohérente la structure globale des incitations.',
                    ],
                    [
                        'question' => 'Un gouvernement augmente une prestation de santé destinée aux ménages pauvres, mais l’offre médicale locale est très peu élastique. Quel effet secondaire peut apparaître ?',
                        'choices' => [
                            ['choice_text' => 'Une partie du soutien peut se capitaliser dans des prix ou des coûts de soins plus élevés', 'is_correct' => true],
                            ['choice_text' => 'Le transfert bénéficie nécessairement entièrement aux ménages', 'is_correct' => false],
                            ['choice_text' => 'L’offre médicale devient automatiquement parfaitement élastique', 'is_correct' => false],
                            ['choice_text' => 'La prestation réduit nécessairement la consommation de soins', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque l’offre est peu réactive, une hausse de la demande subventionnée peut être en partie absorbée par une hausse des prix.',
                    ],
                    [
                        'question' => 'Quel indicateur est le plus utile pour évaluer la performance redistributive d’une réforme complète ?',
                        'choices' => [
                            ['choice_text' => Comparer la distribution du revenu disponible avant et après l’ensemble des impôts et transferts', 'is_correct' => true],
                            ['choice_text' => 'Observer uniquement le budget total des prestations', 'is_correct' => false],
                            ['choice_text' => 'Observer uniquement le salaire médian', 'is_correct' => false],
                            ['choice_text' => 'Mesurer uniquement le nombre de bénéficiaires', 'is_correct' => false],
                        ],
                        'explanation' => 'L’objectif redistributif porte sur la distribution finale des ressources, et non sur le seul montant dépensé ou le nombre de bénéficiaires.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 5 — Dépenses publiques et efficacité des services
            // =========================================================
            [
                'title' => 'Performance et efficience des services publics',
                'description' => 'Gestion économique professionnelle des dépenses publiques, de la productivité et de la qualité des services collectifs.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Un ministère dépense davantage chaque année mais les résultats éducatifs restent constants. Quelle analyse doit être prioritaire ?',
                        'choices' => [
                            ['choice_text' => Examiner la productivité marginale des dépenses et identifier les postes où les ressources supplémentaires ne génèrent plus de résultats', 'is_correct' => true],
                            ['choice_text' => 'Augmenter encore le budget sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Réduire automatiquement toutes les dépenses', 'is_correct' => false],
                            ['choice_text' => 'Conclure que la politique éducative est inutile', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hausse des dépenses sans amélioration des résultats nécessite une analyse de productivité et de composition des dépenses.',
                    ],
                    [
                        'question' => 'Un hôpital public atteint le même niveau de soins qu’un autre avec 15 % de ressources en moins. Quelle mesure est la plus pertinente pour comparaison ?',
                        'choices' => [
                            ['choice_text' => 'Un indicateur de coût par unité de résultat ajusté à la qualité et au profil des patients', 'is_correct' => true],
                            ['choice_text' => 'Le budget total sans tenir compte des résultats', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’agents uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de bâtiments', 'is_correct' => false],
                        ],
                        'explanation' => 'La comparaison professionnelle doit relier les ressources utilisées aux résultats, en tenant compte de la qualité et de l’hétérogénéité des populations.',
                    ],
                    [
                        'question' => 'Pourquoi comparer directement les coûts hospitaliers de deux établissements peut-il être trompeur ?',
                        'choices' => [
                            ['choice_text' => 'Les cas traités, leur gravité et la qualité du service peuvent différer', 'is_correct' => true],
                            ['choice_text' => 'Les coûts n’ont jamais de valeur comparative', 'is_correct' => false],
                            ['choice_text' => 'Les hôpitaux produisent toujours exactement le même service', 'is_correct' => false],
                            ['choice_text' => 'Les indicateurs de santé sont toujours identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une comparaison valide doit tenir compte des caractéristiques des patients et de la nature des services produits.',
                    ],
                    [
                        'question' => 'Une administration introduit une procédure numérique qui réduit de 30 % le temps de traitement d’un dossier. Quelle étape est nécessaire pour mesurer le gain social réel ?',
                        'choices' => [
                            ['choice_text' => Vérifier si le temps économisé se traduit effectivement par une baisse de coût, une amélioration du service ou une réallocation productive des ressources', 'is_correct' => true],
                            ['choice_text' => 'Considérer les 30 % comme un gain budgétaire automatique', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les coûts initiaux de la transformation numérique', 'is_correct' => false],
                            ['choice_text' => 'Supposer que chaque minute économisée devient immédiatement une recette publique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une amélioration opérationnelle ne devient un bénéfice économique que si elle produit un effet réel sur les ressources ou la qualité du service.',
                    ],
                    [
                        'question' => 'Pourquoi une réduction uniforme de 10 % des budgets ministériels peut-elle être inefficiente ?',
                        'choices' => [
                            ['choice_text' => 'Les coûts marginaux de réduction peuvent être très différents selon les programmes et certaines dépenses peuvent avoir un rendement social élevé', 'is_correct' => true],
                            ['choice_text' => 'Toutes les dépenses ont exactement la même utilité marginale', 'is_correct' => false],
                            ['choice_text' => 'Les réductions uniformes sont toujours optimales', 'is_correct' => false],
                            ['choice_text' => 'Les programmes publics ne produisent jamais des résultats différents', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réduction budgétaire optimale doit considérer le rendement social marginal des différentes catégories de dépenses.',
                    ],
                    [
                        'question' => 'Un projet public dépasse systématiquement ses coûts prévisionnels. Quelle bonne pratique professionnelle est particulièrement utile ?',
                        'choices' => [
                            ['choice_text' => Utiliser des analyses historiques de dépassement, des scénarios de risque et des réserves explicitement justifiées', 'is_correct' => true],
                            ['choice_text' => 'Réduire artificiellement les prévisions pour accélérer l’approbation', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les dépassements passés', 'is_correct' => false],
                            ['choice_text' => 'Supposer que les futurs projets suivront toujours le budget initial', 'is_correct' => false],
                        ],
                        'explanation' => 'Une planification professionnelle doit tenir compte des biais de prévision, des risques connus et de l’expérience historique.',
                    ],
                    [
                        'question' => 'Une politique atteint un résultat satisfaisant mais au moyen d’un dispositif administratif extrêmement complexe. Quelle dimension doit être intégrée à l’évaluation ?',
                        'choices' => [
                            ['choice_text' => 'La simplicité administrative et les coûts de conformité supportés par l’État et les bénéficiaires', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le résultat final', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les dépenses de communication', 'is_correct' => false],
                            ['choice_text' => 'Aucune dimension supplémentaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les coûts administratifs et de conformité font partie du coût social réel d’une politique.',
                    ],
                    [
                        'question' => 'Une administration doit choisir entre deux projets produisant le même nombre d’unités de service mais avec des qualités différentes. Pourquoi une analyse de coût minimal simple serait-elle insuffisante ?',
                        'choices' => [
                            ['choice_text' => 'Parce que l’unité de production doit intégrer la qualité ou un résultat final pertinent', 'is_correct' => true],
                            ['choice_text' => 'Parce que les coûts ne sont jamais utiles', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il faut toujours choisir le projet le moins cher', 'is_correct' => false],
                            ['choice_text' => 'Parce que la qualité n’a aucune valeur sociale', 'is_correct' => false],
                        ],
                        'explanation' => 'La comparaison doit porter sur les résultats réellement produits et leur qualité, pas uniquement sur des volumes physiques.',
                    ],
                    [
                        'question' => 'Un programme public affiche un taux de réussite de 95 %, mais les bénéficiaires sont sélectionnés parmi les cas les plus faciles. Quel risque d’évaluation apparaît ?',
                        'choices' => [
                            ['choice_text' => 'Un biais de sélection pouvant surestimer l’efficacité réelle du programme', 'is_correct' => true],
                            ['choice_text' => 'Une preuve que le programme est universellement efficace', 'is_correct' => false],
                            ['choice_text' => 'Une mesure exacte de l’effet causal', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale de comparaison possible', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les bénéficiaires sont sélectionnés sur des caractéristiques favorables, les taux de réussite peuvent surestimer l’effet propre du programme.',
                    ],
                    [
                        'question' => 'Pourquoi une agence publique devrait-elle distinguer économie, efficience et efficacité ?',
                        'choices' => [
                            ['choice_text' => 'Parce que réduire le prix des ressources, utiliser les ressources efficacement et atteindre réellement les objectifs sont trois dimensions différentes', 'is_correct' => true],
                            ['choice_text' => 'Parce que les trois termes sont strictement synonymes', 'is_correct' => false],
                            ['choice_text' => 'Parce que seul le budget importe', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’efficacité ne concerne que les entreprises privées', 'is_correct' => false],
                        ],
                        'explanation' => 'Une gestion publique rigoureuse distingue le coût des intrants, le rapport entre ressources et résultats et l’atteinte effective des objectifs.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 6 — Dette et stratégie budgétaire
            // =========================================================
            [
                'title' => 'Stratégie budgétaire et gestion de la dette publique',
                'description' => 'Cas professionnels sur la soutenabilité de la dette, les risques budgétaires, les règles et le financement public.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Un gouvernement connaît une dette élevée mais des taux d’intérêt faibles et une croissance nominale robuste. Pourquoi ne peut-on pas conclure automatiquement à l’insoutenabilité ?',
                        'choices' => [
                            ['choice_text' => 'La soutenabilité dépend de la dynamique complète de la dette, des soldes primaires, des taux, de la croissance et des risques de financement', 'is_correct' => true],
                            ['choice_text' => 'Une dette élevée est toujours soutenable lorsque les taux sont faibles', 'is_correct' => false],
                            ['choice_text' => 'Le ratio dette/PIB n’a aucune importance', 'is_correct' => false],
                            ['choice_text' => 'La croissance garantit toujours le remboursement', 'is_correct' => false],
                        ],
                        'explanation' => 'La soutenabilité est une propriété dynamique qui dépend de plusieurs variables et de la capacité future à assurer le service de la dette.',
                    ],
                    [
                        'question' => 'Une dette publique a une maturité moyenne très courte. Quel risque est particulièrement élevé ?',
                        'choices' => [
                            ['choice_text' => 'Le risque de refinancement et une transmission rapide d’une hausse des taux aux charges d’intérêts', 'is_correct' => true],
                            ['choice_text' => 'Le risque de baisse automatique des recettes fiscales', 'is_correct' => false],
                            ['choice_text' => 'La disparition du risque de liquidité', 'is_correct' => false],
                            ['choice_text' => 'Une réduction obligatoire de la dette', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dette à courte maturité doit être refinancée fréquemment, ce qui augmente l’exposition aux conditions de marché.',
                    ],
                    [
                        'question' => 'Un ministère propose de financer une dépense courante permanente par une dette à long terme. Quel problème doit immédiatement être analysé ?',
                        'choices' => [
                            ['choice_text' => 'La cohérence entre une dépense récurrente et une source de financement qui crée des obligations futures', 'is_correct' => true],
                            ['choice_text' => 'Le fait que toute dette soit nécessairement liée à un investissement', 'is_correct' => false],
                            ['choice_text' => 'L’impossibilité légale de rembourser une dette', 'is_correct' => false],
                            ['choice_text' => 'L’absence totale de coût intertemporel', 'is_correct' => false],
                        ],
                        'explanation' => 'Le financement par dette reporte une charge future ; il faut donc vérifier qu’un équilibre budgétaire durable est compatible avec la dépense financée.',
                    ],
                    [
                        'question' => 'Une règle budgétaire impose un plafond nominal de déficit identique chaque année, quelle que soit la conjoncture. Quelle faiblesse peut apparaître ?',
                        'choices' => [
                            ['choice_text' => 'La règle peut être procyclique en obligeant à resserrer la politique pendant les ralentissements', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours une politique contracyclique', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine les fluctuations économiques', 'is_correct' => false],
                            ['choice_text' => 'Elle rend la dette indépendante des recettes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une règle rigide peut forcer des réductions de dépenses ou des hausses d’impôts pendant les ralentissements si les recettes diminuent.',
                    ],
                    [
                        'question' => 'Pourquoi les stabilisateurs automatiques peuvent-ils compliquer l’interprétation d’une détérioration du déficit public ?',
                        'choices' => [
                            ['choice_text' => 'Le déficit peut augmenter temporairement à cause de la conjoncture sans que la politique discrétionnaire ait changé', 'is_correct' => true],
                            ['choice_text' => 'Les stabilisateurs automatiques fonctionnent uniquement pendant les booms', 'is_correct' => false],
                            ['choice_text' => 'Ils empêchent toute variation des recettes fiscales', 'is_correct' => false],
                            ['choice_text' => 'Ils produisent toujours un excédent', 'is_correct' => false],
                        ],
                        'explanation' => 'Les recettes et certaines dépenses réagissent automatiquement au cycle économique, modifiant le solde budgétaire sans nouvelles décisions discrétionnaires.',
                    ],
                    [
                        'question' => 'Un gouvernement souhaite stabiliser le ratio dette/PIB après un choc temporaire. Quelle stratégie peut être plus raisonnable qu’un ajustement brutal immédiat ?',
                        'choices' => [
                            ['choice_text' => 'Construire un chemin d’ajustement crédible et graduel compatible avec la reprise économique', 'is_correct' => true],
                            ['choice_text' => 'Réduire toutes les dépenses dès le lendemain', 'is_correct' => false],
                            ['choice_text' => 'Augmenter immédiatement toutes les taxes sans exception', 'is_correct' => false],
                            ['choice_text' => 'Ignorer complètement la trajectoire future', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ajustement optimal dépend du cycle, des multiplicateurs, de la crédibilité et des besoins de soutenabilité à moyen terme.',
                    ],
                    [
                        'question' => 'Une analyse de soutenabilité montre que le ratio dette/PIB augmente seulement dans les scénarios où les taux dépassent fortement la croissance pendant plusieurs années. Quelle conclusion professionnelle est pertinente ?',
                        'choices' => [
                            ['choice_text' => 'La vulnérabilité est concentrée sur certains scénarios de taux et doit faire l’objet d’une gestion du risque', 'is_correct' => true],
                            ['choice_text' => 'La dette est définitivement sans risque', 'is_correct' => false],
                            ['choice_text' => 'Il faut immédiatement doubler toutes les taxes', 'is_correct' => false],
                            ['choice_text' => 'Les scénarios défavorables doivent être exclus', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse par scénarios permet d’identifier les conditions dans lesquelles la trajectoire budgétaire devient vulnérable.',
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de dette doit-elle intégrer la composition en devises ?',
                        'choices' => [
                            ['choice_text' => 'Une dépréciation de la monnaie peut accroître le poids en monnaie nationale d’une dette libellée en devises', 'is_correct' => true],
                            ['choice_text' => 'La devise d’émission n’a jamais d’effet budgétaire', 'is_correct' => false],
                            ['choice_text' => 'Toutes les dettes sont nécessairement libellées en monnaie nationale', 'is_correct' => false],
                            ['choice_text' => 'Le taux de change ne peut pas varier', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dette en devises expose les finances publiques au risque de change lorsque les obligations doivent être remboursées en monnaie étrangère.',
                    ],
                    [
                        'question' => 'Un gouvernement dispose d’un excédent primaire durable mais voit son ratio dette/PIB augmenter. Quelle explication est possible ?',
                        'choices' => [
                            ['choice_text' => Le coût des intérêts et la dynamique de croissance peuvent être suffisamment défavorables pour dépasser l’effet de l’excédent primaire', 'is_correct' => true],
                            ['choice_text' => 'Un excédent primaire réduit toujours le ratio dette/PIB immédiatement', 'is_correct' => false],
                            ['choice_text' => 'La dette ne dépend jamais du taux d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'La croissance nominale est sans importance', 'is_correct' => false],
                        ],
                        'explanation' => 'Le solde primaire n’est qu’un élément de la dynamique ; les intérêts et la croissance déterminent également l’évolution du ratio.',
                    ],
                    [
                        'question' => 'Pourquoi les autorités de dette privilégient-elles parfois une structure qui coûte légèrement plus cher à court terme ?',
                        'choices' => [
                            ['choice_text' => 'Un coût légèrement supérieur peut être accepté pour réduire certains risques de refinancement, de taux ou de change', 'is_correct' => true],
                            ['choice_text' => 'Un coût plus élevé est toujours meilleur', 'is_correct' => false],
                            ['choice_text' => 'Les risques financiers ne doivent jamais influencer la gestion de dette', 'is_correct' => false],
                            ['choice_text' => 'La structure de maturité ne joue aucun rôle', 'is_correct' => false],
                        ],
                        'explanation' => 'La gestion professionnelle de la dette repose sur un arbitrage coût-risque plutôt que sur la minimisation mécanique du taux facial.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 7 — Évaluation causale et evidence-based policy
            // =========================================================
            [
                'title' => 'Évaluation causale et politiques fondées sur les données',
                'description' => 'Méthodes professionnelles d’identification causale, expérimentation, analyse de résultats et interprétation des preuves.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Une réforme du chômage est introduite uniquement dans les régions où le chômage était déjà particulièrement élevé. Pourquoi une simple comparaison avec les autres régions peut-elle être biaisée ?',
                        'choices' => [
                            ['choice_text' => 'Les régions traitées peuvent différer systématiquement des autres avant même la réforme', 'is_correct' => true],
                            ['choice_text' => 'Le chômage est identique dans toutes les régions', 'is_correct' => false],
                            ['choice_text' => 'Une politique publique ne peut jamais avoir d’effet régional', 'is_correct' => false],
                            ['choice_text' => 'Les groupes de contrôle sont toujours parfaitement comparables', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ciblage non aléatoire peut créer des différences initiales qui biaisent l’estimation de l’effet de traitement.',
                    ],
                    [
                        'question' => 'Une expérimentation randomisée attribue aléatoirement les bénéficiaires à un programme. Quel avantage majeur apporte cette méthode ?',
                        'choices' => [
                            ['choice_text' => 'Elle réduit les différences systématiques entre groupes et facilite l’interprétation causale sous les conditions de l’expérience', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit automatiquement une généralisation nationale', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine toute erreur statistique', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit que tous les participants suivent le programme', 'is_correct' => false],
                        ],
                        'explanation' => 'La randomisation vise à rendre les groupes comparables en moyenne sur les facteurs observés et non observés, sous réserve d’une bonne mise en œuvre.',
                    ],
                    [
                        'question' => 'Une étude trouve un effet causal statistiquement significatif mais économiquement très faible. Quelle conclusion est la plus professionnelle ?',
                        'choices' => [
                            ['choice_text' => 'La significativité statistique ne suffit pas : il faut apprécier la taille de l’effet et sa pertinence économique', 'is_correct' => true],
                            ['choice_text' => 'Tout résultat significatif est nécessairement important pour la politique publique', 'is_correct' => false],
                            ['choice_text' => 'La politique est automatiquement un succès', 'is_correct' => false],
                            ['choice_text' => 'La taille de l’effet n’a aucune importance', 'is_correct' => false],
                        ],
                        'explanation' => 'La décision publique nécessite d’évaluer à la fois la précision statistique et l’ampleur pratique de l’effet.',
                    ],
                    [
                        'question' => 'Un programme augmente l’emploi de 2 points mais coûte 50 000 dirhams par emploi supplémentaire créé. Quelle information est nécessaire pour juger sa valeur ?',
                        'choices' => [
                            ['choice_text' => 'Les bénéfices sociaux et fiscaux associés à l’emploi supplémentaire, ainsi que les autres coûts du programme', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le nombre total de participants', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le budget initial', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le taux de chômage national', 'is_correct' => false],
                        ],
                        'explanation' => 'Un coût par emploi n’est interprétable qu’en relation avec la valeur économique et sociale du résultat obtenu.',
                    ],
                    [
                        'question' => 'Une politique semble très efficace lors d’un pilote mené dans une grande ville mais peu efficace dans des zones rurales. Quel risque faut-il considérer avant généralisation ?',
                        'choices' => [
                            ['choice_text' => Un problème de validité externe : l’effet observé dans le contexte pilote peut ne pas se généraliser', 'is_correct' => true],
                            ['choice_text' => 'La preuve que les zones rurales sont toujours inefficaces', 'is_correct' => false],
                            ['choice_text' => 'La certitude que le pilote était inutile', 'is_correct' => false],
                            ['choice_text' => 'L’impossibilité de réaliser toute politique publique', 'is_correct' => false],
                        ],
                        'explanation' => 'La validité externe concerne la capacité à généraliser les résultats à d’autres populations ou environnements.',
                    ],
                    [
                        'question' => 'Pourquoi les coûts de mise en conformité doivent-ils parfois être inclus dans l’évaluation d’une réglementation ?',
                        'choices' => [
                            ['choice_text' => 'Ils représentent des ressources réelles supportées par les entreprises, ménages ou administrations', 'is_correct' => true],
                            ['choice_text' => 'Ils sont toujours nuls', 'is_correct' => false],
                            ['choice_text' => 'Ils concernent uniquement les statistiques', 'is_correct' => false],
                            ['choice_text' => 'Ils ne peuvent jamais influencer les comportements', 'is_correct' => false],
                        ],
                        'explanation' => 'Les coûts de conformité font partie des ressources mobilisées par une politique réglementaire et peuvent influencer son efficacité globale.',
                    ],
                    [
                        'question' => 'Une étude montre qu’un programme n’a aucun effet moyen, mais qu’il améliore fortement les résultats d’un sous-groupe vulnérable. Quelle décision exige une analyse approfondie ?',
                        'choices' => [
                            ['choice_text' => 'La possibilité de cibler le programme sur le sous-groupe pour améliorer son rapport coût-bénéfice', 'is_correct' => true],
                            ['choice_text' => 'La suppression automatique du programme', 'is_correct' => false],
                            ['choice_text' => 'L’extension automatique à toute la population', 'is_correct' => false],
                            ['choice_text' => 'L’ignorance des effets hétérogènes', 'is_correct' => false],
                        ],
                        'explanation' => 'Un effet moyen nul peut masquer une forte efficacité pour certains groupes ; le ciblage peut alors devenir économiquement pertinent.',
                    ],
                    [
                        'question' => 'Pourquoi les effets d’équilibre général peuvent-ils modifier l’interprétation d’une évaluation locale d’une politique ?',
                        'choices' => [
                            ['choice_text' => 'Une intervention peut modifier les prix, salaires ou comportements d’autres agents au-delà du groupe directement traité', 'is_correct' => true],
                            ['choice_text' => 'Une politique locale ne peut jamais affecter d’autres agents', 'is_correct' => false],
                            ['choice_text' => 'Les prix restent toujours constants après une politique', 'is_correct' => false],
                            ['choice_text' => 'Les marchés sont indépendants par définition', 'is_correct' => false],
                        ],
                        'explanation' => 'Les réactions de marché peuvent transmettre l’effet d’une politique vers des agents qui ne sont pas directement traités.',
                    ],
                    [
                        'question' => 'Une évaluation trouve qu’un programme réduit la pauvreté mais augmente légèrement l’endettement des ménages à court terme. Quelle démarche est appropriée ?',
                        'choices' => [
                            ['choice_text' => 'Comparer les bénéfices de long terme à la structure temporelle des coûts et risques du programme', 'is_correct' => true],
                            ['choice_text' => 'Conclure immédiatement que le programme est inefficace', 'is_correct' => false],
                            ['choice_text' => 'Ignorer l’endettement parce que la pauvreté baisse', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les effets futurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les évaluations professionnelles doivent intégrer les effets sur plusieurs périodes et les risques potentiels avant de conclure.',
                    ],
                    [
                        'question' => 'Pourquoi la réplication d’une évaluation dans plusieurs contextes est-elle utile ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de tester la robustesse des résultats et leur dépendance au contexte', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que le résultat sera identique partout', 'is_correct' => false],
                            ['choice_text' => 'Elle rend inutile toute analyse de mécanisme', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace entièrement l’analyse statistique', 'is_correct' => false],
                        ],
                        'explanation' => 'La réplication aide à distinguer un effet robuste d’un résultat dépendant d’un contexte particulier.',
                    ],
                ],
            ],

            // =========================================================
            // QUIZ 8 — Gouvernance, choix publics et arbitrages complexes
            // =========================================================
            [
                'title' => 'Gouvernance économique et arbitrages publics complexes',
                'description' => 'Cas professionnels intégrant gouvernance, choix collectifs, incitations politiques, information imparfaite et arbitrages de long terme.',
                'difficulty' => 'Professional',
                'questions' => [
                    [
                        'question' => 'Un gouvernement choisit un projet d’infrastructure très visible politiquement mais dont la valeur actualisée nette est faible. Quel risque institutionnel cette situation peut-elle illustrer ?',
                        'choices' => [
                            ['choice_text' => Une divergence possible entre les incitations politiques de court terme et la valeur sociale de long terme', 'is_correct' => true],
                            ['choice_text' => 'Une preuve que les analyses économiques sont inutiles', 'is_correct' => false],
                            ['choice_text' => 'Une garantie d’efficience du projet', 'is_correct' => false],
                            ['choice_text' => 'Une réduction automatique du coût social', 'is_correct' => false],
                        ],
                        'explanation' => 'Les décisions publiques peuvent être influencées par des incitations électorales ou institutionnelles qui ne coïncident pas toujours avec l’optimum social de long terme.',
                    ],
                    [
                        'question' => 'Pourquoi l’indépendance d’une institution technique peut-elle améliorer la qualité de certaines décisions publiques ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut réduire certaines pressions à court terme et renforcer la cohérence des décisions fondées sur des règles ou analyses techniques', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit automatiquement des décisions parfaites', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine toute incertitude économique', 'is_correct' => false],
                            ['choice_text' => 'Elle rend inutiles les contrôles démocratiques', 'is_correct' => false],
                        ],
                        'explanation' => 'L’indépendance institutionnelle peut réduire certaines distorsions liées aux incitations de court terme, sans supprimer la nécessité de responsabilité et de contrôle.',
                    ],
                    [
                        'question' => 'Une politique procure des bénéfices concentrés à un petit groupe organisé tandis que les coûts sont diffus parmi la population. Quel problème de choix public peut apparaître ?',
                        'choices' => [
                            ['choice_text' => 'Un risque de capture ou de pression politique en faveur du groupe bénéficiaire', 'is_correct' => true],
                            ['choice_text' => 'Une garantie d’un optimum de Pareto', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale de lobbying', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration automatique de l’efficience', 'is_correct' => false],
                        ],
                        'explanation' => 'Des bénéfices concentrés peuvent donner au groupe bénéficiaire des incitations plus fortes à organiser du lobbying que les contribuables supportant chacun une petite part du coût.',
                    ],
                    [
                        'question' => 'Pourquoi la transparence budgétaire peut-elle améliorer la qualité des politiques publiques ?',
                        'choices' => [
                            ['choice_text' => 'Elle facilite le contrôle, la comparaison des performances et la détection de certains risques ou incohérences', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit automatiquement l’équilibre budgétaire', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tous les choix discrétionnaires', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace les institutions de contrôle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une meilleure information améliore la capacité des citoyens, parlementaires, auditeurs et décideurs à contrôler l’utilisation des ressources publiques.',
                    ],
                    [
                        'question' => 'Une administration utilise une subvention pour attirer des investissements étrangers mais constate que les entreprises auraient investi même sans elle. Quelle défaillance de politique publique est probable ?',
                        'choices' => [
                            ['choice_text' => 'Un coût d’aubaine élevé et une faible additionnalité de l’intervention', 'is_correct' => true],
                            ['choice_text' => 'Une externalité positive nécessairement forte', 'is_correct' => false],
                            ['choice_text' => 'Une amélioration automatique de la productivité', 'is_correct' => false],
                            ['choice_text' => 'Une diminution certaine des recettes publiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une politique d’aide n’est véritablement additionnelle que si elle modifie un comportement qui n’aurait pas eu lieu sans intervention.',
                    ],
                    [
                        'question' => 'Pourquoi les décideurs doivent-ils distinguer les coûts irrécupérables des coûts futurs lorsqu’ils réévaluent un projet ?',
                        'choices' => [
                            ['choice_text' => 'Les coûts déjà engagés ne doivent généralement pas déterminer une décision marginale future', 'is_correct' => true],
                            ['choice_text' => 'Tous les coûts passés doivent être ajoutés deux fois', 'is_correct' => false],
                            ['choice_text' => 'Les coûts irrécupérables sont toujours récupérables', 'is_correct' => false],
                            ['choice_text' => 'La décision marginale doit ignorer les bénéfices futurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une décision de continuation, les coûts irrécupérables sont déjà engagés ; la comparaison pertinente porte sur les coûts et bénéfices futurs.',
                    ],
                    [
                        'question' => 'Une agence veut financer un programme en utilisant une taxe affectée exclusivement à ce programme. Quel avantage potentiel et quel risque doivent être examinés ?',
                        'choices' => [
                            ['choice_text' => 'Une meilleure visibilité du financement peut renforcer l’acceptabilité, mais l’affectation peut réduire la flexibilité budgétaire', 'is_correct' => true],
                            'choice_text' => 'L’affectation garantit toujours une dépense efficace', 'is_correct' => false],
                            ['choice_text' => 'Une taxe affectée ne crée jamais de rigidité', 'is_correct' => false],
                            'choice_text' => 'Le financement affecté rend inutile toute évaluation', 'is_correct' => false],
                        ],
                        'explanation' => 'L’affectation de recettes peut faciliter le lien entre paiement et service, mais elle peut aussi réduire la capacité à réallouer les ressources selon les priorités.',
                    ],
                    [
                        'question' => 'Un gouvernement veut utiliser une prévision macroéconomique optimiste pour construire son budget. Quelle pratique professionnelle réduit le risque de surévaluation des recettes ?',
                        'choices' => [
                            ['choice_text' => Utiliser plusieurs scénarios macroéconomiques et des hypothèses prudentes pour tester la résilience du budget', 'is_correct' => true],
                            ['choice_text' => 'Choisir systématiquement le scénario de croissance le plus élevé', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les risques de baisse des recettes', 'is_correct' => false],
                            ['choice_text' => 'Supposer que la conjoncture restera identique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les budgets professionnels doivent intégrer l’incertitude macroéconomique et tester la robustesse des finances publiques dans plusieurs scénarios.',
                    ],
                    [
                        'question' => 'Une réforme crée un gain social important à long terme mais impose des coûts élevés aux ménages actuels. Quel outil peut aider à structurer le débat ?',
                        'choices' => [
                            ['choice_text' => 'Une analyse intertemporelle combinant actualisation, effets distributifs et scénarios de compensation', 'is_correct' => true],
                            ['choice_text' => 'Une comparaison uniquement du budget de l’année en cours', 'is_correct' => false],
                            ['choice_text' => 'Une règle qui ignore les générations futures', 'is_correct' => false],
                            ['choice_text' => 'Une mesure uniquement du nombre de bénéficiaires actuels', 'is_correct' => false],
                        ],
                        'explanation' => 'Les arbitrages intergénérationnels exigent de considérer les bénéfices et coûts dans le temps ainsi que leur répartition entre groupes.',
                    ],
                    [
                        'question' => 'Quelle approche est la plus professionnelle lorsqu’un modèle économique indique qu’une politique est bénéfique mais que les paramètres clés sont très incertains ?',
                        'choices' => [
                            ['choice_text' => Combiner analyse de sensibilité, scénarios, gestion des risques et éventuellement une mise en œuvre progressive', 'is_correct' => true],
                            ['choice_text' => 'Présenter uniquement le scénario central comme certain', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les paramètres incertains', 'is_correct' => false],
                            ['choice_text' => 'Abandonner automatiquement toute politique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une décision professionnelle ne transforme pas une estimation incertaine en certitude ; elle explicite les risques et cherche à les gérer.',
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

                // Mélange des objets complets :
                // is_correct reste attaché à la bonne réponse.
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
