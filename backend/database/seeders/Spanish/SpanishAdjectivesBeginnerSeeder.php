<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishAdjectivesBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'spanish-adjectives')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Adjective Agreement: The Basics',
                'description' => 'Practice matching common Spanish adjectives with singular and plural nouns, including basic masculine and feminine forms.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Ana has one small house. Which phrase sounds natural in Spanish?',
                        'choices' => [
                            ['choice_text' => 'una casa pequeña', 'is_correct' => true],
                            ['choice_text' => 'una casa pequeño', 'is_correct' => false],
                            ['choice_text' => 'un casa pequeña', 'is_correct' => false],
                            ['choice_text' => 'una casas pequeña', 'is_correct' => false],
                        ],
                        'explanation' => 'Casa is feminine singular, so both the article and adjective agree: “una casa pequeña.”',
                    ],
                    [
                        'question' => 'Choose the correct adjective for “un libro ___” when the book is new.',
                        'choices' => [
                            ['choice_text' => 'nuevo', 'is_correct' => true],
                            ['choice_text' => 'nueva', 'is_correct' => false],
                            ['choice_text' => 'nuevas', 'is_correct' => false],
                            ['choice_text' => 'nuevos', 'is_correct' => false],
                        ],
                        'explanation' => 'Libro is masculine singular, so nuevo is the matching form.',
                    ],
                    [
                        'question' => 'Which phrase is correct for “two old cars”?',
                        'choices' => [
                            ['choice_text' => 'dos coches viejos', 'is_correct' => true],
                            ['choice_text' => 'dos coches viejo', 'is_correct' => false],
                            ['choice_text' => 'dos coches viejas', 'is_correct' => false],
                            ['choice_text' => 'dos coche viejos', 'is_correct' => false],
                        ],
                        'explanation' => 'Coches is masculine plural, so viejo becomes viejos.',
                    ],
                    [
                        'question' => 'A student writes “las ventanas blanco.” What needs to change?',
                        'choices' => [
                            ['choice_text' => '“blanco” should become “blancas”.', 'is_correct' => true],
                            ['choice_text' => '“las” should become “los”.', 'is_correct' => false],
                            ['choice_text' => '“ventanas” should become singular.', 'is_correct' => false],
                            ['choice_text' => 'Nothing; the sentence is already correct.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ventanas is feminine plural, so the color adjective must also be feminine plural: “las ventanas blancas.”',
                    ],
                    [
                        'question' => 'Which sentence uses adjective agreement correctly?',
                        'choices' => [
                            ['choice_text' => 'El perro negro corre rápido.', 'is_correct' => true],
                            ['choice_text' => 'El perro negra corre rápido.', 'is_correct' => false],
                            ['choice_text' => 'La perro negro corre rápido.', 'is_correct' => false],
                            ['choice_text' => 'El perros negro corre rápido.', 'is_correct' => false],
                        ],
                        'explanation' => 'Perro is masculine singular, so negro is masculine singular too.',
                    ],
                    [
                        'question' => 'Marta has three red flowers. Which phrase should she use?',
                        'choices' => [
                            ['choice_text' => 'tres flores rojas', 'is_correct' => true],
                            ['choice_text' => 'tres flores rojo', 'is_correct' => false],
                            ['choice_text' => 'tres flor rojas', 'is_correct' => false],
                            ['choice_text' => 'tres flores roja', 'is_correct' => false],
                        ],
                        'explanation' => 'Flores is feminine plural, so roja must agree in gender and number: rojas.',
                    ],
                    [
                        'question' => 'Which adjective form fits “una película ___” if the movie is interesting?',
                        'choices' => [
                            ['choice_text' => 'interesante', 'is_correct' => true],
                            ['choice_text' => 'interesanta', 'is_correct' => false],
                            ['choice_text' => 'interesantes', 'is_correct' => false],
                            ['choice_text' => 'interesanto', 'is_correct' => false],
                        ],
                        'explanation' => 'Interesante has the same singular form for masculine and feminine nouns.',
                    ],
                    [
                        'question' => 'Which pair shows the adjective correctly changing for plural number?',
                        'choices' => [
                            ['choice_text' => 'el libro nuevo → los libros nuevos\'', 'is_correct' => true],
                            ['choice_text' => 'el libro nuevo → los libros nuevo\'', 'is_correct' => false],
                            ['choice_text' => 'la mesa nueva → las mesas nueva\'', 'is_correct' => false],
                            ['choice_text' => 'el coche rojo → los coches roja\'', 'is_correct' => false],
                        ],
                        'explanation' => 'When the noun becomes plural, the adjective also becomes plural: nuevo → nuevos.',
                    ],
                    [
                        'question' => 'Why is “la camisa blanca” correct?',
                        'choices' => [
                            ['choice_text' => 'The adjective matches the feminine singular noun in gender and number.', 'is_correct' => true],
                            ['choice_text' => 'Spanish adjectives always use feminine endings.', 'is_correct' => false],
                            ['choice_text' => 'Camisa is masculine but white is feminine.', 'is_correct' => false],
                            ['choice_text' => 'The adjective does not agree with the noun.', 'is_correct' => false],
                        ],
                        'explanation' => 'Camisa is feminine singular, so the regular adjective blanco changes to blanca.',
                    ],
                    [
                        'question' => 'A café has two hot coffees on the counter. Which description is correct?',
                        'choices' => [
                            ['choice_text' => 'dos cafés calientes', 'is_correct' => true],
                            ['choice_text' => 'dos café caliente', 'is_correct' => false],
                            ['choice_text' => 'dos cafés calientas', 'is_correct' => false],
                            ['choice_text' => 'dos café calientes', 'is_correct' => false],
                        ],
                        'explanation' => 'Cafés is masculine plural and caliente becomes plural: calientes.',
                    ],
                    [
                        'question' => 'Which sentence contains a mistake in adjective agreement?',
                        'choices' => [
                            ['choice_text' => 'Las chicas son simpático.', 'is_correct' => true],
                            ['choice_text' => 'Las chicas son simpáticas.', 'is_correct' => false],
                            ['choice_text' => 'Los chicos son simpáticos.', 'is_correct' => false],
                            ['choice_text' => 'La chica es simpática.', 'is_correct' => false],
                        ],
                        'explanation' => 'Chicas is feminine plural, so simpático must be feminine plural: simpáticas.',
                    ],
                    [
                        'question' => 'You want to describe one masculine noun and one feminine noun. Which pair is correct?',
                        'choices' => [
                            ['choice_text' => 'un coche rápido y una bicicleta rápida', 'is_correct' => true],
                            ['choice_text' => 'un coche rápida y una bicicleta rápido', 'is_correct' => false],
                            ['choice_text' => 'un coche rápidos y una bicicleta rápidas', 'is_correct' => false],
                            ['choice_text' => 'un coche rápida y una bicicleta rápida', 'is_correct' => false],
                        ],
                        'explanation' => 'Rápido changes to rápida because it agrees with each noun separately: coche is masculine, bicicleta is feminine.',
                    ],
                ],
            ],
            [
                'title' => 'Masculine, Feminine, and Plural Forms',
                'description' => 'Build confidence with regular adjective endings and the changes needed for masculine, feminine, singular, and plural nouns.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which is the feminine form of “alto” for a singular noun?',
                        'choices' => [
                            ['choice_text' => 'alta', 'is_correct' => true],
                            ['choice_text' => 'altas', 'is_correct' => false],
                            ['choice_text' => 'altos', 'is_correct' => false],
                            ['choice_text' => 'alte', 'is_correct' => false],
                        ],
                        'explanation' => 'A regular adjective ending in -o changes to -a for a feminine singular noun.',
                    ],
                    [
                        'question' => 'What is the plural masculine form of “pequeño”?',
                        'choices' => [
                            ['choice_text' => 'pequeños', 'is_correct' => true],
                            ['choice_text' => 'pequeñas', 'is_correct' => false],
                            ['choice_text' => 'pequeñoes', 'is_correct' => false],
                            ['choice_text' => 'pequeña', 'is_correct' => false],
                        ],
                        'explanation' => 'The masculine plural adds -s: pequeño → pequeños.',
                    ],
                    [
                        'question' => 'Choose the correct phrase for “four beautiful houses.”',
                        'choices' => [
                            ['choice_text' => 'cuatro casas bonitas', 'is_correct' => true],
                            ['choice_text' => 'cuatro casas bonitos', 'is_correct' => false],
                            ['choice_text' => 'cuatro casa bonitas', 'is_correct' => false],
                            ['choice_text' => 'cuatro casas bonita', 'is_correct' => false],
                        ],
                        'explanation' => 'Casas is feminine plural, so bonita becomes bonitas.',
                    ],
                    [
                        'question' => 'Which noun-adjective pair is correct?',
                        'choices' => [
                            ['choice_text' => 'un vestido negro', 'is_correct' => true],
                            ['choice_text' => 'un vestido negra', 'is_correct' => false],
                            ['choice_text' => 'una vestido negro', 'is_correct' => false],
                            ['choice_text' => 'unos vestido negro', 'is_correct' => false],
                        ],
                        'explanation' => 'Vestido is masculine singular, so both un and negro use masculine singular forms.',
                    ],
                    [
                        'question' => 'Which pair correctly changes a regular adjective from singular feminine to plural feminine?',
                        'choices' => [
                            ['choice_text' => 'nueva → nuevas\'', 'is_correct' => true],
                            ['choice_text' => 'nueva → nuevos\'', 'is_correct' => false],
                            ['choice_text' => 'nueva → nuevo\'', 'is_correct' => false],
                            ['choice_text' => 'nueva → nueves\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The feminine ending remains -a and the plural adds -s: nueva → nuevas.',
                    ],
                    [
                        'question' => 'A student says “los coches roja.” What is the most direct correction?',
                        'choices' => [
                            ['choice_text' => 'los coches rojos', 'is_correct' => true],
                            ['choice_text' => 'las coches rojas', 'is_correct' => false],
                            ['choice_text' => 'los coche rojo', 'is_correct' => false],
                            ['choice_text' => 'la coches roja', 'is_correct' => false],
                        ],
                        'explanation' => 'Coches is masculine plural, so rojo must become rojos.',
                    ],
                    [
                        'question' => 'Which adjective usually keeps the same singular form for masculine and feminine nouns?',
                        'choices' => [
                            ['choice_text' => 'feliz', 'is_correct' => true],
                            ['choice_text' => 'alto', 'is_correct' => false],
                            ['choice_text' => 'bonito', 'is_correct' => false],
                            ['choice_text' => 'cansado', 'is_correct' => false],
                        ],
                        'explanation' => 'Feliz has the same singular form for both genders: un niño feliz and una niña feliz.',
                    ],
                    [
                        'question' => 'Which phrase correctly uses “feliz” with a feminine noun?',
                        'choices' => [
                            ['choice_text' => 'una niña feliz', 'is_correct' => true],
                            ['choice_text' => 'una niña feliza', 'is_correct' => false],
                            ['choice_text' => 'un niña feliz', 'is_correct' => false],
                            ['choice_text' => 'unas niña feliz', 'is_correct' => false],
                        ],
                        'explanation' => 'Feliz does not take a separate feminine ending, so “una niña feliz” is correct.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Mis hermanas son altas.', 'is_correct' => true],
                            ['choice_text' => 'Mis hermanas son altos.', 'is_correct' => false],
                            ['choice_text' => 'Mis hermana son altas.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermanas son altas.', 'is_correct' => false],
                        ],
                        'explanation' => 'Hermanas is feminine plural, so altas must also be feminine plural.',
                    ],
                    [
                        'question' => 'What happens to an adjective ending in -e when the noun becomes feminine?',
                        'choices' => [
                            ['choice_text' => 'It often stays the same in the singular.', 'is_correct' => true],
                            ['choice_text' => 'It must always change to -a.', 'is_correct' => false],
                            ['choice_text' => 'It must change to -o.', 'is_correct' => false],
                            ['choice_text' => 'It becomes plural automatically.', 'is_correct' => false],
                        ],
                        'explanation' => 'Many adjectives ending in -e are the same for masculine and feminine singular nouns, such as interesante.',
                    ],
                    [
                        'question' => 'Which phrase is correct for a masculine plural noun with “joven”?',
                        'choices' => [
                            ['choice_text' => 'los hombres jóvenes', 'is_correct' => true],
                            ['choice_text' => 'los hombres jóven', 'is_correct' => false],
                            ['choice_text' => 'las hombres jóvenes', 'is_correct' => false],
                            ['choice_text' => 'los hombres jóvenas', 'is_correct' => false],
                        ],
                        'explanation' => 'Joven does not change for gender, but it does form a plural: jóvenes.',
                    ],
                    [
                        'question' => 'A teacher writes four phrases on the board. Which one is incorrect?',
                        'choices' => [
                            ['choice_text' => 'las flores rojo', 'is_correct' => true],
                            ['choice_text' => 'los zapatos negros', 'is_correct' => false],
                            ['choice_text' => 'la camisa blanca', 'is_correct' => false],
                            ['choice_text' => 'el coche rápido', 'is_correct' => false],
                        ],
                        'explanation' => 'Flores is feminine plural, so rojo must be rojas.',
                    ],
                ],
            ],
            [
                'title' => 'Common Adjectives in Everyday Spanish',
                'description' => 'Use familiar adjectives for people, objects, places, and daily situations instead of learning them only as isolated vocabulary.',
                'settings' => ['duration' => 15, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'You want to say “a kind woman.” Which phrase is correct?',
                        'choices' => [
                            ['choice_text' => 'una mujer amable', 'is_correct' => true],
                            ['choice_text' => 'un mujer amable', 'is_correct' => false],
                            ['choice_text' => 'una mujer amabla', 'is_correct' => false],
                            ['choice_text' => 'una mujer amables', 'is_correct' => false],
                        ],
                        'explanation' => 'Amable has the same singular form for masculine and feminine nouns.',
                    ],
                    [
                        'question' => 'Which phrase means “a difficult exam”?',
                        'choices' => [
                            ['choice_text' => 'un examen difícil', 'is_correct' => true],
                            ['choice_text' => 'una examen difícil', 'is_correct' => false],
                            ['choice_text' => 'un examen difícila', 'is_correct' => false],
                            ['choice_text' => 'un exámenes difíciles', 'is_correct' => false],
                        ],
                        'explanation' => 'Examen is masculine singular, and difícil is a singular adjective that works for both genders.',
                    ],
                    [
                        'question' => 'A child is not tired, but his father is. Which sentence matches that idea?',
                        'choices' => [
                            ['choice_text' => 'El niño no está cansado, pero el padre está cansado.', 'is_correct' => true],
                            ['choice_text' => 'El niño no está cansada, pero el padre está cansado.', 'is_correct' => false],
                            ['choice_text' => 'El niño no están cansado, pero el padre está cansado.', 'is_correct' => false],
                            ['choice_text' => 'El niño no está cansado, pero el padre está cansada.', 'is_correct' => false],
                        ],
                        'explanation' => 'Niño and padre are masculine singular, so the adjective is cansado in both cases.',
                    ],
                    [
                        'question' => 'Which description fits “una ciudad” if the city is very modern?',
                        'choices' => [
                            ['choice_text' => 'una ciudad moderna', 'is_correct' => true],
                            ['choice_text' => 'una ciudad moderno', 'is_correct' => false],
                            ['choice_text' => 'un ciudad moderna', 'is_correct' => false],
                            ['choice_text' => 'una ciudades modernas', 'is_correct' => false],
                        ],
                        'explanation' => 'Ciudad is feminine singular, and moderna agrees with it.',
                    ],
                    [
                        'question' => 'Which sentence describes two friendly neighbors?',
                        'choices' => [
                            ['choice_text' => 'Mis vecinos son simpáticos.', 'is_correct' => true],
                            ['choice_text' => 'Mis vecinos son simpáticas.', 'is_correct' => false],
                            ['choice_text' => 'Mi vecinos son simpáticos.', 'is_correct' => false],
                            ['choice_text' => 'Mis vecino es simpático.', 'is_correct' => false],
                        ],
                        'explanation' => 'Vecinos is masculine plural, so simpáticos is the matching form.',
                    ],
                    [
                        'question' => 'Which adjective best completes “La película es ___” if it made you laugh a lot?',
                        'choices' => [
                            ['choice_text' => 'divertida', 'is_correct' => true],
                            ['choice_text' => 'divertido', 'is_correct' => false],
                            ['choice_text' => 'divertidas', 'is_correct' => false],
                            ['choice_text' => 'divertid', 'is_correct' => false],
                        ],
                        'explanation' => 'Película is feminine singular, so the adjective is divertida.',
                    ],
                    [
                        'question' => 'You have one clean room and two clean windows. Which option is correct?',
                        'choices' => [
                            ['choice_text' => 'una habitación limpia y dos ventanas limpias', 'is_correct' => true],
                            ['choice_text' => 'una habitación limpio y dos ventanas limpias', 'is_correct' => false],
                            ['choice_text' => 'una habitación limpia y dos ventanas limpio', 'is_correct' => false],
                            ['choice_text' => 'un habitación limpia y dos ventanas limpias', 'is_correct' => false],
                        ],
                        'explanation' => 'Both nouns are feminine, and limpia changes to limpias for the plural ventanas.',
                    ],
                    [
                        'question' => 'Which sentence sounds natural?',
                        'choices' => [
                            ['choice_text' => 'Tengo una mochila pesada.', 'is_correct' => true],
                            ['choice_text' => 'Tengo una mochila pesado.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un mochila pesada.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una mochilas pesada.', 'is_correct' => false],
                        ],
                        'explanation' => 'Mochila is feminine singular, so pesada agrees with it.',
                    ],
                    [
                        'question' => 'Which adjective describes a person who has lots of energy?',
                        'choices' => [
                            ['choice_text' => 'activo', 'is_correct' => true],
                            ['choice_text' => 'cerrado', 'is_correct' => false],
                            ['choice_text' => 'vacío', 'is_correct' => false],
                            ['choice_text' => 'oscuro', 'is_correct' => false],
                        ],
                        'explanation' => 'Activo means active, so it is the natural adjective for someone with lots of energy.',
                    ],
                    [
                        'question' => 'Which phrase correctly describes a feminine noun with the adjective “serio”?',
                        'choices' => [
                            ['choice_text' => 'una situación seria', 'is_correct' => true],
                            ['choice_text' => 'una situación serio', 'is_correct' => false],
                            ['choice_text' => 'un situación seria', 'is_correct' => false],
                            ['choice_text' => 'una situaciones seria', 'is_correct' => false],
                        ],
                        'explanation' => 'Situación is feminine singular, so serio becomes seria.',
                    ],
                ],
            ],
            [
                'title' => 'Adjective Position and Meaning',
                'description' => 'See how adjective position can affect emphasis or meaning while practicing simple, natural Spanish phrases.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'In the beginner phrase “una casa grande,” where does the adjective usually appear?',
                        'choices' => [
                            ['choice_text' => 'After the noun', 'is_correct' => true],
                            ['choice_text' => 'Before the article', 'is_correct' => false],
                            ['choice_text' => 'Inside the noun', 'is_correct' => false],
                            ['choice_text' => 'Only at the end of the sentence', 'is_correct' => false],
                        ],
                        'explanation' => 'In ordinary beginner descriptions, adjectives commonly come after the noun: “una casa grande.”',
                    ],
                    [
                        'question' => 'Which sentence is the most natural basic way to say “I have a red car”?',
                        'choices' => [
                            ['choice_text' => 'Tengo un coche rojo.', 'is_correct' => true],
                            ['choice_text' => 'Tengo un rojo coche.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una coche roja.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un coche roja.', 'is_correct' => false],
                        ],
                        'explanation' => 'A basic neutral description places rojo after coche: “un coche rojo.”',
                    ],
                    [
                        'question' => 'Which phrase is correct?',
                        'choices' => [
                            ['choice_text' => 'una mesa redonda', 'is_correct' => true],
                            ['choice_text' => 'una redonda mesa', 'is_correct' => false],
                            ['choice_text' => 'un mesa redonda', 'is_correct' => false],
                            ['choice_text' => 'una mesa redondo', 'is_correct' => false],
                        ],
                        'explanation' => 'The natural basic order is noun + adjective, and redonda agrees with feminine singular mesa.',
                    ],
                    [
                        'question' => 'A learner says “un viejo amigo.” In this phrase, what can the position of “viejo” suggest?',
                        'choices' => [
                            ['choice_text' => 'It can describe a long-standing or familiar friend, depending on context.\'', 'is_correct' => true],
                            ['choice_text' => 'It always means the friend is old in age.\'', 'is_correct' => false],
                            ['choice_text' => 'It changes amigo into a verb.\'', 'is_correct' => false],
                            ['choice_text' => 'It makes the phrase plural.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Some common adjectives can shift nuance when placed before the noun. “Un viejo amigo” often means a longtime friend.',
                    ],
                    [
                        'question' => 'Which option is a straightforward description of a small dog?',
                        'choices' => [
                            ['choice_text' => 'un perro pequeño', 'is_correct' => true],
                            ['choice_text' => 'una perro pequeña', 'is_correct' => false],
                            ['choice_text' => 'un pequeño perroes', 'is_correct' => false],
                            ['choice_text' => 'un perro pequeña', 'is_correct' => false],
                        ],
                        'explanation' => 'Perro is masculine singular and pequeño agrees with it. The basic neutral order is noun + adjective.',
                    ],
                    [
                        'question' => 'Which phrase uses adjective position naturally for a simple physical description?',
                        'choices' => [
                            ['choice_text' => 'una camiseta blanca\'', 'is_correct' => true],
                            ['choice_text' => 'blanca una camiseta\'', 'is_correct' => false],
                            ['choice_text' => 'una camiseta blanco\'', 'is_correct' => false],
                            ['choice_text' => 'un camiseta blanca\'', 'is_correct' => false],
                        ],
                        'explanation' => 'For a basic description, “camiseta” comes before “blanca”: “una camiseta blanca.”',
                    ],
                    [
                        'question' => 'Which statement about adjective position is safest for a beginner?',
                        'choices' => [
                            ['choice_text' => 'Adjectives often come after the noun in simple descriptions, although some can appear before it.', 'is_correct' => true],
                            ['choice_text' => 'Adjectives must always come before the noun.', 'is_correct' => false],
                            ['choice_text' => 'Adjectives can never come before the noun.', 'is_correct' => false],
                            ['choice_text' => 'Adjective position never affects meaning or emphasis.', 'is_correct' => false],
                        ],
                        'explanation' => 'After-the-noun placement is a useful beginner default, but Spanish also uses pre-nominal adjectives for common patterns and shades of meaning.',
                    ],
                    [
                        'question' => 'Which sentence is correctly formed?',
                        'choices' => [
                            ['choice_text' => 'Compré una camisa nueva.', 'is_correct' => true],
                            ['choice_text' => 'Compré un camisa nuevo.', 'is_correct' => false],
                            ['choice_text' => 'Compré una camisa nuevo.', 'is_correct' => false],
                            ['choice_text' => 'Compré unas camisa nueva.', 'is_correct' => false],
                        ],
                        'explanation' => 'Camisa is feminine singular, so “una camisa nueva” is the natural phrase.',
                    ],
                    [
                        'question' => 'A friend says “una buena idea.” What does the adjective position help tell you?',
                        'choices' => [
                            ['choice_text' => '“Buena” is placed before the noun in a common expression.”', 'is_correct' => true],
                            ['choice_text' => '“Buena” must always come before every Spanish noun.”', 'is_correct' => false],
                            ['choice_text' => '“Idea” is masculine.”', 'is_correct' => false],
                            ['choice_text' => '“Buena” is a plural form.”', 'is_correct' => false],
                        ],
                        'explanation' => 'Buena is a common adjective that can naturally appear before a noun in expressions such as “una buena idea.”',
                    ],
                    [
                        'question' => 'Which sentence uses a common pre-nominal adjective naturally?',
                        'choices' => [
                            ['choice_text' => 'Es un gran problema.', 'is_correct' => true],
                            ['choice_text' => 'Es un problema gran.', 'is_correct' => false],
                            ['choice_text' => 'Es una gran problema.', 'is_correct' => false],
                            ['choice_text' => 'Es un grande problema.', 'is_correct' => false],
                        ],
                        'explanation' => 'Gran is a common shortened form of grande before a singular noun: “un gran problema.”',
                    ],
                ],
            ],
            [
                'title' => 'Special Adjective Forms and Useful Exceptions',
                'description' => 'Learn common beginner-friendly forms such as bueno, malo, grande, and adjectives that do not change for gender.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Which phrase is correct?',
                        'choices' => [
                            ['choice_text' => 'un buen día', 'is_correct' => true],
                            ['choice_text' => 'un bueno día', 'is_correct' => false],
                            ['choice_text' => 'una buen día', 'is_correct' => false],
                            ['choice_text' => 'un buena día', 'is_correct' => false],
                        ],
                        'explanation' => 'Bueno becomes buen before a masculine singular noun: “un buen día.”',
                    ],
                    [
                        'question' => 'Which phrase is correct for “a good woman”?',
                        'choices' => [
                            ['choice_text' => 'una buena mujer', 'is_correct' => true],
                            ['choice_text' => 'una buen mujer', 'is_correct' => false],
                            ['choice_text' => 'un buena mujer', 'is_correct' => false],
                            ['choice_text' => 'una bueno mujer', 'is_correct' => false],
                        ],
                        'explanation' => 'Before a feminine singular noun, bueno uses the full feminine form buena.',
                    ],
                    [
                        'question' => 'Which phrase is correct?',
                        'choices' => [
                            ['choice_text' => 'un mal día', 'is_correct' => true],
                            ['choice_text' => 'un malo día', 'is_correct' => false],
                            ['choice_text' => 'una mal día', 'is_correct' => false],
                            ['choice_text' => 'un mala día', 'is_correct' => false],
                        ],
                        'explanation' => 'Malo becomes mal before a masculine singular noun: “un mal día.”',
                    ],
                    [
                        'question' => 'Which sentence uses grande correctly before a singular noun?',
                        'choices' => [
                            ['choice_text' => 'Es una gran ciudad.', 'is_correct' => true],
                            ['choice_text' => 'Es una grande ciudad.', 'is_correct' => false],
                            ['choice_text' => 'Es un gran ciudad.', 'is_correct' => false],
                            ['choice_text' => 'Es una grandes ciudad.', 'is_correct' => false],
                        ],
                        'explanation' => 'Grande often shortens to gran before a singular noun: “una gran ciudad.”',
                    ],
                    [
                        'question' => 'Which phrase is correct if you want to say “a large house”?',
                        'choices' => [
                            ['choice_text' => 'una casa grande', 'is_correct' => true],
                            ['choice_text' => 'una grande casa', 'is_correct' => false],
                            ['choice_text' => 'un casa grande', 'is_correct' => false],
                            ['choice_text' => 'una casa grandes', 'is_correct' => false],
                        ],
                        'explanation' => 'When grande comes after the noun in this simple description, it keeps its full form: “una casa grande.”',
                    ],
                    [
                        'question' => 'Which adjective has the same form for masculine and feminine singular nouns?',
                        'choices' => [
                            ['choice_text' => 'fácil', 'is_correct' => true],
                            ['choice_text' => 'bueno', 'is_correct' => false],
                            ['choice_text' => 'blanco', 'is_correct' => false],
                            ['choice_text' => 'pequeño', 'is_correct' => false],
                        ],
                        'explanation' => 'Fácil stays the same in singular: un ejercicio fácil and una tarea fácil.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'La tarea es fácil.', 'is_correct' => true],
                            ['choice_text' => 'La tarea es fácila.', 'is_correct' => false],
                            ['choice_text' => 'El tarea es fácil.', 'is_correct' => false],
                            ['choice_text' => 'La tareas es fácil.', 'is_correct' => false],
                        ],
                        'explanation' => 'Tarea is feminine singular, while fácil has the same form for both genders in the singular.',
                    ],
                    [
                        'question' => 'Why do we say “un buen profesor” rather than “un bueno profesor”?',
                        'choices' => [
                            ['choice_text' => 'Bueno shortens to buen before a masculine singular noun.', 'is_correct' => true],
                            ['choice_text' => 'Bueno is feminine in this phrase.', 'is_correct' => false],
                            ['choice_text' => 'Profesor is plural.', 'is_correct' => false],
                            ['choice_text' => 'Buen is the plural form of bueno.', 'is_correct' => false],
                        ],
                        'explanation' => 'Bueno commonly becomes buen when it comes before a masculine singular noun.',
                    ],
                    [
                        'question' => 'A learner wants to say “a bad idea.” Which phrase works?',
                        'choices' => [
                            ['choice_text' => 'una mala idea', 'is_correct' => true],
                            ['choice_text' => 'una mal idea', 'is_correct' => false],
                            ['choice_text' => 'un mala idea', 'is_correct' => false],
                            ['choice_text' => 'una malo idea', 'is_correct' => false],
                        ],
                        'explanation' => 'Malo changes to mala for a feminine singular noun such as idea.',
                    ],
                    [
                        'question' => 'Which sentence is natural?',
                        'choices' => [
                            ['choice_text' => 'Tenemos buenos amigos.', 'is_correct' => true],
                            ['choice_text' => 'Tenemos buen amigos.', 'is_correct' => false],
                            ['choice_text' => 'Tenemos buenas amigos.', 'is_correct' => false],
                            ['choice_text' => 'Tenemos bueno amigos.', 'is_correct' => false],
                        ],
                        'explanation' => 'Before a masculine plural noun, bueno keeps its plural form buenos.',
                    ],
                    [
                        'question' => 'Which phrase is correct for “good friends” when the group is all women?',
                        'choices' => [
                            ['choice_text' => 'buenas amigas', 'is_correct' => true],
                            ['choice_text' => 'buen amigas', 'is_correct' => false],
                            ['choice_text' => 'buenos amigas', 'is_correct' => false],
                            ['choice_text' => 'bueno amigas', 'is_correct' => false],
                        ],
                        'explanation' => 'Amigas is feminine plural, so bueno becomes buenas.',
                    ],
                    [
                        'question' => 'Which pair correctly shows the difference between “great” before a noun and the full adjective after it?',
                        'choices' => [
                            ['choice_text' => 'un gran libro / un libro grande\'', 'is_correct' => true],
                            ['choice_text' => 'un grande libro / un libro gran\'', 'is_correct' => false],
                            ['choice_text' => 'una gran libro / una libro grande\'', 'is_correct' => false],
                            ['choice_text' => 'un gran libro / una libro grande\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Grande can shorten to gran before a singular noun, while after the noun it remains grande.',
                    ],
                    [
                        'question' => 'Which sentence uses a gender-invariant adjective correctly?',
                        'choices' => [
                            ['choice_text' => 'El examen es difícil y la tarea también es difícil.', 'is_correct' => true],
                            ['choice_text' => 'El examen es difícila y la tarea también es difícil.', 'is_correct' => false],
                            ['choice_text' => 'El examen es difícil y la tarea también es difícila.', 'is_correct' => false],
                            ['choice_text' => 'El examen es difíciles y la tarea también es difícil.', 'is_correct' => false],
                        ],
                        'explanation' => 'Difícil keeps the same singular form for masculine and feminine nouns.',
                    ],
                    [
                        'question' => 'Which option shows correct adjective agreement after a noun becomes plural?',
                        'choices' => [
                            ['choice_text' => 'una buena idea → unas buenas ideas\'', 'is_correct' => true],
                            ['choice_text' => 'una buena idea → unas bueno ideas\'', 'is_correct' => false],
                            ['choice_text' => 'una buena idea → unos buenas ideas\'', 'is_correct' => false],
                            ['choice_text' => 'una buena idea → unas buena idea\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Both the noun and the adjective change to feminine plural: buena → buenas and idea → ideas.',
                    ],
                    [
                        'question' => 'A beginner sees “un gran restaurante.” What should they understand?',
                        'choices' => [
                            ['choice_text' => 'Gran is a shortened form of grande used before this singular noun.', 'is_correct' => true],
                            ['choice_text' => 'Gran means the restaurant is plural.', 'is_correct' => false],
                            ['choice_text' => 'Gran is the feminine form of grande.', 'is_correct' => false],
                            ['choice_text' => 'Restaurante is feminine because gran ends in a consonant.', 'is_correct' => false],
                        ],
                        'explanation' => 'Before a singular noun, grande commonly shortens to gran in this position.',
                    ],
                ],
            ],
            [
                'title' => 'Describing People, Places, and Things',
                'description' => 'Use adjective agreement in short real-life descriptions involving people, homes, weather, food, shops, and everyday objects.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Your friend Marta is very organized. Which sentence fits?',
                        'choices' => [
                            ['choice_text' => 'Marta es muy organizada.', 'is_correct' => true],
                            ['choice_text' => 'Marta es muy organizado.', 'is_correct' => false],
                            ['choice_text' => 'Marta son muy organizada.', 'is_correct' => false],
                            ['choice_text' => 'Marta es muy organizadas.', 'is_correct' => false],
                        ],
                        'explanation' => 'Marta is feminine singular, so organizada is the correct form.',
                    ],
                    [
                        'question' => 'A family has two quiet children. Which phrase is correct?',
                        'choices' => [
                            ['choice_text' => 'dos niños tranquilos', 'is_correct' => true],
                            ['choice_text' => 'dos niños tranquila', 'is_correct' => false],
                            ['choice_text' => 'dos niñas tranquilos', 'is_correct' => false],
                            ['choice_text' => 'dos niño tranquilos', 'is_correct' => false],
                        ],
                        'explanation' => 'Niños is masculine plural, so tranquilos agrees with it.',
                    ],
                    [
                        'question' => 'Which sentence correctly describes a warm afternoon?',
                        'choices' => [
                            ['choice_text' => 'La tarde es cálida.', 'is_correct' => true],
                            ['choice_text' => 'La tarde es cálido.', 'is_correct' => false],
                            ['choice_text' => 'El tarde es cálida.', 'is_correct' => false],
                            ['choice_text' => 'La tarde son cálida.', 'is_correct' => false],
                        ],
                        'explanation' => 'Tarde is feminine singular, so cálida agrees with it.',
                    ],
                    [
                        'question' => 'Which phrase would you use for two expensive restaurants?',
                        'choices' => [
                            ['choice_text' => 'dos restaurantes caros', 'is_correct' => true],
                            ['choice_text' => 'dos restaurantes caras', 'is_correct' => false],
                            ['choice_text' => 'dos restaurante caros', 'is_correct' => false],
                            ['choice_text' => 'dos restaurantes caro', 'is_correct' => false],
                        ],
                        'explanation' => 'Restaurantes is masculine plural, so caro becomes caros.',
                    ],
                    [
                        'question' => 'A teacher describes a book as very interesting. Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'El libro es muy interesante.', 'is_correct' => true],
                            ['choice_text' => 'El libro es muy interesanta.', 'is_correct' => false],
                            ['choice_text' => 'La libro es muy interesante.', 'is_correct' => false],
                            ['choice_text' => 'El libro son muy interesante.', 'is_correct' => false],
                        ],
                        'explanation' => 'Interesante keeps the same singular form for masculine and feminine nouns.',
                    ],
                    [
                        'question' => 'Which option describes a clean kitchen and a clean bathroom?',
                        'choices' => [
                            ['choice_text' => 'una cocina limpia y un baño limpio', 'is_correct' => true],
                            ['choice_text' => 'una cocina limpio y un baño limpia', 'is_correct' => false],
                            ['choice_text' => 'un cocina limpia y una baño limpio', 'is_correct' => false],
                            ['choice_text' => 'una cocina limpias y un baño limpios', 'is_correct' => false],
                        ],
                        'explanation' => 'Cocina is feminine and baño is masculine, so limpia and limpio match their nouns.',
                    ],
                    [
                        'question' => 'You are describing a beach with white sand. Which phrase is correct?',
                        'choices' => [
                            ['choice_text' => 'una playa de arena blanca', 'is_correct' => true],
                            ['choice_text' => 'una playa de arena blanco', 'is_correct' => false],
                            ['choice_text' => 'un playa de arena blanca', 'is_correct' => false],
                            ['choice_text' => 'una playa de arena blancas', 'is_correct' => false],
                        ],
                        'explanation' => 'Arena is feminine singular, so blanca agrees with it.',
                    ],
                    [
                        'question' => 'Which sentence correctly describes two small yellow houses?',
                        'choices' => [
                            ['choice_text' => 'dos casas pequeñas y amarillas', 'is_correct' => true],
                            ['choice_text' => 'dos casas pequeños y amarillos', 'is_correct' => false],
                            ['choice_text' => 'dos casa pequeñas y amarillas', 'is_correct' => false],
                            ['choice_text' => 'dos casas pequeña y amarilla', 'is_correct' => false],
                        ],
                        'explanation' => 'Casas is feminine plural, so both adjectives must be feminine plural: pequeñas and amarillas.',
                    ],
                    [
                        'question' => 'Which sentence is correct about a restaurant that is busy?',
                        'choices' => [
                            ['choice_text' => 'El restaurante está lleno.', 'is_correct' => true],
                            ['choice_text' => 'La restaurante está llena.', 'is_correct' => false],
                            ['choice_text' => 'El restaurante están lleno.', 'is_correct' => false],
                            ['choice_text' => 'El restaurante está llena.', 'is_correct' => false],
                        ],
                        'explanation' => 'Restaurante is masculine singular, so lleno agrees with it.',
                    ],
                    [
                        'question' => 'A student describes her two sisters as intelligent. Which sentence works?',
                        'choices' => [
                            ['choice_text' => 'Mis hermanas son inteligentes.', 'is_correct' => true],
                            ['choice_text' => 'Mis hermanas son inteligentas.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermanas son inteligentes.', 'is_correct' => false],
                            ['choice_text' => 'Mis hermanas es inteligentes.', 'is_correct' => false],
                        ],
                        'explanation' => 'Inteligente keeps the same masculine/feminine form, but it becomes plural: inteligentes.',
                    ],
                    [
                        'question' => 'Which phrase correctly describes one fresh apple and two fresh oranges?',
                        'choices' => [
                            ['choice_text' => 'una manzana fresca y dos naranjas frescas', 'is_correct' => true],
                            ['choice_text' => 'una manzana fresco y dos naranjas frescas', 'is_correct' => false],
                            ['choice_text' => 'un manzana fresca y dos naranja frescas', 'is_correct' => false],
                            ['choice_text' => 'una manzana fresca y dos naranjas fresco', 'is_correct' => false],
                        ],
                        'explanation' => 'Both nouns are feminine; fresca becomes plural for naranjas: frescas.',
                    ],
                    [
                        'question' => 'Which description would you use for a long street?',
                        'choices' => [
                            ['choice_text' => 'una calle larga', 'is_correct' => true],
                            ['choice_text' => 'una calle largo', 'is_correct' => false],
                            ['choice_text' => 'un calle larga', 'is_correct' => false],
                            ['choice_text' => 'una calles largas', 'is_correct' => false],
                        ],
                        'explanation' => 'Calle is feminine singular, so larga is the correct agreeing form.',
                    ],
                    [
                        'question' => 'A manager describes two new employees, a man and a woman. Which mixed-gender phrase is natural?',
                        'choices' => [
                            ['choice_text' => 'dos empleados nuevos\'', 'is_correct' => true],
                            ['choice_text' => 'dos empleados nuevas\'', 'is_correct' => false],
                            ['choice_text' => 'dos empleadas nuevos\'', 'is_correct' => false],
                            ['choice_text' => 'dos empleado nueva\'', 'is_correct' => false],
                        ],
                        'explanation' => 'For a mixed-gender group, the traditional plural form uses the masculine plural noun and adjective: empleados nuevos.',
                    ],
                ],
            ],
            [
                'title' => 'Adjective Review and Real-Life Choices',
                'description' => 'Bring together agreement, position, common adjective forms, and practical descriptions in one beginner-friendly review.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'You are choosing between two shirts: one white and one black. Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Tengo una camisa blanca y una camisa negra.', 'is_correct' => true],
                            ['choice_text' => 'Tengo un camisa blanco y una camisa negra.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una camisa blanco y una camisa negro.', 'is_correct' => false],
                            ['choice_text' => 'Tengo unas camisa blancas y una camisa negra.', 'is_correct' => false],
                        ],
                        'explanation' => 'Camisa is feminine singular in both phrases, so blanca and negra agree with it.',
                    ],
                    [
                        'question' => 'Which sentence would you use about two happy children?',
                        'choices' => [
                            ['choice_text' => 'Los niños están contentos.', 'is_correct' => true],
                            ['choice_text' => 'Los niños están contentas.', 'is_correct' => false],
                            ['choice_text' => 'Las niños están contentos.', 'is_correct' => false],
                            ['choice_text' => 'Los niño están contentos.', 'is_correct' => false],
                        ],
                        'explanation' => 'Niños is masculine plural, so contentos is the matching adjective form.',
                    ],
                    [
                        'question' => 'Which phrase is correct for “an easy question”?',
                        'choices' => [
                            ['choice_text' => 'una pregunta fácil', 'is_correct' => true],
                            ['choice_text' => 'una pregunta fácila', 'is_correct' => false],
                            ['choice_text' => 'un pregunta fácil', 'is_correct' => false],
                            ['choice_text' => 'una preguntas fáciles', 'is_correct' => false],
                        ],
                        'explanation' => 'Pregunta is feminine singular, while fácil keeps the same singular form for both genders.',
                    ],
                    [
                        'question' => 'A waiter says there are two hot soups. Which phrase is correct?',
                        'choices' => [
                            ['choice_text' => 'dos sopas calientes', 'is_correct' => true],
                            ['choice_text' => 'dos sopas caliente', 'is_correct' => false],
                            ['choice_text' => 'dos sopa calientes', 'is_correct' => false],
                            ['choice_text' => 'dos sopas calienteses', 'is_correct' => false],
                        ],
                        'explanation' => 'Sopas is feminine plural, so caliente becomes calientes.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses a shortened adjective before a noun?',
                        'choices' => [
                            ['choice_text' => 'Mi hermano es un buen estudiante.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermano es un bueno estudiante.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano es una buen estudiante.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano es un buena estudiante.', 'is_correct' => false],
                        ],
                        'explanation' => 'Bueno becomes buen before a masculine singular noun such as estudiante in this phrase.',
                    ],
                    [
                        'question' => 'Which sentence uses adjective position in a common expression?',
                        'choices' => [
                            ['choice_text' => 'Tuvimos una buena comida.', 'is_correct' => true],
                            ['choice_text' => 'Tuvimos una comida buena only.', 'is_correct' => false],
                            ['choice_text' => 'Tuvimos un buena comida.', 'is_correct' => false],
                            ['choice_text' => 'Tuvimos una bueno comida.', 'is_correct' => false],
                        ],
                        'explanation' => 'Buena is commonly placed before the noun in expressions such as “una buena comida.”',
                    ],
                    [
                        'question' => 'A student needs to describe a large park. Which phrase is correct?',
                        'choices' => [
                            ['choice_text' => 'un parque grande', 'is_correct' => true],
                            ['choice_text' => 'una parque grande', 'is_correct' => false],
                            ['choice_text' => 'un parque grandes', 'is_correct' => false],
                            ['choice_text' => 'un parque granda', 'is_correct' => false],
                        ],
                        'explanation' => 'Parque is masculine singular, and grande remains grande after the noun.',
                    ],
                    [
                        'question' => 'Which option correctly describes three interesting books?',
                        'choices' => [
                            ['choice_text' => 'tres libros interesantes', 'is_correct' => true],
                            ['choice_text' => 'tres libros interesante', 'is_correct' => false],
                            ['choice_text' => 'tres libro interesantes', 'is_correct' => false],
                            ['choice_text' => 'tres libras interesantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Libros is masculine plural and interesante becomes plural: interesantes.',
                    ],
                    [
                        'question' => 'Which statement is true about “feliz” and “felices”?',
                        'choices' => [
                            ['choice_text' => 'Feliz is singular; felices is plural for both genders.', 'is_correct' => true],
                            ['choice_text' => 'Feliz is masculine and felices is feminine.', 'is_correct' => false],
                            ['choice_text' => 'Feliz is feminine singular and felices is masculine plural only.', 'is_correct' => false],
                            ['choice_text' => 'Feliz and felices are different adjective meanings.', 'is_correct' => false],
                        ],
                        'explanation' => 'Feliz does not change for gender, but it takes -es in the plural: feliz → felices.',
                    ],
                    [
                        'question' => 'Which sentence correctly describes a good idea and a bad idea?',
                        'choices' => [
                            ['choice_text' => 'Es una buena idea, no una mala idea.', 'is_correct' => true],
                            ['choice_text' => 'Es un buen idea, no una mal idea.', 'is_correct' => false],
                            ['choice_text' => 'Es una bueno idea, no una malo idea.', 'is_correct' => false],
                            ['choice_text' => 'Es una buenas idea, no una malas idea.', 'is_correct' => false],
                        ],
                        'explanation' => 'Idea is feminine singular, so bueno and malo become buena and mala.',
                    ],
                    [
                        'question' => 'A family has a new house, a new car, and new bicycles. Which phrase keeps the agreement consistent?',
                        'choices' => [
                            ['choice_text' => 'una casa nueva, un coche nuevo y unas bicicletas nuevas', 'is_correct' => true],
                            ['choice_text' => 'una casa nuevo, un coche nueva y unas bicicletas nuevo', 'is_correct' => false],
                            ['choice_text' => 'un casa nueva, un coche nuevo y unas bicicletas nuevas', 'is_correct' => false],
                            ['choice_text' => 'una casa nuevas, un coche nuevos y unas bicicletas nueva', 'is_correct' => false],
                        ],
                        'explanation' => 'Nueva matches feminine singular casa, nuevo matches masculine singular coche, and nuevas matches feminine plural bicicletas.',
                    ],
                    [
                        'question' => 'Which choice best explains why “dos mujeres inteligentes” is correct?',
                        'choices' => [
                            ['choice_text' => 'Mujeres is feminine plural, and inteligentes is a plural adjective that does not change for gender.', 'is_correct' => true],
                            ['choice_text' => 'Inteligentes is masculine plural only.', 'is_correct' => false],
                            ['choice_text' => 'Mujeres is masculine plural.', 'is_correct' => false],
                            ['choice_text' => 'The adjective is unrelated to the noun.', 'is_correct' => false],
                        ],
                        'explanation' => 'Inteligente has one gender-neutral form but changes for number, so plural mujeres takes inteligentes.',
                    ],
                ],
            ],
        ];

        $questionCounts = [12, 10, 11, 10, 12, 11, 12];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizData['settings'];
            $questions = array_slice($quizData['questions'], 0, $questionCounts[$quizIndex]);

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
                    'total_marks' => count($questions),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
                ]
            );

            foreach ($questions as $index => $questionData) {
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
