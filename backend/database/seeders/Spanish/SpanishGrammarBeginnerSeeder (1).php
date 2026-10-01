<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishGrammarBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'spanish-grammar')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Nouns and Gender in Spanish',
                'description' => 'Practice identifying noun gender and number, spotting common gender patterns, and handling everyday nouns naturally.',
                'questions' => [
                    [
                        'question' => 'Lucía buys a new ___ for school. Which noun completes the sentence naturally?',
                        'choices' => [
                            ['choice_text' => 'cuaderno', 'is_correct' => true],
                            ['choice_text' => 'cuaderna', 'is_correct' => false],
                            ['choice_text' => 'cuadernó', 'is_correct' => false],
                            ['choice_text' => 'cuadernos', 'is_correct' => false],
                        ],
                        'explanation' => '\'Cuaderno\' is a masculine singular noun, so it fits after \'un\' or \'el\'.',
                    ],
                    [
                        'question' => 'Which article correctly goes with \'mesa\'?',
                        'choices' => [
                            ['choice_text' => 'el', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => true],
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'un', 'is_correct' => false],
                        ],
                        'explanation' => '\'Mesa\' is feminine singular, so the definite article is \'la\'.',
                    ],
                    [
                        'question' => 'You see the word \'libros\'. What tells you that it is plural?',
                        'choices' => [
                            ['choice_text' => 'The first letter', 'is_correct' => false],
                            ['choice_text' => 'The ending -os', 'is_correct' => true],
                            ['choice_text' => 'The accent mark', 'is_correct' => false],
                            ['choice_text' => 'The word has two syllables', 'is_correct' => false],
                        ],
                        'explanation' => 'The ending \'-os\' is a common masculine plural ending in Spanish.',
                    ],
                    [
                        'question' => 'Choose the natural phrase for \'a female teacher\'.',
                        'choices' => [
                            ['choice_text' => 'un profesor', 'is_correct' => false],
                            ['choice_text' => 'una profesora', 'is_correct' => true],
                            ['choice_text' => 'un profesora', 'is_correct' => false],
                            ['choice_text' => 'una profesor', 'is_correct' => false],
                        ],
                        'explanation' => '\'Profesora\' is the feminine form of \'profesor\', so it takes \'una\'.',
                    ],
                    [
                        'question' => 'Which noun is usually feminine?',
                        'choices' => [
                            ['choice_text' => 'mapa', 'is_correct' => false],
                            ['choice_text' => 'día', 'is_correct' => false],
                            ['choice_text' => 'problema', 'is_correct' => false],
                            ['choice_text' => 'noche', 'is_correct' => true],
                        ],
                        'explanation' => '\'Noche\' is a feminine noun and is normally used with \'la\' or \'una\'.',
                    ],
                    [
                        'question' => 'A learner writes \'la problema\'. What is the correction?',
                        'choices' => [
                            ['choice_text' => 'el problema', 'is_correct' => true],
                            ['choice_text' => 'los problema', 'is_correct' => false],
                            ['choice_text' => 'una problema', 'is_correct' => false],
                            ['choice_text' => 'la problemas', 'is_correct' => false],
                        ],
                        'explanation' => '\'Problema\' is masculine despite ending in \'-a\', so the correct phrase is \'el problema\'.',
                    ],
                    [
                        'question' => 'Which pair changes from singular to plural correctly?',
                        'choices' => [
                            ['choice_text' => 'la flor → las flores', 'is_correct' => true],
                            ['choice_text' => 'el papel → los papela', 'is_correct' => false],
                            ['choice_text' => 'la ciudad → las ciudads', 'is_correct' => false],
                            ['choice_text' => 'el árbol → el árboles', 'is_correct' => false],
                        ],
                        'explanation' => '\'Flor\' becomes \'flores\' in the plural, and the feminine article changes from \'la\' to \'las\'.',
                    ],
                    [
                        'question' => 'In the sentence \'Los estudiantes llegan temprano\', why is \'los\' used?',
                        'choices' => [
                            ['choice_text' => 'Because \'estudiantes\' is always masculine', 'is_correct' => false],
                            ['choice_text' => 'Because the group is plural and the noun is treated as masculine here', 'is_correct' => true],
                            ['choice_text' => 'Because Spanish uses \'los\' before every person', 'is_correct' => false],
                            ['choice_text' => 'Because \'estudiantes\' is singular', 'is_correct' => false],
                        ],
                        'explanation' => '\'Estudiantes\' is plural here, and this mixed or male group is referred to with masculine plural agreement: \'los estudiantes\'.',
                    ],
                    [
                        'question' => 'Which word is the odd one out because its gender does not follow the common -o pattern?',
                        'choices' => [
                            ['choice_text' => 'casa', 'is_correct' => true],
                            ['choice_text' => 'niño', 'is_correct' => false],
                            ['choice_text' => 'libro', 'is_correct' => false],
                            ['choice_text' => 'zapato', 'is_correct' => false],
                        ],
                        'explanation' => '\'Casa\' is feminine even though it does not follow the common masculine \'-o\' pattern.',
                    ],
                    [
                        'question' => 'A hotel worker says, \'Tenemos dos ___ libres.\' Which noun fits if he means rooms?',
                        'choices' => [
                            ['choice_text' => 'habitaciones', 'is_correct' => true],
                            ['choice_text' => 'habitacionas', 'is_correct' => false],
                            ['choice_text' => 'habitaciónes', 'is_correct' => false],
                            ['choice_text' => 'habitació', 'is_correct' => false],
                        ],
                        'explanation' => '\'Habitación\' is feminine and its plural is \'habitaciones\', so \'dos habitaciones\' is correct.',
                    ],
                    [
                        'question' => 'Which sentence has correct gender agreement?',
                        'choices' => [
                            ['choice_text' => 'La chico es simpática.', 'is_correct' => false],
                            ['choice_text' => 'El chica es simpático.', 'is_correct' => false],
                            ['choice_text' => 'La chica es simpática.', 'is_correct' => true],
                            ['choice_text' => 'El chica es simpática.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Chica\' is feminine, so both the article and adjective agree: \'la chica simpática\'.',
                    ],
                    [
                        'question' => 'Which noun normally keeps the same form for male and female people, with the article showing the difference?',
                        'choices' => [
                            ['choice_text' => 'estudiante', 'is_correct' => true],
                            ['choice_text' => 'actor', 'is_correct' => false],
                            ['choice_text' => 'niño', 'is_correct' => false],
                            ['choice_text' => 'profesor', 'is_correct' => false],
                        ],
                        'explanation' => '\'Estudiante\' can refer to a man or woman; the article can show gender: \'el estudiante\' / \'la estudiante\'.',
                    ],
                    [
                        'question' => 'Pedro has one sister and two brothers. Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Tengo una hermana y dos hermano.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una hermana y dos hermanos.', 'is_correct' => true],
                            ['choice_text' => 'Tengo un hermana y dos hermanos.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una hermanas y dos hermanos.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Hermana\' is feminine singular and \'hermanos\' is masculine plural for the two brothers.',
                    ],
                ],
            ],
            [
                'title' => 'Articles and Determiners',
                'description' => 'Work with definite and indefinite articles, plural forms, and common article choices in everyday Spanish sentences.',
                'questions' => [
                    [
                        'question' => 'Which article completes \'___ manzana está sobre la mesa\'?',
                        'choices' => [
                            ['choice_text' => 'El', 'is_correct' => false],
                            ['choice_text' => 'La', 'is_correct' => true],
                            ['choice_text' => 'Los', 'is_correct' => false],
                            ['choice_text' => 'Un', 'is_correct' => false],
                        ],
                        'explanation' => '\'Manzana\' is feminine singular, so the definite article is \'la\'.',
                    ],
                    [
                        'question' => 'Choose the correct indefinite phrase for \'some books\'.',
                        'choices' => [
                            ['choice_text' => 'unos libros', 'is_correct' => true],
                            ['choice_text' => 'unas libros', 'is_correct' => false],
                            ['choice_text' => 'un libros', 'is_correct' => false],
                            ['choice_text' => 'unos libro', 'is_correct' => false],
                        ],
                        'explanation' => '\'Libros\' is masculine plural, so \'unos libros\' is the matching indefinite phrase.',
                    ],
                    [
                        'question' => 'Marta has one dog that she has already mentioned. Which sentence is natural?',
                        'choices' => [
                            ['choice_text' => 'Tengo un perro. El perro duerme mucho.', 'is_correct' => true],
                            ['choice_text' => 'Tengo un perro. La perro duerme mucho.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una perro. El perro duerme mucho.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un perro. Un perro duerme mucho.', 'is_correct' => false],
                        ],
                        'explanation' => 'After introducing a specific dog with \'un perro\', Spanish normally uses \'el perro\' when referring back to that same dog.',
                    ],
                    [
                        'question' => 'Which pair is correct?',
                        'choices' => [
                            ['choice_text' => 'una árboles', 'is_correct' => false],
                            ['choice_text' => 'un árbol', 'is_correct' => true],
                            ['choice_text' => 'unos árbol', 'is_correct' => false],
                            ['choice_text' => 'una árbol', 'is_correct' => false],
                        ],
                        'explanation' => '\'Árbol\' is masculine singular, so the correct indefinite phrase is \'un árbol\'.',
                    ],
                    [
                        'question' => 'You are speaking generally about books, not one specific set. Which phrase works?',
                        'choices' => [
                            ['choice_text' => 'los libros', 'is_correct' => true],
                            ['choice_text' => 'un libros', 'is_correct' => false],
                            ['choice_text' => 'los libro', 'is_correct' => false],
                            ['choice_text' => 'una libros', 'is_correct' => false],
                        ],
                        'explanation' => 'Spanish commonly uses the plural definite article when making a general statement about a category: \'Los libros pueden ser muy útiles.\'',
                    ],
                    [
                        'question' => 'Which sentence uses an indefinite article correctly?',
                        'choices' => [
                            ['choice_text' => 'Hay una estudiantes en clase.', 'is_correct' => false],
                            ['choice_text' => 'Hay unos estudiante en clase.', 'is_correct' => false],
                            ['choice_text' => 'Hay una estudiante en clase.', 'is_correct' => true],
                            ['choice_text' => 'Hay un estudiantes en clase.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Estudiante\' is singular here, so \'una estudiante\' is correct for a female student.',
                    ],
                    [
                        'question' => 'A friend says \'Necesito ___ mapa\'. Which option is grammatically correct?',
                        'choices' => [
                            ['choice_text' => 'una', 'is_correct' => false],
                            ['choice_text' => 'un', 'is_correct' => true],
                            ['choice_text' => 'unos', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                        ],
                        'explanation' => '\'Mapa\' is a masculine noun, so it takes \'un\' in the singular indefinite form.',
                    ],
                    [
                        'question' => 'Which sentence has correct article and noun agreement?',
                        'choices' => [
                            ['choice_text' => 'Las problema son difíciles.', 'is_correct' => false],
                            ['choice_text' => 'Los problemas son difíciles.', 'is_correct' => true],
                            ['choice_text' => 'Los problemas es difícil.', 'is_correct' => false],
                            ['choice_text' => 'La problemas son difíciles.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Problemas\' is masculine plural, so \'los problemas\' is the correct noun phrase.',
                    ],
                    [
                        'question' => 'You want to say \'an idea\' in Spanish. Which phrase is correct?',
                        'choices' => [
                            ['choice_text' => 'un idea', 'is_correct' => false],
                            ['choice_text' => 'una idea', 'is_correct' => true],
                            ['choice_text' => 'unos idea', 'is_correct' => false],
                            ['choice_text' => 'una ideas', 'is_correct' => false],
                        ],
                        'explanation' => '\'Idea\' is feminine singular, so the correct phrase is \'una idea\'.',
                    ],
                    [
                        'question' => 'Which sentence correctly changes a singular noun phrase to plural?',
                        'choices' => [
                            ['choice_text' => 'la ventana → las ventanas', 'is_correct' => true],
                            ['choice_text' => 'el silla → los sillas', 'is_correct' => false],
                            ['choice_text' => 'un libro → unas libros', 'is_correct' => false],
                            ['choice_text' => 'una coche → unos coche', 'is_correct' => false],
                        ],
                        'explanation' => '\'La ventana\' becomes \'las ventanas\': both the article and noun become feminine plural.',
                    ],
                    [
                        'question' => 'Which sentence is natural when referring to several specific students in a class?',
                        'choices' => [
                            ['choice_text' => 'Las estudiantes están aquí.', 'is_correct' => true],
                            ['choice_text' => 'La estudiantes están aquí.', 'is_correct' => false],
                            ['choice_text' => 'Los estudiante están aquí.', 'is_correct' => false],
                            ['choice_text' => 'Una estudiantes están aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Estudiantes\' is plural, and for the all-female group \'las estudiantes\' is correct.',
                    ],
                ],
            ],
            [
                'title' => 'Adjective Agreement and Placement',
                'description' => 'Practice matching adjectives with nouns in gender and number, and recognize common adjective positions in simple sentences.',
                'questions' => [
                    [
                        'question' => 'Choose the correct sentence.',
                        'choices' => [
                            ['choice_text' => 'La casa es bonito.', 'is_correct' => false],
                            ['choice_text' => 'La casa es bonita.', 'is_correct' => true],
                            ['choice_text' => 'La casa son bonita.', 'is_correct' => false],
                            ['choice_text' => 'El casa es bonita.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Casa\' is feminine singular, so the adjective must be \'bonita\'.',
                    ],
                    [
                        'question' => 'Which adjective agrees with \'los zapatos\'?',
                        'choices' => [
                            ['choice_text' => 'nuevo', 'is_correct' => false],
                            ['choice_text' => 'nueva', 'is_correct' => false],
                            ['choice_text' => 'nuevos', 'is_correct' => true],
                            ['choice_text' => 'nuevas', 'is_correct' => false],
                        ],
                        'explanation' => '\'Zapatos\' is masculine plural, so \'nuevos\' agrees in gender and number.',
                    ],
                    [
                        'question' => 'Sofía has two red bags. Which phrase is correct?',
                        'choices' => [
                            ['choice_text' => 'dos bolso rojo', 'is_correct' => false],
                            ['choice_text' => 'dos bolsas rojas', 'is_correct' => true],
                            ['choice_text' => 'dos bolsas roja', 'is_correct' => false],
                            ['choice_text' => 'dos bolsos rojas', 'is_correct' => false],
                        ],
                        'explanation' => '\'Bolsas\' is feminine plural, so both \'dos bolsas\' and \'rojas\' are feminine plural.',
                    ],
                    [
                        'question' => 'What is the correct form of \'interesante\' with plural nouns?',
                        'choices' => [
                            ['choice_text' => 'interesantes', 'is_correct' => true],
                            ['choice_text' => 'interesanta', 'is_correct' => false],
                            ['choice_text' => 'interesantos', 'is_correct' => false],
                            ['choice_text' => 'interesantas', 'is_correct' => false],
                        ],
                        'explanation' => '\'Interesante\' normally keeps the same masculine/feminine form and adds \'-s\' in the plural: \'interesantes\'.',
                    ],
                    [
                        'question' => 'A teacher writes \'Las clases son fácil\'. What should be changed?',
                        'choices' => [
                            ['choice_text' => 'Las → Los', 'is_correct' => false],
                            ['choice_text' => 'clases → clase', 'is_correct' => false],
                            ['choice_text' => 'fácil → fáciles', 'is_correct' => true],
                            ['choice_text' => 'son → es', 'is_correct' => false],
                        ],
                        'explanation' => 'Because \'clases\' is plural, the adjective must also be plural: \'fáciles\'.',
                    ],
                    [
                        'question' => 'Which sentence has the adjective agreeing correctly?',
                        'choices' => [
                            ['choice_text' => 'Un libro interesante', 'is_correct' => true],
                            ['choice_text' => 'Una libro interesante', 'is_correct' => false],
                            ['choice_text' => 'Un libros interesantes', 'is_correct' => false],
                            ['choice_text' => 'Una libros interesante', 'is_correct' => false],
                        ],
                        'explanation' => '\'Libro\' is masculine singular, and \'interesante\' has the correct singular form.',
                    ],
                    [
                        'question' => 'Which phrase means \'three small houses\'?',
                        'choices' => [
                            ['choice_text' => 'tres casas pequeño', 'is_correct' => false],
                            ['choice_text' => 'tres casa pequeñas', 'is_correct' => false],
                            ['choice_text' => 'tres casas pequeñas', 'is_correct' => true],
                            ['choice_text' => 'tres casas pequeños', 'is_correct' => false],
                        ],
                        'explanation' => '\'Casas\' is feminine plural, so the adjective is \'pequeñas\'.',
                    ],
                    [
                        'question' => 'Which word changes for gender in this pair?',
                        'choices' => [
                            ['choice_text' => 'grande / grande', 'is_correct' => false],
                            ['choice_text' => 'feliz / feliz', 'is_correct' => false],
                            ['choice_text' => 'alto / alta', 'is_correct' => true],
                            ['choice_text' => 'interesante / interesantes', 'is_correct' => false],
                        ],
                        'explanation' => '\'Alto\' changes to \'alta\' because it has masculine and feminine forms. The other pairs either stay the same for gender or change for number.',
                    ],
                    [
                        'question' => 'You want to describe Juan as tired. Which sentence works?',
                        'choices' => [
                            ['choice_text' => 'Juan está cansada.', 'is_correct' => false],
                            ['choice_text' => 'Juan está cansado.', 'is_correct' => true],
                            ['choice_text' => 'Juan están cansado.', 'is_correct' => false],
                            ['choice_text' => 'Juan es cansado.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Juan\' is masculine singular, so the adjective is \'cansado\'.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Las flores amarillos son bonitas.', 'is_correct' => false],
                            ['choice_text' => 'Las flores amarillas son bonitas.', 'is_correct' => true],
                            ['choice_text' => 'Los flores amarillas son bonito.', 'is_correct' => false],
                            ['choice_text' => 'Las flor amarillas son bonitas.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Flores\' is feminine plural, so both \'amarillas\' and \'bonitas\' agree with it.',
                    ],
                    [
                        'question' => 'A learner says, \'Tengo una camisa blanco.\' What is the natural correction?',
                        'choices' => [
                            ['choice_text' => 'Tengo una camisa blanca.', 'is_correct' => true],
                            ['choice_text' => 'Tengo un camisa blanco.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una camisas blancas.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un camisa blanca.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Camisa\' is feminine singular, so the adjective must be \'blanca\'.',
                    ],
                    [
                        'question' => 'Which adjective is normally invariable for gender?',
                        'choices' => [
                            ['choice_text' => 'español', 'is_correct' => false],
                            ['choice_text' => 'trabajador', 'is_correct' => false],
                            ['choice_text' => 'joven', 'is_correct' => true],
                            ['choice_text' => 'alto', 'is_correct' => false],
                        ],
                        'explanation' => '\'Joven\' has the same form for masculine and feminine; only the plural changes to \'jóvenes\'.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses a plural adjective?',
                        'choices' => [
                            ['choice_text' => 'Mis amigos son simpática.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos son simpáticos.', 'is_correct' => true],
                            ['choice_text' => 'Mi amigos son simpáticos.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigo son simpático.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Amigos\' is masculine plural, so \'simpáticos\' is the matching adjective.',
                    ],
                    [
                        'question' => 'Which phrase is grammatically correct?',
                        'choices' => [
                            ['choice_text' => 'una película largos', 'is_correct' => false],
                            ['choice_text' => 'una película larga', 'is_correct' => true],
                            ['choice_text' => 'un película larga', 'is_correct' => false],
                            ['choice_text' => 'una películas larga', 'is_correct' => false],
                        ],
                        'explanation' => '\'Película\' is feminine singular, so \'larga\' is required.',
                    ],
                    [
                        'question' => 'In \'unas casas blancas\', what does \'blancas\' tell you?',
                        'choices' => [
                            ['choice_text' => 'The houses are singular', 'is_correct' => false],
                            ['choice_text' => 'The houses are masculine', 'is_correct' => false],
                            ['choice_text' => 'The adjective agrees with feminine plural \'casas\'', 'is_correct' => true],
                            ['choice_text' => 'The adjective is being used as a noun', 'is_correct' => false],
                        ],
                        'explanation' => '\'Blancas\' is the feminine plural form of \'blanco\', matching \'casas\'.',
                    ],
                ],
            ],
            [
                'title' => 'Pronouns for Everyday Sentences',
                'description' => 'Use subject pronouns, basic object pronouns, possessive forms, and pronoun choices that beginners meet in everyday Spanish.',
                'questions' => [
                    [
                        'question' => 'Which subject pronoun means \'I\'?',
                        'choices' => [
                            ['choice_text' => 'tú', 'is_correct' => false],
                            ['choice_text' => 'yo', 'is_correct' => true],
                            ['choice_text' => 'él', 'is_correct' => false],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                        ],
                        'explanation' => '\'Yo\' is the Spanish subject pronoun for \'I\'.',
                    ],
                    [
                        'question' => 'Marta and Luis are waiting. Which pronoun can replace their names?',
                        'choices' => [
                            ['choice_text' => 'él', 'is_correct' => false],
                            ['choice_text' => 'ella', 'is_correct' => false],
                            ['choice_text' => 'ellos', 'is_correct' => true],
                            ['choice_text' => 'nosotras', 'is_correct' => false],
                        ],
                        'explanation' => 'For Marta and Luis together, the masculine plural subject pronoun \'ellos\' is used.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Yo vive en Madrid.', 'is_correct' => false],
                            ['choice_text' => 'Yo vivo en Madrid.', 'is_correct' => true],
                            ['choice_text' => 'Yo vives en Madrid.', 'is_correct' => false],
                            ['choice_text' => 'Yo viven en Madrid.', 'is_correct' => false],
                        ],
                        'explanation' => 'The present-tense form of \'vivir\' with \'yo\' is \'vivo\'.',
                    ],
                    [
                        'question' => 'Which pronoun would you use for a group of only women speaking about themselves?',
                        'choices' => [
                            ['choice_text' => 'nosotros', 'is_correct' => false],
                            ['choice_text' => 'nosotras', 'is_correct' => true],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'ellas', 'is_correct' => false],
                        ],
                        'explanation' => '\'Nosotras\' is the feminine plural form of \'we\'.',
                    ],
                    [
                        'question' => 'Choose the natural sentence.',
                        'choices' => [
                            ['choice_text' => 'Ella estudia medicina.', 'is_correct' => true],
                            ['choice_text' => 'Ella estudio medicina.', 'is_correct' => false],
                            ['choice_text' => 'Ella estudias medicina.', 'is_correct' => false],
                            ['choice_text' => 'Ella estudiar medicina.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Ella\' takes the third-person singular present form \'estudia\'.',
                    ],
                    [
                        'question' => 'You are speaking directly to one friend. Which subject pronoun is the familiar form for \'you\' in most Spanish-speaking contexts?',
                        'choices' => [
                            ['choice_text' => 'tú', 'is_correct' => true],
                            ['choice_text' => 'usted', 'is_correct' => false],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'nosotros', 'is_correct' => false],
                        ],
                        'explanation' => '\'Tú\' is the familiar singular \'you\'; \'usted\' is a formal singular form.',
                    ],
                    [
                        'question' => 'Which possessive phrase means \'my books\'?',
                        'choices' => [
                            ['choice_text' => 'mi libros', 'is_correct' => false],
                            ['choice_text' => 'mis libros', 'is_correct' => true],
                            ['choice_text' => 'míos libro', 'is_correct' => false],
                            ['choice_text' => 'mí libros', 'is_correct' => false],
                        ],
                        'explanation' => 'The plural noun \'libros\' takes the plural possessive \'mis\'.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses \'nuestro\'?',
                        'choices' => [
                            ['choice_text' => 'Nuestro casa es grande.', 'is_correct' => false],
                            ['choice_text' => 'Nuestra casa es grande.', 'is_correct' => true],
                            ['choice_text' => 'Nuestros casa es grande.', 'is_correct' => false],
                            ['choice_text' => 'Nuestra casas es grande.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Casa\' is feminine singular, so the possessive must be \'nuestra\'.',
                    ],
                    [
                        'question' => 'Ana has the key. Which sentence replaces \'the key\' with a direct object pronoun?',
                        'choices' => [
                            ['choice_text' => 'Ana la tiene.', 'is_correct' => true],
                            ['choice_text' => 'Ana lo tiene.', 'is_correct' => false],
                            ['choice_text' => 'Ana las tiene.', 'is_correct' => false],
                            ['choice_text' => 'Ana le tiene.', 'is_correct' => false],
                        ],
                        'explanation' => '\'La llave\' is feminine singular, so the direct object pronoun is \'la\': \'Ana la tiene\'.',
                    ],
                    [
                        'question' => 'Which pronoun replaces \'los libros\' in \'Leo los libros\'?',
                        'choices' => [
                            ['choice_text' => 'los', 'is_correct' => true],
                            ['choice_text' => 'las', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'lo', 'is_correct' => false],
                        ],
                        'explanation' => '\'Los libros\' is masculine plural, so the direct object pronoun is \'los\'.',
                    ],
                    [
                        'question' => 'A waiter asks, \'¿Quieres agua?\' Which short answer uses a pronoun naturally?',
                        'choices' => [
                            ['choice_text' => 'Sí, la quiero.', 'is_correct' => true],
                            ['choice_text' => 'Sí, lo quiero.', 'is_correct' => false],
                            ['choice_text' => 'Sí, los quiero.', 'is_correct' => false],
                            ['choice_text' => 'Sí, le quiero.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Agua\' is treated as feminine, so the direct object pronoun is \'la\': \'Sí, la quiero\'.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses a possessive adjective?',
                        'choices' => [
                            ['choice_text' => 'Mis hermana vive aquí.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana vive aquí.', 'is_correct' => true],
                            ['choice_text' => 'Mí hermana vive aquí.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermanas vive aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Mi\' is used with a singular noun, so \'mi hermana\' is correct.',
                    ],
                    [
                        'question' => 'Which subject pronoun fits \'Carlos y yo\'?',
                        'choices' => [
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'nosotros', 'is_correct' => true],
                            ['choice_text' => 'ustedes', 'is_correct' => false],
                            ['choice_text' => 'él', 'is_correct' => false],
                        ],
                        'explanation' => '\'Carlos y yo\' means \'we\', so \'nosotros\' is the appropriate subject pronoun.',
                    ],
                ],
            ],
            [
                'title' => 'Present-Tense Verbs and Conjugation',
                'description' => 'Build confidence with regular present-tense verbs and common irregular forms through short, realistic sentences.',
                'questions' => [
                    [
                        'question' => 'Complete: \'Yo ___ español todos los días.\'',
                        'choices' => [
                            ['choice_text' => 'estudias', 'is_correct' => false],
                            ['choice_text' => 'estudio', 'is_correct' => true],
                            ['choice_text' => 'estudia', 'is_correct' => false],
                            ['choice_text' => 'estudian', 'is_correct' => false],
                        ],
                        'explanation' => 'With \'yo\', the present form of \'estudiar\' is \'estudio\'.',
                    ],
                    [
                        'question' => 'Which form of \'hablar\' completes \'Nosotros ___ en clase\'?',
                        'choices' => [
                            ['choice_text' => 'hablo', 'is_correct' => false],
                            ['choice_text' => 'hablas', 'is_correct' => false],
                            ['choice_text' => 'hablamos', 'is_correct' => true],
                            ['choice_text' => 'hablan', 'is_correct' => false],
                        ],
                        'explanation' => 'The first-person plural form of \'hablar\' is \'hablamos\'.',
                    ],
                    [
                        'question' => 'Carlos ___ café por la mañana. Choose the correct form.',
                        'choices' => [
                            ['choice_text' => 'bebo', 'is_correct' => false],
                            ['choice_text' => 'bebes', 'is_correct' => false],
                            ['choice_text' => 'bebe', 'is_correct' => true],
                            ['choice_text' => 'bebemos', 'is_correct' => false],
                        ],
                        'explanation' => '\'Carlos\' is third-person singular, so \'beber\' becomes \'bebe\'.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Ellos comen temprano.', 'is_correct' => true],
                            ['choice_text' => 'Ellos comes temprano.', 'is_correct' => false],
                            ['choice_text' => 'Ellos como temprano.', 'is_correct' => false],
                            ['choice_text' => 'Ellos comer temprano.', 'is_correct' => false],
                        ],
                        'explanation' => 'The present-tense form of \'comer\' with \'ellos\' is \'comen\'.',
                    ],
                    [
                        'question' => 'You are telling a friend about yourself: \'Yo ___ en Casablanca.\'',
                        'choices' => [
                            ['choice_text' => 'vives', 'is_correct' => false],
                            ['choice_text' => 'vivo', 'is_correct' => true],
                            ['choice_text' => 'vive', 'is_correct' => false],
                            ['choice_text' => 'vivimos', 'is_correct' => false],
                        ],
                        'explanation' => 'The \'yo\' form of \'vivir\' is \'vivo\'.',
                    ],
                    [
                        'question' => 'Which sentence uses \'tener\' correctly?',
                        'choices' => [
                            ['choice_text' => 'Yo tiene dos hermanos.', 'is_correct' => false],
                            ['choice_text' => 'Yo tengo dos hermanos.', 'is_correct' => true],
                            ['choice_text' => 'Yo tienes dos hermanos.', 'is_correct' => false],
                            ['choice_text' => 'Yo tienen dos hermanos.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Tener\' is irregular in the first person: \'yo tengo\'.',
                    ],
                    [
                        'question' => 'María and Ana ___ una película cada viernes.',
                        'choices' => [
                            ['choice_text' => 've', 'is_correct' => false],
                            ['choice_text' => 'vemos', 'is_correct' => false],
                            ['choice_text' => 'ven', 'is_correct' => true],
                            ['choice_text' => 'ves', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject is plural, so the form of \'ver\' is \'ven\'.',
                    ],
                    [
                        'question' => 'Which sentence sounds natural?',
                        'choices' => [
                            ['choice_text' => 'Tú escribes muchos correos.', 'is_correct' => true],
                            ['choice_text' => 'Tú escribo muchos correos.', 'is_correct' => false],
                            ['choice_text' => 'Tú escribe muchos correos.', 'is_correct' => false],
                            ['choice_text' => 'Tú escribir muchos correos.', 'is_correct' => false],
                        ],
                        'explanation' => 'With \'tú\', the present form of \'escribir\' is \'escribes\'.',
                    ],
                    [
                        'question' => 'A student says, \'Nosotros trabaja mucho\'. What is the correction?',
                        'choices' => [
                            ['choice_text' => 'Nosotros trabajo mucho.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros trabajas mucho.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros trabajamos mucho.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros trabajan mucho.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first-person plural form is \'trabajamos\', not \'trabaja\'.',
                    ],
                    [
                        'question' => 'Choose the correct form: \'Mis padres ___ en un hospital.\'',
                        'choices' => [
                            ['choice_text' => 'trabaja', 'is_correct' => false],
                            ['choice_text' => 'trabajan', 'is_correct' => true],
                            ['choice_text' => 'trabajamos', 'is_correct' => false],
                            ['choice_text' => 'trabajo', 'is_correct' => false],
                        ],
                        'explanation' => '\'Mis padres\' is third-person plural, so \'trabajar\' becomes \'trabajan\'.',
                    ],
                    [
                        'question' => 'Which verb form matches \'ella\' in \'Ella ___ música\'?',
                        'choices' => [
                            ['choice_text' => 'escucho', 'is_correct' => false],
                            ['choice_text' => 'escuchas', 'is_correct' => false],
                            ['choice_text' => 'escucha', 'is_correct' => true],
                            ['choice_text' => 'escuchan', 'is_correct' => false],
                        ],
                        'explanation' => '\'Ella\' takes the third-person singular form \'escucha\'.',
                    ],
                    [
                        'question' => 'Complete: \'¿Tú ___ la respuesta?\'',
                        'choices' => [
                            ['choice_text' => 'sabes', 'is_correct' => true],
                            ['choice_text' => 'sabe', 'is_correct' => false],
                            ['choice_text' => 'sé', 'is_correct' => false],
                            ['choice_text' => 'saben', 'is_correct' => false],
                        ],
                        'explanation' => 'The present form of \'saber\' with \'tú\' is \'sabes\'.',
                    ],
                    [
                        'question' => 'Which is the correct first-person form of \'hacer\'?',
                        'choices' => [
                            ['choice_text' => 'haco', 'is_correct' => false],
                            ['choice_text' => 'haces', 'is_correct' => false],
                            ['choice_text' => 'hago', 'is_correct' => true],
                            ['choice_text' => 'hace', 'is_correct' => false],
                        ],
                        'explanation' => '\'Hacer\' is irregular in the first person: \'yo hago\'.',
                    ],
                    [
                        'question' => 'Sofía ___ a la oficina a las ocho.',
                        'choices' => [
                            ['choice_text' => 'voy', 'is_correct' => false],
                            ['choice_text' => 'vas', 'is_correct' => false],
                            ['choice_text' => 'va', 'is_correct' => true],
                            ['choice_text' => 'van', 'is_correct' => false],
                        ],
                        'explanation' => '\'Sofía\' is third-person singular, so \'ir\' becomes \'va\'.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Nosotros vamos al mercado.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros van al mercado.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros vas al mercado.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros voy al mercado.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first-person plural form of \'ir\' is \'vamos\'.',
                    ],
                    [
                        'question' => 'Complete: \'Yo ___ una respuesta rápida.\'',
                        'choices' => [
                            ['choice_text' => 'dices', 'is_correct' => false],
                            ['choice_text' => 'digo', 'is_correct' => true],
                            ['choice_text' => 'dice', 'is_correct' => false],
                            ['choice_text' => 'decimos', 'is_correct' => false],
                        ],
                        'explanation' => 'The first-person singular form of \'decir\' is \'digo\'.',
                    ],
                    [
                        'question' => 'Which present-tense form belongs with \'ustedes\'?',
                        'choices' => [
                            ['choice_text' => 'hablas', 'is_correct' => false],
                            ['choice_text' => 'habla', 'is_correct' => false],
                            ['choice_text' => 'hablamos', 'is_correct' => false],
                            ['choice_text' => 'hablan', 'is_correct' => true],
                        ],
                        'explanation' => '\'Ustedes\' takes the third-person plural verb form: \'hablan\'.',
                    ],
                    [
                        'question' => 'A teacher asks, \'¿De dónde ___ ustedes?\'',
                        'choices' => [
                            ['choice_text' => 'eres', 'is_correct' => false],
                            ['choice_text' => 'son', 'is_correct' => true],
                            ['choice_text' => 'somos', 'is_correct' => false],
                            ['choice_text' => 'es', 'is_correct' => false],
                        ],
                        'explanation' => 'With \'ustedes\', the present form of \'ser\' is \'son\'.',
                    ],
                    [
                        'question' => 'Which sentence has the correct verb agreement?',
                        'choices' => [
                            ['choice_text' => 'Mi hermana estudia francés.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermana estudian francés.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana estudio francés.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana estudiar francés.', 'is_correct' => false],
                        ],
                        'explanation' => 'The singular subject \'mi hermana\' takes the third-person singular form \'estudia\'.',
                    ],
                    [
                        'question' => 'A friend says, \'Yo quiero aprender, pero no ___ tiempo.\' Which form of \'tener\' fits?',
                        'choices' => [
                            ['choice_text' => 'tengo', 'is_correct' => true],
                            ['choice_text' => 'tiene', 'is_correct' => false],
                            ['choice_text' => 'tienes', 'is_correct' => false],
                            ['choice_text' => 'tenemos', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker is \'yo\', so the correct form is \'tengo\': \'no tengo tiempo\'.',
                    ],
                ],
            ],
            [
                'title' => 'Ser, Estar and Hay',
                'description' => 'Learn to separate basic uses of ser and estar, and practice hay when talking about what exists or is present.',
                'questions' => [
                    [
                        'question' => 'Which sentence describes a basic identity or profession?',
                        'choices' => [
                            ['choice_text' => 'Ana está profesora.', 'is_correct' => false],
                            ['choice_text' => 'Ana es profesora.', 'is_correct' => true],
                            ['choice_text' => 'Ana hay profesora.', 'is_correct' => false],
                            ['choice_text' => 'Ana está ser profesora.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Ser\' is used for identity and profession: \'Ana es profesora.\'',
                    ],
                    [
                        'question' => 'Which sentence describes a current location?',
                        'choices' => [
                            ['choice_text' => 'Madrid es en España.', 'is_correct' => false],
                            ['choice_text' => 'Madrid está en España.', 'is_correct' => true],
                            ['choice_text' => 'Madrid hay en España.', 'is_correct' => false],
                            ['choice_text' => 'Madrid son en España.', 'is_correct' => false],
                        ],
                        'explanation' => 'For location, Spanish uses \'estar\': \'Madrid está en España.\'',
                    ],
                    [
                        'question' => 'There is a supermarket near my house. Which sentence is natural?',
                        'choices' => [
                            ['choice_text' => 'Está un supermercado cerca de mi casa.', 'is_correct' => false],
                            ['choice_text' => 'Hay un supermercado cerca de mi casa.', 'is_correct' => true],
                            ['choice_text' => 'Es un supermercado cerca de mi casa.', 'is_correct' => false],
                            ['choice_text' => 'Son un supermercado cerca de mi casa.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Hay\' is used to say that something exists or is present.',
                    ],
                    [
                        'question' => 'Which sentence describes a temporary condition?',
                        'choices' => [
                            ['choice_text' => 'Luis es cansado ahora.', 'is_correct' => false],
                            ['choice_text' => 'Luis está cansado ahora.', 'is_correct' => true],
                            ['choice_text' => 'Luis hay cansado ahora.', 'is_correct' => false],
                            ['choice_text' => 'Luis están cansado ahora.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Estar\' is used for a current state or condition: \'está cansado\'.',
                    ],
                    [
                        'question' => 'Choose the correct sentence.',
                        'choices' => [
                            ['choice_text' => 'Mi hermana es en casa.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana está en casa.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermana hay en casa.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana son en casa.', 'is_correct' => false],
                        ],
                        'explanation' => 'A person\'s location is expressed with \'estar\': \'está en casa\'.',
                    ],
                    [
                        'question' => 'Which option means \'There are three chairs in the room\'?',
                        'choices' => [
                            ['choice_text' => 'Hay tres sillas en la habitación.', 'is_correct' => true],
                            ['choice_text' => 'Está tres sillas en la habitación.', 'is_correct' => false],
                            ['choice_text' => 'Son tres sillas en la habitación.', 'is_correct' => false],
                            ['choice_text' => 'Es tres sillas en la habitación.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Hay\' introduces things that exist or are present; \'tres sillas\' is plural.',
                    ],
                    [
                        'question' => 'A student says, \'Mi padre está médico\'. What is the usual correction?',
                        'choices' => [
                            ['choice_text' => 'Mi padre está medicina.', 'is_correct' => false],
                            ['choice_text' => 'Mi padre es médico.', 'is_correct' => true],
                            ['choice_text' => 'Mi padre hay médico.', 'is_correct' => false],
                            ['choice_text' => 'Mi padre son médico.', 'is_correct' => false],
                        ],
                        'explanation' => 'A profession is normally expressed with \'ser\': \'Mi padre es médico\'.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Las llaves están en la mesa.', 'is_correct' => true],
                            ['choice_text' => 'Las llaves son en la mesa.', 'is_correct' => false],
                            ['choice_text' => 'Las llaves hay en la mesa.', 'is_correct' => false],
                            ['choice_text' => 'Las llaves es en la mesa.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Están\' is the third-person plural form of \'estar\' and is used for location.',
                    ],
                    [
                        'question' => 'What is the best completion: \'En mi barrio ___ muchas tiendas\'?',
                        'choices' => [
                            ['choice_text' => 'están', 'is_correct' => false],
                            ['choice_text' => 'son', 'is_correct' => false],
                            ['choice_text' => 'hay', 'is_correct' => true],
                            ['choice_text' => 'es', 'is_correct' => false],
                        ],
                        'explanation' => '\'Hay\' is used to state that many shops exist or are present in the neighborhood.',
                    ],
                    [
                        'question' => 'Which sentence describes a characteristic rather than a current location?',
                        'choices' => [
                            ['choice_text' => 'La puerta está abierta.', 'is_correct' => false],
                            ['choice_text' => 'La puerta es azul.', 'is_correct' => true],
                            ['choice_text' => 'La puerta hay aquí.', 'is_correct' => false],
                            ['choice_text' => 'La puerta están aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Es azul\' describes a characteristic of the door; \'estar\' is used in \'está abierta\' for its current state.',
                    ],
                    [
                        'question' => 'A café is open right now. Which sentence focuses on its current state?',
                        'choices' => [
                            ['choice_text' => 'El café es abierto.', 'is_correct' => false],
                            ['choice_text' => 'El café está abierto.', 'is_correct' => true],
                            ['choice_text' => 'El café hay abierto.', 'is_correct' => false],
                            ['choice_text' => 'El café son abierto.', 'is_correct' => false],
                        ],
                        'explanation' => 'A current state such as being open is expressed with \'estar\'.',
                    ],
                    [
                        'question' => 'Which sentence correctly combines existence and location?',
                        'choices' => [
                            ['choice_text' => 'Hay una farmacia, y está cerca del banco.', 'is_correct' => true],
                            ['choice_text' => 'Es una farmacia, y hay cerca del banco.', 'is_correct' => false],
                            ['choice_text' => 'Hay una farmacia, y es cerca del banco.', 'is_correct' => false],
                            ['choice_text' => 'Está una farmacia, y hay cerca del banco.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Hay una farmacia\' introduces its existence, while \'está cerca del banco\' gives its location.',
                    ],
                ],
            ],
            [
                'title' => 'Prepositions, Negation and Sentence Building',
                'description' => 'Practice useful prepositions, simple negative sentences, and word order patterns that make beginner Spanish clear and natural.',
                'questions' => [
                    [
                        'question' => 'Which preposition completes \'Vivo ___ Madrid\'?',
                        'choices' => [
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => true],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'por', 'is_correct' => false],
                        ],
                        'explanation' => 'The usual preposition for living in a city is \'en\': \'Vivo en Madrid\'.',
                    ],
                    [
                        'question' => 'Choose the natural sentence for \'I work with Ana\'.',
                        'choices' => [
                            ['choice_text' => 'Trabajo de Ana.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo con Ana.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo en Ana.', 'is_correct' => false],
                            ['choice_text' => 'Trabajo por Ana.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Con\' means \'with\', so \'Trabajo con Ana\' is correct.',
                    ],
                    [
                        'question' => 'Which sentence correctly says \'The book is on the table\'?',
                        'choices' => [
                            ['choice_text' => 'El libro está en la mesa.', 'is_correct' => true],
                            ['choice_text' => 'El libro está a la mesa.', 'is_correct' => false],
                            ['choice_text' => 'El libro está de la mesa.', 'is_correct' => false],
                            ['choice_text' => 'El libro está por la mesa.', 'is_correct' => false],
                        ],
                        'explanation' => '\'En\' is the natural preposition for location on or in a place: \'en la mesa\'.',
                    ],
                    [
                        'question' => 'A student wants to say \'I am from Spain.\' Which sentence works?',
                        'choices' => [
                            ['choice_text' => 'Soy de España.', 'is_correct' => true],
                            ['choice_text' => 'Soy en España.', 'is_correct' => false],
                            ['choice_text' => 'Estoy de España.', 'is_correct' => false],
                            ['choice_text' => 'Hay de España.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Ser de\' is used to express origin: \'Soy de España\'.',
                    ],
                    [
                        'question' => 'Which sentence is negative?',
                        'choices' => [
                            ['choice_text' => 'Yo también estudio.', 'is_correct' => false],
                            ['choice_text' => 'Yo no estudio.', 'is_correct' => true],
                            ['choice_text' => 'Yo estudio mucho.', 'is_correct' => false],
                            ['choice_text' => 'Yo estudio aquí.', 'is_correct' => false],
                        ],
                        'explanation' => 'The word \'no\' makes the statement negative: \'Yo no estudio\'.',
                    ],
                    [
                        'question' => 'Complete: \'No ___ café por la noche.\'',
                        'choices' => [
                            ['choice_text' => 'bebo', 'is_correct' => true],
                            ['choice_text' => 'bebe', 'is_correct' => false],
                            ['choice_text' => 'beber', 'is_correct' => false],
                            ['choice_text' => 'bebes', 'is_correct' => false],
                        ],
                        'explanation' => 'With the subject \'yo\', the present form is \'bebo\': \'No bebo café...\'',
                    ],
                    [
                        'question' => 'Which sentence uses \'para\' naturally?',
                        'choices' => [
                            ['choice_text' => 'Este regalo es para Marta.', 'is_correct' => true],
                            ['choice_text' => 'Este regalo es por Marta.', 'is_correct' => false],
                            ['choice_text' => 'Este regalo es de Marta para.', 'is_correct' => false],
                            ['choice_text' => 'Este regalo está para Marta.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Para\' is commonly used to show the intended recipient: \'para Marta\'.',
                    ],
                    [
                        'question' => 'Which sentence means \'We study in the library\'?',
                        'choices' => [
                            ['choice_text' => 'Estudiamos de la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Estudiamos en la biblioteca.', 'is_correct' => true],
                            ['choice_text' => 'Estudiamos por la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Estudiamos a la biblioteca.', 'is_correct' => false],
                        ],
                        'explanation' => 'The location is introduced with \'en\': \'en la biblioteca\'.',
                    ],
                    [
                        'question' => 'Which sentence has correct word order?',
                        'choices' => [
                            ['choice_text' => 'Siempre yo desayuno temprano.', 'is_correct' => false],
                            ['choice_text' => 'Yo desayuno siempre temprano.', 'is_correct' => false],
                            ['choice_text' => 'Yo siempre desayuno temprano.', 'is_correct' => true],
                            ['choice_text' => 'Desayuno yo siempre temprano.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Yo siempre desayuno temprano\' is a natural beginner sentence with \'siempre\' before the verb.',
                    ],
                    [
                        'question' => 'A friend says, \'No me gusta el café ___ el té.\' Which word means \'or\'?',
                        'choices' => [
                            ['choice_text' => 'y', 'is_correct' => false],
                            ['choice_text' => 'pero', 'is_correct' => false],
                            ['choice_text' => 'o', 'is_correct' => true],
                            ['choice_text' => 'porque', 'is_correct' => false],
                        ],
                        'explanation' => '\'O\' means \'or\', so the sentence becomes \'No me gusta el café o el té.\'',
                    ],
                    [
                        'question' => 'Choose the correct connector: \'Estudio español ___ quiero viajar por América Latina.\'',
                        'choices' => [
                            ['choice_text' => 'porque', 'is_correct' => false],
                            ['choice_text' => 'pero', 'is_correct' => false],
                            ['choice_text' => 'y', 'is_correct' => true],
                            ['choice_text' => 'o', 'is_correct' => false],
                        ],
                        'explanation' => '\'Y\' links two related statements: \'Estudio español y quiero viajar...\'',
                    ],
                    [
                        'question' => 'Which sentence uses \'porque\' correctly?',
                        'choices' => [
                            ['choice_text' => 'No salgo porque estoy cansado.', 'is_correct' => true],
                            ['choice_text' => 'No salgo porque estoy cansada yo.', 'is_correct' => false],
                            ['choice_text' => 'Porque no salgo estoy cansado.', 'is_correct' => false],
                            ['choice_text' => 'No porque salgo estoy cansado.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Porque\' introduces the reason: \'No salgo porque estoy cansado.\'',
                    ],
                    [
                        'question' => 'Which sentence correctly uses \'de\' for possession or relation?',
                        'choices' => [
                            ['choice_text' => 'El coche de Juan es nuevo.', 'is_correct' => true],
                            ['choice_text' => 'El coche en Juan es nuevo.', 'is_correct' => false],
                            ['choice_text' => 'El coche con Juan es nuevo.', 'is_correct' => false],
                            ['choice_text' => 'El coche por Juan es nuevo.', 'is_correct' => false],
                        ],
                        'explanation' => '\'De\' commonly shows possession: \'el coche de Juan\'.',
                    ],
                    [
                        'question' => 'Which sentence is correctly negated?',
                        'choices' => [
                            ['choice_text' => 'No nunca estudio.', 'is_correct' => false],
                            ['choice_text' => 'Nunca no estudio.', 'is_correct' => false],
                            ['choice_text' => 'No estudio los domingos.', 'is_correct' => true],
                            ['choice_text' => 'No estudio no los domingos.', 'is_correct' => false],
                        ],
                        'explanation' => '\'No estudio los domingos\' is a straightforward and natural negative sentence.',
                    ],
                    [
                        'question' => 'Choose the best completion: \'Voy ___ la estación de tren.\'',
                        'choices' => [
                            ['choice_text' => 'a', 'is_correct' => true],
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'con', 'is_correct' => false],
                        ],
                        'explanation' => 'Movement toward a destination is commonly expressed with \'a\': \'Voy a la estación\'.',
                    ],
                    [
                        'question' => 'Which sentence correctly contrasts two ideas?',
                        'choices' => [
                            ['choice_text' => 'Quiero salir, y está lloviendo.', 'is_correct' => false],
                            ['choice_text' => 'Quiero salir, pero está lloviendo.', 'is_correct' => true],
                            ['choice_text' => 'Quiero salir, porque está lloviendo.', 'is_correct' => false],
                            ['choice_text' => 'Quiero salir, o está lloviendo.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Pero\' introduces a contrast: wanting to go out despite the rain.',
                    ],
                    [
                        'question' => 'A beginner writes \'No tengo ningún libros\'. What should be changed?',
                        'choices' => [
                            ['choice_text' => 'No → Sí', 'is_correct' => false],
                            ['choice_text' => 'libros → libro', 'is_correct' => true],
                            ['choice_text' => 'ningún → ningunos', 'is_correct' => false],
                            ['choice_text' => 'tengo → tiene', 'is_correct' => false],
                        ],
                        'explanation' => '\'Ningún\' agrees with a masculine singular noun, so the natural phrase is \'No tengo ningún libro\'.',
                    ],
                ],
            ],
            [
                'title' => 'Sentence Structure and Integrated Grammar',
                'description' => 'Bring together gender, agreement, pronouns, verb forms, negation, and basic sentence structure in realistic beginner situations.',
                'questions' => [
                    [
                        'question' => 'Which sentence has correct subject-verb agreement?',
                        'choices' => [
                            ['choice_text' => 'Mis amigos vive aquí.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos viven aquí.', 'is_correct' => true],
                            ['choice_text' => 'Mis amigos vivo aquí.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos vivir aquí.', 'is_correct' => false],
                        ],
                        'explanation' => 'The plural subject \'mis amigos\' needs the plural verb form \'viven\'.',
                    ],
                    [
                        'question' => 'Choose the sentence with correct adjective agreement.',
                        'choices' => [
                            ['choice_text' => 'La oficina es grande y moderno.', 'is_correct' => false],
                            ['choice_text' => 'La oficina es grande y moderna.', 'is_correct' => true],
                            ['choice_text' => 'La oficina son grande y moderna.', 'is_correct' => false],
                            ['choice_text' => 'La oficina es grandes y moderno.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Oficina\' is feminine singular, so \'moderna\' agrees with it. \'Grande\' has the same singular form for both genders.',
                    ],
                    [
                        'question' => 'Which sentence is correctly ordered and natural?',
                        'choices' => [
                            ['choice_text' => 'Siempre café tomo por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Tomo por la mañana siempre café.', 'is_correct' => false],
                            ['choice_text' => 'Siempre tomo café por la mañana.', 'is_correct' => true],
                            ['choice_text' => 'Café siempre tomo por la mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Siempre tomo café por la mañana\' follows a natural Spanish word order.',
                    ],
                    [
                        'question' => 'A coworker asks why Paula is absent. Which sentence answers clearly?',
                        'choices' => [
                            ['choice_text' => 'Paula no está aquí porque está enferma.', 'is_correct' => true],
                            ['choice_text' => 'Paula no aquí está porque enferma es.', 'is_correct' => false],
                            ['choice_text' => 'Paula no es aquí porque está enferma.', 'is_correct' => false],
                            ['choice_text' => 'Paula no está aquí y porque está enferma.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence uses \'estar\' for location/state and \'porque\' to give the reason.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses a possessive and a plural noun?',
                        'choices' => [
                            ['choice_text' => 'Nuestros amigos viven cerca.', 'is_correct' => true],
                            ['choice_text' => 'Nuestro amigos viven cerca.', 'is_correct' => false],
                            ['choice_text' => 'Nuestras amigos viven cerca.', 'is_correct' => false],
                            ['choice_text' => 'Nuestros amigo viven cerca.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Amigos\' is masculine plural, so the possessive is \'nuestros\'.',
                    ],
                    [
                        'question' => 'Choose the correct sentence.',
                        'choices' => [
                            ['choice_text' => 'Hay una tiendas nuevas aquí.', 'is_correct' => false],
                            ['choice_text' => 'Hay unas tiendas nuevas aquí.', 'is_correct' => true],
                            ['choice_text' => 'Hay unos tienda nuevas aquí.', 'is_correct' => false],
                            ['choice_text' => 'Está unas tiendas nuevas aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Tiendas\' is feminine plural, so \'unas tiendas nuevas\' agrees correctly, and \'hay\' introduces their existence.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses a direct object pronoun?',
                        'choices' => [
                            ['choice_text' => 'Compro la revista y la leo.', 'is_correct' => true],
                            ['choice_text' => 'Compro la revista y lo leo.', 'is_correct' => false],
                            ['choice_text' => 'Compro la revista y le leo.', 'is_correct' => false],
                            ['choice_text' => 'Compro la revista y las leo.', 'is_correct' => false],
                        ],
                        'explanation' => '\'La revista\' is feminine singular, so the direct object pronoun is \'la\'.',
                    ],
                    [
                        'question' => 'A student says, \'Ella tienen dos clases hoy.\' What is the correct version?',
                        'choices' => [
                            ['choice_text' => 'Ella tengo dos clases hoy.', 'is_correct' => false],
                            ['choice_text' => 'Ella tienes dos clases hoy.', 'is_correct' => false],
                            ['choice_text' => 'Ella tiene dos clases hoy.', 'is_correct' => true],
                            ['choice_text' => 'Ella tienen dos clase hoy.', 'is_correct' => false],
                        ],
                        'explanation' => 'The singular subject \'ella\' takes \'tiene\'.',
                    ],
                    [
                        'question' => 'Which sentence correctly expresses origin and current location?',
                        'choices' => [
                            ['choice_text' => 'Soy de México, pero ahora estoy en España.', 'is_correct' => true],
                            ['choice_text' => 'Estoy de México, pero ahora soy en España.', 'is_correct' => false],
                            ['choice_text' => 'Soy en México, pero ahora estoy de España.', 'is_correct' => false],
                            ['choice_text' => 'Hay de México, pero ahora estoy España.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Soy de México\' expresses origin, while \'estoy en España\' expresses current location.',
                    ],
                    [
                        'question' => 'Which sentence contains a correct negative command-like refusal at beginner level?',
                        'choices' => [
                            ['choice_text' => 'No quiero ir.', 'is_correct' => true],
                            ['choice_text' => 'No quiero a ir.', 'is_correct' => false],
                            ['choice_text' => 'No quiero de ir.', 'is_correct' => false],
                            ['choice_text' => 'No quiero en ir.', 'is_correct' => false],
                        ],
                        'explanation' => 'The infinitive \'ir\' follows \'quiero\' directly: \'No quiero ir\'.',
                    ],
                    [
                        'question' => 'Choose the natural sentence for a routine.',
                        'choices' => [
                            ['choice_text' => 'Mi hermano levantarse a las siete.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano se levanta a las siete.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermano se levanto a las siete.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano levanta se a las siete.', 'is_correct' => false],
                        ],
                        'explanation' => 'The reflexive verb \'levantarse\' becomes \'se levanta\' with \'mi hermano\'.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'A Marta le gusta los libros.', 'is_correct' => false],
                            ['choice_text' => 'A Marta le gustan los libros.', 'is_correct' => true],
                            ['choice_text' => 'A Marta la gustan los libros.', 'is_correct' => false],
                            ['choice_text' => 'A Marta le gusto los libros.', 'is_correct' => false],
                        ],
                        'explanation' => 'With \'los libros\' as the plural thing liked, the verb agrees in plural: \'le gustan\'.',
                    ],
                    [
                        'question' => 'A friend says, \'Hay un problema, pero nosotros puede solucionarlo.\' What needs changing?',
                        'choices' => [
                            ['choice_text' => 'Hay → Está', 'is_correct' => false],
                            ['choice_text' => 'problema → problemas', 'is_correct' => false],
                            ['choice_text' => 'puede → podemos', 'is_correct' => true],
                            ['choice_text' => 'nosotros → nuestro', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject \'nosotros\' needs the first-person plural form \'podemos\'.',
                    ],
                    [
                        'question' => 'Which sentence correctly combines a time expression and present tense?',
                        'choices' => [
                            ['choice_text' => 'Los lunes trabajo en casa.', 'is_correct' => true],
                            ['choice_text' => 'Los lunes trabajo en casa.', 'is_correct' => false],
                            ['choice_text' => 'Los lunes trabajan en casa.', 'is_correct' => false],
                            ['choice_text' => 'Los lunes trabajar en casa.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Trabajo\' matches the implied \'yo\', and \'los lunes\' naturally introduces a routine.',
                    ],
                    [
                        'question' => 'Which sentence is grammatically sound?',
                        'choices' => [
                            ['choice_text' => 'Tengo una hermana y dos hermanos menores.', 'is_correct' => true],
                            ['choice_text' => 'Tengo un hermana y dos hermanos menor.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una hermana y dos hermano menores.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una hermanas y dos hermanos menores.', 'is_correct' => false],
                        ],
                        'explanation' => 'The articles, nouns, and adjective \'menores\' all fit the plural brothers and singular sister correctly.',
                    ],
                ],
            ],
        ];

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 15, 'passing_score' => 50],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 20, 'passing_score' => 60],
            7 => ['duration' => 25, 'passing_score' => 65],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

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
