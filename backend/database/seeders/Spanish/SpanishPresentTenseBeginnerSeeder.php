<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishPresentTenseBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'present-tense')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Present Tense Basics',
                'description' => 'Practice the present tense with everyday sentences, regular verbs, and simple subject-verb agreement.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Marta trabaja en una oficina de lunes a viernes. Which verb form completes the sentence: “Marta ___ en una oficina”?',
                        'choices' => [
                            ['choice_text' => 'trabajan', 'is_correct' => false],
                            ['choice_text' => 'trabajo', 'is_correct' => false],
                            ['choice_text' => 'trabaja', 'is_correct' => true],
                            ['choice_text' => 'trabajas', 'is_correct' => false],
                        ],
                        'explanation' => 'Marta is third-person singular, so the present-tense form of trabajar is “trabaja.”',
                    ],
                    [
                        'question' => 'Which sentence correctly says “We study Spanish”?',
                        'choices' => [
                            ['choice_text' => 'Estudiamos español.', 'is_correct' => true],
                            ['choice_text' => 'Estudian español.', 'is_correct' => false],
                            ['choice_text' => 'Estudio español.', 'is_correct' => false],
                            ['choice_text' => 'Estudias español.', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject “we” is nosotros, so estudiar becomes “estudiamos” in the present tense.',
                    ],
                    [
                        'question' => 'Juan and Carlos are friends. Which form of vivir fits: “Ellos ___ en Madrid”?',
                        'choices' => [
                            ['choice_text' => 'vivo', 'is_correct' => false],
                            ['choice_text' => 'viven', 'is_correct' => true],
                            ['choice_text' => 'vives', 'is_correct' => false],
                            ['choice_text' => 'vivimos', 'is_correct' => false],
                        ],
                        'explanation' => '“Ellos” is third-person plural, so vivir becomes “viven.”',
                    ],
                    [
                        'question' => 'Which sentence uses the present tense naturally for a routine?',
                        'choices' => [
                            ['choice_text' => 'Cada mañana tomo café.', 'is_correct' => true],
                            ['choice_text' => 'Cada mañana tomé café.', 'is_correct' => false],
                            ['choice_text' => 'Cada mañana tomaré café.', 'is_correct' => false],
                            ['choice_text' => 'Cada mañana tomaba café ayer.', 'is_correct' => false],
                        ],
                        'explanation' => 'A repeated daily routine is commonly expressed with the present tense: “Cada mañana tomo café.”',
                    ],
                    [
                        'question' => 'Choose the correct form: “Tú ___ música por la noche.”',
                        'choices' => [
                            ['choice_text' => 'escucho', 'is_correct' => false],
                            ['choice_text' => 'escuchan', 'is_correct' => false],
                            ['choice_text' => 'escuchas', 'is_correct' => true],
                            ['choice_text' => 'escuchamos', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject “tú” takes the second-person singular form “escuchas.”',
                    ],
                    [
                        'question' => 'A teacher asks what Ana is doing every weekend. Which answer uses the present tense correctly?',
                        'choices' => [
                            ['choice_text' => 'Ana visita a su abuela.', 'is_correct' => true],
                            ['choice_text' => 'Ana visitan a su abuela.', 'is_correct' => false],
                            ['choice_text' => 'Ana visitar a su abuela.', 'is_correct' => false],
                            ['choice_text' => 'Ana visitaste a su abuela.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ana is third-person singular, so the correct present-tense form is “visita.”',
                    ],
                    [
                        'question' => 'Which sentence has the correct subject-verb match?',
                        'choices' => [
                            ['choice_text' => 'Nosotros comen temprano.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros comemos temprano.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros comes temprano.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros como temprano.', 'is_correct' => false],
                        ],
                        'explanation' => 'Nosotros takes the first-person plural form “comemos.”',
                    ],
                    [
                        'question' => 'Which option best completes “Yo ___ en casa los domingos”?',
                        'choices' => [
                            ['choice_text' => 'cocinamos', 'is_correct' => false],
                            ['choice_text' => 'cocinas', 'is_correct' => false],
                            ['choice_text' => 'cocino', 'is_correct' => true],
                            ['choice_text' => 'cocinan', 'is_correct' => false],
                        ],
                        'explanation' => 'With “yo,” the present form of cocinar is “cocino.”',
                    ],
                    [
                        'question' => 'A student writes “Ellos estudia mucho.” What is the correction?',
                        'choices' => [
                            ['choice_text' => 'Ellos estudiamos mucho.', 'is_correct' => false],
                            ['choice_text' => 'Ellos estudias mucho.', 'is_correct' => false],
                            ['choice_text' => 'Ellos estudian mucho.', 'is_correct' => true],
                            ['choice_text' => 'Ellos estudio mucho.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ellos” requires the third-person plural form “estudian.”',
                    ],
                    [
                        'question' => 'Which sentence is most natural for a general fact about a person?',
                        'choices' => [
                            ['choice_text' => 'Luis habla tres idiomas.', 'is_correct' => true],
                            ['choice_text' => 'Luis habló tres idiomas mañana.', 'is_correct' => false],
                            ['choice_text' => 'Luis hablará tres idiomas cada día ayer.', 'is_correct' => false],
                            ['choice_text' => 'Luis hablas tres idiomas.', 'is_correct' => false],
                        ],
                        'explanation' => 'A general ability or fact is naturally stated in the present: “Luis habla tres idiomas.”',
                    ],
                ],
            ],
            [
                'title' => 'Regular -AR Present Tense',
                'description' => 'Build confidence with regular -ar verbs and use them in short everyday situations.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which form of hablar belongs with “yo”?',
                        'choices' => [
                            ['choice_text' => 'hablas', 'is_correct' => false],
                            ['choice_text' => 'hablo', 'is_correct' => true],
                            ['choice_text' => 'hablan', 'is_correct' => false],
                            ['choice_text' => 'hablamos', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular -ar verbs use -o for the yo form: hablar → hablo.',
                    ],
                    [
                        'question' => 'Choose the natural sentence for “you speak Spanish.”',
                        'choices' => [
                            ['choice_text' => 'Hablas español.', 'is_correct' => true],
                            ['choice_text' => 'Habla español.', 'is_correct' => false],
                            ['choice_text' => 'Hablo español.', 'is_correct' => false],
                            ['choice_text' => 'Hablan español.', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject “tú” takes the -as ending in regular -ar verbs: hablas.',
                    ],
                    [
                        'question' => 'A family goes to the same park every Saturday. Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Caminamos en el parque cada sábado.', 'is_correct' => true],
                            ['choice_text' => 'Caminan en el parque cada sábado.', 'is_correct' => false],
                            ['choice_text' => 'Camino en el parque cada sábado.', 'is_correct' => false],
                            ['choice_text' => 'Caminas en el parque cada sábado.', 'is_correct' => false],
                        ],
                        'explanation' => '“We” is nosotros, so caminar becomes “caminamos.” The repeated time expression supports the present tense.',
                    ],
                    [
                        'question' => 'Which ending completes “ellos trabaj___”?',
                        'choices' => [
                            ['choice_text' => '-o', 'is_correct' => false],
                            ['choice_text' => '-as', 'is_correct' => false],
                            ['choice_text' => '-a', 'is_correct' => false],
                            ['choice_text' => '-an', 'is_correct' => true],
                        ],
                        'explanation' => 'Third-person plural regular -ar verbs use -an, so trabajar becomes trabajan.',
                    ],
                    [
                        'question' => 'Which sentence sounds right?',
                        'choices' => [
                            ['choice_text' => 'Mis amigos estudian por la tarde.', 'is_correct' => true],
                            ['choice_text' => 'Mis amigos estudio por la tarde.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos estudias por la tarde.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos estudiamos por la tarde.', 'is_correct' => false],
                        ],
                        'explanation' => '“Mis amigos” is third-person plural, so estudiar becomes “estudian.”',
                    ],
                    [
                        'question' => 'A learner knows the infinitive “comprar.” Which is the first-person plural present form?',
                        'choices' => [
                            ['choice_text' => 'compramos', 'is_correct' => true],
                            ['choice_text' => 'compran', 'is_correct' => false],
                            ['choice_text' => 'compras', 'is_correct' => false],
                            ['choice_text' => 'compro', 'is_correct' => false],
                        ],
                        'explanation' => 'For regular -ar verbs, nosotros uses -amos: comprar → compramos.',
                    ],
                    [
                        'question' => 'Which question correctly asks one friend what they do on Sundays?',
                        'choices' => [
                            ['choice_text' => '¿Qué haces los domingos?', 'is_correct' => true],
                            ['choice_text' => '¿Qué hacen los domingos?', 'is_correct' => false],
                            ['choice_text' => '¿Qué hago los domingos?', 'is_correct' => false],
                            ['choice_text' => '¿Qué hacemos los domingos?', 'is_correct' => false],
                        ],
                        'explanation' => 'When speaking to one person with tú, the present form is haces.',
                    ],
                    [
                        'question' => 'Which sentence contains a regular -ar verb in the present tense?',
                        'choices' => [
                            ['choice_text' => 'Vivimos en Sevilla.', 'is_correct' => false],
                            ['choice_text' => 'Comemos temprano.', 'is_correct' => false],
                            ['choice_text' => 'Trabajan aquí.', 'is_correct' => true],
                            ['choice_text' => 'Tienen un coche.', 'is_correct' => false],
                        ],
                        'explanation' => '“Trabajan” comes from the regular -ar verb trabajar and is in the present tense.',
                    ],
                    [
                        'question' => 'A receptionist greets a visitor and explains her job: “Yo ___ en recepción.” Which form is correct?',
                        'choices' => [
                            ['choice_text' => 'trabajo', 'is_correct' => true],
                            ['choice_text' => 'trabajas', 'is_correct' => false],
                            ['choice_text' => 'trabaja', 'is_correct' => false],
                            ['choice_text' => 'trabajamos', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject is yo, so trabajar becomes “trabajo.”',
                    ],
                    [
                        'question' => 'Which sentence shows a common beginner mistake?',
                        'choices' => [
                            ['choice_text' => 'Nosotros escuchamos música.', 'is_correct' => false],
                            ['choice_text' => 'Tú escuchas música.', 'is_correct' => false],
                            ['choice_text' => 'Ella escuchan música.', 'is_correct' => true],
                            ['choice_text' => 'Yo escucho música.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ella” is singular, so the verb should be “escucha,” not the plural “escuchan.”',
                    ],
                    [
                        'question' => 'Which sentence would you use to describe a group that lives in a city?',
                        'choices' => [
                            ['choice_text' => 'Ellos viven en Valencia.', 'is_correct' => true],
                            ['choice_text' => 'Ellos vive en Valencia.', 'is_correct' => false],
                            ['choice_text' => 'Ellos vivimos en Valencia.', 'is_correct' => false],
                            ['choice_text' => 'Ellos vives en Valencia.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ellos” requires a plural verb form, so vivir becomes “viven.”',
                    ],
                ],
            ],
            [
                'title' => 'Regular -ER and -IR Present Tense',
                'description' => 'Compare regular -er and -ir verbs and use the present tense accurately in everyday communication.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which form of comer belongs with “yo”?',
                        'choices' => [
                            ['choice_text' => 'como', 'is_correct' => true],
                            ['choice_text' => 'comes', 'is_correct' => false],
                            ['choice_text' => 'comen', 'is_correct' => false],
                            ['choice_text' => 'comemos', 'is_correct' => false],
                        ],
                        'explanation' => 'Regular -er verbs use -o for yo: comer → como.',
                    ],
                    [
                        'question' => 'Which sentence means “You eat at home”?',
                        'choices' => [
                            ['choice_text' => 'Comes en casa.', 'is_correct' => true],
                            ['choice_text' => 'Come en casa.', 'is_correct' => false],
                            ['choice_text' => 'Como en casa.', 'is_correct' => false],
                            ['choice_text' => 'Comen en casa.', 'is_correct' => false],
                        ],
                        'explanation' => 'The tú form of comer is “comes.”',
                    ],
                    [
                        'question' => 'Which form completes “Nosotros ___ en casa”?',
                        'choices' => [
                            ['choice_text' => 'vivimos', 'is_correct' => true],
                            ['choice_text' => 'viven', 'is_correct' => false],
                            ['choice_text' => 'vives', 'is_correct' => false],
                            ['choice_text' => 'vivo', 'is_correct' => false],
                        ],
                        'explanation' => 'With nosotros, vivir becomes “vivimos.”',
                    ],
                    [
                        'question' => 'What is the third-person plural form of beber?',
                        'choices' => [
                            ['choice_text' => 'beben', 'is_correct' => true],
                            ['choice_text' => 'bebes', 'is_correct' => false],
                            ['choice_text' => 'bebo', 'is_correct' => false],
                            ['choice_text' => 'bebemos', 'is_correct' => false],
                        ],
                        'explanation' => 'Ellos, ellas, and ustedes use “beben” for the regular -er verb beber.',
                    ],
                    [
                        'question' => 'A waiter asks a couple what they want to drink. Which present-tense sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Ellos beben agua.', 'is_correct' => true],
                            ['choice_text' => 'Ellos bebe agua.', 'is_correct' => false],
                            ['choice_text' => 'Ellos bebemos agua.', 'is_correct' => false],
                            ['choice_text' => 'Ellos bebes agua.', 'is_correct' => false],
                        ],
                        'explanation' => 'The couple is “ellos,” so the verb form is “beben.”',
                    ],
                    [
                        'question' => 'Which sentence correctly uses a regular -ir verb?',
                        'choices' => [
                            ['choice_text' => 'Escribimos correos cada día.', 'is_correct' => true],
                            ['choice_text' => 'Escriben correos cada día.', 'is_correct' => false],
                            ['choice_text' => 'Escribo correos cada día.', 'is_correct' => false],
                            ['choice_text' => 'Escribes correos cada día.', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject is nosotros, so escribir becomes “escribimos.”',
                    ],
                    [
                        'question' => 'Which statement about regular -er and -ir verbs is correct in the present tense?',
                        'choices' => [
                            ['choice_text' => 'Both use -o for yo, but their nosotros forms are different.', 'is_correct' => true],
                            ['choice_text' => 'They use exactly the same endings in every person.', 'is_correct' => false],
                            ['choice_text' => 'Only -ir verbs have a yo form.', 'is_correct' => false],
                            ['choice_text' => '-er verbs never use the ending -en.', 'is_correct' => false],
                        ],
                        'explanation' => 'Both have yo forms ending in -o, but for nosotros you get comemos versus vivimos.',
                    ],
                    [
                        'question' => 'A student writes “Nosotros escriben cartas.” What should be changed?',
                        'choices' => [
                            ['choice_text' => 'Change “escriben” to “escribimos.”', 'is_correct' => true],
                            ['choice_text' => 'Change “nosotros” to “yo.”', 'is_correct' => false],
                            ['choice_text' => 'Change “cartas” to “carta.”', 'is_correct' => false],
                            ['choice_text' => 'Change “escriben” to “escribes.”', 'is_correct' => false],
                        ],
                        'explanation' => 'Nosotros requires the first-person plural form “escribimos.”',
                    ],
                    [
                        'question' => 'Which pair is correctly matched?',
                        'choices' => [
                            ['choice_text' => 'yo vendo / ellos venden', 'is_correct' => true],
                            ['choice_text' => 'yo vendes / ellos vendemos', 'is_correct' => false],
                            ['choice_text' => 'yo vende / ellos vendo', 'is_correct' => false],
                            ['choice_text' => 'yo vendemos / ellos vendes', 'is_correct' => false],
                        ],
                        'explanation' => 'For vender, yo is “vendo” and third-person plural is “venden.”',
                    ],
                    [
                        'question' => 'Which sentence describes a current habit correctly?',
                        'choices' => [
                            ['choice_text' => 'Mi hermana recibe muchos mensajes.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermana recibimos muchos mensajes.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana recibes muchos mensajes.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana recibo muchos mensajes.', 'is_correct' => false],
                        ],
                        'explanation' => '“Mi hermana” is third-person singular, so recibir becomes “recibe.”',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Ustedes comen temprano.', 'is_correct' => true],
                            ['choice_text' => 'Ustedes comes temprano.', 'is_correct' => false],
                            ['choice_text' => 'Ustedes como temprano.', 'is_correct' => false],
                            ['choice_text' => 'Ustedes comemos temprano.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ustedes takes the third-person plural form, so comer becomes “comen.”',
                    ],
                ],
            ],
            [
                'title' => 'Everyday Uses of the Present Tense',
                'description' => 'Use the present tense for routines, habits, facts, schedules, and what is happening in simple everyday contexts.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Which sentence clearly describes a habit?',
                        'choices' => [
                            ['choice_text' => 'Leo antes de dormir.', 'is_correct' => true],
                            ['choice_text' => 'Leí antes de dormir ayer.', 'is_correct' => false],
                            ['choice_text' => 'Leeré antes de dormir mañana.', 'is_correct' => false],
                            ['choice_text' => 'Leía una vez el año pasado.', 'is_correct' => false],
                        ],
                        'explanation' => 'The present tense works naturally for a repeated habit: “Leo antes de dormir.”',
                    ],
                    [
                        'question' => 'A timetable says the train leaves at 8:00. Which beginner sentence is natural?',
                        'choices' => [
                            ['choice_text' => 'El tren sale a las ocho.', 'is_correct' => true],
                            ['choice_text' => 'El tren salió a las ocho mañana.', 'is_correct' => false],
                            ['choice_text' => 'El tren saldrá a las ocho ayer.', 'is_correct' => false],
                            ['choice_text' => 'El tren salen a las ocho.', 'is_correct' => false],
                        ],
                        'explanation' => 'Spanish can use the present tense for scheduled events: “El tren sale a las ocho.”',
                    ],
                    [
                        'question' => 'Which sentence is best for a general fact?',
                        'choices' => [
                            ['choice_text' => 'El agua hierve a 100 grados Celsius.', 'is_correct' => true],
                            ['choice_text' => 'El agua hirvió mañana.', 'is_correct' => false],
                            ['choice_text' => 'El agua hervirá ayer.', 'is_correct' => false],
                            ['choice_text' => 'El agua hierven a 100 grados.', 'is_correct' => false],
                        ],
                        'explanation' => 'General facts and scientific truths are commonly expressed in the present tense.',
                    ],
                    [
                        'question' => 'Which sentence means that someone is currently feeling tired?',
                        'choices' => [
                            ['choice_text' => 'Estoy cansado.', 'is_correct' => true],
                            ['choice_text' => 'Estuve cansado mañana.', 'is_correct' => false],
                            ['choice_text' => 'Estaré cansado ayer.', 'is_correct' => false],
                            ['choice_text' => 'Estás cansado yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The present form “estoy” states the speaker’s current condition.',
                    ],
                    [
                        'question' => 'A friend asks why you are going to the market. Which answer uses the present naturally for a current plan or action?',
                        'choices' => [
                            ['choice_text' => 'Compro fruta para la cena.', 'is_correct' => true],
                            ['choice_text' => 'Compré fruta para la cena mañana.', 'is_correct' => false],
                            ['choice_text' => 'Compraron fruta para la cena yo.', 'is_correct' => false],
                            ['choice_text' => 'Comprar fruta para la cena.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first-person present “compro” can describe what the speaker is doing in the current situation.',
                    ],
                    [
                        'question' => 'Which sentence shows a regular weekly routine?',
                        'choices' => [
                            ['choice_text' => 'Los sábados limpiamos la casa.', 'is_correct' => true],
                            ['choice_text' => 'Los sábados limpiamos ayer la casa.', 'is_correct' => false],
                            ['choice_text' => 'Los sábados limpiaremos la casa ayer.', 'is_correct' => false],
                            ['choice_text' => 'Los sábados limpiar la casa.', 'is_correct' => false],
                        ],
                        'explanation' => 'A repeated weekly routine fits naturally with the present tense: “limpiamos.”',
                    ],
                    [
                        'question' => 'Which question asks about a person’s usual job?',
                        'choices' => [
                            ['choice_text' => '¿Dónde trabajas?', 'is_correct' => true],
                            ['choice_text' => '¿Dónde trabajaste mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde trabajarás ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde trabaja yo?', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Dónde trabajas?” uses the present tense to ask about the person’s current job or usual workplace.',
                    ],
                    [
                        'question' => 'Which sentence would you naturally hear when someone introduces a family member?',
                        'choices' => [
                            ['choice_text' => 'Mi padre trabaja en un banco.', 'is_correct' => true],
                            ['choice_text' => 'Mi padre trabajan en un banco.', 'is_correct' => false],
                            ['choice_text' => 'Mi padre trabajamos en un banco.', 'is_correct' => false],
                            ['choice_text' => 'Mi padre trabajar en un banco.', 'is_correct' => false],
                        ],
                        'explanation' => '“Mi padre” is singular, so the present form is “trabaja.”',
                    ],
                    [
                        'question' => 'Which sentence uses the present tense to describe something happening these days?',
                        'choices' => [
                            ['choice_text' => 'Ahora estudio mucho.', 'is_correct' => true],
                            ['choice_text' => 'Ahora estudié mucho mañana.', 'is_correct' => false],
                            ['choice_text' => 'Ahora estudiaré mucho ayer.', 'is_correct' => false],
                            ['choice_text' => 'Ahora estudias yo mucho.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ahora estudio mucho” expresses what the speaker is doing currently or during this period.',
                    ],
                    [
                        'question' => 'A shop displays its opening hours: “Abrimos a las nueve.” What does the present tense communicate here?',
                        'choices' => [
                            ['choice_text' => 'A regular or scheduled opening time.', 'is_correct' => true],
                            ['choice_text' => 'A completed action in the past.', 'is_correct' => false],
                            ['choice_text' => 'A guaranteed action in the distant future only.', 'is_correct' => false],
                            ['choice_text' => 'A command to customers.', 'is_correct' => false],
                        ],
                        'explanation' => 'The present tense is often used for schedules and fixed opening times.',
                    ],
                    [
                        'question' => 'Which sentence is most suitable for saying what you normally do after work?',
                        'choices' => [
                            ['choice_text' => 'Después del trabajo, ceno en casa.', 'is_correct' => true],
                            ['choice_text' => 'Después del trabajo, cené mañana en casa.', 'is_correct' => false],
                            ['choice_text' => 'Después del trabajo, cenaré ayer en casa.', 'is_correct' => false],
                            ['choice_text' => 'Después del trabajo, cenar en casa.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ceno” in the present expresses a normal routine: what the speaker usually does after work.',
                    ],
                    [
                        'question' => 'Which statement best explains a common use of the Spanish present tense?',
                        'choices' => [
                            ['choice_text' => 'It can describe habits, facts, current situations, and schedules.', 'is_correct' => true],
                            ['choice_text' => 'It is used only for actions happening this exact second.', 'is_correct' => false],
                            ['choice_text' => 'It is used only with time expressions like “ayer.”', 'is_correct' => false],
                            ['choice_text' => 'It cannot describe repeated actions.', 'is_correct' => false],
                        ],
                        'explanation' => 'Beginners should think of the present as a flexible tense used for routines, general facts, current situations, and scheduled events.',
                    ],
                ],
            ],
            [
                'title' => 'Common Present-Tense Irregulars',
                'description' => 'Practice high-frequency irregular present-tense verbs such as ser, estar, tener, ir, hacer, and venir in simple contexts.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Which form of ser belongs with “yo”?',
                        'choices' => [
                            ['choice_text' => 'soy', 'is_correct' => true],
                            ['choice_text' => 'eres', 'is_correct' => false],
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'son', 'is_correct' => false],
                        ],
                        'explanation' => 'The first-person singular present form of ser is “soy.”',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Ella es profesora.', 'is_correct' => true],
                            ['choice_text' => 'Ella soy profesora.', 'is_correct' => false],
                            ['choice_text' => 'Ella eres profesora.', 'is_correct' => false],
                            ['choice_text' => 'Ella son profesora.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ella takes the third-person singular form “es” of ser.',
                    ],
                    [
                        'question' => 'Choose the correct form of estar: “Nosotros ___ en casa.”',
                        'choices' => [
                            ['choice_text' => 'estamos', 'is_correct' => true],
                            ['choice_text' => 'están', 'is_correct' => false],
                            ['choice_text' => 'estoy', 'is_correct' => false],
                            ['choice_text' => 'estás', 'is_correct' => false],
                        ],
                        'explanation' => 'Nosotros uses “estamos” in the present tense of estar.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses tener?',
                        'choices' => [
                            ['choice_text' => 'Tengo dos hermanos.', 'is_correct' => true],
                            ['choice_text' => 'Tienes dos hermanos yo.', 'is_correct' => false],
                            ['choice_text' => 'Tiene dos hermanos yo.', 'is_correct' => false],
                            ['choice_text' => 'Tenen dos hermanos.', 'is_correct' => false],
                        ],
                        'explanation' => 'The yo form of tener is “tengo.”',
                    ],
                    [
                        'question' => 'Maria and Pablo are leaving for school. Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Ellos van a la escuela.', 'is_correct' => true],
                            ['choice_text' => 'Ellos voy a la escuela.', 'is_correct' => false],
                            ['choice_text' => 'Ellos vas a la escuela.', 'is_correct' => false],
                            ['choice_text' => 'Ellos vamos a la escuela.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ir is irregular in the present; ellos/ellas/ustedes use “van.”',
                    ],
                    [
                        'question' => 'A student says, “Every Saturday I do my homework.” Which present form is correct?',
                        'choices' => [
                            ['choice_text' => 'Hago mi tarea.', 'is_correct' => true],
                            ['choice_text' => 'Haces mi tarea.', 'is_correct' => false],
                            ['choice_text' => 'Hace mi tarea.', 'is_correct' => false],
                            ['choice_text' => 'Hacen mi tarea.', 'is_correct' => false],
                        ],
                        'explanation' => 'The yo form of hacer is the irregular “hago.”',
                    ],
                    [
                        'question' => 'Which option completes “¿De dónde ___ tú?” when asking where someone is from?',
                        'choices' => [
                            ['choice_text' => 'eres', 'is_correct' => true],
                            ['choice_text' => 'soy', 'is_correct' => false],
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'son', 'is_correct' => false],
                        ],
                        'explanation' => 'With tú, ser becomes “eres.” The full expression is “¿De dónde eres?”',
                    ],
                    [
                        'question' => 'Which sentence correctly describes a current location?',
                        'choices' => [
                            ['choice_text' => 'Estamos en el centro.', 'is_correct' => true],
                            ['choice_text' => 'Somos en el centro.', 'is_correct' => false],
                            ['choice_text' => 'Están en el centro yo.', 'is_correct' => false],
                            ['choice_text' => 'Estoy en el centro nosotros.', 'is_correct' => false],
                        ],
                        'explanation' => 'Current location is expressed with estar: “Estamos en el centro.”',
                    ],
                    [
                        'question' => 'Which sentence uses tener correctly for a group?',
                        'choices' => [
                            ['choice_text' => 'Ellos tienen tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Ellos tengo tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Ellos tienes tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Ellos tenéis tiempo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Third-person plural tener is “tienen.”',
                    ],
                    [
                        'question' => 'A friend asks what you are doing this evening. Which answer correctly uses present ir + a?',
                        'choices' => [
                            ['choice_text' => 'Voy al cine.', 'is_correct' => true],
                            ['choice_text' => 'Vas al cine.', 'is_correct' => false],
                            ['choice_text' => 'Va al cine yo.', 'is_correct' => false],
                            ['choice_text' => 'Vamos al cine yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'With yo, ir is “voy.” Spanish commonly uses the present of ir with “a” for near-future plans: “Voy al cine.”',
                    ],
                    [
                        'question' => 'Which sentence correctly uses venir with “we”?',
                        'choices' => [
                            ['choice_text' => 'Venimos temprano.', 'is_correct' => true],
                            ['choice_text' => 'Vienen temprano.', 'is_correct' => false],
                            ['choice_text' => 'Vienes temprano.', 'is_correct' => false],
                            ['choice_text' => 'Vengo temprano nosotros.', 'is_correct' => false],
                        ],
                        'explanation' => 'The nosotros form of venir is “venimos.”',
                    ],
                    [
                        'question' => 'Which pair is correctly matched?',
                        'choices' => [
                            ['choice_text' => 'yo estoy / ellos están', 'is_correct' => true],
                            ['choice_text' => 'yo estás / ellos está', 'is_correct' => false],
                            ['choice_text' => 'yo está / ellos estoy', 'is_correct' => false],
                            ['choice_text' => 'yo están / ellos estamos', 'is_correct' => false],
                        ],
                        'explanation' => 'Estar changes by subject: yo estoy, tú estás, él/ella está, nosotros estamos, ellos están.',
                    ],
                    [
                        'question' => 'Which sentence contains a correct present-tense form of hacer?',
                        'choices' => [
                            ['choice_text' => 'Mis padres hacen la cena.', 'is_correct' => true],
                            ['choice_text' => 'Mis padres hago la cena.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres haces la cena.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres hace la cena.', 'is_correct' => false],
                        ],
                        'explanation' => 'Mis padres is third-person plural, so hacer becomes “hacen.”',
                    ],
                ],
            ],
            [
                'title' => 'Stem-Changing Verbs in the Present',
                'description' => 'Recognize and use common present-tense stem changes in everyday verbs such as querer, poder, pedir, and dormir.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Which is the correct yo form of querer?',
                        'choices' => [
                            ['choice_text' => 'quiero', 'is_correct' => true],
                            ['choice_text' => 'quero', 'is_correct' => false],
                            ['choice_text' => 'quiere', 'is_correct' => false],
                            ['choice_text' => 'queremos', 'is_correct' => false],
                        ],
                        'explanation' => 'Querer changes e → ie in most present-tense forms: yo quiero.',
                    ],
                    [
                        'question' => 'Which sentence means “I want coffee”?',
                        'choices' => [
                            ['choice_text' => 'Quiero café.', 'is_correct' => true],
                            ['choice_text' => 'Queres café.', 'is_correct' => false],
                            ['choice_text' => 'Quieres café.', 'is_correct' => false],
                            ['choice_text' => 'Queremos café.', 'is_correct' => false],
                        ],
                        'explanation' => '“Quiero” is the first-person singular present form of querer.',
                    ],
                    [
                        'question' => 'Which form of poder belongs with “tú”?',
                        'choices' => [
                            ['choice_text' => 'puedes', 'is_correct' => true],
                            ['choice_text' => 'puedo', 'is_correct' => false],
                            ['choice_text' => 'podemos', 'is_correct' => false],
                            ['choice_text' => 'pueden', 'is_correct' => false],
                        ],
                        'explanation' => 'Poder changes o → ue in the present: tú puedes.',
                    ],
                    [
                        'question' => 'A child asks for permission. Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => '¿Puedo salir?', 'is_correct' => true],
                            ['choice_text' => '¿Puede salir yo?', 'is_correct' => false],
                            ['choice_text' => '¿Podemos salir yo?', 'is_correct' => false],
                            ['choice_text' => '¿Pudes salir?', 'is_correct' => false],
                        ],
                        'explanation' => 'The yo form of poder is “puedo,” so “¿Puedo salir?” is correct.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses dormir with “she”?',
                        'choices' => [
                            ['choice_text' => 'Ella duerme ocho horas.', 'is_correct' => true],
                            ['choice_text' => 'Ella dorme ocho horas.', 'is_correct' => false],
                            ['choice_text' => 'Ella duermen ocho horas.', 'is_correct' => false],
                            ['choice_text' => 'Ella dormimos ocho horas.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dormir changes o → ue in third-person singular: duerme.',
                    ],
                    [
                        'question' => 'Which statement about querer in the present tense is accurate?',
                        'choices' => [
                            ['choice_text' => 'The stem changes in forms such as quiero, quieres, and quieren, but not in queremos.', 'is_correct' => true],
                            ['choice_text' => 'The stem changes in every form, including queremos.', 'is_correct' => false],
                            ['choice_text' => 'Querer is completely regular.', 'is_correct' => false],
                            ['choice_text' => 'Only the yo form changes.', 'is_correct' => false],
                        ],
                        'explanation' => 'Querer follows the common e → ie pattern, while nosotros keeps the original vowel: queremos.',
                    ],
                    [
                        'question' => 'A customer asks politely for help. Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => '¿Puede ayudarme?', 'is_correct' => true],
                            ['choice_text' => '¿Pude ayudarme?', 'is_correct' => false],
                            ['choice_text' => '¿Podemos ayudarme usted?', 'is_correct' => false],
                            ['choice_text' => '¿Pudes ayudarme?', 'is_correct' => false],
                        ],
                        'explanation' => 'With usted, poder uses the third-person singular form “puede.”',
                    ],
                    [
                        'question' => 'Which pair shows the stem change in pedir correctly?',
                        'choices' => [
                            ['choice_text' => 'pido / pide', 'is_correct' => true],
                            ['choice_text' => 'pedo / pede', 'is_correct' => false],
                            ['choice_text' => 'pido / pidesen', 'is_correct' => false],
                            ['choice_text' => 'pedimos / pidimos', 'is_correct' => false],
                        ],
                        'explanation' => 'Pedir changes e → i in most present forms: pido, pides, pide, but nosotros pedimos.',
                    ],
                    [
                        'question' => 'Which sentence is correct for “We sleep well”?',
                        'choices' => [
                            ['choice_text' => 'Dormimos bien.', 'is_correct' => true],
                            ['choice_text' => 'Duermimos bien.', 'is_correct' => false],
                            ['choice_text' => 'Duerme bien.', 'is_correct' => false],
                            ['choice_text' => 'Duermen bien nosotros.', 'is_correct' => false],
                        ],
                        'explanation' => 'The nosotros form of dormir does not show the stem change: dormimos.',
                    ],
                    [
                        'question' => 'Which sentence contains a common stem-changing verb used correctly?',
                        'choices' => [
                            ['choice_text' => 'Mis amigos quieren viajar.', 'is_correct' => true],
                            ['choice_text' => 'Mis amigos queren viajar.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos queremos viajar.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos quiere viajar.', 'is_correct' => false],
                        ],
                        'explanation' => 'With mis amigos, querer takes the third-person plural form “quieren.”',
                    ],
                    [
                        'question' => 'Which option correctly completes “Nosotros ___ ayuda” from pedir?',
                        'choices' => [
                            ['choice_text' => 'pedimos', 'is_correct' => true],
                            ['choice_text' => 'pidimos', 'is_correct' => false],
                            ['choice_text' => 'piden', 'is_correct' => false],
                            ['choice_text' => 'pido', 'is_correct' => false],
                        ],
                        'explanation' => 'Pedir does not change its stem in the nosotros form, so the correct form is “pedimos.”',
                    ],
                    [
                        'question' => 'A learner writes “Yo quero ir.” What is the correct present-tense form?',
                        'choices' => [
                            ['choice_text' => 'Yo quiero ir.', 'is_correct' => true],
                            ['choice_text' => 'Yo quireo ir.', 'is_correct' => false],
                            ['choice_text' => 'Yo querio ir.', 'is_correct' => false],
                            ['choice_text' => 'Yo quieres ir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Querer changes e → ie in the yo form, giving “quiero.”',
                    ],
                ],
            ],
            [
                'title' => 'Present Tense Mixed Practice',
                'description' => 'Bring together regular and irregular present-tense forms in realistic beginner situations and short problem-solving tasks.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Lucía says, “I live in Seville and I work at a school.” Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Vivo en Sevilla y trabajo en una escuela.', 'is_correct' => true],
                            ['choice_text' => 'Vives en Sevilla y trabajas en una escuela.', 'is_correct' => false],
                            ['choice_text' => 'Vive en Sevilla y trabaja en una escuela.', 'is_correct' => false],
                            ['choice_text' => 'Vivimos en Sevilla y trabajamos en una escuela.', 'is_correct' => false],
                        ],
                        'explanation' => 'Lucía speaks about herself, so both verbs use the yo forms: vivo and trabajo.',
                    ],
                    [
                        'question' => 'Which reply fits the question “¿Qué haces después de clase?”',
                        'choices' => [
                            ['choice_text' => 'Estudio en la biblioteca.', 'is_correct' => true],
                            ['choice_text' => 'Estudias en la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Estudian en la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Estudiar en la biblioteca.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks “What do you do?” to tú, but the answer is from the speaker’s perspective: “Estudio.”',
                    ],
                    [
                        'question' => 'A couple says, “We want to eat now.” Which sentence is the best match?',
                        'choices' => [
                            ['choice_text' => 'Queremos comer ahora.', 'is_correct' => true],
                            ['choice_text' => 'Quieren comer ahora.', 'is_correct' => false],
                            ['choice_text' => 'Quiero comer ahora.', 'is_correct' => false],
                            ['choice_text' => 'Queres comer ahora.', 'is_correct' => false],
                        ],
                        'explanation' => 'The couple speaks as nosotros, so querer becomes “queremos.”',
                    ],
                    [
                        'question' => 'Which sentence is correct for a group talking about what they can do?',
                        'choices' => [
                            ['choice_text' => 'Podemos ayudar.', 'is_correct' => true],
                            ['choice_text' => 'Pueden ayudar nosotros.', 'is_correct' => false],
                            ['choice_text' => 'Puedes ayudar nosotros.', 'is_correct' => false],
                            ['choice_text' => 'Puedo ayudar nosotros.', 'is_correct' => false],
                        ],
                        'explanation' => 'Nosotros uses “podemos,” the present form of poder without the stem change.',
                    ],
                    [
                        'question' => 'Which sentence correctly combines a routine with a present-tense irregular verb?',
                        'choices' => [
                            ['choice_text' => 'Cada lunes voy al gimnasio.', 'is_correct' => true],
                            ['choice_text' => 'Cada lunes vas al gimnasio yo.', 'is_correct' => false],
                            ['choice_text' => 'Cada lunes va al gimnasio yo.', 'is_correct' => false],
                            ['choice_text' => 'Cada lunes ir al gimnasio.', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject is yo, so ir becomes “voy.” The expression “cada lunes” makes the routine clear.',
                    ],
                    [
                        'question' => 'A shop owner says, “My employees work here every day.” Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Mis empleados trabajan aquí todos los días.', 'is_correct' => true],
                            ['choice_text' => 'Mis empleados trabajo aquí todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Mis empleados trabajamos aquí todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Mis empleados trabajas aquí todos los días.', 'is_correct' => false],
                        ],
                        'explanation' => '“Mis empleados” is third-person plural, so trabajar becomes “trabajan.”',
                    ],
                    [
                        'question' => 'Which sentence correctly contrasts a regular and an irregular present-tense verb?',
                        'choices' => [
                            ['choice_text' => 'Estudio por la mañana y tengo clase por la tarde.', 'is_correct' => true],
                            ['choice_text' => 'Estudias por la mañana y tengo clase por la tarde.', 'is_correct' => false],
                            ['choice_text' => 'Estudio por la mañana y tienes clase por la tarde.', 'is_correct' => false],
                            ['choice_text' => 'Estudian por la mañana y tengo clase por la tarde.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker uses yo in both parts: estudio for estudiar and tengo for tener.',
                    ],
                    [
                        'question' => 'Which sentence would a hotel receptionist most naturally use when explaining where she is?',
                        'choices' => [
                            ['choice_text' => 'Estoy en la recepción.', 'is_correct' => true],
                            ['choice_text' => 'Soy en la recepción.', 'is_correct' => false],
                            ['choice_text' => 'Estás en la recepción.', 'is_correct' => false],
                            ['choice_text' => 'Estamos en la recepción.', 'is_correct' => false],
                        ],
                        'explanation' => 'For a current location, the receptionist uses estar: “Estoy en la recepción.”',
                    ],
                    [
                        'question' => 'Which sentence is grammatically correct?',
                        'choices' => [
                            ['choice_text' => 'Mi hermano duerme mucho los domingos.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermano dormimos mucho los domingos.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano duermen mucho los domingos.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano duermo mucho los domingos.', 'is_correct' => false],
                        ],
                        'explanation' => 'Mi hermano is third-person singular, so dormir becomes “duerme.”',
                    ],
                    [
                        'question' => 'Which response best answers “¿Dónde viven tus padres?”',
                        'choices' => [
                            ['choice_text' => 'Viven en Granada.', 'is_correct' => true],
                            ['choice_text' => 'Vivimos en Granada.', 'is_correct' => false],
                            ['choice_text' => 'Vives en Granada.', 'is_correct' => false],
                            ['choice_text' => 'Vivo en Granada.', 'is_correct' => false],
                        ],
                        'explanation' => 'Tus padres means “your parents,” so the answer uses the third-person plural: viven.',
                    ],
                    [
                        'question' => 'A student says, “I cannot understand the question.” Which beginner sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'No puedo entender la pregunta.', 'is_correct' => true],
                            ['choice_text' => 'No puedes entender la pregunta.', 'is_correct' => false],
                            ['choice_text' => 'No pueden entender la pregunta yo.', 'is_correct' => false],
                            ['choice_text' => 'No podo entender la pregunta.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker uses yo, so poder becomes “puedo.”',
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
