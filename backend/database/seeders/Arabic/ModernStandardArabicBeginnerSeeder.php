<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ModernStandardArabicBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'modern-standard-arabic')->firstOrFail();

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
                'title' => "Découvrir l'arabe standard moderne",
                'description' => "Comprendre ce qu'est l'arabe standard moderne et où on l'utilise : école, médias, écrits officiels.",
                'questions' => [
                    ['q' => "Qu'appelle-t-on l'arabe standard moderne (الفصحى المعاصرة) ?", 'c' => ["l'arabe utilisé aujourd'hui à l'école, dans les médias et dans les écrits officiels", "un dialecte réservé à la famille", "une langue littéraire ancienne qui n'est plus utilisée", "un système pour écrire les chiffres"], 'a' => 0, 'e' => "C'est la forme standard commune, employée dans l'enseignement, la presse, l'administration et les documents officiels."],
                    ['q' => "Dans quelle situation l'arabe standard moderne est-il le plus approprié ?", 'c' => ["rédiger une annonce officielle pour l'université", "discuter en famille en dialecte", "envoyer un message rapide à un ami en dialecte", "bavarder à la maison"], 'a' => 0, 'e' => "Un écrit officiel demande une formulation standard et claire."],
                    ['q' => "Laquelle de ces phrases est la plus proche de l'arabe standard ?", 'c' => ["يرجى إرسال الطلب قبل يوم الجمعة.", "بعثلي الطلب بكري.", "بغيتك تبعث الطلب قبل الجمعة.", "هات الطلب دابا."], 'a' => 0, 'e' => "La seule formulation standard et formelle est « يرجى إرسال الطلب قبل يوم الجمعة »."],
                    ['q' => "Pourquoi un élève apprend-il l'arabe standard moderne ?", 'c' => ["pour comprendre des textes récents et communiquer dans des situations scolaires et officielles", "pour parler un seul dialecte", "parce qu'il n'aura jamais besoin de lire", "parce qu'il ne sert qu'au calcul"], 'a' => 0, 'e' => "Il donne accès à la lecture, à l'enseignement, aux médias et à la communication officielle."],
                    ['q' => "Quelle ressource aide à vérifier le sens d'un mot standard récent ?", 'c' => ["un dictionnaire arabe fiable", "une liste de noms au hasard", "une image sans mots", "un tableau de chiffres"], 'a' => 0, 'e' => "Le dictionnaire permet de vérifier sens et emplois."],
                    ['q' => "Quel mot est courant à l'école dans le sens de « matière / programme d'étude » ?", 'c' => ["مقرر", "رحلة", "دكان", "نافذة"], 'a' => 0, 'e' => "« مقرر » désigne la matière ou le programme que l'élève étudie."],
                    ['q' => "Dans « يعقد المركز دورة تدريبية », de quel domaine relève « دورة » ?", 'c' => ["de la formation", "de la cuisine", "du sport uniquement", "de la météo"], 'a' => 0, 'e' => "« دورة تدريبية » est une session de formation."],
                    ['q' => "Quelle est la différence simplifiée entre l'arabe standard et le dialecte ?", 'c' => ["le standard est plus normé et sert aux situations officielles, alors que les dialectes varient selon les régions", "les dialectes sont tous identiques au standard", "il n'y a aucune différence d'usage", "le standard ne s'utilise dans aucune situation réelle"], 'a' => 0, 'e' => "Le standard est une norme commune ; les dialectes diffèrent par la prononciation, le vocabulaire et les tournures."],
                    ['q' => "Quel titre convient à un article rédigé en arabe standard ?", 'c' => ["افتتاح مركز جديد للتدريب المهني", "شنو وقع البارح؟", "يلا نمشيو دابا.", "بغيت نشوفك."], 'a' => 0, 'e' => "Le titre est neutre, normé et informatif : il convient à un article de presse."],
                    ['q' => "Pour comprendre un article simple en arabe standard, quelle compétence est la plus utile ?", 'c' => ["repérer les mots clés et les comprendre grâce au contexte", "lire le titre seulement", "ignorer les verbes", "deviner chaque mot au hasard"], 'a' => 0, 'e' => "Le contexte et les mots clés permettent de comprendre sans connaître chaque mot."],
                ],
            ],
            [
                'title' => "Le vocabulaire moderne",
                'description' => "Des mots modernes fréquents à l'école, au travail, dans la technologie et la vie courante.",
                'questions' => [
                    ['q' => "« أرسل الموظف الطلب عبر البريد الإلكتروني » : que désigne « البريد الإلكتروني » ?", 'c' => ["une boîte aux lettres dans la rue", "un courrier uniquement papier", "un appel téléphonique", "un moyen d'envoyer messages et fichiers par internet"], 'a' => 3, 'e' => "C'est le courrier électronique."],
                    ['q' => "Que signifie « موعد » dans « لدي موعد مع الطبيب غدًا » ?", 'c' => ["une heure fixée pour une rencontre ou une visite", "un lieu de travail", "un type de médicament", "un document de voyage"], 'a' => 0, 'e' => "« موعد » est le rendez-vous, l'heure convenue."],
                    ['q' => "Quel est le sens le plus proche de « متاح » dans « الخدمة متاحة على مدار اليوم » ?", 'c' => ["fermé en permanence", "très éloigné", "inexistant", "disponible, accessible"], 'a' => 3, 'e' => "« متاح » signifie que l'on peut l'utiliser ou y accéder."],
                    ['q' => "L'université annonce « فتح باب التسجيل ». Que cela signifie-t-il ?", 'c' => ["que la période des inscriptions est ouverte", "que l'université a fermé ses portes", "que l'examen commence", "que l'adresse a changé"], 'a' => 0, 'e' => "Les étudiants peuvent désormais déposer leur demande d'inscription."],
                    ['q' => "Au travail, que veut dire « اجتماع » ?", 'c' => ["une réunion où l'on discute d'un sujet ou d'un travail", "seulement un document officiel", "un lieu pour dormir", "un outil électronique"], 'a' => 0, 'e' => "« اجتماع » est une réunion organisée pour discuter ou décider."],
                    ['q' => "Que signifie « مرفق » dans « أرسلنا المرفق مع الرسالة » ?", 'c' => ["l'adresse de l'expéditeur", "le nom de l'entreprise", "un fichier envoyé avec le message", "l'heure de la réunion"], 'a' => 2, 'e' => "« المرفق » est la pièce jointe."],
                    ['q' => "« أعلنت الوزارة عن مبادرة جديدة » : que signifie « أعلنت » ?", 'c' => ["elle a annoncé officiellement quelque chose de nouveau", "elle a caché l'information", "elle a annulé la décision en secret", "elle a voyagé ailleurs"], 'a' => 0, 'e' => "« أعلن » : informer officiellement le public."],
                    ['q' => "Que signifie « منصة » dans « منصة تعليمية إلكترونية » ?", 'c' => ["une simple table en bois", "un livre papier", "un bus scolaire", "un site ou système numérique qui propose des cours ou des services"], 'a' => 3, 'e' => "Ici, « منصة » est une plateforme en ligne."],
                    ['q' => "Dans « يحتاج المشروع إلى تمويل », que signifie « تمويل » ?", 'c' => ["fournir l'argent nécessaire à sa réalisation", "donner un nom au projet", "écrire le titre du projet", "arrêter le projet"], 'a' => 0, 'e' => "Le financement est l'argent nécessaire pour lancer ou faire fonctionner un projet."],
                    ['q' => "Quel mot convient le mieux à un rapport sur la technologie ?", 'c' => ["تطبيق", "وسادة", "ستارة", "ملاعق"], 'a' => 0, 'e' => "« تطبيق » désigne une application (logiciel) utilisée sur un appareil."],
                ],
            ],
            [
                'title' => "Lire et comprendre l'arabe standard moderne",
                'description' => "Lire de courts textes en arabe standard et en extraire des informations simples.",
                'questions' => [
                    ['q' => "« أطلقت المدرسة برنامجًا للقراءة، ويطلب البرنامج من الطلاب قراءة قصة كل أسبوع. » Que demande le programme ?", 'c' => ["lire une histoire par semaine", "assister à un cours de sport chaque jour", "acheter un nouvel ordinateur", "voyager à la fin du mois"], 'a' => 0, 'e' => "Le texte dit qu'il faut lire une histoire chaque semaine."],
                    ['q' => "« وصلت الحافلة متأخرة بسبب ازدحام الطريق. » Quelle est la cause du retard ?", 'c' => ["le temps ensoleillé", "l'absence des élèves", "la fermeture de l'école", "l'encombrement de la route"], 'a' => 3, 'e' => "Le texte relie directement le retard à l'embouteillage."],
                    ['q' => "« تستخدم الجامعة منصة إلكترونية لإرسال الواجبات واستقبال الملاحظات. » À quoi sert la plateforme ?", 'c' => ["à envoyer les devoirs et recevoir les remarques", "à réserver des voyages", "à acheter à manger", "à réparer les ordinateurs"], 'a' => 0, 'e' => "Les deux fonctions sont citées : envoyer les devoirs et recevoir les remarques."],
                    ['q' => "« بدأت ليلى عملها الجديد هذا الأسبوع، وهي تحضر اجتماعًا قصيرًا كل صباح. » Que fait Layla le matin ?", 'c' => ["elle va à l'université", "elle voyage dans une autre ville", "elle assiste à une courte réunion", "elle étudie toute la nuit"], 'a' => 2, 'e' => "Le texte indique qu'elle assiste chaque matin à une courte réunion."],
                    ['q' => "« أعلنت الشركة عن افتتاح فرع جديد في المدينة الشهر المقبل. » Quand la succursale ouvrira-t-elle ?", 'c' => ["hier", "aujourd'hui", "le mois prochain", "l'année dernière"], 'a' => 2, 'e' => "« الشهر المقبل » donne la date d'ouverture."],
                    ['q' => "« يقرأ سامر الأخبار صباحًا لأنه يريد معرفة آخر التطورات. » Pourquoi lit-il les nouvelles ?", 'c' => ["parce qu'il veut dormir", "pour connaître les dernières évolutions", "parce qu'il étudie la musique", "parce qu'il cherche de la nourriture"], 'a' => 1, 'e' => "La raison est donnée après « لأنه »."],
                    ['q' => "« أرسلت نور التقرير إلى مديرها، ثم تلقت رسالة تطلب بعض التعديلات. » Que s'est-il passé après l'envoi ?", 'c' => ["elle a quitté l'entreprise", "elle a reçu un message demandant des modifications", "elle a immédiatement écrit un nouveau rapport", "elle a supprimé le rapport"], 'a' => 1, 'e' => "Le mot « ثم » marque l'ordre : d'abord l'envoi, puis le message."],
                    ['q' => "« يوفر المركز دورات مجانية للباحثين عن عمل. » Qui profite des formations d'après le texte ?", 'c' => ["les enfants uniquement", "les retraités uniquement", "les touristes", "les personnes qui cherchent un emploi"], 'a' => 3, 'e' => "Le public concerné est cité explicitement."],
                    ['q' => "« أصبح الحجز الإلكتروني أسهل، إذ يستطيع العميل اختيار الموعد من هاتفه. » Quel avantage est mentionné ?", 'c' => ["annuler tous les rendez-vous", "choisir facilement son rendez-vous depuis son téléphone", "se passer d'internet", "voyager sans réservation"], 'a' => 1, 'e' => "« إذ » introduit l'explication de la facilité."],
                    ['q' => "« حصلت المدينة على حديقة جديدة، وأصبحت العائلات تزورها في نهاية الأسبوع. » Quelle est la conséquence ?", 'c' => ["le parc a été fermé", "les familles ont déménagé", "le parc est devenu un lieu que les familles visitent le week-end", "les gens ont cessé de visiter les parcs"], 'a' => 2, 'e' => "La deuxième partie de la phrase montre l'effet de l'ouverture du parc."],
                ],
            ],
            [
                'title' => "La langue officielle au quotidien",
                'description' => "Choisir la bonne formulation en arabe standard pour les messages, annonces, consignes et situations publiques.",
                'questions' => [
                    ['q' => "Quelle formulation convient à une annonce universitaire ?", 'c' => ["يلا تعالوا للقاعة الساعة عشرة.", "بغيتكم تجيو دابا.", "يُرجى من الطلاب الحضور إلى القاعة الرئيسية الساعة العاشرة.", "تعالوا هكذا فقط."], 'a' => 2, 'e' => "La première est claire, polie et officielle."],
                    ['q' => "Quelle phrase convient à un court message officiel ?", 'c' => ["بغيت نعرف النتائج إمتى.", "أود الاستفسار عن موعد إعلان النتائج.", "شنو وقع في النتائج؟", "عطيني النتائج."], 'a' => 1, 'e' => "« أود الاستفسار » est une expression polie utilisée dans les courriers."],
                    ['q' => "Comment demander poliment à quelqu'un de renvoyer un fichier ?", 'c' => ["عاود صيفط ليا الملف.", "صيفط الملف مرة أخرى.", "الملف دابا.", "يرجى إعادة إرسال الملف عند التمكن."], 'a' => 3, 'e' => "Formulation courtoise, adaptée à la correspondance officielle."],
                    ['q' => "Quelle consigne convient à un établissement ?", 'c' => ["يرجى إطفاء الأجهزة قبل مغادرة القاعة.", "طفي الأجهزة قبل ما تمشي.", "الأجهزة دابا.", "خلي كلشي شاعل."], 'a' => 0, 'e' => "Claire et directe, elle convient à une consigne écrite."],
                    ['q' => "Quel titre officiel convient à un fichier contenant les noms des participants ?", 'c' => ["الناس ديال الدورة", "شكون جا؟", "قائمة المشاركين في الدورة التدريبية", "الأسماء هادو."], 'a' => 2, 'e' => "Il est précis et emploie un vocabulaire adapté à un document officiel."],
                    ['q' => "Comment refuser poliment une demande ?", 'c' => ["لا، ما نقدرش.", "نعتذر، لا يمكننا تلبية الطلب في الوقت الحالي.", "ما بغيناش.", "مستحيل."], 'a' => 1, 'e' => "Elle refuse avec courtoisie et dans un registre professionnel."],
                    ['q' => "Quelle phrase convient pour demander une précision à un professeur ?", 'c' => ["شنو يعني هاد الشي؟", "فسرها بسرعة.", "ما فهمتش.", "هل يمكنكم توضيح هذه النقطة، من فضلكم؟"], 'a' => 3, 'e' => "Polie, claire et adaptée à un échange universitaire."],
                    ['q' => "Quelle formule convient pour commencer un courriel officiel ?", 'c' => ["سلام، شنو الأخبار؟", "أهلا خويا.", "واش كلشي مزيان؟", "السلام عليكم ورحمة الله وبركاته،"], 'a' => 3, 'e' => "C'est une salutation arabe formelle, adaptée à de nombreux courriers officiels."],
                    ['q' => "Quelle formule convient pour terminer un courriel officiel ?", 'c' => ["يلا سلام.", "نشوفك من بعد.", "وتفضلوا بقبول فائق الاحترام.", "باي."], 'a' => 2, 'e' => "C'est une formule de politesse professionnelle."],
                    ['q' => "Quand une formulation officielle est-elle particulièrement importante ?", 'c' => ["pour une discussion informelle avec un ami proche seulement", "lorsqu'on s'adresse à une institution ou dans un document professionnel", "pour un message très privé entre membres de la famille", "pour plaisanter à la maison"], 'a' => 1, 'e' => "Les situations officielles demandent une langue claire, respectueuse et conventionnelle."],
                ],
            ],
            [
                'title' => "L'arabe standard dans les médias",
                'description' => "S'entraîner à comprendre la langue des nouvelles, des titres et des annonces médiatiques simples.",
                'questions' => [
                    ['q' => "Quel titre ressemble le plus à un titre de presse ?", 'c' => ["شوفو شنو وقع!", "واش عرفتوا الخبر؟", "مركز زوين بزاف.", "افتتاح مركز صحي جديد في المدينة"], 'a' => 3, 'e' => "Les titres de presse sont courts, directs et donnent l'information essentielle."],
                    ['q' => "Dans « أعلنت الوزارة إطلاق برنامج جديد », quel verbe indique un acte officiel ?", 'c' => ["أعلنت", "الوزارة", "برنامج", "جديد"], 'a' => 0, 'e' => "« أعلنت » est le verbe qui exprime l'annonce officielle."],
                    ['q' => "« ارتفعت درجات الحرارة اليوم. » Qu'est-ce qui a augmenté ?", 'c' => ["le ministère", "les températures", "la ville", "la route"], 'a' => 1, 'e' => "L'information est directe : ce sont les températures."],
                    ['q' => "Quel est le but d'un bon titre d'article ?", 'c' => ["raconter tous les détails de l'article", "cacher le sujet", "donner rapidement et clairement l'information principale", "écrire une longue opinion personnelle"], 'a' => 2, 'e' => "Il permet de connaître le sujet avant de lire les détails."],
                    ['q' => "Dans « بحسب التقرير، تحسن الأداء هذا العام », que signifie « بحسب » ?", 'c' => ["malgré le rapport", "sans le rapport", "d'après ce qu'indique le rapport", "après suppression du rapport"], 'a' => 2, 'e' => "« بحسب » signifie « selon, d'après »."],
                    ['q' => "Quelle phrase est la plus neutre pour un article ?", 'c' => ["الشركة الرائعة أعلنت أفضل نتائج في التاريخ.", "أعلنت الشركة نتائجها الجديدة أمس.", "هذه الشركة لا تخطئ أبدًا.", "الخبر مذهل جدًا بشكل لا يصدق."], 'a' => 1, 'e' => "Elle rapporte le fait sans exagération ni jugement."],
                    ['q' => "Que signifie « بحضور عدد من المسؤولين » dans un article ?", 'c' => ["tous les responsables étaient absents", "plusieurs responsables étaient présents à l'événement", "l'événement n'avait pas commencé", "personne n'est venu"], 'a' => 1, 'e' => "L'expression indique la présence de plusieurs responsables."],
                    ['q' => "Dans un article sur un congrès, que signifie « افتتاح » ?", 'c' => ["la fin du congrès", "l'annulation du congrès", "le début du congrès", "seulement le changement de lieu"], 'a' => 2, 'e' => "« افتتاح » est l'ouverture, le début des activités."],
                    ['q' => "Quelle phrase convient le mieux à un paragraphe d'information ?", 'c' => ["أنا متأكد أن المشروع هو الأفضل.", "المشروع رائع جدًا في رأيي.", "من المقرر أن يبدأ المشروع الشهر المقبل، وفقًا للجهات المعنية.", "بصراحة، أحب هذا المشروع."], 'a' => 2, 'e' => "Elle donne une information attribuée à une source, dans le style journalistique."],
                    ['q' => "Quelles questions aident à extraire l'essentiel d'une brève ?", 'c' => ["Quelle est la couleur de la couverture ?", "Qui ? Quoi ? Quand ? Où ?", "Combien de lettres compte le titre ?", "Que pense le lecteur de l'auteur ?"], 'a' => 1, 'e' => "Ces questions de base font ressortir les éléments clés de l'information."],
                ],
            ],
            [
                'title' => "L'arabe standard à l'étude et au travail",
                'description' => "Employer le vocabulaire et les formules de l'arabe standard moderne en contexte académique et professionnel.",
                'questions' => [
                    ['q' => "Quelle phrase convient à un rapport scolaire ?", 'c' => ["هاد التقرير غادي نهضر فيه على كلشي.", "بغيت نهضر على النتائج.", "النتائج زوينة بزاف.", "يهدف هذا التقرير إلى عرض نتائج الاستبيان."], 'a' => 3, 'e' => "Elle est claire, directe et adaptée au style d'un rapport."],
                    ['q' => "Au travail, que signifie « المهام المطلوبة » ?", 'c' => ["la pause", "les tâches à accomplir", "les noms des employés uniquement", "le bâtiment de l'entreprise"], 'a' => 1, 'e' => "« المهام » désigne les travaux à effectuer."],
                    ['q' => "Quelle phrase convient pour demander des informations à un collègue ?", 'c' => ["عطيني البيانات.", "بغيت البيانات دابا.", "هل يمكنك تزويدي بالبيانات المطلوبة، من فضلك؟", "فين البيانات؟"], 'a' => 2, 'e' => "Polie et professionnelle."],
                    ['q' => "Que signifie « موعد التسليم » ?", 'c' => ["le lieu de remise", "la date ou l'heure limite pour rendre un travail ou un fichier", "le nom de l'employé", "le titre du projet"], 'a' => 1, 'e' => "C'est la date convenue pour remettre le travail."],
                    ['q' => "Le directeur dit « سنراجع الخطة غدًا ». Que signifie « نراجع » ?", 'c' => ["nous annulons toujours le plan", "nous examinons le plan, le discutons ou le corrigeons si nécessaire", "nous l'envoyons à l'étranger", "nous le cachons"], 'a' => 1, 'e' => "Réviser un plan, c'est l'examiner attentivement et éventuellement le modifier."],
                    ['q' => "Quelle phrase convient pour ouvrir une présentation ?", 'c' => ["ها أنا غادي نهضر على المشروع.", "المشروع وبس.", "يلا نبداو دابا.", "سأقدم لكم اليوم عرضًا موجزًا حول نتائج المشروع."], 'a' => 3, 'e' => "Elle convient à un exposé académique ou professionnel."],
                    ['q' => "Dans un courriel professionnel, que signifie « أرفق لكم » ?", 'c' => ["je vous appelle", "je vous envoie un fichier joint au message", "je ferme le message", "je demande seulement un rendez-vous"], 'a' => 1, 'e' => "« أرفق » s'emploie pour joindre un document à un message."],
                    ['q' => "Quelle phrase présente bien un résultat simple dans un rapport ?", 'c' => ["النتائج زوينة بزاف.", "أنا كنظن أن النتيجة زوينة.", "تشير النتائج إلى تحسن مستوى المشاركة مقارنة بالشهر السابق.", "النتائج هكذا فقط."], 'a' => 2, 'e' => "Formulation de rapport claire, avec une comparaison."],
                    ['q' => "À quoi sert un titre clair dans un rapport ?", 'c' => ["à empêcher de comprendre le texte", "à remplacer tous les paragraphes", "à rendre automatiquement tous les mots officiels", "à aider le lecteur à connaître rapidement le sujet de la section ou du document"], 'a' => 3, 'e' => "Un titre précis résume le sujet et facilite l'accès à l'information."],
                    ['q' => "Quelle question convient à une discussion académique ?", 'c' => ["شنو رأيك بسرعة؟", "ما الأسباب التي تفسر هذه النتيجة؟", "علاش هادشي هكا؟", "واش سالينا؟"], 'a' => 1, 'e' => "Elle est structurée et adaptée à une discussion sur des résultats."],
                ],
            ],
            [
                'title' => "Écrire et s'exprimer en arabe standard",
                'description' => "S'exercer à construire des phrases et de courts paragraphes en arabe standard avec un style adapté.",
                'questions' => [
                    ['q' => "Quelle phrase peut ouvrir un paragraphe sur les études à distance ?", 'c' => ["الدراسة فقط.", "أصبحت الدراسة عن بُعد خيارًا مهمًا في كثير من المؤسسات التعليمية.", "أنا أمس في البيت.", "الحاسوب أزرق."], 'a' => 1, 'e' => "Elle présente le sujet de façon générale et ouvre la voie à ses avantages ou défis."],
                    ['q' => "Complétez : « تساعد القراءة اليومية على ___ المفردات. »", 'c' => ["توسيعًا", "واسع", "تتسع", "توسيع"], 'a' => 3, 'e' => "Après « على », on emploie le nom verbal au génitif : « على توسيع المفردات »."],
                    ['q' => "Quelle phrase est la plus claire ?", 'c' => ["الطالب يحتاج التنظيم في الموعد المهام.", "مهام الطالب في الوقت يحتاج.", "ينجز يحتاج الطالب.", "يحتاج الطالب إلى تنظيم وقته حتى ينجز مهامه في الموعد."], 'a' => 3, 'e' => "Elle est bien ordonnée et montre le lien entre organisation du temps et réalisation des tâches."],
                    ['q' => "Quel connecteur convient : « كان المشروع متأخرًا، ___ تمكنا من إنجازه في النهاية. » ?", 'c' => ["لكن", "لذلك", "لأن", "أولًا"], 'a' => 0, 'e' => "« لكن » marque l'opposition entre le retard et la réussite finale."],
                    ['q' => "Quelle phrase exprime une opinion accompagnée d'une raison ?", 'c' => ["القراءة في المكتبة.", "أرى أن القراءة مهمة لأنها توسع المعرفة.", "الكتاب على الطاولة.", "قرأت كتابًا أمس."], 'a' => 1, 'e' => "« أرى » donne l'opinion et « لأنها » la raison."],
                    ['q' => "Quelle phrase conclut bien un court paragraphe sur l'apprentissage continu ?", 'c' => ["وغدًا سأذهب إلى السوق.", "أما الطقس فمختلف.", "لذلك يبقى التعلم المستمر وسيلة مهمة لتطوير المعرفة والمهارات.", "هذا كل شيء عن السيارات."], 'a' => 2, 'e' => "Elle revient au sujet et en résume l'importance."],
                    ['q' => "Que faire pour bien écrire un court paragraphe en arabe standard ?", 'c' => ["regrouper beaucoup d'idées sans lien", "répéter le même mot à chaque ligne", "employer des mots difficiles quel que soit le contexte", "utiliser des phrases claires et liées autour d'une seule idée"], 'a' => 3, 'e' => "La clarté et la cohérence rendent le paragraphe facile à lire."],
                    ['q' => "Quelle phrase emploie correctement « على الرغم من » ?", 'c' => ["على الرغم من أكمل الطالب صعوبة.", "على الرغم من صعوبة المهمة، أكمل الطالب عمله.", "على الرغم من المهمة أكمل.", "أكمل الطالب على الرغم صعوبة."], 'a' => 1, 'e' => "« على الرغم من » est suivi d'un nom (صعوبة المهمة) ; la phrase exprime la concession."],
                    ['q' => "Un élève veut éviter de répéter « مهم » dans son paragraphe. Que peut-il faire ?", 'c' => ["répéter « مهم » encore plus", "supprimer tout le paragraphe", "employer d'autres mots adaptés comme « ضروري » ou reformuler la phrase", "ajouter des mots sans rapport"], 'a' => 2, 'e' => "Varier le vocabulaire et reformuler garde le sens et rend le texte plus fluide."],
                    ['q' => "Quel titre convient à un paragraphe sur la technologie dans l'enseignement ?", 'c' => ["يوم الجمعة", "رحلة قصيرة", "التقنية ودورها في التعليم", "أشياء مختلفة"], 'a' => 2, 'e' => "Il est précis et correspond au contenu du paragraphe."],
                ],
            ],
            [
                'title' => "Situations de communication en arabe standard",
                'description' => "Utiliser l'arabe standard pour se renseigner, s'excuser, demander de l'aide, décrire un problème ou proposer quelque chose.",
                'questions' => [
                    ['q' => "Vous voulez connaître l'heure d'ouverture de la bibliothèque. Quelle formulation convient ?", 'c' => ["المكتبة إمتى كتفتح؟", "فين المكتبة؟", "بغيت المكتبة دابا.", "متى تفتح المكتبة أبوابها؟"], 'a' => 3, 'e' => "La question est en arabe standard, claire et adaptée."],
                    ['q' => "Vous voulez vous excuser de ne pas avoir assisté à une réunion. Quelle formulation est la meilleure ?", 'c' => ["سمح ليا ما قدرتش نجي.", "ما جيتش وخلاص.", "أعتذر عن عدم تمكني من حضور الاجتماع.", "كنت غايب."], 'a' => 2, 'e' => "Elle est polie et adaptée à une communication officielle ou professionnelle."],
                    ['q' => "Vous demandez de l'aide à un employé d'une administration. Que dites-vous ?", 'c' => ["عاونّي دابا.", "عطيني المساعدة.", "بغيت هادشي.", "هل يمكنكم مساعدتي في إتمام هذا الطلب، من فضلكم؟"], 'a' => 3, 'e' => "Demande polie, claire, en registre soutenu."],
                    ['q' => "À l'accueil, comment demander la personne que vous cherchez ?", 'c' => ["فين أحمد؟", "بغيت نشوف أحمد.", "أحمد هنا ولا لا؟", "أرغب في مقابلة الأستاذ أحمد، من فضلكم."], 'a' => 3, 'e' => "Elle convient à un échange formel avec le personnel d'accueil."],
                    ['q' => "Vous n'avez pas compris une consigne. Quelle question est la plus adaptée ?", 'c' => ["شنو هادشي؟", "ما فهمتش.", "هل يمكنكم توضيح الخطوة الثانية من فضلكم؟", "عاود."], 'a' => 2, 'e' => "Elle demande poliment une précision et indique ce qui n'est pas compris."],
                    ['q' => "Vous voulez terminer poliment un appel officiel. Quelle phrase convient ?", 'c' => ["يلا سلام.", "نتهلاو.", "نقفل دابا.", "أشكركم على وقتكم، ونتمنى لكم يومًا موفقًا."], 'a' => 3, 'e' => "Elle est courtoise et adaptée à un appel professionnel."],
                    ['q' => "Quelle phrase décrit un problème de façon formelle ?", 'c' => ["المواد ما وصلاتش.", "واجهنا تأخرًا في وصول المواد المطلوبة.", "المواد ضايعة.", "كاين مشكل كبير بزاف."], 'a' => 1, 'e' => "Elle est précise et adaptée à un rapport ou à un échange professionnel."],
                    ['q' => "Comment présenter poliment une proposition ?", 'c' => ["خاصنا نبدلو الخطة.", "بدلوها.", "أقترح أن نراجع الخطة قبل اعتمادها.", "الخطة ماشي مزيانة."], 'a' => 2, 'e' => "« أقترح أن » est une formule adaptée pour proposer professionnellement."],
                    ['q' => "Quelle phrase montre que vous avez compris une demande ?", 'c' => ["واخا.", "فهمت هادشي.", "صافي.", "نعم، فهمت المطلوب وسأرسله غدًا."], 'a' => 3, 'e' => "Elle confirme la compréhension et ajoute un délai d'exécution."],
                    ['q' => "Quelle compétence est essentielle pour communiquer en arabe standard ?", 'c' => ["employer toujours des mots difficiles", "choisir des mots clairs et polis adaptés à la situation", "parler de la même façon dans toutes les situations", "éviter de poser des questions"], 'a' => 1, 'e' => "Adapter son style à la situation compte plus que d'utiliser des mots compliqués."],
                ],
            ],
            [
                'title' => "Révision générale : arabe standard moderne",
                'description' => "Vérifier sa compréhension du vocabulaire, de la lecture, de la langue officielle et de l'expression en situations modernes.",
                'questions' => [
                    ['q' => "Quelle formulation convient à un message adressé à l'administration de l'université ?", 'c' => ["بغيت نعرف شنو خاصني للتسجيل.", "شنو هي الشروط؟", "عطوني شروط التسجيل.", "أود الاستفسار عن شروط التسجيل في البرنامج."], 'a' => 3, 'e' => "Elle est formelle, polie et directe : adaptée à un message administratif."],
                    ['q' => "« أعلنت المؤسسة فتح التسجيل الإلكتروني ابتداءً من يوم الاثنين. » Quand l'inscription commence-t-elle ?", 'c' => ["vendredi", "hier", "lundi", "dans un mois"], 'a' => 2, 'e' => "Le texte fixe le début des inscriptions au lundi."],
                    ['q' => "Dans « يرجى إرفاق نسخة من الوثيقة », que signifie « إرفاق » ?", 'c' => ["supprimer le document", "joindre le document à la demande ou au message", "seulement traduire le document", "refuser le document"], 'a' => 1, 'e' => "Joindre un document, c'est l'envoyer avec la demande ou le message."],
                    ['q' => "Quel titre convient à un rapport sur des résultats d'examen ?", 'c' => ["النتائج ديال الامتحان", "شنو وقع في الامتحان؟", "نتائج زوينة بزاف", "تقرير حول نتائج الامتحان النهائي"], 'a' => 3, 'e' => "Il est clair, formel et décrit directement le contenu du rapport."],
                    ['q' => "« استخدمت المؤسسة منصة إلكترونية لتسهيل التواصل مع الطلاب. » Quel est le but de la plateforme ?", 'c' => ["vendre des livres papier", "faciliter la communication avec les étudiants", "organiser des voyages touristiques", "réparer des voitures"], 'a' => 1, 'e' => "Le but est indiqué explicitement dans la phrase."],
                    ['q' => "Quelle phrase convient à un rapport neutre ?", 'c' => ["كانت النتائج مذهلة ورائعة جدًا.", "أظن أن النتائج هي الأفضل بلا شك.", "أظهرت النتائج ارتفاعًا في نسبة الحضور خلال الشهر الماضي.", "أنا أحب هذه النتائج."], 'a' => 2, 'e' => "Elle décrit un résultat sans exagération ni jugement personnel."],
                    ['q' => "Vous ne comprenez pas un mot moderne dans un article en arabe standard. Que faites-vous d'abord ?", 'c' => ["vous supposez qu'il signifie le contraire", "vous ignorez tout le paragraphe", "vous regardez le contexte puis vérifiez dans un dictionnaire fiable si nécessaire", "vous le remplacez par un mot de dialecte au hasard"], 'a' => 2, 'e' => "Le contexte donne des indices, et le dictionnaire confirme le sens."],
                    ['q' => "Quelle phrase convient à une présentation académique ?", 'c' => ["يلا نبداو.", "هادي هي النتائج ديالنا.", "نشوفو دابا.", "سأعرض في هذه الجلسة أهم نتائج الدراسة."], 'a' => 3, 'e' => "Elle est en arabe standard clair et adaptée à un exposé académique."],
                    ['q' => "Pourquoi l'arabe standard moderne convient-il à des domaines variés ?", 'c' => ["parce que c'est un dialecte unique", "parce qu'il fournit une langue normée commune, utilisable dans l'enseignement, les médias et l'écriture générale", "parce qu'il ne contient aucun mot moderne", "parce qu'il n'est utilisé que dans la poésie ancienne"], 'a' => 1, 'e' => "Il sert de norme commune et facilite la communication entre locuteurs de régions différentes."],
                    ['q' => "Quelle est la meilleure manière de progresser en arabe standard moderne ?", 'c' => ["apprendre des mots isolés sans les employer", "utiliser le même dialecte dans toutes les situations", "lire régulièrement et écrire des phrases et paragraphes en les relisant dans différents contextes", "toujours s'appuyer sur la traduction mot à mot"], 'a' => 2, 'e' => "On progresse par une pratique réelle qui associe lecture, écriture, usage et relecture."],
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
