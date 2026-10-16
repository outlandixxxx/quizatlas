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

        $quizzes = [
            [
                'title' => 'Les bases de la génétique',
                'description' => 'Découvrir les notions essentielles de gène, allèle, chromosome, ADN, génotype et phénotype à travers des situations simples.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Une famille remarque que plusieurs de ses membres ont les yeux bruns. En génétique, quel terme désigne une unité d’information héréditaire portée par l’ADN ?',
                        'choices' => [
                            ['choice_text' => 'Un chromosome', 'is_correct' => false],
                            ['choice_text' => 'Un gène', 'is_correct' => true],
                            ['choice_text' => 'Un nucléotide', 'is_correct' => false],
                            ['choice_text' => 'Un caryotype', 'is_correct' => false],
                        ],
                        'explanation' => 'Un gène est une portion d’ADN qui participe à la détermination d’un caractère ou à la production d’une molécule fonctionnelle.',
                    ],
                    [
                        'question' => 'Sur une paire de chromosomes homologues, un même caractère peut être associé à différentes versions d’un gène. Comment appelle-t-on ces versions ?',
                        'choices' => [
                            ['choice_text' => 'Des gamètes', 'is_correct' => false],
                            ['choice_text' => 'Des chromatides', 'is_correct' => false],
                            ['choice_text' => 'Des génotypes', 'is_correct' => false],
                            ['choice_text' => 'Des allèles', 'is_correct' => true],
                        ],
                        'explanation' => 'Les allèles sont des versions différentes d’un même gène. Ils peuvent contribuer à des variations d’un caractère.',
                    ],
                    [
                        'question' => 'Chez l’être humain, où se trouve l’essentiel de l’ADN qui constitue les chromosomes ?',
                        'choices' => [
                            ['choice_text' => 'Dans le noyau des cellules', 'is_correct' => true],
                            ['choice_text' => 'Dans la membrane cellulaire', 'is_correct' => false],
                            ['choice_text' => 'Dans les lysosomes', 'is_correct' => false],
                            ['choice_text' => 'Dans les ribosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les cellules humaines, l’essentiel de l’ADN chromosomique se trouve dans le noyau, où sont organisés les chromosomes.',
                    ],
                    [
                        'question' => 'Un élève écrit « génotype » lorsqu’il décrit la couleur des yeux observée chez une personne. Quel terme convient mieux pour le caractère observable ?',
                        'choices' => [
                            ['choice_text' => 'Allèle', 'is_correct' => false],
                            ['choice_text' => 'Chromosome', 'is_correct' => false],
                            ['choice_text' => 'Phénotype', 'is_correct' => true],
                            ['choice_text' => 'Caryotype', 'is_correct' => false],
                        ],
                        'explanation' => 'Le phénotype correspond aux caractères observables d’un individu. Le génotype décrit la combinaison d’allèles qu’il possède.',
                    ],
                    [
                        'question' => 'Dans la double hélice d’ADN, la base A est toujours appariée à la base :',
                        'choices' => [
                            ['choice_text' => 'C', 'is_correct' => false],
                            ['choice_text' => 'G', 'is_correct' => false],
                            ['choice_text' => 'U', 'is_correct' => false],
                            ['choice_text' => 'T', 'is_correct' => true],
                        ],
                        'explanation' => 'A s’apparie à T et C à G : c’est la complémentarité des bases, qui permet de copier fidèlement l’ADN.',
                    ],
                    [
                        'question' => 'Quel énoncé distingue correctement un chromosome d’un gène ?',
                        'choices' => [
                            ['choice_text' => 'Un gène est un ensemble de plusieurs chromosomes réunis', 'is_correct' => false],
                            ['choice_text' => 'Un chromosome est une longue structure d’ADN portant de nombreux gènes', 'is_correct' => true],
                            ['choice_text' => 'Un chromosome est une protéine fabriquée à partir d’un gène', 'is_correct' => false],
                            ['choice_text' => 'Un gène est plus grand qu’un chromosome et le contient', 'is_correct' => false],
                        ],
                        'explanation' => 'Un chromosome est une structure organisée d’ADN qui porte de nombreux gènes. Un gène n’est qu’une région particulière de cet ADN.',
                    ],
                    [
                        'question' => 'Une personne possède deux exemplaires d’un même gène, tous deux identiques. Quel terme décrit cette situation ?',
                        'choices' => [
                            ['choice_text' => 'Hétérozygote', 'is_correct' => false],
                            ['choice_text' => 'Haploïde', 'is_correct' => false],
                            ['choice_text' => 'Homozygote', 'is_correct' => true],
                            ['choice_text' => 'Mutant', 'is_correct' => false],
                        ],
                        'explanation' => 'Un individu est homozygote pour un gène lorsque ses deux allèles sont identiques, par exemple AA ou aa.',
                    ],
                    [
                        'question' => 'Pour un caractère donné, un individu possède les allèles B et b. Que peut-on dire de son génotype ?',
                        'choices' => [
                            ['choice_text' => 'Il est hétérozygote', 'is_correct' => true],
                            ['choice_text' => 'Il est homozygote dominant', 'is_correct' => false],
                            ['choice_text' => 'Il est homozygote récessif', 'is_correct' => false],
                            ['choice_text' => 'Il est haploïde pour ce gène', 'is_correct' => false],
                        ],
                        'explanation' => 'Le génotype Bb contient deux allèles différents : l’individu est donc hétérozygote pour ce gène.',
                    ],
                    [
                        'question' => 'Un professeur compare le caryotype d’une cellule de peau à celui d’une cellule reproductrice. Quelle différence faut-il attendre ?',
                        'choices' => [
                            ['choice_text' => 'La cellule reproductrice possède deux fois plus de chromosomes', 'is_correct' => false],
                            ['choice_text' => 'La cellule de peau ne possède que les chromosomes sexuels et la moitié des autosomes', 'is_correct' => false],
                            ['choice_text' => 'La cellule reproductrice n’a qu’un exemplaire de chaque chromosome', 'is_correct' => true],
                            ['choice_text' => 'Les deux cellules ont le même nombre de chromosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules reproductrices humaines sont haploïdes, contrairement aux cellules somatiques diploïdes.',
                    ],
                    [
                        'question' => 'Une erreur fréquente consiste à penser qu’un allèle dominant est toujours « meilleur » ou plus fréquent dans la population. Quelle correction est juste ?',
                        'choices' => [
                            ['choice_text' => 'Un allèle dominant est avantageux pour l’individu qui le porte', 'is_correct' => false],
                            ['choice_text' => 'Un allèle dominant devient majoritaire dans la population en quelques générations', 'is_correct' => false],
                            ['choice_text' => 'Un allèle dominant résulte d’une mutation survenue récemment', 'is_correct' => false],
                            ['choice_text' => 'La dominance décrit l’expression d’un allèle chez l’hétérozygote, pas sa fréquence', 'is_correct' => true],
                        ],
                        'explanation' => 'La dominance est une relation d’expression entre allèles : elle n’implique ni avantage, ni fréquence élevée, ni origine particulière.',
                    ],
                ],
            ],
            [
                'title' => 'Chromosomes, ADN et organisation de l\'information génétique',
                'description' => 'Comprendre comment l’ADN est organisé en chromosomes et comment l’information génétique est répartie dans les cellules.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Au microscope, on repère mieux les chromosomes d’une cellule en pleine division. Qu’est-ce qui l’explique ?',
                        'choices' => [
                            ['choice_text' => 'l’ADN quitte la cellule avant de se diviser', 'is_correct' => false],
                            ['choice_text' => 'les chromosomes se multiplient pendant la division', 'is_correct' => false],
                            ['choice_text' => 'l’ADN se condense et forme des structures compactes', 'is_correct' => true],
                            ['choice_text' => 'le noyau se transforme en une membrane épaisse', 'is_correct' => false],
                        ],
                        'explanation' => 'Avant et pendant la division, la chromatine se condense en chromosomes compacts, plus faciles à observer.',
                    ],
                    [
                        'question' => 'Chez l’être humain, combien de chromosomes possède normalement une cellule somatique diploïde ?',
                        'choices' => [
                            ['choice_text' => '46', 'is_correct' => true],
                            ['choice_text' => '23', 'is_correct' => false],
                            ['choice_text' => '92', 'is_correct' => false],
                            ['choice_text' => '44', 'is_correct' => false],
                        ],
                        'explanation' => 'Une cellule somatique humaine possède normalement 46 chromosomes, organisés en 23 paires.',
                    ],
                    [
                        'question' => 'Combien de chromosomes possède normalement un spermatozoïde humain ?',
                        'choices' => [
                            ['choice_text' => '46', 'is_correct' => false],
                            ['choice_text' => '44', 'is_correct' => false],
                            ['choice_text' => '92', 'is_correct' => false],
                            ['choice_text' => '23', 'is_correct' => true],
                        ],
                        'explanation' => 'Un spermatozoïde est haploïde et possède 23 chromosomes. Lors de la fécondation, il apporte un exemplaire de chaque paire au futur embryon.',
                    ],
                    [
                        'question' => 'Un caryotype montre 22 paires de chromosomes non sexuels et une paire de chromosomes sexuels. Quelle conclusion peut-on tirer ?',
                        'choices' => [
                            ['choice_text' => 'Il s’agit du caryotype d’une cellule bactérienne', 'is_correct' => false],
                            ['choice_text' => 'Il s’agit d’un caryotype humain classique', 'is_correct' => true],
                            ['choice_text' => 'Il s’agit du caryotype d’un spermatozoïde', 'is_correct' => false],
                            ['choice_text' => 'Il s’agit du caryotype d’un chimpanzé', 'is_correct' => false],
                        ],
                        'explanation' => 'Le caryotype humain classique comporte 23 paires de chromosomes : 22 paires d’autosomes et une paire de chromosomes sexuels.',
                    ],
                    [
                        'question' => 'Un nucléotide, brique de base de l’ADN, est constitué :',
                        'choices' => [
                            ['choice_text' => 'd’un sucre, d’un groupement phosphate et d’une base azotée', 'is_correct' => true],
                            ['choice_text' => 'd’un acide aminé, d’un phosphate et d’un lipide', 'is_correct' => false],
                            ['choice_text' => 'de deux acides gras et d’un glycérol', 'is_correct' => false],
                            ['choice_text' => 'd’un sucre, d’un acide aminé et d’une enzyme', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque nucléotide associe un sucre, un phosphate et l’une des quatre bases : A, T, C ou G.',
                    ],
                    [
                        'question' => 'Dans le noyau, l’ADN est associé à des protéines. Cet ensemble forme :',
                        'choices' => [
                            ['choice_text' => 'le nucléole', 'is_correct' => false],
                            ['choice_text' => 'la membrane nucléaire', 'is_correct' => false],
                            ['choice_text' => 'le cytosquelette', 'is_correct' => false],
                            ['choice_text' => 'la chromatine', 'is_correct' => true],
                        ],
                        'explanation' => 'L’ADN enroulé autour de protéines constitue la chromatine, qui se condense en chromosomes avant la division.',
                    ],
                    [
                        'question' => 'Deux chromosomes d’une même paire sont dits homologues lorsque :',
                        'choices' => [
                            ['choice_text' => 'ils ont la même séquence d’ADN sur l’ensemble de leur longueur, base pour base', 'is_correct' => false],
                            ['choice_text' => 'ils proviennent du même parent', 'is_correct' => false],
                            ['choice_text' => 'ils portent les mêmes gènes aux mêmes endroits, allèles différents ou non', 'is_correct' => true],
                            ['choice_text' => 'ils sont formés de protéines identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les chromosomes homologues portent les mêmes gènes aux mêmes loci, mais leurs allèles peuvent différer.',
                    ],
                    [
                        'question' => 'Une cellule possède deux jeux de chromosomes, l’un hérité de chaque parent. On dit qu’elle est :',
                        'choices' => [
                            ['choice_text' => 'haploïde', 'is_correct' => false],
                            ['choice_text' => 'diploïde', 'is_correct' => true],
                            ['choice_text' => 'polyploïde', 'is_correct' => false],
                            ['choice_text' => 'mutante', 'is_correct' => false],
                        ],
                        'explanation' => 'Une cellule diploïde possède deux jeux de chromosomes, un d’origine maternelle et un d’origine paternelle.',
                    ],
                    [
                        'question' => 'Avant une division cellulaire, l’ADN est copié. Quel est l’intérêt de cette réplication ?',
                        'choices' => [
                            ['choice_text' => 'chaque cellule fille reçoit l’information génétique complète', 'is_correct' => true],
                            ['choice_text' => 'elle transforme l’ADN en glucose pour fournir de l’énergie à la division', 'is_correct' => false],
                            ['choice_text' => 'elle réduit de moitié le nombre de chromosomes', 'is_correct' => false],
                            ['choice_text' => 'elle supprime les mutations accumulées', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans copie préalable, les cellules filles n’auraient pas assez d’ADN pour fonctionner.',
                    ],
                    [
                        'question' => 'Une cellule du foie et un neurone ont le même ADN mais des fonctions différentes. Comment est-ce possible ?',
                        'choices' => [
                            ['choice_text' => 'elles possèdent des chromosomes différents', 'is_correct' => false],
                            ['choice_text' => 'elles n’expriment pas les mêmes ensembles de gènes', 'is_correct' => true],
                            ['choice_text' => 'l’une des deux a perdu son noyau', 'is_correct' => false],
                            ['choice_text' => 'leurs gènes ont été modifiés à la naissance', 'is_correct' => false],
                        ],
                        'explanation' => 'Toutes les cellules d’un organisme partagent le même génome, mais chacune n’active que les gènes utiles à sa fonction.',
                    ],
                ],
            ],
            [
                'title' => 'Hérédité et lois de Mendel',
                'description' => 'S’entraîner à reconnaître les relations entre allèles et à appliquer les principes de base de l’hérédité mendélienne.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Dans un modèle simple, l’allèle A est dominant sur a. Quel phénotype attend-on chez un individu Aa ?',
                        'choices' => [
                            ['choice_text' => 'Le phénotype associé à A', 'is_correct' => true],
                            ['choice_text' => 'Le phénotype associé à a', 'is_correct' => false],
                            ['choice_text' => 'Un phénotype intermédiaire entre A et a', 'is_correct' => false],
                            ['choice_text' => 'Un phénotype invisible chez l’hétérozygote', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un modèle de dominance complète, l’allèle dominant A s’exprime chez l’hétérozygote Aa.',
                    ],
                    [
                        'question' => 'Deux parents ont le génotype Aa pour un même gène. Quels gamètes chacun peut-il produire pour ce gène ?',
                        'choices' => [
                            ['choice_text' => 'Des gamètes Aa portant les deux allèles', 'is_correct' => false],
                            ['choice_text' => 'Des gamètes AA ou aa', 'is_correct' => false],
                            ['choice_text' => 'Des gamètes A ou a', 'is_correct' => true],
                            ['choice_text' => 'Des gamètes A, a et Aa en proportions égales', 'is_correct' => false],
                        ],
                        'explanation' => 'Un individu Aa produit des gamètes qui portent soit A, soit a, jamais les deux.',
                    ],
                    [
                        'question' => 'Quel croisement produit uniquement des descendants Aa dans un modèle simple ?',
                        'choices' => [
                            ['choice_text' => 'AA × Aa', 'is_correct' => false],
                            ['choice_text' => 'AA × aa', 'is_correct' => true],
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
                            ['choice_text' => 'Des gamètes BB', 'is_correct' => false],
                            ['choice_text' => 'Uniquement B', 'is_correct' => true],
                        ],
                        'explanation' => 'Une plante BB est homozygote et ne possède qu’un seul type d’allèle à transmettre : B.',
                    ],
                    [
                        'question' => 'Chez une espèce, l’allèle T est dominant. Une personne de génotype Tt a un enfant avec une personne tt. Quelle proportion théorique des enfants devrait avoir le génotype Tt ?',
                        'choices' => [
                            ['choice_text' => '25 %', 'is_correct' => false],
                            ['choice_text' => '75 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => true],
                            ['choice_text' => '100 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Le parent Tt produit T ou t, tandis que le parent tt produit uniquement t. Les combinaisons attendues sont Tt et tt, chacune avec 50 %.',
                    ],
                    [
                        'question' => 'Lors de la formation des gamètes, les deux allèles d’un gène se séparent : c’est la ségrégation. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'les homologues sont répartis dans des gamètes différents lors de la méiose', 'is_correct' => true],
                            ['choice_text' => 'les deux allèles fusionnent en un seul allèle avant le début de la méiose, jusqu’à la fécondation', 'is_correct' => false],
                            ['choice_text' => 'chaque gamète reçoit les deux allèles du gène', 'is_correct' => false],
                            ['choice_text' => 'les allèles récessifs sont détruits pendant la méiose', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand les chromosomes homologues se séparent, chaque allèle d’un même gène part dans un gamète distinct.',
                    ],
                    [
                        'question' => 'Chez la belle-de-nuit, le croisement d’une plante à fleurs rouges et d’une plante à fleurs blanches donne des fleurs roses. Quelle est l’explication ?',
                        'choices' => [
                            ['choice_text' => 'le rouge est dominant et le rose est un effet de la lumière', 'is_correct' => false],
                            ['choice_text' => 'une mutation apparaît chez chaque descendant', 'is_correct' => false],
                            ['choice_text' => 'l’allèle blanc est perdu lors de la fécondation', 'is_correct' => false],
                            ['choice_text' => 'la dominance est incomplète : aucun allèle ne masque entièrement l’autre', 'is_correct' => true],
                        ],
                        'explanation' => 'Chez l’hétérozygote, les deux allèles contribuent au phénotype, qui est donc intermédiaire.',
                    ],
                    [
                        'question' => 'Dans un croisement Aa × Aa, quelles proportions génotypiques sont attendues théoriquement ?',
                        'choices' => [
                            ['choice_text' => '50 % AA, 50 % aa', 'is_correct' => false],
                            ['choice_text' => '25 % AA, 50 % Aa, 25 % aa', 'is_correct' => true],
                            ['choice_text' => '75 % Aa, 25 % AA', 'is_correct' => false],
                            ['choice_text' => '25 % AA, 25 % Aa, 50 % aa', 'is_correct' => false],
                        ],
                        'explanation' => 'Le tableau de croisement donne AA, Aa, Aa et aa : soit 25 %, 50 % et 25 %.',
                    ],
                    [
                        'question' => 'Un enfant présente un caractère récessif que ses deux parents n’expriment pas. Quelle situation simple peut l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'les deux parents sont homozygotes dominants', 'is_correct' => false],
                            ['choice_text' => 'le caractère récessif devient dominant chez l’enfant', 'is_correct' => false],
                            ['choice_text' => 'l’enfant a reçu ses deux allèles du même parent', 'is_correct' => false],
                            ['choice_text' => 'les deux parents sont porteurs hétérozygotes', 'is_correct' => true],
                        ],
                        'explanation' => 'Chaque parent Aa cache l’allèle récessif mais peut le transmettre : l’enfant qui reçoit a de chacun est aa.',
                    ],
                    [
                        'question' => 'Deux frères issus des mêmes parents n’ont pas exactement le même génotype. Qu’est-ce qui l’explique ?',
                        'choices' => [
                            ['choice_text' => 'chaque enfant reçoit une combinaison d’allèles différente selon les gamètes', 'is_correct' => true],
                            ['choice_text' => 'les gènes changent entièrement à chaque naissance', 'is_correct' => false],
                            ['choice_text' => 'chaque enfant reçoit l’ensemble de ses chromosomes d’un seul parent, tiré au sort', 'is_correct' => false],
                            ['choice_text' => 'les parents ne produisent qu’un seul type de gamète', 'is_correct' => false],
                        ],
                        'explanation' => 'Méiose et fécondation produisent de nombreuses combinaisons : des frères partagent une partie de leur information sans être identiques.',
                    ],
                ],
            ],
            [
                'title' => 'Croisements génétiques et probabilités simples',
                'description' => 'Utiliser des tableaux de croisement et des probabilités élémentaires pour prévoir des résultats génétiques dans des cas simples.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Pour un croisement Aa × aa, combien de génotypes différents sont attendus chez la descendance dans le modèle simplifié ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => true],
                        ],
                        'explanation' => 'Les combinaisons possibles sont Aa et aa : il y a donc deux génotypes possibles.',
                    ],
                    [
                        'question' => 'Un croisement Bb × bb est réalisé. Si B est dominant, quelle proportion théorique de la descendance devrait exprimer le caractère dominant ?',
                        'choices' => [
                            ['choice_text' => '50 %', 'is_correct' => true],
                            ['choice_text' => '25 %', 'is_correct' => false],
                            ['choice_text' => '75 %', 'is_correct' => false],
                            ['choice_text' => '100 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Le parent Bb produit B ou b tandis que bb ne produit que b. La moitié des descendants est Bb et exprime donc le caractère dominant.',
                    ],
                    [
                        'question' => 'Pour obtenir un enfant aa, il faut recevoir a du père (probabilité 1/2) et a de la mère (probabilité 1/2). Comment calcule-t-on la probabilité de aa ?',
                        'choices' => [
                            ['choice_text' => '1/2 + 1/2 = 1', 'is_correct' => false],
                            ['choice_text' => '1/2 − 1/2 = 0', 'is_correct' => false],
                            ['choice_text' => '1/2 × 1/2 = 1/4', 'is_correct' => true],
                            ['choice_text' => '2 × 1/2 = 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux événements indépendants se multiplient : 1/2 × 1/2 = 1/4, soit 25 %.',
                    ],
                    [
                        'question' => 'Une classe obtient 48 graines issues d’un croisement et souhaite comparer les résultats aux 25 % théoriques d’un génotype. Combien de graines cela représente-t-il environ ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                        ],
                        'explanation' => '25 % de 48 = 48 × 0,25 = 12. Un échantillon réel peut s’écarter un peu de cette valeur théorique.',
                    ],
                    [
                        'question' => 'Pour savoir si une plante à fleurs violettes (dominant) est AA ou Aa, un généticien la croise avec une plante aa. Quel est l’intérêt de ce choix ?',
                        'choices' => [
                            ['choice_text' => 'elle fait apparaître des mutations utiles dans la descendance', 'is_correct' => false],
                            ['choice_text' => 'elle double le nombre de chromosomes de la descendance', 'is_correct' => false],
                            ['choice_text' => 'elle rend la plante testée homozygote récessive après une génération de croisement', 'is_correct' => false],
                            ['choice_text' => 'la descendance révèle si la plante testée est homozygote ou hétérozygote', 'is_correct' => true],
                        ],
                        'explanation' => 'Si la descendance contient des plantes à fleurs blanches, la plante testée était Aa ; sinon elle était AA.',
                    ],
                    [
                        'question' => 'Un résultat théorique prévoit 75 % de phénotype dominant dans une descendance de 40 individus. Quelle valeur attend-on en moyenne ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '35', 'is_correct' => false],
                        ],
                        'explanation' => '75 % de 40 = 0,75 × 40 = 30. Il s’agit d’une attente théorique, pas d’une garantie pour chaque famille.',
                    ],
                    [
                        'question' => 'Dans une expérience, 27 descendants sur 40 montrent un caractère dominant alors que 30 étaient attendus théoriquement. Quelle lecture est la plus raisonnable ?',
                        'choices' => [
                            ['choice_text' => 'l’écart de 3 reste compatible avec le hasard de l’échantillonnage', 'is_correct' => true],
                            ['choice_text' => 'la loi de Mendel est fausse pour ce caractère', 'is_correct' => false],
                            ['choice_text' => 'trois individus ont muté et perdu le caractère dominant', 'is_correct' => false],
                            ['choice_text' => 'le caractère dominant devient moins fréquent chez cette espèce', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur 40 descendants, un petit écart avec la valeur théorique s’explique par le hasard.',
                    ],
                    [
                        'question' => 'Une personne Aa et une personne aa ont déjà un enfant Aa. Quelle est la probabilité théorique que leur prochain enfant soit aa ?',
                        'choices' => [
                            ['choice_text' => '25 %', 'is_correct' => false],
                            ['choice_text' => '75 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => true],
                            ['choice_text' => '0 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque conception est un nouvel événement : pour Aa × aa, la probabilité d’obtenir aa reste 50 %.',
                    ],
                    [
                        'question' => 'Un élève additionne les probabilités de toutes les cases d’un tableau de croisement et obtient 1,2. Quelle erreur révèle le plus probablement ce résultat ?',
                        'choices' => [
                            ['choice_text' => 'une somme de probabilités peut dépasser 1 quand un allèle est dominant dans le croisement', 'is_correct' => false],
                            ['choice_text' => 'les probabilités ont été mal calculées ou des cases ont été comptées plusieurs fois', 'is_correct' => true],
                            ['choice_text' => 'le tableau doit contenir huit cases pour être complet', 'is_correct' => false],
                            ['choice_text' => 'la somme des probabilités doit être égale à 2', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des issues qui s’excluent et couvrent tous les cas, la somme fait 1 : un total de 1,2 signale une erreur.',
                    ],
                    [
                        'question' => 'Deux hétérozygotes sont croisés, avec dominance complète. Le rapport phénotypique attendu dans la descendance est :',
                        'choices' => [
                            ['choice_text' => '1 : 1', 'is_correct' => false],
                            ['choice_text' => '1 : 2 : 1', 'is_correct' => false],
                            ['choice_text' => '3 : 1', 'is_correct' => true],
                            ['choice_text' => '9 : 3 : 3 : 1', 'is_correct' => false],
                        ],
                        'explanation' => 'On attend trois descendants au phénotype dominant pour un au phénotype récessif ; 1:2:1 est le rapport des génotypes.',
                    ],
                ],
            ],
            [
                'title' => 'Génotype, phénotype et expression des caractères',
                'description' => 'Relier l’information génétique aux caractères observables et distinguer correctement génotype, phénotype et influence de l’environnement.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Deux plants possèdent le même génotype mais poussent sous des conditions de lumière très différentes. Quel constat est possible ?',
                        'choices' => [
                            ['choice_text' => 'Leur génotype finit par se modifier selon la quantité de lumière reçue chaque jour', 'is_correct' => false],
                            ['choice_text' => 'Leur phénotype peut différer en partie sous l’effet de l’environnement', 'is_correct' => true],
                            ['choice_text' => 'Leur phénotype est identique, puisque leur ADN est le même', 'is_correct' => false],
                            ['choice_text' => 'L’un des deux devient homozygote à cause de la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Le phénotype résulte de l’expression du génotype dans un environnement donné.',
                    ],
                    [
                        'question' => 'Lequel correspond à un génotype plutôt qu’à un phénotype ?',
                        'choices' => [
                            ['choice_text' => 'Taille de 1,72 m', 'is_correct' => false],
                            ['choice_text' => 'Couleur des fleurs observée', 'is_correct' => false],
                            ['choice_text' => 'Aa', 'is_correct' => true],
                            ['choice_text' => 'Groupe sanguin observé', 'is_correct' => false],
                        ],
                        'explanation' => 'Aa décrit une combinaison d’allèles, donc un génotype. Les autres propositions décrivent des caractères observables.',
                    ],
                    [
                        'question' => 'Une mutation empêche une cellule de produire correctement une protéine. Quelle chaîne de causalité est la plus logique ?',
                        'choices' => [
                            ['choice_text' => 'Modification du caractère → modification de la protéine → modification de l’ADN → apparition de la mutation', 'is_correct' => false],
                            ['choice_text' => 'Protéine altérée → modification de l’ADN → information génétique modifiée → effet sur le caractère', 'is_correct' => false],
                            ['choice_text' => 'Modification de l’ADN → effet sur le caractère → protéine altérée → information génétique modifiée', 'is_correct' => false],
                            ['choice_text' => 'Modification de l’ADN → information génétique modifiée → protéine altérée → effet sur le caractère', 'is_correct' => true],
                        ],
                        'explanation' => 'La séquence d’ADN contient les instructions de la protéine : si elle change, la protéine change, avec un effet possible sur le caractère.',
                    ],
                    [
                        'question' => 'Deux personnes ont le même allèle d’un gène, pourtant elles présentent des différences observables. Qu’est-ce qui peut l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'd’autres gènes et l’environnement influencent aussi le phénotype', 'is_correct' => true],
                            ['choice_text' => 'l’allèle change de séquence à chaque génération', 'is_correct' => false],
                            ['choice_text' => 'l’allèle est dans le noyau chez l’une et dans le cytoplasme chez l’autre', 'is_correct' => false],
                            ['choice_text' => 'les chromosomes sexuels remplacent l’allèle', 'is_correct' => false],
                        ],
                        'explanation' => 'Un caractère complexe dépend souvent de plusieurs gènes et de facteurs comme l’alimentation ou le climat.',
                    ],
                    [
                        'question' => 'Les parents de Karim sont grands, et lui aussi. Il en conclut que la taille dépend d’un seul gène. En quoi son raisonnement est-il trop simple ?',
                        'choices' => [
                            ['choice_text' => 'la taille dépend de l’alimentation, pas des gènes', 'is_correct' => false],
                            ['choice_text' => 'un gène ne peut influencer ni la croissance de l’organisme ni la taille qu’il atteint à l’âge adulte', 'is_correct' => false],
                            ['choice_text' => 'la taille dépend de nombreux gènes et de l’environnement, comme l’alimentation', 'is_correct' => true],
                            ['choice_text' => 'la taille dépend du hasard et non de l’hérédité', 'is_correct' => false],
                        ],
                        'explanation' => 'La taille est un caractère complexe : nombreux gènes, alimentation, santé et conditions de vie y contribuent.',
                    ],
                    [
                        'question' => 'Dans un modèle de dominance complète, un individu AA et un individu Aa présentent le même phénotype. Que montre cet exemple ?',
                        'choices' => [
                            ['choice_text' => 'Un même phénotype peut correspondre à plusieurs génotypes', 'is_correct' => true],
                            ['choice_text' => 'Le phénotype dominant révèle les deux allèles de l’individu', 'is_correct' => false],
                            ['choice_text' => 'Les individus AA et Aa possèdent la même séquence d’ADN', 'is_correct' => false],
                            ['choice_text' => 'La dominance supprime l’allèle récessif de l’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'Le phénotype dominant peut être produit par AA ou par Aa : le caractère observé ne donne pas toujours le génotype exact.',
                    ],
                    [
                        'question' => 'Un médecin explique qu’un test génétique peut révéler une prédisposition sans assurer qu’une maladie apparaîtra. Quelle idée cela illustre-t-il ?',
                        'choices' => [
                            ['choice_text' => 'une variante génétique provoque la maladie dès la naissance, quel que soit le milieu de vie de la personne', 'is_correct' => false],
                            ['choice_text' => 'l’information génétique peut influencer un risque sans déterminer à elle seule le résultat', 'is_correct' => true],
                            ['choice_text' => 'les gènes n’ont pas d’effet sur la santé', 'is_correct' => false],
                            ['choice_text' => 'l’environnement décide seul du risque de maladie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une variante modifie une probabilité, que l’environnement et d’autres gènes viennent moduler.',
                    ],
                    [
                        'question' => 'Une personne de groupe sanguin AB possède un allèle A et un allèle B, tous deux exprimés. Ce mode d’expression s’appelle :',
                        'choices' => [
                            ['choice_text' => 'la dominance complète', 'is_correct' => false],
                            ['choice_text' => 'la dominance incomplète', 'is_correct' => false],
                            ['choice_text' => 'la récessivité', 'is_correct' => false],
                            ['choice_text' => 'la codominance', 'is_correct' => true],
                        ],
                        'explanation' => 'Quand les deux allèles s’expriment chacun pleinement chez l’hétérozygote, on parle de codominance.',
                    ],
                    [
                        'question' => 'Chez les petits pois, le jaune est dominant et le vert est récessif. Une plante à graines vertes a quel génotype ?',
                        'choices' => [
                            ['choice_text' => 'homozygote récessif, aa', 'is_correct' => true],
                            ['choice_text' => 'hétérozygote, Aa', 'is_correct' => false],
                            ['choice_text' => 'homozygote dominant, AA', 'is_correct' => false],
                            ['choice_text' => 'AA ou Aa, on ne peut pas savoir', 'is_correct' => false],
                        ],
                        'explanation' => 'Le phénotype récessif ne peut s’exprimer que si les deux allèles sont récessifs : le génotype est donc connu avec certitude.',
                    ],
                    [
                        'question' => 'Deux jumeaux identiques mènent des vies différentes et leur masse corporelle diffère vingt ans plus tard. Quelle conclusion est compatible avec la génétique ?',
                        'choices' => [
                            ['choice_text' => 'leurs chromosomes sont devenus différents à cause de leur mode de vie respectif', 'is_correct' => false],
                            ['choice_text' => 'l’un des jumeaux a perdu la moitié de son ADN', 'is_correct' => false],
                            ['choice_text' => 'leurs gènes ont cessé de fonctionner chez l’un des deux', 'is_correct' => false],
                            ['choice_text' => 'un même génome n’impose pas le même phénotype en conditions différentes', 'is_correct' => true],
                        ],
                        'explanation' => 'Alimentation, activité et milieu modifient certains caractères, même avec un génome presque identique.',
                    ],
                ],
            ],
            [
                'title' => 'Mutations et diversité génétique',
                'description' => 'Identifier les types simples de mutations, comprendre leur origine et relier les variations de l’ADN à la diversité des organismes.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Une mutation est définie au niveau moléculaire comme :',
                        'choices' => [
                            ['choice_text' => 'une modification de la séquence d’une protéine sans changement de l’ADN', 'is_correct' => false],
                            ['choice_text' => 'une division anormale d’une cellule du corps', 'is_correct' => false],
                            ['choice_text' => 'une modification de la séquence d’ADN', 'is_correct' => true],
                            ['choice_text' => 'une perte de cellules dans un tissu', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation est une modification de la séquence de l’ADN, petite ou touchant des régions plus importantes du génome.',
                    ],
                    [
                        'question' => 'Une mutation change une seule base de l’ADN sans modifier la longueur de la séquence. De quel type de changement simple s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'Une délétion', 'is_correct' => false],
                            ['choice_text' => 'Une insertion', 'is_correct' => false],
                            ['choice_text' => 'Une duplication', 'is_correct' => false],
                            ['choice_text' => 'Une substitution', 'is_correct' => true],
                        ],
                        'explanation' => 'Une substitution remplace une base par une autre : la longueur de la séquence reste inchangée.',
                    ],
                    [
                        'question' => 'Toutes les mutations sont-elles dangereuses ?',
                        'choices' => [
                            ['choice_text' => 'Oui : une mutation provoque une maladie dès qu’elle touche un gène du génome', 'is_correct' => false],
                            ['choice_text' => 'Non : certaines sont neutres, d’autres bénéfiques selon le contexte', 'is_correct' => true],
                            ['choice_text' => 'Oui : une mutation détruit le chromosome qui la porte', 'is_correct' => false],
                            ['choice_text' => 'Non : les mutations ne touchent que des cellules mortes', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effet d’une mutation dépend de sa localisation : neutre, nuisible ou, dans certains milieux, avantageuse.',
                    ],
                    [
                        'question' => 'Un coup de soleil provoque une mutation dans une cellule de la peau de Salima. Cette mutation ne sera pas transmise à ses enfants. Qu’est-ce qui l’explique ?',
                        'choices' => [
                            ['choice_text' => 'la cellule de peau ne fait pas partie de la lignée germinale', 'is_correct' => true],
                            ['choice_text' => 'les cellules de la peau ne contiennent pas d’ADN', 'is_correct' => false],
                            ['choice_text' => 'les mutations sont réparées avant la fécondation', 'is_correct' => false],
                            ['choice_text' => 'les enfants n’héritent que des mutations survenues chez leur père avant leur naissance', 'is_correct' => false],
                        ],
                        'explanation' => 'Seules les mutations présentes dans les cellules germinales peuvent passer à la génération suivante.',
                    ],
                    [
                        'question' => 'Un rayonnement endommage l’ADN d’une cellule. Quelle proposition est la plus prudente ?',
                        'choices' => [
                            ['choice_text' => 'la cellule devient cancéreuse dès qu’un rayonnement touche son ADN, quelle que soit la dose reçue', 'is_correct' => false],
                            ['choice_text' => 'la cellule peut réparer le dommage, conserver une mutation ou être éliminée selon l’atteinte', 'is_correct' => true],
                            ['choice_text' => 'le dommage disparaît de lui-même sans conséquence', 'is_correct' => false],
                            ['choice_text' => 'l’ensemble des chromosomes de la cellule est modifié', 'is_correct' => false],
                        ],
                        'explanation' => 'La cellule dispose de systèmes de réparation : l’issue dépend de l’importance des dégâts.',
                    ],
                    [
                        'question' => 'Deux populations d’une même espèce présentent de petites différences génétiques. Comment ces différences contribuent-elles à la diversité ?',
                        'choices' => [
                            ['choice_text' => 'elles empêchent les individus des deux populations de se reproduire entre eux', 'is_correct' => false],
                            ['choice_text' => 'elles uniformisent la population', 'is_correct' => false],
                            ['choice_text' => 'elles effacent les allèles rares', 'is_correct' => false],
                            ['choice_text' => 'elles fournissent des variations sur lesquelles l’évolution peut agir', 'is_correct' => true],
                        ],
                        'explanation' => 'La diversité génétique est la matière première de l’évolution des populations.',
                    ],
                    [
                        'question' => 'Une mutation change un acide aminé dans une protéine. Quelle conséquence est plausible ?',
                        'choices' => [
                            ['choice_text' => 'la protéine est remplacée par une molécule d’ADN de même fonction dans la cellule', 'is_correct' => false],
                            ['choice_text' => 'le gène disparaît du génome de la cellule', 'is_correct' => false],
                            ['choice_text' => 'la fonction de la protéine peut être modifiée, selon l’acide aminé touché', 'is_correct' => true],
                            ['choice_text' => 'la cellule devient haploïde', 'is_correct' => false],
                        ],
                        'explanation' => 'Changer un acide aminé peut n’avoir presque aucun effet ou bouleverser la structure et la fonction de la protéine.',
                    ],
                    [
                        'question' => 'Les mutations sont une source de variation, mais elles ne se produisent pas pour répondre à un besoin de l’organisme. Que signifie cette idée ?',
                        'choices' => [
                            ['choice_text' => 'une mutation apparaît au hasard, sans lien avec les besoins de l’organisme', 'is_correct' => true],
                            ['choice_text' => 'une mutation apparaît au moment précis où le caractère devient utile à l’organisme', 'is_correct' => false],
                            ['choice_text' => 'les individus choisissent les mutations qu’ils transmettent', 'is_correct' => false],
                            ['choice_text' => 'les mutations ne changent pas les caractères des individus', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mutations ne sont pas dirigées : la sélection trie ensuite les variations apparues au hasard.',
                    ],
                    [
                        'question' => 'La drépanocytose est due à une mutation d’une seule base dans le gène de l’hémoglobine. Cette mutation :',
                        'choices' => [
                            ['choice_text' => 'supprime le gène de l’hémoglobine du génome', 'is_correct' => false],
                            ['choice_text' => 'ajoute un chromosome supplémentaire dans la cellule', 'is_correct' => false],
                            ['choice_text' => 'touche les cellules du foie et non les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'modifie la séquence du gène et donc la protéine produite', 'is_correct' => true],
                        ],
                        'explanation' => 'Une substitution dans le gène change un acide aminé de l’hémoglobine, ce qui déforme les globules rouges.',
                    ],
                    [
                        'question' => 'Un étudiant affirme qu’une mutation « crée toujours une nouvelle espèce ». Quelle réponse convient ?',
                        'choices' => [
                            ['choice_text' => 'une mutation apporte une variation ; une nouvelle espèce demande des processus bien plus larges', 'is_correct' => true],
                            ['choice_text' => 'une mutation suffit à former une espèce en une génération', 'is_correct' => false],
                            ['choice_text' => 'une mutation ne peut pas être héritée par la génération suivante, même si elle touche un gamète du parent concerné', 'is_correct' => false],
                            ['choice_text' => 'les espèces se forment à partir de mutations de la peau', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation introduit une variation ; la formation d’une espèce suppose du temps, de la sélection et un isolement reproductif.',
                    ],
                ],
            ],
            [
                'title' => 'Méiose, gamètes et transmission des caractères',
                'description' => 'Comprendre le rôle de la méiose et de la fécondation dans la formation des gamètes et la transmission de l’information génétique.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Quel est le rôle essentiel de la méiose dans la reproduction sexuée ?',
                        'choices' => [
                            ['choice_text' => 'Produire des cellules haploïdes à partir d’une cellule diploïde', 'is_correct' => true],
                            ['choice_text' => 'Doubler le nombre de chromosomes des gamètes', 'is_correct' => false],
                            ['choice_text' => 'Produire des cellules identiques à la cellule mère', 'is_correct' => false],
                            ['choice_text' => 'Réparer les tissus lésés', 'is_correct' => false],
                        ],
                        'explanation' => 'La méiose réduit de moitié le nombre de chromosomes et produit des cellules haploïdes destinées à devenir des gamètes.',
                    ],
                    [
                        'question' => 'Sans tenir compte des échanges entre chromosomes homologues, combien de combinaisons de chromosomes sont possibles dans un gamète humain ?',
                        'choices' => [
                            ['choice_text' => '46', 'is_correct' => false],
                            ['choice_text' => 'plus de 8 millions (2²³)', 'is_correct' => true],
                            ['choice_text' => '529 (23 × 23)', 'is_correct' => false],
                            ['choice_text' => '23 000', 'is_correct' => false],
                        ],
                        'explanation' => 'Chacune des 23 paires se répartit de deux façons : 2²³ = 8 388 608 combinaisons possibles.',
                    ],
                    [
                        'question' => 'Une personne atteinte de trisomie 21 possède trois exemplaires du chromosome 21. Combien de chromosomes ses cellules contiennent-elles ?',
                        'choices' => [
                            ['choice_text' => '46', 'is_correct' => false],
                            ['choice_text' => '45', 'is_correct' => false],
                            ['choice_text' => '69', 'is_correct' => false],
                            ['choice_text' => '47', 'is_correct' => true],
                        ],
                        'explanation' => 'Il y a 46 chromosomes habituellement ; un exemplaire supplémentaire du chromosome 21 en fait 47.',
                    ],
                    [
                        'question' => 'Pendant la méiose, des morceaux de chromosomes homologues peuvent être échangés. Ce phénomène s’appelle :',
                        'choices' => [
                            ['choice_text' => 'la réplication', 'is_correct' => false],
                            ['choice_text' => 'la non-disjonction', 'is_correct' => false],
                            ['choice_text' => 'l’enjambement (crossing-over)', 'is_correct' => true],
                            ['choice_text' => 'la transcription', 'is_correct' => false],
                        ],
                        'explanation' => 'Cet échange crée des chromosomes mixtes qui ajoutent de la diversité aux gamètes.',
                    ],
                    [
                        'question' => 'Un enfant n’est génétiquement identique à aucun de ses parents. Qu’est-ce qui l’explique ?',
                        'choices' => [
                            ['choice_text' => 'il reçoit l’ADN d’un seul parent, puis le modifie', 'is_correct' => false],
                            ['choice_text' => 'la méiose et la fécondation combinent des allèles venus des deux parents', 'is_correct' => true],
                            ['choice_text' => 'la fécondation produit un clone de l’un des parents', 'is_correct' => false],
                            ['choice_text' => 'la méiose détruit les allèles transmis par l’un des deux parents avant la fécondation', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque parent transmet une combinaison d’allèles dans ses gamètes, et la rencontre des deux crée une nouvelle combinaison.',
                    ],
                    [
                        'question' => 'Le brassage génétique pendant la méiose contribue à la diversité. Quel mécanisme simple y participe ?',
                        'choices' => [
                            ['choice_text' => 'la copie d’un seul et même chromosome dans chaque gamète produit par la méiose', 'is_correct' => false],
                            ['choice_text' => 'la disparition des allèles récessifs', 'is_correct' => false],
                            ['choice_text' => 'la répartition aléatoire des chromosomes homologues dans les gamètes', 'is_correct' => true],
                            ['choice_text' => 'la fusion des chromosomes homologues en un seul', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque paire se répartit indépendamment des autres, ce qui crée de nombreuses combinaisons de chromosomes.',
                    ],
                    [
                        'question' => 'Chez l’être humain, qui détermine le sexe chromosomique de l’enfant ?',
                        'choices' => [
                            ['choice_text' => 'l’ovule, qui porte un chromosome X ou un chromosome Y', 'is_correct' => false],
                            ['choice_text' => 'le nombre de chromosomes reçus de la mère', 'is_correct' => false],
                            ['choice_text' => 'la fusion de deux chromosomes Y', 'is_correct' => false],
                            ['choice_text' => 'le spermatozoïde, qui porte un chromosome X ou un chromosome Y', 'is_correct' => true],
                        ],
                        'explanation' => 'L’ovule porte toujours un X ; le spermatozoïde apporte X (fille, XX) ou Y (garçon, XY).',
                    ],
                    [
                        'question' => 'Une erreur de séparation des chromosomes pendant la formation des gamètes donne un gamète avec un chromosome en trop. Comment appelle-t-on cette erreur ?',
                        'choices' => [
                            ['choice_text' => 'une non-disjonction', 'is_correct' => true],
                            ['choice_text' => 'une substitution', 'is_correct' => false],
                            ['choice_text' => 'une délétion', 'is_correct' => false],
                            ['choice_text' => 'une transcription', 'is_correct' => false],
                        ],
                        'explanation' => 'La non-disjonction est une mauvaise séparation des chromosomes pendant la division, qui produit des gamètes au nombre anormal de chromosomes.',
                    ],
                    [
                        'question' => 'Quelle association entre processus et rôle est correcte ?',
                        'choices' => [
                            ['choice_text' => 'mitose : formation des gamètes ; méiose : croissance des tissus', 'is_correct' => false],
                            ['choice_text' => 'mitose : réduction du nombre de chromosomes ; méiose : renouvellement de la peau', 'is_correct' => false],
                            ['choice_text' => 'mitose : croissance et renouvellement ; méiose : formation des gamètes', 'is_correct' => true],
                            ['choice_text' => 'mitose et méiose : production de cellules haploïdes dans les deux cas', 'is_correct' => false],
                        ],
                        'explanation' => 'La mitose conserve le nombre de chromosomes pour produire des cellules du corps ; la méiose le réduit pour former les gamètes.',
                    ],
                    [
                        'question' => 'La fécondation ajoute une étape de diversité génétique. Laquelle ?',
                        'choices' => [
                            ['choice_text' => 'elle efface les différences entre les allèles des deux parents pour donner un génome uniforme proche de celui d’un parent', 'is_correct' => false],
                            ['choice_text' => 'un gamète maternel et un gamète paternel se rencontrent au hasard parmi de nombreuses combinaisons', 'is_correct' => true],
                            ['choice_text' => 'elle transforme les allèles du père en allèles dominants', 'is_correct' => false],
                            ['choice_text' => 'elle bloque les échanges entre chromosomes homologues', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque rencontre de gamètes est différente : la fécondation multiplie encore les combinaisons déjà créées par la méiose.',
                    ],
                ],
            ],
            [
                'title' => 'Génétique humaine et applications simples',
                'description' => 'Interpréter des situations familiales et des résultats simples en combinant génotype, transmission récessive ou dominante, chromosomes et probabilités.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Un arbre généalogique s’étend sur plusieurs générations d’une famille qui présente un caractère. À quoi cela sert-il ?',
                        'choices' => [
                            ['choice_text' => 'à mesurer la taille des chromosomes de chaque personne de la famille étudiée', 'is_correct' => false],
                            ['choice_text' => 'à compter les protéines produites dans la famille', 'is_correct' => false],
                            ['choice_text' => 'à repérer les mutations des bactéries intestinales', 'is_correct' => false],
                            ['choice_text' => 'à observer comment le caractère se transmet de génération en génération', 'is_correct' => true],
                        ],
                        'explanation' => 'Plusieurs générations permettent de repérer des liens de parenté et un schéma de transmission possible.',
                    ],
                    [
                        'question' => 'Un couple de groupes sanguins A et B a un enfant de groupe O. Est-ce possible ?',
                        'choices' => [
                            ['choice_text' => 'non : l’enfant doit être de groupe A ou B', 'is_correct' => false],
                            ['choice_text' => 'non : le groupe O n’apparaît que si un parent est de groupe O', 'is_correct' => false],
                            ['choice_text' => 'oui : les deux parents portent l’allèle O sans l’exprimer', 'is_correct' => true],
                            ['choice_text' => 'oui : à condition que l’enfant ait subi une mutation', 'is_correct' => false],
                        ],
                        'explanation' => 'Un parent A peut être AO et un parent B peut être BO : l’enfant OO reçoit un O de chacun.',
                    ],
                    [
                        'question' => 'Une personne atteinte d’une maladie génétique se demande si ses enfants le seront aussi. Que faut-il connaître pour répondre ?',
                        'choices' => [
                            ['choice_text' => 'le mode de transmission de la maladie et le génotype des deux parents', 'is_correct' => true],
                            ['choice_text' => 'la taille de ses chromosomes', 'is_correct' => false],
                            ['choice_text' => 'son groupe sanguin et celui de son partenaire', 'is_correct' => false],
                            ['choice_text' => 'le nombre de cellules de son foie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le risque dépend du type de maladie, de ses allèles et du génotype du partenaire, pas du seul phénotype.',
                    ],
                    [
                        'question' => 'Un couple consulte pour une maladie autosomique récessive. Les deux parents sont connus comme porteurs sains. Quel risque théorique a chaque enfant d’être atteint ?',
                        'choices' => [
                            ['choice_text' => '50 %', 'is_correct' => false],
                            ['choice_text' => '25 %', 'is_correct' => true],
                            ['choice_text' => '75 %', 'is_correct' => false],
                            ['choice_text' => '100 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour Aa × Aa, la combinaison aa a une probabilité de 1/4, soit 25 %, à chaque conception.',
                    ],
                    [
                        'question' => 'Un caryotype réalisé sur des cellules fœtales permet de repérer :',
                        'choices' => [
                            ['choice_text' => 'chaque mutation ponctuelle du génome', 'is_correct' => false],
                            ['choice_text' => 'la couleur future des yeux et des cheveux', 'is_correct' => false],
                            ['choice_text' => 'une infection de la mère', 'is_correct' => false],
                            ['choice_text' => 'une anomalie du nombre de chromosomes, comme la trisomie 21', 'is_correct' => true],
                        ],
                        'explanation' => 'Le caryotype montre les chromosomes eux-mêmes : on y voit un chromosome en trop ou manquant, pas une mutation d’une seule base.',
                    ],
                    [
                        'question' => 'Le daltonisme rouge-vert est récessif et lié au chromosome X. Il touche davantage les hommes. Qu’est-ce qui l’explique ?',
                        'choices' => [
                            ['choice_text' => 'le chromosome Y active l’allèle récessif chez les hommes et le rend plus fort qu’ailleurs', 'is_correct' => false],
                            ['choice_text' => 'un homme n’a qu’un seul X : l’allèle récessif s’exprime sans être masqué', 'is_correct' => true],
                            ['choice_text' => 'les hommes reçoivent deux chromosomes X de leur père', 'is_correct' => false],
                            ['choice_text' => 'les femmes ne possèdent pas de chromosome X', 'is_correct' => false],
                        ],
                        'explanation' => 'Une femme a deux X et peut masquer l’allèle récessif ; un homme n’en a qu’un seul, donc l’allèle s’exprime.',
                    ],
                    [
                        'question' => 'Un arbre montre qu’un caractère apparaît chez des garçons mais pas chez leur père, alors que leur mère ne présente pas le caractère. Quelle hypothèse peut être envisagée pour un caractère récessif lié à X ?',
                        'choices' => [
                            ['choice_text' => 'le père transmet son chromosome X à ses fils', 'is_correct' => false],
                            ['choice_text' => 'les fils reçoivent deux chromosomes X de leur père', 'is_correct' => false],
                            ['choice_text' => 'la mère peut être porteuse et transmettre l’allèle à certains fils', 'is_correct' => true],
                            ['choice_text' => 'un caractère lié à X ne peut pas être récessif', 'is_correct' => false],
                        ],
                        'explanation' => 'Un fils reçoit son X de sa mère : si elle porte l’allèle, il peut l’exprimer faute d’un deuxième X pour le masquer.',
                    ],
                    [
                        'question' => 'Un arbre généalogique ne suffit pas à prouver à lui seul qu’un caractère dépend d’un seul gène. Quelle en est la raison ?',
                        'choices' => [
                            ['choice_text' => 'des caractères complexes dépendent de plusieurs gènes et de l’environnement, et des données manquent', 'is_correct' => true],
                            ['choice_text' => 'un arbre montre directement la séquence d’ADN de chaque personne de la famille étudiée', 'is_correct' => false],
                            ['choice_text' => 'un arbre indique le génotype exact de chaque individu', 'is_correct' => false],
                            ['choice_text' => 'un caractère répété dans une famille est monogénique par nature, quelle que soit sa complexité apparente', 'is_correct' => false],
                        ],
                        'explanation' => 'Un arbre donne une hypothèse sur la transmission ; il faut souvent des données supplémentaires ou un test génétique pour trancher.',
                    ],
                    [
                        'question' => 'Un couple apprend que le risque est de 25 % à chaque grossesse. Il en conclut qu’un enfant sur quatre sera atteint. Quelle correction est juste ?',
                        'choices' => [
                            ['choice_text' => 'sur quatre naissances, exactement un enfant est atteint', 'is_correct' => false],
                            ['choice_text' => '25 % est une probabilité par conception, pas un nombre imposé d’enfants atteints sur quatre', 'is_correct' => true],
                            ['choice_text' => 'la probabilité passe à 100 % après quatre grossesses', 'is_correct' => false],
                            ['choice_text' => 'le risque de 25 % concerne la première grossesse et diminue ensuite à chaque nouvelle grossesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur quatre naissances, le nombre réel d’enfants atteints peut être 0, 1, 2, 3 ou 4.',
                    ],
                    [
                        'question' => 'Une famille observe un caractère présent à chaque génération, mais les données disponibles sont limitées. Quelle attitude scientifique est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => 'déclarer aussitôt que le caractère est dominant', 'is_correct' => false],
                            ['choice_text' => 'conclure qu’il s’agit d’une mutation récente', 'is_correct' => false],
                            ['choice_text' => 'formuler une hypothèse de transmission puis chercher d’autres données avant de conclure', 'is_correct' => true],
                            ['choice_text' => 'écarter les informations familiales pour ne garder que des mesures de laboratoire précises', 'is_correct' => false],
                        ],
                        'explanation' => 'Un motif familial oriente vers une hypothèse, mais seules des données supplémentaires permettent de distinguer les modes de transmission.',
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