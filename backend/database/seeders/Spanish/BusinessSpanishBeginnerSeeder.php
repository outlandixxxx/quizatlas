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
                'title' => 'Business Spanish Basics',
                'description' => 'Learn practical Spanish for introductions, jobs, departments, schedules, and simple workplace conversations.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'You meet a new colleague at work. Which introduction sounds natural?',
                        'choices' => [
                            ['choice_text' => 'Hola, soy Laura. Trabajo en ventas.', 'is_correct' => true],
                            ['choice_text' => 'Hola, estoy Laura. Trabajo ventas.', 'is_correct' => false],
                            ['choice_text' => 'Hola, tengo Laura. Soy ventas.', 'is_correct' => false],
                            ['choice_text' => 'Hola, me trabajo Laura en ventas.', 'is_correct' => false],
                        ],
                        'explanation' => 'This gives a natural introduction and clearly states the department where Laura works.',
                    ],
                    [
                        'question' => 'A colleague asks, “¿En qué departamento trabajas?” What answer fits?',
                        'choices' => [
                            ['choice_text' => 'Trabajo en el departamento de marketing.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo de el departamento marketing.', 'is_correct' => false],
                            ['choice_text' => 'Soy en marketing departamento.', 'is_correct' => false],
                            ['choice_text' => 'Estoy departamento de marketing.', 'is_correct' => false],
                        ],
                        'explanation' => '“¿En qué departamento…?” asks where you work, so “Trabajo en…” is the natural response.',
                    ],
                    [
                        'question' => 'Which sentence correctly says “I work from Monday to Friday”?',
                        'choices' => [
                            ['choice_text' => 'Trabajo de lunes a viernes.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo en lunes para viernes.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo lunes desde viernes.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo por lunes a viernes.', 'is_correct' => false],
                        ],
                        'explanation' => '“De lunes a viernes” is the standard way to express a weekday range.',
                    ],
                    [
                        'question' => 'A coworker asks, “¿A qué hora empieza la reunión?” Which answer is correct?',
                        'choices' => [
                            ['choice_text' => 'Empieza a las nueve.', 'is_correct' => true],
                            ['choice_text' => 'Es empieza las nueve.', 'is_correct' => false],
                            ['choice_text' => 'Tiene a las nueve.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo las nueve.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks when the meeting starts, so “Empieza a las nueve” directly answers it.',
                    ],
                    [
                        'question' => 'Which phrase is useful when you want to give your job title?',
                        'choices' => [
                            ['choice_text' => 'Soy asistente de ventas.', 'is_correct' => true],
                            ['choice_text' => 'Estoy asistente de ventas.', 'is_correct' => false],
                            ['choice_text' => 'Tengo asistente de ventas.', 'is_correct' => false],
                            ['choice_text' => 'Hago un asistente de ventas.', 'is_correct' => false],
                        ],
                        'explanation' => '“Soy…” is the natural beginner structure for stating your profession or job title.',
                    ],
                    [
                        'question' => 'A colleague says, “Mucho gusto.” Which reply is appropriate in a professional setting?',
                        'choices' => [
                            ['choice_text' => 'Igualmente.', 'is_correct' => true],
                            ['choice_text' => 'Hasta ayer.', 'is_correct' => false],
                            ['choice_text' => 'No trabajo.', 'is_correct' => false],
                            ['choice_text' => 'Qué precio.', 'is_correct' => false],
                        ],
                        'explanation' => '“Igualmente” is a polite and common reply to “Mucho gusto.”',
                    ],
                    [
                        'question' => 'Which sentence is suitable for saying that you have a meeting at two?',
                        'choices' => [
                            ['choice_text' => 'Tengo una reunión a las dos.', 'is_correct' => true],
                            ['choice_text' => 'Soy una reunión de dos.', 'is_correct' => false],
                            ['choice_text' => 'Estoy reunión a dos.', 'is_correct' => false],
                            ['choice_text' => 'Hay una reunión yo dos.', 'is_correct' => false],
                        ],
                        'explanation' => '“Tengo una reunión a las dos” clearly states both the event and the time.',
                    ],
                    [
                        'question' => 'Which phrase politely asks a colleague to repeat something?',
                        'choices' => [
                            ['choice_text' => '¿Puedes repetir, por favor?', 'is_correct' => true],
                            ['choice_text' => 'Repite tú ahora siempre.', 'is_correct' => false],
                            ['choice_text' => '¿Qué repetir tú?', 'is_correct' => false],
                            ['choice_text' => 'No repetir.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a simple and polite workplace request for repetition.',
                    ],
                    [
                        'question' => 'Which sentence says that someone works in the finance department?',
                        'choices' => [
                            ['choice_text' => 'Trabaja en el departamento de finanzas.', 'is_correct' => true],
                            ['choice_text' => 'Trabaja de departamento finanzas.', 'is_correct' => false],
                            ['choice_text' => 'Está departamento finanzas.', 'is_correct' => false],
                            ['choice_text' => 'Es trabaja en finanzas.', 'is_correct' => false],
                        ],
                        'explanation' => '“Trabaja en…” naturally identifies a workplace department.',
                    ],
                    [
                        'question' => 'Which closing is suitable for the end of a simple professional conversation?',
                        'choices' => [
                            ['choice_text' => 'Hasta luego. Que tengas un buen día.', 'is_correct' => true],
                            ['choice_text' => 'Adiós amigo!!!', 'is_correct' => false],
                            ['choice_text' => 'Nos vemos ayer.', 'is_correct' => false],
                            ['choice_text' => 'Gracias de mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is polite and professional without being overly formal.',
                    ],
                ],
            ],
            [
                'title' => 'Business Emails and Messages',
                'description' => 'Practice short professional emails, requests, confirmations, greetings, and useful workplace messages.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Which opening is appropriate for a simple professional email?',
                        'choices' => [
                            ['choice_text' => 'Buenos días, señor López:', 'is_correct' => true],
                            ['choice_text' => 'Hola señor López!!!', 'is_correct' => false],
                            ['choice_text' => 'López hola amigo:', 'is_correct' => false],
                            ['choice_text' => 'Buenos días, tú López.', 'is_correct' => false],
                        ],
                        'explanation' => 'A polite greeting with the recipient\'s name is appropriate for a professional email.',
                    ],
                    [
                        'question' => 'Which sentence politely asks for a document?',
                        'choices' => [
                            ['choice_text' => '¿Podría enviarme el informe, por favor?', 'is_correct' => true],
                            ['choice_text' => 'Envíame informe ahora.', 'is_correct' => false],
                            ['choice_text' => '¿Tú informe puedes?', 'is_correct' => false],
                            ['choice_text' => 'Necesito usted informe.', 'is_correct' => false],
                        ],
                        'explanation' => 'This uses a polite conditional request and clearly identifies the document.',
                    ],
                    [
                        'question' => 'Which sentence confirms a meeting?',
                        'choices' => [
                            ['choice_text' => 'Confirmo nuestra reunión para el martes a las diez.', 'is_correct' => true],
                            ['choice_text' => 'La reunión confirmo martes diez nuestra.', 'is_correct' => false],
                            ['choice_text' => 'Confirmar reunión martes soy.', 'is_correct' => false],
                            ['choice_text' => 'Nuestra reunión es confirmar martes.', 'is_correct' => false],
                        ],
                        'explanation' => 'This clearly confirms the meeting and provides its date and time.',
                    ],
                    [
                        'question' => 'You need to apologize for a delayed reply. Which sentence is professional?',
                        'choices' => [
                            ['choice_text' => 'Disculpe la demora en mi respuesta.', 'is_correct' => true],
                            ['choice_text' => 'Perdón respuesta tarde yo.', 'is_correct' => false],
                            ['choice_text' => 'Yo tarde respuesta soy.', 'is_correct' => false],
                            ['choice_text' => 'Respuesta demora tú.', 'is_correct' => false],
                        ],
                        'explanation' => '“Disculpe la demora…” is a polite professional apology for responding late.',
                    ],
                    [
                        'question' => 'Which sentence is useful for attaching a file?',
                        'choices' => [
                            ['choice_text' => 'Adjunto el documento solicitado.', 'is_correct' => true],
                            ['choice_text' => 'Documento adjunto usted.', 'is_correct' => false],
                            ['choice_text' => 'El solicitado documento yo.', 'is_correct' => false],
                            ['choice_text' => 'Adjunto usted documento es.', 'is_correct' => false],
                        ],
                        'explanation' => '“Adjunto…” is a common concise phrase for saying that a document is attached.',
                    ],
                    [
                        'question' => 'Which email closing is professional and neutral?',
                        'choices' => [
                            ['choice_text' => 'Saludos cordiales,', 'is_correct' => true],
                            ['choice_text' => 'Hasta luego!!!', 'is_correct' => false],
                            ['choice_text' => 'Adiós amigo,', 'is_correct' => false],
                            ['choice_text' => 'Hola otra vez,', 'is_correct' => false],
                        ],
                        'explanation' => '“Saludos cordiales” is a standard professional closing.',
                    ],
                    [
                        'question' => 'Which phrase politely asks for a response?',
                        'choices' => [
                            ['choice_text' => 'Quedo atento a su respuesta.', 'is_correct' => true],
                            ['choice_text' => 'Responde tú ahora.', 'is_correct' => false],
                            ['choice_text' => 'Espero respuesta tú ya.', 'is_correct' => false],
                            ['choice_text' => 'Su respuesta necesito.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a polite professional expression meaning you are awaiting a reply.',
                    ],
                    [
                        'question' => 'Which sentence asks whether a proposed time works for the other person?',
                        'choices' => [
                            ['choice_text' => '¿Le viene bien el jueves a las tres?', 'is_correct' => true],
                            ['choice_text' => '¿Jueves bien usted tres viene?', 'is_correct' => false],
                            ['choice_text' => '¿Tiene usted jueves a las tres bien?', 'is_correct' => false],
                            ['choice_text' => '¿Es jueves su hora tres?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Le viene bien…?” is a useful polite way to ask whether a proposed time is convenient.',
                    ],
                    [
                        'question' => 'Which message is appropriate if a meeting has moved?',
                        'choices' => [
                            ['choice_text' => 'La reunión se ha cambiado al miércoles.', 'is_correct' => true],
                            ['choice_text' => 'La reunión cambia miércoles ha.', 'is_correct' => false],
                            ['choice_text' => 'Miércoles la reunión mover es.', 'is_correct' => false],
                            ['choice_text' => 'La reunión ha miércoles cambiado.', 'is_correct' => false],
                        ],
                        'explanation' => 'This clearly communicates that the meeting has been moved to Wednesday.',
                    ],
                    [
                        'question' => 'Which sentence is appropriate for saying that you received an email?',
                        'choices' => [
                            ['choice_text' => 'He recibido su correo.', 'is_correct' => true],
                            ['choice_text' => 'Soy recibido su correo.', 'is_correct' => false],
                            ['choice_text' => 'Tengo recibido usted correo.', 'is_correct' => false],
                            ['choice_text' => 'Recibo su correo ayer.', 'is_correct' => false],
                        ],
                        'explanation' => '“He recibido su correo” is a natural professional way to confirm receipt.',
                    ],
                    [
                        'question' => 'Which sentence is polite when requesting more information?',
                        'choices' => [
                            ['choice_text' => '¿Podría darme más información sobre el producto?', 'is_correct' => true],
                            ['choice_text' => 'Dame más información producto.', 'is_correct' => false],
                            ['choice_text' => '¿Más información usted puede yo?', 'is_correct' => false],
                            ['choice_text' => 'Quiero información tú producto.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a polite and clear business request for additional information.',
                    ],
                    [
                        'question' => 'Which line best thanks someone for their time?',
                        'choices' => [
                            ['choice_text' => 'Muchas gracias por su tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Gracias mucho su tiempo es.', 'is_correct' => false],
                            ['choice_text' => 'Su tiempo gracias mucho.', 'is_correct' => false],
                            ['choice_text' => 'Gracias por tú tiempo señor.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a common professional expression of thanks.',
                    ],
                ],
            ],
            [
                'title' => 'Meetings and Workplace Communication',
                'description' => 'Practice useful language for meetings, agendas, opinions, suggestions, and simple workplace discussion.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'At the start of a meeting, which sentence is natural?',
                        'choices' => [
                            ['choice_text' => 'Buenos días. Empecemos la reunión.', 'is_correct' => true],
                            ['choice_text' => 'Buenos días. Empecemos reunión la.', 'is_correct' => false],
                            ['choice_text' => 'Buenos días. La reunión empezar yo.', 'is_correct' => false],
                            ['choice_text' => 'Buenos días. Empiezo ustedes la reunión.', 'is_correct' => false],
                        ],
                        'explanation' => '“Empecemos” is a natural way to invite the group to begin the meeting.',
                    ],
                    [
                        'question' => 'Which phrase is useful for giving your opinion?',
                        'choices' => [
                            ['choice_text' => 'En mi opinión,', 'is_correct' => true],
                            ['choice_text' => 'En mi reunión,', 'is_correct' => false],
                            ['choice_text' => 'Según yo trabajo,', 'is_correct' => false],
                            ['choice_text' => 'Mi opinión soy,', 'is_correct' => false],
                        ],
                        'explanation' => '“En mi opinión” clearly introduces a personal viewpoint.',
                    ],
                    [
                        'question' => 'Which phrase can introduce a suggestion in a meeting?',
                        'choices' => [
                            ['choice_text' => 'Propongo que...', 'is_correct' => true],
                            ['choice_text' => 'Tengo que propone...', 'is_correct' => false],
                            ['choice_text' => 'Propongo de...', 'is_correct' => false],
                            ['choice_text' => 'Yo propuesta es...', 'is_correct' => false],
                        ],
                        'explanation' => '“Propongo que…” is a common way to introduce a proposal.',
                    ],
                    [
                        'question' => 'Someone asks, “¿Qué te parece este plan?” Which response shows agreement?',
                        'choices' => [
                            ['choice_text' => 'Me parece bien.', 'is_correct' => true],
                            ['choice_text' => 'Me parece no.', 'is_correct' => false],
                            ['choice_text' => 'Estoy de acuerdo no.', 'is_correct' => false],
                            ['choice_text' => 'Es bien me.', 'is_correct' => false],
                        ],
                        'explanation' => '“Me parece bien” is a common phrase for saying that a plan seems good to you.',
                    ],
                    [
                        'question' => 'Which phrase politely disagrees?',
                        'choices' => [
                            ['choice_text' => 'No estoy del todo de acuerdo.', 'is_correct' => true],
                            ['choice_text' => 'No acuerdo tú.', 'is_correct' => false],
                            ['choice_text' => 'Yo no del trabajo.', 'is_correct' => false],
                            ['choice_text' => 'No me parece tú.', 'is_correct' => false],
                        ],
                        'explanation' => 'This expresses disagreement without sounding unnecessarily harsh.',
                    ],
                    [
                        'question' => 'Which sentence asks a colleague to clarify an idea?',
                        'choices' => [
                            ['choice_text' => '¿Podrías explicarlo un poco más?', 'is_correct' => true],
                            ['choice_text' => 'Explica tú ahora idea.', 'is_correct' => false],
                            ['choice_text' => '¿Qué es tú más?', 'is_correct' => false],
                            ['choice_text' => 'Podrías idea esto explicación.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a polite request for additional explanation.',
                    ],
                    [
                        'question' => 'Which phrase is useful when adding another point?',
                        'choices' => [
                            ['choice_text' => 'Además,', 'is_correct' => true],
                            ['choice_text' => 'Adiós,', 'is_correct' => false],
                            ['choice_text' => 'Ayer,', 'is_correct' => false],
                            ['choice_text' => 'Nunca,', 'is_correct' => false],
                        ],
                        'explanation' => '“Además” adds another related point to the discussion.',
                    ],
                    [
                        'question' => 'Which phrase helps move to the next point in a meeting?',
                        'choices' => [
                            ['choice_text' => 'Pasemos al siguiente punto.', 'is_correct' => true],
                            ['choice_text' => 'Vamos el punto ayer.', 'is_correct' => false],
                            ['choice_text' => 'Siguiente punto soy.', 'is_correct' => false],
                            ['choice_text' => 'Pasar punto tú.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a natural meeting expression for moving on to the next agenda item.',
                    ],
                    [
                        'question' => 'Which sentence asks a colleague to share their opinion?',
                        'choices' => [
                            ['choice_text' => '¿Qué opinas?', 'is_correct' => true],
                            ['choice_text' => '¿Qué opinión eres?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo opiniones tú?', 'is_correct' => false],
                            ['choice_text' => '¿Qué piensas de trabajo es?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Qué opinas?” is a simple, natural way to ask someone\'s opinion.',
                    ],
                    [
                        'question' => 'Which phrase is useful for summarizing a decision?',
                        'choices' => [
                            ['choice_text' => 'Entonces, decidimos seguir con esta opción.', 'is_correct' => true],
                            ['choice_text' => 'Entonces, decisión seguimos esta.', 'is_correct' => false],
                            ['choice_text' => 'Decidimos entonces opción es.', 'is_correct' => false],
                            ['choice_text' => 'Seguir opción decidimos que entonces yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence clearly summarizes the group\'s decision.',
                    ],
                ],
            ],
            [
                'title' => 'Customers, Sales, and Services',
                'description' => 'Practice simple Spanish for speaking with customers, discussing products, prices, availability, and basic service issues.',
                'settings' => ['duration' => 25, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'A customer asks, “¿Cuánto cuesta este producto?” Which answer is appropriate?',
                        'choices' => [
                            ['choice_text' => 'Cuesta cincuenta euros.', 'is_correct' => true],
                            ['choice_text' => 'Tiene cincuenta euros.', 'is_correct' => false],
                            ['choice_text' => 'Es cuesta cincuenta.', 'is_correct' => false],
                            ['choice_text' => 'Hace cincuenta euros.', 'is_correct' => false],
                        ],
                        'explanation' => '“Cuesta…” is the standard beginner structure for giving a product price.',
                    ],
                    [
                        'question' => 'A customer asks whether a product is available. Which reply fits?',
                        'choices' => [
                            ['choice_text' => 'Sí, tenemos unidades disponibles.', 'is_correct' => true],
                            ['choice_text' => 'Sí, somos disponibles.', 'is_correct' => false],
                            ['choice_text' => 'Tenemos disponible sí producto es.', 'is_correct' => false],
                            ['choice_text' => 'Está disponible tenemos nosotros.', 'is_correct' => false],
                        ],
                        'explanation' => 'This clearly tells the customer that the product is in stock.',
                    ],
                    [
                        'question' => 'Which question is useful when asking what a customer needs?',
                        'choices' => [
                            ['choice_text' => '¿En qué puedo ayudarle?', 'is_correct' => true],
                            ['choice_text' => '¿Qué ayuda usted es?', 'is_correct' => false],
                            ['choice_text' => '¿Puedo qué ayuda?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo ayuda cliente?', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a common polite customer-service question.',
                    ],
                    [
                        'question' => 'A customer says, “Busco una camisa azul.” Which response is helpful?',
                        'choices' => [
                            ['choice_text' => 'Claro. Tenemos varias opciones aquí.', 'is_correct' => true],
                            ['choice_text' => 'No camisa azul soy.', 'is_correct' => false],
                            ['choice_text' => 'Claro, buscar usted camisa.', 'is_correct' => false],
                            ['choice_text' => 'Aquí tengo cliente.', 'is_correct' => false],
                        ],
                        'explanation' => 'The response acknowledges the request and offers available options.',
                    ],
                    [
                        'question' => 'Which question asks what size a customer needs?',
                        'choices' => [
                            ['choice_text' => '¿Qué talla necesita?', 'is_correct' => true],
                            ['choice_text' => '¿Qué tamaño necesita usted es?', 'is_correct' => false],
                            ['choice_text' => '¿Cuál talla tiene usted?', 'is_correct' => false],
                            ['choice_text' => '¿Qué talla está?', 'is_correct' => false],
                        ],
                        'explanation' => 'This is the natural polite question for asking the customer\'s size.',
                    ],
                    [
                        'question' => 'A customer wants to know whether there is a discount. Which question works?',
                        'choices' => [
                            ['choice_text' => '¿Hay algún descuento?', 'is_correct' => true],
                            ['choice_text' => '¿Tiene descuento usted hay?', 'is_correct' => false],
                            ['choice_text' => '¿Descuento está algún?', 'is_correct' => false],
                            ['choice_text' => '¿Puede descuento es?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Hay algún descuento?” directly asks whether a discount is available.',
                    ],
                    [
                        'question' => 'Which sentence politely explains a product problem?',
                        'choices' => [
                            ['choice_text' => 'Lo siento, el producto está agotado.', 'is_correct' => true],
                            ['choice_text' => 'Lo siento, producto no soy.', 'is_correct' => false],
                            ['choice_text' => 'El producto tiene agotado está.', 'is_correct' => false],
                            ['choice_text' => 'Agotado lo siento producto es yo.', 'is_correct' => false],
                        ],
                        'explanation' => '“Está agotado” means the product is out of stock and is appropriate customer-service language.',
                    ],
                    [
                        'question' => 'A customer asks when an order will arrive. Which answer is useful?',
                        'choices' => [
                            ['choice_text' => 'Llegará el viernes por la mañana.', 'is_correct' => true],
                            ['choice_text' => 'Llega por el viernes mañana será.', 'is_correct' => false],
                            ['choice_text' => 'Está viernes llegar.', 'is_correct' => false],
                            ['choice_text' => 'Tendrá llegada viernes.', 'is_correct' => false],
                        ],
                        'explanation' => 'The future form “llegará” clearly states when the order is expected to arrive.',
                    ],
                    [
                        'question' => 'Which sentence politely offers another option?',
                        'choices' => [
                            ['choice_text' => 'Podemos ofrecerle otro modelo.', 'is_correct' => true],
                            ['choice_text' => 'Ofrecemos usted otro modelo puede.', 'is_correct' => false],
                            ['choice_text' => 'Otro modelo usted ofrecer.', 'is_correct' => false],
                            ['choice_text' => 'Puede otro nosotros.', 'is_correct' => false],
                        ],
                        'explanation' => 'This politely offers an alternative product.',
                    ],
                    [
                        'question' => 'A customer is unhappy with a delay. Which reply is appropriate?',
                        'choices' => [
                            ['choice_text' => 'Entiendo la situación y lamento la demora.', 'is_correct' => true],
                            ['choice_text' => 'No problema, espere usted.', 'is_correct' => false],
                            ['choice_text' => 'La demora usted entiende.', 'is_correct' => false],
                            ['choice_text' => 'Situación lamento usted no.', 'is_correct' => false],
                        ],
                        'explanation' => 'Acknowledging the concern and apologizing for the delay is professional.',
                    ],
                    [
                        'question' => 'Which question helps identify the customer\'s preferred payment method?',
                        'choices' => [
                            ['choice_text' => '¿Cómo desea pagar?', 'is_correct' => true],
                            ['choice_text' => '¿Qué dinero quiere usted es?', 'is_correct' => false],
                            ['choice_text' => '¿Pagar cómo cliente tiene?', 'is_correct' => false],
                            ['choice_text' => '¿Cuál pago es usted?', 'is_correct' => false],
                        ],
                        'explanation' => 'This polite question asks how the customer would like to pay.',
                    ],
                    [
                        'question' => 'Which sentence confirms that an order is ready?',
                        'choices' => [
                            ['choice_text' => 'Su pedido ya está preparado.', 'is_correct' => true],
                            ['choice_text' => 'Su pedido ya prepara.', 'is_correct' => false],
                            ['choice_text' => 'Está preparado su pedir ya es.', 'is_correct' => false],
                            ['choice_text' => 'Su pedido preparar está usted.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a clear customer-service sentence saying the order is ready.',
                    ],
                ],
            ],
            [
                'title' => 'Integrated Beginner Business Spanish',
                'description' => 'Combine workplace conversation, email, meetings, customer communication, and professional problem-solving in realistic beginner situations.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'You need to introduce yourself to a client for the first time. Which sentence is most appropriate?',
                        'choices' => [
                            ['choice_text' => 'Buenos días, soy Marta Gómez y trabajo en atención al cliente.', 'is_correct' => true],
                            ['choice_text' => 'Hola, tengo Marta y atención cliente soy.', 'is_correct' => false],
                            ['choice_text' => 'Buenos días, estoy Marta trabajar cliente.', 'is_correct' => false],
                            ['choice_text' => 'Soy trabajo Marta de cliente.', 'is_correct' => false],
                        ],
                        'explanation' => 'This gives the client\'s greeting, your name, and your department clearly and professionally.',
                    ],
                    [
                        'question' => 'A client asks for more information about a service. Which reply is useful?',
                        'choices' => [
                            ['choice_text' => 'Claro, puedo explicarle las opciones.', 'is_correct' => true],
                            ['choice_text' => 'Claro, explicar usted opciones puedo yo es.', 'is_correct' => false],
                            ['choice_text' => 'Opciones usted explicar claro.', 'is_correct' => false],
                            ['choice_text' => 'Puedo claro servicio usted.', 'is_correct' => false],
                        ],
                        'explanation' => 'The reply is polite and offers to explain the available choices.',
                    ],
                    [
                        'question' => 'Your manager asks whether Thursday at three works for a meeting. Which answer is professional?',
                        'choices' => [
                            ['choice_text' => 'Sí, me viene bien.', 'is_correct' => true],
                            ['choice_text' => 'Sí, yo bien viene.', 'is_correct' => false],
                            ['choice_text' => 'Es bien para mí jueves.', 'is_correct' => false],
                            ['choice_text' => 'Jueves me viene sí bien es.', 'is_correct' => false],
                        ],
                        'explanation' => '“Me viene bien” is a natural way to say that a proposed time is convenient.',
                    ],
                    [
                        'question' => 'You need to tell a colleague that a report is not finished yet. Which sentence is best?',
                        'choices' => [
                            ['choice_text' => 'Todavía no he terminado el informe.', 'is_correct' => true],
                            ['choice_text' => 'Todavía no termino ayer informe.', 'is_correct' => false],
                            ['choice_text' => 'No terminado informe estoy todavía.', 'is_correct' => false],
                            ['choice_text' => 'El informe todavía no soy.', 'is_correct' => false],
                        ],
                        'explanation' => 'This clearly communicates that the report is not finished yet.',
                    ],
                    [
                        'question' => 'Which sentence is best for a short meeting summary?',
                        'choices' => [
                            ['choice_text' => 'Hoy hemos revisado las ventas y hemos acordado el próximo paso.', 'is_correct' => true],
                            ['choice_text' => 'Hoy ventas hemos y próximo paso revisar.', 'is_correct' => false],
                            ['choice_text' => 'Hemos ventas acordar hoy paso.', 'is_correct' => false],
                            ['choice_text' => 'Hoy hemos acordado revisar las ventas hemos.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence naturally summarizes two completed meeting actions.',
                    ],
                    [
                        'question' => 'A customer asks for a product you do not have. Which response is helpful?',
                        'choices' => [
                            ['choice_text' => 'Lo siento, ahora mismo no lo tenemos, pero puedo ofrecerle otra opción.', 'is_correct' => true],
                            ['choice_text' => 'No tenemos. Adiós.', 'is_correct' => false],
                            ['choice_text' => 'Producto no hay usted.', 'is_correct' => false],
                            ['choice_text' => 'No lo tengo, comprar nada.', 'is_correct' => false],
                        ],
                        'explanation' => 'This response is professional because it explains the problem and offers an alternative.',
                    ],
                    [
                        'question' => 'Which sentence is most suitable for a professional follow-up email?',
                        'choices' => [
                            ['choice_text' => 'Le escribo para confirmar nuestra conversación de ayer.', 'is_correct' => true],
                            ['choice_text' => 'Escribo tú confirmar ayer conversación.', 'is_correct' => false],
                            ['choice_text' => 'Ayer conversación le escribo tú.', 'is_correct' => false],
                            ['choice_text' => 'Confirmar escribo conversación es ayer.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a natural formal opening for a follow-up message.',
                    ],
                    [
                        'question' => 'You want to suggest a different solution in a meeting. Which phrase fits?',
                        'choices' => [
                            ['choice_text' => 'Otra posibilidad sería cambiar la fecha.', 'is_correct' => true],
                            ['choice_text' => 'Otra posibilidad cambia fecha es tú.', 'is_correct' => false],
                            ['choice_text' => 'Sería otra posibilidad tú cambiar.', 'is_correct' => false],
                            ['choice_text' => 'La fecha otra posibilidad cambia.', 'is_correct' => false],
                        ],
                        'explanation' => 'This politely presents an alternative without sounding too direct.',
                    ],
                    [
                        'question' => 'Which sentence is appropriate when asking a client to wait briefly?',
                        'choices' => [
                            ['choice_text' => 'Un momento, por favor. Estoy comprobando la información.', 'is_correct' => true],
                            ['choice_text' => 'Espere información yo ahora.', 'is_correct' => false],
                            ['choice_text' => 'Comprobar espere tú momento.', 'is_correct' => false],
                            ['choice_text' => 'Un momento soy comprobando.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence politely asks for a moment and explains what you are doing.',
                    ],
                    [
                        'question' => 'A coworker thanks you for sending a document. What is a natural reply?',
                        'choices' => [
                            ['choice_text' => 'De nada. Para eso estamos.', 'is_correct' => true],
                            ['choice_text' => 'No gracias, documento.', 'is_correct' => false],
                            ['choice_text' => 'De usted nada es.', 'is_correct' => false],
                            ['choice_text' => 'Estamos documento.', 'is_correct' => false],
                        ],
                        'explanation' => '“De nada” is a standard reply to thanks, and “Para eso estamos” is a friendly professional response.',
                    ],
                    [
                        'question' => 'Which sentence is suitable for ending a professional email after solving a customer\'s issue?',
                        'choices' => [
                            ['choice_text' => 'Espero que la solución sea útil. Quedo a su disposición.', 'is_correct' => true],
                            ['choice_text' => 'Adiós cliente espero utilidad.', 'is_correct' => false],
                            ['choice_text' => 'La solución es y usted disposición quedo.', 'is_correct' => false],
                            ['choice_text' => 'Espero solución adiós trabajo.', 'is_correct' => false],
                        ],
                        'explanation' => 'This closes the message politely, confirms concern for the solution, and offers further assistance.',
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
