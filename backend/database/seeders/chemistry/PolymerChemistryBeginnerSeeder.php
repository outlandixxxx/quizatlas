<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PolymerChemistryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'polymer-chemistry')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 65],
            6 => ['duration' => 20, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 70],
            8 => ['duration' => 25, 'passing_score' => 70],
            9 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => "Les bases des polymères",
                'description' => "Reconnaître les notions essentielles : polymère, monomère, chaîne macromoléculaire et matériau polymère.",
                'questions' => [
                    [
                        'question' => "Qu’appelle-t-on un polymère ?",
                        'explanation' => "Un polymère est une très grande molécule formée par l’enchaînement répété de petites unités appelées monomères.",
                        'choices' => [
                            ['choice_text' => "Une petite molécule toujours constituée d’un seul atome", 'is_correct' => false],
                            ['choice_text' => "Une macromolécule formée par la répétition d’unités", 'is_correct' => true],
                            ['choice_text' => "Un alliage métallique très pur", 'is_correct' => false],
                            ['choice_text' => "Un mélange qui ne contient aucune molécule", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le terme « monomère » désigne principalement…",
                        'explanation' => "Le monomère est la petite molécule qui peut s’assembler avec d’autres pour construire une chaîne polymère.",
                        'choices' => [
                            ['choice_text' => "L’unité de départ capable de former un polymère", 'is_correct' => true],
                            ['choice_text' => "Le produit final obtenu après combustion", 'is_correct' => false],
                            ['choice_text' => "Un catalyseur métallique uniquement", 'is_correct' => false],
                            ['choice_text' => "Une fibre déjà tissée", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi parle-t-on de « macromolécule » pour un polymère ?",
                        'explanation' => "Une macromolécule est une molécule de très grande taille et de masse molaire élevée, ce qui correspond aux chaînes polymères.",
                        'choices' => [
                            ['choice_text' => "Parce qu’elle contient forcément un métal", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle est formée d’un grand nombre d’unités répétées", 'is_correct' => true],
                            ['choice_text' => "Parce qu’elle est toujours liquide", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle n’a aucune liaison covalente", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le polyéthylène est obtenu à partir de quel monomère ?",
                        'explanation' => "Le polyéthylène provient de la polymérisation de l’éthène, CH₂=CH₂, dont la double liaison s’ouvre pour former la chaîne.",
                        'choices' => [
                            ['choice_text' => "Éthène", 'is_correct' => true],
                            ['choice_text' => "Éthanol", 'is_correct' => false],
                            ['choice_text' => "Méthane", 'is_correct' => false],
                            ['choice_text' => "Benzène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une chaîne polymère est dite « linéaire » lorsqu’elle…",
                        'explanation' => "Dans une structure linéaire, les unités répétées forment principalement une longue chaîne sans réseau tridimensionnel ramifié important.",
                        'choices' => [
                            ['choice_text' => "forme un réseau tridimensionnel très réticulé", 'is_correct' => false],
                            ['choice_text' => "est constituée d’une chaîne principale continue", 'is_correct' => true],
                            ['choice_text' => "contient uniquement des atomes de carbone", 'is_correct' => false],
                            ['choice_text' => "est toujours très courte", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel exemple correspond à un polymère naturel ?",
                        'explanation' => "La cellulose est un polymère naturel présent dans les végétaux. Elle est constituée d’unités de glucose liées entre elles.",
                        'choices' => [
                            ['choice_text' => "Cellulose", 'is_correct' => true],
                            ['choice_text' => "Polyéthylène", 'is_correct' => false],
                            ['choice_text' => "PVC", 'is_correct' => false],
                            ['choice_text' => "Polystyrène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La masse molaire d’un polymère peut-elle être très supérieure à celle de son monomère ?",
                        'explanation' => "Oui. Une chaîne contient de nombreuses unités répétées, sa masse molaire devient donc beaucoup plus grande que celle d’une seule unité de départ.",
                        'choices' => [
                            ['choice_text' => "Non, elles sont toujours identiques", 'is_correct' => false],
                            ['choice_text' => "Oui, car la chaîne contient de nombreuses unités", 'is_correct' => true],
                            ['choice_text' => "Seulement pour les polymères naturels", 'is_correct' => false],
                            ['choice_text' => "Seulement si le polymère est métallique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel domaine utilise très largement les polymères ?",
                        'explanation' => "Les polymères sont présents dans les emballages, les textiles, les pièces automobiles, l’électronique et de nombreux dispositifs médicaux.",
                        'choices' => [
                            ['choice_text' => "Seulement la joaillerie", 'is_correct' => false],
                            ['choice_text' => "De nombreux secteurs industriels et du quotidien", 'is_correct' => true],
                            ['choice_text' => "Uniquement les laboratoires de recherche", 'is_correct' => false],
                            ['choice_text' => "Seulement la métallurgie", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel élément explique en grande partie la grande variété de propriétés des polymères ?",
                        'explanation' => "La nature des monomères, la longueur des chaînes, les ramifications et la réticulation modifient fortement les propriétés finales.",
                        'choices' => [
                            ['choice_text' => "La structure des chaînes moléculaires", 'is_correct' => true],
                            ['choice_text' => "La couleur du moule uniquement", 'is_correct' => false],
                            ['choice_text' => "Le volume du laboratoire", 'is_correct' => false],
                            ['choice_text' => "La forme de l’étiquette", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une matière appelée « plastique » est-elle forcément un seul type de polymère ?",
                        'explanation' => "Non. Le mot plastique désigne une grande famille de matériaux qui peuvent contenir différents polymères et divers additifs.",
                        'choices' => [
                            ['choice_text' => "Oui, tous les plastiques sont identiques", 'is_correct' => false],
                            ['choice_text' => "Non, il existe de nombreuses familles de polymères", 'is_correct' => true],
                            ['choice_text' => "Oui, ils sont tous faits de polyéthylène", 'is_correct' => false],
                            ['choice_text' => "Non, car les plastiques ne contiennent aucune molécule", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Polymérisation par addition",
                'description' => "Comprendre le principe de la polymérisation par addition et reconnaître les monomères possédant une double liaison C=C.",
                'questions' => [
                    [
                        'question' => "Quel type de liaison du monomère est souvent consommé lors d’une polymérisation par addition ?",
                        'explanation' => "Dans de nombreuses polymérisations par addition, la double liaison C=C du monomère s’ouvre pour relier les unités entre elles.",
                        'choices' => [
                            ['choice_text' => "Une double liaison carbone-carbone", 'is_correct' => true],
                            ['choice_text' => "Une liaison métallique", 'is_correct' => false],
                            ['choice_text' => "Une liaison ionique entre deux métaux", 'is_correct' => false],
                            ['choice_text' => "Une liaison hydrogène seule", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle transformation décrit le mieux la formation du polyéthylène à partir de l’éthène ?",
                        'explanation' => "Les molécules d’éthène s’assemblent après ouverture de leur double liaison pour former une longue chaîne de polyéthylène.",
                        'choices' => [
                            ['choice_text' => "Polymérisation par addition", 'is_correct' => true],
                            ['choice_text' => "Neutralisation acido-basique", 'is_correct' => false],
                            ['choice_text' => "Précipitation d’un sel", 'is_correct' => false],
                            ['choice_text' => "Combustion complète", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le propène CH₂=CH–CH₃ peut-il servir de monomère pour une polymérisation par addition ?",
                        'explanation' => "Oui. Le propène possède une double liaison C=C réactive qui peut s’ouvrir pendant la polymérisation pour former le polypropylène.",
                        'choices' => [
                            ['choice_text' => "Oui", 'is_correct' => true],
                            ['choice_text' => "Non, car il ne contient pas d’oxygène", 'is_correct' => false],
                            ['choice_text' => "Non, car seuls les alcanes peuvent polymériser", 'is_correct' => false],
                            ['choice_text' => "Seulement après combustion", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le PVC est formé à partir du chlorure de vinyle. Quelle fonction importante du monomère permet sa polymérisation par addition ?",
                        'explanation' => "Le chlorure de vinyle possède une double liaison C=C. Cette liaison permet aux monomères de s’enchaîner.",
                        'choices' => [
                            ['choice_text' => "La double liaison carbone-carbone", 'is_correct' => true],
                            ['choice_text' => "Le chlore qui se transforme en métal", 'is_correct' => false],
                            ['choice_text' => "Une liaison hydrogène", 'is_correct' => false],
                            ['choice_text' => "Une liaison ionique entre deux chlorures", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle différence importante existe entre le monomère et l’unité répétitive d’un polymère d’addition ?",
                        'explanation' => "La formule de l’unité répétitive ressemble au monomère, mais la double liaison a été utilisée pour former les liaisons de la chaîne.",
                        'choices' => [
                            ['choice_text' => "L’unité répétitive conserve toujours exactement la même double liaison", 'is_correct' => false],
                            ['choice_text' => "La double liaison du monomère a servi à construire la chaîne", 'is_correct' => true],
                            ['choice_text' => "Le polymère ne contient plus de carbone", 'is_correct' => false],
                            ['choice_text' => "Le monomère devient automatiquement un métal", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lors d’une polymérisation par addition simple, quel sous-produit moléculaire est typiquement libéré ?",
                        'explanation' => "Dans une polymérisation par addition, les monomères s’ajoutent sans élimination systématique d’une petite molécule comme l’eau.",
                        'choices' => [
                            ['choice_text' => "De l’eau dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "Aucun petit sous-produit n’est nécessairement éliminé", 'is_correct' => true],
                            ['choice_text' => "Du dioxyde de carbone obligatoirement", 'is_correct' => false],
                            ['choice_text' => "Du chlorure de sodium", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les monomères avec une double liaison sont-ils souvent adaptés à l’addition polymérisante ?",
                        'explanation' => "La double liaison peut se transformer en liaisons simples reliant les unités. Cela permet de construire progressivement une longue chaîne.",
                        'choices' => [
                            ['choice_text' => "Parce qu’ils peuvent ouvrir leur double liaison pour s’enchaîner", 'is_correct' => true],
                            ['choice_text' => "Parce qu’ils ne contiennent aucun atome", 'is_correct' => false],
                            ['choice_text' => "Parce qu’ils sont toujours ioniques", 'is_correct' => false],
                            ['choice_text' => "Parce qu’ils sont forcément métalliques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel polymère est directement associé au monomère propène ?",
                        'explanation' => "La polymérisation du propène donne le polypropylène, très utilisé pour les emballages, fibres et pièces moulées.",
                        'choices' => [
                            ['choice_text' => "Polypropylène", 'is_correct' => true],
                            ['choice_text' => "Polyamide-6,6", 'is_correct' => false],
                            ['choice_text' => "Polyester saturé uniquement", 'is_correct' => false],
                            ['choice_text' => "Cellulose", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une polymérisation par addition, les unités monomères sont-elles liées de manière permanente dans la chaîne finale ?",
                        'explanation' => "Oui. Après polymérisation, les monomères deviennent des unités de la macromolécule reliées par des liaisons covalentes dans la chaîne.",
                        'choices' => [
                            ['choice_text' => "Oui, par des liaisons covalentes dans la chaîne", 'is_correct' => true],
                            ['choice_text' => "Non, elles restent séparées dans le matériau", 'is_correct' => false],
                            ['choice_text' => "Oui, mais seulement par des forces magnétiques", 'is_correct' => false],
                            ['choice_text' => "Non, elles deviennent toutes des ions libres", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel monomère convient le mieux à une polymérisation par addition classique ?",
                        'explanation' => "Un alcène comme l’éthène possède une double liaison C=C qui peut être ouverte pour former une chaîne polymère.",
                        'choices' => [
                            ['choice_text' => "Éthène CH₂=CH₂", 'is_correct' => true],
                            ['choice_text' => "Méthane CH₄", 'is_correct' => false],
                            ['choice_text' => "Éthane C₂H₆", 'is_correct' => false],
                            ['choice_text' => "Eau H₂O", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Polymérisation par condensation",
                'description' => "Identifier les polymères issus de monomères portant plusieurs fonctions réactives et comprendre l’élimination de petites molécules.",
                'questions' => [
                    [
                        'question' => "Dans une polymérisation par condensation, que peut-il se former en plus du polymère ?",
                        'explanation' => "Selon la réaction, une petite molécule comme l’eau, HCl ou le méthanol peut être éliminée pendant la formation du polymère.",
                        'choices' => [
                            ['choice_text' => "Une petite molécule sous-produit", 'is_correct' => true],
                            ['choice_text' => "Toujours un métal pur", 'is_correct' => false],
                            ['choice_text' => "Uniquement de l’oxygène moléculaire", 'is_correct' => false],
                            ['choice_text' => "Aucun nouveau lien covalent", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le nylon appartient à quelle grande famille de polymères ?",
                        'explanation' => "Les nylons sont des polyamides. Ils contiennent des liaisons amide dans leur chaîne principale.",
                        'choices' => [
                            ['choice_text' => "Polyamides", 'is_correct' => true],
                            ['choice_text' => "Polyalcanes", 'is_correct' => false],
                            ['choice_text' => "Polysulfures métalliques", 'is_correct' => false],
                            ['choice_text' => "Polymères minéraux uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel groupe fonctionnel relie souvent les unités d’un polyamide ?",
                        'explanation' => "La liaison amide –CO–NH– constitue l’élément caractéristique des polyamides comme le nylon.",
                        'choices' => [
                            ['choice_text' => "Amide", 'is_correct' => true],
                            ['choice_text' => "Alcène", 'is_correct' => false],
                            ['choice_text' => "Alcane métallique", 'is_correct' => false],
                            ['choice_text' => "Gaz noble", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le PET est couramment classé parmi les…",
                        'explanation' => "Le PET, ou polyéthylène téréphtalate, est un polyester largement utilisé pour les bouteilles et fibres.",
                        'choices' => [
                            ['choice_text' => "Polyesters", 'is_correct' => true],
                            ['choice_text' => "Polyamides uniquement", 'is_correct' => false],
                            ['choice_text' => "Hydrocarbures simples", 'is_correct' => false],
                            ['choice_text' => "Métaux de transition", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les monomères d’une polymérisation par condensation portent-ils souvent plusieurs fonctions réactives ?",
                        'explanation' => "Il faut pouvoir relier une molécule à plusieurs autres. Des monomères bifonctionnels ou polyfonctionnels permettent donc de construire des chaînes ou réseaux.",
                        'choices' => [
                            ['choice_text' => "Pour permettre plusieurs liaisons et prolonger la chaîne", 'is_correct' => true],
                            ['choice_text' => "Pour empêcher toute réaction", 'is_correct' => false],
                            ['choice_text' => "Pour rendre le polymère métallique", 'is_correct' => false],
                            ['choice_text' => "Pour éliminer tous les atomes de carbone", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel produit peut être éliminé dans certaines synthèses de polyesters ?",
                        'explanation' => "La formation d’un ester par condensation peut s’accompagner de l’élimination d’une petite molécule, souvent l’eau selon les monomères employés.",
                        'choices' => [
                            ['choice_text' => "Eau", 'is_correct' => true],
                            ['choice_text' => "Fer métallique", 'is_correct' => false],
                            ['choice_text' => "Hélium", 'is_correct' => false],
                            ['choice_text' => "Carbone solide", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une polymérisation par condensation est-elle forcément plus lente qu’une polymérisation par addition ?",
                        'explanation' => "La vitesse dépend des conditions et du mécanisme. Le mot « condensation » décrit surtout le mode de formation et le sous-produit éventuel, pas une vitesse universelle.",
                        'choices' => [
                            ['choice_text' => "Oui, toujours", 'is_correct' => false],
                            ['choice_text' => "Non, la vitesse dépend des conditions de réaction", 'is_correct' => true],
                            ['choice_text' => "Oui, parce qu’elle se fait toujours à froid", 'is_correct' => false],
                            ['choice_text' => "Non, parce qu’elle ne nécessite aucune liaison covalente", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle association est correcte ?",
                        'explanation' => "Le nylon est un polyamide, tandis que le PET est un polyester. Les deux sont des polymères de condensation classiques.",
                        'choices' => [
                            ['choice_text' => "Nylon → polyamide", 'is_correct' => true],
                            ['choice_text' => "Nylon → polyéthylène", 'is_correct' => false],
                            ['choice_text' => "PET → polyamide aromatique", 'is_correct' => false],
                            ['choice_text' => "PET → cellulose naturelle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la présence d’un sous-produit comme l’eau peut-elle être importante dans une réaction de condensation ?",
                        'explanation' => "Le sous-produit peut influencer l’équilibre de la réaction. Dans certains procédés industriels, on cherche à l’éliminer pour favoriser la formation du polymère.",
                        'choices' => [
                            ['choice_text' => "Parce que sa présence peut limiter l’avancement de la réaction", 'is_correct' => true],
                            ['choice_text' => "Parce qu’elle transforme immédiatement le polymère en métal", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle empêche toute liaison chimique", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle refroidit toujours le réacteur à zéro degré", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle liaison caractérise un polyester comme le PET ?",
                        'explanation' => "Les polyesters contiennent des liaisons ester dans leur chaîne principale, issues de réactions entre fonctions adaptées.",
                        'choices' => [
                            ['choice_text' => "Ester", 'is_correct' => true],
                            ['choice_text' => "Amide", 'is_correct' => false],
                            ['choice_text' => "Métallique", 'is_correct' => false],
                            ['choice_text' => "Peptidique uniquement", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Thermoplastiques, thermodurcissables et élastomères",
                'description' => "Comparer les grandes familles de polymères selon leur comportement à la chaleur et leur structure.",
                'questions' => [
                    [
                        'question' => "Un thermoplastique chauffé au-dessus de sa zone de ramollissement peut généralement…",
                        'explanation' => "Les thermoplastiques peuvent être ramollis ou fondus puis remis en forme, ce qui permet notamment leur transformation par injection ou extrusion.",
                        'choices' => [
                            ['choice_text' => "Être ramolli puis remis en forme", 'is_correct' => true],
                            ['choice_text' => "Devenir forcément un métal liquide", 'is_correct' => false],
                            ['choice_text' => "Perdre instantanément tous ses atomes de carbone", 'is_correct' => false],
                            ['choice_text' => "Ne plus jamais pouvoir refroidir", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle propriété distingue souvent un thermodurcissable d’un thermoplastique ?",
                        'explanation' => "Les thermodurcissables forment un réseau réticulé qui ne permet généralement pas de les refondre comme un thermoplastique ordinaire.",
                        'choices' => [
                            ['choice_text' => "Le thermodurcissable ne peut généralement pas être refondu pour être remoulé", 'is_correct' => true],
                            ['choice_text' => "Le thermodurcissable ne contient jamais de carbone", 'is_correct' => false],
                            ['choice_text' => "Le thermoplastique est toujours plus dur", 'is_correct' => false],
                            ['choice_text' => "Le thermodurcissable est toujours soluble dans l’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel matériau est typiquement associé à une structure fortement réticulée ?",
                        'explanation' => "Les résines époxydes durcies forment un réseau tridimensionnel fortement réticulé, ce qui leur donne une bonne rigidité et stabilité.",
                        'choices' => [
                            ['choice_text' => "Une résine époxyde durcie", 'is_correct' => true],
                            ['choice_text' => "Un film de polyéthylène linéaire", 'is_correct' => false],
                            ['choice_text' => "Une solution aqueuse d’éthanol", 'is_correct' => false],
                            ['choice_text' => "Un gaz noble", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un réseau fortement réticulé résiste-t-il généralement mieux à la déformation permanente ?",
                        'explanation' => "Les liaisons entre chaînes limitent leur déplacement relatif. Le matériau devient donc plus rigide et garde plus facilement sa forme.",
                        'choices' => [
                            ['choice_text' => "Parce que les chaînes sont liées entre elles", 'is_correct' => true],
                            ['choice_text' => "Parce que les molécules cessent d’exister", 'is_correct' => false],
                            ['choice_text' => "Parce que le matériau devient un métal", 'is_correct' => false],
                            ['choice_text' => "Parce que toutes les forces intermoléculaires disparaissent", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un élastomère est surtout recherché pour quelle caractéristique ?",
                        'explanation' => "Les élastomères peuvent subir une déformation importante puis retrouver une grande partie de leur forme initiale.",
                        'choices' => [
                            ['choice_text' => "Une bonne élasticité", 'is_correct' => true],
                            ['choice_text' => "Une conductivité métallique élevée", 'is_correct' => false],
                            ['choice_text' => "Une solubilité totale dans l’eau", 'is_correct' => false],
                            ['choice_text' => "Une fusion à température ambiante dans tous les cas", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les pneus utilisent-ils des matériaux élastomères ?",
                        'explanation' => "Un pneu doit se déformer sous la charge, absorber des chocs et reprendre sa forme. Les élastomères sont adaptés à ce comportement.",
                        'choices' => [
                            ['choice_text' => "Parce qu’ils supportent des déformations répétées", 'is_correct' => true],
                            ['choice_text' => "Parce qu’ils sont tous thermodurcissables rigides", 'is_correct' => false],
                            ['choice_text' => "Parce qu’ils fondent à chaque freinage", 'is_correct' => false],
                            ['choice_text' => "Parce qu’ils sont constitués uniquement de verre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel type de polymère est généralement le plus facile à refondre et retraiter ?",
                        'explanation' => "Les thermoplastiques ne possèdent pas un réseau tridimensionnel irréversible aussi fortement réticulé que les thermodurcissables.",
                        'choices' => [
                            ['choice_text' => "Thermoplastique", 'is_correct' => true],
                            ['choice_text' => "Thermodurcissable", 'is_correct' => false],
                            ['choice_text' => "Verre minéral", 'is_correct' => false],
                            ['choice_text' => "Céramique dense", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une pièce en plastique se ramollit et peut être remoulée plusieurs fois sans réaction chimique majeure. Elle ressemble le plus à…",
                        'explanation' => "Ce comportement est typique d’un thermoplastique, qui peut être ramolli par chauffage puis refroidi à nouveau.",
                        'choices' => [
                            ['choice_text' => "Un thermoplastique", 'is_correct' => true],
                            ['choice_text' => "Un thermodurcissable fortement réticulé", 'is_correct' => false],
                            ['choice_text' => "Une céramique", 'is_correct' => false],
                            ['choice_text' => "Un verre métallique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé décrit correctement un thermodurcissable ?",
                        'explanation' => "Après durcissement, la réticulation crée un réseau permanent. Un chauffage important peut conduire à la dégradation plutôt qu’à une simple fusion réversible.",
                        'choices' => [
                            ['choice_text' => "Il forme généralement un réseau qui ne se refond pas comme un thermoplastique", 'is_correct' => true],
                            ['choice_text' => "Il est toujours liquide à froid", 'is_correct' => false],
                            ['choice_text' => "Il ne possède aucune liaison covalente", 'is_correct' => false],
                            ['choice_text' => "Il se dissout forcément dans l’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel choix associe correctement la famille et son comportement ?",
                        'explanation' => "Thermoplastique = ramollissement et remoulage possibles ; thermodurcissable = réseau permanent ; élastomère = forte élasticité.",
                        'choices' => [
                            ['choice_text' => "Thermoplastique → remoulable ; thermodurcissable → réseau permanent ; élastomère → élastique", 'is_correct' => true],
                            ['choice_text' => "Thermoplastique → toujours cassant ; thermodurcissable → liquide ; élastomère → métallique", 'is_correct' => false],
                            ['choice_text' => "Thermoplastique → gaz ; thermodurcissable → solution aqueuse ; élastomère → céramique", 'is_correct' => false],
                            ['choice_text' => "Les trois familles ont exactement le même comportement", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Structure des chaînes et propriétés",
                'description' => "Relier la structure moléculaire, la masse molaire, les ramifications et les interactions aux propriétés du polymère.",
                'questions' => [
                    [
                        'question' => "Deux polymères ont des chaînes de même nature mais des masses molaires très différentes. Leur comportement peut-il changer ?",
                        'explanation' => "Oui. Une chaîne plus longue peut modifier la viscosité, la résistance mécanique et la température de transformation du matériau.",
                        'choices' => [
                            ['choice_text' => "Oui, la longueur des chaînes influence les propriétés", 'is_correct' => true],
                            ['choice_text' => "Non, la masse molaire n’a jamais d’effet", 'is_correct' => false],
                            ['choice_text' => "Seulement si le polymère est naturel", 'is_correct' => false],
                            ['choice_text' => "Seulement à température de zéro kelvin", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle structure permet généralement aux chaînes de mieux s’empiler les unes contre les autres ?",
                        'explanation' => "Des chaînes plus régulières et moins encombrées par des ramifications peuvent souvent se rapprocher et s’organiser plus facilement.",
                        'choices' => [
                            ['choice_text' => "Des chaînes régulières et peu ramifiées", 'is_correct' => true],
                            ['choice_text' => "Des chaînes extrêmement encombrées par des branches aléatoires", 'is_correct' => false],
                            ['choice_text' => "Des chaînes constituées uniquement de gaz", 'is_correct' => false],
                            ['choice_text' => "Des chaînes sans aucune liaison", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La cristallinité d’un polymère correspond à…",
                        'explanation' => "Un polymère peut présenter des zones où les chaînes sont arrangées de manière régulière. Ces zones dites cristallines coexistent souvent avec des zones amorphes.",
                        'choices' => [
                            ['choice_text' => "La présence de régions de chaînes ordonnées", 'is_correct' => true],
                            ['choice_text' => "La présence obligatoire de cristaux de sel", 'is_correct' => false],
                            ['choice_text' => "La fusion complète du matériau", 'is_correct' => false],
                            ['choice_text' => "La disparition des liaisons covalentes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une forte cristallinité peut souvent augmenter quelle propriété d’un polymère ?",
                        'explanation' => "Les zones cristallines peuvent renforcer les interactions entre chaînes et améliorer la rigidité et la résistance mécanique, selon le système.",
                        'choices' => [
                            ['choice_text' => "La rigidité", 'is_correct' => true],
                            ['choice_text' => "La volatilité comme un gaz léger", 'is_correct' => false],
                            ['choice_text' => "La solubilité dans tous les solvants", 'is_correct' => false],
                            ['choice_text' => "La conductivité électrique métallique dans tous les cas", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la ramification peut-elle modifier la densité d’un polyéthylène ?",
                        'explanation' => "Les ramifications gênent l’empilement régulier des chaînes. Une structure plus ramifiée peut donc conduire à un matériau moins dense.",
                        'choices' => [
                            ['choice_text' => "Elle peut empêcher les chaînes de s’empiler aussi efficacement", 'is_correct' => true],
                            ['choice_text' => "Elle transforme le polymère en métal", 'is_correct' => false],
                            ['choice_text' => "Elle supprime tous les atomes d’hydrogène", 'is_correct' => false],
                            ['choice_text' => "Elle rend toujours le polymère soluble dans l’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La transition vitreuse Tg est surtout associée à…",
                        'explanation' => "Sous Tg, certaines chaînes polymères sont relativement figées. Au-dessus de Tg, les mouvements segmentaires deviennent plus importants et le matériau peut devenir plus souple.",
                        'choices' => [
                            ['choice_text' => "Un changement de mobilité des segments de chaîne", 'is_correct' => true],
                            ['choice_text' => "La fusion obligatoire du carbone", 'is_correct' => false],
                            ['choice_text' => "La formation d’un métal pur", 'is_correct' => false],
                            ['choice_text' => "Une réaction nucléaire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un matériau polymère devient plus souple en passant au-dessus de Tg. Quelle explication est la plus raisonnable ?",
                        'explanation' => "Au-dessus de Tg, les mouvements locaux des segments de chaînes sont plus faciles. Le matériau perd donc une partie de sa rigidité vitreuse.",
                        'choices' => [
                            ['choice_text' => "Les segments de chaînes gagnent en mobilité", 'is_correct' => true],
                            ['choice_text' => "Toutes les chaînes se cassent immédiatement", 'is_correct' => false],
                            ['choice_text' => "Le polymère devient automatiquement liquide", 'is_correct' => false],
                            ['choice_text' => "Les liaisons covalentes sont toutes supprimées", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les forces entre chaînes peuvent-elles influencer la résistance mécanique ?",
                        'explanation' => "Des interactions plus fortes peuvent limiter le glissement relatif des chaînes et rendre le matériau plus difficile à déformer.",
                        'choices' => [
                            ['choice_text' => "Elles peuvent limiter le glissement des chaînes", 'is_correct' => true],
                            ['choice_text' => "Elles empêchent toute vibration moléculaire", 'is_correct' => false],
                            ['choice_text' => "Elles transforment les chaînes en ions libres", 'is_correct' => false],
                            ['choice_text' => "Elles rendent le polymère nécessairement gazeux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel matériau a le plus de chances d’être souple à température ambiante : un polymère bien au-dessus de Tg ou bien en dessous de Tg ?",
                        'explanation' => "Un polymère situé au-dessus de sa transition vitreuse peut présenter davantage de mobilité segmentaire et donc une plus grande souplesse.",
                        'choices' => [
                            ['choice_text' => "Celui qui est bien au-dessus de Tg", 'is_correct' => true],
                            ['choice_text' => "Celui qui est très en dessous de Tg", 'is_correct' => false],
                            ['choice_text' => "Les deux ont forcément la même rigidité", 'is_correct' => false],
                            ['choice_text' => "Aucun des deux ne peut être solide", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel facteur peut augmenter la rigidité d’un polymère sans changer son monomère principal ?",
                        'explanation' => "Une augmentation de cristallinité ou de réticulation peut renforcer le matériau même lorsque la nature chimique de base des unités reste similaire.",
                        'choices' => [
                            ['choice_text' => "Une structure plus cristalline ou plus réticulée", 'is_correct' => true],
                            ['choice_text' => "La suppression de toutes les liaisons entre chaînes", 'is_correct' => false],
                            ['choice_text' => "L’ajout d’air pur dans le récipient", 'is_correct' => false],
                            ['choice_text' => "La diminution du nombre de carbone à zéro", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Additifs et formulation des polymères",
                'description' => "Comprendre pourquoi les polymères industriels contiennent souvent des plastifiants, charges, pigments, stabilisants et autres additifs.",
                'questions' => [
                    [
                        'question' => "À quoi sert généralement un plastifiant ?",
                        'explanation' => "Un plastifiant peut augmenter la souplesse d’un polymère en facilitant certains mouvements des chaînes.",
                        'choices' => [
                            ['choice_text' => "À rendre le matériau plus souple", 'is_correct' => true],
                            ['choice_text' => "À transformer le polymère en métal", 'is_correct' => false],
                            ['choice_text' => "À supprimer toutes les chaînes", 'is_correct' => false],
                            ['choice_text' => "À augmenter obligatoirement sa conductivité métallique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi ajoute-t-on parfois des pigments à un polymère ?",
                        'explanation' => "Les pigments permettent notamment de donner une couleur au matériau et parfois d’améliorer certaines propriétés optiques.",
                        'choices' => [
                            ['choice_text' => "Pour obtenir une couleur désirée", 'is_correct' => true],
                            ['choice_text' => "Pour créer la chaîne polymère elle-même", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer la masse du matériau", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer toutes les liaisons covalentes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le rôle d’un stabilisant thermique ?",
                        'explanation' => "Il aide à limiter la dégradation du polymère lorsqu’il est exposé à la chaleur pendant la transformation ou l’utilisation.",
                        'choices' => [
                            ['choice_text' => "Réduire la dégradation provoquée par la chaleur", 'is_correct' => true],
                            ['choice_text' => "Faire fondre le polymère plus rapidement dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "Transformer les chaînes en gaz", 'is_correct' => false],
                            ['choice_text' => "Éliminer tous les additifs", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une charge minérale ajoutée à un plastique peut avoir quel effet ?",
                        'explanation' => "Certaines charges peuvent augmenter la rigidité, réduire le coût ou modifier la stabilité dimensionnelle, selon leur nature et leur quantité.",
                        'choices' => [
                            ['choice_text' => "Modifier la rigidité ou d’autres propriétés mécaniques", 'is_correct' => true],
                            ['choice_text' => "Rendre automatiquement le matériau biologique", 'is_correct' => false],
                            ['choice_text' => "Supprimer toutes les chaînes polymères", 'is_correct' => false],
                            ['choice_text' => "Transformer un plastique en acide pur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi utilise-t-on des antioxydants dans certains polymères ?",
                        'explanation' => "Les antioxydants limitent certaines réactions d’oxydation qui accélèrent le vieillissement du matériau.",
                        'choices' => [
                            ['choice_text' => "Pour ralentir l’oxydation du matériau", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter la quantité d’oxygène dans la chaîne", 'is_correct' => false],
                            ['choice_text' => "Pour créer des radicaux libres volontairement", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer la couleur du plastique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un fabricant veut produire un plastique plus flexible sans changer complètement le polymère de base. Quelle stratégie est plausible ?",
                        'explanation' => "Ajouter un plastifiant est une méthode classique pour augmenter la souplesse d’un polymère sans remplacer nécessairement sa structure de base.",
                        'choices' => [
                            ['choice_text' => "Ajouter un plastifiant adapté", 'is_correct' => true],
                            ['choice_text' => "Ajouter uniquement du verre cassé", 'is_correct' => false],
                            ['choice_text' => "Retirer tous les additifs stabilisants", 'is_correct' => false],
                            ['choice_text' => "Augmenter obligatoirement le nombre d’atomes métalliques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un additif change-t-il nécessairement la nature chimique de toutes les chaînes polymères ?",
                        'explanation' => "Non. Beaucoup d’additifs sont mélangés ou dispersés dans le polymère et modifient les propriétés sans devenir une partie de chaque chaîne.",
                        'choices' => [
                            ['choice_text' => "Non, certains modifient les propriétés sans devenir une unité répétitive", 'is_correct' => true],
                            ['choice_text' => "Oui, chaque additif devient toujours un monomère", 'is_correct' => false],
                            ['choice_text' => "Oui, tous les additifs cassent les chaînes", 'is_correct' => false],
                            ['choice_text' => "Non, car les additifs n’ont jamais aucun effet", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les formulations industrielles utilisent-elles plusieurs additifs à la fois ?",
                        'explanation' => "Un matériau doit souvent satisfaire plusieurs exigences : couleur, souplesse, stabilité thermique, résistance à l’oxydation, coût ou transformation.",
                        'choices' => [
                            ['choice_text' => "Pour combiner plusieurs propriétés recherchées", 'is_correct' => true],
                            ['choice_text' => "Parce qu’un seul polymère ne contient jamais de carbone", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher toute mise en forme", 'is_correct' => false],
                            ['choice_text' => "Pour rendre tous les plastiques identiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel additif peut être choisi pour améliorer la résistance à la lumière UV ?",
                        'explanation' => "Des stabilisants UV ou absorbeurs UV peuvent limiter les dommages provoqués par le rayonnement ultraviolet.",
                        'choices' => [
                            ['choice_text' => "Un stabilisant ou absorbeur UV", 'is_correct' => true],
                            ['choice_text' => "Uniquement un sel de cuisine", 'is_correct' => false],
                            ['choice_text' => "Un monomère supplémentaire sans polymérisation", 'is_correct' => false],
                            ['choice_text' => "De l’eau pure seulement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle erreur faut-il éviter lorsqu’on compare deux plastiques contenant le même polymère de base ?",
                        'explanation' => "Deux formulations du même polymère peuvent avoir des propriétés différentes à cause des additifs, de la cristallinité, de la masse molaire ou du procédé de fabrication.",
                        'choices' => [
                            ['choice_text' => "Croire qu’ils auront forcément exactement les mêmes propriétés", 'is_correct' => true],
                            ['choice_text' => "Vérifier leur formulation", 'is_correct' => false],
                            ['choice_text' => "Prendre en compte leur procédé de fabrication", 'is_correct' => false],
                            ['choice_text' => "Comparer leurs performances réelles", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Dégradation et vieillissement des polymères",
                'description' => "Identifier les principales causes de dégradation des polymères : chaleur, oxygène, lumière, humidité et contraintes mécaniques.",
                'questions' => [
                    [
                        'question' => "Que signifie le vieillissement d’un polymère ?",
                        'explanation' => "Le vieillissement correspond à l’évolution progressive de ses propriétés sous l’effet de l’environnement ou du temps d’utilisation.",
                        'choices' => [
                            ['choice_text' => "Une modification progressive de ses propriétés", 'is_correct' => true],
                            ['choice_text' => "La formation obligatoire d’un métal", 'is_correct' => false],
                            ['choice_text' => "La disparition totale du matériau en une seconde", 'is_correct' => false],
                            ['choice_text' => "Une baisse automatique de la masse à zéro", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’exposition aux rayons UV peut-elle endommager certains polymères ?",
                        'explanation' => "Les UV peuvent initier des réactions photochimiques qui provoquent des coupures de chaînes ou d’autres modifications du matériau.",
                        'choices' => [
                            ['choice_text' => "Ils peuvent déclencher des réactions de dégradation photochimique", 'is_correct' => true],
                            ['choice_text' => "Ils transforment toujours le plastique en eau pure", 'is_correct' => false],
                            ['choice_text' => "Ils retirent automatiquement tout le carbone", 'is_correct' => false],
                            ['choice_text' => "Ils n’interagissent jamais avec les polymères", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel rôle joue l’oxygène dans certaines dégradations de polymères ?",
                        'explanation' => "L’oxygène peut participer à des réactions d’oxydation, surtout sous l’effet de la chaleur, de la lumière ou de radicaux.",
                        'choices' => [
                            ['choice_text' => "Il peut participer à l’oxydation du matériau", 'is_correct' => true],
                            ['choice_text' => "Il empêche toujours toute réaction", 'is_correct' => false],
                            ['choice_text' => "Il transforme tous les polymères en métaux", 'is_correct' => false],
                            ['choice_text' => "Il ne joue jamais aucun rôle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un plastique devient cassant après une longue exposition au soleil. Quelle cause est plausible ?",
                        'explanation' => "Le rayonnement UV peut provoquer des réactions qui coupent ou modifient les chaînes, ce qui peut entraîner une perte de souplesse.",
                        'choices' => [
                            ['choice_text' => "Une dégradation photochimique liée aux UV", 'is_correct' => true],
                            ['choice_text' => "Une augmentation automatique de la masse molaire", 'is_correct' => false],
                            ['choice_text' => "La formation de cristaux de cuivre", 'is_correct' => false],
                            ['choice_text' => "La suppression de tous les additifs par magie", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la température élevée peut-elle accélérer le vieillissement d’un polymère ?",
                        'explanation' => "Une température plus élevée peut accélérer plusieurs réactions chimiques de dégradation, notamment l’oxydation ou la coupure de chaînes.",
                        'choices' => [
                            ['choice_text' => "Parce qu’elle accélère certaines réactions de dégradation", 'is_correct' => true],
                            ['choice_text' => "Parce qu’elle bloque toutes les réactions", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle retire toujours l’oxygène de l’air", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle rend tous les polymères éternels", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel signe peut révéler une dégradation d’un plastique ?",
                        'explanation' => "Un changement de couleur, une perte de masse, une fissuration ou une diminution de résistance peuvent signaler une dégradation.",
                        'choices' => [
                            ['choice_text' => "Fissuration ou perte de résistance", 'is_correct' => true],
                            ['choice_text' => "Une augmentation obligatoire de transparence", 'is_correct' => false],
                            ['choice_text' => "La formation systématique de métal", 'is_correct' => false],
                            ['choice_text' => "La disparition de toutes les interactions", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l’intérêt d’un stabilisant UV dans une formulation ?",
                        'explanation' => "Il aide à limiter les effets destructeurs des rayonnements ultraviolets et à prolonger la durée de vie du matériau.",
                        'choices' => [
                            ['choice_text' => "Réduire les dommages provoqués par les UV", 'is_correct' => true],
                            ['choice_text' => "Augmenter systématiquement la vitesse de dégradation", 'is_correct' => false],
                            ['choice_text' => "Supprimer toutes les molécules d’oxygène", 'is_correct' => false],
                            ['choice_text' => "Transformer le polymère en céramique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une pièce polymère doit rester dehors pendant plusieurs années. Quel point faut-il considérer lors de sa conception ?",
                        'explanation' => "Il faut anticiper l’exposition aux UV, à l’oxygène, à l’humidité, aux variations de température et aux contraintes mécaniques.",
                        'choices' => [
                            ['choice_text' => "Le vieillissement lié aux conditions extérieures", 'is_correct' => true],
                            ['choice_text' => "Uniquement sa couleur initiale", 'is_correct' => false],
                            ['choice_text' => "Seulement sa masse au moment de l’achat", 'is_correct' => false],
                            ['choice_text' => "Uniquement le nom commercial", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle stratégie peut prolonger la durée de vie d’un polymère exposé au soleil ?",
                        'explanation' => "Choisir un polymère adapté et utiliser des stabilisants UV, des pigments ou une protection de surface peut réduire les effets du rayonnement.",
                        'choices' => [
                            ['choice_text' => "Utiliser une formulation et une protection adaptées aux UV", 'is_correct' => true],
                            ['choice_text' => "Retirer tous les stabilisants", 'is_correct' => false],
                            ['choice_text' => "Augmenter volontairement l’exposition solaire", 'is_correct' => false],
                            ['choice_text' => "Ajouter uniquement de l’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La biodégradation signifie-t-elle qu’un polymère disparaît toujours rapidement dans la nature ?",
                        'explanation' => "Non. La biodégradation dépend du matériau, des microorganismes et des conditions. Certains polymères se dégradent lentement ou dans des conditions particulières.",
                        'choices' => [
                            ['choice_text' => "Non, elle dépend fortement du matériau et des conditions", 'is_correct' => true],
                            ['choice_text' => "Oui, tous les polymères se dégradent en quelques jours", 'is_correct' => false],
                            ['choice_text' => "Oui, si la température est basse", 'is_correct' => false],
                            ['choice_text' => "Non, parce qu’aucun polymère ne peut être biodégradé", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Recyclage et durabilité des polymères",
                'description' => "Comprendre les différences entre recyclage mécanique, recyclage chimique, réemploi et choix de matériaux plus durables.",
                'questions' => [
                    [
                        'question' => "Que cherche à faire le recyclage mécanique d’un plastique ?",
                        'explanation' => "Le recyclage mécanique consiste notamment à trier, broyer, fondre et remettre en forme certains plastiques sans transformer complètement leurs molécules.",
                        'choices' => [
                            ['choice_text' => "Transformer et remettre en forme le matériau sans casser systématiquement les chaînes en petites molécules", 'is_correct' => true],
                            ['choice_text' => "Brûler tous les déchets pour créer un nouveau polymère", 'is_correct' => false],
                            ['choice_text' => "Dissoudre tous les plastiques dans l’eau potable", 'is_correct' => false],
                            ['choice_text' => "Transformer le polymère en métal pur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le principe général du recyclage chimique ?",
                        'explanation' => "Le recyclage chimique cherche à modifier ou décomposer le polymère pour récupérer des molécules ou matières premières pouvant servir à de nouvelles synthèses.",
                        'choices' => [
                            ['choice_text' => "Transformer chimiquement le polymère pour récupérer des matières premières", 'is_correct' => true],
                            ['choice_text' => "Broyer uniquement le matériau sans aucune transformation", 'is_correct' => false],
                            ['choice_text' => "Ajouter seulement un colorant", 'is_correct' => false],
                            ['choice_text' => "Faire évaporer le polymère à température ambiante", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi tous les plastiques ne sont-ils pas recyclés de la même manière ?",
                        'explanation' => "Ils ont des compositions, additifs, structures et propriétés différentes. Le tri et la méthode de recyclage doivent donc être adaptés.",
                        'choices' => [
                            ['choice_text' => "Parce que leurs compositions et leurs structures diffèrent", 'is_correct' => true],
                            ['choice_text' => "Parce que tous les plastiques sont chimiquement identiques", 'is_correct' => false],
                            ['choice_text' => "Parce que le recyclage ne dépend jamais du matériau", 'is_correct' => false],
                            ['choice_text' => "Parce que seuls les métaux peuvent être triés", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel geste réduit directement la quantité de déchets polymères ?",
                        'explanation' => "Réutiliser un objet évite la production immédiate d’un nouveau déchet et peut réduire la consommation de matière.",
                        'choices' => [
                            ['choice_text' => "Réutiliser un objet quand cela est possible", 'is_correct' => true],
                            ['choice_text' => "Jeter un emballage encore utilisable après une seule utilisation", 'is_correct' => false],
                            ['choice_text' => "Mélanger tous les plastiques sans tri", 'is_correct' => false],
                            ['choice_text' => "Augmenter volontairement les emballages inutiles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le tri des plastiques est-il important avant le recyclage ?",
                        'explanation' => "Des polymères différents ne se transforment pas toujours ensemble et peuvent avoir des températures de traitement ou des propriétés incompatibles.",
                        'choices' => [
                            ['choice_text' => "Pour séparer des matériaux aux propriétés et traitements différents", 'is_correct' => true],
                            ['choice_text' => "Parce que le tri change la masse atomique du carbone", 'is_correct' => false],
                            ['choice_text' => "Pour rendre tous les polymères identiques chimiquement", 'is_correct' => false],
                            ['choice_text' => "Parce que les polymères ne peuvent jamais être broyés", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel avantage le recyclage peut-il apporter à l’utilisation des matières premières ?",
                        'explanation' => "Le recyclage permet de réintroduire une partie de la matière déjà produite dans le cycle de fabrication et peut réduire le besoin en matière première vierge.",
                        'choices' => [
                            ['choice_text' => "Réduire potentiellement l’usage de matière première vierge", 'is_correct' => true],
                            ['choice_text' => "Augmenter obligatoirement l’extraction minière", 'is_correct' => false],
                            ['choice_text' => "Supprimer toute énergie de fabrication", 'is_correct' => false],
                            ['choice_text' => "Rendre les déchets infiniment réutilisables sans perte", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la conception d’un produit compte-t-elle pour son recyclage futur ?",
                        'explanation' => "Le choix d’un seul polymère, la réduction des mélanges incompatibles et la facilité de démontage peuvent simplifier le tri et le recyclage.",
                        'choices' => [
                            ['choice_text' => "La conception peut faciliter le tri, le démontage et le recyclage", 'is_correct' => true],
                            ['choice_text' => "Parce que la forme extérieure détermine seule la composition chimique", 'is_correct' => false],
                            ['choice_text' => "Parce qu’un produit bien dessiné n’a plus besoin d’être trié", 'is_correct' => false],
                            ['choice_text' => "Parce que le recyclage dépend uniquement de la couleur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un emballage contient plusieurs matériaux collés ensemble et difficiles à séparer. Quel problème cela peut-il poser ?",
                        'explanation' => "Les matériaux mélangés ou difficiles à séparer peuvent compliquer le tri et réduire la qualité ou la facilité du recyclage.",
                        'choices' => [
                            ['choice_text' => "Le tri et le recyclage deviennent plus compliqués", 'is_correct' => true],
                            ['choice_text' => "Le produit devient automatiquement biodégradable", 'is_correct' => false],
                            ['choice_text' => "Le polymère devient nécessairement plus pur", 'is_correct' => false],
                            ['choice_text' => "Les chaînes deviennent toujours plus longues", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle démarche est la plus cohérente avec une utilisation plus durable d’un objet en polymère ?",
                        'explanation' => "La prévention des déchets, le réemploi, puis le recyclage lorsque c’est possible contribuent à mieux utiliser la matière déjà produite.",
                        'choices' => [
                            ['choice_text' => "Réduire, réutiliser puis recycler lorsque cela est pertinent", 'is_correct' => true],
                            ['choice_text' => "Jeter systématiquement après un seul usage", 'is_correct' => false],
                            ['choice_text' => "Mélanger les déchets pour gagner du temps", 'is_correct' => false],
                            ['choice_text' => "Choisir toujours l’emballage le plus complexe", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le mot « biodégradable » signifie-t-il qu’un matériau peut être abandonné n’importe où sans conséquence ?",
                        'explanation' => "Non. La biodégradation dépend des conditions et peut prendre du temps. Un matériau biodégradable doit quand même être géré correctement.",
                        'choices' => [
                            ['choice_text' => "Non, la gestion du déchet reste importante", 'is_correct' => true],
                            ['choice_text' => "Oui, s’il est biodégradable il disparaît immédiatement", 'is_correct' => false],
                            ['choice_text' => "Oui, tous les sols le décomposent à la même vitesse", 'is_correct' => false],
                            ['choice_text' => "Non, parce qu’aucun matériau ne peut jamais se dégrader", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Polymères dans les procédés industriels",
                'description' => "Découvrir les étapes de transformation industrielle : mélange, extrusion, injection, soufflage, filage et contrôle de qualité.",
                'questions' => [
                    [
                        'question' => "À quoi sert principalement l’extrusion des polymères ?",
                        'explanation' => "L’extrusion fait passer un polymère ramolli à travers une filière afin d’obtenir une forme continue, comme un tube ou un profilé.",
                        'choices' => [
                            ['choice_text' => "Produire une forme continue à travers une filière", 'is_correct' => true],
                            ['choice_text' => "Transformer le plastique en métal", 'is_correct' => false],
                            ['choice_text' => "Mesurer uniquement le pH", 'is_correct' => false],
                            ['choice_text' => "Brûler la matière sans contrôle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel procédé est particulièrement adapté à la fabrication en série de pièces plastiques dans un moule ?",
                        'explanation' => "Le moulage par injection permet d’injecter un polymère fondu dans un moule pour obtenir rapidement de nombreuses pièces.",
                        'choices' => [
                            ['choice_text' => "Moulage par injection", 'is_correct' => true],
                            ['choice_text' => "Distillation simple", 'is_correct' => false],
                            ['choice_text' => "Titrage acido-basique", 'is_correct' => false],
                            ['choice_text' => "Sublimation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le soufflage est couramment utilisé pour fabriquer…",
                        'explanation' => "Le moulage par soufflage permet notamment de produire des objets creux comme certaines bouteilles en plastique.",
                        'choices' => [
                            ['choice_text' => "Des récipients creux", 'is_correct' => true],
                            ['choice_text' => "Des lingots métalliques", 'is_correct' => false],
                            ['choice_text' => "Des cristaux ioniques purs", 'is_correct' => false],
                            ['choice_text' => "Des gaz nobles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi chauffe-t-on un thermoplastique avant certaines opérations de mise en forme ?",
                        'explanation' => "Le chauffage augmente la mobilité des chaînes et ramollit le matériau, ce qui permet de l’écouler ou de le déformer plus facilement.",
                        'choices' => [
                            ['choice_text' => "Pour le ramollir et faciliter sa mise en forme", 'is_correct' => true],
                            ['choice_text' => "Pour supprimer toutes ses liaisons covalentes", 'is_correct' => false],
                            ['choice_text' => "Pour le rendre automatiquement métallique", 'is_correct' => false],
                            ['choice_text' => "Pour faire disparaître toute sa masse", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel risque existe si un thermoplastique est chauffé beaucoup trop fortement pendant sa transformation ?",
                        'explanation' => "Un chauffage excessif peut provoquer une dégradation thermique, une décoloration, une perte de masse ou des émissions de produits de décomposition.",
                        'choices' => [
                            ['choice_text' => "Une dégradation thermique", 'is_correct' => true],
                            ['choice_text' => "Une polymérisation infiniment parfaite", 'is_correct' => false],
                            ['choice_text' => "La formation obligatoire de cristal de quartz", 'is_correct' => false],
                            ['choice_text' => "La transformation en eau pure", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi contrôle-t-on la température du cylindre d’une machine d’injection ?",
                        'explanation' => "La température doit être suffisante pour transformer correctement le polymère sans dépasser les conditions qui favorisent sa dégradation.",
                        'choices' => [
                            ['choice_text' => "Pour assurer une bonne mise en œuvre tout en limitant la dégradation", 'is_correct' => true],
                            ['choice_text' => "Pour modifier la couleur du moule uniquement", 'is_correct' => false],
                            ['choice_text' => "Pour rendre le polymère gazeux à chaque cycle", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher toute fusion", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le séchage de certaines résines avant transformation peut-il être nécessaire ?",
                        'explanation' => "Certaines résines absorbent l’humidité. Celle-ci peut provoquer des défauts, de l’hydrolyse ou des bulles pendant le traitement.",
                        'choices' => [
                            ['choice_text' => "Pour réduire l’humidité susceptible de provoquer des défauts", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter volontairement la quantité d’eau dans le polymère", 'is_correct' => false],
                            ['choice_text' => "Pour transformer la résine en métal", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les atomes de carbone", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lors d’un contrôle qualité, pourquoi mesurer la masse ou les dimensions d’une pièce plastique ?",
                        'explanation' => "Ces mesures permettent de vérifier que la pièce respecte les spécifications et que le procédé reste stable d’un lot à l’autre.",
                        'choices' => [
                            ['choice_text' => "Pour vérifier la conformité de la production", 'is_correct' => true],
                            ['choice_text' => "Pour changer la structure des monomères après fabrication", 'is_correct' => false],
                            ['choice_text' => "Pour rendre la pièce biodégradable automatiquement", 'is_correct' => false],
                            ['choice_text' => "Pour mesurer uniquement la couleur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi utilise-t-on une filière en extrusion ?",
                        'explanation' => "La filière donne sa section au polymère qui sort de la machine. Sa géométrie détermine la forme du profilé ou du tube obtenu.",
                        'choices' => [
                            ['choice_text' => "Pour donner une forme de section au polymère extrudé", 'is_correct' => true],
                            ['choice_text' => "Pour changer les monomères en atomes", 'is_correct' => false],
                            ['choice_text' => "Pour mesurer le pH", 'is_correct' => false],
                            ['choice_text' => "Pour convertir le plastique en gaz noble", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une ligne de production donne soudainement des pièces trop fragiles. Quel réflexe est pertinent ?",
                        'explanation' => "Il faut vérifier les paramètres du procédé et la matière : température, temps de séjour, humidité, mélange, additifs ou dégradation peuvent être en cause.",
                        'choices' => [
                            ['choice_text' => "Examiner les paramètres du procédé et la matière première", 'is_correct' => true],
                            ['choice_text' => "Changer seulement l’étiquette du produit", 'is_correct' => false],
                            ['choice_text' => "Ignorer le problème si la couleur est correcte", 'is_correct' => false],
                            ['choice_text' => "Ajouter de l’eau sans contrôle", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Révision intégrée de la chimie des polymères",
                'description' => "Réviser les idées clés sur les monomères, la polymérisation, la structure, les propriétés, les usages, la dégradation et le recyclage.",
                'questions' => [
                    [
                        'question' => "Laquelle de ces phrases résume correctement le lien entre monomère et polymère ?",
                        'explanation' => "Le polymère est une macromolécule construite à partir d’un grand nombre d’unités dérivées de monomères.",
                        'choices' => [
                            ['choice_text' => "Des monomères peuvent s’assembler pour former une macromolécule polymère", 'is_correct' => true],
                            ['choice_text' => "Un polymère est toujours plus petit que son monomère", 'is_correct' => false],
                            ['choice_text' => "Un monomère est forcément un polymère complet", 'is_correct' => false],
                            ['choice_text' => "Les polymères ne contiennent aucune unité répétitive", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel couple est correctement associé ?",
                        'explanation' => "Éthène → polyéthylène, propène → polypropylène, styrène → polystyrène sont des associations classiques de polymérisation par addition.",
                        'choices' => [
                            ['choice_text' => "Propène → polypropylène", 'is_correct' => true],
                            ['choice_text' => "Éthène → nylon", 'is_correct' => false],
                            ['choice_text' => "Styrène → cellulose", 'is_correct' => false],
                            ['choice_text' => "Éthène → PET", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé distingue le mieux addition et condensation ?",
                        'explanation' => "L’addition utilise souvent des doubles liaisons sans élimination de petite molécule, tandis que la condensation peut s’accompagner de l’élimination d’une petite molécule.",
                        'choices' => [
                            ['choice_text' => "La condensation peut éliminer une petite molécule alors que l’addition n’en élimine pas nécessairement", 'is_correct' => true],
                            ['choice_text' => "L’addition ne forme jamais de liaisons covalentes", 'is_correct' => false],
                            ['choice_text' => "La condensation produit toujours un métal", 'is_correct' => false],
                            ['choice_text' => "Les deux procédés sont toujours identiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi deux polymères issus de monomères proches peuvent-ils avoir des propriétés très différentes ?",
                        'explanation' => "La longueur des chaînes, la ramification, la cristallinité, la réticulation et les additifs peuvent fortement modifier le comportement du matériau.",
                        'choices' => [
                            ['choice_text' => "Parce que leur structure et leur formulation peuvent différer", 'is_correct' => true],
                            ['choice_text' => "Parce que le polymère n’a aucune relation avec sa structure", 'is_correct' => false],
                            ['choice_text' => "Parce que tous les polymères ont la même structure", 'is_correct' => false],
                            ['choice_text' => "Parce que seule la couleur contrôle les propriétés", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel matériau est le plus facile à refondre pour une nouvelle mise en forme ?",
                        'explanation' => "Les thermoplastiques peuvent généralement être ramollis puis refondus, contrairement aux thermodurcissables fortement réticulés.",
                        'choices' => [
                            ['choice_text' => "Un thermoplastique", 'is_correct' => true],
                            ['choice_text' => "Un thermodurcissable fortement réticulé", 'is_correct' => false],
                            ['choice_text' => "Une céramique", 'is_correct' => false],
                            ['choice_text' => "Un verre minéral", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un polymère devient cassant après exposition prolongée aux UV et à l’air. Quelle explication est plausible ?",
                        'explanation' => "Les UV peuvent initier des réactions photochimiques et l’oxygène favoriser l’oxydation. Ces phénomènes peuvent modifier ou couper les chaînes.",
                        'choices' => [
                            ['choice_text' => "Des réactions de photo-oxydation ont pu dégrader les chaînes", 'is_correct' => true],
                            ['choice_text' => "Le polymère s’est transformé en métal", 'is_correct' => false],
                            ['choice_text' => "Les UV ont supprimé toute liaison covalente en une fois", 'is_correct' => false],
                            ['choice_text' => "L’air empêche toujours toute dégradation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les additifs sont-ils importants dans les matériaux polymères industriels ?",
                        'explanation' => "Ils permettent d’adapter la couleur, la souplesse, la stabilité, la résistance aux UV, le coût ou d’autres propriétés aux besoins de l’application.",
                        'choices' => [
                            ['choice_text' => "Ils permettent d’ajuster les propriétés du matériau", 'is_correct' => true],
                            ['choice_text' => "Ils remplacent toujours le polymère de base", 'is_correct' => false],
                            ['choice_text' => "Ils suppriment nécessairement toutes les chaînes", 'is_correct' => false],
                            ['choice_text' => "Ils rendent tous les matériaux identiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le tri est-il essentiel dans une filière de recyclage des plastiques ?",
                        'explanation' => "Des polymères différents peuvent nécessiter des traitements différents. Un bon tri améliore la qualité et la faisabilité du recyclage.",
                        'choices' => [
                            ['choice_text' => "Pour séparer des matériaux qui ne se recyclent pas de la même manière", 'is_correct' => true],
                            ['choice_text' => "Pour modifier la masse atomique du matériau", 'is_correct' => false],
                            ['choice_text' => "Pour rendre chaque plastique identique chimiquement", 'is_correct' => false],
                            ['choice_text' => "Parce que tous les plastiques sont solubles dans l’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un ingénieur doit choisir un polymère pour un tuyau flexible exposé à l’extérieur. Quelles informations sont les plus utiles ?",
                        'explanation' => "Il faut connaître la flexibilité, la résistance chimique, le comportement thermique, la résistance aux UV et le vieillissement prévu dans les conditions d’usage.",
                        'choices' => [
                            ['choice_text' => "Ses propriétés mécaniques, thermiques, chimiques et sa résistance au vieillissement", 'is_correct' => true],
                            ['choice_text' => "Uniquement sa couleur", 'is_correct' => false],
                            ['choice_text' => "Uniquement sa masse molaire du monomère", 'is_correct' => false],
                            ['choice_text' => "Uniquement le nom commercial", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel principe général aide à comprendre pourquoi la chimie des polymères est utile en industrie ?",
                        'explanation' => "En contrôlant la structure des chaînes, leur organisation et la formulation, on peut concevoir des matériaux répondant à des besoins très différents.",
                        'choices' => [
                            ['choice_text' => "Relier structure moléculaire, procédé et propriétés permet de concevoir le matériau voulu", 'is_correct' => true],
                            ['choice_text' => "Tous les polymères ont les mêmes propriétés", 'is_correct' => false],
                            ['choice_text' => "Le procédé n’a aucun effet sur les performances", 'is_correct' => false],
                            ['choice_text' => "Seule la couleur détermine l’usage", 'is_correct' => false],
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
