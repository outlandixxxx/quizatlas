<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ReadingComprehensionBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'reading-comprehension')->firstOrFail();

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
                'title' => "Idée principale et détails",
                'description' => "S'entraîner à saisir l'idée essentielle d'un texte et à relever les détails que l'auteur donne clairement.",
                'questions' => [
                    ['q' => "« تحب سارة القراءة قبل النوم. كل مساء تختار قصة قصيرة وتقرأ منها عدة صفحات. » Quelle est l'idée principale ?", 'c' => ["Sara aime lire le soir", "Sara n'aime pas les histoires", "Sara fait des mathématiques avant de dormir", "Sara va à la bibliothèque chaque matin"], 'a' => 0, 'e' => "Les deux phrases décrivent l'habitude de lecture de Sara avant de dormir."],
                    ['q' => "« يعيش سامي قريبًا من المدرسة، لذلك يذهب إليها سيرًا على الأقدام. » Pourquoi Sami va-t-il à l'école à pied ?", 'c' => ["parce qu'il habite près de l'école", "parce qu'il n'aime pas le bus", "parce qu'il se réveille tard", "parce qu'il rend visite à un ami là-bas"], 'a' => 0, 'e' => "Le texte donne directement la raison : la proximité de l'école."],
                    ['q' => "« في الحديقة أشجار كثيرة وزهور ملونة ومقاعد خشبية. يأتي الناس إليها للراحة. » Quelle description convient au jardin ?", 'c' => ["un lieu réservé à l'étude", "un endroit sans arbres", "un endroit calme pour se reposer, au contact de la nature", "un lieu où l'on vend des vêtements"], 'a' => 2, 'e' => "Les arbres, les fleurs et les bancs soutiennent l'idée d'un lieu de repos et de nature."],
                    ['q' => "« استيقظ كريم مبكرًا، تناول فطوره، ثم ذهب إلى العمل. » Que fait Karim après le petit-déjeuner ?", 'c' => ["il va au travail", "il va au marché", "il lit un livre", "il se rendort"], 'a' => 0, 'e' => "L'ordre est clair : réveil, petit-déjeuner, puis départ au travail."],
                    ['q' => "« تحب نادية زراعة النباتات في شرفتها. لديها نعناع وريحان ونبتة صغيرة من الطماطم. » Quelle information figure dans le texte ?", 'c' => ["elle cultive de grands arbres", "elle n'aime pas les herbes aromatiques", "elle a un petit plant de tomate", "elle plante dans le jardin public"], 'a' => 2, 'e' => "Le texte mentionne un petit plant de tomate sur le balcon."],
                    ['q' => "« كان المتجر مزدحمًا مساء الجمعة، لكن صباح السبت كان هادئًا. » Quand le magasin était-il le plus calme ?", 'c' => ["le samedi matin", "le vendredi soir", "tout le temps", "au milieu de la nuit"], 'a' => 0, 'e' => "Le texte oppose les deux moments : le samedi matin était calme."],
                    ['q' => "« اشترى يوسف دفترًا جديدًا ليكتب فيه ملاحظات الدرس. » Quel est le but du cahier ?", 'c' => ["noter le cours", "conserver de la nourriture", "acheter des livres", "dessiner uniquement"], 'a' => 0, 'e' => "Le but est donné : Youssef y écrira les notes du cours."],
                    ['q' => "« تغلق المكتبة أبوابها الساعة الثامنة مساءً. وصل أحمد عند السابعة والنصف. » Ahmed est-il arrivé avant la fermeture ?", 'c' => ["oui, avant la fermeture", "non, après la fermeture", "il est arrivé à huit heures pile", "le texte ne donne pas son heure d'arrivée"], 'a' => 0, 'e' => "19 h 30 est avant 20 h : il est arrivé avant la fermeture."],
                    ['q' => "« تستيقظ ليلى مبكرًا لأنها تحب أن تبدأ يومها بهدوء. » Quelle raison est donnée à son réveil matinal ?", 'c' => ["elle travaille la nuit", "l'école est très éloignée", "elle aime commencer sa journée dans le calme", "elle ne dort pas"], 'a' => 2, 'e' => "Le texte donne cette raison directement avec « لأنها »."],
                    ['q' => "« يذهب عمر إلى السوق يوم السبت لشراء الخضروات والفواكه لعائلته. » Quelle phrase résume le texte ?", 'c' => ["Omar vend des voitures le samedi", "Omar achète des produits alimentaires pour sa famille le samedi", "Omar va à l'école le samedi", "Omar n'achète pas de fruits"], 'a' => 1, 'e' => "La deuxième réunit l'essentiel sans ajouter d'information absente du texte."],
                ],
            ],
            [
                'title' => "Extraire des informations du texte",
                'description' => "Retrouver noms de personnes, lieux, heures et événements cités directement dans de courts textes.",
                'questions' => [
                    ['q' => "« سافرت مريم إلى طنجة في شهر يوليو لزيارة خالتها. » Où Mariam est-elle allée ?", 'c' => ["à Tanger", "à Fès", "à Marrakech", "à Rabat"], 'a' => 0, 'e' => "Le texte cite Tanger comme destination."],
                    ['q' => "« يبدأ الدرس الساعة التاسعة صباحًا. » Quand le cours commence-t-il ?", 'c' => ["à neuf heures du matin", "à sept heures du soir", "à midi", "à dix heures du soir"], 'a' => 0, 'e' => "L'heure est donnée directement dans le texte."],
                    ['q' => "« اشترى خالد ثلاث تفاحات واثنتين من البرتقال. » Combien de fruits a-t-il achetés en tout ?", 'c' => ["4", "6", "5", "3"], 'a' => 2, 'e' => "3 pommes et 2 oranges font 5 fruits."],
                    ['q' => "« وضعت المعلمة الكتب على الرف الأول. » Où la maîtresse a-t-elle posé les livres ?", 'c' => ["sur la table", "dans le sac", "sur la première étagère", "dans l'armoire"], 'a' => 2, 'e' => "Le lieu est précisé : la première étagère."],
                    ['q' => "« عاد الأب من العمل عند الخامسة مساءً. » Quand le père est-il rentré ?", 'c' => ["à trois heures de l'après-midi", "à cinq heures du soir", "à six heures du matin", "à minuit"], 'a' => 1, 'e' => "L'heure de retour figure dans le texte : cinq heures du soir."],
                    ['q' => "« في القرية نهر صغير يمر بجانب المدرسة. » Qu'est-ce qui passe à côté de l'école ?", 'c' => ["une autoroute", "un grand marché", "un petit fleuve", "un vaste jardin"], 'a' => 2, 'e' => "D'après le texte, c'est un petit cours d'eau."],
                    ['q' => "« أحمد يحب الشاي، بينما أخته تفضل الحليب. » Que préfère sa sœur ?", 'c' => ["le thé", "le café", "le jus", "le lait"], 'a' => 3, 'e' => "Le texte indique que sa sœur préfère le lait."],
                    ['q' => "« زارت الأسرة المتحف يوم الأحد، ثم تناولت الغداء في مطعم قريب. » Quel jour la famille a-t-elle visité le musée ?", 'c' => ["le dimanche", "le vendredi", "le lundi", "le samedi"], 'a' => 0, 'e' => "Le texte cite le dimanche."],
                    ['q' => "« يملك حسن قطة بيضاء اسمها لوز. » Comment s'appelle la chatte ?", 'c' => ["Hassan", "Blanche", "Louz (لوز)", "Nour"], 'a' => 2, 'e' => "Le nom de la chatte est « لوز » ; « بيضاء » décrit sa couleur."],
                    ['q' => "« استعار الطالب كتابًا من مكتبة المدرسة وأعاده بعد أسبوع. » D'où l'élève a-t-il emprunté le livre ?", 'c' => ["d'une librairie", "de chez un ami", "de la bibliothèque municipale", "de la bibliothèque de l'école"], 'a' => 3, 'e' => "La source citée est la bibliothèque de l'école."],
                ],
            ],
            [
                'title' => "Cause et conséquence",
                'description' => "Apprendre à relier événements, causes et conséquences comme le texte les présente.",
                'questions' => [
                    ['q' => "« نسي فهد مظلته، وعندما خرج بدأ المطر يهطل بغزارة. » Quel problème a-t-il rencontré ?", 'c' => ["il est sorti sans parapluie alors qu'il pleuvait", "il a oublié son sac à l'école", "il est arrivé dans un endroit fermé", "il n'a pas trouvé ses chaussures"], 'a' => 0, 'e' => "Le problème vient de sa sortie sans parapluie au moment de la pluie."],
                    ['q' => "« لم ينم يوسف جيدًا، لذلك شعر بالتعب في الصباح. » Quelle est la cause de la fatigue ?", 'c' => ["le temps froid", "le manque de sommeil", "le travail du soir uniquement", "le petit-déjeuner"], 'a' => 1, 'e' => "Le texte relie la fatigue à une mauvaise nuit."],
                    ['q' => "« زرعت الأسرة أشجارًا كثيرة، فأصبح ظل الحديقة أكبر. » Quelle est la conséquence de la plantation d'arbres ?", 'c' => ["le jardin a disparu", "les plantes ont diminué", "l'ombre du jardin a augmenté", "le jardin est devenu plus bruyant"], 'a' => 2, 'e' => "Plus d'arbres a produit plus d'ombre."],
                    ['q' => "« تدرّب اللاعب كل يوم، فتحسن أداؤه في المباراة. » À quoi l'entraînement a-t-il conduit ?", 'c' => ["à l'annulation du match", "à l'arrêt de l'entraînement du joueur", "à une baisse de son niveau", "à l'amélioration de ses performances"], 'a' => 3, 'e' => "L'amélioration est le résultat direct de l'entraînement quotidien."],
                    ['q' => "« وصلت الحافلة متأخرة، لذلك بدأ الطلاب الحصة بعد موعدها. » Pourquoi le cours a-t-il commencé en retard ?", 'c' => ["parce que le bus est arrivé en retard", "parce que le professeur est parti", "parce que les élèves ne sont pas venus", "parce que l'école était fermée"], 'a' => 0, 'e' => "Le retard du bus explique le retard du début du cours."],
                    ['q' => "« شربت منى الماء بعد المشي الطويل لأنها كانت عطشى. » Pourquoi a-t-elle bu de l'eau ?", 'c' => ["parce qu'elle voulait dormir", "parce qu'elle avait faim", "parce qu'elle avait soif", "parce qu'elle était à l'école"], 'a' => 2, 'e' => "La soif est la cause indiquée."],
                    ['q' => "« انقطعت الكهرباء، فتوقف الحاسوب عن العمل. » Qu'est-ce qui s'est passé en premier ?", 'c' => ["l'ordinateur s'est arrêté", "le courant a été coupé", "le courant est revenu", "l'ordinateur a été réparé"], 'a' => 1, 'e' => "La coupure de courant précède l'arrêt de l'ordinateur, comme l'indique le « فـ »."],
                    ['q' => "« كان الطريق مبللًا، لذلك قاد السائق ببطء. » Pourquoi a-t-il conduit lentement ?", 'c' => ["parce qu'il était en retard", "parce que la route était mouillée", "parce que la voiture était neuve", "parce qu'il ne connaissait pas le chemin"], 'a' => 1, 'e' => "La route mouillée est la raison indiquée."],
                    ['q' => "« ادخر خالد جزءًا من مصروفه كل أسبوع، وبعد شهر اشترى كتابًا كان يريده. » Qu'est-ce qui l'a aidé à acheter le livre ?", 'c' => ["dépenser vite son argent", "oublier le livre", "aller à l'école", "épargner régulièrement"], 'a' => 3, 'e' => "Épargner petit à petit lui a donné l'argent nécessaire."],
                    ['q' => "« لم يحمل علي معطفه، فشعر بالبرد عندما خرج. » Quelle relation le texte montre-t-il ?", 'c' => ["ne pas prendre son manteau a entraîné la sensation de froid", "le froid a poussé à acheter un manteau", "le manteau est la cause de la pluie", "sortir a mis fin à l'hiver"], 'a' => 0, 'e' => "Le texte montre clairement que l'absence de manteau précède le froid ressenti."],
                ],
            ],
            [
                'title' => "Suite et ordre des événements",
                'description' => "S'entraîner à suivre les événements dans l'ordre et à relier des mots comme d'abord, puis, ensuite et enfin.",
                'questions' => [
                    ['q' => "« استيقظت ليلى، ثم غسلت وجهها، وبعد ذلك تناولت الفطور. » Qu'a-t-elle fait en premier ?", 'c' => ["elle s'est lavé le visage", "elle s'est réveillée", "elle a pris son petit-déjeuner", "elle est allée au travail"], 'a' => 1, 'e' => "Le premier événement du texte est son réveil."],
                    ['q' => "« أولًا فتح سامي الحاسوب، ثم كتب الواجب، وأخيرًا حفظ الملف. » Quelle est la dernière étape ?", 'c' => ["ouvrir l'ordinateur", "écrire le devoir", "imprimer le livre", "enregistrer le fichier"], 'a' => 3, 'e' => "« أخيرًا » désigne l'enregistrement du fichier comme dernière étape."],
                    ['q' => "Quel ordre correspond au texte « لبس خالد حذاءه، أخذ حقيبته، خرج من البيت » ?", 'c' => ["il sort → il met ses chaussures → il prend son sac", "il met ses chaussures → il prend son sac → il sort", "il prend son sac → il sort → il met ses chaussures", "il sort → il prend son sac → il met ses chaussures"], 'a' => 1, 'e' => "L'ordre correct est celui du texte."],
                    ['q' => "« بعد أن أنهت مريم واجبها، لعبت قليلًا ثم تناولت العشاء. » Que fait Mariam après avoir joué ?", 'c' => ["elle va à l'école", "elle commence ses devoirs", "elle dîne", "elle s'endort tout de suite"], 'a' => 2, 'e' => "Le dîner vient après le jeu."],
                    ['q' => "« أولًا جمعنا الأوراق، ثم رتبناها، وبعد ذلك وضعناها في الملف. » Que s'est-il passé juste après avoir rassemblé les feuilles ?", 'c' => ["on les a mises dans le dossier", "on les a jetées", "on a lu une histoire", "on les a rangées"], 'a' => 3, 'e' => "L'étape suivante était de les ordonner."],
                    ['q' => "« وصل القطار، صعد الركاب، ثم انطلق. » Qu'est-ce qui s'est passé avant le départ du train ?", 'c' => ["le train est revenu à la gare", "les passagers sont montés", "les passagers sont descendus", "le magasin a fermé"], 'a' => 1, 'e' => "La montée des passagers précède le départ."],
                    ['q' => "Quel mot aide le plus à repérer le dernier événement d'un texte ?", 'c' => ["أولًا", "قبل", "أمس", "أخيرًا"], 'a' => 3, 'e' => "« أخيرًا » signale la dernière étape ou le dernier événement."],
                    ['q' => "« استحم خالد، ارتدى ملابسه، ثم تناول العشاء. » Quel événement précède immédiatement le dîner ?", 'c' => ["il a enfilé ses vêtements", "il a seulement pris sa douche", "il est allé à l'école", "il a lu un livre"], 'a' => 0, 'e' => "S'habiller vient après la douche et juste avant le dîner."],
                    ['q' => "« في الصباح ذهبت إلى السوق، وبعد الظهر زرت صديقي، وفي المساء عدت إلى المنزل. » Quand a eu lieu la visite à l'ami ?", 'c' => ["le matin", "l'après-midi", "le soir", "la nuit"], 'a' => 1, 'e' => "Le texte indique « بعد الظهر »."],
                    ['q' => "« زرع البستاني البذور، سقاها، ثم انتظر نموها. » Quelle est la deuxième étape ?", 'c' => ["semer les graines", "cueillir les fruits", "arroser les graines", "attendre leur pousse"], 'a' => 2, 'e' => "Après avoir semé, il les a arrosées."],
                ],
            ],
            [
                'title' => "Le sens d'un mot d'après le contexte",
                'description' => "Déduire le sens de mots simples grâce à la phrase ou au paragraphe où ils apparaissent.",
                'questions' => [
                    ['q' => "« كان الطريق مزدحمًا بالسيارات، لذلك وصلنا متأخرين. » Que signifie « مزدحمًا » ici ?", 'c' => ["rempli d'un grand nombre de voitures", "tout à fait vide", "très court", "toujours fermé"], 'a' => 0, 'e' => "Beaucoup de voitures montre que la route est encombrée."],
                    ['q' => "« أخذ الطفل رشفة صغيرة من الماء. » Que veut dire « رشفة » ?", 'c' => ["un grand verre", "une bouteille entière", "une petite quantité qu'on boit", "un morceau de nourriture"], 'a' => 2, 'e' => "Une « رشفة » est une petite gorgée."],
                    ['q' => "« كان منزلهم هادئًا، فلم نسمع أي ضجيج. » Que signifie « هادئًا » ?", 'c' => ["rempli de monde", "très haut", "encombré de voitures", "peu bruyant"], 'a' => 3, 'e' => "Ne pas entendre de bruit montre que la maison est calme."],
                    ['q' => "« فرح الطفل عندما وجد لعبته المفقودة. » Que signifie « المفقودة » ?", 'c' => ["toute neuve", "celle qu'il n'avait pas retrouvée depuis un moment", "toujours cassée", "très grande"], 'a' => 1, 'e' => "Un jouet « مفقودة » est un jouet perdu, qu'on a ensuite retrouvé."],
                    ['q' => "« كان المعلم يشرح الدرس بوضوح، لذلك فهم الطلاب الفكرة بسرعة. » Que signifie « بوضوح » ?", 'c' => ["d'une manière facile à comprendre", "seulement à voix très basse", "très vite sans expliquer", "sans utiliser de mots"], 'a' => 0, 'e' => "Les élèves ont compris vite, donc l'explication était claire."],
                    ['q' => "« تحتاج النبتة إلى ضوء كافٍ حتى تنمو جيدًا. » Que signifie « كافٍ » ?", 'c' => ["très faible", "nul", "en quantité suffisante", "toujours trop important"], 'a' => 2, 'e' => "« كافٍ » veut dire suffisant, qui répond au besoin."],
                    ['q' => "« وضع المدير موعدًا محددًا للاجتماع. » Que signifie « محددًا » ?", 'c' => ["absent", "variable à chaque minute", "inexistant", "connu et précis"], 'a' => 3, 'e' => "Un rendez-vous « محدد » est fixé et clair."],
                    ['q' => "« حافظت سارة على كتبها بعناية، فلم تتلف. » Que signifie « بعناية » ?", 'c' => ["vite et au hasard", "avec attention et précaution", "sans toucher les livres", "à voix haute"], 'a' => 1, 'e' => "Prendre soin des livres, c'est y faire attention."],
                    ['q' => "« كان البحر هائجًا، فبقي الصيادون على الشاطئ. » Que signifie « هائجًا » ?", 'c' => ["tout à fait calme", "sec", "agité, aux vagues fortes", "petit"], 'a' => 2, 'e' => "Les pêcheurs restent à terre parce que la mer est agitée."],
                    ['q' => "« اشترى أبي مصباحًا ساطعًا ليقرأ في المساء. » Que signifie « ساطعًا » ?", 'c' => ["très lourd", "seulement petit", "cassé", "qui éclaire fortement"], 'a' => 3, 'e' => "Une lampe « ساطع » donne une lumière forte qui aide à lire."],
                ],
            ],
            [
                'title' => "Déductions simples",
                'description' => "Tirer des conclusions faciles en s'appuyant sur plusieurs informations du texte.",
                'questions' => [
                    ['q' => "« خرجت ندى من البيت ومعها مظلة، وكانت الغيوم داكنة في السماء. » Que peut-on en déduire ?", 'c' => ["il est probable qu'il va pleuvoir", "il fait très chaud, c'est sûr", "Nada va nager", "le ciel est totalement dégagé"], 'a' => 0, 'e' => "Le parapluie et les nuages sombres suggèrent la pluie, sans que ce soit une certitude."],
                    ['q' => "« دخل سامر إلى الغرفة فوجد الكتب مبعثرة على الأرض، فبدأ يجمعها. » Que comprend-on de la pièce ?", 'c' => ["elle était vide de livres", "elle était en désordre", "elle était toujours fermée", "elle était dans le jardin"], 'a' => 1, 'e' => "Des livres éparpillés par terre montrent que la pièce n'était pas rangée."],
                    ['q' => "« ارتدى الأطفال معاطفهم وقبعاتهم قبل الخروج. » Quelle déduction est la plus proche ?", 'c' => ["il fait très chaud", "les enfants vont à la mer", "il fait froid ou assez froid", "ils se préparent à dormir"], 'a' => 2, 'e' => "Manteaux et bonnets suggèrent un temps froid."],
                    ['q' => "« عاد ياسين إلى البيت مبتسمًا ويحمل شهادة في يده. » Que peut-on conclure ?", 'c' => ["il revenait de dormir", "il avait perdu quelque chose d'important", "il allait à l'école", "il avait une raison d'être content, peut-être une réussite"], 'a' => 3, 'e' => "Le sourire et le certificat suggèrent une réussite ou une bonne nouvelle."],
                    ['q' => "« وجدت ليلى الكتاب مفتوحًا على صفحة فيها صور عن الحيوانات. » Quel est probablement le sujet du livre ?", 'c' => ["seulement les mathématiques", "la cuisine", "les voitures", "les animaux"], 'a' => 3, 'e' => "Des images d'animaux sur la page font penser à un livre sur les animaux."],
                    ['q' => "« كان أحمد يكتب بسرعة ويضع النقاط على الورق ثم يسلّم أوراقه للمعلم. » Que faisait-il ?", 'c' => ["il passait un examen ou un exercice écrit", "il préparait un repas", "il faisait du vélo", "il nettoyait la classe"], 'a' => 0, 'e' => "Écrire puis rendre ses feuilles au professeur évoque un travail écrit scolaire."],
                    ['q' => "« أطفأت مريم الأنوار وأغلقت النوافذ ثم خرجت من المنزل. » Que peut-on comprendre ?", 'c' => ["elle se préparait à dormir dans la maison", "elle quittait la maison pour un certain temps", "elle préparait le dîner", "elle ouvrait la maison aux invités"], 'a' => 1, 'e' => "Éteindre, fermer puis sortir indique qu'elle quitte la maison."],
                    ['q' => "« كان صوت البحر مرتفعًا والأمواج تضرب الصخور بقوة. » Comment était la mer ?", 'c' => ["très calme", "sèche", "agitée", "gelée"], 'a' => 2, 'e' => "Les vagues fortes et le bruit montrent une mer agitée."],
                    ['q' => "« احتفظ خالد بجزء من نقوده في صندوق، ولم ينفقها مع بقية مصروفه. » Que fait Khaled ?", 'c' => ["il emprunte de l'argent", "il gaspille son argent", "il vend la boîte", "il épargne de l'argent"], 'a' => 3, 'e' => "Garder une partie de son argent sans la dépenser, c'est épargner."],
                    ['q' => "« فتح يوسف النافذة، ثم شعر بدخول هواء بارد، فارتدى سترة. » Que déduit-on du temps ?", 'c' => ["il faisait très chaud", "il y avait un air froid", "il n'y avait pas d'air", "Youssef nageait"], 'a' => 1, 'e' => "Le texte mentionne un air froid et le fait d'enfiler une veste."],
                ],
            ],
            [
                'title' => "Comparer et distinguer les informations",
                'description' => "Comparer de simples personnages, événements ou lieux et relever ressemblances et différences données par le texte.",
                'questions' => [
                    ['q' => "« يحب أحمد الشاي، بينما يفضل علي القهوة. » Quelle est la différence entre eux ?", 'c' => ["Ahmed préfère le thé et Ali préfère le café", "tous deux préfèrent le thé", "tous deux préfèrent le café", "Ahmed ne boit rien"], 'a' => 0, 'e' => "Le texte donne une préférence différente à chacun."],
                    ['q' => "« البيت الأول صغير وهادئ، أما البيت الثاني فأكبر وأكثر ازدحامًا. » Quelle maison est la plus calme ?", 'c' => ["la deuxième", "la première", "les deux autant l'une que l'autre", "on ne peut pas le savoir"], 'a' => 1, 'e' => "La première maison est décrite comme calme, la seconde est plus encombrée."],
                    ['q' => "« تذهب مريم إلى المدرسة سيرًا، بينما يذهب أخوها بالحافلة. » En quoi diffèrent-ils dans leur façon d'aller à l'école ?", 'c' => ["tous deux prennent le bus", "Mariam conduit une voiture", "son frère marche seul", "Mariam marche et son frère prend le bus"], 'a' => 3, 'e' => "Le texte précise le moyen de transport de chacun."],
                    ['q' => "« في الصيف تكون الأيام أطول، وفي الشتاء أقصر. » Quelle saison est liée aux jours les plus longs ?", 'c' => ["l'hiver", "l'été", "les deux, toujours à égalité", "l'automne seulement"], 'a' => 1, 'e' => "Le texte associe les jours longs à l'été."],
                    ['q' => "« كان الكتاب الأول من عشر صفحات، والثاني من ثلاثين صفحة. » Lequel est le plus long ?", 'c' => ["le premier livre", "le second livre", "ils ont la même longueur", "il n'y a pas de second livre"], 'a' => 1, 'e' => "Trente pages, c'est plus que dix : le second est plus long."],
                    ['q' => "« يستيقظ خالد في السادسة، بينما يستيقظ أخوه في السابعة. » Qui se réveille le plus tôt ?", 'c' => ["son frère", "tous deux à la même heure", "Khaled", "on ne peut pas le savoir"], 'a' => 2, 'e' => "Six heures est avant sept heures : Khaled se réveille plus tôt."],
                    ['q' => "« السيارة الحمراء جديدة، والسيارة الزرقاء قديمة. » Quelle phrase est exacte ?", 'c' => ["la voiture bleue est plus récente", "les deux sont neuves", "il n'y a aucune différence", "la voiture rouge est plus récente que la bleue"], 'a' => 3, 'e' => "L'une est neuve et l'autre ancienne : la rouge est plus récente."],
                    ['q' => "« الطريق الأول قصير لكنه مزدحم، والطريق الثاني أطول لكنه هادئ. » Quelle différence est claire ?", 'c' => ["le premier est plus long et le second plus court", "le premier est plus court et plus encombré, le second plus long et plus calme", "les deux sont longs et calmes", "les deux sont courts et encombrés"], 'a' => 1, 'e' => "Le texte compare les deux routes selon la longueur et l'encombrement."],
                    ['q' => "« تحب سعاد الرسم، بينما تحب أختها القراءة. » Quelle activité ont-elles en commun ?", 'c' => ["le dessin", "la lecture", "le sport", "aucune activité commune n'est mentionnée"], 'a' => 3, 'e' => "Chaque sœur a un loisir différent, et le texte ne cite aucune activité commune."],
                    ['q' => "« الحديقة في الصباح هادئة، وفي المساء تصبح أكثر ازدحامًا. » Quand le jardin est-il le plus calme ?", 'c' => ["le soir", "à minuit", "il n'y a pas de différence", "le matin"], 'a' => 3, 'e' => "Le texte décrit le matin comme calme et le soir comme plus fréquenté."],
                ],
            ],
            [
                'title' => "Révision générale : compréhension de lecture",
                'description' => "Vérifier sa compréhension globale à travers de courts textes : idée principale, détails, cause et conséquence, déduction.",
                'questions' => [
                    ['q' => "« تريد هناء تحسين لغتها العربية، لذلك تقرأ كل يوم فقرة قصيرة وتكتب خمس كلمات جديدة في دفترها. » Quel plan suit Hanaa ?", 'c' => ["regarder seulement la télévision", "lire chaque jour et noter de nouveaux mots", "apprendre des chiffres sans mots", "arrêter d'écrire"], 'a' => 1, 'e' => "Le texte donne deux actions : lire un court paragraphe par jour et noter cinq mots nouveaux."],
                    ['q' => "« ذهب الأطفال إلى الشاطئ صباحًا. كان الجو مشمسًا فسبحوا قليلًا، ثم عادوا قبل الظهر. » Qu'ont-ils fait avant de rentrer ?", 'c' => ["ils sont allés à l'école", "ils ont dormi toute la journée", "ils ont nagé un peu", "ils ont dîné"], 'a' => 2, 'e' => "La baignade a eu lieu après l'arrivée à la plage et avant le retour."],
                    ['q' => "« اشترت سلمى حقيبة جديدة لأنها تحتاج إلى واحدة أكبر لكتبها. » Pourquoi a-t-elle acheté un nouveau sac ?", 'c' => ["parce qu'elle n'aime pas les livres", "parce qu'elle va seulement voyager", "parce qu'elle a perdu un stylo", "parce que son ancien sac ne convenait plus à la taille de ses livres"], 'a' => 3, 'e' => "Le besoin d'un sac plus grand pour les livres est la raison de l'achat."],
                    ['q' => "« جلس الجد قرب النافذة يقرأ الجريدة بينما كان أحفاده يلعبون في الحديقة. » Où était le grand-père ?", 'c' => ["près de la fenêtre", "dans le jardin", "dans la cuisine", "à l'école"], 'a' => 0, 'e' => "Le texte place le grand-père près de la fenêtre et les petits-enfants au jardin."],
                    ['q' => "« تأخر حسام عن الحافلة، فاضطر إلى الذهاب إلى المدرسة مشيًا. » Quelle a été la conséquence ?", 'c' => ["il est rentré aussitôt chez lui", "il est allé à l'école à pied", "il a pris l'avion", "il a annulé sa journée d'école"], 'a' => 1, 'e' => "Avoir raté le bus l'a obligé à marcher."],
                    ['q' => "« في مكتبة الحي، توجد كتب للأطفال والكبار. تحب مريم القصص، بينما يفضل والدها كتب التاريخ. » Quelle est l'idée principale ?", 'c' => ["la bibliothèque est réservée aux enfants", "Mariam n'aime que l'histoire", "le père de Mariam ne lit pas", "la bibliothèque contient des livres variés pour différents lecteurs"], 'a' => 3, 'e' => "Des livres pour enfants et adultes et des goûts différents montrent la diversité des livres."],
                    ['q' => "« كانت السماء غائمة، والهواء باردًا، لذلك أخذ يوسف معطفه. » Que peut-on en déduire ?", 'c' => ["Youssef allait nager", "il faisait très chaud", "Youssef s'attendait à un temps froid", "il ne portait rien"], 'a' => 2, 'e' => "Ciel couvert, air froid et manteau pris indiquent qu'il prévoit un temps froid."],
                    ['q' => "« بدأت نورة مشروعًا صغيرًا لبيع العصائر في الحي. كانت تسجل كل ما تبيعه في دفتر. » Que faisait-elle du cahier ?", 'c' => ["elle dessinait seulement des formes de jus", "elle écrivait ses devoirs d'école", "elle notait les horaires des bus", "elle y enregistrait ses ventes"], 'a' => 3, 'e' => "Le texte précise que le cahier servait à noter ce qu'elle vendait."],
                    ['q' => "« قرأ علي قصة عن طفل يساعد جاره الكبير في السن. بعد القراءة قال: أحب القصص التي تشجع الناس على مساعدة بعضهم. » Pourquoi Ali a-t-il aimé l'histoire ?", 'c' => ["parce qu'elle parle de voitures", "parce qu'elle parle d'entraide", "seulement parce qu'elle est très longue", "parce qu'elle n'a pas de personnages"], 'a' => 1, 'e' => "Son commentaire après la lecture montre qu'il aime l'idée d'aider les autres."],
                    ['q' => "« كل صباح، تفتح المدرسة أبوابها الساعة الثامنة. يصل الطلاب قبل ذلك بوقت، وفي الساحة يتحدثون مع أصدقائهم. » Que font-ils avant le début des cours ?", 'c' => ["ils quittent l'école", "ils dorment en classe", "ils dînent", "ils discutent avec leurs amis dans la cour"], 'a' => 3, 'e' => "Le texte dit que les élèves arrivent en avance et discutent avec leurs amis dans la cour."],
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
