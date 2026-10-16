<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class HydrologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'hydrology')->firstOrFail();

        $quizzes = [
            [
                'title' => "Le cycle de l’eau",
                'description' => "Comprendre les principaux réservoirs et transferts d’eau entre la surface, le sous-sol et l’atmosphère.",
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Au large d’Agadir, le Soleil chauffe la surface de l’Atlantique. Que devient une partie de cette eau ?",
                        'marks' => 1,
                        'explanation' => "Sous l’effet de la chaleur, l’eau liquide passe à l’état de vapeur : c’est l’évaporation.",
                        'choices' => [
                            [
                                'choice_text' => "Elle ruisselle vers l’intérieur des terres",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle s’infiltre sous le fond marin",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle s’évapore et gagne l’atmosphère",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle gèle et forme une banquise",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un air humide monte en altitude et se refroidit. Quel phénomène donne naissance aux nuages ?",
                        'marks' => 1,
                        'explanation' => "En se refroidissant, la vapeur d’eau redevient liquide sous forme de minuscules gouttelettes. Leur ensemble forme le nuage.",
                        'choices' => [
                            [
                                'choice_text' => "La condensation de la vapeur en gouttelettes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’évaporation de l’eau des océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La précipitation de l’eau vers le sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’infiltration de l’eau dans les roches",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans quel ordre se déroulent ces étapes avant la pluie ?",
                        'marks' => 1,
                        'explanation' => "L’eau s’évapore d’abord, la vapeur se condense ensuite en nuage, puis l’eau retombe en précipitations.",
                        'choices' => [
                            [
                                'choice_text' => "Condensation, évaporation, précipitation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Précipitation, condensation, évaporation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Évaporation, infiltration, condensation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Évaporation, condensation, précipitation",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après un orage à Ifrane, l’eau dévale la pente et rejoint un ruisseau sans entrer dans le sol. Comment appelle-t-on ce flux ?",
                        'marks' => 1,
                        'explanation' => "L’eau qui glisse à la surface du sol vers un cours d’eau, c’est le ruissellement. Celle qui s’enfonce dans le sol relève de l’infiltration.",
                        'choices' => [
                            [
                                'choice_text' => "La transpiration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le ruissellement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’infiltration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La sublimation",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pendant la saison des pluies, l’eau tombée sur un champ de la plaine du Saïs s’enfonce dans le sol. Quel est ce processus ?",
                        'marks' => 1,
                        'explanation' => "L’infiltration désigne le passage de l’eau de la surface vers l’intérieur du sol. Une partie rejoint ensuite les nappes souterraines.",
                        'choices' => [
                            [
                                'choice_text' => "Le ruissellement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’infiltration",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’évaporation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La fusion",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un olivier perd de l’eau sous forme de vapeur par ses feuilles. Comment appelle-t-on ce phénomène ?",
                        'marks' => 1,
                        'explanation' => "L’eau absorbée par les racines remonte jusqu’aux feuilles et repart dans l’air sous forme de vapeur. C’est la transpiration.",
                        'choices' => [
                            [
                                'choice_text' => "L’évaporation du sol nu",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La condensation de la rosée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’infiltration par les racines",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La transpiration des plantes",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Au Groenland, la glace d’un glacier fond en été. Quel changement subit l’eau qu’il contenait ?",
                        'marks' => 1,
                        'explanation' => "Fondre, c’est passer de la glace à l’eau liquide. Cette eau part ensuite vers les rivières, les lacs ou le sol.",
                        'choices' => [
                            [
                                'choice_text' => "Elle passe de l’état solide à l’état liquide",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle passe de l’état liquide à l’état gazeux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle passe de l’état gazeux à l’état liquide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle passe de l’état solide à l’état gazeux",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Chaque printemps, la neige du Haut Atlas fond et le débit de l’oued Ourika monte. D’où vient cette eau en plus ?",
                        'marks' => 1,
                        'explanation' => "La neige accumulée en hiver fond avec la hausse des températures. L’eau ruisselle ensuite vers les oueds et fait monter leur débit.",
                        'choices' => [
                            [
                                'choice_text' => "De la vapeur qui se condense dans l’oued",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Des plantes qui rejettent leur eau en altitude",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "De la neige fondue qui ruisselle jusqu’à l’oued",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "D’une nappe qui s’évapore dans la vallée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle réserve contient la plus grande part de l’eau présente sur Terre ?",
                        'marks' => 1,
                        'explanation' => "Les océans concentrent l’immense majorité de l’eau terrestre. Les eaux douces de surface ne représentent qu’une petite partie du total.",
                        'choices' => [
                            [
                                'choice_text' => "Les calottes glaciaires",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les lacs et les rivières",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les nappes souterraines",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les océans et les mers",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Parmi ces phrases, laquelle décrit le mieux le cycle de l’eau ?",
                        'marks' => 1,
                        'explanation' => "L’eau ne se perd pas : le Soleil et la gravité la font passer sans cesse d’un réservoir à un autre.",
                        'choices' => [
                            [
                                'choice_text' => "L’eau des rivières disparaît en arrivant dans la mer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’eau circule en continu entre océans, sols et atmosphère",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’eau des océans monte vers les montagnes et s’y fixe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La pluie remplit les nappes puis l’eau cesse de circuler",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Nappes phréatiques et aquifères",
                'description' => "Identifier le fonctionnement élémentaire des eaux souterraines, leur recharge et les risques de contamination.",
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Qu’est-ce qu’une nappe phréatique ?",
                        'marks' => 1,
                        'explanation' => "Une nappe, c’est de l’eau qui remplit les pores et les fissures d’une roche, comme l’eau dans une éponge. Ce n’est pas un lac souterrain.",
                        'choices' => [
                            [
                                'choice_text' => "Un grand lac souterrain au fond d’une grotte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une réserve d’eau qui imbibe les roches du sous-sol",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un réservoir bétonné creusé sous terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une rivière souterraine qui rejoint la mer",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un hydrogéologue parle d’aquifère. Que désigne ce mot ?",
                        'marks' => 1,
                        'explanation' => "Un aquifère est une formation géologique dont les vides permettent de garder l’eau et de la faire circuler, assez pour alimenter puits et sources.",
                        'choices' => [
                            [
                                'choice_text' => "Une roche trop compacte pour que l’eau y entre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un canal souterrain qui amène l’eau vers les cultures",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une pompe qui remonte l’eau d’un puits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une roche qui stocke l’eau et la laisse circuler",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Où un puits a-t-il le plus de chances de fournir beaucoup d’eau ?",
                        'marks' => 1,
                        'explanation' => "Les pores d’un grès sont reliés entre eux, ce qui laisse l’eau circuler vers le puits. Le granite compact ou l’argile, eux, la laissent à peine passer.",
                        'choices' => [
                            [
                                'choice_text' => "Dans un grès poreux",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Dans un granite sain et compact",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Dans une argile très fine",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Dans un basalte massif sans fissure",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une plaine, une couche d’argile se trouve sous un sable gorgé d’eau. Que fait cette argile ?",
                        'marks' => 1,
                        'explanation' => "L’argile est très peu perméable : l’eau la traverse à peine et s’accumule au-dessus. Les puits creusés dans le sable y trouvent de l’eau.",
                        'choices' => [
                            [
                                'choice_text' => "Elle laisse l’eau filer vers le bas",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle chauffe l’eau pour l’évaporer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle retient l’eau au-dessus d’elle",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle aspire l’eau vers la surface",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un puits pompe beaucoup d’eau pendant plusieurs heures. Que devient le niveau de l’eau dans la nappe autour du puits ?",
                        'marks' => 1,
                        'explanation' => "En retirant de l’eau, la pompe fait descendre le niveau autour du puits. Plus le débit de pompage est fort, plus la baisse est marquée.",
                        'choices' => [
                            [
                                'choice_text' => "Il monte à cause de l’aspiration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il ne bouge pas, la nappe étant trop vaste",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il baisse autour du puits",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il oscille au rythme des marées",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après un hiver pluvieux, le niveau d’un puits remonte de 2 m. Quel processus a rechargé la nappe ?",
                        'marks' => 1,
                        'explanation' => "L’eau de pluie qui s’infiltre rejoint la nappe et fait remonter son niveau. C’est ce qu’on appelle la recharge.",
                        'choices' => [
                            [
                                'choice_text' => "L’infiltration d’une partie de l’eau de pluie",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’évaporation de l’eau des océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le ruissellement vers la mer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La condensation de la vapeur au sein des nuages",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "À flanc de colline, de l’eau claire sort de la roche et forme un petit ruisseau. Comment s’appelle cette sortie d’eau ?",
                        'marks' => 1,
                        'explanation' => "Quand la nappe affleure à la surface, l’eau jaillit : c’est une source. L’Oum Er-Rbia, par exemple, naît de sources du Moyen Atlas.",
                        'choices' => [
                            [
                                'choice_text' => "Un forage profond",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un affluent du fleuve",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un petit delta",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une source naturelle",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel geste protège le mieux l’eau d’un puits familial ?",
                        'marks' => 1,
                        'explanation' => "Les polluants versés près d’un puits s’infiltrent et gagnent la nappe. Mieux vaut les tenir à distance.",
                        'choices' => [
                            [
                                'choice_text' => "Stocker les engrais et les pesticides à côté du puits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Tenir fosses et produits chimiques à l’écart du puits",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Creuser la fosse d’aisance à deux pas du puits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Laver les bidons de produits au bord du puits",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le niveau d’une nappe est plus bas en septembre qu’en mars. Quelle explication est la bonne ?",
                        'marks' => 1,
                        'explanation' => "Sans pluie en été, la nappe n’est plus rechargée alors qu’on y puise davantage : son niveau baisse. Il remonte avec les pluies d’automne et d’hiver.",
                        'choices' => [
                            [
                                'choice_text' => "Les marées d’été aspirent l’eau de la nappe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le soleil d’été chauffe la nappe jusqu’à l’évaporer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il ne pleut plus en été et l’on pompe davantage",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les nuages d’été retiennent l’eau de la nappe",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les puits de Karim et de Salma captent la même nappe. L’eau est à 4 m de profondeur chez Karim et à 9 m chez Salma. Quelle explication est la plus simple ?",
                        'marks' => 1,
                        'explanation' => "La profondeur se mesure depuis le sol : sur un terrain plus haut, le même niveau d’eau est plus profond. Le diamètre du puits ne change rien.",
                        'choices' => [
                            [
                                'choice_text' => "Le terrain de Salma est plus haut que celui de Karim",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La nappe de Salma contient surtout de l’eau de mer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le puits de Karim est plus large que celui de Salma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il pleut plus fort chez Karim que chez Salma",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour suivre une nappe, un technicien descend une sonde dans un puits. Que mesure-t-il ainsi ?",
                        'marks' => 1,
                        'explanation' => "La sonde indique à quelle profondeur se trouve l’eau. En répétant la mesure chaque mois, on voit la nappe monter ou baisser.",
                        'choices' => [
                            [
                                'choice_text' => "Le volume total de la nappe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La profondeur de l’eau sous le sol",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La vitesse du courant dans les roches",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La quantité de pluie tombée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Au Maroc, la khettara est une galerie souterraine. À quoi sert-elle ?",
                        'marks' => 1,
                        'explanation' => "La khettara capte l’eau de la nappe et la fait couler par simple pente, sans pompe, jusqu’aux jardins. On en trouve dans les régions de Marrakech et du Tafilalet.",
                        'choices' => [
                            [
                                'choice_text' => "À remonter l’eau de la nappe avec une pompe à moteur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "À récupérer et à stocker l’eau de pluie dans un bassin",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "À dessaler l’eau de mer pour irriguer les cultures",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "À amener l’eau de la nappe jusqu’aux champs par gravité",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Bassins versants et cours d’eau",
                'description' => "Maîtriser les notions de bassin versant, réseau hydrographique, amont, aval et débit.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Toute l’eau qui tombe sur un territoire s’écoule vers un même point de sortie, comme l’embouchure d’un oued. Comment nomme-t-on ce territoire ?",
                        'marks' => 1,
                        'explanation' => "C’est la définition du bassin versant : la surface dont l’eau converge vers un même exutoire. L’Oum Er-Rbia, le Sebou ou le Tensift ont chacun le leur.",
                        'choices' => [
                            [
                                'choice_text' => "Un delta fluvial",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un bassin versant",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un aquifère libre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un estuaire côtier",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Sur une carte, quelle ligne sépare deux bassins versants voisins ?",
                        'marks' => 1,
                        'explanation' => "Elle suit les crêtes : l’eau tombée d’un côté part vers un bassin, celle de l’autre côté vers le bassin voisin.",
                        'choices' => [
                            [
                                'choice_text' => "La ligne qui suit le rivage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La ligne qui relie deux confluences",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La ligne de partage des eaux",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La limite administrative de la province",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un oued voit passer 50 m³/s devant une station de mesure. Que représente cette valeur ?",
                        'marks' => 1,
                        'explanation' => "Le débit est un volume d’eau par unité de temps : ici 50 m³ chaque seconde. La vitesse, elle, se compte en m/s.",
                        'choices' => [
                            [
                                'choice_text' => "La vitesse du courant en surface",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le volume d’eau qui passe en une seconde",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La hauteur d’eau relevée dans le lit",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le volume de pluie tombé sur le bassin",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après un orage, le débit d’un petit oued passe de 2 à 15 m³/s en une heure. Qu’est-ce qui apporte cette eau aussi vite ?",
                        'marks' => 1,
                        'explanation' => "La pluie qui ne s’infiltre pas dévale les pentes et gagne l’oued en quelques heures. Les nappes réagissent bien plus lentement.",
                        'choices' => [
                            [
                                'choice_text' => "La remontée progressive de la nappe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’évaporation du lit de l’oued",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La fonte lente de la neige",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le ruissellement sur les versants",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un randonneur remonte un oued en direction de sa source. Vers quelle partie du cours d’eau marche-t-il ?",
                        'marks' => 1,
                        'explanation' => "L’amont est la partie proche de la source, plus haute. L’aval se trouve du côté de l’embouchure.",
                        'choices' => [
                            [
                                'choice_text' => "L’aval",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’exutoire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le delta",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’amont",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "L’Ouergha se jette dans le Sebou. Par rapport au Sebou, l’Ouergha est…",
                        'marks' => 1,
                        'explanation' => "Un affluent est un cours d’eau qui se jette dans un autre, plus grand. L’Ouergha apporte ainsi son eau au Sebou.",
                        'choices' => [
                            [
                                'choice_text' => "un affluent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un exutoire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une nappe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un delta",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux oueds se rejoignent en un même point pour continuer leur route ensemble. Comment s’appelle ce point ?",
                        'marks' => 1,
                        'explanation' => "Une confluence est le point de rencontre de deux cours d’eau. Au-delà, ils ne forment plus qu’un seul écoulement.",
                        'choices' => [
                            [
                                'choice_text' => "Une embouchure",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une source",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une confluence",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un delta",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Sur une montagne reboisée, les crues arrivent moins vite que sur la montagne nue voisine. Quelle en est la raison ?",
                        'marks' => 1,
                        'explanation' => "Un sol couvert d’arbres absorbe mieux l’eau et la libère lentement, ce qui freine le ruissellement. Sur un versant nu, l’eau dévale plus vite.",
                        'choices' => [
                            [
                                'choice_text' => "Le feuillage fait tomber moins de pluie sur la montagne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le sol et les racines retiennent une partie de la pluie",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les racines durcissent le sol et l’isolent de l’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La forêt attire l’eau vers les vallées voisines",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après la même pluie, un caniveau en béton évacue l’eau bien plus vite qu’un talus herbeux. Quelle est la raison ?",
                        'marks' => 1,
                        'explanation' => "Le béton ne laisse pas l’eau pénétrer et n’oppose aucun obstacle à son écoulement. L’herbe, elle, ralentit l’eau et en absorbe une partie.",
                        'choices' => [
                            [
                                'choice_text' => "Le béton bloque l’infiltration et laisse l’eau filer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le béton absorbe l’eau puis la relâche vite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le talus reçoit moins de pluie que le caniveau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’herbe pousse mieux là où l’eau court vite",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "L’Oum Er-Rbia termine sa course près d’Azemmour. Où ses eaux se jettent-elles ?",
                        'marks' => 1,
                        'explanation' => "L’embouchure marque la fin d’un cours d’eau. L’Oum Er-Rbia rejoint l’Atlantique à Azemmour, tandis que la Moulouya se jette dans la Méditerranée.",
                        'choices' => [
                            [
                                'choice_text' => "Dans la mer Méditerranée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Dans le Sebou",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Dans l’océan Atlantique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Dans le lac d’un barrage",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Précipitations, évaporation et bilan hydrique",
                'description' => "Interpréter des situations simples de bilan hydrique et relier les flux d’eau.",
                'duration' => 19,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Les hydrologues parlent d’évapotranspiration. Que désigne ce mot ?",
                        'marks' => 1,
                        'explanation' => "C’est la somme de l’évaporation (sols, lacs) et de la transpiration des plantes : toute l’eau rendue à l’atmosphère par le bassin.",
                        'choices' => [
                            [
                                'choice_text' => "L’eau qui s’infiltre dans le sol puis rejoint la nappe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’eau qui ruisselle jusqu’à l’exutoire du bassin",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’eau qui tombe en pluie ou en neige sur le bassin",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’eau qui retourne à l’air, des sols et des plantes",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Sur un petit bassin, il est tombé 800 mm de pluie en un an et l’évapotranspiration en a repris 500 mm. Combien de millimètres restent pour les rivières, les nappes et le stockage ?",
                        'marks' => 1,
                        'explanation' => "On soustrait : 800 − 500 = 300 mm restent pour le ruissellement, l’infiltration et le stockage.",
                        'choices' => [
                            [
                                'choice_text' => "1 300 mm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "300 mm",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "400 mm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "500 mm",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Par forte chaleur, l’eau d’un petit bassin en béton baisse de 1 cm par jour, alors qu’on n’y prélève rien. Qu’est-ce qui l’explique ?",
                        'marks' => 1,
                        'explanation' => "La chaleur accélère le passage de l’eau liquide à la vapeur. Le niveau baisse donc même sans prélèvement.",
                        'choices' => [
                            [
                                'choice_text' => "L’évaporation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La condensation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La précipitation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le ruissellement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un agriculteur de Berkane veut savoir combien il a plu cette nuit. Quel instrument lui donne la réponse ?",
                        'marks' => 1,
                        'explanation' => "Le pluviomètre recueille l’eau de pluie et la mesure en millimètres. Le baromètre mesure la pression, l’anémomètre la vitesse du vent.",
                        'choices' => [
                            [
                                'choice_text' => "Un baromètre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un anémomètre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un pluviomètre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un hygromètre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un petit bassin reçoit 1 200 m³ d’eau de pluie dans le mois et en perd 450 m³ par évapotranspiration. Quel volume reste disponible ?",
                        'marks' => 1,
                        'explanation' => "1 200 − 450 = 750 m³ restent disponibles. On retire simplement ce qui repart vers l’atmosphère.",
                        'choices' => [
                            [
                                'choice_text' => "1 650 m³",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "750 m³",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "850 m³",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "450 m³",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol est déjà détrempé après trois jours de pluie, et une nouvelle averse tombe. Que devient le ruissellement ?",
                        'marks' => 1,
                        'explanation' => "Un sol déjà plein n’absorbe presque plus rien : la nouvelle pluie ruisselle en grande partie.",
                        'choices' => [
                            [
                                'choice_text' => "Il diminue, car le sol garde l’eau en réserve",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il reste identique à celui du premier jour",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il s’arrête, l’eau s’évaporant tout de suite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il augmente, le sol n’absorbant presque plus",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Du linge mouillé sèche plus vite un jour de vent. Le même effet agit sur un lac : le vent…",
                        'marks' => 1,
                        'explanation' => "Le vent chasse l’air saturé de vapeur au-dessus de l’eau et le remplace par de l’air plus sec. L’évaporation s’en trouve accélérée.",
                        'choices' => [
                            [
                                'choice_text' => "chasse l’air humide et accélère l’évaporation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "ralentit l’évaporation en refroidissant l’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "fait condenser la vapeur au-dessus du lac",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "ne change rien au départ de la vapeur",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un bassin reçoit 600 mm de pluie dans l’année. Les rivières en évacuent 200 mm et l’évapotranspiration en reprend 350 mm. Combien reste stocké dans les sols et les nappes ?",
                        'marks' => 1,
                        'explanation' => "Le calcul est 600 − 200 − 350 = 50 mm. Cette part reste stockée dans les sols ou les nappes.",
                        'choices' => [
                            [
                                'choice_text' => "250 mm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "400 mm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "50 mm",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "1 150 mm",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Sur un versant raide, quelle pratique aide à réduire le ruissellement ?",
                        'marks' => 1,
                        'explanation' => "Les racines et la couverture végétale freinent l’eau et la laissent s’infiltrer. Un sol nu ou tassé la fait au contraire dévaler.",
                        'choices' => [
                            [
                                'choice_text' => "Goudronner les chemins qui traversent le versant",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Enlever l’herbe pour dégager le sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Planter des haies et des arbres sur la pente",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Tasser la terre avec des engins lourds",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après une pluie de 5 mm suivie de dix jours de soleil, que devient l’humidité du sol ?",
                        'marks' => 1,
                        'explanation' => "Sans nouvel apport, l’évapotranspiration retire peu à peu l’eau du sol. Son stock baisse jour après jour.",
                        'choices' => [
                            [
                                'choice_text' => "Elle diminue, car l’eau repart par évapotranspiration",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle augmente, car le soleil apporte de l’humidité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle reste fixe, le sol conserve son eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle rejoint la nappe profonde dès le lendemain",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Exploitation et protection des eaux souterraines",
                'description' => "Analyser les effets simples du pompage, de la pollution et des mesures de gestion des nappes.",
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Dans le Souss, les agriculteurs pompent depuis dix ans plus d’eau que la pluie n’en renouvelle. Quel signe voit-on sur place ?",
                        'marks' => 1,
                        'explanation' => "Quand on pompe plus que la recharge, le niveau de la nappe descend et les puits doivent chercher l’eau plus bas.",
                        'choices' => [
                            [
                                'choice_text' => "Les puits se remplissent plus vite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les sources voisines coulent davantage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les puits doivent être approfondis",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les oueds coulent plus longtemps",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une ville côtière, on pompe énormément dans la nappe voisine de la mer. Quel risque court cette nappe ?",
                        'marks' => 1,
                        'explanation' => "Près du littoral, la baisse de la nappe laisse l’eau de mer avancer sous la terre : l’eau des puits devient salée.",
                        'choices' => [
                            [
                                'choice_text' => "Être envahie par l’eau salée de la mer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Voir sa recharge doubler grâce à la mer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Se vider dans l’atmosphère par évaporation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Se mélanger à l’eau d’un oued de montagne",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une commune veut mieux recharger sa nappe. Quel aménagement l’aide ?",
                        'marks' => 1,
                        'explanation' => "Les sols perméables et la végétation laissent l’eau de pluie s’infiltrer vers la nappe. Le béton et les canalisations l’envoient directement vers l’aval.",
                        'choices' => [
                            [
                                'choice_text' => "Un béton continu sur les places",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Des canalisations qui évacuent la pluie vers l’oued",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La suppression des jardins publics",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Des pavés drainants et des espaces verts",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une usine veut s’installer sur la zone où la pluie alimente une nappe d’eau potable. Quel danger cela représente-t-il ?",
                        'marks' => 1,
                        'explanation' => "Une zone de recharge est l’entrée de la nappe : tout ce qui s’y infiltre rejoint l’eau souterraine. Une pollution y est très difficile à nettoyer.",
                        'choices' => [
                            [
                                'choice_text' => "La chaleur de l’usine évapore la nappe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ses rejets s’infiltrent et polluent la nappe",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’usine fait baisser la pluviométrie locale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les camions tassent le sol et font remonter la nappe",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une zone de sable, un oued perd de l’eau et son débit baisse d’amont en aval. Où va cette eau ?",
                        'marks' => 1,
                        'explanation' => "Sur un lit sableux, l’eau passe entre les grains et gagne la nappe. L’oued recharge ainsi l’eau souterraine pendant les crues.",
                        'choices' => [
                            [
                                'choice_text' => "Elle s’infiltre dans le sable et rejoint la nappe",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle remonte vers l’amont en s’écoulant",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle ruisselle vers un autre bassin versant",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle se condense sous le lit de l’oued",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après trois ans de sécheresse, une source de l’Atlas ne donne plus que quelques litres par minute. Quelle est l’explication la plus simple ?",
                        'marks' => 1,
                        'explanation' => "Sans pluie, la nappe n’est plus rechargée et son niveau baisse ; la source, qui en est la sortie, coule moins.",
                        'choices' => [
                            [
                                'choice_text' => "Le niveau de la mer a baissé",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La roche s’est refermée autour de la nappe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La nappe est moins rechargée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les nuages s’arrêtent avant la montagne",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après l’épandage d’un pesticide dans un champ, l’eau du puits voisin devient impropre à la consommation. Quel trajet le produit a-t-il suivi ?",
                        'marks' => 1,
                        'explanation' => "Le pesticide dissous suit l’eau de pluie qui s’infiltre à travers le sol, puis atteint la nappe où plonge le puits. L’eau doit alors être analysée avant d’être bue.",
                        'choices' => [
                            [
                                'choice_text' => "Il a remonté le cours de l’oued jusqu’au puits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il s’est infiltré à travers le sol jusqu’à la nappe",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il s’est évaporé puis condensé dans la nappe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il a traversé la roche depuis un bassin voisin",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle nappe se recharge le plus vite après une pluie ?",
                        'marks' => 1,
                        'explanation' => "L’eau de pluie atteint vite une nappe proche de la surface. Pour une nappe profonde, elle doit traverser de longues distances de roche, ce qui prend beaucoup plus de temps.",
                        'choices' => [
                            [
                                'choice_text' => "Une nappe très profonde sous des roches épaisses",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une nappe fossile du Sahara",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une nappe enfouie sous une argile épaisse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une nappe proche de la surface",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux fermes pompent dans le même aquifère. Quand la première triple ses prélèvements, que constate la seconde ?",
                        'marks' => 1,
                        'explanation' => "Les deux puits plongent dans la même eau souterraine : si l’un en retire beaucoup, le niveau baisse autour des deux.",
                        'choices' => [
                            [
                                'choice_text' => "Le niveau d’eau baisse aussi chez elle",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Rien ne change, chaque puits ayant sa propre eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Son niveau monte grâce à l’eau déplacée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Son eau devient plus chaude",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle mesure aide à gérer une nappe sans l’épuiser ?",
                        'marks' => 1,
                        'explanation' => "Une nappe dure si l’on n’en retire pas plus qu’elle ne reçoit. Mesurer son niveau permet de réagir avant qu’elle ne s’épuise.",
                        'choices' => [
                            [
                                'choice_text' => "Creuser plus profond quand le niveau baisse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Attendre que les puits soient à sec avant d’agir",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Suivre le niveau et limiter le pompage à la recharge",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Réserver l’eau aux plus gros agriculteurs",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une plaine, on a limité le pompage il y a trois ans. Depuis, le niveau de la nappe ne baisse plus. Que montre cette observation ?",
                        'marks' => 1,
                        'explanation' => "Le niveau s’est stabilisé dès que l’on a retiré moins d’eau, ce qui désigne le pompage comme cause principale de la baisse.",
                        'choices' => [
                            [
                                'choice_text' => "La nappe a atteint le niveau de la mer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La recharge a disparu de la région",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les puits voisins ont été rebouchés",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le pompage était la cause de la baisse",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Ressources en eau douce",
                'description' => "Relier quantité, qualité, usages et gestion durable des ressources en eau.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Où trouve-t-on l’eau douce que l’être humain utilise le plus facilement ?",
                        'marks' => 1,
                        'explanation' => "Les rivières, les lacs et les nappes sont faciles d’accès. La glace des pôles contient beaucoup d’eau douce, mais elle reste hors de portée.",
                        'choices' => [
                            [
                                'choice_text' => "Dans l’eau des océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Dans les cours d’eau et les nappes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Dans la vapeur des nuages",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Dans la glace des calottes polaires",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "L’eau douce se renouvelle grâce au cycle de l’eau, et pourtant certaines régions en manquent. Quelle raison l’explique le mieux ?",
                        'marks' => 1,
                        'explanation' => "L’eau n’est pas détruite, mais elle se répartit mal : abondante dans certaines régions, rare dans d’autres.",
                        'choices' => [
                            [
                                'choice_text' => "L’eau douce est détruite après usage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le cycle de l’eau s’arrête dans les régions sèches",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’eau douce devient salée quand on la pompe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’eau douce est très inégalement répartie",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans la plaine du Souss, un agriculteur remplace l’arrosage en surface par du goutte-à-goutte. Quel est l’avantage principal ?",
                        'marks' => 1,
                        'explanation' => "Le goutte-à-goutte dépose l’eau au pied de la plante, ce qui limite l’évaporation et le ruissellement. Cette technique est très utilisée dans le Souss.",
                        'choices' => [
                            [
                                'choice_text' => "Le sol reçoit un volume d’eau plus important",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La surface mouillée du champ s’agrandit",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’eau va aux racines avec peu de pertes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’eau s’évapore plus facilement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un oued a un gros débit, mais une usine y rejette ses eaux sales. Que peut-on dire de sa ressource ?",
                        'marks' => 1,
                        'explanation' => "Un gros volume d’eau ne suffit pas : la pollution dégrade la qualité et rend l’eau impropre à plusieurs usages. Quantité et qualité comptent toutes les deux.",
                        'choices' => [
                            [
                                'choice_text' => "Elle est abondante, mais sa qualité est dégradée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle est potable, le débit dilue la pollution",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle est rare, mais de très bonne qualité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle est devenue salée à cause de l’usine",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un laboratoire veut savoir si l’eau d’un puits côtier est salée. Quelle grandeur doit-il mesurer ?",
                        'marks' => 1,
                        'explanation' => "La salinité indique la quantité de sel dissous dans l’eau. Le débit mesure un volume et le pH l’acidité.",
                        'choices' => [
                            [
                                'choice_text' => "Le débit du puits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le pH de l’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La profondeur du puits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La salinité de l’eau",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le barrage Al Massira retient l’eau de l’Oum Er-Rbia. À quoi sert cette réserve dans une région aux saisons contrastées ?",
                        'marks' => 1,
                        'explanation' => "Un barrage décale l’eau dans le temps : on stocke quand il pleut et on distribue quand il manque. Il ne crée pas d’eau nouvelle.",
                        'choices' => [
                            [
                                'choice_text' => "À augmenter la quantité de pluie sur la région",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "À stocker l’eau des mois humides pour les mois secs",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "À éliminer l’évaporation de l’eau stockée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "À dessaler l’eau des oueds voisins",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel secteur utilise la plus grande part de l’eau douce prélevée au Maroc ?",
                        'marks' => 1,
                        'explanation' => "L’irrigation absorbe la grande majorité des prélèvements d’eau douce du pays, devant l’eau potable et l’industrie.",
                        'choices' => [
                            [
                                'choice_text' => "Les ménages urbains",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’industrie minière",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’agriculture irriguée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le tourisme et l’hôtellerie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "À quoi sert le chlore ajouté à l’eau du robinet ?",
                        'marks' => 1,
                        'explanation' => "Le chlore détruit bactéries et virus pour que l’eau reste saine jusqu’au robinet. Il n’enlève ni le sel ni le calcaire.",
                        'choices' => [
                            [
                                'choice_text' => "À détruire les microbes de l’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "À retirer le sel dissous dans l’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "À rendre l’eau plus claire et plus fraîche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "À adoucir l’eau en retenant le calcaire",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Que fait une zone de protection autour d’un captage d’eau potable ?",
                        'marks' => 1,
                        'explanation' => "Autour d’un captage, on interdit ou on encadre les activités qui risquent de salir l’eau. Elle arrive ainsi plus saine au traitement.",
                        'choices' => [
                            [
                                'choice_text' => "Elle augmente le débit de la source",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle écarte les activités polluantes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle réchauffe l’eau avant son arrivée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle limite l’évaporation du captage",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une fuite fait perdre 2 litres d’eau par heure. Combien de litres perd-elle en une journée de 24 heures ?",
                        'marks' => 1,
                        'explanation' => "On multiplie : 2 × 24 = 48 litres par jour, soit plus de 1 400 litres par mois. Réparer la fuite évite ce gaspillage.",
                        'choices' => [
                            [
                                'choice_text' => "24 litres",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "26 litres",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "480 litres",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "48 litres",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Lire des données hydrologiques",
                'description' => "Lire de petits relevés de pluie, de débit et de réaction d’un bassin.",
                'duration' => 21,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Un graphique montre le débit d’un oued au fil des heures. Après un orage, la courbe monte jusqu’à un sommet avant de redescendre. Que représente ce sommet ?",
                        'marks' => 1,
                        'explanation' => "Le sommet de la courbe indique le débit maximal de la crue. La courbe redescend ensuite quand l’eau du bassin finit de s’écouler.",
                        'choices' => [
                            [
                                'choice_text' => "Le moment où le débit atteint sa valeur maximale",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le moment où la pluie s’arrête de tomber",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le moment où l’oued se met à sec",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’heure où la nappe est la plus basse",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après la même averse, le débit de pointe atteint 80 m³/s dans le bassin urbain contre 30 m³/s dans le bassin boisé. Quelle différence entre les deux bassins l’explique ?",
                        'marks' => 1,
                        'explanation' => "En ville, béton et bitume empêchent l’eau de s’infiltrer : elle file vers les oueds et le pic est plus haut. En forêt, le sol en absorbe une partie.",
                        'choices' => [
                            [
                                'choice_text' => "Le bassin urbain est plus proche de la mer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’eau du bassin boisé est plus froide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le bassin boisé a plus de nappes profondes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les surfaces bétonnées bloquent l’infiltration",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Sur une carte, un ruisseau passe d’une altitude de 900 m à 600 m. Dans quel sens l’eau s’écoule-t-elle ?",
                        'marks' => 1,
                        'explanation' => "L’eau s’écoule vers le bas sous l’effet de la gravité : de 900 m vers 600 m. Les courbes de niveau indiquent ainsi le sens du courant.",
                        'choices' => [
                            [
                                'choice_text' => "Du point à 600 m vers le point à 900 m",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Du point à 900 m vers le point à 600 m",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle reste immobile entre les deux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle tourne autour du relief sans avancer",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un graphique montre un débit de 50 m³/s à 8 h et 80 m³/s à 10 h. De combien le débit a-t-il augmenté ?",
                        'marks' => 1,
                        'explanation' => "La différence est 80 − 50 = 30 m³/s. Le débit a donc augmenté de 30 m³/s entre les deux mesures.",
                        'choices' => [
                            [
                                'choice_text' => "130 m³/s",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "30 m³/s",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "20 m³/s",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "40 m³/s",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un pluviomètre mesure 15 mm de pluie lundi et 5 mm mardi. Le cumul sur ces deux jours est de…",
                        'marks' => 1,
                        'explanation' => "Le cumul correspond à 15 + 5 = 20 mm de précipitations.",
                        'choices' => [
                            [
                                'choice_text' => "10 mm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "75 mm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "20 mm",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "3 mm",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une pluie commence à 14 h. Le débit de l’oued atteint son maximum à 17 h. Combien de temps s’est écoulé entre le début de la pluie et ce pic ?",
                        'marks' => 1,
                        'explanation' => "De 14 h à 17 h, il s’écoule 3 heures. Ce décalage s’appelle le temps de réponse du bassin.",
                        'choices' => [
                            [
                                'choice_text' => "3 heures",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "5 heures",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "2 heures",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "17 heures",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Voici les pluies annuelles d’une station : 400 mm, 550 mm, 300 mm et 450 mm. Quelle est la pluie annuelle moyenne sur ces quatre ans ?",
                        'marks' => 1,
                        'explanation' => "On additionne 400 + 550 + 300 + 450 = 1 700 mm, puis on divise par 4 : cela donne 425 mm par an.",
                        'choices' => [
                            [
                                'choice_text' => "1 700 mm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "450 mm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "300 mm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "425 mm",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un oued passe de 100 à 60 m³/s en cinq jours sans pluie. Que peut-on en conclure ?",
                        'marks' => 1,
                        'explanation' => "Sans pluie, le ruissellement cesse et seule l’eau stockée dans les sols et les nappes alimente l’oued. Son débit baisse : c’est la décrue.",
                        'choices' => [
                            [
                                'choice_text' => "Le bassin a reçu une nouvelle forte pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un affluent s’est jeté dans l’oued",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les apports d’eau s’amenuisent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La nappe s’est vidée d’un coup dans l’oued",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Sur une carte, un oued coule du nord vers le sud. Sa source est au nord et la mer au sud. De quel côté se trouve l’aval ?",
                        'marks' => 1,
                        'explanation' => "L’aval est la partie qui se rapproche de l’embouchure, ici au sud. L’amont, proche de la source, reste au nord.",
                        'choices' => [
                            [
                                'choice_text' => "Au nord, près de la source",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Au sud, vers la mer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "À l’est, sur la rive",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "À l’ouest, sur la crête",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une station mesure 12 mm de pluie sur une surface de 1 m². Quel volume d’eau cela représente-t-il ?",
                        'marks' => 1,
                        'explanation' => "Une hauteur de 12 mm correspond à 0,012 m. Sur 1 m², le volume est 0,012 m³, soit 12 litres.",
                        'choices' => [
                            [
                                'choice_text' => "12 litres",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "1,2 litre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "120 litres",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "0,12 litre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Cas pratiques de gestion de l’eau",
                'description' => "Appliquer les notions hydrologiques à des situations locales réalistes.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Dans une commune de la région de Tiznit, la sécheresse dure depuis trois ans. Quelle décision allège le plus la pression sur l’eau ?",
                        'marks' => 1,
                        'explanation' => "Moins de fuites et moins d’arrosage réduisent la demande alors que la recharge est faible. Pomper davantage épuiserait la nappe plus vite.",
                        'choices' => [
                            [
                                'choice_text' => "Remplir les piscines publiques avant l’été",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pomper plus fort dans la nappe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Arroser les rues chaque matin",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Réparer les fuites et limiter l’arrosage",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après un gros orage, une rue en cuvette est inondée alors que l’oued voisin n’a pas débordé. Qu’est-ce qui explique cette inondation locale ?",
                        'marks' => 1,
                        'explanation' => "Le ruissellement descend les pentes et s’accumule dans les creux, d’où l’inondation locale. Des égouts saturés aggravent le problème.",
                        'choices' => [
                            [
                                'choice_text' => "L’eau de pluie s’est accumulée dans le point bas",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La nappe est remontée d’un coup et a inondé la rue",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’oued a coulé à l’envers pendant tout l’orage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’eau de pluie s’est condensée dans le sol",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une ville remplace un parking en asphalte par des dalles perméables. Quel effet attend-elle ?",
                        'marks' => 1,
                        'explanation' => "Des dalles perméables laissent passer l’eau jusqu’au sol, ce qui soulage les égouts et recharge un peu la nappe.",
                        'choices' => [
                            [
                                'choice_text' => "Le ruissellement vers les égouts augmente nettement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La pluie tombe en moindre quantité sur le quartier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Plus d’infiltration, moins de ruissellement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La nappe reçoit moins d’eau qu’avant",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un champ reste gorgé d’eau pendant une semaine après la pluie. Quelle conséquence menace les cultures ?",
                        'marks' => 1,
                        'explanation' => "Les racines respirent l’air contenu dans les pores du sol. Quand ces pores restent remplis d’eau, elles s’asphyxient et la culture souffre.",
                        'choices' => [
                            [
                                'choice_text' => "Les racines se dessèchent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les racines manquent d’air et s’abîment",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les plantes manquent de lumière",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le sol devient plus salé en un jour",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une station d’épuration rejette son eau traitée dans un oued. Que doit-on surveiller en priorité ?",
                        'marks' => 1,
                        'explanation' => "Même traitée, l’eau rejetée doit respecter des normes pour ne pas abîmer la vie de l’oued. On la contrôle donc régulièrement.",
                        'choices' => [
                            [
                                'choice_text' => "La hauteur des berges en aval",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La qualité de l’eau rejetée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La vitesse du vent sur le site",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La largeur du lit de l’oued",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Trois sources alimentent un village : 4, 2 et 3 litres par seconde. Les habitants consomment 7 litres par seconde. Que reste-t-il ?",
                        'marks' => 1,
                        'explanation' => "Les sources donnent 4 + 2 + 3 = 9 L/s au total. Une fois les 7 L/s consommés retirés, il en reste 2.",
                        'choices' => [
                            [
                                'choice_text' => "Il manque 2 litres par seconde",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il reste 16 litres par seconde",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il reste 5 litres par seconde",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il reste 2 litres par seconde",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans la région du Gharb, des marais ralentissent l’eau pendant les crues. Quel rôle jouent ces zones humides ?",
                        'marks' => 1,
                        'explanation' => "Marais et zones humides jouent le rôle d’éponge : ils gardent l’eau de crue puis la restituent lentement. Ils protègent ainsi les terres en aval.",
                        'choices' => [
                            [
                                'choice_text' => "Elles retiennent l’eau et freinent les crues",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles accélèrent l’arrivée de l’eau vers l’aval",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles transforment l’eau douce en eau salée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles vident les nappes vers la mer",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une vallée étroite aux versants raides, un oued monte très vite après un orage. Quel élément du relief l’explique ?",
                        'marks' => 1,
                        'explanation' => "Sur des versants raides, l’eau dévale la pente et converge vite vers le lit étroit : la crue arrive en peu de temps.",
                        'choices' => [
                            [
                                'choice_text' => "Le fond de la vallée est presque plat",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les versants sont couverts d’une forêt très dense",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les fortes pentes amènent l’eau vite au lit",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La vallée se trouve près de la mer",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une région veut sécuriser son eau pour les années sèches. Quelle stratégie est la plus solide ?",
                        'marks' => 1,
                        'explanation' => "Plusieurs sources d’eau amortissent un déficit sur l’une d’elles, et des zones de recharge préservées gardent les nappes pleines. Dépendre d’une seule ressource est risqué.",
                        'choices' => [
                            [
                                'choice_text' => "S’appuyer sur la même nappe déjà très sollicitée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Attendre que la sécheresse s’installe pour agir",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Doubler les prélèvements dès que l’eau abonde",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Varier les ressources et protéger les zones de recharge",
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un barrage reçoit 90 millions de m³ en hiver et en lâche 70 millions pour l’irrigation. De combien son stock varie-t-il ?",
                        'marks' => 1,
                        'explanation' => "Le calcul est 90 − 70 = +20 : le barrage a gagné 20 millions de m³, car il reçoit plus qu’il ne rend.",
                        'choices' => [
                            [
                                'choice_text' => "+20 millions de m³",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "−20 millions de m³",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "+160 millions de m³",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "+70 millions de m³",
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