<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AcidsBasesBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'acids-bases')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 65],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 70],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Les bases des acides et des bases",
                'description' => "Reconnaître les solutions acides, basiques et neutres et lire une valeur de pH.",
                'questions' => [
                    ['q' => "Selon Arrhenius, un acide augmente dans l’eau la concentration de quels ions ?", 'c' => ["des ions OH⁻", "des ions Na⁺", "des ions H₃O⁺", "des ions Cl⁻ et Na⁺"], 'a' => 2, 'e' => "Dans le modèle d’Arrhenius, l’acide libère des ions H₃O⁺ (écrits H⁺ en version simplifiée) ; ce sont eux qui rendent la solution acide."],
                    ['q' => "Selon Arrhenius, une base augmente dans l’eau la concentration des ions…", 'c' => ["hydroxyde OH⁻", "oxonium H₃O⁺", "chlorure Cl⁻", "sodium Na⁺"], 'a' => 0, 'e' => "C’est le pendant de l’acide : la base fournit des ions hydroxyde OH⁻. Le sodium est un simple spectateur dans la soude."],
                    ['q' => "Le jus de citron d’un verre d’eau citronnée a un pH de 2,3 à 25 °C. Cette solution est…", 'c' => ["basique", "neutre", "acide", "saline"], 'a' => 2, 'e' => "Tout ce qui est sous 7 est acide à 25 °C, et 2,3 en est loin."],
                    ['q' => "À 25 °C, quelle valeur de pH est celle d’une solution neutre ?", 'c' => ["0", "7", "10", "14"], 'a' => 1, 'e' => "L’eau pure contient autant de H₃O⁺ que de OH⁻ (10⁻⁷ mol/L chacun), ce qui donne pH = 7. Les extrémités 0 et 14 sont très acide et très basique."],
                    ['q' => "Parmi ces solutions à 25 °C, laquelle est la plus acide ?", 'c' => ["pH 6", "pH 11", "pH 7", "pH 2"], 'a' => 3, 'e' => "Plus le pH est petit, plus la solution est acide : pH 2 gagne devant pH 6."],
                    ['q' => "Un élève affirme : « une solution de pH 12 est acide ». Que lui répondre ?", 'c' => ["Au-dessus de 7, la solution est basique à 25 °C", "Le pH 12 correspond à une solution parfaitement neutre", "Le pH mesure une couleur et non l’acidité", "Il faudrait un pH négatif pour être acide"], 'a' => 0, 'e' => "L’échelle est coupée en deux autour de 7 : sous 7 acide, au-dessus basique. pH 12 est donc nettement basique."],
                    ['q' => "Que mesure le pH d’une solution ?", 'c' => ["La quantité de soluté en grammes par litre", "Une mesure de l’acidité liée à [H₃O⁺]", "La température de la solution", "Le volume de liquide présent"], 'a' => 1, 'e' => "Le pH traduit la concentration en ions H₃O⁺ sur une échelle logarithmique : c’est un indicateur d’acidité, pas une masse ni un volume."],
                    ['q' => "Quel produit courant a un pH supérieur à 7 ?", 'c' => ["Le vinaigre blanc", "Le jus de citron", "Le savon liquide", "Le soda au cola"], 'a' => 2, 'e' => "Le savon en solution est basique (pH voisin de 10), alors que vinaigre, citron et cola sont acides."],
                    ['q' => "Quelle substance est surtout responsable de l’acidité du jus de citron ?", 'c' => ["L’acide chlorhydrique", "La soude", "L’ammoniac", "L’acide citrique"], 'a' => 3, 'e' => "Le nom du fruit donne l’indice : l’acide citrique. L’acide chlorhydrique est celui de l’estomac, pas du citron."],
                    ['q' => "Dans une solution neutre à 25 °C, la concentration en H₃O⁺ est… celle en OH⁻.", 'c' => ["supérieure à", "égale à", "inférieure à", "indépendante de"], 'a' => 1, 'e' => "Neutre veut dire équilibre entre acide et base : [H₃O⁺] = [OH⁻]. La solution contient bien des ions, mais en quantités égales."],
                ],
            ],
            [
                'title' => "Brønsted-Lowry et couples acide-base",
                'description' => "Identifier qui donne et qui capte le proton, et reconnaître les couples conjugués.",
                'questions' => [
                    ['q' => "Dans HNO₃ + H₂O → NO₃⁻ + H₃O⁺, HNO₃ joue le rôle d’acide car il…", 'c' => ["cède un H⁺ à l’eau", "capte un H⁺ de l’eau", "libère un ion OH⁻", "reçoit un électron"], 'a' => 0, 'e' => "Pour Brønsted, un acide est un donneur de proton : HNO₃ perd H⁺ et devient NO₃⁻, tandis que l’eau le récupère."],
                    ['q' => "Selon Brønsted-Lowry, qu’est-ce qu’une base ?", 'c' => ["Une espèce qui cède un proton", "Une espèce qui libère des électrons", "Une espèce qui capte un proton", "Une espèce qui contient du métal"], 'a' => 2, 'e' => "Acide = donneur de H⁺, base = accepteur de H⁺. Aucun métal n’est requis, NH₃ en est la preuve."],
                    ['q' => "Dans NH₃ + H₂O ⇌ NH₄⁺ + OH⁻, quelle espèce joue le rôle de base dans le sens direct ?", 'c' => ["H₂O", "NH₃", "OH⁻", "NH₄⁺"], 'a' => 1, 'e' => "NH₃ gagne un proton pour devenir NH₄⁺, c’est donc lui l’accepteur. L’eau, elle, donne son proton."],
                    ['q' => "Complète l’équation : CH₃COOH + H₂O ⇌ CH₃COO⁻ + …", 'c' => ["H₂O₂", "OH⁻", "H₃O⁺", "CH₄"], 'a' => 2, 'e' => "L’eau capte le proton cédé par l’acide éthanoïque et devient H₃O⁺ ; la charge totale reste nulle de part et d’autre."],
                    ['q' => "Laquelle de ces paires est un couple acide/base ?", 'c' => ["H₃O⁺ / H₂O", "HCl / OH⁻", "NaOH / Na⁺", "H₂SO₄ / HSO₃⁻"], 'a' => 0, 'e' => "Les deux membres d’un couple ne diffèrent que d’un H⁺ : H₃O⁺ perd un proton et devient H₂O. Pour l’acide sulfurique, le bon partenaire serait HSO₄⁻."],
                    ['q' => "Quelle est la base conjuguée de H₂O (couple H₂O / …) ?", 'c' => ["H₃O⁺", "O²⁻", "H₂", "OH⁻"], 'a' => 3, 'e' => "Retire un H⁺ à H₂O et il reste OH⁻. Dans l’autre couple (H₃O⁺/H₂O), c’est l’eau qui est la base : elle joue les deux rôles."],
                    ['q' => "Quel est l’acide conjugué de l’ion hydrogénocarbonate HCO₃⁻ ?", 'c' => ["CO₃²⁻", "H₂CO₃", "CO₂", "H₃CO₃⁺"], 'a' => 1, 'e' => "L’acide conjugué s’obtient en ajoutant un proton : HCO₃⁻ + H⁺ donne H₂CO₃. CO₃²⁻ serait sa base conjuguée."],
                    ['q' => "L’eau est dite amphotère car elle peut…", 'c' => ["geler ou bouillir selon la pression", "dissoudre à la fois des sels et des gaz", "agir en acide ou en base selon le cas", "conduire à la fois le courant et la chaleur"], 'a' => 2, 'e' => "Face à un acide elle capte H⁺, face à une base elle le cède : elle appartient aux couples H₃O⁺/H₂O et H₂O/OH⁻."],
                    ['q' => "Trois de ces espèces peuvent céder un proton. Laquelle ne le peut pas ?", 'c' => ["HCl", "NH₄⁺", "H₂SO₄", "Cl⁻"], 'a' => 3, 'e' => "Cl⁻ n’a plus d’hydrogène acide à donner : c’est la base conjuguée de HCl, pas un acide."],
                    ['q' => "Pourquoi H₂O et H₂O₂ ne forment-ils pas un couple acide/base ?", 'c' => ["Ils ne diffèrent pas d’un seul H⁺", "Ils sont tous deux liquides à 25 °C", "H₂O₂ ne contient pas d’oxygène", "Leurs masses molaires sont trop proches"], 'a' => 0, 'e' => "Les formes d’un couple ne se distinguent que par un proton. H₂O₂ possède un atome d’oxygène de plus que H₂O, ce qui n’a rien d’un transfert de H⁺."],
                ],
            ],
            [
                'title' => "pH et pOH : calculs simples",
                'description' => "Passer de la concentration au pH et inversement, avec des puissances de 10.",
                'questions' => [
                    ['q' => "Quelle formule donne le pH à partir de [H₃O⁺] exprimée en mol/L ?", 'c' => ["pH = −log [H₃O⁺]", "pH = 1/[H₃O⁺]", "pH = [H₃O⁺]²", "pH = log [OH⁻]"], 'a' => 0, 'e' => "Le signe moins est essentiel : la concentration est petite, son log est négatif et le pH ressort positif."],
                    ['q' => "Une solution a [H₃O⁺] = 1,0 × 10⁻³ mol/L. Quel est son pH ?", 'c' => ["−3", "3", "2", "4"], 'a' => 1, 'e' => "pH = −log(10⁻³) = −(−3) = 3. On lit simplement l’exposant, sans le signe."],
                    ['q' => "Une solution de HCl (acide fort, ionisation totale) à 0,010 mol/L a un pH de…", 'c' => ["1", "10", "12", "2"], 'a' => 3, 'e' => "L’acide est totalement ionisé donc [H₃O⁺] = 0,010 = 10⁻² mol/L et pH = 2."],
                    ['q' => "À 25 °C, une solution a un pH de 3. Son pOH vaut…", 'c' => ["3", "7", "17 (14 + 3)", "11"], 'a' => 3, 'e' => "À 25 °C pH + pOH = 14, donc pOH = 14 − 3 = 11."],
                    ['q' => "À 25 °C, [OH⁻] = 1,0 × 10⁻² mol/L. Quel est le pH ?", 'c' => ["12", "2 (le pOH)", "10", "14"], 'a' => 0, 'e' => "On calcule d’abord pOH = 2 puis pH = 14 − 2 = 12. Le piège est de s’arrêter à 2, qui est le pOH."],
                    ['q' => "Une solution A a un pH de 2 et une solution B un pH de 5. Combien de fois [H₃O⁺] de A est-elle plus grande que celle de B ?", 'c' => ["3 (écart de pH)", "30", "1000", "100"], 'a' => 2, 'e' => "L’écart est de 3 unités, soit 10³ = 1000 : chaque unité de pH multiplie par 10, il ne faut pas ajouter les unités mais les puissances."],
                    ['q' => "Passer de pH 7 à pH 6 revient à…", 'c' => ["diviser [H₃O⁺] par 10", "multiplier [H₃O⁺] par 10", "soustraire 1 mol/L à [H₃O⁺]", "doubler [H₃O⁺]"], 'a' => 1, 'e' => "Le pH baisse, la solution devient plus acide : [H₃O⁺] est 10 fois plus grande, car l’échelle est logarithmique."],
                    ['q' => "Une solution de soude NaOH (base forte) à 0,10 mol/L a, à 25 °C, un pH de…", 'c' => ["13", "1", "10", "14 (pH maximal)"], 'a' => 0, 'e' => "[OH⁻] = 0,10 donne pOH = 1, puis pH = 14 − 1 = 13. Le pH de 1 serait celui d’un acide fort de même concentration."],
                    ['q' => "Un élève calcule pH = −log(10⁻⁴) et trouve −4. Quelle est son erreur ?", 'c' => ["Il aurait dû utiliser ln : le pH vaut 9,2", "Il aurait dû ajouter 14 au résultat final : le pH vaut 10", "Il a oublié le signe − de la formule : le pH vaut 4", "Il n’y a pas d’erreur : le pH vaut −4"], 'a' => 2, 'e' => "log(10⁻⁴) = −4 et il faut encore appliquer le signe moins devant : pH = 4."],
                    ['q' => "On dilue 100 fois une solution d’acide fort de pH 2. Quel est le pH obtenu ?", 'c' => ["0", "3", "100", "4"], 'a' => 3, 'e' => "Diluer 100 fois divise [H₃O⁺] par 10², donc le pH gagne 2 unités : 2 + 2 = 4."],
                ],
            ],
            [
                'title' => "Acides et bases forts ou faibles",
                'description' => "Distinguer la force d’un acide de la concentration de sa solution et comparer des pH.",
                'questions' => [
                    ['q' => "Laquelle de ces substances est un acide fort ?", 'c' => ["CH₃COOH", "H₂CO₃", "HCl", "NH₄⁺"], 'a' => 2, 'e' => "HCl cède son proton à l’eau de façon quasi totale. L’acide éthanoïque, l’acide carbonique et l’ion ammonium ne le font que partiellement."],
                    ['q' => "Laquelle de ces espèces est une base forte ?", 'c' => ["NH₃", "CH₃COO⁻", "HCO₃⁻", "NaOH"], 'a' => 3, 'e' => "NaOH est un solide ionique qui libère entièrement ses ions OH⁻ dans l’eau. Les trois autres sont des bases faibles."],
                    ['q' => "Que signifie « acide fort » dans l’eau ?", 'c' => ["Sa solution contient beaucoup de soluté dissous", "Il réagit presque totalement avec l’eau", "Il attaque la plupart des métaux", "Sa masse molaire est élevée"], 'a' => 1, 'e' => "La force dépend de la réaction avec l’eau, pas de la quantité dissoute : un acide fort peut très bien être dilué."],
                    ['q' => "Un acide faible peut-il former une solution concentrée ?", 'c' => ["Oui : la force et la concentration sont indépendantes", "Non : une solution concentrée contient forcément un acide fort", "Oui, mais il devient alors un acide fort", "Non : un acide faible ne se dissout pas bien"], 'a' => 0, 'e' => "Concentration = combien on en a mis, force = quelle part réagit avec l’eau. Le vinaigre en est un bon exemple, concentré et pourtant faible."],
                    ['q' => "Laquelle de ces équations décrit la réaction totale d’un acide fort avec l’eau ?", 'c' => ["CH₃COOH + H₂O → CH₃COO⁻ + H₃O⁺", "HCl + H₂O → H₃O⁺ + Cl⁻", "NH₃ + H₂O → NH₄⁺ + OH⁻", "HCl + H₂O ⇌ H₂ + HClO"], 'a' => 1, 'e' => "La flèche simple signale une réaction totale, ce qui convient à HCl. Pour CH₃COOH et NH₃, on doit écrire ⇌ car ils sont faibles."],
                    ['q' => "On prépare 0,10 mol/L de HCl et 0,10 mol/L de CH₃COOH. Le pH de CH₃COOH est proche de…", 'c' => ["1 (comme HCl)", "7", "13", "2,9"], 'a' => 3, 'e' => "HCl donne pH = 1, alors que l’acide faible ne libère qu’environ 1 % de H₃O⁺ : [H₃O⁺] ≈ 1,3 × 10⁻³ mol/L, d’où pH ≈ 2,9."],
                    ['q' => "Dans une solution de NH₃, que trouve-t-on surtout à l’équilibre ?", 'c' => ["Des ions NH₄⁺ et OH⁻", "Des molécules NH₃", "Des ions H₃O⁺", "Des ions NH₂⁻"], 'a' => 1, 'e' => "NH₃ est une base faible : seule une petite fraction des molécules capte un proton à l’eau, la grande majorité reste sous forme NH₃."],
                    ['q' => "Quatre solutions ont la même concentration, 0,10 mol/L. Laquelle a le pH le plus élevé ?", 'c' => ["HCl", "CH₃COOH", "NH₃", "NaOH"], 'a' => 3, 'e' => "La base forte donne le plus d’ions OH⁻ (pH 13). NH₃ vient ensuite avec un pH voisin de 11, les deux acides étant sous 7."],
                    ['q' => "On dilue 10 fois une solution de HCl à 0,10 mol/L. Quel est le pH final ?", 'c' => ["0", "1 (pH inchangé)", "2", "3"], 'a' => 2, 'e' => "Après dilution [H₃O⁺] = 0,010 mol/L, donc pH = 2. Le pH ne gagne qu’une unité, car on a divisé par 10 et non par 100."],
                    ['q' => "Trois de ces acides sont forts. Lequel est faible ?", 'c' => ["HCOOH", "HBr", "HNO₃", "HClO₄"], 'a' => 0, 'e' => "L’acide méthanoïque HCOOH (celui des fourmis) est faible. HBr, HNO₃ et HClO₄ sont tous trois des acides forts."],
                ],
            ],
            [
                'title' => "Neutralisation et dosage acide-base",
                'description' => "Écrire une neutralisation, raisonner en quantités de matière et exploiter un dosage.",
                'questions' => [
                    ['q' => "Quelle équation traduit la neutralisation d’un acide par une base en solution aqueuse ?", 'c' => ["H₃O⁺ + OH⁻ → H₂ + O₂", "H₃O⁺ + OH⁻ → 2 H₂O", "H₃O⁺ + OH⁻ → H₂O₂", "H₃O⁺ + OH⁻ → H₃O₂"], 'a' => 1, 'e' => "Le proton de H₃O⁺ est capté par OH⁻ : on forme deux molécules d’eau, et les atomes comme les charges sont bien équilibrés."],
                    ['q' => "Que forme-t-on en mélangeant HCl et NaOH en solution ?", 'c' => ["Du dihydrogène et du dichlore", "De l’eau de Javel et du sodium", "Du sel et du dioxygène", "NaCl et H₂O"], 'a' => 3, 'e' => "Acide + base donne un sel et de l’eau : ici HCl + NaOH → NaCl + H₂O."],
                    ['q' => "Dans H₂SO₄ + 2 NaOH → Na₂SO₄ + 2 H₂O, combien de moles de NaOH neutralisent 1 mol de H₂SO₄ ?", 'c' => ["2", "1", "3", "0,5"], 'a' => 0, 'e' => "L’acide sulfurique libère deux protons, donc il faut deux OH⁻ : c’est le coefficient 2 devant NaOH qui l’indique."],
                    ['q' => "On mélange 0,10 mol de HCl et 0,10 mol de NaOH. Que contient la solution finale ?", 'c' => ["Un excès de HCl non neutralisé", "Un excès de NaOH non neutralisé", "Des ions Na⁺ et Cl⁻ sans excès d’acide", "Du dihydrogène gazeux dégagé"], 'a' => 2, 'e' => "Les quantités sont identiques et le rapport est 1:1, donc tout H₃O⁺ et tout OH⁻ disparaissent. Il reste une solution de sel, de pH 7."],
                    ['q' => "On met en présence 0,20 mol de H⁺ et 0,10 mol de OH⁻. Combien de H⁺ reste-t-il après réaction ?", 'c' => ["0,10 mol", "0 mol", "0,05 mol", "0,30 mol"], 'a' => 0, 'e' => "Chaque OH⁻ consomme un H⁺ : 0,20 − 0,10 = 0,10 mol de H⁺ restant. La solution reste acide."],
                    ['q' => "À l’équivalence du dosage de HCl par NaOH, on a…", 'c' => ["V(NaOH) versé = V(HCl) prélevé", "n(H₃O⁺) = n(OH⁻) versée", "pH = 0", "[NaOH] = [HCl] avant mélange"], 'a' => 1, 'e' => "L’équivalence est atteinte quand les deux réactifs ont été introduits dans les proportions de l’équation, ici en quantités égales. Les volumes et les concentrations n’ont, eux, aucune raison d’être égaux."],
                    ['q' => "Pendant un dosage, l’indicateur coloré change de teinte. Que repère-t-on ?", 'c' => ["La fin de la réaction pour chaque ion", "Le voisinage de l’équivalence", "L’instant où l’acide devient fort", "La température maximale"], 'a' => 1, 'e' => "Le virage de couleur survient lorsque le pH varie brusquement, c’est-à-dire près de l’équivalence. Il sert de repère visuel sans pH-mètre."],
                    ['q' => "Il faut 20,0 mL de NaOH à 0,10 mol/L pour doser 10,0 mL de HCl. Quelle est la concentration de HCl ?", 'c' => ["0,050 mol/L", "0,10 mol/L", "0,20 mol/L", "2,0 mol/L"], 'a' => 2, 'e' => "n(OH⁻) = 0,10 × 0,0200 = 2,0 × 10⁻³ mol = n(H₃O⁺), puis C = 2,0 × 10⁻³ / 0,0100 = 0,20 mol/L."],
                    ['q' => "À 25 °C, quel est le pH à l’équivalence du dosage d’un acide fort par une base forte ?", 'c' => ["1", "10", "14", "7"], 'a' => 3, 'e' => "Il ne reste ni acide ni base en excès, seulement un sel dont les ions sont indifférents : la solution est neutre."],
                    ['q' => "On dose CH₃COOH par NaOH. À l’équivalence, le pH (25 °C) est…", 'c' => ["supérieur à 7", "nettement inférieur à 7", "égal à 7", "égal à 14"], 'a' => 0, 'e' => "À l’équivalence il ne reste que l’ion éthanoate, une base faible : il capte un peu de H⁺ à l’eau et libère OH⁻, d’où un pH basique (environ 8,7)."],
                ],
            ],
            [
                'title' => "Ka, Kb et force acide-base",
                'description' => "Utiliser Ka, pKa et Kb pour comparer des acides et des bases.",
                'questions' => [
                    ['q' => "Pour le couple CH₃COOH / CH₃COO⁻, Ka est la constante de la réaction…", 'c' => ["CH₃COO⁻ + H₂O ⇌ CH₃COOH + OH⁻ dans l’eau", "CH₃COO⁻ + H₃O⁺ → CH₃COOH + H₂O", "CH₃COOH + H₂O ⇌ CH₃COO⁻ + H₃O⁺", "CH₃COOH + OH⁻ → CH₃COO⁻ + H₂O"], 'a' => 2, 'e' => "Ka est toujours associée à l’acide qui réagit avec l’eau pour donner sa base conjuguée et H₃O⁺. L’équation avec OH⁻ à droite correspond à Kb."],
                    ['q' => "Pour HA + H₂O ⇌ H₃O⁺ + A⁻, quelle est l’expression de Ka ?", 'c' => ["Ka = [HA] / ([H₃O⁺][A⁻])", "Ka = [H₃O⁺][A⁻] / [HA]", "Ka = [H₃O⁺][HA] / [A⁻]", "Ka = [A⁻] / [H₃O⁺]"], 'a' => 1, 'e' => "Produits au numérateur, réactif au dénominateur, et l’eau (solvant) n’apparaît pas."],
                    ['q' => "Un acide a pour constante Ka = 1,0 × 10⁻⁵. Quel est son pKa ?", 'c' => ["−5", "9", "10⁻⁵", "5"], 'a' => 3, 'e' => "pKa = −log Ka = −log(10⁻⁵) = 5. Un grand Ka correspond à un petit pKa."],
                    ['q' => "Acide A : Ka = 10⁻³ ; acide B : Ka = 10⁻⁷. Lequel est le plus fort et pourquoi ?", 'c' => ["A, car sa constante Ka est la plus grande", "B, car sa constante Ka est la plus petite du couple", "A, car son exposant est le plus négatif", "B, car son pKa est le plus petit"], 'a' => 0, 'e' => "Plus Ka est grande, plus l’acide cède facilement son proton. Le pKa de A vaut 3, celui de B 7 : le plus petit pKa est celui de A."],
                    ['q' => "À 25 °C, pour un couple acide/base dans l’eau, que vaut le produit Ka × Kb ?", 'c' => ["10⁻¹⁴", "1", "7", "1,0 × 10¹⁴"], 'a' => 0, 'e' => "Ka × Kb = Ke = 10⁻¹⁴ à 25 °C : plus un acide est fort, plus sa base conjuguée est faible."],
                    ['q' => "On connaît les pKa de CH₃COOH (4,8), H₂CO₃ (6,4), NH₄⁺ (9,2) et HCl (environ −6). Quelle base est la plus forte parmi Cl⁻, HCO₃⁻, CH₃COO⁻, NH₃ ?", 'c' => ["Cl⁻", "HCO₃⁻", "CH₃COO⁻", "NH₃"], 'a' => 3, 'e' => "La base conjuguée la plus forte est celle dont l’acide a le pKa le plus grand, ici NH₄⁺ (9,2), donc NH₃."],
                    ['q' => "Une solution d’acide faible HA à 0,10 mol/L a Ka = 1,0 × 10⁻⁵. Son pH est proche de…", 'c' => ["1", "3", "5 (pH = pKa)", "6"], 'a' => 1, 'e' => "Avec l’approximation x² = Ka × C = 10⁻⁶, on trouve [H₃O⁺] = 10⁻³ mol/L, d’où pH = 3."],
                    ['q' => "On dilue une solution d’acide faible. La proportion de molécules ionisées…", 'c' => ["augmente", "diminue", "reste identique", "devient nulle"], 'a' => 0, 'e' => "Plus on ajoute d’eau, plus l’équilibre se déplace vers les espèces ionisées : l’acide est plus dissocié, même si [H₃O⁺] baisse."],
                    ['q' => "Laquelle de ces actions modifie la valeur de Ka d’un acide ?", 'c' => ["Augmenter la concentration initiale", "Ajouter de l’eau", "Chauffer la solution", "Ajouter de la base conjuguée"], 'a' => 2, 'e' => "Une constante d’équilibre ne dépend que de la température. Les autres actions déplacent l’équilibre sans changer K."],
                    ['q' => "Dans une solution de pH 3 à 25 °C, quelle est la concentration [OH⁻] ?", 'c' => ["1,0 × 10⁻³ mol/L", "1,0 × 10⁻⁷ mol/L", "1,0 × 10⁻¹⁴ mol/L", "1,0 × 10⁻¹¹ mol/L"], 'a' => 3, 'e' => "[H₃O⁺] = 10⁻³ et Ke = [H₃O⁺][OH⁻] = 10⁻¹⁴, donc [OH⁻] = 10⁻¹¹ mol/L (pOH = 11)."],
                ],
            ],
            [
                'title' => "Indicateurs et mesures du pH",
                'description' => "Interpréter des couleurs d’indicateurs et mesurer un pH avec soin.",
                'questions' => [
                    ['q' => "Le bleu de bromothymol est jaune en milieu acide, vert vers pH 7 et bleu en milieu basique. Quelle couleur prend-il dans du jus de citron ?", 'c' => ["Bleu", "Vert", "Jaune", "Incolore"], 'a' => 2, 'e' => "Le jus de citron est acide, donc la teinte est celle de la forme acide : jaune."],
                    ['q' => "Quelques gouttes de phénolphtaléine sont ajoutées à de la soude diluée. La solution devient…", 'c' => ["rose", "incolore", "jaune", "verte"], 'a' => 0, 'e' => "La phénolphtaléine est incolore en milieu acide et neutre et vire au rose (fuchsia) quand le pH dépasse environ 8,2."],
                    ['q' => "Avec l’indicateur universel, une solution de pH 12 donne plutôt…", 'c' => ["du rouge", "de l’orange", "du vert", "du violet"], 'a' => 3, 'e' => "Du rouge (acide) au violet (basique), le vert marque la neutralité. À pH 12 on est du côté bleu-violet."],
                    ['q' => "On dose CH₃COOH par NaOH ; le pH à l’équivalence vaut environ 8,7. Quel indicateur choisir ?", 'c' => ["Hélianthine (virage 3,1 à 4,4)", "Bleu de bromothymol (virage 6,0 à 7,6)", "Phénolphtaléine (virage 8,2 à 10,0)", "Rouge de méthyle (virage 4,2 à 6,2)"], 'a' => 2, 'e' => "La zone de virage de l’indicateur doit contenir le pH de l’équivalence : seule la phénolphtaléine englobe 8,7."],
                    ['q' => "Avant de mesurer des pH, on étalonne le pH-mètre avec…", 'c' => ["de l’eau distillée", "des tampons de pH connu", "de l’acide fort concentré", "une solution de NaCl"], 'a' => 1, 'e' => "L’étalonnage règle l’appareil sur des valeurs de référence ; on prend en général deux tampons qui encadrent le pH à mesurer."],
                    ['q' => "Entre deux mesures, que fait-on de l’électrode du pH-mètre ?", 'c' => ["On la rince à l’eau distillée", "On la sèche en la frottant", "On la laisse dans la solution précédente", "On la plonge dans un acide fort"], 'a' => 0, 'e' => "Un rinçage évite de transporter des traces de la première solution dans la suivante. On la tamponne ensuite doucement, sans frotter."],
                    ['q' => "Un papier pH devient orange, ce que le fabricant associe à pH 3. Quelle conclusion est raisonnable ?", 'c' => ["pH = 3,27 avec deux décimales", "pH voisin de 3, à ±1 près", "Le papier mesure en réalité [OH⁻]", "Le papier donne la valeur exacte du pH"], 'a' => 1, 'e' => "Les nuances d’un papier pH permettent seulement d’encadrer le pH, avec une précision d’environ une unité. Pour mieux, on utilise un pH-mètre."],
                    ['q' => "Un élève mesure le pH du vinaigre puis celui de la soude sans rincer l’électrode. La valeur lue pour la soude sera…", 'c' => ["trop basse, à cause de traces d’acide", "trop haute, à cause de traces d’acide fort", "correcte, car la soude est forte", "impossible à afficher"], 'a' => 0, 'e' => "Les restes de vinaigre apportent un peu de H₃O⁺, ce qui fait baisser légèrement le pH mesuré : c’est la contamination croisée."],
                    ['q' => "Quelle est la bonne démarche pour tester l’acidité d’une solution inconnue ?", 'c' => ["Y tremper un doigt", "La goûter du bout de la langue, très peu", "La sentir de près", "Déposer une goutte sur papier pH"], 'a' => 3, 'e' => "Une solution inconnue peut être corrosive ou toxique : on mesure sans la toucher, ni la goûter, ni la respirer."],
                    ['q' => "Un pH-mètre affiche 1,8. Quelle est la concentration [H₃O⁺] approximative ?", 'c' => ["1,8 × 10⁻¹ mol/L", "1,8 × 10⁻² mol/L", "1,6 × 10⁻² mol/L", "6,3 × 10⁻¹³ mol/L"], 'a' => 2, 'e' => "[H₃O⁺] = 10⁻¹·⁸ ≈ 1,6 × 10⁻² mol/L. Le chiffre 1,8 est l’exposant, pas le facteur devant la puissance de 10."],
                ],
            ],
            [
                'title' => "Sels, hydrolyse et solutions aqueuses",
                'description' => "Prévoir le caractère acide, basique ou neutre d’une solution de sel à partir de ses ions.",
                'questions' => [
                    ['q' => "Quels ions contient une solution de chlorure de sodium NaCl ?", 'c' => ["Na⁺ et OH⁻", "Na et Cl₂", "H⁺ et Cl⁻", "Na⁺ et Cl⁻"], 'a' => 3, 'e' => "Le cristal ionique se dissocie dans l’eau en Na⁺ et Cl⁻ entourés de molécules d’eau."],
                    ['q' => "Pourquoi une solution de NaCl a-t-elle un pH voisin de 7 à 25 °C ?", 'c' => ["Na⁺ et Cl⁻ n’agissent pas sur l’eau", "Na⁺ capte des OH⁻ et Cl⁻ capte des H⁺", "NaCl reste moléculaire et ne se dissocie pas", "NaCl est un acide faible dans l’eau"], 'a' => 0, 'e' => "Na⁺ vient d’une base forte et Cl⁻ d’un acide fort : ce sont des ions indifférents, qui ne modifient pas l’équilibre de l’eau."],
                    ['q' => "On dissout du chlorure d’ammonium NH₄Cl dans l’eau. La solution est…", 'c' => ["basique, car Cl⁻ capte un proton", "acide, car NH₄⁺ cède H⁺ à l’eau", "neutre, car c’est un sel", "basique, car NH₄⁺ libère des OH⁻"], 'a' => 1, 'e' => "NH₄⁺ est l’acide conjugué de NH₃ : NH₄⁺ + H₂O ⇌ NH₃ + H₃O⁺. Le pH est donc inférieur à 7."],
                    ['q' => "On dissout de l’éthanoate de sodium CH₃COONa dans l’eau. La solution est…", 'c' => ["acide, car Na⁺ est un acide", "neutre, car NaOH est une base forte", "basique, car CH₃COO⁻ capte H⁺", "acide, car il reste du CH₃COOH"], 'a' => 2, 'e' => "CH₃COO⁻ est la base conjuguée d’un acide faible : il capte un H⁺ à l’eau et libère un peu de OH⁻. Na⁺ reste spectateur."],
                    ['q' => "Quelle équation traduit l’hydrolyse de l’ion éthanoate ?", 'c' => ["CH₃COOH + H₂O ⇌ CH₃COO⁻ + H₃O⁺", "CH₃COO⁻ + H₂O ⇌ CH₃COOH + OH⁻", "CH₃COO⁻ + H₃O⁺ ⇌ CH₃COOH + H₂O", "CH₃COOH + OH⁻ ⇌ CH₃COO⁻ + H₂O"], 'a' => 1, 'e' => "Hydrolyse signifie réaction avec l’eau : ici l’ion capte un proton à H₂O. Les autres équations sont vraies mais mettent en jeu l’acide ou un ion H₃O⁺ ou OH⁻ apporté."],
                    ['q' => "Quatre solutions à 0,10 mol/L : HCl, NH₄Cl, NaCl, CH₃COONa. Laquelle a le pH le plus élevé ?", 'c' => ["HCl (très acide)", "NH₄Cl", "NaCl", "CH₃COONa"], 'a' => 3, 'e' => "Dans l’ordre croissant : HCl (très acide), NH₄Cl (acide), NaCl (neutre), CH₃COONa (basique)."],
                    ['q' => "Le carbonate de sodium Na₂CO₃ est dissous dans l’eau. La solution est…", 'c' => ["basique", "acide", "neutre", "saturée en H₃O⁺"], 'a' => 0, 'e' => "CO₃²⁻ est la base conjuguée de HCO₃⁻ (pKa 10,3) : il capte un proton à l’eau, ce qui produit des OH⁻."],
                    ['q' => "On neutralise exactement NH₃ par HCl (équivalence). La solution finale est-elle neutre ?", 'c' => ["Oui, une neutralisation donne toujours pH 7 à 25 °C", "Non, elle est acide : NH₄⁺ est un acide faible", "Non, elle est basique, car NH₃ est une base", "Oui, car Cl⁻ compense NH₄⁺"], 'a' => 1, 'e' => "À l’équivalence il reste du chlorure d’ammonium, dont l’ion NH₄⁺ est acide : le pH est voisin de 5."],
                    ['q' => "Un élève dit : « un sel est neutre, puisqu’il vient d’un acide et d’une base ». Que lui répondre ?", 'c' => ["Oui : l’acide et la base se compensent exactement", "Oui : tout sel dissous donne pH 7", "Non : NH₄Cl est acide, CH₃COONa est basique", "Non : seuls les sels de sodium sont neutres"], 'a' => 2, 'e' => "Le pH dépend des ions du sel et de leur origine (acide ou base forte ou faible). Le mot « sel » ne suffit donc pas à le prévoir."],
                    ['q' => "Laquelle de ces solutions de sel a un pH voisin de 7 ?", 'c' => ["NH₄Cl", "CH₃COOK", "Na₂CO₃", "KNO₃"], 'a' => 3, 'e' => "K⁺ et NO₃⁻ viennent respectivement d’une base forte et d’un acide fort : aucun ne réagit avec l’eau. Les trois autres ont un ion acide ou basique."],
                ],
            ],
            [
                'title' => "Révision générale : acides et bases",
                'description' => "Problèmes qui mêlent pH, force, dosage, constantes et déplacements d’équilibre.",
                'questions' => [
                    ['q' => "Une pluie normale a un pH de 5,6 ; une pluie acide un pH de 4,6. Par quel facteur [H₃O⁺] est-elle multipliée ?", 'c' => ["1", "10", "100", "1,2"], 'a' => 1, 'e' => "Un écart d’une unité de pH signifie un facteur 10 : la pluie acide contient dix fois plus de H₃O⁺."],
                    ['q' => "Dans HCOOH + NH₃ → HCOO⁻ + NH₄⁺, quel est le couple de l’acide qui réagit ?", 'c' => ["HCOOH / HCOO⁻", "NH₃ / NH₄⁺", "HCOOH / NH₃", "HCOO⁻ / NH₄⁺"], 'a' => 0, 'e' => "HCOOH perd un proton et devient sa base conjuguée HCOO⁻. L’autre couple, NH₄⁺/NH₃, est celui de la base qui réagit."],
                    ['q' => "On dissout 4,0 g de NaOH (M = 40 g/mol) dans 1,0 L d’eau, sans changement de volume. Quel est le pH à 25 °C ?", 'c' => ["1", "10", "13", "14 (valeur maximale)"], 'a' => 2, 'e' => "n = 4,0 / 40 = 0,10 mol donc [OH⁻] = 0,10 mol/L, pOH = 1 et pH = 14 − 1 = 13."],
                    ['q' => "À 0,10 mol/L, HCl a un pH de 1 et CH₃COOH un pH de 2,9. Quelle proportion de CH₃COOH est ionisée ?", 'c' => ["100 %", "50 %", "10 %", "1 %"], 'a' => 3, 'e' => "[H₃O⁺] = 10⁻²·⁹ ≈ 1,3 × 10⁻³ mol/L, soit 1,3 × 10⁻³ / 0,10 ≈ 1 % de l’acide : c’est ce qu’on appelle un acide faible."],
                    ['q' => "Une solution contient autant de CH₃COOH que de CH₃COO⁻ (pKa = 4,8). Quel est son pH ?", 'c' => ["2,4 (moitié du pKa)", "4,8", "7", "9,6"], 'a' => 1, 'e' => "Quand acide et base conjuguée sont en quantités égales, le pH est égal au pKa du couple."],
                    ['q' => "Pour doser 20,0 mL de HCl, on verse 15,0 mL de NaOH à 0,100 mol/L à l’équivalence. Que vaut [HCl] ?", 'c' => ["0,0750 mol/L", "0,133 mol/L", "0,150 mol/L", "0,0075 mol/L"], 'a' => 0, 'e' => "n(OH⁻) = 0,100 × 0,0150 = 1,50 × 10⁻³ mol = n(H₃O⁺), donc C = 1,50 × 10⁻³ / 0,0200 = 0,0750 mol/L."],
                    ['q' => "On ajoute de l’éthanoate de sodium solide à une solution de CH₃COOH. Le pH…", 'c' => ["diminue légèrement", "ne change pas", "chute jusqu’à 1", "augmente un peu"], 'a' => 3, 'e' => "Un ajout de CH₃COO⁻ déplace l’équilibre CH₃COOH + H₂O ⇌ CH₃COO⁻ + H₃O⁺ vers la gauche, ce qui consomme du H₃O⁺."],
                    ['q' => "On mélange 50 mL de HCl à 0,10 mol/L et 50 mL de NaOH à 0,050 mol/L. La solution finale est…", 'c' => ["basique, pH 12,4", "neutre, pH 7", "acide, pH 1,6", "acide, pH 1,0"], 'a' => 2, 'e' => "On a 5,0 mmol de H₃O⁺ pour 2,5 mmol de OH⁻ : il reste 2,5 mmol dans 100 mL, soit 0,025 mol/L et pH = 1,6."],
                    ['q' => "Classe ces solutions à 0,10 mol/L par pH croissant à 25 °C.", 'c' => ["HCl < CH₃COOH < NaCl < NaOH", "CH₃COOH < HCl < NaCl < NaOH", "NaOH < NaCl < CH₃COOH < HCl (ordre inverse)", "HCl < NaCl < CH₃COOH < NaOH"], 'a' => 0, 'e' => "L’acide fort est le plus acide (pH 1), l’acide faible vient ensuite (environ 2,9), NaCl est neutre (7) et NaOH est la plus basique (13)."],
                    ['q' => "Quelle affirmation est correcte ?", 'c' => ["Une base faible est entièrement transformée en OH⁻ dans l’eau", "Le pH d’une solution neutre vaut 7 à toute température", "Un acide fort ne peut pas exister en solution diluée", "Une solution de pH 3 contient 10 fois plus de H₃O⁺ qu’à pH 4"], 'a' => 3, 'e' => "Un pH plus petit d’une unité correspond à dix fois plus de H₃O⁺. La neutralité dépend de la température (pH 7 seulement à 25 °C)."],
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
