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
                'title' => "Introduction à la biologie moléculaire",
                'description' => "Découvrez les molécules fondamentales du vivant, le rôle de l’ADN et de l’ARN, ainsi que l’organisation générale de l’information génétique.",
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Dans une cellule, quelle molécule constitue principalement le support de l’information génétique ?",
                        'explanation' => "L’ADN stocke l’information génétique dans l’ordre de ses nucléotides. L’ATP transfère de l’énergie et les protéines assurent la plupart des fonctions de la cellule.",
                        'choices' => [
                            ['choice_text' => "L’ADN", 'is_correct' => true],
                            ['choice_text' => "L’ATP", 'is_correct' => false],
                            ['choice_text' => "Les protéines", 'is_correct' => false],
                            ['choice_text' => "Le glycogène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un nucléotide d’ADN contient trois éléments. Lesquels ?",
                        'explanation' => "Chaque nucléotide d’ADN associe un désoxyribose, un groupement phosphate et une base azotée. Les quatre bases de l’ADN sont A, T, C et G.",
                        'choices' => [
                            ['choice_text' => "Un acide aminé, un sucre et un phosphate", 'is_correct' => false],
                            ['choice_text' => "Un lipide, un phosphate et une base azotée", 'is_correct' => false],
                            ['choice_text' => "Un sucre, un phosphate et une base azotée", 'is_correct' => true],
                            ['choice_text' => "Un sucre, un acide gras et un acide aminé", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle base azotée est présente dans l’ARN à la place de la thymine ?",
                        'explanation' => "Dans l’ARN, l’uracile remplace la thymine de l’ADN. L’adénine, la cytosine et la guanine se retrouvent dans les deux acides nucléiques.",
                        'choices' => [
                            ['choice_text' => "La cytosine", 'is_correct' => false],
                            ['choice_text' => "L’uracile", 'is_correct' => true],
                            ['choice_text' => "La guanine", 'is_correct' => false],
                            ['choice_text' => "L’adénine", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les chercheurs décrivent l’ADN comme une molécule « double brin ». Que cela signifie-t-il ?",
                        'explanation' => "L’ADN forme une double hélice de deux brins complémentaires, dont les bases s’apparient de façon spécifique.",
                        'choices' => [
                            ['choice_text' => "Elle contient deux types de sucres différents dans chaque nucléotide", 'is_correct' => false],
                            ['choice_text' => "Elle possède deux noyaux dans la cellule", 'is_correct' => false],
                            ['choice_text' => "Elle compte deux chaînes complémentaires de nucléotides", 'is_correct' => true],
                            ['choice_text' => "Chacune de ses bases est faite de deux molécules", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle molécule contient du ribose et non du désoxyribose ?",
                        'explanation' => "Le sucre de l’ARN est le ribose ; celui de l’ADN est le désoxyribose, qui a un atome d’oxygène de moins.",
                        'choices' => [
                            ['choice_text' => "L’ADN", 'is_correct' => false],
                            ['choice_text' => "Les phospholipides", 'is_correct' => false],
                            ['choice_text' => "Les protéines", 'is_correct' => false],
                            ['choice_text' => "L’ARN", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une cellule fabrique une protéine à partir d’un gène. Quel est le rôle de l’ARN messager ?",
                        'explanation' => "L’ARN messager sert d’intermédiaire entre le gène et le ribosome : sa séquence est lue pour fixer l’ordre des acides aminés.",
                        'choices' => [
                            ['choice_text' => "Il fournit l’énergie de la synthèse", 'is_correct' => false],
                            ['choice_text' => "Il découpe la protéine en acides aminés", 'is_correct' => false],
                            ['choice_text' => "Il porte une copie du gène jusqu’au ribosome", 'is_correct' => true],
                            ['choice_text' => "Il remplace l’ADN dans le noyau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Où se trouve l’essentiel de l’ADN d’une cellule humaine ?",
                        'explanation' => "Chez l’humain, l’ADN est surtout dans le noyau, organisé en chromosomes ; une petite partie se trouve dans les mitochondries.",
                        'choices' => [
                            ['choice_text' => "Dans le noyau", 'is_correct' => true],
                            ['choice_text' => "Dans les ribosomes", 'is_correct' => false],
                            ['choice_text' => "Dans la membrane", 'is_correct' => false],
                            ['choice_text' => "Dans les lysosomes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux fragments d’ADN ont la même longueur mais des séquences différentes. Qu’est-ce que cela illustre ?",
                        'explanation' => "Deux fragments de même longueur peuvent porter des messages différents : c’est l’ordre des bases A, T, C et G qui code l’information.",
                        'choices' => [
                            ['choice_text' => "La longueur du fragment détermine l’information qu’il porte", 'is_correct' => false],
                            ['choice_text' => "Deux fragments de même longueur portent la même information", 'is_correct' => false],
                            ['choice_text' => "L’information dépend du nombre de ribosomes", 'is_correct' => false],
                            ['choice_text' => "L’information dépend de l’ordre des bases", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une étudiante affirme : « L’ADN et l’ARN sont deux protéines différentes ». Quelle correction faut-il lui apporter ?",
                        'explanation' => "L’ADN et l’ARN sont des acides nucléiques. Les protéines, elles, sont formées d’acides aminés.",
                        'choices' => [
                            ['choice_text' => "Ce sont des lipides formant la membrane de la cellule", 'is_correct' => false],
                            ['choice_text' => "Ce sont des acides nucléiques, pas des protéines", 'is_correct' => true],
                            ['choice_text' => "L’ADN est un sucre et l’ARN un lipide", 'is_correct' => false],
                            ['choice_text' => "L’ARN est une protéine, mais pas l’ADN", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une cellule contient beaucoup d’ADN, mais une partie seulement de ses gènes est active. Que peut-on en conclure ?",
                        'explanation' => "Une cellule n’utilise pas tous ses gènes en même temps : elle régule leur expression selon ses besoins.",
                        'choices' => [
                            ['choice_text' => "Les gènes inactifs ont été supprimés du génome", 'is_correct' => false],
                            ['choice_text' => "L’ADN actif se transforme en glucose", 'is_correct' => false],
                            ['choice_text' => "Chaque gène est traduit en permanence", 'is_correct' => false],
                            ['choice_text' => "Elle règle l’usage de ses gènes selon ses besoins", 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Structure de l’ADN et complémentarité",
                'description' => "Entraînez-vous à reconnaître les bases de l’ADN, les appariements complémentaires et les conséquences simples de cette organisation moléculaire.",
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Quelle paire de bases est complémentaire dans l’ADN ?",
                        'explanation' => "Dans l’ADN, l’adénine (A) s’apparie avec la thymine (T), et la cytosine (C) avec la guanine (G).",
                        'choices' => [
                            ['choice_text' => "A avec T", 'is_correct' => true],
                            ['choice_text' => "A avec C", 'is_correct' => false],
                            ['choice_text' => "G avec T", 'is_correct' => false],
                            ['choice_text' => "C avec T", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un brin d’ADN porte la séquence A-A-C-G. Quelle séquence trouve-t-on en face, sur l’autre brin ?",
                        'explanation' => "A s’apparie avec T et C avec G : face à A-A-C-G se trouve T-T-G-C.",
                        'choices' => [
                            ['choice_text' => "A-A-C-G", 'is_correct' => false],
                            ['choice_text' => "U-U-G-C", 'is_correct' => false],
                            ['choice_text' => "T-T-C-G", 'is_correct' => false],
                            ['choice_text' => "T-T-G-C", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Dans un brin d’ADN, quel élément forme le squelette avec le phosphate ?",
                        'explanation' => "Le squelette de chaque brin alterne désoxyribose et phosphate ; les bases sont accrochées sur le côté.",
                        'choices' => [
                            ['choice_text' => "La thymine", 'is_correct' => false],
                            ['choice_text' => "Un acide aminé", 'is_correct' => false],
                            ['choice_text' => "Le désoxyribose", 'is_correct' => true],
                            ['choice_text' => "Le glucose", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment la complémentarité des bases aide-t-elle à copier l’ADN ?",
                        'explanation' => "À la réplication, l’appariement spécifique permet d’ajouter le bon nucléotide face à chaque base du brin modèle.",
                        'choices' => [
                            ['choice_text' => "Elle supprime les erreurs de copie de l’ADN dès leur apparition", 'is_correct' => false],
                            ['choice_text' => "Chaque brin sert de modèle pour fabriquer son complément", 'is_correct' => true],
                            ['choice_text' => "Elle transforme chaque brin en protéine", 'is_correct' => false],
                            ['choice_text' => "Elle remplace les nucléotides par des acides aminés", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel type de liaison relie les bases complémentaires des deux brins ?",
                        'explanation' => "Les bases complémentaires s’attirent par des liaisons hydrogène, assez faibles pour que les brins puissent se séparer.",
                        'choices' => [
                            ['choice_text' => "Des liaisons hydrogène", 'is_correct' => true],
                            ['choice_text' => "Des liaisons peptidiques", 'is_correct' => false],
                            ['choice_text' => "Des liaisons covalentes entre les sucres", 'is_correct' => false],
                            ['choice_text' => "Des liaisons ioniques entre les phosphates", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un fragment d’ADN double brin compte 20 nucléotides en tout, dont 8 adénines. Combien contient-il de thymines ?",
                        'explanation' => "Dans un ADN double brin, chaque A est face à un T : 8 adénines impliquent 8 thymines.",
                        'choices' => [
                            ['choice_text' => "2", 'is_correct' => false],
                            ['choice_text' => "12", 'is_correct' => false],
                            ['choice_text' => "16", 'is_correct' => false],
                            ['choice_text' => "8", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Dans le modèle de la double hélice, que représentent les barreaux de l’échelle torsadée ?",
                        'explanation' => "Les montants de l’échelle sont les squelettes sucre-phosphate, et les barreaux sont les paires de bases.",
                        'choices' => [
                            ['choice_text' => "Des paires de sucres", 'is_correct' => false],
                            ['choice_text' => "Des paires de phosphates", 'is_correct' => false],
                            ['choice_text' => "Des paires d’acides aminés", 'is_correct' => false],
                            ['choice_text' => "Des paires de bases", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Pour le brin T-T-C-G, un élève écrit A-A-C-G comme complément. Quelle erreur a-t-il commise ?",
                        'explanation' => "Le complément de T-T-C-G est A-A-G-C : l’élève a bien apparié les deux premières bases, mais a recopié C-G au lieu d’écrire G-C.",
                        'choices' => [
                            ['choice_text' => "Il a recopié les deux dernières bases sans les complémenter", 'is_correct' => true],
                            ['choice_text' => "Il a utilisé l’uracile à la place de la thymine dans le brin", 'is_correct' => false],
                            ['choice_text' => "Il a apparié l’adénine avec la guanine au lieu de la thymine", 'is_correct' => false],
                            ['choice_text' => "Il a inversé l’ordre des quatre bases", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une chercheuse chauffe un échantillon d’ADN et ses deux brins se séparent. Comment nomme-t-on ce phénomène ?",
                        'explanation' => "La chaleur rompt les liaisons hydrogène entre les bases : les brins se séparent, c’est la dénaturation.",
                        'choices' => [
                            ['choice_text' => "La traduction de l’ADN", 'is_correct' => false],
                            ['choice_text' => "La dénaturation de l’ADN", 'is_correct' => true],
                            ['choice_text' => "La polymérisation des acides aminés", 'is_correct' => false],
                            ['choice_text' => "La condensation en chromosomes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un ADN double brin, 30 % des bases sont des cytosines. Quel pourcentage de guanines compte-t-il ?",
                        'explanation' => "La guanine s’apparie avec la cytosine, donc leurs proportions sont égales : 30 % de guanines.",
                        'choices' => [
                            ['choice_text' => "20 %", 'is_correct' => false],
                            ['choice_text' => "40 %", 'is_correct' => false],
                            ['choice_text' => "30 %", 'is_correct' => true],
                            ['choice_text' => "70 %", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Réplication de l’ADN",
                'description' => "Comprenez comment une cellule copie son ADN avant une division, en reliant complémentarité des bases et conservation de l’information.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "À quel moment du cycle cellulaire l’ADN est-il normalement répliqué avant la division ?",
                        'explanation' => "La phase S de l’interphase est consacrée à la réplication : la cellule dispose ainsi de deux copies de son ADN avant de se diviser.",
                        'choices' => [
                            ['choice_text' => "Pendant la phase G1", 'is_correct' => false],
                            ['choice_text' => "Pendant la phase G2", 'is_correct' => false],
                            ['choice_text' => "Pendant la mitose", 'is_correct' => false],
                            ['choice_text' => "Pendant la phase S", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quelle enzyme ouvre localement la double hélice d’ADN au début de la réplication ?",
                        'explanation' => "L’hélicase sépare les deux brins en ouvrant la double hélice ; d’autres enzymes ajoutent ensuite les nouveaux nucléotides.",
                        'choices' => [
                            ['choice_text' => "L’ADN ligase", 'is_correct' => false],
                            ['choice_text' => "L’hélicase", 'is_correct' => true],
                            ['choice_text' => "L’ARN polymérase", 'is_correct' => false],
                            ['choice_text' => "La protéase", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pour fabriquer un nouveau brin d’ADN, que suit l’enzyme ?",
                        'explanation' => "Le nouveau brin est construit base par base : A face à T, C face à G. Cela garantit une copie fidèle.",
                        'choices' => [
                            ['choice_text' => "La lecture directe des acides aminés", 'is_correct' => false],
                            ['choice_text' => "L’appariement complémentaire avec le brin modèle", 'is_correct' => true],
                            ['choice_text' => "Le choix des bases selon leur abondance dans la cellule", 'is_correct' => false],
                            ['choice_text' => "L’ordre des codons d’un ARN messager", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Après une réplication, chaque double hélice fille contient un brin ancien et un brin neuf. Comment nomme-t-on ce mode de copie ?",
                        'explanation' => "Chaque molécule fille garde un brin de la molécule mère : la réplication est dite semi-conservative.",
                        'choices' => [
                            ['choice_text' => "Conservatif", 'is_correct' => false],
                            ['choice_text' => "Dispersif", 'is_correct' => false],
                            ['choice_text' => "Semi-conservatif", 'is_correct' => true],
                            ['choice_text' => "Aléatoire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une portion du brin modèle contient A-G-C. Quels nucléotides doivent être ajoutés sur le nouveau brin ?",
                        'explanation' => "La complémentarité impose A→T, G→C et C→G. Le nouveau segment sera donc T-C-G.",
                        'choices' => [
                            ['choice_text' => "A-G-C", 'is_correct' => false],
                            ['choice_text' => "U-C-G", 'is_correct' => false],
                            ['choice_text' => "T-C-G", 'is_correct' => true],
                            ['choice_text' => "G-T-C", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le rôle de l’ADN polymérase pendant la réplication ?",
                        'explanation' => "L’ADN polymérase lit le brin modèle et ajoute les nucléotides complémentaires pour former le nouveau brin.",
                        'choices' => [
                            ['choice_text' => "Elle ajoute les nucléotides du nouveau brin", 'is_correct' => true],
                            ['choice_text' => "Elle ouvre la double hélice au début de la copie", 'is_correct' => false],
                            ['choice_text' => "Elle découpe l’ADN en fragments de taille égale", 'is_correct' => false],
                            ['choice_text' => "Elle assemble des acides aminés en protéines", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pendant la réplication, une erreur de copie n’est pas corrigée. Quelle conséquence est possible ?",
                        'explanation' => "Une erreur non corrigée reste inscrite dans l’ADN. Son effet dépend de l’endroit touché et de la nature du changement.",
                        'choices' => [
                            ['choice_text' => "La cellule devient aussitôt un virus", 'is_correct' => false],
                            ['choice_text' => "Les protéines de l’organisme sont détruites aussitôt", 'is_correct' => false],
                            ['choice_text' => "Le nombre de chromosomes double", 'is_correct' => false],
                            ['choice_text' => "La séquence d’ADN peut être modifiée durablement", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Combien de molécules d’ADN double brin obtient-on après une réplication à partir d’une seule molécule ?",
                        'explanation' => "Une molécule double brin donne deux molécules filles, chacune avec un brin ancien et un brin neuf, de même séquence que la mère.",
                        'choices' => [
                            ['choice_text' => "Deux, identiques à la molécule d’origine", 'is_correct' => true],
                            ['choice_text' => "Une, deux fois plus longue", 'is_correct' => false],
                            ['choice_text' => "Quatre, dont deux sans brin ancien", 'is_correct' => false],
                            ['choice_text' => "Deux, de séquences différentes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Maïssa pense que la cellule ne copie que les gènes dont elle a besoin tout de suite avant de se diviser. Que faut-il lui répondre ?",
                        'explanation' => "Chaque cellule fille doit recevoir tout le génome : la réplication copie donc toute la molécule, gènes actifs ou non.",
                        'choices' => [
                            ['choice_text' => "Seuls les gènes les plus longs sont copiés", 'is_correct' => false],
                            ['choice_text' => "Tout le génome est copié avant la division", 'is_correct' => true],
                            ['choice_text' => "La cellule copie l’ARN à la place de l’ADN", 'is_correct' => false],
                            ['choice_text' => "Les gènes inactifs sont copiés après la division", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une cellule doit se diviser. Quelle succession est cohérente ?",
                        'explanation' => "L’ADN est d’abord répliqué pour disposer de deux copies ; les chromosomes sont ensuite répartis entre les cellules filles.",
                        'choices' => [
                            ['choice_text' => "Destruction de l’ADN, puis synthèse d’un génome neuf après la division", 'is_correct' => false],
                            ['choice_text' => "Traduction des protéines, puis disparition de l’ADN", 'is_correct' => false],
                            ['choice_text' => "Réplication de l’ADN, puis séparation des chromosomes", 'is_correct' => true],
                            ['choice_text' => "Copie de l’ARN seul, puis remplacement des chromosomes", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Transcription et ARN",
                'description' => "Apprenez à distinguer ADN et ARN et à comprendre la transcription d’un gène en ARN messager.",
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Comment appelle-t-on la fabrication d’un ARN à partir d’un gène d’ADN ?",
                        'explanation' => "La transcription produit un ARN à partir d’une séquence d’ADN ; la traduction, elle, fabrique ensuite la protéine à partir de l’ARNm.",
                        'choices' => [
                            ['choice_text' => "La traduction", 'is_correct' => false],
                            ['choice_text' => "La réplication", 'is_correct' => false],
                            ['choice_text' => "La recombinaison", 'is_correct' => false],
                            ['choice_text' => "La transcription", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quelle enzyme réalise la synthèse de l’ARN lors de la transcription ?",
                        'explanation' => "L’ARN polymérase lit un brin d’ADN et assemble les nucléotides d’ARN complémentaires.",
                        'choices' => [
                            ['choice_text' => "L’ARN polymérase", 'is_correct' => true],
                            ['choice_text' => "L’ADN polymérase", 'is_correct' => false],
                            ['choice_text' => "L’ADN ligase", 'is_correct' => false],
                            ['choice_text' => "L’hélicase", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lors de la transcription, une adénine du brin modèle d’ADN est copiée. Avec quelle base de l’ARN s’apparie-t-elle ?",
                        'explanation' => "Dans l’ARN, l’uracile prend la place de la thymine : il s’apparie avec l’adénine du brin modèle.",
                        'choices' => [
                            ['choice_text' => "L’uracile", 'is_correct' => true],
                            ['choice_text' => "La thymine", 'is_correct' => false],
                            ['choice_text' => "La guanine", 'is_correct' => false],
                            ['choice_text' => "La cytosine", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle molécule est lue par le ribosome pour fabriquer une protéine ?",
                        'explanation' => "Le ribosome lit la séquence de l’ARN messager, groupe de trois nucléotides après groupe de trois.",
                        'choices' => [
                            ['choice_text' => "L’ADN du noyau", 'is_correct' => false],
                            ['choice_text' => "L’ARN de transfert", 'is_correct' => false],
                            ['choice_text' => "L’ARN messager", 'is_correct' => true],
                            ['choice_text' => "Le brin d’ADN modèle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le brin d’ADN modèle porte la séquence A-T-G-C. Quel ARN est produit ?",
                        'explanation' => "A donne U, T donne A, G donne C et C donne G : la séquence obtenue est U-A-C-G.",
                        'choices' => [
                            ['choice_text' => "U-A-C-G", 'is_correct' => true],
                            ['choice_text' => "T-A-C-G", 'is_correct' => false],
                            ['choice_text' => "A-U-G-C", 'is_correct' => false],
                            ['choice_text' => "U-A-G-C", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une cellule fabrique beaucoup d’ARNm à partir d’un même gène. Que peut-on en déduire ?",
                        'explanation' => "Beaucoup d’ARNm signifie une transcription intense : le gène est très exprimé à cet instant.",
                        'choices' => [
                            ['choice_text' => "Que l’ADN de ce gène a muté", 'is_correct' => false],
                            ['choice_text' => "Que la cellule n’a plus de ribosomes", 'is_correct' => false],
                            ['choice_text' => "Que les autres gènes sont aussi actifs que lui", 'is_correct' => false],
                            ['choice_text' => "Que ce gène est très actif en ce moment", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "L’ADN reste dans le noyau, mais les protéines se fabriquent dans le cytoplasme. Quel intermédiaire le permet ?",
                        'explanation' => "La cellule copie le gène en ARN messager, qui sort du noyau : l’ADN lui-même ne bouge pas.",
                        'choices' => [
                            ['choice_text' => "Le déplacement de l’ADN entier vers le cytoplasme", 'is_correct' => false],
                            ['choice_text' => "Une copie du gène sous forme d’ARN messager", 'is_correct' => true],
                            ['choice_text' => "Une protéine qui lit l’ADN depuis la membrane", 'is_correct' => false],
                            ['choice_text' => "Un ribosome qui entre dans le noyau pour lire l’ADN", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un médicament bloque l’ARN polymérase. Quelle conséquence est la plus directe ?",
                        'explanation' => "Sans ARN polymérase, la transcription ralentit et la cellule fabrique moins d’ARN.",
                        'choices' => [
                            ['choice_text' => "La réplication de l’ADN s’accélère", 'is_correct' => false],
                            ['choice_text' => "La production d’ARN diminue", 'is_correct' => true],
                            ['choice_text' => "Les ribosomes disparaissent", 'is_correct' => false],
                            ['choice_text' => "Les acides aminés se transforment en nucléotides", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un étudiant confond transcription et traduction. Quelle association corrige son erreur ?",
                        'explanation' => "La transcription copie un gène en ARN ; la traduction utilise ensuite l’ARNm pour assembler une chaîne d’acides aminés.",
                        'choices' => [
                            ['choice_text' => "Transcription : ARN → protéine ; traduction : ADN → ARN", 'is_correct' => false],
                            ['choice_text' => "Transcription : protéine → ARN ; traduction : ARN → ADN", 'is_correct' => false],
                            ['choice_text' => "Transcription : ADN → ARN ; traduction : ARN → protéine", 'is_correct' => true],
                            ['choice_text' => "Transcription : ADN → protéine ; traduction : ARN → ARN", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une cellule humaine, où a lieu surtout la transcription ?",
                        'explanation' => "La transcription a lieu surtout dans le noyau, là où se trouve l’ADN ; la traduction se fait ensuite dans le cytoplasme.",
                        'choices' => [
                            ['choice_text' => "Dans le ribosome", 'is_correct' => false],
                            ['choice_text' => "Dans la membrane plasmique", 'is_correct' => false],
                            ['choice_text' => "Dans le noyau", 'is_correct' => true],
                            ['choice_text' => "Dans les lysosomes", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Traduction et synthèse des protéines",
                'description' => "Maîtrisez les bases de la traduction : ribosomes, codons, ARN de transfert et ordre des acides aminés.",
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Dans quelle structure cellulaire la traduction des protéines a-t-elle lieu ?",
                        'explanation' => "Les ribosomes lisent l’ARN messager et assemblent les acides aminés dans l’ordre indiqué par les codons.",
                        'choices' => [
                            ['choice_text' => "Dans le noyau, sur l’ADN", 'is_correct' => false],
                            ['choice_text' => "Dans les lysosomes", 'is_correct' => false],
                            ['choice_text' => "Au niveau des ribosomes", 'is_correct' => true],
                            ['choice_text' => "Dans l’appareil de Golgi", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment appelle-t-on un groupe de trois nucléotides de l’ARNm qui correspond à un acide aminé ou à un signal ?",
                        'explanation' => "Un codon est formé de trois nucléotides successifs de l’ARNm ; le code génétique relie chaque codon à un acide aminé ou à un signal d’arrêt.",
                        'choices' => [
                            ['choice_text' => "Un codon", 'is_correct' => true],
                            ['choice_text' => "Un anticodon", 'is_correct' => false],
                            ['choice_text' => "Un intron", 'is_correct' => false],
                            ['choice_text' => "Un chromosome", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel ARN apporte les acides aminés au ribosome pendant la traduction ?",
                        'explanation' => "Chaque ARN de transfert porte un acide aminé et se fixe au codon qui lui correspond.",
                        'choices' => [
                            ['choice_text' => "L’ARN messager lu par le ribosome", 'is_correct' => false],
                            ['choice_text' => "L’ADN polymérase", 'is_correct' => false],
                            ['choice_text' => "L’ARN de transfert", 'is_correct' => true],
                            ['choice_text' => "L’ATP", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si l’ordre des codons change dans un ARNm, qu’est-ce qui peut changer dans la protéine ?",
                        'explanation' => "L’ordre des codons fixe l’ordre des acides aminés : modifier l’ARNm peut donc modifier la protéine.",
                        'choices' => [
                            ['choice_text' => "L’ordre de ses acides aminés", 'is_correct' => true],
                            ['choice_text' => "Le type de sucre de l’ADN", 'is_correct' => false],
                            ['choice_text' => "Le nombre de chromosomes de la cellule", 'is_correct' => false],
                            ['choice_text' => "Le nombre de ribosomes de la cellule", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le rôle du codon de départ, AUG ?",
                        'explanation' => "Le codon de départ est le repère qui permet au ribosome de commencer la lecture de l’ARNm au bon endroit.",
                        'choices' => [
                            ['choice_text' => "Terminer la synthèse de la protéine", 'is_correct' => false],
                            ['choice_text' => "Indiquer au ribosome où commencer la traduction", 'is_correct' => true],
                            ['choice_text' => "Copier le chromosome", 'is_correct' => false],
                            ['choice_text' => "Séparer l’ARNm de l’ADN", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel élément de l’ARN de transfert reconnaît un codon de l’ARNm ?",
                        'explanation' => "Chaque ARNt porte un anticodon complémentaire d’un codon de l’ARNm : c’est ce qui place le bon acide aminé.",
                        'choices' => [
                            ['choice_text' => "Le promoteur", 'is_correct' => false],
                            ['choice_text' => "L’anticodon", 'is_correct' => true],
                            ['choice_text' => "L’intron", 'is_correct' => false],
                            ['choice_text' => "Le gène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un fragment d’ARNm compte 12 nucléotides et ne contient aucun codon stop. Combien d’acides aminés code-t-il ?",
                        'explanation' => "Un codon compte 3 nucléotides : 12 ÷ 3 = 4 codons, donc 4 acides aminés.",
                        'choices' => [
                            ['choice_text' => "3", 'is_correct' => false],
                            ['choice_text' => "12", 'is_correct' => false],
                            ['choice_text' => "36", 'is_correct' => false],
                            ['choice_text' => "4", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un ribosome arrive sur un codon stop de l’ARNm. Que se passe-t-il ?",
                        'explanation' => "Un codon stop ne code aucun acide aminé : il signale la fin de la traduction.",
                        'choices' => [
                            ['choice_text' => "La traduction s’arrête et la protéine est libérée", 'is_correct' => true],
                            ['choice_text' => "Le ribosome ajoute un acide aminé supplémentaire", 'is_correct' => false],
                            ['choice_text' => "Le ribosome revient au codon de départ", 'is_correct' => false],
                            ['choice_text' => "L’ARNm se transforme en ADN", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un élève dit qu’un ribosome « invente » la séquence d’une protéine. Quelle formulation est plus juste ?",
                        'explanation' => "Le ribosome exécute le message de l’ARNm : les codons et les ARNt placent les bons acides aminés dans l’ordre.",
                        'choices' => [
                            ['choice_text' => "Le ribosome choisit les acides aminés selon sa propre séquence", 'is_correct' => false],
                            ['choice_text' => "Le ribosome copie la séquence de l’ADN directement", 'is_correct' => false],
                            ['choice_text' => "Le ribosome suit l’ordre des codons de l’ARNm", 'is_correct' => true],
                            ['choice_text' => "Le ribosome lit les lipides de la membrane", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un ARNm est lu avec un décalage d’un nucléotide dès le début. Pourquoi la protéine obtenue est-elle très différente ?",
                        'explanation' => "La lecture se fait par triplets : un décalage change tous les codons qui suivent, donc presque tous les acides aminés.",
                        'choices' => [
                            ['choice_text' => "Le ribosome modifie le code génétique pour cette lecture", 'is_correct' => false],
                            ['choice_text' => "Les nucléotides sont remplacés par des acides aminés", 'is_correct' => false],
                            ['choice_text' => "L’ARNm est remplacé par de l’ADN", 'is_correct' => false],
                            ['choice_text' => "Tous les groupes de trois nucléotides sont lus autrement", 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Du gène à la protéine",
                'description' => "Reliez ADN, gène, ARN et protéine dans des situations simples et entraînez-vous à suivre le chemin de l’information génétique.",
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Quelle suite représente correctement le flux classique de l’information génétique ?",
                        'explanation' => "Dans le modèle classique, l’ADN est transcrit en ARN, puis l’ARNm est traduit en protéine.",
                        'choices' => [
                            ['choice_text' => "ADN → ARN → protéine", 'is_correct' => true],
                            ['choice_text' => "Protéine → ARN → ADN", 'is_correct' => false],
                            ['choice_text' => "ARN → ADN → protéine", 'is_correct' => false],
                            ['choice_text' => "ADN → protéine → ARN", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment définir simplement un gène ?",
                        'explanation' => "Un gène est une région d’ADN qui renseigne la fabrication d’un produit fonctionnel, le plus souvent une protéine.",
                        'choices' => [
                            ['choice_text' => "Une enzyme qui copie l’ADN", 'is_correct' => false],
                            ['choice_text' => "Une portion d’ADN qui renseigne un produit fonctionnel", 'is_correct' => true],
                            ['choice_text' => "Un chromosome entier contenant tout l’ADN de la cellule", 'is_correct' => false],
                            ['choice_text' => "Un ARN qui sort du noyau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une mutation remplace une base dans la partie codante d’un gène. Que peut-il arriver ?",
                        'explanation' => "Une base changée peut modifier un codon et donc un acide aminé, mais pas toujours.",
                        'choices' => [
                            ['choice_text' => "Tout l’ADN est remplacé par de l’ARN", 'is_correct' => false],
                            ['choice_text' => "La protéine produite peut être modifiée", 'is_correct' => true],
                            ['choice_text' => "Un nouveau chromosome apparaît", 'is_correct' => false],
                            ['choice_text' => "La cellule fabrique un autre type de molécule que les protéines", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Certaines zones d’ADN non codantes contrôlent l’activité d’un gène. Que peut provoquer une mutation dans l’une d’elles ?",
                        'explanation' => "Une zone de contrôle règle l’activité du gène : si elle est modifiée, la transcription peut augmenter ou diminuer.",
                        'choices' => [
                            ['choice_text' => "Un changement de la quantité d’ARNm produite", 'is_correct' => true],
                            ['choice_text' => "La transformation du gène en protéine", 'is_correct' => false],
                            ['choice_text' => "Le remplacement du gène par un autre chromosome", 'is_correct' => false],
                            ['choice_text' => "L’arrêt de la réplication de tout le génome", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Avec AUG = méthionine et GCU = alanine, quelle séquence protéique code l’ARNm AUG-GCU ?",
                        'explanation' => "Le ribosome lit les codons dans l’ordre : AUG donne la méthionine, puis GCU donne l’alanine.",
                        'choices' => [
                            ['choice_text' => "Alanine, puis méthionine", 'is_correct' => false],
                            ['choice_text' => "Méthionine, sans alanine", 'is_correct' => false],
                            ['choice_text' => "Méthionine, puis alanine", 'is_correct' => true],
                            ['choice_text' => "Alanine, sans méthionine", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Parmi ces molécules, laquelle est le produit final de l’expression d’un gène codant ?",
                        'explanation' => "Un gène codant est transcrit en ARNm puis traduit : son produit final est une protéine.",
                        'choices' => [
                            ['choice_text' => "Un acide gras", 'is_correct' => false],
                            ['choice_text' => "Un sucre simple", 'is_correct' => false],
                            ['choice_text' => "Un nucléotide", 'is_correct' => false],
                            ['choice_text' => "Une protéine", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une mutation transforme un codon en codon stop, très tôt dans le gène. Que devient la protéine ?",
                        'explanation' => "La traduction s’arrête au codon stop : la protéine est tronquée et risque de perdre sa fonction.",
                        'choices' => [
                            ['choice_text' => "Elle est plus longue que prévu", 'is_correct' => false],
                            ['choice_text' => "Elle est identique à l’originale", 'is_correct' => false],
                            ['choice_text' => "Elle est plus courte que prévu", 'is_correct' => true],
                            ['choice_text' => "Elle devient un ARN", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un étudiant pense que toute modification d’une base change l’acide aminé correspondant. Quelle information montre que c’est inexact ?",
                        'explanation' => "Le code génétique est redondant : une mutation peut donner un codon synonyme et rester sans effet sur la protéine.",
                        'choices' => [
                            ['choice_text' => "Plusieurs codons peuvent coder le même acide aminé", 'is_correct' => true],
                            ['choice_text' => "Un codon peut coder plusieurs acides aminés à la fois", 'is_correct' => false],
                            ['choice_text' => "Les acides aminés ne dépendent pas de l’ARNm", 'is_correct' => false],
                            ['choice_text' => "Les mutations sont réparées avant la traduction", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une hormone déclenche la production d’une enzyme dans une cellule. Quel enchaînement est cohérent ?",
                        'explanation' => "Le signal active un gène ; il est transcrit en ARNm, puis traduit en enzyme.",
                        'choices' => [
                            ['choice_text' => "Destruction de l’ADN, puis apparition de l’enzyme", 'is_correct' => false],
                            ['choice_text' => "Transformation du glucose en protéine, puis lecture du gène", 'is_correct' => false],
                            ['choice_text' => "Activation d’un gène, transcription, puis traduction", 'is_correct' => true],
                            ['choice_text' => "Remplacement des ribosomes par des chromosomes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le brin modèle d’un gène porte T-A-C. Quel codon est transcrit sur l’ARNm ?",
                        'explanation' => "T donne A, A donne U et C donne G : le brin modèle T-A-C donne A-U-G, le codon de départ.",
                        'choices' => [
                            ['choice_text' => "T-A-C", 'is_correct' => false],
                            ['choice_text' => "U-A-C", 'is_correct' => false],
                            ['choice_text' => "A-T-G", 'is_correct' => false],
                            ['choice_text' => "A-U-G", 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Mutations et expression génétique",
                'description' => "Identifiez les effets possibles des mutations et comprenez que toutes les modifications de l’ADN n’ont pas le même impact.",
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => "Comment définir simplement une mutation ?",
                        'explanation' => "Une mutation est un changement de la séquence d’ADN ; ses effets peuvent être neutres, utiles ou nuisibles selon le contexte.",
                        'choices' => [
                            ['choice_text' => "Une modification durable de la séquence d’ADN", 'is_correct' => true],
                            ['choice_text' => "Un changement temporaire de l’activité d’un gène", 'is_correct' => false],
                            ['choice_text' => "Une erreur de lecture du ribosome sur l’ARNm", 'is_correct' => false],
                            ['choice_text' => "Une division anormale de la cellule", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment appelle-t-on la mutation qui remplace une base par une autre ?",
                        'explanation' => "Dans une substitution, un nucléotide est remplacé par un autre, sans que la longueur du gène change.",
                        'choices' => [
                            ['choice_text' => "Une insertion", 'is_correct' => false],
                            ['choice_text' => "Une substitution", 'is_correct' => true],
                            ['choice_text' => "Une délétion", 'is_correct' => false],
                            ['choice_text' => "Une réplication", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une mutation change un codon, mais l’acide aminé codé reste le même. De quelle mutation s’agit-il ?",
                        'explanation' => "Plusieurs codons codent le même acide aminé : la protéine reste identique, la mutation est silencieuse.",
                        'choices' => [
                            ['choice_text' => "D’une mutation silencieuse", 'is_correct' => true],
                            ['choice_text' => "D’une mutation faux-sens", 'is_correct' => false],
                            ['choice_text' => "D’une mutation non-sens", 'is_correct' => false],
                            ['choice_text' => "D’une insertion", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un nucléotide disparaît au milieu de la partie codante d’un gène. Quel effet est le plus probable sur les codons suivants ?",
                        'explanation' => "La lecture se fait par groupes de trois : perdre un nucléotide décale tout ce qui suit.",
                        'choices' => [
                            ['choice_text' => "Ils ne changent pas, seuls les gènes voisins sont touchés", 'is_correct' => false],
                            ['choice_text' => "Ils sont lus deux fois par le ribosome", 'is_correct' => false],
                            ['choice_text' => "Ils sont transformés en ADN", 'is_correct' => false],
                            ['choice_text' => "Ils sont tous décalés et lus autrement", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une substitution remplace un acide aminé par un autre dans une protéine. Comment nomme-t-on cette mutation ?",
                        'explanation' => "Quand la substitution change l’acide aminé, on parle de mutation faux-sens.",
                        'choices' => [
                            ['choice_text' => "Une mutation silencieuse", 'is_correct' => false],
                            ['choice_text' => "Une mutation non-sens", 'is_correct' => false],
                            ['choice_text' => "Une mutation faux-sens", 'is_correct' => true],
                            ['choice_text' => "Une délétion", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les UV du soleil peuvent abîmer l’ADN de la peau. Comment appelle-t-on un agent qui augmente le risque de mutation ?",
                        'explanation' => "Un mutagène, comme les UV ou certains produits chimiques, augmente la fréquence des mutations.",
                        'choices' => [
                            ['choice_text' => "Un agent catalytique", 'is_correct' => false],
                            ['choice_text' => "Un agent mutagène", 'is_correct' => true],
                            ['choice_text' => "Un agent codant", 'is_correct' => false],
                            ['choice_text' => "Un agent traducteur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux frères portent des versions légèrement différentes d’un même gène et ont une caractéristique différente. Quelle idée cela illustre-t-il ?",
                        'explanation' => "Des variantes d’un gène peuvent donner des protéines légèrement différentes ou en quantité différente.",
                        'choices' => [
                            ['choice_text' => "Un gène n’a qu’une seule séquence possible dans une espèce", 'is_correct' => false],
                            ['choice_text' => "Les caractères ne dépendent pas des gènes", 'is_correct' => false],
                            ['choice_text' => "Un gène peut exister en variantes aux effets différents", 'is_correct' => true],
                            ['choice_text' => "Les mutations ne touchent que les virus", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Beaucoup de mutations passent inaperçues. Qu’est-ce qui l’explique ?",
                        'explanation' => "L’effet d’une mutation dépend de sa position et du rôle du gène : beaucoup restent neutres.",
                        'choices' => [
                            ['choice_text' => "Elles peuvent n’avoir aucun effet sur la protéine", 'is_correct' => true],
                            ['choice_text' => "Les mutations sont éliminées dès leur apparition", 'is_correct' => false],
                            ['choice_text' => "Les cellules n’utilisent pas leur ADN", 'is_correct' => false],
                            ['choice_text' => "Une mutation transforme un gène en hormone circulante", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La drépanocytose vient d’un seul acide aminé changé dans l’hémoglobine. Que montre cet exemple ?",
                        'explanation' => "Le remplacement d’une seule base dans le gène de l’hémoglobine change un acide aminé : une petite mutation peut avoir de grands effets.",
                        'choices' => [
                            ['choice_text' => "Une mutation ne peut pas toucher les protéines", 'is_correct' => false],
                            ['choice_text' => "Les mutations n’ont d’effet que sur les chromosomes entiers", 'is_correct' => false],
                            ['choice_text' => "Une substitution ne change rien à l’hémoglobine", 'is_correct' => false],
                            ['choice_text' => "Un petit changement d’ADN peut changer une protéine", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quelle mutation correspond à la perte d’un ou plusieurs nucléotides ?",
                        'explanation' => "Dans une délétion, un ou plusieurs nucléotides sont perdus ; dans une insertion, ils sont ajoutés.",
                        'choices' => [
                            ['choice_text' => "Une insertion", 'is_correct' => false],
                            ['choice_text' => "Une délétion", 'is_correct' => true],
                            ['choice_text' => "Une substitution", 'is_correct' => false],
                            ['choice_text' => "Une duplication", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Régulation de l’expression des gènes",
                'description' => "Comprenez pourquoi les cellules n’expriment pas tous leurs gènes de la même manière et comment l’environnement peut influencer cette expression.",
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => "Les cellules d’un même organisme ne fabriquent pas toutes les mêmes protéines. Qu’est-ce qui l’explique ?",
                        'explanation' => "Les cellules d’un organisme partagent le même génome, mais chaque type active des gènes différents selon sa fonction.",
                        'choices' => [
                            ['choice_text' => "Elles n’expriment pas les mêmes gènes, ou pas autant", 'is_correct' => true],
                            ['choice_text' => "Elles ont un ADN différent d’un tissu à l’autre", 'is_correct' => false],
                            ['choice_text' => "Seules certaines cellules ont des ribosomes", 'is_correct' => false],
                            ['choice_text' => "Le code génétique change d’un tissu à l’autre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment appelle-t-on l’utilisation d’un gène pour produire un ARN, puis une protéine ?",
                        'explanation' => "L’expression d’un gène désigne l’utilisation de son information pour fabriquer un ARN et, souvent, une protéine.",
                        'choices' => [
                            ['choice_text' => "La mutation du gène", 'is_correct' => false],
                            ['choice_text' => "La réplication du gène", 'is_correct' => false],
                            ['choice_text' => "La délétion du gène", 'is_correct' => false],
                            ['choice_text' => "L’expression du gène", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Qu’appelle-t-on un facteur de transcription ?",
                        'explanation' => "Un facteur de transcription se fixe près d’un gène et en augmente ou en réduit la transcription.",
                        'choices' => [
                            ['choice_text' => "Une protéine qui active ou réprime un gène", 'is_correct' => true],
                            ['choice_text' => "Une enzyme qui copie l’ADN", 'is_correct' => false],
                            ['choice_text' => "Un ARN qui apporte les acides aminés", 'is_correct' => false],
                            ['choice_text' => "Un organite qui fabrique des ARN", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel événement peut contribuer à augmenter la production d’une protéine ?",
                        'explanation' => "Plus de transcription donne plus d’ARNm, donc davantage de protéine après traduction.",
                        'choices' => [
                            ['choice_text' => "Une transcription plus active du gène", 'is_correct' => true],
                            ['choice_text' => "Une destruction rapide des ribosomes", 'is_correct' => false],
                            ['choice_text' => "Une baisse du nombre d’ARNm produits", 'is_correct' => false],
                            ['choice_text' => "Un manque d’acides aminés dans la cellule", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une cellule reçoit un signal qui doit lui faire fabriquer vite une enzyme. Comment la régulation des gènes l’aide-t-elle ?",
                        'explanation' => "En augmentant ou en diminuant l’expression de certains gènes, la cellule s’adapte à son environnement.",
                        'choices' => [
                            ['choice_text' => "Elle bloque toute réponse de la cellule", 'is_correct' => false],
                            ['choice_text' => "Elle transforme le signal en chromosome", 'is_correct' => false],
                            ['choice_text' => "Elle remplace les enzymes par de l’ADN", 'is_correct' => false],
                            ['choice_text' => "Elle ajuste la production de protéines aux besoins", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quelle observation montre qu’un gène est exprimé dans une cellule ?",
                        'explanation' => "L’ADN d’un gène est présent dans toutes les cellules ; un gène est exprimé quand on trouve son ARNm ou sa protéine.",
                        'choices' => [
                            ['choice_text' => "On détecte son ADN", 'is_correct' => false],
                            ['choice_text' => "On détecte du glucose", 'is_correct' => false],
                            ['choice_text' => "On détecte son ARNm ou sa protéine", 'is_correct' => true],
                            ['choice_text' => "On compte ses chromosomes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un même gène est présent dans les cellules A et B. A contient beaucoup de son ARNm, B presque aucun. Que peut-on dire ?",
                        'explanation' => "Plus d’ARNm indique une transcription plus active : le gène est davantage exprimé dans A.",
                        'choices' => [
                            ['choice_text' => "B n’a pas de chromosomes", 'is_correct' => false],
                            ['choice_text' => "A possède deux codes génétiques", 'is_correct' => false],
                            ['choice_text' => "Le gène est bien plus transcrit dans A que dans B", 'is_correct' => true],
                            ['choice_text' => "Le gène est absent de l’ADN de B", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un traitement bloque un facteur de transcription qui active le gène G. Que devient l’expression de G ?",
                        'explanation' => "Sans son activateur, le gène G est moins transcrit : son expression diminue.",
                        'choices' => [
                            ['choice_text' => "Elle augmente", 'is_correct' => false],
                            ['choice_text' => "Elle diminue", 'is_correct' => true],
                            ['choice_text' => "Elle ne change pas", 'is_correct' => false],
                            ['choice_text' => "G est supprimé du chromosome", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une cellule de la peau exposée au soleil produit davantage de mélanine. Quel mécanisme peut l’expliquer ?",
                        'explanation' => "Des signaux liés à l’exposition au soleil activent des gènes qui commandent la fabrication de mélanine.",
                        'choices' => [
                            ['choice_text' => "L’apparition d’un nouvel ADN dans la cellule", 'is_correct' => false],
                            ['choice_text' => "L’activation de gènes de la pigmentation par des signaux", 'is_correct' => true],
                            ['choice_text' => "Le remplacement des ribosomes", 'is_correct' => false],
                            ['choice_text' => "La transformation des UV en protéines", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une cellule ne fabrique une enzyme digestive que lorsqu’un nutriment est présent. Quel est l’avantage de ce fonctionnement ?",
                        'explanation' => "Produire une protéine seulement quand elle est utile permet à la cellule d’économiser ses ressources.",
                        'choices' => [
                            ['choice_text' => "Elle supprime ses gènes inutilisés", 'is_correct' => false],
                            ['choice_text' => "Elle arrête toute transcription pour de bon", 'is_correct' => false],
                            ['choice_text' => "Elle évite de produire une protéine inutile", 'is_correct' => true],
                            ['choice_text' => "Elle transforme le nutriment en chromosome", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Biologie moléculaire en pratique",
                'description' => "Appliquez les notions de base à des situations de laboratoire : ADN, PCR, électrophorèse et lecture simple de résultats.",
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Quel est l’objectif principal d’une PCR ?",
                        'explanation' => "La PCR produit un grand nombre de copies d’une séquence ciblée, utile quand la quantité de départ est trop faible.",
                        'choices' => [
                            ['choice_text' => "Copier massivement une région précise d’ADN", 'is_correct' => true],
                            ['choice_text' => "Lire directement la séquence d’un gène", 'is_correct' => false],
                            ['choice_text' => "Séparer des fragments d’ADN selon leur taille", 'is_correct' => false],
                            ['choice_text' => "Transformer l’ADN en protéine", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une PCR, à quoi servent les amorces ?",
                        'explanation' => "Les amorces sont de courtes séquences complémentaires des deux extrémités de la cible ; elles donnent le point de départ de la copie.",
                        'choices' => [
                            ['choice_text' => "Elles découpent l’ADN en petits morceaux", 'is_correct' => false],
                            ['choice_text' => "Elles délimitent la région d’ADN à copier", 'is_correct' => true],
                            ['choice_text' => "Elles apportent l’énergie à la réaction", 'is_correct' => false],
                            ['choice_text' => "Elles transforment l’ARN en protéine", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur un gel d’électrophorèse, des fragments d’ADN migrent sous l’effet d’un courant électrique. Qu’est-ce qui les sépare ?",
                        'explanation' => "Dans le gel, les petits fragments se faufilent plus facilement : ils vont plus loin que les grands.",
                        'choices' => [
                            ['choice_text' => "Leur taille : les grands avancent plus vite", 'is_correct' => false],
                            ['choice_text' => "Leur couleur : les plus foncés avancent plus loin", 'is_correct' => false],
                            ['choice_text' => "Leur charge : seuls les fragments positifs migrent", 'is_correct' => false],
                            ['choice_text' => "Leur taille : les petits avancent plus vite", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Sur un gel, la bande B est plus basse que la bande A. Que peut-on dire ?",
                        'explanation' => "Les petits fragments migrent plus loin : une bande plus basse correspond à un fragment plus petit.",
                        'choices' => [
                            ['choice_text' => "Le fragment B est plus grand que le fragment A", 'is_correct' => false],
                            ['choice_text' => "Le fragment B est plus concentré que le fragment A", 'is_correct' => false],
                            ['choice_text' => "Le fragment B est constitué de protéines", 'is_correct' => false],
                            ['choice_text' => "Le fragment B est plus petit que le fragment A", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "À quoi sert un marqueur de taille déposé sur le gel ?",
                        'explanation' => "Le marqueur contient des fragments de tailles connues : on compare les bandes de l’échantillon aux siennes.",
                        'choices' => [
                            ['choice_text' => "À fournir les amorces de la PCR", 'is_correct' => false],
                            ['choice_text' => "À estimer la taille des fragments observés", 'is_correct' => true],
                            ['choice_text' => "À augmenter la quantité d’ADN déposé", 'is_correct' => false],
                            ['choice_text' => "À mesurer la température du gel", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Après une PCR, Salma observe une bande à la taille attendue. Quelle conclusion est raisonnable ?",
                        'explanation' => "Une bande à la taille attendue suggère que la cible a été amplifiée ; d’autres contrôles peuvent encore être nécessaires.",
                        'choices' => [
                            ['choice_text' => "Le génome entier a été copié en une seule bande", 'is_correct' => false],
                            ['choice_text' => "Les protéines de l’échantillon ont été amplifiées", 'is_correct' => false],
                            ['choice_text' => "La région ciblée a probablement été amplifiée", 'is_correct' => true],
                            ['choice_text' => "L’échantillon ne contient pas d’autre ADN", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un tube témoin sans ADN, une bande apparaît après la PCR. Que faut-il envisager ?",
                        'explanation' => "Un tube sans ADN ne devrait donner aucune bande : une bande signale en général une contamination.",
                        'choices' => [
                            ['choice_text' => "Une contamination d’un réactif ou du matériel", 'is_correct' => true],
                            ['choice_text' => "Que la PCR a parfaitement fonctionné", 'is_correct' => false],
                            ['choice_text' => "Que les amorces ont disparu", 'is_correct' => false],
                            ['choice_text' => "Que l’ARN s’est transformé en protéine", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment comparer la taille d’un fragment d’ADN dans deux échantillons ?",
                        'explanation' => "Des fragments de même taille migrent de la même façon dans un même gel : leurs bandes sont alignées.",
                        'choices' => [
                            ['choice_text' => "Mesurer leur concentration avec un spectrophotomètre", 'is_correct' => false],
                            ['choice_text' => "Les déposer sur un même gel et comparer les bandes", 'is_correct' => true],
                            ['choice_text' => "Compter les cellules dans chaque tube", 'is_correct' => false],
                            ['choice_text' => "Mesurer le pH des deux échantillons", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une PCR donne une bande beaucoup plus petite que prévu. Que vérifier en premier ?",
                        'explanation' => "Une taille inattendue vient souvent d’amorces peu spécifiques ou de conditions de PCR mal réglées.",
                        'choices' => [
                            ['choice_text' => "La quantité de marqueur de taille déposée", 'is_correct' => false],
                            ['choice_text' => "La couleur du colorant de charge", 'is_correct' => false],
                            ['choice_text' => "Les amorces et les conditions de la réaction", 'is_correct' => true],
                            ['choice_text' => "Le nombre de puits du gel", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une PCR censée amplifier une seule région donne deux bandes. Quelle explication est la plus simple ?",
                        'explanation' => "Des amorces qui reconnaissent une deuxième séquence peuvent amplifier un fragment supplémentaire.",
                        'choices' => [
                            ['choice_text' => "Les deux bandes sont le même fragment", 'is_correct' => false],
                            ['choice_text' => "Le gel a créé de nouveaux fragments", 'is_correct' => false],
                            ['choice_text' => "La PCR a transformé une protéine en ADN", 'is_correct' => false],
                            ['choice_text' => "Les amorces ont aussi amplifié une autre région", 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Applications intégrées de la biologie moléculaire",
                'description' => "Mobilisez plusieurs notions ensemble pour interpréter des situations simples mêlant ADN, expression des gènes, mutations et méthodes de laboratoire.",
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => "Pour fabriquer une protéine à partir d’un gène, quelle étape précède directement la traduction ?",
                        'explanation' => "L’ADN est d’abord transcrit en ARN messager ; ce dernier est ensuite traduit par un ribosome.",
                        'choices' => [
                            ['choice_text' => "La réplication de l’ADN", 'is_correct' => false],
                            ['choice_text' => "La transcription du gène en ARNm", 'is_correct' => true],
                            ['choice_text' => "La dénaturation de l’ADN", 'is_correct' => false],
                            ['choice_text' => "La mutation du gène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une maladie est liée à une mutation qui modifie une protéine. Quel enchaînement relie la mutation à la maladie ?",
                        'explanation' => "La mutation touche d’abord l’ADN ; l’ARNm copié porte le changement, qui peut modifier la protéine fabriquée.",
                        'choices' => [
                            ['choice_text' => "Mutation de la protéine, ARNm modifié, ADN changé", 'is_correct' => false],
                            ['choice_text' => "Mutation de l’ADN, ARNm modifié, protéine changée", 'is_correct' => true],
                            ['choice_text' => "Mutation de l’ARNm, ADN modifié, protéine intacte", 'is_correct' => false],
                            ['choice_text' => "Mutation de l’ADN, ribosome supprimé, protéine intacte", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un chercheur veut savoir si un gène est plus exprimé dans le foie que dans le muscle. Que mesure-t-il ?",
                        'explanation' => "La quantité d’ARNm indique l’intensité de la transcription : c’est un bon indicateur de l’expression du gène.",
                        'choices' => [
                            ['choice_text' => "La quantité d’ADN du gène dans chaque tissu", 'is_correct' => false],
                            ['choice_text' => "La taille des cellules des deux tissus", 'is_correct' => false],
                            ['choice_text' => "La quantité d’ARNm de ce gène dans chaque tissu", 'is_correct' => true],
                            ['choice_text' => "Le poids des deux tissus", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un échantillon contient très peu d’une séquence d’ADN à analyser. Quelle technique permet d’en obtenir beaucoup de copies ?",
                        'explanation' => "La PCR amplifie une région ciblée d’ADN, qu’on peut ensuite analyser par d’autres méthodes.",
                        'choices' => [
                            ['choice_text' => "L’électrophorèse", 'is_correct' => false],
                            ['choice_text' => "La traduction", 'is_correct' => false],
                            ['choice_text' => "La PCR", 'is_correct' => true],
                            ['choice_text' => "La transcription", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un test génétique compare un gène chez un patient et chez un témoin par séquençage. Que cherche-t-on ?",
                        'explanation' => "Le séquençage donne l’ordre des bases : on compare les deux séquences pour repérer une éventuelle mutation.",
                        'choices' => [
                            ['choice_text' => "Des différences de taille des cellules", 'is_correct' => false],
                            ['choice_text' => "Des différences de quantité de protéines", 'is_correct' => false],
                            ['choice_text' => "Des différences de température", 'is_correct' => false],
                            ['choice_text' => "Des différences de séquence entre les deux", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Lisa a amplifié un fragment de 500 paires de bases. Sur le gel, le marqueur a des bandes à 300, 500 et 700 paires de bases. Où attend-elle sa bande ?",
                        'explanation' => "Un fragment de 500 paires de bases migre comme la bande de 500 du marqueur.",
                        'choices' => [
                            ['choice_text' => "Au niveau de la bande de 500 du marqueur", 'is_correct' => true],
                            ['choice_text' => "Au-dessus de la bande de 700", 'is_correct' => false],
                            ['choice_text' => "En dessous de la bande de 300", 'is_correct' => false],
                            ['choice_text' => "Entre les bandes de 300 et 500", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un fragment PCR a la taille attendue chez un patient et chez un témoin. Que peut-on conclure avec prudence ?",
                        'explanation' => "Même taille ne veut pas dire même séquence : on sait seulement que la région a été amplifiée.",
                        'choices' => [
                            ['choice_text' => "La cible a probablement été amplifiée dans les deux", 'is_correct' => true],
                            ['choice_text' => "Les deux personnes ont un génome entier identique, base par base", 'is_correct' => false],
                            ['choice_text' => "Il n’existe pas de mutation dans cette région", 'is_correct' => false],
                            ['choice_text' => "Leurs protéines sont identiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le brin modèle d’un gène passe de T-A-C à T-G-C après une mutation. Comment change l’ARNm ?",
                        'explanation' => "T-A-C donne A-U-G ; après la mutation, T-G-C donne A-C-G : l’ARNm change à la deuxième base.",
                        'choices' => [
                            ['choice_text' => "A-U-G devient A-U-C", 'is_correct' => false],
                            ['choice_text' => "U-A-C devient U-G-C", 'is_correct' => false],
                            ['choice_text' => "A-T-G devient A-C-G", 'is_correct' => false],
                            ['choice_text' => "A-U-G devient A-C-G", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une équipe veut savoir si une variation d’un gène explique une différence de protéine entre deux personnes. Quelle démarche est logique ?",
                        'explanation' => "Il faut d’abord repérer la variation dans l’ADN, puis relier ce changement à la protéine produite.",
                        'choices' => [
                            ['choice_text' => "Comparer les séquences du gène chez les deux personnes", 'is_correct' => true],
                            ['choice_text' => "Mesurer la température de conservation des échantillons", 'is_correct' => false],
                            ['choice_text' => "Compter les membranes des cellules", 'is_correct' => false],
                            ['choice_text' => "Supposer que la différence vient d’un autre organisme", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une mutation ne change pas la longueur d’un fragment d’ADN. Quelle technique donne directement l’ordre des bases pour la repérer ?",
                        'explanation' => "Un gel ne montre que la taille ; le séquençage lit l’ordre des nucléotides et révèle un changement de base.",
                        'choices' => [
                            ['choice_text' => "L’électrophorèse", 'is_correct' => false],
                            ['choice_text' => "La PCR", 'is_correct' => false],
                            ['choice_text' => "La transcription", 'is_correct' => false],
                            ['choice_text' => "Le séquençage", 'is_correct' => true],
                        ],
                    ],
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
                        'explanation' => $questionData['explanation'],
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