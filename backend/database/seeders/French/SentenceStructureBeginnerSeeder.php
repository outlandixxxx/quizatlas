<?php

namespace Database\Seeders;

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
                'description' => 'Identifier la structure de base d’une phrase française et placer correctement les différents éléments.',
                'duration' => 15,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelle phrase est correctement construite ?',
                        'choices' => [
                            ['choice_text' => 'Lit Marie un livre.', 'is_correct' => false],
                            ['choice_text' => 'Un livre Marie lit.', 'is_correct' => false],
                            ['choice_text' => 'Marie lit un livre.', 'is_correct' => true],
                            ['choice_text' => 'Marie un livre lit.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ordre de base en français est sujet + verbe + complément : « Marie lit un livre ».',
                    ],
                    [
                        'question' => 'Dans la phrase « Paul mange une pomme », quel est le sujet ?',
                        'choices' => [
                            ['choice_text' => 'mange', 'is_correct' => false],
                            ['choice_text' => 'une pomme', 'is_correct' => false],
                            ['choice_text' => 'pomme', 'is_correct' => false],
                            ['choice_text' => 'Paul', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sujet est la personne ou la chose qui réalise l’action. Ici, c’est « Paul ».',
                    ],
                    [
                        'question' => 'Dans « Sophie prépare le dîner », quel est le verbe ?',
                        'choices' => [
                            ['choice_text' => 'Sophie', 'is_correct' => false],
                            ['choice_text' => 'prépare', 'is_correct' => true],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'dîner', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe indique l’action réalisée. Dans cette phrase, le verbe est « prépare ».',
                    ],
                    [
                        'question' => 'Quel ordre suit une phrase simple en français ?',
                        'choices' => [
                            ['choice_text' => 'Sujet + verbe + complément', 'is_correct' => true],
                            ['choice_text' => 'Complément + sujet + verbe', 'is_correct' => false],
                            ['choice_text' => 'Verbe + complément + sujet', 'is_correct' => false],
                            ['choice_text' => 'Verbe + sujet + complément', 'is_correct' => false],
                        ],
                        'explanation' => 'Une phrase simple place d’abord le sujet, puis le verbe, puis le complément.',
                    ],
                    [
                        'question' => 'Complétez avec le verbe qui s’accorde au sujet : « Les enfants ___ dans le jardin. »',
                        'choices' => [
                            ['choice_text' => 'joue', 'is_correct' => false],
                            ['choice_text' => 'jouons', 'is_correct' => false],
                            ['choice_text' => 'jouent', 'is_correct' => true],
                            ['choice_text' => 'jouez', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « Les enfants » est à la 3e personne du pluriel, donc le verbe s’écrit « jouent ».',
                    ],
                    [
                        'question' => 'Samir écrit à un ami : il veut dire que son groupe regarde un film. Quelle phrase respecte l’ordre des mots ?',
                        'choices' => [
                            ['choice_text' => 'Nous un film regardons.', 'is_correct' => false],
                            ['choice_text' => 'Nous regardons un film.', 'is_correct' => true],
                            ['choice_text' => 'Un film regardons nous.', 'is_correct' => false],
                            ['choice_text' => 'Regardons nous un film.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « Nous » vient en premier, puis le verbe « regardons », puis le complément « un film ».',
                    ],
                    [
                        'question' => 'Dans « Le professeur explique la leçon », que représente « la leçon » ?',
                        'choices' => [
                            ['choice_text' => 'Le sujet', 'is_correct' => false],
                            ['choice_text' => 'Le complément du verbe', 'is_correct' => true],
                            ['choice_text' => 'Le verbe', 'is_correct' => false],
                            ['choice_text' => 'Le déterminant', 'is_correct' => false],
                        ],
                        'explanation' => '« La leçon » complète le verbe « explique » et indique ce qui est expliqué.',
                    ],
                    [
                        'question' => 'Laquelle de ces phrases sur le sport est bien ordonnée ?',
                        'choices' => [
                            ['choice_text' => 'Mon frère joue au tennis.', 'is_correct' => true],
                            ['choice_text' => 'Mon frère au tennis joue.', 'is_correct' => false],
                            ['choice_text' => 'Au tennis joue mon frère.', 'is_correct' => false],
                            ['choice_text' => 'Joue mon frère au tennis.', 'is_correct' => false],
                        ],
                        'explanation' => 'On place le sujet « Mon frère », puis le verbe « joue », puis le complément « au tennis ».',
                    ],
                    [
                        'question' => 'Quel élément vient juste après le sujet dans une phrase simple ?',
                        'choices' => [
                            ['choice_text' => 'Le point final de la phrase', 'is_correct' => false],
                            ['choice_text' => 'Un deuxième sujet identique', 'is_correct' => false],
                            ['choice_text' => 'Le complément du verbe', 'is_correct' => false],
                            ['choice_text' => 'Le verbe', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans « Léa dort », le verbe « dort » suit directement le sujet « Léa ». Le complément, s’il existe, vient après le verbe.',
                    ],
                    [
                        'question' => 'Remettez les mots dans le bon ordre : « demain / part / Léa ».',
                        'choices' => [
                            ['choice_text' => 'Part Léa demain.', 'is_correct' => false],
                            ['choice_text' => 'Part demain Léa.', 'is_correct' => false],
                            ['choice_text' => 'Léa part demain.', 'is_correct' => true],
                            ['choice_text' => 'Léa demain part.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « Léa » vient d’abord, puis le verbe « part », puis le complément de temps « demain ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient un sujet, un verbe et un complément ?',
                        'choices' => [
                            ['choice_text' => 'Julie achète du pain.', 'is_correct' => true],
                            ['choice_text' => 'Julie dort.', 'is_correct' => false],
                            ['choice_text' => 'Julie achète.', 'is_correct' => false],
                            ['choice_text' => 'Achète du pain.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans « Julie achète du pain », on trouve le sujet « Julie », le verbe « achète » et le complément « du pain ».',
                    ],
                    [
                        'question' => 'Dans « Les élèves de la classe lisent un texte », quel est le groupe sujet ?',
                        'choices' => [
                            ['choice_text' => 'la classe', 'is_correct' => false],
                            ['choice_text' => 'lisent un texte', 'is_correct' => false],
                            ['choice_text' => 'un texte', 'is_correct' => false],
                            ['choice_text' => 'Les élèves de la classe', 'is_correct' => true],
                        ],
                        'explanation' => 'Le groupe sujet répond à « qui lit ? » : ce sont « les élèves de la classe ».',
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
                        'question' => 'Dans « Ahmed ouvre la fenêtre », quel mot indique l’action ?',
                        'choices' => [
                            ['choice_text' => 'Ahmed', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'ouvre', 'is_correct' => true],
                            ['choice_text' => 'fenêtre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe « ouvre » exprime l’action réalisée par Ahmed.',
                    ],
                    [
                        'question' => 'Dans « Ma sœur cuisine une soupe », que fait « une soupe » ?',
                        'choices' => [
                            ['choice_text' => 'Il complète le verbe', 'is_correct' => true],
                            ['choice_text' => 'Il réalise l’action', 'is_correct' => false],
                            ['choice_text' => 'Il remplace le sujet', 'is_correct' => false],
                            ['choice_text' => 'Il indique le temps', 'is_correct' => false],
                        ],
                        'explanation' => '« Une soupe » complète le verbe « cuisine » et précise ce que la sœur cuisine.',
                    ],
                    [
                        'question' => 'Quelle phrase contient clairement un sujet au pluriel ?',
                        'choices' => [
                            ['choice_text' => 'L’étudiant travaille.', 'is_correct' => false],
                            ['choice_text' => 'Les étudiants travaillent.', 'is_correct' => true],
                            ['choice_text' => 'Le professeur enseigne.', 'is_correct' => false],
                            ['choice_text' => 'La fille sourit.', 'is_correct' => false],
                        ],
                        'explanation' => '« Les étudiants » est un groupe sujet au pluriel.',
                    ],
                    [
                        'question' => 'Quel groupe complète directement le verbe dans « Clara écrit une lettre » ?',
                        'choices' => [
                            ['choice_text' => 'Clara', 'is_correct' => false],
                            ['choice_text' => 'écrit', 'is_correct' => false],
                            ['choice_text' => 'une', 'is_correct' => false],
                            ['choice_text' => 'une lettre', 'is_correct' => true],
                        ],
                        'explanation' => '« Une lettre » indique ce que Clara écrit et complète directement le verbe.',
                    ],
                    [
                        'question' => 'Dans « Nous déjeunons à midi », quelle expression indique le moment ?',
                        'choices' => [
                            ['choice_text' => 'Nous', 'is_correct' => false],
                            ['choice_text' => 'à midi', 'is_correct' => true],
                            ['choice_text' => 'déjeunons', 'is_correct' => false],
                            ['choice_text' => 'Nous déjeunons', 'is_correct' => false],
                        ],
                        'explanation' => '« À midi » est un complément qui précise le moment de l’action.',
                    ],
                    [
                        'question' => 'Lina regarde la photo de son chat. Quelle phrase est bien organisée ?',
                        'choices' => [
                            ['choice_text' => 'Le chat sur le canapé dort.', 'is_correct' => false],
                            ['choice_text' => 'Le chat dort sur le canapé.', 'is_correct' => true],
                            ['choice_text' => 'Dort le chat sur le canapé.', 'is_correct' => false],
                            ['choice_text' => 'Le chat le canapé dort sur.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ordre est : sujet « Le chat », verbe « dort », puis complément « sur le canapé ».',
                    ],
                    [
                        'question' => 'Dans « Nous visitons le musée avec nos amis », quel est le sujet ?',
                        'choices' => [
                            ['choice_text' => 'le musée', 'is_correct' => false],
                            ['choice_text' => 'nos amis', 'is_correct' => false],
                            ['choice_text' => 'visitons', 'is_correct' => false],
                            ['choice_text' => 'Nous', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sujet est « Nous », car c’est le groupe qui réalise l’action de visiter.',
                    ],
                    [
                        'question' => 'Dans « Karim parle avec son professeur », quel groupe indique avec qui Karim parle ?',
                        'choices' => [
                            ['choice_text' => 'Karim', 'is_correct' => false],
                            ['choice_text' => 'parle', 'is_correct' => false],
                            ['choice_text' => 'avec son professeur', 'is_correct' => true],
                            ['choice_text' => 'son', 'is_correct' => false],
                        ],
                        'explanation' => '« Avec son professeur » précise la personne avec laquelle Karim parle.',
                    ],
                    [
                        'question' => 'Quelle phrase commence par un complément de lieu ?',
                        'choices' => [
                            ['choice_text' => 'Paul prépare le repas dans la cuisine.', 'is_correct' => false],
                            ['choice_text' => 'Paul prépare le repas avec son père.', 'is_correct' => false],
                            ['choice_text' => 'Dans la cuisine, Paul prépare le repas.', 'is_correct' => true],
                            ['choice_text' => 'Paul prépare le repas.', 'is_correct' => false],
                        ],
                        'explanation' => '« Dans la cuisine » ouvre la phrase et indique où Paul prépare le repas. Dans les autres phrases, le sujet « Paul » vient en premier.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un complément de lieu ?',
                        'choices' => [
                            ['choice_text' => 'Les enfants jouent.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants sont heureux.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants rient beaucoup.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants jouent dans le parc.', 'is_correct' => true],
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
                        'explanation' => 'Le verbe « conduit » exprime l’action effectuée par le père.',
                    ],
                    [
                        'question' => 'Laquelle de ces phrases se limite à un sujet et un verbe, sans complément ?',
                        'choices' => [
                            ['choice_text' => 'Lina dessine.', 'is_correct' => true],
                            ['choice_text' => 'Lina dessine une maison.', 'is_correct' => false],
                            ['choice_text' => 'Lina dessine ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Lina dessine avec Nour.', 'is_correct' => false],
                        ],
                        'explanation' => '« Lina dessine » contient seulement le sujet « Lina » et le verbe « dessine ». Les autres phrases ajoutent un complément.',
                    ],
                ],
            ],
            [
                'title' => 'Construire des phrases correctes',
                'description' => 'S’entraîner à remettre les mots dans l’ordre et à construire des phrases simples et naturelles.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelle phrase n’a pas de verbe ?',
                        'choices' => [
                            ['choice_text' => 'Nadia va au marché.', 'is_correct' => false],
                            ['choice_text' => 'Nadia au marché.', 'is_correct' => true],
                            ['choice_text' => 'Nadia rentre.', 'is_correct' => false],
                            ['choice_text' => 'Nadia est au marché.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans « Nadia au marché », aucun mot n’exprime l’action : il manque un verbe comme « va » ou « est ».',
                    ],
                    [
                        'question' => 'Aya et sa sœur parlent de leur soirée. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nous nos devoirs faisons.', 'is_correct' => false],
                            ['choice_text' => 'Faisons nos devoirs nous.', 'is_correct' => false],
                            ['choice_text' => 'Nous faisons nos devoirs.', 'is_correct' => true],
                            ['choice_text' => 'Nos devoirs nous faisons.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pronom sujet « Nous » est suivi du verbe « faisons », puis du complément « nos devoirs ».',
                    ],
                    [
                        'question' => 'Hamid décrit son trajet. Quelle phrase est bien formée ?',
                        'choices' => [
                            ['choice_text' => 'Je chaque matin prends le bus.', 'is_correct' => false],
                            ['choice_text' => 'Prends le bus je chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Je le bus prends chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Je prends le bus chaque matin.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sujet « Je » précède le verbe « prends », et « chaque matin » se place à la fin.',
                    ],
                    [
                        'question' => 'Complétez avec la bonne forme du verbe corriger : « Le professeur ___ les exercices. »',
                        'choices' => [
                            ['choice_text' => 'corriges', 'is_correct' => false],
                            ['choice_text' => 'corrige', 'is_correct' => true],
                            ['choice_text' => 'corrigent', 'is_correct' => false],
                            ['choice_text' => 'corrigeons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « Le professeur » est à la 3e personne du singulier : il corrige.',
                    ],
                    [
                        'question' => 'Samira décrit sa soirée. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Elle regarde la télévision le soir.', 'is_correct' => true],
                            ['choice_text' => 'Elle la télévision regarde le soir.', 'is_correct' => false],
                            ['choice_text' => 'Regarde elle la télévision le soir.', 'is_correct' => false],
                            ['choice_text' => 'Le soir la télévision elle regarde.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après le sujet et le verbe vient le complément « la télévision », puis le complément de temps « le soir ».',
                    ],
                    [
                        'question' => 'Complétez avec la bonne forme du verbe boire : « Mon ami ___ un café. »',
                        'choices' => [
                            ['choice_text' => 'boivent', 'is_correct' => false],
                            ['choice_text' => 'buvons', 'is_correct' => false],
                            ['choice_text' => 'bois', 'is_correct' => false],
                            ['choice_text' => 'boit', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sujet « Mon ami » est à la 3e personne du singulier : il boit.',
                    ],
                    [
                        'question' => 'Quelle phrase a un ordre des mots incorrect ?',
                        'choices' => [
                            ['choice_text' => 'Nous faisons du sport le matin.', 'is_correct' => false],
                            ['choice_text' => 'Le matin, nous faisons du sport.', 'is_correct' => false],
                            ['choice_text' => 'Nous le matin faisons du sport.', 'is_correct' => true],
                            ['choice_text' => 'Nous faisons du sport.', 'is_correct' => false],
                        ],
                        'explanation' => '« Le matin » ne se glisse pas entre le sujet et le verbe. On dit « Nous faisons du sport le matin » ou « Le matin, nous faisons du sport ».',
                    ],
                    [
                        'question' => 'Les touristes passent la nuit à Fès. Quelle phrase construit bien le complément de lieu ?',
                        'choices' => [
                            ['choice_text' => 'Les touristes à l’hôtel dorment.', 'is_correct' => false],
                            ['choice_text' => 'Dorment les touristes à l’hôtel.', 'is_correct' => false],
                            ['choice_text' => 'Les touristes dorment à l’hôtel.', 'is_correct' => true],
                            ['choice_text' => 'Les touristes dorment l’hôtel.', 'is_correct' => false],
                        ],
                        'explanation' => '« Dormir l’hôtel » est incorrect : le verbe « dormir » demande « à » devant le lieu, comme dans « dormir à l’hôtel ».',
                    ],
                    [
                        'question' => 'Quelle phrase commence par un complément de temps correctement placé ?',
                        'choices' => [
                            ['choice_text' => 'Demain, nous partons tôt.', 'is_correct' => true],
                            ['choice_text' => 'Demain nous tôt partons.', 'is_correct' => false],
                            ['choice_text' => 'Demain partons nous tôt.', 'is_correct' => false],
                            ['choice_text' => 'Nous demain tôt partons.', 'is_correct' => false],
                        ],
                        'explanation' => 'Un complément de temps peut ouvrir la phrase, suivi d’une virgule : « Demain, nous partons tôt ».',
                    ],
                    [
                        'question' => 'Parlez de votre voisin : quelle phrase est bien construite ?',
                        'choices' => [
                            ['choice_text' => 'Son chien mon voisin promène.', 'is_correct' => false],
                            ['choice_text' => 'Promène son chien mon voisin.', 'is_correct' => false],
                            ['choice_text' => 'Mon voisin son chien promène.', 'is_correct' => false],
                            ['choice_text' => 'Mon voisin promène son chien.', 'is_correct' => true],
                        ],
                        'explanation' => '« Mon voisin » est le sujet, « promène » le verbe et « son chien » le complément.',
                    ],
                    [
                        'question' => 'Remettez les mots dans le bon ordre : « une chanson / les filles / chantent ».',
                        'choices' => [
                            ['choice_text' => 'Chantent les filles une chanson.', 'is_correct' => false],
                            ['choice_text' => 'Les filles chantent une chanson.', 'is_correct' => true],
                            ['choice_text' => 'Une chanson les filles chantent.', 'is_correct' => false],
                            ['choice_text' => 'Les filles une chanson chantent.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « Les filles » précède le verbe « chantent », puis vient « une chanson ».',
                    ],
                    [
                        'question' => 'Thomas prépare son examen. Quel pronom sujet remplace « Thomas » ?',
                        'choices' => [
                            ['choice_text' => 'Il', 'is_correct' => true],
                            ['choice_text' => 'Elle', 'is_correct' => false],
                            ['choice_text' => 'Ils', 'is_correct' => false],
                            ['choice_text' => 'Nous', 'is_correct' => false],
                        ],
                        'explanation' => 'Thomas est un seul garçon : on le reprend avec « il ».',
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
                        'question' => 'Vous ne parlez pas anglais. Que dites-vous ?',
                        'choices' => [
                            ['choice_text' => 'Je ne pas parle anglais.', 'is_correct' => false],
                            ['choice_text' => 'Je ne parle pas anglais.', 'is_correct' => true],
                            ['choice_text' => 'Je parle ne pas anglais.', 'is_correct' => false],
                            ['choice_text' => 'Je pas ne parle anglais.', 'is_correct' => false],
                        ],
                        'explanation' => 'Au présent, la négation simple se construit avec « ne » avant le verbe et « pas » après le verbe.',
                    ],
                    [
                        'question' => 'Transformez « Paul mange du pain » à la forme négative.',
                        'choices' => [
                            ['choice_text' => 'Paul ne mange pas du pain.', 'is_correct' => false],
                            ['choice_text' => 'Paul ne mange pas de pain.', 'is_correct' => true],
                            ['choice_text' => 'Paul ne pas mange de pain.', 'is_correct' => false],
                            ['choice_text' => 'Paul mange ne pas de pain.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne » et « pas » encadrent le verbe, et « du pain » devient « de pain » après la négation.',
                    ],
                    [
                        'question' => 'Les enfants sont à l’école. Mettez cette phrase à la forme négative.',
                        'choices' => [
                            ['choice_text' => 'Les enfants sont ne pas à l’école.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants ne sont à l’école pas.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants pas ne sont à l’école.', 'is_correct' => false],
                            ['choice_text' => 'Les enfants ne sont pas à l’école.', 'is_correct' => true],
                        ],
                        'explanation' => '« Ne » se place avant « sont » et « pas » juste après.',
                    ],
                    [
                        'question' => 'Quelle phrase est affirmative ?',
                        'choices' => [
                            ['choice_text' => 'Elle ne joue pas au piano.', 'is_correct' => false],
                            ['choice_text' => 'Elle joue au piano.', 'is_correct' => true],
                            ['choice_text' => 'Elle ne joue jamais au piano.', 'is_correct' => false],
                            ['choice_text' => 'Elle ne joue plus au piano.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une phrase affirmative ne contient pas de négation comme « ne … pas », « ne … jamais » ou « ne … plus ».',
                    ],
                    [
                        'question' => 'Complétez la négation : « Ils ___ viennent ___ ce soir. »',
                        'choices' => [
                            ['choice_text' => 'ne … pas', 'is_correct' => true],
                            ['choice_text' => 'pas … ne', 'is_correct' => false],
                            ['choice_text' => 'ne … ne', 'is_correct' => false],
                            ['choice_text' => 'pas … pas', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne » se place avant le verbe conjugué et « pas » juste après lui.',
                    ],
                    [
                        'question' => 'Laquelle de ces phrases dit que l’action n’a pas lieu ?',
                        'choices' => [
                            ['choice_text' => 'Je cours rapidement.', 'is_correct' => false],
                            ['choice_text' => 'Je cours chaque matin.', 'is_correct' => false],
                            ['choice_text' => 'Je ne cours pas.', 'is_correct' => true],
                            ['choice_text' => 'Je vais courir.', 'is_correct' => false],
                        ],
                        'explanation' => '« Je ne cours pas » signifie que l’action de courir n’a pas lieu.',
                    ],
                    [
                        'question' => 'Hassan préfère le bus. Quelle phrase dit qu’il ne prend jamais le train ?',
                        'choices' => [
                            ['choice_text' => 'Il jamais ne prend le train.', 'is_correct' => false],
                            ['choice_text' => 'Il ne jamais prend le train.', 'is_correct' => false],
                            ['choice_text' => 'Il ne prend jamais le train.', 'is_correct' => true],
                            ['choice_text' => 'Il prend ne jamais le train.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un verbe conjugué, « ne » se place avant le verbe et « jamais » après lui.',
                    ],
                    [
                        'question' => 'Mettez à la forme négative : « Elle aime le thé. »',
                        'choices' => [
                            ['choice_text' => 'Elle n’aime pas le thé.', 'is_correct' => true],
                            ['choice_text' => 'Elle ne aime pas le thé.', 'is_correct' => false],
                            ['choice_text' => 'Elle ne aime le thé pas.', 'is_correct' => false],
                            ['choice_text' => 'Elle n’aime le thé pas.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne » devient « n’ » devant un verbe qui commence par une voyelle, puis « pas » suit le verbe.',
                    ],
                    [
                        'question' => '— Tu comprends la question ? — Non, ___',
                        'choices' => [
                            ['choice_text' => 'je comprends très bien.', 'is_correct' => false],
                            ['choice_text' => 'je ne pas comprends.', 'is_correct' => false],
                            ['choice_text' => 'je comprends ne pas.', 'is_correct' => false],
                            ['choice_text' => 'je ne comprends pas.', 'is_correct' => true],
                        ],
                        'explanation' => 'La réponse « Non » demande une phrase négative : « je ne comprends pas ».',
                    ],
                    [
                        'question' => 'Quelle phrase indique qu’une action a cessé ?',
                        'choices' => [
                            ['choice_text' => 'Elle ne travaille plus ici.', 'is_correct' => true],
                            ['choice_text' => 'Elle travaille encore ici.', 'is_correct' => false],
                            ['choice_text' => 'Elle travaille ici.', 'is_correct' => false],
                            ['choice_text' => 'Elle travaillera ici.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne … plus » indique qu’une situation qui existait avant a pris fin.',
                    ],
                    [
                        'question' => 'Quelle phrase est construite correctement ?',
                        'choices' => [
                            ['choice_text' => 'Nous personne ne connaissons ici.', 'is_correct' => false],
                            ['choice_text' => 'Nous ne personne connaissons ici.', 'is_correct' => false],
                            ['choice_text' => 'Nous ne connaissons personne ici.', 'is_correct' => true],
                            ['choice_text' => 'Nous connaissons ne personne ici.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ne » se place avant le verbe et « personne » après lui : « ne connaissons personne ».',
                    ],
                    [
                        'question' => 'Il fait nuit dans la pièce. Que dit Salma ?',
                        'choices' => [
                            ['choice_text' => 'Je ne rien vois.', 'is_correct' => false],
                            ['choice_text' => 'Je vois ne rien.', 'is_correct' => false],
                            ['choice_text' => 'Je rien ne vois.', 'is_correct' => false],
                            ['choice_text' => 'Je ne vois rien.', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec un verbe conjugué, « ne » vient avant lui et « rien » après : « ne vois rien ».',
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
                        'question' => 'Vous proposez à Sara de venir à la fête demain. Quelle question avec « est-ce que » posez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Est-ce que tu viens demain ?', 'is_correct' => true],
                            ['choice_text' => 'Est-ce tu que viens demain ?', 'is_correct' => false],
                            ['choice_text' => 'Tu est-ce que viens demain ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que viens tu demain ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « est-ce que » on garde l’ordre sujet + verbe : « Est-ce que tu viens demain ? »',
                    ],
                    [
                        'question' => 'Vous voulez connaître la ville de votre nouveau voisin. Quelle question posez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Quand habites-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi habites-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Comment habites-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Où habites-tu ?', 'is_correct' => true],
                        ],
                        'explanation' => 'Le mot interrogatif « où » sert à demander un lieu.',
                    ],
                    [
                        'question' => 'Un élève veut savoir l’heure de début du cours. Quelle question pose-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Quand commence le cours ?', 'is_correct' => true],
                            ['choice_text' => 'Où commence le cours ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi commence le cours ?', 'is_correct' => false],
                            ['choice_text' => 'Qui commence le cours ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Quand » sert à demander à quel moment une action se produit.',
                    ],
                    [
                        'question' => 'Entre amis, à l’oral, quelle question simple propose une sortie ce soir ?',
                        'choices' => [
                            ['choice_text' => 'Tu viens-tu ce soir ?', 'is_correct' => false],
                            ['choice_text' => 'Est-ce que tu ce soir viens ?', 'is_correct' => false],
                            ['choice_text' => 'Tu ce soir viens ?', 'is_correct' => false],
                            ['choice_text' => 'Tu viens ce soir ?', 'is_correct' => true],
                        ],
                        'explanation' => 'À l’oral, une phrase affirmative devient une question grâce à l’intonation : « Tu viens ce soir ? »',
                    ],
                    [
                        'question' => 'Rim arrive en retard. Quelle question demande la raison ?',
                        'choices' => [
                            ['choice_text' => 'Comment arrives-tu en retard ?', 'is_correct' => false],
                            ['choice_text' => 'Quand arrives-tu en retard ?', 'is_correct' => false],
                            ['choice_text' => 'Qui arrive en retard ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi arrives-tu en retard ?', 'is_correct' => true],
                        ],
                        'explanation' => '« Pourquoi » sert à demander la cause d’un fait.',
                    ],
                    [
                        'question' => 'Complétez pour demander ce que Nour mange : « ___ tu manges ce matin ? »',
                        'choices' => [
                            ['choice_text' => 'Qu’est-ce qui', 'is_correct' => false],
                            ['choice_text' => 'Quoi est-ce que', 'is_correct' => false],
                            ['choice_text' => 'Qu’est-ce que', 'is_correct' => true],
                            ['choice_text' => 'Qu’est-ce', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour interroger sur une chose, on emploie « qu’est-ce que », puis le sujet et le verbe : « Qu’est-ce que tu manges ? »',
                    ],
                    [
                        'question' => 'À la librairie, vous voulez connaître le prix d’un livre. Quelle question posez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Combien coûtent ce livre ?', 'is_correct' => false],
                            ['choice_text' => 'Combien coûte ce livre ?', 'is_correct' => true],
                            ['choice_text' => 'Combien coûtes ce livre ?', 'is_correct' => false],
                            ['choice_text' => 'Combien ce livre coûtent ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe s’accorde avec « ce livre » (singulier) : « Combien coûte ce livre ? »',
                    ],
                    [
                        'question' => 'Quelle question est correctement formulée avec « qui » ?',
                        'choices' => [
                            ['choice_text' => 'Qui vient avec nous ?', 'is_correct' => true],
                            ['choice_text' => 'Qui viens avec nous ?', 'is_correct' => false],
                            ['choice_text' => 'Qui avec nous vient ?', 'is_correct' => false],
                            ['choice_text' => 'Vient qui avec nous ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Qui » est ici le sujet, avec un verbe à la 3e personne du singulier : « Qui vient avec nous ? »',
                    ],
                    [
                        'question' => 'Vous croisez votre professeur et vous voulez prendre de ses nouvelles. Quelle question posez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Où allez-vous ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi allez-vous ?', 'is_correct' => false],
                            ['choice_text' => 'Comment allez-vous ?', 'is_correct' => true],
                            ['choice_text' => 'Quand allez-vous ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Comment » demande l’état d’une personne. Avec un professeur, on emploie « vous ».',
                    ],
                    [
                        'question' => 'Vous voulez poser la question « Tu aimes le café ? » avec inversion du sujet. Que dites-vous ?',
                        'choices' => [
                            ['choice_text' => 'Tu aimes-tu le café ?', 'is_correct' => false],
                            ['choice_text' => 'Aimes-tu le café ?', 'is_correct' => true],
                            ['choice_text' => 'Le café aimes-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Aime-tu le café ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec l’inversion, le pronom sujet se place après le verbe et on les relie par un trait d’union.',
                    ],
                    [
                        'question' => 'Complétez : « ___ heure est-il ? »',
                        'choices' => [
                            ['choice_text' => 'Quel', 'is_correct' => false],
                            ['choice_text' => 'Quels', 'is_correct' => false],
                            ['choice_text' => 'Quelle', 'is_correct' => true],
                            ['choice_text' => 'Quelles', 'is_correct' => false],
                        ],
                        'explanation' => '« Heure » est un nom féminin singulier, donc on écrit « Quelle heure est-il ? »',
                    ],
                    [
                        'question' => 'Vous demandez son prénom à un nouvel élève de votre âge. Quelle question posez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Comment appelles-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Comment t’appelles-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Comment t’appelle-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Qui t’appelles-tu ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe s’appeler est pronominal : « t’ » reprend « tu », et le verbe s’accorde à la 2e personne : « appelles ».',
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
                        'question' => 'Quel petit mot permet d’exprimer une opposition entre deux idées ?',
                        'choices' => [
                            ['choice_text' => 'et', 'is_correct' => false],
                            ['choice_text' => 'donc', 'is_correct' => false],
                            ['choice_text' => 'mais', 'is_correct' => true],
                            ['choice_text' => 'ou', 'is_correct' => false],
                        ],
                        'explanation' => 'Le connecteur « mais » sert à opposer ou à nuancer deux idées.',
                    ],
                    [
                        'question' => 'Complétez : « Il pleut, ___ je prends un parapluie. »',
                        'choices' => [
                            ['choice_text' => 'mais', 'is_correct' => false],
                            ['choice_text' => 'ou', 'is_correct' => false],
                            ['choice_text' => 'car', 'is_correct' => false],
                            ['choice_text' => 'donc', 'is_correct' => true],
                        ],
                        'explanation' => '« Donc » introduit ici la conséquence : il pleut, donc je prends un parapluie.',
                    ],
                    [
                        'question' => 'Complétez : « Amine achète du pain ___ du lait. »',
                        'choices' => [
                            ['choice_text' => 'mais', 'is_correct' => false],
                            ['choice_text' => 'donc', 'is_correct' => false],
                            ['choice_text' => 'et', 'is_correct' => true],
                            ['choice_text' => 'parce que', 'is_correct' => false],
                        ],
                        'explanation' => '« Et » ajoute un deuxième élément au premier.',
                    ],
                    [
                        'question' => 'Complétez pour donner la raison : « Je reste à la maison ___ je suis malade. »',
                        'choices' => [
                            ['choice_text' => 'mais', 'is_correct' => false],
                            ['choice_text' => 'parce que', 'is_correct' => true],
                            ['choice_text' => 'donc', 'is_correct' => false],
                            ['choice_text' => 'ou', 'is_correct' => false],
                        ],
                        'explanation' => '« Parce que » introduit la cause : je reste à la maison parce que je suis malade.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « ou » ?',
                        'choices' => [
                            ['choice_text' => 'Tu veux du thé donc du café ?', 'is_correct' => false],
                            ['choice_text' => 'Tu veux du thé mais du café ?', 'is_correct' => false],
                            ['choice_text' => 'Tu veux du thé parce que du café ?', 'is_correct' => false],
                            ['choice_text' => 'Tu veux du thé ou du café ?', 'is_correct' => true],
                        ],
                        'explanation' => '« Ou » permet de présenter un choix entre plusieurs possibilités.',
                    ],
                    [
                        'question' => 'Quelle phrase relie bien deux propositions avec « et » ?',
                        'choices' => [
                            ['choice_text' => 'Je travaille et mon frère étudie.', 'is_correct' => true],
                            ['choice_text' => 'Je travaille mon frère étudie.', 'is_correct' => false],
                            ['choice_text' => 'Je travaille et, mon frère étudie.', 'is_correct' => false],
                            ['choice_text' => 'Je travaille mon frère et étudie.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le connecteur « et » relie correctement les deux propositions : « Je travaille » et « mon frère étudie ».',
                    ],
                    [
                        'question' => 'Quelle phrase donne la cause de la fatigue de Samir ?',
                        'choices' => [
                            ['choice_text' => 'Samir est fatigué mais il a beaucoup travaillé.', 'is_correct' => false],
                            ['choice_text' => 'Samir est fatigué et il a beaucoup travaillé.', 'is_correct' => false],
                            ['choice_text' => 'Samir est fatigué donc il a beaucoup travaillé.', 'is_correct' => false],
                            ['choice_text' => 'Samir est fatigué parce qu’il a beaucoup travaillé.', 'is_correct' => true],
                        ],
                        'explanation' => '« Parce que » introduit la raison : le travail explique la fatigue.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime une conséquence ?',
                        'choices' => [
                            ['choice_text' => 'Il a beaucoup étudié, mais il a réussi.', 'is_correct' => false],
                            ['choice_text' => 'Il a beaucoup étudié, donc il a réussi.', 'is_correct' => true],
                            ['choice_text' => 'Il a beaucoup étudié, ou il a réussi.', 'is_correct' => false],
                            ['choice_text' => 'Il a beaucoup étudié, parce qu’il a réussi.', 'is_correct' => false],
                        ],
                        'explanation' => '« Donc » introduit ici la conséquence du fait d’avoir beaucoup étudié.',
                    ],
                    [
                        'question' => 'Nadia raconte sa matinée : « Je me lève, je prends mon café, ___ je pars au travail. »',
                        'choices' => [
                            ['choice_text' => 'puis', 'is_correct' => true],
                            ['choice_text' => 'ou', 'is_correct' => false],
                            ['choice_text' => 'mais', 'is_correct' => false],
                            ['choice_text' => 'pourquoi', 'is_correct' => false],
                        ],
                        'explanation' => '« Puis » relie deux actions qui se suivent dans le temps.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement ponctuée ?',
                        'choices' => [
                            ['choice_text' => 'Quand il pleut nous restons, à la maison.', 'is_correct' => false],
                            ['choice_text' => 'Quand, il pleut nous restons à la maison.', 'is_correct' => false],
                            ['choice_text' => 'Quand il pleut, nous restons à la maison.', 'is_correct' => true],
                            ['choice_text' => 'Quand il pleut nous, restons à la maison.', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand la proposition avec « quand » ouvre la phrase, on la sépare de la principale par une virgule.',
                    ],
                    [
                        'question' => 'Quelle phrase est bien ponctuée avec une énumération ?',
                        'choices' => [
                            ['choice_text' => 'Je mange du pain, du fromage et des olives.', 'is_correct' => true],
                            ['choice_text' => 'Je mange du pain du fromage et des olives.', 'is_correct' => false],
                            ['choice_text' => 'Je mange, du pain, du fromage et des olives.', 'is_correct' => false],
                            ['choice_text' => 'Je mange du pain, du fromage, et des olives.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une liste, une virgule sépare les éléments et « et » introduit le dernier, sans virgule devant.',
                    ],
                    [
                        'question' => 'Quelle phrase oppose le souhait de Hind et la réalité ?',
                        'choices' => [
                            ['choice_text' => 'Hind veut aller à la plage, donc il fait froid.', 'is_correct' => false],
                            ['choice_text' => 'Hind veut aller à la plage, ou il fait froid.', 'is_correct' => false],
                            ['choice_text' => 'Hind veut aller à la plage, parce qu’il fait froid.', 'is_correct' => false],
                            ['choice_text' => 'Hind veut aller à la plage, mais il fait froid.', 'is_correct' => true],
                        ],
                        'explanation' => '« Mais » relie deux idées qui s’opposent : l’envie et le froid.',
                    ],
                    [
                        'question' => 'Quelle phrase est complète et naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Ce matin, ma sœur le train prend pour aller au travail.', 'is_correct' => false],
                            ['choice_text' => 'Ce matin, ma sœur prend le train pour aller au travail.', 'is_correct' => true],
                            ['choice_text' => 'Ce matin, ma sœur prend pour aller le train au travail.', 'is_correct' => false],
                            ['choice_text' => 'Ce matin, ma sœur prend le train pour aller travail.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase suit l’ordre complément de temps, sujet, verbe, compléments, avec « au » devant « travail ».',
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
