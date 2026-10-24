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
                'title' => 'Les bases du présent',
                'description' => 'Pratique du présent avec des phrases du quotidien, des verbes réguliers et un accord simple sujet-verbe.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Marta trabaja en una oficina de lunes a viernes. Quelle forme verbale complète la phrase : « Marta ___ en una oficina » ?',
                        'choices' => [
                            ['choice_text' => 'trabaja', 'is_correct' => true],
                            ['choice_text' => 'trabajan', 'is_correct' => false],
                            ['choice_text' => 'trabajo', 'is_correct' => false],
                            ['choice_text' => 'trabajas', 'is_correct' => false],
                        ],
                        'explanation' => 'Marta est la troisième personne du singulier, donc la forme au présent de trabajar est « trabaja ».',
                    ],
                    [
                        'question' => 'Quelle phrase dit correctement « Nous étudions l’espagnol » ?',
                        'choices' => [
                            ['choice_text' => 'Estudian español.', 'is_correct' => false],
                            ['choice_text' => 'Estudio español.', 'is_correct' => false],
                            ['choice_text' => 'Estudias español.', 'is_correct' => false],
                            ['choice_text' => 'Estudiamos español.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sujet « nous » correspond à nosotros, donc estudiar devient « estudiamos » au présent.',
                    ],
                    [
                        'question' => 'Juan et Carlos sont amis. Quelle forme de vivir convient : « Ellos ___ en Madrid » ?',
                        'choices' => [
                            ['choice_text' => 'vivo', 'is_correct' => false],
                            ['choice_text' => 'viven', 'is_correct' => true],
                            ['choice_text' => 'vives', 'is_correct' => false],
                            ['choice_text' => 'vivimos', 'is_correct' => false],
                        ],
                        'explanation' => '« Ellos » est la troisième personne du pluriel, donc vivir devient « viven ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise naturellement le présent pour une routine ?',
                        'choices' => [
                            ['choice_text' => 'Cada mañana tomé café.', 'is_correct' => false],
                            ['choice_text' => 'Cada mañana tomaré café.', 'is_correct' => false],
                            ['choice_text' => 'Cada mañana tomo café.', 'is_correct' => true],
                            ['choice_text' => 'Cada mañana tomaba café ayer.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une routine quotidienne répétée s’exprime couramment au présent : « Cada mañana tomo café. »',
                    ],
                    [
                        'question' => 'Choisissez la forme correcte : « Tú ___ música por la noche. »',
                        'choices' => [
                            ['choice_text' => 'escucho', 'is_correct' => false],
                            ['choice_text' => 'escuchan', 'is_correct' => false],
                            ['choice_text' => 'escuchamos', 'is_correct' => false],
                            ['choice_text' => 'escuchas', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sujet « tú » prend la forme de la deuxième personne du singulier « escuchas ».',
                    ],
                    [
                        'question' => 'Une enseignante demande ce que fait Ana chaque week-end. Quelle réponse utilise correctement le présent ?',
                        'choices' => [
                            ['choice_text' => 'Ana visitan a su abuela.', 'is_correct' => false],
                            ['choice_text' => 'Ana visita a su abuela.', 'is_correct' => true],
                            ['choice_text' => 'Ana visitar a su abuela.', 'is_correct' => false],
                            ['choice_text' => 'Ana visitaste a su abuela.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ana est la troisième personne du singulier, donc la forme correcte au présent est « visita ».',
                    ],
                    [
                        'question' => 'Quelle phrase présente le bon accord sujet-verbe ?',
                        'choices' => [
                            ['choice_text' => 'Nosotros comen temprano.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros comes temprano.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros comemos temprano.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros como temprano.', 'is_correct' => false],
                        ],
                        'explanation' => 'Nosotros prend la forme de la première personne du pluriel « comemos ».',
                    ],
                    [
                        'question' => 'Quelle option complète le mieux « Yo ___ en casa los domingos » ?',
                        'choices' => [
                            ['choice_text' => 'cocino', 'is_correct' => true],
                            ['choice_text' => 'cocinamos', 'is_correct' => false],
                            ['choice_text' => 'cocinas', 'is_correct' => false],
                            ['choice_text' => 'cocinan', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « yo », la forme au présent de cocinar est « cocino ».',
                    ],
                    [
                        'question' => 'Un élève écrit « Ellos estudia mucho. » Quelle est la correction ?',
                        'choices' => [
                            ['choice_text' => 'Ellos estudiamos mucho.', 'is_correct' => false],
                            ['choice_text' => 'Ellos estudias mucho.', 'is_correct' => false],
                            ['choice_text' => 'Ellos estudian mucho.', 'is_correct' => true],
                            ['choice_text' => 'Ellos estudio mucho.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ellos » exige la forme de la troisième personne du pluriel « estudian ».',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus naturelle pour un fait général sur une personne ?',
                        'choices' => [
                            ['choice_text' => 'Luis habló tres idiomas mañana.', 'is_correct' => false],
                            ['choice_text' => 'Luis habla tres idiomas.', 'is_correct' => true],
                            ['choice_text' => 'Luis hablará tres idiomas cada día ayer.', 'is_correct' => false],
                            ['choice_text' => 'Luis hablas tres idiomas.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une capacité ou un fait général se formule naturellement au présent : « Luis habla tres idiomas. »',
                    ],
                ],
            ],
            [
                'title' => 'Le présent des verbes réguliers en -AR',
                'description' => 'Renforcer les verbes réguliers en -ar et les utiliser dans de courtes situations du quotidien.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle forme de hablar correspond à « yo » ?',
                        'choices' => [
                            ['choice_text' => 'hablas', 'is_correct' => false],
                            ['choice_text' => 'hablan', 'is_correct' => false],
                            ['choice_text' => 'hablamos', 'is_correct' => false],
                            ['choice_text' => 'hablo', 'is_correct' => true],
                        ],
                        'explanation' => 'Les verbes réguliers en -ar prennent -o à la forme yo : hablar → hablo.',
                    ],
                    [
                        'question' => 'Choisissez la phrase naturelle pour « tu parles espagnol ».',
                        'choices' => [
                            ['choice_text' => 'Habla español.', 'is_correct' => false],
                            ['choice_text' => 'Hablas español.', 'is_correct' => true],
                            ['choice_text' => 'Hablo español.', 'is_correct' => false],
                            ['choice_text' => 'Hablan español.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « tú » prend la terminaison -as des verbes réguliers en -ar : hablas.',
                    ],
                    [
                        'question' => 'Toi et ta famille allez au même parc chaque samedi. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Caminan en el parque cada sábado.', 'is_correct' => false],
                            ['choice_text' => 'Camino en el parque cada sábado.', 'is_correct' => false],
                            ['choice_text' => 'Caminamos en el parque cada sábado.', 'is_correct' => true],
                            ['choice_text' => 'Caminas en el parque cada sábado.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nous » correspond à nosotros, donc caminar devient « caminamos ». L’expression de temps répétée appuie l’usage du présent.',
                    ],
                    [
                        'question' => 'Quelle terminaison complète « ellos trabaj___ » ?',
                        'choices' => [
                            ['choice_text' => '-an', 'is_correct' => true],
                            ['choice_text' => '-o', 'is_correct' => false],
                            ['choice_text' => '-as', 'is_correct' => false],
                            ['choice_text' => '-a', 'is_correct' => false],
                        ],
                        'explanation' => 'Les verbes réguliers en -ar prennent -an à la troisième personne du pluriel, donc trabajar devient trabajan.',
                    ],
                    [
                        'question' => 'Quelle phrase sonne juste ?',
                        'choices' => [
                            ['choice_text' => 'Mis amigos estudian por la tarde.', 'is_correct' => true],
                            ['choice_text' => 'Mis amigos estudio por la tarde.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos estudias por la tarde.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos estudiamos por la tarde.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mis amigos » est la troisième personne du pluriel, donc estudiar devient « estudian ».',
                    ],
                    [
                        'question' => 'Un apprenant connaît l’infinitif « comprar ». Quelle est la forme au présent pour la première personne du pluriel ?',
                        'choices' => [
                            ['choice_text' => 'compran', 'is_correct' => false],
                            ['choice_text' => 'compras', 'is_correct' => false],
                            ['choice_text' => 'compramos', 'is_correct' => true],
                            ['choice_text' => 'compro', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour les verbes réguliers en -ar, nosotros prend -amos : comprar → compramos.',
                    ],
                    [
                        'question' => 'Quelle question demande correctement à un ami ce qu’il fait le dimanche ?',
                        'choices' => [
                            ['choice_text' => '¿Qué hacen los domingos?', 'is_correct' => false],
                            ['choice_text' => '¿Qué haces los domingos?', 'is_correct' => true],
                            ['choice_text' => '¿Qué hago los domingos?', 'is_correct' => false],
                            ['choice_text' => '¿Qué hacemos los domingos?', 'is_correct' => false],
                        ],
                        'explanation' => 'En s’adressant à une seule personne avec tú, la forme au présent est haces.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un verbe régulier en -ar au présent ?',
                        'choices' => [
                            ['choice_text' => 'Vivimos en Sevilla.', 'is_correct' => false],
                            ['choice_text' => 'Comemos temprano.', 'is_correct' => false],
                            ['choice_text' => 'Tienen un coche.', 'is_correct' => false],
                            ['choice_text' => 'Trabajan aquí.', 'is_correct' => true],
                        ],
                        'explanation' => '« Trabajan » provient du verbe régulier en -ar trabajar et se trouve au présent.',
                    ],
                    [
                        'question' => 'Une réceptionniste accueille une visiteuse et explique son travail : « Yo ___ en recepción. » Quelle forme est correcte ?',
                        'choices' => [
                            ['choice_text' => 'trabajas', 'is_correct' => false],
                            ['choice_text' => 'trabaja', 'is_correct' => false],
                            ['choice_text' => 'trabajamos', 'is_correct' => false],
                            ['choice_text' => 'trabajo', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sujet est yo, donc trabajar devient « trabajo ».',
                    ],
                    [
                        'question' => 'Quelle phrase illustre une erreur fréquente chez les débutants ?',
                        'choices' => [
                            ['choice_text' => 'Nosotros escuchamos música.', 'is_correct' => false],
                            ['choice_text' => 'Tú escuchas música.', 'is_correct' => false],
                            ['choice_text' => 'Ella escuchan música.', 'is_correct' => true],
                            ['choice_text' => 'Yo escucho música.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ella » est singulier, donc le verbe doit être « escucha » et non le pluriel « escuchan ».',
                    ],
                    [
                        'question' => 'Quelle phrase utiliseriez-vous pour décrire un groupe qui vit dans une ville ?',
                        'choices' => [
                            ['choice_text' => 'Ellos vive en Valencia.', 'is_correct' => false],
                            ['choice_text' => 'Ellos viven en Valencia.', 'is_correct' => true],
                            ['choice_text' => 'Ellos vivimos en Valencia.', 'is_correct' => false],
                            ['choice_text' => 'Ellos vives en Valencia.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ellos » exige une forme verbale au pluriel, donc vivir devient « viven ».',
                    ],
                ],
            ],
            [
                'title' => 'Le présent des verbes réguliers en -ER et -IR',
                'description' => 'Comparer les verbes réguliers en -er et en -ir et utiliser le présent avec précision dans la communication quotidienne.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle forme de comer correspond à « yo » ?',
                        'choices' => [
                            ['choice_text' => 'como', 'is_correct' => true],
                            ['choice_text' => 'comes', 'is_correct' => false],
                            ['choice_text' => 'comen', 'is_correct' => false],
                            ['choice_text' => 'comemos', 'is_correct' => false],
                        ],
                        'explanation' => 'Les verbes réguliers en -er prennent -o pour yo : comer → como.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « Tu manges à la maison » ?',
                        'choices' => [
                            ['choice_text' => 'Come en casa.', 'is_correct' => false],
                            ['choice_text' => 'Comes en casa.', 'is_correct' => true],
                            ['choice_text' => 'Como en casa.', 'is_correct' => false],
                            ['choice_text' => 'Comen en casa.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme tú de comer est « comes ».',
                    ],
                    [
                        'question' => 'Quelle forme complète « Nosotros ___ en casa » ?',
                        'choices' => [
                            ['choice_text' => 'viven', 'is_correct' => false],
                            ['choice_text' => 'vives', 'is_correct' => false],
                            ['choice_text' => 'vivo', 'is_correct' => false],
                            ['choice_text' => 'vivimos', 'is_correct' => true],
                        ],
                        'explanation' => 'Avec nosotros, vivir devient « vivimos ».',
                    ],
                    [
                        'question' => 'Quelle est la forme de la troisième personne du pluriel de beber ?',
                        'choices' => [
                            ['choice_text' => 'bebes', 'is_correct' => false],
                            ['choice_text' => 'bebo', 'is_correct' => false],
                            ['choice_text' => 'beben', 'is_correct' => true],
                            ['choice_text' => 'bebemos', 'is_correct' => false],
                        ],
                        'explanation' => 'Ellos, ellas et ustedes utilisent « beben » pour le verbe régulier en -er beber.',
                    ],
                    [
                        'question' => 'Un serveur voit un couple boire de l’eau. Quelle phrase décrit correctement ce qu’ils boivent ?',
                        'choices' => [
                            ['choice_text' => 'Ellos beben agua.', 'is_correct' => true],
                            ['choice_text' => 'Ellos bebe agua.', 'is_correct' => false],
                            ['choice_text' => 'Ellos bebemos agua.', 'is_correct' => false],
                            ['choice_text' => 'Ellos bebes agua.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le couple correspond à « ellos », donc la forme verbale est « beben ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un verbe régulier en -ir ?',
                        'choices' => [
                            ['choice_text' => 'Escriben correos cada día.', 'is_correct' => false],
                            ['choice_text' => 'Escribimos correos cada día.', 'is_correct' => true],
                            ['choice_text' => 'Escribo correos cada día.', 'is_correct' => false],
                            ['choice_text' => 'Escribes correos cada día.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet est nosotros, donc escribir devient « escribimos ».',
                    ],
                    [
                        'question' => 'Quelle affirmation sur les verbes réguliers en -er et -ir au présent est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ils utilisent exactement les mêmes terminaisons à chaque personne.', 'is_correct' => false],
                            ['choice_text' => 'Seuls les verbes en -ir ont une forme yo.', 'is_correct' => false],
                            ['choice_text' => 'Les verbes en -er n’utilisent jamais la terminaison -en.', 'is_correct' => false],
                            ['choice_text' => 'Les deux prennent -o pour yo, mais leurs formes nosotros diffèrent.', 'is_correct' => true],
                        ],
                        'explanation' => 'Les deux ont une forme yo en -o, mais pour nosotros on obtient comemos contre vivimos.',
                    ],
                    [
                        'question' => 'Un élève écrit « Nosotros escriben cartas. » Que faut-il changer ?',
                        'choices' => [
                            ['choice_text' => 'Remplacer « nosotros » par « yo ».', 'is_correct' => false],
                            ['choice_text' => 'Remplacer « cartas » par « carta ».', 'is_correct' => false],
                            ['choice_text' => 'Remplacer « escriben » par « escribimos ».', 'is_correct' => true],
                            ['choice_text' => 'Remplacer « escriben » par « escribes ».', 'is_correct' => false],
                        ],
                        'explanation' => 'Nosotros exige la forme de la première personne du pluriel « escribimos ».',
                    ],
                    [
                        'question' => 'Quelle paire est correctement assortie ?',
                        'choices' => [
                            ['choice_text' => 'yo vendes / ellos vendemos', 'is_correct' => false],
                            ['choice_text' => 'yo vende / ellos vendo', 'is_correct' => false],
                            ['choice_text' => 'yo vendo / ellos venden', 'is_correct' => true],
                            ['choice_text' => 'yo vendemos / ellos vendes', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour vender, yo donne « vendo » et la troisième personne du pluriel « venden ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement une habitude actuelle ?',
                        'choices' => [
                            ['choice_text' => 'Mi hermana recibimos muchos mensajes.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana recibes muchos mensajes.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana recibo muchos mensajes.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana recibe muchos mensajes.', 'is_correct' => true],
                        ],
                        'explanation' => '« Mi hermana » est la troisième personne du singulier, donc recibir devient « recibe ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ustedes comen temprano.', 'is_correct' => true],
                            ['choice_text' => 'Ustedes comes temprano.', 'is_correct' => false],
                            ['choice_text' => 'Ustedes como temprano.', 'is_correct' => false],
                            ['choice_text' => 'Ustedes comemos temprano.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ustedes prend la forme de la troisième personne du pluriel, donc comer devient « comen ».',
                    ],
                ],
            ],
            [
                'title' => 'Les usages quotidiens du présent',
                'description' => 'Utiliser le présent pour les routines, les habitudes, les faits, les horaires et ce qui se passe dans des contextes simples du quotidien.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle phrase décrit clairement une habitude ?',
                        'choices' => [
                            ['choice_text' => 'Leí antes de dormir ayer.', 'is_correct' => false],
                            ['choice_text' => 'Leeré antes de dormir mañana.', 'is_correct' => false],
                            ['choice_text' => 'Leo antes de dormir.', 'is_correct' => true],
                            ['choice_text' => 'Leía una vez el año pasado.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le présent convient naturellement à une habitude répétée : « Leo antes de dormir. »',
                    ],
                    [
                        'question' => 'Un horaire indique que le train part à 8 h 00. Quelle phrase de débutant est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'El tren salió a las ocho mañana.', 'is_correct' => false],
                            ['choice_text' => 'El tren sale a las ocho.', 'is_correct' => true],
                            ['choice_text' => 'El tren saldrá a las ocho ayer.', 'is_correct' => false],
                            ['choice_text' => 'El tren salen a las ocho.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’espagnol peut utiliser le présent pour les événements programmés : « El tren sale a las ocho. »',
                    ],
                    [
                        'question' => 'Quelle phrase convient le mieux à un fait général ?',
                        'choices' => [
                            ['choice_text' => 'El agua hirvió mañana.', 'is_correct' => false],
                            ['choice_text' => 'El agua hervirá ayer.', 'is_correct' => false],
                            ['choice_text' => 'El agua hierven a 100 grados.', 'is_correct' => false],
                            ['choice_text' => 'El agua hierve a 100 grados Celsius al nivel del mar.', 'is_correct' => true],
                        ],
                        'explanation' => 'Les faits généraux et les vérités scientifiques s’expriment couramment au présent.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie que quelqu’un se sent fatigué en ce moment ?',
                        'choices' => [
                            ['choice_text' => 'Estoy cansado.', 'is_correct' => true],
                            ['choice_text' => 'Estuve cansado mañana.', 'is_correct' => false],
                            ['choice_text' => 'Estaré cansado ayer.', 'is_correct' => false],
                            ['choice_text' => 'Estás cansado yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme au présent « estoy » exprime l’état actuel du locuteur.',
                    ],
                    [
                        'question' => 'Un ami te demande ce que tu achètes habituellement au marché. Quelle réponse au présent convient ?',
                        'choices' => [
                            ['choice_text' => 'Compré fruta para la cena mañana.', 'is_correct' => false],
                            ['choice_text' => 'Compraron fruta para la cena yo.', 'is_correct' => false],
                            ['choice_text' => 'Compro fruta para la cena.', 'is_correct' => true],
                            ['choice_text' => 'Comprar fruta para la cena.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le présent simple peut exprimer une habitude : « Compro fruta para la cena. »',
                    ],
                    [
                        'question' => 'Quelle phrase illustre une routine hebdomadaire régulière ?',
                        'choices' => [
                            ['choice_text' => 'Los sábados limpiamos ayer la casa.', 'is_correct' => false],
                            ['choice_text' => 'Los sábados limpiaremos la casa ayer.', 'is_correct' => false],
                            ['choice_text' => 'Los sábados limpiar la casa.', 'is_correct' => false],
                            ['choice_text' => 'Los sábados limpiamos la casa.', 'is_correct' => true],
                        ],
                        'explanation' => 'Une routine hebdomadaire répétée convient naturellement au présent : « limpiamos ».',
                    ],
                    [
                        'question' => 'Quelle question demande où une personne travaille habituellement ?',
                        'choices' => [
                            ['choice_text' => '¿Dónde trabajaste mañana?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde trabajas?', 'is_correct' => true],
                            ['choice_text' => '¿Dónde trabajarás ayer?', 'is_correct' => false],
                            ['choice_text' => '¿Dónde trabaja yo?', 'is_correct' => false],
                        ],
                        'explanation' => '« ¿Dónde trabajas? » utilise le présent pour demander le métier actuel ou habituel de la personne.',
                    ],
                    [
                        'question' => 'Quelle phrase entendrait-on naturellement lorsqu’on présente un membre de sa famille ?',
                        'choices' => [
                            ['choice_text' => 'Mi padre trabaja en un banco.', 'is_correct' => true],
                            ['choice_text' => 'Mi padre trabajan en un banco.', 'is_correct' => false],
                            ['choice_text' => 'Mi padre trabajamos en un banco.', 'is_correct' => false],
                            ['choice_text' => 'Mi padre trabajar en un banco.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mi padre » est singulier, donc la forme au présent est « trabaja ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise le présent pour décrire quelque chose qui se passe ces jours-ci ?',
                        'choices' => [
                            ['choice_text' => 'Ahora estudié mucho mañana.', 'is_correct' => false],
                            ['choice_text' => 'Ahora estudiaré mucho ayer.', 'is_correct' => false],
                            ['choice_text' => 'Ahora estudio mucho.', 'is_correct' => true],
                            ['choice_text' => 'Ahora estudias yo mucho.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ahora estudio mucho » exprime ce que le locuteur fait actuellement ou durant cette période.',
                    ],
                    [
                        'question' => 'Un magasin affiche ses horaires d’ouverture : « Abrimos a las nueve. » Qu’exprime le présent ici ?',
                        'choices' => [
                            ['choice_text' => 'Une action achevée dans le passé.', 'is_correct' => false],
                            ['choice_text' => 'Une action garantie uniquement dans un futur lointain.', 'is_correct' => false],
                            ['choice_text' => 'Un ordre donné aux clients.', 'is_correct' => false],
                            ['choice_text' => 'Un horaire d’ouverture régulier ou programmé.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le présent est souvent utilisé pour les horaires et les heures d’ouverture fixes.',
                    ],
                    [
                        'question' => 'Quelle phrase convient le mieux pour dire ce que l’on fait normalement après le travail ?',
                        'choices' => [
                            ['choice_text' => 'Después del trabajo, ceno en casa.', 'is_correct' => true],
                            ['choice_text' => 'Después del trabajo, cené mañana en casa.', 'is_correct' => false],
                            ['choice_text' => 'Después del trabajo, cenaré ayer en casa.', 'is_correct' => false],
                            ['choice_text' => 'Después del trabajo, cenar en casa.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ceno » au présent exprime une routine normale : ce que le locuteur fait habituellement après le travail.',
                    ],
                    [
                        'question' => 'Quelle affirmation explique le mieux un usage courant du présent espagnol ?',
                        'choices' => [
                            ['choice_text' => 'Il ne sert que pour des actions qui se produisent à cette seconde précise.', 'is_correct' => false],
                            ['choice_text' => 'Il peut décrire des habitudes, des faits, des situations actuelles et des horaires.', 'is_correct' => true],
                            ['choice_text' => 'Il ne s’utilise qu’avec des expressions de temps comme « ayer ».', 'is_correct' => false],
                            ['choice_text' => 'Il ne peut jamais décrire des actions répétées.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les débutants devraient voir le présent comme un temps souple, utilisé pour les routines, les faits généraux, les situations actuelles et les événements programmés.',
                    ],
                ],
            ],
            [
                'title' => 'Les verbes irréguliers fréquents au présent',
                'description' => 'Pratiquer les verbes irréguliers fréquents au présent, comme ser, estar, tener, ir, hacer et venir, dans des contextes simples.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle forme de ser correspond à « yo » ?',
                        'choices' => [
                            ['choice_text' => 'eres', 'is_correct' => false],
                            ['choice_text' => 'soy', 'is_correct' => true],
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'son', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme au présent de la première personne du singulier de ser est « soy ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ella es profesora.', 'is_correct' => true],
                            ['choice_text' => 'Ella soy profesora.', 'is_correct' => false],
                            ['choice_text' => 'Ella eres profesora.', 'is_correct' => false],
                            ['choice_text' => 'Ella son profesora.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ella prend la forme de la troisième personne du singulier « es » de ser.',
                    ],
                    [
                        'question' => 'Choisissez la forme correcte de estar : « Nosotros ___ en casa. »',
                        'choices' => [
                            ['choice_text' => 'están', 'is_correct' => false],
                            ['choice_text' => 'estoy', 'is_correct' => false],
                            ['choice_text' => 'estás', 'is_correct' => false],
                            ['choice_text' => 'estamos', 'is_correct' => true],
                        ],
                        'explanation' => 'Nosotros utilise « estamos » au présent de estar.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement tener ?',
                        'choices' => [
                            ['choice_text' => 'Tienes dos hermanos yo.', 'is_correct' => false],
                            ['choice_text' => 'Tiene dos hermanos yo.', 'is_correct' => false],
                            ['choice_text' => 'Tengo dos hermanos.', 'is_correct' => true],
                            ['choice_text' => 'Tenen dos hermanos.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme yo de tener est « tengo ».',
                    ],
                    [
                        'question' => 'Maria et Pablo partent pour l’école. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ellos voy a la escuela.', 'is_correct' => false],
                            ['choice_text' => 'Ellos van a la escuela.', 'is_correct' => true],
                            ['choice_text' => 'Ellos vas a la escuela.', 'is_correct' => false],
                            ['choice_text' => 'Ellos vamos a la escuela.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ir est irrégulier au présent ; ellos/ellas/ustedes utilisent « van ».',
                    ],
                    [
                        'question' => 'Un élève dit : « Chaque samedi, je fais mes devoirs. » Quelle forme au présent est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Haces mi tarea.', 'is_correct' => false],
                            ['choice_text' => 'Hace mi tarea.', 'is_correct' => false],
                            ['choice_text' => 'Hacen mi tarea.', 'is_correct' => false],
                            ['choice_text' => 'Hago mi tarea.', 'is_correct' => true],
                        ],
                        'explanation' => 'La forme yo de hacer est l’irrégulière « hago ».',
                    ],
                    [
                        'question' => 'Quelle option complète « ¿De dónde ___ tú? » pour demander d’où vient quelqu’un ?',
                        'choices' => [
                            ['choice_text' => 'soy', 'is_correct' => false],
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'eres', 'is_correct' => true],
                            ['choice_text' => 'son', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec tú, ser devient « eres ». L’expression complète est « ¿De dónde eres? »',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement un lieu où l’on se trouve actuellement ?',
                        'choices' => [
                            ['choice_text' => 'Estamos en el centro.', 'is_correct' => true],
                            ['choice_text' => 'Somos en el centro.', 'is_correct' => false],
                            ['choice_text' => 'Están en el centro yo.', 'is_correct' => false],
                            ['choice_text' => 'Estoy en el centro nosotros.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le lieu où l’on se trouve se formule avec estar : « Estamos en el centro. »',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement tener pour un groupe ?',
                        'choices' => [
                            ['choice_text' => 'Ellos tengo tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Ellos tienes tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Ellos tenéis tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Ellos tienen tiempo.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le tener à la troisième personne du pluriel est « tienen ».',
                    ],
                    [
                        'question' => 'Un ami te demande ce que tu feras ce soir. Quelle réponse utilise correctement « ir + a + infinitif » ?',
                        'choices' => [
                            ['choice_text' => 'Vas al cine.', 'is_correct' => false],
                            ['choice_text' => 'Va al cine yo.', 'is_correct' => false],
                            ['choice_text' => 'Voy a ir al cine.', 'is_correct' => true],
                            ['choice_text' => 'Vamos al cine yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « yo », ir devient « voy ». Pour exprimer un projet proche, on emploie « ir + a + infinitif » : « Voy a ir al cine. »',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement venir avec « nous » ?',
                        'choices' => [
                            ['choice_text' => 'Venimos temprano.', 'is_correct' => true],
                            ['choice_text' => 'Vienen temprano.', 'is_correct' => false],
                            ['choice_text' => 'Vienes temprano.', 'is_correct' => false],
                            ['choice_text' => 'Vengo temprano nosotros.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme nosotros de venir est « venimos ».',
                    ],
                    [
                        'question' => 'Quelle paire est correctement assortie ?',
                        'choices' => [
                            ['choice_text' => 'yo estás / ellos está', 'is_correct' => false],
                            ['choice_text' => 'yo estoy / ellos están', 'is_correct' => true],
                            ['choice_text' => 'yo está / ellos estoy', 'is_correct' => false],
                            ['choice_text' => 'yo están / ellos estamos', 'is_correct' => false],
                        ],
                        'explanation' => 'Estar change selon le sujet : yo estoy, tú estás, él/ella está, nosotros estamos, ellos están.',
                    ],
                    [
                        'question' => 'Quelle phrase contient une forme correcte de hacer au présent ?',
                        'choices' => [
                            ['choice_text' => 'Mis padres hago la cena.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres haces la cena.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres hacen la cena.', 'is_correct' => true],
                            ['choice_text' => 'Mis padres hace la cena.', 'is_correct' => false],
                        ],
                        'explanation' => 'Mis padres est la troisième personne du pluriel, donc hacer devient « hacen ».',
                    ],
                ],
            ],
            [
                'title' => 'Les verbes à changement de radical au présent',
                'description' => 'Reconnaître et utiliser les changements de radical fréquents au présent dans des verbes courants comme querer, poder, pedir et dormir.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle est la forme yo correcte de querer ?',
                        'choices' => [
                            ['choice_text' => 'quiero', 'is_correct' => true],
                            ['choice_text' => 'quero', 'is_correct' => false],
                            ['choice_text' => 'quiere', 'is_correct' => false],
                            ['choice_text' => 'queremos', 'is_correct' => false],
                        ],
                        'explanation' => 'Querer change e → ie dans la plupart des formes au présent : yo quiero.',
                    ],
[
    'question' => 'Un client s’adresse poliment à un employé : « Vous voulez partir tôt. » Quelle phrase espagnole convient ?',
    'choices' => [
        ['choice_text' => 'Usted quiere salir temprano.', 'is_correct' => true],
        ['choice_text' => 'Usted quieres salir temprano.', 'is_correct' => false],
        ['choice_text' => 'Usted quiero salir temprano.', 'is_correct' => false],
        ['choice_text' => 'Usted queremos salir temprano.', 'is_correct' => false],
    ],
    'explanation' => 'Avec « usted », querer prend la forme de la troisième personne du singulier : « quiere ».'
],
                    [
                        'question' => 'Quelle forme de poder correspond à « tú » ?',
                        'choices' => [
                            ['choice_text' => 'puedo', 'is_correct' => false],
                            ['choice_text' => 'puedes', 'is_correct' => true],
                            ['choice_text' => 'podemos', 'is_correct' => false],
                            ['choice_text' => 'pueden', 'is_correct' => false],
                        ],
                        'explanation' => 'Poder change o → ue au présent : tú puedes.',
                    ],
                    [
                        'question' => 'Un enfant demande la permission. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => '¿Puede salir yo?', 'is_correct' => false],
                            ['choice_text' => '¿Podemos salir yo?', 'is_correct' => false],
                            ['choice_text' => '¿Pudes salir?', 'is_correct' => false],
                            ['choice_text' => '¿Puedo salir?', 'is_correct' => true],
                        ],
                        'explanation' => 'La forme yo de poder est « puedo », donc « ¿Puedo salir? » est correct.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement dormir avec « elle » ?',
                        'choices' => [
                            ['choice_text' => 'Ella duerme ocho horas.', 'is_correct' => true],
                            ['choice_text' => 'Ella dorme ocho horas.', 'is_correct' => false],
                            ['choice_text' => 'Ella duermen ocho horas.', 'is_correct' => false],
                            ['choice_text' => 'Ella dormimos ocho horas.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dormir change o → ue à la troisième personne du singulier : duerme.',
                    ],
                    [
                        'question' => 'Quelle affirmation sur querer au présent est exacte ?',
                        'choices' => [
                            ['choice_text' => 'Le radical change à chaque forme, y compris queremos.', 'is_correct' => false],
                            ['choice_text' => 'Le radical change dans des formes comme quiero, quieres et quieren, mais pas dans queremos.', 'is_correct' => true],
                            ['choice_text' => 'Querer est totalement régulier.', 'is_correct' => false],
                            ['choice_text' => 'Seule la forme yo change.', 'is_correct' => false],
                        ],
                        'explanation' => 'Querer suit le schéma courant e → ie, tandis que nosotros garde la voyelle d’origine : queremos.',
                    ],
                    [
                        'question' => 'Un client demande poliment de l’aide. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => '¿Pude ayudarme?', 'is_correct' => false],
                            ['choice_text' => '¿Podemos ayudarme usted?', 'is_correct' => false],
                            ['choice_text' => '¿Puede ayudarme?', 'is_correct' => true],
                            ['choice_text' => '¿Pudes ayudarme?', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec usted, poder utilise la forme de la troisième personne du singulier « puede ».',
                    ],
                    [
                        'question' => 'Quelle paire montre correctement le changement de radical de pedir ?',
                        'choices' => [
                            ['choice_text' => 'pedo / pede', 'is_correct' => false],
                            ['choice_text' => 'pido / pidesen', 'is_correct' => false],
                            ['choice_text' => 'pedimos / pidimos', 'is_correct' => false],
                            ['choice_text' => 'pido / pide', 'is_correct' => true],
                        ],
                        'explanation' => 'Pedir change e → i dans la plupart des formes au présent : pido, pides, pide, mais nosotros pedimos.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte pour « Nous dormons bien » ?',
                        'choices' => [
                            ['choice_text' => 'Duermimos bien.', 'is_correct' => false],
                            ['choice_text' => 'Dormimos bien.', 'is_correct' => true],
                            ['choice_text' => 'Duerme bien.', 'is_correct' => false],
                            ['choice_text' => 'Duermen bien nosotros.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme nosotros de dormir ne montre pas le changement de radical : dormimos.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un verbe à changement de radical fréquent utilisé correctement ?',
                        'choices' => [
                            ['choice_text' => 'Mis amigos queren viajar.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos queremos viajar.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos quieren viajar.', 'is_correct' => true],
                            ['choice_text' => 'Mis amigos quiere viajar.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec mis amigos, querer prend la forme de la troisième personne du pluriel « quieren ».',
                    ],
                    [
                        'question' => 'Quelle option complète correctement « Nosotros ___ ayuda » à partir de pedir ?',
                        'choices' => [
                            ['choice_text' => 'pidimos', 'is_correct' => false],
                            ['choice_text' => 'piden', 'is_correct' => false],
                            ['choice_text' => 'pido', 'is_correct' => false],
                            ['choice_text' => 'pedimos', 'is_correct' => true],
                        ],
                        'explanation' => 'Pedir ne change pas de radical à la forme nosotros, donc la forme correcte est « pedimos ».',
                    ],
                   [
    'question' => 'Tu demandes à un ami : « Tu veux venir avec moi ? » Quelle phrase espagnole est correcte ?',
    'choices' => [
        ['choice_text' => '¿Quieres venir conmigo?', 'is_correct' => true],
        ['choice_text' => '¿Quiero venir conmigo?', 'is_correct' => false],
        ['choice_text' => '¿Quiere venir conmigo?', 'is_correct' => false],
        ['choice_text' => '¿Queremos venir conmigo?', 'is_correct' => false],
    ],
    'explanation' => 'Avec « tú », querer devient « quieres » au présent : « ¿Quieres venir conmigo? »'
],
                ],
            ],
            [
                'title' => 'Pratique mixte du présent',
                'description' => 'Réunir les formes régulières et irrégulières du présent dans des situations réalistes pour débutants et de courtes tâches de résolution de problèmes.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Lucía dit : « Je vis à Séville et je travaille dans une école. » Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Vives en Sevilla y trabajas en una escuela.', 'is_correct' => false],
                            ['choice_text' => 'Vive en Sevilla y trabaja en una escuela.', 'is_correct' => false],
                            ['choice_text' => 'Vivo en Sevilla y trabajo en una escuela.', 'is_correct' => true],
                            ['choice_text' => 'Vivimos en Sevilla y trabajamos en una escuela.', 'is_correct' => false],
                        ],
                        'explanation' => 'Lucía parle d’elle-même, donc les deux verbes prennent la forme yo : vivo et trabajo.',
                    ],
                    [
                        'question' => 'Quelle réponse convient à la question « ¿Qué haces después de clase? »',
                        'choices' => [
                            ['choice_text' => 'Estudias en la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Estudian en la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Estudiar en la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Estudio en la biblioteca.', 'is_correct' => true],
                        ],
                        'explanation' => 'La question « Que fais-tu ? » s’adresse à tú, mais la réponse se fait du point de vue du locuteur : « Estudio. »',
                    ],
                    [
                        'question' => 'Un couple dit : « Nous voulons manger maintenant. » Quelle phrase correspond le mieux ?',
                        'choices' => [
                            ['choice_text' => 'Queremos comer ahora.', 'is_correct' => true],
                            ['choice_text' => 'Quieren comer ahora.', 'is_correct' => false],
                            ['choice_text' => 'Quiero comer ahora.', 'is_correct' => false],
                            ['choice_text' => 'Queres comer ahora.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le couple parle en tant que nosotros, donc querer devient « queremos ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte pour un groupe qui parle de ce qu’il peut faire ?',
                        'choices' => [
                            ['choice_text' => 'Pueden ayudar nosotros.', 'is_correct' => false],
                            ['choice_text' => 'Podemos ayudar.', 'is_correct' => true],
                            ['choice_text' => 'Puedes ayudar nosotros.', 'is_correct' => false],
                            ['choice_text' => 'Puedo ayudar nosotros.', 'is_correct' => false],
                        ],
                        'explanation' => 'Nosotros utilise « podemos », la forme au présent de poder sans le changement de radical.',
                    ],
                    [
                        'question' => 'Quelle phrase combine correctement une routine avec un verbe irrégulier au présent ?',
                        'choices' => [
                            ['choice_text' => 'Cada lunes vas al gimnasio yo.', 'is_correct' => false],
                            ['choice_text' => 'Cada lunes voy al gimnasio.', 'is_correct' => true],
                            ['choice_text' => 'Cada lunes va al gimnasio yo.', 'is_correct' => false],
                            ['choice_text' => 'Cada lunes ir al gimnasio.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet est yo, donc ir devient « voy ». L’expression « cada lunes » souligne clairement la routine.',
                    ],
                    [
                        'question' => 'Un commerçant dit : « Mes employés travaillent ici tous les jours. » Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Mis empleados trabajan aquí todos los días.', 'is_correct' => true],
                            ['choice_text' => 'Mis empleados trabajo aquí todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Mis empleados trabajamos aquí todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Mis empleados trabajas aquí todos los días.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mis empleados » est la troisième personne du pluriel, donc trabajar devient « trabajan ».',
                    ],
                    [
                        'question' => 'Quelle phrase met correctement en contraste un verbe régulier et un verbe irrégulier au présent ?',
                        'choices' => [
                            ['choice_text' => 'Estudias por la mañana y tengo clase por la tarde.', 'is_correct' => false],
                            ['choice_text' => 'Estudio por la mañana y tienes clase por la tarde.', 'is_correct' => false],
                            ['choice_text' => 'Estudian por la mañana y tengo clase por la tarde.', 'is_correct' => false],
                            ['choice_text' => 'Estudio por la mañana y tengo clase por la tarde.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le locuteur utilise yo dans les deux parties : estudio pour estudiar et tengo pour tener.',
                    ],
                    [
                        'question' => 'Quelle phrase une réceptionniste d’hôtel utiliserait-elle naturellement pour expliquer où elle se trouve ?',
                        'choices' => [
                            ['choice_text' => 'Soy en la recepción.', 'is_correct' => false],
                            ['choice_text' => 'Estás en la recepción.', 'is_correct' => false],
                            ['choice_text' => 'Estoy en la recepción.', 'is_correct' => true],
                            ['choice_text' => 'Estamos en la recepción.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un lieu actuel, la réceptionniste utilise estar : « Estoy en la recepción. »',
                    ],
[
    'question' => 'Quelle phrase utilise correctement servir avec « mes parents » ?',
    'choices' => [
        ['choice_text' => 'Mis padres serven la cena a las ocho.', 'is_correct' => false],
        ['choice_text' => 'Mis padres sirven la cena a las ocho.', 'is_correct' => true],
        ['choice_text' => 'Mis padres servimos la cena a las ocho.', 'is_correct' => false],
        ['choice_text' => 'Mis padres sirvo la cena a las ocho.', 'is_correct' => false],
    ],
    'explanation' => '« Mes parents » correspond à ellos/ellas, donc servir prend la forme « sirven » au présent.'
],
                    [
                        'question' => 'Quelle réponse correspond le mieux à « ¿Dónde viven tus padres? »',
                        'choices' => [
                            ['choice_text' => 'Vivimos en Granada.', 'is_correct' => false],
                            ['choice_text' => 'Vives en Granada.', 'is_correct' => false],
                            ['choice_text' => 'Viven en Granada.', 'is_correct' => true],
                            ['choice_text' => 'Vivo en Granada.', 'is_correct' => false],
                        ],
                        'explanation' => 'Tus padres signifie « tes parents », donc la réponse utilise la troisième personne du pluriel : viven.',
                    ],
                    [
                        'question' => 'Un élève dit : « Je ne peux pas comprendre la question. » Quelle phrase de débutant est correcte ?',
                        'choices' => [
                            ['choice_text' => 'No puedo entender la pregunta.', 'is_correct' => true],
                            ['choice_text' => 'No puedes entender la pregunta.', 'is_correct' => false],
                            ['choice_text' => 'No pueden entender la pregunta yo.', 'is_correct' => false],
                            ['choice_text' => 'No podo entender la pregunta.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le locuteur utilise yo, donc poder devient « puedo ».',
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
