<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'spanish-fundamentals')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Números, fechas y horas',
                'description' => 'Números básicos, días de la semana, meses, fechas y expresiones sencillas de la hora.',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => '¿Cuál es el primer mes del año?',
                        'choices' => [
                            [
                                'choice_text' => 'enero',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'marzo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'junio',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'diciembre',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Enero es el primer mes del año.',
                    ],
                    [
                        'question' => '¿Cuál es el día que viene después de lunes?',
                        'choices' => [
                            [
                                'choice_text' => 'martes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'domingo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'jueves',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'viernes',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Después de lunes viene martes.',
                    ],
                    [
                        'question' => '¿Qué fecha corresponde a «el primero de mayo»?',
                        'choices' => [
                            [
                                'choice_text' => '1 de mayo',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '5 de enero',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10 de mayo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '15 de marzo',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'El primero de mayo corresponde al día 1 del mes de mayo.',
                    ],
                    [
                        'question' => '¿Cómo se pregunta «What time is it?» en español?',
                        'choices' => [
                            [
                                'choice_text' => '¿Qué hora es?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '¿Qué día es?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Qué tiempo eres?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Cuánto hora tiene?',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '¿Qué hora es? es la pregunta habitual para pedir la hora.',
                    ],
                    [
                        'question' => '¿Cómo se dice «veinte» en cifras?',
                        'choices' => [
                            [
                                'choice_text' => '20',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '22',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '30',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Veinte corresponde al número 20.',
                    ],
                    [
                        'question' => '¿Qué mes viene después de septiembre?',
                        'choices' => [
                            [
                                'choice_text' => 'octubre',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'agosto',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'noviembre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'julio',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Octubre sigue a septiembre.',
                    ],
                    [
                        'question' => '¿Cómo se dice 7 en español?',
                        'choices' => [
                            [
                                'choice_text' => 'siete',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'seis',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ocho',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'diez',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'El número 7 se escribe siete.',
                    ],
                    [
                        'question' => '¿Cómo se dice «three o’clock» en español?',
                        'choices' => [
                            [
                                'choice_text' => 'Las tres.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Los tres.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Es tres.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tiene tres.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Para las horas distintas de la una se usa normalmente Las + número.',
                    ],
                    [
                        'question' => '¿Qué día precede normalmente a domingo?',
                        'choices' => [
                            [
                                'choice_text' => 'sábado',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'viernes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'lunes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'miércoles',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'En la secuencia habitual de la semana, sábado viene antes de domingo.',
                    ],
                    [
                        'question' => '¿Cómo se dice 12 en español?',
                        'choices' => [
                            [
                                'choice_text' => 'doce',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'diez',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'once',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'trece',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'El número 12 es doce.',
                    ],
                    [
                        'question' => '¿Qué número significa «quince»?',
                        'choices' => [
                            [
                                'choice_text' => '15',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '14',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '16',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '50',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Quince corresponde al número 15.',
                    ],
                ],
            ],
            [
                'title' => 'Comunicación básica en situaciones reales',
                'description' => 'Expresiones prácticas para pedir ayuda, comprender una conversación y responder en situaciones comunes.',
                'duration' => 21,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => '¿Qué expresión sirve para pedir ayuda?',
                        'choices' => [
                            [
                                'choice_text' => '¿Puedes ayudarme?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '¿Puedes llamarme ayer?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Puedes ser mesa?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Puedes tener calle?',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '¿Puedes ayudarme? es una petición directa y natural de ayuda.',
                    ],
                    [
                        'question' => '¿Cómo se pregunta «Where is the bathroom?» en español?',
                        'choices' => [
                            [
                                'choice_text' => '¿Dónde está el baño?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '¿Dónde eres el baño?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Qué tienes el baño?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Cómo vive el baño?',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '¿Dónde está el baño? es la pregunta natural para localizar el baño.',
                    ],
                    [
                        'question' => '¿Qué significa «¡Cuidado!»?',
                        'choices' => [
                            [
                                'choice_text' => 'Be careful!',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Good morning!',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'See you tomorrow!',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I agree!',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '¡Cuidado! se usa para advertir a alguien de un posible peligro o problema.',
                    ],
                    [
                        'question' => '¿Cómo se pide que alguien repita algo?',
                        'choices' => [
                            [
                                'choice_text' => '¿Puedes repetir, por favor?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '¿Puedes dormir, por favor?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Puedes cerrar, por favor?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Puedes llegar, por favor?',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '¿Puedes repetir, por favor? es una petición habitual cuando no escuchaste o entendiste algo.',
                    ],
                    [
                        'question' => '¿Qué expresión significa «I do not understand»?',
                        'choices' => [
                            [
                                'choice_text' => 'No entiendo.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'No hablo.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'No vivo.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'No quiero.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'No entiendo expresa que no comprendiste lo que se dijo.',
                    ],
                    [
                        'question' => '¿Cuál es una forma cortés de pedir información?',
                        'choices' => [
                            [
                                'choice_text' => '¿Me puede ayudar, por favor?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Dame información ahora.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tú información.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Información ayer.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '¿Me puede ayudar, por favor? es una petición cortés, especialmente en situaciones formales.',
                    ],
                    [
                        'question' => '¿Cómo se dice «Can you speak more slowly?» de forma natural?',
                        'choices' => [
                            [
                                'choice_text' => '¿Puedes hablar más despacio?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '¿Puedes hablar más grande?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Puedes hablar más ayer?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Puedes hablar más puerta?',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Hablar más despacio es la expresión natural para pedir una velocidad menor.',
                    ],
                    [
                        'question' => 'Si alguien dice «¿Hablas inglés?», ¿qué pregunta está haciendo?',
                        'choices' => [
                            [
                                'choice_text' => 'Pregunta si sabes hablar inglés.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pregunta dónde vives.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pregunta tu edad.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pregunta si tienes hambre.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '¿Hablas inglés? pregunta sobre la capacidad o costumbre de hablar inglés.',
                    ],
                    [
                        'question' => '¿Cuál es una respuesta correcta a «¿Hablas español?» si eres principiante?',
                        'choices' => [
                            [
                                'choice_text' => 'Un poco.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Soy mañana.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tengo tres.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Es de Madrid.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un poco es una respuesta natural para indicar un nivel limitado.',
                    ],
                    [
                        'question' => '¿Qué significa «No sé»?',
                        'choices' => [
                            [
                                'choice_text' => 'I do not know.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I do not live.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I do not eat.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I do not speak.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'No sé significa que la persona no tiene la información o la respuesta.',
                    ],
                    [
                        'question' => '¿Qué respuesta es natural cuando alguien te dice «Que tengas un buen día»?',
                        'choices' => [
                            [
                                'choice_text' => 'Igualmente.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Soy de España.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tengo quince años.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'No entiendo nada.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Igualmente significa «you too» y responde de forma cortés a un buen deseo.',
                    ],
                    [
                        'question' => '¿Qué significa «Está bien» en una conversación cotidiana?',
                        'choices' => [
                            [
                                'choice_text' => 'That\'s fine / okay.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I am hungry.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It is late yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I am from Spain.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Está bien se usa para aceptar, confirmar o indicar que algo es correcto o adecuado.',
                    ],
                    [
                        'question' => '¿Qué significa «Más despacio, por favor»?',
                        'choices' => [
                            [
                                'choice_text' => 'Please, more slowly.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Please, louder only.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Please, tomorrow.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Please, close the door.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Más despacio pide que la otra persona hable o actúe con menor velocidad.',
                    ],
                    [
                        'question' => '¿Qué significa «Espera un momento»?',
                        'choices' => [
                            [
                                'choice_text' => 'Wait a moment.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Open a window.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Come tomorrow.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Close the book.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Espera es el imperativo de esperar para tú, y un momento indica una espera breve.',
                    ],
                ],
            ],
            [
                'title' => 'Pronunciación y ortografía básica',
                'description' => 'Reconocimiento inicial de sonidos, letras, acentos y patrones básicos de pronunciación.',
                'duration' => 20,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => '¿Qué elemento representa el sonido propio de ñ en palabras como niño?',
                        'choices' => [
                            [
                                'choice_text' => 'La letra ñ',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La letra h',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La letra b',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La letra p',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La ñ representa un sonido característico del español, como en niño o mañana.',
                    ],
                    [
                        'question' => '¿Cuál opción mantiene correctamente la tilde en una pregunta?',
                        'choices' => [
                            [
                                'choice_text' => '¿Dónde vives?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '¿Donde vives?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Donde ¿vives?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Dondé vives?',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Dónde lleva tilde por ser un adverbio interrogativo.',
                    ],
                    [
                        'question' => '¿Cuál es la escritura correcta del número 16?',
                        'choices' => [
                            [
                                'choice_text' => 'dieciséis',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'dieciseis',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'diez y seis',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'diceséis',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La forma estándar es dieciséis y lleva tilde en la segunda e.',
                    ],
                    [
                        'question' => '¿Qué opción representa correctamente la palabra española para «school»?',
                        'choices' => [
                            [
                                'choice_text' => 'escuela',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'escuella',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'escolla',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'eskuela',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La forma estándar es escuela.',
                    ],
                    [
                        'question' => '¿Cuál palabra está correctamente acentuada?',
                        'choices' => [
                            [
                                'choice_text' => 'música',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'musica',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'músíca',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'musicá',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Música es una palabra esdrújula y todas las esdrújulas llevan tilde.',
                    ],
                    [
                        'question' => '¿Qué palabra representa correctamente una palabra que empieza con el sonido /b/?',
                        'choices' => [
                            [
                                'choice_text' => 'bien',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'gien',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'jien',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'vien',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'bien comienza con la letra b y es una palabra básica muy frecuente.',
                    ],
                    [
                        'question' => '¿Cuál palabra contiene una tilde correctamente escrita?',
                        'choices' => [
                            [
                                'choice_text' => 'canción',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'cancion',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'canciónn',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'cancíon',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La palabra canción lleva tilde en la o porque es una palabra aguda terminada en n.',
                    ],
                    [
                        'question' => '¿Cuál opción distingue correctamente entre «si» y «sí»?',
                        'choices' => [
                            [
                                'choice_text' => 'si introduce una condición; sí puede expresar afirmación',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'si siempre significa afirmación',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'sí siempre introduce una condición',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'no hay diferencia escrita',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La conjunción condicional se escribe si sin tilde, mientras que sí puede expresar afirmación o funcionar como pronombre.',
                    ],
                    [
                        'question' => '¿Qué letra es generalmente muda al comienzo de una palabra en español?',
                        'choices' => [
                            [
                                'choice_text' => 'h',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'r',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'm',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'n',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La h no representa normalmente un sonido propio en palabras españolas como hola o hablar.',
                    ],
                    [
                        'question' => '¿Qué vocal española suele tener un sonido estable y claro?',
                        'choices' => [
                            [
                                'choice_text' => 'a',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'h',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'j',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'x',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Las vocales españolas tienen valores relativamente estables; la a representa un sonido claro y estable.',
                    ],
                    [
                        'question' => '¿Cuál palabra necesita tilde para expresar correctamente una pregunta?',
                        'choices' => [
                            [
                                'choice_text' => 'Qué',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Que',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Qúe',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Qe',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Qué lleva tilde cuando funciona como palabra interrogativa o exclamativa.',
                    ],
                ],
            ],
            [
                'title' => 'Objetos y situaciones cotidianas',
                'description' => 'Vocabulario esencial para objetos comunes, espacios y acciones de la vida diaria.',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => '¿Qué palabra significa «book»?',
                        'choices' => [
                            [
                                'choice_text' => 'libro',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'mesa',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'silla',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'puerta',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Libro significa book.',
                    ],
                    [
                        'question' => '¿Qué objeto se usa normalmente para escribir?',
                        'choices' => [
                            [
                                'choice_text' => 'bolígrafo',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ventana',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'zapato',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'reloj',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un bolígrafo es un objeto habitual para escribir.',
                    ],
                    [
                        'question' => '¿Qué acción es lo contrario de «abrir»?',
                        'choices' => [
                            [
                                'choice_text' => 'cerrar',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'subir',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'mirar',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'lavar',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Cerrar es el verbo que expresa la acción opuesta a abrir.',
                    ],
                    [
                        'question' => 'Si alguien dice «Tengo hambre», ¿qué expresa?',
                        'choices' => [
                            [
                                'choice_text' => 'Necesita o desea comer.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Tiene sueño.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Está enfermo de la garganta.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tiene frío.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Tener hambre expresa la necesidad o el deseo de comer.',
                    ],
                    [
                        'question' => '¿Qué significa «puerta»?',
                        'choices' => [
                            [
                                'choice_text' => 'door',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'window',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'floor',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ceiling',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Puerta significa door.',
                    ],
                    [
                        'question' => '¿Qué palabra significa «chair»?',
                        'choices' => [
                            [
                                'choice_text' => 'silla',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'cuchara',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'camisa',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'cama',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Silla significa chair.',
                    ],
                    [
                        'question' => '¿Qué expresión se usa para pedir un objeto de manera educada?',
                        'choices' => [
                            [
                                'choice_text' => 'Por favor',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Nunca gracias',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Hasta ayer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'De dónde',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Por favor se utiliza para hacer peticiones de manera cortés.',
                    ],
                    [
                        'question' => '¿Qué palabra significa «street»?',
                        'choices' => [
                            [
                                'choice_text' => 'calle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'cocina',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'escuela',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'pared',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Calle significa street.',
                    ],
                    [
                        'question' => '¿Qué palabra significa «window»?',
                        'choices' => [
                            [
                                'choice_text' => 'ventana',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'pared',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'techo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'puente',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Ventana significa window.',
                    ],
                    [
                        'question' => '¿Qué acción significa «to open»?',
                        'choices' => [
                            [
                                'choice_text' => 'abrir',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'cerrar',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'dormir',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'correr',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Abrir significa to open.',
                    ],
                    [
                        'question' => '¿Dónde estudia normalmente un estudiante?',
                        'choices' => [
                            [
                                'choice_text' => 'En la escuela.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'En el supermercado solamente.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'En la estación de tren siempre.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'En la playa obligatoriamente.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La escuela es un lugar habitual para estudiar.',
                    ],
                ],
            ],
            [
                'title' => 'Información personal y familia',
                'description' => 'Datos personales, relaciones familiares, edad, profesión y preguntas básicas sobre una persona.',
                'duration' => 19,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => '¿Cómo se pregunta por la profesión de una persona?',
                        'choices' => [
                            [
                                'choice_text' => '¿A qué te dedicas?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '¿Dónde te llamas?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Qué edad eres?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Quién tienes?',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '¿A qué te dedicas? es una pregunta habitual sobre trabajo o profesión.',
                    ],
                    [
                        'question' => '¿Cuál es la forma correcta de decir «My father is a doctor»?',
                        'choices' => [
                            [
                                'choice_text' => 'Mi padre es médico.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Mi padre está médico.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Mi padre tiene médico.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Mi padre soy médico.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La profesión se expresa con ser: Mi padre es médico.',
                    ],
                    [
                        'question' => '¿Qué palabra significa «mother»?',
                        'choices' => [
                            [
                                'choice_text' => 'madre',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'hermano',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'hija',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'abuelo',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Madre significa mother.',
                    ],
                    [
                        'question' => '¿Cómo se pregunta por el nombre completo?',
                        'choices' => [
                            [
                                'choice_text' => '¿Cuál es tu nombre completo?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '¿Dónde es tu nombre completo?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Qué tienes tu nombre?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Cómo edad tu nombre?',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '¿Cuál es tu nombre completo? es una pregunta clara y natural.',
                    ],
                    [
                        'question' => '¿Cuál es una respuesta correcta a «¿Dónde vives?»?',
                        'choices' => [
                            [
                                'choice_text' => 'Vivo en Rabat.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Soy Rabat.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tengo Rabat.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Estoy Rabat de.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Vivo en + lugar expresa residencia.',
                    ],
                    [
                        'question' => '¿Qué palabra significa «daughter»?',
                        'choices' => [
                            [
                                'choice_text' => 'hija',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'hijo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'tía',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'madre',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Hija significa daughter.',
                    ],
                    [
                        'question' => '¿Qué pregunta busca saber el lugar donde vive una persona?',
                        'choices' => [
                            [
                                'choice_text' => '¿Dónde vives?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '¿Cómo te llamas?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Qué haces mañana?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Cuánto cuesta?',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '¿Dónde vives? pregunta por el lugar de residencia.',
                    ],
                    [
                        'question' => '¿Qué palabra significa «brother»?',
                        'choices' => [
                            [
                                'choice_text' => 'hermano',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'hermana',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'padre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'primo',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Hermano significa brother.',
                    ],
                    [
                        'question' => '¿Cómo se pregunta la edad de una persona?',
                        'choices' => [
                            [
                                'choice_text' => '¿Cuántos años tienes?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '¿Cuántos años eres?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Qué edad estás?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '¿Cuánto años haces?',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La expresión estándar para preguntar la edad es ¿Cuántos años tienes?',
                    ],
                    [
                        'question' => '¿Qué significa «mis padres»?',
                        'choices' => [
                            [
                                'choice_text' => 'my parents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'my children',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'my siblings',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'my grandparents',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Mis padres corresponde a my parents.',
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
