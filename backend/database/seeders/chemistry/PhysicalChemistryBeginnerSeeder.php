<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PhysicalChemistryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'physical-chemistry')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 20, 'passing_score' => 55],
            1 => ['duration' => 20, 'passing_score' => 60],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 15, 'passing_score' => 55],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 20, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65],
            8 => ['duration' => 25, 'passing_score' => 70],
            9 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => "Gaz parfaits et lois simples des gaz",
                'description' => "Utiliser les relations de base entre pression, volume et température pour comprendre le comportement des gaz.",
                'questions' => [
                    [
                        'question' => "Quelle équation relie la pression, le volume, la quantité de matière et la température d’un gaz parfait ?",
                        'explanation' => "L’équation d’état du gaz parfait est PV = nRT.",
                        'choices' => [
                            ['choice_text' => "PV = nRT", 'is_correct' => true],
                            ['choice_text' => "P + V = nR/T", 'is_correct' => false],
                            ['choice_text' => "PV = n + RT", 'is_correct' => false],
                            ['choice_text' => "P/V = nRT", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À température constante, que se passe-t-il pour le volume d’un gaz si sa pression augmente ?",
                        'explanation' => "À température et quantité de matière constantes, P et V sont inversement proportionnelles. Une pression plus élevée correspond donc à un volume plus petit.",
                        'choices' => [
                            ['choice_text' => "Le volume augmente", 'is_correct' => false],
                            ['choice_text' => "Le volume diminue", 'is_correct' => true],
                            ['choice_text' => "Le volume reste toujours identique", 'is_correct' => false],
                            ['choice_text' => "Le volume devient forcément nul", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À pression constante, un gaz chauffé tend à voir son volume…",
                        'explanation' => "À pression constante, le volume d’un gaz augmente quand sa température absolue augmente. C’est la loi de Charles.",
                        'choices' => [
                            ['choice_text' => "augmenter", 'is_correct' => true],
                            ['choice_text' => "diminuer", 'is_correct' => false],
                            ['choice_text' => "devenir négatif", 'is_correct' => false],
                            ['choice_text' => "rester forcément inchangé", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi utilise-t-on la température en kelvins dans PV = nRT ?",
                        'explanation' => "La température absolue en kelvins permet d’utiliser une échelle dont le zéro correspond au zéro absolu, ce qui est indispensable dans les relations des gaz.",
                        'choices' => [
                            ['choice_text' => "Parce que la relation utilise la température absolue", 'is_correct' => true],
                            ['choice_text' => "Parce que les degrés Celsius n’existent pas", 'is_correct' => false],
                            ['choice_text' => "Parce que le kelvin mesure une pression", 'is_correct' => false],
                            ['choice_text' => "Parce que le litre exige toujours le kelvin", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un gaz occupe 2 L à une certaine pression. Si, à température constante, son volume est réduit à 1 L, comment évolue la pression ?",
                        'explanation' => "Comme PV est constant, diviser le volume par 2 provoque une multiplication de la pression par 2.",
                        'choices' => [
                            ['choice_text' => "Elle est divisée par 2", 'is_correct' => false],
                            ['choice_text' => "Elle double", 'is_correct' => true],
                            ['choice_text' => "Elle reste la même", 'is_correct' => false],
                            ['choice_text' => "Elle devient nulle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel comportement est typique d’un gaz lorsqu’on le comprime ?",
                        'explanation' => "Lorsqu’on réduit le volume disponible, les particules disposent de moins d’espace et les collisions avec les parois deviennent plus fréquentes, ce qui augmente la pression.",
                        'choices' => [
                            ['choice_text' => "La pression augmente", 'is_correct' => true],
                            ['choice_text' => "La pression disparaît", 'is_correct' => false],
                            ['choice_text' => "Le gaz devient automatiquement un solide", 'is_correct' => false],
                            ['choice_text' => "La quantité de matière double", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans PV = nRT, que représente n ?",
                        'explanation' => "n désigne la quantité de matière du gaz, exprimée en moles.",
                        'choices' => [
                            ['choice_text' => "La quantité de matière", 'is_correct' => true],
                            ['choice_text' => "La masse volumique", 'is_correct' => false],
                            ['choice_text' => "Le nombre de pascals", 'is_correct' => false],
                            ['choice_text' => "La température en degrés Celsius", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle valeur est proche de 273 K en degrés Celsius ?",
                        'explanation' => "La relation approximative est T(K) = T(°C) + 273. Ainsi, 273 K correspond à environ 0 °C.",
                        'choices' => [
                            ['choice_text' => "0 °C", 'is_correct' => true],
                            ['choice_text' => "100 °C", 'is_correct' => false],
                            ['choice_text' => "273 °C", 'is_correct' => false],
                            ['choice_text' => "−273 °C", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À volume constant, que devient la pression d’un gaz lorsqu’on augmente sa température absolue ?",
                        'explanation' => "À volume et quantité de matière constants, la pression est proportionnelle à la température absolue. Chauffer le gaz augmente donc sa pression.",
                        'choices' => [
                            ['choice_text' => "Elle augmente", 'is_correct' => true],
                            ['choice_text' => "Elle diminue toujours", 'is_correct' => false],
                            ['choice_text' => "Elle reste nulle", 'is_correct' => false],
                            ['choice_text' => "Elle devient indépendante de la température", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel paramètre reste constant dans la loi de Boyle-Mariotte ?",
                        'explanation' => "La loi de Boyle-Mariotte relie pression et volume à température constante pour une quantité de gaz fixée.",
                        'choices' => [
                            ['choice_text' => "La température", 'is_correct' => true],
                            ['choice_text' => "Le volume", 'is_correct' => false],
                            ['choice_text' => "La pression", 'is_correct' => false],
                            ['choice_text' => "Le nombre de parois du récipient", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Énergie, chaleur et travail",
                'description' => "Comprendre les échanges d’énergie, la chaleur, le travail et les bases du premier principe de la thermodynamique.",
                'questions' => [
                    [
                        'question' => "Quel appareil mesure directement une température ?",
                        'explanation' => "Le thermomètre mesure la température. La température décrit l’état thermique d’un système.",
                        'choices' => [
                            ['choice_text' => "Un thermomètre", 'is_correct' => true],
                            ['choice_text' => "Une burette", 'is_correct' => false],
                            ['choice_text' => "Une balance", 'is_correct' => false],
                            ['choice_text' => "Un pH-mètre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle unité est utilisée pour l’énergie dans le Système international ?",
                        'explanation' => "L’unité SI de l’énergie est le joule (J).",
                        'choices' => [
                            ['choice_text' => "Le joule", 'is_correct' => true],
                            ['choice_text' => "Le pascal", 'is_correct' => false],
                            ['choice_text' => "Le kelvin", 'is_correct' => false],
                            ['choice_text' => "La mole", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que se passe-t-il généralement lorsqu’un objet reçoit de la chaleur sans changement de phase ?",
                        'explanation' => "Une partie de l’énergie reçue augmente généralement la température du système, selon sa capacité thermique.",
                        'choices' => [
                            ['choice_text' => "Sa température augmente", 'is_correct' => true],
                            ['choice_text' => "Sa masse disparaît", 'is_correct' => false],
                            ['choice_text' => "Sa quantité de matière devient nulle", 'is_correct' => false],
                            ['choice_text' => "Son volume devient forcément zéro", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle formule simple permet d’estimer la chaleur sensible reçue par une substance ?",
                        'explanation' => "Pour un changement de température sans changement d’état, on utilise souvent Q = mcΔT.",
                        'choices' => [
                            ['choice_text' => "Q = mcΔT", 'is_correct' => true],
                            ['choice_text' => "Q = m/cΔT", 'is_correct' => false],
                            ['choice_text' => "Q = m + c + ΔT", 'is_correct' => false],
                            ['choice_text' => "Q = c/(mΔT)", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle est l’unité du travail en thermodynamique ?",
                        'explanation' => "Le travail est une forme de transfert d’énergie. Comme la chaleur, il se mesure en joules.",
                        'choices' => [
                            ['choice_text' => "Le joule", 'is_correct' => true],
                            ['choice_text' => "Le gramme", 'is_correct' => false],
                            ['choice_text' => "Le litre", 'is_correct' => false],
                            ['choice_text' => "Le kelvin", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un bloc de 100 g d’eau se réchauffe de 10 °C. Si sa capacité thermique massique vaut environ 4,18 J·g⁻¹·°C⁻¹, quelle chaleur reçoit-il ?",
                        'explanation' => "Q = mcΔT = 100 × 4,18 × 10 = 4180 J, soit environ 4,18 kJ.",
                        'choices' => [
                            ['choice_text' => "418 J", 'is_correct' => false],
                            ['choice_text' => "4180 J", 'is_correct' => true],
                            ['choice_text' => "41,8 J", 'is_correct' => false],
                            ['choice_text' => "41800 J", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une transformation, si le système reçoit de la chaleur, le signe de Q est généralement…",
                        'explanation' => "Avec la convention courante Q > 0 pour le système qui reçoit de la chaleur, une chaleur reçue est positive.",
                        'choices' => [
                            ['choice_text' => "Positif", 'is_correct' => true],
                            ['choice_text' => "Négatif", 'is_correct' => false],
                            ['choice_text' => "Toujours nul", 'is_correct' => false],
                            ['choice_text' => "Sans unité", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le premier principe de la thermodynamique relie notamment…",
                        'explanation' => "Le premier principe est une expression de la conservation de l’énergie et relie la variation d’énergie interne aux transferts de chaleur et de travail.",
                        'choices' => [
                            ['choice_text' => "La variation d’énergie interne, la chaleur et le travail", 'is_correct' => true],
                            ['choice_text' => "Seulement la couleur et la pression", 'is_correct' => false],
                            ['choice_text' => "La masse et le pH uniquement", 'is_correct' => false],
                            ['choice_text' => "La vitesse et la densité uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que signifie « énergie interne » au niveau débutant ?",
                        'explanation' => "L’énergie interne correspond à l’énergie microscopique stockée dans le système, liée notamment aux mouvements et interactions des particules.",
                        'choices' => [
                            ['choice_text' => "L’énergie microscopique stockée dans le système", 'is_correct' => true],
                            ['choice_text' => "L’énergie électrique de la prise murale", 'is_correct' => false],
                            ['choice_text' => "La masse du récipient", 'is_correct' => false],
                            ['choice_text' => "La température seule", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une réaction peut-elle chauffer un récipient autour d’elle ?",
                        'explanation' => "Si la transformation libère de l’énergie vers le milieu, cette énergie peut augmenter la température du récipient ou de la solution environnante.",
                        'choices' => [
                            ['choice_text' => "Parce qu’une partie de l’énergie est transférée au milieu", 'is_correct' => true],
                            ['choice_text' => "Parce que la masse crée de l’énergie par magie", 'is_correct' => false],
                            ['choice_text' => "Parce que toute réaction absorbe forcément de la chaleur", 'is_correct' => false],
                            ['choice_text' => "Parce que le volume devient nul", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Enthalpie et transformations thermiques",
                'description' => "Identifier les transformations exothermiques et endothermiques et interpréter simplement ΔH.",
                'questions' => [
                    [
                        'question' => "Une réaction qui libère de la chaleur vers le milieu est dite…",
                        'explanation' => "Une réaction exothermique libère de l’énergie thermique vers le milieu extérieur.",
                        'choices' => [
                            ['choice_text' => "Exothermique", 'is_correct' => true],
                            ['choice_text' => "Endothermique", 'is_correct' => false],
                            ['choice_text' => "Isobare", 'is_correct' => false],
                            ['choice_text' => "Isochore", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pour une transformation exothermique à pression constante, le signe de ΔH est généralement…",
                        'explanation' => "Une transformation exothermique libère de la chaleur au milieu. À pression constante, cela correspond à ΔH < 0.",
                        'choices' => [
                            ['choice_text' => "Négatif", 'is_correct' => true],
                            ['choice_text' => "Positif", 'is_correct' => false],
                            ['choice_text' => "Toujours égal à zéro", 'is_correct' => false],
                            ['choice_text' => "Sans signe défini", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une transformation endothermique a besoin d’absorber de l’énergie du milieu. Que peut-on observer facilement ?",
                        'explanation' => "Si l’énergie vient du milieu, celui-ci peut se refroidir pendant la transformation, selon les conditions expérimentales.",
                        'choices' => [
                            ['choice_text' => "Le milieu peut se refroidir", 'is_correct' => true],
                            ['choice_text' => "Le milieu doit toujours s’enflammer", 'is_correct' => false],
                            ['choice_text' => "La masse disparaît", 'is_correct' => false],
                            ['choice_text' => "La pression devient automatiquement nulle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle affirmation décrit correctement ΔH dans une réaction à pression constante ?",
                        'explanation' => "À pression constante, la variation d’enthalpie ΔH correspond à la chaleur échangée par le système, selon la convention de signe adoptée.",
                        'choices' => [
                            ['choice_text' => "Elle est liée à la chaleur échangée à pression constante", 'is_correct' => true],
                            ['choice_text' => "Elle mesure seulement la masse", 'is_correct' => false],
                            ['choice_text' => "Elle est toujours positive", 'is_correct' => false],
                            ['choice_text' => "Elle ne concerne que les gaz", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si ΔH = +50 kJ pour une réaction, comment la qualifier au niveau débutant ?",
                        'explanation' => "Un ΔH positif indique une absorption nette de chaleur à pression constante : la réaction est endothermique.",
                        'choices' => [
                            ['choice_text' => "Endothermique", 'is_correct' => true],
                            ['choice_text' => "Exothermique", 'is_correct' => false],
                            ['choice_text' => "Sans échange énergétique", 'is_correct' => false],
                            ['choice_text' => "Toujours spontanée", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si ΔH = −120 kJ, quelle interprétation est correcte ?",
                        'explanation' => "Le signe négatif indique une libération nette de chaleur par le système dans les conditions considérées.",
                        'choices' => [
                            ['choice_text' => "La transformation est exothermique", 'is_correct' => true],
                            ['choice_text' => "La transformation est forcément impossible", 'is_correct' => false],
                            ['choice_text' => "La transformation absorbe 120 kJ", 'is_correct' => false],
                            ['choice_text' => "La température est forcément 120 °C", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel exemple est généralement endothermique ?",
                        'explanation' => "La fusion d’un solide demande de l’énergie pour modifier les interactions entre particules ; elle est donc endothermique.",
                        'choices' => [
                            ['choice_text' => "La fusion de la glace", 'is_correct' => true],
                            ['choice_text' => "La congélation de l’eau", 'is_correct' => false],
                            ['choice_text' => "La combustion du méthane", 'is_correct' => false],
                            ['choice_text' => "La condensation de vapeur d’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel exemple est généralement exothermique ?",
                        'explanation' => "La combustion libère de l’énergie vers le milieu. C’est une transformation exothermique.",
                        'choices' => [
                            ['choice_text' => "La combustion d’un combustible", 'is_correct' => true],
                            ['choice_text' => "La vaporisation de l’eau", 'is_correct' => false],
                            ['choice_text' => "La fusion de la glace", 'is_correct' => false],
                            ['choice_text' => "La sublimation du dioxyde de carbone solide", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le signe de ΔH est-il utile ?",
                        'explanation' => "Le signe permet de savoir si la transformation absorbe ou libère de la chaleur à pression constante.",
                        'choices' => [
                            ['choice_text' => "Il indique le sens thermique de l’échange d’énergie", 'is_correct' => true],
                            ['choice_text' => "Il donne directement la vitesse de réaction", 'is_correct' => false],
                            ['choice_text' => "Il donne le nombre d’atomes", 'is_correct' => false],
                            ['choice_text' => "Il remplace toujours la température", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une réaction chauffe légèrement la solution qui l’entoure. Quelle explication est la plus logique ?",
                        'explanation' => "La réaction a transféré de l’énergie thermique vers la solution, ce qui peut augmenter sa température.",
                        'choices' => [
                            ['choice_text' => "La réaction a libéré de l’énergie vers la solution", 'is_correct' => true],
                            ['choice_text' => "La réaction a absorbé toute l’énergie du milieu", 'is_correct' => false],
                            ['choice_text' => "La masse de la solution a disparu", 'is_correct' => false],
                            ['choice_text' => "Le système est forcément à l’équilibre", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Changements d’état et diagrammes de phase",
                'description' => "Reconnaître les changements d’état et comprendre l’effet de la température et de la pression sur les phases.",
                'questions' => [
                    [
                        'question' => "Comment appelle-t-on le passage d’un solide à un liquide ?",
                        'explanation' => "Le passage solide → liquide est la fusion.",
                        'choices' => [
                            ['choice_text' => "La fusion", 'is_correct' => true],
                            ['choice_text' => "La condensation", 'is_correct' => false],
                            ['choice_text' => "La sublimation", 'is_correct' => false],
                            ['choice_text' => "La solidification", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment appelle-t-on le passage d’un liquide à un gaz ?",
                        'explanation' => "Le passage liquide → gaz peut se faire par vaporisation. L’ébullition et l’évaporation sont deux formes de vaporisation.",
                        'choices' => [
                            ['choice_text' => "La vaporisation", 'is_correct' => true],
                            ['choice_text' => "La fusion", 'is_correct' => false],
                            ['choice_text' => "La solidification", 'is_correct' => false],
                            ['choice_text' => "La condensation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel changement d’état correspond au passage d’un gaz à un liquide ?",
                        'explanation' => "Gaz → liquide correspond à la condensation, aussi appelée liquéfaction selon le contexte.",
                        'choices' => [
                            ['choice_text' => "La condensation", 'is_correct' => true],
                            ['choice_text' => "La sublimation", 'is_correct' => false],
                            ['choice_text' => "La fusion", 'is_correct' => false],
                            ['choice_text' => "La vaporisation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le passage direct d’un solide à un gaz sans étape liquide s’appelle…",
                        'explanation' => "Solide → gaz directement est la sublimation, comme pour certains solides tels que le dioxyde de carbone solide.",
                        'choices' => [
                            ['choice_text' => "La sublimation", 'is_correct' => true],
                            ['choice_text' => "La condensation", 'is_correct' => false],
                            ['choice_text' => "La fusion", 'is_correct' => false],
                            ['choice_text' => "La solidification", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lors d’un changement d’état à pression constante, la température d’une substance pure reste-t-elle toujours en hausse ?",
                        'explanation' => "Pendant un changement d’état d’une substance pure à pression constante, la température peut rester constante car l’énergie sert à modifier l’état plutôt qu’à augmenter la température.",
                        'choices' => [
                            ['choice_text' => "Non, elle peut rester constante pendant le changement d’état", 'is_correct' => true],
                            ['choice_text' => "Oui, toujours", 'is_correct' => false],
                            ['choice_text' => "Elle devient forcément négative", 'is_correct' => false],
                            ['choice_text' => "Elle devient égale à la pression", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle phase possède généralement la plus grande liberté de mouvement entre les particules ?",
                        'explanation' => "Dans un gaz, les particules sont très espacées et se déplacent librement par rapport aux particules d’un liquide ou d’un solide.",
                        'choices' => [
                            ['choice_text' => "Le gaz", 'is_correct' => true],
                            ['choice_text' => "Le solide", 'is_correct' => false],
                            ['choice_text' => "Le liquide uniquement à 0 °C", 'is_correct' => false],
                            ['choice_text' => "Toutes les phases de la même manière", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une pression élevée peut-elle modifier la température d’ébullition d’un liquide ?",
                        'explanation' => "L’ébullition dépend de la pression extérieure. Une pression plus élevée demande généralement une température plus élevée pour que la pression de vapeur atteigne cette pression.",
                        'choices' => [
                            ['choice_text' => "Parce que l’ébullition dépend de la pression extérieure", 'is_correct' => true],
                            ['choice_text' => "Parce que la masse molaire change", 'is_correct' => false],
                            ['choice_text' => "Parce que les molécules deviennent plus lourdes", 'is_correct' => false],
                            ['choice_text' => "Parce que la quantité de matière devient nulle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel point d’un diagramme de phase représente la coexistence des trois états principaux ?",
                        'explanation' => "Le point triple correspond aux conditions où solide, liquide et gaz peuvent coexister à l’équilibre.",
                        'choices' => [
                            ['choice_text' => "Le point triple", 'is_correct' => true],
                            ['choice_text' => "Le point critique uniquement", 'is_correct' => false],
                            ['choice_text' => "Le point d’ébullition normal", 'is_correct' => false],
                            ['choice_text' => "Le zéro absolu", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que représente le point critique d’un diagramme de phase ?",
                        'explanation' => "Au-delà du point critique, la distinction entre liquide et gaz disparaît et on obtient un fluide supercritique.",
                        'choices' => [
                            ['choice_text' => "La fin de la distinction nette entre liquide et gaz", 'is_correct' => true],
                            ['choice_text' => "Le moment où toute matière devient solide", 'is_correct' => false],
                            ['choice_text' => "La température de fusion de tous les solides", 'is_correct' => false],
                            ['choice_text' => "Le point où la pression est nulle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La glace qui fond dans un verre subit quelle transformation ?",
                        'explanation' => "La glace passe de l’état solide à l’état liquide : c’est une fusion.",
                        'choices' => [
                            ['choice_text' => "Une fusion", 'is_correct' => true],
                            ['choice_text' => "Une condensation", 'is_correct' => false],
                            ['choice_text' => "Une sublimation", 'is_correct' => false],
                            ['choice_text' => "Une solidification", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Solutions, concentration et dilution",
                'description' => "Calculer des concentrations simples et comprendre ce qui se passe lors d’une dilution.",
                'questions' => [
                    [
                        'question' => "Quelle formule donne la concentration molaire d’une solution ?",
                        'explanation' => "La concentration molaire c est la quantité de matière du soluté divisée par le volume de solution : c = n/V.",
                        'choices' => [
                            ['choice_text' => "c = n/V", 'is_correct' => true],
                            ['choice_text' => "c = V/n", 'is_correct' => false],
                            ['choice_text' => "c = n × V", 'is_correct' => false],
                            ['choice_text' => "c = n + V", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une solution contient 0,20 mol de soluté dans 0,50 L. Quelle est sa concentration ?",
                        'explanation' => "c = n/V = 0,20/0,50 = 0,40 mol/L.",
                        'choices' => [
                            ['choice_text' => "0,04 mol/L", 'is_correct' => false],
                            ['choice_text' => "0,40 mol/L", 'is_correct' => true],
                            ['choice_text' => "2,5 mol/L", 'is_correct' => false],
                            ['choice_text' => "4,0 mol/L", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lorsqu’on dilue une solution, que devient généralement sa concentration ?",
                        'explanation' => "Lors d’une dilution, on ajoute du solvant sans ajouter de soluté. La quantité de soluté reste la même mais le volume augmente, donc la concentration diminue.",
                        'choices' => [
                            ['choice_text' => "Elle diminue", 'is_correct' => true],
                            ['choice_text' => "Elle augmente toujours", 'is_correct' => false],
                            ['choice_text' => "Elle devient toujours nulle", 'is_correct' => false],
                            ['choice_text' => "Elle ne dépend pas du volume", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle relation utilise-t-on souvent pour une dilution simple ?",
                        'explanation' => "Pour une dilution sans perte de soluté, on utilise C₁V₁ = C₂V₂.",
                        'choices' => [
                            ['choice_text' => "C₁V₁ = C₂V₂", 'is_correct' => true],
                            ['choice_text' => "C₁ + V₁ = C₂ + V₂", 'is_correct' => false],
                            ['choice_text' => "C₁/C₂ = V₁/V₂ toujours", 'is_correct' => false],
                            ['choice_text' => "C₁ − V₁ = C₂ − V₂", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "On prélève 10 mL d’une solution mère à 2,0 mol/L et on dilue à 100 mL. Quelle est la concentration finale ?",
                        'explanation' => "C₁V₁ = C₂V₂, donc C₂ = (2,0 × 10)/100 = 0,20 mol/L.",
                        'choices' => [
                            ['choice_text' => "0,02 mol/L", 'is_correct' => false],
                            ['choice_text' => "0,20 mol/L", 'is_correct' => true],
                            ['choice_text' => "2,0 mol/L", 'is_correct' => false],
                            ['choice_text' => "20 mol/L", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une solution très concentrée contient-elle généralement davantage de soluté par unité de volume ?",
                        'explanation' => "La concentration mesure précisément la quantité de soluté rapportée au volume de solution. Plus de soluté pour le même volume signifie une concentration plus grande.",
                        'choices' => [
                            ['choice_text' => "Parce que le rapport quantité de soluté/volume est plus grand", 'is_correct' => true],
                            ['choice_text' => "Parce que le volume est toujours plus grand", 'is_correct' => false],
                            ['choice_text' => "Parce que le solvant devient un solide", 'is_correct' => false],
                            ['choice_text' => "Parce que la température est forcément plus haute", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle verrerie est conçue pour préparer précisément un volume donné de solution ?",
                        'explanation' => "La fiole jaugée est calibrée pour contenir un volume précis à une température donnée. Elle est couramment utilisée pour préparer des solutions étalons.",
                        'choices' => [
                            ['choice_text' => "La fiole jaugée", 'is_correct' => true],
                            ['choice_text' => "Le bécher uniquement", 'is_correct' => false],
                            ['choice_text' => "Le mortier", 'is_correct' => false],
                            ['choice_text' => "Le verre de montre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi rince-t-on parfois la paroi d’une fiole lors d’une préparation de solution ?",
                        'explanation' => "Le rinçage permet de récupérer les éventuelles traces de soluté restées sur les parois afin de les transférer dans la solution et de limiter la perte de matière.",
                        'choices' => [
                            ['choice_text' => "Pour récupérer le soluté qui pourrait rester sur la paroi", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter artificiellement la concentration", 'is_correct' => false],
                            ['choice_text' => "Pour refroidir automatiquement la solution", 'is_correct' => false],
                            ['choice_text' => "Pour changer la nature du soluté", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si on double le volume d’une solution sans ajouter de soluté, que devient sa concentration ?",
                        'explanation' => "La quantité de soluté reste constante tandis que le volume double. Comme c = n/V, la concentration est divisée par 2.",
                        'choices' => [
                            ['choice_text' => "Elle est divisée par 2", 'is_correct' => true],
                            ['choice_text' => "Elle double", 'is_correct' => false],
                            ['choice_text' => "Elle reste inchangée", 'is_correct' => false],
                            ['choice_text' => "Elle est multipliée par 4", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle différence essentielle existe entre le soluté et le solvant ?",
                        'explanation' => "Le soluté est la substance dissoute. Le solvant est le constituant qui dissout le soluté et forme le milieu principal de la solution.",
                        'choices' => [
                            ['choice_text' => "Le soluté est dissous, le solvant dissout", 'is_correct' => true],
                            ['choice_text' => "Le solvant est toujours solide", 'is_correct' => false],
                            ['choice_text' => "Le soluté est toujours plus abondant", 'is_correct' => false],
                            ['choice_text' => "Les deux termes désignent exactement la même chose", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Cinétique et vitesse de réaction",
                'description' => "Comprendre ce qui contrôle la vitesse d’une réaction et interpréter des observations simples.",
                'questions' => [
                    [
                        'question' => "Que mesure la vitesse d’une réaction chimique ?",
                        'explanation' => "La vitesse renseigne sur la rapidité avec laquelle les concentrations des réactifs ou des produits évoluent au cours du temps.",
                        'choices' => [
                            ['choice_text' => "La rapidité de transformation du système", 'is_correct' => true],
                            ['choice_text' => "La masse totale du récipient", 'is_correct' => false],
                            ['choice_text' => "La température absolue uniquement", 'is_correct' => false],
                            ['choice_text' => "Le nombre de couleurs visibles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment une augmentation de température influence-t-elle souvent la vitesse d’une réaction ?",
                        'explanation' => "Une température plus élevée augmente généralement l’énergie cinétique des particules et le nombre de collisions suffisamment énergétiques, ce qui accélère souvent la réaction.",
                        'choices' => [
                            ['choice_text' => "Elle l’augmente généralement", 'is_correct' => true],
                            ['choice_text' => "Elle l’annule toujours", 'is_correct' => false],
                            ['choice_text' => "Elle ne peut jamais l’influencer", 'is_correct' => false],
                            ['choice_text' => "Elle transforme directement la réaction en équilibre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une poudre réagit-elle souvent plus vite qu’un gros morceau du même solide ?",
                        'explanation' => "La poudre possède une plus grande surface de contact avec le milieu. Davantage de particules peuvent donc participer aux collisions avec le réactif extérieur.",
                        'choices' => [
                            ['choice_text' => "Parce que sa surface de contact est plus grande", 'is_correct' => true],
                            ['choice_text' => "Parce que sa masse molaire change", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle contient forcément plus d’atomes au total", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle est toujours plus chaude", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel rôle joue un catalyseur dans une réaction ?",
                        'explanation' => "Un catalyseur propose un chemin réactionnel dont l’énergie d’activation est plus faible. La réaction peut ainsi se dérouler plus rapidement.",
                        'choices' => [
                            ['choice_text' => "Il accélère la réaction sans être consommé globalement", 'is_correct' => true],
                            ['choice_text' => "Il augmente toujours la quantité finale de produit à l’équilibre", 'is_correct' => false],
                            ['choice_text' => "Il devient le produit principal", 'is_correct' => false],
                            ['choice_text' => "Il bloque toutes les collisions", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que représente l’énergie d’activation ?",
                        'explanation' => "L’énergie d’activation est une barrière énergétique que les particules doivent franchir pour qu’une collision puisse conduire à la transformation chimique.",
                        'choices' => [
                            ['choice_text' => "Une barrière énergétique minimale à franchir", 'is_correct' => true],
                            ['choice_text' => "L’énergie totale de tous les produits", 'is_correct' => false],
                            ['choice_text' => "La masse du catalyseur", 'is_correct' => false],
                            ['choice_text' => "La chaleur perdue par le récipient uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Augmenter la concentration d’un réactif peut accélérer une réaction parce que…",
                        'explanation' => "Une concentration plus élevée signifie généralement davantage de particules par unité de volume, donc plus de collisions par unité de temps.",
                        'choices' => [
                            ['choice_text' => "Le nombre de collisions efficaces peut augmenter", 'is_correct' => true],
                            ['choice_text' => "La masse de chaque particule double", 'is_correct' => false],
                            ['choice_text' => "La température devient automatiquement constante", 'is_correct' => false],
                            ['choice_text' => "Le produit est créé avant toute collision", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Selon la théorie des collisions, toutes les collisions entre particules réactives produisent-elles une réaction ?",
                        'explanation' => "Non. Il faut généralement une énergie suffisante et une orientation convenable pour qu’une collision soit efficace.",
                        'choices' => [
                            ['choice_text' => "Non", 'is_correct' => true],
                            ['choice_text' => "Oui, toujours", 'is_correct' => false],
                            ['choice_text' => "Oui, mais seulement dans les liquides", 'is_correct' => false],
                            ['choice_text' => "Seulement lorsqu’un catalyseur est présent", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une réaction produit des bulles très rapidement dans un essai, puis beaucoup plus lentement. Quelle explication simple est plausible ?",
                        'explanation' => "Au fur et à mesure que les réactifs sont consommés, leur concentration diminue souvent, ce qui réduit le nombre de collisions efficaces et ralentit la réaction.",
                        'choices' => [
                            ['choice_text' => "Les réactifs sont progressivement consommés", 'is_correct' => true],
                            ['choice_text' => "La masse de l’univers diminue", 'is_correct' => false],
                            ['choice_text' => "La réaction devient automatiquement exothermique", 'is_correct' => false],
                            ['choice_text' => "Le volume du laboratoire contrôle la vitesse", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel changement ralentirait le plus probablement une réaction qui dépend fortement de la température ?",
                        'explanation' => "Refroidir diminue l’énergie cinétique moyenne des particules et réduit généralement la fréquence des collisions efficaces.",
                        'choices' => [
                            ['choice_text' => "Diminuer fortement la température", 'is_correct' => true],
                            ['choice_text' => "Augmenter la température", 'is_correct' => false],
                            ['choice_text' => "Broyer davantage un solide réactif", 'is_correct' => false],
                            ['choice_text' => "Ajouter un catalyseur adapté", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une réaction avec une énergie d’activation faible est-elle généralement plus facile à déclencher qu’une réaction à énergie d’activation très élevée, toutes choses égales par ailleurs ?",
                        'explanation' => "Oui. Une barrière énergétique plus faible est plus facile à franchir, ce qui conduit généralement à une réaction plus rapide dans des conditions comparables.",
                        'choices' => [
                            ['choice_text' => "Oui", 'is_correct' => true],
                            ['choice_text' => "Non, jamais", 'is_correct' => false],
                            ['choice_text' => "Seulement à 0 °C", 'is_correct' => false],
                            ['choice_text' => "Seulement si les produits sont gazeux", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Équilibre chimique et constante d’équilibre",
                'description' => "Revoir l’équilibre dynamique et interpréter une constante d’équilibre à partir de situations simples.",
                'questions' => [
                    [
                        'question' => "À l’équilibre chimique, les vitesses des réactions directe et inverse sont…",
                        'explanation' => "À l’équilibre, les deux réactions continuent, mais à la même vitesse. Les concentrations restent alors globalement constantes.",
                        'choices' => [
                            ['choice_text' => "Égales", 'is_correct' => true],
                            ['choice_text' => "Toutes deux nulles", 'is_correct' => false],
                            ['choice_text' => "Toujours très différentes", 'is_correct' => false],
                            ['choice_text' => "Indépendantes de la composition", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pour A + B ⇌ C, quelle expression simplifiée de Kc est correcte ?",
                        'explanation' => "Les produits figurent au numérateur et les réactifs au dénominateur, avec les puissances données par les coefficients stœchiométriques.",
                        'choices' => [
                            ['choice_text' => "Kc = [C]/([A][B])", 'is_correct' => true],
                            ['choice_text' => "Kc = [A][B]/[C]", 'is_correct' => false],
                            ['choice_text' => "Kc = [A]+[B]+[C]", 'is_correct' => false],
                            ['choice_text' => "Kc = [C]−[A]−[B]", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que suggère généralement une très grande valeur de K ?",
                        'explanation' => "Une grande constante indique que l’état d’équilibre est fortement orienté vers les produits par rapport aux réactifs.",
                        'choices' => [
                            ['choice_text' => "Les produits sont favorisés", 'is_correct' => true],
                            ['choice_text' => "Les réactifs sont toujours seuls", 'is_correct' => false],
                            ['choice_text' => "La réaction est forcément instantanée", 'is_correct' => false],
                            ['choice_text' => "La température est nécessairement élevée", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que se passe-t-il lorsqu’on ajoute un réactif à un système à l’équilibre, à température constante ?",
                        'explanation' => "Le système tend à consommer une partie du réactif ajouté et évolue vers les produits. La valeur de K reste la même à température constante.",
                        'choices' => [
                            ['choice_text' => "L’équilibre se déplace généralement vers les produits", 'is_correct' => true],
                            ['choice_text' => "K devient automatiquement plus grande", 'is_correct' => false],
                            ['choice_text' => "La réaction s’arrête", 'is_correct' => false],
                            ['choice_text' => "Les produits disparaissent instantanément", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que fait un catalyseur sur la position d’un équilibre à température constante ?",
                        'explanation' => "Le catalyseur accélère les deux sens de la réaction. Il ne change pas la composition d’équilibre ni K à température constante.",
                        'choices' => [
                            ['choice_text' => "Il ne déplace pas l’équilibre", 'is_correct' => true],
                            ['choice_text' => "Il pousse toujours vers les produits", 'is_correct' => false],
                            ['choice_text' => "Il pousse toujours vers les réactifs", 'is_correct' => false],
                            ['choice_text' => "Il change toujours K", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pour un équilibre gazeux comportant moins de moles de gaz du côté des produits, une augmentation de pression favorise généralement…",
                        'explanation' => "Le système tend à réduire l’effet de la pression élevée en évoluant vers le côté qui contient moins de moles gazeuses.",
                        'choices' => [
                            ['choice_text' => "Les produits", 'is_correct' => true],
                            ['choice_text' => "Les réactifs", 'is_correct' => false],
                            ['choice_text' => "Toujours les deux côtés", 'is_correct' => false],
                            ['choice_text' => "Aucun côté, dans tous les cas", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une réaction exothermique est à l’équilibre. Que fait une augmentation de température ?",
                        'explanation' => "La chaleur peut être considérée comme un produit dans le sens exothermique. Ajouter de la chaleur favorise donc le sens inverse.",
                        'choices' => [
                            ['choice_text' => "Elle favorise généralement le sens endothermique", 'is_correct' => true],
                            ['choice_text' => "Elle favorise toujours le sens exothermique", 'is_correct' => false],
                            ['choice_text' => "Elle ne peut jamais avoir d’effet", 'is_correct' => false],
                            ['choice_text' => "Elle rend toutes les concentrations égales", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À l’équilibre, les concentrations des réactifs et des produits sont-elles nécessairement égales ?",
                        'explanation' => "Non. L’équilibre impose l’égalité des vitesses des deux sens, pas l’égalité des concentrations.",
                        'choices' => [
                            ['choice_text' => "Non", 'is_correct' => true],
                            ['choice_text' => "Oui, toujours", 'is_correct' => false],
                            ['choice_text' => "Oui, seulement pour les gaz", 'is_correct' => false],
                            ['choice_text' => "Oui, mais uniquement en solution aqueuse", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si on retire un produit d’un système à l’équilibre, vers quel côté le système évolue-t-il généralement ?",
                        'explanation' => "Retirer un produit favorise le sens qui en reforme une partie. Le système évolue donc généralement vers les produits.",
                        'choices' => [
                            ['choice_text' => "Vers les produits", 'is_correct' => true],
                            ['choice_text' => "Vers les réactifs", 'is_correct' => false],
                            ['choice_text' => "Vers aucun côté", 'is_correct' => false],
                            ['choice_text' => "Vers la température la plus basse", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À température constante, lequel de ces changements modifie directement la valeur de K pour une réaction donnée ?",
                        'explanation' => "À température constante, changer les concentrations ou la pression déplace l’équilibre, mais ne change pas la constante K. C’est la température qui modifie directement K.",
                        'choices' => [
                            ['choice_text' => "Aucun de ces changements de composition", 'is_correct' => true],
                            ['choice_text' => "Ajouter un réactif", 'is_correct' => false],
                            ['choice_text' => "Retirer un produit", 'is_correct' => false],
                            ['choice_text' => "Ajouter un catalyseur", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Propriétés des solutions et effets colligatifs",
                'description' => "Découvrir comment certaines propriétés d’une solution dépendent du nombre de particules dissoutes.",
                'questions' => [
                    [
                        'question' => "Que signifie qu’une propriété est dite colligative ?",
                        'explanation' => "Une propriété colligative dépend principalement du nombre de particules dissoutes, et non de leur identité chimique précise, dans les modèles usuels.",
                        'choices' => [
                            ['choice_text' => "Elle dépend surtout du nombre de particules dissoutes", 'is_correct' => true],
                            ['choice_text' => "Elle dépend uniquement de la couleur", 'is_correct' => false],
                            ['choice_text' => "Elle ne dépend jamais de la quantité de soluté", 'is_correct' => false],
                            ['choice_text' => "Elle concerne seulement les gaz", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que peut provoquer l’ajout d’un soluté non volatil à l’eau concernant son point d’ébullition ?",
                        'explanation' => "Un soluté non volatil augmente généralement le point d’ébullition de la solution par rapport au solvant pur.",
                        'choices' => [
                            ['choice_text' => "Une augmentation du point d’ébullition", 'is_correct' => true],
                            ['choice_text' => "Une diminution obligatoire à 0 °C", 'is_correct' => false],
                            ['choice_text' => "Aucun changement dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "La disparition du solvant", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que peut provoquer l’ajout d’un soluté non volatil concernant le point de congélation de l’eau ?",
                        'explanation' => "La présence de particules dissoutes abaisse généralement le point de congélation. C’est l’un des effets colligatifs classiques.",
                        'choices' => [
                            ['choice_text' => "Une diminution du point de congélation", 'is_correct' => true],
                            ['choice_text' => "Une augmentation obligatoire à 100 °C", 'is_correct' => false],
                            ['choice_text' => "La disparition de toute phase liquide", 'is_correct' => false],
                            ['choice_text' => "Aucun effet possible", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi sale-t-on parfois les routes en hiver ?",
                        'explanation' => "Le sel dissous abaisse le point de congélation de l’eau, ce qui peut limiter la formation de glace dans certaines conditions.",
                        'choices' => [
                            ['choice_text' => "Pour abaisser le point de congélation de l’eau", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter la masse de glace", 'is_correct' => false],
                            ['choice_text' => "Pour augmenter la température de l’air", 'is_correct' => false],
                            ['choice_text' => "Pour transformer la glace en gaz directement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux solutions ont la même concentration molaire mais l’une produit deux particules par unité de formule et l’autre une seule. Laquelle peut avoir le plus grand effet colligatif idéal ?",
                        'explanation' => "À quantité de soluté comparable, une espèce qui se dissocie en davantage de particules produit un effet colligatif plus important dans le modèle idéal.",
                        'choices' => [
                            ['choice_text' => "Celle qui donne davantage de particules en solution", 'is_correct' => true],
                            ['choice_text' => "Celle qui donne moins de particules", 'is_correct' => false],
                            ['choice_text' => "Toujours celle qui a la plus grande masse molaire", 'is_correct' => false],
                            ['choice_text' => "Elles ont forcément le même effet", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel phénomène décrit le passage spontané du solvant à travers une membrane semi-perméable vers la solution la plus concentrée en soluté ?",
                        'explanation' => "Ce déplacement du solvant à travers une membrane semi-perméable est l’osmose.",
                        'choices' => [
                            ['choice_text' => "L’osmose", 'is_correct' => true],
                            ['choice_text' => "La distillation", 'is_correct' => false],
                            ['choice_text' => "La sublimation", 'is_correct' => false],
                            ['choice_text' => "La combustion", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle grandeur est utilisée pour exprimer la quantité de soluté indépendamment du volume de solution dans une approche basée sur les masses de solvant ?",
                        'explanation' => "La molalité est définie par la quantité de matière de soluté par kilogramme de solvant. Elle est utile notamment pour certaines propriétés colligatives.",
                        'choices' => [
                            ['choice_text' => "La molalité", 'is_correct' => true],
                            ['choice_text' => "La pression absolue", 'is_correct' => false],
                            ['choice_text' => "La densité optique", 'is_correct' => false],
                            ['choice_text' => "Le pH uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une solution très diluée contient-elle généralement moins de particules de soluté par unité de volume qu’une solution très concentrée ?",
                        'explanation' => "Oui. Une solution diluée possède une plus faible quantité de soluté rapportée au volume.",
                        'choices' => [
                            ['choice_text' => "Oui", 'is_correct' => true],
                            ['choice_text' => "Non, jamais", 'is_correct' => false],
                            ['choice_text' => "Seulement si le soluté est un gaz", 'is_correct' => false],
                            ['choice_text' => "La concentration n’a aucun rapport avec cela", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un modèle simple, ajouter davantage de particules dissoutes non volatiles à la même quantité de solvant renforce généralement les effets colligatifs. Pourquoi ?",
                        'explanation' => "Ces propriétés dépendent du nombre de particules dissoutes. Plus il y en a, plus l’effet observé est important dans le modèle idéal.",
                        'choices' => [
                            ['choice_text' => "Parce que le nombre de particules dissoutes augmente", 'is_correct' => true],
                            ['choice_text' => "Parce que la masse du solvant disparaît", 'is_correct' => false],
                            ['choice_text' => "Parce que la température est automatiquement multipliée par 2", 'is_correct' => false],
                            ['choice_text' => "Parce que la pression atmosphérique devient nulle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel phénomène est utilisé dans une solution saline pour conserver certains aliments en réduisant la disponibilité de l’eau pour les micro-organismes ?",
                        'explanation' => "Des milieux très concentrés en soluté peuvent provoquer des effets osmotiques qui rendent l’eau moins disponible pour certains micro-organismes.",
                        'choices' => [
                            ['choice_text' => "Un effet osmotique", 'is_correct' => true],
                            ['choice_text' => "Une fusion nucléaire", 'is_correct' => false],
                            ['choice_text' => "Une sublimation", 'is_correct' => false],
                            ['choice_text' => "Une réaction acido-basique obligatoire", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Électricité, ions et électrochimie physique",
                'description' => "Relier les notions de charge, ions, potentiel électrique et réactions d’oxydoréduction dans des situations simples.",
                'questions' => [
                    [
                        'question' => "Un cation est-il chargé positivement ou négativement ?",
                        'explanation' => "Un cation possède une charge positive, généralement parce qu’il a perdu un ou plusieurs électrons.",
                        'choices' => [
                            ['choice_text' => "Positivement", 'is_correct' => true],
                            ['choice_text' => "Négativement", 'is_correct' => false],
                            ['choice_text' => "Toujours neutre", 'is_correct' => false],
                            ['choice_text' => "Sa charge dépend uniquement de sa masse", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un anion est formé lorsqu’un atome ou un groupe d’atomes…",
                        'explanation' => "Un anion porte une charge négative. Il se forme généralement lorsqu’une espèce gagne un ou plusieurs électrons.",
                        'choices' => [
                            ['choice_text' => "gagne des électrons", 'is_correct' => true],
                            ['choice_text' => "perd des électrons", 'is_correct' => false],
                            ['choice_text' => "perd toujours des protons", 'is_correct' => false],
                            ['choice_text' => "devient automatiquement un métal", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une réaction d’oxydoréduction, l’oxydation correspond à…",
                        'explanation' => "L’oxydation est une perte d’électrons. La réduction correspond au gain d’électrons.",
                        'choices' => [
                            ['choice_text' => "Une perte d’électrons", 'is_correct' => true],
                            ['choice_text' => "Un gain d’électrons", 'is_correct' => false],
                            ['choice_text' => "Une perte de neutrons", 'is_correct' => false],
                            ['choice_text' => "Une augmentation obligatoire de volume", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une pile galvanique, quelle conversion d’énergie se produit principalement ?",
                        'explanation' => "Une pile transforme l’énergie chimique d’une réaction spontanée en énergie électrique.",
                        'choices' => [
                            ['choice_text' => "Énergie chimique en énergie électrique", 'is_correct' => true],
                            ['choice_text' => "Énergie électrique en masse", 'is_correct' => false],
                            ['choice_text' => "Énergie lumineuse en pression uniquement", 'is_correct' => false],
                            ['choice_text' => "Énergie thermique en nombre de moles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le rôle principal d’un pont salin dans une pile classique ?",
                        'explanation' => "Le pont salin permet la migration d’ions entre les compartiments afin de maintenir l’électroneutralité et de fermer le circuit ionique.",
                        'choices' => [
                            ['choice_text' => "Maintenir l’électroneutralité grâce au déplacement d’ions", 'is_correct' => true],
                            ['choice_text' => "Fournir tous les électrons du circuit extérieur", 'is_correct' => false],
                            ['choice_text' => "Chauffer la pile", 'is_correct' => false],
                            ['choice_text' => "Augmenter la masse des électrodes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une pile en fonctionnement, par où circulent principalement les électrons ?",
                        'explanation' => "Les électrons circulent dans le circuit extérieur entre les électrodes. À l’intérieur, le transport de charge se fait principalement par les ions.",
                        'choices' => [
                            ['choice_text' => "Dans le circuit extérieur", 'is_correct' => true],
                            ['choice_text' => "Uniquement dans le pont salin", 'is_correct' => false],
                            ['choice_text' => "À travers les molécules de solvant sans conducteur", 'is_correct' => false],
                            ['choice_text' => "Dans l’air uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que mesure la différence de potentiel d’une pile, exprimée en volts ?",
                        'explanation' => "La tension électrique mesure une différence de potentiel électrique entre deux points du circuit.",
                        'choices' => [
                            ['choice_text' => "Une différence de potentiel électrique", 'is_correct' => true],
                            ['choice_text' => "Une quantité de matière", 'is_correct' => false],
                            ['choice_text' => "Une masse par volume", 'is_correct' => false],
                            ['choice_text' => "Une température absolue", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une pile galvanique, l’anode est le siège de quelle transformation ?",
                        'explanation' => "À l’anode, il y a oxydation. Le signe de l’anode dépend du type de cellule, mais la réaction d’oxydation y reste la même.",
                        'choices' => [
                            ['choice_text' => "L’oxydation", 'is_correct' => true],
                            ['choice_text' => "La réduction", 'is_correct' => false],
                            ['choice_text' => "La fusion", 'is_correct' => false],
                            ['choice_text' => "La condensation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une pile galvanique, la cathode est le siège de…",
                        'explanation' => "La réduction a lieu à la cathode. Retenir « oxydation à l’anode, réduction à la cathode » permet d’éviter beaucoup de confusions.",
                        'choices' => [
                            ['choice_text' => "La réduction", 'is_correct' => true],
                            ['choice_text' => "L’oxydation", 'is_correct' => false],
                            ['choice_text' => "La sublimation", 'is_correct' => false],
                            ['choice_text' => "La vaporisation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une solution contenant des ions peut-elle conduire le courant électrique ?",
                        'explanation' => "Les ions mobiles peuvent transporter de la charge électrique dans la solution. Un solide ionique rigide ne conduit pas de la même manière tant que ses ions ne sont pas mobiles.",
                        'choices' => [
                            ['choice_text' => "Parce que des ions mobiles transportent la charge", 'is_correct' => true],
                            ['choice_text' => "Parce que les molécules deviennent toutes métalliques", 'is_correct' => false],
                            ['choice_text' => "Parce que la solution contient forcément des électrons libres comme un métal", 'is_correct' => false],
                            ['choice_text' => "Parce que l’eau devient un métal liquide", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Révision intégrée de chimie physique",
                'description' => "Réviser les concepts fondamentaux de gaz, thermodynamique, solutions, cinétique, équilibre et électrochimie.",
                'questions' => [
                    [
                        'question' => "Quelle relation est correcte pour un gaz parfait ?",
                        'explanation' => "L’équation d’état du gaz parfait relie pression, volume, quantité de matière et température par PV = nRT.",
                        'choices' => [
                            ['choice_text' => "PV = nRT", 'is_correct' => true],
                            ['choice_text' => "PV = n/T", 'is_correct' => false],
                            ['choice_text' => "P + V = nRT", 'is_correct' => false],
                            ['choice_text' => "P = nRV", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle formule donne une concentration molaire ?",
                        'explanation' => "La concentration molaire est la quantité de matière de soluté par unité de volume de solution : c = n/V.",
                        'choices' => [
                            ['choice_text' => "c = n/V", 'is_correct' => true],
                            ['choice_text' => "c = V/n", 'is_correct' => false],
                            ['choice_text' => "c = nV", 'is_correct' => false],
                            ['choice_text' => "c = n + V", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une réaction exothermique a généralement un ΔH…",
                        'explanation' => "Une réaction exothermique libère de la chaleur. À pression constante, cette chaleur correspond à un ΔH négatif.",
                        'choices' => [
                            ['choice_text' => "Négatif", 'is_correct' => true],
                            ['choice_text' => "Positif", 'is_correct' => false],
                            ['choice_text' => "Toujours nul", 'is_correct' => false],
                            ['choice_text' => "Toujours égal à 1", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel facteur augmente souvent la vitesse d’une réaction ?",
                        'explanation' => "Augmenter la température, la concentration ou la surface de contact dans les cas appropriés peut augmenter la fréquence des collisions efficaces.",
                        'choices' => [
                            ['choice_text' => "Une augmentation de température", 'is_correct' => true],
                            ['choice_text' => "Une diminution systématique des collisions", 'is_correct' => false],
                            ['choice_text' => "Une baisse de la concentration dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "Un refroidissement extrême dans tous les cas", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À l’équilibre, que vaut généralement le rapport entre les vitesses directe et inverse ?",
                        'explanation' => "À l’équilibre dynamique, les deux vitesses sont égales, même si les concentrations des espèces sont différentes.",
                        'choices' => [
                            ['choice_text' => "Elles sont égales", 'is_correct' => true],
                            ['choice_text' => "La vitesse directe est toujours nulle", 'is_correct' => false],
                            ['choice_text' => "La vitesse inverse est toujours nulle", 'is_correct' => false],
                            ['choice_text' => "Elles doivent être dix fois différentes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lorsqu’on dilue une solution sans perdre de soluté, la concentration…",
                        'explanation' => "La dilution augmente le volume alors que la quantité de soluté reste la même. La concentration diminue donc.",
                        'choices' => [
                            ['choice_text' => "diminue", 'is_correct' => true],
                            ['choice_text' => "augmente toujours", 'is_correct' => false],
                            ['choice_text' => "reste identique quelle que soit la dilution", 'is_correct' => false],
                            ['choice_text' => "devient forcément infinie", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une pile galvanique, où se produit l’oxydation ?",
                        'explanation' => "L’oxydation a lieu à l’anode. La réduction a lieu à la cathode.",
                        'choices' => [
                            ['choice_text' => "À l’anode", 'is_correct' => true],
                            ['choice_text' => "À la cathode uniquement", 'is_correct' => false],
                            ['choice_text' => "Dans le pont salin uniquement", 'is_correct' => false],
                            ['choice_text' => "Dans le voltmètre uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un catalyseur accélère-t-il souvent une réaction ?",
                        'explanation' => "Il fournit un chemin réactionnel de plus faible énergie d’activation, ce qui permet à davantage de collisions d’être efficaces.",
                        'choices' => [
                            ['choice_text' => "Il diminue la barrière d’activation du chemin réactionnel", 'is_correct' => true],
                            ['choice_text' => "Il augmente la masse des réactifs", 'is_correct' => false],
                            ['choice_text' => "Il change toujours la constante d’équilibre", 'is_correct' => false],
                            ['choice_text' => "Il transforme tous les produits en réactifs", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une pression plus élevée favorise généralement, dans un équilibre gazeux, le côté qui contient…",
                        'explanation' => "Le système tend à limiter l’effet d’une hausse de pression en favorisant le côté comportant moins de moles gazeuses, lorsqu’il y a une différence.",
                        'choices' => [
                            ['choice_text' => "Moins de moles de gaz", 'is_correct' => true],
                            ['choice_text' => "Plus de moles de gaz", 'is_correct' => false],
                            ['choice_text' => "Toujours plus de solide", 'is_correct' => false],
                            ['choice_text' => "Toujours moins de liquide", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle idée relie le plus directement la thermodynamique à la conservation de l’énergie ?",
                        'explanation' => "Le premier principe de la thermodynamique exprime la conservation de l’énergie en reliant les variations d’énergie interne aux échanges de chaleur et de travail.",
                        'choices' => [
                            ['choice_text' => "L’énergie totale se conserve, même si elle est transférée ou transformée", 'is_correct' => true],
                            ['choice_text' => "L’énergie apparaît sans échange", 'is_correct' => false],
                            ['choice_text' => "La chaleur et le travail n’ont rien à voir avec l’énergie", 'is_correct' => false],
                            ['choice_text' => "Toute réaction détruit une quantité fixe d’énergie", 'is_correct' => false],
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
