<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class GeologyFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'geology-fundamentals')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la géologie',
                'description' => 'Terre, enveloppes, roches, minéraux et notions fondamentales.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'La géologie étudie principalement :',
                        'choices' => [
                            ['choice_text' => 'la Terre, ses matériaux, son histoire et les processus qui la modifient', 'is_correct' => true],
                            ['choice_text' => 'uniquement les organismes microscopiques', 'is_correct' => false],
                            ['choice_text' => 'uniquement les phénomènes météorologiques', 'is_correct' => false],
                            ['choice_text' => 'uniquement la circulation du sang', 'is_correct' => false],
                        ],
                        'explanation' => 'La géologie s\'intéresse à la structure, aux matériaux, à l\'histoire et aux processus de la Terre.',
                    ],
                    [
                        'question' => 'La couche solide la plus externe de la Terre est :',
                        'choices' => [
                            ['choice_text' => 'la croûte', 'is_correct' => true],
                            ['choice_text' => 'le noyau interne', 'is_correct' => false],
                            ['choice_text' => 'le manteau profond', 'is_correct' => false],
                            ['choice_text' => 'le noyau externe', 'is_correct' => false],
                        ],
                        'explanation' => 'La croûte est l\'enveloppe rocheuse superficielle de la Terre.',
                    ],
                    [
                        'question' => 'Le manteau terrestre se situe :',
                        'choices' => [
                            ['choice_text' => 'entre la croûte et le noyau', 'is_correct' => true],
                            ['choice_text' => 'au-dessus de l\'atmosphère', 'is_correct' => false],
                            ['choice_text' => 'uniquement sous les océans', 'is_correct' => false],
                            ['choice_text' => 'à l\'extérieur de la Terre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le manteau occupe une grande partie du volume terrestre entre la croûte et le noyau.',
                    ],
                    [
                        'question' => 'Le noyau de la Terre est principalement constitué de :',
                        'choices' => [
                            ['choice_text' => 'fer et nickel', 'is_correct' => true],
                            ['choice_text' => 'quartz et feldspath', 'is_correct' => false],
                            ['choice_text' => 'calcite et gypse', 'is_correct' => false],
                            ['choice_text' => 'argile et sable', 'is_correct' => false],
                        ],
                        'explanation' => 'Le noyau est riche en fer et en nickel, avec un noyau externe liquide et un noyau interne solide.',
                    ],
                    [
                        'question' => 'Une roche est :',
                        'choices' => [
                            ['choice_text' => 'un assemblage naturel d\'un ou plusieurs minéraux ou de matériaux minéraux', 'is_correct' => true],
                            ['choice_text' => 'toujours un seul élément chimique pur', 'is_correct' => false],
                            ['choice_text' => 'toujours issue d\'une activité volcanique', 'is_correct' => false],
                            ['choice_text' => 'toujours constituée de matière biologique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une roche peut être constituée d\'un ou plusieurs minéraux et se former selon différents processus géologiques.',
                    ],
                    [
                        'question' => 'Un minéral est généralement caractérisé par :',
                        'choices' => [
                            ['choice_text' => 'une composition chimique et une structure cristalline définies', 'is_correct' => true],
                            ['choice_text' => 'une origine obligatoirement biologique', 'is_correct' => false],
                            ['choice_text' => 'une composition toujours liquide', 'is_correct' => false],
                            ['choice_text' => 'une structure toujours amorphe', 'is_correct' => false],
                        ],
                        'explanation' => 'Un minéral naturel possède une composition chimique caractéristique et une organisation atomique cristalline.',
                    ],
                    [
                        'question' => 'Le granite est généralement classé comme une roche :',
                        'choices' => [
                            ['choice_text' => 'magmatique plutonique', 'is_correct' => true],
                            ['choice_text' => 'sédimentaire détritique', 'is_correct' => false],
                            ['choice_text' => 'métamorphique foliée', 'is_correct' => false],
                            ['choice_text' => 'organique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le granite se forme par refroidissement lent d\'un magma en profondeur.',
                    ],
                    [
                        'question' => 'Le calcaire est généralement une roche :',
                        'choices' => [
                            ['choice_text' => 'sédimentaire', 'is_correct' => true],
                            ['choice_text' => 'magmatique', 'is_correct' => false],
                            ['choice_text' => 'métamorphique', 'is_correct' => false],
                            ['choice_text' => 'volcanique vitreuse uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le calcaire est le plus souvent une roche sédimentaire riche en carbonate de calcium.',
                    ],
                    [
                        'question' => 'Quel processus peut transformer une roche préexistante en roche métamorphique ?',
                        'choices' => [
                            ['choice_text' => 'une augmentation de pression et de température sans fusion complète', 'is_correct' => true],
                            ['choice_text' => 'une fusion totale suivie immédiatement de pluie', 'is_correct' => false],
                            ['choice_text' => 'uniquement l\'érosion mécanique', 'is_correct' => false],
                            ['choice_text' => 'uniquement la sédimentation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le métamorphisme modifie une roche sous l\'effet de la pression, de la température et des fluides sans fusion complète.',
                    ],
                    [
                        'question' => 'Une carte géologique sert notamment à représenter :',
                        'choices' => [
                            ['choice_text' => 'la répartition des formations et structures géologiques', 'is_correct' => true],
                            ['choice_text' => 'uniquement les routes', 'is_correct' => false],
                            ['choice_text' => 'uniquement les frontières politiques', 'is_correct' => false],
                            ['choice_text' => 'la composition du sang', 'is_correct' => false],
                        ],
                        'explanation' => 'Une carte géologique montre notamment les types de roches, leur âge relatif et certaines structures.',
                    ],
                ],
            ],
            [
                'title' => 'Minéraux et identification des roches',
                'description' => 'Dureté, éclat, clivage, trait et minéraux courants.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'La dureté d\'un minéral correspond à :',
                        'choices' => [
                            ['choice_text' => 'sa résistance à la rayure', 'is_correct' => true],
                            ['choice_text' => 'sa masse totale', 'is_correct' => false],
                            ['choice_text' => 'sa température de fusion uniquement', 'is_correct' => false],
                            ['choice_text' => 'sa couleur dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'La dureté mesure la résistance d\'un minéral à la rayure.',
                    ],
                    [
                        'question' => 'Sur l\'échelle de Mohs, le minéral le plus dur est :',
                        'choices' => [
                            ['choice_text' => 'le diamant', 'is_correct' => true],
                            ['choice_text' => 'le talc', 'is_correct' => false],
                            ['choice_text' => 'le gypse', 'is_correct' => false],
                            ['choice_text' => 'la calcite', 'is_correct' => false],
                        ],
                        'explanation' => 'Le diamant possède la dureté 10 sur l\'échelle de Mohs.',
                    ],
                    [
                        'question' => 'Le talc possède sur l\'échelle de Mohs une dureté de :',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'Le talc est le minéral de référence de dureté 1.',
                    ],
                    [
                        'question' => 'Le quartz a une dureté de :',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'Le quartz possède une dureté de 7 sur l\'échelle de Mohs.',
                    ],
                    [
                        'question' => 'L\'éclat d\'un minéral décrit :',
                        'choices' => [
                            ['choice_text' => 'la façon dont sa surface réfléchit la lumière', 'is_correct' => true],
                            ['choice_text' => 'sa résistance aux séismes', 'is_correct' => false],
                            ['choice_text' => 'sa température interne', 'is_correct' => false],
                            ['choice_text' => 'son âge absolu', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'éclat est une propriété optique liée à la réflexion de la lumière.',
                    ],
                    [
                        'question' => 'La couleur d\'un minéral est parfois un critère peu fiable parce que :',
                        'choices' => [
                            ['choice_text' => 'des impuretés peuvent modifier sa couleur', 'is_correct' => true],
                            ['choice_text' => 'tous les minéraux ont toujours plusieurs couleurs', 'is_correct' => false],
                            ['choice_text' => 'la couleur dépend uniquement de la dureté', 'is_correct' => false],
                            ['choice_text' => 'la couleur ne peut jamais être observée', 'is_correct' => false],
                        ],
                        'explanation' => 'Des impuretés peuvent modifier la couleur apparente d\'un minéral.',
                    ],
                    [
                        'question' => 'Le clivage correspond :',
                        'choices' => [
                            ['choice_text' => 'à une tendance à se casser selon des plans préférentiels', 'is_correct' => true],
                            ['choice_text' => 'à la dissolution complète dans l\'eau', 'is_correct' => false],
                            ['choice_text' => 'à la couleur du trait sur le verre', 'is_correct' => false],
                            ['choice_text' => 'à la densité du minéral', 'is_correct' => false],
                        ],
                        'explanation' => 'Le clivage est la cassure préférentielle selon certaines directions liées à la structure cristalline.',
                    ],
                    [
                        'question' => 'Le trait d\'un minéral est :',
                        'choices' => [
                            ['choice_text' => 'la couleur de sa poudre obtenue par frottement sur une plaque adaptée', 'is_correct' => true],
                            ['choice_text' => 'sa couleur vue à travers l\'eau', 'is_correct' => false],
                            ['choice_text' => 'sa dureté maximale', 'is_correct' => false],
                            ['choice_text' => 'son âge géologique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le trait correspond à la couleur de la poudre du minéral.',
                    ],
                    [
                        'question' => 'Le granite contient généralement :',
                        'choices' => [
                            ['choice_text' => 'quartz, feldspaths et micas', 'is_correct' => true],
                            ['choice_text' => 'uniquement de la calcite', 'is_correct' => false],
                            ['choice_text' => 'uniquement du gypse', 'is_correct' => false],
                            ['choice_text' => 'du charbon pur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les principaux minéraux du granite sont souvent le quartz, les feldspaths et les micas.',
                    ],
                    [
                        'question' => 'Une roche constituée de fragments transportés puis déposés appartient typiquement aux roches :',
                        'choices' => [
                            ['choice_text' => 'sédimentaires détritiques', 'is_correct' => true],
                            ['choice_text' => 'métamorphiques', 'is_correct' => false],
                            ['choice_text' => 'magmatiques plutoniques', 'is_correct' => false],
                            ['choice_text' => 'volcaniques uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les roches détritiques proviennent de fragments issus de l\'altération et de l\'érosion.',
                    ],
                ],
            ],
            [
                'title' => 'Cycle des roches',
                'description' => 'Formation, transformation et recyclage des roches.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Le cycle des roches montre que :',
                        'choices' => [
                            ['choice_text' => 'une roche peut être transformée en un autre type de roche par différents processus', 'is_correct' => true],
                            ['choice_text' => 'chaque roche reste définitivement dans la même catégorie', 'is_correct' => false],
                            ['choice_text' => 'seules les roches volcaniques peuvent changer', 'is_correct' => false],
                            ['choice_text' => 'la Terre ne recycle jamais ses matériaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les roches magmatiques, sédimentaires et métamorphiques peuvent se transformer les unes dans les autres.',
                    ],
                    [
                        'question' => 'Un magma qui refroidit lentement en profondeur peut former :',
                        'choices' => [
                            ['choice_text' => 'une roche magmatique plutonique', 'is_correct' => true],
                            ['choice_text' => 'une roche sédimentaire', 'is_correct' => false],
                            ['choice_text' => 'une roche métamorphique par érosion', 'is_correct' => false],
                            ['choice_text' => 'un sol immédiatement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le refroidissement lent en profondeur permet la croissance de gros cristaux.',
                    ],
                    [
                        'question' => 'Un magma qui refroidit rapidement à la surface peut donner :',
                        'choices' => [
                            ['choice_text' => 'une roche volcanique', 'is_correct' => true],
                            ['choice_text' => 'une roche plutonique', 'is_correct' => false],
                            ['choice_text' => 'une roche sédimentaire détritique', 'is_correct' => false],
                            ['choice_text' => 'une roche métamorphique régionale', 'is_correct' => false],
                        ],
                        'explanation' => 'Le refroidissement rapide d\'une lave forme une roche volcanique.',
                    ],
                    [
                        'question' => 'L\'altération et l\'érosion peuvent produire :',
                        'choices' => [
                            ['choice_text' => 'des sédiments', 'is_correct' => true],
                            ['choice_text' => 'du magma directement', 'is_correct' => false],
                            ['choice_text' => 'du noyau métallique', 'is_correct' => false],
                            ['choice_text' => 'des cristaux parfaits uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'altération désagrège ou transforme les roches et l\'érosion en déplace les produits.',
                    ],
                    [
                        'question' => 'La lithification transforme des sédiments en roche par :',
                        'choices' => [
                            ['choice_text' => 'compaction et cimentation notamment', 'is_correct' => true],
                            ['choice_text' => 'fusion complète', 'is_correct' => false],
                            ['choice_text' => 'refroidissement du noyau', 'is_correct' => false],
                            ['choice_text' => 'évaporation de tous les minéraux', 'is_correct' => false],
                        ],
                        'explanation' => 'La compaction et la cimentation permettent la formation de nombreuses roches sédimentaires.',
                    ],
                    [
                        'question' => 'Une roche sédimentaire enfouie subit une forte pression et une température accrue sans fondre complètement. Elle peut devenir :',
                        'choices' => [
                            ['choice_text' => 'une roche métamorphique', 'is_correct' => true],
                            ['choice_text' => 'un magma immédiatement', 'is_correct' => false],
                            ['choice_text' => 'un minerai liquide', 'is_correct' => false],
                            ['choice_text' => 'une nouvelle planète', 'is_correct' => false],
                        ],
                        'explanation' => 'Le métamorphisme modifie une roche solide sous l\'effet de la pression et de la température.',
                    ],
                    [
                        'question' => 'Si une roche métamorphique fond complètement, le matériau produit est :',
                        'choices' => [
                            ['choice_text' => 'un magma', 'is_correct' => true],
                            ['choice_text' => 'un sédiment', 'is_correct' => false],
                            ['choice_text' => 'un sol', 'is_correct' => false],
                            ['choice_text' => 'un minéral détritique', 'is_correct' => false],
                        ],
                        'explanation' => 'La fusion complète d\'une roche produit un magma.',
                    ],
                    [
                        'question' => 'Une roche peut retourner à l\'état de sédiments principalement grâce à :',
                        'choices' => [
                            ['choice_text' => 'l\'altération, l\'érosion et le transport', 'is_correct' => true],
                            ['choice_text' => 'la fusion nucléaire', 'is_correct' => false],
                            ['choice_text' => 'la cristallisation directe du noyau', 'is_correct' => false],
                            ['choice_text' => 'la compression atmosphérique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les processus de surface dégradent, retirent et transportent les matériaux rocheux.',
                    ],
                    [
                        'question' => 'Quel processus relie directement le magma à une roche magmatique ?',
                        'choices' => [
                            ['choice_text' => 'le refroidissement et la cristallisation', 'is_correct' => true],
                            ['choice_text' => 'la compaction', 'is_correct' => false],
                            ['choice_text' => 'la cimentation', 'is_correct' => false],
                            ['choice_text' => 'la dissolution', 'is_correct' => false],
                        ],
                        'explanation' => 'Le magma forme une roche magmatique lorsqu\'il refroidit et que ses minéraux cristallisent.',
                    ],
                    [
                        'question' => 'Le cycle des roches dépend notamment de l\'interaction entre :',
                        'choices' => [
                            ['choice_text' => 'processus internes de la Terre et processus de surface', 'is_correct' => true],
                            ['choice_text' => 'uniquement l\'atmosphère', 'is_correct' => false],
                            ['choice_text' => 'uniquement les océans', 'is_correct' => false],
                            ['choice_text' => 'uniquement les organismes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cycle combine des processus internes comme le magmatisme et des processus de surface comme l\'érosion.',
                    ],
                ],
            ],
            [
                'title' => 'Processus géologiques de surface',
                'description' => 'Altération, érosion, transport, dépôt et reliefs.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'L\'altération mécanique correspond à :',
                        'choices' => [
                            ['choice_text' => 'la désagrégation d\'une roche sans modification majeure de sa composition chimique', 'is_correct' => true],
                            ['choice_text' => 'la fusion complète d\'une roche', 'is_correct' => false],
                            ['choice_text' => 'la formation d\'un magma', 'is_correct' => false],
                            ['choice_text' => 'la cristallisation du noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'altération mécanique fragmente les roches physiquement.',
                    ],
                    [
                        'question' => 'L\'altération chimique modifie principalement :',
                        'choices' => [
                            ['choice_text' => 'la composition ou les minéraux de la roche', 'is_correct' => true],
                            ['choice_text' => 'la position des planètes', 'is_correct' => false],
                            ['choice_text' => 'la vitesse de rotation de la Terre', 'is_correct' => false],
                            ['choice_text' => 'la durée d\'un jour', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'altération chimique transforme les minéraux par des réactions avec le milieu.',
                    ],
                    [
                        'question' => 'Le transport des sédiments par une rivière dépend notamment :',
                        'choices' => [
                            ['choice_text' => 'de la vitesse et de l\'énergie de l\'écoulement', 'is_correct' => true],
                            ['choice_text' => 'uniquement de la couleur de l\'eau', 'is_correct' => false],
                            ['choice_text' => 'uniquement de la température de l\'air', 'is_correct' => false],
                            ['choice_text' => 'du nombre de montagnes sur une autre planète', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus un courant est énergétique, plus il peut transporter des particules importantes.',
                    ],
                    [
                        'question' => 'Quand un cours d\'eau perd de la vitesse, il peut :',
                        'choices' => [
                            ['choice_text' => 'déposer une partie des sédiments qu\'il transportait', 'is_correct' => true],
                            ['choice_text' => 'faire fondre les roches', 'is_correct' => false],
                            ['choice_text' => 'produire toujours du magma', 'is_correct' => false],
                            ['choice_text' => 'augmenter obligatoirement sa pente', 'is_correct' => false],
                        ],
                        'explanation' => 'La diminution de l\'énergie du courant favorise le dépôt des sédiments.',
                    ],
                    [
                        'question' => 'Une plage est principalement composée de :',
                        'choices' => [
                            ['choice_text' => 'sédiments accumulés par les processus côtiers', 'is_correct' => true],
                            ['choice_text' => 'magma refroidi récemment dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'noyau terrestre exposé', 'is_correct' => false],
                            ['choice_text' => 'roches toujours métamorphiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plages résultent de l\'accumulation de sédiments déplacés par les vagues et courants.',
                    ],
                    [
                        'question' => 'Le gel de l\'eau dans une fissure peut contribuer à l\'altération mécanique parce que :',
                        'choices' => [
                            ['choice_text' => 'la glace peut exercer une pression sur les parois de la fissure', 'is_correct' => true],
                            ['choice_text' => 'la glace transforme toujours la roche en magma', 'is_correct' => false],
                            ['choice_text' => 'l\'eau devient du métal', 'is_correct' => false],
                            ['choice_text' => 'la température augmente toujours', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'eau qui gèle se dilate et peut agrandir progressivement les fissures.',
                    ],
                    [
                        'question' => 'Le vent peut éroder une surface rocheuse en :',
                        'choices' => [
                            ['choice_text' => 'transportant des particules qui heurtent la roche', 'is_correct' => true],
                            ['choice_text' => 'faisant fondre directement le granite', 'is_correct' => false],
                            ['choice_text' => 'transformant les sédiments en magma', 'is_correct' => false],
                            ['choice_text' => 'supprimant la gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules transportées par le vent peuvent abraser les surfaces exposées.',
                    ],
                    [
                        'question' => 'Un delta se forme généralement à l\'embouchure d\'un fleuve lorsque :',
                        'choices' => [
                            ['choice_text' => 'des sédiments s\'accumulent à mesure que l\'eau perd de l\'énergie', 'is_correct' => true],
                            ['choice_text' => 'le fleuve se transforme en magma', 'is_correct' => false],
                            ['choice_text' => 'les roches fondent sous la mer', 'is_correct' => false],
                            ['choice_text' => 'le noyau terrestre remonte à la surface', 'is_correct' => false],
                        ],
                        'explanation' => 'La baisse d\'énergie de l\'écoulement favorise le dépôt de sédiments à l\'embouchure.',
                    ],
                    [
                        'question' => 'Le sol se forme notamment à partir :',
                        'choices' => [
                            ['choice_text' => 'de matériaux rocheux altérés et de matière organique', 'is_correct' => true],
                            ['choice_text' => 'uniquement de magma', 'is_correct' => false],
                            ['choice_text' => 'uniquement de métal liquide', 'is_correct' => false],
                            ['choice_text' => 'uniquement de vapeur d\'eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les sols résultent d\'interactions entre matériaux minéraux, matière organique, eau, air et organismes.',
                    ],
                    [
                        'question' => 'Une vallée en V est souvent associée à :',
                        'choices' => [
                            ['choice_text' => 'l\'érosion exercée par un cours d\'eau', 'is_correct' => true],
                            ['choice_text' => 'une chambre magmatique uniquement', 'is_correct' => false],
                            ['choice_text' => 'un récif corallien', 'is_correct' => false],
                            ['choice_text' => 'une dune formée par le vent uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les rivières incisent les reliefs et peuvent créer des vallées à profil en V.',
                    ],
                ],
            ],
            [
                'title' => 'Temps géologique et histoire de la Terre',
                'description' => 'Datation relative, datation radiométrique et grandes durées géologiques.',
                'settings' => ['duration' => 25, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Le temps géologique est utilisé pour :',
                        'choices' => [
                            ['choice_text' => 'organiser l\'histoire de la Terre sur des millions et milliards d\'années', 'is_correct' => true],
                            ['choice_text' => 'mesurer uniquement une journée', 'is_correct' => false],
                            ['choice_text' => 'décrire uniquement le climat actuel', 'is_correct' => false],
                            ['choice_text' => 'classer les roches selon leur couleur', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'échelle des temps géologiques permet de situer les événements de l\'histoire de la Terre sur de très longues durées.',
                    ],
                    [
                        'question' => 'Le principe de superposition indique que, dans une série sédimentaire non renversée :',
                        'choices' => [
                            ['choice_text' => 'les couches les plus anciennes sont généralement en dessous des couches plus récentes', 'is_correct' => true],
                            ['choice_text' => 'les couches les plus jeunes sont toujours en dessous', 'is_correct' => false],
                            ['choice_text' => 'toutes les couches ont forcément le même âge', 'is_correct' => false],
                            ['choice_text' => 'l\'âge est déterminé par la couleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une série non perturbée, les couches inférieures sont généralement plus anciennes.',
                    ],
                    [
                        'question' => 'Une datation relative permet principalement de :',
                        'choices' => [
                            ['choice_text' => 'déterminer l\'ordre des événements géologiques sans donner nécessairement un âge numérique', 'is_correct' => true],
                            ['choice_text' => 'donner toujours un âge exact en années', 'is_correct' => false],
                            ['choice_text' => 'mesurer uniquement la température', 'is_correct' => false],
                            ['choice_text' => 'identifier uniquement les minéraux', 'is_correct' => false],
                        ],
                        'explanation' => 'La datation relative établit une chronologie.',
                    ],
                    [
                        'question' => 'La datation radiométrique repose sur :',
                        'choices' => [
                            ['choice_text' => 'la désintégration radioactive d\'isotopes à un rythme mesurable', 'is_correct' => true],
                            ['choice_text' => 'la couleur des fossiles', 'is_correct' => false],
                            ['choice_text' => 'la forme des montagnes', 'is_correct' => false],
                            ['choice_text' => 'la vitesse du vent', 'is_correct' => false],
                        ],
                        'explanation' => 'Les isotopes radioactifs se désintègrent selon des lois connues.',
                    ],
                    [
                        'question' => 'La demi-vie d\'un isotope radioactif est :',
                        'choices' => [
                            ['choice_text' => 'la durée nécessaire pour que la moitié des noyaux radioactifs initiaux se désintègrent', 'is_correct' => true],
                            ['choice_text' => 'la durée nécessaire pour que tous les noyaux disparaissent', 'is_correct' => false],
                            ['choice_text' => 'la température de fusion de l\'isotope', 'is_correct' => false],
                            ['choice_text' => 'la masse totale du minéral', 'is_correct' => false],
                        ],
                        'explanation' => 'La demi-vie est le temps nécessaire pour réduire de moitié la quantité d\'isotope parent.',
                    ],
                    [
                        'question' => 'Un fossile peut être utile pour dater relativement une couche lorsqu\'il :',
                        'choices' => [
                            ['choice_text' => 'caractérise une période géologique bien définie et possède une large répartition', 'is_correct' => true],
                            ['choice_text' => 'est toujours très rare et limité à un seul endroit', 'is_correct' => false],
                            ['choice_text' => 'ne possède aucun âge connu', 'is_correct' => false],
                            ['choice_text' => 'est présent dans toutes les époques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fossiles stratigraphiques sont utiles s\'ils ont une durée d\'existence relativement courte et une large distribution.',
                    ],
                    [
                        'question' => 'Une discordance géologique peut indiquer :',
                        'choices' => [
                            ['choice_text' => 'une interruption de la sédimentation ou une période d\'érosion', 'is_correct' => true],
                            ['choice_text' => 'une production continue de roches sans interruption', 'is_correct' => false],
                            ['choice_text' => 'uniquement une éruption volcanique récente', 'is_correct' => false],
                            ['choice_text' => 'un changement de couleur des minéraux', 'is_correct' => false],
                        ],
                        'explanation' => 'Une discordance représente un intervalle de temps absent de l\'enregistrement géologique.',
                    ],
                    [
                        'question' => 'Si deux couches sont séparées par une surface d\'érosion, la couche inférieure peut être :',
                        'choices' => [
                            ['choice_text' => 'plus ancienne que les dépôts qui la recouvrent', 'is_correct' => true],
                            ['choice_text' => 'nécessairement plus jeune que tout ce qui l\'entoure', 'is_correct' => false],
                            ['choice_text' => 'toujours contemporaine du magma', 'is_correct' => false],
                            ['choice_text' => 'sans relation temporelle possible', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dépôts placés après une surface d\'érosion sont postérieurs à celle-ci.',
                    ],
                    [
                        'question' => 'L\'âge de la Terre est estimé à environ :',
                        'choices' => [
                            ['choice_text' => '4,54 milliards d\'années', 'is_correct' => true],
                            ['choice_text' => '4,54 millions d\'années', 'is_correct' => false],
                            ['choice_text' => '454 000 ans', 'is_correct' => false],
                            ['choice_text' => '54 milliards d\'années', 'is_correct' => false],
                        ],
                        'explanation' => 'Les méthodes radiométriques donnent un âge d\'environ 4,54 milliards d\'années.',
                    ],
                    [
                        'question' => 'Quel événement est beaucoup plus récent que la formation de la Terre ?',
                        'choices' => [
                            ['choice_text' => 'l\'apparition des humains modernes', 'is_correct' => true],
                            ['choice_text' => 'la formation du noyau terrestre', 'is_correct' => false],
                            ['choice_text' => 'la formation des premiers minéraux terrestres', 'is_correct' => false],
                            ['choice_text' => 'la mise en place initiale de la planète', 'is_correct' => false],
                        ],
                        'explanation' => 'Homo sapiens est apparu très récemment à l\'échelle géologique.',
                    ],
                ],
            ],
            [
                'title' => 'Eau souterraine et géologie de surface',
                'description' => 'Nappes, porosité, perméabilité, infiltration et réservoirs aquifères.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Une nappe phréatique correspond à :',
                        'choices' => [
                            ['choice_text' => 'une zone où l\'eau souterraine s\'accumule dans les pores ou fractures d\'un réservoir', 'is_correct' => true],
                            ['choice_text' => 'un lac situé uniquement à la surface', 'is_correct' => false],
                            ['choice_text' => 'une rivière atmosphérique', 'is_correct' => false],
                            ['choice_text' => 'une couche de magma', 'is_correct' => false],
                        ],
                        'explanation' => 'Une nappe est une accumulation d\'eau souterraine dans un aquifère.',
                    ],
                    [
                        'question' => 'La porosité d\'une roche représente :',
                        'choices' => [
                            ['choice_text' => 'la proportion de volume occupée par les pores', 'is_correct' => true],
                            ['choice_text' => 'sa résistance à la rayure', 'is_correct' => false],
                            ['choice_text' => 'sa température de fusion', 'is_correct' => false],
                            ['choice_text' => 'son âge absolu', 'is_correct' => false],
                        ],
                        'explanation' => 'La porosité mesure la quantité d\'espace vide disponible dans une roche ou un sédiment.',
                    ],
                    [
                        'question' => 'La perméabilité indique principalement :',
                        'choices' => [
                            ['choice_text' => 'la facilité avec laquelle un fluide peut circuler à travers les pores ou fractures connectés', 'is_correct' => true],
                            ['choice_text' => 'la couleur de la roche', 'is_correct' => false],
                            ['choice_text' => 'la quantité de quartz uniquement', 'is_correct' => false],
                            ['choice_text' => 'la dureté du minéral', 'is_correct' => false],
                        ],
                        'explanation' => 'La perméabilité concerne la capacité d\'un milieu à laisser circuler un fluide.',
                    ],
                    [
                        'question' => 'Une roche très poreuse mais dont les pores ne sont presque pas connectés peut avoir :',
                        'choices' => [
                            ['choice_text' => 'une porosité élevée et une perméabilité faible', 'is_correct' => true],
                            ['choice_text' => 'une porosité nulle', 'is_correct' => false],
                            ['choice_text' => 'une perméabilité forcément très élevée', 'is_correct' => false],
                            ['choice_text' => 'une densité toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La porosité et la perméabilité sont deux propriétés différentes.',
                    ],
                    [
                        'question' => 'L\'infiltration correspond à :',
                        'choices' => [
                            ['choice_text' => 'l\'entrée de l\'eau dans le sol depuis la surface', 'is_correct' => true],
                            ['choice_text' => 'la sortie de l\'eau d\'un aquifère vers l\'atmosphère uniquement', 'is_correct' => false],
                            ['choice_text' => 'la solidification du magma', 'is_correct' => false],
                            ['choice_text' => 'la formation d\'un fossile', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'infiltration fait pénétrer une partie des précipitations dans le sol.',
                    ],
                    [
                        'question' => 'Une couche de roche très peu perméable peut jouer le rôle de :',
                        'choices' => [
                            ['choice_text' => 'couche confinante', 'is_correct' => true],
                            ['choice_text' => 'aquifère très transmissif', 'is_correct' => false],
                            ['choice_text' => 'source de magma', 'is_correct' => false],
                            ['choice_text' => 'sol organique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une couche peu perméable peut limiter les mouvements verticaux de l\'eau.',
                    ],
                    [
                        'question' => 'Si une pluie apporte 100 mm d\'eau sur un sol et que 30 mm s\'infiltrent, il reste avant autres pertes environ :',
                        'choices' => [
                            ['choice_text' => '70 mm', 'is_correct' => true],
                            ['choice_text' => '30 mm', 'is_correct' => false],
                            ['choice_text' => '100 mm', 'is_correct' => false],
                            ['choice_text' => '130 mm', 'is_correct' => false],
                        ],
                        'explanation' => '100 − 30 = 70 mm dans ce modèle simplifié.',
                    ],
                    [
                        'question' => 'Le pompage excessif d\'une nappe peut entraîner :',
                        'choices' => [
                            ['choice_text' => 'une baisse du niveau de l\'eau souterraine', 'is_correct' => true],
                            ['choice_text' => 'une augmentation automatique de la recharge', 'is_correct' => false],
                            ['choice_text' => 'la formation immédiate de granite', 'is_correct' => false],
                            ['choice_text' => 'la disparition de tous les sols', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les prélèvements dépassent durablement la recharge, le niveau de la nappe peut diminuer.',
                    ],
                    [
                        'question' => 'Les calcaires fissurés peuvent parfois constituer de bons réservoirs d\'eau parce que :',
                        'choices' => [
                            ['choice_text' => 'les fractures et conduits facilitent la circulation de l\'eau', 'is_correct' => true],
                            ['choice_text' => 'ils sont toujours totalement imperméables', 'is_correct' => false],
                            ['choice_text' => 'ils contiennent du magma liquide', 'is_correct' => false],
                            ['choice_text' => 'ils n\'ont aucun espace vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fractures et conduits karstiques peuvent créer des voies d\'écoulement importantes.',
                    ],
                    [
                        'question' => 'Pourquoi la protection des zones de recharge des nappes est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'elles alimentent les nappes et leur qualité influence le risque de contamination', 'is_correct' => true],
                            ['choice_text' => 'elles empêchent toute infiltration', 'is_correct' => false],
                            ['choice_text' => 'elles créent du magma', 'is_correct' => false],
                            ['choice_text' => 'elles suppriment les précipitations', 'is_correct' => false],
                        ],
                        'explanation' => 'Les zones de recharge alimentent les nappes et peuvent être des zones sensibles à la contamination.',
                    ],
                ],
            ],
            [
                'title' => 'Risques géologiques et environnement',
                'description' => 'Séismes, volcans, glissements de terrain et érosion.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Un séisme correspond principalement à :',
                        'choices' => [
                            ['choice_text' => 'une libération brutale d\'énergie dans la lithosphère produisant des vibrations', 'is_correct' => true],
                            ['choice_text' => 'une simple variation de température', 'is_correct' => false],
                            ['choice_text' => 'une précipitation intense', 'is_correct' => false],
                            ['choice_text' => 'une réaction biologique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les séismes résultent généralement d\'une rupture ou d\'un glissement brusque dans la lithosphère.',
                    ],
                    [
                        'question' => 'Le point à la surface situé à la verticale du foyer d\'un séisme est :',
                        'choices' => [
                            ['choice_text' => 'l\'épicentre', 'is_correct' => true],
                            ['choice_text' => 'le magma', 'is_correct' => false],
                            ['choice_text' => 'le foyer', 'is_correct' => false],
                            ['choice_text' => 'le manteau supérieur', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'épicentre est le point de surface directement au-dessus du foyer.',
                    ],
                    [
                        'question' => 'Une coulée de lave est directement associée à :',
                        'choices' => [
                            ['choice_text' => 'une activité volcanique effusive', 'is_correct' => true],
                            ['choice_text' => 'une sédimentation fluviale', 'is_correct' => false],
                            ['choice_text' => 'une érosion glaciaire', 'is_correct' => false],
                            ['choice_text' => 'une activité sismique sans volcanisme', 'is_correct' => false],
                        ],
                        'explanation' => 'Une éruption effusive peut produire des coulées de lave.',
                    ],
                    [
                        'question' => 'Un glissement de terrain est favorisé notamment par :',
                        'choices' => [
                            ['choice_text' => 'une forte pente, la saturation en eau et une diminution de la stabilité du versant', 'is_correct' => true],
                            ['choice_text' => 'uniquement la lumière solaire', 'is_correct' => false],
                            ['choice_text' => 'une absence totale de gravité', 'is_correct' => false],
                            ['choice_text' => 'la rotation de la Lune seule', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente, l\'eau et les propriétés des matériaux influencent la stabilité des versants.',
                    ],
                    [
                        'question' => 'Une pente devient saturée après de fortes pluies. L\'eau peut favoriser un glissement parce qu\'elle :',
                        'choices' => [
                            ['choice_text' => 'augmente le poids des matériaux et peut réduire leur résistance au cisaillement', 'is_correct' => true],
                            ['choice_text' => 'rend toujours les sols plus cohérents', 'is_correct' => false],
                            ['choice_text' => 'supprime la gravité', 'is_correct' => false],
                            ['choice_text' => 'transforme le sol en roche magmatique', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'eau augmente le poids et la pression interstitielle, ce qui peut diminuer la résistance du matériau.',
                    ],
                    [
                        'question' => 'L\'érosion côtière peut être accentuée par :',
                        'choices' => [
                            ['choice_text' => 'l\'action répétée des vagues et des courants', 'is_correct' => true],
                            ['choice_text' => 'la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'la cristallisation des protéines', 'is_correct' => false],
                            ['choice_text' => 'les mutations génétiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vagues et courants peuvent retirer et transporter des sédiments.',
                    ],
                    [
                        'question' => 'Une faille est :',
                        'choices' => [
                            ['choice_text' => 'une fracture de la croûte ou de la lithosphère accompagnée d\'un déplacement relatif', 'is_correct' => true],
                            ['choice_text' => 'un type de minéral', 'is_correct' => false],
                            ['choice_text' => 'une couche de sol', 'is_correct' => false],
                            ['choice_text' => 'un nuage de poussière', 'is_correct' => false],
                        ],
                        'explanation' => 'Une faille est une fracture le long de laquelle les blocs rocheux se sont déplacés relativement l\'un par rapport à l\'autre.',
                    ],
                    [
                        'question' => 'Pourquoi certaines zones proches des volcans peuvent-elles être fertiles ?',
                        'choices' => [
                            ['choice_text' => 'les cendres et matériaux volcaniques peuvent apporter des minéraux au sol après leur altération', 'is_correct' => true],
                            ['choice_text' => 'les volcans produisent toujours de l\'eau douce', 'is_correct' => false],
                            ['choice_text' => 'les laves contiennent uniquement du carbone organique', 'is_correct' => false],
                            ['choice_text' => 'les volcans empêchent toute érosion', 'is_correct' => false],
                        ],
                        'explanation' => 'Les matériaux volcaniques peuvent enrichir certains sols après altération.',
                    ],
                    [
                        'question' => 'Une alerte précoce face à un séisme sert surtout à :',
                        'choices' => [
                            ['choice_text' => 'gagner quelques secondes pour réduire certaines actions à risque', 'is_correct' => true],
                            ['choice_text' => 'empêcher le séisme de se produire', 'is_correct' => false],
                            ['choice_text' => 'arrêter la tectonique des plaques', 'is_correct' => false],
                            ['choice_text' => 'modifier la magnitude après le départ du séisme', 'is_correct' => false],
                        ],
                        'explanation' => 'Une alerte rapide peut transmettre l\'information avant l\'arrivée des secousses les plus fortes dans certaines zones.',
                    ],
                    [
                        'question' => 'Une cartographie des zones exposées à des glissements de terrain peut aider à :',
                        'choices' => [
                            ['choice_text' => 'identifier les secteurs où la prévention doit être renforcée', 'is_correct' => true],
                            ['choice_text' => 'garantir qu\'aucun glissement ne se produira', 'is_correct' => false],
                            ['choice_text' => 'augmenter automatiquement la stabilité de toutes les pentes', 'is_correct' => false],
                            ['choice_text' => 'supprimer les pluies', 'is_correct' => false],
                        ],
                        'explanation' => 'La cartographie des aléas aide à planifier l\'occupation des sols et les mesures de réduction du risque.',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de géologie',
                'description' => 'Synthèse sur Terre, minéraux, roches, temps géologique et risques.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Quelle association est correcte ?',
                        'choices' => [
                            ['choice_text' => 'granite — roche magmatique plutonique', 'is_correct' => true],
                            ['choice_text' => 'calcaire — roche magmatique', 'is_correct' => false],
                            ['choice_text' => 'basalte — roche sédimentaire détritique', 'is_correct' => false],
                            ['choice_text' => 'marbre — roche magmatique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le granite est une roche magmatique intrusive, le calcaire est généralement sédimentaire, le basalte volcanique et le marbre métamorphique.',
                    ],
                    [
                        'question' => 'Un minéral de dureté 7 peut rayer :',
                        'choices' => [
                            ['choice_text' => 'un minéral de dureté 5', 'is_correct' => true],
                            ['choice_text' => 'un diamant de dureté 10', 'is_correct' => false],
                            ['choice_text' => 'un minéral de dureté 9', 'is_correct' => false],
                            ['choice_text' => 'uniquement un minéral de dureté 7', 'is_correct' => false],
                        ],
                        'explanation' => 'Un minéral plus dur peut rayer un minéral moins dur sur l\'échelle de Mohs.',
                    ],
                    [
                        'question' => 'Quel processus forme directement des sédiments ?',
                        'choices' => [
                            ['choice_text' => 'l\'altération et l\'érosion des roches', 'is_correct' => true],
                            ['choice_text' => 'la fusion complète', 'is_correct' => false],
                            ['choice_text' => 'la cristallisation d\'un magma', 'is_correct' => false],
                            ['choice_text' => 'le métamorphisme uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'altération et l\'érosion produisent et déplacent les matériaux qui peuvent devenir des sédiments.',
                    ],
                    [
                        'question' => 'Une roche soumise à pression et température sans fusion complète peut subir :',
                        'choices' => [
                            ['choice_text' => 'un métamorphisme', 'is_correct' => true],
                            ['choice_text' => 'une sédimentation', 'is_correct' => false],
                            ['choice_text' => 'une fusion totale', 'is_correct' => false],
                            ['choice_text' => 'une évaporation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le métamorphisme modifie une roche solide sous des conditions nouvelles de pression et de température.',
                    ],
                    [
                        'question' => 'L\'âge de la Terre est d\'environ :',
                        'choices' => [
                            ['choice_text' => '4,54 milliards d\'années', 'is_correct' => true],
                            ['choice_text' => '54 millions d\'années', 'is_correct' => false],
                            ['choice_text' => '4,54 millions d\'années', 'is_correct' => false],
                            ['choice_text' => '450 000 ans', 'is_correct' => false],
                        ],
                        'explanation' => 'Les données radiométriques placent la formation de la Terre à environ 4,54 milliards d\'années.',
                    ],
                    [
                        'question' => 'Quelle propriété concerne directement la facilité avec laquelle l\'eau traverse une roche ?',
                        'choices' => [
                            ['choice_text' => 'la perméabilité', 'is_correct' => true],
                            ['choice_text' => 'la couleur', 'is_correct' => false],
                            ['choice_text' => 'la dureté', 'is_correct' => false],
                            ['choice_text' => 'le clivage', 'is_correct' => false],
                        ],
                        'explanation' => 'La perméabilité décrit la capacité d\'un matériau à laisser circuler un fluide à travers des pores ou fractures connectés.',
                    ],
                    [
                        'question' => 'Dans une série sédimentaire non renversée, la couche située en dessous est généralement :',
                        'choices' => [
                            ['choice_text' => 'plus ancienne', 'is_correct' => true],
                            ['choice_text' => 'plus récente', 'is_correct' => false],
                            ['choice_text' => 'toujours du même âge', 'is_correct' => false],
                            ['choice_text' => 'forcément magmatique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le principe de superposition indique que les couches inférieures sont généralement plus anciennes.',
                    ],
                    [
                        'question' => 'Une faille peut être décrite comme :',
                        'choices' => [
                            ['choice_text' => 'une fracture accompagnée d\'un déplacement relatif', 'is_correct' => true],
                            ['choice_text' => 'un type de minéral', 'is_correct' => false],
                            ['choice_text' => 'une couche d\'eau', 'is_correct' => false],
                            ['choice_text' => 'une couche de magma à la surface', 'is_correct' => false],
                        ],
                        'explanation' => 'Une faille est une fracture tectonique associée à un déplacement des blocs.',
                    ],
                    [
                        'question' => 'Si 200 mm de pluie tombent et que 80 mm ruissellent, sans autre perte considérée, l\'infiltration est d\'environ :',
                        'choices' => [
                            ['choice_text' => '120 mm', 'is_correct' => true],
                            ['choice_text' => '80 mm', 'is_correct' => false],
                            ['choice_text' => '200 mm', 'is_correct' => false],
                            ['choice_text' => '280 mm', 'is_correct' => false],
                        ],
                        'explanation' => '200 − 80 = 120 mm dans ce modèle simplifié.',
                    ],
                    [
                        'question' => 'Quel énoncé résume le mieux la géologie ?',
                        'choices' => [
                            ['choice_text' => 'elle étudie les matériaux, la structure, les processus et l\'histoire de la Terre', 'is_correct' => true],
                            ['choice_text' => 'elle étudie uniquement les volcans', 'is_correct' => false],
                            ['choice_text' => 'elle concerne uniquement les minéraux précieux', 'is_correct' => false],
                            ['choice_text' => 'elle exclut complètement les eaux souterraines', 'is_correct' => false],
                        ],
                        'explanation' => 'La géologie couvre les minéraux, roches, reliefs, eaux souterraines, tectonique, histoire et risques géologiques.',
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
