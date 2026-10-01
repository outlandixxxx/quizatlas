<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishArticlesBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'articles')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Definite Articles: el, la, los, las',
                'description' => 'Practice choosing the four definite articles and matching them with familiar singular and plural nouns.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Which article completes the phrase "___ libro" when you mean "the book"?',
                        'choices' => [
                            ['choice_text' => 'el', 'is_correct' => true],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                        ],
                        'explanation' => 'Libro is masculine and singular, so the definite article is "el".',
                    ],
                    [
                        'question' => 'Which phrase means "the house"?',
                        'choices' => [
                            ['choice_text' => 'la casa', 'is_correct' => true],
                            ['choice_text' => 'el casa', 'is_correct' => false],
                            ['choice_text' => 'los casa', 'is_correct' => false],
                            ['choice_text' => 'las casa', 'is_correct' => false],
                        ],
                        'explanation' => 'Casa is feminine singular, so it takes "la".',
                    ],
                    [
                        'question' => 'You are talking about several chairs. Which phrase is correct?',
                        'choices' => [
                            ['choice_text' => 'las sillas', 'is_correct' => true],
                            ['choice_text' => 'la sillas', 'is_correct' => false],
                            ['choice_text' => 'los sillas', 'is_correct' => false],
                            ['choice_text' => 'el sillas', 'is_correct' => false],
                        ],
                        'explanation' => 'Sillas is feminine plural, so the definite article is "las".',
                    ],
                    [
                        'question' => 'Which option correctly says "the boys"?',
                        'choices' => [
                            ['choice_text' => 'los chicos', 'is_correct' => true],
                            ['choice_text' => 'las chicos', 'is_correct' => false],
                            ['choice_text' => 'el chicos', 'is_correct' => false],
                            ['choice_text' => 'la chicos', 'is_correct' => false],
                        ],
                        'explanation' => 'Chicos is masculine plural, so it takes "los".',
                    ],
                    [
                        'question' => 'A student writes "la perros". What needs to change?',
                        'choices' => [
                            ['choice_text' => 'Change "la" to "los".', 'is_correct' => true],
                            ['choice_text' => 'Change "perros" to "perras".', 'is_correct' => false],
                            ['choice_text' => 'Change "la" to "el" only.', 'is_correct' => false],
                            ['choice_text' => 'Nothing; the phrase is correct.', 'is_correct' => false],
                        ],
                        'explanation' => 'Perros is masculine plural, so the correct phrase is "los perros."',
                    ],
                    [
                        'question' => 'Which sentence uses a definite article correctly?',
                        'choices' => [
                            ['choice_text' => 'La ventana está abierta.', 'is_correct' => true],
                            ['choice_text' => 'El ventana está abierta.', 'is_correct' => false],
                            ['choice_text' => 'Los ventana está abierta.', 'is_correct' => false],
                            ['choice_text' => 'Las ventana está abierta.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ventana is feminine singular, so "la ventana" is correct.',
                    ],
                    [
                        'question' => 'Which phrase is correct for "the tables"?',
                        'choices' => [
                            ['choice_text' => 'las mesas', 'is_correct' => true],
                            ['choice_text' => 'los mesas', 'is_correct' => false],
                            ['choice_text' => 'la mesas', 'is_correct' => false],
                            ['choice_text' => 'el mesas', 'is_correct' => false],
                        ],
                        'explanation' => 'Mesas is feminine plural, so the article must be "las".',
                    ],
                    [
                        'question' => 'Maria sees one problem on the board. Which phrase does she need?',
                        'choices' => [
                            ['choice_text' => 'el problema', 'is_correct' => true],
                            ['choice_text' => 'la problema', 'is_correct' => false],
                            ['choice_text' => 'los problema', 'is_correct' => false],
                            ['choice_text' => 'las problema', 'is_correct' => false],
                        ],
                        'explanation' => 'Problema is masculine singular, even though it ends in -a, so it takes "el".',
                    ],
                    [
                        'question' => 'Which sentence correctly refers to several flowers?',
                        'choices' => [
                            ['choice_text' => 'Las flores son bonitas.', 'is_correct' => true],
                            ['choice_text' => 'Los flores son bonitas.', 'is_correct' => false],
                            ['choice_text' => 'La flores son bonitas.', 'is_correct' => false],
                            ['choice_text' => 'El flores son bonitas.', 'is_correct' => false],
                        ],
                        'explanation' => 'Flores is feminine plural, so "las flores" is correct.',
                    ],
                    [
                        'question' => 'Which definite article belongs before "mapa" in the singular?',
                        'choices' => [
                            ['choice_text' => 'el', 'is_correct' => true],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                            ['choice_text' => 'una', 'is_correct' => false],
                        ],
                        'explanation' => 'Mapa is masculine singular, so the definite article is "el".',
                    ],
                    [
                        'question' => 'Which pair has the article and noun matching in both examples?',
                        'choices' => [
                            ['choice_text' => 'el reloj / las puertas', 'is_correct' => true],
                            ['choice_text' => 'la reloj / los puertas', 'is_correct' => false],
                            ['choice_text' => 'el reloj / los puertas', 'is_correct' => false],
                            ['choice_text' => 'la reloj / las puertas', 'is_correct' => false],
                        ],
                        'explanation' => 'Reloj is masculine singular and puertas is feminine plural, so "el reloj / las puertas" is correct.',
                    ],
                    [
                        'question' => 'A learner wants to say "the days". Which phrase is correct?',
                        'choices' => [
                            ['choice_text' => 'los días', 'is_correct' => true],
                            ['choice_text' => 'las días', 'is_correct' => false],
                            ['choice_text' => 'el días', 'is_correct' => false],
                            ['choice_text' => 'la días', 'is_correct' => false],
                        ],
                        'explanation' => 'Días is masculine plural, so it takes "los".',
                    ],
                ],
            ],
            [
                'title' => 'Indefinite Articles: un, una, unos, unas',
                'description' => 'Learn how to choose indefinite articles when talking about one or several non-specific people and things.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Which phrase means "a car"?',
                        'choices' => [
                            ['choice_text' => 'un coche', 'is_correct' => true],
                            ['choice_text' => 'una coche', 'is_correct' => false],
                            ['choice_text' => 'unos coche', 'is_correct' => false],
                            ['choice_text' => 'la coche', 'is_correct' => false],
                        ],
                        'explanation' => 'Coche is masculine singular, so the indefinite article is "un".',
                    ],
                    [
                        'question' => 'Which phrase means "a woman"?',
                        'choices' => [
                            ['choice_text' => 'una mujer', 'is_correct' => true],
                            ['choice_text' => 'un mujer', 'is_correct' => false],
                            ['choice_text' => 'unos mujer', 'is_correct' => false],
                            ['choice_text' => 'la mujer', 'is_correct' => false],
                        ],
                        'explanation' => 'Mujer is feminine singular, so it takes "una" for an indefinite singular phrase.',
                    ],
                    [
                        'question' => 'You are buying several notebooks, not specific ones. Which phrase fits?',
                        'choices' => [
                            ['choice_text' => 'unos cuadernos', 'is_correct' => true],
                            ['choice_text' => 'unas cuadernos', 'is_correct' => false],
                            ['choice_text' => 'un cuadernos', 'is_correct' => false],
                            ['choice_text' => 'los cuadernos', 'is_correct' => false],
                        ],
                        'explanation' => 'Cuadernos is masculine plural, so the indefinite plural article is "unos".',
                    ],
                    [
                        'question' => 'Which option correctly says "some flowers"?',
                        'choices' => [
                            ['choice_text' => 'unas flores', 'is_correct' => true],
                            ['choice_text' => 'unos flores', 'is_correct' => false],
                            ['choice_text' => 'una flores', 'is_correct' => false],
                            ['choice_text' => 'las flores', 'is_correct' => false],
                        ],
                        'explanation' => 'Flores is feminine plural, so "unas flores" is correct.',
                    ],
                    [
                        'question' => 'A friend says, "Tengo ___ idea." Which article fits if the friend means "an idea"?',
                        'choices' => [
                            ['choice_text' => 'una', 'is_correct' => true],
                            ['choice_text' => 'un', 'is_correct' => false],
                            ['choice_text' => 'unos', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                        ],
                        'explanation' => 'Idea is feminine singular, so the indefinite article is "una".',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Hay un libro en la mesa.', 'is_correct' => true],
                            ['choice_text' => 'Hay una libro en la mesa.', 'is_correct' => false],
                            ['choice_text' => 'Hay unos libro en la mesa.', 'is_correct' => false],
                            ['choice_text' => 'Hay un libros en la mesa.', 'is_correct' => false],
                        ],
                        'explanation' => 'Libro is masculine singular, so "un libro" is the correct indefinite phrase.',
                    ],
                    [
                        'question' => 'Which phrase is correct for "some chairs"?',
                        'choices' => [
                            ['choice_text' => 'unas sillas', 'is_correct' => true],
                            ['choice_text' => 'unos sillas', 'is_correct' => false],
                            ['choice_text' => 'una sillas', 'is_correct' => false],
                            ['choice_text' => 'un sillas', 'is_correct' => false],
                        ],
                        'explanation' => 'Sillas is feminine plural, so it takes "unas".',
                    ],
                    [
                        'question' => 'Which sentence would a shopper naturally say about buying one masculine item?',
                        'choices' => [
                            ['choice_text' => 'Quiero un teléfono.', 'is_correct' => true],
                            ['choice_text' => 'Quiero una teléfono.', 'is_correct' => false],
                            ['choice_text' => 'Quiero unos teléfono.', 'is_correct' => false],
                            ['choice_text' => 'Quiero la teléfono.', 'is_correct' => false],
                        ],
                        'explanation' => 'Teléfono is masculine singular, so "un teléfono" is correct.',
                    ],
                    [
                        'question' => 'Which option correctly changes the singular phrase "una estudiante" to plural?',
                        'choices' => [
                            ['choice_text' => 'unas estudiantes', 'is_correct' => true],
                            ['choice_text' => 'unos estudiantes', 'is_correct' => false],
                            ['choice_text' => 'una estudiantes', 'is_correct' => false],
                            ['choice_text' => 'las estudiante', 'is_correct' => false],
                        ],
                        'explanation' => 'Estudiante can refer to a woman, so "una estudiante" becomes "unas estudiantes" in the feminine plural.',
                    ],
                    [
                        'question' => 'Which phrase correctly uses an indefinite article with "problema"?',
                        'choices' => [
                            ['choice_text' => 'un problema', 'is_correct' => true],
                            ['choice_text' => 'una problema', 'is_correct' => false],
                            ['choice_text' => 'unos problema', 'is_correct' => false],
                            ['choice_text' => 'unas problema', 'is_correct' => false],
                        ],
                        'explanation' => 'Problema is masculine singular, despite its final -a, so "un problema" is correct.',
                    ],
                    [
                        'question' => 'Which phrase means "a woman and a man"?',
                        'choices' => [
                            ['choice_text' => 'una mujer y un hombre', 'is_correct' => true],
                            ['choice_text' => 'un mujer y una hombre', 'is_correct' => false],
                            ['choice_text' => 'una mujer y una hombre', 'is_correct' => false],
                            ['choice_text' => 'un mujer y un hombre', 'is_correct' => false],
                        ],
                        'explanation' => 'Mujer is feminine and hombre is masculine, so the articles are "una" and "un".',
                    ],
                    [
                        'question' => 'A learner says, "Necesito unos agua." What is the beginner-level correction for one bottle of water?',
                        'choices' => [
                            ['choice_text' => 'Necesito un agua.', 'is_correct' => true],
                            ['choice_text' => 'Necesito una agua.', 'is_correct' => false],
                            ['choice_text' => 'Necesito unas agua.', 'is_correct' => false],
                            ['choice_text' => 'Necesito unos aguas.', 'is_correct' => false],
                        ],
                        'explanation' => 'When talking about one quantity of water, "un agua" can be used in everyday ordering contexts. The noun remains grammatically feminine, even though singular "el agua" is used with the definite article.',
                    ],
                    [
                        'question' => 'Which sentence is the best choice when someone says they found several keys?',
                        'choices' => [
                            ['choice_text' => 'Encontré unas llaves.', 'is_correct' => true],
                            ['choice_text' => 'Encontré unos llaves.', 'is_correct' => false],
                            ['choice_text' => 'Encontré una llaves.', 'is_correct' => false],
                            ['choice_text' => 'Encontré un llaves.', 'is_correct' => false],
                        ],
                        'explanation' => 'Llaves is feminine plural, so the indefinite article is "unas".',
                    ],
                    [
                        'question' => 'Which pair correctly contrasts one non-specific noun with several non-specific nouns?',
                        'choices' => [
                            ['choice_text' => 'un libro / unos libros', 'is_correct' => true],
                            ['choice_text' => 'una libro / unas libros', 'is_correct' => false],
                            ['choice_text' => 'el libro / los libros', 'is_correct' => false],
                            ['choice_text' => 'un libro / unas libros', 'is_correct' => false],
                        ],
                        'explanation' => 'For the masculine noun libro, singular uses "un" and plural uses "unos."',
                    ],
                ],
            ],
            [
                'title' => 'Choosing Articles in Everyday Sentences',
                'description' => 'Use definite and indefinite articles naturally in short conversations, descriptions, and practical situations.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'A student says, "Tengo ___ mochila nueva." She means one backpack, not a specific backpack already mentioned. Which article fits?',
                        'choices' => [
                            ['choice_text' => 'una', 'is_correct' => true],
                            ['choice_text' => 'un', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                        ],
                        'explanation' => 'Mochila is feminine singular, and the backpack is introduced as one non-specific item, so "una" fits.',
                    ],
                    [
                        'question' => 'You enter a room and point to a specific table already known to both people. What would you say?',
                        'choices' => [
                            ['choice_text' => 'la mesa', 'is_correct' => true],
                            ['choice_text' => 'una mesa', 'is_correct' => false],
                            ['choice_text' => 'un mesa', 'is_correct' => false],
                            ['choice_text' => 'los mesa', 'is_correct' => false],
                        ],
                        'explanation' => 'A specific, identifiable table normally takes the definite article: "la mesa."',
                    ],
                    [
                        'question' => 'Which sentence naturally introduces a new book into a conversation?',
                        'choices' => [
                            ['choice_text' => 'Compré un libro ayer.', 'is_correct' => true],
                            ['choice_text' => 'Compré la libro ayer.', 'is_correct' => false],
                            ['choice_text' => 'Compré una libro ayer.', 'is_correct' => false],
                            ['choice_text' => 'Compré los libro ayer.', 'is_correct' => false],
                        ],
                        'explanation' => 'The book is being introduced as one non-specific item, so "un libro" is natural.',
                    ],
                    [
                        'question' => 'Later, you refer to that same book. Which phrase is more natural?',
                        'choices' => [
                            ['choice_text' => 'el libro', 'is_correct' => true],
                            ['choice_text' => 'un libro', 'is_correct' => false],
                            ['choice_text' => 'una libro', 'is_correct' => false],
                            ['choice_text' => 'los libro', 'is_correct' => false],
                        ],
                        'explanation' => 'Once the book is known in the conversation, the definite article "el" is appropriate.',
                    ],
                    [
                        'question' => 'Which sentence is correct when talking about several specific keys on the table?',
                        'choices' => [
                            ['choice_text' => 'Las llaves están sobre la mesa.', 'is_correct' => true],
                            ['choice_text' => 'Los llaves están sobre la mesa.', 'is_correct' => false],
                            ['choice_text' => 'Unas llaves están sobre la mesa.', 'is_correct' => false],
                            ['choice_text' => 'La llaves está sobre la mesa.', 'is_correct' => false],
                        ],
                        'explanation' => 'The keys are specific and plural, and llaves is feminine plural, so "las llaves" fits.',
                    ],
                    [
                        'question' => 'A waiter asks what you want. Which request sounds natural for one coffee?',
                        'choices' => [
                            ['choice_text' => 'Un café, por favor.', 'is_correct' => true],
                            ['choice_text' => 'Una café, por favor.', 'is_correct' => false],
                            ['choice_text' => 'La café, por favor.', 'is_correct' => false],
                            ['choice_text' => 'Un cafés, por favor.', 'is_correct' => false],
                        ],
                        'explanation' => 'Café is masculine singular, and "un café" is a standard way to order one coffee.',
                    ],
                    [
                        'question' => 'Which sentence correctly introduces some non-specific female students?',
                        'choices' => [
                            ['choice_text' => 'Hay unas estudiantes en la sala.', 'is_correct' => true],
                            ['choice_text' => 'Hay unos estudiantes en la sala.', 'is_correct' => false],
                            ['choice_text' => 'Hay una estudiantes en la sala.', 'is_correct' => false],
                            ['choice_text' => 'Hay las estudiantes en la sala.', 'is_correct' => false],
                        ],
                        'explanation' => 'For several female students being introduced without prior identification, "unas estudiantes" is appropriate.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Busco una farmacia cerca del hotel.', 'is_correct' => true],
                            ['choice_text' => 'Busco un farmacia cerca de la hotel.', 'is_correct' => false],
                            ['choice_text' => 'Busco la farmacia cerca del una hotel.', 'is_correct' => false],
                            ['choice_text' => 'Busco una farmacia cerca de los hotel.', 'is_correct' => false],
                        ],
                        'explanation' => 'Farmacia is feminine singular and hotel is masculine singular, so "una farmacia" and "el hotel" are correct structures.',
                    ],
                    [
                        'question' => 'A child sees one unknown dog in the park and says, "Mamá, mira ___ perro!" Which article is most natural for introducing the dog?',
                        'choices' => [
                            ['choice_text' => 'un', 'is_correct' => true],
                            ['choice_text' => 'una', 'is_correct' => false],
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                        ],
                        'explanation' => 'The dog is being introduced as one non-specific masculine noun, so "un perro" fits.',
                    ],
                    [
                        'question' => 'Which reply is natural when someone asks whether you have a specific dictionary on your desk?',
                        'choices' => [
                            ['choice_text' => 'Sí, tengo el diccionario.', 'is_correct' => true],
                            ['choice_text' => 'Sí, tengo una diccionario.', 'is_correct' => false],
                            ['choice_text' => 'Sí, tengo un diccionaria.', 'is_correct' => false],
                            ['choice_text' => 'Sí, tengo los diccionario.', 'is_correct' => false],
                        ],
                        'explanation' => 'The dictionary is specific and already identified, so the definite article "el" is used with masculine singular "diccionario."',
                    ],
                ],
            ],
            [
                'title' => 'The Contractions al and del',
                'description' => 'Build confidence with the common Spanish combinations a + el = al and de + el = del in everyday sentences.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Which phrase means "to the park"?',
                        'choices' => [
                            ['choice_text' => 'al parque', 'is_correct' => true],
                            ['choice_text' => 'a el parque', 'is_correct' => false],
                            ['choice_text' => 'a la parque', 'is_correct' => false],
                            ['choice_text' => 'del parque', 'is_correct' => false],
                        ],
                        'explanation' => 'Spanish normally contracts "a + el" to "al": "al parque."',
                    ],
                    [
                        'question' => 'Which phrase means "from the hotel"?',
                        'choices' => [
                            ['choice_text' => 'del hotel', 'is_correct' => true],
                            ['choice_text' => 'de el hotel', 'is_correct' => false],
                            ['choice_text' => 'de la hotel', 'is_correct' => false],
                            ['choice_text' => 'al hotel', 'is_correct' => false],
                        ],
                        'explanation' => 'Spanish contracts "de + el" to "del," so "del hotel" is correct.',
                    ],
                    [
                        'question' => 'Complete: "Vamos ___ mercado los sábados."',
                        'choices' => [
                            ['choice_text' => 'al', 'is_correct' => true],
                            ['choice_text' => 'del', 'is_correct' => false],
                            ['choice_text' => 'a la', 'is_correct' => false],
                            ['choice_text' => 'de la', 'is_correct' => false],
                        ],
                        'explanation' => 'The verb phrase expresses movement to the market, so a + el becomes "al mercado."',
                    ],
                    [
                        'question' => 'Complete: "Vengo ___ trabajo a las seis."',
                        'choices' => [
                            ['choice_text' => 'del', 'is_correct' => true],
                            ['choice_text' => 'al', 'is_correct' => false],
                            ['choice_text' => 'de la', 'is_correct' => false],
                            ['choice_text' => 'a el', 'is_correct' => false],
                        ],
                        'explanation' => 'The phrase means coming from work, so de + el contracts to "del trabajo."',
                    ],
                    [
                        'question' => 'Which sentence is written correctly?',
                        'choices' => [
                            ['choice_text' => 'Llegamos al banco temprano.', 'is_correct' => true],
                            ['choice_text' => 'Llegamos a el banco temprano.', 'is_correct' => false],
                            ['choice_text' => 'Llegamos del banco temprano.', 'is_correct' => false],
                            ['choice_text' => 'Llegamos a la banco temprano.', 'is_correct' => false],
                        ],
                        'explanation' => 'Banco is masculine singular, and a + el becomes "al": "llegamos al banco."',
                    ],
                    [
                        'question' => 'Which sentence correctly uses "del"?',
                        'choices' => [
                            ['choice_text' => 'La puerta del edificio está abierta.', 'is_correct' => true],
                            ['choice_text' => 'La puerta de el edificio está abierta.', 'is_correct' => false],
                            ['choice_text' => 'La puerta al edificio está abierta.', 'is_correct' => false],
                            ['choice_text' => 'La puerta del edificios está abierta.', 'is_correct' => false],
                        ],
                        'explanation' => 'Edificio is masculine singular, so de + el becomes "del edificio."',
                    ],
                    [
                        'question' => 'A friend says, "Voy ___ supermercado." Which answer completes the sentence?',
                        'choices' => [
                            ['choice_text' => 'al', 'is_correct' => true],
                            ['choice_text' => 'del', 'is_correct' => false],
                            ['choice_text' => 'a la', 'is_correct' => false],
                            ['choice_text' => 'de la', 'is_correct' => false],
                        ],
                        'explanation' => 'Supermercado is masculine singular, and movement to it uses a + el = "al supermercado."',
                    ],
                    [
                        'question' => 'Which form is correct: "regreso ___ médico"?',
                        'choices' => [
                            ['choice_text' => 'del', 'is_correct' => true],
                            ['choice_text' => 'al', 'is_correct' => false],
                            ['choice_text' => 'de la', 'is_correct' => false],
                            ['choice_text' => 'a el', 'is_correct' => false],
                        ],
                        'explanation' => 'If the meaning is "I return from the doctor," use de + el = "del médico."',
                    ],
                    [
                        'question' => 'Which sentence correctly distinguishes movement to a place from coming from it?',
                        'choices' => [
                            ['choice_text' => 'Voy al museo y vuelvo del museo.', 'is_correct' => true],
                            ['choice_text' => 'Voy del museo y vuelvo al museo.', 'is_correct' => false],
                            ['choice_text' => 'Voy a el museo y vuelvo de el museo.', 'is_correct' => false],
                            ['choice_text' => 'Voy al museo y vuelvo de la museo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Movement toward the museum uses al; movement away or origin uses del.',
                    ],
                    [
                        'question' => 'Which phrase should NOT be contracted?',
                        'choices' => [
                            ['choice_text' => 'a la escuela', 'is_correct' => true],
                            ['choice_text' => 'al parque', 'is_correct' => false],
                            ['choice_text' => 'del hotel', 'is_correct' => false],
                            ['choice_text' => 'al mercado', 'is_correct' => false],
                        ],
                        'explanation' => 'There is no contraction for a + la, so "a la escuela" stays as two words.',
                    ],
                    [
                        'question' => 'A learner writes "de el restaurante". What is the usual correction?',
                        'choices' => [
                            ['choice_text' => 'del restaurante', 'is_correct' => true],
                            ['choice_text' => 'al restaurante', 'is_correct' => false],
                            ['choice_text' => 'de la restaurante', 'is_correct' => false],
                            ['choice_text' => 'restaurante del', 'is_correct' => false],
                        ],
                        'explanation' => 'Spanish contracts de + el to "del" before a masculine singular noun.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Mañana vamos al cine.', 'is_correct' => true],
                            ['choice_text' => 'Mañana vamos a el cine.', 'is_correct' => false],
                            ['choice_text' => 'Mañana vamos del cine.', 'is_correct' => false],
                            ['choice_text' => 'Mañana vamos a la cine.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cine is masculine singular, so a + el contracts to "al cine."',
                    ],
                    [
                        'question' => 'Which phrase means "the door of the house"?',
                        'choices' => [
                            ['choice_text' => 'la puerta de la casa', 'is_correct' => true],
                            ['choice_text' => 'la puerta del casa', 'is_correct' => false],
                            ['choice_text' => 'la puerta de el casa', 'is_correct' => false],
                            ['choice_text' => 'la puerta al casa', 'is_correct' => false],
                        ],
                        'explanation' => 'Casa is feminine singular, so de + la stays "de la casa." The contraction del is only with masculine singular el.',
                    ],
                    [
                        'question' => 'Which sentence has both contractions used correctly?',
                        'choices' => [
                            ['choice_text' => 'Salimos del hotel y vamos al aeropuerto.', 'is_correct' => true],
                            ['choice_text' => 'Salimos de el hotel y vamos a el aeropuerto.', 'is_correct' => false],
                            ['choice_text' => 'Salimos al hotel y vamos del aeropuerto.', 'is_correct' => false],
                            ['choice_text' => 'Salimos de la hotel y vamos a la aeropuerto.', 'is_correct' => false],
                        ],
                        'explanation' => 'Hotel and aeropuerto are masculine singular. Therefore de + el becomes del and a + el becomes al.',
                    ],
                ],
            ],
            [
                'title' => 'When Spanish Uses No Article',
                'description' => 'Recognize common beginner situations where Spanish can omit an article, especially with professions and plural or uncountable ideas.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which sentence is natural when saying "I am a teacher" as a profession?',
                        'choices' => [
                            ['choice_text' => 'Soy profesor.', 'is_correct' => true],
                            ['choice_text' => 'Soy el profesor.', 'is_correct' => false],
                            ['choice_text' => 'Soy un profesor.', 'is_correct' => false],
                            ['choice_text' => 'Soy la profesor.', 'is_correct' => false],
                        ],
                        'explanation' => 'After ser, professions are commonly used without an article when simply stating someone\'s occupation: "Soy profesor."',
                    ],
                    [
                        'question' => 'Which sentence means "She is a doctor" in a simple statement of profession?',
                        'choices' => [
                            ['choice_text' => 'Ella es médica.', 'is_correct' => true],
                            ['choice_text' => 'Ella es la médica.', 'is_correct' => false],
                            ['choice_text' => 'Ella es una médica.', 'is_correct' => false],
                            ['choice_text' => 'Ella son médica.', 'is_correct' => false],
                        ],
                        'explanation' => 'With ser, a profession is often used without an article when it is simply identifying the person\'s occupation.',
                    ],
                    [
                        'question' => 'Which sentence is the best beginner example of a plural noun used generally?',
                        'choices' => [
                            ['choice_text' => 'Los perros necesitan agua.', 'is_correct' => true],
                            ['choice_text' => 'Perros necesita agua.', 'is_correct' => false],
                            ['choice_text' => 'Unos perros necesitan agua.', 'is_correct' => false],
                            ['choice_text' => 'El perros necesitan agua.', 'is_correct' => false],
                        ],
                        'explanation' => 'Spanish commonly uses the definite article with plural nouns when speaking about a whole group or class in a general sense: "Los perros..."',
                    ],
                    [
                        'question' => 'Which phrase naturally names a school subject in a general context?',
                        'choices' => [
                            ['choice_text' => 'estudio matemáticas', 'is_correct' => true],
                            ['choice_text' => 'estudio las matemáticas', 'is_correct' => false],
                            ['choice_text' => 'estudio una matemáticas', 'is_correct' => false],
                            ['choice_text' => 'estudio un matemáticas', 'is_correct' => false],
                        ],
                        'explanation' => 'With school subjects, Spanish often omits the article in statements such as "Estudio matemáticas."',
                    ],
                    [
                        'question' => 'Which sentence is natural when saying "I drink coffee" as a general habit?',
                        'choices' => [
                            ['choice_text' => 'Bebo café.', 'is_correct' => true],
                            ['choice_text' => 'Bebo el café.', 'is_correct' => false],
                            ['choice_text' => 'Bebo una café.', 'is_correct' => false],
                            ['choice_text' => 'Bebo los café.', 'is_correct' => false],
                        ],
                        'explanation' => 'When talking about coffee as an uncountable substance or general habit, the noun can be used without an article.',
                    ],
                    [
                        'question' => 'Which sentence refers to one specific coffee that is already identified?',
                        'choices' => [
                            ['choice_text' => 'Bebo el café que preparaste.', 'is_correct' => true],
                            ['choice_text' => 'Bebo café que preparaste.', 'is_correct' => false],
                            ['choice_text' => 'Bebo una café que preparaste.', 'is_correct' => false],
                            ['choice_text' => 'Bebo los café que preparaste.', 'is_correct' => false],
                        ],
                        'explanation' => 'Here the coffee is specific because it is the one you prepared, so the definite article "el" is appropriate.',
                    ],
                    [
                        'question' => 'Which sentence is correct for a person simply stating their profession?',
                        'choices' => [
                            ['choice_text' => 'Mi hermano es ingeniero.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermano es el ingeniero.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano es la ingeniero.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano son ingeniero.', 'is_correct' => false],
                        ],
                        'explanation' => 'The normal simple statement of occupation uses the profession without an article after ser.',
                    ],
                    [
                        'question' => 'A doctor says, "Soy ___ médico," while introducing herself only by profession. Which word is normally omitted?',
                        'choices' => [
                            ['choice_text' => 'the article', 'is_correct' => true],
                            ['choice_text' => 'the verb', 'is_correct' => false],
                            ['choice_text' => 'the noun', 'is_correct' => false],
                            ['choice_text' => 'the subject pronoun only', 'is_correct' => false],
                        ],
                        'explanation' => 'In a simple occupational statement, Spanish usually says "Soy médico/médica" without an article.',
                    ],
                    [
                        'question' => 'Which sentence contrasts a general activity with a specific object most clearly?',
                        'choices' => [
                            ['choice_text' => 'Leo libros, pero hoy leo el libro de Ana.', 'is_correct' => true],
                            ['choice_text' => 'Leo los libros, pero hoy leo libros de Ana.', 'is_correct' => false],
                            ['choice_text' => 'Leo un libros, pero hoy leo el libro de Ana.', 'is_correct' => false],
                            ['choice_text' => 'Leo libro, pero hoy leo unas libro de Ana.', 'is_correct' => false],
                        ],
                        'explanation' => '"Libros" can describe reading as a general activity, while "el libro de Ana" identifies one specific book.',
                    ],
                    [
                        'question' => 'Which statement is the safest beginner rule about professions after ser?',
                        'choices' => [
                            ['choice_text' => 'The article is often omitted when simply stating someone\'s profession.', 'is_correct' => true],
                            ['choice_text' => 'The article is always required.', 'is_correct' => false],
                            ['choice_text' => 'Only feminine professions omit the article.', 'is_correct' => false],
                            ['choice_text' => 'Articles are never used with professions in any context.', 'is_correct' => false],
                        ],
                        'explanation' => 'The article is often omitted in simple profession statements, although it can appear when the meaning is more specific.',
                    ],
                    [
                        'question' => 'Which sentence treats "water" as a general substance?',
                        'choices' => [
                            ['choice_text' => 'Bebo agua todos los días.', 'is_correct' => true],
                            ['choice_text' => 'Bebo el agua todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Bebo una agua todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Bebo las agua todos los días.', 'is_correct' => false],
                        ],
                        'explanation' => 'With a substance used in a general sense, Spanish can omit the article: "Bebo agua."',
                    ],
                    [
                        'question' => 'Which sentence is most natural if someone means "I study Spanish" as a subject?',
                        'choices' => [
                            ['choice_text' => 'Estudio español.', 'is_correct' => true],
                            ['choice_text' => 'Estudio el español.', 'is_correct' => false],
                            ['choice_text' => 'Estudio un español.', 'is_correct' => false],
                            ['choice_text' => 'Estudio unos español.', 'is_correct' => false],
                        ],
                        'explanation' => 'As a language or school subject, "español" is commonly used without an article in this simple sentence.',
                    ],
                ],
            ],
            [
                'title' => 'Articles: A Mixed Beginner Review',
                'description' => 'Bring together definite, indefinite, contracted, and zero-article patterns in short practical situations.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'You point to one specific window in the room. Which phrase is correct?',
                        'choices' => [
                            ['choice_text' => 'la ventana', 'is_correct' => true],
                            ['choice_text' => 'una ventana', 'is_correct' => false],
                            ['choice_text' => 'un ventana', 'is_correct' => false],
                            ['choice_text' => 'los ventana', 'is_correct' => false],
                        ],
                        'explanation' => 'The window is specific and feminine singular, so "la ventana" is appropriate.',
                    ],
                    [
                        'question' => 'Which phrase correctly introduces several non-specific masculine books?',
                        'choices' => [
                            ['choice_text' => 'unos libros', 'is_correct' => true],
                            ['choice_text' => 'unas libros', 'is_correct' => false],
                            ['choice_text' => 'los libros', 'is_correct' => false],
                            ['choice_text' => 'un libros', 'is_correct' => false],
                        ],
                        'explanation' => 'For several non-specific masculine books, use "unos libros."',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'La profesora tiene un libro.', 'is_correct' => true],
                            ['choice_text' => 'El profesora tiene una libro.', 'is_correct' => false],
                            ['choice_text' => 'La profesora tiene una libro.', 'is_correct' => false],
                            ['choice_text' => 'La profesora tiene un libros.', 'is_correct' => false],
                        ],
                        'explanation' => 'Profesora is feminine singular and libro is masculine singular, so "la profesora" and "un libro" are correct.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses al?',
                        'choices' => [
                            ['choice_text' => 'Voy al mercado después de clase.', 'is_correct' => true],
                            ['choice_text' => 'Voy a el mercado después de clase.', 'is_correct' => false],
                            ['choice_text' => 'Voy del mercado después de clase.', 'is_correct' => false],
                            ['choice_text' => 'Voy a la mercado después de clase.', 'is_correct' => false],
                        ],
                        'explanation' => 'Movement to a masculine singular place uses a + el = "al mercado."',
                    ],
                    [
                        'question' => 'Which sentence correctly uses del?',
                        'choices' => [
                            ['choice_text' => 'El nombre del estudiante está aquí.', 'is_correct' => true],
                            ['choice_text' => 'El nombre de el estudiante está aquí.', 'is_correct' => false],
                            ['choice_text' => 'El nombre al estudiante está aquí.', 'is_correct' => false],
                            ['choice_text' => 'El nombre de la estudiante está aquí.', 'is_correct' => false],
                        ],
                        'explanation' => 'Here the sentence refers to a male student, so de + el becomes "del estudiante."',
                    ],
                    [
                        'question' => 'Which sentence naturally states a profession?',
                        'choices' => [
                            ['choice_text' => 'Carlos es arquitecto.', 'is_correct' => true],
                            ['choice_text' => 'Carlos es el arquitecto.', 'is_correct' => false],
                            ['choice_text' => 'Carlos es una arquitecto.', 'is_correct' => false],
                            ['choice_text' => 'Carlos son arquitecto.', 'is_correct' => false],
                        ],
                        'explanation' => 'When simply naming Carlos\'s profession, Spanish commonly omits the article after ser.',
                    ],
                    [
                        'question' => 'Which phrase is correct even though "mano" ends in -o?',
                        'choices' => [
                            ['choice_text' => 'la mano', 'is_correct' => true],
                            ['choice_text' => 'el mano', 'is_correct' => false],
                            ['choice_text' => 'un mano', 'is_correct' => false],
                            ['choice_text' => 'los mano', 'is_correct' => false],
                        ],
                        'explanation' => 'Mano is a feminine noun, so it takes "la" even though it ends in -o.',
                    ],
                    [
                        'question' => 'A friend says, "Compré una mesa. ___ mesa es de madera." Which article completes the second sentence?',
                        'choices' => [
                            ['choice_text' => 'La', 'is_correct' => true],
                            ['choice_text' => 'Una', 'is_correct' => false],
                            ['choice_text' => 'El', 'is_correct' => false],
                            ['choice_text' => 'Un', 'is_correct' => false],
                        ],
                        'explanation' => 'The table has already been introduced, so the second mention uses the definite article: "la mesa."',
                    ],
                    [
                        'question' => 'Which sentence talks about water in a general sense?',
                        'choices' => [
                            ['choice_text' => 'Necesito agua.', 'is_correct' => true],
                            ['choice_text' => 'Necesito la agua.', 'is_correct' => false],
                            ['choice_text' => 'Necesito las agua.', 'is_correct' => false],
                            ['choice_text' => 'Necesito un agua.', 'is_correct' => false],
                        ],
                        'explanation' => 'When water is meant as a general substance, the article can be omitted: "Necesito agua."',
                    ],
                    [
                        'question' => 'Which sentence refers to specific water already identified?',
                        'choices' => [
                            ['choice_text' => 'Necesito el agua de la botella.', 'is_correct' => true],
                            ['choice_text' => 'Necesito agua de la botella.', 'is_correct' => false],
                            ['choice_text' => 'Necesito una agua de la botella.', 'is_correct' => false],
                            ['choice_text' => 'Necesito los agua de la botella.', 'is_correct' => false],
                        ],
                        'explanation' => 'The water is specific because it is the water from the bottle, so the definite article is used. "El agua" is the standard singular form here.',
                    ],
                    [
                        'question' => 'Which pair correctly contrasts "a hotel" with "the hotel"?',
                        'choices' => [
                            ['choice_text' => 'un hotel / el hotel', 'is_correct' => true],
                            ['choice_text' => 'una hotel / la hotel', 'is_correct' => false],
                            ['choice_text' => 'un hotel / la hotel', 'is_correct' => false],
                            ['choice_text' => 'una hotel / el hotel', 'is_correct' => false],
                        ],
                        'explanation' => 'Hotel is masculine singular, so the indefinite and definite articles are "un" and "el."',
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
