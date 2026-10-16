<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BusinessSpanishBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'business-spanish')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les bases de l’espagnol des affaires',
                'description' => 'Apprenez un espagnol pratique pour se présenter, parler de son poste, de son service, de ses horaires et pour de simples conversations au travail.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Vous rencontrez un nouveau collègue au travail. Quelle présentation sonne naturellement ?',
                        'choices' => [
                            ['choice_text' => 'Hola, estoy Laura. Trabajo ventas.', 'is_correct' => false],
                            ['choice_text' => 'Hola, tengo Laura. Soy ventas.', 'is_correct' => false],
                            ['choice_text' => 'Hola, soy Laura. Trabajo en ventas.', 'is_correct' => true],
                            ['choice_text' => 'Hola, me trabajo Laura en ventas.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase donne une présentation naturelle et indique clairement le service dans lequel travaille Laura.',
                    ],
                    [
                        'question' => 'Un collègue demande : « ¿En qué departamento trabajas? » Quelle réponse convient ?',
                        'choices' => [
                            ['choice_text' => 'Trabajo de el departamento marketing.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo en el departamento de marketing.', 'is_correct' => true],
                            ['choice_text' => 'Soy en marketing departamento.', 'is_correct' => false],
                            ['choice_text' => 'Estoy departamento de marketing.', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿En qué departamento…? » demande où vous travaillez, donc « Trabajo en… » est la réponse naturelle.',
                    ],
                    [
                        'question' => 'Quelle phrase dit correctement « je travaille du lundi au vendredi » ?',
                        'choices' => [
                            ['choice_text' => 'Trabajo de lunes a viernes.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo en lunes para viernes.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo lunes desde viernes.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo por lunes a viernes.', 'is_correct' => false],
                        ],
                        'explanation' => '« De lunes a viernes » est la façon standard d’exprimer une plage de jours de la semaine.',
                    ],
                    [
                        'question' => 'Un collègue demande : « ¿A qué hora empieza la reunión? » Quelle réponse est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Es empieza las nueve.', 'is_correct' => false],
                            ['choice_text' => 'Tiene a las nueve.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo las nueve.', 'is_correct' => false],
                            ['choice_text' => 'Empieza a las nueve.', 'is_correct' => true],
                        ],
                        'explanation' => 'La question demande à quelle heure commence la réunion, donc « Empieza a las nueve » y répond directement.',
                    ],
                    [
                        'question' => 'Quelle expression est utile pour donner son intitulé de poste ?',
                        'choices' => [
                            ['choice_text' => 'Estoy asistente de ventas.', 'is_correct' => false],
                            ['choice_text' => 'Tengo asistente de ventas.', 'is_correct' => false],
                            ['choice_text' => 'Soy asistente de ventas.', 'is_correct' => true],
                            ['choice_text' => 'Hago un asistente de ventas.', 'is_correct' => false],
                        ],
                        'explanation' => '« Soy… » est la structure naturelle, de niveau débutant, pour indiquer sa profession ou son poste.',
                    ],
                    [
                        'question' => 'Un collègue dit : « Mucho gusto. » Quelle réponse convient dans un cadre professionnel ?',
                        'choices' => [
                            ['choice_text' => 'Hasta ayer.', 'is_correct' => false],
                            ['choice_text' => 'Igualmente.', 'is_correct' => true],
                            ['choice_text' => 'No trabajo.', 'is_correct' => false],
                            ['choice_text' => 'Qué precio.', 'is_correct' => false],
                        ],
                        'explanation' => '« Igualmente » est une réponse polie et courante à « Mucho gusto. »',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour dire que vous avez une réunion à deux heures ?',
                        'choices' => [
                            ['choice_text' => 'Tengo una reunión a las dos.', 'is_correct' => true],
                            ['choice_text' => 'Soy una reunión de dos.', 'is_correct' => false],
                            ['choice_text' => 'Estoy reunión a dos.', 'is_correct' => false],
                            ['choice_text' => 'Hay una reunión yo dos.', 'is_correct' => false],
                        ],
                        'explanation' => '« Tengo una reunión a las dos » indique clairement l’événement et l’heure.',
                    ],
                    [
                        'question' => 'Quelle expression demande poliment à un collègue de répéter quelque chose ?',
                        'choices' => [
                            ['choice_text' => 'Repite tú ahora siempre.', 'is_correct' => false],
                            ['choice_text' => '¿Qué repetir tú?', 'is_correct' => false],
                            ['choice_text' => 'No repetir.', 'is_correct' => false],
                            ['choice_text' => '¿Puedes repetir, por favor?', 'is_correct' => true],
                        ],
                        'explanation' => 'C’est une demande simple et polie, au travail, pour obtenir une répétition.',
                    ],
                    [
                        'question' => 'Quelle phrase dit que quelqu’un travaille au service financier ?',
                        'choices' => [
                            ['choice_text' => 'Trabaja de departamento finanzas.', 'is_correct' => false],
                            ['choice_text' => 'Está departamento finanzas.', 'is_correct' => false],
                            ['choice_text' => 'Trabaja en el departamento de finanzas.', 'is_correct' => true],
                            ['choice_text' => 'Es trabaja en finanzas.', 'is_correct' => false],
                        ],
                        'explanation' => '« Trabaja en… » identifie naturellement un service de l’entreprise.',
                    ],
                    [
                        'question' => 'Quelle formule de clôture convient à la fin d’une conversation professionnelle simple ?',
                        'choices' => [
                            ['choice_text' => 'Adiós amigo!!!', 'is_correct' => false],
                            ['choice_text' => 'Nos vemos ayer.', 'is_correct' => false],
                            ['choice_text' => 'Gracias de mañana.', 'is_correct' => false],
                            ['choice_text' => 'Hasta luego. Que tengas un buen día.', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette formule est polie et professionnelle sans être excessivement formelle.',
                    ],
                ],
            ],
            [
                'title' => 'Courriels et messages professionnels',
                'description' => 'Pratiquez de courts courriels professionnels, des demandes, des confirmations, des salutations et des messages utiles au travail.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelle formule d’ouverture convient à un courriel professionnel simple ?',
                        'choices' => [
                            ['choice_text' => 'Buenos días, señor López:', 'is_correct' => true],
                            ['choice_text' => 'Hola señor López!!!', 'is_correct' => false],
                            ['choice_text' => 'López hola amigo:', 'is_correct' => false],
                            ['choice_text' => 'Buenos días, tú López.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une salutation polie suivie du nom du destinataire convient à un courriel professionnel.',
                    ],
                    [
                        'question' => 'Quelle phrase demande poliment un document ?',
                        'choices' => [
                            ['choice_text' => 'Envíame informe ahora.', 'is_correct' => false],
                            ['choice_text' => '¿Podría enviarme el informe, por favor?', 'is_correct' => true],
                            ['choice_text' => '¿Tú informe puedes?', 'is_correct' => false],
                            ['choice_text' => 'Necesito usted informe.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase utilise une demande polie au conditionnel et identifie clairement le document.',
                    ],
                    [
                        'question' => 'Quelle phrase confirme une réunion ?',
                        'choices' => [
                            ['choice_text' => 'La reunión confirmo martes diez nuestra.', 'is_correct' => false],
                            ['choice_text' => 'Confirmar reunión martes soy.', 'is_correct' => false],
                            ['choice_text' => 'Confirmo nuestra reunión para el martes a las diez.', 'is_correct' => true],
                            ['choice_text' => 'Nuestra reunión es confirmar martes.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase confirme clairement la réunion et en donne la date et l’heure.',
                    ],
                    [
                        'question' => 'Vous devez vous excuser pour une réponse tardive. Quelle phrase est professionnelle ?',
                        'choices' => [
                            ['choice_text' => 'Perdón respuesta tarde yo.', 'is_correct' => false],
                            ['choice_text' => 'Yo tarde respuesta soy.', 'is_correct' => false],
                            ['choice_text' => 'Respuesta demora tú.', 'is_correct' => false],
                            ['choice_text' => 'Disculpe la demora en mi respuesta.', 'is_correct' => true],
                        ],
                        'explanation' => '« Disculpe la demora… » est une excuse professionnelle polie pour une réponse tardive.',
                    ],
                    [
                        'question' => 'Quelle phrase est utile pour signaler qu’un fichier est joint ?',
                        'choices' => [
                            ['choice_text' => 'Documento adjunto usted.', 'is_correct' => false],
                            ['choice_text' => 'Adjunto el documento solicitado.', 'is_correct' => true],
                            ['choice_text' => 'El solicitado documento yo.', 'is_correct' => false],
                            ['choice_text' => 'Adjunto usted documento es.', 'is_correct' => false],
                        ],
                        'explanation' => '« Adjunto… » est une formule courante et concise pour dire qu’un document est joint.',
                    ],
                    [
                        'question' => 'Quelle formule de clôture d’e-mail est professionnelle et neutre ?',
                        'choices' => [
                            ['choice_text' => 'Hasta luego!!!', 'is_correct' => false],
                            ['choice_text' => 'Adiós amigo,', 'is_correct' => false],
                            ['choice_text' => 'Hola otra vez,', 'is_correct' => false],
                            ['choice_text' => 'Saludos cordiales,', 'is_correct' => true],
                        ],
                        'explanation' => '« Saludos cordiales » est une formule de clôture professionnelle standard.',
                    ],
                    [
                        'question' => 'Quelle expression demande poliment une réponse ?',
                        'choices' => [
                            ['choice_text' => 'Responde tú ahora.', 'is_correct' => false],
                            ['choice_text' => 'Espero respuesta tú ya.', 'is_correct' => false],
                            ['choice_text' => 'Quedo atento a su respuesta.', 'is_correct' => true],
                            ['choice_text' => 'Su respuesta necesito.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une expression professionnelle polie qui signifie que vous attendez une réponse.',
                    ],
                    [
                        'question' => 'Quelle phrase demande si un horaire proposé convient à l’autre personne ?',
                        'choices' => [
                            ['choice_text' => '¿Le viene bien el jueves a las tres?', 'is_correct' => true],
                            ['choice_text' => '¿Jueves bien usted tres viene?', 'is_correct' => false],
                            ['choice_text' => '¿Tiene usted jueves a las tres bien?', 'is_correct' => false],
                            ['choice_text' => '¿Es jueves su hora tres?', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿Le viene bien…? » est une façon polie et utile de demander si un horaire convient.',
                    ],
                    [
                        'question' => 'Quel message convient si une réunion a été déplacée ?',
                        'choices' => [
                            ['choice_text' => 'La reunión cambia miércoles ha.', 'is_correct' => false],
                            ['choice_text' => 'Miércoles la reunión mover es.', 'is_correct' => false],
                            ['choice_text' => 'La reunión ha miércoles cambiado.', 'is_correct' => false],
                            ['choice_text' => 'La reunión se ha cambiado al miércoles.', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette phrase indique clairement que la réunion a été déplacée au mercredi.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour dire que vous avez reçu un e-mail ?',
                        'choices' => [
                            ['choice_text' => 'Soy recibido su correo.', 'is_correct' => false],
                            ['choice_text' => 'Tengo recibido usted correo.', 'is_correct' => false],
                            ['choice_text' => 'He recibido su correo.', 'is_correct' => true],
                            ['choice_text' => 'Recibo su correo ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '« He recibido su correo » est une façon professionnelle naturelle de confirmer la réception.',
                    ],
                    [
                        'question' => 'Quelle phrase est polie pour demander davantage d’informations ?',
                        'choices' => [
                            ['choice_text' => '¿Podría darme más información sobre el producto?', 'is_correct' => true],
                            ['choice_text' => 'Dame más información producto.', 'is_correct' => false],
                            ['choice_text' => '¿Más información usted puede yo?', 'is_correct' => false],
                            ['choice_text' => 'Quiero información tú producto.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une demande professionnelle polie et claire pour des informations supplémentaires.',
                    ],
                    [
                        'question' => 'Quelle phrase remercie le mieux quelqu’un pour son temps ?',
                        'choices' => [
                            ['choice_text' => 'Gracias mucho su tiempo es.', 'is_correct' => false],
                            ['choice_text' => 'Muchas gracias por su tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Su tiempo gracias mucho.', 'is_correct' => false],
                            ['choice_text' => 'Gracias por tú tiempo señor.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une expression de remerciement courante dans un cadre professionnel.',
                    ],
                ],
            ],
            [
                'title' => 'Réunions et communication au travail',
                'description' => 'Pratiquez un vocabulaire utile pour les réunions, l’ordre du jour, les opinions, les suggestions et les discussions simples au travail.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Au début d’une réunion, quelle phrase est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Buenos días. Empecemos la reunión.', 'is_correct' => true],
                            ['choice_text' => 'Buenos días. Empecemos reunión la.', 'is_correct' => false],
                            ['choice_text' => 'Buenos días. La reunión empezar yo.', 'is_correct' => false],
                            ['choice_text' => 'Buenos días. Empiezo ustedes la reunión.', 'is_correct' => false],
                        ],
                        'explanation' => '« Empecemos » est une façon naturelle d’inviter le groupe à commencer la réunion.',
                    ],
                    [
                        'question' => 'Quelle expression est utile pour donner son opinion ?',
                        'choices' => [
                            ['choice_text' => 'En mi reunión,', 'is_correct' => false],
                            ['choice_text' => 'En mi opinión,', 'is_correct' => true],
                            ['choice_text' => 'Según yo trabajo,', 'is_correct' => false],
                            ['choice_text' => 'Mi opinión soy,', 'is_correct' => false],
                        ],
                        'explanation' => '« En mi opinión » introduit clairement un point de vue personnel.',
                    ],
                    [
                        'question' => 'Quelle expression peut introduire une suggestion en réunion ?',
                        'choices' => [
                            ['choice_text' => 'Tengo que propone...', 'is_correct' => false],
                            ['choice_text' => 'Propongo de...', 'is_correct' => false],
                            ['choice_text' => 'Yo propuesta es...', 'is_correct' => false],
                            ['choice_text' => 'Propongo que...', 'is_correct' => true],
                        ],
                        'explanation' => '« Propongo que… » est une façon courante d’introduire une proposition.',
                    ],
                    [
                        'question' => 'Quelqu’un demande : « ¿Qué te parece este plan? » Quelle réponse exprime l’accord ?',
                        'choices' => [
                            ['choice_text' => 'Me parece no.', 'is_correct' => false],
                            ['choice_text' => 'Estoy de acuerdo no.', 'is_correct' => false],
                            ['choice_text' => 'Me parece bien.', 'is_correct' => true],
                            ['choice_text' => 'Es bien me.', 'is_correct' => false],
                        ],
                        'explanation' => '« Me parece bien » est une expression courante pour dire qu’un plan vous semble bon.',
                    ],
                    [
                        'question' => 'Quelle expression exprime poliment un désaccord ?',
                        'choices' => [
                            ['choice_text' => 'No acuerdo tú.', 'is_correct' => false],
                            ['choice_text' => 'No estoy del todo de acuerdo.', 'is_correct' => true],
                            ['choice_text' => 'Yo no del trabajo.', 'is_correct' => false],
                            ['choice_text' => 'No me parece tú.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette expression marque un désaccord sans paraître inutilement brusque.',
                    ],
                    [
                        'question' => 'Quelle phrase demande à un collègue de clarifier une idée ?',
                        'choices' => [
                            ['choice_text' => '¿Podrías explicarlo un poco más?', 'is_correct' => true],
                            ['choice_text' => 'Explica tú ahora idea.', 'is_correct' => false],
                            ['choice_text' => '¿Qué es tú más?', 'is_correct' => false],
                            ['choice_text' => 'Podrías idea esto explicación.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une demande polie pour obtenir une explication supplémentaire.',
                    ],
                    [
                        'question' => 'Quelle expression est utile pour ajouter un autre point ?',
                        'choices' => [
                            ['choice_text' => 'Adiós,', 'is_correct' => false],
                            ['choice_text' => 'Ayer,', 'is_correct' => false],
                            ['choice_text' => 'Además,', 'is_correct' => true],
                            ['choice_text' => 'Nunca,', 'is_correct' => false],
                        ],
                        'explanation' => '« Además » ajoute un autre point lié à la discussion.',
                    ],
                    [
                        'question' => 'Quelle expression aide à passer au point suivant d’une réunion ?',
                        'choices' => [
                            ['choice_text' => 'Vamos el punto ayer.', 'is_correct' => false],
                            ['choice_text' => 'Siguiente punto soy.', 'is_correct' => false],
                            ['choice_text' => 'Pasar punto tú.', 'is_correct' => false],
                            ['choice_text' => 'Pasemos al siguiente punto.', 'is_correct' => true],
                        ],
                        'explanation' => 'C’est une expression naturelle, en réunion, pour passer au point suivant de l’ordre du jour.',
                    ],
                    [
                        'question' => 'Quelle phrase demande à un collègue de partager son opinion ?',
                        'choices' => [
                            ['choice_text' => '¿Qué opinión eres?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo opiniones tú?', 'is_correct' => false],
                            ['choice_text' => '¿Qué piensas de trabajo es?', 'is_correct' => false],
                            ['choice_text' => '¿Qué opinas?', 'is_correct' => true],
                        ],
                        'explanation' => '« ¿Qué opinas? » est une façon simple et naturelle de demander l’opinion de quelqu’un.',
                    ],
                    [
                        'question' => 'Quelle expression est utile pour résumer une décision ?',
                        'choices' => [
                            ['choice_text' => 'Entonces, decisión seguimos esta.', 'is_correct' => false],
                            ['choice_text' => 'Entonces, decidimos seguir con esta opción.', 'is_correct' => true],
                            ['choice_text' => 'Decidimos entonces opción es.', 'is_correct' => false],
                            ['choice_text' => 'Seguir opción decidimos que entonces yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase résume clairement la décision du groupe.',
                    ],
                ],
            ],
            [
                'title' => 'Clients, ventes et services',
                'description' => 'Pratiquez un espagnol simple pour parler avec des clients, discuter de produits, de prix, de disponibilité et de problèmes de service de base.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Un client demande : « ¿Cuánto cuesta este producto? » Quelle réponse convient ?',
                        'choices' => [
                            ['choice_text' => 'Tiene cincuenta euros.', 'is_correct' => false],
                            ['choice_text' => 'Es cuesta cincuenta.', 'is_correct' => false],
                            ['choice_text' => 'Hace cincuenta euros.', 'is_correct' => false],
                            ['choice_text' => 'Cuesta cincuenta euros.', 'is_correct' => true],
                        ],
                        'explanation' => '« Cuesta… » est la structure standard, de niveau débutant, pour donner le prix d’un produit.',
                    ],
                    [
                        'question' => 'Un client demande si un produit est disponible. Quelle réponse convient ?',
                        'choices' => [
                            ['choice_text' => 'Sí, somos disponibles.', 'is_correct' => false],
                            ['choice_text' => 'Tenemos disponible sí producto es.', 'is_correct' => false],
                            ['choice_text' => 'Sí, tenemos unidades disponibles.', 'is_correct' => true],
                            ['choice_text' => 'Está disponible tenemos nosotros.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase indique clairement au client que le produit est en stock.',
                    ],
                    [
                        'question' => 'Quelle question est utile pour demander ce dont a besoin un client ?',
                        'choices' => [
                            ['choice_text' => '¿En qué puedo ayudarle?', 'is_correct' => true],
                            ['choice_text' => '¿Qué ayuda usted es?', 'is_correct' => false],
                            ['choice_text' => '¿Puedo qué ayuda?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo ayuda cliente?', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une question polie et courante du service clientèle.',
                    ],
                    [
                        'question' => 'Un client dit : « Busco una camisa azul. » Quelle réponse est utile ?',
                        'choices' => [
                            ['choice_text' => 'No camisa azul soy.', 'is_correct' => false],
                            ['choice_text' => 'Claro. Tenemos varias opciones aquí.', 'is_correct' => true],
                            ['choice_text' => 'Claro, buscar usted camisa.', 'is_correct' => false],
                            ['choice_text' => 'Aquí tengo cliente.', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse reconnaît la demande et propose des options disponibles.',
                    ],
                    [
                        'question' => 'Quelle question demande la taille dont a besoin un client ?',
                        'choices' => [
                            ['choice_text' => '¿Qué tamaño necesita usted es?', 'is_correct' => false],
                            ['choice_text' => '¿Cuál talla tiene usted?', 'is_correct' => false],
                            ['choice_text' => '¿Qué talla necesita?', 'is_correct' => true],
                            ['choice_text' => '¿Qué talla está?', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est la question polie naturelle pour demander la taille du client.',
                    ],
                    [
                        'question' => 'Un client veut savoir s’il y a une remise. Quelle question convient ?',
                        'choices' => [
                            ['choice_text' => '¿Hay algún descuento?', 'is_correct' => true],
                            ['choice_text' => '¿Tiene descuento usted hay?', 'is_correct' => false],
                            ['choice_text' => '¿Descuento está algún?', 'is_correct' => false],
                            ['choice_text' => '¿Puede descuento es?', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿Hay algún descuento? » demande directement si une remise est disponible.',
                    ],
                    [
                        'question' => 'Quelle phrase explique poliment un problème de produit ?',
                        'choices' => [
                            ['choice_text' => 'Lo siento, producto no soy.', 'is_correct' => false],
                            ['choice_text' => 'Lo siento, el producto está agotado.', 'is_correct' => true],
                            ['choice_text' => 'El producto tiene agotado está.', 'is_correct' => false],
                            ['choice_text' => 'Agotado lo siento producto es yo.', 'is_correct' => false],
                        ],
                        'explanation' => '« Está agotado » signifie que le produit est en rupture de stock, et c’est un langage approprié en service clientèle.',
                    ],
                    [
                        'question' => 'Un client demande quand une commande arrivera. Quelle réponse est utile ?',
                        'choices' => [
                            ['choice_text' => 'Llega por el viernes mañana será.', 'is_correct' => false],
                            ['choice_text' => 'Está viernes llegar.', 'is_correct' => false],
                            ['choice_text' => 'Tendrá llegada viernes.', 'is_correct' => false],
                            ['choice_text' => 'Llegará el viernes por la mañana.', 'is_correct' => true],
                        ],
                        'explanation' => 'La forme future « llegará » indique clairement quand la commande est attendue.',
                    ],
                    [
                        'question' => 'Quelle phrase propose poliment une autre option ?',
                        'choices' => [
                            ['choice_text' => 'Ofrecemos usted otro modelo puede.', 'is_correct' => false],
                            ['choice_text' => 'Otro modelo usted ofrecer.', 'is_correct' => false],
                            ['choice_text' => 'Podemos ofrecerle otro modelo.', 'is_correct' => true],
                            ['choice_text' => 'Puede otro nosotros.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase propose poliment un produit alternatif.',
                    ],
                    [
                        'question' => 'Un client est mécontent d’un retard. Quelle réponse est appropriée ?',
                        'choices' => [
                            ['choice_text' => 'No problema, espere usted.', 'is_correct' => false],
                            ['choice_text' => 'Entiendo la situación y lamento la demora.', 'is_correct' => true],
                            ['choice_text' => 'La demora usted entiende.', 'is_correct' => false],
                            ['choice_text' => 'Situación lamento usted no.', 'is_correct' => false],
                        ],
                        'explanation' => 'Reconnaître la préoccupation du client et s’excuser pour le retard est professionnel.',
                    ],
                    [
                        'question' => 'Quelle question permet de connaître le mode de paiement préféré du client ?',
                        'choices' => [
                            ['choice_text' => '¿Cómo desea pagar?', 'is_correct' => true],
                            ['choice_text' => '¿Qué dinero quiere usted es?', 'is_correct' => false],
                            ['choice_text' => '¿Pagar cómo cliente tiene?', 'is_correct' => false],
                            ['choice_text' => '¿Cuál pago es usted?', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette question polie demande comment le client souhaite payer.',
                    ],
                    [
                        'question' => 'Quelle phrase confirme qu’une commande est prête ?',
                        'choices' => [
                            ['choice_text' => 'Su pedido ya prepara.', 'is_correct' => false],
                            ['choice_text' => 'Está preparado su pedir ya es.', 'is_correct' => false],
                            ['choice_text' => 'Su pedido preparar está usted.', 'is_correct' => false],
                            ['choice_text' => 'Su pedido ya está preparado.', 'is_correct' => true],
                        ],
                        'explanation' => 'C’est une phrase claire de service clientèle indiquant que la commande est prête.',
                    ],
                ],
            ],
            [
                'title' => 'Révision intégrée de l’espagnol des affaires pour débutants',
                'description' => 'Combinez conversation au travail, e-mails, réunions, communication avec les clients et résolution de problèmes professionnels dans des situations réalistes pour débutants.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Vous devez vous présenter à un client pour la première fois. Quelle phrase est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'Hola, tengo Marta y atención cliente soy.', 'is_correct' => false],
                            ['choice_text' => 'Buenos días, estoy Marta trabajar cliente.', 'is_correct' => false],
                            ['choice_text' => 'Buenos días, soy Marta Gómez y trabajo en atención al cliente.', 'is_correct' => true],
                            ['choice_text' => 'Soy trabajo Marta de cliente.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette phrase donne la salutation, votre nom et votre service clairement et de façon professionnelle.',
                    ],
                    [
                        'question' => 'Un client demande plus d’informations sur un service. Quelle réponse est utile ?',
                        'choices' => [
                            ['choice_text' => 'Claro, puedo explicarle las opciones.', 'is_correct' => true],
                            ['choice_text' => 'Claro, explicar usted opciones puedo yo es.', 'is_correct' => false],
                            ['choice_text' => 'Opciones usted explicar claro.', 'is_correct' => false],
                            ['choice_text' => 'Puedo claro servicio usted.', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse est polie et propose d’expliquer les options disponibles.',
                    ],
                    [
                        'question' => 'Votre responsable demande si jeudi à trois heures convient pour une réunion. Quelle réponse est professionnelle ?',
                        'choices' => [
                            ['choice_text' => 'Sí, yo bien viene.', 'is_correct' => false],
                            ['choice_text' => 'Sí, me viene bien.', 'is_correct' => true],
                            ['choice_text' => 'Es bien para mí jueves.', 'is_correct' => false],
                            ['choice_text' => 'Jueves me viene sí bien es.', 'is_correct' => false],
                        ],
                        'explanation' => '« Me viene bien » est une façon naturelle de dire qu’un horaire proposé convient.',
                    ],
                    [
                        'question' => 'Vous devez dire à un collègue qu’un rapport n’est pas encore terminé. Quelle phrase est la meilleure ?',
                        'choices' => [
                            ['choice_text' => 'Todavía no termino ayer informe.', 'is_correct' => false],
                            ['choice_text' => 'No terminado informe estoy todavía.', 'is_correct' => false],
                            ['choice_text' => 'El informe todavía no soy.', 'is_correct' => false],
                            ['choice_text' => 'Todavía no he terminado el informe.', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette phrase indique clairement que le rapport n’est pas encore terminé.',
                    ],
                    [
                        'question' => 'Quelle phrase convient le mieux à un court résumé de réunion ?',
                        'choices' => [
                            ['choice_text' => 'Hoy ventas hemos y próximo paso revisar.', 'is_correct' => false],
                            ['choice_text' => 'Hemos ventas acordar hoy paso.', 'is_correct' => false],
                            ['choice_text' => 'Hoy hemos acordado revisar las ventas hemos.', 'is_correct' => false],
                            ['choice_text' => 'Hoy hemos revisado las ventas y hemos acordado el próximo paso.', 'is_correct' => true],
                        ],
                        'explanation' => 'La phrase résume naturellement deux actions accomplies pendant la réunion.',
                    ],
                    [
                        'question' => 'Un client demande un produit que vous n’avez pas. Quelle réponse est utile ?',
                        'choices' => [
                            ['choice_text' => 'No tenemos. Adiós.', 'is_correct' => false],
                            ['choice_text' => 'Producto no hay usted.', 'is_correct' => false],
                            ['choice_text' => 'Lo siento, ahora mismo no lo tenemos, pero puedo ofrecerle otra opción.', 'is_correct' => true],
                            ['choice_text' => 'No lo tengo, comprar nada.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette réponse est professionnelle car elle explique le problème et propose une alternative.',
                    ],
                    [
                        'question' => 'Quelle phrase convient le mieux à un e-mail professionnel de relance ?',
                        'choices' => [
                            ['choice_text' => 'Le escribo para confirmar nuestra conversación de ayer.', 'is_correct' => true],
                            ['choice_text' => 'Escribo tú confirmar ayer conversación.', 'is_correct' => false],
                            ['choice_text' => 'Ayer conversación le escribo tú.', 'is_correct' => false],
                            ['choice_text' => 'Confirmar escribo conversación es ayer.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une ouverture formelle naturelle pour un message de relance.',
                    ],
                    [
                        'question' => 'Vous voulez suggérer une autre solution en réunion. Quelle expression convient ?',
                        'choices' => [
                            ['choice_text' => 'Otra posibilidad cambia fecha es tú.', 'is_correct' => false],
                            ['choice_text' => 'Otra posibilidad sería cambiar la fecha.', 'is_correct' => true],
                            ['choice_text' => 'Sería otra posibilidad tú cambiar.', 'is_correct' => false],
                            ['choice_text' => 'La fecha otra posibilidad cambia.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette expression présente poliment une alternative sans paraître trop directe.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour demander à un client d’attendre un instant ?',
                        'choices' => [
                            ['choice_text' => 'Espere información yo ahora.', 'is_correct' => false],
                            ['choice_text' => 'Comprobar espere tú momento.', 'is_correct' => false],
                            ['choice_text' => 'Un momento, por favor. Estoy comprobando la información.', 'is_correct' => true],
                            ['choice_text' => 'Un momento soy comprobando.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase demande poliment un instant et explique ce que vous êtes en train de faire.',
                    ],
                    [
                        'question' => 'Un collègue vous remercie pour l’envoi d’un document. Quelle est une réponse naturelle ?',
                        'choices' => [
                            ['choice_text' => 'De nada. Para eso estamos.', 'is_correct' => true],
                            ['choice_text' => 'No gracias, documento.', 'is_correct' => false],
                            ['choice_text' => 'De usted nada es.', 'is_correct' => false],
                            ['choice_text' => 'Estamos documento.', 'is_correct' => false],
                        ],
                        'explanation' => '« De nada » est une réponse standard aux remerciements, et « Para eso estamos » est une réponse professionnelle amicale.',
                    ],
                    [
                        'question' => 'Quelle phrase convient pour clore un e-mail professionnel après avoir résolu le problème d’un client ?',
                        'choices' => [
                            ['choice_text' => 'Adiós cliente espero utilidad.', 'is_correct' => false],
                            ['choice_text' => 'La solución es y usted disposición quedo.', 'is_correct' => false],
                            ['choice_text' => 'Espero solución adiós trabajo.', 'is_correct' => false],
                            ['choice_text' => 'Espero que la solución sea útil. Quedo a su disposición.', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette phrase clôt le message poliment, marque de l’attention pour la solution apportée et propose une aide supplémentaire.',
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
