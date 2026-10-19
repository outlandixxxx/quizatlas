<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishPastTensesBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'past-tenses')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les bases des temps du passé',
                'description' => 'Apprends la différence de base entre les événements passés achevés et les habitudes ou situations d’arrière-plan passées.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Ayer ___ al banco después del trabajo.',
                        'choices' => [
                            ['choice_text' => 'iba', 'is_correct' => false],
                            ['choice_text' => 'voy', 'is_correct' => false],
                            ['choice_text' => 'fui', 'is_correct' => true],
                            ['choice_text' => 'iré', 'is_correct' => false],
                        ],
                        'explanation' => '« Ayer » renvoie à un déplacement unique et achevé, donc le passé simple « fui » est le choix naturel.',
                    ],
                    [
                        'question' => 'Cuando era niño, ___ con mis primos todos los domingos.',
                        'choices' => [
                            ['choice_text' => 'jugaba', 'is_correct' => true],
                            ['choice_text' => 'jugué', 'is_correct' => false],
                            ['choice_text' => 'juego', 'is_correct' => false],
                            ['choice_text' => 'jugaré', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase décrit une habitude répétée de l’enfance, donc l’imparfait « jugaba » convient.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit un événement unique et achevé ?',
                        'choices' => [
                            ['choice_text' => 'Siempre terminaba el informe temprano.', 'is_correct' => false],
                            ['choice_text' => 'Ayer terminé el informe.', 'is_correct' => true],
                            ['choice_text' => 'De niño, terminaba temprano.', 'is_correct' => false],
                            ['choice_text' => 'Mientras trabajaba, escuchaba música.', 'is_correct' => false],
                        ],
                        'explanation' => '« Terminé » présente le rapport comme un événement achevé à un moment précis.',
                    ],
                    [
                        'question' => '« Los sábados ___ al mercado con mi abuela. » Quelle forme sonne naturelle ?',
                        'choices' => [
                            ['choice_text' => 'fuimos', 'is_correct' => false],
                            ['choice_text' => 'vamos', 'is_correct' => false],
                            ['choice_text' => 'iremos', 'is_correct' => false],
                            ['choice_text' => 'íbamos', 'is_correct' => true],
                        ],
                        'explanation' => '« Los sábados » décrit une routine passée répétée, un usage courant de l’imparfait.',
                    ],
                    [
                        'question' => 'Quelle forme verbale est le passé simple régulier de hablar pour yo ?',
                        'choices' => [
                            ['choice_text' => 'hablaba', 'is_correct' => false],
                            ['choice_text' => 'hablo', 'is_correct' => false],
                            ['choice_text' => 'hablaré', 'is_correct' => false],
                            ['choice_text' => 'hablé', 'is_correct' => true],
                        ],
                        'explanation' => 'Le passé simple régulier de « hablar » à la première personne est « hablé ».',
                    ],
                    [
                        'question' => 'Quelle forme signifie « nous avions l’habitude de manger » ou « nous étions en train de manger » à l’imparfait ?',
                        'choices' => [
                            ['choice_text' => 'comíamos', 'is_correct' => true],
                            ['choice_text' => 'comimos', 'is_correct' => false],
                            ['choice_text' => 'comemos', 'is_correct' => false],
                            ['choice_text' => 'comeremos', 'is_correct' => false],
                        ],
                        'explanation' => '« Comíamos » est la forme imparfaite de nosotros et peut décrire une action habituelle ou en cours dans le passé.',
                    ],
                    [
                        'question' => 'Quelle phrase donne le contexte d’une histoire ?',
                        'choices' => [
                            ['choice_text' => 'Pedro cerró la puerta.', 'is_correct' => false],
                            ['choice_text' => 'Ana compró pan.', 'is_correct' => false],
                            ['choice_text' => 'Era de noche y hacía frío.', 'is_correct' => true],
                            ['choice_text' => 'El tren llegó a las ocho.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’heure et la météo apparaissent couramment à l’imparfait, car elles installent le décor en arrière-plan.',
                    ],
                    [
                        'question' => 'Un apprenant écrit « Todos los veranos viajé con mi familia » pour une habitude répétée de l’enfance. Quel est le meilleur choix ?',
                        'choices' => [
                            ['choice_text' => 'Todos los veranos fui con mi familia.', 'is_correct' => false],
                            ['choice_text' => 'Todos los veranos viajaba con mi familia.', 'is_correct' => true],
                            ['choice_text' => 'Todos los veranos viajo con mi familia.', 'is_correct' => false],
                            ['choice_text' => 'Todos los veranos viajaré con mi familia.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une habitude passée répétée s’exprime normalement à l’imparfait, « viajaba ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le passé ?',
                        'choices' => [
                            ['choice_text' => 'La semana pasada compré un diccionario.', 'is_correct' => true],
                            ['choice_text' => 'La semana pasada compro un diccionario.', 'is_correct' => false],
                            ['choice_text' => 'La semana pasada compraré un diccionario.', 'is_correct' => false],
                            ['choice_text' => 'La semana pasada comprando un diccionario.', 'is_correct' => false],
                        ],
                        'explanation' => '« Compré » est l’action passée achevée qui correspond à « la semana pasada ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit une caractéristique passée plutôt qu’un événement unique ?',
                        'choices' => [
                            ['choice_text' => 'Mi abuelo compró un coche.', 'is_correct' => false],
                            ['choice_text' => 'Mi abuelo llegó tarde.', 'is_correct' => false],
                            ['choice_text' => 'Mi abuelo abrió la ventana.', 'is_correct' => false],
                            ['choice_text' => 'Mi abuelo era muy paciente.', 'is_correct' => true],
                        ],
                        'explanation' => '« Era » décrit comment était le grand-père sur une période de temps, donc l’imparfait convient.',
                    ],
                    [
                        'question' => 'Quelle paire met correctement en contraste une habitude passée et un événement achevé ?',
                        'choices' => [
                            ['choice_text' => 'comí / comía', 'is_correct' => false],
                            ['choice_text' => 'comía / comí', 'is_correct' => true],
                            ['choice_text' => 'como / comía', 'is_correct' => false],
                            ['choice_text' => 'comeré / comí', 'is_correct' => false],
                        ],
                        'explanation' => '« Comía » est l’imparfait pour une habitude ou une action passée en cours ; « comí » est le passé simple pour un événement achevé.',
                    ],
                ],
            ],
            [
                'title' => 'Le passé simple régulier dans l’espagnol du quotidien',
                'description' => 'Pratique les formes régulières du passé simple à travers des activités courantes comme étudier, travailler, manger et voyager.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Anoche yo ___ pizza con mis amigos.',
                        'choices' => [
                            ['choice_text' => 'comía', 'is_correct' => false],
                            ['choice_text' => 'como', 'is_correct' => false],
                            ['choice_text' => 'comeré', 'is_correct' => false],
                            ['choice_text' => 'comí', 'is_correct' => true],
                        ],
                        'explanation' => '« Anoche » décrit un événement passé achevé, donc le passé simple « comí » est correct.',
                    ],
                    [
                        'question' => 'Quelle est la forme régulière du passé simple de hablar pour nosotros ?',
                        'choices' => [
                            ['choice_text' => 'hablábamos', 'is_correct' => false],
                            ['choice_text' => 'hablaron', 'is_correct' => false],
                            ['choice_text' => 'hablamos', 'is_correct' => true],
                            ['choice_text' => 'hablamos mañana', 'is_correct' => false],
                        ],
                        'explanation' => 'Le passé simple régulier de « hablar » à la première personne du pluriel est « hablamos ».',
                    ],
                    [
                        'question' => 'Carlos y Elena ___ en Madrid el año pasado.',
                        'choices' => [
                            ['choice_text' => 'vivían', 'is_correct' => false],
                            ['choice_text' => 'vivieron', 'is_correct' => true],
                            ['choice_text' => 'viven', 'is_correct' => false],
                            ['choice_text' => 'vivirán', 'is_correct' => false],
                        ],
                        'explanation' => '« El año pasado » peut encadrer une période achevée, donc « vivieron » convient dans cette phrase.',
                    ],
                    [
                        'question' => 'Ayer tú ___ la puerta antes de salir.',
                        'choices' => [
                            ['choice_text' => 'abriste', 'is_correct' => true],
                            ['choice_text' => 'abrías', 'is_correct' => false],
                            ['choice_text' => 'abres', 'is_correct' => false],
                            ['choice_text' => 'abrirás', 'is_correct' => false],
                        ],
                        'explanation' => '« Abriste » est la forme achevée du passé simple de « abrir » pour tú.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un verbe régulier au passé simple ?',
                        'choices' => [
                            ['choice_text' => 'Nosotros estudiaste para el examen anoche.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros estudió para el examen anoche.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros estudiamos para el examen anoche.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros estudiar para el examen anoche.', 'is_correct' => false],
                        ],
                        'explanation' => '« Estudiamos » est la forme correcte du passé simple de « estudiar » pour nosotros.',
                    ],
                    [
                        'question' => 'Lucía ___ una carta y la envió por la mañana.',
                        'choices' => [
                            ['choice_text' => 'escribió', 'is_correct' => true],
                            ['choice_text' => 'escribía', 'is_correct' => false],
                            ['choice_text' => 'escribe', 'is_correct' => false],
                            ['choice_text' => 'escribiría', 'is_correct' => false],
                        ],
                        'explanation' => 'Écrire et envoyer la lettre sont présentés comme des événements achevés, donc le passé simple « escribió » convient.',
                    ],
                    [
                        'question' => 'Quelle terminaison du passé simple appartient à un verbe régulier en -AR à la forme él/ella/usted ?',
                        'choices' => [
                            ['choice_text' => '-ió', 'is_correct' => false],
                            ['choice_text' => '-ó', 'is_correct' => true],
                            ['choice_text' => '-aba', 'is_correct' => false],
                            ['choice_text' => '-ías', 'is_correct' => false],
                        ],
                        'explanation' => 'Les verbes réguliers en -AR utilisent « -ó » à la troisième personne du singulier du passé simple, comme dans « habló ».',
                    ],
                    [
                        'question' => 'Quelle terminaison du passé simple appartient aux verbes réguliers en -ER et -IR à la forme ellos/ellas/ustedes ?',
                        'choices' => [
                            ['choice_text' => '-aron', 'is_correct' => false],
                            ['choice_text' => '-aban', 'is_correct' => false],
                            ['choice_text' => '-ían', 'is_correct' => false],
                            ['choice_text' => '-ieron', 'is_correct' => true],
                        ],
                        'explanation' => 'Les verbes réguliers en -ER et -IR utilisent « -ieron » à la troisième personne du pluriel du passé simple, comme « comieron » et « vivieron ».',
                    ],
                    [
                        'question' => 'Quelle phrase correspond le mieux à une activité unique achevée l’après-midi ?',
                        'choices' => [
                            ['choice_text' => 'Ayer limpiaba la cocina todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Ayer limpié la cocina.', 'is_correct' => true],
                            ['choice_text' => 'Ayer limpio la cocina.', 'is_correct' => false],
                            ['choice_text' => 'Ayer limpiaré la cocina.', 'is_correct' => false],
                        ],
                        'explanation' => '« Limpié » présente une action unique achevée hier.',
                    ],
                    [
                        'question' => 'Un apprenant écrit « Ayer caminaba al parque » pour décrire un trajet achevé hier. Quelle forme est plus directe ?',
                        'choices' => [
                            ['choice_text' => 'Ayer caminaba al parque.', 'is_correct' => false],
                            ['choice_text' => 'Ayer camino al parque.', 'is_correct' => false],
                            ['choice_text' => 'Ayer caminaré al parque.', 'is_correct' => false],
                            ['choice_text' => 'Ayer caminé al parque.', 'is_correct' => true],
                        ],
                        'explanation' => 'Pour un trajet unique achevé, le passé simple « caminé » est le choix le plus clair pour un débutant.',
                    ],
                    [
                        'question' => 'Quelle paire de verbe régulier est correctement associée ?',
                        'choices' => [
                            ['choice_text' => 'comer → comaba', 'is_correct' => false],
                            ['choice_text' => 'vivir → vivíeron', 'is_correct' => false],
                            ['choice_text' => 'hablar → hablé', 'is_correct' => true],
                            ['choice_text' => 'estudiar → estudí', 'is_correct' => false],
                        ],
                        'explanation' => '« Hablé » est la forme correcte du passé simple de « hablar » pour yo.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un verbe régulier en -IR au passé simple ?',
                        'choices' => [
                            ['choice_text' => 'Mis amigos vivieron en Sevilla durante dos años.', 'is_correct' => true],
                            ['choice_text' => 'Mis amigos vivían en Sevilla ayer una vez.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos vive en Sevilla.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos vivirán en Sevilla ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '« Vivieron » est la forme correcte du passé simple de « vivir » pour ellos, pour la période achevée décrite.',
                    ],
                    [
                        'question' => 'Qu’ont en commun les verbes réguliers en -ER et -IR au passé simple ?',
                        'choices' => [
                            ['choice_text' => 'Ils utilisent toujours les terminaisons en -AR.', 'is_correct' => false],
                            ['choice_text' => 'Ils ne changent jamais de terminaison.', 'is_correct' => false],
                            ['choice_text' => 'Ils utilisent les mêmes terminaisons au passé simple.', 'is_correct' => true],
                            ['choice_text' => 'Ils n’utilisent que les terminaisons de l’imparfait.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les verbes réguliers en -ER et -IR partagent les mêmes terminaisons au passé simple, comme « comí/comió » et « viví/vivió ».',
                    ],
                ],
            ],
            [
                'title' => 'L’imparfait pour les habitudes et le contexte',
                'description' => 'Utilise l’imparfait pour parler des routines, de l’âge, de la météo, des descriptions et des actions en cours.',
                'duration' => 15,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Cuando tenía diez años, ___ a la escuela a pie.',
                        'choices' => [
                            ['choice_text' => 'caminé', 'is_correct' => false],
                            ['choice_text' => 'caminaba', 'is_correct' => true],
                            ['choice_text' => 'camino', 'is_correct' => false],
                            ['choice_text' => 'caminaré', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase décrit une routine répétée de l’enfance, donc l’imparfait « caminaba » convient.',
                    ],
                    [
                        'question' => 'De niño, Pedro ___ mucho los sábados.',
                        'choices' => [
                            ['choice_text' => 'leía', 'is_correct' => true],
                            ['choice_text' => 'leyó', 'is_correct' => false],
                            ['choice_text' => 'lee', 'is_correct' => false],
                            ['choice_text' => 'leerá', 'is_correct' => false],
                        ],
                        'explanation' => '« De niño » accompagné d’une activité répétée oriente vers l’imparfait « leía ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit comment était quelqu’un dans le passé ?',
                        'choices' => [
                            ['choice_text' => 'Mi madre compró un coche.', 'is_correct' => false],
                            ['choice_text' => 'Mi madre llegó tarde.', 'is_correct' => false],
                            ['choice_text' => 'Mi madre abrió la ventana.', 'is_correct' => false],
                            ['choice_text' => 'Mi madre era muy paciente.', 'is_correct' => true],
                        ],
                        'explanation' => '« Era » décrit une caractéristique ou un état plutôt qu’un événement unique achevé.',
                    ],
                    [
                        'question' => 'Chaque hiver, nous ___ a la montaña.',
                        'choices' => [
                            ['choice_text' => 'fuimos', 'is_correct' => false],
                            ['choice_text' => 'vamos', 'is_correct' => false],
                            ['choice_text' => 'íbamos', 'is_correct' => true],
                            ['choice_text' => 'iremos', 'is_correct' => false],
                        ],
                        'explanation' => '« Chaque hiver » signale une habitude passée répétée, donc l’imparfait « íbamos » est approprié.',
                    ],
                    [
                        'question' => 'Quelle est la forme imparfaite de comer pour nosotros ?',
                        'choices' => [
                            ['choice_text' => 'comimos', 'is_correct' => false],
                            ['choice_text' => 'comíamos', 'is_correct' => true],
                            ['choice_text' => 'comemos', 'is_correct' => false],
                            ['choice_text' => 'comeremos', 'is_correct' => false],
                        ],
                        'explanation' => 'L’imparfait de « comer » pour nosotros est « comíamos ».',
                    ],
                    [
                        'question' => 'Quelle est la forme imparfaite de vivir pour ellos ?',
                        'choices' => [
                            ['choice_text' => 'vivieron', 'is_correct' => false],
                            ['choice_text' => 'viven', 'is_correct' => false],
                            ['choice_text' => 'vivían', 'is_correct' => true],
                            ['choice_text' => 'vivirán', 'is_correct' => false],
                        ],
                        'explanation' => 'L’imparfait de « vivir » pour ellos est « vivían ».',
                    ],
                    [
                        'question' => 'Quelle phrase donne le décor d’une histoire ?',
                        'choices' => [
                            ['choice_text' => 'La calle estaba vacía y llovía.', 'is_correct' => true],
                            ['choice_text' => 'Pedro cerró la puerta.', 'is_correct' => false],
                            ['choice_text' => 'El autobús llegó.', 'is_correct' => false],
                            ['choice_text' => 'Ana encontró las llaves.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les formes imparfaites « estaba » et « llovía » décrivent la scène en arrière-plan.',
                    ],
                    [
                        'question' => 'Cuando era pequeño, ___ miedo a los perros.',
                        'choices' => [
                            ['choice_text' => 'tuve', 'is_correct' => false],
                            ['choice_text' => 'tengo', 'is_correct' => false],
                            ['choice_text' => 'tendré', 'is_correct' => false],
                            ['choice_text' => 'tenía', 'is_correct' => true],
                        ],
                        'explanation' => 'La phrase décrit un état continu pendant l’enfance, donc l’imparfait « tenía » est naturel.',
                    ],
                    [
                        'question' => 'Pourquoi « Los domingos cenábamos juntos » est-il naturellement à l’imparfait ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle décrit un seul dîner achevé.', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle décrit un projet futur.', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle décrit une habitude passée répétée.', 'is_correct' => true],
                            ['choice_text' => 'Parce que c’est un ordre.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expression récurrente « los domingos » fait de l’imparfait habituel le choix naturel.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un verbe à l’imparfait ?',
                        'choices' => [
                            ['choice_text' => 'Ayer cociné para todos.', 'is_correct' => false],
                            ['choice_text' => 'Anoche escuché la radio.', 'is_correct' => false],
                            ['choice_text' => 'La semana pasada compré un libro.', 'is_correct' => false],
                            ['choice_text' => 'Mientras cocinaba, escuchaba música.', 'is_correct' => true],
                        ],
                        'explanation' => '« Cocinaba » et « escuchaba » sont des formes imparfaites décrivant des actions en cours.',
                    ],
                ],
            ],
            [
                'title' => 'Ser, ir et ver à l’imparfait',
                'description' => 'Renforce ta maîtrise des formes imparfaites fréquentes de ser, ir et ver dans de vraies phrases de débutant.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Cuando era niño, ___ muy curioso.',
                        'choices' => [
                            ['choice_text' => 'fui', 'is_correct' => false],
                            ['choice_text' => 'soy', 'is_correct' => false],
                            ['choice_text' => 'seré', 'is_correct' => false],
                            ['choice_text' => 'era', 'is_correct' => true],
                        ],
                        'explanation' => '« Era » est la forme imparfaite de la première ou troisième personne de « ser », utilisée pour les caractéristiques passées.',
                    ],
                    [
                        'question' => 'Antes, nosotros ___ al mercado cada sábado.',
                        'choices' => [
                            ['choice_text' => 'fuimos', 'is_correct' => false],
                            ['choice_text' => 'vamos', 'is_correct' => false],
                            ['choice_text' => 'íbamos', 'is_correct' => true],
                            ['choice_text' => 'iremos', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trajets passés répétés s’expriment avec l’imparfait « íbamos ».',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « j’avais l’habitude de voir ma grand-mère chaque semaine » ?',
                        'choices' => [
                            ['choice_text' => 'Vi a mi abuela cada semana.', 'is_correct' => false],
                            ['choice_text' => 'Veía a mi abuela cada semana.', 'is_correct' => true],
                            ['choice_text' => 'Veo a mi abuela cada semana.', 'is_correct' => false],
                            ['choice_text' => 'Veré a mi abuela cada semana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Veía » est la forme imparfaite et correspond à l’habitude répétée « cada semana ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement un âge et une caractéristique passés ?',
                        'choices' => [
                            ['choice_text' => 'Cuando tenía ocho años, era muy tímido.', 'is_correct' => true],
                            ['choice_text' => 'Cuando tuve ocho años, fui muy tímido siempre.', 'is_correct' => false],
                            ['choice_text' => 'Cuando tengo ocho años, era muy tímido.', 'is_correct' => false],
                            ['choice_text' => 'Cuando tendré ocho años, era muy tímido.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’âge et les traits personnels se décrivent normalement à l’imparfait, d’où « tenía » et « era ».',
                    ],
                    [
                        'question' => 'Pourquoi « Eran las nueve y hacía frío » est-il naturel dans une histoire ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles décrivent deux projets futurs.', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles donnent le contexte d’heure et de météo.', 'is_correct' => true],
                            ['choice_text' => 'Parce que ce sont des ordres.', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles décrivent un achat achevé.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’heure et la météo sont des informations d’arrière-plan courantes, donc l’imparfait est utilisé.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement ser pour une description passée ?',
                        'choices' => [
                            ['choice_text' => 'La casa era grande.', 'is_correct' => true],
                            ['choice_text' => 'La casa fue grande cada día.', 'is_correct' => false],
                            ['choice_text' => 'La casa es grande ayer.', 'is_correct' => false],
                            ['choice_text' => 'La casa será grande ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '« Era » décrit la caractéristique passée de la maison sans présenter un événement unique achevé.',
                    ],
                    [
                        'question' => 'Quelle expression signifie naturellement « nous avions l’habitude d’aller à la plage » ?',
                        'choices' => [
                            ['choice_text' => 'Fuimos a la playa.', 'is_correct' => false],
                            ['choice_text' => 'Vamos a la playa ayer.', 'is_correct' => false],
                            ['choice_text' => 'Íbamos a la playa.', 'is_correct' => true],
                            ['choice_text' => 'Iremos a la playa antes.', 'is_correct' => false],
                        ],
                        'explanation' => '« Íbamos » exprime une activité passée répétée ou habituelle.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement ver à l’imparfait ?',
                        'choices' => [
                            ['choice_text' => 'De niño, vi dibujos animados todas las tardes siempre.', 'is_correct' => false],
                            ['choice_text' => 'De niño, veo dibujos animados ayer.', 'is_correct' => false],
                            ['choice_text' => 'De niño, veré dibujos animados todas las tardes.', 'is_correct' => false],
                            ['choice_text' => 'De niño, veía dibujos animados todas las tardes.', 'is_correct' => true],
                        ],
                        'explanation' => 'La routine répétée de l’enfance appelle l’imparfait « veía ».',
                    ],
                    [
                        'question' => 'Quel groupe ne contient que des formes imparfaites ?',
                        'choices' => [
                            ['choice_text' => 'fue, fui, vi', 'is_correct' => false],
                            ['choice_text' => 'era, iba, veía', 'is_correct' => true],
                            ['choice_text' => 'habló, comió, vivió', 'is_correct' => false],
                            ['choice_text' => 'voy, veo, soy', 'is_correct' => false],
                        ],
                        'explanation' => '« Era », « iba » et « veía » sont les formes imparfaites de ser, ir et ver.',
                    ],
                    [
                        'question' => 'Quelle est la meilleure façon pour un débutant de retenir les formes imparfaites de ser, ir et ver ?',
                        'choices' => [
                            ['choice_text' => 'Les traiter comme des verbes réguliers en -AR.', 'is_correct' => false],
                            ['choice_text' => 'Les traiter comme des verbes réguliers en -ER.', 'is_correct' => false],
                            ['choice_text' => 'Les apprendre comme un petit groupe de formes irrégulières courantes.', 'is_correct' => true],
                            ['choice_text' => 'Éviter de les utiliser à l’imparfait.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces trois verbes ont des formes imparfaites distinctives ; les apprendre comme un petit groupe fréquent est efficace.',
                    ],
                ],
            ],
            [
                'title' => 'Passé simple ou imparfait ? Situations réelles',
                'description' => 'Choisis naturellement entre le passé simple et l’imparfait quand un événement achevé survient pendant une action en cours ou une scène d’arrière-plan.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Mientras Ana ___, sonó el teléfono.',
                        'choices' => [
                            ['choice_text' => 'estudió', 'is_correct' => false],
                            ['choice_text' => 'estudia', 'is_correct' => false],
                            ['choice_text' => 'estudiaba', 'is_correct' => true],
                            ['choice_text' => 'estudiará', 'is_correct' => false],
                        ],
                        'explanation' => 'L’étude était déjà en cours quand le téléphone a sonné, donc l’imparfait « estudiaba » installe l’arrière-plan.',
                    ],
                    [
                        'question' => 'Ayer, mientras yo caminaba por el centro, ___ a Marta.',
                        'choices' => [
                            ['choice_text' => 'vi', 'is_correct' => true],
                            ['choice_text' => 'veía', 'is_correct' => false],
                            ['choice_text' => 'veo', 'is_correct' => false],
                            ['choice_text' => 'veré', 'is_correct' => false],
                        ],
                        'explanation' => 'Voir Marta est présenté comme un événement achevé survenu pendant la promenade, donc « vi » convient.',
                    ],
                    [
                        'question' => 'Cuando llegamos al restaurante, la gente ___ y hablaba muy alto.',
                        'choices' => [
                            ['choice_text' => 'comió', 'is_correct' => false],
                            ['choice_text' => 'comía', 'is_correct' => true],
                            ['choice_text' => 'come', 'is_correct' => false],
                            ['choice_text' => 'comerá', 'is_correct' => false],
                        ],
                        'explanation' => 'Le repas était déjà en cours à notre arrivée, donc l’imparfait s’utilise pour l’action d’arrière-plan.',
                    ],
                    [
                        'question' => 'Quel est le rôle de « llegó » dans « Mientras yo dormía, mi hermano llegó » ?',
                        'choices' => [
                            ['choice_text' => 'Il décrit une habitude répétée de l’enfance.', 'is_correct' => false],
                            ['choice_text' => 'Il donne le contexte météorologique.', 'is_correct' => false],
                            ['choice_text' => 'Il décrit un projet futur.', 'is_correct' => false],
                            ['choice_text' => 'Il marque l’événement achevé survenu pendant l’action en cours.', 'is_correct' => true],
                        ],
                        'explanation' => '« Llegó » est au passé simple car l’arrivée est un événement achevé qui interrompt ou survient pendant l’imparfait « dormía ».',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus naturelle pour un événement unique achevé à un moment précis du passé ?',
                        'choices' => [
                            ['choice_text' => 'A las seis, terminamos el trabajo.', 'is_correct' => true],
                            ['choice_text' => 'A las seis, terminábamos el trabajo todos los días.', 'is_correct' => false],
                            ['choice_text' => 'A las seis, terminamos el trabajo cada tarde.', 'is_correct' => false],
                            ['choice_text' => 'A las seis, terminábamos el trabajo ayer una vez.', 'is_correct' => false],
                        ],
                        'explanation' => 'Un événement unique achevé à un moment précis s’exprime naturellement avec le passé simple « terminamos ».',
                    ],
                    [
                        'question' => 'Quelle phrase sonne la plus naturelle pour une habitude passée répétée ?',
                        'choices' => [
                            ['choice_text' => 'Ayer cenamos a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'Anoche cenamos a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'El martes cenamos a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'Siempre cenábamos a las ocho.', 'is_correct' => true],
                        ],
                        'explanation' => '« Siempre » rend l’activité habituelle, donc l’imparfait « cenábamos » est le choix naturel.',
                    ],
                    [
                        'question' => 'Il pleuvait quand nous sommes sortis de la maison. Quelle phrase exprime la météo d’arrière-plan ?',
                        'choices' => [
                            ['choice_text' => 'Llovió cuando salimos de casa.', 'is_correct' => false],
                            ['choice_text' => 'Llueve cuando salimos de casa.', 'is_correct' => false],
                            ['choice_text' => 'Llovía cuando salimos de casa.', 'is_correct' => true],
                            ['choice_text' => 'Lloverá cuando salimos de casa.', 'is_correct' => false],
                        ],
                        'explanation' => 'La pluie est le décor du départ achevé, donc l’imparfait « llovía » convient.',
                    ],
                    [
                        'question' => 'Quelle phrase sépare clairement l’action d’arrière-plan de l’événement ?',
                        'choices' => [
                            ['choice_text' => 'Yo dormí cuando mi madre abría la puerta.', 'is_correct' => false],
                            ['choice_text' => 'Yo dormía cuando mi madre abrió la puerta.', 'is_correct' => true],
                            ['choice_text' => 'Yo duermo cuando mi madre abrió la puerta.', 'is_correct' => false],
                            ['choice_text' => 'Yo dormiré cuando mi madre abría la puerta.', 'is_correct' => false],
                        ],
                        'explanation' => '« Dormía » montre l’action en cours, tandis que « abrió » marque l’événement achevé.',
                    ],
                    [
                        'question' => 'Quelle forme convient le mieux après « De repente » ? « De repente, el niño ___ a llorar. »',
                        'choices' => [
                            ['choice_text' => 'empezaba', 'is_correct' => false],
                            ['choice_text' => 'empezó', 'is_correct' => true],
                            ['choice_text' => 'empieza', 'is_correct' => false],
                            ['choice_text' => 'empezará', 'is_correct' => false],
                        ],
                        'explanation' => '« De repente » introduit un événement soudain et achevé, donc le passé simple « empezó » est naturel.',
                    ],
                    [
                        'question' => 'Cuando vivíamos en México, ___ tacos los viernes.',
                        'choices' => [
                            ['choice_text' => 'comimos', 'is_correct' => false],
                            ['choice_text' => 'comemos', 'is_correct' => false],
                            ['choice_text' => 'comeremos', 'is_correct' => false],
                            ['choice_text' => 'comíamos', 'is_correct' => true],
                        ],
                        'explanation' => 'La phrase décrit une routine répétée pendant une période passée, donc l’imparfait « comíamos » convient.',
                    ],
                    [
                        'question' => 'Un apprenant veut dire qu’il marchait quand il a commencé à pleuvoir. Quelle phrase fonctionne le mieux ?',
                        'choices' => [
                            ['choice_text' => 'Caminé cuando empezaba a llover.', 'is_correct' => false],
                            ['choice_text' => 'Camino cuando empezó a llover.', 'is_correct' => false],
                            ['choice_text' => 'Caminaba cuando empezó a llover.', 'is_correct' => true],
                            ['choice_text' => 'Caminaré cuando empezó a llover.', 'is_correct' => false],
                        ],
                        'explanation' => '« Caminaba » décrit l’action en cours, tandis que « empezó » marque l’événement achevé survenu pendant celle-ci.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit le mieux un état passé plutôt qu’un événement achevé ?',
                        'choices' => [
                            ['choice_text' => 'La ciudad era muy tranquila.', 'is_correct' => true],
                            ['choice_text' => 'La ciudad inauguró un museo.', 'is_correct' => false],
                            ['choice_text' => 'La ciudad recibió turistas.', 'is_correct' => false],
                            ['choice_text' => 'La ciudad creció mucho.', 'is_correct' => false],
                        ],
                        'explanation' => '« Era » décrit une caractéristique de la ville sur une période, donc l’imparfait convient.',
                    ],
                    [
                        'question' => 'Choisis le contraste naturel : « Antes ___ temprano, pero ayer ___ tarde. »',
                        'choices' => [
                            ['choice_text' => 'me levanté / me levantaba', 'is_correct' => false],
                            ['choice_text' => 'me levanto / me levantaba', 'is_correct' => false],
                            ['choice_text' => 'me levantaba / me levanté', 'is_correct' => true],
                            ['choice_text' => 'me levantaré / me levanté', 'is_correct' => false],
                        ],
                        'explanation' => '« Antes » décrit une ancienne habitude, donc l’imparfait est utilisé ; « ayer » décrit un événement unique achevé, donc le passé simple convient.',
                    ],
                ],
            ],
            [
                'title' => 'Les formes irrégulières courantes du passé',
                'description' => 'Pratique les formes irrégulières fréquentes du passé simple comme fui, tuve, estuve, hice et dije dans des situations simples.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle est la forme du passé simple de tener pour yo ?',
                        'choices' => [
                            ['choice_text' => 'tenía', 'is_correct' => false],
                            ['choice_text' => 'tengo', 'is_correct' => false],
                            ['choice_text' => 'tendré', 'is_correct' => false],
                            ['choice_text' => 'tuve', 'is_correct' => true],
                        ],
                        'explanation' => '« Tuve » est la forme irrégulière du passé simple à la première personne du singulier de « tener ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le passé simple de estar ?',
                        'choices' => [
                            ['choice_text' => 'Ayer estaba en casa una vez y terminé.', 'is_correct' => false],
                            ['choice_text' => 'Ayer estuve en casa.', 'is_correct' => true],
                            ['choice_text' => 'Ayer estoy en casa.', 'is_correct' => false],
                            ['choice_text' => 'Ayer estaré en casa.', 'is_correct' => false],
                        ],
                        'explanation' => '« Estuve » est la forme du passé simple de « estar » pour yo, pour une situation passée achevée.',
                    ],
                    [
                        'question' => 'Nosotros ___ que salir temprano ayer.',
                        'choices' => [
                            ['choice_text' => 'teníamos', 'is_correct' => false],
                            ['choice_text' => 'tenemos', 'is_correct' => false],
                            ['choice_text' => 'tuvimos', 'is_correct' => true],
                            ['choice_text' => 'tendremos', 'is_correct' => false],
                        ],
                        'explanation' => '« Tuvimos » est le passé simple de « tener » pour nosotros et correspond à la situation achevée « ayer ».',
                    ],
                    [
                        'question' => 'Quelle est la forme du passé simple de hacer pour él/ella ?',
                        'choices' => [
                            ['choice_text' => 'hizo', 'is_correct' => true],
                            ['choice_text' => 'hacía', 'is_correct' => false],
                            ['choice_text' => 'hace', 'is_correct' => false],
                            ['choice_text' => 'hará', 'is_correct' => false],
                        ],
                        'explanation' => 'Le passé simple irrégulier à la troisième personne du singulier de « hacer » est « hizo ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ayer hacía la cena una vez y terminé.', 'is_correct' => false],
                            ['choice_text' => 'Ayer hice la cena.', 'is_correct' => true],
                            ['choice_text' => 'Ayer hago la cena.', 'is_correct' => false],
                            ['choice_text' => 'Ayer haré la cena.', 'is_correct' => false],
                        ],
                        'explanation' => '« Hice » est la forme du passé simple de « hacer » pour yo et présente le repas comme achevé.',
                    ],
                    [
                        'question' => 'Que signifie « tuve » dans un contexte de passé simple ?',
                        'choices' => [
                            ['choice_text' => 'j’avais l’habitude d’avoir', 'is_correct' => false],
                            ['choice_text' => 'j’ai', 'is_correct' => false],
                            ['choice_text' => 'j’ai eu', 'is_correct' => true],
                            ['choice_text' => 'j’aurai', 'is_correct' => false],
                        ],
                        'explanation' => '« Tuve » est le passé simple de « tener », couramment traduit par « j’ai eu » pour une situation passée achevée.',
                    ],
                    [
                        'question' => 'Quelle paire contient deux formes irrégulières courantes du passé simple ?',
                        'choices' => [
                            ['choice_text' => 'fui et tuve', 'is_correct' => true],
                            ['choice_text' => 'iba et tenía', 'is_correct' => false],
                            ['choice_text' => 'era et veía', 'is_correct' => false],
                            ['choice_text' => 'hablaba et comíamos', 'is_correct' => false],
                        ],
                        'explanation' => '« Fui » et « tuve » sont des formes irrégulières courantes du passé simple ; les autres choix contiennent des formes imparfaites.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « fui » pour un trajet achevé ?',
                        'choices' => [
                            ['choice_text' => 'El sábado iba al cine una vez.', 'is_correct' => false],
                            ['choice_text' => 'El sábado voy al cine ayer.', 'is_correct' => false],
                            ['choice_text' => 'El sábado iré al cine ayer.', 'is_correct' => false],
                            ['choice_text' => 'El sábado fui al cine.', 'is_correct' => true],
                        ],
                        'explanation' => '« Fui » est la forme du passé simple de « ir » et décrit la sortie au cinéma comme achevée.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise l’imparfait plutôt que le passé simple ?',
                        'choices' => [
                            ['choice_text' => 'Ayer tuve una reunión.', 'is_correct' => false],
                            ['choice_text' => 'Cuando era joven, tenía mucho tiempo libre.', 'is_correct' => true],
                            ['choice_text' => 'La semana pasada hice el examen.', 'is_correct' => false],
                            ['choice_text' => 'El lunes fui al banco.', 'is_correct' => false],
                        ],
                        'explanation' => '« Era » et « tenía » décrivent un état général passé durant la jeunesse, donc l’imparfait convient.',
                    ],
                    [
                        'question' => 'Un apprenant voit « hizo » et « hacía ». Quelle explication est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Les deux sont des formes du présent.', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont des formes du futur.', 'is_correct' => false],
                            ['choice_text' => '« Hizo » est à l’imparfait ; « hacía » est au passé simple.', 'is_correct' => false],
                            ['choice_text' => '« Hizo » est au passé simple ; « hacía » est à l’imparfait.', 'is_correct' => true],
                        ],
                        'explanation' => '« Hizo » présente une action achevée, tandis que « hacía » décrit une action passée en cours ou habituelle.',
                    ],
                    [
                        'question' => 'Quelle phrase convient le mieux à un changement météorologique soudain et achevé ?',
                        'choices' => [
                            ['choice_text' => 'De repente, hacía mucho frío todos los inviernos.', 'is_correct' => false],
                            ['choice_text' => 'De repente, hace mucho frío ayer.', 'is_correct' => false],
                            ['choice_text' => 'De repente, hizo mucho frío.', 'is_correct' => true],
                            ['choice_text' => 'De repente, hará mucho frío ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '« De repente » introduit un changement soudain et achevé, ce qui rend le passé simple « hizo » naturel.',
                    ],
                    [
                        'question' => 'Quelle forme complète « De niño, siempre ___ mucha energía. » ?',
                        'choices' => [
                            ['choice_text' => 'tenía', 'is_correct' => true],
                            ['choice_text' => 'tuve', 'is_correct' => false],
                            ['choice_text' => 'tengo', 'is_correct' => false],
                            ['choice_text' => 'tendré', 'is_correct' => false],
                        ],
                        'explanation' => '« Siempre » et « de niño » décrivent un état passé répété ou général, donc « tenía » convient.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « decir » au passé simple pour yo ?',
                        'choices' => [
                            ['choice_text' => 'Yo decía la verdad ayer una vez.', 'is_correct' => false],
                            ['choice_text' => 'Yo dije la verdad.', 'is_correct' => true],
                            ['choice_text' => 'Yo digo la verdad ayer.', 'is_correct' => false],
                            ['choice_text' => 'Yo diré la verdad ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '« Dije » est la forme irrégulière du passé simple de « decir » pour yo, pour une déclaration achevée.',
                    ],
                    [
                        'question' => 'Un ami demande ce qui s’est passé après le dîner. Quelle réponse donne un événement achevé ?',
                        'choices' => [
                            ['choice_text' => 'Después de cenar, salí a caminar.', 'is_correct' => true],
                            ['choice_text' => 'Después de cenar, salía a caminar todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Después de cenar, salgo a caminar ayer.', 'is_correct' => false],
                            ['choice_text' => 'Después de cenar, saldré a caminar ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '« Salí » présente une promenade unique achevée après le dîner, donc le passé simple convient.',
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
