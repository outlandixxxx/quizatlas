<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AcademicSpanishBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'academic-spanish')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Academic Spanish Foundations',
                'description' => 'Practice basic Spanish for classes, subjects, schedules, students, and everyday academic life.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Which sentence naturally says that you are a university student?',
                        'choices' => [
                            ['choice_text' => 'Soy estudiante universitario.', 'is_correct' => true],
                            ['choice_text' => 'Estoy estudiante universidad.', 'is_correct' => false],
                            ['choice_text' => 'Tengo estudiante universitario.', 'is_correct' => false],
                            ['choice_text' => 'Soy estudiar universidad.', 'is_correct' => false],
                        ],
                        'explanation' => '“Soy estudiante universitario” is a natural way to identify yourself as a university student.',
                    ],
                    [
                        'question' => 'A classmate asks, “¿Qué estudias?” Which answer fits?',
                        'choices' => [
                            ['choice_text' => 'Estudio ingeniería.', 'is_correct' => true],
                            ['choice_text' => 'Soy ingeniería.', 'is_correct' => false],
                            ['choice_text' => 'Tengo ingeniería.', 'is_correct' => false],
                            ['choice_text' => 'Estoy ingeniería.', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Qué estudias?” asks what field or subject you study, so “Estudio…” is the natural answer.',
                    ],
                    [
                        'question' => 'Which phrase asks when a class starts?',
                        'choices' => [
                            ['choice_text' => '¿A qué hora empieza la clase?', 'is_correct' => true],
                            ['choice_text' => '¿Qué hora clase empieza?', 'is_correct' => false],
                            ['choice_text' => '¿Cuándo hora la clase?', 'is_correct' => false],
                            ['choice_text' => '¿A qué empieza hora clase?', 'is_correct' => false],
                        ],
                        'explanation' => 'This is the standard beginner structure for asking the start time of a class.',
                    ],
                    [
                        'question' => 'Which sentence correctly says that a course is on Tuesday and Thursday?',
                        'choices' => [
                            ['choice_text' => 'El curso es los martes y jueves.', 'is_correct' => true],
                            ['choice_text' => 'El curso está martes y jueves.', 'is_correct' => false],
                            ['choice_text' => 'El curso tiene martes y jueves.', 'is_correct' => false],
                            ['choice_text' => 'El curso son martes y jueves.', 'is_correct' => false],
                        ],
                        'explanation' => '“Es los martes y jueves” naturally describes the days of a recurring course.',
                    ],
                    [
                        'question' => 'A teacher says, “Abrimos el libro en la página veinte.” What should students do?',
                        'choices' => [
                            ['choice_text' => 'Open the book to page twenty.', 'is_correct' => true],
                            ['choice_text' => 'Write page twenty on the board.', 'is_correct' => false],
                            ['choice_text' => 'Close the book.', 'is_correct' => false],
                            ['choice_text' => 'Read page two.', 'is_correct' => false],
                        ],
                        'explanation' => 'The instruction tells students to open their book at page 20.',
                    ],
                    [
                        'question' => 'Which word commonly means “assignment” or homework?',
                        'choices' => [
                            ['choice_text' => 'tarea', 'is_correct' => true],
                            ['choice_text' => 'recreo', 'is_correct' => false],
                            ['choice_text' => 'oficina', 'is_correct' => false],
                            ['choice_text' => 'viaje', 'is_correct' => false],
                        ],
                        'explanation' => '“Tarea” commonly means homework or an assignment given by a teacher.',
                    ],
                    [
                        'question' => 'Which sentence is useful when you do not understand the lesson?',
                        'choices' => [
                            ['choice_text' => 'No entiendo esta parte.', 'is_correct' => true],
                            ['choice_text' => 'No entiendo esta parte es.', 'is_correct' => false],
                            ['choice_text' => 'Esta parte no entender yo soy.', 'is_correct' => false],
                            ['choice_text' => 'Yo no esta parte.', 'is_correct' => false],
                        ],
                        'explanation' => 'This simple sentence clearly tells a teacher or classmate that you do not understand that part.',
                    ],
                    [
                        'question' => 'A student wants to ask for clarification. Which phrase is appropriate?',
                        'choices' => [
                            ['choice_text' => '¿Puede explicarlo otra vez, por favor?', 'is_correct' => true],
                            ['choice_text' => 'Explique tú otra.', 'is_correct' => false],
                            ['choice_text' => 'Otra vez usted explica yo.', 'is_correct' => false],
                            ['choice_text' => '¿Qué explica otra vez?', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a polite way to ask a teacher or classmate to explain something again.',
                    ],
                    [
                        'question' => 'Which sentence correctly says that an exam is next week?',
                        'choices' => [
                            ['choice_text' => 'El examen es la próxima semana.', 'is_correct' => true],
                            ['choice_text' => 'El examen está próxima semana.', 'is_correct' => false],
                            ['choice_text' => 'El examen tiene la próxima semana.', 'is_correct' => false],
                            ['choice_text' => 'El examen será de próxima semana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Es la próxima semana” is a natural way to give the scheduled time of an event.',
                    ],
                    [
                        'question' => 'Which phrase can a student use to say “I need more time”?',
                        'choices' => [
                            ['choice_text' => 'Necesito más tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Tengo más tiempo necesito.', 'is_correct' => false],
                            ['choice_text' => 'Soy más tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Más tiempo estoy.', 'is_correct' => false],
                        ],
                        'explanation' => '“Necesito más tiempo” directly communicates the need for extra time.',
                    ],
                ],
            ],
            [
                'title' => 'Classroom Communication',
                'description' => 'Practice useful Spanish for asking questions, participating in class, working with classmates, and following instructions.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Which question politely asks a teacher to repeat an instruction?',
                        'choices' => [
                            ['choice_text' => '¿Puede repetir la instrucción, por favor?', 'is_correct' => true],
                            ['choice_text' => '¿Repetir puede usted instrucción?', 'is_correct' => false],
                            ['choice_text' => '¿Qué repetir la instrucción?', 'is_correct' => false],
                            ['choice_text' => 'Repite usted la instrucción ahora.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a clear and polite classroom request.',
                    ],
                    [
                        'question' => 'You want to ask for the meaning of a word. Which question is best?',
                        'choices' => [
                            ['choice_text' => '¿Qué significa esta palabra?', 'is_correct' => true],
                            ['choice_text' => '¿Qué palabra significa esta?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo palabra esta?', 'is_correct' => false],
                            ['choice_text' => '¿Qué es significa palabra?', 'is_correct' => false],
                        ],
                        'explanation' => 'This is the standard beginner question for asking what a word means.',
                    ],
                    [
                        'question' => 'A teacher says, “Trabajen en parejas.” What should students do?',
                        'choices' => [
                            ['choice_text' => 'Work in pairs.', 'is_correct' => true],
                            ['choice_text' => 'Work alone.', 'is_correct' => false],
                            ['choice_text' => 'Leave the classroom.', 'is_correct' => false],
                            ['choice_text' => 'Take an exam.', 'is_correct' => false],
                        ],
                        'explanation' => '“Trabajen en parejas” tells students to work with another student.',
                    ],
                    [
                        'question' => 'Which sentence is appropriate when asking to borrow a classmate\'s pen?',
                        'choices' => [
                            ['choice_text' => '¿Me prestas tu bolígrafo, por favor?', 'is_correct' => true],
                            ['choice_text' => '¿Tu bolígrafo me prestas yo?', 'is_correct' => false],
                            ['choice_text' => '¿Puedo tu bolígrafo tienes?', 'is_correct' => false],
                            ['choice_text' => 'Prestando tu bolígrafo soy.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a natural and polite request to borrow a pen.',
                    ],
                    [
                        'question' => 'Which phrase is useful for joining a discussion?',
                        'choices' => [
                            ['choice_text' => 'Creo que...', 'is_correct' => true],
                            ['choice_text' => 'Hasta luego...', 'is_correct' => false],
                            ['choice_text' => 'Buenos viajes...', 'is_correct' => false],
                            ['choice_text' => 'Tengo sueño...', 'is_correct' => false],
                        ],
                        'explanation' => '“Creo que…” is a useful way to introduce an opinion or idea.',
                    ],
                    [
                        'question' => 'A student wants to agree with a classmate. Which reply fits?',
                        'choices' => [
                            ['choice_text' => 'Estoy de acuerdo.', 'is_correct' => true],
                            ['choice_text' => 'Estoy acuerdo.', 'is_correct' => false],
                            ['choice_text' => 'Soy de acuerdo.', 'is_correct' => false],
                            ['choice_text' => 'Tengo acuerdo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The standard expression for agreement is “Estoy de acuerdo.”',
                    ],
                    [
                        'question' => 'Which sentence politely disagrees with an idea?',
                        'choices' => [
                            ['choice_text' => 'No estoy de acuerdo del todo.', 'is_correct' => true],
                            ['choice_text' => 'No soy de acuerdo.', 'is_correct' => false],
                            ['choice_text' => 'No acuerdo estoy.', 'is_correct' => false],
                            ['choice_text' => 'Yo no idea.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a polite way to express disagreement without sounding unnecessarily harsh.',
                    ],
                    [
                        'question' => 'Which question asks a classmate for their opinion?',
                        'choices' => [
                            ['choice_text' => '¿Qué opinas?', 'is_correct' => true],
                            ['choice_text' => '¿Qué opinión eres?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo opinas tú eres?', 'is_correct' => false],
                            ['choice_text' => '¿Cuál opinas?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Qué opinas?” is a simple, natural way to ask someone\'s opinion.',
                    ],
                    [
                        'question' => 'A teacher asks, “¿Quién quiere responder?” What does the teacher want to know?',
                        'choices' => [
                            ['choice_text' => 'Who wants to answer?', 'is_correct' => true],
                            ['choice_text' => 'Who has finished the course?', 'is_correct' => false],
                            ['choice_text' => 'Who is absent?', 'is_correct' => false],
                            ['choice_text' => 'Who needs a book.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks which student wants to answer.',
                    ],
                    [
                        'question' => 'A student wants to ask for permission to leave briefly. Which sentence is appropriate?',
                        'choices' => [
                            ['choice_text' => '¿Puedo salir un momento, por favor?', 'is_correct' => true],
                            ['choice_text' => '¿Puedo usted salir?', 'is_correct' => false],
                            ['choice_text' => 'Salir puedo un momento usted.', 'is_correct' => false],
                            ['choice_text' => '¿Tengo salir momento?', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a polite classroom request for permission.',
                    ],
                    [
                        'question' => 'Which phrase is useful before giving an example in class?',
                        'choices' => [
                            ['choice_text' => 'Por ejemplo, podemos usar este caso.', 'is_correct' => true],
                            ['choice_text' => 'Por ejemplo, adiós ahora.', 'is_correct' => false],
                            ['choice_text' => 'Este caso por ejemplo es no.', 'is_correct' => false],
                            ['choice_text' => 'Podemos ejemplo por usar.', 'is_correct' => false],
                        ],
                        'explanation' => '“Por ejemplo” is a standard connector for introducing an example.',
                    ],
                ],
            ],
            [
                'title' => 'Assignments, Study, and Research Basics',
                'description' => 'Learn practical academic language for homework, notes, sources, deadlines, simple research, and study tasks.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which phrase means that an assignment is due tomorrow?',
                        'choices' => [
                            ['choice_text' => 'La tarea es para mañana.', 'is_correct' => true],
                            ['choice_text' => 'La tarea es por mañana.', 'is_correct' => false],
                            ['choice_text' => 'La tarea está mañana.', 'is_correct' => false],
                            ['choice_text' => 'La tarea tiene mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Para mañana” indicates a deadline or intended completion time.',
                    ],
                    [
                        'question' => 'Which sentence says that you are taking notes?',
                        'choices' => [
                            ['choice_text' => 'Estoy tomando apuntes.', 'is_correct' => true],
                            ['choice_text' => 'Soy tomando apuntes.', 'is_correct' => false],
                            ['choice_text' => 'Tengo tomando apuntes.', 'is_correct' => false],
                            ['choice_text' => 'Tomo estoy apuntes.', 'is_correct' => false],
                        ],
                        'explanation' => '“Estoy tomando apuntes” is a natural expression for taking notes at the moment.',
                    ],
                    [
                        'question' => 'Which word commonly means “notes” taken during a class?',
                        'choices' => [
                            ['choice_text' => 'apuntes', 'is_correct' => true],
                            ['choice_text' => 'cuadernos', 'is_correct' => false],
                            ['choice_text' => 'exámenes', 'is_correct' => false],
                            ['choice_text' => 'recreos', 'is_correct' => false],
                        ],
                        'explanation' => '“Apuntes” refers to notes written during a lesson or while studying.',
                    ],
                    [
                        'question' => 'Which sentence is useful when asking a teacher about a deadline?',
                        'choices' => [
                            ['choice_text' => '¿Cuándo hay que entregar el trabajo?', 'is_correct' => true],
                            ['choice_text' => '¿Cuándo trabajo hay entregar?', 'is_correct' => false],
                            ['choice_text' => '¿Qué entregar cuándo trabajo es?', 'is_correct' => false],
                            ['choice_text' => '¿Hay trabajo cuándo que?', 'is_correct' => false],
                        ],
                        'explanation' => 'This asks naturally when the assignment must be handed in.',
                    ],
                    [
                        'question' => 'Which phrase is useful when starting a simple research task?',
                        'choices' => [
                            ['choice_text' => 'Voy a buscar información sobre el tema.', 'is_correct' => true],
                            ['choice_text' => 'Voy buscar información tema es.', 'is_correct' => false],
                            ['choice_text' => 'Información voy sobre tema buscar.', 'is_correct' => false],
                            ['choice_text' => 'Estoy información buscar tema.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence clearly expresses a plan to look for information about the topic.',
                    ],
                    [
                        'question' => 'A teacher says, “Consulten varias fuentes.” What should students do?',
                        'choices' => [
                            ['choice_text' => 'Consult several sources.', 'is_correct' => true],
                            ['choice_text' => 'Write only one sentence.', 'is_correct' => false],
                            ['choice_text' => 'Close the books.', 'is_correct' => false],
                            ['choice_text' => 'Skip the research.', 'is_correct' => false],
                        ],
                        'explanation' => '“Consultar fuentes” means to look at or use information from sources.',
                    ],
                    [
                        'question' => 'Which phrase introduces the source of information?',
                        'choices' => [
                            ['choice_text' => 'Según el artículo,', 'is_correct' => true],
                            ['choice_text' => 'Hasta el artículo,', 'is_correct' => false],
                            ['choice_text' => 'Con el artículo,', 'is_correct' => false],
                            ['choice_text' => 'Por el artículo solamente,', 'is_correct' => false],
                        ],
                        'explanation' => '“Según…” means “according to…” and is useful when referring to a source.',
                    ],
                    [
                        'question' => 'Which sentence asks whether an assignment can be submitted online?',
                        'choices' => [
                            ['choice_text' => '¿Puedo entregar el trabajo en línea?', 'is_correct' => true],
                            ['choice_text' => '¿Puedo en línea trabajo?', 'is_correct' => false],
                            ['choice_text' => '¿El trabajo puedo línea entregar es?', 'is_correct' => false],
                            ['choice_text' => '¿Entregar puedo trabajo línea yo?', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a clear beginner question about the method of submission.',
                    ],
                    [
                        'question' => 'Which statement is useful when planning study time?',
                        'choices' => [
                            ['choice_text' => 'Voy a estudiar una hora esta tarde.', 'is_correct' => true],
                            ['choice_text' => 'Voy a estudiar tarde una hora es.', 'is_correct' => false],
                            ['choice_text' => 'Estudiar una hora soy esta tarde.', 'is_correct' => false],
                            ['choice_text' => 'Tengo estudiar una hora.', 'is_correct' => false],
                        ],
                        'explanation' => '“Voy a + infinitive” is a natural way to talk about a planned study activity.',
                    ],
                    [
                        'question' => 'Which phrase is useful for referring to the main idea of a text?',
                        'choices' => [
                            ['choice_text' => 'La idea principal es...', 'is_correct' => true],
                            ['choice_text' => 'La idea es principal de...', 'is_correct' => false],
                            ['choice_text' => 'Principal la idea soy...', 'is_correct' => false],
                            ['choice_text' => 'La principal está idea...', 'is_correct' => false],
                        ],
                        'explanation' => '“La idea principal es…” is useful for identifying the central point of a text.',
                    ],
                    [
                        'question' => 'Which sentence gives a clear study goal?',
                        'choices' => [
                            ['choice_text' => 'Quiero mejorar mi vocabulario este semestre.', 'is_correct' => true],
                            ['choice_text' => 'Quiero vocabulario mejorar este soy.', 'is_correct' => false],
                            ['choice_text' => 'Mi vocabulario este mejorar quiero es.', 'is_correct' => false],
                            ['choice_text' => 'Este semestre vocabulario yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence clearly states a personal academic goal for the semester.',
                    ],
                ],
            ],
            [
                'title' => 'Presentations and Academic Writing',
                'description' => 'Practice language for presentations, organizing ideas, describing information, and communicating clearly in academic settings.',
                'settings' => ['duration' => 25, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which opening is natural for a short class presentation?',
                        'choices' => [
                            ['choice_text' => 'Buenos días. Hoy voy a hablar sobre el medio ambiente.', 'is_correct' => true],
                            ['choice_text' => 'Buenos días. Hoy hablar medio ambiente yo soy.', 'is_correct' => false],
                            ['choice_text' => 'Hoy soy una presentación medio ambiente.', 'is_correct' => false],
                            ['choice_text' => 'Buenos días, el medio ambiente hablar es yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'This gives a polite greeting and clearly introduces the presentation topic.',
                    ],
                    [
                        'question' => 'Which phrase is useful for introducing the first point?',
                        'choices' => [
                            ['choice_text' => 'Primero,', 'is_correct' => true],
                            ['choice_text' => 'Adiós,', 'is_correct' => false],
                            ['choice_text' => 'En cambio solamente,', 'is_correct' => false],
                            ['choice_text' => 'Hasta mañana,', 'is_correct' => false],
                        ],
                        'explanation' => '“Primero” organizes the presentation by introducing the first point.',
                    ],
                    [
                        'question' => 'Which phrase can introduce a second related point?',
                        'choices' => [
                            ['choice_text' => 'Además,', 'is_correct' => true],
                            ['choice_text' => 'Buenos días,', 'is_correct' => false],
                            ['choice_text' => 'Por último solamente,', 'is_correct' => false],
                            ['choice_text' => 'Perdón,', 'is_correct' => false],
                        ],
                        'explanation' => '“Además” adds another related idea to the previous one.',
                    ],
                    [
                        'question' => 'Which phrase introduces an example during a presentation?',
                        'choices' => [
                            ['choice_text' => 'Por ejemplo,', 'is_correct' => true],
                            ['choice_text' => 'Hasta luego,', 'is_correct' => false],
                            ['choice_text' => 'En mi examen,', 'is_correct' => false],
                            ['choice_text' => 'Gracias de nada,', 'is_correct' => false],
                        ],
                        'explanation' => '“Por ejemplo” signals that a concrete example will follow.',
                    ],
                    [
                        'question' => 'Which sentence is useful for explaining a chart or simple result?',
                        'choices' => [
                            ['choice_text' => 'Este gráfico muestra que las ventas aumentaron.', 'is_correct' => true],
                            ['choice_text' => 'Este gráfico vender muestra.', 'is_correct' => false],
                            ['choice_text' => 'Las ventas gráfico son aumentó.', 'is_correct' => false],
                            ['choice_text' => 'Este gráfico está ventas mostrar.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence clearly identifies what the chart shows and states the result.',
                    ],
                    [
                        'question' => 'Which phrase helps introduce a contrast?',
                        'choices' => [
                            ['choice_text' => 'Sin embargo,', 'is_correct' => true],
                            ['choice_text' => 'Además,', 'is_correct' => false],
                            ['choice_text' => 'Primero,', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo,', 'is_correct' => false],
                        ],
                        'explanation' => '“Sin embargo” signals that the next idea contrasts with the previous one.',
                    ],
                    [
                        'question' => 'Which sentence is a natural way to summarize a presentation?',
                        'choices' => [
                            ['choice_text' => 'En resumen, podemos destacar tres ideas principales.', 'is_correct' => true],
                            ['choice_text' => 'En resumen, primero saludo otra vez.', 'is_correct' => false],
                            ['choice_text' => 'Podemos resumen ser tres.', 'is_correct' => false],
                            ['choice_text' => 'En resumen, adiós profesor.', 'is_correct' => false],
                        ],
                        'explanation' => '“En resumen” introduces a concise summary of the main ideas.',
                    ],
                    [
                        'question' => 'Which phrase is useful before answering a question after a presentation?',
                        'choices' => [
                            ['choice_text' => 'Claro, con mucho gusto.', 'is_correct' => true],
                            ['choice_text' => 'No pregunta.', 'is_correct' => false],
                            ['choice_text' => 'Pregunta no sé.', 'is_correct' => false],
                            ['choice_text' => 'Claro de presentación.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a polite way to accept a question from the audience.',
                    ],
                    [
                        'question' => 'Which sentence is appropriate for stating a simple academic conclusion?',
                        'choices' => [
                            ['choice_text' => 'En conclusión, estos resultados muestran una tendencia clara.', 'is_correct' => true],
                            ['choice_text' => 'En conclusión, mi casa tiene dos ventanas.', 'is_correct' => false],
                            ['choice_text' => 'Estos resultados, adiós.', 'is_correct' => false],
                            ['choice_text' => 'La tendencia conclusión es yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'A conclusion should summarize what the information indicates.',
                    ],
                    [
                        'question' => 'Which closing is natural at the end of a short presentation?',
                        'choices' => [
                            ['choice_text' => 'Muchas gracias por su atención.', 'is_correct' => true],
                            ['choice_text' => 'Gracias de atención su.', 'is_correct' => false],
                            ['choice_text' => 'Atención muchas gracias ustedes son.', 'is_correct' => false],
                            ['choice_text' => 'Por atención, gracias su.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a standard polite closing for an academic or professional presentation.',
                    ],
                ],
            ],
            [
                'title' => 'Integrated Academic Spanish Review',
                'description' => 'Combine classroom interaction, assignments, presentations, scheduling, and study communication in realistic beginner academic situations.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'A classmate asks, “¿Cuándo tenemos que entregar el proyecto?” Which answer is best?',
                        'choices' => [
                            ['choice_text' => 'El viernes antes de las cinco.', 'is_correct' => true],
                            ['choice_text' => 'El proyecto está viernes.', 'is_correct' => false],
                            ['choice_text' => 'Tenemos proyecto entregar es.', 'is_correct' => false],
                            ['choice_text' => 'Antes de cinco somos viernes.', 'is_correct' => false],
                        ],
                        'explanation' => 'A direct date-and-time answer clearly gives the assignment deadline.',
                    ],
                    [
                        'question' => 'Your teacher asks you to explain your main point. Which phrase is useful?',
                        'choices' => [
                            ['choice_text' => 'La idea principal es que...', 'is_correct' => true],
                            ['choice_text' => 'La principal idea soy que...', 'is_correct' => false],
                            ['choice_text' => 'Es que principal la idea yo.', 'is_correct' => false],
                            ['choice_text' => 'Tengo principal idea que es.', 'is_correct' => false],
                        ],
                        'explanation' => 'This phrase naturally introduces the central idea of an explanation.',
                    ],
                    [
                        'question' => 'You want to ask a classmate for their notes. Which sentence is appropriate?',
                        'choices' => [
                            ['choice_text' => '¿Me puedes prestar tus apuntes?', 'is_correct' => true],
                            ['choice_text' => '¿Puedes tus apuntes me?', 'is_correct' => false],
                            ['choice_text' => 'Tus apuntes prestar tú soy.', 'is_correct' => false],
                            ['choice_text' => '¿Me prestas tú apuntes puedes?', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a natural polite request to borrow someone\'s notes.',
                    ],
                    [
                        'question' => 'You are presenting a project and need to move to the next point. Which phrase is appropriate?',
                        'choices' => [
                            ['choice_text' => 'Ahora, pasemos al segundo punto.', 'is_correct' => true],
                            ['choice_text' => 'Ahora segundo punto pasamos es.', 'is_correct' => false],
                            ['choice_text' => 'Pasar ahora yo punto segundo.', 'is_correct' => false],
                            ['choice_text' => 'El segundo punto ahora soy.', 'is_correct' => false],
                        ],
                        'explanation' => '“Pasemos al segundo punto” is a natural presentation transition.',
                    ],
                    [
                        'question' => 'Which sentence correctly states a study plan?',
                        'choices' => [
                            ['choice_text' => 'Esta noche voy a revisar mis apuntes y preparar el examen.', 'is_correct' => true],
                            ['choice_text' => 'Esta noche revisar mis apuntes voy examen.', 'is_correct' => false],
                            ['choice_text' => 'Voy esta noche examen preparar mis apuntes es.', 'is_correct' => false],
                            ['choice_text' => 'Mis apuntes esta noche son revisar.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence gives a clear plan using “voy a + infinitive.”',
                    ],
                    [
                        'question' => 'A teacher asks, “¿Quién puede explicar este concepto?” You want to volunteer. What is natural?',
                        'choices' => [
                            ['choice_text' => 'Yo puedo explicarlo.', 'is_correct' => true],
                            ['choice_text' => 'Yo soy explicarlo.', 'is_correct' => false],
                            ['choice_text' => 'Puedo yo concepto es.', 'is_correct' => false],
                            ['choice_text' => 'Yo explicar puedo es.', 'is_correct' => false],
                        ],
                        'explanation' => 'This clearly volunteers to explain the concept.',
                    ],
                    [
                        'question' => 'You are unsure whether a source is reliable. Which sentence is a useful academic response?',
                        'choices' => [
                            ['choice_text' => 'Primero, debemos comprobar la fuente.', 'is_correct' => true],
                            ['choice_text' => 'La fuente es primero comprobar yo.', 'is_correct' => false],
                            ['choice_text' => 'Comprobar fuente primero es soy.', 'is_correct' => false],
                            ['choice_text' => 'Primero la fuente debemos.', 'is_correct' => false],
                        ],
                        'explanation' => 'Checking the source is a sensible basic research step, and the sentence is clearly structured.',
                    ],
                    [
                        'question' => 'Which sentence politely asks a professor for feedback?',
                        'choices' => [
                            ['choice_text' => '¿Podría darme algún comentario sobre mi trabajo?', 'is_correct' => true],
                            ['choice_text' => '¿Puede mi trabajo comentario yo?', 'is_correct' => false],
                            ['choice_text' => 'Comentario usted puede trabajo.', 'is_correct' => false],
                            ['choice_text' => '¿Mi trabajo dar puede comentario?', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a polite academic request for feedback.',
                    ],
                    [
                        'question' => 'Which phrase is useful for summarizing a group discussion?',
                        'choices' => [
                            ['choice_text' => 'En resumen, estamos de acuerdo en dos puntos principales.', 'is_correct' => true],
                            ['choice_text' => 'En resumen, dos puntos yo profesor.', 'is_correct' => false],
                            ['choice_text' => 'Resumen estamos dos de acuerdo soy.', 'is_correct' => false],
                            ['choice_text' => 'Estamos de acuerdo resumen dos yo.', 'is_correct' => false],
                        ],
                        'explanation' => '“En resumen” naturally introduces a concise statement of the group\'s main conclusion.',
                    ],
                    [
                        'question' => 'Which sentence is appropriate when asking for an extension?',
                        'choices' => [
                            ['choice_text' => '¿Sería posible entregar el trabajo el lunes?', 'is_correct' => true],
                            ['choice_text' => '¿Puede trabajo lunes ser entregar?', 'is_correct' => false],
                            ['choice_text' => 'El lunes trabajo posible usted.', 'is_correct' => false],
                            ['choice_text' => 'Entregar trabajo lunes yo sería usted.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a polite way to ask whether a later submission is possible.',
                    ],
                    [
                        'question' => 'Which sentence is a good final line for a short academic email?',
                        'choices' => [
                            ['choice_text' => 'Muchas gracias por su tiempo. Quedo atento a su respuesta.', 'is_correct' => true],
                            ['choice_text' => 'Gracias tiempo su respuesta yo adiós.', 'is_correct' => false],
                            ['choice_text' => 'Quedo respuesta gracias tiempo es.', 'is_correct' => false],
                            ['choice_text' => 'Su tiempo atento gracias yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'It thanks the recipient and politely indicates that you are awaiting a response.',
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
