<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class LiteraryAnalysisBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'literary-analysis')->firstOrFail();

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
                'title' => "Idée et thème",
                'description' => "Distinguer le sujet du thème et construire une interprétation appuyée sur le texte.",
                'questions' => [
                    ['q' => "Quel est l'objectif principal de l'analyse littéraire ?", 'c' => ["expliquer comment les éléments du texte produisent du sens ensemble", "raconter à nouveau le texte", "retenir les noms des personnages", "donner un avis personnel sans le justifier"], 'a' => 0, 'e' => "Analyser, c'est expliquer le rôle des éléments du texte et leur lien avec le sens, pas seulement répéter les événements."],
                    ['q' => "Laquelle de ces phrases relève de l'analyse plutôt que de l'impression personnelle ?", 'c' => ["أحببت القصة لأنها جميلة.", "أثّرت فيّ النهاية كثيرًا.", "تكرار صور المطر يعزّز إحساس الشخصية بالعزلة.", "أعجبتني هذه الشخصية أكثر من غيرها."], 'a' => 2, 'e' => "Seule la phrase sur la répétition de la pluie relie un procédé du texte à un effet de sens qu'on peut vérifier."],
                    ['q' => "Lequel de ces choix est un sujet général plutôt qu'un thème ?", 'c' => ["الصداقة", "الصداقة الحقيقية تظهر وقت الشدة", "الثقة تحتاج إلى أفعال", "الخوف قد يخفي الحقيقة"], 'a' => 0, 'e' => "Le sujet est un domaine général (« l'amitié ») ; le thème est une idée complète sur ce sujet."],
                    ['q' => "Quel est le meilleur indice qu'un personnage a changé ?", 'c' => ["la couleur de la couverture", "le nom de l'auteur", "le nombre de chapitres", "la comparaison de son comportement et de ses choix au début et à la fin"], 'a' => 3, 'e' => "Comparer les actes au début et à la fin du texte montre le changement."],
                    ['q' => "Pourquoi ne suffit-il pas de dire « الوحدة ثيمة النص » ?", 'c' => ["parce qu'il faut expliquer ce que le texte dit de la solitude", "parce que le mot « solitude » est interdit", "parce que les thèmes ne concernent jamais les sentiments", "parce qu'un thème doit toujours être un titre"], 'a' => 0, 'e' => "Nommer le sujet n'indique pas l'idée que le texte développe à son propos."],
                    ['q' => "Pour un récit sur le sens des responsabilités, quelle formulation se rapproche le plus d'un thème ?", 'c' => ["تحمّل المسؤولية يعني الاعتراف بالخطأ وتقبّل نتائجه", "المسؤولية", "الشاب", "المدرسة"], 'a' => 0, 'e' => "Un thème s'exprime par une phrase qui propose une idée sur l'expérience, pas par un seul mot."],
                    ['q' => "Un personnage ment à plusieurs reprises et les conséquences apparaissent chaque fois. Quel thème est le mieux appuyé ?", 'c' => ["les mensonges peuvent créer des conséquences dont il est difficile de s'échapper", "tout le monde ment toujours", "la météo est l'élément le plus important", "l'auteur n'aime pas ses personnages"], 'a' => 0, 'e' => "La répétition de l'acte et de ses suites fournit des indices directs pour cette idée."],
                    ['q' => "Pour comparer deux interprétations d'un thème, quel critère est le plus important ?", 'c' => ["celle qui est la plus longue", "celle dont le vocabulaire est le plus difficile", "celle qui plaît le plus au lecteur", "celle qui s'appuie le plus clairement sur des détails du texte"], 'a' => 3, 'e' => "La force d'une interprétation dépend de ses preuves, pas de sa longueur ni de son style."],
                    ['q' => "Quelle question aide à repérer un thème possible ?", 'c' => ["Quelle est l'idée qui revient dans les actions et les événements ?", "Combien de lettres le nom du héros compte-t-il ?", "Quelle est la couleur de la page ?", "Combien y a-t-il de signes de ponctuation ?"], 'a' => 0, 'e' => "Un thème se dégage d'une idée qui revient, non d'un détail de forme isolé."],
                    ['q' => "Aucun passage du texte n'appuie une interprétation pourtant séduisante. Quel est le problème ?", 'c' => ["le texte est devenu plus court", "l'analyse est devenue plus précise", "l'interprétation n'est pas suffisamment étayée", "il n'y a aucun problème"], 'a' => 2, 'e' => "Une interprétation littéraire a besoin d'indices dans le texte pour convaincre et pouvoir être discutée."],
                ],
            ],
            [
                'title' => "L'analyse des personnages",
                'description' => "Comprendre les motivations, les traits, l'évolution et les conflits intérieurs des personnages.",
                'questions' => [
                    ['q' => "Quelle preuve est généralement la plus solide pour établir un trait de caractère ?", 'c' => ["le nombre de pages du chapitre", "la forme de son prénom", "l'impression du lecteur seule", "ses actes et décisions répétés"], 'a' => 3, 'e' => "Un comportement qui se répète révèle un trait plus sûrement qu'un jugement isolé."],
                    ['q' => "Que signifie la « motivation » d'un personnage ?", 'c' => ["la raison ou le désir qui explique son comportement", "le nom du lieu où il vit", "le nombre de ses apparitions", "l'époque d'écriture du livre"], 'a' => 0, 'e' => "La motivation répond à la question : pourquoi agit-il ainsi ?"],
                    ['q' => "Un personnage aide les autres en secret sans chercher les compliments. Quel trait lui convient le mieux ?", 'c' => ["الغرور", "اللامبالاة", "الإيثار", "التردد"], 'a' => 2, 'e' => "Aider sans attendre d'éloges correspond à l'altruisme (الإيثار)."],
                    ['q' => "Un personnage dit une chose de lui-même puis fait le contraire. Que peut-on analyser ?", 'c' => ["l'inutilité du dialogue", "l'oubli de l'auteur", "le contraste entre l'image qu'il a de lui et son comportement réel", "le fait que le lieu devient narrateur"], 'a' => 2, 'e' => "Un décalage entre parole et acte peut révéler un manque de lucidité ou un conflit intérieur."],
                    ['q' => "Un personnage craint l'échec et évite d'essayer, puis finit par tenter et apprend. Qu'observe-t-on ?", 'c' => ["un conflit intérieur et une évolution du personnage", "un personnage qui ne change pas", "l'absence d'intrigue", "un lieu qui devient le héros"], 'a' => 0, 'e' => "La peur est un conflit intérieur ; l'essai qui suit marque l'évolution."],
                    ['q' => "Comment éviter de juger trop vite un personnage ?", 'c' => ["en cherchant plusieurs scènes et indices avant de fixer un trait", "en se fiant à la première phrase", "en choisissant le trait qui sonne le mieux", "en ignorant la fin du texte"], 'a' => 0, 'e' => "Un comportement répété rend la conclusion plus solide qu'un seul extrait."],
                    ['q' => "Un personnage change d'avis après avoir écouté l'expérience d'un autre. Que cela peut-il montrer ?", 'c' => ["qu'il apprend ou revoit sa position", "qu'il n'est pas un personnage réel", "que le dialogue est inutile", "que le temps s'est arrêté"], 'a' => 0, 'e' => "Le changement après l'écoute montre l'influence d'une expérience nouvelle sur ses convictions."],
                    ['q' => "Pour analyser la relation entre deux personnages, quel indice est le plus pertinent ?", 'c' => ["leur manière de se parler et d'agir, et l'évolution de leur relation", "le nombre de personnages secondaires", "la couleur de la couverture", "le nom de la maison d'édition"], 'a' => 0, 'e' => "Une relation se lit dans les interactions et dans leur évolution."],
                    ['q' => "Quelle formulation d'analyse est la plus précise ?", 'c' => ["Elle est prudente parce que je l'ai senti, c'est tout.", "Elle est la meilleure héroïne de la littérature.", "Elle est prudente et n'a besoin d'aucune preuve.", "Le personnage paraît prudent : il hésite et demande des informations avant de décider."], 'a' => 3, 'e' => "Le jugement s'appuie sur des comportements qu'on peut retrouver dans le texte."],
                    ['q' => "Après une erreur grave, le héros présente des excuses. Quelle est la question d'analyse la plus utile ?", 'c' => ["Combien de mots comptent ces excuses ?", "Son nom est-il long ?", "À quelle ligne de la page se trouvent-elles ?", "Ces excuses montrent-elles un changement dans sa conscience ?"], 'a' => 3, 'e' => "L'analyse s'intéresse à la fonction des excuses dans le parcours du personnage."],
                ],
            ],
            [
                'title' => "Narrateur et point de vue",
                'description' => "Analyser les limites de connaissance du narrateur, le point de vue et leurs effets.",
                'questions' => [
                    ['q' => "Quel pronom indique le plus souvent une narration à la première personne ?", 'c' => ["أنا", "هو", "هم", "هذا"], 'a' => 0, 'e' => "« أنا » signale que le narrateur parle depuis la position de « je »."],
                    ['q' => "Quel est l'effet d'un narrateur participant ?", 'c' => ["on voit les événements depuis son point de vue et dans les limites de ce qu'il sait", "on connaît les pensées de tous les personnages", "on reçoit des informations sans limite", "le lieu perd son rôle"], 'a' => 0, 'e' => "Le narrateur participant offre une expérience limitée à ce qu'il voit et sait."],
                    ['q' => "Un narrateur connaît les pensées de plusieurs personnages. Qu'est-ce que cela permet ?", 'c' => ["réduire la vision à un seul personnage", "supprimer le temps", "élargir les informations accessibles au lecteur", "empêcher de comprendre les motivations"], 'a' => 2, 'e' => "Un savoir étendu permet de donner des informations qui dépassent le regard d'un seul personnage."],
                    ['q' => "Si le narrateur ne sait que ce que voit un seul personnage, quel est l'effet probable ?", 'c' => ["on connaît le futur en détail", "on connaît les pensées de tous", "le conflit disparaît", "certaines informations restent hors de sa connaissance"], 'a' => 3, 'e' => "Une vision limitée cache des informations que d'autres personnages pourraient connaître."],
                    ['q' => "Pourquoi un auteur peut-il choisir un narrateur peu fiable ?", 'c' => ["pour que le lecteur confronte ses paroles aux faits et aux indices", "pour supprimer tout sens", "pour effacer les personnages", "pour garantir que tout ce qu'il dit est vrai"], 'a' => 0, 'e' => "Le narrateur peu fiable crée un écart entre son récit et ce que le lecteur découvre."],
                    ['q' => "« لم أكن أعرف ماذا يفكر أبي » : que révèle cette phrase ?", 'c' => ["qu'il connaît les pensées de tous", "que le texte est à la troisième personne", "les limites de ce que sait le narrateur", "que le lieu est le narrateur"], 'a' => 2, 'e' => "Le narrateur avoue ne pas connaître les pensées d'un autre personnage : son point de vue est limité."],
                    ['q' => "Comment le point de vue influence-t-il l'empathie du lecteur ?", 'c' => ["par le nombre de signes de ponctuation", "par la longueur du nom de l'auteur", "par la couleur de la couverture", "il détermine de quelle expérience et de quelles pensées on se sent proche"], 'a' => 3, 'e' => "La proximité avec un personnage change notre compréhension de ses motivations et émotions."],
                    ['q' => "Le lecteur connaît un secret que le personnage ignore. Quel effet est probable ?", 'c' => ["une tension et une attente accrues", "la fin de toute surprise", "l'arrêt de l'action", "le texte devient de la poésie"], 'a' => 0, 'e' => "Savoir à l'avance rend l'attente du moment de la découverte plus tendue."],
                    ['q' => "Quelle question est la plus utile pour analyser un narrateur ?", 'c' => ["Combien de lettres compte son nom ?", "Quelle est la couleur de la page ?", "Combien de fois « قال » apparaît-il ?", "Que nous montre le narrateur et que nous cache-t-il ?"], 'a' => 3, 'e' => "On analyse l'étendue de son savoir et les informations qui parviennent au lecteur."],
                    ['q' => "Un narrateur juge durement les autres mais se montre indulgent avec lui-même. Que faut-il étudier ?", 'c' => ["la disparition des personnages", "l'absence de thème", "son éventuel parti pris", "son objectivité totale"], 'a' => 2, 'e' => "Une mesure différente pour soi et pour les autres peut révéler un point de vue biaisé."],
                ],
            ],
            [
                'title' => "Intrigue et conflit",
                'description' => "Analyser le conflit, la causalité et les points de bascule dans l'intrigue.",
                'questions' => [
                    ['q' => "Que désigne le conflit dans un récit ?", 'c' => ["la seule description du lieu", "le nombre de pages", "le nom du héros", "un problème ou une force opposée qui fait avancer les événements"], 'a' => 3, 'e' => "Le conflit crée la tension et pousse les personnages à prendre des décisions."],
                    ['q' => "Un personnage veut voyager mais sa famille l'en empêche. De quel type de conflit s'agit-il ?", 'c' => ["personnage contre la nature uniquement", "personnage contre la langue", "personnage contre un autre personnage ou un groupe", "il n'y a pas de conflit"], 'a' => 2, 'e' => "L'obstacle vient d'autres personnes, donc de son entourage social."],
                    ['q' => "Un personnage craint l'échec et ne prend aucune décision. Quel est le conflit le plus proche ?", 'c' => ["un conflit avec la météo", "un conflit entre deux lieux", "un conflit sans lien avec l'intrigue", "un conflit intérieur"], 'a' => 3, 'e' => "L'obstacle vient des sentiments et des pensées du personnage lui-même."],
                    ['q' => "Quelle est l'importance d'un point de bascule ?", 'c' => ["il répète les mêmes informations", "il change la direction des événements ou des décisions des personnages", "il explique seulement le titre", "il fixe le nombre de chapitres"], 'a' => 1, 'e' => "Un point de bascule réoriente l'intrigue ou change nettement la position du personnage."],
                    ['q' => "Une lettre inattendue change le plan du héros. Quelle est sa fonction ?", 'c' => ["pousser l'intrigue sur une nouvelle voie", "arrêter toujours l'histoire", "décrire un personnage sans effet", "fixer le type de police d'écriture"], 'a' => 0, 'e' => "La lettre a un effet causal direct puisqu'elle modifie le plan que le héros va suivre."],
                    ['q' => "Quelle question met en évidence la causalité dans l'intrigue ?", 'c' => ["Combien de paragraphes y a-t-il ?", "Quel nom est le plus long ?", "Qu'est-ce qui a motivé la décision et qu'en est-il résulté ?", "De quelle couleur est la couverture ?"], 'a' => 2, 'e' => "Cause et conséquence montrent que les événements sont liés et ne forment pas une simple liste."],
                    ['q' => "Un récit commence par un résultat mystérieux puis revient à des événements antérieurs. Quel procédé est utilisé ?", 'c' => ["la description sensorielle seulement", "le dialogue seulement", "la répétition aléatoire", "le retour en arrière (l'analepse)"], 'a' => 3, 'e' => "Revenir à un événement passé pour éclairer le présent est un retour en arrière."],
                    ['q' => "Qu'est-ce qui lie la fin au début d'un récit ?", 'c' => ["qu'elle soit plus longue que le début", "qu'elle ajoute beaucoup de noms", "qu'elle achève un problème ou une idée annoncés dès le début", "qu'elle ignore tout ce qui précède"], 'a' => 2, 'e' => "Ce lien donne de la cohésion à l'intrigue en reprenant des éléments semés plus tôt."],
                    ['q' => "Un personnage échoue, apprend, puis réussit à l'essai suivant. Quel élément ressort ?", 'c' => ["l'évolution du personnage à travers le conflit", "la stabilité du personnage", "la disparition de l'intrigue", "le seul rôle du lieu"], 'a' => 0, 'e' => "L'expérience a modifié son comportement : le conflit fait évoluer le personnage."],
                    ['q' => "Si l'on supprime un événement et que la logique des suivants s'effondre, que cela montre-t-il ?", 'c' => ["que l'événement est purement décoratif", "que l'événement est essentiel à l'enchaînement de l'intrigue", "que le narrateur n'existe pas", "que le texte est devenu poétique"], 'a' => 1, 'e' => "Les événements suivants en dépendent : il joue un rôle structurel dans la causalité."],
                ],
            ],
            [
                'title' => "Lieu, temps et description",
                'description' => "Comprendre le rôle du lieu, du temps et de la description dans la construction du sens.",
                'questions' => [
                    ['q' => "Comment un lieu peut-il dépasser son rôle de simple décor ?", 'c' => ["il n'a aucune fonction", "il influence l'atmosphère, le comportement des personnages et le sens", "il ne sert qu'à donner la date", "il remplace l'intrigue"], 'a' => 1, 'e' => "Un lieu peut imposer des contraintes, créer une ambiance et se lier aux souvenirs des personnages."],
                    ['q' => "Une rue vide et des lampadaires faibles dans un récit mystérieux : quel est l'effet probable ?", 'c' => ["prouver le bonheur", "supprimer le narrateur", "expliquer directement la fin", "créer de la tension et de l'incertitude"], 'a' => 3, 'e' => "Ces détails installent une atmosphère cohérente avec le mystère et la peur."],
                    ['q' => "Une vieille maison liée aux souvenirs d'enfance : que peut-on analyser ?", 'c' => ["le nombre de fenêtres seulement", "le rythme de la métrique", "le lien entre le lieu, la mémoire et l'identité", "les règles de grammaire du titre"], 'a' => 2, 'e' => "Le lieu porte un sens psychologique parce qu'il est lié au passé du personnage."],
                    ['q' => "Qu'est-ce qu'une description fonctionnelle ?", 'c' => ["une description toujours plus longue", "une description qui sert l'atmosphère, un personnage, l'intrigue ou le sens", "des détails sans effet", "une description qui n'a pas besoin de contexte"], 'a' => 1, 'e' => "La valeur d'une description tient à sa fonction dans le texte, pas à sa longueur."],
                    ['q' => "Le coucher du soleil revient chaque fois que le personnage ressent une perte. Que peut-il signifier ?", 'c' => ["il peut être associé à la perte ou à la fin", "il n'a jamais de signification", "le changement du nom du personnage", "l'immobilité du temps"], 'a' => 0, 'e' => "Une répétition dans un même contexte émotionnel permet de lire le coucher du soleil comme une image de fin ou de perte."],
                    ['q' => "Quelle est la meilleure question pour analyser le temps dans un récit ?", 'c' => ["Combien de lettres comptent les noms des mois ?", "Tous les événements ont-ils lieu le même jour ?", "L'ordre des événements change-t-il notre compréhension des secrets et des personnages ?", "Combien de fois le mot « matin » apparaît-il ?"], 'a' => 2, 'e' => "L'analyse du temps porte sur l'ordre, la durée et leurs effets sur la compréhension."],
                    ['q' => "Un lieu exigu oblige les personnages à rester ensemble. Comment sert-il l'intrigue ?", 'c' => ["il supprime les personnages", "il augmente les frictions, les occasions de conflit et de dialogue", "il empêche toujours l'action", "il transforme le texte en article"], 'a' => 1, 'e' => "Un espace fermé rapproche les personnages et peut précipiter les affrontements."],
                    ['q' => "La description du lieu change quand le personnage a peur. Qu'analyse-t-on ?", 'c' => ["que le lieu change toujours réellement", "la neutralité absolue du narrateur", "l'inutilité de la description", "l'effet de l'état psychologique sur la perception du lieu"], 'a' => 3, 'e' => "La description peut refléter l'état d'esprit : le lieu devient un élément du point de vue."],
                    ['q' => "Pourquoi comparer deux lieux dans un texte ?", 'c' => ["pour prouver que l'un est objectivement plus beau", "pour voir comment l'atmosphère, le sens et l'expérience du personnage diffèrent", "pour supprimer les personnages", "pour compter les mots"], 'a' => 1, 'e' => "La comparaison peut montrer l'évolution des émotions ou des conditions liées à chaque lieu."],
                    ['q' => "Après une scène rapide, la description s'allonge à un moment important. Quel est l'effet probable ?", 'c' => ["supprimer l'événement", "niveler tous les moments", "ralentir l'instant et lui donner plus d'importance", "empêcher d'imaginer la scène"], 'a' => 2, 'e' => "Multiplier les détails à un moment précis ralentit le récit et attire l'attention."],
                ],
            ],
            [
                'title' => "Langue, images et symboles",
                'description' => "Analyser la langue, les images, les symboles et le ton dans leur contexte.",
                'questions' => [
                    ['q' => "Que désigne le « ton » d'un texte ?", 'c' => ["le nombre de paragraphes", "l'attitude ou le sentiment que la voix du texte adopte envers son sujet", "seulement l'époque d'écriture", "la longueur du titre"], 'a' => 1, 'e' => "Le ton traduit la position affective ou intellectuelle exprimée par la langue."],
                    ['q' => "Quel verbe reflète un ton plus tendu ?", 'c' => ["يبتسم", "يستريح", "يهدأ", "يرتجف"], 'a' => 3, 'e' => "« يرتجف » (trembler) évoque physiquement la peur ou l'inquiétude."],
                    ['q' => "À quoi sert une image sensorielle ?", 'c' => ["à empêcher tout sens symbolique", "à rendre l'expérience plus facile à imaginer et à ressentir", "à supprimer les personnages", "à fixer les chapitres"], 'a' => 1, 'e' => "Elle fait vivre la scène par le son, la couleur, le toucher ou l'odeur."],
                    ['q' => "Le cœur d'un personnage est comparé à une fenêtre ouverte. Quelle est la meilleure démarche ?", 'c' => ["prendre le cœur pour une fenêtre au sens propre", "ignorer la comparaison", "examiner le contexte et ce que la fenêtre suggère", "compter les lettres du mot fenêtre"], 'a' => 2, 'e' => "Une image se comprend en expliquant la relation entre l'image et le sens dans son contexte."],
                    ['q' => "Quand l'interprétation d'un élément comme symbole est-elle la plus solide ?", 'c' => ["quand on peut seulement l'imaginer", "quand son nom est court", "quand il n'a aucun contexte", "quand il se répète ou se lie à une idée ou à un changement clair"], 'a' => 3, 'e' => "La répétition et le lien avec les événements fournissent des indices pour une lecture symbolique."],
                    ['q' => "Les mots, d'abord calmes, deviennent violents et rapides. Que devient le ton ?", 'c' => ["il reste forcément le même", "il passe du calme à la tension", "il devient seulement poétique", "il disparaît"], 'a' => 1, 'e' => "La langue et le rythme changent avec l'action, ce qui marque un passage de ton."],
                    ['q' => "Quelle est la meilleure manière d'analyser une métaphore ?", 'c' => ["la réécrire seulement", "supposer un sens unique et fixe", "expliquer le lien entre l'image et le sens, et son effet", "la supprimer"], 'a' => 2, 'e' => "L'analyse montre ce que la métaphore ajoute à la compréhension du personnage, de l'atmosphère ou de l'idée."],
                    ['q' => "Des mots liés au froid reviennent chaque fois que le personnage vit une crise affective. Quelle hypothèse est raisonnable ?", 'c' => ["ils ne renvoient qu'à la météo", "le froid peut être associé à la distance ou au repli sur soi", "elle est un personnage polaire", "cela fixe son âge"], 'a' => 1, 'e' => "La répétition d'un vocabulaire dans un contexte émotionnel peut porter une valeur psychologique."],
                    ['q' => "Pourquoi analyse-t-on un mot dans son contexte ?", 'c' => ["pour connaître son effet sur le sens ou le ton", "pour compter ses lettres uniquement", "parce qu'il n'a pas besoin de contexte", "pour prouver le genre du livre"], 'a' => 0, 'e' => "Un mot tire sa force de sa place et de ses relations avec ce qui l'entoure."],
                    ['q' => "Une phrase très courte suit une longue série de phrases. Quel effet est possible ?", 'c' => ["supprimer le sens", "prouver le bonheur", "indiquer le lieu", "créer une pause, un effet d'insistance ou de choc"], 'a' => 3, 'e' => "Le changement de rythme attire l'attention sur la phrase brève et lui donne du poids."],
                ],
            ],
            [
                'title' => "Comparer deux passages",
                'description' => "Appliquer la comparaison et construire un argument d'analyse à partir de plusieurs passages.",
                'questions' => [
                    ['q' => "Pour comparer deux passages sur un même personnage, que faut-il définir d'abord ?", 'c' => ["seulement le nombre de mots", "lequel est le plus beau sans critère", "un axe de comparaison clair", "la couleur de la page"], 'a' => 2, 'e' => "Une comparaison a besoin d'une question ou d'un axe pour expliquer différences et ressemblances."],
                    ['q' => "Dans le premier passage le héros est sûr de lui, dans le second il hésite. Quelle conclusion est possible ?", 'c' => ["les deux passages sont identiques", "on ne peut pas analyser une description", "cela prouve le genre du livre", "cela peut refléter une évolution ou un changement de circonstances"], 'a' => 3, 'e' => "Une différence de portrait d'un passage à l'autre peut tenir à l'évolution du personnage ou à sa situation."],
                    ['q' => "Que signifie utiliser des preuves variées ?", 'c' => ["répéter le même exemple", "s'appuyer sur des indices de comportement, de langue et d'événements par exemple", "n'utiliser que des informations extérieures au texte", "mettre des titres sans lien"], 'a' => 1, 'e' => "Des indices variés renforcent l'argument s'ils se rapportent à la même idée."],
                    ['q' => "Le ton change entre deux passages. Quelle est la meilleure question ?", 'c' => ["Quel passage est le plus long ?", "Comment la langue a-t-elle produit cette différence et pourquoi est-ce important ?", "Quel nom est le plus long ?", "Le papier est-il le même ?"], 'a' => 1, 'e' => "L'analyse comparative explique la cause et l'effet de la différence au lieu de la noter simplement."],
                    ['q' => "Laquelle de ces phrases est une affirmation d'analyse ?", 'c' => ["Le premier passage est un passage.", "Le changement de lieu révèle le passage du personnage de l'isolement à la participation.", "L'histoire est arabe.", "J'ai aimé le deuxième passage."], 'a' => 1, 'e' => "Elle propose une interprétation entre un élément du texte et une évolution du personnage, qu'on peut étayer."],
                    ['q' => "Après une courte citation dans un paragraphe d'analyse, que faut-il généralement ajouter ?", 'c' => ["une autre citation sans commentaire", "une explication de la façon dont la citation soutient l'idée", "un nouveau sujet", "la même citation répétée"], 'a' => 1, 'e' => "La citation est une preuve ; c'est le commentaire qui montre son lien avec l'affirmation."],
                    ['q' => "On écrit « les deux passages sont différents » sans plus de précision. Quel est le défaut ?", 'c' => ["l'affirmation est trop longue", "l'affirmation est générale et n'explique pas l'importance de la différence", "une comparaison n'a pas besoin de preuves", "toute comparaison se termine par un résumé"], 'a' => 1, 'e' => "Il faut préciser la différence et expliquer sa signification."],
                    ['q' => "Le symbole de la porte apparaît dans deux passages avec des sens différents. Quelle est la meilleure question ?", 'c' => ["Quelle porte est la plus haute ?", "Est-elle sur la couverture ?", "L'auteur aime-t-il les portes ?", "Comment le sens de l'image change-t-il selon le contexte ?"], 'a' => 3, 'e' => "Un même élément peut prendre des sens différents selon le contexte et sa fonction."],
                    ['q' => "Quel ordre est le plus clair pour construire un argument à partir de deux passages ?", 'c' => ["résumer seulement le premier passage", "une opinion sans preuve", "une affirmation, deux preuves, puis l'explication de la comparaison", "deux preuves sans explication"], 'a' => 2, 'e' => "Cet ordre pose l'idée, l'appuie, puis explique le lien entre les preuves."],
                    ['q' => "Votre interprétation repose sur une supposition que le texte n'appuie pas. Que faites-vous ?", 'c' => ["vous la présentez comme un fait", "vous l'exprimez avec prudence ou cherchez un indice plus solide", "vous ignorez le texte", "vous inventez des détails"], 'a' => 1, 'e' => "Une analyse rigoureuse distingue ce qui est prouvé de ce qui reste une hypothèse."],
                ],
            ],
            [
                'title' => "Applications intégrées",
                'description' => "Exercices qui réunissent les éléments de l'analyse littéraire pour débutants.",
                'questions' => [
                    ['q' => "L'expression « لم يعد كما كان » revient quand le héros rentre chez lui. Quelle lecture est la plus proche ?", 'c' => ["la maison s'effondre elle-même", "le changement du lieu est lié à la mémoire ou au ressenti du héros", "l'expression n'a pas de sens", "elle prouve l'âge de l'auteur"], 'a' => 1, 'e' => "Le contexte répété relie le changement de la maison à l'expérience intérieure du héros."],
                    ['q' => "Une narratrice justifie toutes ses erreurs alors que les événements révèlent des conséquences douloureuses. Que faut-il examiner ?", 'c' => ["le nombre de personnages secondaires", "sa fiabilité et l'écart entre ses paroles et les faits", "la couleur des vêtements", "le poids du livre"], 'a' => 1, 'e' => "L'écart entre le récit et les faits peut révéler une vision limitée ou partiale."],
                    ['q' => "Un personnage dit ne pas se soucier de l'opinion des autres mais hésite à publier son œuvre. Quelle analyse est la plus solide ?", 'c' => ["il ne sait pas parler", "le décalage entre ses paroles et ses actes peut révéler la peur d'être jugé", "il n'y a aucun conflit", "son hésitation prouve son bonheur"], 'a' => 1, 'e' => "Parole et comportement ensemble révèlent un conflit intérieur que la déclaration seule ne montre pas."],
                    ['q' => "Dans une scène décisive, les phrases sont courtes et les verbes d'action nombreux. Quel est l'effet ?", 'c' => ["ralentir forcément le temps", "accélérer le rythme et créer une impression d'urgence ou de tension", "supprimer le conflit", "rendre le texte uniquement descriptif"], 'a' => 1, 'e' => "Des phrases brèves et des verbes d'action accélèrent le rythme et intensifient la tension."],
                    ['q' => "Le silence remplace le dialogue à la fin d'un affrontement important. Quelle est la meilleure question ?", 'c' => ["Combien de mots l'auteur a-t-il supprimés ?", "Qu'est-ce que le silence suggère des sentiments ou de la relation ?", "L'auteur a-t-il oublié le dialogue ?", "Le silence signifie-t-il toujours le bonheur ?"], 'a' => 1, 'e' => "Le silence peut porter un sens affectif selon ce qui précède."],
                    ['q' => "Un oiseau apparaît au début et à la fin, mais sa relation avec le héros a changé. Qu'étudie-t-on ?", 'c' => ["le nombre de ses ailes", "comment le changement de sa signification reflète l'évolution du personnage ou de l'idée", "le fait qu'il soit un personnage humain", "le fait que la répétition n'a pas de fonction"], 'a' => 1, 'e' => "La reprise d'un élément dans un contexte différent peut révéler un changement de sens."],
                    ['q' => "Un récit commence par une question et se termine par une réponse après une épreuve. Que peut-on en conclure ?", 'c' => ["la question n'a pas de fonction", "un lien entre début et fin à travers une transformation ou une prise de conscience", "la fin est indépendante", "le narrateur est devenu poète"], 'a' => 1, 'e' => "Le retour de la question après l'épreuve met en valeur ce que le personnage a appris."],
                    ['q' => "Laquelle de ces phrases relève de l'analyse et non du résumé ?", 'c' => ["ذهب البطل إلى السوق ثم عاد.", "تتبّع الأحداث كلها بالترتيب.", "ذكر أسماء الشخصيات فقط.", "يوضّح تردد البطل خوفه من خسارة صديقه."], 'a' => 3, 'e' => "Elle explique le sens d'un comportement et son lien avec la relation, au lieu de raconter l'événement."],
                    ['q' => "Après avoir repéré un motif qui se répète, quelle est la meilleure étape ?", 'c' => ["supposer tout de suite un symbole précis", "l'ignorer", "le relier au contexte et expliquer son effet sur le sens", "le remplacer par une information extérieure"], 'a' => 2, 'e' => "Repérer le motif n'est que le début : il faut ensuite interpréter sa fonction."],
                    ['q' => "Quelle phrase conclut bien un paragraphe sur l'évolution d'un personnage ?", 'c' => ["Et voilà l'histoire.", "Puis il est rentré chez lui.", "L'épreuve montre qu'elle a transformé la compréhension qu'a le héros de sa responsabilité, et pas seulement sa décision.", "J'ai beaucoup aimé le héros."], 'a' => 2, 'e' => "La conclusion revient à l'idée d'analyse et en montre la portée."],
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
