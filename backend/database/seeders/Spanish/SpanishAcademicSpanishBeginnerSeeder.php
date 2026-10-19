<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishAcademicSpanishBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'academic-spanish')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les bases de l’espagnol académique',
                'description' => 'Pratiquez l’espagnol de base pour les cours, les matières, les horaires, les étudiants et la vie académique quotidienne.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quelle phrase dit naturellement que vous êtes étudiant à l’université ?',
                        'choices' => [
                            ['choice_text' => 'Soy estudiante universitario.', 'is_correct' => true],
                            ['choice_text' => 'Estoy estudiante universidad.', 'is_correct' => false],
                            ['choice_text' => 'Tengo estudiante universitario.', 'is_correct' => false],
                            ['choice_text' => 'Soy estudiar universidad.', 'is_correct' => false],
                        ],
                        'explanation' => '« Soy estudiante universitario » est une façon naturelle de se présenter comme étudiant à l’université.',
                    ],
                    [
                        'question' => 'Un camarade de classe demande : « ¿Qué estudias ? » Quelle réponse convient ?',
                        'choices' => [
                            ['choice_text' => 'Soy ingeniería.', 'is_correct' => false],
                            ['choice_text' => 'Estudio ingeniería.', 'is_correct' => true],
                            ['choice_text' => 'Tengo ingeniería.', 'is_correct' => false],
                            ['choice_text' => 'Estoy ingeniería.', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿Qué estudias? » demande quelle discipline vous étudiez, donc « Estudio… » est la réponse naturelle.',
                    ],
                    [
                        'question' => 'Quelle expression demande à quelle heure commence un cours ?',
                        'choices' => [
                            ['choice_text' => '¿Qué hora clase empieza?', 'is_correct' => false],
                            ['choice_text' => '¿Cuándo hora la clase?', 'is_correct' => false],
                            ['choice_text' => '¿A qué hora empieza la clase?', 'is_correct' => true],
                            ['choice_text' => '¿A qué empieza hora clase?', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est la structure standard pour demander l’heure de début d’un cours.',
                    ],
                    [
                        'question' => 'Quelle phrase indique correctement qu’un cours a lieu le mardi et le jeudi ?',
                        'choices' => [
                            ['choice_text' => 'El curso está martes y jueves.', 'is_correct' => false],
                            ['choice_text' => 'El curso tiene martes y jueves.', 'is_correct' => false],
                            ['choice_text' => 'El curso son martes y jueves.', 'is_correct' => false],
                            ['choice_text' => 'El curso es los martes y jueves.', 'is_correct' => true],
                        ],
                        'explanation' => '« Es los martes y jueves » décrit naturellement les jours d’un cours récurrent.',
                    ],
                    [
                        'question' => 'Un professeur dit : « Abrimos el libro en la página veinte. » Que doivent faire les élèves ?',
                        'choices' => [
                            ['choice_text' => 'Ouvrir le livre à la page vingt.', 'is_correct' => true],
                            ['choice_text' => 'Écrire « page vingt » au tableau.', 'is_correct' => false],
                            ['choice_text' => 'Fermer le livre.', 'is_correct' => false],
                            ['choice_text' => 'Lire la page deux.', 'is_correct' => false],
                        ],
                        'explanation' => 'La consigne demande aux élèves d’ouvrir leur livre à la page 20.',
                    ],
                    [
                        'question' => 'Quel mot signifie couramment « devoir » ou travail à faire à la maison ?',
                        'choices' => [
                            ['choice_text' => 'recreo', 'is_correct' => false],
                            ['choice_text' => 'tarea', 'is_correct' => true],
                            ['choice_text' => 'oficina', 'is_correct' => false],
                            ['choice_text' => 'viaje', 'is_correct' => false],
                        ],
                        'explanation' => '« Tarea » signifie couramment un devoir ou un travail donné par un enseignant.',
                    ],
                    [
                        'question' => 'Quelle phrase est utile lorsqu’on ne comprend pas la leçon ?',
                        'choices' => [
                            ['choice_text' => 'No entiendo esta parte es.', 'is_correct' => false],
                            ['choice_text' => 'Esta parte no entender yo soy.', 'is_correct' => false],
                            ['choice_text' => 'Yo no esta parte.', 'is_correct' => false],
                            ['choice_text' => 'No entiendo esta parte.', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette phrase simple indique clairement à un professeur ou un camarade que l’on ne comprend pas cette partie.',
                    ],
                    [
                        'question' => 'Un élève veut demander une clarification. Quelle expression est appropriée ?',
                        'choices' => [
                            ['choice_text' => 'Explique tú otra.', 'is_correct' => false],
                            ['choice_text' => 'Otra vez usted explica yo.', 'is_correct' => false],
                            ['choice_text' => '¿Puede explicarlo otra vez, por favor?', 'is_correct' => true],
                            ['choice_text' => '¿Qué explica otra vez?', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une façon polie de demander à un professeur ou un camarade de réexpliquer quelque chose.',
                    ],
                    [
                        'question' => 'Quelle phrase indique correctement qu’un examen a lieu la semaine prochaine ?',
                        'choices' => [
                            ['choice_text' => 'El examen está próxima semana.', 'is_correct' => false],
                            ['choice_text' => 'El examen es la próxima semana.', 'is_correct' => true],
                            ['choice_text' => 'El examen tiene la próxima semana.', 'is_correct' => false],
                            ['choice_text' => 'El examen será de próxima semana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Es la próxima semana » est une façon naturelle de donner la date prévue d’un événement.',
                    ],
                    [
                        'question' => 'Quelle expression un élève peut-il utiliser pour dire « j’ai besoin de plus de temps » ?',
                        'choices' => [
                            ['choice_text' => 'Tengo más tiempo necesito.', 'is_correct' => false],
                            ['choice_text' => 'Soy más tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Necesito más tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Más tiempo estoy.', 'is_correct' => false],
                        ],
                        'explanation' => '« Necesito más tiempo » exprime directement le besoin de temps supplémentaire.',
                    ],
                ],
            ],
            [
                'title' => 'Communication en classe',
                'description' => 'Pratiquez un espagnol utile pour poser des questions, participer en classe, travailler avec des camarades et suivre des consignes.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelle question demande poliment à un professeur de répéter une consigne ?',
                        'choices' => [
                            ['choice_text' => '¿Repetir puede usted instrucción?', 'is_correct' => false],
                            ['choice_text' => '¿Qué repetir la instrucción?', 'is_correct' => false],
                            ['choice_text' => 'Repite usted la instrucción ahora.', 'is_correct' => false],
                            ['choice_text' => '¿Puede repetir la instrucción, por favor?', 'is_correct' => true],
                        ],
                        'explanation' => 'C’est une demande claire et polie en contexte scolaire.',
                    ],
                    [
                        'question' => 'Vous voulez demander le sens d’un mot. Quelle question convient le mieux ?',
                        'choices' => [
                            ['choice_text' => '¿Qué palabra significa esta?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo palabra esta?', 'is_correct' => false],
                            ['choice_text' => '¿Qué significa esta palabra?', 'is_correct' => true],
                            ['choice_text' => '¿Qué es significa palabra?', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est la question standard, de niveau débutant, pour demander ce que signifie un mot.',
                    ],
                    [
                        'question' => 'Un professeur dit : « Trabajen en parejas. » Que doivent faire les élèves ?',
                        'choices' => [
                            ['choice_text' => 'Travailler seuls.', 'is_correct' => false],
                            ['choice_text' => 'Travailler en binômes.', 'is_correct' => true],
                            ['choice_text' => 'Quitter la salle de classe.', 'is_correct' => false],
                            ['choice_text' => 'Passer un examen.', 'is_correct' => false],
                        ],
                        'explanation' => '« Trabajen en parejas » demande aux élèves de travailler avec un autre élève.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour demander à emprunter le stylo d’un camarade ?',
                        'choices' => [
                            ['choice_text' => '¿Me prestas tu bolígrafo, por favor?', 'is_correct' => true],
                            ['choice_text' => '¿Tu bolígrafo me prestas yo?', 'is_correct' => false],
                            ['choice_text' => '¿Puedo tu bolígrafo tienes?', 'is_correct' => false],
                            ['choice_text' => 'Prestando tu bolígrafo soy.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une demande naturelle et polie pour emprunter un stylo.',
                    ],
                    [
                        'question' => 'Quelle expression est utile pour prendre part à une discussion ?',
                        'choices' => [
                            ['choice_text' => 'Creo que...', 'is_correct' => true],
                            ['choice_text' => 'Hasta luego...', 'is_correct' => false],
                            ['choice_text' => 'Buenos viajes...', 'is_correct' => false],
                            ['choice_text' => 'Tengo sueño...', 'is_correct' => false],
                        ],
                        'explanation' => '« Creo que… » est une façon utile d’introduire une opinion ou une idée.',
                    ],
                    [
                        'question' => 'Un élève veut être d’accord avec un camarade. Quelle réponse convient ?',
                        'choices' => [
                            ['choice_text' => 'Estoy acuerdo.', 'is_correct' => false],
                            ['choice_text' => 'Soy de acuerdo.', 'is_correct' => false],
                            ['choice_text' => 'Tengo acuerdo.', 'is_correct' => false],
                            ['choice_text' => 'Estoy de acuerdo.', 'is_correct' => true],
                        ],
                        'explanation' => 'L’expression standard pour marquer son accord est « Estoy de acuerdo. »',
                    ],
                    [
                        'question' => 'Quelle phrase exprime poliment un désaccord avec une idée ?',
                        'choices' => [
                            ['choice_text' => 'No soy de acuerdo.', 'is_correct' => false],
                            ['choice_text' => 'No acuerdo estoy.', 'is_correct' => false],
                            ['choice_text' => 'No estoy de acuerdo del todo.', 'is_correct' => true],
                            ['choice_text' => 'Yo no idea.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une façon polie d’exprimer un désaccord sans paraître inutilement brusque.',
                    ],
                    [
                        'question' => 'Quelle question demande l’opinion d’un camarade ?',
                        'choices' => [
                            ['choice_text' => '¿Qué opinión eres?', 'is_correct' => false],
                            ['choice_text' => '¿Qué opinas?', 'is_correct' => true],
                            ['choice_text' => '¿Cómo opinas tú eres?', 'is_correct' => false],
                            ['choice_text' => '¿Cuál opinas?', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿Qué opinas? » est une façon simple et naturelle de demander l’opinion de quelqu’un.',
                    ],
                    [
                        'question' => 'Un professeur demande : « ¿Quién quiere responder? » Que veut savoir le professeur ?',
                        'choices' => [
                            ['choice_text' => 'Qui veut répondre ?', 'is_correct' => true],
                            ['choice_text' => 'Qui a terminé le cours ?', 'is_correct' => false],
                            ['choice_text' => 'Qui est absent ?', 'is_correct' => false],
                            ['choice_text' => 'Qui a besoin d’un livre.', 'is_correct' => false],
                        ],
                        'explanation' => 'La question demande quel élève souhaite répondre.',
                    ],
                    [
                        'question' => 'Un élève veut demander la permission de sortir un instant. Quelle phrase est appropriée ?',
                        'choices' => [
                            ['choice_text' => '¿Puedo usted salir?', 'is_correct' => false],
                            ['choice_text' => 'Salir puedo un momento usted.', 'is_correct' => false],
                            ['choice_text' => '¿Puedo salir un momento, por favor?', 'is_correct' => true],
                            ['choice_text' => '¿Tengo salir momento?', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une demande polie, en classe, pour obtenir une autorisation.',
                    ],
                    [
                        'question' => 'Quelle expression est utile avant de donner un exemple en classe ?',
                        'choices' => [
                            ['choice_text' => 'Por ejemplo, adiós ahora.', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo, podemos usar este caso.', 'is_correct' => true],
                            ['choice_text' => 'Este caso por ejemplo es no.', 'is_correct' => false],
                            ['choice_text' => 'Podemos ejemplo por usar.', 'is_correct' => false],
                        ],
                        'explanation' => '« Por ejemplo » est un connecteur standard pour introduire un exemple.',
                    ],
                ],
            ],
            [
                'title' => 'Devoirs, étude et bases de la recherche',
                'description' => 'Apprenez un vocabulaire académique pratique pour les devoirs, les notes de cours, les sources, les délais, de petites recherches et les tâches d’étude.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase signifie qu’un devoir est à rendre demain ?',
                        'choices' => [
                            ['choice_text' => 'La tarea es por mañana.', 'is_correct' => false],
                            ['choice_text' => 'La tarea es para mañana.', 'is_correct' => true],
                            ['choice_text' => 'La tarea está mañana.', 'is_correct' => false],
                            ['choice_text' => 'La tarea tiene mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Para mañana » indique une échéance ou un moment prévu pour terminer quelque chose.',
                    ],
                    [
                        'question' => 'Quelle phrase dit que vous êtes en train de prendre des notes ?',
                        'choices' => [
                            ['choice_text' => 'Soy tomando apuntes.', 'is_correct' => false],
                            ['choice_text' => 'Tengo tomando apuntes.', 'is_correct' => false],
                            ['choice_text' => 'Estoy tomando apuntes.', 'is_correct' => true],
                            ['choice_text' => 'Tomo estoy apuntes.', 'is_correct' => false],
                        ],
                        'explanation' => '« Estoy tomando apuntes » est une expression naturelle pour dire que l’on prend des notes à ce moment-là.',
                    ],
                    [
                        'question' => 'Quel mot désigne couramment les « notes » prises pendant un cours ?',
                        'choices' => [
                            ['choice_text' => 'apuntes', 'is_correct' => true],
                            ['choice_text' => 'cuadernos', 'is_correct' => false],
                            ['choice_text' => 'exámenes', 'is_correct' => false],
                            ['choice_text' => 'recreos', 'is_correct' => false],
                        ],
                        'explanation' => '« Apuntes » désigne les notes écrites pendant une leçon ou lors de l’étude.',
                    ],
                    [
                        'question' => 'Quelle phrase est utile pour demander à un professeur une échéance ?',
                        'choices' => [
                            ['choice_text' => '¿Cuándo trabajo hay entregar?', 'is_correct' => false],
                            ['choice_text' => '¿Qué entregar cuándo trabajo es?', 'is_correct' => false],
                            ['choice_text' => '¿Hay trabajo cuándo que?', 'is_correct' => false],
                            ['choice_text' => '¿Cuándo hay que entregar el trabajo?', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette question demande naturellement quand le devoir doit être remis.',
                    ],
                    [
                        'question' => 'Quelle phrase est utile pour commencer une petite recherche ?',
                        'choices' => [
                            ['choice_text' => 'Voy buscar información tema es.', 'is_correct' => false],
                            ['choice_text' => 'Información voy sobre tema buscar.', 'is_correct' => false],
                            ['choice_text' => 'Voy a buscar información sobre el tema.', 'is_correct' => true],
                            ['choice_text' => 'Estoy información buscar tema.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase exprime clairement l’intention de chercher des informations sur le sujet.',
                    ],
                    [
                        'question' => 'Un professeur dit : « Consulten varias fuentes. » Que doivent faire les élèves ?',
                        'choices' => [
                            ['choice_text' => 'Consulter plusieurs sources.', 'is_correct' => true],
                            ['choice_text' => 'N’écrire qu’une seule phrase.', 'is_correct' => false],
                            ['choice_text' => 'Fermer les livres.', 'is_correct' => false],
                            ['choice_text' => 'Ignorer la recherche.', 'is_correct' => false],
                        ],
                        'explanation' => '« Consultar fuentes » signifie consulter ou utiliser des informations issues de sources.',
                    ],
                    [
                        'question' => 'Quelle expression introduit la source d’une information ?',
                        'choices' => [
                            ['choice_text' => 'Hasta el artículo,', 'is_correct' => false],
                            ['choice_text' => 'Según el artículo,', 'is_correct' => true],
                            ['choice_text' => 'Con el artículo,', 'is_correct' => false],
                            ['choice_text' => 'Por el artículo solamente,', 'is_correct' => false],
                        ],
                        'explanation' => '« Según… » signifie « selon… » et est utile pour renvoyer à une source.',
                    ],
                    [
                        'question' => 'Quelle phrase demande si un devoir peut être rendu en ligne ?',
                        'choices' => [
                            ['choice_text' => '¿Puedo en línea trabajo?', 'is_correct' => false],
                            ['choice_text' => '¿El trabajo puedo línea entregar es?', 'is_correct' => false],
                            ['choice_text' => '¿Entregar puedo trabajo línea yo?', 'is_correct' => false],
                            ['choice_text' => '¿Puedo entregar el trabajo en línea?', 'is_correct' => true],
                        ],
                        'explanation' => 'C’est une question claire, de niveau débutant, sur le mode de remise.',
                    ],
                    [
                        'question' => 'Quelle phrase est utile pour planifier du temps d’étude ?',
                        'choices' => [
                            ['choice_text' => 'Voy a estudiar tarde una hora es.', 'is_correct' => false],
                            ['choice_text' => 'Estudiar una hora soy esta tarde.', 'is_correct' => false],
                            ['choice_text' => 'Tengo estudiar una hora.', 'is_correct' => false],
                            ['choice_text' => 'Voy a estudiar una hora esta tarde.', 'is_correct' => true],
                        ],
                        'explanation' => '« Voy a + infinitif » est une façon naturelle de parler d’une activité d’étude prévue.',
                    ],
                    [
                        'question' => 'Quelle expression est utile pour désigner l’idée principale d’un texte ?',
                        'choices' => [
                            ['choice_text' => 'La idea es principal de...', 'is_correct' => false],
                            ['choice_text' => 'La idea principal es...', 'is_correct' => true],
                            ['choice_text' => 'Principal la idea soy...', 'is_correct' => false],
                            ['choice_text' => 'La principal está idea...', 'is_correct' => false],
                        ],
                        'explanation' => '« La idea principal es… » est utile pour identifier le point central d’un texte.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime un objectif d’étude clair ?',
                        'choices' => [
                            ['choice_text' => 'Quiero vocabulario mejorar este soy.', 'is_correct' => false],
                            ['choice_text' => 'Mi vocabulario este mejorar quiero es.', 'is_correct' => false],
                            ['choice_text' => 'Quiero mejorar mi vocabulario este semestre.', 'is_correct' => true],
                            ['choice_text' => 'Este semestre vocabulario yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase énonce clairement un objectif académique personnel pour le semestre.',
                    ],
                ],
            ],
            [
                'title' => 'Exposés et expression écrite académique',
                'description' => 'Pratiquez le vocabulaire des exposés, l’organisation des idées, la description d’informations et la communication claire en contexte académique.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle introduction convient naturellement à un court exposé en classe ?',
                        'choices' => [
                            ['choice_text' => 'Buenos días. Hoy hablar medio ambiente yo soy.', 'is_correct' => false],
                            ['choice_text' => 'Buenos días. Hoy voy a hablar sobre el medio ambiente.', 'is_correct' => true],
                            ['choice_text' => 'Hoy soy una presentación medio ambiente.', 'is_correct' => false],
                            ['choice_text' => 'Buenos días, el medio ambiente hablar es yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase donne une salutation polie et annonce clairement le sujet de l’exposé.',
                    ],
                    [
                        'question' => 'Quelle expression est utile pour présenter le premier point ?',
                        'choices' => [
                            ['choice_text' => 'Adiós,', 'is_correct' => false],
                            ['choice_text' => 'En cambio solamente,', 'is_correct' => false],
                            ['choice_text' => 'Primero,', 'is_correct' => true],
                            ['choice_text' => 'Hasta mañana,', 'is_correct' => false],
                        ],
                        'explanation' => '« Primero » organise l’exposé en présentant le premier point.',
                    ],
                    [
                        'question' => 'Quelle expression peut introduire un deuxième point lié au premier ?',
                        'choices' => [
                            ['choice_text' => 'Además,', 'is_correct' => true],
                            ['choice_text' => 'Buenos días,', 'is_correct' => false],
                            ['choice_text' => 'Por último solamente,', 'is_correct' => false],
                            ['choice_text' => 'Perdón,', 'is_correct' => false],
                        ],
                        'explanation' => '« Además » ajoute une autre idée en lien avec la précédente.',
                    ],
                    [
                        'question' => 'Quelle expression introduit un exemple pendant un exposé ?',
                        'choices' => [
                            ['choice_text' => 'Hasta luego,', 'is_correct' => false],
                            ['choice_text' => 'En mi examen,', 'is_correct' => false],
                            ['choice_text' => 'Gracias de nada,', 'is_correct' => false],
                            ['choice_text' => 'Por ejemplo,', 'is_correct' => true],
                        ],
                        'explanation' => '« Por ejemplo » signale qu’un exemple concret va suivre.',
                    ],
                    [
                        'question' => 'Quelle phrase est utile pour commenter un graphique ou un résultat simple ?',
                        'choices' => [
                            ['choice_text' => 'Este gráfico muestra que las ventas aumentaron.', 'is_correct' => true],
                            ['choice_text' => 'Este gráfico vender muestra.', 'is_correct' => false],
                            ['choice_text' => 'Las ventas gráfico son aumentó.', 'is_correct' => false],
                            ['choice_text' => 'Este gráfico está ventas mostrar.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase indique clairement ce que montre le graphique et énonce le résultat.',
                    ],
                    [
                        'question' => 'Quelle expression aide à introduire un contraste ?',
                        'choices' => [
                            ['choice_text' => 'Además,', 'is_correct' => false],
                            ['choice_text' => 'Primero,', 'is_correct' => false],
                            ['choice_text' => 'Sin embargo,', 'is_correct' => true],
                            ['choice_text' => 'Por ejemplo,', 'is_correct' => false],
                        ],
                        'explanation' => '« Sin embargo » signale que l’idée suivante contraste avec la précédente.',
                    ],
                    [
                        'question' => 'Quelle phrase résume naturellement un exposé ?',
                        'choices' => [
                            ['choice_text' => 'En resumen, primero saludo otra vez.', 'is_correct' => false],
                            ['choice_text' => 'Podemos resumen ser tres.', 'is_correct' => false],
                            ['choice_text' => 'En resumen, adiós profesor.', 'is_correct' => false],
                            ['choice_text' => 'En resumen, podemos destacar tres ideas principales.', 'is_correct' => true],
                        ],
                        'explanation' => '« En resumen » introduit un résumé concis des idées principales.',
                    ],
                    [
                        'question' => 'Quelle expression est utile avant de répondre à une question après un exposé ?',
                        'choices' => [
                            ['choice_text' => 'No pregunta.', 'is_correct' => false],
                            ['choice_text' => 'Claro, con mucho gusto.', 'is_correct' => true],
                            ['choice_text' => 'Pregunta no sé.', 'is_correct' => false],
                            ['choice_text' => 'Claro de presentación.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une façon polie d’accepter une question du public.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour énoncer une conclusion académique simple ?',
                        'choices' => [
                            ['choice_text' => 'En conclusión, estos resultados muestran una tendencia clara.', 'is_correct' => true],
                            ['choice_text' => 'En conclusión, mi casa tiene dos ventanas.', 'is_correct' => false],
                            ['choice_text' => 'Estos resultados, adiós.', 'is_correct' => false],
                            ['choice_text' => 'La tendencia conclusión es yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une conclusion doit résumer ce que les informations indiquent.',
                    ],
                    [
                        'question' => 'Quelle formule de clôture est naturelle à la fin d’un court exposé ?',
                        'choices' => [
                            ['choice_text' => 'Gracias de atención su.', 'is_correct' => false],
                            ['choice_text' => 'Atención muchas gracias ustedes son.', 'is_correct' => false],
                            ['choice_text' => 'Muchas gracias por su atención.', 'is_correct' => true],
                            ['choice_text' => 'Por atención, gracias su.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une formule de clôture polie et courante pour un exposé académique ou professionnel.',
                    ],
                ],
            ],
            [
                'title' => 'Révision intégrée de l’espagnol académique',
                'description' => 'Combinez interaction en classe, devoirs, exposés, gestion du temps et communication d’étude dans des situations académiques réalistes pour débutants.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Un camarade demande : « ¿Cuándo tenemos que entregar el proyecto? » Quelle est la meilleure réponse ?',
                        'choices' => [
                            ['choice_text' => 'El proyecto está viernes.', 'is_correct' => false],
                            ['choice_text' => 'Tenemos proyecto entregar es.', 'is_correct' => false],
                            ['choice_text' => 'El viernes antes de las cinco.', 'is_correct' => true],
                            ['choice_text' => 'Antes de cinco somos viernes.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réponse directe avec jour et heure donne clairement l’échéance du devoir.',
                    ],
                    [
                        'question' => 'Votre professeur vous demande d’expliquer votre point principal. Quelle expression est utile ?',
                        'choices' => [
                            ['choice_text' => 'La principal idea soy que...', 'is_correct' => false],
                            ['choice_text' => 'Es que principal la idea yo.', 'is_correct' => false],
                            ['choice_text' => 'Tengo principal idea que es.', 'is_correct' => false],
                            ['choice_text' => 'La idea principal es que...', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette expression introduit naturellement l’idée centrale d’une explication.',
                    ],
                    [
                        'question' => 'Vous voulez demander ses notes à un camarade. Quelle phrase est appropriée ?',
                        'choices' => [
                            ['choice_text' => '¿Puedes tus apuntes me?', 'is_correct' => false],
                            ['choice_text' => '¿Me puedes prestar tus apuntes?', 'is_correct' => true],
                            ['choice_text' => 'Tus apuntes prestar tú soy.', 'is_correct' => false],
                            ['choice_text' => '¿Me prestas tú apuntes puedes?', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une demande naturelle et polie pour emprunter les notes de quelqu’un.',
                    ],
                    [
                        'question' => 'Vous présentez un projet et devez passer au point suivant. Quelle expression convient ?',
                        'choices' => [
                            ['choice_text' => 'Ahora, pasemos al segundo punto.', 'is_correct' => true],
                            ['choice_text' => 'Ahora segundo punto pasamos es.', 'is_correct' => false],
                            ['choice_text' => 'Pasar ahora yo punto segundo.', 'is_correct' => false],
                            ['choice_text' => 'El segundo punto ahora soy.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pasemos al segundo punto » est une transition naturelle dans un exposé.',
                    ],
                    [
                        'question' => 'Quelle phrase énonce correctement un plan d’étude ?',
                        'choices' => [
                            ['choice_text' => 'Esta noche voy a revisar mis apuntes y preparar el examen.', 'is_correct' => true],
                            ['choice_text' => 'Esta noche revisar mis apuntes voy examen.', 'is_correct' => false],
                            ['choice_text' => 'Voy esta noche examen preparar mis apuntes es.', 'is_correct' => false],
                            ['choice_text' => 'Mis apuntes esta noche son revisar.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase donne un plan clair en utilisant « voy a + infinitif ».',
                    ],
                    [
                        'question' => 'Un professeur demande : « ¿Quién puede explicar este concepto? » Vous voulez vous proposer. Que dire naturellement ?',
                        'choices' => [
                            ['choice_text' => 'Yo soy explicarlo.', 'is_correct' => false],
                            ['choice_text' => 'Puedo yo concepto es.', 'is_correct' => false],
                            ['choice_text' => 'Yo puedo explicarlo.', 'is_correct' => true],
                            ['choice_text' => 'Yo explicar puedo es.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase propose clairement d’expliquer le concept.',
                    ],
                    [
                        'question' => 'Vous n’êtes pas sûr qu’une source soit fiable. Quelle phrase est une réponse académique utile ?',
                        'choices' => [
                            ['choice_text' => 'La fuente es primero comprobar yo.', 'is_correct' => false],
                            ['choice_text' => 'Primero, debemos comprobar la fuente.', 'is_correct' => true],
                            ['choice_text' => 'Comprobar fuente primero es soy.', 'is_correct' => false],
                            ['choice_text' => 'Primero la fuente debemos.', 'is_correct' => false],
                        ],
                        'explanation' => 'Vérifier la source est une démarche de recherche élémentaire sensée, et la phrase est clairement construite.',
                    ],
                    [
                        'question' => 'Quelle phrase demande poliment à un professeur un retour sur son travail ?',
                        'choices' => [
                            ['choice_text' => '¿Puede mi trabajo comentario yo?', 'is_correct' => false],
                            ['choice_text' => 'Comentario usted puede trabajo.', 'is_correct' => false],
                            ['choice_text' => '¿Mi trabajo dar puede comentario?', 'is_correct' => false],
                            ['choice_text' => '¿Podría darme algún comentario sobre mi trabajo?', 'is_correct' => true],
                        ],
                        'explanation' => 'C’est une demande académique polie pour obtenir un retour.',
                    ],
                    [
                        'question' => 'Quelle expression est utile pour résumer une discussion en groupe ?',
                        'choices' => [
                            ['choice_text' => 'En resumen, dos puntos yo profesor.', 'is_correct' => false],
                            ['choice_text' => 'Resumen estamos dos de acuerdo soy.', 'is_correct' => false],
                            ['choice_text' => 'Estamos de acuerdo resumen dos yo.', 'is_correct' => false],
                            ['choice_text' => 'En resumen, estamos de acuerdo en dos puntos principales.', 'is_correct' => true],
                        ],
                        'explanation' => '« En resumen » introduit naturellement une formulation concise de la conclusion principale du groupe.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour demander un délai supplémentaire ?',
                        'choices' => [
                            ['choice_text' => '¿Puede trabajo lunes ser entregar?', 'is_correct' => false],
                            ['choice_text' => 'El lunes trabajo posible usted.', 'is_correct' => false],
                            ['choice_text' => '¿Sería posible entregar el trabajo el lunes?', 'is_correct' => true],
                            ['choice_text' => 'Entregar trabajo lunes yo sería usted.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une façon polie de demander si une remise plus tardive est possible.',
                    ],
                    [
                        'question' => 'Quelle phrase conclut bien un court courriel académique ?',
                        'choices' => [
                            ['choice_text' => 'Gracias tiempo su respuesta yo adiós.', 'is_correct' => false],
                            ['choice_text' => 'Muchas gracias por su tiempo. Quedo atento a su respuesta.', 'is_correct' => true],
                            ['choice_text' => 'Quedo respuesta gracias tiempo es.', 'is_correct' => false],
                            ['choice_text' => 'Su tiempo atento gracias yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle remercie le destinataire et indique poliment que l’on attend sa réponse.',
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
