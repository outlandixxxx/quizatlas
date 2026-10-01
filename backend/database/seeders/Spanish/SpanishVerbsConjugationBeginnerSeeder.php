<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishVerbsConjugationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'verbs-conjugation')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Spanish Verb Basics and Personal Endings',
                'description' => 'Get comfortable with subject pronouns, infinitives, and the idea of changing verb endings to match the person doing the action.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'In the sentence “Yo estudio español”, which word tells you who is studying?',
                        'choices' => [
                            ['choice_text' => 'Yo', 'is_correct' => true],
                            ['choice_text' => 'estudio', 'is_correct' => false],
                            ['choice_text' => 'español', 'is_correct' => false],
                            ['choice_text' => 'the ending -o only', 'is_correct' => false],
                        ],
                        'explanation' => '“Yo” is the subject pronoun and directly identifies the person doing the action. The verb ending also supports that reading.'
                    ],
                    [
                        'question' => 'Which verb is the infinitive form?',
                        'choices' => [
                            ['choice_text' => 'hablar', 'is_correct' => true],
                            ['choice_text' => 'hablo', 'is_correct' => false],
                            ['choice_text' => 'hablas', 'is_correct' => false],
                            ['choice_text' => 'hablan', 'is_correct' => false],
                        ],
                        'explanation' => '“Hablar” is the dictionary or infinitive form. “Hablo”, “hablas”, and “hablan” are conjugated forms.'
                    ],
                    [
                        'question' => 'Which ending is normally used with “yo” for a regular present-tense verb?',
                        'choices' => [
                            ['choice_text' => '-o', 'is_correct' => true],
                            ['choice_text' => '-as', 'is_correct' => false],
                            ['choice_text' => '-a', 'is_correct' => false],
                            ['choice_text' => '-an', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular present-tense verbs commonly use -o for “yo”, such as “hablo”, “como”, and “vivo”.'
                    ],
                    [
                        'question' => 'Lucía is speaking about herself. Which form of “trabajar” fits?',
                        'choices' => [
                            ['choice_text' => 'trabajo', 'is_correct' => true],
                            ['choice_text' => 'trabajas', 'is_correct' => false],
                            ['choice_text' => 'trabaja', 'is_correct' => false],
                            ['choice_text' => 'trabajan', 'is_correct' => false],
                        ],
                        'explanation' => 'Lucía is one person speaking about herself, so the first-person singular form is “trabajo”.'
                    ],
                    [
                        'question' => 'Which sentence correctly matches the subject “nosotros” with “vivir” in the present tense?',
                        'choices' => [
                            ['choice_text' => 'Nosotros vivimos aquí.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros viven aquí.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros vives aquí.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros vivo aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '“Vivimos” is the regular present-tense “nosotros” form of “vivir”.'
                    ],
                    [
                        'question' => 'A friend asks, “Do you study here?” speaking to one person with “tú”. Which answer is correct?',
                        'choices' => [
                            ['choice_text' => 'Sí, estudio aquí.', 'is_correct' => true],
                            ['choice_text' => 'Sí, estudias aquí.', 'is_correct' => false],
                            ['choice_text' => 'Sí, estudia aquí.', 'is_correct' => false],
                            ['choice_text' => 'Sí, estudian aquí.', 'is_correct' => false],
                        ],
                        'explanation' => 'The answer is from the speaker’s point of view, so “yo estudio” is the appropriate form.'
                    ],
                    [
                        'question' => 'Which pair correctly matches the subject and verb form?',
                        'choices' => [
                            ['choice_text' => 'Ellos comen.', 'is_correct' => true],
                            ['choice_text' => 'Ellos comes.', 'is_correct' => false],
                            ['choice_text' => 'Ellos como.', 'is_correct' => false],
                            ['choice_text' => 'Ellos come.', 'is_correct' => false],
                        ],
                        'explanation' => '“Comen” is the third-person plural present form of “comer”, matching “ellos”.'
                    ],
                    [
                        'question' => 'Which sentence uses “tú” with the regular present form of “leer”?',
                        'choices' => [
                            ['choice_text' => 'Tú lees mucho.', 'is_correct' => true],
                            ['choice_text' => 'Tú leo mucho.', 'is_correct' => false],
                            ['choice_text' => 'Tú lee mucho.', 'is_correct' => false],
                            ['choice_text' => 'Tú leen mucho.', 'is_correct' => false],
                        ],
                        'explanation' => 'For regular -er verbs, “tú” uses -es, so “leer” becomes “lees”.'
                    ],
                    [
                        'question' => 'What is the main job of conjugation in a simple Spanish sentence?',
                        'choices' => [
                            ['choice_text' => 'It changes the verb form to show who is doing the action and, when relevant, the tense.', 'is_correct' => true],
                            ['choice_text' => 'It changes a noun into an adjective.', 'is_correct' => false],
                            ['choice_text' => 'It removes the subject from every sentence.', 'is_correct' => false],
                            ['choice_text' => 'It changes a verb into a preposition.', 'is_correct' => false],
                        ],
                        'explanation' => 'Conjugation changes the verb so it matches the person and number, and in other forms it also marks time or mood.'
                    ],
                    [
                        'question' => 'Which sentence is correctly built for a group saying that they speak Spanish?',
                        'choices' => [
                            ['choice_text' => 'Ellos hablan español.', 'is_correct' => true],
                            ['choice_text' => 'Ellos hablas español.', 'is_correct' => false],
                            ['choice_text' => 'Ellos hablo español.', 'is_correct' => false],
                            ['choice_text' => 'Ellos hablamos español.', 'is_correct' => false],
                        ],
                        'explanation' => 'The “ellos/ellas” present form of regular “hablar” is “hablan”, so the sentence is correctly matched.'
                    ],
                    [
                        'question' => 'A learner sees “Marcos y Ana ___ en Madrid” and wants the regular present form of “vivir”. Which completion works?',
                        'choices' => [
                            ['choice_text' => 'viven', 'is_correct' => true],
                            ['choice_text' => 'vive', 'is_correct' => false],
                            ['choice_text' => 'vivimos', 'is_correct' => false],
                            ['choice_text' => 'vives', 'is_correct' => false],
                        ],
                        'explanation' => 'Two people make a third-person plural subject, so “vivir” becomes “viven”.'
                    ],
                    [
                        'question' => 'Which statement would help a beginner avoid a common conjugation mistake?',
                        'choices' => [
                            ['choice_text' => 'Check who the subject is before choosing the verb ending.', 'is_correct' => true],
                            ['choice_text' => 'Always use the “yo” form for short sentences.', 'is_correct' => false],
                            ['choice_text' => 'Use the infinitive after every subject pronoun.', 'is_correct' => false],
                            ['choice_text' => 'Change the noun instead of the verb.', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject tells you which person and number the verb should agree with. This is the quickest reliable check for beginners.'
                    ],
                ],
            ],
            [
                'title' => 'Regular -AR Verbs in Everyday Spanish',
                'description' => 'Practice common regular -ar verbs such as hablar, trabajar, estudiar, escuchar, and comprar in everyday situations.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'What is the correct “yo” form of “hablar” in the present tense?',
                        'choices' => [
                            ['choice_text' => 'hablo', 'is_correct' => true],
                            ['choice_text' => 'hablas', 'is_correct' => false],
                            ['choice_text' => 'habla', 'is_correct' => false],
                            ['choice_text' => 'hablan', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular -ar verbs use -o for “yo”, giving “yo hablo”.'
                    ],
                    [
                        'question' => 'Choose the sentence that matches “Marta” with “estudiar”.',
                        'choices' => [
                            ['choice_text' => 'Marta estudia medicina.', 'is_correct' => true],
                            ['choice_text' => 'Marta estudio medicina.', 'is_correct' => false],
                            ['choice_text' => 'Marta estudias medicina.', 'is_correct' => false],
                            ['choice_text' => 'Marta estudian medicina.', 'is_correct' => false],
                        ],
                        'explanation' => 'A singular third-person subject such as Marta takes -a with a regular -ar verb: “estudia”.'
                    ],
                    [
                        'question' => 'Which form completes “Nosotros ___ en una oficina” with “trabajar”?',
                        'choices' => [
                            ['choice_text' => 'trabajamos', 'is_correct' => true],
                            ['choice_text' => 'trabajan', 'is_correct' => false],
                            ['choice_text' => 'trabajáis', 'is_correct' => false],
                            ['choice_text' => 'trabajas', 'is_correct' => false],
                        ],
                        'explanation' => 'For “nosotros”, regular -ar verbs take -amos: “trabajamos”.'
                    ],
                    [
                        'question' => 'A waiter asks what your friends do. Which answer fits “ellos” and “escuchar”?',
                        'choices' => [
                            ['choice_text' => 'Ellos escuchan música.', 'is_correct' => true],
                            ['choice_text' => 'Ellos escucha música.', 'is_correct' => false],
                            ['choice_text' => 'Ellos escucho música.', 'is_correct' => false],
                            ['choice_text' => 'Ellos escuchas música.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ellos” takes the third-person plural ending -an, so “escuchan” is correct.'
                    ],
                    [
                        'question' => 'Which sentence uses “comprar” correctly for one person speaking about themselves?',
                        'choices' => [
                            ['choice_text' => 'Compro pan por la mañana.', 'is_correct' => true],
                            ['choice_text' => 'Compra pan por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Compras pan por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Compran pan por la mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker is “yo”, so the regular -ar ending is -o: “compro”.'
                    ],
                    [
                        'question' => 'A student says “Tú estudia mucho.” What is the natural correction?',
                        'choices' => [
                            ['choice_text' => 'Tú estudias mucho.', 'is_correct' => true],
                            ['choice_text' => 'Tú estudio mucho.', 'is_correct' => false],
                            ['choice_text' => 'Tú estudian mucho.', 'is_correct' => false],
                            ['choice_text' => 'Tú estudiamos mucho.', 'is_correct' => false],
                        ],
                        'explanation' => '“Tú” uses -as with regular -ar verbs, so “estudias” is the correct form.'
                    ],
                    [
                        'question' => 'Which pair contains two correctly conjugated regular -ar verbs?',
                        'choices' => [
                            ['choice_text' => 'yo camino / nosotros caminamos', 'is_correct' => true],
                            ['choice_text' => 'yo caminas / nosotros caminan', 'is_correct' => false],
                            ['choice_text' => 'yo camina / nosotros camino', 'is_correct' => false],
                            ['choice_text' => 'yo caminamos / nosotros camino', 'is_correct' => false],
                        ],
                        'explanation' => '“Camino” matches “yo”, while “caminamos” matches “nosotros”. Both are regular present forms.'
                    ],
                    [
                        'question' => 'Which sentence sounds natural for a family who cooks together?',
                        'choices' => [
                            ['choice_text' => 'Nosotros cocinamos juntos.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros cocinan juntos.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros cocino juntos.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros cocinas juntos.', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject is “nosotros”, and regular -ar verbs use -amos in that form: “cocinamos”.'
                    ],
                    [
                        'question' => 'Which sentence correctly uses “necesitar” with a singular third-person subject?',
                        'choices' => [
                            ['choice_text' => 'Pedro necesita ayuda.', 'is_correct' => true],
                            ['choice_text' => 'Pedro necesito ayuda.', 'is_correct' => false],
                            ['choice_text' => 'Pedro necesitas ayuda.', 'is_correct' => false],
                            ['choice_text' => 'Pedro necesitamos ayuda.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pedro is one person, so regular “necesitar” takes the third-person singular ending -a: “necesita”.'
                    ],
                    [
                        'question' => 'Which form of the regular -ar verb “practicar” completes “¿Qué ___ tú los fines de semana?”',
                        'choices' => [
                            ['choice_text' => 'practicas', 'is_correct' => true],
                            ['choice_text' => 'practica', 'is_correct' => false],
                            ['choice_text' => 'practican', 'is_correct' => false],
                            ['choice_text' => 'practico', 'is_correct' => false],
                        ],
                        'explanation' => 'With “tú”, a regular -ar verb uses -as, so “practicas” is correct.'
                    ],
                    [
                        'question' => 'A sign at a shop says, “Aquí trabajamos hasta las ocho.” What does “trabajamos” tell you?',
                        'choices' => [
                            ['choice_text' => 'The people speaking include themselves in the subject “we”.', 'is_correct' => true],
                            ['choice_text' => 'One customer is being addressed.', 'is_correct' => false],
                            ['choice_text' => 'Only one employee is speaking about herself.', 'is_correct' => false],
                            ['choice_text' => 'The action happened yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => '“Trabajamos” is the first-person plural present form, so the speaker is included in a “we” group.'
                    ],
                    [
                        'question' => 'Which sentence contains a correctly conjugated regular -ar verb and a clear subject?',
                        'choices' => [
                            ['choice_text' => 'Mis padres viajan en verano.', 'is_correct' => true],
                            ['choice_text' => 'Mis padres viajas en verano.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres viajo en verano.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres viajamos en verano.', 'is_correct' => false],
                        ],
                        'explanation' => '“Mis padres” is third-person plural, so “viajan” is the correct present form of “viajar”.'
                    ],
                ],
            ],
            [
                'title' => 'Regular -ER and -IR Verbs',
                'description' => 'Compare regular -er and -ir endings and use everyday verbs such as comer, beber, aprender, vivir, escribir, and abrir.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which “yo” form is correct for “comer”?',
                        'choices' => [
                            ['choice_text' => 'como', 'is_correct' => true],
                            ['choice_text' => 'comes', 'is_correct' => false],
                            ['choice_text' => 'come', 'is_correct' => false],
                            ['choice_text' => 'comen', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular -er verbs use -o for “yo”, giving “yo como”.'
                    ],
                    [
                        'question' => 'Which sentence correctly uses “beber” with “tú”?',
                        'choices' => [
                            ['choice_text' => 'Tú bebes agua.', 'is_correct' => true],
                            ['choice_text' => 'Tú bebe agua.', 'is_correct' => false],
                            ['choice_text' => 'Tú bebo agua.', 'is_correct' => false],
                            ['choice_text' => 'Tú beben agua.', 'is_correct' => false],
                        ],
                        'explanation' => 'The regular -er “tú” ending is -es, so “beber” becomes “bebes”.'
                    ],
                    [
                        'question' => 'Which form completes “Nosotros ___ español” with “aprender”?',
                        'choices' => [
                            ['choice_text' => 'aprendemos', 'is_correct' => true],
                            ['choice_text' => 'aprenden', 'is_correct' => false],
                            ['choice_text' => 'aprendes', 'is_correct' => false],
                            ['choice_text' => 'aprendo', 'is_correct' => false],
                        ],
                        'explanation' => 'For regular -er verbs, “nosotros” takes -emos: “aprendemos”.'
                    ],
                    [
                        'question' => 'Which sentence correctly uses “vivir” with “ella”?',
                        'choices' => [
                            ['choice_text' => 'Ella vive en Sevilla.', 'is_correct' => true],
                            ['choice_text' => 'Ella vivo en Sevilla.', 'is_correct' => false],
                            ['choice_text' => 'Ella vives en Sevilla.', 'is_correct' => false],
                            ['choice_text' => 'Ella vivimos en Sevilla.', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular -ir verbs use -e for third-person singular, so “vive” matches “ella”.'
                    ],
                    [
                        'question' => 'A student writes “Ellos escriben correos.” Which infinitive does the verb come from?',
                        'choices' => [
                            ['choice_text' => 'escribir', 'is_correct' => true],
                            ['choice_text' => 'escribar', 'is_correct' => false],
                            ['choice_text' => 'escriber', 'is_correct' => false],
                            ['choice_text' => 'escribe', 'is_correct' => false],
                        ],
                        'explanation' => '“Escriben” is the third-person plural present form of “escribir”.'
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Nosotros abrimos la puerta.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros abres la puerta.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros abre la puerta.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros abren la puerta.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first-person plural form of regular “abrir” is “abrimos”.'
                    ],
                    [
                        'question' => 'Which ending belongs to “ellos” for a regular -er verb?',
                        'choices' => [
                            ['choice_text' => '-en', 'is_correct' => true],
                            ['choice_text' => '-an', 'is_correct' => false],
                            ['choice_text' => '-imos', 'is_correct' => false],
                            ['choice_text' => '-éis', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular -er verbs use -en with “ellos/ellas/ustedes”, as in “comen” and “aprenden”.'
                    ],
                    [
                        'question' => 'Which ending belongs to “nosotros” for a regular -ir verb?',
                        'choices' => [
                            ['choice_text' => '-imos', 'is_correct' => true],
                            ['choice_text' => '-emos', 'is_correct' => false],
                            ['choice_text' => '-imos only in the past', 'is_correct' => false],
                            ['choice_text' => '-amos', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular -ir verbs use -imos with “nosotros”, for example “vivimos” and “abrimos”.'
                    ],
                    [
                        'question' => 'Which pair is correctly matched?',
                        'choices' => [
                            ['choice_text' => 'tú comes / tú vives', 'is_correct' => true],
                            ['choice_text' => 'tú come / tú vive', 'is_correct' => false],
                            ['choice_text' => 'tú comemos / tú vivimos', 'is_correct' => false],
                            ['choice_text' => 'tú comen / tú viven', 'is_correct' => false],
                        ],
                        'explanation' => 'Both are second-person singular forms: “comes” from comer and “vives” from vivir.'
                    ],
                    [
                        'question' => 'Which sentence would a teacher expect from a class talking about what they learn?',
                        'choices' => [
                            ['choice_text' => 'Aprendemos palabras nuevas.', 'is_correct' => true],
                            ['choice_text' => 'Aprenden palabras nuevas.', 'is_correct' => false],
                            ['choice_text' => 'Aprendo palabras nuevas.', 'is_correct' => false],
                            ['choice_text' => 'Aprende palabras nuevas.', 'is_correct' => false],
                        ],
                        'explanation' => 'The intended subject is “we”, so “aprendemos” is the correct first-person plural form.'
                    ],
                    [
                        'question' => 'A sign says “Vivimos aquí.” What does the verb form tell you?',
                        'choices' => [
                            ['choice_text' => 'The speaker is included in a group of people living there.', 'is_correct' => true],
                            ['choice_text' => 'The speaker is talking only about one other person.', 'is_correct' => false],
                            ['choice_text' => 'The action must be in the past.', 'is_correct' => false],
                            ['choice_text' => 'The subject is “tú”.', 'is_correct' => false],
                        ],
                        'explanation' => '“Vivimos” is first-person plural present tense, so it corresponds to “nosotros”.'
                    ],
                    [
                        'question' => 'Which sentence contains a mismatch between the subject and a regular verb ending?',
                        'choices' => [
                            ['choice_text' => 'Ellos bebe café.', 'is_correct' => true],
                            ['choice_text' => 'Ellos beben café.', 'is_correct' => false],
                            ['choice_text' => 'Ella bebe café.', 'is_correct' => false],
                            ['choice_text' => 'Yo bebo café.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ellos” requires the plural form “beben”, not the singular “bebe”.'
                    ],
                    [
                        'question' => 'Which choice best shows the difference between regular -er and -ir “nosotros” endings?',
                        'choices' => [
                            ['choice_text' => 'comemos vs. vivimos', 'is_correct' => true],
                            ['choice_text' => 'comes vs. viven', 'is_correct' => false],
                            ['choice_text' => 'como vs. vivo', 'is_correct' => false],
                            ['choice_text' => 'comen vs. vive', 'is_correct' => false],
                        ],
                        'explanation' => 'For “nosotros”, regular -er uses -emos (“comemos”), while regular -ir uses -imos (“vivimos”).'
                    ],
                ],
            ],
            [
                'title' => 'High-Frequency Irregular Verbs',
                'description' => 'Learn practical present-tense forms of ser, estar, tener, ir, and hacer without overwhelming the beginner with advanced irregular patterns.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Which form of “ser” completes “Yo ___ estudiante”?',
                        'choices' => [
                            ['choice_text' => 'soy', 'is_correct' => true],
                            ['choice_text' => 'eres', 'is_correct' => false],
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'son', 'is_correct' => false],
                        ],
                        'explanation' => 'The first-person singular present form of “ser” is “soy”.'
                    ],
                    [
                        'question' => 'Which sentence is correct with “estar” and “yo”?',
                        'choices' => [
                            ['choice_text' => 'Estoy en casa.', 'is_correct' => true],
                            ['choice_text' => 'Estás en casa.', 'is_correct' => false],
                            ['choice_text' => 'Estamos en casa.', 'is_correct' => false],
                            ['choice_text' => 'Está en casa.', 'is_correct' => false],
                        ],
                        'explanation' => 'The “yo” form of “estar” is “estoy”.'
                    ],
                    [
                        'question' => 'Maria says, “___ veinte años.” Which verb form completes the sentence?',
                        'choices' => [
                            ['choice_text' => 'Tengo', 'is_correct' => true],
                            ['choice_text' => 'Tiene', 'is_correct' => false],
                            ['choice_text' => 'Tienes', 'is_correct' => false],
                            ['choice_text' => 'Tenemos', 'is_correct' => false],
                        ],
                        'explanation' => 'Spanish uses “tener” to express age, so Maria says “Tengo veinte años.”'
                    ],
                    [
                        'question' => 'Which sentence correctly uses “ir” with “nosotros”?',
                        'choices' => [
                            ['choice_text' => 'Vamos al mercado.', 'is_correct' => true],
                            ['choice_text' => 'Van al mercado.', 'is_correct' => false],
                            ['choice_text' => 'Vas al mercado.', 'is_correct' => false],
                            ['choice_text' => 'Voy al mercado.', 'is_correct' => false],
                        ],
                        'explanation' => 'The present “nosotros” form of “ir” is “vamos”.'
                    ],
                    [
                        'question' => 'Which form of “hacer” fits “Yo ___ la tarea por la tarde”?',
                        'choices' => [
                            ['choice_text' => 'hago', 'is_correct' => true],
                            ['choice_text' => 'haces', 'is_correct' => false],
                            ['choice_text' => 'hace', 'is_correct' => false],
                            ['choice_text' => 'hacemos', 'is_correct' => false],
                        ],
                        'explanation' => '“Hago” is the irregular first-person singular present form of “hacer”.'
                    ],
                    [
                        'question' => 'A friend says “Juan ___ cansado hoy.” Which form of “estar” is correct?',
                        'choices' => [
                            ['choice_text' => 'está', 'is_correct' => true],
                            ['choice_text' => 'estoy', 'is_correct' => false],
                            ['choice_text' => 'estás', 'is_correct' => false],
                            ['choice_text' => 'están', 'is_correct' => false],
                        ],
                        'explanation' => 'Juan is one third-person singular subject, so the correct form is “está”.'
                    ],
                    [
                        'question' => 'Which sentence correctly states a permanent or identifying fact using “ser”?',
                        'choices' => [
                            ['choice_text' => 'Soy de Marruecos.', 'is_correct' => true],
                            ['choice_text' => 'Estoy de Marruecos.', 'is_correct' => false],
                            ['choice_text' => 'Eres de Marruecos.', 'is_correct' => false],
                            ['choice_text' => 'Son de Marruecos.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ser” is commonly used for origin, so “Soy de Marruecos” means “I am from Morocco.”'
                    ],
                    [
                        'question' => 'Which sentence correctly uses “tener” for a plural subject?',
                        'choices' => [
                            ['choice_text' => 'Mis amigos tienen un coche.', 'is_correct' => true],
                            ['choice_text' => 'Mis amigos tiene un coche.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos tienes un coche.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos tenemos un coche.', 'is_correct' => false],
                        ],
                        'explanation' => '“Mis amigos” is third-person plural, so “tener” becomes “tienen”.'
                    ],
                    [
                        'question' => 'A parent says, “Ahora ___ a casa.” Which form of “ir” is natural for “I am going home now”?',
                        'choices' => [
                            ['choice_text' => 'voy', 'is_correct' => true],
                            ['choice_text' => 'vas', 'is_correct' => false],
                            ['choice_text' => 'va', 'is_correct' => false],
                            ['choice_text' => 'vamos', 'is_correct' => false],
                        ],
                        'explanation' => 'The first-person singular form of “ir” is “voy”, so “Ahora voy a casa” is correct.'
                    ],
                    [
                        'question' => 'Which pair is correctly matched?',
                        'choices' => [
                            ['choice_text' => 'yo soy / tú eres', 'is_correct' => true],
                            ['choice_text' => 'yo eres / tú soy', 'is_correct' => false],
                            ['choice_text' => 'yo es / tú son', 'is_correct' => false],
                            ['choice_text' => 'yo son / tú es', 'is_correct' => false],
                        ],
                        'explanation' => 'The present forms are “yo soy” and “tú eres”. Both must be memorized because “ser” is irregular.'
                    ],
                    [
                        'question' => 'Which sentence uses “hacer” correctly with “nosotros”?',
                        'choices' => [
                            ['choice_text' => 'Hacemos la cena juntos.', 'is_correct' => true],
                            ['choice_text' => 'Hacen la cena juntos.', 'is_correct' => false],
                            ['choice_text' => 'Haces la cena juntos.', 'is_correct' => false],
                            ['choice_text' => 'Hago la cena juntos.', 'is_correct' => false],
                        ],
                        'explanation' => '“Hacemos” is the first-person plural form of “hacer”.'
                    ],
                    [
                        'question' => 'Which beginner rule is safest for “ser”, “estar”, “tener”, “ir”, and “hacer”?',
                        'choices' => [
                            ['choice_text' => 'Learn their most common present-tense forms individually because they do not all follow regular patterns.', 'is_correct' => true],
                            ['choice_text' => 'Replace every irregular verb with a regular -ar pattern.', 'is_correct' => false],
                            ['choice_text' => 'Add -o, -as, -a, -amos, -an to every verb without checking the verb.', 'is_correct' => false],
                            ['choice_text' => 'Use the infinitive after every subject pronoun.', 'is_correct' => false],
                        ],
                        'explanation' => 'These very common verbs contain irregular forms, so memorizing their high-frequency present forms is more reliable than applying one regular pattern blindly.'
                    ],
                    [
                        'question' => 'Which sentence correctly describes a person’s present location?',
                        'choices' => [
                            ['choice_text' => 'Ana está en la biblioteca.', 'is_correct' => true],
                            ['choice_text' => 'Ana soy en la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Ana están en la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Ana eres en la biblioteca.', 'is_correct' => false],
                        ],
                        'explanation' => 'For a singular third-person subject such as Ana, the present form of “estar” is “está”, which is commonly used for location.'
                    ],
                ],
            ],
            [
                'title' => 'Verb Choice in Everyday Situations',
                'description' => 'Use common present-tense verbs in short real-life situations and decide which conjugated form best fits the speaker and context.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'You are speaking about yourself: “I live in Rabat.” Which sentence works?',
                        'choices' => [
                            ['choice_text' => 'Vivo en Rabat.', 'is_correct' => true],
                            ['choice_text' => 'Vives en Rabat.', 'is_correct' => false],
                            ['choice_text' => 'Vive en Rabat.', 'is_correct' => false],
                            ['choice_text' => 'Viven en Rabat.', 'is_correct' => false],
                        ],
                        'explanation' => '“Vivo” is the first-person singular present form of “vivir”.'
                    ],
                    [
                        'question' => 'A receptionist speaks to a customer using “usted”. Which is correct with “necesitar”?',
                        'choices' => [
                            ['choice_text' => 'Usted necesita ayuda.', 'is_correct' => true],
                            ['choice_text' => 'Usted necesitas ayuda.', 'is_correct' => false],
                            ['choice_text' => 'Usted necesito ayuda.', 'is_correct' => false],
                            ['choice_text' => 'Usted necesitan ayuda.', 'is_correct' => false],
                        ],
                        'explanation' => '“Usted” takes the third-person singular verb form, so “necesita” is correct.'
                    ],
                    [
                        'question' => 'Which response fits the question “¿Qué hacen tus padres?”',
                        'choices' => [
                            ['choice_text' => 'Trabajan en una escuela.', 'is_correct' => true],
                            ['choice_text' => 'Trabajo en una escuela.', 'is_correct' => false],
                            ['choice_text' => 'Trabajas en una escuela.', 'is_correct' => false],
                            ['choice_text' => 'Trabaja en una escuela.', 'is_correct' => false],
                        ],
                        'explanation' => '“Tus padres” is a plural third-person subject, so the answer should use “trabajan”.'
                    ],
                    [
                        'question' => 'A friend asks why you are in the kitchen. Which sentence uses “estar” correctly?',
                        'choices' => [
                            ['choice_text' => 'Estoy en la cocina.', 'is_correct' => true],
                            ['choice_text' => 'Está en la cocina.', 'is_correct' => false],
                            ['choice_text' => 'Están en la cocina.', 'is_correct' => false],
                            ['choice_text' => 'Estás en la cocina.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker is talking about themselves, so the first-person singular form is “estoy”.'
                    ],
                    [
                        'question' => 'Which sentence would a shop assistant use when talking about what the store sells?',
                        'choices' => [
                            ['choice_text' => 'Vendemos ropa.', 'is_correct' => true],
                            ['choice_text' => 'Venden ropa.', 'is_correct' => false],
                            ['choice_text' => 'Vendes ropa.', 'is_correct' => false],
                            ['choice_text' => 'Vendo ropa.', 'is_correct' => false],
                        ],
                        'explanation' => 'The assistant includes the shop team as “we”, so “vendemos” is the natural first-person plural form.'
                    ],
                    [
                        'question' => 'Which question correctly asks one friend what they eat?',
                        'choices' => [
                            ['choice_text' => '¿Qué comes?', 'is_correct' => true],
                            ['choice_text' => '¿Qué como?', 'is_correct' => false],
                            ['choice_text' => '¿Qué come?', 'is_correct' => false],
                            ['choice_text' => '¿Qué comen?', 'is_correct' => false],
                        ],
                        'explanation' => '“Tú” uses the second-person singular form “comes” with the regular verb “comer”.'
                    ],
                    [
                        'question' => 'A family is getting ready to leave. One parent says, “Nosotros ___ ahora.” Which form of “ir” fits?',
                        'choices' => [
                            ['choice_text' => 'vamos', 'is_correct' => true],
                            ['choice_text' => 'van', 'is_correct' => false],
                            ['choice_text' => 'voy', 'is_correct' => false],
                            ['choice_text' => 'vas', 'is_correct' => false],
                        ],
                        'explanation' => '“Nosotros” uses the present form “vamos” with “ir”.'
                    ],
                    [
                        'question' => 'Which sentence correctly tells someone what Diego is doing every morning?',
                        'choices' => [
                            ['choice_text' => 'Diego toma café cada mañana.', 'is_correct' => true],
                            ['choice_text' => 'Diego tomo café cada mañana.', 'is_correct' => false],
                            ['choice_text' => 'Diego tomas café cada mañana.', 'is_correct' => false],
                            ['choice_text' => 'Diego tomamos café cada mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'Diego is a singular third-person subject, so the regular -ar verb “tomar” becomes “toma”.'
                    ],
                    [
                        'question' => 'A teacher asks a class, “¿Entienden la pregunta?” Which answer from the class is appropriate?',
                        'choices' => [
                            ['choice_text' => 'Sí, entendemos.', 'is_correct' => true],
                            ['choice_text' => 'Sí, entienden.', 'is_correct' => false],
                            ['choice_text' => 'Sí, entiendes.', 'is_correct' => false],
                            ['choice_text' => 'Sí, entiendo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The class answers as “we”, so the appropriate form is first-person plural: “entendemos”.'
                    ],
                    [
                        'question' => 'Which sentence is correct when speaking politely to one customer?',
                        'choices' => [
                            ['choice_text' => '¿Usted trabaja aquí?', 'is_correct' => true],
                            ['choice_text' => '¿Usted trabajas aquí?', 'is_correct' => false],
                            ['choice_text' => '¿Usted trabajo aquí?', 'is_correct' => false],
                            ['choice_text' => '¿Usted trabajan aquí?', 'is_correct' => false],
                        ],
                        'explanation' => '“Usted” uses the third-person singular verb form, so “trabaja” is correct.'
                    ],
                    [
                        'question' => 'A friend says, “Yo hago deporte.” What does “hago” show?',
                        'choices' => [
                            ['choice_text' => 'The speaker is using the first-person singular form of “hacer”.', 'is_correct' => true],
                            ['choice_text' => 'The speaker is addressing a group.', 'is_correct' => false],
                            ['choice_text' => 'The speaker is talking about yesterday.', 'is_correct' => false],
                            ['choice_text' => 'The verb is still in the infinitive.', 'is_correct' => false],
                        ],
                        'explanation' => '“Hago” is the irregular present-tense “yo” form of “hacer”.'
                    ],
                    [
                        'question' => 'Which response best completes “¿Dónde viven tus abuelos?”',
                        'choices' => [
                            ['choice_text' => 'Viven en Valencia.', 'is_correct' => true],
                            ['choice_text' => 'Vivo en Valencia.', 'is_correct' => false],
                            ['choice_text' => 'Vives en Valencia.', 'is_correct' => false],
                            ['choice_text' => 'Vive en Valencia.', 'is_correct' => false],
                        ],
                        'explanation' => '“Tus abuelos” is third-person plural, so “viven” is the correct form of “vivir”.'
                    ],
                    [
                        'question' => 'Which sentence shows correct agreement after changing the subject from “yo” to “ellos”?',
                        'choices' => [
                            ['choice_text' => 'Yo escribo correos. → Ellos escriben correos.', 'is_correct' => true],
                            ['choice_text' => 'Yo escribo correos. → Ellos escribes correos.', 'is_correct' => false],
                            ['choice_text' => 'Yo escribo correos. → Ellos escribo correos.', 'is_correct' => false],
                            ['choice_text' => 'Yo escribo correos. → Ellos escribimos correos.', 'is_correct' => false],
                        ],
                        'explanation' => 'Changing “yo” to “ellos” requires the third-person plural form, so “escribo” becomes “escriben”.'
                    ],
                    [
                        'question' => 'A learner says “Nosotros vive en Casablanca.” What is the best correction?',
                        'choices' => [
                            ['choice_text' => 'Nosotros vivimos en Casablanca.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros viven en Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros vives en Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros vivo en Casablanca.', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject is first-person plural, so the regular -ir verb “vivir” needs the -imos ending: “vivimos”.'
                    ],
                    [
                        'question' => 'Which choice shows a useful way to check a present-tense verb before speaking?',
                        'choices' => [
                            ['choice_text' => 'Identify the subject, then choose the verb form that matches it.', 'is_correct' => true],
                            ['choice_text' => 'Pick the shortest verb form.', 'is_correct' => false],
                            ['choice_text' => 'Always use the infinitive.', 'is_correct' => false],
                            ['choice_text' => 'Change the subject until the original verb sounds right.', 'is_correct' => false],
                        ],
                        'explanation' => 'Subject–verb agreement is the most useful beginner check: first identify who is doing the action, then select the matching form.'
                    ],
                ],
            ],
            [
                'title' => 'Mixed Present-Tense Conjugation Review',
                'description' => 'Bring regular and high-frequency irregular verbs together in short, practical examples that require careful subject recognition.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Which form completes “Yo ___ mucho español” with “estudiar”?',
                        'choices' => [
                            ['choice_text' => 'estudio', 'is_correct' => true],
                            ['choice_text' => 'estudias', 'is_correct' => false],
                            ['choice_text' => 'estudia', 'is_correct' => false],
                            ['choice_text' => 'estudian', 'is_correct' => false],
                        ],
                        'explanation' => '“Yo” takes the -o ending with regular -ar verbs, so “estudio” is correct.'
                    ],
                    [
                        'question' => 'Which sentence contains a correctly conjugated -er verb?',
                        'choices' => [
                            ['choice_text' => 'Nosotros bebemos agua.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros beben agua.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros bebes agua.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros bebo agua.', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular -er verbs use -emos with “nosotros”, giving “bebemos”.'
                    ],
                    [
                        'question' => 'Which sentence is correct with “ella” and “escribir”?',
                        'choices' => [
                            ['choice_text' => 'Ella escribe una carta.', 'is_correct' => true],
                            ['choice_text' => 'Ella escribo una carta.', 'is_correct' => false],
                            ['choice_text' => 'Ella escribes una carta.', 'is_correct' => false],
                            ['choice_text' => 'Ella escribimos una carta.', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular -ir verbs use -e in third-person singular, so “escribe” matches “ella”.'
                    ],
                    [
                        'question' => 'Which form fits “Mi hermano ___ médico” if you want to identify his profession?',
                        'choices' => [
                            ['choice_text' => 'es', 'is_correct' => true],
                            ['choice_text' => 'está', 'is_correct' => false],
                            ['choice_text' => 'soy', 'is_correct' => false],
                            ['choice_text' => 'son', 'is_correct' => false],
                        ],
                        'explanation' => '“Ser” is used for identification and professions, and “es” matches the singular subject “mi hermano”.'
                    ],
                    [
                        'question' => 'A friend asks, “¿Qué haces?” Which reply is the most natural?',
                        'choices' => [
                            ['choice_text' => 'Hago la cena.', 'is_correct' => true],
                            ['choice_text' => 'Hace la cena.', 'is_correct' => false],
                            ['choice_text' => 'Haces la cena.', 'is_correct' => false],
                            ['choice_text' => 'Hacemos la cena.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks what “you” do, but the reply is about the speaker: “Yo hago la cena.”'
                    ],
                    [
                        'question' => 'Which sentence correctly combines “nosotros” with “ir” and “comer”?',
                        'choices' => [
                            ['choice_text' => 'Vamos a comer ahora.', 'is_correct' => true],
                            ['choice_text' => 'Van a comer ahora.', 'is_correct' => false],
                            ['choice_text' => 'Vamos a comes ahora.', 'is_correct' => false],
                            ['choice_text' => 'Voy a comen ahora.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first verb “ir” is conjugated to “vamos”, while the second verb remains in the infinitive: “vamos a comer”.'
                    ],
                    [
                        'question' => 'Which sentence correctly changes “Ana trabaja aquí” to a sentence about Ana and Luis?',
                        'choices' => [
                            ['choice_text' => 'Ana y Luis trabajan aquí.', 'is_correct' => true],
                            ['choice_text' => 'Ana y Luis trabaja aquí.', 'is_correct' => false],
                            ['choice_text' => 'Ana y Luis trabajamos aquí.', 'is_correct' => false],
                            ['choice_text' => 'Ana y Luis trabajas aquí.', 'is_correct' => false],
                        ],
                        'explanation' => 'Adding a second person makes the subject third-person plural, so “trabajan” is required.'
                    ],
                    [
                        'question' => 'Which statement about “vamos a estudiar” is correct?',
                        'choices' => [
                            ['choice_text' => '“Vamos” is the conjugated form of “ir”, while “estudiar” stays in the infinitive after “a”.', 'is_correct' => true],
                            ['choice_text' => 'Both verbs must be conjugated the same way.', 'is_correct' => false],
                            ['choice_text' => '“Estudiar” is the conjugated form and “vamos” is the infinitive.', 'is_correct' => false],
                            ['choice_text' => 'The phrase can only be used in the past.', 'is_correct' => false],
                        ],
                        'explanation' => 'In the common future-like structure “ir a + infinitive”, only “ir” is conjugated: “vamos a estudiar”.'
                    ],
                    [
                        'question' => 'Which sentence correctly uses “tener” with “tú”?',
                        'choices' => [
                            ['choice_text' => 'Tú tienes tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Tú tiene tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Tú tengo tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Tú tienen tiempo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The present “tú” form of “tener” is “tienes”.'
                    ],
                    [
                        'question' => 'Which sentence correctly describes where two friends are right now?',
                        'choices' => [
                            ['choice_text' => 'Ellos están en el parque.', 'is_correct' => true],
                            ['choice_text' => 'Ellos está en el parque.', 'is_correct' => false],
                            ['choice_text' => 'Ellos estoy en el parque.', 'is_correct' => false],
                            ['choice_text' => 'Ellos eres en el parque.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ellos” is plural, so the present form of “estar” is “están”.'
                    ],
                    [
                        'question' => 'A learner sees “Comemos a las dos.” Which subject is understood from the verb?',
                        'choices' => [
                            ['choice_text' => 'nosotros', 'is_correct' => true],
                            ['choice_text' => 'yo', 'is_correct' => false],
                            ['choice_text' => 'tú', 'is_correct' => false],
                            ['choice_text' => 'él', 'is_correct' => false],
                        ],
                        'explanation' => '“Comemos” is the first-person plural form of “comer”, corresponding to “nosotros”.'
                    ],
                    [
                        'question' => 'Which sentence contains a common beginner error?',
                        'choices' => [
                            ['choice_text' => 'Yo hablan español.', 'is_correct' => true],
                            ['choice_text' => 'Yo hablo español.', 'is_correct' => false],
                            ['choice_text' => 'Ellos hablan español.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros hablamos español.', 'is_correct' => false],
                        ],
                        'explanation' => '“Yo” requires the first-person singular form “hablo”. “Hablan” belongs with a third-person plural subject such as “ellos”.'
                    ],
                    [
                        'question' => 'Which reply fits “¿Ustedes viven aquí?”',
                        'choices' => [
                            ['choice_text' => 'Sí, vivimos aquí.', 'is_correct' => true],
                            ['choice_text' => 'Sí, viven aquí.', 'is_correct' => false],
                            ['choice_text' => 'Sí, vives aquí.', 'is_correct' => false],
                            ['choice_text' => 'Sí, vivo aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ustedes” asks about a group, and the natural reply from that group is first-person plural: “vivimos”.'
                    ],
                    [
                        'question' => 'Which option correctly completes “Mi hermana y yo ___ estudiantes”?',
                        'choices' => [
                            ['choice_text' => 'somos', 'is_correct' => true],
                            ['choice_text' => 'son', 'is_correct' => false],
                            ['choice_text' => 'soy', 'is_correct' => false],
                            ['choice_text' => 'es', 'is_correct' => false],
                        ],
                        'explanation' => '“Mi hermana y yo” means “we”, so the present form of “ser” is “somos”.'
                    ],
                    [
                        'question' => 'Which sentence correctly uses two present-tense verbs with the same subject?',
                        'choices' => [
                            ['choice_text' => 'María estudia y trabaja por la tarde.', 'is_correct' => true],
                            ['choice_text' => 'María estudias y trabaja por la tarde.', 'is_correct' => false],
                            ['choice_text' => 'María estudio y trabaja por la tarde.', 'is_correct' => false],
                            ['choice_text' => 'María estudian y trabaja por la tarde.', 'is_correct' => false],
                        ],
                        'explanation' => 'Both verbs describe the singular subject María, so both are third-person singular: “estudia” and “trabaja”.'
                    ],
                    [
                        'question' => 'A student wants to say “We write every day.” Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Escribimos cada día.', 'is_correct' => true],
                            ['choice_text' => 'Escriben cada día.', 'is_correct' => false],
                            ['choice_text' => 'Escribes cada día.', 'is_correct' => false],
                            ['choice_text' => 'Escribo cada día.', 'is_correct' => false],
                        ],
                        'explanation' => '“Escribimos” is the first-person plural form of “escribir”, matching “nosotros”.'
                    ],
                    [
                        'question' => 'Which sentence correctly keeps an infinitive after “querer”?',
                        'choices' => [
                            ['choice_text' => 'Quiero aprender español.', 'is_correct' => true],
                            ['choice_text' => 'Quiero aprendo español.', 'is_correct' => false],
                            ['choice_text' => 'Quiero aprendes español.', 'is_correct' => false],
                            ['choice_text' => 'Quiero aprendemos español.', 'is_correct' => false],
                        ],
                        'explanation' => 'After conjugated “querer”, the following action normally stays in the infinitive: “quiero aprender”.'
                    ],
                    [
                        'question' => 'Which sentence best shows why learning common irregular verbs separately is useful?',
                        'choices' => [
                            ['choice_text' => '“Yo voy”, “yo tengo”, and “yo hago” do not simply follow one regular ending pattern.', 'is_correct' => true],
                            ['choice_text' => 'All three always use the regular -ar endings.', 'is_correct' => false],
                            ['choice_text' => 'They are all infinitives.', 'is_correct' => false],
                            ['choice_text' => 'They never change with the subject.', 'is_correct' => false],
                        ],
                        'explanation' => 'Common verbs such as “ir”, “tener”, and “hacer” have important irregular present forms, so learners benefit from memorizing them as high-frequency units.'
                    ],
                    [
                        'question' => 'Looking at the sentence “Carlos y Elena estudian, trabajan y viven en la ciudad,” what can you tell about the subject?',
                        'choices' => [
                            ['choice_text' => 'It is third-person plural, so all three verbs use matching plural forms.', 'is_correct' => true],
                            ['choice_text' => 'It is first-person singular.', 'is_correct' => false],
                            ['choice_text' => 'It is second-person singular.', 'is_correct' => false],
                            ['choice_text' => 'Each verb refers to a different subject.', 'is_correct' => false],
                        ],
                        'explanation' => '“Carlos y Elena” is a plural third-person subject, so “estudian”, “trabajan”, and “viven” all agree with that same subject.'
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
