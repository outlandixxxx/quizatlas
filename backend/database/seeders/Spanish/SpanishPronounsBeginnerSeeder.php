<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishPronounsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'pronouns')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Subject Pronouns in Everyday Spanish',
                'description' => 'Get comfortable with Spanish subject pronouns and use them naturally in short everyday sentences.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Carlos is speaking about himself. Which pronoun should he use before the verb?',
                        'choices' => [
                            ['choice_text' => 'yo', 'is_correct' => true],
                            ['choice_text' => 'tú', 'is_correct' => false],
                            ['choice_text' => 'él', 'is_correct' => false],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                        ],
                        'explanation' => '“Yo” is the first-person singular subject pronoun, used when the speaker talks about himself.',
                    ],
                    [
                        'question' => 'You are talking directly to one friend. Which subject pronoun fits?',
                        'choices' => [
                            ['choice_text' => 'tú', 'is_correct' => true],
                            ['choice_text' => 'yo', 'is_correct' => false],
                            ['choice_text' => 'usted', 'is_correct' => false],
                            ['choice_text' => 'nosotros', 'is_correct' => false],
                        ],
                        'explanation' => '“Tú” is the familiar singular form used when speaking directly to one person in an informal situation.',
                    ],
                    [
                        'question' => 'Which pronoun means “she”?',
                        'choices' => [
                            ['choice_text' => 'ella', 'is_correct' => true],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'él', 'is_correct' => false],
                            ['choice_text' => 'ellas', 'is_correct' => false],
                        ],
                        'explanation' => '“Ella” means “she” and refers to one female person.',
                    ],
                    [
                        'question' => 'Marta and Ana are discussing their plans. Which pronoun can replace their names?',
                        'choices' => [
                            ['choice_text' => 'ellas', 'is_correct' => true],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'ella', 'is_correct' => false],
                            ['choice_text' => 'nosotros', 'is_correct' => false],
                        ],
                        'explanation' => '“Ellas” is the plural feminine subject pronoun for two or more women or girls.',
                    ],
                    [
                        'question' => 'Which sentence uses “nosotros” correctly?',
                        'choices' => [
                            ['choice_text' => 'Nosotros estudiamos español.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros estudian español.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros estudia español.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros estudias español.', 'is_correct' => false],
                        ],
                        'explanation' => '“Nosotros” takes the first-person plural verb form: “estudiamos.”',
                    ],
                    [
                        'question' => 'A teacher is addressing one student politely. Which pronoun is appropriate in many formal situations?',
                        'choices' => [
                            ['choice_text' => 'usted', 'is_correct' => true],
                            ['choice_text' => 'tú', 'is_correct' => false],
                            ['choice_text' => 'yo', 'is_correct' => false],
                            ['choice_text' => 'nosotros', 'is_correct' => false],
                        ],
                        'explanation' => '“Usted” is the formal singular “you” in Spanish and is commonly used with people you address respectfully.',
                    ],
                    [
                        'question' => 'Which pair has two plural subject pronouns?',
                        'choices' => [
                            ['choice_text' => 'ellos and nosotros', 'is_correct' => true],
                            ['choice_text' => 'ella and usted', 'is_correct' => false],
                            ['choice_text' => 'yo and tú', 'is_correct' => false],
                            ['choice_text' => 'él and ella', 'is_correct' => false],
                        ],
                        'explanation' => '“Ellos” and “nosotros” are both plural subject pronouns.',
                    ],
                    [
                        'question' => 'Luis says, “___ vivo en Rabat.” Which pronoun completes the sentence?',
                        'choices' => [
                            ['choice_text' => 'Yo', 'is_correct' => true],
                            ['choice_text' => 'Tú', 'is_correct' => false],
                            ['choice_text' => 'Él', 'is_correct' => false],
                            ['choice_text' => 'Ellos', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker is talking about himself, so “Yo vivo en Rabat” is correct.',
                    ],
                    [
                        'question' => 'Which sentence is natural when a group of women speaks about themselves?',
                        'choices' => [
                            ['choice_text' => 'Nosotras trabajamos aquí.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros trabajas aquí.', 'is_correct' => false],
                            ['choice_text' => 'Nosotras trabajan aquí.', 'is_correct' => false],
                            ['choice_text' => 'Ellas trabajo aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '“Nosotras” is the first-person plural feminine form and takes “trabajamos.”',
                    ],
                    [
                        'question' => 'Two boys are waiting outside. Which sentence refers to them?',
                        'choices' => [
                            ['choice_text' => 'Ellos esperan afuera.', 'is_correct' => true],
                            ['choice_text' => 'Ellas esperan afuera.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros espera afuera.', 'is_correct' => false],
                            ['choice_text' => 'Él esperan afuera.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ellos” refers to a group of males or a mixed-gender group; “esperan” is the matching plural verb form.',
                    ],
                ],
            ],
            [
                'title' => 'Choosing Subject Pronouns',
                'description' => 'Practice choosing between tú, usted, él, ella, nosotros, ellos, and other subject pronouns in realistic situations.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'You and your brother are ordering lunch together. Which pronoun can represent both of you?',
                        'choices' => [
                            ['choice_text' => 'nosotros', 'is_correct' => true],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'ustedes', 'is_correct' => false],
                            ['choice_text' => 'vosotras', 'is_correct' => false],
                        ],
                        'explanation' => '“Nosotros” means “we” and is appropriate for a group that includes the speaker and another male person.',
                    ],
                    [
                        'question' => 'Which pronoun would Ana use to say “I work at the bank”?',
                        'choices' => [
                            ['choice_text' => 'yo', 'is_correct' => true],
                            ['choice_text' => 'ella', 'is_correct' => false],
                            ['choice_text' => 'tú', 'is_correct' => false],
                            ['choice_text' => 'usted', 'is_correct' => false],
                        ],
                        'explanation' => 'Because Ana is the speaker, she uses first-person singular “yo.”',
                    ],
                    [
                        'question' => 'Which pronoun would you use for one woman who is not speaking?',
                        'choices' => [
                            ['choice_text' => 'ella', 'is_correct' => true],
                            ['choice_text' => 'él', 'is_correct' => false],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'ustedes', 'is_correct' => false],
                        ],
                        'explanation' => '“Ella” refers to one female person who is being talked about.',
                    ],
                    [
                        'question' => 'A hotel receptionist speaks respectfully to a guest. Which subject pronoun is most suitable for the guest?',
                        'choices' => [
                            ['choice_text' => 'usted', 'is_correct' => true],
                            ['choice_text' => 'tú', 'is_correct' => false],
                            ['choice_text' => 'yo', 'is_correct' => false],
                            ['choice_text' => 'nosotros', 'is_correct' => false],
                        ],
                        'explanation' => '“Usted” is a standard formal singular “you,” suitable for respectful customer service.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses “ellas”?',
                        'choices' => [
                            ['choice_text' => 'Ellas viven en Sevilla.', 'is_correct' => true],
                            ['choice_text' => 'Ellas vive en Sevilla.', 'is_correct' => false],
                            ['choice_text' => 'Ellas vivo en Sevilla.', 'is_correct' => false],
                            ['choice_text' => 'Ellas vives en Sevilla.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ellas” takes the third-person plural form “viven.”',
                    ],
                    [
                        'question' => 'Which subject pronoun matches the verb “somos”?',
                        'choices' => [
                            ['choice_text' => 'nosotros', 'is_correct' => true],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'él', 'is_correct' => false],
                            ['choice_text' => 'tú', 'is_correct' => false],
                        ],
                        'explanation' => '“Somos” is the first-person plural form of “ser,” so it goes with “nosotros” or “nosotras.”',
                    ],
                    [
                        'question' => 'Which sentence makes sense when a woman talks about herself and her friend?',
                        'choices' => [
                            ['choice_text' => 'Nosotras vamos al cine.', 'is_correct' => true],
                            ['choice_text' => 'Ellas vamos al cine.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros va al cine.', 'is_correct' => false],
                            ['choice_text' => 'Ella vamos al cine.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker is part of a group of women, so “nosotras” with “vamos” is correct.',
                    ],
                    [
                        'question' => 'A father talks about himself and his daughter. Which pronoun can he use for the two of them?',
                        'choices' => [
                            ['choice_text' => 'nosotros', 'is_correct' => true],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'ellas', 'is_correct' => false],
                            ['choice_text' => 'ustedes', 'is_correct' => false],
                        ],
                        'explanation' => 'When the speaker is included with another person, first-person plural “nosotros” is used for a mixed or male-inclusive group.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Tú tienes una pregunta.', 'is_correct' => true],
                            ['choice_text' => 'Tú tiene una pregunta.', 'is_correct' => false],
                            ['choice_text' => 'Tú tengo una pregunta.', 'is_correct' => false],
                            ['choice_text' => 'Tú tienen una pregunta.', 'is_correct' => false],
                        ],
                        'explanation' => 'The familiar singular “tú” uses the second-person singular verb form “tienes.”',
                    ],
                    [
                        'question' => 'A manager is speaking to several customers formally. Which pronoun can refer to all of them?',
                        'choices' => [
                            ['choice_text' => 'ustedes', 'is_correct' => true],
                            ['choice_text' => 'usted', 'is_correct' => false],
                            ['choice_text' => 'ella', 'is_correct' => false],
                            ['choice_text' => 'nosotros', 'is_correct' => false],
                        ],
                        'explanation' => '“Ustedes” is the plural “you,” used across Spanish-speaking countries for more than one person.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses “él”?',
                        'choices' => [
                            ['choice_text' => 'Él trabaja los lunes.', 'is_correct' => true],
                            ['choice_text' => 'Él trabajan los lunes.', 'is_correct' => false],
                            ['choice_text' => 'Él trabajo los lunes.', 'is_correct' => false],
                            ['choice_text' => 'Él trabajas los lunes.', 'is_correct' => false],
                        ],
                        'explanation' => '“Él” is third-person singular and takes “trabaja.”',
                    ],
                    [
                        'question' => 'A group of men is speaking to you. Which pronoun refers to the group?',
                        'choices' => [
                            ['choice_text' => 'ellos', 'is_correct' => true],
                            ['choice_text' => 'él', 'is_correct' => false],
                            ['choice_text' => 'ellas', 'is_correct' => false],
                            ['choice_text' => 'ella', 'is_correct' => false],
                        ],
                        'explanation' => '“Ellos” refers to a group of men and is also used for mixed-gender groups.',
                    ],
                ],
            ],
            [
                'title' => 'Direct Object Pronouns',
                'description' => 'Learn the beginner forms lo, la, los, and las and use them to avoid repeating a noun.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'In “Veo la película. La veo esta noche,” what does “la” replace?',
                        'choices' => [
                            ['choice_text' => 'la película', 'is_correct' => true],
                            ['choice_text' => 'yo', 'is_correct' => false],
                            ['choice_text' => 'esta noche', 'is_correct' => false],
                            ['choice_text' => 'veo', 'is_correct' => false],
                        ],
                        'explanation' => '“La” is a feminine singular direct object pronoun replacing “la película.”',
                    ],
                    [
                        'question' => 'Which pronoun can replace “el libro” in “Leo el libro”?',
                        'choices' => [
                            ['choice_text' => 'lo', 'is_correct' => true],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                        ],
                        'explanation' => '“El libro” is masculine singular, so its direct object pronoun is “lo.”',
                    ],
                    [
                        'question' => 'Which pronoun replaces “las llaves”?',
                        'choices' => [
                            ['choice_text' => 'las', 'is_correct' => true],
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'lo', 'is_correct' => false],
                        ],
                        'explanation' => '“Las llaves” is feminine plural, so “las” replaces the noun phrase.',
                    ],
                    [
                        'question' => 'Which sentence correctly means “I buy it” when “it” refers to a masculine singular object?',
                        'choices' => [
                            ['choice_text' => 'Lo compro.', 'is_correct' => true],
                            ['choice_text' => 'La compro.', 'is_correct' => false],
                            ['choice_text' => 'Los compro.', 'is_correct' => false],
                            ['choice_text' => 'Las compro.', 'is_correct' => false],
                        ],
                        'explanation' => '“Lo” is the masculine singular direct object pronoun, and “compro” means “I buy.”',
                    ],
                    [
                        'question' => 'Ana has the tickets. She says, “___ tengo.” Which word completes the sentence?',
                        'choices' => [
                            ['choice_text' => 'Los', 'is_correct' => true],
                            ['choice_text' => 'Las', 'is_correct' => false],
                            ['choice_text' => 'La', 'is_correct' => false],
                            ['choice_text' => 'Lo', 'is_correct' => false],
                        ],
                        'explanation' => '“Los” replaces a masculine plural noun such as “los boletos.”',
                    ],
                    [
                        'question' => 'Why do speakers use “la” in “La conozco” when talking about one woman?',
                        'choices' => [
                            ['choice_text' => 'Because “la” is the feminine singular direct object pronoun.', 'is_correct' => true],
                            ['choice_text' => 'Because “la” always means “she” as a subject.', 'is_correct' => false],
                            ['choice_text' => 'Because “la” is a verb.', 'is_correct' => false],
                            ['choice_text' => 'Because “la” always refers to a place.', 'is_correct' => false],
                        ],
                        'explanation' => '“La” is used for a feminine singular direct object, including a woman in a sentence such as “La conozco.”',
                    ],
                    [
                        'question' => 'Which sentence replaces “las canciones” correctly?',
                        'choices' => [
                            ['choice_text' => 'Las escucho.', 'is_correct' => true],
                            ['choice_text' => 'Los escucho.', 'is_correct' => false],
                            ['choice_text' => 'La escucho.', 'is_correct' => false],
                            ['choice_text' => 'Lo escucho.', 'is_correct' => false],
                        ],
                        'explanation' => '“Las” matches the feminine plural noun “las canciones.”',
                    ],
                    [
                        'question' => 'Pedro buys the coffee. If “coffee” is “el café,” which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Lo compra.', 'is_correct' => true],
                            ['choice_text' => 'La compra.', 'is_correct' => false],
                            ['choice_text' => 'Los compra.', 'is_correct' => false],
                            ['choice_text' => 'Las compra.', 'is_correct' => false],
                        ],
                        'explanation' => '“El café” is masculine singular, so the direct object pronoun is “lo.”',
                    ],
                    [
                        'question' => 'Which pair is matched correctly?',
                        'choices' => [
                            ['choice_text' => 'la carta → la', 'is_correct' => true],
                            ['choice_text' => 'el teléfono → la', 'is_correct' => false],
                            ['choice_text' => 'los zapatos → la', 'is_correct' => false],
                            ['choice_text' => 'las fotos → lo', 'is_correct' => false],
                        ],
                        'explanation' => 'A feminine singular noun such as “la carta” is replaced by “la.”',
                    ],
                    [
                        'question' => 'A student writes “La veo” after mentioning “el coche.” What is the problem?',
                        'choices' => [
                            ['choice_text' => 'The pronoun should be “lo” because “coche” is masculine singular.', 'is_correct' => true],
                            ['choice_text' => 'The pronoun should be “las” because the sentence is about an object.', 'is_correct' => false],
                            ['choice_text' => 'The sentence needs “ellos.”', 'is_correct' => false],
                            ['choice_text' => 'There is no problem.', 'is_correct' => false],
                        ],
                        'explanation' => '“Coche” is masculine singular, so “lo veo” is the matching direct object form.',
                    ],
                    [
                        'question' => 'Which sentence refers to two feminine objects that someone is cleaning?',
                        'choices' => [
                            ['choice_text' => 'Las limpio.', 'is_correct' => true],
                            ['choice_text' => 'Los limpio.', 'is_correct' => false],
                            ['choice_text' => 'La limpio.', 'is_correct' => false],
                            ['choice_text' => 'Lo limpio.', 'is_correct' => false],
                        ],
                        'explanation' => '“Las” matches a feminine plural direct object such as “las ventanas.”',
                    ],
                    [
                        'question' => 'What is the main reason to use “lo, la, los, las” in a conversation?',
                        'choices' => [
                            ['choice_text' => 'They let you avoid repeating a known direct object.', 'is_correct' => true],
                            ['choice_text' => 'They replace the subject every time.', 'is_correct' => false],
                            ['choice_text' => 'They always come after the noun.', 'is_correct' => false],
                            ['choice_text' => 'They are used only with people.', 'is_correct' => false],
                        ],
                        'explanation' => 'Object pronouns make speech less repetitive by standing in for a direct object that is already understood.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'La conozco desde hace años.', 'is_correct' => true],
                            ['choice_text' => 'Lo conozco desde hace años.', 'is_correct' => false],
                            ['choice_text' => 'Los conozco desde hace años.', 'is_correct' => false],
                            ['choice_text' => 'Las conozco desde hace años.', 'is_correct' => false],
                        ],
                        'explanation' => 'If the known person is one woman, “la conozco” uses the feminine singular direct object pronoun.',
                    ],
                    [
                        'question' => 'Which pronoun would replace “los documentos” in “Necesito los documentos”?',
                        'choices' => [
                            ['choice_text' => 'los', 'is_correct' => true],
                            ['choice_text' => 'las', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'lo', 'is_correct' => false],
                        ],
                        'explanation' => '“Los documentos” is masculine plural, so “los” is the correct direct object pronoun.',
                    ],
                    [
                        'question' => 'A waiter asks whether you want the dessert. You answer, “Sí, ___ quiero.” If “el postre” is understood, choose the correct pronoun.',
                        'choices' => [
                            ['choice_text' => 'lo', 'is_correct' => true],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                        ],
                        'explanation' => '“El postre” is masculine singular, so “lo quiero” is correct.',
                    ],
                ],
            ],
            [
                'title' => 'Indirect Object and Pronouns with Gustar',
                'description' => 'Practice me, te, le, nos, and les in simple situations involving giving, telling, and likes.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'In “Le doy el libro a Marta,” who receives the book?',
                        'choices' => [
                            ['choice_text' => 'Marta', 'is_correct' => true],
                            ['choice_text' => 'the speaker', 'is_correct' => false],
                            ['choice_text' => 'the book', 'is_correct' => false],
                            ['choice_text' => 'nobody', 'is_correct' => false],
                        ],
                        'explanation' => '“Le” points to the indirect recipient, and “a Marta” tells us who that recipient is.',
                    ],
                    [
                        'question' => 'Which pronoun fits “A mí ___ gusta el café”?',
                        'choices' => [
                            ['choice_text' => 'me', 'is_correct' => true],
                            ['choice_text' => 'te', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'les', 'is_correct' => false],
                        ],
                        'explanation' => 'With “gustar,” “a mí” pairs with “me”: “A mí me gusta el café.”',
                    ],
                    [
                        'question' => 'Which sentence means “I give him the keys”?',
                        'choices' => [
                            ['choice_text' => 'Le doy las llaves.', 'is_correct' => true],
                            ['choice_text' => 'Lo doy las llaves.', 'is_correct' => false],
                            ['choice_text' => 'La doy las llaves.', 'is_correct' => false],
                            ['choice_text' => 'Los doy las llaves.', 'is_correct' => false],
                        ],
                        'explanation' => '“Le” is the indirect object pronoun for “to him,” while “las llaves” is the thing being given.',
                    ],
                    [
                        'question' => 'A group of friends likes pizza. Which sentence is natural?',
                        'choices' => [
                            ['choice_text' => 'Les gusta la pizza.', 'is_correct' => true],
                            ['choice_text' => 'Le gusta la pizza.', 'is_correct' => false],
                            ['choice_text' => 'Los gusta la pizza.', 'is_correct' => false],
                            ['choice_text' => 'Las gustan la pizza.', 'is_correct' => false],
                        ],
                        'explanation' => '“Les” is used for a plural group in the “gustar” construction.',
                    ],
                    [
                        'question' => 'Which sentence tells someone a story?',
                        'choices' => [
                            ['choice_text' => 'Te cuento una historia.', 'is_correct' => true],
                            ['choice_text' => 'Lo cuento una historia.', 'is_correct' => false],
                            ['choice_text' => 'La cuento una historia.', 'is_correct' => false],
                            ['choice_text' => 'Las cuento una historia.', 'is_correct' => false],
                        ],
                        'explanation' => '“Te” marks the person receiving the story, while “una historia” is what is being told.',
                    ],
                    [
                        'question' => 'A teacher gives Ana a book. Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Le da un libro.', 'is_correct' => true],
                            ['choice_text' => 'La da un libro.', 'is_correct' => false],
                            ['choice_text' => 'Lo da un libro.', 'is_correct' => false],
                            ['choice_text' => 'Las da un libro.', 'is_correct' => false],
                        ],
                        'explanation' => '“Le” is the indirect object pronoun used for a singular person such as Ana.',
                    ],
                    [
                        'question' => 'Which sentence is correct for “We tell them the answer”?',
                        'choices' => [
                            ['choice_text' => 'Les decimos la respuesta.', 'is_correct' => true],
                            ['choice_text' => 'Los decimos la respuesta.', 'is_correct' => false],
                            ['choice_text' => 'Las decimos la respuesta.', 'is_correct' => false],
                            ['choice_text' => 'Le decimos la respuesta.', 'is_correct' => false],
                        ],
                        'explanation' => '“Les” is the plural indirect object pronoun. The thing being told is “la respuesta.”',
                    ],
                    [
                        'question' => 'What does “nos” mean in “Nos ayudan”?',
                        'choices' => [
                            ['choice_text' => 'They help us.', 'is_correct' => true],
                            ['choice_text' => 'We help them.', 'is_correct' => false],
                            ['choice_text' => 'They help him.', 'is_correct' => false],
                            ['choice_text' => 'We help ourselves only.', 'is_correct' => false],
                        ],
                        'explanation' => '“Nos” is the first-person plural object pronoun meaning “us.”',
                    ],
                    [
                        'question' => 'Which sentence matches “A Juan le gusta el fútbol”?',
                        'choices' => [
                            ['choice_text' => 'He likes football.', 'is_correct' => true],
                            ['choice_text' => 'They like football.', 'is_correct' => false],
                            ['choice_text' => 'We like football.', 'is_correct' => false],
                            ['choice_text' => 'I like football.', 'is_correct' => false],
                        ],
                        'explanation' => '“A Juan le gusta…” means that Juan likes football.',
                    ],
                    [
                        'question' => 'Which pronoun completes “A nosotros ___ encanta viajar”?',
                        'choices' => [
                            ['choice_text' => 'nos', 'is_correct' => true],
                            ['choice_text' => 'les', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'te', 'is_correct' => false],
                        ],
                        'explanation' => 'With “a nosotros,” the matching pronoun is “nos”: “A nosotros nos encanta viajar.”',
                    ],
                    [
                        'question' => 'A mother says, “Les preparo la cena.” Who does “les” refer to?',
                        'choices' => [
                            ['choice_text' => 'more than one person receiving the dinner', 'is_correct' => true],
                            ['choice_text' => 'the dinner itself', 'is_correct' => false],
                            ['choice_text' => 'the mother', 'is_correct' => false],
                            ['choice_text' => 'one object', 'is_correct' => false],
                        ],
                        'explanation' => '“Les” marks plural recipients—such as the mother’s children or guests.',
                    ],
                ],
            ],
            [
                'title' => 'Reflexive Pronouns',
                'description' => 'Use me, te, se, nos, and se with everyday routines such as getting up, washing, dressing, and preparing for the day.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which sentence means “I get up at seven”?',
                        'choices' => [
                            ['choice_text' => 'Me levanto a las siete.', 'is_correct' => true],
                            ['choice_text' => 'Te levantas a las siete.', 'is_correct' => false],
                            ['choice_text' => 'Se levanta a las siete.', 'is_correct' => false],
                            ['choice_text' => 'Nos levantamos a las siete.', 'is_correct' => false],
                        ],
                        'explanation' => '“Me” is the reflexive pronoun used with “yo”: “me levanto.”',
                    ],
                    [
                        'question' => 'Which pronoun belongs with “tú” in a reflexive sentence?',
                        'choices' => [
                            ['choice_text' => 'te', 'is_correct' => true],
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'se', 'is_correct' => false],
                            ['choice_text' => 'nos', 'is_correct' => false],
                        ],
                        'explanation' => '“Te” is the second-person singular reflexive pronoun used with “tú.”',
                    ],
                    [
                        'question' => 'Carlos washes himself. Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Carlos se lava.', 'is_correct' => true],
                            ['choice_text' => 'Carlos me lava.', 'is_correct' => false],
                            ['choice_text' => 'Carlos te lava.', 'is_correct' => false],
                            ['choice_text' => 'Carlos nos lava.', 'is_correct' => false],
                        ],
                        'explanation' => '“Se” is the third-person singular reflexive pronoun, matching Carlos doing the action to himself.',
                    ],
                    [
                        'question' => 'Ana and Lucía get ready together. Which sentence works?',
                        'choices' => [
                            ['choice_text' => 'Se preparan.', 'is_correct' => true],
                            ['choice_text' => 'Nos prepara.', 'is_correct' => false],
                            ['choice_text' => 'Te preparan.', 'is_correct' => false],
                            ['choice_text' => 'Me preparan.', 'is_correct' => false],
                        ],
                        'explanation' => '“Se preparan” can mean Ana and Lucía get themselves ready.',
                    ],
                    [
                        'question' => 'Which sentence means “We brush our teeth”?',
                        'choices' => [
                            ['choice_text' => 'Nos cepillamos los dientes.', 'is_correct' => true],
                            ['choice_text' => 'Se cepillan los dientes.', 'is_correct' => false],
                            ['choice_text' => 'Te cepillas los dientes.', 'is_correct' => false],
                            ['choice_text' => 'Me cepillo los dientes.', 'is_correct' => false],
                        ],
                        'explanation' => '“Nos” matches “nosotros” in a reflexive routine: “nos cepillamos.”',
                    ],
                    [
                        'question' => 'A learner writes “Yo se ducho.” What should be corrected?',
                        'choices' => [
                            ['choice_text' => 'Use “me”: Yo me ducho.', 'is_correct' => true],
                            ['choice_text' => 'Use “te”: Yo te ducho.', 'is_correct' => false],
                            ['choice_text' => 'Use “nos”: Yo nos ducho.', 'is_correct' => false],
                            ['choice_text' => 'The sentence is already correct.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first-person singular reflexive pronoun is “me,” so “Yo me ducho” is correct.',
                    ],
                    [
                        'question' => 'Which phrase correctly describes one person getting dressed?',
                        'choices' => [
                            ['choice_text' => 'Se viste.', 'is_correct' => true],
                            ['choice_text' => 'Se visten.', 'is_correct' => false],
                            ['choice_text' => 'Nos viste.', 'is_correct' => false],
                            ['choice_text' => 'Te visten.', 'is_correct' => false],
                        ],
                        'explanation' => '“Se viste” is the third-person singular reflexive form, suitable for one person such as él or ella.',
                    ],
                    [
                        'question' => 'What is the key idea behind a reflexive pronoun?',
                        'choices' => [
                            ['choice_text' => 'The subject and the receiver of the action are the same person.', 'is_correct' => true],
                            ['choice_text' => 'The pronoun always replaces the verb.', 'is_correct' => false],
                            ['choice_text' => 'The action must happen to another person.', 'is_correct' => false],
                            ['choice_text' => 'The pronoun is used only in the past tense.', 'is_correct' => false],
                        ],
                        'explanation' => 'In a reflexive construction, the person doing the action is also the person affected by that action.',
                    ],
                    [
                        'question' => 'Which sentence naturally describes a daily routine?',
                        'choices' => [
                            ['choice_text' => 'Me lavo la cara por la mañana.', 'is_correct' => true],
                            ['choice_text' => 'Me lavan la cara por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Te lavo la cara por la mañana. (when I mean myself)', 'is_correct' => false],
                            ['choice_text' => 'Nos lava la cara por la mañana. (when I mean myself)', 'is_correct' => false],
                        ],
                        'explanation' => '“Me lavo la cara” means I wash my own face, a common reflexive routine.',
                    ],
                    [
                        'question' => 'Which sentence refers to two people washing themselves?',
                        'choices' => [
                            ['choice_text' => 'Se lavan.', 'is_correct' => true],
                            ['choice_text' => 'Se lava.', 'is_correct' => false],
                            ['choice_text' => 'Te lavan.', 'is_correct' => false],
                            ['choice_text' => 'Me lavan.', 'is_correct' => false],
                        ],
                        'explanation' => '“Se lavan” is the third-person plural reflexive form for two or more people.',
                    ],
                    [
                        'question' => 'A student says “Nos despertamos a las seis” and means “We wake up at six.” Is the pronoun correct?',
                        'choices' => [
                            ['choice_text' => 'Yes, “nos” matches nosotros.', 'is_correct' => true],
                            ['choice_text' => 'No, it should be “me.”', 'is_correct' => false],
                            ['choice_text' => 'No, it should be “te.”', 'is_correct' => false],
                            ['choice_text' => 'No, it should be “lo.”', 'is_correct' => false],
                        ],
                        'explanation' => '“Nos” is the correct reflexive pronoun for “nosotros,” so “nos despertamos” is natural.',
                    ],
                    [
                        'question' => 'Which pair is matched correctly?',
                        'choices' => [
                            ['choice_text' => 'yo → me', 'is_correct' => true],
                            ['choice_text' => 'tú → se', 'is_correct' => false],
                            ['choice_text' => 'él → nos', 'is_correct' => false],
                            ['choice_text' => 'nosotros → te', 'is_correct' => false],
                        ],
                        'explanation' => 'The reflexive pronoun for “yo” is “me.” The other pairs mismatch person and pronoun.',
                    ],
                    [
                        'question' => 'Why can “se” be confusing for beginners?',
                        'choices' => [
                            ['choice_text' => 'It is used with several third-person subjects and can also appear in other Spanish constructions.', 'is_correct' => true],
                            ['choice_text' => 'It always means “myself.”', 'is_correct' => false],
                            ['choice_text' => 'It only belongs to feminine nouns.', 'is_correct' => false],
                            ['choice_text' => 'It is another form of “yo.”', 'is_correct' => false],
                        ],
                        'explanation' => '“Se” is used with él, ella, usted, ellos, ellas, and ustedes in reflexive constructions, and it also has other uses in Spanish.',
                    ],
                ],
            ],
            [
                'title' => 'Pronouns in Short Conversations',
                'description' => 'Bring subject, direct-object, indirect-object, and reflexive pronouns together in short beginner conversations and everyday choices.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => '“Who is calling?” — “___ estoy llamando.” Which pronoun fits if the speaker means “I am calling”?',
                        'choices' => [
                            ['choice_text' => 'Yo', 'is_correct' => true],
                            ['choice_text' => 'Tú', 'is_correct' => false],
                            ['choice_text' => 'Ella', 'is_correct' => false],
                            ['choice_text' => 'Ellos', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker can say “Yo estoy llamando,” although Spanish often drops the subject pronoun when the verb already makes it clear.',
                    ],
                    [
                        'question' => 'You tell a friend, “I see the car.” Later you say, “___ veo.” If the car is masculine singular, choose the pronoun.',
                        'choices' => [
                            ['choice_text' => 'Lo', 'is_correct' => true],
                            ['choice_text' => 'La', 'is_correct' => false],
                            ['choice_text' => 'Los', 'is_correct' => false],
                            ['choice_text' => 'Las', 'is_correct' => false],
                        ],
                        'explanation' => '“El coche” is masculine singular, so “lo veo” replaces it correctly.',
                    ],
                    [
                        'question' => 'Your friend asks whether you like the book. You answer, “Sí, ___ gusta mucho.” Which word fits?',
                        'choices' => [
                            ['choice_text' => 'me', 'is_correct' => true],
                            ['choice_text' => 'te', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'nos', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker is talking about their own reaction, so “me gusta” means “I like it.”',
                    ],
                    [
                        'question' => '“A Marta ___ doy el mensaje.” Which pronoun belongs in the blank?',
                        'choices' => [
                            ['choice_text' => 'le', 'is_correct' => true],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'lo', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                        ],
                        'explanation' => '“Le” marks Marta as the person receiving the message; “el mensaje” is the direct object.',
                    ],
                    [
                        'question' => 'Which sentence correctly combines a reflexive pronoun with a daily activity?',
                        'choices' => [
                            ['choice_text' => 'Nos acostamos tarde los sábados.', 'is_correct' => true],
                            ['choice_text' => 'Nos acuestan tarde los sábados.', 'is_correct' => false],
                            ['choice_text' => 'Se acostamos tarde los sábados.', 'is_correct' => false],
                            ['choice_text' => 'Me acostamos tarde los sábados.', 'is_correct' => false],
                        ],
                        'explanation' => '“Nos acostamos” is the first-person plural reflexive form for “we go to bed.”',
                    ],
                    [
                        'question' => 'A waiter asks, “¿Quieren el café?” You and your friend answer, “Sí, ___ queremos.” Which pronoun fits if “el café” is the thing you want?',
                        'choices' => [
                            ['choice_text' => 'lo', 'is_correct' => true],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                        ],
                        'explanation' => '“El café” is masculine singular, so the direct object pronoun is “lo.”',
                    ],
                    [
                        'question' => 'Which sentence means “She tells us the truth”?',
                        'choices' => [
                            ['choice_text' => 'Ella nos dice la verdad.', 'is_correct' => true],
                            ['choice_text' => 'Ella les dice la verdad.', 'is_correct' => false],
                            ['choice_text' => 'Ella los dice la verdad.', 'is_correct' => false],
                            ['choice_text' => 'Ella se dice la verdad.', 'is_correct' => false],
                        ],
                        'explanation' => '“Nos” means “to us,” so “Ella nos dice la verdad” matches the English meaning.',
                    ],
                    [
                        'question' => 'You are speaking to one friend. Which sentence uses “te” correctly?',
                        'choices' => [
                            ['choice_text' => 'Te escribo mañana.', 'is_correct' => true],
                            ['choice_text' => 'Te escribe mañana.', 'is_correct' => false],
                            ['choice_text' => 'Te escriben mañana.', 'is_correct' => false],
                            ['choice_text' => 'Te escribimos mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Te escribo” means “I write to you,” with “te” marking the person receiving the message.',
                    ],
                    [
                        'question' => 'Which sentence is the most natural reply to “¿Conoces a Marta?”',
                        'choices' => [
                            ['choice_text' => 'Sí, la conozco.', 'is_correct' => true],
                            ['choice_text' => 'Sí, lo conozco.', 'is_correct' => false],
                            ['choice_text' => 'Sí, le conozco. — for a beginner direct-object exercise', 'is_correct' => false],
                            ['choice_text' => 'Sí, las conozco.', 'is_correct' => false],
                        ],
                        'explanation' => 'In the standard beginner direct-object pattern, “Marta” is one female person, so “la conozco” is used.',
                    ],
                    [
                        'question' => 'A child says, “___ me lavo antes de dormir.” Which subject pronoun can be added for emphasis?',
                        'choices' => [
                            ['choice_text' => 'Yo', 'is_correct' => true],
                            ['choice_text' => 'Ellos', 'is_correct' => false],
                            ['choice_text' => 'Usted', 'is_correct' => false],
                            ['choice_text' => 'Nosotras', 'is_correct' => false],
                        ],
                        'explanation' => '“Yo me lavo…” emphasizes that the speaker is the person doing the reflexive action.',
                    ],
                    [
                        'question' => 'Which exchange is grammatically consistent?',
                        'choices' => [
                            ['choice_text' => '—¿Te gusta el té? —Sí, me gusta.', 'is_correct' => true],
                            ['choice_text' => '—¿Te gusta el té? —Sí, te gusta.', 'is_correct' => false],
                            ['choice_text' => '—¿Te gusta el té? —Sí, le gusta. (meaning me)', 'is_correct' => false],
                            ['choice_text' => '—¿Te gusta el té? —Sí, nos gusta. (meaning me)', 'is_correct' => false],
                        ],
                        'explanation' => 'The question uses “te” for the person being asked, and the reply uses “me” because the speaker is saying “I like it.”',
                    ],
                    [
                        'question' => '“Carlos tiene las llaves.” Later Ana says, “Carlos ___ tiene.” Which pronoun replaces “las llaves”?',
                        'choices' => [
                            ['choice_text' => 'las', 'is_correct' => true],
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'lo', 'is_correct' => false],
                        ],
                        'explanation' => '“Las llaves” is feminine plural, so “las” is the matching direct object pronoun.',
                    ],
                    [
                        'question' => 'Which sentence correctly identifies who receives the object?',
                        'choices' => [
                            ['choice_text' => 'Le compro un regalo a mi madre.', 'is_correct' => true],
                            ['choice_text' => 'La compro un regalo a mi madre.', 'is_correct' => false],
                            ['choice_text' => 'Lo compro un regalo a mi madre.', 'is_correct' => false],
                            ['choice_text' => 'Las compro un regalo a mi madre.', 'is_correct' => false],
                        ],
                        'explanation' => '“Le” is the indirect object pronoun referring to the person receiving the gift; “a mi madre” makes the recipient explicit.',
                    ],
                    [
                        'question' => 'A couple says, “___ vemos mañana.” If they mean “We will see you tomorrow,” which pronoun can refer to the person they are seeing?',
                        'choices' => [
                            ['choice_text' => 'te', 'is_correct' => true],
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'nos', 'is_correct' => false],
                            ['choice_text' => 'se', 'is_correct' => false],
                        ],
                        'explanation' => '“Te vemos mañana” means “We see you tomorrow,” with “te” as the direct object referring to one person.',
                    ],
                    [
                        'question' => 'Which sentence shows the clearest use of a subject pronoun for contrast or emphasis?',
                        'choices' => [
                            ['choice_text' => 'Yo cocino; él limpia.', 'is_correct' => true],
                            ['choice_text' => 'Cocino; limpia.', 'is_correct' => false],
                            ['choice_text' => 'Me cocino; le limpia.', 'is_correct' => false],
                            ['choice_text' => 'Nos cocino; él limpian.', 'is_correct' => false],
                        ],
                        'explanation' => '“Yo” and “él” make the contrast between the two people explicit: I cook, he cleans.',
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
