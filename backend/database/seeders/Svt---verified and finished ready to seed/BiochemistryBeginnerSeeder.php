<?php

namespace Database\Seeders;

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
                        'question' => 'Qu’étudie la biochimie ?',
                        'explanation' => 'La biochimie étudie les molécules du vivant et les réactions chimiques qui s’y déroulent.',
                        'choices' => [
                            [
                                'choice_text' => 'La composition chimique des roches et des minéraux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les mouvements mécaniques des muscles et des organes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les réactions chimiques qui se déroulent dans les êtres vivants',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La structure anatomique des organes du corps humain',
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
                                'choice_text' => 'Le cholestérol',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le collagène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La vitamine A',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel élément est présent en grande quantité dans les molécules organiques du vivant ?',
                        'explanation' => 'Le carbone forme l’ossature de nombreuses molécules organiques, notamment les glucides, lipides, protéines et acides nucléiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Le calcium',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le sodium',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le fer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le carbone',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Le blanc d’œuf et la viande maigre sont surtout riches en quelle famille de biomolécules ?',
                        'explanation' => 'Ces aliments contiennent surtout des protéines, c’est-à-dire des chaînes d’acides aminés.',
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
                                'choice_text' => 'Les protéines',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les acides nucléiques',
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
                                'choice_text' => 'Les acides nucléiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les lipides',
                                'is_correct' => false,
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
                                'choice_text' => 'L’éthanol',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’oxygène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le glycérol',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que désigne le terme « macromolécule » ?',
                        'explanation' => 'On parle de macromolécule pour une molécule de grande taille, souvent construite par l’assemblage de petites unités.',
                        'choices' => [
                            [
                                'choice_text' => 'Une molécule très soluble dans l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une petite molécule organique simple',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une très grande molécule',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une molécule qui contient un métal',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Le beurre et l’huile d’olive appartiennent à quelle famille de biomolécules ?',
                        'explanation' => 'Les corps gras sont des lipides, des molécules peu solubles dans l’eau comme les triglycérides.',
                        'choices' => [
                            [
                                'choice_text' => 'Les glucides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les protéines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les nucléotides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les lipides',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert l’ATP dans une cellule ?',
                        'explanation' => 'L’ATP joue le rôle de monnaie d’énergie : sa dégradation libère de quoi alimenter transport, synthèse ou contraction.',
                        'choices' => [
                            [
                                'choice_text' => 'À fournir de l’énergie utilisable immédiatement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'À conserver l’information génétique de la cellule',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À former la membrane qui entoure la cellule',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À transporter l’oxygène jusqu’aux tissus',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle proposition décrit correctement une enzyme ?',
                        'explanation' => 'Une enzyme est le plus souvent une protéine qui accélère une réaction sans être consommée par celle-ci.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle fournit l’énergie de la réaction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle accélère certaines réactions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle est consommée à chaque réaction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle transforme les produits en substrats',
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
                                'choice_text' => 'L’amidon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le glucose',
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
                        'question' => 'Quel disaccharide est formé de glucose et de fructose ?',
                        'explanation' => 'Le saccharose résulte de l’association d’un glucose et d’un fructose.',
                        'choices' => [
                            [
                                'choice_text' => 'Le lactose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le maltose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le galactose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le saccharose',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle forme de stockage du glucose trouve-t-on principalement chez les animaux ?',
                        'explanation' => 'Les animaux stockent le glucose principalement sous forme de glycogène, notamment dans le foie et les muscles.',
                        'choices' => [
                            [
                                'choice_text' => 'Le glycogène',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’amidon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La cellulose',
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
                                'choice_text' => 'L’amidon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le maltose',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Le lactose, sucre du lait, est un disaccharide. Quels monosaccharides le composent ?',
                        'explanation' => 'Le lactose associe un glucose et un galactose, alors que le saccharose associe un glucose et un fructose.',
                        'choices' => [
                            [
                                'choice_text' => 'Un glucose et un fructose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Deux glucoses',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un fructose et un galactose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un glucose et un galactose',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qui distingue un monosaccharide d’un polysaccharide ?',
                        'explanation' => 'Le monosaccharide est une unité unique, le polysaccharide en assemble de nombreuses : amidon et cellulose en sont des exemples.',
                        'choices' => [
                            [
                                'choice_text' => 'Une seule unité de sucre contre deux unités liées',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un sucre d’origine animale contre un sucre végétal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une seule unité de sucre contre une longue chaîne d’unités',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un sucre soluble contre un sucre toxique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Les pommes de terre sont riches en amidon. Quel rôle joue cette molécule dans la plante ?',
                        'explanation' => 'L’amidon est la forme de réserve du glucose chez les végétaux ; on le trouve dans les tubercules et les graines.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle forme la paroi des cellules',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle sert de réserve d’énergie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle transporte l’eau dans la tige',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle isole le tubercule du froid',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel monosaccharide libère l’hydrolyse complète de l’amidon ?',
                        'explanation' => 'L’amidon n’est qu’un long enchaînement de molécules de glucose, que la digestion libère une à une.',
                        'choices' => [
                            [
                                'choice_text' => 'Le fructose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le galactose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le ribose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le glucose',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel test met en évidence l’amidon au laboratoire ?',
                        'explanation' => 'L’iode donne avec l’amidon une coloration bleu-noir caractéristique.',
                        'choices' => [
                            [
                                'choice_text' => 'La solution iodée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le réactif de Biuret',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La liqueur de Fehling',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le test de flamme',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'La carapace des crevettes et des crabes contient un polysaccharide solide. Lequel ?',
                        'explanation' => 'La chitine est un polysaccharide de structure, présent aussi dans la paroi des champignons.',
                        'choices' => [
                            [
                                'choice_text' => 'La cellulose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le glycogène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La chitine',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’amidon',
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
                        'question' => 'Quelle propriété caractérise la plupart des lipides ?',
                        'explanation' => 'Leur caractère hydrophobe explique que l’huile ne se mélange pas à l’eau.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils sont peu solubles dans l’eau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils sont très solubles dans l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils sont formés d’acides aminés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils portent l’information génétique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal d’un triglycéride dans l’organisme ?',
                        'explanation' => 'Les triglycérides constituent une importante réserve d’énergie à long terme.',
                        'choices' => [
                            [
                                'choice_text' => 'Transporter l’oxygène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Catalyser les réactions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Stocker de l’énergie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Porter l’information génétique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel lipide est un constituant majeur des membranes cellulaires ?',
                        'explanation' => 'Les phospholipides s’organisent en bicouche et constituent la base de nombreuses membranes biologiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Les triglycérides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les cires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les acides gras libres',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les phospholipides',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Placés dans l’eau, les phospholipides s’assemblent en bicouche. Quelle propriété l’explique ?',
                        'explanation' => 'Leur tête aime l’eau et leurs queues la fuient, ce qui les range en deux couches face à face.',
                        'choices' => [
                            [
                                'choice_text' => 'Une tête hydrophile et des queues hydrophobes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Leurs deux extrémités sont fortement hydrophiles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Leurs deux extrémités sont fortement hydrophobes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils sont formés de chaînes d’acides aminés',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel lipide joue un rôle important dans la fluidité des membranes animales ?',
                        'explanation' => 'Le cholestérol intervient dans la régulation de la fluidité et de la stabilité des membranes animales.',
                        'choices' => [
                            [
                                'choice_text' => 'Les triglycérides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les cires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le cholestérol',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le glycérol',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie « acide gras saturé » ?',
                        'explanation' => 'Saturé veut dire que la chaîne carbonée ne porte aucune double liaison C=C.',
                        'choices' => [
                            [
                                'choice_text' => 'Sa chaîne comporte plusieurs doubles liaisons',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Sa chaîne carbonée est dépourvue de double liaison',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Sa chaîne comporte une double liaison',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Sa chaîne contient un atome de soufre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'L’huile d’olive est riche en acides gras insaturés. Que contiennent ces acides gras ?',
                        'explanation' => 'Une double liaison carbone-carbone au moins : c’est ce qui rend la chaîne insaturée.',
                        'choices' => [
                            [
                                'choice_text' => 'Au moins un groupe phosphate',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Au moins un groupe amine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Au moins un noyau stéroïde',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Au moins une double liaison C=C',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'De quoi est formé un triglycéride ?',
                        'explanation' => 'Le préfixe tri l’indique : trois acides gras sont fixés sur un squelette de glycérol.',
                        'choices' => [
                            [
                                'choice_text' => 'Un glycérol et deux acides gras',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Trois glycérols et un acide gras',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un glycérol et trois acides gras',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un glycérol, deux acides gras et un phosphate',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Comment appelle-t-on une molécule qui possède une tête hydrophile et des queues hydrophobes ?',
                        'explanation' => 'Le mot amphiphile réunit les deux comportements : une partie attire l’eau, l’autre la repousse.',
                        'choices' => [
                            [
                                'choice_text' => 'Hydrophile',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Amphiphile',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Hydrophobe',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Amphotère',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle liaison relie un acide gras au glycérol dans un triglycéride ?',
                        'explanation' => 'Il s’agit d’une liaison ester, formée entre le groupe carboxyle de l’acide gras et un groupe hydroxyle du glycérol.',
                        'choices' => [
                            [
                                'choice_text' => 'La liaison ester',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La liaison peptidique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La liaison phosphodiester',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La liaison glycosidique',
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
                                'choice_text' => 'Le glucose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’acide gras',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’acide aminé',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel type de liaison relie deux acides aminés dans une protéine ?',
                        'explanation' => 'La liaison peptidique relie le groupe carboxyle d’un acide aminé au groupe amine d’un autre.',
                        'choices' => [
                            [
                                'choice_text' => 'La liaison phosphodiester',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La liaison peptidique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La liaison glycosidique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La liaison ester',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que désigne la structure primaire d’une protéine ?',
                        'explanation' => 'La structure primaire correspond à la séquence linéaire des acides aminés.',
                        'choices' => [
                            [
                                'choice_text' => 'Son repliement local en hélice',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La séquence des acides aminés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Sa forme globale en trois dimensions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’assemblage de plusieurs chaînes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle structure correspond à la forme globale tridimensionnelle d’une seule chaîne polypeptidique ?',
                        'explanation' => 'La structure tertiaire décrit le repliement tridimensionnel global d’une chaîne polypeptidique.',
                        'choices' => [
                            [
                                'choice_text' => 'La structure tertiaire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La structure primaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La structure secondaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La structure quaternaire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la dénaturation d’une protéine ?',
                        'explanation' => 'La dénaturation perturbe la structure spatiale d’une protéine et peut lui faire perdre sa fonction.',
                        'choices' => [
                            [
                                'choice_text' => 'Sa chaîne est coupée en acides aminés isolés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle est fabriquée à partir d’un ARN messager',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Sa structure tridimensionnelle est perturbée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle fixe une autre protéine à sa surface',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Le blanc d’un œuf devient blanc et ferme à la cuisson. Quel phénomène explique ce changement ?',
                        'explanation' => 'La chaleur défait le repliement des protéines du blanc ; elles s’agglomèrent et l’ensemble devient opaque.',
                        'choices' => [
                            [
                                'choice_text' => 'L’hydrolyse de l’amidon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La saponification des lipides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La fermentation des glucides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La dénaturation des protéines',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quels groupes fonctionnels caractérisent un acide aminé ?',
                        'explanation' => 'Chaque acide aminé porte une fonction amine et une fonction carboxyle ; seule sa chaîne latérale change.',
                        'choices' => [
                            [
                                'choice_text' => 'Un groupe amine et un groupe carboxyle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un groupe amine et un groupe phosphate',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un groupe aldéhyde et un groupe hydroxyle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un groupe carboxyle et un groupe ester',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une enzyme perd toute son activité après le remplacement d’un seul acide aminé dans sa séquence. Que montre cette observation ?',
                        'explanation' => 'Un seul acide aminé différent peut modifier le repliement de la protéine, donc sa fonction.',
                        'choices' => [
                            [
                                'choice_text' => 'Le repliement est identique quelle que soit la séquence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La fonction dépend de la taille de la chaîne, pas de sa séquence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La séquence détermine le repliement et donc la fonction',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le remplacement change le type de liaison entre les acides aminés',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle protéine transporte l’oxygène dans les globules rouges ?',
                        'explanation' => 'L’hémoglobine est une protéine spécialisée dans le transport de l’oxygène dans le sang.',
                        'choices' => [
                            [
                                'choice_text' => 'L’insuline',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’hémoglobine',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le collagène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La kératine',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Vingt acides aminés suffisent à fabriquer des milliers de protéines différentes. Qu’est-ce qui rend cela possible ?',
                        'explanation' => 'Le squelette est commun, mais la chaîne latérale varie ; c’est elle qui donne à chaque acide aminé ses propriétés.',
                        'choices' => [
                            [
                                'choice_text' => 'Chacun forme une liaison différente avec ses voisins',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Chacun porte un groupe carboxyle qui lui est propre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Chacun est fabriqué dans un organite différent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Chacun possède une chaîne latérale différente',
                                'is_correct' => true,
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
                                'choice_text' => 'Fournir l’énergie à la réaction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Accélérer une réaction',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Déplacer l’équilibre vers les produits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Se transformer en produit final',
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
                                'choice_text' => 'Le coenzyme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le substrat',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’inhibiteur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'L’amylase digère l’amidon mais ne touche pas aux protéines. Quelle propriété des enzymes cela illustre-t-il ?',
                        'explanation' => 'Chaque enzyme reconnaît un substrat précis grâce à la forme de son site actif.',
                        'choices' => [
                            [
                                'choice_text' => 'La spécificité de substrat',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La dénaturation par la chaleur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’inhibition par le produit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’énergie d’activation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une enzyme humaine est testée à 70 °C au lieu de 37 °C. Que devient son activité ?',
                        'explanation' => 'À 70 °C, la plupart des enzymes humaines perdent leur forme et donc leur activité.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle chute, car la protéine se dénature',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle augmente, car la chaleur accélère les réactions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle reste identique, car la température n’agit pas',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle s’arrête, car le substrat est détruit',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Hajar mesure l’activité d’une enzyme à pH 2, 7 et 12 ; son optimum est à pH 7. Que va-t-elle observer à pH 2 et à pH 12 ?',
                        'explanation' => 'Loin de son pH optimal, l’enzyme voit ses charges et son site actif se modifier, et son activité baisse.',
                        'choices' => [
                            [
                                'choice_text' => 'Une activité plus forte qu’à pH 7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La même activité qu’à pH 7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une activité doublée à chacun des deux pH',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une activité plus faible qu’à pH 7',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une même molécule d’enzyme transforme des milliers de substrats à la suite. Que cela montre-t-il ?',
                        'explanation' => 'L’enzyme est régénérée à la fin de chaque cycle, ce qui lui permet de servir à nouveau.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle est resynthétisée après chaque réaction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle reste liée au produit à la fin du cycle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ressort intacte de chaque cycle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle est détruite puis remplacée par le substrat',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle partie d’une enzyme se lie directement au substrat ?',
                        'explanation' => 'Le site actif est la région de l’enzyme qui reconnaît et lie le substrat pendant la réaction.',
                        'choices' => [
                            [
                                'choice_text' => 'Le site de régulation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le site actif de l’enzyme',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’extrémité de la chaîne',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le cœur hydrophobe de la protéine',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie « énergie d’activation » ?',
                        'explanation' => 'L’énergie d’activation est la barrière énergétique à franchir pour qu’une réaction puisse se produire.',
                        'choices' => [
                            [
                                'choice_text' => 'La barrière énergétique initiale à franchir',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La chaleur libérée par la réaction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’énergie contenue dans une molécule d’ATP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La différence d’énergie entre substrats et produits',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel effet une enzyme a-t-elle sur l’énergie d’activation ?',
                        'explanation' => 'Une enzyme fournit une voie réactionnelle dont l’énergie d’activation est plus faible.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle l’augmente',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle la laisse inchangée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle la diminue',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle l’annule',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Yassine ajoute de plus en plus de substrat à la même quantité d’enzyme : la vitesse monte, puis plafonne. Que cela signifie-t-il ?',
                        'explanation' => 'Quand les sites actifs sont presque tous occupés, ajouter du substrat n’accélère plus la réaction : l’enzyme est saturée.',
                        'choices' => [
                            [
                                'choice_text' => 'L’enzyme a été dénaturée par l’excès de substrat',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le substrat est devenu le facteur limitant',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’énergie d’activation a augmenté avec le substrat',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La plupart des sites actifs sont occupés',
                                'is_correct' => true,
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
                                'choice_text' => 'Le glucose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le triglycéride',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nucléotide',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel sucre trouve-t-on dans l’ADN ?',
                        'explanation' => 'L’ADN contient le désoxyribose, tandis que l’ARN contient le ribose.',
                        'choices' => [
                            [
                                'choice_text' => 'Le ribose',
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
                                'choice_text' => 'L’uracile',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La cytosine',
                                'is_correct' => false,
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
                        'question' => 'Un brin d’ADN porte la séquence A-T-G-C. Quelles bases lui font face sur le brin complémentaire, base par base ?',
                        'explanation' => 'A s’apparie à T et G à C : A-T-G-C a donc pour vis-à-vis T-A-C-G.',
                        'choices' => [
                            [
                                'choice_text' => 'T-A-G-C',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'U-A-C-G',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'T-A-C-G',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'C-G-T-A',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle général de l’ADN ?',
                        'explanation' => 'L’ADN contient une grande partie de l’information génétique utilisée par les cellules.',
                        'choices' => [
                            [
                                'choice_text' => 'Assembler les acides aminés en protéines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Stocker l’information génétique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Transporter l’information vers les ribosomes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Fournir l’énergie aux réactions cellulaires',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle de l’ARN messager ?',
                        'explanation' => 'L’ARNm est une copie d’un gène : il quitte le noyau et guide l’assemblage de la protéine au ribosome.',
                        'choices' => [
                            [
                                'choice_text' => 'Conserver l’information génétique à long terme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Apporter les acides aminés au ribosome',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Fournir l’énergie à la synthèse protéique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Porter l’information d’un gène vers le ribosome',
                                'is_correct' => true,
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
                                'choice_text' => 'La réplication',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La mutation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Comment appelle-t-on la synthèse d’une protéine à partir de l’ARN messager ?',
                        'explanation' => 'La traduction se déroule au niveau des ribosomes et permet d’assembler les acides aminés dans le bon ordre.',
                        'choices' => [
                            [
                                'choice_text' => 'La transcription',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La réplication',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La traduction',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La maturation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle structure cellulaire lit l’ARN messager pour assembler une protéine ?',
                        'explanation' => 'Les ribosomes lisent l’ARN messager et assemblent les acides aminés pour former une chaîne polypeptidique.',
                        'choices' => [
                            [
                                'choice_text' => 'Le lysosome',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’appareil de Golgi',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La mitochondrie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le ribosome',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qui change dans la protéine lorsqu’une mutation modifie un codon ?',
                        'explanation' => 'Un codon modifié peut faire insérer un autre acide aminé, ce qui change parfois le repliement et la fonction.',
                        'choices' => [
                            [
                                'choice_text' => 'Un acide aminé de sa séquence peut être remplacé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le sucre de sa chaîne est remplacé par un autre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle perd ses liaisons peptidiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Son ARN messager devient de l’ADN',
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
                        'explanation' => 'L’ATP transporte l’énergie des réactions qui en libèrent vers celles qui en consomment.',
                        'choices' => [
                            [
                                'choice_text' => 'Une molécule de réserve de glucose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une enzyme qui accélère les réactions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une molécule qui transporte l’énergie utilisable',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une vitamine nécessaire à la vision',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie métabolisme ?',
                        'explanation' => 'Le métabolisme regroupe l’ensemble des réactions chimiques qui se déroulent dans un organisme.',
                        'choices' => [
                            [
                                'choice_text' => 'L’ensemble des réactions chimiques de l’organisme',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les réactions de dégradation des aliments',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les réactions qui construisent les molécules',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les échanges gazeux entre le sang et l’air',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle molécule sert de carburant principal à la respiration cellulaire ?',
                        'explanation' => 'Le glucose est dégradé en pyruvate puis oxydé dans la mitochondrie pour produire un maximum d’ATP.',
                        'choices' => [
                            [
                                'choice_text' => 'Le collagène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le glucose',
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
                        ],
                    ],
                    [
                        'question' => 'Quelle voie commence la dégradation du glucose ?',
                        'explanation' => 'La glycolyse est une voie métabolique qui transforme le glucose en pyruvate dans le cytoplasme.',
                        'choices' => [
                            [
                                'choice_text' => 'Le cycle de Krebs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La néoglucogenèse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La glycolyse',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La lipogenèse',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Où se déroule la glycolyse ?',
                        'explanation' => 'La glycolyse se déroule dans le cytosol, donc dans la partie liquide du cytoplasme.',
                        'choices' => [
                            [
                                'choice_text' => 'Dans le noyau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Dans la mitochondrie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Dans le lysosome',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Dans le cytosol',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert la respiration cellulaire aérobie pour la cellule ?',
                        'explanation' => 'En présence d’oxygène, la cellule oxyde les nutriments pour récupérer leur énergie sous forme d’ATP.',
                        'choices' => [
                            [
                                'choice_text' => 'À produire de l’ATP à partir des nutriments',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'À fabriquer des protéines à partir de l’ARN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À copier l’ADN avant la division',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À fabriquer du glucose à partir du gaz carbonique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue l’oxygène dans la respiration aérobie ?',
                        'explanation' => 'L’oxygène agit comme accepteur final d’électrons dans la chaîne respiratoire mitochondriale.',
                        'choices' => [
                            [
                                'choice_text' => 'Source d’énergie directe pour la cellule',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Donneur d’électrons à la chaîne respiratoire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Accepteur final d’électrons',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Produit final de la glycolyse',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que devient l’ATP lorsqu’il fournit de l’énergie à la cellule ?',
                        'explanation' => 'L’hydrolyse de l’ATP libère l’énergie utilisable et laisse de l’ADP et du phosphate inorganique.',
                        'choices' => [
                            [
                                'choice_text' => 'Il est transformé en glucose et en pyruvate',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il est hydrolysé en ADP et phosphate',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il est polymérisé en glycogène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il est oxydé en gaz carbonique et en eau',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence simple existe entre anabolisme et catabolisme ?',
                        'explanation' => 'Le catabolisme casse les molécules et libère de l’énergie ; l’anabolisme les assemble et en consomme.',
                        'choices' => [
                            [
                                'choice_text' => 'Le catabolisme dégrade, l’anabolisme construit',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le catabolisme construit, l’anabolisme dégrade',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le catabolisme se déroule le jour, l’anabolisme la nuit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le catabolisme touche les glucides, l’anabolisme les lipides',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Après un repas, Omar stocke le glucose en excès sous forme de glycogène, puis de graisses. Quel est l’intérêt ?',
                        'explanation' => 'Glycogène et graisses sont des banques d’énergie : on y puise entre les repas ou pendant un effort.',
                        'choices' => [
                            [
                                'choice_text' => 'Faire baisser la température du corps',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer les protéines usées',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Produire davantage d’ADN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Garder de l’énergie en réserve pour plus tard',
                                'is_correct' => true,
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
                        'question' => 'Leila a lu que les vitamines ne fournissent pas d’énergie. À quoi servent-elles alors ?',
                        'explanation' => 'Elles agissent à petite dose, souvent comme cofacteurs d’enzymes, sans servir de carburant.',
                        'choices' => [
                            [
                                'choice_text' => 'Elles sont la principale source de calories',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles aident au fonctionnement des enzymes et des cellules',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elles forment l’essentiel des membranes cellulaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles codent l’information génétique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle vitamine est indispensable à une vision normale ?',
                        'explanation' => 'La vitamine A joue un rôle important dans la vision, notamment dans le fonctionnement de la rétine.',
                        'choices' => [
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
                            [
                                'choice_text' => 'Vitamine A',
                                'is_correct' => true,
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
                                'choice_text' => 'Vitamine B12',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel minéral est important pour l’hémoglobine ?',
                        'explanation' => 'Le fer est un élément essentiel de l’hémoglobine et contribue au transport de l’oxygène.',
                        'choices' => [
                            [
                                'choice_text' => 'L’iode',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le fer',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le calcium',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le sodium',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle de l’eau dans les cellules ?',
                        'explanation' => 'L’eau est un solvant majeur, participe à des réactions et permet le transport de nombreuses substances.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle fournit la majeure partie de l’énergie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle porte l’information génétique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle dissout les molécules et participe aux réactions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle constitue le squelette des protéines',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel terme désigne la stabilité des conditions internes de l’organisme, comme la température, le pH ou la glycémie ?',
                        'explanation' => 'L’homéostasie correspond au maintien de conditions internes stables malgré les changements du milieu.',
                        'choices' => [
                            [
                                'choice_text' => 'L’osmose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La diffusion',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’hydrolyse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’homéostasie',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qui justifie la régulation étroite du pH sanguin ?',
                        'explanation' => 'De nombreuses protéines et enzymes sont sensibles au pH. Un pH trop différent perturbe leur fonctionnement.',
                        'choices' => [
                            [
                                'choice_text' => 'Le sang doit rester neutre, à pH 7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les protéines et les enzymes y sont sensibles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les globules rouges ont besoin d’un milieu acide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le pH sert de source d’énergie à la cellule',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel système tampon limite les variations de pH du sang ?',
                        'explanation' => 'Le couple bicarbonate / acide carbonique est le principal tampon du sang : il absorbe l’excès d’acide ou de base.',
                        'choices' => [
                            [
                                'choice_text' => 'Le couple glucose / glycogène hépatique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le couple ATP / ADP du cytoplasme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le couple bicarbonate / acide carbonique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le couple NAD+ / NADH mitochondrial',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pour avoir des os solides, Yassine a besoin de calcium. Quelle vitamine favorise son absorption par l’intestin ?',
                        'explanation' => 'La vitamine D favorise l’absorption intestinale du calcium, ce qui permet de minéraliser les os.',
                        'choices' => [
                            [
                                'choice_text' => 'Vitamine A',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Vitamine C',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Vitamine B12',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Vitamine D',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que veut dire qu’un minéral est « essentiel » ?',
                        'explanation' => 'Un minéral essentiel doit venir de l’alimentation, car le corps ne sait pas le synthétiser.',
                        'choices' => [
                            [
                                'choice_text' => 'L’organisme en a besoin mais ne peut pas le fabriquer',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il est fabriqué par le foie à partir des glucides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il fournit la plus grande part de l’énergie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il est réservé au squelette et aux dents',
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
                        'explanation' => 'Le test de Biuret donne une coloration violette caractéristique en présence de liaisons peptidiques dans des protéines.',
                        'choices' => [
                            [
                                'choice_text' => 'Le test de Biuret',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La solution iodée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La liqueur de Fehling',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le test de flamme',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel test indique la présence d’un sucre réducteur comme le glucose après chauffage ?',
                        'explanation' => 'La liqueur de Fehling forme un précipité rouge brique à chaud en présence d’un sucre réducteur comme le glucose.',
                        'choices' => [
                            [
                                'choice_text' => 'Le réactif de Biuret',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La solution iodée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La liqueur de Fehling',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le bleu de bromothymol',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Hajar teste l’effet d’une enzyme sur un substrat. Quel est l’intérêt de préparer en parallèle un tube témoin sans enzyme ?',
                        'explanation' => 'Le témoin permet de comparer : si le changement apparaît aussi sans enzyme, elle n’en est pas la cause.',
                        'choices' => [
                            [
                                'choice_text' => 'Accélérer la réaction dans le tube test',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Vérifier que le changement vient bien de l’enzyme',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Augmenter la quantité de produit obtenue',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Vérifier la pureté de l’enzyme utilisée',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Imane doit mesurer l’absorption de lumière d’une solution colorée à 540 nm. Quel appareil utiliser ?',
                        'explanation' => 'Un spectrophotomètre permet de mesurer l’absorbance d’une solution à une longueur d’onde choisie.',
                        'choices' => [
                            [
                                'choice_text' => 'Un pH-mètre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un conductimètre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une centrifugeuse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un spectrophotomètre',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert une courbe d’étalonnage ?',
                        'explanation' => 'On mesure des solutions de concentration connue pour tracer la droite qui sert ensuite à lire une concentration inconnue.',
                        'choices' => [
                            [
                                'choice_text' => 'À corriger la température de l’appareil',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À vérifier la pureté de l’eau distillée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À relier la mesure à des concentrations connues',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'À compter les cellules de l’échantillon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Les standards à 20 et 40 mg/L donnent des absorbances de 0,30 et 0,60 ; Nadia mesure 0,45 pour son échantillon. En supposant la relation linéaire, quelle est sa concentration ?',
                        'explanation' => '0,45 se trouve au milieu de 0,30 et 0,60, donc la concentration est au milieu de 20 et 40 mg/L, soit 30 mg/L.',
                        'choices' => [
                            [
                                'choice_text' => '30 mg/L',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '45 mg/L',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '25 mg/L',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '40 mg/L',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'L’absorbance d’un échantillon dépasse celle du standard le plus concentré. Que faire ?',
                        'explanation' => 'Au-delà de la gamme étalonnée, la mesure n’est plus fiable ; on dilue pour revenir dans la gamme et on corrige par le facteur de dilution.',
                        'choices' => [
                            [
                                'choice_text' => 'Prolonger la droite au-delà des standards',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter la longueur d’onde de mesure',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Chauffer l’échantillon avant la mesure',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le diluer, puis refaire la mesure',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Avant de lancer une série de dosages, Karim prépare son spectrophotomètre. Que doit-il faire en premier ?',
                        'explanation' => 'Le blanc contient tout sauf la molécule dosée ; il sert à fixer l’absorbance zéro de l’appareil.',
                        'choices' => [
                            [
                                'choice_text' => 'Chauffer l’appareil à 60 °C',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Mesurer l’échantillon le plus concentré',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Régler le zéro avec un blanc',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Changer la longueur d’onde à chaque mesure',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Zineb mesure trois fois la même concentration et obtient 12,1 ; 11,8 et 12,6 mg/L. Que fait-elle de ces trois valeurs ?',
                        'explanation' => 'La moyenne vaut (12,1 + 11,8 + 12,6) ÷ 3, soit environ 12,2 mg/L ; trois essais permettent de juger la dispersion.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle calcule la moyenne, soit environ 12,2 mg/L',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle retient la valeur la plus élevée, 12,6 mg/L',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle additionne les trois valeurs, soit 36,5 mg/L',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle retient la valeur la plus faible, 11,8 mg/L',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux dosages successifs de Meryem donnent 8,02 et 8,04 mg/L, alors que la concentration réelle de l’échantillon est de 9,50 mg/L. Que peut-on dire ?',
                        'explanation' => 'Les deux valeurs sont proches l’une de l’autre, donc répétables, mais elles s’écartent de 9,50 mg/L : il reste une erreur systématique.',
                        'choices' => [
                            [
                                'choice_text' => 'Les mesures sont exactes mais peu répétables',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les mesures sont répétables mais inexactes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les mesures sont à la fois répétables et exactes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les mesures sont peu répétables et inexactes',
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
                        'question' => 'Quelle association entre une molécule et sa famille est correcte ?',
                        'explanation' => 'Le glycogène est un polysaccharide, donc un glucide ; les trois autres associations croisent les familles.',
                        'choices' => [
                            [
                                'choice_text' => 'Cholestérol — protéine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Hémoglobine — lipide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Amidon — acide nucléique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Glycogène — glucide',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un repas associe du poisson, du riz et de l’huile d’olive. Quel nutriment domine dans chacun, dans cet ordre ?',
                        'explanation' => 'Le poisson apporte surtout des protéines, le riz de l’amidon (un glucide) et l’huile des lipides.',
                        'choices' => [
                            [
                                'choice_text' => 'Protéines, glucides, lipides',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Glucides, protéines, lipides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Lipides, protéines, glucides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Protéines, lipides, glucides',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'La pepsine travaille dans l’estomac à pH 2, alors que l’amylase salivaire préfère un pH proche de 7. Que montre ce contraste ?',
                        'explanation' => 'Chaque enzyme a son pH optimal, lié à la forme de son site actif.',
                        'choices' => [
                            [
                                'choice_text' => 'Les enzymes sont dénaturées à pH 7',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Chaque enzyme a son propre pH optimal',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le pH agit sur le substrat, pas sur l’enzyme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un pH acide fournit l’énergie d’activation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle molécule conserve l’information génétique à long terme, et laquelle la transmet ensuite au ribosome ?',
                        'explanation' => 'L’ADN garde l’information dans le noyau ; l’ARN messager en porte une copie vers le ribosome.',
                        'choices' => [
                            [
                                'choice_text' => 'ARN messager puis ADN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ADN puis ARN de transfert',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ADN puis ARN messager',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ATP puis ARN messager',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Entre deux repas, quel composé le foie de Karim mobilise-t-il en premier pour maintenir sa glycémie ?',
                        'explanation' => 'Le foie libère du glucose à partir de son glycogène avant de puiser dans les graisses.',
                        'choices' => [
                            [
                                'choice_text' => 'L’amidon alimentaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les triglycérides du tissu adipeux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les protéines musculaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le glycogène hépatique',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une cellule a besoin d’énergie pour transporter activement des ions. Quelle molécule fournit directement cette énergie ?',
                        'explanation' => 'L’ATP est la monnaie d’énergie immédiate : sa transformation en ADP et phosphate alimente la pompe qui déplace les ions.',
                        'choices' => [
                            [
                                'choice_text' => 'Le glucose sanguin',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La molécule d’ATP',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le glycogène musculaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les triglycérides',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Après une heure à 90 °C, une enzyme ne retrouve pas son activité quand on la ramène à 37 °C. Que s’est-il passé ?',
                        'explanation' => 'Une chaleur aussi forte défait le repliement de la protéine ; revenir à 37 °C ne suffit pas à le restaurer.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle a été consommée comme un réactif',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Son substrat s’est épuisé pendant le chauffage',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Sa structure a été dénaturée de façon durable',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le chauffage a modifié son pH optimal',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un résultat expérimental varie légèrement d’un essai à l’autre. Quelle démarche est la plus appropriée ?',
                        'explanation' => 'Répéter l’essai permet de distinguer la dispersion normale d’un véritable effet biologique.',
                        'choices' => [
                            [
                                'choice_text' => 'Retenir la valeur la plus élevée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Répéter l’essai et comparer les valeurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Écarter les valeurs gênantes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ignorer le tube témoin',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé relie correctement transcription et traduction ?',
                        'explanation' => 'La transcription copie un gène en ARN, puis la traduction lit cet ARN pour assembler la protéine.',
                        'choices' => [
                            [
                                'choice_text' => 'ADN vers ARN, puis ARN vers protéine',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ARN vers ADN, puis ADN vers protéine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Protéine vers ARN, puis ARN vers ADN',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ADN vers protéine, puis protéine vers ARN',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est le point commun entre la cellulose, l’amidon et le glycogène ?',
                        'explanation' => 'Ces trois polysaccharides sont construits à partir de molécules de glucose, assemblées différemment.',
                        'choices' => [
                            [
                                'choice_text' => 'Ce sont des polymères d’acides aminés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ce sont des polymères de nucléotides',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ce sont des réserves d’énergie animales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ce sont des polymères de glucose',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex] ?? ['duration' => 10, 'passing_score' => 80];

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

            foreach ($quizData['questions'] as $questionIndex => $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $questionIndex + 1,
                    ],
                    [
                        'question' => $questionData['question'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'] ?? null,
                    ]
                );

                $question->choices()->delete();

                foreach ($questionData['choices'] as $choiceIndex => $choice) {
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