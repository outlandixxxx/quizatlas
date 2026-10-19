<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WritingSkillsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'writing-skills')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Écrire des phrases claires",
                'description' => "Apprendre à écrire des phrases arabes complètes et claires, avec un bon début et une bonne fin pour chaque idée.",
                'questions' => [
                    ['q' => "Quelle phrase est écrite de façon complète et claire ?", 'c' => ["قراءة القصص في المساء.", "أحب قراءة القصص في المساء.", "أحب القصص في.", "في المساء القصص أحب."], 'a' => 1, 'e' => "La première contient une idée complète : un sujet, un verbe et ce qui s'y rapporte."],
                    ['q' => "Ahmed veut écrire une phrase sur son école. Quel début convient ?", 'c' => ["اشتريت حذاءً جديدًا أمس.", "مدرستي قريبة من منزلنا.", "مدرستي قريبة من.", "منزلنا المدرسة."], 'a' => 1, 'e' => "La première donne une information claire sur l'école et peut servir de base à un paragraphe."],
                    ['q' => "Quelle phrase convient pour parler d'un loisir ?", 'c' => ["وصل القطار في الثامنة.", "أحب الرسم في وقت الفراغ.", "الرسم وقت الفراغ أحب.", "وقت الرسم الفراغ."], 'a' => 1, 'e' => "Elle exprime directement un loisir et précise quand on le pratique."],
                    ['q' => "Quelle phrase donne une idée utile sur le matin ?", 'c' => ["الصباح مبكرًا الفطور.", "أستيقظ مبكرًا وأتناول الفطور.", "وأتناول الفطور.", "الصباح مبكرًا."], 'a' => 1, 'e' => "Elle contient deux verbes liés à la routine du matin et elle est complète."],
                    ['q' => "Qu'est-ce qui rend la phrase « ذهبت إلى السوق » compréhensible ?", 'c' => ["elle contient quatre signes de ponctuation", "elle contient un verbe et un lieu clair", "tous ses mots sont des noms", "elle ne contient pas de verbe"], 'a' => 1, 'e' => "« ذهبت » dit l'action et « إلى السوق » donne la destination."],
                    ['q' => "Choisis une fin adaptée à la phrase qui commence par : « في عطلة نهاية الأسبوع... »", 'c' => ["عطلة نهاية الأسبوع.", "أزور جدتي مع عائلتي.", "مع عائلتي في.", "أزور مع."], 'a' => 1, 'e' => "La première complète l'idée avec une action possible pendant le week-end."],
                    ['q' => "Quelle phrase convient pour présenter quelqu'un ?", 'c' => ["يوسف فقط.", "هذا صديقي يوسف، وهو طالب مجتهد.", "صديقي في هو.", "طالب يوسف صديقي."], 'a' => 1, 'e' => "Elle donne le nom et ajoute une information utile sur la personne."],
                    ['q' => "Un élève a écrit « الحديقة جميلة » et veut ajouter des détails. Quelle phrase convient à la suite ?", 'c' => ["جميلة جميلة جميلة.", "فيها أشجار كثيرة وزهور ملونة.", "الحديقة فقط.", "فيها."], 'a' => 1, 'e' => "Elle ajoute des détails qui aident le lecteur à imaginer le jardin."],
                    ['q' => "Quelle phrase exprime une préférence personnelle ?", 'c' => ["يوجد كوب على الطاولة.", "أفضل الشاي على القهوة.", "المقهى يفتح صباحًا.", "الشاي ساخن."], 'a' => 1, 'e' => "« أفضل » exprime un choix et un avis personnels."],
                    ['q' => "Avant d'écrire un court paragraphe, quelle étape est utile ?", 'c' => ["écrire des mots au hasard", "choisir l'idée dont on veut parler", "supprimer le titre", "répéter la même phrase"], 'a' => 1, 'e' => "Savoir de quoi on parle aide à rester dans le sujet."],
                ],
            ],
            [
                'title' => "Construire un paragraphe et ordonner les idées",
                'description' => "S'entraîner à écrire un court paragraphe avec une idée principale et des détails ordonnés et reliés.",
                'questions' => [
                    ['q' => "Quelle phrase peut être l'idée principale d'un paragraphe sur la lecture ?", 'c' => ["أقرأ أحيانًا.", "القراءة عادة مفيدة وممتعة.", "كتاب على الطاولة.", "في المساء فقط."], 'a' => 1, 'e' => "Elle présente le sujet de façon générale, ce qui convient à une idée principale."],
                    ['q' => "L'idée principale est « أحب مدينتي ». Quelle phrase la soutient ?", 'c' => ["ذهبت أمس إلى المدرسة.", "فيها حدائق جميلة وشوارع هادئة.", "أحب الطعام كثيرًا.", "حقيبة جديدة على الطاولة."], 'a' => 1, 'e' => "Les jardins et les rues sont des détails qui se rapportent directement à la ville."],
                    ['q' => "Quel ordre rend un paragraphe sur un voyage plus clair ?", 'c' => ["le retour, l'arrivée, puis le départ", "le départ, l'arrivée, les activités, puis le retour", "les activités, l'arrivée, puis la raison du voyage", "le retour, le petit-déjeuner, puis l'arrivée"], 'a' => 1, 'e' => "Suivre l'ordre du temps aide le lecteur à suivre le voyage."],
                    ['q' => "Quel est le rôle d'une phrase de soutien dans un paragraphe ?", 'c' => ["changer complètement de sujet", "expliquer l'idée principale ou lui ajouter des détails", "supprimer l'idée principale", "répéter seulement le titre"], 'a' => 1, 'e' => "Les phrases de soutien donnent des exemples, des raisons ou des détails."],
                    ['q' => "Quelle phrase n'a pas sa place dans un paragraphe sur « les bienfaits du sport » ?", 'c' => ["تساعد الرياضة على الحفاظ على نشاط الجسم.", "أفضل اللون الأزرق في ملابسي.", "المشي عادة بسيطة ومفيدة.", "الحركة المنتظمة مفيدة للصحة."], 'a' => 1, 'e' => "La phrase sur la couleur bleue n'a aucun rapport avec le sport."],
                    ['q' => "Un paragraphe commence par « أحب القراءة لثلاثة أسباب. ». Que s'attend-on à lire ensuite ?", 'c' => ["un changement de sujet vers les voitures", "les trois raisons", "un changement de nom de l'auteur", "la suppression de l'idée principale"], 'a' => 1, 'e' => "La phrase annonce une liste de raisons : elle doit être suivie de ces raisons."],
                    ['q' => "Quel mot de liaison convient pour ajouter une idée du même type ?", 'c' => ["لكن", "كما أن", "لذلك", "لأن"], 'a' => 1, 'e' => "« كما أن » ajoute une idée dans le même sens, alors que « لكن » oppose et « لذلك » exprime la conséquence."],
                    ['q' => "Complète : « أحب المشي؛ ___ يساعدني على الاسترخاء. »", 'c' => ["لكن", "لأنه", "ثم", "أو"], 'a' => 1, 'e' => "« لأنه » donne la raison pour laquelle l'auteur aime marcher."],
                    ['q' => "Quelle conclusion convient à un paragraphe sur la propreté de l'environnement ?", 'c' => ["أما هوايتي فهي الرسم.", "لذلك من المفيد أن نحافظ على نظافة الأماكن التي نعيش فيها.", "اشتريت حذاءً جديدًا.", "غدًا سأذهب إلى السوق."], 'a' => 1, 'e' => "La conclusion revient au sujet et résume l'idée de façon pratique."],
                    ['q' => "Qu'est-ce qui rend un paragraphe plus facile à lire ?", 'c' => ["la répétition du même mot", "un nouveau sujet à chaque phrase", "des phrases reliées autour d'une seule idée claire", "la suppression de tous les liens entre les idées"], 'a' => 2, 'e' => "L'unité du sujet et le lien entre les phrases aident à suivre l'idée."],
                ],
            ],
            [
                'title' => "La description et le choix des mots",
                'description' => "S'entraîner à décrire personnes, lieux et objets avec des mots simples et précis.",
                'questions' => [
                    ['q' => "Quelle phrase décrit le mieux une chambre ?", 'c' => ["الغرفة هناك.", "غرفتي جميلة.", "غرفتي واسعة وفيها مكتب قرب النافذة.", "هي غرفة."], 'a' => 2, 'e' => "Elle donne plusieurs détails qui aident le lecteur à imaginer le lieu."],
                    ['q' => "Quel mot décrit une voix forte ?", 'c' => ["ناعم", "هادئ", "عالٍ", "خفيف"], 'a' => 2, 'e' => "« عالٍ » décrit un son fort ; les autres mots évoquent le calme ou la douceur."],
                    ['q' => "Quelle description convient le mieux à un jardin au printemps ?", 'c' => ["هناك شيء.", "جميلة فقط.", "مليئة بالزهور الخضراء والملونة.", "حديقة في مكان."], 'a' => 2, 'e' => "Elle cite les fleurs et les couleurs, plus précis qu'un mot général comme « جميلة »."],
                    ['q' => "Quelle phrase décrit une personne coopérative ?", 'c' => ["يعيش في المدينة.", "لديه قميص أزرق.", "يساعد زملاءه عندما يحتاجون إلى الدعم.", "يصل الساعة الثامنة."], 'a' => 2, 'e' => "La coopération se voit dans le comportement : aider ses camarades en est une preuve claire."],
                    ['q' => "Quel mot convient pour un livre qui contient beaucoup d'informations ?", 'c' => ["فارغ", "مكسور", "مفيد", "ضيق"], 'a' => 2, 'e' => "« مفيد » correspond à un livre qui apporte des connaissances utiles."],
                    ['q' => "Quelle est la différence entre « البيت جميل » et « البيت ذو النوافذ الواسعة والحديقة الصغيرة » ?", 'c' => ["les deux n'ont aucun sens", "la première est plus longue", "la seconde donne plus de détails", "la seconde ne décrit pas la maison"], 'a' => 2, 'e' => "La seconde précise les fenêtres et le jardin : on se fait une image plus nette."],
                    ['q' => "Quelle expression aide le lecteur à imaginer la taille d'un sac ?", 'c' => ["حقيبة جديدة.", "حقيبة جميلة.", "حقيبة كبيرة تتسع لعدة كتب.", "حقيبة موجودة."], 'a' => 2, 'e' => "Citer la capacité et le nombre de livres donne une idée concrète de la taille."],
                    ['q' => "Quel adjectif convient à la mer par une journée calme ?", 'c' => ["مكسور", "مزدحم", "هادئ", "يابس"], 'a' => 2, 'e' => "Par temps calme, on peut dire que la mer est « هادئ »."],
                    ['q' => "Quelle phrase utilise bien les sens dans une description ?", 'c' => ["المطبخ هناك.", "المطبخ جميل.", "كانت رائحة الخبز الطازج تملأ المطبخ.", "الخبز شيء."], 'a' => 2, 'e' => "Citer l'odeur rend la description sensorielle et aide à imaginer la scène."],
                    ['q' => "Quelle phrase décrit le mieux une journée de pluie ?", 'c' => ["المطر موجود.", "كان اليوم يومًا.", "كانت قطرات المطر تضرب النافذة والشارع مبلل.", "الشارع فقط."], 'a' => 2, 'e' => "Elle utilise des détails observables : les gouttes sur la fenêtre et la rue mouillée."],
                ],
            ],
            [
                'title' => "Messages et notes courtes",
                'description' => "Écrire des messages amicaux et de simples notes, avec une bonne formule d'ouverture, des informations claires et une fin adaptée.",
                'questions' => [
                    ['q' => "Quel début convient à un court message à un ami ?", 'c' => ["إلى صديقي أمس.", "أحمد فقط.", "مرحبًا يا أحمد،", "صباحًا."], 'a' => 2, 'e' => "« مرحبًا يا أحمد » est une ouverture naturelle pour un message amical."],
                    ['q' => "Quelle phrase convient pour une simple demande à un ami ?", 'c' => ["أحضر شيء.", "دفتر غدًا فقط.", "هل يمكنك إحضار دفتري غدًا؟", "غدًا دفتر."], 'a' => 2, 'e' => "Elle est polie et claire : elle précise l'objet et le moment."],
                    ['q' => "Quelle formule convient pour terminer un message amical ?", 'c' => ["أين الكتاب؟", "لأن المدرسة.", "إلى اللقاء،", "لكن غدًا."], 'a' => 2, 'e' => "« إلى اللقاء » est une formule de fin naturelle."],
                    ['q' => "Tu veux prévenir un ami que tu auras dix minutes de retard. Quel message est le plus clair ?", 'c' => ["أنا عشر دقائق.", "تأخير.", "سأتأخر عشر دقائق، وأصل قريبًا.", "قريبًا فقط."], 'a' => 2, 'e' => "Il indique le retard, sa durée et rassure sur l'arrivée proche."],
                    ['q' => "Quelle note convient sur la porte d'une chambre ?", 'c' => ["هل أنت هنا؟", "غرفة مغلقة.", "أعود بعد عشر دقائق، شكرًا لانتظارك.", "لا أحد هنا."], 'a' => 2, 'e' => "Elle donne une information pratique : l'heure du retour de la personne."],
                    ['q' => "Quelle phrase convient pour inviter un ami à une activité ?", 'c' => ["اذهب أنت فقط.", "المكتبة بعد المدرسة.", "هل تريد أن نذهب إلى المكتبة بعد المدرسة؟", "نشاط غدًا."], 'a' => 2, 'e' => "Elle précise l'activité et invite l'ami de façon naturelle et polie."],
                    ['q' => "Pour s'excuser d'un retard, quelle phrase convient ?", 'c' => ["أنا الطريق.", "التأخر فقط.", "آسف على التأخر، فقد كنت في الطريق.", "لكن آسفًا فقط."], 'a' => 2, 'e' => "Elle présente des excuses et donne la raison en peu de mots."],
                    ['q' => "Quel message précise bien le rendez-vous ?", 'c' => ["المكتبة مساءً.", "غدًا فقط.", "نلتقي غدًا الساعة الخامسة مساءً أمام المكتبة.", "اللقاء هناك."], 'a' => 2, 'e' => "Il donne le jour, l'heure et le lieu : il est difficile de se tromper."],
                    ['q' => "Quelle expression convient pour remercier quelqu'un de son aide ?", 'c' => ["لماذا تساعدني؟", "مساعدتي شكرًا فقط.", "أنت هناك.", "شكرًا لك على مساعدتي."], 'a' => 3, 'e' => "Elle exprime clairement la reconnaissance."],
                    ['q' => "Qu'est-ce qui compte le plus dans un court message pratique ?", 'c' => ["qu'il cache la raison", "qu'il soit très long", "qu'il répète la même phrase", "qu'il soit clair et donne les informations importantes"], 'a' => 3, 'e' => "La clarté et les informations essentielles rendent le message utile."],
                ],
            ],
            [
                'title' => "Reformuler et simplifier les phrases",
                'description' => "Apprendre à réécrire une phrase de façon plus claire en gardant le sens essentiel.",
                'questions' => [
                    ['q' => "Quelle phrase a à peu près le même sens que « ذهب خالد إلى السوق صباحًا » ?", 'c' => ["ذهب السوق إلى خالد.", "عاد خالد من السوق مساءً.", "خالد لا يذهب إلى السوق.", "ذهب خالد صباحًا إلى السوق."], 'a' => 3, 'e' => "Seul l'ordre des mots a changé : le sens reste le même."],
                    ['q' => "Simplifie la phrase : « قام الطالب بالذهاب إلى المدرسة في وقت مبكر من الصباح. »", 'c' => ["الطالب قام بالمدرسة.", "الطالب المدرسة الصباح.", "ذهب المدرسة إلى الطالب.", "ذهب الطالب إلى المدرسة مبكرًا."], 'a' => 3, 'e' => "La nouvelle phrase est plus courte, plus naturelle et garde l'idée de départ."],
                    ['q' => "Quelle reformulation convient à « كانت السماء مملوءة بالغيوم » ?", 'c' => ["لم تكن هناك سماء.", "كانت السماء مشمسة.", "الغيوم كانت جافة.", "كانت السماء غائمة."], 'a' => 3, 'e' => "« غائمة » dit la même chose de façon plus simple."],
                    ['q' => "Raccourcis la phrase sans changer son sens : « أنا أحب كثيرًا مشاهدة الأفلام في نهاية الأسبوع. »", 'c' => ["أحب نهاية الأسبوع فقط.", "أنا الأفلام فقط.", "الأفلام في الأسبوع.", "أحب مشاهدة الأفلام في نهاية الأسبوع."], 'a' => 3, 'e' => "Retirer « كثيرًا » et « أنا » ne change pas l'idée de base et rend la phrase plus fluide."],
                    ['q' => "Quelle formulation est la plus claire ?", 'c' => ["معطفه لأن باردًا الجو.", "سامي معطفه الجو ارتدى باردًا.", "ارتدى لأن الجو معطفه سامي.", "لأن الجو كان باردًا، ارتدى سامي معطفه."], 'a' => 3, 'e' => "Elle présente la cause puis la conséquence dans un ordre compréhensible."],
                    ['q' => "Quelle formulation est la plus directe pour « الكتاب الذي قرأته أمس كان مفيدًا جدًا بالنسبة لي » ?", 'c' => ["لي كتاب أمس فقط.", "الكتاب أمس لي جدًا.", "قرأت مفيدًا الكتاب أمس.", "كان الكتاب الذي قرأته أمس مفيدًا جدًا لي."], 'a' => 3, 'e' => "Elle garde les mêmes informations avec un ordre des mots moins compliqué."],
                    ['q' => "Quelle reformulation garde le sens de « لم يأتِ خالد لأنه كان مريضًا » ?", 'c' => ["لم يأتِ خالد لأنه سعيد.", "جاء خالد لأنه مريض.", "خالد لم يمرض لكنه جاء.", "كان خالد مريضًا، لذلك لم يأتِ."], 'a' => 3, 'e' => "Elle conserve le lien de cause : la maladie explique l'absence."],
                    ['q' => "Rends la phrase plus précise : « ذهبت إلى مكان. »", 'c' => ["ذهبت.", "ذهبت إلى مكان جميل.", "ذهبت هناك.", "ذهبت إلى المكتبة بعد المدرسة."], 'a' => 3, 'e' => "Elle précise le lieu et le moment : le lecteur reçoit plus d'informations."],
                    ['q' => "Quelle phrase est la plus simple et la plus naturelle ?", 'c' => ["لأنني العربية أتعلم أريد.", "أريد التعلم العربية لأنني أحب العربية لها.", "العربية أريد لأن أحب.", "أريد أن أتعلم العربية لأنني أحبها."], 'a' => 3, 'e' => "Elle est courte, claire et garde le lien entre le désir et sa raison."],
                    ['q' => "Quand on reformule une phrase, que faut-il conserver ?", 'c' => ["toujours la même longueur", "chaque mot dans le même ordre", "les mêmes fautes", "le sens essentiel"], 'a' => 3, 'e' => "Reformuler, c'est exprimer la même idée autrement ou plus clairement."],
                ],
            ],
            [
                'title' => "Choisir les mots et relier les idées",
                'description' => "Choisir les mots de liaison qui rendent une phrase et un paragraphe plus précis et plus fluides.",
                'questions' => [
                    ['q' => "Complète : « أدرس كثيرًا ___ أريد النجاح. »", 'c' => ["ثم", "لكن", "أو", "لأنني"], 'a' => 3, 'e' => "« لأنني » introduit la raison de l'effort."],
                    ['q' => "Complète : « كان الطريق مزدحمًا، ___ تأخرنا. »", 'c' => ["مع أن", "لكن", "أو", "لذلك"], 'a' => 3, 'e' => "« لذلك » relie la cause (les embouteillages) à la conséquence (le retard)."],
                    ['q' => "Complète : « أريد أن أخرج، ___ الجو ممطر. »", 'c' => ["ثم", "لذلك", "لأن", "لكن"], 'a' => 3, 'e' => "« لكن » introduit une idée qui s'oppose au désir exprimé."],
                    ['q' => "Quel mot ajoute une idée du même genre ? « أحب القراءة، ___ أحب الكتابة. »", 'c' => ["لأن", "لكن", "لذلك", "كما أن"], 'a' => 3, 'e' => "« كما أن » ajoute une autre idée dans le même sens."],
                    ['q' => "Complète : « رتبت الغرفة، ___ نظفت المكتب. »", 'c' => ["لذلك", "لأن", "لكن", "ثم"], 'a' => 3, 'e' => "« ثم » présente une action qui vient après une autre."],
                    ['q' => "Quel mot relie deux possibilités ? « يمكنك أن تكتب بالقلم ___ بالحاسوب. »", 'c' => ["لأن", "لذلك", "لكن", "أو"], 'a' => 3, 'e' => "« أو » s'emploie pour proposer un choix entre deux possibilités."],
                    ['q' => "Complète : « أنا متعب، ___ سأكمل العمل. »", 'c' => ["ثم", "لذلك", "لأن", "لكن"], 'a' => 3, 'e' => "« لكن » marque le contraste entre la fatigue et la décision de continuer."],
                    ['q' => "Quelle phrase emploie « لأن » correctement ?", 'c' => ["أبقى في البيت لأن الجو ممطر.", "لأن الجو ممطر أبقى.", "أبقى لأن في البيت الجو.", "الجو لأن أبقى."], 'a' => 0, 'e' => "Elle relie correctement la décision à sa raison."],
                    ['q' => "Quel mot convient pour introduire la conclusion ?", 'c' => ["في النهاية", "لأن", "لكن", "أو"], 'a' => 0, 'e' => "« في النهاية » annonce le résumé ou le dernier point du texte."],
                    ['q' => "Quel groupe de mots rend un paragraphe plus cohérent ?", 'c' => ["أولًا، ثم، لذلك، في النهاية", "كتاب، كرسي، نافذة، لون", "جميل، كبير، أخضر، طويل", "أمس، صباحًا، مدرسة، قلم"], 'a' => 0, 'e' => "Le premier groupe contient des mots qui organisent les idées et marquent leurs liens."],
                ],
            ],
            [
                'title' => "Relire et améliorer un texte",
                'description' => "Apprendre à relire un court paragraphe pour repérer répétitions, phrases peu claires et informations manquantes.",
                'questions' => [
                    ['q' => "Un élève écrit : « أحب مدينتي. مدينتي جميلة. مدينتي كبيرة. مدينتي فيها حدائق. » Quel est le problème le plus visible ?", 'c' => ["la répétition du mot « مدينتي » dans chaque phrase", "il n'y a aucune idée", "toutes les phrases sont des questions", "le texte est trop long"], 'a' => 0, 'e' => "L'idée est là, mais répéter le même mot partout rend le texte lourd : il faut varier la formulation."],
                    ['q' => "Quelle modification rend la phrase plus précise : « ذهبت إلى هناك. » ?", 'c' => ["ذهبت إلى المكتبة بعد المدرسة.", "ذهبت هناك كثيرًا.", "ذهبت.", "أنا ذهبت."], 'a' => 0, 'e' => "Indiquer le lieu et le moment rend la phrase plus claire."],
                    ['q' => "Dans un paragraphe sur « les bienfaits du sommeil », quelle phrase faut-il supprimer ?", 'c' => ["أحب القمصان الزرقاء.", "النوم يساعد الجسم على الراحة.", "النوم الجيد يساعد على التركيز.", "الحصول على نوم كافٍ مفيد للصحة."], 'a' => 0, 'e' => "La phrase sur les chemises n'a aucun lien avec le sommeil."],
                    ['q' => "Quelle question est utile quand on relit un paragraphe ?", 'c' => ["chaque phrase sert-elle l'idée principale ?", "chaque mot est-il long ?", "peut-on supprimer tous les points ?", "peut-on répéter le titre ?"], 'a' => 0, 'e' => "Vérifier le lien de chaque phrase avec le sujet permet de retirer les détails hors sujet."],
                    ['q' => "Quelle modification améliore la phrase : « ذهب أحمد إلى السوق واشترى أحمد الخبز ثم عاد أحمد إلى البيت. » ?", 'c' => ["ذهب أحمد إلى السوق واشترى الخبز ثم عاد إلى البيت.", "ذهب أحمد أحمد أحمد إلى السوق.", "السوق أحمد الخبز البيت.", "ذهب إلى السوق أحمد أحمد."], 'a' => 0, 'e' => "Supprimer la répétition du nom rend la phrase plus naturelle sans perdre le sens."],
                    ['q' => "Un élève a écrit un bon paragraphe, mais toutes ses phrases sont très longues. Quelle correction est utile ?", 'c' => ["couper certaines phrases longues en phrases plus courtes", "ajouter encore des mots à chaque phrase", "supprimer tous les verbes", "répéter la même idée"], 'a' => 0, 'e' => "Couper les phrases longues aide à lire clairement et à suivre les idées."],
                    ['q' => "Qu'est-ce qui montre une bonne relecture de l'orthographe ?", 'c' => ["vérifier les mots et la ponctuation avant de rendre le texte", "laisser tous les mots tels qu'ils ont été écrits la première fois", "supprimer toutes les virgules", "changer de sujet à la fin"], 'a' => 0, 'e' => "La relecture finale permet de repérer les fautes d'orthographe et de ponctuation."],
                    ['q' => "Sara a écrit un avis sans raison : « أحب الدراسة. » Comment développer l'idée ?", 'c' => ["أحب الدراسة لأنها تساعدني على تعلم أشياء جديدة.", "أحب الدراسة الدراسة الدراسة.", "الدراسة.", "أنا في المدرسة."], 'a' => 0, 'e' => "Ajouter une raison rend l'avis plus clair et donne au lecteur quelque chose à comprendre."],
                    ['q' => "Quel début de paragraphe appelle une phrase d'explication ensuite ?", 'c' => ["الرياضة مهمة.", "وصلت الساعة الثامنة.", "وضعت القلم على الطاولة.", "اسمي علي."], 'a' => 0, 'e' => "« الرياضة مهمة » est une idée générale : il faut la soutenir avec des raisons ou des exemples."],
                    ['q' => "Une fois le texte terminé, quelle est la meilleure dernière étape ?", 'c' => ["relire tout le texte et le vérifier", "supprimer le titre tout de suite", "ajouter une idée sans rapport avec le sujet", "arrêter de lire"], 'a' => 0, 'e' => "Une dernière lecture permet de repérer des erreurs qu'on peut encore corriger avant de rendre le texte."],
                ],
            ],
            [
                'title' => "Mise en pratique : écrire de bout en bout",
                'description' => "Appliquer planification, rédaction, description, liens entre les idées et relecture dans de courtes situations réalistes.",
                'questions' => [
                    ['q' => "Tu veux écrire un paragraphe sur « ma journée d'école ». Quel plan simple t'aide ?", 'c' => ["le réveil, puis l'école, puis le retour et les devoirs à la maison", "des phrases au hasard sur la nourriture et les voitures", "un seul mot", "commencer par la conclusion sans sujet"], 'a' => 0, 'e' => "Ce plan suit les moments de la journée du début à la fin et aide à écrire un paragraphe cohérent."],
                    ['q' => "Tu veux décrire un ami avec respect. Quelles informations conviennent ?", 'c' => ["son prénom, quelques qualités et ce qu'il aime faire", "son numéro de téléphone et son mot de passe", "des informations privées sans rapport avec le sujet", "des mots au hasard"], 'a' => 0, 'e' => "Ces informations permettent de décrire la personne sans donner de détails privés ou déplacés."],
                    ['q' => "Quelle phrase peut servir de conclusion à un paragraphe sur l'apprentissage ?", 'c' => ["لذلك أرى أن التعلم عادة مفيدة تستحق الاستمرار.", "أما غرفتي فهي صغيرة.", "أين حقيبتي؟", "سأشتري خبزًا."], 'a' => 0, 'e' => "Elle revient au sujet de l'apprentissage et résume le point de vue présenté."],
                    ['q' => "Tu veux comparer la lecture et le téléphone pendant le temps libre. Quelle phrase peut ouvrir la comparaison ?", 'c' => ["أفضل القراءة أحيانًا، بينما يستخدم كثير من الناس الهاتف للترفيه.", "القراءة هاتف وقت.", "الهاتف جميل فقط.", "لا أعرف الموضوع."], 'a' => 0, 'e' => "Elle cite les deux éléments et emploie « بينما » pour amorcer une comparaison claire."],
                    ['q' => "Quelle phrase soutient l'opinion « le sport est utile » ?", 'c' => ["تساعد على النشاط وتحافظ على صحة الجسم.", "لدي حذاء جديد.", "السماء زرقاء.", "أحب الشتاء."], 'a' => 0, 'e' => "Elle donne deux raisons directement liées aux bienfaits du sport."],
                    ['q' => "Dans un paragraphe sur un voyage, qu'est-ce qui aide le lecteur à suivre les événements ?", 'c' => ["des mots comme أولًا، ثم، وبعد ذلك، وأخيرًا", "changer de temps sans raison à chaque phrase", "répéter un seul mot à chaque ligne", "supprimer les verbes"], 'a' => 0, 'e' => "Ces mots d'ordre montrent la suite des événements du début à la fin."],
                    ['q' => "Quelle phrase associe un avis et une raison ?", 'c' => ["أحب المكتبة لأنها هادئة ومليئة بالكتب.", "المكتبة كبيرة.", "ذهبت إلى المكتبة.", "الكتب على الرف."], 'a' => 0, 'e' => "« أحب » exprime l'avis et « لأنها » donne la raison."],
                    ['q' => "Un élève veut écrire une courte introduction sur sa ville. Quel choix convient ?", 'c' => ["مدينتي مكان أحبه، وفيها أماكن جميلة أستمتع بزيارتها.", "مدينتي.", "الأماكن جميلة فقط.", "غدًا سأذهب إلى السوق."], 'a' => 0, 'e' => "Elle donne le sujet et l'attitude de l'auteur, et ouvre la voie aux détails."],
                    ['q' => "Quelle modification rend le texte plus précis : « الحديقة جميلة جدًا » ?", 'c' => ["الحديقة واسعة وفيها أشجار كثيرة ومقاعد قرب البحيرة.", "الحديقة جميلة أكثر.", "الحديقة هناك.", "جميلة جدًا جدًا."], 'a' => 0, 'e' => "Des détails précis valent mieux que la répétition : ils montrent pourquoi le jardin est beau."],
                    ['q' => "Après avoir écrit un court texte, tu vois qu'il n'a pas de conclusion. Que fais-tu ?", 'c' => ["tu ajoutes une phrase qui résume l'idée ou clôt le sujet", "tu supprimes tout le paragraphe", "tu ajoutes un sujet différent", "tu répètes la première phrase dix fois"], 'a' => 0, 'e' => "Une conclusion donne au lecteur le sentiment que l'idée est complète."],
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
