<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EnvironmentalChemistryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'environmental-chemistry')->firstOrFail();

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
                'title' => "Bases de la chimie environnementale",
                'description' => "Les notions de départ : milieux, polluants, contaminants et concentrations, avec quelques calculs très simples.",
                'questions' => [
                    ['q' => "La chimie environnementale s’intéresse surtout à…", 'c' => ["la composition des étoiles lointaines", "le devenir des substances dans l’environnement", "la fabrication industrielle des alliages métalliques", "la structure interne des noyaux atomiques"], 'a' => 1, 'e' => "On y suit d’où viennent les substances, comment elles se transforment et où elles finissent : air, eau, sols."],
                    ['q' => "Parmi ces éléments, lequel est un compartiment de l’environnement ?", 'c' => ["Le sol", "Le circuit imprimé", "Le cadre d’un vélo", "Le filament d’une ampoule"], 'a' => 0, 'e' => "Les trois grands compartiments étudiés sont l’air, l’eau et les sols ; les objets fabriqués n’en font pas partie."],
                    ['q' => "Une substance d’origine naturelle peut-elle être un polluant ?", 'c' => ["Non, seules les substances de synthèse polluent", "Non, la nature ne produit que des substances sans danger", "Oui, mais seulement si elle est radioactive", "Oui, quand sa concentration devient nuisible"], 'a' => 3, 'e' => "Tout est question de dose : l’arsenic ou les nitrates existent naturellement, mais trop concentrés ils posent problème."],
                    ['q' => "Un échantillon de 2 L d’eau contient 5 mg de nitrate dissous. Quelle est sa concentration massique ?", 'c' => ["10 mg/L", "0,40 mg/L", "2,5 mg/L", "7 mg/L"], 'a' => 2, 'e' => "On divise la masse par le volume : 5 mg ÷ 2 L = 2,5 mg/L."],
                    ['q' => "Un technicien verse un fond de solvant dans l’évier. Quelle est l’erreur ?", 'c' => ["Il a utilisé un récipient en verre pour le transvaser", "Il faut collecter le solvant, pas le rejeter", "Il n’a pas laissé couler l’eau assez longtemps ensuite", "Il aurait dû chauffer le solvant avant de le jeter"], 'a' => 1, 'e' => "Les solvants usagés partent en filière de traitement ; les stations d’épuration ne sont pas conçues pour les éliminer."],
                    ['q' => "Lequel de ces exemples correspond à un contaminant de l’eau d’une rivière ?", 'c' => ["Le dioxygène dissous à saturation", "Les ions calcium d’une eau de source", "Les bulles d’air d’une cascade de montagne", "Du pesticide ruisselé depuis un champ"], 'a' => 3, 'e' => "Un contaminant est une substance apportée dans le milieu par une activité ; l’oxygène et le calcium y sont naturellement présents."],
                    ['q' => "Pourquoi exprime-t-on un niveau de pollution par une concentration ?", 'c' => ["Parce que l’effet dépend de la quantité par volume", "Parce que la présence d’un polluant ne se détecte pas", "Parce que la concentration est identique partout", "Parce qu’un polluant n’agit qu’à l’état solide"], 'a' => 0, 'e' => "Dire « il y en a » ne suffit pas : 1 mg dans une piscine et 1 mg dans un verre n’ont pas le même effet."],
                    ['q' => "Quel est l’intrus parmi ces compartiments de l’environnement ?", 'c' => ["L’atmosphère terrestre", "L’hydrosphère", "Le bureau d’analyses", "Les sols agricoles"], 'a' => 2, 'e' => "Atmosphère, hydrosphère et sols sont des milieux naturels ; un bureau est l’endroit où l’on traite les résultats."],
                    ['q' => "Une démarche d’étude consiste à identifier, mesurer, puis…", 'c' => ["ignorer les résultats obtenus", "jeter les échantillons prélevés", "changer de site pour recommencer", "chercher l’origine et les effets"], 'a' => 3, 'e' => "Mesurer ne suffit pas : on veut comprendre d’où vient la substance et ce qu’elle provoque."],
                    ['q' => "Un échantillon de 500 mL contient 15 mg d’un polluant. Quelle est sa concentration massique ?", 'c' => ["30 mg/L", "7,5 mg/L", "3,0 mg/L", "0,03 mg/L"], 'a' => 0, 'e' => "500 mL = 0,5 L, donc 15 mg ÷ 0,5 L = 30 mg/L. Piège classique : oublier de convertir les mL en L."],
                ],
            ],
            [
                'title' => "Atmosphère et pollution de l’air",
                'description' => "Composition de l’air, polluants de combustion, polluants primaires et secondaires : les bases de la qualité de l’air.",
                'questions' => [
                    ['q' => "Quel gaz est majoritaire dans l’air sec ?", 'c' => ["Le dioxygène", "Le dioxyde de carbone", "Le diazote", "L’argon"], 'a' => 2, 'e' => "Le diazote N₂ représente environ 78 % de l’air sec, contre 21 % pour le dioxygène."],
                    ['q' => "Une chaudière mal réglée émet un gaz incolore et inodore qui se fixe sur l’hémoglobine. Quelle est sa formule ?", 'c' => ["CO", "CO₂", "NO₂", "SO₂"], 'a' => 0, 'e' => "Quand le dioxygène manque, le carbone brûle en CO au lieu de CO₂ : c’est le monoxyde de carbone, très toxique."],
                    ['q' => "Pourquoi le monoxyde de carbone est-il dangereux ?", 'c' => ["Il provoque des brûlures de la peau", "Il rend le sang plus acide", "Il fait baisser la température du corps", "Il bloque le transport du dioxygène"], 'a' => 3, 'e' => "CO se lie à l’hémoglobine bien plus fortement que O₂ : les tissus s’asphyxient sans que la victime ne sente rien."],
                    ['q' => "Complète l’équation de combustion complète du méthane : CH₄ + 2 O₂ → …", 'c' => ["CO₂ + H₂O", "CO₂ + 2 H₂O", "CO + 2 H₂O", "2 CO₂ + 2 H₂O"], 'a' => 1, 'e' => "Il faut 1 C, 4 H et 4 O de chaque côté : CO₂ apporte 2 O et 2 H₂O en apportent 2 de plus."],
                    ['q' => "Les oxydes d’azote NOx se forment surtout…", 'c' => ["lors de la dissolution du sel dans l’eau de mer", "au cours de la congélation de l’eau douce", "pendant la photosynthèse des plantes vertes", "dans un moteur, où N₂ réagit avec O₂"], 'a' => 3, 'e' => "La liaison N≡N est très solide : il faut la chaleur d’un moteur ou d’une chaudière pour que N₂ et O₂ réagissent."],
                    ['q' => "La combustion d’un fioul contenant un peu de soufre libère un gaz polluant. Lequel ?", 'c' => ["SO₂", "SiO₂", "NH₃", "CH₄"], 'a' => 0, 'e' => "Le soufre S brûle en dioxyde de soufre SO₂, précurseur de composés acides."],
                    ['q' => "Lequel de ces polluants se forme dans l’air sous l’action du soleil, plutôt que d’être émis directement ?", 'c' => ["Le monoxyde de carbone", "L’ozone de basse altitude", "Le dioxyde de soufre", "Les suies d’un moteur diesel"], 'a' => 1, 'e' => "Les trois autres sortent directement des sources d’émission ; l’ozone, lui, se forme dans l’air sous l’effet du soleil."],
                    ['q' => "Un polluant secondaire est un polluant qui…", 'c' => ["sort directement d’un pot d’échappement", "provient uniquement d’une source naturelle", "se forme ensuite dans l’air", "est forcément moins toxique que le primaire"], 'a' => 2, 'e' => "« Secondaire » = fabriqué après coup dans l’atmosphère par des réactions chimiques entre polluants primaires."],
                    ['q' => "Les particules fines PM2,5 sont particulièrement surveillées parce qu’elles…", 'c' => ["se déposent dans le nez", "pénètrent profondément dans les poumons", "ne se mesurent que la nuit", "réagissent avec l’eau pour donner de l’ozone"], 'a' => 1, 'e' => "Leur diamètre est inférieur à 2,5 µm : trop petites pour être arrêtées par les voies aériennes supérieures."],
                    ['q' => "L’air contient 0,040 % de CO₂ en volume. Combien cela représente-t-il en ppm (1 ppm = 0,0001 %) ?", 'c' => ["40 ppm", "4 000 ppm", "400 ppm", "4 ppm"], 'a' => 2, 'e' => "0,040 ÷ 0,0001 = 400 : l’air contient environ 400 ppm de CO₂."],
                ],
            ],
            [
                'title' => "Eau : composition, qualité et pollution",
                'description' => "pH, nutriments, oxygène dissous, turbidité : les paramètres simples qui décrivent la qualité d’une eau.",
                'questions' => [
                    ['q' => "À 25 °C, une eau de pH égal à 7 est…", 'c' => ["acide", "basique", "salée", "neutre"], 'a' => 3, 'e' => "Neutre veut dire [H₃O⁺] = [HO⁻] = 10⁻⁷ mol/L, ce qui donne pH 7 à 25 °C."],
                    ['q' => "Une eau a un pH de 8,5 à 25 °C. Que peut-on en dire ?", 'c' => ["Elle est acide", "Elle est basique", "Elle est neutre", "Elle est distillée"], 'a' => 1, 'e' => "Au-dessus de 7, la solution est basique ; le pH d’une eau distillée exposée à l’air est d’ailleurs plutôt proche de 6."],
                    ['q' => "L’eutrophisation d’un lac est provoquée par un apport excessif de…", 'c' => ["nitrates et de phosphates", "sodium et de chlorure", "calcium et de magnésium dissous", "fluor et d’iode"], 'a' => 0, 'e' => "Azote et phosphore sont les nutriments qui limitent la croissance des algues : en excès, elles prolifèrent."],
                    ['q' => "Des algues en excès meurent au fond d’un lac. Que se passe-t-il ensuite ?", 'c' => ["Le pH de l’eau monte jusqu’à 14", "L’eau s’enrichit en dioxygène dissous", "Leur décomposition consomme de l’O₂", "Les nitrates se transforment en sable"], 'a' => 2, 'e' => "Les bactéries qui décomposent les algues respirent : elles pompent l’oxygène, ce qui asphyxie poissons et invertébrés."],
                    ['q' => "On prélève 10 mL d’une solution à 50 mg/L et on complète à 100 mL avec de l’eau. Quelle est la nouvelle concentration ?", 'c' => ["5 mg/L", "0,5 mg/L", "50 mg/L", "500 mg/L"], 'a' => 0, 'e' => "Le volume est multiplié par 10, la concentration est divisée par 10 : 50 ÷ 10 = 5 mg/L (c₁V₁ = c₂V₂)."],
                    ['q' => "Une eau est dite turbide lorsqu’elle…", 'c' => ["est fortement acide en surface", "a un goût salé très marqué", "contient beaucoup de dioxygène dissous", "est trouble à cause de particules"], 'a' => 3, 'e' => "La turbidité se mesure par la lumière diffusée par les particules en suspension (argile, algues, matières organiques)."],
                    ['q' => "Une eau au résidu sec élevé est riche en…", 'c' => ["gaz dissous à saturation", "particules en suspension fines", "sels minéraux dissous", "micro-organismes vivants"], 'a' => 2, 'e' => "On évapore l’eau et on pèse ce qui reste : ce sont les ions dissous, comme Ca²⁺, Mg²⁺ ou HCO₃⁻."],
                    ['q' => "Plus une eau contient de matière organique biodégradable, plus sa DBO (demande biochimique en oxygène) est…", 'c' => ["faible", "élevée", "nulle", "négative"], 'a' => 1, 'e' => "Les micro-organismes ont davantage à dégrader, donc ils consomment davantage de dioxygène : la DBO monte."],
                    ['q' => "Que doit-on faire d’un médicament périmé ?", 'c' => ["Le jeter aux toilettes", "Le verser dans l’évier", "Le diluer avec de l’eau de Javel", "Le rapporter en pharmacie"], 'a' => 3, 'e' => "Les stations d’épuration retiennent mal les molécules pharmaceutiques ; la pharmacie les envoie en incinération."],
                    ['q' => "Quelle concentration en ions H₃O⁺ correspond à un pH de 6 ?", 'c' => ["10⁻⁶ mol/L", "10⁶ mol/L", "6 × 10⁻⁷ mol/L", "0,6 mol/L"], 'a' => 0, 'e' => "[H₃O⁺] = 10⁻ᵖᴴ : pour pH 6, on obtient 10⁻⁶ mol/L."],
                ],
            ],
            [
                'title' => "Sols et contamination",
                'description' => "Comment les polluants se retiennent, migrent ou s’accumulent dans les sols, et comment on s’y prend pour les caractériser.",
                'questions' => [
                    ['q' => "Laquelle de ces situations est une source courante de contamination des sols ?", 'c' => ["Le rayonnement solaire", "Les fuites de cuves", "Le vent d’été", "La rosée du matin"], 'a' => 1, 'e' => "Fuites de cuves, anciennes stations-service ou dépôts sauvages : les hydrocarbures s’infiltrent et restent longtemps dans le sol."],
                    ['q' => "La lixiviation d’un sol, c’est…", 'c' => ["la fusion des roches sous l’effet de la chaleur", "la combustion de l’humus par les micro-organismes", "la formation de nuages au-dessus du sol", "l’entraînement de substances par l’eau"], 'a' => 3, 'e' => "L’eau de pluie qui traverse le sol dissout et emporte certaines espèces, par exemple des nitrates ou des métaux."],
                    ['q' => "L’argile et l’humus retiennent certains polluants à leur surface. Comment appelle-t-on ce phénomène ?", 'c' => ["La sublimation", "L’évaporation", "L’adsorption", "La combustion"], 'a' => 2, 'e' => "Dans l’adsorption, la substance se fixe sur la surface du solide, ce qui ralentit sa migration vers les nappes."],
                    ['q' => "Un sol acide de pH 4,5 est chaulé (ajout de CaCO₃). Quel effet attend-on ?", 'c' => ["Le pH augmente", "Le pH diminue", "Le pH reste à 4,5", "Le sol perd tous ses ions"], 'a' => 0, 'e' => "Le carbonate de calcium est une base : il neutralise une partie des ions H₃O⁺ du sol."],
                    ['q' => "Quel métal toxique contamine parfois les sols autour d’anciennes fonderies ?", 'c' => ["Le sodium", "Le calcium", "Le plomb", "Le potassium"], 'a' => 2, 'e' => "Plomb, cadmium et zinc sont des contaminants classiques des sites métallurgiques ; sodium, calcium et potassium sont des éléments courants et peu toxiques."],
                    ['q' => "Après un violent orage, des pesticides apparaissent dans un ruisseau voisin du champ. Quel phénomène l’explique ?", 'c' => ["La sublimation du sol", "Le ruissellement de l’eau", "La fusion des pesticides", "La photosynthèse des cultures"], 'a' => 1, 'e' => "Quand le sol ne peut plus absorber l’eau, elle ruisselle en surface et emporte les substances présentes."],
                    ['q' => "Quelle pratique limite la migration des pesticides vers la nappe ?", 'c' => ["Épandre juste avant l’orage annoncé", "Doubler la dose pour gagner du temps", "Rincer le pulvérisateur au bord du fossé", "Ne pas épandre avant une forte pluie"], 'a' => 3, 'e' => "Sans pluie imminente, le produit a le temps d’être retenu par le sol et dégradé avant d’être lessivé."],
                    ['q' => "Un sol contient 40 mg de plomb par kilogramme. Quelle masse de plomb y a-t-il dans 250 g de ce sol ?", 'c' => ["10 mg", "160 mg", "1 mg", "0,10 mg"], 'a' => 0, 'e' => "250 g = 0,25 kg, donc 40 × 0,25 = 10 mg."],
                    ['q' => "Repère l’affirmation fausse à propos d’un sol contaminé.", 'c' => ["Il peut transférer des polluants vers les plantes", "Il n’atteint jamais les eaux souterraines", "Il peut libérer des polluants par lixiviation", "Il peut exiger une analyse avant tout traitement"], 'a' => 1, 'e' => "Un polluant mobile traverse le sol avec l’eau et peut atteindre la nappe : c’est justement l’un des risques majeurs."],
                    ['q' => "Un site industriel est soupçonné de contenir des hydrocarbures dans son sol. Quelle est la première étape logique ?", 'c' => ["Brûler la terre sur place", "Recouvrir de terre propre sans analyse", "Prélever et analyser", "Arroser abondamment le terrain"], 'a' => 2, 'e' => "Avant de choisir un traitement, on doit savoir quoi, où et combien : d’où le prélèvement suivi d’analyses."],
                ],
            ],
            [
                'title' => "Effet de serre et changement climatique",
                'description' => "Distinguer l’effet de serre naturel de son renforcement par les émissions humaines, et suivre le carbone dans l’atmosphère et les océans.",
                'questions' => [
                    ['q' => "Quel phénomène retient une partie du rayonnement infrarouge émis par la Terre ?", 'c' => ["La marée", "La photosynthèse", "Le volcanisme sous-marin", "L’effet de serre"], 'a' => 3, 'e' => "Certains gaz de l’atmosphère absorbent l’infrarouge puis le réémettent, notamment vers le sol : c’est l’effet de serre."],
                    ['q' => "Lequel de ces gaz est un gaz à effet de serre ?", 'c' => ["Le méthane CH₄", "Le diazote N₂", "L’argon Ar", "Le dioxygène O₂"], 'a' => 0, 'e' => "Les molécules polyatomiques comme CH₄ ou CO₂ absorbent l’infrarouge ; N₂ et O₂, très symétriques, n’interagissent pratiquement pas avec lui."],
                    ['q' => "La combustion complète d’une mole de CH₄ (16 g) donne une mole de CO₂. Quelle masse de CO₂ obtient-on, sachant M(CO₂) = 44 g/mol ?", 'c' => ["16 g", "22 g", "44 g", "176 g"], 'a' => 2, 'e' => "Une mole de CO₂ pèse 44 g ; la masse de CO₂ dépasse donc celle du méthane brûlé, car il a fixé du dioxygène."],
                    ['q' => "Quel gaz à effet de serre est notamment émis par les ruminants et les rizières ?", 'c' => ["Le dioxyde de soufre", "Le méthane", "Le monoxyde de carbone", "L’ozone stratosphérique"], 'a' => 1, 'e' => "La digestion des ruminants et la décomposition de matière organique sans air (rizières, marais) produisent du méthane."],
                    ['q' => "Quelle phrase distingue correctement le trou d’ozone et l’effet de serre ?", 'c' => ["Le trou d’ozone est dû surtout au CO₂ rejeté", "Les deux phénomènes ont exactement la même cause", "L’effet de serre se produit surtout dans la stratosphère", "Le trou d’ozone touche la stratosphère"], 'a' => 3, 'e' => "Le trou d’ozone vient des composés chlorés (CFC) qui détruisent l’ozone stratosphérique ; l’effet de serre concerne le bilan thermique de la planète."],
                    ['q' => "Qu’appelle-t-on un puits de carbone ?", 'c' => ["Un milieu qui capte plus de CO₂ qu’il n’en rejette", "Un milieu qui émet plus de CO₂ qu’il n’en capte", "Un gisement de pétrole exploité en pleine mer", "Un filtre à particules placé sur un pot d’échappement"], 'a' => 0, 'e' => "Forêts en croissance, sols et océans jouent ce rôle de stockage ; s’ils relâchent plus qu’ils n’absorbent, ils deviennent une source."],
                    ['q' => "Quelle action réduit le plus directement les émissions de CO₂ d’un logement chauffé au gaz ?", 'c' => ["Laisser les appareils en veille", "Mieux isoler les murs et le toit", "Chauffer à 25 °C toute l’année", "Ouvrir les fenêtres en plein hiver"], 'a' => 1, 'e' => "Moins de chaleur perdue, c’est moins de gaz brûlé, donc moins de CO₂ émis."],
                    ['q' => "Quelle équation traduit la dissolution du CO₂ dans l’eau des océans ?", 'c' => ["CO₂ + H₂O → CO + H₂O₂", "CO₂ + NaCl → Na₂CO₃ + Cl₂", "CO₂ + H₂O ⇌ H₂CO₃", "CO₂ → C + O₂"], 'a' => 2, 'e' => "Il se forme de l’acide carbonique, qui libère des ions H⁺ : c’est l’origine de l’acidification des océans."],
                    ['q' => "Depuis l’ère préindustrielle, le CO₂ atmosphérique est passé d’environ 280 ppm à plus de 400 ppm. Quelle en est la cause principale ?", 'c' => ["Les énergies fossiles et la déforestation", "Une forte hausse de l’activité volcanique terrestre", "La respiration plus intense des animaux marins", "L’évaporation croissante de l’eau des océans"], 'a' => 0, 'e' => "Le carbone du charbon, du pétrole et du gaz, stocké depuis des millions d’années, est libéré en quelques décennies ; les volcans n’émettent qu’une fraction de ces quantités."],
                    ['q' => "Que peut-on dire de l’effet de serre naturel ?", 'c' => ["Sans lui, la Terre serait nettement plus chaude", "Il n’existe que depuis la révolution industrielle", "Il est dû au seul CO₂ émis par les volcans", "Sans lui, la Terre serait autour de −18 °C"], 'a' => 3, 'e' => "Grâce à lui la moyenne est d’environ 15 °C ; c’est son renforcement par nos émissions qui pose problème."],
                ],
            ],
            [
                'title' => "Pluies acides et chimie atmosphérique",
                'description' => "D’où vient l’acidité des pluies, quelles réactions la produisent et comment les milieux y résistent ou la subissent.",
                'questions' => [
                    ['q' => "Une pluie non polluée est déjà légèrement acide (pH voisin de 5,6). Quel gaz dissous en est responsable ?", 'c' => ["Le dioxygène de l’air", "Le dioxyde de carbone", "Le diazote de l’atmosphère", "L’argon de l’atmosphère"], 'a' => 1, 'e' => "CO₂ + H₂O ⇌ H₂CO₃ : l’acide carbonique libère un peu d’ions H⁺, d’où ce pH naturel inférieur à 7."],
                    ['q' => "Dans l’air, le dioxyde de soufre s’oxyde puis réagit avec l’eau : SO₂ + ½ O₂ + H₂O → …", 'c' => ["H₂S", "Na₂SO₄", "H₂SO₄", "H₂SO₃"], 'a' => 2, 'e' => "Seul H₂SO₄, l’acide sulfurique, équilibre les atomes de S, O et H de cette équation."],
                    ['q' => "Les oxydes d’azote NOx contribuent aux pluies acides en donnant finalement de l’acide…", 'c' => ["nitrique HNO₃", "chlorhydrique HCl", "acétique CH₃COOH", "fluorhydrique HF"], 'a' => 0, 'e' => "NO₂ réagit avec l’eau et l’oxygène pour former HNO₃, un acide fort."],
                    ['q' => "Un lac passe de pH 6,5 à pH 4,5 après des années de pluies acides. Par quel facteur la concentration en H₃O⁺ a-t-elle été multipliée ?", 'c' => ["environ 2 fois", "environ 20 fois", "environ 10 fois", "100 fois"], 'a' => 3, 'e' => "Chaque unité de pH vaut un facteur 10 ; deux unités donnent 10 × 10 = 100."],
                    ['q' => "Laquelle de ces équations traduit l’attaque du calcaire par un acide ?", 'c' => ["CaCO₃ + 2 H⁺ → Ca + CO₂ + H₂", "CaCO₃ + H⁺ → Ca²⁺ + CO₂ + H₂O", "CaCO₃ + 2 H⁺ → Ca²⁺ + CO₂ + H₂O", "CaCO₃ + 2 H⁺ → CaO + CO₂ + H₂"], 'a' => 2, 'e' => "Vérifie atomes et charges : 2+ à gauche, 2+ à droite, et deux H des deux côtés. Cette réaction explique aussi la bonne résistance des sols calcaires."],
                    ['q' => "Quelle conséquence peut avoir l’acidification d’un lac ?", 'c' => ["Le lac devient plus riche en carbonates", "Des espèces sensibles y disparaissent", "Le lac se vide de son eau", "Le dioxygène se change en hydrogène"], 'a' => 1, 'e' => "Beaucoup de poissons, d’amphibiens et d’invertébrés supportent mal un pH inférieur à 5,5 ; de plus, l’acidité libère de l’aluminium toxique."],
                    ['q' => "Une centrale thermique veut réduire ses émissions de SO₂. Quelle solution convient ?", 'c' => ["Brûler un charbon plus riche en soufre", "Ajouter du sel de cuisine dans les fumées", "Rejeter les fumées sans aucun traitement", "Désulfurer les fumées avec du calcaire"], 'a' => 3, 'e' => "Le calcaire fixe le soufre sous forme de sulfate de calcium (gypse) au lieu de le laisser partir sous forme de SO₂."],
                    ['q' => "Pourquoi une statue en marbre se dégrade-t-elle sous les pluies acides ?", 'c' => ["Il contient du CaCO₃, attaqué par les acides", "C’est un métal qui rouille au contact de l’eau", "Il fond sous l’effet de la chaleur de la pluie", "Il absorbe les ions Na⁺ présents dans l’eau"], 'a' => 0, 'e' => "Le marbre est du carbonate de calcium cristallisé : il se dissout peu à peu en Ca²⁺, CO₂ et eau."],
                    ['q' => "Quels polluants sont les principaux responsables des pluies acides ?", 'c' => ["Les CFC et les halons", "SO₂ et les oxydes d’azote", "Les gaz rares de l’air", "Le dioxygène et le diazote"], 'a' => 1, 'e' => "Ne pas confondre avec les CFC, qui détruisent l’ozone stratosphérique et n’acidifient pas la pluie."],
                    ['q' => "Une pluie de pH 4,0 est comparée à une pluie naturelle de pH 5,6. Combien de fois [H₃O⁺] est-elle plus grande ?", 'c' => ["1,6 fois", "16 fois", "environ 40 fois", "environ 1 600 fois"], 'a' => 2, 'e' => "On calcule 10 puissance (5,6 − 4,0) = 10 puissance 1,6, soit environ 40 : la différence de pH est un exposant, pas le facteur lui-même."],
                ],
            ],
            [
                'title' => "Déchets, recyclage et chimie verte",
                'description' => "Prévenir, réemployer, recycler, trier : les réflexes de gestion des déchets et quelques principes de la chimie verte.",
                'questions' => [
                    ['q' => "Dans la hiérarchie de gestion des déchets, quelle action est la plus prioritaire ?", 'c' => ["Réduire à la source", "Recycler la matière en fin de vie", "Enfouir les déchets restants", "Incinérer avec récupération d’énergie"], 'a' => 0, 'e' => "Le déchet le moins polluant est celui qu’on ne produit pas : prévention d’abord, traitement ensuite."],
                    ['q' => "Pourquoi ne faut-il jamais mélanger un déchet d’eau de Javel et un déchet acide ?", 'c' => ["Il se forme de l’eau pure", "Le mélange devient inerte", "Cela fait précipiter de l’or", "Du dichlore Cl₂ toxique peut se dégager"], 'a' => 3, 'e' => "L’hypochlorite ClO⁻ et les ions chlorure, en milieu acide, produisent du dichlore gazeux, très irritant pour les poumons."],
                    ['q' => "« Mieux vaut éviter de produire un déchet que d’avoir à le traiter. » Quel principe de la chimie verte est exprimé ?", 'c' => ["L’emploi de réactifs en excès", "La prévention à la source", "La dilution des rejets", "L’usage de solvants très toxiques"], 'a' => 1, 'e' => "C’est le premier des douze principes de la chimie verte, formulé par Anastas et Warner."],
                    ['q' => "Une synthèse donne 44 g du produit voulu à partir de 100 g de réactifs au total. Quelle est l’économie d’atomes ?", 'c' => ["22 %", "56 %", "44 %", "144 %"], 'a' => 2, 'e' => "Économie d’atomes = masse du produit voulu ÷ masse des réactifs, soit 44 ÷ 100 = 44 %. Le reste, 56 g, finit en sous-produits."],
                    ['q' => "Au laboratoire, quel solvant la chimie verte recommande-t-elle de privilégier quand c’est possible ?", 'c' => ["L’eau ou l’éthanol", "Le benzène, très bon solvant", "Le tétrachlorure de carbone", "Le chloroforme en excès"], 'a' => 0, 'e' => "Les solvants halogénés et le benzène sont toxiques ou cancérogènes ; l’eau et l’éthanol sont bien moins dangereux."],
                    ['q' => "Lequel de ces exemples relève du réemploi (et non du recyclage) ?", 'c' => ["Fondre des canettes pour refaire de l’aluminium", "Broyer des bouteilles PET pour en faire des fibres", "Brûler des pneus pour produire de la chaleur", "Rincer et remplir à nouveau une bouteille consignée"], 'a' => 3, 'e' => "Le réemploi garde l’objet tel quel ; le recyclage détruit sa forme pour réutiliser la matière."],
                    ['q' => "Pourquoi recycler l’aluminium est-il avantageux ?", 'c' => ["Il consomme plus d’énergie que l’extraction du minerai", "Il évite l’électrolyse de l’alumine, très coûteuse en énergie", "Il fabrique de l’aluminium à partir du dioxygène de l’air", "Il dispense de trier les déchets métalliques entre eux"], 'a' => 1, 'e' => "Refondre de l’aluminium demande environ vingt fois moins d’énergie que le produire à partir de la bauxite."],
                    ['q' => "Un laboratoire passe de 200 mL à 50 mL de solvant par manipulation. Pour 40 manipulations par an, quel volume économise-t-il ?", 'c' => ["6 L", "150 mL", "8 L", "2 L"], 'a' => 0, 'e' => "Économie par manipulation : 150 mL ; × 40 = 6 000 mL, soit 6 L. Attention à convertir les mL en L."],
                    ['q' => "Laquelle de ces consignes de tri au laboratoire est une erreur ?", 'c' => ["Étiqueter chaque bidon de déchets", "Séparer solvants halogénés et non halogénés", "Jeter les restes de solvant dans le bidon des acides", "Fermer les bidons après chaque usage"], 'a' => 2, 'e' => "Chaque famille de déchets a son bidon : un mélange imprévu peut chauffer, dégager des gaz ou rendre le traitement impossible."],
                    ['q' => "Parmi ces choix, lequel est conforme aux principes de la chimie verte ?", 'c' => ["Employer des réactifs en excès pour améliorer le rendement", "Choisir des procédés qui génèrent le plus de sous-produits", "Multiplier les solvants auxiliaires à chaque étape", "Préférer un catalyseur à un réactif en quantité stœchiométrique"], 'a' => 3, 'e' => "Un catalyseur sert à de nombreuses reprises et ne se consomme pas : on produit moins de déchets par mole de produit."],
                ],
            ],
            [
                'title' => "Métaux lourds et substances toxiques",
                'description' => "Plomb, mercure, cadmium : comment ils s’accumulent, comment on s’y expose et comment on réduit le risque.",
                'questions' => [
                    ['q' => "Quel est l’intrus parmi ces éléments surveillés pour leur toxicité ?", 'c' => ["Le plomb", "Le calcium", "Le mercure", "Le cadmium"], 'a' => 1, 'e' => "Plomb, mercure et cadmium sont des métaux toxiques sans rôle utile pour l’organisme ; le calcium, lui, est indispensable aux os."],
                    ['q' => "Le méthylmercure est une forme particulièrement préoccupante du mercure, car…", 'c' => ["il est très soluble et s’élimine vite", "il disparaît à la cuisson du poisson", "il s’accumule chez les poissons prédateurs", "il est présent dans toute eau pure"], 'a' => 2, 'e' => "Absorbé par le plancton puis les petits poissons, il se concentre à chaque maillon : les gros prédateurs en contiennent le plus."],
                    ['q' => "Un polluant persistant est de plus en plus concentré à chaque maillon d’une chaîne alimentaire. Comment appelle-t-on ce phénomène ?", 'c' => ["La biomagnification", "L’eutrophisation", "La neutralisation", "L’évaporation"], 'a' => 0, 'e' => "Chaque prédateur mange beaucoup de proies et ne parvient pas à éliminer le polluant : sa teneur monte d’un cran à chaque niveau."],
                    ['q' => "Selon la valeur guide provisoire de l’OMS de 10 µg/L pour le plomb dans l’eau potable, quelle masse maximale de plomb peut contenir 1,5 L d’eau ?", 'c' => ["6,7 µg", "1,5 µg", "150 µg", "15 µg"], 'a' => 3, 'e' => "On multiplie la concentration par le volume : 10 µg/L × 1,5 L = 15 µg."],
                    ['q' => "Des enfants jouent sur un sol contaminé au plomb. Quelle est la voie d’exposition la plus probable ?", 'c' => ["L’inhalation de vapeurs de plomb", "L’exposition à la lumière du soleil", "L’ingestion de poussières portées à la bouche", "L’absorption à travers une peau intacte"], 'a' => 2, 'e' => "Le plomb du sol est surtout sous forme de particules : mains sales, jouets et poussières finissent en bouche."],
                    ['q' => "Dans un atelier, des poussières métalliques sont émises par une meuleuse. Quelle mesure est la plus efficace en priorité ?", 'c' => ["Souffler les poussières à l’air comprimé", "Aspirer à la source avec un système adapté", "Balayer à sec en fin de journée", "Entrouvrir une fenêtre de temps en temps"], 'a' => 1, 'e' => "Mieux vaut capter les poussières là où elles naissent ; souffler ou balayer à sec les remet simplement en suspension."],
                    ['q' => "Le zinc est un oligoélément nécessaire, mais devient toxique à forte dose. Que montre cet exemple ?", 'c' => ["Que l’effet dépend de la dose", "Que le zinc devient gazeux au contact de l’air", "Que tous les métaux sont sans danger", "Que la couleur détermine la toxicité"], 'a' => 0, 'e' => "« La dose fait le poison » : une même substance peut être utile ou nocive selon la quantité absorbée."],
                    ['q' => "Avant de doser le plomb d’un sol, on attaque l’échantillon à l’acide nitrique. Pourquoi ?", 'c' => ["Pour éliminer toute trace d’eau du sol", "Pour lui faire perdre sa radioactivité", "Pour augmenter le pH de l’échantillon", "Pour amener le métal en solution à doser"], 'a' => 3, 'e' => "Les instruments d’analyse mesurent des solutions : l’acide dissout le plomb du solide et le fait passer sous forme d’ions Pb²⁺."],
                    ['q' => "Un sol sec contient 120 mg de plomb par kg, pour un seuil de gestion de 100 mg/kg. Que conclure ?", 'c' => ["Le sol est conforme, 120 étant plus grand que 100", "La valeur est trop élevée pour être mesurée", "Le seuil est dépassé de 20 %", "Le sol ne contient pas de plomb"], 'a' => 2, 'e' => "(120 − 100) ÷ 100 = 20 % au-dessus du seuil. Une valeur supérieure à la limite signale un dépassement, pas une conformité."],
                    ['q' => "Un thermomètre au mercure se brise sur le carrelage. Quelle réaction est adaptée ?", 'c' => ["Passer l’aspirateur pour tout récupérer", "Rassembler les billes avec un papier rigide et aérer", "Verser de l’eau chaude pour les faire glisser", "Balayer les billes vers la bouche d’évacuation"], 'a' => 1, 'e' => "L’aspirateur chauffe le mercure et disperse ses vapeurs toxiques ; il faut collecter les billes sans les écraser, puis les remettre en déchetterie."],
                ],
            ],
            [
                'title' => "Surveillance environnementale et analyses",
                'description' => "Prélever, étalonner, répéter, comparer à une norme : la méthode derrière un résultat d’analyse fiable.",
                'questions' => [
                    ['q' => "Pourquoi un échantillon doit-il être représentatif du milieu ?", 'c' => ["Pour obtenir la valeur la plus faible possible", "Pour se dispenser de faire une mesure", "Pour refléter le milieu étudié", "Pour modifier la composition du milieu"], 'a' => 2, 'e' => "Un échantillon prélevé au mauvais endroit ou au mauvais moment donne un résultat exact… sur un échantillon qui ne dit rien du site."],
                    ['q' => "À quoi sert un blanc d’analyse ?", 'c' => ["À détecter une contamination apportée par la méthode", "À amplifier le signal du détecteur avant mesure", "À remplacer l’échantillon quand il manque", "À étalonner le pH-mètre avant utilisation"], 'a' => 0, 'e' => "On suit toute la procédure sans échantillon : si un signal apparaît, il vient des réactifs, de la verrerie ou de l’air du laboratoire."],
                    ['q' => "Pour un dosage, l’absorbance suit A = k × c. Un étalon à 2 mg/L donne A = 0,20. Un échantillon donne A = 0,35. Quelle est sa concentration ?", 'c' => ["0,7 mg/L", "1,75 mg/L", "7 mg/L", "3,5 mg/L"], 'a' => 3, 'e' => "On trouve k = 0,20 ÷ 2 = 0,10 L/mg, donc c = 0,35 ÷ 0,10 = 3,5 mg/L."],
                    ['q' => "Un laboratoire rend « résultat inférieur à la limite de détection ». Que cela signifie-t-il ?", 'c' => ["La substance est totalement absente du milieu", "La méthode ne la détecte pas de façon fiable", "La concentration dépasse la capacité de l’appareil", "L’échantillon a été mal étiqueté par le laboratoire"], 'a' => 1, 'e' => "Il peut en rester, mais en quantité trop faible pour que cette méthode la distingue du bruit de fond."],
                    ['q' => "On répète trois fois un dosage : 4,8 ; 5,0 et 5,2 mg/L. Quelle est la moyenne ?", 'c' => ["4,8 mg/L", "5,2 mg/L", "5,0 mg/L", "15,0 mg/L"], 'a' => 2, 'e' => "On additionne (15,0) puis on divise par le nombre de mesures (3) : 5,0 mg/L. Oublier de diviser donne la somme, pas la moyenne."],
                    ['q' => "Pourquoi garde-t-on souvent un échantillon d’eau au frais et à l’abri de la lumière ?", 'c' => ["Pour freiner les réactions et l’activité biologique", "Pour faire monter la teneur en gaz dissous", "Pour forcer les micro-organismes à se multiplier", "Pour modifier volontairement le pH avant dosage"], 'a' => 0, 'e' => "Le froid et l’obscurité ralentissent bactéries et réactions, donc la composition reste proche de celle du prélèvement."],
                    ['q' => "Une concentration de 0,0003 mg/L s’écrit aussi…", 'c' => ["0,3 mg/L", "0,3 µg/L", "3 µg/L", "0,03 µg/L"], 'a' => 1, 'e' => "1 mg = 1 000 µg, donc 0,0003 mg/L = 0,3 µg/L."],
                    ['q' => "Une eau contient 62 mg/L de nitrates, pour une limite de potabilité de 50 mg/L. Que conclure ?", 'c' => ["Elle respecte la limite", "Elle est polluée par les phosphates", "Les unités ne sont pas comparables", "Elle dépasse la limite fixée"], 'a' => 3, 'e' => "Même unité, donc la comparaison est directe : 62 est supérieur à 50, la valeur de référence est dépassée."],
                    ['q' => "Quatre mesures donnent 5,0 ; 5,1 ; 4,9 et 5,0 mg/L, puis une cinquième vaut 9,5 mg/L. Que faire ?", 'c' => ["La garder telle quelle dans la moyenne", "La supprimer sans en parler à personne", "Chercher une erreur, puis refaire la mesure", "Remplacer les autres valeurs par celle-ci"], 'a' => 2, 'e' => "Une valeur aberrante peut venir d’une contamination ou d’une faute de manipulation : on vérifie et on remesure, on ne la cache pas."],
                    ['q' => "Avant d’utiliser une droite d’étalonnage, que faut-il contrôler pour un échantillon ?", 'c' => ["Que sa valeur dépasse celle de tous les étalons", "Qu’il est compris dans la gamme des étalons", "Qu’il possède une couleur identique au blanc", "Que tous les étalons ont la même concentration"], 'a' => 1, 'e' => "Hors de la gamme, rien ne prouve que la droite reste valable : on dilue ou on concentre l’échantillon."],
                ],
            ],
            [
                'title' => "Applications et révision de chimie environnementale",
                'description' => "Situations concrètes qui mélangent air, eau, sols, analyses et prévention : le bilan de toute la matière.",
                'questions' => [
                    ['q' => "Une station d’épuration veut limiter les nutriments rejetés en rivière. Quels éléments cible-t-elle ?", 'c' => ["Le sodium et le chlore", "Le fer et le zinc", "Le carbone et l’hydrogène", "L’azote et le phosphore"], 'a' => 3, 'e' => "Ce sont les deux nutriments qui limitent la croissance des algues : en retirer une grande part évite l’eutrophisation en aval."],
                    ['q' => "Une chaudière rejette beaucoup de monoxyde de carbone. Quelle cause est la plus plausible ?", 'c' => ["Un manque d’air, donc une combustion incomplète", "Un excès d’air dans la chambre de combustion", "Une eau de circuit devenue trop calcaire", "Un tirage de cheminée beaucoup trop fort"], 'a' => 0, 'e' => "Sans assez de dioxygène, le carbone s’arrête à CO au lieu d’aller jusqu’à CO₂ : d’où l’entretien et le réglage annuels."],
                    ['q' => "Un rejet très riche en matière organique biodégradable arrive dans une rivière. Quel effet attend-on en aval ?", 'c' => ["Une hausse du dioxygène dissous", "Une hausse de la salinité à 35 g/L", "Une baisse du dioxygène dissous", "Un refroidissement de 20 °C de l’eau"], 'a' => 2, 'e' => "Les micro-organismes qui dégradent cette matière consomment du dioxygène : poissons et invertébrés peuvent en manquer."],
                    ['q' => "Un effluent contient 3 mg/L de cadmium pour une limite de rejet de 0,2 mg/L. Par quel facteur au minimum faut-il diviser sa concentration ?", 'c' => ["1,5", "15", "0,07", "150"], 'a' => 1, 'e' => "Facteur = 3 ÷ 0,2 = 15. Attention à ne pas diviser 0,2 par 3, qui donne 0,07."],
                    ['q' => "Laquelle de ces actions relève de la prévention, et non de la dépollution ?", 'c' => ["Substituer un solvant toxique par de l’éthanol", "Excaver puis traiter un sol déjà contaminé", "Filtrer sur charbon actif une eau polluée", "Faire absorber un métal du sol par des plantes"], 'a' => 0, 'e' => "Prévenir, c’est agir avant que le polluant n’atteigne le milieu ; les trois autres interviennent une fois la pollution installée."],
                    ['q' => "L’ozone de basse altitude d’un été chaud et ensoleillé est un polluant…", 'c' => ["primaire, rejeté directement par les cheminées", "stratosphérique, donc protecteur pour la santé", "solide, formé dans les sols humides", "secondaire, formé par réaction photochimique"], 'a' => 3, 'e' => "Sous l’effet du soleil, les NOx et des composés organiques volatils réagissent pour former O₃ : il n’est pas émis tel quel."],
                    ['q' => "Pour suivre l’eutrophisation d’un lac, quelle série de paramètres est la plus pertinente ?", 'c' => ["Pression, vent, couleur du ciel", "Sodium, durée du jour, pH du sol", "Phosphore, nitrates, dioxygène dissous", "Salinité, masse volumique, point d’ébullition"], 'a' => 2, 'e' => "Nutriments à l’origine du phénomène, et oxygène qui en montre les conséquences : un seul paramètre ne suffirait pas."],
                    ['q' => "Une eau contient 8 mg/L de dioxygène dissous au départ, puis 3 mg/L après cinq jours à l’obscurité à 20 °C. Quelle est sa DBO₅ ?", 'c' => ["5 mg/L", "11 mg/L", "3 mg/L", "2,7 mg/L"], 'a' => 0, 'e' => "La DBO₅ est le dioxygène consommé en cinq jours : 8 − 3 = 5 mg/L."],
                    ['q' => "Lichens et mousses servent de bio-indicateurs de la qualité de l’air. Pourquoi ?", 'c' => ["Ils fabriquent eux-mêmes du dioxyde de soufre", "Ils accumulent des polluants et réagissent à leur présence", "Ils détruisent la totalité des polluants de l’air", "Ils dispensent de toute analyse chimique"], 'a' => 1, 'e' => "Sans racines ni cuticule, ils captent directement ce qui se trouve dans l’air : leur état et leur teneur en métaux témoignent de la pollution."],
                    ['q' => "Une usine rejette un effluent acide (pH 3) dans une rivière. Quelle séquence est la plus logique ?", 'c' => ["Déplacer le point de rejet plus loin en aval", "Attendre que le courant dilue l’effluent seul", "Diluer fortement l’effluent sans aucune mesure", "Neutraliser à la source puis contrôler avant rejet"], 'a' => 3, 'e' => "On agit à la source (ajout d’une base), puis on vérifie le pH avant de rejeter : déplacer ou diluer ne supprime pas le problème."],
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
