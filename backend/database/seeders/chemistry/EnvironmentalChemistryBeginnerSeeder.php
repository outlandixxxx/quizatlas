<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EnvironmentalChemistryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'environmental-chemistry')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 65],
            6 => ['duration' => 20, 'passing_score' => 65],
            7 => ['duration' => 20, 'passing_score' => 65],
            8 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => 'Bases de la chimie environnementale',
                'description' => 'Découvrir les notions essentielles de chimie environnementale et le lien entre substances chimiques, milieux naturels et activités humaines.',
                'questions' => [
                    [
                        'question' => 'Que cherche principalement à étudier la chimie environnementale ?',
                        'explanation' => 'Elle étudie les substances chimiques présentes dans l’environnement, leurs transformations et leurs effets.',
                        'choices' => [
                            [
                                'choice_text' => 'Les réactions chimiques uniquement dans les moteurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les substances chimiques présentes dans l’environnement et leur évolution',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La fabrication des meubles en bois uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les mouvements des planètes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces milieux est directement étudié en chimie environnementale ?',
                        'explanation' => 'L’air, l’eau et les sols sont des compartiments classiques de l’environnement.',
                        'choices' => [
                            [
                                'choice_text' => 'L’air',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le vide spatial uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les circuits électroniques uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les machines à vapeur uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une petite quantité d’un polluant peut-elle quand même poser problème ?',
                        'explanation' => 'Certains polluants sont actifs à faible concentration ou peuvent s’accumuler dans les organismes.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que toute petite quantité est forcément radioactive',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que certains polluants sont dangereux même à faible concentration',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la masse disparaît',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que tous les polluants sont visibles',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence simple peut-on faire entre un polluant et une substance naturelle ?',
                        'explanation' => 'Une substance naturelle peut devenir problématique si sa concentration ou sa forme change, tandis qu’un polluant est une substance présente à un niveau ou dans une forme nuisible.',
                        'choices' => [
                            [
                                'choice_text' => 'Une substance naturelle ne peut jamais être nuisible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un polluant est nécessairement un métal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un polluant peut être une substance naturelle présente à un niveau nuisible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un polluant est toujours visible à l’œil nu',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel geste réduit directement l’entrée de produits chimiques inutiles dans les eaux usées domestiques ?',
                        'explanation' => 'Utiliser les produits ménagers en quantité raisonnable réduit les rejets inutiles.',
                        'choices' => [
                            [
                                'choice_text' => 'Verser les produits ménagers dans l’évier après chaque usage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Respecter les doses recommandées et éviter les rejets inutiles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ajouter plus de détergent pour nettoyer plus vite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Jeter les solvants dans les toilettes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie le terme « contaminant » dans un contexte environnemental ?',
                        'explanation' => 'Un contaminant est une substance introduite dans un milieu ou présente à un niveau indésirable.',
                        'choices' => [
                            [
                                'choice_text' => 'Une substance toujours bénéfique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une substance qui rend un milieu différent ou indésirable par sa présence',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement une bactérie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement un gaz inflammable',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi mesure-t-on la concentration d’un polluant ?',
                        'explanation' => 'La concentration permet d’évaluer la présence d’un polluant et de la comparer à une référence.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour connaître uniquement sa couleur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour quantifier sa présence dans le milieu',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour transformer le polluant en eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour empêcher automatiquement sa diffusion',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lequel est un exemple de pollution chimique de l’eau ?',
                        'explanation' => 'Des nitrates, solvants ou métaux peuvent contaminer une eau.',
                        'choices' => [
                            [
                                'choice_text' => 'Une variation normale du débit d’une rivière',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La présence de nitrate en excès dans une rivière',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La pluie qui tombe sur un toit propre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le mouvement des vagues uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la chimie environnementale fait-elle appel à des mesures et à des analyses ?',
                        'explanation' => 'Les analyses permettent d’identifier et de quantifier les substances présentes afin de suivre leur évolution.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour remplacer toute observation sur le terrain',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour identifier et quantifier les substances présentes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour rendre les polluants invisibles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour produire systématiquement de l’énergie',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle idée résume bien une démarche de chimie environnementale ?',
                        'explanation' => 'On identifie une substance, on mesure sa quantité, puis on cherche son origine et son impact.',
                        'choices' => [
                            [
                                'choice_text' => 'Mesurer sans interpréter',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Identifier, mesurer puis comprendre l’origine et les effets',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Éliminer toutes les substances naturelles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Changer la température du milieu uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Atmosphère et pollution de l’air',
                'description' => 'Comprendre les principaux polluants atmosphériques, leurs sources et quelques effets chimiques simples.',
                'questions' => [
                    [
                        'question' => 'Quel gaz est principalement présent dans l’air sec ?',
                        'explanation' => 'L’azote représente la plus grande partie de l’air sec, autour de 78 %.',
                        'choices' => [
                            [
                                'choice_text' => 'Le dioxygène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le dioxyde de carbone',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’azote',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’hydrogène',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel polluant est directement produit en grande quantité par une combustion incomplète ?',
                        'explanation' => 'Une combustion incomplète peut former du monoxyde de carbone, CO.',
                        'choices' => [
                            [
                                'choice_text' => 'Le monoxyde de carbone',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le dioxygène pur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’ozone stratosphérique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le chlorure de sodium',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le monoxyde de carbone est-il dangereux ?',
                        'explanation' => 'Le CO peut se fixer sur l’hémoglobine et gêner le transport du dioxygène.',
                        'choices' => [
                            [
                                'choice_text' => 'Il augmente fortement le calcium sanguin',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il gêne le transport du dioxygène dans le sang',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il transforme immédiatement l’eau en vapeur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il est uniquement irritant pour les yeux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Les oxydes d’azote sont souvent émis lors de…',
                        'explanation' => 'Les hautes températures de combustion dans les moteurs et installations peuvent former des oxydes d’azote.',
                        'choices' => [
                            [
                                'choice_text' => 'La combustion dans les moteurs et certaines installations',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La congélation de l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La dissolution du sel dans l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La photosynthèse uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que peut favoriser le dioxyde de soufre SO₂ dans l’atmosphère ?',
                        'explanation' => 'SO₂ peut contribuer à la formation de composés acides et de particules.',
                        'choices' => [
                            [
                                'choice_text' => 'La formation de composés acides et de particules',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La formation de l’oxygène atmosphérique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La disparition de toutes les pluies',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La production de sucre dans les plantes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les particules fines sont-elles surveillées ?',
                        'explanation' => 'Elles peuvent pénétrer profondément dans les voies respiratoires et sont donc un indicateur important de qualité de l’air.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’elles sont toujours radioactives',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elles peuvent pénétrer profondément dans les voies respiratoires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’elles rendent l’air plus lourd uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elles sont toutes visibles',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation produit généralement plus de polluants de combustion ?',
                        'explanation' => 'Une combustion mal contrôlée ou incomplète produit davantage de certains polluants.',
                        'choices' => [
                            [
                                'choice_text' => 'Une combustion complète et bien réglée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une combustion incomplète',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La fusion de la glace',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La simple évaporation de l’eau',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'L’ozone proche du sol est considéré comme…',
                        'explanation' => 'À basse altitude, l’ozone peut être un polluant secondaire formé par des réactions photochimiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Un polluant secondaire dans certaines conditions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le principal gaz de l’air',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un métal dissous',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un liquide de refroidissement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement peut réduire les émissions d’un véhicule ?',
                        'explanation' => 'Une conduite régulière et un véhicule correctement entretenu peuvent réduire certaines émissions.',
                        'choices' => [
                            [
                                'choice_text' => 'Laisser tourner le moteur inutilement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Entretenir correctement le véhicule et éviter les trajets inutiles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmenter les accélérations brutales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les systèmes de contrôle des émissions',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence simple existe entre un polluant primaire et un polluant secondaire ?',
                        'explanation' => 'Un primaire est émis directement, tandis qu’un secondaire se forme dans l’environnement par réactions chimiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Le primaire est toujours solide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le secondaire est toujours naturel',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le primaire est émis directement, le secondaire se forme ensuite',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il n’existe aucune différence',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Eau : composition, qualité et pollution',
                'description' => 'Identifier les principales formes de pollution de l’eau et comprendre quelques paramètres simples de qualité.',
                'questions' => [
                    [
                        'question' => 'Pourquoi mesure-t-on le pH d’une eau ?',
                        'explanation' => 'Le pH renseigne sur son caractère acide, neutre ou basique.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour connaître uniquement sa couleur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour savoir si elle est acide, neutre ou basique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour mesurer sa masse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour connaître son point d’ébullition uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une eau de pH 7 est, dans un modèle simple à 25 °C,…',
                        'explanation' => 'À 25 °C, un pH de 7 correspond à la neutralité.',
                        'choices' => [
                            [
                                'choice_text' => 'Très acide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Neutre',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Très basique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Toujours salée',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que peuvent indiquer des nitrates très élevés dans une rivière ?',
                        'explanation' => 'Un excès de nitrates peut être associé aux engrais et aux rejets agricoles ou urbains.',
                        'choices' => [
                            [
                                'choice_text' => 'Une pollution liée notamment aux activités agricoles ou aux eaux usées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une absence totale de nutriments',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une eau forcément distillée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une pollution uniquement sonore',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un excès de nutriments peut-il provoquer une eutrophisation ?',
                        'explanation' => 'L’excès d’azote et de phosphore favorise la croissance excessive d’algues.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’il favorise toujours les poissons',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il peut stimuler fortement la croissance des algues',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’il retire tout le CO₂ de l’atmosphère',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il transforme les nitrates en sable',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il souvent quand beaucoup d’algues meurent et se décomposent ?',
                        'explanation' => 'La décomposition consomme du dioxygène dissous.',
                        'choices' => [
                            [
                                'choice_text' => 'Le dioxygène dissous peut diminuer',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le pH devient automatiquement égal à 14',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’eau devient de la glace',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les nitrates disparaissent toujours',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel produit ne devrait pas être versé dans l’évier sans précaution ?',
                        'explanation' => 'Les solvants et certains produits chimiques peuvent contaminer les eaux et doivent être éliminés correctement.',
                        'choices' => [
                            [
                                'choice_text' => 'De l’eau potable',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un solvant de laboratoire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'De l’eau de pluie propre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'De la glace fondue',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la turbidité d’une eau ?',
                        'explanation' => 'La turbidité décrit le caractère trouble de l’eau lié à des particules en suspension.',
                        'choices' => [
                            [
                                'choice_text' => 'Son degré d’acidité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Son caractère trouble dû aux particules en suspension',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Sa température uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Sa teneur en oxygène uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le dioxygène dissous est-il important dans les rivières et lacs ?',
                        'explanation' => 'De nombreux organismes aquatiques ont besoin d’oxygène dissous pour respirer.',
                        'choices' => [
                            [
                                'choice_text' => 'Il sert uniquement à colorer l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il est nécessaire à la respiration de nombreux organismes aquatiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il remplace les sels minéraux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il empêche toute réaction chimique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une eau très minéralisée contient généralement…',
                        'explanation' => 'Une eau minéralisée contient davantage d’ions dissous, comme Ca²⁺ ou Mg²⁺.',
                        'choices' => [
                            [
                                'choice_text' => 'Davantage d’ions dissous',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement du sucre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Aucun ion',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement du dioxygène',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle action limite le risque de pollution des eaux par les médicaments ?',
                        'explanation' => 'Les médicaments inutilisés doivent être rapportés dans les filières de collecte prévues.',
                        'choices' => [
                            [
                                'choice_text' => 'Les jeter dans les toilettes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les verser dans l’évier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les rapporter à une filière de collecte adaptée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les mélanger à de l’eau de Javel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Sols et contamination',
                'description' => 'Comprendre comment les substances chimiques se comportent dans les sols et comment limiter leur contamination.',
                'questions' => [
                    [
                        'question' => 'Quelle est une source courante de contamination chimique des sols ?',
                        'explanation' => 'Les pesticides, hydrocarbures et certains déchets peuvent contaminer les sols.',
                        'choices' => [
                            [
                                'choice_text' => 'Le vent uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les pesticides et certains déchets ou hydrocarbures',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La lumière du soleil',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’eau distillée uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la matière organique du sol peut-elle retenir certaines molécules ?',
                        'explanation' => 'La matière organique peut adsorber ou fixer certaines substances, ce qui ralentit leur déplacement.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle rend toutes les molécules radioactives',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle peut retenir certaines molécules à sa surface ou dans sa structure',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle détruit tous les métaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime la pluie',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie « lixiviation » dans un sol ?',
                        'explanation' => 'La lixiviation correspond au transport de substances dissoutes par l’eau qui traverse le sol.',
                        'choices' => [
                            [
                                'choice_text' => 'Le transport de substances dissoutes par l’eau dans le sol',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La fusion du sol',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La formation de nuages',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La combustion de la matière organique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte pluie peut-elle déplacer certains contaminants dans le sol ?',
                        'explanation' => 'L’eau infiltrée peut entraîner des substances dissoutes vers des horizons plus profonds ou vers les eaux souterraines.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’elle transforme les métaux en gaz',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’eau peut entraîner des substances dissoutes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la pluie arrête les réactions chimiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le sol devient toujours alcalin',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement agricole peut réduire les transferts de pesticides ?',
                        'explanation' => 'Le respect des doses et des zones d’application limite les quantités susceptibles d’atteindre le sol et l’eau.',
                        'choices' => [
                            [
                                'choice_text' => 'Multiplier les doses sans raison',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Respecter les doses recommandées et les bonnes pratiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pulvériser juste avant une forte pluie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Verser les restes dans un fossé',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le pH du sol est-il important ?',
                        'explanation' => 'Le pH influence la disponibilité de nombreux éléments et le comportement de certaines molécules.',
                        'choices' => [
                            [
                                'choice_text' => 'Il détermine uniquement la couleur du sol',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il influence la disponibilité de certains éléments et le comportement chimique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il ne change jamais rien',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il mesure directement la quantité d’eau',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel contaminant peut provenir de l’activité minière ou industrielle ?',
                        'explanation' => 'Certains métaux comme le plomb, le cadmium ou le mercure peuvent contaminer les sols.',
                        'choices' => [
                            [
                                'choice_text' => 'Le dioxygène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le plomb',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La vapeur d’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le sucre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un sol contaminé peut risquer de contaminer à son tour ?',
                        'explanation' => 'Les contaminants peuvent passer du sol vers les plantes, les eaux ou les organismes.',
                        'choices' => [
                            [
                                'choice_text' => 'Seulement les nuages',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les plantes et parfois les eaux souterraines',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement les roches profondes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Aucun autre milieu',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il identifier la source d’une contamination du sol ?',
                        'explanation' => 'Connaître la source aide à choisir la mesure de prévention ou de dépollution adaptée.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour changer la couleur du sol',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour agir sur la cause et choisir une méthode adaptée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter la contamination',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter toute mesure',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une zone industrielle présente des hydrocarbures dans le sol. Quelle première démarche est logique ?',
                        'explanation' => 'Il faut caractériser la contamination avant de choisir un traitement.',
                        'choices' => [
                            [
                                'choice_text' => 'Enfouir immédiatement le sol sans analyse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Prélever et analyser des échantillons pour caractériser la contamination',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ajouter de l’eau potable sur tout le site',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Brûler le sol sur place',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Effet de serre et changement climatique',
                'description' => 'Distinguer effet de serre naturel et émissions humaines de gaz à effet de serre.',
                'questions' => [
                    [
                        'question' => 'Quel phénomène naturel contribue à maintenir la Terre à une température compatible avec la vie ?',
                        'explanation' => 'L’effet de serre naturel retient une partie du rayonnement infrarouge émis par la Terre.',
                        'choices' => [
                            [
                                'choice_text' => 'L’effet de serre naturel',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La combustion des voitures',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La formation des plastiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La salinité des océans uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lequel est un gaz à effet de serre important ?',
                        'explanation' => 'Le dioxyde de carbone absorbe une partie du rayonnement infrarouge.',
                        'choices' => [
                            [
                                'choice_text' => 'Le dioxyde de carbone',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le diazote',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’argon uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’hélium uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le CO₂ peut-il augmenter dans l’atmosphère à cause des activités humaines ?',
                        'explanation' => 'La combustion des combustibles fossiles et certaines activités industrielles libèrent du CO₂.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les océans produisent tout le CO₂',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À cause notamment de la combustion des combustibles fossiles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la glace fond en CO₂',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’azote se transforme spontanément en CO₂',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel gaz est aussi un puissant gaz à effet de serre lié notamment à l’élevage et aux zones humides ?',
                        'explanation' => 'Le méthane CH₄ est un gaz à effet de serre important.',
                        'choices' => [
                            [
                                'choice_text' => 'Le méthane',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le dioxygène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’azote',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le néon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle phrase distingue correctement effet de serre et trou dans la couche d’ozone ?',
                        'explanation' => 'Ce sont deux phénomènes différents : l’effet de serre concerne le bilan thermique, le trou d’ozone la diminution de l’ozone stratosphérique.',
                        'choices' => [
                            [
                                'choice_text' => 'Ce sont exactement le même phénomène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’effet de serre concerne le bilan thermique, le trou d’ozone concerne l’ozone stratosphérique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’un concerne uniquement l’eau potable',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le trou d’ozone est causé uniquement par le CO₂',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le dioxyde de carbone n’est-il pas considéré comme un polluant toxique à faible concentration de la même manière que le CO ?',
                        'explanation' => 'Le CO est directement toxique à des concentrations relativement faibles, alors que le rôle principal du CO₂ atmosphérique est lié à son effet radiatif.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que le CO₂ est toujours sans aucun effet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le CO₂ et le CO ont exactement le même effet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que leurs effets et mécanismes diffèrent : le CO est toxique, le CO₂ agit notamment comme gaz à effet de serre',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que le CO₂ est un métal',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle activité peut réduire les émissions de CO₂ ?',
                        'explanation' => 'Réduire la consommation d’énergies fossiles diminue les émissions de CO₂ associées à leur combustion.',
                        'choices' => [
                            [
                                'choice_text' => 'Brûler davantage de charbon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Améliorer l’efficacité énergétique et réduire l’usage des combustibles fossiles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Laisser les appareils allumés en permanence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter les fuites de gaz',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un puits de carbone ?',
                        'explanation' => 'Un puits de carbone absorbe davantage de carbone qu’il n’en rejette sur une période donnée.',
                        'choices' => [
                            [
                                'choice_text' => 'Une source qui libère toujours du CO₂',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un système qui absorbe globalement du carbone',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un réservoir d’essence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une machine qui produit de l’azote',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Les océans jouent-ils un rôle dans le cycle du carbone ?',
                        'explanation' => 'Les océans échangent du CO₂ avec l’atmosphère et absorbent une partie du carbone.',
                        'choices' => [
                            [
                                'choice_text' => 'Non, jamais',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Oui, ils échangent du CO₂ avec l’atmosphère et stockent une partie du carbone',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Seulement pendant l’hiver',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement près des volcans',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle idée est correcte concernant l’effet de serre ?',
                        'explanation' => 'Sans effet de serre naturel, la Terre serait beaucoup plus froide. Le problème vient de son renforcement par certaines émissions.',
                        'choices' => [
                            [
                                'choice_text' => 'Tout effet de serre est forcément artificiel',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’effet de serre naturel est utile, mais son renforcement peut provoquer un réchauffement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’effet de serre n’a aucun lien avec les gaz atmosphériques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le CO₂ refroidit toujours l’atmosphère',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Pluies acides et chimie atmosphérique',
                'description' => 'Comprendre simplement l’origine des pluies acides et leurs effets sur les milieux.',
                'questions' => [
                    [
                        'question' => 'Quels polluants sont principalement associés aux pluies acides ?',
                        'explanation' => 'Les oxydes de soufre et les oxydes d’azote peuvent conduire à la formation de composés acides dans l’atmosphère.',
                        'choices' => [
                            [
                                'choice_text' => 'Les oxydes de soufre et d’azote',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le dioxygène et l’azote uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le sucre et le sel',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’hélium et le néon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que peut former le SO₂ dans l’atmosphère en présence d’oxydants ?',
                        'explanation' => 'SO₂ peut être transformé en composés soufrés plus oxydés, contribuant à l’acidité des précipitations.',
                        'choices' => [
                            [
                                'choice_text' => 'De l’or métallique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Des composés soufrés oxydés pouvant contribuer à l’acidité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Du sodium métallique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement du dioxygène',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le pH d’une pluie acide est-il inférieur au pH d’une eau neutre ?',
                        'explanation' => 'La présence d’acides dissous augmente la concentration en ions H⁺.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle contient plus d’acides dissous',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle contient toujours moins d’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le soleil la rend basique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne contient aucun gaz',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel effet les pluies acides peuvent-elles avoir sur certains lacs ?',
                        'explanation' => 'Elles peuvent abaisser le pH de l’eau et perturber les organismes aquatiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Augmenter toujours le pH à 14',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Acidifier l’eau et perturber certains organismes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Transformer le lac en eau distillée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Empêcher l’eau de geler',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi certains sols résistent-ils mieux à l’acidification ?',
                        'explanation' => 'La capacité tampon, notamment grâce aux carbonates, peut neutraliser une partie des acides ajoutés.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’ils ne contiennent aucune substance chimique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Grâce à leur capacité tampon qui peut neutraliser une partie des acides',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’ils sont toujours secs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la pluie ne les atteint jamais',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle mesure réduit directement les émissions de SO₂ d’une installation de combustion ?',
                        'explanation' => 'L’utilisation de combustibles moins soufrés et de systèmes de désulfuration réduit les émissions de SO₂.',
                        'choices' => [
                            [
                                'choice_text' => 'Augmenter la teneur en soufre du combustible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Utiliser un combustible moins soufré ou traiter les fumées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ajouter du sel dans la cheminée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter les poussières',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pluies acides peuvent-elles endommager certains bâtiments ?',
                        'explanation' => 'Les acides réagissent avec certains matériaux, notamment les carbonates comme le calcaire.',
                        'choices' => [
                            [
                                'choice_text' => 'Les acides peuvent réagir avec certains matériaux comme le calcaire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la pluie devient toujours chaude',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le calcaire est un gaz',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les bâtiments absorbent l’azote',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel ion est directement associé à l’acidité d’une solution aqueuse ?',
                        'explanation' => 'L’acidité est liée à la concentration en ions hydronium H₃O⁺, souvent représentée simplement par H⁺ dans les calculs de base.',
                        'choices' => [
                            [
                                'choice_text' => 'Na⁺',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cl⁻',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'H₃O⁺',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ca²⁺',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une solution passe de pH 5 à pH 4. Que peut-on dire de son acidité ?',
                        'explanation' => 'Une baisse d’une unité de pH correspond à une multiplication par 10 de la concentration en H₃O⁺.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle devient environ 10 fois moins acide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle devient environ 10 fois plus acide',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle devient neutre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne change pas',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est la plus logique pour limiter les pluies acides ?',
                        'explanation' => 'Il faut réduire à la source les émissions de SO₂ et de NOx.',
                        'choices' => [
                            [
                                'choice_text' => 'Augmenter les émissions de SO₂',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire les émissions de SO₂ et de NOx',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ajouter de l’acide dans les lacs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer toute pluie',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Déchets, recyclage et chimie verte',
                'description' => 'Comprendre quelques principes de gestion des déchets et de réduction des impacts chimiques.',
                'questions' => [
                    [
                        'question' => 'Pourquoi le tri des déchets chimiques est-il important ?',
                        'explanation' => 'Des déchets différents nécessitent des traitements différents et certains mélanges peuvent être dangereux.',
                        'choices' => [
                            [
                                'choice_text' => 'Tous les déchets peuvent être mélangés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les déchets chimiques ont des traitements et des risques différents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le tri sert uniquement à gagner de la place',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les déchets deviennent tous inoffensifs après mélange',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle pratique relève de la prévention des déchets ?',
                        'explanation' => 'Éviter de produire un déchet est préférable à devoir le traiter ensuite.',
                        'choices' => [
                            [
                                'choice_text' => 'Acheter uniquement le nécessaire et éviter le gaspillage',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Multiplier les emballages',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Jeter les produits encore utilisables',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter les quantités consommées',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie réutiliser un produit ?',
                        'explanation' => 'Réutiliser consiste à employer un objet ou matériau à nouveau sans le transformer complètement en nouvelle matière première.',
                        'choices' => [
                            [
                                'choice_text' => 'Le brûler immédiatement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le réemployer pour un nouvel usage',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le dissoudre dans l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le jeter plus rapidement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le recyclage de certains métaux est-il intéressant ?',
                        'explanation' => 'Recycler un métal évite souvent une partie de l’extraction de nouvelles ressources.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les métaux disparaissent autrement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il peut réduire le besoin d’extraction de nouvelles ressources',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que tous les métaux deviennent des plastiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le recyclage crée toujours de l’eau potable',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel principe appartient à la chimie verte ?',
                        'explanation' => 'La chimie verte cherche à réduire ou éviter l’usage et la formation de substances dangereuses.',
                        'choices' => [
                            [
                                'choice_text' => 'Produire plus de déchets dangereux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Prévenir la pollution à la source',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Utiliser systématiquement les solvants les plus toxiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Maximiser les sous-produits',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi réduire la quantité de solvant utilisée au laboratoire peut-il être bénéfique ?',
                        'explanation' => 'Moins de solvant signifie généralement moins de déchets et moins d’exposition à un produit chimique potentiellement dangereux.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les solvants sont toujours inoffensifs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que cela peut réduire les déchets et les risques d’exposition',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la réaction devient toujours plus lente',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que cela augmente automatiquement le rendement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un laboratoire produit beaucoup de plastique à usage unique. Quelle action est pertinente ?',
                        'explanation' => 'Lorsque les règles de sécurité le permettent, réduire les consommables inutiles et améliorer le tri diminue les déchets.',
                        'choices' => [
                            [
                                'choice_text' => 'Augmenter l’usage de plastique sans raison',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éviter les consommables inutiles et trier correctement les déchets',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Mélanger tous les plastiques avec les solvants',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Brûler les déchets dans le laboratoire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle proposition correspond au principe « traiter le problème à la source » ?',
                        'explanation' => 'Réduire l’usage d’une substance dangereuse est généralement préférable à devoir traiter de grandes quantités de déchets après usage.',
                        'choices' => [
                            [
                                'choice_text' => 'Réduire l’utilisation d’une substance dangereuse dès la conception',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmenter les rejets puis mieux les cacher',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Diluer toutes les substances sans limite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ajouter davantage de déchets au traitement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ne faut-il pas mélanger des déchets chimiques incompatibles ?',
                        'explanation' => 'Certains mélanges peuvent provoquer des réactions violentes, des gaz toxiques ou un dégagement de chaleur.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que tous les liquides se solidifient',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que des réactions dangereuses peuvent se produire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les déchets disparaissent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le pH devient toujours égal à 7',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif caractérise le mieux une gestion durable des déchets ?',
                        'explanation' => 'On cherche à réduire la quantité de déchets, favoriser la récupération et traiter correctement ce qui reste.',
                        'choices' => [
                            [
                                'choice_text' => 'Produire le plus de déchets possible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire, réutiliser, valoriser quand c’est possible et traiter correctement le reste',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Mélanger toutes les matières',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Déverser les déchets liquides dans le sol',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Métaux lourds et substances toxiques',
                'description' => 'Reconnaître quelques métaux préoccupants et comprendre leurs voies d’exposition et de dispersion.',
                'questions' => [
                    [
                        'question' => 'Lequel de ces éléments est un métal lourd souvent surveillé pour sa toxicité ?',
                        'explanation' => 'Le plomb est un métal toxique pouvant contaminer les sols, l’eau et certains aliments.',
                        'choices' => [
                            [
                                'choice_text' => 'Le plomb',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’oxygène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le carbone',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le sodium',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le plomb est-il préoccupant ?',
                        'explanation' => 'Le plomb peut affecter différents systèmes de l’organisme et il n’existe pas de rôle biologique essentiel connu pour l’être humain.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’il est un nutriment essentiel',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il est toxique et peut s’accumuler dans l’organisme',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’il est toujours gazeux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il n’entre jamais dans les chaînes alimentaires',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Le mercure peut-il être présent dans les chaînes alimentaires aquatiques ?',
                        'explanation' => 'Certaines formes du mercure peuvent être accumulées par les organismes et se concentrer dans les réseaux trophiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Non, jamais',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Oui, certaines formes peuvent s’accumuler dans les organismes aquatiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Seulement dans l’air sec',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement dans les sols désertiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel mécanisme explique qu’un polluant puisse devenir plus concentré chez les prédateurs ?',
                        'explanation' => 'La biomagnification augmente la concentration d’un polluant persistant à mesure qu’on monte dans le réseau alimentaire.',
                        'choices' => [
                            [
                                'choice_text' => 'La dilution permanente',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La biomagnification dans la chaîne alimentaire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La fusion des métaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’évaporation de l’eau uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le cadmium est-il surveillé dans certains aliments ou sols ?',
                        'explanation' => 'Le cadmium est toxique et peut s’accumuler dans l’organisme.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’il est une vitamine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il est toxique et peut s’accumuler',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’il neutralise tous les acides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il produit toujours de l’oxygène',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle voie d’exposition est possible pour un métal présent dans un sol contaminé ?',
                        'explanation' => 'L’ingestion de poussières ou d’aliments cultivés sur un sol contaminé peut être une voie d’exposition.',
                        'choices' => [
                            [
                                'choice_text' => 'Uniquement le son',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’ingestion de poussières ou d’aliments contaminés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Seulement la lumière',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Aucune voie d’exposition',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse chimique est-elle utile avant de déclarer un sol contaminé par un métal ?',
                        'explanation' => 'Il faut mesurer la présence et la concentration réelle du métal avant de conclure.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que la couleur du sol suffit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il faut identifier et quantifier le métal',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que tous les sols contiennent la même quantité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les métaux sont invisibles',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle mesure réduit l’exposition à une poussière métallique dans un atelier ?',
                        'explanation' => 'Une ventilation adaptée et des équipements de protection réduisent l’inhalation.',
                        'choices' => [
                            [
                                'choice_text' => 'Souffler la poussière avec de l’air comprimé vers les travailleurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Utiliser une aspiration adaptée et les protections prévues',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Manger dans la zone de travail',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter la poussière',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une substance toxique n’est-elle pas automatiquement dangereuse dans toutes les situations de la même façon ?',
                        'explanation' => 'Le risque dépend notamment de la dose, de la voie d’exposition et de la durée d’exposition.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que le risque dépend de la dose, de l’exposition et du contexte',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les substances toxiques cessent toujours d’agir',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la toxicité dépend seulement de la couleur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la masse ne compte jamais',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle précaution est raisonnable lorsqu’un laboratoire manipule un métal toxique ?',
                        'explanation' => 'Il faut limiter l’exposition, éviter la dispersion et éliminer correctement les déchets.',
                        'choices' => [
                            [
                                'choice_text' => 'Travailler sans étiquette',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Limiter l’exposition, utiliser les protections adaptées et gérer correctement les déchets',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Jeter les résidus dans l’évier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Mélanger les déchets avec des produits alimentaires',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Surveillance environnementale et analyses',
                'description' => 'Comprendre comment les chimistes mesurent la qualité de l’air, de l’eau et des sols et interprètent les résultats.',
                'questions' => [
                    [
                        'question' => 'Pourquoi faut-il prélever un échantillon de manière représentative ?',
                        'explanation' => 'Un bon prélèvement doit refléter le milieu étudié pour que l’analyse soit utile.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour obtenir toujours la plus petite concentration',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour que l’échantillon représente correctement le milieu étudié',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour éviter toute mesure',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour changer chimiquement l’échantillon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert un blanc d’analyse ?',
                        'explanation' => 'Le blanc permet de détecter une contamination ou un signal provenant de la procédure ou des réactifs.',
                        'choices' => [
                            [
                                'choice_text' => 'À augmenter volontairement le signal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À vérifier si des contaminants viennent de la méthode ou des réactifs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'À remplacer l’échantillon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À mesurer uniquement le pH',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une courbe d’étalonnage est-elle utilisée ?',
                        'explanation' => 'Elle relie un signal mesuré à une concentration connue afin d’estimer la concentration d’un échantillon inconnu.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour choisir la couleur du laboratoire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour relier un signal analytique à une concentration',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour éliminer tout bruit expérimental',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour mesurer seulement la température',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un résultat d’analyse est inférieur à la limite de détection. Que signifie-t-il généralement ?',
                        'explanation' => 'La méthode ne permet pas d’affirmer de façon fiable que la substance est présente au-dessus de sa limite de détection.',
                        'choices' => [
                            [
                                'choice_text' => 'La substance est forcément absente à l’échelle absolue',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La méthode ne détecte pas de manière fiable une concentration au-dessus de sa limite de détection',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La concentration est forcément très élevée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le résultat vaut automatiquement zéro chimiquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il répéter certaines mesures ?',
                        'explanation' => 'Répéter une mesure aide à apprécier la variabilité et la reproductibilité du résultat.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour faire augmenter la concentration',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour évaluer la variabilité des mesures',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour changer l’échantillon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour obtenir automatiquement une valeur plus grande',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle unité convient souvent pour une très faible concentration dans l’eau ?',
                        'explanation' => 'Le mg/L est couramment utilisé, et le µg/L pour des concentrations encore plus faibles.',
                        'choices' => [
                            [
                                'choice_text' => 'kg/m³ uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'mg/L ou µg/L selon la concentration',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'mol de récipient',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'litres par kilogramme uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une mesure de pH donne 6,8 puis 6,9 sur deux essais. Que peut-on raisonnablement conclure ?',
                        'explanation' => 'Les valeurs sont proches et suggèrent une bonne répétabilité sur ces deux mesures.',
                        'choices' => [
                            [
                                'choice_text' => 'Les résultats sont complètement incohérents',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les mesures sont proches',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le pH est forcément faux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’eau est forcément toxique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver les échantillons dans de bonnes conditions ?',
                        'explanation' => 'La composition peut changer avec la lumière, la température, l’oxygène ou l’activité biologique.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’un échantillon ne change jamais',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que des réactions ou pertes peuvent modifier sa composition',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que le verre transforme toujours l’eau en acide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la conservation ne sert qu’à l’esthétique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel paramètre peut être suivi pour évaluer une pollution organique biodégradable de l’eau ?',
                        'explanation' => 'La demande biochimique en oxygène (DBO) renseigne sur la consommation d’oxygène par l’activité microbienne.',
                        'choices' => [
                            [
                                'choice_text' => 'La masse du bouchon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La DBO',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La couleur du laboratoire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La vitesse du vent uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les résultats analytiques doivent-ils être comparés à une valeur de référence ?',
                        'explanation' => 'Une valeur mesurée devient interprétable lorsqu’on la compare à une norme, une recommandation ou une valeur de fond appropriée.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour modifier la mesure',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour savoir si le niveau mesuré respecte un critère donné',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour rendre tous les résultats identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les unités',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Applications et révision de chimie environnementale',
                'description' => 'Réviser les notions essentielles et les appliquer à des situations courantes de pollution et de prévention.',
                'questions' => [
                    [
                        'question' => 'Une station d’épuration cherche à limiter les nutriments rejetés dans une rivière. Quels composés sont particulièrement surveillés ?',
                        'explanation' => 'L’azote et le phosphore sont des nutriments clés dans l’eutrophisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Le sodium et le chlorure uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’azote et le phosphore',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’hélium et le néon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le fer et l’or uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une chaudière produit beaucoup de monoxyde de carbone. Quelle cause est plausible ?',
                        'explanation' => 'Une combustion incomplète ou un mauvais réglage peut favoriser la formation de CO.',
                        'choices' => [
                            [
                                'choice_text' => 'Une combustion parfaitement complète',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une combustion incomplète ou mal réglée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La présence de glace dans la cheminée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’absence totale de combustible',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une rivière reçoit un rejet riche en matière organique biodégradable. Quelle évolution peut-on craindre ?',
                        'explanation' => 'Les micro-organismes peuvent consommer beaucoup d’oxygène lors de la dégradation de la matière organique.',
                        'choices' => [
                            [
                                'choice_text' => 'Une augmentation certaine du dioxygène dissous',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse possible du dioxygène dissous',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La disparition immédiate de l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un pH automatiquement égal à 14',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle action est la plus directe pour réduire un rejet polluant industriel ?',
                        'explanation' => 'Réduire la quantité de polluant utilisée ou produite à la source limite les rejets à traiter.',
                        'choices' => [
                            [
                                'choice_text' => 'Augmenter la quantité de polluant produite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire la pollution à la source et traiter correctement les effluents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Diluer sans limite dans la rivière',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Déplacer le rejet sans analyse',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les emballages et produits chimiques doivent-ils être choisis avec attention ?',
                        'explanation' => 'Le choix du produit influence les quantités de déchets, la toxicité et la facilité de traitement en fin de vie.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que tous les produits ont exactement le même impact',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que leur composition influence les déchets et les risques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que l’emballage ne joue aucun rôle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que seuls les produits colorés sont dangereux',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une mesure montre qu’un pH passe de 7 à 6. Que s’est-il passé ?',
                        'explanation' => 'À température ordinaire, une baisse d’une unité de pH correspond à une augmentation d’un facteur 10 de la concentration en H₃O⁺.',
                        'choices' => [
                            [
                                'choice_text' => 'La concentration en H₃O⁺ a environ été divisée par 10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La concentration en H₃O⁺ a environ été multipliée par 10',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La solution est devenue basique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le pH n’a pas changé',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les analyses environnementales utilisent-elles souvent plusieurs paramètres plutôt qu’un seul ?',
                        'explanation' => 'Aucun indicateur unique ne décrit complètement la qualité d’un milieu.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’un seul paramètre suffit toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que plusieurs mesures donnent une image plus complète du milieu',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les unités sont inutiles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que tous les paramètres donnent la même information',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple illustre une prévention plutôt qu’une dépollution ?',
                        'explanation' => 'Éviter l’utilisation inutile d’un solvant réduit la pollution avant qu’elle ne soit produite.',
                        'choices' => [
                            [
                                'choice_text' => 'Nettoyer un sol après contamination',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éviter l’utilisation inutile d’un solvant dangereux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Traiter une eau déjà polluée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Extraire un métal d’un sol contaminé',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les plantes peuvent-elles être utilisées dans certaines études de pollution ?',
                        'explanation' => 'Elles peuvent absorber ou accumuler certaines substances et servir d’indicateurs de contamination.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’elles détruisent tous les polluants',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elles peuvent absorber ou accumuler certaines substances',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’elles empêchent toute pluie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elles remplacent toutes les analyses chimiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle règle générale résume une bonne approche environnementale ?',
                        'explanation' => 'Il est généralement préférable de prévenir la pollution, mesurer ce qui est rejeté et traiter correctement les déchets et effluents.',
                        'choices' => [
                            [
                                'choice_text' => 'Produire puis ignorer la pollution',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Prévenir, mesurer, réduire et traiter correctement les rejets',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Diluer sans limite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Mesurer seulement lorsque le problème devient visible',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $index => $quizData) {
            $settings = $quizSettings[$index] ?? ['duration' => 20, 'passing_score' => 60];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
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
