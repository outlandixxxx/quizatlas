<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class TranslationArabicFrenchBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'translation-arabic-french')->firstOrFail();

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
                'title' => "Phrases simples arabe-français",
                'description' => "Traduire de courtes phrases du quotidien entre l'arabe et le français en respectant le sens et une construction naturelle.",
                'questions' => [
                    ['q' => "Quelle est la meilleure traduction française de « أنا طالب. » ?", 'c' => ["J'ai étudiant.", "Je suis étudiant.", "Je fais étudiant.", "Je suis étudier."], 'a' => 1, 'e' => "En français, on emploie le verbe « être » avec le nom de la profession ou du statut : Je suis étudiant."],
                    ['q' => "Quelle est la meilleure traduction arabe de « Il habite à Rabat. » ?", 'c' => ["هو يذهب إلى الرباط.", "هو يسكن في الرباط.", "هو يعمل في الرباط.", "هو يحب الرباط."], 'a' => 1, 'e' => "« habiter » veut dire « سكن » : il habite à Rabat."],
                    ['q' => "Choisis la traduction française correcte de « هي تحب القراءة. »", 'c' => ["Elle aime lire le.", "Elle aime la lecture.", "Elle est la lecture.", "Elle a la lecture."], 'a' => 1, 'e' => "« la lecture » est le nom qui correspond à « القراءة » et se construit avec « aimer »."],
                    ['q' => "Que signifie « Nous sommes prêts. » ?", 'c' => ["نحن متعبون.", "نحن مستعدون.", "نحن متأخرون.", "نحن خائفون."], 'a' => 1, 'e' => "« prêts » veut dire « مستعدون »."],
                    ['q' => "Quelle est la meilleure traduction française de « الكتاب على الطاولة. » ?", 'c' => ["Le livre a sur la table.", "Le livre est sur la table.", "Le livre est dans la table.", "La livre est sur le table."], 'a' => 1, 'e' => "« sur » rend « على », et il faut respecter les genres : le livre, la table."],
                    ['q' => "Quelle est la meilleure traduction arabe de « Je cherche mes clés. » ?", 'c' => ["أجد مفاتيحي.", "أبحث عن مفاتيحي.", "أشتري مفاتيحي.", "أصل إلى مفاتيحي."], 'a' => 1, 'e' => "« chercher » veut dire « بحث عن »."],
                    ['q' => "Quelle est la traduction française correcte de « نحن ندرس الفرنسية. » ?", 'c' => ["Nous étudions la française.", "Nous étudions le français.", "Nous sommes étudier français.", "Nous avons étudions le français."], 'a' => 1, 'e' => "« étudier » se conjugue « étudions » avec « nous », et la langue s'écrit « le français »."],
                    ['q' => "Que signifie « Le train arrive à huit heures. » ?", 'c' => ["يغادر القطار في الساعة الثامنة.", "يصل القطار في الساعة الثامنة.", "يتوقف القطار لمدة ثماني ساعات.", "يقود القطار ثمانية أشخاص."], 'a' => 1, 'e' => "« arrive » signifie « يصل » et « à huit heures » « في الساعة الثامنة »."],
                    ['q' => "Quelle est la meilleure traduction française de « أحتاج إلى مساعدة. » ?", 'c' => ["Je besoin de aide.", "J'ai besoin d'aide.", "Je suis besoin d'aide.", "J'ai aide besoin."], 'a' => 1, 'e' => "L'expression figée est « avoir besoin de » : J'ai besoin d'aide."],
                    ['q' => "Quelle est la traduction arabe de « Fermez la porte, s'il vous plaît. » ?", 'c' => ["افتحوا الباب، من فضلكم.", "أغلقوا الباب، من فضلكم.", "نظفوا الباب، من فضلكم.", "اتركوا الباب، من فضلكم."], 'a' => 1, 'e' => "« Fermez » est l'impératif de « fermer » : « أغلقوا »."],
                ],
            ],
            [
                'title' => "Les temps en traduction",
                'description' => "Rendre le temps et le sens du présent, du passé et du futur entre l'arabe et le français.",
                'questions' => [
                    ['q' => "Quelle est la meilleure traduction française de « سأزور صديقي غدًا. » ?", 'c' => ["Je visitais mon ami demain.", "Je visiterai mon ami demain.", "J'ai visité mon ami demain.", "Je visite mon ami hier."], 'a' => 1, 'e' => "« سأزور » exprime le futur : on emploie le futur simple, « visiterai »."],
                    ['q' => "Quelle est la traduction arabe de « J'ai fini mon travail. » ?", 'c' => ["سأنهي عملي.", "أنهيت عملي.", "كنت أنهي عملي.", "لا أنهي عملي."], 'a' => 1, 'e' => "« J'ai fini » est un passé composé : l'action est achevée."],
                    ['q' => "Quelle est la meilleure traduction française de « كنت أقرأ عندما اتصل بي أخي. » ?", 'c' => ["J'ai lu quand mon frère m'appelait.", "Je lisais quand mon frère m'a appelé.", "Je lirai quand mon frère m'a appelé.", "Je lis quand mon frère m'appellera."], 'a' => 1, 'e' => "L'action en cours se met à l'imparfait, l'événement qui l'interrompt au passé composé."],
                    ['q' => "Quelle est la traduction arabe de « Nous partirons après le déjeuner. » ?", 'c' => ["غادرنا بعد الغداء.", "سنغادر بعد الغداء.", "نغادر أثناء الغداء.", "كنا نغادر قبل الغداء."], 'a' => 1, 'e' => "« partirons » est au futur : « سنغادر »."],
                    ['q' => "Quelle est la meilleure traduction française de « كان الجو باردًا. » ?", 'c' => ["Il fera froid.", "Il faisait froid.", "Il a fait froid demain.", "Il fait froid hier."], 'a' => 1, 'e' => "Pour décrire le temps qu'il faisait dans le passé, on emploie l'imparfait."],
                    ['q' => "Quelle est la traduction arabe de « Elle a déjà mangé. » ?", 'c' => ["ستأكل لاحقًا.", "لقد أكلت بالفعل.", "كانت ستأكل.", "لا تريد الأكل."], 'a' => 1, 'e' => "« déjà » veut dire « بالفعل » et « a mangé » indique une action accomplie."],
                    ['q' => "Quelle est la meilleure traduction française de « غدًا سأعمل من المنزل. » ?", 'c' => ["Demain, je travaillais de chez moi.", "Demain, je travaillerai de chez moi.", "Hier, je travaillerai de chez moi.", "Demain, j'ai travaillé de chez moi."], 'a' => 1, 'e' => "« غدًا » appelle un temps du futur : « travaillerai »."],
                    ['q' => "Quelle est la traduction arabe de « Il pleuvait toute la matinée. » ?", 'c' => ["ستمطر طوال الصباح.", "كانت السماء تمطر طوال الصباح.", "أمطرت غدًا.", "توقفت الأمطار طوال الصباح."], 'a' => 1, 'e' => "L'imparfait « pleuvait » décrit une situation qui durait ; « toute la matinée » = « طوال الصباح »."],
                    ['q' => "Quelle est la meilleure traduction française de « كنت أنتظر منذ ساعة. » ?", 'c' => ["J'attendrai une heure hier.", "J'attendais depuis une heure.", "J'ai attendu depuis demain.", "Je vais attendre depuis une heure."], 'a' => 1, 'e' => "L'attente durait déjà : imparfait + « depuis une heure »."],
                    ['q' => "Quelle est la traduction française de « كان يذهب إلى النادي كل يوم. » ?", 'c' => ["Il ira au club tous les jours.", "Il est allé au club demain.", "Il allait au club tous les jours.", "Il va au club hier."], 'a' => 2, 'e' => "« كان يذهب » exprime une habitude passée : l'imparfait « allait »."],
                ],
            ],
            [
                'title' => "Pronoms et possessifs",
                'description' => "Traduire pronoms, possessifs et démonstratifs en gardant la personne, le genre et le nombre.",
                'questions' => [
                    ['q' => "Quelle est la traduction française de « هذا كتابي. » ?", 'c' => ["Ce sont mon livre.", "C'est ma livre.", "C'est mon livre.", "Il est mon livre."], 'a' => 2, 'e' => "« livre » est masculin : on emploie « mon »."],
                    ['q' => "Quelle est la traduction arabe de « Ce sont nos amis. » ?", 'c' => ["هؤلاء أعداؤنا.", "هذا صديقنا.", "هؤلاء أصدقاؤنا.", "هم معلمونا."], 'a' => 2, 'e' => "« Ce sont » renvoie à un pluriel et « nos amis » à « أصدقاؤنا »."],
                    ['q' => "Quelle est la bonne traduction de « أحب سيارتي لأنها مريحة. » ?", 'c' => ["Je aime ma voiture parce qu'elle confortable.", "J'aime mon voiture parce qu'il est confortable.", "J'aime ma voiture parce qu'elle est confortable.", "J'aime mes voiture parce qu'elles est confortable."], 'a' => 2, 'e' => "« voiture » est féminin singulier : « ma » et « elle »."],
                    ['q' => "Quelle est la traduction arabe de « Je lui parle souvent. » ?", 'c' => ["أكتب عنه كثيرًا.", "أراه كثيرًا.", "أتحدث إليه (أو إليها) كثيرًا.", "أسمعه كثيرًا."], 'a' => 2, 'e' => "« parler à » prend le pronom indirect « lui », qui peut désigner un homme ou une femme."],
                    ['q' => "Quelle est la traduction française de « أخذت ماري حقيبتها. » ?", 'c' => ["Marie a pris ses sac.", "Marie a pris sa sac.", "Marie a pris son sac.", "Marie a prise son sac."], 'a' => 2, 'e' => "« sac » est masculin : « son » s'accorde avec l'objet possédé, pas avec la propriétaire."],
                    ['q' => "Quelle est la traduction correcte de « هؤلاء الطالبات مجتهدات. » ?", 'c' => ["Ces étudiants est sérieux.", "Ce étudiantes est sérieuse.", "Ces étudiantes sont sérieuses.", "Cette étudiantes sont sérieuses."], 'a' => 2, 'e' => "Pluriel féminin : « ces étudiantes », verbe « sont » et adjectif « sérieuses »."],
                    ['q' => "Quelle est la traduction française de « أعطيتها الكتاب. » (elle = une seule femme) ?", 'c' => ["Je lui suis donné le livre.", "Je les ai donné le livre.", "Je lui ai donné le livre.", "J'ai lui donné le livre."], 'a' => 2, 'e' => "« donner à quelqu'un » demande un pronom indirect, « lui », placé avant l'auxiliaire."],
                    ['q' => "Quelle est la traduction arabe de « Je les connais. » ?", 'c' => ["أنا أتحدث إليهم.", "أنا أعرفه.", "أنا أعرفهم.", "أنا أراها فقط."], 'a' => 2, 'e' => "« les » est un pronom complément pluriel."],
                    ['q' => "Quelle est la traduction française de « هم يحبون مدرستهم. » ?", 'c' => ["Ils aime leur école.", "Ils aiment leurs école.", "Ils aiment leur école.", "Ils aiment son école."], 'a' => 2, 'e' => "« école » est au singulier : « leur » ; le verbe est à la 3e personne du pluriel."],
                    ['q' => "Quelle est la traduction française de « هذه صديقتي. » ?", 'c' => ["C'est mon ami.", "C'est ma amie.", "C'est mon amie.", "Ce sont mon amie."], 'a' => 2, 'e' => "Devant un nom féminin qui commence par une voyelle, on emploie « mon » : mon amie."],
                ],
            ],
            [
                'title' => "Adjectifs et accords",
                'description' => "Traduire des adjectifs en respectant le genre, le nombre et la place naturelle de l'adjectif en français.",
                'questions' => [
                    ['q' => "Quelle est la traduction française de « رجل طويل » ?", 'c' => ["un homme grande", "une homme grande", "un homme grand", "une homme grand"], 'a' => 2, 'e' => "« homme » est masculin singulier : l'adjectif « grand » s'accorde."],
                    ['q' => "Quelle est la traduction française de « امرأة ذكية » ?", 'c' => ["une femme intelligent", "un femme intelligent", "une femme intelligente", "un femme intelligente"], 'a' => 2, 'e' => "« femme » est féminin : l'adjectif prend la forme « intelligente »."],
                    ['q' => "Quelle est la traduction arabe de « de grandes maisons » ?", 'c' => ["بيوت صغيرة", "بيت كبير", "بيوت كبيرة", "بيوت قديمة"], 'a' => 2, 'e' => "« maisons » est un pluriel et « grandes » veut dire « كبيرة »."],
                    ['q' => "Quelle est la traduction correcte de « سيارة جديدة » ?", 'c' => ["une nouveau voiture", "un nouveau voiture", "une nouvelle voiture", "un nouvelle voiture"], 'a' => 2, 'e' => "« voiture » est féminin : on emploie « nouvelle »."],
                    ['q' => "Quelle est la traduction française de « أصدقاء مقربون » ?", 'c' => ["des amies proches", "des ami proche", "des amis proches", "un amis proches"], 'a' => 2, 'e' => "Pluriel masculin : « des amis proches »."],
                    ['q' => "Quelle est la traduction française de « المدن الجميلة » ?", 'c' => ["la belles ville", "les beaux villes", "les belles villes", "les belle ville"], 'a' => 2, 'e' => "« villes » est féminin pluriel : « les belles villes »."],
                    ['q' => "Quelle est la traduction arabe de « une petite maison » ?", 'c' => ["بيت كبير", "بيوت صغيرة", "بيت صغير", "منزل قديم"], 'a' => 2, 'e' => "« petite » veut dire « صغيرة » et « maison » est au singulier."],
                    ['q' => "Quelle est la traduction française de « فكرة جيدة » ?", 'c' => ["une bon idée", "un bonne idée", "une bonne idée", "un idée bonne"], 'a' => 2, 'e' => "« idée » est féminin, et « bonne » se place avant le nom."],
                    ['q' => "Quelle est la traduction française de « الطالبات سعيدات. » ?", 'c' => ["Les étudiante sont heureuse.", "Les étudiantes sont heureux.", "Les étudiants sont heureuses.", "Les étudiantes sont heureuses."], 'a' => 3, 'e' => "Sujet et adjectif sont au féminin pluriel."],
                    ['q' => "Quelle est la traduction française de « شجرة خضراء » ?", 'c' => ["un arbre vertes", "un arbre verte", "une arbre vert", "un arbre vert"], 'a' => 3, 'e' => "« arbre » est masculin en français, même si « شجرة » est féminin en arabe : un arbre vert."],
                ],
            ],
            [
                'title' => "Prépositions et expressions courantes",
                'description' => "Choisir la bonne préposition et les expressions françaises adaptées plutôt que de traduire mot à mot.",
                'questions' => [
                    ['q' => "Quelle est la traduction française de « أعيش في المغرب. » ?", 'c' => ["J'habite sur Maroc.", "J'habite à Maroc.", "J'habite en Maroc.", "J'habite au Maroc."], 'a' => 3, 'e' => "Avec un pays masculin comme le Maroc, on emploie « au »."],
                    ['q' => "Quelle est la traduction française de « أذهب إلى فرنسا. » ?", 'c' => ["Je vais de France.", "Je vais au France.", "Je vais à France.", "Je vais en France."], 'a' => 3, 'e' => "Avec un pays féminin comme la France, on emploie « en »."],
                    ['q' => "Que signifie « Il vient de Paris. » ?", 'c' => ["هو يعمل في باريس.", "هو يذهب إلى باريس.", "هو يزور باريس.", "هو يأتي من باريس."], 'a' => 3, 'e' => "« venir de » indique l'origine."],
                    ['q' => "Quelle est la traduction française de « على الكرسي » ?", 'c' => ["de la chaise", "dans la chaise", "à la chaise", "sur la chaise"], 'a' => 3, 'e' => "« sur » exprime ce qui est posé sur une surface."],
                    ['q' => "Quelle est la traduction française de « أفكر فيك. » ?", 'c' => ["Je pense pour toi.", "Je pense de toi.", "Je pense sur toi.", "Je pense à toi."], 'a' => 3, 'e' => "Le verbe se construit avec « à » : penser à quelqu'un."],
                    ['q' => "Quelle est la traduction arabe de « Je parle avec mon professeur. » ?", 'c' => ["أكتب لأستاذي.", "أتحدث عن أستاذي.", "أذهب إلى أستاذي.", "أتحدث مع أستاذي."], 'a' => 3, 'e' => "« avec » veut dire « مع »."],
                    ['q' => "Quelle est la traduction française de « من أجل عائلتي » ?", 'c' => ["chez ma famille", "de ma famille", "sur ma famille", "pour ma famille"], 'a' => 3, 'e' => "« pour » exprime le but ou le bénéficiaire."],
                    ['q' => "Quelle est la traduction française de « أعيش مع أخي. » ?", 'c' => ["J'habite de mon frère.", "J'habite pour mon frère.", "J'habite sur mon frère.", "J'habite avec mon frère."], 'a' => 3, 'e' => "« avec » exprime la compagnie."],
                    ['q' => "Quelle est la traduction française de « أنا عند صديقي. » ?", 'c' => ["Je suis sur mon ami.", "Je suis à mon ami.", "Je suis dans mon ami.", "Je suis chez mon ami."], 'a' => 3, 'e' => "« chez » désigne le domicile ou le lieu où vit quelqu'un."],
                    ['q' => "Quelle est la traduction française de « أنا خائف من الكلاب. » ?", 'c' => ["J'ai peur les chiens.", "J'ai peur aux chiens.", "Je suis peur des chiens.", "J'ai peur des chiens."], 'a' => 3, 'e' => "L'expression est « avoir peur de » : de + les = « des »."],
                ],
            ],
            [
                'title' => "Dialogues et situations quotidiennes",
                'description' => "Traduire des échanges courants en gardant le niveau de politesse et l'intention du locuteur.",
                'questions' => [
                    ['q' => "Quelle est la traduction naturelle de « كيف حالك؟ » entre amis ?", 'c' => ["Quelle vas-tu ?", "Comment es-tu vas ?", "Comment as-tu ?", "Comment vas-tu ?"], 'a' => 3, 'e' => "« Comment vas-tu ? » est la formule courante, avec « tu » entre amis."],
                    ['q' => "Quelle est la traduction arabe de « Je voudrais un café, s'il vous plaît. » ?", 'c' => ["لا أريد شيئًا.", "أكره القهوة، من فضلك.", "اشتريت قهوة أمس.", "أودّ قهوة، من فضلك."], 'a' => 3, 'e' => "« Je voudrais » est une formule polie : « أودّ »."],
                    ['q' => "Que signifie « Excusez-moi, où est la gare ? » ?", 'c' => ["من فضلك، أين المطار؟", "شكرًا، أين الفندق؟", "عذرًا، متى يصل القطار؟", "عذرًا، أين محطة القطار؟"], 'a' => 3, 'e' => "« la gare » est la gare ferroviaire et « où est » demande un lieu."],
                    ['q' => "Comment traduire « كيف حالك؟ » en s'adressant poliment à un professeur ?", 'c' => ["Comment es-vous ?", "Comment vas-tu ?", "Comment tu va ?", "Comment allez-vous ?"], 'a' => 3, 'e' => "Avec une personne que l'on vouvoie, on emploie « vous » : Comment allez-vous ?"],
                    ['q' => "Quelle est la traduction naturelle de « لا تقلق! » dite à un ami ?", 'c' => ["Tu ne pas inquiéter.", "Ne vous inquiétez pas tous.", "N'inquiète pas toi.", "Ne t'inquiète pas !"], 'a' => 3, 'e' => "À un seul ami, on emploie l'impératif négatif avec « tu »."],
                    ['q' => "Que signifie « À tout à l'heure ! » ?", 'c' => ["شكرًا لك!", "صباح الخير!", "إلى الأبد!", "أراك لاحقًا!"], 'a' => 3, 'e' => "On l'emploie pour dire qu'on se reverra dans la journée."],
                    ['q' => "Quelle est la réponse habituelle à « Merci beaucoup » ?", 'c' => ["Jamais de merci.", "Pardon beaucoup.", "Bonjour beaucoup.", "De rien."], 'a' => 3, 'e' => "« De rien » est la réponse courante à un remerciement."],
                    ['q' => "Quelle est la traduction polie de « هل يمكنك مساعدتي؟ » ?", 'c' => ["Pouvez-vous m'aider ?", "Vous pouvez aider je ?", "Est-ce que vous pouvoir m'aider ?", "Pouvez-vous aider moi-même ?"], 'a' => 0, 'e' => "L'inversion verbe-sujet et le pronom « m' » donnent une question polie correcte."],
                    ['q' => "Quelle est la traduction française de « ما اسمك؟ » ?", 'c' => ["Comment t'appelles-tu ?", "Comment appelles tu ?", "Quel tu t'appelles ?", "Qui est ton nom ?"], 'a' => 0, 'e' => "On demande le nom avec « s'appeler » : Comment t'appelles-tu ?"],
                    ['q' => "Quelle est la traduction française de « آسف على التأخير. » ?", 'c' => ["Désolé d'être en retard.", "Désolé pour être tard.", "Je suis désolé en retard.", "Pardon de retard être."], 'a' => 0, 'e' => "On dit « désolé de » + infinitif : désolé d'être en retard."],
                ],
            ],
            [
                'title' => "Sens, contexte et traduction naturelle",
                'description' => "Gérer les mots ambigus et les expressions qui demandent un équivalent différent selon le contexte.",
                'questions' => [
                    ['q' => "Dans une phrase qui parle du corps humain, quel est le meilleur équivalent français de « عين » ?", 'c' => ["œil", "source", "ressort", "objectif"], 'a' => 0, 'e' => "Dans le contexte du corps, « عين » se traduit par « œil »."],
                    ['q' => "Comment traduire naturellement « عين الماء » ?", 'c' => ["une source", "un œil d'eau", "un regard d'eau", "un œil de source"], 'a' => 0, 'e' => "« عين الماء » désigne une source d'eau, pas l'organe de la vue."],
                    ['q' => "Quelle est la traduction arabe naturelle de « Il a pris une décision importante. » ?", 'c' => ["اتخذ قرارًا مهمًا.", "أكل قرارًا مهمًا.", "صنع قرارًا مهمًا.", "وجد قرارًا مهمًا."], 'a' => 0, 'e' => "L'association habituelle en arabe est « اتخذ قرارًا »."],
                    ['q' => "Quelle est la traduction française de « أخذ دشًا. » ?", 'c' => ["Il a pris une douche.", "Il a fait une douche.", "Il a mis une douche.", "Il a eu prendre une douche."], 'a' => 0, 'e' => "En français, on dit « prendre une douche »."],
                    ['q' => "Quelle est la traduction française de « سألت سؤالًا. » ?", 'c' => ["J'ai posé une question.", "J'ai demandé une question.", "J'ai fait une question.", "J'ai dit une question."], 'a' => 0, 'e' => "L'expression est « poser une question »."],
                    ['q' => "Quelle est la traduction française de « ضرب المعلم مثلًا. » ?", 'c' => ["Le professeur a donné un exemple.", "Le professeur a frappé un exemple.", "Le professeur a battu un exemple.", "Le professeur a jeté un exemple."], 'a' => 0, 'e' => "« ضرب مثلًا » est une expression figée qui se rend par « donner un exemple »."],
                    ['q' => "Dans « Le voleur vole un portefeuille. », que signifie « vole » ?", 'c' => ["يسرق", "يطير", "يسبح", "يركض"], 'a' => 0, 'e' => "Le contexte (« voleur », « portefeuille ») montre qu'il s'agit de voler au sens de dérober."],
                    ['q' => "Quelle est la traduction française de « يوم عطلة » ?", 'c' => ["un jour de congé", "un jour de fatigue", "une journée de travail", "un jour de classe"], 'a' => 0, 'e' => "« un jour de congé » correspond à une journée sans travail."],
                    ['q' => "Quelle est la traduction française de « أصبت بنزلة برد. » ?", 'c' => ["J'ai attrapé un rhume.", "J'ai fait un rhume.", "J'ai mis un rhume.", "J'ai donné un rhume."], 'a' => 0, 'e' => "On dit « attraper un rhume »."],
                    ['q' => "Quelle est la traduction française de « ألقيت نظرة على الرسالة. » ?", 'c' => ["J'ai jeté un coup d'œil au message.", "J'ai lancé un œil au message.", "J'ai fait un œil sur le message.", "J'ai mis un œil au message."], 'a' => 0, 'e' => "L'expression figée est « jeter un coup d'œil »."],
                ],
            ],
            [
                'title' => "Révision générale de la traduction arabe-français",
                'description' => "Un test de synthèse qui réunit temps, pronoms, prépositions, contexte et dialogues.",
                'questions' => [
                    ['q' => "Quelle est la meilleure traduction de « سأرسل لك الرسالة مساءً. » ?", 'c' => ["Je t'enverrai le message ce soir.", "Je t'envoyais le message hier soir.", "Je t'ai envoyé le message demain.", "Je te envoyerai le message soir."], 'a' => 0, 'e' => "Le futur simple « enverrai » rend « سأرسل », et « t' » désigne la personne à qui on écrit."],
                    ['q' => "Quelle est la traduction arabe de « Nous avons rencontré nos nouveaux voisins. » ?", 'c' => ["التقينا بجيراننا الجدد.", "سنلتقي بجيراننا القدامى.", "نحن نسكن وحدنا.", "قابلنا معلمينا الجدد."], 'a' => 0, 'e' => "« avons rencontré » = « التقينا » et « nos nouveaux voisins » = « جيراننا الجدد »."],
                    ['q' => "Quelle est la traduction correcte de « هذه الرسالة مهمة جدًا. » ?", 'c' => ["Cette lettre est très importante.", "Ce lettre est très important.", "Cette lettres sont très importantes.", "Cet lettre est très important."], 'a' => 0, 'e' => "« lettre » est féminin singulier : « cette » et « importante »."],
                    ['q' => "Quelle est la traduction naturelle de « لا أعرف أين محطة القطار. » ?", 'c' => ["Je ne sais pas où est la gare.", "Je ne connais pas où est la gare.", "Je ne sais pas où la gare est-elle.", "Je ne pas sais où est le gare."], 'a' => 0, 'e' => "Après « Je ne sais pas », la question indirecte garde l'ordre d'une phrase affirmative."],
                    ['q' => "Quelle est la meilleure traduction de « من فضلك، انتظرني هنا. » ?", 'c' => ["S'il te plaît, attends-moi ici.", "S'il vous plaît, attends-moi ici.", "S'il te plaît, attend-moi ici.", "S'il te plaît, attends me ici."], 'a' => 0, 'e' => "À l'impératif avec « tu », on écrit « attends », et le pronom suit avec un trait d'union : attends-moi."],
                    ['q' => "Quelle est la traduction arabe naturelle de « Il a besoin de repos. » ?", 'c' => ["هو يحتاج إلى الراحة.", "هو يصنع الراحة.", "هو في راحة يحتاج.", "هو يحب الراحة."], 'a' => 0, 'e' => "« avoir besoin de » veut dire « احتاج إلى »."],
                    ['q' => "Quelle est la traduction française de « هل تتكلم العربية؟ » ?", 'c' => ["Parles-tu arabe ?", "Tu parles-tu arabe ?", "Parler-tu arabe ?", "Tu parle arabe est ?"], 'a' => 0, 'e' => "L'inversion verbe-sujet donne une question correcte : Parles-tu arabe ?"],
                    ['q' => "Quelle est la traduction arabe de « Elle travaille dans un hôpital. » ?", 'c' => ["هي تعمل في مستشفى.", "هي تعمل مستشفى.", "هي تزور مستشفى.", "هي تسكن قرب مستشفى."], 'a' => 0, 'e' => "« travailler dans » veut dire « عمل في »."],
                    ['q' => "Quelle est la traduction française de « لدي أخ وأخت. » ?", 'c' => ["J'ai un frère et une sœur.", "J'ai une frère et un sœur.", "Je suis un frère et une sœur.", "J'ai frère et sœur un."], 'a' => 0, 'e' => "« frère » est masculin (un) et « sœur » féminin (une)."],
                    ['q' => "Quelle est la traduction française de « لا تنس مفاتيحك! » ?", 'c' => ["N'oublie pas tes clés !", "Ne oublie pas tes clés !", "N'oublies pas tes clé !", "N'oublie pas ton clés !"], 'a' => 0, 'e' => "Négation avec élision (N'), impératif sans « s » pour les verbes en -er, possessif pluriel « tes »."],
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
