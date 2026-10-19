<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishWritingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('major_id', Major::where('slug', 'spanish')->firstOrFail()->id)->where('name', 'Writing')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Écrire des phrases espagnoles claires',
                'description' => 'Entraîne-toi à construire des phrases espagnoles simples et correctes, avec un ordre des mots naturel, des verbes, une ponctuation et un vocabulaire du quotidien.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quelle phrase est écrite naturellement ?',
                        'choices' => [
                            ['choice_text' => 'Mi hermana estudia medicina.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermana medicina estudia es.', 'is_correct' => false],
                            ['choice_text' => 'Estudia mi hermana medicina es.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana estudiar medicina.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase utilise un sujet clair, un verbe correctement conjugué et le complément de l’action.',
                    ],
                    [
                        'question' => 'Choisis la meilleure phrase écrite pour « Je vis à Rabat. »',
                        'choices' => [
                            ['choice_text' => 'Vivo Rabat en.', 'is_correct' => false],
                            ['choice_text' => 'Vivo en Rabat.', 'is_correct' => true],
                            ['choice_text' => 'Estoy en Rabat vivo.', 'is_correct' => false],
                            ['choice_text' => 'Tengo Rabat.', 'is_correct' => false],
                        ],
                        'explanation' => '« Vivo en… » est la structure espagnole naturelle pour dire où l’on vit.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement une majuscule au début ?',
                        'choices' => [
                            ['choice_text' => 'mañana tengo una clase.', 'is_correct' => false],
                            ['choice_text' => 'Mañana Tengo una clase.', 'is_correct' => false],
                            ['choice_text' => 'Mañana tengo una clase.', 'is_correct' => true],
                            ['choice_text' => 'mañana Tengo una clase.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une phrase commence par une majuscule, tandis que les mots ordinaires au milieu restent normalement en minuscules.',
                    ],
                    [
                        'question' => 'Quelle phrase a une ponctuation interrogative espagnole correcte ?',
                        'choices' => [
                            ['choice_text' => '¿Cómo estás.', 'is_correct' => false],
                            ['choice_text' => 'Cómo estás?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo estás!', 'is_correct' => false],
                            ['choice_text' => '¿Cómo estás?', 'is_correct' => true],
                        ],
                        'explanation' => 'Les questions en espagnol utilisent un « ¿ » d’ouverture et un « ? » de fermeture autour de la question.',
                    ],
                    [
                        'question' => 'Quelle phrase convient le mieux pour une courte présentation écrite ?',
                        'choices' => [
                            ['choice_text' => 'Me Sara llamo y Casablanca vivo.', 'is_correct' => false],
                            ['choice_text' => 'Sara me llamo, vivo Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Yo Sara y vivo en llamo Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Me llamo Sara y vivo en Casablanca.', 'is_correct' => true],
                        ],
                        'explanation' => 'La phrase relie deux informations personnelles simples avec un ordre des mots naturel et « y ».',
                    ],
                    [
                        'question' => 'Quelle phrase écrit correctement une simple affirmation négative ?',
                        'choices' => [
                            ['choice_text' => 'No los domingos trabajo.', 'is_correct' => false],
                            ['choice_text' => 'No trabajo los domingos.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo no los domingos.', 'is_correct' => false],
                            ['choice_text' => 'No trabajo domingo los.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le marqueur négatif « no » se place avant le verbe conjugué.',
                    ],
                    [
                        'question' => 'Quelle option forme la phrase écrite la plus claire ?',
                        'choices' => [
                            ['choice_text' => 'Carlos fruta compra el mercado en.', 'is_correct' => false],
                            ['choice_text' => 'Compra Carlos en fruta mercado.', 'is_correct' => false],
                            ['choice_text' => 'Carlos compra fruta en el mercado.', 'is_correct' => true],
                            ['choice_text' => 'Carlos comprar fruta mercado.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase présente clairement le sujet, l’action, le complément et le lieu.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un point final ?',
                        'choices' => [
                            ['choice_text' => 'Hoy estudio español.', 'is_correct' => true],
                            ['choice_text' => 'Hoy estudio español', 'is_correct' => false],
                            ['choice_text' => 'Hoy estudio español..', 'is_correct' => false],
                            ['choice_text' => 'Hoy estudio español?', 'is_correct' => false],
                        ],
                        'explanation' => 'Une affirmation simple se termine normalement par un point.',
                    ],
                    [
                        'question' => 'Quelle phrase explique clairement une raison ?',
                        'choices' => [
                            ['choice_text' => 'Ana cansada está porque trabajó es.', 'is_correct' => false],
                            ['choice_text' => 'Porque trabajó Ana cansada.', 'is_correct' => false],
                            ['choice_text' => 'Ana está porque cansada trabajó.', 'is_correct' => false],
                            ['choice_text' => 'Ana está cansada porque trabajó.', 'is_correct' => true],
                        ],
                        'explanation' => 'La phrase énonce d’abord la situation, puis donne la raison avec « porque ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un adjectif ?',
                        'choices' => [
                            ['choice_text' => 'La casa es grande.', 'is_correct' => true],
                            ['choice_text' => 'La casa es grandes.', 'is_correct' => false],
                            ['choice_text' => 'El casa es grande.', 'is_correct' => false],
                            ['choice_text' => 'La casa son grande.', 'is_correct' => false],
                        ],
                        'explanation' => '« Casa » est féminin singulier, et « grande » s’accorde avec lui en nombre.',
                    ],
                ],
            ],
            [
                'title' => 'Messages courts et écriture du quotidien',
                'description' => 'Entraîne-toi à écrire des messages courts et naturels sur des plans, des horaires, des invitations, des excuses, des demandes et des nouvelles.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Tu veux envoyer un texto à un ami pour dire que tu arriveras à huit heures. Quel message est naturel ?',
                        'choices' => [
                            ['choice_text' => 'Yo ocho llego a.', 'is_correct' => false],
                            ['choice_text' => 'Llego a las ocho.', 'is_correct' => true],
                            ['choice_text' => 'Estoy llegar ocho.', 'is_correct' => false],
                            ['choice_text' => 'Llego ocho las.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est un message court, clair et naturel sur une heure d’arrivée.',
                    ],
                    [
                        'question' => 'Tu ne peux pas te rencontrer aujourd’hui et tu veux proposer demain. Quel message fonctionne le mieux ?',
                        'choices' => [
                            ['choice_text' => 'Hoy no puedo mañana nos.', 'is_correct' => false],
                            ['choice_text' => 'No hoy puedo. Mañana ver.', 'is_correct' => false],
                            ['choice_text' => 'Hoy no puedo que mañana.', 'is_correct' => false],
                            ['choice_text' => 'Hoy no puedo. ¿Nos vemos mañana?', 'is_correct' => true],
                        ],
                        'explanation' => 'Le message explique le problème puis propose un autre jour.',
                    ],
                    [
                        'question' => 'Quel message convient pour s’excuser d’être en retard ?',
                        'choices' => [
                            ['choice_text' => 'Perdón por llegar tarde. Llego en diez minutos.', 'is_correct' => true],
                            ['choice_text' => 'Perdón llegar tarde diez.', 'is_correct' => false],
                            ['choice_text' => 'Estoy tarde, perdón por diez.', 'is_correct' => false],
                            ['choice_text' => 'Tarde llegar soy en diez.', 'is_correct' => false],
                        ],
                        'explanation' => 'Il contient à la fois des excuses et une information utile sur l’heure d’arrivée.',
                    ],
                    [
                        'question' => 'Tu veux inviter un ami à dîner. Quel message est naturel ?',
                        'choices' => [
                            ['choice_text' => '¿Quieres conmigo cena esta noche?', 'is_correct' => false],
                            ['choice_text' => 'Cenar quieres conmigo noche.', 'is_correct' => false],
                            ['choice_text' => '¿Quieres cenar conmigo esta noche?', 'is_correct' => true],
                            ['choice_text' => '¿Tú cenar conmigo eres?', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿Quieres + infinitif ? » est une structure naturelle de débutant pour une invitation.',
                    ],
                    [
                        'question' => 'Quel message sonne approprié pour changer l’heure d’une réunion ?',
                        'choices' => [
                            ['choice_text' => 'La reunión cambia cuatro. Tú bien va?', 'is_correct' => false],
                            ['choice_text' => 'Cuatro cambia la reunión es.', 'is_correct' => false],
                            ['choice_text' => 'La reunión a cuatro cambia tú.', 'is_correct' => false],
                            ['choice_text' => 'La reunión cambia a las cuatro. ¿Te va bien?', 'is_correct' => true],
                        ],
                        'explanation' => 'Le message indique la nouvelle heure et demande si elle convient à l’autre personne.',
                    ],
                    [
                        'question' => 'Tu veux dire à un camarade de classe que tu as fini les devoirs. Quel message est clair ?',
                        'choices' => [
                            ['choice_text' => 'Ya terminé el ejercicio.', 'is_correct' => true],
                            ['choice_text' => 'Ya terminar ejercicio soy.', 'is_correct' => false],
                            ['choice_text' => 'Terminé ya el ejercicios.', 'is_correct' => false],
                            ['choice_text' => 'El ejercicio ya terminar.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ya terminé… » communique naturellement que la tâche est terminée.',
                    ],
                    [
                        'question' => 'Quel message demande poliment un fichier ?',
                        'choices' => [
                            ['choice_text' => 'Puedes archivo enviarme.', 'is_correct' => false],
                            ['choice_text' => '¿Puedes enviarme el archivo, por favor?', 'is_correct' => true],
                            ['choice_text' => '¿El archivo puedes?', 'is_correct' => false],
                            ['choice_text' => 'Envíame por favor tú archivo puede.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une demande écrite polie utilisant « ¿Puedes…?, por favor? »',
                    ],
                    [
                        'question' => 'Tu es malade et tu dois dire à ton professeur que tu n’assisteras pas au cours. Quel message est le meilleur ?',
                        'choices' => [
                            ['choice_text' => 'Hola, hoy enfermo no clase puedo.', 'is_correct' => false],
                            ['choice_text' => 'Hoy no puedo clase porque estoy asistencia.', 'is_correct' => false],
                            ['choice_text' => 'Hola, hoy estoy enfermo y no puedo asistir a clase.', 'is_correct' => true],
                            ['choice_text' => 'Hola, asistir no soy clase hoy enfermo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le message donne clairement la raison et la conséquence.',
                    ],
                    [
                        'question' => 'Quel message confirme correctement un rendez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Sí, la cita confirmo viernes diez para.', 'is_correct' => false],
                            ['choice_text' => 'Sí, confirmo la cita para el viernes a las diez.', 'is_correct' => true],
                            ['choice_text' => 'Confirmar la cita lunes a diez soy.', 'is_correct' => false],
                            ['choice_text' => 'El lunes nuestra cita confirmar yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase confirme clairement le rendez-vous et son heure.',
                    ],
                    [
                        'question' => 'Quel court message sonne le plus naturel après avoir reçu de l’aide ?',
                        'choices' => [
                            ['choice_text' => 'Muchas gracias por tu ayuda.', 'is_correct' => true],
                            ['choice_text' => 'Gracias mucho tu ayudar.', 'is_correct' => false],
                            ['choice_text' => 'Mucho gracias para ayudar.', 'is_correct' => false],
                            ['choice_text' => 'Tu ayuda gracias mucho.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une expression de remerciement naturelle et courante.',
                    ],
                    [
                        'question' => 'Tu veux dire à un ami que tu attends dehors. Quel message est clair ?',
                        'choices' => [
                            ['choice_text' => 'Esperando fuera soy.', 'is_correct' => false],
                            ['choice_text' => 'Estoy fuera esperar.', 'is_correct' => false],
                            ['choice_text' => 'Fuera estoy esperando yo soy.', 'is_correct' => false],
                            ['choice_text' => 'Estoy esperando fuera.', 'is_correct' => true],
                        ],
                        'explanation' => 'La phrase communique clairement que tu attends dehors en ce moment.',
                    ],
                ],
            ],
            [
                'title' => 'Descriptions et écriture personnelle',
                'description' => 'Entraîne-toi à rédiger de courtes descriptions écrites de personnes, de lieux, de routines, de préférences et d’expériences récentes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase convient le mieux pour décrire un ami ?',
                        'choices' => [
                            ['choice_text' => 'Mi amigo es amable y trabaja en una escuela.', 'is_correct' => true],
                            ['choice_text' => 'Mi amigo amable escuela trabaja es.', 'is_correct' => false],
                            ['choice_text' => 'Mi amigo está amable y escuela trabajo.', 'is_correct' => false],
                            ['choice_text' => 'Mi amigo es amables y trabaja escuela.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase donne deux informations claires avec un ordre des mots naturel.',
                    ],
                    [
                        'question' => 'Quelle description est la plus cohérente ?',
                        'choices' => [
                            ['choice_text' => 'Mi casa pequeña pero jardín es tiene grande.', 'is_correct' => false],
                            ['choice_text' => 'Mi casa es pequeño, pero tiene una jardín grande.', 'is_correct' => false],
                            ['choice_text' => 'Mi casa jardín tiene pero pequeña es grande.', 'is_correct' => false],
                            ['choice_text' => 'Mi casa es pequeña, pero tiene un jardín grande.', 'is_correct' => true],
                        ],
                        'explanation' => '« Pequeña » s’accorde avec « casa », tandis que « grande » décrit correctement « jardín ».',
                    ],
                    [
                        'question' => 'Tu écris sur ta routine quotidienne. Quelle phrase convient naturellement ?',
                        'choices' => [
                            ['choice_text' => 'Normalmente me levantar a siete desayuno casa.', 'is_correct' => false],
                            ['choice_text' => 'Normalmente me levanto a las siete y desayuno en casa.', 'is_correct' => true],
                            ['choice_text' => 'Me levanto normalmente siete y casa desayuno.', 'is_correct' => false],
                            ['choice_text' => 'Normalmente yo a siete levantar y desayuno en.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase combine deux actions de routine dans un ordre naturel.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement une ville ?',
                        'choices' => [
                            ['choice_text' => 'La ciudad tranquila son y tiene muchas parque.', 'is_correct' => false],
                            ['choice_text' => 'La ciudad está tranquilo y tiene mucho parques.', 'is_correct' => false],
                            ['choice_text' => 'La ciudad es tranquila y tiene muchos parques.', 'is_correct' => true],
                            ['choice_text' => 'La ciudad es tranquilos y tiene parque.', 'is_correct' => false],
                        ],
                        'explanation' => '« Tranquila » s’accorde avec « ciudad », et « muchos parques » est correctement au pluriel.',
                    ],
                    [
                        'question' => 'Quelle phrase explique clairement une préférence ?',
                        'choices' => [
                            ['choice_text' => 'Me gusta el invierno porque hace frío y puedo esquiar.', 'is_correct' => true],
                            ['choice_text' => 'Me gusta porque invierno frío hacer puedo.', 'is_correct' => false],
                            ['choice_text' => 'El invierno me gusto porque frío es puedo.', 'is_correct' => false],
                            ['choice_text' => 'Me gusta invierno porque puedo de esquí.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase énonce la préférence puis donne la raison avec « porque ».',
                    ],
                    [
                        'question' => 'Tu écris le court profil d’un camarade de classe. Quelle phrase est la plus claire ?',
                        'choices' => [
                            ['choice_text' => 'Laura medicina estudia cerca vive universidad trabaja sábados.', 'is_correct' => false],
                            ['choice_text' => 'Laura estudia medicina, vive cerca de la universidad y trabaja los sábados.', 'is_correct' => true],
                            ['choice_text' => 'Laura estudia medicina y universidad vive trabaja sábado.', 'is_correct' => false],
                            ['choice_text' => 'Laura es estudiar medicina, vive cerca universidad.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase présente trois informations liées dans une structure cohérente.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise clairement des expressions de temps ?',
                        'choices' => [
                            ['choice_text' => 'Por mañana estudio la y noche por leo.', 'is_correct' => false],
                            ['choice_text' => 'Estudio mañana por y leo noche la.', 'is_correct' => false],
                            ['choice_text' => 'Por la mañana estudio y por la noche leo.', 'is_correct' => true],
                            ['choice_text' => 'Por la estudio mañana y noche por leo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux expressions de temps sont claires et équilibrées.',
                    ],
                    [
                        'question' => 'Quelle phrase donne une raison claire pour un choix personnel ?',
                        'choices' => [
                            ['choice_text' => 'Voy en autobús es más barato porque.', 'is_correct' => false],
                            ['choice_text' => 'Porque es barato voy autobús más.', 'is_correct' => false],
                            ['choice_text' => 'Voy porque autobús es en más barato.', 'is_correct' => false],
                            ['choice_text' => 'Voy en autobús porque es más barato.', 'is_correct' => true],
                        ],
                        'explanation' => 'L’action principale est suivie de sa raison avec « porque ».',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour décrire le week-end dernier ?',
                        'choices' => [
                            ['choice_text' => 'El sábado visité a mis padres y el domingo descansé en casa.', 'is_correct' => true],
                            ['choice_text' => 'El sábado visitar mis padres y domingo descanso casa.', 'is_correct' => false],
                            ['choice_text' => 'El sábado visito mis padres y el domingo descansaré.', 'is_correct' => false],
                            ['choice_text' => 'El sábado mis padres visitó y domingo descansé.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux actions terminées du week-end sont correctement écrites au passé.',
                    ],
                    [
                        'question' => 'Quelle phrase donne une conclusion utile à un court paragraphe personnel ?',
                        'choices' => [
                            ['choice_text' => 'En general me mucho gusta aquí vivir es.', 'is_correct' => false],
                            ['choice_text' => 'Me gusta aquí en general mucho vivir es.', 'is_correct' => false],
                            ['choice_text' => 'En general, me gusta mucho vivir aquí.', 'is_correct' => true],
                            ['choice_text' => 'Aquí vivir en general gusta mucho me.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une phrase de conclusion naturelle pour une courte description personnelle.',
                    ],
                ],
            ],
            [
                'title' => 'E-mails et écriture formelle pour débutants',
                'description' => 'Entraîne-toi aux formules d’ouverture simples, aux demandes, aux confirmations, aux pièces jointes, aux excuses et à la communication écrite polie dans un e-mail.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle formule d’ouverture convient pour un e-mail poli à un professeur ?',
                        'choices' => [
                            ['choice_text' => 'Hola profesora García.', 'is_correct' => false],
                            ['choice_text' => 'Profesora hola García,', 'is_correct' => false],
                            ['choice_text' => 'Hola, profesora García:', 'is_correct' => true],
                            ['choice_text' => 'García hola profesora.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une salutation polie simple suivie de deux points fonctionne bien dans un court e-mail en espagnol.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour poser une question à un professeur ?',
                        'choices' => [
                            ['choice_text' => 'Quiero usted pregunta tarea.', 'is_correct' => false],
                            ['choice_text' => 'Preguntar quería usted la tarea.', 'is_correct' => false],
                            ['choice_text' => 'La tarea quería preguntarle yo es.', 'is_correct' => false],
                            ['choice_text' => 'Quería preguntarle sobre la tarea.', 'is_correct' => true],
                        ],
                        'explanation' => '« Quería preguntarle… » est une introduction écrite polie à une question.',
                    ],
                    [
                        'question' => 'Tu veux demander quand aura lieu un examen. Quelle phrase est claire ?',
                        'choices' => [
                            ['choice_text' => '¿Podría decirme cuándo es el examen?', 'is_correct' => true],
                            ['choice_text' => '¿Cuándo examen podría usted decir?', 'is_correct' => false],
                            ['choice_text' => 'Dígame examen cuándo podría.', 'is_correct' => false],
                            ['choice_text' => '¿Puede examen es cuándo usted?', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une question polie et grammaticalement claire pour un e-mail.',
                    ],
                    [
                        'question' => 'Quelle phrase demande poliment plus de temps pour terminer un devoir ?',
                        'choices' => [
                            ['choice_text' => '¿Es posible yo tarea mañana entregar?', 'is_correct' => false],
                            ['choice_text' => '¿Sería posible entregar la tarea mañana?', 'is_correct' => true],
                            ['choice_text' => 'Entregar mañana sería yo tarea?', 'is_correct' => false],
                            ['choice_text' => 'Mañana tarea posible es yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette formulation est polie et appropriée pour demander un délai supplémentaire.',
                    ],
                    [
                        'question' => 'Quelle phrase confirme correctement un rendez-vous dans un e-mail ?',
                        'choices' => [
                            ['choice_text' => 'Confirmo nuestra cita para el lunes a las diez.', 'is_correct' => true],
                            ['choice_text' => 'Nuestra cita confirmo lunes diez para.', 'is_correct' => false],
                            ['choice_text' => 'Confirmar la cita lunes a diez soy.', 'is_correct' => false],
                            ['choice_text' => 'El lunes nuestra cita confirmar yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase confirme clairement le rendez-vous et son heure.',
                    ],
                    [
                        'question' => 'Quelle formule de clôture convient pour un e-mail poli et simple ?',
                        'choices' => [
                            ['choice_text' => 'Hasta luego amigo!!!', 'is_correct' => false],
                            ['choice_text' => 'Hola otra vez,', 'is_correct' => false],
                            ['choice_text' => 'Saludos cordiales,', 'is_correct' => true],
                            ['choice_text' => 'Gracias de adiós.', 'is_correct' => false],
                        ],
                        'explanation' => '« Saludos cordiales » est une formule de clôture écrite polie et standard.',
                    ],
                    [
                        'question' => 'Quelle phrase sonne professionnelle pour expliquer que tu ne peux pas assister à une réunion ?',
                        'choices' => [
                            ['choice_text' => 'No puedo reunión asistir lamento.', 'is_correct' => false],
                            ['choice_text' => 'Lamento no poder asistir a la reunión.', 'is_correct' => true],
                            ['choice_text' => 'La reunión no poder asistir yo.', 'is_correct' => false],
                            ['choice_text' => 'Asistir no reunión puedo lamento.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une formulation professionnelle concise et polie.',
                    ],
                    [
                        'question' => 'Quelle phrase donne clairement un avis de pièce jointe ?',
                        'choices' => [
                            ['choice_text' => 'El documento adjunto solicitado yo.', 'is_correct' => false],
                            ['choice_text' => 'Adjunto solicitado documento es.', 'is_correct' => false],
                            ['choice_text' => 'Documento yo adjuntar solicitado.', 'is_correct' => false],
                            ['choice_text' => 'Adjunto el documento solicitado.', 'is_correct' => true],
                        ],
                        'explanation' => '« Adjunto… » est une façon conventionnelle de dire que le document demandé est joint.',
                    ],
                    [
                        'question' => 'Quelle phrase convient le mieux pour dire poliment qu’on attend une réponse ?',
                        'choices' => [
                            ['choice_text' => 'Estoy esperando tú respuesta ahora.', 'is_correct' => false],
                            ['choice_text' => 'Su respuesta queda yo.', 'is_correct' => false],
                            ['choice_text' => 'Quedo atento a su respuesta.', 'is_correct' => true],
                            ['choice_text' => 'Atento su respuesta soy es.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une expression écrite polie signifiant que l’on attend la réponse.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour une simple demande professionnelle par e-mail ?',
                        'choices' => [
                            ['choice_text' => 'Enviarme usted informe hoy poder.', 'is_correct' => false],
                            ['choice_text' => '¿Podría enviarme el informe hoy, por favor?', 'is_correct' => true],
                            ['choice_text' => 'El informe hoy envíame podría usted es.', 'is_correct' => false],
                            ['choice_text' => '¿Puede informe yo recibir hoy?', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle utilise une demande polie au conditionnel et indique clairement ce qui est nécessaire.',
                    ],
                ],
            ],
            [
                'title' => 'Révision pratique de l’écriture',
                'description' => 'Combine la construction de phrases, les messages courts, les descriptions et l’écriture formelle simple dans des tâches pratiques pour débutants.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle phrase fonctionnerait le mieux comme première ligne d’un court paragraphe sur un week-end ?',
                        'choices' => [
                            ['choice_text' => 'Sábado pasado fue muy tranquilidad.', 'is_correct' => false],
                            ['choice_text' => 'El pasado sábado muy tranquilo fue es.', 'is_correct' => false],
                            ['choice_text' => 'El sábado pasado estar muy tranquilo.', 'is_correct' => false],
                            ['choice_text' => 'El sábado pasado fue muy tranquilo.', 'is_correct' => true],
                        ],
                        'explanation' => 'La phrase donne un sujet clair et utilise naturellement la description au passé.',
                    ],
                    [
                        'question' => 'Quel message est le plus clair pour donner des directions à un ami ?',
                        'choices' => [
                            ['choice_text' => 'Derecha gira y banco todo sigue recto.', 'is_correct' => false],
                            ['choice_text' => 'Gira derecho el banco y sigue a.', 'is_correct' => false],
                            ['choice_text' => 'Gira a la derecha y sigue todo recto hasta el banco.', 'is_correct' => true],
                            ['choice_text' => 'Hasta banco gira derecha todo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le message donne deux instructions dans un ordre logique.',
                    ],
                    [
                        'question' => 'Quelle phrase relie correctement un problème et une conséquence ?',
                        'choices' => [
                            ['choice_text' => 'No tengo coche porque voy en autobús.', 'is_correct' => false],
                            ['choice_text' => 'No tengo coche, así que voy en autobús.', 'is_correct' => true],
                            ['choice_text' => 'No coche tengo así voy autobús que.', 'is_correct' => false],
                            ['choice_text' => 'Tengo no coche, voy así que autobús.', 'is_correct' => false],
                        ],
                        'explanation' => '« Así que » introduit la conséquence de la situation.',
                    ],
                    [
                        'question' => 'Quelle phrase conviendrait pour un court journal de voyage ?',
                        'choices' => [
                            ['choice_text' => 'Hoy visitamos el museo y después comimos en un restaurante pequeño.', 'is_correct' => true],
                            ['choice_text' => 'Hoy museo visitamos después pequeño restaurante comimos.', 'is_correct' => false],
                            ['choice_text' => 'Hoy visitar museo y después comer restaurante.', 'is_correct' => false],
                            ['choice_text' => 'Hoy visitamos el museo y después comíamos mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase présente naturellement deux événements terminés dans l’ordre chronologique.',
                    ],
                    [
                        'question' => 'Quelle phrase convient le mieux pour une courte biographie ?',
                        'choices' => [
                            ['choice_text' => 'Nadia nació 1998 estudió Rabat y Madrid mudarse.', 'is_correct' => false],
                            ['choice_text' => 'Nadia nace en 1998 y estudió Madrid antes.', 'is_correct' => false],
                            ['choice_text' => 'Nadia nació en Rabat 1998 y mudarse estudió.', 'is_correct' => false],
                            ['choice_text' => 'Nadia nació en 1998 y estudió en Rabat antes de mudarse a Madrid.', 'is_correct' => true],
                        ],
                        'explanation' => 'La phrase présente les événements biographiques dans un ordre chronologique clair.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus appropriée pour un avis concernant un bureau fermé ?',
                        'choices' => [
                            ['choice_text' => 'La oficina cerrada viernes mantenimiento estará es.', 'is_correct' => false],
                            ['choice_text' => 'Cerrada la oficina viernes por estará.', 'is_correct' => false],
                            ['choice_text' => 'La oficina estará cerrada el viernes por mantenimiento.', 'is_correct' => true],
                            ['choice_text' => 'La oficina estará el viernes cerrada mantenimiento por es.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une formulation concise adaptée à un avis public.',
                    ],
                    [
                        'question' => 'Quel message demande poliment à un ami de rappeler plus tard ?',
                        'choices' => [
                            ['choice_text' => '¿Puedes llamarme esta tarde, por favor?', 'is_correct' => true],
                            ['choice_text' => 'Llamarme puedes tarde esta.', 'is_correct' => false],
                            ['choice_text' => '¿Puedes esta llamarme tarde?', 'is_correct' => false],
                            ['choice_text' => 'Llámame por esta tarde puedes.', 'is_correct' => false],
                        ],
                        'explanation' => 'La question est polie et demande clairement un appel plus tard.',
                    ],
                    [
                        'question' => 'Quelle phrase résume le mieux une opinion personnelle simple ?',
                        'choices' => [
                            ['choice_text' => 'Mi opinión en curso útil es práctico.', 'is_correct' => false],
                            ['choice_text' => 'En mi opinión, este curso es útil y práctico.', 'is_correct' => true],
                            ['choice_text' => 'Este curso en mi opinión es útilmente.', 'is_correct' => false],
                            ['choice_text' => 'En opinión mi este curso práctico.', 'is_correct' => false],
                        ],
                        'explanation' => '« En mi opinión » introduit clairement le point de vue de l’auteur.',
                    ],
                    [
                        'question' => 'Quelle dernière phrase conviendrait bien dans un court e-mail remerciant quelqu’un pour son aide ?',
                        'choices' => [
                            ['choice_text' => 'Gracias mucho su tiempo ayuda por.', 'is_correct' => false],
                            ['choice_text' => 'Muchas gracias por su tiempo y su ayuda.', 'is_correct' => true],
                            ['choice_text' => 'Su ayuda muchas gracias está.', 'is_correct' => false],
                            ['choice_text' => 'Tiempo y ayuda gracias su mucho.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est un remerciement écrit naturel et poli.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement écrite et complète ?',
                        'choices' => [
                            ['choice_text' => 'Mañana una reunión importante.', 'is_correct' => false],
                            ['choice_text' => 'Tengo mañana en oficina importante.', 'is_correct' => false],
                            ['choice_text' => 'Mañana tengo una reunión importante en la oficina.', 'is_correct' => true],
                            ['choice_text' => 'Mañana tener una reunión en la oficina.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle contient une proposition complète, un verbe correctement conjugué, ainsi qu’un moment et un lieu clairs.',
                    ],
                    [
                        'question' => 'Quelle option formerait la meilleure courte clôture pour un message informel à un ami ?',
                        'choices' => [
                            ['choice_text' => 'Nos vemos pronto. ¡Cuídate!', 'is_correct' => true],
                            ['choice_text' => 'Saludos cordiales, estimado amigo profesional.', 'is_correct' => false],
                            ['choice_text' => 'Atentamente y gracias por su atención.', 'is_correct' => false],
                            ['choice_text' => 'Quedo atento a su respuesta.', 'is_correct' => false],
                        ],
                        'explanation' => 'La première option correspond à une relation informelle ; les autres sont plus formelles.',
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
