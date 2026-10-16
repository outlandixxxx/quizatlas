<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ProseBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'prose')->firstOrFail();

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
                'title' => "Découvrir la prose arabe",
                'description' => "Comprendre ce qu'est la prose, ses formes principales et la différence générale avec la poésie.",
                'questions' => [
                    ['q' => "Qu'est-ce que la prose (النثر), dans sa définition la plus simple ?", 'c' => ["un texte écrit ou parlé qui ne repose pas nécessairement sur la mesure et la rime comme la poésie classique", "un poème à rime fixe", "une suite de chiffres sans phrases", "une liste de noms"], 'a' => 0, 'e' => "La prose est plus libre dans sa construction que la poésie : elle apparaît dans les récits, articles, discours, etc."],
                    ['q' => "Lequel de ces exemples est un texte en prose littéraire ?", 'c' => ["une nouvelle racontant une expérience personnelle", "un vers mesuré", "un poème à rime", "un hémistiche de poème"], 'a' => 0, 'e' => "La nouvelle est l'une des principales formes de la prose littéraire."],
                    ['q' => "Quel type de texte repose le plus souvent sur la narration ?", 'c' => ["le récit", "la liste de calcul", "le tableau", "le seul sommaire"], 'a' => 0, 'e' => "Narrer, c'est raconter des événements, élément central du récit."],
                    ['q' => "La prose peut-elle exprimer des sentiments ?", 'c' => ["non, elle est réservée aux informations", "non, les sentiments n'apparaissent pas à l'écrit", "oui, elle peut transmettre sentiments, idées et expériences", "seulement si le texte est un poème"], 'a' => 2, 'e' => "La prose littéraire peut exprimer la tristesse, la joie, l'amour, etc."],
                    ['q' => "Qu'est-ce qui distingue en général la prose de la poésie classique ?", 'c' => ["elle n'a aucun sens", "elle est toujours plus courte", "elle n'emploie pas d'images", "elle ne suit pas la mesure et la rime de la même manière"], 'a' => 3, 'e' => "La prose est plus libre dans ses phrases et paragraphes, alors que la poésie classique suit une structure rythmique particulière."],
                    ['q' => "Quel texte se rapproche le plus d'une prose informative ?", 'c' => ["un article qui explique les bienfaits de la lecture", "un poème d'amour", "un vers de poème", "un chant poétique"], 'a' => 0, 'e' => "Un article explicatif présente des informations en prose, même s'il n'est pas littéraire au sens strict."],
                    ['q' => "Un texte raconte des événements ordonnés autour d'un personnage. Quel élément de la prose apparaît nettement ?", 'c' => ["la rime", "la mesure", "la narration", "le mètre poétique"], 'a' => 2, 'e' => "La narration organise les événements et les raconte au lecteur."],
                    ['q' => "Que peuvent avoir en commun prose et poésie ?", 'c' => ["la même rime obligatoirement", "des vers dans chaque texte", "exprimer des idées et des sentiments avec une langue artistique", "la mesure dans chaque texte"], 'a' => 2, 'e' => "Les deux peuvent être artistiques et exprimer l'humain, malgré des constructions différentes."],
                    ['q' => "Pourquoi un élève lit-il de la prose littéraire ?", 'c' => ["pour comprendre des histoires, des idées, des expériences et des styles d'écriture variés", "parce qu'elle ne contient que des chiffres", "parce qu'elle n'a pas besoin d'être comprise", "pour retenir seulement les signes de ponctuation"], 'a' => 0, 'e' => "La prose littéraire aide à comprendre les personnages, les événements, les idées et l'usage de la langue."],
                    ['q' => "Quelle compétence est importante à la première lecture d'un texte en prose ?", 'c' => ["compter les mots", "retenir la première ligne", "ignorer le titre", "repérer le sujet général et ce qui se passe dans le texte"], 'a' => 3, 'e' => "Comprendre le sujet et les événements principaux est la base avant d'analyser les détails."],
                ],
            ],
            [
                'title' => "La nouvelle et ses éléments",
                'description' => "Apprendre les éléments d'une nouvelle : personnages, problème, intrigue et dénouement.",
                'questions' => [
                    ['q' => "Qui fait avancer les événements dans un récit ?", 'c' => ["la rime", "le seul titre", "les personnages", "les virgules"], 'a' => 2, 'e' => "Les personnages agissent et affrontent des situations."],
                    ['q' => "Que désigne le lieu dans un récit ?", 'c' => ["l'endroit où se déroulent les événements", "le nom de l'auteur", "uniquement l'idée principale", "le type de livre"], 'a' => 0, 'e' => "Le lieu situe l'action : maison, école, ville..."],
                    ['q' => "Que désigne le temps dans un récit ?", 'c' => ["le nombre de personnages", "le titre du récit", "le moment ou la période où les événements se déroulent", "une qualité du héros"], 'a' => 2, 'e' => "Il indique quand ont lieu les événements ou sur quelle période."],
                    ['q' => "Le héros veut atteindre un but mais rencontre un obstacle. Que représente l'obstacle ?", 'c' => ["le titre", "la description seulement", "la conclusion", "le conflit ou le problème"], 'a' => 3, 'e' => "L'obstacle crée un problème ou un conflit qui fait avancer l'action."],
                    ['q' => "Comment appelle-t-on l'enchaînement des événements liés dans un récit ?", 'c' => ["l'intrigue (الحبكة)", "la rime", "une figure de style", "l'index"], 'a' => 0, 'e' => "L'intrigue organise les événements et leurs liens du début à la fin."],
                    ['q' => "Quel événement convient pour ouvrir un récit ?", 'c' => ["ثم انتهت القصة.", "وهكذا أغلق الكتاب.", "وجدت مريم رسالة غامضة أمام باب بيتها.", "في النهاية عرف الجميع كل شيء."], 'a' => 2, 'e' => "Une lettre mystérieuse éveille la curiosité et ouvre la voie à la suite."],
                    ['q' => "Quel est le rôle de la fin d'un récit ?", 'c' => ["clore l'action ou montrer ce qu'est devenu le problème", "donner un nouveau titre", "introduire des personnages sans raison", "commencer toujours un autre récit"], 'a' => 0, 'e' => "La fin présente le résultat des événements."],
                    ['q' => "Le héros change après une expérience difficile. Que cela signifie-t-il ?", 'c' => ["rien d'important ne s'est passé", "le lieu d'impression a changé", "l'intrigue a disparu", "le personnage a évolué"], 'a' => 3, 'e' => "Un changement dû à l'expérience marque l'évolution du personnage."],
                    ['q' => "Quelle description donne des informations sur un personnage ?", 'c' => ["كان البيت قريبًا.", "وصل القطار مساءً.", "كانت السماء غائمة.", "كان خالد هادئًا ويحب مساعدة جيرانه."], 'a' => 3, 'e' => "La phrase donne des traits de caractère et un comportement."],
                    ['q' => "Qu'est-ce qui aide le lecteur à suivre facilement un récit ?", 'c' => ["la clarté de l'enchaînement des événements et des relations entre personnages", "changer de sujet à chaque ligne", "cacher toutes les causes", "répéter le titre"], 'a' => 0, 'e' => "La cohérence et la suite logique des événements aident à comprendre ce qui se passe."],
                ],
            ],
            [
                'title' => "Personnages et narrateur",
                'description' => "Distinguer personnage principal et secondaire, comprendre le narrateur et quelques techniques narratives simples.",
                'questions' => [
                    ['q' => "Qui est le personnage principal ?", 'c' => ["celui autour de qui tournent les événements ou le problème principal", "n'importe qui apparaissant sur une seule ligne", "toujours l'auteur", "le lecteur"], 'a' => 0, 'e' => "Le personnage principal est le centre du récit."],
                    ['q' => "Quel est souvent le rôle d'un personnage secondaire ?", 'c' => ["faire avancer l'action ou révéler des aspects du personnage principal", "empêcher tout événement", "être toujours le narrateur", "écrire le titre du livre"], 'a' => 0, 'e' => "Les personnages secondaires peuvent soutenir le héros, s'opposer à lui ou faire avancer l'action."],
                    ['q' => "Le narrateur dit « ذهبت إلى السوق ورأيت صديقي ». Quel type de narration est le plus proche ?", 'c' => ["narration à la première personne", "narration à la troisième personne", "dialogue seulement", "description scientifique"], 'a' => 0, 'e' => "Les verbes « ذهبت » et « رأيت » montrent que le narrateur parle de lui-même."],
                    ['q' => "Quel pronom indique le plus souvent une narration à la troisième personne ?", 'c' => ["أنا", "نحن", "أنت", "هو ou هي"], 'a' => 3, 'e' => "La narration à la troisième personne parle des personnages avec « هو » et « هي »."],
                    ['q' => "Le narrateur dit : « شعرت بالخوف عندما فتحت الباب ». Que sait-on directement ?", 'c' => ["que le narrateur lui-même a eu peur", "que le lecteur a peur", "que la porte a parlé", "que le personnage est absent"], 'a' => 0, 'e' => "Le « je » de « شعرت » renvoie à l'expérience du narrateur lui-même."],
                    ['q' => "Quel exemple décrit un personnage par son comportement plutôt que par une description directe ?", 'c' => ["كان كريمًا.", "كان طويلًا.", "كان يعطي طعامه لمن يحتاجه.", "كان عمره عشرين عامًا."], 'a' => 2, 'e' => "Le comportement laisse le lecteur déduire la générosité."],
                    ['q' => "Un narrateur connaît les pensées de tous les personnages. Que cela signifie-t-il généralement ?", 'c' => ["il ne sait rien", "toute l'histoire est un dialogue", "le texte est un poème", "il possède une connaissance étendue des pensées des personnages"], 'a' => 3, 'e' => "Connaître les pensées de plusieurs personnages signale un narrateur omniscient."],
                    ['q' => "Qu'est-ce qui aide à comprendre un personnage complexe ?", 'c' => ["observer ses actes, ses paroles et ses décisions tout au long du récit", "regarder seulement son nom", "lire le dernier mot du récit", "ignorer son comportement"], 'a' => 0, 'e' => "Un personnage se comprend par l'ensemble de ses comportements, paroles et décisions."],
                    ['q' => "Un personnage change de position après une conversation avec quelqu'un. Qu'est-ce qui a pu l'influencer ?", 'c' => ["la couleur de la page", "le nombre de paragraphes", "le titre du livre", "le dialogue ou l'idée qu'il a entendue"], 'a' => 3, 'e' => "Un dialogue peut directement changer la position ou la décision d'un personnage."],
                    ['q' => "Pourquoi est-il important d'identifier le narrateur ?", 'c' => ["parce qu'il influence la manière dont les événements et informations parviennent au lecteur", "parce qu'il fixe le prix du livre", "parce qu'il change le nombre de pages", "parce qu'il choisit la couleur de la couverture"], 'a' => 0, 'e' => "Le narrateur détermine le point de vue et ce que le lecteur apprend."],
                ],
            ],
            [
                'title' => "La description en prose",
                'description' => "Voir comment l'auteur décrit lieux, personnages, objets et atmosphères.",
                'questions' => [
                    ['q' => "Quelle est la fonction de la description dans un texte en prose ?", 'c' => ["aider le lecteur à imaginer le lieu, la personne ou la scène", "supprimer les événements", "transformer le texte en poème", "empêcher de comprendre les détails"], 'a' => 0, 'e' => "La description donne des détails visuels et sensoriels qui forment une image mentale."],
                    ['q' => "Quelle phrase décrit un lieu de façon riche ?", 'c' => ["الحديقة موجودة.", "ذهبت إلى الحديقة.", "كانت الحديقة واسعة، وفيها أشجار عالية وبركة صغيرة قرب الباب.", "الحديقة."], 'a' => 2, 'e' => "La phrase donne plusieurs détails qui permettent d'imaginer le lieu."],
                    ['q' => "Quel mot décrit un son faible ?", 'c' => ["صاخب", "مدوٍ", "مرتفع", "خافت"], 'a' => 3, 'e' => "« خافت » veut dire faible, bas."],
                    ['q' => "Quelle phrase fait appel à la vue ?", 'c' => ["كانت السماء زرقاء والغيوم بيضاء.", "كانت رائحة الخبز شهية.", "كان صوت المطر عاليًا.", "كان الطعام دافئًا."], 'a' => 0, 'e' => "Le bleu et le blanc sont des détails que l'on voit."],
                    ['q' => "Quelle phrase fait appel à l'odorat ?", 'c' => ["كانت النافذة واسعة.", "سمعنا أصوات الأطفال.", "كان المقعد خشبيًا.", "امتلأت الغرفة برائحة الخبز الطازج."], 'a' => 3, 'e' => "L'odeur du pain relève de l'odorat et ajoute une dimension sensorielle."],
                    ['q' => "L'auteur décrit le lieu comme « هادئ ومظلم ». Quelle atmosphère est probable ?", 'c' => ["une ambiance calme pouvant porter une part de tension ou de mystère", "une fête bruyante", "une atmosphère très ensoleillée", "une ambiance sportive"], 'a' => 0, 'e' => "Le calme et l'obscurité peuvent créer un climat paisible mais mystérieux ou tendu selon le contexte."],
                    ['q' => "En quoi la description diffère-t-elle de la narration ?", 'c' => ["la description n'emploie pas de noms", "la narration n'a pas de verbes", "il n'y a aucune différence", "la description met l'accent sur les traits de la scène, la narration sur les événements et leur enchaînement"], 'a' => 3, 'e' => "La description donne des traits et des images ; la narration organise les événements."],
                    ['q' => "Quelle description de personnage repose sur l'apparence ?", 'c' => ["كان يساعد جيرانه.", "كان صبورًا.", "كان طويل القامة ويرتدي معطفًا رماديًا.", "كان يحب القراءة."], 'a' => 2, 'e' => "La taille et le vêtement sont des détails extérieurs."],
                    ['q' => "Pourquoi un auteur peut-il choisir une description brève plutôt que très longue ?", 'c' => ["parce que les longues descriptions sont interdites", "parce que les personnages n'ont pas besoin de lieux", "parce que le lecteur ne comprend aucune description", "pour garder un rythme rapide quand le récit n'a pas besoin de beaucoup de détails"], 'a' => 3, 'e' => "La quantité de description dépend du besoin de la scène."],
                    ['q' => "Quelle est la meilleure façon de lire une description littéraire ?", 'c' => ["ignorer tous les adjectifs", "se concentrer sur le titre seulement", "remarquer les mots sensoriels et l'ambiance ou l'image qu'ils créent", "compter les mots"], 'a' => 2, 'e' => "Les mots sensoriels et les qualités révèlent l'image que l'auteur veut transmettre."],
                ],
            ],
            [
                'title' => "Le dialogue en prose",
                'description' => "Apprendre la fonction du dialogue : il révèle les personnages, fait avancer l'action et montre accord ou désaccord.",
                'questions' => [
                    ['q' => "Qu'est-ce que le dialogue dans un récit ?", 'c' => ["seulement la description du lieu", "le titre du récit", "un récit sans paroles", "un échange de paroles entre deux personnages ou plus"], 'a' => 3, 'e' => "Le dialogue est la parole échangée entre personnages."],
                    ['q' => "Comment le dialogue aide-t-il à comprendre un personnage ?", 'c' => ["il cache toujours ses qualités", "il arrête toujours l'action", "il fixe le prix du livre", "il révèle sa façon de penser, sa position et son style de parole"], 'a' => 3, 'e' => "Le choix des mots et la manière de répondre révèlent le personnage."],
                    ['q' => "Lequel de ces exemples est un dialogue ?", 'c' => ["عاد خالد إلى البيت.", "كان البيت واسعًا.", "قال خالد: «سأعود بعد قليل.» فأجاب علي: «سأنتظرك.»", "في المساء بدأت الرحلة."], 'a' => 2, 'e' => "Le troisième contient des paroles échangées entre deux personnages."],
                    ['q' => "Deux personnages se disputent dans un dialogue. Qu'est-ce que cela peut montrer ?", 'c' => ["l'annulation du récit", "l'arrêt de toute évolution", "le conflit ou la différence de points de vue", "la transformation du texte en poème"], 'a' => 2, 'e' => "Le désaccord dans un dialogue révèle un conflit et fait avancer l'action."],
                    ['q' => "Quelle réplique montre qu'un personnage est hésitant ?", 'c' => ["«سأذهب الآن بلا تردد.»", "«وصلت في الثامنة.»", "«لا أعرف... ربما أذهب، وربما أبقى.»", "«الباب مفتوح.»"], 'a' => 2, 'e' => "L'hésitation se voit dans l'indécision et dans « ربما »."],
                    ['q' => "Quand le dialogue est-il utile dans un récit ?", 'c' => ["quand il répète des phrases sans but", "quand il révèle des informations ou des sentiments ou fait avancer l'action", "quand il arrête toute l'action", "quand il donne des informations sans rapport"], 'a' => 1, 'e' => "Un bon dialogue a une fonction narrative : révéler un personnage, informer, créer un conflit."],
                    ['q' => "Quelqu'un dit « أعتذر عن خطئي ». Que sait-on de sa position ?", 'c' => ["il refuse la responsabilité", "il parle de la météo", "il demande où est le lieu", "il reconnaît une faute et s'en excuse"], 'a' => 3, 'e' => "La phrase exprime clairement des excuses et la reconnaissance d'une erreur."],
                    ['q' => "Pourquoi le dialogue ne devrait-il pas donner toutes les informations du récit d'un coup ?", 'c' => ["parce que le dialogue est interdit dans les récits", "parce qu'un dialogue naturel dépend de la situation et révèle les informations progressivement", "parce que les personnages ne parlent pas", "parce que le dialogue doit toujours être court"], 'a' => 1, 'e' => "Un dialogue naturel sert la situation et ne doit pas devenir un exposé mécanique."],
                    ['q' => "Quelle réplique exprime clairement la colère ?", 'c' => ["«شكرًا لك على المساعدة.»", "«سأعود بعد قليل.»", "«الجو جميل اليوم.»", "«قلت لك إنني لا أقبل هذا التصرف!»"], 'a' => 3, 'e' => "La formulation et le point d'exclamation traduisent l'émotion et la colère."],
                    ['q' => "Quelle question est utile pour analyser un dialogue ?", 'c' => ["De quelle couleur est le papier ?", "Que révèle la parole de chaque personnage sur sa position ou sa personnalité ?", "Combien de pages compte le livre ?", "Où le lecteur a-t-il acheté son stylo ?"], 'a' => 1, 'e' => "L'analyse du dialogue regarde ce que les paroles révèlent des personnages, du conflit et des événements."],
                ],
            ],
            [
                'title' => "L'idée et le sujet dans un texte en prose",
                'description' => "S'entraîner à trouver l'idée générale, le message, le sujet et la morale de courts textes en prose.",
                'questions' => [
                    ['q' => "Lisez : « ساعدت مريم جارتها الكبيرة في حمل الأغراض، وشكرتها الجارة كثيرًا. » Quelle est l'idée la plus proche ?", 'c' => ["la ville est bondée", "aider les autres est une bonne action", "le magasin est fermé", "Mariam n'aime pas sa voisine"], 'a' => 1, 'e' => "L'événement met en valeur l'entraide et le respect d'autrui."],
                    ['q' => "Un texte parle d'un élève qui affronte une difficulté puis continue d'essayer jusqu'à réussir. Quel est le message le plus proche ?", 'c' => ["la réussite arrive sans effort", "l'éducation n'a pas d'importance", "la persévérance aide à surmonter les difficultés", "le problème ne peut pas être résolu"], 'a' => 2, 'e' => "L'obstination de l'élève puis sa réussite soutiennent l'idée de persévérance."],
                    ['q' => "Quelle différence y a-t-il entre le sujet d'un texte et son idée ?", 'c' => ["aucune différence", "le sujet est la dernière phrase", "le sujet est plus large, l'idée précise ce que le texte en dit", "l'idée est le nom de l'auteur"], 'a' => 2, 'e' => "Un sujet comme « l'amitié » peut avoir pour idée que le véritable ami se voit dans l'épreuve."],
                    ['q' => "Quelle question aide à déterminer l'idée générale ?", 'c' => ["Combien de signes de ponctuation y a-t-il ?", "De quelle couleur est la couverture ?", "De quoi parlent la plupart des événements ou détails du texte ?", "Combien de fois avez-vous lu la page ?"], 'a' => 2, 'e' => "L'idée générale ressort du sujet qui rassemble la plupart des parties du texte."],
                    ['q' => "Lisez : « كان خالد يضع جزءًا من مصروفه كل أسبوع حتى اشترى الدراجة التي أرادها. » Quelle est l'idée ?", 'c' => ["les vélos sont inutiles", "économiser régulièrement aide à atteindre un objectif", "Khaled a dépensé tout son argent", "la famille ne soutient pas Khaled"], 'a' => 1, 'e' => "Le récit relie l'épargne progressive à la réalisation du but."],
                    ['q' => "Un texte décrit deux amis qui se soutiennent dans les difficultés. Quel est le sujet ?", 'c' => ["le voyage seulement", "la nourriture", "l'amitié et l'entraide", "la technologie"], 'a' => 2, 'e' => "Le soutien mutuel renvoie à l'amitié et à la coopération."],
                    ['q' => "Laquelle de ces phrases exprime plutôt une morale qu'un événement ?", 'c' => ["دخل سامي الغرفة.", "جلست مريم قرب النافذة.", "بدأ المطر مساءً.", "الصدق يبني الثقة بين الناس."], 'a' => 3, 'e' => "La dernière phrase énonce un sens général que l'on peut tirer d'une histoire ou d'une expérience."],
                    ['q' => "Un récit peut-il porter plus d'un sens ou d'une idée ?", 'c' => ["non, chaque récit n'a qu'un mot", "oui, il peut combiner une idée principale et des idées secondaires", "non, parce que les personnages l'en empêchent", "oui, mais seulement si c'est un poème"], 'a' => 1, 'e' => "Un récit peut traiter un sujet principal tout en contenant des valeurs et des idées secondaires."],
                    ['q' => "Quel est le meilleur titre pour un texte sur un élève qui apprend de ses erreurs ?", 'c' => ["رحلة إلى البحر", "ألوان الملابس", "التعلم من الأخطاء", "الأخبار الرياضية"], 'a' => 2, 'e' => "Ce titre résume l'expérience au cœur du texte."],
                    ['q' => "Pourquoi est-il utile de déterminer l'idée générale avant d'analyser les détails ?", 'c' => ["parce que cela dispense de lire", "parce qu'elle donne un cadre pour comprendre le rôle de chaque événement ou personnage", "parce qu'elle suffit pour connaître chaque mot", "parce qu'elle fixe le prix du livre"], 'a' => 1, 'e' => "L'idée générale permet de situer les détails dans un sens plus large."],
                ],
            ],
            [
                'title' => "Chronologie et temps dans le récit",
                'description' => "S'entraîner à suivre et ordonner les événements, comprendre les mots de temps et les liens entre les événements.",
                'questions' => [
                    ['q' => "Lisez : « استيقظ سامي، تناول فطوره، ثم خرج إلى المدرسة. » Que fait-il en premier ?", 'c' => ["il se réveille", "il prend son petit-déjeuner", "il part à l'école", "il rentre à la maison"], 'a' => 0, 'e' => "Le premier événement du texte est le réveil de Sami."],
                    ['q' => "Quel mot indique généralement un événement ultérieur ?", 'c' => ["أمس", "قبل", "أولًا", "ثم"], 'a' => 3, 'e' => "« ثم » relie un événement à ce qui vient après dans la chronologie."],
                    ['q' => "Quel mot indique le début d'une suite d'événements ?", 'c' => ["أخيرًا", "بعد ذلك", "أولًا", "في النهاية"], 'a' => 2, 'e' => "« أولًا » marque le début de l'ordre."],
                    ['q' => "Lisez : « خرجت ليلى من البيت، وبعد ساعة وصلت إلى المكتبة. » Que comprend-on ?", 'c' => ["l'arrivée à la bibliothèque a eu lieu avant la sortie", "l'arrivée à la bibliothèque a eu lieu une heure après la sortie", "les deux événements ont eu lieu au même instant", "le texte n'indique aucun ordre"], 'a' => 1, 'e' => "« بعد ساعة » précise que l'arrivée est postérieure à la sortie."],
                    ['q' => "Un récit commence par l'enfance du héros puis passe à sa vie actuelle. Qu'est-ce qui s'est produit ?", 'c' => ["seulement un changement de lieu", "un passage dans le temps vers une période plus tardive", "la disparition du personnage", "le texte est devenu poème"], 'a' => 1, 'e' => "Passer de l'enfance au présent est un saut dans le temps."],
                    ['q' => "À quoi sert un ordre clair des événements ?", 'c' => ["il rend toujours le récit plus court", "il aide le lecteur à comprendre ce qui s'est passé d'abord et ensuite", "il empêche les personnages", "il supprime la description"], 'a' => 1, 'e' => "Une chronologie claire facilite le suivi du récit et la compréhension des liens entre événements."],
                    ['q' => "Lisez : « بعد أن أنهى فؤاد واجبه، ذهب للعب. » Qu'est-ce qui s'est passé d'abord ?", 'c' => ["il est allé jouer", "il a fini ses devoirs", "il est retourné à l'école", "il a dormi"], 'a' => 1, 'e' => "La phrase montre que les devoirs ont précédé le jeu."],
                    ['q' => "Quelle expression marque la fin des événements ?", 'c' => ["في البداية", "أولًا", "قبل ذلك", "في النهاية"], 'a' => 3, 'e' => "« في النهاية » indique la dernière partie ou le résultat final."],
                    ['q' => "L'auteur emploie « بعد سنوات ». Qu'attendez-vous ?", 'c' => ["un changement de couleur du personnage", "un saut dans le temps vers une période plus éloignée", "la suppression du lieu", "forcément le début d'un dialogue"], 'a' => 1, 'e' => "« بعد سنوات » transporte le lecteur plus tard, avec un intervalle clair."],
                    ['q' => "Quelle question aide le mieux à comprendre l'enchaînement d'un récit ?", 'c' => ["Quelle est la couleur de la couverture ?", "Que s'est-il passé d'abord, puis ensuite, et comment les événements se sont-ils terminés ?", "Combien de lettres compte le titre ?", "Quel est le prix du livre ?"], 'a' => 1, 'e' => "Cette question se concentre sur la structure temporelle essentielle du récit."],
                ],
            ],
            [
                'title' => "Applications avancées pour débutants en prose",
                'description' => "Appliquer les compétences de narration, de description, de dialogue et d'analyse de personnages et d'idées à des situations variées.",
                'questions' => [
                    ['q' => "Lisez : « وقف سامر أمام الباب طويلًا، ثم طرقه أخيرًا. » Que révèle le mot « أخيرًا » ?", 'c' => ["que l'événement a eu lieu en premier", "que l'action est venue après une attente ou une hésitation", "que la porte était ouverte", "que Samer est parti"], 'a' => 1, 'e' => "« أخيرًا » indique que frapper à la porte est arrivé après une attente ou une hésitation."],
                    ['q' => "Lisez : « كانت الغرفة صغيرة، لكن نافذتها تطل على بحر واسع. » Quel est l'élément descriptif le plus marquant ?", 'c' => ["la description du narrateur", "le contraste entre l'étroitesse de la chambre et l'immensité de la vue", "un long dialogue", "l'histoire de la ville"], 'a' => 1, 'e' => "La phrase oppose la petite chambre à la vaste vue extérieure pour dessiner le lieu."],
                    ['q' => "Un personnage dit : « لن أترك صديقي وحده في هذه الأزمة ». Quelle qualité ressort le plus ?", 'c' => ["la paresse", "la loyauté", "l'indifférence", "la peur de lire"], 'a' => 1, 'e' => "Rester auprès d'un ami en difficulté révèle la loyauté et le soutien."],
                    ['q' => "Lisez : « عاد الطفل إلى البيت وهو يبتسم ويحمل شهادة في يده. » Quelle déduction est la plus proche ?", 'c' => ["il était en colère", "il a réussi quelque chose ou reçu une bonne nouvelle", "il a perdu quelque chose d'important", "il ne savait pas quoi faire"], 'a' => 1, 'e' => "Le sourire et le certificat suggèrent une réussite ou une bonne nouvelle."],
                    ['q' => "Quelle phrase marque le passage de la description à l'action ?", 'c' => ["كانت السماء مظلمة والغيوم كثيفة.", "كانت السماء مظلمة، وفجأة سمعنا طرقًا على الباب.", "كان البيت واسعًا وهادئًا.", "النافذة صغيرة."], 'a' => 1, 'e' => "La phrase commence par la description puis passe à un événement soudain : des coups à la porte."],
                    ['q' => "Qu'est-ce qui rend souvent la fin d'un récit satisfaisante pour le lecteur ?", 'c' => ["ajouter un problème plus grand sans raison", "donner un résultat compréhensible ou répondre à la question centrale du récit", "changer les noms des personnages", "ouvrir un autre sujet"], 'a' => 1, 'e' => "Une bonne fin donne un résultat lié au problème ou à la question de départ."],
                    ['q' => "Des lettres sont utilisées dans un récit. Quelle fonction possible ont-elles ?", 'c' => ["supprimer le rôle des personnages", "transmettre des informations ou des sentiments que le lecteur ne connaît pas autrement", "transformer le texte en tableau", "empêcher l'évolution des événements"], 'a' => 1, 'e' => "Les lettres peuvent révéler des informations ou des émotions autrement que par le dialogue direct."],
                    ['q' => "Lisez : « كانت ليلى مترددة في السفر، لكن نصيحة أختها جعلتها تتخذ القرار. » Qu'est-ce qui l'a poussée à décider ?", 'c' => ["la météo seulement", "le conseil de sa sœur", "l'arrivée à l'école", "la fermeture de la maison"], 'a' => 1, 'e' => "Le texte relie directement la décision de Layla au conseil de sa sœur."],
                    ['q' => "Quelle question aide à distinguer la description du dialogue dans un passage ?", 'c' => ["Combien y a-t-il de pages ?", "L'auteur décrit-il les traits de la scène ou rapporte-t-il les paroles des personnages ?", "Qui a imprimé le livre ?", "Quelle est la couleur de la couverture ?"], 'a' => 1, 'e' => "La description porte sur les traits et qualités, le dialogue rapporte les paroles des personnages."],
                    ['q' => "Après lecture d'un texte en prose, quelle est la meilleure étape avant d'écrire votre avis ?", 'c' => ["se fier seulement au titre", "déterminer l'idée du texte et s'appuyer sur un exemple ou un événement qui soutient l'avis", "donner un avis sans rapport avec le texte", "réécrire tout le texte"], 'a' => 1, 'e' => "Un avis littéraire solide s'appuie sur ce qu'on a lu et sur une preuve claire du texte."],
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
