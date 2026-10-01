<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class CellBiologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'cell-biology')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 20, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 25, 'passing_score' => 60],
            6 => ['duration' => 15, 'passing_score' => 55],
            7 => ['duration' => 25, 'passing_score' => 65],
            8 => ['duration' => 25, 'passing_score' => 65]
        ];

        $quizzes = [
            [
                'title' => 'Organisation générale de la cellule',
                'description' => 'Découvrez les caractéristiques communes des cellules, les différences entre cellules procaryotes et eucaryotes et les principaux niveaux d’organisation cellulaire.',
                'questions' => [
                    [
                        'question' => 'Une cellule est considérée comme l’unité fondamentale du vivant parce qu’elle...',
                        'choices' => [
                            ['choice_text' => 'assure les fonctions essentielles nécessaires à la vie', 'is_correct' => true],
                            ['choice_text' => 'est toujours visible à l’œil nu', 'is_correct' => false],
                            ['choice_text' => 'possède obligatoirement un noyau', 'is_correct' => false],
                            ['choice_text' => 'est toujours constituée de plusieurs tissus', 'is_correct' => false],
                        ],
                        'explanation' => 'La cellule réalise les fonctions essentielles du vivant. Toutes les cellules n’ont pas de noyau et la plupart sont trop petites pour être vues à l’œil nu.'
                    ],
                    [
                        'question' => 'Quel élément entoure directement le cytoplasme de toutes les cellules connues ?',
                        'choices' => [
                            ['choice_text' => 'La membrane plasmique', 'is_correct' => true],
                            ['choice_text' => 'Le noyau', 'is_correct' => false],
                            ['choice_text' => 'La paroi cellulaire', 'is_correct' => false],
                            ['choice_text' => 'La mitochondrie', 'is_correct' => false],
                        ],
                        'explanation' => 'La membrane plasmique délimite la cellule et contrôle les échanges avec le milieu. La paroi cellulaire n’est pas présente chez les cellules animales.'
                    ],
                    [
                        'question' => 'Une bactérie observée au microscope ne possède pas de noyau délimité par une membrane. Dans quelle catégorie la classe-t-on ?',
                        'choices' => [
                            ['choice_text' => 'Cellule procaryote', 'is_correct' => true],
                            ['choice_text' => 'Cellule eucaryote', 'is_correct' => false],
                            ['choice_text' => 'Cellule végétale uniquement', 'is_correct' => false],
                            ['choice_text' => 'Cellule spécialisée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bactéries sont des procaryotes : leur matériel génétique n’est pas enfermé dans un noyau entouré d’une membrane.'
                    ],
                    [
                        'question' => 'Quelle association correspond à une cellule eucaryote ?',
                        'choices' => [
                            ['choice_text' => 'Noyau + organites membranaires', 'is_correct' => true],
                            ['choice_text' => 'ADN libre sans compartiments + absence d’organites', 'is_correct' => false],
                            ['choice_text' => 'Paroi minérale + absence de membrane', 'is_correct' => false],
                            ['choice_text' => 'Uniquement membrane plasmique + ribosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules eucaryotes possèdent un noyau et plusieurs organites délimités par des membranes, ce qui permet une compartimentation interne.'
                    ],
                    [
                        'question' => 'Une cellule musculaire et une cellule nerveuse contiennent le même type général de matériel génétique, mais leurs formes et leurs fonctions diffèrent. Cette observation illustre surtout...',
                        'choices' => [
                            ['choice_text' => 'La différenciation cellulaire', 'is_correct' => true],
                            ['choice_text' => 'La disparition de l’ADN', 'is_correct' => false],
                            ['choice_text' => 'La transformation en procaryote', 'is_correct' => false],
                            ['choice_text' => 'La multiplication des espèces', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors de la différenciation, des cellules ayant le même génome expriment des ensembles de gènes différents et acquièrent des fonctions spécialisées.'
                    ],
                    [
                        'question' => 'Quel ordre va du plus simple au plus complexe ?',
                        'choices' => [
                            ['choice_text' => 'Molécule → organite → cellule → tissu', 'is_correct' => true],
                            ['choice_text' => 'Cellule → molécule → tissu → organite', 'is_correct' => false],
                            ['choice_text' => 'Tissu → cellule → organite → molécule', 'is_correct' => false],
                            ['choice_text' => 'Organite → tissu → molécule → cellule', 'is_correct' => false],
                        ],
                        'explanation' => 'Une molécule peut constituer un organite, qui appartient à une cellule ; des cellules organisées peuvent ensuite former un tissu.'
                    ],
                    [
                        'question' => 'Une cellule augmente fortement de taille sans augmenter sa surface. Quel problème apparaît le plus directement ?',
                        'choices' => [
                            ['choice_text' => 'Les échanges avec le milieu deviennent moins efficaces', 'is_correct' => true],
                            ['choice_text' => 'L’ADN disparaît automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Les ribosomes cessent toujours de fonctionner', 'is_correct' => false],
                            ['choice_text' => 'La cellule devient forcément procaryote', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand le volume augmente plus vite que la surface, le rapport surface/volume diminue et les échanges avec le milieu deviennent relativement moins efficaces.'
                    ],
                    [
                        'question' => 'Une cellule possède une paroi, des chloroplastes et une grande vacuole centrale. Quelle conclusion est la plus raisonnable ?',
                        'choices' => [
                            ['choice_text' => 'Il s’agit probablement d’une cellule végétale', 'is_correct' => true],
                            ['choice_text' => 'Il s’agit nécessairement d’une cellule animale', 'is_correct' => false],
                            ['choice_text' => 'Il s’agit forcément d’une bactérie', 'is_correct' => false],
                            ['choice_text' => 'Il s’agit d’un globule rouge', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence d’une paroi, de chloroplastes et d’une grande vacuole est caractéristique des cellules végétales eucaryotes.'
                    ],
                    [
                        'question' => 'Un élève affirme : « Toutes les cellules possèdent une paroi cellulaire ». Quelle correction faut-il lui apporter ?',
                        'choices' => [
                            ['choice_text' => 'Les cellules animales ont une membrane plasmique mais pas de paroi cellulaire', 'is_correct' => true],
                            ['choice_text' => 'Toutes les cellules animales ont une paroi très fine', 'is_correct' => false],
                            ['choice_text' => 'Seules les cellules animales ont une paroi', 'is_correct' => false],
                            ['choice_text' => 'La paroi remplace toujours la membrane plasmique', 'is_correct' => false],
                        ],
                        'explanation' => 'La membrane plasmique est commune à toutes les cellules, alors que la paroi est une structure supplémentaire présente notamment chez les végétaux et les bactéries.'
                    ],
                    [
                        'question' => 'Deux cellules vivent dans des milieux différents mais doivent toutes deux maintenir des conditions internes relativement stables. Quelle propriété générale cela met-elle en évidence ?',
                        'choices' => [
                            ['choice_text' => 'La capacité à maintenir une certaine homéostasie', 'is_correct' => true],
                            ['choice_text' => 'La présence obligatoire de chloroplastes', 'is_correct' => false],
                            ['choice_text' => 'La production obligatoire d’oxygène', 'is_correct' => false],
                            ['choice_text' => 'La disparition des échanges avec le milieu', 'is_correct' => false],
                        ],
                        'explanation' => 'L’homéostasie correspond au maintien de conditions internes relativement stables malgré les variations du milieu extérieur.'
                    ],
                ],
            ],
            [
                'title' => 'Membrane plasmique et transports',
                'description' => 'Apprenez à reconnaître la structure de la membrane plasmique et à distinguer diffusion, osmose, transport facilité et transport actif à partir de situations simples.',
                'questions' => [
                    [
                        'question' => 'La membrane plasmique est principalement constituée d’une bicouche de...',
                        'choices' => [
                            ['choice_text' => 'Phospholipides', 'is_correct' => true],
                            ['choice_text' => 'ADN', 'is_correct' => false],
                            ['choice_text' => 'Glucose', 'is_correct' => false],
                            ['choice_text' => 'Acides aminés', 'is_correct' => false],
                        ],
                        'explanation' => 'Les phospholipides s’organisent en bicouche : leurs têtes hydrophiles sont tournées vers les milieux aqueux et leurs queues hydrophobes vers l’intérieur.'
                    ],
                    [
                        'question' => 'Pourquoi dit-on que la membrane plasmique est sélectivement perméable ?',
                        'choices' => [
                            ['choice_text' => 'Elle laisse passer certaines substances plus facilement que d’autres', 'is_correct' => true],
                            ['choice_text' => 'Elle laisse absolument tout passer', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche tout échange avec le milieu', 'is_correct' => false],
                            ['choice_text' => 'Elle ne contient que des protéines', 'is_correct' => false],
                        ],
                        'explanation' => 'La membrane contrôle les échanges : certaines molécules traversent directement, d’autres utilisent des protéines membranaires ou des mécanismes de transport spécifiques.'
                    ],
                    [
                        'question' => 'Une molécule se déplace spontanément d’une zone où elle est très concentrée vers une zone où elle est moins concentrée, sans dépense d’ATP. Il s’agit de...',
                        'choices' => [
                            ['choice_text' => 'Diffusion', 'is_correct' => true],
                            ['choice_text' => 'Transport actif', 'is_correct' => false],
                            ['choice_text' => 'Endocytose', 'is_correct' => false],
                            ['choice_text' => 'Exocytose', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffusion est un déplacement passif dans le sens du gradient de concentration et ne nécessite pas directement d’énergie cellulaire.'
                    ],
                    [
                        'question' => 'L’osmose concerne principalement le déplacement de...',
                        'choices' => [
                            ['choice_text' => 'L’eau à travers une membrane perméable à l’eau', 'is_correct' => true],
                            ['choice_text' => 'L’ADN vers le noyau', 'is_correct' => false],
                            ['choice_text' => 'Des protéines vers les ribosomes', 'is_correct' => false],
                            ['choice_text' => 'De l’ATP vers les mitochondries', 'is_correct' => false],
                        ],
                        'explanation' => 'L’osmose est le déplacement net de l’eau à travers une membrane semi-perméable, en réponse notamment à une différence de concentration en solutés.'
                    ],
                    [
                        'question' => 'Une cellule animale est placée dans une solution très concentrée en solutés par rapport à son cytoplasme. Que risque-t-il de se produire ?',
                        'choices' => [
                            ['choice_text' => 'L’eau sort de la cellule et son volume diminue', 'is_correct' => true],
                            ['choice_text' => 'L’eau entre massivement et la cellule gonfle', 'is_correct' => false],
                            ['choice_text' => 'La cellule produit immédiatement des chloroplastes', 'is_correct' => false],
                            ['choice_text' => 'Le noyau sort de la cellule', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un milieu hypertonique, l’eau quitte la cellule par osmose, ce qui peut provoquer une diminution de son volume.'
                    ],
                    [
                        'question' => 'Le glucose traverse une membrane grâce à une protéine de transport, sans utilisation directe d’ATP et en suivant son gradient. Quel mécanisme correspond le mieux ?',
                        'choices' => [
                            ['choice_text' => 'Diffusion facilitée', 'is_correct' => true],
                            ['choice_text' => 'Transport actif primaire', 'is_correct' => false],
                            ['choice_text' => 'Exocytose', 'is_correct' => false],
                            ['choice_text' => 'Osmose', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffusion facilitée utilise une protéine membranaire mais reste passive lorsque la substance suit son gradient de concentration.'
                    ],
                    [
                        'question' => 'Une pompe membranaire déplace des ions contre leur gradient en utilisant l’énergie de l’ATP. Pourquoi ce transport est-il dit actif ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il nécessite de l’énergie pour déplacer les ions contre leur gradient', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il se produit uniquement dans les cellules végétales', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il ne fait intervenir aucune protéine', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il déplace toujours de l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le transport actif consomme de l’énergie, souvent sous forme d’ATP, afin de déplacer une substance contre son gradient électrochimique.'
                    ],
                    [
                        'question' => 'Une cellule englobe une grosse particule en formant une vésicule à partir de sa membrane. Ce phénomène est...',
                        'choices' => [
                            ['choice_text' => 'Une endocytose', 'is_correct' => true],
                            ['choice_text' => 'Une diffusion simple', 'is_correct' => false],
                            ['choice_text' => 'Une osmose', 'is_correct' => false],
                            ['choice_text' => 'Une exocytose', 'is_correct' => false],
                        ],
                        'explanation' => 'L’endocytose permet à la cellule d’introduire des particules ou des molécules volumineuses grâce à une vésicule formée par invagination de la membrane.'
                    ],
                    [
                        'question' => 'Une cellule libère une protéine sécrétée en fusionnant une vésicule avec sa membrane plasmique. Quel mécanisme intervient ?',
                        'choices' => [
                            ['choice_text' => 'Exocytose', 'is_correct' => true],
                            ['choice_text' => 'Endocytose', 'is_correct' => false],
                            ['choice_text' => 'Diffusion simple', 'is_correct' => false],
                            ['choice_text' => 'Osmose', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors de l’exocytose, une vésicule intracellulaire fusionne avec la membrane plasmique et libère son contenu à l’extérieur.'
                    ],
                    [
                        'question' => 'Un étudiant confond diffusion et transport actif parce que les deux peuvent faire intervenir des protéines. Quel critère permet surtout de les distinguer ?',
                        'choices' => [
                            ['choice_text' => 'La nécessité d’une source d’énergie pour le transport actif', 'is_correct' => true],
                            ['choice_text' => 'La présence d’une membrane plasmique', 'is_correct' => false],
                            ['choice_text' => 'La présence d’eau dans la cellule', 'is_correct' => false],
                            ['choice_text' => 'La présence de phospholipides', 'is_correct' => false],
                        ],
                        'explanation' => 'La distinction essentielle est énergétique : un transport actif nécessite une source d’énergie pour effectuer un déplacement contre le gradient, contrairement à une diffusion passive.'
                    ],
                ],
            ],
            [
                'title' => 'Organites et fonctions cellulaires',
                'description' => 'Identifiez les principaux organites des cellules eucaryotes et reliez leur structure à leur rôle dans le fonctionnement de la cellule.',
                'questions' => [
                    [
                        'question' => 'Quel organite contient la majeure partie de l’ADN d’une cellule eucaryote ?',
                        'choices' => [
                            ['choice_text' => 'Le noyau', 'is_correct' => true],
                            ['choice_text' => 'Le lysosome', 'is_correct' => false],
                            ['choice_text' => 'L’appareil de Golgi', 'is_correct' => false],
                            ['choice_text' => 'La vacuole', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une cellule eucaryote, la majeure partie du matériel génétique se trouve dans le noyau, même si certaines mitochondries et certains chloroplastes possèdent aussi leur propre ADN.'
                    ],
                    [
                        'question' => 'Quel est le rôle général des ribosomes ?',
                        'choices' => [
                            ['choice_text' => 'Fabriquer les protéines', 'is_correct' => true],
                            ['choice_text' => 'Stocker l’eau', 'is_correct' => false],
                            ['choice_text' => 'Dégrader le glucose', 'is_correct' => false],
                            ['choice_text' => 'Produire directement les chromosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ribosomes assemblent les acides aminés selon l’information portée par l’ARN messager afin de fabriquer des protéines.'
                    ],
                    [
                        'question' => 'Une cellule a besoin de beaucoup d’énergie utilisable pour son activité. Quel organite est particulièrement important pour cette production ?',
                        'choices' => [
                            ['choice_text' => 'La mitochondrie', 'is_correct' => true],
                            ['choice_text' => 'Le lysosome', 'is_correct' => false],
                            ['choice_text' => 'Le noyau', 'is_correct' => false],
                            ['choice_text' => 'Le centriole', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mitochondries réalisent une grande partie de la respiration cellulaire et produisent de l’ATP, une forme d’énergie directement utilisable par de nombreux processus cellulaires.'
                    ],
                    [
                        'question' => 'Quel organite est associé à la photosynthèse dans une cellule végétale ?',
                        'choices' => [
                            ['choice_text' => 'Le chloroplaste', 'is_correct' => true],
                            ['choice_text' => 'Le ribosome', 'is_correct' => false],
                            ['choice_text' => 'Le lysosome', 'is_correct' => false],
                            ['choice_text' => 'Le centrosome', 'is_correct' => false],
                        ],
                        'explanation' => 'Les chloroplastes contiennent notamment la chlorophylle et sont le siège de la photosynthèse chez les cellules végétales et les algues.'
                    ],
                    [
                        'question' => 'Le réticulum endoplasmique rugueux porte de nombreux ribosomes. Pourquoi cette association est-elle utile ?',
                        'choices' => [
                            ['choice_text' => 'Il participe à la synthèse et au début du traitement de certaines protéines', 'is_correct' => true],
                            ['choice_text' => 'Il produit les chromosomes pendant la mitose', 'is_correct' => false],
                            ['choice_text' => 'Il détruit toutes les protéines de la cellule', 'is_correct' => false],
                            ['choice_text' => 'Il pompe directement l’eau hors de la cellule', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ribosomes fixés au réticulum endoplasmique rugueux fabriquent des protéines destinées notamment à être sécrétées, insérées dans des membranes ou acheminées vers certains compartiments.'
                    ],
                    [
                        'question' => 'Une protéine nouvellement fabriquée doit être triée, modifiée puis envoyée vers sa destination. Quel organite joue un rôle central dans ces étapes ?',
                        'choices' => [
                            ['choice_text' => 'L’appareil de Golgi', 'is_correct' => true],
                            ['choice_text' => 'Le chloroplaste', 'is_correct' => false],
                            ['choice_text' => 'Le nucléole', 'is_correct' => false],
                            ['choice_text' => 'La mitochondrie', 'is_correct' => false],
                        ],
                        'explanation' => 'L’appareil de Golgi modifie, trie et conditionne de nombreuses protéines et lipides dans des vésicules qui les dirigent vers leur destination.'
                    ],
                    [
                        'question' => 'Une cellule élimine des composants cellulaires usés à l’aide de petites structures riches en enzymes digestives. De quelles structures s’agit-il chez de nombreuses cellules animales ?',
                        'choices' => [
                            ['choice_text' => 'Des lysosomes', 'is_correct' => true],
                            ['choice_text' => 'Des chloroplastes', 'is_correct' => false],
                            ['choice_text' => 'Des ribosomes', 'is_correct' => false],
                            ['choice_text' => 'Des nucléoles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lysosomes contiennent des enzymes capables de dégrader divers composants cellulaires et matériaux internalisés.'
                    ],
                    [
                        'question' => 'Une cellule végétale peut rester ferme grâce à une grande structure remplie de solution aqueuse. Quelle structure est concernée ?',
                        'choices' => [
                            ['choice_text' => 'La vacuole centrale', 'is_correct' => true],
                            ['choice_text' => 'Le noyau', 'is_correct' => false],
                            ['choice_text' => 'Le ribosome', 'is_correct' => false],
                            ['choice_text' => 'Le centrosome', 'is_correct' => false],
                        ],
                        'explanation' => 'La vacuole centrale contient notamment de l’eau et des solutés et contribue à la pression de turgescence qui aide à maintenir la rigidité des cellules végétales.'
                    ],
                    [
                        'question' => 'Pourquoi une cellule possède-t-elle plusieurs organites spécialisés plutôt qu’un seul compartiment réalisant toutes les tâches ?',
                        'choices' => [
                            ['choice_text' => 'La compartimentation permet d’organiser des réactions différentes dans des milieux adaptés', 'is_correct' => true],
                            ['choice_text' => 'Les organites remplacent tous les échanges avec le milieu', 'is_correct' => false],
                            ['choice_text' => 'Chaque organite contient nécessairement un noyau complet', 'is_correct' => false],
                            ['choice_text' => 'La cellule ne pourrait pas contenir de protéines sans organites', 'is_correct' => false],
                        ],
                        'explanation' => 'La compartimentation sépare des fonctions et crée des conditions adaptées à différentes réactions, ce qui améliore l’organisation du fonctionnement cellulaire.'
                    ],
                    [
                        'question' => 'Si les ribosomes d’une cellule cessaient complètement de fonctionner, quelle conséquence serait la plus directe ?',
                        'choices' => [
                            ['choice_text' => 'La synthèse de nouvelles protéines serait fortement perturbée', 'is_correct' => true],
                            ['choice_text' => 'La membrane plasmique disparaîtrait immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Toute l’eau sortirait de la cellule', 'is_correct' => false],
                            ['choice_text' => 'La cellule produirait davantage de chloroplastes', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans ribosomes fonctionnels, la cellule ne peut plus assembler correctement de nouvelles protéines, indispensables à de nombreuses fonctions.'
                    ],
                ],
            ],
            [
                'title' => 'Noyau, ADN et cycle cellulaire',
                'description' => 'Comprenez le rôle du noyau, l’organisation générale de l’ADN et les grandes étapes du cycle cellulaire et de la mitose.',
                'questions' => [
                    [
                        'question' => 'Dans une cellule eucaryote, le noyau joue notamment le rôle de...',
                        'choices' => [
                            ['choice_text' => 'Compartiment contenant l’essentiel de l’information génétique', 'is_correct' => true],
                            ['choice_text' => 'Site principal de digestion des déchets', 'is_correct' => false],
                            ['choice_text' => 'Réservoir principal d’ATP', 'is_correct' => false],
                            ['choice_text' => 'Lieu exclusif de la respiration', 'is_correct' => false],
                        ],
                        'explanation' => 'Le noyau contient l’essentiel de l’ADN et participe au contrôle de l’expression des gènes, ce qui influence le fonctionnement cellulaire.'
                    ],
                    [
                        'question' => 'L’ADN porte principalement...',
                        'choices' => [
                            ['choice_text' => 'L’information nécessaire à la synthèse des protéines et au fonctionnement de la cellule', 'is_correct' => true],
                            ['choice_text' => 'Des réserves d’eau', 'is_correct' => false],
                            ['choice_text' => 'Les molécules d’ATP déjà produites', 'is_correct' => false],
                            ['choice_text' => 'Les lipides de la membrane', 'is_correct' => false],
                        ],
                        'explanation' => 'Les séquences d’ADN contiennent des gènes et d’autres informations qui permettent à la cellule de produire des molécules et de réguler ses activités.'
                    ],
                    [
                        'question' => 'Avant qu’une cellule se divise, elle doit généralement...',
                        'choices' => [
                            ['choice_text' => 'Copier son ADN', 'is_correct' => true],
                            ['choice_text' => 'Détruire son noyau', 'is_correct' => false],
                            ['choice_text' => 'Eliminer tous ses ribosomes', 'is_correct' => false],
                            ['choice_text' => 'Arrêter définitivement son métabolisme', 'is_correct' => false],
                        ],
                        'explanation' => 'La duplication de l’ADN avant la division permet de transmettre une copie du matériel génétique à chaque cellule fille.'
                    ],
                    [
                        'question' => 'Chez une cellule somatique humaine, une mitose normale produit généralement...',
                        'choices' => [
                            ['choice_text' => 'Deux cellules filles génétiquement très proches de la cellule mère', 'is_correct' => true],
                            ['choice_text' => 'Quatre cellules filles différentes', 'is_correct' => false],
                            ['choice_text' => 'Une seule cellule sans noyau', 'is_correct' => false],
                            ['choice_text' => 'Deux cellules dépourvues d’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'La mitose répartit les chromosomes dupliqués de façon à produire deux cellules filles possédant normalement le même nombre de chromosomes que la cellule mère.'
                    ],
                    [
                        'question' => 'Une cellule vient de terminer la duplication de son ADN. Quelle affirmation décrit le mieux son état ?',
                        'choices' => [
                            ['choice_text' => 'Chaque chromosome possède alors deux chromatides sœurs', 'is_correct' => true],
                            ['choice_text' => 'Elle possède deux noyaux définitivement séparés', 'is_correct' => false],
                            ['choice_text' => 'Elle a perdu toute son information génétique', 'is_correct' => false],
                            ['choice_text' => 'Elle est déjà devenue deux cellules', 'is_correct' => false],
                        ],
                        'explanation' => 'Après la réplication de l’ADN, chaque chromosome est formé de deux chromatides sœurs identiques reliées entre elles avant leur séparation lors de la division.'
                    ],
                    [
                        'question' => 'Quelle est l’utilité principale de la mitose pour un organisme pluricellulaire ?',
                        'choices' => [
                            ['choice_text' => 'Permettre notamment la croissance et le renouvellement des cellules', 'is_correct' => true],
                            ['choice_text' => 'Produire directement des anticorps dans toutes les cellules', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la respiration par la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'Créer des espèces nouvelles à chaque division', 'is_correct' => false],
                        ],
                        'explanation' => 'La mitose permet d’augmenter le nombre de cellules lors de la croissance et de remplacer des cellules perdues ou endommagées.'
                    ],
                    [
                        'question' => 'Un tissu cicatrise après une petite blessure. Quel processus cellulaire contribue directement à augmenter le nombre de cellules ?',
                        'choices' => [
                            ['choice_text' => 'La division cellulaire par mitose', 'is_correct' => true],
                            ['choice_text' => 'La diffusion simple', 'is_correct' => false],
                            ['choice_text' => 'La transcription seule', 'is_correct' => false],
                            ['choice_text' => 'L’osmose', 'is_correct' => false],
                        ],
                        'explanation' => 'La cicatrisation nécessite notamment la production de nouvelles cellules. La mitose permet à des cellules de se diviser pour augmenter leur nombre.'
                    ],
                    [
                        'question' => 'Un médicament empêche la séparation correcte des chromosomes pendant la division. Quel événement est directement perturbé ?',
                        'choices' => [
                            ['choice_text' => 'La répartition du matériel génétique entre les cellules filles', 'is_correct' => true],
                            ['choice_text' => 'La diffusion de l’oxygène à travers la membrane', 'is_correct' => false],
                            ['choice_text' => 'La digestion des lipides dans le lysosome', 'is_correct' => false],
                            ['choice_text' => 'La synthèse d’ATP dans les chloroplastes', 'is_correct' => false],
                        ],
                        'explanation' => 'La séparation des chromosomes est indispensable pour distribuer correctement le matériel génétique dans les deux cellules filles.'
                    ],
                    [
                        'question' => 'Pourquoi la duplication de l’ADN doit-elle être réalisée avant la séparation des chromosomes ?',
                        'choices' => [
                            ['choice_text' => 'Chaque cellule fille doit recevoir une copie complète de l’information génétique', 'is_correct' => true],
                            ['choice_text' => 'Les ribosomes ne peuvent fonctionner qu’avec deux noyaux', 'is_correct' => false],
                            ['choice_text' => 'La membrane plasmique doit être fabriquée avant toute division', 'is_correct' => false],
                            ['choice_text' => 'La cellule doit augmenter son nombre de chloroplastes', 'is_correct' => false],
                        ],
                        'explanation' => 'La réplication fournit deux copies de chaque chromosome afin que, lors de la division, chacune des cellules filles reçoive une information génétique complète.'
                    ],
                    [
                        'question' => 'Une cellule spécialisée d’un tissu doit rester en état de fonctionnement et ne se divise pas pendant une longue période. Quelle idée générale cela illustre ?',
                        'choices' => [
                            ['choice_text' => 'Toutes les cellules ne passent pas en permanence par une division active', 'is_correct' => true],
                            ['choice_text' => 'Toutes les cellules doivent se diviser chaque heure', 'is_correct' => false],
                            ['choice_text' => 'Une cellule spécialisée ne contient plus d’ADN', 'is_correct' => false],
                            ['choice_text' => 'Le cycle cellulaire est identique pour toutes les cellules', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines cellules quittent temporairement ou durablement le cycle de division tout en restant métaboliquement actives et spécialisées.'
                    ],
                ],
            ],
            [
                'title' => 'Énergie et métabolisme cellulaire',
                'description' => 'Explorez l’utilisation de l’ATP, la respiration cellulaire et la photosynthèse à partir de situations et de calculs énergétiques simples.',
                'questions' => [
                    [
                        'question' => 'Pourquoi l’ATP est-elle souvent décrite comme une monnaie énergétique de la cellule ?',
                        'choices' => [
                            ['choice_text' => 'Elle fournit facilement de l’énergie à de nombreuses réactions cellulaires', 'is_correct' => true],
                            ['choice_text' => 'Elle constitue le principal pigment vert des plantes', 'is_correct' => false],
                            ['choice_text' => 'Elle stocke toute l’information génétique', 'is_correct' => false],
                            ['choice_text' => 'Elle forme directement la membrane plasmique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ATP peut être hydrolysée pour libérer de l’énergie utilisable rapidement dans de nombreuses réactions cellulaires, par exemple pour le transport actif.'
                    ],
                    [
                        'question' => 'Quel organite est le principal site de la respiration cellulaire chez les cellules eucaryotes ?',
                        'choices' => [
                            ['choice_text' => 'La mitochondrie', 'is_correct' => true],
                            ['choice_text' => 'Le noyau', 'is_correct' => false],
                            ['choice_text' => 'L’appareil de Golgi', 'is_correct' => false],
                            ['choice_text' => 'Le lysosome', 'is_correct' => false],
                        ],
                        'explanation' => 'La mitochondrie est le principal organite impliqué dans la respiration cellulaire aérobie et la production importante d’ATP.'
                    ],
                    [
                        'question' => 'Au cours de la respiration cellulaire, le glucose est principalement utilisé pour...',
                        'choices' => [
                            ['choice_text' => 'Fournir de l’énergie permettant notamment de produire de l’ATP', 'is_correct' => true],
                            ['choice_text' => 'Construire directement la paroi des bactéries', 'is_correct' => false],
                            ['choice_text' => 'Créer les chromosomes sans aucune autre réaction', 'is_correct' => false],
                            ['choice_text' => 'Empêcher tous les échanges gazeux', 'is_correct' => false],
                        ],
                        'explanation' => 'La dégradation du glucose fournit de l’énergie qui est récupérée notamment sous forme d’ATP.'
                    ],
                    [
                        'question' => 'Une cellule musculaire a besoin de davantage d’ATP pendant un effort. Quelle proposition explique le mieux cette demande accrue ?',
                        'choices' => [
                            ['choice_text' => 'Les contractions musculaires utilisent de l’énergie pour fonctionner', 'is_correct' => true],
                            ['choice_text' => 'Les muscles cessent toute activité pendant l’effort', 'is_correct' => false],
                            ['choice_text' => 'L’ATP est uniquement produite par le noyau', 'is_correct' => false],
                            ['choice_text' => 'Plus d’ATP signifie automatiquement plus d’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'La contraction musculaire nécessite des réactions consommatrices d’ATP ; une activité accrue augmente donc les besoins énergétiques de la cellule.'
                    ],
                    [
                        'question' => 'Une plante exposée à la lumière transforme du dioxyde de carbone et de l’eau en matière organique. Quel processus réalise cette transformation ?',
                        'choices' => [
                            ['choice_text' => 'La photosynthèse', 'is_correct' => true],
                            ['choice_text' => 'La mitose', 'is_correct' => false],
                            ['choice_text' => 'La diffusion', 'is_correct' => false],
                            ['choice_text' => 'L’exocytose', 'is_correct' => false],
                        ],
                        'explanation' => 'La photosynthèse utilise l’énergie lumineuse pour fabriquer de la matière organique à partir notamment de dioxyde de carbone et d’eau.'
                    ],
                    [
                        'question' => 'Dans quelle structure cellulaire la photosynthèse se déroule-t-elle principalement ?',
                        'choices' => [
                            ['choice_text' => 'Dans les chloroplastes', 'is_correct' => true],
                            ['choice_text' => 'Dans les lysosomes', 'is_correct' => false],
                            ['choice_text' => 'Dans les ribosomes', 'is_correct' => false],
                            ['choice_text' => 'Dans le noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les chloroplastes contiennent les pigments et les systèmes membranaires nécessaires aux réactions photosynthétiques.'
                    ],
                    [
                        'question' => 'Une cellule produit beaucoup d’ATP mais ne peut plus utiliser correctement cette énergie pour déplacer des ions contre leur gradient. Quel processus est directement affecté ?',
                        'choices' => [
                            ['choice_text' => 'Le transport actif', 'is_correct' => true],
                            ['choice_text' => 'La diffusion simple', 'is_correct' => false],
                            ['choice_text' => 'L’osmose passive uniquement', 'is_correct' => false],
                            ['choice_text' => 'La réplication de l’ADN uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le transport actif utilise de l’énergie pour déplacer des substances contre leur gradient ; un défaut d’utilisation de l’ATP perturbe donc ce processus.'
                    ],
                    [
                        'question' => 'Une molécule d’ATP contient une liaison phosphate riche en énergie. Lorsqu’elle est hydrolysée, quelle idée simple est correcte ?',
                        'choices' => [
                            ['choice_text' => 'L’hydrolyse peut libérer de l’énergie utilisable par la cellule', 'is_correct' => true],
                            ['choice_text' => 'L’hydrolyse transforme l’ATP en ADN', 'is_correct' => false],
                            ['choice_text' => 'L’hydrolyse produit toujours du glucose', 'is_correct' => false],
                            ['choice_text' => 'L’hydrolyse déplace forcément l’ATP hors de la cellule', 'is_correct' => false],
                        ],
                        'explanation' => 'La rupture de la liaison terminale phosphate de l’ATP peut être couplée à des réactions qui nécessitent un apport d’énergie.'
                    ],
                    [
                        'question' => 'Une plante est placée plusieurs jours dans l’obscurité. Quel changement est le plus attendu concernant la photosynthèse ?',
                        'choices' => [
                            ['choice_text' => 'La production de matière organique par photosynthèse diminue fortement', 'is_correct' => true],
                            ['choice_text' => 'La photosynthèse devient indépendante de la lumière', 'is_correct' => false],
                            ['choice_text' => 'Les chloroplastes deviennent des noyaux', 'is_correct' => false],
                            ['choice_text' => 'La respiration cellulaire s’arrête nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'La photosynthèse dépend de l’énergie lumineuse. Dans l’obscurité, sa phase dépendante de la lumière ne peut pas fonctionner normalement et la production globale diminue fortement.'
                    ],
                    [
                        'question' => 'Une cellule possède à la fois des mitochondries et, chez une cellule végétale, des chloroplastes. Pourquoi ces deux types d’organites ne sont-ils pas redondants ?',
                        'choices' => [
                            ['choice_text' => 'Ils participent à des transformations énergétiques différentes : respiration et photosynthèse', 'is_correct' => true],
                            ['choice_text' => 'Ils ont exactement la même fonction mais une couleur différente', 'is_correct' => false],
                            ['choice_text' => 'Les chloroplastes remplacent toujours les mitochondries la nuit', 'is_correct' => false],
                            ['choice_text' => 'Les mitochondries ne contiennent jamais de membranes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les chloroplastes captent l’énergie lumineuse pour la photosynthèse, tandis que les mitochondries récupèrent l’énergie de molécules organiques par la respiration cellulaire.'
                    ],
                ],
            ],
            [
                'title' => 'Synthèse et devenir des protéines',
                'description' => 'Suivez le trajet général d’une protéine, de l’information génétique jusqu’à son éventuelle modification, son tri et son exportation par la cellule.',
                'questions' => [
                    [
                        'question' => 'Quel type de molécule transporte une copie de l’information d’un gène vers les ribosomes ?',
                        'choices' => [
                            ['choice_text' => 'L’ARN messager', 'is_correct' => true],
                            ['choice_text' => 'L’ATP', 'is_correct' => false],
                            ['choice_text' => 'Le phospholipide', 'is_correct' => false],
                            ['choice_text' => 'Le glycogène', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ARN messager est transcrit à partir de l’ADN et sert de matrice pour l’assemblage des acides aminés au niveau des ribosomes.'
                    ],
                    [
                        'question' => 'Les protéines sont constituées de chaînes formées à partir de...',
                        'choices' => [
                            ['choice_text' => 'Acides aminés', 'is_correct' => true],
                            ['choice_text' => 'Nucléotides', 'is_correct' => false],
                            ['choice_text' => 'Phospholipides uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sucres simples uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les acides aminés sont les unités de base des protéines et sont reliés entre eux lors de la traduction.'
                    ],
                    [
                        'question' => 'Quel processus permet au ribosome d’assembler une chaîne polypeptidique à partir d’un ARN messager ?',
                        'choices' => [
                            ['choice_text' => 'La traduction', 'is_correct' => true],
                            ['choice_text' => 'La réplication', 'is_correct' => false],
                            ['choice_text' => 'La photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'La diffusion', 'is_correct' => false],
                        ],
                        'explanation' => 'La traduction lit la séquence de l’ARN messager et relie les acides aminés dans l’ordre approprié.'
                    ],
                    [
                        'question' => 'Une cellule fabrique une enzyme qui doit être sécrétée hors de la cellule. Quelle structure reçoit souvent la protéine nouvellement synthétisée ?',
                        'choices' => [
                            ['choice_text' => 'Le réticulum endoplasmique rugueux', 'is_correct' => true],
                            ['choice_text' => 'Le lysosome uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le chloroplaste', 'is_correct' => false],
                            ['choice_text' => 'Le nucléole', 'is_correct' => false],
                        ],
                        'explanation' => 'Les protéines destinées à la sécrétion sont souvent synthétisées par des ribosomes associés au réticulum endoplasmique rugueux puis empruntent la voie sécrétoire.'
                    ],
                    [
                        'question' => 'Après son passage dans le réticulum endoplasmique, une protéine destinée à la sécrétion arrive dans l’appareil de Golgi. Que fait notamment le Golgi ?',
                        'choices' => [
                            ['choice_text' => 'Il modifie, trie et expédie la protéine', 'is_correct' => true],
                            ['choice_text' => 'Il copie l’ADN de toute la cellule', 'is_correct' => false],
                            ['choice_text' => 'Il transforme la protéine en glucose', 'is_correct' => false],
                            ['choice_text' => 'Il détruit obligatoirement la protéine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’appareil de Golgi réalise des modifications, trie les protéines et les dirige vers leur destination grâce notamment à des vésicules.'
                    ],
                    [
                        'question' => 'Une mutation modifie un gène et change un codon qui correspond normalement à un acide aminé. Quelle conséquence peut survenir ?',
                        'choices' => [
                            ['choice_text' => 'La séquence de la protéine peut être modifiée', 'is_correct' => true],
                            ['choice_text' => 'La membrane devient automatiquement plus épaisse', 'is_correct' => false],
                            ['choice_text' => 'La cellule cesse nécessairement de respirer', 'is_correct' => false],
                            ['choice_text' => 'Tous les chromosomes disparaissent', 'is_correct' => false],
                        ],
                        'explanation' => 'Un changement dans un gène peut modifier la séquence d’acides aminés d’une protéine, ce qui peut parfois changer sa structure ou sa fonction.'
                    ],
                    [
                        'question' => 'Un élève pense qu’un ribosome « lit directement la protéine ». Quelle reformulation est plus juste ?',
                        'choices' => [
                            ['choice_text' => 'Le ribosome lit l’ARN messager et utilise cette information pour construire la protéine', 'is_correct' => true],
                            ['choice_text' => 'Le ribosome lit les lipides de la membrane', 'is_correct' => false],
                            ['choice_text' => 'Le ribosome lit les mitochondries', 'is_correct' => false],
                            ['choice_text' => 'Le ribosome lit l’ATP pour fabriquer de l’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ribosome interprète la séquence de l’ARN messager et assemble les acides aminés selon cette information.'
                    ],
                    [
                        'question' => 'Une cellule produit une grande quantité d’une protéine membranaire. Quel élément cellulaire est particulièrement impliqué dans sa synthèse et son insertion ?',
                        'choices' => [
                            ['choice_text' => 'Le réticulum endoplasmique rugueux', 'is_correct' => true],
                            ['choice_text' => 'Le lysosome', 'is_correct' => false],
                            ['choice_text' => 'Le nucléole seulement', 'is_correct' => false],
                            ['choice_text' => 'La vacuole centrale uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les protéines destinées aux membranes sont synthétisées sur des ribosomes associés au réticulum endoplasmique rugueux et insérées dans sa membrane ou son réseau de transport.'
                    ],
                    [
'question' => 'Pourquoi deux cellules différentes peuvent-elles fabriquer des protéines très différentes alors qu’elles possèdent généralement le même ADN ?',                        'choices' => [
                            ['choice_text' => 'Elle n’exprime pas tous ses gènes de la même manière', 'is_correct' => true],
                            ['choice_text' => 'Chaque cellule remplace une partie de son ADN par un autre', 'is_correct' => false],
                            ['choice_text' => 'Les protéines se fabriquent sans information génétique', 'is_correct' => false],
                            ['choice_text' => 'Les ribosomes changent toujours le nombre de chromosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'La spécialisation cellulaire dépend notamment de l’expression différentielle des gènes : une cellule active certains gènes et en laisse d’autres moins actifs.'
                    ],
                    [
                        'question' => 'Une protéine nouvellement synthétisée doit rejoindre la membrane plasmique. Quel trajet général est le plus cohérent ?',
                        'choices' => [
                            ['choice_text' => 'Ribosome lié au RE rugueux → RE → Golgi → vésicule → membrane plasmique', 'is_correct' => true],
                            ['choice_text' => 'Noyau → lysosome → chloroplaste → membrane', 'is_correct' => false],
                            ['choice_text' => 'Mitochondrie → noyau → vacuole → membrane', 'is_correct' => false],
                            ['choice_text' => 'Golgi → ADN → ribosome → membrane', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreuses protéines membranaires empruntent la voie sécrétoire : synthèse sur le RE rugueux, passage par le Golgi, puis transport en vésicule vers la membrane.'
                    ],
                ],
            ],
            [
                'title' => 'Microscopie et observation cellulaire',
                'description' => 'Entraînez-vous à interpréter des observations microscopiques simples, à calculer un grossissement et à choisir une méthode adaptée à une question cellulaire.',
                'questions' => [
                    [
                        'question' => 'Quel instrument est le plus adapté pour observer une cellule végétale plusieurs centaines de fois plus grande à l’image qu’à l’œil nu ?',
                        'choices' => [
                            ['choice_text' => 'Un microscope optique', 'is_correct' => true],
                            ['choice_text' => 'Une balance', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Un pH-mètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le microscope optique permet d’agrandir des objets trop petits pour être distingués correctement à l’œil nu, comme de nombreuses cellules.'
                    ],
                    [
                        'question' => 'Une image est obtenue avec un objectif ×10 et un oculaire ×10. Quel est le grossissement total ?',
                        'choices' => [
                            ['choice_text' => '×100', 'is_correct' => true],
                            ['choice_text' => '×20', 'is_correct' => false],
                            ['choice_text' => '×10', 'is_correct' => false],
                            ['choice_text' => '×1 000', 'is_correct' => false],
                        ],
                        'explanation' => 'Le grossissement total s’obtient en multipliant les grossissements : 10 × 10 = 100.'
                    ],
                    [
                        'question' => 'Une cellule mesure 50 µm de diamètre. Une image imprimée mesure 5 mm. Quel grossissement approximatif a été utilisé ?',
                        'choices' => [
                            ['choice_text' => '×100', 'is_correct' => true],
                            ['choice_text' => '×10', 'is_correct' => false],
                            ['choice_text' => '×50', 'is_correct' => false],
                            ['choice_text' => '×500', 'is_correct' => false],
                        ],
                        'explanation' => '5 mm = 5 000 µm. Le grossissement est donc 5 000 ÷ 50 = 100.'
                    ],
                    [
                        'question' => 'Pour améliorer l’observation d’une cellule au microscope optique, une étape de préparation peut augmenter le contraste. Quel procédé est couramment utilisé ?',
                        'choices' => [
                            ['choice_text' => 'Une coloration', 'is_correct' => true],
                            ['choice_text' => 'Une congélation immédiate dans l’eau', 'is_correct' => false],
                            ['choice_text' => 'Une dilution à zéro', 'is_correct' => false],
                            ['choice_text' => 'Un chauffage à très haute température', 'is_correct' => false],
                        ],
                        'explanation' => 'Les colorations rendent certaines structures plus visibles en augmentant le contraste entre les éléments de l’échantillon.'
                    ],
                    [
                        'question' => 'Un élève voit de nombreuses cellules rectangulaires alignées avec des limites nettes et des structures vertes. Quelle conclusion est la plus prudente ?',
                        'choices' => [
                            ['choice_text' => 'Il peut s’agir de cellules végétales contenant des chloroplastes', 'is_correct' => true],
                            ['choice_text' => 'Il s’agit nécessairement de cellules nerveuses humaines', 'is_correct' => false],
                            ['choice_text' => 'Il s’agit forcément de bactéries', 'is_correct' => false],
                            ['choice_text' => 'Il s’agit de cellules sans membrane', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme régulière liée à une paroi et la présence de structures vertes compatibles avec des chloroplastes orientent vers un tissu végétal.'
                    ],
                    [
                        'question' => 'Quelle information ne peut pas être obtenue simplement en regardant une cellule colorée au microscope optique ?',
                        'choices' => [
                            ['choice_text' => 'La séquence exacte de son ADN', 'is_correct' => true],
                            ['choice_text' => 'La forme générale de la cellule', 'is_correct' => false],
                            ['choice_text' => 'La présence de certaines structures colorées', 'is_correct' => false],
                            ['choice_text' => 'Le nombre approximatif de cellules dans un champ', 'is_correct' => false],
                        ],
                        'explanation' => 'Une observation microscopique ordinaire ne permet pas de lire directement la séquence des bases de l’ADN.'
                    ],
                    [
                        'question' => 'Un chercheur veut localiser une protéine précise dans une cellule. Quelle stratégie est particulièrement adaptée, au niveau débutant ?',
                        'choices' => [
                            ['choice_text' => 'Utiliser un marqueur ou un anticorps spécifique associé à une méthode d’imagerie', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement la masse totale de l’échantillon', 'is_correct' => false],
                            ['choice_text' => 'Observer la cellule sans aucun traitement', 'is_correct' => false],
                            ['choice_text' => 'Changer la température et compter les cellules', 'is_correct' => false],
                        ],
                        'explanation' => 'Des marqueurs spécifiques, notamment des anticorps ou des molécules fluorescentes, peuvent révéler où se trouve une protéine dans la cellule.'
                    ],
                    [
                        'question' => 'Une image microscopique montre deux structures, mais l’une apparaît deux fois plus grande sur l’écran. Peut-on conclure qu’elle est deux fois plus grande dans la cellule réelle ?',
                        'choices' => [
                            ['choice_text' => 'Pas nécessairement, car le grossissement ou l’échelle de l’image doit être vérifié', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, si elle est plus sombre', 'is_correct' => false],
                            ['choice_text' => 'Non, une image ne peut jamais être mesurée', 'is_correct' => false],
                        ],
                        'explanation' => 'La taille apparente dépend du grossissement et de l’échelle. Il faut connaître l’échelle de l’image avant de comparer les tailles réelles.'
                    ],
                    [
                        'question' => 'Pourquoi indique-t-on souvent une barre d’échelle sur une image microscopique ?',
                        'choices' => [
                            ['choice_text' => 'Pour relier une distance observée à une longueur réelle', 'is_correct' => true],
                            ['choice_text' => 'Pour connaître la masse de la cellule', 'is_correct' => false],
                            ['choice_text' => 'Pour savoir combien d’ADN contient la cellule', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le grossissement', 'is_correct' => false],
                        ],
                        'explanation' => 'La barre d’échelle permet d’estimer les dimensions réelles des structures observées, même si le grossissement de l’image a été modifié.'
                    ],
                    [
                        'question' => 'Une image est très agrandie mais floue. Quel enseignement pratique faut-il retenir ?',
                        'choices' => [
                            ['choice_text' => 'Un fort grossissement ne garantit pas à lui seul une meilleure observation', 'is_correct' => true],
                            ['choice_text' => 'Il faut toujours doubler le grossissement', 'is_correct' => false],
                            ['choice_text' => 'Le flou prouve que la cellule est morte', 'is_correct' => false],
                            ['choice_text' => 'La coloration suffit à éliminer tout flou', 'is_correct' => false],
                        ],
                        'explanation' => 'La qualité de l’image dépend aussi de la résolution, de la préparation et de la mise au point. Agrandir davantage une image floue ne révèle pas de nouveaux détails.'
                    ],
                ],
            ],
            [
                'title' => 'Communication, différenciation et mort cellulaire',
                'description' => 'Comprenez comment les cellules reçoivent des signaux, répondent à leur environnement, se spécialisent et éliminent certaines cellules de manière contrôlée.',
                'questions' => [
                    [
                        'question' => 'Une hormone circulant dans le sang agit seulement sur certaines cellules. Quelle explication est la plus simple ?',
                        'choices' => [
                            ['choice_text' => 'Seules certaines cellules possèdent le récepteur capable de reconnaître cette hormone', 'is_correct' => true],
                            ['choice_text' => 'Toutes les cellules sont imperméables au sang', 'is_correct' => false],
                            ['choice_text' => 'L’hormone transforme toutes les cellules en neurones', 'is_correct' => false],
                            ['choice_text' => 'Une hormone agit toujours sur toutes les cellules', 'is_correct' => false],
                        ],
                        'explanation' => 'Une cellule répond à un signal lorsqu’elle possède le récepteur approprié et les mécanismes permettant de déclencher une réponse.'
                    ],
                    [
                        'question' => 'Un récepteur membranaire reconnaît une molécule signal à l’extérieur de la cellule. Que peut-il provoquer ensuite ?',
                        'choices' => [
                            ['choice_text' => 'Une série de réactions intracellulaires conduisant à une réponse', 'is_correct' => true],
                            ['choice_text' => 'La disparition immédiate de l’ADN', 'is_correct' => false],
                            ['choice_text' => 'La transformation du signal en cellule', 'is_correct' => false],
                            ['choice_text' => 'L’arrêt obligatoire de toutes les enzymes', 'is_correct' => false],
                        ],
                        'explanation' => 'La fixation du signal sur son récepteur peut déclencher une cascade de réactions à l’intérieur de la cellule et modifier son activité.'
                    ],
                    [
                        'question' => 'Pourquoi deux types de cellules peuvent-ils réagir différemment à la même molécule signal ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent posséder des récepteurs différents ou activer des voies de réponse différentes', 'is_correct' => true],
                            ['choice_text' => 'Elles possèdent toujours des ADN complètement différents', 'is_correct' => false],
                            ['choice_text' => 'L’une d’elles ne possède jamais de membrane', 'is_correct' => false],
                            ['choice_text' => 'Les signaux ne peuvent agir que sur les cellules animales', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse dépend notamment de la présence des récepteurs et des mécanismes intracellulaires disponibles dans chaque type cellulaire.'
                    ],
                    [
                        'question' => 'Une cellule reçoit un signal lui indiquant qu’elle doit produire davantage d’une certaine protéine. Quelle étape peut être modifiée rapidement ?',
                        'choices' => [
                            ['choice_text' => 'L’expression du gène correspondant', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de chromosomes de la cellule', 'is_correct' => false],
                            ['choice_text' => 'La composition minérale du noyau', 'is_correct' => false],
                            ['choice_text' => 'La taille de toutes les mitochondries', 'is_correct' => false],
                        ],
                        'explanation' => 'Un signal peut modifier l’expression de certains gènes, ce qui change la quantité de protéines produites par la cellule.'
                    ],
                    [
                        'question' => 'Lors du développement d’un organisme, des cellules issues d’une même population acquièrent des fonctions différentes. Comment appelle-t-on ce processus ?',
                        'choices' => [
                            ['choice_text' => 'La différenciation cellulaire', 'is_correct' => true],
                            ['choice_text' => 'La diffusion facilitée', 'is_correct' => false],
                            ['choice_text' => 'La fermentation', 'is_correct' => false],
                            ['choice_text' => 'La dénaturation', 'is_correct' => false],
                        ],
                        'explanation' => 'La différenciation cellulaire correspond à l’acquisition de caractéristiques et de fonctions spécialisées, souvent grâce à des profils d’expression génique différents.'
                    ],
                    [
                        'question' => 'Une cellule endommagée se détruit de façon ordonnée sans provoquer normalement une forte inflammation locale. Quel processus peut correspondre à cette situation ?',
                        'choices' => [
                            ['choice_text' => 'L’apoptose', 'is_correct' => true],
                            ['choice_text' => 'La photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'La mitose', 'is_correct' => false],
                            ['choice_text' => 'L’osmose', 'is_correct' => false],
                        ],
                        'explanation' => 'L’apoptose est une forme de mort cellulaire programmée et contrôlée, importante notamment pour éliminer des cellules devenues inutiles ou dangereuses.'
                    ],
                    [
                        'question' => 'Pourquoi l’apoptose peut-elle être utile pendant le développement d’un organisme ?',
                        'choices' => [
                            ['choice_text' => 'Elle aide à éliminer certaines cellules afin de modeler correctement les tissus', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente systématiquement la taille des chromosomes', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toute la respiration cellulaire', 'is_correct' => false],
                            ['choice_text' => 'Elle produit des bactéries utiles', 'is_correct' => false],
                        ],
                        'explanation' => 'La mort cellulaire programmée participe au modelage des tissus en éliminant certaines cellules au moment et à l’endroit appropriés.'
                    ],
                    [
                        'question' => 'Une cellule ne possède plus le récepteur d’un facteur de croissance auquel elle répondait auparavant. Quelle conséquence est plausible ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut ne plus répondre normalement à ce signal', 'is_correct' => true],
                            ['choice_text' => 'Elle devient automatiquement une cellule bactérienne', 'is_correct' => false],
                            ['choice_text' => 'Elle produit nécessairement deux fois plus d’ATP', 'is_correct' => false],
                            ['choice_text' => 'Elle perd immédiatement toute sa membrane', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans récepteur fonctionnel, le signal peut ne plus être perçu ou transmettre correctement sa réponse à l’intérieur de la cellule.'
                    ],
                    [
                        'question' => 'Deux cellules ont le même ADN mais l’une fabrique des protéines de muscle et l’autre des protéines caractéristiques du neurone. Quelle explication relie le mieux ces observations ?',
                        'choices' => [
                            ['choice_text' => 'Elles utilisent des ensembles de gènes différents selon leur spécialisation', 'is_correct' => true],
                            ['choice_text' => 'Elles ont obligatoirement un nombre différent de chromosomes', 'is_correct' => false],
                            ['choice_text' => 'L’ADN n’intervient jamais dans la spécialisation', 'is_correct' => false],
                            ['choice_text' => 'Les ribosomes changent les bases de l’ADN à chaque minute', 'is_correct' => false],
                        ],
                        'explanation' => 'La spécialisation repose largement sur l’expression sélective de gènes différents, malgré un génome généralement commun entre cellules somatiques d’un organisme.'
                    ],
                    [
                        'question' => 'Une cellule reçoit un signal qui favorise sa survie alors qu’un autre signal déclenche une réponse opposée. De quoi dépendra notamment l’issue ?',
                        'choices' => [
                            ['choice_text' => 'Des récepteurs présents, des voies de signalisation actives et de l’état de la cellule', 'is_correct' => true],
                            ['choice_text' => 'Uniquement de la quantité d’eau dans le milieu', 'is_correct' => false],
                            ['choice_text' => 'Du nombre de chloroplastes chez toutes les cellules', 'is_correct' => false],
                            ['choice_text' => 'De la couleur observée au microscope', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse cellulaire résulte de l’intégration des signaux reçus, des récepteurs disponibles et de l’état interne de la cellule, notamment de son programme d’expression génique.'
                    ],
                ],
            ],
            [
                'title' => 'Révision intégrée de biologie cellulaire',
                'description' => 'Mettez en relation membrane, organites, énergie, génétique et communication cellulaire dans des situations courtes proches de problèmes rencontrés en SVT.',
                'questions' => [
                    [
                        'question' => 'Une cellule placée dans un milieu pauvre en oxygène doit maintenir ses activités pendant un certain temps. Quel élément de son fonctionnement est directement concerné ?',
                        'choices' => [
                            ['choice_text' => 'La production d’ATP par les voies dépendantes de l’oxygène', 'is_correct' => true],
                            ['choice_text' => 'La copie de la membrane plasmique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La lecture de la lumière par les chloroplastes animaux', 'is_correct' => false],
                            ['choice_text' => 'La disparition des ribosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oxygène est utilisé dans la respiration cellulaire aérobie. Une baisse de son apport peut donc limiter la production d’ATP par cette voie.'
                    ],
                    [
                        'question' => 'Un médicament bloque temporairement l’appareil de Golgi dans une cellule sécrétrice. Quelle fonction sera particulièrement perturbée ?',
                        'choices' => [
                            ['choice_text' => 'Le tri et l’acheminement de nombreuses protéines destinées à être exportées', 'is_correct' => true],
                            ['choice_text' => 'La duplication de l’ADN dans le noyau', 'is_correct' => false],
                            ['choice_text' => 'La synthèse d’ATP dans les mitochondries', 'is_correct' => false],
                            ['choice_text' => 'La diffusion de l’eau à travers la membrane', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Golgi intervient dans la modification, le tri et l’emballage de nombreuses protéines de la voie sécrétoire.'
                    ],
                    [
                        'question' => 'Une cellule possède de nombreuses mitochondries parce qu’elle consomme beaucoup d’énergie. Quel type de cellule pourrait présenter cette caractéristique ?',
                        'choices' => [
                            ['choice_text' => 'Une cellule ayant une activité énergétique importante, comme une cellule musculaire', 'is_correct' => true],
                            ['choice_text' => 'Une cellule morte sans métabolisme', 'is_correct' => false],
                            ['choice_text' => 'Une particule virale isolée', 'is_correct' => false],
                            ['choice_text' => 'Une cellule sans membrane plasmique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules très actives sur le plan énergétique ont souvent de nombreux mitochondries pour répondre à leurs besoins élevés en ATP.'
                    ],
                    [
                        'question' => 'Une cellule végétale perd de l’eau et sa membrane s’éloigne de la paroi. Quel phénomène peut expliquer cette observation ?',
                        'choices' => [
                            ['choice_text' => 'La sortie d’eau par osmose dans un milieu plus concentré', 'is_correct' => true],
                            ['choice_text' => 'L’entrée massive d’eau par transport actif', 'is_correct' => false],
                            ['choice_text' => 'La synthèse accélérée de protéines', 'is_correct' => false],
                            ['choice_text' => 'La division du noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un milieu externe plus concentré en solutés, l’eau peut sortir de la cellule végétale par osmose, provoquant une perte de turgescence et un retrait du contenu cellulaire.'
                    ],
                    [
                        'question' => 'Une mutation empêche une protéine membranaire de reconnaître correctement son signal. Quelle relation entre structure et fonction est illustrée ?',
                        'choices' => [
                            ['choice_text' => 'La modification de la structure d’une protéine peut perturber sa fonction de reconnaissance', 'is_correct' => true],
                            ['choice_text' => 'Toutes les mutations augmentent forcément l’activité cellulaire', 'is_correct' => false],
                            ['choice_text' => 'Une protéine membranaire n’a jamais de structure particulière', 'is_correct' => false],
                            ['choice_text' => 'Le signal peut agir correctement sans aucun récepteur', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction d’une protéine dépend de sa structure tridimensionnelle. Une modification qui change sa forme peut empêcher la reconnaissance normale de son partenaire.'
                    ],
                    [
                        'question' => 'Une cellule du foie et une cellule musculaire possèdent le même génome mais n’utilisent pas les mêmes protéines en grandes quantités. Pourquoi ?',
                        'choices' => [
                            ['choice_text' => 'Leurs programmes d’expression des gènes sont différents', 'is_correct' => true],
                            ['choice_text' => 'Leurs membranes ne contiennent jamais de phospholipides', 'is_correct' => false],
                            ['choice_text' => 'L’une n’a pas de ribosomes', 'is_correct' => false],
                            ['choice_text' => 'Leur ADN est toujours entièrement différent', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux cellules proviennent du même organisme et possèdent généralement le même génome, mais leur expression génique diffère en fonction de leur spécialisation.'
                    ],
                    [
                        'question' => 'Une chercheuse veut savoir si un traitement réduit le nombre de cellules en division. Quelle observation simple pourrait être informative ?',
                        'choices' => [
                            ['choice_text' => 'Mesurer la proportion de cellules présentant des caractéristiques de division avant et après traitement', 'is_correct' => true],
                            ['choice_text' => 'Mesurer seulement la couleur du milieu', 'is_correct' => false],
                            ['choice_text' => 'Compter uniquement les mitochondries d’une cellule', 'is_correct' => false],
                            ['choice_text' => 'Observer la température de la salle', 'is_correct' => false],
                        ],
                        'explanation' => 'Comparer la proportion de cellules en division entre un groupe traité et un groupe témoin permet d’évaluer l’effet du traitement sur la prolifération cellulaire.'
                    ],
                    [
                        'question' => 'Une cellule absorbe une grosse molécule en formant une vésicule. Plus tard, cette molécule est dégradée par des enzymes. Quel enchaînement est cohérent ?',
                        'choices' => [
                            ['choice_text' => 'Endocytose puis traitement dans des compartiments digestifs, notamment les lysosomes', 'is_correct' => true],
                            ['choice_text' => 'Exocytose puis photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'Diffusion simple puis réplication de l’ADN', 'is_correct' => false],
                            ['choice_text' => 'Osmose puis formation d’un chromosome', 'is_correct' => false],
                        ],
                        'explanation' => 'L’endocytose fait entrer le matériel dans une vésicule et celui-ci peut ensuite être dirigé vers les lysosomes où des enzymes le dégradent.'
                    ],
                    [
                        'question' => 'Une cellule cancéreuse se divise alors que des signaux normaux devraient limiter sa prolifération. Quel concept de biologie cellulaire aide à comprendre ce problème ?',
                        'choices' => [
                            ['choice_text' => 'La régulation du cycle cellulaire et de la communication entre cellules', 'is_correct' => true],
                            ['choice_text' => 'La photosynthèse des chloroplastes', 'is_correct' => false],
                            ['choice_text' => 'La diffusion de l’eau seulement', 'is_correct' => false],
                            ['choice_text' => 'La formation de la paroi cellulaire chez les bactéries', 'is_correct' => false],
                        ],
                        'explanation' => 'La prolifération normale dépend de mécanismes de contrôle du cycle cellulaire et de signaux qui favorisent ou limitent la division. Leur dérèglement peut conduire à une multiplication excessive.'
                    ],
                    [
                        'question' => 'Une équipe observe une cellule qui reçoit un signal, active certains gènes, produit une protéine puis modifie son comportement. Quel enchaînement résume le mieux la situation ?',
                        'choices' => [
                            ['choice_text' => 'Signal → récepteur/voie de signalisation → expression génique → nouvelle protéine → réponse cellulaire', 'is_correct' => true],
                            ['choice_text' => 'Signal → disparition du noyau → photosynthèse → division', 'is_correct' => false],
                            ['choice_text' => 'ATP → ADN → membrane → signal sans récepteur', 'is_correct' => false],
                            ['choice_text' => 'Vacuole → chromosome → lysosome → réponse automatique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un signal peut être détecté par un récepteur, déclencher une cascade intracellulaire, modifier l’expression de gènes et entraîner la production de protéines responsables d’une nouvelle réponse cellulaire.'
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $index => $quizData) {
            $settings = $quizSettings[$index];

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
