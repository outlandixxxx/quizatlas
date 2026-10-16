<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArabicVocabularyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arabic-vocabulary')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Les mots du quotidien",
                'description' => "Les mots arabes les plus courants : objets, lieux, nourriture et petites situations de tous les jours.",
                'questions' => [
                    ['q' => "Que signifie le mot « بيت » ?", 'c' => ["école", "maison", "marché", "aéroport"], 'a' => 1, 'e' => "« بيت » veut dire maison, l'endroit où vit une famille."],
                    ['q' => "Quel mot arabe désigne l'objet qui sert à écrire ?", 'c' => ["كوب", "مفتاح", "قلم", "وسادة"], 'a' => 2, 'e' => "« قلم » est le stylo. كوب est un verre, مفتاح une clé et وسادة un oreiller."],
                    ['q' => "Amina dit : « أشعر بالعطش ». De quoi a-t-elle besoin ?", 'c' => ["d'un manteau", "d'un livre", "d'un sac", "d'eau"], 'a' => 3, 'e' => "« عطش » signifie la soif : Amina a besoin de boire."],
                    ['q' => "Quel mot arabe signifie « magasin » ?", 'c' => ["متجر", "وسادة", "نافذة", "بطانية"], 'a' => 0, 'e' => "« متجر » est le magasin, l'endroit où l'on achète des marchandises."],
                    ['q' => "Un ami dit : « اشتريت خبزًا وجبنًا وحليبًا ». De quoi parle-t-il ?", 'c' => ["de la météo", "de nourriture", "de sport", "de voyage"], 'a' => 1, 'e' => "Pain, fromage et lait sont des aliments."],
                    ['q' => "Que signifie « طبيب » ?", 'c' => ["boulanger", "menuisier", "médecin", "chauffeur"], 'a' => 2, 'e' => "« طبيب » désigne le médecin, celui qui soigne les malades."],
                    ['q' => "Quel mot arabe correspond à « fenêtre » ?", 'c' => ["باب", "نافذة", "سقف", "جدار"], 'a' => 1, 'e' => "« نافذة » est la fenêtre ; باب est la porte, سقف le plafond et جدار le mur."],
                    ['q' => "Quel mot n'appartient pas au groupe de la nourriture ?", 'c' => ["تفاحة", "أرز", "كرسي", "خبز"], 'a' => 2, 'e' => "تفاحة (pomme), أرز (riz) et خبز (pain) se mangent ; كرسي est une chaise."],
                    ['q' => "Complétez la phrase : « وضعت الماء في ___ ».", 'c' => ["سرير", "حذاء", "باب", "كوب"], 'a' => 3, 'e' => "On met l'eau dans un verre (كوب)."],
                    ['q' => "Samer dit : « نسيت مفتاح السيارة في البيت ». Où est la clé ?", 'c' => ["à la maison", "dans la voiture", "à l'école", "au magasin"], 'a' => 0, 'e' => "La phrase dit que la clé est restée dans la maison (في البيت)."],
                ],
            ],
            [
                'title' => "Personnes, lieux et vie quotidienne",
                'description' => "Le vocabulaire de la famille, des métiers et des lieux publics qu'on rencontre tous les jours.",
                'questions' => [
                    ['q' => "Que signifie « معلمة » ?", 'c' => ["infirmière", "enseignante", "étudiante", "ingénieure"], 'a' => 1, 'e' => "« معلمة » est la femme qui enseigne."],
                    ['q' => "Où va-t-on d'habitude pour acheter des médicaments ?", 'c' => ["مكتبة", "مخبز", "صيدلية", "محطة"], 'a' => 2, 'e' => "On achète les médicaments à la pharmacie, « صيدلية »."],
                    ['q' => "Que désigne le mot « عم » ?", 'c' => ["le frère de la mère", "le grand-père", "le fils", "le frère du père"], 'a' => 3, 'e' => "« عم » est l'oncle paternel. L'oncle maternel se dit « خال »."],
                    ['q' => "Que désigne le mot « خال » ?", 'c' => ["le frère de la mère", "le frère du père", "le grand-père", "le cousin"], 'a' => 0, 'e' => "« خال » est l'oncle maternel."],
                    ['q' => "Quel métier correspond à quelqu'un qui conçoit des ponts et des immeubles ?", 'c' => ["مزارع", "مهندس", "نادل", "مصور"], 'a' => 1, 'e' => "« مهندس » est l'ingénieur (ou l'architecte)."],
                    ['q' => "Dans quel lieu peut-on lire des livres et en emprunter ?", 'c' => ["مطبخ", "ملعب", "مكتبة", "مرآب"], 'a' => 2, 'e' => "« مكتبة » est la bibliothèque (ou la librairie)."],
                    ['q' => "Que signifie « محطة » dans « محطة الحافلات » ?", 'c' => ["clinique", "restaurant", "salon de coiffure", "gare routière"], 'a' => 3, 'e' => "« محطة » est une station ou une gare, là où arrivent et partent les bus."],
                    ['q' => "Que signifie « مطعم » ?", 'c' => ["restaurant", "bureau", "école", "pharmacie"], 'a' => 0, 'e' => "« مطعم » est un restaurant : on y mange hors de chez soi."],
                    ['q' => "Layla dit : « هذا أخي، وهو طالب في الجامعة ». De qui parle-t-elle ?", 'c' => ["de son père", "de son frère", "de son oncle", "de son professeur"], 'a' => 1, 'e' => "« أخي » veut dire « mon frère »."],
                    ['q' => "Que signifie « جد » ?", 'c' => ["oncle", "fils", "grand-père", "voisin"], 'a' => 2, 'e' => "« جد » est le grand-père."],
                ],
            ],
            [
                'title' => "Synonymes et contraires",
                'description' => "Reconnaître des mots de sens proche ou opposé pour enrichir son vocabulaire.",
                'questions' => [
                    ['q' => "Quel est le contraire de « كبير » ?", 'c' => ["طويل", "واسع", "قوي", "صغير"], 'a' => 3, 'e' => "Le contraire de « grand » (كبير) est « petit » (صغير)."],
                    ['q' => "Quel est le contraire de « نظيف » ?", 'c' => ["متسخ", "مرتب", "لامع", "واسع"], 'a' => 0, 'e' => "« نظيف » veut dire propre, « متسخ » veut dire sale."],
                    ['q' => "Quel mot a un sens proche de « جميل » ?", 'c' => ["قبيح", "حسن", "غاضب", "بعيد"], 'a' => 1, 'e' => "« حسن » s'emploie pour ce qui est beau ou agréable, comme « جميل »."],
                    ['q' => "Quel est le contraire de « قديم » ?", 'c' => ["مكسور", "ثقيل", "جديد", "قريب"], 'a' => 2, 'e' => "Ancien (قديم) s'oppose à nouveau (جديد)."],
                    ['q' => "Quel mot est proche de « هادئ » ?", 'c' => ["مزدحم", "صاخب", "سريع", "ساكن"], 'a' => 3, 'e' => "Un endroit « هادئ » est « ساكن » : calme, sans bruit. صاخب veut dire bruyant."],
                    ['q' => "Laquelle de ces paires est formée de deux contraires ?", 'c' => ["قريب / بعيد", "جميل / حسن", "سعيد / فرح", "صغير / قليل"], 'a' => 0, 'e' => "قريب (proche) et بعيد (loin) s'opposent. Les autres paires sont plutôt proches par le sens."],
                    ['q' => "Quel est le contraire de « سهل » ?", 'c' => ["واضح", "خفيف", "صعب", "قصير"], 'a' => 2, 'e' => "Facile (سهل) s'oppose à difficile (صعب)."],
                    ['q' => "Quel mot est proche de « ذكي » (intelligent) ?", 'c' => ["كسول", "فطن", "مريض", "نائم"], 'a' => 1, 'e' => "« فطن » décrit quelqu'un de vif d'esprit, donc proche de « ذكي »."],
                    ['q' => "Quelle relation y a-t-il entre « طويل » et « قصير » ?", 'c' => ["ce sont des synonymes", "ce sont des contraires", "l'un est le pluriel de l'autre", "ils n'ont aucun lien"], 'a' => 1, 'e' => "Long et court sont deux mots de sens opposé."],
                    ['q' => "Quel mot est proche de « سعيد » (heureux) ?", 'c' => ["حزين", "غاضب", "فرحان", "متعب"], 'a' => 2, 'e' => "« فرحان » (joyeux) a un sens très proche de « سعيد »."],
                ],
            ],
            [
                'title' => "Le vocabulaire en contexte",
                'description' => "Deviner le sens d'un mot grâce à la phrase dans laquelle il se trouve.",
                'questions' => [
                    ['q' => "« ارتدى يوسف معطفه لأن الجو بارد. » Que signifie « معطف » ?", 'c' => ["un vêtement chaud", "un aliment", "un outil pour écrire", "un moyen de transport"], 'a' => 0, 'e' => "Le contexte (il fait froid) montre que c'est un manteau."],
                    ['q' => "« الماء وفير في هذا المكان. » Que veut dire « وفير » ?", 'c' => ["rare", "abondant", "imbuvable", "froid"], 'a' => 1, 'e' => "« وفير » signifie qu'il y en a beaucoup."],
                    ['q' => "« كان الطفل مترددًا قبل القفز في الماء. » Que veut dire « مترددًا » ?", 'c' => ["heureux", "en colère", "hésitant", "endormi"], 'a' => 2, 'e' => "Quelqu'un de « مترددًا » n'arrive pas à se décider : il hésite."],
                    ['q' => "« استيقظ باكرًا. » Que veut dire « باكرًا » ?", 'c' => ["tard", "à minuit", "une seule fois", "tôt"], 'a' => 3, 'e' => "« باكرًا » signifie de bonne heure."],
                    ['q' => "« الدرس سهل وواضح. » Que veut dire « واضح » ?", 'c' => ["clair, facile à comprendre", "éloigné", "écrit en gros", "très difficile"], 'a' => 0, 'e' => "Un cours « واضح » est clair pour les élèves."],
                    ['q' => "« كانت الحقيبة متينة، لذلك استخدمها خالد سنوات طويلة. » Que veut dire « متينة » ?", 'c' => ["colorée", "solide", "petite", "bon marché"], 'a' => 1, 'e' => "Un sac utilisé pendant des années est solide, « متين »."],
                    ['q' => "« عاد المسافر متعبًا لكنه راضٍ. » Que veut dire « راضٍ » ?", 'c' => ["affamé", "pressé", "satisfait", "furieux"], 'a' => 2, 'e' => "Le « لكن » (mais) oppose la fatigue à un sentiment positif : il est satisfait."],
                    ['q' => "« أغلقت الباب بإحكام. » Que veut dire « بإحكام » ?", 'c' => ["très vite", "sans le toucher", "dehors", "fermement, bien fermé"], 'a' => 3, 'e' => "« بإحكام » indique que la porte est bien fermée, solidement."],
                    ['q' => "« كان الطريق مزدحمًا فتأخر السائق. » Que veut dire « مزدحم » ?", 'c' => ["plein de monde ou de voitures", "vide", "fermé", "très court"], 'a' => 0, 'e' => "Une route encombrée explique le retard du chauffeur."],
                    ['q' => "Vous lisez une phrase avec un mot inconnu. Quelle est la meilleure première réaction ?", 'c' => ["sauter toute la phrase", "regarder les mots autour pour deviner le sens", "inventer un sens au hasard", "remplacer le mot par un autre"], 'a' => 1, 'e' => "Le contexte donne souvent des indices avant même d'ouvrir un dictionnaire."],
                ],
            ],
            [
                'title' => "Nourriture, vêtements et maison",
                'description' => "Des mots utiles pour les repas, l'habillement, les objets de la maison et les gestes du ménage.",
                'questions' => [
                    ['q' => "Quel mot désigne un couvert que l'on utilise à table ?", 'c' => ["وسادة", "مرآة", "ملعقة", "ستارة"], 'a' => 2, 'e' => "« ملعقة » est la cuillère."],
                    ['q' => "En hiver, quel vêtement porte-t-on pour avoir chaud ?", 'c' => ["قبعة سباحة", "نظارة شمسية", "شبشب", "معطف"], 'a' => 3, 'e' => "« معطف » est le manteau."],
                    ['q' => "Où range-t-on les aliments pour les garder au frais ?", 'c' => ["الثلاجة", "الخزانة", "السجادة", "الستارة"], 'a' => 0, 'e' => "« الثلاجة » est le réfrigérateur."],
                    ['q' => "Quel mot est lié à la cuisson des aliments ?", 'c' => ["مرآة", "فرن", "خزانة", "وسادة"], 'a' => 1, 'e' => "« فرن » est le four."],
                    ['q' => "Que signifie « خزانة » ?", 'c' => ["évier", "four", "armoire", "rideau"], 'a' => 2, 'e' => "« خزانة » est une armoire, où l'on range vêtements ou vaisselle."],
                    ['q' => "Quel mot est à part dans le groupe de la cuisine ?", 'c' => ["طبق", "كوب", "وسادة", "ملعقة"], 'a' => 2, 'e' => "طبق (assiette), كوب (verre) et ملعقة (cuillère) sont dans la cuisine ; وسادة est un oreiller."],
                    ['q' => "Quel verbe veut dire « essuyer » la poussière d'une table ?", 'c' => ["يسبح", "يمسح", "يركض", "يزرع"], 'a' => 1, 'e' => "« يمسح » s'emploie pour essuyer une surface."],
                    ['q' => "Quel meuble sert à dormir ?", 'c' => ["فرن", "ثلاجة", "مكتب", "سرير"], 'a' => 3, 'e' => "« سرير » est le lit."],
                    ['q' => "Que signifie « ستارة » ?", 'c' => ["tapis", "miroir", "rideau", "couverture"], 'a' => 2, 'e' => "« ستارة » est le rideau."],
                    ['q' => "Quel mot arabe désigne une assiette ?", 'c' => ["كوب", "طبق", "ملعقة", "سكين"], 'a' => 1, 'e' => "« طبق » est l'assiette ou le plat."],
                ],
            ],
            [
                'title' => "Nombres, temps et descriptions",
                'description' => "Les mots pour compter, dire l'heure, la fréquence et décrire simplement une personne ou une chose.",
                'questions' => [
                    ['q' => "Quel mot arabe signifie le nombre 3 ?", 'c' => ["خمسة", "ثلاثة", "سبعة", "تسعة"], 'a' => 1, 'e' => "3 se dit « ثلاثة »."],
                    ['q' => "Quel nombre désigne « سبعة » ?", 'c' => ["5", "6", "7", "9"], 'a' => 2, 'e' => "« سبعة » est le nombre 7."],
                    ['q' => "Que signifie « الساعة السابعة صباحًا » ?", 'c' => ["sept heures du matin", "sept heures du soir", "huit heures du matin", "six heures du soir"], 'a' => 0, 'e' => "« صباحًا » = du matin, « السابعة » = la septième heure."],
                    ['q' => "Que signifie « هادئ » pour décrire quelqu'un ?", 'c' => ["bruyant", "rapide", "grand", "calme"], 'a' => 3, 'e' => "هادئ signifie calme ou tranquille ; le mot peut décrire une personne posée ou un lieu peu bruyant."],
                    ['q' => "« السيارة بعيدة. » Que comprend-on ?", 'c' => ["elle est proche", "elle est loin", "elle est petite", "elle est dans la maison"], 'a' => 1, 'e' => "« بعيدة » désigne l'éloignement."],
                    ['q' => "Que signifie « غزير » dans « مطر غزير » ?", 'c' => ["léger", "court", "abondant", "sec"], 'a' => 2, 'e' => "Une pluie « غزير » tombe en grande quantité."],
                    ['q' => "Khaled a deux ans de plus que son frère. Qui est le plus jeune ?", 'c' => ["Khaled", "son frère", "ils ont le même âge", "on ne peut pas savoir"], 'a' => 1, 'e' => "Si Khaled est l'aîné de deux ans, son frère est plus jeune."],
                    ['q' => "Que signifie « عادةً » ?", 'c' => ["d'habitude", "jamais", "dans des années", "une seule fois"], 'a' => 0, 'e' => "« عادةً » indique ce qui se passe le plus souvent."],
                    ['q' => "Comment décrit-on un verre rempli jusqu'au bord ?", 'c' => ["فارغ", "مكسور", "ممتلئ", "جاف"], 'a' => 2, 'e' => "« ممتلئ » veut dire plein."],
                    ['q' => "Ahmed rend visite à sa grand-mère chaque vendredi. Combien de fois par semaine ?", 'c' => ["une fois", "deux fois", "cinq fois", "sept fois"], 'a' => 0, 'e' => "Un seul jour de la semaine est mentionné : le vendredi."],
                ],
            ],
            [
                'title' => "Bien choisir son mot",
                'description' => "Trouver le mot qui convient dans une phrase et éviter les confusions fréquentes chez les débutants.",
                'questions' => [
                    ['q' => "Complétez : « ذهبت إلى ___ لشراء الخبز. »", 'c' => ["مستشفى", "مخبز", "مدرسة", "ملعب"], 'a' => 1, 'e' => "On achète le pain à la boulangerie, « مخبز »."],
                    ['q' => "Complétez : « وضعت الملابس في ___ ».", 'c' => ["فرن", "حوض", "ثلاجة", "خزانة"], 'a' => 3, 'e' => "Les vêtements se rangent dans une armoire."],
                    ['q' => "Quelle paire est formée de mots de sens proche ?", 'c' => ["واسع / ضيق", "طويل / قصير", "سعيد / فرحان", "فوق / تحت"], 'a' => 2, 'e' => "سعيد et فرحان expriment tous deux la joie ; les autres paires sont des contraires."],
                    ['q' => "Complétez : « أريد أن أقرأ هذا الكتاب لأنه ___ ومفيد. »", 'c' => ["ممتع", "مالح", "مبلل", "مسلوق"], 'a' => 0, 'e' => "On dit d'un livre qu'il est « ممتع » (agréable, passionnant)."],
                    ['q' => "Quelqu'un dit : « أنا جائع ». Quelle action est la plus logique ?", 'c' => ["j'enfile un manteau", "je mange", "j'ouvre la fenêtre", "je dors"], 'a' => 1, 'e' => "« جائع » signifie affamé : on mange."],
                    ['q' => "Quel mot décrit une pièce où il y a trop de choses et peu de place ?", 'c' => ["فارغة", "هادئة", "مزدحمة", "واسعة"], 'a' => 2, 'e' => "« مزدحمة » veut dire encombrée."],
                    ['q' => "« الطريق طويل. » De quoi a-t-on besoin ?", 'c' => ["de plus de temps", "de moins de temps", "d'aucun temps", "de monnaie"], 'a' => 0, 'e' => "Un long trajet demande plus de temps."],
                    ['q' => "Complétez : « كان الطفل ___ عندما سمع الخبر السعيد. »", 'c' => ["مكسورًا", "فرحًا", "باردًا", "فارغًا"], 'a' => 1, 'e' => "Une bonne nouvelle rend joyeux : « فرحًا »."],
                    ['q' => "Quel est le pluriel de « كتاب » ?", 'c' => ["كتب", "كاتب", "مكتب", "مكتبة"], 'a' => 0, 'e' => "Le pluriel de « كتاب » est « كتب ». كاتب est l'écrivain, مكتب le bureau."],
                    ['q' => "Que signifie « مكتب » ?", 'c' => ["bibliothèque", "écrivain", "bureau", "livre"], 'a' => 2, 'e' => "« مكتب » est un bureau (meuble ou pièce de travail)."],
                ],
            ],
            [
                'title' => "Révision : le vocabulaire en situation",
                'description' => "Petites scènes de la vie réelle (courses, voyage, école, travail, maison) pour réviser tout le vocabulaire du niveau débutant.",
                'questions' => [
                    ['q' => "Liyan va au marché avec une liste : تفاح، طماطم، أرز. Qu'achète-t-elle ?", 'c' => ["des vêtements", "de la nourriture", "des fournitures scolaires", "des meubles"], 'a' => 1, 'e' => "Pommes, tomates et riz sont des aliments."],
                    ['q' => "Karim arrive à l'aéroport deux heures avant son vol. Quel mot correspond à la situation ?", 'c' => ["سفر", "طبخ", "نوم", "تنظيف"], 'a' => 0, 'e' => "Aéroport et avion renvoient au voyage, « سفر »."],
                    ['q' => "Le directeur dit : « احتفظ بهذه الأوراق في الملف ». Que doit-on mettre dans le dossier ?", 'c' => ["la nourriture", "les vêtements", "les chaussures", "les papiers"], 'a' => 3, 'e' => "« الأوراق » signifie les documents, les papiers."],
                    ['q' => "Sami entre dans une pharmacie et dit : « أحتاج دواءً للصداع ». Quel est le mot clé de sa demande ?", 'c' => ["تذكرة", "وجبة", "دواء", "خريطة"], 'a' => 2, 'e' => "Il demande un médicament, « دواء »."],
                    ['q' => "En classe, le professeur demande d'ouvrir les cahiers et d'écrire la date. De quoi chaque élève a-t-il d'abord besoin ?", 'c' => ["معطف", "قلم", "كوب", "مفتاح"], 'a' => 1, 'e' => "Pour écrire, il faut un stylo, « قلم »."],
                    ['q' => "Le père dit : « الجو ممطر، خذ معك مظلتك ». Quel mot explique pourquoi prendre le parapluie ?", 'c' => ["الأب", "خذ", "ممطر", "معك"], 'a' => 2, 'e' => "« ممطر » signifie pluvieux : c'est la raison."],
                    ['q' => "Nour veut préparer une tasse de thé. Quel groupe de mots lui est utile ?", 'c' => ["وسادة، بطانية، سرير", "دفتر، قلم، كتاب", "كوب، ماء، شاي", "حذاء، معطف، قبعة"], 'a' => 2, 'e' => "Verre, eau et thé : tout ce qu'il faut pour faire du thé."],
                    ['q' => "Heba dit : « أريد هدية صغيرة لصديقتي ». Que signifie « صغيرة » ici ?", 'c' => ["pas grande", "chère", "lourde", "comestible"], 'a' => 0, 'e' => "« صغيرة » renvoie à la taille du cadeau."],
                    ['q' => "Youssef veut acheter une chemise mais ne connaît pas sa taille. Quel mot doit-il connaître ?", 'c' => ["محطة", "وصفة", "مكتبة", "مقاس"], 'a' => 3, 'e' => "« مقاس » signifie la taille, la mesure."],
                    ['q' => "Quel mot arabe signifie « billet » (de train ou d'avion) ?", 'c' => ["خريطة", "تذكرة", "حقيبة", "جواز"], 'a' => 1, 'e' => "« تذكرة » est le billet. خريطة est la carte, حقيبة le sac, جواز le passeport."],
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
