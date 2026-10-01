<?php

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
                            ['choice_text' => 'les roches, leur origine, leur composition et leur évolution', 'is_correct' => true],
                            ['choice_text' => 'uniquement les fossiles', 'is_correct' => false],
                            ['choice_text' => 'uniquement les séismes', 'is_correct' => false],
                            ['choice_text' => 'uniquement les océans', 'is_correct' => false],
                        ],
                        'explanation' => 'La pétrologie est la branche des sciences de la Terre consacrée aux roches, à leur composition, leur texture, leur origine et leur évolution.',
                    ],
                    [
                        'question' => 'Les trois grandes familles de roches sont :',
                        'choices' => [
                            ['choice_text' => 'magmatiques, sédimentaires et métamorphiques', 'is_correct' => true],
                            ['choice_text' => 'granitiques, calcaires et métalliques', 'is_correct' => false],
                            ['choice_text' => 'cristallines, liquides et gazeuses', 'is_correct' => false],
                            ['choice_text' => 'volcaniques, océaniques et atmosphériques', 'is_correct' => false],
                        ],
                        'explanation' => 'La classification fondamentale distingue les roches magmatiques, sédimentaires et métamorphiques.',
                    ],
                    [
                        'question' => 'Une roche magmatique se forme principalement par :',
                        'choices' => [
                            ['choice_text' => 'refroidissement et cristallisation d\'un magma ou d\'une lave', 'is_correct' => true],
                            ['choice_text' => 'compaction de sédiments uniquement', 'is_correct' => false],
                            ['choice_text' => 'évaporation de l\'eau uniquement', 'is_correct' => false],
                            ['choice_text' => 'déformation d\'une roche sans changement de température', 'is_correct' => false],
                        ],
                        'explanation' => 'Les roches magmatiques se forment lorsque le magma ou la lave refroidit et cristallise.',
                    ],
                    [
                        'question' => 'Une roche sédimentaire se forme le plus souvent par :',
                        'choices' => [
                            ['choice_text' => 'accumulation, dépôt puis lithification ou précipitation de sédiments', 'is_correct' => true],
                            ['choice_text' => 'fusion complète d\'une roche', 'is_correct' => false],
                            ['choice_text' => 'solidification du noyau terrestre', 'is_correct' => false],
                            ['choice_text' => 'refroidissement d\'une lave', 'is_correct' => false],
                        ],
                        'explanation' => 'Les roches sédimentaires résultent de dépôts de sédiments, de précipitation chimique ou d\'activités biologiques suivies de transformations.',
                    ],
                    [
                        'question' => 'Une roche métamorphique provient :',
                        'choices' => [
                            ['choice_text' => 'de la transformation d\'une roche préexistante à l\'état solide', 'is_correct' => true],
                            ['choice_text' => 'toujours d\'une lave refroidie', 'is_correct' => false],
                            ['choice_text' => 'uniquement de coquilles accumulées', 'is_correct' => false],
                            ['choice_text' => 'de la condensation de vapeur d\'eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le métamorphisme transforme une roche à l\'état solide sous l\'effet de la température, de la pression et parfois des fluides.',
                    ],
                    [
                        'question' => 'La texture d\'une roche décrit notamment :',
                        'choices' => [
                            ['choice_text' => 'la taille, la forme et l\'organisation de ses grains ou cristaux', 'is_correct' => true],
                            ['choice_text' => 'son âge exact uniquement', 'is_correct' => false],
                            ['choice_text' => 'sa couleur uniquement', 'is_correct' => false],
                            ['choice_text' => 'sa profondeur actuelle uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La texture renseigne sur la taille, la forme et les relations entre les constituants de la roche.',
                    ],
                    [
                        'question' => 'Le granite est généralement :',
                        'choices' => [
                            ['choice_text' => 'une roche magmatique plutonique', 'is_correct' => true],
                            ['choice_text' => 'une roche sédimentaire', 'is_correct' => false],
                            ['choice_text' => 'une roche métamorphique', 'is_correct' => false],
                            ['choice_text' => 'un minerai pur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le granite cristallise lentement en profondeur et appartient donc aux roches magmatiques plutoniques.',
                    ],
                    [
                        'question' => 'Le grès est généralement :',
                        'choices' => [
                            ['choice_text' => 'une roche sédimentaire détritique', 'is_correct' => true],
                            ['choice_text' => 'une roche magmatique volcanique', 'is_correct' => false],
                            ['choice_text' => 'une roche métamorphique foliée', 'is_correct' => false],
                            ['choice_text' => 'un minéral', 'is_correct' => false],
                        ],
                        'explanation' => 'Le grès est formé de grains de sable cimentés, ce qui en fait une roche sédimentaire détritique.',
                    ],
                    [
                        'question' => 'Le marbre est généralement issu du métamorphisme :',
                        'choices' => [
                            ['choice_text' => 'd\'un calcaire', 'is_correct' => true],
                            ['choice_text' => 'd\'un basalte', 'is_correct' => false],
                            ['choice_text' => 'd\'un granite', 'is_correct' => false],
                            ['choice_text' => 'd\'un grès quartzeux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le marbre résulte généralement de la recristallisation métamorphique d\'un calcaire ou d\'une autre roche carbonatée.',
                    ],
                    [
                        'question' => 'Pourquoi l\'étude des roches est-elle utile en géologie ?',
                        'choices' => [
                            ['choice_text' => 'elle renseigne sur les conditions et les processus qui ont affecté la Terre', 'is_correct' => true],
                            ['choice_text' => 'elle permet uniquement de mesurer les précipitations', 'is_correct' => false],
                            ['choice_text' => 'elle remplace toutes les autres sciences de la Terre', 'is_correct' => false],
                            ['choice_text' => 'elle donne toujours l\'âge exact d\'une roche sans analyse', 'is_correct' => false],
                        ],
                        'explanation' => 'Les roches conservent des informations sur leur environnement de formation et sur les transformations géologiques qu\'elles ont subies.',
                    ],
                ],
            ],
            [
                'title' => 'Roches magmatiques : magma et cristallisation',
                'description' => 'Comprendre les magmas, la cristallisation et les roches plutoniques et volcaniques.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Un magma est principalement :',
                        'choices' => [
                            ['choice_text' => 'un matériau silicaté en fusion contenant souvent des cristaux et des gaz dissous', 'is_correct' => true],
                            ['choice_text' => 'une roche totalement solide', 'is_correct' => false],
                            ['choice_text' => 'un sédiment sec', 'is_correct' => false],
                            ['choice_text' => 'une eau très salée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le magma est un mélange silicaté partiellement ou totalement fondu, pouvant contenir des cristaux et des gaz dissous.',
                    ],
                    [
                        'question' => 'Le refroidissement lent d\'un magma favorise :',
                        'choices' => [
                            ['choice_text' => 'la formation de cristaux relativement grands', 'is_correct' => true],
                            ['choice_text' => 'la formation obligatoire d\'une texture vitreuse', 'is_correct' => false],
                            ['choice_text' => 'la disparition de tous les minéraux', 'is_correct' => false],
                            ['choice_text' => 'la formation directe d\'un sédiment', 'is_correct' => false],
                        ],
                        'explanation' => 'Un refroidissement lent laisse davantage de temps aux cristaux pour croître.',
                    ],
                    [
                        'question' => 'Une roche magmatique à gros cristaux indique généralement :',
                        'choices' => [
                            ['choice_text' => 'un refroidissement relativement lent en profondeur', 'is_correct' => true],
                            ['choice_text' => 'un refroidissement instantané à la surface', 'is_correct' => false],
                            ['choice_text' => 'une origine purement sédimentaire', 'is_correct' => false],
                            ['choice_text' => 'une absence de cristallisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Les gros cristaux sont typiques d\'une cristallisation lente, comme dans les roches plutoniques.',
                    ],
                    [
                        'question' => 'Une roche volcanique se forme généralement :',
                        'choices' => [
                            ['choice_text' => 'à la surface ou près de la surface après refroidissement rapide d\'une lave', 'is_correct' => true],
                            ['choice_text' => 'uniquement au noyau', 'is_correct' => false],
                            ['choice_text' => 'par compactage de sédiments', 'is_correct' => false],
                            ['choice_text' => 'par métamorphisme profond', 'is_correct' => false],
                        ],
                        'explanation' => 'Les laves refroidissent rapidement à la surface et donnent des roches volcaniques à grains fins ou vitreuses.',
                    ],
                    [
                        'question' => 'Le basalte est généralement une roche :',
                        'choices' => [
                            ['choice_text' => 'volcanique mafique', 'is_correct' => true],
                            ['choice_text' => 'plutonique felsique', 'is_correct' => false],
                            ['choice_text' => 'sédimentaire carbonatée', 'is_correct' => false],
                            ['choice_text' => 'métamorphique foliée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le basalte est une roche volcanique riche en minéraux ferromagnésiens et relativement pauvre en silice par rapport aux roches felsiques.',
                    ],
                    [
                        'question' => 'Le granite est généralement riche en :',
                        'choices' => [
                            ['choice_text' => 'quartz et feldspaths', 'is_correct' => true],
                            ['choice_text' => 'calcite et gypse', 'is_correct' => false],
                            ['choice_text' => 'halite et galène', 'is_correct' => false],
                            ['choice_text' => 'charbon et matière organique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le granite contient généralement beaucoup de quartz et de feldspaths, avec des micas et autres minéraux accessoires.',
                    ],
                    [
                        'question' => 'Une texture vitreuse dans une roche volcanique indique souvent :',
                        'choices' => [
                            ['choice_text' => 'un refroidissement tellement rapide que les cristaux ont eu peu de temps pour se former', 'is_correct' => true],
                            ['choice_text' => 'un refroidissement extrêmement lent', 'is_correct' => false],
                            ['choice_text' => 'un dépôt sédimentaire marin', 'is_correct' => false],
                            ['choice_text' => 'un métamorphisme régional', 'is_correct' => false],
                        ],
                        'explanation' => 'Un refroidissement très rapide peut empêcher la croissance de cristaux et produire une texture vitreuse.',
                    ],
                    [
                        'question' => 'La viscosité d\'un magma tend à augmenter quand :',
                        'choices' => [
                            ['choice_text' => 'sa teneur en silice augmente', 'is_correct' => true],
                            ['choice_text' => 'sa température augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'sa teneur en gaz devient nulle', 'is_correct' => false],
                            ['choice_text' => 'il contient davantage d\'eau liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les magmas riches en silice sont généralement plus visqueux, ce qui ralentit leur écoulement.',
                    ],
                    [
                        'question' => 'Un magma très visqueux peut favoriser :',
                        'choices' => [
                            ['choice_text' => 'des éruptions plus explosives si les gaz restent piégés', 'is_correct' => true],
                            ['choice_text' => 'un écoulement toujours très fluide', 'is_correct' => false],
                            ['choice_text' => 'une sédimentation marine directe', 'is_correct' => false],
                            ['choice_text' => 'une absence totale de gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'Une forte viscosité peut empêcher les gaz de s\'échapper facilement et favoriser une accumulation de pression.',
                    ],
                    [
                        'question' => 'Si une lave refroidit en quelques minutes, sa texture sera souvent :',
                        'choices' => [
                            ['choice_text' => 'fine ou vitreuse', 'is_correct' => true],
                            ['choice_text' => 'à très gros cristaux visibles', 'is_correct' => false],
                            ['choice_text' => 'foliée', 'is_correct' => false],
                            ['choice_text' => 'détritique stratifiée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le refroidissement rapide limite la croissance des cristaux visibles et peut même produire du verre volcanique.',
                    ],
                ],
            ],
            [
                'title' => 'Classification des roches magmatiques',
                'description' => 'Relier composition, texture et environnement de formation aux principales roches magmatiques.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Le gabbro est l\'équivalent plutonique approximatif de :',
                        'choices' => [
                            ['choice_text' => 'du basalte', 'is_correct' => true],
                            ['choice_text' => 'du granite', 'is_correct' => false],
                            ['choice_text' => 'du grès', 'is_correct' => false],
                            ['choice_text' => 'du marbre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le gabbro et le basalte ont des compositions globalement proches mais des histoires de refroidissement différentes.',
                    ],
                    [
                        'question' => 'La diorite est généralement :',
                        'choices' => [
                            ['choice_text' => 'une roche plutonique intermédiaire', 'is_correct' => true],
                            ['choice_text' => 'une roche volcanique ultramafique', 'is_correct' => false],
                            ['choice_text' => 'une roche sédimentaire', 'is_correct' => false],
                            ['choice_text' => 'une roche métamorphique carbonatée', 'is_correct' => false],
                        ],
                        'explanation' => 'La diorite est une roche plutonique de composition intermédiaire entre granite et gabbro.',
                    ],
                    [
                        'question' => 'L\'andésite est généralement une roche :',
                        'choices' => [
                            ['choice_text' => 'volcanique intermédiaire', 'is_correct' => true],
                            ['choice_text' => 'plutonique très riche en quartz', 'is_correct' => false],
                            ['choice_text' => 'sédimentaire détritique', 'is_correct' => false],
                            ['choice_text' => 'métamorphique foliée', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'andésite est une roche volcanique de composition intermédiaire, fréquente dans certains contextes de subduction.',
                    ],
                    [
                        'question' => 'Une roche felsique est généralement riche en :',
                        'choices' => [
                            ['choice_text' => 'silice et feldspaths', 'is_correct' => true],
                            ['choice_text' => 'fer métallique pur', 'is_correct' => false],
                            ['choice_text' => 'calcite uniquement', 'is_correct' => false],
                            ['choice_text' => 'matière organique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les roches felsiques sont généralement riches en silice et en minéraux comme les feldspaths et le quartz.',
                    ],
                    [
                        'question' => 'Une roche mafique contient généralement davantage de :',
                        'choices' => [
                            ['choice_text' => 'fer et magnésium', 'is_correct' => true],
                            ['choice_text' => 'quartz et potassium uniquement', 'is_correct' => false],
                            ['choice_text' => 'carbonate de calcium', 'is_correct' => false],
                            ['choice_text' => 'matière organique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les roches mafiques sont plus riches en fer et magnésium et généralement plus pauvres en silice que les roches felsiques.',
                    ],
                    [
                        'question' => 'La texture porphyrique indique souvent :',
                        'choices' => [
                            ['choice_text' => 'deux étapes de refroidissement avec des cristaux de tailles différentes', 'is_correct' => true],
                            ['choice_text' => 'une origine exclusivement sédimentaire', 'is_correct' => false],
                            ['choice_text' => 'une absence de cristallisation', 'is_correct' => false],
                            ['choice_text' => 'un seul refroidissement instantané', 'is_correct' => false],
                        ],
                        'explanation' => 'Une texture porphyrique peut se former lorsqu\'une partie des cristaux croît lentement avant un refroidissement plus rapide du magma restant.',
                    ],
                    [
                        'question' => 'Une roche composée de gros cristaux de feldspath, quartz et mica est probablement :',
                        'choices' => [
                            ['choice_text' => 'un granite', 'is_correct' => true],
                            ['choice_text' => 'un basalte', 'is_correct' => false],
                            ['choice_text' => 'un grès', 'is_correct' => false],
                            ['choice_text' => 'un schiste', 'is_correct' => false],
                        ],
                        'explanation' => 'Cet assemblage de minéraux à gros cristaux est typique du granite plutonique.',
                    ],
                    [
                        'question' => 'La pierre ponce possède une texture très poreuse parce que :',
                        'choices' => [
                            ['choice_text' => 'des bulles de gaz ont été piégées dans une lave riche en silice', 'is_correct' => true],
                            ['choice_text' => 'elle est constituée de sédiments compacts', 'is_correct' => false],
                            ['choice_text' => 'elle contient uniquement des fossiles', 'is_correct' => false],
                            ['choice_text' => 'elle provient d\'un métamorphisme sans fusion', 'is_correct' => false],
                        ],
                        'explanation' => 'La pierre ponce se forme lorsque des gaz se développent fortement dans une lave visqueuse et restent piégés lors du refroidissement.',
                    ],
                    [
                        'question' => 'Une obsidienne est principalement :',
                        'choices' => [
                            ['choice_text' => 'un verre volcanique', 'is_correct' => true],
                            ['choice_text' => 'une roche sédimentaire carbonatée', 'is_correct' => false],
                            ['choice_text' => 'un granite très déformé', 'is_correct' => false],
                            ['choice_text' => 'un minéral métallique', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'obsidienne résulte d\'un refroidissement très rapide d\'une lave, limitant fortement la cristallisation.',
                    ],
                    [
                        'question' => 'Pour distinguer facilement une roche plutonique d\'une roche volcanique de composition proche, on peut surtout observer :',
                        'choices' => [
                            ['choice_text' => 'la taille des cristaux et la texture', 'is_correct' => true],
                            ['choice_text' => 'uniquement la masse de l\'échantillon', 'is_correct' => false],
                            ['choice_text' => 'uniquement sa température actuelle', 'is_correct' => false],
                            ['choice_text' => 'uniquement sa couleur extérieure', 'is_correct' => false],
                        ],
                        'explanation' => 'Les conditions de refroidissement contrôlent fortement la texture, ce qui aide à distinguer des équivalents plutoniques et volcaniques.',
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
                            ['choice_text' => 'de fragments issus de l\'altération et de l\'érosion', 'is_correct' => true],
                            ['choice_text' => 'de la fusion du manteau', 'is_correct' => false],
                            ['choice_text' => 'de la cristallisation d\'un magma', 'is_correct' => false],
                            ['choice_text' => 'd\'un métamorphisme régional', 'is_correct' => false],
                        ],
                        'explanation' => 'Les roches détritiques sont formées à partir de fragments produits par l\'altération et l\'érosion, puis transportés et déposés.',
                    ],
                    [
                        'question' => 'Le conglomérat est constitué principalement de :',
                        'choices' => [
                            ['choice_text' => 'graviers ou galets cimentés', 'is_correct' => true],
                            ['choice_text' => 'cristaux de quartz uniquement', 'is_correct' => false],
                            ['choice_text' => 'cristaux formés dans le manteau', 'is_correct' => false],
                            ['choice_text' => 'cendres volcaniques fondues', 'is_correct' => false],
                        ],
                        'explanation' => 'Le conglomérat est une roche détritique à éléments grossiers arrondis ou subarrondis cimentés.',
                    ],
                    [
                        'question' => 'Le grès contient surtout des grains de taille :',
                        'choices' => [
                            ['choice_text' => 'sable', 'is_correct' => true],
                            ['choice_text' => 'argile uniquement', 'is_correct' => false],
                            ['choice_text' => 'galets uniquement', 'is_correct' => false],
                            ['choice_text' => 'cristaux géants', 'is_correct' => false],
                        ],
                        'explanation' => 'Le grès est une roche composée principalement de grains de taille sableuse, souvent riches en quartz ou feldspaths.',
                    ],
                    [
                        'question' => 'Le schiste argileux se forme à partir notamment :',
                        'choices' => [
                            ['choice_text' => 'de particules très fines d\'argile déposées puis compactées', 'is_correct' => true],
                            ['choice_text' => 'd\'un magma refroidi lentement', 'is_correct' => false],
                            ['choice_text' => 'd\'un calcaire fondu', 'is_correct' => false],
                            ['choice_text' => 'd\'un métal cristallisé', 'is_correct' => false],
                        ],
                        'explanation' => 'Les boues riches en argiles peuvent être compactées et lithifiées pour former des roches sédimentaires fines.',
                    ],
                    [
                        'question' => 'La compaction agit surtout en :',
                        'choices' => [
                            ['choice_text' => 'réduisant les espaces entre les grains', 'is_correct' => true],
                            ['choice_text' => 'fondant les grains', 'is_correct' => false],
                            ['choice_text' => 'créant du verre volcanique', 'is_correct' => false],
                            ['choice_text' => 'transformant le sable en magma', 'is_correct' => false],
                        ],
                        'explanation' => 'La compaction rapproche les grains sous l\'effet de la pression des couches sus-jacentes.',
                    ],
                    [
                        'question' => 'La cimentation correspond :',
                        'choices' => [
                            ['choice_text' => 'à la précipitation de minéraux qui lient les grains entre eux', 'is_correct' => true],
                            ['choice_text' => 'à la fusion complète des grains', 'is_correct' => false],
                            ['choice_text' => 'à la disparition de l\'eau atmosphérique', 'is_correct' => false],
                            ['choice_text' => 'à la formation d\'un volcan', 'is_correct' => false],
                        ],
                        'explanation' => 'Des minéraux dissous peuvent précipiter entre les grains et les cimenter lors de la lithification.',
                    ],
                    [
                        'question' => 'Un calcaire peut se former par accumulation :',
                        'choices' => [
                            ['choice_text' => 'de débris ou de boues riches en carbonate de calcium', 'is_correct' => true],
                            ['choice_text' => 'uniquement de quartz', 'is_correct' => false],
                            ['choice_text' => 'uniquement de lave', 'is_correct' => false],
                            ['choice_text' => 'uniquement de minéraux métalliques', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreux calcaires sont liés à l\'accumulation de carbonates produits ou précipités dans des environnements marins ou continentaux.',
                    ],
                    [
                        'question' => 'Une évaporite peut se former lorsque :',
                        'choices' => [
                            ['choice_text' => 'une eau riche en ions s\'évapore et concentre les sels jusqu\'à leur précipitation', 'is_correct' => true],
                            ['choice_text' => 'un magma refroidit lentement', 'is_correct' => false],
                            ['choice_text' => 'une roche fond complètement', 'is_correct' => false],
                            ['choice_text' => 'un glacier se transforme en granite', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'évaporation peut concentrer les ions dissous et entraîner la précipitation de minéraux comme l\'halite ou le gypse.',
                    ],
                    [
                        'question' => 'Les stratifications dans une roche sédimentaire indiquent souvent :',
                        'choices' => [
                            ['choice_text' => 'des étapes successives de dépôt de sédiments', 'is_correct' => true],
                            ['choice_text' => 'une fusion complète', 'is_correct' => false],
                            ['choice_text' => 'un métamorphisme obligatoire', 'is_correct' => false],
                            ['choice_text' => 'une absence totale de transport', 'is_correct' => false],
                        ],
                        'explanation' => 'Les couches enregistrent souvent différentes phases de dépôt et les variations de conditions de transport ou de sédimentation.',
                    ],
                    [
                        'question' => 'Si un courant devient moins énergique, les particules les plus grosses ont tendance à :',
                        'choices' => [
                            ['choice_text' => 'se déposer plus facilement', 'is_correct' => true],
                            ['choice_text' => 'être transportées plus loin', 'is_correct' => false],
                            ['choice_text' => 'fondre', 'is_correct' => false],
                            ['choice_text' => 'devenir des cristaux magmatiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La diminution de l\'énergie de l\'écoulement favorise le dépôt, notamment des particules les plus grosses.',
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
                            ['choice_text' => 'à l\'état solide sous l\'effet de nouvelles conditions de pression et de température', 'is_correct' => true],
                            ['choice_text' => 'uniquement après fusion totale', 'is_correct' => false],
                            ['choice_text' => 'uniquement dans l\'atmosphère', 'is_correct' => false],
                            ['choice_text' => 'uniquement lors de la sédimentation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le métamorphisme transforme les roches solides sans fusion complète dans les conditions habituelles.',
                    ],
                    [
                        'question' => 'La foliation métamorphique correspond :',
                        'choices' => [
                            ['choice_text' => 'à une orientation préférentielle de minéraux ou de structures', 'is_correct' => true],
                            ['choice_text' => 'à des couches de sédiments déposées dans l\'eau', 'is_correct' => false],
                            ['choice_text' => 'à des bulles de gaz', 'is_correct' => false],
                            ['choice_text' => 'à une texture entièrement vitreuse', 'is_correct' => false],
                        ],
                        'explanation' => 'La foliation résulte de l\'orientation de minéraux ou de structures sous l\'effet de contraintes et du métamorphisme.',
                    ],
                    [
                        'question' => 'Le schiste est généralement :',
                        'choices' => [
                            ['choice_text' => 'une roche métamorphique foliée', 'is_correct' => true],
                            ['choice_text' => 'une roche volcanique', 'is_correct' => false],
                            ['choice_text' => 'une roche sédimentaire détritique', 'is_correct' => false],
                            ['choice_text' => 'un minéral', 'is_correct' => false],
                        ],
                        'explanation' => 'Les schistes sont des roches métamorphiques souvent foliées, riches en minéraux orientés.',
                    ],
                    [
                        'question' => 'Le gneiss peut provenir du métamorphisme :',
                        'choices' => [
                            ['choice_text' => 'de roches riches en quartz et feldspaths comme certains granites', 'is_correct' => true],
                            ['choice_text' => 'uniquement du sel gemme', 'is_correct' => false],
                            ['choice_text' => 'uniquement de la lave basaltique', 'is_correct' => false],
                            ['choice_text' => 'uniquement de l\'argile non consolidée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le gneiss peut résulter du métamorphisme intense de roches plutoniques ou sédimentaires riches en feldspaths et quartz.',
                    ],
                    [
                        'question' => 'Le marbre se reconnaît notamment par :',
                        'choices' => [
                            ['choice_text' => 'la recristallisation de la calcite ou d\'autres carbonates', 'is_correct' => true],
                            ['choice_text' => 'la présence obligatoire de verre volcanique', 'is_correct' => false],
                            ['choice_text' => 'une texture toujours détritique', 'is_correct' => false],
                            ['choice_text' => 'une origine nécessairement basaltique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le marbre est caractérisé par la recristallisation de minéraux carbonatés, principalement la calcite ou la dolomite selon la roche d\'origine.',
                    ],
                    [
                        'question' => 'Le quartzite provient généralement du métamorphisme :',
                        'choices' => [
                            ['choice_text' => 'd\'un grès riche en quartz', 'is_correct' => true],
                            ['choice_text' => 'd\'un calcaire pur', 'is_correct' => false],
                            ['choice_text' => 'd\'un basalte vitré', 'is_correct' => false],
                            ['choice_text' => 'd\'une évaporite', 'is_correct' => false],
                        ],
                        'explanation' => 'Le quartzite résulte de la recristallisation d\'un grès riche en quartz sous l\'effet du métamorphisme.',
                    ],
                    [
                        'question' => 'Le métamorphisme de contact est associé principalement :',
                        'choices' => [
                            ['choice_text' => 'à la chaleur d\'une intrusion magmatique voisine', 'is_correct' => true],
                            ['choice_text' => 'à une accumulation de sédiments dans une rivière', 'is_correct' => false],
                            ['choice_text' => 'à l\'érosion éolienne', 'is_correct' => false],
                            ['choice_text' => 'à la formation d\'une couche de glace', 'is_correct' => false],
                        ],
                        'explanation' => 'Une intrusion chaude peut chauffer les roches voisines et provoquer un métamorphisme local appelé métamorphisme de contact.',
                    ],
                    [
                        'question' => 'Quand la pression devient directionnelle, elle peut favoriser :',
                        'choices' => [
                            ['choice_text' => 'l\'orientation des minéraux et le développement d\'une foliation', 'is_correct' => true],
                            ['choice_text' => 'la formation automatique de bulles', 'is_correct' => false],
                            ['choice_text' => 'la dissolution totale de la roche', 'is_correct' => false],
                            ['choice_text' => 'la fusion complète dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Une contrainte dirigée peut aligner certains minéraux ou minéraux nouveaux pendant le métamorphisme.',
                    ],
                    [
                        'question' => 'Une roche métamorphique peut contenir des minéraux indiquant :',
                        'choices' => [
                            ['choice_text' => 'les conditions de pression et de température de son histoire', 'is_correct' => true],
                            ['choice_text' => 'uniquement l\'âge de la Terre', 'is_correct' => false],
                            ['choice_text' => 'uniquement le climat actuel', 'is_correct' => false],
                            ['choice_text' => 'uniquement la composition de l\'atmosphère', 'is_correct' => false],
                        ],
                        'explanation' => 'Les assemblages minéralogiques métamorphiques servent à reconstituer les conditions auxquelles la roche a été soumise.',
                    ],
                    [
                        'question' => 'Si une roche métamorphique fond complètement, elle produit :',
                        'choices' => [
                            ['choice_text' => 'un magma', 'is_correct' => true],
                            ['choice_text' => 'un sédiment', 'is_correct' => false],
                            ['choice_text' => 'une couche de sol', 'is_correct' => false],
                            ['choice_text' => 'une roche carbonatée', 'is_correct' => false],
                        ],
                        'explanation' => 'La fusion complète transforme la roche solide en matériau magmatique fondu.',
                    ],
                ],
            ],
            [
                'title' => 'Textures et origine des roches',
                'description' => 'Interpréter les textures pour reconstruire les conditions de formation des roches.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Une texture grenue à gros cristaux indique généralement :',
                        'choices' => [
                            ['choice_text' => 'une cristallisation lente en profondeur', 'is_correct' => true],
                            ['choice_text' => 'une sédimentation rapide', 'is_correct' => false],
                            ['choice_text' => 'un refroidissement instantané', 'is_correct' => false],
                            ['choice_text' => 'une absence de cristallisation', 'is_correct' => false],
                        ],
                        'explanation' => 'La texture grenue à gros cristaux est typique de nombreuses roches plutoniques refroidies lentement.',
                    ],
                    [
                        'question' => 'Une texture microlitique est fréquente dans :',
                        'choices' => [
                            ['choice_text' => 'les roches volcaniques refroidies relativement rapidement', 'is_correct' => true],
                            ['choice_text' => 'les roches plutoniques à gros cristaux', 'is_correct' => false],
                            ['choice_text' => 'les roches sédimentaires uniquement', 'is_correct' => false],
                            ['choice_text' => 'les minerais métalliques uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le refroidissement plus rapide des laves produit souvent de petits cristaux, parfois dans une matrice vitreuse.',
                    ],
                    [
                        'question' => 'Une roche porphyrique possède :',
                        'choices' => [
                            ['choice_text' => 'de gros cristaux inclus dans une matrice plus fine', 'is_correct' => true],
                            ['choice_text' => 'uniquement de gros cristaux', 'is_correct' => false],
                            ['choice_text' => 'uniquement du verre', 'is_correct' => false],
                            ['choice_text' => 'uniquement des grains sédimentaires arrondis', 'is_correct' => false],
                        ],
                        'explanation' => 'La texture porphyrique associe des cristaux relativement grands à une matrice plus fine ou vitreuse.',
                    ],
                    [
                        'question' => 'Des grains sédimentaires bien arrondis indiquent souvent :',
                        'choices' => [
                            ['choice_text' => 'un transport ou une abrasion importante avant le dépôt', 'is_correct' => true],
                            ['choice_text' => 'une cristallisation magmatique lente', 'is_correct' => false],
                            ['choice_text' => 'un métamorphisme intense obligatoire', 'is_correct' => false],
                            ['choice_text' => 'une absence totale de transport', 'is_correct' => false],
                        ],
                        'explanation' => 'Les grains s\'arrondissent progressivement lors du transport et des collisions répétées.',
                    ],
                    [
                        'question' => 'Un tri granulométrique élevé dans un sable indique que :',
                        'choices' => [
                            ['choice_text' => 'les grains ont des tailles relativement similaires', 'is_correct' => true],
                            ['choice_text' => 'les grains sont tous de minéraux différents', 'is_correct' => false],
                            ['choice_text' => 'les grains sont nécessairement magmatiques', 'is_correct' => false],
                            ['choice_text' => 'la roche est forcément métamorphique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un sédiment bien trié contient des grains de tailles proches, souvent après un transport ou un tri hydrodynamique efficace.',
                    ],
                    [
                        'question' => 'Une roche riche en fossiles et composée de débris biologiques est probablement :',
                        'choices' => [
                            ['choice_text' => 'sédimentaire', 'is_correct' => true],
                            ['choice_text' => 'plutonique', 'is_correct' => false],
                            ['choice_text' => 'volcanique', 'is_correct' => false],
                            ['choice_text' => 'métamorphique de haut degré', 'is_correct' => false],
                        ],
                        'explanation' => 'Les accumulations et lithifications de restes biologiques forment des roches sédimentaires biogènes.',
                    ],
                    [
                        'question' => 'Une foliation bien développée suggère généralement :',
                        'choices' => [
                            ['choice_text' => 'une histoire métamorphique avec contrainte ou pression dirigée', 'is_correct' => true],
                            ['choice_text' => 'un refroidissement instantané d\'une lave', 'is_correct' => false],
                            ['choice_text' => 'une simple évaporation', 'is_correct' => false],
                            ['choice_text' => 'une origine uniquement biologique', 'is_correct' => false],
                        ],
                        'explanation' => 'La foliation est une structure typique de nombreux métamorphismes sous contrainte dirigée.',
                    ],
                    [
                        'question' => 'Des vésicules dans une roche volcanique indiquent :',
                        'choices' => [
                            ['choice_text' => 'la présence de gaz qui ont formé des bulles dans la lave', 'is_correct' => true],
                            ['choice_text' => 'un dépôt de sédiments marins', 'is_correct' => false],
                            ['choice_text' => 'un métamorphisme sans fusion', 'is_correct' => false],
                            ['choice_text' => 'une absence totale de fluides', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vésicules correspondent aux cavités laissées par des bulles de gaz lors du refroidissement d\'une lave.',
                    ],
                    [
                        'question' => 'Un grain très anguleux dans un sédiment suggère généralement :',
                        'choices' => [
                            ['choice_text' => 'un transport limité ou une source proche', 'is_correct' => true],
                            ['choice_text' => 'un transport très long obligatoire', 'is_correct' => false],
                            ['choice_text' => 'une fusion complète', 'is_correct' => false],
                            ['choice_text' => 'un métamorphisme intense', 'is_correct' => false],
                        ],
                        'explanation' => 'Les grains deviennent plus arrondis avec l\'usure ; des grains anguleux peuvent donc indiquer un transport plus court.',
                    ],
                    [
                        'question' => 'Pourquoi la texture est-elle importante en pétrologie ?',
                        'choices' => [
                            ['choice_text' => 'elle aide à relier une roche aux conditions de sa formation', 'is_correct' => true],
                            ['choice_text' => 'elle donne toujours sa composition chimique exacte', 'is_correct' => false],
                            ['choice_text' => 'elle suffit toujours à dater la roche', 'is_correct' => false],
                            ['choice_text' => 'elle remplace l\'analyse minéralogique', 'is_correct' => false],
                        ],
                        'explanation' => 'La texture est un indice essentiel sur la vitesse de refroidissement, le transport, la déformation et d\'autres conditions de formation.',
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
                            ['choice_text' => 'les processus par lesquels les roches se forment', 'is_correct' => true],
                            ['choice_text' => 'uniquement leur destruction par l\'érosion', 'is_correct' => false],
                            ['choice_text' => 'la classification des animaux', 'is_correct' => false],
                            ['choice_text' => 'la mesure des séismes', 'is_correct' => false],
                        ],
                        'explanation' => 'La pétrogenèse concerne l\'origine et les mécanismes de formation des roches.',
                    ],
                    [
                        'question' => 'Une roche magmatique peut devenir sédimentaire après :',
                        'choices' => [
                            ['choice_text' => 'altération, érosion, transport, dépôt et lithification', 'is_correct' => true],
                            ['choice_text' => 'fusion puis refroidissement uniquement', 'is_correct' => false],
                            ['choice_text' => 'métamorphisme uniquement', 'is_correct' => false],
                            ['choice_text' => 'compression sans changement de matière', 'is_correct' => false],
                        ],
                        'explanation' => 'Une roche magmatique exposée en surface peut être altérée, érodée puis transformée en roche sédimentaire par sédimentation et lithification.',
                    ],
                    [
                        'question' => 'Une roche sédimentaire peut devenir métamorphique si elle :',
                        'choices' => [
                            ['choice_text' => 'est enfouie et soumise à de nouvelles conditions de pression et de température', 'is_correct' => true],
                            ['choice_text' => 'reste toujours en surface', 'is_correct' => false],
                            ['choice_text' => 'est simplement transportée', 'is_correct' => false],
                            ['choice_text' => 'est dissoute dans l\'atmosphère', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'enfouissement augmente souvent la pression et la température et peut provoquer un métamorphisme.',
                    ],
                    [
                        'question' => 'Une roche métamorphique peut revenir à la surface grâce notamment à :',
                        'choices' => [
                            ['choice_text' => 'l\'érosion et le soulèvement tectonique', 'is_correct' => true],
                            ['choice_text' => 'la condensation', 'is_correct' => false],
                            ['choice_text' => 'la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'la fermentation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le soulèvement tectonique peut amener les roches profondes vers la surface, où l\'érosion peut les exposer.',
                    ],
                    [
                        'question' => 'Une roche sédimentaire peut être fondue et produire :',
                        'choices' => [
                            ['choice_text' => 'un magma', 'is_correct' => true],
                            ['choice_text' => 'un fossile', 'is_correct' => false],
                            ['choice_text' => 'un sol', 'is_correct' => false],
                            ['choice_text' => 'une eau souterraine', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fusion suffisamment importante transforme la roche en matériau magmatique fondu.',
                    ],
                    [
                        'question' => 'Le cycle des roches montre que :',
                        'choices' => [
                            ['choice_text' => 'les matériaux terrestres peuvent passer d\'un type de roche à un autre', 'is_correct' => true],
                            ['choice_text' => 'chaque roche possède une trajectoire unique et irréversible', 'is_correct' => false],
                            ['choice_text' => 'seules les roches magmatiques se transforment', 'is_correct' => false],
                            ['choice_text' => 'les roches ne peuvent jamais être recyclées', 'is_correct' => false],
                        ],
                        'explanation' => 'Les processus géologiques permettent des transformations répétées entre familles de roches.',
                    ],
                    [
                        'question' => 'Un granite exposé en montagne peut subir d\'abord :',
                        'choices' => [
                            ['choice_text' => 'altération et érosion', 'is_correct' => true],
                            ['choice_text' => 'fusion immédiate', 'is_correct' => false],
                            ['choice_text' => 'métamorphisme de contact obligatoire', 'is_correct' => false],
                            ['choice_text' => 'cristallisation d\'un magma', 'is_correct' => false],
                        ],
                        'explanation' => 'À la surface, les roches sont soumises à l\'altération et à l\'érosion, qui peuvent fournir des sédiments.',
                    ],
                    [
                        'question' => 'Le devenir d\'une roche dépend notamment :',
                        'choices' => [
                            ['choice_text' => 'de son environnement et des nouvelles conditions de pression, température, fluides et surface', 'is_correct' => true],
                            ['choice_text' => 'uniquement de sa couleur', 'is_correct' => false],
                            ['choice_text' => 'uniquement de son âge', 'is_correct' => false],
                            ['choice_text' => 'uniquement de sa taille', 'is_correct' => false],
                        ],
                        'explanation' => 'Les conditions physiques et chimiques déterminent quels processus peuvent transformer la roche.',
                    ],
                    [
                        'question' => 'Un cycle où un calcaire devient marbre puis est ensuite érodé montre :',
                        'choices' => [
                            ['choice_text' => 'plusieurs étapes successives du cycle des roches', 'is_correct' => true],
                            ['choice_text' => 'une seule étape sans transformation', 'is_correct' => false],
                            ['choice_text' => 'uniquement une activité volcanique', 'is_correct' => false],
                            ['choice_text' => 'uniquement une activité biologique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le calcaire peut être métamorphisé en marbre, puis les roches exposées peuvent de nouveau être altérées et érodées.',
                    ],
                    [
                        'question' => 'Pourquoi la surface terrestre et l\'intérieur de la Terre sont-ils tous deux impliqués dans le cycle des roches ?',
                        'choices' => [
                            ['choice_text' => 'les processus de surface et les processus internes agissent conjointement', 'is_correct' => true],
                            ['choice_text' => 'seule l\'atmosphère transforme les roches', 'is_correct' => false],
                            ['choice_text' => 'seuls les océans sont responsables', 'is_correct' => false],
                            ['choice_text' => 'les processus internes n\'affectent jamais les roches', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'érosion, le dépôt et l\'altération agissent en surface tandis que le magmatisme, le métamorphisme et la tectonique agissent en profondeur.',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de pétrologie',
                'description' => 'Quiz de synthèse sur roches magmatiques, sédimentaires, métamorphiques et textures.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Un granite à gros cristaux s\'est probablement formé :',
                        'choices' => [
                            ['choice_text' => 'par refroidissement lent d\'un magma en profondeur', 'is_correct' => true],
                            ['choice_text' => 'par dépôt de sable', 'is_correct' => false],
                            ['choice_text' => 'par refroidissement instantané d\'une lave', 'is_correct' => false],
                            ['choice_text' => 'par métamorphisme d\'un calcaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les gros cristaux du granite traduisent un refroidissement lent en profondeur.',
                    ],
                    [
                        'question' => 'Le marbre est généralement associé à un protolithe de type :',
                        'choices' => [
                            ['choice_text' => 'calcaire', 'is_correct' => true],
                            ['choice_text' => 'basalte', 'is_correct' => false],
                            ['choice_text' => 'gabbro', 'is_correct' => false],
                            ['choice_text' => 'schiste argileux uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le marbre résulte généralement du métamorphisme de roches carbonatées comme le calcaire.',
                    ],
                    [
                        'question' => 'Une roche volcanique refroidie très rapidement peut être :',
                        'choices' => [
                            ['choice_text' => 'vitreuse ou à très petits cristaux', 'is_correct' => true],
                            ['choice_text' => 'toujours grenue à gros cristaux', 'is_correct' => false],
                            ['choice_text' => 'toujours foliée', 'is_correct' => false],
                            ['choice_text' => 'toujours stratifiée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le refroidissement rapide limite la croissance cristalline et peut produire du verre volcanique.',
                    ],
                    [
                        'question' => 'Le grès devient quartzite sous l\'effet principal :',
                        'choices' => [
                            ['choice_text' => 'du métamorphisme', 'is_correct' => true],
                            ['choice_text' => 'de la sédimentation', 'is_correct' => false],
                            ['choice_text' => 'de l\'érosion', 'is_correct' => false],
                            ['choice_text' => 'de la cristallisation d\'une lave', 'is_correct' => false],
                        ],
                        'explanation' => 'Le quartzite est une roche métamorphique issue de la recristallisation d\'un grès riche en quartz.',
                    ],
                    [
                        'question' => 'Une roche formée par compaction et cimentation est probablement :',
                        'choices' => [
                            ['choice_text' => 'sédimentaire', 'is_correct' => true],
                            ['choice_text' => 'magmatique', 'is_correct' => false],
                            ['choice_text' => 'métamorphique', 'is_correct' => false],
                            ['choice_text' => 'minérale pure', 'is_correct' => false],
                        ],
                        'explanation' => 'La compaction et la cimentation sont des processus majeurs de lithification des sédiments.',
                    ],
                    [
                        'question' => 'Une texture porphyrique traduit souvent :',
                        'choices' => [
                            ['choice_text' => 'une histoire de refroidissement en plusieurs étapes', 'is_correct' => true],
                            ['choice_text' => 'une sédimentation en couches horizontales uniquement', 'is_correct' => false],
                            ['choice_text' => 'une fusion complète récente', 'is_correct' => false],
                            ['choice_text' => 'un clivage minéral', 'is_correct' => false],
                        ],
                        'explanation' => 'Des cristaux préexistants dans une matrice plus fine indiquent souvent deux vitesses de refroidissement successives.',
                    ],
                    [
                        'question' => 'Une roche riche en fer et magnésium est souvent qualifiée de :',
                        'choices' => [
                            ['choice_text' => 'mafique', 'is_correct' => true],
                            ['choice_text' => 'felsique', 'is_correct' => false],
                            ['choice_text' => 'carbonatée', 'is_correct' => false],
                            ['choice_text' => 'évaporitique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les roches mafiques sont relativement riches en fer et magnésium et généralement moins riches en silice.',
                    ],
                    [
                        'question' => 'Quel processus peut transformer une roche en sédiment sans la faire fondre ?',
                        'choices' => [
                            ['choice_text' => 'l\'altération et l\'érosion', 'is_correct' => true],
                            ['choice_text' => 'la fusion', 'is_correct' => false],
                            ['choice_text' => 'la cristallisation', 'is_correct' => false],
                            ['choice_text' => 'le métamorphisme uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'altération et l\'érosion produisent et transportent des fragments sans exiger la fusion de la roche.',
                    ],
                    [
                        'question' => 'Si un sédiment contient des grains très arrondis et bien triés, cela suggère souvent :',
                        'choices' => [
                            ['choice_text' => 'un transport et un tri relativement efficaces', 'is_correct' => true],
                            ['choice_text' => 'une fusion complète', 'is_correct' => false],
                            ['choice_text' => 'un refroidissement magmatique lent', 'is_correct' => false],
                            ['choice_text' => 'un métamorphisme intense', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'arrondissement résulte de l\'abrasion et le bon tri d\'une sélection granulométrique durant le transport ou le dépôt.',
                    ],
                    [
                        'question' => 'L\'objectif principal de la pétrologie est de comprendre :',
                        'choices' => [
                            ['choice_text' => 'comment les roches se sont formées, transformées et ce qu\'elles révèlent sur leur environnement', 'is_correct' => true],
                            ['choice_text' => 'uniquement comment les nommer', 'is_correct' => false],
                            ['choice_text' => 'uniquement leur valeur économique', 'is_correct' => false],
                            ['choice_text' => 'uniquement leur couleur', 'is_correct' => false],
                        ],
                        'explanation' => 'La pétrologie va au-delà de la classification et cherche à reconstruire les processus et conditions de formation et de transformation des roches.',
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
