<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PunctuationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'punctuation')->firstOrFail();

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
                'title' => "Les bases de la ponctuation arabe",
                'description' => "Reconnaître les principaux signes de ponctuation arabes et comprendre leur rôle dans la phrase.",
                'questions' => [
                    ['q' => "Quel signe place-t-on normalement à la fin d'une phrase déclarative complète ?", 'c' => ["le point .", "le point d'interrogation ؟", "la virgule ،", "les deux-points :"], 'a' => 0, 'e' => "Le point termine une phrase déclarative dont le sens est complet."],
                    ['q' => "Quel signe convient à la fin de la question « أين تسكن » ?", 'c' => [".", "،", "!", "؟"], 'a' => 3, 'e' => "Le point d'interrogation signale une question qui attend une réponse."],
                    ['q' => "« ما أجمل السماء » exprime l'admiration. Quel signe convient à la fin de la phrase ?", 'c' => ["!", "؟", "،", ":"], 'a' => 0, 'e' => "Le point d'exclamation convient aux phrases qui expriment l'émotion ou l'étonnement."],
                    ['q' => "Quel signe sépare de courts éléments dans une énumération ?", 'c' => ["،", "!", "؟", "."], 'a' => 0, 'e' => "La virgule sépare les éléments courts d'une phrase ou d'une liste."],
                    ['q' => "Dans « أحب القراءة، والكتابة، والرسم », pourquoi a-t-on employé des virgules ?", 'c' => ["pour séparer des éléments qui se suivent", "pour terminer une question", "pour exprimer l'étonnement", "pour ouvrir une citation"], 'a' => 0, 'e' => "Les virgules séparent les trois activités citées."],
                    ['q' => "Quelle phrase est correctement ponctuée ?", 'c' => ["وصلت إلى البيت.", "وصلت إلى البيت،", "وصلت إلى البيت؟", "وصلت إلى البيت:"], 'a' => 0, 'e' => "C'est une phrase déclarative complète : elle se termine par un point."],
                    ['q' => "Samir lit : « متى يبدأ الدرس؟ ». Que montre le point d'interrogation ?", 'c' => ["que l'auteur demande une information", "que l'auteur est étonné", "que la phrase est inachevée", "qu'il y a une liste"], 'a' => 0, 'e' => "Le point d'interrogation indique une demande d'information ou de réponse."],
                    ['q' => "Quelle phrase demande le plus naturellement un point d'exclamation ?", 'c' => ["متى تصل؟", "ذهبت إلى السوق.", "لدي ثلاثة كتب:", "احذر من الطريق!"], 'a' => 3, 'e' => "« احذر من الطريق! » est un avertissement chargé d'émotion."],
                    ['q' => "Après une phrase d'introduction comme « أحتاج إلى ثلاثة أشياء », quel signe convient avant la liste ?", 'c' => [":", "؟", "!", "،"], 'a' => 0, 'e' => "Les deux-points annoncent une explication ou une énumération."],
                    ['q' => "Quelle association entre signe et sens est correcte ?", 'c' => ["ما أجمل الجو؟ — exclamation", "وصل القطار! — question", "لدي كتاب؟ — liste", "هل حضرت؟ — question"], 'a' => 3, 'e' => "« هل حضرت؟ » est bien une question, ce que le point d'interrogation indique."],
                ],
            ],
            [
                'title' => "Virgule, point d'interrogation et point d'exclamation",
                'description' => "Distinguer la virgule, le point d'interrogation et le point d'exclamation dans des phrases de la vie courante.",
                'questions' => [
                    ['q' => "Dans « اشتريت خبزًا وحليبًا وتمرًا », où placer les virgules pour séparer les éléments de la liste ?", 'c' => ["après « خبزًا » et après « حليبًا »", "après « اشتريت » seulement", "juste avant le point", "au début de la phrase"], 'a' => 0, 'e' => "On obtient : « اشتريت خبزًا، وحليبًا، وتمرًا. »"],
                    ['q' => "Laquelle de ces phrases a besoin d'un point d'interrogation ?", 'c' => ["كيف وصلت إلى هنا", "يا له من منظر!", "وصلت إلى هنا.", "اشتريت قلمًا، ودفترًا."], 'a' => 0, 'e' => "Elle commence par un mot interrogatif (كيف) et demande une information : « كيف وصلت إلى هنا؟ »."],
                    ['q' => "Une mère dit à son fils : « انتبه! ». Pourquoi le point d'exclamation ?", 'c' => ["parce que c'est un avertissement fort", "parce qu'il y a une liste", "parce que c'est une question", "parce que la phrase a besoin d'un titre"], 'a' => 0, 'e' => "Le point d'exclamation convient à l'avertissement, à l'ordre fort ou à l'émotion."],
                    ['q' => "Quelle phrase emploie naturellement la virgule ?", 'c' => ["في الصباح، شربت القهوة وقرأت الأخبار.", "في، الصباح شربت القهوة.", "في الصباح؟ شربت القهوة.", "في الصباح! شربت القهوة."], 'a' => 0, 'e' => "La virgule après un complément d'introduction comme « في الصباح » le sépare du reste de la phrase."],
                    ['q' => "Vous demandez à un ami à quelle heure il arrive. Quelle forme convient ?", 'c' => ["متى ستصل؟", "متى ستصل.", "متى ستصل!", "متى ستصل،"], 'a' => 0, 'e' => "Une question directe se termine par un point d'interrogation."],
                    ['q' => "Laquelle de ces phrases exprime une joie soudaine ?", 'c' => ["هل نجحنا في الاختبار؟", "نجحنا في الاختبار.", "نجحنا، في الاختبار.", "نجحنا في الاختبار!"], 'a' => 3, 'e' => "L'émotion de la joie est marquée par le point d'exclamation."],
                    ['q' => "Dans laquelle de ces phrases la virgule introduit-elle bien un exemple ?", 'c' => ["أحب ألوانًا كثيرة؟ مثل الأزرق والأخضر.", "أحب ألوانًا كثيرة: مثل، الأزرق والأخضر.", "أحب ألوانًا كثيرة! مثل الأزرق والأخضر.", "أحب ألوانًا كثيرة، مثل الأزرق والأخضر."], 'a' => 3, 'e' => "La virgule sépare la phrase de son exemple sans en faire une question ni une exclamation."],
                    ['q' => "Quelle est la différence essentielle entre « أين ذهبت؟ » et « ذهبت إلى السوق. » ?", 'c' => ["la première est une question, la seconde une affirmation", "les deux sont des questions", "la première est une exclamation, la seconde une question", "les deux sont des listes"], 'a' => 0, 'e' => "Le point d'interrogation de la première et le point de la seconde reflètent leur fonction."],
                    ['q' => "Choisissez le signe qui convient : « يا له من خبر رائع___ »", 'c' => ["؟", "،", "!", ":"], 'a' => 2, 'e' => "La phrase exprime l'émotion et l'admiration : elle se termine par un point d'exclamation."],
                    ['q' => "Laquelle de ces phrases est la mieux ponctuée avec deux virgules encadrant une précision ?", 'c' => ["صديقي خالد؟ الطالب المجتهد؟ يقرأ كثيرًا.", "صديقي خالد! الطالب المجتهد! يقرأ كثيرًا.", "صديقي خالد: الطالب المجتهد: يقرأ كثيرًا.", "صديقي خالد، الطالب المجتهد، يقرأ كثيرًا."], 'a' => 3, 'e' => "Les deux virgules encadrent une précision sur Khaled sans couper la phrase principale."],
                ],
            ],
            [
                'title' => "Deux-points et point-virgule",
                'description' => "Apprendre à employer les deux-points et le point-virgule pour expliquer, détailler et relier des phrases en rapport.",
                'questions' => [
                    ['q' => "Laquelle de ces phrases emploie correctement les deux-points ?", 'c' => ["لدي هدف واحد، أن أقرأ كل يوم.", "لدي هدف واحد؟ أن أقرأ كل يوم.", "لدي هدف واحد: أن أقرأ كل يوم.", "لدي هدف واحد! أن أقرأ كل يوم."], 'a' => 2, 'e' => "Les deux-points annoncent la précision de l'objectif mentionné."],
                    ['q' => "Quand le point-virgule « ؛ » est-il utile ?", 'c' => ["à la fin d'une question seulement", "pour relier deux phrases qui ont un rapport clair", "après chaque mot", "seulement pour ouvrir une citation"], 'a' => 1, 'e' => "Le point-virgule relie deux phrases liées par le sens, avec une pause plus forte que la virgule."],
                    ['q' => "Choisissez le bon signe : « لدي ثلاثة أصدقاء ___ أحمد، وسارة، وعلي. »", 'c' => ["؟", "!", "؛", ":"], 'a' => 3, 'e' => "Les deux-points précèdent habituellement une liste qui explicite l'expression précédente."],
                    ['q' => "Quel exemple bénéficie d'un point-virgule ?", 'c' => ["أحب المشي؟ لأنه يساعدني على الاسترخاء.", "أحب المشي! لأنه يساعدني على الاسترخاء.", "أحب المشي؛ لأنه يساعدني على الاسترخاء.", "أحب المشي: لأنه يساعدني على الاسترخاء."], 'a' => 2, 'e' => "Le point-virgule relie l'idée à la raison qui l'explique."],
                    ['q' => "Pourquoi un point d'interrogation serait-il inadapté dans « أحتاج إلى أربعة أشياء: دفتر، وقلم، وكتاب » ?", 'c' => ["parce qu'elle contient une liste", "parce que la phrase n'est pas une question", "parce qu'elle est longue", "parce qu'elle contient une préposition"], 'a' => 1, 'e' => "La phrase annonce des objets : elle ne demande aucune réponse."],
                    ['q' => "Laquelle de ces phrases montre bien la fonction du point-virgule ?", 'c' => ["انتهى الوقت؟ لذلك سلّم الطلاب أوراقهم.", "انتهى الوقت! لذلك سلّم الطلاب أوراقهم.", "انتهى الوقت: لذلك سلّم الطلاب أوراقهم.", "انتهى الوقت؛ لذلك سلّم الطلاب أوراقهم."], 'a' => 3, 'e' => "Le point-virgule relie un fait et sa conséquence dans deux phrases liées."],
                    ['q' => "Quel signe convient avant d'expliquer le sens d'un mot ?", 'c' => ["؟", ":", "!", "؛"], 'a' => 1, 'e' => "Les deux-points conviennent avant une explication introduite par une expression préparatoire."],
                    ['q' => "Dans « كان الجو باردًا؛ لبسنا المعاطف », quel est le rapport entre les deux phrases ?", 'c' => ["question et réponse", "liste de noms", "cause et conséquence", "exclamation et description"], 'a' => 2, 'e' => "Le froid explique pourquoi on a mis des manteaux : le rapport est causal."],
                    ['q' => "Laquelle de ces phrases emploie mal les deux-points ?", 'c' => ["أحب ثلاثة أشياء: القراءة والكتابة والرسم.", "قال المعلم: «ابدؤوا العمل.»", "السبب واضح: لم يستيقظ مبكرًا.", "ذهبت: إلى المدرسة."], 'a' => 3, 'e' => "On ne met pas les deux-points entre le verbe et son complément : « ذهبت إلى المدرسة » est une phrase continue."],
                    ['q' => "Une phrase contient une raison claire après une idée relativement indépendante. Quel signe peut convenir ?", 'c' => ["؟", "!", "؛", "،"], 'a' => 2, 'e' => "Le point-virgule convient pour relier deux phrases liées, notamment par un rapport de cause."],
                ],
            ],
            [
                'title' => "Guillemets et dialogue",
                'description' => "S'exercer aux guillemets et à la ponctuation des dialogues et des phrases rapportées.",
                'questions' => [
                    ['q' => "Quelle forme montre des paroles rapportées telles quelles ?", 'c' => ["قال المعلم، افتحوا كتبكم.", "قال المعلم: «افتحوا كتبكم.»", "قال المعلم؟ افتحوا كتبكم!", "قال المعلم: افتحوا كتبكم؟"], 'a' => 1, 'e' => "Les guillemets « » montrent que les paroles sont citées telles qu'elles ont été dites."],
                    ['q' => "À quoi servent les guillemets « » à l'écrit ?", 'c' => ["à terminer chaque phrase", "à délimiter des paroles rapportées ou une expression citée", "à séparer les éléments d'une liste", "à former une question"], 'a' => 1, 'e' => "Ils aident le lecteur à distinguer les paroles ou l'expression citées par l'auteur."],
                    ['q' => "Quel dialogue est écrit le plus clairement ?", 'c' => ["قالت مريم، هل ستأتي غدًا.", "قالت مريم! «هل ستأتي غدًا».", "قالت مريم: هل ستأتي غدًا!", "قالت مريم: «هل ستأتي غدًا؟»"], 'a' => 3, 'e' => "On associe les deux-points avant la parole rapportée et le point d'interrogation à l'intérieur de la citation."],
                    ['q' => "Si la parole rapportée est une question, où place-t-on le point d'interrogation ?", 'c' => ["au début du paragraphe", "après chaque mot", "à l'intérieur des guillemets, à la fin de la question", "à la place de la virgule uniquement"], 'a' => 2, 'e' => "Le point d'interrogation fait partie de la parole rapportée : il se place à la fin de la question, dans la citation."],
                    ['q' => "Le père dit : « احفظ وعدك. » Que montrent les guillemets ?", 'c' => ["que le père pose une question", "que l'expression est une liste", "que la phrase est inachevée", "que l'expression vient des paroles du père"], 'a' => 3, 'e' => "La citation délimite les paroles attribuées au père."],
                    ['q' => "Quelle écriture convient pour un court dialogue ?", 'c' => ["سأل علي: «هل أنهيت واجبك؟» أجاب عمر: «نعم.»", "سأل علي هل أنهيت واجبك؟ أجاب عمر نعم.", "سأل علي! هل أنهيت واجبك! أجاب عمر!", "سأل علي: هل أنهيت واجبك. أجاب عمر: نعم؟"], 'a' => 0, 'e' => "On marque le début de chaque réplique et on utilise point d'interrogation et point selon le sens."],
                    ['q' => "Quel est le rôle des deux-points avant la parole d'un locuteur ?", 'c' => ["terminer la question précédente", "annoncer la parole qui va suivre", "séparer chaque lettre", "indiquer le pluriel"], 'a' => 1, 'e' => "Ils introduisent les paroles qui suivent un verbe de parole comme « قال » ou « سأل »."],
                    ['q' => "Quelle phrase garde correctement le point d'interrogation dans une citation ?", 'c' => ["سألتني: «متى تبدأ الحصة.»", "سألتني: «متى تبدأ الحصة!»", "سألتني: «متى تبدأ الحصة؟»", "سألتني، «متى تبدأ الحصة؟»,"], 'a' => 2, 'e' => "Comme la citation est une question, le point d'interrogation reste à l'intérieur des guillemets."],
                    ['q' => "Pourquoi un auteur pourrait-il mettre « العلم نور » entre guillemets ?", 'c' => ["parce que c'est une question", "parce qu'il veut mettre en valeur l'expression comme une citation ou une formule reprise", "parce que c'est une liste", "parce que toutes les phrases doivent être citées"], 'a' => 1, 'e' => "Les guillemets peuvent signaler qu'une expression est présentée comme une citation ou une formule."],
                    ['q' => "Quelle phrase associe correctement dialogue et ponctuation ?", 'c' => ["قالت سارة؟ «سأعود بعد قليل.»", "قالت سارة: «سأعود بعد قليل.»", "قالت سارة، «سأعود بعد قليل؟»", "قالت سارة! «سأعود بعد قليل،»"], 'a' => 1, 'e' => "Les deux-points introduisent la parole de Sara et le point clôt sa phrase déclarative à l'intérieur des guillemets."],
                ],
            ],
            [
                'title' => "Ponctuation des paragraphes et des listes",
                'description' => "Utiliser les signes de ponctuation pour organiser phrases, paragraphes et listes et rendre un texte plus lisible.",
                'questions' => [
                    ['q' => "Vous avez une liste de trois objets : « قلم، دفتر، كتاب ». Quel est le rôle des virgules ?", 'c' => ["séparer les éléments", "terminer le texte", "marquer une question", "ouvrir une citation"], 'a' => 0, 'e' => "Les virgules séparent les éléments successifs pour que le lecteur les distingue."],
                    ['q' => "Laquelle de ces phrases est la mieux organisée ?", 'c' => ["أستيقظ مبكرًا؟ أتناول الإفطار! ثم أذهب إلى المدرسة.", "أستيقظ مبكرًا، أتناول الإفطار، ثم أذهب إلى المدرسة.", "أستيقظ مبكرًا: أتناول الإفطار، ثم أذهب إلى المدرسة؟", "أستيقظ مبكرًا، أتناول الإفطار؟ ثم أذهب إلى المدرسة!"], 'a' => 1, 'e' => "Les virgules relient des actions successives sans donner à la phrase un sens interrogatif ou exclamatif."],
                    ['q' => "Quel signe convient après l'introduction d'une liste ?", 'c' => ["؟", "!", ":", "؛"], 'a' => 2, 'e' => "Les deux-points préparent le détail ou la liste qui suit."],
                    ['q' => "Dans un court texte, comment le point aide-t-il le lecteur ?", 'c' => ["il relie tous les mots", "il montre qu'une idée ou une phrase est terminée", "il transforme l'affirmation en question", "il indique toujours une citation"], 'a' => 1, 'e' => "Le point signale que la phrase ou l'idée est achevée."],
                    ['q' => "Quelle phrase convient pour ordonner des étapes ?", 'c' => ["أولًا؟ اغسل يديك! ثم جهّز الأدوات.", "أولًا: اغسل يديك؟ ثم جهّز الأدوات.", "أولًا، اغسل يديك، ثم جهّز الأدوات،", "أولًا، اغسل يديك. ثم جهّز الأدوات."], 'a' => 3, 'e' => "La virgule après « أولًا » détache l'expression d'ordre, et le point sépare deux étapes complètes."],
                    ['q' => "Où peut-on utiliser une virgule pour détacher un complément d'introduction du reste de la phrase ?", 'c' => ["après « في المساء » dans « في المساء، قرأت كتابًا. »", "toujours après le verbe", "toujours avant un point d'interrogation", "à la fin de chaque ligne"], 'a' => 0, 'e' => "La virgule après le complément d'introduction le sépare de la phrase principale."],
                    ['q' => "Quelle écriture rend la liste plus claire ? « أحب الفواكه: التفاح والموز والبرتقال »", 'c' => ["التفاح؟ والموز! والبرتقال", "التفاح: والموز، والبرتقال؟", "التفاح؛ والموز؛ والبرتقال!", "التفاح، والموز، والبرتقال"], 'a' => 3, 'e' => "Les virgules entre les éléments de la liste en marquent clairement les limites."],
                    ['q' => "Quand le point peut-il être préférable à la virgule ?", 'c' => ["quand on cite seulement deux mots semblables", "quand une idée complète se termine et qu'une nouvelle commence", "au début de chaque mot", "quand on écrit une question dans une citation"], 'a' => 1, 'e' => "Le point est plus fort que la virgule et convient au passage entre phrases ou idées complètes."],
                    ['q' => "Quel texte paraît le mieux organisé ?", 'c' => ["خرجت من البيت. ذهبت إلى المكتبة. ثم عدت مساءً.", "خرجت من البيت، ذهبت إلى المكتبة، ثم عدت مساءً؟", "خرجت من البيت! ذهبت إلى المكتبة: ثم عدت مساءً،", "خرجت؟ من البيت. ذهبت! إلى المكتبة."], 'a' => 0, 'e' => "Les points séparent des événements complets, ce qui rend leur suite claire."],
                    ['q' => "Un texte contient une idée principale suivie d'un exemple. Quel signe peut aider à introduire l'exemple ?", 'c' => ["؟", "!", ":", "؛ toujours"], 'a' => 2, 'e' => "Les deux-points conviennent pour présenter un exemple ou un détail qui explique ce qui précède."],
                ],
            ],
            [
                'title' => "Corriger les erreurs de ponctuation",
                'description' => "Repérer et corriger les erreurs de ponctuation fréquentes dans de courtes phrases et de petits textes.",
                'questions' => [
                    ['q' => "Quelle correction convient à la phrase « هل وصلت إلى المدرسة. » ?", 'c' => ["هل وصلت إلى المدرسة؟", "هل وصلت إلى المدرسة!", "هل وصلت إلى المدرسة،", "هل وصلت إلى المدرسة:"], 'a' => 0, 'e' => "C'est une question : elle doit se terminer par un point d'interrogation."],
                    ['q' => "La phrase « ما أجمل هذا المكان؟ » est en réalité une exclamation. Quelle est la bonne correction ?", 'c' => ["ما أجمل هذا المكان.", "ما أجمل هذا المكان!", "ما أجمل هذا المكان،", "ما أجمل هذا المكان:"], 'a' => 1, 'e' => "La phrase exprime l'admiration, non une question : le point d'exclamation convient."],
                    ['q' => "Que penser de la phrase « اشتريت تفاحًا، وموزًا، وبرتقالًا. » ?", 'c' => ["il faut remplacer toutes les virgules par des points d'interrogation", "elle est correcte : les virgules séparent les éléments de la liste", "il faut supprimer le point", "il faut mettre un point d'exclamation après chaque élément"], 'a' => 1, 'e' => "Les virgules séparent les éléments de la liste et le point termine naturellement la phrase."],
                    ['q' => "Corrigez la phrase : « قال المعلم، ابدؤوا العمل. »", 'c' => ["قال المعلم؟ «ابدؤوا العمل.»", "قال المعلم! ابدؤوا العمل،", "قال المعلم: «ابدؤوا العمل.»", "قال المعلم؛ ابدؤوا العمل؟"], 'a' => 2, 'e' => "Après un verbe de parole, on met les deux-points puis la parole entre guillemets."],
                    ['q' => "Quelle est la meilleure correction de « عندي سؤال، متى يبدأ الاختبار؟ » ?", 'c' => ["عندي سؤال! متى يبدأ الاختبار.", "عندي سؤال؟ متى يبدأ الاختبار!", "عندي سؤال: متى يبدأ الاختبار؟", "عندي سؤال؛ متى يبدأ الاختبار،"], 'a' => 2, 'e' => "Les deux-points introduisent la question qui précise « عندي سؤال »."],
                    ['q' => "Dans « انتهى الدرس، خرج الطلاب. », comment mieux séparer les deux idées ?", 'c' => ["انتهى الدرس؟ خرج الطلاب!", "انتهى الدرس: خرج الطلاب؟", "انتهى الدرس. خرج الطلاب.", "انتهى الدرس، خرج الطلاب،"], 'a' => 2, 'e' => "Chaque partie exprime une idée complète : le point les sépare plus clairement."],
                    ['q' => "Laquelle de ces phrases doit être corrigée ?", 'c' => ["متى تبدأ العطلة؟", "يا له من يوم جميل!", "اشتريت: خبزًا وحليبًا.", "وصلت إلى المنزل."], 'a' => 2, 'e' => "Les deux-points sont inutiles après le verbe « اشتريت » : on écrit « اشتريت خبزًا وحليبًا »."],
                    ['q' => "Corrigez : « أريد ثلاثة أشياء، قلم، دفتر، وكتاب. »", 'c' => ["أريد ثلاثة أشياء؟ قلمًا! ودفترًا؟ وكتابًا.", "أريد ثلاثة أشياء: قلمًا، ودفترًا، وكتابًا.", "أريد ثلاثة أشياء؛ قلمًا، ودفترًا، وكتابًا!", "أريد ثلاثة أشياء. قلمًا ودفترًا وكتابًا؟"], 'a' => 1, 'e' => "Les deux-points précèdent la liste et les virgules en séparent les éléments."],
                    ['q' => "Quelle phrase a une ponctuation qui correspond à son sens ?", 'c' => ["احذر؟ السيارة تقترب.", "احذر: السيارة تقترب؟", "احذر! السيارة تقترب؟", "احذر! السيارة تقترب."], 'a' => 3, 'e' => "L'avertissement prend un point d'exclamation, et l'information qui suit, une phrase déclarative, un point."],
                    ['q' => "Laila a dit « سأعود غدًا ». Quelle est la forme la plus claire ?", 'c' => ["قالت ليلى؟ «سأعود غدًا!»", "قالت ليلى، «سأعود غدًا؟»", "قالت ليلى: «سأعود غدًا.»", "قالت ليلى؛ «سأعود غدًا،»"], 'a' => 2, 'e' => "Les deux-points conviennent après le verbe de parole et le point clôt la phrase déclarative à l'intérieur des guillemets."],
                ],
            ],
            [
                'title' => "La ponctuation dans les écrits du quotidien",
                'description' => "Appliquer la ponctuation à des messages, annonces, notes et situations de la vie courante.",
                'questions' => [
                    ['q' => "Quel court message qui commence par une question sur l'heure est correctement ponctué ?", 'c' => ["مرحبًا؟ متى يبدأ الاجتماع.", "مرحبًا، متى يبدأ الاجتماع؟", "مرحبًا! متى يبدأ الاجتماع،", "مرحبًا: متى يبدأ الاجتماع!"], 'a' => 1, 'e' => "La virgule sépare la salutation de la question, et le point d'interrogation clôt la question."],
                    ['q' => "Dans l'annonce « تنبيه: المحل مغلق اليوم », quel est le rôle des deux-points ?", 'c' => ["transformer la phrase en question", "présenter l'information qui explique l'avertissement", "séparer deux noms", "exprimer l'étonnement"], 'a' => 1, 'e' => "Les deux-points introduisent le texte qui précise le contenu de l'avertissement."],
                    ['q' => "Quelle note paraît la plus claire ?", 'c' => ["موعد الحصة؟ الساعة الثامنة صباحًا!", "موعد الحصة، الساعة الثامنة صباحًا،", "موعد الحصة: الساعة الثامنة صباحًا.", "موعد الحصة! الساعة الثامنة صباحًا؟"], 'a' => 2, 'e' => "Les deux-points conviennent avant d'indiquer l'heure du cours."],
                    ['q' => "Dans un message à un ami, quelle formulation convient pour une question directe ?", 'c' => ["هل تستطيع إحضار الكتاب غدًا.", "هل تستطيع إحضار الكتاب غدًا!", "هل تستطيع إحضار الكتاب غدًا،", "هل تستطيع إحضار الكتاب غدًا؟"], 'a' => 3, 'e' => "Une question directe se termine par un point d'interrogation."],
                    ['q' => "Quelle phrase convient pour un court panneau d'avertissement ?", 'c' => ["احذر من الأرضية المبللة؟", "احذر من الأرضية المبللة،", "احذر من الأرضية المبللة!", "احذر من الأرضية المبللة:"], 'a' => 2, 'e' => "Un avertissement fort s'écrit avec un point d'exclamation."],
                    ['q' => "Quelle forme convient pour une liste de courses ?", 'c' => ["أحتاج إلى؟ خبز! وحليب! وأرز!", "أحتاج إلى؛ خبز، وحليب، وأرز؟", "أحتاج إلى: خبز، وحليب، وأرز.", "أحتاج إلى. خبز وحليب وأرز؟"], 'a' => 2, 'e' => "Les deux-points précèdent la liste et les virgules séparent les éléments."],
                    ['q' => "Quelle formulation convient pour une note de bureau ?", 'c' => ["الاجتماع الساعة 10:00؟ يرجى الحضور قبل الموعد!", "الاجتماع الساعة 10:00! يرجى الحضور قبل الموعد،", "الاجتماع الساعة 10:00، يرجى الحضور؟", "الاجتماع الساعة 10:00؛ يرجى الحضور قبل الموعد."], 'a' => 3, 'e' => "Le point-virgule relie deux phrases liées : l'heure de la réunion et la demande de venir avant l'heure."],
                    ['q' => "Vous recevez ce message : « هل تحتاج إلى مساعدة؟ ». Que comprenez-vous grâce à la ponctuation ?", 'c' => ["l'expéditeur annonce une nouvelle", "l'expéditeur pose une question et attend une réponse", "l'expéditeur exprime l'étonnement", "l'expéditeur commence une liste"], 'a' => 1, 'e' => "Le point d'interrogation montre que le message est une question qui attend une réponse."],
                    ['q' => "Quelle formulation convient à un court message de remerciement ?", 'c' => ["شكرًا لك على مساعدتك؟", "شكرًا لك على مساعدتك،", "شكرًا لك على مساعدتك:", "شكرًا لك على مساعدتك!"], 'a' => 3, 'e' => "Un remerciement porte une émotion positive : il peut se terminer par un point d'exclamation."],
                    ['q' => "Quelle phrase montre bien l'usage de plusieurs signes de ponctuation ?", 'c' => ["قال المدير؟ «أحسنتم.» ثم أضاف، «نلتقي غدًا!»", "قال المدير: «أحسنتم!» ثم أضاف: «نلتقي غدًا.»", "قال المدير، «أحسنتم؟» ثم أضاف! «نلتقي غدًا،»", "قال المدير؛ أحسنتم! ثم أضاف؟ نلتقي غدًا."], 'a' => 1, 'e' => "Les deux-points introduisent les paroles du directeur, l'exclamation convient à « أحسنتم ! » et le point à « نلتقي غدًا. »"],
                ],
            ],
            [
                'title' => "Révision générale sur la ponctuation",
                'description' => "Vérifier sa capacité à choisir le bon signe et à corriger de courts textes dans diverses situations.",
                'questions' => [
                    ['q' => "Laquelle de ces phrases est correctement ponctuée ?", 'c' => ["هل قرأت الكتاب.", "هل قرأت الكتاب،", "هل قرأت الكتاب؟", "هل قرأت الكتاب:"], 'a' => 2, 'e' => "C'est une question directe : elle demande un point d'interrogation."],
                    ['q' => "Quelle phrase est correctement ponctuée avant une liste ?", 'c' => ["لدي أربعة أهداف؟ القراءة، والكتابة، والرياضة، والسفر.", "لدي أربعة أهداف! القراءة، والكتابة، والرياضة، والسفر.", "لدي أربعة أهداف، القراءة، والكتابة، والرياضة، والسفر.", "لدي أربعة أهداف: القراءة، والكتابة، والرياضة، والسفر."], 'a' => 3, 'e' => "Les deux-points précèdent la liste et les virgules en séparent les éléments."],
                    ['q' => "Lisez : « كان الطريق مزدحمًا؛ وصلنا متأخرين. » Que relie le point-virgule ?", 'c' => ["deux questions différentes", "deux listes de mots", "l'embouteillage et le retard comme conséquence", "deux citations"], 'a' => 2, 'e' => "Il relie une cause et sa conséquence dans deux phrases liées."],
                    ['q' => "Choisissez la ponctuation : « قالت المعلمة ___ اجتهدوا في المراجعة. »", 'c' => ["؟ «اجتهدوا في المراجعة.»", "، «اجتهدوا في المراجعة!»", "؛ «اجتهدوا في المراجعة،»", ": «اجتهدوا في المراجعة.»"], 'a' => 3, 'e' => "Après le verbe de parole viennent les deux-points, puis la parole entre guillemets."],
                    ['q' => "Dans « ما أجمل البحر! », quelle est la fonction du point d'exclamation ?", 'c' => ["demander une réponse", "séparer les éléments d'une liste", "exprimer l'émotion et l'admiration", "introduire une explication"], 'a' => 2, 'e' => "La phrase exprime l'admiration, que le point d'exclamation traduit."],
                    ['q' => "Que penser de « ذهبت إلى المكتبة، قرأت كتابًا، ثم عدت إلى المنزل. » ?", 'c' => ["il faut transformer chaque virgule en point d'interrogation", "on peut garder les virgules, car les actions s'enchaînent dans une seule phrase", "il faut mettre un point d'exclamation après chaque verbe", "il faut supprimer toute la ponctuation"], 'a' => 1, 'e' => "Les virgules relient ici des actions successives dans une même phrase : l'emploi est acceptable."],
                    ['q' => "Quelle affirmation décrit correctement la différence entre « . » et « ؟ » ?", 'c' => ["le point sert à la question, le point d'interrogation à l'affirmation", "le point termine une affirmation complète, le point d'interrogation termine une question", "les deux ont la même fonction", "les deux servent seulement dans les listes"], 'a' => 1, 'e' => "Le point ferme une phrase déclarative complète, le point d'interrogation ferme une question."],
                    ['q' => "Un auteur écrit : « أولًا، نقرأ النص. ثانيًا، نحدد الفكرة الرئيسية. » Quel est le rôle des virgules et des points ?", 'c' => ["les virgules terminent chaque étape, les points ouvrent la question", "les deux ne servent qu'aux listes", "les virgules détachent les mots d'ordre, les points séparent les étapes complètes", "les points marquent la citation"], 'a' => 2, 'e' => "La virgule après « أولًا » et « ثانيًا » détache l'expression d'ordre, et le point termine chaque étape."],
                    ['q' => "Quelle formulation convient à une question précédée d'une courte introduction ?", 'c' => ["لدي سؤال: متى تبدأ المسابقة؟", "لدي سؤال، متى تبدأ المسابقة.", "لدي سؤال! متى تبدأ المسابقة،", "لدي سؤال؟ متى تبدأ المسابقة!"], 'a' => 0, 'e' => "Les deux-points introduisent la question qui précise « لدي سؤال », puis la phrase se termine par un point d'interrogation."],
                    ['q' => "Quelle est la meilleure méthode pour relire la ponctuation d'un court paragraphe ?", 'c' => ["mettre un point d'exclamation après chaque phrase", "lire chaque phrase en se demandant ce qu'elle signifie et à quoi sert chaque signe", "supprimer tous les signes puis rendre le texte", "n'utiliser qu'un seul signe dans tout le paragraphe"], 'a' => 1, 'e' => "Il faut relier chaque signe au sens et à la fonction réels de la phrase, et non l'utiliser au hasard."],
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
