<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WritingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'writing')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Writing Clear Spanish Sentences',
                'description' => 'Practice building simple, accurate Spanish sentences with natural word order, verbs, punctuation, and everyday vocabulary.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Which sentence is written naturally?',
                        'choices' => [
                            ['choice_text' => 'Mi hermana estudia medicina.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermana medicina estudia es.', 'is_correct' => false],
                            ['choice_text' => 'Estudia mi hermana medicina es.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana estudiar medicina.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence uses a clear subject, a correctly conjugated verb, and the object of the action.',
                    ],
                    [
                        'question' => 'Choose the best written sentence for “I live in Rabat.”',
                        'choices' => [
                            ['choice_text' => 'Vivo en Rabat.', 'is_correct' => true],
                            ['choice_text' => 'Vivo Rabat en.', 'is_correct' => false],
                            ['choice_text' => 'Estoy en Rabat vivo.', 'is_correct' => false],
                            ['choice_text' => 'Tengo Rabat.', 'is_correct' => false],
                        ],
                        'explanation' => '“Vivo en…” is the natural Spanish structure for saying where you live.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses a capital letter at the beginning?',
                        'choices' => [
                            ['choice_text' => 'Mañana tengo una clase.', 'is_correct' => true],
                            ['choice_text' => 'mañana tengo una clase.', 'is_correct' => false],
                            ['choice_text' => 'Mañana Tengo una clase.', 'is_correct' => false],
                            ['choice_text' => 'mañana Tengo una clase.', 'is_correct' => false],
                        ],
                        'explanation' => 'A sentence begins with a capital letter, while ordinary words in the middle normally remain lowercase.',
                    ],
                    [
                        'question' => 'Which sentence has correct Spanish question punctuation?',
                        'choices' => [
                            ['choice_text' => '¿Cómo estás?', 'is_correct' => true],
                            ['choice_text' => '¿Cómo estás.', 'is_correct' => false],
                            ['choice_text' => 'Cómo estás?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo estás!', 'is_correct' => false],
                        ],
                        'explanation' => 'Spanish questions use an opening “¿” and a closing “?” around the question.',
                    ],
                    [
                        'question' => 'Which sentence is best for a simple written introduction?',
                        'choices' => [
                            ['choice_text' => 'Me llamo Sara y vivo en Casablanca.', 'is_correct' => true],
                            ['choice_text' => 'Me Sara llamo y Casablanca vivo.', 'is_correct' => false],
                            ['choice_text' => 'Sara me llamo, vivo Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Yo Sara y vivo en llamo Casablanca.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence connects two simple personal facts with natural word order and “y.”',
                    ],
                    [
                        'question' => 'Which sentence correctly writes a basic negative statement?',
                        'choices' => [
                            ['choice_text' => 'No trabajo los domingos.', 'is_correct' => true],
                            ['choice_text' => 'No los domingos trabajo.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo no los domingos.', 'is_correct' => false],
                            ['choice_text' => 'No trabajo domingo los.', 'is_correct' => false],
                        ],
                        'explanation' => 'The negative marker “no” comes before the conjugated verb.',
                    ],
                    [
                        'question' => 'Which option makes the clearest written sentence?',
                        'choices' => [
                            ['choice_text' => 'Carlos compra fruta en el mercado.', 'is_correct' => true],
                            ['choice_text' => 'Carlos fruta compra el mercado en.', 'is_correct' => false],
                            ['choice_text' => 'Compra Carlos en fruta mercado.', 'is_correct' => false],
                            ['choice_text' => 'Carlos comprar fruta mercado.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence clearly presents the subject, action, object, and place.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses a final period?',
                        'choices' => [
                            ['choice_text' => 'Hoy estudio español.', 'is_correct' => true],
                            ['choice_text' => 'Hoy estudio español', 'is_correct' => false],
                            ['choice_text' => 'Hoy estudio español..', 'is_correct' => false],
                            ['choice_text' => 'Hoy estudio español?', 'is_correct' => false],
                        ],
                        'explanation' => 'A simple statement normally ends with a period.',
                    ],
                    [
                        'question' => 'Which sentence clearly explains a reason?',
                        'choices' => [
                            ['choice_text' => 'Ana está cansada porque trabajó.', 'is_correct' => true],
                            ['choice_text' => 'Ana cansada está porque trabajó es.', 'is_correct' => false],
                            ['choice_text' => 'Porque trabajó Ana cansada.', 'is_correct' => false],
                            ['choice_text' => 'Ana está porque cansada trabajó.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence states the situation first and then gives the reason with “porque.”',
                    ],
                    [
                        'question' => 'Which sentence uses an adjective correctly?',
                        'choices' => [
                            ['choice_text' => 'La casa es grande.', 'is_correct' => true],
                            ['choice_text' => 'La casa es grandes.', 'is_correct' => false],
                            ['choice_text' => 'El casa es grande.', 'is_correct' => false],
                            ['choice_text' => 'La casa son grande.', 'is_correct' => false],
                        ],
                        'explanation' => '“Casa” is feminine singular, and “grande” agrees with it in number.',
                    ],
                ],
            ],
            [
                'title' => 'Short Messages and Everyday Writing',
                'description' => 'Practice writing natural short messages about plans, times, invitations, apologies, requests, and updates.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'You want to text a friend that you will arrive at eight. Which message is natural?',
                        'choices' => [
                            ['choice_text' => 'Llego a las ocho.', 'is_correct' => true],
                            ['choice_text' => 'Yo ocho llego a.', 'is_correct' => false],
                            ['choice_text' => 'Estoy llegar ocho.', 'is_correct' => false],
                            ['choice_text' => 'Llego ocho las.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a clear and natural short message about an arrival time.',
                    ],
                    [
                        'question' => 'You cannot meet today and want to suggest tomorrow. Which message works best?',
                        'choices' => [
                            ['choice_text' => 'Hoy no puedo. ¿Nos vemos mañana?', 'is_correct' => true],
                            ['choice_text' => 'Hoy no puedo mañana nos.', 'is_correct' => false],
                            ['choice_text' => 'No hoy puedo. Mañana ver.', 'is_correct' => false],
                            ['choice_text' => 'Hoy no puedo que mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'The message explains the problem and then suggests another day.',
                    ],
                    [
                        'question' => 'Which message is appropriate for apologizing for being late?',
                        'choices' => [
                            ['choice_text' => 'Perdón por llegar tarde. Llego en diez minutos.', 'is_correct' => true],
                            ['choice_text' => 'Perdón llegar tarde diez.', 'is_correct' => false],
                            ['choice_text' => 'Estoy tarde, perdón por diez.', 'is_correct' => false],
                            ['choice_text' => 'Tarde llegar soy en diez.', 'is_correct' => false],
                        ],
                        'explanation' => 'It gives both an apology and a useful arrival update.',
                    ],
                    [
                        'question' => 'You want to invite a friend to dinner. Which message is natural?',
                        'choices' => [
                            ['choice_text' => '¿Quieres cenar conmigo esta noche?', 'is_correct' => true],
                            ['choice_text' => '¿Quieres conmigo cena esta noche?', 'is_correct' => false],
                            ['choice_text' => 'Cenar quieres conmigo noche.', 'is_correct' => false],
                            ['choice_text' => '¿Tú cenar conmigo eres?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Quieres + infinitive?” is a natural beginner structure for an invitation.',
                    ],
                    [
                        'question' => 'Which message sounds appropriate when changing a meeting time?',
                        'choices' => [
                            ['choice_text' => 'La reunión cambia a las cuatro. ¿Te va bien?', 'is_correct' => true],
                            ['choice_text' => 'La reunión cambia cuatro. Tú bien va?', 'is_correct' => false],
                            ['choice_text' => 'Cuatro cambia la reunión es.', 'is_correct' => false],
                            ['choice_text' => 'La reunión a cuatro cambia tú.', 'is_correct' => false],
                        ],
                        'explanation' => 'The message states the new time and checks whether it works for the other person.',
                    ],
                    [
                        'question' => 'You want to tell a classmate that you finished the homework. Which message is clear?',
                        'choices' => [
                            ['choice_text' => 'Ya terminé el ejercicio.', 'is_correct' => true],
                            ['choice_text' => 'Ya terminar ejercicio soy.', 'is_correct' => false],
                            ['choice_text' => 'Terminé ya el ejercicios.', 'is_correct' => false],
                            ['choice_text' => 'El ejercicio ya terminar.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ya terminé…” naturally communicates that the task is finished.',
                    ],
                    [
                        'question' => 'Which message politely asks for a file?',
                        'choices' => [
                            ['choice_text' => '¿Puedes enviarme el archivo, por favor?', 'is_correct' => true],
                            ['choice_text' => 'Puedes archivo enviarme.', 'is_correct' => false],
                            ['choice_text' => '¿El archivo puedes?', 'is_correct' => false],
                            ['choice_text' => 'Envíame por favor tú archivo puede.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a polite written request using “¿Puedes…?, por favor?”',
                    ],
                    [
                        'question' => 'You are sick and need to tell your teacher you will not attend class. Which message is best?',
                        'choices' => [
                            ['choice_text' => 'Hola, hoy estoy enfermo y no puedo asistir a clase.', 'is_correct' => true],
                            ['choice_text' => 'Hola, hoy enfermo no clase puedo.', 'is_correct' => false],
                            ['choice_text' => 'Hoy no puedo clase porque estoy asistencia.', 'is_correct' => false],
                            ['choice_text' => 'Hola, asistir no soy clase hoy enfermo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The message clearly gives the reason and the consequence.',
                    ],
                    [
                        'question' => 'Which message correctly confirms an appointment?',
                        'choices' => [
                            ['choice_text' => 'Sí, confirmo la cita para el viernes a las diez.', 'is_correct' => true],
                            ['choice_text' => 'Sí, la cita confirmo viernes diez para.', 'is_correct' => false],
                            ['choice_text' => 'Confirmar la cita lunes a diez soy.', 'is_correct' => false],
                            ['choice_text' => 'El lunes nuestra cita confirmar yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence clearly confirms the appointment and its time.',
                    ],
                    [
                        'question' => 'Which short message sounds most natural after receiving help?',
                        'choices' => [
                            ['choice_text' => 'Muchas gracias por tu ayuda.', 'is_correct' => true],
                            ['choice_text' => 'Gracias mucho tu ayudar.', 'is_correct' => false],
                            ['choice_text' => 'Mucho gracias para ayudar.', 'is_correct' => false],
                            ['choice_text' => 'Tu ayuda gracias mucho.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a common natural expression of thanks.',
                    ],
                    [
                        'question' => 'You want to tell a friend you are waiting outside. Which message is clear?',
                        'choices' => [
                            ['choice_text' => 'Estoy esperando fuera.', 'is_correct' => true],
                            ['choice_text' => 'Esperando fuera soy.', 'is_correct' => false],
                            ['choice_text' => 'Estoy fuera esperar.', 'is_correct' => false],
                            ['choice_text' => 'Fuera estoy esperando yo soy.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence clearly communicates that you are waiting outside now.',
                    ],
                ],
            ],
            [
                'title' => 'Descriptions and Personal Writing',
                'description' => 'Practice short written descriptions of people, places, routines, preferences, and recent experiences.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which sentence is best for describing a friend?',
                        'choices' => [
                            ['choice_text' => 'Mi amigo es amable y trabaja en una escuela.', 'is_correct' => true],
                            ['choice_text' => 'Mi amigo amable escuela trabaja es.', 'is_correct' => false],
                            ['choice_text' => 'Mi amigo está amable y escuela trabajo.', 'is_correct' => false],
                            ['choice_text' => 'Mi amigo es amables y trabaja escuela.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence gives two clear facts with natural word order.',
                    ],
                    [
                        'question' => 'Which description is most coherent?',
                        'choices' => [
                            ['choice_text' => 'Mi casa es pequeña, pero tiene un jardín grande.', 'is_correct' => true],
                            ['choice_text' => 'Mi casa pequeña pero jardín es tiene grande.', 'is_correct' => false],
                            ['choice_text' => 'Mi casa es pequeño, pero tiene una jardín grande.', 'is_correct' => false],
                            ['choice_text' => 'Mi casa jardín tiene pero pequeña es grande.', 'is_correct' => false],
                        ],
                        'explanation' => '“Pequeña” agrees with “casa,” while “grande” correctly describes “jardín.”',
                    ],
                    [
                        'question' => 'You are writing about your daily routine. Which sentence fits naturally?',
                        'choices' => [
                            ['choice_text' => 'Normalmente me levanto a las siete y desayuno en casa.', 'is_correct' => true],
                            ['choice_text' => 'Normalmente me levantar a siete desayuno casa.', 'is_correct' => false],
                            ['choice_text' => 'Me levanto normalmente siete y casa desayuno.', 'is_correct' => false],
                            ['choice_text' => 'Normalmente yo a siete levantar y desayuno en.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence combines two routine actions with natural order.',
                    ],
                    [
                        'question' => 'Which sentence correctly describes a city?',
                        'choices' => [
                            ['choice_text' => 'La ciudad es tranquila y tiene muchos parques.', 'is_correct' => true],
                            ['choice_text' => 'La ciudad tranquila son y tiene muchas parque.', 'is_correct' => false],
                            ['choice_text' => 'La ciudad está tranquilo y tiene mucho parques.', 'is_correct' => false],
                            ['choice_text' => 'La ciudad es tranquilos y tiene parque.', 'is_correct' => false],
                        ],
                        'explanation' => '“Tranquila” agrees with “ciudad,” and “muchos parques” is correctly plural.',
                    ],
                    [
                        'question' => 'Which sentence clearly explains a preference?',
                        'choices' => [
                            ['choice_text' => 'Me gusta el invierno porque hace frío y puedo esquiar.', 'is_correct' => true],
                            ['choice_text' => 'Me gusta porque invierno frío hacer puedo.', 'is_correct' => false],
                            ['choice_text' => 'El invierno me gusto porque frío es puedo.', 'is_correct' => false],
                            ['choice_text' => 'Me gusta invierno porque puedo de esquí.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence states the preference and then gives the reason with “porque.”',
                    ],
                    [
                        'question' => 'You are writing a short profile of a classmate. Which sentence is the clearest?',
                        'choices' => [
                            ['choice_text' => 'Laura estudia medicina, vive cerca de la universidad y trabaja los sábados.', 'is_correct' => true],
                            ['choice_text' => 'Laura medicina estudia cerca vive universidad trabaja sábados.', 'is_correct' => false],
                            ['choice_text' => 'Laura estudia medicina y universidad vive trabaja sábado.', 'is_correct' => false],
                            ['choice_text' => 'Laura es estudiar medicina, vive cerca universidad.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence presents three related facts in a consistent structure.',
                    ],
                    [
                        'question' => 'Which sentence uses time expressions clearly?',
                        'choices' => [
                            ['choice_text' => 'Por la mañana estudio y por la noche leo.', 'is_correct' => true],
                            ['choice_text' => 'Por mañana estudio la y noche por leo.', 'is_correct' => false],
                            ['choice_text' => 'Estudio mañana por y leo noche la.', 'is_correct' => false],
                            ['choice_text' => 'Por la estudio mañana y noche por leo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The two time expressions are clear and balanced.',
                    ],
                    [
                        'question' => 'Which sentence gives a clear reason for a personal choice?',
                        'choices' => [
                            ['choice_text' => 'Voy en autobús porque es más barato.', 'is_correct' => true],
                            ['choice_text' => 'Voy en autobús es más barato porque.', 'is_correct' => false],
                            ['choice_text' => 'Porque es barato voy autobús más.', 'is_correct' => false],
                            ['choice_text' => 'Voy porque autobús es en más barato.', 'is_correct' => false],
                        ],
                        'explanation' => 'The main action is followed by its reason using “porque.”',
                    ],
                    [
                        'question' => 'Which sentence is suitable for describing last weekend?',
                        'choices' => [
                            ['choice_text' => 'El sábado visité a mis padres y el domingo descansé en casa.', 'is_correct' => true],
                            ['choice_text' => 'El sábado visitar mis padres y domingo descanso casa.', 'is_correct' => false],
                            ['choice_text' => 'El sábado visito mis padres y el domingo descansaré.', 'is_correct' => false],
                            ['choice_text' => 'El sábado mis padres visitó y domingo descansé.', 'is_correct' => false],
                        ],
                        'explanation' => 'Both completed weekend actions are correctly written in the past.',
                    ],
                    [
                        'question' => 'Which sentence gives a useful closing to a short personal paragraph?',
                        'choices' => [
                            ['choice_text' => 'En general, me gusta mucho vivir aquí.', 'is_correct' => true],
                            ['choice_text' => 'En general me mucho gusta aquí vivir es.', 'is_correct' => false],
                            ['choice_text' => 'Me gusta aquí en general mucho vivir es.', 'is_correct' => false],
                            ['choice_text' => 'Aquí vivir en general gusta mucho me.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a natural concluding sentence for a short personal description.',
                    ],
                ],
            ],
            [
                'title' => 'Email and Formal Beginner Writing',
                'description' => 'Practice simple email openings, requests, confirmations, attachments, apologies, and polite written communication.',
                'settings' => ['duration' => 25, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which opening is appropriate for a polite email to a teacher?',
                        'choices' => [
                            ['choice_text' => 'Hola, profesora García:', 'is_correct' => true],
                            ['choice_text' => 'Hola profesora García.', 'is_correct' => false],
                            ['choice_text' => 'Profesora hola García,', 'is_correct' => false],
                            ['choice_text' => 'García hola profesora.', 'is_correct' => false],
                        ],
                        'explanation' => 'A simple polite greeting followed by a colon works well in a short Spanish email.',
                    ],
                    [
                        'question' => 'Which sentence is appropriate when asking a teacher a question?',
                        'choices' => [
                            ['choice_text' => 'Quería preguntarle sobre la tarea.', 'is_correct' => true],
                            ['choice_text' => 'Quiero usted pregunta tarea.', 'is_correct' => false],
                            ['choice_text' => 'Preguntar quería usted la tarea.', 'is_correct' => false],
                            ['choice_text' => 'La tarea quería preguntarle yo es.', 'is_correct' => false],
                        ],
                        'explanation' => '“Quería preguntarle…” is a polite written introduction to a question.',
                    ],
                    [
                        'question' => 'You want to ask when an exam will be held. Which sentence is clear?',
                        'choices' => [
                            ['choice_text' => '¿Podría decirme cuándo es el examen?', 'is_correct' => true],
                            ['choice_text' => '¿Cuándo examen podría usted decir?', 'is_correct' => false],
                            ['choice_text' => 'Dígame examen cuándo podría.', 'is_correct' => false],
                            ['choice_text' => '¿Puede examen es cuándo usted?', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a polite and grammatically clear question for an email.',
                    ],
                    [
                        'question' => 'Which sentence politely asks for more time to complete an assignment?',
                        'choices' => [
                            ['choice_text' => '¿Sería posible entregar la tarea mañana?', 'is_correct' => true],
                            ['choice_text' => '¿Es posible yo tarea mañana entregar?', 'is_correct' => false],
                            ['choice_text' => 'Entregar mañana sería yo tarea?', 'is_correct' => false],
                            ['choice_text' => 'Mañana tarea posible es yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'This wording is polite and appropriate when asking for an extension.',
                    ],
                    [
                        'question' => 'Which sentence correctly confirms an appointment in an email?',
                        'choices' => [
                            ['choice_text' => 'Confirmo nuestra cita para el lunes a las diez.', 'is_correct' => true],
                            ['choice_text' => 'Nuestra cita confirmo lunes diez para.', 'is_correct' => false],
                            ['choice_text' => 'Confirmar la cita lunes a diez soy.', 'is_correct' => false],
                            ['choice_text' => 'El lunes nuestra cita confirmar yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence clearly confirms the appointment and its time.',
                    ],
                    [
                        'question' => 'Which closing is appropriate for a simple polite email?',
                        'choices' => [
                            ['choice_text' => 'Saludos cordiales,', 'is_correct' => true],
                            ['choice_text' => 'Hasta luego amigo!!!', 'is_correct' => false],
                            ['choice_text' => 'Hola otra vez,', 'is_correct' => false],
                            ['choice_text' => 'Gracias de adiós.', 'is_correct' => false],
                        ],
                        'explanation' => '“Saludos cordiales” is a standard polite written closing.',
                    ],
                    [
                        'question' => 'Which sentence sounds professional when explaining that you cannot attend a meeting?',
                        'choices' => [
                            ['choice_text' => 'Lamento no poder asistir a la reunión.', 'is_correct' => true],
                            ['choice_text' => 'No puedo reunión asistir lamento.', 'is_correct' => false],
                            ['choice_text' => 'La reunión no poder asistir yo.', 'is_correct' => false],
                            ['choice_text' => 'Asistir no reunión puedo lamento.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is concise and polite professional wording.',
                    ],
                    [
                        'question' => 'Which sentence clearly gives an attachment notice?',
                        'choices' => [
                            ['choice_text' => 'Adjunto el documento solicitado.', 'is_correct' => true],
                            ['choice_text' => 'El documento adjunto solicitado yo.', 'is_correct' => false],
                            ['choice_text' => 'Adjunto solicitado documento es.', 'is_correct' => false],
                            ['choice_text' => 'Documento yo adjuntar solicitado.', 'is_correct' => false],
                        ],
                        'explanation' => '“Adjunto…” is a conventional way to say that the requested document is attached.',
                    ],
                    [
                        'question' => 'Which sentence is best for politely awaiting a response?',
                        'choices' => [
                            ['choice_text' => 'Quedo atento a su respuesta.', 'is_correct' => true],
                            ['choice_text' => 'Estoy esperando tú respuesta ahora.', 'is_correct' => false],
                            ['choice_text' => 'Su respuesta queda yo.', 'is_correct' => false],
                            ['choice_text' => 'Atento su respuesta soy es.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a polite written expression meaning you are awaiting the response.',
                    ],
                    [
                        'question' => 'Which sentence is appropriate for a simple work email request?',
                        'choices' => [
                            ['choice_text' => '¿Podría enviarme el informe hoy, por favor?', 'is_correct' => true],
                            ['choice_text' => 'Enviarme usted informe hoy poder.', 'is_correct' => false],
                            ['choice_text' => 'El informe hoy envíame podría usted es.', 'is_correct' => false],
                            ['choice_text' => '¿Puede informe yo recibir hoy?', 'is_correct' => false],
                        ],
                        'explanation' => 'It uses a polite conditional request and clearly states what is needed.',
                    ],
                ],
            ],
            [
                'title' => 'Practical Writing Review',
                'description' => 'Combine sentence building, short messages, descriptions, and simple formal writing in practical beginner tasks.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Which sentence would work best as the first line of a short paragraph about a weekend?',
                        'choices' => [
                            ['choice_text' => 'El sábado pasado fue muy tranquilo.', 'is_correct' => true],
                            ['choice_text' => 'Sábado pasado fue muy tranquilidad.', 'is_correct' => false],
                            ['choice_text' => 'El pasado sábado muy tranquilo fue es.', 'is_correct' => false],
                            ['choice_text' => 'El sábado pasado estar muy tranquilo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence gives a clear topic and uses the past description naturally.',
                    ],
                    [
                        'question' => 'Which message is clearest when giving directions to a friend?',
                        'choices' => [
                            ['choice_text' => 'Gira a la derecha y sigue todo recto hasta el banco.', 'is_correct' => true],
                            ['choice_text' => 'Derecha gira y banco todo sigue recto.', 'is_correct' => false],
                            ['choice_text' => 'Gira derecho el banco y sigue a.', 'is_correct' => false],
                            ['choice_text' => 'Hasta banco gira derecha todo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The message gives two instructions in a logical order.',
                    ],
                    [
                        'question' => 'Which sentence correctly connects a problem and a result?',
                        'choices' => [
                            ['choice_text' => 'No tengo coche, así que voy en autobús.', 'is_correct' => true],
                            ['choice_text' => 'No tengo coche porque voy en autobús.', 'is_correct' => false],
                            ['choice_text' => 'No coche tengo así voy autobús que.', 'is_correct' => false],
                            ['choice_text' => 'Tengo no coche, voy así que autobús.', 'is_correct' => false],
                        ],
                        'explanation' => '“Así que” introduces the result of the situation.',
                    ],
                    [
                        'question' => 'Which sentence would be suitable for a short travel diary?',
                        'choices' => [
                            ['choice_text' => 'Hoy visitamos el museo y después comimos en un restaurante pequeño.', 'is_correct' => true],
                            ['choice_text' => 'Hoy museo visitamos después pequeño restaurante comimos.', 'is_correct' => false],
                            ['choice_text' => 'Hoy visitar museo y después comer restaurante.', 'is_correct' => false],
                            ['choice_text' => 'Hoy visitamos el museo y después comíamos mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence naturally presents two completed events in sequence.',
                    ],
                    [
                        'question' => 'Which sentence is best for a short biography?',
                        'choices' => [
                            ['choice_text' => 'Nadia nació en 1998 y estudió en Rabat antes de mudarse a Madrid.', 'is_correct' => true],
                            ['choice_text' => 'Nadia nació 1998 estudió Rabat y Madrid mudarse.', 'is_correct' => false],
                            ['choice_text' => 'Nadia nace en 1998 y estudió Madrid antes.', 'is_correct' => false],
                            ['choice_text' => 'Nadia nació en Rabat 1998 y mudarse estudió.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence gives biographical events in clear chronological order.',
                    ],
                    [
                        'question' => 'Which sentence is most appropriate for a notice about a closed office?',
                        'choices' => [
                            ['choice_text' => 'La oficina estará cerrada el viernes por mantenimiento.', 'is_correct' => true],
                            ['choice_text' => 'La oficina cerrada viernes mantenimiento estará es.', 'is_correct' => false],
                            ['choice_text' => 'Cerrada la oficina viernes por estará.', 'is_correct' => false],
                            ['choice_text' => 'La oficina estará el viernes cerrada mantenimiento por es.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is concise wording suitable for a public notice.',
                    ],
                    [
                        'question' => 'Which message politely asks a friend to call later?',
                        'choices' => [
                            ['choice_text' => '¿Puedes llamarme esta tarde, por favor?', 'is_correct' => true],
                            ['choice_text' => 'Llamarme puedes tarde esta.', 'is_correct' => false],
                            ['choice_text' => '¿Puedes esta llamarme tarde?', 'is_correct' => false],
                            ['choice_text' => 'Llámame por esta tarde puedes.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question is polite and clearly asks for a call later.',
                    ],
                    [
                        'question' => 'Which sentence best summarizes a simple personal opinion?',
                        'choices' => [
                            ['choice_text' => 'En mi opinión, este curso es útil y práctico.', 'is_correct' => true],
                            ['choice_text' => 'Mi opinión en curso útil es práctico.', 'is_correct' => false],
                            ['choice_text' => 'Este curso en mi opinión es útilmente.', 'is_correct' => false],
                            ['choice_text' => 'En opinión mi este curso práctico.', 'is_correct' => false],
                        ],
                        'explanation' => '“En mi opinión” clearly introduces the writer’s viewpoint.',
                    ],
                    [
                        'question' => 'Which final sentence would work well in a short email thanking someone for help?',
                        'choices' => [
                            ['choice_text' => 'Muchas gracias por su tiempo y su ayuda.', 'is_correct' => true],
                            ['choice_text' => 'Gracias mucho su tiempo ayuda por.', 'is_correct' => false],
                            ['choice_text' => 'Su ayuda muchas gracias está.', 'is_correct' => false],
                            ['choice_text' => 'Tiempo y ayuda gracias su mucho.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a natural and polite written thank-you.',
                    ],
                    [
                        'question' => 'Which sentence is correctly written and complete?',
                        'choices' => [
                            ['choice_text' => 'Mañana tengo una reunión importante en la oficina.', 'is_correct' => true],
                            ['choice_text' => 'Mañana una reunión importante.', 'is_correct' => false],
                            ['choice_text' => 'Tengo mañana en oficina importante.', 'is_correct' => false],
                            ['choice_text' => 'Mañana tener una reunión en la oficina.', 'is_correct' => false],
                        ],
                        'explanation' => 'It contains a complete clause, a correctly conjugated verb, and clear time and place information.',
                    ],
                    [
                        'question' => 'Which option would make the best short closing for an informal message to a friend?',
                        'choices' => [
                            ['choice_text' => 'Nos vemos pronto. ¡Cuídate!', 'is_correct' => true],
                            ['choice_text' => 'Saludos cordiales, estimado amigo profesional.', 'is_correct' => false],
                            ['choice_text' => 'Atentamente y gracias por su atención.', 'is_correct' => false],
                            ['choice_text' => 'Quedo atento a su respuesta.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first option matches an informal relationship; the others are more formal.',
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
