<?php

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

        $makeQuestion = static function (string $question, string $explanation, array $choices, int $correctIndex): array {
            $formattedChoices = [];

            foreach ($choices as $index => $choiceText) {
                $formattedChoices[] = [
                    'choice_text' => $choiceText,
                    'is_correct' => $index === $correctIndex,
                ];
            }

            return [
                'question' => $question,
                'explanation' => $explanation,
                'choices' => $formattedChoices,
            ];
        };

        $quizzes = [
            [
                'title' => 'Les bases des acides et des bases',
                'description' => 'Reconnaître les propriétés essentielles des solutions acides, basiques et neutres.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    $makeQuestion(
                        'Selon Arrhenius, un acide augmente dans l’eau la concentration de quels ions ?',
                        'Un acide d’Arrhenius augmente la concentration des ions H₃O⁺, souvent notés H⁺ dans les écritures simplifiées.',
                        ['OH⁻', 'H₃O⁺', 'Na⁺', 'Cl⁻'],
                        1
                    ),
                    $makeQuestion(
                        'Selon Arrhenius, une base augmente dans l’eau la concentration des ions…',
                        'Une base d’Arrhenius augmente la concentration des ions hydroxyde OH⁻ en solution aqueuse.',
                        ['H⁺', 'Cl⁻', 'OH⁻', 'Na⁺'],
                        2
                    ),
                    $makeQuestion(
                        'À 25 °C, une solution de pH 3 est-elle acide, neutre ou basique ?',
                        'Un pH inférieur à 7 correspond à une solution acide à 25 °C.',
                        ['Basique', 'Neutre', 'Acide', 'Impossible à savoir'],
                        2
                    ),
                    $makeQuestion(
                        'À 25 °C, quelle valeur de pH correspond à une solution neutre ?',
                        'À 25 °C, une solution neutre possède un pH de 7 et vérifie [H₃O⁺] = [OH⁻].',
                        ['0', '14', '7', '1'],
                        2
                    ),
                    $makeQuestion(
                        'Laquelle de ces solutions est la plus acide ?',
                        'Plus le pH est faible, plus la solution est acide.',
                        ['pH 2', 'pH 5', 'pH 7', 'pH 9'],
                        0
                    ),
                    $makeQuestion(
                        'Une solution de pH 11 est généralement…',
                        'À 25 °C, un pH supérieur à 7 indique un caractère basique.',
                        ['Acide', 'Basique', 'Neutre', 'Sans ions'],
                        1
                    ),
                    $makeQuestion(
                        'Que représente le pH d’une solution ?',
                        'Le pH est une grandeur logarithmique liée à la concentration en ions H₃O⁺ dans la solution.',
                        ['La masse de soluté', 'Le volume total', 'La température', 'Une mesure liée à [H₃O⁺]'],
                        3
                    ),
                    $makeQuestion(
                        'Pourquoi une solution acide peut-elle être corrosive ?',
                        'Certaines solutions acides réagissent avec les tissus et les matériaux et peuvent provoquer des brûlures ou des dégradations.',
                        ['Parce qu’elle contient toujours du métal', 'Parce qu’elle peut réagir fortement avec les tissus et matériaux', 'Parce qu’elle est forcément chaude', 'Parce qu’elle ne contient jamais d’eau'],
                        1
                    ),
                    $makeQuestion(
                        'Le jus de citron doit son caractère acide principalement à la présence de…',
                        'Le citron contient notamment de l’acide citrique, responsable d’une partie importante de son acidité.',
                        ['substances acides', 'ions OH⁻ uniquement', 'métaux alcalins', 'gaz rares'],
                        0
                    ),
                    $makeQuestion(
                        'Quelle affirmation est correcte à propos d’une solution neutre ?',
                        'La neutralité signifie que les concentrations en H₃O⁺ et OH⁻ sont égales ; cela ne signifie pas que la solution ne contient aucun ion.',
                        ['Elle ne contient aucun ion', 'Elle contient forcément du NaCl', 'Elle a [H₃O⁺] = [OH⁻]', 'Elle a toujours un pH de 0'],
                        2
                    ),
                ],
            ],
            [
                'title' => 'Brønsted-Lowry et couples acide-base',
                'description' => 'Identifier les donneurs et accepteurs de protons et reconnaître les couples conjugués.',
                'duration' => 15,
                'passing_score' => 55,
                'questions' => [
                    $makeQuestion(
                        'Selon Brønsted-Lowry, un acide est une espèce capable de…',
                        'Un acide de Brønsted-Lowry donne un proton H⁺ à une autre espèce.',
                        ['accepter H⁺', 'donner H⁺', 'donner toujours des électrons', 'produire un métal'],
                        1
                    ),
                    $makeQuestion(
                        'Selon Brønsted-Lowry, une base est une espèce capable de…',
                        'Une base de Brønsted-Lowry accepte un proton H⁺.',
                        ['donner H⁺', 'accepter H⁺', 'libérer O₂', 'absorber des neutrons'],
                        1
                    ),
                    $makeQuestion(
                        'Dans NH₃ + H₂O ⇌ NH₄⁺ + OH⁻, quelle espèce agit comme base ?',
                        'NH₃ accepte un proton provenant de H₂O pour devenir NH₄⁺. C’est donc la base dans le sens direct.',
                        ['H₂O', 'OH⁻', 'NH₄⁺', 'NH₃'],
                        3
                    ),
                    $makeQuestion(
                        'Dans NH₃ + H₂O ⇌ NH₄⁺ + OH⁻, quelle espèce agit comme acide ?',
                        'H₂O cède un proton à NH₃ et devient OH⁻. Elle joue donc le rôle d’acide dans ce sens.',
                        ['NH₃', 'H₂O', 'OH⁻', 'NH₄⁺'],
                        1
                    ),
                    $makeQuestion(
                        'Quel couple est formé de deux espèces acide/base conjuguées ?',
                        'Deux espèces conjuguées diffèrent d’un seul proton H⁺. NH₄⁺ peut perdre H⁺ pour donner NH₃.',
                        ['Na⁺ / Cl⁻', 'H₂ / O₂', 'NH₄⁺ / NH₃', 'HCl / NaOH'],
                        2
                    ),
                    $makeQuestion(
                        'Dans HCl + H₂O → H₃O⁺ + Cl⁻, quelle espèce reçoit le proton ?',
                        'H₂O accepte H⁺ et se transforme en H₃O⁺. Elle joue donc le rôle de base.',
                        ['HCl', 'Cl⁻', 'H₂O', 'H₃O⁺'],
                        2
                    ),
                    $makeQuestion(
                        'Quand une base accepte un proton, elle devient son…',
                        'Après avoir accepté H⁺, une base devient son acide conjugué.',
                        ['solvant', 'acide conjugué', 'catalyseur', 'sel métallique'],
                        1
                    ),
                    $makeQuestion(
                        'Dans HCO₃⁻ + H₂O ⇌ H₂CO₃ + OH⁻, HCO₃⁻ agit ici comme…',
                        'HCO₃⁻ accepte un proton de H₂O pour devenir H₂CO₃ : c’est donc une base dans ce sens.',
                        ['un acide', 'une base', 'un indicateur', 'un catalyseur'],
                        1
                    ),
                    $makeQuestion(
                        'Combien de protons H⁺ différencient H₂CO₃ et HCO₃⁻ ?',
                        'H₂CO₃ perd un seul proton pour devenir HCO₃⁻, ce qui caractérise un couple conjugué.',
                        ['Aucun', 'Un', 'Deux', 'Trois'],
                        1
                    ),
                    $makeQuestion(
                        'Deux espèces contenant les mêmes éléments sont-elles forcément un couple conjugué ?',
                        'Non. Un couple conjugué doit différer exactement d’un proton H⁺, pas seulement partager les mêmes éléments.',
                        ['Oui, toujours', 'Oui, si elles sont neutres', 'Non, elles doivent différer d’un seul H⁺', 'Oui, si leur masse est proche'],
                        2
                    ),
                ],
            ],
            [
                'title' => 'pH et pOH : calculs simples',
                'description' => 'Calculer et interpréter le pH et le pOH avec des valeurs simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Quelle relation permet de calculer le pH à partir de [H₃O⁺] ?',
                        'La relation de base est pH = −log([H₃O⁺]).',
                        ['pH = [H₃O⁺]²', 'pH = 1/[H₃O⁺]', 'pH = −log([H₃O⁺])', 'pH = log([OH⁻])'],
                        2
                    ),
                    $makeQuestion(
                        'Une solution a [H₃O⁺] = 1,0 × 10⁻³ mol/L. Quel est son pH ?',
                        'pH = −log(10⁻³) = 3.',
                        ['2', '3', '4', '−3'],
                        1
                    ),
                    $makeQuestion(
                        'Une solution a [H₃O⁺] = 1,0 × 10⁻⁵ mol/L. Quel est son pH ?',
                        'pH = −log(10⁻⁵) = 5.',
                        ['5', '6', '10', '−5'],
                        0
                    ),
                    $makeQuestion(
                        'À 25 °C, si le pH vaut 7, quel est le pOH ?',
                        'À 25 °C, pH + pOH = 14. Donc pOH = 14 − 7 = 7.',
                        ['0', '7', '14', '21'],
                        1
                    ),
                    $makeQuestion(
                        'À 25 °C, une solution a un pH de 3. Quel est son pOH ?',
                        'pOH = 14 − 3 = 11.',
                        ['3', '7', '11', '17'],
                        2
                    ),
                    $makeQuestion(
                        'Entre une solution de pH 2 et une solution de pH 5, laquelle contient le plus de H₃O⁺ ?',
                        'La solution de pH 2 est plus acide. Elle possède une concentration en H₃O⁺ cent fois plus grande que celle de pH 5.',
                        ['La solution de pH 2', 'La solution de pH 5', 'Les deux pareillement', 'Impossible à comparer'],
                        0
                    ),
                    $makeQuestion(
                        'Un écart de 1 unité de pH correspond à quel facteur pour [H₃O⁺] ?',
                        'L’échelle du pH est logarithmique : une unité de pH représente un facteur 10 sur [H₃O⁺].',
                        ['2', '5', '10', '100'],
                        2
                    ),
                    $makeQuestion(
                        'À 25 °C, si [OH⁻] = 1,0 × 10⁻⁴ mol/L, quel est le pOH ?',
                        'pOH = −log(10⁻⁴) = 4.',
                        ['2', '4', '10', '14'],
                        1
                    ),
                    $makeQuestion(
                        'À 25 °C, si le pOH vaut 2, quel est le pH ?',
                        'pH = 14 − pOH = 14 − 2 = 12.',
                        ['10', '12', '2', '16'],
                        1
                    ),
                    $makeQuestion(
                        'Une solution passe de pH 4 à pH 6. Comment évolue [H₃O⁺] ?',
                        'Le pH augmente de 2 unités, donc [H₃O⁺] est divisée par 10², soit 100.',
                        ['Elle est multipliée par 100', 'Elle est divisée par 100', 'Elle est divisée par 2', 'Elle ne change pas'],
                        1
                    ),
                ],
            ],
            [
                'title' => 'Acides et bases forts ou faibles',
                'description' => 'Faire la différence entre force et concentration et reconnaître quelques espèces fortes ou faibles.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Lequel est un acide fort courant ?',
                        'HCl est un acide fort : en solution aqueuse, son ionisation est pratiquement complète.',
                        ['CH₃COOH', 'H₂CO₃', 'HCl', 'NH₃'],
                        2
                    ),
                    $makeQuestion(
                        'Laquelle est une base forte courante ?',
                        'NaOH est une base forte qui se dissocie pratiquement complètement dans l’eau.',
                        ['NH₃', 'NaOH', 'CH₃COOH', 'NH₄⁺'],
                        1
                    ),
                    $makeQuestion(
                        'Que signifie « acide fort » ?',
                        'La force d’un acide décrit son aptitude à s’ioniser dans l’eau, et non simplement sa quantité.',
                        ['Il est toujours concentré', 'Il s’ionise largement dans l’eau', 'Il est toujours chaud', 'Il possède forcément une grande masse molaire'],
                        1
                    ),
                    $makeQuestion(
                        'Un acide faible est-il forcément très dilué ?',
                        'Non. La force et la concentration sont différentes : un acide faible peut être assez concentré.',
                        ['Oui, toujours', 'Non, force et concentration sont deux notions différentes', 'Oui, sauf HCl', 'Seulement dans les solutions neutres'],
                        1
                    ),
                    $makeQuestion(
                        'Quel couple représente un acide faible courant et sa base conjuguée ?',
                        'L’acide acétique CH₃COOH et l’acétate CH₃COO⁻ forment un couple conjugué.',
                        ['CH₃COOH / CH₃COO⁻', 'HCl / NaOH', 'NaCl / H₂O', 'H₂ / O₂'],
                        0
                    ),
                    $makeQuestion(
                        'À concentration égale, quelle solution produit généralement le plus de H₃O⁺ : HCl ou CH₃COOH ?',
                        'HCl est fort et s’ionise beaucoup plus complètement. À concentration égale, il donne donc davantage de H₃O⁺.',
                        ['CH₃COOH', 'HCl', 'Les deux toujours pareil', 'Aucune'],
                        1
                    ),
                    $makeQuestion(
                        'Pourquoi NH₃ est-il classé comme base faible ?',
                        'NH₃ réagit avec l’eau de façon partielle pour former NH₄⁺ et OH⁻.',
                        ['Il réagit seulement en partie avec l’eau', 'Il est toujours très dilué', 'Il ne contient pas d’azote', 'Il est complètement ionisé'],
                        0
                    ),
                    $makeQuestion(
                        'Deux solutions ont la même concentration. L’une contient HCl et l’autre un acide faible. Laquelle a normalement le pH le plus bas ?',
                        'À concentration égale, HCl fournit davantage de H₃O⁺ car il est fort, donc son pH est généralement plus bas.',
                        ['La solution d’acide faible', 'La solution de HCl', 'Les deux ont pH 7', 'Impossible à comparer'],
                        1
                    ),
                    $makeQuestion(
                        'Quelle phrase oppose correctement force et concentration ?',
                        'La concentration mesure une quantité par volume, tandis que la force décrit le comportement d’ionisation de l’espèce.',
                        ['La force et la concentration sont synonymes', 'La concentration mesure la quantité présente, la force décrit l’ionisation', 'La force est le volume', 'La concentration indique seulement le pH'],
                        1
                    ),
                    $makeQuestion(
                        'Que devient un acide fort lorsqu’on dilue sa solution ?',
                        'La solution devient moins concentrée, mais l’espèce chimique reste un acide fort.',
                        ['Il devient un acide faible', 'Il devient une base', 'Il reste un acide fort mais sa solution est plus diluée', 'Il devient automatiquement neutre'],
                        2
                    ),
                ],
            ],
            [
                'title' => 'Neutralisation et dosage acide-base',
                'description' => 'Comprendre la neutralisation, les proportions stœchiométriques et le principe d’un dosage simple.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Quelle réaction résume la neutralisation entre H⁺ et OH⁻ ?',
                        'Un proton et un ion hydroxyde se combinent pour former de l’eau : H⁺ + OH⁻ → H₂O.',
                        ['H⁺ + OH⁻ → H₂O', 'H⁺ + OH⁻ → H₂', 'H⁺ + OH⁻ → O₂', 'H⁺ + OH⁻ → NaCl'],
                        0
                    ),
                    $makeQuestion(
                        'Quelle équation globale représente la réaction entre HCl et NaOH ?',
                        'HCl et NaOH réagissent pour former NaCl et H₂O.',
                        ['HCl + NaOH → NaCl + H₂O', 'HCl + NaOH → H₂ + Cl₂', 'HCl + NaOH → Na + HClO', 'HCl + NaOH → O₂ + Na'],
                        0
                    ),
                    $makeQuestion(
                        'Dans une réaction H⁺ + OH⁻ → H₂O, quel est le rapport molaire H⁺:OH⁻ ?',
                        'L’équation montre qu’un ion H⁺ réagit avec un ion OH⁻ : le rapport est 1:1.',
                        ['1:1', '1:2', '2:1', '1:3'],
                        0
                    ),
                    $makeQuestion(
                        'On mélange 0,10 mol de HCl et 0,10 mol de NaOH. Quel réactif est en excès, en supposant une réaction 1:1 complète ?',
                        'Les quantités sont égales et la réaction est 1:1. Aucun des deux réactifs principaux n’est en excès.',
                        ['HCl', 'NaOH', 'Les deux en même quantité', 'OH⁻ uniquement'],
                        2
                    ),
                    $makeQuestion(
                        'On dispose de 0,20 mol de H⁺ et de 0,10 mol de OH⁻. Quelle quantité de H⁺ reste après neutralisation ?',
                        'Les 0,10 mol de OH⁻ consomment 0,10 mol de H⁺. Il reste donc 0,20 − 0,10 = 0,10 mol de H⁺.',
                        ['0 mol', '0,05 mol', '0,10 mol', '0,20 mol'],
                        2
                    ),
                    $makeQuestion(
                        'Dans un dosage acide-base, que signifie l’équivalence ?',
                        'À l’équivalence, les réactifs ont été mélangés dans les proportions stœchiométriques de la réaction.',
                        ['Les deux solutions ont forcément le même volume', 'Les réactifs sont dans les proportions stœchiométriques', 'Le pH est toujours 0', 'Le bécher est plein'],
                        1
                    ),
                    $makeQuestion(
                        'Pourquoi ajoute-t-on parfois un indicateur coloré pendant un dosage ?',
                        'Le changement de couleur de l’indicateur permet de repérer visuellement une zone proche de l’équivalence.',
                        ['Pour remplacer la réaction', 'Pour accélérer la neutralisation', 'Pour repérer le voisinage de l’équivalence', 'Pour changer la concentration de l’acide'],
                        2
                    ),
                    $makeQuestion(
                        'Quel volume de NaOH 0,10 mol/L faut-il pour neutraliser 0,010 mol de HCl avec un rapport 1:1 ?',
                        'V = n/C = 0,010/0,10 = 0,100 L, soit 100 mL.',
                        ['10 mL', '50 mL', '100 mL', '200 mL'],
                        2
                    ),
                    $makeQuestion(
                        'Près de l’équivalence d’un dosage acide fort/base forte, le pH peut-il changer rapidement ?',
                        'Oui. Une petite addition de titrant autour de l’équivalence peut modifier fortement le pH.',
                        ['Non, le pH reste exactement fixe', 'Oui, le pH peut varier fortement', 'Seulement si la solution est solide', 'Seulement après ébullition'],
                        1
                    ),
                    $makeQuestion(
                        'Quel ion est directement consommé par OH⁻ pendant une neutralisation acide en milieu aqueux ?',
                        'L’ion H₃O⁺ représente l’acidité de la solution et réagit avec OH⁻ pour former de l’eau.',
                        ['Na⁺', 'Cl⁻', 'H₃O⁺', 'Ca²⁺'],
                        2
                    ),
                ],
            ],
            [
                'title' => 'Ka, Kb et force acide-base',
                'description' => 'Interpréter simplement Ka et Kb et relier ces constantes à la force des espèces.',
                'duration' => 20,
                'passing_score' => 65,
                'questions' => [
                    $makeQuestion(
                        'Que représente Ka pour un acide faible ?',
                        'Ka est la constante d’équilibre qui décrit l’ionisation de l’acide dans l’eau.',
                        ['La masse molaire', 'La constante d’ionisation acide', 'Le volume de solution', 'La température de fusion'],
                        1
                    ),
                    $makeQuestion(
                        'Pour HA + H₂O ⇌ H₃O⁺ + A⁻, quelle expression correspond à Ka ?',
                        'Dans l’expression usuelle, l’eau liquide n’apparaît pas : Ka = [H₃O⁺][A⁻]/[HA].',
                        ['Ka = [HA]/([H₃O⁺][A⁻])', 'Ka = [H₃O⁺][A⁻]/[HA]', 'Ka = [HA] + [A⁻]', 'Ka = [H₃O⁺] + [HA]'],
                        1
                    ),
                    $makeQuestion(
                        'Entre deux acides comparables à la même température, une plus grande valeur de Ka indique généralement…',
                        'Une grande Ka correspond généralement à une ionisation plus importante et donc à un acide plus fort.',
                        ['un acide plus fort', 'un acide forcément plus concentré', 'un acide forcément neutre', 'une solution forcément chaude'],
                        0
                    ),
                    $makeQuestion(
                        'Que représente Kb pour une base faible ?',
                        'Kb décrit l’équilibre entre la base, l’eau, son acide conjugué et les ions OH⁻.',
                        ['La constante de basicité', 'La masse de la base', 'La densité de l’eau', 'La température d’ébullition'],
                        0
                    ),
                    $makeQuestion(
                        'Une très petite Ka signifie généralement que l’acide…',
                        'Une petite Ka indique que l’équilibre d’ionisation est peu déplacé vers les espèces ionisées.',
                        ['s’ionise peu', 's’ionise totalement', 'est forcément concentré', 'est toujours neutre'],
                        0
                    ),
                    $makeQuestion(
                        'Pour comparer la force de deux acides, quelle Ka correspond généralement à l’acide le plus fort ?',
                        'À température identique, l’acide possédant la Ka la plus grande est généralement le plus fort.',
                        ['La plus petite', 'La plus grande', 'Toujours 1', 'Toujours 0'],
                        1
                    ),
                    $makeQuestion(
                        'La dilution d’un acide faible change-t-elle directement sa valeur de Ka à température constante ?',
                        'La dilution change les concentrations d’équilibre, mais Ka pour la réaction donnée reste liée à la température.',
                        ['Oui, toujours', 'Non', 'Oui, elle devient 0', 'Oui, elle devient forcément 1'],
                        1
                    ),
                    $makeQuestion(
                        'Dans HA ⇌ H⁺ + A⁻, ajouter une quantité de HA pousse-t-il le système dans quel sens ?',
                        'Ajouter un réactif favorise sa consommation : l’équilibre tend donc à former davantage de H⁺ et A⁻.',
                        ['Vers HA uniquement', 'Vers les produits H⁺ et A⁻', 'Vers aucun côté', 'Vers OH⁻ uniquement'],
                        1
                    ),
                    $makeQuestion(
                        'Pourquoi un acide faible peut-il avoir une concentration assez élevée sans être totalement ionisé ?',
                        'La force décrit le degré d’ionisation, alors que la concentration décrit la quantité de soluté présente.',
                        ['Parce qu’une partie seulement des molécules s’ionise', 'Parce qu’il ne contient pas d’hydrogène', 'Parce qu’il est forcément un gaz', 'Parce que son pH vaut toujours 7'],
                        0
                    ),
                    $makeQuestion(
                        'Pour une réaction d’équilibre donnée, une constante beaucoup plus grande que 1 suggère généralement que…',
                        'Une grande constante signifie que l’équilibre est davantage déplacé vers les produits de l’expression considérée.',
                        ['les réactifs dominent forcément', 'les produits sont plutôt favorisés', 'la réaction est instantanée', 'le pH est forcément 7'],
                        1
                    ),
                ],
            ],
            [
                'title' => 'Indicateurs et mesures du pH',
                'description' => 'Interpréter les indicateurs, le papier pH et les mesures au pH-mètre dans des situations pratiques.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'À quoi sert un indicateur acide-base ?',
                        'Un indicateur change de couleur dans une certaine zone de pH et permet donc d’estimer la réaction acide ou basique du milieu.',
                        ['À estimer une zone de pH grâce à une couleur', 'À mesurer la masse', 'À augmenter la température', 'À neutraliser tout l’acide'],
                        0
                    ),
                    $makeQuestion(
                        'Pourquoi le papier pH peut-il changer de couleur d’une solution à l’autre ?',
                        'La couleur obtenue dépend du pH de la solution testée.',
                        ['Parce qu’il mesure le volume', 'Parce que sa couleur dépend du pH', 'Parce qu’il contient toujours du métal', 'Parce qu’il chauffe la solution'],
                        1
                    ),
                    $makeQuestion(
                        'Avec un indicateur universel, quelle teinte correspond généralement à un milieu très acide ?',
                        'Les milieux très acides donnent généralement des teintes rouges à orangées avec l’indicateur universel.',
                        ['Rouge à orangé', 'Vert', 'Bleu foncé', 'Violet'],
                        0
                    ),
                    $makeQuestion(
                        'Quelle couleur est souvent associée à un pH proche de 7 avec un indicateur universel ?',
                        'Autour de la neutralité, l’indicateur universel est généralement vert.',
                        ['Rouge', 'Orange', 'Vert', 'Violet foncé'],
                        2
                    ),
                    $makeQuestion(
                        'Pourquoi choisit-on un indicateur adapté à la zone de pH du dosage ?',
                        'Le changement de couleur doit se produire près de la zone recherchée pour repérer correctement l’équivalence.',
                        ['Pour que le changement de couleur soit utile autour de l’équivalence', 'Pour augmenter la concentration de l’acide', 'Pour rendre la solution plus chaude', 'Pour remplacer la stœchiométrie'],
                        0
                    ),
                    $makeQuestion(
                        'Quel instrument donne directement une valeur numérique du pH ?',
                        'Le pH-mètre mesure le pH et affiche une valeur numérique.',
                        ['Une balance', 'Un pH-mètre', 'Une éprouvette', 'Un thermomètre seul'],
                        1
                    ),
                    $makeQuestion(
                        'Pourquoi rincer l’électrode d’un pH-mètre entre deux solutions ?',
                        'Le rinçage évite que des restes de la première solution contaminent la suivante.',
                        ['Pour éviter la contamination croisée', 'Pour augmenter le pH', 'Pour chauffer l’électrode', 'Pour modifier volontairement la solution'],
                        0
                    ),
                    $makeQuestion(
                        'Un élève utilise la même bandelette pH dans plusieurs solutions sans précaution. Quel problème risque-t-il d’avoir ?',
                        'Des traces d’une solution peuvent passer à l’autre et fausser les résultats.',
                        ['Une contamination croisée', 'Une augmentation automatique de K', 'Une disparition de l’eau', 'Aucun problème possible'],
                        0
                    ),
                    $makeQuestion(
                        'Une solution inconnue doit-elle être goûtée pour savoir si elle est acide ?',
                        'Non. Une solution inconnue peut être corrosive ou toxique ; il faut utiliser une méthode de mesure sûre.',
                        ['Oui, si elle sent bon', 'Oui, en petite quantité', 'Non, une méthode sûre doit être utilisée', 'Oui, si son volume est faible'],
                        2
                    ),
                    $makeQuestion(
                        'Une solution mesurée à pH 1,8 est-elle plutôt acide ou basique ?',
                        'Un pH nettement inférieur à 7 indique un milieu acide.',
                        ['Basique', 'Neutre', 'Acide', 'Toujours sans ions'],
                        2
                    ),
                ],
            ],
            [
                'title' => 'Sels, hydrolyse et solutions aqueuses',
                'description' => 'Comprendre comment certains ions issus des sels peuvent influencer le pH d’une solution.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Quel sel se forme lors de la neutralisation de HCl par NaOH ?',
                        'Les ions Na⁺ et Cl⁻ restent associés à la composition du sel NaCl.',
                        ['KCl', 'NaCl', 'NH₄Cl', 'CaCO₃'],
                        1
                    ),
                    $makeQuestion(
                        'Dans l’eau, NaCl est-il principalement présent sous forme de… ?',
                        'NaCl se dissocie en ions Na⁺ et Cl⁻ dans l’eau.',
                        ['molécules métalliques', 'électrons libres', 'ions Na⁺ et Cl⁻', 'H⁺ et OH⁻ uniquement'],
                        2
                    ),
                    $makeQuestion(
                        'Une solution de NH₄Cl est généralement légèrement…',
                        'NH₄⁺ est l’acide conjugué de NH₃ et peut réagir avec l’eau en produisant H₃O⁺.',
                        ['basique', 'acide', 'toujours neutre', 'sans ions'],
                        1
                    ),
                    $makeQuestion(
                        'Une solution de CH₃COONa est généralement légèrement…',
                        'L’ion acétate CH₃COO⁻ est la base conjuguée d’un acide faible et peut produire un peu de OH⁻ dans l’eau.',
                        ['acide', 'basique', 'toujours neutre', 'radioactive'],
                        1
                    ),
                    $makeQuestion(
                        'Que signifie ici « hydrolyse » pour un ion en solution ?',
                        'L’ion réagit avec l’eau et peut ainsi modifier l’équilibre acido-basique du milieu.',
                        ['L’ion réagit avec l’eau', 'L’eau devient solide', 'Le sel devient un métal', 'La solution s’évapore'],
                        0
                    ),
                    $makeQuestion(
                        'Pourquoi une solution de NaCl est-elle généralement proche de la neutralité ?',
                        'Na⁺ et Cl⁻ proviennent respectivement d’une base forte et d’un acide fort et hydrolysent très peu l’eau.',
                        ['Ses ions réagissent très peu avec l’eau', 'NaCl ne se dissout jamais', 'Cl⁻ est un acide fort', 'Na⁺ est une base forte'],
                        0
                    ),
                    $makeQuestion(
                        'Quel ion peut rendre légèrement basique une solution d’acétate de sodium ?',
                        'CH₃COO⁻ peut capter un proton à l’eau et produire OH⁻.',
                        ['Na⁺', 'H₃O⁺', 'CH₃COO⁻', 'Cl⁻'],
                        2
                    ),
                    $makeQuestion(
                        'Quel ion explique principalement le caractère légèrement acide de NH₄Cl ?',
                        'NH₄⁺ peut céder un proton à l’eau et former H₃O⁺.',
                        ['Cl⁻', 'NH₄⁺', 'Na⁺', 'OH⁻'],
                        1
                    ),
                    $makeQuestion(
                        'Le mot « sel » suffit-il à prévoir si une solution aura un pH de 7 ?',
                        'Non. Il faut regarder le comportement des ions du sel dans l’eau.',
                        ['Oui, toujours', 'Non, il faut considérer les ions', 'Oui, si le sel est soluble', 'Oui, si le sel est blanc'],
                        1
                    ),
                    $makeQuestion(
                        'Pourquoi certains sels modifient-ils le pH de l’eau ?',
                        'Certains de leurs ions réagissent avec l’eau et peuvent produire H₃O⁺ ou OH⁻.',
                        ['Parce que certains ions hydrolysent l’eau', 'Parce que tous les ions sont neutres', 'Parce que le sel chauffe toujours l’eau', 'Parce qu’ils enlèvent tous les H⁺'],
                        0
                    ),
                ],
            ],
            [
                'title' => 'Révision générale : acides et bases',
                'description' => 'Réviser les notions essentielles et résoudre quelques problèmes simples mêlant plusieurs concepts.',
                'duration' => 25,
                'passing_score' => 70,
                'questions' => [
                    $makeQuestion(
                        'Le pH d’une solution passe de 6 à 4. Par quel facteur [H₃O⁺] change-t-elle ?',
                        'Deux unités de pH correspondent à un facteur 10² = 100. Comme le pH diminue, [H₃O⁺] augmente d’un facteur 100.',
                        ['Elle diminue de 100', 'Elle augmente de 100', 'Elle augmente de 2', 'Elle ne change pas'],
                        1
                    ),
                    $makeQuestion(
                        'Dans HCl + H₂O → H₃O⁺ + Cl⁻, quelle espèce est la base de Brønsted ?',
                        'H₂O accepte le proton de HCl et devient H₃O⁺. C’est donc la base.',
                        ['HCl', 'Cl⁻', 'H₃O⁺', 'H₂O'],
                        3
                    ),
                    $makeQuestion(
                        'À 25 °C, pOH = 4. Quel est le pH ?',
                        'pH + pOH = 14, donc pH = 14 − 4 = 10.',
                        ['4', '8', '10', '14'],
                        2
                    ),
                    $makeQuestion(
                        'À concentration égale, pourquoi HCl donne-t-il généralement un pH plus bas qu’un acide faible ?',
                        'HCl est un acide fort : il s’ionise beaucoup plus complètement et produit donc davantage de H₃O⁺.',
                        ['Parce qu’il contient moins d’atomes', 'Parce qu’il s’ionise davantage', 'Parce qu’il est toujours plus concentré', 'Parce qu’il contient OH⁻'],
                        1
                    ),
                    $makeQuestion(
                        'Pour HA ⇌ H⁺ + A⁻, une grande Ka indique généralement…',
                        'Une grande Ka signifie que l’équilibre d’ionisation est davantage déplacé vers H⁺ et A⁻.',
                        ['une ionisation plus importante', 'une solution forcément neutre', 'une concentration initiale forcément forte', 'une réaction forcément instantanée'],
                        0
                    ),
                    $makeQuestion(
                        'On ajoute NaOH à HCl pendant une neutralisation. Quelle espèce acide est consommée ?',
                        'L’espèce acide H₃O⁺ réagit avec OH⁻ pour former de l’eau.',
                        ['Na⁺', 'Cl⁻', 'H₃O⁺', 'NaOH solide'],
                        2
                    ),
                    $makeQuestion(
                        'Une solution de pH 12 est-elle plus ou moins basique qu’une solution de pH 9 ?',
                        'À 25 °C, plus le pH est élevé, plus la solution est basique.',
                        ['Moins basique', 'Plus basique', 'Neutre', 'Impossible à savoir'],
                        1
                    ),
                    $makeQuestion(
                        'À température constante, lequel de ces changements ne modifie pas directement la valeur de K d’un équilibre ?',
                        'Ajouter ou retirer une espèce peut déplacer l’équilibre, mais K reste constante à température constante pour la même réaction.',
                        ['Ajouter un réactif', 'Modifier la température', 'Changer la réaction', 'Modifier la définition de la constante'],
                        0
                    ),
                    $makeQuestion(
                        'Dans NH₃ + H₂O ⇌ NH₄⁺ + OH⁻, que se passe-t-il si on ajoute NH₄⁺ ?',
                        'NH₄⁺ est un produit dans ce sens. Son ajout favorise sa consommation et donc un déplacement vers les réactifs.',
                        ['Le système tend vers les réactifs', 'Le système tend vers les produits', 'Le système devient forcément neutre', 'La température diminue automatiquement'],
                        0
                    ),
                    $makeQuestion(
                        'Quelle phrase résume correctement la relation entre concentration, force et pH ?',
                        'La concentration décrit la quantité de soluté par volume, la force décrit l’ionisation, et le pH dépend notamment de [H₃O⁺].',
                        ['Ces trois notions sont identiques', 'La concentration, la force et le pH sont des notions différentes mais liées', 'Le pH est uniquement la masse de soluté', 'La force dépend uniquement du volume'],
                        1
                    ),
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
                ]
            );

            foreach ($quizData['questions'] as $index => $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $index + 1,
                    ],
                    [
                        'question' => $questionData['question'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'] ?? null,
                    ]
                );

                $question->choices()->delete();

                $choices = $questionData['choices'];
                shuffle($choices);

                foreach ($choices as $choiceIndex => $choice) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choice['choice_text'],
                        'is_correct' => $choice['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}
