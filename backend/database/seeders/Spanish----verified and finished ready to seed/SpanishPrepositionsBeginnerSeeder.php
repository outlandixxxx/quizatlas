<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishPrepositionsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('major_id', Major::where('slug', 'spanish')->firstOrFail()->id)->where('name', 'Prepositions')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les prépositions espagnoles du quotidien',
                'description' => 'Construis une base de débutant avec les prépositions espagnoles les plus courantes utilisées pour les lieux, le temps, le mouvement et les relations du quotidien.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Complète : « Vivo ___ Madrid. »',
                        'choices' => [
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => true],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'para', 'is_correct' => false],
                        ],
                        'explanation' => 'L’espagnol utilise « en » pour dire où quelqu’un vit ou se trouve : « Vivo en Madrid. »',
                    ],
                    [
                        'question' => 'Quelle phrase signifie correctement « Je suis d’Espagne » ?',
                        'choices' => [
                            ['choice_text' => 'Soy en España.', 'is_correct' => false],
                            ['choice_text' => 'Estoy de España.', 'is_correct' => false],
                            ['choice_text' => 'Voy de España.', 'is_correct' => false],
                            ['choice_text' => 'Soy de España.', 'is_correct' => true],
                        ],
                        'explanation' => '« De » sert à indiquer l’origine ou la provenance : « Soy de España. »',
                    ],
                    [
                        'question' => 'Complète : « Voy ___ la escuela todos los días. »',
                        'choices' => [
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'a', 'is_correct' => true],
                            ['choice_text' => 'sin', 'is_correct' => false],
                        ],
                        'explanation' => 'La préposition « a » s’utilise couramment pour un mouvement vers une destination : « Voy a la escuela. »',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « con » ?',
                        'choices' => [
                            ['choice_text' => 'Voy al cine con mi hermana.', 'is_correct' => true],
                            ['choice_text' => 'Voy al cine con en mi hermana.', 'is_correct' => false],
                            ['choice_text' => 'Voy al cine de mi hermana.', 'is_correct' => false],
                            ['choice_text' => 'Voy al cine para mi hermana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Con » signifie « avec » et sert donc à indiquer qui accompagne quelqu’un.',
                    ],
                    [
                        'question' => 'Complète : « El libro está ___ la mesa. »',
                        'choices' => [
                            ['choice_text' => 'sobre', 'is_correct' => true],
                            ['choice_text' => 'desde', 'is_correct' => false],
                            ['choice_text' => 'para', 'is_correct' => false],
                            ['choice_text' => 'sin', 'is_correct' => false],
                        ],
                        'explanation' => '« Sobre » signifie « sur » ou « à propos de ». Ici, il indique que le livre est posé sur la table.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « Nous étudions à la bibliothèque » ?',
                        'choices' => [
                            ['choice_text' => 'Estudiamos a la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Estudiamos de la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Estudiamos en la biblioteca.', 'is_correct' => true],
                            ['choice_text' => 'Estudiamos para la biblioteca.', 'is_correct' => false],
                        ],
                        'explanation' => '« En » s’utilise pour indiquer un lieu : « en la biblioteca. »',
                    ],
                    [
                        'question' => 'Un ami te demande où sont tes clés. Tu réponds : « Están ___ mi bolso. »',
                        'choices' => [
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => true],
                            ['choice_text' => 'por', 'is_correct' => false],
                            ['choice_text' => 'hasta', 'is_correct' => false],
                        ],
                        'explanation' => '« En » indique que les clés se trouvent à l’intérieur du sac.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise naturellement « sin » ?',
                        'choices' => [
                            ['choice_text' => 'Tomo café sin a azúcar.', 'is_correct' => false],
                            ['choice_text' => 'Tomo café sin de azúcar.', 'is_correct' => false],
                            ['choice_text' => 'Tomo café sin en azúcar.', 'is_correct' => false],
                            ['choice_text' => 'Tomo café sin azúcar.', 'is_correct' => true],
                        ],
                        'explanation' => '« Sin » signifie « sans », donc « sin azúcar » est l’expression naturelle.',
                    ],
                    [
                        'question' => 'Quelle phrase montre correctement une personne voyageant avec une autre personne ?',
                        'choices' => [
                            ['choice_text' => 'Viajo a Carlos.', 'is_correct' => false],
                            ['choice_text' => 'Viajo de Carlos.', 'is_correct' => false],
                            ['choice_text' => 'Viajo con Carlos.', 'is_correct' => true],
                            ['choice_text' => 'Viajo sobre Carlos.', 'is_correct' => false],
                        ],
                        'explanation' => '« Con » exprime l’accompagnement : « Je voyage avec Carlos. »',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « para » pour un destinataire ?',
                        'choices' => [
                            ['choice_text' => 'Este regalo es a Ana.', 'is_correct' => false],
                            ['choice_text' => 'Este regalo es de Ana solamente.', 'is_correct' => false],
                            ['choice_text' => 'Este regalo es en Ana.', 'is_correct' => false],
                            ['choice_text' => 'Este regalo es para Ana.', 'is_correct' => true],
                        ],
                        'explanation' => '« Para » peut indiquer le destinataire prévu : « Ce cadeau est pour Ana. »',
                    ],
                ],
            ],
            [
                'title' => 'Mouvement et destinations',
                'description' => 'Pratique les prépositions utilisées pour aller, venir, arriver, partir et indiquer des directions simples.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Complète : « Mañana voy ___ Barcelona. »',
                        'choices' => [
                            ['choice_text' => 'a', 'is_correct' => true],
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'por', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mouvement vers une ville s’exprime avec « a » : « voy a Barcelona. »',
                    ],
                    [
                        'question' => 'Quelle phrase signifie correctement « Elle vient du bureau » ?',
                        'choices' => [
                            ['choice_text' => 'Ella viene a la oficina.', 'is_correct' => false],
                            ['choice_text' => 'Ella viene en la oficina.', 'is_correct' => false],
                            ['choice_text' => 'Ella viene para la oficina.', 'is_correct' => false],
                            ['choice_text' => 'Ella viene de la oficina.', 'is_correct' => true],
                        ],
                        'explanation' => '« De » peut indiquer le point de départ : « viene de la oficina. »',
                    ],
                    [
                        'question' => 'Quelle expression est correcte pour un mouvement à travers un lieu ?',
                        'choices' => [
                            ['choice_text' => 'Caminamos para el parque.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos de el parque.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos por el parque.', 'is_correct' => true],
                            ['choice_text' => 'Caminamos sin el parque.', 'is_correct' => false],
                        ],
                        'explanation' => '« Por » peut exprimer un mouvement à travers ou autour d’une zone, comme dans « por el parque. »',
                    ],
                    [
                        'question' => 'Un touriste demande comment se rendre à la gare. Quelle phrase utilise « a » correctement ?',
                        'choices' => [
                            ['choice_text' => '¿Cómo llego en la estación?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo llego a la estación?', 'is_correct' => true],
                            ['choice_text' => '¿Cómo llego de la estación?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo llego con la estación?', 'is_correct' => false],
                        ],
                        'explanation' => '« A » marque la destination : « Comment est-ce que j’arrive à la gare ? »',
                    ],
                    [
                        'question' => 'Quelle phrase indique le point de départ d’un trajet ?',
                        'choices' => [
                            ['choice_text' => 'Salimos a casa a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'Salimos en casa a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'Salimos de casa a las ocho.', 'is_correct' => true],
                            ['choice_text' => 'Salimos para casa a las ocho.', 'is_correct' => false],
                        ],
                        'explanation' => '« De » identifie le point à partir duquel le trajet commence.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « hasta » pour un point d’arrivée ?',
                        'choices' => [
                            ['choice_text' => 'Caminamos hasta de la estación.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos hasta la estación.', 'is_correct' => true],
                            ['choice_text' => 'Caminamos hasta con la estación.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos hasta a la estación.', 'is_correct' => false],
                        ],
                        'explanation' => '« Hasta » signifie « jusqu’à », donc il introduit naturellement le point d’arrivée.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise « desde » pour indiquer où commence un trajet ?',
                        'choices' => [
                            ['choice_text' => 'Trabajo desde casa.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo a casa.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo de casa.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo para casa.', 'is_correct' => false],
                        ],
                        'explanation' => '« Desde » signifie « depuis » et peut marquer le point de départ d’une activité ou d’un trajet.',
                    ],
                    [
                        'question' => 'Un bus traverse le centre-ville. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'El autobús pasa para el centro.', 'is_correct' => false],
                            ['choice_text' => 'El autobús pasa a el centro.', 'is_correct' => false],
                            ['choice_text' => 'El autobús pasa sin el centro.', 'is_correct' => false],
                            ['choice_text' => 'El autobús pasa por el centro.', 'is_correct' => true],
                        ],
                        'explanation' => '« Por » s’utilise pour un mouvement à travers une zone.',
                    ],
                    [
                        'question' => 'Quelle phrase combine correctement une destination et un compagnon ?',
                        'choices' => [
                            ['choice_text' => 'Voy a Sevilla con mis amigos.', 'is_correct' => true],
                            ['choice_text' => 'Voy en Sevilla con mis amigos.', 'is_correct' => false],
                            ['choice_text' => 'Voy de Sevilla a mis amigos.', 'is_correct' => false],
                            ['choice_text' => 'Voy para Sevilla de mis amigos.', 'is_correct' => false],
                        ],
                        'explanation' => '« A » marque la destination et « con » marque les personnes qui accompagnent le locuteur.',
                    ],
                    [
                        'question' => 'Quelle option sonne naturelle pour parler de la distance ou de la direction d’une marche ?',
                        'choices' => [
                            ['choice_text' => 'Anduvimos de el río.', 'is_correct' => false],
                            ['choice_text' => 'Anduvimos en el río.', 'is_correct' => false],
                            ['choice_text' => 'Anduvimos con el río.', 'is_correct' => false],
                            ['choice_text' => 'Anduvimos hasta el río.', 'is_correct' => true],
                        ],
                        'explanation' => '« Hasta » indique le point atteint : ils ont marché jusqu’à la rivière.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise « para » pour une destination ou une destination prévue ?',
                        'choices' => [
                            ['choice_text' => 'Salimos de Granada esta tarde.', 'is_correct' => false],
                            ['choice_text' => 'Salimos con Granada esta tarde.', 'is_correct' => false],
                            ['choice_text' => 'Salimos para Granada esta tarde.', 'is_correct' => true],
                            ['choice_text' => 'Salimos en Granada esta tarde.', 'is_correct' => false],
                        ],
                        'explanation' => '« Para » peut indiquer une destination ou une direction, en particulier dans des expressions comme « salir para Granada. »',
                    ],
                    [
                        'question' => 'Un apprenant écrit « Voy en la universidad » pour dire « Je vais à l’université. » Que faut-il changer ?',
                        'choices' => [
                            ['choice_text' => 'Voy de la universidad.', 'is_correct' => false],
                            ['choice_text' => 'Voy a la universidad.', 'is_correct' => true],
                            ['choice_text' => 'Voy con la universidad.', 'is_correct' => false],
                            ['choice_text' => 'Voy sobre la universidad.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un mouvement vers une destination, « a » est la préposition appropriée.',
                    ],
                ],
            ],
            [
                'title' => 'Le temps et les prépositions courantes',
                'description' => 'Utilise les prépositions courantes pour les expressions de temps, les horaires, les échéances, la durée et les activités récurrentes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Complète : « La clase empieza ___ las nueve. »',
                        'choices' => [
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'por', 'is_correct' => false],
                            ['choice_text' => 'a', 'is_correct' => true],
                        ],
                        'explanation' => 'L’espagnol utilise « a » avec les heures précises : « a las nueve. »',
                    ],
                    [
                        'question' => 'Quelle phrase signifie correctement « Je travaille du lundi au vendredi » ?',
                        'choices' => [
                            ['choice_text' => 'Trabajo a lunes a viernes.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo de lunes a viernes.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo en lunes a viernes.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo para lunes a viernes.', 'is_correct' => false],
                        ],
                        'explanation' => '« De ... a ... », soit ici « de lunes a viernes », exprime la période de temps.',
                    ],
                    [
                        'question' => 'Complète : « Nos vemos ___ la mañana. »',
                        'choices' => [
                            ['choice_text' => 'por', 'is_correct' => true],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'con', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expression courante est « por la mañana » pour désigner un moment général de la journée.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise « desde » pour une heure de départ ?',
                        'choices' => [
                            ['choice_text' => 'Trabajo a las ocho desde.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo para las ocho.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo desde las ocho.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo con las ocho.', 'is_correct' => false],
                        ],
                        'explanation' => '« Desde las ocho » signifie « à partir de huit heures. »',
                    ],
                    [
                        'question' => 'Complète : « La tienda está abierta ___ las diez. »',
                        'choices' => [
                            ['choice_text' => 'desde', 'is_correct' => false],
                            ['choice_text' => 'hasta', 'is_correct' => true],
                            ['choice_text' => 'con', 'is_correct' => false],
                            ['choice_text' => 'sobre', 'is_correct' => false],
                        ],
                        'explanation' => '« Hasta las diez » donne le point final : le magasin reste ouvert jusqu’à dix heures.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement une durée ou une période ?',
                        'choices' => [
                            ['choice_text' => 'Estudié por dos horas.', 'is_correct' => true],
                            ['choice_text' => 'Estudié a dos horas.', 'is_correct' => false],
                            ['choice_text' => 'Estudié en dos horas solamente.', 'is_correct' => false],
                            ['choice_text' => 'Estudié de dos horas.', 'is_correct' => false],
                        ],
                        'explanation' => '« Por » peut indiquer une durée, comme dans « por dos horas. »',
                    ],
                    [
                        'question' => 'Quelle expression est courante pour parler d’une heure approximative ?',
                        'choices' => [
                            ['choice_text' => 'a las desde cinco', 'is_correct' => false],
                            ['choice_text' => 'de las cinco hasta aproximadamente', 'is_correct' => false],
                            ['choice_text' => 'sobre las cinco', 'is_correct' => true],
                            ['choice_text' => 'con las cinco', 'is_correct' => false],
                        ],
                        'explanation' => '« Sobre las cinco » peut signifier « vers cinq heures. »',
                    ],
                    [
                        'question' => 'Un ami te demande quand tu marches habituellement. Quelle réponse est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Camino a la tarde.', 'is_correct' => false],
                            ['choice_text' => 'Camino de la tarde.', 'is_correct' => false],
                            ['choice_text' => 'Camino con la tarde.', 'is_correct' => false],
                            ['choice_text' => 'Camino por la tarde.', 'is_correct' => true],
                        ],
                        'explanation' => '« Por la tarde » est l’expression courante pour « dans l’après-midi. »',
                    ],
                    [
                        'question' => 'Quelle phrase combine correctement un point de départ et un point d’arrivée dans le temps ?',
                        'choices' => [
                            ['choice_text' => 'La reunión es de dos a cuatro.', 'is_correct' => true],
                            ['choice_text' => 'La reunión es a dos de cuatro.', 'is_correct' => false],
                            ['choice_text' => 'La reunión es en dos para cuatro.', 'is_correct' => false],
                            ['choice_text' => 'La reunión es por dos con cuatro.', 'is_correct' => false],
                        ],
                        'explanation' => '« De ... a ... » est la structure standard pour une plage horaire.',
                    ],
                    [
                        'question' => 'Complète : « Necesito el informe ___ mañana. »',
                        'choices' => [
                            ['choice_text' => 'por', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'con', 'is_correct' => false],
                            ['choice_text' => 'para', 'is_correct' => true],
                        ],
                        'explanation' => '« Para mañana » exprime une échéance ou un moment prévu : le rapport est attendu pour demain.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise naturellement « en » pour un mois ?',
                        'choices' => [
                            ['choice_text' => 'Viajamos a julio.', 'is_correct' => false],
                            ['choice_text' => 'Viajamos en julio.', 'is_correct' => true],
                            ['choice_text' => 'Viajamos de julio.', 'is_correct' => false],
                            ['choice_text' => 'Viajamos con julio.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’espagnol utilise couramment « en » avec les mois : « en julio. »',
                    ],
                ],
            ],
            [
                'title' => 'Por et para pour débutants',
                'description' => 'Construis une distinction pratique entre por et para à travers les raisons, la durée, le mouvement à travers des lieux, les échéances, les destinataires et les objectifs.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle phrase utilise « para » pour un destinataire ?',
                        'choices' => [
                            ['choice_text' => 'Este mensaje es por Marta solamente.', 'is_correct' => false],
                            ['choice_text' => 'Este mensaje es de para Marta.', 'is_correct' => false],
                            ['choice_text' => 'Este mensaje es en Marta.', 'is_correct' => false],
                            ['choice_text' => 'Este mensaje es para Marta.', 'is_correct' => true],
                        ],
                        'explanation' => '« Para » identifie la personne destinée à recevoir le message.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise « por » pour une durée ?',
                        'choices' => [
                            ['choice_text' => 'Trabajé por tres horas.', 'is_correct' => true],
                            ['choice_text' => 'Trabajé para tres horas.', 'is_correct' => false],
                            ['choice_text' => 'Trabajé a tres horas.', 'is_correct' => false],
                            ['choice_text' => 'Trabajé de tres horas.', 'is_correct' => false],
                        ],
                        'explanation' => '« Por » peut exprimer la durée d’une activité : « por tres horas. »',
                    ],
                    [
                        'question' => 'Pourquoi dirait-on « Camino por el parque » ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le parc est le destinataire de l’action.', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’on se déplace à travers le parc.', 'is_correct' => true],
                            ['choice_text' => 'Parce que le parc est une échéance future.', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’on se déplace uniquement vers le parc.', 'is_correct' => false],
                        ],
                        'explanation' => '« Por » peut décrire un mouvement à travers une zone.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise « para » pour une échéance ?',
                        'choices' => [
                            ['choice_text' => 'La tarea es por mañana.', 'is_correct' => false],
                            ['choice_text' => 'La tarea es a mañana.', 'is_correct' => false],
                            ['choice_text' => 'La tarea es para mañana.', 'is_correct' => true],
                            ['choice_text' => 'La tarea es de mañana solamente.', 'is_correct' => false],
                        ],
                        'explanation' => '« Para mañana » indique le moment où la tâche est due ou doit être terminée.',
                    ],
                    [
                        'question' => 'Complète : « Estudio español ___ viajar por Latinoamérica. »',
                        'choices' => [
                            ['choice_text' => 'por', 'is_correct' => false],
                            ['choice_text' => 'para', 'is_correct' => true],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'con', 'is_correct' => false],
                        ],
                        'explanation' => '« Para » s’utilise pour exprimer un but : le locuteur étudie l’espagnol afin de voyager.',
                    ],
                    [
                        'question' => 'Complète : « Gracias ___ tu ayuda. »',
                        'choices' => [
                            ['choice_text' => 'para', 'is_correct' => false],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'por', 'is_correct' => true],
                            ['choice_text' => 'en', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expression fixe est « gracias por », qui signifie « merci pour. »',
                    ],
                    [
                        'question' => 'Quelle phrase utilise « por » pour donner une raison ?',
                        'choices' => [
                            ['choice_text' => 'Lo hice para ti mañana.', 'is_correct' => false],
                            ['choice_text' => 'Lo hice a ti.', 'is_correct' => false],
                            ['choice_text' => 'Lo hice en ti.', 'is_correct' => false],
                            ['choice_text' => 'Lo hice por ti.', 'is_correct' => true],
                        ],
                        'explanation' => '« Por ti » peut exprimer la raison ou la motivation d’une action : « Je l’ai fait pour/grâce à toi. »',
                    ],
                    [
                        'question' => 'Quelle phrase utilise « para » pour indiquer un objectif ?',
                        'choices' => [
                            ['choice_text' => 'Necesito dinero para comprar comida.', 'is_correct' => true],
                            ['choice_text' => 'Necesito dinero por comprar comida.', 'is_correct' => false],
                            ['choice_text' => 'Necesito dinero de comprar comida.', 'is_correct' => false],
                            ['choice_text' => 'Necesito dinero con comprar comida.', 'is_correct' => false],
                        ],
                        'explanation' => '« Para + infinitif » exprime couramment un objectif : l’argent est nécessaire afin d’acheter de la nourriture.',
                    ],
                    [
                        'question' => 'Un apprenant dit « La reunión es por las cinco » pour signifier « La réunion est prévue pour cinq heures. » Quelle formulation est meilleure ?',
                        'choices' => [
                            ['choice_text' => 'La reunión es para las cinco.', 'is_correct' => true],
                            ['choice_text' => 'La reunión es por las cinco.', 'is_correct' => false],
                            ['choice_text' => 'La reunión es de las cinco.', 'is_correct' => false],
                            ['choice_text' => 'La reunión es con las cinco.', 'is_correct' => false],
                        ],
                        'explanation' => '« Para las cinco » peut indiquer le moment prévu ou programmé d’un événement.',
                    ],
                    [
                        'question' => 'Quelle paire met correctement en contraste une raison et un objectif ?',
                        'choices' => [
                            ['choice_text' => 'Lo hago para ti. / Lo hago por ayudarte.', 'is_correct' => false],
                            ['choice_text' => 'Lo hago en ti. / Lo hago a ayudarte.', 'is_correct' => false],
                            ['choice_text' => 'Lo hago por ti. / Lo hago para ayudarte.', 'is_correct' => true],
                            ['choice_text' => 'Lo hago de ti. / Lo hago con ayudarte.', 'is_correct' => false],
                        ],
                        'explanation' => '« Por » peut donner une raison ou une motivation, tandis que « para + infinitif » exprime clairement un objectif.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise naturellement « por » avec un échange ou un prix ?',
                        'choices' => [
                            ['choice_text' => 'Pagué diez euros para el libro.', 'is_correct' => false],
                            ['choice_text' => 'Pagué diez euros por el libro.', 'is_correct' => true],
                            ['choice_text' => 'Pagué diez euros a el libro.', 'is_correct' => false],
                            ['choice_text' => 'Pagué diez euros en el libro.', 'is_correct' => false],
                        ],
                        'explanation' => '« Por » s’utilise pour indiquer le prix payé en échange de quelque chose.',
                    ],
                    [
                        'question' => 'Quel énoncé constitue un repère utile pour un débutant ?',
                        'choices' => [
                            ['choice_text' => 'Para et por signifient toujours exactement la même chose.', 'is_correct' => false],
                            ['choice_text' => 'Por ne s’utilise que pour les lieux.', 'is_correct' => false],
                            ['choice_text' => 'Para ne s’utilise que pour les personnes.', 'is_correct' => false],
                            ['choice_text' => 'Para pointe souvent vers un but, un destinataire ou une échéance ; por donne souvent une raison, un itinéraire ou une durée.', 'is_correct' => true],
                        ],
                        'explanation' => 'C’est une distinction utile pour débuter, même si chaque expression devra être apprise au cas par cas en progressant.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Salí temprano por llegar a tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Salí temprano en llegar a tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Salí temprano para llegar a tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Salí temprano de llegar a tiempo.', 'is_correct' => false],
                        ],
                        'explanation' => '« Para + infinitif » exprime l’objectif de partir tôt : afin d’arriver à l’heure.',
                    ],
                ],
            ],
            [
                'title' => 'Prépositions de lieux et de relations',
                'description' => 'Pratique les mots de localisation et de relation comme en, sobre, debajo de, delante de, detrás de, entre, cerca de et lejos de.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Complète : « El gato está ___ la silla. »',
                        'choices' => [
                            ['choice_text' => 'para', 'is_correct' => false],
                            ['choice_text' => 'por', 'is_correct' => false],
                            ['choice_text' => 'hasta', 'is_correct' => false],
                            ['choice_text' => 'debajo de', 'is_correct' => true],
                        ],
                        'explanation' => '« Debajo de » signifie « sous » et indique la position du chat par rapport à la chaise.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « La banque est près de la gare » ?',
                        'choices' => [
                            ['choice_text' => 'El banco está lejos de la estación.', 'is_correct' => false],
                            ['choice_text' => 'El banco está cerca de la estación.', 'is_correct' => true],
                            ['choice_text' => 'El banco está sobre la estación.', 'is_correct' => false],
                            ['choice_text' => 'El banco está entre la estación.', 'is_correct' => false],
                        ],
                        'explanation' => '« Cerca de » signifie « près de » et sert à décrire des lieux proches.',
                    ],
                    [
                        'question' => 'Complète : « La farmacia está ___ el banco y el supermercado. »',
                        'choices' => [
                            ['choice_text' => 'sobre', 'is_correct' => false],
                            ['choice_text' => 'hasta', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => true],
                            ['choice_text' => 'sin', 'is_correct' => false],
                        ],
                        'explanation' => '« Entre » signifie « entre » et est ici suivi des deux lieux qui entourent la pharmacie.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « detrás de » ?',
                        'choices' => [
                            ['choice_text' => 'El coche está detrás de la casa.', 'is_correct' => true],
                            ['choice_text' => 'El coche está detrás la casa.', 'is_correct' => false],
                            ['choice_text' => 'El coche está detrás a la casa.', 'is_correct' => false],
                            ['choice_text' => 'El coche está detrás en la casa.', 'is_correct' => false],
                        ],
                        'explanation' => '« Detrás de » signifie « derrière » et nécessite « de » avant le lieu de référence.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « La photo est au-dessus du canapé » ?',
                        'choices' => [
                            ['choice_text' => 'La foto está sobre el sofá.', 'is_correct' => true],
                            ['choice_text' => 'La foto está para el sofá.', 'is_correct' => false],
                            ['choice_text' => 'La foto está por el sofá solamente.', 'is_correct' => false],
                            ['choice_text' => 'La foto está hasta el sofá.', 'is_correct' => false],
                        ],
                        'explanation' => '« Sobre » peut indiquer qu’un objet est posé sur ou au-dessus d’un autre objet.',
                    ],
                    [
                        'question' => 'Complète : « Estoy ___ mis amigos en la foto. »',
                        'choices' => [
                            ['choice_text' => 'para', 'is_correct' => false],
                            ['choice_text' => 'desde', 'is_correct' => false],
                            ['choice_text' => 'hasta', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => true],
                        ],
                        'explanation' => '« Entre » signifie « parmi/entre », il peut donc décrire une position au milieu d’un groupe.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « delante de » ?',
                        'choices' => [
                            ['choice_text' => 'El autobús está delante la escuela.', 'is_correct' => false],
                            ['choice_text' => 'El autobús está delante a la escuela.', 'is_correct' => false],
                            ['choice_text' => 'El autobús está delante de la escuela.', 'is_correct' => true],
                            ['choice_text' => 'El autobús está delante en la escuela.', 'is_correct' => false],
                        ],
                        'explanation' => '« Delante de » signifie « devant » et prend « de » avant le lieu de référence.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime la distance par rapport à un lieu ?',
                        'choices' => [
                            ['choice_text' => 'Mi casa está a lejos aquí.', 'is_correct' => false],
                            ['choice_text' => 'Mi casa está lejos de aquí.', 'is_correct' => true],
                            ['choice_text' => 'Mi casa está por lejos de aquí.', 'is_correct' => false],
                            ['choice_text' => 'Mi casa está con lejos aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '« Lejos de » signifie « loin de » et décrit une distance par rapport à un lieu.',
                    ],
                    [
                        'question' => 'Un élève demande où sont les clés. Quelle réponse est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Están a la mochila.', 'is_correct' => false],
                            ['choice_text' => 'Están para la mochila.', 'is_correct' => false],
                            ['choice_text' => 'Están por la mochila.', 'is_correct' => false],
                            ['choice_text' => 'Están dentro de la mochila.', 'is_correct' => true],
                        ],
                        'explanation' => '« Dentro de » signifie « à l’intérieur de » et donne une relation de lieu claire.',
                    ],
                    [
                        'question' => 'Quelle paire décrit correctement des positions opposées ?',
                        'choices' => [
                            ['choice_text' => 'entre / para', 'is_correct' => false],
                            ['choice_text' => 'por / hasta', 'is_correct' => false],
                            ['choice_text' => 'delante de / detrás de', 'is_correct' => true],
                            ['choice_text' => 'con / sin', 'is_correct' => false],
                        ],
                        'explanation' => '« Delante de » signifie « devant » et « detrás de » signifie « derrière », ce qui forme un contraste de position naturel.',
                    ],
                ],
            ],
            [
                'title' => 'Révision mixte des prépositions',
                'description' => 'Réunis les principales prépositions pour débutants dans de courtes situations impliquant des personnes, des lieux, le temps, le mouvement et un objectif.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Complète : « Voy ___ casa ___ las seis. »',
                        'choices' => [
                            ['choice_text' => 'a / a', 'is_correct' => true],
                            ['choice_text' => 'en / por', 'is_correct' => false],
                            ['choice_text' => 'de / para', 'is_correct' => false],
                            ['choice_text' => 'con / hasta', 'is_correct' => false],
                        ],
                        'explanation' => '« Voy a casa » donne la destination, et « a las seis » donne l’heure.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Trabajo a Madrid desde enero.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo de Madrid en enero.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo en Madrid desde enero.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo para Madrid a enero.', 'is_correct' => false],
                        ],
                        'explanation' => '« En Madrid » donne le lieu, tandis que « desde enero » donne le point de départ dans le temps.',
                    ],
                    [
                        'question' => 'Un élève veut dire « Ce livre est pour mon professeur. » Laquelle est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Este libro es por mi profesor.', 'is_correct' => false],
                            ['choice_text' => 'Este libro es a mi profesor.', 'is_correct' => false],
                            ['choice_text' => 'Este libro es en mi profesor.', 'is_correct' => false],
                            ['choice_text' => 'Este libro es para mi profesor.', 'is_correct' => true],
                        ],
                        'explanation' => '« Para » marque le destinataire prévu du livre.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement une promenade à travers une ville avec des amis ?',
                        'choices' => [
                            ['choice_text' => 'Caminamos para el centro de nuestros amigos.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos por el centro con nuestros amigos.', 'is_correct' => true],
                            ['choice_text' => 'Caminamos a el centro por nuestros amigos.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos de centro con nuestros amigos.', 'is_correct' => false],
                        ],
                        'explanation' => '« Por » exprime le mouvement à travers le centre, tandis que « con » exprime les personnes qui accompagnent les locuteurs.',
                    ],
                    [
                        'question' => 'Complète : « Estudio ___ aprender. »',
                        'choices' => [
                            ['choice_text' => 'por', 'is_correct' => false],
                            ['choice_text' => 'para', 'is_correct' => true],
                            ['choice_text' => 'con', 'is_correct' => false],
                            ['choice_text' => 'hasta', 'is_correct' => false],
                        ],
                        'explanation' => '« Para + infinitif » exprime un objectif : étudier afin d’apprendre.',
                    ],
                    [
                        'question' => 'Quelle phrase indique correctement une échéance ?',
                        'choices' => [
                            ['choice_text' => 'Necesito terminar el trabajo por el viernes.', 'is_correct' => false],
                            ['choice_text' => 'Necesito terminar el trabajo en el viernes.', 'is_correct' => false],
                            ['choice_text' => 'Necesito terminar el trabajo con el viernes.', 'is_correct' => false],
                            ['choice_text' => 'Necesito terminar el trabajo para el viernes.', 'is_correct' => true],
                        ],
                        'explanation' => '« Para el viernes » signifie que le travail doit être terminé pour vendredi.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement l’origine et la destination ?',
                        'choices' => [
                            ['choice_text' => 'Viajo de Valencia a Madrid.', 'is_correct' => true],
                            ['choice_text' => 'Viajo a Valencia de Madrid.', 'is_correct' => false],
                            ['choice_text' => 'Viajo en Valencia para Madrid solamente.', 'is_correct' => false],
                            ['choice_text' => 'Viajo con Valencia a Madrid.', 'is_correct' => false],
                        ],
                        'explanation' => '« De ... a ... » est la façon standard d’exprimer un trajet d’un lieu à un autre.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « sin » ?',
                        'choices' => [
                            ['choice_text' => 'Salimos sin a dinero.', 'is_correct' => false],
                            ['choice_text' => 'Salimos sin de dinero.', 'is_correct' => false],
                            ['choice_text' => 'Salimos sin dinero.', 'is_correct' => true],
                            ['choice_text' => 'Salimos sin para dinero.', 'is_correct' => false],
                        ],
                        'explanation' => '« Sin » signifie « sans », donc « sin dinero » est correct.',
                    ],
                    [
                        'question' => 'Un client remercie un serveur. Quelle phrase est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Gracias por la comida.', 'is_correct' => true],
                            ['choice_text' => 'Gracias para la comida.', 'is_correct' => false],
                            ['choice_text' => 'Gracias en la comida.', 'is_correct' => false],
                            ['choice_text' => 'Gracias a la comida.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expression standard est « gracias por » suivie de ce pour quoi on remercie.',
                    ],
                    [
                        'question' => 'Quelle phrase combine correctement un lieu et une personne qui accompagne le locuteur ?',
                        'choices' => [
                            ['choice_text' => 'Estoy a el parque por Ana.', 'is_correct' => false],
                            ['choice_text' => 'Estoy de el parque con Ana.', 'is_correct' => false],
                            ['choice_text' => 'Estoy para el parque Ana.', 'is_correct' => false],
                            ['choice_text' => 'Estoy en el parque con Ana.', 'is_correct' => true],
                        ],
                        'explanation' => '« En » identifie le lieu et « con » identifie la personne qui accompagne.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « hasta » à la fois pour un lieu et un point final ?',
                        'choices' => [
                            ['choice_text' => 'Caminamos por la estación y esperamos para las cinco.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos a la estación y esperamos en las cinco.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos hasta la estación y esperamos hasta las cinco.', 'is_correct' => true],
                            ['choice_text' => 'Caminamos de la estación y esperamos con las cinco.', 'is_correct' => false],
                        ],
                        'explanation' => '« Hasta » peut marquer à la fois un point final physique et un point final dans le temps.',
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
