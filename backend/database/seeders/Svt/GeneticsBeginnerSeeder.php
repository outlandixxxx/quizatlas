<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class GeneticsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'genetics')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 20, 'passing_score' => 60],
            7 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Les bases de la génétique',
                'description' => 'Découvrir les notions essentielles de gène, allèle, chromosome, ADN, génotype et phénotype à travers des situations simples.',
                'questions' => [
                    [
                        'question' => 'Une famille remarque que plusieurs de ses membres ont les yeux bruns. En génétique, quel terme désigne une unité d\'information héréditaire portée par l\'ADN ?',
                        'choices' => [
                            ['choice_text' => 'Un tissu', 'is_correct' => false],
                            ['choice_text' => 'Un gène', 'is_correct' => true],
                            ['choice_text' => 'Une enzyme', 'is_correct' => false],
                            ['choice_text' => 'Un organe', 'is_correct' => false],
                        ],
                        'explanation' => 'Un gène est une portion d\'ADN qui participe à la détermination d\'un caractère ou à la production d\'une molécule fonctionnelle.',
                    ],
                    [
                        'question' => 'Sur une paire de chromosomes homologues, un même caractère peut être associé à différentes versions d\'un gène. Comment appelle-t-on ces versions ?',
                        'choices' => [
                            ['choice_text' => 'Des cellules', 'is_correct' => false],
                            ['choice_text' => 'Des protéines', 'is_correct' => false],
                            ['choice_text' => 'Des ribosomes', 'is_correct' => false],
                            ['choice_text' => 'Des allèles', 'is_correct' => true],
                        ],
                        'explanation' => 'Les allèles sont des versions différentes d\'un même gène. Ils peuvent contribuer à des variations d\'un caractère.',
                    ],
                    [
                        'question' => 'Chez l\'être humain, où se trouve principalement l\'ADN qui constitue les chromosomes ?',
                        'choices' => [
                            ['choice_text' => 'Dans le noyau des cellules', 'is_correct' => true],
                            ['choice_text' => 'Dans la membrane cellulaire', 'is_correct' => false],
                            ['choice_text' => 'Dans les lysosomes', 'is_correct' => false],
                            ['choice_text' => 'Dans la paroi cellulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les cellules humaines, l\'essentiel de l\'ADN chromosomique se trouve dans le noyau, où sont organisés les chromosomes.',
                    ],
                    [
                        'question' => 'Un élève écrit « génotype » lorsqu\'il décrit la couleur des yeux observée chez une personne. Quel terme convient mieux pour le caractère observable ?',
                        'choices' => [
                            ['choice_text' => 'Allèle', 'is_correct' => false],
                            ['choice_text' => 'Chromosome', 'is_correct' => false],
                            ['choice_text' => 'Phénotype', 'is_correct' => true],
                            ['choice_text' => 'Caryotype', 'is_correct' => false],
                        ],
                        'explanation' => 'Le phénotype correspond aux caractères observables d\'un individu. Le génotype décrit la combinaison d\'allèles qu\'il possède.',
                    ],
                    [
                        'question' => 'Deux individus peuvent avoir le même phénotype pour un caractère mais des génotypes différents. Quel exemple illustre cette idée ?',
                        'choices' => [
                            ['choice_text' => 'Deux cellules dont les membranes sont différentes', 'is_correct' => false],
                            ['choice_text' => 'Deux animaux de tailles différentes', 'is_correct' => false],
                            ['choice_text' => 'Deux plantes à fleurs violettes, l\'une homozygote et l\'autre hétérozygote', 'is_correct' => true],
                            ['choice_text' => 'Deux chromosomes qui n\'appartiennent pas à la même paire', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon les relations de dominance, un individu AA et un individu Aa peuvent présenter le même phénotype tout en ayant des génotypes différents.',
                    ],
                    [
                        'question' => 'Quel énoncé distingue correctement un chromosome d\'un gène ?',
                        'choices' => [
                            ['choice_text' => 'Un chromosome est une longue structure d\'ADN portant de nombreux gènes', 'is_correct' => true],
                            ['choice_text' => 'Un gène est une cellule contenant plusieurs chromosomes', 'is_correct' => false],
                            ['choice_text' => 'Un chromosome est une protéine fabriquée par un gène', 'is_correct' => false],
                            ['choice_text' => 'Un gène est toujours plus grand qu\'un chromosome', 'is_correct' => false],
                        ],
                        'explanation' => 'Un chromosome est une structure organisée d\'ADN qui porte de nombreux gènes. Un gène n\'est qu\'une région particulière de cet ADN.',
                    ],
                    [
                        'question' => 'Une personne possède deux exemplaires d\'un même gène, tous deux identiques. Quel terme décrit cette situation ?',
                        'choices' => [
                            ['choice_text' => 'Hétérozygote', 'is_correct' => false],
                            ['choice_text' => 'Mutant', 'is_correct' => false],
                            ['choice_text' => 'Haploïde', 'is_correct' => false],
                            ['choice_text' => 'Homozygote', 'is_correct' => true],
                        ],
                        'explanation' => 'Un individu est homozygote pour un gène lorsque ses deux allèles sont identiques, par exemple AA ou aa.',
                    ],
                    [
                        'question' => 'Pour un caractère donné, un individu possède les allèles B et b. Que peut-on dire de son génotype ?',
                        'choices' => [
                            ['choice_text' => 'Il est homozygote', 'is_correct' => false],
                            ['choice_text' => 'Il est hétérozygote', 'is_correct' => true],
                            ['choice_text' => 'Il est haploïde', 'is_correct' => false],
                            ['choice_text' => 'Il ne possède qu\'un seul allèle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le génotype Bb contient deux allèles différents. L\'individu est donc hétérozygote pour ce gène.',
                    ],
                    [
                        'question' => 'Un professeur compare le caryotype d\'une cellule de peau à celui d\'une cellule reproductrice. Quelle différence générale faut-il attendre ?',
                        'choices' => [
                            ['choice_text' => 'La cellule reproductrice possède deux fois plus de chromosomes', 'is_correct' => false],
                            ['choice_text' => 'La cellule reproductrice possède un seul exemplaire de chaque chromosome', 'is_correct' => true],
                            ['choice_text' => 'La cellule de peau ne contient pas d\'ADN', 'is_correct' => false],
                            ['choice_text' => 'Les deux cellules ont forcément le même nombre de chromosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules reproductrices humaines sont haploïdes : elles possèdent un seul exemplaire de chaque chromosome, contrairement aux cellules somatiques diploïdes.',
                    ],
                    [
                        'question' => 'Une erreur fréquente consiste à penser qu\'un allèle dominant est toujours « meilleur » ou plus fréquent dans la population. Quelle correction est juste ?',
                        'choices' => [
                            ['choice_text' => 'Un allèle dominant est toujours bénéfique', 'is_correct' => false],
                            ['choice_text' => 'Un allèle dominant est nécessairement le plus fréquent', 'is_correct' => false],
                            ['choice_text' => 'Un allèle dominant apparaît seulement après une mutation', 'is_correct' => false],
                            ['choice_text' => 'La dominance décrit l\'expression d\'un allèle chez l\'hétérozygote, pas sa valeur ni sa fréquence', 'is_correct' => true],
                        ],
                        'explanation' => 'La dominance est une relation d\'expression entre allèles. Elle ne signifie ni avantage systématique, ni fréquence plus élevée, ni origine particulière.',
                    ],
                ],
            ],
            [
                'title' => 'Chromosomes, ADN et organisation de l\'information génétique',
                'description' => 'Comprendre comment l\'ADN est organisé en chromosomes et comment l\'information génétique est répartie dans les cellules.',
                'questions' => [
                    [
                        'question' => 'Pourquoi les chromosomes sont-ils visibles plus facilement au microscope pendant certaines étapes de la division cellulaire ?',
                        'choices' => [
                            ['choice_text' => 'L\'ADN quitte complètement la cellule', 'is_correct' => false],
                            ['choice_text' => 'L\'ADN se condense fortement', 'is_correct' => true],
                            ['choice_text' => 'Les chromosomes deviennent des protéines', 'is_correct' => false],
                            ['choice_text' => 'Le noyau se transforme en membrane', 'is_correct' => false],
                        ],
                        'explanation' => 'Avant et pendant la division, la chromatine se condense en chromosomes plus compacts, ce qui les rend plus faciles à observer.',
                    ],
                    [
                        'question' => 'Chez l\'être humain, combien de chromosomes possède normalement une cellule somatique diploïde ?',
                        'choices' => [
                            ['choice_text' => '23', 'is_correct' => false],
                            ['choice_text' => '92', 'is_correct' => false],
                            ['choice_text' => '44', 'is_correct' => false],
                            ['choice_text' => '46', 'is_correct' => true],
                        ],
                        'explanation' => 'Une cellule somatique humaine possède normalement 46 chromosomes, organisés en 23 paires.',
                    ],
                    [
                        'question' => 'Combien de chromosomes possède normalement un spermatozoïde humain ?',
                        'choices' => [
                            ['choice_text' => '23', 'is_correct' => true],
                            ['choice_text' => '46', 'is_correct' => false],
                            ['choice_text' => '44', 'is_correct' => false],
                            ['choice_text' => '92', 'is_correct' => false],
                        ],
                        'explanation' => 'Un spermatozoïde est haploïde et possède 23 chromosomes. Lors de la fécondation, il apporte un exemplaire de chaque paire au futur embryon.',
                    ],
                    [
                        'question' => 'Un caryotype montre 22 paires de chromosomes non sexuels et une paire de chromosomes sexuels. Quelle conclusion générale peut-on tirer ?',
                        'choices' => [
                            ['choice_text' => 'Il s\'agit forcément d\'une cellule bactérienne', 'is_correct' => false],
                            ['choice_text' => 'Il s\'agit d\'une cellule sans noyau', 'is_correct' => false],
                            ['choice_text' => 'Il s\'agit d\'un caryotype humain classique', 'is_correct' => true],
                            ['choice_text' => 'Il s\'agit forcément d\'une cellule musculaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le caryotype humain classique comporte 23 paires de chromosomes : 22 paires autosomiques et une paire de chromosomes sexuels.',
                    ],
                    [
                        'question' => 'Un élève affirme que chaque chromosome ne contient qu\'un seul gène. Quelle idée doit être corrigée ?',
                        'choices' => [
                            ['choice_text' => 'Un chromosome ne contient jamais d\'ADN', 'is_correct' => false],
                            ['choice_text' => 'Un gène est toujours plus grand qu\'un chromosome', 'is_correct' => false],
                            ['choice_text' => 'Un chromosome porte généralement de nombreux gènes', 'is_correct' => true],
                            ['choice_text' => 'Chaque chromosome est une seule protéine', 'is_correct' => false],
                        ],
                        'explanation' => 'Un chromosome est une longue molécule d\'ADN associée à des protéines et porte généralement de nombreux gènes.',
                    ],
                    [
                        'question' => 'Une mutation touche une seule petite portion d\'ADN. Quelle conséquence est la plus directe ?',
                        'choices' => [
                            ['choice_text' => 'La séquence de cette région peut être modifiée', 'is_correct' => true],
                            ['choice_text' => 'Tous les chromosomes disparaissent', 'is_correct' => false],
                            ['choice_text' => 'La cellule perd immédiatement son noyau', 'is_correct' => false],
                            ['choice_text' => 'Tous les gènes deviennent dominants', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation correspond à une modification de la séquence d\'ADN. Elle peut être localisée dans une petite région sans affecter directement l\'ensemble du génome.',
                    ],
                    [
                        'question' => 'Pourquoi les deux chromosomes d\'une même paire sont-ils appelés homologues ?',
                        'choices' => [
                            ['choice_text' => 'Ils ont toujours exactement la même séquence', 'is_correct' => false],
                            ['choice_text' => 'Ils proviennent toujours du même parent', 'is_correct' => false],
                            ['choice_text' => 'Ils sont constitués de protéines identiques', 'is_correct' => false],
                            ['choice_text' => 'Ils portent les mêmes types de gènes aux mêmes endroits, avec éventuellement des allèles différents', 'is_correct' => true],
                        ],
                        'explanation' => 'Les chromosomes homologues possèdent les mêmes gènes aux mêmes loci, mais leurs allèles peuvent différer entre les deux chromosomes.',
                    ],
                    [
                        'question' => 'Une cellule possède deux exemplaires de chaque chromosome. Quelle formulation est la plus précise ?',
                        'choices' => [
                            ['choice_text' => 'Elle est haploïde', 'is_correct' => false],
                            ['choice_text' => 'Elle est diploïde', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours cancéreuse', 'is_correct' => false],
                            ['choice_text' => 'Elle est dépourvue de génome', 'is_correct' => false],
                        ],
                        'explanation' => 'Une cellule diploïde possède deux jeux de chromosomes, généralement un jeu d\'origine maternelle et un jeu d\'origine paternelle.',
                    ],
                    [
                        'question' => 'Pourquoi la réplication de l\'ADN doit-elle avoir lieu avant une division cellulaire ?',
                        'choices' => [
                            ['choice_text' => 'Pour transformer l\'ADN en glucose', 'is_correct' => false],
                            ['choice_text' => 'Pour que l\'information génétique puisse être répartie entre les cellules filles', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer tous les chromosomes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les cellules haploïdes', 'is_correct' => false],
                        ],
                        'explanation' => 'La réplication produit une copie de l\'ADN avant la division, ce qui permet aux cellules filles de recevoir l\'information génétique nécessaire.',
                    ],
                    [
                        'question' => 'Deux cellules d\'un même organisme peuvent avoir le même ADN mais des fonctions différentes. Comment cela est-il possible ?',
                        'choices' => [
                            ['choice_text' => 'Elles possèdent nécessairement des chromosomes différents', 'is_correct' => false],
                            ['choice_text' => 'L\'une des deux n\'a pas de noyau', 'is_correct' => false],
                            ['choice_text' => 'Leurs gènes sont tous détruits sauf un', 'is_correct' => false],
                            ['choice_text' => 'Elles n\'expriment pas les mêmes ensembles de gènes', 'is_correct' => true],
                        ],
                        'explanation' => 'Les cellules d\'un même organisme peuvent partager un génome mais activer des gènes différents. Cette expression différentielle permet leur spécialisation.',
                    ],
                ],
            ],
            [
                'title' => 'Hérédité et lois de Mendel',
                'description' => 'S\'entraîner à reconnaître les relations entre allèles et à appliquer les principes de base de l\'hérédité mendélienne.',
                'questions' => [
                    [
                        'question' => 'Dans un modèle simple, l\'allèle A est dominant sur a. Quel phénotype attend-on généralement chez un individu Aa ?',
                        'choices' => [
                            ['choice_text' => 'Le phénotype associé uniquement à a', 'is_correct' => false],
                            ['choice_text' => 'Le phénotype associé à A', 'is_correct' => true],
                            ['choice_text' => 'Un troisième phénotype obligatoirement différent', 'is_correct' => false],
                            ['choice_text' => 'Aucun phénotype', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un modèle de dominance complète, l\'allèle dominant A s\'exprime chez l\'hétérozygote Aa.',
                    ],
                    [
                        'question' => 'Deux parents ont le génotype Aa pour un même gène. Quels gamètes chacun peut-il produire pour ce gène ?',
                        'choices' => [
                            ['choice_text' => 'Uniquement des gamètes A', 'is_correct' => false],
                            ['choice_text' => 'Uniquement des gamètes a', 'is_correct' => false],
                            ['choice_text' => 'Des gamètes Aa', 'is_correct' => false],
                            ['choice_text' => 'Des gamètes A ou a', 'is_correct' => true],
                        ],
                        'explanation' => 'Un individu Aa possède deux allèles différents et produit, pour ce gène, des gamètes portant soit A, soit a.',
                    ],
                    [
                        'question' => 'Quel croisement produit uniquement des descendants Aa dans un modèle simple ?',
                        'choices' => [
                            ['choice_text' => 'AA × aa', 'is_correct' => true],
                            ['choice_text' => 'AA × Aa', 'is_correct' => false],
                            ['choice_text' => 'Aa × aa', 'is_correct' => false],
                            ['choice_text' => 'aa × aa', 'is_correct' => false],
                        ],
                        'explanation' => 'Le parent AA ne peut fournir que A et le parent aa ne peut fournir que a. Chaque descendant reçoit donc Aa.',
                    ],
                    [
                        'question' => 'Une plante possède le génotype BB. Quel type de gamètes produit-elle pour ce gène ?',
                        'choices' => [
                            ['choice_text' => 'Uniquement b', 'is_correct' => false],
                            ['choice_text' => 'B et b en proportions égales', 'is_correct' => false],
                            ['choice_text' => 'Uniquement B', 'is_correct' => true],
                            ['choice_text' => 'Des gamètes BB', 'is_correct' => false],
                        ],
                        'explanation' => 'Une plante BB est homozygote et ne possède qu\'un seul type d\'allèle à transmettre : B.',
                    ],
                    [
                        'question' => 'Chez une espèce, l\'allèle T est dominant. Une personne de génotype Tt a un enfant avec une personne tt. Quelle proportion théorique des enfants devrait avoir le génotype Tt ?',
                        'choices' => [
                            ['choice_text' => '25 %', 'is_correct' => false],
                            ['choice_text' => '75 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => true],
                            ['choice_text' => '100 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Le parent Tt produit T ou t, tandis que le parent tt produit uniquement t. Les combinaisons attendues sont Tt et tt, chacune avec 50 %.',
                    ],
                    [
                        'question' => 'Pourquoi la loi de ségrégation des allèles s\'applique-t-elle lors de la formation des gamètes ?',
                        'choices' => [
                            ['choice_text' => 'Les deux allèles d\'un gène se séparent lorsque les chromosomes homologues sont répartis', 'is_correct' => true],
                            ['choice_text' => 'Les deux allèles fusionnent en un seul allèle', 'is_correct' => false],
                            ['choice_text' => 'Tous les allèles sont supprimés avant la méiose', 'is_correct' => false],
                            ['choice_text' => 'Chaque gamète reçoit toujours les deux allèles', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors de la méiose, les chromosomes homologues se séparent. Les deux allèles d\'un même gène sont ainsi répartis dans des gamètes différents.',
                    ],
                    [
                        'question' => 'Un couple hétérozygote Aa × Aa demande pourquoi un enfant peut être aa alors qu\'aucun parent n\'est aa. Quelle réponse convient ?',
                        'choices' => [
                            ['choice_text' => 'L\'allèle a apparaît forcément de nouveau par mutation', 'is_correct' => false],
                            ['choice_text' => 'Un enfant reçoit toujours les deux allèles du parent maternel', 'is_correct' => false],
                            ['choice_text' => 'Le génotype aa n\'est possible que chez des jumeaux', 'is_correct' => false],
                            ['choice_text' => 'Chaque parent peut transmettre l\'allèle a', 'is_correct' => true],
                        ],
                        'explanation' => 'Chaque parent Aa possède l\'allèle a et peut le transmettre. La combinaison a provenant des deux parents donne aa.',
                    ],
                    [
                        'question' => 'Dans un croisement Aa × Aa, quelles proportions génotypiques sont attendues théoriquement ?',
                        'choices' => [
                            ['choice_text' => '50 % AA, 50 % aa', 'is_correct' => false],
                            ['choice_text' => '25 % AA, 50 % Aa, 25 % aa', 'is_correct' => true],
                            ['choice_text' => '75 % Aa, 25 % AA', 'is_correct' => false],
                            ['choice_text' => '100 % Aa', 'is_correct' => false],
                        ],
                        'explanation' => 'Le tableau de croisement donne AA, Aa, Aa et aa. Cela correspond à 25 %, 50 % et 25 % respectivement.',
                    ],
                    [
                        'question' => 'Une famille observe qu\'un caractère récessif apparaît chez un enfant alors qu\'il n\'est pas visible chez ses parents. Quelle situation simple peut l\'expliquer ?',
                        'choices' => [
                            ['choice_text' => 'Les deux parents sont forcément homozygotes dominants', 'is_correct' => false],
                            ['choice_text' => 'Les deux parents sont porteurs hétérozygotes', 'is_correct' => true],
                            ['choice_text' => 'Le caractère récessif ne peut jamais être transmis', 'is_correct' => false],
                            ['choice_text' => 'L\'enfant n\'a reçu aucun chromosome de ses parents', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux parents hétérozygotes peuvent ne pas exprimer un caractère récessif mais chacun transmettre l\'allèle récessif à leur enfant.',
                    ],
                    [
                        'question' => 'Un élève conclut que deux enfants d\'un même couple doivent avoir exactement le même génotype pour tous les gènes. Pourquoi ce raisonnement est-il faux ?',
                        'choices' => [
                            ['choice_text' => 'Les enfants reçoivent tous les chromosomes d\'un seul parent', 'is_correct' => false],
                            ['choice_text' => 'Les gènes changent entièrement à chaque naissance', 'is_correct' => false],
                            ['choice_text' => 'Les parents transmettent toujours les mêmes gamètes', 'is_correct' => false],
                            ['choice_text' => 'Chaque enfant reçoit une combinaison aléatoire d\'allèles issue des gamètes parentaux', 'is_correct' => true],
                        ],
                        'explanation' => 'La méiose et la fécondation créent de nombreuses combinaisons possibles d\'allèles. Des frères et sœurs partagent donc une partie de leur information génétique sans être génétiquement identiques.',
                    ],
                ],
            ],
            [
                'title' => 'Croisements génétiques et probabilités simples',
                'description' => 'Utiliser des tableaux de croisement et des probabilités élémentaires pour prévoir des résultats génétiques dans des cas simples.',
                'questions' => [
                    [
                        'question' => 'Pour un croisement Aa × aa, combien de génotypes différents sont attendus chez la descendance dans le modèle simplifié ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Les combinaisons possibles sont Aa et aa. Il y a donc deux génotypes possibles.',
                    ],
                    [
                        'question' => 'Un croisement Bb × bb est réalisé. Si B est dominant, quelle proportion théorique de la descendance devrait exprimer le caractère dominant ?',
                        'choices' => [
                            ['choice_text' => '25 %', 'is_correct' => false],
                            ['choice_text' => '75 %', 'is_correct' => false],
                            ['choice_text' => '100 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => true],
                        ],
                        'explanation' => 'Le parent Bb produit B ou b tandis que bb ne produit que b. La moitié des descendants devrait être Bb et donc exprimer le caractère dominant.',
                    ],
                    [
                        'question' => 'Une agricultrice croise deux plantes hétérozygotes pour un caractère dominant. Quelle probabilité théorique d\'obtenir un descendant récessif ?',
                        'choices' => [
                            ['choice_text' => '1 sur 4', 'is_correct' => true],
                            ['choice_text' => '1 sur 2', 'is_correct' => false],
                            ['choice_text' => '3 sur 4', 'is_correct' => false],
                            ['choice_text' => '1 sur 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans Aa × Aa, la combinaison aa représente 1 cas sur 4, soit 25 %.',
                    ],
                    [
                        'question' => 'Une classe obtient 48 graines issues d\'un croisement et souhaite comparer les résultats aux 25 % théoriques d\'un génotype. Combien de graines cela représente-t-il environ ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '36', 'is_correct' => false],
                        ],
                        'explanation' => '25 % de 48 = 48 × 0,25 = 12. Un échantillon réel peut s\'écarter un peu de cette valeur théorique.',
                    ],
                    [
                        'question' => 'Lors d\'un test de croisement avec un individu au phénotype dominant, pourquoi utilise-t-on parfois un individu homozygote récessif ?',
                        'choices' => [
                            ['choice_text' => 'Il rend tous les descendants dominants', 'is_correct' => false],
                            ['choice_text' => 'Il supprime les mutations', 'is_correct' => false],
                            ['choice_text' => 'Sa descendance permet de révéler quel allèle dominant est transmis', 'is_correct' => true],
                            ['choice_text' => 'Il double le nombre de chromosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le parent récessif ne peut transmettre que l\'allèle récessif. Le phénotype des descendants permet donc de détecter l\'allèle transmis par l\'individu au phénotype dominant.',
                    ],
                    [
                        'question' => 'Un résultat théorique prévoit 75 % de phénotype dominant dans une descendance de 40 individus. Quelle valeur attend-on en moyenne ?',
                        'choices' => [
                            ['choice_text' => '30', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '35', 'is_correct' => false],
                        ],
                        'explanation' => '75 % de 40 = 0,75 × 40 = 30. Il s\'agit d\'une attente théorique, pas d\'une garantie pour chaque famille.',
                    ],
                    [
                        'question' => 'Dans une expérience, 21 descendants sur 40 montrent un caractère dominant alors que 30 étaient attendus théoriquement. Quelle lecture est la plus raisonnable ?',
                        'choices' => [
                            ['choice_text' => 'La loi de Mendel est automatiquement fausse', 'is_correct' => false],
                            ['choice_text' => 'Les 9 individus manquants ont forcément muté', 'is_correct' => false],
                            ['choice_text' => 'Le caractère dominant a disparu de l\'espèce', 'is_correct' => false],
                            ['choice_text' => 'Le résultat réel peut s\'écarter de l\'attente à cause du hasard d\'échantillonnage', 'is_correct' => true],
                        ],
                        'explanation' => 'Les proportions mendéliennes sont des probabilités théoriques. Sur un nombre limité de descendants, le hasard peut produire un écart notable.',
                    ],
                    [
                        'question' => 'Une personne de génotype Aa et une autre de génotype aa ont déjà un enfant Aa. Quelle est la probabilité théorique que leur prochain enfant soit encore aa ?',
                        'choices' => [
                            ['choice_text' => '25 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => true],
                            ['choice_text' => '75 %', 'is_correct' => false],
                            ['choice_text' => '100 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque grossesse constitue un nouvel événement génétique. Pour Aa × aa, la probabilité d\'obtenir aa reste 50 % à chaque conception.',
                    ],
                    [
                        'question' => 'Un élève additionne les probabilités de toutes les cases d\'un tableau de croisement et obtient 1,2. Quelle erreur révèle le plus probablement ce résultat ?',
                        'choices' => [
                            ['choice_text' => 'Une probabilité totale peut dépasser 1', 'is_correct' => false],
                            ['choice_text' => 'Les probabilités ont été mal calculées ou certaines cases ont été comptées plusieurs fois', 'is_correct' => true],
                            ['choice_text' => 'Le tableau doit toujours contenir 8 cases', 'is_correct' => false],
                            ['choice_text' => 'Les gènes dominants ont une probabilité supérieure à 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des issues mutuellement exclusives et exhaustives, la somme des probabilités doit être égale à 1. Un total de 1,2 signale une erreur de calcul ou de comptage.',
                    ],
                    [
                        'question' => 'Pourquoi les proportions 1:2:1 et 3:1 ne sont-elles pas des promesses pour chaque petite famille ?',
                        'choices' => [
                            ['choice_text' => 'Chaque famille doit respecter exactement ces chiffres', 'is_correct' => false],
                            ['choice_text' => 'Elles ne concernent que les mutations', 'is_correct' => false],
                            ['choice_text' => 'Elles s\'appliquent uniquement aux humains', 'is_correct' => false],
                            ['choice_text' => 'Ce sont des proportions théoriques qui deviennent généralement plus stables quand le nombre de descendants augmente', 'is_correct' => true],
                        ],
                        'explanation' => 'Les ratios mendéliens décrivent des probabilités attendues. Les petits échantillons sont davantage influencés par le hasard que les grandes populations.',
                    ],
                ],
            ],
            [
                'title' => 'Génotype, phénotype et expression des caractères',
                'description' => 'Relier l\'information génétique aux caractères observables et distinguer correctement génotype, phénotype et influence de l\'environnement.',
                'questions' => [
                    [
                        'question' => 'Deux plants possèdent le même génotype mais poussent sous des conditions de lumière très différentes. Quel constat est possible ?',
                        'choices' => [
                            ['choice_text' => 'Leur ADN devient forcément identique', 'is_correct' => false],
                            ['choice_text' => 'Leur phénotype peut différer en partie sous l\'effet de l\'environnement', 'is_correct' => true],
                            ['choice_text' => 'Leur génotype change à chaque journée', 'is_correct' => false],
                            ['choice_text' => 'Ils deviennent automatiquement homozygotes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le phénotype résulte de l\'expression du génotype dans un environnement donné. Des conditions différentes peuvent donc modifier certains caractères observables.',
                    ],
                    [
                        'question' => 'Lequel correspond à un génotype plutôt qu\'à un phénotype ?',
                        'choices' => [
                            ['choice_text' => 'Taille de 1,72 m', 'is_correct' => false],
                            ['choice_text' => 'Couleur des fleurs observée', 'is_correct' => false],
                            ['choice_text' => 'Groupe sanguin observé', 'is_correct' => false],
                            ['choice_text' => 'Aa', 'is_correct' => true],
                        ],
                        'explanation' => 'Aa décrit une combinaison d\'allèles, donc un génotype. Les autres propositions décrivent des caractères observables.',
                    ],
                    [
                        'question' => 'Une mutation empêche une cellule de produire correctement une protéine. Quelle chaîne de causalité est la plus logique ?',
                        'choices' => [
                            ['choice_text' => 'Modification de l\'ADN → modification de l\'information génétique → protéine altérée ou absente → effet possible sur le caractère', 'is_correct' => true],
                            ['choice_text' => 'Modification du phénotype → création immédiate d\'un nouveau chromosome → disparition de l\'ADN', 'is_correct' => false],
                            ['choice_text' => 'Protéine normale → mutation → disparition de tous les gènes', 'is_correct' => false],
                            ['choice_text' => 'Environnement → suppression automatique de toutes les protéines', 'is_correct' => false],
                        ],
                        'explanation' => 'Une modification de la séquence d\'ADN peut changer l\'information utilisée pour fabriquer une protéine. L\'effet sur le caractère dépend ensuite de la fonction de cette protéine.',
                    ],
                    [
                        'question' => 'Pourquoi deux personnes ayant le même allèle d\'un gène peuvent-elles parfois présenter des différences observables ?',
                        'choices' => [
                            ['choice_text' => 'Un allèle impose toujours exactement le même phénotype dans toutes les situations', 'is_correct' => false],
                            ['choice_text' => 'Les chromosomes sexuels disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Le phénotype peut aussi dépendre d\'autres gènes et de l\'environnement', 'is_correct' => true],
                            ['choice_text' => 'Un allèle n\'agit jamais sur un caractère', 'is_correct' => false],
                        ],
                        'explanation' => 'Les caractères complexes dépendent souvent de plusieurs gènes et de facteurs environnementaux. Un seul allèle ne suffit donc pas toujours à expliquer toute la variation observée.',
                    ],
                    [
                        'question' => 'Un élève voit qu\'une personne grande est forcément issue de parents grands et conclut que la taille est déterminée par un seul gène. Pourquoi cette conclusion est-elle trop simple ?',
                        'choices' => [
                            ['choice_text' => 'La taille n\'a aucune composante génétique', 'is_correct' => false],
                            ['choice_text' => 'Les gènes ne peuvent jamais influencer la croissance', 'is_correct' => false],
                            ['choice_text' => 'La taille humaine est un caractère complexe influencé par de nombreux gènes et par l\'environnement', 'is_correct' => true],
                            ['choice_text' => 'La taille dépend uniquement du hasard', 'is_correct' => false],
                        ],
                        'explanation' => 'La taille dépend de nombreux facteurs génétiques ainsi que de l\'alimentation, de la santé et d\'autres conditions environnementales. Elle n\'est donc pas un caractère simple contrôlé par un seul gène.',
                    ],
                    [
                        'question' => 'Dans un modèle de dominance complète, un individu AA et un individu Aa présentent le même phénotype. Que montre cet exemple ?',
                        'choices' => [
                            ['choice_text' => 'Un même phénotype peut correspondre à plusieurs génotypes', 'is_correct' => true],
                            ['choice_text' => 'Le phénotype révèle toujours tous les allèles', 'is_correct' => false],
                            ['choice_text' => 'Les individus Aa et AA ont le même ADN', 'is_correct' => false],
                            ['choice_text' => 'La dominance supprime l\'allèle récessif', 'is_correct' => false],
                        ],
                        'explanation' => 'Le phénotype dominant peut être produit par AA ou Aa. Observer le caractère ne permet donc pas toujours de connaître le génotype exact.',
                    ],
                    [
                        'question' => 'Un médecin explique qu\'un test génétique peut révéler une prédisposition sans garantir qu\'une maladie apparaîtra. Quelle idée cela illustre-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Les gènes n\'ont aucun effet sur la santé', 'is_correct' => false],
                            ['choice_text' => 'Toute mutation provoque obligatoirement une maladie', 'is_correct' => false],
                            ['choice_text' => 'Le phénotype est toujours indépendant du génotype', 'is_correct' => false],
                            ['choice_text' => 'L\'information génétique peut influencer un risque sans déterminer à elle seule le résultat final', 'is_correct' => true],
                        ],
                        'explanation' => 'Certaines caractéristiques résultent de l\'interaction entre plusieurs gènes et l\'environnement. Une variante génétique peut modifier une probabilité sans assurer un résultat.',
                    ],
                    [
                        'question' => 'Une plante dispose du génotype correspondant à des fleurs rouges, mais son développement est perturbé par une carence sévère. Quel effet peut être observé ?',
                        'choices' => [
                            ['choice_text' => 'Le génotype devient immédiatement récessif', 'is_correct' => false],
                            ['choice_text' => 'Le phénotype peut être modifié malgré le génotype', 'is_correct' => true],
                            ['choice_text' => 'Les chromosomes quittent la cellule', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de gènes est divisé par deux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le développement et l\'apparence d\'un organisme dépendent aussi des conditions environnementales. Une carence peut donc modifier l\'expression d\'un caractère.',
                    ],
                    [
                        'question' => 'Quelle distinction est la plus utile lorsqu\'on analyse une variation biologique ?',
                        'choices' => [
                            ['choice_text' => 'Supposer que toute différence visible vient d\'un seul gène', 'is_correct' => false],
                            ['choice_text' => 'Demander ce qui vient du génotype et ce qui peut venir de l\'environnement', 'is_correct' => true],
                            ['choice_text' => 'Ignorer les conditions de vie', 'is_correct' => false],
                            ['choice_text' => 'Confondre chromosome et caractère', 'is_correct' => false],
                        ],
                        'explanation' => 'Analyser la relation génotype-phénotype demande de considérer l\'information génétique, mais aussi le contexte biologique et environnemental lorsqu\'il est pertinent.',
                    ],
                    [
                        'question' => 'Deux jumeaux identiques développent des différences de masse corporelle après plusieurs années dans des modes de vie différents. Quelle conclusion est compatible avec la génétique ?',
                        'choices' => [
                            ['choice_text' => 'Leurs chromosomes sont forcément devenus différents', 'is_correct' => false],
                            ['choice_text' => 'Un seul jumeau a perdu la moitié de son ADN', 'is_correct' => false],
                            ['choice_text' => 'Les gènes cessent totalement de fonctionner', 'is_correct' => false],
                            ['choice_text' => 'Même génome ne signifie pas même phénotype dans toutes les conditions', 'is_correct' => true],
                        ],
                        'explanation' => 'Les jumeaux identiques ont en grande partie le même génome, mais l\'alimentation, l\'activité, le milieu et d\'autres facteurs peuvent modifier certains caractères.',
                    ],
                ],
            ],
            [
                'title' => 'Mutations et diversité génétique',
                'description' => 'Identifier les types simples de mutations, comprendre leur origine et relier les variations de l\'ADN à la diversité des organismes.',
                'questions' => [
                    [
                        'question' => 'Une mutation est définie au niveau moléculaire comme :',
                        'choices' => [
                            ['choice_text' => 'Une division normale d\'une cellule', 'is_correct' => false],
                            ['choice_text' => 'Une modification de la séquence d\'ADN', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation de la température corporelle', 'is_correct' => false],
                            ['choice_text' => 'Une production de protéines', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation est une modification de la séquence de l\'ADN. Elle peut être petite ou toucher des régions plus importantes du génome.',
                    ],
                    [
                        'question' => 'Une mutation change une seule base de l\'ADN sans modifier la longueur de la séquence. De quel type de changement simple s\'agit-il ?',
                        'choices' => [
                            ['choice_text' => 'Une duplication complète du génome', 'is_correct' => false],
                            ['choice_text' => 'Une fusion de cellules', 'is_correct' => false],
                            ['choice_text' => 'Une séparation des chromosomes', 'is_correct' => false],
                            ['choice_text' => 'Une substitution', 'is_correct' => true],
                        ],
                        'explanation' => 'Une substitution remplace une base par une autre. La longueur de la séquence reste généralement inchangée.',
                    ],
                    [
                        'question' => 'Toutes les mutations sont-elles dangereuses ?',
                        'choices' => [
                            ['choice_text' => 'Non, certaines sont neutres et certaines peuvent être bénéfiques selon le contexte', 'is_correct' => true],
                            ['choice_text' => 'Oui, toutes provoquent une maladie', 'is_correct' => false],
                            ['choice_text' => 'Oui, toutes détruisent un chromosome', 'is_correct' => false],
                            ['choice_text' => 'Non, car aucune mutation ne peut modifier une protéine', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'effet d\'une mutation dépend de sa localisation et de son impact. Certaines sont neutres, d\'autres nuisibles ou, dans certains environnements, avantageuses.',
                    ],
                    [
                        'question' => 'Pourquoi une mutation dans une cellule de la peau n\'est-elle généralement pas transmise aux enfants ?',
                        'choices' => [
                            ['choice_text' => 'Toute mutation est automatiquement réparée', 'is_correct' => false],
                            ['choice_text' => 'Les cellules de la peau n\'ont pas d\'ADN', 'is_correct' => false],
                            ['choice_text' => 'Elle ne se trouve généralement pas dans la lignée germinale produisant les gamètes', 'is_correct' => true],
                            ['choice_text' => 'Les enfants n\'héritent jamais de mutations', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour être transmise à la descendance, une variation doit généralement être présente dans les cellules germinales ou leurs précurseurs, pas uniquement dans une cellule somatique.',
                    ],
                    [
                        'question' => 'Un rayonnement endommage l\'ADN d\'une cellule. Quelle proposition est la plus prudente ?',
                        'choices' => [
                            ['choice_text' => 'La cellule devient forcément cancéreuse', 'is_correct' => false],
                            ['choice_text' => 'Le rayonnement change toujours tous les chromosomes', 'is_correct' => false],
                            ['choice_text' => 'La cellule peut réparer le dommage, conserver une mutation ou être éliminée selon l\'ampleur de l\'atteinte', 'is_correct' => true],
                            ['choice_text' => 'Le dommage disparaît systématiquement sans conséquence', 'is_correct' => false],
                        ],
                        'explanation' => 'Les systèmes cellulaires peuvent réparer certains dommages. Selon l\'atteinte et sa réparation, une mutation peut persister ou la cellule peut être éliminée.',
                    ],
                    [
                        'question' => 'Deux populations d\'une même espèce présentent de petites différences génétiques. Comment ces différences peuvent-elles contribuer à la diversité ?',
                        'choices' => [
                            ['choice_text' => 'Elles fournissent des variations sur lesquelles les mécanismes évolutifs peuvent agir', 'is_correct' => true],
                            ['choice_text' => 'Elles empêchent toute reproduction', 'is_correct' => false],
                            ['choice_text' => 'Elles rendent tous les individus identiques', 'is_correct' => false],
                            ['choice_text' => 'Elles suppriment les chromosomes homologues', 'is_correct' => false],
                        ],
                        'explanation' => 'La diversité génétique fournit des différences entre individus. Ces variations constituent une matière première importante pour l\'évolution des populations.',
                    ],
                    [
                        'question' => 'Une mutation modifie une région codante et entraîne un changement d\'un acide aminé dans une protéine. Quelle conséquence est plausible ?',
                        'choices' => [
                            ['choice_text' => 'La protéine devient forcément plus performante', 'is_correct' => false],
                            ['choice_text' => 'Le gène disparaît toujours entièrement', 'is_correct' => false],
                            ['choice_text' => 'La cellule devient automatiquement haploïde', 'is_correct' => false],
                            ['choice_text' => 'La fonction de la protéine peut être modifiée, selon l\'acide aminé et sa position', 'is_correct' => true],
                        ],
                        'explanation' => 'Changer un acide aminé peut avoir peu d\'effet ou modifier la structure et la fonction d\'une protéine. Tout dépend du contexte moléculaire.',
                    ],
                    [
                        'question' => 'Pourquoi dit-on que les mutations sont une source de variation mais qu\'elles ne répondent pas aux besoins de l\'organisme ?',
                        'choices' => [
                            ['choice_text' => 'Elles surviennent uniquement quand un caractère serait utile', 'is_correct' => false],
                            ['choice_text' => 'Elles apparaissent sans être produites parce qu\'un organisme « veut » obtenir un caractère précis', 'is_correct' => true],
                            ['choice_text' => 'Elles sont dirigées par les individus', 'is_correct' => false],
                            ['choice_text' => 'Elles ne peuvent jamais avoir d\'effet', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation n\'est pas provoquée par un besoin conscient de l\'organisme. Une variation apparaît puis son devenir dépend notamment de la sélection, de la dérive et du contexte.',
                    ],
                    [
                        'question' => 'Une mutation d\'un gène est présente chez un parent dans un gamète et est ensuite retrouvée chez l\'enfant. Quelle condition a rendu cette transmission possible ?',
                        'choices' => [
                            ['choice_text' => 'La mutation se trouvait uniquement dans une cellule musculaire', 'is_correct' => false],
                            ['choice_text' => 'La mutation était présente dans la lignée germinale du parent', 'is_correct' => true],
                            ['choice_text' => 'La mutation était seulement dans les cheveux', 'is_correct' => false],
                            ['choice_text' => 'La mutation n\'avait aucun support dans l\'ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation présente dans un gamète peut être transmise lors de la fécondation et se retrouver ensuite dans les cellules de la descendance.',
                    ],
                    [
                        'question' => 'Un étudiant affirme qu\'une mutation « crée toujours une nouvelle espèce ». Quelle réponse convient ?',
                        'choices' => [
                            ['choice_text' => 'Une mutation suffit toujours à former une espèce', 'is_correct' => false],
                            ['choice_text' => 'Les espèces changent uniquement par hasard en une génération', 'is_correct' => false],
                            ['choice_text' => 'Une mutation ne peut jamais être héritée', 'is_correct' => false],
                            ['choice_text' => 'Une mutation produit une variation génétique ; la formation d\'une nouvelle espèce implique des processus évolutifs plus larges', 'is_correct' => true],
                        ],
                        'explanation' => 'Une mutation peut introduire une variation, mais la spéciation dépend de processus et de temps évolutifs plus larges, souvent avec accumulation de différences et isolement reproductif.',
                    ],
                ],
            ],
            [
                'title' => 'Méiose, gamètes et transmission des caractères',
                'description' => 'Comprendre le rôle de la méiose et de la fécondation dans la formation des gamètes et la transmission de l\'information génétique.',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle essentiel de la méiose dans la reproduction sexuée ?',
                        'choices' => [
                            ['choice_text' => 'Doubler indéfiniment le nombre de chromosomes', 'is_correct' => false],
                            ['choice_text' => 'Produire des cellules haploïdes à partir d\'une cellule diploïde', 'is_correct' => true],
                            ['choice_text' => 'Produire uniquement des cellules de peau', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tout l\'ADN de la cellule', 'is_correct' => false],
                        ],
                        'explanation' => 'La méiose réduit de moitié le nombre de chromosomes et produit des cellules haploïdes destinées à devenir des gamètes.',
                    ],
                    [
                        'question' => 'Pourquoi la réduction du nombre de chromosomes lors de la méiose est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'Elle empêche toute fécondation', 'is_correct' => false],
                            ['choice_text' => 'Elle rend tous les gamètes identiques', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les mutations', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de retrouver le nombre diploïde après la fécondation sans doubler le nombre de chromosomes à chaque génération', 'is_correct' => true],
                        ],
                        'explanation' => 'Deux gamètes haploïdes fusionnent lors de la fécondation. La réduction préalable permet de restaurer le nombre diploïde de l\'espèce.',
                    ],
                    [
                        'question' => 'Chez l\'être humain, combien de chromosomes contient normalement un ovule ?',
                        'choices' => [
                            ['choice_text' => '23', 'is_correct' => true],
                            ['choice_text' => '46', 'is_correct' => false],
                            ['choice_text' => '92', 'is_correct' => false],
                            ['choice_text' => '44', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme le spermatozoïde, l\'ovule est haploïde et contient normalement 23 chromosomes.',
                    ],
                    [
                        'question' => 'Une cellule humaine diploïde entre en méiose avec 46 chromosomes. Combien de chromosomes possède normalement chacune des cellules haploïdes produites ?',
                        'choices' => [
                            ['choice_text' => '46', 'is_correct' => false],
                            ['choice_text' => '92', 'is_correct' => false],
                            ['choice_text' => '23', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'La méiose réduit le nombre de chromosomes de 46 à 23 dans les cellules haploïdes.',
                    ],
                    [
                        'question' => 'Pourquoi la descendance de deux parents n\'est-elle pas génétiquement identique à l\'un d\'eux ?',
                        'choices' => [
                            ['choice_text' => 'L\'enfant reçoit uniquement les gènes du parent qui a le plus de caractères visibles', 'is_correct' => false],
                            ['choice_text' => 'La méiose détruit tous les allèles', 'is_correct' => false],
                            ['choice_text' => 'La méiose et la fécondation combinent des allèles provenant des deux parents', 'is_correct' => true],
                            ['choice_text' => 'La fécondation produit toujours un clone d\'un parent', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque parent transmet une combinaison d\'allèles dans ses gamètes, puis ces gamètes se combinent lors de la fécondation, créant une nouvelle combinaison génétique.',
                    ],
                    [
                        'question' => 'Le brassage génétique pendant la méiose contribue à la diversité. Quel mécanisme simple y participe ?',
                        'choices' => [
                            ['choice_text' => 'La répartition aléatoire des chromosomes homologues dans les gamètes', 'is_correct' => true],
                            ['choice_text' => 'La copie exacte d\'un seul chromosome dans chaque gamète', 'is_correct' => false],
                            ['choice_text' => 'La suppression des allèles récessifs', 'is_correct' => false],
                            ['choice_text' => 'La transformation de l\'ADN en lipides', 'is_correct' => false],
                        ],
                        'explanation' => 'La répartition indépendante des chromosomes homologues lors de la méiose crée de nombreuses combinaisons possibles de chromosomes dans les gamètes.',
                    ],
                    [
                        'question' => 'Deux gamètes différents issus d\'un même parent peuvent porter des combinaisons d\'allèles différentes. Pourquoi ?',
                        'choices' => [
                            ['choice_text' => 'Chaque gamète reçoit nécessairement exactement le même ADN', 'is_correct' => false],
                            ['choice_text' => 'Les gamètes n\'ont pas de chromosomes', 'is_correct' => false],
                            ['choice_text' => 'Les allèles se transforment en protéines avant la méiose', 'is_correct' => false],
                            ['choice_text' => 'La méiose redistribue les chromosomes homologues et peut entraîner de nouvelles combinaisons', 'is_correct' => true],
                        ],
                        'explanation' => 'Lors de la méiose, les chromosomes sont répartis de façon variable entre les cellules produites, ce qui favorise la diversité des combinaisons d\'allèles.',
                    ],
                    [
                        'question' => 'Une erreur de séparation des chromosomes pendant la formation des gamètes peut produire un gamète avec un chromosome en trop. Comment appelle-t-on ce type d\'erreur générale ?',
                        'choices' => [
                            ['choice_text' => 'Une transcription', 'is_correct' => false],
                            ['choice_text' => 'Une non-disjonction', 'is_correct' => true],
                            ['choice_text' => 'Une traduction', 'is_correct' => false],
                            ['choice_text' => 'Une réplication normale', 'is_correct' => false],
                        ],
                        'explanation' => 'La non-disjonction correspond à une mauvaise séparation des chromosomes ou chromatides pendant la division, pouvant produire des gamètes avec un nombre anormal de chromosomes.',
                    ],
                    [
                        'question' => 'Un étudiant mélange le rôle de la mitose et celui de la méiose. Quelle association est correcte ?',
                        'choices' => [
                            ['choice_text' => 'La mitose produit toujours des gamètes haploïdes', 'is_correct' => false],
                            ['choice_text' => 'La mitose sert surtout à la croissance et au renouvellement, tandis que la méiose forme les cellules reproductrices', 'is_correct' => true],
                            ['choice_text' => 'La méiose sert seulement à réparer les tissus', 'is_correct' => false],
                            ['choice_text' => 'Les deux processus ont toujours exactement le même résultat', 'is_correct' => false],
                        ],
                        'explanation' => 'La mitose permet notamment de produire des cellules somatiques et de conserver le nombre chromosomique, tandis que la méiose est spécialisée dans la formation des cellules reproductrices.',
                    ],
                    [
                        'question' => 'Pourquoi la fécondation augmente-t-elle encore la diversité génétique ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'elle efface toutes les différences génétiques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle transforme tous les allèles en allèles dominants', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle empêche la recombinaison', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'un gamète maternel et un gamète paternel se rencontrent parmi de nombreuses combinaisons possibles', 'is_correct' => true],
                        ],
                        'explanation' => 'La rencontre aléatoire d\'un gamète provenant de chaque parent ajoute une nouvelle étape de combinaison de l\'information génétique.',
                    ],
                ],
            ],
            [
                'title' => 'Génétique humaine et applications simples',
                'description' => 'Interpréter des situations familiales et des résultats simples en combinant génotype, transmission récessive ou dominante, chromosomes et probabilités.',
                'questions' => [
                    [
                        'question' => 'Dans un arbre généalogique, plusieurs membres d\'une famille présentent un caractère. Pourquoi représente-t-on plusieurs générations ?',
                        'choices' => [
                            ['choice_text' => 'Pour mesurer la taille des chromosomes', 'is_correct' => false],
                            ['choice_text' => 'Pour observer comment le caractère se transmet au fil des générations', 'is_correct' => true],
                            ['choice_text' => 'Pour identifier uniquement les mutations bactériennes', 'is_correct' => false],
                            ['choice_text' => 'Pour compter les protéines', 'is_correct' => false],
                        ],
                        'explanation' => 'Plusieurs générations permettent d\'observer les liens de parenté et d\'identifier des schémas possibles de transmission d\'un caractère.',
                    ],
                    [
                        'question' => 'Un caractère récessif autosomique n\'est pas visible chez deux parents mais apparaît chez leur enfant. Quelle combinaison parentale est compatible avec ce cas ?',
                        'choices' => [
                            ['choice_text' => 'AA × AA', 'is_correct' => false],
                            ['choice_text' => 'AA × Aa', 'is_correct' => false],
                            ['choice_text' => 'aa × aa', 'is_correct' => false],
                            ['choice_text' => 'Aa × Aa', 'is_correct' => true],
                        ],
                        'explanation' => 'Deux parents hétérozygotes peuvent ne pas exprimer le caractère récessif mais chacun transmettre l\'allèle récessif, permettant un enfant aa.',
                    ],
                    [
                        'question' => 'Une personne atteinte d\'une maladie génétique veut savoir si ses enfants seront forcément atteints. Pourquoi ne peut-on pas répondre uniquement en regardant son phénotype ?',
                        'choices' => [
                            ['choice_text' => 'Il faut connaître le mode de transmission et, selon le cas, le génotype des deux parents', 'is_correct' => true],
                            ['choice_text' => 'Le phénotype ne dépend jamais des gènes', 'is_correct' => false],
                            ['choice_text' => 'Une maladie génétique ne peut pas être héréditaire', 'is_correct' => false],
                            ['choice_text' => 'Tous les enfants d\'une personne atteinte sont automatiquement atteints', 'is_correct' => false],
                        ],
                        'explanation' => 'Le risque de transmission dépend du type de maladie, de ses allèles et du génotype du partenaire. Le phénotype d\'un seul parent ne suffit pas toujours.',
                    ],
                    [
                        'question' => 'Un couple consulte pour une maladie autosomique récessive. Les deux parents sont connus comme porteurs sains. Quel risque théorique a chaque enfant d\'être atteint ?',
                        'choices' => [
                            ['choice_text' => '50 %', 'is_correct' => false],
                            ['choice_text' => '75 %', 'is_correct' => false],
                            ['choice_text' => '25 %', 'is_correct' => true],
                            ['choice_text' => '100 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour Aa × Aa, la combinaison aa a une probabilité de 1/4, soit 25 %, à chaque conception.',
                    ],
                    [
                        'question' => 'Pourquoi les probabilités d\'un premier et d\'un deuxième enfant sont-elles généralement calculées séparément ?',
                        'choices' => [
                            ['choice_text' => 'Un premier enfant détermine toujours le génotype du deuxième', 'is_correct' => false],
                            ['choice_text' => 'Les parents changent de chromosomes après chaque naissance', 'is_correct' => false],
                            ['choice_text' => 'Chaque fécondation est un nouvel événement aléatoire ; le résultat précédent ne change pas directement les probabilités génétiques de la suivante', 'is_correct' => true],
                            ['choice_text' => 'Les probabilités génétiques ne peuvent être calculées que pour le premier enfant', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un modèle simple, chaque conception résulte d\'une nouvelle combinaison de gamètes. Le résultat d\'une naissance ne fixe pas la suivante.',
                    ],
                    [
                        'question' => 'Une maladie est liée au chromosome X. Pourquoi l\'analyse de sa transmission demande-t-elle de tenir compte du sexe chromosomique ?',
                        'choices' => [
                            ['choice_text' => 'Les individus ne possèdent pas les mêmes combinaisons de chromosomes sexuels, ce qui modifie la manière dont certains allèles liés à X sont transmis', 'is_correct' => true],
                            ['choice_text' => 'Le chromosome X n\'a aucun gène', 'is_correct' => false],
                            ['choice_text' => 'Les chromosomes sexuels sont toujours identiques chez tous les individus', 'is_correct' => false],
                            ['choice_text' => 'Les maladies liées à X sont toujours dominantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les chromosomes sexuels diffèrent selon le caryotype. Pour un gène situé sur X, le nombre de copies et la transmission parent-enfant peuvent donc varier.',
                    ],
                    [
                        'question' => 'Un arbre montre qu\'un caractère apparaît chez des garçons mais pas chez leur père, alors que leur mère ne présente pas le caractère. Quelle hypothèse peut être envisagée pour un caractère récessif lié à X ?',
                        'choices' => [
                            ['choice_text' => 'Le père transmet toujours son chromosome X à ses fils', 'is_correct' => false],
                            ['choice_text' => 'Les fils reçoivent deux chromosomes X de leur père', 'is_correct' => false],
                            ['choice_text' => 'Un caractère lié à X ne peut jamais être récessif', 'is_correct' => false],
                            ['choice_text' => 'La mère peut être porteuse et transmettre l\'allèle à certains fils', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans un modèle récessif lié à X, une mère porteuse peut transmettre son chromosome X portant l\'allèle à un fils, qui n\'a pas d\'autre chromosome X pour masquer cet allèle.',
                    ],
                    [
                        'question' => 'Pourquoi un arbre généalogique ne permet-il pas toujours de prouver à lui seul qu\'un caractère est dû à un seul gène ?',
                        'choices' => [
                            ['choice_text' => 'Tous les caractères sont obligatoirement monogéniques', 'is_correct' => false],
                            ['choice_text' => 'Des caractères complexes peuvent dépendre de plusieurs gènes et de l\'environnement, et certaines informations familiales peuvent manquer', 'is_correct' => true],
                            ['choice_text' => 'Un arbre montre directement l\'ADN de chaque personne', 'is_correct' => false],
                            ['choice_text' => 'Un arbre contient toujours le génotype exact de chaque individu', 'is_correct' => false],
                        ],
                        'explanation' => 'Un arbre généalogique fournit des informations familiales, mais il faut parfois des tests génétiques et davantage de données pour déterminer précisément le mécanisme biologique.',
                    ],
                    [
                        'question' => 'Une personne confond « risque de 25 % à chaque grossesse » avec « un enfant sur quatre dans chaque famille ». Quelle correction est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Après quatre naissances, il faut toujours avoir exactement un enfant atteint', 'is_correct' => false],
                            ['choice_text' => '25 % est une probabilité pour chaque conception, pas une obligation de résultat sur quatre naissances', 'is_correct' => true],
                            ['choice_text' => 'La probabilité devient 100 % après quatre grossesses', 'is_correct' => false],
                            ['choice_text' => 'Le risque de 25 % s\'applique uniquement à la première grossesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Une probabilité de 25 % s\'applique à chaque événement. Sur quatre naissances, le nombre réel peut être 0, 1, 2, 3 ou 4 enfants atteints.',
                    ],
                    [
                        'question' => 'Une famille observe un caractère présent chez chaque génération, mais les données disponibles sont limitées. Quelle attitude scientifique est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'Déclarer immédiatement que le caractère est dominant', 'is_correct' => false],
                            ['choice_text' => 'Conclure qu\'il s\'agit forcément d\'une mutation récente', 'is_correct' => false],
                            ['choice_text' => 'Ignorer complètement les informations familiales', 'is_correct' => false],
                            ['choice_text' => 'Formuler une hypothèse de transmission puis rechercher davantage de données avant de conclure', 'is_correct' => true],
                        ],
                        'explanation' => 'Un motif familial peut orienter vers une hypothèse, mais des données supplémentaires sont nécessaires pour distinguer correctement les modes de transmission possibles.',
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
