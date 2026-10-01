<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PastTensesBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'past-tenses')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Past Tense Foundations',
                'description' => 'Learn the basic difference between completed past events and past habits or background situations.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Ayer ___ al banco después del trabajo.',
                        'choices' => [
                            ['choice_text' => 'fui', 'is_correct' => true],
                            ['choice_text' => 'iba', 'is_correct' => false],
                            ['choice_text' => 'voy', 'is_correct' => false],
                            ['choice_text' => 'iré', 'is_correct' => false],
                        ],
                        'explanation' => '“Ayer” points to one completed trip, so the preterite “fui” is the natural choice.',
                    ],
                    [
                        'question' => 'Cuando era niño, ___ con mis primos todos los domingos.',
                        'choices' => [
                            ['choice_text' => 'jugaba', 'is_correct' => true],
                            ['choice_text' => 'jugué', 'is_correct' => false],
                            ['choice_text' => 'juego', 'is_correct' => false],
                            ['choice_text' => 'jugaré', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence describes a repeated childhood habit, so the imperfect “jugaba” fits.',
                    ],
                    [
                        'question' => 'Which sentence describes one completed event?',
                        'choices' => [
                            ['choice_text' => 'Ayer terminé el informe.', 'is_correct' => true],
                            ['choice_text' => 'Siempre terminaba el informe temprano.', 'is_correct' => false],
                            ['choice_text' => 'De niño, terminaba temprano.', 'is_correct' => false],
                            ['choice_text' => 'Mientras trabajaba, escuchaba música.', 'is_correct' => false],
                        ],
                        'explanation' => '“Terminé” presents the report as a finished event on a specific day.',
                    ],
                    [
                        'question' => '“Los sábados ___ al mercado con mi abuela.” Which form sounds natural?',
                        'choices' => [
                            ['choice_text' => 'íbamos', 'is_correct' => true],
                            ['choice_text' => 'fuimos', 'is_correct' => false],
                            ['choice_text' => 'vamos', 'is_correct' => false],
                            ['choice_text' => 'iremos', 'is_correct' => false],
                        ],
                        'explanation' => '“Los sábados” describes a repeated past routine, which is a common use of the imperfect.',
                    ],
                    [
                        'question' => 'Which verb form is the regular preterite of hablar for yo?',
                        'choices' => [
                            ['choice_text' => 'hablé', 'is_correct' => true],
                            ['choice_text' => 'hablaba', 'is_correct' => false],
                            ['choice_text' => 'hablo', 'is_correct' => false],
                            ['choice_text' => 'hablaré', 'is_correct' => false],
                        ],
                        'explanation' => 'The regular yo preterite of “hablar” is “hablé.”',
                    ],
                    [
                        'question' => 'Which form means “we used to eat” or “we were eating” in the imperfect?',
                        'choices' => [
                            ['choice_text' => 'comíamos', 'is_correct' => true],
                            ['choice_text' => 'comimos', 'is_correct' => false],
                            ['choice_text' => 'comemos', 'is_correct' => false],
                            ['choice_text' => 'comeremos', 'is_correct' => false],
                        ],
                        'explanation' => '“Comíamos” is the nosotros imperfect form and can describe a habitual or ongoing past action.',
                    ],
                    [
                        'question' => 'Which sentence gives background information for a story?',
                        'choices' => [
                            ['choice_text' => 'Era de noche y hacía frío.', 'is_correct' => true],
                            ['choice_text' => 'Pedro cerró la puerta.', 'is_correct' => false],
                            ['choice_text' => 'Ana compró pan.', 'is_correct' => false],
                            ['choice_text' => 'El tren llegó a las ocho.', 'is_correct' => false],
                        ],
                        'explanation' => 'Time and weather commonly appear in the imperfect because they set the scene in the background.',
                    ],
                    [
                        'question' => 'A learner writes “Todos los veranos viajé con mi familia” for a repeated childhood habit. What is the better choice?',
                        'choices' => [
                            ['choice_text' => 'Todos los veranos viajaba con mi familia.', 'is_correct' => true],
                            ['choice_text' => 'Todos los veranos fui con mi familia.', 'is_correct' => false],
                            ['choice_text' => 'Todos los veranos viajo con mi familia.', 'is_correct' => false],
                            ['choice_text' => 'Todos los veranos viajaré con mi familia.', 'is_correct' => false],
                        ],
                        'explanation' => 'A repeated past habit is normally expressed with the imperfect, “viajaba.”',
                    ],
                    [
                        'question' => 'Which sentence uses the past tense correctly?',
                        'choices' => [
                            ['choice_text' => 'La semana pasada compré un diccionario.', 'is_correct' => true],
                            ['choice_text' => 'La semana pasada compro un diccionario.', 'is_correct' => false],
                            ['choice_text' => 'La semana pasada compraré un diccionario.', 'is_correct' => false],
                            ['choice_text' => 'La semana pasada comprando un diccionario.', 'is_correct' => false],
                        ],
                        'explanation' => '“Compré” is the completed past action that matches “la semana pasada.”',
                    ],
                    [
                        'question' => 'Which sentence describes a past characteristic rather than a single event?',
                        'choices' => [
                            ['choice_text' => 'Mi abuelo era muy paciente.', 'is_correct' => true],
                            ['choice_text' => 'Mi abuelo compró un coche.', 'is_correct' => false],
                            ['choice_text' => 'Mi abuelo llegó tarde.', 'is_correct' => false],
                            ['choice_text' => 'Mi abuelo abrió la ventana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Era” describes what the grandfather was like over a period of time, so the imperfect is appropriate.',
                    ],
                    [
                        'question' => 'Which pair correctly contrasts a past habit with a completed event?',
                        'choices' => [
                            ['choice_text' => 'comía / comí', 'is_correct' => true],
                            ['choice_text' => 'comí / comía', 'is_correct' => false],
                            ['choice_text' => 'como / comía', 'is_correct' => false],
                            ['choice_text' => 'comeré / comí', 'is_correct' => false],
                        ],
                        'explanation' => '“Comía” is imperfect for a habit or ongoing past action; “comí” is preterite for a completed event.',
                    ],
                ],
            ],
            [
                'title' => 'Regular Preterite in Everyday Spanish',
                'description' => 'Practice regular preterite forms through ordinary activities such as studying, working, eating, and traveling.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Anoche yo ___ pizza con mis amigos.',
                        'choices' => [
                            ['choice_text' => 'comí', 'is_correct' => true],
                            ['choice_text' => 'comía', 'is_correct' => false],
                            ['choice_text' => 'como', 'is_correct' => false],
                            ['choice_text' => 'comeré', 'is_correct' => false],
                        ],
                        'explanation' => '“Anoche” describes a completed past event, so the preterite “comí” is correct.',
                    ],
                    [
                        'question' => 'Which is the regular preterite form of hablar for nosotros?',
                        'choices' => [
                            ['choice_text' => 'hablamos', 'is_correct' => true],
                            ['choice_text' => 'hablábamos', 'is_correct' => false],
                            ['choice_text' => 'hablaron', 'is_correct' => false],
                            ['choice_text' => 'hablamos mañana', 'is_correct' => false],
                        ],
                        'explanation' => 'The regular nosotros preterite of “hablar” is “hablamos.”',
                    ],
                    [
                        'question' => 'Carlos y Elena ___ en Madrid el año pasado.',
                        'choices' => [
                            ['choice_text' => 'vivieron', 'is_correct' => true],
                            ['choice_text' => 'vivían', 'is_correct' => false],
                            ['choice_text' => 'viven', 'is_correct' => false],
                            ['choice_text' => 'vivirán', 'is_correct' => false],
                        ],
                        'explanation' => '“El año pasado” can frame a completed period, so “vivieron” is suitable in this sentence.',
                    ],
                    [
                        'question' => 'Ayer tú ___ la puerta antes de salir.',
                        'choices' => [
                            ['choice_text' => 'abriste', 'is_correct' => true],
                            ['choice_text' => 'abrías', 'is_correct' => false],
                            ['choice_text' => 'abres', 'is_correct' => false],
                            ['choice_text' => 'abrirás', 'is_correct' => false],
                        ],
                        'explanation' => '“Abriste” is the completed tú preterite form of “abrir.”',
                    ],
                    [
                        'question' => 'Which sentence uses a regular preterite verb correctly?',
                        'choices' => [
                            ['choice_text' => 'Nosotros estudiamos para el examen anoche.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros estudiaste para el examen anoche.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros estudió para el examen anoche.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros estudiar para el examen anoche.', 'is_correct' => false],
                        ],
                        'explanation' => '“Estudiamos” is the correct nosotros preterite of “estudiar.”',
                    ],
                    [
                        'question' => 'Lucía ___ una carta y la envió por la mañana.',
                        'choices' => [
                            ['choice_text' => 'escribió', 'is_correct' => true],
                            ['choice_text' => 'escribía', 'is_correct' => false],
                            ['choice_text' => 'escribe', 'is_correct' => false],
                            ['choice_text' => 'escribiría', 'is_correct' => false],
                        ],
                        'explanation' => 'Writing and sending the letter are presented as completed events, so the preterite “escribió” fits.',
                    ],
                    [
                        'question' => 'Which preterite ending belongs to a regular -AR verb in the él/ella/usted form?',
                        'choices' => [
                            ['choice_text' => '-ó', 'is_correct' => true],
                            ['choice_text' => '-ió', 'is_correct' => false],
                            ['choice_text' => '-aba', 'is_correct' => false],
                            ['choice_text' => '-ías', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular -AR verbs use “-ó” in the third-person singular preterite, as in “habló.”',
                    ],
                    [
                        'question' => 'Which preterite ending belongs to regular -ER and -IR verbs in the ellos/ellas/ustedes form?',
                        'choices' => [
                            ['choice_text' => '-ieron', 'is_correct' => true],
                            ['choice_text' => '-aron', 'is_correct' => false],
                            ['choice_text' => '-aban', 'is_correct' => false],
                            ['choice_text' => '-ían', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular -ER and -IR verbs use “-ieron” in the third-person plural preterite, such as “comieron” and “vivieron.”',
                    ],
                    [
                        'question' => 'Which sentence best matches one completed afternoon activity?',
                        'choices' => [
                            ['choice_text' => 'Ayer limpié la cocina.', 'is_correct' => true],
                            ['choice_text' => 'Ayer limpiaba la cocina todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Ayer limpio la cocina.', 'is_correct' => false],
                            ['choice_text' => 'Ayer limpiaré la cocina.', 'is_correct' => false],
                        ],
                        'explanation' => '“Limpié” presents one completed action yesterday.',
                    ],
                    [
                        'question' => 'A learner writes “Ayer caminaba al parque” to describe one trip they finished yesterday. Which form is more direct?',
                        'choices' => [
                            ['choice_text' => 'Ayer caminé al parque.', 'is_correct' => true],
                            ['choice_text' => 'Ayer caminaba al parque.', 'is_correct' => false],
                            ['choice_text' => 'Ayer camino al parque.', 'is_correct' => false],
                            ['choice_text' => 'Ayer caminaré al parque.', 'is_correct' => false],
                        ],
                        'explanation' => 'For one completed trip, the preterite “caminé” is the clearer beginner choice.',
                    ],
                    [
                        'question' => 'Which regular verb pair is correctly matched?',
                        'choices' => [
                            ['choice_text' => 'hablar → hablé', 'is_correct' => true],
                            ['choice_text' => 'comer → comaba', 'is_correct' => false],
                            ['choice_text' => 'vivir → vivíeron', 'is_correct' => false],
                            ['choice_text' => 'estudiar → estudí', 'is_correct' => false],
                        ],
                        'explanation' => '“Hablé” is the correct yo preterite form of “hablar.”',
                    ],
                    [
                        'question' => 'Which sentence correctly uses a regular -IR verb in the preterite?',
                        'choices' => [
                            ['choice_text' => 'Mis amigos vivieron en Sevilla durante dos años.', 'is_correct' => true],
                            ['choice_text' => 'Mis amigos vivían en Sevilla ayer una vez.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos vive en Sevilla.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos vivirán en Sevilla ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '“Vivieron” is the correct ellos preterite of “vivir” for the completed period described.',
                    ],
                    [
                        'question' => 'What do regular -ER and -IR verbs have in common in the preterite?',
                        'choices' => [
                            ['choice_text' => 'They use the same preterite endings.', 'is_correct' => true],
                            ['choice_text' => 'They always use the -AR endings.', 'is_correct' => false],
                            ['choice_text' => 'They never change their endings.', 'is_correct' => false],
                            ['choice_text' => 'They use only imperfect endings.', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular -ER and -IR verbs share the same preterite endings, such as “comí/comió” and “viví/vivió.”',
                    ],
                ],
            ],
            [
                'title' => 'The Imperfect for Habits and Background',
                'description' => 'Use the imperfect to talk about routines, age, weather, descriptions, and actions that were in progress.',
                'settings' => ['duration' => 15, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Cuando tenía diez años, ___ a la escuela a pie.',
                        'choices' => [
                            ['choice_text' => 'caminaba', 'is_correct' => true],
                            ['choice_text' => 'caminé', 'is_correct' => false],
                            ['choice_text' => 'camino', 'is_correct' => false],
                            ['choice_text' => 'caminaré', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence describes a repeated childhood routine, so the imperfect “caminaba” fits.',
                    ],
                    [
                        'question' => 'De niño, Pedro ___ mucho los sábados.',
                        'choices' => [
                            ['choice_text' => 'leía', 'is_correct' => true],
                            ['choice_text' => 'leyó', 'is_correct' => false],
                            ['choice_text' => 'lee', 'is_correct' => false],
                            ['choice_text' => 'leerá', 'is_correct' => false],
                        ],
                        'explanation' => '“De niño” plus a repeated activity points to the imperfect “leía.”',
                    ],
                    [
                        'question' => 'Which sentence describes what someone was like in the past?',
                        'choices' => [
                            ['choice_text' => 'Mi madre era muy paciente.', 'is_correct' => true],
                            ['choice_text' => 'Mi madre compró un coche.', 'is_correct' => false],
                            ['choice_text' => 'Mi madre llegó tarde.', 'is_correct' => false],
                            ['choice_text' => 'Mi madre abrió la ventana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Era” describes a characteristic or state rather than a single finished event.',
                    ],
                    [
                        'question' => 'Every winter, we ___ a la montaña.',
                        'choices' => [
                            ['choice_text' => 'íbamos', 'is_correct' => true],
                            ['choice_text' => 'fuimos', 'is_correct' => false],
                            ['choice_text' => 'vamos', 'is_correct' => false],
                            ['choice_text' => 'iremos', 'is_correct' => false],
                        ],
                        'explanation' => '“Every winter” signals a repeated past habit, so the imperfect “íbamos” is appropriate.',
                    ],
                    [
                        'question' => 'Which is the imperfect form of comer for nosotros?',
                        'choices' => [
                            ['choice_text' => 'comíamos', 'is_correct' => true],
                            ['choice_text' => 'comimos', 'is_correct' => false],
                            ['choice_text' => 'comemos', 'is_correct' => false],
                            ['choice_text' => 'comeremos', 'is_correct' => false],
                        ],
                        'explanation' => 'The nosotros imperfect of “comer” is “comíamos.”',
                    ],
                    [
                        'question' => 'Which is the imperfect form of vivir for ellos?',
                        'choices' => [
                            ['choice_text' => 'vivían', 'is_correct' => true],
                            ['choice_text' => 'vivieron', 'is_correct' => false],
                            ['choice_text' => 'viven', 'is_correct' => false],
                            ['choice_text' => 'vivirán', 'is_correct' => false],
                        ],
                        'explanation' => 'The ellos imperfect of “vivir” is “vivían.”',
                    ],
                    [
                        'question' => 'Which sentence gives the setting for a story?',
                        'choices' => [
                            ['choice_text' => 'La calle estaba vacía y llovía.', 'is_correct' => true],
                            ['choice_text' => 'Pedro cerró la puerta.', 'is_correct' => false],
                            ['choice_text' => 'El autobús llegó.', 'is_correct' => false],
                            ['choice_text' => 'Ana encontró las llaves.', 'is_correct' => false],
                        ],
                        'explanation' => 'The imperfect forms “estaba” and “llovía” describe the scene in the background.',
                    ],
                    [
                        'question' => 'Cuando era pequeño, ___ miedo a los perros.',
                        'choices' => [
                            ['choice_text' => 'tenía', 'is_correct' => true],
                            ['choice_text' => 'tuve', 'is_correct' => false],
                            ['choice_text' => 'tengo', 'is_correct' => false],
                            ['choice_text' => 'tendré', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence describes an ongoing state during childhood, so the imperfect “tenía” is natural.',
                    ],
                    [
                        'question' => 'Why is “Los domingos cenábamos juntos” naturally in the imperfect?',
                        'choices' => [
                            ['choice_text' => 'It describes a repeated past habit.', 'is_correct' => true],
                            ['choice_text' => 'It describes one completed dinner.', 'is_correct' => false],
                            ['choice_text' => 'It describes a future plan.', 'is_correct' => false],
                            ['choice_text' => 'It is a command.', 'is_correct' => false],
                        ],
                        'explanation' => 'The recurring expression “los domingos” makes the habitual imperfect the natural choice.',
                    ],
                    [
                        'question' => 'Which sentence contains an imperfect verb?',
                        'choices' => [
                            ['choice_text' => 'Mientras cocinaba, escuchaba música.', 'is_correct' => true],
                            ['choice_text' => 'Ayer cociné para todos.', 'is_correct' => false],
                            ['choice_text' => 'Anoche escuché la radio.', 'is_correct' => false],
                            ['choice_text' => 'La semana pasada compré un libro.', 'is_correct' => false],
                        ],
                        'explanation' => '“Cocinaba” and “escuchaba” are imperfect forms describing ongoing actions in progress.',
                    ],
                ],
            ],
            [
                'title' => 'Ser, Ir, and Ver in the Imperfect',
                'description' => 'Build confidence with the high-frequency imperfect forms of ser, ir, and ver in real beginner sentences.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Cuando era niño, ___ muy curioso.',
                        'choices' => [
                            ['choice_text' => 'era', 'is_correct' => true],
                            ['choice_text' => 'fui', 'is_correct' => false],
                            ['choice_text' => 'soy', 'is_correct' => false],
                            ['choice_text' => 'seré', 'is_correct' => false],
                        ],
                        'explanation' => '“Era” is the imperfect first-person or third-person form of “ser” used for past characteristics.',
                    ],
                    [
                        'question' => 'Antes, nosotros ___ al mercado cada sábado.',
                        'choices' => [
                            ['choice_text' => 'íbamos', 'is_correct' => true],
                            ['choice_text' => 'fuimos', 'is_correct' => false],
                            ['choice_text' => 'vamos', 'is_correct' => false],
                            ['choice_text' => 'iremos', 'is_correct' => false],
                        ],
                        'explanation' => 'Repeated past trips are expressed with the imperfect “íbamos.”',
                    ],
                    [
                        'question' => 'Which sentence means “I used to see my grandmother every week”?',
                        'choices' => [
                            ['choice_text' => 'Veía a mi abuela cada semana.', 'is_correct' => true],
                            ['choice_text' => 'Vi a mi abuela cada semana.', 'is_correct' => false],
                            ['choice_text' => 'Veo a mi abuela cada semana.', 'is_correct' => false],
                            ['choice_text' => 'Veré a mi abuela cada semana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Veía” is the imperfect form and matches the repeated habit “cada semana.”',
                    ],
                    [
                        'question' => 'Which sentence correctly describes a past age and characteristic?',
                        'choices' => [
                            ['choice_text' => 'Cuando tenía ocho años, era muy tímido.', 'is_correct' => true],
                            ['choice_text' => 'Cuando tuve ocho años, fui muy tímido siempre.', 'is_correct' => false],
                            ['choice_text' => 'Cuando tengo ocho años, era muy tímido.', 'is_correct' => false],
                            ['choice_text' => 'Cuando tendré ocho años, era muy tímido.', 'is_correct' => false],
                        ],
                        'explanation' => 'Age and personal characteristics are normally described with the imperfect, giving “tenía” and “era.”',
                    ],
                    [
                        'question' => 'Why are “Eran las nueve y hacía frío” natural in a story?',
                        'choices' => [
                            ['choice_text' => 'They provide time and weather background.', 'is_correct' => true],
                            ['choice_text' => 'They describe two future plans.', 'is_correct' => false],
                            ['choice_text' => 'They are commands.', 'is_correct' => false],
                            ['choice_text' => 'They describe one completed purchase.', 'is_correct' => false],
                        ],
                        'explanation' => 'Time and weather are common background information, so the imperfect is used.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses ser for a past description?',
                        'choices' => [
                            ['choice_text' => 'La casa era grande.', 'is_correct' => true],
                            ['choice_text' => 'La casa fue grande cada día.', 'is_correct' => false],
                            ['choice_text' => 'La casa es grande ayer.', 'is_correct' => false],
                            ['choice_text' => 'La casa será grande ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '“Era” describes the past characteristic of the house without presenting a single completed event.',
                    ],
                    [
                        'question' => 'Which phrase naturally means “We used to go to the beach”?',
                        'choices' => [
                            ['choice_text' => 'Íbamos a la playa.', 'is_correct' => true],
                            ['choice_text' => 'Fuimos a la playa.', 'is_correct' => false],
                            ['choice_text' => 'Vamos a la playa ayer.', 'is_correct' => false],
                            ['choice_text' => 'Iremos a la playa antes.', 'is_correct' => false],
                        ],
                        'explanation' => '“Íbamos” expresses a repeated or habitual past activity.',
                    ],
                    [
                        'question' => 'Which sentence uses ver in the imperfect correctly?',
                        'choices' => [
                            ['choice_text' => 'De niño, veía dibujos animados todas las tardes.', 'is_correct' => true],
                            ['choice_text' => 'De niño, vi dibujos animados todas las tardes siempre.', 'is_correct' => false],
                            ['choice_text' => 'De niño, veo dibujos animados ayer.', 'is_correct' => false],
                            ['choice_text' => 'De niño, veré dibujos animados todas las tardes.', 'is_correct' => false],
                        ],
                        'explanation' => 'The repeated childhood routine calls for the imperfect “veía.”',
                    ],
                    [
                        'question' => 'Which group contains only imperfect forms?',
                        'choices' => [
                            ['choice_text' => 'era, iba, veía', 'is_correct' => true],
                            ['choice_text' => 'fue, fui, vi', 'is_correct' => false],
                            ['choice_text' => 'habló, comió, vivió', 'is_correct' => false],
                            ['choice_text' => 'voy, veo, soy', 'is_correct' => false],
                        ],
                        'explanation' => '“Era,” “iba,” and “veía” are the imperfect forms of ser, ir, and ver.',
                    ],
                    [
                        'question' => 'Which is the best way for a beginner to remember the imperfect forms of ser, ir, and ver?',
                        'choices' => [
                            ['choice_text' => 'Learn them as a small set of common irregular forms.', 'is_correct' => true],
                            ['choice_text' => 'Treat them like regular -AR verbs.', 'is_correct' => false],
                            ['choice_text' => 'Treat them like regular -ER verbs.', 'is_correct' => false],
                            ['choice_text' => 'Avoid using them in the imperfect.', 'is_correct' => false],
                        ],
                        'explanation' => 'These three verbs have distinctive imperfect forms, so learning them as a small high-frequency group is effective.',
                    ],
                ],
            ],
            [
                'title' => 'Preterite or Imperfect? Real Situations',
                'description' => 'Choose naturally between the preterite and imperfect when a completed event happens during an ongoing action or background scene.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Mientras Ana ___, sonó el teléfono.',
                        'choices' => [
                            ['choice_text' => 'estudiaba', 'is_correct' => true],
                            ['choice_text' => 'estudió', 'is_correct' => false],
                            ['choice_text' => 'estudia', 'is_correct' => false],
                            ['choice_text' => 'estudiará', 'is_correct' => false],
                        ],
                        'explanation' => 'The studying was already in progress when the phone rang, so the imperfect “estudiaba” sets the background.',
                    ],
                    [
                        'question' => 'Ayer, mientras yo caminaba por el centro, ___ a Marta.',
                        'choices' => [
                            ['choice_text' => 'vi', 'is_correct' => true],
                            ['choice_text' => 'veía', 'is_correct' => false],
                            ['choice_text' => 'veo', 'is_correct' => false],
                            ['choice_text' => 'veré', 'is_correct' => false],
                        ],
                        'explanation' => 'Seeing Marta is presented as a completed event that happened during the walk, so “vi” fits.',
                    ],
                    [
                        'question' => 'Cuando llegamos al restaurante, la gente ___ y hablaba muy alto.',
                        'choices' => [
                            ['choice_text' => 'comía', 'is_correct' => true],
                            ['choice_text' => 'comió', 'is_correct' => false],
                            ['choice_text' => 'come', 'is_correct' => false],
                            ['choice_text' => 'comerá', 'is_correct' => false],
                        ],
                        'explanation' => 'The eating was already in progress when we arrived, so the imperfect is used for the background action.',
                    ],
                    [
                        'question' => 'What is the role of “llegó” in “Mientras yo dormía, mi hermano llegó”?',
                        'choices' => [
                            ['choice_text' => 'It marks the completed event that happened during the ongoing action.', 'is_correct' => true],
                            ['choice_text' => 'It describes a repeated childhood habit.', 'is_correct' => false],
                            ['choice_text' => 'It gives the weather background.', 'is_correct' => false],
                            ['choice_text' => 'It describes a future plan.', 'is_correct' => false],
                        ],
                        'explanation' => '“Llegó” is preterite because the arrival is a completed event that interrupts or occurs during the imperfect “dormía.”',
                    ],
                    [
                        'question' => 'Which sentence is most natural for one completed event at a specific past time?',
                        'choices' => [
                            ['choice_text' => 'A las seis, terminamos el trabajo.', 'is_correct' => true],
                            ['choice_text' => 'A las seis, terminábamos el trabajo todos los días.', 'is_correct' => false],
                            ['choice_text' => 'A las seis, terminamos el trabajo cada tarde.', 'is_correct' => false],
                            ['choice_text' => 'A las seis, terminábamos el trabajo ayer una vez.', 'is_correct' => false],
                        ],
                        'explanation' => 'A single completed event at a specific time is naturally expressed with the preterite “terminamos.”',
                    ],
                    [
                        'question' => 'Which sentence sounds most natural for a repeated past habit?',
                        'choices' => [
                            ['choice_text' => 'Siempre cenábamos a las ocho.', 'is_correct' => true],
                            ['choice_text' => 'Ayer cenamos a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'Anoche cenamos a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'El martes cenamos a las ocho.', 'is_correct' => false],
                        ],
                        'explanation' => '“Siempre” makes the activity habitual, so the imperfect “cenábamos” is the natural choice.',
                    ],
                    [
                        'question' => 'It was raining when we left the house. Which sentence expresses the background weather?',
                        'choices' => [
                            ['choice_text' => 'Llovía cuando salimos de casa.', 'is_correct' => true],
                            ['choice_text' => 'Llovió cuando salimos de casa.', 'is_correct' => false],
                            ['choice_text' => 'Llueve cuando salimos de casa.', 'is_correct' => false],
                            ['choice_text' => 'Lloverá cuando salimos de casa.', 'is_correct' => false],
                        ],
                        'explanation' => 'The rain is background to the completed departure, so the imperfect “llovía” is appropriate.',
                    ],
                    [
                        'question' => 'Which sentence clearly separates the background action from the event?',
                        'choices' => [
                            ['choice_text' => 'Yo dormía cuando mi madre abrió la puerta.', 'is_correct' => true],
                            ['choice_text' => 'Yo dormí cuando mi madre abría la puerta.', 'is_correct' => false],
                            ['choice_text' => 'Yo duermo cuando mi madre abrió la puerta.', 'is_correct' => false],
                            ['choice_text' => 'Yo dormiré cuando mi madre abría la puerta.', 'is_correct' => false],
                        ],
                        'explanation' => '“Dormía” shows the ongoing action, while “abrió” marks the completed event.',
                    ],
                    [
                        'question' => 'Which form fits best after “De repente”? “De repente, el niño ___ a llorar.”',
                        'choices' => [
                            ['choice_text' => 'empezó', 'is_correct' => true],
                            ['choice_text' => 'empezaba', 'is_correct' => false],
                            ['choice_text' => 'empieza', 'is_correct' => false],
                            ['choice_text' => 'empezará', 'is_correct' => false],
                        ],
                        'explanation' => '“De repente” introduces a sudden completed event, so the preterite “empezó” is natural.',
                    ],
                    [
                        'question' => 'Cuando vivíamos en México, ___ tacos los viernes.',
                        'choices' => [
                            ['choice_text' => 'comíamos', 'is_correct' => true],
                            ['choice_text' => 'comimos', 'is_correct' => false],
                            ['choice_text' => 'comemos', 'is_correct' => false],
                            ['choice_text' => 'comeremos', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence describes a repeated routine during a past period, so the imperfect “comíamos” is appropriate.',
                    ],
                    [
                        'question' => 'A learner wants to say that they were walking when it started to rain. Which sentence works best?',
                        'choices' => [
                            ['choice_text' => 'Caminaba cuando empezó a llover.', 'is_correct' => true],
                            ['choice_text' => 'Caminé cuando empezaba a llover.', 'is_correct' => false],
                            ['choice_text' => 'Camino cuando empezó a llover.', 'is_correct' => false],
                            ['choice_text' => 'Caminaré cuando empezó a llover.', 'is_correct' => false],
                        ],
                        'explanation' => '“Caminaba” describes the ongoing action, while “empezó” marks the completed event that occurred during it.',
                    ],
                    [
                        'question' => 'Which sentence best describes a past state rather than a completed event?',
                        'choices' => [
                            ['choice_text' => 'La ciudad era muy tranquila.', 'is_correct' => true],
                            ['choice_text' => 'La ciudad inauguró un museo.', 'is_correct' => false],
                            ['choice_text' => 'La ciudad recibió turistas.', 'is_correct' => false],
                            ['choice_text' => 'La ciudad creció mucho.', 'is_correct' => false],
                        ],
                        'explanation' => '“Era” describes a characteristic of the city over a period of time, so the imperfect is appropriate.',
                    ],
                    [
                        'question' => 'Choose the natural contrast: “Antes ___ temprano, pero ayer ___ tarde.”',
                        'choices' => [
                            ['choice_text' => 'me levantaba / me levanté', 'is_correct' => true],
                            ['choice_text' => 'me levanté / me levantaba', 'is_correct' => false],
                            ['choice_text' => 'me levanto / me levantaba', 'is_correct' => false],
                            ['choice_text' => 'me levantaré / me levanté', 'is_correct' => false],
                        ],
                        'explanation' => '“Antes” describes a former habit, so the imperfect is used; “ayer” describes one completed event, so the preterite fits.',
                    ],
                ],
            ],
            [
                'title' => 'Common Irregular Past Forms',
                'description' => 'Practice high-frequency irregular preterite forms such as fui, tuve, estuve, hice, and dije in simple situations.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Which is the preterite form of tener for yo?',
                        'choices' => [
                            ['choice_text' => 'tuve', 'is_correct' => true],
                            ['choice_text' => 'tenía', 'is_correct' => false],
                            ['choice_text' => 'tengo', 'is_correct' => false],
                            ['choice_text' => 'tendré', 'is_correct' => false],
                        ],
                        'explanation' => '“Tuve” is the irregular preterite first-person singular of “tener.”',
                    ],
                    [
                        'question' => 'Which sentence correctly uses the preterite of estar?',
                        'choices' => [
                            ['choice_text' => 'Ayer estuve en casa.', 'is_correct' => true],
                            ['choice_text' => 'Ayer estaba en casa una vez y terminé.', 'is_correct' => false],
                            ['choice_text' => 'Ayer estoy en casa.', 'is_correct' => false],
                            ['choice_text' => 'Ayer estaré en casa.', 'is_correct' => false],
                        ],
                        'explanation' => '“Estuve” is the preterite yo form of “estar” for a completed past situation.',
                    ],
                    [
                        'question' => 'Nosotros ___ que salir temprano ayer.',
                        'choices' => [
                            ['choice_text' => 'tuvimos', 'is_correct' => true],
                            ['choice_text' => 'teníamos', 'is_correct' => false],
                            ['choice_text' => 'tenemos', 'is_correct' => false],
                            ['choice_text' => 'tendremos', 'is_correct' => false],
                        ],
                        'explanation' => '“Tuvimos” is the nosotros preterite of “tener” and fits the completed situation “ayer.”',
                    ],
                    [
                        'question' => 'Which is the preterite form of hacer for él/ella?',
                        'choices' => [
                            ['choice_text' => 'hizo', 'is_correct' => true],
                            ['choice_text' => 'hacía', 'is_correct' => false],
                            ['choice_text' => 'hace', 'is_correct' => false],
                            ['choice_text' => 'hará', 'is_correct' => false],
                        ],
                        'explanation' => 'The irregular third-person singular preterite of “hacer” is “hizo.”',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Ayer hice la cena.', 'is_correct' => true],
                            ['choice_text' => 'Ayer hacía la cena una vez y terminé.', 'is_correct' => false],
                            ['choice_text' => 'Ayer hago la cena.', 'is_correct' => false],
                            ['choice_text' => 'Ayer haré la cena.', 'is_correct' => false],
                        ],
                        'explanation' => '“Hice” is the preterite yo form of “hacer” and presents the cooking as completed.',
                    ],
                    [
                        'question' => 'What does “tuve” mean in a simple past context?',
                        'choices' => [
                            ['choice_text' => 'I had', 'is_correct' => true],
                            ['choice_text' => 'I used to have', 'is_correct' => false],
                            ['choice_text' => 'I have', 'is_correct' => false],
                            ['choice_text' => 'I will have', 'is_correct' => false],
                        ],
                        'explanation' => '“Tuve” is the preterite of “tener,” commonly translated as “I had” for a completed past situation.',
                    ],
                    [
                        'question' => 'Which pair contains two common irregular preterite forms?',
                        'choices' => [
                            ['choice_text' => 'fui and tuve', 'is_correct' => true],
                            ['choice_text' => 'iba and tenía', 'is_correct' => false],
                            ['choice_text' => 'era and veía', 'is_correct' => false],
                            ['choice_text' => 'hablaba and comíamos', 'is_correct' => false],
                        ],
                        'explanation' => '“Fui” and “tuve” are common irregular preterite forms; the other choices contain imperfect forms.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses “fui” for a completed trip?',
                        'choices' => [
                            ['choice_text' => 'El sábado fui al cine.', 'is_correct' => true],
                            ['choice_text' => 'El sábado iba al cine una vez.', 'is_correct' => false],
                            ['choice_text' => 'El sábado voy al cine ayer.', 'is_correct' => false],
                            ['choice_text' => 'El sábado iré al cine ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '“Fui” is the preterite form of “ir” and describes the completed cinema trip.',
                    ],
                    [
                        'question' => 'Which sentence uses the imperfect rather than the preterite?',
                        'choices' => [
                            ['choice_text' => 'Cuando era joven, tenía mucho tiempo libre.', 'is_correct' => true],
                            ['choice_text' => 'Ayer tuve una reunión.', 'is_correct' => false],
                            ['choice_text' => 'La semana pasada hice el examen.', 'is_correct' => false],
                            ['choice_text' => 'El lunes fui al banco.', 'is_correct' => false],
                        ],
                        'explanation' => '“Era” and “tenía” describe a general past state during youth, so the imperfect is appropriate.',
                    ],
                    [
                        'question' => 'A learner sees “hizo” and “hacía.” Which explanation is correct?',
                        'choices' => [
                            ['choice_text' => '“Hizo” is preterite; “hacía” is imperfect.', 'is_correct' => true],
                            ['choice_text' => 'Both are present forms.', 'is_correct' => false],
                            ['choice_text' => 'Both are future forms.', 'is_correct' => false],
                            ['choice_text' => '“Hizo” is imperfect; “hacía” is preterite.', 'is_correct' => false],
                        ],
                        'explanation' => '“Hizo” presents a completed action, while “hacía” describes an ongoing or habitual past action.',
                    ],
                    [
                        'question' => 'Which sentence best fits a sudden completed weather change?',
                        'choices' => [
                            ['choice_text' => 'De repente, hizo mucho frío.', 'is_correct' => true],
                            ['choice_text' => 'De repente, hacía mucho frío todos los inviernos.', 'is_correct' => false],
                            ['choice_text' => 'De repente, hace mucho frío ayer.', 'is_correct' => false],
                            ['choice_text' => 'De repente, hará mucho frío ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '“De repente” introduces a sudden completed change, making the preterite “hizo” natural.',
                    ],
                    [
                        'question' => 'Which form completes “De niño, siempre ___ mucha energía.”?',
                        'choices' => [
                            ['choice_text' => 'tenía', 'is_correct' => true],
                            ['choice_text' => 'tuve', 'is_correct' => false],
                            ['choice_text' => 'tengo', 'is_correct' => false],
                            ['choice_text' => 'tendré', 'is_correct' => false],
                        ],
                        'explanation' => '“Siempre” and “de niño” describe a repeated or general past state, so “tenía” is appropriate.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses “decir” in the preterite for yo?',
                        'choices' => [
                            ['choice_text' => 'Yo dije la verdad.', 'is_correct' => true],
                            ['choice_text' => 'Yo decía la verdad ayer una vez.', 'is_correct' => false],
                            ['choice_text' => 'Yo digo la verdad ayer.', 'is_correct' => false],
                            ['choice_text' => 'Yo diré la verdad ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '“Dije” is the irregular preterite yo form of “decir” for a completed statement.',
                    ],
                    [
                        'question' => 'A friend asks what happened after dinner. Which answer gives a completed event?',
                        'choices' => [
                            ['choice_text' => 'Después de cenar, salí a caminar.', 'is_correct' => true],
                            ['choice_text' => 'Después de cenar, salía a caminar todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Después de cenar, salgo a caminar ayer.', 'is_correct' => false],
                            ['choice_text' => 'Después de cenar, saldré a caminar ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '“Salí” presents one completed walk after dinner, so the preterite is appropriate.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $settings = $quizData['settings'];

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
