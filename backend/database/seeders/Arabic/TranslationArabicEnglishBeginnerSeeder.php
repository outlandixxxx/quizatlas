<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class TranslationArabicEnglishBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'translation-arabic-english')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Phrases simples de tous les jours",
                'description' => "Traduire de courtes phrases du quotidien entre l'arabe et l'anglais en respectant le sens et une construction naturelle.",
                'questions' => [
                    ['q' => "Quelle est la meilleure traduction anglaise de « أنا طالب. » ?", 'c' => ["I have a student.", "I am a student.", "I am study.", "I do student."], 'a' => 1, 'e' => "En anglais, on utilise le verbe « be » avec le nom : I am a student."],
                    ['q' => "Quelle est la meilleure traduction arabe de « She lives in Rabat. » ?", 'c' => ["هي تذهب إلى الرباط.", "هي تعيش في الرباط.", "هي تعمل في الرباط.", "هي تزور الرباط."], 'a' => 1, 'e' => "« lives » signifie « habite » : هي تعيش (ou تسكن) في الرباط."],
                    ['q' => "Choisis la traduction anglaise correcte de « هي تحب القراءة. »", 'c' => ["She is like reading.", "She likes reading.", "She has reading.", "She like read."], 'a' => 1, 'e' => "À la 3e personne du singulier, on écrit « likes », suivi de « reading »."],
                    ['q' => "Que signifie « We are ready. » ?", 'c' => ["نحن متعبون.", "نحن مستعدون.", "نحن متأخرون.", "نحن غائبون."], 'a' => 1, 'e' => "« ready » veut dire « prêt » : نحن مستعدون."],
                    ['q' => "Quelle est la traduction anglaise de « الكتاب على الطاولة. » ?", 'c' => ["The book is in the table.", "The book is on the table.", "The book has on the table.", "The book are on the table."], 'a' => 1, 'e' => "« on » indique que le livre est posé sur la surface de la table."],
                    ['q' => "Quelle est la traduction arabe de « I am looking for my keys. » ?", 'c' => ["أجد مفاتيحي.", "أبحث عن مفاتيحي.", "أشتري مفاتيحي.", "أغلق مفاتيحي."], 'a' => 1, 'e' => "« look for » signifie « chercher » : أبحث عن مفاتيحي."],
                    ['q' => "Quelle est la traduction anglaise de « نحن ندرس الإنجليزية. » ?", 'c' => ["We studies English.", "We study English.", "We are study English.", "We studying English."], 'a' => 1, 'e' => "Avec « we », le verbe reste à la forme de base : study, sans s."],
                    ['q' => "Que signifie « The train arrives at eight o'clock. » ?", 'c' => ["يغادر القطار في الساعة الثامنة.", "يصل القطار في الساعة الثامنة.", "يتوقف القطار لمدة ثماني ساعات.", "يستغرق القطار ثماني ساعات."], 'a' => 1, 'e' => "« arrives » veut dire « arrive » et « at eight o'clock » « à huit heures »."],
                    ['q' => "Quelle est la meilleure traduction anglaise de « أحتاج إلى مساعدة. » ?", 'c' => ["I am need help.", "I need some help.", "I needs some help.", "I need to a help."], 'a' => 1, 'e' => "« need » se construit directement avec le nom : I need some help."],
                    ['q' => "Quelle est la traduction arabe de « Please close the door. » ?", 'c' => ["من فضلك افتح الباب.", "من فضلك أغلق الباب.", "من فضلك نظف الباب.", "من فضلك اترك الباب."], 'a' => 1, 'e' => "« close » signifie « fermer » et « please » « s'il te plaît »."],
                ],
            ],
            [
                'title' => "Les temps : présent, passé et futur",
                'description' => "Traduire des phrases au présent, au passé et au futur en gardant la bonne relation de temps entre les événements.",
                'questions' => [
                    ['q' => "Quelle est la meilleure traduction anglaise de « سأزور صديقي غدًا. » ?", 'c' => ["I visited my friend tomorrow.", "I will visit my friend tomorrow.", "I was visiting my friend yesterday.", "I visit my friend last week."], 'a' => 1, 'e' => "« سأزور » exprime le futur et « غدًا » le confirme : will visit… tomorrow."],
                    ['q' => "Quelle est la meilleure traduction arabe de « I finished my work. » ?", 'c' => ["سأنهي عملي.", "أنهيت عملي.", "أنهي عملي كل يوم.", "لا أنهي عملي."], 'a' => 1, 'e' => "« finished » est un prétérit : l'action est terminée."],
                    ['q' => "Quelle est la meilleure traduction de « كنت أقرأ عندما اتصل بي أخي. » ?", 'c' => ["I read when my brother was calling me.", "I was reading when my brother called me.", "I will read when my brother called me.", "I am reading when my brother called me."], 'a' => 1, 'e' => "L'action en cours se met au past continuous, l'action qui l'interrompt au past simple."],
                    ['q' => "Quelle est la traduction arabe de « We will leave after lunch. » ?", 'c' => ["غادرنا قبل الغداء.", "سنغادر بعد الغداء.", "نغادر أثناء الغداء.", "كنا نغادر غدًا."], 'a' => 1, 'e' => "« will leave » exprime le futur : سنغادر."],
                    ['q' => "Quelle est la meilleure traduction de « كان الجو باردًا. » ?", 'c' => ["It will be cold.", "It was cold.", "It is cold yesterday.", "It has cold."], 'a' => 1, 'e' => "Le temps qu'il faisait dans le passé s'exprime avec « was »."],
                    ['q' => "Quelle est la traduction arabe de « She has already eaten. » ?", 'c' => ["ستأكل لاحقًا.", "لقد أكلت بالفعل.", "كانت تشتري الطعام.", "لم تأكل بعد."], 'a' => 1, 'e' => "« has already eaten » indique que l'action est déjà accomplie."],
                    ['q' => "Quelle est la meilleure traduction de « غدًا سأعمل من المنزل. » ?", 'c' => ["Tomorrow, I worked from home.", "Tomorrow, I will work from home.", "Yesterday, I will work from home.", "Tomorrow, I was working from home."], 'a' => 1, 'e' => "« غدًا » et « سأعمل » renvoient au futur : will work."],
                    ['q' => "Quelle est la traduction arabe de « It was raining all morning. » ?", 'c' => ["ستمطر طوال الصباح.", "كانت السماء تمطر طوال الصباح.", "أمطرت غدًا.", "توقفت الأمطار طوال الصباح."], 'a' => 1, 'e' => "« was raining » décrit une action qui durait dans le passé ; « all morning » veut dire « toute la matinée »."],
                    ['q' => "Quelle est la meilleure traduction de « ذهبت إلى السوق أمس. » ?", 'c' => ["I go to the market yesterday.", "I went to the market yesterday.", "I will go to the market yesterday.", "I have gone to the market yesterday."], 'a' => 1, 'e' => "Avec « yesterday », on emploie le prétérit : went."],
                    ['q' => "Quelle est la traduction anglaise de « كان يذهب إلى النادي كل يوم. » ?", 'c' => ["He went to the club tomorrow.", "He used to go to the club every day.", "He will go to the club every day.", "He goes to the club yesterday."], 'a' => 1, 'e' => "« كان يذهب » exprime une habitude passée : used to go."],
                ],
            ],
            [
                'title' => "Pronoms et possessifs",
                'description' => "Traduire pronoms, possessifs et démonstratifs en gardant la personne, le genre et le nombre.",
                'questions' => [
                    ['q' => "Quelle est la traduction anglaise de « هذا كتابي. » ?", 'c' => ["This are my book.", "This is my book.", "These is my book.", "This is mine book."], 'a' => 1, 'e' => "« This is » va avec le singulier, et le possessif devant le nom est « my »."],
                    ['q' => "Quelle est la traduction arabe de « These are our friends. » ?", 'c' => ["هذا صديقنا.", "هؤلاء أصدقاؤنا.", "هؤلاء أعداؤنا.", "تلك معلمتنا."], 'a' => 1, 'e' => "« These are » renvoie à un pluriel proche, « our friends » à « أصدقاؤنا »."],
                    ['q' => "Quelle est la bonne traduction de « أحب سيارتي لأنها مريحة. » ?", 'c' => ["I love mine car because he is comfortable.", "I love my car because it is comfortable.", "I loves my car because it are comfortable.", "I love my cars because they is comfortable."], 'a' => 1, 'e' => "« car » est singulier et non humain : on reprend avec « it », et « my » se place avant le nom."],
                    ['q' => "Quelle est la traduction arabe de « I often talk to her. » ?", 'c' => ["أراها غالبًا.", "أتحدث إليها غالبًا.", "أكتب عنها غالبًا.", "أسمعها غالبًا."], 'a' => 1, 'e' => "« talk to her » signifie « lui parler » ; « her » est le pronom complément féminin."],
                    ['q' => "Quelle est la traduction arabe de « Marie took her bag. » ?", 'c' => ["أخذت ماري حقيبتهم.", "أخذت ماري حقيبته.", "أخذت ماري حقيبتها.", "أخذ ماري حقيبتها."], 'a' => 2, 'e' => "« her » renvoie à Marie, donc « حقيبتها » ; le verbe est au féminin."],
                    ['q' => "Quelle est la traduction de « هؤلاء الطالبات مجتهدات. » ?", 'c' => ["These student is hardworking.", "This students is hardworking.", "These students are hardworking.", "Those student are hardwork."], 'a' => 2, 'e' => "Pluriel proche : « these students » avec le verbe « are »."],
                    ['q' => "Quelle est la traduction anglaise de « أعطيتها الكتاب. » (elle = une seule femme) ?", 'c' => ["I gave she the book.", "I gave them the book.", "I gave her the book.", "I her gave the book."], 'a' => 2, 'e' => "« her » est le pronom complément féminin singulier et se place après le verbe."],
                    ['q' => "Quelle est la traduction arabe de « I know them. » ?", 'c' => ["أنا أتحدث إليهم.", "أنا أعرفه.", "أنا أعرفهم.", "أنا أراها فقط."], 'a' => 2, 'e' => "« them » est le pronom complément pluriel : « أعرفهم »."],
                    ['q' => "Quelle est la traduction anglaise de « هذه حقيبتها. » ?", 'c' => ["These are her bag.", "This is his bag.", "This is her bag.", "This is hers bag."], 'a' => 2, 'e' => "« هذه » renvoie à un singulier féminin, et « حقيبتها » à « her bag »."],
                    ['q' => "Quelle est la traduction de « هم يحبون مدرستهم. » ?", 'c' => ["They loves their school.", "They love there school.", "They love their school.", "They love theirs school."], 'a' => 2, 'e' => "« their » est le possessif placé avant le nom ; « there » désigne un lieu."],
                ],
            ],
            [
                'title' => "Adjectifs et description",
                'description' => "Traduire des adjectifs et des descriptions entre l'arabe et l'anglais en respectant l'ordre des mots et le nombre.",
                'questions' => [
                    ['q' => "Quelle est la traduction anglaise de « رجل طويل » ?", 'c' => ["an tall man", "a man tall", "a tall man", "a tall men"], 'a' => 2, 'e' => "En anglais, l'adjectif se place avant le nom : a tall man."],
                    ['q' => "Quelle est la traduction anglaise de « امرأة ذكية » ?", 'c' => ["a woman smart", "an smart woman", "a smart woman", "a smart women"], 'a' => 2, 'e' => "L'adjectif « smart » précède « woman » (singulier), avec l'article « a »."],
                    ['q' => "Quelle est la traduction arabe de « large houses » ?", 'c' => ["بيوت صغيرة", "بيت كبير", "بيوت كبيرة", "بيوت قديمة"], 'a' => 2, 'e' => "« houses » est un pluriel et « large » veut dire « grand »."],
                    ['q' => "Quelle est la traduction correcte de « سيارة جديدة » ?", 'c' => ["an new car", "a newly car", "a new car", "new a car"], 'a' => 2, 'e' => "« new » précède « car », et on emploie « a » car « new » commence par une consonne."],
                    ['q' => "Quelle est la traduction anglaise de « أصدقاء قدامى » ?", 'c' => ["olds friends", "old friend", "old friends", "friend old"], 'a' => 2, 'e' => "L'adjectif anglais est invariable : « old friends »."],
                    ['q' => "Quelle est la traduction anglaise de « المدن الجميلة » ?", 'c' => ["a beautiful cities", "the beautiful city", "the beautiful cities", "the beautifully cities"], 'a' => 2, 'e' => "« cities » est au pluriel et « beautiful » ne change pas."],
                    ['q' => "Quelle est la traduction arabe de « a small house » ?", 'c' => ["بيت كبير", "بيوت صغيرة", "بيت صغير", "منزل قديم"], 'a' => 2, 'e' => "« small » signifie « petit » et « house » est au singulier."],
                    ['q' => "Quelle est la traduction anglaise de « فكرة جيدة » ?", 'c' => ["a idea good", "an good idea", "a good idea", "good a idea"], 'a' => 2, 'e' => "Adjectif avant le nom, avec l'article « a » devant « good »."],
                    ['q' => "Quelle est la traduction la plus naturelle de « بيت كبير أخضر » ?", 'c' => ["a green big house", "a house big green", "a big green house", "big a green house"], 'a' => 2, 'e' => "En anglais, la taille se place avant la couleur : a big green house."],
                    ['q' => "Quelle est la traduction anglaise de « الطقس بارد جدًا. » ?", 'c' => ["The weather is cold very.", "The weather very cold is.", "The weather is very cold.", "The weather are very cold."], 'a' => 2, 'e' => "Sujet, verbe « is », puis « very » devant l'adjectif."],
                ],
            ],
            [
                'title' => "Prépositions et expressions courantes",
                'description' => "Choisir la bonne préposition et des constructions naturelles plutôt que de traduire mot à mot.",
                'questions' => [
                    ['q' => "Quelle est la traduction anglaise de « أعيش في المغرب. » ?", 'c' => ["I live at Morocco.", "I live on Morocco.", "I live in Morocco.", "I live by Morocco."], 'a' => 2, 'e' => "Avec les pays, on utilise « in »."],
                    ['q' => "Quelle est la traduction anglaise de « أذهب إلى المدرسة كل يوم. » ?", 'c' => ["I go in school every day.", "I go at school every day.", "I go to school every day.", "I go for school every day."], 'a' => 2, 'e' => "L'expression naturelle est « go to school »."],
                    ['q' => "Que signifie « He comes from Paris. » ?", 'c' => ["هو يسافر إلى باريس.", "هو يذهب إلى باريس.", "هو من باريس.", "هو يعمل في باريس."], 'a' => 2, 'e' => "« comes from » indique l'origine : il vient de Paris."],
                    ['q' => "Quelle est la traduction anglaise de « على الكرسي » ?", 'c' => ["at the chair", "in the chair", "on the chair", "from the chair"], 'a' => 2, 'e' => "« on » s'utilise pour ce qui est posé sur une surface."],
                    ['q' => "Quelle est la traduction anglaise de « أفكر فيك. » ?", 'c' => ["I am thinking at you.", "I am thinking on you.", "I am thinking of you.", "I am thinking from you."], 'a' => 2, 'e' => "« thinking of you » est une expression naturelle."],
                    ['q' => "Quelle est la traduction arabe de « I am talking with my teacher. » ?", 'c' => ["أذهب إلى أستاذي.", "أتحدث عن أستاذي.", "أتحدث مع أستاذي.", "أكتب لأستاذي."], 'a' => 2, 'e' => "« with » veut dire « avec »."],
                    ['q' => "Quelle est la traduction anglaise de « من أجل عائلتي » ?", 'c' => ["on my family", "from my family", "for my family", "at my family"], 'a' => 2, 'e' => "« for » exprime le but ou le bénéficiaire."],
                    ['q' => "Quelle est la traduction anglaise de « أعيش مع أخي. » ?", 'c' => ["I live on my brother.", "I live for my brother.", "I live with my brother.", "I live from my brother."], 'a' => 2, 'e' => "« with » exprime la compagnie."],
                    ['q' => "Quelle est la traduction anglaise de « هو ينتظر الحافلة. » ?", 'c' => ["He is waiting at the bus.", "He is waiting the bus.", "He is waiting to the bus.", "He is waiting for the bus."], 'a' => 3, 'e' => "« wait » se construit avec « for » devant ce qu'on attend."],
                    ['q' => "Quelle est la traduction anglaise de « أنا مهتم بالفن. » ?", 'c' => ["I am interested by art.", "I am interested on art.", "I am interested at art.", "I am interested in art."], 'a' => 3, 'e' => "« interested » est suivi de « in » : interested in."],
                ],
            ],
            [
                'title' => "Dialogues et situations quotidiennes",
                'description' => "Traduire des échanges courants en gardant le niveau de politesse et l'intention de celui qui parle.",
                'questions' => [
                    ['q' => "Quelle est la traduction naturelle de « كيف حالك؟ » dans une situation ordinaire ?", 'c' => ["What are you?", "How you are?", "How do you?", "How are you?"], 'a' => 3, 'e' => "« How are you? » est la formule courante pour demander des nouvelles."],
                    ['q' => "Quelle est la traduction arabe de « I would like a coffee, please. » ?", 'c' => ["لا أريد قهوة.", "أكره القهوة، من فضلك.", "شربت قهوة أمس.", "أودّ قهوة، من فضلك."], 'a' => 3, 'e' => "« I would like » est une formule polie qui veut dire « je voudrais »."],
                    ['q' => "Que signifie « Excuse me, where is the station? » ?", 'c' => ["من فضلك، أين المطار؟", "شكرًا، أين الفندق؟", "عذرًا، متى يصل القطار؟", "عذرًا، أين المحطة؟"], 'a' => 3, 'e' => "« station » est la gare ou la station, et « where is » demande un lieu."],
                    ['q' => "Quelle est la traduction naturelle de « لا تقلق! » dite à un ami ?", 'c' => ["Not worry!", "No worry you!", "Don't to worry!", "Don't worry!"], 'a' => 3, 'e' => "L'impératif négatif se forme avec « Don't » + verbe."],
                    ['q' => "Que signifie « See you later! » ?", 'c' => ["شكرًا لك!", "إلى الأبد!", "صباح الخير!", "أراك لاحقًا!"], 'a' => 3, 'e' => "C'est une formule d'au revoir : « à plus tard »."],
                    ['q' => "Quelle est la réponse naturelle à « Thank you very much » ?", 'c' => ["Never welcome.", "Goodbye very much.", "Please thank.", "You're welcome."], 'a' => 3, 'e' => "« You're welcome » est la réponse habituelle à un remerciement."],
                    ['q' => "Quelle est la traduction polie de « هل يمكنك مساعدتي؟ » ?", 'c' => ["Could helping you me?", "Could you helping me?", "Can you to help me?", "Could you help me?"], 'a' => 3, 'e' => "Après « could », le verbe reste à la forme de base : Could you help me?"],
                    ['q' => "Quelle est la traduction de « ما اسمك؟ » ?", 'c' => ["Who is your name?", "What your name is?", "How is your name?", "What is your name?"], 'a' => 3, 'e' => "On demande le nom avec « What is your name? »."],
                    ['q' => "Quelle est la traduction de « آسف على التأخير. » ?", 'c' => ["I sorry am late.", "I'm sorry I late.", "I'm sorry for I am late.", "I'm sorry I am late."], 'a' => 3, 'e' => "On s'excuse en disant « I'm sorry » suivi d'une phrase complète : I am late."],
                    ['q' => "Quelle est la meilleure traduction de la demande polie « من فضلك، هل يمكنني الدخول؟ » ?", 'c' => ["You come in.", "Enter now!", "Why do you enter?", "Excuse me, may I come in?"], 'a' => 3, 'e' => "Il faut garder la politesse de la demande, ce que fait « may I »."],
                ],
            ],
            [
                'title' => "Contexte et expressions figées",
                'description' => "Choisir le bon équivalent d'un mot ou d'une expression selon le contexte et les associations de mots courantes en anglais.",
                'questions' => [
                    ['q' => "Dans un contexte qui parle du corps humain, quel est le meilleur équivalent anglais de « عين » ?", 'c' => ["watch", "spring", "source", "eye"], 'a' => 3, 'e' => "Dans le contexte du corps, « عين » veut dire « eye »."],
                    ['q' => "Comment traduire naturellement « عين الماء » ?", 'c' => ["a water watch", "a water eye", "an eye spring", "a spring"], 'a' => 3, 'e' => "« عين الماء » désigne une source naturelle : a spring."],
                    ['q' => "Quelle est la traduction de « اتخذ قرارًا مهمًا. » ?", 'c' => ["He found an important decision.", "He did an important decision.", "He built an important decision.", "He made an important decision."], 'a' => 3, 'e' => "On dit naturellement « make a decision »."],
                    ['q' => "Quelle est la traduction de « أخذ دشًا. » ?", 'c' => ["He had took a shower.", "He made a shower.", "He did a shower.", "He took a shower."], 'a' => 3, 'e' => "L'association habituelle est « take a shower »."],
                    ['q' => "Quelle est la traduction de « سألت سؤالًا. » ?", 'c' => ["I told a question.", "I made a question.", "I did a question.", "I asked a question."], 'a' => 3, 'e' => "On dit « ask a question »."],
                    ['q' => "Quelle est la traduction de « ضرب المعلم مثلًا. » ?", 'c' => ["The teacher struck an example.", "The teacher hit an example.", "The teacher beat an example.", "The teacher gave an example."], 'a' => 3, 'e' => "« ضرب مثلًا » est une expression figée : on dit en anglais « give an example »."],
                    ['q' => "Dans « We sat on the river bank. », quel est le bon équivalent arabe de « bank » ?", 'c' => ["بنك", "مصرف", "قرض", "ضفة"], 'a' => 3, 'e' => "Le contexte (« river ») montre qu'il s'agit de la rive, pas d'une banque."],
                    ['q' => "Quelle est la traduction de « يوم عطلة » ?", 'c' => ["a free-day", "a holiday day", "an off day", "a day off"], 'a' => 3, 'e' => "L'expression habituelle est « a day off »."],
                    ['q' => "Quelle est la traduction de « أصبت بنزلة برد. » ?", 'c' => ["I put a cold.", "I made a cold.", "I did a cold.", "I caught a cold."], 'a' => 3, 'e' => "On dit « catch a cold » pour « attraper un rhume »."],
                    ['q' => "Quel est l'équivalent arabe de « take a break » ?", 'c' => ["ضرب استراحة", "كسر استراحة", "صنع استراحة", "أخذ استراحة"], 'a' => 3, 'e' => "« take a break » correspond à « أخذ استراحة »."],
                ],
            ],
            [
                'title' => "Traduire de courts textes",
                'description' => "Appliquer la traduction à de courts paragraphes en gardant la cohérence des temps, des personnes et des liens entre les phrases.",
                'questions' => [
                    ['q' => "Quelle est la meilleure traduction de : « في صباح يوم الاثنين ذهب سامي إلى السوق. اشترى خبزًا ثم عاد إلى البيت. » ?", 'c' => ["On Monday morning, Sami went to the market. Sami buys bread and then going home.", "On Monday morning, Sami goes to the market. He buys bread and then returned home.", "On Monday morning, Sami will go to the market. He bought bread and then went back home.", "On Monday morning, Sami went to the market. He bought bread and then went back home."], 'a' => 3, 'e' => "Le récit est au passé : les verbes restent au prétérit du début à la fin."],
                    ['q' => "Quelle est la meilleure traduction de « وصلت مريم إلى المكتب ثم بدأت عملها. » ?", 'c' => ["Mary arrived the office and then begin her work.", "Mary arrives at the office and then starts her work yesterday.", "Mary was arrive at the office and starts her work.", "Mary arrived at the office and then started her work."], 'a' => 3, 'e' => "Deux actions achevées au passé : arrived puis started."],
                    ['q' => "Quelle est la traduction arabe de « After he finished the report, he sent it to his manager. » ?", 'c' => ["بعد أن أنهى التقرير، أرسله إلى مديره.", "قبل أن يبدأ التقرير، أرسله إلى مديره.", "أثناء كتابة التقرير، لم يرسله.", "أنهى المدير التقرير بدلًا منه."], 'a' => 0, 'e' => "« After » montre que la fin du rapport précède l'envoi."],
                    ['q' => "Quelle est la meilleure traduction de « لدى سارة قطة. إنها بيضاء وصغيرة. » ?", 'c' => ["Sara has a cat. It is white and small.", "Sara has a cat. They are white and small.", "Sara has a cat. He is white and small.", "Sara have a cat. It are white and small."], 'a' => 0, 'e' => "La deuxième phrase reprend « a cat » avec « it » (singulier)."],
                    ['q' => "Quelle est la meilleure traduction de « خرج الأولاد إلى الحديقة. لعبوا هناك حتى المساء. » ?", 'c' => ["The boys went out to the park. They played there until evening.", "The boys went out to the park. He played there until evening.", "The boys goes out to the park. They played there until evening.", "The boys went out to the park. They play there until the evening."], 'a' => 0, 'e' => "Le sujet « The boys » est repris par « They », et les deux verbes sont au passé."],
                    ['q' => "Quelle est la traduction arabe de « Karim woke up early. He had breakfast and went to work. » ?", 'c' => ["استيقظ كريم مبكرًا. تناول فطوره وذهب إلى العمل.", "يستيقظ كريم مبكرًا. تناول فطوره وذهب إلى العمل.", "استيقظ كريم متأخرًا. تناول غداءه وعاد إلى البيت.", "سيستيقظ كريم مبكرًا. سيتناول فطوره."], 'a' => 0, 'e' => "Les trois actions sont au passé et dans le même ordre que dans le texte."],
                    ['q' => "Quelle est la meilleure traduction de « هذا المشروع صعب، لكنه مهم. » ?", 'c' => ["This project is difficult, but it is important.", "This project is difficult, but he is important.", "This project is difficult, so it is important.", "This project are difficult, but it is important."], 'a' => 0, 'e' => "« لكنه » exprime l'opposition (« but ») et se rapporte au projet (« it »)."],
                    ['q' => "Quelle est la traduction arabe de « Because it was raining, we stayed at home. » ?", 'c' => ["لأن السماء كانت تمطر، بقينا في البيت.", "لأننا بقينا في البيت، كانت السماء تمطر.", "رغم أن السماء كانت تمطر، خرجنا.", "عندما بقينا في البيت، أمطرت."], 'a' => 0, 'e' => "La pluie est la cause, rester à la maison la conséquence."],
                    ['q' => "Quelle est la meilleure traduction de « تحب ليلى الرسم. تذهب إلى النادي كل سبت. » ?", 'c' => ["Layla likes drawing. She goes to the club every Saturday.", "Layla likes drawing. She went to the club every Saturday.", "Layla likes drawing. She is going to the club yesterday.", "Layla like drawing. She go to the club every Saturday."], 'a' => 0, 'e' => "Les deux phrases décrivent des habitudes : on garde le présent."],
                    ['q' => "Un élève traduit un récit au passé ainsi : « She arrived at the office, then she goes to her desk. » Quel est le problème ?", 'c' => ["le temps change sans raison au milieu du récit", "le sujet est incorrect", "il manque un article", "l'orthographe est fausse"], 'a' => 0, 'e' => "Le récit doit rester au passé : « then she went to her desk »."],
                ],
            ],
            [
                'title' => "Révision générale de la traduction arabe-anglais",
                'description' => "Un test de synthèse qui réunit temps, pronoms, prépositions, dialogues, contexte et traduction naturelle.",
                'questions' => [
                    ['q' => "Quelle est la meilleure traduction de « سأرسل لك الرسالة مساءً. » ?", 'c' => ["I will send you the message this evening.", "I sent you the message tomorrow evening.", "I was send you the message this evening.", "I will sending you message this evening."], 'a' => 0, 'e' => "« will send » exprime le futur, et « this evening » rend « مساءً » ici."],
                    ['q' => "Quelle est la traduction arabe de « We have met our new neighbors. » ?", 'c' => ["لقد التقينا بجيراننا الجدد.", "سنلتقي بجيراننا القدامى.", "نعيش مع جيراننا الجدد.", "عرفنا معلمينا الجدد."], 'a' => 0, 'e' => "« have met » indique que la rencontre a eu lieu ; « our new neighbors » = « جيراننا الجدد »."],
                    ['q' => "Quelle est la traduction correcte de « هذه الرسالة مهمة جدًا. » ?", 'c' => ["This message is very important.", "These message are very important.", "This messages is very importantly.", "That message are very importance."], 'a' => 0, 'e' => "Singulier : « this message is », puis l'adjectif « important » précédé de « very »."],
                    ['q' => "Quelle est la traduction naturelle de « لا أعرف أين محطة القطار. » ?", 'c' => ["I don't know where the train station is.", "I don't know where is the train station.", "I not know where the train station.", "I don't know the train station where is."], 'a' => 0, 'e' => "Dans une question indirecte, l'ordre est celui d'une phrase affirmative : where the train station is."],
                    ['q' => "Quelle est la meilleure traduction de « من فضلك، انتظرني هنا. » ?", 'c' => ["Please wait for me here.", "Please wait me here.", "Please waiting for me here.", "Please wait to me here."], 'a' => 0, 'e' => "Le verbe « wait » prend « for » devant la personne attendue."],
                    ['q' => "Quelle est la traduction arabe naturelle de « He needs some rest. » ?", 'c' => ["هو يحتاج إلى بعض الراحة.", "هو يصنع بعض الراحة.", "هو في بعض الراحة يحتاج.", "هو يحب الراحة."], 'a' => 0, 'e' => "« needs some rest » veut dire « a besoin d'un peu de repos »."],
                    ['q' => "Quelle est la traduction de « ماذا تفعل؟ » ?", 'c' => ["What are you doing?", "What you are doing?", "What do you doing?", "What are you do?"], 'a' => 0, 'e' => "Mot interrogatif, auxiliaire « are », sujet, puis verbe en -ing."],
                    ['q' => "Quelle est la traduction arabe de « She works in a hospital. » ?", 'c' => ["هي تعمل في مستشفى.", "هي تعمل مستشفى.", "هي تزور مستشفى.", "هي تسكن قرب مستشفى."], 'a' => 0, 'e' => "« works in a hospital » = « تعمل في مستشفى »."],
                    ['q' => "Quelle est la traduction de « لدي أخ وأخت. » ?", 'c' => ["I have a brother and a sister.", "I am a brother and a sister.", "I has a brother and a sister.", "I have a brothers and a sister."], 'a' => 0, 'e' => "« I have » avec deux noms au singulier précédés de « a »."],
                    ['q' => "Quelle est la traduction arabe de « Don't forget your keys! » ?", 'c' => ["لا تنس مفاتيحك!", "لا تضع مفاتيحك هنا!", "لا تبحث عن مفاتيحك!", "لا تعطني مفاتيحك!"], 'a' => 0, 'e' => "« forget » signifie « oublier » ; l'ordre négatif devient « لا تنس »."],
                ],
            ],
            [
                'title' => "Relire et vérifier une traduction",
                'description' => "Repérer les erreurs de sens, de grammaire et de naturel dans de courtes traductions arabe-anglais.",
                'questions' => [
                    ['q' => "Quelle est la traduction naturelle de « عمري عشرون سنة. » ?", 'c' => ["I am twenty years old.", "I have twenty years.", "I am having twenty years.", "I make twenty years."], 'a' => 0, 'e' => "En anglais, on dit son âge avec « I am … years old »."],
                    ['q' => "Un élève traduit « أنا عندي عشر سنوات » par « I have ten years. » Quel est le problème ?", 'c' => ["en anglais on dit « I am ten years old »", "le verbe est au futur", "le nom est au pluriel", "il n'y a aucun problème"], 'a' => 0, 'e' => "La phrase a l'air correcte mais ne se dit pas pour l'âge : c'est une erreur de sens, pas de grammaire."],
                    ['q' => "Quelle est la meilleure traduction de « هو يستمتع بقراءة الكتب. » ?", 'c' => ["He enjoys reading books.", "He enjoys to read books.", "He enjoy reading books.", "He is enjoy reading books."], 'a' => 0, 'e' => "Avec « he », on écrit « enjoys », suivi d'un verbe en -ing."],
                    ['q' => "Dans « She go to school every day. », quelle correction faut-il faire ?", 'c' => ["go → goes", "school → schools", "every → all", "day → days"], 'a' => 0, 'e' => "À la 3e personne du singulier du présent, le verbe prend -es : She goes."],
                    ['q' => "Dans « He have two brothers. », quelle correction faut-il faire ?", 'c' => ["have → has", "two → second", "brothers → brother", "He → Him"], 'a' => 0, 'e' => "Avec « he », on emploie « has »."],
                    ['q' => "Dans « I am agree with you. », quelle correction faut-il faire ?", 'c' => ["I am agree → I agree", "with → to", "you → your", "aucune correction n'est nécessaire"], 'a' => 0, 'e' => "En anglais, « agree » est un verbe : on dit « I agree », sans « am »."],
                    ['q' => "Un élève traduit « She is tall » par « هي سريعة ». Quel type d'erreur est-ce ?", 'c' => ["une erreur de sens (mauvais mot)", "une erreur de ponctuation", "une erreur de temps", "une erreur de pluriel"], 'a' => 0, 'e' => "« tall » veut dire « طويلة », pas « سريعة » : le mot a été mal compris."],
                    ['q' => "Quelle traduction de « أنا جائع جدًا » sonne peu naturelle en anglais ?", 'c' => ["I have much hunger.", "I am very hungry.", "I'm really hungry.", "I am so hungry."], 'a' => 0, 'e' => "« I have much hunger » est un calque de l'arabe ; on dit « I am very hungry »."],
                    ['q' => "Quelle est la phrase corrigée de « The books is on the table. » ?", 'c' => ["The books are on the table.", "The book are on the table.", "The books am on the table.", "The books be on the table."], 'a' => 0, 'e' => "Le sujet « books » est au pluriel : le verbe est « are »."],
                    ['q' => "Après avoir traduit une phrase, quelle relecture est la plus utile ?", 'c' => ["vérifier d'abord le sens, puis la grammaire, puis le naturel", "compter seulement les mots", "changer tous les verbes", "comparer seulement la ponctuation"], 'a' => 0, 'e' => "Un sens faux ne se rattrape pas par une bonne grammaire : on vérifie le sens en premier."],
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
