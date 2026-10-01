<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SoilScienceBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'soil-science')->firstOrFail();

        $quizzes = [
            [
                'title' => "Composition et fonctionnement général du sol",
                'description' => "Identifier les constituants du sol et comprendre le rôle de l’air, de l’eau, des minéraux et de la matière organique.",
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Un sol est principalement un mélange de…",
                        'marks' => 1,
                        'explanation' => "Le sol contient une phase minérale, de la matière organique, de l’eau et de l’air, dans des proportions variables selon le milieu.",
                        'choices' => [
                            [
                                'choice_text' => "particules minérales, matière organique, eau et air",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "magma, sel et glace uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "eau de mer et métal",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "sable pur et pétrole",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La matière organique du sol provient notamment…",
                        'marks' => 1,
                        'explanation' => "Les feuilles, racines mortes et autres résidus biologiques alimentent la matière organique du sol, qui se transforme progressivement sous l’action des organismes.",
                        'choices' => [
                            [
                                'choice_text' => "des débris et résidus d’organismes vivants",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "du magma refroidi uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "du noyau terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des cristaux de quartz uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel constituant occupe les espaces entre les particules du sol ?",
                        'marks' => 1,
                        'explanation' => "Les pores du sol peuvent contenir de l’air et de l’eau. Leur proportion varie selon l’humidité et la texture du sol.",
                        'choices' => [
                            [
                                'choice_text' => "L’air et l’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Uniquement du granite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Du magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Du métal liquide",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol riche en humus est généralement riche en…",
                        'marks' => 1,
                        'explanation' => "L’humus est une fraction organique du sol issue de la transformation de résidus végétaux et animaux et associée à la fertilité.",
                        'choices' => [
                            [
                                'choice_text' => "matière organique transformée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "métaux lourds uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "sable marin uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "roches fondues",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle propriété du sol permet aux racines et à l’eau de pénétrer entre les grains ?",
                        'marks' => 1,
                        'explanation' => "La porosité correspond à la proportion d’espaces vides dans le sol. Elle influence le stockage de l’eau et de l’air et les possibilités de circulation.",
                        'choices' => [
                            [
                                'choice_text' => "La porosité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La magnitude",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La salinité de l’océan",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La dureté du noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les organismes du sol sont-ils importants ?",
                        'marks' => 1,
                        'explanation' => "Bactéries, champignons, vers et autres organismes participent à la décomposition et au recyclage des éléments nutritifs.",
                        'choices' => [
                            [
                                'choice_text' => "Ils contribuent à la décomposition de la matière organique et au recyclage des nutriments",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils transforment le sol en magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils empêchent toute infiltration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils suppriment la matière minérale",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une forte accumulation de feuilles mortes à la surface d’un sol constitue surtout…",
                        'marks' => 1,
                        'explanation' => "La litière formée de débris végétaux constitue une source importante de matière organique qui alimente ensuite les processus du sol.",
                        'choices' => [
                            [
                                'choice_text' => "une source de matière organique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un horizon de roche magmatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un dépôt de sel marin",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un réseau de failles",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un sol contient-il généralement des pores ?",
                        'marks' => 1,
                        'explanation' => "L’arrangement des particules crée des espaces vides entre elles. Ces pores peuvent être occupés par de l’eau ou de l’air.",
                        'choices' => [
                            [
                                'choice_text' => "Les particules solides ne remplissent pas tout l’espace disponible",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le sol est toujours liquide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les pores sont des fissures de la croûte uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les plantes fabriquent des trous avec la lumière",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle fraction du sol est directement utilisée comme support minéral des racines ?",
                        'marks' => 1,
                        'explanation' => "La fraction minérale provient de l’altération des roches et fournit notamment les particules constituant la structure du sol.",
                        'choices' => [
                            [
                                'choice_text' => "La fraction minérale",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les nuages",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le magma",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol bien aéré contient une quantité appréciable de…",
                        'marks' => 1,
                        'explanation' => "L’aération du sol dépend de la présence de pores contenant de l’air. Elle est importante pour les racines et de nombreux organismes du sol.",
                        'choices' => [
                            [
                                'choice_text' => "pores remplis d’air",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "magma liquide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "eau de mer uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "gaz volcaniques chauds",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La décomposition des résidus végétaux contribue à…",
                        'marks' => 1,
                        'explanation' => "La décomposition transforme les résidus organiques et participe à la formation de l’humus et au recyclage des nutriments.",
                        'choices' => [
                            [
                                'choice_text' => "la formation et au renouvellement de la matière organique du sol",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la création de magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la suppression de l’eau des pores",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la formation des plaques tectoniques",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Horizons et formation des sols",
                'description' => "Lire un profil pédologique simple et comprendre les principaux processus de pédogenèse.",
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Dans un profil pédologique classique, quel horizon est généralement riche en matière organique en surface ?",
                        'marks' => 1,
                        'explanation' => "L’horizon A de nombreux sols de surface contient une proportion notable de matière organique mélangée à la fraction minérale.",
                        'choices' => [
                            [
                                'choice_text' => "L’horizon A",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’horizon C",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La roche mère non altérée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le manteau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "L’horizon O, lorsqu’il est présent, est principalement constitué de…",
                        'marks' => 1,
                        'explanation' => "L’horizon O correspond à une couverture organique de surface, comme une litière ou des matières organiques en décomposition.",
                        'choices' => [
                            [
                                'choice_text' => "matière organique à la surface du sol",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "roche mère massive",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "magma solidifié",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "argile profonde uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "L’horizon C d’un sol est généralement plus proche de…",
                        'marks' => 1,
                        'explanation' => "L’horizon C correspond souvent à des matériaux parentaux relativement peu transformés par les processus pédologiques.",
                        'choices' => [
                            [
                                'choice_text' => "la roche mère altérée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la surface végétale riche en humus",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "l’atmosphère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un horizon exclusivement organique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couleur sombre en surface peut signaler…",
                        'marks' => 1,
                        'explanation' => "La matière organique peut assombrir les horizons de surface, même si la couleur dépend aussi d’autres minéraux et conditions.",
                        'choices' => [
                            [
                                'choice_text' => "une forte teneur en matière organique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une présence obligatoire de basalte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une absence d’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un pH exactement égal à 7",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel processus contribue à la formation progressive d’un sol à partir d’une roche ?",
                        'marks' => 1,
                        'explanation' => "L’altération physique et chimique produit des particules et des minéraux secondaires, tandis que la matière organique s’accumule et transforme progressivement le profil.",
                        'choices' => [
                            [
                                'choice_text' => "L’altération de la roche et l’apport de matière organique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La fusion totale de la roche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La subduction obligatoire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La disparition de l’eau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un horizon B peut souvent être caractérisé par…",
                        'marks' => 1,
                        'explanation' => "L’horizon B est souvent une zone d’accumulation relative de matériaux, comme des argiles ou des composés mobilisés depuis les horizons supérieurs.",
                        'choices' => [
                            [
                                'choice_text' => "une accumulation de certains matériaux déplacés depuis les horizons supérieurs",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une absence totale de minéraux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "du magma liquide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des organismes exclusivement marins",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Si une couche de sol montre de plus en plus de matière organique vers la surface, cela illustre…",
                        'marks' => 1,
                        'explanation' => "Les horizons du sol se différencient sous l’effet de l’altération, du transfert de matière, de la matière organique et de l’activité biologique.",
                        'choices' => [
                            [
                                'choice_text' => "la différenciation des horizons pédologiques",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une activité volcanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une intrusion magmatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la création d’un océan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel élément du climat accélère souvent l’altération et la formation des sols en milieu chaud et humide ?",
                        'marks' => 1,
                        'explanation' => "La chaleur et l’humidité favorisent de nombreuses réactions d’altération et l’activité biologique, ce qui peut accélérer la pédogenèse.",
                        'choices' => [
                            [
                                'choice_text' => "L’eau disponible et les températures favorables aux réactions et à l’activité biologique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le froid extrême uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’absence totale de pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un air sans oxygène",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La profondeur et l’aspect des horizons varient d’un sol à l’autre. Pourquoi ?",
                        'marks' => 1,
                        'explanation' => "La formation des sols dépend de plusieurs facteurs, souvent résumés par le climat, les organismes, le relief, la roche mère et le temps.",
                        'choices' => [
                            [
                                'choice_text' => "Le climat, la roche mère, le relief, les organismes et le temps diffèrent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Tous les sols ont exactement la même histoire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le pH ne dépend jamais du milieu",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les plantes ne jouent aucun rôle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Sur un profil, une couche riche en racines et humus est au-dessus d’une couche plus claire et pauvre en matière organique. Quelle distinction simple peut-on faire ?",
                        'marks' => 1,
                        'explanation' => "La couche supérieure enrichie en matière organique correspond généralement à un horizon de surface, tandis que la couche plus pauvre est plus profonde.",
                        'choices' => [
                            [
                                'choice_text' => "Un horizon de surface et un horizon plus profond",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Deux couches de magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Deux océans superposés",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une faille et un volcan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Texture, porosité et structure",
                'description' => "Relier granulométrie, pores, circulation de l’eau et comportement physique du sol.",
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Un sol sableux est constitué de particules relativement…",
                        'marks' => 1,
                        'explanation' => "Le sable correspond à des particules minérales relativement grossières par rapport au limon et à l’argile.",
                        'choices' => [
                            [
                                'choice_text' => "grossières",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "toujours microscopiques comme l’argile",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "exclusivement organiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "liquides",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol argileux contient une proportion importante de…",
                        'marks' => 1,
                        'explanation' => "Les argiles sont constituées de particules minérales très fines, dont la grande surface spécifique influence la rétention d’eau.",
                        'choices' => [
                            [
                                'choice_text' => "particules très fines",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "galets uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "matière organique pure",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "graviers très grossiers uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel sol laisse généralement l’eau s’infiltrer rapidement, toutes choses égales par ailleurs ?",
                        'marks' => 1,
                        'explanation' => "Les espaces entre grains sableux favorisent souvent une infiltration rapide, tandis qu’un sol argileux compact peut être moins perméable.",
                        'choices' => [
                            [
                                'choice_text' => "Un sol sableux",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un sol argileux très compact",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un sol bétonné",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un sol totalement saturé",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel type de sol retient généralement mieux l’eau et les ions nutritifs qu’un sable grossier ?",
                        'marks' => 1,
                        'explanation' => "Les particules argileuses et la matière organique possèdent une forte capacité de rétention d’eau et d’ions par rapport aux matériaux grossiers.",
                        'choices' => [
                            [
                                'choice_text' => "Un sol contenant davantage d’argile et de matière organique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un sol entièrement constitué de graviers",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une dalle de béton",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une roche vitreuse",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une texture équilibrée contenant sable, limon et argile peut être favorable à l’agriculture parce que…",
                        'marks' => 1,
                        'explanation' => "Une texture équilibrée peut offrir un compromis entre drainage, stockage de l’eau et rétention des éléments nutritifs, selon sa composition précise.",
                        'choices' => [
                            [
                                'choice_text' => "elle combine drainage, réserve en eau et capacité de rétention selon ses proportions",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "elle empêche toute infiltration",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "elle est toujours stérile",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "elle contient nécessairement du sel",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le compactage du sol par des engins lourds peut réduire…",
                        'marks' => 1,
                        'explanation' => "Le compactage rapproche les particules et réduit les pores, ce qui limite généralement la circulation de l’air et l’infiltration de l’eau.",
                        'choices' => [
                            [
                                'choice_text' => "la porosité et l’infiltration",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la gravité terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la teneur en quartz de tous les sols",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la profondeur du noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après une pluie, un sol très compacté produit beaucoup de ruissellement. Quelle cause est cohérente ?",
                        'marks' => 1,
                        'explanation' => "Le compactage réduit l’espace poreux et la capacité d’infiltration, ce qui favorise une plus grande part d’eau en surface.",
                        'choices' => [
                            [
                                'choice_text' => "La réduction de l’infiltration",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’augmentation des pores",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La disparition de la pente",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La transformation de l’eau en vapeur dans le sol",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’argile peut-elle former des surfaces collantes lorsqu’elle est humide ?",
                        'marks' => 1,
                        'explanation' => "Les particules d’argile sont très fines et possèdent une grande surface spécifique, ce qui favorise les interactions avec l’eau et donne une texture collante lorsqu’elles sont humides.",
                        'choices' => [
                            [
                                'choice_text' => "Ses particules très fines interagissent fortement avec l’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu’elle contient toujours du pétrole",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’elle est constituée de sable grossier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’elle est liquide à l’état sec",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel constituant du sol contribue fortement à sa stabilité structurale ?",
                        'marks' => 1,
                        'explanation' => "La matière organique favorise l’agrégation des particules et, avec les organismes du sol, contribue à une structure plus stable.",
                        'choices' => [
                            [
                                'choice_text' => "La matière organique associée aux minéraux et aux organismes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le sel marin uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’air sans particules",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un agriculteur choisit un sol qui retient trop d’eau pour une culture sensible à l’excès d’humidité. Quel problème peut-il rencontrer ?",
                        'marks' => 1,
                        'explanation' => "Un drainage insuffisant maintient les pores remplis d’eau, ce qui limite l’air disponible pour les racines et peut provoquer des conditions asphyxiantes.",
                        'choices' => [
                            [
                                'choice_text' => "Un mauvais drainage et un manque d’oxygène pour les racines",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une disparition totale de l’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse obligatoire de la température",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une forte activité volcanique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Érosion et conservation des sols",
                'description' => "Reconnaître les mécanismes d’érosion et les pratiques élémentaires de protection.",
                'duration' => 23,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "L’érosion des sols correspond à…",
                        'marks' => 1,
                        'explanation' => "L’érosion retire et transporte des particules sous l’action de l’eau, du vent ou d’autres agents. Elle peut entraîner une perte de sol fertile.",
                        'choices' => [
                            [
                                'choice_text' => "l’enlèvement et le transport de particules du sol",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la formation de nouveaux minéraux uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "l’augmentation automatique de l’humus",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la photosynthèse des racines",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle pratique réduit généralement l’érosion sur une pente agricole ?",
                        'marks' => 1,
                        'explanation' => "La couverture végétale protège la surface contre l’impact des gouttes, ralentit le ruissellement et aide à retenir les particules.",
                        'choices' => [
                            [
                                'choice_text' => "Maintenir une couverture végétale",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Laisser le sol nu toute l’année",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Augmenter le travail du sol sur pente forte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer les haies et bandes enherbées",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une pluie intense tombe sur un sol nu en pente. Quel effet est probable ?",
                        'marks' => 1,
                        'explanation' => "Sur un sol nu et pentu, l’énergie de la pluie et le ruissellement peuvent détacher puis transporter davantage de particules.",
                        'choices' => [
                            [
                                'choice_text' => "Une augmentation du ruissellement et de l’érosion",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une formation immédiate d’humus",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une réduction garantie du transport des particules",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une disparition de la pluie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les racines peuvent limiter l’érosion parce qu’elles…",
                        'marks' => 1,
                        'explanation' => "Les racines renforcent l’agrégation et la stabilité du sol et réduisent le déplacement des particules par l’eau ou le vent.",
                        'choices' => [
                            [
                                'choice_text' => "aident à stabiliser les particules du sol",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "transforme toute l’eau en glace",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "suppriment la pente",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "produisent du sable",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une bande enherbée installée entre une parcelle et un cours d’eau sert notamment à…",
                        'marks' => 1,
                        'explanation' => "La végétation freine les écoulements et peut piéger une partie des particules emportées avant leur arrivée au cours d’eau.",
                        'choices' => [
                            [
                                'choice_text' => "ralentir le ruissellement et retenir des sédiments",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "augmenter la vitesse de l’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "sécher automatiquement la nappe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "créer un sol salé",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le vent peut éroder plus facilement un sol lorsque…",
                        'marks' => 1,
                        'explanation' => "Les particules fines et sèches sont facilement mobilisées par le vent lorsque la couverture végétale ou les résidus ne les protègent pas.",
                        'choices' => [
                            [
                                'choice_text' => "la surface est sèche, nue et constituée de particules fines",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la surface est dense en végétation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le sol est constamment couvert d’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les particules sont toutes cimentées",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le labour suivant exactement la ligne de plus grande pente peut augmenter…",
                        'marks' => 1,
                        'explanation' => "Les sillons orientés dans le sens de la pente peuvent canaliser l’eau et favoriser le ruissellement et l’érosion.",
                        'choices' => [
                            [
                                'choice_text' => "le transfert d’eau et de particules vers l’aval",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la teneur en argile du noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la pluviométrie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la salinité de l’océan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après une forte érosion, quel élément du sol agricole est souvent perdu en priorité ?",
                        'marks' => 1,
                        'explanation' => "L’érosion emporte souvent la couche superficielle qui concentre matière organique et nutriments, ce qui peut réduire la fertilité.",
                        'choices' => [
                            [
                                'choice_text' => "Une partie de l’horizon de surface riche en matière organique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le noyau terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La totalité des cailloux du sous-sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La vapeur d’eau atmosphérique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel phénomène est différent de l’érosion ?",
                        'marks' => 1,
                        'explanation' => "La formation d’humus est un processus de transformation de matière organique, alors que l’érosion implique l’enlèvement et le transport de matériaux.",
                        'choices' => [
                            [
                                'choice_text' => "La formation d’humus",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le transport de sédiments par l’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le décapage du sol par le vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le ravinement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pour réduire le risque d’érosion dans un verger en pente, quelle combinaison est la plus cohérente ?",
                        'marks' => 1,
                        'explanation' => "Ces pratiques réduisent l’énergie du ruissellement, stabilisent le sol et limitent le transport des particules.",
                        'choices' => [
                            [
                                'choice_text' => "Couverture végétale, haies ou bandes enherbées et gestion des écoulements",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Sol nu et irrigation intense sur pente",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Suppression de toute végétation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Labour systématique dans le sens de la pente",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "pH et propriétés chimiques",
                'description' => "Maîtriser les notions de pH et leur lien avec la disponibilité des nutriments.",
                'duration' => 19,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Le pH d’un sol mesure principalement…",
                        'marks' => 1,
                        'explanation' => "Le pH indique l’acidité ou l’alcalinité d’une solution du sol sur une échelle où 7 est neutre à 25 °C dans les conditions usuelles.",
                        'choices' => [
                            [
                                'choice_text' => "son degré d’acidité ou d’alcalinité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "sa teneur totale en sable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "sa température",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "sa profondeur",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol de pH 5 est…",
                        'marks' => 1,
                        'explanation' => "Un pH inférieur à 7 correspond à un milieu acide. Plus le pH est bas, plus l’acidité est forte sur cette échelle.",
                        'choices' => [
                            [
                                'choice_text' => "acide",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "neutre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "basique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "sans eau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol de pH 7 est considéré comme…",
                        'marks' => 1,
                        'explanation' => "Un pH égal à 7 est neutre dans le repère usuel à température ambiante.",
                        'choices' => [
                            [
                                'choice_text' => "neutre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "très acide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "très basique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "salé par définition",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le pH influence-t-il la fertilité du sol ?",
                        'marks' => 1,
                        'explanation' => "Le pH influence la solubilité et la forme chimique de nombreux éléments, donc leur disponibilité pour les racines et l’activité de certains organismes.",
                        'choices' => [
                            [
                                'choice_text' => "Il modifie la disponibilité de nombreux éléments nutritifs pour les plantes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il détermine directement la quantité de pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il fixe la pente du terrain",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il change la latitude",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol très acide peut limiter la croissance de certaines cultures parce que…",
                        'marks' => 1,
                        'explanation' => "Un pH très acide peut modifier la disponibilité des nutriments et augmenter la mobilité de certains éléments indésirables, selon le type de sol.",
                        'choices' => [
                            [
                                'choice_text' => "certains nutriments deviennent moins disponibles et certains éléments peuvent devenir toxiques",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "toutes les racines sont immédiatement détruites",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "l’eau ne peut plus entrer dans le sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le sol devient automatiquement salé",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle mesure est nécessaire avant de corriger le pH d’un sol agricole ?",
                        'marks' => 1,
                        'explanation' => "La correction du pH doit être raisonnée à partir d’une mesure du sol, car les doses et les produits dépendent de la situation.",
                        'choices' => [
                            [
                                'choice_text' => "Mesurer son pH",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Mesurer uniquement sa couleur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Mesurer la vitesse du vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Mesurer la marée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol calcaire a souvent un pH…",
                        'marks' => 1,
                        'explanation' => "La présence de carbonates tend à tamponner l’acidité et les sols calcaires sont souvent neutres à basiques.",
                        'choices' => [
                            [
                                'choice_text' => "neutre à basique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "toujours inférieur à 3",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "toujours exactement égal à 7",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "sans relation avec sa composition",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Ajouter de la matière organique peut améliorer un sol notamment en…",
                        'marks' => 1,
                        'explanation' => "La matière organique améliore souvent la structure, la rétention d’eau et l’activité biologique, même si son effet précis sur le pH dépend du matériau et du contexte.",
                        'choices' => [
                            [
                                'choice_text' => "augmentant la capacité de rétention et en favorisant l’activité biologique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "supprimant les pores",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "transformant le sol en sable pur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "abaissant toujours le pH à 2",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel indicateur n’est pas un substitut suffisant au pH pour diagnostiquer l’acidité d’un sol ?",
                        'marks' => 1,
                        'explanation' => "La couleur peut donner des indices mais ne permet pas à elle seule de quantifier correctement l’acidité. Une mesure de pH est nécessaire.",
                        'choices' => [
                            [
                                'choice_text' => "La couleur seule",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une mesure de pH en laboratoire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une mesure avec une méthode étalonnée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un échantillon analysé",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans un sol agricole, une fertilisation excessive peut poser problème parce que…",
                        'marks' => 1,
                        'explanation' => "Les excès d’azote ou de phosphore peuvent être lessivés ou ruisseler vers les milieux aquatiques et contribuer à leur déséquilibre.",
                        'choices' => [
                            [
                                'choice_text' => "des nutriments en excès peuvent être perdus vers l’eau et perturber les écosystèmes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "plus d’engrais améliore toujours la qualité de l’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les nutriments ne se déplacent jamais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les plantes absorbent toujours 100 % des apports",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Fertilité et nutrition des plantes",
                'description' => "Comprendre les grands éléments nutritifs et les pratiques favorisant la fertilité.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "La fertilité d’un sol dépend notamment…",
                        'marks' => 1,
                        'explanation' => "La fertilité agronomique résulte de plusieurs propriétés physiques, chimiques et biologiques du sol qui conditionnent la croissance des plantes.",
                        'choices' => [
                            [
                                'choice_text' => "des nutriments disponibles, de la matière organique, de la structure et de l’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "uniquement de sa couleur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "uniquement de la quantité de sable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "de la profondeur du noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel élément nutritif est souvent noté N dans les engrais ?",
                        'marks' => 1,
                        'explanation' => "N est le symbole utilisé pour l’azote, élément essentiel à la synthèse des protéines et de nombreuses molécules végétales.",
                        'choices' => [
                            [
                                'choice_text' => "L’azote",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le sodium uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le néon",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le nickel uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le phosphore est notamment important pour…",
                        'marks' => 1,
                        'explanation' => "Le phosphore intervient dans les transferts d’énergie cellulaire et plusieurs processus de croissance et de reproduction végétale.",
                        'choices' => [
                            [
                                'choice_text' => "le transfert d’énergie et le développement des plantes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la production de gravité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la formation des nuages",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la salinité des océans uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le potassium joue entre autres un rôle dans…",
                        'marks' => 1,
                        'explanation' => "Le potassium participe à la régulation de l’état hydrique des cellules et à diverses fonctions physiologiques des plantes.",
                        'choices' => [
                            [
                                'choice_text' => "la régulation hydrique et plusieurs fonctions physiologiques des plantes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la formation du noyau terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la production des marées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la création de la pluie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les mycorhizes peuvent-elles aider une plante ?",
                        'marks' => 1,
                        'explanation' => "Les symbioses mycorhiziennes peuvent étendre le réseau exploré par la plante et améliorer notamment l’accès à certains nutriments et à l’eau.",
                        'choices' => [
                            [
                                'choice_text' => "Certains champignons augmentent l’exploration du sol par les racines et facilitent l’acquisition de nutriments",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles remplacent entièrement les racines",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles empêchent toute absorption d’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles transforment les minéraux en magma",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol riche en matière organique et bien structuré peut retenir davantage d’eau sans être saturé en permanence. Pourquoi ?",
                        'marks' => 1,
                        'explanation' => "Une structure stable avec des pores de tailles variées permet de stocker de l’eau tout en conservant des espaces remplis d’air.",
                        'choices' => [
                            [
                                'choice_text' => "La structure crée une diversité de pores et la matière organique améliore la rétention",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La matière organique supprime les pores",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les racines ne contiennent jamais d’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le sol devient imperméable",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la rotation des cultures peut-elle être bénéfique au sol ?",
                        'marks' => 1,
                        'explanation' => "La rotation alterne les plantes et leurs besoins, peut diversifier les résidus et casser certains cycles de ravageurs et maladies.",
                        'choices' => [
                            [
                                'choice_text' => "Elle diversifie les prélèvements de nutriments et peut réduire certains problèmes biologiques",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle érode toujours plus le sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle empêche toute matière organique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle rend tous les sols salés",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une culture de légumineuses peut contribuer à l’azote du système grâce à…",
                        'marks' => 1,
                        'explanation' => "Les légumineuses hébergent souvent des bactéries symbiotiques capables de fixer l’azote atmosphérique, ce qui enrichit le système en azote utilisable après transformation.",
                        'choices' => [
                            [
                                'choice_text' => "des symbioses avec des bactéries fixatrices d’azote",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la production de sel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la fusion des minéraux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la suppression des micro-organismes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol pauvre en matière organique peut être amélioré par…",
                        'marks' => 1,
                        'explanation' => "Des apports organiques augmentent la matière organique et peuvent améliorer structure, rétention d’eau et activité biologique.",
                        'choices' => [
                            [
                                'choice_text' => "des apports de compost ou de résidus organiques adaptés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la suppression des végétaux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le compactage volontaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "l’érosion de la couche arable",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi faut-il éviter de fertiliser sans tenir compte des besoins de la culture ?",
                        'marks' => 1,
                        'explanation' => "Adapter les apports aux besoins limite les pertes de nutriments, protège les eaux et améliore l’efficacité agronomique.",
                        'choices' => [
                            [
                                'choice_text' => "Les apports excessifs coûtent inutilement et peuvent entraîner des pertes vers l’environnement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les plantes absorbent toujours tout",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le sol détruit automatiquement l’excès",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Plus d’azote diminue toujours les nitrates de l’eau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol reçoit plus de nutriments que la culture n’en prélève. Quelle conséquence est possible ?",
                        'marks' => 1,
                        'explanation' => "Un apport supérieur aux besoins peut laisser un surplus dans le sol, susceptible d’être accumulé ou perdu par lessivage et ruissellement.",
                        'choices' => [
                            [
                                'choice_text' => "Une accumulation temporaire ou des pertes de nutriments vers l’environnement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une disparition immédiate des nutriments",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse automatique du pH à 2",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une formation de fossiles",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Eau, lessivage et sols agricoles",
                'description' => "Analyser l’infiltration, le lessivage et les pertes de sol ou de nutriments.",
                'duration' => 21,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Un sol sous forêt reçoit moins d’impact direct des gouttes que le sol nu grâce notamment à…",
                        'marks' => 1,
                        'explanation' => "La couverture végétale et la litière interceptent les gouttes, protègent la surface et réduisent le détachement des particules.",
                        'choices' => [
                            [
                                'choice_text' => "la litière et à la végétation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "au magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "à l’absence de pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "au sel marin",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après un incendie, la végétation d’une pente est détruite. Lors des premières pluies, le risque d’érosion peut augmenter car…",
                        'marks' => 1,
                        'explanation' => "La disparition de la couverture végétale expose le sol à l’impact des pluies et réduit l’action stabilisatrice des racines.",
                        'choices' => [
                            [
                                'choice_text' => "le sol est moins protégé et le ruissellement peut emporter davantage de particules",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "le sol devient automatiquement fertile",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les racines deviennent plus nombreuses",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la pluie cesse d’atteindre le sol",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une agriculture sur pente utilise des terrasses. Leur rôle principal est de…",
                        'marks' => 1,
                        'explanation' => "Les terrasses diminuent la longueur effective des pentes et ralentissent l’eau, réduisant ainsi le transport des particules.",
                        'choices' => [
                            [
                                'choice_text' => "ralentir l’écoulement de l’eau et limiter l’érosion",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "augmenter la vitesse du ruissellement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "supprimer tous les microorganismes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "abaisser la latitude",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol montre des traces de ravinement après plusieurs épisodes de pluie. Le ravinement correspond à…",
                        'marks' => 1,
                        'explanation' => "Le ruissellement concentré peut creuser des rigoles et des chenaux dans le sol. C’est une forme d’érosion hydrique.",
                        'choices' => [
                            [
                                'choice_text' => "la formation de petits chenaux par l’érosion de l’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une accumulation d’humus",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un échange gazeux des racines",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un dépôt de pollen",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le lessivage désigne le transport vers le bas du profil de…",
                        'marks' => 1,
                        'explanation' => "L’eau d’infiltration peut entraîner des substances dissoutes vers les horizons plus profonds, phénomène appelé lessivage.",
                        'choices' => [
                            [
                                'choice_text' => "substances solubles avec l’eau d’infiltration",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "galets par le vent uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "magma vers la surface",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "racines par la gravité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une forte pluie après l’épandage d’azote sur un sol peut augmenter…",
                        'marks' => 1,
                        'explanation' => "Les nitrates sont solubles. Une partie peut être entraînée par l’eau d’infiltration vers les eaux souterraines ou les drains.",
                        'choices' => [
                            [
                                'choice_text' => "le risque de lessivage des nitrates",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la formation des fossiles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la salinité de l’océan uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la température du noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un sol couvert de paillage est-il moins exposé à l’érosion ?",
                        'marks' => 1,
                        'explanation' => "Le paillage constitue une couverture protectrice qui dissipe l’énergie des gouttes et ralentit l’écoulement en surface.",
                        'choices' => [
                            [
                                'choice_text' => "Le paillage protège la surface et ralentit l’impact des gouttes et du ruissellement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le paillage augmente toujours la pente",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il transforme l’eau en glace",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il supprime la matière organique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une parcelle sans végétation perd progressivement sa couche de surface riche en humus. Quel risque apparaît ?",
                        'marks' => 1,
                        'explanation' => "La couche de surface concentre une partie de la matière organique et des nutriments. Sa perte peut donc réduire la fertilité du sol.",
                        'choices' => [
                            [
                                'choice_text' => "Une baisse de fertilité et de capacité de rétention du sol",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une augmentation certaine des récoltes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une production de pétrole",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La formation immédiate d’un horizon organique plus épais",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "L’érosion éolienne peut être réduite par des haies parce qu’elles…",
                        'marks' => 1,
                        'explanation' => "Les haies réduisent la vitesse du vent et limitent le déplacement des particules fines en surface.",
                        'choices' => [
                            [
                                'choice_text' => "ralentissent le vent près du sol",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "augmentent la vitesse du vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "suppriment la matière organique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "créent une nappe phréatique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel choix protège le mieux un sol agricole pendant une période où la parcelle n’est pas cultivée ?",
                        'marks' => 1,
                        'explanation' => "Un couvert végétal ou des résidus protègent le sol contre l’érosion, limitent l’impact des pluies et peuvent contribuer au maintien de la matière organique.",
                        'choices' => [
                            [
                                'choice_text' => "Un couvert végétal ou des résidus de culture adaptés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un sol totalement nu",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un labour répété sans végétation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une irrigation excessive",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Cas pratiques de gestion des sols",
                'description' => "Appliquer les concepts de pédologie à des situations agricoles et environnementales.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Un agriculteur observe une croûte en surface après de fortes pluies. Quelle conséquence peut apparaître ?",
                        'marks' => 1,
                        'explanation' => "Une croûte superficielle peut réduire les pores à la surface et limiter l’entrée de l’eau, favorisant le ruissellement lors d’épisodes intenses.",
                        'choices' => [
                            [
                                'choice_text' => "Une diminution de l’infiltration et une hausse du ruissellement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une augmentation de la porosité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une formation automatique d’humus",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une disparition de la pluie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un test montre un sol de pH 8,2 contenant beaucoup de carbonates. Quel type de sol décrit-on ?",
                        'marks' => 1,
                        'explanation' => "Un pH de 8,2 est supérieur à 7 et indique un sol basique. La présence de carbonates est cohérente avec cette tendance.",
                        'choices' => [
                            [
                                'choice_text' => "Un sol alcalin ou basique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un sol fortement acide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un sol sans minéraux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un sol nécessairement salé",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une parcelle a beaucoup de matière organique mais reste compacte sous les passages répétés de tracteurs. Quelle amélioration est prioritaire ?",
                        'marks' => 1,
                        'explanation' => "La matière organique ne compense pas toujours un compactage important. Réduire le passage des engins et favoriser la restructuration du sol améliore les pores et l’infiltration.",
                        'choices' => [
                            [
                                'choice_text' => "Réduire le compactage et améliorer la structure du sol",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ajouter uniquement plus d’engrais azoté",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer les racines",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Augmenter la circulation des engins",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol sableux se dessèche rapidement après plusieurs jours sans pluie. Quelle propriété l’explique ?",
                        'marks' => 1,
                        'explanation' => "Les sols sableux sont souvent très drainants. L’eau circule rapidement dans les gros pores et une moindre quantité reste stockée contre les particules.",
                        'choices' => [
                            [
                                'choice_text' => "Ses gros pores favorisent un drainage rapide et stockent moins d’eau utilisable",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les sables retiennent toujours plus d’eau que les argiles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le sable ne possède aucun pore",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le sable produit de la chaleur",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol agricole perd progressivement ses nutriments lors de pluies répétées. Quel processus peut contribuer à cette perte ?",
                        'marks' => 1,
                        'explanation' => "L’eau qui s’infiltre peut entraîner certains ions dissous vers les horizons profonds ou les eaux souterraines.",
                        'choices' => [
                            [
                                'choice_text' => "Le lessivage de substances solubles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La fossilisation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La marée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La tectonique des plaques",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une culture présente des feuilles jaunâtres et pousse mal. Avant de conclure à une carence précise, quelle démarche est raisonnable ?",
                        'marks' => 1,
                        'explanation' => "Les symptômes peuvent avoir plusieurs causes. Une analyse du sol et du système de culture permet d’éviter un diagnostic trop rapide.",
                        'choices' => [
                            [
                                'choice_text' => "Analyser le sol et considérer aussi l’eau, les racines et les autres facteurs de culture",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ajouter tous les engrais possibles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer toute irrigation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Mesurer uniquement la couleur du sol",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol est très riche en argile et reste humide longtemps. Pour une plante sensible à l’excès d’eau, quelle amélioration peut aider ?",
                        'marks' => 1,
                        'explanation' => "Améliorer la structure et le drainage favorise des pores d’air et réduit la durée de saturation autour des racines.",
                        'choices' => [
                            [
                                'choice_text' => "Améliorer le drainage et éviter le compactage",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ajouter davantage d’argile",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer toute matière organique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Irriguer davantage",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une parcelle en pente est cultivée selon des courbes de niveau. Quel objectif est recherché ?",
                        'marks' => 1,
                        'explanation' => "Les aménagements suivant les courbes de niveau réduisent la concentration de l’eau dans le sens de la pente et peuvent retenir une partie des sédiments.",
                        'choices' => [
                            [
                                'choice_text' => "Ralentir le ruissellement et limiter l’érosion",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Accélérer l’eau vers l’aval",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Créer plus de pente",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer toute infiltration",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sol riche en humus attire de nombreux organismes décomposeurs. Pourquoi cela peut-il être utile ?",
                        'marks' => 1,
                        'explanation' => "Les organismes décomposeurs participent au recyclage de la matière organique et libèrent progressivement des éléments utilisables par les plantes.",
                        'choices' => [
                            [
                                'choice_text' => "Ils contribuent à transformer et recycler la matière organique et les nutriments",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils suppriment l’air du sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils empêchent les racines de pousser",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils rendent le sol immédiatement rocheux",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une commune veut préserver les sols de ses terres agricoles. Quelle stratégie combine plusieurs principes de conservation ?",
                        'marks' => 1,
                        'explanation' => "Une combinaison de couverture, gestion du trafic et fertilisation raisonnée protège la structure, limite l’érosion et réduit les pertes de nutriments.",
                        'choices' => [
                            [
                                'choice_text' => "Maintenir la couverture du sol, limiter le compactage et raisonner les apports",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Laisser les sols nus et labourer dans le sens de la pente",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Augmenter le ruissellement et les engrais",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer toute végétation entre les cultures",
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
