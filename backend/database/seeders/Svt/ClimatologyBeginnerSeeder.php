<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ClimatologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'climatology')->firstOrFail();

        $quizzes = [
            [
                'title' => "Météo et climat : ne pas les confondre",
                'description' => "Distinguer les échelles de temps et les grandeurs utilisées en météorologie et en climatologie.",
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "La météo décrit principalement…",
                        'marks' => 1,
                        'explanation' => "La météo concerne des conditions atmosphériques observées ou prévues sur des durées courtes, tandis que le climat décrit des statistiques sur des périodes longues.",
                        'choices' => [
                            [
                                'choice_text' => "l’état de l’atmosphère à court terme en un lieu donné",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "les moyennes climatiques sur plusieurs siècles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la structure interne de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la composition des océans",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le climat d’une région correspond surtout…",
                        'marks' => 1,
                        'explanation' => "Le climat se décrit à partir de statistiques météorologiques sur de longues périodes, souvent de plusieurs décennies, et inclut la variabilité des conditions.",
                        'choices' => [
                            [
                                'choice_text' => "aux caractéristiques moyennes et à la variabilité du temps sur de longues périodes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "à la pluie d’un seul jour",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "à la température mesurée une seule fois",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "aux prévisions de demain uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un bulletin annonce 32 °C demain à midi. Il s’agit d’une information de…",
                        'marks' => 1,
                        'explanation' => "Une température prévue pour un moment et un lieu précis relève de la prévision météorologique.",
                        'choices' => [
                            [
                                'choice_text' => "météo",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "climat",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "géologie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "paléontologie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une moyenne de température calculée sur plusieurs décennies sert surtout à décrire…",
                        'marks' => 1,
                        'explanation' => "Les moyennes et autres statistiques établies sur de longues périodes caractérisent le climat d’une région.",
                        'choices' => [
                            [
                                'choice_text' => "le climat",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un séisme",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une marée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un courant géologique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux jours de pluie inhabituelle ne suffisent pas à conclure que le climat d’une région a changé parce que…",
                        'marks' => 1,
                        'explanation' => "La variabilité quotidienne est compatible avec un climat donné. Une évolution climatique s’évalue à partir de séries longues et de tendances statistiques.",
                        'choices' => [
                            [
                                'choice_text' => "un événement court ne décrit pas à lui seul une tendance climatique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la pluie n’existe pas dans le climat",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la température ne compte pas en climatologie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les nuages sont toujours identiques",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel instrument mesure directement la température de l’air ?",
                        'marks' => 1,
                        'explanation' => "Le thermomètre mesure la température. Les autres instruments mesurent respectivement les précipitations, le vent et la pression.",
                        'choices' => [
                            [
                                'choice_text' => "Un thermomètre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un pluviomètre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un anémomètre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un baromètre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel appareil sert à mesurer une quantité de précipitations ?",
                        'marks' => 1,
                        'explanation' => "Le pluviomètre recueille et mesure les précipitations tombées sur une période donnée.",
                        'choices' => [
                            [
                                'choice_text' => "Un pluviomètre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un thermomètre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une boussole",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un hygromètre de sol",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une rose des vents permet surtout de connaître…",
                        'marks' => 1,
                        'explanation' => "Une rose des vents synthétise les directions d’où proviennent les vents et leur fréquence selon les secteurs.",
                        'choices' => [
                            [
                                'choice_text' => "la direction et la fréquence des vents",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la salinité de l’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la profondeur des océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le pH du sol",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une carte indique que deux villes ont des températures très différentes le même jour. La différence relève d’abord de…",
                        'marks' => 1,
                        'explanation' => "Une différence de température observée au même moment entre deux villes est une différence météorologique locale.",
                        'choices' => [
                            [
                                'choice_text' => "la météo locale",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la tectonique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la fossilisation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la sédimentation",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi peut-on avoir un hiver très froid dans une région tout en ayant un climat global qui évolue sur plusieurs décennies ?",
                        'marks' => 1,
                        'explanation' => "Un épisode froid ponctuel ne suffit pas à caractériser une tendance climatique. Les deux notions concernent des échelles de temps différentes.",
                        'choices' => [
                            [
                                'choice_text' => "La météo varie d’un jour ou d’une année à l’autre alors que le climat se juge sur des séries longues",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le climat est déterminé par un seul jour",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un hiver froid interdit toute tendance climatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La météo et le climat sont exactement la même notion",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un journal annonce « pluie forte demain matin ». Cette information décrit…",
                        'marks' => 1,
                        'explanation' => "Une prévision portant sur les conditions attendues demain relève de la météo, car elle concerne une échelle de temps très courte.",
                        'choices' => [
                            [
                                'choice_text' => "une prévision météorologique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une moyenne climatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un âge géologique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une donnée paléontologique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Grandes zones climatiques",
                'description' => "Reconnaître les grands ensembles climatiques et leurs caractéristiques élémentaires.",
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Quelle situation correspond à un climat équatorial typique ?",
                        'marks' => 1,
                        'explanation' => "Les régions équatoriales reçoivent un fort rayonnement solaire et connaissent généralement des températures élevées avec des pluies fréquentes.",
                        'choices' => [
                            [
                                'choice_text' => "Des températures élevées et des précipitations fréquentes toute l’année",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Des hivers très froids et secs toute l’année",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une absence permanente de nuages",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Des précipitations uniquement sous forme de neige",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans les zones polaires, le rayonnement solaire moyen est faible surtout parce que…",
                        'marks' => 1,
                        'explanation' => "Aux hautes latitudes, l’angle d’arrivée des rayons solaires réduit l’énergie reçue par unité de surface et les saisons sont très contrastées.",
                        'choices' => [
                            [
                                'choice_text' => "les rayons arrivent plus obliquement et l’ensoleillement varie fortement avec la saison",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la Terre n’y a pas d’atmosphère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le Soleil est plus petit au-dessus des pôles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les océans y bloquent toute lumière",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La zone intertropicale se situe principalement…",
                        'marks' => 1,
                        'explanation' => "La zone intertropicale correspond à la bande comprise approximativement entre le tropique du Cancer et le tropique du Capricorne.",
                        'choices' => [
                            [
                                'choice_text' => "entre les deux tropiques",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "entre les deux pôles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "uniquement au nord du cercle polaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "dans les océans profonds",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un désert chaud reçoit généralement peu de précipitations. Quel climat y domine ?",
                        'marks' => 1,
                        'explanation' => "La faiblesse des précipitations et les conditions sèches caractérisent un climat aride.",
                        'choices' => [
                            [
                                'choice_text' => "Un climat aride",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un climat polaire humide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un climat équatorial pluvieux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un climat océanique tempéré humide",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un climat méditerranéen se caractérise souvent par…",
                        'marks' => 1,
                        'explanation' => "Le climat méditerranéen présente généralement une saison estivale sèche et chaude, avec des précipitations davantage concentrées pendant la saison fraîche.",
                        'choices' => [
                            [
                                'choice_text' => "des étés chauds et secs et des hivers plus doux et plus humides",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "des pluies quotidiennes toute l’année",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des hivers toujours polaires",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une absence totale de saisonnalité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une région de haute latitude connaît des journées très longues en été. Quelle cause explique ce phénomène ?",
                        'marks' => 1,
                        'explanation' => "L’inclinaison de l’axe terrestre modifie au cours de l’année la durée d’ensoleillement et la hauteur du Soleil selon la latitude.",
                        'choices' => [
                            [
                                'choice_text' => "L’inclinaison de l’axe de rotation terrestre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La rotation du Soleil autour de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La salinité des océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La présence de volcans",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les grandes zones climatiques se répartissent en fonction d’abord…",
                        'marks' => 1,
                        'explanation' => "La latitude contrôle en grande partie l’énergie solaire reçue, tandis que la circulation atmosphérique redistribue la chaleur et l’humidité.",
                        'choices' => [
                            [
                                'choice_text' => "de la latitude et de la circulation générale de l’atmosphère",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "de la longitude uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "de la couleur des roches",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "du nombre de volcans",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une ville située près de l’équateur connaît peu de variation annuelle de température mais beaucoup de pluie. Quel ensemble climatique est cohérent ?",
                        'marks' => 1,
                        'explanation' => "Les régions proches de l’équateur ont souvent une faible variation saisonnière de température et peuvent recevoir des précipitations abondantes.",
                        'choices' => [
                            [
                                'choice_text' => "Un climat équatorial",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un climat désertique froid",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un climat polaire continental",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un climat subarctique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel exemple correspond à un climat polaire ?",
                        'marks' => 1,
                        'explanation' => "Les climats polaires sont caractérisés par de faibles températures et une courte période estivale, avec une saison froide dominante.",
                        'choices' => [
                            [
                                'choice_text' => "Des températures très basses et une saison chaude courte",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Des températures élevées et des pluies quotidiennes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Des hivers doux et des étés secs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une chaleur constante de 30 °C",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une carte climatique ne doit-elle pas être confondue avec une carte de météo quotidienne ?",
                        'marks' => 1,
                        'explanation' => "Une carte climatique synthétise des statistiques et des régimes moyens, alors qu’une carte météo représente une situation atmosphérique à une date donnée.",
                        'choices' => [
                            [
                                'choice_text' => "Elle résume des caractéristiques climatiques sur des périodes longues",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle ne contient jamais de températures",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle montre uniquement les frontières politiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle indique toujours les orages de demain",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Latitude, altitude et relief",
                'description' => "Comprendre comment la latitude, l’altitude et le relief influencent les conditions climatiques.",
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "À mesure que l’altitude augmente dans la troposphère, la température de l’air diminue généralement. Quel effet cela peut-il avoir sur un relief ?",
                        'marks' => 1,
                        'explanation' => "Dans la troposphère, la température diminue en moyenne avec l’altitude, ce qui contribue aux températures plus basses en montagne.",
                        'choices' => [
                            [
                                'choice_text' => "Les sommets peuvent être plus froids que les plaines voisines",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les sommets deviennent toujours plus chauds",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’altitude n’a aucun effet sur la température",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La neige disparaît obligatoirement en altitude",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux villes sont à la même latitude, mais l’une est au bord de l’océan et l’autre à l’intérieur des terres. Pourquoi leur climat peut-il différer ?",
                        'marks' => 1,
                        'explanation' => "L’eau se réchauffe et se refroidit plus lentement que les continents et participe au transport de chaleur, ce qui influence le climat côtier.",
                        'choices' => [
                            [
                                'choice_text' => "La mer modère les variations de température et apporte de l’humidité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La latitude cesse d’exister près de l’océan",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les continents n’absorbent jamais de chaleur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La mer empêche toutes les précipitations",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les régions côtières ont-elles souvent une amplitude thermique annuelle plus faible que les régions continentales ?",
                        'marks' => 1,
                        'explanation' => "La forte capacité thermique de l’eau amortit les variations de température entre les saisons.",
                        'choices' => [
                            [
                                'choice_text' => "L’océan stocke et restitue la chaleur plus lentement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les montagnes bloquent toujours le Soleil",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La pression y est toujours nulle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La mer ne reçoit aucun rayonnement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un courant océanique chaud longe une côte. Quel effet climatique local est possible ?",
                        'marks' => 1,
                        'explanation' => "Un courant chaud peut transférer de la chaleur vers l’atmosphère et modifier les températures et l’humidité des régions côtières voisines.",
                        'choices' => [
                            [
                                'choice_text' => "Un adoucissement des températures et une modification de l’humidité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un refroidissement obligatoire de toute la planète",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La disparition de l’atmosphère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La formation automatique d’un glacier",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une vallée, l’air froid peut s’accumuler au fond pendant certaines nuits. Cela peut créer…",
                        'marks' => 1,
                        'explanation' => "Le refroidissement du sol peut rendre l’air près du sol plus froid que l’air situé au-dessus, créant une inversion dans certaines configurations topographiques.",
                        'choices' => [
                            [
                                'choice_text' => "une inversion thermique locale",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un cyclone tropical",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un courant océanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une éruption",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une pente exposée au Soleil reçoit davantage de rayonnement qu’une pente peu exposée. Quel facteur climatique local est illustré ?",
                        'marks' => 1,
                        'explanation' => "L’orientation d’un versant modifie la quantité d’énergie solaire reçue et peut donc influencer les températures et la végétation locales.",
                        'choices' => [
                            [
                                'choice_text' => "L’exposition du relief",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La salinité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La composition du noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La longitude seule",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les montagnes peuvent-elles provoquer plus de précipitations sur un versant ?",
                        'marks' => 1,
                        'explanation' => "Le relief peut forcer l’air humide à s’élever. Le refroidissement favorise la condensation et les précipitations sur le versant exposé.",
                        'choices' => [
                            [
                                'choice_text' => "L’air humide est forcé de monter, se refroidit et peut condenser sa vapeur d’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La montagne crée de l’eau à partir des roches",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le vent devient toujours nul",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le Soleil se rapproche du versant",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un versant situé sous le vent d’une chaîne montagneuse reçoit peu de pluie. Il peut correspondre à…",
                        'marks' => 1,
                        'explanation' => "L’air qui a déjà perdu une partie de son humidité en franchissant la montagne peut redescendre plus sec, créant une ombre pluviométrique.",
                        'choices' => [
                            [
                                'choice_text' => "une zone d’ombre pluviométrique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un climat équatorial par définition",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une zone de subduction",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un glacier océanique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une ville est plus chaude que sa campagne voisine, surtout lors des nuits calmes. Quel phénomène local est possible ?",
                        'marks' => 1,
                        'explanation' => "Les matériaux urbains stockent de la chaleur et la ville peut limiter certains refroidissements nocturnes, produisant un îlot de chaleur urbain.",
                        'choices' => [
                            [
                                'choice_text' => "L’îlot de chaleur urbain",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La dérive des continents",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La marée haute",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le pergélisol",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel facteur explique le mieux le contraste entre climat maritime et climat continental ?",
                        'marks' => 1,
                        'explanation' => "Une grande masse d’eau a une forte inertie thermique et influence aussi les échanges de vapeur d’eau, ce qui modifie le climat des régions voisines.",
                        'choices' => [
                            [
                                'choice_text' => "La proximité d’une grande masse d’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La présence d’un volcan dans chaque ville",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couleur du sol uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La longueur des rivières",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Effet de serre et bilan énergétique",
                'description' => "Acquérir les notions de base sur l’effet de serre, le rayonnement et l’albédo.",
                'duration' => 23,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "L’effet de serre naturel signifie que certains gaz atmosphériques…",
                        'marks' => 1,
                        'explanation' => "Les gaz à effet de serre absorbent une partie du rayonnement infrarouge terrestre et en réémettent une partie, ce qui réchauffe la surface par rapport à une Terre sans cet effet.",
                        'choices' => [
                            [
                                'choice_text' => "absorbent et réémettent une partie du rayonnement infrarouge émis par la surface",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "empêchent toute lumière solaire d’entrer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "refroidissent toujours l’atmosphère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "transforment l’oxygène en azote",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel gaz est un important gaz à effet de serre naturel ?",
                        'marks' => 1,
                        'explanation' => "La vapeur d’eau est le gaz à effet de serre naturel le plus abondant. D’autres, comme le CO₂, le méthane et le protoxyde d’azote, contribuent également à l’effet de serre.",
                        'choices' => [
                            [
                                'choice_text' => "La vapeur d’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’argon uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le néon uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le fer",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le dioxyde de carbone atmosphérique est noté…",
                        'marks' => 1,
                        'explanation' => "La formule chimique du dioxyde de carbone est CO₂ : un atome de carbone lié à deux atomes d’oxygène.",
                        'choices' => [
                            [
                                'choice_text' => "CO₂",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "O₂",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "N₂O₂",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "H₂O₂",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’effet de serre naturel est-il important pour la vie actuelle ?",
                        'marks' => 1,
                        'explanation' => "Sans effet de serre naturel, la température moyenne de surface serait beaucoup plus basse. L’effet naturel contribue donc aux conditions favorables à la vie.",
                        'choices' => [
                            [
                                'choice_text' => "Il maintient une température moyenne de surface compatible avec de nombreux écosystèmes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il supprime tous les nuages",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il crée le champ magnétique terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il empêche les océans de s’évaporer",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une augmentation de la concentration d’un gaz à effet de serre peut renforcer…",
                        'marks' => 1,
                        'explanation' => "Une hausse de certains gaz à effet de serre augmente en moyenne l’absorption du rayonnement infrarouge dans l’atmosphère, ce qui modifie l’équilibre énergétique.",
                        'choices' => [
                            [
                                'choice_text' => "le piégeage du rayonnement infrarouge dans le système climatique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la luminosité du Soleil",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la gravité terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la salinité de tous les océans",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le rayonnement reçu du Soleil est principalement…",
                        'marks' => 1,
                        'explanation' => "Le Soleil émet principalement dans les courtes longueurs d’onde, dont une partie atteint la surface terrestre et chauffe le système climatique.",
                        'choices' => [
                            [
                                'choice_text' => "un rayonnement à courte longueur d’onde",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un flux de lave",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un rayonnement produit par les océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une onde sismique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La surface terrestre réémet une grande partie de son énergie sous forme de…",
                        'marks' => 1,
                        'explanation' => "Une surface à la température terrestre émet principalement dans le domaine infrarouge, qui interagit avec les gaz à effet de serre.",
                        'choices' => [
                            [
                                'choice_text' => "rayonnement infrarouge",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "rayonnement gamma uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "ondes sismiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "lumière bleue dominante",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les nuages influencent-ils le bilan énergétique de la Terre ?",
                        'marks' => 1,
                        'explanation' => "Les nuages ont des effets à la fois sur le rayonnement solaire entrant et sur le rayonnement infrarouge sortant, avec des effets dépendant de leur altitude et de leurs propriétés.",
                        'choices' => [
                            [
                                'choice_text' => "Ils réfléchissent une partie du rayonnement solaire et absorbent/réémettent du rayonnement infrarouge",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils ne font que produire du vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils bloquent toujours toute lumière solaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils n’échangent aucune énergie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une surface sombre absorbe généralement plus de rayonnement solaire qu’une surface très claire. Quelle propriété intervient ?",
                        'marks' => 1,
                        'explanation' => "L’albédo décrit la fraction du rayonnement solaire réfléchi par une surface. Une surface sombre a en général un albédo plus faible.",
                        'choices' => [
                            [
                                'choice_text' => "L’albédo",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La salinité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La pression lithostatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La porosité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La fonte d’une surface enneigée peut amplifier le réchauffement local parce que…",
                        'marks' => 1,
                        'explanation' => "La neige et la glace ont un albédo élevé. Leur disparition peut laisser place à des surfaces plus sombres qui absorbent davantage d’énergie solaire.",
                        'choices' => [
                            [
                                'choice_text' => "la surface devient moins réfléchissante et absorbe davantage de rayonnement solaire",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la neige produit du CO₂ uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la mer cesse de s’évaporer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le Soleil devient plus intense",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Les saisons sur Terre",
                'description' => "Relier les saisons à l’inclinaison de l’axe terrestre et à la révolution autour du Soleil.",
                'duration' => 19,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Pourquoi existe-t-il des saisons sur Terre ?",
                        'marks' => 1,
                        'explanation' => "L’inclinaison de l’axe terrestre fait varier au cours de l’année l’angle des rayons solaires et la durée du jour dans chaque hémisphère.",
                        'choices' => [
                            [
                                'choice_text' => "À cause de l’inclinaison de l’axe terrestre et de la révolution autour du Soleil",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que la distance Terre-Soleil change énormément chaque jour",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les continents se déplacent chaque année",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les océans changent de salinité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quand l’hémisphère Nord est incliné vers le Soleil, il connaît généralement…",
                        'marks' => 1,
                        'explanation' => "Il reçoit alors davantage d’énergie solaire par unité de surface et des journées plus longues en moyenne, ce qui correspond à la saison estivale.",
                        'choices' => [
                            [
                                'choice_text' => "l’été",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "l’hiver",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la nuit polaire partout",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un changement de continent",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les saisons sont opposées entre les hémisphères parce que…",
                        'marks' => 1,
                        'explanation' => "Lorsque l’hémisphère Nord reçoit davantage d’ensoleillement, l’hémisphère Sud en reçoit moins en moyenne, et inversement six mois plus tard.",
                        'choices' => [
                            [
                                'choice_text' => "les deux hémisphères sont inclinés alternativement vers ou à l’opposé du Soleil au cours de l’année",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "le Soleil tourne chaque mois autour de chaque hémisphère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "l’océan Atlantique inverse son sens",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les pôles changent de place",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi fait-il généralement plus chaud en été dans un hémisphère ?",
                        'marks' => 1,
                        'explanation' => "L’ensoleillement plus direct et la durée du jour plus importante augmentent l’énergie reçue par unité de surface et par jour en moyenne.",
                        'choices' => [
                            [
                                'choice_text' => "Le Soleil y est plus haut dans le ciel et les jours sont plus longs en moyenne",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La Terre est beaucoup plus proche du Soleil partout",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les océans disparaissent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’atmosphère cesse d’exister",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "À l’équinoxe, la durée du jour et de la nuit est…",
                        'marks' => 1,
                        'explanation' => "Aux équinoxes, le centre du Soleil se trouve dans le plan de l’équateur céleste, et la durée du jour et de la nuit est approximativement égale selon le lieu.",
                        'choices' => [
                            [
                                'choice_text' => "approximativement égale dans de nombreuses régions",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "toujours nulle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "de 24 heures partout",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "exactement de 6 heures partout",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Au solstice d’été boréal, quel phénomène se produit dans l’hémisphère Nord ?",
                        'marks' => 1,
                        'explanation' => "Le solstice d’été correspond au maximum d’inclinaison apparente de l’hémisphère Nord vers le Soleil et aux journées les plus longues de l’année dans de nombreuses régions.",
                        'choices' => [
                            [
                                'choice_text' => "La durée du jour atteint son maximum annuel à de nombreuses latitudes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La Terre arrête sa rotation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’hiver commence partout",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les océans deviennent doux",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les régions polaires peuvent-elles connaître un jour continu en été ?",
                        'marks' => 1,
                        'explanation' => "L’inclinaison terrestre permet au Soleil de rester au-dessus de l’horizon pendant une longue période aux hautes latitudes en été.",
                        'choices' => [
                            [
                                'choice_text' => "L’inclinaison de l’axe terrestre expose durablement ces régions au Soleil",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les pôles sont plus proches du Soleil en permanence",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La Lune éclaire le pôle jour et nuit",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les nuages produisent la lumière",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une journée de décembre peut être chaude au sud de l’équateur alors qu’elle est froide au nord. Pourquoi ?",
                        'marks' => 1,
                        'explanation' => "En décembre, l’hémisphère Sud est incliné vers le Soleil et connaît généralement l’été, tandis que l’hémisphère Nord connaît l’hiver.",
                        'choices' => [
                            [
                                'choice_text' => "Les saisons sont inversées entre les deux hémisphères",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Décembre est toujours le mois le plus chaud partout",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La latitude n’influence jamais le climat",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les océans changent de position",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle différence simple existe entre rotation et révolution de la Terre ?",
                        'marks' => 1,
                        'explanation' => "La Terre tourne sur elle-même en environ un jour et effectue une révolution autour du Soleil en environ un an.",
                        'choices' => [
                            [
                                'choice_text' => "La rotation se fait sur son axe, la révolution autour du Soleil",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La rotation se fait autour du Soleil et la révolution sur place",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux sont identiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La rotation ne dure jamais plus d’un mois",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la durée du jour varie-t-elle avec la latitude et la saison ?",
                        'marks' => 1,
                        'explanation' => "L’inclinaison de l’axe terrestre fait varier selon la saison et la latitude la trajectoire apparente du Soleil et donc la durée du jour.",
                        'choices' => [
                            [
                                'choice_text' => "La géométrie de l’axe incliné modifie la portion de la rotation pendant laquelle chaque région est éclairée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que le Soleil s’éteint en hiver",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les océans bloquent la lumière",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que la Terre change de taille",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans l’hémisphère Sud, le mois de juin correspond généralement à…",
                        'marks' => 1,
                        'explanation' => "Les saisons sont inversées entre les hémisphères. Juin correspond donc généralement à l’hiver dans l’hémisphère Sud.",
                        'choices' => [
                            [
                                'choice_text' => "l’hiver",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "l’été",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "l’automne uniquement à l’équateur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un changement de pôle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Océan, atmosphère et circulation",
                'description' => "Comprendre le rôle des courants océaniques et de la circulation atmosphérique dans le climat.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Un courant océanique chaud transporte de l’énergie vers une latitude plus élevée. Quel rôle climatique joue-t-il ?",
                        'marks' => 1,
                        'explanation' => "Les courants océaniques déplacent de l’eau et redistribuent l’énergie thermique entre différentes régions du globe.",
                        'choices' => [
                            [
                                'choice_text' => "Il redistribue de la chaleur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il détruit les nuages partout",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il augmente forcément la salinité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il produit des séismes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La circulation atmosphérique générale contribue à…",
                        'marks' => 1,
                        'explanation' => "Les mouvements de l’atmosphère transportent de la chaleur et de l’humidité et participent à l’équilibre énergétique du système climatique.",
                        'choices' => [
                            [
                                'choice_text' => "redistribuer la chaleur entre régions tropicales et hautes latitudes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "bloquer entièrement le rayonnement solaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "immobiliser les masses d’air",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "supprimer les saisons",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une zone tropicale, l’air chaud monte souvent parce que…",
                        'marks' => 1,
                        'explanation' => "Le chauffage augmente la température de l’air et tend à réduire sa densité, ce qui favorise les mouvements ascendants dans certaines conditions.",
                        'choices' => [
                            [
                                'choice_text' => "il est moins dense lorsqu’il est chauffé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "il devient plus lourd en chauffant",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les océans le tirent vers le haut",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la pression disparaît",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Lorsque l’air monte et se détend, il a tendance à…",
                        'marks' => 1,
                        'explanation' => "La baisse de pression avec l’altitude favorise la détente de l’air, qui se refroidit adiabatiquement avant une éventuelle condensation si l’humidité est suffisante.",
                        'choices' => [
                            [
                                'choice_text' => "se refroidir",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "se transformer immédiatement en glace",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "se réchauffer toujours",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "perdre toute pression sans changement de température",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un courant froid longe une côte. Quel effet local peut-il avoir sur l’atmosphère voisine ?",
                        'marks' => 1,
                        'explanation' => "Un courant froid refroidit la surface marine et peut réduire l’évaporation, ce qui influence les conditions atmosphériques côtières.",
                        'choices' => [
                            [
                                'choice_text' => "Il peut refroidir l’air au-dessus de l’océan et limiter l’évaporation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il chauffe toujours fortement l’air",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il crée automatiquement un cyclone",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il transforme l’eau en eau douce",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les courants océaniques sont-ils importants pour les climats côtiers ?",
                        'marks' => 1,
                        'explanation' => "Les courants participent au transport de chaleur et peuvent modifier les échanges entre l’océan et l’atmosphère.",
                        'choices' => [
                            [
                                'choice_text' => "Ils transportent de l’énergie et peuvent modifier température et humidité locales",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils empêchent toute circulation atmosphérique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils changent la rotation terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils créent les reliefs continentaux",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "El Niño correspond à une anomalie importante touchant notamment…",
                        'marks' => 1,
                        'explanation' => "El Niño est associé à un réchauffement anormal des eaux de surface dans le Pacifique équatorial central et oriental, avec des effets atmosphériques à distance.",
                        'choices' => [
                            [
                                'choice_text' => "les températures de surface du Pacifique équatorial",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la température du noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le magnétisme des roches continentales",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la longueur des jours",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un épisode El Niño peut modifier les précipitations dans des régions très éloignées parce que…",
                        'marks' => 1,
                        'explanation' => "Les anomalies de température de l’océan modifient les échanges d’énergie et d’humidité avec l’atmosphère, ce qui peut téléconnecter les régimes de pluie.",
                        'choices' => [
                            [
                                'choice_text' => "les interactions océan-atmosphère modifient la circulation atmosphérique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "les continents se déplacent de plusieurs kilomètres en quelques mois",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le Soleil change de taille",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les montagnes fondent",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un courant marin chaud peut contribuer à une côte plus douce en hiver. Quel mécanisme intervient ?",
                        'marks' => 1,
                        'explanation' => "L’océan chaud peut céder de la chaleur à l’air et atténuer localement les températures froides de l’hiver.",
                        'choices' => [
                            [
                                'choice_text' => "Le transfert de chaleur de l’océan vers l’atmosphère",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La fusion des roches",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La disparition des nuages",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La baisse de latitude",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’océan a-t-il un rôle important dans le climat mondial ?",
                        'marks' => 1,
                        'explanation' => "La grande capacité thermique de l’océan et les courants permettent de stocker et redistribuer une quantité importante d’énergie climatique.",
                        'choices' => [
                            [
                                'choice_text' => "Il stocke et transporte une grande quantité de chaleur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il ne contient aucune énergie thermique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il bloque tous les vents",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il est plus petit que les lacs",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Lire des données climatiques",
                'description' => "Interpréter simplement moyennes, précipitations, courbes et variabilité climatique.",
                'duration' => 21,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Une série de températures annuelles montre une hausse moyenne sur plusieurs décennies avec des variations d’une année à l’autre. Que décrit-elle ?",
                        'marks' => 1,
                        'explanation' => "Une tendance climatique se dégage d’une série longue malgré les fluctuations naturelles d’une année à l’autre.",
                        'choices' => [
                            [
                                'choice_text' => "Une tendance climatique avec variabilité interannuelle",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une météo d’une seule journée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une éruption volcanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une marée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi utilise-t-on des moyennes sur plusieurs décennies en climatologie ?",
                        'marks' => 1,
                        'explanation' => "Les moyennes climatiques synthétisent les conditions habituelles sur une longue durée tout en laissant place à la variabilité autour de la moyenne.",
                        'choices' => [
                            [
                                'choice_text' => "Pour réduire l’influence des fluctuations de court terme et caractériser un régime climatique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour supprimer toutes les mesures extrêmes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour remplacer les observations",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour calculer la magnitude des séismes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une station mesure 10, 12 et 14 °C lors de trois matinées. La moyenne simple est…",
                        'marks' => 1,
                        'explanation' => "La moyenne est (10 + 12 + 14) / 3 = 12 °C.",
                        'choices' => [
                            [
                                'choice_text' => "12 °C",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "10 °C",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "14 °C",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "36 °C",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un graphique montre 800 mm de pluie en 2024 et 600 mm en 2025. La baisse entre les deux années est de…",
                        'marks' => 1,
                        'explanation' => "La différence est 800 - 600 = 200 mm de précipitations.",
                        'choices' => [
                            [
                                'choice_text' => "200 mm",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "1 400 mm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "100 mm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "300 mm",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une région a une moyenne annuelle de 18 °C et une autre de 8 °C. La première est-elle forcément plus chaude chaque jour ?",
                        'marks' => 1,
                        'explanation' => "Une moyenne climatique résume une période. Les températures quotidiennes peuvent parfois être plus élevées dans la région à moyenne plus basse.",
                        'choices' => [
                            [
                                'choice_text' => "Non, les moyennes ne décrivent pas chaque journée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Oui, sans exception",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, si les villes ont la même latitude",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Non, mais seulement en hiver",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Sur une courbe climatique, des barres mensuelles de pluie et une courbe de température servent surtout à…",
                        'marks' => 1,
                        'explanation' => "Un diagramme climatique synthétise les précipitations et températures moyennes selon les mois afin de décrire le régime climatique local.",
                        'choices' => [
                            [
                                'choice_text' => "visualiser le régime climatique annuel d’un lieu",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "prévoir l’heure exacte d’un orage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "mesurer la profondeur d’un océan",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "dater une roche",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une courbe de température présente un maximum en juillet et un minimum en janvier dans l’hémisphère Nord. Cela correspond à…",
                        'marks' => 1,
                        'explanation' => "Le maximum estival et le minimum hivernal sont cohérents avec la saisonnalité de l’hémisphère Nord.",
                        'choices' => [
                            [
                                'choice_text' => "un cycle saisonnier annuel attendu",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une preuve d’une erreur de mesure",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une activité volcanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un changement de latitude",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une année très pluvieuse suivie d’une année très sèche dans la même région montre surtout…",
                        'marks' => 1,
                        'explanation' => "Les conditions météorologiques varient d’une année à l’autre. Cette variabilité fait partie du climat et ne l’annule pas.",
                        'choices' => [
                            [
                                'choice_text' => "la variabilité du climat d’une année à l’autre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "que le climat n’existe pas",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une inversion des pôles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la fin du cycle de l’eau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi faut-il homogénéiser une longue série météorologique avant de rechercher une tendance ?",
                        'marks' => 1,
                        'explanation' => "Les changements d’instrument, de site ou de méthode peuvent introduire des ruptures artificielles. Les séries sont donc contrôlées et homogénéisées avant analyse.",
                        'choices' => [
                            [
                                'choice_text' => "Pour limiter les effets de changements de station ou de méthode de mesure",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour augmenter artificiellement la tendance",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour supprimer le climat local",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour remplacer les données par des estimations aléatoires",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un graphique présente une hausse des températures moyennes mais aussi quelques années froides. Comment le lire correctement ?",
                        'marks' => 1,
                        'explanation' => "Une tendance statistique n’implique pas une hausse monotone chaque année. Des années plus froides peuvent survenir dans une série à tendance générale positive.",
                        'choices' => [
                            [
                                'choice_text' => "Une tendance moyenne peut coexister avec une variabilité interannuelle",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les années froides prouvent qu’il n’existe aucune tendance",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Toutes les températures doivent augmenter chaque année",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le graphique mesure uniquement les précipitations",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Cas climatiques du quotidien",
                'description' => "Appliquer les facteurs climatiques à des situations locales réalistes.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une ville côtière de latitude moyenne a des hivers plus doux qu’une ville continentale à même latitude. Quel facteur joue un rôle majeur ?",
                        'marks' => 1,
                        'explanation' => "L’océan stocke de la chaleur et échange avec l’atmosphère, ce qui réduit souvent les extrêmes thermiques des régions côtières.",
                        'choices' => [
                            [
                                'choice_text' => "L’influence thermique de l’océan",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La présence obligatoire d’un volcan",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le champ magnétique local",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La composition du noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une station en montagne reçoit plus de neige qu’une plaine proche. Une cause possible est…",
                        'marks' => 1,
                        'explanation' => "La baisse de température avec l’altitude favorise les précipitations neigeuses lorsque les conditions sont suffisamment froides.",
                        'choices' => [
                            [
                                'choice_text' => "la température plus basse liée à l’altitude",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la proximité du noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la salinité de l’air",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une absence de gravité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une région située sous l’influence d’un courant océanique froid peut connaître des conditions plus sèches que prévu. Une explication possible est…",
                        'marks' => 1,
                        'explanation' => "Les eaux froides limitent souvent l’évaporation et peuvent donc réduire l’apport d’humidité à l’atmosphère locale.",
                        'choices' => [
                            [
                                'choice_text' => "une évaporation réduite au-dessus des eaux froides",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une augmentation automatique du CO₂",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un déplacement de l’équateur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une intensification du Soleil",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une forte végétalisation urbaine peut réduire localement la chaleur ressentie en été. Pourquoi ?",
                        'marks' => 1,
                        'explanation' => "Les arbres apportent de l’ombre et l’évapotranspiration consomme de l’énergie, ce qui peut réduire les températures locales.",
                        'choices' => [
                            [
                                'choice_text' => "L’ombre et l’évapotranspiration dissipent une partie de l’énergie",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les arbres arrêtent le rayonnement solaire mondial",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les plantes refroidissent le noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La végétation augmente toujours le béton",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une station de vallée est plus froide que les sommets voisins lors d’une nuit calme et sans vent. Quelle situation est plausible ?",
                        'marks' => 1,
                        'explanation' => "L’air refroidi près du sol peut s’écouler vers le fond de la vallée et y rester piégé sous une couche d’air plus doux.",
                        'choices' => [
                            [
                                'choice_text' => "Une inversion thermique par accumulation d’air froid au fond de la vallée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un courant océanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un cyclone",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une marée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un changement durable des températures moyennes sur plusieurs décennies relève du domaine de…",
                        'marks' => 1,
                        'explanation' => "Les variations statistiques à long terme des conditions atmosphériques sont étudiées en climatologie.",
                        'choices' => [
                            [
                                'choice_text' => "la climatologie",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la météorologie horaire uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la sismologie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la paléontologie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi deux régions recevant la même quantité annuelle de pluie peuvent-elles avoir des écosystèmes différents ?",
                        'marks' => 1,
                        'explanation' => "La quantité annuelle seule ne décrit pas la répartition des pluies, la température ni les autres facteurs qui contrôlent les milieux.",
                        'choices' => [
                            [
                                'choice_text' => "La saisonnalité des pluies, les températures et d’autres facteurs peuvent différer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La pluie a toujours exactement le même effet",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les plantes ne dépendent jamais de la température",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les sols sont identiques partout",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une station reçoit 100 mm de pluie en janvier et 20 mm en juillet. Quelle saison est la plus humide selon ces données ?",
                        'marks' => 1,
                        'explanation' => "D’après ces valeurs mensuelles, janvier est plus humide que juillet. Le caractère saisonnier dépend ensuite de la région et de l’hémisphère.",
                        'choices' => [
                            [
                                'choice_text' => "L’hiver représenté par janvier",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’été représenté par juillet",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux exactement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Impossible sans connaître la latitude",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un changement de couverture du sol, par exemple le remplacement d’une forêt par une zone urbaine, peut modifier le climat local car…",
                        'marks' => 1,
                        'explanation' => "La couverture du sol influence l’albédo, le stockage de chaleur, l’évapotranspiration et le ruissellement, ce qui peut modifier le microclimat.",
                        'choices' => [
                            [
                                'choice_text' => "les échanges d’énergie et d’eau avec l’atmosphère changent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la latitude change",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la Terre ralentit sa rotation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la composition du noyau change",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour comparer le climat de deux villes, quelle information est la plus pertinente ?",
                        'marks' => 1,
                        'explanation' => "Comparer des séries climatiques sur des périodes longues permet de caractériser correctement les régimes thermiques et pluviométriques des deux villes.",
                        'choices' => [
                            [
                                'choice_text' => "Des séries longues de températures et de précipitations",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La météo d’un seul après-midi",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une photographie du ciel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La vitesse d’un seul vent",
                                'is_correct' => false,
                            ],
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
