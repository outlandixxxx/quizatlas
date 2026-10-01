<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EssayWritingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'essay-writing')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Essay Writing Foundations',
                'description' => 'Learn what a simple Spanish essay needs and how to organize ideas before writing.',
                'settings' => ['duration' => 20, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'What is the main purpose of an introduction in a short essay?',
                        'choices' => [
                            ['choice_text' => 'Introduce the topic and prepare the reader for the main idea.', 'is_correct' => true],
                            ['choice_text' => 'Give every detail of the essay immediately.', 'is_correct' => false],
                            ['choice_text' => 'Repeat the conclusion word for word.', 'is_correct' => false],
                            ['choice_text' => 'List unrelated vocabulary.', 'is_correct' => false],
                        ],
                        'explanation' => 'A good beginner introduction tells the reader what the essay is about and leads into the main discussion.',
                    ],
                    [
                        'question' => 'Which part of an essay normally develops the main ideas?',
                        'choices' => [
                            ['choice_text' => 'The body paragraphs.', 'is_correct' => true],
                            ['choice_text' => 'The title only.', 'is_correct' => false],
                            ['choice_text' => 'The greeting.', 'is_correct' => false],
                            ['choice_text' => 'The signature.', 'is_correct' => false],
                        ],
                        'explanation' => 'The body paragraphs contain the main explanations, examples, and supporting details.',
                    ],
                    [
                        'question' => 'Which sentence could work as a simple topic sentence?',
                        'choices' => [
                            ['choice_text' => 'Vivir en una ciudad grande tiene ventajas y desventajas.', 'is_correct' => true],
                            ['choice_text' => 'Hola, me llamo Ana.', 'is_correct' => false],
                            ['choice_text' => 'Gracias por leer esta carta.', 'is_correct' => false],
                            ['choice_text' => 'Adiós y hasta mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'A topic sentence introduces the main idea of a paragraph; this sentence clearly announces the subject and direction.',
                    ],
                    [
                        'question' => 'Which sentence is most suitable for a conclusion?',
                        'choices' => [
                            ['choice_text' => 'En conclusión, creo que estudiar idiomas abre muchas oportunidades.', 'is_correct' => true],
                            ['choice_text' => 'Primero, quiero presentar el problema.', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo, estudio español cada día.', 'is_correct' => false],
                            ['choice_text' => 'Buenos días, profesora.', 'is_correct' => false],
                        ],
                        'explanation' => 'A conclusion should bring the discussion together and give a final thought rather than introduce a new topic.',
                    ],
                    [
                        'question' => 'Which is a useful first step before writing an essay?',
                        'choices' => [
                            ['choice_text' => 'Make a simple plan of the main ideas.', 'is_correct' => true],
                            ['choice_text' => 'Write the conclusion first and never review it.', 'is_correct' => false],
                            ['choice_text' => 'Choose difficult words you do not know.', 'is_correct' => false],
                            ['choice_text' => 'Start writing without knowing the topic.', 'is_correct' => false],
                        ],
                        'explanation' => 'A short plan helps keep the essay focused and makes it easier to organize the paragraphs.',
                    ],
                    [
                        'question' => 'Which order is most natural for a simple three-part essay?',
                        'choices' => [
                            ['choice_text' => 'Introduction → body paragraphs → conclusion.', 'is_correct' => true],
                            ['choice_text' => 'Conclusion → title → introduction.', 'is_correct' => false],
                            ['choice_text' => 'Body paragraphs → greeting → conclusion.', 'is_correct' => false],
                            ['choice_text' => 'Introduction → signature → body paragraphs.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is the standard beginner-friendly organization for a short essay.',
                    ],
                    [
                        'question' => 'Which sentence would usually belong in the body of an essay about healthy habits?',
                        'choices' => [
                            ['choice_text' => 'Caminar cada día puede ayudar a mantener una vida activa.', 'is_correct' => true],
                            ['choice_text' => 'En conclusión, ese es mi punto final.', 'is_correct' => false],
                            ['choice_text' => 'Hola, voy a hablar de salud.', 'is_correct' => false],
                            ['choice_text' => 'Gracias por su atención.', 'is_correct' => false],
                        ],
                        'explanation' => 'A body paragraph develops the topic with a concrete idea or supporting point.',
                    ],
                    [
                        'question' => 'Why are examples useful in an essay?',
                        'choices' => [
                            ['choice_text' => 'They make an idea clearer and more concrete.', 'is_correct' => true],
                            ['choice_text' => 'They replace the need for any topic.', 'is_correct' => false],
                            ['choice_text' => 'They make every sentence longer.', 'is_correct' => false],
                            ['choice_text' => 'They remove the need for paragraphs.', 'is_correct' => false],
                        ],
                        'explanation' => 'Examples help the reader understand how a general idea applies in real situations.',
                    ],
                    [
                        'question' => 'Which sentence is the clearest thesis-like idea for a beginner essay?',
                        'choices' => [
                            ['choice_text' => 'En mi opinión, aprender español es útil porque permite comunicarse, viajar y conocer otras culturas.', 'is_correct' => true],
                            ['choice_text' => 'Español.', 'is_correct' => false],
                            ['choice_text' => 'Hola a todos y gracias.', 'is_correct' => false],
                            ['choice_text' => 'Muchas gracias por leer.', 'is_correct' => false],
                        ],
                        'explanation' => 'A simple thesis or central idea gives the essay a clear position and previews the main reasons.',
                    ],
                    [
                        'question' => 'What should you check after writing a first draft?',
                        'choices' => [
                            ['choice_text' => 'Whether the ideas are clear, connected, and grammatically reasonable.', 'is_correct' => true],
                            ['choice_text' => 'Whether every sentence uses advanced vocabulary.', 'is_correct' => false],
                            ['choice_text' => 'Whether the essay has no paragraphs.', 'is_correct' => false],
                            ['choice_text' => 'Whether the title is the longest sentence.', 'is_correct' => false],
                        ],
                        'explanation' => 'Revision should improve clarity, organization, grammar, and flow rather than simply make the text longer.',
                    ],
                ],
            ],
            [
                'title' => 'Introductions and Topic Sentences',
                'description' => 'Practice writing focused introductions and strong topic sentences for simple Spanish essays.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Which opening best introduces an essay about social media?',
                        'choices' => [
                            ['choice_text' => 'Las redes sociales forman parte de la vida diaria de muchas personas.', 'is_correct' => true],
                            ['choice_text' => 'Adiós y gracias por leer.', 'is_correct' => false],
                            ['choice_text' => 'Primero, mi conclusión es.', 'is_correct' => false],
                            ['choice_text' => 'Las redes sociales, redes sociales, redes sociales.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence introduces the topic naturally without trying to give every argument at once.',
                    ],
                    [
                        'question' => 'Which sentence gives a clear opinion for an essay about learning languages?',
                        'choices' => [
                            ['choice_text' => 'Creo que aprender idiomas es una inversión útil para el futuro.', 'is_correct' => true],
                            ['choice_text' => 'Ayer fui al supermercado.', 'is_correct' => false],
                            ['choice_text' => 'Tengo dos hermanos y un perro.', 'is_correct' => false],
                            ['choice_text' => 'El lunes hace frío.', 'is_correct' => false],
                        ],
                        'explanation' => 'A clear opinion can guide the rest of the essay and tells the reader the writer\'s position.',
                    ],
                    [
                        'question' => 'Which topic sentence best introduces a paragraph about exercise?',
                        'choices' => [
                            ['choice_text' => 'Hacer ejercicio con regularidad puede mejorar la salud física.', 'is_correct' => true],
                            ['choice_text' => 'En conclusión, eso es todo.', 'is_correct' => false],
                            ['choice_text' => 'Mi amigo vive en Madrid.', 'is_correct' => false],
                            ['choice_text' => 'Hola, profesor.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence focuses the paragraph on one main idea: the health benefit of exercise.',
                    ],
                    [
                        'question' => 'Which topic sentence would fit a paragraph about public transport?',
                        'choices' => [
                            ['choice_text' => 'El transporte público puede ser una opción práctica para muchas personas.', 'is_correct' => true],
                            ['choice_text' => 'Mi casa tiene tres habitaciones.', 'is_correct' => false],
                            ['choice_text' => 'Ayer cené con mis amigos.', 'is_correct' => false],
                            ['choice_text' => 'Espero que estés bien.', 'is_correct' => false],
                        ],
                        'explanation' => 'It states the specific point the paragraph can explain and support.',
                    ],
                    [
                        'question' => 'Which sentence is too narrow to serve as the main idea for a full essay about travel?',
                        'choices' => [
                            ['choice_text' => 'El martes compré un billete de autobús a Granada.', 'is_correct' => true],
                            ['choice_text' => 'Viajar puede ayudar a conocer nuevas culturas.', 'is_correct' => false],
                            ['choice_text' => 'Hay muchas formas de viajar hoy.', 'is_correct' => false],
                            ['choice_text' => 'Los viajes pueden ofrecer experiencias educativas.', 'is_correct' => false],
                        ],
                        'explanation' => 'That sentence gives one small personal event, while the other choices can support broader discussion.',
                    ],
                    [
                        'question' => 'Which sentence could naturally follow an introduction about the benefits of reading?',
                        'choices' => [
                            ['choice_text' => 'Una primera ventaja es que leer amplía el vocabulario.', 'is_correct' => true],
                            ['choice_text' => 'Adiós.', 'is_correct' => false],
                            ['choice_text' => 'El título es muy largo.', 'is_correct' => false],
                            ['choice_text' => 'No quiero escribir más.', 'is_correct' => false],
                        ],
                        'explanation' => 'After an introduction, a topic sentence can introduce the first supporting point.',
                    ],
                    [
                        'question' => 'Which phrase is useful for introducing your opinion?',
                        'choices' => [
                            ['choice_text' => 'En mi opinión,', 'is_correct' => true],
                            ['choice_text' => 'Hasta luego,', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo, ayer,', 'is_correct' => false],
                            ['choice_text' => 'Buenos días,', 'is_correct' => false],
                        ],
                        'explanation' => '“En mi opinión” is a common expression for clearly introducing the writer\'s viewpoint.',
                    ],
                    [
                        'question' => 'Which phrase is useful for introducing the topic without giving a personal opinion yet?',
                        'choices' => [
                            ['choice_text' => 'Hoy en día,', 'is_correct' => true],
                            ['choice_text' => 'En conclusión,', 'is_correct' => false],
                            ['choice_text' => 'Sin embargo,', 'is_correct' => false],
                            ['choice_text' => 'Por último,', 'is_correct' => false],
                        ],
                        'explanation' => '“Hoy en día” can introduce a current topic or situation before the writer explains it.',
                    ],
                    [
                        'question' => 'Which introduction is more focused?',
                        'choices' => [
                            ['choice_text' => 'Hoy en día, muchos estudiantes usan Internet para estudiar, buscar información y practicar idiomas.', 'is_correct' => true],
                            ['choice_text' => 'Internet.', 'is_correct' => false],
                            ['choice_text' => 'Hay muchas cosas en el mundo y la vida es complicada.', 'is_correct' => false],
                            ['choice_text' => 'Voy a escribir sobre todo.', 'is_correct' => false],
                        ],
                        'explanation' => 'It identifies a clear topic and gives the reader a sense of what the essay will discuss.',
                    ],
                    [
                        'question' => 'Which sentence would be a good thesis for a simple essay comparing city and country life?',
                        'choices' => [
                            ['choice_text' => 'La vida en la ciudad y la vida en el campo ofrecen ventajas diferentes.', 'is_correct' => true],
                            ['choice_text' => 'Mi primo vive en un pueblo.', 'is_correct' => false],
                            ['choice_text' => 'Ayer fui al campo.', 'is_correct' => false],
                            ['choice_text' => 'Las ciudades tienen edificios.', 'is_correct' => false],
                        ],
                        'explanation' => 'This central idea creates a clear comparison that the body paragraphs can develop.',
                    ],
                ],
            ],
            [
                'title' => 'Body Paragraphs and Connectors',
                'description' => 'Practice developing one idea at a time and linking sentences with useful Spanish connectors.',
                'settings' => ['duration' => 25, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which connector adds another similar idea?',
                        'choices' => [
                            ['choice_text' => 'Además,', 'is_correct' => true],
                            ['choice_text' => 'Sin embargo,', 'is_correct' => false],
                            ['choice_text' => 'En conclusión,', 'is_correct' => false],
                            ['choice_text' => 'Por el contrario,', 'is_correct' => false],
                        ],
                        'explanation' => '“Además” adds another point that supports or extends the previous idea.',
                    ],
                    [
                        'question' => 'Which connector introduces a contrast?',
                        'choices' => [
                            ['choice_text' => 'Sin embargo,', 'is_correct' => true],
                            ['choice_text' => 'Además,', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo,', 'is_correct' => false],
                            ['choice_text' => 'Primero,', 'is_correct' => false],
                        ],
                        'explanation' => '“Sin embargo” signals a contrast with the idea that came before.',
                    ],
                    [
                        'question' => 'Which phrase introduces an example?',
                        'choices' => [
                            ['choice_text' => 'Por ejemplo,', 'is_correct' => true],
                            ['choice_text' => 'En conclusión,', 'is_correct' => false],
                            ['choice_text' => 'Por último,', 'is_correct' => false],
                            ['choice_text' => 'Sin embargo,', 'is_correct' => false],
                        ],
                        'explanation' => '“Por ejemplo” tells the reader that a concrete case is about to follow.',
                    ],
                    [
                        'question' => 'Which sentence is best for supporting the claim “Leer es útil”?',
                        'choices' => [
                            ['choice_text' => 'Por ejemplo, leer con frecuencia ayuda a aprender palabras nuevas.', 'is_correct' => true],
                            ['choice_text' => 'Leer es útil. Leer es útil. Leer es útil.', 'is_correct' => false],
                            ['choice_text' => 'Adiós por leer.', 'is_correct' => false],
                            ['choice_text' => 'El título de mi ensayo es largo.', 'is_correct' => false],
                        ],
                        'explanation' => 'It supports the general claim with a specific benefit instead of merely repeating it.',
                    ],
                    [
                        'question' => 'Which sentence creates a clear cause-and-effect connection?',
                        'choices' => [
                            ['choice_text' => 'Como estudio cada día, entiendo mejor el material.', 'is_correct' => true],
                            ['choice_text' => 'Estudio cada día. Azul. Barcelona.', 'is_correct' => false],
                            ['choice_text' => 'Como estudio cada día, adiós.', 'is_correct' => false],
                            ['choice_text' => 'Estudio cada día, pero porque conclusión.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence clearly connects the cause, studying daily, with the result, better understanding.',
                    ],
                    [
                        'question' => 'Which connector is useful for ordering the first point?',
                        'choices' => [
                            ['choice_text' => 'Primero,', 'is_correct' => true],
                            ['choice_text' => 'Sin embargo,', 'is_correct' => false],
                            ['choice_text' => 'Por último,', 'is_correct' => false],
                            ['choice_text' => 'En cambio,', 'is_correct' => false],
                        ],
                        'explanation' => '“Primero” is used to present the first point in an organized discussion.',
                    ],
                    [
                        'question' => 'Which connector is useful for the final point in a sequence?',
                        'choices' => [
                            ['choice_text' => 'Por último,', 'is_correct' => true],
                            ['choice_text' => 'Además,', 'is_correct' => false],
                            ['choice_text' => 'Porque,', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo,', 'is_correct' => false],
                        ],
                        'explanation' => '“Por último” signals the final point in a series.',
                    ],
                    [
                        'question' => 'Which body paragraph opening is focused?',
                        'choices' => [
                            ['choice_text' => 'Una ventaja importante de estudiar en casa es la flexibilidad.', 'is_correct' => true],
                            ['choice_text' => 'Estudiar, casa, personas, tiempo, todo es.', 'is_correct' => false],
                            ['choice_text' => 'Mi conclusión es la ventaja.', 'is_correct' => false],
                            ['choice_text' => 'Hola, espero que estés bien.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence announces one clear idea that the paragraph can explain with details.',
                    ],
                    [
                        'question' => 'Which sentence gives evidence for the idea that parks are useful?',
                        'choices' => [
                            ['choice_text' => 'Por ejemplo, las familias pueden caminar y hacer ejercicio allí.', 'is_correct' => true],
                            ['choice_text' => 'Los parques son parques.', 'is_correct' => false],
                            ['choice_text' => 'En conclusión, parques.', 'is_correct' => false],
                            ['choice_text' => 'Yo voy mañana, adiós.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence gives a concrete use that supports the main idea.',
                    ],
                    [
                        'question' => 'Which sequence is easiest for a beginner body paragraph?',
                        'choices' => [
                            ['choice_text' => 'Topic sentence → explanation → example.', 'is_correct' => true],
                            ['choice_text' => 'Example → greeting → title.', 'is_correct' => false],
                            ['choice_text' => 'Conclusion → topic sentence → signature.', 'is_correct' => false],
                            ['choice_text' => 'Question → unrelated fact → goodbye.', 'is_correct' => false],
                        ],
                        'explanation' => 'This structure gives the reader the main point first, then develops it with a reason or explanation and a concrete example.',
                    ],
                    [
                        'question' => 'Which connector best joins a positive point with an opposing point?',
                        'choices' => [
                            ['choice_text' => 'Sin embargo,', 'is_correct' => true],
                            ['choice_text' => 'Además,', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo,', 'is_correct' => false],
                            ['choice_text' => 'Primero,', 'is_correct' => false],
                        ],
                        'explanation' => 'It signals that the next idea contrasts with the previous one.',
                    ],
                ],
            ],
            [
                'title' => 'Conclusions and Revision',
                'description' => 'Learn how to finish an essay effectively and revise beginner writing for clarity, repetition, grammar, and organization.',
                'settings' => ['duration' => 25, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which phrase clearly introduces a conclusion?',
                        'choices' => [
                            ['choice_text' => 'En conclusión,', 'is_correct' => true],
                            ['choice_text' => 'Por ejemplo,', 'is_correct' => false],
                            ['choice_text' => 'Primero,', 'is_correct' => false],
                            ['choice_text' => 'Además,', 'is_correct' => false],
                        ],
                        'explanation' => '“En conclusión” clearly signals that the final part of the essay is beginning.',
                    ],
                    [
                        'question' => 'Which conclusion is strongest for a short essay about exercise?',
                        'choices' => [
                            ['choice_text' => 'En conclusión, hacer ejercicio con regularidad puede mejorar la salud y el bienestar.', 'is_correct' => true],
                            ['choice_text' => 'En conclusión, ejercicio, ejercicio, ejercicio.', 'is_correct' => false],
                            ['choice_text' => 'Ayer fui al gimnasio.', 'is_correct' => false],
                            ['choice_text' => 'Mi amigo también juega fútbol.', 'is_correct' => false],
                        ],
                        'explanation' => 'A good conclusion briefly restates the main idea rather than introducing a random new detail.',
                    ],
                    [
                        'question' => 'Why should a writer avoid repeating the same sentence several times?',
                        'choices' => [
                            ['choice_text' => 'Repetition can make the essay unclear or boring.', 'is_correct' => true],
                            ['choice_text' => 'Long repetition always gives better marks.', 'is_correct' => false],
                            ['choice_text' => 'It makes the introduction unnecessary.', 'is_correct' => false],
                            ['choice_text' => 'It removes the need for connectors.', 'is_correct' => false],
                        ],
                        'explanation' => 'Strong writing develops an idea instead of simply repeating the same wording.',
                    ],
                    [
                        'question' => 'Which revision improves this sentence: “Es bueno porque es bueno para la salud.”',
                        'choices' => [
                            ['choice_text' => 'Es beneficioso porque ayuda a mantener una buena salud.', 'is_correct' => true],
                            ['choice_text' => 'Es bueno porque es bueno y bueno.', 'is_correct' => false],
                            ['choice_text' => 'Es salud bueno porque.', 'is_correct' => false],
                            ['choice_text' => 'Es beneficioso porque salud es.', 'is_correct' => false],
                        ],
                        'explanation' => 'The revised sentence removes unnecessary repetition and gives a clearer explanation.',
                    ],
                    [
                        'question' => 'Which question is useful when revising a paragraph?',
                        'choices' => [
                            ['choice_text' => '¿La idea principal está clara?', 'is_correct' => true],
                            ['choice_text' => '¿Hay suficientes palabras difíciles?', 'is_correct' => false],
                            ['choice_text' => '¿Puedo quitar todos los conectores?', 'is_correct' => false],
                            ['choice_text' => '¿Puedo hacer todas las frases más largas?', 'is_correct' => false],
                        ],
                        'explanation' => 'Revision should check whether the reader can easily understand the paragraph\'s main point.',
                    ],
                    [
                        'question' => 'Which sentence is more precise?',
                        'choices' => [
                            ['choice_text' => 'Muchas personas estudian en casa porque pueden organizar mejor su tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Las personas hacen cosas en sitios porque cosas.', 'is_correct' => false],
                            ['choice_text' => 'Muchas personas, porque tiempo, estudian.', 'is_correct' => false],
                            ['choice_text' => 'Estudian muchas cosas por eso.', 'is_correct' => false],
                        ],
                        'explanation' => 'The improved version clearly states who, what they do, and why.',
                    ],
                    [
                        'question' => 'What should you check if one paragraph contains many unrelated ideas?',
                        'choices' => [
                            ['choice_text' => 'Whether the paragraph needs to be divided or refocused.', 'is_correct' => true],
                            ['choice_text' => 'Whether every sentence should become longer.', 'is_correct' => false],
                            ['choice_text' => 'Whether the title should be removed.', 'is_correct' => false],
                            ['choice_text' => 'Whether punctuation should be deleted.', 'is_correct' => false],
                        ],
                        'explanation' => 'A paragraph should normally develop one main idea, so unrelated points may need to be reorganized.',
                    ],
                    [
                        'question' => 'Which final sentence avoids introducing a completely new topic?',
                        'choices' => [
                            ['choice_text' => 'Por estas razones, creo que estudiar idiomas es una buena inversión.', 'is_correct' => true],
                            ['choice_text' => 'También me gusta cocinar pizza los domingos.', 'is_correct' => false],
                            ['choice_text' => 'Mi vecino compró un coche ayer.', 'is_correct' => false],
                            ['choice_text' => 'Por cierto, el tiempo fue frío en enero.', 'is_correct' => false],
                        ],
                        'explanation' => 'A conclusion should close the essay\'s existing topic instead of suddenly introducing an unrelated subject.',
                    ],
                    [
                        'question' => 'Which revision is better for a beginner essay?',
                        'choices' => [
                            ['choice_text' => 'Use simple, accurate sentences rather than complicated sentences with many mistakes.', 'is_correct' => true],
                            ['choice_text' => 'Always use the longest sentence possible.', 'is_correct' => false],
                            ['choice_text' => 'Avoid verbs so the text sounds formal.', 'is_correct' => false],
                            ['choice_text' => 'Use unfamiliar words in every sentence.', 'is_correct' => false],
                        ],
                        'explanation' => 'Clear and correct writing is more useful than complexity that the writer cannot control.',
                    ],
                    [
                        'question' => 'Which final check is especially useful before submitting an essay?',
                        'choices' => [
                            ['choice_text' => 'Check spelling, verb forms, punctuation, and paragraph order.', 'is_correct' => true],
                            ['choice_text' => 'Only count the adjectives.', 'is_correct' => false],
                            ['choice_text' => 'Only check the title.', 'is_correct' => false],
                            ['choice_text' => 'Delete the conclusion.', 'is_correct' => false],
                        ],
                        'explanation' => 'A final review should look at both language accuracy and overall organization.',
                    ],
                ],
            ],
            [
                'title' => 'Integrated Beginner Essay Practice',
                'description' => 'Bring planning, paragraph organization, examples, connectors, and conclusions together in realistic beginner essay tasks.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'You need to write about “My Daily Routine.” Which plan is most useful?',
                        'choices' => [
                            ['choice_text' => 'Introduction to the routine → morning activities → afternoon/evening activities → conclusion.', 'is_correct' => true],
                            ['choice_text' => 'Only a list of verbs without paragraphs.', 'is_correct' => false],
                            ['choice_text' => 'Conclusion first → random details → introduction.', 'is_correct' => false],
                            ['choice_text' => 'Only the title and one long sentence.', 'is_correct' => false],
                        ],
                        'explanation' => 'A simple sequence helps the reader follow the routine from beginning to end.',
                    ],
                    [
                        'question' => 'Which thesis fits a short essay on studying online?',
                        'choices' => [
                            ['choice_text' => 'Estudiar en línea ofrece flexibilidad, pero también exige organización.', 'is_correct' => true],
                            ['choice_text' => 'Mi ordenador es negro.', 'is_correct' => false],
                            ['choice_text' => 'Ayer estudié durante una hora.', 'is_correct' => false],
                            ['choice_text' => 'La palabra “online” es interesante.', 'is_correct' => false],
                        ],
                        'explanation' => 'This gives two connected ideas that can become the main points of the essay.',
                    ],
                    [
                        'question' => 'Which body paragraph topic sentence would fit the first advantage?',
                        'choices' => [
                            ['choice_text' => 'Una ventaja importante de estudiar en línea es la flexibilidad.', 'is_correct' => true],
                            ['choice_text' => 'En conclusión, estudiar en línea es difícil.', 'is_correct' => false],
                            ['choice_text' => 'Adiós y gracias.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una computadora en casa.', 'is_correct' => false],
                        ],
                        'explanation' => 'It clearly announces the paragraph\'s first main point.',
                    ],
                    [
                        'question' => 'Which example best supports the idea of flexibility in online study?',
                        'choices' => [
                            ['choice_text' => 'Un estudiante puede organizar sus horas de estudio según su horario.', 'is_correct' => true],
                            ['choice_text' => 'El estudiante tiene una mochila azul.', 'is_correct' => false],
                            ['choice_text' => 'La clase tiene una puerta.', 'is_correct' => false],
                            ['choice_text' => 'El ordenador está sobre la mesa.', 'is_correct' => false],
                        ],
                        'explanation' => 'The example directly demonstrates how online study can provide flexibility.',
                    ],
                    [
                        'question' => 'Which connector would help introduce a second advantage?',
                        'choices' => [
                            ['choice_text' => 'Además,', 'is_correct' => true],
                            ['choice_text' => 'Sin embargo,', 'is_correct' => false],
                            ['choice_text' => 'En conclusión,', 'is_correct' => false],
                            ['choice_text' => 'Por último,', 'is_correct' => false],
                        ],
                        'explanation' => '“Además” adds another supporting point.',
                    ],
                    [
                        'question' => 'Which sentence could introduce a disadvantage after discussing advantages?',
                        'choices' => [
                            ['choice_text' => 'Sin embargo, estudiar en línea también puede ser difícil para algunas personas.', 'is_correct' => true],
                            ['choice_text' => 'Además, estudiar en línea es un beneficio.', 'is_correct' => false],
                            ['choice_text' => 'En conclusión, primero.', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo, adiós.', 'is_correct' => false],
                        ],
                        'explanation' => '“Sin embargo” clearly marks the contrast between advantages and disadvantages.',
                    ],
                    [
                        'question' => 'Which conclusion fits an essay about online study?',
                        'choices' => [
                            ['choice_text' => 'En conclusión, estudiar en línea puede ser muy útil si el estudiante sabe organizar su tiempo.', 'is_correct' => true],
                            ['choice_text' => 'En conclusión, mañana voy al mercado.', 'is_correct' => false],
                            ['choice_text' => 'También tengo dos hermanos.', 'is_correct' => false],
                            ['choice_text' => 'La mesa está en la cocina.', 'is_correct' => false],
                        ],
                        'explanation' => 'The conclusion summarizes the essay\'s topic and leaves the reader with a final useful idea.',
                    ],
                    [
                        'question' => 'You are writing an essay about healthy food. Which paragraph plan is most logical?',
                        'choices' => [
                            ['choice_text' => 'Introduction → benefits of healthy food → practical examples → conclusion.', 'is_correct' => true],
                            ['choice_text' => 'Examples → greeting → conclusion → title.', 'is_correct' => false],
                            ['choice_text' => 'Conclusion → unrelated story → introduction.', 'is_correct' => false],
                            ['choice_text' => 'Only a list of food names.', 'is_correct' => false],
                        ],
                        'explanation' => 'This order lets the writer introduce the subject, develop it, support it, and close the essay.',
                    ],
                    [
                        'question' => 'Which sentence is a good supporting example for “comer verduras es saludable”?',
                        'choices' => [
                            ['choice_text' => 'Por ejemplo, las verduras aportan vitaminas y pueden formar parte de una dieta equilibrada.', 'is_correct' => true],
                            ['choice_text' => 'Las verduras son verduras.', 'is_correct' => false],
                            ['choice_text' => 'Mi vecino come pizza.', 'is_correct' => false],
                            ['choice_text' => 'En conclusión, mañana es viernes.', 'is_correct' => false],
                        ],
                        'explanation' => 'It explains the claim with a specific health-related detail.',
                    ],
                    [
                        'question' => 'Which sentence best contrasts two ways of traveling?',
                        'choices' => [
                            ['choice_text' => 'Viajar en tren puede ser cómodo; sin embargo, el autobús puede ser más barato.', 'is_correct' => true],
                            ['choice_text' => 'Viajar tren autobús y.', 'is_correct' => false],
                            ['choice_text' => 'En conclusión, tren.', 'is_correct' => false],
                            ['choice_text' => 'Mi viaje tiene una maleta.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence presents one advantage and then uses “sin embargo” to introduce a contrasting point.',
                    ],
                    [
                        'question' => 'Which final revision improves the paragraph flow?',
                        'choices' => [
                            ['choice_text' => 'Add connectors such as “además”, “sin embargo”, and “por último” where the relationships need to be clearer.', 'is_correct' => true],
                            ['choice_text' => 'Remove every connector.', 'is_correct' => false],
                            ['choice_text' => 'Make every sentence begin with the same word.', 'is_correct' => false],
                            ['choice_text' => 'Add unrelated examples.', 'is_correct' => false],
                        ],
                        'explanation' => 'Connectors help the reader understand how ideas relate to one another.',
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
