<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ReadingArabicBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'reading-arabic')->firstOrFail();

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
                'title' => "Lire de courts mots arabes",
                'description' => "Prendre confiance en lisant des mots familiers de deux à quatre lettres et en repérant les sons que représentent les lettres.",
                'questions' => [
                    ['q' => "Quel mot se lit « bayt » (بَيْت) ?", 'c' => ["بيت", "بنت", "باب", "بيئة"], 'a' => 0, 'e' => "Le mot formé de bā', yā' et tā' est « بيت » (maison)."],
                    ['q' => "Quel mot signifie « eau » ?", 'c' => ["ملح", "خبز", "نار", "ماء"], 'a' => 3, 'e' => "« ماء » est l'eau ; ملح est le sel, خبز le pain et نار le feu."],
                    ['q' => "Quel mot commence par la lettre mīm (م) ?", 'c' => ["كتاب", "باب", "موز", "ولد"], 'a' => 2, 'e' => "« موز » (banane) commence par mīm ; les autres mots commencent par d'autres lettres."],
                    ['q' => "Parmi « باب، كتاب، قلم », quel mot commence par qāf (ق) ?", 'c' => ["باب", "كتاب", "قلم", "aucun des trois"], 'a' => 2, 'e' => "« قلم » (stylo) commence par qāf."],
                    ['q' => "Quel mot contient la lettre shīn (ش) ?", 'c' => ["شمس", "قمر", "نهر", "باب"], 'a' => 0, 'e' => "« شمس » (soleil) commence par shīn."],
                    ['q' => "Dans quel sens lit-on l'arabe ?", 'c' => ["de droite à gauche", "de gauche à droite", "de haut en bas", "dans n'importe quel ordre"], 'a' => 0, 'e' => "L'arabe se lit de droite à gauche."],
                    ['q' => "Par quelle lettre commence-t-on la lecture du mot « ولد » ?", 'c' => ["ل", "د", "و", "ت"], 'a' => 2, 'e' => "Puisqu'on lit de droite à gauche, on commence par la lettre la plus à droite : wāw (و)."],
                    ['q' => "Quelle paire de mots commence par la même lettre ?", 'c' => ["كتاب وكرسي", "باب وموز", "شمس وبيت", "قلم ونهر"], 'a' => 0, 'e' => "« كتاب » et « كرسي » commencent tous deux par kāf (ك)."],
                    ['q' => "Quel mot est le plus long parmi ces propositions ?", 'c' => ["مدرسة", "قلم", "بيت", "يد"], 'a' => 0, 'e' => "« مدرسة » compte cinq lettres, plus que les autres."],
                    ['q' => "Dans la phrase « باب البيت مفتوح. », quel est le premier mot ?", 'c' => ["مفتوح", "البيت", "النافذة", "باب"], 'a' => 3, 'e' => "On lit de droite à gauche : le premier mot est « باب »."],
                ],
            ],
            [
                'title' => "Voyelles, longues et signes diacritiques",
                'description' => "S'exercer à lire les voyelles brèves, les voyelles longues et de simples mots avec signes diacritiques.",
                'questions' => [
                    ['q' => "Quel signe donne le son de la fatha (a) ?", 'c' => ["ـَ", "ـِ", "ـُ", "ـْ"], 'a' => 0, 'e' => "La fatha s'écrit au-dessus de la lettre : ـَ."],
                    ['q' => "Quel signe donne le son de la kasra (i) ?", 'c' => ["ـِ", "ـَ", "ـُ", "ـّ"], 'a' => 0, 'e' => "La kasra s'écrit sous la lettre : ـِ."],
                    ['q' => "Quel signe donne le son de la damma (ou) ?", 'c' => ["ـَ", "ـِ", "ـُ", "ـْ"], 'a' => 2, 'e' => "La damma s'écrit au-dessus de la lettre, comme un petit wāw : ـُ."],
                    ['q' => "Quel mot contient une voyelle longue notée par un alif ?", 'c' => ["قيل", "قل", "قال", "قُل"], 'a' => 2, 'e' => "Dans « قال », l'alif prolonge la fatha : qāla."],
                    ['q' => "Quel mot contient une voyelle longue notée par un yā' ?", 'c' => ["قيل", "قال", "قُل", "كتب"], 'a' => 0, 'e' => "Dans « قيل », le yā' suit la kasra et donne le long ī : qīla."],
                    ['q' => "Quel mot contient une voyelle longue notée par un wāw ?", 'c' => ["يقول", "قال", "بيت", "جلس"], 'a' => 0, 'e' => "Dans « يقول », le wāw suit la damma : yaqūlu."],
                    ['q' => "Khaled lit le mot « مُعَلِّم ». Que nous indique la shadda sur le lām ?", 'c' => ["que la lettre est doublée (prononcée avec insistance)", "que la lettre est toujours sans voyelle", "que la lettre doit être supprimée", "que le mot est terminé"], 'a' => 0, 'e' => "La shadda marque le redoublement de la consonne : le lām se prononce deux fois."],
                    ['q' => "Dans « كِتاب », quelle voyelle porte le kāf ?", 'c' => ["la kasra", "la fatha", "la damma", "le sukūn"], 'a' => 0, 'e' => "Le kāf de « كِتاب » porte une kasra : ki-tāb."],
                    ['q' => "Quel mot commence par le son « ma » ?", 'c' => ["مِفتاح", "مُعلم", "مَدرسة", "مُدير"], 'a' => 2, 'e' => "« مَدرسة » commence par un mīm portant une fatha : ma-."],
                    ['q' => "Qu'indique un sukūn sur une lettre, pour un débutant ?", 'c' => ["que la lettre n'est pas suivie d'une voyelle brève", "que la lettre s'allonge avec un alif", "que la lettre se prononce deux fois", "que le mot devient un pluriel"], 'a' => 0, 'e' => "Le sukūn marque l'absence de voyelle brève sur la lettre."],
                ],
            ],
            [
                'title' => "Lire des phrases simples",
                'description' => "Lire de courtes phrases du quotidien et repérer qui, quoi, où et quand.",
                'questions' => [
                    ['q' => "« سليم يشرب الماء. » Que fait Salim ?", 'c' => ["il écrit une lettre", "il lit un livre", "il dort", "il boit de l'eau"], 'a' => 3, 'e' => "Le verbe est « يشرب » (boit) et l'objet est l'eau."],
                    ['q' => "« تجلس مريم في الفصل. » Où est assise Mariam ?", 'c' => ["à la maison", "au jardin", "au marché", "en classe"], 'a' => 3, 'e' => "L'expression « في الفصل » indique le lieu."],
                    ['q' => "« يعود الأب مساءً. » Quand le père rentre-t-il ?", 'c' => ["le matin", "à midi", "le soir", "hier"], 'a' => 2, 'e' => "Le mot « مساءً » indique le moment : le soir."],
                    ['q' => "« الكتاب على الطاولة. » Où est le livre ?", 'c' => ["sous la chaise", "dans la cuisine", "dans le sac", "sur la table"], 'a' => 3, 'e' => "Le texte dit directement que le livre est sur la table."],
                    ['q' => "« ذهبت ليلى إلى السوق لشراء الخبز. » Pourquoi Layla est-elle allée au marché ?", 'c' => ["pour étudier", "pour consulter le médecin", "pour voir son amie", "pour acheter du pain"], 'a' => 3, 'e' => "« لشراء الخبز » donne le but du déplacement."],
                    ['q' => "« فتح عمر النافذة لأن الغرفة كانت حارة. » Pourquoi a-t-il ouvert la fenêtre ?", 'c' => ["parce qu'il voulait dormir", "parce qu'il cherchait un livre", "parce que la pièce était chaude", "parce qu'il faisait froid"], 'a' => 2, 'e' => "La cause est donnée après « لأن »."],
                    ['q' => "Quelle phrase indique que l'action se passe maintenant ?", 'c' => ["أحمد قرأ أمس.", "أحمد قرأ الأسبوع الماضي.", "أحمد سيقرأ غدًا.", "أحمد يقرأ الآن."], 'a' => 3, 'e' => "Le verbe au présent avec « الآن » indique une action en cours."],
                    ['q' => "« يذهب الطفل إلى المدرسة كل صباح. » Où va l'enfant ?", 'c' => ["à l'école", "à la bibliothèque", "à l'hôpital", "au marché"], 'a' => 0, 'e' => "« إلى المدرسة » donne la destination."],
                    ['q' => "« أحضر الأب تفاحة، وابنه حمل الحقيبة. » Qui a porté le sac ?", 'c' => ["le père", "la mère", "le fils", "le professeur"], 'a' => 2, 'e' => "Le texte attribue le fait de porter le sac au fils."],
                    ['q' => "« أنهى الطالب واجبه ثم خرج للعب. » Qu'a-t-il fait en premier ?", 'c' => ["il est sorti jouer", "il est allé à l'école", "il a dormi", "il a fini ses devoirs"], 'a' => 3, 'e' => "« ثم » montre que les devoirs précèdent la sortie."],
                ],
            ],
            [
                'title' => "Lire les panneaux et les consignes du quotidien",
                'description' => "S'exercer à lire de courts panneaux, avis, étiquettes et consignes de la vie de tous les jours.",
                'questions' => [
                    ['q' => "Sur une porte est écrit « ممنوع الدخول ». Que signifie ce panneau ?", 'c' => ["l'entrée est gratuite", "il faut nettoyer la pièce", "la porte est ouverte à tous", "il est interdit d'entrer"], 'a' => 3, 'e' => "« ممنوع الدخول » signifie « entrée interdite »."],
                    ['q' => "Dans un bus est écrit « للسيدات فقط ». À qui est réservée cette place ?", 'c' => ["aux enfants seulement", "au chauffeur", "aux dames", "à tout le monde sans exception"], 'a' => 2, 'e' => "« فقط » limite la place à la catégorie mentionnée : les femmes."],
                    ['q' => "Vous lisez un panneau « مخرج ». Que cherchez-vous ?", 'c' => ["un endroit où acheter à manger", "un endroit pour dormir", "un lieu d'inscription des élèves", "la sortie"], 'a' => 3, 'e' => "« مخرج » désigne la sortie."],
                    ['q' => "Une consigne dit : « اغسل يديك قبل الأكل. » Que faut-il faire d'abord ?", 'c' => ["manger tout de suite", "boire de l'eau", "seulement nettoyer la table", "se laver les mains"], 'a' => 3, 'e' => "« قبل » indique que le lavage des mains précède le repas."],
                    ['q' => "Dans un magasin est écrit « مفتوح حتى الساعة 8 مساءً ». Que cela signifie-t-il ?", 'c' => ["le magasin ferme à midi", "le magasin est ouvert à 8 h du matin seulement", "le magasin peut accueillir des clients jusqu'à 20 h", "le magasin est fermé toute la journée"], 'a' => 2, 'e' => "L'inscription indique que le magasin reste ouvert jusqu'à 20 h."],
                    ['q' => "Sur une boîte de médicament : « يحفظ بعيدًا عن الأطفال ». Quel est le conseil ?", 'c' => ["donner le médicament aux enfants sans demander", "le poser par terre", "le ranger hors de portée des enfants", "ouvrir toujours la boîte"], 'a' => 2, 'e' => "Le médicament doit être rangé dans un endroit inaccessible aux enfants."],
                    ['q' => "À l'école, un panneau dit « الرجاء الهدوء ». Que demande-t-on aux élèves ?", 'c' => ["courir dans le couloir", "ouvrir toutes les fenêtres", "de baisser la voix", "de sortir de l'école"], 'a' => 2, 'e' => "« الهدوء » signifie le calme, c'est-à-dire éviter le bruit."],
                    ['q' => "Ahmed trouve une feuille : « من فضلك اكتب اسمك هنا. » Où doit-il écrire ?", 'c' => ["sur la porte", "dans la rue", "sur le livre", "à l'endroit indiqué sur la feuille"], 'a' => 3, 'e' => "« هنا » renvoie à l'endroit désigné sur la feuille qu'il a sous les yeux."],
                    ['q' => "Que s'attend-on à trouver dans un lieu portant l'inscription « المكتبة » ?", 'c' => ["des voitures à louer", "des livres et des documents de lecture", "seulement des plats chauds", "seulement des vêtements de sport"], 'a' => 1, 'e' => "Une bibliothèque est liée aux livres et à la lecture."],
                    ['q' => "La consigne dit : « انتظر دورك ثم ادخل. » Quel ordre est correct ?", 'c' => ["entrer puis attendre", "attendre puis entrer", "partir puis attendre", "courir puis entrer"], 'a' => 1, 'e' => "« ثم » montre que l'attente vient d'abord, puis l'entrée."],
                ],
            ],
            [
                'title' => "Lire de courts dialogues",
                'description' => "Lire des conversations simples et repérer les interlocuteurs, les demandes, les réponses et les intentions du quotidien.",
                'questions' => [
                    ['q' => "Sara : « أين حقيبتي؟ » Son frère : « إنها بجانب الباب. » Où est le sac ?", 'c' => ["à côté de la porte", "sous le lit", "à l'école", "sur la table"], 'a' => 0, 'e' => "Le frère donne un lieu précis : à côté de la porte."],
                    ['q' => "Le vendeur : « ماذا تريد؟ » Ali : « أريد خبزًا، من فضلك. » Que veut Ali ?", 'c' => ["du lait", "un livre", "du pain", "un médicament"], 'a' => 2, 'e' => "Ali dit directement qu'il veut du pain."],
                    ['q' => "La maîtresse : « هل أنهيتم الواجب؟ » Les élèves : « نعم. » Que comprend-on ?", 'c' => ["qu'ils n'ont pas commencé le cours", "qu'ils ont terminé les devoirs", "qu'ils ont quitté l'école", "qu'ils ont oublié leurs livres"], 'a' => 1, 'e' => "« نعم » confirme qu'ils ont fini leurs devoirs."],
                    ['q' => "Sami : « سأزور جدتي غدًا. » Quand rendra-t-il visite à sa grand-mère ?", 'c' => ["hier", "demain", "maintenant", "la semaine dernière"], 'a' => 1, 'e' => "« غدًا » désigne le lendemain."],
                    ['q' => "Le médecin : « أين تشعر بالألم؟ » Le patient : « في رأسي. » Où a-t-il mal ?", 'c' => ["à la main", "au pied", "au dos", "à la tête"], 'a' => 3, 'e' => "Le patient précise : « في رأسي » (dans la tête)."],
                    ['q' => "La mère : « الجو بارد، خذ معطفك. » Que veut-elle de son fils ?", 'c' => ["qu'il prenne son manteau", "qu'il ouvre la fenêtre", "qu'il aille à la mer", "qu'il enlève ses chaussures"], 'a' => 0, 'e' => "L'ordre direct est de prendre son manteau, car il fait froid."],
                    ['q' => "L'employé : « هل لديك موعد؟ » Hanaa : « نعم، الساعة العاشرة. » Quelle information nouvelle apprend-on ?", 'c' => ["elle n'a pas de rendez-vous", "son rendez-vous est à midi", "elle a un rendez-vous à dix heures", "elle travaille à cet endroit"], 'a' => 2, 'e' => "La réponse de Hanaa indique un rendez-vous à dix heures."],
                    ['q' => "Le père : « من أخذ مفاتيح السيارة؟ » Le fils : « أنا أخذتها. » Qui a pris les clés ?", 'c' => ["le père", "la sœur", "le voisin", "le fils"], 'a' => 3, 'e' => "Le fils dit « أنا أخذتها » : c'est lui qui les a prises."],
                    ['q' => "Layla à son amie : « سأرسل لك الرسالة مساءً. » Que fera Layla ?", 'c' => ["elle achètera une lettre", "elle enverra un message", "elle lira seulement un livre", "elle visitera l'école"], 'a' => 1, 'e' => "Le verbe « سأرسل » montre qu'elle enverra le message plus tard."],
                    ['q' => "Ahmed : « هل الحافلة وصلت؟ » Le chauffeur : « ليس بعد. » Que comprend-on ?", 'c' => ["le bus est arrivé il y a une heure", "le bus n'est pas encore arrivé", "le bus est sûrement annulé", "le chauffeur est parti"], 'a' => 1, 'e' => "« ليس بعد » signifie « pas encore »."],
                ],
            ],
            [
                'title' => "Trouver des détails dans de courts textes",
                'description' => "Lire de courts passages et repérer noms, nombres, lieux, heures et petits détails importants.",
                'questions' => [
                    ['q' => "« يعيش نادر في مدينة صغيرة مع والديه وأخته مريم. » Avec qui vit Nader ?", 'c' => ["avec son ami seulement", "avec ses parents et sa sœur Mariam", "avec son professeur", "seul"], 'a' => 1, 'e' => "Le texte cite ses parents et sa sœur."],
                    ['q' => "« تبدأ الحصة الساعة التاسعة وتنتهي الساعة العاشرة. » Quand le cours se termine-t-il ?", 'c' => ["à huit heures", "à neuf heures", "à onze heures", "à dix heures"], 'a' => 3, 'e' => "L'heure de fin est donnée : dix heures."],
                    ['q' => "« اشترت هدى ثلاثة أقلام ودفترًا واحدًا. » Combien de stylos Hoda a-t-elle achetés ?", 'c' => ["deux", "un", "trois", "quatre"], 'a' => 2, 'e' => "Le nombre « ثلاثة » se rapporte aux stylos."],
                    ['q' => "« ذهب يوسف إلى الحديقة يوم الجمعة. » Où est allé Youssef ?", 'c' => ["au marché", "à l'école", "à l'hôpital", "au jardin"], 'a' => 3, 'e' => "Le texte donne sa destination : le jardin."],
                    ['q' => "« تضع ريم مفاتيحها عادة في درج صغير قرب الباب. » Où Rim met-elle ses clés ?", 'c' => ["toujours dans son sac", "dans un petit tiroir près de la porte", "sous le lit", "dans la cuisine"], 'a' => 1, 'e' => "C'est l'habitude mentionnée dans la phrase."],
                    ['q' => "« كان الطريق هادئًا صباحًا، لكنه أصبح مزدحمًا بعد الظهر. » Quand la route est-elle devenue encombrée ?", 'c' => ["avant l'aube", "la nuit", "le matin", "l'après-midi"], 'a' => 3, 'e' => "Le texte oppose le matin à l'après-midi, où la route est encombrée."],
                    ['q' => "« يحب فادي الشاي، لكن أخته تفضل العصير. » Que préfère sa sœur ?", 'c' => ["le jus", "le thé", "le café", "le lait"], 'a' => 0, 'e' => "D'après la phrase, sa sœur préfère le jus."],
                    ['q' => "« وضعت المعلمة الكتب على الرف العلوي، والدفاتر على الرف السفلي. » Où sont les cahiers ?", 'c' => ["sur l'étagère du haut", "sur l'étagère du bas", "dans le cartable", "sur le bureau"], 'a' => 1, 'e' => "Le texte place les cahiers sur l'étagère du bas."],
                    ['q' => "« زار كريم المتحف يوم السبت مع صديقه عمر. » Qui a accompagné Karim ?", 'c' => ["son frère", "son père", "son ami Omar", "son professeur"], 'a' => 2, 'e' => "La phrase dit qu'il y est allé avec son ami Omar."],
                    ['q' => "« تحتاج النبتة إلى الماء، لذلك سقتها أميرة قبل أن تخرج. » Qu'a fait Amira ?", 'c' => ["elle a arraché la plante", "elle a arrosé la plante", "elle l'a seulement mise au soleil", "elle a vendu la plante"], 'a' => 1, 'e' => "« سقتها » veut dire qu'elle l'a arrosée."],
                ],
            ],
            [
                'title' => "Ordre des événements et déductions simples",
                'description' => "Aller au-delà du mot isolé : suivre l'ordre des événements, relier causes et conséquences, tirer de simples conclusions.",
                'questions' => [
                    ['q' => "« استيقظت هبة، غسلت وجهها، تناولت الفطور، ثم خرجت إلى المدرسة. » Que fait Hiba juste avant de partir à l'école ?", 'c' => ["elle prend son petit-déjeuner", "elle se lave le visage", "elle se réveille", "elle dort"], 'a' => 0, 'e' => "Le petit-déjeuner vient après le lavage du visage et juste avant le départ."],
                    ['q' => "« نسي مازن مظلته، وعندما خرج بدأ المطر. » Quel problème a rencontré Mazen ?", 'c' => ["il a oublié son sac à l'école", "il est sorti sans parapluie alors qu'il pleuvait", "il est arrivé en retard à cause du bus", "il n'a pas trouvé l'école"], 'a' => 1, 'e' => "Le problème est qu'il est sorti sans parapluie puis qu'il a plu."],
                    ['q' => "« كانت سعاد جائعة. فتحت الثلاجة ووجدت تفاحة، فأكلتها. » Pourquoi Souad a-t-elle mangé la pomme ?", 'c' => ["parce que la pomme était rouge", "parce qu'elle allait à l'école", "parce qu'elle avait faim", "parce que le frigo était vide"], 'a' => 2, 'e' => "La faim l'a poussée à chercher de la nourriture."],
                    ['q' => "« درس خالد جيدًا قبل الاختبار، وفي اليوم التالي أجاب عن الأسئلة بثقة. » Quel lien y a-t-il entre les deux faits ?", 'c' => ["étudier l'a empêché de passer l'examen", "étudier l'a bien préparé à l'examen", "l'examen a eu lieu avant les révisions", "il n'y a aucun lien"], 'a' => 1, 'e' => "Les bonnes révisions expliquent qu'il ait répondu avec confiance."],
                    ['q' => "« وصلت الحافلة متأخرة عشر دقائق، لذلك انتظر الركاب طويلًا. » Qu'est-ce qui s'est passé en premier ?", 'c' => ["les passagers sont partis", "le bus a été en retard", "le voyage a commencé", "les passagers sont rentrés chez eux"], 'a' => 1, 'e' => "Le retard du bus est la cause de la longue attente."],
                    ['q' => "« أغلق يوسف النافذة لأن الرياح كانت قوية. » Que peut-on en déduire ?", 'c' => ["il voulait augmenter le bruit du vent", "il essayait d'empêcher le vent fort d'entrer", "il faisait très chaud à cause du soleil", "il cherchait la clé de la porte"], 'a' => 1, 'e' => "Fermer la fenêtre alors que le vent est fort montre qu'il voulait limiter l'entrée de l'air."],
                    ['q' => "« وضعت نور الكتب في الحقيبة، ثم ارتدت معطفها، ثم خرجت. » Quel est le dernier événement ?", 'c' => ["elle est sortie", "elle a mis les livres dans le sac", "elle a enfilé son manteau", "elle s'est assise pour lire"], 'a' => 0, 'e' => "Le texte se termine par « خرجت » : c'est le dernier événement."],
                    ['q' => "« رأى سامر الضوء في غرفة أخيه، فطرق الباب قبل أن يدخل. » Que comprend-on ?", 'c' => ["la pièce était sûrement vide", "son frère était probablement dans la pièce", "Samer était à l'école", "la porte était cassée"], 'a' => 1, 'e' => "La lumière lui a fait penser que quelqu'un était dedans, d'où les coups à la porte."],
                    ['q' => "« لم يجد الطالب قلمه، فاستعار قلمًا من زميله. » Qu'est-il arrivé à cause de la perte du stylo ?", 'c' => ["il a quitté l'école", "il a emprunté un stylo à son camarade", "il a écrit sans stylo", "il a acheté un nouveau cartable"], 'a' => 1, 'e' => "La perte du stylo a conduit à une solution simple : en emprunter un."],
                    ['q' => "« أرادت منى قراءة الكتاب في الليل، لكن الإضاءة كانت ضعيفة، فشغلت المصباح. » Pourquoi a-t-elle allumé la lampe ?", 'c' => ["parce qu'elle voulait dormir", "pour pouvoir lire clairement", "parce que le livre était mouillé", "parce que la pièce était vide"], 'a' => 1, 'e' => "L'éclairage faible était le problème, la lampe l'a résolu pour lire."],
                ],
            ],
            [
                'title' => "Révision générale : lecture pour débutants",
                'description' => "Réunir reconnaissance de mots, lecture de phrases, repérage de détails, ordre des événements et simples déductions dans une dernière révision.",
                'questions' => [
                    ['q' => "« في صباح الجمعة، ذهب ياسر مع أخته إلى السوق. اشترى خبزًا وحليبًا، ثم عادا إلى المنزل. » Quand Yasser est-il allé au marché ?", 'c' => ["le vendredi matin", "le samedi soir", "le dimanche", "après minuit"], 'a' => 0, 'e' => "Le texte donne le moment : « في صباح الجمعة »."],
                    ['q' => "Dans « قرأت سارة قصة قصيرة قبل النوم », quel mot exprime l'action de lire ?", 'c' => ["سارة", "قصة", "قرأت", "النوم"], 'a' => 2, 'e' => "« قرأت » est le verbe qui exprime la lecture."],
                    ['q' => "« وضع الطفل الحذاء قرب الباب قبل الخروج. » Où a-t-il posé la chaussure ?", 'c' => ["dans le sac", "sur le lit", "sous la table", "près de la porte"], 'a' => 3, 'e' => "L'endroit est indiqué : près de la porte."],
                    ['q' => "Le père dit : « أحضر لي كتابك من الغرفة. » Que demande-t-il à l'enfant ?", 'c' => ["de fermer la fenêtre", "d'apporter son livre", "de ranger la chambre", "d'apporter de l'eau"], 'a' => 1, 'e' => "Le verbe « أحضر » indique ce qu'on demande : apporter le livre de la chambre."],
                    ['q' => "« كان الطريق مزدحمًا، لذلك وصل فؤاد متأخرًا إلى العمل. » Quelle est la cause du retard ?", 'c' => ["avoir oublié son téléphone", "l'embouteillage", "une pluie légère", "un déjeuner trop long"], 'a' => 1, 'e' => "« لذلك » relie l'embouteillage au retard."],
                    ['q' => "Quelle phrase indique le futur ?", 'c' => ["زرت صديقي أمس.", "أزور صديقي الآن.", "أزور صديقي كل يوم.", "سأزور صديقي غدًا."], 'a' => 3, 'e' => "« سأزور » et « غدًا » indiquent clairement un fait à venir."],
                    ['q' => "« اشترت هناء ثلاث تفاحات، ثم أعطت واحدة لأختها. » Combien de pommes lui reste-t-il ?", 'c' => ["trois", "deux", "une", "quatre"], 'a' => 1, 'e' => "Elle en avait trois, elle en a donné une : il en reste deux."],
                    ['q' => "« نظر كريم إلى السماء، فرأى غيومًا داكنة. أخذ مظلته قبل أن يخرج. » Pourquoi a-t-il pris son parapluie ?", 'c' => ["parce qu'il voulait acheter à manger", "parce qu'il pensait qu'il pourrait pleuvoir", "parce que son sac était lourd", "parce qu'il allait dormir"], 'a' => 1, 'e' => "Les nuages sombres annoncent la pluie : il a pris son parapluie par précaution."],
                    ['q' => "Quel ordre correspond au texte « غسل علي يديه، تناول الطعام، ثم شرب الماء » ?", 'c' => ["il boit → il se lave les mains → il mange", "il se lave les mains → il mange → il boit", "il mange → il se lave les mains → il boit", "il se lave les mains → il boit → il mange"], 'a' => 1, 'e' => "Le texte présente les actions dans cet ordre, « ثم » marquant la dernière."],
                    ['q' => "« تحب ريم القراءة، وتزور المكتبة كل أسبوع، وتستعير كتابًا جديدًا. » Quelle est la meilleure déduction ?", 'c' => ["Rim n'aime pas les livres", "Rim ne va à la bibliothèque qu'une seule fois", "la lecture fait régulièrement partie des intérêts de Rim", "Rim travaille à la bibliothèque"], 'a' => 2, 'e' => "Des visites hebdomadaires et des emprunts réguliers montrent que la lecture est une habitude."],
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
