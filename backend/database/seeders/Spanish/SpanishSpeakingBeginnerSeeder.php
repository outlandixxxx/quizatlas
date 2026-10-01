<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpeakingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'speaking')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Speaking Basics and Introductions',
                'description' => 'Practice introducing yourself, giving simple personal information, and keeping a beginner conversation natural.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'You meet someone for the first time. Which reply is a natural way to introduce yourself?',
                        'choices' => [
                            ['choice_text' => 'Hola, soy Daniel. Mucho gusto.', 'is_correct' => true],
                            ['choice_text' => 'Hola, estoy Daniel. Mucho gusto.', 'is_correct' => false],
                            ['choice_text' => 'Hola, tengo Daniel. Gracias.', 'is_correct' => false],
                            ['choice_text' => 'Hola, me llamo de Daniel.', 'is_correct' => false],
                        ],
                        'explanation' => '“Soy Daniel” and “Mucho gusto” are both natural beginner expressions for a first meeting.',
                    ],
                    [
                        'question' => 'Someone asks, “¿Cómo te llamas?” What is the best reply?',
                        'choices' => [
                            ['choice_text' => 'Me llamo Sofía.', 'is_correct' => true],
                            ['choice_text' => 'Soy de Sofía.', 'is_correct' => false],
                            ['choice_text' => 'Tengo Sofía.', 'is_correct' => false],
                            ['choice_text' => 'Estoy Sofía.', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Cómo te llamas?” asks for your name, and “Me llamo Sofía” is the standard answer.',
                    ],
                    [
                        'question' => 'Someone asks, “¿De dónde eres?” Which answer fits?',
                        'choices' => [
                            ['choice_text' => 'Soy de Marruecos.', 'is_correct' => true],
                            ['choice_text' => 'Tengo de Marruecos.', 'is_correct' => false],
                            ['choice_text' => 'Vivo de Marruecos.', 'is_correct' => false],
                            ['choice_text' => 'Estoy Marruecos.', 'is_correct' => false],
                        ],
                        'explanation' => '“¿De dónde eres?” asks about origin, so “Soy de…” is the natural pattern.',
                    ],
                    [
                        'question' => 'A new classmate asks, “¿Dónde vives?” What should you say?',
                        'choices' => [
                            ['choice_text' => 'Vivo en Casablanca.', 'is_correct' => true],
                            ['choice_text' => 'Soy en Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Tengo Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Estoy de Casablanca.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks where you live, so “Vivo en…” is the natural response.',
                    ],
                    [
                        'question' => 'Someone says, “Mucho gusto.” What is a friendly response?',
                        'choices' => [
                            ['choice_text' => 'Igualmente.', 'is_correct' => true],
                            ['choice_text' => 'Perdón.', 'is_correct' => false],
                            ['choice_text' => 'Hasta mañana solamente.', 'is_correct' => false],
                            ['choice_text' => 'No sé.', 'is_correct' => false],
                        ],
                        'explanation' => '“Igualmente” means “likewise” and is a common reply to “Mucho gusto.”',
                    ],
                    [
                        'question' => 'Someone asks, “¿Qué haces?” and you want to say you study Spanish. Which answer sounds natural?',
                        'choices' => [
                            ['choice_text' => 'Estudio español.', 'is_correct' => true],
                            ['choice_text' => 'Soy español estudio.', 'is_correct' => false],
                            ['choice_text' => 'Tengo español.', 'is_correct' => false],
                            ['choice_text' => 'Estoy estudio español.', 'is_correct' => false],
                        ],
                        'explanation' => 'A simple present-tense sentence is enough: “Estudio español.”',
                    ],
                    [
                        'question' => 'You want to ask someone\'s profession politely in a beginner conversation. Which question works?',
                        'choices' => [
                            ['choice_text' => '¿A qué te dedicas?', 'is_correct' => true],
                            ['choice_text' => '¿Dónde eres trabajo?', 'is_correct' => false],
                            ['choice_text' => '¿Qué profesión estás?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo profesión tienes?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿A qué te dedicas?” is a natural way to ask what someone does for work.',
                    ],
                    [
                        'question' => 'A person says, “Tengo dos hermanos.” What is a natural follow-up question?',
                        'choices' => [
                            ['choice_text' => '¿Cómo se llaman?', 'is_correct' => true],
                            ['choice_text' => '¿Cuánto cuestan?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde estudias?', 'is_correct' => false],
                            ['choice_text' => '¿Qué hora es?', 'is_correct' => false],
                        ],
                        'explanation' => 'Once someone mentions siblings, asking their names is a natural conversational follow-up.',
                    ],
                    [
                        'question' => 'You did not hear someone\'s name. Which phrase is a polite way to ask again?',
                        'choices' => [
                            ['choice_text' => '¿Puedes repetir tu nombre, por favor?', 'is_correct' => true],
                            ['choice_text' => '¿Qué nombre es tú?', 'is_correct' => false],
                            ['choice_text' => 'Habla nombre otra vez.', 'is_correct' => false],
                            ['choice_text' => 'No nombre.', 'is_correct' => false],
                        ],
                        'explanation' => 'This politely asks the speaker to repeat their name.',
                    ],
                    [
                        'question' => 'At the end of a short first conversation, which closing sounds natural?',
                        'choices' => [
                            ['choice_text' => 'Hasta luego. Fue un placer conocerte.', 'is_correct' => true],
                            ['choice_text' => 'Soy hasta luego.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un placer adiós.', 'is_correct' => false],
                            ['choice_text' => 'Estoy conocerte hasta.', 'is_correct' => false],
                        ],
                        'explanation' => 'These are natural ways to end a friendly first conversation.',
                    ],
                ],
            ],
            [
                'title' => 'Speaking in Everyday Situations',
                'description' => 'Choose useful spoken responses for shops, cafés, transport, work, and other common beginner situations.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'At a café, the server asks, “¿Qué quieres tomar?” Which answer is natural?',
                        'choices' => [
                            ['choice_text' => 'Quiero un café, por favor.', 'is_correct' => true],
                            ['choice_text' => 'Soy un café, por favor.', 'is_correct' => false],
                            ['choice_text' => 'Estoy café, gracias.', 'is_correct' => false],
                            ['choice_text' => 'Tengo tomar café.', 'is_correct' => false],
                        ],
                        'explanation' => '“Quiero…” is a direct and polite beginner way to order a drink.',
                    ],
                    [
                        'question' => 'A cashier asks, “¿Algo más?” What can you say when you are finished shopping?',
                        'choices' => [
                            ['choice_text' => 'No, gracias. Eso es todo.', 'is_correct' => true],
                            ['choice_text' => 'No soy más.', 'is_correct' => false],
                            ['choice_text' => 'No tengo todo.', 'is_correct' => false],
                            ['choice_text' => 'No algo.', 'is_correct' => false],
                        ],
                        'explanation' => '“Eso es todo” naturally means that you do not need anything else.',
                    ],
                    [
                        'question' => 'You are in a shop and want to ask the price. Which sentence works?',
                        'choices' => [
                            ['choice_text' => '¿Cuánto cuesta?', 'is_correct' => true],
                            ['choice_text' => '¿Cuánto es comprar?', 'is_correct' => false],
                            ['choice_text' => '¿Qué cuesta es?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde cuesta?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Cuánto cuesta?” is the standard beginner question for the price of one item.',
                    ],
                    [
                        'question' => 'You want a smaller size of a shirt. Which request is most natural?',
                        'choices' => [
                            ['choice_text' => '¿Tiene una talla más pequeña?', 'is_correct' => true],
                            ['choice_text' => '¿Es más pequeño usted?', 'is_correct' => false],
                            ['choice_text' => '¿Tiene pequeño una talla?', 'is_correct' => false],
                            ['choice_text' => '¿Puedo pequeña esto?', 'is_correct' => false],
                        ],
                        'explanation' => 'This naturally asks whether the shop has a smaller size.',
                    ],
                    [
                        'question' => 'You are at a bus station and want to know where the Madrid bus leaves. Which question is useful?',
                        'choices' => [
                            ['choice_text' => '¿De dónde sale el autobús a Madrid?', 'is_correct' => true],
                            ['choice_text' => '¿Dónde vive el autobús Madrid?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo es el Madrid?', 'is_correct' => false],
                            ['choice_text' => '¿Qué tiene el autobús?', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks for the departure point of the bus to Madrid.',
                    ],
                    [
                        'question' => 'Someone asks, “¿Puedes ayudarme?” and you are happy to help. Which reply fits?',
                        'choices' => [
                            ['choice_text' => 'Sí, claro.', 'is_correct' => true],
                            ['choice_text' => 'Sí, me ayuda.', 'is_correct' => false],
                            ['choice_text' => 'Claro, ayúdame tú.', 'is_correct' => false],
                            ['choice_text' => 'No puedo ayudar tú.', 'is_correct' => false],
                        ],
                        'explanation' => '“Sí, claro” is a simple, friendly way to accept a request for help.',
                    ],
                    [
                        'question' => 'You did not understand what someone said in a conversation. What is the most useful phrase?',
                        'choices' => [
                            ['choice_text' => 'Perdón, ¿puedes repetir?', 'is_correct' => true],
                            ['choice_text' => 'Perdón, yo no entiendo tú.', 'is_correct' => false],
                            ['choice_text' => 'Habla repetir ahora.', 'is_correct' => false],
                            ['choice_text' => 'No palabras.', 'is_correct' => false],
                        ],
                        'explanation' => 'This politely asks the speaker to repeat what they said.',
                    ],
                    [
                        'question' => 'A colleague asks, “¿A qué hora comemos?” You want to suggest one o\'clock. Which answer is natural?',
                        'choices' => [
                            ['choice_text' => '¿A la una?', 'is_correct' => true],
                            ['choice_text' => 'En una hora es?', 'is_correct' => false],
                            ['choice_text' => 'La una comer?', 'is_correct' => false],
                            ['choice_text' => 'Somos una.', 'is_correct' => false],
                        ],
                        'explanation' => '“¿A la una?” is a natural way to suggest or confirm a lunch time.',
                    ],
                    [
                        'question' => 'You are lost and need directions to the station. Which opening is polite?',
                        'choices' => [
                            ['choice_text' => 'Perdone, ¿me puede ayudar?', 'is_correct' => true],
                            ['choice_text' => 'Ayúdame estación.', 'is_correct' => false],
                            ['choice_text' => '¿Dónde usted ayuda?', 'is_correct' => false],
                            ['choice_text' => 'Estación necesito usted.', 'is_correct' => false],
                        ],
                        'explanation' => '“Perdone” is a polite way to get someone\'s attention before asking for help.',
                    ],
                    [
                        'question' => 'At a restaurant, you want to say that you are ready to order. Which sentence fits?',
                        'choices' => [
                            ['choice_text' => 'Estamos listos para pedir.', 'is_correct' => true],
                            ['choice_text' => 'Somos listos pedir.', 'is_correct' => false],
                            ['choice_text' => 'Tenemos pedir listo.', 'is_correct' => false],
                            ['choice_text' => 'Estamos pedirnos.', 'is_correct' => false],
                        ],
                        'explanation' => 'This naturally tells the waiter that you are ready to order.',
                    ],
                    [
                        'question' => 'Someone says, “El banco está a la derecha.” What is a natural response to confirm you understood?',
                        'choices' => [
                            ['choice_text' => 'Ah, a la derecha. Gracias.', 'is_correct' => true],
                            ['choice_text' => 'No derecha soy.', 'is_correct' => false],
                            ['choice_text' => 'Tengo la derecha.', 'is_correct' => false],
                            ['choice_text' => 'Está gracias banco.', 'is_correct' => false],
                        ],
                        'explanation' => 'Repeating the important direction and thanking the speaker is a natural confirmation.',
                    ],
                ],
            ],
            [
                'title' => 'Questions, Clarification, and Repair',
                'description' => 'Practice the phrases speakers use to keep a conversation going when they need repetition, clarification, or more information.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'You did not hear the last word clearly. Which phrase is most useful?',
                        'choices' => [
                            ['choice_text' => '¿Puedes repetir la última palabra?', 'is_correct' => true],
                            ['choice_text' => '¿Qué última eres?', 'is_correct' => false],
                            ['choice_text' => 'Repite tú palabra última es.', 'is_correct' => false],
                            ['choice_text' => 'No escucho palabra qué.', 'is_correct' => false],
                        ],
                        'explanation' => 'This directly asks the speaker to repeat the unclear word.',
                    ],
                    [
                        'question' => 'Someone speaks too quickly. Which polite sentence can you use?',
                        'choices' => [
                            ['choice_text' => '¿Puedes hablar un poco más despacio, por favor?', 'is_correct' => true],
                            ['choice_text' => 'Habla más lento tú ahora siempre.', 'is_correct' => false],
                            ['choice_text' => 'No puedes hablar.', 'is_correct' => false],
                            ['choice_text' => 'Tu español es rápido.', 'is_correct' => false],
                        ],
                        'explanation' => 'This politely asks someone to slow down.',
                    ],
                    [
                        'question' => 'You do not know the Spanish word for something. Which phrase is useful?',
                        'choices' => [
                            ['choice_text' => '¿Cómo se dice esto en español?', 'is_correct' => true],
                            ['choice_text' => '¿Cómo español esto?', 'is_correct' => false],
                            ['choice_text' => '¿Qué dice español yo?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde se llama español?', 'is_correct' => false],
                        ],
                        'explanation' => 'This common question asks how to say a word or thing in Spanish.',
                    ],
                    [
                        'question' => 'You think you understood, but you want confirmation. Which question works?',
                        'choices' => [
                            ['choice_text' => '¿Quieres decir que llegamos a las ocho?', 'is_correct' => true],
                            ['choice_text' => '¿Qué quieres decir ocho?', 'is_correct' => false],
                            ['choice_text' => '¿Llegamos tú ocho decir?', 'is_correct' => false],
                            ['choice_text' => '¿Quieres ocho a nosotros?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Quieres decir que…?” is a natural way to check whether you understood the intended meaning.',
                    ],
                    [
                        'question' => 'Someone gives a long explanation and you want them to repeat the key point. Which phrase fits?',
                        'choices' => [
                            ['choice_text' => '¿Puedes explicarlo otra vez, por favor?', 'is_correct' => true],
                            ['choice_text' => 'Otra vez tú explicación.', 'is_correct' => false],
                            ['choice_text' => 'Dame explicar otra.', 'is_correct' => false],
                            ['choice_text' => 'No entiendo tú explicación.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a polite request for the explanation to be repeated.',
                    ],
                    [
                        'question' => 'You hear a word you do not know. Which follow-up question is natural?',
                        'choices' => [
                            ['choice_text' => '¿Qué significa esta palabra?', 'is_correct' => true],
                            ['choice_text' => '¿Qué palabra esta significa yo?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo significa tú?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde palabra es?', 'is_correct' => false],
                        ],
                        'explanation' => 'The question directly asks for the meaning of the unfamiliar word.',
                    ],
                    [
                        'question' => 'A friend says something surprising. Which response invites them to explain more?',
                        'choices' => [
                            ['choice_text' => '¿De verdad? Cuéntame más.', 'is_correct' => true],
                            ['choice_text' => 'De verdad no cuenta.', 'is_correct' => false],
                            ['choice_text' => '¿Qué más significa tú?', 'is_correct' => false],
                            ['choice_text' => 'No, cuéntame nada.', 'is_correct' => false],
                        ],
                        'explanation' => '“¿De verdad?” shows interest, and “Cuéntame más” invites the speaker to continue.',
                    ],
                    [
                        'question' => 'You want to politely correct a small misunderstanding. Which opening is natural?',
                        'choices' => [
                            ['choice_text' => 'Creo que no; quería decir otra cosa.', 'is_correct' => true],
                            ['choice_text' => 'No tú, incorrecto siempre.', 'is_correct' => false],
                            ['choice_text' => 'Yo no eso.', 'is_correct' => false],
                            ['choice_text' => 'Otra cosa no quieres.', 'is_correct' => false],
                        ],
                        'explanation' => '“Creo que no” softens the correction and “quería decir…” explains the intended meaning.',
                    ],
                    [
                        'question' => 'Someone gives a phone number too quickly. What could you ask?',
                        'choices' => [
                            ['choice_text' => '¿Puedes repetir el número más despacio?', 'is_correct' => true],
                            ['choice_text' => '¿Puedes número ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Qué número eres?', 'is_correct' => false],
                            ['choice_text' => 'Repite teléfono tú de.', 'is_correct' => false],
                        ],
                        'explanation' => 'The request clearly asks for the number to be repeated more slowly.',
                    ],
                    [
                        'question' => 'You want to check whether a meeting is tomorrow. Which question is best?',
                        'choices' => [
                            ['choice_text' => '¿La reunión es mañana?', 'is_correct' => true],
                            ['choice_text' => '¿Mañana reunión eres?', 'is_correct' => false],
                            ['choice_text' => '¿Es tú reunión mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Qué reunión mañana es?', 'is_correct' => false],
                        ],
                        'explanation' => 'This simple yes/no question directly checks the meeting date.',
                    ],
                ],
            ],
            [
                'title' => 'Role-Play: Travel and Services',
                'description' => 'Practice speaking choices for hotels, restaurants, transport, and simple travel problems.',
                'settings' => ['duration' => 25, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'At a hotel, you want to check in. Which opening is natural?',
                        'choices' => [
                            ['choice_text' => 'Hola, tengo una reserva a nombre de Karim.', 'is_correct' => true],
                            ['choice_text' => 'Hola, soy una reserva Karim.', 'is_correct' => false],
                            ['choice_text' => 'Tengo hotel Karim nombre.', 'is_correct' => false],
                            ['choice_text' => 'Estoy reserva de Karim.', 'is_correct' => false],
                        ],
                        'explanation' => '“Tengo una reserva a nombre de…” is a standard phrase when checking into a hotel.',
                    ],
                    [
                        'question' => 'The hotel receptionist asks, “¿Cuántas noches se queda?” You are staying three nights. What do you say?',
                        'choices' => [
                            ['choice_text' => 'Tres noches.', 'is_correct' => true],
                            ['choice_text' => 'Me quedo tres.', 'is_correct' => false],
                            ['choice_text' => 'Soy tres noches.', 'is_correct' => false],
                            ['choice_text' => 'Tengo noches tres.', 'is_correct' => false],
                        ],
                        'explanation' => 'A short direct answer such as “Tres noches” is completely natural in this context.',
                    ],
                    [
                        'question' => 'At a restaurant, you have not received your water. Which request is polite?',
                        'choices' => [
                            ['choice_text' => 'Perdone, ¿nos puede traer agua, por favor?', 'is_correct' => true],
                            ['choice_text' => 'Dame agua ahora.', 'is_correct' => false],
                            ['choice_text' => 'Traer agua nosotros.', 'is_correct' => false],
                            ['choice_text' => 'Agua no tenemos.', 'is_correct' => false],
                        ],
                        'explanation' => '“Perdone” and “por favor” make the request appropriate for a restaurant.',
                    ],
                    [
                        'question' => 'You are at a train station and cannot find your platform. Which question is useful?',
                        'choices' => [
                            ['choice_text' => '¿Me puede decir dónde está el andén cuatro?', 'is_correct' => true],
                            ['choice_text' => '¿Qué es andén cuatro dónde?', 'is_correct' => false],
                            ['choice_text' => '¿Tiene usted plataforma?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde soy el cuatro?', 'is_correct' => false],
                        ],
                        'explanation' => 'This politely asks a staff member where platform four is.',
                    ],
                    [
                        'question' => 'A taxi driver asks where you are going. Which answer is clear?',
                        'choices' => [
                            ['choice_text' => 'Al Hotel Central, por favor.', 'is_correct' => true],
                            ['choice_text' => 'Soy Hotel Central.', 'is_correct' => false],
                            ['choice_text' => 'Estoy Hotel Central.', 'is_correct' => false],
                            ['choice_text' => 'Quiero central hotel.', 'is_correct' => false],
                        ],
                        'explanation' => 'A destination after “¿Adónde va?” can be given simply as “Al Hotel Central.”',
                    ],
                    [
                        'question' => 'You have a problem with your hotel room: there is no hot water. Which sentence is useful?',
                        'choices' => [
                            ['choice_text' => 'No hay agua caliente en la habitación.', 'is_correct' => true],
                            ['choice_text' => 'No tengo caliente habitación.', 'is_correct' => false],
                            ['choice_text' => 'La habitación no es agua.', 'is_correct' => false],
                            ['choice_text' => 'Agua caliente no soy.', 'is_correct' => false],
                        ],
                        'explanation' => '“No hay…” is the natural structure for saying that something is not available or present.',
                    ],
                    [
                        'question' => 'You want to ask a local where you can buy a SIM card. Which question sounds natural?',
                        'choices' => [
                            ['choice_text' => '¿Dónde puedo comprar una tarjeta SIM?', 'is_correct' => true],
                            ['choice_text' => '¿Dónde tengo una tarjeta SIM?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo compro dónde una SIM?', 'is_correct' => false],
                            ['choice_text' => '¿Puedo dónde SIM?', 'is_correct' => false],
                        ],
                        'explanation' => 'This asks clearly where you can buy a SIM card.',
                    ],
                    [
                        'question' => 'You are unsure whether a train stops in Córdoba. Which question is best?',
                        'choices' => [
                            ['choice_text' => '¿Este tren para en Córdoba?', 'is_correct' => true],
                            ['choice_text' => '¿Este tren es Córdoba?', 'is_correct' => false],
                            ['choice_text' => '¿Córdoba tiene este tren?', 'is_correct' => false],
                            ['choice_text' => '¿Para Córdoba este tren es?', 'is_correct' => false],
                        ],
                        'explanation' => 'This asks whether the train stops in Córdoba.',
                    ],
                    [
                        'question' => 'A waiter asks, “¿Todo bien?” Your meal is good. What is a natural answer?',
                        'choices' => [
                            ['choice_text' => 'Sí, todo está muy bien, gracias.', 'is_correct' => true],
                            ['choice_text' => 'Sí, soy bien.', 'is_correct' => false],
                            ['choice_text' => 'Todo tengo bien.', 'is_correct' => false],
                            ['choice_text' => 'Es muy gracias.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a natural, friendly response to a service question.',
                    ],
                    [
                        'question' => 'You need a receipt after paying. Which request is useful?',
                        'choices' => [
                            ['choice_text' => '¿Me puede dar el recibo, por favor?', 'is_correct' => true],
                            ['choice_text' => '¿Tiene usted recibir?', 'is_correct' => false],
                            ['choice_text' => 'Dame recibo yo.', 'is_correct' => false],
                            ['choice_text' => '¿Dónde es mi pagar?', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a polite request for the receipt.',
                    ],
                ],
            ],
            [
                'title' => 'Role-Play: Work, Study, and Social Talk',
                'description' => 'Choose natural spoken responses in workplace, classroom, and casual social situations.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'A teacher asks, “¿Has terminado el ejercicio?” You have not finished. What is the natural reply?',
                        'choices' => [
                            ['choice_text' => 'Todavía no.', 'is_correct' => true],
                            ['choice_text' => 'No terminé todavía ayer.', 'is_correct' => false],
                            ['choice_text' => 'Soy no terminado.', 'is_correct' => false],
                            ['choice_text' => 'Todavía no estoy.', 'is_correct' => false],
                        ],
                        'explanation' => '“Todavía no” is a very natural short response meaning “Not yet.”',
                    ],
                    [
                        'question' => 'A colleague asks, “¿Puedes enviar el archivo hoy?” You can do it this afternoon. What do you say?',
                        'choices' => [
                            ['choice_text' => 'Sí, puedo enviarlo esta tarde.', 'is_correct' => true],
                            ['choice_text' => 'Sí, estoy archivo esta tarde.', 'is_correct' => false],
                            ['choice_text' => 'Puedo lo hoy tarde.', 'is_correct' => false],
                            ['choice_text' => 'Sí, enviar archivo soy.', 'is_correct' => false],
                        ],
                        'explanation' => 'The answer confirms the task and gives the expected time.',
                    ],
                    [
                        'question' => 'A classmate says, “No entiendo esta pregunta.” What is a helpful response?',
                        'choices' => [
                            ['choice_text' => 'Te la explico.', 'is_correct' => true],
                            ['choice_text' => 'Te la entiendo.', 'is_correct' => false],
                            ['choice_text' => 'La preguntas tú.', 'is_correct' => false],
                            ['choice_text' => 'No entiendo tú.', 'is_correct' => false],
                        ],
                        'explanation' => '“Te la explico” means “I\'ll explain it to you” and fits the situation.',
                    ],
                    [
                        'question' => 'Someone asks, “¿Quieres estudiar juntos?” You agree. Which answer sounds natural?',
                        'choices' => [
                            ['choice_text' => 'Sí, buena idea.', 'is_correct' => true],
                            ['choice_text' => 'Sí, quiero juntos.', 'is_correct' => false],
                            ['choice_text' => 'Buena estudiar sí.', 'is_correct' => false],
                            ['choice_text' => 'Estoy idea.', 'is_correct' => false],
                        ],
                        'explanation' => '“Sí, buena idea” is a common way to accept a suggestion.',
                    ],
                    [
                        'question' => 'A coworker says, “Estoy ocupado ahora.” What is a considerate response?',
                        'choices' => [
                            ['choice_text' => 'No pasa nada. Hablamos después.', 'is_correct' => true],
                            ['choice_text' => 'No, ocupado eres.', 'is_correct' => false],
                            ['choice_text' => 'Después ahora hablamos.', 'is_correct' => false],
                            ['choice_text' => 'Tienes ocupado.', 'is_correct' => false],
                        ],
                        'explanation' => 'This respects the person\'s situation and suggests talking later.',
                    ],
                    [
                        'question' => 'A friend asks, “¿Qué te parece esta película?” You like it. Which response is natural?',
                        'choices' => [
                            ['choice_text' => 'Me gusta bastante.', 'is_correct' => true],
                            ['choice_text' => 'Soy bastante película.', 'is_correct' => false],
                            ['choice_text' => 'La parece me gusta.', 'is_correct' => false],
                            ['choice_text' => 'Tengo mucho película.', 'is_correct' => false],
                        ],
                        'explanation' => '“Me gusta bastante” naturally expresses a positive opinion about a movie.',
                    ],
                    [
                        'question' => 'You want to invite a classmate to coffee after class. Which sentence works?',
                        'choices' => [
                            ['choice_text' => '¿Quieres tomar un café después de clase?', 'is_correct' => true],
                            ['choice_text' => '¿Quieres un café tomar después clase?', 'is_correct' => false],
                            ['choice_text' => '¿Tomas querer café?', 'is_correct' => false],
                            ['choice_text' => '¿Puedes café soy después?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Quieres + infinitive?” is a natural beginner structure for a friendly invitation.',
                    ],
                    [
                        'question' => 'A teammate asks for your opinion about a plan. You agree with it. What is useful?',
                        'choices' => [
                            ['choice_text' => 'Me parece bien.', 'is_correct' => true],
                            ['choice_text' => 'Me parece bueno yo.', 'is_correct' => false],
                            ['choice_text' => 'Soy bien con.', 'is_correct' => false],
                            ['choice_text' => 'Parece me plan.', 'is_correct' => false],
                        ],
                        'explanation' => '“Me parece bien” is a common way to say that a proposal sounds good to you.',
                    ],
                    [
                        'question' => 'You arrive late to class and want to apologize. Which is appropriate?',
                        'choices' => [
                            ['choice_text' => 'Perdón por llegar tarde.', 'is_correct' => true],
                            ['choice_text' => 'Perdón, soy tarde.', 'is_correct' => false],
                            ['choice_text' => 'Estoy tarde, perdón por.', 'is_correct' => false],
                            ['choice_text' => 'Llegar tarde soy.', 'is_correct' => false],
                        ],
                        'explanation' => '“Perdón por…” is a natural way to apologize for something.',
                    ],
                    [
                        'question' => 'A friend says, “Nos vemos mañana.” Which reply is natural?',
                        'choices' => [
                            ['choice_text' => 'Sí, hasta mañana.', 'is_correct' => true],
                            ['choice_text' => 'Sí, soy mañana.', 'is_correct' => false],
                            ['choice_text' => 'Hasta yo mañana.', 'is_correct' => false],
                            ['choice_text' => 'Mañana nos soy.', 'is_correct' => false],
                        ],
                        'explanation' => '“Hasta mañana” naturally means “See you tomorrow.”',
                    ],
                    [
                        'question' => 'Someone asks, “¿Qué te gusta hacer en tu tiempo libre?” Which answer fits?',
                        'choices' => [
                            ['choice_text' => 'Me gusta leer y escuchar música.', 'is_correct' => true],
                            ['choice_text' => 'Soy leer y música.', 'is_correct' => false],
                            ['choice_text' => 'Tengo gusta escuchar.', 'is_correct' => false],
                            ['choice_text' => 'Estoy tiempo libre.', 'is_correct' => false],
                        ],
                        'explanation' => '“Me gusta + infinitive” is a natural way to talk about activities you enjoy.',
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
