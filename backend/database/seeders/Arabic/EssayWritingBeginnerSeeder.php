<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EssayWritingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'essay-writing')->firstOrFail();

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
                'title' => "L'introduction et l'idée directrice",
                'description' => "Apprendre à ouvrir un court essai en arabe : présenter le sujet et formuler une idée directrice claire.",
                'questions' => [
                    ['q' => "Le sujet est « فوائد القراءة ». Quelle phrase fait une bonne introduction ?", 'c' => ["أمس ذهبتُ إلى السوق مع أمي.", "القراءة غذاء العقل، فهي توسّع المعرفة وتنمّي التفكير.", "الكتاب موضوع على الطاولة.", "يوم الجمعة يوم عطلة."], 'a' => 1, 'e' => "La deuxième phrase présente le sujet et annonce l'idée que l'auteur va développer. Les autres n'ont aucun lien avec la lecture."],
                    ['q' => "Quel est le rôle principal de l'introduction dans un court essai ?", 'c' => ["donner tous les arguments en détail", "répéter le titre plusieurs fois", "présenter le sujet et préparer le lecteur à l'idée principale", "résumer la conclusion mot pour mot"], 'a' => 2, 'e' => "L'introduction amène le sujet et ouvre la voie à ce qui suit. Les détails viennent dans le développement."],
                    ['q' => "Sujet : « أهمية الرياضة للطلاب ». Quelle phrase peut servir d'idée directrice ?", 'c' => ["لديّ حذاء رياضي أزرق.", "شاهدتُ مباراة أمس.", "تبدأ المدرسة في الثامنة صباحًا.", "تساعد الرياضة الطلاب على النشاط والتركيز."], 'a' => 3, 'e' => "Seule la dernière phrase est assez générale pour structurer tout l'essai et peut être appuyée par des raisons et des exemples."],
                    ['q' => "Sujet : « حماية البيئة ». Quelle ouverture ne convient PAS ?", 'c' => ["البيئة جزء من حياتنا، وحمايتها مسؤولية مشتركة.", "تؤثر نظافة الهواء والشوارع في جودة حياتنا.", "اشتريتُ أمس قلمًا جديدًا لونه أزرق.", "يستطيع كل فرد أن يساهم في تقليل التلوث."], 'a' => 2, 'e' => "La phrase sur le stylo n'a aucun rapport avec l'environnement ; les trois autres introduisent bien le sujet."],
                    ['q' => "Qu'est-ce qui fait une bonne idée directrice pour un débutant ?", 'c' => ["elle est précise et peut être appuyée par des raisons ou des exemples", "elle couvre le plus de sujets possible", "elle reste vague pour surprendre le lecteur", "elle reprend simplement le titre"], 'a' => 0, 'e' => "Une idée précise est plus facile à organiser et à défendre qu'une idée large ou floue."],
                    ['q' => "Le titre est « التطوع وخدمة المجتمع ». Quelle idée directrice lui correspond le mieux ?", 'c' => ["أحب شرب القهوة في الصباح.", "يمنح التطوع الناس فرصة لمساعدة الآخرين وخدمة مجتمعهم.", "الطقس بارد هذا الأسبوع.", "عندي ثلاثة كتب في البيت."], 'a' => 1, 'e' => "La deuxième phrase traite directement du bénévolat et de son utilité pour la société."],
                    ['q' => "Pour un essai sur l'apprentissage autonome, quelle introduction est la plus naturelle ?", 'c' => ["التعلم تعلم.", "أنا كنتُ في المنزل أمس.", "ليس التعلم حكرًا على الفصل؛ فالإنسان يتعلم أيضًا بالقراءة والتجربة والبحث.", "الكتب جميلة وألوانها مختلفة."], 'a' => 2, 'e' => "La troisième pose une idée générale et ouvre le sujet. « التعلم تعلم » est une tautologie qui n'apprend rien au lecteur."],
                    ['q' => "L'introduction doit-elle annoncer tous les exemples de l'essai ?", 'c' => ["oui, sinon ce n'est pas une introduction", "non, elle présente le sujet et l'orientation générale", "oui, avec tous les détails", "non, elle doit rester sans contenu"], 'a' => 1, 'e' => "Les exemples sont réservés au développement. L'introduction se contente de poser le sujet et la direction."],
                    ['q' => "Quel titre correspond à l'idée « النوم الجيد يساعد الطلاب على التركيز » ?", 'c' => ["أهمية النوم الجيد للطلاب", "طعامي المفضل", "رحلتي إلى السوق", "أنواع السيارات"], 'a' => 0, 'e' => "Le premier titre reprend directement le sujet de l'idée."],
                    ['q' => "Un élève a écrit une introduction si longue qu'il lui reste peu de place pour les idées. Quelle correction est la meilleure ?", 'c' => ["ajouter encore des phrases", "supprimer le sujet", "raccourcir l'introduction pour passer plus vite aux idées principales", "répéter le titre à la fin"], 'a' => 2, 'e' => "L'introduction doit préparer le lecteur sans prendre la place du développement."],
                ],
            ],
            [
                'title' => "Le paragraphe de développement et les exemples",
                'description' => "Construire des paragraphes qui soutiennent l'idée principale avec des raisons et des exemples simples.",
                'questions' => [
                    ['q' => "L'idée est « القراءة توسّع المعرفة ». Quel exemple la soutient ?", 'c' => ["يقرأ الطالب عن بلدان وثقافات مختلفة.", "اشترى الطالب حقيبة جديدة.", "ذهب الطالب إلى المدرسة أمس.", "يفضّل الطالب اللون الأخضر."], 'a' => 0, 'e' => "Découvrir d'autres pays et cultures montre concrètement comment la lecture élargit les connaissances."],
                    ['q' => "Quelle est la fonction d'une phrase de soutien dans un essai ?", 'c' => ["changer complètement de sujet", "expliquer l'idée principale ou donner une raison ou un exemple", "remplacer le titre", "terminer l'essai"], 'a' => 1, 'e' => "Les phrases de soutien aident le lecteur à comprendre pourquoi l'idée est juste ou importante."],
                    ['q' => "Quelle phrase soutient l'idée « الرياضة مفيدة للطلاب » ?", 'c' => ["عندي كرة قديمة في البيت.", "الفصل واسع ومضيء.", "تزيد من نشاطهم وتقلل من الخمول.", "أحب مشاهدة الأفلام."], 'a' => 2, 'e' => "C'est la seule phrase qui donne une raison liée à l'utilité du sport."],
                    ['q' => "Vous écrivez « التطوع مفيد ». Que manque-t-il pour en faire un bon paragraphe ?", 'c' => ["un deuxième titre", "la répétition de la même phrase", "la suppression de l'idée principale", "une raison ou un exemple qui explique pourquoi c'est utile"], 'a' => 3, 'e' => "Une affirmation générale a besoin d'être expliquée, par exemple par les compétences que le bénévole acquiert."],
                    ['q' => "Quelle phrase soutient l'opinion « التخطيط يوفر الوقت » ?", 'c' => ["أحب الشاي في المساء.", "تحديد المهام مسبقًا يساعد على معرفة ما يجب إنجازه أولًا.", "غرفتي صغيرة.", "الأحد يوم عطلة."], 'a' => 1, 'e' => "Fixer les priorités à l'avance explique concrètement le gain de temps."],
                    ['q' => "Quel exemple convient le mieux à un essai sur « التعلم من الأخطاء » ?", 'c' => ["la couleur noire d'un cartable", "la bibliothèque est près de l'école", "un élève revoit son erreur après un contrôle et change sa façon de réviser", "il pleuvait ce jour-là"], 'a' => 2, 'e' => "Cet exemple montre une situation réelle où l'erreur devient une occasion d'apprendre."],
                    ['q' => "Dans un paragraphe sur les bienfaits de la lecture, quelle phrase est hors sujet ?", 'c' => ["القراءة تحسّن المفردات.", "الكتب تقدّم معلومات جديدة.", "القراءة تنمّي الخيال.", "أحب ارتداء الأحذية الرياضية."], 'a' => 3, 'e' => "La phrase sur les chaussures ne soutient pas l'idée du paragraphe."],
                    ['q' => "Quel ordre est le plus efficace dans un paragraphe de développement ?", 'c' => ["idée, explication, puis exemple", "exemple sans idée, puis raison", "conclusion avant l'idée", "autre sujet puis ancien exemple"], 'a' => 0, 'e' => "On pose l'idée, on l'explique, puis on l'illustre par un exemple."],
                    ['q' => "Pourquoi un exemple précis vaut-il mieux qu'une affirmation générale comme « الرياضة مفيدة » ?", 'c' => ["parce qu'il raccourcit toujours l'essai", "parce qu'il remplace l'idée principale", "parce qu'il montre au lecteur la réalité de l'idée dans une situation concrète", "parce qu'il évite d'avoir une idée"], 'a' => 2, 'e' => "Un exemple transforme une idée abstraite en image que le lecteur comprend facilement."],
                    ['q' => "Quelle phrase sert à introduire un exemple ?", 'c' => ["في النهاية انتهى الموضوع.", "على سبيل المثال، يمكن للطالب أن يخطط لمهامه قبل بدء الدراسة.", "لكن من غير سبب.", "أولًا، وهذه هي الخاتمة."], 'a' => 1, 'e' => "« على سبيل المثال » annonce clairement qu'un exemple va suivre."],
                ],
            ],
            [
                'title' => "Raisons et arguments simples",
                'description' => "Défendre une opinion avec des raisons logiques et des exemples accessibles.",
                'questions' => [
                    ['q' => "Quelle phrase soutient le mieux l'opinion « من المفيد القراءة يوميًا » ?", 'c' => ["لأن القراءة اليومية تتيح تعلّم كلمات وأفكار جديدة باستمرار.", "لأنني قلت ذلك.", "لأن الكتب موجودة في كل مكان.", "لأن يومي طويل."], 'a' => 0, 'e' => "Seule la première donne une vraie raison ; les autres répètent l'opinion ou changent de sujet."],
                    ['q' => "Sujet : « هل يجب على الطلاب ممارسة الرياضة؟ ». Quel argument convient ?", 'c' => ["لديّ حذاء رياضي.", "النشاط البدني يساعد على الحفاظ على الصحة والحيوية.", "الملعب لونه أخضر.", "أحب يوم السبت."], 'a' => 1, 'e' => "L'argument lie directement le sport à la santé, et peut être développé par un exemple."],
                    ['q' => "Quelle question aide l'auteur à développer son argument ?", 'c' => ["De quelle couleur est mon stylo ?", "Quand dois-je finir mon titre ?", "Pourquoi est-ce que je pense que cette idée est juste ?", "Combien de mots y a-t-il dans mon prénom ?"], 'a' => 2, 'e' => "Se demander « pourquoi » pousse à justifier son opinion au lieu de la répéter."],
                    ['q' => "Quelle raison convient à l'opinion « الادخار عادة جيدة للطلاب » ?", 'c' => ["المال لونه مختلف.", "الحقيبة كبيرة.", "الدرس يبدأ صباحًا.", "يساعدهم على الاستعداد لشراء ما يحتاجون إليه."], 'a' => 3, 'e' => "La raison donne un avantage pratique de l'épargne, qu'on peut ensuite illustrer."],
                    ['q' => "Quelle phrase contient à la fois une affirmation et sa raison ?", 'c' => ["القراءة مفيدة. صباح الخير.", "القراءة في المكتبة.", "القراءة مفيدة لأنها توسّع المفردات.", "الكتب على الرف."], 'a' => 2, 'e' => "Le mot « لأنها » relie l'affirmation à sa justification."],
                    ['q' => "Qu'est-ce qui rend un argument plus convaincant pour un débutant ?", 'c' => ["de grands mots sans explication", "un exemple clair ou une situation réelle", "répéter la même opinion", "changer de sujet à chaque ligne"], 'a' => 1, 'e' => "Un exemple concret donne un appui à l'argument."],
                    ['q' => "Quel argument convient à un essai sur l'usage du téléphone pendant les révisions ?", 'c' => ["كثرة الإشعارات قد تشتّت انتباه الطالب.", "الهاتف جميل الشكل.", "المدرسة فيها نوافذ كثيرة.", "أحب الاستماع إلى الموسيقى."], 'a' => 0, 'e' => "La distraction causée par les notifications est directement liée au sujet."],
                    ['q' => "Vous donnez une opinion sans aucune raison. Quel est le problème ?", 'c' => ["l'essai devient automatiquement plus long", "la conclusion devient introduction", "le lecteur ne comprend pas pourquoi vous pensez cela", "il n'y a plus besoin de titre"], 'a' => 2, 'e' => "La raison montre la logique de l'auteur et permet de discuter l'opinion."],
                    ['q' => "Sur le sujet « التعلم عبر الإنترنت », quelle phrase présente un contre-argument simple ?", 'c' => ["الحاسوب جهاز إلكتروني.", "الإنترنت متوفر في المنزل.", "المدرسة لها أبواب.", "قد يجد بعض الطلاب صعوبة في التركيز خارج القسم."], 'a' => 3, 'e' => "Elle présente un autre point de vue que l'auteur pourra discuter ou réfuter."],
                    ['q' => "Comment traiter une opinion différente de la vôtre dans un essai simple ?", 'c' => ["la ridiculiser", "l'ignorer toujours", "la mentionner avec respect puis expliquer pourquoi vous préférez votre position", "répéter votre opinion sans expliquer"], 'a' => 2, 'e' => "Présenter l'autre avis avec respect rend l'essai plus équilibré et plus crédible."],
                ],
            ],
            [
                'title' => "Cohérence et connecteurs logiques",
                'description' => "Utiliser des expressions de transition pour ordonner les idées et relier raisons, exemples et conséquences.",
                'questions' => [
                    ['q' => "Quelle expression ajoute une deuxième idée du même genre ?", 'c' => ["بالإضافة إلى ذلك", "في المقابل", "في النهاية", "لذلك"], 'a' => 0, 'e' => "« بالإضافة إلى ذلك » ajoute une idée dans la même direction."],
                    ['q' => "Complétez : « القراءة تزيد المعرفة؛ ___ تساعد على تحسين المفردات. »", 'c' => ["لكنها", "كما أنها", "لذلك انتهى", "أو لا"], 'a' => 1, 'e' => "« كما أنها » relie deux bienfaits qui vont dans le même sens."],
                    ['q' => "Quelle expression introduit une conséquence ?", 'c' => ["من جهة أخرى", "على سبيل المثال", "لذلك", "أولًا"], 'a' => 2, 'e' => "« لذلك » (c'est pourquoi) relie la cause à sa conséquence."],
                    ['q' => "Quelle expression introduit un exemple ?", 'c' => ["في النهاية", "مع ذلك", "أخيرًا", "على سبيل المثال"], 'a' => 3, 'e' => "« على سبيل المثال » annonce un exemple qui illustre l'idée précédente."],
                    ['q' => "Quel connecteur permet de passer à un autre point de vue ?", 'c' => ["من ناحية أخرى", "لذلك", "لأن", "أولًا"], 'a' => 0, 'e' => "« من ناحية أخرى » (d'un autre côté) ouvre un autre aspect du sujet."],
                    ['q' => "Quelle expression convient pour commencer une conclusion ?", 'c' => ["مثلًا", "في النهاية", "لأن", "بعد ذلك"], 'a' => 1, 'e' => "« في النهاية » signale que l'auteur approche de son bilan."],
                    ['q' => "Pourquoi un essai a-t-il besoin de connecteurs entre les idées ?", 'c' => ["pour que chaque phrase devienne un sujet indépendant", "pour supprimer l'introduction", "pour que le lecteur voie comment les phrases et paragraphes sont liés", "uniquement pour allonger le texte"], 'a' => 2, 'e' => "Les connecteurs montrent la logique du texte et guident le lecteur."],
                    ['q' => "Choisissez la transition : « الرياضة تساعد على النشاط. ___، يمكن أن تكون وسيلة للترفيه. »", 'c' => ["لذلك", "لكن", "أخيرًا", "بالإضافة إلى ذلك"], 'a' => 3, 'e' => "La deuxième phrase ajoute un autre bienfait : il faut une expression d'addition."],
                    ['q' => "Quel enchaînement de transitions est logique pour un court essai ?", 'c' => ["أولًا، ثم، بالإضافة إلى ذلك، في النهاية", "في النهاية، أولًا، ثم، لذلك", "لكن، في النهاية، أولًا، ثم", "مثال، خاتمة، مقدمة، عنوان"], 'a' => 0, 'e' => "Cet ordre suit le déroulement naturel : début, ajouts, puis conclusion."],
                    ['q' => "Que laisse attendre l'expression « ومع ذلك » ?", 'c' => ["une simple énumération", "une opposition ou une surprise par rapport à ce qui précède", "une cause directe", "la fin de l'essai"], 'a' => 1, 'e' => "« ومع ذلك » (pourtant, malgré cela) introduit un contraste."],
                ],
            ],
            [
                'title' => "La conclusion et la fin de l'essai",
                'description' => "Résumer l'essai et refermer l'idée sans ouvrir un nouveau sujet dans la dernière phrase.",
                'questions' => [
                    ['q' => "Quel est le rôle principal de la conclusion ?", 'c' => ["résumer l'idée ou laisser une impression finale claire", "ajouter un sujet complètement différent", "reprendre tous les exemples en détail", "commencer un autre essai"], 'a' => 0, 'e' => "La conclusion referme l'essai et rappelle l'essentiel."],
                    ['q' => "Quelle phrase peut conclure un essai sur la lecture ?", 'c' => ["أما الرياضة فهي أفضل في الشتاء.", "غدًا سأشتري حذاءً جديدًا.", "لهذه الأسباب، تبقى القراءة عادة مفيدة تستحق أن نحافظ عليها.", "الكتاب لونه أزرق."], 'a' => 2, 'e' => "Elle résume l'idée et reste dans le sujet de la lecture."],
                    ['q' => "La conclusion doit-elle présenter un grand argument nouveau ?", 'c' => ["oui, sinon elle est toujours fausse", "oui, et il faut changer de sujet", "non, il vaut mieux résumer ce qui précède ou refermer l'idée", "oui, elle doit être plus longue que l'essai"], 'a' => 2, 'e' => "Un argument essentiel non discuté auparavant n'a pas sa place dans la conclusion."],
                    ['q' => "Quelle fin convient à un essai sur les bienfaits du sport ?", 'c' => ["وبالمناسبة، أحب القهوة.", "غدًا سأذهب إلى السوق.", "اسم مدرستي هو...", "وفي النهاية، تجعل الرياضة المنتظمة حياتنا أكثر نشاطًا وصحة."], 'a' => 3, 'e' => "Elle revient au sport et donne un bilan clair."],
                    ['q' => "Que doit faire une bonne conclusion pour le lecteur ?", 'c' => ["lui faire oublier le sujet", "lui laisser une idée claire de ce que l'auteur voulait dire", "lui donner des informations contradictoires", "ouvrir cinq nouveaux sujets"], 'a' => 1, 'e' => "Une bonne conclusion fait comprendre le message final de l'essai."],
                    ['q' => "Quelle phrase convient à une conclusion ?", 'c' => ["أولًا، سأشرح السبب.", "على سبيل المثال، أخطط ليومي.", "لماذا نخطط أصلًا؟", "لذلك يمكننا القول إن التخطيط يساعد على استغلال الوقت بشكل أفضل."], 'a' => 3, 'e' => "« لذلك يمكننا القول » annonce un bilan fondé sur ce qui a été dit."],
                    ['q' => "Un élève termine ainsi : « وأخيرًا، أريد أن أضيف موضوعًا جديدًا عن السيارات. » Quel est le problème ?", 'c' => ["la conclusion est trop courte", "il faut supprimer le titre", "la conclusion ouvre un nouveau sujet au lieu de terminer l'essai", "les voitures ne sont pas un sujet"], 'a' => 2, 'e' => "La conclusion doit refermer le sujet traité et non en commencer un autre."],
                    ['q' => "Quelle phrase résume une idée sans répéter tous les détails ?", 'c' => ["القراءة مفيدة. القراءة مفيدة. القراءة مفيدة.", "بوجه عام، تساعد القراءة على التعلّم وتوسيع المعرفة.", "أولًا قرأتُ صفحة ثم صفحة ثم صفحة...", "سأنتقل الآن إلى الحديث عن الرياضة."], 'a' => 1, 'e' => "La deuxième résume l'idée en une phrase générale."],
                    ['q' => "Quand une conclusion courte est-elle adaptée ?", 'c' => ["quand il n'y a pas eu d'introduction", "quand on veut changer de sujet", "toujours, quel que soit l'essai", "quand elle a résumé l'idée clairement sans avoir besoin de s'étendre"], 'a' => 3, 'e' => "La longueur dépend de l'essai ; l'important est que la conclusion remplisse sa fonction."],
                    ['q' => "Quelle structure convient à un essai simple ?", 'c' => ["conclusion, introduction, nouveau titre, exemple", "exemples seulement, puis introduction", "introduction, idées de soutien, exemples, conclusion", "conclusion puis encore une conclusion"], 'a' => 2, 'e' => "C'est la structure de base qui aide le lecteur à suivre l'essai."],
                ],
            ],
            [
                'title' => "L'essai descriptif et l'essai argumentatif",
                'description' => "Appliquer les principes de l'essai à des sujets descriptifs et argumentatifs simples.",
                'questions' => [
                    ['q' => "Dans un essai descriptif sur un jardin, quels détails sont les plus utiles ?", 'c' => ["les couleurs, les sons, les lieux et les objets que l'auteur observe", "des opinions sans rapport avec le jardin", "une longue liste de chiffres sans importance", "un nouveau sujet sur les voyages"], 'a' => 0, 'e' => "L'essai descriptif aide à imaginer un lieu grâce aux sens et à l'observation."],
                    ['q' => "Quel est l'élément central d'un essai argumentatif sur la lecture ?", 'c' => ["une liste de noms", "une opinion claire soutenue par des raisons et des exemples", "la couleur d'un livre", "une phrase sans prise de position"], 'a' => 1, 'e' => "L'essai argumentatif repose sur une position défendue par des arguments."],
                    ['q' => "Quelle phrase descriptive est la plus forte ?", 'c' => ["الحديقة جميلة.", "الحديقة هناك.", "كانت الحديقة واسعة، وفي وسطها شجرة كبيرة تتساقط حولها أوراق صفراء.", "حديقة فقط."], 'a' => 2, 'e' => "Elle contient des détails visuels précis qui permettent d'imaginer le lieu."],
                    ['q' => "Quelle phrase argumentative convient au sujet « هل الادخار مفيد؟ » ?", 'c' => ["المال شيء.", "أحب محفظتي الجديدة.", "الدكان قريب من البيت.", "الادخار يساعد على الاستعداد لهدف مالي بدل إنفاق كل المال فورًا."], 'a' => 3, 'e' => "C'est une opinion discutable accompagnée d'une raison logique."],
                    ['q' => "Pour décrire une personne, que vaut-il mieux faire plutôt que de dire seulement « جيد » ?", 'c' => ["répéter « جيد » plusieurs fois", "changer de sujet", "donner un comportement qui montre cette qualité", "mentionner seulement la couleur de ses chaussures"], 'a' => 2, 'e' => "Un comportement concret rend la qualité visible au lieu de la laisser abstraite."],
                    ['q' => "Quel paragraphe convient à un essai argumentatif ?", 'c' => ["ذهبتُ إلى المكتبة أمس. كان الطقس جميلًا. أحب اللون الأزرق.", "أعتقد أن القراءة اليومية مفيدة؛ فهي تزيد المفردات، ويلاحظ الطالب ذلك عند الكتابة والكلام.", "الكتاب على الرف. الكرسي قرب النافذة.", "أولًا لون، ثم حقيبة، ثم شارع."], 'a' => 1, 'e' => "Il contient une position, une raison et un début d'exemple."],
                    ['q' => "Qu'est-ce qui aide un essai descriptif à éviter les répétitions ?", 'c' => ["utiliser des détails variés issus de plusieurs sens", "répéter « جميل » dans chaque phrase", "garder une seule idée sans détails", "supprimer toutes les descriptions"], 'a' => 0, 'e' => "Varier vue, ouïe, odorat rend la description plus riche."],
                    ['q' => "Quel titre convient à un essai sur « لماذا من المفيد القراءة كل يوم؟ » ?", 'c' => ["رحلتي إلى السوق", "وصف غرفتي", "أنواع الطعام", "فوائد القراءة اليومية"], 'a' => 3, 'e' => "Le titre reprend la question traitée."],
                    ['q' => "Après avoir présenté un avis contraire dans un essai argumentatif, quelle étape est utile ?", 'c' => ["s'en moquer", "supprimer votre propre opinion", "le discuter calmement et y répondre par une raison ou une preuve", "changer immédiatement de sujet"], 'a' => 2, 'e' => "Une réponse argumentée rend l'essai plus équilibré."],
                    ['q' => "Quelle est la meilleure façon de finir un essai de débutant sur l'importance de la lecture ?", 'c' => ["ouvrir un nouveau sujet sur les voyages", "résumer l'idée et rappeler l'utilité de la lecture dans la vie quotidienne", "citer un exemple jamais utilisé sans l'expliquer", "répéter le titre cinq fois"], 'a' => 1, 'e' => "La conclusion referme le sujet et rappelle le message principal."],
                ],
            ],
            [
                'title' => "Révision générale : planifier et structurer",
                'description' => "Revoir la planification, les connecteurs, les exemples et la conclusion d'un court essai en arabe.",
                'questions' => [
                    ['q' => "Avant d'écrire un essai sur « فوائد تنظيم الوقت », quelle première étape est utile ?", 'c' => ["écrire la conclusion avant de connaître le sujet", "choisir des mots au hasard", "définir l'idée et les aspects qu'on va traiter", "ajouter des exemples sans idée"], 'a' => 2, 'e' => "Définir l'idée et ses axes permet de construire un essai organisé."],
                    ['q' => "L'idée est « تنظيم الوقت يقلل التأجيل ». Quel exemple convient ?", 'c' => ["أفضل لون للدفتر هو الأزرق.", "المدرسة قريبة من البيت.", "الطاولة واسعة.", "تحديد موعد معيّن للمهمة يساعد الطالب على البدء بدل تأجيلها."], 'a' => 3, 'e' => "L'exemple montre concrètement comment l'organisation limite la procrastination."],
                    ['q' => "Quel titre convient à un essai sur l'effet de la lecture sur la langue ?", 'c' => ["رحلة إلى البحر", "ملابسي المفضلة", "يوم الجمعة", "القراءة وتطوير اللغة"], 'a' => 3, 'e' => "Il annonce le lien entre lecture et progrès linguistique."],
                    ['q' => "Un élève a écrit un paragraphe plein d'idées sans ordre. Quelle correction est la meilleure ?", 'c' => ["ajouter d'autres idées au hasard", "regrouper les idées proches et les ordonner logiquement", "supprimer tout le paragraphe", "répéter les phrases existantes"], 'a' => 1, 'e' => "Regrouper et ordonner les idées rend l'essai plus facile à comprendre."],
                    ['q' => "Quelle expression relie une cause à sa conséquence ?", 'c' => ["لذلك", "مثلًا", "في النهاية", "من ناحية أخرى"], 'a' => 0, 'e' => "« لذلك » introduit la conséquence de ce qui précède."],
                    ['q' => "Quelle phrase soutient bien l'opinion « الكتابة اليومية مفيدة » ?", 'c' => ["عندي قلم جديد.", "النافذة مفتوحة.", "تدرّب على ترتيب الأفكار واختيار الكلمات.", "الدفتر أخضر."], 'a' => 2, 'e' => "Elle explique un bienfait réel de l'écriture quotidienne."],
                    ['q' => "À la relecture, vous constatez qu'un paragraphe n'a pas de lien avec le titre. Que faites-vous ?", 'c' => ["vous le gardez toujours", "vous le supprimez ou le réécrivez pour qu'il serve le sujet", "vous ajoutez deux autres paragraphes hors sujet", "vous changez seulement la ponctuation"], 'a' => 1, 'e' => "Chaque paragraphe doit servir le sujet de l'essai."],
                    ['q' => "Quelle conclusion convient à un essai sur le travail d'équipe ?", 'c' => ["أما هوايتي المفضلة فهي الرسم.", "سأبدأ الآن مقدمة جديدة.", "الجو اليوم جميل.", "وفي النهاية، يساعد التعاون على إنجاز الأعمال والاستفادة من مهارات كل فرد."], 'a' => 3, 'e' => "Elle résume l'intérêt du travail d'équipe et clôt le sujet."],
                    ['q' => "Qu'est-ce qui rend un essai plus convaincant ?", 'c' => ["lier chaque opinion à une raison ou un exemple clair", "utiliser des mots difficiles sans les expliquer", "répéter dix fois la même opinion", "écrire une introduction très longue"], 'a' => 0, 'e' => "Raisons et exemples donnent un appui concret aux opinions."],
                    ['q' => "Quelle liste de contrôle est la plus adaptée avant de rendre un essai ?", 'c' => ["Le nombre de phrases est-il grand ?", "Le sujet est-il clair ? Les idées sont-elles ordonnées ? Y a-t-il des exemples ? La conclusion convient-elle ?", "Tous les mots sont-ils difficiles ?", "Peut-on supprimer l'introduction et la conclusion ?"], 'a' => 1, 'e' => "Ces questions couvrent les éléments essentiels : sujet, organisation, appui et conclusion."],
                ],
            ],
            [
                'title' => "Rédiger un court essai pas à pas",
                'description' => "Appliquer les étapes de planification, d'écriture et de relecture à un court essai arabe organisé.",
                'questions' => [
                    ['q' => "Quelle est la première étape pratique avant d'écrire un court essai ?", 'c' => ["écrire la conclusion avant de connaître le sujet", "assembler des phrases au hasard", "répéter le titre plusieurs fois", "déterminer le sujet et l'idée qu'on veut discuter"], 'a' => 3, 'e' => "Choisir le sujet et l'idée donne une direction à tout l'essai."],
                    ['q' => "Après avoir choisi le sujet, que peut faire l'auteur avant le premier paragraphe ?", 'c' => ["supprimer tous les exemples", "ordonner les idées principales qu'il va expliquer", "changer de sujet", "écrire trois fois la conclusion"], 'a' => 1, 'e' => "Un plan simple aide à construire introduction, développement et conclusion."],
                    ['q' => "Quel plan convient à un essai sur « فوائد القراءة » ?", 'c' => ["introduction sur la lecture, ses bienfaits, un exemple, puis conclusion", "conclusion, nouveau sujet, puis exemple sans introduction", "description d'une voiture puis un mot sur la lecture à la dernière ligne", "mots isolés sans ordre"], 'a' => 0, 'e' => "Ce plan donne une structure claire : sujet, discussion, bilan."],
                    ['q' => "Où place-t-on généralement la raison qui explique votre opinion ?", 'c' => ["seulement avant le titre", "n'importe où sans lien avec l'opinion", "dans chaque phrase même quand ça ne convient pas", "dans le paragraphe qui soutient l'idée principale"], 'a' => 3, 'e' => "La raison est utile quand elle accompagne l'idée qu'elle explique."],
                    ['q' => "Quelle question faut-il se poser quand on utilise un exemple ?", 'c' => ["L'exemple est-il plus long que l'introduction ?", "L'exemple contient-il des mots difficiles ?", "L'exemple éclaire-t-il l'idée que je discute ?", "Peut-on le mettre dans un autre sujet ?"], 'a' => 2, 'e' => "Un exemple vaut par son lien direct avec l'idée qu'il illustre."],
                    ['q' => "Un élève écrit une introduction puis passe à une idée sans rapport avec le sujet. Quel est le défaut ?", 'c' => ["trop de signes de ponctuation", "un manque de cohérence : l'essai sort du sujet", "une conclusion trop courte", "une idée trop claire"], 'a' => 1, 'e' => "Quand un paragraphe n'est pas relié au sujet, l'essai perd son unité."],
                    ['q' => "Quelle conclusion convient à un essai sur la gestion du temps ?", 'c' => ["وفي النهاية، يساعد تنظيم الوقت على إنجاز المهام بهدوء والاستفادة من اليوم.", "أما هوايتي فهي الطبخ.", "غدًا سأزور السوق.", "سأبدأ الآن مقالًا عن السيارات."], 'a' => 0, 'e' => "La première résume le sujet sans ouvrir de nouvelle idée."],
                    ['q' => "Une fois le brouillon terminé, quelle étape améliore le plus l'essai ?", 'c' => ["changer complètement de sujet sans raison", "supprimer tous les paragraphes", "ajouter des phrases au hasard", "le relire pour vérifier clarté, ordre et orthographe"], 'a' => 3, 'e' => "La relecture révèle les erreurs et améliore la cohérence."],
                    ['q' => "Quelle question vérifie que l'essai reste dans le sujet ?", 'c' => ["Toutes mes phrases sont-elles très longues ?", "Ai-je utilisé tous les mots que je connais ?", "Chaque paragraphe sert-il le titre et l'idée principale ?", "La conclusion est-elle toujours plus longue que l'introduction ?"], 'a' => 2, 'e' => "Vérifier le lien de chaque paragraphe avec le titre évite les digressions."],
                    ['q' => "Quelle est la marque d'un essai bien organisé pour un débutant ?", 'c' => ["il contient le plus de mots possible", "un début clair, des idées reliées et une conclusion adaptée", "il répète la même idée dans chaque paragraphe", "il passe d'un sujet à l'autre sans lien"], 'a' => 1, 'e' => "L'organisation tient à la clarté du début, à l'enchaînement des idées et à la conclusion, pas à la longueur."],
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
