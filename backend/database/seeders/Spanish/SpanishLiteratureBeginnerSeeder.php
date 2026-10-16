<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishLiteratureBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'spanish-literature')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les bases de la littérature espagnole',
                'description' => 'Apprends le vocabulaire littéraire de base, les genres et les concepts utilisés pour parler de la littérature en langue espagnole.',
                'duration' => 18,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Que signifie « literatura » en français ?',
                        'choices' => [
                            ['choice_text' => 'grammaire', 'is_correct' => false],
                            ['choice_text' => 'bibliothèque', 'is_correct' => false],
                            ['choice_text' => 'littérature', 'is_correct' => true],
                            ['choice_text' => 'histoire', 'is_correct' => false],
                        ],
                        'explanation' => '« Literatura » signifie littérature : des œuvres créatives écrites ou orales comme les poèmes, les récits et les romans.',
                    ],
                    [
                        'question' => 'Quel genre raconte normalement une histoire fictive en prose ?',
                        'choices' => [
                            ['choice_text' => 'la poesía', 'is_correct' => false],
                            ['choice_text' => 'la gramática', 'is_correct' => false],
                            ['choice_text' => 'la biografía', 'is_correct' => false],
                            ['choice_text' => 'la narrativa', 'is_correct' => true],
                        ],
                        'explanation' => 'La littérature narrative raconte une histoire, généralement en prose et à travers des personnages.',
                    ],
                    [
                        'question' => 'Quelle forme littéraire est habituellement organisée en vers et peut jouer sur le rythme ou la rime ?',
                        'choices' => [
                            ['choice_text' => 'la poesía', 'is_correct' => true],
                            ['choice_text' => 'la novela', 'is_correct' => false],
                            ['choice_text' => 'el ensayo', 'is_correct' => false],
                            ['choice_text' => 'la biografía', 'is_correct' => false],
                        ],
                        'explanation' => 'La poésie est généralement disposée en vers et peut utiliser le rythme, la métrique ou la rime.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une « novela » ?',
                        'choices' => [
                            ['choice_text' => 'un poème', 'is_correct' => false],
                            ['choice_text' => 'un roman', 'is_correct' => true],
                            ['choice_text' => 'un dictionnaire', 'is_correct' => false],
                            ['choice_text' => 'un article de journal', 'is_correct' => false],
                        ],
                        'explanation' => 'Une novela est une œuvre de fiction en prose de longueur conséquente, généralement plus longue qu’un récit court.',
                    ],
                    [
                        'question' => 'Que signifie généralement « cuento » en espagnol littéraire ?',
                        'choices' => [
                            ['choice_text' => 'un chapitre', 'is_correct' => false],
                            ['choice_text' => 'un dramaturge', 'is_correct' => false],
                            ['choice_text' => 'un poème', 'is_correct' => false],
                            ['choice_text' => 'une nouvelle', 'is_correct' => true],
                        ],
                        'explanation' => 'Un cuento est généralement un récit de fiction court.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un « personaje » dans une histoire ?',
                        'choices' => [
                            ['choice_text' => 'le cadre', 'is_correct' => false],
                            ['choice_text' => 'un personnage', 'is_correct' => true],
                            ['choice_text' => 'le titre', 'is_correct' => false],
                            ['choice_text' => 'le narrateur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un personaje est une personne, un animal ou une autre figure qui prend part à une histoire.',
                    ],
                    [
                        'question' => 'Que signifie « autor » ?',
                        'choices' => [
                            ['choice_text' => 'auteur', 'is_correct' => true],
                            ['choice_text' => 'lecteur', 'is_correct' => false],
                            ['choice_text' => 'personnage', 'is_correct' => false],
                            ['choice_text' => 'éditeur', 'is_correct' => false],
                        ],
                        'explanation' => 'L’autor est la personne qui crée ou écrit une œuvre littéraire.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le « título » d’une œuvre littéraire ?',
                        'choices' => [
                            ['choice_text' => 'sa fin', 'is_correct' => false],
                            ['choice_text' => 'son personnage principal', 'is_correct' => false],
                            ['choice_text' => 'son titre', 'is_correct' => true],
                            ['choice_text' => 'son cadre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le título est le nom donné à un livre, un poème, un récit ou une autre œuvre.',
                    ],
                    [
                        'question' => 'Quel mot désigne le lieu et les circonstances où se déroule une histoire ?',
                        'choices' => [
                            ['choice_text' => 'el personaje', 'is_correct' => false],
                            ['choice_text' => 'el capítulo', 'is_correct' => false],
                            ['choice_text' => 'el título', 'is_correct' => false],
                            ['choice_text' => 'el escenario', 'is_correct' => true],
                        ],
                        'explanation' => 'L’escenario désigne le cadre ou l’environnement dans lequel se déroulent les événements.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le « tema » dans une analyse littéraire ?',
                        'choices' => [
                            ['choice_text' => 'le thème ou le sujet principal', 'is_correct' => true],
                            ['choice_text' => 'le nom de l’auteur', 'is_correct' => false],
                            ['choice_text' => 'le numéro de page', 'is_correct' => false],
                            ['choice_text' => 'la couverture du livre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le tema est le sujet ou l’idée centrale explorée dans une œuvre littéraire.',
                    ],
                    [
                        'question' => 'Quel mot signifie « lecteur » en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'autor', 'is_correct' => false],
                            ['choice_text' => 'personaje', 'is_correct' => false],
                            ['choice_text' => 'lector', 'is_correct' => true],
                            ['choice_text' => 'narrador', 'is_correct' => false],
                        ],
                        'explanation' => '« Lector » signifie lecteur : la personne qui lit une œuvre littéraire.',
                    ],
                ],
            ],
            [
                'title' => 'Genres et formes littéraires',
                'description' => 'Reconnais les genres littéraires espagnols courants et comprends ce qui distingue romans, poésie, théâtre, essais et nouvelles.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quel genre est principalement écrit pour être interprété par des acteurs ?',
                        'choices' => [
                            ['choice_text' => 'el teatro', 'is_correct' => true],
                            ['choice_text' => 'la novela', 'is_correct' => false],
                            ['choice_text' => 'la poesía', 'is_correct' => false],
                            ['choice_text' => 'el diccionario', 'is_correct' => false],
                        ],
                        'explanation' => 'Le théâtre est écrit pour être joué, généralement par des acteurs qui disent des dialogues et interprètent des scènes.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’« un poema » ?',
                        'choices' => [
                            ['choice_text' => 'un roman', 'is_correct' => false],
                            ['choice_text' => 'une biographie', 'is_correct' => false],
                            ['choice_text' => 'un poème', 'is_correct' => true],
                            ['choice_text' => 'un essai', 'is_correct' => false],
                        ],
                        'explanation' => 'Un poema est une œuvre littéraire poétique, souvent organisée en vers et parfois en strophes.',
                    ],
                    [
                        'question' => 'Quelle forme est habituellement une œuvre de fiction plus courte qu’un roman ?',
                        'choices' => [
                            ['choice_text' => 'el capítulo', 'is_correct' => false],
                            ['choice_text' => 'el cuento', 'is_correct' => true],
                            ['choice_text' => 'el ensayo', 'is_correct' => false],
                            ['choice_text' => 'la obra completa', 'is_correct' => false],
                        ],
                        'explanation' => 'Un cuento est généralement plus court qu’une novela et se concentre sur un récit plus restreint.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un « ensayo » en littérature ?',
                        'choices' => [
                            ['choice_text' => 'un personnage', 'is_correct' => false],
                            ['choice_text' => 'une rime', 'is_correct' => false],
                            ['choice_text' => 'un titre de chapitre', 'is_correct' => false],
                            ['choice_text' => 'un essai', 'is_correct' => true],
                        ],
                        'explanation' => 'Un ensayo est un texte en prose dans lequel l’auteur développe des idées, des arguments ou des réflexions sur un sujet.',
                    ],
                    [
                        'question' => 'Quel genre littéraire comprend généralement des dialogues entre personnages destinés à être joués ?',
                        'choices' => [
                            ['choice_text' => 'la poesía lírica', 'is_correct' => false],
                            ['choice_text' => 'el drama', 'is_correct' => true],
                            ['choice_text' => 'el diccionario', 'is_correct' => false],
                            ['choice_text' => 'la crónica deportiva', 'is_correct' => false],
                        ],
                        'explanation' => 'Le drama se construit autour d’actions et de dialogues et est destiné à être représenté.',
                    ],
                    [
                        'question' => 'Un recueil de poèmes est le plus directement associé à quelle catégorie ?',
                        'choices' => [
                            ['choice_text' => 'poesía', 'is_correct' => true],
                            ['choice_text' => 'novela', 'is_correct' => false],
                            ['choice_text' => 'teatro', 'is_correct' => false],
                            ['choice_text' => 'manual técnico', 'is_correct' => false],
                        ],
                        'explanation' => 'Un recueil de poèmes relève de la poésie plutôt que de la prose narrative.',
                    ],
                    [
                        'question' => 'Quel mot désigne un groupe de vers dans un poème ?',
                        'choices' => [
                            ['choice_text' => 'el capítulo', 'is_correct' => false],
                            ['choice_text' => 'el párrafo', 'is_correct' => false],
                            ['choice_text' => 'el escenario', 'is_correct' => false],
                            ['choice_text' => 'la estrofa', 'is_correct' => true],
                        ],
                        'explanation' => 'Une estrofa, ou strophe, est un groupe de vers dans un poème.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le « verso » en poésie ?',
                        'choices' => [
                            ['choice_text' => 'un chapitre', 'is_correct' => false],
                            ['choice_text' => 'un personnage', 'is_correct' => false],
                            ['choice_text' => 'un vers', 'is_correct' => true],
                            ['choice_text' => 'un résumé de l’intrigue', 'is_correct' => false],
                        ],
                        'explanation' => 'Un verso est une ligne ou une unité poétique unique dans un poème.',
                    ],
                    [
                        'question' => 'Quelle forme présente normalement les événements d’un récit de fiction plus long ?',
                        'choices' => [
                            ['choice_text' => 'el verso', 'is_correct' => false],
                            ['choice_text' => 'la estrofa', 'is_correct' => false],
                            ['choice_text' => 'el diálogo teatral', 'is_correct' => false],
                            ['choice_text' => 'la novela', 'is_correct' => true],
                        ],
                        'explanation' => 'Une novela est un récit de fiction long, généralement en prose.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une « tragedia » ?',
                        'choices' => [
                            ['choice_text' => 'une œuvre dramatique avec un conflit grave et souvent une fin douloureuse', 'is_correct' => true],
                            ['choice_text' => 'une comédie sans aucun conflit', 'is_correct' => false],
                            ['choice_text' => 'une courte entrée de dictionnaire', 'is_correct' => false],
                            ['choice_text' => 'une lettre personnelle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une tragedia est une forme dramatique centrée sur un conflit grave, souvent conclue par une issue désastreuse ou douloureuse.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une « comedia » au sens littéraire traditionnel ?',
                        'choices' => [
                            ['choice_text' => 'un rapport scientifique', 'is_correct' => false],
                            ['choice_text' => 'une œuvre dramatique conçue pour divertir, souvent avec de l’humour', 'is_correct' => true],
                            ['choice_text' => 'un poème sans personnages', 'is_correct' => false],
                            ['choice_text' => 'une bibliographie', 'is_correct' => false],
                        ],
                        'explanation' => 'La comedia utilise couramment l’humour et des situations destinées à divertir le public.',
                    ],
                ],
            ],
            [
                'title' => 'Auteurs et œuvres espagnoles célèbres',
                'description' => 'Familiarise-toi, au niveau débutant, avec des auteurs espagnols connus et des œuvres littéraires importantes.',
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Qui a écrit « Don Quijote de la Mancha » ?',
                        'choices' => [
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => true],
                            ['choice_text' => 'Federico García Lorca', 'is_correct' => false],
                            ['choice_text' => 'Pablo Neruda', 'is_correct' => false],
                            ['choice_text' => 'Gabriel García Márquez', 'is_correct' => false],
                        ],
                        'explanation' => 'Miguel de Cervantes est l’auteur de Don Quijote de la Mancha.',
                    ],
                    [
                        'question' => '« Don Quijote de la Mancha » se décrit le mieux comme quel type d’œuvre ?',
                        'choices' => [
                            ['choice_text' => 'un dictionnaire', 'is_correct' => false],
                            ['choice_text' => 'un roman', 'is_correct' => true],
                            ['choice_text' => 'un article scientifique', 'is_correct' => false],
                            ['choice_text' => 'un manuel de grammaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Don Quijote est un célèbre roman espagnol écrit par Miguel de Cervantes.',
                    ],
                    [
                        'question' => 'Quel écrivain est étroitement associé à « Romancero gitano » ?',
                        'choices' => [
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => false],
                            ['choice_text' => 'Lope de Vega', 'is_correct' => false],
                            ['choice_text' => 'Federico García Lorca', 'is_correct' => true],
                            ['choice_text' => 'Benito Pérez Galdós', 'is_correct' => false],
                        ],
                        'explanation' => 'Federico García Lorca a écrit Romancero gitano et compte parmi les poètes et dramaturges espagnols les plus connus.',
                    ],
                    [
                        'question' => 'Federico García Lorca est particulièrement connu pour la poésie et pour quelle autre forme littéraire ?',
                        'choices' => [
                            ['choice_text' => 'les dictionnaires', 'is_correct' => false],
                            ['choice_text' => 'les guides de voyage', 'is_correct' => false],
                            ['choice_text' => 'les manuels scientifiques', 'is_correct' => false],
                            ['choice_text' => 'le théâtre', 'is_correct' => true],
                        ],
                        'explanation' => 'Lorca a écrit une poésie importante ainsi que des pièces comme Bodas de sangre et La casa de Bernarda Alba.',
                    ],
                    [
                        'question' => 'Qui a écrit « La casa de Bernarda Alba » ?',
                        'choices' => [
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => false],
                            ['choice_text' => 'Federico García Lorca', 'is_correct' => true],
                            ['choice_text' => 'Antonio Machado', 'is_correct' => false],
                            ['choice_text' => 'Jorge Luis Borges', 'is_correct' => false],
                        ],
                        'explanation' => 'La casa de Bernarda Alba est une pièce de Federico García Lorca.',
                    ],
                    [
                        'question' => 'Quel auteur a écrit « Fortunata y Jacinta » ?',
                        'choices' => [
                            ['choice_text' => 'Federico García Lorca', 'is_correct' => false],
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => false],
                            ['choice_text' => 'Benito Pérez Galdós', 'is_correct' => true],
                            ['choice_text' => 'Pablo Neruda', 'is_correct' => false],
                        ],
                        'explanation' => 'Fortunata y Jacinta est un grand roman de l’écrivain espagnol Benito Pérez Galdós.',
                    ],
                    [
                        'question' => 'Qui a écrit « Campos de Castilla » ?',
                        'choices' => [
                            ['choice_text' => 'Antonio Machado', 'is_correct' => true],
                            ['choice_text' => 'Lope de Vega', 'is_correct' => false],
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => false],
                            ['choice_text' => 'Julio Cortázar', 'is_correct' => false],
                        ],
                        'explanation' => 'Campos de Castilla est un célèbre recueil de poésie d’Antonio Machado.',
                    ],
                    [
                        'question' => 'Quel poète est célèbre pour l’œuvre « Veinte poemas de amor y una canción desesperada » ?',
                        'choices' => [
                            ['choice_text' => 'Antonio Machado', 'is_correct' => false],
                            ['choice_text' => 'Federico García Lorca', 'is_correct' => false],
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => false],
                            ['choice_text' => 'Pablo Neruda', 'is_correct' => true],
                        ],
                        'explanation' => 'Veinte poemas de amor y una canción desesperada est l’un des recueils de poésie les plus connus de Pablo Neruda.',
                    ],
                    [
                        'question' => 'Gabriel García Márquez est le plus étroitement associé à quel mouvement littéraire en langue espagnole ?',
                        'choices' => [
                            ['choice_text' => 'el romanticismo medieval', 'is_correct' => false],
                            ['choice_text' => 'el teatro clásico', 'is_correct' => false],
                            ['choice_text' => 'el realismo mágico', 'is_correct' => true],
                            ['choice_text' => 'la poesía modernista española', 'is_correct' => false],
                        ],
                        'explanation' => 'García Márquez est fortement associé au réalisme magique, notamment à travers des œuvres comme Cien años de soledad.',
                    ],
                    [
                        'question' => 'Qui a écrit « Cien años de soledad » ?',
                        'choices' => [
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => false],
                            ['choice_text' => 'Gabriel García Márquez', 'is_correct' => true],
                            ['choice_text' => 'Federico García Lorca', 'is_correct' => false],
                            ['choice_text' => 'Benito Pérez Galdós', 'is_correct' => false],
                        ],
                        'explanation' => 'Cien años de soledad a été écrit par l’auteur colombien Gabriel García Márquez.',
                    ],
                    [
                        'question' => 'Quel écrivain est célèbre pour la pièce « Fuenteovejuna » ?',
                        'choices' => [
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => false],
                            ['choice_text' => 'Pablo Neruda', 'is_correct' => false],
                            ['choice_text' => 'Gabriel García Márquez', 'is_correct' => false],
                            ['choice_text' => 'Lope de Vega', 'is_correct' => true],
                        ],
                        'explanation' => 'Fuenteovejuna est une pièce célèbre du dramaturge espagnol Lope de Vega.',
                    ],
                ],
            ],
            [
                'title' => 'Lire des textes littéraires espagnols',
                'description' => 'Pratique les compétences de base pour identifier les personnages, le cadre, l’intrigue, le narrateur, le thème et les détails clés dans des textes littéraires.',
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'En lisant une histoire, que demande « ¿Quién es el protagonista? » ?',
                        'choices' => [
                            ['choice_text' => 'Où se déroule l’histoire ?', 'is_correct' => false],
                            ['choice_text' => 'Qui est le personnage principal ?', 'is_correct' => true],
                            ['choice_text' => 'Qui a écrit l’histoire ?', 'is_correct' => false],
                            ['choice_text' => 'Quel est le titre ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Le protagonista est le personnage central autour duquel se développe l’action principale.',
                    ],
                    [
                        'question' => 'Que demande « ¿Dónde ocurre la historia? » ?',
                        'choices' => [
                            ['choice_text' => 'Qui est l’auteur ?', 'is_correct' => false],
                            ['choice_text' => 'Quel est le thème ?', 'is_correct' => false],
                            ['choice_text' => 'Combien de chapitres y a-t-il ?', 'is_correct' => false],
                            ['choice_text' => 'Où se déroule l’histoire ?', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette question porte sur le cadre ou le lieu de l’histoire.',
                    ],
                    [
                        'question' => 'Que signifie « al principio » dans une histoire ?',
                        'choices' => [
                            ['choice_text' => 'au milieu', 'is_correct' => false],
                            ['choice_text' => 'à la fin', 'is_correct' => false],
                            ['choice_text' => 'au début', 'is_correct' => true],
                            ['choice_text' => 'en dehors de l’histoire', 'is_correct' => false],
                        ],
                        'explanation' => '« Al principio » indique au lecteur que quelque chose se produit au début du récit.',
                    ],
                    [
                        'question' => 'Que signale généralement « finalmente » ?',
                        'choices' => [
                            ['choice_text' => 'finalement ou à la fin', 'is_correct' => true],
                            ['choice_text' => 'le premier événement', 'is_correct' => false],
                            ['choice_text' => 'un nouveau personnage', 'is_correct' => false],
                            ['choice_text' => 'le cadre', 'is_correct' => false],
                        ],
                        'explanation' => '« Finalmente » introduit un événement, un résultat ou une étape finale d’une séquence.',
                    ],
                    [
                        'question' => 'Quel mot désigne l’enchaînement des événements dans une histoire ?',
                        'choices' => [
                            ['choice_text' => 'el título', 'is_correct' => false],
                            ['choice_text' => 'la portada', 'is_correct' => false],
                            ['choice_text' => 'la trama', 'is_correct' => true],
                            ['choice_text' => 'la métrica', 'is_correct' => false],
                        ],
                        'explanation' => 'La trama est l’intrigue : l’ensemble des événements liés qui composent l’histoire.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le « narrador » ?',
                        'choices' => [
                            ['choice_text' => 'seulement le personnage principal', 'is_correct' => false],
                            ['choice_text' => 'le narrateur', 'is_correct' => true],
                            ['choice_text' => 'l’éditeur de l’auteur', 'is_correct' => false],
                            ['choice_text' => 'la couverture du livre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le narrador est la voix qui raconte ou présente l’histoire.',
                    ],
                    [
                        'question' => 'Quelle question porte sur le thème d’une histoire ?',
                        'choices' => [
                            ['choice_text' => '¿Cuántas páginas tiene?', 'is_correct' => false],
                            ['choice_text' => '¿Quién publicó el libro?', 'is_correct' => false],
                            ['choice_text' => '¿Cuál es el precio?', 'is_correct' => false],
                            ['choice_text' => '¿Cuál es el tema principal?', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette question demande quel est le sujet ou l’idée centrale exploré par l’histoire.',
                    ],
                    [
                        'question' => 'Un lecteur repère des références répétées à la famille, à la loyauté et à l’amitié. Ces détails peuvent aider à identifier quoi ?',
                        'choices' => [
                            ['choice_text' => 'le thème', 'is_correct' => true],
                            ['choice_text' => 'le numéro de page', 'is_correct' => false],
                            ['choice_text' => 'l’adresse de l’auteur', 'is_correct' => false],
                            ['choice_text' => 'le nombre de chapitres', 'is_correct' => false],
                        ],
                        'explanation' => 'Des idées répétées comme la famille, la loyauté ou l’amitié peuvent indiquer les thèmes centraux de l’œuvre.',
                    ],
                    [
                        'question' => 'Si un personnage dit « Estoy muy preocupado », qu’est-ce qu’un lecteur peut identifier ?',
                        'choices' => [
                            ['choice_text' => 'le cadre', 'is_correct' => false],
                            ['choice_text' => 'le sentiment du personnage', 'is_correct' => true],
                            ['choice_text' => 'la biographie de l’auteur', 'is_correct' => false],
                            ['choice_text' => 'le titre du livre', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase exprime directement l’état émotionnel du personnage : l’inquiétude.',
                    ],
                    [
                        'question' => 'Que signifie « describir » quand on parle d’un texte littéraire ?',
                        'choices' => [
                            ['choice_text' => 'publier', 'is_correct' => false],
                            ['choice_text' => 'seulement traduire', 'is_correct' => false],
                            ['choice_text' => 'mémoriser', 'is_correct' => false],
                            ['choice_text' => 'décrire', 'is_correct' => true],
                        ],
                        'explanation' => 'Describir signifie présenter des détails sur une personne, un lieu, un objet ou une situation.',
                    ],
                    [
                        'question' => 'Pourquoi le premier paragraphe d’une histoire peut-il être important ?',
                        'choices' => [
                            ['choice_text' => 'Il donne toujours la fin.', 'is_correct' => false],
                            ['choice_text' => 'Il liste toujours tous les personnages.', 'is_correct' => false],
                            ['choice_text' => 'Il peut présenter le cadre, les personnages ou la situation.', 'is_correct' => true],
                            ['choice_text' => 'Il explique toujours la vie de l’auteur.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ouverture donne souvent au lecteur un contexte essentiel sur le qui, le où ou le quoi de l’histoire.',
                    ],
                ],
            ],
            [
                'title' => 'Les procédés littéraires de base',
                'description' => 'Reconnais les procédés littéraires courants pour débutants et comprends comment les auteurs les utilisent pour créer des images, des émotions et des effets d’emphase.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une « metáfora » ?',
                        'choices' => [
                            ['choice_text' => 'un chapitre', 'is_correct' => false],
                            ['choice_text' => 'une biographie', 'is_correct' => false],
                            ['choice_text' => 'un dictionnaire de rimes', 'is_correct' => false],
                            ['choice_text' => 'une métaphore', 'is_correct' => true],
                        ],
                        'explanation' => 'Une métaphore décrit une chose en termes d’une autre pour créer une comparaison ou une image sans utiliser « como ».',
                    ],
                    [
                        'question' => 'Quelle phrase est un exemple de comparaison utilisant « como » ?',
                        'choices' => [
                            ['choice_text' => 'Sus ojos son estrellas del libro.', 'is_correct' => false],
                            ['choice_text' => 'Sus ojos tienen dos capítulos.', 'is_correct' => false],
                            ['choice_text' => 'Sus ojos brillan como estrellas.', 'is_correct' => true],
                            ['choice_text' => 'Sus ojos leen el poema.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase compare des yeux à des étoiles en utilisant « como », une forme courante de comparaison.',
                    ],
                    [
                        'question' => 'Que fait la « personificación » ?',
                        'choices' => [
                            ['choice_text' => 'Elle supprime toute description.', 'is_correct' => false],
                            ['choice_text' => 'Elle donne des qualités humaines à des choses non humaines.', 'is_correct' => true],
                            ['choice_text' => 'Elle liste les chapitres.', 'is_correct' => false],
                            ['choice_text' => 'Elle explique la biographie de l’auteur.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personnification présente des objets, des animaux ou des idées abstraites comme s’ils avaient des actions ou des qualités humaines.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise la personnification ?',
                        'choices' => [
                            ['choice_text' => 'El viento susurraba entre los árboles.', 'is_correct' => true],
                            ['choice_text' => 'El viento tiene diez metros.', 'is_correct' => false],
                            ['choice_text' => 'El viento aparece en la página cinco.', 'is_correct' => false],
                            ['choice_text' => 'El viento es una palabra española.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vent est décrit comme murmurant, une action humaine, donc la phrase utilise la personnification.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la « rima » en poésie ?',
                        'choices' => [
                            ['choice_text' => 'le cadre', 'is_correct' => false],
                            ['choice_text' => 'la rime', 'is_correct' => true],
                            ['choice_text' => 'l’intrigue', 'is_correct' => false],
                            ['choice_text' => 'le personnage', 'is_correct' => false],
                        ],
                        'explanation' => 'La rima désigne la répétition de sons semblables, en particulier à la fin des vers.',
                    ],
                    [
                        'question' => 'Pourquoi un poète pourrait-il répéter un mot ou une expression ?',
                        'choices' => [
                            ['choice_text' => 'Seulement pour allonger le poème.', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour identifier l’auteur.', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour indiquer le numéro de page.', 'is_correct' => false],
                            ['choice_text' => 'Pour créer une emphase, un rythme ou un effet marquant.', 'is_correct' => true],
                        ],
                        'explanation' => 'La répétition peut mettre en valeur une idée et créer aussi du rythme ou une intensité émotionnelle.',
                    ],
                    [
                        'question' => 'Que signifie « símbolo » dans une analyse littéraire ?',
                        'choices' => [
                            ['choice_text' => 'un chapitre', 'is_correct' => false],
                            ['choice_text' => 'un dictionnaire', 'is_correct' => false],
                            ['choice_text' => 'un symbole', 'is_correct' => true],
                            ['choice_text' => 'un signe de ponctuation', 'is_correct' => false],
                        ],
                        'explanation' => 'Un symbole est un objet, une image ou une idée qui représente un sens plus profond dans un texte.',
                    ],
                    [
                        'question' => 'Un auteur utilise de façon répétée une route pour représenter le parcours de vie d’une personne. Quelle est la fonction de cette route ?',
                        'choices' => [
                            ['choice_text' => 'un symbole', 'is_correct' => true],
                            ['choice_text' => 'un narrateur', 'is_correct' => false],
                            ['choice_text' => 'un chapitre', 'is_correct' => false],
                            ['choice_text' => 'un nom de personnage', 'is_correct' => false],
                        ],
                        'explanation' => 'La route représente une idée plus large ; elle fonctionne donc comme un symbole.',
                    ],
                    [
                        'question' => 'Que fournit souvent une « imagen » ou une « imagen literaria » ?',
                        'choices' => [
                            ['choice_text' => 'une bibliographie', 'is_correct' => false],
                            ['choice_text' => 'une date de publication', 'is_correct' => false],
                            ['choice_text' => 'une règle de grammaire', 'is_correct' => false],
                            ['choice_text' => 'une image vivante ou une impression sensorielle', 'is_correct' => true],
                        ],
                        'explanation' => 'L’image littéraire aide le lecteur à imaginer des images, des sons, des odeurs, des textures ou d’autres détails sensoriels.',
                    ],
                    [
                        'question' => 'Pourquoi les auteurs utilisent-ils des procédés littéraires ?',
                        'choices' => [
                            ['choice_text' => 'Pour rendre le langage plus expressif et plus riche de sens.', 'is_correct' => true],
                            ['choice_text' => 'Seulement pour ajouter des numéros de page.', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour identifier l’éditeur.', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour éviter d’utiliser des verbes.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les procédés peuvent créer des images, des comparaisons, un rythme, une émotion ou une emphase, et rendre un texte plus vivant.',
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
