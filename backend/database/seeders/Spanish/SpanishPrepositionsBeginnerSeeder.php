<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PrepositionsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'prepositions')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Everyday Spanish Prepositions',
                'description' => 'Build a beginner foundation with the most common Spanish prepositions used for places, time, movement, and everyday relationships.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Complete: “Vivo ___ Madrid.”',
                        'choices' => [
                            ['choice_text' => 'en', 'is_correct' => true],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'para', 'is_correct' => false],
                        ],
                        'explanation' => 'Spanish uses “en” to say where someone lives or is located: “Vivo en Madrid.”',
                    ],
                    [
                        'question' => 'Which sentence correctly means “I am from Spain”?',
                        'choices' => [
                            ['choice_text' => 'Soy de España.', 'is_correct' => true],
                            ['choice_text' => 'Soy en España.', 'is_correct' => false],
                            ['choice_text' => 'Estoy de España.', 'is_correct' => false],
                            ['choice_text' => 'Voy de España.', 'is_correct' => false],
                        ],
                        'explanation' => '“De” is used to show origin or where someone is from: “Soy de España.”',
                    ],
                    [
                        'question' => 'Complete: “Voy ___ la escuela todos los días.”',
                        'choices' => [
                            ['choice_text' => 'a', 'is_correct' => true],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'sin', 'is_correct' => false],
                        ],
                        'explanation' => 'The preposition “a” is commonly used with movement toward a destination: “Voy a la escuela.”',
                    ],
                    [
                        'question' => 'Which sentence uses “con” correctly?',
                        'choices' => [
                            ['choice_text' => 'Voy al cine con mi hermana.', 'is_correct' => true],
                            ['choice_text' => 'Voy al cine con en mi hermana.', 'is_correct' => false],
                            ['choice_text' => 'Voy al cine de mi hermana.', 'is_correct' => false],
                            ['choice_text' => 'Voy al cine para mi hermana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Con” means “with,” so it is used to show who accompanies you.',
                    ],
                    [
                        'question' => 'Complete: “El libro está ___ la mesa.”',
                        'choices' => [
                            ['choice_text' => 'sobre', 'is_correct' => true],
                            ['choice_text' => 'desde', 'is_correct' => false],
                            ['choice_text' => 'para', 'is_correct' => false],
                            ['choice_text' => 'sin', 'is_correct' => false],
                        ],
                        'explanation' => '“Sobre” means “on” or “about.” Here it shows the book is on the table.',
                    ],
                    [
                        'question' => 'Which sentence means “We study in the library”?',
                        'choices' => [
                            ['choice_text' => 'Estudiamos en la biblioteca.', 'is_correct' => true],
                            ['choice_text' => 'Estudiamos a la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Estudiamos de la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Estudiamos para la biblioteca.', 'is_correct' => false],
                        ],
                        'explanation' => '“En” is used for location: “en la biblioteca.”',
                    ],
                    [
                        'question' => 'A friend asks where your keys are. You answer, “Están ___ mi bolso.”',
                        'choices' => [
                            ['choice_text' => 'en', 'is_correct' => true],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'por', 'is_correct' => false],
                            ['choice_text' => 'hasta', 'is_correct' => false],
                        ],
                        'explanation' => '“En” indicates that the keys are inside or located in the bag.',
                    ],
                    [
                        'question' => 'Which sentence uses “sin” naturally?',
                        'choices' => [
                            ['choice_text' => 'Tomo café sin azúcar.', 'is_correct' => true],
                            ['choice_text' => 'Tomo café sin a azúcar.', 'is_correct' => false],
                            ['choice_text' => 'Tomo café sin de azúcar.', 'is_correct' => false],
                            ['choice_text' => 'Tomo café sin en azúcar.', 'is_correct' => false],
                        ],
                        'explanation' => '“Sin” means “without,” so “sin azúcar” is the natural phrase.',
                    ],
                    [
                        'question' => 'Which sentence correctly shows a person traveling together with another person?',
                        'choices' => [
                            ['choice_text' => 'Viajo con Carlos.', 'is_correct' => true],
                            ['choice_text' => 'Viajo a Carlos.', 'is_correct' => false],
                            ['choice_text' => 'Viajo de Carlos.', 'is_correct' => false],
                            ['choice_text' => 'Viajo sobre Carlos.', 'is_correct' => false],
                        ],
                        'explanation' => '“Con” expresses accompaniment: “I travel with Carlos.”',
                    ],
                    [
                        'question' => 'Which sentence correctly uses “para” for a recipient or intended person?',
                        'choices' => [
                            ['choice_text' => 'Este regalo es para Ana.', 'is_correct' => true],
                            ['choice_text' => 'Este regalo es a Ana.', 'is_correct' => false],
                            ['choice_text' => 'Este regalo es de Ana solamente.', 'is_correct' => false],
                            ['choice_text' => 'Este regalo es en Ana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Para” can show the intended recipient: “This gift is for Ana.”',
                    ],
                ],
            ],
            [
                'title' => 'Movement and Destinations',
                'description' => 'Practice prepositions used with going, coming, arriving, leaving, and simple directions.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Complete: “Mañana voy ___ Barcelona.”',
                        'choices' => [
                            ['choice_text' => 'a', 'is_correct' => true],
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'por', 'is_correct' => false],
                        ],
                        'explanation' => 'Movement toward a city is expressed with “a”: “voy a Barcelona.”',
                    ],
                    [
                        'question' => 'Which sentence correctly means “She comes from the office”?',
                        'choices' => [
                            ['choice_text' => 'Ella viene de la oficina.', 'is_correct' => true],
                            ['choice_text' => 'Ella viene a la oficina.', 'is_correct' => false],
                            ['choice_text' => 'Ella viene en la oficina.', 'is_correct' => false],
                            ['choice_text' => 'Ella viene para la oficina.', 'is_correct' => false],
                        ],
                        'explanation' => '“De” can show the point of origin: “viene de la oficina.”',
                    ],
                    [
                        'question' => 'Which phrase is correct for movement through a place?',
                        'choices' => [
                            ['choice_text' => 'Caminamos por el parque.', 'is_correct' => true],
                            ['choice_text' => 'Caminamos para el parque.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos de el parque.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos sin el parque.', 'is_correct' => false],
                        ],
                        'explanation' => '“Por” can express movement through or around an area, such as “por el parque.”',
                    ],
                    [
                        'question' => 'A tourist asks how to get to the station. Which sentence uses “a” correctly?',
                        'choices' => [
                            ['choice_text' => '¿Cómo llego a la estación?', 'is_correct' => true],
                            ['choice_text' => '¿Cómo llego en la estación?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo llego de la estación?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo llego con la estación?', 'is_correct' => false],
                        ],
                        'explanation' => '“A” marks the destination: “How do I get to the station?”',
                    ],
                    [
                        'question' => 'Which sentence shows the starting point of a journey?',
                        'choices' => [
                            ['choice_text' => 'Salimos de casa a las ocho.', 'is_correct' => true],
                            ['choice_text' => 'Salimos a casa a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'Salimos en casa a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'Salimos para casa a las ocho.', 'is_correct' => false],
                        ],
                        'explanation' => '“De” identifies the point from which the journey starts.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses “hasta” for an endpoint?',
                        'choices' => [
                            ['choice_text' => 'Caminamos hasta la estación.', 'is_correct' => true],
                            ['choice_text' => 'Caminamos hasta de la estación.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos hasta con la estación.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos hasta a la estación.', 'is_correct' => false],
                        ],
                        'explanation' => '“Hasta” means “up to” or “until,” so it naturally introduces the endpoint.',
                    ],
                    [
                        'question' => 'Which sentence uses “desde” to show where a journey begins?',
                        'choices' => [
                            ['choice_text' => 'Trabajo desde casa.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo a casa.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo de casa.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo para casa.', 'is_correct' => false],
                        ],
                        'explanation' => '“Desde” means “from” and can mark the starting point of an activity or journey.',
                    ],
                    [
                        'question' => 'A bus travels through the city center. Which sentence fits?',
                        'choices' => [
                            ['choice_text' => 'El autobús pasa por el centro.', 'is_correct' => true],
                            ['choice_text' => 'El autobús pasa para el centro.', 'is_correct' => false],
                            ['choice_text' => 'El autobús pasa a el centro.', 'is_correct' => false],
                            ['choice_text' => 'El autobús pasa sin el centro.', 'is_correct' => false],
                        ],
                        'explanation' => '“Por” is used for movement through an area.',
                    ],
                    [
                        'question' => 'Which sentence correctly combines a destination and a companion?',
                        'choices' => [
                            ['choice_text' => 'Voy a Sevilla con mis amigos.', 'is_correct' => true],
                            ['choice_text' => 'Voy en Sevilla con mis amigos.', 'is_correct' => false],
                            ['choice_text' => 'Voy de Sevilla a mis amigos.', 'is_correct' => false],
                            ['choice_text' => 'Voy para Sevilla de mis amigos.', 'is_correct' => false],
                        ],
                        'explanation' => '“A” marks the destination and “con” marks the people accompanying the speaker.',
                    ],
                    [
                        'question' => 'Which option sounds natural when talking about the distance or direction of a walk?',
                        'choices' => [
                            ['choice_text' => 'Anduvimos hasta el río.', 'is_correct' => true],
                            ['choice_text' => 'Anduvimos de el río.', 'is_correct' => false],
                            ['choice_text' => 'Anduvimos en el río.', 'is_correct' => false],
                            ['choice_text' => 'Anduvimos con el río.', 'is_correct' => false],
                        ],
                        'explanation' => '“Hasta” shows the point reached: they walked as far as the river.',
                    ],
                    [
                        'question' => 'Which sentence uses “para” for a destination or intended destination?',
                        'choices' => [
                            ['choice_text' => 'Salimos para Granada esta tarde.', 'is_correct' => true],
                            ['choice_text' => 'Salimos de Granada esta tarde.', 'is_correct' => false],
                            ['choice_text' => 'Salimos con Granada esta tarde.', 'is_correct' => false],
                            ['choice_text' => 'Salimos en Granada esta tarde.', 'is_correct' => false],
                        ],
                        'explanation' => '“Para” can indicate a destination or direction, especially in expressions such as “salir para Granada.”',
                    ],
                    [
                        'question' => 'A learner writes “Voy en la universidad” to mean “I go to the university.” What should change?',
                        'choices' => [
                            ['choice_text' => 'Voy a la universidad.', 'is_correct' => true],
                            ['choice_text' => 'Voy de la universidad.', 'is_correct' => false],
                            ['choice_text' => 'Voy con la universidad.', 'is_correct' => false],
                            ['choice_text' => 'Voy sobre la universidad.', 'is_correct' => false],
                        ],
                        'explanation' => 'With movement to a destination, “a” is the appropriate preposition.',
                    ],
                ],
            ],
            [
                'title' => 'Time and Common Prepositions',
                'description' => 'Use common prepositions for time expressions, schedules, deadlines, duration, and recurring activities.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Complete: “La clase empieza ___ las nueve.”',
                        'choices' => [
                            ['choice_text' => 'a', 'is_correct' => true],
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'por', 'is_correct' => false],
                        ],
                        'explanation' => 'Spanish uses “a” with clock times: “a las nueve.”',
                    ],
                    [
                        'question' => 'Which sentence correctly means “I work from Monday to Friday”?',
                        'choices' => [
                            ['choice_text' => 'Trabajo de lunes a viernes.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo a lunes a viernes.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo en lunes a viernes.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo para lunes a viernes.', 'is_correct' => false],
                        ],
                        'explanation' => '“De ... a ...” or, for this common range, “de lunes a viernes,” expresses the time span.',
                    ],
                    [
                        'question' => 'Complete: “Nos vemos ___ la mañana.”',
                        'choices' => [
                            ['choice_text' => 'por', 'is_correct' => true],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'con', 'is_correct' => false],
                        ],
                        'explanation' => 'The common expression is “por la mañana” for a general part of the day.',
                    ],
                    [
                        'question' => 'Which sentence uses “desde” for a starting time?',
                        'choices' => [
                            ['choice_text' => 'Trabajo desde las ocho.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo a las ocho desde.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo para las ocho.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo con las ocho.', 'is_correct' => false],
                        ],
                        'explanation' => '“Desde las ocho” means “starting from eight o’clock.”',
                    ],
                    [
                        'question' => 'Complete: “La tienda está abierta ___ las diez.”',
                        'choices' => [
                            ['choice_text' => 'hasta', 'is_correct' => true],
                            ['choice_text' => 'desde', 'is_correct' => false],
                            ['choice_text' => 'con', 'is_correct' => false],
                            ['choice_text' => 'sobre', 'is_correct' => false],
                        ],
                        'explanation' => '“Hasta las diez” gives the endpoint: the store remains open until ten.',
                    ],
                    [
                        'question' => 'Which sentence correctly describes a duration or period?',
                        'choices' => [
                            ['choice_text' => 'Estudié por dos horas.', 'is_correct' => true],
                            ['choice_text' => 'Estudié a dos horas.', 'is_correct' => false],
                            ['choice_text' => 'Estudié en dos horas solamente.', 'is_correct' => false],
                            ['choice_text' => 'Estudié de dos horas.', 'is_correct' => false],
                        ],
                        'explanation' => '“Por” can indicate a duration such as “por dos horas.”',
                    ],
                    [
                        'question' => 'Which phrase is common for talking about approximate time?',
                        'choices' => [
                            ['choice_text' => 'sobre las cinco', 'is_correct' => true],
                            ['choice_text' => 'a las desde cinco', 'is_correct' => false],
                            ['choice_text' => 'de las cinco hasta aproximadamente', 'is_correct' => false],
                            ['choice_text' => 'con las cinco', 'is_correct' => false],
                        ],
                        'explanation' => '“Sobre las cinco” can mean “around five o’clock.”',
                    ],
                    [
                        'question' => 'A friend asks when you usually walk. Which answer is natural?',
                        'choices' => [
                            ['choice_text' => 'Camino por la tarde.', 'is_correct' => true],
                            ['choice_text' => 'Camino a la tarde.', 'is_correct' => false],
                            ['choice_text' => 'Camino de la tarde.', 'is_correct' => false],
                            ['choice_text' => 'Camino con la tarde.', 'is_correct' => false],
                        ],
                        'explanation' => '“Por la tarde” is the common expression for “in the afternoon.”',
                    ],
                    [
                        'question' => 'Which sentence correctly combines a start and end point in time?',
                        'choices' => [
                            ['choice_text' => 'La reunión es de dos a cuatro.', 'is_correct' => true],
                            ['choice_text' => 'La reunión es a dos de cuatro.', 'is_correct' => false],
                            ['choice_text' => 'La reunión es en dos para cuatro.', 'is_correct' => false],
                            ['choice_text' => 'La reunión es por dos con cuatro.', 'is_correct' => false],
                        ],
                        'explanation' => '“De ... a ...” is the standard structure for a time range.',
                    ],
                    [
                        'question' => 'Complete: “Necesito el informe ___ mañana.”',
                        'choices' => [
                            ['choice_text' => 'para', 'is_correct' => true],
                            ['choice_text' => 'por', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'con', 'is_correct' => false],
                        ],
                        'explanation' => '“Para mañana” expresses a deadline or intended time: the report is needed by tomorrow.',
                    ],
                    [
                        'question' => 'Which sentence uses “en” naturally for a month?',
                        'choices' => [
                            ['choice_text' => 'Viajamos en julio.', 'is_correct' => true],
                            ['choice_text' => 'Viajamos a julio.', 'is_correct' => false],
                            ['choice_text' => 'Viajamos de julio.', 'is_correct' => false],
                            ['choice_text' => 'Viajamos con julio.', 'is_correct' => false],
                        ],
                        'explanation' => 'Spanish commonly uses “en” with months: “en julio.”',
                    ],
                ],
            ],
            [
                'title' => 'Por and Para for Beginners',
                'description' => 'Build a practical distinction between por and para using reasons, duration, movement through places, deadlines, recipients, and purposes.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Which sentence uses “para” for a recipient?',
                        'choices' => [
                            ['choice_text' => 'Este mensaje es para Marta.', 'is_correct' => true],
                            ['choice_text' => 'Este mensaje es por Marta solamente.', 'is_correct' => false],
                            ['choice_text' => 'Este mensaje es de para Marta.', 'is_correct' => false],
                            ['choice_text' => 'Este mensaje es en Marta.', 'is_correct' => false],
                        ],
                        'explanation' => '“Para” identifies the person who is intended to receive the message.',
                    ],
                    [
                        'question' => 'Which sentence uses “por” for duration?',
                        'choices' => [
                            ['choice_text' => 'Trabajé por tres horas.', 'is_correct' => true],
                            ['choice_text' => 'Trabajé para tres horas.', 'is_correct' => false],
                            ['choice_text' => 'Trabajé a tres horas.', 'is_correct' => false],
                            ['choice_text' => 'Trabajé de tres horas.', 'is_correct' => false],
                        ],
                        'explanation' => '“Por” can express how long an activity lasted: “por tres horas.”',
                    ],
                    [
                        'question' => 'Why would someone say “Camino por el parque”?',
                        'choices' => [
                            ['choice_text' => 'They are moving through the park.', 'is_correct' => true],
                            ['choice_text' => 'The park is the recipient of the action.', 'is_correct' => false],
                            ['choice_text' => 'The park is a future deadline.', 'is_correct' => false],
                            ['choice_text' => 'They are moving toward the park only.', 'is_correct' => false],
                        ],
                        'explanation' => '“Por” can describe movement through an area.',
                    ],
                    [
                        'question' => 'Which sentence uses “para” for a deadline?',
                        'choices' => [
                            ['choice_text' => 'La tarea es para mañana.', 'is_correct' => true],
                            ['choice_text' => 'La tarea es por mañana.', 'is_correct' => false],
                            ['choice_text' => 'La tarea es a mañana.', 'is_correct' => false],
                            ['choice_text' => 'La tarea es de mañana solamente.', 'is_correct' => false],
                        ],
                        'explanation' => '“Para mañana” indicates when the task is due or intended to be completed.',
                    ],
                    [
                        'question' => 'Complete: “Estudio español ___ viajar por Latinoamérica.”',
                        'choices' => [
                            ['choice_text' => 'para', 'is_correct' => true],
                            ['choice_text' => 'por', 'is_correct' => false],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'con', 'is_correct' => false],
                        ],
                        'explanation' => '“Para” is used to express purpose: the speaker studies Spanish in order to travel.',
                    ],
                    [
                        'question' => 'Complete: “Gracias ___ tu ayuda.”',
                        'choices' => [
                            ['choice_text' => 'por', 'is_correct' => true],
                            ['choice_text' => 'para', 'is_correct' => false],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => false],
                        ],
                        'explanation' => 'The fixed expression is “gracias por,” meaning “thanks for.”',
                    ],
                    [
                        'question' => 'Which sentence uses “por” to give a reason?',
                        'choices' => [
                            ['choice_text' => 'Lo hice por ti.', 'is_correct' => true],
                            ['choice_text' => 'Lo hice para ti mañana.', 'is_correct' => false],
                            ['choice_text' => 'Lo hice a ti.', 'is_correct' => false],
                            ['choice_text' => 'Lo hice en ti.', 'is_correct' => false],
                        ],
                        'explanation' => '“Por ti” can express the reason or motivation behind an action: “I did it because of/for you.”',
                    ],
                    [
                        'question' => 'Which sentence uses “para” to show a purpose?',
                        'choices' => [
                            ['choice_text' => 'Necesito dinero para comprar comida.', 'is_correct' => true],
                            ['choice_text' => 'Necesito dinero por comprar comida.', 'is_correct' => false],
                            ['choice_text' => 'Necesito dinero de comprar comida.', 'is_correct' => false],
                            ['choice_text' => 'Necesito dinero con comprar comida.', 'is_correct' => false],
                        ],
                        'explanation' => '“Para + infinitive” commonly expresses purpose: money is needed in order to buy food.',
                    ],
                    [
                        'question' => 'A learner says “La reunión es por las cinco” to mean “The meeting is scheduled for five.” Which is better?',
                        'choices' => [
                            ['choice_text' => 'La reunión es para las cinco.', 'is_correct' => true],
                            ['choice_text' => 'La reunión es por las cinco.', 'is_correct' => false],
                            ['choice_text' => 'La reunión es de las cinco.', 'is_correct' => false],
                            ['choice_text' => 'La reunión es con las cinco.', 'is_correct' => false],
                        ],
                        'explanation' => '“Para las cinco” can indicate the scheduled or intended time of an event.',
                    ],
                    [
                        'question' => 'Which pair correctly contrasts a reason and a purpose?',
                        'choices' => [
                            ['choice_text' => 'Lo hago por ti. / Lo hago para ayudarte.', 'is_correct' => true],
                            ['choice_text' => 'Lo hago para ti. / Lo hago por ayudarte.', 'is_correct' => false],
                            ['choice_text' => 'Lo hago en ti. / Lo hago a ayudarte.', 'is_correct' => false],
                            ['choice_text' => 'Lo hago de ti. / Lo hago con ayudarte.', 'is_correct' => false],
                        ],
                        'explanation' => '“Por” can give a reason or motivation, while “para + infinitive” clearly expresses purpose.',
                    ],
                    [
                        'question' => 'Which sentence uses “por” naturally with an exchange or price?',
                        'choices' => [
                            ['choice_text' => 'Pagué diez euros por el libro.', 'is_correct' => true],
                            ['choice_text' => 'Pagué diez euros para el libro.', 'is_correct' => false],
                            ['choice_text' => 'Pagué diez euros a el libro.', 'is_correct' => false],
                            ['choice_text' => 'Pagué diez euros en el libro.', 'is_correct' => false],
                        ],
                        'explanation' => '“Por” is used when giving the price paid in exchange for something.',
                    ],
                    [
                        'question' => 'Which statement is a useful beginner shortcut?',
                        'choices' => [
                            ['choice_text' => 'Para often points toward a goal, recipient, or deadline; por often gives a reason, route, or duration.', 'is_correct' => true],
                            ['choice_text' => 'Para and por always mean exactly the same thing.', 'is_correct' => false],
                            ['choice_text' => 'Por is only used for places.', 'is_correct' => false],
                            ['choice_text' => 'Para is only used for people.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a useful beginner distinction, though individual expressions still need to be learned as learners progress.',
                    ],
                    [
                        'question' => 'Which sentence is most natural?',
                        'choices' => [
                            ['choice_text' => 'Salí temprano para llegar a tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Salí temprano por llegar a tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Salí temprano en llegar a tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Salí temprano de llegar a tiempo.', 'is_correct' => false],
                        ],
                        'explanation' => '“Para + infinitive” expresses the purpose of leaving early: in order to arrive on time.',
                    ],
                ],
            ],
            [
                'title' => 'Prepositions in Places and Relationships',
                'description' => 'Practice location and relationship words such as en, sobre, debajo de, delante de, detrás de, entre, cerca de, and lejos de.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Complete: “El gato está ___ la silla.”',
                        'choices' => [
                            ['choice_text' => 'debajo de', 'is_correct' => true],
                            ['choice_text' => 'para', 'is_correct' => false],
                            ['choice_text' => 'por', 'is_correct' => false],
                            ['choice_text' => 'hasta', 'is_correct' => false],
                        ],
                        'explanation' => '“Debajo de” means “under” and shows the cat\'s position relative to the chair.',
                    ],
                    [
                        'question' => 'Which sentence means “The bank is near the station”?',
                        'choices' => [
                            ['choice_text' => 'El banco está cerca de la estación.', 'is_correct' => true],
                            ['choice_text' => 'El banco está lejos de la estación.', 'is_correct' => false],
                            ['choice_text' => 'El banco está sobre la estación.', 'is_correct' => false],
                            ['choice_text' => 'El banco está entre la estación.', 'is_correct' => false],
                        ],
                        'explanation' => '“Cerca de” means “near” and is used to describe nearby locations.',
                    ],
                    [
                        'question' => 'Complete: “La farmacia está ___ el banco y el supermercado.”',
                        'choices' => [
                            ['choice_text' => 'entre', 'is_correct' => true],
                            ['choice_text' => 'sobre', 'is_correct' => false],
                            ['choice_text' => 'hasta', 'is_correct' => false],
                            ['choice_text' => 'sin', 'is_correct' => false],
                        ],
                        'explanation' => '“Entre” means “between” and is followed here by the two places that surround the pharmacy.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses “detrás de”?',
                        'choices' => [
                            ['choice_text' => 'El coche está detrás de la casa.', 'is_correct' => true],
                            ['choice_text' => 'El coche está detrás la casa.', 'is_correct' => false],
                            ['choice_text' => 'El coche está detrás a la casa.', 'is_correct' => false],
                            ['choice_text' => 'El coche está detrás en la casa.', 'is_correct' => false],
                        ],
                        'explanation' => '“Detrás de” means “behind” and requires “de” before the reference place.',
                    ],
                    [
                        'question' => 'Which sentence means “The picture is above the sofa”?',
                        'choices' => [
                            ['choice_text' => 'La foto está sobre el sofá.', 'is_correct' => true],
                            ['choice_text' => 'La foto está para el sofá.', 'is_correct' => false],
                            ['choice_text' => 'La foto está por el sofá solamente.', 'is_correct' => false],
                            ['choice_text' => 'La foto está hasta el sofá.', 'is_correct' => false],
                        ],
                        'explanation' => '“Sobre” can indicate that one object is on or above another object.',
                    ],
                    [
                        'question' => 'Complete: “Estoy ___ mis amigos en la foto.”',
                        'choices' => [
                            ['choice_text' => 'entre', 'is_correct' => true],
                            ['choice_text' => 'para', 'is_correct' => false],
                            ['choice_text' => 'desde', 'is_correct' => false],
                            ['choice_text' => 'hasta', 'is_correct' => false],
                        ],
                        'explanation' => '“Entre” means “among/between,” so it can describe being in the middle of a group.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses “delante de”?',
                        'choices' => [
                            ['choice_text' => 'El autobús está delante de la escuela.', 'is_correct' => true],
                            ['choice_text' => 'El autobús está delante la escuela.', 'is_correct' => false],
                            ['choice_text' => 'El autobús está delante a la escuela.', 'is_correct' => false],
                            ['choice_text' => 'El autobús está delante en la escuela.', 'is_correct' => false],
                        ],
                        'explanation' => '“Delante de” means “in front of” and takes “de” before the reference place.',
                    ],
                    [
                        'question' => 'Which sentence expresses distance from a place?',
                        'choices' => [
                            ['choice_text' => 'Mi casa está lejos de aquí.', 'is_correct' => true],
                            ['choice_text' => 'Mi casa está a lejos aquí.', 'is_correct' => false],
                            ['choice_text' => 'Mi casa está por lejos de aquí.', 'is_correct' => false],
                            ['choice_text' => 'Mi casa está con lejos aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '“Lejos de” means “far from” and describes distance from a place.',
                    ],
                    [
                        'question' => 'A student asks where the keys are. Which answer is natural?',
                        'choices' => [
                            ['choice_text' => 'Están dentro de la mochila.', 'is_correct' => true],
                            ['choice_text' => 'Están a la mochila.', 'is_correct' => false],
                            ['choice_text' => 'Están para la mochila.', 'is_correct' => false],
                            ['choice_text' => 'Están por la mochila.', 'is_correct' => false],
                        ],
                        'explanation' => '“Dentro de” means “inside” and gives a clear location relationship.',
                    ],
                    [
                        'question' => 'Which pair correctly describes opposite positions?',
                        'choices' => [
                            ['choice_text' => 'delante de / detrás de', 'is_correct' => true],
                            ['choice_text' => 'entre / para', 'is_correct' => false],
                            ['choice_text' => 'por / hasta', 'is_correct' => false],
                            ['choice_text' => 'con / sin', 'is_correct' => false],
                        ],
                        'explanation' => '“Delante de” means “in front of,” while “detrás de” means “behind,” so they form a natural positional contrast.',
                    ],
                ],
            ],
            [
                'title' => 'Mixed Preposition Review',
                'description' => 'Bring together the main beginner prepositions in short situations involving people, places, time, movement, and purpose.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Complete: “Voy ___ casa ___ las seis.”',
                        'choices' => [
                            ['choice_text' => 'a / a', 'is_correct' => true],
                            ['choice_text' => 'en / por', 'is_correct' => false],
                            ['choice_text' => 'de / para', 'is_correct' => false],
                            ['choice_text' => 'con / hasta', 'is_correct' => false],
                        ],
                        'explanation' => '“Voy a casa” gives the destination, and “a las seis” gives the time.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Trabajo en Madrid desde enero.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo a Madrid desde enero.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo de Madrid en enero.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo para Madrid a enero.', 'is_correct' => false],
                        ],
                        'explanation' => '“En Madrid” gives the location, while “desde enero” gives the starting point in time.',
                    ],
                    [
                        'question' => 'A student wants to say “This book is for my teacher.” Which is correct?',
                        'choices' => [
                            ['choice_text' => 'Este libro es para mi profesor.', 'is_correct' => true],
                            ['choice_text' => 'Este libro es por mi profesor.', 'is_correct' => false],
                            ['choice_text' => 'Este libro es a mi profesor.', 'is_correct' => false],
                            ['choice_text' => 'Este libro es en mi profesor.', 'is_correct' => false],
                        ],
                        'explanation' => '“Para” marks the intended recipient of the book.',
                    ],
                    [
                        'question' => 'Which sentence correctly describes a trip through a city with friends?',
                        'choices' => [
                            ['choice_text' => 'Caminamos por el centro con nuestros amigos.', 'is_correct' => true],
                            ['choice_text' => 'Caminamos para el centro de nuestros amigos.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos a el centro por nuestros amigos.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos de centro con nuestros amigos.', 'is_correct' => false],
                        ],
                        'explanation' => '“Por” expresses movement through the center, while “con” expresses the people accompanying the speakers.',
                    ],
                    [
                        'question' => 'Complete: “Estudio ___ aprender.”',
                        'choices' => [
                            ['choice_text' => 'para', 'is_correct' => true],
                            ['choice_text' => 'por', 'is_correct' => false],
                            ['choice_text' => 'con', 'is_correct' => false],
                            ['choice_text' => 'hasta', 'is_correct' => false],
                        ],
                        'explanation' => '“Para + infinitive” expresses purpose: studying in order to learn.',
                    ],
                    [
                        'question' => 'Which sentence correctly shows a deadline?',
                        'choices' => [
                            ['choice_text' => 'Necesito terminar el trabajo para el viernes.', 'is_correct' => true],
                            ['choice_text' => 'Necesito terminar el trabajo por el viernes.', 'is_correct' => false],
                            ['choice_text' => 'Necesito terminar el trabajo en el viernes.', 'is_correct' => false],
                            ['choice_text' => 'Necesito terminar el trabajo con el viernes.', 'is_correct' => false],
                        ],
                        'explanation' => '“Para el viernes” means the work is due or intended to be finished by Friday.',
                    ],
                    [
                        'question' => 'Which sentence uses both origin and destination correctly?',
                        'choices' => [
                            ['choice_text' => 'Viajo de Valencia a Madrid.', 'is_correct' => true],
                            ['choice_text' => 'Viajo a Valencia de Madrid.', 'is_correct' => false],
                            ['choice_text' => 'Viajo en Valencia para Madrid solamente.', 'is_correct' => false],
                            ['choice_text' => 'Viajo con Valencia a Madrid.', 'is_correct' => false],
                        ],
                        'explanation' => '“De ... a ...” is the standard way to express a journey from one place to another.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses “sin”?',
                        'choices' => [
                            ['choice_text' => 'Salimos sin dinero.', 'is_correct' => true],
                            ['choice_text' => 'Salimos sin a dinero.', 'is_correct' => false],
                            ['choice_text' => 'Salimos sin de dinero.', 'is_correct' => false],
                            ['choice_text' => 'Salimos sin para dinero.', 'is_correct' => false],
                        ],
                        'explanation' => '“Sin” means “without,” so “sin dinero” is correct.',
                    ],
                    [
                        'question' => 'A customer thanks a waiter. Which sentence is natural?',
                        'choices' => [
                            ['choice_text' => 'Gracias por la comida.', 'is_correct' => true],
                            ['choice_text' => 'Gracias para la comida.', 'is_correct' => false],
                            ['choice_text' => 'Gracias en la comida.', 'is_correct' => false],
                            ['choice_text' => 'Gracias a la comida.', 'is_correct' => false],
                        ],
                        'explanation' => 'The standard expression is “gracias por” followed by the thing being thanked for.',
                    ],
                    [
                        'question' => 'Which sentence correctly combines location and a person accompanying the speaker?',
                        'choices' => [
                            ['choice_text' => 'Estoy en el parque con Ana.', 'is_correct' => true],
                            ['choice_text' => 'Estoy a el parque por Ana.', 'is_correct' => false],
                            ['choice_text' => 'Estoy de el parque con Ana.', 'is_correct' => false],
                            ['choice_text' => 'Estoy para el parque Ana.', 'is_correct' => false],
                        ],
                        'explanation' => '“En” identifies the location and “con” identifies the companion.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses “hasta” for both place and endpoint?',
                        'choices' => [
                            ['choice_text' => 'Caminamos hasta la estación y esperamos hasta las cinco.', 'is_correct' => true],
                            ['choice_text' => 'Caminamos por la estación y esperamos para las cinco.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos a la estación y esperamos en las cinco.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos de la estación y esperamos con las cinco.', 'is_correct' => false],
                        ],
                        'explanation' => '“Hasta” can mark both a physical endpoint and an endpoint in time.',
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
