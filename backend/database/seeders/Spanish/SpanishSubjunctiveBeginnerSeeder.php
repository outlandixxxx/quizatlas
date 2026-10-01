<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjunctiveBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'subjunctive')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Subjunctive Foundations',
                'description' => 'Meet the Spanish subjunctive through simple wishes, recommendations, and situations where another action depends on a feeling or request.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Which sentence expresses a wish about another person\'s action?',
                        'choices' => [
                            ['choice_text' => 'Quiero que estudies.', 'is_correct' => true],
                            ['choice_text' => 'Estudias cada noche.', 'is_correct' => false],
                            ['choice_text' => 'Estudiaste ayer.', 'is_correct' => false],
                            ['choice_text' => 'Estudiarás mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'The clause “que estudies” is in the subjunctive because the speaker is expressing a wish about someone else\'s action.',
                    ],
                    [
                        'question' => 'Complete: “Espero que Ana ___ bien.”',
                        'choices' => [
                            ['choice_text' => 'esté', 'is_correct' => true],
                            ['choice_text' => 'está', 'is_correct' => false],
                            ['choice_text' => 'estuvo', 'is_correct' => false],
                            ['choice_text' => 'estará', 'is_correct' => false],
                        ],
                        'explanation' => 'After “Espero que,” Spanish normally uses the subjunctive because the speaker is expressing a hope rather than stating a fact.',
                    ],
                    [
                        'question' => 'Which sentence contains a present subjunctive verb?',
                        'choices' => [
                            ['choice_text' => 'Es importante que llegues temprano.', 'is_correct' => true],
                            ['choice_text' => 'Llegas temprano todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Llegaste temprano ayer.', 'is_correct' => false],
                            ['choice_text' => 'Llegarás temprano mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Llegues” is a present subjunctive form triggered by “Es importante que.”',
                    ],
                    [
                        'question' => 'A teacher says, “Quiero que ustedes ___ atención.” Which form fits?',
                        'choices' => [
                            ['choice_text' => 'presten', 'is_correct' => true],
                            ['choice_text' => 'prestan', 'is_correct' => false],
                            ['choice_text' => 'prestaron', 'is_correct' => false],
                            ['choice_text' => 'prestarán', 'is_correct' => false],
                        ],
                        'explanation' => '“Quiero que” expresses a desire, so the following verb is subjunctive: “presten.”',
                    ],
                    [
                        'question' => 'Which idea most often calls for the beginner-level subjunctive?',
                        'choices' => [
                            ['choice_text' => 'A wish or recommendation about someone else', 'is_correct' => true],
                            ['choice_text' => 'A simple statement of fact', 'is_correct' => false],
                            ['choice_text' => 'A completed action yesterday', 'is_correct' => false],
                            ['choice_text' => 'A routine with no uncertainty', 'is_correct' => false],
                        ],
                        'explanation' => 'At beginner level, the subjunctive commonly appears when one person\'s wish, advice, feeling, or uncertainty affects another action.',
                    ],
                    [
                        'question' => 'Choose the natural sentence: “Mi madre quiere que yo ___ más.”',
                        'choices' => [
                            ['choice_text' => 'descanse', 'is_correct' => true],
                            ['choice_text' => 'descanso', 'is_correct' => false],
                            ['choice_text' => 'descansé', 'is_correct' => false],
                            ['choice_text' => 'descansaré', 'is_correct' => false],
                        ],
                        'explanation' => '“Quiere que” expresses a desire about another person\'s action, so “descanse” is subjunctive.',
                    ],
                    [
                        'question' => 'Which pair contains a normal indicative statement and a subjunctive wish?',
                        'choices' => [
                            ['choice_text' => 'Sé que vienes. / Quiero que vengas.', 'is_correct' => true],
                            ['choice_text' => 'Vengas cada día. / Sé que vienes.', 'is_correct' => false],
                            ['choice_text' => 'Quiero que vienes. / Sé que vengas.', 'is_correct' => false],
                            ['choice_text' => 'Vengas ayer. / Quiero que vienes.', 'is_correct' => false],
                        ],
                        'explanation' => '“Sé que vienes” states something presented as known, while “Quiero que vengas” expresses a wish and uses the subjunctive.',
                    ],
                    [
                        'question' => 'A friend says, “Espero que todo ___ bien.” Which form is most natural?',
                        'choices' => [
                            ['choice_text' => 'salga', 'is_correct' => true],
                            ['choice_text' => 'sale', 'is_correct' => false],
                            ['choice_text' => 'salió', 'is_correct' => false],
                            ['choice_text' => 'saldrá', 'is_correct' => false],
                        ],
                        'explanation' => '“Espero que” normally introduces the subjunctive when expressing hope, so “salga” is correct.',
                    ],
                    [
                        'question' => 'Which sentence gives advice to another person?',
                        'choices' => [
                            ['choice_text' => 'Te recomiendo que duermas más.', 'is_correct' => true],
                            ['choice_text' => 'Duermes ocho horas.', 'is_correct' => false],
                            ['choice_text' => 'Dormiste ocho horas.', 'is_correct' => false],
                            ['choice_text' => 'Dormirás ocho horas.', 'is_correct' => false],
                        ],
                        'explanation' => '“Te recomiendo que” introduces advice, a common beginner trigger for the subjunctive.',
                    ],
                    [
                        'question' => 'What is the key difference between these two sentences: “Quieres que venga” and “Quieres venir”?',
                        'choices' => [
                            ['choice_text' => 'The first asks another person to come; the second says you want to come.', 'is_correct' => true],
                            ['choice_text' => 'Both mean exactly the same thing.', 'is_correct' => false],
                            ['choice_text' => 'The first is past tense; the second is future tense.', 'is_correct' => false],
                            ['choice_text' => 'The first is a question; the second is a command.', 'is_correct' => false],
                        ],
                        'explanation' => '“Quieres que venga” refers to another subject after “que,” while “quieres venir” keeps the same subject.',
                    ],
                ],
            ],
            [
                'title' => 'Common Subjunctive Triggers',
                'description' => 'Practice everyday expressions such as “quiero que,” “espero que,” “es importante que,” and “recomiendo que.”',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Complete: “Es importante que nosotros ___ puntuales.”',
                        'choices' => [
                            ['choice_text' => 'seamos', 'is_correct' => true],
                            ['choice_text' => 'somos', 'is_correct' => false],
                            ['choice_text' => 'fuimos', 'is_correct' => false],
                            ['choice_text' => 'seremos', 'is_correct' => false],
                        ],
                        'explanation' => '“Es importante que” expresses a judgment or recommendation, so the following verb uses the subjunctive: “seamos.”',
                    ],
                    [
                        'question' => 'Which sentence uses “necesitar” naturally with the subjunctive?',
                        'choices' => [
                            ['choice_text' => 'Necesito que me ayudes.', 'is_correct' => true],
                            ['choice_text' => 'Necesito que me ayudas.', 'is_correct' => false],
                            ['choice_text' => 'Necesito que me ayudaste.', 'is_correct' => false],
                            ['choice_text' => 'Necesito que me ayudarás.', 'is_correct' => false],
                        ],
                        'explanation' => 'When the speaker needs another person to do something, “necesito que” is commonly followed by the subjunctive.',
                    ],
                    [
                        'question' => 'A doctor gives a simple recommendation: “Es mejor que tú ___ agua.”',
                        'choices' => [
                            ['choice_text' => 'bebas', 'is_correct' => true],
                            ['choice_text' => 'bebes', 'is_correct' => false],
                            ['choice_text' => 'bebiste', 'is_correct' => false],
                            ['choice_text' => 'beberás', 'is_correct' => false],
                        ],
                        'explanation' => '“Es mejor que” gives advice or a recommendation, so “bebas” is the appropriate subjunctive form.',
                    ],
                    [
                        'question' => 'Which sentence expresses a hope?',
                        'choices' => [
                            ['choice_text' => 'Ojalá que no llueva.', 'is_correct' => true],
                            ['choice_text' => 'No llueve hoy.', 'is_correct' => false],
                            ['choice_text' => 'No llovió ayer.', 'is_correct' => false],
                            ['choice_text' => 'No lloverá mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ojalá que” is a common way to express a wish or hope and is followed by the subjunctive.',
                    ],
                    [
                        'question' => 'Which verb form completes “Prefiero que ellos ___ aquí.”?',
                        'choices' => [
                            ['choice_text' => 'se queden', 'is_correct' => true],
                            ['choice_text' => 'se quedan', 'is_correct' => false],
                            ['choice_text' => 'se quedaron', 'is_correct' => false],
                            ['choice_text' => 'se quedarán', 'is_correct' => false],
                        ],
                        'explanation' => '“Prefiero que” expresses a preference about another person\'s action, so the subjunctive is used.',
                    ],
                    [
                        'question' => 'A parent says, “Quiero que mis hijos ___ temprano.” Which answer is correct?',
                        'choices' => [
                            ['choice_text' => 'duerman', 'is_correct' => true],
                            ['choice_text' => 'duermen', 'is_correct' => false],
                            ['choice_text' => 'durmieron', 'is_correct' => false],
                            ['choice_text' => 'dormirán', 'is_correct' => false],
                        ],
                        'explanation' => 'The parent\'s desire triggers the subjunctive: “Quiero que mis hijos duerman temprano.”',
                    ],
                    [
                        'question' => 'Which sentence gives a recommendation rather than reporting a fact?',
                        'choices' => [
                            ['choice_text' => 'Te sugiero que estudies un poco.', 'is_correct' => true],
                            ['choice_text' => 'Estudias un poco cada día.', 'is_correct' => false],
                            ['choice_text' => 'Estudiaste un poco ayer.', 'is_correct' => false],
                            ['choice_text' => 'Estudiarás un poco mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Te sugiero que” is a recommendation, so “estudies” is in the subjunctive.',
                    ],
                    [
                        'question' => 'Complete: “Es necesario que ella ___ la verdad.”',
                        'choices' => [
                            ['choice_text' => 'diga', 'is_correct' => true],
                            ['choice_text' => 'dice', 'is_correct' => false],
                            ['choice_text' => 'dijo', 'is_correct' => false],
                            ['choice_text' => 'dirá', 'is_correct' => false],
                        ],
                        'explanation' => '“Es necesario que” expresses necessity, which is a common beginner trigger for the subjunctive.',
                    ],
                    [
                        'question' => 'Which sentence is correctly formed?',
                        'choices' => [
                            ['choice_text' => 'Espero que tengas tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Espero que tienes tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Espero que tuviste tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Espero que tendrás tiempo.', 'is_correct' => false],
                        ],
                        'explanation' => '“Espero que” expresses hope, so the dependent verb is normally in the subjunctive.',
                    ],
                    [
                        'question' => 'A teacher wants students to read more. Which sentence matches that intention?',
                        'choices' => [
                            ['choice_text' => 'La profesora quiere que lean más.', 'is_correct' => true],
                            ['choice_text' => 'La profesora quiere que leen más.', 'is_correct' => false],
                            ['choice_text' => 'La profesora quiere que leyeron más.', 'is_correct' => false],
                            ['choice_text' => 'La profesora quiere que leerán más.', 'is_correct' => false],
                        ],
                        'explanation' => '“Quiere que” expresses the teacher\'s desire about the students\' action, so “lean” is subjunctive.',
                    ],
                    [
                        'question' => 'Which expression is a strong clue that the next verb may be subjunctive?',
                        'choices' => [
                            ['choice_text' => 'Es bueno que...', 'is_correct' => true],
                            ['choice_text' => 'Es verdad que...', 'is_correct' => false],
                            ['choice_text' => 'Sé que...', 'is_correct' => false],
                            ['choice_text' => 'Creo que...', 'is_correct' => false],
                        ],
                        'explanation' => '“Es bueno que” expresses an evaluation or recommendation and commonly introduces the subjunctive.',
                    ],
                    [
                        'question' => 'Which sentence uses the subjunctive naturally with “ojalá”?',
                        'choices' => [
                            ['choice_text' => 'Ojalá que encuentres el camino.', 'is_correct' => true],
                            ['choice_text' => 'Ojalá que encuentras el camino.', 'is_correct' => false],
                            ['choice_text' => 'Ojalá que encontraste el camino.', 'is_correct' => false],
                            ['choice_text' => 'Ojalá que encontrarás el camino.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ojalá que” is followed by a subjunctive form such as “encuentres” when expressing a wish.',
                    ],
                ],
            ],
            [
                'title' => 'Building Present Subjunctive Forms',
                'description' => 'Learn the basic present-subjunctive endings and connect them to familiar -ar, -er, and -ir verbs.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'What is the present subjunctive form of hablar for yo?',
                        'choices' => [
                            ['choice_text' => 'hable', 'is_correct' => true],
                            ['choice_text' => 'hablo', 'is_correct' => false],
                            ['choice_text' => 'hablé', 'is_correct' => false],
                            ['choice_text' => 'hablaré', 'is_correct' => false],
                        ],
                        'explanation' => 'The present subjunctive first-person singular of “hablar” is “hable.”',
                    ],
                    [
                        'question' => 'Which form completes “Quiero que tú ___ español.”?',
                        'choices' => [
                            ['choice_text' => 'hables', 'is_correct' => true],
                            ['choice_text' => 'hablas', 'is_correct' => false],
                            ['choice_text' => 'hablaste', 'is_correct' => false],
                            ['choice_text' => 'hablarás', 'is_correct' => false],
                        ],
                        'explanation' => 'After “Quiero que,” the second verb is subjunctive, so “hables” is correct.',
                    ],
                    [
                        'question' => 'What is the present subjunctive form of comer for nosotros?',
                        'choices' => [
                            ['choice_text' => 'comamos', 'is_correct' => true],
                            ['choice_text' => 'comemos', 'is_correct' => false],
                            ['choice_text' => 'comimos', 'is_correct' => false],
                            ['choice_text' => 'comeremos', 'is_correct' => false],
                        ],
                        'explanation' => 'The present subjunctive nosotros form of “comer” is “comamos.”',
                    ],
                    [
                        'question' => 'Complete: “Es importante que ustedes ___ bien.”',
                        'choices' => [
                            ['choice_text' => 'coman', 'is_correct' => true],
                            ['choice_text' => 'comen', 'is_correct' => false],
                            ['choice_text' => 'comieron', 'is_correct' => false],
                            ['choice_text' => 'comerán', 'is_correct' => false],
                        ],
                        'explanation' => '“Es importante que” requires the subjunctive, and “coman” is the ustedes form.',
                    ],
                    [
                        'question' => 'Which is the present subjunctive form of vivir for ella?',
                        'choices' => [
                            ['choice_text' => 'viva', 'is_correct' => true],
                            ['choice_text' => 'vive', 'is_correct' => false],
                            ['choice_text' => 'vivió', 'is_correct' => false],
                            ['choice_text' => 'vivirá', 'is_correct' => false],
                        ],
                        'explanation' => 'The present subjunctive third-person singular of “vivir” is “viva.”',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Espero que él escriba pronto.', 'is_correct' => true],
                            ['choice_text' => 'Espero que él escribe pronto.', 'is_correct' => false],
                            ['choice_text' => 'Espero que él escribió pronto.', 'is_correct' => false],
                            ['choice_text' => 'Espero que él escribirá pronto.', 'is_correct' => false],
                        ],
                        'explanation' => '“Espero que” triggers the subjunctive, so “escriba” is the correct form.',
                    ],
                    [
                        'question' => 'A learner remembers that present subjunctive endings for regular -AR verbs resemble which present-tense endings?',
                        'choices' => [
                            ['choice_text' => 'The -ER/-IR present endings', 'is_correct' => true],
                            ['choice_text' => 'The future endings', 'is_correct' => false],
                            ['choice_text' => 'The preterite endings', 'is_correct' => false],
                            ['choice_text' => 'The imperfect endings', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular -AR subjunctive endings use -e, -es, -e, -emos, -éis, -en, while -ER/-IR subjunctive verbs use -a endings.',
                    ],
                    [
                        'question' => 'A learner wants to say, “I want you to eat.” Which sentence is right?',
                        'choices' => [
                            ['choice_text' => 'Quiero que comas.', 'is_correct' => true],
                            ['choice_text' => 'Quiero que comes.', 'is_correct' => false],
                            ['choice_text' => 'Quiero que comiste.', 'is_correct' => false],
                            ['choice_text' => 'Quiero que comerás.', 'is_correct' => false],
                        ],
                        'explanation' => 'The desired action belongs to “tú,” so the present subjunctive “comas” is required after “Quiero que.”',
                    ],
                    [
                        'question' => 'Which form belongs in “Es bueno que nosotros ___ aquí.”?',
                        'choices' => [
                            ['choice_text' => 'estemos', 'is_correct' => true],
                            ['choice_text' => 'estamos', 'is_correct' => false],
                            ['choice_text' => 'estuvimos', 'is_correct' => false],
                            ['choice_text' => 'estaremos', 'is_correct' => false],
                        ],
                        'explanation' => '“Es bueno que” introduces an evaluation, so the dependent verb is subjunctive: “estemos.”',
                    ],
                    [
                        'question' => 'Which form is the present subjunctive of tener for yo?',
                        'choices' => [
                            ['choice_text' => 'tenga', 'is_correct' => true],
                            ['choice_text' => 'tengo', 'is_correct' => false],
                            ['choice_text' => 'tuve', 'is_correct' => false],
                            ['choice_text' => 'tendré', 'is_correct' => false],
                        ],
                        'explanation' => '“Tenga” is the present subjunctive yo form of “tener.”',
                    ],
                    [
                        'question' => 'Complete: “Mi padre quiere que yo ___ más.”',
                        'choices' => [
                            ['choice_text' => 'lea', 'is_correct' => true],
                            ['choice_text' => 'leo', 'is_correct' => false],
                            ['choice_text' => 'leí', 'is_correct' => false],
                            ['choice_text' => 'leeré', 'is_correct' => false],
                        ],
                        'explanation' => 'The verb after “quiere que” is subjunctive, so “lea” is the correct yo form of “leer.”',
                    ],
                ],
            ],
            [
                'title' => 'Subjunctive vs. Indicative',
                'description' => 'Learn to distinguish simple statements of fact from wishes, opinions, recommendations, and uncertainty that can trigger the subjunctive.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which sentence states a fact rather than a wish?',
                        'choices' => [
                            ['choice_text' => 'Sé que Marta trabaja aquí.', 'is_correct' => true],
                            ['choice_text' => 'Quiero que Marta trabaje aquí.', 'is_correct' => false],
                            ['choice_text' => 'Espero que Marta trabaje aquí.', 'is_correct' => false],
                            ['choice_text' => 'Es posible que Marta trabaje aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '“Sé que” presents the information as known, so the indicative “trabaja” is natural.',
                    ],
                    [
                        'question' => 'Which sentence shows uncertainty?',
                        'choices' => [
                            ['choice_text' => 'Es posible que llegue tarde.', 'is_correct' => true],
                            ['choice_text' => 'Sé que llega tarde.', 'is_correct' => false],
                            ['choice_text' => 'Veo que llega tarde.', 'is_correct' => false],
                            ['choice_text' => 'Llega tarde todos los días.', 'is_correct' => false],
                        ],
                        'explanation' => '“Es posible que” expresses possibility or uncertainty, so the subjunctive “llegue” is appropriate.',
                    ],
                    [
                        'question' => 'Choose the natural pair: fact first, then hope.',
                        'choices' => [
                            ['choice_text' => 'Sé que viene. / Espero que venga.', 'is_correct' => true],
                            ['choice_text' => 'Sé que venga. / Espero que viene.', 'is_correct' => false],
                            ['choice_text' => 'Sé que vino. / Espero que viene.', 'is_correct' => false],
                            ['choice_text' => 'Sé que vendrá. / Espero que viene.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first clause presents a known fact; the second expresses hope, which triggers the subjunctive.',
                    ],
                    [
                        'question' => 'Which sentence contains an indicative verb after “creo que” in a normal positive statement?',
                        'choices' => [
                            ['choice_text' => 'Creo que tiene razón.', 'is_correct' => true],
                            ['choice_text' => 'Creo que tenga razón.', 'is_correct' => false],
                            ['choice_text' => 'Creo que tuvo razón tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'Creo que tendrás razón yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'In a normal affirmative “creo que” statement, the speaker presents the idea as believed or likely, so the indicative is standard.',
                    ],
                    [
                        'question' => 'A speaker doubts that her friend has time. Which sentence fits?',
                        'choices' => [
                            ['choice_text' => 'Dudo que tenga tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Dudo que tiene tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Dudo que tuvo tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Dudo que tendrá tiempo.', 'is_correct' => false],
                        ],
                        'explanation' => '“Dudo que” expresses doubt, so the subjunctive “tenga” is used.',
                    ],
                    [
                        'question' => 'Which sentence expresses an opinion or evaluation that affects another action?',
                        'choices' => [
                            ['choice_text' => 'Es bueno que descanses.', 'is_correct' => true],
                            ['choice_text' => 'Descansas todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Descansaste ayer.', 'is_correct' => false],
                            ['choice_text' => 'Descansarás mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Es bueno que” gives an evaluation or recommendation, which commonly triggers the subjunctive.',
                    ],
                    [
                        'question' => 'Why is “Espero que vengas” different from “Sé que vienes”?',
                        'choices' => [
                            ['choice_text' => 'The first expresses hope; the second states something as known.', 'is_correct' => true],
                            ['choice_text' => 'The first is past tense; the second is future tense.', 'is_correct' => false],
                            ['choice_text' => 'Both are commands.', 'is_correct' => false],
                            ['choice_text' => 'Both describe completed past actions.', 'is_correct' => false],
                        ],
                        'explanation' => 'The difference is the speaker\'s attitude: hope typically triggers the subjunctive, while known information normally uses the indicative.',
                    ],
                    [
                        'question' => 'Which sentence is most appropriate when the speaker is not certain?',
                        'choices' => [
                            ['choice_text' => 'No creo que sea necesario.', 'is_correct' => true],
                            ['choice_text' => 'Creo que es necesario.', 'is_correct' => false],
                            ['choice_text' => 'Sé que es necesario.', 'is_correct' => false],
                            ['choice_text' => 'Es necesario.', 'is_correct' => false],
                        ],
                        'explanation' => '“No creo que” expresses doubt or lack of belief, so the subjunctive “sea” is appropriate.',
                    ],
                    [
                        'question' => 'A student writes “Es posible que él viene.” What is the better beginner form?',
                        'choices' => [
                            ['choice_text' => 'Es posible que él venga.', 'is_correct' => true],
                            ['choice_text' => 'Es posible que él viene.', 'is_correct' => false],
                            ['choice_text' => 'Es posible que él vino.', 'is_correct' => false],
                            ['choice_text' => 'Es posible que él vendrá.', 'is_correct' => false],
                        ],
                        'explanation' => '“Es posible que” normally introduces the subjunctive, so “venga” is correct.',
                    ],
                    [
                        'question' => 'Which pair shows a useful contrast?',
                        'choices' => [
                            ['choice_text' => 'Creo que Juan viene. / No creo que Juan venga.', 'is_correct' => true],
                            ['choice_text' => 'Creo que Juan venga. / No creo que Juan viene.', 'is_correct' => false],
                            ['choice_text' => 'Creo que Juan vino. / No creo que Juan viene.', 'is_correct' => false],
                            ['choice_text' => 'Creo que Juan vendrá ayer. / No creo que Juan venga.', 'is_correct' => false],
                        ],
                        'explanation' => 'Affirmative belief normally takes the indicative, while negative belief or doubt commonly triggers the subjunctive.',
                    ],
                ],
            ],
            [
                'title' => 'Everyday Subjunctive Practice',
                'description' => 'Use the subjunctive in practical situations involving requests, advice, feelings, wishes, and everyday conversations.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'A friend is tired. Which response gives a natural recommendation?',
                        'choices' => [
                            ['choice_text' => 'Te recomiendo que descanses.', 'is_correct' => true],
                            ['choice_text' => 'Te recomiendo que descansas.', 'is_correct' => false],
                            ['choice_text' => 'Te recomiendo que descansaste.', 'is_correct' => false],
                            ['choice_text' => 'Te recomiendo que descansarás.', 'is_correct' => false],
                        ],
                        'explanation' => 'A recommendation about another person\'s action uses the subjunctive after “te recomiendo que.”',
                    ],
                    [
                        'question' => 'A mother wants her child to call later. Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Quiero que me llames después.', 'is_correct' => true],
                            ['choice_text' => 'Quiero que me llamas después.', 'is_correct' => false],
                            ['choice_text' => 'Quiero que me llamaste después.', 'is_correct' => false],
                            ['choice_text' => 'Quiero que me llamarás después.', 'is_correct' => false],
                        ],
                        'explanation' => '“Quiero que” expresses the mother\'s wish, so “llames” is the subjunctive form.',
                    ],
                    [
                        'question' => 'Which sentence expresses a positive feeling about someone\'s success?',
                        'choices' => [
                            ['choice_text' => 'Me alegra que tengas buenas noticias.', 'is_correct' => true],
                            ['choice_text' => 'Me alegra que tienes buenas noticias.', 'is_correct' => false],
                            ['choice_text' => 'Me alegra que tuviste buenas noticias.', 'is_correct' => false],
                            ['choice_text' => 'Me alegra que tendrás buenas noticias.', 'is_correct' => false],
                        ],
                        'explanation' => 'A feeling such as “me alegra que” commonly introduces the subjunctive when another person\'s situation causes the feeling.',
                    ],
                    [
                        'question' => 'Complete: “No quiero que ustedes ___ tarde.”',
                        'choices' => [
                            ['choice_text' => 'lleguen', 'is_correct' => true],
                            ['choice_text' => 'llegan', 'is_correct' => false],
                            ['choice_text' => 'llegaron', 'is_correct' => false],
                            ['choice_text' => 'llegarán', 'is_correct' => false],
                        ],
                        'explanation' => '“No quiero que” expresses a negative desire about another person\'s action, so the subjunctive is needed.',
                    ],
                    [
                        'question' => 'Which sentence is a natural request to another person?',
                        'choices' => [
                            ['choice_text' => 'Necesito que cierres la puerta.', 'is_correct' => true],
                            ['choice_text' => 'Necesito que cierras la puerta.', 'is_correct' => false],
                            ['choice_text' => 'Necesito que cerraste la puerta.', 'is_correct' => false],
                            ['choice_text' => 'Necesito que cerrarás la puerta.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker needs another person to act, so “cierres” is the correct subjunctive form.',
                    ],
                    [
                        'question' => 'A student wants to say, “I hope you have a good trip.” Which answer is best?',
                        'choices' => [
                            ['choice_text' => 'Espero que tengas un buen viaje.', 'is_correct' => true],
                            ['choice_text' => 'Espero que tienes un buen viaje.', 'is_correct' => false],
                            ['choice_text' => 'Espero que tuviste un buen viaje.', 'is_correct' => false],
                            ['choice_text' => 'Espero que tendrás un buen viaje.', 'is_correct' => false],
                        ],
                        'explanation' => '“Espero que” expresses a wish, so “tengas” is the subjunctive form of “tener.”',
                    ],
                    [
                        'question' => 'Which sentence sounds like a polite classroom recommendation?',
                        'choices' => [
                            ['choice_text' => 'Es mejor que estudies un poco cada día.', 'is_correct' => true],
                            ['choice_text' => 'Es mejor que estudias un poco cada día.', 'is_correct' => false],
                            ['choice_text' => 'Es mejor que estudiaste un poco cada día.', 'is_correct' => false],
                            ['choice_text' => 'Es mejor que estudiarás un poco cada día.', 'is_correct' => false],
                        ],
                        'explanation' => '“Es mejor que” gives advice or an evaluation, so the dependent verb takes the subjunctive.',
                    ],
                    [
                        'question' => 'A friend is unsure whether María is coming. Which sentence fits?',
                        'choices' => [
                            ['choice_text' => 'No sé si viene.', 'is_correct' => false],
                            ['choice_text' => 'Dudo que venga.', 'is_correct' => true],
                            ['choice_text' => 'Sé que viene.', 'is_correct' => false],
                            ['choice_text' => 'Viene todos los días.', 'is_correct' => false],
                        ],
                        'explanation' => '“Dudo que” directly expresses doubt and therefore takes the subjunctive “venga.”',
                    ],
                    [
                        'question' => 'Which sentence expresses a wish using “ojalá”?',
                        'choices' => [
                            ['choice_text' => 'Ojalá que podamos viajar pronto.', 'is_correct' => true],
                            ['choice_text' => 'Ojalá que podemos viajar pronto.', 'is_correct' => false],
                            ['choice_text' => 'Ojalá que pudimos viajar pronto.', 'is_correct' => false],
                            ['choice_text' => 'Ojalá que podremos viajar pronto.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ojalá que” expresses a wish and is followed by the subjunctive “podamos.”',
                    ],
                    [
                        'question' => 'A manager tells an employee, “Es importante que ___ el informe hoy.” Which form is best?',
                        'choices' => [
                            ['choice_text' => 'termines', 'is_correct' => true],
                            ['choice_text' => 'terminas', 'is_correct' => false],
                            ['choice_text' => 'terminaste', 'is_correct' => false],
                            ['choice_text' => 'terminarás', 'is_correct' => false],
                        ],
                        'explanation' => 'The manager is emphasizing what should happen, so “es importante que” triggers the subjunctive “termines.”',
                    ],
                    [
                        'question' => 'Which answer fits “Me sorprende que ellos ___ tan temprano.”?',
                        'choices' => [
                            ['choice_text' => 'lleguen', 'is_correct' => true],
                            ['choice_text' => 'llegan', 'is_correct' => false],
                            ['choice_text' => 'llegaron', 'is_correct' => false],
                            ['choice_text' => 'llegarán', 'is_correct' => false],
                        ],
                        'explanation' => '“Me sorprende que” expresses the speaker\'s reaction to another person\'s action, so the subjunctive is appropriate.',
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
