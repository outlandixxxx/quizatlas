<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class LiteraryAnalysisBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'literary-analysis')->firstOrFail();

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
                            ['choice_text' => 'La voix qui raconte l’histoire', 'is_correct' => true],
                            ['choice_text' => 'Le lecteur qui achète le livre', 'is_correct' => false],
                            ['choice_text' => 'L’éditeur du livre', 'is_correct' => false],
                            ['choice_text' => 'Le personnage qui apparaît toujours à la fin', 'is_correct' => false],
                        ],
                        'explanation' => 'Le narrateur est la voix qui raconte les événements du récit. Il peut être un personnage ou être extérieur à l’histoire.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un personnage principal ?',
                        'choices' => [
                            ['choice_text' => 'Un personnage qui occupe une place centrale dans l’histoire', 'is_correct' => true],
                            ['choice_text' => 'Un personnage qui n’apparaît qu’une seule fois', 'is_correct' => false],
                            ['choice_text' => 'L’auteur du texte', 'is_correct' => false],
                            ['choice_text' => 'Le lecteur du récit', 'is_correct' => false],
                        ],
                        'explanation' => 'Le personnage principal joue un rôle central dans l’action et dans le développement de l’histoire.',
                    ],
                    [
                        'question' => 'Qu’appelle-t-on le thème d’une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Une grande idée ou une question développée dans le texte', 'is_correct' => true],
                            ['choice_text' => 'La liste des personnages', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de pages', 'is_correct' => false],
                            ['choice_text' => 'La date de naissance de l’auteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le thème correspond à une grande idée, une question ou une préoccupation centrale comme l’amour, la liberté ou la solitude.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le cadre d’un récit ?',
                        'choices' => [
                            ['choice_text' => 'Le lieu et le moment où se déroulent les événements', 'is_correct' => true],
                            ['choice_text' => 'Le titre du livre uniquement', 'is_correct' => false],
                            ['choice_text' => 'La biographie du lecteur', 'is_correct' => false],
                            ['choice_text' => 'La morale de l’histoire uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cadre indique notamment où et quand l’histoire se déroule.',
                    ],
                    [
                        'question' => 'Que cherche-t-on à identifier lorsqu’on étudie l’intrigue ?',
                        'choices' => [
                            ['choice_text' => 'La manière dont les événements s’enchaînent dans l’histoire', 'is_correct' => true],
                            ['choice_text' => 'Les erreurs d’orthographe uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le prix du livre', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de caractères du titre', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intrigue correspond à l’organisation des événements et des actions qui composent le récit.',
                    ],
                    [
                        'question' => 'Pourquoi étudier les personnages ?',
                        'choices' => [
                            ['choice_text' => 'Pour comprendre leur rôle, leurs relations et leur évolution', 'is_correct' => true],
                            ['choice_text' => 'Pour connaître uniquement leur âge', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer l’étude du texte', 'is_correct' => false],
                            ['choice_text' => 'Pour connaître la vie privée du lecteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les personnages permettent de comprendre les conflits, les relations, les motivations et l’évolution de l’histoire.',
                    ],
                    [
                        'question' => 'Dans un texte littéraire, qu’est-ce qu’une description ?',
                        'choices' => [
                            ['choice_text' => 'Un passage qui présente les caractéristiques d’un lieu, d’une personne ou d’un objet', 'is_correct' => true],
                            ['choice_text' => 'Une conversation obligatoire entre deux personnages', 'is_correct' => false],
                            ['choice_text' => 'Une liste de dates historiques', 'is_correct' => false],
                            ['choice_text' => 'Une conclusion administrative', 'is_correct' => false],
                        ],
                        'explanation' => 'Une description donne des caractéristiques visuelles, physiques, spatiales ou parfois sensorielles.',
                    ],
                    [
                        'question' => 'Quelle question aide à identifier le point de vue dans un récit ?',
                        'choices' => [
                            ['choice_text' => 'Qui voit ou perçoit les événements racontés ?', 'is_correct' => true],
                            ['choice_text' => 'Combien coûte le livre ?', 'is_correct' => false],
                            ['choice_text' => 'Qui a imprimé le livre ?', 'is_correct' => false],
                            ['choice_text' => 'Quel est le nombre de chapitres seulement ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour étudier le point de vue, on cherche notamment quelle conscience ou quel regard organise l’accès aux événements.',
                    ],
                    [
                        'question' => 'Pourquoi le titre d’une œuvre peut-il être intéressant à analyser ?',
                        'choices' => [
                            ['choice_text' => 'Il peut annoncer, résumer ou suggérer un thème important', 'is_correct' => true],
                            ['choice_text' => 'Il donne toujours toute l’intrigue', 'is_correct' => false],
                            ['choice_text' => 'Il remplace l’analyse du texte', 'is_correct' => false],
                            ['choice_text' => 'Il indique toujours la morale finale', 'is_correct' => false],
                        ],
                        'explanation' => 'Un titre peut orienter la lecture et prendre un sens plus riche lorsqu’on connaît l’ensemble de l’œuvre.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un conflit dans un récit ?',
                        'choices' => [
                            ['choice_text' => 'Une opposition entre des personnages, des forces ou des objectifs', 'is_correct' => true],
                            ['choice_text' => 'Une faute de ponctuation', 'is_correct' => false],
                            ['choice_text' => 'Un changement de police d’écriture', 'is_correct' => false],
                            ['choice_text' => 'Une note de bas de page', 'is_correct' => false],
                        ],
                        'explanation' => 'Le conflit crée une tension narrative et peut opposer deux personnages, un personnage et la société, ou encore un personnage à lui-même.',
                    ],
                    [
                        'question' => 'Quelle question est utile pour étudier la fin d’un récit ?',
                        'choices' => [
                            ['choice_text' => 'Qu’est-ce qui change ou se résout à la fin ?', 'is_correct' => true],
                            ['choice_text' => 'Quel est le prix du manuscrit ?', 'is_correct' => false],
                            ['choice_text' => 'Combien de lecteurs ont acheté le livre ?', 'is_correct' => false],
                            ['choice_text' => 'Quel logiciel a servi à imprimer le texte ?', 'is_correct' => false],
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
                        'question' => 'Dans un récit à la première personne, quel pronom est souvent utilisé ?',
                        'choices' => [
                            ['choice_text' => 'Je', 'is_correct' => true],
                            ['choice_text' => 'Ils uniquement', 'is_correct' => false],
                            ['choice_text' => 'Vous uniquement', 'is_correct' => false],
                            ['choice_text' => 'On uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un récit à la première personne utilise souvent « je » ou « nous », car le narrateur parle depuis sa propre position.',
                    ],
                    [
                        'question' => 'Lisez : « Je poussai la porte et entrai dans la maison. J’avais peur de découvrir ce qui se trouvait derrière l’escalier. » Qui raconte ?',
                        'choices' => [
                            ['choice_text' => 'Un narrateur qui participe aux événements', 'is_correct' => true],
                            ['choice_text' => 'Un narrateur totalement extérieur à l’histoire', 'is_correct' => false],
                            ['choice_text' => 'Le lecteur', 'is_correct' => false],
                            ['choice_text' => 'L’auteur comme personne réelle dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'L’emploi de « je » montre que la voix qui raconte fait partie des événements.',
                    ],
                    [
                        'question' => 'Dans une focalisation interne, les informations sont principalement limitées à...',
                        'choices' => [
                            ['choice_text' => 'Ce qu’un personnage perçoit, pense ou sait', 'is_correct' => true],
                            ['choice_text' => 'Tout ce qui existe dans l’univers du récit', 'is_correct' => false],
                            ['choice_text' => 'Les connaissances du lecteur avant la lecture', 'is_correct' => false],
                            ['choice_text' => 'Les informations présentes dans la couverture uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La focalisation interne fait découvrir les événements à travers la perception ou les connaissances d’un personnage.',
                    ],
                    [
                        'question' => 'Quelle phrase correspond le mieux à une focalisation interne ?',
                        'choices' => [
                            ['choice_text' => 'Nadia regarda la porte. Elle se demanda si quelqu’un l’attendait derrière.', 'is_correct' => true],
                            ['choice_text' => 'Nadia entra dans la pièce. Un avion survolait la ville à trois kilomètres de là.', 'is_correct' => false],
                            ['choice_text' => 'Nadia entra. Le lecteur sait tout ce qui va arriver pendant les dix prochaines années.', 'is_correct' => false],
                            ['choice_text' => 'Nadia entra dans la pièce. Son auteur était né à Paris.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le passage donne accès à la réflexion de Nadia, ce qui correspond à une focalisation interne.',
                    ],
                    [
                        'question' => 'Quelle situation correspond à une focalisation externe ?',
                        'choices' => [
                            ['choice_text' => 'Le narrateur décrit ce qu’un personnage fait sans donner directement accès à ses pensées', 'is_correct' => true],
                            ['choice_text' => 'Le narrateur connaît les pensées de tous les personnages', 'is_correct' => false],
                            ['choice_text' => 'Le récit est entièrement raconté par un personnage', 'is_correct' => false],
                            ['choice_text' => 'Le texte ne contient aucun verbe', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une focalisation externe, le narrateur reste en surface et rapporte surtout les actions et les éléments observables.',
                    ],
                    [
                        'question' => 'Que signifie une focalisation zéro ?',
                        'choices' => [
                            ['choice_text' => 'Le narrateur dispose d’informations supérieures à celles d’un seul personnage', 'is_correct' => true],
                            ['choice_text' => 'Le narrateur ne sait absolument rien', 'is_correct' => false],
                            ['choice_text' => 'Le texte n’a pas de narrateur', 'is_correct' => false],
                            ['choice_text' => 'Le récit est forcément à la deuxième personne', 'is_correct' => false],
                        ],
                        'explanation' => 'La focalisation zéro correspond généralement à un narrateur qui en sait plus que les personnages et peut connaître plusieurs consciences ou des événements éloignés.',
                    ],
                    [
                        'question' => 'Lisez : « Paul sourit. Il ignore encore que son frère vient de quitter la ville. » Quelle information montre que le narrateur en sait plus que Paul ?',
                        'choices' => [
                            ['choice_text' => 'Le narrateur sait que le frère a quitté la ville alors que Paul l’ignore', 'is_correct' => true],
                            ['choice_text' => 'Paul sourit', 'is_correct' => false],
                            ['choice_text' => 'Paul a un frère', 'is_correct' => false],
                            ['choice_text' => 'Le texte est au passé', 'is_correct' => false],
                        ],
                        'explanation' => 'Le narrateur possède une information que Paul ne connaît pas encore, ce qui montre un accès supérieur à l’information.',
                    ],
                    [
                        'question' => 'Le narrateur et l’auteur sont-ils toujours exactement la même personne ?',
                        'choices' => [
                            ['choice_text' => 'Non, le narrateur est une voix construite par le texte', 'is_correct' => true],
                            ['choice_text' => 'Oui, obligatoirement dans tous les récits', 'is_correct' => false],
                            ['choice_text' => 'Oui, dès qu’il y a un pronom personnel', 'is_correct' => false],
                            ['choice_text' => 'Non, mais seulement dans la poésie', 'is_correct' => false],
                        ],
                        'explanation' => 'L’auteur est la personne réelle qui écrit l’œuvre, tandis que le narrateur est l’instance narrative construite dans le texte.',
                    ],
                    [
                        'question' => 'Quel indice peut aider à identifier un récit à la première personne ?',
                        'choices' => [
                            ['choice_text' => 'L’utilisation fréquente de pronoms comme « je » ou « nous » pour raconter', 'is_correct' => true],
                            ['choice_text' => 'La présence obligatoire de rimes', 'is_correct' => false],
                            ['choice_text' => 'Un titre très court', 'is_correct' => false],
                            ['choice_text' => 'La longueur du livre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les pronoms de première personne sont un indice important pour reconnaître la position du narrateur.',
                    ],
                    [
                        'question' => 'Pourquoi la focalisation est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'Elle influence les informations auxquelles le lecteur a accès', 'is_correct' => true],
                            ['choice_text' => 'Elle détermine le nombre de pages', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace les personnages', 'is_correct' => false],
                            ['choice_text' => 'Elle indique toujours la période historique', 'is_correct' => false],
                        ],
                        'explanation' => 'La focalisation détermine en partie ce que le lecteur peut savoir, voir ou comprendre à un moment donné.',
                    ],
                    [
                        'question' => 'Lisez : « Je ne savais pas pourquoi elle pleurait, mais je sentais que quelque chose allait mal. » Quelle perspective domine ?',
                        'choices' => [
                            ['choice_text' => 'La perception du narrateur-personnage', 'is_correct' => true],
                            ['choice_text' => 'La connaissance complète de tous les personnages', 'is_correct' => false],
                            ['choice_text' => 'Une description purement extérieure sans perception', 'is_correct' => false],
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
                            ['choice_text' => 'Une comparaison', 'is_correct' => true],
                            ['choice_text' => 'Une personnification', 'is_correct' => false],
                            ['choice_text' => 'Une anaphore', 'is_correct' => false],
                            ['choice_text' => 'Une litote', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence de « comme » établit une comparaison entre l’homme et le lion.',
                    ],
                    [
                        'question' => 'Quelle figure attribue une caractéristique humaine à un objet ou à un élément de la nature ?',
                        'choices' => [
                            ['choice_text' => 'La personnification', 'is_correct' => true],
                            ['choice_text' => 'La comparaison', 'is_correct' => false],
                            ['choice_text' => 'La répétition', 'is_correct' => false],
                            ['choice_text' => 'La rime', 'is_correct' => false],
                        ],
                        'explanation' => 'La personnification consiste notamment à donner des comportements ou caractéristiques humaines à ce qui ne l’est pas.',
                    ],
                    [
                        'question' => 'Quelle figure de style trouve-t-on dans « Le vent murmure à travers les arbres » ?',
                        'choices' => [
                            ['choice_text' => 'Une personnification', 'is_correct' => true],
                            ['choice_text' => 'Une comparaison', 'is_correct' => false],
                            ['choice_text' => 'Une question rhétorique', 'is_correct' => false],
                            ['choice_text' => 'Une hyperbole', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe « murmure » donne au vent une action humaine.',
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’une métaphore ?',
                        'choices' => [
                            ['choice_text' => 'Rapprocher deux réalités sans utiliser explicitement un outil de comparaison', 'is_correct' => true],
                            ['choice_text' => 'Poser obligatoirement une question', 'is_correct' => false],
                            ['choice_text' => 'Donner une date historique', 'is_correct' => false],
                            ['choice_text' => 'Présenter une définition scientifique', 'is_correct' => false],
                        ],
                        'explanation' => 'La métaphore crée un rapprochement imagé entre deux réalités sans forcément employer « comme » ou un autre outil de comparaison.',
                    ],
                    [
                        'question' => 'Dans « Cette nouvelle est un rayon de soleil dans ma journée », quel procédé est utilisé ?',
                        'choices' => [
                            ['choice_text' => 'Une métaphore', 'is_correct' => true],
                            ['choice_text' => 'Une négation', 'is_correct' => false],
                            ['choice_text' => 'Une comparaison introduite par « comme »', 'is_correct' => false],
                            ['choice_text' => 'Une question', 'is_correct' => false],
                        ],
                        'explanation' => 'La nouvelle est directement présentée comme un « rayon de soleil » sans l’outil « comme » : il s’agit d’une métaphore.',
                    ],
                    [
                        'question' => 'Quelle figure repose sur la répétition d’un même mot ou groupe de mots au début de plusieurs phrases ou vers ?',
                        'choices' => [
                            ['choice_text' => 'L’anaphore', 'is_correct' => true],
                            ['choice_text' => 'La comparaison', 'is_correct' => false],
                            ['choice_text' => 'La personnification', 'is_correct' => false],
                            ['choice_text' => 'La description', 'is_correct' => false],
                        ],
                        'explanation' => 'L’anaphore répète un même élément au début de plusieurs unités successives afin de créer un effet d’insistance ou de rythme.',
                    ],
                    [
                        'question' => 'Lisez : « Toujours il attend. Toujours il espère. Toujours il revient. » Quelle figure reconnaît-on ?',
                        'choices' => [
                            ['choice_text' => 'Une anaphore', 'is_correct' => true],
                            ['choice_text' => 'Une métaphore', 'is_correct' => false],
                            ['choice_text' => 'Une comparaison', 'is_correct' => false],
                            ['choice_text' => 'Une personnification', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot « Toujours » est répété au début de plusieurs phrases : c’est une anaphore.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une hyperbole ?',
                        'choices' => [
                            ['choice_text' => 'Une exagération destinée à produire un effet', 'is_correct' => true],
                            ['choice_text' => 'Une question posée au lecteur', 'is_correct' => false],
                            ['choice_text' => 'Une description neutre d’un lieu', 'is_correct' => false],
                            ['choice_text' => 'Une répétition au début de chaque phrase', 'is_correct' => false],
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
                            ['choice_text' => 'Supprimer automatiquement le sens du passage', 'is_correct' => false],
                            ['choice_text' => 'Transformer toujours le récit en dialogue', 'is_correct' => false],
                            ['choice_text' => 'Donner forcément une information historique', 'is_correct' => false],
                        ],
                        'explanation' => 'La répétition attire l’attention sur un élément et peut renforcer l’émotion, l’idée ou le rythme du passage.',
                    ],
                    [
                        'question' => 'Pourquoi analyser une figure de style plutôt que simplement la nommer ?',
                        'choices' => [
                            ['choice_text' => 'Pour comprendre l’effet et le sens qu’elle produit dans le passage', 'is_correct' => true],
                            ['choice_text' => 'Pour mémoriser uniquement son nom', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer l’étude du contexte', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter de lire le reste du texte', 'is_correct' => false],
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
                            ['choice_text' => 'Elles peuvent créer des conflits, des alliances et faire évoluer l’intrigue', 'is_correct' => true],
                            ['choice_text' => 'Elles servent uniquement à compter les personnages', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent toujours le thème', 'is_correct' => false],
                            ['choice_text' => 'Elles donnent le nombre de pages', 'is_correct' => false],
                        ],
                        'explanation' => 'Les relations entre les personnages peuvent faire avancer l’action et révéler leurs motivations ou leurs changements.',
                    ],
                    [
                        'question' => 'Lisez : « Au début, Sami refuse de quitter son village. À la fin, il part seul pour découvrir le monde. » Que peut-on analyser ici ?',
                        'choices' => [
                            ['choice_text' => 'L’évolution du personnage', 'is_correct' => true],
                            ['choice_text' => 'La ponctuation uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de chapitres', 'is_correct' => false],
                            ['choice_text' => 'La biographie de l’auteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le personnage change entre le début et la fin : son attitude face au départ évolue.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un symbole dans une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Un élément concret qui peut renvoyer à une idée ou à un sens plus large', 'is_correct' => true],
                            ['choice_text' => 'Un personnage qui porte toujours un nom réel', 'is_correct' => false],
                            ['choice_text' => 'Une faute volontaire de grammaire', 'is_correct' => false],
                            ['choice_text' => 'Un titre qui ne signifie rien', 'is_correct' => false],
                        ],
                        'explanation' => 'Un objet, une couleur, un lieu ou une action peut prendre une valeur symbolique selon le contexte du texte.',
                    ],
                    [
                        'question' => 'Dans de nombreux récits, que peut symboliser la lumière ?',
                        'choices' => [
                            ['choice_text' => 'L’espoir, la connaissance ou un nouveau départ selon le contexte', 'is_correct' => true],
                            ['choice_text' => 'Toujours la tristesse', 'is_correct' => false],
                            ['choice_text' => 'Toujours la colère', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le passage du temps', 'is_correct' => false],
                        ],
                        'explanation' => 'La lumière peut symboliser l’espoir ou la compréhension, mais sa signification dépend toujours du contexte de l’œuvre.',
                    ],
                    [
                        'question' => 'Lisez : « Chaque soir, elle regardait la vieille horloge arrêtée depuis la mort de son père. » Quelle interprétation est possible ?',
                        'choices' => [
                            ['choice_text' => 'L’horloge peut symboliser un passé auquel le personnage reste attaché', 'is_correct' => true],
                            ['choice_text' => 'L’horloge signifie forcément qu’il est midi', 'is_correct' => false],
                            ['choice_text' => 'L’horloge prouve que le récit est comique', 'is_correct' => false],
                            ['choice_text' => 'L’horloge n’a jamais aucune fonction dans un texte littéraire', 'is_correct' => false],
                        ],
                        'explanation' => 'L’association de l’horloge arrêtée avec la mort du père peut suggérer un attachement au passé ou un temps vécu comme figé.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un personnage secondaire ?',
                        'choices' => [
                            ['choice_text' => 'Un personnage qui soutient, accompagne ou influence l’action sans être au centre du récit', 'is_correct' => true],
                            ['choice_text' => 'Un personnage toujours absent', 'is_correct' => false],
                            ['choice_text' => 'L’auteur du texte', 'is_correct' => false],
                            ['choice_text' => 'Le narrateur dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Un personnage secondaire n’est pas nécessairement peu important : il peut jouer un rôle essentiel sans être au centre de l’histoire.',
                    ],
                    [
                        'question' => 'Quel élément peut révéler le caractère d’un personnage ?',
                        'choices' => [
                            ['choice_text' => 'Ses paroles, ses actions et ses réactions', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la longueur de son nom', 'is_correct' => false],
                            ['choice_text' => 'Le numéro de page où il apparaît', 'is_correct' => false],
                            ['choice_text' => 'La couleur de la couverture', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte construit souvent le caractère d’un personnage à travers ce qu’il dit, ce qu’il fait et la manière dont il réagit.',
                    ],
                    [
                        'question' => 'Quel thème peut être déduit d’un récit centré sur un personnage qui cherche constamment sa liberté ?',
                        'choices' => [
                            ['choice_text' => 'La liberté', 'is_correct' => true],
                            ['choice_text' => 'La cuisine', 'is_correct' => false],
                            ['choice_text' => 'La météo', 'is_correct' => false],
                            ['choice_text' => 'La géométrie', 'is_correct' => false],
                        ],
                        'explanation' => 'La recherche de l’autonomie ou de l’émancipation peut constituer un thème central lié à la liberté.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter de donner automatiquement une signification à un symbole ?',
                        'choices' => [
                            ['choice_text' => 'Parce que sa signification dépend du contexte et de l’ensemble de l’œuvre', 'is_correct' => true],
                            ['choice_text' => 'Parce que les symboles n’existent jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce que chaque symbole signifie toujours exactement la même chose', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un symbole est uniquement décoratif', 'is_correct' => false],
                        ],
                        'explanation' => 'Un même élément peut prendre des significations différentes selon le contexte, les personnages et les thèmes du texte.',
                    ],
                    [
                        'question' => 'Quelle question aide à analyser un personnage ?',
                        'choices' => [
                            ['choice_text' => 'Que veut-il et qu’est-ce qui l’empêche d’atteindre son objectif ?', 'is_correct' => true],
                            ['choice_text' => 'Combien coûte le livre ?', 'is_correct' => false],
                            ['choice_text' => 'Quelle est la taille de la couverture ?', 'is_correct' => false],
                            ['choice_text' => 'Quel est le nombre de paragraphes du manuel scolaire ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Les objectifs et les obstacles d’un personnage permettent de comprendre son rôle dans le conflit et dans l’intrigue.',
                    ],
                    [
                        'question' => 'Quel lien peut exister entre un personnage et le thème d’une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Le parcours du personnage peut illustrer ou développer le thème principal', 'is_correct' => true],
                            ['choice_text' => 'Le personnage n’a jamais de rapport avec les thèmes', 'is_correct' => false],
                            ['choice_text' => 'Le thème dépend uniquement du titre', 'is_correct' => false],
                            ['choice_text' => 'Le thème est toujours annoncé par le nom du personnage', 'is_correct' => false],
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
                            ['choice_text' => 'Le ton comique', 'is_correct' => true],
                            ['choice_text' => 'Le ton tragique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le ton administratif', 'is_correct' => false],
                            ['choice_text' => 'Le ton scientifique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ton comique cherche notamment à divertir et à provoquer le rire.',
                    ],
                    [
                        'question' => 'Quel ton est associé à une situation de souffrance, de perte ou de malheur ?',
                        'choices' => [
                            ['choice_text' => 'Le ton tragique', 'is_correct' => true],
                            ['choice_text' => 'Le ton comique', 'is_correct' => false],
                            ['choice_text' => 'Le ton publicitaire', 'is_correct' => false],
                            ['choice_text' => 'Le ton documentaire uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ton tragique met en avant la souffrance, le destin, la perte ou une situation difficile sans issue simple.',
                    ],
                    [
                        'question' => 'Lisez : « La pluie frappait les vitres, et la maison semblait retenir son souffle. » Quel effet domine ?',
                        'choices' => [
                            ['choice_text' => 'Une atmosphère inquiétante ou tendue', 'is_correct' => true],
                            ['choice_text' => 'Une ambiance joyeuse de fête', 'is_correct' => false],
                            ['choice_text' => 'Une ambiance purement administrative', 'is_correct' => false],
                            ['choice_text' => 'Une atmosphère de publicité commerciale', 'is_correct' => false],
                        ],
                        'explanation' => 'Les images de pluie, de silence et de maison « retenant son souffle » créent une impression de tension ou de mystère.',
                    ],
                    [
                        'question' => 'Quel registre correspond généralement à un texte très proche de la conversation quotidienne ?',
                        'choices' => [
                            ['choice_text' => 'Le registre familier', 'is_correct' => true],
                            ['choice_text' => 'Le registre soutenu uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le registre administratif uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le registre scientifique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le registre familier utilise des formulations proches de la langue courante et de la conversation.',
                    ],
                    [
                        'question' => 'Pourquoi le choix du registre est-il important dans une œuvre ?',
                        'choices' => [
                            ['choice_text' => 'Il peut caractériser un personnage ou créer un effet particulier', 'is_correct' => true],
                            ['choice_text' => 'Il sert uniquement à compter les mots', 'is_correct' => false],
                            ['choice_text' => 'Il donne toujours la date de publication', 'is_correct' => false],
                            ['choice_text' => 'Il empêche toute interprétation', 'is_correct' => false],
                        ],
                        'explanation' => 'La manière de parler peut renseigner sur un personnage, son milieu, sa relation avec les autres ou l’effet recherché.',
                    ],
                    [
                        'question' => 'Lisez : « Ah ! Quelle merveilleuse journée ! Tout est parfait ! » Quel ton semble dominant ?',
                        'choices' => [
                            ['choice_text' => 'Un ton enthousiaste ou joyeux', 'is_correct' => true],
                            ['choice_text' => 'Un ton désespéré', 'is_correct' => false],
                            ['choice_text' => 'Un ton menaçant', 'is_correct' => false],
                            ['choice_text' => 'Un ton administratif', 'is_correct' => false],
                        ],
                        'explanation' => 'Les exclamations et le vocabulaire positif créent une impression d’enthousiasme.',
                    ],
                    [
                        'question' => 'Quel effet le point d’exclamation peut-il produire dans un texte ?',
                        'choices' => [
                            ['choice_text' => 'Renforcer une émotion, une surprise ou une insistance', 'is_correct' => true],
                            ['choice_text' => 'Indiquer obligatoirement une question', 'is_correct' => false],
                            ['choice_text' => 'Créer toujours un ton triste', 'is_correct' => false],
                            ['choice_text' => 'Signaler une date', 'is_correct' => false],
                        ],
                        'explanation' => 'Le point d’exclamation peut renforcer la colère, la joie, la surprise ou une injonction selon le contexte.',
                    ],
                    [
                        'question' => 'Lisez : « Quel courage… avancer encore après tout cela. » Quel ton peut être suggéré selon le contexte ?',
                        'choices' => [
                            ['choice_text' => 'L’admiration ou l’émotion', 'is_correct' => true],
                            ['choice_text' => 'La publicité', 'is_correct' => false],
                            ['choice_text' => 'La neutralité scientifique absolue', 'is_correct' => false],
                            ['choice_text' => 'La description météorologique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expression met en valeur le courage et peut transmettre une émotion admirative.',
                    ],
                    [
                        'question' => 'Qu’est-ce que l’ironie peut faire dans un texte ?',
                        'choices' => [
                            ['choice_text' => 'Dire ou suggérer quelque chose de manière à faire comprendre un sens différent ou critique', 'is_correct' => true],
                            ['choice_text' => 'Décrire uniquement un lieu', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les personnages', 'is_correct' => false],
                            ['choice_text' => 'Donner toujours une information scientifique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ironie repose souvent sur un décalage entre ce qui est dit et ce que le contexte permet de comprendre, parfois pour critiquer.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il regarder le contexte pour identifier le ton ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un même mot peut produire des effets différents selon la situation', 'is_correct' => true],
                            ['choice_text' => 'Parce que le ton dépend uniquement du titre', 'is_correct' => false],
                            ['choice_text' => 'Parce que les textes n’ont jamais de contexte', 'is_correct' => false],
                            ['choice_text' => 'Parce que chaque adjectif a une seule interprétation possible', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ton dépend du choix des mots, de la situation, du narrateur et des relations entre les éléments du passage.',
                    ],
                    [
                        'question' => 'Quel élément peut contribuer à créer une atmosphère sombre ?',
                        'choices' => [
                            ['choice_text' => 'Un vocabulaire lié à l’obscurité, au silence ou à la peur', 'is_correct' => true],
                            ['choice_text' => 'Uniquement des noms de couleurs vives', 'is_correct' => false],
                            ['choice_text' => 'Une liste de chiffres sans contexte', 'is_correct' => false],
                            ['choice_text' => 'Un ton toujours humoristique', 'is_correct' => false],
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
                            ['choice_text' => 'Une répétition sans évolution', 'is_correct' => false],
                            ['choice_text' => 'Une description sans action', 'is_correct' => false],
                            ['choice_text' => 'Un dialogue théâtral', 'is_correct' => false],
                        ],
                        'explanation' => 'Les marqueurs « d’abord », « puis » et « enfin » organisent clairement une suite d’actions et une évolution.',
                    ],
                    [
                        'question' => 'Pourquoi analyser l’ordre des événements ?',
                        'choices' => [
                            ['choice_text' => 'Pour comprendre comment le texte crée la progression et la tension', 'is_correct' => true],
                            ['choice_text' => 'Pour connaître le prix du livre', 'is_correct' => false],
                            ['choice_text' => 'Pour compter les personnages uniquement', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer l’analyse des mots', 'is_correct' => false],
                        ],
                        'explanation' => 'La manière dont les événements sont présentés peut accélérer le récit, retarder une information ou augmenter la tension.',
                    ],
                    [
                        'question' => 'Lisez : « Elle croyait être seule. Soudain, une voix retentit derrière elle. » Quel effet produit l’arrivée de la voix ?',
                        'choices' => [
                            ['choice_text' => 'Elle crée une surprise et augmente la tension', 'is_correct' => true],
                            ['choice_text' => 'Elle termine automatiquement le récit', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme le texte en poème', 'is_correct' => false],
                            ['choice_text' => 'Elle donne uniquement une information historique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot « soudain » et l’apparition inattendue de la voix créent un effet de surprise et de tension.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une interprétation littéraire ?',
                        'choices' => [
                            ['choice_text' => 'Une explication argumentée du sens ou des effets du texte', 'is_correct' => true],
                            ['choice_text' => 'Une opinion sans aucun lien avec le texte', 'is_correct' => false],
                            ['choice_text' => 'Un résumé qui répète chaque phrase', 'is_correct' => false],
                            ['choice_text' => 'Une simple liste d’auteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une interprétation cherche à expliquer le sens d’un passage en s’appuyant sur des éléments précis du texte.',
                    ],
                    [
                        'question' => 'Quelle démarche est la plus solide pour interpréter un passage ?',
                        'choices' => [
                            ['choice_text' => 'Observer un élément précis puis expliquer son effet et son lien avec le sens du passage', 'is_correct' => true],
                            ['choice_text' => 'Donner une opinion sans citer aucun élément du texte', 'is_correct' => false],
                            ['choice_text' => 'Résumer l’histoire sans analyse', 'is_correct' => false],
                            ['choice_text' => 'Choisir une interprétation uniquement parce qu’elle semble jolie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne interprétation relie une observation textuelle à une explication du sens ou de l’effet produit.',
                    ],
                    [
                        'question' => 'Lisez : « La porte resta ouverte. Personne n’entra pourtant. » Quel effet peut produire ce détail ?',
                        'choices' => [
                            ['choice_text' => 'Créer une attente ou une impression de mystère', 'is_correct' => true],
                            ['choice_text' => 'Résoudre toutes les questions de l’histoire', 'is_correct' => false],
                            ['choice_text' => 'Présenter une information scientifique', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute tension', 'is_correct' => false],
                        ],
                        'explanation' => 'Une porte ouverte sans personnage qui entre peut susciter l’attente et pousser le lecteur à se demander ce qui va se passer.',
                    ],
                    [
                        'question' => 'Quel rôle une répétition importante peut-elle jouer dans la structure d’un passage ?',
                        'choices' => [
                            ['choice_text' => 'Mettre en relief une idée, une émotion ou un motif', 'is_correct' => true],
                            ['choice_text' => 'Changer obligatoirement le genre du texte', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le thème principal', 'is_correct' => false],
                            ['choice_text' => 'Indiquer automatiquement l’âge du narrateur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un motif répété peut devenir important dans la construction du sens et attirer l’attention du lecteur.',
                    ],
                    [
                        'question' => 'Lisez : « Il regarda la mer. Il regarda longtemps la mer. Puis il sourit. » Que peut suggérer la répétition ?',
                        'choices' => [
                            ['choice_text' => 'Que la mer occupe une place particulière dans son état d’esprit', 'is_correct' => true],
                            ['choice_text' => 'Que la scène est forcément comique', 'is_correct' => false],
                            ['choice_text' => 'Que le personnage déteste la mer', 'is_correct' => false],
                            ['choice_text' => 'Que le récit change automatiquement de narrateur', 'is_correct' => false],
                        ],
                        'explanation' => 'La répétition de « la mer » attire l’attention sur cet élément et peut signaler son importance symbolique ou émotionnelle.',
                    ],
                    [
                        'question' => 'Pourquoi distinguer un résumé d’une analyse ?',
                        'choices' => [
                            ['choice_text' => 'Le résumé raconte ce qui se passe, tandis que l’analyse explique comment et pourquoi le texte produit certains effets', 'is_correct' => true],
                            ['choice_text' => 'Le résumé est toujours plus long que l’analyse', 'is_correct' => false],
                            ['choice_text' => 'L’analyse ne doit jamais parler du texte', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont exactement identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Le résumé restitue les contenus essentiels ; l’analyse s’intéresse aux procédés, aux relations entre les éléments et aux effets ou significations.',
                    ],
                    [
                        'question' => 'Quelle question aide à analyser le rôle d’un objet récurrent ?',
                        'choices' => [
                            ['choice_text' => 'Pourquoi cet objet revient-il et que peut-il représenter ?', 'is_correct' => true],
                            ['choice_text' => 'Quel est son prix réel dans le monde ?', 'is_correct' => false],
                            ['choice_text' => 'Qui l’a fabriqué dans la vraie vie ?', 'is_correct' => false],
                            ['choice_text' => 'Combien de pages contient le passage ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La répétition d’un objet peut avoir une valeur narrative, symbolique ou émotionnelle.',
                    ],
                    [
                        'question' => 'Quel élément peut renforcer la tension dans un récit ?',
                        'choices' => [
                            ['choice_text' => 'Retarder une information importante ou annoncer un danger', 'is_correct' => true],
                            ['choice_text' => 'Donner immédiatement toutes les réponses', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les conflits', 'is_correct' => false],
                            ['choice_text' => 'Changer systématiquement de sujet', 'is_correct' => false],
                        ],
                        'explanation' => 'Le suspense peut naître lorsqu’une information importante est retardée ou lorsqu’un danger est annoncé sans être immédiatement résolu.',
                    ],
                    [
                        'question' => 'Quelle conclusion d’analyse est la plus solide ?',
                        'choices' => [
                            ['choice_text' => 'Le passage crée une tension progressive grâce au retard de l’information et au point de vue limité du personnage.', 'is_correct' => true],
                            ['choice_text' => 'Le passage est bien parce que je l’aime.', 'is_correct' => false],
                            ['choice_text' => 'Le texte est un texte avec des mots.', 'is_correct' => false],
                            ['choice_text' => 'C’est intéressant, fin.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première réponse relie deux observations précises à un effet produit sur le lecteur, ce qui correspond à une analyse.',
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
