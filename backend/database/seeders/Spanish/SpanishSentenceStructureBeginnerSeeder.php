<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SentenceStructureBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'sentence-structure')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Spanish Sentence Basics',
                'description' => 'Learn the basic order of Spanish sentences and build clear statements with subjects, verbs, and objects.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Which sentence correctly says “María studies Spanish”?',
                        'choices' => [
                            ['choice_text' => 'María estudia español.', 'is_correct' => true],
                            ['choice_text' => 'Estudia María español.', 'is_correct' => false],
                            ['choice_text' => 'Español María estudia.', 'is_correct' => false],
                            ['choice_text' => 'María español estudia.', 'is_correct' => false],
                        ],
                        'explanation' => 'The most straightforward beginner structure is subject + verb + object: “María estudia español.”',
                    ],
                    [
                        'question' => 'Which part is the verb in “Carlos compra pan”?',
                        'choices' => [
                            ['choice_text' => 'compra', 'is_correct' => true],
                            ['choice_text' => 'Carlos', 'is_correct' => false],
                            ['choice_text' => 'pan', 'is_correct' => false],
                            ['choice_text' => 'Carlos compra', 'is_correct' => false],
                        ],
                        'explanation' => '“Compra” is the verb because it tells us what Carlos does.',
                    ],
                    [
                        'question' => 'Which sentence has a clear subject followed by a verb?',
                        'choices' => [
                            ['choice_text' => 'Ana trabaja.', 'is_correct' => true],
                            ['choice_text' => 'Trabaja Ana?', 'is_correct' => false],
                            ['choice_text' => 'Trabajo Ana.', 'is_correct' => false],
                            ['choice_text' => 'Ana trabajo.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ana” is the subject and “trabaja” is the correctly conjugated verb for third-person singular.',
                    ],
                    [
                        'question' => 'Complete the natural sentence: “Mi hermano ___ café.”',
                        'choices' => [
                            ['choice_text' => 'bebe', 'is_correct' => true],
                            ['choice_text' => 'café bebe mi', 'is_correct' => false],
                            ['choice_text' => 'mi bebe hermano', 'is_correct' => false],
                            ['choice_text' => 'bebe mi hermano', 'is_correct' => false],
                        ],
                        'explanation' => 'The most natural beginner order is “Mi hermano bebe café.”',
                    ],
                    [
                        'question' => 'Which sentence means “The children play in the park”?',
                        'choices' => [
                            ['choice_text' => 'Los niños juegan en el parque.', 'is_correct' => true],
                            ['choice_text' => 'Juegan los parque niños en.', 'is_correct' => false],
                            ['choice_text' => 'Los niños en juegan el parque.', 'is_correct' => false],
                            ['choice_text' => 'En el parque los niños juega.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence follows a natural order: subject, verb, then place information.',
                    ],
                    [
                        'question' => 'Which word group can form a complete simple sentence?',
                        'choices' => [
                            ['choice_text' => 'Pedro trabaja.', 'is_correct' => true],
                            ['choice_text' => 'Pedro trabajar.', 'is_correct' => false],
                            ['choice_text' => 'Trabaja Pedro mañana?', 'is_correct' => false],
                            ['choice_text' => 'Pedro en la oficina.', 'is_correct' => false],
                        ],
                        'explanation' => 'A simple sentence needs a correctly formed verb; “Pedro trabaja” has both a subject and a conjugated verb.',
                    ],
                    [
                        'question' => 'A learner writes “Yo español estudio.” Which version is the most natural?',
                        'choices' => [
                            ['choice_text' => 'Yo estudio español.', 'is_correct' => true],
                            ['choice_text' => 'Yo español estudia.', 'is_correct' => false],
                            ['choice_text' => 'Yo estudio a español.', 'is_correct' => false],
                            ['choice_text' => 'Yo español estudiar.', 'is_correct' => false],
                        ],
                        'explanation' => 'Spanish commonly uses subject + verb + object in a basic statement: “Yo estudio español.”',
                    ],
                    [
                        'question' => 'Which sentence is correctly ordered?',
                        'choices' => [
                            ['choice_text' => 'La profesora explica la lección.', 'is_correct' => true],
                            ['choice_text' => 'La profesora la lección explica.', 'is_correct' => false],
                            ['choice_text' => 'Explica la profesora la lección always.', 'is_correct' => false],
                            ['choice_text' => 'La lección profesora explica la.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence follows the standard basic pattern and sounds natural in neutral Spanish.',
                    ],
                    [
                        'question' => 'Which sentence contains both a subject and a predicate?',
                        'choices' => [
                            ['choice_text' => 'Mi amigo cocina.', 'is_correct' => true],
                            ['choice_text' => 'Mi amigo.', 'is_correct' => false],
                            ['choice_text' => 'Cocina.', 'is_correct' => false],
                            ['choice_text' => 'En la cocina.', 'is_correct' => false],
                        ],
                        'explanation' => '“Mi amigo” is the subject and “cocina” is the predicate containing the verb.',
                    ],
                    [
                        'question' => 'Which sentence is a natural beginner answer to “¿Qué haces?”',
                        'choices' => [
                            ['choice_text' => 'Trabajo en una tienda.', 'is_correct' => true],
                            ['choice_text' => 'Yo una tienda trabajo.', 'is_correct' => false],
                            ['choice_text' => 'En una tienda yo trabajo hago.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo una tienda en.', 'is_correct' => false],
                        ],
                        'explanation' => '“Trabajo en una tienda” uses a natural verb-first answer while the subject “yo” is understood.',
                    ],
                ],
            ],
            [
                'title' => 'Questions and Negation',
                'description' => 'Practice making simple Spanish questions and negative statements without changing the core sentence unnecessarily.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Which sentence correctly asks “Do you speak Spanish?”',
                        'choices' => [
                            ['choice_text' => '¿Hablas español?', 'is_correct' => true],
                            ['choice_text' => '¿Tú español hablas?', 'is_correct' => false],
                            ['choice_text' => '¿Hablas tú español haces?', 'is_correct' => false],
                            ['choice_text' => '¿Español hablas tú eres?', 'is_correct' => false],
                        ],
                        'explanation' => 'Spanish can form a simple yes/no question with intonation and question marks: “¿Hablas español?”',
                    ],
                    [
                        'question' => 'How do you make “Ana trabaja aquí” negative?',
                        'choices' => [
                            ['choice_text' => 'Ana no trabaja aquí.', 'is_correct' => true],
                            ['choice_text' => 'Ana trabaja no aquí.', 'is_correct' => false],
                            ['choice_text' => 'No Ana trabaja aquí.', 'is_correct' => false],
                            ['choice_text' => 'Ana no aquí trabaja.', 'is_correct' => false],
                        ],
                        'explanation' => 'The basic negative structure places “no” before the conjugated verb.',
                    ],
                    [
                        'question' => 'Which question asks where someone lives?',
                        'choices' => [
                            ['choice_text' => '¿Dónde vives?', 'is_correct' => true],
                            ['choice_text' => '¿Dónde vives tú casa?', 'is_correct' => false],
                            ['choice_text' => '¿Vives dónde casa?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde casa vives?', 'is_correct' => false],
                        ],
                        'explanation' => '“Dónde” means “where,” and “¿Dónde vives?” is the natural question.',
                    ],
                    [
                        'question' => 'Which sentence correctly asks “What do you eat?”',
                        'choices' => [
                            ['choice_text' => '¿Qué comes?', 'is_correct' => true],
                            ['choice_text' => '¿Qué comes tú comida?', 'is_correct' => false],
                            ['choice_text' => '¿Comes qué tú?', 'is_correct' => false],
                            ['choice_text' => '¿Qué comida tú eres?', 'is_correct' => false],
                        ],
                        'explanation' => '“Qué” is the question word and “comes” is the correct verb form for tú.',
                    ],
                    [
                        'question' => 'Complete the natural negative sentence: “Nosotros ___ no ___ café.”',
                        'choices' => [
                            ['choice_text' => 'no / bebemos', 'is_correct' => true],
                            ['choice_text' => 'bebemos / no', 'is_correct' => false],
                            ['choice_text' => 'no / beber', 'is_correct' => false],
                            ['choice_text' => 'no / bebe', 'is_correct' => false],
                        ],
                        'explanation' => 'The correct order is “Nosotros no bebemos café”: subject + no + conjugated verb + object.',
                    ],
                    [
                        'question' => 'Which question correctly asks about a person\'s name?',
                        'choices' => [
                            ['choice_text' => '¿Cómo te llamas?', 'is_correct' => true],
                            ['choice_text' => '¿Cómo llamas te?', 'is_correct' => false],
                            ['choice_text' => '¿Te cómo llamas?', 'is_correct' => false],
                            ['choice_text' => '¿Cómo tú nombre llamas?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Cómo te llamas?” is the standard beginner question for asking someone\'s name.',
                    ],
                    [
                        'question' => 'Which sentence is correctly negative?',
                        'choices' => [
                            ['choice_text' => 'No quiero azúcar.', 'is_correct' => true],
                            ['choice_text' => 'Quiero no azúcar.', 'is_correct' => false],
                            ['choice_text' => 'No azúcar quiero.', 'is_correct' => false],
                            ['choice_text' => 'Quiero azúcar no.', 'is_correct' => false],
                        ],
                        'explanation' => '“No” comes directly before the conjugated verb “quiero.”',
                    ],
                    [
                        'question' => 'Which question is correctly formed?',
                        'choices' => [
                            ['choice_text' => '¿Cuándo empieza la clase?', 'is_correct' => true],
                            ['choice_text' => '¿Cuándo la clase empieza?', 'is_correct' => false],
                            ['choice_text' => '¿Empieza cuándo la clase?', 'is_correct' => false],
                            ['choice_text' => '¿La clase cuándo empieza es?', 'is_correct' => false],
                        ],
                        'explanation' => '“Cuándo” asks when, followed by the verb and then the subject in a natural neutral question.',
                    ],
                    [
                        'question' => 'A learner writes “No yo estudio hoy.” Which version is more natural?',
                        'choices' => [
                            ['choice_text' => 'Yo no estudio hoy.', 'is_correct' => true],
                            ['choice_text' => 'Yo estudio no hoy.', 'is_correct' => false],
                            ['choice_text' => 'No estudio yo hoy?', 'is_correct' => false],
                            ['choice_text' => 'Yo hoy no estudiar.', 'is_correct' => false],
                        ],
                        'explanation' => 'The natural beginner order is subject + no + conjugated verb + time information.',
                    ],
                    [
                        'question' => 'Which sentence can be answered with “Sí, trabajo aquí”?',
                        'choices' => [
                            ['choice_text' => '¿Trabajas aquí?', 'is_correct' => true],
                            ['choice_text' => '¿Dónde trabajas?', 'is_correct' => false],
                            ['choice_text' => '¿Cuándo trabajas?', 'is_correct' => false],
                            ['choice_text' => '¿Por qué trabajas?', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a yes/no question, so “Sí, trabajo aquí” is a direct answer.',
                    ],
                    [
                        'question' => 'Which word usually introduces a negative statement?',
                        'choices' => [
                            ['choice_text' => 'no', 'is_correct' => true],
                            ['choice_text' => 'qué', 'is_correct' => false],
                            ['choice_text' => 'dónde', 'is_correct' => false],
                            ['choice_text' => 'cuándo', 'is_correct' => false],
                        ],
                        'explanation' => 'The basic Spanish negative marker is “no,” placed before the conjugated verb.',
                    ],
                ],
            ],
            [
                'title' => 'Adjectives and Word Order',
                'description' => 'Practice placing common adjectives naturally and making them agree with the nouns they describe.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which sentence correctly says “a red car”?',
                        'choices' => [
                            ['choice_text' => 'un coche rojo', 'is_correct' => true],
                            ['choice_text' => 'un rojo coche', 'is_correct' => false],
                            ['choice_text' => 'un coche roja', 'is_correct' => false],
                            ['choice_text' => 'una coche rojo', 'is_correct' => false],
                        ],
                        'explanation' => 'In a basic descriptive phrase, the common adjective “rojo” comes after the noun and agrees with masculine singular “coche.”',
                    ],
                    [
                        'question' => 'Which sentence correctly describes a large house?',
                        'choices' => [
                            ['choice_text' => 'una casa grande', 'is_correct' => true],
                            ['choice_text' => 'un casa grande', 'is_correct' => false],
                            ['choice_text' => 'una grande casa always', 'is_correct' => false],
                            ['choice_text' => 'una casa grandes', 'is_correct' => false],
                        ],
                        'explanation' => '“Casa” is feminine singular, and “grande” agrees in number while keeping the same form for gender here.',
                    ],
                    [
                        'question' => 'Which phrase is correct?',
                        'choices' => [
                            ['choice_text' => 'los libros interesantes', 'is_correct' => true],
                            ['choice_text' => 'los libros interesante', 'is_correct' => false],
                            ['choice_text' => 'las libros interesantes', 'is_correct' => false],
                            ['choice_text' => 'los interesante libros siempre', 'is_correct' => false],
                        ],
                        'explanation' => 'The plural noun “libros” takes the plural adjective “interesantes,” and “libros” is masculine plural.',
                    ],
                    [
                        'question' => 'A learner writes “la camisa blanco.” What is the correction?',
                        'choices' => [
                            ['choice_text' => 'la camisa blanca', 'is_correct' => true],
                            ['choice_text' => 'el camisa blanco', 'is_correct' => false],
                            ['choice_text' => 'la camisa blancos', 'is_correct' => false],
                            ['choice_text' => 'la blanca camisa only', 'is_correct' => false],
                        ],
                        'explanation' => '“Camisa” is feminine singular, so the adjective should be “blanca.”',
                    ],
                    [
                        'question' => 'Which sentence uses adjective agreement correctly?',
                        'choices' => [
                            ['choice_text' => 'Mis amigos son simpáticos.', 'is_correct' => true],
                            ['choice_text' => 'Mis amigos son simpática.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos es simpáticos.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos son simpático.', 'is_correct' => false],
                        ],
                        'explanation' => '“Mis amigos” is masculine plural, so “simpáticos” matches it in gender and number.',
                    ],
                    [
                        'question' => 'Which phrase correctly describes two small houses?',
                        'choices' => [
                            ['choice_text' => 'dos casas pequeñas', 'is_correct' => true],
                            ['choice_text' => 'dos casa pequeño', 'is_correct' => false],
                            ['choice_text' => 'dos casas pequeño', 'is_correct' => false],
                            ['choice_text' => 'dos casa pequeñas', 'is_correct' => false],
                        ],
                        'explanation' => '“Casas” is feminine plural, so the adjective becomes “pequeñas.”',
                    ],
                    [
                        'question' => 'Which sentence sounds natural in neutral Spanish?',
                        'choices' => [
                            ['choice_text' => 'Tengo un coche nuevo.', 'is_correct' => true],
                            ['choice_text' => 'Tengo un nuevo coche only.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un coche nueva.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una coche nuevo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The usual beginner order is noun + adjective, and “nuevo” agrees with masculine singular “coche.”',
                    ],
                    [
                        'question' => 'Which adjective stays the same for masculine and feminine singular?',
                        'choices' => [
                            ['choice_text' => 'grande', 'is_correct' => true],
                            ['choice_text' => 'rojo', 'is_correct' => false],
                            ['choice_text' => 'pequeño', 'is_correct' => false],
                            ['choice_text' => 'bonito', 'is_correct' => false],
                        ],
                        'explanation' => '“Grande” has the same form for masculine and feminine singular: “un perro grande” and “una casa grande.”',
                    ],
                    [
                        'question' => 'Which sentence correctly describes two female students?',
                        'choices' => [
                            ['choice_text' => 'Las estudiantes son trabajadoras.', 'is_correct' => true],
                            ['choice_text' => 'Los estudiantes son trabajadoras.', 'is_correct' => false],
                            ['choice_text' => 'Las estudiante son trabajadora.', 'is_correct' => false],
                            ['choice_text' => 'Las estudiantes es trabajadoras.', 'is_correct' => false],
                        ],
                        'explanation' => 'The noun and adjective are feminine plural, and the verb “son” agrees with the plural subject.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'El restaurante nuevo está cerca.', 'is_correct' => true],
                            ['choice_text' => 'La restaurante nueva está cerca.', 'is_correct' => false],
                            ['choice_text' => 'El restaurante nueva está cerca.', 'is_correct' => false],
                            ['choice_text' => 'El restaurante nuevos está cerca.', 'is_correct' => false],
                        ],
                        'explanation' => '“Restaurante” is masculine singular, so “el” and “nuevo” agree with it.',
                    ],
                    [
                        'question' => 'Which phrase would naturally describe a blue shirt?',
                        'choices' => [
                            ['choice_text' => 'una camisa azul', 'is_correct' => true],
                            ['choice_text' => 'un camisa azul', 'is_correct' => false],
                            ['choice_text' => 'una camisa azules', 'is_correct' => false],
                            ['choice_text' => 'azul una camisa always', 'is_correct' => false],
                        ],
                        'explanation' => '“Camisa” is feminine singular, while “azul” has the same singular form for masculine and feminine.',
                    ],
                ],
            ],
            [
                'title' => 'Pronouns and Sentence Clarity',
                'description' => 'Build clear sentences using subject pronouns, object pronouns, and common everyday structures.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which sentence correctly says “I see María”?',
                        'choices' => [
                            ['choice_text' => 'Yo veo a María.', 'is_correct' => true],
                            ['choice_text' => 'Yo a María veo.', 'is_correct' => false],
                            ['choice_text' => 'Yo veo María a.', 'is_correct' => false],
                            ['choice_text' => 'A María yo veo es.', 'is_correct' => false],
                        ],
                        'explanation' => 'A person used as a direct object is introduced with the personal “a”: “Veo a María.”',
                    ],
                    [
                        'question' => 'Which sentence means “I call Juan”?',
                        'choices' => [
                            ['choice_text' => 'Llamo a Juan.', 'is_correct' => true],
                            ['choice_text' => 'A Juan llamas yo.', 'is_correct' => false],
                            ['choice_text' => 'Llamo Juan a.', 'is_correct' => false],
                            ['choice_text' => 'Juan llamo es.', 'is_correct' => false],
                        ],
                        'explanation' => 'The personal “a” is used because Juan is a person receiving the action.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses the subject pronoun “nosotros”?',
                        'choices' => [
                            ['choice_text' => 'Nosotros estudiamos juntos.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros estudia juntos.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros estudian juntos.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros estudiar juntos.', 'is_correct' => false],
                        ],
                        'explanation' => 'The verb must agree with “nosotros”: “estudiamos.”',
                    ],
                    [
                        'question' => 'Which sentence correctly uses “me” as an object pronoun?',
                        'choices' => [
                            ['choice_text' => 'Ana me llama cada tarde.', 'is_correct' => true],
                            ['choice_text' => 'Ana llama me cada tarde.', 'is_correct' => false],
                            ['choice_text' => 'Ana me llaman cada tarde.', 'is_correct' => false],
                            ['choice_text' => 'Me Ana llama cada tardes.', 'is_correct' => false],
                        ],
                        'explanation' => 'The object pronoun “me” comes before the conjugated verb in this simple sentence.',
                    ],
                    [
                        'question' => 'Which sentence is a natural response to “¿Qué haces con el libro?”?',
                        'choices' => [
                            ['choice_text' => 'Lo leo.', 'is_correct' => true],
                            ['choice_text' => 'Leo lo.', 'is_correct' => false],
                            ['choice_text' => 'Lo lees.', 'is_correct' => false],
                            ['choice_text' => 'Me lo.', 'is_correct' => false],
                        ],
                        'explanation' => '“Lo” can replace the masculine singular object “el libro,” and it comes before the conjugated verb.',
                    ],
                    [
                        'question' => 'Which sentence correctly says “We see them” when “them” refers to the boys?',
                        'choices' => [
                            ['choice_text' => 'Los vemos.', 'is_correct' => true],
                            ['choice_text' => 'Vemos los.', 'is_correct' => false],
                            ['choice_text' => 'Les vemos los.', 'is_correct' => false],
                            ['choice_text' => 'Nos vemos los.', 'is_correct' => false],
                        ],
                        'explanation' => '“Los” is the direct object pronoun for masculine plural “them,” and it comes before the conjugated verb.',
                    ],
                    [
                        'question' => 'Which sentence is clear and natural?',
                        'choices' => [
                            ['choice_text' => 'Ella me ayuda.', 'is_correct' => true],
                            ['choice_text' => 'Ella ayuda me.', 'is_correct' => false],
                            ['choice_text' => 'Ella me ayudan.', 'is_correct' => false],
                            ['choice_text' => 'Ella ayudar me.', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject “ella” takes the singular verb “ayuda,” and the object pronoun “me” comes before the verb.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses “le” for an indirect object?',
                        'choices' => [
                            ['choice_text' => 'Le doy el libro a Ana.', 'is_correct' => true],
                            ['choice_text' => 'Doy le el libro a Ana.', 'is_correct' => false],
                            ['choice_text' => 'Le doy Ana el libro.', 'is_correct' => false],
                            ['choice_text' => 'Le doy el libro Ana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Le” marks the indirect object, and “a Ana” identifies exactly who receives the book.',
                    ],
                    [
                        'question' => 'A learner writes “Yo veo a él” and wants a shorter pronoun form. Which is natural?',
                        'choices' => [
                            ['choice_text' => 'Yo lo veo.', 'is_correct' => true],
                            ['choice_text' => 'Yo veo lo.', 'is_correct' => false],
                            ['choice_text' => 'Yo le veo lo.', 'is_correct' => false],
                            ['choice_text' => 'Yo me veo.', 'is_correct' => false],
                        ],
                        'explanation' => 'For a masculine singular direct object, “lo” can replace “a él”: “Yo lo veo.”',
                    ],
                    [
                        'question' => 'Which sentence correctly uses the reflexive pronoun and subject together?',
                        'choices' => [
                            ['choice_text' => 'Yo me preparo.', 'is_correct' => true],
                            ['choice_text' => 'Yo se preparo.', 'is_correct' => false],
                            ['choice_text' => 'Yo te prepara.', 'is_correct' => false],
                            ['choice_text' => 'Yo me preparan.', 'is_correct' => false],
                        ],
                        'explanation' => '“Yo” takes the reflexive pronoun “me,” and the verb is first-person singular: “preparo.”',
                    ],
                ],
            ],
            [
                'title' => 'Connecting Ideas',
                'description' => 'Practice linking simple Spanish sentences with conjunctions, time words, and cause-and-effect expressions.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Which word correctly connects two choices?',
                        'choices' => [
                            ['choice_text' => 'o', 'is_correct' => true],
                            ['choice_text' => 'porque', 'is_correct' => false],
                            ['choice_text' => 'pero', 'is_correct' => false],
                            ['choice_text' => 'aunque', 'is_correct' => false],
                        ],
                        'explanation' => '“O” means “or” and connects alternatives, such as “té o café.”',
                    ],
                    [
                        'question' => 'Which sentence correctly uses “porque”?',
                        'choices' => [
                            ['choice_text' => 'No salgo porque estoy cansado.', 'is_correct' => true],
                            ['choice_text' => 'No salgo porque cansado estoy es.', 'is_correct' => false],
                            ['choice_text' => 'Porque no salgo estoy cansado.', 'is_correct' => false],
                            ['choice_text' => 'No salgo estoy porque cansado.', 'is_correct' => false],
                        ],
                        'explanation' => '“Porque” introduces the reason: the speaker does not go out because they are tired.',
                    ],
                    [
                        'question' => 'Which sentence correctly contrasts two ideas with “pero”?',
                        'choices' => [
                            ['choice_text' => 'Quiero ir, pero estoy ocupado.', 'is_correct' => true],
                            ['choice_text' => 'Quiero ir pero ocupado estoy es.', 'is_correct' => false],
                            ['choice_text' => 'Pero quiero ir estoy ocupado.', 'is_correct' => false],
                            ['choice_text' => 'Quiero pero ir estoy ocupado.', 'is_correct' => false],
                        ],
                        'explanation' => '“Pero” means “but” and joins two contrasting clauses.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses “y” to add information?',
                        'choices' => [
                            ['choice_text' => 'María estudia y trabaja.', 'is_correct' => true],
                            ['choice_text' => 'María y estudia trabaja.', 'is_correct' => false],
                            ['choice_text' => 'María estudia trabaja y.', 'is_correct' => false],
                            ['choice_text' => 'Y María estudia es trabaja.', 'is_correct' => false],
                        ],
                        'explanation' => '“Y” joins two actions performed by the same subject.',
                    ],
                    [
                        'question' => 'Which sentence shows a clear sequence?',
                        'choices' => [
                            ['choice_text' => 'Primero desayuno y después voy al trabajo.', 'is_correct' => true],
                            ['choice_text' => 'Después desayuno y primero voy al trabajo.', 'is_correct' => false],
                            ['choice_text' => 'Primero al trabajo y después desayuno antes.', 'is_correct' => false],
                            ['choice_text' => 'Desayuno después primero voy.', 'is_correct' => false],
                        ],
                        'explanation' => '“Primero” marks the first action and “después” marks the next one.',
                    ],
                    [
                        'question' => 'Complete: “Estudio por la mañana ___ trabajo por la tarde.”',
                        'choices' => [
                            ['choice_text' => 'y', 'is_correct' => true],
                            ['choice_text' => 'o', 'is_correct' => false],
                            ['choice_text' => 'porque', 'is_correct' => false],
                            ['choice_text' => 'pero', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence adds two related activities, so “y” is the natural connector.',
                    ],
                    [
                        'question' => 'Which sentence gives a reason and uses the correct order?',
                        'choices' => [
                            ['choice_text' => 'Estoy en casa porque llueve.', 'is_correct' => true],
                            ['choice_text' => 'Estoy porque llueve en casa.', 'is_correct' => false],
                            ['choice_text' => 'Porque en casa llueve estoy.', 'is_correct' => false],
                            ['choice_text' => 'Estoy llueve porque en casa.', 'is_correct' => false],
                        ],
                        'explanation' => 'The main clause comes first, followed by “porque” and the reason clause.',
                    ],
                    [
                        'question' => 'Which sentence shows a contrast between liking something and not having time?',
                        'choices' => [
                            ['choice_text' => 'Me gusta cocinar, pero no tengo tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Me gusta cocinar porque no tengo tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Me gusta cocinar y no tengo tiempo pero.', 'is_correct' => false],
                            ['choice_text' => 'Pero me gusta cocinar porque tiempo no.', 'is_correct' => false],
                        ],
                        'explanation' => '“Pero” connects the two contrasting ideas naturally.',
                    ],
                    [
                        'question' => 'Which sentence uses “cuando” in a simple time relationship?',
                        'choices' => [
                            ['choice_text' => 'Cuando llego a casa, ceno.', 'is_correct' => true],
                            ['choice_text' => 'Cuando ceno, llego a casa ayer.', 'is_correct' => false],
                            ['choice_text' => 'Llego cuando a casa ceno.', 'is_correct' => false],
                            ['choice_text' => 'Cuando casa llego ceno es.', 'is_correct' => false],
                        ],
                        'explanation' => '“Cuando” introduces the time condition: after arriving home, the speaker has dinner.',
                    ],
                    [
                        'question' => 'Which sentence correctly combines two clauses with a clear subject and verb?',
                        'choices' => [
                            ['choice_text' => 'Mi hermana trabaja y yo estudio.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermana y trabaja yo estudio.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana trabaja yo y estudio.', 'is_correct' => false],
                            ['choice_text' => 'Trabaja mi hermana y estudio yo es.', 'is_correct' => false],
                        ],
                        'explanation' => 'Each clause has a clear subject and correctly conjugated verb, joined by “y.”',
                    ],
                    [
                        'question' => 'Which connector fits a simple alternative: “¿Quieres té ___ café?”',
                        'choices' => [
                            ['choice_text' => 'o', 'is_correct' => true],
                            ['choice_text' => 'y', 'is_correct' => false],
                            ['choice_text' => 'pero', 'is_correct' => false],
                            ['choice_text' => 'porque', 'is_correct' => false],
                        ],
                        'explanation' => '“O” introduces an alternative choice: tea or coffee.',
                    ],
                ],
            ],
            [
                'title' => 'Mixed Sentence Structure Review',
                'description' => 'Put beginner sentence-building skills together in practical situations involving questions, descriptions, pronouns, negation, and connected ideas.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Which sentence is the most natural response to “¿Dónde vive Elena?”',
                        'choices' => [
                            ['choice_text' => 'Vive en Sevilla.', 'is_correct' => true],
                            ['choice_text' => 'En Sevilla vive es.', 'is_correct' => false],
                            ['choice_text' => 'Vive Elena Sevilla.', 'is_correct' => false],
                            ['choice_text' => 'Sevilla vive a.', 'is_correct' => false],
                        ],
                        'explanation' => 'The answer uses the verb and location naturally; the subject “Elena” is already known from the question.',
                    ],
                    [
                        'question' => 'Which sentence correctly combines a subject, verb, object, and place?',
                        'choices' => [
                            ['choice_text' => 'Carlos compra pan en la tienda.', 'is_correct' => true],
                            ['choice_text' => 'Carlos en la tienda compra pan es.', 'is_correct' => false],
                            ['choice_text' => 'Compra Carlos en pan la tienda.', 'is_correct' => false],
                            ['choice_text' => 'Carlos pan en compra la tienda.', 'is_correct' => false],
                        ],
                        'explanation' => 'This follows a clear beginner order: subject + verb + object + place.',
                    ],
                    [
                        'question' => 'A learner writes “No María trabaja hoy.” Which sentence is clearer in neutral order?',
                        'choices' => [
                            ['choice_text' => 'María no trabaja hoy.', 'is_correct' => true],
                            ['choice_text' => 'No María hoy trabaja.', 'is_correct' => false],
                            ['choice_text' => 'María trabaja no hoy.', 'is_correct' => false],
                            ['choice_text' => 'Hoy no María trabaja.', 'is_correct' => false],
                        ],
                        'explanation' => 'The negative marker “no” normally comes before the conjugated verb: “María no trabaja hoy.”',
                    ],
                    [
                        'question' => 'Which sentence correctly combines an adjective and a reason?',
                        'choices' => [
                            ['choice_text' => 'La película es interesante porque tiene una buena historia.', 'is_correct' => true],
                            ['choice_text' => 'La película interesante porque es tiene una buena historia.', 'is_correct' => false],
                            ['choice_text' => 'Es interesante la película porque una buena historia tiene.', 'is_correct' => false],
                            ['choice_text' => 'La película tiene interesante porque es una buena historia.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence first gives the description, then explains the reason using “porque.”',
                    ],
                    [
                        'question' => 'Which sentence correctly uses a question word and a verb?',
                        'choices' => [
                            ['choice_text' => '¿Por qué estudias español?', 'is_correct' => true],
                            ['choice_text' => '¿Por qué español estudia?', 'is_correct' => false],
                            ['choice_text' => '¿Estudias por qué español?', 'is_correct' => false],
                            ['choice_text' => '¿Español por qué estudias es?', 'is_correct' => false],
                        ],
                        'explanation' => '“Por qué” asks for a reason and is followed naturally by the verb and object.',
                    ],
                    [
                        'question' => 'Which sentence correctly joins two different subjects?',
                        'choices' => [
                            ['choice_text' => 'Mi padre cocina y mi madre trabaja.', 'is_correct' => true],
                            ['choice_text' => 'Mi padre y cocina mi madre trabaja.', 'is_correct' => false],
                            ['choice_text' => 'Cocina mi padre y trabaja mi madre es.', 'is_correct' => false],
                            ['choice_text' => 'Mi padre cocina mi madre y trabaja.', 'is_correct' => false],
                        ],
                        'explanation' => 'Each clause has its own subject and verb, joined cleanly with “y.”',
                    ],
                    [
                        'question' => 'Which sentence correctly uses an object pronoun in a practical situation?',
                        'choices' => [
                            ['choice_text' => 'Necesito el libro, pero no lo encuentro.', 'is_correct' => true],
                            ['choice_text' => 'Necesito el libro, pero no encuentro lo.', 'is_correct' => false],
                            ['choice_text' => 'Necesito el libro, pero lo no encuentro.', 'is_correct' => false],
                            ['choice_text' => 'Necesito el libro, pero no lo encuentra.', 'is_correct' => false],
                        ],
                        'explanation' => '“Lo” replaces “el libro” and is placed before the conjugated verb “encuentro.”',
                    ],
                    [
                        'question' => 'Which sentence correctly orders a time expression, subject, and action?',
                        'choices' => [
                            ['choice_text' => 'Por la mañana, Ana estudia en casa.', 'is_correct' => true],
                            ['choice_text' => 'Por la mañana, Ana en casa estudia siempre es.', 'is_correct' => false],
                            ['choice_text' => 'Ana por la mañana en estudia casa.', 'is_correct' => false],
                            ['choice_text' => 'Estudia por la mañana Ana en casa es.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a natural structure with a time phrase followed by the subject, verb, and place.',
                    ],
                    [
                        'question' => 'Which sentence gives a simple cause and effect?',
                        'choices' => [
                            ['choice_text' => 'Estoy cansado, así que voy a dormir.', 'is_correct' => true],
                            ['choice_text' => 'Estoy cansado así que a dormir voy es.', 'is_correct' => false],
                            ['choice_text' => 'Así que estoy cansado voy a dormir.', 'is_correct' => false],
                            ['choice_text' => 'Estoy porque cansado voy a dormir.', 'is_correct' => false],
                        ],
                        'explanation' => '“Así que” introduces the result: because the speaker is tired, they are going to sleep.',
                    ],
                    [
                        'question' => 'Which sentence is correct when the subject is omitted because it is already clear?',
                        'choices' => [
                            ['choice_text' => 'Trabajo en una oficina y vivo cerca.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo en una oficina yo y vivo cerca yo.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo oficina y vivir cerca.', 'is_correct' => false],
                            ['choice_text' => 'En una oficina trabajo y vivir cerca.', 'is_correct' => false],
                        ],
                        'explanation' => 'Spanish often omits subject pronouns when the verb already makes the subject clear.',
                    ],
                    [
                        'question' => 'Which sentence correctly combines negation, a pronoun, and a place?',
                        'choices' => [
                            ['choice_text' => 'No lo veo en la oficina.', 'is_correct' => true],
                            ['choice_text' => 'No veo lo en la oficina.', 'is_correct' => false],
                            ['choice_text' => 'No lo ve en la oficina yo.', 'is_correct' => false],
                            ['choice_text' => 'No en la oficina lo veo es.', 'is_correct' => false],
                        ],
                        'explanation' => 'The natural order is no + object pronoun + conjugated verb + place: “No lo veo en la oficina.”',
                    ],
                    [
                        'question' => 'Which sentence would sound most natural in a short introduction?',
                        'choices' => [
                            ['choice_text' => 'Soy de Marruecos, vivo en Casablanca y estudio español.', 'is_correct' => true],
                            ['choice_text' => 'De Marruecos soy vivo Casablanca estudio español.', 'is_correct' => false],
                            ['choice_text' => 'Soy de Marruecos vivo y Casablanca en estudio español.', 'is_correct' => false],
                            ['choice_text' => 'Marruecos soy, Casablanca vivo y español estudio es.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence links three clear statements with natural word order and avoids unnecessary repetition of the subject.',
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
