<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class IndustrialEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'industrial-economics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Fondements des structures de marché',
                'description' => 'Ce quiz introduit les principales structures de marché et les critères qui permettent de les distinguer.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Une industrie compte de nombreuses entreprises qui vendent un produit très similaire. Quelle structure de marché correspond le mieux à cette situation ?',
                        'explanation' => 'La concurrence pure et parfaite se caractérise notamment par un grand nombre de vendeurs proposant un produit homogène, avec peu de pouvoir individuel sur le prix.',
                        'choices' => [
                            [
                                'choice_text' => 'Concurrence pure et parfaite',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Monopole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Oligopole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Monopole naturel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans un monopole, pourquoi l’entreprise dispose-t-elle généralement d’un pouvoir de marché ?',
                        'explanation' => 'Le monopole est le seul offreur du marché considéré. Il peut donc influencer le prix ou la quantité, contrairement à une entreprise preneuse de prix.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’elle est l’unique offreur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les consommateurs sont tous identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que ses coûts sont toujours nuls',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’État fixe toujours son prix',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel élément distingue le mieux un oligopole d’une concurrence avec de très nombreuses petites entreprises ?',
                        'explanation' => 'Dans un oligopole, quelques grandes entreprises réalisent une part importante des ventes et tiennent compte des décisions de leurs concurrentes.',
                        'choices' => [
                            [
                                'choice_text' => 'Le nombre limité de grandes entreprises',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’absence totale de concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La gratuité du produit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’interdiction de fixer les prix',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise est preneuse de prix lorsqu’elle :',
                        'explanation' => 'Une entreprise preneuse de prix accepte le prix de marché, car son poids individuel est trop faible pour l’influencer.',
                        'choices' => [
                            [
                                'choice_text' => 'considère le prix du marché comme donné',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'fixe toujours le prix le plus élevé possible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'est obligatoirement un monopole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'vend uniquement à l’État',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre le mieux la différenciation des produits ?',
                        'explanation' => 'Deux entreprises peuvent vendre un produit de même catégorie tout en le distinguant par la qualité, le design, les services ou la marque.',
                        'choices' => [
                            [
                                'choice_text' => 'Deux cafés proposent des recettes différentes et des services distincts',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Deux entreprises vendent exactement le même produit au même endroit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une entreprise cesse totalement de produire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un marché ne compte qu’un seul vendeur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces éléments constitue une barrière à l’entrée ?',
                        'explanation' => 'Une barrière à l’entrée rend plus difficile l’arrivée de nouvelles entreprises sur un marché.',
                        'choices' => [
                            [
                                'choice_text' => 'Un brevet qui limite temporairement l’imitation d’une invention',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une forte demande des consommateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un produit disponible toute l’année',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse des coûts de transport',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si une entreprise devient seule vendeuse après la sortie de tous ses concurrents, quelle structure observe-t-on ?',
                        'explanation' => 'Une entreprise seule sur un marché correspond à un monopole, sous réserve que le marché soit correctement défini.',
                        'choices' => [
                            [
                                'choice_text' => 'Un monopole',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une concurrence monopolistique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un oligopole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une concurrence parfaite',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le nombre de concurrents est-il important pour analyser une industrie ?',
                        'explanation' => 'Le nombre et la taille des entreprises influencent le pouvoir de marché et la façon dont les firmes réagissent les unes aux autres.',
                        'choices' => [
                            [
                                'choice_text' => 'Il aide à évaluer le degré de concurrence',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il détermine automatiquement le coût des matières premières',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il fixe toujours le salaire minimum',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il indique directement le niveau de l’inflation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une industrie où quelques entreprises importantes surveillent les prix et les décisions de leurs concurrentes présente surtout une caractéristique de :',
                        'explanation' => 'L’interdépendance stratégique est centrale dans l’oligopole, car l’action d’une firme peut modifier les résultats des autres.',
                        'choices' => [
                            [
                                'choice_text' => 'l’oligopole',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'monopole naturel',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'concurrence parfaite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'marché sans échange',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel critère est particulièrement utile pour distinguer les structures de marché ?',
                        'explanation' => 'La structure d’un marché s’analyse notamment à partir du nombre de vendeurs, des barrières à l’entrée, du degré de différenciation et du pouvoir de marché.',
                        'choices' => [
                            [
                                'choice_text' => 'le nombre d’entreprises et les barrières à l’entrée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la météo annuelle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la couleur des bâtiments des entreprises',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'le nombre de jours fériés',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Sur un marché parfaitement concurrentiel, le pouvoir d’une seule petite entreprise sur le prix est généralement :',
                        'explanation' => 'Quand de nombreuses entreprises proposent des produits homogènes, une entreprise isolée ne peut normalement pas modifier le prix de marché à elle seule.',
                        'choices' => [
                            [
                                'choice_text' => 'très faible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'très élevé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'toujours nul pour le marché entier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'égal à celui d’un monopole',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise qui propose une marque particulière mais fait face à plusieurs concurrents vendant des produits proches évolue dans un environnement de :',
                        'explanation' => 'La concurrence monopolistique combine de nombreux vendeurs avec une certaine différenciation des produits.',
                        'choices' => [
                            [
                                'choice_text' => 'concurrence monopolistique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'monopole strict',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'oligopole avec un seul vendeur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'marché sans demande',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Concurrence, pouvoir de marché et monopole',
                'description' => 'Ce quiz porte sur le pouvoir de marché, le comportement d’un monopole et les effets élémentaires de la concurrence.',
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Une entreprise augmente son prix et constate que certains clients se tournent vers des concurrents. Que peut-on en déduire ?',
                        'explanation' => 'La présence de produits concurrents limite le pouvoir de marché : les consommateurs peuvent substituer une autre offre au produit devenu plus cher.',
                        'choices' => [
                            [
                                'choice_text' => 'La concurrence limite son pouvoir de marché',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle est nécessairement un monopole légal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La demande de son produit est inexistante',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les concurrents ne jouent aucun rôle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un monopole ne choisit-il pas simplement un prix extrêmement élevé ?',
                        'explanation' => 'Même un monopole fait face à une demande décroissante : un prix plus élevé réduit généralement la quantité demandée.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’un prix élevé réduit généralement la quantité demandée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que ses clients augmentent toujours leurs achats',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que son coût marginal devient automatiquement nul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’un monopole ne peut jamais modifier son prix',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans une industrie concurrentielle, l’arrivée de nouvelles entreprises tend, toutes choses égales par ailleurs, à :',
                        'explanation' => 'L’entrée augmente l’offre disponible et accroît la pression concurrentielle entre les entreprises.',
                        'choices' => [
                            [
                                'choice_text' => 'renforcer la concurrence',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'supprimer toute demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'transformer automatiquement le marché en monopole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'garantir des profits élevés à toutes les entreprises',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement une entreprise ayant du pouvoir de marché ?',
                        'explanation' => 'Le pouvoir de marché désigne la capacité à influencer le prix de vente ou les conditions du marché, plutôt qu’à simplement accepter un prix donné.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut influencer les conditions de vente',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle ne rencontre aucune demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle doit toujours vendre à perte',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle est obligatoirement publique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Sur un marché concurrentiel, qu’arrive-t-il généralement à la marge de choix des consommateurs lorsque le nombre de vendeurs augmente ?',
                        'explanation' => 'Plus de vendeurs donnent généralement aux consommateurs davantage d’options et peuvent renforcer la pression sur les prix ou la qualité.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle augmente',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle disparaît nécessairement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle devient automatiquement nulle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne peut jamais changer',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une ville n’autorise qu’une seule entreprise à exploiter un réseau de distribution d’eau. Quel point doit-on surtout examiner pour comprendre cette situation ?',
                        'explanation' => 'Un monopole peut être lié à des caractéristiques de coûts et d’infrastructure qui rendent plusieurs réseaux inefficients, ce qui est typique du monopole naturel.',
                        'choices' => [
                            [
                                'choice_text' => 'les caractéristiques du réseau et les coûts',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la météo du mois',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la couleur du logo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'le nombre de publicités diffusées',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel résultat est le plus directement associé à une baisse des barrières à l’entrée ?',
                        'explanation' => 'Des barrières plus faibles facilitent l’arrivée de nouveaux concurrents, ce qui peut réduire le pouvoir de marché des entreprises déjà présentes.',
                        'choices' => [
                            [
                                'choice_text' => 'Une entrée plus facile de concurrents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition automatique de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse garantie des profits des entreprises en place',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une interdiction de l’innovation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise de téléphonie propose plusieurs forfaits adaptés à des profils différents. Quel objectif économique peut expliquer cette pratique ?',
                        'explanation' => 'Des offres différenciées permettent de répondre à des préférences différentes et de mieux adapter les prix ou les services aux segments de clientèle.',
                        'choices' => [
                            [
                                'choice_text' => 'Différencier l’offre selon les besoins des clients',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer tout choix pour les consommateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éliminer l’ensemble des coûts fixes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Rendre le marché totalement concurrentiel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Le pouvoir de marché est généralement plus important lorsque :',
                        'explanation' => 'La faible pression concurrentielle et les obstacles à l’entrée peuvent donner à une entreprise davantage de capacité à influencer le prix.',
                        'choices' => [
                            [
                                'choice_text' => 'les alternatives pour les clients sont limitées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'les clients ont de nombreux substituts proches',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'l’entrée de nouvelles entreprises est très facile',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'les produits sont parfaitement identiques et les vendeurs très nombreux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une réglementation impose à une entreprise monopolistique de publier clairement ses tarifs. Cette mesure agit directement sur :',
                        'explanation' => 'La transparence des prix permet aux clients et aux autorités de mieux connaître les conditions de vente, sans supprimer à elle seule le monopole.',
                        'choices' => [
                            [
                                'choice_text' => 'la transparence du marché',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'le nombre de saisons agricoles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la taille des ménages',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la quantité de monnaie en circulation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une baisse durable du prix d’un concurrent pousse une entreprise à revoir son propre prix. Cette réaction illustre surtout :',
                        'explanation' => 'Lorsqu’elles se font concurrence, les entreprises peuvent ajuster leurs décisions en fonction des actions observées chez leurs rivales.',
                        'choices' => [
                            [
                                'choice_text' => 'l’interaction entre décisions des entreprises',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'l’absence de concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la disparition du marché',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une politique monétaire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur simple peut donner une première idée du pouvoir de marché d’une entreprise ?',
                        'explanation' => 'La part de marché n’est pas une mesure parfaite, mais une part élevée peut signaler une position importante dans l’industrie.',
                        'choices' => [
                            [
                                'choice_text' => 'sa part de marché',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'le nombre de jours travaillés dans l’année',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la hauteur de son immeuble',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'le montant de ses dépenses personnelles',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Oligopole et stratégies des entreprises',
                'description' => 'Ce quiz explore l’interdépendance entre quelques grandes entreprises et quelques décisions stratégiques simples.',
                'duration' => 24,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Deux grandes entreprises dominent un marché. Si l’une réduit son prix, l’autre risque de perdre des clients. Cela montre que :',
                        'explanation' => 'Dans un oligopole, les décisions d’une entreprise peuvent modifier la demande adressée aux autres entreprises.',
                        'choices' => [
                            [
                                'choice_text' => 'les entreprises sont interdépendantes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'le marché est nécessairement un monopole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'les clients n’ont aucune préférence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'les coûts fixes sont toujours nuls',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise oligopolistique surveille-t-elle les annonces de ses concurrentes ?',
                        'explanation' => 'Les décisions de prix, de production, de publicité ou d’investissement d’une grande entreprise peuvent affecter directement les autres.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les décisions d’un concurrent peuvent modifier son propre marché',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les concurrents fixent ses salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la demande est toujours parfaitement prévisible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle n’a aucune décision propre à prendre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise investit fortement dans la publicité alors que ses concurrents font de même. Quel aspect de l’oligopole est particulièrement visible ?',
                        'explanation' => 'La stratégie d’une firme peut susciter une réaction des autres, ce qui crée une interaction stratégique.',
                        'choices' => [
                            [
                                'choice_text' => 'la réaction possible des concurrents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la disparition de toute concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la gratuité de la publicité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'l’impossibilité de différencier les produits',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans un oligopole, une guerre des prix peut être coûteuse pour les entreprises parce que :',
                        'explanation' => 'Des baisses successives de prix peuvent réduire les marges de plusieurs entreprises en même temps.',
                        'choices' => [
                            [
                                'choice_text' => 'les marges peuvent diminuer pour plusieurs concurrents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la demande devient automatiquement infinie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'les coûts de production disparaissent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'les entreprises vendent toujours plus cher',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation correspond le mieux à un oligopole ?',
                        'explanation' => 'Quelques firmes de grande taille dominent les ventes et tiennent compte des actions des autres.',
                        'choices' => [
                            [
                                'choice_text' => 'Trois grandes entreprises réalisent l’essentiel des ventes d’un marché',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Des milliers de petits vendeurs sans influence individuelle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un seul vendeur sans concurrent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un marché où personne ne vend',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise annonce une forte baisse de prix. Quelle réaction d’un concurrent serait cohérente avec un comportement stratégique ?',
                        'explanation' => 'Réagir à la baisse de prix peut permettre au concurrent de limiter la perte de clients, ce qui illustre l’interdépendance.',
                        'choices' => [
                            [
                                'choice_text' => 'Baisser à son tour son prix',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ignorer systématiquement le marché',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cesser de calculer ses coûts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer toute information sur ses produits',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un marché compte quatre grandes entreprises, mais chacune vend un produit très différent. Quel élément reste important pour l’analyse ?',
                        'explanation' => 'Même avec des produits différenciés, le faible nombre de grandes firmes peut créer une forte interdépendance.',
                        'choices' => [
                            [
                                'choice_text' => 'le nombre limité de concurrents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'uniquement la couleur des produits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'uniquement la météo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'uniquement la monnaie utilisée',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les barrières à l’entrée sont-elles souvent importantes dans un oligopole ?',
                        'explanation' => 'Des barrières élevées limitent l’arrivée de nouvelles entreprises et peuvent maintenir la position des firmes déjà installées.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles peuvent protéger la position des entreprises en place',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles garantissent toujours l’innovation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles rendent les consommateurs responsables des prix',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles suppriment les coûts de production',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise oligopolistique améliore la qualité de son produit au lieu de réduire le prix. Cette décision est un exemple de :',
                        'explanation' => 'La concurrence ne passe pas uniquement par les prix ; les entreprises peuvent aussi agir sur la qualité, les services ou la marque.',
                        'choices' => [
                            [
                                'choice_text' => 'concurrence hors prix',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'contrôle des salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'politique budgétaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'baisse automatique de l’offre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux concurrents observent qu’une augmentation de leurs capacités de production pourrait faire baisser les prix du marché. Ils doivent donc tenir compte :',
                        'explanation' => 'Dans un marché concentré, les décisions de capacité peuvent influencer l’offre totale et donc les prix.',
                        'choices' => [
                            [
                                'choice_text' => 'de l’effet de leurs décisions sur le marché',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'uniquement de la météo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'uniquement du taux de change',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'uniquement des préférences internes des salariés',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement peut intensifier une concurrence hors prix ?',
                        'explanation' => 'L’amélioration des services, de la qualité ou de la publicité permet de rivaliser sans modifier directement le prix.',
                        'choices' => [
                            [
                                'choice_text' => 'augmenter le service après-vente',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'supprimer toute différenciation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'interdire les promotions aux clients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'fixer le même produit dans toutes les entreprises',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une petite entreprise entre sur un marché dominé par quelques grandes firmes, l’obstacle principal peut être :',
                        'explanation' => 'Les grandes firmes peuvent bénéficier d’économies d’échelle, de marques reconnues ou d’autres barrières qui rendent l’entrée difficile.',
                        'choices' => [
                            [
                                'choice_text' => 'les barrières à l’entrée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'l’absence de consommateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la disparition du produit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'l’impossibilité de mesurer les coûts',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Barrières à l’entrée, concentration et économies d’échelle',
                'description' => 'Ce quiz porte sur les facteurs qui influencent l’entrée sur un marché et le degré de concentration d’une industrie.',
                'duration' => 25,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Une industrie exige un investissement initial très élevé avant de pouvoir produire à grande échelle. Cet investissement peut constituer :',
                        'explanation' => 'Un besoin important de capital initial peut décourager de nouveaux entrants et constituer une barrière à l’entrée.',
                        'choices' => [
                            [
                                'choice_text' => 'une barrière à l’entrée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une externalité positive',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un bien public',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une baisse automatique des coûts variables',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réduit son coût moyen lorsque sa production augmente sur une large plage de production. Cela correspond à :',
                        'explanation' => 'Les économies d’échelle signifient que le coût moyen de production diminue lorsque l’échelle de production augmente.',
                        'choices' => [
                            [
                                'choice_text' => 'des économies d’échelle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une pénurie de capital',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une élasticité nulle de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une baisse de la productivité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les économies d’échelle peuvent-elles favoriser les grandes entreprises ?',
                        'explanation' => 'Lorsqu’une production plus importante réduit le coût moyen, les grandes firmes peuvent bénéficier d’un avantage de coût.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles peuvent réduire le coût moyen à grande échelle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles rendent toujours les clients moins nombreux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles empêchent toute innovation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles suppriment les coûts fixes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une industrie dans laquelle quelques entreprises représentent une très grande part des ventes est dite :',
                        'explanation' => 'Une forte concentration signifie qu’une part importante du marché est détenue par un nombre limité de firmes.',
                        'choices' => [
                            [
                                'choice_text' => 'fortement concentrée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'totalement publique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'parfaitement atomisée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'sans structure',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel changement tend le plus directement à réduire la concentration d’un marché ?',
                        'explanation' => 'L’arrivée de nouvelles entreprises qui prennent des parts de marché peut réduire la concentration si elle est suffisamment importante.',
                        'choices' => [
                            [
                                'choice_text' => 'l’entrée de plusieurs nouveaux concurrents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la sortie de nombreuses petites entreprises',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une fusion entre les deux plus grandes firmes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la disparition des consommateurs',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une marque très connue constitue une barrière à l’entrée lorsque :',
                        'explanation' => 'Une marque installée peut rendre plus difficile l’acquisition de clients par un nouvel entrant, surtout lorsque la fidélité est forte.',
                        'choices' => [
                            [
                                'choice_text' => 'elle rend difficile l’acquisition de clients pour un nouvel entrant',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'elle oblige toutes les firmes à vendre au même prix',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'elle réduit nécessairement la demande totale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'elle supprime les coûts fixes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à une barrière réglementaire à l’entrée ?',
                        'explanation' => 'Une licence obligatoire peut limiter l’accès à une activité lorsque l’entrée est soumise à une autorisation légale.',
                        'choices' => [
                            [
                                'choice_text' => 'l’obligation d’obtenir une licence pour exercer une activité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une baisse des coûts de transport',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une préférence changeante des clients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une hausse naturelle de la productivité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une fusion réunit les deux plus grands producteurs d’une industrie. Quelle conséquence sur la concentration est la plus directe ?',
                        'explanation' => 'La fusion réduit le nombre d’entreprises indépendantes et peut augmenter la part détenue par la nouvelle entité.',
                        'choices' => [
                            [
                                'choice_text' => 'la concentration peut augmenter',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la concentration diminue nécessairement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'le nombre d’entreprises augmente',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la demande disparaît',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un brevet peut favoriser temporairement le pouvoir de marché d’une entreprise parce qu’il :',
                        'explanation' => 'Le brevet accorde un droit exclusif limité dans le temps sur certaines utilisations de l’invention, ce qui peut limiter l’imitation directe.',
                        'choices' => [
                            [
                                'choice_text' => 'limite légalement certaines imitations pendant une période donnée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'interdit toute concurrence pour toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'garantit un profit sans demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'supprime tous les coûts de production',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces éléments n’est pas, à lui seul, une preuve de pouvoir de marché ?',
                        'explanation' => 'Une grande taille d’entreprise peut être liée à des coûts plus faibles ou à une forte productivité ; elle ne prouve pas à elle seule la capacité de fixer les prix.',
                        'choices' => [
                            [
                                'choice_text' => 'une grande taille de production',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une forte part de marché accompagnée de barrières à l’entrée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la possibilité d’influencer les prix',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'l’absence de nombreux substituts proches',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise doit engager des dépenses importantes pour construire un réseau avant de pouvoir servir ses clients. Cette caractéristique peut :',
                        'explanation' => 'Les investissements irrécupérables ou très spécifiques peuvent augmenter le risque pour un nouvel entrant et donc décourager l’entrée.',
                        'choices' => [
                            [
                                'choice_text' => 'augmenter les difficultés d’entrée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'garantir automatiquement une forte demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'supprimer toute concurrence existante',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'rendre les prix indépendants des coûts',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les autorités de concurrence surveillent-elles certaines fusions entre grandes entreprises ?',
                        'explanation' => 'Une fusion importante peut réduire le nombre de concurrents et renforcer le pouvoir de marché, ce qui justifie une analyse de ses effets concurrentiels.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’elles peuvent modifier la structure concurrentielle du marché',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’une fusion réduit toujours les salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elles empêchent toute économie d’échelle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elles déterminent toujours l’inflation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Prix, coûts, produits et organisation industrielle',
                'description' => 'Ce quiz relie les notions de prix, de coûts, de différenciation et de taille des entreprises dans l’analyse industrielle.',
                'duration' => 23,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Une entreprise augmente son prix de 10 % et perd une partie de sa clientèle au profit de produits similaires. Quel facteur limite probablement son pouvoir de marché ?',
                        'explanation' => 'La disponibilité de substituts proches rend les clients plus sensibles au prix d’une entreprise.',
                        'choices' => [
                            [
                                'choice_text' => 'la présence de produits substituables',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'l’absence de concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un brevet perpétuel',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une demande sans limite',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple relève d’une différenciation verticale du produit ?',
                        'explanation' => 'Une différence de qualité mesurable, comme une meilleure autonomie ou une durée de vie plus longue, constitue une différenciation verticale.',
                        'choices' => [
                            [
                                'choice_text' => 'Un téléphone offre une autonomie nettement supérieure à celle d’un autre',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Deux produits identiques portent seulement des noms différents',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Deux magasins sont ouverts le même jour',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Deux entreprises utilisent la même machine',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre plutôt une différenciation horizontale ?',
                        'explanation' => 'La différenciation horizontale concerne des variantes qui peuvent répondre à des goûts différents sans qu’une caractéristique soit nécessairement préférée par tous.',
                        'choices' => [
                            [
                                'choice_text' => 'Deux restaurants proposent des cuisines de styles différents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un modèle a une durée de vie deux fois plus longue pour tous les clients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une entreprise double sa capacité de production',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un fabricant réduit son coût fixe',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise produit 1 000 unités et ses coûts fixes sont répartis sur davantage d’unités lorsqu’elle passe à 2 000 unités. Quelle notion explique cette baisse du coût fixe moyen ?',
                        'explanation' => 'Le coût fixe moyen diminue lorsque le même coût fixe est réparti sur un plus grand nombre d’unités.',
                        'choices' => [
                            [
                                'choice_text' => 'la répartition des coûts fixes sur une plus grande production',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la hausse automatique du coût variable',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la disparition du coût total',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la baisse du nombre de clients',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réalise une recette totale de 20 000 DH et supporte 15 000 DH de coûts totaux. Son profit est de :',
                        'explanation' => 'Le profit se calcule en soustrayant le coût total de la recette totale : 20 000 − 15 000 = 5 000 DH.',
                        'choices' => [
                            [
                                'choice_text' => '5 000 DH',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '35 000 DH',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '15 000 DH',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '500 DH',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise hésite à produire une unité supplémentaire qui rapporterait 80 DH de recette et coûterait 50 DH en coût supplémentaire. En raisonnant à la marge, que peut-on conclure ?',
                        'explanation' => 'La recette supplémentaire de 80 DH dépasse le coût supplémentaire de 50 DH, ce qui augmente le profit de 30 DH si les autres éléments restent inchangés.',
                        'choices' => [
                            [
                                'choice_text' => 'La production de cette unité augmente le profit de 30 DH',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle réduit le profit de 30 DH',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle n’a aucun effet sur le profit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle entraîne automatiquement une perte de 80 DH',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle conserver plusieurs modèles d’un même produit ?',
                        'explanation' => 'Proposer plusieurs variantes peut permettre de répondre à des préférences différentes et de toucher plusieurs segments de consommateurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour répondre à des préférences différentes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer toute demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter toute concurrence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour rendre les coûts fixes égaux à zéro',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du coût d’un intrant essentiel, comme l’électricité, affecte directement :',
                        'explanation' => 'Une hausse du prix d’un intrant augmente le coût de production et peut réduire la marge de l’entreprise.',
                        'choices' => [
                            [
                                'choice_text' => 'les coûts de production',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'le nombre de concurrents par décret',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la taille de la population mondiale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la valeur nominale de toutes les monnaies',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise vend 500 unités à 40 DH chacune. Sa recette totale est :',
                        'explanation' => 'La recette totale est égale au prix par unité multiplié par la quantité vendue : 500 × 40 = 20 000 DH.',
                        'choices' => [
                            [
                                'choice_text' => '20 000 DH',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '540 DH',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12 500 DH',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2 000 DH',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une amélioration du service après-vente peut permettre à une entreprise de concurrencer ses rivales sans baisser le prix. Cela correspond à :',
                        'explanation' => 'La concurrence hors prix utilise la qualité, le service, la marque ou d’autres caractéristiques pour attirer les clients.',
                        'choices' => [
                            [
                                'choice_text' => 'une concurrence hors prix',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'un monopole naturel',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une baisse du capital humain',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une politique monétaire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une entreprise compare le bénéfice attendu d’un projet avec son coût, elle applique principalement un raisonnement :',
                        'explanation' => 'Le raisonnement coût-bénéfice consiste à comparer les avantages attendus d’une décision à ses coûts pertinents.',
                        'choices' => [
                            [
                                'choice_text' => 'coût-bénéfice',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'comptable uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'juridique uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'démographique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un produit devient plus attractif parce que l’entreprise ajoute gratuitement une assistance technique. Cette pratique modifie principalement :',
                        'explanation' => 'Ajouter un service augmente la valeur perçue de l’offre et peut différencier le produit face à des concurrents.',
                        'choices' => [
                            [
                                'choice_text' => 'la proposition de valeur du produit',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'le nombre de lois économiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'le niveau de la monnaie fiduciaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la météo',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Fusions, concurrence et stratégie industrielle',
                'description' => 'Ce quiz aborde les fusions, la concentration et quelques principes simples de politique de concurrence.',
                'duration' => 26,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Deux entreprises qui produisent des produits similaires fusionnent. Comment appelle-t-on cette opération ?',
                        'explanation' => 'Une fusion horizontale réunit des entreprises situées au même niveau de production et souvent concurrentes sur le même marché.',
                        'choices' => [
                            [
                                'choice_text' => 'une fusion horizontale',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une fusion verticale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une diversification agricole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une privatisation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un fabricant achète son principal distributeur afin de mieux contrôler la distribution. Il s’agit le plus souvent d’une :',
                        'explanation' => 'Une intégration verticale réunit des entreprises situées à des étapes différentes de la chaîne de valeur.',
                        'choices' => [
                            [
                                'choice_text' => 'intégration verticale',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'fusion horizontale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'concurrence parfaite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'externalité négative',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une fusion peut-elle générer des économies d’échelle ?',
                        'explanation' => 'Une entreprise issue de la fusion peut parfois mutualiser certaines fonctions et produire à une échelle plus grande, ce qui réduit certains coûts moyens.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’elle peut mutualiser des ressources et produire à plus grande échelle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle supprime toute demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle interdit l’entrée par définition',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle rend tous les coûts variables nuls',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une autorité de concurrence peut-elle demander des engagements à une grande entreprise issue d’une fusion ?',
                        'explanation' => 'Les engagements peuvent limiter certains effets anticoncurrentiels identifiés lors de l’examen de l’opération.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour réduire certains risques pour la concurrence',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour garantir un profit minimum',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour fixer tous les salaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les économies d’échelle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise évite volontairement d’entrer sur un marché parce qu’elle estime que l’investissement initial serait impossible à récupérer en cas d’échec. Cela illustre :',
                        'explanation' => 'Le risque lié à des investissements spécifiques ou irrécupérables peut influencer la décision d’entrée.',
                        'choices' => [
                            [
                                'choice_text' => 'l’effet des coûts irrécupérables sur l’entrée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la concurrence parfaite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une baisse de l’offre de travail',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'la politique monétaire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise dominante vend moins cher pendant une courte période, puis remonte ses prix après le départ de plusieurs concurrents. Pourquoi cette stratégie peut-elle inquiéter les autorités de concurrence ?',
                        'explanation' => 'Une politique de prix destinée à évincer des concurrents peut, selon les faits, réduire durablement la concurrence ; son appréciation dépend du contexte juridique et économique.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’elle peut chercher à réduire durablement la concurrence',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’une baisse de prix est toujours illégale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les consommateurs détestent les prix bas',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que toute entreprise doit maintenir un prix fixe',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel effet peut avoir l’entrée d’une nouvelle entreprise plus efficace dans une industrie ?',
                        'explanation' => 'Un entrant plus efficace peut accroître la pression concurrentielle et inciter les entreprises en place à améliorer leurs prix, coûts ou produits.',
                        'choices' => [
                            [
                                'choice_text' => 'accroître la pression concurrentielle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'garantir la hausse des prix',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'supprimer automatiquement la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'transformer forcément l’industrie en monopole',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un marché devient plus concentré après plusieurs rachats entre concurrents. Quel changement structurel observe-t-on ?',
                        'explanation' => 'Des rachats successifs entre concurrents réduisent le nombre d’entreprises indépendantes et peuvent augmenter la concentration.',
                        'choices' => [
                            [
                                'choice_text' => 'une réduction du nombre de concurrents indépendants',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une augmentation automatique du nombre de vendeurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une disparition des coûts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une baisse certaine de la productivité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif général une politique de concurrence cherche-t-elle notamment à préserver ?',
                        'explanation' => 'La politique de concurrence vise notamment à protéger le processus concurrentiel, afin que les entreprises rivalisent par les prix, la qualité, l’innovation ou d’autres dimensions.',
                        'choices' => [
                            [
                                'choice_text' => 'un processus de concurrence effectif',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'un monopole permanent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un prix unique dans tous les secteurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'des profits identiques pour toutes les entreprises',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise choisit d’investir dans une nouvelle technologie afin de réduire son coût unitaire. Cette décision peut renforcer sa position grâce à :',
                        'explanation' => 'Une technologie plus efficace peut accroître la productivité et réduire les coûts unitaires, ce qui améliore la capacité concurrentielle.',
                        'choices' => [
                            [
                                'choice_text' => 'un avantage de coût',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'une disparition de la demande',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une baisse du nombre de consommateurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un contrôle administratif des salaires',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise achète un fournisseur de composants qu’elle utilisait auparavant. Quel gain potentiel peut venir de cette opération ?',
                        'explanation' => 'L’intégration d’un fournisseur peut faciliter la coordination, sécuriser l’approvisionnement ou réduire certains coûts de transaction.',
                        'choices' => [
                            [
                                'choice_text' => 'une meilleure coordination de la chaîne d’approvisionnement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'la suppression de toute concurrence dans l’économie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une garantie de monopole légal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une baisse automatique de tous les prix',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la part de marché ne suffit-elle pas toujours à conclure qu’une entreprise abuse de sa position ?',
                        'explanation' => 'Une part de marché élevée doit être interprétée avec d’autres éléments, comme les barrières à l’entrée, la contestabilité et le comportement de l’entreprise.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’il faut analyser aussi la structure du marché et le comportement de l’entreprise',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la part de marché n’a jamais d’importance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’une grande entreprise n’a jamais de concurrent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les prix ne comptent pas en économie',
                                'is_correct' => false,
                            ],
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
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
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
