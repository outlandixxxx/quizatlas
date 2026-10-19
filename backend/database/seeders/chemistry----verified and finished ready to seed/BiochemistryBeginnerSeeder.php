<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BiochemistryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('major_id', Major::where('slug', 'chemistry')->firstOrFail()->id)->where('name', 'Biochemistry')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 65],
            ['duration' => 20, 'passing_score' => 65],
            ['duration' => 20, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 70],
            ['duration' => 25, 'passing_score' => 70],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Les bases de la biochimie",
                'description' => "Premiers repères : molécules du vivant, énergie cellulaire, eau et enzymes.",
                'questions' => [
                    ['q' => "La biochimie étudie…", 'c' => ["la composition des roches et des minerais terrestres", "les réactions chimiques dans les êtres vivants", "le mouvement des astres et des planètes", "les forces qui s’exercent sur les muscles"], 'a' => 1, 'e' => "Le préfixe « bio » renvoie au vivant : on regarde les molécules et les réactions qui font fonctionner les cellules."],
                    ['q' => "Parmi ces molécules, laquelle sert de carburant rapide aux cellules ?", 'c' => ["L’ADN", "Le cholestérol", "La cellulose", "Le glucose"], 'a' => 3, 'e' => "Le glucose est dégradé pour fabriquer de l’ATP ; l’ADN stocke l’information et la cellulose est une molécule de structure."],
                    ['q' => "Quel atome forme le squelette de la plupart des molécules organiques ?", 'c' => ["Le carbone", "Le calcium", "Le potassium", "Le sodium"], 'a' => 0, 'e' => "Le carbone peut former quatre liaisons et s’enchaîner en longues chaînes ou en cycles, d’où la richesse de la chimie du vivant."],
                    ['q' => "Les protéines sont des chaînes formées par l’enchaînement de…", 'c' => ["nucléotides", "sucres simples", "acides aminés", "acides gras"], 'a' => 2, 'e' => "Chaque maillon d’une protéine est un acide aminé ; les nucléotides, eux, composent l’ADN et l’ARN."],
                    ['q' => "Laquelle de ces familles regroupe l’ADN et l’ARN ?", 'c' => ["Les glucides", "Les acides nucléiques", "Les triglycérides", "Les phospholipides"], 'a' => 1, 'e' => "Leur nom vient du noyau (nucléus) où on les a découverts, et de leur caractère acide dû aux groupes phosphate."],
                    ['q' => "Quel solvant domine dans le cytoplasme d’une cellule ?", 'c' => ["L’eau", "L’éthanol", "L’acétone", "L’huile"], 'a' => 0, 'e' => "Une cellule est composée d’environ 70 % d’eau, et c’est dans cette solution aqueuse que se déroulent la plupart des réactions."],
                    ['q' => "Une macromolécule est…", 'c' => ["une molécule gazeuse", "une molécule dépourvue de carbone", "un ion métallique", "une très grande molécule"], 'a' => 3, 'e' => "Le préfixe « macro » signifie grand : protéines, polysaccharides et acides nucléiques sont de grands assemblages de petites unités."],
                    ['q' => "Trois de ces familles sont des biomolécules organiques. Laquelle n’en est pas une ?", 'c' => ["Les lipides", "Les protéines", "Les sels minéraux", "Les glucides"], 'a' => 2, 'e' => "Les sels minéraux sont des composés inorganiques (ions comme Na⁺ ou Cl⁻), alors que les trois autres sont bâtis sur des chaînes de carbone."],
                    ['q' => "Une cellule musculaire se contracte. Quelle molécule lui fournit l’énergie immédiate ?", 'c' => ["L’ATP", "L’ADN", "Le collagène", "Le cholestérol"], 'a' => 0, 'e' => "L’ATP est la monnaie énergétique de la cellule : on la dépense sur-le-champ pour faire glisser les filaments musculaires."],
                    ['q' => "Que fait une enzyme dans une réaction chimique ?", 'c' => ["Elle ralentit les réactions trop rapides", "Elle se transforme en produit", "Elle apporte l’énergie nécessaire", "Elle accélère la réaction"], 'a' => 3, 'e' => "Une enzyme est un catalyseur biologique : elle rend la réaction plus rapide et ressort intacte, prête à recommencer."],
                ],
            ],
            [
                'title' => "Glucides et énergie",
                'description' => "Du glucose à l’amidon : structure simple, réserves et test à l’iode.",
                'questions' => [
                    ['q' => "Lequel de ces sucres est un monosaccharide ?", 'c' => ["L’amidon", "Le saccharose", "Le fructose", "Le glycogène"], 'a' => 2, 'e' => "Le fructose est un sucre simple, formé d’une seule unité ; le saccharose en compte deux, l’amidon et le glycogène des milliers."],
                    ['q' => "Un glucose et un fructose liés ensemble donnent…", 'c' => ["le saccharose", "le lactose", "le maltose", "la cellulose"], 'a' => 0, 'e' => "Le sucre de table est du saccharose. Le lactose associe glucose et galactose, le maltose deux glucoses."],
                    ['q' => "Après un repas, le foie met en réserve du glucose sous forme de…", 'c' => ["cellulose", "amidon", "chitine", "glycogène"], 'a' => 3, 'e' => "Les animaux stockent leur glucose en glycogène, surtout dans le foie et les muscles ; l’amidon est la réserve des végétaux."],
                    ['q' => "Quel polysaccharide donne leur rigidité aux parois des cellules végétales ?", 'c' => ["L’amidon", "La cellulose", "Le glycogène", "Le saccharose"], 'a' => 1, 'e' => "La cellulose forme des fibres solides : c’est le matériau du bois et du coton, à ne pas confondre avec l’amidon de réserve."],
                    ['q' => "Un marathonien boit une boisson sucrée. Quel sucre simple circule dans son sang pour alimenter ses muscles ?", 'c' => ["Le glycogène", "Le saccharose", "Le glucose", "L’amidon"], 'a' => 2, 'e' => "Les sucres plus complexes sont d’abord coupés par la digestion, et c’est le glucose qui est transporté par le sang jusqu’aux cellules."],
                    ['q' => "Un monosaccharide, un disaccharide et un polysaccharide contiennent respectivement…", 'c' => ["deux, une et plusieurs unités", "une, deux et de nombreuses unités", "une, trois et de nombreuses unités", "une, deux et quatre unités"], 'a' => 1, 'e' => "Mono = un, di = deux, poly = beaucoup : le préfixe grec donne directement le nombre d’unités de sucre."],
                    ['q' => "Chez la pomme de terre, l’amidon sert à…", 'c' => ["constituer une réserve d’énergie", "fabriquer la paroi cellulaire", "transporter le dioxygène", "copier l’information génétique"], 'a' => 0, 'e' => "Les plantes accumulent l’amidon dans leurs tubercules et leurs graines pour y puiser du glucose plus tard."],
                    ['q' => "L’hydrolyse complète de l’amidon dans l’intestin libère finalement…", 'c' => ["du saccharose", "du lactose", "du fructose", "du glucose"], 'a' => 3, 'e' => "L’amidon est un long polymère de glucose : l’ajout d’eau, avec l’aide d’enzymes comme l’amylase, le démonte en unités de glucose."],
                    ['q' => "Quelques gouttes de solution iodée virent au bleu-noir sur une tranche de pomme de terre. Que montre ce test ?", 'c' => ["Elle contient des protéines", "Elle contient de l’amidon", "Elle contient du glucose libre", "Elle contient des lipides"], 'a' => 1, 'e' => "L’iode se glisse dans l’hélice de l’amidon et donne une couleur bleu-noir, ce qui n’arrive ni avec les protéines ni avec le glucose."],
                    ['q' => "Quelle affirmation sur le glycogène est exacte ?", 'c' => ["C’est le polysaccharide de réserve des plantes", "Il forme la paroi des cellules végétales", "Il met du glucose en réserve chez l’animal", "Il est constitué d’unités de fructose"], 'a' => 2, 'e' => "Le glycogène ressemble à l’amidon, mais c’est la version animale : les muscles et le foie le rompent quand il faut du glucose."],
                ],
            ],
            [
                'title' => "Lipides et membranes",
                'description' => "Graisses, phospholipides et cholestérol : réserves d’énergie et construction des membranes.",
                'questions' => [
                    ['q' => "Pourquoi l’huile ne se mélange-t-elle pas à l’eau ?", 'c' => ["Elle est plus acide que l’eau", "Ses molécules sont ionisées", "Elle réagit chimiquement avec l’eau", "Ses molécules sont hydrophobes"], 'a' => 3, 'e' => "Les chaînes carbonées de l’huile sont apolaires : elles n’ont aucune affinité pour l’eau, qui est polaire."],
                    ['q' => "Quel lipide constitue la principale réserve d’énergie à long terme du tissu adipeux ?", 'c' => ["Les phospholipides", "Les triglycérides", "Le cholestérol", "Les cires"], 'a' => 1, 'e' => "Les cellules adipeuses sont remplies de gouttelettes de triglycérides, un stock compact que l’organisme peut utiliser pendant des semaines."],
                    ['q' => "Les membranes cellulaires reposent sur une double couche de…", 'c' => ["phospholipides", "triglycérides", "polysaccharides", "acides nucléiques"], 'a' => 0, 'e' => "Les phospholipides s’alignent en deux feuillets, queues contre queues, pour former la bicouche de base de toute membrane."],
                    ['q' => "Dans la bicouche des phospholipides, où se placent les queues hydrophobes ?", 'c' => ["Face au milieu extracellulaire", "Face au cytoplasme", "Au centre, loin de l’eau", "À la surface, en contact avec l’eau"], 'a' => 2, 'e' => "Les têtes polaires regardent vers l’eau des deux côtés, et les queues se cachent dans l’épaisseur de la membrane."],
                    ['q' => "Quelle molécule, insérée entre les phospholipides, module la fluidité des membranes animales ?", 'c' => ["Le glycérol", "La myoglobine", "La cellulose", "Le cholestérol"], 'a' => 3, 'e' => "Le cholestérol s’intercale entre les chaînes : il évite que la membrane soit trop rigide au froid ou trop fluide au chaud."],
                    ['q' => "Un acide gras saturé se caractérise par…", 'c' => ["la présence d’un atome de soufre", "une chaîne portant plusieurs cycles", "l’absence de double liaison C=C", "une double liaison C=C au milieu de la chaîne"], 'a' => 2, 'e' => "Saturé signifie que chaque carbone porte le maximum d’hydrogènes, donc aucune double liaison dans la chaîne."],
                    ['q' => "Le beurre est solide à température ambiante, l’huile d’olive liquide. Pourquoi ?", 'c' => ["Le beurre contient surtout des protéines", "Ses chaînes saturées s’empilent bien", "L’huile contient beaucoup plus d’eau", "L’huile est constituée de glucides"], 'a' => 1, 'e' => "Les chaînes saturées sont droites et se rangent serrées ; les doubles liaisons des huiles coudent les chaînes et empêchent cet empilement."],
                    ['q' => "Combien d’acides gras sont liés à une molécule de glycérol dans un triglycéride ?", 'c' => ["Trois", "Deux", "Quatre", "Un"], 'a' => 0, 'e' => "Le glycérol porte trois groupes –OH, chacun formant une liaison ester avec un acide gras ; « tri » l’indique."],
                    ['q' => "Trois de ces molécules sont des lipides. Laquelle est l’intrus ?", 'c' => ["Le cholestérol", "Le triglycéride", "Le glycogène", "Le phospholipide"], 'a' => 2, 'e' => "Le glycogène est un polysaccharide, donc un glucide ; les trois autres sont insolubles ou peu solubles dans l’eau."],
                    ['q' => "Un gramme de graisse libère environ 38 kJ, un gramme de glucose environ 17 kJ. Que conclure ?", 'c' => ["Le glucose est la meilleure réserve par gramme", "Les graisses stockent plus d’énergie par gramme", "Les deux réserves sont équivalentes", "Les graisses contiennent moins d’énergie"], 'a' => 1, 'e' => "38 / 17 ≈ 2,2 : à masse égale, les lipides fournissent plus du double d’énergie, ce qui en fait une réserve légère."],
                ],
            ],
            [
                'title' => "Acides aminés et protéines",
                'description' => "De la liaison peptidique au repliement 3D : comment une chaîne devient une protéine fonctionnelle.",
                'questions' => [
                    ['q' => "Combien d’acides aminés standard le code génétique permet-il d’incorporer dans les protéines ?", 'c' => ["20", "4", "64", "46"], 'a' => 0, 'e' => "Vingt acides aminés, assemblés dans des ordres variés, suffisent à construire toutes nos protéines ; 4 est le nombre de bases de l’ADN et 64 celui des codons."],
                    ['q' => "Le groupe –COOH d’un acide aminé réagit avec le groupe –NH₂ d’un autre en libérant de l’eau. Quelle liaison se forme ?", 'c' => ["Une liaison phosphodiester", "Une liaison glycosidique", "Une liaison peptidique", "Une liaison ester"], 'a' => 2, 'e' => "C’est la liaison amide appelée peptidique, qui relie les acides aminés au fil de la chaîne."],
                    ['q' => "La suite Gly–Ala–Ser–Val décrit quel niveau de structure ?", 'c' => ["Secondaire", "Primaire", "Tertiaire", "Quaternaire"], 'a' => 1, 'e' => "Lire la séquence, c’est lister les acides aminés dans l’ordre : c’est la structure primaire, avant tout repliement."],
                    ['q' => "L’hélice α et le feuillet β sont des exemples de structure…", 'c' => ["primaire", "tertiaire", "quaternaire", "secondaire"], 'a' => 3, 'e' => "Ces motifs locaux sont stabilisés par des liaisons hydrogène entre atomes de la chaîne principale : c’est la structure secondaire."],
                    ['q' => "Un blanc d’œuf cuit devient blanc et ferme. Que s’est-il passé pour ses protéines ?", 'c' => ["Elles ont été dénaturées", "Elles ont été hydrolysées en acides aminés", "Elles se sont transformées en lipides", "Elles ont été oxydées en glucose"], 'a' => 0, 'e' => "La chaleur rompt les liaisons faibles qui maintenaient le repliement ; la chaîne se déplie et s’agrège, sans que les liaisons peptidiques cassent."],
                    ['q' => "Quelle liaison ne se rompt PAS quand la chaleur dénature une protéine ?", 'c' => ["Les liaisons hydrogène", "Les interactions hydrophobes", "Les ponts salins", "Les liaisons peptidiques"], 'a' => 3, 'e' => "Les liaisons peptidiques sont covalentes et résistent à un chauffage modéré, contrairement aux interactions faibles qui tiennent le repliement."],
                    ['q' => "Qu’est-ce qui distingue la glycine de l’alanine ?", 'c' => ["Le type de liaison peptidique", "Le nombre de groupes carboxyle", "Leur chaîne latérale R", "L’absence de groupe amine"], 'a' => 2, 'e' => "Tous les acides aminés partagent le même squelette ; seule la chaîne latérale change (H pour la glycine, CH₃ pour l’alanine)."],
                    ['q' => "Un acide aminé hydrophobe, enfoui au cœur d’une protéine, est remplacé par un acide aminé chargé. Que peut-il arriver ?", 'c' => ["Rien, toutes les chaînes latérales se valent", "Le repliement risque d’être modifié", "La chaîne se transforme en acide nucléique", "La liaison peptidique devient glycosidique"], 'a' => 1, 'e' => "Une charge au milieu d’une zone grasse déstabilise le cœur de la protéine, ce qui peut altérer sa forme et sa fonction."],
                    ['q' => "Quelle protéine fixe le dioxygène dans les globules rouges ?", 'c' => ["La kératine", "L’amylase", "Le collagène", "L’hémoglobine"], 'a' => 3, 'e' => "Chaque hémoglobine porte quatre hèmes à fer, donc peut fixer quatre molécules de O₂."],
                    ['q' => "Avec 20 acides aminés différents, combien de dipeptides distincts peut-on construire (l’ordre compte) ?", 'c' => ["400", "40", "200", "190"], 'a' => 0, 'e' => "On choisit 20 possibilités pour la première position et 20 pour la seconde : 20 × 20 = 400. Ala-Gly et Gly-Ala sont deux molécules différentes."],
                ],
            ],
            [
                'title' => "Enzymes et catalyse biologique",
                'description' => "Site actif, énergie d’activation, température, pH et saturation : comprendre les catalyseurs du vivant.",
                'questions' => [
                    ['q' => "Une enzyme accélère une réaction en…", 'c' => ["augmentant la quantité de produit à l’équilibre", "diminuant l’énergie d’activation", "apportant de l’énergie sous forme d’ATP", "déplaçant l’équilibre vers les produits"], 'a' => 1, 'e' => "Elle offre un chemin réactionnel plus facile : la barrière à franchir est plus basse, donc la réaction va plus vite."],
                    ['q' => "Dans la réaction S → P catalysée par une enzyme E, que représente S ?", 'c' => ["Le coenzyme", "L’inhibiteur", "Le produit", "Le substrat"], 'a' => 3, 'e' => "S comme substrat, la molécule de départ qui se lie à E ; P est le produit."],
                    ['q' => "Pourquoi la lipase ne digère-t-elle pas l’amidon ?", 'c' => ["Elle est détruite au contact de l’amidon", "L’amidon est trop petit pour elle", "Son site actif n’épouse pas l’amidon", "Le pH de l’amidon la bloque"], 'a' => 2, 'e' => "La forme et la chimie du site actif ne conviennent qu’à certains substrats, ici les lipides : c’est la spécificité enzymatique."],
                    ['q' => "Une enzyme humaine est optimale vers 37 °C. À 80 °C, que se passe-t-il le plus probablement ?", 'c' => ["Elle est dénaturée et perd son activité", "Elle travaille deux fois plus vite", "Elle change de substrat", "Elle se lie à plus de substrat"], 'a' => 0, 'e' => "Au-delà de l’optimum, l’agitation thermique défait le repliement et le site actif se déforme."],
                    ['q' => "L’amylase salivaire (pH optimal voisin de 7) arrive dans l’estomac, où le pH est voisin de 2. Que lui arrive-t-il ?", 'c' => ["Elle accélère car l’acidité apporte de l’énergie", "Elle change de substrat pour les protéines", "Elle se transforme en pepsine", "Elle est dénaturée et inactivée"], 'a' => 3, 'e' => "Un pH très éloigné de l’optimum modifie les charges du site actif et la forme de l’enzyme : l’activité s’effondre."],
                    ['q' => "Que devient l’enzyme à la fin d’un cycle catalytique ?", 'c' => ["Elle est régénérée", "Elle est incorporée au produit", "Elle est hydrolysée avec le substrat", "Elle est transformée en coenzyme"], 'a' => 0, 'e' => "Un catalyseur ressort intact : une seule enzyme peut ainsi traiter des milliers de substrats par seconde."],
                    ['q' => "Dans le modèle « clé-serrure », la serrure correspond…", 'c' => ["au substrat", "au site actif de l’enzyme", "au produit", "à l’énergie d’activation"], 'a' => 1, 'e' => "La clé, c’est le substrat ; la serrure, le site actif qui n’accepte que la bonne forme."],
                    ['q' => "On augmente la concentration de substrat jusqu’à ce que la vitesse cesse de croître. Que suggère ce plateau ?", 'c' => ["L’enzyme est dénaturée", "Le substrat est épuisé", "Tous les sites actifs sont occupés", "Le produit est devenu le substrat"], 'a' => 2, 'e' => "Quand chaque enzyme travaille déjà à plein régime, un surplus de substrat ne peut plus accélérer la réaction : c’est la saturation."],
                    ['q' => "Une enzyme abaisse l’énergie d’activation d’une réaction de 75 à 50 kJ/mol. Que devient la variation d’enthalpie ΔH de la réaction ?", 'c' => ["Elle ne change pas", "Elle diminue de 25 kJ/mol", "Elle augmente de 25 kJ/mol", "Elle devient nulle"], 'a' => 0, 'e' => "Un catalyseur modifie la hauteur de la barrière, pas l’énergie des réactifs ni des produits : ΔH reste identique."],
                    ['q' => "Une molécule ressemblant au substrat occupe le site actif et ralentit la réaction. De quoi s’agit-il ?", 'c' => ["D’un cofacteur", "D’une dénaturation par la chaleur", "D’un inhibiteur compétitif", "D’un produit de la réaction"], 'a' => 2, 'e' => "Elle entre en compétition avec le vrai substrat pour la même place, d’où le nom d’inhibiteur compétitif."],
                ],
            ],
            [
                'title' => "ADN, ARN et expression de l’information",
                'description' => "Nucléotides, complémentarité des bases, transcription, traduction et mutations.",
                'questions' => [
                    ['q' => "Un nucléotide est formé d’un groupe phosphate, d’une base azotée et d’un…", 'c' => ["glycérol", "acide aminé", "pentose", "acide gras"], 'a' => 2, 'e' => "Ce sucre est le désoxyribose dans l’ADN, le ribose dans l’ARN."],
                    ['q' => "Quelle base azotée trouve-t-on dans l’ARN mais pas dans l’ADN ?", 'c' => ["L’uracile", "La thymine", "La guanine", "La cytosine"], 'a' => 0, 'e' => "L’uracile prend la place de la thymine : dans l’ARN, A s’apparie donc avec U."],
                    ['q' => "Un brin d’ADN porte la séquence 5’-ATGC-3’. Quel est le brin complémentaire, écrit de 3’ vers 5’ ?", 'c' => ["3’-ATGC-5’", "3’-TACG-5’", "3’-UACG-5’", "3’-CGTA-5’"], 'a' => 1, 'e' => "A s’apparie avec T et G avec C, base par base. Il n’y a pas d’uracile dans l’ADN, et CGTA est la lecture inversée du brin."],
                    ['q' => "Dans un ADN double brin, 30 % des bases sont des adénines. Quel est le pourcentage de guanine ?", 'c' => ["30 %", "40 %", "10 %", "20 %"], 'a' => 3, 'e' => "A = T = 30 %, donc G + C = 100 − 60 = 40 %, et comme G = C, on a G = 20 %."],
                    ['q' => "Où se fait la transcription dans une cellule eucaryote ?", 'c' => ["Dans les lysosomes", "Dans le noyau", "Dans l’appareil de Golgi", "Dans la membrane plasmique"], 'a' => 1, 'e' => "L’ADN reste dans le noyau : c’est là qu’on en recopie les gènes en ARN messager."],
                    ['q' => "Que fait l’ARN polymérase ?", 'c' => ["Elle lit l’ARNm pour former une protéine", "Elle recopie l’ADN en nouvel ADN", "Elle coupe l’ADN en nucléotides", "Elle fabrique un ARN d’après l’ADN"], 'a' => 3, 'e' => "L’ARN polymérase lit un brin d’ADN et assemble l’ARN complémentaire ; lire l’ARNm est le travail du ribosome."],
                    ['q' => "Un codon est…", 'c' => ["un triplet de bases de l’ARNm", "une paire de bases complémentaires", "un acide aminé de la protéine", "une enzyme du ribosome"], 'a' => 0, 'e' => "Trois bases consécutives de l’ARNm désignent un acide aminé (ou un signal d’arrêt) : 4³ = 64 combinaisons."],
                    ['q' => "Une région codante d’ARNm compte 300 nucléotides, codon stop exclu. Combien d’acides aminés code-t-elle ?", 'c' => ["300", "900", "100", "30"], 'a' => 2, 'e' => "Un acide aminé pour trois nucléotides : 300 / 3 = 100."],
                    ['q' => "Un ARNm a pour séquence 5’-AUG GCU UAA-3’. Combien d’acides aminés compte la chaîne synthétisée ?", 'c' => ["3", "1", "0", "2"], 'a' => 3, 'e' => "AUG code la méthionine, GCU l’alanine, puis UAA est un codon stop qui ne code aucun acide aminé : 2 au total."],
                    ['q' => "Une mutation ponctuelle change un codon, mais le nouveau codon code le même acide aminé. De quel type de mutation s’agit-il ?", 'c' => ["Non-sens", "Silencieuse", "Faux-sens", "Décalage du cadre de lecture"], 'a' => 1, 'e' => "Le code génétique est redondant, donc la protéine reste identique : la mutation est silencieuse."],
                ],
            ],
            [
                'title' => "ATP et métabolisme énergétique",
                'description' => "ATP, glycolyse, respiration, fermentation et notions d’anabolisme et de catabolisme.",
                'questions' => [
                    ['q' => "Que signifie le sigle ATP ?", 'c' => ["Acide thymine phosphate", "Amidon transformé en protéine", "Acide tricarboxylique phosphaté", "Adénosine triphosphate"], 'a' => 3, 'e' => "Une adénosine (adénine plus ribose) portant trois groupes phosphate, dont les liaisons riches en énergie servent de monnaie à la cellule."],
                    ['q' => "Quelle définition correspond au métabolisme ?", 'c' => ["La digestion et l’absorption des aliments", "La respiration et les échanges gazeux", "L’ensemble des réactions de la cellule", "La production de chaleur par le corps"], 'a' => 2, 'e' => "Il regroupe tout ce que fait la cellule chimiquement, en construisant comme en dégradant ; la digestion n’en est qu’une partie."],
                    ['q' => "Où se déroule la glycolyse dans la cellule ?", 'c' => ["Dans le cytosol", "Dans la matrice mitochondriale", "Dans le noyau", "Dans le réticulum endoplasmique"], 'a' => 0, 'e' => "La glycolyse n’a pas besoin de mitochondries : elle a lieu dans le cytosol, sans dioxygène."],
                    ['q' => "Une molécule de glucose (C₆) subit la glycolyse. Combien de molécules de pyruvate (C₃) obtient-on ?", 'c' => ["1", "2", "3", "6"], 'a' => 1, 'e' => "Six carbones se répartissent en deux fragments de trois : C₆ → 2 C₃."],
                    ['q' => "Quel est le bilan net en ATP de la glycolyse pour une molécule de glucose ?", 'c' => ["4 ATP", "0 ATP", "2 ATP", "36 ATP"], 'a' => 2, 'e' => "On en fabrique 4 mais on en investit 2 au début : 4 − 2 = 2. Les 36 ou 38 ATP concernent la respiration complète."],
                    ['q' => "Dans la chaîne respiratoire mitochondriale, quel rôle joue le dioxygène ?", 'c' => ["Accepteur final des électrons", "Source de carbone", "Fournisseur de phosphate", "Catalyseur de la glycolyse"], 'a' => 0, 'e' => "O₂ récupère les électrons à la fin de la chaîne et forme de l’eau ; sans lui, la chaîne se bloque."],
                    ['q' => "ATP + H₂O → ADP + … Que faut-il écrire à la place des points ?", 'c' => ["AMP", "AMPc", "ADN", "Pᵢ"], 'a' => 3, 'e' => "L’hydrolyse détache le phosphate terminal, appelé phosphate inorganique Pᵢ, et libère de l’énergie."],
                    ['q' => "Lequel de ces processus est un processus anabolique ?", 'c' => ["La glycolyse", "La synthèse de protéines", "La digestion de l’amidon", "La respiration cellulaire"], 'a' => 1, 'e' => "Anabolisme = construire, avec dépense d’ATP ; les trois autres dégradent des molécules (catabolisme)."],
                    ['q' => "Un coureur épuise son glycogène. Quelle autre réserve mobilise-t-il pour continuer à produire de l’ATP ?", 'c' => ["Les graisses", "L’ADN nucléaire", "La cellulose", "Le cholestérol"], 'a' => 0, 'e' => "Les triglycérides du tissu adipeux sont dégradés en acides gras, qui fournissent beaucoup d’ATP, mais plus lentement que le glucose."],
                    ['q' => "En l’absence de dioxygène, des levures transforment le glucose en éthanol et en CO₂. Comment appelle-t-on ce processus ?", 'c' => ["La respiration cellulaire aérobie", "La photosynthèse", "La fermentation alcoolique", "La glycogénolyse"], 'a' => 2, 'e' => "C’est la fermentation alcoolique, à l’origine du pain qui lève et de la bière."],
                ],
            ],
            [
                'title' => "Vitamines, minéraux et équilibre du milieu",
                'description' => "Vitamines, minéraux, eau, pH sanguin et homéostasie.",
                'questions' => [
                    ['q' => "Pourquoi les vitamines ne sont-elles nécessaires qu’en très petites quantités ?", 'c' => ["Elles aident des enzymes à fonctionner", "Elles fournissent le gros de l’énergie", "Elles forment la structure des membranes", "Elles remplacent les protéines manquantes"], 'a' => 0, 'e' => "Beaucoup de vitamines sont des cofacteurs : elles se recyclent comme les enzymes qu’elles assistent et ne sont pas consommées en masse."],
                    ['q' => "Le scorbut des marins d’autrefois était dû à un manque de…", 'c' => ["vitamine A", "vitamine C", "vitamine D", "vitamine K"], 'a' => 1, 'e' => "Sans vitamine C (présente dans les agrumes), le collagène est mal fabriqué : gencives et vaisseaux s’abîment."],
                    ['q' => "Quel élément se trouve au cœur de l’hème de l’hémoglobine ?", 'c' => ["Le zinc", "Le magnésium", "Le cuivre", "Le fer"], 'a' => 3, 'e' => "L’ion fer de l’hème fixe le dioxygène ; le magnésium, lui, est au centre de la chlorophylle."],
                    ['q' => "Les ions Ca²⁺ sont surtout associés à quelle fonction ?", 'c' => ["Le transport du dioxygène", "La synthèse de l’ADN", "La minéralisation des os", "La digestion des lipides"], 'a' => 2, 'e' => "Le calcium est le principal minéral de l’os (phosphate de calcium) et intervient aussi dans la contraction musculaire."],
                    ['q' => "Pourquoi l’eau dissout-elle bien les ions et les sucres ?", 'c' => ["Sa polarité lui permet de les entourer", "Ses molécules apolaires les dispersent", "Sa grande masse molaire les entraîne", "Elle les transforme en gaz"], 'a' => 0, 'e' => "Les pôles δ⁺ et δ⁻ de H₂O s’orientent autour des ions et des groupes –OH, ce qui les maintient en solution."],
                    ['q' => "Le pH du sang d’une personne en bonne santé est voisin de…", 'c' => ["6,0", "7,0", "7,4", "8,4"], 'a' => 2, 'e' => "Le sang est très légèrement basique, avec un pH de 7,4 ; descendre sous 7,0 ou monter au-dessus de 7,8 devient dangereux."],
                    ['q' => "Un liquide a pour pH 7,4 et un autre pH 6,4. Comment se comparent leurs concentrations en H₃O⁺ ?", 'c' => ["10 fois moins dans le second", "10 fois plus dans le second", "Autant dans les deux", "Deux fois plus dans le second"], 'a' => 1, 'e' => "Chaque unité de pH correspond à un facteur 10, et [H₃O⁺] = 10⁻ᵖᴴ : l’acidité du pH 6,4 est dix fois plus élevée."],
                    ['q' => "Dans le sang, le couple CO₂/HCO₃⁻ limite les variations de pH. Comment appelle-t-on un tel système ?", 'c' => ["Un catalyseur", "Un indicateur coloré", "Un oxydant", "Un tampon"], 'a' => 3, 'e' => "Un tampon encaisse l’ajout d’acide ou de base en changeant à peine de pH, car il contient à la fois un acide faible et sa base conjuguée."],
                    ['q' => "Une personne fatiguée et pâle a peu d’hémoglobine dans le sang. Quel minéral manque probablement ?", 'c' => ["Le calcium", "Le sodium", "Le fer", "L’iode"], 'a' => 2, 'e' => "Sans fer, la cellule ne fabrique pas assez d’hème, d’où une baisse d’hémoglobine et d’oxygène transporté (anémie ferriprive)."],
                    ['q' => "Quel terme désigne les mécanismes qui maintiennent stables la température, le pH ou la glycémie ?", 'c' => ["La dénaturation", "L’homéostasie", "La polymérisation", "La fermentation"], 'a' => 1, 'e' => "Homéo (semblable) et stase (état) : l’organisme corrige les écarts pour garder un milieu intérieur constant."],
                ],
            ],
            [
                'title' => "Biochimie : méthodes et interprétation simples",
                'description' => "Tests colorés, spectrophotométrie, étalonnage, dilution et fiabilité d’une mesure.",
                'questions' => [
                    ['q' => "Quel réactif vire au violet en présence de protéines ?", 'c' => ["La liqueur de Fehling", "Le réactif de Biuret", "L’eau iodée", "Le bleu de bromothymol"], 'a' => 1, 'e' => "Le cuivre du réactif de Biuret se complexe avec les liaisons peptidiques en milieu basique et donne une coloration violette."],
                    ['q' => "Un test à la liqueur de Fehling, chauffé, donne un précipité rouge brique. Quel composé est probablement présent ?", 'c' => ["De l’amidon", "Une protéine", "Un triglycéride", "Du glucose"], 'a' => 3, 'e' => "Le glucose est un sucre réducteur : il réduit Cu²⁺ en Cu₂O, d’où le précipité rouge brique."],
                    ['q' => "On teste de l’eau distillée avec le réactif de Biuret en même temps que les échantillons. À quoi sert cet essai ?", 'c' => ["À augmenter la sensibilité du test", "À neutraliser les protéines", "À servir de témoin négatif", "À calibrer la balance"], 'a' => 2, 'e' => "Sans protéines, il doit rester bleu : si ce n’était pas le cas, le réactif ou la verrerie serait en cause."],
                    ['q' => "Selon la loi de Beer-Lambert, A = ε·l·c. Si l’on double la concentration, que devient l’absorbance ?", 'c' => ["Elle double", "Elle est divisée par deux", "Elle reste constante", "Elle est multipliée par quatre"], 'a' => 0, 'e' => "A est proportionnelle à c (pour une même cuve et une même longueur d’onde), dans le domaine de linéarité."],
                    ['q' => "Une droite d’étalonnage vaut A = 0,50 × c (c en mmol/L). Un échantillon a A = 0,35. Quelle est sa concentration ?", 'c' => ["0,175 mmol/L", "1,4 mmol/L", "0,35 mmol/L", "0,70 mmol/L"], 'a' => 3, 'e' => "On isole c : c = A / 0,50 = 0,35 / 0,50 = 0,70 mmol/L. Multiplier par 0,50 donnerait la réponse inverse."],
                    ['q' => "L’absorbance d’un échantillon dépasse celle du standard le plus concentré. Que faire ?", 'c' => ["Prolonger la droite sans réfléchir", "Le diluer puis refaire la mesure", "Retirer le standard", "Changer de longueur d’onde au hasard"], 'a' => 1, 'e' => "En dehors de la gamme d’étalonnage, la relation n’est plus fiable : on dilue, on mesure, puis on multiplie par le facteur de dilution."],
                    ['q' => "On dilue 1 mL d’échantillon dans 9 mL d’eau. La mesure indique 0,20 mmol/L. Quelle est la concentration de l’échantillon initial ?", 'c' => ["0,020 mmol/L", "0,22 mmol/L", "2,0 mmol/L", "1,8 mmol/L"], 'a' => 2, 'e' => "Le volume total est de 10 mL pour 1 mL d’échantillon : facteur 10, donc 0,20 × 10 = 2,0 mmol/L."],
                    ['q' => "Trois dosages donnent 4,8 ; 5,0 et 5,3 mg/L. Quelle est la moyenne, à 0,1 près ?", 'c' => ["5,0 mg/L", "5,3 mg/L", "4,8 mg/L", "15,1 mg/L"], 'a' => 0, 'e' => "(4,8 + 5,0 + 5,3) / 3 = 15,1 / 3 ≈ 5,03, soit 5,0 mg/L ; 15,1 est la somme, pas la moyenne."],
                    ['q' => "Un élève mesure ses échantillons sans avoir fait le blanc au spectrophotomètre. Quelle conséquence est à craindre ?", 'c' => ["Les résultats sont plus précis", "Les valeurs sont faussées par le solvant et la cuve", "L’échantillon se dénature", "La longueur d’onde se décale"], 'a' => 1, 'e' => "Le blanc enlève l’absorbance du solvant et de la cuve ; l’omettre ajoute un décalage à toutes les mesures."],
                    ['q' => "Trois mesures donnent 5,01 ; 5,02 et 5,00 mg/L, alors que la valeur vraie est 6,5 mg/L. Que dire de cette série ?", 'c' => ["Peu répétable et peu exacte", "Exacte mais peu répétable", "Répétable et exacte", "Répétable mais peu exacte"], 'a' => 3, 'e' => "Les valeurs sont très proches entre elles (répétabilité), mais loin de la valeur vraie : une erreur systématique est probable."],
                ],
            ],
            [
                'title' => "Révision générale de biochimie",
                'description' => "Quiz de synthèse : structure, énergie, information génétique et rigueur expérimentale.",
                'questions' => [
                    ['q' => "Quelle association famille – exemple est correcte ?", 'c' => ["Lipide – glycogène", "Glucide – cholestérol", "Acide nucléique – ARNm", "Protéine – triglycéride"], 'a' => 2, 'e' => "L’ARNm est un acide nucléique. Le glycogène est un glucide, le cholestérol un lipide, le saccharose un glucide."],
                    ['q' => "Quelle liaison relie deux nucléotides successifs d’un même brin d’acide nucléique ?", 'c' => ["Phosphodiester", "Liaison peptidique", "Liaison glycosidique", "Liaison hydrogène"], 'a' => 0, 'e' => "Le phosphate d’un nucléotide se lie au sucre du suivant, formant le squelette sucre-phosphate. Les liaisons hydrogène, elles, apparient les deux brins."],
                    ['q' => "Une enzyme accélère une réaction d’un facteur 10⁶. Quelle grandeur reste inchangée ?", 'c' => ["L’énergie d’activation", "L’état d’équilibre", "La vitesse initiale", "Le chemin réactionnel"], 'a' => 1, 'e' => "Un catalyseur accélère l’aller comme le retour : on atteint l’équilibre plus vite, mais l’équilibre est le même."],
                    ['q' => "Le brin matrice d’un gène est 3’-TAC-5’. Quel est le codon correspondant de l’ARNm ?", 'c' => ["5’-UAC-3’", "5’-TAC-3’", "5’-ATG-3’", "5’-AUG-3’"], 'a' => 3, 'e' => "On apparie base à base (T→A, A→U, C→G), et on lit l’ARNm de 5’ vers 3’ : AUG, le codon d’initiation."],
                    ['q' => "Chez un adulte, quel réservoir contient le plus d’énergie utilisable ?", 'c' => ["Les triglycérides adipeux", "Le glycogène du foie et des muscles", "Le glucose circulant dans le sang", "L’ATP présente dans les cellules"], 'a' => 0, 'e' => "Les graisses stockent bien plus d’énergie, au-delà de 100 000 kcal, que le glycogène (environ 2 000 kcal) ou que le stock d’ATP, épuisé en quelques secondes."],
                    ['q' => "Quelle étape du catabolisme du glucose consomme du dioxygène ?", 'c' => ["La glycolyse", "La transcription", "La fermentation lactique", "La chaîne respiratoire"], 'a' => 3, 'e' => "Le dioxygène intervient en bout de chaîne respiratoire, comme accepteur final d’électrons ; la glycolyse se passe très bien sans lui."],
                    ['q' => "Remplacer un seul acide aminé dans une chaîne modifie directement quel niveau de structure ?", 'c' => ["La structure quaternaire", "La structure tertiaire", "La structure primaire", "La structure secondaire"], 'a' => 2, 'e' => "La séquence est la structure primaire ; les niveaux supérieurs ne changent qu’ensuite, par conséquence."],
                    ['q' => "Une élève veut doser le glucose d’un jus de fruits. Quelle démarche est la plus rigoureuse ?", 'c' => ["Une seule mesure, sans standard", "Une gamme d’étalons et plusieurs mesures", "Une mesure sans blanc ni témoin", "Une comparaison à l’œil avec le jus seul"], 'a' => 1, 'e' => "Les étalons permettent de convertir l’absorbance en concentration, et la répétition donne une idée de la dispersion."],
                    ['q' => "Quel énoncé sur l’ATP est exact ?", 'c' => ["Elle porte l’information génétique", "Elle forme la bicouche des membranes", "Elle est un polysaccharide de réserve", "Son hydrolyse libère de l’énergie"], 'a' => 3, 'e' => "La rupture de la liaison avec le phosphate terminal libère de l’énergie utilisable pour le transport actif, la contraction, la biosynthèse."],
                    ['q' => "Hydrolyse de l’amidon, assemblage d’acides aminés, transcription de l’ADN : quelle liste de produits est correcte, dans l’ordre ?", 'c' => ["Glucose, protéine, ARN", "Protéine, glucose, ADN", "ARN, glucose, protéine", "Glucose, lipide, ARN"], 'a' => 0, 'e' => "L’amidon libère du glucose, les acides aminés liés forment une protéine et la transcription fabrique un ARN."],
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
