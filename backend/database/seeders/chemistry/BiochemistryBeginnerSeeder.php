<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BiochemistryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'biochemistry')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 65],
            6 => ['duration' => 20, 'passing_score' => 65],
            7 => ['duration' => 20, 'passing_score' => 65],
            8 => ['duration' => 25, 'passing_score' => 70],
            9 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => 'Les bases de la biochimie',
                'description' => 'Découvrir les principales molécules du vivant et comprendre quelques notions fondamentales de biochimie.',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle général de la biochimie ?',
                        'explanation' => 'La biochimie étudie les molécules et les réactions chimiques qui ont lieu dans les organismes vivants.',
                        'choices' => [
                            [
                                'choice_text' => 'Étudier uniquement les roches',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Étudier les réactions chimiques du vivant',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Étudier seulement les étoiles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Étudier uniquement les phénomènes mécaniques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle molécule fournit rapidement de l’énergie aux cellules ?',
                        'explanation' => 'Le glucose peut être utilisé par les cellules comme source d’énergie et alimenter la production d’ATP.',
                        'choices' => [
                            [
                                'choice_text' => 'Le glucose',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le cholestérol uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’ADN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’eau distillée',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel élément est présent en grande quantité dans les molécules organiques du vivant ?',
                        'explanation' => 'Le carbone forme l’ossature de nombreuses molécules organiques, notamment les glucides, lipides, protéines et acides nucléiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Le carbone',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le fer uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’argent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le néon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle famille comprend les protéines ?',
                        'explanation' => 'Les protéines sont des macromolécules constituées de chaînes d’acides aminés.',
                        'choices' => [
                            [
                                'choice_text' => 'Les acides aminés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les polymères d’acides aminés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les sels minéraux uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les gaz nobles',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle famille de molécules comprend l’ADN et l’ARN ?',
                        'explanation' => 'L’ADN et l’ARN sont des acides nucléiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Les glucides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les lipides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les acides nucléiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les stéroïdes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal solvant des réactions biochimiques dans une cellule ?',
                        'explanation' => 'L’eau constitue le principal milieu dans lequel se produisent de nombreuses réactions cellulaires.',
                        'choices' => [
                            [
                                'choice_text' => 'L’eau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le dioxyde de carbone',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’oxygène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le sodium solide',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie le terme « macromolécule » ?',
                        'explanation' => 'Une macromolécule est une très grande molécule, souvent formée par l’assemblage de petites unités.',
                        'choices' => [
                            [
                                'choice_text' => 'Une molécule toujours gazeuse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une très grande molécule',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une molécule forcément métallique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une molécule sans carbone',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel groupe de biomolécules comprend les lipides ?',
                        'explanation' => 'Les lipides regroupent des molécules hydrophobes ou peu solubles dans l’eau, comme les triglycérides et les phospholipides.',
                        'choices' => [
                            [
                                'choice_text' => 'Les molécules toujours ioniques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les glucides uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les lipides',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les acides nucléiques uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les cellules ont-elles besoin d’ATP ?',
                        'explanation' => 'L’ATP sert de forme immédiatement utilisable de transfert d’énergie pour de nombreux processus cellulaires.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour stocker les informations génétiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour transférer de l’énergie utilisable',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour remplacer toute l’eau cellulaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour fabriquer directement l’ADN par magie',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle proposition décrit correctement une enzyme ?',
                        'explanation' => 'Une enzyme est généralement une protéine qui accélère une réaction chimique sans être consommée globalement par cette réaction.',
                        'choices' => [
                            [
                                'choice_text' => 'Une enzyme est toujours un glucide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une enzyme accélère certaines réactions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une enzyme détruit toujours les produits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une enzyme remplace le substrat',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Glucides et énergie',
                'description' => 'Comprendre les glucides, leur structure simple et leur rôle énergétique.',
                'questions' => [
                    [
                        'question' => 'Quel est un exemple de monosaccharide ?',
                        'explanation' => 'Le glucose est un monosaccharide, c’est-à-dire un sucre constitué d’une seule unité.',
                        'choices' => [
                            [
                                'choice_text' => 'Le glucose',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’amidon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le glycogène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La cellulose',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel disaccharide est formé de glucose et de fructose ?',
                        'explanation' => 'Le saccharose résulte de l’association d’un glucose et d’un fructose.',
                        'choices' => [
                            [
                                'choice_text' => 'Le lactose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le saccharose',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le glycogène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La cellulose',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle forme de stockage du glucose trouve-t-on principalement chez les animaux ?',
                        'explanation' => 'Les animaux stockent le glucose principalement sous forme de glycogène, notamment dans le foie et les muscles.',
                        'choices' => [
                            [
                                'choice_text' => 'La cellulose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le glycogène',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La chitine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le saccharose',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel polysaccharide constitue une grande partie des parois cellulaires végétales ?',
                        'explanation' => 'La cellulose est un polysaccharide structural majeur des parois cellulaires végétales.',
                        'choices' => [
                            [
                                'choice_text' => 'Le glycogène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La cellulose',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le glucose libre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le lactose',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’un organisme a besoin d’une énergie rapidement disponible, quel glucide est particulièrement important ?',
                        'explanation' => 'Le glucose peut être rapidement mobilisé et utilisé dans les voies énergétiques cellulaires.',
                        'choices' => [
                            [
                                'choice_text' => 'Le glucose',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La cellulose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La chitine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le cholestérol',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence simple distingue un monosaccharide d’un polysaccharide ?',
                        'explanation' => 'Un monosaccharide est une seule unité de sucre, tandis qu’un polysaccharide contient de nombreuses unités liées.',
                        'choices' => [
                            [
                                'choice_text' => 'Le monosaccharide contient de nombreuses chaînes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le polysaccharide est toujours plus petit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le monosaccharide est une seule unité de sucre',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils sont exactement identiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’amidon est-il important chez les plantes ?',
                        'explanation' => 'L’amidon constitue une forme de réserve énergétique chez les plantes.',
                        'choices' => [
                            [
                                'choice_text' => 'Il sert de réserve énergétique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il constitue l’ADN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il remplace les protéines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il transporte l’oxygène dans le sang',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une digestion hydrolyse l’amidon. Quel produit simple peut être obtenu en quantité importante ?',
                        'explanation' => 'L’amidon est constitué d’unités de glucose. Sa dégradation libère donc du glucose et des fragments apparentés.',
                        'choices' => [
                            [
                                'choice_text' => 'Du glucose',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Du fer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Du cholestérol',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'De l’ADN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel test classique met en évidence l’amidon en laboratoire scolaire ?',
                        'explanation' => 'L’iode forme avec l’amidon une coloration caractéristique bleu-noir.',
                        'choices' => [
                            [
                                'choice_text' => 'Le réactif de Biuret',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La liqueur de Fehling uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La solution iodée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le sulfate de cuivre anhydre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle le glycogène joue-t-il dans le corps animal ?',
                        'explanation' => 'Le glycogène est une réserve de glucose mobilisable lorsque les cellules en ont besoin.',
                        'choices' => [
                            [
                                'choice_text' => 'Il stocke une partie du glucose',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il code les protéines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il forme les membranes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il remplace les acides nucléiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Lipides et membranes',
                'description' => 'Identifier les principaux lipides et comprendre leurs rôles énergétiques et structuraux.',
                'questions' => [
                    [
                        'question' => 'Quelle propriété caractérise souvent les lipides ?',
                        'explanation' => 'De nombreux lipides sont peu solubles dans l’eau et plus solubles dans des solvants organiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils sont tous très solubles dans l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils sont souvent hydrophobes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils sont tous des protéines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils contiennent toujours de l’ADN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’un triglycéride dans l’organisme ?',
                        'explanation' => 'Les triglycérides constituent une importante réserve d’énergie à long terme.',
                        'choices' => [
                            [
                                'choice_text' => 'Stocker de l’énergie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Porter l’information génétique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Catalyser toutes les réactions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Former directement les ribosomes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel lipide est un constituant majeur des membranes cellulaires ?',
                        'explanation' => 'Les phospholipides s’organisent en bicouche et constituent la base de nombreuses membranes biologiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Les phospholipides',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les monosaccharides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les acides aminés libres',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le glycogène',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les phospholipides forment-ils spontanément une bicouche dans l’eau ?',
                        'explanation' => 'Ils possèdent une partie hydrophile et une partie hydrophobe, ce qui favorise une organisation en bicouche dans l’eau.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’ils sont entièrement hydrophiles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’ils possèdent une partie hydrophile et une partie hydrophobe',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’ils sont des protéines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’ils ne réagissent jamais avec l’eau',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel lipide joue un rôle important dans la fluidité des membranes animales ?',
                        'explanation' => 'Le cholestérol intervient dans la régulation de la fluidité et de la stabilité des membranes animales.',
                        'choices' => [
                            [
                                'choice_text' => 'Le cholestérol',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le glycogène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La cellulose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’ADN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie « acide gras saturé » ?',
                        'explanation' => 'Un acide gras saturé ne possède pas de double liaison carbone-carbone dans sa chaîne.',
                        'choices' => [
                            [
                                'choice_text' => 'Il possède plusieurs doubles liaisons',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il ne possède pas de double liaison C=C dans sa chaîne',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il contient forcément du soufre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il est toujours soluble dans l’eau',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Les acides gras insaturés contiennent au moins…',
                        'explanation' => 'Un acide gras insaturé possède au moins une double liaison carbone-carbone.',
                        'choices' => [
                            [
                                'choice_text' => 'une double liaison C=C',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'un atome de fer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'une chaîne d’ADN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un groupement phosphate obligatoire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle fonction des lipides explique leur abondance dans les tissus de réserve ?',
                        'explanation' => 'Leur forte densité énergétique en fait une réserve efficace d’énergie.',
                        'choices' => [
                            [
                                'choice_text' => 'La transmission de l’information génétique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le stockage d’énergie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La catalyse de toutes les réactions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La fabrication directe des ribosomes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel composé possède une partie hydrophile et une partie hydrophobe ?',
                        'explanation' => 'Les phospholipides sont amphiphiles : leur tête est hydrophile tandis que leurs chaînes sont hydrophobes.',
                        'choices' => [
                            [
                                'choice_text' => 'Un phospholipide',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le glucose uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le glycogène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’ADN uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les graisses peuvent-elles constituer une réserve énergétique durable ?',
                        'explanation' => 'Elles stockent beaucoup d’énergie par unité de masse et sont relativement compactes.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles contiennent beaucoup d’énergie par unité de masse',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles sont toujours dissoutes dans l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles sont toutes des enzymes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles contiennent les codons génétiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Acides aminés et protéines',
                'description' => 'Comprendre la structure générale des acides aminés et les niveaux d’organisation des protéines.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’unité de base des protéines ?',
                        'explanation' => 'Les protéines sont constituées de chaînes d’acides aminés reliés entre eux.',
                        'choices' => [
                            [
                                'choice_text' => 'Le nucléotide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’acide aminé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le glucose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le phosphate libre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel type de liaison relie deux acides aminés dans une protéine ?',
                        'explanation' => 'La liaison peptidique relie le groupe carboxyle d’un acide aminé au groupe amine d’un autre.',
                        'choices' => [
                            [
                                'choice_text' => 'La liaison peptidique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La liaison ionique uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La liaison métallique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La liaison phosphodiester',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que désigne la structure primaire d’une protéine ?',
                        'explanation' => 'La structure primaire correspond à la séquence linéaire des acides aminés.',
                        'choices' => [
                            [
                                'choice_text' => 'La forme finale en trois dimensions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La séquence des acides aminés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le nombre de lipides autour de la protéine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La quantité d’ADN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle structure correspond à la forme globale tridimensionnelle d’une seule chaîne polypeptidique ?',
                        'explanation' => 'La structure tertiaire décrit le repliement tridimensionnel global d’une chaîne polypeptidique.',
                        'choices' => [
                            [
                                'choice_text' => 'La structure primaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La structure tertiaire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La structure génétique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La structure ionique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la dénaturation d’une protéine ?',
                        'explanation' => 'La dénaturation perturbe la structure spatiale d’une protéine et peut lui faire perdre sa fonction.',
                        'choices' => [
                            [
                                'choice_text' => 'La protéine devient automatiquement un glucide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Sa structure tridimensionnelle est perturbée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle gagne toujours des acides aminés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle devient un acide nucléique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation peut dénaturer certaines protéines ?',
                        'explanation' => 'Une température élevée ou un pH extrême peut perturber les interactions qui maintiennent la structure des protéines.',
                        'choices' => [
                            [
                                'choice_text' => 'Une température élevée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une atmosphère parfaitement stable',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le simple fait de respirer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une faible lumière visible dans tous les cas',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel groupe fonctionnel caractérise les acides aminés ?',
                        'explanation' => 'Tous les acides aminés protéinogènes possèdent au moins un groupe amine et un groupe carboxyle, avec des variations de chaîne latérale.',
                        'choices' => [
                            [
                                'choice_text' => 'Un groupe amine et un groupe carboxyle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Deux groupes phosphate obligatoires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un groupe sucre uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un groupe métallique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la séquence des acides aminés est-elle importante ?',
                        'explanation' => 'La séquence influence le repliement de la protéine et donc sa structure et sa fonction.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle détermine en partie le repliement et la fonction',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle n’a aucun lien avec la fonction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle transforme la protéine en lipide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle fixe toujours la température du milieu',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle protéine transporte l’oxygène dans les globules rouges ?',
                        'explanation' => 'L’hémoglobine est une protéine spécialisée dans le transport de l’oxygène dans le sang.',
                        'choices' => [
                            [
                                'choice_text' => 'L’hémoglobine',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’amylase',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La cellulose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le glycogène',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle propriété des acides aminés permet la diversité des protéines ?',
                        'explanation' => 'Les acides aminés possèdent des chaînes latérales différentes, ce qui modifie leurs propriétés et permet une grande diversité de protéines.',
                        'choices' => [
                            [
                                'choice_text' => 'La diversité de leurs chaînes latérales',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le fait qu’ils soient tous identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Leur absence totale de carbone',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Leur caractère toujours métallique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Enzymes et catalyse biologique',
                'description' => 'Comprendre le rôle des enzymes, leur spécificité et l’influence de quelques facteurs sur leur activité.',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal d’une enzyme ?',
                        'explanation' => 'Une enzyme accélère une réaction en diminuant l’énergie d’activation nécessaire pour atteindre l’état de transition.',
                        'choices' => [
                            [
                                'choice_text' => 'Accélérer une réaction',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Être consommée en grande quantité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer tous les substrats',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Changer systématiquement le produit final',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Comment appelle-t-on la molécule sur laquelle agit une enzyme ?',
                        'explanation' => 'La molécule reconnue et transformée par l’enzyme est appelée substrat.',
                        'choices' => [
                            [
                                'choice_text' => 'Le produit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le substrat',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le solvant universel',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coenzyme',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une enzyme est-elle souvent spécifique ?',
                        'explanation' => 'La forme et les propriétés chimiques de son site actif favorisent la reconnaissance de certains substrats.',
                        'choices' => [
                            [
                                'choice_text' => 'Son site actif reconnaît certaines molécules',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle réagit uniquement avec l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Toutes les enzymes ont la même structure',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne possède aucune structure',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement si la température dépasse fortement la température optimale d’une enzyme ?',
                        'explanation' => 'Une température trop élevée peut dénaturer l’enzyme et réduire fortement son activité.',
                        'choices' => [
                            [
                                'choice_text' => 'Son activité augmente sans limite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle peut perdre sa structure et son activité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle devient automatiquement un lipide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle crée plus de substrat',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Comment un pH très éloigné du pH optimal peut-il affecter une enzyme ?',
                        'explanation' => 'Un pH extrême peut modifier les charges de certains groupes et perturber la structure ou le site actif de l’enzyme.',
                        'choices' => [
                            [
                                'choice_text' => 'Il peut diminuer son activité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il la rend toujours deux fois plus rapide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il transforme l’enzyme en ADN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il n’a jamais aucun effet',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une enzyme est-elle consommée comme un réactif ordinaire à chaque cycle catalytique ?',
                        'explanation' => 'L’enzyme participe au mécanisme mais est régénérée à la fin du cycle, même si elle peut être altérée dans certaines conditions extrêmes.',
                        'choices' => [
                            [
                                'choice_text' => 'Oui, elle disparaît après chaque réaction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Non, elle peut être réutilisée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Oui, elle devient toujours un produit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Non, parce qu’elle est un métal',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle partie d’une enzyme se lie directement au substrat ?',
                        'explanation' => 'Le site actif est la région de l’enzyme qui reconnaît et lie le substrat pendant la réaction.',
                        'choices' => [
                            [
                                'choice_text' => 'Le site actif',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le noyau cellulaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La membrane',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le ribosome',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie « énergie d’activation » ?',
                        'explanation' => 'L’énergie d’activation est la barrière énergétique à franchir pour qu’une réaction puisse se produire.',
                        'choices' => [
                            [
                                'choice_text' => 'L’énergie stockée uniquement dans l’ATP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La barrière énergétique initiale à franchir',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La chaleur totale produite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La masse de l’enzyme',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel effet une enzyme a-t-elle sur l’énergie d’activation ?',
                        'explanation' => 'Une enzyme fournit une voie réactionnelle dont l’énergie d’activation est plus faible.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle la diminue',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle la double toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle la rend infinie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne l’influence jamais',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans une expérience, la quantité de substrat augmente puis l’activité enzymatique atteint un plateau. Quelle explication simple est plausible ?',
                        'explanation' => 'Lorsque beaucoup de sites actifs sont occupés, ajouter davantage de substrat peut ne plus augmenter fortement la vitesse : l’enzyme est proche de la saturation.',
                        'choices' => [
                            [
                                'choice_text' => 'Les sites actifs sont proches de la saturation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le substrat est devenu de l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’enzyme a changé en ADN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La réaction a forcément changé de sens',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'ADN, ARN et expression de l’information',
                'description' => 'Découvrir les nucléotides, les acides nucléiques et les grandes étapes de l’expression de l’information génétique.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’unité de base des acides nucléiques ?',
                        'explanation' => 'Les acides nucléiques sont constitués de nucléotides.',
                        'choices' => [
                            [
                                'choice_text' => 'L’acide aminé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nucléotide',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le glucose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le triglycéride',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel sucre trouve-t-on dans l’ADN ?',
                        'explanation' => 'L’ADN contient le désoxyribose, tandis que l’ARN contient le ribose.',
                        'choices' => [
                            [
                                'choice_text' => 'Le ribose uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le désoxyribose',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le glucose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le fructose',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle base azotée est présente dans l’ARN à la place de la thymine ?',
                        'explanation' => 'Dans l’ARN, l’uracile remplace la thymine présente dans l’ADN.',
                        'choices' => [
                            [
                                'choice_text' => 'La cytosine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’uracile',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La guanine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’adénine',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle paire de bases est complémentaire dans l’ADN ?',
                        'explanation' => 'Dans l’ADN, l’adénine s’apparie avec la thymine et la cytosine avec la guanine.',
                        'choices' => [
                            [
                                'choice_text' => 'A avec T',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A avec C',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'G avec T',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'C avec A uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général de l’ADN ?',
                        'explanation' => 'L’ADN contient une grande partie de l’information génétique utilisée par les cellules.',
                        'choices' => [
                            [
                                'choice_text' => 'Stocker l’information génétique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Transporter uniquement les graisses',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Catalyser toutes les réactions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Former les membranes seul',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général de l’ARN messager ?',
                        'explanation' => 'L’ARN messager transporte une information issue de l’ADN vers les ribosomes pour participer à la synthèse des protéines.',
                        'choices' => [
                            [
                                'choice_text' => 'Transporter une information pour fabriquer une protéine',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Stocker toute la graisse cellulaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer les phospholipides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Détruire l’ADN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Comment appelle-t-on la copie d’une information de l’ADN en ARN ?',
                        'explanation' => 'La transcription correspond à la synthèse d’un ARN à partir d’un modèle d’ADN.',
                        'choices' => [
                            [
                                'choice_text' => 'La traduction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La transcription',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La fermentation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La glycolyse',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Comment appelle-t-on la synthèse d’une protéine à partir de l’ARN messager ?',
                        'explanation' => 'La traduction se déroule au niveau des ribosomes et permet d’assembler les acides aminés dans le bon ordre.',
                        'choices' => [
                            [
                                'choice_text' => 'La réplication',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La traduction',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La diffusion',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’oxydation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel organite réalise directement la traduction ?',
                        'explanation' => 'Les ribosomes lisent l’ARN messager et assemblent les acides aminés pour former une chaîne polypeptidique.',
                        'choices' => [
                            [
                                'choice_text' => 'Le ribosome',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le lysosome',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La membrane plasmique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La mitochondrie uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une mutation peut-elle modifier une protéine ?',
                        'explanation' => 'Une mutation peut modifier la séquence d’ADN et, dans certains cas, changer un ou plusieurs codons et donc la séquence d’acides aminés.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut modifier l’information utilisée pour la séquence protéique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle transforme automatiquement les lipides en glucides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime toujours toute l’information génétique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne peut jamais avoir d’effet',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'ATP et métabolisme énergétique',
                'description' => 'Comprendre comment les cellules produisent et utilisent l’ATP et distinguer quelques voies métaboliques de base.',
                'questions' => [
                    [
                        'question' => 'Que représente l’ATP dans une cellule ?',
                        'explanation' => 'L’ATP est une molécule utilisée pour transférer de l’énergie à de nombreux processus cellulaires.',
                        'choices' => [
                            [
                                'choice_text' => 'Une forme de transfert d’énergie cellulaire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une base de l’ADN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un lipide membranaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un déchet sans fonction',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie métabolisme ?',
                        'explanation' => 'Le métabolisme regroupe l’ensemble des réactions chimiques qui se déroulent dans un organisme.',
                        'choices' => [
                            [
                                'choice_text' => 'Toutes les réactions chimiques du vivant',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement la digestion',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement la respiration',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement les mouvements musculaires',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle molécule est fréquemment utilisée comme carburant pour la respiration cellulaire ?',
                        'explanation' => 'Le glucose est une source importante de matière énergétique pour de nombreuses cellules.',
                        'choices' => [
                            [
                                'choice_text' => 'Le glucose',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’ADN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le collagène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La cellulose intacte dans une cellule animale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle voie commence la dégradation du glucose ?',
                        'explanation' => 'La glycolyse est une voie métabolique qui transforme le glucose en pyruvate dans le cytoplasme.',
                        'choices' => [
                            [
                                'choice_text' => 'La glycolyse',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La traduction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La réplication',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La synthèse des lipides uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Où se déroule la glycolyse ?',
                        'explanation' => 'La glycolyse se déroule dans le cytosol, donc dans la partie liquide du cytoplasme.',
                        'choices' => [
                            [
                                'choice_text' => 'Dans le cytosol',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement dans le noyau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement dans les lysosomes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Dans le milieu extérieur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le but immédiat de la respiration cellulaire aérobie pour la cellule ?',
                        'explanation' => 'Elle permet notamment de récupérer une grande quantité d’énergie du glucose sous forme d’ATP, en présence d’oxygène.',
                        'choices' => [
                            [
                                'choice_text' => 'Produire de l’ATP à partir de l’énergie des nutriments',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Fabriquer directement l’ADN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Détruire toutes les protéines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Créer du glucose à partir du vide',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue l’oxygène dans la respiration aérobie ?',
                        'explanation' => 'L’oxygène agit comme accepteur final d’électrons dans la chaîne respiratoire mitochondriale.',
                        'choices' => [
                            [
                                'choice_text' => 'Accepteur final d’électrons',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Substrat principal de la glycolyse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Enzyme de la traduction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réserve de glucose',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement lorsque l’ATP est utilisé pour fournir de l’énergie ?',
                        'explanation' => 'L’hydrolyse de l’ATP libère de l’énergie utilisable et produit notamment de l’ADP et du phosphate inorganique.',
                        'choices' => [
                            [
                                'choice_text' => 'Il peut être hydrolysé en ADP et phosphate',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il devient toujours de l’ADN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il forme toujours du glucose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il disparaît sans aucun produit',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence simple existe entre anabolisme et catabolisme ?',
                        'explanation' => 'Le catabolisme dégrade des molécules et libère souvent de l’énergie, tandis que l’anabolisme construit des molécules et demande généralement de l’énergie.',
                        'choices' => [
                            [
                                'choice_text' => 'Le catabolisme dégrade ; l’anabolisme construit',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le catabolisme construit ; l’anabolisme détruit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les deux signifient exactement la même chose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Aucun des deux ne concerne l’énergie',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le corps stocke-t-il aussi de l’énergie sous forme de glycogène et de lipides ?',
                        'explanation' => 'Ces réserves permettent de conserver de l’énergie sous des formes adaptées à un stockage plus ou moins court ou dense.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour disposer de réserves d’énergie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour remplacer l’ADN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour produire uniquement de l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour empêcher toutes les réactions',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Vitamines, minéraux et équilibre du milieu',
                'description' => 'Reconnaître le rôle général des vitamines, des minéraux, de l’eau et du pH dans le fonctionnement cellulaire.',
                'questions' => [
                    [
                        'question' => 'Pourquoi les vitamines sont-elles importantes ?',
                        'explanation' => 'Les vitamines sont nécessaires en petites quantités pour de nombreuses fonctions biologiques, souvent comme précurseurs ou cofacteurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles participent à de nombreuses fonctions biologiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles remplacent toutes les protéines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles fournissent toujours le plus d’énergie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles constituent toujours les membranes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle vitamine est souvent associée à la vision normale ?',
                        'explanation' => 'La vitamine A joue un rôle important dans la vision, notamment dans le fonctionnement de la rétine.',
                        'choices' => [
                            [
                                'choice_text' => 'Vitamine A',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Vitamine C',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Vitamine K',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Vitamine B12',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle vitamine est connue pour son rôle dans la synthèse du collagène et la protection antioxydante ?',
                        'explanation' => 'La vitamine C intervient notamment dans la synthèse du collagène et possède une fonction antioxydante.',
                        'choices' => [
                            [
                                'choice_text' => 'Vitamine C',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Vitamine D',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Vitamine K',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Vitamine B1 uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel minéral est important pour l’hémoglobine ?',
                        'explanation' => 'Le fer est un élément essentiel de l’hémoglobine et contribue au transport de l’oxygène.',
                        'choices' => [
                            [
                                'choice_text' => 'Le fer',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le sodium uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le chlore gazeux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’iode seulement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’eau est-elle indispensable aux cellules ?',
                        'explanation' => 'L’eau est un solvant majeur, participe à des réactions et permet le transport de nombreuses substances.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle sert de solvant et participe à de nombreux processus',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle ne sert qu’à refroidir',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle remplace l’ATP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle constitue l’ADN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel terme désigne le maintien relativement stable des conditions internes d’un organisme ?',
                        'explanation' => 'L’homéostasie correspond au maintien de conditions internes relativement stables malgré les changements du milieu.',
                        'choices' => [
                            [
                                'choice_text' => 'L’homéostasie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La polymérisation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La transcription',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La glycolyse',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le pH du sang est-il soigneusement régulé ?',
                        'explanation' => 'De nombreuses protéines et enzymes sont sensibles au pH. Un pH trop différent peut perturber leur fonctionnement.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les protéines et enzymes sont sensibles au pH',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que le sang doit être neutre à pH 7 exactement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le pH ne change jamais',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le pH crée directement l’ADN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle substance agit comme réserve ou système tampon dans le sang pour aider à limiter les variations de pH ?',
                        'explanation' => 'Le système bicarbonate/acide carbonique joue un rôle majeur dans la régulation du pH sanguin.',
                        'choices' => [
                            [
                                'choice_text' => 'Le système bicarbonate',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le glycogène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le cholestérol',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La cellulose',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à un déficit en fer ?',
                        'explanation' => 'Un manque de fer peut limiter la production normale d’hémoglobine et contribuer à une anémie ferriprive.',
                        'choices' => [
                            [
                                'choice_text' => 'Une diminution de la capacité à produire suffisamment d’hémoglobine',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une augmentation obligatoire du glycogène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition de l’ADN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une transformation des protéines en lipides',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les minéraux sont-ils dits « essentiels » même en petites quantités ?',
                        'explanation' => 'Certains minéraux sont nécessaires au fonctionnement d’enzymes, à l’équilibre ionique, aux os ou à d’autres fonctions biologiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils participent à plusieurs fonctions indispensables',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils sont tous des sources principales d’énergie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils remplacent tous les glucides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils sont tous stockés dans l’ADN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Biochimie : méthodes et interprétation simples',
                'description' => 'Relier les notions de biochimie à quelques méthodes de laboratoire et à l’interprétation de résultats simples.',
                'questions' => [
                    [
                        'question' => 'Quel test peut être utilisé pour mettre en évidence des protéines dans une solution ?',
                        'explanation' => 'Le test de Biuret donne une coloration caractéristique en présence de liaisons peptidiques dans des protéines.',
                        'choices' => [
                            [
                                'choice_text' => 'Le test de Biuret',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La solution iodée pour l’amidon uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le test de flamme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le papier tournesol uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel test classique indique la présence de glucose réducteur après chauffage ?',
                        'explanation' => 'La liqueur de Fehling peut donner un précipité rouge brique en présence de certains sucres réducteurs après chauffage.',
                        'choices' => [
                            [
                                'choice_text' => 'La liqueur de Fehling',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le réactif de Biuret',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’iode',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le bleu de bromothymol',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi réalise-t-on un témoin lors d’une expérience biochimique ?',
                        'explanation' => 'Le témoin fournit une référence permettant de distinguer un effet réel du test d’un changement dû au milieu ou à la manipulation.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour avoir une référence de comparaison',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter forcément la réaction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour remplacer toutes les mesures',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour changer la composition de l’échantillon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une solution absorbe davantage de lumière à une longueur d’onde donnée. Que peut-on faire pour quantifier cette absorption ?',
                        'explanation' => 'Un spectrophotomètre permet de mesurer l’absorbance d’une solution à une longueur d’onde choisie.',
                        'choices' => [
                            [
                                'choice_text' => 'Utiliser un spectrophotomètre',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Utiliser une balance uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Utiliser un microscope électronique uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Utiliser un thermomètre uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi construit-on une courbe d’étalonnage ?',
                        'explanation' => 'Elle permet de relier une mesure instrumentale à des concentrations connues afin d’estimer la concentration d’un échantillon inconnu.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour relier une mesure à des concentrations connues',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour changer la masse molaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour détruire les protéines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour mesurer la température ambiante uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un échantillon donne une absorbance comprise entre celles de deux standards. Que peut-on faire ?',
                        'explanation' => 'On peut utiliser la courbe d’étalonnage pour estimer la concentration correspondante, dans la gamme étudiée.',
                        'choices' => [
                            [
                                'choice_text' => 'Estimer sa concentration avec la courbe d’étalonnage',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Conclure automatiquement qu’il est pur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ignorer les standards',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Changer sa formule chimique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il parfois diluer un échantillon avant une mesure ?',
                        'explanation' => 'La dilution peut ramener la concentration dans la gamme de mesure fiable de la méthode utilisée.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour entrer dans la gamme de mesure fiable',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour créer de nouvelles molécules',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour rendre l’échantillon toujours plus concentré',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer toute erreur expérimentale',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une bonne pratique avant d’utiliser un instrument de mesure ?',
                        'explanation' => 'L’instrument doit être vérifié ou étalonné selon la méthode afin d’obtenir des résultats fiables.',
                        'choices' => [
                            [
                                'choice_text' => 'Vérifier ou étalonner l’instrument',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Changer les unités au hasard',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ignorer les standards',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Mesurer sans connaître la méthode',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi répéter une mesure biologique ?',
                        'explanation' => 'Répéter une mesure permet d’évaluer sa variabilité et d’obtenir une estimation plus robuste.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour évaluer la variabilité et améliorer la fiabilité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour changer la nature de l’échantillon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour rendre toutes les valeurs identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer automatiquement toute erreur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si deux mesures sont très proches l’une de l’autre, que peut-on dire prudemment ?',
                        'explanation' => 'Des mesures proches indiquent une bonne répétabilité dans cette série, mais cela ne garantit pas à lui seul l’exactitude absolue.',
                        'choices' => [
                            [
                                'choice_text' => 'La répétabilité semble bonne',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’exactitude est forcément parfaite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’instrument est forcément neuf',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La méthode ne comporte aucune erreur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de biochimie',
                'description' => 'Réviser les notions essentielles de biochimie avec des questions mêlant structure, fonction, métabolisme et laboratoire.',
                'questions' => [
                    [
                        'question' => 'Quelle association est correcte ?',
                        'explanation' => 'Les principales familles étudiées en biochimie comprennent notamment les glucides, lipides, protéines et acides nucléiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Glucose — glucide',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ADN — lipide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Triglycéride — acide nucléique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Hémoglobine — monosaccharide',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle molécule est un polymère d’acides aminés ?',
                        'explanation' => 'Une protéine est une chaîne ou un assemblage de chaînes polypeptidiques formées à partir d’acides aminés.',
                        'choices' => [
                            [
                                'choice_text' => 'Une protéine',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le glucose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le glycogène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le cholestérol',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel couple décrit correctement l’effet d’une enzyme ?',
                        'explanation' => 'Les enzymes accélèrent les réactions en diminuant l’énergie d’activation, sans changer le principe thermodynamique de la réaction.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle diminue l’énergie d’activation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle augmente toujours l’énergie d’activation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle change obligatoirement le produit final',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle est forcément consommée entièrement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle molécule stocke l’information génétique ?',
                        'explanation' => 'L’ADN est le principal support de l’information génétique dans les cellules étudiées en biochimie.',
                        'choices' => [
                            [
                                'choice_text' => 'L’ADN',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’ATP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le triglycéride',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le glucose',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel composé constitue une réserve énergétique importante chez les animaux ?',
                        'explanation' => 'Les triglycérides sont une forme importante de stockage énergétique à long terme chez les animaux.',
                        'choices' => [
                            [
                                'choice_text' => 'Les triglycérides',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’ARN messager',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La cellulose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le phosphate libre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une cellule a besoin d’énergie pour transporter activement des ions. Quelle molécule est directement mobilisable pour fournir cette énergie ?',
                        'explanation' => 'L’ATP est utilisée pour coupler des réactions énergétiques à des processus comme le transport actif.',
                        'choices' => [
                            [
                                'choice_text' => 'L’ATP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’ADN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La cellulose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le cholestérol',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une protéine peut-elle perdre sa fonction après un chauffage intense ?',
                        'explanation' => 'Le chauffage peut perturber les interactions qui maintiennent la structure tridimensionnelle de la protéine.',
                        'choices' => [
                            [
                                'choice_text' => 'Sa structure tridimensionnelle peut être dénaturée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle devient automatiquement une vitamine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle gagne toujours des acides aminés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle se transforme directement en ADN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un résultat expérimental varie légèrement d’un essai à l’autre. Quelle démarche est la plus appropriée ?',
                        'explanation' => 'Répéter les mesures et analyser la variabilité permet de distinguer plus clairement la dispersion expérimentale d’un véritable effet biologique.',
                        'choices' => [
                            [
                                'choice_text' => 'Répéter les mesures et examiner la variabilité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Choisir uniquement la valeur la plus élevée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer les valeurs sans justification',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ignorer le témoin',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé relie correctement transcription et traduction ?',
                        'explanation' => 'La transcription produit un ARN à partir d’un modèle d’ADN, puis la traduction utilise cet ARN pour participer à la synthèse d’une protéine.',
                        'choices' => [
                            [
                                'choice_text' => 'Transcription : ADN vers ARN ; traduction : ARN vers protéine',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Transcription : protéine vers ADN ; traduction : ADN vers lipide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les deux fabriquent uniquement des lipides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La traduction précède toujours la transcription dans le même processus',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle idée résume le mieux la biochimie ?',
                        'explanation' => 'La biochimie relie la structure des molécules du vivant à leurs fonctions et aux réactions qui assurent la vie cellulaire.',
                        'choices' => [
                            [
                                'choice_text' => 'Comprendre comment les molécules du vivant structurent et font fonctionner les cellules',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Étudier uniquement les roches',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Étudier uniquement les forces mécaniques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Étudier seulement la température extérieure',
                                'is_correct' => false,
                            ],
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
