<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class NounsGenderBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'nouns-gender')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Spanish Nouns and Gender Basics',
                'description' => 'Learn how Spanish nouns are grouped by grammatical gender and practice common masculine and feminine nouns.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Which noun is masculine?',
                        'choices' => [
                            ['choice_text' =>'mesa', 'is_correct' => false],
                            ['choice_text' =>'casa', 'is_correct' => false],
                            ['choice_text' =>'libro', 'is_correct' => true],
                            ['choice_text' =>'ventana', 'is_correct' => false],
                        ],
                        'explanation' => '“Libro” is masculine, so you normally say “el libro.” The other three nouns are feminine.'
                    ],
                    [
                        'question' => 'A beginner wants to say “the chair.” Which phrase is correct?',
                        'choices' => [
                            ['choice_text' =>'el silla', 'is_correct' => false],
                            ['choice_text' =>'la silla', 'is_correct' => true],
                            ['choice_text' =>'un silla', 'is_correct' => false],
                            ['choice_text' =>'los silla', 'is_correct' => false],
                        ],
                        'explanation' => '“Silla” is a feminine singular noun, so it takes “la”: “la silla.”'
                    ],
                    [
                        'question' => 'Which pair matches the noun with its usual gender?',
                        'choices' => [
                            ['choice_text' =>'el coche — masculine', 'is_correct' => true],
                            ['choice_text' =>'la coche — feminine', 'is_correct' => false],
                            ['choice_text' =>'el mesa — masculine', 'is_correct' => false],
                            ['choice_text' =>'la libro — feminine', 'is_correct' => false],
                        ],
                        'explanation' => '“Coche” is masculine, so “el coche” is the normal combination.'
                    ],
                    [
                        'question' => 'Which ending is often a useful clue that a noun is feminine?',
                        'choices' => [
                            ['choice_text' =>'-o', 'is_correct' => false],
                            ['choice_text' =>'-a', 'is_correct' => true],
                            ['choice_text' =>'-or', 'is_correct' => false],
                            ['choice_text' =>'-ma', 'is_correct' => false],
                        ],
                        'explanation' => 'Many feminine nouns end in “-a,” such as “casa,” “mesa,” and “ventana.” It is a clue, not a perfect rule.'
                    ],
                    [
                        'question' => 'Which noun is masculine even though it ends in “-a”?',
                        'choices' => [
                            ['choice_text' =>'carta', 'is_correct' => false],
                            ['choice_text' =>'ventana', 'is_correct' => false],
                            ['choice_text' =>'mapa', 'is_correct' => true],
                            ['choice_text' =>'camisa', 'is_correct' => false],
                        ],
                        'explanation' => '“Mapa” is masculine: “el mapa.” It is a common exception to the simple “-a means feminine” pattern.'
                    ],
                    [
                        'question' => 'Which noun is feminine despite ending in “-o”?',
                        'choices' => [
                            ['choice_text' =>'mano', 'is_correct' => true],
                            ['choice_text' =>'libro', 'is_correct' => false],
                            ['choice_text' =>'gato', 'is_correct' => false],
                            ['choice_text' =>'zapato', 'is_correct' => false],
                        ],
                        'explanation' => '“Mano” is feminine: “la mano.” This is why endings should be treated as clues rather than absolute rules.'
                    ],
                    [
                        'question' => 'Which sentence uses noun gender correctly?',
                        'choices' => [
                            ['choice_text' =>'La problema es difícil.', 'is_correct' => false],
                            ['choice_text' =>'El problema es difícil.', 'is_correct' => true],
                            ['choice_text' =>'Una problema es difícil.', 'is_correct' => false],
                            ['choice_text' =>'Los problema es difícil.', 'is_correct' => false],
                        ],
                        'explanation' => '“Problema” is masculine despite its ending, so “el problema” is correct.'
                    ],
                    [
                        'question' => 'Which noun is feminine?',
                        'choices' => [
                            ['choice_text' =>'día', 'is_correct' => false],
                            ['choice_text' =>'idioma', 'is_correct' => false],
                            ['choice_text' =>'flor', 'is_correct' => true],
                            ['choice_text' =>'papel', 'is_correct' => false],
                        ],
                        'explanation' => '“Flor” is feminine: “la flor.” “Día,” “idioma,” and “papel” are masculine.'
                    ],
                    [
                        'question' => 'What is the safest habit for learning Spanish noun gender?',
                        'choices' => [
                            ['choice_text' => 'Memorize the noun together with its article.', 'is_correct' => true],
                            ['choice_text' => 'Always guess “la” when unsure.', 'is_correct' => false],
                            ['choice_text' => 'Always guess “el” when unsure.', 'is_correct' => false],
                            ['choice_text' => 'Ignore articles until advanced Spanish.', 'is_correct' => false],
                        ],
                        'explanation' => 'Learning “el libro” or “la mesa” as a unit makes the noun and its gender easier to remember.'
                    ],
                    [
                        'question' => 'Which phrase is correct?',
                        'choices' => [
                            ['choice_text' =>'la flor', 'is_correct' => true],
                            ['choice_text' =>'el flor', 'is_correct' => false],
                            ['choice_text' =>'un flor', 'is_correct' => false],
                            ['choice_text' =>'los flor', 'is_correct' => false],
                        ],
                        'explanation' => '“Flor” is feminine, so the definite article is “la.”'
                    ],
                    [
                        'question' => 'A student writes “el casa.” What should be changed?',
                        'choices' => [
                            ['choice_text' => 'Change “el” to “la”.', 'is_correct' => true],
                            ['choice_text' => 'Change “casa” to “caso”.', 'is_correct' => false],
                            ['choice_text' => 'Change “el” to “los”.', 'is_correct' => false],
                            ['choice_text' => 'Change “casa” to “casas”.', 'is_correct' => false],
                        ],
                        'explanation' => '“Casa” is feminine singular, so the correct phrase is “la casa.”'
                    ],
                    [
                        'question' => 'Which statement is most accurate?',
                        'choices' => [
                            ['choice_text' =>'Spanish noun endings give useful clues, but there are exceptions.', 'is_correct' => true],
                            ['choice_text' =>'Every noun ending in “-a” is feminine.', 'is_correct' => false],
                            ['choice_text' =>'Every noun ending in “-o” is masculine.', 'is_correct' => false],
                            ['choice_text' =>'Noun gender can always be guessed from pronunciation.', 'is_correct' => false],
                        ],
                        'explanation' => 'Common patterns help beginners, but words such as “el mapa” and “la mano” show that exceptions must also be learned.'
                    ],
                ],
            ],
            [
                'title' => 'Common Gender Patterns and Exceptions',
                'description' => 'Recognize useful ending patterns while getting comfortable with common nouns that do not follow the simplest rule.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    ['question' => 'Which noun fits the common masculine “-o” pattern?', 'choices' => [['choice_text' =>'libro', 'is_correct' => true], ['choice_text' =>'nación', 'is_correct' => false], ['choice_text' =>'pared', 'is_correct' => false], ['choice_text' =>'flor', 'is_correct' => false]], 'explanation' => '“Libro” is masculine and ends in “-o,” a very common masculine pattern.'],
                    ['question' => 'Which noun is feminine?', 'choices' => [['choice_text' =>'ventana', 'is_correct' => true], ['choice_text' =>'cuaderno', 'is_correct' => false], ['choice_text' =>'zapato', 'is_correct' => false], ['choice_text' =>'reloj', 'is_correct' => false]], 'explanation' => '“Ventana” is feminine and normally takes “la.”'],
                    ['question' => 'Which ending often appears in feminine nouns?', 'choices' => [['choice_text' =>'-ción', 'is_correct' => true], ['choice_text' =>'-o', 'is_correct' => false], ['choice_text' =>'-ma', 'is_correct' => false], ['choice_text' =>'-aje', 'is_correct' => false]], 'explanation' => 'Nouns ending in “-ción” are commonly feminine, such as “la nación” and “la decisión.”'],
                    ['question' => 'Which pair is correctly matched?', 'choices' => [['choice_text' =>'la ciudad / la universidad', 'is_correct' => true], ['choice_text' =>'el ciudad / el universidad', 'is_correct' => false], ['choice_text' =>'la ciudad / el universidad', 'is_correct' => false], ['choice_text' =>'el ciudad / la universidad', 'is_correct' => false]], 'explanation' => 'Both “ciudad” and “universidad” are feminine nouns.'],
                    ['question' => 'A learner says “el televisión.” What is the correction?', 'choices' => [['choice_text' =>'la televisión', 'is_correct' => true], ['choice_text' =>'una televisións', 'is_correct' => false], ['choice_text' =>'el televisiones', 'is_correct' => false], ['choice_text' =>'los televisión', 'is_correct' => false]], 'explanation' => '“Televisión” is feminine, so “la televisión” is correct.'],
                    ['question' => 'Which noun is masculine despite ending in “-a”?', 'choices' => [['choice_text' =>'idioma', 'is_correct' => true], ['choice_text' =>'familia', 'is_correct' => false], ['choice_text' =>'semana', 'is_correct' => false], ['choice_text' =>'carta', 'is_correct' => false]], 'explanation' => '“Idioma” is masculine: “el idioma.”'],
                    ['question' => 'Which pair shows two feminine nouns?', 'choices' => [['choice_text' =>'la noche / la ciudad', 'is_correct' => true], ['choice_text' =>'el noche / la ciudad', 'is_correct' => false], ['choice_text' =>'la noche / el ciudad', 'is_correct' => false], ['choice_text' =>'el noche / el ciudad', 'is_correct' => false]], 'explanation' => 'Both “noche” and “ciudad” are feminine.'],
                    ['question' => 'A student sees “color” and “pared.” Which statement is correct?', 'choices' => [['choice_text' => '“El color” is masculine, while “la pared” is feminine.', 'is_correct' => true], ['choice_text' => '“La color” is masculine, while “el pared” is feminine.', 'is_correct' => false], ['choice_text' => 'Both nouns are feminine.', 'is_correct' => false], ['choice_text' => 'Both nouns are masculine.', 'is_correct' => false]], 'explanation' => '“Color” is masculine, while “pared” is feminine, so their articles differ.'],
                    ['question' => 'Which noun is feminine even though it ends in “-o”?', 'choices' => [['choice_text' =>'foto', 'is_correct' => true], ['choice_text' =>'libro', 'is_correct' => false], ['choice_text' =>'gato', 'is_correct' => false], ['choice_text' =>'cuaderno', 'is_correct' => false]], 'explanation' => '“Foto” is feminine: “la foto.”'],
                    ['question' => 'Which noun is masculine despite its “-ma” ending?', 'choices' => [['choice_text' =>'sistema', 'is_correct' => true], ['choice_text' =>'casa', 'is_correct' => false], ['choice_text' =>'mesa', 'is_correct' => false], ['choice_text' =>'flor', 'is_correct' => false]], 'explanation' => 'Many nouns ending in “-ma” from Greek have masculine gender; “el sistema” is one example.'],
                    ['question' => 'Which strategy is most reliable with an unfamiliar noun?', 'choices' => [['choice_text' => 'Check its article or learn it as a noun-plus-article pair.', 'is_correct' => true], ['choice_text' => 'Assume “-a” always means feminine.', 'is_correct' => false], ['choice_text' => 'Assume every consonant ending is masculine.', 'is_correct' => false], ['choice_text' => 'Avoid using the noun.', 'is_correct' => false]], 'explanation' => 'The ending may help, but the dictionary form with its article is more reliable.'],
                    ['question' => 'Which sentence is correct?', 'choices' => [['choice_text' =>'La decisión fue difícil.', 'is_correct' => true], ['choice_text' =>'El decisión fue difícil.', 'is_correct' => false], ['choice_text' =>'La decisión fueron difícil.', 'is_correct' => false], ['choice_text' =>'Una decisión fue difíciles.', 'is_correct' => false]], 'explanation' => '“Decisión” is feminine singular, so “la decisión” is correct.'],
                    ['question' => 'Which group contains only masculine nouns?', 'choices' => [['choice_text' =>'el papel, el reloj, el color', 'is_correct' => true], ['choice_text' =>'la papel, la reloj, la color', 'is_correct' => false], ['choice_text' =>'la flor, el reloj, la pared', 'is_correct' => false], ['choice_text' =>'el noche, la papel, el color', 'is_correct' => false]], 'explanation' => '“Papel,” “reloj,” and “color” are all masculine.'],
                    ['question' => 'Which statement about “-e” nouns is correct?', 'choices' => [['choice_text' =>'Nouns ending in “-e” can be masculine or feminine.', 'is_correct' => true], ['choice_text' =>'Every “-e” noun is masculine.', 'is_correct' => false], ['choice_text' =>'Every “-e” noun is feminine.', 'is_correct' => false], ['choice_text' =>'Nouns ending in “-e” are not nouns.', 'is_correct' => false]], 'explanation' => 'For example, “el coche” is masculine while “la noche” is feminine, so the ending alone is not enough.'],
                    ['question' => 'Which sentence contains the correct gender pairing?', 'choices' => [['choice_text' =>'El mapa y la foto están aquí.', 'is_correct' => true], ['choice_text' =>'La mapa y el foto están aquí.', 'is_correct' => false], ['choice_text' =>'El mapa y el foto están aquí.', 'is_correct' => false], ['choice_text' =>'La mapa y la foto están aquí.', 'is_correct' => false]], 'explanation' => '“Mapa” is masculine and “foto” is feminine, so “el mapa” and “la foto” are correct.'],
                ],
            ],
            [
                'title' => 'People and Professions',
                'description' => 'Practice noun gender with people, family members, and common professions, including nouns that keep the same form.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    ['question' => 'What is the common feminine form of “profesor”?', 'choices' => [['choice_text' =>'profesora', 'is_correct' => true], ['choice_text' =>'profesoro', 'is_correct' => false], ['choice_text' =>'profesore', 'is_correct' => false], ['choice_text' =>'profesoras', 'is_correct' => false]], 'explanation' => 'The common feminine form is “profesora,” while “profesor” is masculine.'],
                    ['question' => 'Which pair correctly refers to a man and a woman?', 'choices' => [['choice_text' =>'el médico / la médica', 'is_correct' => true], ['choice_text' =>'la médico / el médica', 'is_correct' => false], ['choice_text' =>'el médica / la médico', 'is_correct' => false], ['choice_text' =>'la médica / el médica', 'is_correct' => false]], 'explanation' => '“Médico” and “médica” are the usual masculine and feminine forms.'],
                    ['question' => 'Which noun can be used for both men and women, with the article showing the gender?', 'choices' => [['choice_text' =>'estudiante', 'is_correct' => true], ['choice_text' =>'hermano', 'is_correct' => false], ['choice_text' =>'hermana', 'is_correct' => false], ['choice_text' =>'padre', 'is_correct' => false]], 'explanation' => '“El estudiante” and “la estudiante” use the same noun form with different articles.'],
                    ['question' => 'Which sentence is correct?', 'choices' => [['choice_text' =>'Mi hermana es profesora.', 'is_correct' => true], ['choice_text' =>'Mi hermana es profesor.', 'is_correct' => false], ['choice_text' =>'Mi hermano es profesora.', 'is_correct' => false], ['choice_text' =>'Mi hermana son profesora.', 'is_correct' => false]], 'explanation' => '“Hermana” and “profesora” are feminine singular forms, and the verb “es” agrees with the singular subject.'],
                    ['question' => 'Which pair uses different noun forms for masculine and feminine?', 'choices' => [['choice_text' =>'actor / actriz', 'is_correct' => true], ['choice_text' =>'estudiante / estudiante', 'is_correct' => false], ['choice_text' =>'periodista / periodista', 'is_correct' => false], ['choice_text' =>'artista / artista', 'is_correct' => false]], 'explanation' => '“Actor” changes to “actriz” for the feminine form.'],
                    ['question' => 'A woman says, “Soy periodista.” How would you normally refer to her with an article?', 'choices' => [['choice_text' =>'la periodista', 'is_correct' => true], ['choice_text' =>'el periodista', 'is_correct' => false], ['choice_text' =>'la periodisto', 'is_correct' => false], ['choice_text' =>'una periodisto', 'is_correct' => false]], 'explanation' => '“Periodista” keeps the same noun form for both genders; “la” marks the feminine reference here.'],
                    ['question' => 'Which sentence correctly refers to a female engineer?', 'choices' => [['choice_text' =>'Ella es ingeniera.', 'is_correct' => true], ['choice_text' =>'Ella es ingeniero.', 'is_correct' => false], ['choice_text' =>'Ella son ingeniera.', 'is_correct' => false], ['choice_text' =>'Ella es un ingeniera.', 'is_correct' => false]], 'explanation' => '“Ingeniera” is the feminine form of “ingeniero.”'],
                    ['question' => 'Which pair contains one masculine and one feminine family noun?', 'choices' => [['choice_text' =>'hermano / hermana', 'is_correct' => true], ['choice_text' =>'padre / padre', 'is_correct' => false], ['choice_text' =>'madre / madre', 'is_correct' => false], ['choice_text' =>'persona / persona', 'is_correct' => false]], 'explanation' => '“Hermano” is masculine and “hermana” is feminine.'],
                    ['question' => 'Which noun can describe a male or female artist without changing the noun itself?', 'choices' => [['choice_text' =>'artista', 'is_correct' => true], ['choice_text' =>'actor', 'is_correct' => false], ['choice_text' =>'actoría', 'is_correct' => false], ['choice_text' =>'hermano', 'is_correct' => false]], 'explanation' => '“Artista” keeps the same noun form; the article can show gender: “el artista” or “la artista.”'],
                    ['question' => 'Which sentence has a gender mismatch?', 'choices' => [['choice_text' =>'Mi hermano es enfermera.', 'is_correct' => true], ['choice_text' =>'Mi hermano es enfermero.', 'is_correct' => false], ['choice_text' =>'Mi hermana es enfermera.', 'is_correct' => false], ['choice_text' =>'La enfermera trabaja aquí.', 'is_correct' => false]], 'explanation' => '“Hermano” is masculine, so the matching profession is “enfermero,” not “enfermera.”'],
                    ['question' => 'What changes in “el estudiante” versus “la estudiante”?', 'choices' => [['choice_text' => 'The article changes, but the noun stays the same.', 'is_correct' => true], ['choice_text' => 'The noun changes from “estudiante” to “estudianta.”', 'is_correct' => false], ['choice_text' => 'Only the verb changes.', 'is_correct' => false], ['choice_text' => 'Nothing changes at all.', 'is_correct' => false]], 'explanation' => '“Estudiante” is a noun with the same form for both genders; the article identifies the person as masculine or feminine.'],
                    ['question' => 'Which sentence is natural?', 'choices' => [['choice_text' =>'La doctora atiende a la paciente.', 'is_correct' => true], ['choice_text' =>'El doctora atiende a la paciente.', 'is_correct' => false], ['choice_text' =>'La doctor atiende a la paciente.', 'is_correct' => false], ['choice_text' =>'La doctora atienden a la paciente.', 'is_correct' => false]], 'explanation' => '“Doctora” is the feminine form, and “la paciente” correctly refers to a female patient here.'],
                ],
            ],
            [
                'title' => 'Articles and Gender in Context',
                'description' => 'Choose the right definite and indefinite articles by paying attention to noun gender and number.',
                'settings' => ['duration' => 15, 'passing_score' => 55],
                'questions' => [
                    ['question' => 'Choose the correct phrase for “a book.”', 'choices' => [['choice_text' =>'un libro', 'is_correct' => true], ['choice_text' =>'una libro', 'is_correct' => false], ['choice_text' =>'la libro', 'is_correct' => false], ['choice_text' =>'un libros', 'is_correct' => false]], 'explanation' => '“Libro” is masculine singular, so the indefinite article is “un.”'],
                    ['question' => 'Which phrase means “the city”?', 'choices' => [['choice_text' =>'la ciudad', 'is_correct' => true], ['choice_text' =>'el ciudad', 'is_correct' => false], ['choice_text' =>'un ciudad', 'is_correct' => false], ['choice_text' =>'los ciudad', 'is_correct' => false]], 'explanation' => '“Ciudad” is feminine singular, so the definite article is “la.”'],
                    ['question' => 'Maria says, “Necesito ___ mesa.” Which option fits?', 'choices' => [['choice_text' =>'una', 'is_correct' => true], ['choice_text' =>'un', 'is_correct' => false], ['choice_text' =>'el', 'is_correct' => false], ['choice_text' =>'los', 'is_correct' => false]], 'explanation' => '“Mesa” is feminine singular, so “una mesa” means “a table.”'],
                    ['question' => 'Which sentence is correct?', 'choices' => [['choice_text' =>'Tengo un mapa.', 'is_correct' => true], ['choice_text' =>'Tengo una mapa.', 'is_correct' => false], ['choice_text' =>'Tengo la mapa.', 'is_correct' => false], ['choice_text' =>'Tengo un mapas.', 'is_correct' => false]], 'explanation' => '“Mapa” is masculine singular, so “un mapa” is correct.'],
                    ['question' => 'Which pair contains the correct definite and indefinite articles for “flor”?', 'choices' => [['choice_text' =>'la flor / una flor', 'is_correct' => true], ['choice_text' =>'el flor / un flor', 'is_correct' => false], ['choice_text' =>'la flor / un flor', 'is_correct' => false], ['choice_text' =>'el flor / una flor', 'is_correct' => false]], 'explanation' => '“Flor” is feminine, so it takes “la” and “una” in the singular.'],
                    ['question' => 'A learner says “una problema.” What needs fixing?', 'choices' => [['choice_text' => 'Change “una” to “un.”', 'is_correct' => true], ['choice_text' => 'Change “problema” to “problemo.”', 'is_correct' => false], ['choice_text' => 'Change “una” to “la.”', 'is_correct' => false], ['choice_text' => 'Change “problema” to “problemas.”', 'is_correct' => false]], 'explanation' => '“Problema” is masculine, so the indefinite article is “un”: “un problema.”'],
                    ['question' => 'Which sentence correctly uses “mano”?', 'choices' => [['choice_text' =>'Tengo una mano pequeña.', 'is_correct' => true], ['choice_text' =>'Tengo un mano pequeño.', 'is_correct' => false], ['choice_text' =>'Tengo la mano pequeños.', 'is_correct' => false], ['choice_text' =>'Tengo un mano pequeña.', 'is_correct' => false]], 'explanation' => '“Mano” is feminine singular, so “una mano” and the feminine adjective “pequeña” are correct.'],
                    ['question' => 'Which phrase is correct for “a teacher” when the person is female and the noun is “profesora”?', 'choices' => [['choice_text' =>'una profesora', 'is_correct' => true], ['choice_text' =>'un profesora', 'is_correct' => false], ['choice_text' =>'una profesor', 'is_correct' => false], ['choice_text' =>'el profesora', 'is_correct' => false]], 'explanation' => '“Profesora” is feminine singular, so the indefinite article is “una.”'],
                    ['question' => 'Which sentence has the article matched correctly?', 'choices' => [['choice_text' =>'El reloj está aquí.', 'is_correct' => true], ['choice_text' =>'La reloj está aquí.', 'is_correct' => false], ['choice_text' =>'Una reloj está aquí.', 'is_correct' => false], ['choice_text' =>'Los reloj está aquí.', 'is_correct' => false]], 'explanation' => '“Reloj” is masculine singular, so “el reloj” is correct.'],
                    ['question' => 'Which option correctly uses “universidad”?', 'choices' => [['choice_text' =>'una universidad', 'is_correct' => true], ['choice_text' =>'un universidad', 'is_correct' => false], ['choice_text' =>'el universidad', 'is_correct' => false], ['choice_text' =>'los universidad', 'is_correct' => false]], 'explanation' => '“Universidad” is feminine singular, so “una universidad” is correct.'],
                ],
            ],
            [
                'title' => 'Exceptions You Should Know',
                'description' => 'Build confidence with common exceptions and special cases that beginners often encounter in real Spanish.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    ['question' => 'Which phrase should you memorize for “the hand”?', 'choices' => [['choice_text' =>'la mano', 'is_correct' => true], ['choice_text' =>'el mano', 'is_correct' => false], ['choice_text' =>'una mano', 'is_correct' => false], ['choice_text' =>'los mano', 'is_correct' => false]], 'explanation' => '“Mano” is feminine even though it ends in “-o,” so the standard phrase is “la mano.”'],
                    ['question' => 'Which phrase is correct for “the day”?', 'choices' => [['choice_text' =>'el día', 'is_correct' => true], ['choice_text' =>'la día', 'is_correct' => false], ['choice_text' =>'una día', 'is_correct' => false], ['choice_text' =>'el días', 'is_correct' => false]], 'explanation' => '“Día” is masculine, so “el día” is correct.'],
                    ['question' => 'Which noun is masculine?', 'choices' => [['choice_text' =>'problema', 'is_correct' => true], ['choice_text' =>'flor', 'is_correct' => false], ['choice_text' =>'noche', 'is_correct' => false], ['choice_text' =>'mano', 'is_correct' => false]], 'explanation' => '“Problema” is masculine despite its “-a” ending: “el problema.”'],
                    ['question' => 'Which phrase is correct?', 'choices' => [['choice_text' =>'el idioma', 'is_correct' => true], ['choice_text' =>'la idioma', 'is_correct' => false], ['choice_text' =>'una idioma', 'is_correct' => false], ['choice_text' =>'los idioma', 'is_correct' => false]], 'explanation' => '“Idioma” is masculine, so “el idioma” is the standard singular phrase.'],
                    ['question' => 'Which word is feminine even though it ends in “-o”?', 'choices' => [['choice_text' =>'foto', 'is_correct' => true], ['choice_text' =>'mapa', 'is_correct' => false], ['choice_text' =>'tema', 'is_correct' => false], ['choice_text' =>'sistema', 'is_correct' => false]], 'explanation' => '“Foto” is feminine: “la foto.”'],
                    ['question' => 'Why is “el agua” possible even though “agua” is feminine?', 'choices' => [['choice_text' => 'Singular “el” is used before the stressed initial “a” sound for easier pronunciation.', 'is_correct' => true], ['choice_text' => '“Agua” becomes masculine in the singular.', 'is_correct' => false], ['choice_text' => '“Agua” has no gender.', 'is_correct' => false], ['choice_text' => 'Feminine nouns always take “el.”', 'is_correct' => false]], 'explanation' => '“Agua” remains grammatically feminine, but “el agua” is used in the singular to avoid an awkward repeated “a” sound.'],
                    ['question' => 'Which sentence is correct?', 'choices' => [['choice_text' =>'El agua está fría.', 'is_correct' => true], ['choice_text' =>'La agua está frío.', 'is_correct' => false], ['choice_text' =>'El agua están fría.', 'is_correct' => false], ['choice_text' =>'El agua está frío.', 'is_correct' => false]], 'explanation' => 'The noun is grammatically feminine, so the adjective is “fría.” The singular article is “el” because of the pronunciation rule.'],
                    ['question' => 'Which noun is masculine even though it ends in “-a”?', 'choices' => [['choice_text' =>'tema', 'is_correct' => true], ['choice_text' =>'casa', 'is_correct' => false], ['choice_text' =>'camisa', 'is_correct' => false], ['choice_text' =>'ventana', 'is_correct' => false]], 'explanation' => '“Tema” is masculine: “el tema.”'],
                    ['question' => 'Which pair should a beginner learn as complete noun-and-article units?', 'choices' => [['choice_text' =>'la mano and el mapa', 'is_correct' => true], ['choice_text' =>'la mesa and la casa', 'is_correct' => false], ['choice_text' =>'el libro and el coche', 'is_correct' => false], ['choice_text' =>'la ventana and la silla', 'is_correct' => false]], 'explanation' => '“La mano” and “el mapa” are useful exceptions because their endings can mislead beginners.'],
                    ['question' => 'Which sentence uses a masculine “-ma” noun correctly?', 'choices' => [['choice_text' =>'El sistema funciona bien.', 'is_correct' => true], ['choice_text' =>'La sistema funciona bien.', 'is_correct' => false], ['choice_text' =>'El sistema funcionan bien.', 'is_correct' => false], ['choice_text' =>'Una sistema funciona bien.', 'is_correct' => false]], 'explanation' => '“Sistema” is masculine, and the singular verb “funciona” matches the singular subject.'],
                    ['question' => 'Which statement about exceptions is best for a beginner?', 'choices' => [['choice_text' => 'Learn frequent exceptions with the article instead of relying only on the final letter.', 'is_correct' => true], ['choice_text' => 'Ignore articles and memorize spelling only.', 'is_correct' => false], ['choice_text' => 'Change the noun ending when it seems unusual.', 'is_correct' => false], ['choice_text' => 'Use “la” for every noun ending in a vowel.', 'is_correct' => false]], 'explanation' => 'The article gives you a reliable gender cue, especially for words that do not follow the simplest ending patterns.'],
                    ['question' => 'Which pair contains one feminine exception and one masculine exception?', 'choices' => [['choice_text' =>'la mano / el mapa', 'is_correct' => true], ['choice_text' =>'la casa / el libro', 'is_correct' => false], ['choice_text' =>'la mesa / la flor', 'is_correct' => false], ['choice_text' =>'el coche / el reloj', 'is_correct' => false]], 'explanation' => '“Mano” is feminine despite “-o,” while “mapa” is masculine despite “-a.”'],
                    ['question' => 'A learner says “la problema” because the word ends in “-a.” What is the most useful correction?', 'choices' => [['choice_text' => 'Teach the learner “el problema” as a complete unit.', 'is_correct' => true], ['choice_text' => 'Tell the learner all “-a” words are feminine.', 'is_correct' => false], ['choice_text' => 'Change “problema” to “problemosa.”', 'is_correct' => false], ['choice_text' => 'Avoid the word “problema.”', 'is_correct' => false]], 'explanation' => 'Memorizing “el problema” helps the learner remember the noun as a masculine exception.'],
                    ['question' => 'Which noun is feminine?', 'choices' => [['choice_text' =>'mano', 'is_correct' => true], ['choice_text' =>'idioma', 'is_correct' => false], ['choice_text' =>'día', 'is_correct' => false], ['choice_text' =>'mapa', 'is_correct' => false]], 'explanation' => 'Among these words, only “mano” is feminine.'],
                    ['question' => 'Which sentence is correct?', 'choices' => [['choice_text' =>'La foto es bonita.', 'is_correct' => true], ['choice_text' =>'El foto es bonito.', 'is_correct' => false], ['choice_text' =>'La foto es bonito.', 'is_correct' => false], ['choice_text' =>'Un foto es bonita.', 'is_correct' => false]], 'explanation' => '“Foto” is feminine, so “la foto” and “bonita” agree correctly.'],
                    ['question' => 'Which combination would be most useful to memorize?', 'choices' => [['choice_text' => 'el idioma, la mano, el mapa', 'is_correct' => true], ['choice_text' => 'idioma, mano, mapa only', 'is_correct' => false], ['choice_text' => 'la idioma, el mano, la mapa', 'is_correct' => false], ['choice_text' => 'un idioma, un mano, un mapa', 'is_correct' => false]], 'explanation' => 'Learning these nouns with their articles gives a clear gender cue and helps avoid relying on misleading endings.'],
                    ['question' => 'Which plural phrase is correct for “the waters”?', 'choices' => [['choice_text' =>'las aguas', 'is_correct' => true], ['choice_text' =>'los aguas', 'is_correct' => false], ['choice_text' =>'las agua', 'is_correct' => false], ['choice_text' =>'el aguas', 'is_correct' => false]], 'explanation' => '“Aguas” is plural and feminine, so the plural article is “las.”'],
                ],
            ],
            [
                'title' => 'Noun Gender in Descriptions',
                'description' => 'Use noun gender inside short sentences and descriptions, especially when an adjective also has to agree.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    ['question' => 'Which sentence is correct?', 'choices' => [['choice_text' =>'La casa es grande.', 'is_correct' => true], ['choice_text' =>'El casa es grande.', 'is_correct' => false], ['choice_text' =>'La casa son grande.', 'is_correct' => false], ['choice_text' =>'Un casa es grandes.', 'is_correct' => false]], 'explanation' => '“Casa” is feminine singular, so “la casa” is correct. “Grande” works for both genders in this form.'],
                    ['question' => 'Which sentence correctly describes a masculine noun?', 'choices' => [['choice_text' =>'El coche es nuevo.', 'is_correct' => true], ['choice_text' =>'La coche es nueva.', 'is_correct' => false], ['choice_text' =>'El coche es nueva.', 'is_correct' => false], ['choice_text' =>'Una coche es nuevo.', 'is_correct' => false]], 'explanation' => '“Coche” is masculine singular, so “el” and “nuevo” are appropriate.'],
                    ['question' => 'Which sentence uses a feminine adjective with “noche”?', 'choices' => [['choice_text' =>'La noche es tranquila.', 'is_correct' => true], ['choice_text' =>'La noche es tranquilo.', 'is_correct' => false], ['choice_text' =>'El noche es tranquila.', 'is_correct' => false], ['choice_text' =>'La noche son tranquila.', 'is_correct' => false]], 'explanation' => '“Noche” is feminine, so “tranquila” matches it.'],
                    ['question' => 'Which phrase is correct?', 'choices' => [['choice_text' =>'un día largo', 'is_correct' => true], ['choice_text' =>'una día larga', 'is_correct' => false], ['choice_text' =>'un día larga', 'is_correct' => false], ['choice_text' =>'una día largo', 'is_correct' => false]], 'explanation' => '“Día” is masculine, so both “un” and “largo” match it.'],
                    ['question' => 'Which sentence correctly describes “mesa”?', 'choices' => [['choice_text' =>'La mesa es pequeña.', 'is_correct' => true], ['choice_text' =>'El mesa es pequeño.', 'is_correct' => false], ['choice_text' =>'La mesa es pequeño.', 'is_correct' => false], ['choice_text' =>'Un mesa es pequeña.', 'is_correct' => false]], 'explanation' => '“Mesa” is feminine singular, so “la” and “pequeña” agree with it.'],
                    ['question' => 'A learner knows that “libro” is masculine. Which phrase follows naturally?', 'choices' => [['choice_text' =>'un libro nuevo', 'is_correct' => true], ['choice_text' =>'una libro nueva', 'is_correct' => false], ['choice_text' =>'un libro nueva', 'is_correct' => false], ['choice_text' =>'una libro nuevo', 'is_correct' => false]], 'explanation' => '“Libro” is masculine, so the article and adjective are “un” and “nuevo.”'],
                    ['question' => 'Which sentence correctly contrasts two nouns?', 'choices' => [['choice_text' =>'El cuaderno es nuevo y la carpeta es vieja.', 'is_correct' => true], ['choice_text' =>'La cuaderno es nueva y el carpeta es viejo.', 'is_correct' => false], ['choice_text' =>'El cuaderno es nueva y la carpeta es viejo.', 'is_correct' => false], ['choice_text' =>'El cuaderno son nuevo y la carpeta son vieja.', 'is_correct' => false]], 'explanation' => '“Cuaderno” is masculine and “carpeta” is feminine, so the adjectives “nuevo” and “vieja” agree with each noun.'],
                    ['question' => 'Which sentence is correct with “flor”?', 'choices' => [['choice_text' =>'La flor es bonita.', 'is_correct' => true], ['choice_text' =>'El flor es bonito.', 'is_correct' => false], ['choice_text' =>'La flor es bonito.', 'is_correct' => false], ['choice_text' =>'Un flor es bonita.', 'is_correct' => false]], 'explanation' => '“Flor” is feminine, so “la flor” and “bonita” are correct.'],
                    ['question' => 'Which sentence uses “mapa” correctly with an adjective?', 'choices' => [['choice_text' =>'El mapa es útil.', 'is_correct' => true], ['choice_text' =>'La mapa es útil.', 'is_correct' => false], ['choice_text' =>'El mapa es útiles.', 'is_correct' => false], ['choice_text' =>'Una mapa es útiles.', 'is_correct' => false]], 'explanation' => '“Mapa” is masculine singular. “Útil” has the same singular form for masculine and feminine.'],
                    ['question' => 'Which option correctly describes “la mano”?', 'choices' => [['choice_text' =>'La mano está limpia.', 'is_correct' => true], ['choice_text' =>'El mano está limpio.', 'is_correct' => false], ['choice_text' =>'La mano están limpio.', 'is_correct' => false], ['choice_text' =>'Un mano está limpia.', 'is_correct' => false]], 'explanation' => '“Mano” is feminine singular, so “la mano” and “limpia” agree.'],
                    ['question' => 'Which sentence is correct?', 'choices' => [['choice_text' =>'La universidad es grande.', 'is_correct' => true], ['choice_text' =>'El universidad es grande.', 'is_correct' => false], ['choice_text' =>'La universidad son grande.', 'is_correct' => false], ['choice_text' =>'Una universidad son grandes.', 'is_correct' => false]], 'explanation' => '“Universidad” is feminine singular, so “la universidad” is correct.'],
                    ['question' => 'A student says “el problema nueva.” Which part is wrong?', 'choices' => [['choice_text' => 'The adjective should be masculine: “nuevo.”', 'is_correct' => true], ['choice_text' => 'The article should be “la.”', 'is_correct' => false], ['choice_text' => 'The noun should become “problemao.”', 'is_correct' => false], ['choice_text' => 'Nothing is wrong.', 'is_correct' => false]], 'explanation' => '“Problema” is masculine, so the adjective should also be masculine: “el problema nuevo.”'],
                    ['question' => 'Which description is grammatically natural?', 'choices' => [['choice_text' =>'Una habitación pequeña.', 'is_correct' => true], ['choice_text' =>'Un habitación pequeño.', 'is_correct' => false], ['choice_text' =>'Una habitación pequeño.', 'is_correct' => false], ['choice_text' =>'Un habitación pequeña.', 'is_correct' => false]], 'explanation' => '“Habitación” is feminine singular, so “una” and “pequeña” match it.'],
                    ['question' => 'Why is “la mano pequeña” correct?', 'choices' => [['choice_text' => '“Mano” is feminine, so the article and adjective follow the feminine pattern.', 'is_correct' => true], ['choice_text' => '“Mano” is masculine because of “-o.”', 'is_correct' => false], ['choice_text' => 'Adjectives never agree with nouns.', 'is_correct' => false], ['choice_text' => '“Pequeña” is a noun, not an adjective.', 'is_correct' => false]], 'explanation' => '“Mano” is a feminine exception, so “la” and “pequeña” correctly agree with it.'],
                    ['question' => 'A shop has a new chair and a new table. Which sentence is correct?', 'choices' => [['choice_text' =>'La silla es nueva y la mesa es nueva.', 'is_correct' => true], ['choice_text' =>'El silla es nuevo y el mesa es nuevo.', 'is_correct' => false], ['choice_text' =>'La silla es nuevo y la mesa es nueva.', 'is_correct' => false], ['choice_text' =>'La silla son nueva y la mesa son nueva.', 'is_correct' => false]], 'explanation' => 'Both “silla” and “mesa” are feminine singular nouns, so “la” and “nueva” are used with each.'],
                    ['question' => 'Which sentence best shows why noun gender matters?', 'choices' => [['choice_text' =>'La profesora nueva llega temprano.', 'is_correct' => true], ['choice_text' =>'El profesora nuevo llega temprano.', 'is_correct' => false], ['choice_text' =>'La profesora nuevo llega temprano.', 'is_correct' => false], ['choice_text' =>'La profesor nueva llega temprano.', 'is_correct' => false]], 'explanation' => 'Gender affects both the noun form “profesora” and the matching adjective “nueva,” making agreement visible in the sentence.'],
                ],
            ],
            [
                'title' => 'Mixed Noun Gender Practice',
                'description' => 'Bring together patterns, exceptions, articles, and short sentence choices in a final beginner-level review.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    ['question' => 'Which noun is feminine?', 'choices' => [['choice_text' =>'noche', 'is_correct' => true], ['choice_text' =>'mapa', 'is_correct' => false], ['choice_text' =>'día', 'is_correct' => false], ['choice_text' =>'problema', 'is_correct' => false]], 'explanation' => '“Noche” is feminine: “la noche.”'],
                    ['question' => 'Which phrase is correct?', 'choices' => [['choice_text' =>'el libro', 'is_correct' => true], ['choice_text' =>'la libro', 'is_correct' => false], ['choice_text' =>'una libro', 'is_correct' => false], ['choice_text' =>'los libro', 'is_correct' => false]], 'explanation' => '“Libro” is masculine singular, so “el libro” is correct.'],
                    ['question' => 'Which word is a useful warning against relying only on the last letter?', 'choices' => [['choice_text' =>'mano', 'is_correct' => true], ['choice_text' =>'casa', 'is_correct' => false], ['choice_text' =>'libro', 'is_correct' => false], ['choice_text' =>'mesa', 'is_correct' => false]], 'explanation' => '“Mano” ends in “-o” but is feminine, so it is a good reminder that endings are only clues.'],
                    ['question' => 'Which pair is correct?', 'choices' => [['choice_text' =>'la foto / el mapa', 'is_correct' => true], ['choice_text' =>'el foto / la mapa', 'is_correct' => false], ['choice_text' =>'la foto / la mapa', 'is_correct' => false], ['choice_text' =>'el foto / el mapa', 'is_correct' => false]], 'explanation' => '“Foto” is feminine, while “mapa” is masculine.'],
                    ['question' => 'A learner sees “universidad” for the first time. Which article should be learned with it?', 'choices' => [['choice_text' =>'la', 'is_correct' => true], ['choice_text' =>'el', 'is_correct' => false], ['choice_text' =>'un', 'is_correct' => false], ['choice_text' =>'los', 'is_correct' => false]], 'explanation' => '“Universidad” is feminine singular, so “la universidad” is the standard combination.'],
                    ['question' => 'Which sentence is correct?', 'choices' => [['choice_text' =>'El día es largo.', 'is_correct' => true], ['choice_text' =>'La día es larga.', 'is_correct' => false], ['choice_text' =>'El día es larga.', 'is_correct' => false], ['choice_text' =>'Un día son largo.', 'is_correct' => false]], 'explanation' => '“Día” is masculine, so “el” and “largo” agree with it.'],
                    ['question' => 'Which profession noun can keep the same form for a man and a woman?', 'choices' => [['choice_text' => 'periodista', 'is_correct' => true], ['choice_text' =>'profesor/profesora', 'is_correct' => false], ['choice_text' =>'actor/actriz', 'is_correct' => false], ['choice_text' =>'ingeniero/ingeniera', 'is_correct' => false]], 'explanation' => '“Periodista” is used for both genders; the article can distinguish “el periodista” from “la periodista.”'],
                    ['question' => 'Which sentence correctly describes a female doctor?', 'choices' => [['choice_text' =>'La doctora es amable.', 'is_correct' => true], ['choice_text' =>'El doctora es amable.', 'is_correct' => false], ['choice_text' =>'La doctor es amable.', 'is_correct' => false], ['choice_text' =>'La doctora son amable.', 'is_correct' => false]], 'explanation' => '“Doctora” is feminine singular, so “la doctora” is correct.'],
                    ['question' => 'Which statement about “-a” nouns is correct?', 'choices' => [['choice_text' =>'Many are feminine, but words like “mapa” and “problema” are masculine.', 'is_correct' => true], ['choice_text' =>'Every “-a” noun is feminine.', 'is_correct' => false], ['choice_text' =>'Every “-a” noun is masculine.', 'is_correct' => false], ['choice_text' =>'The ending never gives any useful information.', 'is_correct' => false]], 'explanation' => 'The “-a” pattern is useful, but common exceptions mean you still need to learn individual nouns carefully.'],
                    ['question' => 'Which choice gives the most useful study strategy?', 'choices' => [['choice_text' => 'Learn difficult nouns with their articles and notice common patterns.', 'is_correct' => true], ['choice_text' => 'Memorize only the last letter of every noun.', 'is_correct' => false], ['choice_text' => 'Use “el” whenever you are unsure.', 'is_correct' => false], ['choice_text' => 'Never learn nouns in sentences.', 'is_correct' => false]], 'explanation' => 'Combining patterns with article-plus-noun memorization gives beginners both a useful clue and a reliable reference.'],
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
