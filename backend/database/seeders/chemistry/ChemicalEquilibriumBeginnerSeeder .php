<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ChemicalEquilibriumBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'chemical-equilibrium')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 15, 'passing_score' => 55],
            6 => ['duration' => 20, 'passing_score' => 60],
            7 => ['duration' => 25, 'passing_score' => 65],
            8 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => "Les bases de l’équilibre chimique",
                'description' => "Comprendre ce qu’est un équilibre chimique dynamique et reconnaître ses principales caractéristiques.",
                'questions' => [
                    [
                        'question' => "À l’équilibre chimique, que peut-on dire des vitesses des réactions directe et inverse ?",
                        'explanation' => "À l’équilibre, les deux réactions continuent, mais leurs vitesses deviennent égales. Le système reste donc stable à l’échelle macroscopique.",
                        'choices' => [
                            [
                                'choice_text' => "La réaction directe est beaucoup plus rapide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La réaction inverse est beaucoup plus rapide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles sont égales",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les deux réactions sont arrêtées",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Que signifie l’expression « équilibre dynamique » ?",
                        'explanation' => "Dynamique signifie que les transformations microscopiques continuent. Elles se compensent parce que les vitesses directe et inverse sont égales.",
                        'choices' => [
                            [
                                'choice_text' => "Les particules ne bougent plus",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les réactions directe et inverse continuent à la même vitesse",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les concentrations sont toutes égales",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La température change en permanence",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans la réaction réversible A ⇌ B, que se passe-t-il après avoir atteint l’équilibre ?",
                        'explanation' => "À l’équilibre, les concentrations ne varient plus de façon mesurable, même si A et B continuent de se transformer au niveau microscopique.",
                        'choices' => [
                            [
                                'choice_text' => "A disparaît complètement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "B disparaît complètement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "A et B restent présents avec des concentrations globalement constantes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La réaction s’inverse toutes les secondes de façon visible",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle affirmation est correcte à propos des concentrations à l’équilibre ?",
                        'explanation' => "Une concentration constante ne signifie pas qu’elle est égale à celle d’une autre espèce. Elle reste simplement stable une fois l’équilibre atteint.",
                        'choices' => [
                            [
                                'choice_text' => "Elles sont toujours identiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles sont toujours nulles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles restent constantes au cours du temps",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles changent obligatoirement de signe",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Lequel de ces systèmes est le plus clairement réversible ?",
                        'explanation' => "La notation ⇌ indique une réaction réversible. Le système N₂O₄/NO₂ peut évoluer dans les deux sens.",
                        'choices' => [
                            [
                                'choice_text' => "Une feuille qui brûle complètement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La fusion d’un glaçon dans une pièce chaude",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "N₂O₄(g) ⇌ 2 NO₂(g)",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La combustion d’une allumette sans possibilité pratique de retour",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une réaction peut-elle atteindre un équilibre dans un récipient fermé ?",
                        'explanation' => "Dans un système fermé, les produits restent disponibles et peuvent participer à la réaction inverse. Les deux transformations finissent par se compenser.",
                        'choices' => [
                            [
                                'choice_text' => "Parce que les produits peuvent repartir dans le sens inverse",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que les réactifs sont détruits par la lumière",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que la pression devient toujours nulle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que le catalyseur consomme les réactifs",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Lequel décrit le mieux l’état macroscopique d’un système à l’équilibre ?",
                        'explanation' => "À l’échelle macroscopique, les concentrations, la pression ou la couleur peuvent rester constantes. Cela ne veut pas dire que les réactions microscopiques sont arrêtées.",
                        'choices' => [
                            [
                                'choice_text' => "Les concentrations changent rapidement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les propriétés observables restent constantes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Toutes les espèces ont la même quantité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La réaction chimique n’existe plus",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Si un système est à l’équilibre et qu’on le laisse dans les mêmes conditions, que se passe-t-il ?",
                        'explanation' => "Sans modification extérieure, un système à l’équilibre conserve son état macroscopique.",
                        'choices' => [
                            [
                                'choice_text' => "L’équilibre disparaît immédiatement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les concentrations restent globalement inchangées",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Tous les produits deviennent des réactifs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La température monte forcément",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une réaction réversible, l’équilibre est généralement atteint lorsque…",
                        'explanation' => "Le critère cinétique essentiel de l’équilibre est l’égalité des vitesses directe et inverse.",
                        'choices' => [
                            [
                                'choice_text' => "un seul réactif reste",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la vitesse directe devient égale à la vitesse inverse",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "tous les produits sont consommés",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la pression devient maximale",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé évite une confusion fréquente sur l’équilibre chimique ?",
                        'explanation' => "Les quantités peuvent être très différentes et les réactions continuent. L’équilibre correspond à une compensation des deux sens.",
                        'choices' => [
                            [
                                'choice_text' => "Équilibre signifie quantités égales",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Équilibre signifie réaction arrêtée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Équilibre signifie état stable avec deux transformations qui se compensent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Équilibre signifie absence totale de produits",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Atteindre et reconnaître l’équilibre",
                'description' => "Interpréter simplement l’évolution d’un mélange réactionnel avant et à l’équilibre.",
                'questions' => [
                    [
                        'question' => "Au début d’une réaction réversible, on introduit seulement les réactifs. Que fait généralement la réaction directe ?",
                        'explanation' => "Au départ, il y a beaucoup de réactifs et peu ou pas de produits. La formation des produits est donc favorisée au début.",
                        'choices' => [
                            [
                                'choice_text' => "Elle est nulle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle domine au début",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle est toujours plus lente que l’inverse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle ne peut jamais commencer",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Au fur et à mesure que les produits s’accumulent, que devient la réaction inverse ?",
                        'explanation' => "Plus les produits sont présents, plus ils peuvent participer à la réaction inverse. Sa vitesse augmente jusqu’à l’équilibre.",
                        'choices' => [
                            [
                                'choice_text' => "Elle devient impossible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle devient généralement plus importante",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle reste forcément nulle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle transforme les réactifs en énergie sans produit",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un graphique montre deux vitesses qui se rapprochent puis deviennent identiques. Que représente le point d’égalité ?",
                        'explanation' => "Lorsque les vitesses directe et inverse sont égales, le système atteint son équilibre chimique.",
                        'choices' => [
                            [
                                'choice_text' => "La fin de toute réaction",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le début de l’équilibre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La disparition des produits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La température de fusion",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les concentrations se stabilisent-elles à l’équilibre ?",
                        'explanation' => "Les espèces continuent à réagir, mais la formation et la consommation de chaque espèce se compensent.",
                        'choices' => [
                            [
                                'choice_text' => "Parce que les molécules cessent de réagir",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les deux sens se produisent à la même vitesse",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que tous les réactifs ont disparu",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’un catalyseur bloque la réaction",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une solution d’une réaction réversible change de couleur puis sa couleur reste constante. Quelle conclusion est raisonnable ?",
                        'explanation' => "Une couleur constante peut indiquer que la composition du système est devenue stable, ce qui est compatible avec un équilibre.",
                        'choices' => [
                            [
                                'choice_text' => "La réaction est forcément irréversible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le système peut avoir atteint un équilibre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les molécules ont arrêté tout mouvement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La concentration de chaque espèce est égale",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux béchers contiennent les mêmes espèces, mais leurs concentrations finales sont différentes. Peuvent-ils tous deux être à l’équilibre ?",
                        'explanation' => "L’état d’équilibre dépend des conditions et de la composition initiale. Deux systèmes peuvent donc avoir des compositions d’équilibre différentes.",
                        'choices' => [
                            [
                                'choice_text' => "Non, un équilibre impose les mêmes concentrations",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, si les conditions et compositions initiales diffèrent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Non, sauf si la température est zéro",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, mais seulement avec un catalyseur",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans un système fermé, retirer continuellement un produit empêcherait-il de conserver le même équilibre ?",
                        'explanation' => "Retirer un produit perturbe la composition du système. Le système peut alors évoluer pour en reformer davantage.",
                        'choices' => [
                            [
                                'choice_text' => "Oui",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Non, cela ne change jamais rien",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Seulement si le produit est un gaz rare",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Seulement la nuit",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Si on mesure une concentration et qu’elle reste stable pendant longtemps, peut-on affirmer que toutes les réactions sont arrêtées ?",
                        'explanation' => "Une concentration stable est compatible avec un équilibre dynamique. Les transformations microscopiques continuent.",
                        'choices' => [
                            [
                                'choice_text' => "Oui",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Oui, si la solution est colorée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Seulement pour les gaz",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel indice expérimental est utile pour repérer un équilibre chimique ?",
                        'explanation' => "Une grandeur comme la concentration, la couleur ou la pression peut se stabiliser lorsque l’équilibre est atteint.",
                        'choices' => [
                            [
                                'choice_text' => "Une propriété mesurable devient constante",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La masse disparaît",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le récipient devient toujours froid",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Toutes les espèces deviennent invisibles",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un équilibre chimique est-il généralement observé dans un système fermé ?",
                        'explanation' => "Un système fermé limite les pertes de matière. Les produits peuvent donc participer à la réaction inverse et contribuer à l’établissement de l’équilibre.",
                        'choices' => [
                            [
                                'choice_text' => "Les produits peuvent s’échapper sans limite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les espèces restent disponibles pour les deux sens de la réaction",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La réaction inverse est interdite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La température y est toujours constante",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Principe de Le Châtelier : concentrations",
                'description' => "Prévoir le déplacement d’un équilibre lorsqu’on ajoute ou retire des réactifs ou des produits.",
                'questions' => [
                    [
                        'question' => "Pour A + B ⇌ C, que se passe-t-il si on ajoute une quantité de A à un système à l’équilibre ?",
                        'explanation' => "Le système consomme une partie du réactif ajouté. Il évolue donc dans le sens qui forme davantage de produit C.",
                        'choices' => [
                            [
                                'choice_text' => "L’équilibre se déplace vers les réactifs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’équilibre se déplace vers les produits",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Rien ne peut changer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "C disparaît instantanément",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour A + B ⇌ C, que se passe-t-il si on ajoute beaucoup de C ?",
                        'explanation' => "Ajouter un produit pousse le système à en consommer une partie. Le déplacement se fait donc vers les réactifs.",
                        'choices' => [
                            [
                                'choice_text' => "Le système tend vers la droite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le système tend vers la gauche",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La réaction s’arrête",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "A et B deviennent toujours égaux",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans N₂ + 3 H₂ ⇌ 2 NH₃, retirer NH₃ favorise quelle évolution ?",
                        'explanation' => "Retirer un produit crée un déséquilibre. Le système réagit en formant davantage de NH₃ pour compenser cette diminution.",
                        'choices' => [
                            [
                                'choice_text' => "La formation de NH₃",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La décomposition de tous les réactifs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Aucune évolution possible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La formation de H₂ uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une réaction réversible, ajouter un réactif peut modifier temporairement les vitesses. Quel est l’effet final attendu sur la composition ?",
                        'explanation' => "L’ajout d’un réactif déplace l’équilibre dans le sens qui le consomme. À température constante, la constante K ne change pas.",
                        'choices' => [
                            [
                                'choice_text' => "Le système évolue pour consommer une partie du réactif ajouté",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Tous les réactifs deviennent des produits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’équilibre devient impossible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La constante d’équilibre change obligatoirement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Que signifie ici « le système s’oppose à la perturbation » ?",
                        'explanation' => "Le principe de Le Châtelier décrit une réponse du système : après une perturbation, il évolue dans le sens qui tend à limiter cette perturbation.",
                        'choices' => [
                            [
                                'choice_text' => "Il annule instantanément toute modification",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il évolue dans le sens qui réduit l’effet de la perturbation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il détruit le récipient",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il empêche toute réaction inverse",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour CO + H₂O ⇌ CO₂ + H₂, si l’on retire CO₂, vers quel côté le système évolue-t-il ?",
                        'explanation' => "CO₂ est un produit. En le retirant, le système tend à en reformer, donc il évolue vers les produits.",
                        'choices' => [
                            [
                                'choice_text' => "Vers les réactifs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Vers les produits",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il reste définitivement bloqué",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Vers le côté contenant le moins d’atomes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Si on ajoute un produit à un équilibre, la quantité du produit augmente d’abord. Quelle réponse du système est ensuite attendue ?",
                        'explanation' => "Le déplacement inverse consomme une partie du produit ajouté afin de retrouver un nouvel état d’équilibre.",
                        'choices' => [
                            [
                                'choice_text' => "Il forme encore plus de ce produit",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il consomme une partie du produit ajouté",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il arrête les deux réactions",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il change forcément de température",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel geste favorise directement la formation d’un produit dans un équilibre réversible ?",
                        'explanation' => "Retirer un produit pousse le système à en reformer une partie. Les autres propositions ne décrivent pas une action qui déplace l’équilibre vers les produits.",
                        'choices' => [
                            [
                                'choice_text' => "Retirer ce produit",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ajouter ce produit",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Retirer un réactif",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Arrêter la réaction inverse",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une erreur fréquente consiste à croire que l’ajout d’un produit fait…",
                        'explanation' => "Ajouter un produit favorise généralement le sens qui le consomme. À température constante, K reste inchangée.",
                        'choices' => [
                            [
                                'choice_text' => "diminuer son effet sur l’équilibre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "toujours augmenter encore sa formation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "réagir le système dans le sens opposé",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "changer automatiquement K",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une réaction réversible, retirer un réactif favorise généralement…",
                        'explanation' => "Le système tend à remplacer une partie du réactif retiré. Il évolue donc généralement dans le sens qui en forme davantage.",
                        'choices' => [
                            [
                                'choice_text' => "la formation de ce réactif",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "toujours la formation directe des produits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "l’arrêt des deux sens",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une augmentation automatique de K",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Température et équilibre",
                'description' => "Comprendre l’influence de la chaleur sur la position d’un équilibre, selon que la réaction est exothermique ou endothermique.",
                'questions' => [
                    [
                        'question' => "Dans une réaction directe exothermique, la chaleur peut être considérée comme…",
                        'explanation' => "Une réaction exothermique libère de la chaleur. Pour raisonner avec Le Châtelier, on peut considérer la chaleur comme un produit.",
                        'choices' => [
                            [
                                'choice_text' => "un réactif",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un produit",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un catalyseur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un solvant obligatoire",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour une réaction directe exothermique, que provoque une augmentation de température ?",
                        'explanation' => "Ajouter de la chaleur favorise le sens qui la consomme. Pour une réaction directe exothermique, c’est le sens inverse.",
                        'choices' => [
                            [
                                'choice_text' => "Un déplacement vers les produits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un déplacement vers les réactifs",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Aucun effet possible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une disparition de tous les gaz",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour une réaction directe endothermique, une augmentation de température favorise généralement…",
                        'explanation' => "Une réaction endothermique consomme de la chaleur. En augmenter la température favorise donc le sens qui consomme cette chaleur.",
                        'choices' => [
                            [
                                'choice_text' => "Le sens direct",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le sens inverse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux de façon identique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’arrêt de la réaction",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une réaction directe libère de la chaleur. Que se passe-t-il généralement si on refroidit le système ?",
                        'explanation' => "Refroidir revient à retirer de la chaleur. Le système favorise donc le sens qui produit de la chaleur, ici le sens exothermique.",
                        'choices' => [
                            [
                                'choice_text' => "Le sens exothermique est favorisé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le sens endothermique est favorisé",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La réaction devient impossible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "K devient forcément égale à 1",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi ne peut-on pas prévoir l’effet de la température sans savoir si la réaction est endothermique ou exothermique ?",
                        'explanation' => "Le sens favorisé dépend de la place de la chaleur dans le bilan énergétique : réactif pour une réaction endothermique, produit pour une réaction exothermique.",
                        'choices' => [
                            [
                                'choice_text' => "Parce que les deux cas réagissent en sens opposés à une variation de température",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que la pression décide toujours à la place de la température",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que la température n’a jamais d’effet",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les concentrations restent toujours nulles",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour une réaction endothermique, quel changement favorise généralement les produits ?",
                        'explanation' => "Chauffer apporte de l’énergie. Le système favorise le sens endothermique, qui consomme cette énergie.",
                        'choices' => [
                            [
                                'choice_text' => "Refroidir",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Chauffer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ajouter un catalyseur seulement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Retirer tous les produits",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un élève affirme : « Une hausse de température augmente toujours la quantité de produits ». Pourquoi cette phrase est-elle trop générale ?",
                        'explanation' => "Une hausse de température ne favorise pas le même côté dans tous les équilibres. Il faut connaître le sens qui absorbe la chaleur.",
                        'choices' => [
                            [
                                'choice_text' => "Parce que l’effet dépend du caractère endothermique ou exothermique de la réaction étudiée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que la température ne change jamais l’équilibre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que seuls les liquides réagissent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que la pression est toujours plus importante",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "À température constante, ajouter un réactif change-t-il la valeur de K ?",
                        'explanation' => "La constante d’équilibre dépend de la température. Une modification de concentration ne change pas K à température constante.",
                        'choices' => [
                            [
                                'choice_text' => "Oui, toujours",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Seulement pour une réaction gazeuse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Seulement si le système est coloré",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle grandeur est directement liée à la valeur de la constante d’équilibre pour une réaction donnée ?",
                        'explanation' => "Pour une réaction donnée, K varie avec la température. Changer les concentrations déplace l’équilibre mais ne modifie pas K à température constante.",
                        'choices' => [
                            [
                                'choice_text' => "La température",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La forme du bécher",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couleur du récipient",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La masse du support",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour une réaction exothermique, pourquoi une hausse de température peut-elle réduire la quantité de produits à l’équilibre ?",
                        'explanation' => "La chaleur ajoutée est assimilée à un produit. Le système favorise donc le sens inverse qui consomme cette chaleur, ce qui peut réduire la quantité de produits.",
                        'choices' => [
                            [
                                'choice_text' => "Parce que le système favorise le sens qui consomme la chaleur ajoutée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que tous les produits s’évaporent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les réactifs deviennent invisibles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que K devient nécessairement nulle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Pression, volume et équilibres gazeux",
                'description' => "Prévoir l’effet d’une variation de pression ou de volume sur les équilibres mettant en jeu des gaz.",
                'questions' => [
                    [
                        'question' => "Pour N₂(g) + 3 H₂(g) ⇌ 2 NH₃(g), une augmentation de pression favorise généralement…",
                        'explanation' => "À température constante, une hausse de pression favorise le côté qui comporte moins de moles de gaz. Ici, 2 moles gazeuses du côté des produits contre 4 du côté des réactifs.",
                        'choices' => [
                            [
                                'choice_text' => "Le côté avec le plus grand nombre de moles gazeuses",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le côté avec le moins de moles gazeuses",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les deux côtés également",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Aucun côté",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans N₂ + 3 H₂ ⇌ 2 NH₃, combien de moles de gaz figurent de chaque côté ?",
                        'explanation' => "Les coefficients indiquent 1 + 3 = 4 moles gazeuses à gauche et 2 à droite.",
                        'choices' => [
                            [
                                'choice_text' => "2 à gauche et 4 à droite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "4 à gauche et 2 à droite",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "3 à gauche et 2 à droite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "1 à gauche et 1 à droite",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Que fait généralement une diminution du volume d’un récipient contenant un équilibre gazeux ?",
                        'explanation' => "À température constante, réduire le volume augmente la pression. Le système peut alors se déplacer vers le côté ayant moins de moles gazeuses.",
                        'choices' => [
                            [
                                'choice_text' => "Elle diminue la pression",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle augmente la pression",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle supprime les produits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle diminue toujours K",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour H₂(g) + I₂(g) ⇌ 2 HI(g), une augmentation de pression provoque-t-elle un déplacement net de l’équilibre ?",
                        'explanation' => "Il y a 2 moles de gaz de chaque côté. Une variation de pression ne favorise donc aucun côté sur la base du nombre de moles gazeuses.",
                        'choices' => [
                            [
                                'choice_text' => "Oui, vers les produits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, vers les réactifs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non, le nombre total de moles gazeuses est le même des deux côtés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Oui, mais seulement avec un catalyseur",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans 2 SO₂(g) + O₂(g) ⇌ 2 SO₃(g), quel côté est favorisé par une compression ?",
                        'explanation' => "Il y a 3 moles gazeuses à gauche et 2 à droite. Une compression favorise donc le côté avec moins de gaz, ici les produits.",
                        'choices' => [
                            [
                                'choice_text' => "Le côté des réactifs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le côté des produits",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les deux côtés de façon identique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Aucun, car les gaz ne réagissent pas",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le nombre de moles de gaz est-il important dans ce type de question ?",
                        'explanation' => "Le système gazeux se déplace, selon Le Châtelier, vers le côté qui réduit la pression imposée. Le nombre de moles gazeuses sert à comparer les deux côtés.",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu’il permet de comparer l’effet d’une variation de pression sur les deux côtés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu’il donne directement la masse molaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’il remplace toujours la température",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’il indique la couleur des gaz",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour une réaction avec exactement le même nombre de moles gazeuses de chaque côté, changer le volume déplace-t-il l’équilibre ?",
                        'explanation' => "Si les deux côtés ont le même nombre de moles gazeuses, aucun côté n’est favorisé par une simple variation de pression ou de volume.",
                        'choices' => [
                            [
                                'choice_text' => "Oui, toujours",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non, pas par cet effet de pression",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Oui, mais uniquement vers la gauche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, mais uniquement vers la droite",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un élève confond pression et température et affirme qu’augmenter la pression favorise toujours les produits. Que faut-il vérifier ?",
                        'explanation' => "L’effet de la pression dépend de la comparaison du nombre de moles gazeuses des deux côtés.",
                        'choices' => [
                            [
                                'choice_text' => "Le nombre de moles gazeuses de chaque côté",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couleur de la solution",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La masse du récipient",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le nom du laboratoire",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle action augmente la pression à température constante dans un récipient fermé ?",
                        'explanation' => "À température constante, un volume plus petit conduit à une pression plus grande pour une même quantité de gaz.",
                        'choices' => [
                            [
                                'choice_text' => "Augmenter le volume",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Diminuer le volume",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ajouter un récipient vide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Retirer le piston vers l’extérieur",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour CO(g) + 2 H₂(g) ⇌ CH₃OH(g), une augmentation de pression favorise le côté…",
                        'explanation' => "Il y a 3 moles gazeuses à gauche et 1 à droite. La pression élevée favorise donc le côté produit, qui comporte moins de gaz.",
                        'choices' => [
                            [
                                'choice_text' => "des réactifs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des produits",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "ayant le plus de molécules",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "qui contient le plus de solides",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Catalyseur et équilibre",
                'description' => "Distinguer l’effet d’un catalyseur sur la vitesse de réaction de son absence d’effet sur la position de l’équilibre.",
                'questions' => [
                    [
                        'question' => "Quel est l’effet principal d’un catalyseur sur une réaction réversible ?",
                        'explanation' => "Un catalyseur accélère les réactions directe et inverse. Le système atteint donc l’équilibre plus rapidement, sans déplacer la position d’équilibre.",
                        'choices' => [
                            [
                                'choice_text' => "Il modifie la position de l’équilibre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il accélère l’établissement de l’équilibre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il change la valeur de K à température constante",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il transforme tous les réactifs en produits",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un catalyseur change-t-il la constante d’équilibre K à température constante ?",
                        'explanation' => "K dépend notamment de la température. Un catalyseur ne change pas K à température constante.",
                        'choices' => [
                            [
                                'choice_text' => "Oui",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Seulement pour les gaz",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Seulement si K est petite",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi dit-on qu’un catalyseur n’impose pas un nouvel équilibre ?",
                        'explanation' => "Un catalyseur fournit un autre chemin réactionnel plus rapide. Pour un équilibre, les deux sens sont accélérés et la composition d’équilibre reste la même.",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu’il accélère les deux sens sans favoriser durablement un côté",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu’il empêche la réaction inverse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’il consomme tous les réactifs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’il baisse toujours la température",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux expériences sont réalisées avec le même mélange : l’une avec catalyseur, l’autre sans. Laquelle atteint l’équilibre le plus rapidement ?",
                        'explanation' => "Le catalyseur augmente la vitesse des transformations. L’équilibre est donc atteint plus rapidement.",
                        'choices' => [
                            [
                                'choice_text' => "Celle avec catalyseur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Celle sans catalyseur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux ont toujours exactement le même temps",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Impossible à savoir en théorie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après avoir ajouté un catalyseur à un système déjà à l’équilibre, que se passe-t-il immédiatement sur la composition à l’équilibre ?",
                        'explanation' => "Le catalyseur ne déplace pas l’équilibre. Une fois le nouvel état atteint, les concentrations d’équilibre restent celles prévues à cette température.",
                        'choices' => [
                            [
                                'choice_text' => "Elle change fortement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle reste la même",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Tous les produits disparaissent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "K devient nulle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle affirmation sur un catalyseur est correcte ?",
                        'explanation' => "Le rôle du catalyseur est cinétique : il accélère l’atteinte de l’équilibre. Il ne change pas, à température constante, la composition finale d’équilibre.",
                        'choices' => [
                            [
                                'choice_text' => "Il est nécessaire pour qu’un équilibre existe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il modifie toujours le rendement à l’équilibre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il permet souvent d’atteindre plus vite un équilibre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il augmente toujours la quantité finale de produit",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une usine souhaite atteindre plus vite l’état d’équilibre sans changer la composition finale. Quel outil convient directement ?",
                        'explanation' => "Un catalyseur augmente la vitesse sans déplacer l’équilibre. C’est précisément la situation décrite.",
                        'choices' => [
                            [
                                'choice_text' => "Un catalyseur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une augmentation aléatoire de température",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une suppression de produits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une diminution du réacteur",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le catalyseur ne rend-il pas la réaction directe « gagnante » à l’équilibre ?",
                        'explanation' => "Le catalyseur réduit les barrières énergétiques des deux sens. Il ne favorise donc pas durablement un côté de l’équilibre.",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu’il accélère également la réaction inverse",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu’il ne touche qu’aux produits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’il arrête la réaction directe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’il change la stœchiométrie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un élève affirme : « Sans catalyseur, il n’y a pas d’équilibre. » Quelle correction faut-il lui apporter ?",
                        'explanation' => "Un équilibre peut être atteint sans catalyseur, mais parfois plus lentement.",
                        'choices' => [
                            [
                                'choice_text' => "L’équilibre peut être atteint sans catalyseur, mais parfois plus lentement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’équilibre existe seulement avec une lumière forte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le catalyseur crée les produits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le catalyseur est la cause de K",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé distingue le mieux cinétique et équilibre ?",
                        'explanation' => "La cinétique décrit la vitesse d’évolution. L’équilibre décrit l’état atteint lorsque les deux vitesses sont égales.",
                        'choices' => [
                            [
                                'choice_text' => "Le catalyseur agit sur la vitesse, pas sur la position d’équilibre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le catalyseur change toujours la composition finale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’équilibre concerne uniquement la vitesse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La cinétique et l’équilibre sont exactement la même notion",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Constante d’équilibre K",
                'description' => "Écrire et interpréter une expression simple de constante d’équilibre et effectuer de petits calculs.",
                'questions' => [
                    [
                        'question' => "Pour A + B ⇌ C, quelle expression simple de Kc est correcte ?",
                        'explanation' => "Pour A + B ⇌ C, les produits figurent au numérateur et les réactifs au dénominateur, avec des exposants égaux aux coefficients stœchiométriques.",
                        'choices' => [
                            [
                                'choice_text' => "Kc = [A][B]/[C]",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Kc = [C]/([A][B])",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Kc = [A]+[B]+[C]",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Kc = [C]−[A]−[B]",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour 2 A ⇌ B, quelle expression de Kc faut-il écrire ?",
                        'explanation' => "Le coefficient 2 devant A devient l’exposant de [A]. On obtient donc Kc = [B]/[A]².",
                        'choices' => [
                            [
                                'choice_text' => "Kc = [A]/[B]²",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Kc = [B]/[A]²",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Kc = [A]²/[B]",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Kc = [A]+[B]",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour A ⇌ 2 B, avec [A] = 1 mol/L et [B] = 2 mol/L, quelle est la valeur de Kc ?",
                        'explanation' => "Kc = [B]²/[A] = 2²/1 = 4.",
                        'choices' => [
                            [
                                'choice_text' => "1",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "2",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "4",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "8",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour A + B ⇌ C, avec [A] = 2, [B] = 1 et [C] = 2, que vaut Kc ?",
                        'explanation' => "Kc = [C]/([A][B]) = 2/(2×1) = 1.",
                        'choices' => [
                            [
                                'choice_text' => "0,5",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "1",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "2",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "4",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Que suggère généralement une valeur de Kc très grande ?",
                        'explanation' => "Une grande valeur de K signifie que, à l’équilibre, le terme associé aux produits domine généralement celui des réactifs dans l’expression de K.",
                        'choices' => [
                            [
                                'choice_text' => "L’équilibre favorise fortement les réactifs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’équilibre favorise fortement les produits",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La réaction est forcément lente",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La température est forcément nulle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Que suggère généralement une petite valeur de Kc, très inférieure à 1 ?",
                        'explanation' => "Une petite valeur de K indique que l’équilibre est globalement déplacé vers les réactifs.",
                        'choices' => [
                            [
                                'choice_text' => "Les produits sont généralement favorisés",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les réactifs sont généralement favorisés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La réaction est impossible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les concentrations sont toutes égales",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "À température constante, la valeur de Kc après ajout d’un réactif devient-elle différente ?",
                        'explanation' => "Kc est fixée par la température pour une réaction donnée. Une perturbation de concentration modifie Q et la composition, pas Kc.",
                        'choices' => [
                            [
                                'choice_text' => "Oui, nécessairement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non, l’ajout déplace l’équilibre mais ne change pas Kc",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Oui, mais seulement si Kc est grande",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Seulement dans un solide",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour 2 NO₂ ⇌ N₂O₄, quelle écriture correspond à Kc ?",
                        'explanation' => "Le produit N₂O₄ est au numérateur et le coefficient 2 de NO₂ devient l’exposant au dénominateur.",
                        'choices' => [
                            [
                                'choice_text' => "Kc = [NO₂]²/[N₂O₄]",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Kc = [N₂O₄]/[NO₂]²",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Kc = [NO₂]+[N₂O₄]",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Kc = [N₂O₄]²/[NO₂]",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Si, pour A + B ⇌ C, on a Kc = 10, comment peut-on interpréter ce résultat au niveau débutant ?",
                        'explanation' => "Une valeur de K supérieure à 1 indique que les produits sont favorisés par rapport aux réactifs, toutes choses égales par ailleurs.",
                        'choices' => [
                            [
                                'choice_text' => "Les réactifs sont très fortement favorisés",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les produits sont plutôt favorisés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La réaction est forcément instantanée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Aucune information n’est donnée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel élément doit rester constant lorsqu’on compare la valeur de K d’une même réaction ?",
                        'explanation' => "La constante d’équilibre d’une réaction donnée dépend de la température. Pour comparer K de façon cohérente, il faut garder la température identique.",
                        'choices' => [
                            [
                                'choice_text' => "La température",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couleur du récipient",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le nombre de béchers",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La vitesse d’agitation uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Quotient réactionnel et prédiction simple",
                'description' => "Comparer un état instantané à la constante d’équilibre pour prévoir le sens d’évolution d’une réaction simple.",
                'questions' => [
                    [
                        'question' => "Pour une réaction donnée, à quoi sert le quotient réactionnel Q ?",
                        'explanation' => "Q est construit comme l’expression de K mais avec les concentrations ou pressions du mélange à l’instant considéré. Il renseigne donc sur l’état actuel du système.",
                        'choices' => [
                            [
                                'choice_text' => "À mesurer directement la masse du récipient",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "À décrire la composition du système à un instant donné",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "À remplacer la température",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "À calculer la vitesse uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Si Q < K pour une réaction réversible, le système tend généralement à évoluer vers…",
                        'explanation' => "Lorsque Q est inférieur à K, le mélange contient relativement trop de réactifs par rapport à l’état d’équilibre. Il évolue donc vers les produits.",
                        'choices' => [
                            [
                                'choice_text' => "Les produits",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les réactifs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un arrêt définitif",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une température nulle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Si Q > K, le système tend généralement à évoluer vers…",
                        'explanation' => "Q trop grand signifie que le terme des produits est trop important par rapport à l’équilibre. Le système évolue donc vers les réactifs.",
                        'choices' => [
                            [
                                'choice_text' => "Les produits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les réactifs",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Aucun changement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une pression infinie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Que se passe-t-il lorsque Q = K ?",
                        'explanation' => "Q et K sont égaux lorsque le système possède la composition correspondant à l’équilibre.",
                        'choices' => [
                            [
                                'choice_text' => "Le système est à l’équilibre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les produits sont impossibles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les réactifs ont disparu",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La température doit doubler",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour A + B ⇌ C, Kc = 4. On calcule Qc = 1. Que prévoit-on ?",
                        'explanation' => "Comme Qc = 1 est inférieur à Kc = 4, le système tend à former davantage de produit jusqu’à retrouver Q = K.",
                        'choices' => [
                            [
                                'choice_text' => "Une évolution vers les produits",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une évolution vers les réactifs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un état d’équilibre immédiat",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Aucune évolution possible",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour A + B ⇌ C, Kc = 2 et Qc = 5. Dans quel sens le système évolue-t-il ?",
                        'explanation' => "Qc est supérieur à Kc. Le système doit donc consommer une partie des produits et évoluer vers les réactifs.",
                        'choices' => [
                            [
                                'choice_text' => "Vers les produits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Vers les réactifs",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Dans aucun sens",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Uniquement selon la couleur",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un élève confond Q et K et dit : « Q ne peut être calculé qu’à l’équilibre. » Quelle réponse est correcte ?",
                        'explanation' => "Q décrit la composition à un instant donné. À l’équilibre seulement, on a la relation Q = K.",
                        'choices' => [
                            [
                                'choice_text' => "Faux : Q peut être calculé à n’importe quel état du système",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Vrai : Q existe seulement à l’équilibre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Vrai : Q est toujours égal à 1",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Faux : Q ne concerne que les solides",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Si on perturbe un système à l’équilibre en ajoutant un réactif, que devient généralement Q juste après l’ajout ?",
                        'explanation' => "L’ajout d’un réactif modifie immédiatement les concentrations et donc Q. Le système réagit ensuite jusqu’à retrouver la condition d’équilibre Q = K.",
                        'choices' => [
                            [
                                'choice_text' => "Il reste forcément exactement égal à K",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il s’éloigne de K, puis le système évolue pour retrouver Q = K",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il disparaît",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il devient toujours nul",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi Q est-il utile avant l’équilibre ?",
                        'explanation' => "Comparer Q à K permet de savoir si le système doit évoluer globalement vers les produits ou vers les réactifs.",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu’il permet de prévoir le sens d’évolution avec une comparaison à K",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu’il donne directement le temps de réaction",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’il remplace la stœchiométrie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’il donne toujours la température",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour un système à l’équilibre, une petite modification des concentrations provoque-t-elle forcément Q = K juste après ?",
                        'explanation' => "Juste après une perturbation, Q peut être différent de K. L’évolution spontanée du système le ramène ensuite vers Q = K.",
                        'choices' => [
                            [
                                'choice_text' => "Oui, parce que Q ne dépend pas des concentrations",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non, la perturbation modifie d’abord Q",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Oui, mais uniquement pour les liquides",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non, car K disparaît",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Révision générale des équilibres chimiques",
                'description' => "Réutiliser les notions essentielles : équilibre dynamique, Le Châtelier, température, pression, catalyseur et K.",
                'questions' => [
                    [
                        'question' => "Dans un équilibre chimique, quelle affirmation est la plus juste ?",
                        'explanation' => "L’égalité des vitesses directe et inverse est le critère dynamique de l’équilibre. Les concentrations n’ont pas besoin d’être égales.",
                        'choices' => [
                            [
                                'choice_text' => "Les quantités de réactifs et de produits sont forcément égales",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les vitesses directe et inverse sont égales",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Toutes les réactions sont arrêtées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La température doit être nulle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour une réaction exothermique, augmenter la température favorise généralement quel sens ?",
                        'explanation' => "Le système tend à consommer l’excès de chaleur. Pour une réaction directe exothermique, le sens favorisé est donc l’inverse.",
                        'choices' => [
                            [
                                'choice_text' => "Le sens qui produit encore plus de chaleur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le sens qui consomme la chaleur ajoutée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Toujours le sens direct",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Aucun sens",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour A + B ⇌ C, que fait généralement l’ajout de A ?",
                        'explanation' => "Le système consomme une partie du réactif ajouté, donc il évolue vers la formation du produit C. K reste constante à température constante.",
                        'choices' => [
                            [
                                'choice_text' => "Il favorise la formation de C",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il favorise la formation de A",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il empêche tout équilibre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il change nécessairement K",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel changement favorise un côté comportant moins de moles gazeuses ?",
                        'explanation' => "Une pression plus élevée favorise, lorsqu’il y a une différence de moles gazeuses, le côté qui contient moins de gaz.",
                        'choices' => [
                            [
                                'choice_text' => "Une diminution de pression",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une augmentation de pression",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un catalyseur seul",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse systématique de concentration",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel effet un catalyseur a-t-il sur la constante d’équilibre à température constante ?",
                        'explanation' => "Le catalyseur agit sur la vitesse, pas sur la valeur de K à température constante.",
                        'choices' => [
                            [
                                'choice_text' => "Il l’augmente",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il la diminue",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il ne la change pas",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il la rend toujours égale à 1",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour A + B ⇌ C, avec [A] = 1, [B] = 2 et [C] = 4, quelle est Kc à l’équilibre ?",
                        'explanation' => "Kc = [C]/([A][B]) = 4/(1×2) = 2.",
                        'choices' => [
                            [
                                'choice_text' => "1",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "2",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "4",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "8",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Si Qc est supérieur à Kc, que doit faire globalement le système ?",
                        'explanation' => "Q supérieur à K signifie que la composition actuelle est trop riche en produits par rapport à l’équilibre. Le système évolue donc vers les réactifs.",
                        'choices' => [
                            [
                                'choice_text' => "Former davantage de produits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Consommer une partie des produits",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Arrêter toute réaction",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Augmenter forcément la température",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi retirer un produit peut-il favoriser sa propre formation ?",
                        'explanation' => "Le retrait d’un produit perturbe l’équilibre. Le système évolue dans le sens qui reforme une partie du produit retiré.",
                        'choices' => [
                            [
                                'choice_text' => "Parce que le système tend à compenser la diminution du produit",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que K disparaît",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que la réaction inverse devient impossible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que la température augmente toujours",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans H₂ + I₂ ⇌ 2 HI, une variation de pression ne déplace pas l’équilibre. Pourquoi ?",
                        'explanation' => "Le nombre total de moles gazeuses est identique des deux côtés. Une variation de pression ne favorise donc aucun côté par ce mécanisme.",
                        'choices' => [
                            [
                                'choice_text' => "Il n’y a pas de gaz",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il y a 2 moles gazeuses de chaque côté",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La réaction est irréversible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "K vaut toujours zéro",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle phrase résume correctement le rôle de la température par rapport à K ?",
                        'explanation' => "Pour une réaction donnée, la valeur de K varie avec la température. C’est la température qui modifie directement la constante d’équilibre.",
                        'choices' => [
                            [
                                'choice_text' => "K dépend de la température",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "K est toujours indépendante de la température",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "K dépend seulement du volume",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "K change uniquement avec un catalyseur",
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