<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MineralogyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'mineralogy')->firstOrFail();

        $quizzes = [
            [
                'title' => "Notions fondamentales sur les minéraux",
                'description' => "Comprendre ce qu’est un minéral, reconnaître ses caractéristiques générales et distinguer un minéral d’une roche.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Lina doit expliquer à sa classe ce qu’est un minéral. Quelle définition choisir ?",
                        'explanation' => "Un minéral est un solide naturel à composition chimique définie et à organisation cristalline. Une roche, elle, est un assemblage de minéraux.",
                        'choices' => [
                            ['choice_text' => "Tout matériau solide extrait d’une mine ou d’une carrière", 'is_correct' => false],
                            ['choice_text' => "Un solide naturel de composition définie, à structure cristalline", 'is_correct' => true],
                            ['choice_text' => "Une roche dont on distingue les grains à l’œil nu", 'is_correct' => false],
                            ['choice_text' => "Un solide de synthèse fabriqué à partir de sels purs", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Laquelle de ces propositions correspond à une roche ?",
                        'explanation' => "Le granite est une roche constituée notamment de quartz, de feldspaths et de micas. Les autres propositions sont des minéraux.",
                        'choices' => [
                            ['choice_text' => "Quartz", 'is_correct' => false],
                            ['choice_text' => "Calcite", 'is_correct' => false],
                            ['choice_text' => "Halite", 'is_correct' => false],
                            ['choice_text' => "Granite", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Au microscope, Idriss observe les constituants d’un cristal de sel. Comment sont-ils organisés ?",
                        'explanation' => "Dans un cristal, les atomes ou les ions sont rangés selon un motif régulier qui se répète dans les trois directions.",
                        'choices' => [
                            ['choice_text' => "De façon désordonnée, sans motif qui se répète", 'is_correct' => false],
                            ['choice_text' => "En couches liquides qui glissent les unes sur les autres", 'is_correct' => false],
                            ['choice_text' => "Selon un motif régulier qui se répète dans l’espace", 'is_correct' => true],
                            ['choice_text' => "Comme dans un gaz, avec des particules libres", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sofia a ramassé deux cailloux violets. Peut-elle affirmer qu’il s’agit du même minéral ?",
                        'explanation' => "Des minéraux différents peuvent avoir la même couleur, et un même minéral peut en changer à cause d’impuretés. Il faut donc croiser plusieurs propriétés.",
                        'choices' => [
                            ['choice_text' => "Oui, car la couleur suffit à identifier un minéral", 'is_correct' => false],
                            ['choice_text' => "Oui, car un minéral n’existe que dans une couleur", 'is_correct' => false],
                            ['choice_text' => "Non, car les minéraux n’ont pas de couleur propre", 'is_correct' => false],
                            ['choice_text' => "Non : la couleur ne suffit pas à conclure", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Qu’est-ce que la dureté d’un minéral ?",
                        'explanation' => "La dureté mesure la résistance d’un minéral à la rayure ; on la compare grâce à l’échelle de Mohs.",
                        'choices' => [
                            ['choice_text' => "Sa résistance aux chocs", 'is_correct' => false],
                            ['choice_text' => "Sa tendance à se casser en feuillets", 'is_correct' => false],
                            ['choice_text' => "Sa résistance à la rayure", 'is_correct' => true],
                            ['choice_text' => "Sa masse par unité de volume", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le diamant et le graphite sont faits de carbone, mais n’ont pas du tout les mêmes propriétés. Qu’est-ce qui les distingue ?",
                        'explanation' => "Les deux sont du carbone pur, mais leurs atomes sont rangés différemment : en réseau très serré pour le diamant, en feuillets pour le graphite.",
                        'choices' => [
                            ['choice_text' => "L’organisation de leurs atomes dans le cristal", 'is_correct' => true],
                            ['choice_text' => "Les éléments chimiques qui entrent dans leur composition", 'is_correct' => false],
                            ['choice_text' => "La région du monde où on les trouve", 'is_correct' => false],
                            ['choice_text' => "L’âge des roches où ils se forment", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Parmi ces matériaux naturels, lequel n’est pas un minéral ?",
                        'explanation' => "Le charbon vient de la transformation de végétaux : il n’a ni composition chimique définie ni structure cristalline, contrairement aux trois autres.",
                        'choices' => [
                            ['choice_text' => "Le sel gemme, qu’on extrait des mines", 'is_correct' => false],
                            ['choice_text' => "Le charbon, issu de restes végétaux", 'is_correct' => true],
                            ['choice_text' => "Le gypse, utilisé pour fabriquer le plâtre", 'is_correct' => false],
                            ['choice_text' => "La pyrite, aux cristaux jaune laiton", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle propriété décrit la manière dont la surface d’un minéral réfléchit la lumière ?",
                        'explanation' => "L’éclat décrit l’aspect de la lumière réfléchie par la surface d’un minéral : vitreux, métallique, nacré, etc.",
                        'choices' => [
                            ['choice_text' => "La transparence", 'is_correct' => false],
                            ['choice_text' => "Le clivage", 'is_correct' => false],
                            ['choice_text' => "La trace", 'is_correct' => false],
                            ['choice_text' => "L’éclat", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un échantillon montre des grains de quartz, de feldspath et de mica soudés ensemble. Comment le qualifier ?",
                        'explanation' => "Plusieurs minéraux réunis forment une roche ; ici, il s’agit d’un granite.",
                        'choices' => [
                            ['choice_text' => "Comme un minéral unique à trois couleurs", 'is_correct' => false],
                            ['choice_text' => "Comme un seul gros cristal", 'is_correct' => false],
                            ['choice_text' => "Comme une roche, c’est-à-dire un assemblage de minéraux", 'is_correct' => true],
                            ['choice_text' => "Comme un élément chimique pur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une bouteille en verre et un cristal de quartz sont tous deux durs et transparents. Quelle différence de structure les sépare ?",
                        'explanation' => "Le quartz est un solide cristallin, alors que le verre est un solide amorphe, dont les atomes sont désordonnés.",
                        'choices' => [
                            ['choice_text' => "Le quartz a ses atomes rangés en motif régulier, pas le verre", 'is_correct' => true],
                            ['choice_text' => "Le verre est liquide à température ambiante", 'is_correct' => false],
                            ['choice_text' => "Le quartz ne contient pas de silicium", 'is_correct' => false],
                            ['choice_text' => "Le verre ne contient pas d’atomes", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Propriétés physiques des minéraux",
                'description' => "Utiliser la dureté, la densité, la trace, l’éclat et le clivage pour comparer des minéraux.",
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quel minéral possède une dureté de 1 sur l’échelle de Mohs ?",
                        'explanation' => "Le talc constitue le premier degré de l’échelle de Mohs, avec une dureté de 1.",
                        'choices' => [
                            ['choice_text' => "Gypse", 'is_correct' => false],
                            ['choice_text' => "Talc", 'is_correct' => true],
                            ['choice_text' => "Calcite", 'is_correct' => false],
                            ['choice_text' => "Quartz", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel minéral est plus dur que le quartz ?",
                        'explanation' => "Le quartz a une dureté de 7, tandis que le corindon atteint 9 sur l’échelle de Mohs.",
                        'choices' => [
                            ['choice_text' => "Orthose", 'is_correct' => false],
                            ['choice_text' => "Apatite", 'is_correct' => false],
                            ['choice_text' => "Fluorine", 'is_correct' => false],
                            ['choice_text' => "Corindon", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Mélissa pèse un échantillon : 120 g. Plongé dans l’eau, il déplace 40 cm³. Quelle est sa densité ?",
                        'explanation' => "Le volume est celui de l’eau déplacée, 40 cm³ : 120 g ÷ 40 cm³ = 3 g/cm³.",
                        'choices' => [
                            ['choice_text' => "3 g/cm³", 'is_correct' => true],
                            ['choice_text' => "0,33 g/cm³", 'is_correct' => false],
                            ['choice_text' => "80 g/cm³", 'is_correct' => false],
                            ['choice_text' => "4 800 g/cm³", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux échantillons ont le même volume, mais le premier est plus lourd. Que peut-on en conclure ?",
                        'explanation' => "À volume égal, une masse plus grande veut dire une densité plus grande ; cela ne dit rien de la dureté.",
                        'choices' => [
                            ['choice_text' => "Le premier a une densité plus élevée", 'is_correct' => true],
                            ['choice_text' => "Le premier est plus transparent", 'is_correct' => false],
                            ['choice_text' => "Le premier a un clivage plus net", 'is_correct' => false],
                            ['choice_text' => "Le premier est plus dur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La poudre laissée par un minéral sur une plaque de porcelaine non émaillée est appelée...",
                        'explanation' => "La trace correspond à la couleur de la poudre obtenue en frottant le minéral sur une plaque adaptée.",
                        'choices' => [
                            ['choice_text' => "le clivage", 'is_correct' => false],
                            ['choice_text' => "la trace", 'is_correct' => true],
                            ['choice_text' => "la fracture", 'is_correct' => false],
                            ['choice_text' => "l’éclat", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un cristal de mica se sépare en fines feuilles dès qu’on le plie. Quelle propriété cela illustre-t-il ?",
                        'explanation' => "Le clivage correspond à des plans le long desquels le cristal se sépare facilement ; le mica en possède un très net.",
                        'choices' => [
                            ['choice_text' => "Une fracture irrégulière", 'is_correct' => false],
                            ['choice_text' => "Un éclat métallique", 'is_correct' => false],
                            ['choice_text' => "Un clivage net", 'is_correct' => true],
                            ['choice_text' => "Une forte densité", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un caillou de silex casse en laissant des surfaces courbes, sans plan régulier. Comment nomme-t-on ce type de cassure ?",
                        'explanation' => "Une cassure irrégulière, sans plan privilégié, est une fracture ; le clivage suit au contraire des plans réguliers.",
                        'choices' => [
                            ['choice_text' => "Un clivage", 'is_correct' => false],
                            ['choice_text' => "Une fracture", 'is_correct' => true],
                            ['choice_text' => "Une trace", 'is_correct' => false],
                            ['choice_text' => "Un éclat", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La pyrite et le quartz brillent tous deux au soleil. Quel éclat est celui de la pyrite ?",
                        'explanation' => "La pyrite a un éclat métallique, proche de celui d’un métal poli ; le quartz a un éclat vitreux.",
                        'choices' => [
                            ['choice_text' => "Vitreux, comme le quartz", 'is_correct' => false],
                            ['choice_text' => "Terne, comme l’argile", 'is_correct' => false],
                            ['choice_text' => "Métallique", 'is_correct' => true],
                            ['choice_text' => "Nacré, comme le mica", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un échantillon laisse passer la lumière, mais on ne distingue pas nettement les objets à travers. Comment le qualifier ?",
                        'explanation' => "Un minéral translucide laisse passer la lumière sans qu’on voie nettement au travers ; transparent, on y voit nettement, et opaque, la lumière ne passe pas.",
                        'choices' => [
                            ['choice_text' => "Transparent", 'is_correct' => false],
                            ['choice_text' => "Opaque", 'is_correct' => false],
                            ['choice_text' => "Translucide", 'is_correct' => true],
                            ['choice_text' => "Métallique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "En frottant un échantillon avec une pièce de cuivre (dureté d’environ 3), un géologue constate que la pièce le raye. Que peut-il en déduire ?",
                        'explanation' => "Si la pièce raye le minéral, celui-ci est plus tendre qu’elle : sa dureté est donc inférieure à 3.",
                        'choices' => [
                            ['choice_text' => "Sa dureté est supérieure à 3", 'is_correct' => false],
                            ['choice_text' => "Sa dureté est de 7, comme celle du quartz", 'is_correct' => false],
                            ['choice_text' => "Il s’agit d’un métal natif", 'is_correct' => false],
                            ['choice_text' => "Sa dureté est inférieure à 3", 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Identifier les minéraux courants",
                'description' => "Croiser plusieurs observations simples pour reconnaître quelques minéraux courants.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Julien examine un échantillon incolore, très dur, à éclat vitreux et sans plan de clivage net. Quel minéral est le plus probable ?",
                        'explanation' => "Une dureté élevée, un éclat vitreux et l’absence de clivage net : c’est le profil du quartz.",
                        'choices' => [
                            ['choice_text' => "Le quartz", 'is_correct' => true],
                            ['choice_text' => "La halite", 'is_correct' => false],
                            ['choice_text' => "Le gypse", 'is_correct' => false],
                            ['choice_text' => "La calcite", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un petit cristal en forme de cube se casse en cubes plus petits et se dissout dans l’eau. De quel minéral s’agit-il ?",
                        'explanation' => "La halite cristallise en cubes, se casse selon trois directions perpendiculaires et se dissout dans l’eau.",
                        'choices' => [
                            ['choice_text' => "La pyrite", 'is_correct' => false],
                            ['choice_text' => "La calcite", 'is_correct' => false],
                            ['choice_text' => "La halite", 'is_correct' => true],
                            ['choice_text' => "Le quartz", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une goutte d’acide dilué fait mousser un échantillon que l’on raye sans peine avec une pointe d’acier. Quel minéral est probable ?",
                        'explanation' => "La calcite fait effervescence au contact d’un acide dilué et, avec une dureté de 3, se raye à la pointe d’acier.",
                        'choices' => [
                            ['choice_text' => "Le quartz", 'is_correct' => false],
                            ['choice_text' => "La calcite", 'is_correct' => true],
                            ['choice_text' => "Le mica", 'is_correct' => false],
                            ['choice_text' => "L’hématite", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Karim trouve des cubes jaune laiton à l’éclat métallique dans une roche. Quel minéral est le plus probable ?",
                        'explanation' => "Des cubes jaune laiton à éclat métallique sont typiques de la pyrite, que l’on surnomme parfois « l’or des fous ».",
                        'choices' => [
                            ['choice_text' => "Le gypse", 'is_correct' => false],
                            ['choice_text' => "Le mica", 'is_correct' => false],
                            ['choice_text' => "Le quartz", 'is_correct' => false],
                            ['choice_text' => "La pyrite", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un minéral au toucher savonneux se raye à l’ongle sans effort. Lequel est probable ?",
                        'explanation' => "Le talc est le minéral le plus tendre de l’échelle de Mohs, avec une dureté de 1 ; il paraît gras ou savonneux au toucher.",
                        'choices' => [
                            ['choice_text' => "Le talc", 'is_correct' => true],
                            ['choice_text' => "Le quartz", 'is_correct' => false],
                            ['choice_text' => "La pyrite", 'is_correct' => false],
                            ['choice_text' => "Le corindon", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un échantillon se raye à l’ongle. Que peut-on affirmer avec prudence ?",
                        'explanation' => "L’ongle a une dureté d’environ 2,5 : un minéral qu’il raye est donc tendre. Ce test seul ne donne cependant pas son nom.",
                        'choices' => [
                            ['choice_text' => "Il est plus dur que le verre d’une fenêtre", 'is_correct' => false],
                            ['choice_text' => "Il est aussi dur qu’une lame de couteau en acier", 'is_correct' => false],
                            ['choice_text' => "Il a une dureté voisine de celle du quartz", 'is_correct' => false],
                            ['choice_text' => "Il est tendre, de dureté inférieure à 3 environ", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Deux échantillons verdâtres se ressemblent beaucoup. Que faire pour les départager ?",
                        'explanation' => "La couleur ne les départage pas ; la dureté et le clivage sont des propriétés propres au minéral, beaucoup plus fiables.",
                        'choices' => [
                            ['choice_text' => "Comparer leur dureté et leur clivage", 'is_correct' => true],
                            ['choice_text' => "Comparer leur taille et leur forme générale", 'is_correct' => false],
                            ['choice_text' => "Choisir celui qui a la couleur la plus vive", 'is_correct' => false],
                            ['choice_text' => "Les mouiller pour mieux voir leur couleur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un minéral gris métallique laisse une trace rouge-brun sur une plaque de porcelaine. Lequel est compatible avec ces indices ?",
                        'explanation' => "Une trace rouge-brun est la signature de l’hématite, même quand l’échantillon est gris métallique ; la pyrite laisse une trace noirâtre.",
                        'choices' => [
                            ['choice_text' => "Le graphite", 'is_correct' => false],
                            ['choice_text' => "Le feldspath", 'is_correct' => false],
                            ['choice_text' => "L’hématite", 'is_correct' => true],
                            ['choice_text' => "La magnétite", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Maya hésite entre deux minéraux à partir d’un seul indice. Que lui conseiller ?",
                        'explanation' => "Un seul indice est souvent partagé par plusieurs minéraux ; on identifie en croisant dureté, éclat, trace, clivage, etc.",
                        'choices' => [
                            ['choice_text' => "Choisir celui dont le nom lui plaît le plus", 'is_correct' => false],
                            ['choice_text' => "Chercher d’autres indices qui concordent", 'is_correct' => true],
                            ['choice_text' => "Se fier à la couleur, qui est la plus visible", 'is_correct' => false],
                            ['choice_text' => "Peser l’échantillon et s’arrêter à ce résultat", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pour comparer la dureté de petits échantillons sur le terrain, que peut-on utiliser ?",
                        'explanation' => "On raye l’échantillon avec des objets de dureté connue : ongle environ 2,5, pièce de cuivre environ 3, lame d’acier environ 5,5.",
                        'choices' => [
                            ['choice_text' => "Une loupe de poche et une règle graduée en millimètres", 'is_correct' => false],
                            ['choice_text' => "Une boussole de terrain et un thermomètre de poche", 'is_correct' => false],
                            ['choice_text' => "Un ongle, une pièce de cuivre, une lame d’acier", 'is_correct' => true],
                            ['choice_text' => "Un aimant et une petite balance de cuisine", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Grandes familles minérales",
                'description' => "Reconnaître les principales familles minérales à partir de leur composition et de quelques exemples.",
                'duration' => 23,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Le quartz appartient aux...",
                        'explanation' => "Le quartz est un silicate de formule SiO₂.",
                        'choices' => [
                            ['choice_text' => "carbonates", 'is_correct' => false],
                            ['choice_text' => "sulfates", 'is_correct' => false],
                            ['choice_text' => "silicates", 'is_correct' => true],
                            ['choice_text' => "halogénures", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le groupe CO₃ est la signature d’une famille de minéraux. Laquelle ?",
                        'explanation' => "Le groupe CO₃ définit les carbonates, famille dont la calcite est l’exemple le plus courant.",
                        'choices' => [
                            ['choice_text' => "Les halogénures", 'is_correct' => false],
                            ['choice_text' => "Les carbonates", 'is_correct' => true],
                            ['choice_text' => "Les silicates", 'is_correct' => false],
                            ['choice_text' => "Les sulfates", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le gypse, que l’on utilise pour fabriquer le plâtre, est un...",
                        'explanation' => "Le gypse est un sulfate de calcium hydraté, de formule CaSO₄·2H₂O.",
                        'choices' => [
                            ['choice_text' => "carbonate", 'is_correct' => false],
                            ['choice_text' => "sulfate", 'is_correct' => true],
                            ['choice_text' => "silicate", 'is_correct' => false],
                            ['choice_text' => "halogénure", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La halite, NaCl, appartient aux...",
                        'explanation' => "La halite est un chlorure de sodium, et les chlorures font partie des halogénures.",
                        'choices' => [
                            ['choice_text' => "oxydes", 'is_correct' => false],
                            ['choice_text' => "carbonates", 'is_correct' => false],
                            ['choice_text' => "halogénures", 'is_correct' => true],
                            ['choice_text' => "sulfates", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "L’hématite, Fe₂O₃, est classée parmi les...",
                        'explanation' => "Fe₂O₃ est un oxyde de fer : l’hématite appartient donc aux oxydes.",
                        'choices' => [
                            ['choice_text' => "oxydes", 'is_correct' => true],
                            ['choice_text' => "sulfures", 'is_correct' => false],
                            ['choice_text' => "carbonates", 'is_correct' => false],
                            ['choice_text' => "sulfates", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La pyrite, FeS₂, associe le fer au soufre sans oxygène. À quelle famille appartient-elle ?",
                        'explanation' => "FeS₂ associe le fer au soufre seul : c’est un sulfure. Les sulfates contiennent en plus de l’oxygène (groupe SO₄).",
                        'choices' => [
                            ['choice_text' => "Les sulfates", 'is_correct' => false],
                            ['choice_text' => "Les oxydes", 'is_correct' => false],
                            ['choice_text' => "Les sulfures", 'is_correct' => true],
                            ['choice_text' => "Les silicates", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les silicates forment la grande majorité de la croûte terrestre. Quels éléments expliquent cette abondance ?",
                        'explanation' => "L’oxygène et le silicium sont les deux éléments les plus abondants de la croûte, d’où la place dominante des silicates.",
                        'choices' => [
                            ['choice_text' => "Le carbone et l’hydrogène, les éléments majeurs des roches", 'is_correct' => false],
                            ['choice_text' => "Le fer et le soufre, les éléments dominants de la croûte", 'is_correct' => false],
                            ['choice_text' => "Le sodium et le chlore, les éléments dominants des océans", 'is_correct' => false],
                            ['choice_text' => "Le silicium et l’oxygène, les plus abondants de la croûte", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quel minéral appartient, comme le quartz, à la famille des silicates ?",
                        'explanation' => "Les micas sont des silicates, comme le quartz et les feldspaths ; la calcite est un carbonate, la halite un halogénure et l’hématite un oxyde.",
                        'choices' => [
                            ['choice_text' => "La calcite", 'is_correct' => false],
                            ['choice_text' => "La halite", 'is_correct' => false],
                            ['choice_text' => "L’hématite", 'is_correct' => false],
                            ['choice_text' => "Le mica", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Le diamant et le soufre sont constitués d’un seul élément chimique. Comment appelle-t-on de tels minéraux ?",
                        'explanation' => "Un minéral formé d’un seul élément, comme le diamant (carbone), le soufre ou l’or, est un élément natif.",
                        'choices' => [
                            ['choice_text' => "Des éléments natifs", 'is_correct' => true],
                            ['choice_text' => "Des oxydes simples", 'is_correct' => false],
                            ['choice_text' => "Des carbonates natifs", 'is_correct' => false],
                            ['choice_text' => "Des silicates simples", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle formule chimique correspond à la halite ?",
                        'explanation' => "La halite est le chlorure de sodium, NaCl. CaCO₃ est la calcite, SiO₂ le quartz et Fe₂O₃ l’hématite.",
                        'choices' => [
                            ['choice_text' => "CaCO₃", 'is_correct' => false],
                            ['choice_text' => "SiO₂", 'is_correct' => false],
                            ['choice_text' => "Fe₂O₃", 'is_correct' => false],
                            ['choice_text' => "NaCl", 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Cristallisation et formation des minéraux",
                'description' => "Comprendre les notions simples de cristallisation, précipitation et transformation des minéraux.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Un magma refroidit lentement sous terre. Que se passe-t-il pour les minéraux ?",
                        'explanation' => "En refroidissant, le magma laisse apparaître des cristaux qui grossissent peu à peu.",
                        'choices' => [
                            ['choice_text' => "Ils cristallisent peu à peu à partir du liquide", 'is_correct' => true],
                            ['choice_text' => "Ils se transforment en gaz", 'is_correct' => false],
                            ['choice_text' => "Ils se dissolvent dans l’eau souterraine", 'is_correct' => false],
                            ['choice_text' => "Ils fondent à nouveau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux laves de même composition refroidissent : l’une en quelques heures à l’air libre, l’autre en millions d’années en profondeur. Laquelle donne les plus gros cristaux ?",
                        'explanation' => "Un refroidissement lent laisse aux cristaux le temps de grossir ; un refroidissement rapide donne de petits cristaux, voire du verre.",
                        'choices' => [
                            ['choice_text' => "Celle qui refroidit à l’air libre, rapidement", 'is_correct' => false],
                            ['choice_text' => "Celle qui refroidit en profondeur, lentement", 'is_correct' => true],
                            ['choice_text' => "Les deux donnent des cristaux de même taille", 'is_correct' => false],
                            ['choice_text' => "Ni l’une ni l’autre ne donne de cristaux visibles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un marais salant, l’eau de mer s’évapore peu à peu. Qu’est-ce qui se dépose au fond des bassins ?",
                        'explanation' => "En s’évaporant, l’eau devient de plus en plus salée jusqu’à ce que le sel se dépose sous forme de cristaux de halite.",
                        'choices' => [
                            ['choice_text' => "Des cristaux de quartz bien formés", 'is_correct' => false],
                            ['choice_text' => "Des cristaux de sel, la halite", 'is_correct' => true],
                            ['choice_text' => "Des cristaux de mica en lamelles", 'is_correct' => false],
                            ['choice_text' => "Des cristaux de feldspath rosés", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un granite montre de gros cristaux bien visibles. Dans quel contexte s’est-il formé ?",
                        'explanation' => "En profondeur, la roche perd sa chaleur très lentement, ce qui laisse aux cristaux le temps de grossir.",
                        'choices' => [
                            ['choice_text' => "En profondeur, par refroidissement lent d’un magma", 'is_correct' => true],
                            ['choice_text' => "À la surface, par refroidissement rapide d’une lave", 'is_correct' => false],
                            ['choice_text' => "Au fond d’un lac, par évaporation de l’eau", 'is_correct' => false],
                            ['choice_text' => "Dans une rivière, par accumulation de sable", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une roche enfouie à 15 km de profondeur chauffe et se recristallise sans fondre. De quel phénomène s’agit-il ?",
                        'explanation' => "Une roche qui se transforme à l’état solide sous l’effet de la chaleur et de la pression subit un métamorphisme.",
                        'choices' => [
                            ['choice_text' => "De l’évaporation", 'is_correct' => false],
                            ['choice_text' => "De la sédimentation", 'is_correct' => false],
                            ['choice_text' => "De l’érosion", 'is_correct' => false],
                            ['choice_text' => "Du métamorphisme", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Sur la façade d’un vieux bâtiment, l’eau de pluie ronge peu à peu certaines pierres. Quel processus est à l’œuvre ?",
                        'explanation' => "L’eau de pluie, légèrement acide, réagit avec certains minéraux et les dissout peu à peu.",
                        'choices' => [
                            ['choice_text' => "Une altération chimique par l’eau", 'is_correct' => true],
                            ['choice_text' => "Une cristallisation de magma en profondeur", 'is_correct' => false],
                            ['choice_text' => "Un métamorphisme de contact avec un granite", 'is_correct' => false],
                            ['choice_text' => "Une précipitation de sel marin en surface", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un spéléologue observe des stalactites qui grossissent goutte après goutte. De quel minéral sont-elles faites le plus souvent ?",
                        'explanation' => "L’eau chargée de carbonate de calcium dépose de la calcite à chaque goutte, ce qui fait grandir stalactites et stalagmites.",
                        'choices' => [
                            ['choice_text' => "De halite", 'is_correct' => false],
                            ['choice_text' => "De quartz", 'is_correct' => false],
                            ['choice_text' => "De calcite", 'is_correct' => true],
                            ['choice_text' => "De pyrite", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel enchaînement décrit la formation de cristaux dans un magma qui refroidit ?",
                        'explanation' => "En refroidissant, le magma donne d’abord de petits cristaux, qui grossissent ensuite tant qu’il reste du liquide.",
                        'choices' => [
                            ['choice_text' => "Apparition de cristaux, puis chauffage, puis évaporation", 'is_correct' => false],
                            ['choice_text' => "Fusion complète, puis érosion, puis dépôt", 'is_correct' => false],
                            ['choice_text' => "Dépôt de sédiments, puis chauffage, puis cristaux", 'is_correct' => false],
                            ['choice_text' => "Refroidissement, petits cristaux, puis croissance", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une roche formée à 10 km de profondeur remonte jusqu’à la surface. Que peut-il lui arriver ?",
                        'explanation' => "À la surface, l’eau, l’air et la température changent : les minéraux formés en profondeur y sont moins stables et s’altèrent.",
                        'choices' => [
                            ['choice_text' => "Elle devient plus dure sans changer", 'is_correct' => false],
                            ['choice_text' => "Elle fond sous l’effet de la pression", 'is_correct' => false],
                            ['choice_text' => "Elle se transforme en magma", 'is_correct' => false],
                            ['choice_text' => "Elle s’altère, car les conditions de surface sont différentes", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "De l’eau chaude chargée de silice refroidit dans une fissure et dépose des cristaux de quartz sur les parois. Quel terme décrit la formation d’un solide à partir d’une solution ?",
                        'explanation' => "Quand la solution ne peut plus garder tout ce qu’elle contient, une partie se dépose sous forme de cristaux : c’est la précipitation.",
                        'choices' => [
                            ['choice_text' => "La fusion", 'is_correct' => false],
                            ['choice_text' => "L’érosion", 'is_correct' => false],
                            ['choice_text' => "La précipitation", 'is_correct' => true],
                            ['choice_text' => "La sublimation", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Minéraux et roches courantes",
                'description' => "Relier des minéraux courants aux roches dans lesquelles ils se rencontrent fréquemment.",
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Un échantillon de granite contient de gros grains clairs et des paillettes noires. Quels minéraux y trouve-t-on typiquement ?",
                        'explanation' => "Le granite associe le plus souvent du quartz, des feldspaths et des micas.",
                        'choices' => [
                            ['choice_text' => "Halite, gypse et calcite", 'is_correct' => false],
                            ['choice_text' => "Diamant, graphite et soufre", 'is_correct' => false],
                            ['choice_text' => "Pyrite, hématite et magnétite", 'is_correct' => false],
                            ['choice_text' => "Quartz, feldspaths et micas", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Le basalte est une roche...",
                        'explanation' => "Le basalte provient du refroidissement rapide d’une lave à la surface.",
                        'choices' => [
                            ['choice_text' => "sédimentaire détritique", 'is_correct' => false],
                            ['choice_text' => "métamorphique foliée", 'is_correct' => false],
                            ['choice_text' => "magmatique plutonique", 'is_correct' => false],
                            ['choice_text' => "magmatique volcanique", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Le marbre d’une statue provient à l’origine de quelle roche ?",
                        'explanation' => "Chauffé et comprimé en profondeur, le calcaire se recristallise et devient du marbre.",
                        'choices' => [
                            ['choice_text' => "D’un granite transformé par évaporation", 'is_correct' => false],
                            ['choice_text' => "D’un grès cimenté par du sel", 'is_correct' => false],
                            ['choice_text' => "D’un calcaire transformé par métamorphisme", 'is_correct' => true],
                            ['choice_text' => "D’un basalte refroidi lentement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un grès est riche en quartz, et pourtant c’est une roche sédimentaire. Comment est-ce possible ?",
                        'explanation' => "Le quartz résiste à l’altération : il s’accumule en grains dans les sédiments, qui se cimentent ensuite en grès.",
                        'choices' => [
                            ['choice_text' => "Ses grains de quartz viennent de roches érodées, puis déposées", 'is_correct' => true],
                            ['choice_text' => "Le quartz ne se forme que dans les sédiments", 'is_correct' => false],
                            ['choice_text' => "Le quartz est un produit des plantes", 'is_correct' => false],
                            ['choice_text' => "Un grès est en réalité une roche magmatique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel minéral domine dans un calcaire ?",
                        'explanation' => "Le calcaire est surtout fait de calcite, un carbonate de calcium (CaCO₃).",
                        'choices' => [
                            ['choice_text' => "Le feldspath", 'is_correct' => false],
                            ['choice_text' => "La halite", 'is_correct' => false],
                            ['choice_text' => "La calcite", 'is_correct' => true],
                            ['choice_text' => "Le gypse", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment appelle-t-on la roche formée presque entièrement de halite ?",
                        'explanation' => "Le sel gemme est une roche presque entièrement composée de halite, laissée par l’évaporation d’anciennes mers.",
                        'choices' => [
                            ['choice_text' => "L’albâtre blanc", 'is_correct' => false],
                            ['choice_text' => "Le grès ferrugineux", 'is_correct' => false],
                            ['choice_text' => "Le sel gemme", 'is_correct' => true],
                            ['choice_text' => "La craie blanche", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment se forme une roche détritique comme le grès ?",
                        'explanation' => "Ce sont des débris de roches plus anciennes, transportés, déposés puis cimentés.",
                        'choices' => [
                            ['choice_text' => "Un magma refroidit lentement en profondeur", 'is_correct' => false],
                            ['choice_text' => "Des fragments de roches érodées sont déposés puis cimentés", 'is_correct' => true],
                            ['choice_text' => "Une lave se fige à la surface", 'is_correct' => false],
                            ['choice_text' => "Une roche chauffe sans fondre en profondeur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel indice de terrain suggère qu’une roche est un calcaire ?",
                        'explanation' => "Le calcaire contient de la calcite, qui fait effervescence au contact d’un acide dilué.",
                        'choices' => [
                            ['choice_text' => "Elle fait mousser une goutte d’acide dilué", 'is_correct' => true],
                            ['choice_text' => "Elle raye facilement le verre", 'is_correct' => false],
                            ['choice_text' => "Elle attire un aimant", 'is_correct' => false],
                            ['choice_text' => "Elle laisse une trace rouge-brun", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que décrit la texture d’une roche ?",
                        'explanation' => "La texture renseigne sur la façon dont la roche s’est formée, par exemple vite ou lentement.",
                        'choices' => [
                            ['choice_text' => "Sa composition chimique détaillée en éléments", 'is_correct' => false],
                            ['choice_text' => "L’agencement, la taille et la forme de ses grains", 'is_correct' => true],
                            ['choice_text' => "Sa dureté mesurée sur l’échelle de Mohs", 'is_correct' => false],
                            ['choice_text' => "L’âge de sa formation, exprimé en millions d’années", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Du quartz est présent dans un granite, dans un grès et dans un gneiss. Que montre cette observation ?",
                        'explanation' => "Le quartz se forme ou se conserve aussi bien dans des contextes magmatiques, sédimentaires que métamorphiques.",
                        'choices' => [
                            ['choice_text' => "Un même minéral peut se rencontrer dans des roches de types différents", 'is_correct' => true],
                            ['choice_text' => "Ces trois roches sont de la même sorte", 'is_correct' => false],
                            ['choice_text' => "Chaque minéral change de nom selon la roche", 'is_correct' => false],
                            ['choice_text' => "Le quartz change de formule d’une roche à l’autre", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Quartz, feldspaths et micas",
                'description' => "Comparer trois minéraux très fréquents dans les roches de la croûte continentale.",
                'duration' => 23,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Comment distinguer un cristal de mica d’un cristal de quartz ?",
                        'explanation' => "Le mica possède un clivage parfait en feuillets ; le quartz se casse sans plan net.",
                        'choices' => [
                            ['choice_text' => "Le mica se sépare en feuillets, pas le quartz", 'is_correct' => true],
                            ['choice_text' => "Le quartz se sépare en feuillets, pas le mica", 'is_correct' => false],
                            ['choice_text' => "Le quartz mousse à l’acide, pas le mica", 'is_correct' => false],
                            ['choice_text' => "Le mica est aussi dur que le diamant, pas le quartz", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle place tiennent les feldspaths dans la croûte terrestre ?",
                        'explanation' => "Les feldspaths forment environ la moitié de la croûte terrestre.",
                        'choices' => [
                            ['choice_text' => "Ils sont rares et limités aux volcans", 'is_correct' => false],
                            ['choice_text' => "On les trouve surtout dans les roches sédimentaires", 'is_correct' => false],
                            ['choice_text' => "Ils constituent surtout le noyau de la Terre", 'is_correct' => false],
                            ['choice_text' => "Ce sont les minéraux les plus abondants", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quelle est la dureté du quartz sur l’échelle de Mohs ?",
                        'explanation' => "Le quartz correspond au degré 7 : plus dur que l’orthose (6), plus tendre que la topaze (8).",
                        'choices' => [
                            ['choice_text' => "6", 'is_correct' => false],
                            ['choice_text' => "8", 'is_correct' => false],
                            ['choice_text' => "9", 'is_correct' => false],
                            ['choice_text' => "7", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quel aspect est typique d’un mica noir, comme la biotite ?",
                        'explanation' => "La biotite est un mica sombre caractérisé par un excellent clivage en lamelles.",
                        'choices' => [
                            ['choice_text' => "Des cubes incolores qui se dissolvent dans l’eau", 'is_correct' => false],
                            ['choice_text' => "Des lamelles sombres qui se détachent facilement", 'is_correct' => true],
                            ['choice_text' => "Des cristaux transparents sans plan de clivage net", 'is_correct' => false],
                            ['choice_text' => "Des grains jaune laiton métalliques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "L’orthose est un minéral rosé fréquent dans le granite. À quelle famille appartient-il ?",
                        'explanation' => "L’orthose est un feldspath potassique, souvent rose dans les granites.",
                        'choices' => [
                            ['choice_text' => "Aux micas", 'is_correct' => false],
                            ['choice_text' => "Aux carbonates", 'is_correct' => false],
                            ['choice_text' => "Aux feldspaths", 'is_correct' => true],
                            ['choice_text' => "Aux sulfates", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un cristal rosé se brise selon deux plans à angle droit et raye une vitre. Quel minéral est probable ?",
                        'explanation' => "Deux directions de clivage à angle droit et une dureté d’environ 6 sont les traits d’un feldspath.",
                        'choices' => [
                            ['choice_text' => "Du quartz", 'is_correct' => false],
                            ['choice_text' => "Du mica", 'is_correct' => false],
                            ['choice_text' => "Un feldspath", 'is_correct' => true],
                            ['choice_text' => "De la calcite", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "On frotte un morceau de quartz contre un morceau de feldspath. Que se passe-t-il ?",
                        'explanation' => "Le quartz (7) est plus dur que les feldspaths (environ 6) : c’est lui qui raye l’autre.",
                        'choices' => [
                            ['choice_text' => "Le feldspath raye le quartz, plus tendre", 'is_correct' => false],
                            ['choice_text' => "Le quartz raye le feldspath, plus tendre", 'is_correct' => true],
                            ['choice_text' => "Les deux se rayent de la même façon", 'is_correct' => false],
                            ['choice_text' => "Ni l’un ni l’autre ne laisse de trace", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une roche scintille de petites paillettes qui se détachent en lamelles. Quel minéral y est présent ?",
                        'explanation' => "Le clivage des micas produit des paillettes et des lamelles très caractéristiques.",
                        'choices' => [
                            ['choice_text' => "Du mica", 'is_correct' => true],
                            ['choice_text' => "De la halite", 'is_correct' => false],
                            ['choice_text' => "De la calcite", 'is_correct' => false],
                            ['choice_text' => "De l’hématite", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel éclat observe-t-on le plus souvent sur une cassure fraîche de quartz ?",
                        'explanation' => "Le quartz a un éclat vitreux, comparable à celui du verre.",
                        'choices' => [
                            ['choice_text' => "Métallique", 'is_correct' => false],
                            ['choice_text' => "Terreux", 'is_correct' => false],
                            ['choice_text' => "Vitreux", 'is_correct' => true],
                            ['choice_text' => "Nacré", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur la façade en granite d’une mosquée, Hicham distingue des grains gris, roses et noirs. À quels minéraux peut-il penser ?",
                        'explanation' => "Un granite associe du quartz gris, des feldspaths souvent roses ou blancs et des micas noirs comme la biotite.",
                        'choices' => [
                            ['choice_text' => "Halite grise, calcite rose et pyrite noire", 'is_correct' => false],
                            ['choice_text' => "Gypse gris, hématite rose et graphite noir", 'is_correct' => false],
                            ['choice_text' => "Talc gris, corindon rose et soufre noir", 'is_correct' => false],
                            ['choice_text' => "Quartz gris, feldspath rose et mica noir", 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Altération et cycle des minéraux",
                'description' => "Comprendre comment les minéraux s’altèrent, se transportent et participent au cycle géologique.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "En hiver, l’eau gèle dans une fissure d’un rocher de l’Atlas. Quel effet cela a-t-il sur la roche ?",
                        'explanation' => "L’eau gelée occupe plus de volume : elle pousse sur les parois et fait éclater la roche, c’est une altération mécanique.",
                        'choices' => [
                            ['choice_text' => "La glace cimente la fissure et la renforce", 'is_correct' => false],
                            ['choice_text' => "La glace se dilate et élargit la fissure", 'is_correct' => true],
                            ['choice_text' => "La glace transforme le rocher en minéral pur", 'is_correct' => false],
                            ['choice_text' => "La glace fait fondre la roche voisine", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le sel de table se dissout dans l’eau. De quel type de processus s’agit-il ?",
                        'explanation' => "La dissolution met en jeu des interactions chimiques entre le minéral et l’eau.",
                        'choices' => [
                            ['choice_text' => "D’un processus mécanique", 'is_correct' => false],
                            ['choice_text' => "D’un processus magnétique", 'is_correct' => false],
                            ['choice_text' => "D’un processus de fusion", 'is_correct' => false],
                            ['choice_text' => "D’un processus chimique", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Les racines d’un arbre grandissent dans une fissure et la font éclater. Quel type d’altération est-ce ?",
                        'explanation' => "En poussant, les racines écartent les parois de la fissure : c’est une altération mécanique.",
                        'choices' => [
                            ['choice_text' => "Une altération chimique, par dissolution du calcaire", 'is_correct' => false],
                            ['choice_text' => "Une cristallisation de magma en profondeur", 'is_correct' => false],
                            ['choice_text' => "Une altération mécanique, due à un être vivant", 'is_correct' => true],
                            ['choice_text' => "Un métamorphisme de contact avec un granite", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quels agents déplacent les débris d’une roche altérée ?",
                        'explanation' => "Cours d’eau, vent, glaciers et gravité emportent les débris, ce qui prépare leur dépôt ailleurs.",
                        'choices' => [
                            ['choice_text' => "L’eau, le vent, la glace et la gravité", 'is_correct' => true],
                            ['choice_text' => "La lumière du Soleil et l’attraction de la Lune", 'is_correct' => false],
                            ['choice_text' => "Le champ magnétique et le noyau", 'is_correct' => false],
                            ['choice_text' => "La chaleur du manteau et les volcans", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que devient la forme d’un grain de quartz transporté longtemps par une rivière ?",
                        'explanation' => "Les chocs répétés émoussent les angles : plus le transport est long, plus les grains sont arrondis.",
                        'choices' => [
                            ['choice_text' => "Il s’arrondit, car les chocs usent ses angles", 'is_correct' => true],
                            ['choice_text' => "Il devient plus anguleux, car les chocs le brisent en éclats", 'is_correct' => false],
                            ['choice_text' => "Il se dissout dans l’eau", 'is_correct' => false],
                            ['choice_text' => "Il grossit en absorbant l’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "L’eau de pluie contient du CO₂ dissous et devient légèrement acide. Que devient un calcaire en contact avec elle ?",
                        'explanation' => "L’eau acide attaque la calcite et la dissout peu à peu, ce qui creuse des grottes dans les calcaires.",
                        'choices' => [
                            ['choice_text' => "Il durcit", 'is_correct' => false],
                            ['choice_text' => "Il se transforme en granite", 'is_correct' => false],
                            ['choice_text' => "Il se dissout lentement", 'is_correct' => true],
                            ['choice_text' => "Il se transforme en quartz", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un feldspath exposé longtemps à l’eau de pluie s’altère. En quoi se transforme-t-il le plus souvent ?",
                        'explanation' => "Les feldspaths réagissent avec l’eau et se transforment en argiles, des minéraux stables à la surface.",
                        'choices' => [
                            ['choice_text' => "En halite", 'is_correct' => false],
                            ['choice_text' => "En calcite", 'is_correct' => false],
                            ['choice_text' => "En graphite", 'is_correct' => false],
                            ['choice_text' => "En argile", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quel enchaînement décrit le devenir d’une roche exposée à la surface ?",
                        'explanation' => "La roche s’altère d’abord, ses débris sont emportés, puis ils se déposent ailleurs.",
                        'choices' => [
                            ['choice_text' => "Dépôt, transport des débris, puis altération", 'is_correct' => false],
                            ['choice_text' => "Fusion, cristallisation, puis altération", 'is_correct' => false],
                            ['choice_text' => "Transport, métamorphisme, puis fusion", 'is_correct' => false],
                            ['choice_text' => "Altération, transport des débris, puis dépôt", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un grain de quartz naît dans un granite, est érodé, déposé dans un grès, puis enfoui et recristallisé. Que montre ce parcours ?",
                        'explanation' => "Un même minéral peut passer par plusieurs roches, au gré de l’érosion, du dépôt et du métamorphisme.",
                        'choices' => [
                            ['choice_text' => "Que le quartz change de formule à chaque étape", 'is_correct' => false],
                            ['choice_text' => "Que les minéraux disparaissent après leur formation", 'is_correct' => false],
                            ['choice_text' => "Que les minéraux sont recyclés au fil du cycle géologique", 'is_correct' => true],
                            ['choice_text' => "Que seul le granite peut contenir du quartz", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une pyrite exposée à l’air humide se couvre peu à peu de rouille orangée. Quel processus est en cause ?",
                        'explanation' => "Au contact de l’air et de l’eau, le fer de la pyrite s’oxyde et forme des oxydes de fer de couleur rouille.",
                        'choices' => [
                            ['choice_text' => "La cristallisation d’un magma en profondeur", 'is_correct' => false],
                            ['choice_text' => "L’oxydation du fer par l’oxygène et l’eau", 'is_correct' => true],
                            ['choice_text' => "Le métamorphisme de la pyrite en profondeur", 'is_correct' => false],
                            ['choice_text' => "L’évaporation de l’eau salée en surface", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Minéraux, minerais et usages",
                'description' => "Relier quelques minéraux et minerais à leurs propriétés et à leurs usages courants.",
                'duration' => 21,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Un outil de forage porte des pointes en diamant. Quelle propriété du diamant est exploitée ?",
                        'explanation' => "Le diamant, 10 sur l’échelle de Mohs, raye tous les autres minéraux : idéal pour couper et forer.",
                        'choices' => [
                            ['choice_text' => "Sa dureté exceptionnelle", 'is_correct' => true],
                            ['choice_text' => "Sa forte densité", 'is_correct' => false],
                            ['choice_text' => "Sa conductivité électrique", 'is_correct' => false],
                            ['choice_text' => "Son éclat vitreux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle industrie consomme énormément de calcaire ?",
                        'explanation' => "Le carbonate de calcium du calcaire est la matière première de la chaux et du ciment.",
                        'choices' => [
                            ['choice_text' => "La fabrication de l’essence et du gazole", 'is_correct' => false],
                            ['choice_text' => "La production d’électricité nucléaire", 'is_correct' => false],
                            ['choice_text' => "La fabrication du ciment et de la chaux", 'is_correct' => true],
                            ['choice_text' => "La fabrication de l’aluminium", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que produit-on à partir de la halite ?",
                        'explanation' => "La halite est du chlorure de sodium, c’est-à-dire du sel de cuisine.",
                        'choices' => [
                            ['choice_text' => "Du fer métallique brut", 'is_correct' => false],
                            ['choice_text' => "Du plâtre", 'is_correct' => false],
                            ['choice_text' => "Du ciment", 'is_correct' => false],
                            ['choice_text' => "Du sel de cuisine", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "De quel métal l’hématite est-elle un minerai important ?",
                        'explanation' => "L’hématite (Fe₂O₃) contient beaucoup de fer ; on la traite pour fabriquer l’acier.",
                        'choices' => [
                            ['choice_text' => "Le cuivre", 'is_correct' => false],
                            ['choice_text' => "Le fer", 'is_correct' => true],
                            ['choice_text' => "L’aluminium", 'is_correct' => false],
                            ['choice_text' => "Le plomb", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Qu’est-ce qui permet au graphite d’écrire sur le papier ?",
                        'explanation' => "Le graphite est tendre et formé de feuillets qui se détachent aisément, laissant une trace de carbone sur le papier.",
                        'choices' => [
                            ['choice_text' => "Sa grande dureté, qui grave le papier", 'is_correct' => false],
                            ['choice_text' => "Sa dissolution dans l’encre", 'is_correct' => false],
                            ['choice_text' => "Sa couleur noire, qui teint les fibres", 'is_correct' => false],
                            ['choice_text' => "Ses feuillets glissent et laissent des particules sur le papier", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Le sable de quartz est la matière première principale de quel matériau ?",
                        'explanation' => "Fondu avec d’autres ingrédients, le sable de quartz (SiO₂) donne le verre.",
                        'choices' => [
                            ['choice_text' => "Du verre", 'is_correct' => true],
                            ['choice_text' => "Du plâtre", 'is_correct' => false],
                            ['choice_text' => "De l’acier", 'is_correct' => false],
                            ['choice_text' => "Du sel de table", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Qu’est-ce qu’un minerai ?",
                        'explanation' => "Un minerai est un matériau dont on peut extraire une substance utile, un métal par exemple, de façon rentable.",
                        'choices' => [
                            ['choice_text' => "Un cristal pur et transparent de grande valeur", 'is_correct' => false],
                            ['choice_text' => "Un minéral riche en fer destiné à la sidérurgie", 'is_correct' => false],
                            ['choice_text' => "Un matériau dont on tire une substance utile, avec profit", 'is_correct' => true],
                            ['choice_text' => "Une roche qu’on laisse sur place faute d’intérêt", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle propriété rend le talc utile dans les poudres et les peintures ?",
                        'explanation' => "Le talc est le minéral le plus tendre : sa poudre glisse, ce qui sert dans les cosmétiques, les peintures et les papiers.",
                        'choices' => [
                            ['choice_text' => "Sa grande dureté, utile pour abraser", 'is_correct' => false],
                            ['choice_text' => "Son magnétisme, qui attire la poudre", 'is_correct' => false],
                            ['choice_text' => "Sa tendreté et son toucher gras", 'is_correct' => true],
                            ['choice_text' => "Sa solubilité dans l’eau, qui la dilue", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel impact paysager une grande mine à ciel ouvert peut-elle avoir ?",
                        'explanation' => "Extraire le minerai oblige à creuser et à déplacer d’énormes volumes de roche, qu’on entasse en terrils.",
                        'choices' => [
                            ['choice_text' => "Un paysage presque inchangé après l’extraction", 'is_correct' => false],
                            ['choice_text' => "Un grand creusement et des tas de roches", 'is_correct' => true],
                            ['choice_text' => "Un sol plus fertile qu’avant autour de la mine", 'is_correct' => false],
                            ['choice_text' => "Une baisse du niveau de la mer voisine", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pour fabriquer une meule qui polit les surfaces, quel minéral convient le mieux ?",
                        'explanation' => "Le corindon (dureté 9) sert d’abrasif ; le talc, le gypse et la calcite sont bien trop tendres.",
                        'choices' => [
                            ['choice_text' => "Le talc", 'is_correct' => false],
                            ['choice_text' => "Le gypse", 'is_correct' => false],
                            ['choice_text' => "La calcite", 'is_correct' => false],
                            ['choice_text' => "Le corindon", 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Synthèse de minéralogie débutant",
                'description' => "Mobiliser plusieurs notions de minéralogie pour interpréter des observations et résoudre de petits cas d’identification.",
                'duration' => 28,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Rania a un échantillon incolore, de dureté 7, à éclat vitreux et dont la cassure forme des surfaces courbes. Quel minéral propose-t-elle ?",
                        'explanation' => "Dureté 7, éclat vitreux et cassure en surfaces courbes (fracture conchoïdale) : c’est le quartz.",
                        'choices' => [
                            ['choice_text' => "La calcite", 'is_correct' => false],
                            ['choice_text' => "Le talc", 'is_correct' => false],
                            ['choice_text' => "La halite", 'is_correct' => false],
                            ['choice_text' => "Le quartz", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un cristal incolore se raye à l’ongle, ne mousse pas à l’acide dilué et se divise en lames. Quel minéral est probable ?",
                        'explanation' => "Le gypse est très tendre (dureté 2), ne réagit pas à l’acide et se clive en lames ; la calcite, elle, ferait effervescence.",
                        'choices' => [
                            ['choice_text' => "Le gypse", 'is_correct' => true],
                            ['choice_text' => "La calcite", 'is_correct' => false],
                            ['choice_text' => "Le quartz", 'is_correct' => false],
                            ['choice_text' => "La halite", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une pierre de façade se couvre de petits creux après la pluie, et une goutte d’acide la fait mousser. Quel minéral la compose surtout ?",
                        'explanation' => "La calcite est attaquée par l’eau acide et fait effervescence avec un acide dilué : les deux indices pointent vers elle.",
                        'choices' => [
                            ['choice_text' => "Le quartz", 'is_correct' => false],
                            ['choice_text' => "La calcite", 'is_correct' => true],
                            ['choice_text' => "Le feldspath", 'is_correct' => false],
                            ['choice_text' => "Le mica", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un élève affirme : « Tous les cristaux transparents sont du quartz. » Que lui répondre ?",
                        'explanation' => "La transparence est partagée par plusieurs minéraux, comme la halite, le gypse ou la calcite : elle ne suffit pas à identifier le quartz.",
                        'choices' => [
                            ['choice_text' => "Oui : la transparence identifie le quartz", 'is_correct' => false],
                            ['choice_text' => "Oui : les autres minéraux sont opaques", 'is_correct' => false],
                            ['choice_text' => "Non : d’autres minéraux, comme la halite ou le gypse, sont transparents", 'is_correct' => true],
                            ['choice_text' => "Non : la transparence dépend de la couleur du minéral", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "L’hématite contient environ 70 % de fer en masse. Quelle masse de fer renferme un échantillon pur de 450 g ?",
                        'explanation' => "On calcule 450 g × 0,70 = 315 g de fer.",
                        'choices' => [
                            ['choice_text' => "135 g", 'is_correct' => false],
                            ['choice_text' => "315 g", 'is_correct' => true],
                            ['choice_text' => "380 g", 'is_correct' => false],
                            ['choice_text' => "630 g", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un minéral raye la calcite (dureté 3) mais est rayé par le quartz (dureté 7). Sa dureté est...",
                        'explanation' => "Il raye la calcite, donc sa dureté dépasse 3 ; le quartz le raye, donc elle reste inférieure à 7.",
                        'choices' => [
                            ['choice_text' => "inférieure à 3", 'is_correct' => false],
                            ['choice_text' => "supérieure à 7", 'is_correct' => false],
                            ['choice_text' => "comprise entre 3 et 7", 'is_correct' => true],
                            ['choice_text' => "égale à 3, comme celle de la calcite", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux cristaux ont le même volume : une pyrite et un quartz. Lequel pèse le plus ?",
                        'explanation' => "La pyrite a une densité voisine de 5 contre 2,65 pour le quartz : à volume égal, elle est presque deux fois plus lourde.",
                        'choices' => [
                            ['choice_text' => "Le quartz, de densité voisine de 5", 'is_correct' => false],
                            ['choice_text' => "Les deux pèsent autant, à volume égal", 'is_correct' => false],
                            ['choice_text' => "Le quartz, parce qu’il est plus dur", 'is_correct' => false],
                            ['choice_text' => "La pyrite, de densité voisine de 5", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quelle observation est la plus utile pour distinguer le quartz de la calcite ?",
                        'explanation' => "Le quartz raye le verre et ne mousse pas à l’acide ; la calcite se raye à l’acier et fait effervescence.",
                        'choices' => [
                            ['choice_text' => "La dureté et la réaction à un acide dilué", 'is_correct' => true],
                            ['choice_text' => "La couleur observée à la lumière du jour", 'is_correct' => false],
                            ['choice_text' => "La taille des cristaux dans l’échantillon", 'is_correct' => false],
                            ['choice_text' => "La forme de l’échantillon dans la main", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Maya veut faire cristalliser du sel chez elle à partir d’eau salée. Que doit-elle faire ?",
                        'explanation' => "En s’évaporant lentement, l’eau laisse le sel se déposer en cristaux bien formés.",
                        'choices' => [
                            ['choice_text' => "La filtrer plusieurs fois", 'is_correct' => false],
                            ['choice_text' => "L’agiter vigoureusement sans arrêt", 'is_correct' => false],
                            ['choice_text' => "La laisser s’évaporer lentement", 'is_correct' => true],
                            ['choice_text' => "L’acidifier avec du vinaigre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment identifier de façon fiable un minéral inconnu ?",
                        'explanation' => "Un seul indice peut être partagé par plusieurs minéraux ; on identifie en croisant plusieurs propriétés.",
                        'choices' => [
                            ['choice_text' => "En croisant éclat, dureté, trace et clivage", 'is_correct' => true],
                            ['choice_text' => "En retenant la couleur, plus fiable que les autres indices", 'is_correct' => false],
                            ['choice_text' => "En se basant sur la forme générale de l’échantillon", 'is_correct' => false],
                            ['choice_text' => "En comparant son poids à celui d’un autre échantillon", 'is_correct' => false],
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