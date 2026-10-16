<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PeriodicTableBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'periodic-table')->firstOrFail();

        $settings = [
            ['duration' => 30, 'passing_score' => 50],
            ['duration' => 30, 'passing_score' => 55],
            ['duration' => 15, 'passing_score' => 60],
            ['duration' => 30, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 30, 'passing_score' => 65],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Découvrir le tableau périodique",
                'description' => "Repérez l’organisation générale du tableau et lisez les informations d’une case : symbole, nom et numéro atomique.",
                'questions' => [
                    ['q' => "Le numéro atomique de l’oxygène est 8. Que contient le noyau d’un atome d’oxygène ?", 'c' => ["8 protons, plus quelques neutrons", "8 neutrons et aucun proton", "16 protons, soit le double de Z", "8 protons et 8 électrons au centre"], 'a' => 0, 'e' => "Z est le nombre de protons du noyau, et les neutrons s’y ajoutent. Les électrons, eux, circulent autour du noyau et non dedans."],
                    ['q' => "Sur l’étiquette d’un flacon de labo, on lit « Na ». Quel élément contient-il ?", 'c' => ["Du soufre", "Du sélénium", "Du sodium", "De l’azote"], 'a' => 2, 'e' => "Na vient du latin natrium. Le soufre s’écrit S, et l’azote N."],
                    ['q' => "Dans quel ordre les cases du tableau périodique sont-elles rangées ?", 'c' => ["Par masse volumique croissante des corps simples", "Par ordre alphabétique des noms français", "Par date de découverte de chaque élément", "Par nombre de protons croissant"], 'a' => 3, 'e' => "On passe d’une case à la suivante en ajoutant un proton. C’est ce qui donne sa logique à la lecture, ligne après ligne."],
                    ['q' => "Un bijoutier parle de Fe pour désigner un métal du pont de fer. De quel élément s’agit-il ?", 'c' => ["Du fer, d’après le latin ferrum", "Du fluor, pour son symbole F", "Du francium, un métal alcalin", "Du fermium, un élément artificiel"], 'a' => 0, 'e' => "Fe vient de ferrum. Fluor, francium et fermium s’écrivent F, Fr et Fm."],
                    ['q' => "Un atome neutre possède 11 protons. Combien a-t-il d’électrons ?", 'c' => ["10 électrons", "11 électrons", "22 électrons, un par proton", "12 électrons"], 'a' => 1, 'e' => "Un atome est neutre : 11 charges positives sont compensées par 11 charges négatives."],
                    ['q' => "Lequel de ces mots ne désigne pas un élément chimique ?", 'c' => ["Le néon", "L’azote", "Le cuivre", "Laiton"], 'a' => 3, 'e' => "Le laiton est un alliage de cuivre et de zinc, donc un mélange. Il n’a pas de case dans le tableau."],
                    ['q' => "Comment écrit-on correctement le symbole du cobalt ?", 'c' => ["Co", "CO", "Cb", "co"], 'a' => 0, 'e' => "Une majuscule, puis une minuscule. Écrit CO, on lirait carbone et oxygène, c’est-à-dire le monoxyde de carbone."],
                    ['q' => "Quel élément suit le carbone (Z = 6) dans le tableau ?", 'c' => ["Le bore", "L’oxygène", "L’azote", "Le silicium"], 'a' => 2, 'e' => "Après Z = 6 vient Z = 7, l’azote. Le bore (Z = 5) précède le carbone."],
                    ['q' => "Quel élément ouvre le tableau avec le numéro atomique 1 ?", 'c' => ["Hélium", "Hydrogène", "Lithium", "Oxygène"], 'a' => 1, 'e' => "Un seul proton dans le noyau : c’est l’hydrogène. L’hélium en compte deux."],
                    ['q' => "Deux atomes ont le même nombre de protons mais des nombres de neutrons différents. Ce sont :", 'c' => ["deux éléments voisins dans une même ligne", "deux ions de charges différentes", "deux isotopes du même élément", "deux molécules de masses différentes"], 'a' => 2, 'e' => "Le nombre de protons définit l’élément. Le carbone 12 et le carbone 14 sont ainsi deux isotopes du carbone."],
                    ['q' => "Lequel de ces corps simples est gazeux à 20 °C ?", 'c' => ["Le diazote", "Le dibrome", "Le fer", "Le sodium métallique"], 'a' => 0, 'e' => "L’air contient environ 78 % de diazote N₂. Le fer et le sodium sont solides, le dibrome est un liquide brun."],
                    ['q' => "Quel est le seul métal liquide à 20 °C ?", 'c' => ["Le gallium", "Le plomb", "Le magnésium", "Le mercure"], 'a' => 3, 'e' => "Le mercure Hg fond à -39 °C. Le gallium et le césium fondent vers 29 °C et 28 °C : ils sont encore solides à 20 °C."],
                    ['q' => "Un collier porte l’indication « Au 750 ». Quel élément est concerné ?", 'c' => ["L’argent", "L’or", "L’aluminium", "L’argon"], 'a' => 1, 'e' => "Au vient du latin aurum. L’argent, lui, s’écrit Ag, d’après argentum."],
                    ['q' => "Une case porte les mentions 26 et Fe. Que peut-on affirmer d’un atome neutre de fer ?", 'c' => ["Il a 26 neutrons", "Il a 56 protons", "Il a 26 couches électroniques", "Il a 26 électrons"], 'a' => 3, 'e' => "Z = 26 donne 26 protons, donc 26 électrons pour un atome neutre. Le nombre 56 serait le nombre de masse."],
                    ['q' => "Pourquoi le nombre de protons suffit-il à identifier un élément ?", 'c' => ["Parce que tous ses atomes ont la même masse", "Parce que ses électrons ne bougent jamais", "Parce qu’un proton de plus change l’élément", "Parce que ce nombre est inscrit sur chaque atome"], 'a' => 2, 'e' => "6 protons : carbone, 7 protons : azote, quel que soit le nombre d’électrons ou de neutrons."],
                    ['q' => "En 1869, Mendeleïev publie sa classification. Sur quoi la fonde-t-il ?", 'c' => ["Le nombre de protons trouvé dans chaque atome", "La masse atomique et les ressemblances", "La date de découverte de chacun des corps purs", "L’ordre alphabétique des noms latins"], 'a' => 1, 'e' => "Il range par masse croissante en regroupant les éléments semblables, et laisse des cases vides pour des éléments encore inconnus."],
                    ['q' => "Un tableau indique Z = 17 avec le symbole Cl. De quel élément parle-t-on ?", 'c' => ["Le calcium", "Le carbone", "Le chlore", "Le cuivre"], 'a' => 2, 'e' => "Cl pour chlore, avec 17 protons. Calcium, carbone et cuivre s’écrivent Ca, C et Cu."],
                    ['q' => "Combien d’éléments compte le tableau périodique actuel ?", 'c' => ["118", "92", "103", "108"], 'a' => 0, 'e' => "Il va de l’hydrogène (1) à l’oganesson (118). Le numéro 92 est celui de l’uranium, le dernier élément naturel abondant."],
                    ['q' => "Le lithium a Z = 3 et le béryllium Z = 4. Que dire du noyau du béryllium par rapport au lithium ?", 'c' => ["Il contient un électron de plus", "Il contient un proton de plus", "Il contient un proton de moins", "Il porte une couche électronique de plus"], 'a' => 1, 'e' => "Chaque case vers la droite ajoute un proton au noyau. Électrons et couches ne sont pas dans le noyau."],
                ],
            ],

            [
                'title' => "Périodes et groupes",
                'description' => "Apprenez à lire les lignes et les colonnes du tableau et à relier la position d’un élément à sa structure électronique.",
                'questions' => [
                    ['q' => "Une ligne horizontale du tableau périodique s’appelle :", 'c' => ["une période", "un groupe de métaux", "une famille chimique", "un bloc électronique"], 'a' => 0, 'e' => "Lignes = périodes, colonnes = groupes. Une période se lit comme une phrase, de gauche à droite."],
                    ['q' => "On suit du doigt la colonne du fluor, de haut en bas. Quel ensemble d’éléments parcourt-on ?", 'c' => ["Une période", "Un bloc de métaux", "Une série d’isotopes", "Un groupe"], 'a' => 3, 'e' => "Une colonne verticale est un groupe. Celle du fluor est le groupe 17, celui des halogènes."],
                    ['q' => "Le sodium est en période 3. Combien de couches électroniques occupées possède son atome ?", 'c' => ["2 couches", "11 couches", "3 couches", "8 couches"], 'a' => 2, 'e' => "Le numéro de la période donne le nombre de couches occupées. La structure du sodium est 2-8-1."],
                    ['q' => "Combien d’électrons de valence possède un élément du groupe 17 ?", 'c' => ["7 électrons", "17 électrons", "1 électron", "8 électrons"], 'a' => 0, 'e' => "Pour les groupes 13 à 18, on retranche 10 au numéro du groupe : 17 - 10 = 7."],
                    ['q' => "Le magnésium (Z = 12) a la structure 2-8-2. Quelle est sa position dans le tableau ?", 'c' => ["Période 2, groupe 8", "Période 3, groupe 2", "Période 2, groupe 12", "Période 3, groupe 12"], 'a' => 1, 'e' => "Trois couches donnent la période 3, deux électrons externes donnent le groupe 2."],
                    ['q' => "L’azote (Z = 7) a la structure 2-5. Où le trouve-t-on ?", 'c' => ["Période 2, groupe 15", "Période 5, groupe 2 (cinq couches)", "Période 2, groupe 5", "Période 7, groupe 15"], 'a' => 0, 'e' => "Deux couches : période 2. Cinq électrons de valence, et 5 + 10 = 15 : groupe 15."],
                    ['q' => "Les éléments d’une même colonne ont des comportements chimiques voisins, car ils possèdent le même nombre :", 'c' => ["de protons dans le noyau", "d’électrons de valence", "de couches électroniques", "de neutrons dans le noyau"], 'a' => 1, 'e' => "Les électrons de la couche externe déterminent la façon dont l’atome réagit."],
                    ['q' => "Le fluor (période 2) et le chlore (période 3) sont tous deux du groupe 17. Qu’ont-ils en commun ?", 'c' => ["Le même nombre de couches occupées", "Le même numéro atomique", "La même masse atomique", "Le nombre d’électrons de valence"], 'a' => 3, 'e' => "Ils ont 7 électrons de valence chacun, mais 2 et 3 couches, et des numéros atomiques de 9 et 17."],
                    ['q' => "Quel élément est situé en période 2 et dans le groupe 1 ?", 'c' => ["Le lithium", "L’hydrogène", "Le béryllium", "Le sodium"], 'a' => 0, 'e' => "Le lithium a la structure 2-1. Le sodium est dans la même colonne, mais une ligne plus bas."],
                    ['q' => "Le calcium (Z = 20) est dans la même colonne que le magnésium. Combien d’électrons de valence a-t-il ?", 'c' => ["8 électrons", "4 électrons", "1 électron", "2 électrons"], 'a' => 3, 'e' => "Même groupe, donc même nombre d’électrons externes : 2. Sa structure complète est 2-8-8-2."],
                    ['q' => "Un atome a pour structure électronique 2-8-7. De quel élément s’agit-il ?", 'c' => ["Le fluor", "L’argon", "Le chlore", "Le sodium"], 'a' => 2, 'e' => "On compte 2 + 8 + 7 = 17 électrons, donc Z = 17 : c’est le chlore, en période 3 et groupe 17."],
                    ['q' => "Un élève place le potassium (2-8-8-1) en période 1 parce qu’il a un seul électron de valence. Quelle est son erreur ?", 'c' => ["Il confond groupe et numéro atomique", "Il oublie que le potassium est un liquide", "Il compte les neutrons au lieu des électrons", "Il confond la période avec le nombre d’électrons de valence"], 'a' => 3, 'e' => "L’électron de valence donne le groupe, ici le groupe 1. La période est le nombre de couches, soit 4."],
                    ['q' => "Combien de colonnes numérote-t-on dans le tableau actuel ?", 'c' => ["8", "10", "18", "7"], 'a' => 2, 'e' => "La numérotation officielle va de 1 à 18. Les lignes, elles, sont au nombre de 7."],
                    ['q' => "Le carbone et l’oxygène sont voisins sur la même ligne. Que partagent-ils ?", 'c' => ["Le même groupe", "Le même nombre d’électrons de valence", "Le même nombre de couches occupées", "Le même numéro atomique"], 'a' => 2, 'e' => "Même période, donc le même nombre de couches (2). Leurs électrons de valence sont 4 et 6."],
                    ['q' => "Le silicium (Z = 14) est placé juste sous le carbone. Quelle conclusion est correcte ?", 'c' => ["Il est dans la même ligne que le carbone", "Il a aussi 4 électrons de valence", "Il a aussi 6 protons", "Il a aussi 2 couches"], 'a' => 1, 'e' => "Même colonne signifie même groupe (14), donc 4 électrons de valence. Sa structure est 2-8-4."],
                    ['q' => "Quel élément se trouve en période 3 et dans le groupe 18 ?", 'c' => ["L’argon", "Le néon", "Le chlore", "Le krypton"], 'a' => 0, 'e' => "L’argon (2-8-8) a trois couches et huit électrons externes. Le néon est en période 2, le krypton en période 4."],
                    ['q' => "Un élément est en période 4 et dans le groupe 2. Que peut-on dire de son atome ?", 'c' => ["2 couches, 4 électrons de valence", "4 couches, 2 électrons de valence", "4 couches, 4 électrons de valence (groupe 4)", "2 couches, 2 électrons de valence"], 'a' => 1, 'e' => "Période 4 : quatre couches. Groupe 2 : deux électrons de valence. C’est le calcium."],
                    ['q' => "Pour trouver la période d’un atome de structure 2-8-3, que faut-il compter ?", 'c' => ["Le nombre total d’électrons, soit 13", "La somme des deux premières couches, soit 10", "Le nombre de neutrons, soit 14", "Le nombre de couches occupées, soit 3"], 'a' => 3, 'e' => "Trois nombres dans la structure donnent trois couches : période 3. C’est l’aluminium."],
                ],
            ],

            [
                'title' => "Métaux, non-métaux et métalloïdes",
                'description' => "Reconnaissez les grandes catégories d’éléments et associez leur position à quelques propriétés physiques simples.",
                'questions' => [
                    ['q' => "Parmi ces éléments, lequel est un non-métal ?", 'c' => ["Le zinc des gouttières", "Le fer des clous", "Le magnésium des feux d’artifice", "Le soufre"], 'a' => 3, 'e' => "Le soufre est un solide jaune, cassant, qui conduit très mal le courant. Les trois autres sont des métaux."],
                    ['q' => "Un fil de cuivre relie une pile à une ampoule. Quelle propriété du cuivre est mise à profit ?", 'c' => ["Sa faible masse volumique, qui le rend léger", "Sa bonne conductivité électrique", "Son point de fusion très bas, proche de 100 °C", "Sa transparence à la lumière visible"], 'a' => 1, 'e' => "Les électrons circulent facilement dans le cuivre, d’où son usage dans les câbles. Il ne fond pourtant que vers 1085 °C."],
                    ['q' => "Où se situe la plupart des métaux dans le tableau ?", 'c' => ["En haut à droite", "À gauche et au centre", "Dans la dernière colonne", "Sur la première ligne seulement"], 'a' => 1, 'e' => "Les métaux occupent la grande majorité des cases. Les non-métaux sont regroupés en haut à droite."],
                    ['q' => "Le silicium des puces électroniques est un semi-conducteur. Que signifie ce terme ?", 'c' => ["Il isole parfaitement l’électricité, comme le verre", "Il conduit mieux que le cuivre", "Il est gazeux à 20 °C", "Sa conductivité se règle par dopage"], 'a' => 3, 'e' => "Dopé avec des traces d’autres éléments, il laisse passer le courant ou non selon les besoins. Il reste solide à température ambiante."],
                    ['q' => "Quel corps simple est l’intrus parmi Cu, S, Fe et Al ?", 'c' => ["Cu", "Fe", "S", "Al"], 'a' => 2, 'e' => "S est le soufre, un non-métal. Cuivre, fer et aluminium sont des métaux."],
                    ['q' => "Quel élément est classé parmi les métalloïdes ?", 'c' => ["Le silicium", "Le sodium", "Le soufre", "Le chlore"], 'a' => 0, 'e' => "Le silicium se place sur la frontière en escalier entre métaux et non-métaux, avec des propriétés intermédiaires."],
                    ['q' => "On martèle un métal pur jusqu’à obtenir une feuille très mince, sans qu’il se brise. Quelle propriété illustre-t-on ?", 'c' => ["La malléabilité", "La fragilité", "La volatilité", "La solubilité"], 'a' => 0, 'e' => "Un métal malléable se déforme sans se rompre : c’est ainsi qu’on fabrique les feuilles d’or ou d’aluminium."],
                    ['q' => "Quelle description convient à un non-métal solide comme le soufre ?", 'c' => ["Malléable, brillant et ductile", "Dense, ductile et bon conducteur de chaleur", "Cassant et mauvais conducteur du courant", "Brillant et bon conducteur d’électricité"], 'a' => 2, 'e' => "Frappé, le soufre s’émiette. Il ne conduit pratiquement ni le courant ni la chaleur."],
                    ['q' => "L’hydrogène est placé en haut du groupe 1. Est-ce un métal alcalin ?", 'c' => ["Oui, c’est le plus léger des métaux", "Non, c’est un non-métal gazeux", "Oui, il conduit le courant comme le sodium", "Non, son atome n’a aucun électron"], 'a' => 1, 'e' => "Il a un électron de valence comme les alcalins, mais c’est un gaz non métallique : sa place en tête du groupe 1 est un compromis."],
                    ['q' => "Pour fabriquer une casserole qui chauffe vite et de façon régulière, quel matériau choisit-on plutôt ?", 'c' => ["Un non-métal comme le soufre", "Un gaz inerte comme l’argon", "Un métal comme l’aluminium", "Un solide cassant comme le phosphore"], 'a' => 2, 'e' => "Les métaux conduisent bien la chaleur. L’aluminium est léger et bon conducteur, d’où son usage en cuisine."],
                ],
            ],

            [
                'title' => "Alcalins, halogènes et gaz nobles",
                'description' => "Découvrez les familles des groupes 1, 2, 17 et 18 et comprenez pourquoi leurs atomes forment ou non des ions.",
                'questions' => [
                    ['q' => "Quel métal alcalin trouve-t-on dans le sel de cuisine NaCl ?", 'c' => ["Le sodium", "Le potassium", "Le calcium", "Le chlore"], 'a' => 0, 'e' => "Na est le sodium, du groupe 1. Le chlore du sel est un halogène, pas un alcalin."],
                    ['q' => "Quel ion monoatomique le lithium forme-t-il le plus facilement ?", 'c' => ["Li²⁺ en perdant deux électrons", "Li⁻ en gagnant un électron", "Li⁺ en perdant un électron", "Li³⁺ en perdant trois électrons"], 'a' => 2, 'e' => "Il perd son unique électron de valence et adopte la structure stable de l’hélium."],
                    ['q' => "On plonge un petit morceau de sodium dans l’eau. Quel gaz se dégage ?", 'c' => ["Le dioxygène", "Le dichlore", "Le diazote", "Le dihydrogène"], 'a' => 3, 'e' => "2 Na + 2 H₂O → 2 NaOH + H₂. Le dihydrogène formé peut même s’enflammer."],
                    ['q' => "Quelle équation traduit correctement la formation de l’ion calcium ?", 'c' => ["Ca → Ca²⁺ + 2 e⁻", "Ca → Ca²⁻ + 2 e⁻", "Ca + 2 e⁻ → Ca²⁺", "Ca → Ca⁺ + 2 e⁻"], 'a' => 0, 'e' => "Le calcium perd deux électrons : la charge 2+ apparaît et les électrons figurent parmi les produits. Les autres écritures ne conservent pas la charge."],
                    ['q' => "Pourquoi conserve-t-on le potassium sous huile ?", 'c' => ["Il s’évapore à température ambiante", "Il fond à la lumière du jour", "Il devient radioactif au soleil", "Il s’oxyde vite à l’air humide"], 'a' => 3, 'e' => "Dioxygène et vapeur d’eau l’attaquent rapidement. L’huile sert d’écran protecteur."],
                    ['q' => "Dans quel groupe se trouvent les halogènes (F, Cl, Br, I) ?", 'c' => ["Le groupe 1", "Le groupe 17", "Le groupe 2", "Le groupe 16"], 'a' => 1, 'e' => "Les halogènes forment l’avant-dernière colonne, avec 7 électrons de valence."],
                    ['q' => "Un atome de chlore (7 électrons de valence) rencontre un atome de sodium. Que devient le chlore ?", 'c' => ["Il perd un électron", "Il perd sept électrons", "Il gagne deux électrons", "Il gagne un électron"], 'a' => 3, 'e' => "En captant l’électron du sodium, il atteint 8 électrons de valence et devient l’ion Cl⁻."],
                    ['q' => "Quel halogène est liquide à 20 °C ?", 'c' => ["Le chlore", "Le brome", "L’iode", "Le fluor"], 'a' => 1, 'e' => "Le dibrome est un liquide brun-rouge. Fluor et chlore sont gazeux, l’iode est solide."],
                    ['q' => "Quel gaz, plus léger que l’air, gonfle les ballons de fête sans risque d’incendie ?", 'c' => ["L’hydrogène", "L’argon", "Le diazote", "L’hélium"], 'a' => 3, 'e' => "L’hélium est inerte. L’hydrogène est inflammable, l’argon est plus lourd que l’air et le diazote a presque la même densité que lui."],
                    ['q' => "Pourquoi les gaz nobles forment-ils très peu de composés ?", 'c' => ["Leur couche externe est déjà complète", "Ils n’ont presque pas d’électrons", "Ils sont trop rares sur Terre pour réagir", "Ils n’ont qu’une seule couche électronique"], 'a' => 0, 'e' => "Avec 2 ou 8 électrons externes, ils n’ont aucune tendance à en gagner ou à en perdre."],
                    ['q' => "Combien d’électrons de valence l’argon (Z = 18) possède-t-il ?", 'c' => ["18 électrons", "2 électrons", "8 électrons", "7 électrons"], 'a' => 2, 'e' => "Sa structure est 2-8-8 : la dernière couche, saturée, contient 8 électrons."],
                    ['q' => "Le magnésium donne Mg²⁺ et le chlore Cl⁻. Quelle est la formule du chlorure de magnésium ?", 'c' => ["MgCl", "Mg₂Cl", "MgCl₂", "Mg₂Cl₂"], 'a' => 2, 'e' => "Un ion 2+ demande deux ions 1- pour que le solide soit neutre : +2 compensé par 2 × (-1)."],
                    ['q' => "Quel élément est un alcalino-terreux ?", 'c' => ["Le sodium", "L’aluminium", "Le potassium", "Le baryum"], 'a' => 3, 'e' => "Le baryum est du groupe 2, comme Be, Mg, Ca, Sr et Ra. Sodium et potassium sont du groupe 1."],
                    ['q' => "Du lithium au césium, comment évolue la réactivité avec l’eau ?", 'c' => ["Elle diminue en descendant dans la colonne du tableau", "Elle augmente vers le bas", "Elle reste à peu près la même partout", "Elle disparaît pour le césium, trop gros"], 'a' => 1, 'e' => "Plus on descend, plus l’électron externe est loin du noyau et facile à arracher. Le lithium réagit calmement, le césium violemment."],
                    ['q' => "En descendant dans le groupe 17 du fluor à l’iode, que devient la réactivité ?", 'c' => ["Elle augmente", "Elle est identique", "Elle diminue", "Elle devient nulle"], 'a' => 2, 'e' => "Un halogène réagit en captant un électron. Plus l’atome est gros, moins le noyau attire un électron supplémentaire : le fluor est le plus réactif."],
                    ['q' => "Quel est l’intrus parmi Ne, Ar, Kr et Cl ?", 'c' => ["Ne", "Cl", "Ar", "Kr"], 'a' => 1, 'e' => "Cl est le chlore, un halogène réactif. Les trois autres sont des gaz nobles du groupe 18."],
                    ['q' => "Quelle équation montre un atome de chlore qui gagne un électron ?", 'c' => ["Cl + e⁻ → Cl⁻", "Cl → Cl⁻ + e⁻", "Cl + e⁻ → Cl⁺", "Cl → Cl⁺ + 2 e⁻"], 'a' => 0, 'e' => "Un électron s’ajoute à gauche et la charge négative apparaît à droite. Dans les autres écritures, la charge n’est pas conservée."],
                    ['q' => "Un élément de la troisième période forme l’ion X²⁺. Lequel est-ce ?", 'c' => ["Le sodium", "Le magnésium", "L’aluminium", "Le calcium"], 'a' => 1, 'e' => "Le magnésium (groupe 2) perd deux électrons. Le sodium donne 1+, l’aluminium 3+, et le calcium est en période 4."],
                    ['q' => "Le potassium et le fluor forment un composé ionique. Quelle est sa formule ?", 'c' => ["KF", "K₂F", "KF₂", "K₂F₂"], 'a' => 0, 'e' => "K⁺ et F⁻ portent des charges opposées de même valeur : un ion de chaque suffit."],
                    ['q' => "Les ions Na⁺ et Mg²⁺ ont tous deux 10 électrons. Quelle est leur structure électronique ?", 'c' => ["2-8-1", "2-8-2", "2-8", "2-8-8"], 'a' => 2, 'e' => "10 électrons se répartissent en 2 puis 8, soit la structure du néon."],
                ],
            ],

            [
                'title' => "Tendances dans le tableau périodique",
                'description' => "Observez l’évolution du rayon atomique, de l’électronégativité et du caractère métallique selon la position dans le tableau.",
                'questions' => [
                    ['q' => "En descendant dans une colonne, comment évolue le rayon atomique ?", 'c' => ["Il diminue peu à peu", "Il reste à peu près constant", "Il varie sans règle précise", "Il augmente"], 'a' => 3, 'e' => "Chaque période ajoute une couche, donc les électrons externes s’éloignent du noyau."],
                    ['q' => "Quel atome est le plus gros : Na, Mg ou Cl ?", 'c' => ["Na", "Mg", "Cl", "Ils ont la même taille"], 'a' => 0, 'e' => "Ils sont tous de la période 3, et le rayon diminue de gauche à droite. Na est le plus à gauche."],
                    ['q' => "Pourquoi le rayon atomique diminue-t-il du lithium au fluor, le long de la période 2 ?", 'c' => ["Les atomes perdent une couche à chaque case", "Le noyau plus chargé attire mieux les électrons", "Le noyau compte moins de protons à chaque case parcourue", "Les électrons sont de moins en moins nombreux"], 'a' => 1, 'e' => "Le nombre de couches reste égal à 2, mais le noyau gagne un proton à chaque case et resserre le nuage d’électrons."],
                    ['q' => "Quel est l’élément le plus électronégatif du tableau ?", 'c' => ["L’oxygène", "Le chlore", "Le fluor", "L’azote"], 'a' => 2, 'e' => "Le fluor attire le plus fortement les électrons d’une liaison : 3,98 sur l’échelle de Pauling."],
                    ['q' => "Quel classement est donné par électronégativité croissante ?", 'c' => ["Na < Mg < Cl", "Cl < Mg < Na", "Mg < Cl < Na", "Na < Cl < Mg"], 'a' => 0, 'e' => "L’électronégativité augmente vers la droite d’une période. Valeurs de Pauling : Na 0,93 ; Mg 1,31 ; Cl 3,16."],
                    ['q' => "Parmi O, S et Se, lequel est le plus électronégatif ?", 'c' => ["Le soufre", "Le sélénium", "L’oxygène", "Ils ont la même valeur"], 'a' => 2, 'e' => "Dans un groupe, l’électronégativité diminue vers le bas. L’oxygène, tout en haut, l’emporte."],
                    ['q' => "Parmi les halogènes F, Cl, Br et I, lequel a le plus petit rayon atomique ?", 'c' => ["Le fluor, qui a le moins de couches", "L’iode, car il est le plus lourd", "Le brome, car il est liquide", "Le chlore, car il est le plus abondant sur Terre"], 'a' => 0, 'e' => "Le fluor n’a que 2 couches et l’iode en a 5 : le rayon augmente avec le numéro de la période."],
                    ['q' => "Le rayon du sodium vaut environ 190 pm, celui du chlore environ 100 pm. Comment l’expliquer ?", 'c' => ["Le chlore a plus de couches électroniques que le sodium", "Le chlore possède davantage de neutrons dans son noyau", "Le chlore a une masse plus faible", "Le noyau du chlore est bien plus chargé"], 'a' => 3, 'e' => "Les deux atomes ont 3 couches. Le noyau du chlore compte 17 protons contre 11, ce qui resserre le nuage électronique."],
                    ['q' => "Quelle grandeur augmente quand on avance vers la droite dans une période ?", 'c' => ["Le rayon atomique", "Le caractère métallique", "L’électronégativité", "Le nombre de couches"], 'a' => 2, 'e' => "Plus on va à droite, plus le noyau attire ses électrons. Le rayon et le caractère métallique diminuent, le nombre de couches ne change pas."],
                    ['q' => "Un élève classe les rayons ainsi : Cs < Rb < K < Na. Où est son erreur ?", 'c' => ["Il a classé les atomes par masse atomique croissante", "Il a inversé : le rayon croît vers le bas", "Il a oublié que le césium est situé au-dessus du sodium", "Il a confondu les périodes avec les groupes du tableau"], 'a' => 1, 'e' => "Du haut vers le bas, ces alcalins se suivent dans l’ordre Na, K, Rb, Cs. Le bon classement est Na < K < Rb < Cs."],
                    ['q' => "Dans quelle direction le caractère métallique augmente-t-il ?", 'c' => ["Vers la droite et vers le haut", "Vers la gauche et vers le haut", "Vers la droite et vers le bas", "Vers la gauche et vers le bas"], 'a' => 3, 'e' => "Les éléments les plus métalliques, comme le césium et le francium, sont en bas à gauche. Les moins métalliques se trouvent en haut à droite."],
                    ['q' => "Pourquoi le potassium réagit-il plus vivement avec l’eau que le sodium ?", 'c' => ["Son électron externe est plus proche du noyau, donc mieux retenu", "Son électron externe est plus éloigné, moins retenu", "Il possède deux électrons de valence", "Son rayon atomique est plus petit que celui du sodium"], 'a' => 1, 'e' => "Il a une couche de plus : l’électron de valence, plus loin du noyau, part plus facilement."],
                    ['q' => "Le calcium et le magnésium sont dans la même colonne. Lequel a le plus grand rayon, et pourquoi ?", 'c' => ["Mg, car il a plus de protons", "Ca, car il a moins de protons", "Mg, car il est situé plus bas dans le groupe", "Ca, car il a une couche de plus"], 'a' => 3, 'e' => "Ca est en période 4 et Mg en période 3 : la couche supplémentaire l’emporte sur la hausse du nombre de protons."],
                ],
            ],

            [
                'title' => "Lire le tableau pour résoudre des problèmes",
                'description' => "Combinez numéro atomique, structure électronique, position et ions pour résoudre de petites situations.",
                'questions' => [
                    ['q' => "Un ion X⁺ possède 18 électrons. De quel élément s’agit-il ?", 'c' => ["L’argon", "Le calcium", "Le potassium", "Le chlore"], 'a' => 2, 'e' => "L’atome neutre avait 19 électrons, donc Z = 19 : potassium. L’argon a 18 électrons mais pas de charge."],
                    ['q' => "Un atome possède 15 protons. Quel est son nom, et dans quel groupe se trouve-t-il ?", 'c' => ["Le silicium, groupe 14 (Z = 14)", "Le soufre, groupe 16", "L’azote, groupe 15", "Le phosphore, groupe 15"], 'a' => 3, 'e' => "Z = 15 est le phosphore, de structure 2-8-5 : 5 électrons de valence, donc groupe 15. L’azote est le groupe 15 aussi, mais Z = 7."],
                    ['q' => "Un élément de la période 3 possède 6 électrons de valence. Quel est-il ?", 'c' => ["Le soufre", "L’oxygène", "Le chlore", "Le sélénium"], 'a' => 0, 'e' => "Structure 2-8-6 : Z = 16, c’est le soufre. Oxygène et sélénium ont aussi 6 électrons de valence, mais dans d’autres périodes."],
                    ['q' => "L’ion S²⁻ a la même structure électronique que quel gaz noble ?", 'c' => ["Le néon", "L’argon", "Le krypton", "L’hélium"], 'a' => 1, 'e' => "Le soufre a 16 électrons, l’ion en a 18 : c’est le nombre d’électrons de l’argon (2-8-8)."],
                    ['q' => "Quels sont les symboles du potassium, du plomb et de l’argent, dans cet ordre ?", 'c' => ["P, Pb, Ar", "K, Pl, Ag", "P, Pb, Ag", "K, Pb, Ag"], 'a' => 3, 'e' => "Ils viennent des noms latins kalium, plumbum et argentum. P est le phosphore, Ar l’argon."],
                    ['q' => "Quel élément a pour symbole Sn ?", 'c' => ["Le soufre", "Le sodium", "L’étain", "Le strontium"], 'a' => 2, 'e' => "Sn vient du latin stannum. Le soufre est S, le sodium Na, le strontium Sr."],
                    ['q' => "Quelle formule est correcte pour l’oxyde d’aluminium, formé d’ions Al³⁺ et O²⁻ ?", 'c' => ["AlO", "Al₂O₃", "Al₃O₂", "AlO₃"], 'a' => 1, 'e' => "Il faut équilibrer les charges : 2 × 3+ = 6+ et 3 × 2- = 6-. D’où deux Al pour trois O."],
                    ['q' => "Un élément conduit bien l’électricité, réagit violemment avec l’eau en libérant du dihydrogène et donne des ions 1+. Où le chercher ?", 'c' => ["Dans le groupe 2", "Dans le groupe 17", "Dans le groupe 18", "Dans le groupe 1"], 'a' => 3, 'e' => "Ce sont les alcalins. Les alcalino-terreux réagissent aussi avec l’eau, mais forment des ions 2+."],
                    ['q' => "Quelle est la structure électronique de l’atome de soufre (Z = 16) ?", 'c' => ["2-8-6", "2-8-8", "2-8-4", "2-6-8"], 'a' => 0, 'e' => "Seize électrons remplissent d’abord 2 puis 8, et les 6 restants vont sur la troisième couche."],
                    ['q' => "On lit : Z = 20, structure 2-8-8-2. Où place-t-on l’élément ?", 'c' => ["Période 2, groupe 8", "Période 4, groupe 20", "Période 4, groupe 2", "Période 8, groupe 2"], 'a' => 2, 'e' => "Quatre couches : période 4. Deux électrons de valence : groupe 2. C’est le calcium."],
                    ['q' => "Deux atomes ont pour numéros atomiques 9 et 17. Quelle affirmation est correcte ?", 'c' => ["Ils sont dans la même période", "Ils sont dans le même groupe", "Ils sont isotopes l’un de l’autre", "Le second a moins de couches que le premier"], 'a' => 1, 'e' => "Z = 9 est le fluor (2-7) et Z = 17 le chlore (2-8-7) : même nombre d’électrons de valence, donc même colonne."],
                    ['q' => "Un élève affirme que le calcium est un alcalin parce que c’est un métal qui réagit avec l’eau. Où est son erreur ?", 'c' => ["Il est du groupe 2, alcalino-terreux", "Le calcium ne réagit pas du tout avec l’eau", "Le calcium est en réalité un halogène", "Le calcium n’est pas du tout un métal"], 'a' => 0, 'e' => "Le calcium réagit bien avec l’eau, plus doucement que le sodium, mais il a 2 électrons de valence : c’est un alcalino-terreux."],
                    ['q' => "Un atome de sodium de nombre de masse 23 (Z = 11) compte :", 'c' => ["11 protons, 23 neutrons, 11 électrons", "12 protons, 11 neutrons, 12 électrons", "11 protons, 12 neutrons, 11 électrons", "23 protons, 11 neutrons et 23 électrons au total"], 'a' => 2, 'e' => "Neutrons = nombre de masse - Z = 23 - 11 = 12, et 11 électrons pour un atome neutre."],
                    ['q' => "On ajoute un électron à un atome de fluor (Z = 9). Quel ion obtient-on ?", 'c' => ["F⁺ avec 8 électrons", "F⁻ avec 10 électrons", "F⁻ avec 8 électrons", "F⁺ avec 10 électrons"], 'a' => 1, 'e' => "9 + 1 = 10 électrons pour 9 protons : charge nette 1-, soit F⁻, qui a la structure du néon."],
                    ['q' => "Un élément est dans la même colonne que le chlore, en période 5. Lequel ?", 'c' => ["L’iode", "Le brome", "Le xénon", "Le tellure"], 'a' => 0, 'e' => "Dans le groupe 17 on descend : F, Cl, Br, I. L’iode est le cinquième, donc en période 5."],
                    ['q' => "Parmi ces atomes, lequel a le plus d’électrons de valence ?", 'c' => ["Le chlore (Z = 17)", "Le sodium (Z = 11)", "Le magnésium (Z = 12)", "Le carbone (Z = 6)"], 'a' => 0, 'e' => "Valences : Na 1, Mg 2, C 4, Cl 7. Il suffit d’écrire la structure de chacun."],
                    ['q' => "Le brome (Z = 35) précède le krypton (Z = 36), gaz noble de la période 4. Quelle est sa position ?", 'c' => ["Groupe 16, période 4", "Groupe 18, période 4", "Groupe 17, période 5", "Groupe 17, période 4"], 'a' => 3, 'e' => "Un élément qui précède un gaz noble est un halogène : il lui manque un électron. Même ligne que le krypton, donc période 4."],
                    ['q' => "Quel est le numéro atomique de l’élément placé juste sous le sodium dans la colonne 1 ?", 'c' => ["12", "19", "17", "37"], 'a' => 1, 'e' => "C’est le potassium, de structure 2-8-8-1, soit 19 électrons. Le 37 est le rubidium, deux cases plus bas."],
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
