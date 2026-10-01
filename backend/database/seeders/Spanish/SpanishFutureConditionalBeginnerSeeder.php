<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FutureConditionalBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'future-conditional')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Spanish Future Tense Basics',
                'description' => 'Practice the simple future for plans, predictions, promises, and things that will happen later.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Which form completes: “Mañana yo ___ a mi abuela.”',
                        'choices' => [
                            ['choice_text' => 'visitaré', 'is_correct' => true],
                            ['choice_text' => 'visitaría', 'is_correct' => false],
                            ['choice_text' => 'visitaba', 'is_correct' => false],
                            ['choice_text' => 'visité', 'is_correct' => false],
                        ],
                        'explanation' => '“Mañana” refers to the future, so the simple future “visitaré” is the natural choice.',
                    ],
                    [
                        'question' => 'What does “comeremos” mean?',
                        'choices' => [
                            ['choice_text' => 'We will eat', 'is_correct' => true],
                            ['choice_text' => 'We ate', 'is_correct' => false],
                            ['choice_text' => 'We used to eat', 'is_correct' => false],
                            ['choice_text' => 'We would eat', 'is_correct' => false],
                        ],
                        'explanation' => '“Comeremos” is the first-person plural simple future of “comer”: “we will eat.”',
                    ],
                    [
                        'question' => 'Which ending is used for the regular future with “yo”?',
                        'choices' => [
                            ['choice_text' => '-é', 'is_correct' => true],
                            ['choice_text' => '-ía', 'is_correct' => false],
                            ['choice_text' => '-aste', 'is_correct' => false],
                            ['choice_text' => '-o', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular future forms use the infinitive plus “-é” for yo, as in “hablaré” and “viviré.”',
                    ],
                    [
                        'question' => 'Which sentence talks about a likely future event?',
                        'choices' => [
                            ['choice_text' => 'El próximo verano viajaremos a España.', 'is_correct' => true],
                            ['choice_text' => 'El próximo verano viajábamos a España.', 'is_correct' => false],
                            ['choice_text' => 'El próximo verano viajamos a España ayer.', 'is_correct' => false],
                            ['choice_text' => 'El próximo verano viajaríamos a España ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '“El próximo verano” points to the future, and “viajaremos” expresses the planned or expected future action.',
                    ],
                    [
                        'question' => 'Which sentence sounds like a promise?',
                        'choices' => [
                            ['choice_text' => 'Te ayudaré con la tarea.', 'is_correct' => true],
                            ['choice_text' => 'Te ayudaba con la tarea.', 'is_correct' => false],
                            ['choice_text' => 'Te ayudaría con la tarea ayer.', 'is_correct' => false],
                            ['choice_text' => 'Te ayudé con la tarea mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Te ayudaré” means “I will help you,” which naturally works as a promise or commitment.',
                    ],
                    [
                        'question' => 'A friend asks about next week. Which answer is most natural?',
                        'choices' => [
                            ['choice_text' => 'Trabajaré desde casa.', 'is_correct' => true],
                            ['choice_text' => 'Trabajaba desde casa.', 'is_correct' => false],
                            ['choice_text' => 'Trabajé desde casa ayer.', 'is_correct' => false],
                            ['choice_text' => 'Trabajaría desde casa ayer.', 'is_correct' => false],
                        ],
                        'explanation' => 'The future form “trabajaré” directly describes what the speaker expects or plans to do next week.',
                    ],
                    [
                        'question' => 'Which is the correct future form of “tener” for yo?',
                        'choices' => [
                            ['choice_text' => 'tendré', 'is_correct' => true],
                            ['choice_text' => 'teneré', 'is_correct' => false],
                            ['choice_text' => 'tenía', 'is_correct' => false],
                            ['choice_text' => 'tendría', 'is_correct' => false],
                        ],
                        'explanation' => '“Tener” has the irregular future stem “tendr-”, so yo becomes “tendré.”',
                    ],
                    [
                        'question' => 'Which is the correct future form of “hacer” for nosotros?',
                        'choices' => [
                            ['choice_text' => 'haremos', 'is_correct' => true],
                            ['choice_text' => 'haceremos', 'is_correct' => false],
                            ['choice_text' => 'haríamos', 'is_correct' => false],
                            ['choice_text' => 'hicimos', 'is_correct' => false],
                        ],
                        'explanation' => '“Hacer” uses the future stem “har-”, giving “haremos” for nosotros.',
                    ],
                    [
                        'question' => 'Which sentence is most natural for a prediction about the weather?',
                        'choices' => [
                            ['choice_text' => 'Mañana lloverá.', 'is_correct' => true],
                            ['choice_text' => 'Mañana llovía.', 'is_correct' => false],
                            ['choice_text' => 'Mañana llovió.', 'is_correct' => false],
                            ['choice_text' => 'Mañana llovería ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '“Lloverá” is the future form and fits a prediction about tomorrow’s weather.',
                    ],
                    [
                        'question' => 'Which sentence uses the future correctly?',
                        'choices' => [
                            ['choice_text' => 'Mis padres llegarán a las ocho.', 'is_correct' => true],
                            ['choice_text' => 'Mis padres llegarían a las ocho ayer.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres llegaban a las ocho mañana.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres llegaron a las ocho mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Llegarán” is the third-person plural future form and matches a future arrival time.',
                    ],
                ],
            ],
            [
                'title' => 'Future Forms and Irregular Stems',
                'description' => 'Build confidence with regular future endings and common irregular future stems used in everyday Spanish.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which is the future form of “salir” for yo?',
                        'choices' => [
                            ['choice_text' => 'saldré', 'is_correct' => true],
                            ['choice_text' => 'saliré', 'is_correct' => false],
                            ['choice_text' => 'salía', 'is_correct' => false],
                            ['choice_text' => 'saldría', 'is_correct' => false],
                        ],
                        'explanation' => '“Salir” uses the future stem “saldr-”, so the yo form is “saldré.”',
                    ],
                    [
                        'question' => 'Which is the future form of “poner” for ella?',
                        'choices' => [
                            ['choice_text' => 'pondrá', 'is_correct' => true],
                            ['choice_text' => 'ponerá', 'is_correct' => false],
                            ['choice_text' => 'ponía', 'is_correct' => false],
                            ['choice_text' => 'pondría', 'is_correct' => false],
                        ],
                        'explanation' => '“Poner” has the irregular future stem “pondr-”, giving “pondrá” for ella.',
                    ],
                    [
                        'question' => 'Which is the future form of “decir” for ellos?',
                        'choices' => [
                            ['choice_text' => 'dirán', 'is_correct' => true],
                            ['choice_text' => 'decirán', 'is_correct' => false],
                            ['choice_text' => 'decían', 'is_correct' => false],
                            ['choice_text' => 'dirían', 'is_correct' => false],
                        ],
                        'explanation' => '“Decir” uses the irregular future stem “dir-”, so the ellos form is “dirán.”',
                    ],
                    [
                        'question' => 'Which future form is correct for “venir” with nosotros?',
                        'choices' => [
                            ['choice_text' => 'vendremos', 'is_correct' => true],
                            ['choice_text' => 'veniramos', 'is_correct' => false],
                            ['choice_text' => 'veniremos', 'is_correct' => false],
                            ['choice_text' => 'vendríamos', 'is_correct' => false],
                        ],
                        'explanation' => '“Venir” uses the stem “vendr-”, so nosotros is “vendremos.”',
                    ],
                    [
                        'question' => 'A learner says “teneré” because the infinitive is “tener.” What is the correct future form for yo?',
                        'choices' => [
                            ['choice_text' => 'tendré', 'is_correct' => true],
                            ['choice_text' => 'teneré', 'is_correct' => false],
                            ['choice_text' => 'tendría', 'is_correct' => false],
                            ['choice_text' => 'tenía', 'is_correct' => false],
                        ],
                        'explanation' => 'Not every future form keeps the full infinitive. “Tener” changes its stem to “tendr-”, giving “tendré.”',
                    ],
                    [
                        'question' => 'Which pair contains only correct future forms?',
                        'choices' => [
                            ['choice_text' => 'podré / querrán', 'is_correct' => true],
                            ['choice_text' => 'poderé / quererán', 'is_correct' => false],
                            ['choice_text' => 'podría / querían', 'is_correct' => false],
                            ['choice_text' => 'podé / querré', 'is_correct' => false],
                        ],
                        'explanation' => '“Poder” uses “podr-” and “querer” uses “querr-”, so “podré” and “querrán” are correct.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses the future of “saber”?',
                        'choices' => [
                            ['choice_text' => 'Mañana sabré la respuesta.', 'is_correct' => true],
                            ['choice_text' => 'Mañana saberé la respuesta.', 'is_correct' => false],
                            ['choice_text' => 'Mañana sabía la respuesta.', 'is_correct' => false],
                            ['choice_text' => 'Mañana sabría la respuesta ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '“Saber” uses the future stem “sabr-”, so “sabré” is correct.',
                    ],
                    [
                        'question' => 'Which future form of “haber” appears in the common expression “there will be”?',
                        'choices' => [
                            ['choice_text' => 'habrá', 'is_correct' => true],
                            ['choice_text' => 'haberá', 'is_correct' => false],
                            ['choice_text' => 'habría', 'is_correct' => false],
                            ['choice_text' => 'hubo', 'is_correct' => false],
                        ],
                        'explanation' => '“Habrá” is the future form used in “there will be,” as in “Habrá una reunión mañana.”',
                    ],
                    [
                        'question' => 'Which sentence correctly describes a future plan using an irregular stem?',
                        'choices' => [
                            ['choice_text' => 'Tendremos más tiempo el sábado.', 'is_correct' => true],
                            ['choice_text' => 'Teneremos más tiempo el sábado.', 'is_correct' => false],
                            ['choice_text' => 'Tendríamos más tiempo el sábado ayer.', 'is_correct' => false],
                            ['choice_text' => 'Teníamos más tiempo el sábado.', 'is_correct' => false],
                        ],
                        'explanation' => '“Tener” becomes “tendr-” in the future, so “tendremos” is correct.',
                    ],
                    [
                        'question' => 'Which verb has a future stem that changes more dramatically from its infinitive?',
                        'choices' => [
                            ['choice_text' => 'decir → dir-', 'is_correct' => true],
                            ['choice_text' => 'hablar → habl-', 'is_correct' => false],
                            ['choice_text' => 'comer → com-', 'is_correct' => false],
                            ['choice_text' => 'vivir → viv-', 'is_correct' => false],
                        ],
                        'explanation' => '“Decir” changes to the irregular stem “dir-”, unlike regular verbs such as “hablar,” “comer,” and “vivir.”',
                    ],
                    [
                        'question' => 'Which sentence uses a regular future form correctly?',
                        'choices' => [
                            ['choice_text' => 'El próximo mes aprenderé más palabras.', 'is_correct' => true],
                            ['choice_text' => 'El próximo mes aprendría más palabras.', 'is_correct' => false],
                            ['choice_text' => 'El próximo mes aprendí más palabras.', 'is_correct' => false],
                            ['choice_text' => 'El próximo mes aprendaba más palabras.', 'is_correct' => false],
                        ],
                        'explanation' => '“Aprender” is regular in the future, so “aprenderé” is formed from the full infinitive plus “-é.”',
                    ],
                    [
                        'question' => 'Which is the correct future form of “querer” for yo?',
                        'choices' => [
                            ['choice_text' => 'querré', 'is_correct' => true],
                            ['choice_text' => 'quereré', 'is_correct' => false],
                            ['choice_text' => 'quería', 'is_correct' => false],
                            ['choice_text' => 'querría', 'is_correct' => false],
                        ],
                        'explanation' => '“Querer” uses the irregular stem “querr-”, giving “querré.”',
                    ],
                ],
            ],
            [
                'title' => 'The Conditional for Polite Requests',
                'description' => 'Learn the conditional in everyday requests, polite questions, wishes, and gentle suggestions.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which sentence is a polite way to ask for help?',
                        'choices' => [
                            ['choice_text' => '¿Podrías ayudarme?', 'is_correct' => true],
                            ['choice_text' => '¿Podrás ayudarme ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Puedes ayudarme ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Pudiste ayudarme mañana?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Podrías...?” uses the conditional to make the request softer and more polite than a direct command.',
                    ],
                    [
                        'question' => 'What does “Me gustaría un café” mean?',
                        'choices' => [
                            ['choice_text' => 'I would like a coffee.', 'is_correct' => true],
                            ['choice_text' => 'I will like a coffee tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'I liked a coffee yesterday.', 'is_correct' => false],
                            ['choice_text' => 'I am drinking a coffee.', 'is_correct' => false],
                        ],
                        'explanation' => '“Me gustaría” is a very common polite conditional expression meaning “I would like.”',
                    ],
                    [
                        'question' => 'Which form completes: “Yo ___ viajar más si tuviera tiempo.”',
                        'choices' => [
                            ['choice_text' => 'viajaría', 'is_correct' => true],
                            ['choice_text' => 'viajaré', 'is_correct' => false],
                            ['choice_text' => 'viajaba', 'is_correct' => false],
                            ['choice_text' => 'viajé', 'is_correct' => false],
                        ],
                        'explanation' => 'The phrase “si tuviera tiempo” describes a hypothetical condition, so “viajaría” is the matching conditional form.',
                    ],
                    [
                        'question' => 'Which sentence expresses a hypothetical result?',
                        'choices' => [
                            ['choice_text' => 'Compraríamos una casa si tuviéramos más dinero.', 'is_correct' => true],
                            ['choice_text' => 'Compramos una casa ayer.', 'is_correct' => false],
                            ['choice_text' => 'Compraremos una casa mañana.', 'is_correct' => false],
                            ['choice_text' => 'Comprábamos una casa todos los años.', 'is_correct' => false],
                        ],
                        'explanation' => 'The conditional “compraríamos” expresses what would happen under the condition “si tuviéramos más dinero.”',
                    ],
                    [
                        'question' => 'Which is the conditional form of “tener” for yo?',
                        'choices' => [
                            ['choice_text' => 'tendría', 'is_correct' => true],
                            ['choice_text' => 'tenería', 'is_correct' => false],
                            ['choice_text' => 'tendré', 'is_correct' => false],
                            ['choice_text' => 'tenía', 'is_correct' => false],
                        ],
                        'explanation' => '“Tener” uses the same irregular stem “tendr-” in the conditional, followed by “-ía”: “tendría.”',
                    ],
                    [
                        'question' => 'Which sentence sounds like a polite request in a café?',
                        'choices' => [
                            ['choice_text' => 'Querría una botella de agua, por favor.', 'is_correct' => true],
                            ['choice_text' => 'Querré una botella de agua, por favor.', 'is_correct' => false],
                            ['choice_text' => 'Quería una botella de agua ayer.', 'is_correct' => false],
                            ['choice_text' => 'Quise una botella de agua mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Querría” is a polite conditional form that can be used to express a request or preference.',
                    ],
                    [
                        'question' => 'Which conditional ending is used for all regular verbs with nosotros?',
                        'choices' => [
                            ['choice_text' => '-íamos', 'is_correct' => true],
                            ['choice_text' => '-emos', 'is_correct' => false],
                            ['choice_text' => '-amos', 'is_correct' => false],
                            ['choice_text' => '-imos', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular conditional forms use the infinitive plus “-íamos” for nosotros, as in “hablaríamos” and “comeríamos.”',
                    ],
                    [
                        'question' => 'A customer asks a waiter politely: “¿Me ___ traer la cuenta?” Which form fits best?',
                        'choices' => [
                            ['choice_text' => 'podría', 'is_correct' => true],
                            ['choice_text' => 'podrá', 'is_correct' => false],
                            ['choice_text' => 'puede', 'is_correct' => false],
                            ['choice_text' => 'podía', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Me podría...?” is a common polite request. The conditional makes the request softer and more courteous.',
                    ],
                    [
                        'question' => 'Which sentence expresses what someone would do in a different situation?',
                        'choices' => [
                            ['choice_text' => 'Iría contigo si pudiera.', 'is_correct' => true],
                            ['choice_text' => 'Iré contigo mañana.', 'is_correct' => false],
                            ['choice_text' => 'Iba contigo todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Fui contigo ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '“Iría” expresses a hypothetical result, linked to “si pudiera” (“if I could”).',
                    ],
                    [
                        'question' => 'Which pair is correct?',
                        'choices' => [
                            ['choice_text' => 'poder → podría', 'is_correct' => true],
                            ['choice_text' => 'poder → podería', 'is_correct' => false],
                            ['choice_text' => 'poder → podrá only', 'is_correct' => false],
                            ['choice_text' => 'poder → podía in every conditional sentence', 'is_correct' => false],
                        ],
                        'explanation' => '“Poder” has the irregular conditional stem “podr-”, so “podría” is the correct conditional form.',
                    ],
                ],
            ],
            [
                'title' => 'Future vs. Conditional in Real Situations',
                'description' => 'Learn to choose between future and conditional when talking about certainty, possibility, politeness, and hypothetical situations.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Your friend asks what you plan to do tomorrow. Which answer fits?',
                        'choices' => [
                            ['choice_text' => 'Mañana iré al gimnasio.', 'is_correct' => true],
                            ['choice_text' => 'Mañana iría al gimnasio si tuviera tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Ayer iba al gimnasio.', 'is_correct' => false],
                            ['choice_text' => 'Ayer fui al gimnasio mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'A straightforward future plan uses the future “iré.” The conditional would add a condition or hypothetical meaning.',
                    ],
                    [
                        'question' => 'Which sentence is more tentative or hypothetical?',
                        'choices' => [
                            ['choice_text' => 'Viajaría más si tuviera más vacaciones.', 'is_correct' => true],
                            ['choice_text' => 'Viajaré más el próximo verano.', 'is_correct' => false],
                            ['choice_text' => 'Viajé más el año pasado.', 'is_correct' => false],
                            ['choice_text' => 'Viajaba más cuando era joven.', 'is_correct' => false],
                        ],
                        'explanation' => '“Viajaría” expresses a hypothetical result dependent on the condition “si tuviera más vacaciones.”',
                    ],
                    [
                        'question' => 'Which sentence sounds like a prediction rather than a hypothetical?',
                        'choices' => [
                            ['choice_text' => 'En diez años, habrá más tecnología.', 'is_correct' => true],
                            ['choice_text' => 'En diez años, habría más tecnología si...', 'is_correct' => false],
                            ['choice_text' => 'En diez años, había más tecnología.', 'is_correct' => false],
                            ['choice_text' => 'En diez años, hubo más tecnología.', 'is_correct' => false],
                        ],
                        'explanation' => '“Habrá” presents a future prediction. A conditional such as “habría” would normally be tied to a condition or hypothetical idea.',
                    ],
                    [
                        'question' => 'A student wants to ask a professor politely for extra time. Which is more appropriate?',
                        'choices' => [
                            ['choice_text' => '¿Podría tener un día más?', 'is_correct' => true],
                            ['choice_text' => '¿Podrá tener un día más mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Puede tener un día más ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Podía tener un día más ayer?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Podría...?” is a standard polite conditional request, especially in a formal situation.',
                    ],
                    [
                        'question' => 'Which pair correctly contrasts a plan with a hypothetical choice?',
                        'choices' => [
                            ['choice_text' => 'Compraré el libro mañana / Compraría el libro si estuviera más barato.', 'is_correct' => true],
                            ['choice_text' => 'Compraría el libro mañana / Compré el libro si estuviera más barato.', 'is_correct' => false],
                            ['choice_text' => 'Compraba el libro mañana / Compraré el libro ayer.', 'is_correct' => false],
                            ['choice_text' => 'Compré el libro mañana / Compraría el libro ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '“Comprar” states a future plan, while “compraría” expresses a hypothetical choice under a condition.',
                    ],
                    [
                        'question' => 'Which sentence could naturally be said before making a promise?',
                        'choices' => [
                            ['choice_text' => 'Te llamaré esta noche.', 'is_correct' => true],
                            ['choice_text' => 'Te llamaría esta noche si ayer...', 'is_correct' => false],
                            ['choice_text' => 'Te llamaba esta noche.', 'is_correct' => false],
                            ['choice_text' => 'Te llamé esta noche mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Te llamaré” is the future form used for a future intention or promise.',
                    ],
                    [
                        'question' => 'Which sentence describes what a person would do if circumstances were different?',
                        'choices' => [
                            ['choice_text' => 'Aceptaríamos el trabajo si fuera en casa.', 'is_correct' => true],
                            ['choice_text' => 'Aceptaremos el trabajo mañana.', 'is_correct' => false],
                            ['choice_text' => 'Aceptamos el trabajo ayer.', 'is_correct' => false],
                            ['choice_text' => 'Aceptábamos el trabajo todos los años.', 'is_correct' => false],
                        ],
                        'explanation' => 'The conditional “aceptaríamos” expresses the hypothetical result of the condition “si fuera en casa.”',
                    ],
                    [
                        'question' => 'A shop assistant wants to say, “Would you like anything else?” Which option is the most natural conditional question?',
                        'choices' => [
                            ['choice_text' => '¿Querría algo más?', 'is_correct' => true],
                            ['choice_text' => '¿Querrá algo más ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Quería algo más mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Querría algo más ayer?', 'is_correct' => false],
                        ],
                        'explanation' => 'The conditional “querría” can make a customer-service question polite and less direct.',
                    ],
                    [
                        'question' => 'Which sentence is clearly about a future schedule?',
                        'choices' => [
                            ['choice_text' => 'El tren saldrá a las nueve.', 'is_correct' => true],
                            ['choice_text' => 'El tren saldría a las nueve si...', 'is_correct' => false],
                            ['choice_text' => 'El tren salía a las nueve todos los días cuando era niño.', 'is_correct' => false],
                            ['choice_text' => 'El tren salió a las nueve ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '“Saldrá” states the future departure time. The conditional would suggest a condition or uncertainty tied to another situation.',
                    ],
                    [
                        'question' => 'Which sentence best fits a conversation about a dream rather than a fixed plan?',
                        'choices' => [
                            ['choice_text' => 'Viviría cerca del mar si pudiera elegir.', 'is_correct' => true],
                            ['choice_text' => 'Viviré cerca del mar mañana.', 'is_correct' => false],
                            ['choice_text' => 'Viví cerca del mar ayer.', 'is_correct' => false],
                            ['choice_text' => 'Vivía cerca del mar mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'The conditional “viviría” expresses an imagined choice or dream, especially with “si pudiera elegir.”',
                    ],
                ],
            ],
            [
                'title' => 'Mixed Future and Conditional Practice',
                'description' => 'Review future and conditional forms through practical decisions, predictions, requests, promises, and simple hypothetical situations.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Which sentence means “We will arrive at six”?',
                        'choices' => [
                            ['choice_text' => 'Llegaremos a las seis.', 'is_correct' => true],
                            ['choice_text' => 'Llegaríamos a las seis.', 'is_correct' => false],
                            ['choice_text' => 'Llegábamos a las seis.', 'is_correct' => false],
                            ['choice_text' => 'Llegamos a las seis ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '“Llegaremos” is the simple future of “llegar” for nosotros.',
                    ],
                    [
                        'question' => 'Which sentence means “I would buy it if it were cheaper”?',
                        'choices' => [
                            ['choice_text' => 'Lo compraría si fuera más barato.', 'is_correct' => true],
                            ['choice_text' => 'Lo compraré si fuera más barato.', 'is_correct' => false],
                            ['choice_text' => 'Lo compré si fuera más barato.', 'is_correct' => false],
                            ['choice_text' => 'Lo compraba si será más barato.', 'is_correct' => false],
                        ],
                        'explanation' => '“Compraría” expresses the hypothetical result, while “si fuera” gives the condition.',
                    ],
                    [
                        'question' => 'Which verb form is correct in: “Dentro de una hora, ___ en casa.”',
                        'choices' => [
                            ['choice_text' => 'estaré', 'is_correct' => true],
                            ['choice_text' => 'estaría', 'is_correct' => false],
                            ['choice_text' => 'estaba', 'is_correct' => false],
                            ['choice_text' => 'estuve', 'is_correct' => false],
                        ],
                        'explanation' => '“Dentro de una hora” clearly points to the future, so “estaré” is appropriate.',
                    ],
                    [
                        'question' => 'A friend says, “Necesito ayuda con esto.” Which reply is a gentle offer?',
                        'choices' => [
                            ['choice_text' => 'Te ayudaría si quieres.', 'is_correct' => true],
                            ['choice_text' => 'Te ayudaré ayer.', 'is_correct' => false],
                            ['choice_text' => 'Te ayudaba mañana.', 'is_correct' => false],
                            ['choice_text' => 'Te ayudé si quieres mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'The conditional “ayudaría” can make an offer sound less forceful and more tentative or polite.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses the future of “poder”?',
                        'choices' => [
                            ['choice_text' => 'Podremos terminar mañana.', 'is_correct' => true],
                            ['choice_text' => 'Poderemos terminar mañana.', 'is_correct' => false],
                            ['choice_text' => 'Podríamos terminar mañana ayer.', 'is_correct' => false],
                            ['choice_text' => 'Podíamos terminar mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Poder” uses the future stem “podr-”, so the nosotros form is “podremos.”',
                    ],
                    [
                        'question' => 'Which sentence uses the conditional of “hacer” correctly?',
                        'choices' => [
                            ['choice_text' => 'Haría más ejercicio si tuviera tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Hacería más ejercicio si tuviera tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Haré más ejercicio si ayer tuviera tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Hacía más ejercicio si mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Hacer” uses the conditional stem “har-”, so “haría” is correct in this hypothetical sentence.',
                    ],
                    [
                        'question' => 'Which sentence is a straightforward prediction?',
                        'choices' => [
                            ['choice_text' => 'Creo que llegará tarde.', 'is_correct' => true],
                            ['choice_text' => 'Creo que llegaría tarde si tuviera coche.', 'is_correct' => false],
                            ['choice_text' => 'Creo que llegaba tarde ayer.', 'is_correct' => false],
                            ['choice_text' => 'Creo que llegó tarde mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Llegará” is the future form and works naturally for a prediction about what is expected to happen.',
                    ],
                    [
                        'question' => 'Which sentence would be appropriate when imagining an ideal holiday?',
                        'choices' => [
                            ['choice_text' => 'Me quedaría dos semanas en una isla.', 'is_correct' => true],
                            ['choice_text' => 'Me quedaré dos semanas en una isla ayer.', 'is_correct' => false],
                            ['choice_text' => 'Me quedaba dos semanas en una isla mañana.', 'is_correct' => false],
                            ['choice_text' => 'Me quedé dos semanas en una isla si pudiera.', 'is_correct' => false],
                        ],
                        'explanation' => 'The conditional “me quedaría” presents the holiday as an imagined or ideal situation.',
                    ],
                    [
                        'question' => 'Which sentence contains a polite conditional request?',
                        'choices' => [
                            ['choice_text' => '¿Podría repetir la pregunta, por favor?', 'is_correct' => true],
                            ['choice_text' => '¿Podrá repetir la pregunta ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Puede repetir la pregunta mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Podía repetir la pregunta ayer?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Podría...?” is a common polite formula for requests, especially in classrooms, shops, and formal situations.',
                    ],
                    [
                        'question' => 'Which sentence correctly contrasts a future event with a hypothetical one?',
                        'choices' => [
                            ['choice_text' => 'Mañana viajaré; si tuviera más tiempo, viajaría más a menudo.', 'is_correct' => true],
                            ['choice_text' => 'Mañana viajaría; si tuviera más tiempo, viajaré más a menudo.', 'is_correct' => false],
                            ['choice_text' => 'Mañana viajaba; si tuviera más tiempo, viajé más a menudo.', 'is_correct' => false],
                            ['choice_text' => 'Mañana viajé; si tuviera más tiempo, viajaré ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '“Viajaré” presents the real future plan, while “viajaría” describes the hypothetical result under a condition.',
                    ],
                    [
                        'question' => 'Which sentence uses “habrá” correctly?',
                        'choices' => [
                            ['choice_text' => 'Habrá muchas personas en la fiesta.', 'is_correct' => true],
                            ['choice_text' => 'Haberá muchas personas en la fiesta.', 'is_correct' => false],
                            ['choice_text' => 'Habría muchas personas en la fiesta mañana seguro.', 'is_correct' => false],
                            ['choice_text' => 'Hubo muchas personas en la fiesta mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Habrá” is the future form used to say that something “will be” or “there will be.”',
                    ],
                ],
            ],
            [
                'title' => 'Future and Conditional Everyday Review',
                'description' => 'Finish with practical mixed review using schedules, shopping, travel, advice, predictions, and polite conversation.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'You are telling a friend about tomorrow morning: “A las siete, ___ el tren.” Which form fits?',
                        'choices' => [
                            ['choice_text' => 'tomaré', 'is_correct' => true],
                            ['choice_text' => 'tomaría', 'is_correct' => false],
                            ['choice_text' => 'tomaba', 'is_correct' => false],
                            ['choice_text' => 'tomé', 'is_correct' => false],
                        ],
                        'explanation' => 'The action is planned for tomorrow, so the future “tomaré” is appropriate.',
                    ],
                    [
                        'question' => 'Which is the most natural polite way to offer something to a guest?',
                        'choices' => [
                            ['choice_text' => '¿Querría más café?', 'is_correct' => true],
                            ['choice_text' => '¿Querrá más café ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Quería más café mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Quiso más café mañana?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Querría...?” uses the conditional to make the offer polite and courteous.',
                    ],
                    [
                        'question' => 'Which future form is correct for “decir” with yo?',
                        'choices' => [
                            ['choice_text' => 'diré', 'is_correct' => true],
                            ['choice_text' => 'deciré', 'is_correct' => false],
                            ['choice_text' => 'diría', 'is_correct' => false],
                            ['choice_text' => 'decía', 'is_correct' => false],
                        ],
                        'explanation' => '“Decir” uses the irregular future stem “dir-”, so yo is “diré.”',
                    ],
                    [
                        'question' => 'Which sentence describes a likely future result?',
                        'choices' => [
                            ['choice_text' => 'Si estudias, aprobarás el examen.', 'is_correct' => true],
                            ['choice_text' => 'Si estudias, aprobarías el examen ayer.', 'is_correct' => false],
                            ['choice_text' => 'Si estudias, aprobabas el examen mañana.', 'is_correct' => false],
                            ['choice_text' => 'Si estudias, aprobaste el examen mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'This sentence describes a realistic future result of a condition, so the future “aprobarás” is appropriate.',
                    ],
                    [
                        'question' => 'Which sentence expresses a more hypothetical or uncertain choice?',
                        'choices' => [
                            ['choice_text' => 'Si tuviera dinero, compraría ese coche.', 'is_correct' => true],
                            ['choice_text' => 'Si tengo dinero, compraré ese coche mañana.', 'is_correct' => false],
                            ['choice_text' => 'Compré ese coche el lunes.', 'is_correct' => false],
                            ['choice_text' => 'Compraba ese coche todos los años.', 'is_correct' => false],
                        ],
                        'explanation' => '“Compraría” is conditional because the speaker is imagining what would happen under a different condition.',
                    ],
                    [
                        'question' => 'A traveler wants to ask politely, “Could you tell me where the station is?” Which opening is best?',
                        'choices' => [
                            ['choice_text' => '¿Podría decirme dónde está la estación?', 'is_correct' => true],
                            ['choice_text' => '¿Podrá decirme dónde está la estación ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Podía decirme dónde está la estación mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Pudo decirme dónde está la estación mañana?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Podría...?” is a standard polite conditional request when speaking to a stranger.',
                    ],
                    [
                        'question' => 'Which sentence uses the future for a promise?',
                        'choices' => [
                            ['choice_text' => 'No te olvidaré.', 'is_correct' => true],
                            ['choice_text' => 'No te olvidaría ayer.', 'is_correct' => false],
                            ['choice_text' => 'No te olvidaba mañana.', 'is_correct' => false],
                            ['choice_text' => 'No te olvidé mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“No te olvidaré” means “I will not forget you” and naturally functions as a promise or assurance.',
                    ],
                    [
                        'question' => 'Which sentence is correct for an imagined career choice?',
                        'choices' => [
                            ['choice_text' => 'Sería profesor si pudiera elegir otra carrera.', 'is_correct' => true],
                            ['choice_text' => 'Seré profesor si pudiera elegir otra carrera.', 'is_correct' => false],
                            ['choice_text' => 'Era profesor si pudiera elegir otra carrera.', 'is_correct' => false],
                            ['choice_text' => 'Fui profesor si pudiera elegir otra carrera.', 'is_correct' => false],
                        ],
                        'explanation' => '“Sería” expresses the imagined result of the condition “si pudiera elegir otra carrera.”',
                    ],
                    [
                        'question' => 'Which sentence would you expect in a weather forecast?',
                        'choices' => [
                            ['choice_text' => 'Habrá sol por la tarde.', 'is_correct' => true],
                            ['choice_text' => 'Habría sol por la tarde ayer.', 'is_correct' => false],
                            ['choice_text' => 'Había sol por la tarde mañana.', 'is_correct' => false],
                            ['choice_text' => 'Hubo sol por la tarde mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Habrá” means “there will be” and is commonly used for future forecasts or expectations.',
                    ],
                    [
                        'question' => 'Which pair is correctly matched?',
                        'choices' => [
                            ['choice_text' => 'future: hablaré / conditional: hablaría', 'is_correct' => true],
                            ['choice_text' => 'future: hablaría / conditional: hablaré', 'is_correct' => false],
                            ['choice_text' => 'future: hablaba / conditional: hablé', 'is_correct' => false],
                            ['choice_text' => 'future: hablé / conditional: hablaba', 'is_correct' => false],
                        ],
                        'explanation' => '“Hablaré” is the simple future, while “hablaría” is the conditional.',
                    ],
                    [
                        'question' => 'A manager asks an employee what will happen next month. Which response is direct and appropriate?',
                        'choices' => [
                            ['choice_text' => 'Trabajaré en el nuevo proyecto.', 'is_correct' => true],
                            ['choice_text' => 'Trabajaría en el nuevo proyecto si tuviera tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Trabajaba en el nuevo proyecto ayer.', 'is_correct' => false],
                            ['choice_text' => 'Trabajé en el nuevo proyecto mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'The manager is asking about a real future plan, so “trabajaré” is the straightforward answer.',
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
