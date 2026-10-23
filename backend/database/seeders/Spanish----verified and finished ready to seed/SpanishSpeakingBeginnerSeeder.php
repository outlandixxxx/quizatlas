<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishSpeakingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('major_id', Major::where('slug', 'spanish')->firstOrFail()->id)->where('name', 'Speaking')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bases de l’expression orale et présentations',
                'description' => 'Entraîne-toi à te présenter, à donner des informations personnelles simples et à garder une conversation de niveau débutant naturelle.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Tu rencontres quelqu’un pour la première fois. Quelle réponse est une façon naturelle de te présenter ?',
                        'choices' => [
                            ['choice_text' => 'Hola, estoy Daniel. Mucho gusto.', 'is_correct' => false],
                            ['choice_text' => 'Hola, tengo Daniel. Gracias.', 'is_correct' => false],
                            ['choice_text' => 'Hola, me llamo de Daniel.', 'is_correct' => false],
                            ['choice_text' => 'Hola, soy Daniel. Mucho gusto.', 'is_correct' => true],
                        ],
                        'explanation' => '« Soy Daniel » et « Mucho gusto » sont deux expressions naturelles de débutant pour une première rencontre.',
                    ],
                    [
                        'question' => 'Quelqu’un demande : « ¿Cómo te llamas? » Quelle est la meilleure réponse ?',
                        'choices' => [
                            ['choice_text' => 'Soy de Sofía.', 'is_correct' => false],
                            ['choice_text' => 'Tengo Sofía.', 'is_correct' => false],
                            ['choice_text' => 'Me llamo Sofía.', 'is_correct' => true],
                            ['choice_text' => 'Estoy Sofía.', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿Cómo te llamas? » demande ton prénom, et « Me llamo Sofía » est la réponse standard.',
                    ],
                    [
                        'question' => 'Quelqu’un demande : « ¿De dónde eres? » Quelle réponse convient ?',
                        'choices' => [
                            ['choice_text' => 'Soy de Marruecos.', 'is_correct' => true],
                            ['choice_text' => 'Tengo de Marruecos.', 'is_correct' => false],
                            ['choice_text' => 'Vivo de Marruecos.', 'is_correct' => false],
                            ['choice_text' => 'Estoy Marruecos.', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿De dónde eres? » demande ton origine, donc « Soy de… » est la structure naturelle.',
                    ],
                    [
                        'question' => 'Un nouveau camarade de classe demande : « ¿Dónde vives? » Que devrais-tu répondre ?',
                        'choices' => [
                            ['choice_text' => 'Soy en Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Vivo en Casablanca.', 'is_correct' => true],
                            ['choice_text' => 'Tengo Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Estoy de Casablanca.', 'is_correct' => false],
                        ],
                        'explanation' => 'La question porte sur l’endroit où tu vis, donc « Vivo en… » est la réponse naturelle.',
                    ],
                    [
                        'question' => 'Quelqu’un dit : « Mucho gusto. » Quelle est une réponse amicale ?',
                        'choices' => [
                            ['choice_text' => 'Igualmente.', 'is_correct' => true],
                            ['choice_text' => 'Perdón.', 'is_correct' => false],
                            ['choice_text' => 'Hasta mañana solamente.', 'is_correct' => false],
                            ['choice_text' => 'No sé.', 'is_correct' => false],
                        ],
                        'explanation' => '« Igualmente » signifie « de même » et est une réponse courante à « Mucho gusto ».',
                    ],
                    [
                        'question' => 'Quelqu’un demande : « ¿Qué haces? » et tu veux dire que tu étudies l’espagnol. Quelle réponse sonne naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Soy español estudio.', 'is_correct' => false],
                            ['choice_text' => 'Tengo español.', 'is_correct' => false],
                            ['choice_text' => 'Estoy estudio español.', 'is_correct' => false],
                            ['choice_text' => 'Estudio español.', 'is_correct' => true],
                        ],
                        'explanation' => 'Une simple phrase au présent suffit : « Estudio español. »',
                    ],
                    [
                        'question' => 'Tu veux demander poliment la profession de quelqu’un dans une conversation de débutant. Quelle question fonctionne ?',
                        'choices' => [
                            ['choice_text' => '¿Dónde eres trabajo?', 'is_correct' => false],
                            ['choice_text' => '¿Qué profesión estás?', 'is_correct' => false],
                            ['choice_text' => '¿A qué te dedicas?', 'is_correct' => true],
                            ['choice_text' => '¿Cómo profesión tienes?', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿A qué te dedicas? » est une façon naturelle de demander ce que fait quelqu’un dans la vie.',
                    ],
                    [
                        'question' => 'Une personne dit : « Tengo dos hermanos. » Quelle question de suivi est naturelle ?',
                        'choices' => [
                            ['choice_text' => '¿Cuánto cuestan?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo se llaman?', 'is_correct' => true],
                            ['choice_text' => '¿Dónde estudias?', 'is_correct' => false],
                            ['choice_text' => '¿Qué hora es?', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand quelqu’un mentionne ses frères et sœurs, demander leurs prénoms est une suite naturelle de la conversation.',
                    ],
                    [
                        'question' => 'Tu n’as pas entendu le prénom de quelqu’un. Quelle phrase permet de le redemander poliment ?',
                        'choices' => [
                            ['choice_text' => '¿Qué nombre es tú?', 'is_correct' => false],
                            ['choice_text' => 'Habla nombre otra vez.', 'is_correct' => false],
                            ['choice_text' => 'No nombre.', 'is_correct' => false],
                            ['choice_text' => '¿Puedes repetir tu nombre, por favor?', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette phrase demande poliment à la personne de répéter son prénom.',
                    ],
                    [
                        'question' => 'À la fin d’une courte première conversation, quelle formule de clôture sonne naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Hasta luego. Fue un placer conocerte.', 'is_correct' => true],
                            ['choice_text' => 'Soy hasta luego.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un placer adiós.', 'is_correct' => false],
                            ['choice_text' => 'Estoy conocerte hasta.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ce sont des façons naturelles de terminer une première conversation amicale.',
                    ],
                ],
            ],
            [
                'title' => 'S’exprimer dans des situations du quotidien',
                'description' => 'Choisis des réponses orales utiles pour les magasins, les cafés, les transports, le travail et d’autres situations courantes de niveau débutant.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Dans un café, le serveur demande : « ¿Qué quieres tomar? » Quelle réponse est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Soy un café, por favor.', 'is_correct' => false],
                            ['choice_text' => 'Quiero un café, por favor.', 'is_correct' => true],
                            ['choice_text' => 'Estoy café, gracias.', 'is_correct' => false],
                            ['choice_text' => 'Tengo tomar café.', 'is_correct' => false],
                        ],
                        'explanation' => '« Quiero… » est une façon directe et polie, pour un débutant, de commander une boisson.',
                    ],
                    [
                        'question' => 'Une caissière demande : « ¿Algo más? » Que peux-tu dire quand tu as fini tes achats ?',
                        'choices' => [
                            ['choice_text' => 'No, gracias. Eso es todo.', 'is_correct' => true],
                            ['choice_text' => 'No soy más.', 'is_correct' => false],
                            ['choice_text' => 'No tengo todo.', 'is_correct' => false],
                            ['choice_text' => 'No algo.', 'is_correct' => false],
                        ],
                        'explanation' => '« Eso es todo » signifie naturellement que tu n’as besoin de rien d’autre.',
                    ],
                    [
                        'question' => 'Tu es dans un magasin et tu veux demander le prix. Quelle phrase fonctionne ?',
                        'choices' => [
                            ['choice_text' => '¿Cuánto es comprar?', 'is_correct' => false],
                            ['choice_text' => '¿Qué cuesta es?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde cuesta?', 'is_correct' => false],
                            ['choice_text' => '¿Cuánto cuesta?', 'is_correct' => true],
                        ],
                        'explanation' => '« ¿Cuánto cuesta? » est la question standard d’un débutant pour connaître le prix d’un article.',
                    ],
                    [
                        'question' => 'Tu veux une taille plus petite pour une chemise. Quelle demande est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => '¿Es más pequeño usted?', 'is_correct' => false],
                            ['choice_text' => '¿Tiene pequeño una talla?', 'is_correct' => false],
                            ['choice_text' => '¿Tiene una talla más pequeña?', 'is_correct' => true],
                            ['choice_text' => '¿Puedo pequeña esto?', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase demande naturellement si le magasin a une taille plus petite.',
                    ],
                    [
                        'question' => 'Tu es à une gare routière et tu veux savoir d’où part le bus pour Madrid. Quelle question est utile ?',
                        'choices' => [
                            ['choice_text' => '¿Dónde vive el autobús Madrid?', 'is_correct' => false],
                            ['choice_text' => '¿De dónde sale el autobús a Madrid?', 'is_correct' => true],
                            ['choice_text' => '¿Cómo es el Madrid?', 'is_correct' => false],
                            ['choice_text' => '¿Qué tiene el autobús?', 'is_correct' => false],
                        ],
                        'explanation' => 'La question porte sur le point de départ du bus pour Madrid.',
                    ],
                    [
                        'question' => 'Quelqu’un demande : « ¿Puedes ayudarme? » et tu es content de l’aider. Quelle réponse convient ?',
                        'choices' => [
                            ['choice_text' => 'Sí, me ayuda.', 'is_correct' => false],
                            ['choice_text' => 'Claro, ayúdame tú.', 'is_correct' => false],
                            ['choice_text' => 'No puedo ayudar tú.', 'is_correct' => false],
                            ['choice_text' => 'Sí, claro.', 'is_correct' => true],
                        ],
                        'explanation' => '« Sí, claro » est une façon simple et amicale d’accepter une demande d’aide.',
                    ],
                    [
                        'question' => 'Tu n’as pas compris ce que quelqu’un a dit dans une conversation. Quelle phrase est la plus utile ?',
                        'choices' => [
                            ['choice_text' => 'Perdón, yo no entiendo tú.', 'is_correct' => false],
                            ['choice_text' => 'Habla repetir ahora.', 'is_correct' => false],
                            ['choice_text' => 'Perdón, ¿puedes repetir?', 'is_correct' => true],
                            ['choice_text' => 'No palabras.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase demande poliment à la personne de répéter ce qu’elle a dit.',
                    ],
                    [
                        'question' => 'Un collègue demande : « ¿A qué hora comemos? » Tu veux proposer une heure. Quelle réponse est naturelle ?',
                        'choices' => [
                            ['choice_text' => '¿A la una?', 'is_correct' => true],
                            ['choice_text' => 'En una hora es?', 'is_correct' => false],
                            ['choice_text' => 'La una comer?', 'is_correct' => false],
                            ['choice_text' => 'Somos una.', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿A la una? » est une façon naturelle de proposer ou de confirmer une heure de déjeuner.',
                    ],
                    [
                        'question' => 'Tu es perdu et tu as besoin d’indications pour aller à la gare. Quelle entrée en matière est polie ?',
                        'choices' => [
                            ['choice_text' => 'Ayúdame estación.', 'is_correct' => false],
                            ['choice_text' => '¿Dónde usted ayuda?', 'is_correct' => false],
                            ['choice_text' => 'Estación necesito usted.', 'is_correct' => false],
                            ['choice_text' => 'Perdone, ¿me puede ayudar?', 'is_correct' => true],
                        ],
                        'explanation' => '« Perdone » est une façon polie d’attirer l’attention de quelqu’un avant de demander de l’aide.',
                    ],
                    [
                        'question' => 'Dans un restaurant, tu veux dire que tu es prêt à commander. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'Somos listos pedir.', 'is_correct' => false],
                            ['choice_text' => 'Tenemos pedir listo.', 'is_correct' => false],
                            ['choice_text' => 'Estamos listos para pedir.', 'is_correct' => true],
                            ['choice_text' => 'Estamos pedirnos.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase indique naturellement au serveur que tu es prêt à commander.',
                    ],
                    [
                        'question' => 'Quelqu’un dit : « El banco está a la derecha. » Quelle réponse confirme naturellement que tu as compris ?',
                        'choices' => [
                            ['choice_text' => 'No derecha soy.', 'is_correct' => false],
                            ['choice_text' => 'Ah, a la derecha. Gracias.', 'is_correct' => true],
                            ['choice_text' => 'Tengo la derecha.', 'is_correct' => false],
                            ['choice_text' => 'Está gracias banco.', 'is_correct' => false],
                        ],
                        'explanation' => 'Répéter l’information importante et remercier la personne est une confirmation naturelle.',
                    ],
                ],
            ],
            [
                'title' => 'Questions, clarification et réparation',
                'description' => 'Entraîne-toi aux phrases utilisées pour relancer une conversation lorsqu’on a besoin d’une répétition, d’une clarification ou de plus d’informations.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Tu n’as pas bien entendu le dernier mot. Quelle phrase est la plus utile ?',
                        'choices' => [
                            ['choice_text' => '¿Qué última eres?', 'is_correct' => false],
                            ['choice_text' => 'Repite tú palabra última es.', 'is_correct' => false],
                            ['choice_text' => '¿Puedes repetir la última palabra?', 'is_correct' => true],
                            ['choice_text' => 'No escucho palabra qué.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase demande directement à la personne de répéter le mot mal entendu.',
                    ],
                    [
                        'question' => 'Quelqu’un parle trop vite. Quelle phrase polie peux-tu utiliser ?',
                        'choices' => [
                            ['choice_text' => '¿Puedes hablar un poco más despacio, por favor?', 'is_correct' => true],
                            ['choice_text' => 'Habla más lento tú ahora siempre.', 'is_correct' => false],
                            ['choice_text' => 'No puedes hablar.', 'is_correct' => false],
                            ['choice_text' => 'Tu español es rápido.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase demande poliment à quelqu’un de ralentir.',
                    ],
                    [
                        'question' => 'Tu ne connais pas le mot espagnol pour quelque chose. Quelle phrase est utile ?',
                        'choices' => [
                            ['choice_text' => '¿Cómo español esto?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo se dice esto en español?', 'is_correct' => true],
                            ['choice_text' => '¿Qué dice español yo?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde se llama español?', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette question courante demande comment dire un mot ou une chose en espagnol.',
                    ],
                    [
                        'question' => 'Tu penses avoir compris, mais tu veux une confirmation. Quelle question fonctionne ?',
                        'choices' => [
                            ['choice_text' => '¿Qué quieres decir ocho?', 'is_correct' => false],
                            ['choice_text' => '¿Llegamos tú ocho decir?', 'is_correct' => false],
                            ['choice_text' => '¿Quieres ocho a nosotros?', 'is_correct' => false],
                            ['choice_text' => '¿Quieres decir que llegamos a las ocho?', 'is_correct' => true],
                        ],
                        'explanation' => '« ¿Quieres decir que…? » est une façon naturelle de vérifier qu’on a compris le sens voulu.',
                    ],
                    [
                        'question' => 'Quelqu’un donne une longue explication et tu veux qu’il répète le point essentiel. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'Otra vez tú explicación.', 'is_correct' => false],
                            ['choice_text' => 'Dame explicar otra.', 'is_correct' => false],
                            ['choice_text' => 'No entiendo tú explicación.', 'is_correct' => false],
                            ['choice_text' => '¿Puedes explicarlo otra vez, por favor?', 'is_correct' => true],
                        ],
                        'explanation' => 'C’est une demande polie pour que l’explication soit répétée.',
                    ],
                    [
                        'question' => 'Tu entends un mot que tu ne connais pas. Quelle question de suivi est naturelle ?',
                        'choices' => [
                            ['choice_text' => '¿Qué palabra esta significa yo?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo significa tú?', 'is_correct' => false],
                            ['choice_text' => '¿Qué significa esta palabra?', 'is_correct' => true],
                            ['choice_text' => '¿Dónde palabra es?', 'is_correct' => false],
                        ],
                        'explanation' => 'La question demande directement le sens du mot inconnu.',
                    ],
                    [
                        'question' => 'Un ami dit quelque chose de surprenant. Quelle réponse l’invite à en dire plus ?',
                        'choices' => [
                            ['choice_text' => '¿De verdad? Cuéntame más.', 'is_correct' => true],
                            ['choice_text' => 'De verdad no cuenta.', 'is_correct' => false],
                            ['choice_text' => '¿Qué más significa tú?', 'is_correct' => false],
                            ['choice_text' => 'No, cuéntame nada.', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿De verdad? » montre de l’intérêt, et « Cuéntame más » invite la personne à continuer.',
                    ],
                    [
                        'question' => 'Tu veux corriger poliment un petit malentendu. Quelle entrée en matière est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'No tú, incorrecto siempre.', 'is_correct' => false],
                            ['choice_text' => 'Creo que no; quería decir otra cosa.', 'is_correct' => true],
                            ['choice_text' => 'Yo no eso.', 'is_correct' => false],
                            ['choice_text' => 'Otra cosa no quieres.', 'is_correct' => false],
                        ],
                        'explanation' => '« Creo que no » adoucit la correction et « quería decir… » explique le sens voulu.',
                    ],
                    [
                        'question' => 'Quelqu’un donne un numéro de téléphone trop vite. Que pourrais-tu demander ?',
                        'choices' => [
                            ['choice_text' => '¿Puedes número ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Puedes repetir el número más despacio?', 'is_correct' => true],
                            ['choice_text' => '¿Qué número eres?', 'is_correct' => false],
                            ['choice_text' => 'Repite teléfono tú de.', 'is_correct' => false],
                        ],
                        'explanation' => 'La demande demande clairement que le numéro soit répété plus lentement.',
                    ],
                    [
                        'question' => 'Tu veux vérifier si une réunion a lieu demain. Quelle question est la meilleure ?',
                        'choices' => [
                            ['choice_text' => '¿Mañana reunión eres?', 'is_correct' => false],
                            ['choice_text' => '¿Es tú reunión mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Qué reunión mañana es?', 'is_correct' => false],
                            ['choice_text' => '¿La reunión es mañana?', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette question simple vérifie directement la date de la réunion.',
                    ],
                ],
            ],
            [
                'title' => 'Jeu de rôle : voyage et services',
                'description' => 'Entraîne-toi à choisir les bonnes expressions orales pour les hôtels, les restaurants, les transports et les petits imprévus de voyage.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'À l’hôtel, tu veux t’enregistrer. Quelle entrée en matière est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Hola, soy una reserva Karim.', 'is_correct' => false],
                            ['choice_text' => 'Hola, tengo una reserva a nombre de Karim.', 'is_correct' => true],
                            ['choice_text' => 'Tengo hotel Karim nombre.', 'is_correct' => false],
                            ['choice_text' => 'Estoy reserva de Karim.', 'is_correct' => false],
                        ],
                        'explanation' => '« Tengo una reserva a nombre de… » est une phrase standard pour s’enregistrer à l’hôtel.',
                    ],
                    [
                        'question' => 'Le réceptionniste de l’hôtel demande : « ¿Cuántas noches se queda? » Tu restes trois nuits. Que dis-tu ?',
                        'choices' => [
                            ['choice_text' => 'Me quedo tres.', 'is_correct' => false],
                            ['choice_text' => 'Soy tres noches.', 'is_correct' => false],
                            ['choice_text' => 'Tengo noches tres.', 'is_correct' => false],
                            ['choice_text' => 'Tres noches.', 'is_correct' => true],
                        ],
                        'explanation' => 'Une réponse courte et directe comme « Tres noches » est tout à fait naturelle dans ce contexte.',
                    ],
                    [
                        'question' => 'Au restaurant, tu n’as pas reçu ton eau. Quelle demande est polie ?',
                        'choices' => [
                            ['choice_text' => 'Dame agua ahora.', 'is_correct' => false],
                            ['choice_text' => 'Traer agua nosotros.', 'is_correct' => false],
                            ['choice_text' => 'Perdone, ¿nos puede traer agua, por favor?', 'is_correct' => true],
                            ['choice_text' => 'Agua no tenemos.', 'is_correct' => false],
                        ],
                        'explanation' => '« Perdone » et « por favor » rendent la demande appropriée pour un restaurant.',
                    ],
                    [
                        'question' => 'Tu es à la gare et tu ne trouves pas ton quai. Quelle question est utile ?',
                        'choices' => [
                            ['choice_text' => '¿Me puede decir dónde está el andén cuatro?', 'is_correct' => true],
                            ['choice_text' => '¿Qué es andén cuatro dónde?', 'is_correct' => false],
                            ['choice_text' => '¿Tiene usted plataforma?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde soy el cuatro?', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase demande poliment à un employé où se trouve le quai numéro quatre.',
                    ],
                    [
                        'question' => 'Un chauffeur de taxi demande où tu vas. Quelle réponse est claire ?',
                        'choices' => [
                            ['choice_text' => 'Al Hotel Central, por favor.', 'is_correct' => true],
                            ['choice_text' => 'Soy Hotel Central.', 'is_correct' => false],
                            ['choice_text' => 'Estoy Hotel Central.', 'is_correct' => false],
                            ['choice_text' => 'Quiero central hotel.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une destination après « ¿Adónde va? » peut simplement être donnée comme « Al Hotel Central. »',
                    ],
                    [
                        'question' => 'Tu as un problème dans ta chambre d’hôtel : il n’y a pas d’eau chaude. Quelle phrase est utile ?',
                        'choices' => [
                            ['choice_text' => 'No tengo caliente habitación.', 'is_correct' => false],
                            ['choice_text' => 'No hay agua caliente en la habitación.', 'is_correct' => true],
                            ['choice_text' => 'La habitación no es agua.', 'is_correct' => false],
                            ['choice_text' => 'Agua caliente no soy.', 'is_correct' => false],
                        ],
                        'explanation' => '« No hay… » est la structure naturelle pour dire que quelque chose n’est pas disponible.',
                    ],
                    [
                        'question' => 'Tu veux demander à un habitant où acheter une carte SIM. Quelle question sonne naturelle ?',
                        'choices' => [
                            ['choice_text' => '¿Dónde tengo una tarjeta SIM?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo compro dónde una SIM?', 'is_correct' => false],
                            ['choice_text' => '¿Puedo dónde SIM?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde puedo comprar una tarjeta SIM?', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette question demande clairement où tu peux acheter une carte SIM.',
                    ],
                    [
                        'question' => 'Tu ne sais pas si un train s’arrête à Cordoue. Quelle question est la meilleure ?',
                        'choices' => [
                            ['choice_text' => '¿Este tren es Córdoba?', 'is_correct' => false],
                            ['choice_text' => '¿Córdoba tiene este tren?', 'is_correct' => false],
                            ['choice_text' => '¿Este tren para en Córdoba?', 'is_correct' => true],
                            ['choice_text' => '¿Para Córdoba este tren es?', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette question demande si le train s’arrête à Cordoue.',
                    ],
                    [
                        'question' => 'Un serveur demande : « ¿Todo bien? » Ton repas est bon. Quelle réponse est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Sí, todo está muy bien, gracias.', 'is_correct' => true],
                            ['choice_text' => 'Sí, soy bien.', 'is_correct' => false],
                            ['choice_text' => 'Todo tengo bien.', 'is_correct' => false],
                            ['choice_text' => 'Es muy gracias.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une réponse naturelle et amicale à une question de service.',
                    ],
                    [
                        'question' => 'Tu as besoin d’un reçu après avoir payé. Quelle demande est utile ?',
                        'choices' => [
                            ['choice_text' => '¿Tiene usted recibir?', 'is_correct' => false],
                            ['choice_text' => '¿Me puede dar el recibo, por favor?', 'is_correct' => true],
                            ['choice_text' => 'Dame recibo yo.', 'is_correct' => false],
                            ['choice_text' => '¿Dónde es mi pagar?', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une demande polie pour obtenir le reçu.',
                    ],
                ],
            ],
            [
                'title' => 'Jeu de rôle : travail, études et conversation sociale',
                'description' => 'Choisis des réponses orales naturelles dans des situations professionnelles, scolaires et sociales informelles.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Un professeur demande : « ¿Has terminado el ejercicio? » Tu n’as pas fini. Quelle est la réponse naturelle ?',
                        'choices' => [
                            ['choice_text' => 'No terminé todavía ayer.', 'is_correct' => false],
                            ['choice_text' => 'Soy no terminado.', 'is_correct' => false],
                            ['choice_text' => 'Todavía no.', 'is_correct' => true],
                            ['choice_text' => 'Todavía no estoy.', 'is_correct' => false],
                        ],
                        'explanation' => '« Todavía no » est une réponse courte et très naturelle qui signifie « Pas encore ».',
                    ],
                    [
                        'question' => 'Un collègue demande : « ¿Puedes enviar el archivo hoy? » Tu peux le faire cet après-midi. Que dis-tu ?',
                        'choices' => [
                            ['choice_text' => 'Sí, puedo enviarlo esta tarde.', 'is_correct' => true],
                            ['choice_text' => 'Sí, estoy archivo esta tarde.', 'is_correct' => false],
                            ['choice_text' => 'Puedo lo hoy tarde.', 'is_correct' => false],
                            ['choice_text' => 'Sí, enviar archivo soy.', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse confirme la tâche et donne le moment prévu.',
                    ],
                    [
                        'question' => 'Un camarade de classe dit : « No entiendo esta pregunta. » Quelle réponse est utile ?',
                        'choices' => [
                            ['choice_text' => 'Te la entiendo.', 'is_correct' => false],
                            ['choice_text' => 'Te la explico.', 'is_correct' => true],
                            ['choice_text' => 'La preguntas tú.', 'is_correct' => false],
                            ['choice_text' => 'No entiendo tú.', 'is_correct' => false],
                        ],
                        'explanation' => '« Te la explico » signifie « Je te l’explique » et convient bien à la situation.',
                    ],
                    [
                        'question' => 'Quelqu’un demande : « ¿Quieres estudiar juntos? » Tu es d’accord. Quelle réponse sonne naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Sí, quiero juntos.', 'is_correct' => false],
                            ['choice_text' => 'Buena estudiar sí.', 'is_correct' => false],
                            ['choice_text' => 'Estoy idea.', 'is_correct' => false],
                            ['choice_text' => 'Sí, buena idea.', 'is_correct' => true],
                        ],
                        'explanation' => '« Sí, buena idea » est une façon courante d’accepter une proposition.',
                    ],
                    [
                        'question' => 'Un collègue dit : « Estoy ocupado ahora. » Quelle réponse est prévenante ?',
                        'choices' => [
                            ['choice_text' => 'No, ocupado eres.', 'is_correct' => false],
                            ['choice_text' => 'No pasa nada. Hablamos después.', 'is_correct' => true],
                            ['choice_text' => 'Después ahora hablamos.', 'is_correct' => false],
                            ['choice_text' => 'Tienes ocupado.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette réponse respecte la situation de la personne et propose d’en reparler plus tard.',
                    ],
                    [
                        'question' => 'Un ami demande : « ¿Qué te parece esta película? » Tu l’aimes. Quelle réponse est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Soy bastante película.', 'is_correct' => false],
                            ['choice_text' => 'La parece me gusta.', 'is_correct' => false],
                            ['choice_text' => 'Tengo mucho película.', 'is_correct' => false],
                            ['choice_text' => 'Me gusta bastante.', 'is_correct' => true],
                        ],
                        'explanation' => '« Me gusta bastante » exprime naturellement une opinion positive sur un film.',
                    ],
                    [
                        'question' => 'Tu veux inviter un camarade de classe à prendre un café après le cours. Quelle phrase fonctionne ?',
                        'choices' => [
                            ['choice_text' => '¿Quieres un café tomar después clase?', 'is_correct' => false],
                            ['choice_text' => '¿Tomas querer café?', 'is_correct' => false],
                            ['choice_text' => '¿Quieres tomar un café después de clase?', 'is_correct' => true],
                            ['choice_text' => '¿Puedes café soy después?', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿Quieres + infinitif ? » est une structure naturelle de débutant pour une invitation amicale.',
                    ],
                    [
                        'question' => 'Un coéquipier demande ton avis sur un projet. Tu es d’accord avec lui. Qu’est-ce qui est utile ?',
                        'choices' => [
                            ['choice_text' => 'Me parece bien.', 'is_correct' => true],
                            ['choice_text' => 'Me parece bueno yo.', 'is_correct' => false],
                            ['choice_text' => 'Soy bien con.', 'is_correct' => false],
                            ['choice_text' => 'Parece me plan.', 'is_correct' => false],
                        ],
                        'explanation' => '« Me parece bien » est une façon courante de dire qu’une proposition te semble bonne.',
                    ],
                    [
                        'question' => 'Tu arrives en retard en cours et tu veux t’excuser. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'Perdón, soy tarde.', 'is_correct' => false],
                            ['choice_text' => 'Estoy tarde, perdón por.', 'is_correct' => false],
                            ['choice_text' => 'Llegar tarde soy.', 'is_correct' => false],
                            ['choice_text' => 'Perdón por llegar tarde.', 'is_correct' => true],
                        ],
                        'explanation' => '« Perdón por… » est une façon naturelle de s’excuser pour quelque chose.',
                    ],
                    [
                        'question' => 'Un ami dit : « Nos vemos mañana. » Quelle réponse est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Sí, soy mañana.', 'is_correct' => false],
                            ['choice_text' => 'Sí, hasta mañana.', 'is_correct' => true],
                            ['choice_text' => 'Hasta yo mañana.', 'is_correct' => false],
                            ['choice_text' => 'Mañana nos soy.', 'is_correct' => false],
                        ],
                        'explanation' => '« Hasta mañana » signifie naturellement « À demain ».',
                    ],
                    [
                        'question' => 'Quelqu’un demande : « ¿Qué te gusta hacer en tu tiempo libre? » Quelle réponse convient ?',
                        'choices' => [
                            ['choice_text' => 'Soy leer y música.', 'is_correct' => false],
                            ['choice_text' => 'Tengo gusta escuchar.', 'is_correct' => false],
                            ['choice_text' => 'Me gusta leer y escuchar música.', 'is_correct' => true],
                            ['choice_text' => 'Estoy tiempo libre.', 'is_correct' => false],
                        ],
                        'explanation' => '« Me gusta + infinitif » est une façon naturelle de parler des activités que tu aimes.',
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
