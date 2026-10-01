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
                'title' => 'Reflexive Verbs: The Basics',
                'description' => 'Learn what reflexive verbs are and use common everyday verbs such as levantarse, lavarse, vestirse, and acostarse.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'What does a reflexive verb usually show?',
                        'choices' => [
                            ['choice_text' => 'The subject does the action to themselves.', 'is_correct' => true],
                            ['choice_text' => 'The subject does the action to another person.', 'is_correct' => false],
                            ['choice_text' => 'The action only happens in the past.', 'is_correct' => false],
                            ['choice_text' => 'The verb always describes movement.', 'is_correct' => false],
                        ],
                        'explanation' => 'A reflexive verb is used when the subject and the receiver of the action are the same person.',
                    ],
                    [
                        'question' => 'Complete: “Yo ___ a las siete.”',
                        'choices' => [
                            ['choice_text' => 'me levanto', 'is_correct' => true],
                            ['choice_text' => 'te levantas', 'is_correct' => false],
                            ['choice_text' => 'se levanta', 'is_correct' => false],
                            ['choice_text' => 'me levantan', 'is_correct' => false],
                        ],
                        'explanation' => '“Levantarse” is reflexive, so the first-person pronoun “me” goes with “yo”: “me levanto.”',
                    ],
                    [
                        'question' => 'Which sentence correctly says “I wash myself”?',
                        'choices' => [
                            ['choice_text' => 'Me lavo.', 'is_correct' => true],
                            ['choice_text' => 'Te lavo.', 'is_correct' => false],
                            ['choice_text' => 'Se lavo.', 'is_correct' => false],
                            ['choice_text' => 'Me lavas.', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject is “yo,” so the reflexive pronoun is “me,” followed by the first-person form “lavo.”',
                    ],
                    [
                        'question' => 'Which word is the reflexive pronoun for tú?',
                        'choices' => [
                            ['choice_text' => 'te', 'is_correct' => true],
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'se', 'is_correct' => false],
                            ['choice_text' => 'nos', 'is_correct' => false],
                        ],
                        'explanation' => 'The reflexive pronoun for the second-person singular “tú” is “te.”',
                    ],
                    [
                        'question' => 'Ana ___ los dientes después del desayuno.',
                        'choices' => [
                            ['choice_text' => 'se cepilla', 'is_correct' => true],
                            ['choice_text' => 'me cepillo', 'is_correct' => false],
                            ['choice_text' => 'te cepillas', 'is_correct' => false],
                            ['choice_text' => 'nos cepillamos', 'is_correct' => false],
                        ],
                        'explanation' => 'Ana is third person singular, so the reflexive pronoun is “se”: “se cepilla.”',
                    ],
                    [
                        'question' => 'Which sentence uses a reflexive verb correctly?',
                        'choices' => [
                            ['choice_text' => 'Nos duchamos por la mañana.', 'is_correct' => true],
                            ['choice_text' => 'Nos ducha por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Se duchamos por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Te duchamos por la mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Nos duchamos” means “we shower,” with “nos” marking the reflexive action.',
                    ],
                    [
                        'question' => 'A learner says “Yo se levanto.” What is the correct form?',
                        'choices' => [
                            ['choice_text' => 'Yo me levanto.', 'is_correct' => true],
                            ['choice_text' => 'Yo te levanto.', 'is_correct' => false],
                            ['choice_text' => 'Yo nos levanto.', 'is_correct' => false],
                            ['choice_text' => 'Yo le levanto.', 'is_correct' => false],
                        ],
                        'explanation' => 'The reflexive pronoun must agree with the subject. For “yo,” use “me.”',
                    ],
                    [
                        'question' => 'Which sentence means “They get dressed at eight”?',
                        'choices' => [
                            ['choice_text' => 'Se visten a las ocho.', 'is_correct' => true],
                            ['choice_text' => 'Nos vestimos a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'Te vistes a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'Me visto a las ocho.', 'is_correct' => false],
                        ],
                        'explanation' => 'For “ellos/ellas,” the reflexive pronoun is “se,” and “vestirse” becomes “se visten.”',
                    ],
                    [
                        'question' => 'Which is the natural way to say “We go to bed early”?',
                        'choices' => [
                            ['choice_text' => 'Nos acostamos temprano.', 'is_correct' => true],
                            ['choice_text' => 'Se acostamos temprano.', 'is_correct' => false],
                            ['choice_text' => 'Nos acostan temprano.', 'is_correct' => false],
                            ['choice_text' => 'Te acostamos temprano.', 'is_correct' => false],
                        ],
                        'explanation' => '“Nos acostamos” is the first-person plural reflexive form of “acostarse.”',
                    ],
                    [
                        'question' => 'Which pair is correctly matched?',
                        'choices' => [
                            ['choice_text' => 'yo → me', 'is_correct' => true],
                            ['choice_text' => 'tú → nos', 'is_correct' => false],
                            ['choice_text' => 'nosotros → te', 'is_correct' => false],
                            ['choice_text' => 'ellos → me', 'is_correct' => false],
                        ],
                        'explanation' => 'The reflexive pronouns are me, te, se, nos, os, se. Therefore “yo → me” is correct.',
                    ],
                ],
            ],
            [
                'title' => 'Reflexive Pronouns and Agreement',
                'description' => 'Practice matching me, te, se, nos, and se with the correct subject and conjugated verb.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Complete: “Tú ___ duchas antes de salir.”',
                        'choices' => [
                            ['choice_text' => 'te', 'is_correct' => true],
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'se', 'is_correct' => false],
                            ['choice_text' => 'nos', 'is_correct' => false],
                        ],
                        'explanation' => 'The reflexive pronoun matching “tú” is “te.”',
                    ],
                    [
                        'question' => 'Complete: “Nosotros ___ lavamos las manos.”',
                        'choices' => [
                            ['choice_text' => 'nos', 'is_correct' => true],
                            ['choice_text' => 'se', 'is_correct' => false],
                            ['choice_text' => 'te', 'is_correct' => false],
                            ['choice_text' => 'me', 'is_correct' => false],
                        ],
                        'explanation' => 'The reflexive pronoun matching “nosotros” is “nos.”',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Ellos se afeitan por la mañana.', 'is_correct' => true],
                            ['choice_text' => 'Ellos me afeitan por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Ellos te afeita por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Ellos nos afeito por la mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ellos” takes the reflexive pronoun “se,” and the verb agrees in the third-person plural.',
                    ],
                    [
                        'question' => 'Which sentence correctly matches the subject and reflexive pronoun?',
                        'choices' => [
                            ['choice_text' => 'María se maquilla.', 'is_correct' => true],
                            ['choice_text' => 'María me maquilla.', 'is_correct' => false],
                            ['choice_text' => 'María te maquillan.', 'is_correct' => false],
                            ['choice_text' => 'María nos maquillo.', 'is_correct' => false],
                        ],
                        'explanation' => '“María” is third-person singular, so “se maquilla” is the correct reflexive construction.',
                    ],
                    [
                        'question' => 'Which sentence means “You all wake up early”?',
                        'choices' => [
                            ['choice_text' => 'Ustedes se despiertan temprano.', 'is_correct' => true],
                            ['choice_text' => 'Ustedes te despiertas temprano.', 'is_correct' => false],
                            ['choice_text' => 'Ustedes nos despertamos temprano.', 'is_correct' => false],
                            ['choice_text' => 'Ustedes me despiertan temprano.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ustedes” takes “se,” and “despiertan” agrees with the plural subject.',
                    ],
                    [
                        'question' => 'A student writes “Nos se acostamos tarde.” What should be removed?',
                        'choices' => [
                            ['choice_text' => 'se', 'is_correct' => true],
                            ['choice_text' => 'nos', 'is_correct' => false],
                            ['choice_text' => 'acostamos', 'is_correct' => false],
                            ['choice_text' => 'tarde', 'is_correct' => false],
                        ],
                        'explanation' => '“Nosotros” already has the reflexive pronoun “nos,” so the extra “se” should be removed.',
                    ],
                    [
                        'question' => 'Which sentence uses the correct reflexive pronoun for a female friend?',
                        'choices' => [
                            ['choice_text' => 'Mi amiga se prepara rápido.', 'is_correct' => true],
                            ['choice_text' => 'Mi amiga me prepara rápido.', 'is_correct' => false],
                            ['choice_text' => 'Mi amiga te preparo rápido.', 'is_correct' => false],
                            ['choice_text' => 'Mi amiga nos preparan rápido.', 'is_correct' => false],
                        ],
                        'explanation' => '“Mi amiga” is third-person singular, so “se” is the correct reflexive pronoun.',
                    ],
                    [
                        'question' => 'Which combination is correct for “yo / vestirse”?',
                        'choices' => [
                            ['choice_text' => 'me visto', 'is_correct' => true],
                            ['choice_text' => 'te vistes', 'is_correct' => false],
                            ['choice_text' => 'se viste', 'is_correct' => false],
                            ['choice_text' => 'nos vestimos', 'is_correct' => false],
                        ],
                        'explanation' => 'For “yo,” “vestirse” becomes “me visto.” The verb also changes from “vestir” to the irregular/stem-changing form “visto.”',
                    ],
                    [
                        'question' => 'Which combination is correct for “nosotros / divertirse”?',
                        'choices' => [
                            ['choice_text' => 'nos divertimos', 'is_correct' => true],
                            ['choice_text' => 'me divierto', 'is_correct' => false],
                            ['choice_text' => 'se divierte', 'is_correct' => false],
                            ['choice_text' => 'te divertís', 'is_correct' => false],
                        ],
                        'explanation' => 'The first-person plural reflexive form is “nos divertimos.”',
                    ],
                    [
                        'question' => 'Which sentence has a correct reflexive pronoun and verb ending?',
                        'choices' => [
                            ['choice_text' => 'Yo me despierto temprano.', 'is_correct' => true],
                            ['choice_text' => 'Yo se despiertas temprano.', 'is_correct' => false],
                            ['choice_text' => 'Yo te despierta temprano.', 'is_correct' => false],
                            ['choice_text' => 'Yo nos despiertan temprano.', 'is_correct' => false],
                        ],
                        'explanation' => '“Yo” requires “me,” and the verb must be first-person singular: “despierto.”',
                    ],
                    [
                        'question' => 'Which sentence correctly uses “se” with a plural subject?',
                        'choices' => [
                            ['choice_text' => 'Mis padres se levantan temprano.', 'is_correct' => true],
                            ['choice_text' => 'Mis padres se levanta temprano.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres nos levantamos temprano.', 'is_correct' => false],
                            ['choice_text' => 'Mis padres te levantan temprano.', 'is_correct' => false],
                        ],
                        'explanation' => 'A third-person plural subject uses “se,” and the verb “levantan” agrees with “mis padres.”',
                    ],
                    [
                        'question' => 'Which is the best habit for avoiding pronoun mistakes?',
                        'choices' => [
                            ['choice_text' => 'Match the reflexive pronoun to the subject before choosing the verb form.', 'is_correct' => true],
                            ['choice_text' => 'Always use “se” with reflexive verbs.', 'is_correct' => false],
                            ['choice_text' => 'Put “me” with every subject.', 'is_correct' => false],
                            ['choice_text' => 'Choose the pronoun by the noun\'s ending only.', 'is_correct' => false],
                        ],
                        'explanation' => 'The pronoun changes with the subject, so checking the subject first prevents many beginner mistakes.',
                    ],
                ],
            ],
            [
                'title' => 'Daily Routines with Reflexive Verbs',
                'description' => 'Use reflexive verbs in realistic morning, daytime, and evening routines.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which sentence is most natural for a morning routine?',
                        'choices' => [
                            ['choice_text' => 'Me levanto a las siete.', 'is_correct' => true],
                            ['choice_text' => 'Me acuesto a las siete de la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Se desayuno a las siete.', 'is_correct' => false],
                            ['choice_text' => 'Nos duchas a las siete.', 'is_correct' => false],
                        ],
                        'explanation' => '“Levantarse” is commonly used for getting up, so “me levanto” fits a morning routine.',
                    ],
                    [
                        'question' => 'Lucía usually ___ antes de desayunar.',
                        'choices' => [
                            ['choice_text' => 'se ducha', 'is_correct' => true],
                            ['choice_text' => 'me ducho', 'is_correct' => false],
                            ['choice_text' => 'te duchas', 'is_correct' => false],
                            ['choice_text' => 'nos duchamos', 'is_correct' => false],
                        ],
                        'explanation' => 'Lucía is third-person singular, so “se ducha” is correct.',
                    ],
                    [
                        'question' => 'Which sentence means “I brush my teeth after breakfast”?',
                        'choices' => [
                            ['choice_text' => 'Me cepillo los dientes después del desayuno.', 'is_correct' => true],
                            ['choice_text' => 'Te cepillas los dientes después del desayuno.', 'is_correct' => false],
                            ['choice_text' => 'Se cepillo los dientes después del desayuno.', 'is_correct' => false],
                            ['choice_text' => 'Me cepillan los dientes después del desayuno.', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject is “yo,” so the reflexive pronoun is “me” and the verb is “cepillo.”',
                    ],
                    [
                        'question' => 'A father tells his children: “Ustedes ___ muy tarde.” Which verb fits a bedtime routine?',
                        'choices' => [
                            ['choice_text' => 'se acuestan', 'is_correct' => true],
                            ['choice_text' => 'me acuesto', 'is_correct' => false],
                            ['choice_text' => 'te acuestas', 'is_correct' => false],
                            ['choice_text' => 'nos acostamos', 'is_correct' => false],
                        ],
                        'explanation' => '“Ustedes” takes “se,” and “acuestan” is the present-tense plural form of “acostarse.”',
                    ],
                    [
                        'question' => 'Which action usually comes before getting dressed?',
                        'choices' => [
                            ['choice_text' => 'despertarse', 'is_correct' => true],
                            ['choice_text' => 'acostarse', 'is_correct' => false],
                            ['choice_text' => 'cenar', 'is_correct' => false],
                            ['choice_text' => 'dormirse', 'is_correct' => false],
                        ],
                        'explanation' => 'In a typical morning routine, people wake up before they get dressed.',
                    ],
                    [
                        'question' => 'Which sentence gives a logical sequence?',
                        'choices' => [
                            ['choice_text' => 'Me despierto, me ducho y me visto.', 'is_correct' => true],
                            ['choice_text' => 'Me visto, me despierto y me acuesto.', 'is_correct' => false],
                            ['choice_text' => 'Me acuesto, me despierto y me duermo.', 'is_correct' => false],
                            ['choice_text' => 'Me duermo, me levanto y me despierto.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sequence follows a natural morning routine: wake up, shower, then get dressed.',
                    ],
                    [
                        'question' => 'Which phrase completes the sentence naturally? “Después del trabajo, yo ___ un poco.”',
                        'choices' => [
                            ['choice_text' => 'me relajo', 'is_correct' => true],
                            ['choice_text' => 'te relajas', 'is_correct' => false],
                            ['choice_text' => 'se relaja', 'is_correct' => false],
                            ['choice_text' => 'nos relajamos', 'is_correct' => false],
                        ],
                        'explanation' => 'With “yo,” the reflexive pronoun is “me,” giving “me relajo.”',
                    ],
                    [
                        'question' => 'Which sentence correctly describes a couple going to bed?',
                        'choices' => [
                            ['choice_text' => 'Ellos se acuestan a las once.', 'is_correct' => true],
                            ['choice_text' => 'Ellos me acuesto a las once.', 'is_correct' => false],
                            ['choice_text' => 'Ellos te acuestas a las once.', 'is_correct' => false],
                            ['choice_text' => 'Ellos nos acostamos a las once.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ellos” takes “se” and the third-person plural verb “acuestan.”',
                    ],
                    [
                        'question' => 'A student says, “Yo me lavo la cara y después ___.” What is a natural next step?',
                        'choices' => [
                            ['choice_text' => 'me visto', 'is_correct' => true],
                            ['choice_text' => 'te vistes', 'is_correct' => false],
                            ['choice_text' => 'se viste', 'is_correct' => false],
                            ['choice_text' => 'nos vestimos', 'is_correct' => false],
                        ],
                        'explanation' => 'The same subject continues the routine, so “yo me visto” is a natural next step.',
                    ],
                    [
                        'question' => 'Which sentence is most natural for an evening routine?',
                        'choices' => [
                            ['choice_text' => 'Nos ponemos el pijama y nos acostamos.', 'is_correct' => true],
                            ['choice_text' => 'Nos levantamos y nos despertamos.', 'is_correct' => false],
                            ['choice_text' => 'Nos duchamos y nos levantamos antes de dormir.', 'is_correct' => false],
                            ['choice_text' => 'Nos acostamos y nos despertamos para ir a dormir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Putting on pajamas and going to bed form a logical evening sequence.',
                    ],
                    [
                        'question' => 'Which sentence describes a routine habit?',
                        'choices' => [
                            ['choice_text' => 'Cada mañana me preparo para el trabajo.', 'is_correct' => true],
                            ['choice_text' => 'Ayer me preparé para el trabajo.', 'is_correct' => false],
                            ['choice_text' => 'Mañana me prepararé para el trabajo.', 'is_correct' => false],
                            ['choice_text' => 'Estoy preparando el trabajo ahora.', 'is_correct' => false],
                        ],
                        'explanation' => '“Cada mañana” signals a repeated routine, and the reflexive present form “me preparo” fits.',
                    ],
                    [
                        'question' => 'Which verb is especially common for the first action after waking up?',
                        'choices' => [
                            ['choice_text' => 'levantarse', 'is_correct' => true],
                            ['choice_text' => 'acostarse', 'is_correct' => false],
                            ['choice_text' => 'dormirse', 'is_correct' => false],
                            ['choice_text' => 'jubilarse', 'is_correct' => false],
                        ],
                        'explanation' => 'People commonly “se levantan” after waking up.',
                    ],
                    [
                        'question' => 'Which sentence sounds natural in a simple daily routine paragraph?',
                        'choices' => [
                            ['choice_text' => 'Mi hermano se despierta a las seis, se ducha y se viste.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermano me despierta a las seis, se duchan y se visto.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano se despiertan a las seis, te ducha y se visten.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano nos despierto a las seis, se ducho y te viste.', 'is_correct' => false],
                        ],
                        'explanation' => 'The same third-person singular subject uses “se” with each reflexive verb, and each verb agrees with “mi hermano.”',
                    ],
                    [
                        'question' => 'Which option correctly completes “Antes de salir, mis hermanas ___ el pelo.”?',
                        'choices' => [
                            ['choice_text' => 'se peinan', 'is_correct' => true],
                            ['choice_text' => 'me peino', 'is_correct' => false],
                            ['choice_text' => 'te peinas', 'is_correct' => false],
                            ['choice_text' => 'nos peinamos', 'is_correct' => false],
                        ],
                        'explanation' => '“Mis hermanas” is third-person plural, so the reflexive form is “se peinan.”',
                    ],
                    [
                        'question' => 'Which sentence gives a believable weekend routine?',
                        'choices' => [
                            ['choice_text' => 'Los sábados me levanto más tarde.', 'is_correct' => true],
                            ['choice_text' => 'Los sábados me acuesto por la mañana antes de despertarme.', 'is_correct' => false],
                            ['choice_text' => 'Los sábados se levanto más tarde.', 'is_correct' => false],
                            ['choice_text' => 'Los sábados me levantan más tarde yo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject “yo” correctly takes “me levanto,” and the sentence describes a reasonable repeated routine.',
                    ],
                ],
            ],
            [
                'title' => 'Reflexive Verbs with Body and Clothing',
                'description' => 'Practice common expressions involving the body, clothing, and personal care without losing track of the reflexive pronoun.',
                'settings' => ['duration' => 25, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which sentence means “I wash my face every morning”?',
                        'choices' => [
                            ['choice_text' => 'Me lavo la cara cada mañana.', 'is_correct' => true],
                            ['choice_text' => 'Me lava la cara cada mañana.', 'is_correct' => false],
                            ['choice_text' => 'Se lavo la cara cada mañana.', 'is_correct' => false],
                            ['choice_text' => 'Te lavo la cara cada mañana.', 'is_correct' => false],
                        ],
                        'explanation' => '“Me lavo la cara” is the standard reflexive structure for washing your own face.',
                    ],
                    [
                        'question' => 'Complete: “Antes de salir, Ana ___ el pelo.”',
                        'choices' => [
                            ['choice_text' => 'se peina', 'is_correct' => true],
                            ['choice_text' => 'me peino', 'is_correct' => false],
                            ['choice_text' => 'te peinas', 'is_correct' => false],
                            ['choice_text' => 'nos peinamos', 'is_correct' => false],
                        ],
                        'explanation' => 'Ana is third-person singular, so “se peina” is correct.',
                    ],
                    [
                        'question' => 'Which sentence is correct for a person putting on a jacket?',
                        'choices' => [
                            ['choice_text' => 'Se pone la chaqueta.', 'is_correct' => true],
                            ['choice_text' => 'Me pones la chaqueta.', 'is_correct' => false],
                            ['choice_text' => 'Te pongo la chaqueta.', 'is_correct' => false],
                            ['choice_text' => 'Nos ponen la chaqueta.', 'is_correct' => false],
                        ],
                        'explanation' => 'For a person putting on their own jacket, “ponerse” is used reflexively: “se pone la chaqueta.”',
                    ],
                    [
                        'question' => 'Which form completes “Yo ___ los zapatos antes de salir.”?',
                        'choices' => [
                            ['choice_text' => 'me pongo', 'is_correct' => true],
                            ['choice_text' => 'te pones', 'is_correct' => false],
                            ['choice_text' => 'se pone', 'is_correct' => false],
                            ['choice_text' => 'nos ponemos', 'is_correct' => false],
                        ],
                        'explanation' => 'For “yo,” the reflexive form is “me pongo,” from “ponerse.”',
                    ],
                    [
                        'question' => 'Which phrase is natural for getting dressed?',
                        'choices' => [
                            ['choice_text' => 'Me visto.', 'is_correct' => true],
                            ['choice_text' => 'Me visto a alguien.', 'is_correct' => false],
                            ['choice_text' => 'Se visto.', 'is_correct' => false],
                            ['choice_text' => 'Nos vistes.', 'is_correct' => false],
                        ],
                        'explanation' => '“Me visto” means “I get dressed,” using the reflexive form of “vestir.”',
                    ],
                    [
                        'question' => 'Which sentence correctly uses a body-part expression?',
                        'choices' => [
                            ['choice_text' => 'Nos lavamos las manos antes de comer.', 'is_correct' => true],
                            ['choice_text' => 'Nos lavamos los manos antes de comer.', 'is_correct' => false],
                            ['choice_text' => 'Nos lava las manos antes de comer.', 'is_correct' => false],
                            ['choice_text' => 'Nos lavamos la manos antes de comer.', 'is_correct' => false],
                        ],
                        'explanation' => 'The reflexive pronoun “nos” matches the subject, and “manos” is plural, so “las manos” is correct.',
                    ],
                    [
                        'question' => 'A learner says “Me pongo mi camisa” when simply describing getting dressed. Which alternative is especially natural in many contexts?',
                        'choices' => [
                            ['choice_text' => 'Me pongo la camisa.', 'is_correct' => true],
                            ['choice_text' => 'Me pones la camisa.', 'is_correct' => false],
                            ['choice_text' => 'Se pongo la camisa.', 'is_correct' => false],
                            ['choice_text' => 'Me pone las camisa.', 'is_correct' => false],
                        ],
                        'explanation' => 'For clothing worn as part of a routine, “me pongo la camisa” is a natural use of “ponerse.”',
                    ],
                    [
                        'question' => 'Which sentence correctly describes two siblings getting ready?',
                        'choices' => [
                            ['choice_text' => 'Los hermanos se visten rápidamente.', 'is_correct' => true],
                            ['choice_text' => 'Los hermanos se viste rápidamente.', 'is_correct' => false],
                            ['choice_text' => 'Los hermanos nos vestimos rápidamente.', 'is_correct' => false],
                            ['choice_text' => 'Los hermanos me visto rápidamente.', 'is_correct' => false],
                        ],
                        'explanation' => '“Los hermanos” is third-person plural, so the reflexive pronoun is “se” and the verb is “visten.”',
                    ],
                    [
                        'question' => 'Which phrase means “She washes her hands”?',
                        'choices' => [
                            ['choice_text' => 'Se lava las manos.', 'is_correct' => true],
                            ['choice_text' => 'Me lava las manos.', 'is_correct' => false],
                            ['choice_text' => 'Te lavas las manos.', 'is_correct' => false],
                            ['choice_text' => 'Nos lavamos las manos.', 'is_correct' => false],
                        ],
                        'explanation' => '“Se lava las manos” is the third-person singular reflexive construction.',
                    ],
                    [
                        'question' => 'Which sentence uses the correct form of “afeitarse” for a man speaking about himself?',
                        'choices' => [
                            ['choice_text' => 'Me afeito por la mañana.', 'is_correct' => true],
                            ['choice_text' => 'Se afeito por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Te afeito por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Nos afeita por la mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'For “yo,” the correct reflexive pronoun is “me,” giving “me afeito.”',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Ella se maquilla antes de trabajar.', 'is_correct' => true],
                            ['choice_text' => 'Ella me maquilla antes de trabajar.', 'is_correct' => false],
                            ['choice_text' => 'Ella se maquillo antes de trabajar.', 'is_correct' => false],
                            ['choice_text' => 'Ella te maquillas antes de trabajar.', 'is_correct' => false],
                        ],
                        'explanation' => '“Ella se maquilla” correctly uses the third-person singular reflexive pronoun and present-tense verb.',
                    ],
                ],
            ],
            [
                'title' => 'Reflexive Verb Placement',
                'description' => 'Learn where reflexive pronouns go with conjugated verbs and with basic infinitive constructions.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'In “Me quiero levantar temprano,” where is the reflexive pronoun placed?',
                        'choices' => [
                            ['choice_text' => 'Before the conjugated verb.', 'is_correct' => true],
                            ['choice_text' => 'After the infinitive only.', 'is_correct' => false],
                            ['choice_text' => 'At the end of every sentence.', 'is_correct' => false],
                            ['choice_text' => 'Before the subject.', 'is_correct' => false],
                        ],
                        'explanation' => 'With a conjugated verb plus an infinitive, the reflexive pronoun can appear before the conjugated verb: “me quiero levantar.”',
                    ],
                    [
                        'question' => 'Which sentence is also correct?',
                        'choices' => [
                            ['choice_text' => 'Quiero levantarme temprano.', 'is_correct' => true],
                            ['choice_text' => 'Quiero me levantar temprano.', 'is_correct' => false],
                            ['choice_text' => 'Quiero levantarse temprano yo.', 'is_correct' => false],
                            ['choice_text' => 'Quiero me levanto temprano.', 'is_correct' => false],
                        ],
                        'explanation' => 'When an infinitive follows a conjugated verb, the reflexive pronoun can attach to the end of the infinitive: “levantarme.”',
                    ],
                    [
                        'question' => 'Which pair is correct?',
                        'choices' => [
                            ['choice_text' => 'Me voy a acostar. / Voy a acostarme.', 'is_correct' => true],
                            ['choice_text' => 'Me voy acostarse. / Voy me a acostar.', 'is_correct' => false],
                            ['choice_text' => 'Me voy acostar me. / Voy a me acostar.', 'is_correct' => false],
                            ['choice_text' => 'Me voy se acostar. / Voy se a acostar.', 'is_correct' => false],
                        ],
                        'explanation' => 'With “ir a + infinitive,” the reflexive pronoun can go before the conjugated verb or attach to the infinitive.',
                    ],
                    [
                        'question' => 'Complete: “Tengo que ___ temprano.” (levantarse, yo)',
                        'choices' => [
                            ['choice_text' => 'levantarme', 'is_correct' => true],
                            ['choice_text' => 'me levantar', 'is_correct' => false],
                            ['choice_text' => 'se levantar', 'is_correct' => false],
                            ['choice_text' => 'levanto', 'is_correct' => false],
                        ],
                        'explanation' => 'When “levantarse” follows “tengo que,” attaching the first-person reflexive pronoun to the infinitive gives “tengo que levantarme.”',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Necesito ducharme antes de salir.', 'is_correct' => true],
                            ['choice_text' => 'Necesito me duchar antes de salir.', 'is_correct' => false],
                            ['choice_text' => 'Necesito ducharse antes de salir yo.', 'is_correct' => false],
                            ['choice_text' => 'Necesito me ducho antes de salir.', 'is_correct' => false],
                        ],
                        'explanation' => 'After a conjugated verb such as “necesito,” the reflexive pronoun can attach to the infinitive “ducharme.”',
                    ],
                    [
                        'question' => 'A learner writes “Voy a se vestir.” What is the correction?',
                        'choices' => [
                            ['choice_text' => 'Voy a vestirme.', 'is_correct' => true],
                            ['choice_text' => 'Voy me a vestir.', 'is_correct' => false],
                            ['choice_text' => 'Voy a me visto.', 'is_correct' => false],
                            ['choice_text' => 'Voy se vestir.', 'is_correct' => false],
                        ],
                        'explanation' => 'The reflexive pronoun attaches to the infinitive: “vestirme.”',
                    ],
                    [
                        'question' => 'Which sentence means “We are going to get up early”?',
                        'choices' => [
                            ['choice_text' => 'Vamos a levantarnos temprano.', 'is_correct' => true],
                            ['choice_text' => 'Vamos nos levantar temprano.', 'is_correct' => false],
                            ['choice_text' => 'Nos vamos levantarse temprano.', 'is_correct' => false],
                            ['choice_text' => 'Vamos a nos levantamos temprano.', 'is_correct' => false],
                        ],
                        'explanation' => 'With “vamos a + infinitive,” the pronoun attaches naturally to the infinitive: “levantarnos.”',
                    ],
                    [
                        'question' => 'Which sentence is correct with a present-tense conjugated verb?',
                        'choices' => [
                            ['choice_text' => 'Ella se quiere preparar ahora.', 'is_correct' => true],
                            ['choice_text' => 'Ella quiere se preparar ahora.', 'is_correct' => false],
                            ['choice_text' => 'Ella se quiere prepara ahora.', 'is_correct' => false],
                            ['choice_text' => 'Ella quiere se prepara ahora.', 'is_correct' => false],
                        ],
                        'explanation' => 'The reflexive pronoun can come before the conjugated verb in “se quiere preparar.”',
                    ],
                    [
                        'question' => 'Which sentence is correct with “poder + infinitive”?',
                        'choices' => [
                            ['choice_text' => 'No puedo acostarme tan temprano.', 'is_correct' => true],
                            ['choice_text' => 'No puedo me acostar tan temprano.', 'is_correct' => false],
                            ['choice_text' => 'No me puedo acostar me tan temprano.', 'is_correct' => false],
                            ['choice_text' => 'No puedo se acostar tan temprano.', 'is_correct' => false],
                        ],
                        'explanation' => 'The pronoun attaches to the infinitive “acostarme,” which is a standard construction.',
                    ],
                    [
                        'question' => 'Which sentence contains a correctly placed reflexive pronoun?',
                        'choices' => [
                            ['choice_text' => 'Después de bañarme, me visto.', 'is_correct' => true],
                            ['choice_text' => 'Después de me bañar, visto me.', 'is_correct' => false],
                            ['choice_text' => 'Después de bañarme, visto se.', 'is_correct' => false],
                            ['choice_text' => 'Después de bañar me, me visto.', 'is_correct' => false],
                        ],
                        'explanation' => 'The infinitive “bañarme” correctly includes the pronoun, and “me visto” correctly marks the next reflexive action.',
                    ],
                    [
                        'question' => 'Which is the best beginner rule for a reflexive verb after another conjugated verb?',
                        'choices' => [
                            ['choice_text' => 'The pronoun may go before the conjugated verb or attach to the infinitive.', 'is_correct' => true],
                            ['choice_text' => 'The pronoun must always go after the infinitive.', 'is_correct' => false],
                            ['choice_text' => 'The pronoun must always go before the subject.', 'is_correct' => false],
                            ['choice_text' => 'The pronoun is omitted.', 'is_correct' => false],
                        ],
                        'explanation' => 'Both placements are common with a conjugated verb plus infinitive: “me quiero levantar” and “quiero levantarme.”',
                    ],
                    [
                        'question' => 'Which pair has the same meaning?',
                        'choices' => [
                            ['choice_text' => 'Me voy a lavar. / Voy a lavarme.', 'is_correct' => true],
                            ['choice_text' => 'Me lavo. / Voy a lavar.', 'is_correct' => false],
                            ['choice_text' => 'Se va a vestir. / Va a vestir.', 'is_correct' => false],
                            ['choice_text' => 'Nos vamos a dormir. / Vamos dormir.', 'is_correct' => false],
                        ],
                        'explanation' => 'Both sentences mean “I am going to wash myself,” using two accepted positions for the reflexive pronoun.',
                    ],
                    [
                        'question' => 'Complete naturally: “Antes de trabajar, necesito ___.”',
                        'choices' => [
                            ['choice_text' => 'prepararme', 'is_correct' => true],
                            ['choice_text' => 'me preparo', 'is_correct' => false],
                            ['choice_text' => 'se preparar', 'is_correct' => false],
                            ['choice_text' => 'prepararse', 'is_correct' => false],
                        ],
                        'explanation' => 'The subject is “yo,” so “necesito prepararme” is the correct first-person reflexive infinitive.',
                    ],
                    [
                        'question' => 'Which sentence is correctly formed?',
                        'choices' => [
                            ['choice_text' => 'Mis hijos quieren bañarse antes de cenar.', 'is_correct' => true],
                            ['choice_text' => 'Mis hijos quieren se bañar antes de cenar.', 'is_correct' => false],
                            ['choice_text' => 'Mis hijos se quieren bañarse antes de cenar.', 'is_correct' => false],
                            ['choice_text' => 'Mis hijos quieren bañan antes de cenar.', 'is_correct' => false],
                        ],
                        'explanation' => 'The reflexive pronoun correctly attaches to the infinitive “bañarse” after “quieren.”',
                    ],
                ],
            ],
            [
                'title' => 'Reflexive Verbs in Real Situations',
                'description' => 'Use reflexive verbs in short practical situations, compare reflexive and non-reflexive meanings, and fix common beginner errors.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Juan wakes his little brother. Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'Juan despierta a su hermano.', 'is_correct' => true],
                            ['choice_text' => 'Juan se despierta a su hermano.', 'is_correct' => false],
                            ['choice_text' => 'Juan despiertan a su hermano.', 'is_correct' => false],
                            ['choice_text' => 'Juan me despierta a su hermano.', 'is_correct' => false],
                        ],
                        'explanation' => 'Here Juan is acting on another person, so the verb is not reflexive: “despierta a su hermano.”',
                    ],
                    [
                        'question' => 'Juan wakes himself up. Which sentence changes the meaning?',
                        'choices' => [
                            ['choice_text' => 'Juan se despierta.', 'is_correct' => true],
                            ['choice_text' => 'Juan despierta a su hermano.', 'is_correct' => false],
                            ['choice_text' => 'Juan despierta a sus amigos.', 'is_correct' => false],
                            ['choice_text' => 'Juan despierta al niño.', 'is_correct' => false],
                        ],
                        'explanation' => 'The reflexive “se despierta” means Juan wakes himself up, while the non-reflexive versions act on someone else.',
                    ],
                    [
                        'question' => 'Which contrast is correct?',
                        'choices' => [
                            ['choice_text' => 'Me lavo. / Lavo el coche.', 'is_correct' => true],
                            ['choice_text' => 'Me lavo. / Me lavo el coche siempre.', 'is_correct' => false],
                            ['choice_text' => 'Se lavo. / Lava él mismo.', 'is_correct' => false],
                            ['choice_text' => 'Me lava. / Me lavo a Juan.', 'is_correct' => false],
                        ],
                        'explanation' => '“Me lavo” means I wash myself; “lavo el coche” means I wash the car, so the second action is not reflexive.',
                    ],
                    [
                        'question' => 'A mother says, “Mi hijo ___ muy temprano, pero yo ___ a las ocho.” Which forms fit?',
                        'choices' => [
                            ['choice_text' => 'se levanta / me levanto', 'is_correct' => true],
                            ['choice_text' => 'me levanta / se levanto', 'is_correct' => false],
                            ['choice_text' => 'se levanto / me levanta', 'is_correct' => false],
                            ['choice_text' => 'te levantas / nos levantamos', 'is_correct' => false],
                        ],
                        'explanation' => 'The first subject is “mi hijo” (él → se levanta), while the second is “yo” (me levanto).',
                    ],
                    [
                        'question' => 'Which sentence correctly describes two people preparing themselves for a meeting?',
                        'choices' => [
                            ['choice_text' => 'Nos preparamos para la reunión.', 'is_correct' => true],
                            ['choice_text' => 'Nos prepara para la reunión.', 'is_correct' => false],
                            ['choice_text' => 'Se preparo para la reunión.', 'is_correct' => false],
                            ['choice_text' => 'Te preparamos para la reunión.', 'is_correct' => false],
                        ],
                        'explanation' => '“Nos preparamos” means we prepare ourselves and matches the subject “nosotros.”',
                    ],
                    [
                        'question' => 'A learner says “Ella se lava las manos a su hijo” but means that she washes her son\'s hands. What is the better sentence?',
                        'choices' => [
                            ['choice_text' => 'Ella lava las manos a su hijo.', 'is_correct' => true],
                            ['choice_text' => 'Ella se lava las manos a su hijo.', 'is_correct' => false],
                            ['choice_text' => 'Ella se lavan las manos a su hijo.', 'is_correct' => false],
                            ['choice_text' => 'Ella me lava las manos a su hijo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Because she is washing someone else\'s hands, the action is not reflexive. “Ella lava las manos a su hijo” is the intended structure.',
                    ],
                    [
                        'question' => 'Which sentence means “We enjoy ourselves at the party” in a simple reflexive construction?',
                        'choices' => [
                            ['choice_text' => 'Nos divertimos en la fiesta.', 'is_correct' => true],
                            ['choice_text' => 'Nos divertimos a la fiesta.', 'is_correct' => false],
                            ['choice_text' => 'Se divertimos en la fiesta.', 'is_correct' => false],
                            ['choice_text' => 'Me divertimos en la fiesta.', 'is_correct' => false],
                        ],
                        'explanation' => '“Divertirse” is commonly used reflexively for enjoying oneself, and “nos divertimos” matches “nosotros.”',
                    ],
                    [
                        'question' => 'Which form completes “Mis amigos ___ muy bien en las vacaciones.”?',
                        'choices' => [
                            ['choice_text' => 'se divierten', 'is_correct' => true],
                            ['choice_text' => 'me divierto', 'is_correct' => false],
                            ['choice_text' => 'te diviertes', 'is_correct' => false],
                            ['choice_text' => 'nos divertimos', 'is_correct' => false],
                        ],
                        'explanation' => '“Mis amigos” is third-person plural, so the reflexive form is “se divierten.”',
                    ],
                    [
                        'question' => 'Which sentence correctly uses the reflexive verb “sentarse”?',
                        'choices' => [
                            ['choice_text' => 'Nos sentamos aquí.', 'is_correct' => true],
                            ['choice_text' => 'Se sentamos aquí.', 'is_correct' => false],
                            ['choice_text' => 'Nos sentan aquí.', 'is_correct' => false],
                            ['choice_text' => 'Te sentamos aquí.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first-person plural reflexive form of “sentarse” is “nos sentamos.”',
                    ],
                    [
                        'question' => 'A waiter says, “Pueden ___ aquí.” Which option is correct for “sit down yourselves / sit here”?',
                        'choices' => [
                            ['choice_text' => 'sentarse', 'is_correct' => true],
                            ['choice_text' => 'se sentan', 'is_correct' => false],
                            ['choice_text' => 'sentarnos', 'is_correct' => false],
                            ['choice_text' => 'me sentar', 'is_correct' => false],
                        ],
                        'explanation' => 'After “pueden,” the plural subject “ustedes” is understood, so the reflexive infinitive “sentarse” is correct.',
                    ],
                    [
                        'question' => 'Which sentence is more natural for a person getting ready before an interview?',
                        'choices' => [
                            ['choice_text' => 'Me preparo antes de la entrevista.', 'is_correct' => true],
                            ['choice_text' => 'Me prepara antes de la entrevista.', 'is_correct' => false],
                            ['choice_text' => 'Se preparo antes de la entrevista.', 'is_correct' => false],
                            ['choice_text' => 'Nos preparo antes de la entrevista.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker is “yo,” so the reflexive pronoun is “me.”',
                    ],
                    [
                        'question' => 'Which sentence correctly uses the reflexive verb “quedarse”?',
                        'choices' => [
                            ['choice_text' => 'Nos quedamos en casa esta noche.', 'is_correct' => true],
                            ['choice_text' => 'Nos quedan en casa esta noche.', 'is_correct' => false],
                            ['choice_text' => 'Se quedamos en casa esta noche.', 'is_correct' => false],
                            ['choice_text' => 'Te quedamos en casa esta noche.', 'is_correct' => false],
                        ],
                        'explanation' => '“Nos quedamos” is the correct first-person plural form of “quedarse.”',
                    ],
                    [
                        'question' => 'Which sentence would be wrong if the speaker meant “I wash my dog” rather than myself?',
                        'choices' => [
                            ['choice_text' => 'Me lavo al perro.', 'is_correct' => true],
                            ['choice_text' => 'Lavo al perro.', 'is_correct' => false],
                            ['choice_text' => 'Yo lavo al perro.', 'is_correct' => false],
                            ['choice_text' => 'Lavo a mi perro.', 'is_correct' => false],
                        ],
                        'explanation' => '“Me lavo” makes the action reflexive, so it normally means I wash myself. For the dog, “lavo al perro” is the clearer intended meaning.',
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
