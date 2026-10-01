<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class OrganicChemistryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'organic-chemistry')->firstOrFail();

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
        ];

        $quizzes = [
            [
                'title' => "Les bases de la chimie organique",
                'description' => "Identifier les caractéristiques du carbone et les notions essentielles de la chimie organique.",
                'questions' => [
                    [
                        'question' => "Quel élément constitue l'ossature principale de la plupart des molécules organiques ?",
                        'explanation' => "Le carbone peut former quatre liaisons covalentes et construire des chaînes et des cycles très variés.",
                        'choices' => [
                            ['choice_text' => "Le carbone", 'is_correct' => true],
                            ['choice_text' => "Le sodium", 'is_correct' => false],
                            ['choice_text' => "Le fer", 'is_correct' => false],
                            ['choice_text' => "Le calcium", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Combien de liaisons covalentes peut généralement former un atome de carbone neutre dans une molécule simple ?",
                        'explanation' => "Le carbone est tétravalent : il possède quatre électrons de valence et peut établir quatre liaisons covalentes.",
                        'choices' => [
                            ['choice_text' => "1", 'is_correct' => false],
                            ['choice_text' => "2", 'is_correct' => false],
                            ['choice_text' => "3", 'is_correct' => false],
                            ['choice_text' => "4", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quelle formule correspond au méthane ?",
                        'explanation' => "Le méthane est l'alcane le plus simple : un carbone lié à quatre hydrogènes, soit CH₄.",
                        'choices' => [
                            ['choice_text' => "CH₄", 'is_correct' => true],
                            ['choice_text' => "C₂H₄", 'is_correct' => false],
                            ['choice_text' => "CO₂", 'is_correct' => false],
                            ['choice_text' => "CH₃OH", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lequel est un exemple de composé organique ?",
                        'explanation' => "L'éthanol contient une structure carbonée et un groupe hydroxyle. C'est un composé organique courant.",
                        'choices' => [
                            ['choice_text' => "NaCl", 'is_correct' => false],
                            ['choice_text' => "CaCO₃", 'is_correct' => false],
                            ['choice_text' => "C₂H₅OH", 'is_correct' => true],
                            ['choice_text' => "H₂SO₄", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle propriété explique en grande partie la grande diversité des composés du carbone ?",
                        'explanation' => "Le carbone peut se lier à lui-même de nombreuses façons et former des chaînes, des ramifications et des cycles.",
                        'choices' => [
                            ['choice_text' => "Il ne forme qu'une seule liaison", 'is_correct' => false],
                            ['choice_text' => "Il peut former des liaisons avec d'autres carbones", 'is_correct' => true],
                            ['choice_text' => "Il ne réagit qu'avec les métaux", 'is_correct' => false],
                            ['choice_text' => "Il est toujours chargé positivement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une formule développée, que montre principalement chaque trait entre deux atomes ?",
                        'explanation' => "Un trait représente une paire d'électrons partagée, donc une liaison covalente.",
                        'choices' => [
                            ['choice_text' => "Une liaison covalente", 'is_correct' => true],
                            ['choice_text' => "Un neutron", 'is_correct' => false],
                            ['choice_text' => "Une molécule entière", 'is_correct' => false],
                            ['choice_text' => "Une charge électrique isolée", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi dit-on que les isomères ont la même formule moléculaire ?",
                        'explanation' => "Les isomères possèdent les mêmes nombres d'atomes de chaque élément, mais l'organisation des atomes diffère.",
                        'choices' => [
                            ['choice_text' => "Parce qu'ils ont la même masse uniquement", 'is_correct' => false],
                            ['choice_text' => "Parce qu'ils ont toujours les mêmes propriétés", 'is_correct' => false],
                            ['choice_text' => "Parce qu'ils ont les mêmes atomes en mêmes quantités mais une organisation différente", 'is_correct' => true],
                            ['choice_text' => "Parce qu'ils sont forcément identiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel groupe fonctionnel caractérise un alcool ?",
                        'explanation' => "Un alcool possède le groupe hydroxyle –OH lié à un carbone de la chaîne carbonée.",
                        'choices' => [
                            ['choice_text' => "–COOH", 'is_correct' => false],
                            ['choice_text' => "–OH", 'is_correct' => true],
                            ['choice_text' => "–CHO", 'is_correct' => false],
                            ['choice_text' => "–NH₂", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle liaison est caractéristique d'un alcène ?",
                        'explanation' => "Un alcène contient au moins une double liaison carbone-carbone C=C.",
                        'choices' => [
                            ['choice_text' => "Une liaison C–C simple seulement", 'is_correct' => false],
                            ['choice_text' => "Une liaison C=C", 'is_correct' => true],
                            ['choice_text' => "Une liaison C≡C", 'is_correct' => false],
                            ['choice_text' => "Une liaison ionique C–Na", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle est la meilleure description d'un groupe fonctionnel ?",
                        'explanation' => "Un groupe fonctionnel est un ensemble d'atomes qui donne à une famille de molécules des propriétés et des réactions caractéristiques.",
                        'choices' => [
                            ['choice_text' => "Un groupe d'atomes responsable de propriétés chimiques particulières", 'is_correct' => true],
                            ['choice_text' => "Un nombre utilisé pour calculer la masse", 'is_correct' => false],
                            ['choice_text' => "Une charge présente dans tous les composés", 'is_correct' => false],
                            ['choice_text' => "Une liaison entre deux sels", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Alcanes et formules moléculaires",
                'description' => "Reconnaître les alcanes, leurs formules générales et leur nomenclature élémentaire.",
                'questions' => [
                    [
                        'question' => "Quelle est la formule générale des alcanes acycliques ?",
                        'explanation' => "Pour les alcanes à chaîne ouverte, la formule générale est CₙH₂ₙ₊₂.",
                        'choices' => [
                            ['choice_text' => "CₙH₂ₙ₊₂", 'is_correct' => true],
                            ['choice_text' => "CₙH₂ₙ", 'is_correct' => false],
                            ['choice_text' => "CₙH₂ₙ₋₂", 'is_correct' => false],
                            ['choice_text' => "CₙHₙ", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le nom du composé CH₃–CH₃ ?",
                        'explanation' => "La molécule possède deux carbones et uniquement des liaisons simples : c'est l'éthane.",
                        'choices' => [
                            ['choice_text' => "Méthane", 'is_correct' => false],
                            ['choice_text' => "Éthane", 'is_correct' => true],
                            ['choice_text' => "Propane", 'is_correct' => false],
                            ['choice_text' => "Éthène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le nom de CH₃–CH₂–CH₃ ?",
                        'explanation' => "Cette chaîne contient trois carbones saturés. Le nom correspondant est propane.",
                        'choices' => [
                            ['choice_text' => "Propane", 'is_correct' => true],
                            ['choice_text' => "Butane", 'is_correct' => false],
                            ['choice_text' => "Propène", 'is_correct' => false],
                            ['choice_text' => "Méthane", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Combien d'atomes d'hydrogène possède l'alcane C₅H₁₂ ?",
                        'explanation' => "La formule contient directement l'indice 12 après H. Le pentane possède donc 12 hydrogènes.",
                        'choices' => [
                            ['choice_text' => "5", 'is_correct' => false],
                            ['choice_text' => "10", 'is_correct' => false],
                            ['choice_text' => "12", 'is_correct' => true],
                            ['choice_text' => "14", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel composé appartient à la famille des alcanes ?",
                        'explanation' => "Les alcanes ne possèdent que des liaisons simples C–C. C₄H₁₀ est le butane, donc un alcane.",
                        'choices' => [
                            ['choice_text' => "C₄H₁₀", 'is_correct' => true],
                            ['choice_text' => "C₄H₈", 'is_correct' => false],
                            ['choice_text' => "C₄H₆", 'is_correct' => false],
                            ['choice_text' => "C₄H₈O", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le nom d'une chaîne contenant quatre carbones sans double ni triple liaison ?",
                        'explanation' => "Une chaîne saturée de quatre carbones correspond au butane.",
                        'choices' => [
                            ['choice_text' => "Butane", 'is_correct' => true],
                            ['choice_text' => "Butène", 'is_correct' => false],
                            ['choice_text' => "Butyne", 'is_correct' => false],
                            ['choice_text' => "Pentane", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle transformation se produit lors d'une combustion complète d'un alcane ?",
                        'explanation' => "En présence de suffisamment de dioxygène, un alcane brûle pour former principalement du CO₂ et de l'eau.",
                        'choices' => [
                            ['choice_text' => "Il forme du CO₂ et de l'eau", 'is_correct' => true],
                            ['choice_text' => "Il forme uniquement du carbone solide", 'is_correct' => false],
                            ['choice_text' => "Il forme uniquement de l'hydrogène", 'is_correct' => false],
                            ['choice_text' => "Il devient toujours un alcool", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les alcanes sont-ils dits saturés ?",
                        'explanation' => "Ils possèdent le maximum d'hydrogènes possible pour une chaîne ouverte donnée et uniquement des liaisons simples carbone-carbone.",
                        'choices' => [
                            ['choice_text' => "Parce qu'ils contiennent de l'oxygène", 'is_correct' => false],
                            ['choice_text' => "Parce qu'ils ne possèdent pas de double ou triple liaison C–C", 'is_correct' => true],
                            ['choice_text' => "Parce qu'ils sont tous liquides", 'is_correct' => false],
                            ['choice_text' => "Parce qu'ils sont toujours aromatiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel alcane contient six atomes de carbone ?",
                        'explanation' => "Le préfixe hex- indique six carbones. L'alcane correspondant est l'hexane, C₆H₁₄.",
                        'choices' => [
                            ['choice_text' => "Pentane", 'is_correct' => false],
                            ['choice_text' => "Hexane", 'is_correct' => true],
                            ['choice_text' => "Heptane", 'is_correct' => false],
                            ['choice_text' => "Butane", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle formule correspond à un alcane contenant 4 carbones ?",
                        'explanation' => "Avec CₙH₂ₙ₊₂ et n = 4, on obtient C₄H₁₀.",
                        'choices' => [
                            ['choice_text' => "C₄H₈", 'is_correct' => false],
                            ['choice_text' => "C₄H₁₀", 'is_correct' => true],
                            ['choice_text' => "C₄H₆", 'is_correct' => false],
                            ['choice_text' => "C₄H₁₂", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Alcènes et alcynes",
                'description' => "Distinguer les hydrocarbures insaturés et reconnaître les doubles et triples liaisons.",
                'questions' => [
                    [
                        'question' => "Quel groupe de composés contient une double liaison C=C ?",
                        'explanation' => "Les alcènes sont définis par la présence d'au moins une double liaison carbone-carbone.",
                        'choices' => [
                            ['choice_text' => "Les alcanes", 'is_correct' => false],
                            ['choice_text' => "Les alcènes", 'is_correct' => true],
                            ['choice_text' => "Les alcools", 'is_correct' => false],
                            ['choice_text' => "Les amines", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle formule correspond à l'éthène ?",
                        'explanation' => "L'éthène contient deux carbones reliés par une double liaison : C₂H₄.",
                        'choices' => [
                            ['choice_text' => "C₂H₆", 'is_correct' => false],
                            ['choice_text' => "C₂H₄", 'is_correct' => true],
                            ['choice_text' => "C₂H₂", 'is_correct' => false],
                            ['choice_text' => "CH₄", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel type de liaison caractérise un alcyne ?",
                        'explanation' => "Un alcyne contient au moins une triple liaison carbone-carbone C≡C.",
                        'choices' => [
                            ['choice_text' => "C–C", 'is_correct' => false],
                            ['choice_text' => "C=C", 'is_correct' => false],
                            ['choice_text' => "C≡C", 'is_correct' => true],
                            ['choice_text' => "C–O", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le nom de CH₂=CH₂ ?",
                        'explanation' => "Il s'agit d'un alcène à deux carbones : l'éthène.",
                        'choices' => [
                            ['choice_text' => "Éthane", 'is_correct' => false],
                            ['choice_text' => "Éthène", 'is_correct' => true],
                            ['choice_text' => "Éthyne", 'is_correct' => false],
                            ['choice_text' => "Méthane", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment appelle-t-on CH≡CH ?",
                        'explanation' => "Une triple liaison entre deux carbones donne l'éthyne, aussi appelé acétylène.",
                        'choices' => [
                            ['choice_text' => "Éthyne", 'is_correct' => true],
                            ['choice_text' => "Éthane", 'is_correct' => false],
                            ['choice_text' => "Éthène", 'is_correct' => false],
                            ['choice_text' => "Propène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un hydrocarbure possède une double liaison. Comment le classer au niveau débutant ?",
                        'explanation' => "La présence d'une double liaison C=C permet de le classer parmi les alcènes si la structure est une chaîne acyclique simple.",
                        'choices' => [
                            ['choice_text' => "Comme un alcène", 'is_correct' => true],
                            ['choice_text' => "Comme un alcane", 'is_correct' => false],
                            ['choice_text' => "Comme un alcool", 'is_correct' => false],
                            ['choice_text' => "Comme un acide carboxylique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle réaction simple est typique d'une double liaison d'alcène ?",
                        'explanation' => "La double liaison peut participer à des réactions d'addition, où de nouveaux atomes ou groupes se fixent sur les carbones de la liaison multiple.",
                        'choices' => [
                            ['choice_text' => "Une réaction d'addition", 'is_correct' => true],
                            ['choice_text' => "Une neutralisation acide-base obligatoire", 'is_correct' => false],
                            ['choice_text' => "Une précipitation métallique", 'is_correct' => false],
                            ['choice_text' => "Une fusion nucléaire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi dit-on que les alcènes sont insaturés ?",
                        'explanation' => "La double liaison signifie qu'ils ne contiennent pas le nombre maximal d'hydrogènes possible pour une chaîne ouverte saturée de même nombre de carbones.",
                        'choices' => [
                            ['choice_text' => "Ils contiennent une liaison multiple carbone-carbone", 'is_correct' => true],
                            ['choice_text' => "Ils contiennent toujours de l'oxygène", 'is_correct' => false],
                            ['choice_text' => "Ils sont tous solubles dans l'eau", 'is_correct' => false],
                            ['choice_text' => "Ils ne contiennent aucun hydrogène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle différence distingue principalement un alcène d'un alcane de même nombre de carbones ?",
                        'explanation' => "L'alcène possède une double liaison C=C, alors que l'alcane ne possède que des liaisons simples entre carbones.",
                        'choices' => [
                            ['choice_text' => "La présence d'une double liaison dans l'alcène", 'is_correct' => true],
                            ['choice_text' => "La présence obligatoire de sodium dans l'alcane", 'is_correct' => false],
                            ['choice_text' => "La présence d'un groupe –OH dans tous les alcènes", 'is_correct' => false],
                            ['choice_text' => "La présence de fer dans l'alcane", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel composé est le plus correctement identifié comme un alcyne ?",
                        'explanation' => "C₃H₄ peut correspondre au propène cyclique ou à un alcyne selon la structure, mais ici la proposition CH≡CH–CH₃ représente le propynе, avec une triple liaison.",
                        'choices' => [
                            ['choice_text' => "CH₃–CH₂–CH₃", 'is_correct' => false],
                            ['choice_text' => "CH₂=CH–CH₃", 'is_correct' => false],
                            ['choice_text' => "CH≡C–CH₃", 'is_correct' => true],
                            ['choice_text' => "CH₃–CH₂OH", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Alcools, éthers et groupes oxygénés",
                'description' => "Reconnaître les principaux groupes fonctionnels contenant de l'oxygène et leurs propriétés de base.",
                'questions' => [
                    [
                        'question' => "Quel groupe fonctionnel caractérise les alcools ?",
                        'explanation' => "Le groupe hydroxyle –OH est la fonction caractéristique des alcools lorsqu'il est lié à un carbone saturé.",
                        'choices' => [
                            ['choice_text' => "–OH", 'is_correct' => true],
                            ['choice_text' => "–COOH uniquement", 'is_correct' => false],
                            ['choice_text' => "–NH₂", 'is_correct' => false],
                            ['choice_text' => "–NO₂", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le nom du composé CH₃OH ?",
                        'explanation' => "CH₃OH contient un seul carbone et un groupe –OH. C'est le méthanol.",
                        'choices' => [
                            ['choice_text' => "Méthanol", 'is_correct' => true],
                            ['choice_text' => "Éthanol", 'is_correct' => false],
                            ['choice_text' => "Méthanal", 'is_correct' => false],
                            ['choice_text' => "Méthane", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le nom du composé CH₃CH₂OH ?",
                        'explanation' => "Deux carbones plus un groupe hydroxyle donnent l'éthanol.",
                        'choices' => [
                            ['choice_text' => "Éthane", 'is_correct' => false],
                            ['choice_text' => "Éthanol", 'is_correct' => true],
                            ['choice_text' => "Éthanal", 'is_correct' => false],
                            ['choice_text' => "Méthanol", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel type de composé possède généralement la liaison R–O–R' ?",
                        'explanation' => "La structure R–O–R' correspond à un éther : l'oxygène est placé entre deux groupes carbonés.",
                        'choices' => [
                            ['choice_text' => "Un éther", 'is_correct' => true],
                            ['choice_text' => "Un alcane", 'is_correct' => false],
                            ['choice_text' => "Un acide carboxylique", 'is_correct' => false],
                            ['choice_text' => "Une amine", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lequel est plus polaire entre un alcane simple et un alcool de taille comparable ?",
                        'explanation' => "La présence de la liaison O–H rend les alcools nettement plus polaires que les hydrocarbures simples.",
                        'choices' => [
                            ['choice_text' => "L'alcool", 'is_correct' => true],
                            ['choice_text' => "L'alcane", 'is_correct' => false],
                            ['choice_text' => "Les deux sont toujours identiques", 'is_correct' => false],
                            ['choice_text' => "Aucun des deux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l'éthanol se mélange-t-il assez bien avec l'eau ?",
                        'explanation' => "Le groupe –OH de l'éthanol peut former des interactions, notamment des liaisons hydrogène, avec les molécules d'eau.",
                        'choices' => [
                            ['choice_text' => "Parce que sa chaîne carbonée est infiniment grande", 'is_correct' => false],
                            ['choice_text' => "Parce que son groupe –OH interagit avec l'eau", 'is_correct' => true],
                            ['choice_text' => "Parce qu'il ne contient aucune charge partielle", 'is_correct' => false],
                            ['choice_text' => "Parce que tous les hydrocarbures sont miscibles à l'eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel composé contient à la fois une chaîne carbonée et un groupe hydroxyle ?",
                        'explanation' => "La présence d'un groupe –OH lié à un carbone permet d'identifier un alcool, comme l'éthanol.",
                        'choices' => [
                            ['choice_text' => "CH₃CH₂OH", 'is_correct' => true],
                            ['choice_text' => "CH₄", 'is_correct' => false],
                            ['choice_text' => "CO₂", 'is_correct' => false],
                            ['choice_text' => "NaCl", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle formule représente un éther simple ?",
                        'explanation' => "Dans un éther, l'oxygène relie deux groupes carbonés. CH₃–O–CH₃ est un exemple classique.",
                        'choices' => [
                            ['choice_text' => "CH₃–O–CH₃", 'is_correct' => true],
                            ['choice_text' => "CH₃–CH₂–OH", 'is_correct' => false],
                            ['choice_text' => "CH₃–COOH", 'is_correct' => false],
                            ['choice_text' => "CH₃–NH₂", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que distingue principalement un alcool d'un alcane ?",
                        'explanation' => "L'alcool possède un groupe hydroxyle –OH, absent des alcanes simples.",
                        'choices' => [
                            ['choice_text' => "La présence d'un groupe –OH dans l'alcool", 'is_correct' => true],
                            ['choice_text' => "La présence obligatoire d'une double liaison", 'is_correct' => false],
                            ['choice_text' => "La présence obligatoire d'un métal", 'is_correct' => false],
                            ['choice_text' => "L'absence totale de carbone", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lorsqu'un alcool simple est oxydé, quelle famille peut apparaître selon le type d'alcool et les conditions ?",
                        'explanation' => "L'oxydation des alcools peut mener à des aldéhydes, des cétones puis parfois des acides carboxyliques selon la structure et les conditions.",
                        'choices' => [
                            ['choice_text' => "Un aldéhyde ou une cétone, entre autres possibilités", 'is_correct' => true],
                            ['choice_text' => "Uniquement un alcane", 'is_correct' => false],
                            ['choice_text' => "Uniquement un sel métallique", 'is_correct' => false],
                            ['choice_text' => "Toujours du sodium métallique", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Aldéhydes, cétones et acides carboxyliques",
                'description' => "Identifier les fonctions carbonyle et carboxyle et comprendre quelques transformations simples.",
                'questions' => [
                    [
                        'question' => "Quel groupe fonctionnel contient la liaison C=O ?",
                        'explanation' => "Le groupe carbonyle correspond à une double liaison entre le carbone et l'oxygène.",
                        'choices' => [
                            ['choice_text' => "Le groupe carbonyle", 'is_correct' => true],
                            ['choice_text' => "Le groupe hydroxyle uniquement", 'is_correct' => false],
                            ['choice_text' => "Le groupe amine", 'is_correct' => false],
                            ['choice_text' => "Le groupe méthyle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle différence simple distingue un aldéhyde d'une cétone ?",
                        'explanation' => "Dans un aldéhyde, le carbone du carbonyle est lié à au moins un hydrogène. Dans une cétone, il est lié à deux groupes carbonés.",
                        'choices' => [
                            ['choice_text' => "La position du groupe carbonyle dans la chaîne", 'is_correct' => true],
                            ['choice_text' => "La présence ou l'absence totale de carbone", 'is_correct' => false],
                            ['choice_text' => "La présence obligatoire de sodium", 'is_correct' => false],
                            ['choice_text' => "La présence d'un atome de soufre dans tous les cas", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel groupe fonctionnel caractérise un acide carboxylique ?",
                        'explanation' => "Le groupe carboxyle –COOH associe un carbonyle C=O et un hydroxyle –OH sur le même carbone.",
                        'choices' => [
                            ['choice_text' => "–COOH", 'is_correct' => true],
                            ['choice_text' => "–OH seulement", 'is_correct' => false],
                            ['choice_text' => "–NH₂", 'is_correct' => false],
                            ['choice_text' => "–O–", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le nom de CH₃CHO ?",
                        'explanation' => "CH₃CHO est un aldéhyde à deux carbones, appelé éthanal.",
                        'choices' => [
                            ['choice_text' => "Éthanol", 'is_correct' => false],
                            ['choice_text' => "Éthanal", 'is_correct' => true],
                            ['choice_text' => "Éthanone", 'is_correct' => false],
                            ['choice_text' => "Éthanoïque", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le nom courant de CH₃COOH ?",
                        'explanation' => "CH₃COOH est l'acide éthanoïque, connu couramment sous le nom d'acide acétique.",
                        'choices' => [
                            ['choice_text' => "Acide acétique", 'is_correct' => true],
                            ['choice_text' => "Éthanol", 'is_correct' => false],
                            ['choice_text' => "Méthanol", 'is_correct' => false],
                            ['choice_text' => "Acétone", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel composé est une cétone ?",
                        'explanation' => "La propanone possède un groupe carbonyle situé au milieu de la chaîne : CH₃–CO–CH₃.",
                        'choices' => [
                            ['choice_text' => "CH₃–CHO", 'is_correct' => false],
                            ['choice_text' => "CH₃–CO–CH₃", 'is_correct' => true],
                            ['choice_text' => "CH₃–CH₂OH", 'is_correct' => false],
                            ['choice_text' => "CH₃–COOH", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un acide carboxylique réagit avec une base pour donner généralement…",
                        'explanation' => "Une neutralisation acide-base forme généralement un sel et de l'eau lorsque la base apporte des ions appropriés.",
                        'choices' => [
                            ['choice_text' => "Un sel et de l'eau", 'is_correct' => true],
                            ['choice_text' => "Uniquement du carbone", 'is_correct' => false],
                            ['choice_text' => "Uniquement de l'oxygène", 'is_correct' => false],
                            ['choice_text' => "Un alcane obligatoire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle affirmation sur les acides carboxyliques est correcte ?",
                        'explanation' => "Le groupe –COOH peut céder un proton H⁺, ce qui donne leur comportement acide en solution.",
                        'choices' => [
                            ['choice_text' => "Ils peuvent céder un proton du groupe carboxyle", 'is_correct' => true],
                            ['choice_text' => "Ils ne contiennent jamais d'oxygène", 'is_correct' => false],
                            ['choice_text' => "Ils sont tous des gaz", 'is_correct' => false],
                            ['choice_text' => "Ils ne réagissent jamais avec les bases", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lorsqu'un alcool primaire est correctement oxydé dans des conditions classiques, quelle fonction peut apparaître en premier ?",
                        'explanation' => "Un alcool primaire peut être oxydé en aldéhyde, puis davantage en acide carboxylique selon les conditions.",
                        'choices' => [
                            ['choice_text' => "Un aldéhyde", 'is_correct' => true],
                            ['choice_text' => "Une amine", 'is_correct' => false],
                            ['choice_text' => "Un alcyne", 'is_correct' => false],
                            ['choice_text' => "Un sel de sodium sans autre réaction", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l'acétone est-elle classée parmi les cétones ?",
                        'explanation' => "L'acétone (propanone) possède un groupe carbonyle C=O lié à deux groupes carbonés.",
                        'choices' => [
                            ['choice_text' => "Parce que son groupe carbonyle est entre deux groupes carbonés", 'is_correct' => true],
                            ['choice_text' => "Parce qu'elle possède un groupe –OH", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle ne contient pas de carbone", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle est toujours ionique", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Amines, amides et molécules azotées",
                'description' => "Reconnaître quelques fonctions azotées et comprendre leur rôle général en chimie organique.",
                'questions' => [
                    [
                        'question' => "Quel groupe fonctionnel est caractéristique d'une amine primaire simple ?",
                        'explanation' => "Une amine primaire peut contenir le groupe –NH₂ lié à un groupe carboné.",
                        'choices' => [
                            ['choice_text' => "–NH₂", 'is_correct' => true],
                            ['choice_text' => "–COOH", 'is_correct' => false],
                            ['choice_text' => "–OH", 'is_correct' => false],
                            ['choice_text' => "–CHO", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le nom de CH₃NH₂ ?",
                        'explanation' => "CH₃NH₂ est une amine contenant un seul carbone : la méthylamine, ou méthanamine selon la nomenclature systématique.",
                        'choices' => [
                            ['choice_text' => "Méthylamine", 'is_correct' => true],
                            ['choice_text' => "Méthanol", 'is_correct' => false],
                            ['choice_text' => "Méthanal", 'is_correct' => false],
                            ['choice_text' => "Acide méthanoïque", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle fonction contient à la fois un carbonyle et un groupe azoté ?",
                        'explanation' => "Un amide contient un carbonyle C=O directement lié à un atome d'azote.",
                        'choices' => [
                            ['choice_text' => "Amide", 'is_correct' => true],
                            ['choice_text' => "Alcène", 'is_correct' => false],
                            ['choice_text' => "Éther", 'is_correct' => false],
                            ['choice_text' => "Alcane", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle formule représente le plus simplement une amide ?",
                        'explanation' => "La structure R–CONH₂ est un exemple d'amide primaire.",
                        'choices' => [
                            ['choice_text' => "R–OH", 'is_correct' => false],
                            ['choice_text' => "R–COOH", 'is_correct' => false],
                            ['choice_text' => "R–CONH₂", 'is_correct' => true],
                            ['choice_text' => "R–O–R", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les amines simples se comportent souvent comme des bases car…",
                        'explanation' => "Le doublet libre de l'azote peut capter un proton H⁺, ce qui donne un comportement basique.",
                        'choices' => [
                            ['choice_text' => "L'azote peut utiliser son doublet libre pour capter H⁺", 'is_correct' => true],
                            ['choice_text' => "Elles contiennent toujours un métal alcalin", 'is_correct' => false],
                            ['choice_text' => "Elles libèrent forcément O₂", 'is_correct' => false],
                            ['choice_text' => "Elles ne contiennent jamais d'azote", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle différence générale distingue une amine d'un amide ?",
                        'explanation' => "Dans un amide, l'azote est directement lié au carbone d'un groupe carbonyle. Dans une amine simple, il n'y a pas ce carbonyle adjacent.",
                        'choices' => [
                            ['choice_text' => "La présence d'un carbonyle directement lié à l'azote dans l'amide", 'is_correct' => true],
                            ['choice_text' => "La présence obligatoire d'un métal dans l'amine", 'is_correct' => false],
                            ['choice_text' => "L'absence totale d'azote dans l'amide", 'is_correct' => false],
                            ['choice_text' => "La présence d'un halogène dans toutes les amines", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle molécule contient un atome d'azote ?",
                        'explanation' => "CH₃NH₂ contient explicitement un atome d'azote dans le groupe –NH₂.",
                        'choices' => [
                            ['choice_text' => "CH₃CH₂OH", 'is_correct' => false],
                            ['choice_text' => "CH₃NH₂", 'is_correct' => true],
                            ['choice_text' => "CH₃COOH", 'is_correct' => false],
                            ['choice_text' => "CH₄", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel rôle joue souvent la liaison N–H dans une molécule organique azotée ?",
                        'explanation' => "Une liaison N–H peut participer à des interactions comme les liaisons hydrogène, ce qui influence certaines propriétés physiques.",
                        'choices' => [
                            ['choice_text' => "Elle peut contribuer à des liaisons hydrogène", 'is_correct' => true],
                            ['choice_text' => "Elle transforme toujours la molécule en métal", 'is_correct' => false],
                            ['choice_text' => "Elle supprime toute polarité", 'is_correct' => false],
                            ['choice_text' => "Elle interdit toute réaction chimique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les protéines contiennent principalement quelles fonctions azotées dans leur squelette ?",
                        'explanation' => "Les liaisons peptidiques des protéines sont des fonctions amides reliant les acides aminés.",
                        'choices' => [
                            ['choice_text' => "Des amides", 'is_correct' => true],
                            ['choice_text' => "Uniquement des éthers", 'is_correct' => false],
                            ['choice_text' => "Uniquement des alcanes", 'is_correct' => false],
                            ['choice_text' => "Uniquement des alcènes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle substance est la plus proche de la fonction amine parmi les propositions ?",
                        'explanation' => "L'éthylamine contient un groupe –NH₂ lié à une chaîne carbonée. C'est donc une amine.",
                        'choices' => [
                            ['choice_text' => "CH₃CH₂NH₂", 'is_correct' => true],
                            ['choice_text' => "CH₃CH₂OH", 'is_correct' => false],
                            ['choice_text' => "CH₃COOH", 'is_correct' => false],
                            ['choice_text' => "CH₃CHO", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Isomérie et représentations des molécules",
                'description' => "Comprendre l'isomérie, les représentations structurales et l'importance de l'ordre des atomes.",
                'questions' => [
                    [
                        'question' => "Deux molécules sont des isomères de constitution lorsqu'elles ont…",
                        'explanation' => "Elles possèdent la même formule moléculaire mais des connectivités différentes entre les atomes.",
                        'choices' => [
                            ['choice_text' => "La même formule moléculaire mais un enchaînement différent des atomes", 'is_correct' => true],
                            ['choice_text' => "Des formules moléculaires forcément différentes", 'is_correct' => false],
                            ['choice_text' => "Toujours la même forme dans l'espace", 'is_correct' => false],
                            ['choice_text' => "Toujours des masses molaires différentes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle paire représente deux isomères de constitution possibles de C₄H₁₀ ?",
                        'explanation' => "C₄H₁₀ peut former le butane linéaire et le 2-méthylpropane, qui ont la même formule mais un squelette différent.",
                        'choices' => [
                            ['choice_text' => "Butane et 2-méthylpropane", 'is_correct' => true],
                            ['choice_text' => "Éthane et propane", 'is_correct' => false],
                            ['choice_text' => "Méthanol et éthanol", 'is_correct' => false],
                            ['choice_text' => "Éthène et éthyne", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À quoi sert une formule semi-développée ?",
                        'explanation' => "Elle montre l'enchaînement des groupes d'atomes de la chaîne tout en évitant de dessiner chaque liaison C–H individuellement.",
                        'choices' => [
                            ['choice_text' => "À représenter clairement l'organisation de la chaîne avec une écriture simplifiée", 'is_correct' => true],
                            ['choice_text' => "À donner uniquement la masse de la molécule", 'is_correct' => false],
                            ['choice_text' => "À remplacer toute information sur les atomes", 'is_correct' => false],
                            ['choice_text' => "À montrer uniquement les électrons libres", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle formule moléculaire possède le butane ?",
                        'explanation' => "Le butane est un alcane à quatre carbones : C₄H₁₀.",
                        'choices' => [
                            ['choice_text' => "C₄H₈", 'is_correct' => false],
                            ['choice_text' => "C₄H₁₀", 'is_correct' => true],
                            ['choice_text' => "C₄H₁₂", 'is_correct' => false],
                            ['choice_text' => "C₄H₆", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi deux isomères peuvent-ils avoir des propriétés différentes ?",
                        'explanation' => "Une organisation différente des atomes modifie la forme, les interactions et parfois la réactivité de la molécule.",
                        'choices' => [
                            ['choice_text' => "Parce que l'arrangement des atomes influence leurs propriétés", 'is_correct' => true],
                            ['choice_text' => "Parce que l'un contient forcément un élément différent", 'is_correct' => false],
                            ['choice_text' => "Parce que leurs atomes changent de nature", 'is_correct' => false],
                            ['choice_text' => "Parce que leur formule devient automatiquement ionique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle information la formule brute C₂H₆O ne donne-t-elle pas à elle seule ?",
                        'explanation' => "La formule brute donne les nombres d'atomes, mais pas la manière exacte dont ils sont reliés.",
                        'choices' => [
                            ['choice_text' => "Le nombre total de carbones", 'is_correct' => false],
                            ['choice_text' => "Le nombre total d'hydrogènes", 'is_correct' => false],
                            ['choice_text' => "L'enchaînement précis des atomes", 'is_correct' => true],
                            ['choice_text' => "La présence d'oxygène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle représentation montre le plus de détails sur les liaisons entre tous les atomes ?",
                        'explanation' => "La formule développée représente les liaisons de façon explicite, alors que la formule brute est beaucoup plus compacte.",
                        'choices' => [
                            ['choice_text' => "La formule brute", 'is_correct' => false],
                            ['choice_text' => "La formule développée", 'is_correct' => true],
                            ['choice_text' => "Le symbole de l'élément seul", 'is_correct' => false],
                            ['choice_text' => "Le nombre de moles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si deux structures ont la même formule brute mais des liaisons arrangées différemment, quelle notion faut-il envisager ?",
                        'explanation' => "Une même formule brute avec une connectivité différente correspond à une situation d'isomérie de constitution.",
                        'choices' => [
                            ['choice_text' => "L'isomérie", 'is_correct' => true],
                            ['choice_text' => "La radioactivité", 'is_correct' => false],
                            ['choice_text' => "La sublimation", 'is_correct' => false],
                            ['choice_text' => "La fusion nucléaire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel facteur peut augmenter le nombre de structures possibles pour une même formule moléculaire ?",
                        'explanation' => "Avec plusieurs carbones, il devient possible de changer l'organisation de la chaîne, de créer des ramifications ou de modifier les groupes fonctionnels.",
                        'choices' => [
                            ['choice_text' => "La possibilité de plusieurs enchaînements d'atomes", 'is_correct' => true],
                            ['choice_text' => "L'absence totale de carbone", 'is_correct' => false],
                            ['choice_text' => "Le fait que chaque atome ne puisse former qu'une liaison", 'is_correct' => false],
                            ['choice_text' => "La suppression de tous les hydrogènes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle affirmation est correcte concernant les isomères de constitution ?",
                        'explanation' => "Ils ont la même formule moléculaire, mais l'ordre des liaisons entre les atomes n'est pas le même.",
                        'choices' => [
                            ['choice_text' => "Ils ont la même formule moléculaire et une connectivité différente", 'is_correct' => true],
                            ['choice_text' => "Ils doivent avoir des éléments différents", 'is_correct' => false],
                            ['choice_text' => "Ils sont nécessairement identiques chimiquement", 'is_correct' => false],
                            ['choice_text' => "Ils ont toujours des masses molaires différentes", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Réactions organiques de base",
                'description' => "Reconnaître quelques grandes familles de réactions organiques et leur logique générale.",
                'questions' => [
                    [
                        'question' => "Lors d'une réaction d'addition sur un alcène, que se passe-t-il généralement au niveau de la double liaison ?",
                        'explanation' => "La double liaison est utilisée pour fixer de nouveaux atomes ou groupes sur les deux carbones concernés.",
                        'choices' => [
                            ['choice_text' => "De nouveaux groupes se fixent sur les carbones de la liaison multiple", 'is_correct' => true],
                            ['choice_text' => "La molécule perd forcément tous ses hydrogènes", 'is_correct' => false],
                            ['choice_text' => "Le carbone devient immédiatement un métal", 'is_correct' => false],
                            ['choice_text' => "La molécule disparaît", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle réaction associe typiquement un alcool et un acide carboxylique pour former un ester ?",
                        'explanation' => "L'estérification met en jeu un alcool et un acide carboxylique, avec formation d'un ester et d'eau.",
                        'choices' => [
                            ['choice_text' => "Une estérification", 'is_correct' => true],
                            ['choice_text' => "Une combustion", 'is_correct' => false],
                            ['choice_text' => "Une neutralisation nucléaire", 'is_correct' => false],
                            ['choice_text' => "Une précipitation métallique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quels produits sont généralement formés lors d'une combustion complète d'un composé organique contenant seulement C et H ?",
                        'explanation' => "Une combustion complète d'un hydrocarbure en présence de suffisamment de dioxygène produit du CO₂ et de l'eau.",
                        'choices' => [
                            ['choice_text' => "CO₂ et H₂O", 'is_correct' => true],
                            ['choice_text' => "CO et N₂", 'is_correct' => false],
                            ['choice_text' => "H₂ et O₂", 'is_correct' => false],
                            ['choice_text' => "NaCl et H₂O", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que signifie le mot « oxydation » dans le contexte organique débutant ?",
                        'explanation' => "Selon la réaction, une oxydation organique peut correspondre à une augmentation des liaisons à l'oxygène ou à une diminution des hydrogènes sur le carbone concerné.",
                        'choices' => [
                            ['choice_text' => "Une transformation pouvant augmenter les liaisons du carbone avec l'oxygène ou diminuer ses hydrogènes", 'is_correct' => true],
                            ['choice_text' => "Une fusion d'atomes dans le noyau", 'is_correct' => false],
                            ['choice_text' => "Une réaction qui ne change jamais la molécule", 'is_correct' => false],
                            ['choice_text' => "La disparition obligatoire du carbone", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle transformation est souvent utilisée pour convertir un acide carboxylique et un alcool en ester ?",
                        'explanation' => "La réaction d'estérification forme un ester et de l'eau à partir d'un acide carboxylique et d'un alcool.",
                        'choices' => [
                            ['choice_text' => "Une estérification", 'is_correct' => true],
                            ['choice_text' => "Une hydratation d'alcane", 'is_correct' => false],
                            ['choice_text' => "Une décomposition nucléaire", 'is_correct' => false],
                            ['choice_text' => "Une sublimation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une réaction de substitution simple, que se passe-t-il ?",
                        'explanation' => "Un atome ou un groupe présent dans la molécule est remplacé par un autre atome ou groupe.",
                        'choices' => [
                            ['choice_text' => "Un groupe est remplacé par un autre", 'is_correct' => true],
                            ['choice_text' => "Toute la molécule devient gazeuse", 'is_correct' => false],
                            ['choice_text' => "Toutes les liaisons disparaissent", 'is_correct' => false],
                            ['choice_text' => "Aucune liaison ne change", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La polymérisation de nombreux petits alcènes permet de former…",
                        'explanation' => "De nombreuses molécules monomères peuvent s'enchaîner pour former une longue macromolécule appelée polymère.",
                        'choices' => [
                            ['choice_text' => "Un polymère", 'is_correct' => true],
                            ['choice_text' => "Un métal pur", 'is_correct' => false],
                            ['choice_text' => "Un gaz noble", 'is_correct' => false],
                            ['choice_text' => "Un acide minéral", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l'intérêt de casser une double liaison lors de certaines réactions d'addition ?",
                        'explanation' => "La liaison multiple fournit un site réactif permettant d'attacher de nouveaux groupes aux carbones concernés.",
                        'choices' => [
                            ['choice_text' => "Elle permet de créer de nouvelles liaisons avec les réactifs", 'is_correct' => true],
                            ['choice_text' => "Elle empêche toute nouvelle liaison", 'is_correct' => false],
                            ['choice_text' => "Elle transforme automatiquement le carbone en ion métallique", 'is_correct' => false],
                            ['choice_text' => "Elle supprime toujours tous les hydrogènes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel type de réaction transforme plusieurs monomères en une longue chaîne moléculaire ?",
                        'explanation' => "La polymérisation relie de nombreux monomères pour construire un polymère de grande masse molaire.",
                        'choices' => [
                            ['choice_text' => "La polymérisation", 'is_correct' => true],
                            ['choice_text' => "La neutralisation", 'is_correct' => false],
                            ['choice_text' => "La précipitation", 'is_correct' => false],
                            ['choice_text' => "La sublimation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une réaction organique doit-elle souvent être équilibrée ?",
                        'explanation' => "Comme dans les autres réactions chimiques, les nombres d'atomes de chaque élément doivent être conservés entre réactifs et produits.",
                        'choices' => [
                            ['choice_text' => "Pour respecter la conservation des atomes", 'is_correct' => true],
                            ['choice_text' => "Pour faire disparaître la matière", 'is_correct' => false],
                            ['choice_text' => "Pour imposer toujours un pH de 7", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer le carbone", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Nomenclature organique essentielle",
                'description' => "S'entraîner à nommer des molécules organiques simples à partir de leur structure.",
                'questions' => [
                    [
                        'question' => "Quel préfixe indique une chaîne principale de deux carbones ?",
                        'explanation' => "En nomenclature organique, éth- correspond à deux atomes de carbone dans la chaîne principale.",
                        'choices' => [
                            ['choice_text' => "Méth-", 'is_correct' => false],
                            ['choice_text' => "Éth-", 'is_correct' => true],
                            ['choice_text' => "Prop-", 'is_correct' => false],
                            ['choice_text' => "But-", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel suffixe reconnaît-on dans le nom d'un alcool simple ?",
                        'explanation' => "Les alcools portent généralement le suffixe –ol dans la nomenclature de base : éthanol, propanol, etc.",
                        'choices' => [
                            ['choice_text' => "–ane", 'is_correct' => false],
                            ['choice_text' => "–ène", 'is_correct' => false],
                            ['choice_text' => "–ol", 'is_correct' => true],
                            ['choice_text' => "–al", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel suffixe est associé à un alcène ?",
                        'explanation' => "Les alcènes simples portent le suffixe –ène, comme éthène et propène.",
                        'choices' => [
                            ['choice_text' => "–ane", 'is_correct' => false],
                            ['choice_text' => "–ène", 'is_correct' => true],
                            ['choice_text' => "–ol", 'is_correct' => false],
                            ['choice_text' => "–oïque", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel suffixe retrouve-t-on dans le nom d'un alcane ?",
                        'explanation' => "Les hydrocarbures saturés de chaîne ouverte utilisent le suffixe –ane : méthane, éthane, propane.",
                        'choices' => [
                            ['choice_text' => "–ane", 'is_correct' => true],
                            ['choice_text' => "–one", 'is_correct' => false],
                            ['choice_text' => "–ol", 'is_correct' => false],
                            ['choice_text' => "–al", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment nomme-t-on une chaîne de cinq carbones saturée sans ramification ?",
                        'explanation' => "Cinq carbones correspondent au préfixe pent- et une chaîne saturée porte le suffixe –ane : pentane.",
                        'choices' => [
                            ['choice_text' => "Pentane", 'is_correct' => true],
                            ['choice_text' => "Pentène", 'is_correct' => false],
                            ['choice_text' => "Butane", 'is_correct' => false],
                            ['choice_text' => "Hexane", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel nom correspond à CH₃–CH₂–CH₂–OH ?",
                        'explanation' => "La chaîne comporte trois carbones et porte un groupe hydroxyle en bout de chaîne : propan-1-ol.",
                        'choices' => [
                            ['choice_text' => "Propan-1-ol", 'is_correct' => true],
                            ['choice_text' => "Propan-2-ol", 'is_correct' => false],
                            ['choice_text' => "Butan-1-ol", 'is_correct' => false],
                            ['choice_text' => "Éthanol", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment appelle-t-on CH₃–CH=CH₂ ?",
                        'explanation' => "Il s'agit d'une chaîne de trois carbones avec une double liaison : propène, ou prop-1-ène.",
                        'choices' => [
                            ['choice_text' => "Propane", 'is_correct' => false],
                            ['choice_text' => "Propène", 'is_correct' => true],
                            ['choice_text' => "Propyne", 'is_correct' => false],
                            ['choice_text' => "Butène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel nom correspond à CH₃–CH₂–CHO ?",
                        'explanation' => "La molécule contient trois carbones et une fonction aldéhyde terminale : propanal.",
                        'choices' => [
                            ['choice_text' => "Propanal", 'is_correct' => true],
                            ['choice_text' => "Propanol", 'is_correct' => false],
                            ['choice_text' => "Propanone", 'is_correct' => false],
                            ['choice_text' => "Acide propanoïque", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel nom correspond à CH₃–CO–CH₃ ?",
                        'explanation' => "La fonction cétone sur une chaîne de trois carbones donne la propanone.",
                        'choices' => [
                            ['choice_text' => "Propanone", 'is_correct' => true],
                            ['choice_text' => "Propanal", 'is_correct' => false],
                            ['choice_text' => "Propanol", 'is_correct' => false],
                            ['choice_text' => "Propène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel nom correspond à CH₃–COOH ?",
                        'explanation' => "Deux carbones et la fonction –COOH donnent l'acide éthanoïque.",
                        'choices' => [
                            ['choice_text' => "Acide méthanoïque", 'is_correct' => false],
                            ['choice_text' => "Acide éthanoïque", 'is_correct' => true],
                            ['choice_text' => "Éthanol", 'is_correct' => false],
                            ['choice_text' => "Éthanal", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Applications et révision de chimie organique",
                'description' => "Réviser les familles organiques, leurs groupes fonctionnels et quelques applications courantes.",
                'questions' => [
                    [
                        'question' => "Quel composé est couramment utilisé comme alcool présent dans les boissons alcoolisées ?",
                        'explanation' => "L'éthanol, de formule C₂H₅OH, est l'alcool que l'on retrouve dans les boissons alcoolisées.",
                        'choices' => [
                            ['choice_text' => "Éthanol", 'is_correct' => true],
                            ['choice_text' => "Méthane", 'is_correct' => false],
                            ['choice_text' => "Acétone", 'is_correct' => false],
                            ['choice_text' => "Éthène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi de nombreux solvants organiques sont-ils utilisés au laboratoire ?",
                        'explanation' => "Leurs propriétés de polarité et de solubilité permettent de dissoudre certaines substances et de réaliser des séparations ou des réactions.",
                        'choices' => [
                            ['choice_text' => "Parce que leur capacité à dissoudre des substances peut être adaptée à l'expérience", 'is_correct' => true],
                            ['choice_text' => "Parce qu'ils dissolvent absolument tout", 'is_correct' => false],
                            ['choice_text' => "Parce qu'ils sont tous inertes", 'is_correct' => false],
                            ['choice_text' => "Parce qu'ils n'ont jamais de vapeur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle famille est présente dans les parfums et les arômes de nombreux produits ?",
                        'explanation' => "Les esters sont très utilisés en parfumerie et peuvent présenter des odeurs fruitées ou florales caractéristiques.",
                        'choices' => [
                            ['choice_text' => "Les esters", 'is_correct' => true],
                            ['choice_text' => "Les alcanes seulement", 'is_correct' => false],
                            ['choice_text' => "Les sels ioniques seulement", 'is_correct' => false],
                            ['choice_text' => "Les métaux alcalins", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel matériau est un exemple de polymère organique couramment utilisé ?",
                        'explanation' => "Le polyéthylène est un polymère organique très utilisé dans les emballages et de nombreux objets du quotidien.",
                        'choices' => [
                            ['choice_text' => "Polyéthylène", 'is_correct' => true],
                            ['choice_text' => "Sodium métallique", 'is_correct' => false],
                            ['choice_text' => "Chlorure de sodium", 'is_correct' => false],
                            ['choice_text' => "Fer pur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les molécules organiques de grande taille ont-elles souvent des points d'ébullition plus élevés que leurs analogues plus petits ?",
                        'explanation' => "Une taille moléculaire plus grande peut renforcer certaines forces intermoléculaires, ce qui demande généralement plus d'énergie pour séparer les molécules.",
                        'choices' => [
                            ['choice_text' => "Les interactions entre molécules peuvent devenir plus importantes", 'is_correct' => true],
                            ['choice_text' => "Le carbone devient automatiquement ionique", 'is_correct' => false],
                            ['choice_text' => "Toutes les molécules deviennent des métaux", 'is_correct' => false],
                            ['choice_text' => "La masse n'a aucun lien avec les propriétés physiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle précaution est particulièrement importante avec un solvant organique inflammable ?",
                        'explanation' => "Un solvant inflammable doit être tenu éloigné des flammes et des sources d'étincelles, conformément aux règles de sécurité du laboratoire.",
                        'choices' => [
                            ['choice_text' => "Éviter les flammes et les sources d'étincelles", 'is_correct' => true],
                            ['choice_text' => "Le chauffer directement avec un briquet", 'is_correct' => false],
                            ['choice_text' => "Le verser près d'une source de chaleur", 'is_correct' => false],
                            ['choice_text' => "Le stocker ouvert près d'une flamme", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle famille contient le groupe –COOH ?",
                        'explanation' => "Le groupe carboxyle –COOH est caractéristique des acides carboxyliques.",
                        'choices' => [
                            ['choice_text' => "Les acides carboxyliques", 'is_correct' => true],
                            ['choice_text' => "Les alcènes", 'is_correct' => false],
                            ['choice_text' => "Les éthers", 'is_correct' => false],
                            ['choice_text' => "Les alcanes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel groupe fonctionnel permet de reconnaître rapidement un alcool dans une formule simple ?",
                        'explanation' => "La présence d'un groupe hydroxyle –OH lié à un carbone permet d'identifier un alcool simple.",
                        'choices' => [
                            ['choice_text' => "–OH", 'is_correct' => true],
                            ['choice_text' => "–COOH", 'is_correct' => false],
                            ['choice_text' => "–NH₂", 'is_correct' => false],
                            ['choice_text' => "–C≡C–", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une molécule possède une double liaison C=C et un groupe –OH. Que peut-on déjà déduire ?",
                        'explanation' => "La double liaison indique une insaturation de type alcène et le groupe –OH indique la présence d'une fonction alcool si les conditions structurales sont remplies.",
                        'choices' => [
                            ['choice_text' => "Elle comporte une double liaison et une fonction alcool", 'is_correct' => true],
                            ['choice_text' => "Elle est forcément un alcane pur", 'is_correct' => false],
                            ['choice_text' => "Elle ne contient aucun carbone", 'is_correct' => false],
                            ['choice_text' => "Elle est forcément un sel minéral", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle idée résume le mieux l'intérêt des groupes fonctionnels en chimie organique ?",
                        'explanation' => "Les groupes fonctionnels permettent de classer les molécules et de prévoir une partie de leur comportement chimique.",
                        'choices' => [
                            ['choice_text' => "Ils aident à relier la structure d'une molécule à ses propriétés et à sa réactivité", 'is_correct' => true],
                            ['choice_text' => "Ils servent uniquement à calculer la masse", 'is_correct' => false],
                            ['choice_text' => "Ils indiquent seulement la couleur d'un produit", 'is_correct' => false],
                            ['choice_text' => "Ils rendent toutes les molécules identiques", 'is_correct' => false],
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
