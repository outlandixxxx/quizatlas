<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PoetryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'poetry')->firstOrFail();

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
                'title' => "Les bases de la poésie arabe",
                'description' => "Découvrir ce qu'est la poésie, le vers, le poème et quelques caractéristiques essentielles du texte poétique.",
                'questions' => [
                    ['q' => "Qu'est-ce que la poésie, dans sa définition la plus simple ?", 'c' => ["un mode d'emploi d'appareil", "une liste de noms", "un art de la langue fondé sur le rythme, les images et l'expression des idées et des sentiments", "un rapport financier"], 'a' => 2, 'e' => "La poésie est un art du langage qui joue sur le rythme, les images et une expression condensée."],
                    ['q' => "Comment appelle-t-on l'unité de base du poème arabe classique ?", 'c' => ["le vers (البيت الشعري)", "le paragraphe", "le chapitre", "le titre"], 'a' => 0, 'e' => "Le poème arabe classique est formé de vers, chaque « بيت » étant composé de deux hémistiches."],
                    ['q' => "Un vers classique se compose de deux moitiés. Comment les appelle-t-on ?", 'c' => ["الصدر والعجز", "المبتدأ والخبر", "الفعل والفاعل", "المقدمة والخاتمة"], 'a' => 0, 'e' => "La première moitié est le « صدر » et la seconde le « عجز »."],
                    ['q' => "Comment appelle-t-on l'ensemble des vers qui forment un texte poétique ?", 'c' => ["la phrase", "la lettre", "le poème (القصيدة)", "l'article de presse"], 'a' => 2, 'e' => "La « قصيدة » est le poème, composé de plusieurs vers."],
                    ['q' => "Quels thèmes la poésie peut-elle traiter ?", 'c' => ["l'amour, la patrie, la nature, la sagesse et bien d'autres", "uniquement le calcul", "uniquement les modes d'emploi", "uniquement des tableaux de prix"], 'a' => 0, 'e' => "La poésie exprime de nombreux thèmes humains : amour, patrie, nature, sagesse, deuil..."],
                    ['q' => "Qu'est-ce qui distingue souvent la poésie du langage ordinaire ?", 'c' => ["le soin apporté au rythme, aux images et au choix des mots", "elle ne porte aucun sens", "elle n'emploie pas de verbes", "elle doit être très longue"], 'a' => 0, 'e' => "Le poète travaille le rythme, l'image et le mot juste, ce qui donne au texte son caractère artistique."],
                    ['q' => "Des vers expriment le désir du poète de retrouver son pays. Quel est le thème le plus proche ?", 'c' => ["la nostalgie et la patrie", "les mathématiques", "la cuisine", "la technologie"], 'a' => 0, 'e' => "Le manque du pays évoque la nostalgie et l'attachement à la terre natale."],
                    ['q' => "Laquelle de ces phrases est la plus poétique ?", 'c' => ["وصلت الحافلة عند الثامنة.", "يرجى إغلاق الباب.", "أرسلت التقرير إلى المدير.", "يا ليل، طال السهر في عيني."], 'a' => 3, 'e' => "Elle contient une interpellation et une image chargée d'émotion, contrairement aux autres phrases, purement informatives."],
                    ['q' => "Pourquoi le poète choisit-il un mot avec soin ?", 'c' => ["parce que le mot influence le sens, le rythme, l'image et l'émotion", "parce que seul le nombre de lettres compte", "parce que tous les mots ont le même effet", "pour toujours cacher le sujet"], 'a' => 0, 'e' => "Un mot choisi modifie la musique du vers et l'impression que ressent le lecteur."],
                    ['q' => "Que cherche le lecteur en abordant un poème ?", 'c' => ["le sujet général et la voix ou l'émotion qui se dégage des vers", "le prix du livre", "le nombre de pages de la bibliothèque", "seulement la couleur du papier"], 'a' => 0, 'e' => "Repérer le sujet et le ton aide à entrer dans le poème avant de regarder les détails."],
                ],
            ],
            [
                'title' => "La rime et le rythme",
                'description' => "Repérer la rime, le rythme et les répétitions sonores dans un poème de façon simple.",
                'questions' => [
                    ['q' => "Qu'est-ce que la rime (القافية), dans sa définition la plus simple ?", 'c' => ["le son qui revient à la fin des vers", "le nom du poète", "le thème du poème", "le nombre de personnages"], 'a' => 0, 'e' => "La rime est la terminaison sonore qui revient à la fin des vers."],
                    ['q' => "Plusieurs vers se terminent par un son semblable. Que remarque-t-on ?", 'c' => ["une unité ou ressemblance de rime", "un changement de personnages", "la disparition du thème", "la transformation du poème en nouvelle"], 'a' => 0, 'e' => "Des finales sonores proches indiquent une rime commune."],
                    ['q' => "Quel est l'effet du rythme en poésie ?", 'c' => ["il supprime le sens", "il empêche les images", "il transforme chaque vers en information", "il donne au poème une musique et une impression de mouvement et d'équilibre"], 'a' => 3, 'e' => "Le rythme est l'un des éléments qui donnent au poème sa musicalité."],
                    ['q' => "Qu'est-ce qui peut contribuer au rythme ?", 'c' => ["la répétition de certains sons et mots et la régularité des syllabes", "la couleur du papier", "le nom de l'éditeur", "le nombre de pages"], 'a' => 0, 'e' => "La répétition sonore et la régularité de la construction créent le rythme."],
                    ['q' => "Le lecteur sent que les vers coulent avec une cadence régulière. Quelle est la cause probable ?", 'c' => ["une construction rythmique ordonnée", "le poème n'a aucun sens", "tous les mots ont le même sens", "le texte est forcément en prose"], 'a' => 0, 'e' => "Cette fluidité régulière vient généralement d'une organisation rythmique."],
                    ['q' => "Quelle est la fonction de la répétition dans un poème ?", 'c' => ["elle empêche de comprendre le poème", "elle change automatiquement le sujet", "elle peut insister sur une idée et renforcer le rythme et l'émotion", "elle en fait un rapport"], 'a' => 2, 'e' => "Une répétition voulue peut fixer une idée ou un sentiment et donner une musique propre au poème."],
                    ['q' => "Lequel de ces éléments relève davantage du son que du sens ?", 'c' => ["l'enfance du poète", "l'idée de patrie", "le personnage principal", "la ressemblance des finales de vers"], 'a' => 3, 'e' => "La ressemblance des finales est un aspect sonore ; les autres éléments concernent le contenu."],
                    ['q' => "Tout poème moderne doit-il avoir une rime fixe unique ?", 'c' => ["non, les structures poétiques varient et la rime peut changer", "oui, sans exception", "oui, à condition que le poème soit court", "non, car les poèmes n'ont pas de sons"], 'a' => 0, 'e' => "Les formes de poésie sont variées, et certains poèmes modernes n'ont pas de rime unique."],
                    ['q' => "L'expression « يا وطني » se répète sur plusieurs lignes. Qu'obtient-on ?", 'c' => ["l'insistance sur le thème de la patrie et un sentiment renforcé", "l'annulation du sujet", "la transformation du poème en récit", "la disparition de la voix du poète"], 'a' => 0, 'e' => "La répétition met en avant la patrie et renforce l'émotion qui lui est liée."],
                    ['q' => "Quelle question convient pour analyser la rime ?", 'c' => ["Quel son revient à la fin des vers et quel effet cela produit-il ?", "Combien coûte le livre ?", "Où le poète a-t-il acheté son stylo ?", "De quelle couleur est la couverture ?"], 'a' => 0, 'e' => "L'analyse de la rime associe repérage du son répété et compréhension de son effet."],
                ],
            ],
            [
                'title' => "Thème et émotion du poème",
                'description' => "S'entraîner à repérer le thème, l'émotion et le ton à partir de courts vers et d'idées simples.",
                'questions' => [
                    ['q' => "Un poème parle d'une mère qui manque au poète. Quelle émotion est la plus proche ?", 'c' => ["l'indifférence", "l'ironie", "la nostalgie et l'affection", "la colère contre la météo"], 'a' => 2, 'e' => "Le manque de la mère traduit nostalgie et tendresse."],
                    ['q' => "Un poème célèbre la patrie avec fierté et rappelle ses réussites. Quel sentiment domine ?", 'c' => ["la peur seulement", "l'ennui", "l'indifférence", "la fierté et l'appartenance"], 'a' => 3, 'e' => "La fierté envers la patrie montre un sentiment d'appartenance."],
                    ['q' => "Un poème est rempli de mots comme « دموع، فراق، غياب ». Quelle atmosphère attendre ?", 'c' => ["la tristesse et la perte", "une joie intense", "une fête", "un ton amusé"], 'a' => 0, 'e' => "Ces mots sont associés à la séparation et à la peine."],
                    ['q' => "Quelle question aide à comprendre l'émotion du poète ?", 'c' => ["Combien de lettres compte le titre ?", "Qui a imprimé le livre ?", "Quelle est la couleur de la page ?", "Que ressent le poète envers la personne ou le lieu dont il parle ?"], 'a' => 3, 'e' => "Cette question révèle le lien affectif entre le poète et son sujet."],
                    ['q' => "Un poème sur le printemps est plein de mots comme « زهر، نسيم، ضوء، ابتسام ». Quelle atmosphère domine ?", 'c' => ["la peur", "la tristesse profonde", "la joie et la légèreté", "la colère"], 'a' => 2, 'e' => "Ces mots dessinent une image douce et lumineuse, propre à la joie."],
                    ['q' => "Un poème évoque la perte d'un vieil ami après des années de compagnie. Quel thème est le plus proche ?", 'c' => ["la perte, la fidélité et les souvenirs", "le shopping", "la technologie", "le sport"], 'a' => 0, 'e' => "La perte d'un ami de longue date renvoie à la fidélité, aux souvenirs et à la peine."],
                    ['q' => "Le poète commence par la tristesse et termine par l'espoir. Que devient l'émotion ?", 'c' => ["elle reste de la colère dans chaque ligne", "elle disparaît totalement", "elle passe de la tristesse à l'espoir ou à l'optimisme", "elle se transforme en rapport scientifique"], 'a' => 2, 'e' => "L'évolution des vers peut faire passer le ton d'un état triste à une fin plus optimiste."],
                    ['q' => "Pourquoi deux poèmes sur la mer peuvent-ils donner des impressions différentes ?", 'c' => ["parce que la mer a toujours un seul sens", "parce que la poésie n'utilise pas l'émotion", "parce que le sujet interdit toute différence", "parce que chaque poète peut associer la mer à une émotion ou une image différente"], 'a' => 3, 'e' => "Un même sujet est traité différemment : la mer peut symboliser la liberté pour l'un et la solitude pour l'autre."],
                    ['q' => "Qu'est-ce qui aide à déterminer le ton général d'un poème ?", 'c' => ["les mots, les images, les répétitions et l'émotion des vers", "le nombre de pages du recueil", "le nom de l'éditeur", "le type de papier"], 'a' => 0, 'e' => "Tous ces éléments fournissent des indices sur le ton : joyeux, triste, contemplatif..."],
                    ['q' => "Le poète répète « سأعود » dans un poème sur l'exil. Que cela suggère-t-il ?", 'c' => ["le refus de revenir", "l'oubli de la patrie", "l'espoir du retour et l'attachement au pays ou au lieu", "l'intérêt pour le sport"], 'a' => 2, 'e' => "La répétition de « سأعود » dans l'exil exprime l'attachement et l'espoir du retour."],
                ],
            ],
            [
                'title' => "Les images poétiques",
                'description' => "Reconnaître la comparaison, la métaphore et la personnification et voir comment les images transmettent l'émotion.",
                'questions' => [
                    ['q' => "Laquelle de ces phrases contient une comparaison (تشبيه) ?", 'c' => ["وجه الصباح كالقمر.", "الصباح جميل.", "طلع الصباح.", "جاء الصباح."], 'a' => 0, 'e' => "« كـ » est un outil de comparaison : le visage du matin est comparé à la lune."],
                    ['q' => "Dans « الليل يهمس للشاعر », quelle est l'image la plus nette ?", 'c' => ["une description scientifique de la nuit", "une rime en prose (سجع)", "un antithèse (طباق)", "une personnification de la nuit"], 'a' => 3, 'e' => "La nuit ne chuchote pas réellement : le poète lui donne une action humaine."],
                    ['q' => "Dans « قلبي بحر من الذكريات », quelle est la figure employée ?", 'c' => ["une information géographique", "une définition littérale du cœur", "une comparaison sans outil (تشبيه بليغ) : le cœur est comparé à la mer pour dire que les souvenirs sont nombreux et profonds", "la description de la vraie mer"], 'a' => 2, 'e' => "Les deux termes (cœur et mer) sont tous deux nommés : c'est un تشبيه بليغ, qui suggère profondeur et abondance."],
                    ['q' => "Pourquoi le poète utilise-t-il des images ?", 'c' => ["pour cacher toutes les idées", "pour transformer le poème en rapport", "pour empêcher le lecteur de ressentir", "pour rendre le sens plus concret et plus frappant pour l'imagination"], 'a' => 3, 'e' => "Les images permettent de voir ou de sentir le sens plus facilement."],
                    ['q' => "Laquelle de ces phrases décrit la lumière du soleil de façon poétique ?", 'c' => ["ظهرت الشمس الساعة السابعة.", "الشمس موجودة اليوم.", "أرسلت الشمس خيوطها الذهبية إلى النافذة.", "ارتفعت درجة الحرارة."], 'a' => 2, 'e' => "« خيوطها الذهبية » rend la lumière visible à l'imagination."],
                    ['q' => "Dans « النجوم تضحك في السماء », que remarque-t-on ?", 'c' => ["une définition astronomique", "une description directe du temps", "une question", "une action humaine attribuée aux étoiles"], 'a' => 3, 'e' => "Les étoiles ne rient pas : c'est une personnification."],
                    ['q' => "Quelle image convient au thème de la solitude ?", 'c' => ["جلست في الغرفة.", "فتحت الباب.", "الغرفة واسعة.", "غرفتي صامتة كقبر في الليل."], 'a' => 3, 'e' => "La comparaison avec la tombe exprime fortement la solitude et le silence."],
                    ['q' => "Le poète décrit l'espoir comme « شمعة في العتمة ». Quel sens est le plus proche ?", 'c' => ["l'espoir brûle littéralement", "l'espoir éteint la lumière", "l'espoir est une sorte de nourriture", "l'espoir donne de la lumière ou de la force au milieu de la difficulté"], 'a' => 3, 'e' => "La bougie représente la lumière dans l'obscurité : elle figure l'espoir au cœur des épreuves."],
                    ['q' => "Quelle est la meilleure façon de comprendre une image poétique difficile ?", 'c' => ["lire le mot seul", "supposer toujours un sens littéral", "la relier à ce qui précède, ce qui suit et à l'émotion générale", "ignorer le contexte"], 'a' => 2, 'e' => "Le contexte et l'émotion aident à saisir le sens figuré."],
                    ['q' => "Toute image poétique doit-elle être comprise au sens propre ?", 'c' => ["oui, toujours", "oui, si le poème est court", "non, beaucoup d'images expriment au sens figuré une idée ou un sentiment", "non, car elles n'ont pas de sens"], 'a' => 2, 'e' => "L'image poétique transmet le plus souvent un sens figuré, pas littéral."],
                ],
            ],
            [
                'title' => "Construction du poème et lecture des vers",
                'description' => "Suivre les idées d'un poème, comprendre le lien entre les vers et repérer répétitions et progression.",
                'questions' => [
                    ['q' => "Un poème décrit d'abord la nature puis passe aux sentiments du poète. Que s'est-il passé dans la construction ?", 'c' => ["le poème est devenu un rapport financier", "le sujet a disparu", "le poème est devenu forcément un dialogue", "le poète est passé d'une description extérieure à une expérience intérieure"], 'a' => 3, 'e' => "Le passage de la nature aux sentiments relie le paysage à l'expérience du poète."],
                    ['q' => "À quoi sert l'ordre des vers dans un poème ?", 'c' => ["il n'a aucun effet", "il fait avancer l'idée ou l'émotion du début à la fin", "il rend chaque vers sans lien avec l'autre", "il détermine la couleur de la couverture"], 'a' => 1, 'e' => "L'ordre peut conduire le lecteur d'un tableau à une idée ou une émotion, puis à une conclusion."],
                    ['q' => "Le poète répète la même expression au début de plusieurs vers. Comment nomme-t-on ce procédé ?", 'c' => ["une répétition en début de vers (anaphore)", "uniquement la rime", "un sous-titre", "forcément une faute de grammaire"], 'a' => 0, 'e' => "Répéter une expression en tête de vers crée un motif rythmique et souligne l'idée."],
                    ['q' => "Un poème se termine en reprenant l'idée du début, mais sur un ton d'espoir. Quel effet cela produit-il ?", 'c' => ["il annule tout ce qui précède", "il transforme le poème en nouvelle", "il rend la rime sans importance", "il donne une impression d'achèvement et d'évolution"], 'a' => 3, 'e' => "Revenir à l'idée initiale avec un ton différent donne une construction circulaire ou une idée de progression."],
                    ['q' => "Face à un vers difficile, que faire d'abord ?", 'c' => ["changer tous ses mots", "le lire dans son contexte et le relier aux vers voisins", "supprimer les mots difficiles", "ignorer tout le poème"], 'a' => 1, 'e' => "Le contexte aide à comprendre les mots et ce que le poète veut dire."],
                    ['q' => "Qu'est-ce qui peut signaler le passage à une nouvelle idée dans un poème ?", 'c' => ["la couleur de la page", "un changement de sujet ou l'apparition de mots liés à une autre idée", "le nombre de lettres du nom", "le type de papier"], 'a' => 1, 'e' => "Un changement de champ lexical peut indiquer un changement de sujet ou d'idée."],
                    ['q' => "Chaque vers ajoute un détail sur une même personne. Qu'est-ce qui relie le poème ?", 'c' => ["la rime seule", "la couverture", "le lieu d'impression", "la personne ou le sujet autour duquel tournent les vers"], 'a' => 3, 'e' => "L'élément qui revient en sens donne l'unité au poème même si les détails changent."],
                    ['q' => "Quelle est la meilleure manière de lire un court poème ?", 'c' => ["lire seulement le titre", "mémoriser seulement le dernier vers", "une première lecture pour le sens général, puis une seconde pour les détails", "lire les mots isolés hors contexte"], 'a' => 2, 'e' => "Deux lectures permettent de saisir d'abord l'ensemble puis d'analyser les détails."],
                    ['q' => "Pourquoi le poète peut-il répéter « وطني » à la fin du poème ?", 'c' => ["parce qu'il a oublié le mot", "parce que la rime empêche le sens", "pour affirmer son attachement à la patrie et laisser une forte impression finale", "pour transformer le poème en prose"], 'a' => 2, 'e' => "Une répétition finale peut renforcer l'émotion et marquer la fin."],
                    ['q' => "Quelle question aide à comprendre l'évolution d'un poème ?", 'c' => ["Combien coûte le livre ?", "Où le recueil a-t-il été imprimé ?", "Comment l'idée ou l'émotion a-t-elle changé du premier au dernier vers ?", "De quelle couleur est la dernière page ?"], 'a' => 2, 'e' => "Comparer le début et la fin révèle l'évolution de l'idée, du ton ou de l'attitude."],
                ],
            ],
            [
                'title' => "Langage poétique et goût du texte",
                'description' => "Observer l'effet des mots choisis, des répétitions, du ton et des connotations pour lire un poème avec plus de goût.",
                'questions' => [
                    ['q' => "Pourquoi un poète pourrait-il préférer « نسيم » à « هواء » ?", 'c' => ["parce que « هواء » n'est pas un mot arabe", "parce que « نسيم » veut dire feu", "parce que le poète ne s'intéresse pas au sens", "parce que « نسيم » évoque la douceur et le calme davantage, dans un contexte poétique"], 'a' => 3, 'e' => "« نسيم » (brise) suggère la douceur, tandis que « هواء » (air) est plus général et neutre."],
                    ['q' => "Que signifie la « connotation » dans le langage poétique ?", 'c' => ["le nombre de mots dans le vers", "le nom du poète", "les sens et sentiments qu'un mot évoque en plus de son sens direct", "un signe de ponctuation"], 'a' => 2, 'e' => "Un mot poétique peut porter des émotions qui dépassent sa définition de dictionnaire."],
                    ['q' => "Quel mot évoque le plus la nostalgie ?", 'c' => ["فاتورة", "حاسوب", "مقعد", "الذكريات"], 'a' => 3, 'e' => "« الذكريات » renvoie au passé et à l'expérience vécue : c'est un mot de la nostalgie."],
                    ['q' => "Le poète emploie « فجر، نور، أمل ». Quelle atmosphère ces mots créent-ils ?", 'c' => ["la peur intense", "l'optimisme et un nouveau départ", "l'obscurité totale", "l'ennui"], 'a' => 1, 'e' => "Ces mots lumineux évoquent l'espoir et le commencement."],
                    ['q' => "Quelle phrase est la plus poétique pour décrire la nuit ?", 'c' => ["حل الليل الساعة الثامنة.", "الليل بدأ.", "نامت المدينة تحت عباءة الليل.", "كانت السماء مظلمة."], 'a' => 2, 'e' => "« عباءة الليل » est une image figurée qui donne à la scène un caractère imaginaire."],
                    ['q' => "Comment la répétition peut-elle influer sur le goût du poème ?", 'c' => ["elle supprime toujours le rythme", "elle empêche tout effet", "elle rend chaque mot nouveau", "elle rend la voix de l'idée ou de l'émotion plus présente"], 'a' => 3, 'e' => "La répétition peut ancrer un sentiment ou une idée et accroître l'effet musical."],
                    ['q' => "Le lecteur trouve le poème « calme ». Qu'est-ce qui peut l'expliquer ?", 'c' => ["le nombre de pages du recueil", "les mots, les images et le rythme doux", "le nom du poète", "la taille de la police"], 'a' => 1, 'e' => "Le ton calme naît de l'interaction des mots, des images et du rythme, pas de la présentation du livre."],
                    ['q' => "Quelle question aide à apprécier un mot poétique ?", 'c' => ["Combien de lettres compte-t-il ?", "Que suggère ce mot en plus de son sens direct ?", "Où le poème a-t-il été imprimé ?", "Combien d'exemplaires du recueil existent ?"], 'a' => 1, 'e' => "L'appréciation cherche les évocations que le mot ajoute au texte."],
                    ['q' => "Le poète choisit le verbe « يركض » plutôt que « يمشي » pour parler du temps. Quel effet cela produit-il ?", 'c' => ["l'idée que le temps est immobile", "il suggère que le temps passe vite", "il supprime l'idée de temps", "il insiste sur la lenteur de la vie"], 'a' => 1, 'e' => "« يركض » (courir) exprime une action plus rapide que « يمشي » (marcher) et sert l'image d'un temps qui file."],
                    ['q' => "Qu'est-ce qui distingue une lecture attentive d'une simple lecture rapide ?", 'c' => ["seulement compter les mots", "mémoriser seulement le premier vers", "ignorer le choix des mots", "l'attention portée au sens, à l'image, au rythme et à l'émotion"], 'a' => 3, 'e' => "Lire avec goût, c'est comprendre le sens et observer la façon artistique dont le poète a exprimé son expérience."],
                ],
            ],
            [
                'title' => "Révision générale sur la poésie",
                'description' => "Vérifier sa compréhension de la poésie : rime, rythme, émotion, image, construction et goût du texte.",
                'questions' => [
                    ['q' => "Vous trouvez des vers qui se terminent presque tous par le même son. Quel élément observez-vous ?", 'c' => ["les personnages", "l'intrigue", "la rime", "le lieu"], 'a' => 2, 'e' => "La répétition d'un son à la fin des vers est la rime."],
                    ['q' => "Dans « كالورد في رقتها », quel élément poétique est le plus proche ?", 'c' => ["la rime", "la comparaison", "l'antithèse", "la rime intérieure"], 'a' => 1, 'e' => "Le « كـ » compare quelque chose à la rose et met en valeur la délicatesse."],
                    ['q' => "Un poème comporte souvent les mots « رحيل، غياب، دموع ». Quel ton domine ?", 'c' => ["la gaieté", "la tristesse et la perte", "la fête", "l'ironie"], 'a' => 1, 'e' => "Ces mots ont une connotation triste liée à la séparation et à la perte."],
                    ['q' => "Si le poète dit « الصباح يبتسم », quelle est l'image ?", 'c' => ["une antithèse", "une personnification", "un jeu de mots (جناس)", "une rime"], 'a' => 1, 'e' => "Attribuer le sourire au matin lui donne une qualité humaine."],
                    ['q' => "Quelle est la meilleure façon d'aborder un nouveau poème ?", 'c' => ["analyser un seul mot", "lire seulement le dernier vers", "lire tout le poème pour saisir le sujet et le ton avant d'analyser les détails", "ignorer le titre du poème"], 'a' => 2, 'e' => "Comprendre l'ensemble d'abord facilite ensuite l'analyse de la rime, des images et de l'émotion."],
                    ['q' => "Qu'est-ce qui peut relier les vers d'un poème même si les images changent ?", 'c' => ["la couleur du livre", "le sujet, l'idée ou l'émotion commune", "le nom de l'éditeur", "le nombre de pages"], 'a' => 1, 'e' => "L'unité du poème tient au fil commun qui relie les vers."],
                    ['q' => "Le ton du poème passe de la tristesse à l'espoir. Comment décrit-on ce phénomène ?", 'c' => ["une erreur de rime", "une évolution de l'émotion ou du ton", "un changement de nom du poète", "la suppression du figuré"], 'a' => 1, 'e' => "L'évolution des sentiments fait partie du parcours de l'expérience poétique."],
                    ['q' => "Quels éléments ajoutent de la musique au poème ?", 'c' => ["le nombre de pages du recueil", "le rythme, la rime et la répétition sonore", "la forme de la couverture", "le titre seul"], 'a' => 1, 'e' => "Ces éléments sonores donnent au poème sa musique et son rythme."],
                    ['q' => "Le poète emploie l'image « الأمل شمعة ». Quel message est le plus proche ?", 'c' => ["l'espoir est un feu domestique seulement", "le poète parle d'un magasin de bougies", "l'espoir apporte de la lumière au milieu des difficultés", "l'espoir n'a aucun lien avec les sentiments"], 'a' => 2, 'e' => "La bougie est un symbole de lumière : elle figure l'espoir au milieu de l'obscurité ou des problèmes."],
                    ['q' => "Quelle est la meilleure description du goût poétique ?", 'c' => ["apprendre des vers sans les comprendre", "comprendre le sens, apprécier les images et le rythme et remarquer l'effet des mots", "compter seulement les mots", "se concentrer sur la couverture"], 'a' => 1, 'e' => "Le goût poétique associe compréhension, analyse et plaisir de l'aspect artistique du poème."],
                ],
            ],
            [
                'title' => "Analyser un court poème",
                'description' => "Appliquer la lecture, l'analyse du thème, de l'émotion, des images et du rythme à de courts exemples.",
                'questions' => [
                    ['q' => "Lisez : « يا وطني، في القلب أنتَ حكايةٌ لا تنتهي. » Quel est le thème le plus proche ?", 'c' => ["la description d'un plat", "l'amour de la patrie et l'attachement à elle", "uniquement le voyage", "les études"], 'a' => 1, 'e' => "L'interpellation de la patrie et son lien avec le cœur et l'histoire montrent l'amour et l'attachement affectif."],
                    ['q' => "Dans le vers précédent, quel procédé apparaît dans « يا وطني » ?", 'c' => ["l'interdiction", "l'interpellation (النداء)", "l'interrogation", "le souhait"], 'a' => 1, 'e' => "Le « يا » devant « وطني » indique que l'on s'adresse directement à la patrie."],
                    ['q' => "« والليل يطوي فوقنا ستاره، حتى يجيء الصبح مبتسمًا. » Quelle est l'image dans « الصبح مبتسمًا » ?", 'c' => ["une information scientifique sur le soleil", "une personnification : le matin reçoit une qualité humaine", "la description du nombre d'heures de nuit", "une question sur le matin"], 'a' => 1, 'e' => "Sourire est un acte humain : l'attribuer au matin est une personnification."],
                    ['q' => "Si le poème passe de la nuit au matin, que peut symboliser ce passage ?", 'c' => ["le passage au sujet de la nourriture", "le passage de la tristesse ou de l'obscurité à l'espoir et au commencement", "la suppression de l'émotion", "seulement la description d'un autre lieu sans signification"], 'a' => 1, 'e' => "Passer de la nuit au matin peut symboliser la sortie de la difficulté vers l'espoir."],
                    ['q' => "Un poème sur l'exil répète plusieurs fois « أعود ». Quel est l'effet le plus proche ?", 'c' => ["il annule le thème de l'exil", "il souligne le désir et l'attachement à l'idée du retour", "il exprime uniquement la colère", "il transforme le poème en rapport"], 'a' => 1, 'e' => "La répétition concentre l'attention sur l'idée du retour et renforce le manque."],
                    ['q' => "Si les vers d'un poème se terminent par des sons voisins, quel élément observez-vous ?", 'c' => ["le personnage principal", "la rime", "le lieu", "l'intrigue"], 'a' => 1, 'e' => "La proximité sonore des fins de vers indique la rime."],
                    ['q' => "Quel mot évoque le plus le calme ?", 'c' => ["صخب", "ضجيج", "عاصفة", "نسيم"], 'a' => 3, 'e' => "« نسيم » évoque la douceur et l'air paisible, les autres mots sont forts et agités."],
                    ['q' => "Quelle est la meilleure manière d'expliquer un vers difficile à un débutant ?", 'c' => ["changer tous les mots sans lire le reste du poème", "comprendre ses mots grâce au contexte, puis reformuler le sens simplement", "apprendre le vers par cœur uniquement", "se fier à la rime seule"], 'a' => 1, 'e' => "Le contexte aide à comprendre les mots, puis on résume l'idée en termes simples."],
                    ['q' => "Le poète décrit la pluie comme « رسائل من السماء ». Qu'ajoute cette image ?", 'c' => ["elle prouve que la pluie est faite de feuilles écrites", "elle donne à la pluie l'air de porter un message ou un cadeau du ciel", "elle supprime la description de la pluie", "elle transforme le poème en information scientifique"], 'a' => 1, 'e' => "L'image figurée donne à la pluie une valeur affective qui dépasse l'eau tombant des nuages."],
                    ['q' => "Après lecture d'un court poème, quelle est la meilleure question pour vérifier votre compréhension ?", 'c' => ["Combien de pages compte le recueil ?", "Quel est le thème, quelle émotion se dégage, et comment le poète a-t-il utilisé la langue et les images pour les servir ?", "Quel est le prix du livre ?", "De quelle couleur est la couverture ?"], 'a' => 1, 'e' => "Cette question réunit les aspects essentiels de la compréhension poétique : thème, émotion, langue et images."],
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
