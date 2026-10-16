<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BotanyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'botany')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la botanique et organisation de la plante',
                'description' => 'Quiz débutant sur les grandes parties de la plante, leur organisation et quelques fonctions essentielles.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Après avoir arraché un plant de tomate, Hamza observe de nombreuses racines fines couvertes de petits poils. À quoi servent surtout ces racines ?',
                        'choices' => [
                            ['choice_text' => 'à capter la lumière du soleil pour la plante', 'is_correct' => false],
                            ['choice_text' => 'à produire les fleurs et les fruits de la plante', 'is_correct' => false],
                            ['choice_text' => 'à absorber l’eau et les sels minéraux du sol', 'is_correct' => true],
                            ['choice_text' => 'à fabriquer le sucre dont la plante a besoin', 'is_correct' => false],
                        ],
                        'explanation' => 'Les racines, et surtout leurs poils fins, puisent dans le sol l’eau et les sels minéraux dont la plante a besoin.',
                    ],
                    [
                        'question' => 'Sur la tige d’un rosier, de petits renflements marquent les endroits d’où partent les feuilles. Comment les appelle-t-on ?',
                        'choices' => [
                            ['choice_text' => 'les nervures', 'is_correct' => false],
                            ['choice_text' => 'les nœuds', 'is_correct' => true],
                            ['choice_text' => 'les stomates', 'is_correct' => false],
                            ['choice_text' => 'les sépales', 'is_correct' => false],
                        ],
                        'explanation' => 'Les nœuds sont les points de la tige où s’attachent les feuilles ; la partie située entre deux nœuds s’appelle un entre-nœud.',
                    ],
                    [
                        'question' => 'Sur le rebord d’une fenêtre, un plant de haricot se penche vers la vitre. Comment nomme-t-on cette croissance orientée par la lumière ?',
                        'choices' => [
                            ['choice_text' => 'le phototropisme', 'is_correct' => true],
                            ['choice_text' => 'la germination', 'is_correct' => false],
                            ['choice_text' => 'la transpiration', 'is_correct' => false],
                            ['choice_text' => 'la pollinisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le phototropisme oriente la croissance de la tige vers la lumière, ce qui aide la plante à mieux capter l’énergie dont elle a besoin.',
                    ],
                    [
                        'question' => 'Dans son manuel, Karim lit que les organes végétatifs d’une plante à fleurs assurent sa croissance et sa nutrition. Lesquels sont-ils ?',
                        'choices' => [
                            ['choice_text' => 'les fleurs, les fruits et les graines', 'is_correct' => false],
                            ['choice_text' => 'les pétales, les sépales et les étamines', 'is_correct' => false],
                            ['choice_text' => 'les ovules, le pollen et les fruits', 'is_correct' => false],
                            ['choice_text' => 'les racines, la tige et les feuilles', 'is_correct' => true],
                        ],
                        'explanation' => 'Racines, tige et feuilles nourrissent la plante et la font grandir ; fleurs, fruits et graines servent à la reproduction.',
                    ],
                    [
                        'question' => 'Les feuilles du figuier sont larges et plates. Quel avantage cela donne-t-il à la plante ?',
                        'choices' => [
                            ['choice_text' => 'elles absorbent plus d’eau que les racines n’en prélèvent', 'is_correct' => false],
                            ['choice_text' => 'elles captent plus de lumière pour la photosynthèse', 'is_correct' => true],
                            ['choice_text' => 'elles stockent plus de graines pour l’hiver', 'is_correct' => false],
                            ['choice_text' => 'elles évitent de perdre de l’eau par la chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Une grande surface intercepte davantage de lumière, ce qui favorise la photosynthèse.',
                    ],
                    [
                        'question' => 'Hind prétend qu’une plante n’a pas besoin d’eau pour fabriquer sa matière, puisqu’elle se nourrit de lumière. Que peut-on lui répondre ?',
                        'choices' => [
                            ['choice_text' => 'L’eau est l’une des matières premières de la photosynthèse', 'is_correct' => true],
                            ['choice_text' => 'Elle a raison : la lumière et l’air suffisent à tout fabriquer', 'is_correct' => false],
                            ['choice_text' => 'Elle a raison : les sels minéraux suffisent à fabriquer la matière', 'is_correct' => false],
                            ['choice_text' => 'Elle a tort : l’eau sert à fabriquer les graines de la plante', 'is_correct' => false],
                        ],
                        'explanation' => 'La plante fabrique ses sucres à partir de l’eau, du CO₂ et de la lumière ; sans eau, la photosynthèse ne peut pas se faire.',
                    ],
                    [
                        'question' => 'En cueillant une feuille de figuier, Anas garde entre ses doigts la petite tige qui la rattachait à la branche. Comment s’appelle-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'le sépale', 'is_correct' => false],
                            ['choice_text' => 'l’étamine', 'is_correct' => false],
                            ['choice_text' => 'le pétiole', 'is_correct' => true],
                            ['choice_text' => 'le rhizome', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pétiole relie le limbe de la feuille à la tige et sert de passage aux liquides.',
                    ],
                    [
                        'question' => 'Samir retire toutes les feuilles d’un jeune plant de tomate qu’il laisse en pleine lumière. Quelle fonction est la plus perturbée ?',
                        'choices' => [
                            ['choice_text' => 'l’absorption des sels minéraux par les racines', 'is_correct' => false],
                            ['choice_text' => 'la germination des graines enfouies dans le sol', 'is_correct' => false],
                            ['choice_text' => 'la formation du pollen dans les fleurs', 'is_correct' => false],
                            ['choice_text' => 'la photosynthèse, qui fabrique les sucres', 'is_correct' => true],
                        ],
                        'explanation' => 'Les feuilles sont les principaux organes de la photosynthèse, grâce à leurs cellules riches en chlorophylle ; sans elles, la plante ne fabrique presque plus de sucres.',
                    ],
                    [
                        'question' => 'Au printemps, Imane voit s’ouvrir un bourgeon sur une branche de figuier. Que contient-il en général ?',
                        'choices' => [
                            ['choice_text' => 'de jeunes feuilles ou de jeunes fleurs encore repliées', 'is_correct' => true],
                            ['choice_text' => 'des graines mûres déjà prêtes à germer dès la fin de l’hiver', 'is_correct' => false],
                            ['choice_text' => 'des racines prêtes à pénétrer dans le sol', 'is_correct' => false],
                            ['choice_text' => 'des fruits presque mûrs encore fermés', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bourgeon protège de jeunes feuilles ou de jeunes fleurs, qui se déplient quand les conditions deviennent favorables.',
                    ],
                    [
                        'question' => 'Quel est le rôle de la tige d’un arbre comme l’olivier ?',
                        'choices' => [
                            ['choice_text' => 'absorber l’eau directement dans le sol', 'is_correct' => false],
                            ['choice_text' => 'soutenir les feuilles et faire circuler les liquides', 'is_correct' => true],
                            ['choice_text' => 'capter le CO₂ de l’air pour la plante', 'is_correct' => false],
                            ['choice_text' => 'produire les graines de l’arbre', 'is_correct' => false],
                        ],
                        'explanation' => 'La tige porte les feuilles et les fleurs, et renferme les conduits qui relient les racines aux parties aériennes.',
                    ],
                ],
            ],
            [
                'title' => 'Cellule végétale et tissus',
                'description' => 'Quiz sur les caractéristiques des cellules végétales, les chloroplastes, la paroi et les principaux tissus.',
                'duration' => 15,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Au microscope, Rim voit de petits grains verts dans les cellules d’une feuille d’élodée. Quelles structures sont-ils ?',
                        'choices' => [
                            ['choice_text' => 'des noyaux, qui contiennent le matériel génétique', 'is_correct' => false],
                            ['choice_text' => 'des vacuoles, qui stockent l’eau de la cellule', 'is_correct' => false],
                            ['choice_text' => 'des parois, qui protègent la cellule de l’extérieur', 'is_correct' => false],
                            ['choice_text' => 'des chloroplastes, qui contiennent la chlorophylle', 'is_correct' => true],
                        ],
                        'explanation' => 'Les grains verts sont des chloroplastes : ils contiennent la chlorophylle et sont le siège de la photosynthèse.',
                    ],
                    [
                        'question' => 'Une cellule d’oignon est entourée d’une enveloppe rigide en cellulose, en plus de sa membrane. À quoi sert cette paroi ?',
                        'choices' => [
                            ['choice_text' => 'à protéger la cellule et à lui donner sa forme', 'is_correct' => true],
                            ['choice_text' => 'à fabriquer l’énergie dont la cellule a besoin', 'is_correct' => false],
                            ['choice_text' => 'à stocker les réserves d’eau de la cellule', 'is_correct' => false],
                            ['choice_text' => 'à commander l’activité du noyau de la cellule', 'is_correct' => false],
                        ],
                        'explanation' => 'La paroi, riche en cellulose, protège la cellule et lui donne sa forme ; les cellules animales n’en ont pas.',
                    ],
                    [
                        'question' => 'Dans une cellule végétale adulte, une grande poche remplie d’eau et de substances dissoutes occupe souvent le centre. Comment la nomme-t-on ?',
                        'choices' => [
                            ['choice_text' => 'le noyau', 'is_correct' => false],
                            ['choice_text' => 'le chloroplaste', 'is_correct' => false],
                            ['choice_text' => 'la vacuole', 'is_correct' => true],
                            ['choice_text' => 'le cytoplasme', 'is_correct' => false],
                        ],
                        'explanation' => 'La vacuole stocke l’eau et diverses substances ; en se remplissant, elle gonfle la cellule et la rend ferme.',
                    ],
                    [
                        'question' => 'Les feuilles d’un jeune citronnier fabriquent des sucres. Quel tissu les transporte vers les racines et les fruits ?',
                        'choices' => [
                            ['choice_text' => 'le xylème', 'is_correct' => false],
                            ['choice_text' => 'le phloème', 'is_correct' => true],
                            ['choice_text' => 'l’épiderme', 'is_correct' => false],
                            ['choice_text' => 'le méristème', 'is_correct' => false],
                        ],
                        'explanation' => 'Le phloème distribue les sucres fabriqués par les feuilles vers les organes qui en ont besoin ; le xylème, lui, conduit l’eau.',
                    ],
                    [
                        'question' => 'À l’extrémité d’une racine de lentille, des cellules se divisent sans cesse et font allonger la racine. Dans quel tissu se trouvent-elles ?',
                        'choices' => [
                            ['choice_text' => 'dans l’épiderme de la racine', 'is_correct' => false],
                            ['choice_text' => 'dans le xylème de la racine', 'is_correct' => false],
                            ['choice_text' => 'dans le liège de l’écorce', 'is_correct' => false],
                            ['choice_text' => 'dans un méristème', 'is_correct' => true],
                        ],
                        'explanation' => 'Les méristèmes sont des zones où les cellules se multiplient, ce qui fait croître la plante.',
                    ],
                    [
                        'question' => 'Quel tissu forme la peau externe d’une jeune feuille et la protège ?',
                        'choices' => [
                            ['choice_text' => 'le xylème', 'is_correct' => false],
                            ['choice_text' => 'le phloème', 'is_correct' => false],
                            ['choice_text' => 'l’épiderme', 'is_correct' => true],
                            ['choice_text' => 'le méristème', 'is_correct' => false],
                        ],
                        'explanation' => 'L’épiderme recouvre la feuille d’une couche protectrice, souvent revêtue de cuticule, qui limite les pertes d’eau.',
                    ],
                    [
                        'question' => 'Au microscope, Nora compare deux cellules : A a une paroi rigide et des chloroplastes, B n’a ni l’un ni l’autre. Que peut-elle en conclure ?',
                        'choices' => [
                            ['choice_text' => 'A est une cellule végétale et B une cellule animale', 'is_correct' => true],
                            ['choice_text' => 'A est une cellule animale et B une cellule végétale', 'is_correct' => false],
                            ['choice_text' => 'A et B sont deux cellules animales', 'is_correct' => false],
                            ['choice_text' => 'A et B sont deux cellules végétales', 'is_correct' => false],
                        ],
                        'explanation' => 'La paroi rigide et les chloroplastes sont des signes d’une cellule végétale ; les cellules animales n’en possèdent pas.',
                    ],
                    [
                        'question' => 'Un plant de menthe oublié une semaine sans eau s’affaisse. Que s’est-il passé dans ses cellules ?',
                        'choices' => [
                            ['choice_text' => 'elles ont fabriqué trop de chlorophylle', 'is_correct' => false],
                            ['choice_text' => 'elles se sont divisées trop vite et ont épuisé leurs réserves', 'is_correct' => false],
                            ['choice_text' => 'leur noyau a disparu au fil des jours', 'is_correct' => false],
                            ['choice_text' => 'elles ont perdu de l’eau et sont devenues moins gonflées', 'is_correct' => true],
                        ],
                        'explanation' => 'Sans eau, les cellules se dégonflent et les tiges herbacées perdent leur fermeté : la plante flétrit.',
                    ],
                    [
                        'question' => 'Sous le microscope, Karim compte 12 cellules dans une rangée de la feuille et repère 5 rangées identiques. Combien de cellules a-t-il comptées au total ?',
                        'choices' => [
                            ['choice_text' => '17 cellules', 'is_correct' => false],
                            ['choice_text' => '60 cellules', 'is_correct' => true],
                            ['choice_text' => '7 cellules', 'is_correct' => false],
                            ['choice_text' => '120 cellules', 'is_correct' => false],
                        ],
                        'explanation' => 'On multiplie : 12 × 5 = 60 cellules.',
                    ],
                    [
                        'question' => 'Quelle structure, située sous la paroi, contrôle ce qui entre et sort de la cellule végétale ?',
                        'choices' => [
                            ['choice_text' => 'la cuticule', 'is_correct' => false],
                            ['choice_text' => 'la vacuole', 'is_correct' => false],
                            ['choice_text' => 'la membrane plasmique', 'is_correct' => true],
                            ['choice_text' => 'le chloroplaste', 'is_correct' => false],
                        ],
                        'explanation' => 'Sous la paroi, la membrane plasmique laisse passer certaines substances et en retient d’autres.',
                    ],
                ],
            ],
            [
                'title' => 'Photosynthèse et nutrition minérale',
                'description' => 'Quiz sur la photosynthèse, la lumière, le dioxyde de carbone et les besoins minéraux des plantes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelles sont les deux matières premières que la feuille utilise, avec la lumière, pour fabriquer des sucres ?',
                        'choices' => [
                            ['choice_text' => 'le dioxyde de carbone et l’eau', 'is_correct' => true],
                            ['choice_text' => 'le dioxygène et le glucose', 'is_correct' => false],
                            ['choice_text' => 'l’azote de l’air et le sel du sol dissous', 'is_correct' => false],
                            ['choice_text' => 'le dioxygène et l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'La photosynthèse utilise le CO₂ de l’air et l’eau puisée par les racines ; la lumière fournit l’énergie.',
                    ],
                    [
                        'question' => 'Une feuille éclairée fabrique des sucres. Quel gaz rejette-t-elle en même temps ?',
                        'choices' => [
                            ['choice_text' => 'du dioxyde de carbone', 'is_correct' => false],
                            ['choice_text' => 'de l’azote', 'is_correct' => false],
                            ['choice_text' => 'du dioxygène', 'is_correct' => true],
                            ['choice_text' => 'de l’hydrogène', 'is_correct' => false],
                        ],
                        'explanation' => 'Les feuilles libèrent du dioxygène (O₂) pendant la photosynthèse.',
                    ],
                    [
                        'question' => 'Dans une serre fermée, Salma constate que ses poivrons manquent de CO₂ alors qu’ils reçoivent lumière et eau. Quelle conséquence est probable ?',
                        'choices' => [
                            ['choice_text' => 'la photosynthèse s’accélère malgré le manque', 'is_correct' => false],
                            ['choice_text' => 'la photosynthèse ralentit faute de matière première', 'is_correct' => true],
                            ['choice_text' => 'les racines absorbent plus de sels minéraux', 'is_correct' => false],
                            ['choice_text' => 'les feuilles deviennent plus grandes que d’habitude', 'is_correct' => false],
                        ],
                        'explanation' => 'Le CO₂ est une matière première de la photosynthèse : s’il manque, la production de sucres ralentit même avec assez de lumière et d’eau.',
                    ],
                    [
                        'question' => 'Dans l’obscurité d’un placard, une pomme de terre germe : ses tiges sont longues, pâles et fragiles. Quelle explication est la bonne ?',
                        'choices' => [
                            ['choice_text' => 'elle reçoit trop d’eau dans le tubercule, ce qui dilue ses pigments', 'is_correct' => false],
                            ['choice_text' => 'elle manque de dioxygène, ce qui décolore ses tiges', 'is_correct' => false],
                            ['choice_text' => 'elle absorbe trop de sels minéraux dans le tubercule', 'is_correct' => false],
                            ['choice_text' => 'sans lumière, la plante ne fabrique pas de chlorophylle ni de sucres', 'is_correct' => true],
                        ],
                        'explanation' => 'Privé de lumière, le germe ne fabrique pas de chlorophylle et vit sur les réserves du tubercule : il s’allonge, pâle et frêle.',
                    ],
                    [
                        'question' => 'Les feuilles des courgettes d’Omar jaunissent et la plante pousse peu. Il soupçonne un manque d’azote. À quoi cet élément sert-il surtout ?',
                        'choices' => [
                            ['choice_text' => 'à capter directement la lumière du soleil', 'is_correct' => false],
                            ['choice_text' => 'à former la paroi en cellulose des cellules', 'is_correct' => false],
                            ['choice_text' => 'à fabriquer les protéines et d’autres molécules de la plante', 'is_correct' => true],
                            ['choice_text' => 'à ouvrir et à fermer les stomates des feuilles', 'is_correct' => false],
                        ],
                        'explanation' => 'L’azote entre dans la composition des protéines et de la chlorophylle ; en manquer ralentit la croissance et jaunit les feuilles.',
                    ],
                    [
                        'question' => 'Un engrais contient du magnésium. Quel rôle joue cet élément dans la feuille ?',
                        'choices' => [
                            ['choice_text' => 'il entre dans la composition de la chlorophylle', 'is_correct' => true],
                            ['choice_text' => 'il forme la cellulose des parois cellulaires', 'is_correct' => false],
                            ['choice_text' => 'il remplace le CO₂ dans la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'il fixe le dioxygène de l’air dans les cellules', 'is_correct' => false],
                        ],
                        'explanation' => 'Le magnésium se trouve au centre de la molécule de chlorophylle ; sans lui, la feuille jaunit.',
                    ],
                    [
                        'question' => 'Dans une serre, on double la quantité de CO₂ autour d’un plant de concombre bien éclairé et bien arrosé. Que peut-on attendre ?',
                        'choices' => [
                            ['choice_text' => 'une photosynthèse arrêtée par l’excès de CO₂', 'is_correct' => false],
                            ['choice_text' => 'une absorption d’eau bloquée dans les racines', 'is_correct' => false],
                            ['choice_text' => 'une chute de la production de dioxygène', 'is_correct' => false],
                            ['choice_text' => 'une photosynthèse plus rapide', 'is_correct' => true],
                        ],
                        'explanation' => 'Quand le CO₂ limite la photosynthèse, en ajouter accélère la production de sucres, jusqu’à ce qu’un autre facteur prenne le relais.',
                    ],
                    [
                        'question' => 'Que fait une plante verte la nuit, en l’absence de lumière ?',
                        'choices' => [
                            ['choice_text' => 'elle fait de la photosynthèse mais ne respire pas', 'is_correct' => false],
                            ['choice_text' => 'elle respire mais ne fait pas de photosynthèse', 'is_correct' => true],
                            ['choice_text' => 'elle ne fait ni photosynthèse ni respiration', 'is_correct' => false],
                            ['choice_text' => 'elle respire pour fabriquer du dioxygène', 'is_correct' => false],
                        ],
                        'explanation' => 'Ses cellules respirent en continu pour obtenir de l’énergie ; la photosynthèse, elle, s’arrête quand la lumière manque.',
                    ],
                    [
                        'question' => 'Pendant la journée, une feuille fabrique 9 mg de sucres et en consomme 4 mg pour respirer. Quelle quantité reste disponible pour la croissance ?',
                        'choices' => [
                            ['choice_text' => '13 mg', 'is_correct' => false],
                            ['choice_text' => '4 mg', 'is_correct' => false],
                            ['choice_text' => '5 mg', 'is_correct' => true],
                            ['choice_text' => '36 mg', 'is_correct' => false],
                        ],
                        'explanation' => 'On soustrait ce que la respiration consomme : 9 − 4 = 5 mg de sucres disponibles.',
                    ],
                    [
                        'question' => 'Le grand-père de Yassine dit qu’un arbre grossit en mangeant la terre. Que répond la botanique ?',
                        'choices' => [
                            ['choice_text' => 'la matière de l’arbre vient surtout du CO₂ de l’air et de l’eau', 'is_correct' => true],
                            ['choice_text' => 'il a raison : la terre fournit presque toute la matière de l’arbre', 'is_correct' => false],
                            ['choice_text' => 'il a raison : l’arbre grossit en absorbant la terre par ses racines', 'is_correct' => false],
                            ['choice_text' => 'il a tort : l’arbre grossit surtout grâce aux sels minéraux du sol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le carbone des sucres vient du CO₂ de l’air ; les sels minéraux du sol sont nécessaires, mais ils ne forment qu’une petite part de la matière.',
                    ],
                ],
            ],
            [
                'title' => 'Racines, tiges et circulation de la sève',
                'description' => 'Quiz sur l’absorption racinaire, le transport dans le xylème et le phloème, ainsi que les mouvements d’eau dans la plante.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Sous la loupe, une jeune racine de blé est couverte de minuscules poils près de son extrémité. Quel est leur rôle ?',
                        'choices' => [
                            ['choice_text' => 'capter la lumière dont la plante a besoin', 'is_correct' => false],
                            ['choice_text' => 'augmenter la surface d’absorption de l’eau et des sels', 'is_correct' => true],
                            ['choice_text' => 'attirer les insectes pollinisateurs vers la racine', 'is_correct' => false],
                            ['choice_text' => 'protéger la racine contre le froid et le gel du sol en hiver', 'is_correct' => false],
                        ],
                        'explanation' => 'Les poils absorbants multiplient la surface de contact avec le sol, ce qui facilite l’entrée de l’eau et des sels minéraux.',
                    ],
                    [
                        'question' => 'Une branche de céleri est plongée dans de l’eau colorée. Après quelques heures, de fins traits colorés apparaissent dans la tige. Que montre cette expérience ?',
                        'choices' => [
                            ['choice_text' => 'l’eau descend des feuilles vers les racines par les vaisseaux du phloème', 'is_correct' => false],
                            ['choice_text' => 'l’eau reste dans l’épiderme sans circuler', 'is_correct' => false],
                            ['choice_text' => 'le colorant est transformé en sucre par les feuilles', 'is_correct' => false],
                            ['choice_text' => 'l’eau monte dans la tige par de fins conduits, les vaisseaux du xylème', 'is_correct' => true],
                        ],
                        'explanation' => 'Les traits colorés dessinent les vaisseaux du xylème : c’est par eux que l’eau monte des racines vers les feuilles.',
                    ],
                    [
                        'question' => 'En été, un olivier perd beaucoup d’eau par ses feuilles. Quel effet cette transpiration a-t-elle sur l’eau contenue dans la plante ?',
                        'choices' => [
                            ['choice_text' => 'elle pousse l’eau vers les racines', 'is_correct' => false],
                            ['choice_text' => 'elle fabrique les sucres dans le xylème', 'is_correct' => false],
                            ['choice_text' => 'elle aide à faire monter l’eau depuis les racines', 'is_correct' => true],
                            ['choice_text' => 'elle bouche les conduits de la tige', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau qui s’évapore des feuilles est remplacée par de l’eau qui monte depuis les racines : la transpiration agit comme une pompe.',
                    ],
                    [
                        'question' => 'Que transporte surtout la sève élaborée qui circule dans le phloème ?',
                        'choices' => [
                            ['choice_text' => 'des sucres fabriqués par les feuilles', 'is_correct' => true],
                            ['choice_text' => 'de l’eau venant des racines', 'is_correct' => false],
                            ['choice_text' => 'du dioxygène libéré par les feuilles', 'is_correct' => false],
                            ['choice_text' => 'du pollen vers les fleurs', 'is_correct' => false],
                        ],
                        'explanation' => 'La sève élaborée distribue les sucres produits par la photosynthèse vers les racines, les fruits et les zones de croissance.',
                    ],
                    [
                        'question' => 'Un jeune arbre a perdu une bande d’écorce sur tout le tour de son tronc. Que risque-t-il ?',
                        'choices' => [
                            ['choice_text' => 'mourir aussitôt, car l’eau ne monte plus du tout dans le tronc', 'is_correct' => false],
                            ['choice_text' => 'mieux grandir, car l’eau n’est plus partagée', 'is_correct' => false],
                            ['choice_text' => 'fabriquer plus de fleurs pour compenser la perte', 'is_correct' => false],
                            ['choice_text' => 'mourir à terme, car les sucres n’arrivent plus aux racines', 'is_correct' => true],
                        ],
                        'explanation' => 'Le phloème se trouve sous l’écorce : sans lui, les sucres n’atteignent plus les racines, qui finissent par mourir. L’eau, elle, continue de monter par le xylème.',
                    ],
                    [
                        'question' => 'On enferme une branche feuillue dans un sac plastique transparent, par temps chaud. Au bout d’une heure, de la buée se forme à l’intérieur. D’où vient-elle ?',
                        'choices' => [
                            ['choice_text' => 'du CO₂ condensé sur le plastique', 'is_correct' => false],
                            ['choice_text' => 'de l’eau évaporée par les feuilles', 'is_correct' => true],
                            ['choice_text' => 'de la sève élaborée qui suinte des feuilles', 'is_correct' => false],
                            ['choice_text' => 'de l’eau de pluie restée sur la branche', 'is_correct' => false],
                        ],
                        'explanation' => 'Les feuilles perdent de la vapeur d’eau par transpiration ; elle se condense sur la paroi froide du sac.',
                    ],
                    [
                        'question' => 'Pendant une vague de chaleur, un figuier ferme en partie les stomates de ses feuilles. Quel est l’effet direct ?',
                        'choices' => [
                            ['choice_text' => 'la plante absorbe plus de sels minéraux', 'is_correct' => false],
                            ['choice_text' => 'la plante fabrique plus de sucres', 'is_correct' => false],
                            ['choice_text' => 'la plante perd moins d’eau', 'is_correct' => true],
                            ['choice_text' => 'la plante arrête d’absorber l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Des stomates fermés laissent moins de vapeur d’eau s’échapper, au prix d’une entrée de CO₂ réduite.',
                    ],
                    [
                        'question' => 'Un plant de maïs absorbe 250 mL d’eau par jour. Combien en absorbe-t-il en 6 jours, à ce rythme ?',
                        'choices' => [
                            ['choice_text' => '1 500 mL', 'is_correct' => true],
                            ['choice_text' => '256 mL', 'is_correct' => false],
                            ['choice_text' => '42 mL', 'is_correct' => false],
                            ['choice_text' => '15 000 mL', 'is_correct' => false],
                        ],
                        'explanation' => 'On multiplie : 250 × 6 = 1 500 mL, soit 1,5 L.',
                    ],
                    [
                        'question' => 'La racine principale de la carotte s’enfonce profondément, alors que le blé a de nombreuses racines fines et semblables. Comment nomme-t-on la racine de la carotte ?',
                        'choices' => [
                            ['choice_text' => 'une racine fasciculée', 'is_correct' => false],
                            ['choice_text' => 'une racine aérienne', 'is_correct' => false],
                            ['choice_text' => 'une racine adventive', 'is_correct' => false],
                            ['choice_text' => 'une racine pivotante', 'is_correct' => true],
                        ],
                        'explanation' => 'La racine pivotante forme un axe principal épais ; le blé, lui, a des racines fasciculées, en touffe.',
                    ],
                    [
                        'question' => 'La pomme de terre est une tige souterraine renflée. Quel est son rôle pour la plante ?',
                        'choices' => [
                            ['choice_text' => 'absorber l’eau comme le font les racines', 'is_correct' => false],
                            ['choice_text' => 'stocker des réserves et donner de nouvelles pousses', 'is_correct' => true],
                            ['choice_text' => 'capter la lumière à travers le sol', 'is_correct' => false],
                            ['choice_text' => 'produire les fleurs de la plante', 'is_correct' => false],
                        ],
                        'explanation' => 'Le tubercule met en réserve de l’amidon ; au printemps, ses bourgeons donnent de nouvelles tiges.',
                    ],
                ],
            ],
            [
                'title' => 'Feuille, stomates et échanges gazeux',
                'description' => 'Quiz débutant sur l’anatomie fonctionnelle de la feuille et les échanges de gaz avec l’environnement.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'En observant au microscope un fragment d’épiderme de feuille, Hamza voit de minuscules pores entourés de deux cellules en forme de haricot. Comment les appelle-t-on ?',
                        'choices' => [
                            ['choice_text' => 'des poils absorbants', 'is_correct' => false],
                            ['choice_text' => 'des nervures', 'is_correct' => false],
                            ['choice_text' => 'des vaisseaux', 'is_correct' => false],
                            ['choice_text' => 'des stomates', 'is_correct' => true],
                        ],
                        'explanation' => 'Les stomates sont des pores par lesquels la feuille échange des gaz avec l’air et laisse partir de la vapeur d’eau.',
                    ],
                    [
                        'question' => 'Qu’est-ce qui fait ouvrir ou fermer un stomate ?',
                        'choices' => [
                            ['choice_text' => 'les deux cellules de garde, qui se gonflent ou se dégonflent', 'is_correct' => true],
                            ['choice_text' => 'la couleur de la feuille et son âge, qui changent au cours de l’année', 'is_correct' => false],
                            ['choice_text' => 'la taille de la nervure principale', 'is_correct' => false],
                            ['choice_text' => 'la quantité de pollen dans l’air', 'is_correct' => false],
                        ],
                        'explanation' => 'En se gonflant d’eau, les cellules de garde s’écartent et ouvrent le pore ; en se dégonflant, elles le referment.',
                    ],
                    [
                        'question' => 'Par les stomates ouverts, le CO₂ de l’air entre dans la feuille. À quoi sert-il ?',
                        'choices' => [
                            ['choice_text' => 'à refroidir les cellules de la feuille', 'is_correct' => false],
                            ['choice_text' => 'à fournir le carbone qui sert à fabriquer des sucres', 'is_correct' => true],
                            ['choice_text' => 'à gonfler les cellules de garde', 'is_correct' => false],
                            ['choice_text' => 'à colorer la feuille en vert', 'is_correct' => false],
                        ],
                        'explanation' => 'Le carbone du CO₂ est fixé lors de la photosynthèse et devient un élément des sucres.',
                    ],
                    [
                        'question' => 'Une feuille de laurier est recouverte d’une couche cireuse brillante, la cuticule. Quelle est sa fonction principale ?',
                        'choices' => [
                            ['choice_text' => 'faciliter l’entrée du CO₂', 'is_correct' => false],
                            ['choice_text' => 'capter la lumière du soleil', 'is_correct' => false],
                            ['choice_text' => 'limiter les pertes d’eau', 'is_correct' => true],
                            ['choice_text' => 'absorber l’eau de pluie', 'is_correct' => false],
                        ],
                        'explanation' => 'La cuticule forme une barrière peu perméable qui réduit l’évaporation à travers la surface de la feuille.',
                    ],
                    [
                        'question' => 'Une feuille de figuier porte 120 stomates par mm². Combien de stomates trouve-t-on sur une zone de 2 mm², à cette densité ?',
                        'choices' => [
                            ['choice_text' => '240 stomates', 'is_correct' => true],
                            ['choice_text' => '122 stomates', 'is_correct' => false],
                            ['choice_text' => '60 stomates', 'is_correct' => false],
                            ['choice_text' => '360 stomates', 'is_correct' => false],
                        ],
                        'explanation' => 'On multiplie la densité par la surface : 120 × 2 = 240 stomates.',
                    ],
                    [
                        'question' => 'Chez beaucoup d’arbres, les stomates sont surtout sur la face inférieure de la feuille. Quel avantage cela peut-il avoir ?',
                        'choices' => [
                            ['choice_text' => 'elle capte mieux la lumière du soleil', 'is_correct' => false],
                            ['choice_text' => 'elle absorbe plus facilement l’eau de pluie qui ruisselle sur la feuille', 'is_correct' => false],
                            ['choice_text' => 'elle laisse les insectes y entrer plus aisément', 'is_correct' => false],
                            ['choice_text' => 'cette face, plus à l’ombre, perd moins d’eau par évaporation', 'is_correct' => true],
                        ],
                        'explanation' => 'Placés sous la feuille, les stomates sont moins exposés au soleil et au vent, donc l’eau s’y évapore moins vite.',
                    ],
                    [
                        'question' => 'Parmi ces situations, laquelle permet à une feuille saine de faire de la photosynthèse ?',
                        'choices' => [
                            ['choice_text' => 'de la lumière et du CO₂, mais pas d’eau dans le sol', 'is_correct' => false],
                            ['choice_text' => 'de l’eau et du CO₂, mais pas de lumière', 'is_correct' => false],
                            ['choice_text' => 'de la lumière, de l’eau et du CO₂ à la fois', 'is_correct' => true],
                            ['choice_text' => 'de la lumière et de l’eau, mais pas de CO₂', 'is_correct' => false],
                        ],
                        'explanation' => 'La photosynthèse a besoin des trois à la fois : sans l’un d’eux, elle ne peut pas se faire.',
                    ],
                    [
                        'question' => 'À quoi servent les nervures d’une feuille ?',
                        'choices' => [
                            ['choice_text' => 'à laisser entrer le CO₂ dans la feuille', 'is_correct' => false],
                            ['choice_text' => 'à conduire l’eau et les sucres et à soutenir le limbe', 'is_correct' => true],
                            ['choice_text' => 'à capter la lumière pour la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'à produire le pollen de la plante', 'is_correct' => false],
                        ],
                        'explanation' => 'Les nervures contiennent les vaisseaux qui apportent l’eau et emportent les sucres, et elles tendent le limbe comme une armature.',
                    ],
                    [
                        'question' => 'Deux feuilles ont la même surface : l’une porte 100 stomates par mm², l’autre 50. Si leurs stomates sont ouverts, laquelle peut échanger le plus de gaz ?',
                        'choices' => [
                            ['choice_text' => 'la seconde, qui compte moins de stomates', 'is_correct' => false],
                            ['choice_text' => 'les deux de la même façon, car elles ont la même surface', 'is_correct' => false],
                            ['choice_text' => 'ni l’une ni l’autre, car les gaz passent par les nervures', 'is_correct' => false],
                            ['choice_text' => 'la première, qui compte le plus de stomates', 'is_correct' => true],
                        ],
                        'explanation' => 'Plus il y a de pores ouverts sur une même surface, plus les échanges de gaz peuvent être importants.',
                    ],
                    [
                        'question' => 'Quel est le rôle de la chlorophylle dans la feuille ?',
                        'choices' => [
                            ['choice_text' => 'capter l’énergie de la lumière', 'is_correct' => true],
                            ['choice_text' => 'absorber l’eau du sol par les racines', 'is_correct' => false],
                            ['choice_text' => 'fabriquer les sels minéraux de la sève', 'is_correct' => false],
                            ['choice_text' => 'ouvrir les stomates de la feuille', 'is_correct' => false],
                        ],
                        'explanation' => 'La chlorophylle, pigment vert des chloroplastes, capte l’énergie lumineuse qui sert à fabriquer les sucres.',
                    ],
                ],
            ],
            [
                'title' => 'Fleurs, pollinisation et reproduction',
                'description' => 'Quiz sur les organes floraux, la pollinisation, la fécondation et la formation des graines et fruits.',
                'duration' => 20,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'En secouant une fleur de lys, Salma voit une poudre jaune se détacher du bout des étamines. Quelle partie de la fleur l’a produite ?',
                        'choices' => [
                            ['choice_text' => 'le stigmate', 'is_correct' => false],
                            ['choice_text' => 'l’ovaire', 'is_correct' => false],
                            ['choice_text' => 'l’anthère', 'is_correct' => true],
                            ['choice_text' => 'le sépale', 'is_correct' => false],
                        ],
                        'explanation' => 'L’anthère, au sommet de l’étamine, produit le pollen, cette poudre jaune.',
                    ],
                    [
                        'question' => 'Quel organe, collant au sommet du pistil, reçoit les grains de pollen ?',
                        'choices' => [
                            ['choice_text' => 'l’anthère', 'is_correct' => false],
                            ['choice_text' => 'le stigmate', 'is_correct' => true],
                            ['choice_text' => 'le sépale', 'is_correct' => false],
                            ['choice_text' => 'le filet', 'is_correct' => false],
                        ],
                        'explanation' => 'Le stigmate, surface collante du pistil, retient les grains de pollen lors de la pollinisation.',
                    ],
                    [
                        'question' => 'Un grain de pollen est déposé sur le stigmate d’une fleur de tomate. Quelle étape vient d’avoir lieu ?',
                        'choices' => [
                            ['choice_text' => 'la fécondation, qui forme déjà le fruit', 'is_correct' => false],
                            ['choice_text' => 'la germination, qui forme la jeune plante', 'is_correct' => false],
                            ['choice_text' => 'la dispersion, qui répand les graines', 'is_correct' => false],
                            ['choice_text' => 'la pollinisation, qui précède la fécondation', 'is_correct' => true],
                        ],
                        'explanation' => 'Déposer le pollen sur le stigmate, c’est la pollinisation ; la fécondation n’a lieu que plus tard, quand les cellules mâle et femelle se rejoignent.',
                    ],
                    [
                        'question' => 'Après la fécondation d’une fleur de pêcher, que deviennent l’ovule et l’ovaire ?',
                        'choices' => [
                            ['choice_text' => 'l’ovule devient le fruit et l’ovaire devient la graine', 'is_correct' => false],
                            ['choice_text' => 'l’ovule devient le pétale et l’ovaire devient la feuille', 'is_correct' => false],
                            ['choice_text' => 'l’ovule devient la graine et l’ovaire devient le fruit', 'is_correct' => true],
                            ['choice_text' => 'l’ovule devient le pollen et l’ovaire devient la fleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Après fécondation, l’ovule se transforme en graine et l’ovaire grossit pour former le fruit qui l’entoure.',
                    ],
                    [
                        'question' => 'Dans un champ d’amandiers en fleurs, que permet le travail des abeilles ?',
                        'choices' => [
                            ['choice_text' => 'le transport du pollen d’une fleur à une autre', 'is_correct' => true],
                            ['choice_text' => 'la dispersion des graines mûres', 'is_correct' => false],
                            ['choice_text' => 'l’absorption des sels minéraux', 'is_correct' => false],
                            ['choice_text' => 'la formation des racines', 'is_correct' => false],
                        ],
                        'explanation' => 'En butinant, les abeilles emportent du pollen d’une fleur à l’autre et favorisent la pollinisation.',
                    ],
                    [
                        'question' => 'Les fleurs de lavande ont des pétales violets, un parfum fort et du nectar. À quoi servent surtout ces caractères ?',
                        'choices' => [
                            ['choice_text' => 'à repousser les insectes pollinisateurs', 'is_correct' => false],
                            ['choice_text' => 'à attirer les insectes pollinisateurs', 'is_correct' => true],
                            ['choice_text' => 'à protéger les graines du froid', 'is_correct' => false],
                            ['choice_text' => 'à attirer l’eau vers la fleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Couleur, parfum et nectar attirent les insectes, qui transportent ensuite le pollen d’une fleur à l’autre.',
                    ],
                    [
                        'question' => 'Chez une plante à fleurs, que fournit le pollen lors de la fécondation ?',
                        'choices' => [
                            ['choice_text' => 'la cellule reproductrice femelle', 'is_correct' => false],
                            ['choice_text' => 'les réserves de la graine', 'is_correct' => false],
                            ['choice_text' => 'la cellule reproductrice mâle', 'is_correct' => true],
                            ['choice_text' => 'les couleurs de la fleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pollen contient les cellules reproductrices mâles ; elles rejoignent la cellule femelle à l’intérieur de l’ovule.',
                    ],
                    [
                        'question' => 'Dans une expérience, chaque fleur fécondée d’un plant produit en moyenne 3 graines. Le plant porte 24 fleurs, toutes fécondées. Combien de graines peut-on attendre ?',
                        'choices' => [
                            ['choice_text' => '27 graines', 'is_correct' => false],
                            ['choice_text' => '21 graines', 'is_correct' => false],
                            ['choice_text' => '8 graines', 'is_correct' => false],
                            ['choice_text' => '72 graines', 'is_correct' => true],
                        ],
                        'explanation' => 'On multiplie : 24 × 3 = 72 graines.',
                    ],
                    [
                        'question' => 'Les fruits du pissenlit portent une aigrette de poils légers. Quel est l’intérêt de cette aigrette ?',
                        'choices' => [
                            ['choice_text' => 's’accrocher à la fourrure des animaux de passage', 'is_correct' => false],
                            ['choice_text' => 'se laisser emporter par le vent loin de la plante mère', 'is_correct' => true],
                            ['choice_text' => 'flotter sur l’eau des rivières voisines pour coloniser les berges', 'is_correct' => false],
                            ['choice_text' => 'attirer les abeilles pollinisatrices', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aigrette agit comme un petit parachute : le vent emporte la graine loin de la plante mère, où elle aura moins de concurrence.',
                    ],
                    [
                        'question' => 'Dans un verger de poiriers, les ruches ont disparu et les insectes se font rares au printemps. Quelle conséquence est probable ?',
                        'choices' => [
                            ['choice_text' => 'moins de fleurs pollinisées, donc moins de fruits', 'is_correct' => true],
                            ['choice_text' => 'plus de fruits, car la concurrence entre fleurs diminue', 'is_correct' => false],
                            ['choice_text' => 'des fruits plus gros, car les arbres gardent leur énergie', 'is_correct' => false],
                            ['choice_text' => 'pas de changement, car les poiriers n’ont pas besoin de pollen', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans pollinisateurs, moins de fleurs reçoivent du pollen, donc moins de graines et de fruits se forment.',
                    ],
                ],
            ],
            [
                'title' => 'Graines, fruits et germination',
                'description' => 'Quiz sur la structure des graines, la dispersion, les conditions de germination et le développement des jeunes plantes.',
                'duration' => 20,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'En ouvrant une graine de haricot trempée, Nadia distingue deux grosses moitiés et, entre elles, une minuscule plantule. Comment appelle-t-on cette plantule ?',
                        'choices' => [
                            ['choice_text' => 'le pétale', 'is_correct' => false],
                            ['choice_text' => 'l’embryon', 'is_correct' => true],
                            ['choice_text' => 'le pollen', 'is_correct' => false],
                            ['choice_text' => 'l’ovule', 'is_correct' => false],
                        ],
                        'explanation' => 'L’embryon contient déjà en miniature la future racine, la future tige et les premières feuilles de la plante.',
                    ],
                    [
                        'question' => 'Des graines de blé restent plusieurs années dans un sac sans germer. Qu’est-ce qui l’explique ?',
                        'choices' => [
                            ['choice_text' => 'leur activité est très ralentie tant qu’elles sont sèches', 'is_correct' => true],
                            ['choice_text' => 'elles ont perdu leur embryon et ne peuvent plus pousser', 'is_correct' => false],
                            ['choice_text' => 'elles font lentement de la photosynthèse dans le sac', 'is_correct' => false],
                            ['choice_text' => 'elles absorbent peu à peu l’eau contenue dans l’air ambiant du sac', 'is_correct' => false],
                        ],
                        'explanation' => 'Une graine sèche est en dormance : son métabolisme est au ralenti, ce qui lui permet d’attendre des conditions favorables.',
                    ],
                    [
                        'question' => 'Quel ensemble de conditions permet à la plupart des graines de germer ?',
                        'choices' => [
                            ['choice_text' => 'de l’eau, de l’air et du sel en grande quantité', 'is_correct' => false],
                            ['choice_text' => 'de l’eau et de la lumière, mais pas d’air', 'is_correct' => false],
                            ['choice_text' => 'de l’air et une température adaptée, mais pas d’eau', 'is_correct' => false],
                            ['choice_text' => 'de l’eau, de l’air et une température adaptée', 'is_correct' => true],
                        ],
                        'explanation' => 'Une graine germe quand elle s’imbibe d’eau, qu’elle dispose d’air pour respirer et qu’il ne fait ni trop froid ni trop chaud.',
                    ],
                    [
                        'question' => 'Une graine enfouie dans de l’eau stagnante, sans air, pourrit au lieu de germer. Quel besoin n’est pas satisfait ?',
                        'choices' => [
                            ['choice_text' => 'l’oxygène nécessaire à la respiration', 'is_correct' => true],
                            ['choice_text' => 'la lumière du soleil nécessaire à la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'les sels minéraux du sol nécessaires aux racines', 'is_correct' => false],
                            ['choice_text' => 'le CO₂ de l’air nécessaire aux feuilles', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour obtenir l’énergie de sa croissance, la graine respire : sans oxygène, elle ne peut pas germer.',
                    ],
                    [
                        'question' => 'En plein hiver, des graines de tomate semées dans une terre humide à 5 °C ne lèvent presque pas. Quelle est la cause la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'le manque de lumière dans la terre', 'is_correct' => false],
                            ['choice_text' => 'l’excès d’oxygène dans la terre', 'is_correct' => false],
                            ['choice_text' => 'la température trop basse ralentit la germination', 'is_correct' => true],
                            ['choice_text' => 'l’absence de pollen autour des graines', 'is_correct' => false],
                        ],
                        'explanation' => 'Le froid ralentit les réactions chimiques de la graine ; en dessous d’une certaine température, la germination est très lente.',
                    ],
                    [
                        'question' => 'Une cerise contient un noyau, qui renferme la graine. Quel est le rôle du fruit ?',
                        'choices' => [
                            ['choice_text' => 'fabriquer le pollen de la fleur', 'is_correct' => false],
                            ['choice_text' => 'protéger la graine et aider à sa dispersion', 'is_correct' => true],
                            ['choice_text' => 'absorber l’eau du sol pour la transmettre à la plante', 'is_correct' => false],
                            ['choice_text' => 'capter la lumière du soleil', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fruit enveloppe et protège les graines ; sa chair attire souvent des animaux qui les emportent plus loin.',
                    ],
                    [
                        'question' => 'Les fruits à crochets de la bardane s’accrochent au pelage des animaux. Comment la plante disperse-t-elle ses graines ?',
                        'choices' => [
                            ['choice_text' => 'grâce aux animaux, qui les transportent sans le savoir', 'is_correct' => true],
                            ['choice_text' => 'grâce au vent, qui les emporte', 'is_correct' => false],
                            ['choice_text' => 'grâce à l’eau, qui les fait flotter', 'is_correct' => false],
                            ['choice_text' => 'grâce à la plante, qui les projette', 'is_correct' => false],
                        ],
                        'explanation' => 'Les crochets s’accrochent aux poils des animaux, qui transportent les graines loin de la plante mère.',
                    ],
                    [
                        'question' => 'Une graine de haricot pèse 0,6 g à sec et 1,5 g après un jour dans l’eau. De combien sa masse a-t-elle augmenté ?',
                        'choices' => [
                            ['choice_text' => '2,1 g', 'is_correct' => false],
                            ['choice_text' => '2,5 g', 'is_correct' => false],
                            ['choice_text' => '0,9 g', 'is_correct' => true],
                            ['choice_text' => '0,4 g', 'is_correct' => false],
                        ],
                        'explanation' => 'On soustrait : 1,5 − 0,6 = 0,9 g. La graine s’est gorgée d’eau.',
                    ],
                    [
                        'question' => 'En germant, quelle partie sort la première de la graine de haricot ?',
                        'choices' => [
                            ['choice_text' => 'la première feuille verte de la plantule', 'is_correct' => false],
                            ['choice_text' => 'la fleur qui s’ouvre au bout de la tige', 'is_correct' => false],
                            ['choice_text' => 'le fruit qui grossit autour de la graine', 'is_correct' => false],
                            ['choice_text' => 'la radicule, future racine', 'is_correct' => true],
                        ],
                        'explanation' => 'La radicule perce l’enveloppe en premier : elle fixe la plantule au sol et commence à absorber l’eau.',
                    ],
                    [
                        'question' => 'Une plantule de pois vit plusieurs jours sans feuilles vertes. Où trouve-t-elle son énergie ?',
                        'choices' => [
                            ['choice_text' => 'dans les sucres du sol', 'is_correct' => false],
                            ['choice_text' => 'dans les réserves de la graine', 'is_correct' => true],
                            ['choice_text' => 'dans la lumière absorbée par la tige', 'is_correct' => false],
                            ['choice_text' => 'dans le pollen de la fleur', 'is_correct' => false],
                        ],
                        'explanation' => 'La graine contient des réserves qui nourrissent la plantule jusqu’à ce que ses feuilles fassent de la photosynthèse.',
                    ],
                ],
            ],
            [
                'title' => 'Adaptations des plantes à leur environnement',
                'description' => 'Quiz sur les adaptations des plantes aux milieux secs, aquatiques, salés, froids et ombragés.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Chez le figuier de Barbarie, les feuilles sont réduites à des épines. Quel organe fait alors la photosynthèse ?',
                        'choices' => [
                            ['choice_text' => 'les racines qui s’enfoncent dans le sol', 'is_correct' => false],
                            ['choice_text' => 'les fleurs jaunes de la plante', 'is_correct' => false],
                            ['choice_text' => 'la tige verte et charnue', 'is_correct' => true],
                            ['choice_text' => 'les épines qui couvrent la tige', 'is_correct' => false],
                        ],
                        'explanation' => 'Les raquettes du figuier de Barbarie sont des tiges aplaties et vertes : elles font la photosynthèse et stockent l’eau.',
                    ],
                    [
                        'question' => 'Le nénuphar flotte sur l’eau. Où ses feuilles ont-elles surtout leurs stomates ?',
                        'choices' => [
                            ['choice_text' => 'sur la face inférieure, dans l’eau', 'is_correct' => false],
                            ['choice_text' => 'sur les deux faces, en nombre égal', 'is_correct' => false],
                            ['choice_text' => 'dans les racines et la tige, sous la surface de l’eau', 'is_correct' => false],
                            ['choice_text' => 'sur la face supérieure, au contact de l’air', 'is_correct' => true],
                        ],
                        'explanation' => 'Les échanges gazeux se font avec l’air : les stomates se trouvent donc sur la face qui n’est pas immergée.',
                    ],
                    [
                        'question' => 'Le tamaris, arbuste des bords de mer, rejette du sel par de minuscules glandes de ses feuilles. Quel avantage cela lui donne-t-il ?',
                        'choices' => [
                            ['choice_text' => 'il supporte un sol salé qui tuerait beaucoup de plantes', 'is_correct' => true],
                            ['choice_text' => 'il absorbe plus d’eau douce que les autres plantes', 'is_correct' => false],
                            ['choice_text' => 'il capte mieux la lumière faible', 'is_correct' => false],
                            ['choice_text' => 'il attire plus d’insectes pollinisateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'En éliminant l’excès de sel par ses feuilles, le tamaris évite de s’empoisonner et peut vivre sur des sols salés.',
                    ],
                    [
                        'question' => 'Les plantes de sous-bois ont souvent de grandes feuilles fines et d’un vert sombre. Quel avantage cela donne-t-il dans l’ombre ?',
                        'choices' => [
                            ['choice_text' => 'elles perdent moins d’eau en plein soleil', 'is_correct' => false],
                            ['choice_text' => 'elles résistent mieux au vent fort', 'is_correct' => false],
                            ['choice_text' => 'elles captent mieux la lumière faible', 'is_correct' => true],
                            ['choice_text' => 'elles attirent plus de pollinisateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une grande surface foliaire et beaucoup de chlorophylle permettent de profiter du peu de lumière qui traverse les arbres.',
                    ],
                    [
                        'question' => 'Les feuilles de l’olivier sont petites, coriaces et couvertes d’une cuticule épaisse. À quel climat sont-elles adaptées ?',
                        'choices' => [
                            ['choice_text' => 'à un climat froid et très humide', 'is_correct' => false],
                            ['choice_text' => 'à un climat chaud et sec', 'is_correct' => true],
                            ['choice_text' => 'à un milieu aquatique', 'is_correct' => false],
                            ['choice_text' => 'à une forêt sombre et pluvieuse', 'is_correct' => false],
                        ],
                        'explanation' => 'Des feuilles petites et une cuticule épaisse limitent l’évaporation, ce qui est utile pendant l’été sec.',
                    ],
                    [
                        'question' => 'Dans le Sud marocain, l’arganier enfonce ses racines très profondément dans le sol. Quel avantage cela lui donne-t-il ?',
                        'choices' => [
                            ['choice_text' => 'capter la lumière au ras du sol', 'is_correct' => false],
                            ['choice_text' => 'stocker le pollen sous terre', 'is_correct' => false],
                            ['choice_text' => 'résister aux inondations de la saison des pluies', 'is_correct' => false],
                            ['choice_text' => 'atteindre l’eau cachée dans le sous-sol', 'is_correct' => true],
                        ],
                        'explanation' => 'Des racines profondes peuvent puiser de l’eau là où la surface est sèche une grande partie de l’année.',
                    ],
                    [
                        'question' => 'L’aloès a des feuilles épaisses et charnues remplies d’eau. Dans quel milieu cette adaptation est-elle utile ?',
                        'choices' => [
                            ['choice_text' => 'un milieu très humide, où l’eau abonde', 'is_correct' => false],
                            ['choice_text' => 'un milieu glacial, où le sol gèle', 'is_correct' => false],
                            ['choice_text' => 'un milieu aride, où l’eau est rare', 'is_correct' => true],
                            ['choice_text' => 'un milieu ombragé, où la lumière est rare', 'is_correct' => false],
                        ],
                        'explanation' => 'Les feuilles charnues forment une réserve d’eau qui aide la plante à traverser les périodes de sécheresse.',
                    ],
                    [
                        'question' => 'Un maraîcher voit ses plants de piment pousser lentement, avec des feuilles teintées de violet, sur un sol pauvre en phosphore. Que peut-il faire ?',
                        'choices' => [
                            ['choice_text' => 'ajouter un engrais qui contient du phosphore', 'is_correct' => true],
                            ['choice_text' => 'arroser plus souvent sans rien ajouter', 'is_correct' => false],
                            ['choice_text' => 'retirer les feuilles teintées de violet', 'is_correct' => false],
                            ['choice_text' => 'planter les piments plus serrés', 'is_correct' => false],
                        ],
                        'explanation' => 'Le phosphore intervient dans l’énergie et la croissance de la plante ; en manquer ralentit la pousse et colore parfois les feuilles.',
                    ],
                    [
                        'question' => 'Pendant les heures les plus chaudes, un jujubier ferme ses stomates. Quel est l’inconvénient de ce réflexe ?',
                        'choices' => [
                            ['choice_text' => 'la plante perd davantage d’eau', 'is_correct' => false],
                            ['choice_text' => 'les racines cessent d’absorber les sels', 'is_correct' => false],
                            ['choice_text' => 'les feuilles se couvrent de cire', 'is_correct' => false],
                            ['choice_text' => 'moins de CO₂ entre, donc la photosynthèse ralentit', 'is_correct' => true],
                        ],
                        'explanation' => 'La plante économise de l’eau, mais elle ferme aussi la porte d’entrée du CO₂ : elle fabrique moins de sucres.',
                    ],
                    [
                        'question' => 'En haute montagne, dans l’Atlas, de nombreuses plantes forment des coussinets bas aux tiges serrées. Quel avantage cela peut-il leur donner ?',
                        'choices' => [
                            ['choice_text' => 'elles captent plus de lumière dans l’ombre', 'is_correct' => false],
                            ['choice_text' => 'elles perdent moins de chaleur et résistent mieux au vent', 'is_correct' => true],
                            ['choice_text' => 'elles absorbent plus d’eau par les feuilles', 'is_correct' => false],
                            ['choice_text' => 'elles attirent davantage de pollinisateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Un coussinet dense et près du sol se protège du vent et garde un peu de chaleur, ce qui aide à passer l’hiver.',
                    ],
                ],
            ],
            [
                'title' => 'Botanique appliquée : cycles, croissance et observations',
                'description' => 'Révision intégrée sur les cycles de vie, la croissance, les expériences simples et l’interprétation de données botaniques.',
                'duration' => 25,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Deux plants de menthe reçoivent la même eau et les mêmes sels minéraux. L’un est éclairé 12 h par jour, l’autre 4 h. Quel facteur cette expérience étudie-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'l’effet de la durée d’éclairement sur la croissance', 'is_correct' => true],
                            ['choice_text' => 'l’effet de la quantité d’eau d’arrosage sur la croissance', 'is_correct' => false],
                            ['choice_text' => 'l’effet des sels minéraux sur la floraison', 'is_correct' => false],
                            ['choice_text' => 'l’effet de la température sur la germination', 'is_correct' => false],
                        ],
                        'explanation' => 'Un seul facteur varie, la durée de lumière, les autres restant identiques : c’est lui que l’on teste.',
                    ],
                    [
                        'question' => 'Un plant de blé mesure 8 cm au début d’une expérience et 13 cm cinq jours plus tard. Quelle est sa croissance moyenne par jour ?',
                        'choices' => [
                            ['choice_text' => '5 cm par jour', 'is_correct' => false],
                            ['choice_text' => '2,6 cm par jour', 'is_correct' => false],
                            ['choice_text' => '0,5 cm par jour', 'is_correct' => false],
                            ['choice_text' => '1 cm par jour', 'is_correct' => true],
                        ],
                        'explanation' => '13 − 8 = 5 cm en 5 jours, soit 5 ÷ 5 = 1 cm par jour.',
                    ],
                    [
                        'question' => 'Le coquelicot germe au printemps, fleurit, produit des graines, puis meurt avant l’hiver. Quel type de plante est-ce ?',
                        'choices' => [
                            ['choice_text' => 'une plante vivace', 'is_correct' => false],
                            ['choice_text' => 'une plante bisannuelle', 'is_correct' => false],
                            ['choice_text' => 'une plante annuelle', 'is_correct' => true],
                            ['choice_text' => 'un arbuste', 'is_correct' => false],
                        ],
                        'explanation' => 'Une plante annuelle accomplit tout son cycle, de la graine aux nouvelles graines, en une seule saison.',
                    ],
                    [
                        'question' => 'Nour mesure la hauteur de 10 plants de radis plutôt que d’un seul. Quel avantage cela apporte-t-il ?',
                        'choices' => [
                            ['choice_text' => 'elle prouve que chaque plant grandit de la même façon', 'is_correct' => false],
                            ['choice_text' => 'la moyenne limite l’effet d’un plant atypique', 'is_correct' => true],
                            ['choice_text' => 'elle remplace le besoin d’un groupe témoin', 'is_correct' => false],
                            ['choice_text' => 'elle rend la mesure inutile', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plants d’une même espèce diffèrent un peu ; une moyenne sur plusieurs d’entre eux donne une valeur plus fiable.',
                    ],
                    [
                        'question' => 'Sur 40 graines de laitue semées, 34 ont germé. Quel est le taux de germination ?',
                        'choices' => [
                            ['choice_text' => '15 %', 'is_correct' => false],
                            ['choice_text' => '34 %', 'is_correct' => false],
                            ['choice_text' => '85 %', 'is_correct' => true],
                            ['choice_text' => '74 %', 'is_correct' => false],
                        ],
                        'explanation' => '34 ÷ 40 = 0,85, soit un taux de germination de 85 %.',
                    ],
                    [
                        'question' => 'Yassine constate que ses plants fertilisés mesurent 20 cm et conclut que l’engrais les a fait pousser. Que lui manque-t-il pour en être sûr ?',
                        'choices' => [
                            ['choice_text' => 'un lot témoin sans engrais pour comparer', 'is_correct' => true],
                            ['choice_text' => 'une mesure faite sur une feuille unique', 'is_correct' => false],
                            ['choice_text' => 'un éclairage et un arrosage différents pour chaque plant', 'is_correct' => false],
                            ['choice_text' => 'l’arrêt des mesures dès les premiers résultats', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans plants témoins, rien ne dit que les plants non fertilisés n’auraient pas atteint la même taille.',
                    ],
                    [
                        'question' => 'Quelle suite décrit correctement le cycle d’une plante à fleurs ?',
                        'choices' => [
                            ['choice_text' => 'germination, graine, floraison, plante adulte, fruit', 'is_correct' => false],
                            ['choice_text' => 'graine, germination, plante adulte, floraison, nouvelles graines', 'is_correct' => true],
                            ['choice_text' => 'floraison, germination, plante adulte, graine, pollinisation', 'is_correct' => false],
                            ['choice_text' => 'graine, floraison, germination, plante adulte, fruit', 'is_correct' => false],
                        ],
                        'explanation' => 'La graine germe, la plante grandit, fleurit, puis produit de nouvelles graines.',
                    ],
                    [
                        'question' => 'Un graphique montre une croissance de 2 cm par semaine sous lumière faible et de 5 cm par semaine sous lumière forte. Quelle conclusion est la plus prudente ?',
                        'choices' => [
                            ['choice_text' => 'cette croissance se retrouvera chez d’autres espèces et d’autres milieux', 'is_correct' => false],
                            ['choice_text' => 'la lumière forte remplace le besoin d’eau de la plante', 'is_correct' => false],
                            ['choice_text' => 'la lumière faible bloque la croissance de la plante', 'is_correct' => false],
                            ['choice_text' => 'dans cette expérience, plus de lumière va de pair avec une croissance plus rapide', 'is_correct' => true],
                        ],
                        'explanation' => 'La conclusion reste liée aux conditions de l’expérience : on ne peut pas la généraliser à d’autres espèces ou milieux sans les tester.',
                    ],
                    [
                        'question' => 'Nour mesure trois plants de basilic : 10 cm, 12 cm et 14 cm. Quelle est leur hauteur moyenne ?',
                        'choices' => [
                            ['choice_text' => '36 cm', 'is_correct' => false],
                            ['choice_text' => '14 cm', 'is_correct' => false],
                            ['choice_text' => '12 cm', 'is_correct' => true],
                            ['choice_text' => '4 cm', 'is_correct' => false],
                        ],
                        'explanation' => '(10 + 12 + 14) ÷ 3 = 36 ÷ 3 = 12 cm.',
                    ],
                    [
                        'question' => 'Pour tester l’effet d’un engrais sur des plants de tomate, que doit-on garder identique d’un plant à l’autre ?',
                        'choices' => [
                            ['choice_text' => 'l’eau, la lumière, la température et le type de terre', 'is_correct' => true],
                            ['choice_text' => 'la quantité d’engrais donnée à chaque plant', 'is_correct' => false],
                            ['choice_text' => 'la hauteur des plants à la fin de l’expérience', 'is_correct' => false],
                            ['choice_text' => 'le nombre de graines produites par chaque plant', 'is_correct' => false],
                        ],
                        'explanation' => 'Seul le facteur testé, ici l’engrais, doit changer ; tout le reste reste identique pour que la différence lui soit attribuable.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $settings = [
                'duration' => $quizData['duration'],
                'passing_score' => $quizData['passing_score'],
            ];

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