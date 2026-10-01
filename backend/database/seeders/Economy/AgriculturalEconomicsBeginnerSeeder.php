<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AgriculturalEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'agricultural-economics')->firstOrFail();

        $quizzes = [
            [
                "title" => "Fondamentaux de l’économie agricole",
                "description" => "Révision des notions de base liées à la production agricole, aux facteurs de production et à la productivité des exploitations.",
                "duration" => 20,
                "passing_score" => 50,
                "questions" => [
                    [
                        "question" => "Une exploitation agricole produit du blé en utilisant de la terre, du travail et des machines. Comment qualifier ces éléments ?",
                        "explanation" => "La terre, le travail et le capital physique sont des facteurs de production utilisés pour transformer des ressources en biens et services.",
                        "choices" => [
                            [
                                "choice_text" => "Ce sont des facteurs de production.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Des biens de luxe.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Des biens publics.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Des recettes fiscales.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Un agriculteur peut utiliser une parcelle pour produire du blé ou des légumes, mais pas les deux simultanément pendant la même saison. Quelle notion décrit le renoncement à la deuxième possibilité ?",
                        "explanation" => "Le coût d’opportunité correspond à la valeur de la meilleure possibilité abandonnée lorsqu’un choix est effectué.",
                        "choices" => [
                            [
                                "choice_text" => "Le coût d’opportunité.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Le coût fixe.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le bénéfice marginal.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La productivité moyenne.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Si une ferme passe de 100 à 120 tonnes de maïs avec une quantité presque identique de travail, que peut-on conclure en première approximation ?",
                        "explanation" => "À quantité de travail comparable, produire davantage signifie que la production par unité de travail a augmenté : la productivité du travail progresse.",
                        "choices" => [
                            [
                                "choice_text" => "La productivité du travail a augmenté.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Le prix du maïs a forcément baissé.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La demande de maïs a disparu.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La surface agricole a nécessairement diminué.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Pourquoi la terre est-elle généralement considérée comme un facteur de production particulier en agriculture ?",
                        "explanation" => "La terre est une ressource limitée dont la localisation influence l’accès à l’eau, aux marchés, aux infrastructures et aux conditions de production.",
                        "choices" => [
                            [
                                "choice_text" => "Sa quantité disponible à un endroit donné est limitée et sa localisation compte.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Elle ne nécessite jamais d’entretien.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Elle peut être créée instantanément.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Elle n’a aucun lien avec la production.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une sécheresse réduit fortement la récolte d’une région. Quel effet direct peut-on attendre, toutes choses égales par ailleurs, sur l’offre locale de céréales ?",
                        "explanation" => "Une mauvaise récolte réduit la quantité disponible que les producteurs peuvent proposer sur le marché, ce qui diminue l’offre.",
                        "choices" => [
                            [
                                "choice_text" => "L’offre diminue.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "L’offre augmente.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La demande devient nulle.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Les coûts de transport disparaissent.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Quel exemple correspond le mieux à un intrant agricole ?",
                        "explanation" => "Une semence est un intrant car elle est directement utilisée dans le processus de production agricole.",
                        "choices" => [
                            [
                                "choice_text" => "Une semence utilisée pour produire du blé.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Le revenu annuel du ménage agricole.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le prix d’un logement en ville.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une campagne publicitaire pour une banque.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une ferme investit dans une machine qui permet de récolter davantage avec le même nombre d’ouvriers. Quel mécanisme est principalement illustré ?",
                        "explanation" => "La machine permet aux mêmes travailleurs de produire davantage : la production par travailleur augmente, ce qui correspond à une hausse de la productivité du travail.",
                        "choices" => [
                            [
                                "choice_text" => "Une hausse de la productivité du travail.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Une baisse de la productivité du travail.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une réduction de la demande alimentaire.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une hausse automatique de tous les salaires.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Quelle distinction est correcte entre production agricole et productivité ?",
                        "explanation" => "La production indique une quantité produite, alors que la productivité mesure l’efficacité avec laquelle un facteur ou un ensemble d’intrants permet d’obtenir cette production.",
                        "choices" => [
                            [
                                "choice_text" => "La production mesure la quantité produite, tandis que la productivité rapporte la production à une quantité d’intrant.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "La production et la productivité sont exactement la même chose.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La productivité mesure uniquement le prix de vente.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La production mesure uniquement le nombre d’exploitations.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Dans une exploitation, remplacer une ancienne pompe par une pompe plus efficace permet d’utiliser moins d’énergie pour irriguer la même surface. Quel résultat est le plus directement attendu ?",
                        "explanation" => "Pour une même tâche réalisée avec moins d’énergie, l’exploitation utilise son intrant énergétique plus efficacement.",
                        "choices" => [
                            [
                                "choice_text" => "Une meilleure efficacité d’utilisation d’un intrant.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Une disparition de la terre agricole.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une baisse obligatoire de la production.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une suppression de la demande en eau au niveau régional.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Pourquoi les saisons jouent-elles un rôle économique important en agriculture ?",
                        "explanation" => "Les cultures suivent des cycles biologiques et dépendent souvent de conditions climatiques saisonnières, ce qui influence les périodes de semis, de récolte et de commercialisation.",
                        "choices" => [
                            [
                                "choice_text" => "Parce que de nombreuses productions dépendent du cycle biologique et du calendrier climatique.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Parce que les agriculteurs ne peuvent jamais vendre leurs produits.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Parce que les prix agricoles sont fixés une fois pour toutes.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Parce que la terre change de propriétaire chaque saison.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une exploitation familiale possède peu de machines mais beaucoup de main-d’œuvre disponible. Quel type de production peut être qualifié de relativement intensif en travail ?",
                        "explanation" => "Une activité est relativement intensive en travail lorsqu’elle mobilise une quantité importante de travail par rapport aux autres facteurs de production.",
                        "choices" => [
                            [
                                "choice_text" => "Une production qui utilise proportionnellement beaucoup de travail.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Une production qui n’utilise aucune terre.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une production sans coûts.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une production destinée uniquement à l’exportation.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Pourquoi la diversification des cultures peut-elle être utile à une petite exploitation ?",
                        "explanation" => "Produire plusieurs cultures peut limiter l’exposition à un seul prix de marché, à une seule maladie ou à un seul aléa climatique.",
                        "choices" => [
                            [
                                "choice_text" => "Elle peut réduire la dépendance à un seul produit et répartir certains risques.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Elle garantit toujours un bénéfice élevé.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Elle élimine tous les besoins en irrigation.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Elle interdit toute spécialisation.",
                                "is_correct" => false
                            ]
                        ]
                    ]
                ]
            ],
            [
                "title" => "Marchés agricoles, offre et demande",
                "description" => "Comprendre le fonctionnement des marchés agricoles, la formation des prix et les effets simples des variations de l’offre et de la demande.",
                "duration" => 22,
                "passing_score" => 55,
                "questions" => [
                    [
                        "question" => "Le prix d’un produit agricole augmente alors que les conditions de production n’ont pas changé. Quel mécanisme peut expliquer cette hausse ?",
                        "explanation" => "À offre donnée, une hausse de la demande exerce une pression à la hausse sur le prix d’équilibre dans le modèle simple offre-demande.",
                        "choices" => [
                            [
                                "choice_text" => "Une augmentation de la demande.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Une baisse certaine des coûts de production.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une disparition de toute offre.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une baisse automatique des revenus des consommateurs.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Après une excellente récolte de tomates, la quantité disponible sur le marché augmente fortement. Si la demande ne change pas, quelle pression peut apparaître sur le prix ?",
                        "explanation" => "Une récolte abondante augmente l’offre. Si la demande reste stable, le prix d’équilibre tend à diminuer dans le modèle de base.",
                        "choices" => [
                            [
                                "choice_text" => "Une pression à la baisse sur le prix.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Une pression à la hausse sur le prix.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Aucune possibilité de variation.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une hausse automatique des coûts salariaux.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une population consomme davantage d’huile d’olive à revenu inchangé. Quelle courbe se déplace, dans le modèle simple offre-demande ?",
                        "explanation" => "Une modification des préférences ou de la quantité souhaitée par les consommateurs déplace la demande.",
                        "choices" => [
                            [
                                "choice_text" => "La courbe de demande.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "La courbe d’offre.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Les deux courbes obligatoirement dans la même proportion.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Aucune courbe.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Si le coût des engrais augmente fortement et que les producteurs ne peuvent pas facilement les remplacer, quel effet peut-on attendre sur l’offre de la culture concernée ?",
                        "explanation" => "Des coûts d’intrants plus élevés réduisent la rentabilité de la production et peuvent conduire les producteurs à offrir moins à chaque prix.",
                        "choices" => [
                            [
                                "choice_text" => "L’offre peut diminuer à chaque niveau de prix.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "La demande augmente automatiquement.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le marché devient nécessairement un monopole.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La production devient gratuite.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Un agriculteur vend 500 kg d’un produit à 4 dirhams le kilogramme. Quelle est sa recette totale avant les autres coûts ?",
                        "explanation" => "La recette totale se calcule en multipliant la quantité vendue par le prix unitaire : 500 × 4 = 2 000 dirhams.",
                        "choices" => [
                            [
                                "choice_text" => "2 000 dirhams.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "500 dirhams.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "1 000 dirhams.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "2 500 dirhams.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Pourquoi les prix agricoles peuvent-ils être relativement volatils d’une année à l’autre ?",
                        "explanation" => "Les chocs de production peuvent modifier fortement l’offre alors que la demande ne s’ajuste pas toujours rapidement, ce qui peut entraîner d’importantes variations de prix.",
                        "choices" => [
                            [
                                "choice_text" => "Parce que l’offre peut varier avec la météo, les maladies ou les conditions de production.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Parce que l’offre agricole ne change jamais.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Parce que la demande alimentaire est toujours nulle en hiver.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Parce que les prix sont sans rapport avec l’offre et la demande.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une baisse du prix des oranges conduit certains consommateurs à en acheter davantage, toutes choses égales par ailleurs. Quel concept illustre cette situation ?",
                        "explanation" => "La loi de la demande décrit une relation inverse entre le prix d’un bien et la quantité demandée, toutes choses égales par ailleurs.",
                        "choices" => [
                            [
                                "choice_text" => "La loi de la demande.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "La loi des rendements croissants.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La loi de la fiscalité.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La théorie de la monnaie.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une région productrice de pommes connaît une maladie des arbres qui réduit la récolte. Sur un marché concurrentiel, quel couple d’effets est le plus plausible ?",
                        "explanation" => "Une maladie qui réduit la production déplace l’offre vers la gauche ; avec une demande relativement stable, le prix tend à augmenter.",
                        "choices" => [
                            [
                                "choice_text" => "Une offre plus faible et un prix plus élevé, si la demande reste similaire.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Une offre plus élevée et un prix plus faible.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une demande plus faible et une offre inchangée.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une disparition automatique des consommateurs.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Quelle situation illustre le mieux un excédent de production sur un marché agricole ?",
                        "explanation" => "Un excédent apparaît lorsque, au prix considéré, les vendeurs souhaitent vendre davantage que les acheteurs ne souhaitent acheter.",
                        "choices" => [
                            [
                                "choice_text" => "La quantité offerte dépasse la quantité demandée au prix observé.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "La quantité demandée dépasse la quantité offerte.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le prix est toujours égal à zéro.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Aucun producteur ne souhaite vendre.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Un consommateur choisit entre deux variétés de pommes proches. Si l’une devient moins chère, que peut-il se passer ?",
                        "explanation" => "Lorsque des produits sont substituables, une baisse du prix de l’un peut inciter les consommateurs à lui consacrer une part plus importante de leurs achats.",
                        "choices" => [
                            [
                                "choice_text" => "Une partie de la demande peut se déplacer vers la variété moins chère.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Toute la demande disparaît.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "L’offre des deux variétés devient identique.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Les coûts de production diminuent automatiquement.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Pourquoi le stockage peut-il avoir une importance économique pour certains produits agricoles ?",
                        "explanation" => "Le stockage permet de conserver certains produits et de répartir leur commercialisation dans le temps, ce qui peut atténuer certaines tensions saisonnières d’offre.",
                        "choices" => [
                            [
                                "choice_text" => "Il permet de déplacer une partie de l’offre d’une période à une autre.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Il empêche toute variation de la demande.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Il rend tous les produits non périssables.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Il supprime les coûts de transport.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Un marché agricole local compte de nombreux acheteurs et vendeurs, et aucun vendeur n’a à lui seul le pouvoir de fixer le prix. Quelle structure de marché est la plus proche ?",
                        "explanation" => "La concurrence correspond à une situation où de nombreux acteurs participent au marché et où chaque vendeur pris isolément a peu de pouvoir sur le prix.",
                        "choices" => [
                            [
                                "choice_text" => "La concurrence.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Le monopole.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le monopole bilatéral.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le monopole naturel.",
                                "is_correct" => false
                            ]
                        ]
                    ]
                ]
            ],
            [
                "title" => "Risque, revenus et soutien à l’agriculture",
                "description" => "Révision des principaux risques agricoles, des revenus, des subventions et des mécanismes simples de gestion du risque.",
                "duration" => 24,
                "passing_score" => 50,
                "questions" => [
                    [
                        "question" => "Quel élément constitue un risque spécifique à une exploitation agricole ?",
                        "explanation" => "Une gelée peut réduire directement le rendement et donc les recettes de l’exploitation : il s’agit d’un risque lié à la production.",
                        "choices" => [
                            [
                                "choice_text" => "Une gelée qui détruit une partie des cultures.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Le nom commercial du produit.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La couleur du tracteur.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La durée d’ouverture d’une bibliothèque.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Pourquoi les revenus agricoles peuvent-ils être incertains ?",
                        "explanation" => "Le revenu dépend notamment de la quantité produite et du prix de vente, deux éléments susceptibles de varier.",
                        "choices" => [
                            [
                                "choice_text" => "Parce que les rendements et les prix peuvent varier.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Parce que tous les coûts sont toujours nuls.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Parce que la production agricole est indépendante du climat.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Parce que la demande alimentaire ne change jamais.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une assurance agricole sert principalement à quel objectif ?",
                        "explanation" => "L’assurance ne supprime pas le risque physique, mais elle peut indemniser une perte couverte et ainsi limiter ses conséquences financières.",
                        "choices" => [
                            [
                                "choice_text" => "À réduire l’impact financier de certains événements couverts.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "À garantir que les prix de marché montent.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "À supprimer tous les risques agricoles.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "À remplacer la production par des importations.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une subvention versée à un producteur réduit son coût effectif de production pour une quantité donnée. Quel effet peut-elle encourager ?",
                        "explanation" => "En réduisant le coût net pour le producteur, la subvention peut rendre davantage de production rentable et encourager l’offre.",
                        "choices" => [
                            [
                                "choice_text" => "Une augmentation de l’offre du produit concerné.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Une diminution automatique de la demande.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La disparition des terres agricoles.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une interdiction de vendre sur le marché.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Quel exemple correspond à une diversification destinée à réduire le risque ?",
                        "explanation" => "La diversification répartit le risque : un problème touchant une culture peut ne pas toucher les autres de la même manière.",
                        "choices" => [
                            [
                                "choice_text" => "Cultiver plusieurs produits ayant des calendriers ou des risques différents.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Cultiver un seul produit sur toutes les parcelles.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Vendre sans connaître les coûts.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Supprimer toutes les réserves de trésorerie.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une ferme réalise 90 000 DH de recettes et supporte 65 000 DH de coûts. Quel est son résultat avant impôts dans cette simplification ?",
                        "explanation" => "Le résultat simplifié est égal aux recettes moins les coûts : 90 000 − 65 000 = 25 000 DH.",
                        "choices" => [
                            [
                                "choice_text" => "25 000 DH.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "15 000 DH.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "20 000 DH.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "155 000 DH.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Pourquoi la variabilité des précipitations peut-elle affecter le revenu d’un agriculteur ?",
                        "explanation" => "La quantité de pluie influence de nombreuses cultures ; une variation du rendement peut donc modifier les volumes vendus et le revenu.",
                        "choices" => [
                            [
                                "choice_text" => "Elle peut modifier le rendement et donc la quantité vendue.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Elle fixe directement le taux d’intérêt bancaire.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Elle augmente automatiquement le nombre de travailleurs agricoles.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Elle détermine toujours le prix mondial.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Quel est l’objectif général d’un fonds de précaution pour une exploitation ?",
                        "explanation" => "Une réserve financière fournit une marge de sécurité lorsque l’exploitation doit affronter une dépense exceptionnelle ou une baisse de recettes.",
                        "choices" => [
                            [
                                "choice_text" => "Faire face à des dépenses ou pertes imprévues.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Augmenter automatiquement les rendements.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Réduire le prix de vente de tous les produits.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Garantir un prix de vente permanent.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une petite ferme dépend presque entièrement d’une seule culture dont le prix est très variable. Quelle faiblesse économique observe-t-on ?",
                        "explanation" => "La concentration sur une seule culture rend le revenu particulièrement sensible aux fluctuations de son rendement et de son prix.",
                        "choices" => [
                            [
                                "choice_text" => "Une forte exposition au risque lié à un seul marché.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Une diversification excessive.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une absence totale de risque.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une parfaite stabilité du revenu.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "À quoi sert principalement un contrat à terme dans un contexte agricole, lorsqu’il est utilisé pour se protéger contre les fluctuations de prix ?",
                        "explanation" => "Un contrat à terme peut permettre de convenir à l’avance d’un prix ou de conditions futures, réduisant ainsi une partie de l’incertitude sur le prix.",
                        "choices" => [
                            [
                                "choice_text" => "À fixer à l’avance certaines conditions de vente ou d’achat futures.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "À augmenter automatiquement le rendement des cultures.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "À supprimer les variations climatiques.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "À garantir une récolte sans aléa climatique.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Un prix minimum garanti par une politique publique est supérieur au prix d’équilibre et les autorités maintiennent effectivement ce prix. Quel problème peut apparaître ?",
                        "explanation" => "Un prix minimum fixé au-dessus de l’équilibre peut inciter les producteurs à offrir davantage tandis que les acheteurs demandent moins, créant un excédent.",
                        "choices" => [
                            [
                                "choice_text" => "Un excédent d’offre.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Une pénurie automatique de travailleurs.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une disparition automatique des stocks.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une baisse obligatoire de la qualité.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Pourquoi une aide publique ciblée sur l’irrigation peut-elle avoir un effet sur les décisions de production ?",
                        "explanation" => "En réduisant le coût d’un investissement d’irrigation, une aide peut changer le calcul économique et rendre certaines options de production plus attractives.",
                        "choices" => [
                            [
                                "choice_text" => "Elle peut réduire le coût d’un équipement et modifier la rentabilité de certaines cultures.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Elle empêche toute production pluviale.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Elle fixe tous les prix agricoles.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Elle rend les récoltes indépendantes de la demande.",
                                "is_correct" => false
                            ]
                        ]
                    ]
                ]
            ],
            [
                "title" => "Intrants, irrigation et productivité agricole",
                "description" => "Explorer les liens entre intrants, irrigation, efficacité et productivité dans les exploitations agricoles.",
                "duration" => 21,
                "passing_score" => 55,
                "questions" => [
                    [
                        "question" => "Une exploitation augmente la quantité d’engrais utilisée, alors que tous les autres facteurs restent inchangés. Que cherche-t-elle principalement à modifier ?",
                        "explanation" => "L’engrais est un intrant : l’agriculteur cherche à accroître la production obtenue grâce à cette utilisation supplémentaire, sous réserve de son efficacité.",
                        "choices" => [
                            [
                                "choice_text" => "La quantité produite grâce à un intrant supplémentaire.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Le nombre de consommateurs urbains.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le taux de change national.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La structure juridique de l’État.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une ferme produit 80 tonnes avec 10 travailleurs. Sa production passe à 100 tonnes avec les mêmes 10 travailleurs. Quelle est la nouvelle production par travailleur ?",
                        "explanation" => "La productivité moyenne du travail est la production divisée par le nombre de travailleurs : 100 ÷ 10 = 10 tonnes par travailleur.",
                        "choices" => [
                            [
                                "choice_text" => "10 tonnes par travailleur.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "6 tonnes par travailleur.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "8 tonnes par travailleur.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "12 tonnes par travailleur.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "L’irrigation régulière permet à une exploitation d’être moins dépendante des pluies. Quelle conséquence économique est la plus directe ?",
                        "explanation" => "L’irrigation donne davantage de contrôle sur l’accès à l’eau, même si elle n’élimine ni les coûts ni les autres risques agricoles.",
                        "choices" => [
                            [
                                "choice_text" => "Une plus grande maîtrise de l’approvisionnement en eau pour la production.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Une suppression de tous les coûts.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une réduction des besoins en surveillance des cultures.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une garantie de prix élevés.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Pourquoi une technologie plus efficace peut-elle augmenter la productivité agricole ?",
                        "explanation" => "Une technologie plus efficace améliore le rapport entre la production obtenue et les ressources utilisées lorsque les autres conditions restent comparables.",
                        "choices" => [
                            [
                                "choice_text" => "Elle permet de produire davantage avec une quantité donnée d’intrants, toutes choses égales par ailleurs.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Elle augmente toujours les prix de vente.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Elle rend toutes les terres identiques.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Elle réduit nécessairement la demande.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Un agriculteur dispose d’un budget limité et hésite entre acheter un engrais supplémentaire ou réparer sa pompe d’irrigation. Quelle notion aide à comparer les alternatives ?",
                        "explanation" => "Avec un budget limité, choisir une dépense implique de renoncer à une autre. Le coût d’opportunité aide à tenir compte de cette possibilité abandonnée.",
                        "choices" => [
                            [
                                "choice_text" => "Le coût d’opportunité et les avantages attendus de chaque choix.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Le nombre de marchés internationaux.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La seule ancienneté de l’exploitation.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le niveau général des salaires urbains uniquement.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Quel exemple illustre une utilisation plus productive d’un même hectare ?",
                        "explanation" => "Une plus grande quantité produite par hectare traduit une hausse de la productivité de la terre dans les conditions considérées.",
                        "choices" => [
                            [
                                "choice_text" => "Obtenir une récolte plus importante avec des méthodes adaptées sans augmenter la superficie.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Réduire la récolte tout en gardant les mêmes intrants.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Laisser la parcelle inutilisée.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Augmenter uniquement le prix de vente.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une pompe consomme 10 unités d’énergie pour irriguer une parcelle. Une nouvelle pompe effectue le même travail avec 6 unités. Que s’améliore-t-il ?",
                        "explanation" => "Réaliser la même tâche avec 6 unités au lieu de 10 signifie utiliser moins d’énergie pour le même service d’irrigation.",
                        "choices" => [
                            [
                                "choice_text" => "L’efficacité énergétique de l’exploitation.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "La superficie du pays.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le prix mondial des céréales.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La demande de travail à l’échelle nationale.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Pourquoi la qualité des semences peut-elle influencer la productivité ?",
                        "explanation" => "Le potentiel d’une culture dépend notamment de la variété choisie et de son adaptation aux conditions de production.",
                        "choices" => [
                            [
                                "choice_text" => "Des semences adaptées peuvent améliorer le rendement, selon les conditions de culture.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "La qualité des semences n’a jamais d’effet.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Elle supprime les besoins en fertilisation.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Elle fixe le prix du marché.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Deux exploitations utilisent la même superficie et une quantité comparable de travail, mais la première récolte davantage. Quelle explication simple est compatible avec ces données ?",
                        "explanation" => "Une différence de productivité peut venir de la technologie, de la qualité des intrants, de l’organisation ou d’autres conditions de production.",
                        "choices" => [
                            [
                                "choice_text" => "Elle peut utiliser des techniques ou des intrants plus efficaces.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Elle doit forcément avoir des prix de vente plus élevés.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Elle possède nécessairement deux fois plus de terres.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Elle subit nécessairement une demande plus faible.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une amélioration des routes permet à une ferme d’acheminer ses produits plus rapidement vers le marché. Quel effet économique peut-elle avoir ?",
                        "explanation" => "De meilleures infrastructures peuvent diminuer les coûts logistiques et réduire le temps de trajet, ce qui est particulièrement utile pour les produits périssables.",
                        "choices" => [
                            [
                                "choice_text" => "Réduire certains coûts de transport et les pertes liées au délai.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Augmenter automatiquement tous les rendements.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Supprimer les coûts de stockage dans tous les cas.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Réduire la demande alimentaire.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Quand l’usage d’un intrant supplémentaire augmente la production mais de moins en moins à chaque ajout, quel phénomène est illustré ?",
                        "explanation" => "Les rendements marginaux décroissants signifient que chaque unité supplémentaire d’un facteur apporte encore de la production, mais un supplément de plus en plus faible lorsque les autres facteurs restent fixes.",
                        "choices" => [
                            [
                                "choice_text" => "Des rendements marginaux décroissants.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Des économies d’échelle infinies.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une baisse certaine de la demande.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une spécialisation internationale.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une exploitation adopte un système goutte-à-goutte et maintient sa récolte tout en utilisant moins d’eau. Quel objectif économique est le mieux décrit ?",
                        "explanation" => "Obtenir la même production avec moins d’eau traduit une amélioration de l’efficacité dans l’utilisation de cette ressource.",
                        "choices" => [
                            [
                                "choice_text" => "Produire avec une meilleure efficacité de l’usage de la ressource.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Augmenter les taxes.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Réduire la surface agricole.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Augmenter volontairement les pertes d’eau.",
                                "is_correct" => false
                            ]
                        ]
                    ]
                ]
            ],
            [
                "title" => "Agriculture, sécurité alimentaire et économie rurale",
                "description" => "Comprendre les notions de sécurité alimentaire, de revenus ruraux, de petits exploitants et de liens entre agriculture et développement local.",
                "duration" => 25,
                "passing_score" => 50,
                "questions" => [
                    [
                        "question" => "La sécurité alimentaire concerne principalement la possibilité pour les populations d’avoir accès à une alimentation suffisante et adéquate. Quel élément en fait partie ?",
                        "explanation" => "La sécurité alimentaire implique notamment un accès régulier à une alimentation suffisante et adaptée, sans se limiter à la seule présence de nourriture dans un pays.",
                        "choices" => [
                            [
                                "choice_text" => "L’accès régulier à une alimentation suffisante.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Le nombre de tracteurs par ville.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le prix de tous les produits de luxe.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La valeur des exportations touristiques uniquement.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une région rurale dépend fortement des revenus agricoles. Une mauvaise récolte peut alors réduire les dépenses dans les commerces locaux. Quel mécanisme est illustré ?",
                        "explanation" => "Quand les revenus agricoles baissent, les ménages concernés peuvent réduire leurs achats, ce qui affecte les commerces et services qui dépendent de leur demande.",
                        "choices" => [
                            [
                                "choice_text" => "Un choc agricole peut se transmettre au reste de l’économie locale.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Les revenus agricoles n’ont jamais d’effet local.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Les commerces ruraux fixent les pluies.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Les exportations augmentent nécessairement.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une petite exploitation produit une partie des aliments consommés par la famille et vend le surplus. Quel type d’activité est décrit ?",
                        "explanation" => "L’exploitation répond à une partie des besoins du ménage par autoconsommation et commercialise le reste : elle combine donc deux usages de sa production.",
                        "choices" => [
                            [
                                "choice_text" => "Une agriculture combinant autoconsommation et vente sur le marché.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Une agriculture exclusivement destinée à l’exportation.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une activité uniquement industrielle.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Un service financier.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Pourquoi l’accès au crédit peut-il être important pour un petit agriculteur ?",
                        "explanation" => "Les dépenses agricoles précèdent souvent les recettes de la récolte ; le crédit peut donc aider à financer les intrants ou les équipements nécessaires.",
                        "choices" => [
                            [
                                "choice_text" => "Il peut permettre de financer des intrants ou des équipements avant la récolte.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Il garantit toujours un prix de vente élevé.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Il peut supprimer définitivement le risque climatique.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Il remplace l’apprentissage des techniques agricoles.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une route relie un village agricole à un marché régional. Quel avantage économique peut-elle apporter ?",
                        "explanation" => "Une meilleure connexion au marché réduit certaines frictions logistiques et facilite la vente des produits agricoles.",
                        "choices" => [
                            [
                                "choice_text" => "Faciliter l’accès aux acheteurs et réduire certains coûts de transport.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Réduire la demande de produits agricoles.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Empêcher les producteurs de vendre.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Supprimer toutes les fluctuations de prix.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Quel exemple correspond à une diversification des revenus d’un ménage rural ?",
                        "explanation" => "Diversifier les sources de revenu peut réduire la dépendance du ménage à une seule activité et à un seul type de risque.",
                        "choices" => [
                            [
                                "choice_text" => "Un ménage combine agriculture, élevage et une petite activité commerciale.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Un ménage dépend d’une seule récolte.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Un ménage ne tire son revenu que de l’agriculture.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Un ménage arrête toute activité productive.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une hausse durable de la productivité agricole peut libérer une partie de la main-d’œuvre pour d’autres activités. Quel phénomène cela peut-il favoriser ?",
                        "explanation" => "Lorsque l’agriculture devient plus productive, une partie de la main-d’œuvre peut progressivement se déplacer vers l’industrie et les services, ce qui participe à la transformation structurelle.",
                        "choices" => [
                            [
                                "choice_text" => "La transformation structurelle de l’économie.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "La disparition des villes.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La baisse automatique du commerce.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La suppression de tous les services.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Pourquoi les pertes après récolte sont-elles un enjeu économique ?",
                        "explanation" => "Une partie de la production est perdue avant d’être consommée ou vendue ; les ressources mobilisées pour cette quantité perdue ne génèrent alors pas le même résultat économique.",
                        "choices" => [
                            [
                                "choice_text" => "Parce qu’elles réduisent la quantité effectivement disponible à la vente ou à la consommation.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Parce qu’elles augmentent toujours la qualité des produits.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Parce qu’elles augmentent la quantité disponible à la consommation.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Parce qu’elles réduisent automatiquement les coûts de production.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une politique de stockage de céréales vise à constituer des réserves pour faire face à une mauvaise récolte. Quel objectif est le plus directement recherché ?",
                        "explanation" => "Des réserves peuvent être utilisées lorsque l’offre courante est insuffisante, afin d’atténuer une rupture temporaire d’approvisionnement.",
                        "choices" => [
                            [
                                "choice_text" => "Limiter les effets d’une rupture temporaire d’approvisionnement.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Augmenter définitivement le prix.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Réduire la superficie cultivée.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Interdire les échanges commerciaux.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une coopérative regroupe plusieurs petits agriculteurs pour acheter des intrants en commun. Quel avantage économique est possible ?",
                        "explanation" => "Le regroupement des achats peut augmenter le pouvoir de négociation et réduire certains coûts unitaires grâce à des volumes plus importants.",
                        "choices" => [
                            [
                                "choice_text" => "Obtenir de meilleures conditions d’achat grâce à un regroupement des besoins.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Réduire la production de chaque membre par définition.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Supprimer toute concurrence sur les marchés agricoles.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Garantir une pluie régulière.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Le capital humain d’un agriculteur peut améliorer ses résultats économiques. Quel exemple le montre ?",
                        "explanation" => "Les connaissances et compétences sont une forme de capital humain : elles peuvent améliorer les décisions techniques et économiques de l’exploitant.",
                        "choices" => [
                            [
                                "choice_text" => "Une formation qui aide à mieux choisir les techniques de production.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Une hausse du prix du pétrole mondial.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Un changement de monnaie dans un autre pays.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une baisse de la population urbaine.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Quel indicateur est particulièrement utile pour suivre le niveau de vie d’un ménage rural ?",
                        "explanation" => "Le niveau de vie dépend de ce que le ménage peut réellement consommer avec ses ressources, ce qui rend le revenu réel ou le pouvoir d’achat particulièrement pertinent.",
                        "choices" => [
                            [
                                "choice_text" => "Son revenu réel disponible ou sa capacité réelle de consommation.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Son nombre de parcelles uniquement.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La longueur des routes nationales.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le prix d’une machine dans un autre pays.",
                                "is_correct" => false
                            ]
                        ]
                    ]
                ]
            ],
            [
                "title" => "Applications en économie agricole",
                "description" => "Exercices de raisonnement simple sur les choix des exploitations, les marchés agricoles, la gestion des ressources et la prise de décision.",
                "duration" => 28,
                "passing_score" => 55,
                "questions" => [
                    [
                        "question" => "Une ferme vend du lait et constate que le coût de l’alimentation animale augmente fortement. Sans autre changement, quelle décision économique devient plus difficile à maintenir ?",
                        "explanation" => "Une hausse du coût de l’alimentation augmente le coût de production du lait ; conserver le même niveau de production devient donc moins rentable si le prix de vente ne change pas.",
                        "choices" => [
                            [
                                "choice_text" => "Produire la même quantité avec la même structure de coûts.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Vendre une partie du lait déjà produit.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Mesurer la superficie de la ferme.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Observer la météo.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Un agriculteur hésite entre deux cultures. La première rapporte potentiellement 40 000 DH et la seconde 30 000 DH, avec des coûts identiques. Que montre ce calcul simplifié ?",
                        "explanation" => "Lorsque les coûts sont identiques, la culture qui génère 40 000 DH de recettes procure dans cette comparaison un résultat net supérieur de 10 000 DH.",
                        "choices" => [
                            [
                                "choice_text" => "La première culture offre un revenu net potentiel supérieur dans les conditions données.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "La seconde culture est nécessairement plus productive.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Les deux cultures ont exactement le même rendement.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le prix du marché ne compte jamais.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une hausse du prix des légumes encourage plusieurs exploitants à consacrer davantage de terres à leur production l’année suivante. Quel mécanisme est observé ?",
                        "explanation" => "Des prix plus élevés peuvent rendre la production plus rentable et inciter les producteurs à augmenter la quantité offerte, notamment à plus long terme.",
                        "choices" => [
                            [
                                "choice_text" => "L’offre réagit aux incitations de prix.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "La demande diminue nécessairement.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Les coûts fixes disparaissent.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le climat devient plus favorable par définition.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une ferme dispose d’une machine inutilisée pendant une grande partie de l’année. Elle la loue à une autre exploitation. Quel bénéfice économique peut-elle rechercher ?",
                        "explanation" => "Louer un équipement inutilisé permet de valoriser un capital existant et de générer des recettes supplémentaires sans acheter une nouvelle machine.",
                        "choices" => [
                            [
                                "choice_text" => "Mieux utiliser un capital déjà disponible et obtenir un revenu supplémentaire.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Réduire la superficie nationale.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Supprimer la demande de machines.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Augmenter automatiquement le rendement de toutes les fermes.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Un producteur constate qu’un nouveau marché est accessible, mais que les normes exigées sont plus strictes. Quelle décision économique doit-il surtout comparer ?",
                        "explanation" => "L’accès à un nouveau débouché n’est intéressant que si les revenus attendus compensent notamment les coûts d’adaptation aux exigences du marché.",
                        "choices" => [
                            [
                                "choice_text" => "Le coût d’adaptation aux normes et les recettes attendues sur ce marché.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Le nombre d’arbres dans les villes voisines.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le taux de natalité mondial.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le salaire minimum d’un pays sans lien commercial.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une exploitation réduit les pertes d’eau sans diminuer la production. Quelle mesure économique s’est améliorée ?",
                        "explanation" => "La même production obtenue avec moins d’eau signifie que la production par unité d’eau utilisée a augmenté.",
                        "choices" => [
                            [
                                "choice_text" => "La productivité de l’eau.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "La demande de terres urbaines.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Le taux d’inflation national.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La balance commerciale mondiale.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Un groupe d’agriculteurs vend directement à une coopérative qui transforme leurs produits. Quel avantage peut venir de cette organisation ?",
                        "explanation" => "Une organisation collective peut faciliter la collecte, la transformation et la commercialisation, même si elle ne supprime pas tous les intermédiaires ni tous les risques.",
                        "choices" => [
                            [
                                "choice_text" => "Une meilleure coordination de la collecte, de la transformation ou de la commercialisation.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Une garantie de production sans risque.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La disparition de tous les intermédiaires par définition.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une hausse automatique de la demande mondiale.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une mauvaise route augmente le temps nécessaire pour transporter des fruits périssables. Quelle conséquence est la plus plausible ?",
                        "explanation" => "Pour des produits périssables, un transport plus lent peut augmenter les pertes et rendre la logistique plus coûteuse.",
                        "choices" => [
                            [
                                "choice_text" => "Des pertes de qualité ou des coûts logistiques plus élevés.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Une hausse automatique de la productivité des terres.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une baisse certaine des besoins en transport.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une diminution obligatoire de la demande alimentaire.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Un agriculteur décide de planter une variété plus résistante à une maladie, même si ses semences sont un peu plus chères. Quelle logique économique peut justifier ce choix ?",
                        "explanation" => "Une dépense supplémentaire peut être rationnelle si elle réduit suffisamment le risque de perte ou améliore le résultat attendu de l’exploitation.",
                        "choices" => [
                            [
                                "choice_text" => "Le coût supplémentaire peut être accepté si la réduction attendue du risque et des pertes le compense.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Le prix des semences n’a aucune importance.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Toute semence chère donne forcément plus de rendement.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "La maladie ne concerne jamais les choix économiques.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Une région améliore son système d’irrigation collectif et plusieurs exploitations augmentent leurs rendements. Quel type d’effet est le plus directement lié à l’investissement ?",
                        "explanation" => "L’amélioration d’une infrastructure productive peut permettre à plusieurs exploitations d’augmenter leur capacité ou leur efficacité de production.",
                        "choices" => [
                            [
                                "choice_text" => "Une amélioration de la capacité productive locale.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "Une réduction automatique de la population rurale.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une disparition du marché des produits agricoles.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Une hausse nécessaire des importations de céréales.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Un agriculteur possède 5 hectares et récolte 15 tonnes au total. Quelle est sa production moyenne par hectare ?",
                        "explanation" => "La production moyenne par hectare est de 15 ÷ 5 = 3 tonnes par hectare.",
                        "choices" => [
                            [
                                "choice_text" => "3 tonnes par hectare.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "2 tonnes par hectare.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "4 tonnes par hectare.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "5 tonnes par hectare.",
                                "is_correct" => false
                            ]
                        ]
                    ],
                    [
                        "question" => "Deux exploitations obtiennent le même revenu total, mais la première utilise moins d’engrais et d’énergie. Que peut-on dire, toutes choses égales par ailleurs ?",
                        "explanation" => "À production et revenu comparables, utiliser moins d’intrants pour obtenir le même résultat peut indiquer une meilleure efficacité dans leur utilisation.",
                        "choices" => [
                            [
                                "choice_text" => "La première peut avoir une meilleure efficacité dans l’utilisation de ces intrants.",
                                "is_correct" => true
                            ],
                            [
                                "choice_text" => "La seconde est nécessairement plus innovante.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Les deux ont forcément les mêmes coûts.",
                                "is_correct" => false
                            ],
                            [
                                "choice_text" => "Aucune comparaison n’est possible sur l’usage des intrants.",
                                "is_correct" => false
                            ]
                        ]
                    ]
                ]
            ]
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
