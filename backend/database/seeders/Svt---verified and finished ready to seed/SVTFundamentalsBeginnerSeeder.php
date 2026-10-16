<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SVTFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'svt-fundamentals')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 20, 'passing_score' => 55],
            2 => ['duration' => 15, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 65],
            5 => ['duration' => 15, 'passing_score' => 60],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65]
        ];

        $quizzes = [
            [
                'title' => 'Introduction aux sciences de la vie et de la Terre',
                'description' => 'Découvrir les caractéristiques du vivant, les niveaux d’organisation et les bases du raisonnement scientifique à partir d’observations simples.',
                'questions' => [
                    [
                        'question' => 'Une classe constate que des graines de haricot humides germent alors que des graines gardées au sec restent intactes. Quelle démarche teste correctement le rôle de l’eau ?',
                        'choices' => [
                            ['choice_text' => 'Comparer des graines de couleurs différentes, avec la même quantité d’eau', 'is_correct' => false],
                            ['choice_text' => 'Comparer des graines avec et sans eau, le reste étant identique', 'is_correct' => true],
                            ['choice_text' => 'Donner à chaque lot une dose d’engrais différente', 'is_correct' => false],
                            ['choice_text' => 'Faire varier en même temps l’eau, la lumière et la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand un seul facteur change, l’eau, on peut lui attribuer la différence de germination. Si plusieurs facteurs varient ensemble, la conclusion devient incertaine.',
                    ],
                    [
                        'question' => 'Quelle molécule porte l’information génétique chez tous les êtres vivants ?',
                        'choices' => [
                            ['choice_text' => 'La chlorophylle', 'is_correct' => false],
                            ['choice_text' => 'Le glucose', 'is_correct' => false],
                            ['choice_text' => 'L’ATP', 'is_correct' => false],
                            ['choice_text' => 'L’ADN', 'is_correct' => true],
                        ],
                        'explanation' => 'L’ADN contient l’information héréditaire de la cellule ; chez les bactéries, il flotte dans le cytoplasme, sans noyau.',
                    ],
                    [
                        'question' => 'Une coupe au microscope montre de nombreuses cellules semblables regroupées et assurant ensemble une même fonction. À quel niveau d’organisation correspond cette description ?',
                        'choices' => [
                            ['choice_text' => 'Un tissu', 'is_correct' => true],
                            ['choice_text' => 'Un organisme', 'is_correct' => false],
                            ['choice_text' => 'Un organe', 'is_correct' => false],
                            ['choice_text' => 'Une molécule', 'is_correct' => false],
                        ],
                        'explanation' => 'Un tissu réunit des cellules semblables qui assurent ensemble une même fonction. Plusieurs tissus forment ensuite un organe.',
                    ],
                    [
                        'question' => 'Un élève écrit « l’eau est bien chaude », un autre « l’eau est à 38 °C ». Quel est l’intérêt de la seconde note ?',
                        'choices' => [
                            ['choice_text' => 'Elle prouve que l’hypothèse de départ est juste', 'is_correct' => false],
                            ['choice_text' => 'Elle dispense de refaire l’expérience avec un autre thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Elle est chiffrée, donc comparable d’une mesure à l’autre', 'is_correct' => true],
                            ['choice_text' => 'Elle reste valable même si le thermomètre est mal réglé', 'is_correct' => false],
                        ],
                        'explanation' => 'Une valeur chiffrée peut être comparée, tracée sur un graphique et vérifiée par quelqu’un d’autre. Un adjectif comme « chaud » varie d’une personne à l’autre.',
                    ],
                    [
                        'question' => 'Un chercheur étudie l’effet de la quantité de lumière sur la production d’oxygène d’une plante. Dans cette expérience, la quantité de lumière est la…',
                        'choices' => [
                            ['choice_text' => 'variable dépendante', 'is_correct' => false],
                            ['choice_text' => 'conclusion', 'is_correct' => false],
                            ['choice_text' => 'variable indépendante', 'is_correct' => true],
                            ['choice_text' => 'variable témoin', 'is_correct' => false],
                        ],
                        'explanation' => 'La variable indépendante est celle que le chercheur fait varier volontairement : ici, la quantité de lumière.',
                    ],
                    [
                        'question' => 'Pour tester un engrais, Karim arrose dix plants avec et dix plants sans engrais. Le lot sans engrais est le groupe témoin. À quoi sert-il ?',
                        'choices' => [
                            ['choice_text' => 'À servir de référence pour mesurer l’effet de l’engrais', 'is_correct' => true],
                            ['choice_text' => 'À vérifier que les plants poussent à la même vitesse', 'is_correct' => false],
                            ['choice_text' => 'À remplacer les mesures faites sur le lot traité', 'is_correct' => false],
                            ['choice_text' => 'À confirmer l’hypothèse quel que soit le résultat', 'is_correct' => false],
                        ],
                        'explanation' => 'Le groupe témoin montre ce qui se passe sans le facteur étudié. Sa comparaison avec le lot traité isole l’effet de l’engrais.',
                    ],
                    [
                        'question' => 'Un résultat expérimental ne correspond pas à l’hypothèse de départ. Quelle réaction est la plus scientifique ?',
                        'choices' => [
                            ['choice_text' => 'Retirer ce résultat gênant et conserver les mesures conformes', 'is_correct' => false],
                            ['choice_text' => 'Ajuster les données pour retrouver la prédiction', 'is_correct' => false],
                            ['choice_text' => 'Conclure que l’expérience ne sert à rien', 'is_correct' => false],
                            ['choice_text' => 'Examiner les données et la méthode, puis refaire le test', 'is_correct' => true],
                        ],
                        'explanation' => 'Un résultat inattendu peut révéler une erreur, une limite du protocole ou une hypothèse à revoir. Il faut l’analyser, pas le cacher.',
                    ],
                    [
                        'question' => 'Quel ordre va d’un niveau d’organisation biologique plus petit vers un niveau plus grand ?',
                        'choices' => [
                            ['choice_text' => 'Organe → cellule → tissu', 'is_correct' => false],
                            ['choice_text' => 'Cellule → tissu → organe', 'is_correct' => true],
                            ['choice_text' => 'Tissu → molécule → organe', 'is_correct' => false],
                            ['choice_text' => 'Organisme → organe → cellule', 'is_correct' => false],
                        ],
                        'explanation' => 'La cellule est l’unité de base du vivant ; des cellules forment des tissus, et plusieurs tissus s’organisent en organes.',
                    ],
                    [
                        'question' => 'Un élève affirme : « La plante a grandi davantage parce que je lui ai parlé. » Comment faut-il considérer cette affirmation au départ ?',
                        'choices' => [
                            ['choice_text' => 'Comme une loi scientifique définitive', 'is_correct' => false],
                            ['choice_text' => 'Comme une mesure directe', 'is_correct' => false],
                            ['choice_text' => 'Comme un fait établi', 'is_correct' => false],
                            ['choice_text' => 'Comme une hypothèse qui doit être testée', 'is_correct' => true],
                        ],
                        'explanation' => 'Une hypothèse est une explication proposée, que l’on confronte à des observations ou à une expérience.',
                    ],
                    [
                        'question' => 'Dans un terrarium fermé vivent des plantes et des insectes, sur un sol humide. Quelle idée décrit le mieux ce terrarium vu comme un système ?',
                        'choices' => [
                            ['choice_text' => 'Ses éléments interagissent et s’influencent mutuellement', 'is_correct' => true],
                            ['choice_text' => 'Les plantes comptent plus que le reste, car elles sont vivantes', 'is_correct' => false],
                            ['choice_text' => 'Chaque élément fonctionne séparément des autres', 'is_correct' => false],
                            ['choice_text' => 'Un système fermé n’évolue pas dans le temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un système, plantes, insectes, eau, air et sol s’influencent mutuellement. Retirer les insectes, par exemple, change ce que reçoivent les plantes.',
                    ],
                ],
            ],
            [
                'title' => 'La cellule et son organisation',
                'description' => 'Identifier les principales structures cellulaires, distinguer cellules animales et végétales et relier chaque structure à sa fonction.',
                'questions' => [
                    [
                        'question' => 'Quelle structure forme une barrière sélective qui contrôle les échanges entre la cellule et son milieu ?',
                        'choices' => [
                            ['choice_text' => 'Le noyau', 'is_correct' => false],
                            ['choice_text' => 'Le ribosome', 'is_correct' => false],
                            ['choice_text' => 'La membrane cellulaire', 'is_correct' => true],
                            ['choice_text' => 'Le cytoplasme', 'is_correct' => false],
                        ],
                        'explanation' => 'La membrane cellulaire délimite la cellule et trie ce qui entre et ce qui sort.',
                    ],
                    [
                        'question' => 'Une cellule végétale observée au microscope possède une couche externe rigide qui lui donne du soutien. De quelle structure s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'La paroi cellulaire', 'is_correct' => true],
                            ['choice_text' => 'La membrane cellulaire', 'is_correct' => false],
                            ['choice_text' => 'La mitochondrie', 'is_correct' => false],
                            ['choice_text' => 'Le noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'La paroi cellulaire entoure la membrane des cellules végétales et leur donne du soutien.',
                    ],
                    [
                        'question' => 'Un microscope a un oculaire 10× et un objectif 40×. Quel est son grossissement total ?',
                        'choices' => [
                            ['choice_text' => '50×', 'is_correct' => false],
                            ['choice_text' => '100×', 'is_correct' => false],
                            ['choice_text' => '400×', 'is_correct' => true],
                            ['choice_text' => '4 000×', 'is_correct' => false],
                        ],
                        'explanation' => 'Le grossissement total est le produit des deux : 10 × 40 = 400×. Les additionner donnerait 50×, une erreur fréquente.',
                    ],
                    [
                        'question' => 'Sur une photo au microscope d’une cellule végétale, une grande poche remplie de liquide repousse le noyau vers le bord. De quoi s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'Du chloroplaste', 'is_correct' => false],
                            ['choice_text' => 'De la vacuole', 'is_correct' => true],
                            ['choice_text' => 'De la mitochondrie', 'is_correct' => false],
                            ['choice_text' => 'D’un grain d’amidon', 'is_correct' => false],
                        ],
                        'explanation' => 'La vacuole stocke de l’eau et des substances dissoutes ; elle est très développée dans les cellules végétales.',
                    ],
                    [
                        'question' => 'Une cellule nécessite beaucoup d’énergie pour fonctionner. Quel organite est particulièrement important pour fournir de l’énergie utilisable ?',
                        'choices' => [
                            ['choice_text' => 'La mitochondrie', 'is_correct' => true],
                            ['choice_text' => 'Le chloroplaste', 'is_correct' => false],
                            ['choice_text' => 'La vacuole', 'is_correct' => false],
                            ['choice_text' => 'La paroi cellulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mitochondries réalisent la respiration cellulaire et produisent l’ATP, énergie directement utilisable par la cellule.',
                    ],
                    [
                        'question' => 'Au laboratoire, on retire le noyau d’une cellule animale : elle cesse peu à peu de fabriquer ses protéines. Quel rôle du noyau cela illustre-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Il fabrique l’essentiel de l’énergie de la cellule', 'is_correct' => false],
                            ['choice_text' => 'Il filtre ce qui entre dans la cellule', 'is_correct' => false],
                            ['choice_text' => 'Il stocke l’eau et les substances dissoutes', 'is_correct' => false],
                            ['choice_text' => 'Il contient l’ADN, qui commande la fabrication des protéines', 'is_correct' => true],
                        ],
                        'explanation' => 'L’ADN du noyau porte les instructions pour fabriquer les protéines. Sans lui, la cellule ne peut plus les renouveler.',
                    ],
                    [
                        'question' => 'Une cellule végétale placée dans une solution très salée perd de l’eau et son contenu cellulaire se rétracte. Quel phénomène explique cette observation ?',
                        'choices' => [
                            ['choice_text' => 'La turgescence', 'is_correct' => false],
                            ['choice_text' => 'L’osmose', 'is_correct' => true],
                            ['choice_text' => 'La diffusion des gaz', 'is_correct' => false],
                            ['choice_text' => 'La respiration', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau traverse la membrane vers la solution la plus concentrée en sel : c’est l’osmose, qui vide la cellule et rétracte son contenu.',
                    ],
                    [
                        'question' => 'Au microscope, les cellules d’un bulbe d’oignon n’ont pas de chloroplastes, alors que celles d’une feuille d’élodée en possèdent. Quelle explication convient ?',
                        'choices' => [
                            ['choice_text' => 'Les cellules du bulbe ne sont pas des cellules végétales', 'is_correct' => false],
                            ['choice_text' => 'L’observation au microscope détruit les chloroplastes du bulbe', 'is_correct' => false],
                            ['choice_text' => 'Les chloroplastes sont réservés aux plantes aquatiques', 'is_correct' => false],
                            ['choice_text' => 'Le bulbe vit dans le sol, sans lumière : pas de photosynthèse', 'is_correct' => true],
                        ],
                        'explanation' => 'Sans lumière, pas de photosynthèse : le bulbe enterré n’a pas besoin de chloroplastes, contrairement à la feuille d’élodée.',
                    ],
                    [
                        'question' => 'Quel énoncé compare correctement les cellules procaryotes et eucaryotes ?',
                        'choices' => [
                            ['choice_text' => 'Les procaryotes ont un noyau, les eucaryotes n’en ont pas', 'is_correct' => false],
                            ['choice_text' => 'Les procaryotes ont de l’ADN, sans noyau limité par une membrane', 'is_correct' => true],
                            ['choice_text' => 'Les eucaryotes n’ont pas d’ADN, contrairement aux cellules procaryotes', 'is_correct' => false],
                            ['choice_text' => 'Les eucaryotes n’ont pas de membrane plasmique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bactérie possède de l’ADN, mais celui-ci n’est pas enfermé dans un noyau. Les cellules eucaryotes ont un véritable noyau.',
                    ],
                    [
                        'question' => 'Une plante flétrit pendant une journée chaude puis retrouve sa rigidité après avoir reçu de l’eau. Quelle explication relie le mieux la structure cellulaire à cette observation ?',
                        'choices' => [
                            ['choice_text' => 'L’eau relance la photosynthèse, ce qui durcit les feuilles rapidement', 'is_correct' => false],
                            ['choice_text' => 'L’eau fait pousser de nouvelles cellules en quelques minutes', 'is_correct' => false],
                            ['choice_text' => 'L’eau restaure la pression interne des cellules (turgescence)', 'is_correct' => true],
                            ['choice_text' => 'L’eau épaissit la paroi des cellules en quelques minutes', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand les vacuoles se remplissent, les cellules gonflent et appuient sur leur paroi : c’est la turgescence, qui redresse les tissus.',
                    ],
                ],
            ],
            [
                'title' => 'Les grandes molécules du vivant',
                'description' => 'Reconnaître les glucides, lipides, protéines et acides nucléiques, comprendre leurs rôles essentiels et relier quelques aliments à leurs constituants.',
                'questions' => [
                    [
                        'question' => 'Quelle famille de molécules comprend notamment le glucose, utilisé par les cellules comme source d’énergie ?',
                        'choices' => [
                            ['choice_text' => 'Les lipides', 'is_correct' => false],
                            ['choice_text' => 'Les protéines', 'is_correct' => false],
                            ['choice_text' => 'Les acides nucléiques', 'is_correct' => false],
                            ['choice_text' => 'Les glucides', 'is_correct' => true],
                        ],
                        'explanation' => 'Le glucose est un glucide, que les cellules dégradent lors de la respiration cellulaire pour libérer de l’énergie.',
                    ],
                    [
                        'question' => 'Quel constituant est surtout associé au stockage d’énergie à long terme et à la composition des membranes ?',
                        'choices' => [
                            ['choice_text' => 'L’ADN', 'is_correct' => false],
                            ['choice_text' => 'Les lipides', 'is_correct' => true],
                            ['choice_text' => 'Les vitamines', 'is_correct' => false],
                            ['choice_text' => 'Les sels minéraux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lipides constituent une réserve d’énergie durable, et les phospholipides forment la trame des membranes.',
                    ],
                    [
                        'question' => 'Les protéines sont constituées principalement de petites unités appelées…',
                        'choices' => [
                            ['choice_text' => 'Acides gras', 'is_correct' => false],
                            ['choice_text' => 'Nucléotides', 'is_correct' => false],
                            ['choice_text' => 'Acides aminés', 'is_correct' => true],
                            ['choice_text' => 'Glucides simples', 'is_correct' => false],
                        ],
                        'explanation' => 'Les acides aminés s’enchaînent pour former les protéines.',
                    ],
                    [
                        'question' => 'Quel aliment est particulièrement riche en protéines ?',
                        'choices' => [
                            ['choice_text' => 'Les lentilles', 'is_correct' => true],
                            ['choice_text' => 'L’huile d’olive', 'is_correct' => false],
                            ['choice_text' => 'Le sucre de table', 'is_correct' => false],
                            ['choice_text' => 'Le miel', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lentilles apportent beaucoup de protéines végétales. L’huile est surtout faite de lipides, le sucre et le miel de glucides.',
                    ],
                    [
                        'question' => 'Un blanc d’œuf, liquide et transparent, devient blanc et ferme quand on le chauffe au-delà de 70 °C. Que se passe-t-il pour ses protéines ?',
                        'choices' => [
                            ['choice_text' => 'Elles se transforment en glucose', 'is_correct' => false],
                            ['choice_text' => 'Elles libèrent leur azote sous forme de gaz', 'is_correct' => false],
                            ['choice_text' => 'Elles fusionnent avec les lipides de l’œuf', 'is_correct' => false],
                            ['choice_text' => 'Leur forme se modifie, ce qui change leurs propriétés', 'is_correct' => true],
                        ],
                        'explanation' => 'La chaleur déforme les protéines, qui perdent leur structure d’origine (dénaturation) et s’agglomèrent : le blanc d’œuf se solidifie.',
                    ],
                    [
                        'question' => 'Un morceau de pain longuement mâché devient légèrement sucré. Quelle explication est la plus plausible ?',
                        'choices' => [
                            ['choice_text' => 'La salive contient du sucre qui se mélange au pain pendant la mastication', 'is_correct' => false],
                            ['choice_text' => 'L’amidon est en partie dégradé en sucres plus simples par la salive', 'is_correct' => true],
                            ['choice_text' => 'Les lipides du pain se changent en glucides', 'is_correct' => false],
                            ['choice_text' => 'La chaleur de la bouche caramélise le pain', 'is_correct' => false],
                        ],
                        'explanation' => 'La salive contient de l’amylase, une enzyme qui coupe l’amidon en sucres plus petits, d’où ce goût sucré.',
                    ],
                    [
                        'question' => 'Chez l’animal, l’excès de glucose est mis en réserve dans le foie et les muscles sous forme de :',
                        'choices' => [
                            ['choice_text' => 'glycogène', 'is_correct' => true],
                            ['choice_text' => 'amidon', 'is_correct' => false],
                            ['choice_text' => 'cellulose', 'is_correct' => false],
                            ['choice_text' => 'collagène', 'is_correct' => false],
                        ],
                        'explanation' => 'Le glycogène est la réserve de glucides des animaux, comme l’amidon l’est pour les plantes.',
                    ],
                    [
                        'question' => 'L’amylase de la salive est une enzyme. À quelle famille de molécules appartient-elle ?',
                        'choices' => [
                            ['choice_text' => 'Les protéines', 'is_correct' => true],
                            ['choice_text' => 'Les lipides', 'is_correct' => false],
                            ['choice_text' => 'Les glucides', 'is_correct' => false],
                            ['choice_text' => 'Les acides nucléiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les enzymes sont des protéines : leur forme précise leur permet de transformer une molécule particulière, comme l’amidon pour l’amylase.',
                    ],
                    [
                        'question' => 'Une ration alimentaire apporte 2 000 kilocalories, dont 500 provenant des lipides. Quelle part de l’énergie vient des lipides ?',
                        'choices' => [
                            ['choice_text' => '10 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '25 %', 'is_correct' => true],
                            ['choice_text' => '40 %', 'is_correct' => false],
                        ],
                        'explanation' => '500 ÷ 2 000 = 0,25, soit 25 % de l’énergie.',
                    ],
                    [
                        'question' => 'Un biscuit de 50 g contient 20 g de glucides, 10 g de lipides et 5 g de protéines. Les glucides et les protéines apportent 4 kcal par gramme, les lipides 9 kcal par gramme. Quelle énergie fournit-il ?',
                        'choices' => [
                            ['choice_text' => '100 kcal', 'is_correct' => false],
                            ['choice_text' => '140 kcal', 'is_correct' => false],
                            ['choice_text' => '170 kcal', 'is_correct' => false],
                            ['choice_text' => '190 kcal', 'is_correct' => true],
                        ],
                        'explanation' => '20 × 4 + 5 × 4 + 10 × 9 = 80 + 20 + 90 = 190 kcal. Les lipides y contribuent plus que les glucides, malgré une masse deux fois plus faible.',
                    ],
                ],
            ],
            [
                'title' => 'Énergie, photosynthèse et respiration',
                'description' => 'Comprendre comment les organismes obtiennent et utilisent l’énergie, et distinguer les grands principes de la photosynthèse et de la respiration cellulaire.',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle de la photosynthèse chez une plante verte ?',
                        'choices' => [
                            ['choice_text' => 'Convertir l’énergie lumineuse en énergie chimique stockée dans le glucose', 'is_correct' => true],
                            ['choice_text' => 'Libérer l’énergie du glucose pour alimenter le fonctionnement de la cellule', 'is_correct' => false],
                            ['choice_text' => 'Produire de la chaleur à partir de l’eau et du CO₂', 'is_correct' => false],
                            ['choice_text' => 'Absorber les minéraux du sol pour fabriquer des protéines', 'is_correct' => false],
                        ],
                        'explanation' => 'La plante capte la lumière et fabrique du glucose à partir de CO₂ et d’eau. La libération d’énergie à partir du glucose relève de la respiration.',
                    ],
                    [
                        'question' => 'Quel gaz est absorbé par une plante lors de la photosynthèse ?',
                        'choices' => [
                            ['choice_text' => 'Le dioxygène', 'is_correct' => false],
                            ['choice_text' => 'L’azote', 'is_correct' => false],
                            ['choice_text' => 'Le dioxyde de carbone', 'is_correct' => true],
                            ['choice_text' => 'L’hydrogène', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dioxyde de carbone est une matière première de la photosynthèse ; la plante rejette en retour du dioxygène.',
                    ],
                    [
                        'question' => 'Dans quelle structure cellulaire des végétaux se déroule principalement la photosynthèse ?',
                        'choices' => [
                            ['choice_text' => 'Les mitochondries', 'is_correct' => false],
                            ['choice_text' => 'Les chloroplastes', 'is_correct' => true],
                            ['choice_text' => 'Les ribosomes', 'is_correct' => false],
                            ['choice_text' => 'Le noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les chloroplastes contiennent la chlorophylle, qui capte la lumière : c’est là que se déroule l’essentiel de la photosynthèse.',
                    ],
                    [
                        'question' => 'Le glucose d’un repas n’est pas utilisable tel quel par les cellules. Que lui fait la respiration cellulaire ?',
                        'choices' => [
                            ['choice_text' => 'Elle le transforme en protéines pour réparer les tissus de l’organisme', 'is_correct' => false],
                            ['choice_text' => 'Elle le fabrique à partir du CO₂ et de l’eau', 'is_correct' => false],
                            ['choice_text' => 'Elle le stocke tel quel dans la membrane de la cellule', 'is_correct' => false],
                            ['choice_text' => 'Elle en libère l’énergie sous forme d’ATP, utilisable par la cellule', 'is_correct' => true],
                        ],
                        'explanation' => 'La respiration cellulaire dégrade le glucose avec du dioxygène et libère de l’énergie sous forme d’ATP, ainsi que du CO₂ et de l’eau.',
                    ],
                    [
                        'question' => 'Sur une feuille panachée exposée à la lumière, l’eau iodée, qui colore l’amidon en bleu-noir, ne colore que les zones vertes. Que montre cette expérience ?',
                        'choices' => [
                            ['choice_text' => 'Les zones blanches ont fabriqué plus d’amidon que les zones vertes de la même feuille', 'is_correct' => false],
                            ['choice_text' => 'Les zones vertes, riches en chlorophylle, ont fabriqué de l’amidon', 'is_correct' => true],
                            ['choice_text' => 'L’amidon vient directement du sol', 'is_correct' => false],
                            ['choice_text' => 'La lumière détruit l’amidon des zones vertes', 'is_correct' => false],
                        ],
                        'explanation' => 'Là où il y a de la chlorophylle, la photosynthèse produit du glucose, mis en réserve sous forme d’amidon. Les zones blanches n’en fabriquent pas.',
                    ],
                    [
                        'question' => 'Pendant un sprint de 100 m, les muscles de Sara consomment bien plus de glucose et de dioxygène qu’au repos. Quelle en est la raison ?',
                        'choices' => [
                            ['choice_text' => 'Le glucose sert alors à fabriquer de nouvelles cellules musculaires', 'is_correct' => false],
                            ['choice_text' => 'Le dioxygène devient un déchet à éliminer au plus vite', 'is_correct' => false],
                            ['choice_text' => 'Les muscles chauffent et la chaleur fait fonctionner la respiration', 'is_correct' => false],
                            ['choice_text' => 'Leurs cellules ont besoin de produire davantage d’ATP pour se contracter', 'is_correct' => true],
                        ],
                        'explanation' => 'Chaque contraction consomme de l’ATP : plus l’effort est intense, plus les cellules respirent pour en refaire.',
                    ],
                    [
                        'question' => 'Imane enferme une plante verte sous une cloche opaque. Après 24 h, la quantité de CO₂ sous la cloche a augmenté. Quelle explication convient ?',
                        'choices' => [
                            ['choice_text' => 'La plante photosynthétise malgré l’obscurité et rejette alors du CO₂', 'is_correct' => false],
                            ['choice_text' => 'La plante est morte et s’est décomposée en quelques heures', 'is_correct' => false],
                            ['choice_text' => 'La plante respire mais ne photosynthétise pas, faute de lumière', 'is_correct' => true],
                            ['choice_text' => 'L’obscurité fabrique du CO₂ à partir de l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans lumière, la photosynthèse s’arrête, mais les cellules continuent de respirer et rejettent du CO₂, qui s’accumule sous la cloche.',
                    ],
                    [
                        'question' => 'Quelle relation lie photosynthèse et respiration cellulaire chez une plante ?',
                        'choices' => [
                            ['choice_text' => 'Les produits de l’une (glucose, dioxygène) servent de réactifs à l’autre', 'is_correct' => true],
                            ['choice_text' => 'Elles utilisent les mêmes réactifs et donnent les mêmes produits', 'is_correct' => false],
                            ['choice_text' => 'La respiration bloque la photosynthèse tant que la plante vit', 'is_correct' => false],
                            ['choice_text' => 'La photosynthèse fabrique des déchets que la cellule doit ensuite éliminer', 'is_correct' => false],
                        ],
                        'explanation' => 'La photosynthèse produit du glucose et du dioxygène, que la respiration cellulaire consomme ensuite pour libérer de l’énergie.',
                    ],
                    [
                        'question' => 'L’oxygène dégagé par une plante augmente avec la lumière, puis reste à 15 unités malgré une lumière doublée. Quelle conclusion est cohérente ?',
                        'choices' => [
                            ['choice_text' => 'La lumière a cessé d’agir sur la plante', 'is_correct' => false],
                            ['choice_text' => 'La plante a commencé à respirer plus qu’elle ne photosynthétise', 'is_correct' => false],
                            ['choice_text' => 'Un autre facteur, comme le CO₂ ou la température, limite alors la photosynthèse', 'is_correct' => true],
                            ['choice_text' => 'La plante est morte à partir de cette intensité', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand la lumière n’est plus le facteur limitant, c’est le CO₂, l’eau ou la température qui plafonne la production.',
                    ],
                    [
                        'question' => 'Une feuille produit 12 unités de glucose à la lumière et 4 unités quand elle est presque dans le noir. Combien de fois la production est-elle plus élevée à la lumière ?',
                        'choices' => [
                            ['choice_text' => '2 fois', 'is_correct' => false],
                            ['choice_text' => '3 fois', 'is_correct' => true],
                            ['choice_text' => '4 fois', 'is_correct' => false],
                            ['choice_text' => '8 fois', 'is_correct' => false],
                        ],
                        'explanation' => '12 ÷ 4 = 3 : la production est trois fois plus élevée. L’écart brut, lui, est de 8 unités.',
                    ],
                ],
            ],
            [
                'title' => 'Génétique et évolution : notions de base',
                'description' => 'Relier ADN, gènes, chromosomes et hérédité aux mécanismes simples de variation et de sélection naturelle.',
                'questions' => [
                    [
                        'question' => 'Un gène peut être défini simplement comme…',
                        'choices' => [
                            ['choice_text' => 'un chromosome entier, avec les gènes qu’il porte', 'is_correct' => false],
                            ['choice_text' => 'un segment d’ADN porteur d’une information biologique', 'is_correct' => true],
                            ['choice_text' => 'une protéine qui dirige les activités de la cellule vivante', 'is_correct' => false],
                            ['choice_text' => 'une cellule reproductrice, ovule ou spermatozoïde', 'is_correct' => false],
                        ],
                        'explanation' => 'Un gène est un segment d’ADN dont l’information sert à fabriquer une protéine ou un ARN. Un chromosome en contient des milliers.',
                    ],
                    [
                        'question' => 'Où trouve-t-on la grande majorité des chromosomes d’une cellule humaine ?',
                        'choices' => [
                            ['choice_text' => 'Dans le noyau', 'is_correct' => true],
                            ['choice_text' => 'Dans le cytoplasme, hors de tout compartiment', 'is_correct' => false],
                            ['choice_text' => 'Dans la membrane plasmique', 'is_correct' => false],
                            ['choice_text' => 'Dans les ribosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une cellule eucaryote, l’ADN est organisé en chromosomes, enfermés dans le noyau.',
                    ],
                    [
                        'question' => 'Combien de chromosomes possède normalement une cellule humaine somatique ?',
                        'choices' => [
                            ['choice_text' => '23', 'is_correct' => false],
                            ['choice_text' => '44', 'is_correct' => false],
                            ['choice_text' => '46', 'is_correct' => true],
                            ['choice_text' => '92', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules somatiques humaines possèdent 46 chromosomes, organisés en 23 paires.',
                    ],
                    [
                        'question' => 'Karim et son frère ont les mêmes parents, mais pas la même combinaison de gènes. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'Les chromosomes se modifient après la naissance selon le mode de vie de chacun', 'is_correct' => false],
                            ['choice_text' => 'Chaque enfant reçoit l’ADN du parent du même sexe que lui', 'is_correct' => false],
                            ['choice_text' => 'L’ADN des parents change à chaque nouvelle grossesse', 'is_correct' => false],
                            ['choice_text' => 'Chaque enfant reçoit une combinaison différente des chromosomes parentaux', 'is_correct' => true],
                        ],
                        'explanation' => 'À la formation des gamètes et à la fécondation, les chromosomes sont brassés : deux enfants des mêmes parents reçoivent des combinaisons différentes. Les vrais jumeaux font exception.',
                    ],
                    [
                        'question' => 'Une personne possède deux exemplaires d’un gène, un hérité de sa mère et un de son père. Ces deux versions sont appelées…',
                        'choices' => [
                            ['choice_text' => 'Allèles', 'is_correct' => true],
                            ['choice_text' => 'Gamètes', 'is_correct' => false],
                            ['choice_text' => 'Chromatides', 'is_correct' => false],
                            ['choice_text' => 'Mutations', 'is_correct' => false],
                        ],
                        'explanation' => 'Les allèles sont les versions d’un même gène ; une personne en porte deux, un par parent.',
                    ],
                    [
                        'question' => 'Une même espèce de rongeurs est coupée en deux populations par une chaîne de montagnes qui se soulève. Après des millions d’années, quel résultat est possible ?',
                        'choices' => [
                            ['choice_text' => 'Les deux populations ont gardé les mêmes gènes', 'is_correct' => false],
                            ['choice_text' => 'Les deux populations sont devenues identiques à force de s’adapter au même milieu', 'is_correct' => false],
                            ['choice_text' => 'Elles ont accumulé assez de différences pour former deux espèces distinctes', 'is_correct' => true],
                            ['choice_text' => 'Les mutations ont cessé d’apparaître dans les deux groupes', 'is_correct' => false],
                        ],
                        'explanation' => 'Isolées, les populations n’échangent plus de gènes et accumulent des différences ; avec le temps, elles peuvent devenir des espèces distinctes.',
                    ],
                    [
                        'question' => 'Dans une culture, un antibiotique tue 99 % des bactéries. Les survivantes se multiplient et la culture résiste ensuite au produit. Quelle idée l’illustre ?',
                        'choices' => [
                            ['choice_text' => 'L’antibiotique fabrique la résistance dans chaque bactérie qu’il touche directement', 'is_correct' => false],
                            ['choice_text' => 'Les bactéries décident de résister après avoir rencontré le produit', 'is_correct' => false],
                            ['choice_text' => 'Les bactéries étaient déjà identiques avant le traitement', 'is_correct' => false],
                            ['choice_text' => 'La sélection naturelle : les bactéries résistantes survivent et se reproduisent', 'is_correct' => true],
                        ],
                        'explanation' => 'Quelques bactéries résistantes préexistaient : l’antibiotique a éliminé les autres et leur a laissé la place. Leur descendance hérite de cette résistance.',
                    ],
                    [
                        'question' => 'Un haltérophile développe de gros muscles à l’entraînement. Ses enfants naîtront-ils avec ces muscles développés ?',
                        'choices' => [
                            ['choice_text' => 'Oui, car les muscles acquis se transmettent aux enfants par les gamètes', 'is_correct' => false],
                            ['choice_text' => 'Non, car l’entraînement ne modifie pas l’ADN transmis aux enfants', 'is_correct' => true],
                            ['choice_text' => 'Oui, car les enfants imitent l’entraînement dès la naissance', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais cela dépend du sexe de l’enfant', 'is_correct' => false],
                        ],
                        'explanation' => 'Un caractère acquis pendant la vie ne change pas l’ADN des gamètes : il ne se transmet donc pas aux enfants.',
                    ],
                    [
                        'question' => 'Deux populations de lapins vivent dans un milieu qui se refroidit. Dans la population A, certains lapins ont un pelage épais, d’autres un pelage fin ; dans la B, tous ont le même pelage fin. Laquelle a le plus de chances de s’adapter ?',
                        'choices' => [
                            ['choice_text' => 'A, car certains individus portent déjà un caractère avantageux', 'is_correct' => true],
                            ['choice_text' => 'B, car des individus identiques résistent mieux ensemble au froid', 'is_correct' => false],
                            ['choice_text' => 'B, car un pelage fin limite la perte de chaleur', 'is_correct' => false],
                            ['choice_text' => 'A, car les lapins à pelage fin vont changer de gènes', 'is_correct' => false],
                        ],
                        'explanation' => 'La sélection naturelle trie la variation qui existe déjà : dans A, les lapins à pelage épais survivront mieux et transmettront ce caractère.',
                    ],
                    [
                        'question' => 'Pour reconstituer la parenté entre les espèces, les chercheurs croisent fossiles, comparaison d’ADN et répartition géographique. Quel est l’intérêt de croiser ces sources ?',
                        'choices' => [
                            ['choice_text' => 'Une source suffit : les autres répètent la même information', 'is_correct' => false],
                            ['choice_text' => 'L’ADN permet de dater chaque fossile à l’année près', 'is_correct' => false],
                            ['choice_text' => 'Les fossiles et l’ADN donnent le même renseignement avec la même précision', 'is_correct' => false],
                            ['choice_text' => 'Chacune apporte un indice différent, et leur accord renforce la conclusion', 'is_correct' => true],
                        ],
                        'explanation' => 'Les fossiles montrent des formes anciennes, l’ADN mesure la parenté et la répartition géographique renseigne sur les déplacements : les trois se complètent.',
                    ],
                ],
            ],
            [
                'title' => 'Micro-organismes, santé et défenses de l’organisme',
                'description' => 'Distinguer bactéries, virus et autres micro-organismes, comprendre la transmission de certaines infections et découvrir les grandes lignes de l’immunité.',
                'questions' => [
                    [
                        'question' => 'Lequel de ces agents est constitué d’une cellule ?',
                        'choices' => [
                            ['choice_text' => 'Un virus', 'is_correct' => false],
                            ['choice_text' => 'Un prion', 'is_correct' => false],
                            ['choice_text' => 'Une bactérie', 'is_correct' => true],
                            ['choice_text' => 'Un anticorps', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bactérie est un organisme formé d’une seule cellule. Un virus, un prion ou un anticorps ne sont pas des cellules.',
                    ],
                    [
                        'question' => 'Léa a une angine due à un virus. Son médecin refuse de lui prescrire un antibiotique. Quelle en est la raison ?',
                        'choices' => [
                            ['choice_text' => 'Les virus sont trop petits pour être touchés par un médicament', 'is_correct' => false],
                            ['choice_text' => 'Les antibiotiques sont réservés aux infections de la peau', 'is_correct' => false],
                            ['choice_text' => 'Un antibiotique affaiblit les défenses de l’organisme contre les virus et les bactéries', 'is_correct' => false],
                            ['choice_text' => 'Les virus n’ont pas les cibles bactériennes visées par les antibiotiques', 'is_correct' => true],
                        ],
                        'explanation' => 'Un antibiotique vise la paroi ou les ribosomes des bactéries ; un virus, qui se multiplie dans nos propres cellules, n’a pas ces cibles.',
                    ],
                    [
                        'question' => 'Quel geste simple réduit la transmission de nombreux agents infectieux ?',
                        'choices' => [
                            ['choice_text' => 'Prendre un antibiotique dès le moindre rhume', 'is_correct' => false],
                            ['choice_text' => 'Se laver régulièrement les mains au savon', 'is_correct' => true],
                            ['choice_text' => 'Partager sa gourde pour limiter les déchets', 'is_correct' => false],
                            ['choice_text' => 'Porter les mêmes vêtements plusieurs jours de suite', 'is_correct' => false],
                        ],
                        'explanation' => 'Le savon et le frottement détachent une partie des micro-organismes de la peau et limitent leur passage d’une personne à l’autre.',
                    ],
                    [
                        'question' => 'Une personne vaccinée rencontre ensuite le microbe visé par le vaccin. Son système immunitaire réagit plus vite grâce à :',
                        'choices' => [
                            ['choice_text' => 'des cellules mémoires formées après la vaccination', 'is_correct' => true],
                            ['choice_text' => 'des globules rouges plus nombreux', 'is_correct' => false],
                            ['choice_text' => 'des antibiotiques fabriqués par le vaccin lors de l’injection', 'is_correct' => false],
                            ['choice_text' => 'une peau devenue imperméable aux microbes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vaccin présente un antigène sans provoquer la maladie ; des cellules mémoires gardent la trace et déclenchent une réponse rapide lors du vrai contact.',
                    ],
                    [
                        'question' => 'Quelle cellule joue un rôle majeur dans la production d’anticorps ?',
                        'choices' => [
                            ['choice_text' => 'Le globule rouge', 'is_correct' => false],
                            ['choice_text' => 'Le lymphocyte T', 'is_correct' => false],
                            ['choice_text' => 'Le lymphocyte B', 'is_correct' => true],
                            ['choice_text' => 'Le phagocyte', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lymphocytes B se transforment en plasmocytes, qui fabriquent les anticorps.',
                    ],
                    [
                        'question' => 'Yassine se coupe le doigt en cuisinant. Quel effet cette coupure a-t-elle sur sa défense contre les microbes ?',
                        'choices' => [
                            ['choice_text' => 'Elle ouvre une brèche dans la peau, porte d’entrée des microbes', 'is_correct' => true],
                            ['choice_text' => 'Elle stérilise la peau autour de la plaie en quelques secondes', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les globules blancs présents dans le doigt', 'is_correct' => false],
                            ['choice_text' => 'Elle rend le sang toxique pour les microbes qui l’approchent', 'is_correct' => false],
                        ],
                        'explanation' => 'La peau est une barrière physique : une plaie l’interrompt et laisse un accès aux tissus sous-jacents.',
                    ],
                    [
                        'question' => 'Après une otite bactérienne, Sara a 39 °C de fièvre. Comment interpréter cette fièvre ?',
                        'choices' => [
                            ['choice_text' => 'C’est la preuve qu’il s’agit d’un virus', 'is_correct' => false],
                            ['choice_text' => 'C’est une réaction possible de l’organisme à l’infection', 'is_correct' => true],
                            ['choice_text' => 'C’est un signe que le système immunitaire ne fonctionne pas', 'is_correct' => false],
                            ['choice_text' => 'C’est la nouvelle température normale du corps', 'is_correct' => false],
                        ],
                        'explanation' => 'La fièvre accompagne la réponse immunitaire : des signaux chimiques déplacent temporairement la température de consigne du corps.',
                    ],
                    [
                        'question' => 'Deux élèves touchent la même poignée contaminée par un virus de la grippe ; un seul tombe malade. Quelle explication est raisonnable ?',
                        'choices' => [
                            ['choice_text' => 'Le virus choisit de préférence l’élève le plus âgé du groupe', 'is_correct' => false],
                            ['choice_text' => 'La poignée ne pouvait pas contenir de virus de la grippe', 'is_correct' => false],
                            ['choice_text' => 'L’un des deux élèves n’a pas de système immunitaire du tout', 'is_correct' => false],
                            ['choice_text' => 'La dose, la porte d’entrée et les défenses comptent chacune', 'is_correct' => true],
                        ],
                        'explanation' => 'Toucher un objet contaminé ne suffit pas à tomber malade : la quantité de virus, l’endroit où il pénètre et l’état des défenses jouent un rôle.',
                    ],
                    [
                        'question' => 'Nadia se sent mieux après trois jours d’antibiotiques prescrits pour sept. Son médecin lui conseille d’aller au bout. Quelle est la raison ?',
                        'choices' => [
                            ['choice_text' => 'Un traitement trop court rend les bactéries plus fortes qu’avant', 'is_correct' => false],
                            ['choice_text' => 'Les bactéries survivantes pourraient devenir résistantes', 'is_correct' => true],
                            ['choice_text' => 'L’antibiotique doit servir de vaccination pour les prochains mois', 'is_correct' => false],
                            ['choice_text' => 'L’antibiotique protège aussi contre les virus pendant sept jours', 'is_correct' => false],
                        ],
                        'explanation' => 'Se sentir mieux ne veut pas dire que les bactéries ont disparu. Arrêter trop tôt laisse survivre les moins sensibles, qui peuvent se multiplier et sélectionner une résistance.',
                    ],
                    [
                        'question' => 'Plusieurs élèves attrapent la même infection après une réunion dans une salle fermée. Quelle mesure agit directement sur la transmission par l’air ?',
                        'choices' => [
                            ['choice_text' => 'Désinfecter les poignées de porte', 'is_correct' => false],
                            ['choice_text' => 'Fermer les fenêtres pour garder la chaleur', 'is_correct' => false],
                            ['choice_text' => 'Améliorer l’aération de la salle', 'is_correct' => true],
                            ['choice_text' => 'Ajouter des chaises pour s’asseoir plus près', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne ventilation évacue les particules respiratoires et réduit le risque de transmission de plusieurs infections respiratoires.',
                    ],
                ],
            ],
            [
                'title' => 'Écosystèmes et biodiversité',
                'description' => 'Comprendre les relations entre êtres vivants et milieu, les niveaux d’organisation écologique, les chaînes alimentaires et l’importance de la biodiversité.',
                'questions' => [
                    [
                        'question' => 'Dans un écosystème, que désigne le terme « population » ?',
                        'choices' => [
                            ['choice_text' => 'L’ensemble des espèces vivant ensemble dans une même zone', 'is_correct' => false],
                            ['choice_text' => 'L’ensemble des êtres vivants et de leur milieu', 'is_correct' => false],
                            ['choice_text' => 'Les êtres vivants de la planète entière', 'is_correct' => false],
                            ['choice_text' => 'Les individus d’une même espèce vivant dans une zone donnée', 'is_correct' => true],
                        ],
                        'explanation' => 'Une population réunit les individus d’une même espèce dans un lieu donné. L’ensemble des espèces forme une communauté, et avec le milieu, un écosystème.',
                    ],
                    [
                        'question' => 'Lequel est un facteur abiotique d’un écosystème ?',
                        'choices' => [
                            ['choice_text' => 'Un champignon', 'is_correct' => false],
                            ['choice_text' => 'Un lapin', 'is_correct' => false],
                            ['choice_text' => 'La température', 'is_correct' => true],
                            ['choice_text' => 'Une bactérie', 'is_correct' => false],
                        ],
                        'explanation' => 'Un facteur abiotique est une composante non vivante du milieu : température, lumière, eau, pH.',
                    ],
                    [
                        'question' => 'Dans la chaîne herbe → sauterelle → grenouille → serpent, quel organisme est le producteur ?',
                        'choices' => [
                            ['choice_text' => 'L’herbe', 'is_correct' => true],
                            ['choice_text' => 'La sauterelle', 'is_correct' => false],
                            ['choice_text' => 'La grenouille', 'is_correct' => false],
                            ['choice_text' => 'Le serpent', 'is_correct' => false],
                        ],
                        'explanation' => 'L’herbe fabrique sa matière organique par photosynthèse : c’est le producteur de la chaîne.',
                    ],
                    [
                        'question' => 'Une sécheresse détruit la moitié des plantes d’une prairie. Quelles conséquences peut-on prévoir à court terme ?',
                        'choices' => [
                            ['choice_text' => 'Les prédateurs profitent d’abord de ce manque de plantes pour chasser davantage', 'is_correct' => false],
                            ['choice_text' => 'Les herbivores trouvent moins de nourriture, puis leurs prédateurs aussi', 'is_correct' => true],
                            ['choice_text' => 'Les décomposeurs sont touchés, mais pas les animaux de la prairie', 'is_correct' => false],
                            ['choice_text' => 'Les herbivores deviennent producteurs pour compenser le manque', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plantes sont à la base des chaînes alimentaires : en diminuant, elles réduisent les ressources des herbivores, puis des carnivores qui s’en nourrissent.',
                    ],
                    [
                        'question' => 'Dans une forêt, la population de lapins chute de 60 % après une maladie. Que peut-il arriver aux renards, qui chassent aussi des rongeurs ?',
                        'choices' => [
                            ['choice_text' => 'Ils deviennent herbivores pour compenser la disparition des lapins', 'is_correct' => false],
                            ['choice_text' => 'Leur population augmente, faute de concurrents', 'is_correct' => false],
                            ['choice_text' => 'Ils cessent de se nourrir et se reproduisent plus vite', 'is_correct' => false],
                            ['choice_text' => 'Ils manquent de proies et se tournent davantage vers les rongeurs', 'is_correct' => true],
                        ],
                        'explanation' => 'Moins de proies, c’est moins de nourriture : les renards changent de menu, et leur effectif peut diminuer si la pénurie dure.',
                    ],
                    [
                        'question' => 'Deux espèces utilisent la même ressource limitée dans un même milieu. Quel type d’interaction peut en résulter ?',
                        'choices' => [
                            ['choice_text' => 'La prédation', 'is_correct' => false],
                            ['choice_text' => 'La compétition', 'is_correct' => true],
                            ['choice_text' => 'Le parasitisme', 'is_correct' => false],
                            ['choice_text' => 'La symbiose', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand une ressource limitée est convoitée par plusieurs espèces, chacune réduit ce qui reste pour l’autre : c’est la compétition.',
                    ],
                    [
                        'question' => 'Introduite il y a vingt ans dans un lac, une plante aquatique en recouvre aujourd’hui la moitié. Qu’est-ce qui peut expliquer son succès ?',
                        'choices' => [
                            ['choice_text' => 'Elle ne se reproduit pas, mais elle vit extrêmement longtemps', 'is_correct' => false],
                            ['choice_text' => 'Elle dissout les roches du fond du lac', 'is_correct' => false],
                            ['choice_text' => 'Elle trouve peu de prédateurs et de concurrents, et se multiplie vite', 'is_correct' => true],
                            ['choice_text' => 'Elle est considérée comme une espèce locale dès son arrivée dans le lac', 'is_correct' => false],
                        ],
                        'explanation' => 'Loin de ses prédateurs et parasites d’origine, une espèce introduite peut proliférer et prendre la place des espèces locales.',
                    ],
                    [
                        'question' => 'Une forêt abrite de nombreuses espèces de plantes, d’animaux et de micro-organismes. Comment nomme-t-on cette variété ?',
                        'choices' => [
                            ['choice_text' => 'La biodiversité', 'is_correct' => true],
                            ['choice_text' => 'La densité de population', 'is_correct' => false],
                            ['choice_text' => 'La chaîne alimentaire', 'is_correct' => false],
                            ['choice_text' => 'Le facteur abiotique', 'is_correct' => false],
                        ],
                        'explanation' => 'La biodiversité désigne la variété du vivant : diversité des espèces, des gènes et des écosystèmes.',
                    ],
                    [
                        'question' => 'Dans un sol de forêt, des champignons et des bactéries transforment les feuilles mortes en sels minéraux absorbables par les racines. Quel est leur rôle dans la chaîne alimentaire ?',
                        'choices' => [
                            ['choice_text' => 'Ce sont des producteurs', 'is_correct' => false],
                            ['choice_text' => 'Ce sont des consommateurs', 'is_correct' => false],
                            ['choice_text' => 'Ce sont des prédateurs', 'is_correct' => false],
                            ['choice_text' => 'Ce sont des décomposeurs', 'is_correct' => true],
                        ],
                        'explanation' => 'Champignons et bactéries décomposent la matière morte en sels minéraux que les plantes réabsorbent par leurs racines.',
                    ],
                    [
                        'question' => 'Une zone humide est protégée pour abriter des oiseaux, mais elle retient aussi l’eau lors des crues. Que montre cet exemple ?',
                        'choices' => [
                            ['choice_text' => 'Un même écosystème peut rendre plusieurs services à la fois', 'is_correct' => true],
                            ['choice_text' => 'Un écosystème n’a qu’une fonction à la fois', 'is_correct' => false],
                            ['choice_text' => 'La biodiversité empêche les crues de se produire', 'is_correct' => false],
                            ['choice_text' => 'Les zones humides rendent l’eau potable sans passer par un traitement', 'is_correct' => false],
                        ],
                        'explanation' => 'Habitat d’espèces, stockage temporaire de l’eau, filtration de certains polluants : un seul milieu rend plusieurs services.',
                    ],
                ],
            ],
            [
                'title' => 'La Terre, ses matériaux et les grands processus géologiques',
                'description' => 'Identifier les principales familles de roches et minéraux, comprendre le cycle des roches, la tectonique des plaques et quelques phénomènes géologiques courants.',
                'questions' => [
                    [
                        'question' => 'Lequel de ces éléments est un minéral plutôt qu’une roche ?',
                        'choices' => [
                            ['choice_text' => 'Le quartz', 'is_correct' => true],
                            ['choice_text' => 'Le granite', 'is_correct' => false],
                            ['choice_text' => 'Le basalte', 'is_correct' => false],
                            ['choice_text' => 'Le grès', 'is_correct' => false],
                        ],
                        'explanation' => 'Le quartz est un minéral, de composition et de structure définies. Granite, basalte et grès sont des roches, formées d’assemblages de minéraux ou de grains.',
                    ],
                    [
                        'question' => 'Une roche formée par le refroidissement et la solidification d’un magma appartient à la famille des roches…',
                        'choices' => [
                            ['choice_text' => 'sédimentaires', 'is_correct' => false],
                            ['choice_text' => 'magmatiques', 'is_correct' => true],
                            ['choice_text' => 'métamorphiques', 'is_correct' => false],
                            ['choice_text' => 'détritiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Un magma qui refroidit, en profondeur ou en surface, donne une roche magmatique.',
                    ],
                    [
                        'question' => 'Quelle enveloppe terrestre se situe entre la croûte et le noyau ?',
                        'choices' => [
                            ['choice_text' => 'La croûte continentale', 'is_correct' => false],
                            ['choice_text' => 'Le noyau externe', 'is_correct' => false],
                            ['choice_text' => 'Le noyau interne', 'is_correct' => false],
                            ['choice_text' => 'Le manteau', 'is_correct' => true],
                        ],
                        'explanation' => 'De la surface vers le centre : croûte, manteau, noyau externe liquide, noyau interne solide.',
                    ],
                    [
                        'question' => 'Deux plaques tectoniques se rapprochent l’une de l’autre. Quel type de limite décrit cette situation ?',
                        'choices' => [
                            ['choice_text' => 'Une limite divergente', 'is_correct' => false],
                            ['choice_text' => 'Une limite transformante', 'is_correct' => false],
                            ['choice_text' => 'Une limite convergente', 'is_correct' => true],
                            ['choice_text' => 'Un point chaud', 'is_correct' => false],
                        ],
                        'explanation' => 'À une limite convergente, les plaques se rapprochent : l’une plonge sous l’autre (subduction) ou les deux se plissent en chaîne de montagnes.',
                    ],
                    [
                        'question' => 'Dans le Haut Atlas, des randonneurs trouvent des coquilles marines fossiles à 2 500 m d’altitude. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'Ces roches se sont déposées sous la mer puis ont été soulevées', 'is_correct' => true],
                            ['choice_text' => 'Des oiseaux ont transporté les coquilles marines jusqu’au sommet', 'is_correct' => false],
                            ['choice_text' => 'Les coquilles ont grandi dans la roche à cette altitude', 'is_correct' => false],
                            ['choice_text' => 'La mer a récemment monté de 2 500 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Des coquilles marines prouvent un dépôt au fond d’une mer ; le soulèvement de la chaîne les a ensuite portées en altitude.',
                    ],
                    [
                        'question' => 'Une rivière transporte des grains qui se déposent lorsque sa vitesse diminue. Quel processus est observé ?',
                        'choices' => [
                            ['choice_text' => 'L’érosion', 'is_correct' => false],
                            ['choice_text' => 'La fusion', 'is_correct' => false],
                            ['choice_text' => 'La sédimentation', 'is_correct' => true],
                            ['choice_text' => 'La cristallisation du magma', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand le courant ralentit, il lâche ses grains : ils s’accumulent en couches, c’est la sédimentation.',
                    ],
                    [
                        'question' => 'Un calcaire enfoui en profondeur est chauffé et comprimé jusqu’à devenir du marbre. À quelle famille de roches appartient le marbre ?',
                        'choices' => [
                            ['choice_text' => 'Aux roches sédimentaires', 'is_correct' => false],
                            ['choice_text' => 'Aux roches métamorphiques', 'is_correct' => true],
                            ['choice_text' => 'Aux roches magmatiques', 'is_correct' => false],
                            ['choice_text' => 'Aux roches volcaniques', 'is_correct' => false],
                        ],
                        'explanation' => 'Le marbre naît de la transformation d’un calcaire à l’état solide, sous l’effet de la chaleur et de la pression : c’est une roche métamorphique.',
                    ],
                    [
                        'question' => 'Après un séisme, les dégâts sont plus forts sur un sol d’alluvions meubles que sur un rocher dur voisin. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'Les ondes sismiques ne traversent pas les sols meubles de la plaine', 'is_correct' => false],
                            ['choice_text' => 'Le rocher dur produit des séismes plus faibles', 'is_correct' => false],
                            ['choice_text' => 'Le foyer du séisme se trouve sous les alluvions', 'is_correct' => false],
                            ['choice_text' => 'Les sols meubles amplifient les vibrations des ondes sismiques', 'is_correct' => true],
                        ],
                        'explanation' => 'Les sédiments meubles ralentissent et amplifient les ondes sismiques, alors que le rocher dur les transmet avec moins d’amplitude.',
                    ],
                    [
                        'question' => 'La lave du Piton de la Fournaise coule vite sur plusieurs kilomètres, alors que celle d’un volcan à dôme reste pâteuse. Quelle propriété les distingue ?',
                        'choices' => [
                            ['choice_text' => 'La couleur : une lave plus claire coule plus loin', 'is_correct' => false],
                            ['choice_text' => 'La viscosité : la lave fluide est peu visqueuse', 'is_correct' => true],
                            ['choice_text' => 'La densité : une lave plus lourde coule plus vite', 'is_correct' => false],
                            ['choice_text' => 'La taille du cratère : un grand cratère accélère la lave', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lave basaltique, pauvre en silice et chaude, est peu visqueuse et s’étale loin. Une lave riche en silice est pâteuse et reste près du cratère.',
                    ],
                    [
                        'question' => 'Une ville située près d’une limite de plaques connaît des séismes réguliers. Quelle mesure réduit le plus directement les dégâts d’un futur séisme ?',
                        'choices' => [
                            ['choice_text' => 'Élargir les rues pour disperser les ondes sismiques', 'is_correct' => false],
                            ['choice_text' => 'Creuser des tranchées autour de la ville pour arrêter les ondes', 'is_correct' => false],
                            ['choice_text' => 'Construire des bâtiments aux normes parasismiques', 'is_correct' => true],
                            ['choice_text' => 'Mesurer chaque jour la température du sol pour prévoir les secousses', 'is_correct' => false],
                        ],
                        'explanation' => 'On ne peut ni empêcher ni prévoir précisément un séisme, mais des constructions adaptées, l’information du public et des plans d’urgence réduisent les dégâts.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

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