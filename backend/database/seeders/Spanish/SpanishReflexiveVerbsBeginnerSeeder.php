<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ReflexiveVerbsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'reflexive-verbs')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les verbes réfléchis : les bases',
                'description' => 'Découvrir ce que sont les verbes réfléchis et utiliser des verbes courants comme levantarse, lavarse, vestirse et acostarse.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Qu’exprime généralement un verbe réfléchi ?',
                        'choices' => [
                            ['choice_text' => 'Le sujet fait l’action sur une autre personne.', 'is_correct' => false],
                            ['choice_text' => 'L’action ne se produit qu’au passé.', 'is_correct' => false],
                            ['choice_text' => 'Le verbe décrit toujours un mouvement.', 'is_correct' => false],
                            ['choice_text' => 'Le sujet fait l’action sur lui-même.', 'is_correct' => true],
                        ],
                        'explanation' => 'Un verbe réfléchi s’utilise quand le sujet et le destinataire de l’action sont la même personne.',
                    ],
                    [
                        'question' => 'Complète : « Yo ___ a las siete. »',
                        'choices' => [
                            ['choice_text' => 'me levanto', 'is_correct' => true],
                            ['choice_text' => 'te levantas', 'is_correct' => false],
                            ['choice_text' => 'se levanta', 'is_correct' => false],
                            ['choice_text' => 'me levantan', 'is_correct' => false],
                        ],
                        'explanation' => '« Levantarse » est réfléchi, donc le pronom de la première personne « me » accompagne « yo » : « me levanto ».',
                    ],
                    [
                        'question' => 'Quelle phrase signifie correctement « Je me lave » ?',
                        'choices' => [
                            ['choice_text' => 'Te lavo.', 'is_correct' => false],
                            ['choice_text' => 'Me lavo.', 'is_correct' => true],
                            ['choice_text' => 'Se lavo.', 'is_correct' => false],
                            ['choice_text' => 'Me lavas.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet est « yo », donc le pronom réfléchi est « me », suivi de la forme de la première personne « lavo ».',
                    ],
                    [
                        'question' => 'Quel mot est le pronom réfléchi pour tú ?',
                        'choices' => [
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'se', 'is_correct' => false],
                            ['choice_text' => 'te', 'is_correct' => true],
                            ['choice_text' => 'nos', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pronom réfléchi de la deuxième personne du singulier « tú » est « te ».',
                    ],
                    [
                        'question' => 'Ana ___ los dientes después del desayuno.',
                        'choices' => [
                            ['choice_text' => 'me cepillo', 'is_correct' => false],
                            ['choice_text' => 'te cepillas', 'is_correct' => false],
                            ['choice_text' => 'se cepilla', 'is_correct' => true],
                            ['choice_text' => 'nos cepillamos', 'is_correct' => false],
                        ],
                        'explanation' => 'Ana est la troisième personne du singulier, donc le pronom réfléchi est « se » : « se cepilla ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un verbe réfléchi ?',
                        'choices' => [
                            ['choice_text' => 'Nos ducha por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Nos duchamos por la mañana.', 'is_correct' => true],
                            ['choice_text' => 'Se duchamos por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Te duchamos por la mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nos duchamos » signifie « nous nous douchons », « nos » marquant l’action réfléchie.',
                    ],
                    [
                        'question' => 'Un apprenant dit « Yo se levanto. » Quelle est la forme correcte ?',
                        'choices' => [
                            ['choice_text' => 'Yo te levanto.', 'is_correct' => false],
                            ['choice_text' => 'Yo nos levanto.', 'is_correct' => false],
                            ['choice_text' => 'Yo le levanto.', 'is_correct' => false],
                            ['choice_text' => 'Yo me levanto.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le pronom réfléchi doit s’accorder avec le sujet. Pour « yo », on utilise « me ».',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « Ils s’habillent à huit heures » ?',
                        'choices' => [
                            ['choice_text' => 'Se visten a las ocho.', 'is_correct' => true],
                            ['choice_text' => 'Nos vestimos a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'Te vistes a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'Me visto a las ocho.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour « ellos/ellas », le pronom réfléchi est « se », et « vestirse » devient « se visten ».',
                    ],
                    [
                        'question' => 'Quelle est la façon naturelle de dire « Nous nous couchons tôt » ?',
                        'choices' => [
                            ['choice_text' => 'Nos acostamos temprano.', 'is_correct' => true],
                            ['choice_text' => 'Se acostamos temprano.', 'is_correct' => false],
                            ['choice_text' => 'Nos acostan temprano.', 'is_correct' => false],
                            ['choice_text' => 'Te acostamos temprano.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nos acostamos » est la forme réfléchie de la première personne du pluriel de « acostarse ».',
                    ],
                    [
                        'question' => 'Quelle paire est correctement associée ?',
                        'choices' => [
                            ['choice_text' => 'tú → nos', 'is_correct' => false],
                            ['choice_text' => 'nosotros → te', 'is_correct' => false],
                            ['choice_text' => 'yo → me', 'is_correct' => true],
                            ['choice_text' => 'ellos → me', 'is_correct' => false],
                        ],
                        'explanation' => 'Les pronoms réfléchis sont me, te, se, nos, os, se. Donc « yo → me » est correct.',
                    ],
                ],
            ],
            [
                'title' => 'Les pronoms réfléchis et leur accord',
                'description' => 'S’exercer à faire correspondre me, te, se, nos et se avec le bon sujet et le verbe conjugué.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Complète : « Tú ___ duchas antes de salir. »',
                        'choices' => [
                            ['choice_text' => 'te', 'is_correct' => true],
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'se', 'is_correct' => false],
                            ['choice_text' => 'nos', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pronom réfléchi qui correspond à « tú » est « te ».',
                    ],
                    [
                        'question' => 'Complète : « Nosotros ___ lavamos las manos. »',
                        'choices' => [
                            ['choice_text' => 'se', 'is_correct' => false],
                            ['choice_text' => 'te', 'is_correct' => false],
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'nos', 'is_correct' => true],
                        ],
                        'explanation' => 'Le pronom réfléchi qui correspond à « nosotros » est « nos ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ellos me afeitan por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Ellos te afeita por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Ellos se afeitan por la mañana.', 'is_correct' => true],
                            ['choice_text' => 'Ellos nos afeito por la mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ellos » prend le pronom réfléchi « se », et le verbe s’accorde à la troisième personne du pluriel.',
                    ],
                    [
                        'question' => 'Quelle phrase accorde correctement le sujet et le pronom réfléchi ?',
                        'choices' => [
                            ['choice_text' => 'María me maquilla.', 'is_correct' => false],
                            ['choice_text' => 'María se maquilla.', 'is_correct' => true],
                            ['choice_text' => 'María te maquillan.', 'is_correct' => false],
                            ['choice_text' => 'María nos maquillo.', 'is_correct' => false],
                        ],
                        'explanation' => '« María » est la troisième personne du singulier, donc « se maquilla » est la construction réfléchie correcte.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « Vous vous réveillez tôt » (tous) ?',
                        'choices' => [
                            ['choice_text' => 'Ustedes te despiertas temprano.', 'is_correct' => false],
                            ['choice_text' => 'Ustedes se despiertan temprano.', 'is_correct' => true],
                            ['choice_text' => 'Ustedes nos despertamos temprano.', 'is_correct' => false],
                            ['choice_text' => 'Ustedes me despiertan temprano.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ustedes » prend « se », et « despiertan » s’accorde avec le sujet pluriel.',
                    ],
                    [
                        'question' => 'Un élève écrit « Nos se acostamos tarde. » Qu’est-ce qu’il faut supprimer ?',
                        'choices' => [
                            ['choice_text' => 'nos', 'is_correct' => false],
                            ['choice_text' => 'acostamos', 'is_correct' => false],
                            ['choice_text' => 'tarde', 'is_correct' => false],
                            ['choice_text' => 'se', 'is_correct' => true],
                        ],
                        'explanation' => '« Nosotros » possède déjà le pronom réfléchi « nos », donc le « se » en trop doit être supprimé.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise le bon pronom réfléchi pour une amie ?',
                        'choices' => [
                            ['choice_text' => 'Mi amiga me prepara rápido.', 'is_correct' => false],
                            ['choice_text' => 'Mi amiga te preparo rápido.', 'is_correct' => false],
                            ['choice_text' => 'Mi amiga se prepara rápido.', 'is_correct' => true],
                            ['choice_text' => 'Mi amiga nos preparan rápido.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mi amiga » est la troisième personne du singulier, donc « se » est le pronom réfléchi correct.',
                    ],
                    [
                        'question' => 'Quelle combinaison est correcte pour « yo / vestirse » ?',
                        'choices' => [
                            ['choice_text' => 'me visto', 'is_correct' => true],
                            ['choice_text' => 'te vistes', 'is_correct' => false],
                            ['choice_text' => 'se viste', 'is_correct' => false],
                            ['choice_text' => 'nos vestimos', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour « yo », « vestirse » devient « me visto ». Le verbe change aussi de « vestir » vers la forme irrégulière à changement de radical « visto ».',
                    ],
                    [
                        'question' => 'Quelle combinaison est correcte pour « nosotros / divertirse » ?',
                        'choices' => [
                            ['choice_text' => 'me divierto', 'is_correct' => false],
                            ['choice_text' => 'se divierte', 'is_correct' => false],
                            ['choice_text' => 'te divertís', 'is_correct' => false],
                            ['choice_text' => 'nos divertimos', 'is_correct' => true],
                        ],
                        'explanation' => 'La forme réfléchie de la première personne du pluriel est « nos divertimos ».',
                    ],
                    [
                        'question' => 'Quelle phrase comporte un pronom réfléchi et une terminaison verbale corrects ?',
                        'choices' => [
                            ['choice_text' => 'Yo se despiertas temprano.', 'is_correct' => false],
                            ['choice_text' => 'Yo me despierto temprano.', 'is_correct' => true],
                            ['choice_text' => 'Yo te despierta temprano.', 'is_correct' => false],
                            ['choice_text' => 'Yo nos despiertan temprano.', 'is_correct' => false],
                        ],
                        'explanation' => '« Yo » exige « me », et le verbe doit être à la première personne du singulier : « despierto ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « se » avec un sujet pluriel ?',
                        'choices' => [
                            ['choice_text' => 'Mis padres se levantan temprano.', 'is_correct' => true],
                            ['choice_text' => 'Mis padres se levanta temprano.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres nos levantamos temprano.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres te levantan temprano.', 'is_correct' => false],
                        ],
                        'explanation' => 'Un sujet à la troisième personne du pluriel utilise « se », et le verbe « levantan » s’accorde avec « mis padres ».',
                    ],
                    [
                        'question' => 'Quelle est la meilleure habitude pour éviter les erreurs de pronom ?',
                        'choices' => [
                            ['choice_text' => 'Toujours utiliser « se » avec les verbes réfléchis.', 'is_correct' => false],
                            ['choice_text' => 'Mettre « me » avec chaque sujet.', 'is_correct' => false],
                            ['choice_text' => 'Associer le pronom réfléchi au sujet avant de choisir la forme verbale.', 'is_correct' => true],
                            ['choice_text' => 'Choisir le pronom uniquement selon la terminaison du nom.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pronom change selon le sujet, donc vérifier d’abord le sujet évite de nombreuses erreurs de débutant.',
                    ],
                ],
            ],
            [
                'title' => 'Les routines quotidiennes avec les verbes réfléchis',
                'description' => 'Utiliser des verbes réfléchis dans des routines réalistes du matin, de la journée et du soir.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase est la plus naturelle pour une routine matinale ?',
                        'choices' => [
                            ['choice_text' => 'Me levanto a las siete.', 'is_correct' => true],
                            ['choice_text' => 'Me acuesto a las siete de la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Se desayuno a las siete.', 'is_correct' => false],
                            ['choice_text' => 'Nos duchas a las siete.', 'is_correct' => false],
                        ],
                        'explanation' => '« Levantarse » s’utilise couramment pour se lever, donc « me levanto » convient à une routine matinale.',
                    ],
                    [
                        'question' => 'Lucía, d’habitude, ___ antes de desayunar.',
                        'choices' => [
                            ['choice_text' => 'me ducho', 'is_correct' => false],
                            ['choice_text' => 'te duchas', 'is_correct' => false],
                            ['choice_text' => 'nos duchamos', 'is_correct' => false],
                            ['choice_text' => 'se ducha', 'is_correct' => true],
                        ],
                        'explanation' => 'Lucía est la troisième personne du singulier, donc « se ducha » est correct.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « Je me brosse les dents après le petit-déjeuner » ?',
                        'choices' => [
                            ['choice_text' => 'Te cepillas los dientes después del desayuno.', 'is_correct' => false],
                            ['choice_text' => 'Se cepillo los dientes después del desayuno.', 'is_correct' => false],
                            ['choice_text' => 'Me cepillo los dientes después del desayuno.', 'is_correct' => true],
                            ['choice_text' => 'Me cepillan los dientes después del desayuno.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet est « yo », donc le pronom réfléchi est « me » et le verbe est « cepillo ».',
                    ],
                    [
                        'question' => 'Un père dit à ses enfants : « Ustedes ___ muy tarde. » Quel verbe convient pour une routine du coucher ?',
                        'choices' => [
                            ['choice_text' => 'me acuesto', 'is_correct' => false],
                            ['choice_text' => 'se acuestan', 'is_correct' => true],
                            ['choice_text' => 'te acuestas', 'is_correct' => false],
                            ['choice_text' => 'nos acostamos', 'is_correct' => false],
                        ],
                        'explanation' => '« Ustedes » prend « se », et « acuestan » est la forme plurielle au présent de « acostarse ».',
                    ],
                    [
                        'question' => 'Quelle action vient généralement avant de s’habiller ?',
                        'choices' => [
                            ['choice_text' => 'acostarse', 'is_correct' => false],
                            ['choice_text' => 'despertarse', 'is_correct' => true],
                            ['choice_text' => 'cenar', 'is_correct' => false],
                            ['choice_text' => 'dormirse', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une routine matinale typique, on se réveille avant de s’habiller.',
                    ],
                    [
                        'question' => 'Quelle phrase présente un enchaînement logique ?',
                        'choices' => [
                            ['choice_text' => 'Me visto, me despierto y me acuesto.', 'is_correct' => false],
                            ['choice_text' => 'Me acuesto, me despierto y me duermo.', 'is_correct' => false],
                            ['choice_text' => 'Me duermo, me levanto y me despierto.', 'is_correct' => false],
                            ['choice_text' => 'Me despierto, me ducho y me visto.', 'is_correct' => true],
                        ],
                        'explanation' => 'L’enchaînement suit une routine matinale naturelle : se réveiller, se doucher, puis s’habiller.',
                    ],
                    [
                        'question' => 'Quelle expression complète naturellement la phrase ? « Después del trabajo, yo ___ un poco. »',
                        'choices' => [
                            ['choice_text' => 'me relajo', 'is_correct' => true],
                            ['choice_text' => 'te relajas', 'is_correct' => false],
                            ['choice_text' => 'se relaja', 'is_correct' => false],
                            ['choice_text' => 'nos relajamos', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « yo », le pronom réfléchi est « me », donnant « me relajo ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement un couple allant se coucher ?',
                        'choices' => [
                            ['choice_text' => 'Ellos me acuesto a las once.', 'is_correct' => false],
                            ['choice_text' => 'Ellos te acuestas a las once.', 'is_correct' => false],
                            ['choice_text' => 'Ellos se acuestan a las once.', 'is_correct' => true],
                            ['choice_text' => 'Ellos nos acostamos a las once.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ellos » prend « se » et le verbe à la troisième personne du pluriel « acuestan ».',
                    ],
                    [
                        'question' => 'Un élève dit : « Yo me lavo la cara y después ___. » Quelle est une étape suivante naturelle ?',
                        'choices' => [
                            ['choice_text' => 'te vistes', 'is_correct' => false],
                            ['choice_text' => 'me visto', 'is_correct' => true],
                            ['choice_text' => 'se viste', 'is_correct' => false],
                            ['choice_text' => 'nos vestimos', 'is_correct' => false],
                        ],
                        'explanation' => 'Le même sujet poursuit la routine, donc « yo me visto » est une étape suivante naturelle.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus naturelle pour une routine du soir ?',
                        'choices' => [
                            ['choice_text' => 'Nos levantamos y nos despertamos.', 'is_correct' => false],
                            ['choice_text' => 'Nos duchamos y nos levantamos antes de dormir.', 'is_correct' => false],
                            ['choice_text' => 'Nos ponemos el pijama y nos acostamos.', 'is_correct' => true],
                            ['choice_text' => 'Nos acostamos y nos despertamos para ir a dormir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Mettre son pyjama puis se coucher forme un enchaînement logique pour le soir.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit une habitude routinière ?',
                        'choices' => [
                            ['choice_text' => 'Ayer me preparé para el trabajo.', 'is_correct' => false],
                            ['choice_text' => 'Mañana me prepararé para el trabajo.', 'is_correct' => false],
                            ['choice_text' => 'Estoy preparando el trabajo ahora.', 'is_correct' => false],
                            ['choice_text' => 'Cada mañana me preparo para el trabajo.', 'is_correct' => true],
                        ],
                        'explanation' => '« Cada mañana » indique une routine répétée, et la forme réfléchie au présent « me preparo » convient.',
                    ],
                    [
                        'question' => 'Quel verbe est particulièrement courant pour la première action après le réveil ?',
                        'choices' => [
                            ['choice_text' => 'levantarse', 'is_correct' => true],
                            ['choice_text' => 'acostarse', 'is_correct' => false],
                            ['choice_text' => 'dormirse', 'is_correct' => false],
                            ['choice_text' => 'jubilarse', 'is_correct' => false],
                        ],
                        'explanation' => 'On « se levanta » généralement après s’être réveillé.',
                    ],
                    [
                        'question' => 'Quelle phrase sonne naturelle dans un simple paragraphe décrivant une routine quotidienne ?',
                        'choices' => [
                            ['choice_text' => 'Mi hermano se despierta a las seis, se ducha y se viste.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermano me despierta a las seis, se duchan y se visto.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano se despiertan a las seis, te ducha y se visten.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano nos despierto a las seis, se ducho y te viste.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le même sujet à la troisième personne du singulier utilise « se » avec chaque verbe réfléchi, et chaque verbe s’accorde avec « mi hermano ».',
                    ],
                    [
                        'question' => 'Quelle option complète correctement « Antes de salir, mis hermanas ___ el pelo. » ?',
                        'choices' => [
                            ['choice_text' => 'me peino', 'is_correct' => false],
                            ['choice_text' => 'te peinas', 'is_correct' => false],
                            ['choice_text' => 'se peinan', 'is_correct' => true],
                            ['choice_text' => 'nos peinamos', 'is_correct' => false],
                        ],
                        'explanation' => '« Mis hermanas » est la troisième personne du pluriel, donc la forme réfléchie est « se peinan ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit une routine de week-end plausible ?',
                        'choices' => [
                            ['choice_text' => 'Los sábados me acuesto por la mañana antes de despertarme.', 'is_correct' => false],
                            ['choice_text' => 'Los sábados me levanto más tarde.', 'is_correct' => true],
                            ['choice_text' => 'Los sábados se levanto más tarde.', 'is_correct' => false],
                            ['choice_text' => 'Los sábados me levantan más tarde yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sujet « yo » prend correctement « me levanto », et la phrase décrit une routine répétée plausible.',
                    ],
                ],
            ],
            [
                'title' => 'Les verbes réfléchis liés au corps et aux vêtements',
                'description' => 'Pratiquer des expressions courantes liées au corps, aux vêtements et aux soins personnels sans perdre le pronom réfléchi.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase signifie « Je me lave le visage chaque matin » ?',
                        'choices' => [
                            ['choice_text' => 'Me lava la cara cada mañana.', 'is_correct' => false],
                            ['choice_text' => 'Se lavo la cara cada mañana.', 'is_correct' => false],
                            ['choice_text' => 'Te lavo la cara cada mañana.', 'is_correct' => false],
                            ['choice_text' => 'Me lavo la cara cada mañana.', 'is_correct' => true],
                        ],
                        'explanation' => '« Me lavo la cara » est la structure réfléchie habituelle pour se laver le visage soi-même.',
                    ],
                    [
                        'question' => 'Complète : « Antes de salir, Ana ___ el pelo. »',
                        'choices' => [
                            ['choice_text' => 'se peina', 'is_correct' => true],
                            ['choice_text' => 'me peino', 'is_correct' => false],
                            ['choice_text' => 'te peinas', 'is_correct' => false],
                            ['choice_text' => 'nos peinamos', 'is_correct' => false],
                        ],
                        'explanation' => 'Ana est la troisième personne du singulier, donc « se peina » est correct.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte pour une personne qui met une veste ?',
                        'choices' => [
                            ['choice_text' => 'Me pones la chaqueta.', 'is_correct' => false],
                            ['choice_text' => 'Se pone la chaqueta.', 'is_correct' => true],
                            ['choice_text' => 'Te pongo la chaqueta.', 'is_correct' => false],
                            ['choice_text' => 'Nos ponen la chaqueta.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une personne qui met sa propre veste, « ponerse » s’emploie de façon réfléchie : « se pone la chaqueta ».',
                    ],
                    [
                        'question' => 'Quelle forme complète « Yo ___ los zapatos antes de salir. » ?',
                        'choices' => [
                            ['choice_text' => 'te pones', 'is_correct' => false],
                            ['choice_text' => 'se pone', 'is_correct' => false],
                            ['choice_text' => 'me pongo', 'is_correct' => true],
                            ['choice_text' => 'nos ponemos', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour « yo », la forme réfléchie est « me pongo », issue de « ponerse ».',
                    ],
                    [
                        'question' => 'Quelle expression est naturelle pour dire que l’on s’habille ?',
                        'choices' => [
                            ['choice_text' => 'Me visto a alguien.', 'is_correct' => false],
                            ['choice_text' => 'Se visto.', 'is_correct' => false],
                            ['choice_text' => 'Me visto.', 'is_correct' => true],
                            ['choice_text' => 'Nos vistes.', 'is_correct' => false],
                        ],
                        'explanation' => '« Me visto » signifie « je m’habille », en utilisant la forme réfléchie de « vestir ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement une expression liée à une partie du corps ?',
                        'choices' => [
                            ['choice_text' => 'Nos lavamos los manos antes de comer.', 'is_correct' => false],
                            ['choice_text' => 'Nos lavamos las manos antes de comer.', 'is_correct' => true],
                            ['choice_text' => 'Nos lava las manos antes de comer.', 'is_correct' => false],
                            ['choice_text' => 'Nos lavamos la manos antes de comer.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pronom réfléchi « nos » correspond au sujet, et « manos » est pluriel, donc « las manos » est correct.',
                    ],
                    [
                        'question' => 'Un apprenant dit « Me pongo mi camisa » pour simplement décrire le fait de s’habiller. Quelle variante est particulièrement naturelle dans de nombreux contextes ?',
                        'choices' => [
                            ['choice_text' => 'Me pongo la camisa.', 'is_correct' => true],
                            ['choice_text' => 'Me pones la camisa.', 'is_correct' => false],
                            ['choice_text' => 'Se pongo la camisa.', 'is_correct' => false],
                            ['choice_text' => 'Me pone las camisa.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un vêtement porté dans le cadre d’une routine, « me pongo la camisa » est un usage naturel de « ponerse ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement deux frères et sœurs qui se préparent ?',
                        'choices' => [
                            ['choice_text' => 'Los hermanos se viste rápidamente.', 'is_correct' => false],
                            ['choice_text' => 'Los hermanos nos vestimos rápidamente.', 'is_correct' => false],
                            ['choice_text' => 'Los hermanos me visto rápidamente.', 'is_correct' => false],
                            ['choice_text' => 'Los hermanos se visten rápidamente.', 'is_correct' => true],
                        ],
                        'explanation' => '« Los hermanos » est la troisième personne du pluriel, donc le pronom réfléchi est « se » et le verbe est « visten ».',
                    ],
                    [
                        'question' => 'Quelle expression signifie « Elle se lave les mains » ?',
                        'choices' => [
                            ['choice_text' => 'Me lava las manos.', 'is_correct' => false],
                            ['choice_text' => 'Se lava las manos.', 'is_correct' => true],
                            ['choice_text' => 'Te lavas las manos.', 'is_correct' => false],
                            ['choice_text' => 'Nos lavamos las manos.', 'is_correct' => false],
                        ],
                        'explanation' => '« Se lava las manos » est la construction réfléchie de la troisième personne du singulier.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement la forme de « afeitarse » pour un homme qui parle de lui-même ?',
                        'choices' => [
                            ['choice_text' => 'Me afeito por la mañana.', 'is_correct' => true],
                            ['choice_text' => 'Se afeito por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Te afeito por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Nos afeita por la mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour « yo », le pronom réfléchi correct est « me », donnant « me afeito ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ella me maquilla antes de trabajar.', 'is_correct' => false],
                            ['choice_text' => 'Ella se maquillo antes de trabajar.', 'is_correct' => false],
                            ['choice_text' => 'Ella se maquilla antes de trabajar.', 'is_correct' => true],
                            ['choice_text' => 'Ella te maquillas antes de trabajar.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ella se maquilla » utilise correctement le pronom réfléchi de la troisième personne du singulier et le verbe au présent.',
                    ],
                ],
            ],
            [
                'title' => 'La place du pronom réfléchi',
                'description' => 'Apprendre où placer les pronoms réfléchis avec les verbes conjugués et avec les constructions à l’infinitif.',
                'duration' => 20,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Dans « Me quiero levantar temprano », où se place le pronom réfléchi ?',
                        'choices' => [
                            ['choice_text' => 'Seulement après l’infinitif.', 'is_correct' => false],
                            ['choice_text' => 'À la fin de chaque phrase.', 'is_correct' => false],
                            ['choice_text' => 'Avant le verbe conjugué.', 'is_correct' => true],
                            ['choice_text' => 'Avant le sujet.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un verbe conjugué suivi d’un infinitif, le pronom réfléchi peut apparaître avant le verbe conjugué : « me quiero levantar ».',
                    ],
                    [
                        'question' => 'Quelle phrase est également correcte ?',
                        'choices' => [
                            ['choice_text' => 'Quiero me levantar temprano.', 'is_correct' => false],
                            ['choice_text' => 'Quiero levantarse temprano yo.', 'is_correct' => false],
                            ['choice_text' => 'Quiero me levanto temprano.', 'is_correct' => false],
                            ['choice_text' => 'Quiero levantarme temprano.', 'is_correct' => true],
                        ],
                        'explanation' => 'Quand un infinitif suit un verbe conjugué, le pronom réfléchi peut s’attacher à la fin de l’infinitif : « levantarme ».',
                    ],
                    [
                        'question' => 'Quelle paire est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Me voy acostarse. / Voy me a acostar.', 'is_correct' => false],
                            ['choice_text' => 'Me voy a acostar. / Voy a acostarme.', 'is_correct' => true],
                            ['choice_text' => 'Me voy acostar me. / Voy a me acostar.', 'is_correct' => false],
                            ['choice_text' => 'Me voy se acostar. / Voy se a acostar.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « ir a + infinitif », le pronom réfléchi peut aller avant le verbe conjugué ou s’attacher à l’infinitif.',
                    ],
                    [
                        'question' => 'Complète : « Tengo que ___ temprano. » (levantarse, yo)',
                        'choices' => [
                            ['choice_text' => 'levantarme', 'is_correct' => true],
                            ['choice_text' => 'me levantar', 'is_correct' => false],
                            ['choice_text' => 'se levantar', 'is_correct' => false],
                            ['choice_text' => 'levanto', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand « levantarse » suit « tengo que », attacher le pronom réfléchi de la première personne à l’infinitif donne « tengo que levantarme ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Necesito ducharme antes de salir.', 'is_correct' => true],
                            ['choice_text' => 'Necesito me duchar antes de salir.', 'is_correct' => false],
                            ['choice_text' => 'Necesito ducharse antes de salir yo.', 'is_correct' => false],
                            ['choice_text' => 'Necesito me ducho antes de salir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Après un verbe conjugué comme « necesito », le pronom réfléchi peut s’attacher à l’infinitif « ducharme ».',
                    ],
                    [
                        'question' => 'Un apprenant écrit « Voy a se vestir. » Quelle est la correction ?',
                        'choices' => [
                            ['choice_text' => 'Voy me a vestir.', 'is_correct' => false],
                            ['choice_text' => 'Voy a me visto.', 'is_correct' => false],
                            ['choice_text' => 'Voy a vestirme.', 'is_correct' => true],
                            ['choice_text' => 'Voy se vestir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pronom réfléchi s’attache à l’infinitif : « vestirme ».',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « Nous allons nous lever tôt » ?',
                        'choices' => [
                            ['choice_text' => 'Vamos nos levantar temprano.', 'is_correct' => false],
                            ['choice_text' => 'Vamos a levantarnos temprano.', 'is_correct' => true],
                            ['choice_text' => 'Nos vamos levantarse temprano.', 'is_correct' => false],
                            ['choice_text' => 'Vamos a nos levantamos temprano.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « vamos a + infinitif », le pronom s’attache naturellement à l’infinitif : « levantarnos ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte avec un verbe conjugué au présent ?',
                        'choices' => [
                            ['choice_text' => 'Ella quiere se preparar ahora.', 'is_correct' => false],
                            ['choice_text' => 'Ella se quiere prepara ahora.', 'is_correct' => false],
                            ['choice_text' => 'Ella quiere se prepara ahora.', 'is_correct' => false],
                            ['choice_text' => 'Ella se quiere preparar ahora.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le pronom réfléchi peut venir avant le verbe conjugué dans « se quiere preparar ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte avec « poder + infinitif » ?',
                        'choices' => [
                            ['choice_text' => 'No puedo me acostar tan temprano.', 'is_correct' => false],
                            ['choice_text' => 'No me puedo acostar me tan temprano.', 'is_correct' => false],
                            ['choice_text' => 'No puedo se acostar tan temprano.', 'is_correct' => false],
                            ['choice_text' => 'No puedo acostarme tan temprano.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le pronom s’attache à l’infinitif « acostarme », ce qui est une construction standard.',
                    ],
                    [
                        'question' => 'Quelle phrase comporte un pronom réfléchi correctement placé ?',
                        'choices' => [
                            ['choice_text' => 'Después de me bañar, visto me.', 'is_correct' => false],
                            ['choice_text' => 'Después de bañarme, me visto.', 'is_correct' => true],
                            ['choice_text' => 'Después de bañarme, visto se.', 'is_correct' => false],
                            ['choice_text' => 'Después de bañar me, me visto.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’infinitif « bañarme » inclut correctement le pronom, et « me visto » marque correctement l’action réfléchie suivante.',
                    ],
                    [
                        'question' => 'Quelle est la meilleure règle de débutant pour un verbe réfléchi après un autre verbe conjugué ?',
                        'choices' => [
                            ['choice_text' => 'Le pronom doit toujours aller après l’infinitif.', 'is_correct' => false],
                            ['choice_text' => 'Le pronom doit toujours aller avant le sujet.', 'is_correct' => false],
                            ['choice_text' => 'Le pronom peut aller avant le verbe conjugué ou s’attacher à l’infinitif.', 'is_correct' => true],
                            ['choice_text' => 'Le pronom est omis.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux placements sont courants avec un verbe conjugué suivi d’un infinitif : « me quiero levantar » et « quiero levantarme ».',
                    ],
                    [
                        'question' => 'Quelle paire a le même sens ?',
                        'choices' => [
                            ['choice_text' => 'Me voy a lavar. / Voy a lavarme.', 'is_correct' => true],
                            ['choice_text' => 'Me lavo. / Voy a lavar.', 'is_correct' => false],
                            ['choice_text' => 'Se va a vestir. / Va a vestir.', 'is_correct' => false],
                            ['choice_text' => 'Nos vamos a dormir. / Vamos dormir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux phrases signifient « Je vais me laver », en utilisant deux positions acceptées du pronom réfléchi.',
                    ],
                    [
                        'question' => 'Complète naturellement : « Antes de trabajar, necesito ___. »',
                        'choices' => [
                            ['choice_text' => 'me preparo', 'is_correct' => false],
                            ['choice_text' => 'se preparar', 'is_correct' => false],
                            ['choice_text' => 'prepararse', 'is_correct' => false],
                            ['choice_text' => 'prepararme', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sujet est « yo », donc « necesito prepararme » est le bon infinitif réfléchi à la première personne.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement formée ?',
                        'choices' => [
                            ['choice_text' => 'Mis hijos quieren se bañar antes de cenar.', 'is_correct' => false],
                            ['choice_text' => 'Mis hijos quieren bañarse antes de cenar.', 'is_correct' => true],
                            ['choice_text' => 'Mis hijos se quieren bañarse antes de cenar.', 'is_correct' => false],
                            ['choice_text' => 'Mis hijos quieren bañan antes de cenar.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pronom réfléchi s’attache correctement à l’infinitif « bañarse » après « quieren ».',
                    ],
                ],
            ],
            [
                'title' => 'Les verbes réfléchis en situation réelle',
                'description' => 'Utiliser les verbes réfléchis dans de courtes situations pratiques, comparer les sens réfléchi et non réfléchi, et corriger des erreurs fréquentes de débutant.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Juan réveille son petit frère. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Juan se despierta a su hermano.', 'is_correct' => false],
                            ['choice_text' => 'Juan despiertan a su hermano.', 'is_correct' => false],
                            ['choice_text' => 'Juan despierta a su hermano.', 'is_correct' => true],
                            ['choice_text' => 'Juan me despierta a su hermano.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ici, Juan agit sur une autre personne, donc le verbe n’est pas réfléchi : « despierta a su hermano ».',
                    ],
                    [
                        'question' => 'Juan se réveille lui-même. Quelle phrase change le sens ?',
                        'choices' => [
                            ['choice_text' => 'Juan despierta a su hermano.', 'is_correct' => false],
                            ['choice_text' => 'Juan despierta a sus amigos.', 'is_correct' => false],
                            ['choice_text' => 'Juan despierta al niño.', 'is_correct' => false],
                            ['choice_text' => 'Juan se despierta.', 'is_correct' => true],
                        ],
                        'explanation' => 'La forme réfléchie « se despierta » signifie que Juan se réveille lui-même, alors que les versions non réfléchies agissent sur quelqu’un d’autre.',
                    ],
                    [
                        'question' => 'Quel contraste est correct ?',
                        'choices' => [
                            ['choice_text' => 'Me lavo. / Me lavo el coche siempre.', 'is_correct' => false],
                            ['choice_text' => 'Me lavo. / Lavo el coche.', 'is_correct' => true],
                            ['choice_text' => 'Se lavo. / Lava él mismo.', 'is_correct' => false],
                            ['choice_text' => 'Me lava. / Me lavo a Juan.', 'is_correct' => false],
                        ],
                        'explanation' => '« Me lavo » signifie « je me lave » ; « lavo el coche » signifie « je lave la voiture », donc la deuxième action n’est pas réfléchie.',
                    ],
                    [
                        'question' => 'Une mère dit : « Mi hijo ___ muy temprano, pero yo ___ a las ocho. » Quelles formes conviennent ?',
                        'choices' => [
                            ['choice_text' => 'se levanta / me levanto', 'is_correct' => true],
                            ['choice_text' => 'me levanta / se levanto', 'is_correct' => false],
                            ['choice_text' => 'se levanto / me levanta', 'is_correct' => false],
                            ['choice_text' => 'te levantas / nos levantamos', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier sujet est « mi hijo » (él → se levanta), tandis que le second est « yo » (me levanto).',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement deux personnes qui se préparent pour une réunion ?',
                        'choices' => [
                            ['choice_text' => 'Nos prepara para la reunión.', 'is_correct' => false],
                            ['choice_text' => 'Se preparo para la reunión.', 'is_correct' => false],
                            ['choice_text' => 'Te preparamos para la reunión.', 'is_correct' => false],
                            ['choice_text' => 'Nos preparamos para la reunión.', 'is_correct' => true],
                        ],
                        'explanation' => '« Nos preparamos » signifie « nous nous préparons » et correspond au sujet « nosotros ».',
                    ],
                    [
                        'question' => 'Un apprenant dit « Ella se lava las manos a su hijo » en voulant dire qu’elle lave les mains de son fils. Quelle phrase est meilleure ?',
                        'choices' => [
                            ['choice_text' => 'Ella se lava las manos a su hijo.', 'is_correct' => false],
                            ['choice_text' => 'Ella se lavan las manos a su hijo.', 'is_correct' => false],
                            ['choice_text' => 'Ella lava las manos a su hijo.', 'is_correct' => true],
                            ['choice_text' => 'Ella me lava las manos a su hijo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme elle lave les mains d’une autre personne, l’action n’est pas réfléchie. « Ella lava las manos a su hijo » est la structure voulue.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie « Nous nous amusons à la fête » dans une construction réfléchie simple ?',
                        'choices' => [
                            ['choice_text' => 'Nos divertimos a la fiesta.', 'is_correct' => false],
                            ['choice_text' => 'Nos divertimos en la fiesta.', 'is_correct' => true],
                            ['choice_text' => 'Se divertimos en la fiesta.', 'is_correct' => false],
                            ['choice_text' => 'Me divertimos en la fiesta.', 'is_correct' => false],
                        ],
                        'explanation' => '« Divertirse » s’emploie couramment de façon réfléchie pour s’amuser, et « nos divertimos » correspond à « nosotros ».',
                    ],
                    [
                        'question' => 'Quelle forme complète « Mis amigos ___ muy bien en las vacaciones. » ?',
                        'choices' => [
                            ['choice_text' => 'se divierten', 'is_correct' => true],
                            ['choice_text' => 'me divierto', 'is_correct' => false],
                            ['choice_text' => 'te diviertes', 'is_correct' => false],
                            ['choice_text' => 'nos divertimos', 'is_correct' => false],
                        ],
                        'explanation' => '« Mis amigos » est la troisième personne du pluriel, donc la forme réfléchie est « se divierten ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le verbe réfléchi « sentarse » ?',
                        'choices' => [
                            ['choice_text' => 'Nos sentamos aquí.', 'is_correct' => true],
                            ['choice_text' => 'Se sentamos aquí.', 'is_correct' => false],
                            ['choice_text' => 'Nos sentan aquí.', 'is_correct' => false],
                            ['choice_text' => 'Te sentamos aquí.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme réfléchie de la première personne du pluriel de « sentarse » est « nos sentamos ».',
                    ],
                    [
                        'question' => 'Un serveur dit : « Pueden ___ aquí. » Quelle option convient pour « s’asseoir ici » ?',
                        'choices' => [
                            ['choice_text' => 'se sentan', 'is_correct' => false],
                            ['choice_text' => 'sentarnos', 'is_correct' => false],
                            ['choice_text' => 'me sentar', 'is_correct' => false],
                            ['choice_text' => 'sentarse', 'is_correct' => true],
                        ],
                        'explanation' => 'Après « pueden », le sujet pluriel « ustedes » est sous-entendu, donc l’infinitif réfléchi « sentarse » est correct.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus naturelle pour une personne qui se prépare avant un entretien ?',
                        'choices' => [
                            ['choice_text' => 'Me prepara antes de la entrevista.', 'is_correct' => false],
                            ['choice_text' => 'Me preparo antes de la entrevista.', 'is_correct' => true],
                            ['choice_text' => 'Se preparo antes de la entrevista.', 'is_correct' => false],
                            ['choice_text' => 'Nos preparo antes de la entrevista.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le locuteur est « yo », donc le pronom réfléchi est « me ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le verbe réfléchi « quedarse » ?',
                        'choices' => [
                            ['choice_text' => 'Nos quedan en casa esta noche.', 'is_correct' => false],
                            ['choice_text' => 'Se quedamos en casa esta noche.', 'is_correct' => false],
                            ['choice_text' => 'Nos quedamos en casa esta noche.', 'is_correct' => true],
                            ['choice_text' => 'Te quedamos en casa esta noche.', 'is_correct' => false],
                        ],
                        'explanation' => '« Nos quedamos » est la forme correcte de la première personne du pluriel de « quedarse ».',
                    ],
                    [
                        'question' => 'Quelle phrase serait incorrecte si le locuteur voulait dire « Je lave mon chien » plutôt que lui-même ?',
                        'choices' => [
                            ['choice_text' => 'Me lavo al perro.', 'is_correct' => true],
                            ['choice_text' => 'Lavo al perro.', 'is_correct' => false],
                            ['choice_text' => 'Yo lavo al perro.', 'is_correct' => false],
                            ['choice_text' => 'Lavo a mi perro.', 'is_correct' => false],
                        ],
                        'explanation' => '« Me lavo » rend l’action réfléchie, donc elle signifie normalement que je me lave moi-même. Pour le chien, « lavo al perro » exprime plus clairement le sens voulu.',
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
