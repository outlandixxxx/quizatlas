<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PetrologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'petrology')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la pétrologie',
                'description' => 'Bases de la pétrologie, classification et origine des roches.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'La pétrologie étudie principalement :',
                        'choices' => [
                            ['choice_text' => 'les fossiles et les milieux de vie des êtres vivants disparus', 'is_correct' => false],
                            ['choice_text' => 'les roches, leur origine, leur composition et leur évolution', 'is_correct' => true],
                            ['choice_text' => 'les ondes sismiques et la structure interne du globe', 'is_correct' => false],
                            ['choice_text' => 'les reliefs et l’action de l’érosion à la surface', 'is_correct' => false],
                        ],
                        'explanation' => 'La pétrologie est la branche des sciences de la Terre qui décrit les roches et retrace leur histoire. Les fossiles relèvent de la paléontologie, les ondes sismiques de la géophysique.',
                    ],
                    [
                        'question' => 'Un professeur range la collection du labo en trois grandes familles. Lesquelles ?',
                        'choices' => [
                            ['choice_text' => 'plutoniques, volcaniques et filoniennes', 'is_correct' => false],
                            ['choice_text' => 'détritiques, chimiques et biogènes', 'is_correct' => false],
                            ['choice_text' => 'felsiques, intermédiaires et mafiques', 'is_correct' => false],
                            ['choice_text' => 'magmatiques, sédimentaires et métamorphiques', 'is_correct' => true],
                        ],
                        'explanation' => 'On classe d’abord les roches selon leur mode de formation : refroidissement d’un magma, dépôt de sédiments ou transformation à l’état solide. Les autres séries proposées subdivisent ces familles.',
                    ],
                    [
                        'question' => 'Une roche magmatique se forme principalement par :',
                        'choices' => [
                            ['choice_text' => 'refroidissement et cristallisation d’un magma ou d’une lave', 'is_correct' => true],
                            ['choice_text' => 'tassement et cimentation de sédiments déposés en couches', 'is_correct' => false],
                            ['choice_text' => 'recristallisation d’une roche sous l’effet de la pression', 'is_correct' => false],
                            ['choice_text' => 'précipitation de sels dans une eau qui s’évapore', 'is_correct' => false],
                        ],
                        'explanation' => 'Qu’il refroidisse en profondeur (magma) ou en surface (lave), c’est la solidification du liquide silicaté qui crée la roche.',
                    ],
                    [
                        'question' => 'Le sable d’une plage s’accumule en couches, puis durcit en grès au fil des millions d’années. Quel processus résume cette formation ?',
                        'choices' => [
                            ['choice_text' => 'la cristallisation d’un magma refroidi en profondeur', 'is_correct' => false],
                            ['choice_text' => 'la recristallisation d’une roche sous la chaleur', 'is_correct' => false],
                            ['choice_text' => 'le dépôt de sédiments suivi de leur lithification', 'is_correct' => true],
                            ['choice_text' => 'la fusion partielle puis la remontée d’un liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les grains se déposent, se tassent puis se cimentent : c’est la lithification, étape clé des roches sédimentaires.',
                    ],
                    [
                        'question' => 'Un calcaire est enfoui à 10 km, chauffé et comprimé jusqu’à devenir du marbre, sans avoir fondu. Cette transformation s’appelle :',
                        'choices' => [
                            ['choice_text' => 'la diagenèse', 'is_correct' => false],
                            ['choice_text' => 'l’altération', 'is_correct' => false],
                            ['choice_text' => 'le métamorphisme', 'is_correct' => true],
                            ['choice_text' => 'la fusion partielle', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaleur et pression transforment les minéraux sans faire fondre la roche : c’est le métamorphisme. La diagenèse se limite au durcissement des sédiments près de la surface.',
                    ],
                    [
                        'question' => 'La texture d’une roche décrit notamment :',
                        'choices' => [
                            ['choice_text' => 'la taille, la forme et l’agencement de ses grains ou cristaux', 'is_correct' => true],
                            ['choice_text' => 'la nature chimique des minéraux qui la composent', 'is_correct' => false],
                            ['choice_text' => 'l’âge de la roche et sa position dans une série de couches', 'is_correct' => false],
                            ['choice_text' => 'la couleur et l’éclat de sa surface', 'is_correct' => false],
                        ],
                        'explanation' => 'La texture renseigne sur la façon dont grains ou cristaux sont dimensionnés et assemblés. La composition minéralogique et l’âge sont d’autres caractères.',
                    ],
                    [
                        'question' => 'Dans un bloc de granite, Yassine voit de gros cristaux de quartz, de feldspath et de mica. Cette roche est :',
                        'choices' => [
                            ['choice_text' => 'magmatique volcanique, figée rapidement à la surface', 'is_correct' => false],
                            ['choice_text' => 'sédimentaire détritique, formée de grains cimentés', 'is_correct' => false],
                            ['choice_text' => 'métamorphique foliée, formée sous contrainte', 'is_correct' => false],
                            ['choice_text' => 'magmatique plutonique, refroidie lentement en profondeur', 'is_correct' => true],
                        ],
                        'explanation' => 'De gros cristaux visibles trahissent un refroidissement lent, donc en profondeur : le granite est une roche plutonique.',
                    ],
                    [
                        'question' => 'Dans la collection du laboratoire, quelle roche est sédimentaire et détritique ?',
                        'choices' => [
                            ['choice_text' => 'le marbre', 'is_correct' => false],
                            ['choice_text' => 'le grès', 'is_correct' => true],
                            ['choice_text' => 'le gabbro', 'is_correct' => false],
                            ['choice_text' => 'le gneiss', 'is_correct' => false],
                        ],
                        'explanation' => 'Le grès est fait de grains de sable cimentés. Le marbre et le gneiss sont métamorphiques, le gabbro est magmatique.',
                    ],
                    [
                        'question' => 'Le marbre d’un plan de travail provient de la transformation d’une roche sédimentaire. Laquelle ?',
                        'choices' => [
                            ['choice_text' => 'une argilite', 'is_correct' => false],
                            ['choice_text' => 'un grès', 'is_correct' => false],
                            ['choice_text' => 'un conglomérat', 'is_correct' => false],
                            ['choice_text' => 'un calcaire', 'is_correct' => true],
                        ],
                        'explanation' => 'Le marbre est du calcaire recristallisé sous l’effet de la chaleur et de la pression. L’argilite se transforme en ardoise, le grès en quartzite.',
                    ],
                    [
                        'question' => 'Le quartz est un minéral, le granite est une roche. Quelle phrase décrit correctement leur lien ?',
                        'choices' => [
                            ['choice_text' => 'une roche est un assemblage de minéraux', 'is_correct' => true],
                            ['choice_text' => 'un minéral est un fragment de roche usé par l’érosion', 'is_correct' => false],
                            ['choice_text' => 'un minéral est un mélange de plusieurs roches fondues', 'is_correct' => false],
                            ['choice_text' => 'une roche est un cristal unique de grande taille', 'is_correct' => false],
                        ],
                        'explanation' => 'Un minéral a une composition et une structure cristalline définies ; une roche en associe plusieurs, comme le quartz, le feldspath et le mica dans le granite.',
                    ],
                ],
            ],
            [
                'title' => 'Roches magmatiques : magma et cristallisation',
                'description' => 'Comprendre les magmas, la cristallisation et les roches plutoniques et volcaniques.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Un magma est :',
                        'choices' => [
                            ['choice_text' => 'une lave dégazée qui s’est figée à la surface', 'is_correct' => false],
                            ['choice_text' => 'une roche chauffée mais restée solide en profondeur', 'is_correct' => false],
                            ['choice_text' => 'un mélange de roche fondue, de cristaux et de gaz dissous', 'is_correct' => true],
                            ['choice_text' => 'un fluide chaud riche en eau qui circule dans les failles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le magma est de la roche fondue qui contient aussi des cristaux et des gaz. Sa teneur en silice varie d’un magma à l’autre.',
                    ],
                    [
                        'question' => 'Le refroidissement lent d’un magma favorise :',
                        'choices' => [
                            ['choice_text' => 'la croissance de cristaux de grande taille', 'is_correct' => true],
                            ['choice_text' => 'la formation de verre volcanique', 'is_correct' => false],
                            ['choice_text' => 'la formation de cristaux microscopiques', 'is_correct' => false],
                            ['choice_text' => 'la formation de nombreuses bulles de gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus le refroidissement dure, plus les cristaux ont le temps de grossir. Un refroidissement rapide donne au contraire du verre ou des cristaux microscopiques.',
                    ],
                    [
                        'question' => 'Quelle est la différence entre un magma et une lave ?',
                        'choices' => [
                            ['choice_text' => 'la lave contient plus de cristaux que le magma', 'is_correct' => false],
                            ['choice_text' => 'le magma est riche en silice, la lave en fer', 'is_correct' => false],
                            ['choice_text' => 'le magma se forme dans la croûte, la lave dans le manteau', 'is_correct' => false],
                            ['choice_text' => 'la lave est du magma arrivé à la surface', 'is_correct' => true],
                        ],
                        'explanation' => 'On parle de magma sous terre et de lave une fois le liquide sorti à la surface, où il perd une partie de ses gaz.',
                    ],
                    [
                        'question' => 'Sur le flanc d’un volcan, une coulée de lave se fige en quelques jours. Ses cristaux sont :',
                        'choices' => [
                            ['choice_text' => 'visibles à l’œil nu, car la roche a refroidi lentement', 'is_correct' => false],
                            ['choice_text' => 'microscopiques ou absents, car le refroidissement est rapide', 'is_correct' => true],
                            ['choice_text' => 'alignés en bandes, car la roche a été comprimée', 'is_correct' => false],
                            ['choice_text' => 'arrondis, car ils ont été roulés par l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Une coulée se fige vite au contact de l’air, ce qui laisse peu de temps aux cristaux pour grossir. Les bandes alignées relèvent du métamorphisme, les grains arrondis du transport.',
                    ],
                    [
                        'question' => 'Le basalte, roche sombre très répandue sur les fonds océaniques, est :',
                        'choices' => [
                            ['choice_text' => 'une roche volcanique pauvre en silice', 'is_correct' => true],
                            ['choice_text' => 'une roche plutonique pauvre en silice', 'is_correct' => false],
                            ['choice_text' => 'une roche volcanique riche en silice', 'is_correct' => false],
                            ['choice_text' => 'une roche plutonique riche en silice', 'is_correct' => false],
                        ],
                        'explanation' => 'Le basalte provient d’une lave pauvre en silice qui refroidit rapidement à la surface.',
                    ],
                    [
                        'question' => 'Un magma s’infiltre dans une fissure d’une roche déjà en place et s’y solidifie en une plaque verticale. On parle de :',
                        'choices' => [
                            ['choice_text' => 'une coulée de lave', 'is_correct' => false],
                            ['choice_text' => 'un batholite granitique', 'is_correct' => false],
                            ['choice_text' => 'un filon magmatique', 'is_correct' => true],
                            ['choice_text' => 'une cheminée volcanique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un filon (ou dyke) remplit une fracture de la roche encaissante. Un batholite est un énorme massif plutonique, et une coulée s’étale à la surface.',
                    ],
                    [
                        'question' => 'Une lave qui se fige au contact de l’eau de mer donne un verre noir sans cristaux visibles. Cela s’explique par :',
                        'choices' => [
                            ['choice_text' => 'un refroidissement lent sous plusieurs kilomètres de roches encaissantes', 'is_correct' => false],
                            ['choice_text' => 'un refroidissement trop rapide pour que les cristaux se forment', 'is_correct' => true],
                            ['choice_text' => 'une compression qui a écrasé les cristaux déjà formés', 'is_correct' => false],
                            ['choice_text' => 'une recristallisation de la lave sous l’effet de la chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau froide fige la lave en quelques instants, avant que les atomes aient pu s’organiser en cristaux. Le résultat est un verre volcanique.',
                    ],
                    [
                        'question' => 'La viscosité d’un magma augmente quand :',
                        'choices' => [
                            ['choice_text' => 'sa température s’élève', 'is_correct' => false],
                            ['choice_text' => 'sa teneur en eau dissoute s’élève', 'is_correct' => false],
                            ['choice_text' => 'sa teneur en fer et en magnésium s’élève', 'is_correct' => false],
                            ['choice_text' => 'sa teneur en silice s’élève', 'is_correct' => true],
                        ],
                        'explanation' => 'La silice forme des chaînes qui freinent l’écoulement : un magma riche en silice est pâteux et retient ses gaz, d’où des éruptions plus explosives. La chaleur et l’eau dissoute le fluidifient au contraire.',
                    ],
                    [
                        'question' => 'Comme dans une bouteille de soda qu’on ouvre, la baisse de pression pendant la remontée d’un magma provoque :',
                        'choices' => [
                            ['choice_text' => 'la dissolution de gaz supplémentaires dans le liquide', 'is_correct' => false],
                            ['choice_text' => 'la formation de bulles de gaz qui gonflent le magma', 'is_correct' => true],
                            ['choice_text' => 'la solidification immédiate du magma en verre', 'is_correct' => false],
                            ['choice_text' => 'la fusion de la roche encaissante qui l’entoure', 'is_correct' => false],
                        ],
                        'explanation' => 'Le gaz dissous s’échappe sous forme de bulles quand la pression diminue, ce qui peut rendre une éruption explosive.',
                    ],
                    [
                        'question' => 'Un magma naît dans le manteau ou la croûte par :',
                        'choices' => [
                            ['choice_text' => 'la compression d’une roche froide sous une chaîne de montagnes', 'is_correct' => false],
                            ['choice_text' => 'la dissolution de la roche dans de l’eau très chaude', 'is_correct' => false],
                            ['choice_text' => 'la fusion partielle de la roche environnante', 'is_correct' => true],
                            ['choice_text' => 'la remontée de métal liquide depuis le noyau externe', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hausse de température, une baisse de pression ou un apport d’eau peuvent faire fondre en partie une roche solide : c’est la fusion partielle.',
                    ],
                ],
            ],
            [
                'title' => 'Classification des roches magmatiques',
                'description' => 'Relier composition, texture et environnement de formation aux principales roches magmatiques.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Quelle roche volcanique a pour équivalent plutonique le gabbro ?',
                        'choices' => [
                            ['choice_text' => 'la rhyolite', 'is_correct' => false],
                            ['choice_text' => 'l’andésite', 'is_correct' => false],
                            ['choice_text' => 'la ponce', 'is_correct' => false],
                            ['choice_text' => 'le basalte', 'is_correct' => true],
                        ],
                        'explanation' => 'Le basalte et le gabbro ont la même composition ; ils diffèrent par leur vitesse de refroidissement, rapide en surface pour l’un, lente en profondeur pour l’autre.',
                    ],
                    [
                        'question' => 'Quelle roche plutonique a une composition intermédiaire entre celle du granite et celle du gabbro ?',
                        'choices' => [
                            ['choice_text' => 'la rhyolite', 'is_correct' => false],
                            ['choice_text' => 'la diorite', 'is_correct' => true],
                            ['choice_text' => 'l’andésite', 'is_correct' => false],
                            ['choice_text' => 'la péridotite', 'is_correct' => false],
                        ],
                        'explanation' => 'La diorite est une roche plutonique à grain visible, dont la teneur en silice se situe entre celles du granite et du gabbro.',
                    ],
                    [
                        'question' => 'Les volcans de la cordillère des Andes émettent une lave de composition intermédiaire qui donne :',
                        'choices' => [
                            ['choice_text' => 'du gabbro', 'is_correct' => false],
                            ['choice_text' => 'de la diorite', 'is_correct' => false],
                            ['choice_text' => 'de l’andésite', 'is_correct' => true],
                            ['choice_text' => 'du granite', 'is_correct' => false],
                        ],
                        'explanation' => 'L’andésite est la roche volcanique intermédiaire, courante dans les chaînes liées à une subduction comme les Andes, qui lui ont donné son nom.',
                    ],
                    [
                        'question' => 'Le granite est dit felsique. Quels minéraux y dominent ?',
                        'choices' => [
                            ['choice_text' => 'le quartz et les feldspaths', 'is_correct' => true],
                            ['choice_text' => 'l’olivine et les pyroxènes', 'is_correct' => false],
                            ['choice_text' => 'la calcite et la dolomite', 'is_correct' => false],
                            ['choice_text' => 'le gypse et l’halite', 'is_correct' => false],
                        ],
                        'explanation' => 'Felsique vient de feldspath et silice : quartz et feldspaths dominent. L’olivine et les pyroxènes caractérisent au contraire les roches mafiques.',
                    ],
                    [
                        'question' => 'Le gabbro est une roche sombre et dense. Cette teinte s’explique par :',
                        'choices' => [
                            ['choice_text' => 'sa richesse en quartz et en feldspaths potassiques', 'is_correct' => false],
                            ['choice_text' => 'la présence de verre volcanique noir entre les cristaux', 'is_correct' => false],
                            ['choice_text' => 'un ciment riche en oxydes de fer entre les grains', 'is_correct' => false],
                            ['choice_text' => 'sa richesse en fer et en magnésium (olivine, pyroxènes)', 'is_correct' => true],
                        ],
                        'explanation' => 'Les minéraux ferromagnésiens comme l’olivine et les pyroxènes sont sombres et denses, ce qui donne au gabbro sa teinte et son poids.',
                    ],
                    [
                        'question' => 'Une lave contient quelques cristaux de feldspath d’un centimètre noyés dans une pâte très fine. Cette texture traduit :',
                        'choices' => [
                            ['choice_text' => 'un refroidissement lent et régulier du début à la fin', 'is_correct' => false],
                            ['choice_text' => 'un refroidissement en deux temps, lent puis rapide', 'is_correct' => true],
                            ['choice_text' => 'un refroidissement brutal qui a produit un verre pur', 'is_correct' => false],
                            ['choice_text' => 'deux dépôts de sédiments de tailles différentes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les gros cristaux ont grandi lentement avant l’éruption ; le reste de la lave s’est figé vite en cristaux minuscules.',
                    ],
                    [
                        'question' => 'Une roche magmatique contient 72 % de silice (SiO₂). Elle est classée parmi les roches :',
                        'choices' => [
                            ['choice_text' => 'acides (felsiques)', 'is_correct' => true],
                            ['choice_text' => 'basiques (mafiques)', 'is_correct' => false],
                            ['choice_text' => 'intermédiaires', 'is_correct' => false],
                            ['choice_text' => 'ultrabasiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Au-delà d’environ 63 % de silice, une roche est dite acide, comme le granite ou la rhyolite. Le basalte, vers 50 %, est basique.',
                    ],
                    [
                        'question' => 'Une pierre ponce flotte sur l’eau parce que :',
                        'choices' => [
                            ['choice_text' => 'ses minéraux sont plus légers que l’eau, comme le mica', 'is_correct' => false],
                            ['choice_text' => 'elle est remplie de cavités laissées par la dissolution du calcaire', 'is_correct' => false],
                            ['choice_text' => 'elle est criblée de bulles de gaz figées dans la lave', 'is_correct' => true],
                            ['choice_text' => 'elle contient de la matière organique comme le charbon', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lave riche en silice, visqueuse, a piégé ses bulles de gaz en se figeant : la roche obtenue est très poreuse, donc légère.',
                    ],
                    [
                        'question' => 'Un objet taillé en obsidienne a une cassure brillante et lisse, sans cristaux visibles. Cette roche est :',
                        'choices' => [
                            ['choice_text' => 'un verre volcanique issu d’une lave figée très vite', 'is_correct' => true],
                            ['choice_text' => 'un granite à grains fins, riche en quartz', 'is_correct' => false],
                            ['choice_text' => 'un quartzite recristallisé sous forte pression', 'is_correct' => false],
                            ['choice_text' => 'un basalte à gros cristaux d’olivine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’obsidienne est un verre naturel : la lave s’est figée si vite que les atomes n’ont pas pu former de cristaux.',
                    ],
                    [
                        'question' => 'Deux échantillons ont la même composition : A montre des cristaux de plusieurs millimètres, B une pâte fine. Lequel est plutonique, et pourquoi ?',
                        'choices' => [
                            ['choice_text' => 'B, car une pâte fine se forme lentement sous la surface terrestre', 'is_correct' => false],
                            ['choice_text' => 'A, car de gros cristaux se forment au contact de l’air libre', 'is_correct' => false],
                            ['choice_text' => 'B, car la pâte fine résulte d’un enfouissement très profond', 'is_correct' => false],
                            ['choice_text' => 'A, car de gros cristaux exigent un refroidissement lent', 'is_correct' => true],
                        ],
                        'explanation' => 'La taille des cristaux reflète la vitesse de refroidissement : gros cristaux, refroidissement lent et profond, donc roche plutonique.',
                    ],
                ],
            ],
            [
                'title' => 'Roches sédimentaires',
                'description' => 'Formation des sédiments, lithification, structures et principales catégories sédimentaires.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Les roches détritiques proviennent principalement :',
                        'choices' => [
                            ['choice_text' => 'de débris d’autres roches, arrachés par l’érosion', 'is_correct' => true],
                            ['choice_text' => 'de cristaux formés par le refroidissement d’une lave', 'is_correct' => false],
                            ['choice_text' => 'de sels précipités quand une eau s’évapore', 'is_correct' => false],
                            ['choice_text' => 'de coquilles accumulées par des organismes marins', 'is_correct' => false],
                        ],
                        'explanation' => 'Détritique veut dire « fait de débris » : ces fragments sont arrachés, transportés puis déposés. Les sels relèvent des roches chimiques et les coquilles des roches biogènes.',
                    ],
                    [
                        'question' => 'Au bord d’un oued, Nadia ramasse une roche faite de galets arrondis de 3 à 5 cm noyés dans un ciment. Cette roche est :',
                        'choices' => [
                            ['choice_text' => 'un grès', 'is_correct' => false],
                            ['choice_text' => 'une brèche', 'is_correct' => false],
                            ['choice_text' => 'un conglomérat', 'is_correct' => true],
                            ['choice_text' => 'une argilite', 'is_correct' => false],
                        ],
                        'explanation' => 'Des galets arrondis cimentés forment un conglomérat. Si les éléments étaient anguleux, il s’agirait d’une brèche.',
                    ],
                    [
                        'question' => 'Au microscope, Karim mesure des grains de 0,3 mm dans une roche cimentée. Dans quelle classe de taille se situent-ils ?',
                        'choices' => [
                            ['choice_text' => 'le limon', 'is_correct' => false],
                            ['choice_text' => 'le sable', 'is_correct' => true],
                            ['choice_text' => 'l’argile', 'is_correct' => false],
                            ['choice_text' => 'le gravier', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sable correspond à des grains de 0,06 à 2 mm. En dessous viennent le limon puis l’argile, au-dessus le gravier.',
                    ],
                    [
                        'question' => 'Au fond d’un lac calme, des particules très fines se déposent lentement puis se compactent en une roche tendre qui se débite en feuillets. C’est :',
                        'choices' => [
                            ['choice_text' => 'un grès à ciment calcaire, riche en sable', 'is_correct' => false],
                            ['choice_text' => 'un conglomérat à galets de grande taille', 'is_correct' => false],
                            ['choice_text' => 'un gneiss rubané à gros minéraux', 'is_correct' => false],
                            ['choice_text' => 'une argilite, ou schiste argileux', 'is_correct' => true],
                        ],
                        'explanation' => 'Les boues d’argile compactées donnent une argilite (schiste argileux), roche sédimentaire à grain très fin. Le gneiss, lui, est métamorphique.',
                    ],
                    [
                        'question' => 'Sous le poids de 800 m de sédiments, les grains d’une boue se rapprochent et l’eau est expulsée. Ce phénomène est :',
                        'choices' => [
                            ['choice_text' => 'la cimentation', 'is_correct' => false],
                            ['choice_text' => 'la compaction', 'is_correct' => true],
                            ['choice_text' => 'la dissolution', 'is_correct' => false],
                            ['choice_text' => 'la recristallisation', 'is_correct' => false],
                        ],
                        'explanation' => 'La compaction rapproche les grains sous la pression des couches sus-jacentes et chasse l’eau qui les imbibait.',
                    ],
                    [
                        'question' => 'Dans un grès, de la calcite a précipité entre les grains de quartz et les a soudés. Ce phénomène s’appelle :',
                        'choices' => [
                            ['choice_text' => 'la compaction', 'is_correct' => false],
                            ['choice_text' => 'la recristallisation', 'is_correct' => false],
                            ['choice_text' => 'l’altération', 'is_correct' => false],
                            ['choice_text' => 'la cimentation', 'is_correct' => true],
                        ],
                        'explanation' => 'Des minéraux dissous cristallisent dans les vides entre les grains et jouent le rôle de colle : c’est la cimentation.',
                    ],
                    [
                        'question' => 'Dans une mer chaude peu profonde, des coquilles et des boues riches en carbonate de calcium s’accumulent sur des centaines de mètres. Elles donneront :',
                        'choices' => [
                            ['choice_text' => 'un grès quartzeux', 'is_correct' => false],
                            ['choice_text' => 'un gypse massif', 'is_correct' => false],
                            ['choice_text' => 'un calcaire marin', 'is_correct' => true],
                            ['choice_text' => 'un charbon de type houille', 'is_correct' => false],
                        ],
                        'explanation' => 'Les débris carbonatés se lithifient en calcaire. Le gypse vient de l’évaporation d’une eau salée, le charbon de la matière végétale enfouie.',
                    ],
                    [
                        'question' => 'Dans un bassin fermé sous un climat chaud, l’eau s’évapore et le sel se dépose au fond. La roche obtenue est :',
                        'choices' => [
                            ['choice_text' => 'une évaporite, comme le sel gemme', 'is_correct' => true],
                            ['choice_text' => 'une roche détritique, comme le grès', 'is_correct' => false],
                            ['choice_text' => 'une roche biogène, comme la craie', 'is_correct' => false],
                            ['choice_text' => 'une roche magmatique, comme le gabbro', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand l’évaporation concentre les sels dissous, ils précipitent et forment des évaporites : sel gemme, gypse.',
                    ],
                    [
                        'question' => 'Dans une falaise du littoral, Salma observe une trentaine de couches parallèles contenant des coquilles. Elles correspondent à :',
                        'choices' => [
                            ['choice_text' => 'des coulées de lave empilées à chaque éruption', 'is_correct' => false],
                            ['choice_text' => 'des bandes de minéraux alignées par la pression', 'is_correct' => false],
                            ['choice_text' => 'des dépôts successifs de sédiments marins', 'is_correct' => true],
                            ['choice_text' => 'des fractures parallèles ouvertes par les séismes', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque couche correspond à une phase de dépôt, avec ses propres conditions. Les coquilles confirment l’origine sédimentaire.',
                    ],
                    [
                        'question' => 'Une rivière de montagne perd de la vitesse en arrivant dans la plaine. Quelles particules se déposent en premier ?',
                        'choices' => [
                            ['choice_text' => 'les argiles, les plus fines', 'is_correct' => false],
                            ['choice_text' => 'les galets et les graviers, les plus lourds', 'is_correct' => true],
                            ['choice_text' => 'les limons, les plus légers', 'is_correct' => false],
                            ['choice_text' => 'les ions dissous, qui précipitent aussitôt', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand le courant faiblit, il lâche d’abord ce qu’il porte de plus gros ; les particules fines continuent leur route et se déposent plus loin.',
                    ],
                ],
            ],
            [
                'title' => 'Roches métamorphiques',
                'description' => 'Comprendre le métamorphisme, la pression, la température et les textures métamorphiques.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Le métamorphisme se produit principalement :',
                        'choices' => [
                            ['choice_text' => 'après la fusion complète de la roche d’origine en profondeur', 'is_correct' => false],
                            ['choice_text' => 'à l’état solide, sous l’effet de la température et de la pression', 'is_correct' => true],
                            ['choice_text' => 'à la surface, sous l’action de la pluie et du vent', 'is_correct' => false],
                            ['choice_text' => 'dans une chambre magmatique, lors de la cristallisation du liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les minéraux se réorganisent sous l’effet de la chaleur et de la pression, sans que la roche fonde. Une fusion complète donnerait un magma.',
                    ],
                    [
                        'question' => 'En cassant un schiste, Imane constate qu’il se débite en feuillets parallèles. Cette structure vient de :',
                        'choices' => [
                            ['choice_text' => 'l’alignement des minéraux sous une pression dirigée', 'is_correct' => true],
                            ['choice_text' => 'la stratification des dépôts d’origine', 'is_correct' => false],
                            ['choice_text' => 'l’écoulement d’une lave en fines couches', 'is_correct' => false],
                            ['choice_text' => 'la dissolution de la roche par l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Sous une contrainte orientée, les minéraux plats comme les micas s’alignent en feuillets : c’est la foliation.',
                    ],
                    [
                        'question' => 'Laquelle de ces roches se débite facilement en feuillets minces ?',
                        'choices' => [
                            ['choice_text' => 'le marbre', 'is_correct' => false],
                            ['choice_text' => 'le quartzite', 'is_correct' => false],
                            ['choice_text' => 'le calcaire', 'is_correct' => false],
                            ['choice_text' => 'le schiste', 'is_correct' => true],
                        ],
                        'explanation' => 'Le schiste est une roche métamorphique foliée dont les minéraux orientés créent des plans de débit. Marbre et quartzite forment des masses compactes.',
                    ],
                    [
                        'question' => 'Un granite est enfoui, chauffé et déformé lors de la formation d’une chaîne de montagnes. Il peut devenir :',
                        'choices' => [
                            ['choice_text' => 'un grès', 'is_correct' => false],
                            ['choice_text' => 'un marbre', 'is_correct' => false],
                            ['choice_text' => 'un gneiss', 'is_correct' => true],
                            ['choice_text' => 'une argilite', 'is_correct' => false],
                        ],
                        'explanation' => 'Riche en quartz et en feldspaths, le granite se transforme en gneiss sous l’effet du métamorphisme. Grès et argilite sont sédimentaires, le marbre vient du calcaire.',
                    ],
                    [
                        'question' => 'Les ardoises qui couvrent les toits sont des roches métamorphiques de faible degré. Elles dérivent d’anciennes :',
                        'choices' => [
                            ['choice_text' => 'boues argileuses compactées', 'is_correct' => true],
                            ['choice_text' => 'sables quartzeux cimentés', 'is_correct' => false],
                            ['choice_text' => 'boues calcaires très pures', 'is_correct' => false],
                            ['choice_text' => 'laves basaltiques refroidies', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ardoise est une argile transformée par un métamorphisme faible, d’où sa capacité à se débiter en plaques fines.',
                    ],
                    [
                        'question' => 'Une carrière de quartzite exploite une roche qui était, à l’origine :',
                        'choices' => [
                            ['choice_text' => 'un calcaire riche en calcite', 'is_correct' => false],
                            ['choice_text' => 'une argile riche en micas', 'is_correct' => false],
                            ['choice_text' => 'un grès riche en quartz', 'is_correct' => true],
                            ['choice_text' => 'un granite riche en feldspaths', 'is_correct' => false],
                        ],
                        'explanation' => 'Le quartz du grès recristallise sous la chaleur et la pression en un réseau soudé : c’est le quartzite.',
                    ],
                    [
                        'question' => 'Un granite s’est mis en place au milieu de calcaires. Sur quelques centaines de mètres autour du contact, les calcaires sont devenus du marbre. Quel agent a surtout provoqué cette transformation ?',
                        'choices' => [
                            ['choice_text' => 'la pression d’une chaîne de montagnes voisine', 'is_correct' => false],
                            ['choice_text' => 'l’eau d’une rivière souterraine', 'is_correct' => false],
                            ['choice_text' => 'le poids des sédiments déposés au-dessus', 'is_correct' => false],
                            ['choice_text' => 'la chaleur dégagée par l’intrusion', 'is_correct' => true],
                        ],
                        'explanation' => 'Près d’une intrusion, c’est la chaleur du magma qui cuit les roches voisines : on parle de métamorphisme de contact.',
                    ],
                    [
                        'question' => 'Dans la croûte continentale, la température augmente d’environ 30 °C par kilomètre. À 10 km de profondeur, elle atteint :',
                        'choices' => [
                            ['choice_text' => 'environ 30 °C', 'is_correct' => false],
                            ['choice_text' => 'environ 300 °C', 'is_correct' => true],
                            ['choice_text' => 'environ 600 °C', 'is_correct' => false],
                            ['choice_text' => 'environ 1 000 °C', 'is_correct' => false],
                        ],
                        'explanation' => '10 km × 30 °C/km = 300 °C, une température suffisante pour amorcer les premières réactions métamorphiques.',
                    ],
                    [
                        'question' => 'Dans un schiste, Karim trouve du grenat, un minéral qui se forme dans une gamme précise de température et de pression. Que lui apporte-t-il ?',
                        'choices' => [
                            ['choice_text' => 'une indication sur les conditions subies par la roche', 'is_correct' => true],
                            ['choice_text' => 'la direction dans laquelle la roche a été transportée', 'is_correct' => false],
                            ['choice_text' => 'la vitesse de refroidissement du magma d’origine', 'is_correct' => false],
                            ['choice_text' => 'la profondeur de dépôt des sédiments initiaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque minéral métamorphique se forme dans un domaine de température et de pression bien défini, ce qui permet de reconstituer l’histoire de la roche.',
                    ],
                    [
                        'question' => 'Nadia cherche des coquilles fossiles dans un gneiss, sans en trouver. Quelle est la meilleure explication ?',
                        'choices' => [
                            ['choice_text' => 'les fossiles se conservent mieux dans les roches formées en profondeur', 'is_correct' => false],
                            ['choice_text' => 'le gneiss s’est formé au fond de la mer, hors de portée des organismes', 'is_correct' => false],
                            ['choice_text' => 'les êtres vivants n’habitaient pas les régions où naissent les chaînes de montagnes', 'is_correct' => false],
                            ['choice_text' => 'la recristallisation a effacé les structures de la roche d’origine', 'is_correct' => true],
                        ],
                        'explanation' => 'Chaleur, pression et recristallisation détruisent les coquilles ; les fossiles se conservent surtout dans les roches sédimentaires peu transformées.',
                    ],
                ],
            ],
            [
                'title' => 'Textures et origine des roches',
                'description' => 'Interpréter les textures pour reconstruire les conditions de formation des roches.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Une roche à texture grenue est :',
                        'choices' => [
                            ['choice_text' => 'faite de cristaux microscopiques noyés dans une pâte vitreuse', 'is_correct' => false],
                            ['choice_text' => 'faite de grains arrondis soudés par un ciment', 'is_correct' => false],
                            ['choice_text' => 'faite de cristaux visibles à l’œil nu, bien jointifs', 'is_correct' => true],
                            ['choice_text' => 'faite de minéraux alignés en feuillets parallèles', 'is_correct' => false],
                        ],
                        'explanation' => 'Typique des roches plutoniques comme le granite, la texture grenue associe des cristaux visibles et jointifs. Pâte vitreuse, grains cimentés et feuillets décrivent d’autres textures.',
                    ],
                    [
                        'question' => 'Au microscope, Yassine observe un basalte : de minuscules baguettes de feldspath dans une pâte fine. Cette texture est :',
                        'choices' => [
                            ['choice_text' => 'grenue', 'is_correct' => false],
                            ['choice_text' => 'détritique', 'is_correct' => false],
                            ['choice_text' => 'foliée', 'is_correct' => false],
                            ['choice_text' => 'microlitique', 'is_correct' => true],
                        ],
                        'explanation' => 'Les microlites sont de très petits cristaux qui se forment quand la lave refroidit assez vite. C’est la texture classique des roches volcaniques.',
                    ],
                    [
                        'question' => 'Quelle texture trouve-t-on dans un grès ?',
                        'choices' => [
                            ['choice_text' => 'grenue, avec des cristaux imbriqués', 'is_correct' => false],
                            ['choice_text' => 'détritique, avec des grains cimentés', 'is_correct' => true],
                            ['choice_text' => 'vitreuse, sans cristaux visibles', 'is_correct' => false],
                            ['choice_text' => 'foliée, avec des minéraux alignés', 'is_correct' => false],
                        ],
                        'explanation' => 'Un grès est fait de grains de sable déposés puis cimentés : sa texture est détritique.',
                    ],
                    [
                        'question' => 'Les grains de quartz d’une dune du désert sont très arrondis. Cela indique :',
                        'choices' => [
                            ['choice_text' => 'un long transport, avec de nombreux chocs entre les grains', 'is_correct' => true],
                            ['choice_text' => 'une cristallisation rapide dans un magma très riche en silice', 'is_correct' => false],
                            ['choice_text' => 'un dépôt tout près de la roche d’origine, sans transport', 'is_correct' => false],
                            ['choice_text' => 'un métamorphisme de forte intensité sous une chaîne de montagnes', 'is_correct' => false],
                        ],
                        'explanation' => 'À force de rouler et de s’entrechoquer, les grains perdent leurs angles. Des grains anguleux trahissent au contraire un transport court.',
                    ],
                    [
                        'question' => 'Un sable A a des grains de 0,2 à 0,3 mm, un sable B des grains de 0,02 à 4 mm. Lequel est le mieux trié ?',
                        'choices' => [
                            ['choice_text' => 'B, car il regroupe une grande variété de tailles', 'is_correct' => false],
                            ['choice_text' => 'A, car ses grains sont les plus arrondis', 'is_correct' => false],
                            ['choice_text' => 'A, car ses grains ont des tailles proches', 'is_correct' => true],
                            ['choice_text' => 'B, car il contient les plus gros grains', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bon tri signifie des grains de taille voisine : l’écart est de 0,1 mm dans le sable A contre près de 4 mm dans le sable B.',
                    ],
                    [
                        'question' => 'Les phosphates de Khouribga contiennent des dents et des ossements de poissons et de reptiles marins. Cette roche est :',
                        'choices' => [
                            ['choice_text' => 'sédimentaire, déposée dans une mer ancienne', 'is_correct' => true],
                            ['choice_text' => 'magmatique, cristallisée en profondeur', 'is_correct' => false],
                            ['choice_text' => 'métamorphique, recristallisée sous pression', 'is_correct' => false],
                            ['choice_text' => 'volcanique, figée à la surface', 'is_correct' => false],
                        ],
                        'explanation' => 'Des restes d’animaux marins piégés dans des couches déposées au fond de la mer, c’est la signature d’une roche sédimentaire.',
                    ],
                    [
                        'question' => 'Imane compare deux roches rayées : A est faite de couches de sédiments superposées, B de bandes de minéraux alignés par la pression. Quels sont leurs caractères ?',
                        'choices' => [
                            ['choice_text' => 'A est foliée, B est stratifiée', 'is_correct' => false],
                            ['choice_text' => 'A est stratifiée, B est foliée', 'is_correct' => true],
                            ['choice_text' => 'A et B sont stratifiées', 'is_correct' => false],
                            ['choice_text' => 'A et B sont foliées', 'is_correct' => false],
                        ],
                        'explanation' => 'La stratification vient du dépôt en couches successives, la foliation de l’orientation des minéraux sous contrainte.',
                    ],
                    [
                        'question' => 'À 3 000 m d’altitude dans le Haut Atlas, Nadia trouve un calcaire plein de coquilles marines. Que peut-on en conclure ?',
                        'choices' => [
                            ['choice_text' => 'le calcaire s’est formé à cette altitude, par évaporation d’un lac', 'is_correct' => false],
                            ['choice_text' => 'le calcaire est un ancien magma qui a emprisonné des coquilles', 'is_correct' => false],
                            ['choice_text' => 'des glaciers ont apporté les coquilles et les ont cimentées sur place', 'is_correct' => false],
                            ['choice_text' => 'ces roches se sont déposées au fond d’une mer, puis ont été soulevées', 'is_correct' => true],
                        ],
                        'explanation' => 'Des coquilles marines prouvent un dépôt sous la mer ; l’altitude actuelle résulte du soulèvement de la chaîne.',
                    ],
                    [
                        'question' => 'Pour creuser un puits dans une région aride, Karim cherche une roche qui retient l’eau et la laisse circuler. Il vise :',
                        'choices' => [
                            ['choice_text' => 'une argilite, poreuse mais imperméable', 'is_correct' => false],
                            ['choice_text' => 'un grès, poreux et perméable', 'is_correct' => true],
                            ['choice_text' => 'un granite sain, compact et peu fissuré', 'is_correct' => false],
                            ['choice_text' => 'un marbre à gros cristaux soudés', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vides entre les grains d’un grès stockent l’eau et lui permettent de circuler. L’argile la retient sans la laisser passer, et les roches cristallines compactes en contiennent peu.',
                    ],
                    [
                        'question' => 'Face à un échantillon inconnu, quel est le meilleur premier réflexe pour trancher entre les trois familles de roches ?',
                        'choices' => [
                            ['choice_text' => 'verser de l’acide dessus et regarder si la roche fait effervescence', 'is_correct' => false],
                            ['choice_text' => 'peser l’échantillon pour calculer sa masse volumique', 'is_correct' => false],
                            ['choice_text' => 'observer la texture : cristaux, grains cimentés ou minéraux alignés', 'is_correct' => true],
                            ['choice_text' => 'noter la couleur dominante et l’éclat de la surface', 'is_correct' => false],
                        ],
                        'explanation' => 'Cristaux imbriqués (magmatique), grains cimentés (sédimentaire) ou minéraux orientés (métamorphique) : l’aspect de la roche révèle son mode de formation. L’acide sert surtout à repérer les carbonates.',
                    ],
                ],
            ],
            [
                'title' => 'Cycle des roches et pétrogenèse',
                'description' => 'Relier magmatisme, sédimentation et métamorphisme dans le cycle des roches.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'La pétrogenèse désigne :',
                        'choices' => [
                            ['choice_text' => 'la description des minéraux au microscope', 'is_correct' => false],
                            ['choice_text' => 'la datation des roches par radioactivité', 'is_correct' => false],
                            ['choice_text' => 'la recherche des gisements de pétrole', 'is_correct' => false],
                            ['choice_text' => 'l’ensemble des processus qui forment les roches', 'is_correct' => true],
                        ],
                        'explanation' => 'Pétro- vient du grec pour « roche » et genèse signifie formation. Le terme couvre la naissance des roches magmatiques, sédimentaires et métamorphiques.',
                    ],
                    [
                        'question' => 'Un bloc de granite se désagrège en haut d’une montagne ; ses grains de quartz descendent par un fleuve jusqu’à la mer, où ils s’accumulent. Quelle roche peut en résulter ?',
                        'choices' => [
                            ['choice_text' => 'un gneiss', 'is_correct' => false],
                            ['choice_text' => 'un basalte', 'is_correct' => false],
                            ['choice_text' => 'un grès', 'is_correct' => true],
                            ['choice_text' => 'un marbre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les grains arrachés au granite s’accumulent puis se cimentent en grès : une roche magmatique est devenue sédimentaire.',
                    ],
                    [
                        'question' => 'Une roche sédimentaire se retrouve enfouie à 10 km, où règnent environ 300 °C et une forte pression. Elle peut devenir :',
                        'choices' => [
                            ['choice_text' => 'une roche métamorphique', 'is_correct' => true],
                            ['choice_text' => 'une roche détritique', 'is_correct' => false],
                            ['choice_text' => 'une roche volcanique', 'is_correct' => false],
                            ['choice_text' => 'une évaporite', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’état solide, la roche se transforme sous l’effet de la chaleur et de la pression : elle quitte la famille sédimentaire pour la famille métamorphique.',
                    ],
                    [
                        'question' => 'Du gneiss formé à 20 km de profondeur affleure aujourd’hui au sommet d’une montagne. Quel mécanisme l’a amené à la surface ?',
                        'choices' => [
                            ['choice_text' => 'le dépôt de nouvelles couches sédimentaires au-dessus de lui', 'is_correct' => false],
                            ['choice_text' => 'le soulèvement de la chaîne puis l’érosion des roches qui le recouvraient', 'is_correct' => true],
                            ['choice_text' => 'un refroidissement du magma situé en dessous de la chaîne', 'is_correct' => false],
                            ['choice_text' => 'l’effondrement du sol sous le poids de la montagne', 'is_correct' => false],
                        ],
                        'explanation' => 'Le soulèvement tectonique rapproche les roches profondes de la surface, puis l’érosion enlève ce qui les couvre.',
                    ],
                    [
                        'question' => 'Quelle suite d’événements fait passer une roche sédimentaire dans la famille des roches magmatiques ?',
                        'choices' => [
                            ['choice_text' => 'la compaction, puis la cimentation des grains', 'is_correct' => false],
                            ['choice_text' => 'la recristallisation à l’état solide sous la chaleur', 'is_correct' => false],
                            ['choice_text' => 'l’altération, puis le transport des fragments', 'is_correct' => false],
                            ['choice_text' => 'la fusion, puis le refroidissement du magma formé', 'is_correct' => true],
                        ],
                        'explanation' => 'Il faut passer par un liquide : la roche fond en profondeur, puis le magma cristallise en refroidissant. Les autres chemins restent sédimentaires ou mènent au métamorphisme.',
                    ],
                    [
                        'question' => 'Le cycle des roches décrit :',
                        'choices' => [
                            ['choice_text' => 'le déplacement des plaques tectoniques sur le manteau', 'is_correct' => false],
                            ['choice_text' => 'le recyclage des roches entre les trois familles', 'is_correct' => true],
                            ['choice_text' => 'la circulation de l’eau entre océans, atmosphère et continents', 'is_correct' => false],
                            ['choice_text' => 'la succession des ères géologiques depuis la formation de la Terre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les roches ne sont pas figées : altération, fusion ou métamorphisme les transforment en d’autres roches. La circulation de l’eau relève d’un autre cycle.',
                    ],
                    [
                        'question' => 'Après des siècles, un bloc de granite en montagne se désagrège en sable et en argile. Ce processus s’appelle :',
                        'choices' => [
                            ['choice_text' => 'le métamorphisme', 'is_correct' => false],
                            ['choice_text' => 'la diagenèse', 'is_correct' => false],
                            ['choice_text' => 'l’altération', 'is_correct' => true],
                            ['choice_text' => 'la fusion partielle', 'is_correct' => false],
                        ],
                        'explanation' => 'Gel, eau et réactions chimiques attaquent la roche : c’est l’altération, qui fournit les matériaux des futurs sédiments.',
                    ],
                    [
                        'question' => 'Sur un schéma du cycle des roches, quelle flèche relie le magma aux roches magmatiques ?',
                        'choices' => [
                            ['choice_text' => 'la cristallisation', 'is_correct' => true],
                            ['choice_text' => 'la lithification', 'is_correct' => false],
                            ['choice_text' => 'le métamorphisme', 'is_correct' => false],
                            ['choice_text' => 'l’altération', 'is_correct' => false],
                        ],
                        'explanation' => 'En refroidissant, le magma cristallise et donne une roche magmatique. La lithification, elle, concerne les sédiments.',
                    ],
                    [
                        'question' => 'Un calcaire est transformé en marbre ; le marbre est ensuite érodé, et ses débris se déposent pour former un nouveau calcaire détritique. Combien de familles de roches l’histoire a-t-elle traversées ?',
                        'choices' => [
                            ['choice_text' => 'trois : sédimentaire, métamorphique et magmatique', 'is_correct' => false],
                            ['choice_text' => 'une famille, car la composition chimique est restée la même', 'is_correct' => false],
                            ['choice_text' => 'quatre, en comptant le passage par la lave', 'is_correct' => false],
                            ['choice_text' => 'deux : sédimentaire et métamorphique', 'is_correct' => true],
                        ],
                        'explanation' => 'Le calcaire (sédimentaire) devient marbre (métamorphique) puis redevient sédimentaire : deux familles, mais trois états successifs.',
                    ],
                    [
                        'question' => 'Quelles sont les deux grandes sources d’énergie qui entretiennent le cycle des roches ?',
                        'choices' => [
                            ['choice_text' => 'la chaleur interne de la Terre et l’énergie solaire', 'is_correct' => true],
                            ['choice_text' => 'l’attraction de la Lune et les marées', 'is_correct' => false],
                            ['choice_text' => 'le champ magnétique et la rotation de la Terre', 'is_correct' => false],
                            ['choice_text' => 'le vent et la pression atmosphérique', 'is_correct' => false],
                        ],
                        'explanation' => 'La chaleur interne pilote la tectonique, le magmatisme et le métamorphisme ; le Soleil alimente l’altération, l’érosion et le transport.',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de pétrologie',
                'description' => 'Quiz de synthèse sur les roches magmatiques, sédimentaires et métamorphiques, et sur leurs textures.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Sur le terrain, Salma décrit une roche rubanée : bandes claires de quartz et de feldspath, bandes sombres riches en mica. Elle la classe parmi les roches :',
                        'choices' => [
                            ['choice_text' => 'métamorphiques', 'is_correct' => true],
                            ['choice_text' => 'sédimentaires', 'is_correct' => false],
                            ['choice_text' => 'volcaniques', 'is_correct' => false],
                            ['choice_text' => 'plutoniques', 'is_correct' => false],
                        ],
                        'explanation' => 'Ce rubanement résulte de l’alignement des minéraux sous contrainte : c’est un gneiss, donc une roche métamorphique.',
                    ],
                    [
                        'question' => 'Rangez ces trois roches de la plus rapidement refroidie à la plus lentement refroidie : granite, obsidienne, basalte. Quel est le bon ordre ?',
                        'choices' => [
                            ['choice_text' => 'granite, basalte, obsidienne', 'is_correct' => false],
                            ['choice_text' => 'obsidienne, basalte, granite', 'is_correct' => true],
                            ['choice_text' => 'basalte, obsidienne, granite', 'is_correct' => false],
                            ['choice_text' => 'obsidienne, granite, basalte', 'is_correct' => false],
                        ],
                        'explanation' => 'L’obsidienne est un verre figé très vite, le basalte refroidit rapidement en surface, le granite lentement en profondeur.',
                    ],
                    [
                        'question' => 'Un échantillon sédimentaire plein de coquilles fait effervescence au contact de l’acide chlorhydrique dilué. C’est :',
                        'choices' => [
                            ['choice_text' => 'un gypse', 'is_correct' => false],
                            ['choice_text' => 'un grès', 'is_correct' => false],
                            ['choice_text' => 'une argilite', 'is_correct' => false],
                            ['choice_text' => 'un calcaire', 'is_correct' => true],
                        ],
                        'explanation' => 'L’effervescence trahit la présence de carbonate de calcium, donc d’un calcaire. Le gypse ne réagit pas à l’acide dilué.',
                    ],
                    [
                        'question' => 'Un basalte à pâte fine, criblé de petites cavités rondes, a refroidi :',
                        'choices' => [
                            ['choice_text' => 'à plusieurs kilomètres de profondeur, sous forte pression', 'is_correct' => false],
                            ['choice_text' => 'au fond d’un bassin, sous une épaisse couche de sédiments', 'is_correct' => false],
                            ['choice_text' => 'près de la surface, pendant que des gaz s’échappaient', 'is_correct' => true],
                            ['choice_text' => 'lentement, dans un pluton entouré de roches encaissantes', 'is_correct' => false],
                        ],
                        'explanation' => 'La pâte fine indique un refroidissement rapide et les cavités sont d’anciennes bulles de gaz : la lave était en surface ou tout près.',
                    ],
                    [
                        'question' => 'Quel couple « roche d’origine → roche transformée » est exact ?',
                        'choices' => [
                            ['choice_text' => 'granite → gneiss', 'is_correct' => true],
                            ['choice_text' => 'calcaire → quartzite', 'is_correct' => false],
                            ['choice_text' => 'grès → marbre', 'is_correct' => false],
                            ['choice_text' => 'argilite → marbre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le granite devient gneiss, le calcaire marbre, le grès quartzite et l’argilite ardoise ou schiste.',
                    ],
                    [
                        'question' => 'Teneurs en silice : basalte 50 %, andésite 58 %, rhyolite 72 %. De combien de points la rhyolite dépasse-t-elle le basalte ?',
                        'choices' => [
                            ['choice_text' => '8 points', 'is_correct' => false],
                            ['choice_text' => '14 points', 'is_correct' => false],
                            ['choice_text' => '22 points', 'is_correct' => true],
                            ['choice_text' => '30 points', 'is_correct' => false],
                        ],
                        'explanation' => '72 − 50 = 22 points. L’andésite se place entre les deux : 8 points au-dessus du basalte et 14 sous la rhyolite.',
                    ],
                    [
                        'question' => 'Un sculpteur veut une roche à grain fin, tendre et qui prend un beau poli. Il choisit :',
                        'choices' => [
                            ['choice_text' => 'du granite', 'is_correct' => false],
                            ['choice_text' => 'du marbre', 'is_correct' => true],
                            ['choice_text' => 'du quartzite', 'is_correct' => false],
                            ['choice_text' => 'du basalte', 'is_correct' => false],
                        ],
                        'explanation' => 'Le marbre, formé de petits cristaux de calcite, est tendre (dureté 3 sur l’échelle de Mohs) et se polit bien. Granite, quartzite et basalte sont bien plus durs.',
                    ],
                    [
                        'question' => 'Dans un forage, on traverse de haut en bas : une argilite, un calcaire, puis un grès. Sans déformation, quelle couche est la plus ancienne ?',
                        'choices' => [
                            ['choice_text' => 'l’argilite, car elle forme le sommet de la série', 'is_correct' => false],
                            ['choice_text' => 'le calcaire, car il occupe la position intermédiaire', 'is_correct' => false],
                            ['choice_text' => 'les trois ont le même âge, puisqu’elles sont dans le même forage', 'is_correct' => false],
                            ['choice_text' => 'le grès, car il a été déposé en premier, tout en bas', 'is_correct' => true],
                        ],
                        'explanation' => 'C’est le principe de superposition : sans déformation, les couches du bas ont été déposées avant celles du haut.',
                    ],
                    [
                        'question' => 'Dans une coulée de basalte, Karim ne trouve aucun fossile. Quelle explication est la bonne ?',
                        'choices' => [
                            ['choice_text' => 'le basalte est trop dur pour que la fossilisation puisse s’y produire', 'is_correct' => false],
                            ['choice_text' => 'la lave, à plus de 1 000 °C, détruit les restes d’organismes qu’elle recouvre', 'is_correct' => true],
                            ['choice_text' => 'la faible teneur en silice du basalte dissout les coquilles', 'is_correct' => false],
                            ['choice_text' => 'les organismes n’ont pas colonisé les régions volcaniques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lave dépasse 1 000 °C : elle brûle ou détruit ce qu’elle recouvre, alors que les fossiles se conservent dans des sédiments déposés à basse température.',
                    ],
                    [
                        'question' => 'Granite, grès et gneiss appartiennent à trois familles différentes. Quel appariement est correct ?',
                        'choices' => [
                            ['choice_text' => 'granite sédimentaire, grès métamorphique, gneiss magmatique', 'is_correct' => false],
                            ['choice_text' => 'granite métamorphique, grès magmatique, gneiss sédimentaire', 'is_correct' => false],
                            ['choice_text' => 'granite magmatique, grès sédimentaire, gneiss métamorphique', 'is_correct' => true],
                            ['choice_text' => 'granite magmatique, grès métamorphique, gneiss sédimentaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le granite cristallise à partir d’un magma, le grès naît de grains cimentés et le gneiss d’une transformation à l’état solide.',
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