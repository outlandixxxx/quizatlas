<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MolecularBiologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'molecular-biology')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la biologie moléculaire',
                'description' => 'Découvrez les molécules fondamentales du vivant, le rôle de l’ADN et de l’ARN, ainsi que l’organisation générale de l’information génétique.',
                'questions' => [
                    [
                        'question' => 'Dans une cellule, quelle molécule constitue principalement le support de l’information génétique ?',
                        'choices' => [
                            ['choice_text' => 'L’ADN', 'is_correct' => true],
                            ['choice_text' => 'L’ATP', 'is_correct' => false],
                            ['choice_text' => 'Le glucose', 'is_correct' => false],
                            ['choice_text' => 'Les phospholipides', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ADN stocke l’information génétique sous forme de séquences de nucléotides. L’ATP sert surtout aux transferts d’énergie, tandis que le glucose et les phospholipides ont d’autres fonctions cellulaires.'
                    ],
                    [
                        'question' => 'Un nucléotide d’ADN contient trois éléments. Lesquels ?',
                        'choices' => [
                            ['choice_text' => 'Un sucre, un phosphate et une base azotée', 'is_correct' => true],
                            ['choice_text' => 'Un acide aminé, un sucre et un phosphate', 'is_correct' => false],
                            ['choice_text' => 'Un lipide, un phosphate et une base azotée', 'is_correct' => false],
                            ['choice_text' => 'Un sucre, un acide gras et un acide aminé', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque nucléotide d’ADN associe un désoxyribose, un groupement phosphate et une base azotée. Les quatre bases de l’ADN sont A, T, C et G.'
                    ],
                    [
                        'question' => 'Quelle base azotée est présente dans l’ARN à la place de la thymine ?',
                        'choices' => [
                            ['choice_text' => 'L’uracile', 'is_correct' => true],
                            ['choice_text' => 'La cytosine', 'is_correct' => false],
                            ['choice_text' => 'La guanine', 'is_correct' => false],
                            ['choice_text' => 'L’adénine', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’ARN, l’uracile remplace la thymine présente dans l’ADN. L’adénine, la cytosine et la guanine sont présentes dans les deux types d’acides nucléiques.'
                    ],
                    [
                        'question' => 'Pourquoi dit-on que l’ADN est une molécule « double brin » ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il est formé de deux chaînes complémentaires de nucléotides', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il contient deux types de sucres', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il possède toujours deux noyaux', 'is_correct' => false],
                            ['choice_text' => 'Parce que chaque base est constituée de deux molécules', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ADN classique forme une double hélice composée de deux brins complémentaires. Les bases s’apparient de manière spécifique entre les deux chaînes.'
                    ],
                    [
                        'question' => 'Un laboratoire compare une molécule d’ADN et une molécule d’ARN. Laquelle possède généralement du désoxyribose ?',
                        'choices' => [
                            ['choice_text' => 'L’ADN', 'is_correct' => true],
                            ['choice_text' => 'L’ARN', 'is_correct' => false],
                            ['choice_text' => 'Les deux toujours', 'is_correct' => false],
                            ['choice_text' => 'Aucune des deux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sucre de l’ADN est le désoxyribose. L’ARN contient du ribose, qui possède un atome d’oxygène supplémentaire.'
                    ],
                    [
                        'question' => 'Une cellule produit une protéine à partir d’une information portée par un gène. Quel rôle général joue alors l’ARN messager ?',
                        'choices' => [
                            ['choice_text' => 'Il transporte une copie de l’information du gène vers le ribosome', 'is_correct' => true],
                            ['choice_text' => 'Il stocke les lipides dans la membrane', 'is_correct' => false],
                            ['choice_text' => 'Il détruit directement les protéines', 'is_correct' => false],
                            ['choice_text' => 'Il remplace définitivement l’ADN du noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ARN messager (ARNm) sert d’intermédiaire entre l’ADN et le ribosome. Il contient une séquence qui sera lue pour déterminer l’ordre des acides aminés.'
                    ],
                    [
                        'question' => 'Si une séquence d’ADN contient beaucoup de nucléotides, qu’est-ce qui augmente directement ?',
                        'choices' => [
                            ['choice_text' => 'La longueur de la molécule d’ADN', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de membranes de la cellule', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de ribosomes dans toute la cellule', 'is_correct' => false],
                            ['choice_text' => 'La quantité de glucose dans le sang', 'is_correct' => false],
                        ],
                        'explanation' => 'Les nucléotides sont les unités de base de l’ADN. Plus une séquence contient de nucléotides, plus cette portion d’ADN est longue.'
                    ],
                    [
                        'question' => 'Deux fragments d’ADN ont la même longueur, mais leurs séquences de bases diffèrent. Quelle propriété de l’information génétique cela illustre-t-il ?',
                        'choices' => [
                            ['choice_text' => 'L’information dépend de l’ordre des bases', 'is_correct' => true],
                            ['choice_text' => 'Toutes les séquences ont exactement la même fonction', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de bases n’a aucune importance', 'is_correct' => false],
                            ['choice_text' => 'L’ADN ne peut pas être différent d’une cellule à l’autre', 'is_correct' => false],
                        ],
                        'explanation' => 'Ce n’est pas seulement la longueur de l’ADN qui compte : l’ordre des bases porte l’information. Deux séquences différentes peuvent donc contenir des informations différentes.'
                    ],
                    [
                        'question' => 'Une étudiante affirme : « L’ADN et l’ARN sont deux protéines différentes ». Quelle correction faut-il lui apporter ?',
                        'choices' => [
                            ['choice_text' => 'Ce sont des acides nucléiques, pas des protéines', 'is_correct' => true],
                            ['choice_text' => 'Ce sont deux types de lipides membranaires', 'is_correct' => false],
                            ['choice_text' => 'L’ADN est un glucide et l’ARN un lipide', 'is_correct' => false],
                            ['choice_text' => 'L’ARN seulement est une protéine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ADN et l’ARN appartiennent à la famille des acides nucléiques. Les protéines, elles, sont constituées d’acides aminés.'
                    ],
                    [
                        'question' => 'Une cellule possède beaucoup d’ADN mais seulement une partie de ses gènes est active. Que peut-on en conclure ?',
                        'choices' => [
                            ['choice_text' => 'La cellule régule l’utilisation de son information génétique selon ses besoins', 'is_correct' => true],
                            ['choice_text' => 'La partie inactive de l’ADN est forcément inutile', 'is_correct' => false],
                            ['choice_text' => 'L’ADN actif est transformé en glucose', 'is_correct' => false],
                            ['choice_text' => 'Chaque gène doit être traduit en permanence', 'is_correct' => false],
                        ],
                        'explanation' => 'Une cellule n’utilise pas tous ses gènes au même moment. La régulation de l’expression génétique lui permet d’adapter les protéines produites à sa fonction et à son environnement.'
                    ],
                ],
            ],
            [
                'title' => 'Structure de l’ADN et complémentarité',
                'description' => 'Entraînez-vous à reconnaître les bases de l’ADN, les appariements complémentaires et les conséquences simples de cette organisation moléculaire.',
                'questions' => [
                    [
                        'question' => 'Quelle paire de bases est complémentaire dans l’ADN ?',
                        'choices' => [
                            ['choice_text' => 'A avec T', 'is_correct' => true],
                            ['choice_text' => 'A avec C', 'is_correct' => false],
                            ['choice_text' => 'G avec T', 'is_correct' => false],
                            ['choice_text' => 'C avec A seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’ADN, l’adénine (A) s’apparie avec la thymine (T), tandis que la cytosine (C) s’apparie avec la guanine (G). Cette complémentarité aide notamment lors de la réplication.'
                    ],
                    [
                        'question' => 'Si un brin d’ADN contient la séquence A-C-G-T, quelle séquence complémentaire retrouve-t-on sur l’autre brin ?',
                        'choices' => [
                            ['choice_text' => 'T-G-C-A', 'is_correct' => true],
                            ['choice_text' => 'A-C-G-T', 'is_correct' => false],
                            ['choice_text' => 'U-G-C-A', 'is_correct' => false],
                            ['choice_text' => 'C-A-T-G', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque base appelle sa partenaire : A correspond à T et C correspond à G. Le complément de A-C-G-T est donc T-G-C-A.'
                    ],
                    [
                        'question' => 'Quelle base n’appartient pas aux bases azotées habituelles de l’ADN ?',
                        'choices' => [
                            ['choice_text' => 'L’uracile', 'is_correct' => true],
                            ['choice_text' => 'L’adénine', 'is_correct' => false],
                            ['choice_text' => 'La cytosine', 'is_correct' => false],
                            ['choice_text' => 'La guanine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’uracile est la base caractéristique de l’ARN à la place de la thymine. L’ADN utilise A, T, C et G.'
                    ],
                    [
                        'question' => 'Pourquoi la complémentarité des bases est-elle utile pour copier l’ADN ?',
                        'choices' => [
                            ['choice_text' => 'Chaque brin peut servir de modèle pour construire son complément', 'is_correct' => true],
                            ['choice_text' => 'Elle empêche toutes les mutations', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme automatiquement l’ADN en protéine', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace les nucléotides par des acides aminés', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors de la réplication, l’appariement spécifique des bases permet d’ajouter le bon nucléotide face à chaque base du brin modèle.'
                    ],
                    [
                        'question' => 'Quel type de liaison maintient principalement les deux brins d’ADN associés au niveau des bases complémentaires ?',
                        'choices' => [
                            ['choice_text' => 'Des liaisons hydrogène', 'is_correct' => true],
                            ['choice_text' => 'Des liaisons peptidiques', 'is_correct' => false],
                            ['choice_text' => 'Des liaisons ioniques entre acides aminés', 'is_correct' => false],
                            ['choice_text' => 'Des liaisons glycosidiques entre protéines', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bases complémentaires des deux brins sont associées par des liaisons hydrogène. La structure du squelette sucre-phosphate repose sur d’autres liaisons covalentes.'
                    ],
                    [
                        'question' => 'Un fragment d’ADN possède 20 nucléotides au total, dont 8 sont des adénines. Combien compte-t-il de thymines ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un ADN double brin, A s’apparie avec T. Une quantité de 8 adénines implique donc 8 thymines.'
                    ],
                    [
                        'question' => 'Quel changement conserverait la nature de l’ADN tout en modifiant potentiellement l’information portée par la séquence ?',
                        'choices' => [
                            ['choice_text' => 'Le remplacement d’une base par une autre base', 'is_correct' => true],
                            ['choice_text' => 'Le remplacement de tous les nucléotides par des acides aminés', 'is_correct' => false],
                            ['choice_text' => 'La transformation du squelette en phospholipides', 'is_correct' => false],
                            ['choice_text' => 'La suppression du sucre de chaque nucléotide', 'is_correct' => false],
                        ],
                        'explanation' => 'Changer une base peut modifier la séquence d’ADN et donc l’information génétique. Une telle modification correspond à une mutation si elle est durable dans la molécule.'
                    ],
                    [
                        'question' => 'Une erreur de modèle conduit un élève à écrire G-C-A-T comme complément de C-G-T-A. Où se trouve son erreur ?',
                        'choices' => [
                            ['choice_text' => 'Il a inversé les appariements complémentaires', 'is_correct' => true],
                            ['choice_text' => 'Il a utilisé des acides aminés au lieu de bases', 'is_correct' => false],
                            ['choice_text' => 'Il a doublé le nombre de nucléotides', 'is_correct' => false],
                            ['choice_text' => 'Il a remplacé le phosphate par du glucose', 'is_correct' => false],
                        ],
                        'explanation' => 'Le complément de C-G-T-A est G-C-A-T. Si cette séquence a été donnée autrement, il faut vérifier l’appariement C↔G, G↔C, T↔A et A↔T.'
                    ],
                    [
                        'question' => 'Une chercheuse chauffe un échantillon d’ADN et observe que les deux brins se séparent. Quel événement décrit-elle ?',
                        'choices' => [
                            ['choice_text' => 'La dénaturation de l’ADN', 'is_correct' => true],
                            ['choice_text' => 'La traduction d’une protéine', 'is_correct' => false],
                            ['choice_text' => 'La synthèse de lipides', 'is_correct' => false],
                            ['choice_text' => 'La glycolyse', 'is_correct' => false],
                        ],
                        'explanation' => 'La chaleur peut rompre les interactions entre les deux brins et provoquer leur séparation : on parle de dénaturation. Le squelette covalent de chaque brin n’est pas simplement détruit par cette étape.'
                    ],
                    [
                        'question' => 'Dans un modèle d’ADN, quelle combinaison décrit correctement un nucléotide ?',
                        'choices' => [
                            ['choice_text' => 'Désoxyribose + phosphate + base azotée', 'is_correct' => true],
                            ['choice_text' => 'Ribose + acide aminé + phosphate', 'is_correct' => false],
                            ['choice_text' => 'Glucose + base azotée + acide gras', 'is_correct' => false],
                            ['choice_text' => 'Désoxyribose + deux acides aminés', 'is_correct' => false],
                        ],
                        'explanation' => 'Un nucléotide d’ADN est constitué d’un désoxyribose, d’un phosphate et d’une base azotée. Cet assemblage se répète pour former la chaîne d’ADN.'
                    ],
                ],
            ],
            [
                'title' => 'Réplication de l’ADN',
                'description' => 'Comprenez comment une cellule copie son ADN avant une division, en reliant complémentarité des bases et conservation de l’information.',
                'questions' => [
                    [
                        'question' => 'À quel moment du cycle cellulaire l’ADN est-il normalement répliqué avant la division ?',
                        'choices' => [
                            ['choice_text' => 'Pendant la phase S', 'is_correct' => true],
                            ['choice_text' => 'Pendant la phase G1 uniquement', 'is_correct' => false],
                            ['choice_text' => 'Pendant la phase G2 uniquement', 'is_correct' => false],
                            ['choice_text' => 'Après la cytocinèse seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'La phase S de l’interphase est consacrée à la réplication de l’ADN. La cellule dispose ainsi de copies de son matériel génétique avant la division.'
                    ],
                    [
                        'question' => 'Quelle enzyme ouvre localement la double hélice d’ADN au début de la réplication ?',
                        'choices' => [
                            ['choice_text' => 'L’hélicase', 'is_correct' => true],
                            ['choice_text' => 'La pepsine', 'is_correct' => false],
                            ['choice_text' => 'L’amylase', 'is_correct' => false],
                            ['choice_text' => 'La lipase', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hélicase sépare les deux brins de l’ADN en ouvrant la double hélice. D’autres enzymes interviennent ensuite pour assembler les nouveaux nucléotides.'
                    ],
                    [
                        'question' => 'Quel est le principe essentiel utilisé pour fabriquer un nouveau brin d’ADN ?',
                        'choices' => [
                            ['choice_text' => 'L’appariement complémentaire des bases', 'is_correct' => true],
                            ['choice_text' => 'Le hasard complet dans le choix des bases', 'is_correct' => false],
                            ['choice_text' => 'La lecture directe des acides aminés', 'is_correct' => false],
                            ['choice_text' => 'La fusion de deux protéines', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nouveau brin est synthétisé en respectant la complémentarité des bases : A avec T et C avec G. Ce mécanisme permet une copie fidèle de l’information.'
                    ],
                    [
                        'question' => 'Pourquoi dit-on que la réplication est semi-conservative ?',
                        'choices' => [
                            ['choice_text' => 'Chaque molécule fille conserve un ancien brin et reçoit un nouveau brin', 'is_correct' => true],
                            ['choice_text' => 'Une seule moitié de l’ADN est copiée', 'is_correct' => false],
                            ['choice_text' => 'La cellule détruit toujours la moitié de son ADN', 'is_correct' => false],
                            ['choice_text' => 'Un seul type de base est conservé', 'is_correct' => false],
                        ],
                        'explanation' => 'Après réplication, chaque double hélice possède un brin parental et un brin nouvellement synthétisé. C’est ce qui justifie le terme semi-conservative.'
                    ],
                    [
                        'question' => 'Une portion du brin modèle contient A-G-C. Quels nucléotides doivent être ajoutés sur le nouveau brin ?',
                        'choices' => [
                            ['choice_text' => 'T-C-G', 'is_correct' => true],
                            ['choice_text' => 'A-G-C', 'is_correct' => false],
                            ['choice_text' => 'U-C-G', 'is_correct' => false],
                            ['choice_text' => 'G-T-C', 'is_correct' => false],
                        ],
                        'explanation' => 'La complémentarité impose A→T, G→C et C→G. Le nouveau segment sera donc T-C-G.'
                    ],
                    [
                        'question' => 'Quel rôle joue principalement l’ADN polymérase pendant la réplication ?',
                        'choices' => [
                            ['choice_text' => 'Elle ajoute les nucléotides du nouveau brin', 'is_correct' => true],
                            ['choice_text' => 'Elle découpe les protéines en acides aminés', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme directement l’ARN en lipide', 'is_correct' => false],
                            ['choice_text' => 'Elle produit l’énergie de la cellule', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ADN polymérase utilise le brin modèle pour ajouter les nucléotides complémentaires et former le nouveau brin d’ADN.'
                    ],
                    [
                        'question' => 'Une mutation apparaît lors de la copie de l’ADN et n’est pas corrigée. Quelle conséquence est possible ?',
                        'choices' => [
                            ['choice_text' => 'La séquence d’ADN de la cellule peut être durablement modifiée', 'is_correct' => true],
                            ['choice_text' => 'La cellule devient automatiquement un virus', 'is_correct' => false],
                            ['choice_text' => 'Toutes les protéines de l’organisme sont immédiatement détruites', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de chromosomes double à chaque erreur', 'is_correct' => false],
                        ],
                        'explanation' => 'Une erreur de réplication non corrigée peut rester inscrite dans l’ADN. Son effet dépend de la région touchée et de la nature du changement.'
                    ],
                    [
                        'question' => 'Deux cellules filles reçoivent généralement la même information génétique de départ après une réplication correcte. Pourquoi ?',
                        'choices' => [
                            ['choice_text' => 'Parce que l’ADN a été copié à partir de séquences complémentaires', 'is_correct' => true],
                            ['choice_text' => 'Parce que les cellules fabriquent spontanément le même ADN sans modèle', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’ARN remplace tous les chromosomes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les protéines imposent directement la séquence de l’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'La complémentarité des bases permet de recopier précisément l’information portée par l’ADN. La distribution des chromosomes lors de la division permet ensuite aux cellules filles de recevoir cette information.'
                    ],
                    [
                        'question' => 'Un élève pense que la réplication consiste à copier seulement les gènes qui seront immédiatement utilisés. Que faut-il retenir ?',
                        'choices' => [
                            ['choice_text' => 'Avant la division, l’ensemble du génome à transmettre doit être répliqué', 'is_correct' => true],
                            ['choice_text' => 'Seules les protéines déjà présentes doivent être copiées', 'is_correct' => false],
                            ['choice_text' => 'Seuls les gènes visibles au microscope sont copiés', 'is_correct' => false],
                            ['choice_text' => 'La réplication concerne uniquement les molécules d’ARN', 'is_correct' => false],
                        ],
                        'explanation' => 'La réplication prépare la transmission de l’ensemble du matériel génétique. Elle ne se limite pas aux gènes dont l’expression est immédiate.'
                    ],
                    [
                        'question' => 'Une cellule doit se diviser et transmettre son patrimoine génétique à deux cellules filles. Quelle succession est cohérente ?',
                        'choices' => [
                            ['choice_text' => 'Réplication de l’ADN puis séparation des chromosomes lors de la division', 'is_correct' => true],
                            ['choice_text' => 'Traduction de toutes les protéines puis disparition de l’ADN', 'is_correct' => false],
                            ['choice_text' => 'Destruction de l’ADN puis synthèse d’un nouveau génome après la division', 'is_correct' => false],
                            ['choice_text' => 'Copie de l’ARN uniquement puis remplacement des chromosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le matériel génétique est d’abord répliqué afin de disposer de copies. Les chromosomes sont ensuite répartis entre les cellules filles lors de la division cellulaire.'
                    ],
                ],
            ],
            [
                'title' => 'Transcription et ARN',
                'description' => 'Apprenez à distinguer ADN et ARN et à comprendre la transcription d’un gène en ARN messager.',
                'questions' => [
                    [
                        'question' => 'Comment appelle-t-on la fabrication d’un ARN à partir d’un gène d’ADN ?',
                        'choices' => [
                            ['choice_text' => 'La transcription', 'is_correct' => true],
                            ['choice_text' => 'La traduction', 'is_correct' => false],
                            ['choice_text' => 'La réplication', 'is_correct' => false],
                            ['choice_text' => 'La fermentation', 'is_correct' => false],
                        ],
                        'explanation' => 'La transcription produit un ARN à partir d’une séquence d’ADN. La traduction est l’étape suivante, au cours de laquelle un ribosome utilise l’ARNm pour synthétiser une protéine.'
                    ],
                    [
                        'question' => 'Quelle enzyme réalise la synthèse de l’ARN lors de la transcription ?',
                        'choices' => [
                            ['choice_text' => 'L’ARN polymérase', 'is_correct' => true],
                            ['choice_text' => 'L’ADN ligase', 'is_correct' => false],
                            ['choice_text' => 'La pepsine', 'is_correct' => false],
                            ['choice_text' => 'L’hélicase digestive', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ARN polymérase lit un brin d’ADN et assemble les ribonucléotides complémentaires pour former un ARN.'
                    ],
                    [
                        'question' => 'Quel appariement est utilisé lors de la transcription ?',
                        'choices' => [
                            ['choice_text' => 'A avec U et C avec G', 'is_correct' => true],
                            ['choice_text' => 'A avec T et C avec U', 'is_correct' => false],
                            ['choice_text' => 'A avec C et G avec U', 'is_correct' => false],
                            ['choice_text' => 'T avec U et A avec G', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme l’ARN contient de l’uracile, une adénine de l’ADN sert de modèle pour un uracile dans l’ARN. La cytosine s’apparie avec la guanine.'
                    ],
                    [
                        'question' => 'Quel ARN sert directement de message lu par le ribosome pour fabriquer une protéine ?',
                        'choices' => [
                            ['choice_text' => 'L’ARN messager (ARNm)', 'is_correct' => true],
                            ['choice_text' => 'L’ADN mitochondrial uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’ARN de transfert uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’ATP', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ARN messager porte la séquence de nucléotides qui sera parcourue par le ribosome. Les autres ARN peuvent avoir des rôles complémentaires mais ne constituent pas le même message.'
                    ],
                    [
                        'question' => 'Une séquence du brin d’ADN modèle est A-T-G-C. Quel ARN complémentaire simple obtient-on ?',
                        'choices' => [
                            ['choice_text' => 'U-A-C-G', 'is_correct' => true],
                            ['choice_text' => 'T-A-C-G', 'is_correct' => false],
                            ['choice_text' => 'A-U-G-C', 'is_correct' => false],
                            ['choice_text' => 'U-T-A-C', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors de la transcription, A donne U dans l’ARN, T donne A, G donne C et C donne G. La séquence obtenue est donc U-A-C-G.'
                    ],
                    [
                        'question' => 'Une cellule fabrique beaucoup d’ARNm à partir d’un même gène. Que peut-on raisonnablement en déduire ?',
                        'choices' => [
                            ['choice_text' => 'Que ce gène est probablement fortement exprimé à ce moment-là', 'is_correct' => true],
                            ['choice_text' => 'Que l’ADN a forcément muté', 'is_correct' => false],
                            ['choice_text' => 'Que la cellule ne contient plus de ribosomes', 'is_correct' => false],
                            ['choice_text' => 'Que tous les gènes sont exprimés au même niveau', 'is_correct' => false],
                        ],
                        'explanation' => 'Une production importante d’ARNm traduit généralement une activité élevée de transcription pour ce gène dans les conditions observées.'
                    ],
                    [
                        'question' => 'Pourquoi la transcription permet-elle à une cellule de conserver son ADN tout en utilisant son information ?',
                        'choices' => [
                            ['choice_text' => 'La cellule produit un ARN intermédiaire au lieu de déplacer l’ADN lui-même', 'is_correct' => true],
                            ['choice_text' => 'La cellule transforme l’ADN entier en protéine', 'is_correct' => false],
                            ['choice_text' => 'Le ribosome lit directement les deux brins d’ADN', 'is_correct' => false],
                            ['choice_text' => 'L’ARN détruit les chromosomes après chaque lecture', 'is_correct' => false],
                        ],
                        'explanation' => 'La transcription crée une copie fonctionnelle sous forme d’ARN. L’ADN reste ainsi la source stable de l’information génétique.'
                    ],
                    [
                        'question' => 'Une substance empêche fortement l’ARN polymérase de fonctionner. Quelle conséquence est la plus directe ?',
                        'choices' => [
                            ['choice_text' => 'La synthèse de nombreux ARN diminue', 'is_correct' => true],
                            ['choice_text' => 'La réplication de l’ADN devient automatiquement plus rapide', 'is_correct' => false],
                            ['choice_text' => 'Toutes les membranes cellulaires disparaissent immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Les acides aminés deviennent des nucléotides', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ARN polymérase est essentielle à la transcription. Son inhibition réduit donc la production des ARN qu’elle synthétise.'
                    ],
                    [
                        'question' => 'Un étudiant confond transcription et traduction. Quelle association corrige son erreur ?',
                        'choices' => [
                            ['choice_text' => 'Transcription : ADN → ARN ; traduction : ARN → protéine', 'is_correct' => true],
                            ['choice_text' => 'Transcription : protéine → ADN ; traduction : ADN → ARN', 'is_correct' => false],
                            ['choice_text' => 'Transcription : ARN → ADN ; traduction : lipide → protéine', 'is_correct' => false],
                            ['choice_text' => 'Transcription : glucose → ARN ; traduction : ARN → lipide', 'is_correct' => false],
                        ],
                        'explanation' => 'La transcription copie l’information génétique de l’ADN vers un ARN. La traduction utilise ensuite l’ARNm pour assembler une chaîne polypeptidique.'
                    ],
                    [
                        'question' => 'Une cellule reçoit un signal qui active un gène impliqué dans la production d’une enzyme. Quelle réponse cellulaire est cohérente ?',
                        'choices' => [
                            ['choice_text' => 'La transcription du gène peut augmenter, suivie de la production de l’enzyme', 'is_correct' => true],
                            ['choice_text' => 'Le gène doit être retiré du chromosome avant toute utilisation', 'is_correct' => false],
                            ['choice_text' => 'La cellule doit remplacer l’ADN par des protéines', 'is_correct' => false],
                            ['choice_text' => 'La présence de l’ARN interdit toute traduction', 'is_correct' => false],
                        ],
                        'explanation' => 'L’activation d’un gène peut stimuler sa transcription. L’ARNm produit peut ensuite être traduit, ce qui augmente la synthèse de la protéine concernée.'
                    ],
                ],
            ],
            [
                'title' => 'Traduction et synthèse des protéines',
                'description' => 'Maîtrisez les bases de la traduction : ribosomes, codons, ARN de transfert et ordre des acides aminés.',
                'questions' => [
                    [
                        'question' => 'Dans quelle structure cellulaire la traduction des protéines a-t-elle lieu ?',
                        'choices' => [
                            ['choice_text' => 'Au niveau des ribosomes', 'is_correct' => true],
                            ['choice_text' => 'Dans les lysosomes uniquement', 'is_correct' => false],
                            ['choice_text' => 'Dans les membranes cellulaires uniquement', 'is_correct' => false],
                            ['choice_text' => 'Dans les chromosomes eux-mêmes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ribosomes lisent l’ARN messager et assemblent les acides aminés dans l’ordre indiqué par les codons.'
                    ],
                    [
                        'question' => 'Comment appelle-t-on un groupe de trois nucléotides de l’ARNm qui correspond à un acide aminé ou à un signal ?',
                        'choices' => [
                            ['choice_text' => 'Un codon', 'is_correct' => true],
                            ['choice_text' => 'Un chromosome', 'is_correct' => false],
                            ['choice_text' => 'Un intron', 'is_correct' => false],
                            ['choice_text' => 'Un phospholipide', 'is_correct' => false],
                        ],
                        'explanation' => 'Un codon est formé de trois nucléotides successifs sur l’ARNm. Le code génétique associe ces codons à des acides aminés ou à des signaux d’arrêt.'
                    ],
                    [
                        'question' => 'Quel ARN apporte les acides aminés au ribosome pendant la traduction ?',
                        'choices' => [
                            ['choice_text' => 'L’ARN de transfert (ARNt)', 'is_correct' => true],
                            ['choice_text' => 'L’ARN messager seulement', 'is_correct' => false],
                            ['choice_text' => 'L’ADN', 'is_correct' => false],
                            ['choice_text' => 'L’ATP comme support de l’information', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ARNt transporte un acide aminé et reconnaît un codon de l’ARNm grâce à son anticodon complémentaire.'
                    ],
                    [
                        'question' => 'Si l’ordre des codons sur un ARNm change, qu’est-ce qui peut changer dans la protéine produite ?',
                        'choices' => [
                            ['choice_text' => 'L’ordre des acides aminés', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de membranes de la cellule', 'is_correct' => false],
                            ['choice_text' => 'La quantité de calcium dans tous les os', 'is_correct' => false],
                            ['choice_text' => 'La nature du sucre de l’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'La séquence des codons détermine l’ordre des acides aminés. Une modification de l’ARNm peut donc modifier la séquence ou parfois la longueur de la protéine.'
                    ],
                    [
                        'question' => 'Un ARNm commence par un codon de départ reconnu par le ribosome. À quoi sert surtout ce signal ?',
                        'choices' => [
                            ['choice_text' => 'À indiquer le début de la traduction', 'is_correct' => true],
                            ['choice_text' => 'À terminer immédiatement la synthèse de la protéine', 'is_correct' => false],
                            ['choice_text' => 'À copier tout le chromosome', 'is_correct' => false],
                            ['choice_text' => 'À séparer les deux membranes de la cellule', 'is_correct' => false],
                        ],
                        'explanation' => 'Le codon de départ sert de repère au ribosome pour commencer la lecture de l’ARNm dans le bon cadre.'
                    ],
                    [
                        'question' => 'Deux ARNm diffèrent par un seul codon, et ce changement remplace un acide aminé par un autre. Quel niveau de structure de la protéine est directement modifié ?',
                        'choices' => [
                            ['choice_text' => 'La séquence des acides aminés, donc la structure primaire', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de chromosomes de la cellule', 'is_correct' => false],
                            ['choice_text' => 'La composition du noyau entier', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de ribosomes uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure primaire d’une protéine correspond à sa séquence d’acides aminés. Changer un acide aminé modifie donc directement cette séquence.'
                    ],
                    [
                        'question' => 'Pourquoi deux cellules possédant le même ADN peuvent-elles fabriquer des quantités différentes d’une même protéine ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent exprimer le gène à des niveaux différents', 'is_correct' => true],
                            ['choice_text' => 'Elles possèdent forcément des codes génétiques différents', 'is_correct' => false],
                            ['choice_text' => 'Le ribosome change la séquence de l’ADN à chaque traduction', 'is_correct' => false],
                            ['choice_text' => 'Une cellule transforme tous ses gènes en protéines simultanément', 'is_correct' => false],
                        ],
                        'explanation' => 'La régulation de l’expression des gènes permet à des cellules différentes d’activer un même gène à des niveaux différents, selon leurs besoins.'
                    ],
                    [
                        'question' => 'Un ribosome arrive sur un codon stop. Que se passe-t-il normalement ?',
                        'choices' => [
                            ['choice_text' => 'La traduction se termine', 'is_correct' => true],
                            ['choice_text' => 'Le ribosome copie tout l’ADN', 'is_correct' => false],
                            ['choice_text' => 'Un nouvel acide aminé est ajouté automatiquement', 'is_correct' => false],
                            ['choice_text' => 'L’ARNm devient immédiatement un chromosome', 'is_correct' => false],
                        ],
                        'explanation' => 'Un codon stop ne code pas pour un acide aminé : il signale l’arrêt de la traduction et la libération de la chaîne polypeptidique.'
                    ],
                    [
                        'question' => 'Un élève dit qu’un ribosome « invente » la séquence d’une protéine. Quelle formulation est plus juste ?',
                        'choices' => [
                            ['choice_text' => 'Le ribosome suit l’ordre des codons de l’ARNm pour assembler les acides aminés', 'is_correct' => true],
                            ['choice_text' => 'Le ribosome choisit les acides aminés au hasard', 'is_correct' => false],
                            ['choice_text' => 'Le ribosome lit directement les lipides de la membrane', 'is_correct' => false],
                            ['choice_text' => 'Le ribosome remplace chaque codon par un nucléotide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ribosome exécute un programme moléculaire porté par l’ARNm. Les codons et les ARNt permettent de placer les bons acides aminés dans l’ordre.'
                    ],
                    [
                        'question' => 'Lorsqu’un ARNm est lu dans le mauvais cadre de lecture, pourquoi la protéine obtenue peut-elle être très différente ?',
                        'choices' => [
                            ['choice_text' => 'Les groupes de trois nucléotides sont interprétés différemment', 'is_correct' => true],
                            ['choice_text' => 'Le ribosome change le code génétique de l’organisme', 'is_correct' => false],
                            ['choice_text' => 'Les acides aminés deviennent des nucléotides', 'is_correct' => false],
                            ['choice_text' => 'L’ARNm est automatiquement remplacé par de l’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'La traduction lit l’ARNm par groupes de trois nucléotides. Un décalage modifie donc les codons suivants et peut entraîner une séquence d’acides aminés fortement différente.'
                    ],
                ],
            ],
            [
                'title' => 'Du gène à la protéine',
                'description' => 'Reliez ADN, gène, ARN et protéine dans des situations simples et entraînez-vous à suivre le chemin de l’information génétique.',
                'questions' => [
                    [
                        'question' => 'Quelle suite représente correctement le flux classique de l’information génétique ?',
                        'choices' => [
                            ['choice_text' => 'ADN → ARN → protéine', 'is_correct' => true],
                            ['choice_text' => 'Protéine → ARN → ADN uniquement', 'is_correct' => false],
                            ['choice_text' => 'Glucose → ADN → ARN', 'is_correct' => false],
                            ['choice_text' => 'ARN → lipide → ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle classique de l’expression des gènes, l’ADN est transcrit en ARN, puis l’ARNm est traduit en protéine.'
                    ],
                    [
                        'question' => 'Un gène peut être décrit simplement comme :',
                        'choices' => [
                            ['choice_text' => 'Une séquence d’ADN portant une information fonctionnelle', 'is_correct' => true],
                            ['choice_text' => 'Un organite qui fabrique l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Une protéine située dans la membrane', 'is_correct' => false],
                            ['choice_text' => 'Un type de sucre utilisé par les ribosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Un gène est une région d’ADN qui porte une information permettant la production d’un produit fonctionnel, souvent une protéine ou un ARN.'
                    ],
                    [
                        'question' => 'Une mutation change une base dans une région codante d’un gène. Quelle conséquence est possible sans être systématique ?',
                        'choices' => [
                            ['choice_text' => 'Une modification de la protéine produite', 'is_correct' => true],
                            ['choice_text' => 'La disparition obligatoire de la cellule', 'is_correct' => false],
                            ['choice_text' => 'Le remplacement de tout l’ADN par de l’ARN', 'is_correct' => false],
                            ['choice_text' => 'La création automatique d’un nouveau chromosome', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation dans une région codante peut modifier un codon et donc l’acide aminé correspondant. Mais certaines mutations n’ont pas de conséquence sur la protéine.'
                    ],
                    [
                        'question' => 'Pourquoi une mutation dans une région non codante peut-elle parfois avoir un effet sur l’expression d’un gène ?',
                        'choices' => [
                            ['choice_text' => 'Parce que certaines régions non codantes participent à la régulation du gène', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute région non codante devient forcément une protéine', 'is_correct' => false],
                            ['choice_text' => 'Parce que les protéines sont fabriquées directement dans l’ADN', 'is_correct' => false],
                            ['choice_text' => 'Parce que le code génétique cesse immédiatement d’exister', 'is_correct' => false],
                        ],
                        'explanation' => 'Toutes les régions non codantes ne sont pas inutiles. Certaines interviennent dans la régulation ou dans la maturation des ARN.'
                    ],
                    [
                        'question' => 'Une cellule musculaire et une cellule nerveuse possèdent le même génome mais n’ont pas le même rôle. Quelle idée explique le mieux cette différence ?',
                        'choices' => [
                            ['choice_text' => 'Elles n’expriment pas exactement les mêmes ensembles de gènes', 'is_correct' => true],
                            ['choice_text' => 'Elles ont toujours des espèces différentes', 'is_correct' => false],
                            ['choice_text' => 'Le code génétique est totalement différent dans chaque cellule', 'is_correct' => false],
                            ['choice_text' => 'Une seule des deux possède de l’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'La spécialisation cellulaire repose notamment sur une expression différente des gènes. Les cellules utilisent ainsi des protéines différentes et en quantités différentes.'
                    ],
                    [
                        'question' => 'Un laboratoire mesure beaucoup d’ARNm d’un gène mais peu de protéine correspondante. Quelle conclusion est la plus prudente ?',
                        'choices' => [
                            ['choice_text' => 'La présence d’ARNm ne garantit pas qu’une grande quantité de protéine soit produite', 'is_correct' => true],
                            ['choice_text' => 'L’ARNm est forcément une protéine', 'is_correct' => false],
                            ['choice_text' => 'Le gène a forcément disparu', 'is_correct' => false],
                            ['choice_text' => 'La cellule n’a plus de ribosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Entre la quantité d’ARNm et celle de la protéine, plusieurs niveaux de régulation existent. La stabilité de l’ARN et l’efficacité de traduction peuvent notamment intervenir.'
                    ],
                    [
                        'question' => 'Une mutation transforme un codon en codon stop prématuré. Quel effet est le plus directement attendu ?',
                        'choices' => [
                            ['choice_text' => 'La protéine peut être plus courte que prévu', 'is_correct' => true],
                            ['choice_text' => 'Le chromosome devient automatiquement plus long', 'is_correct' => false],
                            ['choice_text' => 'L’ARNm devient une membrane', 'is_correct' => false],
                            ['choice_text' => 'Tous les autres gènes sont supprimés', 'is_correct' => false],
                        ],
                        'explanation' => 'Un codon stop prématuré peut arrêter la traduction avant la fin du message. La protéine produite peut alors être tronquée et perdre tout ou partie de sa fonction.'
                    ],
                    [
                        'question' => 'Un étudiant pense qu’un changement de base dans l’ADN modifie toujours l’acide aminé correspondant. Pourquoi cette affirmation est-elle trop absolue ?',
                        'choices' => [
                            ['choice_text' => 'Parce que plusieurs codons peuvent coder le même acide aminé', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’aucun codon ne code un acide aminé', 'is_correct' => false],
                            ['choice_text' => 'Parce que les protéines sont indépendantes de l’ARNm', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les mutations sont réparées instantanément', 'is_correct' => false],
                        ],
                        'explanation' => 'Le code génétique est redondant : plusieurs codons différents peuvent correspondre au même acide aminé. Une mutation peut donc être silencieuse.'
                    ],
                    [
                        'question' => 'Une hormone active un récepteur et entraîne la production d’une enzyme dans une cellule. Quel enchaînement simple peut expliquer ce résultat ?',
                        'choices' => [
                            ['choice_text' => 'Signal → activation d’un gène → transcription → traduction → enzyme', 'is_correct' => true],
                            ['choice_text' => 'Signal → destruction de l’ADN → apparition de l’enzyme', 'is_correct' => false],
                            ['choice_text' => 'Signal → transformation directe du glucose en protéine', 'is_correct' => false],
                            ['choice_text' => 'Signal → remplacement des ribosomes par des chromosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Un signal cellulaire peut modifier l’expression d’un gène. Une fois le gène activé, l’ARN puis la protéine correspondante peuvent être produits.'
                    ],
                    [
                        'question' => 'Une protéine est présente en grande quantité dans une cellule après l’activation d’un gène. Quelle chaîne d’événements est la plus cohérente ?',
                        'choices' => [
                            ['choice_text' => 'Activation du gène → production d’ARNm → traduction accrue', 'is_correct' => true],
                            ['choice_text' => 'Activation du gène → destruction de l’ARNm → plus de protéines', 'is_correct' => false],
                            ['choice_text' => 'Activation du gène → disparition du ribosome → synthèse protéique', 'is_correct' => false],
                            ['choice_text' => 'Activation du gène → remplacement de l’ADN par des lipides', 'is_correct' => false],
                        ],
                        'explanation' => 'L’activation d’un gène peut augmenter sa transcription et donc la quantité d’ARNm disponible. Si la traduction est également efficace, davantage de protéine peut être produite.'
                    ],
                ],
            ],
            [
                'title' => 'Mutations et expression génétique',
                'description' => 'Identifiez les effets possibles des mutations et comprenez que toutes les modifications de l’ADN n’ont pas le même impact.',
                'questions' => [
                    [
                        'question' => 'Comment définir simplement une mutation ?',
                        'choices' => [
                            ['choice_text' => 'Une modification durable de la séquence d’ADN', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation temporaire du glucose', 'is_correct' => false],
                            ['choice_text' => 'Une destruction de toutes les protéines', 'is_correct' => false],
                            ['choice_text' => 'Une division normale du cytoplasme', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation correspond à un changement de la séquence d’ADN. Ses conséquences peuvent être neutres, bénéfiques ou défavorables selon le contexte.'
                    ],
                    [
                        'question' => 'Quelle mutation correspond à une simple substitution ?',
                        'choices' => [
                            ['choice_text' => 'Une base est remplacée par une autre', 'is_correct' => true],
                            ['choice_text' => 'Un chromosome entier est toujours éliminé', 'is_correct' => false],
                            ['choice_text' => 'Une protéine se replie sans changement de séquence', 'is_correct' => false],
                            ['choice_text' => 'Deux cellules fusionnent', 'is_correct' => false],
                        ],
                        'explanation' => 'Une substitution consiste à remplacer un nucléotide ou une base par une autre. Elle peut être silencieuse ou modifier le message selon le codon concerné.'
                    ],
                    [
                        'question' => 'Une mutation silencieuse est une mutation qui :',
                        'choices' => [
                            ['choice_text' => 'Ne change pas l’acide aminé codé dans le contexte étudié', 'is_correct' => true],
                            ['choice_text' => 'Supprime toujours un chromosome', 'is_correct' => false],
                            ['choice_text' => 'Arrête nécessairement la traduction', 'is_correct' => false],
                            ['choice_text' => 'Empêche toute transcription', 'is_correct' => false],
                        ],
                        'explanation' => 'Grâce à la redondance du code génétique, une substitution peut conduire à un codon synonyme qui code le même acide aminé.'
                    ],
                    [
                        'question' => 'Pourquoi une insertion ou une délétion d’un seul nucléotide dans une région codante peut-elle être importante ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut décaler la lecture des codons', 'is_correct' => true],
                            ['choice_text' => 'Elle transforme automatiquement tous les gènes en ARN', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a jamais aucun effet', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toujours la membrane cellulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une insertion ou une délétion qui n’est pas multiple de trois peut décaler le cadre de lecture. Les codons situés après le changement peuvent alors être entièrement modifiés.'
                    ],
                    [
                        'question' => 'Une mutation modifie un codon mais celui-ci continue de coder le même acide aminé. Quel terme convient le mieux ?',
                        'choices' => [
                            ['choice_text' => 'Mutation silencieuse', 'is_correct' => true],
                            ['choice_text' => 'Mutation toujours létale', 'is_correct' => false],
                            ['choice_text' => 'Mutation de chromosome entier', 'is_correct' => false],
                            ['choice_text' => 'Mutation protéique sans changement d’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'Le changement de codon n’entraîne pas nécessairement un changement d’acide aminé. Lorsque l’acide aminé reste identique, on parle de mutation silencieuse.'
                    ],
                    [
                        'question' => 'Un gène régulateur devient moins actif à la suite d’une mutation située dans une région de contrôle. Quel effet est plausible ?',
                        'choices' => [
                            ['choice_text' => 'Une diminution de la quantité d’ARNm produit par ce gène', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation obligatoire de toutes les protéines cellulaires', 'is_correct' => false],
                            ['choice_text' => 'La duplication automatique de tous les chromosomes', 'is_correct' => false],
                            ['choice_text' => 'La transformation du gène en lipide', 'is_correct' => false],
                        ],
                        'explanation' => 'Une région de contrôle influence l’expression d’un gène. Si elle devient moins efficace, la transcription peut diminuer et produire moins d’ARNm.'
                    ],
                    [
                        'question' => 'Deux individus possèdent des versions légèrement différentes d’un même gène et présentent une caractéristique différente. Quelle idée cela illustre-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Des variations de séquence peuvent contribuer à des différences de caractères', 'is_correct' => true],
                            ['choice_text' => 'Tous les gènes ont forcément une seule séquence possible', 'is_correct' => false],
                            ['choice_text' => 'Les protéines ne dépendent jamais des gènes', 'is_correct' => false],
                            ['choice_text' => 'Une variation d’ADN ne peut toucher qu’un virus', 'is_correct' => false],
                        ],
                        'explanation' => 'Des variantes d’un même gène peuvent produire des protéines légèrement différentes ou modifier leur niveau d’expression. Les caractères résultent toutefois souvent de plusieurs facteurs.'
                    ],
                    [
                        'question' => 'Pourquoi une mutation n’entraîne-t-elle pas nécessairement une maladie ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut être sans effet sur la protéine ou ne pas perturber une fonction essentielle', 'is_correct' => true],
                            ['choice_text' => 'Toutes les mutations sont immédiatement éliminées', 'is_correct' => false],
                            ['choice_text' => 'Les cellules n’utilisent jamais leur ADN', 'is_correct' => false],
                            ['choice_text' => 'Une mutation transforme toujours un gène en hormone', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effet d’une mutation dépend de sa position, de sa nature et du rôle du gène concerné. Certaines mutations sont donc neutres dans les conditions observées.'
                    ],
                    [
                        'question' => 'Une maladie génétique est associée à une mutation qui crée un codon stop très tôt dans le gène. Quelle raison explique le risque d’un effet important ?',
                        'choices' => [
                            ['choice_text' => 'La protéine peut être fortement raccourcie et perdre sa fonction', 'is_correct' => true],
                            ['choice_text' => 'Le codon stop rallonge toujours la protéine', 'is_correct' => false],
                            ['choice_text' => 'La mutation transforme l’ADN en ARN', 'is_correct' => false],
                            ['choice_text' => 'Le ribosome devient un chromosome', 'is_correct' => false],
                        ],
                        'explanation' => 'Un arrêt prématuré de la traduction peut empêcher la formation d’une protéine complète. Si cette protéine a une fonction essentielle, les conséquences peuvent être importantes.'
                    ],
                    [
                        'question' => 'Une insertion de trois nucléotides dans une région codante a lieu. Pourquoi son effet peut-il être différent de celui d’une insertion d’un seul nucléotide ?',
                        'choices' => [
                            ['choice_text' => 'Trois nucléotides peuvent ajouter un codon sans décaler le cadre de lecture', 'is_correct' => true],
                            ['choice_text' => 'Un seul nucléotide ne peut jamais modifier une protéine', 'is_correct' => false],
                            ['choice_text' => 'Trois nucléotides détruisent toujours le chromosome', 'is_correct' => false],
                            ['choice_text' => 'Une insertion de trois nucléotides empêche obligatoirement la transcription', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cadre de lecture repose sur des groupes de trois nucléotides. Une insertion multiple de trois peut conserver ce cadre, alors qu’une insertion d’un seul nucléotide peut le décaler.'
                    ],
                ],
            ],
            [
                'title' => 'Régulation de l’expression des gènes',
                'description' => 'Comprenez pourquoi les cellules n’expriment pas tous leurs gènes de la même manière et comment l’environnement peut influencer cette expression.',
                'questions' => [
                    [
                        'question' => 'Pourquoi toutes les cellules d’un organisme multicellulaire ne fabriquent-elles pas exactement les mêmes protéines ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles n’expriment pas les mêmes gènes aux mêmes niveaux', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles ont toutes un ADN complètement différent', 'is_correct' => false],
                            ['choice_text' => 'Parce que seules certaines cellules possèdent des ribosomes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le code génétique change entre les tissus', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules spécialisées partagent généralement le même génome, mais elles activent ou répriment des ensembles de gènes différents selon leur fonction.'
                    ],
                    [
                        'question' => 'Quel terme désigne le fait qu’un gène est utilisé pour produire son ARN ou sa protéine ?',
                        'choices' => [
                            ['choice_text' => 'L’expression du gène', 'is_correct' => true],
                            ['choice_text' => 'La digestion du gène', 'is_correct' => false],
                            ['choice_text' => 'La minéralisation du gène', 'is_correct' => false],
                            ['choice_text' => 'La fermentation du gène', 'is_correct' => false],
                        ],
                        'explanation' => 'L’expression d’un gène correspond à l’utilisation de son information pour produire un ARN et, selon le cas, une protéine fonctionnelle.'
                    ],
                    [
                        'question' => 'Une cellule hépatique active des gènes nécessaires à ses fonctions, alors qu’ils restent peu actifs dans une cellule nerveuse. Cela montre que :',
                        'choices' => [
                            ['choice_text' => 'L’activité des gènes est adaptée au type cellulaire', 'is_correct' => true],
                            ['choice_text' => 'Les chromosomes du foie sont tous différents de ceux du cerveau', 'is_correct' => false],
                            ['choice_text' => 'Les cellules nerveuses n’ont pas d’ADN', 'is_correct' => false],
                            ['choice_text' => 'Chaque tissu utilise un code génétique différent', 'is_correct' => false],
                        ],
                        'explanation' => 'La spécialisation repose en partie sur une régulation différente de l’expression des gènes. Les cellules produisent ainsi les protéines adaptées à leur rôle.'
                    ],
                    [
                        'question' => 'Quel événement peut contribuer à augmenter la production d’une protéine dans une cellule ?',
                        'choices' => [
                            ['choice_text' => 'Une augmentation de la transcription du gène correspondant', 'is_correct' => true],
                            ['choice_text' => 'La destruction de tous les ARNm', 'is_correct' => false],
                            ['choice_text' => 'La disparition des ribosomes', 'is_correct' => false],
                            ['choice_text' => 'La réduction systématique des acides aminés disponibles', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus de transcription peut produire davantage d’ARNm disponible pour la traduction. C’est un des moyens par lesquels la cellule ajuste sa production protéique.'
                    ],
                    [
                        'question' => 'Une cellule reçoit un signal extérieur qui doit activer rapidement une voie métabolique. Pourquoi la régulation des gènes peut-elle être utile ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet d’ajuster la production de protéines en fonction des besoins', 'is_correct' => true],
                            ['choice_text' => 'Elle empêche définitivement toute réponse cellulaire', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme les signaux en chromosomes', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace automatiquement tous les enzymes par de l’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'La régulation de l’expression des gènes permet à une cellule de répondre à son environnement en augmentant ou diminuant la production de certaines protéines.'
                    ],
                    [
                        'question' => 'Un chercheur observe que l’ARNm d’un gène est détruit très rapidement dans une cellule. Quelle conséquence est plausible ?',
                        'choices' => [
                            ['choice_text' => 'La durée pendant laquelle cet ARNm peut être traduit est réduite', 'is_correct' => true],
                            ['choice_text' => 'La quantité d’ADN double automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Les ribosomes cessent tous de fonctionner', 'is_correct' => false],
                            ['choice_text' => 'Les chromosomes deviennent des protéines', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ARNm peu stable reste moins longtemps disponible pour les ribosomes. Sa dégradation rapide peut donc réduire la production de la protéine correspondante.'
                    ],
                    [
                        'question' => 'Deux cellules possèdent le même gène, mais une seule contient beaucoup de son ARNm. Quelle explication simple est compatible avec cette observation ?',
                        'choices' => [
                            ['choice_text' => 'Le gène est davantage transcrit dans la cellule qui contient beaucoup d’ARNm', 'is_correct' => true],
                            ['choice_text' => 'La cellule pauvre en ARNm n’a pas de chromosomes', 'is_correct' => false],
                            ['choice_text' => 'La cellule riche en ARNm a forcément deux codes génétiques', 'is_correct' => false],
                            ['choice_text' => 'L’ADN de la cellule pauvre en ARNm est toujours absent', 'is_correct' => false],
                        ],
                        'explanation' => 'Une différence d’abondance en ARNm peut s’expliquer par une différence de niveau de transcription ou par une différence de stabilité de l’ARN.'
                    ],
                    [
                        'question' => 'Un traitement bloque une protéine nécessaire à l’activation d’un gène. Quelle conséquence est la plus logique pour ce gène ?',
                        'choices' => [
                            ['choice_text' => 'Son expression peut diminuer si la protéine bloquée était un activateur', 'is_correct' => true],
                            ['choice_text' => 'Il est obligatoirement dupliqué', 'is_correct' => false],
                            ['choice_text' => 'Il est transformé en acide aminé', 'is_correct' => false],
                            ['choice_text' => 'Tous les autres gènes cessent immédiatement d’exister', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines protéines jouent le rôle de facteurs de transcription ou de régulateurs. Leur blocage peut donc réduire l’activation d’un gène ciblé.'
                    ],
                    [
                        'question' => 'Un étudiant conclut : « Si deux cellules ont le même ADN, elles doivent avoir exactement le même fonctionnement ». Quelle correction est la plus importante ?',
                        'choices' => [
                            ['choice_text' => 'Le fonctionnement dépend aussi des gènes exprimés et de l’état de la cellule', 'is_correct' => true],
                            ['choice_text' => 'L’ADN n’a aucun rôle dans le fonctionnement cellulaire', 'is_correct' => false],
                            ['choice_text' => 'Les protéines ne jouent aucun rôle dans les cellules', 'is_correct' => false],
                            ['choice_text' => 'Les cellules identiques en ADN sont toujours identiques en taille', 'is_correct' => false],
                        ],
                        'explanation' => 'Le même génome peut être utilisé de manière différente selon le type de cellule, les signaux reçus et les conditions du milieu. L’expression différentielle des gènes permet cette diversité.'
                    ],
                    [
                        'question' => 'Une cellule augmente la production d’une protéine uniquement lorsqu’un nutriment devient disponible. Quel avantage présente cette régulation ?',
                        'choices' => [
                            ['choice_text' => 'La cellule évite de produire inutilement une protéine dont elle n’a pas besoin', 'is_correct' => true],
                            ['choice_text' => 'La cellule supprime tous ses gènes non utilisés', 'is_correct' => false],
                            ['choice_text' => 'La cellule transforme le nutriment en chromosome', 'is_correct' => false],
                            ['choice_text' => 'La cellule arrête définitivement toute transcription', 'is_correct' => false],
                        ],
                        'explanation' => 'La régulation permet d’ajuster les dépenses et les activités de la cellule. Produire certaines protéines seulement lorsque c’est nécessaire peut économiser des ressources.'
                    ],
                ],
            ],
            [
                'title' => 'Biologie moléculaire en pratique',
                'description' => 'Appliquez les notions de base à des situations de laboratoire : ADN, PCR, électrophorèse et lecture simple de résultats.',
                'questions' => [
                    [
                        'question' => 'À quoi sert principalement la PCR en biologie moléculaire ?',
                        'choices' => [
                            ['choice_text' => 'À amplifier une région précise d’ADN', 'is_correct' => true],
                            ['choice_text' => 'À transformer directement l’ADN en protéines', 'is_correct' => false],
                            ['choice_text' => 'À détruire tous les chromosomes', 'is_correct' => false],
                            ['choice_text' => 'À mesurer uniquement la quantité de lipides', 'is_correct' => false],
                        ],
                        'explanation' => 'La PCR permet de produire un grand nombre de copies d’une séquence ciblée d’ADN. Elle est utile lorsque la quantité initiale est trop faible pour une analyse facile.'
                    ],
                    [
                        'question' => 'Dans une expérience de PCR, à quoi servent les amorces ?',
                        'choices' => [
                            ['choice_text' => 'À définir les limites de la région d’ADN qui sera amplifiée', 'is_correct' => true],
                            ['choice_text' => 'À remplacer les ribosomes', 'is_correct' => false],
                            ['choice_text' => 'À détruire les bases azotées', 'is_correct' => false],
                            ['choice_text' => 'À fabriquer directement des lipides', 'is_correct' => false],
                        ],
                        'explanation' => 'Les amorces sont de courtes séquences complémentaires des régions entourant la cible. Elles donnent au système un point de départ pour la synthèse des nouveaux brins.'
                    ],
                    [
                        'question' => 'Quel principe est utilisé en électrophorèse sur gel pour séparer des fragments d’ADN ?',
                        'choices' => [
                            ['choice_text' => 'Les fragments se déplacent différemment selon notamment leur taille', 'is_correct' => true],
                            ['choice_text' => 'Les fragments deviennent des protéines', 'is_correct' => false],
                            ['choice_text' => 'Les bases sont détruites par le courant', 'is_correct' => false],
                            ['choice_text' => 'Les chromosomes s’assemblent en lipides', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un gel, les fragments d’ADN migrent sous l’effet d’un champ électrique. À conditions comparables, les petits fragments se déplacent généralement plus loin que les grands.'
                    ],
                    [
                        'question' => 'Un gel montre deux bandes d’ADN, l’une plus basse que l’autre. La bande plus basse correspond généralement à :',
                        'choices' => [
                            ['choice_text' => 'Un fragment plus petit', 'is_correct' => true],
                            ['choice_text' => 'Un fragment nécessairement plus concentré', 'is_correct' => false],
                            ['choice_text' => 'Un fragment toujours plus ancien', 'is_correct' => false],
                            ['choice_text' => 'Un fragment constitué de protéines', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur un gel d’électrophorèse classique, les fragments plus petits migrent plus facilement à travers le réseau du gel et se retrouvent plus loin.'
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on souvent un marqueur de taille avec un gel d’ADN ?',
                        'choices' => [
                            ['choice_text' => 'Pour estimer la taille des fragments observés', 'is_correct' => true],
                            ['choice_text' => 'Pour transformer l’ADN en ARN', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer directement la masse du noyau', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les amorces de PCR', 'is_correct' => false],
                        ],
                        'explanation' => 'Le marqueur contient des fragments de tailles connues. En comparant la position des bandes expérimentales à celles du marqueur, on peut estimer leur taille.'
                    ],
                    [
                        'question' => 'Une PCR réalisée sur un échantillon donne une bande à la taille attendue. Quelle conclusion simple est raisonnable ?',
                        'choices' => [
                            ['choice_text' => 'La séquence ciblée a probablement été amplifiée', 'is_correct' => true],
                            ['choice_text' => 'Toutes les protéines de l’échantillon ont été amplifiées', 'is_correct' => false],
                            ['choice_text' => 'Le génome entier a forcément été copié en une seule bande', 'is_correct' => false],
                            ['choice_text' => 'L’échantillon ne contient jamais d’ADN non ciblé', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bande proche de la taille attendue indique que le fragment correspondant à la cible a probablement été amplifié. Une analyse complète peut nécessiter d’autres contrôles.'
                    ],
                    [
                        'question' => 'Un étudiant obtient une bande dans son échantillon mais aussi dans le contrôle négatif de PCR. Que doit-il envisager en priorité ?',
                        'choices' => [
                            ['choice_text' => 'Une contamination du contrôle ou des réactifs', 'is_correct' => true],
                            ['choice_text' => 'La preuve que toute la PCR est forcément correcte', 'is_correct' => false],
                            ['choice_text' => 'La disparition de tous les primers', 'is_correct' => false],
                            ['choice_text' => 'La conversion spontanée de l’ARN en protéine', 'is_correct' => false],
                        ],
                        'explanation' => 'Un contrôle négatif est censé ne pas produire la cible. Une bande dans ce contrôle peut indiquer une contamination ou un problème expérimental et réduit la confiance dans le résultat.'
                    ],
                    [
                        'question' => 'Une technicienne veut vérifier si deux échantillons possèdent un fragment d’ADN de même taille. Quelle méthode simple convient bien ?',
                        'choices' => [
                            ['choice_text' => 'Comparer leur migration sur un gel d’électrophorèse', 'is_correct' => true],
                            ['choice_text' => 'Observer uniquement la couleur des solutions', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la température de la pièce', 'is_correct' => false],
                            ['choice_text' => 'Comparer leur odeur', 'is_correct' => false],
                        ],
                        'explanation' => 'Des fragments de même taille migrent de façon comparable dans un même gel. La position des bandes permet donc une comparaison simple de taille.'
                    ],
                    [
                        'question' => 'Un échantillon produit une bande beaucoup plus petite que prévu après PCR. Quelle piste doit être examinée avant de conclure ?',
                        'choices' => [
                            ['choice_text' => 'La spécificité des amorces et les conditions de PCR', 'is_correct' => true],
                            ['choice_text' => 'La couleur du tube uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de mitochondries du chercheur', 'is_correct' => false],
                            ['choice_text' => 'La quantité de protéines dans le gel', 'is_correct' => false],
                        ],
                        'explanation' => 'Une taille inattendue peut résulter d’une amplification non spécifique, d’amorces mal conçues ou de conditions expérimentales inadaptées. Il faut vérifier ces éléments avant d’interpréter le résultat biologique.'
                    ],
                    [
                        'question' => 'Un échantillon donne deux bandes après PCR alors qu’une seule région était ciblée. Quelle explication simple faut-il envisager ?',
                        'choices' => [
                            ['choice_text' => 'Les amorces ont peut-être amplifié une seconde région de manière non spécifique', 'is_correct' => true],
                            ['choice_text' => 'La PCR a transformé une protéine en ADN', 'is_correct' => false],
                            ['choice_text' => 'Les deux bandes sont forcément le même fragment', 'is_correct' => false],
                            ['choice_text' => 'Le gel crée de nouveaux fragments inexistants dans l’échantillon', 'is_correct' => false],
                        ],
                        'explanation' => 'Plusieurs bandes peuvent apparaître lorsque les amorces reconnaissent plus d’une séquence ou lorsque les conditions de PCR favorisent des amplifications non spécifiques.'
                    ],
                ],
            ],
            [
                'title' => 'Applications intégrées de la biologie moléculaire',
                'description' => 'Mobilisez plusieurs notions ensemble pour interpréter des situations simples mêlant ADN, expression des gènes, mutations et méthodes de laboratoire.',
                'questions' => [
                    [
                        'question' => 'Une cellule doit produire une protéine particulière à partir d’un gène. Quelle étape doit précéder directement la traduction ?',
                        'choices' => [
                            ['choice_text' => 'La transcription de l’ADN en ARN messager', 'is_correct' => true],
                            ['choice_text' => 'La duplication de toutes les protéines', 'is_correct' => false],
                            ['choice_text' => 'La destruction du chromosome concerné', 'is_correct' => false],
                            ['choice_text' => 'La transformation du glucose en ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’expression classique d’un gène, l’ADN est d’abord transcrit en ARN messager. Cet ARNm peut ensuite être traduit par un ribosome.'
                    ],
                    [
                        'question' => 'Une maladie est liée à une mutation qui modifie la séquence d’une protéine. Quel enchaînement permet de relier la mutation au changement observé ?',
                        'choices' => [
                            ['choice_text' => 'Mutation de l’ADN → changement du message → modification possible de la protéine', 'is_correct' => true],
                            ['choice_text' => 'Mutation de l’ADN → disparition immédiate de tous les ribosomes', 'is_correct' => false],
                            ['choice_text' => 'Mutation de l’ADN → transformation directe en lipide', 'is_correct' => false],
                            ['choice_text' => 'Mutation de l’ADN → suppression automatique de tous les gènes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation peut modifier un codon ou la régulation du gène. Cela peut changer la protéine ou sa quantité, mais l’effet précis dépend de la mutation.'
                    ],
                    [
                        'question' => 'Un chercheur veut savoir si un gène est fortement exprimé dans deux tissus différents. Quelle mesure serait particulièrement informative ?',
                        'choices' => [
                            ['choice_text' => 'Comparer la quantité d’ARNm de ce gène dans les deux tissus', 'is_correct' => true],
                            ['choice_text' => 'Comparer uniquement la taille des cellules', 'is_correct' => false],
                            ['choice_text' => 'Compter toutes les protéines sans identifier leur fonction', 'is_correct' => false],
                            ['choice_text' => 'Mesurer seulement la quantité d’eau du tissu', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantité d’ARNm est un indicateur courant du niveau de transcription d’un gène. Elle permet une première comparaison de son expression entre deux tissus.'
                    ],
                    [
                        'question' => 'Une séquence d’ADN cible doit être analysée mais elle est présente en très faible quantité. Quel outil peut d’abord aider à en obtenir beaucoup de copies ?',
                        'choices' => [
                            ['choice_text' => 'La PCR', 'is_correct' => true],
                            ['choice_text' => 'La traduction seule', 'is_correct' => false],
                            ['choice_text' => 'La digestion par le ribosome', 'is_correct' => false],
                            ['choice_text' => 'La respiration cellulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La PCR amplifie une région ciblée d’ADN. On peut ensuite utiliser le produit amplifié pour diverses analyses moléculaires.'
                    ],
                    [
                        'question' => 'Deux individus présentent des versions différentes d’un même gène. Quelle possibilité est compatible avec cette observation ?',
                        'choices' => [
                            ['choice_text' => 'Les deux versions peuvent conduire à des protéines ou niveaux d’expression légèrement différents', 'is_correct' => true],
                            ['choice_text' => 'L’un des individus ne possède aucun ADN', 'is_correct' => false],
                            ['choice_text' => 'Les deux individus utilisent forcément des codes génétiques différents', 'is_correct' => false],
                            ['choice_text' => 'La variation implique toujours la disparition d’un chromosome', 'is_correct' => false],
                        ],
                        'explanation' => 'Des variantes d’un gène peuvent modifier une séquence protéique ou la quantité de produit fabriqué. L’effet dépend de la variation et du contexte biologique.'
                    ],
                    [
                        'question' => 'Dans une expérience, un gène est normalement transcrit mais ne l’est presque plus après blocage d’un facteur de transcription. Quelle interprétation est cohérente ?',
                        'choices' => [
                            ['choice_text' => 'Le facteur bloqué participait probablement à l’activation du gène', 'is_correct' => true],
                            ['choice_text' => 'Le facteur était forcément une molécule de glucose', 'is_correct' => false],
                            ['choice_text' => 'Le gène était entièrement transformé en protéine', 'is_correct' => false],
                            ['choice_text' => 'Le chromosome a nécessairement disparu', 'is_correct' => false],
                        ],
                        'explanation' => 'La diminution de transcription après le blocage du facteur suggère que ce facteur contribuait à activer ou maintenir l’expression du gène.'
                    ],
                    [
                        'question' => 'Un fragment PCR apparaît à la taille attendue chez un patient et chez un témoin. Que peut-on conclure avec prudence ?',
                        'choices' => [
                            ['choice_text' => 'La région ciblée a probablement été amplifiée dans les deux échantillons', 'is_correct' => true],
                            ['choice_text' => 'Les deux personnes ont nécessairement le même génome entier', 'is_correct' => false],
                            ['choice_text' => 'Aucune mutation ne peut exister dans cette région', 'is_correct' => false],
                            ['choice_text' => 'Toutes leurs protéines sont identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une même taille de fragment indique seulement que la région amplifiée est compatible avec la taille attendue. Elle ne suffit pas à démontrer que les séquences sont identiques base par base.'
                    ],
                    [
                        'question' => 'Une mutation change un codon en un autre codon qui code le même acide aminé. Une bande PCR de la bonne taille est observée. Pourquoi la mutation pourrait-elle passer inaperçue sur un simple gel ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le gel renseigne principalement sur la taille des fragments, pas sur chaque base', 'is_correct' => true],
                            ['choice_text' => 'Parce que les mutations ne touchent jamais l’ADN', 'is_correct' => false],
                            ['choice_text' => 'Parce que la PCR élimine toutes les mutations', 'is_correct' => false],
                            ['choice_text' => 'Parce que le gel mesure uniquement la quantité de protéines', 'is_correct' => false],
                        ],
                        'explanation' => 'Une substitution peut laisser la longueur du fragment inchangée. Un gel simple peut donc montrer une bande de même taille malgré une différence de séquence.'
                    ],
                    [
                        'question' => 'Une équipe veut démontrer qu’une différence observée entre deux protéines vient d’une variation dans un gène précis. Quelle démarche générale est la plus logique ?',
                        'choices' => [
                            ['choice_text' => 'Comparer la séquence du gène et relier la variation à la protéine produite', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement la température de conservation de l’échantillon', 'is_correct' => false],
                            ['choice_text' => 'Compter les membranes sans analyser l’ADN', 'is_correct' => false],
                            ['choice_text' => 'Supposer que toute différence de protéine vient nécessairement d’une mutation', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut relier les niveaux d’information : variation de l’ADN, effet possible sur l’ARN ou la protéine, puis fonction. Une simple corrélation ne suffit pas toujours à établir une causalité.'
                    ],
                    [
                        'question' => 'Une mutation ne change pas la taille d’un fragment d’ADN observé sur un gel, mais elle peut tout de même être réelle. Quelle méthode permettrait de rechercher directement la modification de séquence ?',
                        'choices' => [
                            ['choice_text' => 'Le séquençage de l’ADN', 'is_correct' => true],
                            ['choice_text' => 'La mesure de la température de l’échantillon', 'is_correct' => false],
                            ['choice_text' => 'Le simple comptage des ribosomes', 'is_correct' => false],
                            ['choice_text' => 'La coloration des lipides membranaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Un gel peut montrer des fragments de même taille malgré une différence de quelques bases. Le séquençage permet, lui, de déterminer directement l’ordre des nucléotides et donc de rechercher une modification précise.'
                    ],
                ],
            ],
        ];

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65],
            8 => ['duration' => 20, 'passing_score' => 60],
            9 => ['duration' => 25, 'passing_score' => 65],
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
