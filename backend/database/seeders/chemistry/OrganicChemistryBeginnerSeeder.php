<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class OrganicChemistryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'organic-chemistry')->firstOrFail();

        $settings = [
            ['duration' => 30, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 55],
            ['duration' => 25, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 60],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Les bases de la chimie organique",
                'description' => "Découvrir le carbone, les hydrocarbures saturés, leurs formules et leurs représentations.",
                'questions' => [
                    ['q' => "Sucre, graisse, plastique : quel élément forme le squelette de toutes ces molécules ?", 'c' => ["Le silicium", "Le calcium", "Le carbone", "Le fer"], 'a' => 2, 'e' => "Le carbone sait s’enchaîner à lui-même en chaînes et en cycles, ce qui donne des squelettes presque illimités."],
                    ['q' => "Combien de liaisons covalentes un atome de carbone forme-t-il d’ordinaire dans une molécule neutre (une double liaison en vaut deux) ?", 'c' => ["Quatre, pour compléter son octet", "Trois, comme l’azote", "Deux, comme l’oxygène", "Six, comme le soufre"], 'a' => 0, 'e' => "Avec 4 électrons de valence, il lui en manque 4 pour atteindre l’octet : d’où 4 liaisons."],
                    ['q' => "Le gaz naturel qui alimente une gazinière est surtout du méthane. Quelle est sa formule ?", 'c' => ["C₂H₆", "CH₃OH", "CO₂", "CH₄"], 'a' => 3, 'e' => "Un carbone entouré de quatre hydrogènes : c’est le plus simple des alcanes."],
                    ['q' => "Lequel de ces composés n’est pas organique ?", 'c' => ["L’éthanol C₂H₅OH", "Le sel de table NaCl", "Le glucose C₆H₁₂O₆", "L’acide éthanoïque CH₃COOH"], 'a' => 1, 'e' => "NaCl est un solide ionique sans chaîne carbonée ; les trois autres portent des liaisons C–H et C–C ou C–O."],
                    ['q' => "Quelle est la formule brute d’un alcane acyclique à 7 carbones ?", 'c' => ["C₇H₁₆", "C₇H₁₄, formule d’un alcène", "C₇H₁₅", "C₇H₁₈"], 'a' => 0, 'e' => "On applique CₙH₂ₙ₊₂ avec n = 7 : 2 × 7 + 2 = 16 hydrogènes, soit l’heptane."],
                    ['q' => "Comment s’appelle CH₃–CH₂–CH₃ ?", 'c' => ["Butane", "Propène", "Propane", "Propan-1-ol"], 'a' => 2, 'e' => "Trois carbones (prop-) et que des liaisons simples (-ane) : on lit propane."],
                    ['q' => "Un élève écrit C₅H₁₀ pour le pentane, alcane à 5 carbones. Quelle correction apporter ?", 'c' => ["Remplacer 10 par 14 : C₅H₁₄", "Remplacer 10 par 12 : C₅H₁₂", "Il n’y a rien à corriger : la formule est exacte", "Remplacer 10 par 8 : C₅H₈"], 'a' => 1, 'e' => "Pour un alcane, H = 2n + 2 = 12 ; avec 10 H on aurait un alcène ou un cycle."],
                    ['q' => "Le gaz d’un briquet est un alcane à 4 carbones. Quelle est sa formule brute ?", 'c' => ["C₄H₈ (but-1-ène)", "C₄H₆ (butyne)", "C₄H₁₂", "C₄H₁₀ (butane)"], 'a' => 3, 'e' => "Quatre carbones : 2 × 4 + 2 = 10 hydrogènes. C₄H₈ est un alcène, C₄H₆ un alcyne, et C₄H₁₂ est impossible."],
                    ['q' => "Un alcane linéaire à huit carbones s’appelle…", 'c' => ["l’octane", "l’heptane", "le nonane", "le décane"], 'a' => 0, 'e' => "Octa- renvoie à huit, comme les huit bras d’une pieuvre ; l’heptane en a 7, le nonane 9 et le décane 10."],
                    ['q' => "Que veut dire « saturé » pour un hydrocarbure comme le propane ?", 'c' => ["Il est dissous dans l’eau jusqu’à saturation", "Il porte le maximum de groupes hydroxyle", "Ses liaisons C–C sont toutes simples", "Il ne peut plus réagir avec le dioxygène"], 'a' => 2, 'e' => "Saturé signifie porteur du maximum d’hydrogènes : aucune double ni triple liaison C–C. Le propane brûle très bien, donc saturé ne veut pas dire inerte."],
                    ['q' => "Dans CH₄ + x O₂ → CO₂ + 2 H₂O, combien de molécules de dioxygène (x) faut-il pour une molécule de méthane ?", 'c' => ["Une seule", "Deux", "Trois", "Quatre"], 'a' => 1, 'e' => "À droite on compte 2 + 2 = 4 atomes d’oxygène ; chaque O₂ en apporte 2, il en faut donc 2."],
                    ['q' => "Une chaudière mal ventilée brûle du propane en manque d’air. Quel gaz inodore et très toxique peut s’accumuler ?", 'c' => ["Le dioxyde de carbone CO₂, gaz de la respiration", "Le dihydrogène H₂, gaz très léger", "L’ozone O₃, gaz irritant", "Le monoxyde de carbone CO, issu d’une combustion incomplète"], 'a' => 3, 'e' => "Faute de dioxygène, le carbone n’est oxydé qu’en CO, qui se fixe sur l’hémoglobine à la place de O₂ : d’où les intoxications domestiques."],
                    ['q' => "Qu’est-ce qui distingue CH₃–CH₂–CH₃ d’une formule développée complète ?", 'c' => ["Elle ne précise que le nombre d’atomes de chaque sorte", "Elle remplace chaque carbone par un sommet de zigzag", "Les liaisons C–H n’y sont pas dessinées", "Elle représente les atomes dans l’espace en 3D"], 'a' => 2, 'e' => "Les H sont regroupés sur leur carbone (CH₃, CH₂) au lieu d’être reliés par un trait ; c’est une formule semi-développée. La brute serait C₃H₈ et la topologique un simple zigzag."],
                    ['q' => "Un zigzag de trois segments, sans aucun symbole, est la formule topologique de quelle molécule ?", 'c' => ["Le butane", "Le propane", "Le pentane", "Le but-1-ène"], 'a' => 0, 'e' => "Chaque extrémité et chaque sommet est un carbone : trois segments relient quatre carbones, et les hydrogènes complètent chacun à quatre liaisons."],
                    ['q' => "Dans une formule développée, que figure un trait entre deux atomes ?", 'c' => ["Un électron cédé par l’un à l’autre", "Un doublet d’électrons mis en commun par deux atomes", "Une attraction entre deux molécules voisines", "Un doublet non liant porté par un atome"], 'a' => 1, 'e' => "Un trait représente une liaison covalente : les deux atomes partagent un doublet. Les attractions entre molécules ne se dessinent pas ainsi."],
                    ['q' => "Qu’appelle-t-on groupe caractéristique ?", 'c' => ["Une chaîne carbonée greffée sur la chaîne principale", "Un ensemble de molécules de même masse molaire", "Un carbone entouré de quatre atomes d’hydrogène", "Un groupe d’atomes qui définit la famille chimique"], 'a' => 3, 'e' => "–OH, –COOH, C=O… : ce groupe détermine la famille (alcool, acide, cétone) et donc les réactions attendues."],
                    ['q' => "Un hydrocarbure est une molécule constituée…", 'c' => ["de carbone et d’hydrogène, sans autre élément", "de carbone, d’hydrogène et toujours d’oxygène", "de carbone et d’eau liée", "d’hydrogène et d’un métal"], 'a' => 0, 'e' => "Hydro-carbure : C et H, rien d’autre. Dès qu’apparaît un O ou un N, la molécule porte un groupe caractéristique."],
                    ['q' => "Que désigne « méthyl » dans le nom 2-méthylbutane ?", 'c' => ["Un groupe –OH fixé sur le carbone 2", "Une double liaison placée en position 2", "Un groupe –CH₃ greffé sur le carbone 2", "Une chaîne latérale de deux carbones sur le C2"], 'a' => 2, 'e' => "La chaîne principale est le butane (4 C) ; méthyl signale une ramification d’un seul carbone portée par le deuxième."],
                    ['q' => "Lequel de ces alcanes linéaires a la température d’ébullition la plus élevée ?", 'c' => ["Le propane", "L’heptane", "Le butane", "Le pentane"], 'a' => 1, 'e' => "Plus la chaîne est longue, plus les interactions de van der Waals sont nombreuses : il faut plus d’énergie pour séparer les molécules (propane −42 °C, heptane 98 °C)."],
                ],
            ],
            [
                'title' => "Alcènes et alcynes",
                'description' => "Reconnaître les hydrocarbures insaturés et leurs réactions d’addition simples.",
                'questions' => [
                    ['q' => "Un hydrocarbure acyclique a pour formule C₃H₆. À quelle famille appartient-il ?", 'c' => ["Alcanes, car il est saturé", "Alcènes, avec une double liaison C=C", "Alcynes, avec une triple liaison", "Alcools, avec un groupe –OH"], 'a' => 1, 'e' => "Un alcane en C₃ aurait 8 H ; avec 6 H on retrouve CₙH₂ₙ, la formule d’un alcène à une double liaison."],
                    ['q' => "Le gaz du chalumeau des soudeurs, CH≡CH, s’appelle…", 'c' => ["l’éthène", "l’éthane", "le propyne", "l’éthyne"], 'a' => 3, 'e' => "Deux carbones (éth-) et une triple liaison (-yne) : éthyne, de nom usuel acétylène."],
                    ['q' => "Le pent-1-yne est un alcyne acyclique à 5 carbones. Sa formule brute est…", 'c' => ["C₅H₈", "C₅H₁₀", "C₅H₁₂", "C₅H₆"], 'a' => 0, 'e' => "Un alcyne suit CₙH₂ₙ₋₂ : 2 × 5 − 2 = 8. Chaque liaison π retire deux H par rapport à l’alcane C₅H₁₂."],
                    ['q' => "Comment s’appelle CH₃–CH=CH–CH₃ ?", 'c' => ["But-1-ène", "Butane", "But-2-ène", "Butan-2-ol"], 'a' => 2, 'e' => "On numérote pour donner le plus petit indice à la double liaison : elle relie ici C2 et C3, d’où but-2-ène."],
                    ['q' => "Laquelle de ces équations est une addition ?", 'c' => ["CH₄ + Cl₂ → CH₃Cl + HCl", "CH₂=CH₂ + Br₂ → CH₂Br–CH₂Br", "C₂H₅OH → CH₂=CH₂ + H₂O", "C₂H₅Br + HO⁻ → C₂H₅OH + Br⁻"], 'a' => 1, 'e' => "Seule la deuxième fixe deux atomes sur une double liaison qui disparaît. Les autres sont des substitutions (1ʳᵉ et 4ᵉ) et une élimination (3ᵉ)."],
                    ['q' => "On verse de l’eau de dibrome orangée sur un liquide hydrocarboné : elle se décolore aussitôt. Que peut-on conclure ?", 'c' => ["Il possède une liaison multiple C–C", "C’est un alcane à chaîne carbonée longue", "Il est très soluble dans l’eau du flacon", "Il porte un groupe hydroxyle –OH"], 'a' => 0, 'e' => "Le dibrome s’additionne sur les liaisons multiples : il disparaît, et la couleur avec lui. Un alcane ne le décolore pas à l’obscurité."],
                    ['q' => "L’hydrogénation du propène (H₂, catalyseur Ni ou Pt) fournit…", 'c' => ["du propan-1-ol", "du propyne", "de l’éthane", "du propane, hydrocarbure saturé"], 'a' => 3, 'e' => "C₃H₆ + H₂ → C₃H₈ : la double liaison s’ouvre et chaque carbone gagne un hydrogène."],
                    ['q' => "De l’hexène C₆H₁₂ réagit avec un excès de H₂ en présence de nickel. Quelle est la formule du produit ?", 'c' => ["C₆H₁₀, l’hexyne", "C₆H₁₂, le cyclohexane", "C₆H₁₄, l’hexane", "C₆H₆, le benzène"], 'a' => 2, 'e' => "On ajoute 2 H : C₆H₁₂ + H₂ → C₆H₁₄, un alcane saturé. C₆H₁₂ serait le réactif lui-même."],
                    ['q' => "Le polyéthylène des sacs plastiques est fabriqué à partir de quel monomère ?", 'c' => ["L’éthane", "L’éthène", "L’éthanol", "L’éthyne"], 'a' => 1, 'e' => "Les molécules CH₂=CH₂ s’additionnent les unes aux autres en ouvrant leur double liaison : la longue chaîne obtenue est du poly(éthène)."],
                    ['q' => "Parmi ces molécules, laquelle ne possède aucune liaison multiple C–C ?", 'c' => ["CH₃–CH₂–CH₃", "CH₂=CH–CH₃", "CH≡C–CH₃", "CH₂=CH–CH=CH₂"], 'a' => 0, 'e' => "Seul le propane est saturé ; les trois autres portent une double ou une triple liaison et décolorent l’eau de dibrome."],
                ],
            ],
            [
                'title' => "Alcools, éthers et groupes oxygénés",
                'description' => "Identifier alcools, éthers, aldéhydes, cétones et acides carboxyliques et leurs oxydations.",
                'questions' => [
                    ['q' => "Dans l’éthanol C₂H₅OH, quel groupe caractéristique la chaîne porte-t-elle ?", 'c' => ["Le carbonyle C=O", "Le carboxyle –COOH", "L’amino –NH₂", "L’hydroxyle –OH, propre aux alcools"], 'a' => 3, 'e' => "Un –OH lié à un carbone saturé caractérise un alcool ; le suffixe -ol du nom le rappelle."],
                    ['q' => "Un bidon porte l’étiquette « CH₃OH – toxique ». Quel est le nom du produit ?", 'c' => ["Méthanal, aussi appelé formol", "Méthanol, solvant et carburant", "Éthanol, l’alcool des boissons", "Méthane, gaz de ville"], 'a' => 1, 'e' => "Un carbone (méth-) et un –OH (-ol) : méthanol, à ne jamais confondre avec l’éthanol des boissons."],
                    ['q' => "Quel nom correspond à CH₃–CH(OH)–CH₃ ?", 'c' => ["Propan-2-ol", "Propan-1-ol", "Propanone", "Acide propanoïque"], 'a' => 0, 'e' => "Le –OH est sur le carbone central : indice 2. La propanone serait une cétone, pas un alcool."],
                    ['q' => "La classe d’un alcool dépend du nombre de carbones liés au carbone qui porte le –OH. Que donne le butan-2-ol CH₃–CH(OH)–CH₂–CH₃ ?", 'c' => ["Un seul : alcool primaire", "Trois : alcool tertiaire", "Deux : alcool secondaire", "Zéro : c’est le méthanol"], 'a' => 2, 'e' => "Le C2 est lié à deux carbones (C1 et C3) : alcool secondaire. Il suffit de compter les voisins carbonés."],
                    ['q' => "Pourquoi l’éthanol se mélange-t-il à l’eau alors que l’hexane forme deux phases ?", 'c' => ["Sa masse molaire est plus faible que celle de l’eau", "Il est ionique puisqu’il contient de l’oxygène", "Sa chaîne est plus courte, donc il flotte sur l’eau", "Son –OH établit des liaisons hydrogène avec l’eau"], 'a' => 3, 'e' => "Les liaisons O–H polarisées s’associent à H₂O par liaisons hydrogène ; l’hexane apolaire n’en forme pas, d’où deux phases."],
                    ['q' => "Le méthanol bout à 65 °C, le méthane à −162 °C. Quelle interaction explique cet écart ?", 'c' => ["Des liaisons hydrogène entre molécules de méthanol", "Des liaisons ioniques entre molécules de méthanol", "Des liaisons covalentes plus nombreuses dans CH₃OH", "Une masse molaire presque dix fois plus grande"], 'a' => 0, 'e' => "Le O–H polarisé permet des liaisons hydrogène entre molécules, qu’il faut rompre pour vaporiser ; le méthane n’a que de faibles interactions de van der Waals."],
                    ['q' => "Parmi ces formules, laquelle est celle d’un éther-oxyde ?", 'c' => ["CH₃–CH₂–CH₂–OH", "CH₃–CO–CH₃", "CH₃–O–CH₂–CH₃", "CH₃–CH₂–CHO"], 'a' => 2, 'e' => "L’oxygène est pris entre deux carbones. Le propan-1-ol a la même formule C₃H₈O mais porte un –OH : ce sont des isomères."],
                    ['q' => "À quelle famille appartient CH₃–CH₂–CHO ?", 'c' => ["Cétones", "Aldéhydes", "Esters", "Acides carboxyliques"], 'a' => 1, 'e' => "Le C=O est en bout de chaîne, lié à un H : signature d’un aldéhyde (propanal). Dans une cétone, il serait entre deux carbones."],
                    ['q' => "Quel nom correspond à CH₃–CO–CH₂–CH₃ ?", 'c' => ["Butanal", "Butan-2-ol", "Acide butanoïque", "Butanone"], 'a' => 3, 'e' => "Le carbonyle est entouré de deux carbones : c’est une cétone à 4 C, la butanone. Un aldéhyde aurait le C=O au bout."],
                    ['q' => "Le vinaigre contient de l’acide éthanoïque. Quelle est sa formule semi-développée ?", 'c' => ["CH₃–CH₂–OH", "CH₃–CHO", "CH₃–COOH", "H–COOH"], 'a' => 2, 'e' => "Deux carbones, dont l’un porte le carboxyle –COOH ; H–COOH serait l’acide méthanoïque, celui des piqûres de fourmi."],
                    ['q' => "Complétez : CH₃COOH + HO⁻ → … + H₂O", 'c' => ["CH₃COO⁻", "CH₃CH₂O⁻", "CH₃CHO", "CH₃CH₃"], 'a' => 0, 'e' => "L’acide cède son proton à l’ion hydroxyde ; il reste l’ion éthanoate, sa base conjuguée."],
                    ['q' => "Un alcool primaire subit une oxydation ménagée. Quel est le premier produit organique formé ?", 'c' => ["Une cétone", "Un aldéhyde, de formule R–CHO", "Un acide carboxylique", "Un éther"], 'a' => 1, 'e' => "Le carbone du –OH perd deux H et devient C=O en bout de chaîne. Une oxydation poussée irait ensuite jusqu’à l’acide."],
                    ['q' => "On oxyde du propan-2-ol avec du dichromate de potassium acidifié. Que récupère-t-on ?", 'c' => ["Du propanal", "De l’acide propanoïque", "Du propane", "De la propanone, une cétone"], 'a' => 3, 'e' => "Un alcool secondaire donne une cétone et s’arrête là : le carbone du –OH n’a plus d’hydrogène à perdre."],
                    ['q' => "Quel test permet de distinguer un aldéhyde d’une cétone au laboratoire ?", 'c' => ["Fehling : précipité rouge brique avec l’aldéhyde", "DNPH : précipité jaune seulement avec l’aldéhyde", "Eau de brome : décoloration avec la cétone", "Papier pH : il rougit avec l’aldéhyde mais pas avec la cétone"], 'a' => 0, 'e' => "Seul l’aldéhyde réduit Cu²⁺ en Cu₂O, rouge brique. La DNPH réagit avec les deux familles : elle prouve un C=O sans les départager."],
                    ['q' => "Laquelle de ces molécules ne possède pas de groupe C=O ?", 'c' => ["CH₃–CH₂–CHO", "CH₃–COOH", "CH₃–CH₂–OH", "CH₃–CO–CH₂–CH₃"], 'a' => 2, 'e' => "L’éthanol n’a qu’un –OH sur un carbone saturé ; les trois autres contiennent un aldéhyde, un acide et une cétone."],
                ],
            ],
            [
                'title' => "Amines, amides et isomérie",
                'description' => "Reconnaître les fonctions azotées et distinguer des isomères de constitution.",
                'questions' => [
                    ['q' => "À quelle famille appartient CH₃–CH₂–NH₂ ?", 'c' => ["Alcools", "Amides", "Amines", "Acides carboxyliques"], 'a' => 2, 'e' => "L’azote est lié à un carbone saturé et à deux H : c’est une amine primaire (éthanamine)."],
                    ['q' => "Complétez : CH₃CH₂NH₂ + H₂O ⇌ … + HO⁻", 'c' => ["CH₃CH₂NH₃⁺ (ammonium)", "CH₃CH₂OH (éthanol)", "CH₃CH₂NH⁻ (ion amidure)", "CH₃CH₂NO₂ (nitroéthane)"], 'a' => 0, 'e' => "Le doublet de l’azote capte un proton de l’eau : on obtient l’ion ammonium et des HO⁻, ce qui montre le caractère basique de l’amine."],
                    ['q' => "Parmi ces formules, laquelle est celle d’un amide ?", 'c' => ["CH₃–CH₂–CH₂–NH₂", "CH₃–COO–CH₂–CH₃", "CH₃–CO–CH₂–CH₃", "CH₃–CO–NH₂"], 'a' => 3, 'e' => "Un amide associe un carbonyle directement lié à un azote. Dans l’ordre des choix, les trois autres sont une amine, un ester et une cétone."],
                    ['q' => "Dans une protéine, quelle liaison relie deux acides α-aminés consécutifs ?", 'c' => ["La liaison disulfure", "La liaison amide (peptidique)", "La liaison hydrogène", "La liaison ester"], 'a' => 1, 'e' => "Le –COOH d’un acide aminé réagit avec le –NH₂ du suivant en perdant H₂O : cela crée le groupe –CO–NH–, appelé liaison peptidique."],
                    ['q' => "Quel est le nom systématique de CH₃–NH₂ ?", 'c' => ["Méthanamide", "Méthanol", "Acide méthanoïque", "Méthanamine"], 'a' => 3, 'e' => "Un carbone (méthan-) et la terminaison -amine pour la fonction ; -amide demanderait un groupe C=O."],
                    ['q' => "La diméthylamine (CH₃)₂NH est une amine de quelle classe ?", 'c' => ["Primaire", "Secondaire", "Tertiaire", "Quaternaire"], 'a' => 1, 'e' => "Pour une amine on compte les carbones liés à l’azote : ici deux, donc secondaire (chez les alcools, on compte autour du carbone porteur de –OH)."],
                    ['q' => "Combien d’isomères de constitution possède l’alcane C₄H₁₀, lui-même compris ?", 'c' => ["Deux : butane et 2-méthylpropane", "Un seul", "Trois", "Quatre"], 'a' => 0, 'e' => "Le butane linéaire et le 2-méthylpropane ramifié : avec quatre carbones saturés, aucun autre squelette n’est possible."],
                    ['q' => "Quels composés sont isomères l’un de l’autre ?", 'c' => ["Propan-1-ol et propanone", "Éthane et éthène", "Éthanol et méthoxyméthane", "Méthanol et acide méthanoïque"], 'a' => 2, 'e' => "Éthanol et méthoxyméthane sont tous deux C₂H₆O avec un enchaînement différent (–OH ou –O–). Dans les autres couples, les formules brutes diffèrent."],
                    ['q' => "Combien d’atomes d’hydrogène compte le 2-méthylbutane, CH₃–CH(CH₃)–CH₂–CH₃ ?", 'c' => ["Dix", "Douze", "Quatorze", "Huit"], 'a' => 1, 'e' => "On compte 3 + 1 + 3 + 2 + 3 = 12 hydrogènes pour 5 carbones, soit C₅H₁₂, comme le pentane dont il est l’isomère."],
                    ['q' => "Un élève dit que le butane et le pentane sont deux isomères. Quelle est son erreur ?", 'c' => ["Ce sont des stéréoisomères, pas des isomères de constitution", "Un isomère doit forcément porter un groupe fonctionnel", "Leurs squelettes carbonés sont identiques", "Les isomères ont exactement la même formule, or C₄H₁₀ ≠ C₅H₁₂"], 'a' => 3, 'e' => "Des isomères partagent la même formule brute ; le pentane possède un CH₂ de plus que le butane."],
                    ['q' => "Un zigzag à trois carbones porte un –OH sur le sommet du milieu. De quel composé s’agit-il ?", 'c' => ["L’acide propanoïque", "La propanone", "Le propan-2-ol", "Le propane"], 'a' => 2, 'e' => "Le sommet central est le carbone 2 : le –OH y est lié, d’où propan-2-ol."],
                    ['q' => "Le butane bout à −1 °C, son isomère le 2-méthylpropane à −12 °C. Que montre ce couple ?", 'c' => ["Les isomères n’ont pas tous les mêmes propriétés", "Seule la masse molaire fixe la température d’ébullition", "Une ramification rend la molécule insaturée", "Le 2-méthylpropane n’est pas un alcane"], 'a' => 0, 'e' => "Même formule et même masse molaire, mais forme différente : la molécule ramifiée est plus compacte, avec moins de contacts entre molécules, donc elle bout plus bas."],
                ],
            ],
            [
                'title' => "Réactions organiques de base",
                'description' => "Appliquer les grands types de réactions organiques à des équations et des calculs simples.",
                'questions' => [
                    ['q' => "Laquelle de ces équations représente une substitution ?", 'c' => ["C₂H₄ + H₂ → C₂H₆", "CH₄ + Cl₂ → CH₃Cl + HCl", "C₂H₅OH → C₂H₄ + H₂O", "2 C₂H₆ + 7 O₂ → 4 CO₂ + 6 H₂O"], 'a' => 1, 'e' => "Un H est remplacé par un Cl. Les autres équations sont, dans l’ordre, une addition, une élimination et une combustion."],
                    ['q' => "Dans une élimination, que subit la molécule organique ?", 'c' => ["Elle gagne deux atomes qui s’ajoutent sur une liaison double", "Un atome y est remplacé par un autre atome ou groupe", "Elle se casse en deux fragments de même taille", "Elle perd deux groupes voisins : C=C apparaît"], 'a' => 3, 'e' => "C’est l’inverse d’une addition : le départ de deux atomes portés par des carbones voisins crée une liaison C=C, comme dans la déshydratation d’un alcool."],
                    ['q' => "Complétez : CH₂=CH₂ + HBr → …", 'c' => ["CH₃–CH₂Br", "CH₂Br–CH₂Br", "CH₃–CH₃", "CH₂=CHBr"], 'a' => 0, 'e' => "H se fixe sur un carbone, Br sur l’autre : la double liaison devient simple (addition) et on obtient le bromoéthane."],
                    ['q' => "L’hydratation de l’éthène, en présence d’un catalyseur acide, forme…", 'c' => ["de l’éthane", "de l’éthanal", "de l’éthanol", "de l’acide éthanoïque"], 'a' => 2, 'e' => "CH₂=CH₂ + H₂O → CH₃CH₂OH : l’eau s’additionne sur la double liaison, procédé industriel d’obtention de l’éthanol."],
                    ['q' => "Quel ester se forme quand l’acide éthanoïque réagit avec l’éthanol ?", 'c' => ["Éthanoate de méthyle", "Propanoate de méthyle", "Méthanoate d’éthyle", "Éthanoate d’éthyle"], 'a' => 3, 'e' => "Le nom vient de l’acide (éthanoate) puis du groupe de l’alcool (éthyle) ; il se forme aussi de l’eau."],
                    ['q' => "L’estérification est lente et limitée. Que change l’ajout de quelques gouttes d’acide sulfurique ?", 'c' => ["Elle devient une réaction totale", "L’équilibre est atteint plus vite", "Le rendement final augmente", "L’acide carboxylique est neutralisé"], 'a' => 1, 'e' => "Un catalyseur accélère l’approche de l’équilibre sans changer sa position. Pour augmenter le rendement, on retire l’eau ou on met un réactif en excès."],
                    ['q' => "On chauffe une huile (triester du glycérol) avec de la soude. On obtient du savon et…", 'c' => ["du glycérol, un triol", "de l’éthanol", "du méthanol", "du dihydrogène"], 'a' => 0, 'e' => "La saponification rompt les trois liaisons ester : les acides gras donnent des carboxylates (le savon) et le glycérol est libéré, comme dans la fabrication artisanale du savon à l’huile d’olive."],
                    ['q' => "Combien de dioxygène faut-il pour brûler 1 mol de propane, selon C₃H₈ + x O₂ → 3 CO₂ + 4 H₂O ?", 'c' => ["3,5 mol", "4 mol", "5 mol", "7 mol"], 'a' => 2, 'e' => "À droite : 3 × 2 + 4 = 10 atomes d’oxygène, soit 5 molécules de O₂ ; x = 5."],
                    ['q' => "On brûle complètement 44 g de propane (M = 44 g/mol). Quelle masse de CO₂ (M = 44 g/mol) se forme ?", 'c' => ["44 g", "88 g", "176 g", "132 g"], 'a' => 3, 'e' => "44 g font 1 mol de propane, qui donne 3 mol de CO₂, soit 3 × 44 = 132 g."],
                    ['q' => "Une chaîne de polyéthylène compte 1 000 motifs –CH₂–CH₂– (28 g/mol par motif). Quelle est sa masse molaire approximative ?", 'c' => ["2 800 g/mol", "28 000 g/mol", "280 000 g/mol", "28 g/mol"], 'a' => 1, 'e' => "1 000 × 28 = 28 000 g/mol : les polymères ont des masses molaires de plusieurs milliers à plusieurs millions de g/mol."],
                    ['q' => "L’éthanol devient de l’éthanal CH₃CHO. Que lui arrive-t-il ?", 'c' => ["Il est réduit : il gagne deux hydrogènes", "Il est hydrolysé par l’eau", "Il est oxydé : il perd deux hydrogènes", "Il est estérifié par un acide"], 'a' => 2, 'e' => "CH₃CH₂OH perd 2 H pour donner CH₃CHO : une perte d’hydrogène (ou un gain d’oxygène) correspond à une oxydation."],
                    ['q' => "On réduit le propanal avec un hydrure comme NaBH₄. Quel produit obtient-on ?", 'c' => ["Le propan-1-ol, alcool primaire", "Le propan-2-ol", "L’acide propanoïque", "Le propane"], 'a' => 0, 'e' => "Le C=O d’un aldéhyde, en bout de chaîne, devient CH₂–OH : un alcool primaire. Seule une cétone donnerait un alcool secondaire."],
                    ['q' => "L’arôme de banane ou d’ananas dans les confiseries est souvent dû à une molécule de quelle famille ?", 'c' => ["Les amines", "Les alcanes", "Les acides carboxyliques", "Les esters"], 'a' => 3, 'e' => "Les esters sont volatils et souvent fruités ; les acides carboxyliques sentent plutôt l’âcre ou le rance, et les amines le poisson."],
                    ['q' => "On extrait le diiode d’une solution aqueuse en agitant avec du cyclohexane. Qu’est-ce qui rend ce solvant adapté ?", 'c' => ["Il est plus polaire que l’eau et dissout les ions", "Il réagit avec le diiode pour le piéger", "Il est non miscible à l’eau et dissout mieux I₂", "Il est plus dense que l’eau, donc au fond"], 'a' => 2, 'e' => "Le diiode, apolaire, est bien plus soluble dans le cyclohexane apolaire ; les phases restent séparées, l’organique au-dessus car moins dense que l’eau."],
                    ['q' => "Pour chauffer de l’acétone, très inflammable, quel montage choisir ?", 'c' => ["Un bec Bunsen placé sous la hotte", "Un chauffe-ballon surmonté d’un réfrigérant", "Un bec Bunsen posé à côté du flacon", "Un four à micro-ondes ordinaire, porte fermée"], 'a' => 1, 'e' => "Les vapeurs d’acétone s’enflamment au contact d’une flamme ou d’une étincelle : on chauffe donc sans flamme et on condense les vapeurs avec un réfrigérant."],
                    ['q' => "Un élève écrit que la combustion complète de l’éthanol donne CO et H₂O. Où est l’erreur ?", 'c' => ["Une combustion complète produit du CO₂, pas du CO", "L’éthanol ne contient pas assez d’hydrogène pour former de l’eau", "L’éthanol ne brûle pas sans catalyseur", "Le dihydrogène manque parmi les produits"], 'a' => 0, 'e' => "Le monoxyde de carbone signe une combustion incomplète ; avec assez de dioxygène, tout le carbone part sous forme de CO₂."],
                    ['q' => "Combien de molécules de dioxygène brûlent une molécule d’éthanol, selon C₂H₅OH + x O₂ → 2 CO₂ + 3 H₂O ?", 'c' => ["Deux", "Quatre", "Cinq", "Trois"], 'a' => 3, 'e' => "À droite : 4 + 3 = 7 atomes d’oxygène ; l’éthanol en apporte 1, il faut donc 6 O de plus, soit 3 O₂."],
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
