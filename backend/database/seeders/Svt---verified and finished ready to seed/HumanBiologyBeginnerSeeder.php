<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class HumanBiologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'human-biology')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la biologie humaine',
                'description' => 'Découvrir l’organisation générale du corps humain, ses grandes fonctions et les bases de la vie humaine.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Quel niveau d’organisation vient juste après celui de la cellule chez l’être humain ?',
                        'choices' => [
                            ['choice_text' => 'L’organe', 'is_correct' => false],
                            ['choice_text' => 'Le système', 'is_correct' => false],
                            ['choice_text' => 'Le tissu', 'is_correct' => true],
                            ['choice_text' => 'L’organisme', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ensemble de cellules semblables et spécialisées forme un tissu. L’organe vient ensuite dans la hiérarchie.',
                    ],
                    [
                        'question' => 'La peau est faite d’épiderme, de derme et de terminaisons nerveuses. Cet assemblage de plusieurs tissus en fait :',
                        'choices' => [
                            ['choice_text' => 'un organe', 'is_correct' => true],
                            ['choice_text' => 'un tissu spécialisé', 'is_correct' => false],
                            ['choice_text' => 'une cellule géante', 'is_correct' => false],
                            ['choice_text' => 'un système à part entière', 'is_correct' => false],
                        ],
                        'explanation' => 'Un organe associe plusieurs tissus qui travaillent ensemble pour une fonction : c’est le cas de la peau.',
                    ],
                    [
                        'question' => 'Après cinq minutes de course, Yassine est essoufflé et son cœur bat vite. Quelle réponse montre que plusieurs systèmes coopèrent ?',
                        'choices' => [
                            ['choice_text' => 'le système digestif prend en charge l’essentiel de l’effort', 'is_correct' => false],
                            ['choice_text' => 'le squelette modifie son activité pendant que les autres s’arrêtent', 'is_correct' => false],
                            ['choice_text' => 'le système excréteur fournit l’énergie aux muscles', 'is_correct' => false],
                            ['choice_text' => 'les systèmes respiratoire, circulatoire et musculaire coopèrent', 'is_correct' => true],
                        ],
                        'explanation' => 'Les muscles ont besoin de plus de dioxygène et de nutriments : les systèmes respiratoire et circulatoire les leur apportent.',
                    ],
                    [
                        'question' => 'Laquelle de ces propositions décrit le mieux un organisme humain ?',
                        'choices' => [
                            ['choice_text' => 'Une cellule unique très spécialisée', 'is_correct' => false],
                            ['choice_text' => 'Un ensemble coordonné de cellules, tissus, organes et systèmes', 'is_correct' => true],
                            ['choice_text' => 'Un groupe d’organes de même structure', 'is_correct' => false],
                            ['choice_text' => 'Un empilement de tissus sans lien fonctionnel entre les organes qui le composent', 'is_correct' => false],
                        ],
                        'explanation' => 'L’organisme humain résulte de l’organisation et de la coopération de nombreux niveaux biologiques.',
                    ],
                    [
                        'question' => 'Après avoir mangé, quel est l’objectif de la digestion ?',
                        'choices' => [
                            ['choice_text' => 'Stocker les aliments tels quels dans l’estomac', 'is_correct' => false],
                            ['choice_text' => 'Éliminer les aliments sans en extraire d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Fabriquer du sang directement à partir des aliments non digérés qui sont avalés', 'is_correct' => false],
                            ['choice_text' => 'Transformer les aliments en nutriments que les cellules peuvent utiliser', 'is_correct' => true],
                        ],
                        'explanation' => 'La digestion réduit les aliments en molécules assez petites pour être absorbées puis utilisées par les cellules.',
                    ],
                    [
                        'question' => 'Le sang est classé parmi :',
                        'choices' => [
                            ['choice_text' => 'les tissus conjonctifs, sous forme liquide', 'is_correct' => true],
                            ['choice_text' => 'les organes, comme le cœur', 'is_correct' => false],
                            ['choice_text' => 'les cellules, comme les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'les systèmes, comme le système circulatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sang est un tissu conjonctif liquide : il contient des cellules plongées dans une matrice liquide, le plasma.',
                    ],
                    [
                        'question' => 'Le squelette humain assure notamment :',
                        'choices' => [
                            ['choice_text' => 'la digestion des lipides et la production de bile', 'is_correct' => false],
                            ['choice_text' => 'le soutien du corps et la protection d’organes fragiles', 'is_correct' => true],
                            ['choice_text' => 'la filtration du sang et l’élimination de l’urée', 'is_correct' => false],
                            ['choice_text' => 'la transmission rapide des messages nerveux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les os soutiennent le corps et protègent des organes comme le cerveau, le cœur ou les poumons.',
                    ],
                    [
                        'question' => 'Quel exemple illustre une interaction entre l’être humain et son environnement ?',
                        'choices' => [
                            ['choice_text' => 'La division d’une cellule de la peau', 'is_correct' => false],
                            ['choice_text' => 'La production de bile par le foie après un repas riche en graisses', 'is_correct' => false],
                            ['choice_text' => 'La pupille qui se contracte face à une lumière forte', 'is_correct' => true],
                            ['choice_text' => 'La fixation du calcium dans les os', 'is_correct' => false],
                        ],
                        'explanation' => 'La contraction de la pupille est une réponse de l’organisme à une information venue de l’environnement.',
                    ],
                    [
                        'question' => 'Si les cellules d’un organisme arrêtaient de communiquer entre elles, quelle conséquence serait la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'Le fonctionnement coordonné du corps serait perturbé', 'is_correct' => true],
                            ['choice_text' => 'Les organes grossiraient rapidement pour compenser', 'is_correct' => false],
                            ['choice_text' => 'La digestion s’accélérerait dans le tube digestif', 'is_correct' => false],
                            ['choice_text' => 'Le squelette se renforcerait', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules échangent des signaux chimiques ou électriques, ce qui coordonne les fonctions du corps.',
                    ],
                    [
                        'question' => 'Qu’il fasse froid ou chaud dehors, la température du corps de Sara reste proche de 37 °C. Cette stabilité du milieu intérieur s’appelle :',
                        'choices' => [
                            ['choice_text' => 'la diffusion', 'is_correct' => false],
                            ['choice_text' => 'l’osmose', 'is_correct' => false],
                            ['choice_text' => 'l’immunité', 'is_correct' => false],
                            ['choice_text' => 'l’homéostasie', 'is_correct' => true],
                        ],
                        'explanation' => 'L’homéostasie maintient des paramètres internes, comme la température ou la glycémie, dans des limites compatibles avec la vie.',
                    ],
                ],
            ],
            [
                'title' => 'Cellules, tissus et organes humains',
                'description' => 'Étudier les principales caractéristiques des cellules humaines et les relations entre cellules, tissus et organes.',
                'settings' => ['duration' => 15, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Quel compartiment cellulaire contient l’essentiel de l’ADN d’une cellule humaine ?',
                        'choices' => [
                            ['choice_text' => 'Le lysosome', 'is_correct' => false],
                            ['choice_text' => 'Le noyau', 'is_correct' => true],
                            ['choice_text' => 'Le ribosome', 'is_correct' => false],
                            ['choice_text' => 'La membrane', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la plupart des cellules humaines, l’ADN se trouve principalement dans le noyau, sous forme de chromosomes.',
                    ],
                    [
                        'question' => 'À quoi servent les mitochondries ?',
                        'choices' => [
                            ['choice_text' => 'À fabriquer les protéines à partir des instructions de l’ARN messager', 'is_correct' => false],
                            ['choice_text' => 'À digérer les molécules usées de la cellule', 'is_correct' => false],
                            ['choice_text' => 'À contrôler les entrées et les sorties de la cellule', 'is_correct' => false],
                            ['choice_text' => 'À produire une grande partie de l’ATP utilisable par la cellule', 'is_correct' => true],
                        ],
                        'explanation' => 'Les mitochondries réalisent l’essentiel de la respiration cellulaire et produisent de l’ATP, une énergie directement utilisable.',
                    ],
                    [
                        'question' => 'Quelle structure contrôle les échanges entre la cellule et son milieu ?',
                        'choices' => [
                            ['choice_text' => 'La membrane plasmique', 'is_correct' => true],
                            ['choice_text' => 'Le noyau', 'is_correct' => false],
                            ['choice_text' => 'Le nucléole', 'is_correct' => false],
                            ['choice_text' => 'Le centrosome', 'is_correct' => false],
                        ],
                        'explanation' => 'La membrane plasmique est une barrière sélective qui régule les entrées et sorties de nombreuses substances.',
                    ],
                    [
                        'question' => 'Deux cellules humaines ont la même information génétique, mais des fonctions différentes. Quelle explication convient le mieux ?',
                        'choices' => [
                            ['choice_text' => 'Elles ont un nombre différent de chromosomes', 'is_correct' => false],
                            ['choice_text' => 'L’une des deux ne possède pas de membrane', 'is_correct' => false],
                            ['choice_text' => 'Elles n’expriment pas les mêmes gènes', 'is_correct' => true],
                            ['choice_text' => 'Elles appartiennent à deux espèces différentes', 'is_correct' => false],
                        ],
                        'explanation' => 'La spécialisation d’une cellule dépend de l’expression différentielle de ses gènes.',
                    ],
                    [
                        'question' => 'Lequel est un exemple de tissu ?',
                        'choices' => [
                            ['choice_text' => 'Tissu musculaire', 'is_correct' => true],
                            ['choice_text' => 'Estomac', 'is_correct' => false],
                            ['choice_text' => 'Cœur', 'is_correct' => false],
                            ['choice_text' => 'Peau entière', 'is_correct' => false],
                        ],
                        'explanation' => 'Le tissu musculaire est formé de cellules organisées pour se contracter. L’estomac, le cœur et la peau sont des organes.',
                    ],
                    [
                        'question' => 'Une blessure légère détruit quelques cellules de l’épiderme. Quelle réponse est la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'Des cellules du squelette migrent vers la plaie pour fabriquer de la peau neuve', 'is_correct' => false],
                            ['choice_text' => 'Les globules rouges se transforment en cellules de peau', 'is_correct' => false],
                            ['choice_text' => 'Des cellules voisines se multiplient pour remplacer les cellules perdues', 'is_correct' => true],
                            ['choice_text' => 'L’épiderme ne se renouvelle plus et la plaie reste ouverte', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules basales de l’épiderme se divisent pour remplacer celles qui ont disparu.',
                    ],
                    [
                        'question' => 'Une cellule humaine mesure environ 20 µm. Combien de cellules alignées bout à bout couvrent 1 mm ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '500', 'is_correct' => false],
                            ['choice_text' => '5 000', 'is_correct' => false],
                            ['choice_text' => '50', 'is_correct' => true],
                        ],
                        'explanation' => '1 mm = 1 000 µm, et 1 000 ÷ 20 = 50 cellules.',
                    ],
                    [
                        'question' => 'Quel est le rôle des ribosomes ?',
                        'choices' => [
                            ['choice_text' => 'Ils produisent la majeure partie de l’ATP', 'is_correct' => false],
                            ['choice_text' => 'Ils participent à la fabrication des protéines', 'is_correct' => true],
                            ['choice_text' => 'Ils digèrent les molécules usées', 'is_correct' => false],
                            ['choice_text' => 'Ils stockent l’ADN de la cellule', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ribosomes assemblent des acides aminés pour produire des protéines à partir des instructions de l’ARN messager.',
                    ],
                    [
                        'question' => 'Une cellule possède beaucoup de lysosomes. À quelle activité peut-on associer cette caractéristique ?',
                        'choices' => [
                            ['choice_text' => 'À la conduction des influx nerveux sur de longues distances dans le corps', 'is_correct' => false],
                            ['choice_text' => 'À la circulation du sang', 'is_correct' => false],
                            ['choice_text' => 'À la digestion de certaines molécules à l’intérieur de la cellule', 'is_correct' => true],
                            ['choice_text' => 'À la fixation de l’oxygène par l’hémoglobine', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lysosomes contiennent des enzymes capables de dégrader diverses molécules et certains composants cellulaires.',
                    ],
                    [
                        'question' => 'Dans le corps, chaque cellule baigne dans un milieu intérieur. Quel est l’intérêt de ce contact ?',
                        'choices' => [
                            ['choice_text' => 'elle y absorbe directement l’énergie du Soleil', 'is_correct' => false],
                            ['choice_text' => 'elle y puise nutriments et dioxygène et y rejette ses déchets', 'is_correct' => true],
                            ['choice_text' => 'elle y fabrique du dioxygène à partir de l’azote contenu dans le milieu intérieur', 'is_correct' => false],
                            ['choice_text' => 'elle y reste isolée des cellules voisines', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules dépendent du milieu intérieur pour leurs apports et pour l’évacuation de leurs déchets.',
                    ],
                ],
            ],
            [
                'title' => 'Nutrition et digestion',
                'description' => 'Comprendre le rôle des aliments, des nutriments, du tube digestif et de l’absorption intestinale.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Quel nutriment fournit principalement des acides aminés nécessaires à la fabrication de nombreuses protéines ?',
                        'choices' => [
                            ['choice_text' => 'Les vitamines', 'is_correct' => false],
                            ['choice_text' => 'L’eau', 'is_correct' => false],
                            ['choice_text' => 'Les sels minéraux', 'is_correct' => false],
                            ['choice_text' => 'Les protéines alimentaires', 'is_correct' => true],
                        ],
                        'explanation' => 'La digestion des protéines libère des acides aminés, utilisés pour fabriquer les protéines de l’organisme.',
                    ],
                    [
                        'question' => 'Dans quelle partie du tube digestif se déroule la majeure partie de l’absorption des nutriments ?',
                        'choices' => [
                            ['choice_text' => 'L’œsophage', 'is_correct' => false],
                            ['choice_text' => 'L’intestin grêle', 'is_correct' => true],
                            ['choice_text' => 'Le gros intestin', 'is_correct' => false],
                            ['choice_text' => 'L’estomac', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intestin grêle offre une grande surface d’absorption grâce à ses replis, ses villosités et ses microvillosités.',
                    ],
                    [
                        'question' => 'Hamza mâche longuement son pain avant de l’avaler. En quoi cela aide-t-il la digestion ?',
                        'choices' => [
                            ['choice_text' => 'la mastication transforme déjà les protéines en vitamines utilisables par les cellules', 'is_correct' => false],
                            ['choice_text' => 'la mastication remplace l’action de l’intestin', 'is_correct' => false],
                            ['choice_text' => 'les petits morceaux offrent plus de surface aux sucs digestifs et à la salive', 'is_correct' => true],
                            ['choice_text' => 'la mastication désactive les enzymes digestives', 'is_correct' => false],
                        ],
                        'explanation' => 'Des aliments fragmentés et imprégnés de salive sont attaqués plus vite par les enzymes digestives.',
                    ],
                    [
                        'question' => 'Quel est le rôle principal de la bile dans la digestion ?',
                        'choices' => [
                            ['choice_text' => 'Elle aide à disperser les lipides en fines gouttelettes', 'is_correct' => true],
                            ['choice_text' => 'Elle digère les protéines de la viande en acides aminés absorbables', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme l’amidon en glucose', 'is_correct' => false],
                            ['choice_text' => 'Elle neutralise les enzymes de l’intestin', 'is_correct' => false],
                        ],
                        'explanation' => 'Les sels biliaires émulsifient les lipides, ce qui facilite l’action des enzymes sur les graisses.',
                    ],
                    [
                        'question' => 'Après un repas riche en glucides, quelle molécule peut augmenter dans le sang ?',
                        'choices' => [
                            ['choice_text' => 'L’hémoglobine libre', 'is_correct' => false],
                            ['choice_text' => 'L’urée', 'is_correct' => false],
                            ['choice_text' => 'Le glucose', 'is_correct' => true],
                            ['choice_text' => 'Le calcium des os', 'is_correct' => false],
                        ],
                        'explanation' => 'Les glucides digérés fournissent du glucose, qui passe dans le sang après l’absorption intestinale.',
                    ],
                    [
                        'question' => 'Une personne manque de fibres alimentaires. Quelle fonction digestive peut être affectée ?',
                        'choices' => [
                            ['choice_text' => 'L’absorption du dioxygène par les poumons', 'is_correct' => false],
                            ['choice_text' => 'Le transit intestinal', 'is_correct' => true],
                            ['choice_text' => 'La filtration du sang par les reins', 'is_correct' => false],
                            ['choice_text' => 'La digestion de l’amidon dans la bouche', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fibres augmentent le volume des selles et favorisent un transit intestinal normal.',
                    ],
                    [
                        'question' => 'Quelle séquence correspond au trajet habituel des aliments ?',
                        'choices' => [
                            ['choice_text' => 'Bouche → œsophage → estomac → intestin grêle → gros intestin', 'is_correct' => true],
                            ['choice_text' => 'Bouche → estomac → œsophage → intestin grêle → gros intestin', 'is_correct' => false],
                            ['choice_text' => 'Bouche → œsophage → intestin grêle → estomac → gros intestin', 'is_correct' => false],
                            ['choice_text' => 'Bouche → œsophage → estomac → gros intestin → intestin grêle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les aliments suivent le tube digestif : bouche, pharynx, œsophage, estomac, intestin grêle puis gros intestin.',
                    ],
                    [
                        'question' => 'Un nutriment absorbé par l’intestin rejoint le foie par le sang. Lequel correspond à cette situation ?',
                        'choices' => [
                            ['choice_text' => 'Un morceau de pain non digéré', 'is_correct' => false],
                            ['choice_text' => 'Les fibres alimentaires', 'is_correct' => false],
                            ['choice_text' => 'Le dioxygène de l’air inspiré', 'is_correct' => false],
                            ['choice_text' => 'Le glucose issu de la digestion des glucides', 'is_correct' => true],
                        ],
                        'explanation' => 'Les nutriments solubles absorbés dans l’intestin gagnent le foie par la veine porte.',
                    ],
                    [
                        'question' => 'Un morceau de pain mâché longtemps prend un goût sucré. Quelle enzyme de la salive commence à digérer l’amidon ?',
                        'choices' => [
                            ['choice_text' => 'La lipase', 'is_correct' => false],
                            ['choice_text' => 'L’amylase', 'is_correct' => true],
                            ['choice_text' => 'La pepsine', 'is_correct' => false],
                            ['choice_text' => 'La trypsine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amylase salivaire découpe l’amidon en sucres plus petits, d’où le goût sucré.',
                    ],
                    [
                        'question' => 'Une personne ingère durablement plus d’énergie qu’elle n’en dépense. Que peut-il se produire ?',
                        'choices' => [
                            ['choice_text' => 'Une partie de l’excédent est stockée, notamment sous forme de lipides', 'is_correct' => true],
                            ['choice_text' => 'L’excédent est évacué dans l’urine dans l’heure', 'is_correct' => false],
                            ['choice_text' => 'Les cellules cessent d’utiliser le glucose', 'is_correct' => false],
                            ['choice_text' => 'Les poumons convertissent l’excédent en dioxygène qu’ils rejettent à l’expiration', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand les apports dépassent durablement les dépenses, l’organisme met une partie de l’énergie en réserve.',
                    ],
                ],
            ],
            [
                'title' => 'Respiration, sang et circulation',
                'description' => 'Découvrir le lien entre respiration, transport du dioxygène, circulation sanguine et besoins des cellules.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Dans quel organe se produisent principalement les échanges de dioxygène et de dioxyde de carbone entre l’air et le sang ?',
                        'choices' => [
                            ['choice_text' => 'Les poumons', 'is_correct' => true],
                            ['choice_text' => 'Le foie', 'is_correct' => false],
                            ['choice_text' => 'Les reins', 'is_correct' => false],
                            ['choice_text' => 'L’estomac', 'is_correct' => false],
                        ],
                        'explanation' => 'Les échanges gazeux ont lieu au niveau des alvéoles pulmonaires, au contact de nombreux capillaires.',
                    ],
                    [
                        'question' => 'Quel est le rôle principal de l’hémoglobine ?',
                        'choices' => [
                            ['choice_text' => 'Défendre l’organisme contre les microbes', 'is_correct' => false],
                            ['choice_text' => 'Faire coaguler le sang après une blessure pour boucher les vaisseaux', 'is_correct' => false],
                            ['choice_text' => 'Fixer et transporter une grande partie du dioxygène dans le sang', 'is_correct' => true],
                            ['choice_text' => 'Transporter le glucose vers les muscles', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hémoglobine des globules rouges se lie au dioxygène et le transporte vers les tissus.',
                    ],
                    [
                        'question' => 'Après le nez, quel est le trajet de l’air inspiré jusqu’aux échanges gazeux ?',
                        'choices' => [
                            ['choice_text' => 'trachée → œsophage → bronches → alvéoles', 'is_correct' => false],
                            ['choice_text' => 'trachée → bronches → bronchioles → alvéoles', 'is_correct' => true],
                            ['choice_text' => 'bronches → trachée → alvéoles → bronchioles', 'is_correct' => false],
                            ['choice_text' => 'pharynx → estomac → bronches → alvéoles', 'is_correct' => false],
                        ],
                        'explanation' => 'L’air descend par la trachée, se divise dans les bronches puis les bronchioles, et atteint les alvéoles.',
                    ],
                    [
                        'question' => 'Le cœur joue principalement quel rôle ?',
                        'choices' => [
                            ['choice_text' => 'Filtrer le sang et produire l’urine', 'is_correct' => false],
                            ['choice_text' => 'Produire les globules rouges chez l’adulte', 'is_correct' => false],
                            ['choice_text' => 'Stocker le dioxygène', 'is_correct' => false],
                            ['choice_text' => 'Propulser le sang dans les vaisseaux', 'is_correct' => true],
                        ],
                        'explanation' => 'Le cœur est une pompe musculaire qui propulse le sang dans la circulation pulmonaire et dans la circulation générale.',
                    ],
                    [
                        'question' => 'Quel vaisseau ramène normalement le sang vers le cœur ?',
                        'choices' => [
                            ['choice_text' => 'Une artère', 'is_correct' => false],
                            ['choice_text' => 'Une veine', 'is_correct' => true],
                            ['choice_text' => 'Un capillaire', 'is_correct' => false],
                            ['choice_text' => 'Une artériole', 'is_correct' => false],
                        ],
                        'explanation' => 'Les veines conduisent le sang vers le cœur, alors que les artères l’en éloignent.',
                    ],
                    [
                        'question' => 'Pendant un match, le cœur de Karim passe de 65 à 150 battements par minute. Quel est l’intérêt de cette hausse ?',
                        'choices' => [
                            ['choice_text' => 'ralentir les échanges gazeux dans les poumons pour économiser l’énergie', 'is_correct' => false],
                            ['choice_text' => 'réduire l’apport de nutriments aux tissus', 'is_correct' => false],
                            ['choice_text' => 'envoyer plus de sang aux muscles qui ont besoin de dioxygène', 'is_correct' => true],
                            ['choice_text' => 'empêcher les muscles d’utiliser le dioxygène', 'is_correct' => false],
                        ],
                        'explanation' => 'Un cœur plus rapide augmente le débit sanguin et donc l’apport aux muscles actifs.',
                    ],
                    [
                        'question' => 'Les globules blancs jouent surtout un rôle dans :',
                        'choices' => [
                            ['choice_text' => 'le transport du dioxygène', 'is_correct' => false],
                            ['choice_text' => 'la coagulation du sang', 'is_correct' => false],
                            ['choice_text' => 'le transport des nutriments dissous', 'is_correct' => false],
                            ['choice_text' => 'la défense de l’organisme contre les infections', 'is_correct' => true],
                        ],
                        'explanation' => 'Les globules blancs détectent et détruisent les microbes ; le dioxygène est transporté par les globules rouges.',
                    ],
                    [
                        'question' => 'Un adulte a une fréquence cardiaque de 70 battements par minute et un volume d’éjection de 70 mL. Quel débit cardiaque approximatif obtient-on ?',
                        'choices' => [
                            ['choice_text' => '4 900 mL/min, soit 4,9 L/min', 'is_correct' => true],
                            ['choice_text' => '980 mL/min', 'is_correct' => false],
                            ['choice_text' => '49 L/min', 'is_correct' => false],
                            ['choice_text' => '140 mL/min', 'is_correct' => false],
                        ],
                        'explanation' => '70 × 70 = 4 900 mL par minute, soit environ 4,9 L/min.',
                    ],
                    [
                        'question' => 'Les capillaires forment un réseau très dense au contact des cellules. Quelle caractéristique rend les échanges possibles ?',
                        'choices' => [
                            ['choice_text' => 'leur paroi épaisse et musclée propulse le sang vers les cellules voisines', 'is_correct' => false],
                            ['choice_text' => 'leur diamètre très large permet un débit élevé', 'is_correct' => false],
                            ['choice_text' => 'leur paroi rigide isole le sang des cellules', 'is_correct' => false],
                            ['choice_text' => 'leur paroi très fine laisse passer de petites molécules', 'is_correct' => true],
                        ],
                        'explanation' => 'Une paroi d’une seule couche de cellules permet les échanges de gaz et de nutriments.',
                    ],
                    [
                        'question' => 'Après une course, Léa respire rapidement pendant quelques minutes. Quelle explication convient le mieux ?',
                        'choices' => [
                            ['choice_text' => 'le cerveau réduit la demande en dioxygène', 'is_correct' => false],
                            ['choice_text' => 'le corps apporte plus de dioxygène et élimine plus de dioxyde de carbone', 'is_correct' => true],
                            ['choice_text' => 'le sang cesse de circuler dans les poumons', 'is_correct' => false],
                            ['choice_text' => 'les globules rouges se transforment en cellules musculaires pour récupérer plus vite après l’effort', 'is_correct' => false],
                        ],
                        'explanation' => 'Une ventilation accrue répond à la demande des muscles et évacue le dioxyde de carbone produit.',
                    ],
                ],
            ],
            [
                'title' => 'Élimination, eau et équilibre interne',
                'description' => 'Explorer le rôle des reins, de l’eau et des mécanismes qui maintiennent les constantes du milieu intérieur.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Quel organe filtre le sang et participe à la formation de l’urine ?',
                        'choices' => [
                            ['choice_text' => 'Le poumon', 'is_correct' => false],
                            ['choice_text' => 'Le pancréas', 'is_correct' => false],
                            ['choice_text' => 'Le rein', 'is_correct' => true],
                            ['choice_text' => 'La rate', 'is_correct' => false],
                        ],
                        'explanation' => 'Les reins filtrent le sang, réabsorbent les substances utiles et forment l’urine.',
                    ],
                    [
                        'question' => 'Quel déchet azoté est principalement éliminé dans l’urine humaine ?',
                        'choices' => [
                            ['choice_text' => 'L’urée', 'is_correct' => true],
                            ['choice_text' => 'Le dioxyde de carbone', 'is_correct' => false],
                            ['choice_text' => 'Le lactate', 'is_correct' => false],
                            ['choice_text' => 'Le glycogène', 'is_correct' => false],
                        ],
                        'explanation' => 'L’urée est produite surtout par le foie lors de la dégradation des acides aminés, puis éliminée par les reins.',
                    ],
                    [
                        'question' => 'Younes joue au football en plein été et son entraîneur lui rappelle de boire régulièrement. Quel est l’intérêt ?',
                        'choices' => [
                            ['choice_text' => 'l’eau remplace les nutriments dont son corps a besoin pendant l’effort physique', 'is_correct' => false],
                            ['choice_text' => 'l’eau empêche la sueur de se former', 'is_correct' => false],
                            ['choice_text' => 'l’eau transforme les protéines en énergie', 'is_correct' => false],
                            ['choice_text' => 'l’eau sert de milieu aux réactions et aide à réguler la température', 'is_correct' => true],
                        ],
                        'explanation' => 'L’eau intervient dans de nombreuses fonctions : réactions, transport, élimination et thermorégulation.',
                    ],
                    [
                        'question' => 'Imane transpire beaucoup lors d’une longue marche. Le soir, son urine est plus foncée. Qu’est-ce qui l’explique ?',
                        'choices' => [
                            ['choice_text' => 'ses reins produisent plus de dioxygène', 'is_correct' => false],
                            ['choice_text' => 'ses reins retiennent de l’eau, ce qui concentre son urine', 'is_correct' => true],
                            ['choice_text' => 'son cœur arrête de pomper pendant une grande partie de la journée', 'is_correct' => false],
                            ['choice_text' => 'son intestin transforme l’urine en sang', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand le corps perd de l’eau, les reins en retiennent davantage : l’urine devient plus concentrée.',
                    ],
                    [
                        'question' => 'Quel déchet est éliminé principalement par les poumons ?',
                        'choices' => [
                            ['choice_text' => 'l’urée', 'is_correct' => false],
                            ['choice_text' => 'la bile', 'is_correct' => false],
                            ['choice_text' => 'le dioxyde de carbone', 'is_correct' => true],
                            ['choice_text' => 'le glucose', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules produisent du dioxyde de carbone que le sang amène aux poumons, d’où il est rejeté à l’expiration.',
                    ],
                    [
                        'question' => 'La température du corps augmente après une longue exposition à la chaleur. Quelle réponse physiologique favorise son refroidissement ?',
                        'choices' => [
                            ['choice_text' => 'Augmentation de la transpiration et vasodilatation cutanée', 'is_correct' => true],
                            ['choice_text' => 'Fermeture des vaisseaux de la peau pour garder la chaleur', 'is_correct' => false],
                            ['choice_text' => 'Frissons qui produisent de la chaleur musculaire', 'is_correct' => false],
                            ['choice_text' => 'Diminution de la transpiration', 'is_correct' => false],
                        ],
                        'explanation' => 'La sueur qui s’évapore et les vaisseaux cutanés dilatés évacuent la chaleur vers l’extérieur.',
                    ],
                    [
                        'question' => 'En temps normal, l’urine contient très peu de glucose. Cela s’explique par le fait que :',
                        'choices' => [
                            ['choice_text' => 'le foie transforme le glucose en urée avant la filtration', 'is_correct' => false],
                            ['choice_text' => 'le glucose ne peut pas traverser la paroi des vaisseaux', 'is_correct' => false],
                            ['choice_text' => 'les reins réabsorbent presque tout le glucose filtré', 'is_correct' => true],
                            ['choice_text' => 'le glucose est détruit par l’acidité de l’urine', 'is_correct' => false],
                        ],
                        'explanation' => 'Le glucose filtré est presque entièrement récupéré ; sa présence notable dans l’urine signale un déséquilibre.',
                    ],
                    [
                        'question' => 'Quel ensemble correspond le mieux à des fonctions des reins ?',
                        'choices' => [
                            ['choice_text' => 'Digestion des aliments, vision et audition', 'is_correct' => false],
                            ['choice_text' => 'Production de bile, de salive et d’insuline pour la digestion des aliments', 'is_correct' => false],
                            ['choice_text' => 'Contraction des muscles volontaires', 'is_correct' => false],
                            ['choice_text' => 'Élimination de déchets, régulation de l’eau et équilibre acido-basique', 'is_correct' => true],
                        ],
                        'explanation' => 'Les reins éliminent des déchets et régulent l’eau, les ions et l’équilibre acido-basique.',
                    ],
                    [
                        'question' => 'Une personne perd beaucoup d’eau sans boire suffisamment. Quel effet est le plus probable ?',
                        'choices' => [
                            ['choice_text' => 'Le volume d’eau corporelle augmente et la soif disparaît', 'is_correct' => false],
                            ['choice_text' => 'Le volume d’eau corporelle diminue et la soif augmente', 'is_correct' => true],
                            ['choice_text' => 'Le volume d’eau corporelle reste stable et la soif augmente', 'is_correct' => false],
                            ['choice_text' => 'Le volume d’eau corporelle diminue mais la soif diminue aussi', 'is_correct' => false],
                        ],
                        'explanation' => 'La perte d’eau réduit le compartiment hydrique et déclenche la soif ainsi que des mécanismes de conservation.',
                    ],
                    [
                        'question' => 'Les reins filtrent environ 180 litres de liquide par jour mais ne produisent que 1,5 litre d’urine. Quelle part du liquide filtré est réabsorbée ?',
                        'choices' => [
                            ['choice_text' => 'plus de 99 %', 'is_correct' => true],
                            ['choice_text' => 'environ 50 %', 'is_correct' => false],
                            ['choice_text' => 'environ 90 %', 'is_correct' => false],
                            ['choice_text' => 'moins de 1 %', 'is_correct' => false],
                        ],
                        'explanation' => '(180 − 1,5) ÷ 180 ≈ 0,99 : plus de 99 % du liquide filtré retourne dans le sang.',
                    ],
                ],
            ],
            [
                'title' => 'Communication nerveuse, hormones et sens',
                'description' => 'Comprendre comment le système nerveux et les hormones permettent au corps de recevoir des informations et de coordonner ses réponses.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Quel organe reçoit et traite une grande partie des informations nerveuses ?',
                        'choices' => [
                            ['choice_text' => 'Le rein', 'is_correct' => false],
                            ['choice_text' => 'Le cerveau', 'is_correct' => true],
                            ['choice_text' => 'Le foie', 'is_correct' => false],
                            ['choice_text' => 'L’estomac', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cerveau reçoit, traite et intègre de nombreuses informations sensorielles et commande de nombreuses réponses.',
                    ],
                    [
                        'question' => 'Quel type de cellule est spécialisé dans la transmission rapide de signaux nerveux ?',
                        'choices' => [
                            ['choice_text' => 'Le globule rouge', 'is_correct' => false],
                            ['choice_text' => 'L’adipocyte', 'is_correct' => false],
                            ['choice_text' => 'Le neurone', 'is_correct' => true],
                            ['choice_text' => 'L’ostéocyte', 'is_correct' => false],
                        ],
                        'explanation' => 'Le neurone est spécialisé dans la réception et la transmission de signaux électriques et chimiques.',
                    ],
                    [
                        'question' => 'Salma retire la main d’une casserole brûlante avant même d’avoir pensé à ce qu’elle faisait. Qu’est-ce qui rend cette réaction si rapide ?',
                        'choices' => [
                            ['choice_text' => 'un arc réflexe, circuit nerveux court passant par la moelle', 'is_correct' => true],
                            ['choice_text' => 'un message hormonal transporté par le sang', 'is_correct' => false],
                            ['choice_text' => 'une analyse détaillée par le cerveau avant le mouvement de la main', 'is_correct' => false],
                            ['choice_text' => 'une contraction des os de la main', 'is_correct' => false],
                        ],
                        'explanation' => 'Le réflexe court-circuite l’analyse consciente : le message va de la peau à la moelle, puis revient au muscle.',
                    ],
                    [
                        'question' => 'Quelle différence distingue une hormone d’un message nerveux ?',
                        'choices' => [
                            ['choice_text' => 'une hormone circule dans les neurones ; un message nerveux est transporté par le sang vers les organes', 'is_correct' => false],
                            ['choice_text' => 'une hormone agit en quelques millisecondes ; un message nerveux en plusieurs heures', 'is_correct' => false],
                            ['choice_text' => 'une hormone est un signal électrique ; un message nerveux est un composé chimique', 'is_correct' => false],
                            ['choice_text' => 'une hormone est un messager chimique porté par le sang ; un message nerveux suit les neurones', 'is_correct' => true],
                        ],
                        'explanation' => 'Les hormones empruntent le sang pour atteindre leurs cellules cibles ; les neurones transmettent des signaux le long de leurs prolongements.',
                    ],
                    [
                        'question' => 'Quelle structure de l’œil règle la quantité de lumière qui entre ?',
                        'choices' => [
                            ['choice_text' => 'L’iris', 'is_correct' => true],
                            ['choice_text' => 'La rétine', 'is_correct' => false],
                            ['choice_text' => 'Le cristallin', 'is_correct' => false],
                            ['choice_text' => 'La cornée', 'is_correct' => false],
                        ],
                        'explanation' => 'L’iris modifie le diamètre de la pupille et contrôle ainsi la quantité de lumière qui pénètre dans l’œil.',
                    ],
                    [
                        'question' => 'Quelle partie de l’oreille vibre sous l’effet des sons et transmet ces vibrations ?',
                        'choices' => [
                            ['choice_text' => 'La rétine', 'is_correct' => false],
                            ['choice_text' => 'La pupille', 'is_correct' => false],
                            ['choice_text' => 'Le nerf optique', 'is_correct' => false],
                            ['choice_text' => 'Le tympan', 'is_correct' => true],
                        ],
                        'explanation' => 'Le tympan est une membrane qui vibre sous l’effet des ondes sonores et les transmet à l’oreille moyenne.',
                    ],
                    [
                        'question' => 'Après un repas, quelle hormone aide à faire baisser la glycémie en favorisant l’entrée du glucose dans les cellules ?',
                        'choices' => [
                            ['choice_text' => 'L’adrénaline', 'is_correct' => false],
                            ['choice_text' => 'L’insuline', 'is_correct' => true],
                            ['choice_text' => 'La mélatonine', 'is_correct' => false],
                            ['choice_text' => 'La thyroxine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’insuline favorise la captation du glucose par plusieurs tissus et contribue à réduire la glycémie.',
                    ],
                    [
                        'question' => 'Un élève entend une sonnerie, tourne la tête puis se dirige vers la sortie. Quelle séquence résume le mieux l’événement ?',
                        'choices' => [
                            ['choice_text' => 'Commande motrice → réception sensorielle → traitement de l’information', 'is_correct' => false],
                            ['choice_text' => 'Traitement de l’information → commande motrice → réception sensorielle', 'is_correct' => false],
                            ['choice_text' => 'Réception sensorielle → traitement de l’information → commande motrice', 'is_correct' => true],
                            ['choice_text' => 'Réception sensorielle → commande motrice → traitement de l’information', 'is_correct' => false],
                        ],
                        'explanation' => 'Les récepteurs détectent le stimulus, le système nerveux traite l’information puis commande la réponse motrice.',
                    ],
                    [
                        'question' => 'Un récepteur sensoriel, comme les cellules de la rétine, a pour rôle de :',
                        'choices' => [
                            ['choice_text' => 'fabriquer les hormones qui commandent la réponse de l’organisme au stimulus', 'is_correct' => false],
                            ['choice_text' => 'contracter les muscles qui répondent au stimulus', 'is_correct' => false],
                            ['choice_text' => 'stocker les informations sous forme de souvenirs', 'is_correct' => false],
                            ['choice_text' => 'détecter un changement du milieu et le transformer en signal nerveux', 'is_correct' => true],
                        ],
                        'explanation' => 'Les récepteurs sensoriels traduisent une information physique ou chimique en signal que le système nerveux peut utiliser.',
                    ],
                    [
                        'question' => 'Un stress soudain accélère le rythme cardiaque. Quel messager intervient dans cette réponse rapide ?',
                        'choices' => [
                            ['choice_text' => 'L’insuline', 'is_correct' => false],
                            ['choice_text' => 'La bile', 'is_correct' => false],
                            ['choice_text' => 'L’adrénaline', 'is_correct' => true],
                            ['choice_text' => 'L’urée', 'is_correct' => false],
                        ],
                        'explanation' => 'L’adrénaline, libérée par les glandes surrénales, participe à la réponse rapide de l’organisme face à un stress.',
                    ],
                ],
            ],
            [
                'title' => 'Reproduction, croissance et développement',
                'description' => 'Aborder les bases de la reproduction humaine, de la fécondation, de la croissance et du développement.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Quelle cellule sexuelle est produite par les testicules ?',
                        'choices' => [
                            ['choice_text' => 'L’ovocyte', 'is_correct' => false],
                            ['choice_text' => 'Le globule rouge', 'is_correct' => false],
                            ['choice_text' => 'Le neurone', 'is_correct' => false],
                            ['choice_text' => 'Le spermatozoïde', 'is_correct' => true],
                        ],
                        'explanation' => 'Les testicules produisent les spermatozoïdes, gamètes mâles impliqués dans la reproduction.',
                    ],
                    [
                        'question' => 'Quelle cellule sexuelle est produite par les ovaires ?',
                        'choices' => [
                            ['choice_text' => 'Le spermatozoïde', 'is_correct' => false],
                            ['choice_text' => 'Le globule blanc', 'is_correct' => false],
                            ['choice_text' => 'L’ovocyte', 'is_correct' => true],
                            ['choice_text' => 'Le kératinocyte', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ovaires produisent les ovocytes, gamètes femelles.',
                    ],
                    [
                        'question' => 'La fécondation humaine correspond à :',
                        'choices' => [
                            ['choice_text' => 'la première division d’une cellule-œuf en deux cellules filles identiques entre elles', 'is_correct' => false],
                            ['choice_text' => 'la fusion d’un gamète mâle et d’un gamète femelle en une cellule-œuf', 'is_correct' => true],
                            ['choice_text' => 'la fixation de l’embryon dans la paroi de l’utérus', 'is_correct' => false],
                            ['choice_text' => 'la production de gamètes par les gonades', 'is_correct' => false],
                        ],
                        'explanation' => 'La fécondation réunit le matériel génétique des deux gamètes et forme une cellule-œuf, ou zygote.',
                    ],
                    [
                        'question' => 'Après la fécondation, que se produit-il d’abord pour permettre la croissance de l’embryon ?',
                        'choices' => [
                            ['choice_text' => 'Des divisions cellulaires successives', 'is_correct' => true],
                            ['choice_text' => 'Une disparition des cellules les plus anciennes', 'is_correct' => false],
                            ['choice_text' => 'Une transformation immédiate en fœtus complet', 'is_correct' => false],
                            ['choice_text' => 'Une production de globules rouges par le zygote', 'is_correct' => false],
                        ],
                        'explanation' => 'La cellule-œuf se divise de nombreuses fois, puis les cellules se spécialisent et s’organisent.',
                    ],
                    [
                        'question' => 'Quelle hormone est particulièrement associée au déclenchement de nombreux changements de la puberté chez les filles ?',
                        'choices' => [
                            ['choice_text' => 'L’insuline', 'is_correct' => false],
                            ['choice_text' => 'L’adrénaline', 'is_correct' => false],
                            ['choice_text' => 'L’urée', 'is_correct' => false],
                            ['choice_text' => 'Les œstrogènes', 'is_correct' => true],
                        ],
                        'explanation' => 'Les œstrogènes participent au développement des caractères sexuels secondaires féminins et au fonctionnement reproducteur.',
                    ],
                    [
                        'question' => 'Quel rôle jouent les chromosomes lors de la reproduction ?',
                        'choices' => [
                            ['choice_text' => 'Ils transportent le dioxygène de la mère vers l’embryon en croissance', 'is_correct' => false],
                            ['choice_text' => 'Ils portent l’information génétique transmise aux enfants', 'is_correct' => true],
                            ['choice_text' => 'Ils digèrent les nutriments pour l’embryon', 'is_correct' => false],
                            ['choice_text' => 'Ils filtrent le sang de la mère', 'is_correct' => false],
                        ],
                        'explanation' => 'Les chromosomes contiennent l’ADN et portent les gènes qui forment l’information génétique héritée.',
                    ],
                    [
                        'question' => 'Un adolescent grandit et sa masse corporelle augmente. Qu’est-ce qui contribue directement à cette croissance ?',
                        'choices' => [
                            ['choice_text' => 'La multiplication des cellules et l’augmentation de leur taille', 'is_correct' => true],
                            ['choice_text' => 'Le remplacement des cellules anciennes par des cellules plus grosses', 'is_correct' => false],
                            ['choice_text' => 'L’arrêt des divisions cellulaires dans les os et les muscles', 'is_correct' => false],
                            ['choice_text' => 'La transformation des globules rouges en cellules osseuses', 'is_correct' => false],
                        ],
                        'explanation' => 'La croissance repose sur la multiplication cellulaire, sur l’augmentation de la taille des cellules et sur leur spécialisation.',
                    ],
                    [
                        'question' => 'Pendant la grossesse, le sang de la mère et celui du fœtus ne se mélangent pas, mais des échanges ont lieu entre eux. Quel organe les permet ?',
                        'choices' => [
                            ['choice_text' => 'le cordon ombilical, qui mélange les deux sangs', 'is_correct' => false],
                            ['choice_text' => 'l’utérus, qui filtre le sang du fœtus', 'is_correct' => false],
                            ['choice_text' => 'le placenta, qui fait passer gaz, nutriments et déchets', 'is_correct' => true],
                            ['choice_text' => 'les poumons de la mère, qui oxygènent le fœtus directement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le placenta est une interface d’échanges : gaz, nutriments et déchets le traversent sans que les deux circulations se mélangent.',
                    ],
                    [
                        'question' => 'Quel événement marque le début d’un nouveau cycle menstruel ?',
                        'choices' => [
                            ['choice_text' => 'Le premier jour des règles', 'is_correct' => true],
                            ['choice_text' => 'L’ovulation', 'is_correct' => false],
                            ['choice_text' => 'La fécondation', 'is_correct' => false],
                            ['choice_text' => 'La fin des règles', 'is_correct' => false],
                        ],
                        'explanation' => 'Par convention, le premier jour des menstruations est le jour 1 du cycle.',
                    ],
                    [
                        'question' => 'Une famille se demande pourquoi deux enfants des mêmes parents peuvent être différents. Quelle explication est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ils reçoivent le même patrimoine génétique, mais pas le même sang', 'is_correct' => false],
                            ['choice_text' => 'Ils héritent de combinaisons génétiques différentes et subissent des influences du milieu', 'is_correct' => true],
                            ['choice_text' => 'Les chromosomes se modifient après la naissance selon l’alimentation et le mode de vie des parents', 'is_correct' => false],
                            ['choice_text' => 'L’environnement n’a pas d’effet sur le phénotype', 'is_correct' => false],
                        ],
                        'explanation' => 'La reproduction sexuée produit des combinaisons génétiques variées, et l’environnement modifie ensuite certains caractères.',
                    ],
                ],
            ],
            [
                'title' => 'Biologie humaine intégrée : situations de la vie quotidienne',
                'description' => 'Mobiliser les connaissances de base en biologie humaine dans des situations concrètes liées à l’alimentation, l’effort, le sommeil et la santé.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Un joueur mange des pâtes avant son match. Quel est l’intérêt pour ses muscles ?',
                        'choices' => [
                            ['choice_text' => 'les glucides fournissent du glucose, que les cellules transforment en ATP', 'is_correct' => true],
                            ['choice_text' => 'les glucides remplacent le dioxygène dans les poumons', 'is_correct' => false],
                            ['choice_text' => 'les glucides fabriquent directement du tissu osseux', 'is_correct' => false],
                            ['choice_text' => 'les glucides ralentissent le cœur pour économiser l’énergie pendant le match', 'is_correct' => false],
                        ],
                        'explanation' => 'Le glucose est un carburant majeur des cellules, qui l’utilisent pour fabriquer de l’ATP.',
                    ],
                    [
                        'question' => 'Un vaccin prépare l’organisme à une maladie en stimulant :',
                        'choices' => [
                            ['choice_text' => 'les reins, qui éliminent les microbes dans l’urine', 'is_correct' => false],
                            ['choice_text' => 'l’estomac, qui digère les microbes avant qu’ils entrent dans le sang', 'is_correct' => false],
                            ['choice_text' => 'la moelle épinière, qui détruit les microbes', 'is_correct' => false],
                            ['choice_text' => 'le système immunitaire, qui garde la mémoire de l’agent infectieux', 'is_correct' => true],
                        ],
                        'explanation' => 'Le vaccin entraîne les défenses du corps, qui reconnaîtront plus vite le vrai microbe ensuite.',
                    ],
                    [
                        'question' => 'Un adolescent consomme 2 400 kcal par jour et en dépense 2 100. Quel est son bilan énergétique quotidien ?',
                        'choices' => [
                            ['choice_text' => '−300 kcal, soit un déficit', 'is_correct' => false],
                            ['choice_text' => '+2 100 kcal', 'is_correct' => false],
                            ['choice_text' => '+300 kcal, soit un excédent', 'is_correct' => true],
                            ['choice_text' => '0 kcal, soit un équilibre', 'is_correct' => false],
                        ],
                        'explanation' => '2 400 − 2 100 = +300 kcal : les apports dépassent les dépenses.',
                    ],
                    [
                        'question' => 'Une personne pèse 64 kg et mesure 1,60 m. Son indice de masse corporelle (masse ÷ taille²) vaut :',
                        'choices' => [
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '164', 'is_correct' => false],
                        ],
                        'explanation' => '1,60² = 2,56 et 64 ÷ 2,56 = 25.',
                    ],
                    [
                        'question' => 'Après une nuit blanche, Anas a du mal à se concentrer. Qu’est-ce que cela montre sur le sommeil ?',
                        'choices' => [
                            ['choice_text' => 'il participe à la récupération et au bon fonctionnement du cerveau', 'is_correct' => true],
                            ['choice_text' => 'il remplace l’alimentation pendant plusieurs jours consécutifs sans manger', 'is_correct' => false],
                            ['choice_text' => 'il arrête l’activité des neurones pendant la nuit', 'is_correct' => false],
                            ['choice_text' => 'il sert à reposer les muscles et non le cerveau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sommeil accompagne la récupération et intervient dans la mémoire et la concentration.',
                    ],
                    [
                        'question' => 'Une personne mange un repas très salé puis boit beaucoup d’eau. Quelle idée explique cette réponse ?',
                        'choices' => [
                            ['choice_text' => 'le sel remplace l’eau dans les cellules', 'is_correct' => false],
                            ['choice_text' => 'les reins cessent de filtrer le sang pendant la digestion', 'is_correct' => false],
                            ['choice_text' => 'l’organisme règle son équilibre en eau et en sels', 'is_correct' => true],
                            ['choice_text' => 'le cerveau reçoit moins de sang après un repas salé', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau et les ions doivent rester en proportions compatibles avec la vie des cellules ; la soif et les reins y veillent.',
                    ],
                    [
                        'question' => 'Lors d’une petite coupure, le sang forme progressivement un caillot. Quelle fonction du sang intervient ?',
                        'choices' => [
                            ['choice_text' => 'La digestion, qui transforme les aliments', 'is_correct' => false],
                            ['choice_text' => 'La coagulation, qui limite la perte de sang', 'is_correct' => true],
                            ['choice_text' => 'La respiration cellulaire, qui produit l’ATP', 'is_correct' => false],
                            ['choice_text' => 'La filtration rénale, qui forme l’urine', 'is_correct' => false],
                        ],
                        'explanation' => 'La coagulation déclenche une succession de réactions qui forme un caillot et arrête le saignement.',
                    ],
                    [
                        'question' => 'Une personne mange trop peu de vitamine C pendant longtemps. Quelle fonction peut être perturbée ?',
                        'choices' => [
                            ['choice_text' => 'Le transport du dioxygène par l’hémoglobine dans les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'La formation de l’urine', 'is_correct' => false],
                            ['choice_text' => 'La production d’insuline par le pancréas', 'is_correct' => false],
                            ['choice_text' => 'La synthèse de collagène et le maintien de tissus comme la peau', 'is_correct' => true],
                        ],
                        'explanation' => 'La vitamine C est nécessaire à plusieurs réactions, notamment à la fabrication normale du collagène.',
                    ],
                    [
                        'question' => 'Anis mange chaque jour les mêmes trois aliments. Qu’est-ce qui lui manque probablement ?',
                        'choices' => [
                            ['choice_text' => 'du dioxygène, que seuls certains aliments contiennent en grande quantité', 'is_correct' => false],
                            ['choice_text' => 'de l’ADN, indispensable à la digestion', 'is_correct' => false],
                            ['choice_text' => 'des nutriments et vitamines qu’apporteraient d’autres aliments', 'is_correct' => true],
                            ['choice_text' => 'd’eau, qui ne se trouve que dans les fruits', 'is_correct' => false],
                        ],
                        'explanation' => 'Une alimentation variée augmente les chances de couvrir tous les besoins en nutriments, vitamines et minéraux.',
                    ],
                    [
                        'question' => 'Après un sprint, la respiration et la fréquence cardiaque de Nadia redescendent progressivement. Que montre cette évolution ?',
                        'choices' => [
                            ['choice_text' => 'le corps a arrêté de produire de l’énergie et ne fonctionne plus qu’au ralenti', 'is_correct' => false],
                            ['choice_text' => 'les reins ont filtré l’excès d’effort', 'is_correct' => false],
                            ['choice_text' => 'les muscles n’utilisent plus de nutriments', 'is_correct' => false],
                            ['choice_text' => 'les mécanismes de régulation ramènent peu à peu les fonctions au repos', 'is_correct' => true],
                        ],
                        'explanation' => 'Après l’effort, la ventilation, la circulation et le métabolisme reviennent progressivement aux valeurs de repos.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $settings = $quizData['settings'];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'] ?? 10,
                    'passing_score' => $settings['passing_score'] ?? 80,
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