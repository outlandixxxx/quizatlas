<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ChemicalEquilibriumBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'chemical-equilibrium')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 70],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Les bases de l’équilibre chimique",
                'description' => "Comprendre ce qu’est un équilibre chimique dynamique et reconnaître ses principales caractéristiques.",
                'questions' => [
                    ['q' => "À l’équilibre chimique, que peut-on dire des vitesses des réactions directe et inverse ?", 'c' => ["La directe l’emporte nettement", "L’inverse l’emporte nettement", "Elles sont égales", "Elles sont toutes deux nulles"], 'a' => 2, 'e' => "Les deux réactions se poursuivent, mais à la même vitesse : c’est ce qui rend la composition stable."],
                    ['q' => "Un chimiste dit qu’un système est « en équilibre dynamique ». Qu’entend-il par là ?", 'c' => ["Les deux sens continuent à même vitesse", "Les molécules restent immobiles dans le mélange", "Toutes les espèces ont la même concentration", "La température oscille autour d’une valeur moyenne"], 'a' => 0, 'e' => "« Dynamique » rappelle que rien n’est figé à l’échelle des molécules : ce qui se forme est aussitôt compensé par ce qui disparaît."],
                    ['q' => "Dans un récipient fermé, la réaction A ⇌ B a atteint l’équilibre. Que contient le récipient ?", 'c' => ["Uniquement B, car A a été totalement consommé", "Uniquement A, car B s’est entièrement décomposé", "A et B qui se succèdent en alternance, visibles à l’œil", "A et B coexistent, à concentrations stables"], 'a' => 3, 'e' => "Les deux espèces coexistent : on ne voit rien changer, même si chaque molécule peut encore se transformer."],
                    ['q' => "Complète : à l’équilibre, les concentrations des espèces sont…", 'c' => ["forcément égales entre elles", "constantes au cours du temps", "nulles pour tous les produits", "en train de s’échanger à l’œil nu"], 'a' => 1, 'e' => "Constantes ne veut pas dire égales : chaque espèce garde sa propre valeur, simplement elle ne bouge plus."],
                    ['q' => "Laquelle de ces transformations est écrite comme une réaction à équilibre ?", 'c' => ["C + O₂ → CO₂", "CH₄ + 2 O₂ → CO₂ + 2 H₂O", "N₂O₄ ⇌ 2 NO₂", "2 Mg + O₂ → 2 MgO"], 'a' => 2, 'e' => "La double flèche ⇌ signale que la réaction peut se produire dans les deux sens ; la simple flèche indique une transformation que l’on considère totale."],
                    ['q' => "Pourquoi faut-il un système fermé pour observer un équilibre ?", 'c' => ["Pour que les produits restent là et puissent redonner des réactifs", "Pour que la pression dans le récipient reste proche de zéro tout du long", "Pour que le catalyseur ne soit pas consommé en cours de route", "Pour empêcher la lumière d’entrer et de détruire les réactifs"], 'a' => 0, 'e' => "Si un produit quitte le récipient, la réaction inverse ne peut plus se faire et les deux sens ne se compensent jamais."],
                    ['q' => "Un tube contient du NO₂ brun et du N₂O₄ incolore. Sa teinte brune ne change plus depuis une heure. Que peut-on conclure ?", 'c' => ["Les réactions sont définitivement arrêtées", "Il est sans doute à l’équilibre dynamique", "Tout le N₂O₄ a été transformé en NO₂", "Le NO₂ est devenu stable et ne réagit plus"], 'a' => 1, 'e' => "Une couleur stable traduit une composition stable, ce qui est typique d’un équilibre et pas d’un arrêt des réactions."],
                    ['q' => "Quelle affirmation sur un système à l’équilibre est FAUSSE ?", 'c' => ["Les deux sens de la réaction continuent d’avoir lieu", "La composition du mélange reste stable", "Les vitesses directe et inverse sont égales", "Les molécules ont cessé de réagir entre elles"], 'a' => 3, 'e' => "Ce serait une réaction « gelée », pas un équilibre : ici les molécules réagissent toujours, mais le bilan est nul."],
                    ['q' => "Dans une réaction réversible, l’équilibre est atteint lorsque…", 'c' => ["les vitesses des deux sens deviennent égales", "tous les réactifs ont été entièrement consommés", "la pression atteint sa valeur maximale dans le réacteur", "il ne reste plus qu’un seul réactif dans le tube"], 'a' => 0, 'e' => "Retiens le critère : vitesse directe = vitesse inverse. Peu importe la quantité de réactifs restants."],
                    ['q' => "Un élève écrit : « équilibre = quantités égales de réactifs et de produits ». Quelle correction lui apporter ?", 'c' => ["C’est exact, c’est la définition même de l’équilibre", "Il faut préciser que la température du système est nulle", "Faux : ce sont les vitesses qui s’égalent", "Il faut dire que tous les produits ont fini par disparaître"], 'a' => 2, 'e' => "Un équilibre peut être très déséquilibré en quantités, par exemple presque tout en produits. Ce qui s’égalise, ce sont les vitesses des deux sens."],
                ],
            ],
            [
                'title' => "Atteindre et reconnaître l’équilibre",
                'description' => "Interpréter l’évolution d’un mélange réactionnel avant et à l’équilibre, à partir de situations simples.",
                'questions' => [
                    ['q' => "On introduit seulement des réactifs dans un récipient fermé. Juste au début, que valent les vitesses ?", 'c' => ["Les deux vitesses sont déjà égales", "Seule la directe est non nulle", "La directe est nulle, l’inverse est grande", "Les deux vitesses sont nulles"], 'a' => 1, 'e' => "Sans produit au départ, la réaction inverse n’a rien à transformer : elle démarre à zéro et prend de l’importance ensuite."],
                    ['q' => "Au cours de l’évolution vers l’équilibre, comment varient les vitesses directe et inverse ?", 'c' => ["La directe augmente et l’inverse diminue", "Les deux augmentent ensemble", "Les deux diminuent jusqu’à zéro", "Directe en baisse, inverse en hausse"], 'a' => 3, 'e' => "Les réactifs s’épuisent peu à peu (vitesse directe en baisse) tandis que les produits s’accumulent (vitesse inverse en hausse), jusqu’à ce que les deux se rejoignent."],
                    ['q' => "Sur un graphique, les courbes de vitesse directe et inverse se rejoignent. Que marque ce point ?", 'c' => ["l’état d’équilibre", "la fin de toute transformation", "la disparition des produits", "un changement de température"], 'a' => 0, 'e' => "L’intersection correspond à l’égalité des vitesses, donc à l’équilibre ; après elle, les deux courbes restent confondues."],
                    ['q' => "Pourquoi les concentrations se stabilisent-elles à l’équilibre ?", 'c' => ["Les molécules finissent par ne plus se rencontrer du tout", "Les réactifs sont tous épuisés dans le récipient", "Chaque espèce se forme aussi vite qu’elle disparaît", "Le milieu devient trop encombré pour réagir"], 'a' => 2, 'e' => "Pour chaque espèce, ce qui apparaît compense ce qui disparaît ; le bilan net est nul, d’où une valeur constante."],
                    ['q' => "On mesure [A] au cours du temps : 1,0 ; 0,60 ; 0,45 ; 0,40 ; 0,40 ; 0,40 mol/L. À partir de quand le système semble-t-il à l’équilibre ?", 'c' => ["Dès la première mesure, car [A] a déjà changé", "À la deuxième mesure, quand [A] a le plus baissé", "Jamais, car [A] ne devient pas nulle", "Dès la quatrième mesure, où [A] se stabilise"], 'a' => 3, 'e' => "L’équilibre se repère à un palier : la valeur ne change plus. Elle n’a pas besoin d’atteindre zéro."],
                    ['q' => "Deux béchers contiennent le même équilibre à la même température, mais ont été préparés avec des quantités initiales différentes. Leurs concentrations d’équilibre peuvent-elles être différentes ?", 'c' => ["Non, la température fixe à elle seule toutes les concentrations", "Oui, car elle dépend aussi des quantités de départ", "Non, sauf si on ajoute un catalyseur dans l’un des deux", "Oui, mais seulement si l’un des béchers est vide"], 'a' => 1, 'e' => "À température donnée, c’est le rapport entre concentrations qui est imposé (on le verra avec K), pas chaque valeur prise isolément."],
                    ['q' => "Un produit gazeux s’échappe au fur et à mesure d’un récipient ouvert. Que se passe-t-il ?", 'c' => ["L’équilibre ne s’établit pas, on va vers les produits", "Le même équilibre se forme, comme dans un récipient fermé", "La réaction inverse l’emporte et ramène les réactifs", "La réaction s’arrête dès que le premier gaz est parti"], 'a' => 0, 'e' => "Le produit perdu ne peut plus réagir en sens inverse : la réaction directe continue de le reformer, sans compensation."],
                    ['q' => "Quel indice expérimental peut signaler qu’un équilibre est atteint ?", 'c' => ["La masse du mélange diminue régulièrement au cours du temps", "La température du bain baisse en continu pendant la réaction", "Une couleur ou une pression qui cesse d’évoluer", "Un des réactifs a totalement disparu du récipient"], 'a' => 2, 'e' => "On cherche un palier : couleur, pression ou pH stables dans le temps. La disparition d’un réactif relèverait plutôt d’une réaction totale."],
                    ['q' => "Une concentration reste stable pendant une heure. Que peut-on en déduire ?", 'c' => ["Les molécules ont cessé de réagir entre elles", "Les deux vitesses sont sans doute égales", "Les réactifs sont entièrement consommés", "La réaction est devenue irréversible"], 'a' => 1, 'e' => "Une valeur stable est compatible avec un équilibre dynamique ; elle ne prouve pas que les réactions sont arrêtées."],
                    ['q' => "Dans A ⇌ B, on part de B pur au lieu de A pur. Que se passe-t-il ?", 'c' => ["Rien ne se passe, car B ne peut pas réagir", "Seule la réaction directe A → B peut se produire", "L’équilibre ne peut pas s’établir dans ce sens", "B se transforme en A jusqu’à un équilibre"], 'a' => 3, 'e' => "Un équilibre s’atteint par les deux côtés : en partant des produits, c’est la réaction inverse qui démarre en premier."],
                ],
            ],
            [
                'title' => "Principe de Le Châtelier : concentrations",
                'description' => "Prévoir le déplacement d’un équilibre lorsqu’on ajoute ou retire un réactif ou un produit.",
                'questions' => [
                    ['q' => "Pour A + B ⇌ C, on ajoute du A à l’équilibre. Que se passe-t-il ?", 'c' => ["L’équilibre se déplace vers les réactifs", "La composition ne change pas", "C disparaît instantanément", "L’équilibre se déplace vers C"], 'a' => 3, 'e' => "Le système consomme une partie du A ajouté, donc il forme plus de C."],
                    ['q' => "Pour A + B ⇌ C, on ajoute beaucoup de C. Comment réagit le système ?", 'c' => ["Vers la droite, pour former encore du C", "Vers la gauche, en consommant du C", "Il ne se passe rien, K compense", "Il rend A et B égaux"], 'a' => 1, 'e' => "Un excès de produit est en partie consommé : la réaction inverse prend le dessus et reforme A et B."],
                    ['q' => "Dans le procédé Haber, N₂ + 3 H₂ ⇌ 2 NH₃, on liquéfie NH₃ pour l’extraire du réacteur. Quelle évolution cela favorise-t-il ?", 'c' => ["La décomposition du NH₃ restant", "Aucune évolution", "La formation de nouveau NH₃", "L’arrêt de la réaction inverse"], 'a' => 2, 'e' => "Quand on enlève un produit, le système cherche à le remplacer : l’ammoniac retiré est reformé."],
                    ['q' => "Pour H₂ + I₂ ⇌ 2 HI, on a Kc = 4 avec [H₂] = [I₂] = 0,1 mol/L et [HI] = 0,2 mol/L. On ajoute du H₂. Que deviennent [HI] et Kc ?", 'c' => ["[HI] augmente, Kc ne change pas", "[HI] diminue, Kc ne change pas", "[HI] augmente, Kc augmente aussi", "[HI] reste fixe, Kc diminue"], 'a' => 0, 'e' => "Plus de H₂ pousse vers HI. Kc, lui, ne dépend que de la température, pas des quantités ajoutées."],
                    ['q' => "Que signifie « le système s’oppose à la perturbation » dans le principe de Le Châtelier ?", 'c' => ["Il annule la perturbation et revient à l’état initial", "Il évolue dans le sens qui atténue la perturbation", "Il évolue dans le sens qui amplifie la modification", "Il bloque la réaction dans les deux sens"], 'a' => 1, 'e' => "La réponse est partielle : l’évolution réduit l’effet de la perturbation sans revenir exactement à l’état d’avant."],
                    ['q' => "Pour CO + H₂O ⇌ CO₂ + H₂, on retire H₂ du mélange. Vers quel côté évolue le système ?", 'c' => ["Vers les réactifs, car H₂ est un produit", "Dans aucun sens, car il y a 2 molécules de chaque côté", "Vers les réactifs, car on retire un gaz", "Vers les produits, pour reformer du H₂"], 'a' => 3, 'e' => "Un composé retiré est partiellement remplacé : on va donc dans le sens qui forme H₂, c’est-à-dire vers les produits."],
                    ['q' => "Dans CH₃COOH + C₂H₅OH ⇌ CH₃COOC₂H₅ + H₂O (estérification), quelle action améliore le rendement en ester ?", 'c' => ["Éliminer l’eau formée", "Ajouter de l’eau au mélange", "Retirer une partie de l’éthanol", "Ajouter de l’ester dès le départ"], 'a' => 0, 'e' => "Retirer l’eau (un produit) déplace l’équilibre vers la formation d’ester. Ajouter un produit ou retirer un réactif ferait l’inverse."],
                    ['q' => "Dans Fe³⁺ + SCN⁻ ⇌ FeSCN²⁺, la solution est rouge à cause de FeSCN²⁺. On ajoute des ions Fe³⁺. Que voit-on ?", 'c' => ["La solution se décolore", "La couleur reste exactement la même", "La solution devient plus rouge", "La solution tourne au vert"], 'a' => 2, 'e' => "Un excès de Fe³⁺ est consommé par SCN⁻, ce qui produit davantage de FeSCN²⁺ : la teinte rouge s’intensifie."],
                    ['q' => "Un élève dit : « si j’ajoute un réactif, K augmente pour compenser ». Que lui répondre ?", 'c' => ["C’est exact, K suit les concentrations du mélange", "C’est exact, mais seulement pour les gaz", "C’est faux, K diminue dans ce cas", "C’est faux : K ne dépend que de la température"], 'a' => 3, 'e' => "Ajouter un réactif modifie les concentrations et fait évoluer le système, mais la constante K reste celle de la température considérée."],
                    ['q' => "Dans A + B ⇌ C, on retire une partie du réactif A. Que devient la quantité de C ?", 'c' => ["Elle diminue, car le système va vers A et B", "Elle augmente, car A est un réactif manquant", "Elle reste identique, seule K change", "Elle devient nulle, car A est épuisé"], 'a' => 0, 'e' => "Le système remplace en partie le A retiré en décomposant du C, donc C diminue, mais sans disparaître complètement."],
                ],
            ],
            [
                'title' => "Température et équilibre",
                'description' => "Comprendre l’influence de la chaleur sur la position d’un équilibre, selon que la réaction est exothermique ou endothermique.",
                'questions' => [
                    ['q' => "Une réaction directe exothermique libère de la chaleur. Dans un raisonnement de Le Châtelier, où place-t-on la chaleur ?", 'c' => ["Du côté des produits", "Du côté des réactifs", "Des deux côtés à la fois", "Hors de l’équation, comme un catalyseur"], 'a' => 0, 'e' => "Ce qui est libéré se comporte comme un produit : on l’écrit à droite, et chauffer revient à en ajouter."],
                    ['q' => "Pour une réaction directe exothermique, on chauffe le système. Que se passe-t-il ?", 'c' => ["Le sens direct est favorisé", "Les deux sens sont favorisés de la même façon", "Le sens inverse est favorisé", "La réaction s’arrête"], 'a' => 2, 'e' => "Le système absorbe la chaleur ajoutée en allant dans le sens endothermique, ici le sens inverse."],
                    ['q' => "La synthèse N₂(g) + 3 H₂(g) ⇌ 2 NH₃(g) est exothermique (ΔH = −92 kJ/mol). Comment augmenter la proportion de NH₃ à l’équilibre ?", 'c' => ["Chauffer le réacteur", "Le refroidir", "Ajouter un catalyseur plus actif", "Diminuer la pression"], 'a' => 1, 'e' => "Refroidir favorise le sens qui dégage de la chaleur, ici la formation de NH₃. En pratique, on garde une température assez haute pour que la réaction ne soit pas trop lente."],
                    ['q' => "Pour une réaction directe endothermique, une élévation de température…", 'c' => ["défavorise le sens direct", "ne change pas la composition", "favorise le sens inverse", "favorise le sens direct"], 'a' => 3, 'e' => "Une réaction endothermique absorbe de la chaleur : en chauffant, on l’aide à avancer dans le sens direct."],
                    ['q' => "Un tube contenant N₂O₄ (incolore) ⇌ 2 NO₂ (brun) fonce quand on le plonge dans l’eau chaude. Que peut-on dire du sens direct ?", 'c' => ["Il est endothermique", "Il est exothermique", "Il n’échange pas de chaleur", "Il devient impossible à chaud"], 'a' => 0, 'e' => "La chaleur favorise la formation de NO₂ (brun), donc le sens qui consomme de la chaleur : le sens direct est endothermique."],
                    ['q' => "Un équilibre est exothermique dans le sens direct. On passe de 300 K à 400 K. La quantité de produit à l’équilibre…", 'c' => ["augmente", "ne change pas", "diminue", "s’annule"], 'a' => 2, 'e' => "En chauffant, le système favorise le sens qui absorbe la chaleur, c’est-à-dire le sens inverse : il reste moins de produit."],
                    ['q' => "Un élève affirme : « chauffer augmente toujours la quantité de produits ». Quel exemple le contredit ?", 'c' => ["Une réaction endothermique quelconque", "Une réaction faisant intervenir un catalyseur", "Une réaction ne faisant intervenir aucun gaz", "Une exothermique, comme la synthèse de NH₃"], 'a' => 3, 'e' => "Pour une réaction exothermique, la chaleur favorise le sens inverse. Tout dépend donc de la nature de la réaction."],
                    ['q' => "Parmi ces grandeurs, laquelle fait changer la valeur de K d’une réaction ?", 'c' => ["La concentration d’un réactif", "La température", "Le volume du récipient", "La quantité de catalyseur"], 'a' => 1, 'e' => "K ne varie qu’avec la température. Les autres changements déplacent l’équilibre sans modifier K."],
                    ['q' => "À 25 °C, une réaction exothermique a K = 100. À 100 °C, la valeur de K sera…", 'c' => ["supérieure à 100", "identique, soit 100", "inférieure à 100", "négative, en dessous de 0"], 'a' => 2, 'e' => "Chauffer défavorise le sens direct d’une réaction exothermique : à l’équilibre il y a moins de produits, donc K baisse. Une constante d’équilibre reste toujours positive."],
                    ['q' => "On refroidit un système à l’équilibre. Il évolue dans le sens…", 'c' => ["endothermique, qui absorbe encore de la chaleur", "exothermique, qui dégage de la chaleur", "le plus lent des deux", "qui compte le moins de molécules"], 'a' => 1, 'e' => "Refroidir, c’est retirer de la chaleur : le système en produit pour compenser, en allant dans le sens exothermique."],
                ],
            ],
            [
                'title' => "Pression, volume et équilibres gazeux",
                'description' => "Prévoir l’effet d’une variation de pression ou de volume sur les équilibres mettant en jeu des gaz.",
                'questions' => [
                    ['q' => "Pour N₂(g) + 3 H₂(g) ⇌ 2 NH₃(g), on augmente la pression à température constante. Que se passe-t-il ?", 'c' => ["L’équilibre se déplace vers N₂ et H₂", "Aucun déplacement ne se produit", "L’équilibre se déplace vers NH₃", "K diminue aussitôt"], 'a' => 2, 'e' => "À gauche on compte 4 moles de gaz, à droite 2. Une pression plus forte favorise le côté qui en contient le moins : NH₃."],
                    ['q' => "Dans 2 SO₂(g) + O₂(g) ⇌ 2 SO₃(g), combien de moles de gaz y a-t-il à gauche et à droite ?", 'c' => ["3 à gauche, 2 à droite", "2 à gauche et 3 à droite", "2 à gauche et 2 à droite", "1 à gauche et 1 à droite"], 'a' => 0, 'e' => "On additionne les coefficients de chaque côté : 2 + 1 = 3 d’un côté, 2 de l’autre."],
                    ['q' => "Un cylindre à piston contient 2 NO₂(g) ⇌ N₂O₄(g). On le comprime à température constante. Quelle évolution observe-t-on ?", 'c' => ["Il se forme plus de NO₂", "Les quantités ne changent pas", "N₂O₄ se décompose davantage", "Il se forme plus de N₂O₄"], 'a' => 3, 'e' => "Il y a 2 moles de gaz à gauche contre 1 à droite : la compression favorise le côté qui compte le moins de gaz, donc N₂O₄."],
                    ['q' => "On double la pression d’un mélange H₂(g) + I₂(g) ⇌ 2 HI(g) en le comprimant. Que devient la composition ?", 'c' => ["Il se forme plus de HI", "Elle ne change pas", "Il se forme moins de HI", "HI se décompose entièrement"], 'a' => 1, 'e' => "2 moles de gaz de chaque côté : aucun côté n’est avantagé par la pression, la composition reste la même."],
                    ['q' => "Pour 2 NO₂(g) ⇌ N₂O₄(g), on augmente le volume à température constante. Vers quel côté l’équilibre se déplace-t-il ?", 'c' => ["NO₂, le côté qui contient le plus de gaz", "N₂O₄, le côté qui contient le moins de gaz", "Aucun côté, le volume n’intervient pas", "N₂O₄, car ce gaz est incolore"], 'a' => 0, 'e' => "Agrandir le volume fait baisser la pression ; le système la soutient en formant plus de moles de gaz, donc plus de NO₂."],
                    ['q' => "Pour CaCO₃(s) ⇌ CaO(s) + CO₂(g), on comprime le système. Que se passe-t-il ?", 'c' => ["Formation de CaO et de CO₂, qui occupent plus de place", "Aucun déplacement, car il y a des solides des deux côtés", "Formation de CaO uniquement", "Formation de CaCO₃, seul à ne pas contenir de gaz"], 'a' => 3, 'e' => "Seuls les gaz comptent : 0 mole à gauche, 1 à droite. La compression favorise donc le côté sans gaz, CaCO₃."],
                    ['q' => "Pour laquelle de ces réactions (tous les corps sont gazeux) une variation de volume ne déplace-t-elle pas l’équilibre ?", 'c' => ["N₂ + 3 H₂ ⇌ 2 NH₃ (Haber)", "CO + H₂O ⇌ CO₂ + H₂", "2 SO₂ + O₂ ⇌ 2 SO₃", "2 NO₂ ⇌ N₂O₄"], 'a' => 1, 'e' => "Seule cette réaction a autant de moles de gaz de chaque côté (2 et 2). Dans les trois autres, le nombre change."],
                    ['q' => "Un gaz qui ne réagit pas est comprimé à température constante : son volume est divisé par 2. Sa pression passe de 1 bar à…", 'c' => ["0,5 bar", "1 bar", "2 bar", "4 bar"], 'a' => 2, 'e' => "À T constante, P × V reste constant : moitié moins de volume, pression doublée."],
                    ['q' => "Pour 2 HI(g) ⇌ H₂(g) + I₂(g), un élève prévoit qu’augmenter la pression favorise H₂ et I₂. Où est son erreur ?", 'c' => ["Il y a 2 moles de gaz de chaque côté : la pression ne déplace rien", "La pression favorise le côté qui contient le plus de gaz, ici la droite", "Il faut chauffer d’abord pour que la pression agisse", "HI n’est pas concerné car c’est un acide"], 'a' => 0, 'e' => "Le bilan gazeux est 2 contre 2. Sans différence de moles de gaz, la pression n’a aucun effet sur la position de l’équilibre."],
                    ['q' => "Pour CO(g) + 2 H₂(g) ⇌ CH₃OH(g), comment produire plus de méthanol à température constante ?", 'c' => ["Diminuer la pression", "Augmenter la pression", "Agrandir le volume du réacteur", "Retirer le catalyseur"], 'a' => 1, 'e' => "3 moles de gaz à gauche, 1 à droite : une pression élevée favorise le méthanol. Le catalyseur n’y change rien."],
                ],
            ],
            [
                'title' => "Catalyseur et équilibre",
                'description' => "Distinguer l’effet d’un catalyseur sur la vitesse de réaction de son absence d’effet sur la position de l’équilibre.",
                'questions' => [
                    ['q' => "Quel est l’effet d’un catalyseur sur une réaction réversible ?", 'c' => ["Il déplace l’équilibre vers les produits", "Il accélère l’atteinte de l’équilibre", "Il augmente la valeur de K", "Il rend la réaction totale"], 'a' => 1, 'e' => "Le catalyseur agit sur la durée pour arriver à l’équilibre, pas sur l’endroit où l’on arrive."],
                    ['q' => "Avec un catalyseur, à température constante, la valeur de K est…", 'c' => ["plus grande", "plus petite", "égale à 1", "inchangée"], 'a' => 3, 'e' => "Seule la température modifie K ; le catalyseur n’y change rien."],
                    ['q' => "Pourquoi un catalyseur ne change-t-il pas la composition à l’équilibre ?", 'c' => ["Il accélère les deux sens de la même façon", "Il est consommé en totalité pendant la réaction", "Il empêche la réaction inverse de se produire", "Il réagit surtout avec les produits qui se forment"], 'a' => 0, 'e' => "Comme les deux vitesses sont multipliées de la même façon, leur égalité se réalise pour la même composition, mais plus tôt."],
                    ['q' => "Deux tubes identiques contiennent le même mélange, l’un avec catalyseur. Une fois les deux à l’équilibre, que compare-t-on ?", 'c' => ["Plus de produit dans le tube catalysé", "Plus de produit dans l’autre tube", "Même composition dans les deux", "Le tube catalysé n’a plus de réactif"], 'a' => 2, 'e' => "Le tube catalysé arrive plus vite au palier, mais le palier est au même niveau."],
                    ['q' => "On ajoute un catalyseur à un système déjà à l’équilibre. Que se passe-t-il ?", 'c' => ["Les produits sont nettement favorisés", "Rien : la composition reste la même", "Les réactifs sont nettement favorisés", "La couleur du mélange change aussitôt"], 'a' => 1, 'e' => "Le système était déjà à l’égalité des vitesses ; accélérer les deux sens ne rompt pas cette égalité."],
                    ['q' => "Parmi ces actions, laquelle ne modifie PAS la composition du mélange à l’équilibre ?", 'c' => ["Ajouter un catalyseur", "Refroidir fortement le mélange", "Retirer un produit formé", "Ajouter un des réactifs"], 'a' => 0, 'e' => "Température et concentrations déplacent l’équilibre ; le catalyseur, lui, ne joue que sur la vitesse."],
                    ['q' => "Une usine veut atteindre plus vite l’état d’équilibre sans changer la composition finale. Que choisir ?", 'c' => ["Chauffer plus fort", "Éliminer le produit au fur et à mesure", "Ajouter un catalyseur", "Comprimer le mélange"], 'a' => 2, 'e' => "Chauffer, retirer un produit ou comprimer déplacent l’équilibre ; seul le catalyseur laisse la composition intacte."],
                    ['q' => "On suit la quantité de produit au cours du temps, avec et sans catalyseur. Que montrent les deux courbes ?", 'c' => ["Elles finissent à des valeurs différentes", "Elles ont exactement la même pente au départ", "Elles ne se rejoignent jamais, même après longtemps", "Même palier, atteint plus tôt avec catalyseur"], 'a' => 3, 'e' => "La pente initiale est plus forte avec catalyseur, mais le palier final est identique."],
                    ['q' => "Un élève dit : « sans catalyseur, il n’y a pas d’équilibre ». Comment le corriger ?", 'c' => ["Il a raison : le catalyseur fixe la valeur de K de l’équilibre", "L’équilibre existe sans lui, il est atteint plus lentement", "Il a raison, mais seulement pour les réactions gazeuses réversibles", "Il se trompe : le catalyseur crée les produits"], 'a' => 1, 'e' => "L’équilibre est une propriété du système chimique lui-même ; le catalyseur ne fait que raccourcir le trajet."],
                    ['q' => "Laquelle de ces phrases distingue correctement cinétique et équilibre ?", 'c' => ["La cinétique renseigne sur la composition finale, l’équilibre sur la durée", "Ce sont deux mots pour la même idée", "La cinétique décrit la vitesse, l’équilibre décrit l’état final atteint", "Un catalyseur modifie surtout l’équilibre, peu la cinétique"], 'a' => 2, 'e' => "Mnémo : cinétique = « à quelle vitesse ? », équilibre = « où arrive-t-on ? »."],
                ],
            ],
            [
                'title' => "Constante d’équilibre K",
                'description' => "Écrire une expression de constante d’équilibre, l’interpréter et faire de petits calculs de Kc.",
                'questions' => [
                    ['q' => "Pour A + B ⇌ C, quelle est l’expression de Kc ?", 'c' => ["Kc = [A][B]/[C]", "Kc = [A] + [B] − [C]", "Kc = [C] − [A][B]", "Kc = [C]/([A][B])"], 'a' => 3, 'e' => "Produits au numérateur, réactifs au dénominateur, chaque concentration élevée à son coefficient."],
                    ['q' => "Pour 2 A ⇌ B, laquelle de ces écritures de Kc est correcte ?", 'c' => ["Kc = [B]/(2 [A])", "Kc = [B]/[A]²", "Kc = [A]²/[B]", "Kc = [B]²/[A]"], 'a' => 1, 'e' => "Le coefficient 2 n’est pas un facteur mais un exposant : on écrit [A]²."],
                    ['q' => "Pour N₂O₄ ⇌ 2 NO₂, on mesure à l’équilibre [N₂O₄] = 0,02 mol/L et [NO₂] = 0,04 mol/L. Que vaut Kc (unité omise) ?", 'c' => ["2", "4", "0,08", "0,0016"], 'a' => 2, 'e' => "Kc = [NO₂]²/[N₂O₄] = (0,04)²/0,02 = 0,0016/0,02 = 0,08. Oublier le carré donnerait 2."],
                    ['q' => "Pour H₂ + I₂ ⇌ 2 HI, on a à l’équilibre [H₂] = 0,5 ; [I₂] = 0,5 et [HI] = 1,0 mol/L. Que vaut Kc ?", 'c' => ["4", "2", "0,25", "1"], 'a' => 0, 'e' => "Kc = [HI]²/([H₂][I₂]) = 1,0²/(0,5 × 0,5) = 1/0,25 = 4."],
                    ['q' => "À 25 °C, une réaction a Kc = 1,0 × 10⁵. Que peut-on en conclure ?", 'c' => ["À l’équilibre, les réactifs dominent encore", "La réaction est très rapide à 25 °C", "À l’équilibre, les produits dominent", "La température est très élevée dans le tube"], 'a' => 2, 'e' => "Un grand K signifie un numérateur (produits) bien supérieur au dénominateur (réactifs). K ne dit rien de la rapidité."],
                    ['q' => "Une réaction a Kc = 2 × 10⁻⁵. Que peut-on en conclure ?", 'c' => ["Les produits sont majoritaires à l’équilibre final", "Les réactifs sont majoritaires à l’équilibre", "Il n’y a pas d’équilibre", "La réaction est très lente"], 'a' => 1, 'e' => "Un K très inférieur à 1 indique que l’équilibre est très en faveur des réactifs ; l’équilibre existe quand même."],
                    ['q' => "Pour A + B ⇌ C on a Kc = 4. Pour la réaction écrite en sens inverse, C ⇌ A + B, la constante vaut…", 'c' => ["Kc′ = 4, inchangée", "Kc′ = −4", "Kc′ = 16, soit 4²", "Kc′ = 0,25"], 'a' => 3, 'e' => "Inverser l’équation revient à inverser la fraction : 1/4 = 0,25."],
                    ['q' => "Quelle est l’expression de Kc pour N₂ + 3 H₂ ⇌ 2 NH₃ ?", 'c' => ["Kc = [NH₃]²/([N₂][H₂]³)", "Kc = [NH₃]/([N₂][H₂])", "Kc = [N₂][H₂]³/[NH₃]²", "Kc = 2[NH₃]/([N₂] × 3[H₂])"], 'a' => 0, 'e' => "Les coefficients 2 et 3 deviennent des exposants ; les produits restent en haut."],
                    ['q' => "Pour A + B ⇌ C, Kc = 4. À l’équilibre [A] = [B] = 0,5 mol/L. Quelle est [C] ?", 'c' => ["0,25 mol/L", "1,0 mol/L", "2,0 mol/L", "4,0 mol/L"], 'a' => 1, 'e' => "[C] = Kc × [A][B] = 4 × 0,5 × 0,5 = 1,0 mol/L."],
                    ['q' => "Pour CaCO₃(s) ⇌ CaO(s) + CO₂(g), quelle est l’expression de Kc ?", 'c' => ["Kc = [CaO][CO₂]/[CaCO₃]", "Kc = [CO₂]/[CaCO₃]", "Kc = [CaO][CO₂]", "Kc = [CO₂]"], 'a' => 3, 'e' => "Les solides purs n’apparaissent pas dans l’expression de K : il ne reste que le gaz."],
                ],
            ],
            [
                'title' => "Quotient réactionnel et prédiction simple",
                'description' => "Comparer Q à K pour prévoir le sens d’évolution d’une réaction, avec de courts calculs.",
                'questions' => [
                    ['q' => "Que représente le quotient réactionnel Q ?", 'c' => ["K calculée avec les concentrations du moment", "La valeur de K mesurée à une température donnée", "Le temps nécessaire pour atteindre l’équilibre", "La vitesse de réaction mesurée à l’équilibre"], 'a' => 0, 'e' => "Q s’écrit comme K mais avec les concentrations du moment : c’est une photo instantanée du mélange."],
                    ['q' => "Pour une réaction, on trouve Q < K. Que va-t-il se passer ?", 'c' => ["Évolution dans le sens inverse, vers les réactifs", "Aucune évolution, le système est à l’équilibre", "Évolution dans le sens direct, vers les produits", "Arrêt de la réaction"], 'a' => 2, 'e' => "Q trop petit signifie trop peu de produits : le système en forme jusqu’à ce que Q monte jusqu’à K."],
                    ['q' => "Pour une réaction, on trouve Q > K. Que va-t-il se passer ?", 'c' => ["La réaction avance dans le sens direct", "Elle avance dans le sens inverse", "Rien, le système est à l’équilibre", "K augmente jusqu’à égaler Q"], 'a' => 1, 'e' => "Trop de produits par rapport à l’équilibre : une partie est consommée, ce qui fait redescendre Q. K ne bouge pas."],
                    ['q' => "Pour A + B ⇌ C, Kc = 4. Dans un mélange, [A] = [B] = [C] = 0,5 mol/L. Que vaut Q et vers où évolue le système ?", 'c' => ["Q = 1, évolution vers A et B", "Q = 2, évolution vers A et B", "Q = 1, évolution vers C", "Q = 2, évolution vers C"], 'a' => 3, 'e' => "Q = 0,5/(0,5 × 0,5) = 2. Comme 2 < 4, le système forme du C pour que Q monte vers K."],
                    ['q' => "Pour H₂ + I₂ ⇌ 2 HI, Kc = 50. Un mélange contient [H₂] = [I₂] = 0,1 et [HI] = 1,0 mol/L. Que vaut Q et quel est le sens d’évolution ?", 'c' => ["Q = 10, évolution vers HI", "Q = 100, évolution vers HI", "Q = 100, retour vers H₂ + I₂", "Q = 10, évolution vers H₂ et I₂"], 'a' => 2, 'e' => "Q = 1,0²/(0,1 × 0,1) = 1/0,01 = 100. Q > K : HI est en excès, il se décompose."],
                    ['q' => "Un mélange est à l’équilibre. Quel résultat obtient-on en calculant Q ?", 'c' => ["Q est égal à K", "Q est égal à 1", "Q est nul", "Q est le double de K"], 'a' => 0, 'e' => "C’est justement la définition de l’équilibre : Q = K, quelle que soit la valeur de K."],
                    ['q' => "Pour A + B ⇌ C, Kc = 4. À l’équilibre, [A] = [B] = 0,5 et [C] = 1 mol/L. On ajoute du A pour avoir [A] = 1,0 mol/L. Que vaut Q et quelle évolution suit ?", 'c' => ["Q = 4, le système reste à l’équilibre", "Q = 8, évolution vers A et B", "Q = 2, évolution vers A et B", "Q = 2, évolution vers C"], 'a' => 3, 'e' => "Q = 1/(1,0 × 0,5) = 2, inférieur à 4 : le système forme du C jusqu’à retrouver Q = K."],
                    ['q' => "Un élève affirme : « Q ne peut se calculer qu’à l’équilibre ». Que répondre ?", 'c' => ["Vrai : Q n’a de sens qu’à l’équilibre", "Faux : Q se calcule à tout instant", "Vrai : Q vaut toujours 1 au départ", "Faux : Q ne concerne que les solides"], 'a' => 1, 'e' => "C’est tout l’intérêt de Q : il sert à prévoir, avant l’équilibre, dans quel sens le mélange va évoluer."],
                    ['q' => "Pour A + B ⇌ C, on retire une partie du produit C à l’équilibre. Que devient Q, et vers où évolue le système ?", 'c' => ["Q devient supérieur à K, évolution vers A et B", "Q devient supérieur à K, évolution vers C", "Q devient inférieur à K, évolution vers A et B", "Q devient inférieur à K, évolution vers C"], 'a' => 3, 'e' => "[C] baisse, donc Q baisse sous K, et le système reforme du C. On retrouve le résultat de Le Châtelier par le calcul."],
                    ['q' => "Pour A + B ⇌ C, Kc = 10. On mélange A et B à 1 mol/L chacun, sans C. Quel est le sens d’évolution ?", 'c' => ["Sens direct, car Q = 0 est inférieur à K", "Sens inverse, car Q = 0 est inférieur à K", "Aucune évolution, car Q = 0", "On ne peut pas savoir sans connaître la durée"], 'a' => 0, 'e' => "Q = 0/(1 × 1) = 0, bien sous K : le système ne peut qu’avancer vers C. Si Q < K, on va vers les produits."],
                ],
            ],
            [
                'title' => "Révision générale des équilibres chimiques",
                'description' => "Réunir les notions essentielles : équilibre dynamique, Le Châtelier, température, pression, catalyseur, K et Q.",
                'questions' => [
                    ['q' => "On place 1 mol de A seul dans un récipient fermé de volume constant. Pour A ⇌ B, Kc = 1. Quelle est la composition à l’équilibre ?", 'c' => ["1 mol de B et 0 mol de A", "0,25 mol de A et 0,75 mol de B", "0,5 mol de A et 0,5 mol de B", "1 mol de A et 0 mol de B"], 'a' => 2, 'e' => "Kc = [B]/[A] = 1 impose [A] = [B] : la moitié de A s’est transformée."],
                    ['q' => "Pour 2 SO₂(g) + O₂(g) ⇌ 2 SO₃(g), réaction exothermique, quelle combinaison favorise le plus SO₃ ?", 'c' => ["Refroidir et comprimer", "Chauffer fortement et comprimer", "Refroidir et agrandir le volume", "Chauffer et agrandir le volume"], 'a' => 0, 'e' => "Le froid favorise le sens exothermique, et la compression le côté à 2 moles de gaz plutôt que 3 : les deux effets vont vers SO₃."],
                    ['q' => "Pour A + B ⇌ C, Kc = 2. Un mélange contient [A] = 1, [B] = 1 et [C] = 3 mol/L. Dans quel sens évolue-t-il ?", 'c' => ["Sens direct, car Q = 3 est supérieur à 2", "Sens direct, car C est en excès", "Aucune évolution, car [A] = [B]", "Sens inverse, car Q = 3 > 2"], 'a' => 3, 'e' => "Q = 3/(1 × 1) = 3 > 2 : trop de produit, le système en consomme une partie."],
                    ['q' => "Pour A + B ⇌ C + D avec Kc = 4, on mélange 1 mol de A et 1 mol de B dans un même volume. Quelle quantité de C obtient-on à l’équilibre ?", 'c' => ["0,50 mol, la moitié de A", "0,67 mol", "0,80 mol, soit 80 %", "1,0 mol, réaction totale"], 'a' => 1, 'e' => "Kc = x²/(1 − x)² = 4 donne x/(1 − x) = 2, donc x = 2/3, soit environ 0,67 mol. Les volumes se simplifient car il y a autant de mol de chaque côté."],
                    ['q' => "Parmi ces changements, lequel modifie la valeur de K ?", 'c' => ["Ajouter un réactif", "Ajouter un catalyseur", "Comprimer le mélange", "Chauffer le mélange"], 'a' => 3, 'e' => "K ne dépend que de la température. Concentrations et pression déplacent l’équilibre, le catalyseur accélère, mais aucun ne change K."],
                    ['q' => "Un tube N₂O₄ (incolore) ⇌ 2 NO₂ (brun), réaction directe endothermique, est plongé dans de la glace. Que devient sa teinte ?", 'c' => ["Plus foncée, car NO₂ se forme", "Identique, car le froid ralentit tout", "Plus claire, car N₂O₄ se forme", "Foncée puis claire en alternance"], 'a' => 2, 'e' => "Refroidir favorise le sens exothermique, ici 2 NO₂ → N₂O₄ : la couleur brune s’atténue."],
                    ['q' => "Pourquoi utilise-t-on un catalyseur pour la synthèse de NH₃ ?", 'c' => ["Il déplace l’équilibre vers NH₃ à basse température", "Il accélère sans changer l’équilibre", "Il augmente la valeur de K à toute température", "Il permet de se passer de toute compression"], 'a' => 1, 'e' => "Le rôle du catalyseur est purement cinétique : on atteint plus vite le même équilibre."],
                    ['q' => "Dans N₂ + 3 H₂ ⇌ 2 NH₃ à l’équilibre, on ajoute du N₂. Que devient Q ?", 'c' => ["Q passe sous K : NH₃ se forme, K ne change pas", "Q passe au-dessus de K : NH₃ se forme, K ne change pas", "Q passe sous K : NH₃ se décompose, K diminue", "Q reste égal à K : rien ne se passe, K ne change pas"], 'a' => 0, 'e' => "[N₂] est au dénominateur : l’ajouter fait baisser Q sous K, d’où évolution vers NH₃."],
                    ['q' => "Pour N₂(g) + O₂(g) ⇌ 2 NO(g), réaction endothermique, quel changement ne modifie PAS la composition à l’équilibre ?", 'c' => ["Chauffer le mélange réactionnel", "Ajouter du N₂ au mélange", "Comprimer le mélange", "Retirer du NO au fur et à mesure"], 'a' => 2, 'e' => "Il y a 2 moles de gaz de chaque côté : la pression n’a pas d’effet. La température et les concentrations, elles, déplacent l’équilibre."],
                    ['q' => "Un système exothermique à l’équilibre est chauffé. Que deviennent K et le sens d’évolution ?", 'c' => ["K augmente, évolution dans le sens direct", "K diminue, évolution dans le sens inverse", "K diminue, évolution dans le sens direct", "K ne change pas, évolution dans le sens inverse"], 'a' => 1, 'e' => "Chauffer défavorise le sens exothermique, donc K diminue. Avec la nouvelle valeur de K, Q est supérieur à K et le système recule vers les réactifs."],
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
