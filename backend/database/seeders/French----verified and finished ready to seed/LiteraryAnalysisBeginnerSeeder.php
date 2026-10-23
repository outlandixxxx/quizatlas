<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class LiteraryAnalysisBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('major_id', Major::where('slug', 'french')->firstOrFail()->id)->where('name', 'Literary Analysis')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les bases de l’analyse littéraire',
                'description' => 'Identifier les principaux éléments d’un texte littéraire : narrateur, personnages, thème, cadre et structure.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Dans un récit, qu’est-ce qu’un narrateur ?',
                        'choices' => [
                            ['choice_text' => 'L’éditeur qui publie le livre', 'is_correct' => false],
                            ['choice_text' => 'Le lecteur qui découvre l’histoire', 'is_correct' => false],
                            ['choice_text' => 'La voix qui raconte l’histoire', 'is_correct' => true],
                            ['choice_text' => 'Le libraire qui vend le livre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le narrateur est la voix qui raconte les événements du récit. Il peut être un personnage ou être extérieur à l’histoire.',
                    ],
                    [
                        'question' => 'Dans un roman, que veut dire « personnage principal » ?',
                        'choices' => [
                            ['choice_text' => 'Un personnage cité une seule fois dans une scène du récit', 'is_correct' => false],
                            ['choice_text' => 'Un personnage qui tient une place centrale dans l’histoire', 'is_correct' => true],
                            ['choice_text' => 'Le narrateur qui reste extérieur à l’histoire', 'is_correct' => false],
                            ['choice_text' => 'Le lecteur qui suit le récit', 'is_correct' => false],
                        ],
                        'explanation' => 'Le personnage principal joue un rôle central dans l’action et dans le développement de l’histoire.',
                    ],
                    [
                        'question' => 'Qu’appelle-t-on le thème d’une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Une grande idée développée dans le texte, comme la liberté', 'is_correct' => true],
                            ['choice_text' => 'La liste des personnages cités du début à la fin du livre', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de pages et de chapitres du roman entier', 'is_correct' => false],
                            ['choice_text' => 'Le lieu où l’auteur a écrit son livre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le thème correspond à une grande idée, une question ou une préoccupation centrale comme l’amour, la liberté ou la solitude.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le cadre d’un récit ?',
                        'choices' => [
                            ['choice_text' => 'Le lieu et l’époque où se passent les événements', 'is_correct' => true],
                            ['choice_text' => 'Le titre du livre et le nom de l’auteur qui l’a écrit', 'is_correct' => false],
                            ['choice_text' => 'La morale que l’on tire de l’histoire', 'is_correct' => false],
                            ['choice_text' => 'La liste des personnages et leur âge', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cadre indique où et quand l’histoire se déroule.',
                    ],
                    [
                        'question' => 'Quand on étudie l’intrigue d’un récit, que cherche-t-on à repérer ?',
                        'choices' => [
                            ['choice_text' => 'Le portrait physique des personnages', 'is_correct' => false],
                            ['choice_text' => 'Le message moral que veut transmettre l’auteur', 'is_correct' => false],
                            ['choice_text' => 'Le décor où se passe l’histoire', 'is_correct' => false],
                            ['choice_text' => 'L’enchaînement des événements de l’histoire', 'is_correct' => true],
                        ],
                        'explanation' => 'L’intrigue est la suite d’actions et d’événements qui forment l’histoire.',
                    ],
                    [
                        'question' => 'À quoi sert l’étude des personnages d’un récit ?',
                        'choices' => [
                            ['choice_text' => 'À savoir combien de personnages le livre compte au total', 'is_correct' => false],
                            ['choice_text' => 'À comprendre leur rôle, leurs liens et leur évolution', 'is_correct' => true],
                            ['choice_text' => 'À remplacer la lecture du texte par un résumé rapide', 'is_correct' => false],
                            ['choice_text' => 'À deviner la vie privée de l’auteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les personnages permettent de comprendre les conflits, les relations, les motivations et l’évolution de l’histoire.',
                    ],
                    [
                        'question' => 'Dans un texte littéraire, qu’est-ce qu’une description ?',
                        'choices' => [
                            ['choice_text' => 'Un passage où deux personnages se parlent tour à tour', 'is_correct' => false],
                            ['choice_text' => 'Un passage qui raconte une action après l’autre', 'is_correct' => false],
                            ['choice_text' => 'Un passage qui présente un lieu, une personne ou un objet', 'is_correct' => true],
                            ['choice_text' => 'Un passage qui donne l’avis de l’auteur sur l’histoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une description donne des caractéristiques visuelles, physiques, spatiales ou parfois sensorielles.',
                    ],
                    [
                        'question' => 'Pour trouver le point de vue dans un récit, quelle question posez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Qui perçoit les événements racontés ?', 'is_correct' => true],
                            ['choice_text' => 'Où l’histoire se passe-t-elle ?', 'is_correct' => false],
                            ['choice_text' => 'Combien de personnages sont présents ?', 'is_correct' => false],
                            ['choice_text' => 'Quel est le genre de l’œuvre ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour étudier le point de vue, on cherche quel regard nous fait découvrir les événements.',
                    ],
                    [
                        'question' => 'Pourquoi le titre d’une œuvre mérite-t-il un regard attentif ?',
                        'choices' => [
                            ['choice_text' => 'Il résume chaque chapitre du livre en quelques mots clés', 'is_correct' => false],
                            ['choice_text' => 'Il peut annoncer ou suggérer un thème important', 'is_correct' => true],
                            ['choice_text' => 'Il remplace l’analyse du texte', 'is_correct' => false],
                            ['choice_text' => 'Il indique la maison d’édition', 'is_correct' => false],
                        ],
                        'explanation' => 'Un titre peut orienter la lecture et prendre un sens plus riche lorsqu’on connaît l’ensemble de l’œuvre.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un conflit dans un récit ?',
                        'choices' => [
                            ['choice_text' => 'Un accord entre deux personnages sur un projet commun à réaliser', 'is_correct' => false],
                            ['choice_text' => 'La description d’un lieu calme et silencieux', 'is_correct' => false],
                            ['choice_text' => 'Une explication donnée par le narrateur', 'is_correct' => false],
                            ['choice_text' => 'Une opposition entre des personnages, des forces ou des buts', 'is_correct' => true],
                        ],
                        'explanation' => 'Le conflit crée une tension narrative et peut opposer deux personnages, un personnage et la société, ou encore un personnage à lui-même.',
                    ],
                    [
                        'question' => 'Quelle question est utile pour étudier la fin d’un récit ?',
                        'choices' => [
                            ['choice_text' => 'Quelle est la toute première phrase du livre ?', 'is_correct' => false],
                            ['choice_text' => 'Quel personnage apparaît au début de l’histoire ?', 'is_correct' => false],
                            ['choice_text' => 'Où l’histoire commence-t-elle ?', 'is_correct' => false],
                            ['choice_text' => 'Qu’est-ce qui change ou se résout à la fin ?', 'is_correct' => true],
                        ],
                        'explanation' => 'La fin peut résoudre un conflit, transformer un personnage ou laisser certaines questions ouvertes.',
                    ],
                ],
            ],
            [
                'title' => 'Narrateur et focalisation',
                'description' => 'Distinguer la position du narrateur et comprendre simplement les principaux types de focalisation.',
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Dans « Hier, nous avons fêté l’anniversaire de Samir », à quelle personne le récit est-il écrit ?',
                        'choices' => [
                            ['choice_text' => 'À la première personne', 'is_correct' => true],
                            ['choice_text' => 'À la deuxième personne', 'is_correct' => false],
                            ['choice_text' => 'À la troisième personne du singulier', 'is_correct' => false],
                            ['choice_text' => 'À la troisième personne du pluriel', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot « nous » montre que le narrateur fait partie de ceux qui racontent.',
                    ],
                    [
                        'question' => 'Lisez : « Je poussai la porte et entrai dans la maison. J’avais peur de découvrir ce qui se trouvait derrière l’escalier. » Qui raconte ?',
                        'choices' => [
                            ['choice_text' => 'Un narrateur qui participe aux événements', 'is_correct' => true],
                            ['choice_text' => 'Un narrateur extérieur qui observe de loin', 'is_correct' => false],
                            ['choice_text' => 'Le lecteur qui imagine la scène', 'is_correct' => false],
                            ['choice_text' => 'L’éditeur du livre', 'is_correct' => false],
                        ],
                        'explanation' => 'L’emploi de « je » montre que la voix qui raconte fait partie des événements.',
                    ],
                    [
                        'question' => 'Dans une focalisation interne, les informations sont principalement limitées à...',
                        'choices' => [
                            ['choice_text' => 'Tout ce qui existe dans l’univers du récit', 'is_correct' => false],
                            ['choice_text' => 'Ce que l’auteur sait de sa propre vie', 'is_correct' => false],
                            ['choice_text' => 'Ce qu’un personnage perçoit, pense ou sait', 'is_correct' => true],
                            ['choice_text' => 'Ce que le lecteur imagine après la lecture', 'is_correct' => false],
                        ],
                        'explanation' => 'La focalisation interne fait découvrir les événements à travers la perception ou les connaissances d’un personnage.',
                    ],
                    [
                        'question' => 'Quelle phrase correspond le mieux à une focalisation interne ?',
                        'choices' => [
                            ['choice_text' => 'Nadia entra dans la pièce. Un avion survolait la ville à trois kilomètres de là.', 'is_correct' => false],
                            ['choice_text' => 'Nadia entra dans la pièce. On la voyait sourire, mais personne ne connaissait ses pensées.', 'is_correct' => false],
                            ['choice_text' => 'Nadia regarda la porte. Elle se demanda si quelqu’un l’attendait derrière.', 'is_correct' => true],
                            ['choice_text' => 'Nadia entra. Le narrateur savait ce que chacun pensait dans la pièce.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le passage donne accès à la réflexion de Nadia, ce qui correspond à une focalisation interne.',
                    ],
                    [
                        'question' => 'Quelle situation correspond à une focalisation externe ?',
                        'choices' => [
                            ['choice_text' => 'Le narrateur connaît les pensées de chaque personnage, même ceux qui sont absents', 'is_correct' => false],
                            ['choice_text' => 'Le narrateur décrit ce qu’un personnage fait sans donner directement accès à ses pensées', 'is_correct' => true],
                            ['choice_text' => 'Le récit est entièrement raconté par un personnage', 'is_correct' => false],
                            ['choice_text' => 'Le narrateur révèle au lecteur les secrets de l’histoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une focalisation externe, le narrateur reste en surface et rapporte surtout les actions et les éléments observables.',
                    ],
                    [
                        'question' => 'Que signifie une focalisation zéro ?',
                        'choices' => [
                            ['choice_text' => 'Le narrateur ne voit que ce que perçoit un personnage du récit', 'is_correct' => false],
                            ['choice_text' => 'Le narrateur en sait plus que l’ensemble des personnages', 'is_correct' => true],
                            ['choice_text' => 'Le narrateur décrit l’extérieur sans accéder aux pensées', 'is_correct' => false],
                            ['choice_text' => 'Le narrateur raconte sa propre histoire avec « je »', 'is_correct' => false],
                        ],
                        'explanation' => 'La focalisation zéro correspond à un narrateur qui en sait plus que les personnages et peut connaître plusieurs consciences ou des événements éloignés.',
                    ],
                    [
                        'question' => 'Lisez : « Paul sourit. Il ignore encore que son frère vient de quitter la ville. » Quelle information montre que le narrateur en sait plus que Paul ?',
                        'choices' => [
                            ['choice_text' => 'Le narrateur décrit longuement le visage de Paul quand il sourit', 'is_correct' => false],
                            ['choice_text' => 'Le texte mentionne un frère de Paul', 'is_correct' => false],
                            ['choice_text' => 'Le narrateur emploie le présent de narration', 'is_correct' => false],
                            ['choice_text' => 'Le narrateur sait que le frère est parti alors que Paul l’ignore', 'is_correct' => true],
                        ],
                        'explanation' => 'Le narrateur possède une information que Paul ne connaît pas encore, ce qui montre un accès supérieur à l’information.',
                    ],
                    [
                        'question' => 'Dans un roman, quel est le lien entre le narrateur et l’auteur ?',
                        'choices' => [
                            ['choice_text' => 'Le narrateur est une voix créée par le texte, distincte de l’auteur', 'is_correct' => true],
                            ['choice_text' => 'Le narrateur est l’auteur qui parle de lui dans son livre', 'is_correct' => false],
                            ['choice_text' => 'Le narrateur est un lecteur choisi par l’auteur pour raconter', 'is_correct' => false],
                            ['choice_text' => 'Le narrateur est un éditeur qui présente le roman', 'is_correct' => false],
                        ],
                        'explanation' => 'L’auteur est la personne réelle qui écrit ; le narrateur est la voix qui raconte dans le texte.',
                    ],
                    [
                        'question' => 'Quel indice peut aider à identifier un récit à la première personne ?',
                        'choices' => [
                            ['choice_text' => 'L’emploi fréquent de « il » ou « elle » pour raconter', 'is_correct' => false],
                            ['choice_text' => 'L’emploi fréquent de « je » ou « nous » pour raconter', 'is_correct' => true],
                            ['choice_text' => 'La présence de nombreux dialogues', 'is_correct' => false],
                            ['choice_text' => 'Un récit écrit au passé simple', 'is_correct' => false],
                        ],
                        'explanation' => 'Les pronoms de première personne sont un indice important pour reconnaître la position du narrateur.',
                    ],
                    [
                        'question' => 'Pourquoi la focalisation est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'Elle fixe le nombre de personnages et de chapitres de l’histoire', 'is_correct' => false],
                            ['choice_text' => 'Elle précise le lieu et l’époque du récit', 'is_correct' => false],
                            ['choice_text' => 'Elle indique le genre littéraire de l’œuvre', 'is_correct' => false],
                            ['choice_text' => 'Elle détermine les informations auxquelles le lecteur a accès', 'is_correct' => true],
                        ],
                        'explanation' => 'La focalisation détermine en partie ce que le lecteur peut savoir, voir ou comprendre à un moment donné.',
                    ],
                    [
                        'question' => 'Lisez : « Je ne savais pas pourquoi elle pleurait, mais je sentais que quelque chose allait mal. » Quelle perspective domine ?',
                        'choices' => [
                            ['choice_text' => 'La connaissance complète de l’ensemble des personnages', 'is_correct' => false],
                            ['choice_text' => 'Une description extérieure qui n’entre pas dans les pensées', 'is_correct' => false],
                            ['choice_text' => 'La perception du narrateur-personnage', 'is_correct' => true],
                            ['choice_text' => 'Le point de vue d’un personnage absent', 'is_correct' => false],
                        ],
                        'explanation' => 'Le narrateur indique ce qu’il sait et ressent lui-même, ce qui correspond à une perspective interne.',
                    ],
                ],
            ],
            [
                'title' => 'Figures de style et langage',
                'description' => 'Reconnaître quelques figures de style simples et comprendre leur effet dans un texte littéraire.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle figure de style trouve-t-on dans « Il est fort comme un lion » ?',
                        'choices' => [
                            ['choice_text' => 'Une métaphore', 'is_correct' => false],
                            ['choice_text' => 'Une comparaison', 'is_correct' => true],
                            ['choice_text' => 'Une personnification', 'is_correct' => false],
                            ['choice_text' => 'Une hyperbole', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence de « comme » établit une comparaison entre l’homme et le lion.',
                    ],
                    [
                        'question' => 'Quelle figure attribue une caractéristique humaine à un objet ou à un élément de la nature ?',
                        'choices' => [
                            ['choice_text' => 'La comparaison', 'is_correct' => false],
                            ['choice_text' => 'La répétition', 'is_correct' => false],
                            ['choice_text' => 'La rime', 'is_correct' => false],
                            ['choice_text' => 'La personnification', 'is_correct' => true],
                        ],
                        'explanation' => 'La personnification donne des comportements ou des caractéristiques humaines à ce qui ne l’est pas.',
                    ],
                    [
                        'question' => 'Quelle figure de style trouve-t-on dans « Le vent murmure à travers les arbres » ?',
                        'choices' => [
                            ['choice_text' => 'Une comparaison', 'is_correct' => false],
                            ['choice_text' => 'Une hyperbole', 'is_correct' => false],
                            ['choice_text' => 'Une personnification', 'is_correct' => true],
                            ['choice_text' => 'Une anaphore', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe « murmure » donne au vent une action humaine.',
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’une métaphore ?',
                        'choices' => [
                            ['choice_text' => 'Comparer deux choses grâce au mot « comme » ou « tel »', 'is_correct' => false],
                            ['choice_text' => 'Répéter un mot au début de plusieurs phrases', 'is_correct' => false],
                            ['choice_text' => 'Exagérer volontairement la réalité pour frapper le lecteur', 'is_correct' => false],
                            ['choice_text' => 'Rapprocher deux réalités sans mot de comparaison', 'is_correct' => true],
                        ],
                        'explanation' => 'La métaphore rapproche deux réalités sans mot de comparaison, comme dans « un rayon de soleil ».',
                    ],
                    [
                        'question' => 'Dans « Cette nouvelle est un rayon de soleil dans ma journée », quel procédé est utilisé ?',
                        'choices' => [
                            ['choice_text' => 'Une comparaison', 'is_correct' => false],
                            ['choice_text' => 'Une métaphore', 'is_correct' => true],
                            ['choice_text' => 'Une personnification', 'is_correct' => false],
                            ['choice_text' => 'Une hyperbole', 'is_correct' => false],
                        ],
                        'explanation' => 'La nouvelle est directement appelée « un rayon de soleil », sans « comme » : c’est une métaphore.',
                    ],
                    [
                        'question' => 'Quelle figure repose sur la répétition d’un même mot ou groupe de mots au début de plusieurs phrases ou vers ?',
                        'choices' => [
                            ['choice_text' => 'L’anaphore', 'is_correct' => true],
                            ['choice_text' => 'La comparaison', 'is_correct' => false],
                            ['choice_text' => 'La personnification', 'is_correct' => false],
                            ['choice_text' => 'L’hyperbole', 'is_correct' => false],
                        ],
                        'explanation' => 'L’anaphore répète un même élément au début de plusieurs unités successives afin de créer un effet d’insistance ou de rythme.',
                    ],
                    [
                        'question' => 'Lisez : « Toujours il attend. Toujours il espère. Toujours il revient. » Quelle figure reconnaît-on ?',
                        'choices' => [
                            ['choice_text' => 'Une métaphore', 'is_correct' => false],
                            ['choice_text' => 'Une comparaison', 'is_correct' => false],
                            ['choice_text' => 'Une anaphore', 'is_correct' => true],
                            ['choice_text' => 'Une hyperbole', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot « Toujours » est répété au début de plusieurs phrases : c’est une anaphore.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une hyperbole ?',
                        'choices' => [
                            ['choice_text' => 'Une comparaison introduite par « comme »', 'is_correct' => false],
                            ['choice_text' => 'Une répétition de sons à la fin de plusieurs vers de suite', 'is_correct' => false],
                            ['choice_text' => 'Une atténuation volontaire d’une idée', 'is_correct' => false],
                            ['choice_text' => 'Une exagération volontaire pour produire un effet', 'is_correct' => true],
                        ],
                        'explanation' => 'L’hyperbole exagère volontairement une réalité pour renforcer une impression ou une émotion.',
                    ],
                    [
                        'question' => 'Dans « Je t’ai attendu mille ans », quel procédé est le plus évident ?',
                        'choices' => [
                            ['choice_text' => 'Une hyperbole', 'is_correct' => true],
                            ['choice_text' => 'Une description réaliste du temps', 'is_correct' => false],
                            ['choice_text' => 'Une comparaison', 'is_correct' => false],
                            ['choice_text' => 'Une personnification', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expression « mille ans » exagère fortement la durée réelle de l’attente.',
                    ],
                    [
                        'question' => 'Quel effet une répétition peut-elle produire dans un texte ?',
                        'choices' => [
                            ['choice_text' => 'Insister sur une idée ou créer un rythme', 'is_correct' => true],
                            ['choice_text' => 'Changer le narrateur du passage', 'is_correct' => false],
                            ['choice_text' => 'Indiquer l’époque où se passe l’histoire', 'is_correct' => false],
                            ['choice_text' => 'Annoncer la fin du récit', 'is_correct' => false],
                        ],
                        'explanation' => 'La répétition attire l’attention sur un élément et peut renforcer l’émotion, l’idée ou le rythme du passage.',
                    ],
                    [
                        'question' => 'Un élève relève une figure de style, puis l’explique. Pourquoi ne pas se contenter de la nommer ?',
                        'choices' => [
                            ['choice_text' => 'Pour mémoriser par cœur la liste des figures de style du cours', 'is_correct' => false],
                            ['choice_text' => 'Pour se dispenser de lire le reste du texte', 'is_correct' => false],
                            ['choice_text' => 'Pour comprendre l’effet qu’elle produit dans le passage', 'is_correct' => true],
                            ['choice_text' => 'Pour compter combien de fois elle apparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'En analyse littéraire, identifier la figure est une première étape ; il faut ensuite expliquer ce qu’elle fait et pourquoi elle est utilisée.',
                    ],
                ],
            ],
            [
                'title' => 'Personnages, thèmes et symboles',
                'description' => 'Étudier les personnages, les relations, les thèmes et les premiers éléments symboliques dans un texte.',
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Pourquoi les relations entre les personnages sont-elles importantes ?',
                        'choices' => [
                            ['choice_text' => 'Elles permettent de savoir combien de personnages il y a dans le récit', 'is_correct' => false],
                            ['choice_text' => 'Elles servent à remplacer l’étude du thème principal de l’œuvre', 'is_correct' => false],
                            ['choice_text' => 'Elles indiquent où se passe l’histoire', 'is_correct' => false],
                            ['choice_text' => 'Elles créent des conflits, des alliances et font avancer l’intrigue', 'is_correct' => true],
                        ],
                        'explanation' => 'Les relations entre les personnages peuvent faire avancer l’action et révéler leurs motivations ou leurs changements.',
                    ],
                    [
                        'question' => 'Lisez : « Au début, Sami refuse de quitter son village. À la fin, il part seul pour découvrir le monde. » Que peut-on analyser ici ?',
                        'choices' => [
                            ['choice_text' => 'Le lieu où se passe l’histoire', 'is_correct' => false],
                            ['choice_text' => 'L’évolution du personnage', 'is_correct' => true],
                            ['choice_text' => 'Le point de vue du narrateur', 'is_correct' => false],
                            ['choice_text' => 'Le titre de l’œuvre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le personnage change entre le début et la fin : son attitude face au départ évolue.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un symbole dans une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Un décor qui ne sert qu’à décorer la scène, sans autre sens', 'is_correct' => false],
                            ['choice_text' => 'Une rime qui se répète à la fin des vers', 'is_correct' => false],
                            ['choice_text' => 'Un détail sans rapport avec le sens du texte', 'is_correct' => false],
                            ['choice_text' => 'Un élément concret qui renvoie à une idée plus large', 'is_correct' => true],
                        ],
                        'explanation' => 'Un objet, une couleur, un lieu ou une action peut prendre une valeur symbolique selon le contexte du texte.',
                    ],
                    [
                        'question' => 'Dans de nombreux récits, que peut symboliser la lumière ?',
                        'choices' => [
                            ['choice_text' => 'La colère du personnage envers sa propre famille et ses voisins', 'is_correct' => false],
                            ['choice_text' => 'La pauvreté de la famille', 'is_correct' => false],
                            ['choice_text' => 'L’espoir ou la connaissance, selon le contexte', 'is_correct' => true],
                            ['choice_text' => 'L’ennui d’un long voyage', 'is_correct' => false],
                        ],
                        'explanation' => 'La lumière évoque souvent l’espoir ou la connaissance, mais le contexte de l’œuvre donne le sens exact.',
                    ],
                    [
                        'question' => 'Lisez : « Chaque soir, elle regardait la vieille horloge arrêtée depuis la mort de son père. » Quelle interprétation est possible ?',
                        'choices' => [
                            ['choice_text' => 'L’horloge indique l’heure précise à laquelle le crime a eu lieu', 'is_correct' => false],
                            ['choice_text' => 'L’horloge montre que le personnage est en retard à un rendez-vous', 'is_correct' => false],
                            ['choice_text' => 'L’horloge peut symboliser un passé auquel le personnage s’accroche', 'is_correct' => true],
                            ['choice_text' => 'L’horloge ne sert qu’à décorer la pièce', 'is_correct' => false],
                        ],
                        'explanation' => 'L’association de l’horloge arrêtée avec la mort du père peut suggérer un attachement au passé ou un temps vécu comme figé.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un personnage secondaire ?',
                        'choices' => [
                            ['choice_text' => 'Un personnage qui accompagne ou influence l’action sans être central', 'is_correct' => true],
                            ['choice_text' => 'Le héros, présent dans presque chaque scène', 'is_correct' => false],
                            ['choice_text' => 'Un personnage évoqué en une phrase puis oublié', 'is_correct' => false],
                            ['choice_text' => 'Le personnage dont le nom donne son titre au livre', 'is_correct' => false],
                        ],
                        'explanation' => 'Un personnage secondaire peut être essentiel à l’action sans en être le centre.',
                    ],
                    [
                        'question' => 'Quel élément peut révéler le caractère d’un personnage ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de fois où son nom est écrit', 'is_correct' => false],
                            ['choice_text' => 'Ses paroles, ses actions et ses réactions', 'is_correct' => true],
                            ['choice_text' => 'La page où il apparaît pour la première fois', 'is_correct' => false],
                            ['choice_text' => 'Le format du livre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte construit souvent le caractère d’un personnage à travers ce qu’il dit, ce qu’il fait et la manière dont il réagit.',
                    ],
                    [
                        'question' => 'Karim quitte son village et refuse tous les ordres pour vivre comme il l’entend. Quel thème domine ?',
                        'choices' => [
                            ['choice_text' => 'La trahison', 'is_correct' => false],
                            ['choice_text' => 'La liberté', 'is_correct' => true],
                            ['choice_text' => 'La jalousie', 'is_correct' => false],
                            ['choice_text' => 'L’héritage', 'is_correct' => false],
                        ],
                        'explanation' => 'Karim cherche à vivre sans contrainte : le thème est la liberté.',
                    ],
                    [
                        'question' => 'Un lecteur croit qu’une couleur a le même sens dans tous les livres. Que lui répondez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Son sens est fixé par un dictionnaire des symboles', 'is_correct' => false],
                            ['choice_text' => 'Son sens est donné par le titre du livre', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a pas de sens dans un texte littéraire', 'is_correct' => false],
                            ['choice_text' => 'Son sens change selon le contexte de l’œuvre', 'is_correct' => true],
                        ],
                        'explanation' => 'Un symbole prend son sens dans l’œuvre où il apparaît, avec ses personnages et ses thèmes.',
                    ],
                    [
                        'question' => 'Quelle question aide à analyser un personnage ?',
                        'choices' => [
                            ['choice_text' => 'Combien de pages ce personnage occupe-t-il dans le livre ?', 'is_correct' => false],
                            ['choice_text' => 'Quel âge a l’auteur au moment de l’écriture ?', 'is_correct' => false],
                            ['choice_text' => 'Que veut-il et qu’est-ce qui l’empêche de l’obtenir ?', 'is_correct' => true],
                            ['choice_text' => 'Quelle est la couleur habituelle de ses vêtements dans le livre ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Les objectifs et les obstacles d’un personnage permettent de comprendre son rôle dans le conflit et dans l’intrigue.',
                    ],
                    [
                        'question' => 'Quel lien peut exister entre un personnage et le thème d’une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Le parcours du personnage peut illustrer le thème principal', 'is_correct' => true],
                            ['choice_text' => 'Le thème se déduit de la couverture et du titre du livre', 'is_correct' => false],
                            ['choice_text' => 'Le personnage sert à donner la date de l’histoire', 'is_correct' => false],
                            ['choice_text' => 'Le thème est identique pour chaque personnage', 'is_correct' => false],
                        ],
                        'explanation' => 'Les expériences, choix et conflits d’un personnage peuvent donner une forme concrète aux grandes idées du texte.',
                    ],
                ],
            ],
            [
                'title' => 'Ton, registre et effets produits',
                'description' => 'Identifier le ton général d’un passage et comprendre comment le choix des mots influence l’effet produit sur le lecteur.',
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quel ton peut chercher à provoquer le rire ?',
                        'choices' => [
                            ['choice_text' => 'Le ton tragique', 'is_correct' => false],
                            ['choice_text' => 'Le ton comique', 'is_correct' => true],
                            ['choice_text' => 'Le ton administratif', 'is_correct' => false],
                            ['choice_text' => 'Le ton scientifique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ton comique cherche à divertir et à provoquer le rire.',
                    ],
                    [
                        'question' => 'Quel ton est associé à une situation de souffrance, de perte ou de malheur ?',
                        'choices' => [
                            ['choice_text' => 'Le ton humoristique', 'is_correct' => false],
                            ['choice_text' => 'Le ton publicitaire', 'is_correct' => false],
                            ['choice_text' => 'Le ton informatif', 'is_correct' => false],
                            ['choice_text' => 'Le ton tragique', 'is_correct' => true],
                        ],
                        'explanation' => 'Le ton tragique met en avant la souffrance, le destin, la perte ou une situation difficile sans issue simple.',
                    ],
                    [
                        'question' => 'Lisez : « La pluie frappait les vitres, et la maison semblait retenir son souffle. » Quel effet domine ?',
                        'choices' => [
                            ['choice_text' => 'Une atmosphère inquiétante ou tendue', 'is_correct' => true],
                            ['choice_text' => 'Une ambiance joyeuse de fête', 'is_correct' => false],
                            ['choice_text' => 'Une atmosphère calme, reposante et pleine de douceur', 'is_correct' => false],
                            ['choice_text' => 'Une ambiance drôle et légère', 'is_correct' => false],
                        ],
                        'explanation' => 'Les images de pluie, de silence et de maison « retenant son souffle » créent une impression de tension ou de mystère.',
                    ],
                    [
                        'question' => 'Quel registre de langue emploie des mots d’argot et des expressions de la conversation entre amis ?',
                        'choices' => [
                            ['choice_text' => 'Le registre soutenu', 'is_correct' => false],
                            ['choice_text' => 'Le registre familier', 'is_correct' => true],
                            ['choice_text' => 'Le registre administratif', 'is_correct' => false],
                            ['choice_text' => 'Le registre technique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le registre familier est celui de la conversation détendue entre proches.',
                    ],
                    [
                        'question' => 'Pourquoi le choix du registre est-il important dans une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Il sert à compter le nombre de mots utilisés dans le texte', 'is_correct' => false],
                            ['choice_text' => 'Il indique la date de publication de l’œuvre et son éditeur', 'is_correct' => false],
                            ['choice_text' => 'Il fixe le nombre de personnages du récit', 'is_correct' => false],
                            ['choice_text' => 'Il peut caractériser un personnage ou créer un effet', 'is_correct' => true],
                        ],
                        'explanation' => 'La manière de parler peut renseigner sur un personnage, son milieu, sa relation avec les autres ou l’effet recherché.',
                    ],
                    [
                        'question' => 'Dans une lettre pleine de joie, on lit : « Ah ! Quelle merveilleuse journée ! Tout est parfait ! » Quel ton domine ?',
                        'choices' => [
                            ['choice_text' => 'Un ton désespéré', 'is_correct' => false],
                            ['choice_text' => 'Un ton enthousiaste ou joyeux', 'is_correct' => true],
                            ['choice_text' => 'Un ton menaçant', 'is_correct' => false],
                            ['choice_text' => 'Un ton triste et résigné', 'is_correct' => false],
                        ],
                        'explanation' => 'Les exclamations et le vocabulaire positif créent une impression d’enthousiasme.',
                    ],
                    [
                        'question' => 'Quel effet le point d’exclamation peut-il produire dans un texte ?',
                        'choices' => [
                            ['choice_text' => 'Marquer la fin d’une liste de mots dans une phrase', 'is_correct' => false],
                            ['choice_text' => 'Poser une question au lecteur', 'is_correct' => false],
                            ['choice_text' => 'Renforcer une émotion, une surprise ou une insistance', 'is_correct' => true],
                            ['choice_text' => 'Annoncer un changement de narrateur dans le récit', 'is_correct' => false],
                        ],
                        'explanation' => 'Le point d’exclamation peut renforcer la colère, la joie, la surprise ou une injonction selon le contexte.',
                    ],
                    [
                        'question' => 'Dans un texte qui raconte un effort difficile, on lit : « Quel courage… avancer encore après tout cela. » Quel sentiment est exprimé ?',
                        'choices' => [
                            ['choice_text' => 'L’admiration', 'is_correct' => true],
                            ['choice_text' => 'La colère', 'is_correct' => false],
                            ['choice_text' => 'La peur', 'is_correct' => false],
                            ['choice_text' => 'L’indifférence', 'is_correct' => false],
                        ],
                        'explanation' => 'Le narrateur salue le courage de celui qui continue d’avancer : il exprime son admiration.',
                    ],
                    [
                        'question' => 'Qu’est-ce que l’ironie peut faire dans un texte ?',
                        'choices' => [
                            ['choice_text' => 'Décrire un lieu avec beaucoup de détails et de précision', 'is_correct' => false],
                            ['choice_text' => 'Répéter un mot au début de chaque phrase', 'is_correct' => false],
                            ['choice_text' => 'Exagérer une idée pour la rendre plus forte', 'is_correct' => false],
                            ['choice_text' => 'Dire une chose pour faire comprendre le contraire ou critiquer', 'is_correct' => true],
                        ],
                        'explanation' => 'L’ironie repose souvent sur un décalage entre ce qui est dit et ce que le contexte permet de comprendre, parfois pour critiquer.',
                    ],
                    [
                        'question' => 'Un personnage dit « Quelle belle journée ! » sous une pluie glaciale. Pourquoi faut-il regarder le contexte pour trouver le ton ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le ton se lit dans la dernière phrase du texte entier', 'is_correct' => false],
                            ['choice_text' => 'Parce que le contexte change le nombre de mots', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un même mot change d’effet selon la situation', 'is_correct' => true],
                            ['choice_text' => 'Parce que chaque adjectif a un sens fixe', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ton dépend du choix des mots, de la situation, du narrateur et des relations entre les éléments du passage.',
                    ],
                    [
                        'question' => 'Quel élément peut contribuer à créer une atmosphère sombre ?',
                        'choices' => [
                            ['choice_text' => 'Des mots qui évoquent la fête, les rires et la joie de vivre', 'is_correct' => false],
                            ['choice_text' => 'Des descriptions de paysages ensoleillés', 'is_correct' => false],
                            ['choice_text' => 'Un vocabulaire lié à l’obscurité, au silence ou à la peur', 'is_correct' => true],
                            ['choice_text' => 'Des phrases courtes et comiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ lexical et les images associés à l’obscurité, au silence ou à la peur peuvent construire une atmosphère sombre.',
                    ],
                ],
            ],
            [
                'title' => 'Structure et interprétation d’un passage',
                'description' => 'Analyser la progression d’un extrait, relier les éléments du texte et construire une interprétation simple.',
                'duration' => 27,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Lisez : « D’abord, il hésita. Puis il ouvrit la lettre. Enfin, son visage changea. » Que montre cette structure ?',
                        'choices' => [
                            ['choice_text' => 'Une progression en plusieurs étapes', 'is_correct' => true],
                            ['choice_text' => 'Une répétition sans évolution d’une même action', 'is_correct' => false],
                            ['choice_text' => 'Une description sans action', 'is_correct' => false],
                            ['choice_text' => 'Un dialogue théâtral', 'is_correct' => false],
                        ],
                        'explanation' => 'Les marqueurs « d’abord », « puis » et « enfin » organisent clairement une suite d’actions et une évolution.',
                    ],
                    [
                        'question' => 'À quoi sert-il d’analyser l’ordre des événements dans un passage ?',
                        'choices' => [
                            ['choice_text' => 'À savoir combien de personnages interviennent dans le passage', 'is_correct' => false],
                            ['choice_text' => 'À deviner la fin sans lire le texte', 'is_correct' => false],
                            ['choice_text' => 'À voir comment le texte crée la progression et la tension', 'is_correct' => true],
                            ['choice_text' => 'À remplacer l’étude du vocabulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La manière dont les événements sont présentés peut accélérer le récit, retarder une information ou augmenter la tension.',
                    ],
                    [
                        'question' => 'Lisez : « Elle croyait être seule. Soudain, une voix retentit derrière elle. » Quel effet produit l’arrivée de la voix ?',
                        'choices' => [
                            ['choice_text' => 'Elle change le narrateur du passage et la façon de raconter', 'is_correct' => false],
                            ['choice_text' => 'Elle décrit le lieu en détail', 'is_correct' => false],
                            ['choice_text' => 'Elle crée une surprise et augmente la tension', 'is_correct' => true],
                            ['choice_text' => 'Elle annonce la fin de l’histoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot « soudain » et l’apparition inattendue de la voix créent un effet de surprise et de tension.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une interprétation littéraire ?',
                        'choices' => [
                            ['choice_text' => 'Une opinion personnelle sans lien avec le texte étudié', 'is_correct' => false],
                            ['choice_text' => 'Un résumé de l’histoire page par page', 'is_correct' => false],
                            ['choice_text' => 'Une liste des figures de style trouvées', 'is_correct' => false],
                            ['choice_text' => 'Une explication argumentée du sens ou des effets du texte', 'is_correct' => true],
                        ],
                        'explanation' => 'Une interprétation cherche à expliquer le sens d’un passage en s’appuyant sur des éléments précis du texte.',
                    ],
                    [
                        'question' => 'Quelle démarche est la plus solide pour interpréter un passage ?',
                        'choices' => [
                            ['choice_text' => 'Donner son avis sans citer le texte', 'is_correct' => false],
                            ['choice_text' => 'Observer un élément précis, puis expliquer son effet et son sens', 'is_correct' => true],
                            ['choice_text' => 'Résumer l’histoire en suivant l’ordre des chapitres', 'is_correct' => false],
                            ['choice_text' => 'Choisir l’interprétation qui paraît la plus jolie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne interprétation relie une observation textuelle à une explication du sens ou de l’effet produit.',
                    ],
                    [
                        'question' => 'Lisez : « La porte resta ouverte. Personne n’entra pourtant. » Quel effet peut produire ce détail ?',
                        'choices' => [
                            ['choice_text' => 'Annoncer la fin de l’histoire dès le début du passage', 'is_correct' => false],
                            ['choice_text' => 'Décrire le décor d’une pièce', 'is_correct' => false],
                            ['choice_text' => 'Montrer que le personnage est en colère', 'is_correct' => false],
                            ['choice_text' => 'Créer une attente ou une impression de mystère', 'is_correct' => true],
                        ],
                        'explanation' => 'Une porte ouverte sans personnage qui entre peut susciter l’attente et pousser le lecteur à se demander ce qui va se passer.',
                    ],
                    [
                        'question' => 'Dans une chanson, un refrain revient après chaque couplet. Quel rôle joue-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Il indique le nom de l’auteur', 'is_correct' => false],
                            ['choice_text' => 'Il change le narrateur du passage', 'is_correct' => false],
                            ['choice_text' => 'Il rythme le texte et fait ressortir l’idée principale', 'is_correct' => true],
                            ['choice_text' => 'Il annonce la fin du récit', 'is_correct' => false],
                        ],
                        'explanation' => 'Un refrain qui revient donne du rythme et attire l’attention sur l’idée essentielle.',
                    ],
                    [
                        'question' => 'Lisez : « Il regarda la mer. Il regarda longtemps la mer. Puis il sourit. » Que peut suggérer la répétition ?',
                        'choices' => [
                            ['choice_text' => 'Que la mer tient une place particulière dans son esprit', 'is_correct' => true],
                            ['choice_text' => 'Que la scène est drôle et que le personnage rit de la mer', 'is_correct' => false],
                            ['choice_text' => 'Que le narrateur ne sait plus quoi raconter', 'is_correct' => false],
                            ['choice_text' => 'Que l’histoire se termine avec cette scène', 'is_correct' => false],
                        ],
                        'explanation' => 'La répétition de « la mer » attire l’attention sur cet élément et peut signaler son importance symbolique ou émotionnelle.',
                    ],
                    [
                        'question' => 'Un élève rend un résumé à la place d’une analyse. Quelle différence entre les deux ?',
                        'choices' => [
                            ['choice_text' => 'Le résumé donne l’avis du lecteur, l’analyse raconte l’histoire', 'is_correct' => false],
                            ['choice_text' => 'Le résumé raconte les faits, l’analyse explique comment le texte agit', 'is_correct' => true],
                            ['choice_text' => 'L’analyse recopie les phrases du texte, le résumé les commente', 'is_correct' => false],
                            ['choice_text' => 'Le résumé et l’analyse racontent chacun l’histoire sans la commenter', 'is_correct' => false],
                        ],
                        'explanation' => 'Le résumé restitue les contenus essentiels ; l’analyse s’intéresse aux procédés, aux relations entre les éléments et aux effets ou significations.',
                    ],
                    [
                        'question' => 'Quelle question aide à analyser le rôle d’un objet récurrent ?',
                        'choices' => [
                            ['choice_text' => 'Pourquoi cet objet revient-il et que peut-il représenter ?', 'is_correct' => true],
                            ['choice_text' => 'Quelle est la taille réelle de cet objet dans la vie courante ?', 'is_correct' => false],
                            ['choice_text' => 'Où peut-on acheter cet objet ?', 'is_correct' => false],
                            ['choice_text' => 'Quand cet objet a-t-il été inventé ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La répétition d’un objet peut avoir une valeur narrative, symbolique ou émotionnelle.',
                    ],
                    [
                        'question' => 'Quel élément peut renforcer la tension dans un récit ?',
                        'choices' => [
                            ['choice_text' => 'Donner dès le début la solution du problème', 'is_correct' => false],
                            ['choice_text' => 'Retarder une information importante ou annoncer un danger', 'is_correct' => true],
                            ['choice_text' => 'Raconter les événements dans l’ordre sans pause', 'is_correct' => false],
                            ['choice_text' => 'Décrire longuement un décor calme, sans événement important', 'is_correct' => false],
                        ],
                        'explanation' => 'Le suspense peut naître lorsqu’une information importante est retardée ou lorsqu’un danger est annoncé sans être immédiatement résolu.',
                    ],
                    [
                        'question' => 'Quelle conclusion d’analyse est la plus solide ?',
                        'choices' => [
                            ['choice_text' => 'Le passage est réussi, car il raconte une histoire qui m’a plu et que j’ai bien comprise du début à la fin.', 'is_correct' => false],
                            ['choice_text' => 'Le passage raconte comment le personnage entre dans la pièce, puis découvre une lettre posée sur la table du salon.', 'is_correct' => false],
                            ['choice_text' => 'Le passage utilise des phrases courtes, des verbes d’action, plusieurs personnages différents et un décor précis.', 'is_correct' => false],
                            ['choice_text' => 'Le passage crée une tension progressive en retardant l’information et en limitant le point de vue du personnage.', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette conclusion relie deux observations précises à l’effet produit sur le lecteur, ce qui est le propre d’une analyse.',
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

                foreach ($questionData['choices'] as $choiceIndex => $choice) {
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
