<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishAlphabetPronunciationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'spanish-alphabet-pronunciation')->firstOrFail();

        $quizzes = [
            [
                'title' => 'L’alphabet espagnol et les noms des lettres',
                'description' => 'Familiarisez-vous avec l’alphabet espagnol, les noms courants des lettres, et les sons qu’on entend en épelant des mots à voix haute.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quand on épelle le mot espagnol casa, quel est le nom de la lettre qui donne le premier son /k/ ?',
                        'choices' => [
                            ['choice_text' => 'ca', 'is_correct' => false],
                            ['choice_text' => 'ce', 'is_correct' => true],
                            ['choice_text' => 'cu', 'is_correct' => false],
                            ['choice_text' => 'ka', 'is_correct' => false],
                        ],
                        'explanation' => 'En espagnol, la lettre c s’appelle ce ; ka n’est pas le nom de cette lettre.',
                    ],
                    [
                        'question' => 'Quelle lettre vient juste après le H dans l’alphabet espagnol ?',
                        'choices' => [
                            ['choice_text' => 'I', 'is_correct' => true],
                            ['choice_text' => 'G', 'is_correct' => false],
                            ['choice_text' => 'J', 'is_correct' => false],
                            ['choice_text' => 'K', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ordre est G, H, I, J : le I suit directement le H.',
                    ],
                    [
                        'question' => 'Une professeure demande à Sofia de nommer la lettre ñ. Que doit-elle répondre ?',
                        'choices' => [
                            ['choice_text' => 'ene', 'is_correct' => false],
                            ['choice_text' => 'ene doble', 'is_correct' => false],
                            ['choice_text' => 'ñe', 'is_correct' => false],
                            ['choice_text' => 'eñe', 'is_correct' => true],
                        ],
                        'explanation' => 'Le nom de ñ est eñe ; c’est une lettre à part dans l’alphabet espagnol.',
                    ],
                    [
                        'question' => 'Quelle série ne contient que des voyelles en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'b, e, o', 'is_correct' => false],
                            ['choice_text' => 'a, m, u', 'is_correct' => false],
                            ['choice_text' => 'a, e, i', 'is_correct' => true],
                            ['choice_text' => 'i, r, o', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cinq voyelles de base sont a, e, i, o et u ; les autres séries contiennent une consonne.',
                    ],
                    [
                        'question' => 'Quelle lettre s’appelle jota en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'G', 'is_correct' => false],
                            ['choice_text' => 'J', 'is_correct' => true],
                            ['choice_text' => 'H', 'is_correct' => false],
                            ['choice_text' => 'X', 'is_correct' => false],
                        ],
                        'explanation' => 'La lettre J s’appelle jota ; son son habituel est aussi important dans des mots comme jardín.',
                    ],
                    [
                        'question' => 'Yassine regarde le mot dedo et veut nommer sa première lettre. Quel nom doit-il utiliser ?',
                        'choices' => [
                            ['choice_text' => 'deta', 'is_correct' => false],
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'di', 'is_correct' => false],
                            ['choice_text' => 'de', 'is_correct' => true],
                        ],
                        'explanation' => 'La première lettre est d, dont le nom espagnol est de.',
                    ],
                    [
                        'question' => 'Quelle suite présente les lettres C, D, E dans le bon ordre alphabétique espagnol, avec leurs noms ?',
                        'choices' => [
                            ['choice_text' => 'ce, de, e', 'is_correct' => true],
                            ['choice_text' => 'de, ce, e', 'is_correct' => false],
                            ['choice_text' => 'e, de, ce', 'is_correct' => false],
                            ['choice_text' => 'ce, e, de', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ordre alphabétique est C, D, E, et les noms des lettres sont ce, de, e.',
                    ],
                    [
                        'question' => 'Un élève écrit l’alphabet et s’arrête après le X. Quelles deux lettres restent dans l’alphabet espagnol moderne ?',
                        'choices' => [
                            ['choice_text' => 'Z et Ñ', 'is_correct' => false],
                            ['choice_text' => 'Ñ et Y', 'is_correct' => false],
                            ['choice_text' => 'Y et Z', 'is_correct' => true],
                            ['choice_text' => 'W et Z', 'is_correct' => false],
                        ],
                        'explanation' => 'L’alphabet espagnol moderne continue après le X avec Y, puis Z.',
                    ],
                    [
                        'question' => 'Quel nom de lettre ressemble au début du mot ese ?',
                        'choices' => [
                            ['choice_text' => 'C', 'is_correct' => false],
                            ['choice_text' => 'S', 'is_correct' => true],
                            ['choice_text' => 'Z', 'is_correct' => false],
                            ['choice_text' => 'X', 'is_correct' => false],
                        ],
                        'explanation' => 'Ese est le nom espagnol de la lettre s.',
                    ],
                    [
                        'question' => 'Quelqu’un dit ve en épelant un mot. Quelle lettre nomme-t-il ?',
                        'choices' => [
                            ['choice_text' => 'V', 'is_correct' => true],
                            ['choice_text' => 'B', 'is_correct' => false],
                            ['choice_text' => 'W', 'is_correct' => false],
                            ['choice_text' => 'F', 'is_correct' => false],
                        ],
                        'explanation' => 'Ve est un nom courant de la lettre v ; selon le pays, on utilise aussi des variantes comme uve.',
                    ],
                ],
            ],
            [
                'title' => 'Les voyelles espagnoles et leurs sons clairs',
                'description' => 'Entraînez-vous sur les cinq sons voyelles de l’espagnol et apprenez à distinguer les voyelles espagnoles de leurs équivalents courants en français.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quelle voyelle se prononce normalement avec un son proche du a dans le mot français « chat » ?',
                        'choices' => [
                            ['choice_text' => 'e', 'is_correct' => false],
                            ['choice_text' => 'i', 'is_correct' => false],
                            ['choice_text' => 'o', 'is_correct' => false],
                            ['choice_text' => 'a', 'is_correct' => true],
                        ],
                        'explanation' => 'Le a espagnol est en général une voyelle ouverte et stable, proche du a français.',
                    ],
                    [
                        'question' => 'Léa prononce mesa avec un son de e différent chaque fois. Quelle habitude l’aiderait le plus ?',
                        'choices' => [
                            ['choice_text' => 'rendre le e muet', 'is_correct' => false],
                            ['choice_text' => 'prononcer le e comme un son très fermé et changeant', 'is_correct' => false],
                            ['choice_text' => 'garder un son de e assez stable', 'is_correct' => true],
                            ['choice_text' => 'accentuer chaque syllabe de la même façon', 'is_correct' => false],
                        ],
                        'explanation' => 'Les voyelles espagnoles sont plutôt constantes, donc garder le e stable rend la prononciation plus claire.',
                    ],
                    [
                        'question' => 'Quel mot commence par le son voyelle représenté par o ?',
                        'choices' => [
                            ['choice_text' => 'mesa', 'is_correct' => false],
                            ['choice_text' => 'oso', 'is_correct' => true],
                            ['choice_text' => 'isla', 'is_correct' => false],
                            ['choice_text' => 'uva', 'is_correct' => false],
                        ],
                        'explanation' => 'Oso commence par o ; mesa commence par e, isla par i, et uva par u.',
                    ],
                    [
                        'question' => 'Quelle paire commence par le même son voyelle ?',
                        'choices' => [
                            ['choice_text' => 'amigo et abril', 'is_correct' => true],
                            ['choice_text' => 'español et isla', 'is_correct' => false],
                            ['choice_text' => 'oso et uva', 'is_correct' => false],
                            ['choice_text' => 'uno et árbol', 'is_correct' => false],
                        ],
                        'explanation' => 'Amigo et abril commencent tous deux par la voyelle a.',
                    ],
                    [
                        'question' => 'Pourquoi la prononciation des voyelles espagnoles paraît-elle simple à beaucoup de débutants ?',
                        'choices' => [
                            ['choice_text' => 'chaque lettre a toujours un seul son possible', 'is_correct' => false],
                            ['choice_text' => 'l’espagnol n’a aucun changement de consonnes', 'is_correct' => false],
                            ['choice_text' => 'l’accent tonique ne change jamais', 'is_correct' => false],
                            ['choice_text' => 'les voyelles gardent généralement un son de base stable', 'is_correct' => true],
                        ],
                        'explanation' => 'Les voyelles espagnoles sont très stables, ce qui aide les apprenants à prévoir la prononciation.',
                    ],
                    [
                        'question' => 'Un élève lit le mot bonito et prononce les deux o de façon différente à cause de l’orthographe. Quelle approche est plus naturelle en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'rendre le premier o muet', 'is_correct' => false],
                            ['choice_text' => 'transformer le second o en diphtongue', 'is_correct' => false],
                            ['choice_text' => 'garder les deux o proches du même son de base', 'is_correct' => true],
                            ['choice_text' => 'prononcer un des o comme un son très fermé et allongé', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux lettres o de bonito ont normalement la même qualité vocalique de base en espagnol.',
                    ],
                    [
                        'question' => 'Quel mot contient les cinq voyelles de base de l’espagnol ?',
                        'choices' => [
                            ['choice_text' => 'camino', 'is_correct' => false],
                            ['choice_text' => 'murciélago', 'is_correct' => true],
                            ['choice_text' => 'pequeño', 'is_correct' => false],
                            ['choice_text' => 'trabajador', 'is_correct' => false],
                        ],
                        'explanation' => 'Murciélago contient u, i, é, a et o, soit les cinq voyelles.',
                    ],
                    [
                        'question' => 'Si la dernière voyelle d’un mot espagnol est u, quel son un débutant doit-il attendre ?',
                        'choices' => [
                            ['choice_text' => 'un son de u stable', 'is_correct' => true],
                            ['choice_text' => 'une voyelle muette', 'is_correct' => false],
                            ['choice_text' => 'un son très bref et relâché', 'is_correct' => false],
                            ['choice_text' => 'le même son que le e espagnol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le u espagnol a normalement un son stable, bien que le contexte puisse l’influencer légèrement.',
                    ],
                    [
                        'question' => 'Quelle stratégie de prononciation est généralement la plus utile pour les voyelles espagnoles ?',
                        'choices' => [
                            ['choice_text' => 'viser des sons de voyelles clairs, courts et stables', 'is_correct' => true],
                            ['choice_text' => 'étirer chaque voyelle pendant plusieurs secondes', 'is_correct' => false],
                            ['choice_text' => 'réduire fortement chaque voyelle non accentuée', 'is_correct' => false],
                            ['choice_text' => 'changer la voyelle pour qu’elle ressemble à l’orthographe française', 'is_correct' => false],
                        ],
                        'explanation' => 'Des voyelles claires et relativement stables forment une bonne base pour la prononciation espagnole débutante.',
                    ],
                    [
                        'question' => 'Karim prononce día avec un i qui sonne comme une voyelle claire séparée. Est-ce un bon modèle pour un débutant ?',
                        'choices' => [
                            ['choice_text' => 'non, car le i est toujours muet', 'is_correct' => false],
                            ['choice_text' => 'non, car le i doit sonner comme un y très fermé', 'is_correct' => false],
                            ['choice_text' => 'oui, mais seulement devant r', 'is_correct' => false],
                            ['choice_text' => 'oui, car le i est une voyelle claire en espagnol', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans día, le i se prononce comme une voyelle claire, et l’accent écrit aide aussi à marquer les syllabes.',
                    ],
                ],
            ],
            [
                'title' => 'Consonnes à sons prévisibles',
                'description' => 'Gagnez en confiance avec des consonnes courantes dont la prononciation espagnole est souvent facile à prévoir, comme m, n, p, t, l et s.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quelle consonne garde un son clair à la fois dans mapa et dans mamá ?',
                        'choices' => [
                            ['choice_text' => 'm', 'is_correct' => true],
                            ['choice_text' => 'c', 'is_correct' => false],
                            ['choice_text' => 'g', 'is_correct' => false],
                            ['choice_text' => 'j', 'is_correct' => false],
                        ],
                        'explanation' => 'La lettre m garde un son de m clair dans les deux mots.',
                    ],
                    [
                        'question' => 'Un apprenant prononce le p de papel presque comme un b français. Quelle correction est la plus utile ?',
                        'choices' => [
                            ['choice_text' => 'rendre le p muet', 'is_correct' => false],
                            ['choice_text' => 'transformer le p en f', 'is_correct' => false],
                            ['choice_text' => 'utiliser le son du j espagnol', 'is_correct' => false],
                            ['choice_text' => 'garder un son de p clair', 'is_correct' => true],
                        ],
                        'explanation' => 'Le p espagnol est normalement un son de p clair ; le remplacer par un b change le mot.',
                    ],
                    [
                        'question' => 'Quel mot commence par la consonne n ?',
                        'choices' => [
                            ['choice_text' => 'mesa', 'is_correct' => false],
                            ['choice_text' => 'nube', 'is_correct' => true],
                            ['choice_text' => 'silla', 'is_correct' => false],
                            ['choice_text' => 'uva', 'is_correct' => false],
                        ],
                        'explanation' => 'Nube commence par n.',
                    ],
                    [
                        'question' => 'Quel son représente normalement la première consonne de tomate ?',
                        'choices' => [
                            ['choice_text' => 'd', 'is_correct' => false],
                            ['choice_text' => 'k', 'is_correct' => false],
                            ['choice_text' => 't', 'is_correct' => true],
                            ['choice_text' => 'r', 'is_correct' => false],
                        ],
                        'explanation' => 'La première lettre de tomate est t, prononcée comme un t espagnol clair.',
                    ],
                    [
                        'question' => 'Quelle paire commence par la même consonne ?',
                        'choices' => [
                            ['choice_text' => 'mesa et nube', 'is_correct' => false],
                            ['choice_text' => 'luna et lápiz', 'is_correct' => true],
                            ['choice_text' => 'pato et tasa', 'is_correct' => false],
                            ['choice_text' => 'silla et mano', 'is_correct' => false],
                        ],
                        'explanation' => 'Luna et lápiz commencent tous deux par l.',
                    ],
                    [
                        'question' => 'Yasmine lit le mot sopa. Quels deux sons de consonnes devraient être les plus faciles à identifier ?',
                        'choices' => [
                            ['choice_text' => 's et p', 'is_correct' => true],
                            ['choice_text' => 'c et t', 'is_correct' => false],
                            ['choice_text' => 'j et r', 'is_correct' => false],
                            ['choice_text' => 'g et b', 'is_correct' => false],
                        ],
                        'explanation' => 'Sopa commence par s et contient p dans la deuxième syllabe, soit un schéma simple s-p.',
                    ],
                    [
                        'question' => 'Dans le mot ventana, combien de lettres n sont écrites ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => true],
                        ],
                        'explanation' => 'Ventana contient un seul n, au milieu du mot.',
                    ],
                    [
                        'question' => 'Quel mot a un son de s au début et à la fin du mot ?',
                        'choices' => [
                            ['choice_text' => 'mesa', 'is_correct' => false],
                            ['choice_text' => 'silla', 'is_correct' => false],
                            ['choice_text' => 'seis', 'is_correct' => true],
                            ['choice_text' => 'casa', 'is_correct' => false],
                        ],
                        'explanation' => 'Seis commence et finit par s ; les autres mots n’ont pas de s aux deux positions.',
                    ],
                    [
                        'question' => 'Un apprenant lit le mot papel et prononce le l final comme une syllabe séparée. Quelle est la meilleure approche ?',
                        'choices' => [
                            ['choice_text' => 'ajouter une nouvelle voyelle après le l', 'is_correct' => false],
                            ['choice_text' => 'rendre le l muet', 'is_correct' => false],
                            ['choice_text' => 'garder le l final dans la dernière syllabe', 'is_correct' => true],
                            ['choice_text' => 'changer le l en r', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans papel, le l final appartient à la deuxième syllabe : pa-pel.',
                    ],
                    [
                        'question' => 'Quelle affirmation correspond le mieux à la prononciation espagnole débutante ?',
                        'choices' => [
                            ['choice_text' => 'chaque consonne change de son dans chaque mot', 'is_correct' => false],
                            ['choice_text' => 'les consonnes sont généralement muettes en fin de mot', 'is_correct' => false],
                            ['choice_text' => 'seules les voyelles se prononcent clairement', 'is_correct' => false],
                            ['choice_text' => 'beaucoup de consonnes courantes ont des sons assez stables', 'is_correct' => true],
                        ],
                        'explanation' => 'Beaucoup de consonnes courantes sont prévisibles, même si certaines lettres comme c, g et r demandent plus d’attention.',
                    ],
                ],
            ],
            [
                'title' => 'C, G, Qu et le contexte',
                'description' => 'Apprenez les règles de base pour c, g et qu, et entraînez-vous à repérer comment les voyelles voisines influencent la prononciation.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Dans casa, comment se prononce généralement le c selon l’enseignement standard pour débutants ?',
                        'choices' => [
                            ['choice_text' => 'comme s', 'is_correct' => false],
                            ['choice_text' => 'comme ch', 'is_correct' => false],
                            ['choice_text' => 'comme j', 'is_correct' => false],
                            ['choice_text' => 'comme k', 'is_correct' => true],
                        ],
                        'explanation' => 'Devant a, o et u, le c a normalement un son de k, comme dans casa.',
                    ],
                    [
                        'question' => 'Dans le mot cena, quel son a normalement le c dans une grande partie de l’Amérique latine ?',
                        'choices' => [
                            ['choice_text' => 's', 'is_correct' => true],
                            ['choice_text' => 'k', 'is_correct' => false],
                            ['choice_text' => 'j', 'is_correct' => false],
                            ['choice_text' => 'ch', 'is_correct' => false],
                        ],
                        'explanation' => 'Devant e et i, le c se prononce comme s dans une grande partie de l’Amérique latine.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on qu dans des mots comme queso ?',
                        'choices' => [
                            ['choice_text' => 'pour que le q sonne comme r', 'is_correct' => false],
                            ['choice_text' => 'pour garder le son k devant e', 'is_correct' => true],
                            ['choice_text' => 'pour rendre le e toujours muet', 'is_correct' => false],
                            ['choice_text' => 'pour remplacer chaque c', 'is_correct' => false],
                        ],
                        'explanation' => 'L’espagnol utilise qu devant e ou i pour représenter le son k, comme dans queso.',
                    ],
                    [
                        'question' => 'Quel mot contient un c avec le son dur k ?',
                        'choices' => [
                            ['choice_text' => 'cena', 'is_correct' => false],
                            ['choice_text' => 'cielo', 'is_correct' => false],
                            ['choice_text' => 'cuna', 'is_correct' => true],
                            ['choice_text' => 'cinco', 'is_correct' => false],
                        ],
                        'explanation' => 'Cuna a un c devant u, ce qui donne le son k.',
                    ],
                    [
                        'question' => 'Yunes lit gente et donne au g le même son que dans gato. Qu’est-ce qui doit changer ?',
                        'choices' => [
                            ['choice_text' => 'le g doit toujours sonner comme k', 'is_correct' => false],
                            ['choice_text' => 'devant e et i, le g se prononce comme le j de « jota »', 'is_correct' => true],
                            ['choice_text' => 'le g devient muet devant e', 'is_correct' => false],
                            ['choice_text' => 'le g se prononce comme b devant e', 'is_correct' => false],
                        ],
                        'explanation' => 'Devant e et i, le g se prononce comme le j de « jota » ; devant a, o et u, il garde généralement le son dur de « gato ».',
                    ],
                    [
                        'question' => 'Quel mot utilise gu pour garder le son dur du g devant e ?',
                        'choices' => [
                            ['choice_text' => 'gente', 'is_correct' => false],
                            ['choice_text' => 'giro', 'is_correct' => false],
                            ['choice_text' => 'gimnasio', 'is_correct' => false],
                            ['choice_text' => 'guerra', 'is_correct' => true],
                        ],
                        'explanation' => 'Guerra utilise gu devant e pour que le g garde son son dur.',
                    ],
                    [
                        'question' => 'Dans le mot guitarra, quelle combinaison de lettres porte le son dur du g ?',
                        'choices' => [
                            ['choice_text' => 'gu', 'is_correct' => true],
                            ['choice_text' => 'gi', 'is_correct' => false],
                            ['choice_text' => 'rr', 'is_correct' => false],
                            ['choice_text' => 'qu', 'is_correct' => false],
                        ],
                        'explanation' => 'La combinaison gu dans guitarra garde le g dur devant i.',
                    ],
                    [
                        'question' => 'Un apprenant écrit getato en essayant d’orthographier un mot avec un son dur de g devant e. Quel schéma orthographique faut-il utiliser à la place ?',
                        'choices' => [
                            ['choice_text' => 'qu', 'is_correct' => false],
                            ['choice_text' => 'c', 'is_correct' => false],
                            ['choice_text' => 'gu', 'is_correct' => true],
                            ['choice_text' => 'j', 'is_correct' => false],
                        ],
                        'explanation' => 'Devant e ou i, gu permet de garder le son dur du g, comme dans guerra ou guitarra.',
                    ],
                    [
                        'question' => 'Quelle comparaison est correcte ?',
                        'choices' => [
                            ['choice_text' => 'casa a le son k, cena a le son s dans une grande partie de l’Amérique latine', 'is_correct' => true],
                            ['choice_text' => 'casa a le son s, cena a le son k', 'is_correct' => false],
                            ['choice_text' => 'les deux ont toujours le son ch', 'is_correct' => false],
                            ['choice_text' => 'les deux sont muets', 'is_correct' => false],
                        ],
                        'explanation' => 'Le c change selon la voyelle qui suit : son dur k devant a, o, u, et son s dans une grande partie de la prononciation latino-américaine devant e, i.',
                    ],
                    [
                        'question' => 'Nora entend le son k dans quiero. Quel schéma orthographique l’explique ?',
                        'choices' => [
                            ['choice_text' => 'gu', 'is_correct' => false],
                            ['choice_text' => 'rr', 'is_correct' => false],
                            ['choice_text' => 'qu', 'is_correct' => true],
                            ['choice_text' => 'll', 'is_correct' => false],
                        ],
                        'explanation' => 'Qu dans quiero représente le son k devant e.',
                    ],
                ],
            ],
            [
                'title' => 'H, J, X et les sons muets ou forts',
                'description' => 'Travaillez certaines lettres qui provoquent souvent une hésitation, en particulier le h muet et les sons plus forts de j et des orthographes associées.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Comment se prononce le h de hola en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'comme un h aspiré', 'is_correct' => false],
                            ['choice_text' => 'comme le j espagnol', 'is_correct' => false],
                            ['choice_text' => 'il est muet', 'is_correct' => true],
                            ['choice_text' => 'comme k', 'is_correct' => false],
                        ],
                        'explanation' => 'Le h de hola est muet, donc le mot commence par le son voyelle o.',
                    ],
                    [
                        'question' => 'Un apprenant prononce fortement le h de hotel. Quelle est la prononciation espagnole habituelle ?',
                        'choices' => [
                            ['choice_text' => 'le h sonne comme j', 'is_correct' => false],
                            ['choice_text' => 'le h sonne comme f', 'is_correct' => false],
                            ['choice_text' => 'le h sonne comme y', 'is_correct' => false],
                            ['choice_text' => 'le h est muet', 'is_correct' => true],
                        ],
                        'explanation' => 'Le h espagnol est normalement muet, donc hotel commence par le son o.',
                    ],
                    [
                        'question' => 'Quel mot commence par le son fort associé au j espagnol ?',
                        'choices' => [
                            ['choice_text' => 'jugo', 'is_correct' => true],
                            ['choice_text' => 'mesa', 'is_correct' => false],
                            ['choice_text' => 'nube', 'is_correct' => false],
                            ['choice_text' => 'pato', 'is_correct' => false],
                        ],
                        'explanation' => 'Jugo commence par j, qui a le son fort et un peu rauque qu’on entend dans des mots espagnols comme jardín.',
                    ],
                    [
                        'question' => 'Dans de nombreuses variétés d’espagnol, comment commence le x de México ?',
                        'choices' => [
                            ['choice_text' => 'par une consonne muette', 'is_correct' => false],
                            ['choice_text' => 'par un son proche du j espagnol', 'is_correct' => true],
                            ['choice_text' => 'par un son de p', 'is_correct' => false],
                            ['choice_text' => 'par un r roulé', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans México, le x représente traditionnellement un son proche du j espagnol, surtout dans la prononciation standard.',
                    ],
                    [
                        'question' => 'Pourquoi le h peut-il perturber les francophones débutants ?',
                        'choices' => [
                            ['choice_text' => 'le h espagnol devient toujours j', 'is_correct' => false],
                            ['choice_text' => 'en français le h peut parfois s’aspirer, mais le h espagnol est normalement muet', 'is_correct' => true],
                            ['choice_text' => 'le h espagnol ne se prononce qu’à la fin', 'is_correct' => false],
                            ['choice_text' => 'le français n’utilise jamais le h', 'is_correct' => false],
                        ],
                        'explanation' => 'La différence principale est que le h espagnol est normalement muet, à la différence du h parfois senti en français.',
                    ],
                    [
                        'question' => 'Quel mot contient un h muet suivi d’un j prononcé ?',
                        'choices' => [
                            ['choice_text' => 'huevo', 'is_correct' => false],
                            ['choice_text' => 'hielo', 'is_correct' => false],
                            ['choice_text' => 'hilo', 'is_correct' => false],
                            ['choice_text' => 'hijo', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans hijo, le h est muet et le j apporte le son consonantique fort.',
                    ],
                    [
                        'question' => 'Un élève lit hoja en prononçant d’abord le h, puis le j. Quel est le problème ?',
                        'choices' => [
                            ['choice_text' => 'le h ne doit ajouter aucun son', 'is_correct' => true],
                            ['choice_text' => 'le j devrait être muet', 'is_correct' => false],
                            ['choice_text' => 'le o devrait être muet', 'is_correct' => false],
                            ['choice_text' => 'le a final devrait disparaître', 'is_correct' => false],
                        ],
                        'explanation' => 'Hoja commence par un h muet, suivi du son j : o-ja.',
                    ],
                    [
                        'question' => 'Quel mot n’a aucune consonne prononcée avant sa première voyelle ?',
                        'choices' => [
                            ['choice_text' => 'jota', 'is_correct' => false],
                            ['choice_text' => 'mesa', 'is_correct' => false],
                            ['choice_text' => 'hora', 'is_correct' => true],
                            ['choice_text' => 'gato', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans hora, le h est muet, donc le mot commence directement par la voyelle o.',
                    ],
                    [
                        'question' => 'Amine compare hola et ola. En prononciation courante, que doit-il remarquer ?',
                        'choices' => [
                            ['choice_text' => 'le h n’ajoute aucun son, donc les deux mots commencent par le même son voyelle', 'is_correct' => true],
                            ['choice_text' => 'le h fait commencer hola par k', 'is_correct' => false],
                            ['choice_text' => 'les deux mots ont des sons voyelles initiaux différents', 'is_correct' => false],
                            ['choice_text' => 'le h change l’accent tonique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le h est muet, donc il ne crée aucun son supplémentaire avant le o.',
                    ],
                    [
                        'question' => 'Quelle lettre correspond au son j entendu dans jardín ?',
                        'choices' => [
                            ['choice_text' => 'h', 'is_correct' => false],
                            ['choice_text' => 'qu', 'is_correct' => false],
                            ['choice_text' => 'ñ', 'is_correct' => false],
                            ['choice_text' => 'j', 'is_correct' => true],
                        ],
                        'explanation' => 'La lettre j représente le son consonantique fort qu’on entend dans jardín.',
                    ],
                ],
            ],
            [
                'title' => 'B, V, R, RR et Ñ',
                'description' => 'Travaillez certains des contrastes les plus marquants pour un débutant : b et v, le r battu et le r roulé, et le son particulier du ñ.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'En prononciation espagnole courante, à quel point b et v sont-ils proches dans beaucoup de mots ?',
                        'choices' => [
                            ['choice_text' => 'le v sonne toujours comme un v français', 'is_correct' => false],
                            ['choice_text' => 'le b est toujours muet', 'is_correct' => false],
                            ['choice_text' => 'ce sont des sons complètement différents', 'is_correct' => false],
                            ['choice_text' => 'ils se prononcent de façon très semblable', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans la plupart des variétés d’espagnol, b et v représentent des sons très proches, à la différence du contraste marqué entre b et v en français.',
                    ],
                    [
                        'question' => 'Quel mot commence par le son représenté par ñ ?',
                        'choices' => [
                            ['choice_text' => 'ñame', 'is_correct' => true],
                            ['choice_text' => 'noche', 'is_correct' => false],
                            ['choice_text' => 'mesa', 'is_correct' => false],
                            ['choice_text' => 'río', 'is_correct' => false],
                        ],
                        'explanation' => 'Ñame commence par ñ, un son nasal palatal distinct.',
                    ],
                    [
                        'question' => 'Hicham prononce le rr de perro avec un seul battement rapide. Que devrait-il travailler à la place ?',
                        'choices' => [
                            ['choice_text' => 'un r muet', 'is_correct' => false],
                            ['choice_text' => 'le son du j', 'is_correct' => false],
                            ['choice_text' => 'un r roulé plus fort', 'is_correct' => true],
                            ['choice_text' => 'un son de n allongé', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rr de perro est normalement roulé, alors qu’un seul r entre deux voyelles est souvent battu.',
                    ],
                    [
                        'question' => 'Quel mot contient un seul r entre deux voyelles ?',
                        'choices' => [
                            ['choice_text' => 'perro', 'is_correct' => false],
                            ['choice_text' => 'pero', 'is_correct' => true],
                            ['choice_text' => 'rosa', 'is_correct' => false],
                            ['choice_text' => 'reloj', 'is_correct' => false],
                        ],
                        'explanation' => 'Pero a un seul r entre e et o, un contexte courant pour le r battu espagnol.',
                    ],
                    [
                        'question' => 'Quel mot commence par le son de r fort plutôt que par le battement habituel entre deux voyelles ?',
                        'choices' => [
                            ['choice_text' => 'pero', 'is_correct' => false],
                            ['choice_text' => 'rosa', 'is_correct' => true],
                            ['choice_text' => 'cara', 'is_correct' => false],
                            ['choice_text' => 'marina', 'is_correct' => false],
                        ],
                        'explanation' => 'Un r en début de mot se prononce avec le son de r fort entendu dans rosa.',
                    ],
                    [
                        'question' => 'Pourquoi la différence entre pero et perro est-elle utile à remarquer pour un débutant ?',
                        'choices' => [
                            ['choice_text' => 'les voyelles sont complètement différentes', 'is_correct' => false],
                            ['choice_text' => 'les mots ont un nombre de syllabes différent', 'is_correct' => false],
                            ['choice_text' => 'les lettres finales changent le genre du nom', 'is_correct' => false],
                            ['choice_text' => 'le r simple et le rr peuvent changer le sens du mot', 'is_correct' => true],
                        ],
                        'explanation' => 'Pero signifie mais, tandis que perro signifie chien ; la longueur ou le type de r peut donc changer le mot.',
                    ],
                    [
                        'question' => 'Sarah prononce vino avec un v français, en appuyant fortement la lèvre inférieure contre les dents du haut. Qu’est-ce qui est plus typique en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'utiliser un son proche du b plutôt qu’un v français marqué', 'is_correct' => true],
                            ['choice_text' => 'rendre le v muet', 'is_correct' => false],
                            ['choice_text' => 'transformer le v en j', 'is_correct' => false],
                            ['choice_text' => 'utiliser un w anglais', 'is_correct' => false],
                        ],
                        'explanation' => 'Le v espagnol se réalise normalement de façon très proche du b, donc le son de v français n’est pas la cible habituelle.',
                    ],
                    [
                        'question' => 'Quel mot contient un ñ au milieu ?',
                        'choices' => [
                            ['choice_text' => 'nino', 'is_correct' => false],
                            ['choice_text' => 'nueva', 'is_correct' => false],
                            ['choice_text' => 'niño', 'is_correct' => true],
                            ['choice_text' => 'número', 'is_correct' => false],
                        ],
                        'explanation' => 'Niño contient un ñ entre les voyelles i et o.',
                    ],
                    [
                        'question' => 'Un élève entend caña et cana comme des mots identiques. Qu’est-ce qu’il devrait écouter ?',
                        'choices' => [
                            ['choice_text' => 'le ñ est muet', 'is_correct' => false],
                            ['choice_text' => 'les voyelles a disparaissent', 'is_correct' => false],
                            ['choice_text' => 'le ñ ajoute un son nasal palatal distinct', 'is_correct' => true],
                            ['choice_text' => 'le n se change en r', 'is_correct' => false],
                        ],
                        'explanation' => 'Le son ñ est différent du n ordinaire, et cette différence d’orthographe peut changer le mot.',
                    ],
                    [
                        'question' => 'Quelle orthographe signale normalement le son roulé à l’intérieur du mot perro ?',
                        'choices' => [
                            ['choice_text' => 'r', 'is_correct' => false],
                            ['choice_text' => 'rr', 'is_correct' => true],
                            ['choice_text' => 'rn', 'is_correct' => false],
                            ['choice_text' => 'dr', 'is_correct' => false],
                        ],
                        'explanation' => 'Entre deux voyelles, rr signale le roulement fort, comme dans perro.',
                    ],
                ],
            ],
            [
                'title' => 'LL, Y, CH et combinaisons de lettres courantes',
                'description' => 'Repérez des combinaisons espagnoles utiles comme ll, y et ch, tout en remarquant que la prononciation peut varier selon les régions hispanophones.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Dans de nombreuses variétés d’espagnol, comment se prononce ll dans des mots comme lluvia ?',
                        'choices' => [
                            ['choice_text' => 'avec un son proche du y', 'is_correct' => true],
                            ['choice_text' => 'comme un f français', 'is_correct' => false],
                            ['choice_text' => 'comme k', 'is_correct' => false],
                            ['choice_text' => 'il est muet', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans de nombreuses variétés, ll se prononce avec un son proche du y ; d’autres régions ont d’autres réalisations.',
                    ],
                    [
                        'question' => 'Quel mot commence par le son proche du y souvent associé à la prononciation de ll ?',
                        'choices' => [
                            ['choice_text' => 'casa', 'is_correct' => false],
                            ['choice_text' => 'jardín', 'is_correct' => false],
                            ['choice_text' => 'queso', 'is_correct' => false],
                            ['choice_text' => 'llave', 'is_correct' => true],
                        ],
                        'explanation' => 'Llave commence par ll, souvent prononcé avec un son proche du y dans de nombreuses variétés.',
                    ],
                    [
                        'question' => 'Quelle combinaison de consonnes représente le son entendu dans chico ?',
                        'choices' => [
                            ['choice_text' => 'll', 'is_correct' => false],
                            ['choice_text' => 'ch', 'is_correct' => true],
                            ['choice_text' => 'rr', 'is_correct' => false],
                            ['choice_text' => 'qu', 'is_correct' => false],
                        ],
                        'explanation' => 'Ch représente le son familier entendu dans chico.',
                    ],
                    [
                        'question' => 'Dalila regarde le mot ocho. Quelle combinaison de consonnes devrait-elle entendre au milieu ?',
                        'choices' => [
                            ['choice_text' => 'll', 'is_correct' => false],
                            ['choice_text' => 'rr', 'is_correct' => false],
                            ['choice_text' => 'ch', 'is_correct' => true],
                            ['choice_text' => 'qu', 'is_correct' => false],
                        ],
                        'explanation' => 'Ocho contient ch, qui produit le son familier du ch.',
                    ],
                    [
                        'question' => 'Quelle paire partage la même combinaison de consonnes au début, selon la plupart des manuels standards ?',
                        'choices' => [
                            ['choice_text' => 'chico et queso', 'is_correct' => false],
                            ['choice_text' => 'yema et perro', 'is_correct' => false],
                            ['choice_text' => 'casa et lluvia', 'is_correct' => false],
                            ['choice_text' => 'llama et llave', 'is_correct' => true],
                        ],
                        'explanation' => 'Llama et llave commencent tous deux par ll.',
                    ],
                    [
                        'question' => 'Pourquoi un débutant doit-il être attentif à la variation régionale avec ll et y ?',
                        'choices' => [
                            ['choice_text' => 'différents pays peuvent les prononcer différemment', 'is_correct' => true],
                            ['choice_text' => 'les lettres deviennent muettes partout', 'is_correct' => false],
                            ['choice_text' => 'l’orthographe change dans chaque pays', 'is_correct' => false],
                            ['choice_text' => 'les hispanophones arrêtent d’utiliser l’alphabet', 'is_correct' => false],
                        ],
                        'explanation' => 'La prononciation de ll et y varie selon les régions, donc un apprenant peut entendre plus d’une version courante.',
                    ],
                    [
                        'question' => 'Quel mot contient y comme consonne au début ?',
                        'choices' => [
                            ['choice_text' => 'mesa', 'is_correct' => false],
                            ['choice_text' => 'yo', 'is_correct' => true],
                            ['choice_text' => 'uva', 'is_correct' => false],
                            ['choice_text' => 'oso', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans yo, le y fonctionne comme la consonne initiale.',
                    ],
                    [
                        'question' => 'Un élève prononce le ch de chico comme deux lettres séparées, k puis h. Quelle est la meilleure approche ?',
                        'choices' => [
                            ['choice_text' => 'ignorer le c', 'is_correct' => false],
                            ['choice_text' => 'prononcer le h seul', 'is_correct' => false],
                            ['choice_text' => 'traiter ch comme un seul son consonantique familier', 'is_correct' => true],
                            ['choice_text' => 'utiliser le son de rr', 'is_correct' => false],
                        ],
                        'explanation' => 'La combinaison ch représente un seul son de consonne, proche du ch anglais dans chair.',
                    ],
                    [
                        'question' => 'Quel mot contient à la fois ll et une suite de voyelles bien distincte ?',
                        'choices' => [
                            ['choice_text' => 'mesa', 'is_correct' => false],
                            ['choice_text' => 'jugo', 'is_correct' => false],
                            ['choice_text' => 'paella', 'is_correct' => true],
                            ['choice_text' => 'tenedor', 'is_correct' => false],
                        ],
                        'explanation' => 'Paella contient ll, contrairement aux autres options.',
                    ],
                    [
                        'question' => 'Un apprenant entend deux locuteurs prononcer calle différemment, bien que les deux soient hispanophones. Quelle est l’explication la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'un des deux locuteurs doit utiliser le mauvais alphabet', 'is_correct' => false],
                            ['choice_text' => 'des différences régionales de prononciation, surtout avec ll, peuvent exister', 'is_correct' => true],
                            ['choice_text' => 'le mot change d’orthographe selon le locuteur', 'is_correct' => false],
                            ['choice_text' => 'l’espagnol n’a pas de forme écrite stable', 'is_correct' => false],
                        ],
                        'explanation' => 'Certains sons de consonnes, surtout ll et y, varient selon les régions alors que l’orthographe reste la même.',
                    ],
                ],
            ],
            [
                'title' => 'Accents toniques, syllabes et lecture à voix haute',
                'description' => 'Utilisez des règles d’accentuation simples, les accents écrits et la découpe en syllabes pour lire l’espagnol plus naturellement.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Dans le mot casa, quelle syllabe est accentuée ?',
                        'choices' => [
                            ['choice_text' => 'sa', 'is_correct' => false],
                            ['choice_text' => 'les deux également', 'is_correct' => false],
                            ['choice_text' => 'ca', 'is_correct' => true],
                            ['choice_text' => 'aucune', 'is_correct' => false],
                        ],
                        'explanation' => 'Casa est normalement accentué sur la première syllabe : CA-sa.',
                    ],
                    [
                        'question' => 'Pourquoi canción porte-t-il un accent écrit ?',
                        'choices' => [
                            ['choice_text' => 'il transforme le c en k', 'is_correct' => false],
                            ['choice_text' => 'il rend le ó muet', 'is_correct' => false],
                            ['choice_text' => 'il marque une terminaison plurielle', 'is_correct' => false],
                            ['choice_text' => 'il indique la syllabe accentuée et modifie le schéma d’accentuation attendu', 'is_correct' => true],
                        ],
                        'explanation' => 'L’accent écrit indique au lecteur que l’accent tombe sur ó, ce qui donne can-CIÓN.',
                    ],
                    [
                        'question' => 'Quelle syllabe est accentuée dans teléfono ?',
                        'choices' => [
                            ['choice_text' => 'lé', 'is_correct' => true],
                            ['choice_text' => 'te', 'is_correct' => false],
                            ['choice_text' => 'fo', 'is_correct' => false],
                            ['choice_text' => 'no', 'is_correct' => false],
                        ],
                        'explanation' => 'Teléfono est accentué sur la syllabe lé : te-LÉ-fo-no ; l’accent écrit rend cet accent explicite.',
                    ],
                    [
                        'question' => 'Un apprenant lit rápido comme si l’accent tombait sur la dernière syllabe. Que doit-il remarquer ?',
                        'choices' => [
                            ['choice_text' => 'le d doit être muet', 'is_correct' => false],
                            ['choice_text' => 'l’accent écrit sur á place l’accent sur rá', 'is_correct' => true],
                            ['choice_text' => 'le o doit être allongé', 'is_correct' => false],
                            ['choice_text' => 'le p se change en b', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accent écrit dans rápido montre que rá est la syllabe accentuée.',
                    ],
                    [
                        'question' => 'Quel mot n’a pas besoin d’accent écrit selon les règles orthographiques normales ?',
                        'choices' => [
                            ['choice_text' => 'canción', 'is_correct' => false],
                            ['choice_text' => 'árbol', 'is_correct' => false],
                            ['choice_text' => 'mesa', 'is_correct' => true],
                            ['choice_text' => 'teléfono', 'is_correct' => false],
                        ],
                        'explanation' => 'Mesa suit le schéma d’accentuation régulier d’un mot qui se termine par une voyelle, donc aucun accent écrit n’est nécessaire.',
                    ],
                    [
                        'question' => 'Un mot se termine par une voyelle et n’a pas d’accent écrit. Où l’accent tonique est-il normalement attendu ?',
                        'choices' => [
                            ['choice_text' => 'sur la syllabe avant la dernière', 'is_correct' => true],
                            ['choice_text' => 'sur la dernière syllabe', 'is_correct' => false],
                            ['choice_text' => 'sur la première consonne', 'is_correct' => false],
                            ['choice_text' => 'il n’y a pas d’accent', 'is_correct' => false],
                        ],
                        'explanation' => 'Règle de base pour débutant : les mots qui se terminent par une voyelle, n ou s, sans accent écrit, sont généralement accentués sur la syllabe avant la dernière.',
                    ],
                    [
                        'question' => 'Un mot se termine par n et n’a pas d’accent écrit. Quelle est la règle habituelle pour un débutant ?',
                        'choices' => [
                            ['choice_text' => 'accentuer la dernière syllabe', 'is_correct' => false],
                            ['choice_text' => 'accentuer toujours la première syllabe', 'is_correct' => false],
                            ['choice_text' => 'ignorer l’accentuation', 'is_correct' => false],
                            ['choice_text' => 'accentuer la syllabe avant la dernière', 'is_correct' => true],
                        ],
                        'explanation' => 'Les mots qui se terminent par n suivent normalement le schéma d’accentuation sur la syllabe avant la dernière, sauf indication contraire par un accent écrit.',
                    ],
                    [
                        'question' => 'Quel mot porte un accent qui indique de ne pas suivre le schéma d’accentuation régulier ?',
                        'choices' => [
                            ['choice_text' => 'mesa', 'is_correct' => false],
                            ['choice_text' => 'camión', 'is_correct' => true],
                            ['choice_text' => 'casa', 'is_correct' => false],
                            ['choice_text' => 'joven', 'is_correct' => false],
                        ],
                        'explanation' => 'Camión se termine par n mais est accentué sur la dernière syllabe ; l’accent sur ó signale donc l’exception.',
                    ],
                    [
                        'question' => 'Un apprenant veut lire teléfono clairement. Quelle approche est la plus utile ?',
                        'choices' => [
                            ['choice_text' => 'prononcer chaque lettre séparément', 'is_correct' => false],
                            ['choice_text' => 'ignorer l’accent écrit', 'is_correct' => false],
                            ['choice_text' => 'découper le mot en syllabes et insister sur lé', 'is_correct' => true],
                            ['choice_text' => 'accentuer fortement la dernière syllabe', 'is_correct' => false],
                        ],
                        'explanation' => 'La conscience des syllabes combinée à l’accent écrit rend teléfono plus facile à prononcer naturellement.',
                    ],
                    [
                        'question' => 'Quelle affirmation donne la meilleure règle de base pour les accents écrits en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'ils aident à montrer l’accentuation quand les règles normales ne suffiraient pas', 'is_correct' => true],
                            ['choice_text' => 'chaque voyelle accentuée a besoin d’un accent écrit', 'is_correct' => false],
                            ['choice_text' => 'les accents écrits changent toujours la qualité de la voyelle', 'is_correct' => false],
                            ['choice_text' => 'ils ne servent que dans les mots interrogatifs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les accents écrits marquent souvent une accentuation qui ne suit pas le schéma régulier ; toutes les syllabes accentuées n’ont pas besoin d’un accent.',
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
