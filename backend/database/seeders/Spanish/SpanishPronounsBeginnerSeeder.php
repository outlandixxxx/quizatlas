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
                'title' => 'Les pronoms sujets dans l’espagnol courant',
                'description' => 'Se familiariser avec les pronoms sujets espagnols et les utiliser naturellement dans de courtes phrases du quotidien.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Carlos parle de lui-même. Quel pronom doit-il utiliser avant le verbe ?',
                        'choices' => [
                            ['choice_text' => 'tú', 'is_correct' => false],
                            ['choice_text' => 'yo', 'is_correct' => true],
                            ['choice_text' => 'él', 'is_correct' => false],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                        ],
                        'explanation' => '« Yo » est le pronom sujet de la première personne du singulier, utilisé quand le locuteur parle de lui-même.',
                    ],
                    [
                        'question' => 'Tu parles directement à un ami. Quel pronom sujet convient ?',
                        'choices' => [
                            ['choice_text' => 'yo', 'is_correct' => false],
                            ['choice_text' => 'usted', 'is_correct' => false],
                            ['choice_text' => 'nosotros', 'is_correct' => false],
                            ['choice_text' => 'tú', 'is_correct' => true],
                        ],
                        'explanation' => '« Tú » est la forme familière singulière utilisée en s’adressant directement à une personne dans une situation informelle.',
                    ],
                    [
                        'question' => 'Quel pronom signifie « elle » ?',
                        'choices' => [
                            ['choice_text' => 'ella', 'is_correct' => true],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'él', 'is_correct' => false],
                            ['choice_text' => 'ellas', 'is_correct' => false],
                        ],
                        'explanation' => '« Ella » signifie « elle » et désigne une seule personne de sexe féminin.',
                    ],
                    [
                        'question' => 'Marta et Ana discutent de leurs projets. Quel pronom peut remplacer leurs noms ?',
                        'choices' => [
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'ella', 'is_correct' => false],
                            ['choice_text' => 'ellas', 'is_correct' => true],
                            ['choice_text' => 'nosotros', 'is_correct' => false],
                        ],
                        'explanation' => '« Ellas » est le pronom sujet féminin pluriel pour deux femmes ou filles ou plus.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « nosotros » ?',
                        'choices' => [
                            ['choice_text' => 'Nosotros estudian español.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros estudia español.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros estudiamos español.', 'is_correct' => true],
                            ['choice_text' => 'Nosotros estudias español.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nosotros » prend la forme verbale de la première personne du pluriel : « estudiamos ».',
                    ],
                    [
                        'question' => 'Une enseignante s’adresse poliment à un élève. Quel pronom convient dans de nombreuses situations formelles ?',
                        'choices' => [
                            ['choice_text' => 'tú', 'is_correct' => false],
                            ['choice_text' => 'usted', 'is_correct' => true],
                            ['choice_text' => 'yo', 'is_correct' => false],
                            ['choice_text' => 'nosotros', 'is_correct' => false],
                        ],
                        'explanation' => '« Usted » est le « vous » formel singulier en espagnol et s’utilise couramment avec les personnes à qui l’on s’adresse avec respect.',
                    ],
                    [
                        'question' => 'Quelle paire comporte deux pronoms sujets au pluriel ?',
                        'choices' => [
                            ['choice_text' => 'ella et usted', 'is_correct' => false],
                            ['choice_text' => 'yo et tú', 'is_correct' => false],
                            ['choice_text' => 'él et ella', 'is_correct' => false],
                            ['choice_text' => 'ellos et nosotros', 'is_correct' => true],
                        ],
                        'explanation' => '« Ellos » et « nosotros » sont tous deux des pronoms sujets au pluriel.',
                    ],
                    [
                        'question' => 'Luis dit : « ___ vivo en Rabat. » Quel pronom complète la phrase ?',
                        'choices' => [
                            ['choice_text' => 'Yo', 'is_correct' => true],
                            ['choice_text' => 'Tú', 'is_correct' => false],
                            ['choice_text' => 'Él', 'is_correct' => false],
                            ['choice_text' => 'Ellos', 'is_correct' => false],
                        ],
                        'explanation' => 'Le locuteur parle de lui-même, donc « Yo vivo en Rabat » est correct.',
                    ],
                    [
                        'question' => 'Quelle phrase est naturelle quand un groupe de femmes parle d’elles-mêmes ?',
                        'choices' => [
                            ['choice_text' => 'Nosotros trabajas aquí.', 'is_correct' => false],
                            ['choice_text' => 'Nosotras trabajamos aquí.', 'is_correct' => true],
                            ['choice_text' => 'Nosotras trabajan aquí.', 'is_correct' => false],
                            ['choice_text' => 'Ellas trabajo aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nosotras » est la forme féminine de la première personne du pluriel et prend « trabajamos ».',
                    ],
                    [
                        'question' => 'Deux garçons attendent à l’extérieur. Quelle phrase les désigne ?',
                        'choices' => [
                            ['choice_text' => 'Ellas esperan afuera.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros espera afuera.', 'is_correct' => false],
                            ['choice_text' => 'Él esperan afuera.', 'is_correct' => false],
                            ['choice_text' => 'Ellos esperan afuera.', 'is_correct' => true],
                        ],
                        'explanation' => '« Ellos » désigne un groupe d’hommes ou un groupe mixte ; « esperan » est la forme verbale plurielle correspondante.',
                    ],
                ],
            ],
            [
                'title' => 'Choisir le bon pronom sujet',
                'description' => 'Pratiquer le choix entre tú, usted, él, ella, nosotros, ellos et d’autres pronoms sujets dans des situations réalistes.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Toi et ton frère commandez le déjeuner ensemble. Quel pronom peut vous représenter tous les deux ?',
                        'choices' => [
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'nosotros', 'is_correct' => true],
                            ['choice_text' => 'ustedes', 'is_correct' => false],
                            ['choice_text' => 'vosotras', 'is_correct' => false],
                        ],
                        'explanation' => '« Nosotros » signifie « nous » et convient à un groupe qui inclut le locuteur et une autre personne de sexe masculin.',
                    ],
                    [
                        'question' => 'Quel pronom Ana utiliserait-elle pour dire « je travaille à la banque » ?',
                        'choices' => [
                            ['choice_text' => 'yo', 'is_correct' => true],
                            ['choice_text' => 'ella', 'is_correct' => false],
                            ['choice_text' => 'tú', 'is_correct' => false],
                            ['choice_text' => 'usted', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme Ana est la locutrice, elle utilise la première personne du singulier « yo ».',
                    ],
                    [
                        'question' => 'Quel pronom utiliserait-on pour une femme qui ne parle pas ?',
                        'choices' => [
                            ['choice_text' => 'él', 'is_correct' => false],
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'ustedes', 'is_correct' => false],
                            ['choice_text' => 'ella', 'is_correct' => true],
                        ],
                        'explanation' => '« Ella » désigne une seule personne de sexe féminin dont on parle.',
                    ],
                    [
                        'question' => 'Une réceptionniste d’hôtel s’adresse respectueusement à un client. Quel pronom sujet convient le mieux pour le client ?',
                        'choices' => [
                            ['choice_text' => 'tú', 'is_correct' => false],
                            ['choice_text' => 'yo', 'is_correct' => false],
                            ['choice_text' => 'usted', 'is_correct' => true],
                            ['choice_text' => 'nosotros', 'is_correct' => false],
                        ],
                        'explanation' => '« Usted » est un « vous » formel singulier standard, adapté à un service client respectueux.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « ellas » ?',
                        'choices' => [
                            ['choice_text' => 'Ellas vive en Sevilla.', 'is_correct' => false],
                            ['choice_text' => 'Ellas viven en Sevilla.', 'is_correct' => true],
                            ['choice_text' => 'Ellas vivo en Sevilla.', 'is_correct' => false],
                            ['choice_text' => 'Ellas vives en Sevilla.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ellas » prend la forme de la troisième personne du pluriel « viven ».',
                    ],
                    [
                        'question' => 'Quel pronom sujet correspond au verbe « somos » ?',
                        'choices' => [
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'él', 'is_correct' => false],
                            ['choice_text' => 'nosotros', 'is_correct' => true],
                            ['choice_text' => 'tú', 'is_correct' => false],
                        ],
                        'explanation' => '« Somos » est la forme de la première personne du pluriel de « ser », donc elle correspond à « nosotros » ou « nosotras ».',
                    ],
                    [
                        'question' => 'Quelle phrase a du sens quand une femme parle d’elle-même et de son amie ?',
                        'choices' => [
                            ['choice_text' => 'Nosotras vamos al cine.', 'is_correct' => true],
                            ['choice_text' => 'Ellas vamos al cine.', 'is_correct' => false],
                            ['choice_text' => 'Nosotros va al cine.', 'is_correct' => false],
                            ['choice_text' => 'Ella vamos al cine.', 'is_correct' => false],
                        ],
                        'explanation' => 'La locutrice fait partie d’un groupe de femmes, donc « nosotras » avec « vamos » est correct.',
                    ],
                    [
                        'question' => 'Un père parle de lui-même et de sa fille. Quel pronom peut-il utiliser pour les désigner tous les deux ?',
                        'choices' => [
                            ['choice_text' => 'ellos', 'is_correct' => false],
                            ['choice_text' => 'ellas', 'is_correct' => false],
                            ['choice_text' => 'ustedes', 'is_correct' => false],
                            ['choice_text' => 'nosotros', 'is_correct' => true],
                        ],
                        'explanation' => 'Quand le locuteur est inclus avec une autre personne, on utilise la première personne du pluriel « nosotros » pour un groupe mixte ou incluant un homme.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Tú tiene una pregunta.', 'is_correct' => false],
                            ['choice_text' => 'Tú tengo una pregunta.', 'is_correct' => false],
                            ['choice_text' => 'Tú tienen una pregunta.', 'is_correct' => false],
                            ['choice_text' => 'Tú tienes una pregunta.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le « tú » familier singulier utilise la forme verbale de la deuxième personne du singulier « tienes ».',
                    ],
                    [
                        'question' => 'Un responsable s’adresse formellement à plusieurs clients. Quel pronom peut désigner tout le groupe ?',
                        'choices' => [
                            ['choice_text' => 'usted', 'is_correct' => false],
                            ['choice_text' => 'ella', 'is_correct' => false],
                            ['choice_text' => 'ustedes', 'is_correct' => true],
                            ['choice_text' => 'nosotros', 'is_correct' => false],
                        ],
                        'explanation' => '« Ustedes » est le « vous » pluriel, utilisé dans tous les pays hispanophones pour plus d’une personne.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « él » ?',
                        'choices' => [
                            ['choice_text' => 'Él trabaja los lunes.', 'is_correct' => true],
                            ['choice_text' => 'Él trabajan los lunes.', 'is_correct' => false],
                            ['choice_text' => 'Él trabajo los lunes.', 'is_correct' => false],
                            ['choice_text' => 'Él trabajas los lunes.', 'is_correct' => false],
                        ],
                        'explanation' => '« Él » est la troisième personne du singulier et prend « trabaja ».',
                    ],
                    [
                        'question' => 'Un groupe d’hommes te parle. Quel pronom désigne ce groupe ?',
                        'choices' => [
                            ['choice_text' => 'él', 'is_correct' => false],
                            ['choice_text' => 'ellos', 'is_correct' => true],
                            ['choice_text' => 'ellas', 'is_correct' => false],
                            ['choice_text' => 'ella', 'is_correct' => false],
                        ],
                        'explanation' => '« Ellos » désigne un groupe d’hommes et s’utilise aussi pour les groupes mixtes.',
                    ],
                ],
            ],
            [
                'title' => 'Les pronoms d’objet direct',
                'description' => 'Apprendre les formes de base lo, la, los et las et les utiliser pour éviter de répéter un nom.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Dans « Veo la película. La veo esta noche », que remplace « la » ?',
                        'choices' => [
                            ['choice_text' => 'la película', 'is_correct' => true],
                            ['choice_text' => 'yo', 'is_correct' => false],
                            ['choice_text' => 'esta noche', 'is_correct' => false],
                            ['choice_text' => 'veo', 'is_correct' => false],
                        ],
                        'explanation' => '« La » est un pronom d’objet direct féminin singulier qui remplace « la película ».',
                    ],
                    [
                        'question' => 'Quel pronom peut remplacer « el libro » dans « Leo el libro » ?',
                        'choices' => [
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                            ['choice_text' => 'lo', 'is_correct' => true],
                        ],
                        'explanation' => '« El libro » est masculin singulier, donc son pronom d’objet direct est « lo ».',
                    ],
                    [
                        'question' => 'Quel pronom remplace « las llaves » ?',
                        'choices' => [
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => true],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'lo', 'is_correct' => false],
                        ],
                        'explanation' => '« Las llaves » est féminin pluriel, donc « las » remplace le groupe nominal.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie correctement « Je l’achète » quand « l’ » désigne un objet masculin singulier ?',
                        'choices' => [
                            ['choice_text' => 'La compro.', 'is_correct' => false],
                            ['choice_text' => 'Los compro.', 'is_correct' => false],
                            ['choice_text' => 'Lo compro.', 'is_correct' => true],
                            ['choice_text' => 'Las compro.', 'is_correct' => false],
                        ],
                        'explanation' => '« Lo » est le pronom d’objet direct masculin singulier, et « compro » signifie « j’achète ».',
                    ],
                    [
                        'question' => 'Ana a les billets. Elle dit : « ___ tengo. » Quel mot complète la phrase ?',
                        'choices' => [
                            ['choice_text' => 'Las', 'is_correct' => false],
                            ['choice_text' => 'La', 'is_correct' => false],
                            ['choice_text' => 'Los', 'is_correct' => true],
                            ['choice_text' => 'Lo', 'is_correct' => false],
                        ],
                        'explanation' => '« Los » remplace un nom masculin pluriel comme « los boletos ».',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on « la » dans « La conozco » en parlant d’une femme ?',
                        'choices' => [
                            ['choice_text' => 'Parce que « la » signifie toujours « elle » comme sujet.', 'is_correct' => false],
                            ['choice_text' => 'Parce que « la » est un verbe.', 'is_correct' => false],
                            ['choice_text' => 'Parce que « la » désigne toujours un lieu.', 'is_correct' => false],
                            ['choice_text' => 'Parce que « la » est le pronom d’objet direct féminin singulier.', 'is_correct' => true],
                        ],
                        'explanation' => '« La » s’utilise pour un objet direct féminin singulier, y compris une femme dans une phrase comme « La conozco ».',
                    ],
                    [
                        'question' => 'Quelle phrase remplace correctement « las canciones » ?',
                        'choices' => [
                            ['choice_text' => 'Los escucho.', 'is_correct' => false],
                            ['choice_text' => 'Las escucho.', 'is_correct' => true],
                            ['choice_text' => 'La escucho.', 'is_correct' => false],
                            ['choice_text' => 'Lo escucho.', 'is_correct' => false],
                        ],
                        'explanation' => '« Las » correspond au nom féminin pluriel « las canciones ».',
                    ],
                    [
                        'question' => 'Pedro achète le café. Si « le café » se dit « el café », quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Lo compra.', 'is_correct' => true],
                            ['choice_text' => 'La compra.', 'is_correct' => false],
                            ['choice_text' => 'Los compra.', 'is_correct' => false],
                            ['choice_text' => 'Las compra.', 'is_correct' => false],
                        ],
                        'explanation' => '« El café » est masculin singulier, donc le pronom d’objet direct est « lo ».',
                    ],
                    [
                        'question' => 'Quelle paire est correctement associée ?',
                        'choices' => [
                            ['choice_text' => 'el teléfono → la', 'is_correct' => false],
                            ['choice_text' => 'la carta → la', 'is_correct' => true],
                            ['choice_text' => 'los zapatos → la', 'is_correct' => false],
                            ['choice_text' => 'las fotos → lo', 'is_correct' => false],
                        ],
                        'explanation' => 'Un nom féminin singulier comme « la carta » est remplacé par « la ».',
                    ],
                    [
                        'question' => 'Un élève écrit « La veo » après avoir mentionné « el coche ». Quel est le problème ?',
                        'choices' => [
                            ['choice_text' => 'Le pronom devrait être « lo » parce que « coche » est masculin singulier.', 'is_correct' => true],
                            ['choice_text' => 'Le pronom devrait être « las » parce que la phrase parle d’un objet.', 'is_correct' => false],
                            ['choice_text' => 'La phrase a besoin de « ellos ».', 'is_correct' => false],
                            ['choice_text' => 'Il n’y a aucun problème.', 'is_correct' => false],
                        ],
                        'explanation' => '« Coche » est masculin singulier, donc « lo veo » est la forme d’objet direct correspondante.',
                    ],
                    [
                        'question' => 'Quelle phrase désigne deux objets féminins que quelqu’un est en train de nettoyer ?',
                        'choices' => [
                            ['choice_text' => 'Los limpio.', 'is_correct' => false],
                            ['choice_text' => 'La limpio.', 'is_correct' => false],
                            ['choice_text' => 'Las limpio.', 'is_correct' => true],
                            ['choice_text' => 'Lo limpio.', 'is_correct' => false],
                        ],
                        'explanation' => '« Las » correspond à un objet direct féminin pluriel comme « las ventanas ».',
                    ],
                    [
                        'question' => 'Quelle est la principale raison d’utiliser « lo, la, los, las » dans une conversation ?',
                        'choices' => [
                            ['choice_text' => 'Ils remplacent le sujet à chaque fois.', 'is_correct' => false],
                            ['choice_text' => 'Ils viennent toujours après le nom.', 'is_correct' => false],
                            ['choice_text' => 'Ils ne s’utilisent qu’avec des personnes.', 'is_correct' => false],
                            ['choice_text' => 'Ils permettent d’éviter de répéter un objet direct déjà connu.', 'is_correct' => true],
                        ],
                        'explanation' => 'Les pronoms d’objet rendent le discours moins répétitif en remplaçant un objet direct déjà compris.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'La conozco desde hace años.', 'is_correct' => true],
                            ['choice_text' => 'Lo conozco desde hace años.', 'is_correct' => false],
                            ['choice_text' => 'Los conozco desde hace años.', 'is_correct' => false],
                            ['choice_text' => 'Las conozco desde hace años.', 'is_correct' => false],
                        ],
                        'explanation' => 'Si la personne connue est une femme, « la conozco » utilise le pronom d’objet direct féminin singulier.',
                    ],
                    [
                        'question' => 'Quel pronom remplacerait « los documentos » dans « Necesito los documentos » ?',
                        'choices' => [
                            ['choice_text' => 'las', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'los', 'is_correct' => true],
                            ['choice_text' => 'lo', 'is_correct' => false],
                        ],
                        'explanation' => '« Los documentos » est masculin pluriel, donc « los » est le pronom d’objet direct correct.',
                    ],
                    [
                        'question' => 'Un serveur te demande si tu veux le dessert. Tu réponds : « Sí, ___ quiero. » Si « el postre » est compris, choisis le bon pronom.',
                        'choices' => [
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                            ['choice_text' => 'lo', 'is_correct' => true],
                        ],
                        'explanation' => '« El postre » est masculin singulier, donc « lo quiero » est correct.',
                    ],
                ],
            ],
            [
                'title' => 'L’objet indirect et les pronoms avec gustar',
                'description' => 'Pratiquer me, te, le, nos et les dans des situations simples impliquant donner, dire et exprimer ses goûts.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Dans « Le doy el libro a Marta », qui reçoit le livre ?',
                        'choices' => [
                            ['choice_text' => 'Marta', 'is_correct' => true],
                            ['choice_text' => 'le locuteur', 'is_correct' => false],
                            ['choice_text' => 'le livre', 'is_correct' => false],
                            ['choice_text' => 'personne', 'is_correct' => false],
                        ],
                        'explanation' => '« Le » indique le destinataire indirect, et « a Marta » précise de qui il s’agit.',
                    ],
                    [
                        'question' => 'Quel pronom convient à « A mí ___ gusta el café » ?',
                        'choices' => [
                            ['choice_text' => 'te', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'me', 'is_correct' => true],
                            ['choice_text' => 'les', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « gustar », « a mí » s’accorde avec « me » : « A mí me gusta el café. »',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « Je lui donne les clés » (à lui) ?',
                        'choices' => [
                            ['choice_text' => 'Lo doy las llaves.', 'is_correct' => false],
                            ['choice_text' => 'La doy las llaves.', 'is_correct' => false],
                            ['choice_text' => 'Los doy las llaves.', 'is_correct' => false],
                            ['choice_text' => 'Le doy las llaves.', 'is_correct' => true],
                        ],
                        'explanation' => '« Le » est le pronom d’objet indirect pour « à lui », tandis que « las llaves » est ce qui est donné.',
                    ],
                    [
                        'question' => 'Un groupe d’amis aime la pizza. Quelle phrase est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Le gusta la pizza.', 'is_correct' => false],
                            ['choice_text' => 'Les gusta la pizza.', 'is_correct' => true],
                            ['choice_text' => 'Los gusta la pizza.', 'is_correct' => false],
                            ['choice_text' => 'Las gustan la pizza.', 'is_correct' => false],
                        ],
                        'explanation' => '« Les » s’utilise pour un groupe pluriel dans la construction avec « gustar ».',
                    ],
                    [
                        'question' => 'Quelle phrase raconte une histoire à quelqu’un ?',
                        'choices' => [
                            ['choice_text' => 'Lo cuento una historia.', 'is_correct' => false],
                            ['choice_text' => 'Te cuento una historia.', 'is_correct' => true],
                            ['choice_text' => 'La cuento una historia.', 'is_correct' => false],
                            ['choice_text' => 'Las cuento una historia.', 'is_correct' => false],
                        ],
                        'explanation' => '« Te » marque la personne qui reçoit l’histoire, tandis que « una historia » est ce qui est raconté.',
                    ],
                    [
                        'question' => 'Une enseignante donne un livre à Ana. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'La da un libro.', 'is_correct' => false],
                            ['choice_text' => 'Lo da un libro.', 'is_correct' => false],
                            ['choice_text' => 'Le da un libro.', 'is_correct' => true],
                            ['choice_text' => 'Las da un libro.', 'is_correct' => false],
                        ],
                        'explanation' => '« Le » est le pronom d’objet indirect utilisé pour une personne au singulier comme Ana.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte pour « Nous leur disons la réponse » ?',
                        'choices' => [
                            ['choice_text' => 'Los decimos la respuesta.', 'is_correct' => false],
                            ['choice_text' => 'Las decimos la respuesta.', 'is_correct' => false],
                            ['choice_text' => 'Le decimos la respuesta.', 'is_correct' => false],
                            ['choice_text' => 'Les decimos la respuesta.', 'is_correct' => true],
                        ],
                        'explanation' => '« Les » est le pronom d’objet indirect pluriel. Ce qui est dit, c’est « la respuesta ».',
                    ],
                    [
                        'question' => 'Que signifie « nos » dans « Nos ayudan » ?',
                        'choices' => [
                            ['choice_text' => 'Ils nous aident.', 'is_correct' => true],
                            ['choice_text' => 'Nous les aidons.', 'is_correct' => false],
                            ['choice_text' => 'Ils l’aident, lui.', 'is_correct' => false],
                            ['choice_text' => 'Nous nous aidons nous-mêmes seulement.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nos » est le pronom d’objet de la première personne du pluriel signifiant « nous ».',
                    ],
                    [
                        'question' => 'Quelle phrase correspond à « A Juan le gusta el fútbol » ?',
                        'choices' => [
                            ['choice_text' => 'Il aime le football.', 'is_correct' => true],
                            ['choice_text' => 'Ils aiment le football.', 'is_correct' => false],
                            ['choice_text' => 'Nous aimons le football.', 'is_correct' => false],
                            ['choice_text' => 'J’aime le football.', 'is_correct' => false],
                        ],
                        'explanation' => '« A Juan le gusta… » signifie que Juan aime le football.',
                    ],
                    [
                        'question' => 'Quel pronom complète « A nosotros ___ encanta viajar » ?',
                        'choices' => [
                            ['choice_text' => 'les', 'is_correct' => false],
                            ['choice_text' => 'nos', 'is_correct' => true],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'te', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « a nosotros », le pronom correspondant est « nos » : « A nosotros nos encanta viajar. »',
                    ],
                    [
                        'question' => 'Une mère dit : « Les preparo la cena. » À qui « les » fait-il référence ?',
                        'choices' => [
                            ['choice_text' => 'au dîner lui-même', 'is_correct' => false],
                            ['choice_text' => 'à la mère', 'is_correct' => false],
                            ['choice_text' => 'à un seul objet', 'is_correct' => false],
                            ['choice_text' => 'à plusieurs personnes qui reçoivent le dîner', 'is_correct' => true],
                        ],
                        'explanation' => '« Les » marque des destinataires au pluriel, comme les enfants ou les invités de la mère.',
                    ],
                ],
            ],
            [
                'title' => 'Les pronoms réfléchis',
                'description' => 'Utiliser me, te, se, nos et se avec des routines quotidiennes comme se lever, se laver, s’habiller et se préparer pour la journée.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase signifie « Je me lève à sept heures » ?',
                        'choices' => [
                            ['choice_text' => 'Te levantas a las siete.', 'is_correct' => false],
                            ['choice_text' => 'Se levanta a las siete.', 'is_correct' => false],
                            ['choice_text' => 'Me levanto a las siete.', 'is_correct' => true],
                            ['choice_text' => 'Nos levantamos a las siete.', 'is_correct' => false],
                        ],
                        'explanation' => '« Me » est le pronom réfléchi utilisé avec « yo » : « me levanto ».',
                    ],
                    [
                        'question' => 'Quel pronom s’accorde avec « tú » dans une phrase réfléchie ?',
                        'choices' => [
                            ['choice_text' => 'te', 'is_correct' => true],
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'se', 'is_correct' => false],
                            ['choice_text' => 'nos', 'is_correct' => false],
                        ],
                        'explanation' => '« Te » est le pronom réfléchi de la deuxième personne du singulier utilisé avec « tú ».',
                    ],
                    [
                        'question' => 'Carlos se lave lui-même. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Carlos me lava.', 'is_correct' => false],
                            ['choice_text' => 'Carlos se lava.', 'is_correct' => true],
                            ['choice_text' => 'Carlos te lava.', 'is_correct' => false],
                            ['choice_text' => 'Carlos nos lava.', 'is_correct' => false],
                        ],
                        'explanation' => '« Se » est le pronom réfléchi de la troisième personne du singulier, qui correspond à Carlos agissant sur lui-même.',
                    ],
                    [
                        'question' => 'Ana et Lucía se préparent ensemble. Quelle phrase fonctionne ?',
                        'choices' => [
                            ['choice_text' => 'Nos prepara.', 'is_correct' => false],
                            ['choice_text' => 'Te preparan.', 'is_correct' => false],
                            ['choice_text' => 'Me preparan.', 'is_correct' => false],
                            ['choice_text' => 'Se preparan.', 'is_correct' => true],
                        ],
                        'explanation' => '« Se preparan » peut signifier qu’Ana et Lucía se préparent elles-mêmes.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « Nous nous brossons les dents » ?',
                        'choices' => [
                            ['choice_text' => 'Nos cepillamos los dientes.', 'is_correct' => true],
                            ['choice_text' => 'Se cepillan los dientes.', 'is_correct' => false],
                            ['choice_text' => 'Te cepillas los dientes.', 'is_correct' => false],
                            ['choice_text' => 'Me cepillo los dientes.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nos » s’accorde avec « nosotros » dans une routine réfléchie : « nos cepillamos ».',
                    ],
                    [
                        'question' => 'Un apprenant écrit « Yo se ducho. » Que faut-il corriger ?',
                        'choices' => [
                            ['choice_text' => 'Utiliser « te » : Yo te ducho.', 'is_correct' => false],
                            ['choice_text' => 'Utiliser « nos » : Yo nos ducho.', 'is_correct' => false],
                            ['choice_text' => 'La phrase est déjà correcte.', 'is_correct' => false],
                            ['choice_text' => 'Utiliser « me » : Yo me ducho.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le pronom réfléchi de la première personne du singulier est « me », donc « Yo me ducho » est correct.',
                    ],
                    [
                        'question' => 'Quelle expression décrit correctement une personne qui s’habille ?',
                        'choices' => [
                            ['choice_text' => 'Se visten.', 'is_correct' => false],
                            ['choice_text' => 'Nos viste.', 'is_correct' => false],
                            ['choice_text' => 'Se viste.', 'is_correct' => true],
                            ['choice_text' => 'Te visten.', 'is_correct' => false],
                        ],
                        'explanation' => '« Se viste » est la forme réfléchie de la troisième personne du singulier, adaptée à une seule personne comme él ou ella.',
                    ],
                    [
                        'question' => 'Quelle est l’idée clé derrière un pronom réfléchi ?',
                        'choices' => [
                            ['choice_text' => 'Le pronom remplace toujours le verbe.', 'is_correct' => false],
                            ['choice_text' => 'Le sujet et le destinataire de l’action sont la même personne.', 'is_correct' => true],
                            ['choice_text' => 'L’action doit toucher une autre personne.', 'is_correct' => false],
                            ['choice_text' => 'Le pronom ne s’utilise qu’au passé.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une construction réfléchie, la personne qui fait l’action est aussi la personne qui en subit l’effet.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit naturellement une routine quotidienne ?',
                        'choices' => [
                            ['choice_text' => 'Me lavan la cara por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Te lavo la cara por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Nos lava la cara por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Me lavo la cara por la mañana.', 'is_correct' => true],
                        ],
                        'explanation' => '« Me lavo la cara » signifie que je me lave le visage moi-même, une routine réfléchie courante.',
                    ],
                    [
                        'question' => 'Quelle phrase désigne deux personnes qui se lavent elles-mêmes ?',
                        'choices' => [
                            ['choice_text' => 'Se lava.', 'is_correct' => false],
                            ['choice_text' => 'Te lavan.', 'is_correct' => false],
                            ['choice_text' => 'Se lavan.', 'is_correct' => true],
                            ['choice_text' => 'Me lavan.', 'is_correct' => false],
                        ],
                        'explanation' => '« Se lavan » est la forme réfléchie de la troisième personne du pluriel pour deux personnes ou plus.',
                    ],
                    [
                        'question' => 'Un élève dit « Nos despertamos a las seis » pour signifier « Nous nous réveillons à six heures. » Le pronom est-il correct ?',
                        'choices' => [
                            ['choice_text' => 'Oui, « nos » correspond à nosotros.', 'is_correct' => true],
                            ['choice_text' => 'Non, ce devrait être « me ».', 'is_correct' => false],
                            ['choice_text' => 'Non, ce devrait être « te ».', 'is_correct' => false],
                            ['choice_text' => 'Non, ce devrait être « lo ».', 'is_correct' => false],
                        ],
                        'explanation' => '« Nos » est le pronom réfléchi correct pour « nosotros », donc « nos despertamos » est naturel.',
                    ],
                    [
                        'question' => 'Quelle paire est correctement associée ?',
                        'choices' => [
                            ['choice_text' => 'tú → se', 'is_correct' => false],
                            ['choice_text' => 'yo → me', 'is_correct' => true],
                            ['choice_text' => 'él → nos', 'is_correct' => false],
                            ['choice_text' => 'nosotros → te', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pronom réfléchi pour « yo » est « me ». Les autres paires associent mal la personne et le pronom.',
                    ],
                    [
                        'question' => 'Pourquoi « se » peut-il sembler déroutant pour les débutants ?',
                        'choices' => [
                            ['choice_text' => 'Il signifie toujours « moi-même ».', 'is_correct' => false],
                            ['choice_text' => 'Il n’appartient qu’aux noms féminins.', 'is_correct' => false],
                            ['choice_text' => 'Il s’utilise avec plusieurs sujets à la troisième personne et apparaît aussi dans d’autres constructions espagnoles.', 'is_correct' => true],
                            ['choice_text' => 'C’est une autre forme de « yo ».', 'is_correct' => false],
                        ],
                        'explanation' => '« Se » s’utilise avec él, ella, usted, ellos, ellas et ustedes dans les constructions réfléchies, et il a aussi d’autres usages en espagnol.',
                    ],
                ],
            ],
            [
                'title' => 'Les pronoms dans de courtes conversations',
                'description' => 'Réunir les pronoms sujets, d’objet direct, d’objet indirect et réfléchis dans de courtes conversations et situations quotidiennes pour débutants.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => '« Qui appelle ? » — « ___ estoy llamando. » Quel pronom convient si la personne veut dire « c’est moi qui appelle » ?',
                        'choices' => [
                            ['choice_text' => 'Tú', 'is_correct' => false],
                            ['choice_text' => 'Ella', 'is_correct' => false],
                            ['choice_text' => 'Yo', 'is_correct' => true],
                            ['choice_text' => 'Ellos', 'is_correct' => false],
                        ],
                        'explanation' => 'Le locuteur peut dire « Yo estoy llamando », même si l’espagnol omet souvent le pronom sujet quand le verbe le rend déjà clair.',
                    ],
                    [
                        'question' => 'Tu dis à un ami : « Je vois la voiture. » Plus tard tu dis : « ___ veo. » Si la voiture est masculine singulière, choisis le pronom.',
                        'choices' => [
                            ['choice_text' => 'La', 'is_correct' => false],
                            ['choice_text' => 'Los', 'is_correct' => false],
                            ['choice_text' => 'Las', 'is_correct' => false],
                            ['choice_text' => 'Lo', 'is_correct' => true],
                        ],
                        'explanation' => '« El coche » est masculin singulier, donc « lo veo » le remplace correctement.',
                    ],
                    [
                        'question' => 'Ton ami te demande si tu aimes le livre. Tu réponds : « Sí, ___ gusta mucho. » Quel mot convient ?',
                        'choices' => [
                            ['choice_text' => 'me', 'is_correct' => true],
                            ['choice_text' => 'te', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => false],
                            ['choice_text' => 'nos', 'is_correct' => false],
                        ],
                        'explanation' => 'Le locuteur parle de sa propre réaction, donc « me gusta » signifie « je l’aime ».',
                    ],
                    [
                        'question' => '« A Marta ___ doy el mensaje. » Quel pronom va dans le blanc ?',
                        'choices' => [
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'le', 'is_correct' => true],
                            ['choice_text' => 'lo', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                        ],
                        'explanation' => '« Le » marque Marta comme la personne qui reçoit le message ; « el mensaje » est l’objet direct.',
                    ],
                    [
                        'question' => 'Quelle phrase combine correctement un pronom réfléchi avec une activité quotidienne ?',
                        'choices' => [
                            ['choice_text' => 'Nos acuestan tarde los sábados.', 'is_correct' => false],
                            ['choice_text' => 'Se acostamos tarde los sábados.', 'is_correct' => false],
                            ['choice_text' => 'Nos acostamos tarde los sábados.', 'is_correct' => true],
                            ['choice_text' => 'Me acostamos tarde los sábados.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nos acostamos » est la forme réfléchie de la première personne du pluriel pour « nous allons nous coucher ».',
                    ],
                    [
                        'question' => 'Un serveur demande : « ¿Quieren el café? » Toi et ton ami répondez : « Sí, ___ queremos. » Quel pronom convient si « el café » est ce que vous voulez ?',
                        'choices' => [
                            ['choice_text' => 'lo', 'is_correct' => true],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'las', 'is_correct' => false],
                        ],
                        'explanation' => '« El café » est masculin singulier, donc le pronom d’objet direct est « lo ».',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « Elle nous dit la vérité » ?',
                        'choices' => [
                            ['choice_text' => 'Ella les dice la verdad.', 'is_correct' => false],
                            ['choice_text' => 'Ella nos dice la verdad.', 'is_correct' => true],
                            ['choice_text' => 'Ella los dice la verdad.', 'is_correct' => false],
                            ['choice_text' => 'Ella se dice la verdad.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nos » signifie « à nous », donc « Ella nos dice la verdad » correspond au sens recherché.',
                    ],
                    [
                        'question' => 'Tu parles à un seul ami. Quelle phrase utilise correctement « te » ?',
                        'choices' => [
                            ['choice_text' => 'Te escribe mañana.', 'is_correct' => false],
                            ['choice_text' => 'Te escriben mañana.', 'is_correct' => false],
                            ['choice_text' => 'Te escribimos mañana.', 'is_correct' => false],
                            ['choice_text' => 'Te escribo mañana.', 'is_correct' => true],
                        ],
                        'explanation' => '« Te escribo » signifie « je t’écris », avec « te » marquant la personne qui reçoit le message.',
                    ],
                    [
                        'question' => 'Quelle phrase est la réponse la plus naturelle à « ¿Conoces a Marta? »',
                        'choices' => [
                            ['choice_text' => 'Sí, lo conozco.', 'is_correct' => false],
                            ['choice_text' => 'Sí, le conozco.', 'is_correct' => false],
                            ['choice_text' => 'Sí, la conozco.', 'is_correct' => true],
                            ['choice_text' => 'Sí, las conozco.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le schéma classique de l’objet direct pour débutants, « Marta » est une femme, donc « la conozco » est utilisé.',
                    ],
                    [
                        'question' => 'Un enfant dit : « ___ me lavo antes de dormir. » Quel pronom sujet peut-on ajouter pour insister ?',
                        'choices' => [
                            ['choice_text' => 'Ellos', 'is_correct' => false],
                            ['choice_text' => 'Yo', 'is_correct' => true],
                            ['choice_text' => 'Usted', 'is_correct' => false],
                            ['choice_text' => 'Nosotras', 'is_correct' => false],
                        ],
                        'explanation' => '« Yo me lavo… » insiste sur le fait que c’est le locuteur qui accomplit l’action réfléchie.',
                    ],
                    [
                        'question' => 'Quel échange est grammaticalement cohérent ?',
                        'choices' => [
                            ['choice_text' => '—¿Te gusta el té? —Sí, te gusta.', 'is_correct' => false],
                            ['choice_text' => '—¿Te gusta el té? —Sí, le gusta.', 'is_correct' => false],
                            ['choice_text' => '—¿Te gusta el té? —Sí, nos gusta.', 'is_correct' => false],
                            ['choice_text' => '—¿Te gusta el té? —Sí, me gusta.', 'is_correct' => true],
                        ],
                        'explanation' => 'La question utilise « te » pour la personne interrogée, et la réponse utilise « me » parce que le locuteur dit « je l’aime ».',
                    ],
                    [
                        'question' => '« Carlos tiene las llaves. » Ana dit ensuite : « Carlos ___ tiene. » Quel pronom remplace « las llaves » ?',
                        'choices' => [
                            ['choice_text' => 'las', 'is_correct' => true],
                            ['choice_text' => 'los', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => false],
                            ['choice_text' => 'lo', 'is_correct' => false],
                        ],
                        'explanation' => '« Las llaves » est féminin pluriel, donc « las » est le pronom d’objet direct correspondant.',
                    ],
                    [
                        'question' => 'Quelle phrase identifie correctement qui reçoit l’objet ?',
                        'choices' => [
                            ['choice_text' => 'Le compro un regalo a mi madre.', 'is_correct' => true],
                            ['choice_text' => 'La compro un regalo a mi madre.', 'is_correct' => false],
                            ['choice_text' => 'Lo compro un regalo a mi madre.', 'is_correct' => false],
                            ['choice_text' => 'Las compro un regalo a mi madre.', 'is_correct' => false],
                        ],
                        'explanation' => '« Le » est le pronom d’objet indirect qui désigne la personne recevant le cadeau ; « a mi madre » précise explicitement le destinataire.',
                    ],
                    [
                        'question' => 'Un couple dit : « ___ vemos mañana. » S’ils veulent dire « Nous te verrons demain », quel pronom désigne la personne qu’ils vont voir ?',
                        'choices' => [
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'te', 'is_correct' => true],
                            ['choice_text' => 'nos', 'is_correct' => false],
                            ['choice_text' => 'se', 'is_correct' => false],
                        ],
                        'explanation' => '« Te vemos mañana » signifie « Nous te voyons demain », avec « te » comme objet direct désignant une personne.',
                    ],
                    [
                        'question' => 'Quelle phrase illustre le mieux l’usage d’un pronom sujet pour marquer un contraste ou une insistance ?',
                        'choices' => [
                            ['choice_text' => 'Cocino; limpia.', 'is_correct' => false],
                            ['choice_text' => 'Me cocino; le limpia.', 'is_correct' => false],
                            ['choice_text' => 'Nos cocino; él limpian.', 'is_correct' => false],
                            ['choice_text' => 'Yo cocino; él limpia.', 'is_correct' => true],
                        ],
                        'explanation' => '« Yo » et « él » rendent explicite le contraste entre les deux personnes : je cuisine, il nettoie.',
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
