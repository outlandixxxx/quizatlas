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
                        'question' => "Dans le cycle de l’eau, que devient une partie de l’eau des océans chauffée par le Soleil ?",
                        'marks' => 1,
                        'explanation' => "L’énergie solaire provoque l’évaporation d’une partie de l’eau de surface. La vapeur d’eau rejoint alors l’atmosphère.",
                        'choices' => [
                            [
                                'choice_text' => "Elle s’évapore et rejoint l’atmosphère",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle devient directement de la roche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle se transforme en sel solide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle pénètre forcément dans le noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La condensation dans l’atmosphère correspond à…",
                        'marks' => 1,
                        'explanation' => "Lorsqu’un air humide se refroidit suffisamment, la vapeur d’eau peut se condenser en gouttelettes ou se déposer sous forme de cristaux.",
                        'choices' => [
                            [
                                'choice_text' => "la transformation de vapeur d’eau en gouttelettes ou cristaux",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la transformation d’un lac en rivière",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la disparition complète de l’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la fusion des roches",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle étape du cycle de l’eau alimente directement les précipitations ?",
                        'marks' => 1,
                        'explanation' => "Les précipitations se produisent lorsque l’eau condensée dans les nuages atteint une taille et des conditions permettant sa chute vers le sol.",
                        'choices' => [
                            [
                                'choice_text' => "La condensation des nuages",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La dérive des continents",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La sédimentation marine",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La fusion du manteau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après une forte pluie, une partie de l’eau s’écoule sur le sol vers un ruisseau. Comment nomme-t-on ce flux ?",
                        'marks' => 1,
                        'explanation' => "Le ruissellement est l’écoulement de l’eau à la surface du sol vers les cours d’eau, les lacs ou la mer.",
                        'choices' => [
                            [
                                'choice_text' => "Le ruissellement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La sublimation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La transpiration animale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La fossilisation",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "L’infiltration désigne principalement…",
                        'marks' => 1,
                        'explanation' => "L’infiltration fait entrer une partie de l’eau de pluie ou d’irrigation dans le sol, où elle peut alimenter les réserves souterraines.",
                        'choices' => [
                            [
                                'choice_text' => "la pénétration de l’eau dans le sol",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "l’écoulement de l’eau uniquement dans l’océan",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la transformation de l’eau en glace dans un glacier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la sortie d’eau par une éruption",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une plante libère de la vapeur d’eau par ses feuilles. Quel processus intervient ?",
                        'marks' => 1,
                        'explanation' => "La transpiration correspond à la perte de vapeur d’eau par les parties aériennes des végétaux, notamment à travers les stomates des feuilles.",
                        'choices' => [
                            [
                                'choice_text' => "La transpiration",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La sédimentation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La subduction",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La précipitation neigeuse",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La fusion d’un glacier participe au cycle de l’eau parce qu’elle…",
                        'marks' => 1,
                        'explanation' => "La fonte d’un glacier transforme la glace en eau liquide qui peut rejoindre les rivières, les lacs ou s’infiltrer dans le sol.",
                        'choices' => [
                            [
                                'choice_text' => "libère de l’eau liquide",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "transforme l’eau en vapeur uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "crée directement un nuage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "produit du sel",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans un bassin montagneux, la neige fond au printemps et augmente le débit d’un cours d’eau. Quelle relation explique cette observation ?",
                        'marks' => 1,
                        'explanation' => "L’eau issue de la fonte peut ruisseler puis rejoindre les cours d’eau, ce qui augmente temporairement leur débit.",
                        'choices' => [
                            [
                                'choice_text' => "La fonte alimente le ruissellement et l’écoulement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La condensation bloque toute rivière",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’évaporation crée directement des galets",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La neige transforme le lit en magma",
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
                                'choice_text' => "Les océans",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les rivières",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les lacs d’eau douce",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les nappes phréatiques peu profondes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé décrit le mieux le cycle de l’eau ?",
                        'marks' => 1,
                        'explanation' => "Le cycle de l’eau décrit les transferts permanents de l’eau entre différents réservoirs sous l’effet de l’énergie solaire et de la gravité.",
                        'choices' => [
                            [
                                'choice_text' => "Un ensemble continu de transferts entre océans, continents, sols et atmosphère",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un phénomène limité aux rivières",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un processus qui ne concerne que les océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une réaction chimique qui détruit l’eau",
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
                        'question' => "Une nappe phréatique est principalement…",
                        'marks' => 1,
                        'explanation' => "Une nappe phréatique correspond à une zone saturée du sous-sol contenant de l’eau souterraine, souvent proche de la surface et liée à la recharge par infiltration.",
                        'choices' => [
                            [
                                'choice_text' => "une réserve d’eau souterraine proche de la surface dans une zone saturée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un nuage situé près du sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un lac d’eau salée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une rivière souterraine toujours libre de s’écouler",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un aquifère est une formation géologique qui…",
                        'marks' => 1,
                        'explanation' => "Un aquifère possède des pores ou des fractures permettant le stockage et la circulation de l’eau souterraine en quantité exploitable.",
                        'choices' => [
                            [
                                'choice_text' => "peut stocker et laisser circuler des quantités exploitables d’eau souterraine",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "empêche toujours toute circulation d’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "contient uniquement de l’eau de mer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "est nécessairement constitué de granite compact",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle roche est généralement favorable à la circulation de l’eau lorsqu’elle est poreuse et perméable ?",
                        'marks' => 1,
                        'explanation' => "Un grès peut contenir des pores connectés permettant le stockage et la circulation de l’eau. La perméabilité dépend de la connexion de ces pores.",
                        'choices' => [
                            [
                                'choice_text' => "Un grès suffisamment poreux",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un verre massif sans fissure",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un métal compact",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une roche totalement vitrifiée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche d’argile très peu perméable située sous une nappe peut jouer le rôle de…",
                        'marks' => 1,
                        'explanation' => "Une couche argileuse peu perméable limite les mouvements verticaux de l’eau et peut contribuer à retenir ou compartimenter une nappe.",
                        'choices' => [
                            [
                                'choice_text' => "couche imperméable ou aquitard",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "réservoir de magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "source directe de pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "faille active",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Lorsqu’un puits pompe rapidement beaucoup d’eau dans une nappe, le niveau d’eau autour du puits peut…",
                        'marks' => 1,
                        'explanation' => "Le pompage retire de l’eau du réservoir. Le niveau piézométrique ou la surface de la nappe peut donc s’abaisser autour du point de prélèvement.",
                        'choices' => [
                            [
                                'choice_text' => "s’abaisser",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "monter systématiquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "rester toujours identique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "se transformer en eau salée instantanément",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La recharge d’une nappe correspond surtout…",
                        'marks' => 1,
                        'explanation' => "La recharge augmente le stock d’eau souterraine. Elle provient souvent de l’infiltration d’une partie des précipitations, avec des variations selon le milieu.",
                        'choices' => [
                            [
                                'choice_text' => "à l’arrivée d’eau dans le réservoir souterrain, souvent par infiltration",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "à la perte d’eau par évaporation depuis l’océan",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "au transport des sédiments par le vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "à une éruption volcanique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une source apparaît lorsqu’une eau souterraine atteint la surface. Une cause fréquente est…",
                        'marks' => 1,
                        'explanation' => "Une source correspond à une émergence d’eau souterraine à la surface, par exemple lorsque la nappe recoupe le relief ou une zone favorable à l’écoulement.",
                        'choices' => [
                            [
                                'choice_text' => "la rencontre entre la nappe et la surface du terrain",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la formation d’un nuage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la fusion d’un glacier dans l’atmosphère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la présence d’un courant marin",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel geste limite le risque de contaminer une nappe près d’un puits ?",
                        'marks' => 1,
                        'explanation' => "Les polluants infiltrés peuvent atteindre les eaux souterraines. Limiter les rejets autour des zones de recharge réduit ce risque.",
                        'choices' => [
                            [
                                'choice_text' => "Éviter le rejet de produits polluants sur le sol à proximité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Multiplier les décharges autour du puits",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Verser de l’huile dans le sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer toute couverture végétale",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une nappe libre est directement en contact avec…",
                        'marks' => 1,
                        'explanation' => "Dans une nappe libre, sa surface supérieure n’est pas confinée par une couche imperméable continue et elle est reliée à la zone non saturée au-dessus.",
                        'choices' => [
                            [
                                'choice_text' => "la zone non saturée située au-dessus",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une chambre magmatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le noyau terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "l’eau océanique par définition",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux puits montrent des niveaux d’eau différents mais appartiennent au même aquifère. Quelle interprétation simple est possible ?",
                        'marks' => 1,
                        'explanation' => "Le niveau de l’eau souterraine dépend de l’altitude, de la recharge, des propriétés de l’aquifère et des prélèvements locaux.",
                        'choices' => [
                            [
                                'choice_text' => "L’eau souterraine peut avoir une distribution et un niveau variables selon la position",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les deux puits contiennent forcément des eaux totalement différentes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’aquifère est nécessairement vide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le sol n’a aucune influence",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un agriculteur irrigue fortement une zone pendant une période sèche. Quel effet peut apparaître si les prélèvements dépassent la recharge ?",
                        'marks' => 1,
                        'explanation' => "Lorsque les prélèvements sont durablement supérieurs à la recharge, le stock souterrain diminue et le niveau de la nappe peut s’abaisser.",
                        'choices' => [
                            [
                                'choice_text' => "Une baisse du stock d’eau souterraine",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une augmentation automatique du niveau de la nappe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La formation d’un glacier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La transformation de la nappe en océan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un puits profond fournit de l’eau qui remonte lentement après un pompage. Quelle propriété du système est mise en évidence ?",
                        'marks' => 1,
                        'explanation' => "Une remontée lente après pompage peut refléter une recharge limitée ou une circulation souterraine lente, caractéristiques d’un système à temps de réponse plus long.",
                        'choices' => [
                            [
                                'choice_text' => "Une recharge ou circulation souterraine relativement lente",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une absence totale d’aquifère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une évaporation immédiate",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une crue de surface",
                                'is_correct' => false,
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
                        'question' => "Un bassin versant est défini principalement par…",
                        'marks' => 1,
                        'explanation' => "Le bassin versant regroupe les surfaces dont l’eau converge vers un même exutoire, par exemple l’embouchure d’une rivière ou un lac.",
                        'choices' => [
                            [
                                'choice_text' => "l’ensemble du territoire dont les eaux s’écoulent vers un même exutoire",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la zone comprise entre deux pays",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la surface d’un seul lac",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une portion de l’océan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle ligne sépare généralement deux bassins versants voisins ?",
                        'marks' => 1,
                        'explanation' => "La ligne de partage des eaux suit les reliefs qui orientent les écoulements vers des bassins différents.",
                        'choices' => [
                            [
                                'choice_text' => "La ligne de partage des eaux",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le littoral uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une faille volcanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le niveau de la mer",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le débit d’un cours d’eau correspond à…",
                        'marks' => 1,
                        'explanation' => "Le débit mesure un volume d’eau traversant une section du cours d’eau pendant une durée donnée, souvent en mètres cubes par seconde.",
                        'choices' => [
                            [
                                'choice_text' => "la quantité d’eau qui traverse une section par unité de temps",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la longueur totale du bassin",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la hauteur d’une montagne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la température de l’eau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après une pluie intense, le débit d’une petite rivière peut augmenter rapidement. Pourquoi ?",
                        'marks' => 1,
                        'explanation' => "Une partie de la pluie ruisselle directement ou alimente rapidement le réseau, ce qui peut provoquer une hausse du débit.",
                        'choices' => [
                            [
                                'choice_text' => "Le ruissellement apporte rapidement de l’eau au réseau hydrographique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La pluie transforme directement l’eau en magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La rivière fabrique elle-même les précipitations",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les sédiments absorbent toute l’eau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans un cours d’eau, l’amont désigne la partie…",
                        'marks' => 1,
                        'explanation' => "L’amont correspond aux secteurs proches de la source, tandis que l’aval se situe vers l’embouchure et l’exutoire.",
                        'choices' => [
                            [
                                'choice_text' => "proche de la source",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "proche de l’embouchure",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "située forcément sous la mer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "occupée par le delta uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un affluent est…",
                        'marks' => 1,
                        'explanation' => "Un affluent rejoint un cours d’eau principal et contribue à augmenter son débit en aval de la confluence.",
                        'choices' => [
                            [
                                'choice_text' => "un cours d’eau qui se jette dans un autre cours d’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un lac fermé",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une nappe profonde",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une vague océanique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une confluence est le lieu où…",
                        'marks' => 1,
                        'explanation' => "La confluence est la zone où deux cours d’eau se rencontrent pour former un écoulement commun.",
                        'choices' => [
                            [
                                'choice_text' => "deux cours d’eau se rejoignent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une rivière se transforme en glacier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un nuage devient un lac",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une nappe quitte l’aquifère",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la végétation d’un bassin versant peut-elle réduire les crues rapides ?",
                        'marks' => 1,
                        'explanation' => "La végétation intercepte une partie des précipitations, améliore l’infiltration et augmente la rugosité du sol, ce qui peut ralentir le ruissellement.",
                        'choices' => [
                            [
                                'choice_text' => "Elle favorise l’infiltration et ralentit une partie du ruissellement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle empêche toute précipitation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle transforme toute l’eau en vapeur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle augmente toujours le débit",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un canal construit en béton évacue l’eau plus rapidement qu’un sol végétalisé. Quel mécanisme explique cette différence ?",
                        'marks' => 1,
                        'explanation' => "Une surface imperméable réduit l’infiltration et accélère le transfert de l’eau vers l’aval, ce qui peut accentuer les pics de débit.",
                        'choices' => [
                            [
                                'choice_text' => "Le ruissellement est moins freiné et l’infiltration est réduite",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le béton absorbe plus d’eau que le sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le béton crée des précipitations",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La végétation augmente toujours la vitesse de l’eau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "À l’embouchure d’une rivière, l’eau du fleuve rejoint…",
                        'marks' => 1,
                        'explanation' => "L’embouchure est l’endroit où un cours d’eau atteint son exutoire final, souvent la mer, un océan ou un lac.",
                        'choices' => [
                            [
                                'choice_text' => "un lac ou l’océan selon le cours d’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "le manteau terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la haute atmosphère uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une faille profonde",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Précipitations, évaporation et bilan hydrique",
                'description' => "Interpréter des situations simples de budget hydrique et relier les flux d’eau.",
                'duration' => 19,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Sur un bassin versant, les précipitations annuelles sont de 800 mm et l’évapotranspiration de 500 mm, sans autre terme considéré. Le bilan disponible pour les écoulements et le stockage est de…",
                        'marks' => 1,
                        'explanation' => "Dans cette simplification, 800 - 500 = 300 mm restent disponibles pour le ruissellement, l’infiltration et les variations de stockage.",
                        'choices' => [
                            [
                                'choice_text' => "300 mm",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "1 300 mm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "500 mm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "800 mm",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une pluie de 20 mm signifie qu’une hauteur d’eau de 20 mm est tombée sur…",
                        'marks' => 1,
                        'explanation' => "Un cumul de pluie en millimètres correspond à une hauteur d’eau répartie sur une surface donnée. Il peut être converti en volume en tenant compte de la surface.",
                        'choices' => [
                            [
                                'choice_text' => "une unité de surface horizontale considérée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "20 m de profondeur partout",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "20 litres seulement dans tout le bassin",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la moitié du bassin uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quand l’évaporation augmente fortement sans apport supplémentaire d’eau, le stock d’eau disponible tend à…",
                        'marks' => 1,
                        'explanation' => "L’évaporation retire de l’eau du sol, des plans d’eau ou des surfaces humides et peut donc réduire le stock disponible.",
                        'choices' => [
                            [
                                'choice_text' => "diminuer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "augmenter automatiquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "rester identique dans tous les cas",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "devenir salé immédiatement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans un sol sec, la première pluie peut être en partie absorbée. Quelle conséquence est possible sur le ruissellement immédiat ?",
                        'marks' => 1,
                        'explanation' => "Une partie de l’eau pénètre dans le sol lorsque sa capacité d’infiltration n’est pas dépassée, ce qui peut limiter le ruissellement immédiat.",
                        'choices' => [
                            [
                                'choice_text' => "Il peut être plus faible que sur un sol déjà saturé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il devient toujours nul",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il augmente toujours",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il se transforme en précipitation",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Si un bassin reçoit 1 000 unités d’eau et en perd 700 par évapotranspiration, sans autres pertes, le bilan restant est de…",
                        'marks' => 1,
                        'explanation' => "Le bilan simplifié est 1 000 - 700 = 300 unités disponibles pour les autres composantes du budget hydrique.",
                        'choices' => [
                            [
                                'choice_text' => "300 unités",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "1 700 unités",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "700 unités",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "30 unités",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol saturé laisse moins de capacité pour infiltrer une pluie supplémentaire. Quelle conséquence est probable ?",
                        'marks' => 1,
                        'explanation' => "Lorsque les pores du sol sont déjà remplis d’eau, une pluie supplémentaire a davantage tendance à ruisseler si l’infiltration ne peut plus suivre l’apport.",
                        'choices' => [
                            [
                                'choice_text' => "Davantage de ruissellement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Moins d’écoulement en surface dans tous les cas",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une disparition de la pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une formation automatique de nappe profonde",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le vent peut-il accélérer l’évaporation d’une surface humide ?",
                        'marks' => 1,
                        'explanation' => "Le renouvellement de l’air au-dessus d’une surface humide peut favoriser le transfert de vapeur d’eau vers l’atmosphère, ce qui augmente l’évaporation dans certaines conditions.",
                        'choices' => [
                            [
                                'choice_text' => "Il renouvelle l’air au-dessus de la surface et peut favoriser le départ de vapeur d’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il transforme l’eau en roche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il refroidit toujours la surface",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il crée directement des gouttes de pluie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un bassin reçoit 600 mm de pluie et exporte 200 mm par les cours d’eau. Une partie de l’eau peut aussi…",
                        'marks' => 1,
                        'explanation' => "L’eau restante peut contribuer au stockage des sols, des nappes et de la neige, ou être reprise par l’évapotranspiration selon les conditions.",
                        'choices' => [
                            [
                                'choice_text' => "être stockée temporairement ou transférée par d’autres voies",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "disparaître sans aucun processus",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "devenir immédiatement du pétrole",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "être transformée en sel par la gravité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel facteur peut réduire le ruissellement sur une pente ?",
                        'marks' => 1,
                        'explanation' => "La végétation et la porosité du sol favorisent l’infiltration et ralentissent l’eau en surface, ce qui peut réduire le ruissellement.",
                        'choices' => [
                            [
                                'choice_text' => "Une bonne couverture végétale et un sol infiltrant",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une surface totalement imperméable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une forte saturation du sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un béton continu",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une station mesure 5 mm de pluie, puis aucune précipitation pendant plusieurs jours. Que peut-il arriver au stock d’eau du sol ?",
                        'marks' => 1,
                        'explanation' => "Sans nouvel apport, l’évapotranspiration peut retirer progressivement de l’eau du sol, réduisant son stock disponible.",
                        'choices' => [
                            [
                                'choice_text' => "Il peut diminuer sous l’effet de l’évapotranspiration",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il augmente forcément",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il reste identique quelles que soient les conditions",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il devient océanique",
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
                        'question' => "Une nappe est surexploitée pendant plusieurs années. Quel signe est particulièrement attendu ?",
                        'marks' => 1,
                        'explanation' => "Des prélèvements supérieurs à la recharge entraînent un déficit de stockage qui peut faire baisser durablement le niveau de la nappe.",
                        'choices' => [
                            [
                                'choice_text' => "Une baisse durable du niveau de la nappe",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une hausse continue du niveau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La disparition des précipitations",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La formation automatique d’un glacier",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une région côtière, une forte baisse d’une nappe peut favoriser l’intrusion d’eau de mer. Pourquoi ?",
                        'marks' => 1,
                        'explanation' => "Lorsque la nappe côtière est fortement abaissée, le contraste de pression entre eau douce et eau salée se modifie, ce qui peut favoriser l’intrusion saline.",
                        'choices' => [
                            [
                                'choice_text' => "La pression de l’eau douce souterraine diminue et l’eau salée peut progresser vers l’intérieur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La mer devient douce",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les précipitations deviennent salées partout",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le sol se transforme en roche volcanique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel aménagement favorise généralement la recharge locale des nappes en ville ?",
                        'marks' => 1,
                        'explanation' => "Des surfaces perméables ralentissent le ruissellement et permettent à une partie de l’eau de s’infiltrer, ce qui peut favoriser la recharge.",
                        'choices' => [
                            [
                                'choice_text' => "Des surfaces perméables qui permettent l’infiltration",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le recouvrement complet du sol par du béton",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La suppression des espaces végétalisés",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’évacuation immédiate de toute pluie par des canalisations",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi faut-il protéger les zones de recharge d’un aquifère ?",
                        'marks' => 1,
                        'explanation' => "Les zones de recharge sont des voies d’entrée vers la nappe. Une pollution à cet endroit peut donc contaminer le réservoir souterrain.",
                        'choices' => [
                            [
                                'choice_text' => "Parce que les polluants qui s’y infiltrent peuvent atteindre l’eau souterraine",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu’elles produisent les marées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’elles empêchent toutes les pluies",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’elles sont toujours situées en mer",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une rivière perd une partie de son eau vers le sous-sol dans une zone perméable. Quel phénomène est observé ?",
                        'marks' => 1,
                        'explanation' => "Dans une zone perméable, l’eau du cours d’eau peut pénétrer dans les sédiments et alimenter localement les réserves souterraines.",
                        'choices' => [
                            [
                                'choice_text' => "Une infiltration ou recharge locale du système souterrain",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une condensation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une marée montante",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une évaporation depuis le noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une source devient plus faible après plusieurs mois sans pluie. Quelle cause est cohérente ?",
                        'marks' => 1,
                        'explanation' => "Une période sèche réduit souvent la recharge et peut entraîner une baisse du niveau de la nappe, donc du débit de certaines sources.",
                        'choices' => [
                            [
                                'choice_text' => "La baisse de la recharge de la nappe",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une augmentation automatique de la fonte des glaciers",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une hausse du niveau marin uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La formation d’un nouveau bassin versant",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un puits devient impropre à la consommation après l’épandage d’un polluant en surface. Quel trajet est possible ?",
                        'marks' => 1,
                        'explanation' => "Un contaminant soluble peut traverser la zone non saturée avec l’eau d’infiltration puis atteindre la nappe si les conditions le permettent.",
                        'choices' => [
                            [
                                'choice_text' => "Le polluant s’est infiltré puis a atteint la nappe",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le polluant est descendu directement dans le noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le polluant a été transporté par les marées seulement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le sol l’a transformé en eau potable",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les nappes profondes peuvent-elles se recharger plus lentement que les nappes superficielles ?",
                        'marks' => 1,
                        'explanation' => "La recharge d’une nappe profonde implique souvent une circulation à travers des formations moins directement connectées à la surface, ce qui peut ralentir le transfert.",
                        'choices' => [
                            [
                                'choice_text' => "L’eau doit traverser des formations géologiques sur une distance et un temps plus importants",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles sont toujours pleines de magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles ne reçoivent jamais d’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles sont situées dans l’océan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux captages prélèvent l’eau d’un même aquifère. Une forte hausse de pompage dans le premier peut affecter le second parce que…",
                        'marks' => 1,
                        'explanation' => "Dans un aquifère connecté, une baisse de charge hydraulique autour d’un captage peut se propager et réduire la disponibilité d’eau à proximité.",
                        'choices' => [
                            [
                                'choice_text' => "les écoulements souterrains relient les volumes d’eau du même aquifère",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "les aquifères sont toujours étanches entre eux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le pompage modifie la météo mondiale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "l’eau devient automatiquement plus froide",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle mesure aide à gérer durablement une nappe ?",
                        'marks' => 1,
                        'explanation' => "Le suivi du niveau et des volumes prélevés permet d’identifier un éventuel déficit entre recharge et exploitation et d’adapter les usages.",
                        'choices' => [
                            [
                                'choice_text' => "Comparer les prélèvements à la recharge et suivre régulièrement le niveau d’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pomper toujours à la vitesse maximale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer les années sèches",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer toute mesure hydrologique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une baisse du niveau d’une nappe se stabilise après réduction des pompages. Que suggère cette observation ?",
                        'marks' => 1,
                        'explanation' => "La stabilisation après réduction des prélèvements montre que la pression exercée par les captages contribuait au déficit de stockage.",
                        'choices' => [
                            [
                                'choice_text' => "Les prélèvements étaient une cause importante du déficit précédent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La nappe ne reçoit jamais de recharge",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le climat est devenu océanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La pluie a cessé pour toujours",
                                'is_correct' => false,
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
                        'question' => "Quelle ressource constitue une part importante de l’eau douce accessible pour l’être humain ?",
                        'marks' => 1,
                        'explanation' => "Les eaux souterraines et les eaux de surface constituent des ressources directement mobilisées pour de nombreux usages, contrairement à la majeure partie de l’eau océanique.",
                        'choices' => [
                            [
                                'choice_text' => "Les eaux souterraines et les eaux de surface",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’eau des océans non dessalée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La totalité de la vapeur atmosphérique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le magma",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’eau douce est-elle considérée comme une ressource limitée à l’échelle humaine ?",
                        'marks' => 1,
                        'explanation' => "L’eau douce est renouvelable par le cycle de l’eau, mais sa disponibilité locale peut être limitée par le climat, les usages, la pollution et le faible renouvellement de certaines réserves.",
                        'choices' => [
                            [
                                'choice_text' => "Sa répartition est inégale et certaines réserves se renouvellent lentement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que l’eau disparaît chaque nuit",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que toutes les pluies tombent dans les déserts",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les océans sont entièrement gelés",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une région sèche, quelle pratique économise directement l’eau d’irrigation ?",
                        'marks' => 1,
                        'explanation' => "Une irrigation ciblée réduit les pertes inutiles par évaporation et ruissellement et apporte l’eau plus efficacement aux plantes.",
                        'choices' => [
                            [
                                'choice_text' => "L’irrigation ciblée près des racines et aux moments adaptés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’arrosage aux heures les plus chaudes sans contrôle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’irrigation de surfaces imperméables",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La fuite volontaire des canalisations",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La pollution d’une rivière peut limiter son usage même si son débit est important. Pourquoi ?",
                        'marks' => 1,
                        'explanation' => "Une ressource abondante en volume peut devenir inutilisable si elle contient des contaminants ou si sa qualité ne répond plus aux exigences de l’usage.",
                        'choices' => [
                            [
                                'choice_text' => "La qualité de l’eau compte autant que sa quantité pour de nombreux usages",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un grand débit rend toujours l’eau potable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La pollution augmente la salinité de toutes les nappes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les rivières ne transportent jamais de polluants",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel indicateur renseigne directement sur la quantité d’eau présente dans un cours d’eau à un instant donné ?",
                        'marks' => 1,
                        'explanation' => "Le débit quantifie le volume d’eau traversant une section du cours d’eau par unité de temps et reflète donc son écoulement à un moment donné.",
                        'choices' => [
                            [
                                'choice_text' => "Le débit",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le pH du sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La latitude",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La vitesse du vent",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les réservoirs d’eau peuvent-ils être importants dans une région connaissant des saisons contrastées ?",
                        'marks' => 1,
                        'explanation' => "Le stockage dans des réservoirs peut décaler dans le temps la disponibilité de l’eau entre périodes humides et sèches, même si cela ne crée pas de nouvelle eau.",
                        'choices' => [
                            [
                                'choice_text' => "Ils permettent de stocker temporairement de l’eau pour la redistribuer dans le temps",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils empêchent toute évaporation de l’atmosphère mondiale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils créent les précipitations",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils suppriment le cycle de l’eau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel usage consomme directement une quantité notable d’eau dans de nombreuses régions agricoles ?",
                        'marks' => 1,
                        'explanation' => "L’agriculture irriguée peut représenter une part importante des prélèvements d’eau douce dans de nombreuses régions.",
                        'choices' => [
                            [
                                'choice_text' => "L’irrigation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La lecture d’une carte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La mesure de la pression atmosphérique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’observation des étoiles",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une ressource en eau est surexploitée alors que les prélèvements augmentent chaque année. Quel risque simple apparaît ?",
                        'marks' => 1,
                        'explanation' => "Des prélèvements supérieurs au renouvellement réduisent le stock disponible et peuvent conduire à des niveaux de ressource plus faibles.",
                        'choices' => [
                            [
                                'choice_text' => "La diminution progressive du stock disponible",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une augmentation automatique des réserves",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La transformation de l’eau en pétrole",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La disparition des bassins versants",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la protection des captages est-elle importante pour l’eau potable ?",
                        'marks' => 1,
                        'explanation' => "Prévenir les contaminations autour des captages protège la qualité de l’eau avant les traitements et réduit les risques sanitaires.",
                        'choices' => [
                            [
                                'choice_text' => "Elle réduit le risque que des contaminants atteignent l’eau destinée à la consommation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle augmente la vitesse des courants océaniques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle fait monter le niveau marin",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle transforme les nitrates en oxygène par magie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle action diminue le gaspillage domestique d’eau ?",
                        'marks' => 1,
                        'explanation' => "Une fuite peut entraîner une perte continue d’eau. La réparer réduit directement le volume gaspillé.",
                        'choices' => [
                            [
                                'choice_text' => "Réparer rapidement une fuite",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Laisser couler un robinet inutilement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Augmenter la durée des douches sans raison",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Arroser les trottoirs chaque jour",
                                'is_correct' => false,
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
                        'question' => "Sur un hydrogramme simple, un pic de débit après une pluie correspond généralement à…",
                        'marks' => 1,
                        'explanation' => "Le pic traduit une augmentation du débit liée aux apports de précipitations, au ruissellement et aux conditions de stockage du bassin.",
                        'choices' => [
                            [
                                'choice_text' => "une réponse rapide du cours d’eau aux apports d’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une baisse obligatoire de la pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la disparition du bassin versant",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un changement de continent",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux bassins reçoivent la même pluie. Le bassin urbain présente un pic de débit plus élevé et plus rapide. Quelle différence peut l’expliquer ?",
                        'marks' => 1,
                        'explanation' => "Les surfaces imperméables limitent l’infiltration et accélèrent le transfert de l’eau vers les cours d’eau, favorisant des pics plus rapides.",
                        'choices' => [
                            [
                                'choice_text' => "Davantage de surfaces imperméables",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une absence totale de pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une altitude nécessairement plus basse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un océan plus salé",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Sur une carte topographique, l’écoulement d’un ruisseau suit généralement la direction…",
                        'marks' => 1,
                        'explanation' => "Sous l’effet de la gravité, l’eau s’écoule globalement des reliefs vers les zones plus basses.",
                        'choices' => [
                            [
                                'choice_text' => "de l’altitude la plus élevée vers l’altitude la plus faible",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "du bas vers le sommet sans exception",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des zones salées vers les montagnes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "du littoral vers le noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un graphique montre un débit de 50 m³/s à 8 h et 80 m³/s à 10 h. De combien le débit a-t-il augmenté ?",
                        'marks' => 1,
                        'explanation' => "La différence est 80 - 50 = 30 m³/s. Le débit a donc augmenté de 30 m³/s entre les deux mesures.",
                        'choices' => [
                            [
                                'choice_text' => "30 m³/s",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "130 m³/s",
                                'is_correct' => false,
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
                                'choice_text' => "20 mm",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "10 mm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "75 mm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "3 mm",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Sur un bassin, le débit augmente quelques heures après le début de la pluie. Le délai entre pluie et pic de débit est appelé de manière générale…",
                        'marks' => 1,
                        'explanation' => "Le temps de réponse décrit le délai entre l’événement pluvieux et la réaction hydrologique du bassin, souvent visible par la montée du débit.",
                        'choices' => [
                            [
                                'choice_text' => "temps de réponse du bassin",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "âge du bassin",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "temps de fossilisation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "salinité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un bassin forestier montre une montée de débit lente après une pluie, tandis qu’un bassin très urbanisé réagit rapidement. Quelle explication est cohérente ?",
                        'marks' => 1,
                        'explanation' => "La végétation et les sols non artificialisés peuvent stocker et infiltrer une partie de l’eau, ce qui ralentit l’arrivée aux cours d’eau.",
                        'choices' => [
                            [
                                'choice_text' => "La forêt favorise davantage l’infiltration et ralentit le transfert de l’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’urbanisation crée davantage de pluie partout",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les arbres rendent toujours les sols imperméables",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La forêt supprime la gravité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un débit passe de 100 à 60 m³/s pendant plusieurs jours sans nouvelle pluie. Que suggère cette baisse ?",
                        'marks' => 1,
                        'explanation' => "Sans nouvel apport majeur, le débit peut diminuer à mesure que le ruissellement cesse et que les stocks du bassin alimentent plus faiblement le cours d’eau.",
                        'choices' => [
                            [
                                'choice_text' => "Les apports au cours d’eau diminuent progressivement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le bassin reçoit forcément plus de pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le lit devient un lac",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La rivière devient automatiquement salée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Sur une carte, deux ruisseaux rejoignent une rivière principale. La zone drainée par l’ensemble de ces cours d’eau forme…",
                        'marks' => 1,
                        'explanation' => "Tous les terrains dont les eaux convergent vers le même exutoire constituent le bassin versant correspondant.",
                        'choices' => [
                            [
                                'choice_text' => "un bassin versant",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un aquifère captif uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un delta océanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une dune",
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
                        'question' => "Une commune connaît une sécheresse prolongée. Quelle mesure peut réduire la pression sur la ressource en eau ?",
                        'marks' => 1,
                        'explanation' => "Réduire les usages non essentiels et limiter les pertes diminue la demande quand la recharge est faible.",
                        'choices' => [
                            [
                                'choice_text' => "Réduire les usages non essentiels et améliorer l’efficacité des prélèvements",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Augmenter les fuites des réseaux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Arroser davantage les surfaces sans végétation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pomper sans suivre le niveau des nappes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après une longue pluie, une zone basse est inondée alors qu’un cours d’eau n’a pas encore débordé. Quelle cause est possible ?",
                        'marks' => 1,
                        'explanation' => "L’accumulation des eaux de ruissellement dans une dépression peut provoquer une inondation locale avant même un débordement du cours d’eau.",
                        'choices' => [
                            [
                                'choice_text' => "Les eaux de ruissellement se sont accumulées localement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La nappe a disparu",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La pluie s’est transformée en glace au sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le bassin versant a changé de continent",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une ville remplace un parking imperméable par une surface perméable. Quel effet hydrologique est généralement recherché ?",
                        'marks' => 1,
                        'explanation' => "Une surface perméable permet à une partie de l’eau de pénétrer dans le sol et peut ainsi limiter le ruissellement immédiat.",
                        'choices' => [
                            [
                                'choice_text' => "Augmenter l’infiltration et réduire une partie du ruissellement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Augmenter le débit de pointe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Empêcher toute recharge de nappe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer les précipitations",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un agriculteur note que sa parcelle reste saturée plus longtemps après les pluies. Quel risque agricole peut augmenter ?",
                        'marks' => 1,
                        'explanation' => "Un sol saturé contient moins d’air dans ses pores, ce qui peut réduire l’oxygénation des racines et perturber le développement des cultures.",
                        'choices' => [
                            [
                                'choice_text' => "L’asphyxie racinaire et certains problèmes de drainage",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La disparition de toute eau du sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La formation automatique de désert",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La baisse obligatoire de la salinité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une station d’épuration rejette une eau traitée dans une rivière. Quel point doit être surveillé ?",
                        'marks' => 1,
                        'explanation' => "Même traitée, une eau rejetée doit respecter des critères de qualité afin de limiter les impacts sur le milieu aquatique.",
                        'choices' => [
                            [
                                'choice_text' => "La qualité de l’effluent et son impact sur le milieu récepteur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couleur du ciel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La vitesse de rotation de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La taille des montagnes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une région utilise une nappe plus vite qu’elle ne se recharge pendant dix ans. Quel changement est le plus probable à long terme ?",
                        'marks' => 1,
                        'explanation' => "Un déficit chronique entre prélèvements et recharge conduit à une diminution progressive du stock d’eau souterraine.",
                        'choices' => [
                            [
                                'choice_text' => "Une baisse du niveau de la nappe",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une hausse permanente du niveau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une augmentation automatique des sources",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une transformation du sol en océan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les zones humides peuvent-elles contribuer à la régulation hydrologique ?",
                        'marks' => 1,
                        'explanation' => "Les zones humides peuvent retenir temporairement l’eau, ralentir les écoulements et favoriser certains échanges avec les eaux souterraines.",
                        'choices' => [
                            [
                                'choice_text' => "Elles peuvent stocker temporairement de l’eau et ralentir certains écoulements",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles empêchent toute évaporation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles transforment l’eau en roche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles n’interagissent jamais avec les nappes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après une pluie, une rivière traverse une vallée encaissée et déborde rapidement. Quel facteur topographique favorise la réaction rapide ?",
                        'marks' => 1,
                        'explanation' => "Une topographie encaissée peut concentrer rapidement les eaux ruisselées vers le lit principal, surtout lors de pluies intenses.",
                        'choices' => [
                            [
                                'choice_text' => "Une pente et des versants favorisant la concentration rapide des écoulements",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une très faible pente partout",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une absence de gravité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La présence d’un océan au sommet de la vallée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une région souhaite sécuriser son approvisionnement en eau. Quelle approche est hydrologiquement cohérente ?",
                        'marks' => 1,
                        'explanation' => "Une gestion durable combine connaissance des ressources, suivi des prélèvements, protection de la qualité et anticipation des périodes de faible recharge.",
                        'choices' => [
                            [
                                'choice_text' => "Diversifier les ressources, suivre les prélèvements et protéger les zones de recharge",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Dépendre d’une seule nappe surexploitée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer les années sèches",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Augmenter tous les prélèvements sans mesure",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un réservoir reçoit 90 unités d’eau et libère 70 unités sur une période, sans autre terme considéré. La variation de stockage est de…",
                        'marks' => 1,
                        'explanation' => "Le stockage varie de 90 - 70 = +20 unités. Le réservoir a donc gagné 20 unités d’eau sur la période.",
                        'choices' => [
                            [
                                'choice_text' => "+20 unités",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "-160 unités",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "+70 unités",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "-20 unités",
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
