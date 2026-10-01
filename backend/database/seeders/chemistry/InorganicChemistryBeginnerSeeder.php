<?php

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

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 20, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65],
            8 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => "Les bases de la chimie inorganique",
                'description' => "Reconnaître les grandes familles de substances inorganiques et leurs propriétés simples.",
                'questions' => [
                    [
                        'question' => "Quel domaine étudie principalement la chimie inorganique ?",
                        'explanation' => "La chimie inorganique s’intéresse notamment aux métaux, aux minéraux, aux sels, aux oxydes et à de nombreux composés qui ne reposent pas sur des chaînes carbonées typiques de la chimie organique.",
                        'choices' => [
                            ['choice_text' => "Les métaux, les sels, les oxydes et de nombreux minéraux", 'is_correct' => true],
                            ['choice_text' => "Uniquement les protéines", 'is_correct' => false],
                            ['choice_text' => "Uniquement les hydrocarbures", 'is_correct' => false],
                            ['choice_text' => "Uniquement les vitamines", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lequel est un composé inorganique courant ?",
                        'explanation' => "Le chlorure de sodium, NaCl, est un sel minéral classique et constitue un exemple simple de composé inorganique.",
                        'choices' => [
                            ['choice_text' => "Le glucose C₆H₁₂O₆", 'is_correct' => false],
                            ['choice_text' => "Le chlorure de sodium NaCl", 'is_correct' => true],
                            ['choice_text' => "L’éthanol C₂H₅OH", 'is_correct' => false],
                            ['choice_text' => "Le méthane CH₄", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle propriété est typique de beaucoup de composés ioniques solides ?",
                        'explanation' => "Les solides ioniques possèdent un réseau d’ions. Ils ont souvent des températures de fusion élevées et deviennent conducteurs lorsqu’ils sont fondus ou dissous dans l’eau.",
                        'choices' => [
                            ['choice_text' => "Ils sont toujours gazeux", 'is_correct' => false],
                            ['choice_text' => "Ils ont souvent des températures de fusion élevées", 'is_correct' => true],
                            ['choice_text' => "Ils ne contiennent jamais d’ions", 'is_correct' => false],
                            ['choice_text' => "Ils sont toujours insolubles dans l’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel élément est un métal ?",
                        'explanation' => "Le fer est un métal. L’oxygène, le chlore et le soufre sont classés parmi les non-métaux.",
                        'choices' => [
                            ['choice_text' => "Oxygène", 'is_correct' => false],
                            ['choice_text' => "Chlore", 'is_correct' => false],
                            ['choice_text' => "Fer", 'is_correct' => true],
                            ['choice_text' => "Soufre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un composé ionique, que se passe-t-il généralement entre un métal et un non-métal ?",
                        'explanation' => "Le métal perd souvent un ou plusieurs électrons et le non-métal les gagne. Les ions formés s’attirent ensuite électrostatiquement.",
                        'choices' => [
                            ['choice_text' => "Le métal et le non-métal partagent toujours exactement les mêmes électrons", 'is_correct' => false],
                            ['choice_text' => "Le métal cède généralement des électrons au non-métal", 'is_correct' => true],
                            ['choice_text' => "Aucun électron n’intervient", 'is_correct' => false],
                            ['choice_text' => "Le non-métal cède toujours ses protons", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel ion est formé lorsque le sodium perd un électron ?",
                        'explanation' => "Le sodium neutre possède un électron de valence qu’il peut perdre. Il devient alors Na⁺.",
                        'choices' => [
                            ['choice_text' => "Na⁻", 'is_correct' => false],
                            ['choice_text' => "Na²⁺", 'is_correct' => false],
                            ['choice_text' => "Na⁺", 'is_correct' => true],
                            ['choice_text' => "Na²⁻", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel ion est formé lorsque le chlore gagne un électron ?",
                        'explanation' => "Le chlore gagne un électron pour compléter sa couche externe. Il forme l’ion chlorure Cl⁻.",
                        'choices' => [
                            ['choice_text' => "Cl⁺", 'is_correct' => false],
                            ['choice_text' => "Cl²⁺", 'is_correct' => false],
                            ['choice_text' => "Cl⁻", 'is_correct' => true],
                            ['choice_text' => "Cl²⁻", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel composé est constitué de calcium et de chlore ?",
                        'explanation' => "Le calcium forme Ca²⁺ tandis que le chlore forme Cl⁻. Il faut donc deux ions chlorure pour équilibrer un ion calcium : CaCl₂.",
                        'choices' => [
                            ['choice_text' => "CaCl", 'is_correct' => false],
                            ['choice_text' => "CaCl₂", 'is_correct' => true],
                            ['choice_text' => "Ca₂Cl", 'is_correct' => false],
                            ['choice_text' => "Ca₂Cl₂", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un composé ionique est-il électriquement neutre ?",
                        'explanation' => "La formule globale est construite de façon que la somme des charges positives et négatives soit nulle.",
                        'choices' => [
                            ['choice_text' => "Parce qu’il ne contient aucun ion", 'is_correct' => false],
                            ['choice_text' => "Parce que les charges se compensent globalement", 'is_correct' => true],
                            ['choice_text' => "Parce que tous les ions ont une charge positive", 'is_correct' => false],
                            ['choice_text' => "Parce que les électrons deviennent des protons", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel exemple est un oxyde métallique ?",
                        'explanation' => "Fe₂O₃ contient du fer et de l’oxygène. C’est donc un oxyde d’un métal.",
                        'choices' => [
                            ['choice_text' => "SO₂", 'is_correct' => false],
                            ['choice_text' => "CO₂", 'is_correct' => false],
                            ['choice_text' => "Fe₂O₃", 'is_correct' => true],
                            ['choice_text' => "HCl", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Oxydes, acides, bases et sels",
                'description' => "Identifier les grandes familles de composés inorganiques et reconnaître quelques réactions courantes.",
                'questions' => [
                    [
                        'question' => "Qu’est-ce qu’un oxyde au niveau débutant ?",
                        'explanation' => "Un oxyde est un composé dans lequel l’oxygène est associé à un autre élément, par exemple CO₂ ou Fe₂O₃.",
                        'choices' => [
                            ['choice_text' => "Un composé contenant forcément du sodium", 'is_correct' => false],
                            ['choice_text' => "Un composé de l’oxygène avec un autre élément", 'is_correct' => true],
                            ['choice_text' => "Une solution toujours acide", 'is_correct' => false],
                            ['choice_text' => "Un métal pur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lequel est un acide couramment rencontré en laboratoire ?",
                        'explanation' => "HCl, l’acide chlorhydrique, est un acide classique utilisé dans de nombreuses manipulations de chimie.",
                        'choices' => [
                            ['choice_text' => "HCl", 'is_correct' => true],
                            ['choice_text' => "NaCl", 'is_correct' => false],
                            ['choice_text' => "CaO", 'is_correct' => false],
                            ['choice_text' => "MgO", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lequel est une base simple ?",
                        'explanation' => "NaOH est l’hydroxyde de sodium. En solution aqueuse, il fournit des ions OH⁻ et constitue une base forte.",
                        'choices' => [
                            ['choice_text' => "HCl", 'is_correct' => false],
                            ['choice_text' => "NaOH", 'is_correct' => true],
                            ['choice_text' => "CO₂", 'is_correct' => false],
                            ['choice_text' => "SO₂", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel produit se forme généralement lors de la réaction d’un acide avec une base ?",
                        'explanation' => "Une réaction acide-base classique peut produire un sel et de l’eau. On parle souvent de neutralisation.",
                        'choices' => [
                            ['choice_text' => "Un métal pur uniquement", 'is_correct' => false],
                            ['choice_text' => "Un sel et de l’eau", 'is_correct' => true],
                            ['choice_text' => "Toujours du dioxygène", 'is_correct' => false],
                            ['choice_text' => "Uniquement du carbone solide", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans HCl + NaOH → NaCl + H₂O, quel composé est le sel ?",
                        'explanation' => "Le chlorure de sodium NaCl est le sel produit par la neutralisation entre HCl et NaOH.",
                        'choices' => [
                            ['choice_text' => "HCl", 'is_correct' => false],
                            ['choice_text' => "NaOH", 'is_correct' => false],
                            ['choice_text' => "NaCl", 'is_correct' => true],
                            ['choice_text' => "H₂O", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel pH correspond à une solution neutre à 25 °C ?",
                        'explanation' => "À 25 °C, une solution neutre a un pH de 7. Un pH inférieur à 7 est acide et un pH supérieur à 7 est basique.",
                        'choices' => [
                            ['choice_text' => "0", 'is_correct' => false],
                            ['choice_text' => "5", 'is_correct' => false],
                            ['choice_text' => "7", 'is_correct' => true],
                            ['choice_text' => "14", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une solution de pH 3 est-elle acide ou basique ?",
                        'explanation' => "Comme 3 est inférieur à 7, la solution est acide.",
                        'choices' => [
                            ['choice_text' => "Acide", 'is_correct' => true],
                            ['choice_text' => "Basique", 'is_correct' => false],
                            ['choice_text' => "Neutre", 'is_correct' => false],
                            ['choice_text' => "Impossible à déterminer", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une solution de pH 11 est-elle acide ou basique ?",
                        'explanation' => "Comme 11 est supérieur à 7, la solution est basique.",
                        'choices' => [
                            ['choice_text' => "Acide", 'is_correct' => false],
                            ['choice_text' => "Basique", 'is_correct' => true],
                            ['choice_text' => "Neutre", 'is_correct' => false],
                            ['choice_text' => "Toujours saturée", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que peut-on dire d’un oxyde basique comme CaO lorsqu’il réagit avec de l’eau ?",
                        'explanation' => "CaO réagit avec l’eau pour former Ca(OH)₂, un hydroxyde basique.",
                        'choices' => [
                            ['choice_text' => "Il peut former une base", 'is_correct' => true],
                            ['choice_text' => "Il forme obligatoirement un acide fort", 'is_correct' => false],
                            ['choice_text' => "Il devient un métal liquide", 'is_correct' => false],
                            ['choice_text' => "Il ne peut jamais réagir", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel indice simple peut signaler une réaction acide-base lors d’un titrage ?",
                        'explanation' => "Un indicateur coloré change de couleur dans une certaine zone de pH. Cette variation aide à repérer la zone de neutralisation.",
                        'choices' => [
                            ['choice_text' => "Un changement de couleur d’un indicateur", 'is_correct' => true],
                            ['choice_text' => "La disparition de la verrerie", 'is_correct' => false],
                            ['choice_text' => "La création automatique d’un métal", 'is_correct' => false],
                            ['choice_text' => "Une baisse obligatoire de pression atmosphérique", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Nomenclature et formules des composés",
                'description' => "Lire des formules et associer quelques composés inorganiques courants à leur nom.",
                'questions' => [
                    [
                        'question' => "Quel est le nom de NaCl ?",
                        'explanation' => "NaCl est formé de Na⁺ et Cl⁻. Son nom courant en français est chlorure de sodium.",
                        'choices' => [
                            ['choice_text' => "Chlorure de sodium", 'is_correct' => true],
                            ['choice_text' => "Oxyde de sodium", 'is_correct' => false],
                            ['choice_text' => "Sulfate de sodium", 'is_correct' => false],
                            ['choice_text' => "Nitrate de sodium", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le nom de CaCO₃ ?",
                        'explanation' => "CaCO₃ est le carbonate de calcium, présent notamment dans le calcaire.",
                        'choices' => [
                            ['choice_text' => "Chlorure de calcium", 'is_correct' => false],
                            ['choice_text' => "Carbonate de calcium", 'is_correct' => true],
                            ['choice_text' => "Oxyde de calcium", 'is_correct' => false],
                            ['choice_text' => "Hydroxyde de calcium", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le nom de Fe₂O₃ ?",
                        'explanation' => "Fe₂O₃ est l’oxyde de fer(III), car le fer y est au nombre d’oxydation +3.",
                        'choices' => [
                            ['choice_text' => "Oxyde de fer(I)", 'is_correct' => false],
                            ['choice_text' => "Oxyde de fer(II)", 'is_correct' => false],
                            ['choice_text' => "Oxyde de fer(III)", 'is_correct' => true],
                            ['choice_text' => "Chlorure de fer(III)", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle formule correspond à l’hydroxyde de sodium ?",
                        'explanation' => "L’ion sodium est Na⁺ et l’ion hydroxyde est OH⁻. Ils s’associent dans un rapport 1:1 : NaOH.",
                        'choices' => [
                            ['choice_text' => "NaOH", 'is_correct' => true],
                            ['choice_text' => "Na₂O", 'is_correct' => false],
                            ['choice_text' => "NaCl", 'is_correct' => false],
                            ['choice_text' => "Na₂OH", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle formule correspond à l’oxyde de magnésium ?",
                        'explanation' => "Le magnésium forme Mg²⁺ et l’oxyde O²⁻. Les charges se compensent dans MgO.",
                        'choices' => [
                            ['choice_text' => "MgO", 'is_correct' => true],
                            ['choice_text' => "MgO₂", 'is_correct' => false],
                            ['choice_text' => "Mg₂O", 'is_correct' => false],
                            ['choice_text' => "Mg₂O₃", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle formule correspond au sulfate de sodium ?",
                        'explanation' => "Le sulfate est SO₄²⁻ et le sodium est Na⁺. Il faut donc deux ions sodium pour une charge totale +2 : Na₂SO₄.",
                        'choices' => [
                            ['choice_text' => "NaSO₄", 'is_correct' => false],
                            ['choice_text' => "Na₂SO₄", 'is_correct' => true],
                            ['choice_text' => "NaSO₃", 'is_correct' => false],
                            ['choice_text' => "Na₄SO₂", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans CuCl₂, combien d’ions chlorure sont associés à un ion cuivre ?",
                        'explanation' => "CuCl₂ contient deux ions Cl⁻ pour compenser la charge +2 du cuivre Cu²⁺.",
                        'choices' => [
                            ['choice_text' => "1", 'is_correct' => false],
                            ['choice_text' => "2", 'is_correct' => true],
                            ['choice_text' => "3", 'is_correct' => false],
                            ['choice_text' => "4", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le nom de H₂SO₄ ?",
                        'explanation' => "H₂SO₄ est l’acide sulfurique, un acide minéral très courant au laboratoire et dans l’industrie.",
                        'choices' => [
                            ['choice_text' => "Acide sulfureux", 'is_correct' => false],
                            ['choice_text' => "Acide sulfurique", 'is_correct' => true],
                            ['choice_text' => "Acide chlorhydrique", 'is_correct' => false],
                            ['choice_text' => "Acide nitrique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le nom de HNO₃ ?",
                        'explanation' => "HNO₃ correspond à l’acide nitrique.",
                        'choices' => [
                            ['choice_text' => "Acide nitreux", 'is_correct' => false],
                            ['choice_text' => "Acide nitrique", 'is_correct' => true],
                            ['choice_text' => "Acide sulfurique", 'is_correct' => false],
                            ['choice_text' => "Acide carbonique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel composé est correctement associé à son nom ?",
                        'explanation' => "Ca(OH)₂ est l’hydroxyde de calcium. Les autres associations proposées sont incorrectes.",
                        'choices' => [
                            ['choice_text' => "Ca(OH)₂ — hydroxyde de calcium", 'is_correct' => true],
                            ['choice_text' => "NaCl — oxyde de sodium", 'is_correct' => false],
                            ['choice_text' => "CO₂ — chlorure de carbone", 'is_correct' => false],
                            ['choice_text' => "KBr — oxyde de potassium", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Métaux, non-métaux et propriétés",
                'description' => "Comparer les propriétés physiques et chimiques simples des métaux et des non-métaux.",
                'questions' => [
                    [
                        'question' => "Quelle propriété est typique d’un métal comme le cuivre ?",
                        'explanation' => "Le cuivre est un bon conducteur électrique et thermique, ce qui explique notamment son utilisation dans les câbles.",
                        'choices' => [
                            ['choice_text' => "Une bonne conductivité électrique", 'is_correct' => true],
                            ['choice_text' => "Une transparence totale", 'is_correct' => false],
                            ['choice_text' => "Une absence de liaisons métalliques", 'is_correct' => false],
                            ['choice_text' => "Une impossibilité d’être déformé", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les métaux peuvent-ils conduire le courant électrique ?",
                        'explanation' => "Dans un métal, certains électrons sont délocalisés et peuvent se déplacer à travers le réseau métallique.",
                        'choices' => [
                            ['choice_text' => "Parce que leurs protons circulent librement", 'is_correct' => false],
                            ['choice_text' => "Parce que certains électrons peuvent se déplacer dans le réseau", 'is_correct' => true],
                            ['choice_text' => "Parce qu’ils contiennent toujours de l’eau", 'is_correct' => false],
                            ['choice_text' => "Parce que tous leurs atomes sont chargés positivement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel non-métal est présent dans l’air et indispensable à la respiration ?",
                        'explanation' => "Le dioxygène O₂ est un non-métal et représente environ un cinquième de l’air atmosphérique.",
                        'choices' => [
                            ['choice_text' => "Oxygène", 'is_correct' => true],
                            ['choice_text' => "Fer", 'is_correct' => false],
                            ['choice_text' => "Cuivre", 'is_correct' => false],
                            ['choice_text' => "Aluminium", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel métal est liquide à température ambiante ?",
                        'explanation' => "Le mercure est un métal qui est liquide à température ambiante, contrairement à la plupart des autres métaux courants.",
                        'choices' => [
                            ['choice_text' => "Fer", 'is_correct' => false],
                            ['choice_text' => "Mercure", 'is_correct' => true],
                            ['choice_text' => "Aluminium", 'is_correct' => false],
                            ['choice_text' => "Cuivre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel métal est particulièrement utilisé pour les canettes et de nombreux objets légers ?",
                        'explanation' => "L’aluminium est léger, malléable et résiste assez bien à la corrosion grâce à sa couche superficielle d’oxyde.",
                        'choices' => [
                            ['choice_text' => "Aluminium", 'is_correct' => true],
                            ['choice_text' => "Mercure", 'is_correct' => false],
                            ['choice_text' => "Sodium métallique", 'is_correct' => false],
                            ['choice_text' => "Brome", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que se forme généralement lorsqu’un métal réagit avec le dioxygène ?",
                        'explanation' => "De nombreux métaux réagissent avec O₂ pour former un oxyde métallique, par exemple le fer qui forme des oxydes de fer.",
                        'choices' => [
                            ['choice_text' => "Un oxyde métallique", 'is_correct' => true],
                            ['choice_text' => "Toujours un acide", 'is_correct' => false],
                            ['choice_text' => "Toujours un sel de sodium", 'is_correct' => false],
                            ['choice_text' => "Un gaz noble", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le fer rouille-t-il plus facilement en présence d’eau et de dioxygène ?",
                        'explanation' => "La corrosion du fer implique des réactions avec l’oxygène et l’eau. L’humidité facilite généralement ce processus électrochimique.",
                        'choices' => [
                            ['choice_text' => "L’eau et le dioxygène favorisent les réactions de corrosion", 'is_correct' => true],
                            ['choice_text' => "L’eau transforme toujours le fer en sodium", 'is_correct' => false],
                            ['choice_text' => "Le dioxygène empêche toute réaction", 'is_correct' => false],
                            ['choice_text' => "La rouille est du fer pur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel matériau est un alliage de fer contenant notamment du carbone ?",
                        'explanation' => "L’acier est principalement constitué de fer avec une certaine quantité de carbone et, selon le type, d’autres éléments.",
                        'choices' => [
                            ['choice_text' => "Acier", 'is_correct' => true],
                            ['choice_text' => "Verre", 'is_correct' => false],
                            ['choice_text' => "PVC", 'is_correct' => false],
                            ['choice_text' => "Quartz", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel élément est un non-métal ?",
                        'explanation' => "Le soufre est un non-métal. Le fer, le calcium et le zinc sont des métaux.",
                        'choices' => [
                            ['choice_text' => "Fer", 'is_correct' => false],
                            ['choice_text' => "Calcium", 'is_correct' => false],
                            ['choice_text' => "Soufre", 'is_correct' => true],
                            ['choice_text' => "Zinc", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle observation caractérise souvent un métal lors d’une déformation mécanique ?",
                        'explanation' => "De nombreux métaux peuvent être déformés sans se casser immédiatement, grâce à leur structure métallique. On parle de malléabilité ou de ductilité selon le type de déformation.",
                        'choices' => [
                            ['choice_text' => "Il peut souvent être déformé sans se briser immédiatement", 'is_correct' => true],
                            ['choice_text' => "Il devient toujours gazeux", 'is_correct' => false],
                            ['choice_text' => "Il perd tous ses électrons", 'is_correct' => false],
                            ['choice_text' => "Il se transforme forcément en sel", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Métaux alcalins et alcalino-terreux",
                'description' => "Reconnaître les propriétés et ions courants des groupes 1 et 2 du tableau périodique.",
                'questions' => [
                    [
                        'question' => "Combien d’électrons de valence possède généralement un métal alcalin ?",
                        'explanation' => "Les éléments du groupe 1 possèdent généralement un seul électron sur leur couche externe.",
                        'choices' => [
                            ['choice_text' => "1", 'is_correct' => true],
                            ['choice_text' => "2", 'is_correct' => false],
                            ['choice_text' => "7", 'is_correct' => false],
                            ['choice_text' => "8", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel ion est typiquement formé par le potassium ?",
                        'explanation' => "Le potassium est un métal alcalin. Il perd généralement un électron et forme K⁺.",
                        'choices' => [
                            ['choice_text' => "K⁺", 'is_correct' => true],
                            ['choice_text' => "K⁻", 'is_correct' => false],
                            ['choice_text' => "K²⁺", 'is_correct' => false],
                            ['choice_text' => "K²⁻", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel ion forme généralement le calcium ?",
                        'explanation' => "Le calcium, du groupe 2, perd généralement deux électrons pour former Ca²⁺.",
                        'choices' => [
                            ['choice_text' => "Ca⁺", 'is_correct' => false],
                            ['choice_text' => "Ca²⁺", 'is_correct' => true],
                            ['choice_text' => "Ca⁻", 'is_correct' => false],
                            ['choice_text' => "Ca²⁻", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel métal est un métal alcalino-terreux ?",
                        'explanation' => "Le magnésium appartient au groupe 2, celui des métaux alcalino-terreux.",
                        'choices' => [
                            ['choice_text' => "Magnésium", 'is_correct' => true],
                            ['choice_text' => "Sodium", 'is_correct' => false],
                            ['choice_text' => "Chlore", 'is_correct' => false],
                            ['choice_text' => "Argon", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les métaux alcalins sont-ils conservés avec précaution au laboratoire ?",
                        'explanation' => "Certains métaux alcalins réagissent très vivement avec l’eau et l’humidité. Leur conservation demande donc des conditions adaptées.",
                        'choices' => [
                            ['choice_text' => "Parce qu’ils peuvent réagir fortement avec l’eau", 'is_correct' => true],
                            ['choice_text' => "Parce qu’ils sont toujours radioactifs", 'is_correct' => false],
                            ['choice_text' => "Parce qu’ils sont tous gazeux", 'is_correct' => false],
                            ['choice_text' => "Parce qu’ils ne réagissent jamais", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel produit se forme lorsque le sodium réagit avec l’eau, en plus du dihydrogène ?",
                        'explanation' => "La réaction 2 Na + 2 H₂O → 2 NaOH + H₂ forme de l’hydroxyde de sodium et du dihydrogène.",
                        'choices' => [
                            ['choice_text' => "NaOH", 'is_correct' => true],
                            ['choice_text' => "NaCl", 'is_correct' => false],
                            ['choice_text' => "Na₂CO₃", 'is_correct' => false],
                            ['choice_text' => "Na₂O₂ uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel gaz peut être produit lorsque certains métaux alcalins réagissent avec l’eau ?",
                        'explanation' => "La réaction d’un métal alcalin comme le sodium avec l’eau produit du dihydrogène H₂.",
                        'choices' => [
                            ['choice_text' => "Dioxygène", 'is_correct' => false],
                            ['choice_text' => "Dihydrogène", 'is_correct' => true],
                            ['choice_text' => "Dioxyde de carbone", 'is_correct' => false],
                            ['choice_text' => "Chlore", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lequel est un métal alcalin ?",
                        'explanation' => "Le sodium appartient au groupe 1, celui des métaux alcalins.",
                        'choices' => [
                            ['choice_text' => "Sodium", 'is_correct' => true],
                            ['choice_text' => "Calcium", 'is_correct' => false],
                            ['choice_text' => "Magnésium", 'is_correct' => false],
                            ['choice_text' => "Aluminium", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel composé est formé de Mg²⁺ et de deux ions Cl⁻ ?",
                        'explanation' => "Une charge +2 doit être compensée par deux charges −1. La formule est donc MgCl₂.",
                        'choices' => [
                            ['choice_text' => "MgCl", 'is_correct' => false],
                            ['choice_text' => "MgCl₂", 'is_correct' => true],
                            ['choice_text' => "Mg₂Cl", 'is_correct' => false],
                            ['choice_text' => "Mg₂Cl₂", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans quelle situation le caractère métallique d’un élément du groupe 1 devient-il généralement plus marqué en descendant le groupe ?",
                        'explanation' => "En descendant le groupe 1, l’électron externe est plus éloigné du noyau et est généralement plus facile à perdre. Le caractère métallique augmente ainsi vers le bas du groupe.",
                        'choices' => [
                            ['choice_text' => "En allant vers le bas du groupe", 'is_correct' => true],
                            ['choice_text' => "En allant vers le haut du groupe uniquement", 'is_correct' => false],
                            ['choice_text' => "En supprimant tous les électrons internes", 'is_correct' => false],
                            ['choice_text' => "Uniquement en ajoutant des neutrons", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Halogènes et gaz nobles",
                'description' => "Identifier les halogènes et comprendre leur réactivité simple ainsi que la stabilité relative des gaz nobles.",
                'questions' => [
                    [
                        'question' => "Quel élément appartient à la famille des halogènes ?",
                        'explanation' => "Le chlore appartient au groupe 17, celui des halogènes.",
                        'choices' => [
                            ['choice_text' => "Chlore", 'is_correct' => true],
                            ['choice_text' => "Argon", 'is_correct' => false],
                            ['choice_text' => "Sodium", 'is_correct' => false],
                            ['choice_text' => "Calcium", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Combien d’électrons de valence possède généralement un halogène ?",
                        'explanation' => "Les éléments du groupe 17 possèdent généralement sept électrons de valence et tendent à en gagner un pour atteindre une configuration plus stable.",
                        'choices' => [
                            ['choice_text' => "1", 'is_correct' => false],
                            ['choice_text' => "2", 'is_correct' => false],
                            ['choice_text' => "7", 'is_correct' => true],
                            ['choice_text' => "8", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel ion forme généralement le fluor ?",
                        'explanation' => "Le fluor gagne un électron et forme l’ion fluorure F⁻.",
                        'choices' => [
                            ['choice_text' => "F⁺", 'is_correct' => false],
                            ['choice_text' => "F⁻", 'is_correct' => true],
                            ['choice_text' => "F²⁺", 'is_correct' => false],
                            ['choice_text' => "F²⁻", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lequel est un gaz noble ?",
                        'explanation' => "Le néon appartient au groupe 18, celui des gaz nobles.",
                        'choices' => [
                            ['choice_text' => "Néon", 'is_correct' => true],
                            ['choice_text' => "Chlore", 'is_correct' => false],
                            ['choice_text' => "Brome", 'is_correct' => false],
                            ['choice_text' => "Soufre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les gaz nobles réagissent-ils généralement peu ?",
                        'explanation' => "Leur couche électronique externe est particulièrement stable, ce qui les rend moins enclins à gagner, perdre ou partager des électrons.",
                        'choices' => [
                            ['choice_text' => "Parce qu’ils ont une configuration électronique externe stable", 'is_correct' => true],
                            ['choice_text' => "Parce qu’ils n’ont aucun électron", 'is_correct' => false],
                            ['choice_text' => "Parce qu’ils sont toujours solides", 'is_correct' => false],
                            ['choice_text' => "Parce qu’ils contiennent forcément de l’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel composé peut résulter de la réaction entre le sodium et le chlore ?",
                        'explanation' => "Le sodium forme Na⁺ et le chlore Cl⁻. Leur association donne le chlorure de sodium NaCl.",
                        'choices' => [
                            ['choice_text' => "NaCl", 'is_correct' => true],
                            ['choice_text' => "Na₂Cl", 'is_correct' => false],
                            ['choice_text' => "NaCl₂", 'is_correct' => false],
                            ['choice_text' => "Na₂Cl₂", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À température ambiante, sous quelle forme se trouve généralement le brome ?",
                        'explanation' => "Le brome Br₂ est un halogène liquide à température ambiante. Le fluor et le chlore sont gazeux, tandis que l’iode est solide.",
                        'choices' => [
                            ['choice_text' => "Solide", 'is_correct' => false],
                            ['choice_text' => "Liquide", 'is_correct' => true],
                            ['choice_text' => "Gaz", 'is_correct' => false],
                            ['choice_text' => "Plasma", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le chlore moléculaire s’écrit comment ?",
                        'explanation' => "Le chlore élémentaire existe sous forme diatomique : Cl₂.",
                        'choices' => [
                            ['choice_text' => "Cl", 'is_correct' => false],
                            ['choice_text' => "Cl₂", 'is_correct' => true],
                            ['choice_text' => "Cl₃", 'is_correct' => false],
                            ['choice_text' => "Cl⁻", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les halogènes forment-ils facilement des ions négatifs ?",
                        'explanation' => "Avec sept électrons de valence, ils ont souvent tendance à gagner un électron pour compléter leur couche externe.",
                        'choices' => [
                            ['choice_text' => "Ils ont tendance à gagner un électron", 'is_correct' => true],
                            ['choice_text' => "Ils perdent toujours sept protons", 'is_correct' => false],
                            ['choice_text' => "Ils ne peuvent jamais réagir", 'is_correct' => false],
                            ['choice_text' => "Ils possèdent toujours deux électrons de valence", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lequel est le plus caractéristique d’un gaz noble ?",
                        'explanation' => "Les gaz nobles sont connus pour leur faible réactivité chimique dans les conditions ordinaires.",
                        'choices' => [
                            ['choice_text' => "Faible réactivité chimique", 'is_correct' => true],
                            ['choice_text' => "Réaction violente avec l’eau", 'is_correct' => false],
                            ['choice_text' => "Formation systématique de sels", 'is_correct' => false],
                            ['choice_text' => "Tendance très forte à perdre un électron", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Métaux de transition",
                'description' => "Découvrir les propriétés simples des métaux de transition, de leurs ions et de leurs composés colorés.",
                'questions' => [
                    [
                        'question' => "Lequel est un métal de transition courant ?",
                        'explanation' => "Le fer est un métal de transition du bloc d et présente plusieurs états d’oxydation courants.",
                        'choices' => [
                            ['choice_text' => "Fer", 'is_correct' => true],
                            ['choice_text' => "Sodium", 'is_correct' => false],
                            ['choice_text' => "Néon", 'is_correct' => false],
                            ['choice_text' => "Fluor", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel métal est responsable de la couleur bleue caractéristique de nombreux composés Cu²⁺ en solution aqueuse ?",
                        'explanation' => "Les ions Cu²⁺ donnent souvent des solutions bleues ou bleu-vert, selon le composé et le milieu.",
                        'choices' => [
                            ['choice_text' => "Cuivre", 'is_correct' => true],
                            ['choice_text' => "Sodium", 'is_correct' => false],
                            ['choice_text' => "Calcium", 'is_correct' => false],
                            ['choice_text' => "Argon", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel ion correspond au cuivre(II) ?",
                        'explanation' => "Le nombre romain II indique un état d’oxydation +2, donc Cu²⁺.",
                        'choices' => [
                            ['choice_text' => "Cu⁺", 'is_correct' => false],
                            ['choice_text' => "Cu²⁺", 'is_correct' => true],
                            ['choice_text' => "Cu³⁺", 'is_correct' => false],
                            ['choice_text' => "Cu²⁻", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi certains métaux de transition possèdent-ils plusieurs nombres d’oxydation ?",
                        'explanation' => "Les électrons des sous-couches proches en énergie peuvent participer différemment aux liaisons. Cela permet plusieurs états d’oxydation stables.",
                        'choices' => [
                            ['choice_text' => "Parce que plusieurs configurations électroniques proches sont possibles", 'is_correct' => true],
                            ['choice_text' => "Parce qu’ils ont toujours une seule orbitale", 'is_correct' => false],
                            ['choice_text' => "Parce qu’ils n’ont aucun électron de valence", 'is_correct' => false],
                            ['choice_text' => "Parce qu’ils sont tous des gaz nobles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le fer(II) et le fer(III) correspondent à quelles charges ?",
                        'explanation' => "Fer(II) correspond à Fe²⁺ et fer(III) à Fe³⁺. Le nombre romain indique la charge positive de l’ion dans ce contexte.",
                        'choices' => [
                            ['choice_text' => "Fe⁺ et Fe²⁺", 'is_correct' => false],
                            ['choice_text' => "Fe²⁺ et Fe³⁺", 'is_correct' => true],
                            ['choice_text' => "Fe³⁻ et Fe²⁻", 'is_correct' => false],
                            ['choice_text' => "Fe et Fe₂", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les composés de transition sont-ils souvent étudiés avec leurs couleurs ?",
                        'explanation' => "De nombreux ions de transition absorbent certaines longueurs d’onde de la lumière, ce qui peut donner des solutions ou des solides colorés.",
                        'choices' => [
                            ['choice_text' => "Parce que les couleurs peuvent fournir une information sur l’ion présent", 'is_correct' => true],
                            ['choice_text' => "Parce qu’ils sont tous naturellement fluorescents", 'is_correct' => false],
                            ['choice_text' => "Parce qu’un métal de transition est toujours rouge", 'is_correct' => false],
                            ['choice_text' => "Parce que la couleur ne dépend jamais de la structure", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel métal est souvent utilisé dans les pièces et certaines canalisations grâce à sa bonne résistance à la corrosion et à sa facilité de travail ?",
                        'explanation' => "Le cuivre est un métal utile dans les canalisations et les installations électriques, notamment pour sa conductivité et sa bonne résistance à la corrosion.",
                        'choices' => [
                            ['choice_text' => "Cuivre", 'is_correct' => true],
                            ['choice_text' => "Sodium", 'is_correct' => false],
                            ['choice_text' => "Potassium", 'is_correct' => false],
                            ['choice_text' => "Chlore", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel composé contient du fer(III) ?",
                        'explanation' => "Dans FeCl₃, trois ions Cl⁻ compensent un ion Fe³⁺. Le fer est donc à l’état d’oxydation +3.",
                        'choices' => [
                            ['choice_text' => "FeCl", 'is_correct' => false],
                            ['choice_text' => "FeCl₂", 'is_correct' => false],
                            ['choice_text' => "FeCl₃", 'is_correct' => true],
                            ['choice_text' => "Fe₂Cl", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel métal de transition est fortement attiré par un aimant dans les conditions ordinaires ?",
                        'explanation' => "Le fer possède des propriétés magnétiques importantes et est fortement attiré par les aimants.",
                        'choices' => [
                            ['choice_text' => "Fer", 'is_correct' => true],
                            ['choice_text' => "Cuivre", 'is_correct' => false],
                            ['choice_text' => "Argent", 'is_correct' => false],
                            ['choice_text' => "Sodium", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une solution contenant Fe³⁺, que représente le chiffre III dans le nom « fer(III) » ?",
                        'explanation' => "Le chiffre romain III indique que le fer est dans l’état d’oxydation +3.",
                        'choices' => [
                            ['choice_text' => "Le nombre de neutrons", 'is_correct' => false],
                            ['choice_text' => "L’état d’oxydation du fer", 'is_correct' => true],
                            ['choice_text' => "Le nombre d’atomes de fer", 'is_correct' => false],
                            ['choice_text' => "La masse atomique", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Réactions d’oxydoréduction en chimie inorganique",
                'description' => "Identifier l’oxydation et la réduction et comprendre quelques réactions redox simples.",
                'questions' => [
                    [
                        'question' => "Une oxydation correspond à…",
                        'explanation' => "En chimie redox, l’oxydation correspond à une perte d’électrons. La réduction correspond à un gain d’électrons.",
                        'choices' => [
                            ['choice_text' => "Un gain d’électrons", 'is_correct' => false],
                            ['choice_text' => "Une perte d’électrons", 'is_correct' => true],
                            ['choice_text' => "Une perte de neutrons", 'is_correct' => false],
                            ['choice_text' => "Une augmentation obligatoire de température", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une réduction correspond à…",
                        'explanation' => "Une réduction est un gain d’électrons. Cette définition permet de suivre facilement les échanges électroniques.",
                        'choices' => [
                            ['choice_text' => "Une perte d’électrons", 'is_correct' => false],
                            ['choice_text' => "Un gain d’électrons", 'is_correct' => true],
                            ['choice_text' => "Une perte de protons uniquement", 'is_correct' => false],
                            ['choice_text' => "Une disparition de toute charge", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans Zn → Zn²⁺ + 2 e⁻, le zinc est-il oxydé ou réduit ?",
                        'explanation' => "Le zinc perd deux électrons. Une perte d’électrons correspond à une oxydation.",
                        'choices' => [
                            ['choice_text' => "Oxydé", 'is_correct' => true],
                            ['choice_text' => "Réduit", 'is_correct' => false],
                            ['choice_text' => "Ni oxydé ni réduit", 'is_correct' => false],
                            ['choice_text' => "Neutralisé", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans Cu²⁺ + 2 e⁻ → Cu, le cuivre ionique est-il oxydé ou réduit ?",
                        'explanation' => "Cu²⁺ gagne deux électrons pour devenir Cu. Un gain d’électrons correspond à une réduction.",
                        'choices' => [
                            ['choice_text' => "Oxydé", 'is_correct' => false],
                            ['choice_text' => "Réduit", 'is_correct' => true],
                            ['choice_text' => "Évaporé", 'is_correct' => false],
                            ['choice_text' => "Neutralisé par la température", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une réaction redox, quelle espèce est l’agent oxydant ?",
                        'explanation' => "L’agent oxydant accepte des électrons. En les gagnant, il est lui-même réduit.",
                        'choices' => [
                            ['choice_text' => "L’espèce qui gagne des électrons", 'is_correct' => true],
                            ['choice_text' => "L’espèce qui perd des électrons", 'is_correct' => false],
                            ['choice_text' => "Toujours le métal", 'is_correct' => false],
                            ['choice_text' => "Toujours le gaz", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une réaction redox, quelle espèce est l’agent réducteur ?",
                        'explanation' => "L’agent réducteur donne des électrons à une autre espèce. Il s’oxyde donc au cours de la réaction.",
                        'choices' => [
                            ['choice_text' => "L’espèce qui donne des électrons", 'is_correct' => true],
                            ['choice_text' => "L’espèce qui gagne des électrons", 'is_correct' => false],
                            ['choice_text' => "Toujours un non-métal", 'is_correct' => false],
                            ['choice_text' => "Une espèce qui ne change jamais", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans la réaction entre Zn(s) et Cu²⁺(aq), quelle espèce s’oxyde ?",
                        'explanation' => "Le zinc métallique perd des électrons pour devenir Zn²⁺. Il est donc oxydé.",
                        'choices' => [
                            ['choice_text' => "Zn", 'is_correct' => true],
                            ['choice_text' => "Cu²⁺", 'is_correct' => false],
                            ['choice_text' => "L’eau uniquement", 'is_correct' => false],
                            ['choice_text' => "Le nitrate s’il est présent", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans la même réaction Zn + Cu²⁺ → Zn²⁺ + Cu, quelle espèce est réduite ?",
                        'explanation' => "Cu²⁺ gagne deux électrons et devient Cu métallique. Il subit donc une réduction.",
                        'choices' => [
                            ['choice_text' => "Zn", 'is_correct' => false],
                            ['choice_text' => "Cu²⁺", 'is_correct' => true],
                            ['choice_text' => "Zn²⁺", 'is_correct' => false],
                            ['choice_text' => "Les électrons libres", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel changement de nombre d’oxydation indique une oxydation ?",
                        'explanation' => "Une oxydation s’accompagne d’une augmentation du nombre d’oxydation, tandis qu’une réduction correspond à une diminution.",
                        'choices' => [
                            ['choice_text' => "Une augmentation", 'is_correct' => true],
                            ['choice_text' => "Une diminution", 'is_correct' => false],
                            ['choice_text' => "Une valeur toujours égale à zéro", 'is_correct' => false],
                            ['choice_text' => "Un changement sans rapport avec les électrons", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les réactions redox sont-elles importantes en chimie inorganique ?",
                        'explanation' => "Elles interviennent dans la corrosion, les piles, l’extraction des métaux, la combustion et de nombreux procédés industriels.",
                        'choices' => [
                            ['choice_text' => "Parce qu’elles impliquent des transferts d’électrons dans de nombreux procédés", 'is_correct' => true],
                            ['choice_text' => "Parce qu’elles ne concernent que les molécules organiques", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elles empêchent toute corrosion", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elles fonctionnent sans aucun changement chimique", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Chimie inorganique au laboratoire et dans la vie courante",
                'description' => "Relier les notions de chimie inorganique à des situations simples de laboratoire, d’industrie et de vie quotidienne.",
                'questions' => [
                    [
                        'question' => "Pourquoi le chlorure de sodium conduit-il mieux l’électricité une fois dissous dans l’eau qu’à l’état solide ?",
                        'explanation' => "Dans l’eau, les ions Na⁺ et Cl⁻ peuvent se déplacer. Dans le cristal solide, ils sont beaucoup plus immobilisés dans le réseau.",
                        'choices' => [
                            ['choice_text' => "Les ions deviennent mobiles dans la solution", 'is_correct' => true],
                            ['choice_text' => "Le sodium devient un métal liquide", 'is_correct' => false],
                            ['choice_text' => "Les électrons quittent tous les atomes", 'is_correct' => false],
                            ['choice_text' => "L’eau devient un métal", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi utilise-t-on souvent des béchers et des éprouvettes résistants aux produits chimiques ?",
                        'explanation' => "Le matériel de laboratoire doit supporter les produits, la chaleur et les manipulations sans réagir dangereusement avec les substances étudiées.",
                        'choices' => [
                            ['choice_text' => "Pour limiter les réactions entre le contenant et les produits", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter la masse des produits", 'is_correct' => false],
                            ['choice_text' => "Pour rendre tous les produits neutres", 'is_correct' => false],
                            ['choice_text' => "Pour produire de l’oxygène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une poudre blanche réagit avec un acide en produisant des bulles de gaz. Quel type de composé peut être impliqué ?",
                        'explanation' => "Un carbonate réagit avec un acide en libérant généralement du dioxyde de carbone, ce qui explique l’effervescence.",
                        'choices' => [
                            ['choice_text' => "Un carbonate", 'is_correct' => true],
                            ['choice_text' => "Un gaz noble pur", 'is_correct' => false],
                            ['choice_text' => "Un métal alcalin uniquement", 'is_correct' => false],
                            ['choice_text' => "Une solution de sucre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel gaz est libéré lorsqu’un carbonate réagit avec un acide ?",
                        'explanation' => "La réaction acide-carbonate produit du dioxyde de carbone CO₂, en plus de l’eau et d’un sel.",
                        'choices' => [
                            ['choice_text' => "Dioxyde de carbone", 'is_correct' => true],
                            ['choice_text' => "Dihydrogène", 'is_correct' => false],
                            ['choice_text' => "Chlore", 'is_correct' => false],
                            ['choice_text' => "Argon", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi faut-il éviter de toucher directement certains produits inorganiques au laboratoire ?",
                        'explanation' => "Certains acides, bases, sels ou composés métalliques peuvent être corrosifs, irritants ou toxiques. Les équipements de protection limitent l’exposition.",
                        'choices' => [
                            ['choice_text' => "Parce que certains produits peuvent être corrosifs, irritants ou toxiques", 'is_correct' => true],
                            ['choice_text' => "Parce que tous les produits sont radioactifs", 'is_correct' => false],
                            ['choice_text' => "Parce qu’un solide est toujours explosif", 'is_correct' => false],
                            ['choice_text' => "Parce que les ions n’existent pas dans les solides", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel métal est couramment utilisé dans les câbles électriques ?",
                        'explanation' => "Le cuivre est un excellent conducteur électrique et possède de bonnes propriétés mécaniques pour fabriquer des conducteurs.",
                        'choices' => [
                            ['choice_text' => "Cuivre", 'is_correct' => true],
                            ['choice_text' => "Sodium", 'is_correct' => false],
                            ['choice_text' => "Calcium", 'is_correct' => false],
                            ['choice_text' => "Chlore", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’aluminium est-il intéressant pour fabriquer certaines structures légères ?",
                        'explanation' => "L’aluminium possède une faible densité tout en offrant de bonnes propriétés mécaniques pour de nombreuses applications.",
                        'choices' => [
                            ['choice_text' => "Parce qu’il est relativement léger", 'is_correct' => true],
                            ['choice_text' => "Parce qu’il est toujours liquide", 'is_correct' => false],
                            ['choice_text' => "Parce qu’il ne conduit pas du tout la chaleur", 'is_correct' => false],
                            ['choice_text' => "Parce qu’il est un gaz noble", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel problème chimique cherche-t-on à limiter lorsqu’on protège une structure en fer avec une peinture adaptée ?",
                        'explanation' => "La peinture isole le fer de l’eau et du dioxygène, ce qui réduit les conditions favorables à la corrosion.",
                        'choices' => [
                            ['choice_text' => "La corrosion", 'is_correct' => true],
                            ['choice_text' => "La fusion nucléaire", 'is_correct' => false],
                            ['choice_text' => "La sublimation du sodium", 'is_correct' => false],
                            ['choice_text' => "La formation d’un gaz noble", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une salle de laboratoire, pourquoi une solution contenant un ion métallique peut-elle avoir une couleur particulière ?",
                        'explanation' => "Les ions métalliques, notamment certains ions de transition, peuvent absorber certaines longueurs d’onde de la lumière et donner des solutions colorées.",
                        'choices' => [
                            ['choice_text' => "À cause de l’interaction entre la lumière et la structure électronique de l’ion", 'is_correct' => true],
                            ['choice_text' => "Parce que tous les ions sont naturellement rouges", 'is_correct' => false],
                            ['choice_text' => "Parce que l’eau devient colorée par elle-même", 'is_correct' => false],
                            ['choice_text' => "Parce que la température est toujours élevée", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un étudiant renverse une petite quantité d’une base inconnue. Quelle réaction est la plus raisonnable ?",
                        'explanation' => "Un produit inconnu doit être traité selon les règles de sécurité du laboratoire. Il faut notamment prévenir l’encadrant et éviter tout contact direct.",
                        'choices' => [
                            ['choice_text' => "Le signaler et suivre immédiatement la procédure de sécurité du laboratoire", 'is_correct' => true],
                            ['choice_text' => "Le toucher pour vérifier s’il est dangereux", 'is_correct' => false],
                            ['choice_text' => "Ajouter un acide au hasard", 'is_correct' => false],
                            ['choice_text' => "Le remettre dans le flacon avec les doigts", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Révision intégrée de chimie inorganique",
                'description' => "Réviser les principales notions de chimie inorganique à travers des questions mélangées et progressives.",
                'questions' => [
                    [
                        'question' => "Quelle formule correspond à l’oxyde d’aluminium ?",
                        'explanation' => "L’aluminium forme Al³⁺ et l’oxyde O²⁻. Pour équilibrer les charges, on obtient Al₂O₃.",
                        'choices' => [
                            ['choice_text' => "AlO", 'is_correct' => false],
                            ['choice_text' => "Al₂O₃", 'is_correct' => true],
                            ['choice_text' => "AlO₂", 'is_correct' => false],
                            ['choice_text' => "Al₃O₂", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel ion est formé lorsque le magnésium perd deux électrons ?",
                        'explanation' => "La perte de deux électrons par un atome neutre de magnésium donne l’ion Mg²⁺.",
                        'choices' => [
                            ['choice_text' => "Mg⁺", 'is_correct' => false],
                            ['choice_text' => "Mg²⁺", 'is_correct' => true],
                            ['choice_text' => "Mg⁻", 'is_correct' => false],
                            ['choice_text' => "Mg²⁻", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un composé contient 1 ion Ca²⁺ et 2 ions F⁻. Quelle est sa formule ?",
                        'explanation' => "Les charges sont +2 et 2 × −1, donc elles se compensent. La formule est CaF₂.",
                        'choices' => [
                            ['choice_text' => "CaF", 'is_correct' => false],
                            ['choice_text' => "CaF₂", 'is_correct' => true],
                            ['choice_text' => "Ca₂F", 'is_correct' => false],
                            ['choice_text' => "Ca₂F₂", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel changement représente une réduction ?",
                        'explanation' => "Une réduction correspond à un gain d’électrons. C’est l’inverse de l’oxydation.",
                        'choices' => [
                            ['choice_text' => "Fe²⁺ + e⁻ → Fe⁺", 'is_correct' => false],
                            ['choice_text' => "Cu²⁺ + 2 e⁻ → Cu", 'is_correct' => true],
                            ['choice_text' => "Zn → Zn²⁺ + 2 e⁻", 'is_correct' => false],
                            ['choice_text' => "Na → Na⁺ + e⁻", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel composé est un sel ?",
                        'explanation' => "KBr est un sel ionique constitué de K⁺ et Br⁻.",
                        'choices' => [
                            ['choice_text' => "HNO₃", 'is_correct' => false],
                            ['choice_text' => "KBr", 'is_correct' => true],
                            ['choice_text' => "NaOH", 'is_correct' => false],
                            ['choice_text' => "SO₂", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel élément possède généralement 7 électrons de valence ?",
                        'explanation' => "Les halogènes du groupe 17 possèdent généralement sept électrons de valence.",
                        'choices' => [
                            ['choice_text' => "Sodium", 'is_correct' => false],
                            ['choice_text' => "Chlore", 'is_correct' => true],
                            ['choice_text' => "Néon", 'is_correct' => false],
                            ['choice_text' => "Magnésium", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un gaz noble comme l’argon réagit-il peu dans les conditions ordinaires ?",
                        'explanation' => "L’argon possède une couche externe stable. Il a donc peu tendance à gagner, perdre ou partager des électrons.",
                        'choices' => [
                            ['choice_text' => "Sa configuration électronique externe est stable", 'is_correct' => true],
                            ['choice_text' => "Il n’a aucun électron", 'is_correct' => false],
                            ['choice_text' => "Il est un métal alcalin", 'is_correct' => false],
                            ['choice_text' => "Il réagit trop vite avec tous les métaux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans Fe₂O₃, quel est le nombre d’oxydation du fer ?",
                        'explanation' => "Chaque oxygène vaut −2, soit −6 au total. Les deux atomes de fer doivent donc apporter +6, ce qui donne +3 pour chaque fer.",
                        'choices' => [
                            ['choice_text' => "+1", 'is_correct' => false],
                            ['choice_text' => "+2", 'is_correct' => false],
                            ['choice_text' => "+3", 'is_correct' => true],
                            ['choice_text' => "+6", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel résultat peut-on attendre lorsqu’un acide réagit avec un carbonate ?",
                        'explanation' => "Un acide et un carbonate produisent généralement un sel, de l’eau et du dioxyde de carbone, souvent visible sous forme de bulles.",
                        'choices' => [
                            ['choice_text' => "Du sel, de l’eau et du CO₂", 'is_correct' => true],
                            ['choice_text' => "Du sodium pur uniquement", 'is_correct' => false],
                            ['choice_text' => "Un gaz noble uniquement", 'is_correct' => false],
                            ['choice_text' => "Du fer métallique uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle affirmation rassemble correctement plusieurs notions de chimie inorganique ?",
                        'explanation' => "Les métaux peuvent perdre des électrons pour former des cations, les non-métaux peuvent en gagner, et ces ions peuvent former des composés ioniques électriquement neutres.",
                        'choices' => [
                            ['choice_text' => "Les métaux peuvent former des cations et les non-métaux des anions", 'is_correct' => true],
                            ['choice_text' => "Les métaux forment toujours des ions négatifs", 'is_correct' => false],
                            ['choice_text' => "Les non-métaux perdent toujours tous leurs électrons", 'is_correct' => false],
                            ['choice_text' => "Un composé ionique peut avoir une charge globale non nulle", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $index => $quizData) {
            $settings = $quizSettings[$index] ?? ['duration' => 20, 'passing_score' => 60];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
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
