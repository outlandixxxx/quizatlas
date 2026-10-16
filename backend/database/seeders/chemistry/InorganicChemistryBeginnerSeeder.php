<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class InorganicChemistryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'inorganic-chemistry')->firstOrFail();

        $settings = [
            ['duration' => 20, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 30, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 30, 'passing_score' => 60],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Les bases de la chimie inorganique",
                'description' => "Distinguer substances inorganiques, ions et composés ioniques simples, et écrire leurs formules.",
                'questions' => [
                    ['q' => "Parmi ces substances de la cuisine et de l’atelier, laquelle relève de la chimie inorganique ?", 'c' => ["Le glucose C₆H₁₂O₆ du sucre", "L’éthanol des parfums C₂H₅OH", "Le sel de table NaCl", "Le butane des bonbonnes C₄H₁₀"], 'a' => 2, 'e' => "NaCl est un sel minéral. Les trois autres sont des molécules bâties sur un squelette de carbone, domaine de la chimie organique."],
                    ['q' => "Quel est l’intrus dans la liste : fer, cuivre, soufre, zinc ?", 'c' => ["Le soufre des allumettes", "Le cuivre rouge", "Le zinc", "Le fer"], 'a' => 0, 'e' => "Le soufre est un non-métal : solide jaune, cassant, qui ne conduit pas le courant. Les trois autres sont des métaux."],
                    ['q' => "Un atome de sodium cède son électron de valence lors de la formation de NaCl. Quel ion obtient-on ?", 'c' => ["Na⁻", "Na²⁺", "Na²⁻", "Na⁺"], 'a' => 3, 'e' => "Perdre un électron (charge −) laisse un excès de charge positive : on obtient Na⁺, qui a la même structure électronique que le néon."],
                    ['q' => "Pour former l’ion oxyde de MgO, combien d’électrons l’atome d’oxygène capte-t-il ?", 'c' => ["Un seul", "Deux", "Trois, comme l’azote", "Quatre, comme le carbone"], 'a' => 1, 'e' => "Avec six électrons de valence, l’oxygène en capte deux pour atteindre huit : c’est l’ion O²⁻."],
                    ['q' => "Les ions Ca²⁺ et Cl⁻ s’assemblent. Quelle est la formule du composé neutre obtenu ?", 'c' => ["CaCl₂", "CaCl", "Ca₂Cl", "Ca₂Cl₂"], 'a' => 0, 'e' => "Une charge +2 doit être compensée par deux charges −1, donc deux ions chlorure pour un ion calcium. Ca₂Cl₂ n’est que CaCl doublé, qui ne compense pas les charges."],
                    ['q' => "Pourquoi un cristal de NaCl est-il globalement neutre alors qu’il est formé d’ions ?", 'c' => ["Il ne renferme que des ions positifs, avec des électrons libres", "Les ions négatifs y sont un peu plus nombreux que les positifs", "Le nombre de charges + y est égal au nombre de charges −", "Au contact de l’air, les ions redeviennent des atomes neutres"], 'a' => 2, 'e' => "La formule est établie pour que la somme des charges soit nulle. Les ions restent des ions dans le cristal, ils ne redeviennent pas des atomes."],
                    ['q' => "Quelle propriété est typique d’un solide ionique comme NaCl ?", 'c' => ["Il conduit bien le courant même à l’état solide", "Il fond à haute température (801 °C)", "Il est mou et fond vers 30 °C comme la cire", "Il est formé de petites molécules isolées"], 'a' => 1, 'e' => "L’attraction électrostatique entre ions est forte dans le réseau cristallin : il faut beaucoup d’énergie pour le détruire."],
                    ['q' => "Pourquoi une solution de sel conduit-elle le courant alors que le sel solide ne le fait pas ?", 'c' => ["Les atomes de sodium y redeviennent métalliques et libèrent des électrons", "L’eau apporte des électrons libres qui circulent", "Des molécules de NaCl se déplacent dans la solution", "Les ions Na⁺ et Cl⁻ deviennent libres de se déplacer"], 'a' => 3, 'e' => "Dans le cristal les ions sont bloqués. Dissous, ils bougent et transportent la charge : c’est un courant d’ions, pas d’électrons libres."],
                    ['q' => "Lequel de ces composés est un oxyde ?", 'c' => ["HCl", "NaOH", "CaO", "NaCl"], 'a' => 2, 'e' => "Un oxyde associe l’oxygène à un seul autre élément. NaOH contient aussi de l’hydrogène : c’est un hydroxyde."],
                    ['q' => "Dans la molécule de dioxygène O₂, que signifie l’indice 2 ?", 'c' => ["Deux atomes d’oxygène liés par une liaison", "Une charge 2− portée par l’oxygène", "Deux molécules d’oxygène voisines", "Deux électrons de valence sur l’atome"], 'a' => 0, 'e' => "L’indice compte les atomes dans la molécule ; une charge s’écrirait en exposant, comme dans O²⁻."],
                    ['q' => "Un composé ionique contient des ions Mg²⁺ et O²⁻. Quelle est sa formule ?", 'c' => ["Mg₂O", "MgO₂", "Mg₂O₂", "MgO"], 'a' => 3, 'e' => "Les charges +2 et −2 se compensent une à une, d’où le rapport 1 pour 1. On écrit la formule la plus simple, pas Mg₂O₂."],
                    ['q' => "Quel nom correspond à CaCO₃, constituant principal du calcaire ?", 'c' => ["Oxyde de calcium (chaux vive)", "Carbonate de calcium (calcaire, craie)", "Hydroxyde de calcium (chaux éteinte)", "Sulfate de calcium (plâtre)"], 'a' => 1, 'e' => "CO₃²⁻ est l’ion carbonate. Associé à Ca²⁺, il donne le carbonate de calcium, présent dans la craie et le marbre."],
                    ['q' => "Un métal réagit avec un non-métal pour former un composé ionique. Que se passe-t-il ?", 'c' => ["Le métal capte des électrons et le non-métal en cède", "Les deux atomes mettent leurs électrons en commun", "Le métal cède des électrons au non-métal", "Le non-métal cède des protons au métal"], 'a' => 2, 'e' => "Le métal, peu attaché à ses électrons externes, les perd et devient cation ; le non-métal les capte et devient anion. Le partage d’électrons, lui, est la liaison covalente."],
                ],
            ],
            [
                'title' => "Oxydes, acides, bases et sels",
                'description' => "Reconnaître acides, bases, oxydes et sels, utiliser le pH et écrire des réactions de neutralisation simples.",
                'questions' => [
                    ['q' => "Quelle est la formule de l’acide chlorhydrique, aussi appelé « esprit de sel » ?", 'c' => ["HClO₃", "H₂SO₄", "HClO₄", "HCl"], 'a' => 3, 'e' => "Les acides sans oxygène portent le suffixe « hydrique » : HCl dissous dans l’eau. HClO₃ et HClO₄ sont des acides oxygénés."],
                    ['q' => "À 25 °C, le jus de citron a un pH voisin de 2. Que peut-on en conclure ?", 'c' => ["Il est acide : H₃O⁺ y est plus abondant que OH⁻", "Il est basique, car 2 est un petit nombre", "Il est neutre, comme l’eau distillée", "Il n’est ni acide ni basique, mais oxydant"], 'a' => 0, 'e' => "Un pH inférieur à 7 à 25 °C signale un milieu acide : il y a davantage d’ions H₃O⁺ que d’ions OH⁻."],
                    ['q' => "Quelle espèce l’hydroxyde de sodium libère-t-il en solution, ce qui explique son caractère basique ?", 'c' => ["Des ions H₃O⁺", "Des ions Cl⁻", "Des ions OH⁻", "Des molécules de dihydrogène"], 'a' => 2, 'e' => "NaOH se dissocie en Na⁺ et OH⁻. Ce sont les ions hydroxyde qui rendent le milieu basique."],
                    ['q' => "Complète l’équation : H₂SO₄ + 2 NaOH → … + 2 H₂O", 'c' => ["Na(SO₄)₂", "Na₂SO₄", "Na₂SO₃, formé avec l’ion sulfite", "Na₂S, formé avec l’ion sulfure"], 'a' => 1, 'e' => "Le sel associe deux Na⁺ et un ion sulfate SO₄²⁻, ce qui équilibre les charges et les atomes (S et O ne changent pas)."],
                    ['q' => "Lequel de ces produits est un sel ?", 'c' => ["Le HNO₃ de l’acide nitrique", "La potasse KOH", "Le salpêtre KNO₃", "Le CO₂ de l’eau gazeuse"], 'a' => 2, 'e' => "Un sel est un composé ionique formé d’un cation (K⁺) et d’un anion (NO₃⁻). HNO₃ est un acide, KOH une base."],
                    ['q' => "Le dioxyde de carbone dissous dans l’eau la rend légèrement acide. Comment classe-t-on CO₂ ?", 'c' => ["Oxyde acide", "Oxyde basique", "Sel", "Base forte"], 'a' => 0, 'e' => "CO₂ + H₂O ⇌ H₂CO₃ : l’oxyde d’un non-métal donne un acide au contact de l’eau. C’est pourquoi l’eau gazeuse pique un peu."],
                    ['q' => "Pour détartrer une bouilloire, on y verse du vinaigre blanc et de petites bulles montent du tartre (CaCO₃). Quel gaz se dégage ?", 'c' => ["Le dihydrogène, comme avec un métal attaqué par un acide", "Le dioxygène, libéré par l’eau qui chauffe", "Le dichlore, présent dans l’eau de Javel", "Le dioxyde de carbone"], 'a' => 3, 'e' => "CaCO₃ + 2 H⁺ → Ca²⁺ + CO₂ + H₂O. Un carbonate attaqué par un acide libère du CO₂, que l’on reconnaît avec l’eau de chaux qui se trouble."],
                    ['q' => "Du magnésium plongé dans l’acide chlorhydrique donne des bulles. Quelle équation est correcte ?", 'c' => ["Mg + 2 HCl → MgCl₂ + H₂O", "Mg + 2 HCl → MgCl₂ + H₂", "Mg + HCl → MgCl + H₂", "Mg + 2 HCl → MgH₂ + Cl₂"], 'a' => 1, 'e' => "Le métal est oxydé en Mg²⁺ et les ions H⁺ de l’acide sont réduits en H₂. Les autres équations ne conservent pas tous les atomes ou inventent un produit."],
                    ['q' => "On ajoute de l’oxyde de calcium CaO à de l’eau et le pH monte. Quelle espèce basique s’est formée ?", 'c' => ["Ca(OH)₂, chaux éteinte", "CaCl₂, sel de déneigement des routes", "CaCO₃, calcaire dissous dans l’eau", "CaH₂, hydrure de calcium"], 'a' => 0, 'e' => "CaO + H₂O → Ca(OH)₂ : l’oxyde d’un métal est basique car il donne un hydroxyde."],
                    ['q' => "Quel volume de solution de NaOH à 0,10 mol/L faut-il pour neutraliser 20 mL d’une solution de HCl à 0,15 mol/L ?", 'c' => ["13 mL", "20 mL", "30 mL", "300 mL"], 'a' => 2, 'e' => "n(HCl) = 0,15 × 0,020 = 3,0 × 10⁻³ mol. Il faut autant de NaOH : V = 3,0 × 10⁻³ / 0,10 = 0,030 L, soit 30 mL."],
                    ['q' => "En ajoutant du citron, le pH d’une boisson passe de 5 à 3. Comment évolue la concentration en ions H₃O⁺ ?", 'c' => ["Elle double, puisque 5 − 3 = 2", "Elle est multipliée par 100", "Elle est divisée par 100 car le pH baisse", "Elle est divisée par 2, le pH ayant diminué"], 'a' => 1, 'e' => "[H₃O⁺] = 10⁻ᵖᴴ : on passe de 10⁻⁵ à 10⁻³ mol/L. Deux unités de pH en moins, cela fait cent fois plus d’ions."],
                    ['q' => "Quelle est la formule de l’acide nitrique ?", 'c' => ["HNO₂", "NH₃", "HNO", "HNO₃"], 'a' => 3, 'e' => "L’ion nitrate est NO₃⁻, donc un seul H⁺ suffit. HNO₂ est l’acide nitreux et NH₃ l’ammoniac."],
                    ['q' => "Parmi ces solutions de même concentration, laquelle a le pH le plus élevé ?", 'c' => ["NaOH", "NaCl", "HCl", "CH₃COOH"], 'a' => 0, 'e' => "La soude est une base forte (pH proche de 13 à 0,1 mol/L). NaCl est neutre, HCl et l’acide éthanoïque sont acides."],
                ],
            ],
            [
                'title' => "Métaux, non-métaux et propriétés",
                'description' => "Comparer métaux et non-métaux et reconnaître le comportement des alcalins, alcalino-terreux, halogènes et gaz nobles.",
                'questions' => [
                    ['q' => "Pourquoi un fil de cuivre conduit-il le courant électrique ?", 'c' => ["Ses protons circulent d’un bout à l’autre du fil", "Ses électrons de valence sont mobiles", "Chaque atome y porte une charge positive fixe", "L’humidité de l’air transporte les charges dans le fil"], 'a' => 1, 'e' => "Dans un métal, des électrons de valence ne sont rattachés à aucun atome en particulier et circulent dans tout le réseau. Les protons restent dans les noyaux."],
                    ['q' => "Un vieux thermomètre à colonne brillante contient un métal liquide à température ambiante. Lequel ?", 'c' => ["Le plomb des anciens tuyaux", "L’étain des soudures", "Le zinc des toitures", "Le mercure"], 'a' => 3, 'e' => "Le mercure fond à −39 °C. Il est toxique, c’est pourquoi on l’a retiré des thermomètres."],
                    ['q' => "Quelles conditions faut-il réunir pour que le fer rouille ?", 'c' => ["La présence simultanée d’eau et de dioxygène", "L’eau seule, sans dioxygène dissous", "Le dioxygène dans un air bien sec", "Une forte chaleur dans le vide"], 'a' => 0, 'e' => "La corrosion demande à la fois de l’eau et du dioxygène. Sur la côte atlantique, le sel de l’air marin accélère encore le phénomène."],
                    ['q' => "L’acier est un alliage. Quels sont ses deux constituants principaux ?", 'c' => ["Fer et cuivre", "Fer et étain", "Fer et carbone", "Fer et aluminium"], 'a' => 2, 'e' => "L’acier est du fer contenant quelques pour cent de carbone au plus. Le fer recouvert de zinc, c’est de l’acier galvanisé, un autre matériau."],
                    ['q' => "Pourquoi le potassium forme-t-il l’ion K⁺ et pas K²⁺ ?", 'c' => ["Deux électrons de valence, le second résiste", "Un seul électron de valence, facile à arracher", "Sept électrons de valence, il en gagne un", "Sa couche externe est déjà pleine"], 'a' => 1, 'e' => "Les alcalins (groupe 1) ont un unique électron externe. Le perdre donne la structure stable de l’argon, alors qu’un second serait très coûteux à arracher."],
                    ['q' => "Quelle équation traduit la réaction du sodium avec l’eau ?", 'c' => ["Na + H₂O → NaO + H₂", "2 Na + 2 H₂O → 2 NaOH + O₂", "2 Na + 2 H₂O → 2 NaOH + 2 H₂", "2 Na + 2 H₂O → 2 NaOH + H₂"], 'a' => 3, 'e' => "Le sodium donne Na⁺ et de l’hydroxyde, et de l’eau il sort du dihydrogène. Seule la dernière équation est équilibrée (4 H de chaque côté) et réaliste."],
                    ['q' => "On plonge successivement du lithium, du sodium et du potassium dans l’eau. Lequel réagit le plus violemment ?", 'c' => ["Le lithium, le plus léger", "Le sodium, au milieu du groupe", "Le potassium", "Les trois, de façon identique"], 'a' => 2, 'e' => "En descendant dans le groupe 1, l’électron externe est plus éloigné du noyau et plus facile à arracher : la réactivité augmente."],
                    ['q' => "Un alcalino-terreux comme le magnésium des feux d’artifice forme quel type d’ion ?", 'c' => ["Un cation portant deux charges positives", "Un anion portant deux charges négatives", "Un cation portant une seule charge positive", "Un anion portant une seule charge négative"], 'a' => 0, 'e' => "Deux électrons de valence, donc deux charges positives après leur perte : Mg²⁺, comme Ca²⁺ ou Sr²⁺."],
                    ['q' => "Quel élément n’appartient pas à la famille des alcalins : lithium, calcium, sodium, potassium ?", 'c' => ["Lithium", "Calcium", "Sodium", "Potassium"], 'a' => 1, 'e' => "Li, Na et K sont des alcalins (groupe 1). Le calcium est un alcalino-terreux (groupe 2)."],
                    ['q' => "Le fluor, le chlore, le brome et l’iode ont sept électrons de valence. Dans quelle colonne du tableau se trouvent-ils ?", 'c' => ["La colonne 1, celle des alcalins", "La colonne 2, celle de Mg et Ca", "La colonne 18, celle des gaz nobles", "La colonne 17"], 'a' => 3, 'e' => "Sept électrons de valence : c’est le groupe 17, celui des halogènes. Le groupe 18 est celui des gaz nobles."],
                    ['q' => "Des paillettes gris-noir dégagent une vapeur violette quand on les chauffe doucement. De quel halogène s’agit-il ?", 'c' => ["L’iode", "Le brome", "Le chlore gazeux", "Le fluor gazeux"], 'a' => 0, 'e' => "Les halogènes passent de gaz (F₂, Cl₂) à liquide (Br₂) puis solide (I₂) quand la taille augmente. La teinture d’iode en dérive."],
                    ['q' => "Du dichlore est ajouté à une solution incolore de bromure de potassium. Que se passe-t-il ?", 'c' => ["Rien, car le dibrome est plus oxydant que le dichlore", "Il se forme du dioxygène et de l’acide bromique", "Cl₂ oxyde Br⁻ : il se forme du dibrome orangé", "Le dichlore se dissout simplement, sans réaction"], 'a' => 2, 'e' => "Cl₂ + 2 Br⁻ → 2 Cl⁻ + Br₂. Le chlore est meilleur oxydant que le brome : il lui arrache ses électrons."],
                    ['q' => "Le difluor est le plus oxydant des halogènes. Quelle explication retient-on ?", 'c' => ["C’est le plus gros atome du groupe", "Son petit atome attire très fort un électron", "Il perd facilement son électron de valence", "Sa couche externe est déjà complète"], 'a' => 1, 'e' => "Chez le fluor, l’électron capté arrive tout près du noyau et y est fortement retenu. L’attraction diminue quand on descend dans le groupe 17."],
                    ['q' => "Pourquoi l’argon ne participe-t-il à presque aucune réaction ?", 'c' => ["Il est trop dense pour entrer en réaction chimique", "Il est liquide dans les conditions ordinaires de température", "Il ne possède aucun électron de valence à partager", "Sa couche externe est complète (8 électrons)"], 'a' => 3, 'e' => "Une couche externe saturée est très stable : l’atome n’a pas d’intérêt à perdre, gagner ou partager des électrons."],
                    ['q' => "On remplit une ampoule à incandescence d’un gaz pour protéger son filament chaud. Lequel convient ?", 'c' => ["Le dioxygène", "Le dichlore", "L’argon", "Le dihydrogène"], 'a' => 2, 'e' => "Un gaz noble ne réagit pas avec le filament. Le dioxygène l’oxyderait, le dichlore l’attaquerait et le dihydrogène est inflammable."],
                    ['q' => "Le sodium est un métal très réactif, le chlore (3e période, comme lui) est un non-métal. Comment évolue le caractère métallique de Na à Cl ?", 'c' => ["Il diminue", "Il augmente", "Il reste constant", "Il passe par un maximum au milieu"], 'a' => 0, 'e' => "À gauche de la période, les éléments cèdent facilement leurs électrons de valence ; à droite, ils tendent à en capter."],
                    ['q' => "Na⁺, Mg²⁺ et l’atome de néon ont un point commun. Lequel ?", 'c' => ["Le même nombre de protons", "Le même nombre de neutrons", "Un cortège de dix électrons chacun", "La même charge globale"], 'a' => 2, 'e' => "Na : 11 − 1 = 10 électrons ; Mg : 12 − 2 = 10 ; Ne : 10. Même cortège électronique, mais des noyaux différents."],
                    ['q' => "Un bâton jaune se casse net, ne conduit pas le courant et fond vers 115 °C : c’est du soufre. Dans quelle catégorie le range-t-on ?", 'c' => ["Non-métal", "Métal alcalin", "Métal de transition", "Gaz noble"], 'a' => 0, 'e' => "Cassant et isolant, il n’est ni malléable ni conducteur : ce sont des caractères de non-métal."],
                ],
            ],
            [
                'title' => "Nomenclature et formules des composés",
                'description' => "Nommer et écrire des formules de composés ioniques, avec ions polyatomiques et métaux à plusieurs charges.",
                'questions' => [
                    ['q' => "La rouille contient surtout Fe₂O₃. Quel est le nom correct de ce composé ?", 'c' => ["Oxyde de fer(II), puisqu’il y a deux atomes de fer", "Oxyde de fer(VI), en additionnant les charges négatives", "Oxyde de fer(III)", "Oxyde de fer(V), en additionnant 2 et 3"], 'a' => 2, 'e' => "Trois O²⁻ apportent 6 charges négatives pour deux Fe : chacun est à +3. On précise la charge en chiffre romain."],
                    ['q' => "Quelle est la formule du sulfate d’aluminium, utilisé pour clarifier l’eau ?", 'c' => ["Al₂(SO₄)₃", "Al₃(SO₄)₂, avec les indices inversés", "AlSO₄, charges non compensées", "Al₂(SO₃)₃, formule du sulfite"], 'a' => 0, 'e' => "Il faut équilibrer 2 Al³⁺ (+6) par 3 SO₄²⁻ (−6). L’ion polyatomique répété se met entre parenthèses."],
                    ['q' => "Quel est le nom de (NH₄)₂SO₄, engrais courant ?", 'c' => ["Sulfure d’ammonium", "Sulfite d’ammonium", "Hydrogénosulfate d’ammonium", "Sulfate d’ammonium"], 'a' => 3, 'e' => "Deux ions ammonium NH₄⁺ compensent un ion sulfate SO₄²⁻. Le sulfite serait SO₃²⁻, le sulfure S²⁻."],
                    ['q' => "Quel nom correspond à FeCl₂ ?", 'c' => ["Chlorure ferrique", "Chlorure de fer(II)", "Chlorure de fer(I)", "Chlorure de difer"], 'a' => 1, 'e' => "Deux Cl⁻ pour un Fe : le fer est à +2. FeCl₃ serait le chlorure de fer(III)."],
                    ['q' => "L’ammoniac NH₃ capte un proton. Comment s’appelle l’ion NH₄⁺ obtenu ?", 'c' => ["Nitrate", "Amidure", "Nitrite", "Ammonium"], 'a' => 3, 'e' => "NH₄⁺ est l’ion ammonium, présent dans de nombreux engrais."],
                    ['q' => "Un élève écrit quatre formules. Laquelle est correcte ?", 'c' => ["MgCl₂ : chlorure de magnésium", "NaCO₃ : carbonate de sodium, en simplifiant l’indice", "AlO : oxyde d’aluminium, avec un O pour un Al", "K₂OH : hydroxyde de potassium, avec deux K"], 'a' => 0, 'e' => "Mg²⁺ + 2 Cl⁻ donne bien MgCl₂. Les autres formules correctes seraient Na₂CO₃, Al₂O₃ et KOH."],
                    ['q' => "Quel est le nombre d’oxydation du soufre dans H₂SO₄ ?", 'c' => ["+4, valeur du soufre dans SO₂", "+6", "+8, car il y a quatre oxygènes", "−2, valeur du soufre dans H₂S"], 'a' => 1, 'e' => "La somme doit valoir 0 : 2 × (+1) + n(S) + 4 × (−2) = 0, donc n(S) = +6."],
                    ['q' => "Comment nomme-t-on H₂SO₃ ?", 'c' => ["Acide sulfurique", "Acide sulfhydrique", "Acide sulfureux", "Acide sulfamique"], 'a' => 2, 'e' => "Avec un oxygène de moins que H₂SO₄, le suffixe « -ique » devient « -eux ». H₂S, lui, est l’acide sulfhydrique."],
                    ['q' => "Dans Cu₂O, quel est le nombre d’oxydation de chaque atome de cuivre ?", 'c' => ["+2, comme dans CuO", "−2, comme l’oxygène", "+4, deux fois +2", "+1"], 'a' => 3, 'e' => "L’oxygène vaut −2 et il y a deux cuivres : 2 × n(Cu) − 2 = 0, donc +1. CuO contiendrait du cuivre(II)."],
                    ['q' => "Quel est l’intrus dans la liste suivante : LiF, CO₂, MgO, KBr ?", 'c' => ["LiF", "CO₂", "MgO", "KBr"], 'a' => 1, 'e' => "CO₂ est formé de molécules de non-métaux liées par des liaisons covalentes. Les trois autres associent un métal et un non-métal en un réseau d’ions."],
                    ['q' => "Quelle est la formule de l’oxyde de fer(II) ?", 'c' => ["FeO", "Fe₂O", "Fe₂O₃", "FeO₂"], 'a' => 0, 'e' => "Fe²⁺ et O²⁻ se compensent dans le rapport 1 pour 1. Fe₂O₃ est l’oxyde de fer(III)."],
                ],
            ],
            [
                'title' => "Réactions d’oxydoréduction en chimie inorganique",
                'description' => "Suivre les transferts d’électrons, les nombres d’oxydation et les réactions redox des métaux et de leurs ions.",
                'questions' => [
                    ['q' => "Dans Zn → Zn²⁺ + 2 e⁻, que subit le zinc ?", 'c' => ["Une oxydation", "Une réduction", "Une dilution", "Une fusion"], 'a' => 0, 'e' => "Il perd des électrons : c’est une oxydation. Pour ne pas confondre, retiens que la Réduction, c’est quand on Reçoit des électrons."],
                    ['q' => "Dans Zn + Cu²⁺ → Zn²⁺ + Cu, quelle espèce joue le rôle d’oxydant ?", 'c' => ["Le zinc métallique", "L’ion zinc", "L’ion cuivre(II)", "Le cuivre métallique"], 'a' => 2, 'e' => "L’oxydant capte les électrons : c’est Cu²⁺, qui devient Cu. Le zinc cède les siens, c’est le réducteur."],
                    ['q' => "Quel est le nombre d’oxydation du manganèse dans le permanganate de potassium KMnO₄ ?", 'c' => ["+5, comme dans le manganate", "+7", "+4, comme dans MnO₂", "+2, comme dans Mn²⁺"], 'a' => 1, 'e' => "K vaut +1 et quatre O valent −8 : il faut +7 sur Mn pour que la somme soit nulle."],
                    ['q' => "Le chlore passe de 0 dans Cl₂ à −1 dans Cl⁻. Que peut-on dire ?", 'c' => ["Oxydation : le nombre d’oxydation diminue", "Oxydation : le chlore perd un électron", "Réduction : le chlore cède des électrons", "Réduction : il gagne un électron"], 'a' => 3, 'e' => "Un nombre d’oxydation qui baisse traduit un gain d’électrons : c’est une réduction. Le piège est de croire qu’une baisse correspond à une perte."],
                    ['q' => "Laquelle de ces réactions n’est PAS une réaction d’oxydoréduction ?", 'c' => ["2 Mg + O₂ → 2 MgO", "Ca + 2 H₂O → Ca(OH)₂ + H₂", "HCl + NaOH → NaCl + H₂O", "2 Na + Cl₂ → 2 NaCl"], 'a' => 2, 'e' => "Dans la neutralisation, aucun nombre d’oxydation ne change : H⁺ et OH⁻ se combinent simplement. Les autres mettent en jeu des transferts d’électrons."],
                    ['q' => "Une casserole en aluminium réagit avec un acide : 2 Al + 6 H⁺ → 2 Al³⁺ + 3 H₂. Quelle espèce est le réducteur ?", 'c' => ["Al", "H⁺", "Al³⁺", "H₂"], 'a' => 0, 'e' => "Chaque atome d’aluminium cède 3 électrons : il est oxydé, donc c’est lui le réducteur. Les ions H⁺ sont réduits en H₂."],
                    ['q' => "Quelle est la demi-équation d’oxydation du fer en ion fer(II) ?", 'c' => ["Fe²⁺ + 2 e⁻ → Fe", "Fe + 2 e⁻ → Fe²⁺", "Fe → Fe²⁺ − 2 e⁻", "Fe → Fe²⁺ + 2 e⁻"], 'a' => 3, 'e' => "Une oxydation produit des électrons : ils figurent à droite, avec le signe plus. Les charges sont bien conservées de part et d’autre."],
                    ['q' => "On plonge une lame de fer dans une solution bleue de sulfate de cuivre(II). Qu’observe-t-on ?", 'c' => ["Rien, car le cuivre est meilleur réducteur que le fer", "Du cuivre rouge-orangé se dépose sur la lame", "Un dépôt blanc brillant d’argent sur la lame", "La solution devient plus bleue et la lame grossit"], 'a' => 1, 'e' => "Fe + Cu²⁺ → Fe²⁺ + Cu. Le cuivre métallique se dépose et les ions Cu²⁺, responsables de la couleur bleue, disparaissent peu à peu."],
                    ['q' => "Dans une pile zinc–cuivre, où se produit l’oxydation ?", 'c' => ["Dans le pont salin", "Sur la lame de cuivre", "Sur la lame de zinc, pôle négatif", "Sur les deux lames à la fois"], 'a' => 2, 'e' => "Le zinc, meilleur réducteur, perd ses électrons et alimente le circuit extérieur : c’est le pôle négatif. Le cuivre reçoit les électrons et ses ions se réduisent."],
                    ['q' => "À quoi sert le pont salin dans une pile ?", 'c' => ["Fermer le circuit par la migration d’ions", "Fournir les électrons au circuit extérieur", "Empêcher toute réaction aux électrodes", "Fabriquer du zinc à partir de Zn²⁺"], 'a' => 0, 'e' => "Les électrons circulent dans les fils, les ions dans la solution. Le pont salin équilibre les charges, sans quoi la pile s’arrêterait vite."],
                    ['q' => "Une vis galvanisée (recouverte de zinc) est rayée, mais le fer ne rouille pas. Pourquoi ?", 'c' => ["Le zinc rend l’eau neutre autour de la rayure", "Le zinc s’oxyde avant le fer", "Le zinc forme avec le fer un alliage inoxydable sur la rayure", "Le zinc reste intact et bouche la rayure"], 'a' => 1, 'e' => "Le zinc est un réducteur plus fort que le fer : il est oxydé en priorité et protège le fer. On parle d’anode sacrificielle."],
                    ['q' => "Que signifie le chiffre romain III dans le nom « fer(III) » ?", 'c' => ["Trois atomes de fer", "La 3e période du tableau", "Trois neutrons", "Un nombre d’oxydation de +3"], 'a' => 3, 'e' => "Le chiffre romain indique le nombre d’oxydation, ici la charge de l’ion Fe³⁺ dans un composé ionique."],
                    ['q' => "Pourquoi une solution de sulfate de cuivre est-elle bleue alors qu’une solution de sel de cuisine est incolore ?", 'c' => ["Des électrons d de Cu²⁺ absorbent une partie du visible", "Cu²⁺ est plus gros que Na⁺ et diffuse mieux la lumière", "Na⁺ ne conduit pas aussi bien le courant que Cu²⁺", "Le cuivre se décompose en ions sous l’effet de la lumière"], 'a' => 0, 'e' => "Chez les ions de transition, des électrons d changent de niveau en absorbant certaines couleurs, et l’œil perçoit la couleur complémentaire. Na⁺ n’a pas cette possibilité."],
                    ['q' => "Pourquoi le fer donne-t-il à la fois Fe²⁺ et Fe³⁺ ?", 'c' => ["Il existe deux isotopes de fer de charges différentes", "Il capte 2 ou 3 électrons selon le milieu", "Ses électrons 4s et 3d ont des énergies voisines", "Son nombre de protons varie selon la réaction"], 'a' => 2, 'e' => "Après avoir perdu ses deux électrons 4s, il peut aussi perdre un électron 3d sans trop d’effort : plusieurs ions stables sont possibles."],
                    ['q' => "Un clou en fer est attiré par un aimant. Parmi ces métaux, lequel l’est aussi nettement ?", 'c' => ["Le cuivre", "Le nickel, comme le cobalt", "L’aluminium", "L’argent"], 'a' => 1, 'e' => "Fer, cobalt et nickel sont ferromagnétiques. Cuivre, aluminium et argent ne réagissent pratiquement pas à un aimant."],
                    ['q' => "Du zinc est ajouté à de l’acide chlorhydrique. Quel gaz se dégage et comment le reconnaît-on ?", 'c' => ["Du dioxygène, qui rallume une bûchette incandescente", "Du dioxyde de carbone, qui trouble l’eau de chaux", "Du dichlore, qui décolore un papier pH humide", "Du dihydrogène, qui détone à la flamme"], 'a' => 3, 'e' => "Le zinc réduit les ions H⁺ en H₂. Le test classique est la petite détonation quand on approche une flamme."],
                    ['q' => "On ajoute du nitrate d’argent à une eau : un précipité blanc se forme, noircit à la lumière et résiste à l’acide nitrique. Quel ion est détecté ?", 'c' => ["L’ion sulfate SO₄²⁻", "L’ion carbonate CO₃²⁻", "L’ion chlorure Cl⁻", "L’ion nitrate NO₃⁻"], 'a' => 2, 'e' => "Ag⁺ + Cl⁻ → AgCl, précipité blanc qui noircit à la lumière. Les nitrates sont tous solubles, et un carbonate d’argent se dissoudrait dans l’acide."],
                    ['q' => "Une soupe qui déborde colore la flamme du gaz en jaune vif. Quel cation du sel de cuisine en est responsable ?", 'c' => ["Na⁺", "K⁺", "Cu²⁺", "Ba²⁺"], 'a' => 0, 'e' => "Le sodium colore la flamme en jaune vif. Le potassium donne du violet, le cuivre du vert et le baryum du vert pâle."],
                    ['q' => "On verse de la soude dans une solution de chlorure de fer(III). Quelle est la couleur du précipité de Fe(OH)₃ ?", 'c' => ["Vert pâle", "Bleu ciel", "Blanc laiteux", "Rouille"], 'a' => 3, 'e' => "Fe³⁺ + 3 OH⁻ → Fe(OH)₃, de couleur rouille. Fe²⁺ donne un précipité vert, Cu²⁺ un précipité bleu."],
                    ['q' => "Dans Zn + Cu²⁺ → Zn²⁺ + Cu, on consomme 0,10 mol de zinc. Quelle masse de cuivre se dépose ? (M(Cu) = 64 g/mol)", 'c' => ["3,2 g", "6,4 g", "1,6 g", "8 g"], 'a' => 1, 'e' => "Les coefficients sont 1 pour 1 : il se forme 0,10 mol de cuivre, soit 0,10 × 64 = 6,4 g."],
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
