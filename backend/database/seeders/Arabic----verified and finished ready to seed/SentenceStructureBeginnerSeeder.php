<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SentenceStructureBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('major_id', Major::where('slug', 'arabic')->firstOrFail()->id)->where('name', 'Sentence Structure')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Construire des phrases simples",
                'description' => "Remettre les mots dans un ordre naturel et reconnaître les éléments de base d'une phrase arabe simple.",
                'questions' => [
                    ['q' => "Quelle phrase est correctement construite ?", 'c' => ["ذهب إلى خالد المدرسة.", "ذهب خالد إلى المدرسة.", "المدرسة إلى ذهب خالد.", "خالد المدرسة ذهب إلى."], 'a' => 1, 'e' => "Verbe, sujet, puis destination : l'ordre est naturel. Les autres propositions mélangent les mots et la préposition."],
                    ['q' => "Quelle phrase indique où se trouve le stylo ?", 'c' => ["كتب أحمد بالقلم.", "القلم على المكتب.", "أحمد يشتري قلمًا.", "القلم جديد."], 'a' => 1, 'e' => "« على المكتب » donne le lieu précis où se trouve le stylo."],
                    ['q' => "Dans « مريم تفتح الباب. », qui accomplit l'action ?", 'c' => ["الباب", "مريم", "تفتح", "personne"], 'a' => 1, 'e' => "C'est Mariam qui ouvre : elle est le sujet de l'action."],
                    ['q' => "Quelle phrase commence par un nom et le décrit ?", 'c' => ["يركض الطفل.", "السماء صافية.", "اذهب إلى البيت.", "يكتب خالد."], 'a' => 1, 'e' => "« السماء » est le nom, « صافية » dit comment il est. Les autres phrases commencent par un verbe."],
                    ['q' => "Complète : « الطلاب ___ في الفصل. »", 'c' => ["تجلس", "يجلسون", "أجلس", "يجلس"], 'a' => 1, 'e' => "Le sujet « الطلاب » est un pluriel masculin : le verbe prend la forme « يجلسون »."],
                    ['q' => "Remets en ordre : « في الحديقة / الأطفال / يلعبون ».", 'c' => ["في الأطفال الحديقة يلعبون.", "الأطفال يلعبون في الحديقة.", "يلعبون الحديقة في الأطفال.", "الحديقة الأطفال في يلعبون."], 'a' => 1, 'e' => "On commence par le sujet, puis le verbe, puis le lieu."],
                    ['q' => "« شربت ليلى العصير. » Qu'a bu Layla ?", 'c' => ["de l'eau", "du jus", "du lait", "le texte ne le dit pas"], 'a' => 1, 'e' => "« العصير » est ce que Layla a bu : c'est le complément d'objet."],
                    ['q' => "Quelle phrase est la plus claire ?", 'c' => ["السوق خالد بعد ذهب العمل إلى.", "ذهب خالد إلى السوق بعد العمل.", "ذهب السوق إلى خالد بعد العمل.", "بعد ذهب خالد السوق إلى العمل."], 'a' => 1, 'e' => "Elle suit l'ordre verbe, sujet, lieu, moment. Dans les autres, les mots sont déplacés au hasard."],
                    ['q' => "« الطقس بارد اليوم. » Quel mot dit comment est le temps ?", 'c' => ["الطقس", "بارد", "اليوم", "اليوم بارد"], 'a' => 1, 'e' => "« بارد » décrit le temps ; « اليوم » ne donne que le moment."],
                    ['q' => "Quelle phrase parle d'un fait passé ?", 'c' => ["يزور أبي الطبيب الآن.", "زار أبي الطبيب أمس.", "سيزور أبي الطبيب غدًا.", "أبي طبيب جيد."], 'a' => 1, 'e' => "Le verbe « زار » et le mot « أمس » placent la visite dans le passé."],
                ],
            ],
            [
                'title' => "Phrase nominale et phrase verbale",
                'description' => "Distinguer la phrase qui commence par un nom de celle qui commence par un verbe, et voir comment l'ordre des mots change sa structure.",
                'questions' => [
                    ['q' => "Quelle phrase commence par un verbe ?", 'c' => ["المعلم نشيط.", "كتب المعلم الدرس.", "المدرسة كبيرة.", "الطالب في الفصل."], 'a' => 1, 'e' => "« كتب » est un verbe. Les trois autres phrases commencent par un nom."],
                    ['q' => "Quelle phrase commence par un nom et dit quelque chose sur lui ?", 'c' => ["فتح الأب الباب.", "البيت واسع.", "يجري الطفل سريعًا.", "ذهبنا إلى السوق."], 'a' => 1, 'e' => "« البيت » est le nom, « واسع » apporte l'information."],
                    ['q' => "Dans « يكتب أحمد رسالة. », quel est le verbe ?", 'c' => ["أحمد", "يكتب", "رسالة", "أحمد رسالة"], 'a' => 1, 'e' => "« يكتب » exprime l'action faite par Ahmed."],
                    ['q' => "« سارة جميلة. » Quel type de phrase est-ce ?", 'c' => ["une phrase verbale, car elle décrit une action", "une phrase nominale, car elle commence par un nom", "une question", "un ordre"], 'a' => 1, 'e' => "Elle commence par le nom « سارة » et ne contient aucun verbe : c'est une phrase nominale."],
                    ['q' => "Dans « الطبيب في المستشفى », que précise « في المستشفى » ?", 'c' => ["le moment", "le lieu", "le nombre", "la couleur"], 'a' => 1, 'e' => "Le groupe dit où se trouve le médecin."],
                    ['q' => "Quelle phrase suit l'ordre verbe, sujet, complément d'objet ?", 'c' => ["الطالب قرأ القصة.", "قرأ الطالب القصة.", "القصة قرأ الطالب.", "الطالب القصة قرأ."], 'a' => 1, 'e' => "« قرأ » est le verbe, « الطالب » le sujet, « القصة » le complément d'objet."],
                    ['q' => "Quelle phrase place le moment de l'action en tête ?", 'c' => ["ذهب علي إلى العمل في الصباح.", "في الصباح ذهب علي إلى العمل.", "علي ذهب إلى العمل.", "ذهب علي إلى العمل."], 'a' => 1, 'e' => "Mettre « في الصباح » au début attire l'attention sur le moment avant le reste de l'action."],
                    ['q' => "Quelle phrase ne commence PAS par un verbe ?", 'c' => ["ينام الطفل مبكرًا.", "وصلت الحافلة.", "المعلمة تشرح الدرس.", "قرأ خالد القصة."], 'a' => 2, 'e' => "« المعلمة » est un nom : la phrase est nominale. Les autres commencent par un verbe."],
                    ['q' => "Dans « الحديقة جميلة في الربيع », quel mot dit comment est le jardin ?", 'c' => ["الربيع", "جميلة", "في", "الحديقة"], 'a' => 1, 'e' => "« جميلة » est la qualité attribuée au jardin ; « في الربيع » indique la saison."],
                    ['q' => "Dans « تعمل أمي في المستشفى. », qui fait l'action de travailler ?", 'c' => ["تعمل", "أمي", "المستشفى", "في"], 'a' => 1, 'e' => "C'est « أمي » qui travaille : elle est le sujet du verbe."],
                ],
            ],
            [
                'title' => "Questions, négation et transformations de phrases",
                'description' => "Transformer une phrase affirmative en question ou en phrase négative et reconnaître quelques formes simples.",
                'questions' => [
                    ['q' => "Comment transformer « أنت تدرس العربية » en question à réponse oui ou non ?", 'c' => ["العربية تدرس أنت.", "لا تدرس العربية.", "تدرس العربية هل.", "هل تدرس العربية؟"], 'a' => 3, 'e' => "On place « هل » en tête de phrase pour poser une question oui ou non."],
                    ['q' => "Quelle est la forme négative de « خالد في البيت » ?", 'c' => ["لا خالد في البيت.", "خالد هل في البيت.", "خالد في ليس البيت.", "خالد ليس في البيت."], 'a' => 3, 'e' => "Avec une phrase nominale simple, on nie avec « ليس » placé après le sujet."],
                    ['q' => "Quelle question porte sur le lieu ?", 'c' => ["هل تسكن؟", "متى تسكن؟", "لماذا تسكن؟", "أين تسكن؟"], 'a' => 3, 'e' => "« أين » sert à demander où."],
                    ['q' => "Quelle question porte sur le moment ?", 'c' => ["كيف يبدأ الدرس؟", "أين يبدأ الدرس؟", "من يبدأ الدرس؟", "متى يبدأ الدرس؟"], 'a' => 3, 'e' => "« متى » demande quand : ici l'heure du début du cours."],
                    ['q' => "Quelle phrase nie une action passée ?", 'c' => ["أذهب إلى السوق.", "لا أذهب إلى السوق الآن.", "لن أذهب إلى السوق غدًا.", "لم أذهب إلى السوق."], 'a' => 3, 'e' => "« لم » + verbe nie une action du passé ; « لا » vise le présent et « لن » le futur."],
                    ['q' => "Le professeur dit : « لا تتحدثوا أثناء الاختبار ». Que fait cette phrase ?", 'c' => ["elle raconte un fait passé", "elle pose une question sur le lieu", "elle décrit un endroit", "elle exprime une interdiction"], 'a' => 3, 'e' => "« لا » devant le verbe demande aux élèves de s'abstenir : c'est une interdiction."],
                    ['q' => "« سافر يوسف إلى طنجة أمس. » Quelle question permet de demander la destination ?", 'c' => ["هل سافر يوسف؟", "متى سافر يوسف؟", "لماذا سافر يوسف؟", "إلى أين سافر يوسف؟"], 'a' => 3, 'e' => "« إلى أين » demande vers où : la réponse est Tanger."],
                    ['q' => "Quelle phrase exprime une cause avec « لأن » ?", 'c' => ["بقيت لأن في البيت.", "بقيت في البيت هل كنت متعبًا.", "لأن بقيت البيت متعبًا.", "بقيت في البيت لأنني كنت متعبًا."], 'a' => 3, 'e' => "Le fait de rester à la maison est expliqué par la fatigue."],
                    ['q' => "Dans « نجح الطالب لأنه اجتهد », que perd-on si on retire « لأنه » ?", 'c' => ["le lieu de l'action", "le temps du verbe", "le sujet de la phrase", "le lien de cause entre la réussite et l'effort"], 'a' => 3, 'e' => "« لأنه » relie le résultat à sa cause. Sans lui, le rapport entre réussite et effort devient moins clair."],
                    ['q' => "Dans « اشترت سارة الكتاب », quelle question demande qui a acheté le livre ?", 'c' => ["متى اشترت سارة؟", "ماذا اشترت سارة؟", "أين اشترت سارة؟", "من اشترى الكتاب؟"], 'a' => 3, 'e' => "« من » demande qui a fait l'action ; ici, la réponse est Sara."],
                ],
            ],
            [
                'title' => "Mots, groupes de mots et enrichissement de la phrase",
                'description' => "Voir comment de courts groupes de mots ajoutent le lieu, le moment ou une description à une phrase de base.",
                'questions' => [
                    ['q' => "Dans « قرأ علي الكتاب في المساء », quel groupe ajoute le moment ?", 'c' => ["علي الكتاب", "قرأ علي", "الكتاب", "في المساء"], 'a' => 3, 'e' => "« في المساء » dit quand Ali a lu."],
                    ['q' => "Quel ajout précise le lieu dans « الطفل يلعب » ?", 'c' => ["ربما", "جدًا", "أمس", "في الحديقة"], 'a' => 3, 'e' => "« في الحديقة » dit où l'enfant joue."],
                    ['q' => "Dans « دخل الرجل الكبير », à quoi sert le mot « الكبير » ?", 'c' => ["à supprimer le sujet", "à transformer l'homme en lieu", "à en faire un verbe", "à décrire l'homme"], 'a' => 3, 'e' => "« الكبير » est une qualité de l'homme : il donne une information de plus sur lui."],
                    ['q' => "Quel ajout précise la destination dans « سافرت مريم » ?", 'c' => ["كثيرًا", "بسرعة", "أمس", "إلى الرباط"], 'a' => 3, 'e' => "« إلى الرباط » dit vers où Mariam est partie."],
                    ['q' => "Quel groupe complète naturellement : « عاد الأب ___ » ?", 'c' => ["العمل هو عاد", "لأن العمل", "من سريعًا العمل", "من العمل"], 'a' => 3, 'e' => "« من العمل » indique d'où revient le père."],
                    ['q' => "Dans « اشترت نادية قميصًا أزرق », quel mot donne la couleur ?", 'c' => ["قميصًا", "اشترت", "نادية", "أزرق"], 'a' => 3, 'e' => "« أزرق » décrit la chemise et donne sa couleur."],
                    ['q' => "Quelle phrase donne à la fois le lieu et le moment ?", 'c' => ["لعب صباحًا.", "لعب الأطفال.", "الأطفال في الحديقة.", "لعب الأطفال في الحديقة صباحًا."], 'a' => 3, 'e' => "Elle contient « في الحديقة » pour le lieu et « صباحًا » pour le moment."],
                    ['q' => "Quel mot décrit utilement la voiture dans « اشترى خالد سيارة » ?", 'c' => ["ثم", "في", "لأن", "جديدة"], 'a' => 3, 'e' => "« جديدة » qualifie la voiture ; les autres mots sont des outils de liaison."],
                    ['q' => "À quoi sert un groupe comme « بعد المدرسة » dans une phrase ?", 'c' => ["à poser une question", "à indiquer le lieu de l'action", "à décrire une personne", "à situer l'action dans le temps"], 'a' => 3, 'e' => "« بعد المدرسة » dit quand l'action a lieu, par rapport à un autre moment."],
                    ['q' => "Quelle phrase donne l'image la plus précise ?", 'c' => ["الطفل هناك.", "جلس الطفل.", "جلس الطفل على المقعد الخشبي قرب النافذة.", "جلس."], 'a' => 2, 'e' => "Elle précise le type de banc et sa place : le lecteur se représente mieux la scène."],
                ],
            ],
            [
                'title' => "Relier les idées dans une phrase",
                'description' => "S'exercer avec les mots de liaison courants : و، ثم، لكن، لأن، لذلك، عندما.",
                'questions' => [
                    ['q' => "Choisis le bon mot : « ذهبنا إلى السوق ___ اشترينا الخضار. »", 'c' => ["لكن", "لأن", "و", "أين"], 'a' => 2, 'e' => "« و » relie deux actions qui s'enchaînent, sans exprimer cause ni opposition."],
                    ['q' => "Quel mot convient : « غسلت يدي، ___ تناولت الطعام. » ?", 'c' => ["لكن", "لأن", "ثم", "أين"], 'a' => 2, 'e' => "« ثم » marque l'ordre : d'abord se laver les mains, ensuite manger."],
                    ['q' => "Quel mot introduit une cause : « بقيت في البيت ___ كنت مريضًا. » ?", 'c' => ["لكن", "ثم", "لأن", "هل"], 'a' => 2, 'e' => "« لأن » donne la raison : la maladie."],
                    ['q' => "Quel mot exprime l'opposition : « أحب القهوة، ___ لا أشربها ليلًا. » ?", 'c' => ["لأن", "ثم", "لكن", "هل"], 'a' => 2, 'e' => "« لكن » oppose les deux idées : j'aime le café, mais pas la nuit."],
                    ['q' => "Quel mot convient : « كان الجو ممطرًا، ___ أخذت مظلتي. » ?", 'c' => ["هل", "لكن", "لذلك", "أين"], 'a' => 2, 'e' => "« لذلك » relie la cause (la pluie) à la conséquence (prendre le parapluie)."],
                    ['q' => "Quelle phrase emploie « عندما » naturellement ?", 'c' => ["اتصلت عندما أمي بالبيت.", "عندما الكتاب على الطاولة.", "عندما وصلت إلى البيت، اتصلت بأمي.", "عندما جميلة السماء."], 'a' => 2, 'e' => "« عندما » relie deux événements dans le temps : j'ai appelé ma mère à mon arrivée."],
                    ['q' => "Quelle phrase enchaîne correctement trois actions ?", 'c' => ["استيقظت، هل تناولت الفطور، ثم خرجت.", "استيقظت، لكن تناولت الفطور، لأن خرجت.", "استيقظت، ثم تناولت الفطور، ثم خرجت.", "استيقظت، أين تناولت الفطور، لذلك خرجت."], 'a' => 2, 'e' => "« ثم » indique la suite des actions : se lever, déjeuner, sortir."],
                    ['q' => "Quel mot convient : « أردت الخروج، ___ كان المطر شديدًا. » ?", 'c' => ["ثم", "لذلك", "لكن", "هل"], 'a' => 2, 'e' => "Le désir de sortir est contrarié par la pluie : il faut « لكن », mot d'opposition."],
                    ['q' => "Dans « درست جيدًا، لذلك نجحت », que marque le mot « لذلك » ?", 'c' => ["un lieu", "une question", "la conséquence", "une comparaison"], 'a' => 2, 'e' => "La réussite est la conséquence de l'étude sérieuse."],
                    ['q' => "Quelle phrase montre clairement la cause puis la conséquence ?", 'c' => ["تأخر الباص، ثم لماذا وصلنا.", "تأخر الباص، لكن وصلنا متأخرين.", "تأخر الباص، لذلك وصلنا متأخرين.", "تأخر الباص، وسبب وصلنا متأخرين."], 'a' => 2, 'e' => "Le retard du bus est la cause, notre arrivée tardive la conséquence ; « لذلك » les relie."],
                ],
            ],
            [
                'title' => "Corriger les phrases maladroites ou mélangées",
                'description' => "Repérer les erreurs d'ordre fréquentes chez les débutants et les corriger pour que le sens soit clair et naturel.",
                'questions' => [
                    ['q' => "Quelle correction rend claire la phrase « إلى المدرسة ذهب صباحًا خالد. » ?", 'c' => ["صباحًا إلى خالد المدرسة ذهب.", "المدرسة خالد صباحًا إلى ذهب.", "ذهب خالد إلى المدرسة صباحًا.", "ذهب إلى صباحًا المدرسة خالد."], 'a' => 2, 'e' => "Verbe, sujet, destination, moment : l'ordre est naturel et facile à comprendre."],
                    ['q' => "Quel est le problème de « البيت في يسكن أحمد » ?", 'c' => ["le verbe est au pluriel", "il manque la ponctuation finale", "l'ordre des mots rend la phrase illisible", "« البيت » ne peut pas suivre une préposition"], 'a' => 2, 'e' => "Les mots sont connus mais mal placés. On peut corriger : « يسكن أحمد في البيت »."],
                    ['q' => "Quelle phrase est la plus claire ?", 'c' => ["شراء ذهبت كتاب سارة إلى المكتبة.", "إلى الكتاب المكتبة ذهبت سارة لشراء.", "ذهبت سارة إلى المكتبة لشراء كتاب.", "سارة الكتاب لشراء إلى ذهبت المكتبة."], 'a' => 2, 'e' => "Elle enchaîne le verbe, le sujet, la destination et le but dans un ordre normal."],
                    ['q' => "Remets en ordre : « الطعام / في / المطبخ / أمي / تطبخ ».", 'c' => ["تطبخ في أمي المطبخ الطعام.", "المطبخ أمي في الطعام تطبخ.", "أمي تطبخ الطعام في المطبخ.", "الطعام أمي المطبخ تطبخ في."], 'a' => 2, 'e' => "Le sujet précède le verbe, puis vient ce qu'elle prépare, enfin le lieu."],
                    ['q' => "Quelle phrase évite toute confusion sur la personne qui est fatiguée ?", 'c' => ["قالت لها إنها متعبة.", "قالت سلمى لهدى إنها متعبة.", "قالت سلمى لهدى: أنا متعبة.", "قالت إنها متعبة لها."], 'a' => 2, 'e' => "Au discours direct, « أنا » désigne clairement Salma. Avec « إنها », on ne sait pas laquelle des deux est fatiguée."],
                    ['q' => "Un élève écrit : « أنا في الصباح إلى الجامعة أذهب. » Quelle version est naturelle ?", 'c' => ["الجامعة في الصباح أنا أذهب إلى.", "في الجامعة أذهب الصباح إلى.", "أذهب إلى الجامعة في الصباح.", "الصباح أذهب أنا إلى الجامعة في."], 'a' => 2, 'e' => "On place le verbe, puis la destination, puis le moment."],
                    ['q' => "Quelle phrase est correcte et sans ambiguïté sur qui a vu qui ?", 'c' => ["أختها في مريم رأت السوق.", "في السوق أختها رأت مريم.", "رأت مريم أختها في السوق.", "رأت السوق أختها في مريم."], 'a' => 2, 'e' => "Le sujet « مريم » suit directement le verbe, ce qui rend la relation claire."],
                    ['q' => "Quelle phrase corrige « لأن المطر بقينا » ?", 'c' => ["بقينا في البيت لأن المطر كان شديدًا.", "لأن بقينا المطر في البيت كان.", "المطر بقينا لأن كان شديدًا.", "بقينا المطر لأن شديدًا كان."], 'a' => 0, 'e' => "Le résultat vient d'abord, puis « لأن » introduit directement la cause."],
                    ['q' => "Quelle phrase manque de précision et demande plus de contexte ?", 'c' => ["ذهب إلى هناك أمس.", "ذهب أحمد إلى المدرسة أمس.", "وصلت الحافلة في الثامنة.", "قرأت ليلى القصة."], 'a' => 0, 'e' => "On ne sait ni qui est parti, ni ce que désigne « هناك »."],
                    ['q' => "Dans « قرأ الطفل القصة ثم نام », à quoi sert « ثم » ?", 'c' => ["à montrer l'ordre des deux actions", "à nier la lecture", "à préciser le lieu du sommeil", "à mettre l'enfant au pluriel"], 'a' => 0, 'e' => "La lecture a lieu d'abord ; le sommeil vient ensuite."],
                ],
            ],
            [
                'title' => "Comprendre la structure des phrases en contexte",
                'description' => "À partir de courtes phrases du quotidien, repérer les liens entre actions, personnes, lieux et moments.",
                'questions' => [
                    ['q' => "« بعد أن انتهت الحصة، خرج الطلاب إلى الساحة. » Qu'est-ce qui s'est passé en premier ?", 'c' => ["la classe a fini", "les élèves sont sortis dans la cour", "les élèves sont rentrés chez eux", "la classe suivante a commencé"], 'a' => 0, 'e' => "« بعد أن انتهت الحصة » montre que la fin du cours précède la sortie."],
                    ['q' => "« وضعت هناء المفتاح في حقيبتها قبل أن تغادر المنزل. » Où Hanaa a-t-elle mis la clé ?", 'c' => ["dans son sac", "sur la table", "dans la voiture", "à l'école"], 'a' => 0, 'e' => "Le texte le dit : dans son sac, avant de quitter la maison."],
                    ['q' => "« كان عمر يشعر بالبرد، لذلك أغلق النافذة. » Quel lien unit les deux parties ?", 'c' => ["cause et conséquence", "question et réponse", "lieu et moment", "deux descriptions opposées"], 'a' => 0, 'e' => "Avoir froid est la cause ; fermer la fenêtre est la conséquence."],
                    ['q' => "« تعمل نورة في الصباح، وتدرس في المساء. » Que fait Noura le soir ?", 'c' => ["elle étudie", "elle travaille", "elle dort", "elle voyage"], 'a' => 0, 'e' => "Le travail est le matin ; les études sont le soir."],
                    ['q' => "« زار يوسف عمه في القرية، ثم عاد إلى المدينة مساءً. » Où Youssef est-il retourné ?", 'c' => ["en ville", "au village", "à l'école", "au marché"], 'a' => 0, 'e' => "Après la visite au village, il est retourné en ville le soir."],
                    ['q' => "« لم يجد فريد حافلته، فاختار المشي إلى العمل. » Pourquoi Farid a-t-il choisi de marcher ?", 'c' => ["parce qu'il n'a pas trouvé son bus", "parce qu'il préfère l'avion", "parce qu'il était déjà arrivé au travail", "parce qu'il voulait acheter un bus"], 'a' => 0, 'e' => "Le « فـ » lie directement l'absence de bus au choix de marcher."],
                    ['q' => "« جلست سارة قرب النافذة لأنها تحب الضوء الطبيعي. » Pourquoi s'est-elle assise près de la fenêtre ?", 'c' => ["parce qu'elle aime la lumière naturelle", "parce qu'elle voulait dormir", "parce qu'elle ne connaissait pas d'autre place", "parce que la fenêtre était fermée"], 'a' => 0, 'e' => "« لأن » donne directement la raison."],
                    ['q' => "« عندما عاد الأب، كان الأطفال قد أنهوا واجبهم. » Que s'est-il passé avant le retour du père ?", 'c' => ["les enfants avaient fini leurs devoirs", "les enfants ont commencé leurs devoirs après son retour", "le père est sorti de la maison", "les enfants sont allés à l'école"], 'a' => 0, 'e' => "« قد أنهوا » indique que les devoirs étaient déjà terminés."],
                    ['q' => "« اشترى خالد خبزًا وحليبًا من المتجر، ثم عاد إلى المنزل. » Quels deux produits a-t-il achetés ?", 'c' => ["du pain et du lait", "du pain et de l'eau", "du lait et du jus", "de l'eau et des fruits"], 'a' => 0, 'e' => "Le texte cite le pain et le lait."],
                    ['q' => "« كانت الطريق مزدحمة، لذلك وصلنا متأخرين. » Quelle est la conséquence ?", 'c' => ["nous sommes arrivés en retard", "la route était encombrée", "nous avons fermé la route", "nous sommes rentrés chez nous"], 'a' => 0, 'e' => "« لذلك » introduit la conséquence : le retard dû aux embouteillages."],
                ],
            ],
            [
                'title' => "Révision générale de la structure des phrases",
                'description' => "Réviser l'ordre des mots, les mots de liaison, les questions, la négation et l'enrichissement de la phrase dans des situations pratiques.",
                'questions' => [
                    ['q' => "Remets en ordre : « أمس / إلى الطبيب / ذهبت / أنا ».", 'c' => ["ذهبت إلى الطبيب أمس.", "إلى الطبيب أمس أنا ذهبت.", "أمس الطبيب إلى أنا ذهبت.", "الطبيب ذهبت أمس إلى أنا."], 'a' => 0, 'e' => "Verbe, destination, moment : l'ordre est clair et naturel."],
                    ['q' => "Quelle question correspond à la réponse « في المكتبة » ?", 'c' => ["أين درست؟", "متى درست؟", "من درس؟", "لماذا درست؟"], 'a' => 0, 'e' => "« في المكتبة » est un lieu : la question est « أين »."],
                    ['q' => "Quelle suite convient : « لم يخرج سامي ___ » ?", 'c' => ["لأنه كان مريضًا.", "ثم كان مريضًا.", "أين كان مريضًا.", "لكن كان مريضًا."], 'a' => 0, 'e' => "« لأنه كان مريضًا » donne une raison logique à son absence de sortie."],
                    ['q' => "Quelle phrase donne l'événement, le lieu et le moment ?", 'c' => ["اجتمع الموظفون في القاعة صباحًا.", "اجتمع الموظفون.", "القاعة صباحًا.", "الموظفون هناك."], 'a' => 0, 'e' => "Elle contient l'événement, « في القاعة » pour le lieu et « صباحًا » pour le moment."],
                    ['q' => "Quelle question est correctement construite ?", 'c' => ["متى يبدأ الاجتماع؟", "يبدأ متى الاجتماع؟", "الاجتماع متى يبدأ هو؟", "يبدأ الاجتماع متى هو؟"], 'a' => 0, 'e' => "Le mot interrogatif ouvre la question, suivi du verbe et du sujet."],
                    ['q' => "Quelle phrase emploie la négation correctement ?", 'c' => ["لم يذهب علي إلى العمل أمس.", "لم ذهب علي إلى العمل أمس.", "علي لم إلى العمل ذهب أمس.", "لم علي يذهب إلى العمل أمس."], 'a' => 0, 'e' => "« لم » est suivi directement du verbe à l'inaccompli : « لم يذهب »."],
                    ['q' => "Complète : « قرأت مريم الرسالة، ___ أرسلت ردًا. »", 'c' => ["ثم", "لأن", "أين", "ليس"], 'a' => 0, 'e' => "L'envoi de la réponse vient après la lecture : « ثم » marque la suite."],
                    ['q' => "Quelle phrase donne clairement la raison d'une décision ?", 'c' => ["أخذت ريم معطفًا لأن الجو بارد.", "أخذت ريم معطفًا ثم الجو بارد.", "أخذت ريم معطفًا أين الجو بارد.", "أخذت ريم معطفًا هل الجو بارد."], 'a' => 0, 'e' => "« لأن الجو بارد » explique pourquoi Rim a pris un manteau."],
                    ['q' => "Un élève écrit : « في الحديقة أمس الأطفال لعبوا. » Quelle réécriture est correcte ?", 'c' => ["لعب الأطفال في الحديقة أمس.", "أمس الحديقة في لعب الأطفال.", "لعب في أمس الأطفال الحديقة.", "الحديقة لعب أمس الأطفال في."], 'a' => 0, 'e' => "Verbe, sujet, lieu, moment : on comprend la phrase d'un coup."],
                    ['q' => "Quelle phrase relie plusieurs idées de façon claire ?", 'c' => ["عاد أبي من العمل، وتناول الغداء، ثم أخذ قسطًا من الراحة.", "عاد أبي العمل الغداء الراحة.", "من العمل أبي ثم الراحة عاد الغداء.", "تناول الغداء أبي عاد العمل ثم راحة."], 'a' => 0, 'e' => "Les virgules, « و » et « ثم » enchaînent les actions dans l'ordre."],
                ],
            ],
        ];

        foreach ($quizzes as $position => $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings[$position]['duration'],
                    'passing_score' => $settings[$position]['passing_score'],
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
                ]
            );

            foreach ($quizData['questions'] as $qIndex => $item) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $qIndex + 1,
                    ],
                    [
                        'question' => $item['q'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $item['e'],
                    ]
                );

                foreach ($item['c'] as $cIndex => $text) {
                    Choice::updateOrCreate(
                        [
                            'question_id' => $question->id,
                            'order' => $cIndex + 1,
                        ],
                        [
                            'choice_text' => $text,
                            'is_correct' => $cIndex === $item['a'],
                        ]
                    );
                }

                $question->choices()->where('order', '>', count($item['c']))->delete();
            }
        }
    }
}
