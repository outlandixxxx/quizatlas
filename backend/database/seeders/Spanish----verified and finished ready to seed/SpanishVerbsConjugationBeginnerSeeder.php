<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishVerbsConjugationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('major_id', Major::where('slug', 'spanish')->firstOrFail()->id)->where('name', 'Verbs & Conjugation')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bases des verbes espagnols et terminaisons personnelles',
                'description' => 'Familiarise-toi avec les pronoms sujets, les infinitifs et l’idée de changer les terminaisons des verbes selon la personne qui fait l’action.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Dans la phrase « Yo estudio español », quel mot indique qui étudie ?',
                        'choices' => [
                            ['choice_text' => 'Yo', 'is_correct' => true],
                            ['choice_text' => 'estudio', 'is_correct' => false],
                            ['choice_text' => 'español', 'is_correct' => false],
                            ['choice_text' => 'seulement la terminaison -o', 'is_correct' => false],
                        ],
                        'explanation' => '« Yo » est le pronom sujet et identifie directement la personne qui fait l’action. La terminaison du verbe confirme aussi cette lecture.',
                    ],
                    [
                        'question' => 'Quel verbe est à l’infinitif ?',
                        'choices' => [
                            ['choice_text' => 'hablo', 'is_correct' => false],
                            ['choice_text' => 'hablas', 'is_correct' => false],
                            ['choice_text' => 'hablan', 'is_correct' => false],
                            ['choice_text' => 'hablar', 'is_correct' => true],
                        ],
                        'explanation' => '« Hablar » est la forme du dictionnaire, c’est-à-dire l’infinitif. « Hablo », « hablas » et « hablan » sont des formes conjuguées.',
                    ],
                    [
                        'question' => 'Quelle terminaison est normalement utilisée avec « yo » pour un verbe régulier au présent ?',
                        'choices' => [
                            ['choice_text' => '-as', 'is_correct' => false],
                            ['choice_text' => '-o', 'is_correct' => true],
                            ['choice_text' => '-a', 'is_correct' => false],
                            ['choice_text' => '-an', 'is_correct' => false],
                        ],
                        'explanation' => 'Les verbes réguliers au présent utilisent souvent -o pour « yo », comme dans « hablo », « como » et « vivo ».',
                    ],
                    [
                        'question' => 'Lucía parle d’elle-même. Quelle forme de « trabajar » convient ?',
                        'choices' => [
                            ['choice_text' => 'trabajas', 'is_correct' => false],
                            ['choice_text' => 'trabaja', 'is_correct' => false],
                            ['choice_text' => 'trabajo', 'is_correct' => true],
                            ['choice_text' => 'trabajan', 'is_correct' => false],
                        ],
                        'explanation' => 'Lucía est une seule personne qui parle d’elle-même, donc la première personne du singulier est « trabajo ».',
                    ],
                    [
                        'question' => 'Quelle phrase accorde correctement le sujet « nosotros » avec « vivir » au présent ?',
                        'choices' => [
                            ['choice_text' => 'Nosotros viven aquí.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros vives aquí.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros vivo aquí.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros vivimos aquí.', 'is_correct' => true],
                        ],
                        'explanation' => '« Vivimos » est la forme régulière de « vivir » au présent pour « nosotros ».',
                    ],
                    [
                        'question' => 'Un ami demande « ¿Estudias aquí? », en s’adressant à une seule personne avec « tú ». Quelle réponse est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Sí, estudio aquí.', 'is_correct' => true],
                            ['choice_text' => 'Sí, estudias aquí.', 'is_correct' => false],
                            ['choice_text' => 'Sí, estudia aquí.', 'is_correct' => false],
                            ['choice_text' => 'Sí, estudian aquí.', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse se fait du point de vue du locuteur, donc « yo estudio » est la forme appropriée.',
                    ],
                    [
                        'question' => 'Quelle paire accorde correctement le sujet et la forme verbale ?',
                        'choices' => [
                            ['choice_text' => 'Ellos comes.', 'is_correct' => false],
                            ['choice_text' => 'Ellos como.', 'is_correct' => false],
                            ['choice_text' => 'Ellos comen.', 'is_correct' => true],
                            ['choice_text' => 'Ellos come.', 'is_correct' => false],
                        ],
                        'explanation' => '« Comen » est la forme du présent à la troisième personne du pluriel de « comer », qui correspond à « ellos ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise « tú » avec la forme régulière du présent de « leer » ?',
                        'choices' => [
                            ['choice_text' => 'Tú leo mucho.', 'is_correct' => false],
                            ['choice_text' => 'Tú lees mucho.', 'is_correct' => true],
                            ['choice_text' => 'Tú lee mucho.', 'is_correct' => false],
                            ['choice_text' => 'Tú leen mucho.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour les verbes réguliers en -er, « tú » prend -es, donc « leer » devient « lees ».',
                    ],
                    [
                        'question' => 'Quel est le rôle principal de la conjugaison dans une phrase espagnole simple ?',
                        'choices' => [
                            ['choice_text' => 'Elle transforme un nom en adjectif.', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le sujet de toutes les phrases.', 'is_correct' => false],
                            ['choice_text' => 'Elle change la forme du verbe pour montrer qui fait l’action et, le cas échéant, le temps.', 'is_correct' => true],
                            ['choice_text' => 'Elle transforme un verbe en préposition.', 'is_correct' => false],
                        ],
                        'explanation' => 'La conjugaison modifie le verbe pour qu’il s’accorde avec la personne et le nombre, et d’autres formes marquent aussi le temps ou le mode.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement construite pour un groupe qui dit parler espagnol ?',
                        'choices' => [
                            ['choice_text' => 'Ellos hablas español.', 'is_correct' => false],
                            ['choice_text' => 'Ellos hablan español.', 'is_correct' => true],
                            ['choice_text' => 'Ellos hablo español.', 'is_correct' => false],
                            ['choice_text' => 'Ellos hablamos español.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme présente « ellos/ellas » du verbe régulier « hablar » est « hablan », donc la phrase est correctement accordée.',
                    ],
                    [
                        'question' => 'Un apprenant voit « Marcos y Ana ___ en Madrid » et veut la forme régulière du présent de « vivir ». Quelle complétion fonctionne ?',
                        'choices' => [
                            ['choice_text' => 'viven', 'is_correct' => true],
                            ['choice_text' => 'vive', 'is_correct' => false],
                            ['choice_text' => 'vivimos', 'is_correct' => false],
                            ['choice_text' => 'vives', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux personnes forment un sujet à la troisième personne du pluriel, donc « vivir » devient « viven ».',
                    ],
                    [
                        'question' => 'Quelle affirmation aiderait un débutant à éviter une erreur courante de conjugaison ?',
                        'choices' => [
                            ['choice_text' => 'Toujours utiliser la forme « yo » pour les phrases courtes.', 'is_correct' => false],
                            ['choice_text' => 'Utiliser l’infinitif après chaque pronom sujet.', 'is_correct' => false],
                            ['choice_text' => 'Modifier le nom plutôt que le verbe.', 'is_correct' => false],
                            ['choice_text' => 'Vérifier qui est le sujet avant de choisir la terminaison du verbe.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sujet indique avec quelle personne et quel nombre le verbe doit s’accorder. C’est la vérification la plus rapide et fiable pour un débutant.',
                    ],
                ],
            ],
            [
                'title' => 'Les verbes réguliers en -AR dans l’espagnol courant',
                'description' => 'Pratique des verbes réguliers en -ar fréquents comme hablar, trabajar, estudiar, escuchar et comprar dans des situations du quotidien.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle est la forme correcte de « hablar » au présent pour « yo » ?',
                        'choices' => [
                            ['choice_text' => 'hablas', 'is_correct' => false],
                            ['choice_text' => 'habla', 'is_correct' => false],
                            ['choice_text' => 'hablo', 'is_correct' => true],
                            ['choice_text' => 'hablan', 'is_correct' => false],
                        ],
                        'explanation' => 'Les verbes réguliers en -ar utilisent -o pour « yo », ce qui donne « yo hablo ».',
                    ],
                    [
                        'question' => 'Choisis la phrase qui accorde « Marta » avec « estudiar ».',
                        'choices' => [
                            ['choice_text' => 'Marta estudio medicina.', 'is_correct' => false],
                            ['choice_text' => 'Marta estudias medicina.', 'is_correct' => false],
                            ['choice_text' => 'Marta estudian medicina.', 'is_correct' => false],
                            ['choice_text' => 'Marta estudia medicina.', 'is_correct' => true],
                        ],
                        'explanation' => 'Un sujet singulier à la troisième personne comme Marta prend -a avec un verbe régulier en -ar : « estudia ».',
                    ],
                    [
                        'question' => 'Quelle forme complète « Nosotros ___ en una oficina » avec « trabajar » ?',
                        'choices' => [
                            ['choice_text' => 'trabajan', 'is_correct' => false],
                            ['choice_text' => 'trabajamos', 'is_correct' => true],
                            ['choice_text' => 'trabajáis', 'is_correct' => false],
                            ['choice_text' => 'trabajas', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour « nosotros », les verbes réguliers en -ar prennent -amos : « trabajamos ».',
                    ],
                    [
                        'question' => 'Un serveur demande ce que font tes amis. Quelle réponse convient pour « ellos » et « escuchar » ?',
                        'choices' => [
                            ['choice_text' => 'Ellos escuchan música.', 'is_correct' => true],
                            ['choice_text' => 'Ellos escucha música.', 'is_correct' => false],
                            ['choice_text' => 'Ellos escucho música.', 'is_correct' => false],
                            ['choice_text' => 'Ellos escuchas música.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ellos » prend la terminaison -an à la troisième personne du pluriel, donc « escuchan » est correct.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « comprar » pour une personne qui parle d’elle-même ?',
                        'choices' => [
                            ['choice_text' => 'Compra pan por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Compro pan por la mañana.', 'is_correct' => true],
                            ['choice_text' => 'Compras pan por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Compran pan por la mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le locuteur est « yo », donc la terminaison régulière en -ar est -o : « compro ».',
                    ],
                    [
                        'question' => 'Un élève dit « Tú estudia mucho. » Quelle est la correction naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Tú estudias mucho.', 'is_correct' => true],
                            ['choice_text' => 'Tú estudio mucho.', 'is_correct' => false],
                            ['choice_text' => 'Tú estudian mucho.', 'is_correct' => false],
                            ['choice_text' => 'Tú estudiamos mucho.', 'is_correct' => false],
                        ],
                        'explanation' => '« Tú » prend -as avec les verbes réguliers en -ar, donc « estudias » est la forme correcte.',
                    ],
                    [
                        'question' => 'Quelle paire contient deux verbes réguliers en -ar correctement conjugués ?',
                        'choices' => [
                            ['choice_text' => 'yo caminas / nosotros caminan', 'is_correct' => false],
                            ['choice_text' => 'yo camina / nosotros camino', 'is_correct' => false],
                            ['choice_text' => 'yo caminamos / nosotros camino', 'is_correct' => false],
                            ['choice_text' => 'yo camino / nosotros caminamos', 'is_correct' => true],
                        ],
                        'explanation' => '« Camino » correspond à « yo », tandis que « caminamos » correspond à « nosotros ». Les deux sont des formes régulières du présent.',
                    ],
                    [
                        'question' => 'Quelle phrase sonne naturelle pour une famille qui cuisine ensemble ?',
                        'choices' => [
                            ['choice_text' => 'Nosotros cocinan juntos.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros cocino juntos.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros cocinamos juntos.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros cocinas juntos.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet est « nosotros », et les verbes réguliers en -ar prennent -amos dans cette forme : « cocinamos ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « necesitar » avec un sujet singulier à la troisième personne ?',
                        'choices' => [
                            ['choice_text' => 'Pedro necesito ayuda.', 'is_correct' => false],
                            ['choice_text' => 'Pedro necesitas ayuda.', 'is_correct' => false],
                            ['choice_text' => 'Pedro necesita ayuda.', 'is_correct' => true],
                            ['choice_text' => 'Pedro necesitamos ayuda.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pedro est une seule personne, donc le verbe régulier « necesitar » prend la terminaison de la troisième personne du singulier -a : « necesita ».',
                    ],
                    [
                        'question' => 'Quelle forme du verbe régulier en -ar « practicar » complète « ¿Qué ___ tú los fines de semana? » ?',
                        'choices' => [
                            ['choice_text' => 'practica', 'is_correct' => false],
                            ['choice_text' => 'practicas', 'is_correct' => true],
                            ['choice_text' => 'practican', 'is_correct' => false],
                            ['choice_text' => 'practico', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « tú », un verbe régulier en -ar utilise -as, donc « practicas » est correct.',
                    ],
                    [
                        'question' => 'Un panneau dans un magasin dit : « Aquí trabajamos hasta las ocho. » Que t’indique « trabajamos » ?',
                        'choices' => [
                            ['choice_text' => 'Un seul client est interpellé.', 'is_correct' => false],
                            ['choice_text' => 'Une seule employée parle d’elle-même.', 'is_correct' => false],
                            ['choice_text' => 'L’action s’est passée hier.', 'is_correct' => false],
                            ['choice_text' => 'Les personnes qui parlent s’incluent elles-mêmes dans le sujet « nous ».', 'is_correct' => true],
                        ],
                        'explanation' => '« Trabajamos » est la forme du présent à la première personne du pluriel, donc le locuteur fait partie d’un groupe « nous ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient un verbe régulier en -ar correctement conjugué avec un sujet clair ?',
                        'choices' => [
                            ['choice_text' => 'Mis padres viajan en verano.', 'is_correct' => true],
                            ['choice_text' => 'Mis padres viajas en verano.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres viajo en verano.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres viajamos en verano.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mis padres » est à la troisième personne du pluriel, donc « viajan » est la forme correcte du présent de « viajar ».',
                    ],
                ],
            ],
            [
                'title' => 'Les verbes réguliers en -ER et -IR',
                'description' => 'Compare les terminaisons régulières en -er et -ir et utilise des verbes courants comme comer, beber, aprender, vivir, escribir et abrir.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle forme « yo » est correcte pour « comer » ?',
                        'choices' => [
                            ['choice_text' => 'como', 'is_correct' => true],
                            ['choice_text' => 'comes', 'is_correct' => false],
                            ['choice_text' => 'come', 'is_correct' => false],
                            ['choice_text' => 'comen', 'is_correct' => false],
                        ],
                        'explanation' => 'Les verbes réguliers en -er utilisent -o pour « yo », ce qui donne « yo como ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « beber » avec « tú » ?',
                        'choices' => [
                            ['choice_text' => 'Tú bebe agua.', 'is_correct' => false],
                            ['choice_text' => 'Tú bebes agua.', 'is_correct' => true],
                            ['choice_text' => 'Tú bebo agua.', 'is_correct' => false],
                            ['choice_text' => 'Tú beben agua.', 'is_correct' => false],
                        ],
                        'explanation' => 'La terminaison régulière en -er pour « tú » est -es, donc « beber » devient « bebes ».',
                    ],
                    [
                        'question' => 'Quelle forme complète « Nosotros ___ español » avec « aprender » ?',
                        'choices' => [
                            ['choice_text' => 'aprenden', 'is_correct' => false],
                            ['choice_text' => 'aprendes', 'is_correct' => false],
                            ['choice_text' => 'aprendo', 'is_correct' => false],
                            ['choice_text' => 'aprendemos', 'is_correct' => true],
                        ],
                        'explanation' => 'Pour les verbes réguliers en -er, « nosotros » prend -emos : « aprendemos ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « vivir » avec « ella » ?',
                        'choices' => [
                            ['choice_text' => 'Ella vivo en Sevilla.', 'is_correct' => false],
                            ['choice_text' => 'Ella vives en Sevilla.', 'is_correct' => false],
                            ['choice_text' => 'Ella vive en Sevilla.', 'is_correct' => true],
                            ['choice_text' => 'Ella vivimos en Sevilla.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les verbes réguliers en -ir utilisent -e à la troisième personne du singulier, donc « vive » correspond à « ella ».',
                    ],
                    [
                        'question' => 'Un élève écrit « Ellos escriben correos. » De quel infinitif ce verbe vient-il ?',
                        'choices' => [
                            ['choice_text' => 'escribar', 'is_correct' => false],
                            ['choice_text' => 'escriber', 'is_correct' => false],
                            ['choice_text' => 'escribir', 'is_correct' => true],
                            ['choice_text' => 'escribe', 'is_correct' => false],
                        ],
                        'explanation' => '« Escriben » est la forme du présent à la troisième personne du pluriel de « escribir ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nosotros abrimos la puerta.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros abres la puerta.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros abre la puerta.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros abren la puerta.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme à la première personne du pluriel du verbe régulier « abrir » est « abrimos ».',
                    ],
                    [
                        'question' => 'Quelle terminaison correspond à « ellos » pour un verbe régulier en -er ?',
                        'choices' => [
                            ['choice_text' => '-an', 'is_correct' => false],
                            ['choice_text' => '-en', 'is_correct' => true],
                            ['choice_text' => '-imos', 'is_correct' => false],
                            ['choice_text' => '-éis', 'is_correct' => false],
                        ],
                        'explanation' => 'Les verbes réguliers en -er utilisent -en avec « ellos/ellas/ustedes », comme dans « comen » et « aprenden ».',
                    ],
                    [
                        'question' => 'Quelle terminaison correspond à « nosotros » pour un verbe régulier en -ir ?',
                        'choices' => [
                            ['choice_text' => '-emos', 'is_correct' => false],
                            ['choice_text' => '-imos seulement au passé', 'is_correct' => false],
                            ['choice_text' => '-amos', 'is_correct' => false],
                            ['choice_text' => '-imos', 'is_correct' => true],
                        ],
                        'explanation' => 'Les verbes réguliers en -ir utilisent -imos avec « nosotros », par exemple « vivimos » et « abrimos ».',
                    ],
                    [
                        'question' => 'Quelle paire est correctement accordée ?',
                        'choices' => [
                            ['choice_text' => 'tú come / tú vive', 'is_correct' => false],
                            ['choice_text' => 'tú comemos / tú vivimos', 'is_correct' => false],
                            ['choice_text' => 'tú comes / tú vives', 'is_correct' => true],
                            ['choice_text' => 'tú comen / tú viven', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux sont des formes à la deuxième personne du singulier : « comes » de comer et « vives » de vivir.',
                    ],
                    [
                        'question' => 'Quelle phrase un professeur attendrait-il d’une classe parlant de ce qu’elle apprend ?',
                        'choices' => [
                            ['choice_text' => 'Aprendemos palabras nuevas.', 'is_correct' => true],
                            ['choice_text' => 'Aprenden palabras nuevas.', 'is_correct' => false],
                            ['choice_text' => 'Aprendo palabras nuevas.', 'is_correct' => false],
                            ['choice_text' => 'Aprende palabras nuevas.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet voulu est « nous », donc « aprendemos » est la forme correcte à la première personne du pluriel.',
                    ],
                    [
                        'question' => 'Un panneau dit « Vivimos aquí. » Que t’indique cette forme verbale ?',
                        'choices' => [
                            ['choice_text' => 'Le locuteur parle seulement d’une autre personne.', 'is_correct' => false],
                            ['choice_text' => 'L’action doit être au passé.', 'is_correct' => false],
                            ['choice_text' => 'Le sujet est « tú ».', 'is_correct' => false],
                            ['choice_text' => 'Le locuteur fait partie d’un groupe de personnes qui vivent là.', 'is_correct' => true],
                        ],
                        'explanation' => '« Vivimos » est au présent, première personne du pluriel, donc il correspond à « nosotros ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient un désaccord entre le sujet et la terminaison d’un verbe régulier ?',
                        'choices' => [
                            ['choice_text' => 'Ellos beben café.', 'is_correct' => false],
                            ['choice_text' => 'Ellos bebe café.', 'is_correct' => true],
                            ['choice_text' => 'Ella bebe café.', 'is_correct' => false],
                            ['choice_text' => 'Yo bebo café.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ellos » exige la forme plurielle « beben », pas la forme singulière « bebe ».',
                    ],
                    [
                        'question' => 'Quel choix montre le mieux la différence entre les terminaisons régulières en -er et -ir pour « nosotros » ?',
                        'choices' => [
                            ['choice_text' => 'comemos vs. vivimos', 'is_correct' => true],
                            ['choice_text' => 'comes vs. viven', 'is_correct' => false],
                            ['choice_text' => 'como vs. vivo', 'is_correct' => false],
                            ['choice_text' => 'comen vs. vive', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour « nosotros », les verbes réguliers en -er utilisent -emos (« comemos »), tandis que les verbes réguliers en -ir utilisent -imos (« vivimos »).',
                    ],
                ],
            ],
            [
                'title' => 'Les verbes irréguliers les plus fréquents',
                'description' => 'Apprends les formes pratiques du présent de ser, estar, tener, ir et hacer sans submerger un débutant avec des modèles irréguliers avancés.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle forme de « ser » complète « Yo ___ estudiante » ?',
                        'choices' => [
                            ['choice_text' => 'eres', 'is_correct' => false],
                            ['choice_text' => 'es', 'is_correct' => false],
                            ['choice_text' => 'son', 'is_correct' => false],
                            ['choice_text' => 'soy', 'is_correct' => true],
                        ],
                        'explanation' => 'La forme du présent à la première personne du singulier de « ser » est « soy ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte avec « estar » et « yo » ?',
                        'choices' => [
                            ['choice_text' => 'Estás en casa.', 'is_correct' => false],
                            ['choice_text' => 'Estoy en casa.', 'is_correct' => true],
                            ['choice_text' => 'Estamos en casa.', 'is_correct' => false],
                            ['choice_text' => 'Está en casa.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme « yo » de « estar » est « estoy ».',
                    ],
                    [
                        'question' => 'Maria dit : « ___ veinte años. » Quelle forme verbale complète la phrase ?',
                        'choices' => [
                            ['choice_text' => 'Tiene', 'is_correct' => false],
                            ['choice_text' => 'Tienes', 'is_correct' => false],
                            ['choice_text' => 'Tengo', 'is_correct' => true],
                            ['choice_text' => 'Tenemos', 'is_correct' => false],
                        ],
                        'explanation' => 'L’espagnol utilise « tener » pour exprimer l’âge, donc Maria dit « Tengo veinte años. »',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « ir » avec « nosotros » ?',
                        'choices' => [
                            ['choice_text' => 'Vamos al mercado.', 'is_correct' => true],
                            ['choice_text' => 'Van al mercado.', 'is_correct' => false],
                            ['choice_text' => 'Vas al mercado.', 'is_correct' => false],
                            ['choice_text' => 'Voy al mercado.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme présente « nosotros » de « ir » est « vamos ».',
                    ],
                    [
                        'question' => 'Quelle forme de « hacer » convient à « Yo ___ la tarea por la tarde » ?',
                        'choices' => [
                            ['choice_text' => 'haces', 'is_correct' => false],
                            ['choice_text' => 'hace', 'is_correct' => false],
                            ['choice_text' => 'hacemos', 'is_correct' => false],
                            ['choice_text' => 'hago', 'is_correct' => true],
                        ],
                        'explanation' => '« Hago » est la forme irrégulière du présent à la première personne du singulier de « hacer ».',
                    ],
                    [
                        'question' => 'Un ami dit « Juan ___ cansado hoy. » Quelle forme de « estar » est correcte ?',
                        'choices' => [
                            ['choice_text' => 'está', 'is_correct' => true],
                            ['choice_text' => 'estoy', 'is_correct' => false],
                            ['choice_text' => 'estás', 'is_correct' => false],
                            ['choice_text' => 'están', 'is_correct' => false],
                        ],
                        'explanation' => 'Juan est un seul sujet à la troisième personne du singulier, donc la forme correcte est « está ».',
                    ],
                    [
                        'question' => 'Quelle phrase énonce correctement un fait permanent ou identitaire avec « ser » ?',
                        'choices' => [
                            ['choice_text' => 'Estoy de Marruecos.', 'is_correct' => false],
                            ['choice_text' => 'Eres de Marruecos.', 'is_correct' => false],
                            ['choice_text' => 'Soy de Marruecos.', 'is_correct' => true],
                            ['choice_text' => 'Son de Marruecos.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ser » est couramment utilisé pour l’origine, donc « Soy de Marruecos » signifie « Je viens du Maroc. »',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « tener » pour un sujet au pluriel ?',
                        'choices' => [
                            ['choice_text' => 'Mis amigos tiene un coche.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos tienen un coche.', 'is_correct' => true],
                            ['choice_text' => 'Mis amigos tienes un coche.', 'is_correct' => false],
                            ['choice_text' => 'Mis amigos tenemos un coche.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mis amigos » est à la troisième personne du pluriel, donc « tener » devient « tienen ».',
                    ],
                    [
                        'question' => 'Un parent dit : « Ahora ___ a casa. » Quelle forme de « ir » convient pour dire « Je rentre à la maison maintenant » ?',
                        'choices' => [
                            ['choice_text' => 'voy', 'is_correct' => true],
                            ['choice_text' => 'vas', 'is_correct' => false],
                            ['choice_text' => 'va', 'is_correct' => false],
                            ['choice_text' => 'vamos', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme à la première personne du singulier de « ir » est « voy », donc « Ahora voy a casa » est correct.',
                    ],
                    [
                        'question' => 'Quelle paire est correctement accordée ?',
                        'choices' => [
                            ['choice_text' => 'yo eres / tú soy', 'is_correct' => false],
                            ['choice_text' => 'yo es / tú son', 'is_correct' => false],
                            ['choice_text' => 'yo son / tú es', 'is_correct' => false],
                            ['choice_text' => 'yo soy / tú eres', 'is_correct' => true],
                        ],
                        'explanation' => 'Les formes du présent sont « yo soy » et « tú eres ». Les deux doivent être mémorisées car « ser » est irrégulier.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « hacer » avec « nosotros » ?',
                        'choices' => [
                            ['choice_text' => 'Hacen la cena juntos.', 'is_correct' => false],
                            ['choice_text' => 'Haces la cena juntos.', 'is_correct' => false],
                            ['choice_text' => 'Hacemos la cena juntos.', 'is_correct' => true],
                            ['choice_text' => 'Hago la cena juntos.', 'is_correct' => false],
                        ],
                        'explanation' => '« Hacemos » est la forme à la première personne du pluriel de « hacer ».',
                    ],
                    [
                        'question' => 'Quelle règle est la plus sûre pour un débutant avec « ser », « estar », « tener », « ir » et « hacer » ?',
                        'choices' => [
                            ['choice_text' => 'Remplacer chaque verbe irrégulier par un modèle régulier en -ar.', 'is_correct' => false],
                            ['choice_text' => 'Apprendre individuellement leurs formes du présent les plus courantes, car ils ne suivent pas tous un modèle régulier.', 'is_correct' => true],
                            ['choice_text' => 'Ajouter -o, -as, -a, -amos, -an à chaque verbe sans vérifier le verbe.', 'is_correct' => false],
                            ['choice_text' => 'Utiliser l’infinitif après chaque pronom sujet.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces verbes très courants contiennent des formes irrégulières, donc mémoriser leurs formes fréquentes au présent est plus fiable que d’appliquer un seul modèle régulier sans réfléchir.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement l’endroit où se trouve une personne en ce moment ?',
                        'choices' => [
                            ['choice_text' => 'Ana está en la biblioteca.', 'is_correct' => true],
                            ['choice_text' => 'Ana soy en la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Ana están en la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Ana eres en la biblioteca.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un sujet singulier à la troisième personne comme Ana, la forme présente de « estar » est « está », couramment utilisée pour la localisation.',
                    ],
                ],
            ],
            [
                'title' => 'Choisir le bon verbe au quotidien',
                'description' => 'Utilise des verbes courants au présent dans de courtes situations réelles et détermine quelle forme conjuguée convient le mieux au locuteur et au contexte.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Tu parles de toi-même : « Je vis à Rabat. » Quelle phrase fonctionne ?',
                        'choices' => [
                            ['choice_text' => 'Vivo en Rabat.', 'is_correct' => true],
                            ['choice_text' => 'Vives en Rabat.', 'is_correct' => false],
                            ['choice_text' => 'Vive en Rabat.', 'is_correct' => false],
                            ['choice_text' => 'Viven en Rabat.', 'is_correct' => false],
                        ],
                        'explanation' => '« Vivo » est la forme présente à la première personne du singulier de « vivir ».',
                    ],
                    [
                        'question' => 'Une réceptionniste s’adresse à un client en utilisant « usted ». Qu’est-ce qui est correct avec « necesitar » ?',
                        'choices' => [
                            ['choice_text' => 'Usted necesitas ayuda.', 'is_correct' => false],
                            ['choice_text' => 'Usted necesito ayuda.', 'is_correct' => false],
                            ['choice_text' => 'Usted necesitan ayuda.', 'is_correct' => false],
                            ['choice_text' => 'Usted necesita ayuda.', 'is_correct' => true],
                        ],
                        'explanation' => '« Usted » prend la forme verbale de la troisième personne du singulier, donc « necesita » est correct.',
                    ],
                    [
                        'question' => 'Quelle réponse convient à la question « ¿Qué hacen tus padres? » ?',
                        'choices' => [
                            ['choice_text' => 'Trabajo en una escuela.', 'is_correct' => false],
                            ['choice_text' => 'Trabajan en una escuela.', 'is_correct' => true],
                            ['choice_text' => 'Trabajas en una escuela.', 'is_correct' => false],
                            ['choice_text' => 'Trabaja en una escuela.', 'is_correct' => false],
                        ],
                        'explanation' => '« Tus padres » est un sujet pluriel à la troisième personne, donc la réponse doit utiliser « trabajan ».',
                    ],
                    [
                        'question' => 'Un ami demande pourquoi tu es dans la cuisine. Quelle phrase utilise correctement « estar » ?',
                        'choices' => [
                            ['choice_text' => 'Está en la cocina.', 'is_correct' => false],
                            ['choice_text' => 'Están en la cocina.', 'is_correct' => false],
                            ['choice_text' => 'Estoy en la cocina.', 'is_correct' => true],
                            ['choice_text' => 'Estás en la cocina.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le locuteur parle de lui-même, donc la forme à la première personne du singulier est « estoy ».',
                    ],
                    [
                        'question' => 'Quelle phrase un vendeur utiliserait-il en parlant de ce que vend le magasin ?',
                        'choices' => [
                            ['choice_text' => 'Venden ropa.', 'is_correct' => false],
                            ['choice_text' => 'Vendes ropa.', 'is_correct' => false],
                            ['choice_text' => 'Vendemos ropa.', 'is_correct' => true],
                            ['choice_text' => 'Vendo ropa.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vendeur inclut l’équipe du magasin dans « nous », donc « vendemos » est la forme naturelle à la première personne du pluriel.',
                    ],
                    [
                        'question' => 'Quelle question demande correctement à un ami ce qu’il mange ?',
                        'choices' => [
                            ['choice_text' => '¿Qué comes?', 'is_correct' => true],
                            ['choice_text' => '¿Qué como?', 'is_correct' => false],
                            ['choice_text' => '¿Qué come?', 'is_correct' => false],
                            ['choice_text' => '¿Qué comen?', 'is_correct' => false],
                        ],
                        'explanation' => '« Tú » utilise la forme à la deuxième personne du singulier « comes » avec le verbe régulier « comer ».',
                    ],
                    [
                        'question' => 'Une famille se prépare à partir. Un parent dit : « Nosotros ___ ahora. » Quelle forme de « ir » convient ?',
                        'choices' => [
                            ['choice_text' => 'van', 'is_correct' => false],
                            ['choice_text' => 'voy', 'is_correct' => false],
                            ['choice_text' => 'vas', 'is_correct' => false],
                            ['choice_text' => 'vamos', 'is_correct' => true],
                        ],
                        'explanation' => '« Nosotros » prend la forme présente « vamos » avec « ir ».',
                    ],
                    [
                        'question' => 'Quelle phrase dit correctement ce que fait Diego chaque matin ?',
                        'choices' => [
                            ['choice_text' => 'Diego tomo café cada mañana.', 'is_correct' => false],
                            ['choice_text' => 'Diego toma café cada mañana.', 'is_correct' => true],
                            ['choice_text' => 'Diego tomas café cada mañana.', 'is_correct' => false],
                            ['choice_text' => 'Diego tomamos café cada mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'Diego est un sujet singulier à la troisième personne, donc le verbe régulier en -ar « tomar » devient « toma ».',
                    ],
                    [
                        'question' => 'Un professeur demande à la classe : « ¿Entienden la pregunta? » Quelle réponse de la classe est appropriée ?',
                        'choices' => [
                            ['choice_text' => 'Sí, entendemos.', 'is_correct' => true],
                            ['choice_text' => 'Sí, entienden.', 'is_correct' => false],
                            ['choice_text' => 'Sí, entiendes.', 'is_correct' => false],
                            ['choice_text' => 'Sí, entiendo.', 'is_correct' => false],
                        ],
                        'explanation' => 'La classe répond en tant que « nous », donc la forme appropriée est la première personne du pluriel : « entendemos ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte en s’adressant poliment à un client ?',
                        'choices' => [
                            ['choice_text' => '¿Usted trabajas aquí?', 'is_correct' => false],
                            ['choice_text' => '¿Usted trabajo aquí?', 'is_correct' => false],
                            ['choice_text' => '¿Usted trabaja aquí?', 'is_correct' => true],
                            ['choice_text' => '¿Usted trabajan aquí?', 'is_correct' => false],
                        ],
                        'explanation' => '« Usted » utilise la forme verbale de la troisième personne du singulier, donc « trabaja » est correct.',
                    ],
                    [
                        'question' => 'Un ami dit : « Yo hago deporte. » Qu’indique « hago » ?',
                        'choices' => [
                            ['choice_text' => 'Le locuteur s’adresse à un groupe.', 'is_correct' => false],
                            ['choice_text' => 'Le locuteur parle d’hier.', 'is_correct' => false],
                            ['choice_text' => 'Le verbe est encore à l’infinitif.', 'is_correct' => false],
                            ['choice_text' => 'Le locuteur utilise la forme à la première personne du singulier de « hacer ».', 'is_correct' => true],
                        ],
                        'explanation' => '« Hago » est la forme irrégulière du présent à la première personne du singulier de « hacer ».',
                    ],
                    [
                        'question' => 'Quelle réponse complète le mieux « ¿Dónde viven tus abuelos? » ?',
                        'choices' => [
                            ['choice_text' => 'Vivo en Valencia.', 'is_correct' => false],
                            ['choice_text' => 'Viven en Valencia.', 'is_correct' => true],
                            ['choice_text' => 'Vives en Valencia.', 'is_correct' => false],
                            ['choice_text' => 'Vive en Valencia.', 'is_correct' => false],
                        ],
                        'explanation' => '« Tus abuelos » est à la troisième personne du pluriel, donc « viven » est la forme correcte de « vivir ».',
                    ],
                    [
                        'question' => 'Quelle phrase montre un accord correct après avoir changé le sujet de « yo » à « ellos » ?',
                        'choices' => [
                            ['choice_text' => 'Yo escribo correos. → Ellos escribes correos.', 'is_correct' => false],
                            ['choice_text' => 'Yo escribo correos. → Ellos escribo correos.', 'is_correct' => false],
                            ['choice_text' => 'Yo escribo correos. → Ellos escriben correos.', 'is_correct' => true],
                            ['choice_text' => 'Yo escribo correos. → Ellos escribimos correos.', 'is_correct' => false],
                        ],
                        'explanation' => 'Passer de « yo » à « ellos » exige la forme de la troisième personne du pluriel, donc « escribo » devient « escriben ».',
                    ],
                    [
                        'question' => 'Un apprenant dit « Nosotros vive en Casablanca. » Quelle est la meilleure correction ?',
                        'choices' => [
                            ['choice_text' => 'Nosotros viven en Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros vivimos en Casablanca.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros vives en Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros vivo en Casablanca.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet est à la première personne du pluriel, donc le verbe régulier en -ir « vivir » a besoin de la terminaison -imos : « vivimos ».',
                    ],
                    [
                        'question' => 'Quel choix montre une façon utile de vérifier un verbe au présent avant de parler ?',
                        'choices' => [
                            ['choice_text' => 'Identifier le sujet, puis choisir la forme du verbe qui lui correspond.', 'is_correct' => true],
                            ['choice_text' => 'Choisir la forme du verbe la plus courte.', 'is_correct' => false],
                            ['choice_text' => 'Toujours utiliser l’infinitif.', 'is_correct' => false],
                            ['choice_text' => 'Changer le sujet jusqu’à ce que le verbe original sonne bien.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accord sujet-verbe est la vérification la plus utile pour un débutant : il faut d’abord identifier qui fait l’action, puis choisir la forme correspondante.',
                    ],
                ],
            ],
            [
                'title' => 'Révision mixte de la conjugaison au présent',
                'description' => 'Combine les verbes réguliers et irréguliers fréquents dans de courts exemples pratiques qui demandent une identification attentive du sujet.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle forme complète « Yo ___ mucho español » avec « estudiar » ?',
                        'choices' => [
                            ['choice_text' => 'estudias', 'is_correct' => false],
                            ['choice_text' => 'estudia', 'is_correct' => false],
                            ['choice_text' => 'estudio', 'is_correct' => true],
                            ['choice_text' => 'estudian', 'is_correct' => false],
                        ],
                        'explanation' => '« Yo » prend la terminaison -o avec les verbes réguliers en -ar, donc « estudio » est correct.',
                    ],
                    [
                        'question' => 'Quelle phrase contient un verbe en -er correctement conjugué ?',
                        'choices' => [
                            ['choice_text' => 'Nosotros beben agua.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros bebemos agua.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros bebes agua.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros bebo agua.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les verbes réguliers en -er utilisent -emos avec « nosotros », ce qui donne « bebemos ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte avec « ella » et « escribir » ?',
                        'choices' => [
                            ['choice_text' => 'Ella escribo una carta.', 'is_correct' => false],
                            ['choice_text' => 'Ella escribes una carta.', 'is_correct' => false],
                            ['choice_text' => 'Ella escribimos una carta.', 'is_correct' => false],
                            ['choice_text' => 'Ella escribe una carta.', 'is_correct' => true],
                        ],
                        'explanation' => 'Les verbes réguliers en -ir utilisent -e à la troisième personne du singulier, donc « escribe » correspond à « ella ».',
                    ],
                    [
                        'question' => 'Quelle forme convient à « Mi hermano ___ médico » si tu veux indiquer sa profession ?',
                        'choices' => [
                            ['choice_text' => 'es', 'is_correct' => true],
                            ['choice_text' => 'está', 'is_correct' => false],
                            ['choice_text' => 'soy', 'is_correct' => false],
                            ['choice_text' => 'son', 'is_correct' => false],
                        ],
                        'explanation' => '« Ser » est utilisé pour l’identification et les professions, et « es » correspond au sujet singulier « mi hermano ».',
                    ],
                    [
                        'question' => 'Un ami demande : « ¿Qué haces? » Quelle réponse est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Hace la cena.', 'is_correct' => false],
                            ['choice_text' => 'Haces la cena.', 'is_correct' => false],
                            ['choice_text' => 'Hago la cena.', 'is_correct' => true],
                            ['choice_text' => 'Hacemos la cena.', 'is_correct' => false],
                        ],
                        'explanation' => 'La question demande ce que « tu » fais, mais la réponse porte sur le locuteur : « Yo hago la cena. »',
                    ],
                    [
                        'question' => 'Quelle phrase combine correctement « nosotros » avec « ir » et « comer » ?',
                        'choices' => [
                            ['choice_text' => 'Vamos a comer ahora.', 'is_correct' => true],
                            ['choice_text' => 'Van a comer ahora.', 'is_correct' => false],
                            ['choice_text' => 'Vamos a comes ahora.', 'is_correct' => false],
                            ['choice_text' => 'Voy a comen ahora.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier verbe « ir » est conjugué en « vamos », tandis que le second verbe reste à l’infinitif : « vamos a comer ».',
                    ],
                    [
                        'question' => 'Quelle phrase transforme correctement « Ana trabaja aquí » en une phrase sur Ana et Luis ?',
                        'choices' => [
                            ['choice_text' => 'Ana y Luis trabaja aquí.', 'is_correct' => false],
                            ['choice_text' => 'Ana y Luis trabajamos aquí.', 'is_correct' => false],
                            ['choice_text' => 'Ana y Luis trabajas aquí.', 'is_correct' => false],
                            ['choice_text' => 'Ana y Luis trabajan aquí.', 'is_correct' => true],
                        ],
                        'explanation' => 'Ajouter une deuxième personne rend le sujet pluriel à la troisième personne, donc « trabajan » est requis.',
                    ],
                    [
                        'question' => 'Quelle affirmation sur « vamos a estudiar » est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Les deux verbes doivent être conjugués de la même façon.', 'is_correct' => false],
                            ['choice_text' => '« Vamos » est la forme conjuguée de « ir », tandis que « estudiar » reste à l’infinitif après « a ».', 'is_correct' => true],
                            ['choice_text' => '« Estudiar » est la forme conjuguée et « vamos » est l’infinitif.', 'is_correct' => false],
                            ['choice_text' => 'Cette expression ne peut s’utiliser qu’au passé.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la structure courante « ir a + infinitif », seul « ir » est conjugué : « vamos a estudiar ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « tener » avec « tú » ?',
                        'choices' => [
                            ['choice_text' => 'Tú tiene tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Tú tienes tiempo.', 'is_correct' => true],
                            ['choice_text' => 'Tú tengo tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Tú tienen tiempo.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme présente « tú » de « tener » est « tienes ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement où se trouvent deux amis en ce moment ?',
                        'choices' => [
                            ['choice_text' => 'Ellos está en el parque.', 'is_correct' => false],
                            ['choice_text' => 'Ellos estoy en el parque.', 'is_correct' => false],
                            ['choice_text' => 'Ellos eres en el parque.', 'is_correct' => false],
                            ['choice_text' => 'Ellos están en el parque.', 'is_correct' => true],
                        ],
                        'explanation' => '« Ellos » est pluriel, donc la forme présente de « estar » est « están ».',
                    ],
                    [
                        'question' => 'Un apprenant voit « Comemos a las dos. » Quel sujet est sous-entendu par le verbe ?',
                        'choices' => [
                            ['choice_text' => 'yo', 'is_correct' => false],
                            ['choice_text' => 'tú', 'is_correct' => false],
                            ['choice_text' => 'nosotros', 'is_correct' => true],
                            ['choice_text' => 'él', 'is_correct' => false],
                        ],
                        'explanation' => '« Comemos » est la forme à la première personne du pluriel de « comer », correspondant à « nosotros ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient une erreur fréquente chez les débutants ?',
                        'choices' => [
                            ['choice_text' => 'Yo hablan español.', 'is_correct' => true],
                            ['choice_text' => 'Yo hablo español.', 'is_correct' => false],
                            ['choice_text' => 'Ellos hablan español.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros hablamos español.', 'is_correct' => false],
                        ],
                        'explanation' => '« Yo » exige la forme de la première personne du singulier « hablo ». « Hablan » correspond à un sujet pluriel à la troisième personne comme « ellos ».',
                    ],
                    [
                        'question' => 'Quelle réponse convient à « ¿Ustedes viven aquí? » ?',
                        'choices' => [
                            ['choice_text' => 'Sí, vivimos aquí.', 'is_correct' => true],
                            ['choice_text' => 'Sí, viven aquí.', 'is_correct' => false],
                            ['choice_text' => 'Sí, vives aquí.', 'is_correct' => false],
                            ['choice_text' => 'Sí, vivo aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ustedes » interroge un groupe, et la réponse naturelle de ce groupe est à la première personne du pluriel : « vivimos ».',
                    ],
                    [
                        'question' => 'Quelle option complète correctement « Mi hermana y yo ___ estudiantes » ?',
                        'choices' => [
                            ['choice_text' => 'son', 'is_correct' => false],
                            ['choice_text' => 'soy', 'is_correct' => false],
                            ['choice_text' => 'somos', 'is_correct' => true],
                            ['choice_text' => 'es', 'is_correct' => false],
                        ],
                        'explanation' => '« Mi hermana y yo » signifie « nous », donc la forme présente de « ser » est « somos ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement deux verbes au présent avec le même sujet ?',
                        'choices' => [
                            ['choice_text' => 'María estudias y trabaja por la tarde.', 'is_correct' => false],
                            ['choice_text' => 'María estudia y trabaja por la tarde.', 'is_correct' => true],
                            ['choice_text' => 'María estudio y trabaja por la tarde.', 'is_correct' => false],
                            ['choice_text' => 'María estudian y trabaja por la tarde.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux verbes décrivent le sujet singulier María, donc les deux sont à la troisième personne du singulier : « estudia » et « trabaja ».',
                    ],
                    [
                        'question' => 'Un élève veut dire « Nous écrivons tous les jours. » Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Escriben cada día.', 'is_correct' => false],
                            ['choice_text' => 'Escribes cada día.', 'is_correct' => false],
                            ['choice_text' => 'Escribo cada día.', 'is_correct' => false],
                            ['choice_text' => 'Escribimos cada día.', 'is_correct' => true],
                        ],
                        'explanation' => '« Escribimos » est la forme à la première personne du pluriel de « escribir », correspondant à « nosotros ».',
                    ],
                    [
                        'question' => 'Quelle phrase garde correctement un infinitif après « querer » ?',
                        'choices' => [
                            ['choice_text' => 'Quiero aprendo español.', 'is_correct' => false],
                            ['choice_text' => 'Quiero aprendes español.', 'is_correct' => false],
                            ['choice_text' => 'Quiero aprender español.', 'is_correct' => true],
                            ['choice_text' => 'Quiero aprendemos español.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après « querer » conjugué, l’action suivante reste normalement à l’infinitif : « quiero aprender ».',
                    ],
                    [
                        'question' => 'Quelle phrase montre le mieux pourquoi il est utile d’apprendre les verbes irréguliers courants séparément ?',
                        'choices' => [
                            ['choice_text' => '« Yo voy », « yo tengo » et « yo hago » ne suivent pas simplement un seul modèle régulier.', 'is_correct' => true],
                            ['choice_text' => 'Les trois utilisent toujours les terminaisons régulières en -ar.', 'is_correct' => false],
                            ['choice_text' => 'Ce sont tous des infinitifs.', 'is_correct' => false],
                            ['choice_text' => 'Ils ne changent jamais selon le sujet.', 'is_correct' => false],
                        ],
                        'explanation' => 'Des verbes courants comme « ir », « tener » et « hacer » ont des formes irrégulières importantes au présent, donc les apprendre comme des unités fréquentes est plus utile.',
                    ],
                    [
                        'question' => 'En observant la phrase « Carlos y Elena estudian, trabajan y viven en la ciudad », que peut-on dire du sujet ?',
                        'choices' => [
                            ['choice_text' => 'Il est à la première personne du singulier.', 'is_correct' => false],
                            ['choice_text' => 'Il est à la deuxième personne du singulier.', 'is_correct' => false],
                            ['choice_text' => 'Chaque verbe se réfère à un sujet différent.', 'is_correct' => false],
                            ['choice_text' => 'Il est à la troisième personne du pluriel, donc les trois verbes utilisent des formes plurielles correspondantes.', 'is_correct' => true],
                        ],
                        'explanation' => '« Carlos y Elena » est un sujet pluriel à la troisième personne, donc « estudian », « trabajan » et « viven » s’accordent tous avec ce même sujet.',
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
