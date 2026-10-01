<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SentenceStructureBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'sentence-structure')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les bases de la phrase française',
                'description' => 'Identifier la structure de base d\'une phrase française et placer correctement les différents éléments.',
                'duration' => 15,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelle phrase est correctement construite ?',
                        'choices' => [
                            ['choice_text' => 'Marie lit un livre.', 'is_correct' => true],
                            ['choice_text' => 'Lit Marie un livre.', 'is_correct' => false],
                            ['choice_text' => 'Un livre Marie lit.', 'is_correct' => false],
                            ['choice_text' => 'Marie un livre lit.', 'is_correct' => false],
                        ],
                        'explanation' => 'En français, la structure de base est généralement sujet + verbe + complément : « Marie lit un livre ».',
                    ],
                    [
                        'question' => 'Dans la phrase « Paul mange une pomme », quel est le sujet ?',
                        'choices' => [
                            ['choice_text' => 'Paul', 'is_correct' => true],
                            ['choice_text' => 'mange', 'is_correct' => false],
                            ['choice_text' => 'une pomme', 'is_correct' => false],
                            ['choice_text' => 'pomme', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet est la personne ou la chose qui réalise l\'action. Ici, c\'est « Paul ».',
                    ],
                    [
                        'question' => 'Dans « Sophie prépare le dîner », quel est le verbe ?',
                        'choices' => [
                            ['choice_text' => 'prépare', 'is_correct' => true],
                            ['choice_text' => 'Sophie', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'dîner', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe indique l\'action réalisée. Dans cette phrase, le verbe est « prépare ».',
                    ],
                    [
                        'question' => 'Quel ordre est le plus naturel en français ?',
                        'choices' => [
                            ['choice_text' => 'Sujet + verbe + complément', 'is_correct' => true],
                            ['choice_text' => 'Complément + sujet + verbe', 'is_correct' => false],
                            ['choice_text' => 'Verbe + complément + sujet', 'is_correct' => false],
                            ['choice_text' => 'Verbe + sujet + complément', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure sujet + verbe + complément est la structure de base la plus fréquente en français.',
                    ],
                    [
                        'question' => 'Complétez correctement : « Les enfants ___ dans le jardin. »',
                        'choices' => [
                            ['choice_text' => 'jouent', 'is_correct' => true],
                            ['choice_text' => 'jardin jouent', 'is_correct' => false],
                            ['choice_text' => 'les enfants jouent', 'is_correct' => false],
                            ['choice_text' => 'jouent les', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « Les enfants » doit être suivi du verbe « jouent », puis du complément « dans le jardin ».',
                    ],
                    [
                        'question' => 'Quelle phrase respecte l\'ordre habituel des mots ?',
                        'choices' => [
                            ['choice_text' => 'Nous regardons un film.', 'is_correct' => true],
                            ['choice_text' => 'Nous un film regardons.', 'is_correct' => false],
                            ['choice_text' => 'Un film regardons nous.', 'is_correct' => false],
                            ['choice_text' => 'Regardons nous un film.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase correcte suit l\'ordre « Nous » + « regardons » + « un film ».',
                    ],
                    [
                        'question' => 'Dans « Le professeur explique la leçon », que représente « la leçon » ?',
                        'choices' => [
                            ['choice_text' => 'Le complément du verbe', 'is_correct' => true],
                            ['choice_text' => 'Le sujet', 'is_correct' => false],
                            ['choice_text' => 'Le verbe', 'is_correct' => false],
                            ['choice_text' => 'Le déterminant', 'is_correct' => false],
                        ],
                        'explanation' => '« La leçon » complète le verbe « explique » et indique ce qui est expliqué.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Mon frère joue au tennis.', 'is_correct' => true],
                            ['choice_text' => 'Mon frère au tennis joue.', 'is_correct' => false],
                            ['choice_text' => 'Au tennis joue mon frère.', 'is_correct' => false],
                            ['choice_text' => 'Joue mon frère au tennis.', 'is_correct' => false],
                        ],
                        'explanation' => 'La construction la plus naturelle est sujet + verbe + complément : « Mon frère joue au tennis ».',
                    ],
                    [
                        'question' => 'Quel élément peut venir après le sujet dans une phrase simple ?',
                        'choices' => [
                            ['choice_text' => 'Le verbe', 'is_correct' => true],
                            ['choice_text' => 'Le point final', 'is_correct' => false],
                            ['choice_text' => 'Toujours un autre sujet', 'is_correct' => false],
                            ['choice_text' => 'Uniquement un adjectif', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une phrase simple, le verbe vient généralement après le sujet.',
                    ],
                    [
                        'question' => 'Remettez les mots dans le bon ordre : « demain / part / Léa ».',
                        'choices' => [
                            ['choice_text' => 'Léa part demain.', 'is_correct' => true],
                            ['choice_text' => 'Part Léa demain.', 'is_correct' => false],
                            ['choice_text' => 'Demain part Léa.', 'is_correct' => false],
                            ['choice_text' => 'Léa demain part.', 'is_correct' => false],
                        ],
                        'explanation' => '« Léa part demain » suit l\'ordre sujet + verbe + complément de temps.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un sujet, un verbe et un complément ?',
                        'choices' => [
                            ['choice_text' => 'Julie achète du pain.', 'is_correct' => true],
                            ['choice_text' => 'Julie.', 'is_correct' => false],
                            ['choice_text' => 'Achète.', 'is_correct' => false],
                            ['choice_text' => 'Du pain.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase « Julie achète du pain » contient le sujet « Julie », le verbe « achète » et le complément « du pain ».',
                    ],
                    [
                        'question' => 'Dans « Nous habitons à Rabat », quel est le groupe sujet ?',
                        'choices' => [
                            ['choice_text' => 'Nous', 'is_correct' => true],
                            ['choice_text' => 'habitons', 'is_correct' => false],
                            ['choice_text' => 'à Rabat', 'is_correct' => false],
                            ['choice_text' => 'Rabat', 'is_correct' => false],
                        ],
                        'explanation' => 'Le groupe sujet est « Nous », car c\'est lui qui réalise l\'action d\'habiter.',
                    ],
                ],
            ],

            [
                'title' => 'Sujet, verbe et compléments',
                'description' => 'Reconnaître les fonctions principales dans une phrase et comprendre leur rôle.',
                'duration' => 18,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Dans « Ahmed ouvre la fenêtre », quel mot indique l\'action ?',
                        'choices' => [
                            ['choice_text' => 'ouvre', 'is_correct' => true],
                            ['choice_text' => 'Ahmed', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'fenêtre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe « ouvre » exprime l\'action réalisée par Ahmed.',
                    ],
                    [
                        'question' => 'Dans « Ma sœur cuisine une soupe », que fait « une soupe » ?',
                        'choices' => [
                            ['choice_text' => 'Il complète le verbe', 'is_correct' => true],
                            ['choice_text' => 'Il réalise l\'action', 'is_correct' => false],
                            ['choice_text' => 'Il remplace le sujet', 'is_correct' => false],
                            ['choice_text' => 'Il indique le temps', 'is_correct' => false],
                        ],
                        'explanation' => '« Une soupe » complète le verbe « cuisine » et précise ce que la sœur cuisine.',
                    ],
                    [
                        'question' => 'Quelle phrase contient clairement un sujet au pluriel ?',
                        'choices' => [
                            ['choice_text' => 'Les étudiants travaillent.', 'is_correct' => true],
                            ['choice_text' => 'L\'étudiant travaille.', 'is_correct' => false],
                            ['choice_text' => 'Le professeur enseigne.', 'is_correct' => false],
                            ['choice_text' => 'La fille sourit.', 'is_correct' => false],
                        ],
                        'explanation' => '« Les étudiants » est un groupe sujet au pluriel.',
                    ],
                    [
                        'question' => 'Quel groupe complète directement le verbe dans « Clara écrit une lettre » ?',
                        'choices' => [
                            ['choice_text' => 'une lettre', 'is_correct' => true],
                            ['choice_text' => 'Clara', 'is_correct' => false],
                            ['choice_text' => 'écrit', 'is_correct' => false],
                            ['choice_text' => 'une', 'is_correct' => false],
                        ],
                        'explanation' => '« Une lettre » indique ce que Clara écrit et complète directement le verbe.',
                    ],
                    [
                        'question' => 'Dans « Nous déjeunons à midi », quelle expression indique le moment ?',
                        'choices' => [
                            ['choice_text' => 'à midi', 'is_correct' => true],
                            ['choice_text' => 'Nous', 'is_correct' => false],
                            ['choice_text' => 'déjeunons', 'is_correct' => false],
                            ['choice_text' => 'midi', 'is_correct' => false],
                        ],
                        'explanation' => '« À midi » est un complément qui précise le moment de l\'action.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement organisée ?',
                        'choices' => [
                            ['choice_text' => 'Le chat dort sur le canapé.', 'is_correct' => true],
                            ['choice_text' => 'Dort le chat sur le canapé.', 'is_correct' => false],
                            ['choice_text' => 'Le chat sur le canapé dort le.', 'is_correct' => false],
                            ['choice_text' => 'Sur le canapé le dort chat.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase suit l\'ordre naturel : sujet « Le chat », verbe « dort », puis complément « sur le canapé ».',
                    ],
                    [
                        'question' => 'Dans « Nous visitons le musée avec nos amis », quel est le sujet ?',
                        'choices' => [
                            ['choice_text' => 'Nous', 'is_correct' => true],
                            ['choice_text' => 'le musée', 'is_correct' => false],
                            ['choice_text' => 'nos amis', 'is_correct' => false],
                            ['choice_text' => 'visitons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet est « Nous », car c\'est le groupe qui réalise l\'action de visiter.',
                    ],
                    [
                        'question' => 'Dans « Karim parle avec son professeur », quel groupe indique avec qui Karim parle ?',
                        'choices' => [
                            ['choice_text' => 'avec son professeur', 'is_correct' => true],
                            ['choice_text' => 'Karim', 'is_correct' => false],
                            ['choice_text' => 'parle', 'is_correct' => false],
                            ['choice_text' => 'son', 'is_correct' => false],
                        ],
                        'explanation' => '« Avec son professeur » précise la personne avec laquelle Karim parle.',
                    ],
                    [
                        'question' => 'Quelle phrase commence par le sujet ?',
                        'choices' => [
                            ['choice_text' => 'Paul prépare le repas.', 'is_correct' => true],
                            ['choice_text' => 'Après le repas, Paul.', 'is_correct' => false],
                            ['choice_text' => 'Prépare le repas Paul.', 'is_correct' => false],
                            ['choice_text' => 'Le repas Paul prépare.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans « Paul prépare le repas », le sujet « Paul » est placé avant le verbe.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un complément de lieu ?',
                        'choices' => [
                            ['choice_text' => 'Les enfants jouent dans le parc.', 'is_correct' => true],
                            ['choice_text' => 'Les enfants jouent.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants sont heureux.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants rient beaucoup.', 'is_correct' => false],
                        ],
                        'explanation' => '« Dans le parc » indique le lieu où les enfants jouent.',
                    ],
                    [
                        'question' => 'Quel est le verbe dans « Mon père conduit la voiture » ?',
                        'choices' => [
                            ['choice_text' => 'conduit', 'is_correct' => true],
                            ['choice_text' => 'Mon père', 'is_correct' => false],
                            ['choice_text' => 'la voiture', 'is_correct' => false],
                            ['choice_text' => 'père', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe « conduit » exprime l\'action effectuée par le père.',
                    ],
                    [
                        'question' => 'Quelle phrase présente un ordre correct entre le sujet, le verbe et le complément ?',
                        'choices' => [
                            ['choice_text' => 'Lina dessine une maison.', 'is_correct' => true],
                            ['choice_text' => 'Une maison Lina dessine.', 'is_correct' => false],
                            ['choice_text' => 'Dessine une maison Lina.', 'is_correct' => false],
                            ['choice_text' => 'Lina une maison dessine.', 'is_correct' => false],
                        ],
                        'explanation' => 'La construction correcte est « Lina » + « dessine » + « une maison ».',
                    ],
                ],
            ],

            [
                'title' => 'Construire des phrases correctes',
                'description' => 'S\'entraîner à remettre les mots dans l\'ordre et à construire des phrases simples et naturelles.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Remettez les mots dans le bon ordre : « au marché / va / Nadia ».',
                        'choices' => [
                            ['choice_text' => 'Nadia va au marché.', 'is_correct' => true],
                            ['choice_text' => 'Va Nadia au marché.', 'is_correct' => false],
                            ['choice_text' => 'Au marché Nadia va le.', 'is_correct' => false],
                            ['choice_text' => 'Nadia au marché va le.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase naturelle est « Nadia va au marché », avec le sujet suivi du verbe.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nous faisons nos devoirs.', 'is_correct' => true],
                            ['choice_text' => 'Nous nos devoirs faisons.', 'is_correct' => false],
                            ['choice_text' => 'Faisons nos devoirs nous.', 'is_correct' => false],
                            ['choice_text' => 'Nos devoirs nous faisons le.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pronom sujet « Nous » est suivi du verbe « faisons », puis du complément « nos devoirs ».',
                    ],
                    [
                        'question' => 'Quelle phrase est la mieux formée ?',
                        'choices' => [
                            ['choice_text' => 'Je prends le bus chaque matin.', 'is_correct' => true],
                            ['choice_text' => 'Je chaque matin prends le bus.', 'is_correct' => false],
                            ['choice_text' => 'Prends le bus je chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Chaque le bus je prends matin.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je prends le bus chaque matin » est une construction naturelle et grammaticalement correcte.',
                    ],
                    [
                        'question' => 'Complétez : « Le professeur ___ les exercices. »',
                        'choices' => [
                            ['choice_text' => 'corrige', 'is_correct' => true],
                            ['choice_text' => 'les exercices corrige le', 'is_correct' => false],
                            ['choice_text' => 'professeur corrige', 'is_correct' => false],
                            ['choice_text' => 'corrige professeur les', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe « corrige » doit se placer entre le sujet « Le professeur » et le complément « les exercices ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Elle regarde la télévision le soir.', 'is_correct' => true],
                            ['choice_text' => 'Elle la télévision regarde le soir.', 'is_correct' => false],
                            ['choice_text' => 'Regarde elle la télévision le soir.', 'is_correct' => false],
                            ['choice_text' => 'Le soir la télévision elle regarde.', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure habituelle est sujet + verbe + complément, puis éventuellement un complément de temps.',
                    ],
                    [
                        'question' => 'Remettez les mots dans le bon ordre : « un café / boit / mon ami ».',
                        'choices' => [
                            ['choice_text' => 'Mon ami boit un café.', 'is_correct' => true],
                            ['choice_text' => 'Boit mon ami un café.', 'is_correct' => false],
                            ['choice_text' => 'Un café mon ami boit le.', 'is_correct' => false],
                            ['choice_text' => 'Mon ami un café boit le.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase correcte place « Mon ami » avant le verbe « boit » et le complément « un café ».',
                    ],
                    [
                        'question' => 'Quelle phrase a un ordre des mots incorrect ?',
                        'choices' => [
                            ['choice_text' => 'Nous le matin faisons du sport.', 'is_correct' => false],
                            ['choice_text' => 'Nous faisons du sport le matin.', 'is_correct' => true],
                            ['choice_text' => 'Le matin, nous faisons du sport.', 'is_correct' => false],
                            ['choice_text' => 'Nous faisons du sport.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nous le matin faisons du sport » est incorrect dans cette construction. On dit « Nous faisons du sport le matin » ou « Le matin, nous faisons du sport ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement construite avec un complément de lieu ?',
                        'choices' => [
                            ['choice_text' => 'Les touristes visitent Paris.', 'is_correct' => true],
                            ['choice_text' => 'Les touristes Paris visitent le.', 'is_correct' => false],
                            ['choice_text' => 'Visitent les touristes Paris.', 'is_correct' => false],
                            ['choice_text' => 'Paris les touristes visitent le.', 'is_correct' => false],
                        ],
                        'explanation' => '« Les touristes visitent Paris » suit la structure sujet + verbe + complément.',
                    ],
                    [
                        'question' => 'Quelle phrase commence par un complément de temps correctement placé ?',
                        'choices' => [
                            ['choice_text' => 'Demain, nous partirons tôt.', 'is_correct' => true],
                            ['choice_text' => 'Demain nous tôt partirons.', 'is_correct' => false],
                            ['choice_text' => 'Demain partirons nous tôt le.', 'is_correct' => false],
                            ['choice_text' => 'Nous demain tôt partirons le.', 'is_correct' => false],
                        ],
                        'explanation' => 'Un complément de temps peut être placé au début : « Demain, nous partirons tôt. »',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Mon voisin promène son chien.', 'is_correct' => true],
                            ['choice_text' => 'Son chien mon voisin promène le.', 'is_correct' => false],
                            ['choice_text' => 'Promène son chien mon voisin le.', 'is_correct' => false],
                            ['choice_text' => 'Mon voisin son chien promène le.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mon voisin » est le sujet, « promène » le verbe et « son chien » le complément.',
                    ],
                    [
                        'question' => 'Complétez correctement : « Les filles ___ une chanson. »',
                        'choices' => [
                            ['choice_text' => 'chantent', 'is_correct' => true],
                            ['choice_text' => 'une chanson chantent', 'is_correct' => false],
                            ['choice_text' => 'filles chantent les', 'is_correct' => false],
                            ['choice_text' => 'chantent les filles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « Les filles » est suivi du verbe « chantent », puis du complément « une chanson ».',
                    ],
                    [
                        'question' => 'Quelle phrase est naturelle en français ?',
                        'choices' => [
                            ['choice_text' => 'Thomas prépare son examen.', 'is_correct' => true],
                            ['choice_text' => 'Thomas son examen prépare le.', 'is_correct' => false],
                            ['choice_text' => 'Prépare Thomas son examen le.', 'is_correct' => false],
                            ['choice_text' => 'Son examen prépare Thomas le.', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure naturelle est « Thomas » + « prépare » + « son examen ».',
                    ],
                ],
            ],

            [
                'title' => 'Phrase affirmative et phrase négative',
                'description' => 'Comprendre la construction des phrases affirmatives et négatives simples.',
                'duration' => 17,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase est correctement formulée à la forme négative ?',
                        'choices' => [
                            ['choice_text' => 'Je ne parle pas anglais.', 'is_correct' => true],
                            ['choice_text' => 'Je ne pas parle anglais.', 'is_correct' => false],
                            ['choice_text' => 'Je parle ne pas anglais.', 'is_correct' => false],
                            ['choice_text' => 'Je pas ne parle anglais.', 'is_correct' => false],
                        ],
                        'explanation' => 'Au présent, la négation simple se construit avec « ne » avant le verbe et « pas » après le verbe.',
                    ],
                    [
                        'question' => 'Transformez « Paul mange du pain » à la forme négative.',
                        'choices' => [
                            ['choice_text' => 'Paul ne mange pas de pain.', 'is_correct' => true],
                            ['choice_text' => 'Paul ne pas mange du pain.', 'is_correct' => false],
                            ['choice_text' => 'Paul pas ne mange du pain.', 'is_correct' => false],
                            ['choice_text' => 'Paul mange ne pas de pain.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une phrase négative, « ne » et « pas » encadrent le verbe. Avec « du », on emploie généralement « de » après la négation.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement négative ?',
                        'choices' => [
                            ['choice_text' => 'Nous ne regardons pas la télévision.', 'is_correct' => true],
                            ['choice_text' => 'Nous ne pas regardons la télévision.', 'is_correct' => false],
                            ['choice_text' => 'Nous regardons ne pas la télévision.', 'is_correct' => false],
                            ['choice_text' => 'Nous pas ne regardons la télévision.', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure correcte est « Nous ne regardons pas la télévision ».',
                    ],
                    [
                        'question' => 'Quelle phrase est affirmative ?',
                        'choices' => [
                            ['choice_text' => 'Elle joue au piano.', 'is_correct' => true],
                            ['choice_text' => 'Elle ne joue pas au piano.', 'is_correct' => false],
                            ['choice_text' => 'Elle ne joue jamais au piano.', 'is_correct' => false],
                            ['choice_text' => 'Elle ne joue plus au piano.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une phrase affirmative ne contient pas de marque de négation comme « ne...pas », « ne...jamais » ou « ne...plus ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement négative ?',
                        'choices' => [
                            ['choice_text' => 'Ils ne viennent pas ce soir.', 'is_correct' => true],
                            ['choice_text' => 'Ils ne pas viennent ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Ils viennent ne pas ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Ils pas ne viennent ce soir.', 'is_correct' => false],
                        ],
                        'explanation' => 'La négation encadre le verbe conjugué : « ne viennent pas ».',
                    ],
                    [
                        'question' => 'Quelle phrase exprime une absence d\'action ?',
                        'choices' => [
                            ['choice_text' => 'Je ne cours pas.', 'is_correct' => true],
                            ['choice_text' => 'Je cours rapidement.', 'is_correct' => false],
                            ['choice_text' => 'Je cours chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Je vais courir.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je ne cours pas » indique que l\'action de courir n\'a pas lieu.',
                    ],
                    [
                        'question' => 'Quelle phrase contient correctement « ne...jamais » ?',
                        'choices' => [
                            ['choice_text' => 'Il ne prend jamais le train.', 'is_correct' => true],
                            ['choice_text' => 'Il jamais ne prend le train.', 'is_correct' => false],
                            ['choice_text' => 'Il ne jamais prend le train.', 'is_correct' => false],
                            ['choice_text' => 'Il prend ne jamais le train.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un verbe conjugué, « ne » se place avant le verbe et « jamais » après le verbe.',
                    ],
                    [
                        'question' => 'Transformez « Nous avons un chien » en phrase négative.',
                        'choices' => [
                            ['choice_text' => 'Nous n\'avons pas de chien.', 'is_correct' => true],
                            ['choice_text' => 'Nous ne avons pas un chien.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons ne pas de chien.', 'is_correct' => false],
                            ['choice_text' => 'Nous pas n\'avons un chien.', 'is_correct' => false],
                        ],
                        'explanation' => 'Devant une voyelle, « ne » devient « n\' ». Après la négation, « un chien » devient généralement « de chien ».',
                    ],
                    [
                        'question' => 'Quelle phrase est grammaticalement correcte ?',
                        'choices' => [
                            ['choice_text' => 'Tu ne comprends pas la question.', 'is_correct' => true],
                            ['choice_text' => 'Tu ne pas comprends la question.', 'is_correct' => false],
                            ['choice_text' => 'Tu comprends ne pas la question.', 'is_correct' => false],
                            ['choice_text' => 'Tu pas ne comprends la question.', 'is_correct' => false],
                        ],
                        'explanation' => 'La négation se place autour du verbe : « ne comprends pas ».',
                    ],
                    [
                        'question' => 'Quelle phrase indique qu\'une action a cessé ?',
                        'choices' => [
                            ['choice_text' => 'Elle ne travaille plus ici.', 'is_correct' => true],
                            ['choice_text' => 'Elle travaille encore ici.', 'is_correct' => false],
                            ['choice_text' => 'Elle travaille ici.', 'is_correct' => false],
                            ['choice_text' => 'Elle travaillera ici.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne...plus » indique qu\'une situation qui existait auparavant a cessé.',
                    ],
                    [
                        'question' => 'Quelle phrase est construite correctement ?',
                        'choices' => [
                            ['choice_text' => 'Nous ne connaissons personne ici.', 'is_correct' => true],
                            ['choice_text' => 'Nous personne ne connaissons ici.', 'is_correct' => false],
                            ['choice_text' => 'Nous ne personne connaissons ici.', 'is_correct' => false],
                            ['choice_text' => 'Nous connaissons ne personne ici.', 'is_correct' => false],
                        ],
                        'explanation' => 'La construction correcte est « ne + verbe + personne ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient une négation correcte avec « rien » ?',
                        'choices' => [
                            ['choice_text' => 'Je ne vois rien.', 'is_correct' => true],
                            ['choice_text' => 'Je ne rien vois.', 'is_correct' => false],
                            ['choice_text' => 'Je vois ne rien.', 'is_correct' => false],
                            ['choice_text' => 'Je rien ne vois.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un verbe conjugué, on dit « ne vois rien ».',
                    ],
                ],
            ],

            [
                'title' => 'Questions et ordre des mots',
                'description' => 'Reconnaître et former des questions simples avec les structures les plus courantes.',
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle question est correctement construite avec « est-ce que » ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que tu viens demain ?', 'is_correct' => true],
                            ['choice_text' => 'Est-ce tu que viens demain ?', 'is_correct' => false],
                            ['choice_text' => 'Tu est-ce que viens demain ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que viens tu demain ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure correcte est « Est-ce que + sujet + verbe + complément ? »',
                    ],
                    [
                        'question' => 'Quelle question demande une information sur le lieu ?',
                        'choices' => [
                            ['choice_text' => 'Où habites-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Quand habites-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi habites-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Comment habites-tu ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot interrogatif « où » sert à demander un lieu.',
                    ],
                    [
                        'question' => 'Quelle question demande le moment ?',
                        'choices' => [
                            ['choice_text' => 'Quand commence le cours ?', 'is_correct' => true],
                            ['choice_text' => 'Où commence le cours ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi commence le cours ?', 'is_correct' => false],
                            ['choice_text' => 'Qui commence le cours ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Quand » sert à demander à quel moment une action se produit.',
                    ],
                    [
                        'question' => 'Quelle question est correcte à l\'oral courant ?',
                        'choices' => [
                            ['choice_text' => 'Tu viens ce soir ?', 'is_correct' => true],
                            ['choice_text' => 'Viens tu ce soir le ?', 'is_correct' => false],
                            ['choice_text' => 'Tu ce soir viens le ?', 'is_correct' => false],
                            ['choice_text' => 'Ce soir viens tu le ?', 'is_correct' => false],
                        ],
                        'explanation' => 'À l\'oral, une phrase affirmative peut devenir une question grâce à l\'intonation : « Tu viens ce soir ? »',
                    ],
                    [
                        'question' => 'Quelle question demande une raison ?',
                        'choices' => [
                            ['choice_text' => 'Pourquoi es-tu en retard ?', 'is_correct' => true],
                            ['choice_text' => 'Où es-tu en retard ?', 'is_correct' => false],
                            ['choice_text' => 'Quand es-tu en retard ?', 'is_correct' => false],
                            ['choice_text' => 'Qui es-tu en retard ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Pourquoi » sert à demander la cause ou la raison.',
                    ],
                    [
                        'question' => 'Complétez : « ___ tu aimes le chocolat ? »',
                        'choices' => [
                            ['choice_text' => 'Est-ce que', 'is_correct' => true],
                            ['choice_text' => 'Où est-ce', 'is_correct' => false],
                            ['choice_text' => 'Quand est-ce', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi est-ce que', 'is_correct' => false],
                        ],
                        'explanation' => '« Est-ce que tu aimes le chocolat ? » est une question correctement formée.',
                    ],
                    [
                        'question' => 'Quelle question est correctement formée avec « combien » ?',
                        'choices' => [
                            ['choice_text' => 'Combien coûte ce livre ?', 'is_correct' => true],
                            ['choice_text' => 'Combien ce livre coûte le ?', 'is_correct' => false],
                            ['choice_text' => 'Coûte combien ce livre le ?', 'is_correct' => false],
                            ['choice_text' => 'Ce livre combien coûte le ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Combien coûte ce livre ? » demande le prix du livre.',
                    ],
                    [
                        'question' => 'Quelle question est correctement formulée avec « qui » ?',
                        'choices' => [
                            ['choice_text' => 'Qui vient avec nous ?', 'is_correct' => true],
                            ['choice_text' => 'Qui avec nous vient le ?', 'is_correct' => false],
                            ['choice_text' => 'Vient qui avec nous le ?', 'is_correct' => false],
                            ['choice_text' => 'Avec nous qui vient le ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Qui » peut être sujet de la question : « Qui vient avec nous ? »',
                    ],
                    [
                        'question' => 'Quelle phrase est une question sur la manière ?',
                        'choices' => [
                            ['choice_text' => 'Comment vas-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Pourquoi vas-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Où vas-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Quand vas-tu ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Comment » demande de quelle manière quelque chose se passe ou dans quel état se trouve une personne.',
                    ],
                    [
                        'question' => 'Quelle formulation avec inversion est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Aimes-tu le café ?', 'is_correct' => true],
                            ['choice_text' => 'Aimes le café-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Tu-aimes le café ?', 'is_correct' => false],
                            ['choice_text' => 'Le café aimes-tu ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une question avec inversion, le pronom sujet vient après le verbe : « Aimes-tu... ? »',
                    ],
                    [
                        'question' => 'Quelle question porte sur une personne ?',
                        'choices' => [
                            ['choice_text' => 'Qui habite dans cette maison ?', 'is_correct' => true],
                            ['choice_text' => 'Où habite cette personne ?', 'is_correct' => false],
                            ['choice_text' => 'Quand habite cette personne ?', 'is_correct' => false],
                            ['choice_text' => 'Comment habite cette personne ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Qui » est utilisé pour demander l\'identité d\'une personne.',
                    ],
                    [
                        'question' => 'Quelle question est la plus naturelle dans un contexte courant ?',
                        'choices' => [
                            ['choice_text' => 'Vous avez l\'heure ?', 'is_correct' => true],
                            ['choice_text' => 'Avez vous l\'heure le ?', 'is_correct' => false],
                            ['choice_text' => 'Vous l\'heure avez le ?', 'is_correct' => false],
                            ['choice_text' => 'L\'heure avez vous ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Vous avez l\'heure ? » est une formulation courante et naturelle à l\'oral.',
                    ],
                ],
            ],

            [
                'title' => 'Relier et enrichir les phrases',
                'description' => 'Associer des idées simples, utiliser des connecteurs de base et construire des phrases plus complètes.',
                'duration' => 25,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quel mot permet d\'exprimer une opposition simple ?',
                        'choices' => [
                            ['choice_text' => 'mais', 'is_correct' => true],
                            ['choice_text' => 'et', 'is_correct' => false],
                            ['choice_text' => 'donc', 'is_correct' => false],
                            ['choice_text' => 'ou', 'is_correct' => false],
                        ],
                        'explanation' => 'Le connecteur « mais » sert à opposer ou à nuancer deux idées.',
                    ],
                    [
                        'question' => 'Complétez : « Il pleut, ___ je prends un parapluie. »',
                        'choices' => [
                            ['choice_text' => 'donc', 'is_correct' => true],
                            ['choice_text' => 'mais', 'is_correct' => false],
                            ['choice_text' => 'ou', 'is_correct' => false],
                            ['choice_text' => 'car', 'is_correct' => false],
                        ],
                        'explanation' => '« Donc » introduit ici la conséquence : il pleut, donc je prends un parapluie.',
                    ],
                    [
                        'question' => 'Quel connecteur convient pour ajouter une information ?',
                        'choices' => [
                            ['choice_text' => 'et', 'is_correct' => true],
                            ['choice_text' => 'mais', 'is_correct' => false],
                            ['choice_text' => 'donc', 'is_correct' => false],
                            ['choice_text' => 'parce que', 'is_correct' => false],
                        ],
                        'explanation' => '« Et » sert à relier ou ajouter des éléments de même nature.',
                    ],
                    [
                        'question' => 'Complétez : « Je reste à la maison ___ je suis malade. »',
                        'choices' => [
                            ['choice_text' => 'parce que', 'is_correct' => true],
                            ['choice_text' => 'mais', 'is_correct' => false],
                            ['choice_text' => 'et', 'is_correct' => false],
                            ['choice_text' => 'ou', 'is_correct' => false],
                        ],
                        'explanation' => '« Parce que » introduit la cause : je reste à la maison parce que je suis malade.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « ou » ?',
                        'choices' => [
                            ['choice_text' => 'Tu veux du thé ou du café ?', 'is_correct' => true],
                            ['choice_text' => 'Tu veux du thé donc du café ?', 'is_correct' => false],
                            ['choice_text' => 'Tu veux du thé mais du café ?', 'is_correct' => false],
                            ['choice_text' => 'Tu veux du thé parce que du café ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Ou » permet de présenter un choix entre plusieurs possibilités.',
                    ],
                    [
                        'question' => 'Quelle phrase contient deux propositions correctement reliées ?',
                        'choices' => [
                            ['choice_text' => 'Je travaille et mon frère étudie.', 'is_correct' => true],
                            ['choice_text' => 'Je travaille mon frère et étudie.', 'is_correct' => false],
                            ['choice_text' => 'Et je travaille mon frère étudie.', 'is_correct' => false],
                            ['choice_text' => 'Je et travaille mon frère étudie.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le connecteur « et » relie correctement les deux propositions : « Je travaille » et « mon frère étudie ».',
                    ],
                    [
                        'question' => 'Quelle phrase exprime clairement une cause ?',
                        'choices' => [
                            ['choice_text' => 'Je suis fatigué parce que j\'ai beaucoup travaillé.', 'is_correct' => true],
                            ['choice_text' => 'Je suis fatigué mais j\'ai beaucoup travaillé.', 'is_correct' => false],
                            ['choice_text' => 'Je suis fatigué ou j\'ai beaucoup travaillé.', 'is_correct' => false],
                            ['choice_text' => 'Je suis fatigué donc j\'ai beaucoup travaillé.', 'is_correct' => false],
                        ],
                        'explanation' => '« Parce que » introduit une cause ou une raison.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime une conséquence ?',
                        'choices' => [
                            ['choice_text' => 'Il a beaucoup étudié, donc il a réussi.', 'is_correct' => true],
                            ['choice_text' => 'Il a beaucoup étudié, mais il a réussi.', 'is_correct' => false],
                            ['choice_text' => 'Il a beaucoup étudié, ou il a réussi.', 'is_correct' => false],
                            ['choice_text' => 'Il a beaucoup étudié, parce qu\'il a réussi.', 'is_correct' => false],
                        ],
                        'explanation' => '« Donc » introduit ici la conséquence du fait d\'avoir beaucoup étudié.',
                    ],
                    [
                        'question' => 'Quel mot permet de présenter une alternative ?',
                        'choices' => [
                            ['choice_text' => 'ou', 'is_correct' => true],
                            ['choice_text' => 'et', 'is_correct' => false],
                            ['choice_text' => 'mais', 'is_correct' => false],
                            ['choice_text' => 'donc', 'is_correct' => false],
                        ],
                        'explanation' => '« Ou » permet de proposer une possibilité différente d\'une autre.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement ponctuée ?',
                        'choices' => [
                            ['choice_text' => 'Quand il pleut, nous restons à la maison.', 'is_correct' => true],
                            ['choice_text' => 'Quand il pleut nous, restons à la maison.', 'is_correct' => false],
                            ['choice_text' => 'Quand, il pleut nous restons à la maison.', 'is_correct' => false],
                            ['choice_text' => 'Quand il, pleut nous restons à la maison.', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque la proposition introduite par « quand » vient au début, une virgule peut séparer cette proposition de la principale.',
                    ],
                    [
                        'question' => 'Quelle phrase commence par un complément de temps bien placé ?',
                        'choices' => [
                            ['choice_text' => 'Après le déjeuner, nous retournons au travail.', 'is_correct' => true],
                            ['choice_text' => 'Après le déjeuner nous au travail retournons.', 'is_correct' => false],
                            ['choice_text' => 'Après le déjeuner retournons nous le travail.', 'is_correct' => false],
                            ['choice_text' => 'Nous après le déjeuner retournons au travail le.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le complément de temps « Après le déjeuner » peut être placé au début, suivi d\'une virgule.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement construite avec deux idées opposées ?',
                        'choices' => [
                            ['choice_text' => 'Je voudrais sortir, mais il pleut.', 'is_correct' => true],
                            ['choice_text' => 'Je voudrais sortir, et il pleut.', 'is_correct' => false],
                            ['choice_text' => 'Je voudrais sortir, donc il pleut.', 'is_correct' => false],
                            ['choice_text' => 'Je voudrais sortir, ou il pleut.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mais » convient pour relier deux idées qui s\'opposent ou se contrastent.',
                    ],
                    [
                        'question' => 'Quelle phrase contient une structure complète et naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Ce matin, ma sœur a pris le train pour aller au travail.', 'is_correct' => true],
                            ['choice_text' => 'Ce matin ma sœur le train pour aller au travail pris a.', 'is_correct' => false],
                            ['choice_text' => 'A pris ce matin ma sœur le train travail pour aller.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur ce matin pour aller le travail a pris au train.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase est bien organisée avec un complément de temps, le sujet, le verbe et les compléments nécessaires.',
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
