<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class OceanographyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'oceanography')->firstOrFail();

        $quizzes = [
            [
                'title' => "Structure et grands domaines de l’océan",
                'description' => "Identifier les principales zones océaniques, la profondeur, la pression et les caractéristiques du milieu marin.",
                'duration' => 19,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Les océans couvrent approximativement quelle fraction de la surface terrestre ?",
                        'marks' => 1,
                        'explanation' => "Les océans et les mers couvrent environ 71 % de la surface de la Terre, ce qui explique leur rôle majeur dans le système climatique.",
                        'choices' => [
                            [
                                'choice_text' => "Environ 71 %",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Environ 10 %",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Environ 35 %",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Environ 95 %",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle est la zone la plus proche de la côte et généralement soumise à l’influence directe du continent ?",
                        'marks' => 1,
                        'explanation' => "La zone côtière correspond aux secteurs marins proches du littoral, fortement influencés par les apports continentaux et les échanges avec la terre.",
                        'choices' => [
                            [
                                'choice_text' => "La zone côtière",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La fosse abyssale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La dorsale médio-océanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La zone pélagique désigne principalement…",
                        'marks' => 1,
                        'explanation' => "Le domaine pélagique correspond à la colonne d’eau marine, par opposition au domaine benthique associé au fond.",
                        'choices' => [
                            [
                                'choice_text' => "la colonne d’eau au large, loin du fond et du littoral",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "uniquement le sédiment du fond",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la partie émergée des continents",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les eaux souterraines",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le terme benthique concerne…",
                        'marks' => 1,
                        'explanation' => "Le domaine benthique est associé au fond des mers et océans et aux organismes qui y vivent ou y sont liés.",
                        'choices' => [
                            [
                                'choice_text' => "les organismes et conditions associés au fond marin",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "les nuages au-dessus de l’océan",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les courants atmosphériques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la glace continentale uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle propriété augmente généralement avec la profondeur dans l’océan ?",
                        'marks' => 1,
                        'explanation' => "La pression augmente avec la profondeur car le poids de la colonne d’eau au-dessus devient plus important.",
                        'choices' => [
                            [
                                'choice_text' => "La pression",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La lumière disponible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La température dans tous les océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’agitation due aux vagues",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la lumière diminue-t-elle rapidement avec la profondeur ?",
                        'marks' => 1,
                        'explanation' => "L’eau absorbe et diffuse progressivement la lumière. La quantité de rayonnement disponible pour la photosynthèse diminue donc avec la profondeur.",
                        'choices' => [
                            [
                                'choice_text' => "L’eau absorbe et diffuse une partie du rayonnement solaire",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le fond produit de la lumière noire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le Soleil s’éteint sous 100 m",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La salinité crée une ombre solide",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La zone photique de l’océan est celle où…",
                        'marks' => 1,
                        'explanation' => "La zone photique reçoit suffisamment de lumière pour permettre une photosynthèse significative et constitue une zone essentielle à la production marine.",
                        'choices' => [
                            [
                                'choice_text' => "la lumière est suffisante pour permettre la photosynthèse",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la pression est maximale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "aucun organisme ne peut vivre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les vagues sont absentes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une grande profondeur océanique se caractérise généralement par…",
                        'marks' => 1,
                        'explanation' => "À grande profondeur, la lumière est très faible et la pression augmente fortement avec la profondeur.",
                        'choices' => [
                            [
                                'choice_text' => "une pression élevée et une faible disponibilité de lumière",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une forte lumière solaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des températures toujours supérieures à 30 °C",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une absence totale d’eau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le plancher océanique comprend notamment…",
                        'marks' => 1,
                        'explanation' => "Le relief sous-marin est varié : dorsales, plaines abyssales, fosses et autres structures occupent le plancher océanique.",
                        'choices' => [
                            [
                                'choice_text' => "des plaines abyssales, des dorsales et des fosses",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "uniquement des plages",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des chaînes de montagnes continentales émergées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des déserts de sable uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel terme désigne la profondeur de l’eau au-dessus d’un point donné du fond marin ?",
                        'marks' => 1,
                        'explanation' => "La bathymétrie décrit le relief et les profondeurs du fond marin ; la profondeur d’eau est une de ses mesures fondamentales.",
                        'choices' => [
                            [
                                'choice_text' => "La profondeur bathymétrique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La salinité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La magnitude",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La latitude",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La zone littorale peut recevoir des apports importants provenant des continents par…",
                        'marks' => 1,
                        'explanation' => "Les fleuves et le ruissellement apportent des eaux, des sels dissous, des nutriments et des sédiments vers les zones côtières.",
                        'choices' => [
                            [
                                'choice_text' => "les fleuves et le ruissellement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "le noyau terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la dérive des continents quotidienne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les fosses abyssales",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Salinité et propriétés de l’eau de mer",
                'description' => "Comprendre la salinité, sa variation et son influence sur la densité de l’eau.",
                'duration' => 21,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "La salinité de l’eau de mer correspond à…",
                        'marks' => 1,
                        'explanation' => "La salinité mesure la concentration globale en sels dissous dans l’eau de mer, exprimée selon les conventions en PSU ou en d’autres unités appropriées.",
                        'choices' => [
                            [
                                'choice_text' => "la quantité de sels dissous dans l’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la température de l’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la vitesse des vagues",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la profondeur de l’océan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle situation tend à augmenter la salinité d’une eau de surface ?",
                        'marks' => 1,
                        'explanation' => "L’évaporation retire de l’eau mais laisse la majorité des sels dissous, ce qui peut augmenter la salinité de la surface.",
                        'choices' => [
                            [
                                'choice_text' => "Une forte évaporation sans apport d’eau douce",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une pluie intense",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La fonte rapide de glace douce",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un grand apport fluvial",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un apport important d’eau douce par un fleuve peut…",
                        'marks' => 1,
                        'explanation' => "L’eau douce contient beaucoup moins de sels que l’eau de mer. Son apport peut donc diminuer la salinité près de l’embouchure.",
                        'choices' => [
                            [
                                'choice_text' => "diminuer localement la salinité des eaux côtières",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "augmenter toujours la salinité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "supprimer les marées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "créer une dorsale",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La salinité moyenne de l’eau de mer ouverte est d’environ…",
                        'marks' => 1,
                        'explanation' => "Une valeur de référence souvent utilisée pour l’océan ouvert est d’environ 35 g de sels dissous par kilogramme d’eau de mer, avec des variations régionales.",
                        'choices' => [
                            [
                                'choice_text' => "35 g de sels par kilogramme d’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "3,5 kg par kilogramme",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "350 g par litre de vapeur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "0 g dans les océans",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une mer très fermée et fortement évaporante, la salinité peut être élevée parce que…",
                        'marks' => 1,
                        'explanation' => "Une forte évaporation concentrant les sels, combinée à de faibles renouvellements d’eau douce, peut produire des salinités élevées.",
                        'choices' => [
                            [
                                'choice_text' => "l’évaporation dépasse les apports d’eau douce",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "les vagues fabriquent du sel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le fond devient du sel solide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la latitude disparaît",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La salinité influence notamment…",
                        'marks' => 1,
                        'explanation' => "La salinité modifie la densité de l’eau. Avec la température, elle intervient donc dans la structure et les mouvements des masses d’eau.",
                        'choices' => [
                            [
                                'choice_text' => "la densité de l’eau de mer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la couleur des continents",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la vitesse de rotation de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le nombre de marées par jour partout",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une eau froide et salée est généralement…",
                        'marks' => 1,
                        'explanation' => "Le refroidissement et l’augmentation de la salinité augmentent généralement la densité de l’eau de mer, toutes choses égales par ailleurs.",
                        'choices' => [
                            [
                                'choice_text' => "plus dense qu’une eau chaude et moins salée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "moins dense dans tous les cas",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "toujours plus légère que l’air",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "indépendante de la salinité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la salinité n’est-elle pas identique partout à la surface des océans ?",
                        'marks' => 1,
                        'explanation' => "Les échanges d’eau douce et le mélange marin varient selon les régions, ce qui crée des différences de salinité en surface.",
                        'choices' => [
                            [
                                'choice_text' => "Les bilans d’évaporation, précipitations, fonte des glaces et apports continentaux varient",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Tous les océans sont isolés",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le sel s’évapore avec l’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La Terre ne possède qu’un seul bassin",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une région reçoit beaucoup de pluie et peu d’évaporation. Quelle tendance locale de salinité est plausible ?",
                        'marks' => 1,
                        'explanation' => "Les précipitations ajoutent de l’eau douce tandis qu’une faible évaporation retire peu d’eau ; la salinité de surface peut donc diminuer.",
                        'choices' => [
                            [
                                'choice_text' => "Une baisse de la salinité de surface",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une hausse obligatoire de la salinité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Aucun changement possible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une transformation en eau douce pure",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel instrument peut être utilisé pour mesurer la conductivité liée à la salinité en océanographie ?",
                        'marks' => 1,
                        'explanation' => "La conductivité électrique de l’eau de mer est étroitement liée à sa salinité et peut être mesurée avec des capteurs océanographiques dédiés.",
                        'choices' => [
                            [
                                'choice_text' => "Un capteur de conductivité-salinité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un sismomètre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un pluviomètre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un thermomètre de sol",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Courants océaniques et circulation",
                'description' => "Relier vents, densité, courants, upwelling et redistribution de chaleur.",
                'duration' => 23,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Un courant océanique est principalement…",
                        'marks' => 1,
                        'explanation' => "Un courant correspond à un déplacement persistant ou organisé de masses d’eau, dû à des différences de densité, aux vents, à la rotation terrestre et à d’autres facteurs.",
                        'choices' => [
                            [
                                'choice_text' => "un déplacement organisé de masses d’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une vague isolée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une marée unique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un mouvement du fond marin",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les vents à la surface peuvent générer…",
                        'marks' => 1,
                        'explanation' => "Les vents exercent une force sur la surface de l’océan et contribuent à la mise en mouvement des eaux superficielles.",
                        'choices' => [
                            [
                                'choice_text' => "des courants de surface",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "des séismes sous-marins automatiquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des fosses océaniques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des marées uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les courants océaniques sont-ils importants pour le climat ?",
                        'marks' => 1,
                        'explanation' => "Les courants redistribuent l’énergie thermique et influencent les échanges entre l’océan et l’atmosphère.",
                        'choices' => [
                            [
                                'choice_text' => "Ils transportent de la chaleur et de l’eau entre différentes régions",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils empêchent l’évaporation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils suppriment les saisons",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils déplacent les continents en quelques jours",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un courant chaud transporte de l’eau depuis les tropiques vers une latitude plus élevée. Il contribue principalement à…",
                        'marks' => 1,
                        'explanation' => "Le transport d’eaux chaudes vers les hautes latitudes constitue un transfert de chaleur qui participe à la redistribution énergétique de la planète.",
                        'choices' => [
                            [
                                'choice_text' => "transférer de la chaleur vers des régions plus froides",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "refroidir toutes les régions traversées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "augmenter le relief sous-marin",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "supprimer les vents",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La circulation thermohaline est liée notamment à des différences de…",
                        'marks' => 1,
                        'explanation' => "Les différences de température et de salinité modifient la densité de l’eau et peuvent contribuer aux mouvements de grande échelle appelés circulation thermohaline.",
                        'choices' => [
                            [
                                'choice_text' => "température et de salinité, donc de densité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "couleur et de profondeur uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "marées et de vagues uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "longitude et de latitude seulement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une remontée d’eau froide riche en nutriments vers la surface est appelée…",
                        'marks' => 1,
                        'explanation' => "L’upwelling est une remontée d’eaux profondes, souvent froides et riches en nutriments, vers la surface.",
                        'choices' => [
                            [
                                'choice_text' => "upwelling",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "subduction continentale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "marnage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "érosion marine",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les zones d’upwelling sont-elles souvent très productives biologiquement ?",
                        'marks' => 1,
                        'explanation' => "Les nutriments remontés vers la zone photique peuvent soutenir la production du phytoplancton et, par chaîne alimentaire, une forte productivité.",
                        'choices' => [
                            [
                                'choice_text' => "Les eaux remontées apportent des nutriments à la zone éclairée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles contiennent toujours plus de sel que les océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles empêchent la lumière de pénétrer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles sont dépourvues d’organismes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une divergence des eaux de surface peut favoriser…",
                        'marks' => 1,
                        'explanation' => "Lorsque des eaux de surface s’écartent, des eaux plus profondes peuvent remonter pour compenser le déplacement, selon la configuration et les vents.",
                        'choices' => [
                            [
                                'choice_text' => "la remontée d’eaux profondes dans certaines régions",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la disparition des courants",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la baisse de toute salinité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la formation d’un volcan continental",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un courant côtier froid peut influencer le climat local en…",
                        'marks' => 1,
                        'explanation' => "Les eaux froides réduisent généralement la température de l’air proche et peuvent limiter l’évaporation, influençant ainsi les conditions côtières.",
                        'choices' => [
                            [
                                'choice_text' => "refroidissant l’air au-dessus de l’océan et en modifiant l’humidité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "créant automatiquement des cyclones",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "augmentant toujours les pluies",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "changeant la latitude",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel facteur n’est pas une cause directe classique des grands courants océaniques ?",
                        'marks' => 1,
                        'explanation' => "Les courants sont influencés par les vents, la densité de l’eau, la rotation terrestre et la configuration des bassins ; la fossilisation n’est pas un moteur de circulation.",
                        'choices' => [
                            [
                                'choice_text' => "La fossilisation des organismes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les vents",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les différences de densité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La rotation terrestre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Vagues, marées et tsunamis",
                'description' => "Distinguer les mouvements de surface, les marées et les tsunamis.",
                'duration' => 22,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Une vague à la surface de l’océan correspond principalement à…",
                        'marks' => 1,
                        'explanation' => "Une vague transporte surtout de l’énergie ; les particules d’eau effectuent des mouvements oscillatoires et les vagues peuvent se propager sur de grandes distances.",
                        'choices' => [
                            [
                                'choice_text' => "une oscillation de la surface liée au transfert d’énergie",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un déplacement permanent de toute l’eau jusqu’au rivage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un courant profond",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une marée annuelle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La cause la plus fréquente des vagues de surface est…",
                        'marks' => 1,
                        'explanation' => "Le vent transmet de l’énergie à la surface de l’océan et produit la majorité des vagues ordinaires.",
                        'choices' => [
                            [
                                'choice_text' => "le vent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "le champ magnétique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la rotation de la Lune uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les séismes continentaux",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un tsunami est généralement provoqué par…",
                        'marks' => 1,
                        'explanation' => "Un tsunami est souvent déclenché par un déplacement brutal de la colonne d’eau lors d’un séisme sous-marin, d’un glissement ou d’un autre événement majeur.",
                        'choices' => [
                            [
                                'choice_text' => "un déplacement brutal du fond marin, souvent lié à un séisme sous-marin",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une brise légère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une marée quotidienne normale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une pluie intense sur la mer",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Près du rivage, une vague peut devenir plus haute parce que…",
                        'marks' => 1,
                        'explanation' => "En arrivant en eau moins profonde, la base de la vague interagit davantage avec le fond, ce qui ralentit sa propagation et peut concentrer son énergie, augmentant sa hauteur.",
                        'choices' => [
                            [
                                'choice_text' => "la profondeur diminue et sa propagation est modifiée par le fond",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la salinité disparaît",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le vent s’arrête toujours",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la Terre accélère sa rotation",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La marée correspond principalement à…",
                        'marks' => 1,
                        'explanation' => "Les marées résultent principalement des interactions gravitationnelles de la Lune et du Soleil avec les océans et de la rotation de la Terre.",
                        'choices' => [
                            [
                                'choice_text' => "des variations périodiques du niveau de la mer liées surtout aux effets gravitationnels de la Lune et du Soleil",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une vague produite par le vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un courant permanent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une éruption sous-marine",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans de nombreuses régions côtières, on observe environ…",
                        'marks' => 1,
                        'explanation' => "De nombreuses côtes connaissent un régime semi-diurne avec environ deux pleines mers et deux basses mers par jour lunaire.",
                        'choices' => [
                            [
                                'choice_text' => "deux marées hautes et deux marées basses par jour lunaire",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une seule marée tous les mois",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "quatre marées hautes toutes les heures",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "aucune variation",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les marées de vive-eau se produisent lorsque…",
                        'marks' => 1,
                        'explanation' => "Lors des nouvelles lunes et pleines lunes, le Soleil, la Terre et la Lune sont approximativement alignés et les amplitudes de marée sont généralement plus fortes.",
                        'choices' => [
                            [
                                'choice_text' => "les effets gravitationnels du Soleil et de la Lune s’additionnent autour des alignements",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la Lune est toujours invisible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les vagues cessent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un courant froid arrive",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les marées de morte-eau sont associées à…",
                        'marks' => 1,
                        'explanation' => "Au premier et au dernier quartier, les directions des forces de marée sont davantage dissociées, ce qui réduit généralement l’amplitude des marées.",
                        'choices' => [
                            [
                                'choice_text' => "des positions où les effets de la Lune et du Soleil se compensent davantage",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "des séismes majeurs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des vagues de tempête",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une salinité maximale",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un tsunami peut-il devenir très dangereux près des côtes ?",
                        'marks' => 1,
                        'explanation' => "En eau peu profonde, la vitesse de propagation diminue et l’énergie peut se concentrer sur une hauteur d’eau plus faible, augmentant l’impact côtier.",
                        'choices' => [
                            [
                                'choice_text' => "La diminution de profondeur peut augmenter la hauteur de la vague et concentrer l’énergie",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les vagues perdent toute énergie en arrivant",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La marée arrête la vague",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le sel transforme la vague en mur",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle observation est typique d’une vague de vent ordinaire ?",
                        'marks' => 1,
                        'explanation' => "Une vague de vent se manifeste par des variations de la surface sous forme de crêtes et de creux se propageant à travers l’eau.",
                        'choices' => [
                            [
                                'choice_text' => "Des crêtes et creux qui se déplacent à la surface",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une baisse du niveau marin pendant plusieurs mois",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un courant profond stable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un déplacement du fond océanique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Relief du plancher océanique",
                'description' => "Reconnaître dorsales, plaines abyssales, fosses, marges et méthodes de cartographie.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Une dorsale médio-océanique correspond à…",
                        'marks' => 1,
                        'explanation' => "Les dorsales sont des reliefs sous-marins où du magma remonte et contribue à former de nouvelle lithosphère océanique.",
                        'choices' => [
                            [
                                'choice_text' => "une longue chaîne sous-marine associée à la création de lithosphère océanique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une fosse très profonde",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une plage continentale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un delta",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les plaines abyssales sont généralement…",
                        'marks' => 1,
                        'explanation' => "Les plaines abyssales sont de vastes surfaces profondes du plancher océanique, recouvertes de sédiments dans de nombreuses régions.",
                        'choices' => [
                            [
                                'choice_text' => "des zones relativement étendues et profondes du plancher océanique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "des zones littorales peu profondes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des volcans émergés",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des zones de marée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une fosse océanique est…",
                        'marks' => 1,
                        'explanation' => "Les fosses sont des dépressions étroites et très profondes, souvent situées au niveau des zones de subduction.",
                        'choices' => [
                            [
                                'choice_text' => "une dépression très profonde du plancher océanique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une dorsale étroite et élevée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un récif corallien",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un estuaire",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le relief sous-marin est cartographié principalement grâce à…",
                        'marks' => 1,
                        'explanation' => "La bathymétrie mesure et représente les profondeurs et le relief du fond marin à partir de différentes techniques, notamment acoustiques.",
                        'choices' => [
                            [
                                'choice_text' => "la bathymétrie",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la paléontologie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la météorologie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la pédologie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sonar permet de cartographier le fond marin en utilisant…",
                        'marks' => 1,
                        'explanation' => "Le sonar émet et reçoit des ondes sonores dont le temps de propagation permet d’estimer la distance jusqu’au fond marin.",
                        'choices' => [
                            [
                                'choice_text' => "des ondes sonores",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "des rayons gamma du Soleil",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des vents",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des échantillons de sol uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Si le temps aller-retour d’un signal sonar augmente, cela signifie généralement que…",
                        'marks' => 1,
                        'explanation' => "Un temps de trajet plus long indique généralement une plus grande distance entre le capteur et le fond, toutes choses égales par ailleurs.",
                        'choices' => [
                            [
                                'choice_text' => "le fond marin est plus éloigné",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "l’eau est plus salée uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les vagues sont plus hautes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la marée a disparu",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Des sédiments marins s’accumulent lentement sur le plancher océanique. Quelle source possible existe ?",
                        'marks' => 1,
                        'explanation' => "Les sédiments océaniques peuvent provenir de l’érosion continentale, des restes biologiques, du volcanisme et d’autres apports.",
                        'choices' => [
                            [
                                'choice_text' => "Des particules produites par l’érosion continentale ou par la production biologique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le noyau terrestre uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Des glaciers flottants uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La rotation de la Terre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Près d’une dorsale, la croûte océanique est généralement…",
                        'marks' => 1,
                        'explanation' => "La croûte océanique se forme au niveau des dorsales puis s’éloigne progressivement. L’âge augmente donc avec la distance à la dorsale.",
                        'choices' => [
                            [
                                'choice_text' => "plus jeune que loin de la dorsale",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "toujours plus ancienne que les continents",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "sans minéraux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "plus ancienne au centre de la dorsale",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le fond océanique n’est-il pas partout très ancien ?",
                        'marks' => 1,
                        'explanation' => "La création de lithosphère aux dorsales et son recyclage aux zones de subduction limitent l’âge maximal des fonds océaniques.",
                        'choices' => [
                            [
                                'choice_text' => "La lithosphère océanique est créée aux dorsales et recyclée dans certaines zones de subduction",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les océans fabriquent de la roche chaque jour sans destruction",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les vagues dissolvent toutes les roches",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les continents produisent toute la croûte",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel relief est directement associé à une marge continentale passive typique ?",
                        'marks' => 1,
                        'explanation' => "Une marge passive peut présenter un plateau continental relativement large avant la pente continentale et le domaine abyssal.",
                        'choices' => [
                            [
                                'choice_text' => "Un plateau continental en bordure du continent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une fosse au milieu du continent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une dorsale au-dessus des Alpes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un noyau de glace",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Profondeur, lumière et stratification",
                'description' => "Interpréter les changements de pression, température, densité et lumière avec la profondeur.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Le plateau continental est…",
                        'marks' => 1,
                        'explanation' => "Le plateau continental est le prolongement sous-marin peu profond du continent, avant la rupture de pente vers le domaine océanique plus profond.",
                        'choices' => [
                            [
                                'choice_text' => "la partie immergée et relativement peu profonde du continent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une fosse très profonde",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une dorsale volcanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la plaine abyssale",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La pente continentale relie principalement…",
                        'marks' => 1,
                        'explanation' => "La pente continentale constitue la transition relativement raide entre le plateau continental et le domaine profond de l’océan.",
                        'choices' => [
                            [
                                'choice_text' => "le plateau continental aux profondeurs océaniques",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la plage au sommet d’une montagne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "deux fosses océaniques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la surface de l’océan au noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un canyon sous-marin peut être parcouru par…",
                        'marks' => 1,
                        'explanation' => "Les courants de turbidité sont des écoulements chargés en sédiments qui peuvent se déplacer sur les pentes sous-marines et creuser ou alimenter des canyons.",
                        'choices' => [
                            [
                                'choice_text' => "des courants de turbidité transportant des sédiments",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "des courants atmosphériques uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des racines d’arbres",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des glaciers terrestres uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’eau profonde peut-elle être plus froide que l’eau de surface ?",
                        'marks' => 1,
                        'explanation' => "La lumière solaire chauffe surtout la couche supérieure. Les eaux profondes sont aussi liées à la circulation globale et à des eaux qui se sont refroidies en surface avant de s’enfoncer.",
                        'choices' => [
                            [
                                'choice_text' => "Elle est peu exposée au rayonnement solaire direct et provient parfois de régions où les eaux se refroidissent et s’enfoncent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le fond produit du froid",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La salinité crée du froid uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les vagues chauffent toujours les profondeurs",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle zone est la plus favorable à la photosynthèse marine ?",
                        'marks' => 1,
                        'explanation' => "La photosynthèse nécessite de la lumière. Elle est donc principalement limitée aux profondeurs éclairées de la zone photique.",
                        'choices' => [
                            [
                                'choice_text' => "La zone photique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La fosse abyssale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le manteau terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La zone hadale sombre uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un organisme benthique vit principalement…",
                        'marks' => 1,
                        'explanation' => "Les organismes benthiques vivent au contact du fond ou dans les sédiments marins, contrairement aux organismes pélagiques de la colonne d’eau.",
                        'choices' => [
                            [
                                'choice_text' => "sur ou dans le fond marin",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "dans l’atmosphère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "sur les sommets continentaux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "dans le noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les abysses correspondent à…",
                        'marks' => 1,
                        'explanation' => "Les abysses sont les domaines profonds de l’océan où la lumière solaire est très faible ou absente.",
                        'choices' => [
                            [
                                'choice_text' => "des profondeurs océaniques importantes, souvent plongées dans l’obscurité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la zone des plages",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la surface des lacs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les nappes phréatiques",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "À mesure que la profondeur augmente dans l’océan, la pression…",
                        'marks' => 1,
                        'explanation' => "La pression hydrostatique augmente avec le poids croissant de la colonne d’eau située au-dessus.",
                        'choices' => [
                            [
                                'choice_text' => "augmente",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "diminue jusqu’à zéro",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "reste exactement constante",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "change seulement lors des marées",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une plongée sous-marine à 100 m nécessite une attention particulière à la pression car…",
                        'marks' => 1,
                        'explanation' => "La pression de l’eau augmente rapidement avec la profondeur. À 100 m, elle est nettement supérieure à la pression atmosphérique de surface.",
                        'choices' => [
                            [
                                'choice_text' => "la pression y est plusieurs fois supérieure à celle de la surface",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la pression est identique à la surface",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "il n’y a plus d’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la salinité devient nulle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les océans stockent-ils beaucoup de chaleur ?",
                        'marks' => 1,
                        'explanation' => "La grande capacité thermique de l’eau permet à l’océan d’absorber et de stocker beaucoup d’énergie avec une variation de température relativement modérée.",
                        'choices' => [
                            [
                                'choice_text' => "L’eau possède une grande capacité thermique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’eau ne peut pas se réchauffer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les sels produisent de la chaleur en permanence",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les vagues arrêtent le rayonnement solaire",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une eau de surface très chaude est moins dense qu’une eau froide de même salinité. Que peut-elle faire dans une colonne stratifiée ?",
                        'marks' => 1,
                        'explanation' => "La température plus élevée diminue généralement la densité de l’eau. Une eau chaude peut donc rester au-dessus d’une eau froide plus dense.",
                        'choices' => [
                            [
                                'choice_text' => "Elle peut rester au-dessus de l’eau plus froide et plus dense",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle s’enfonce toujours",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle devient solide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle quitte l’océan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Lire des données océanographiques",
                'description' => "Analyser simplement profils, cartes, valeurs de salinité, profondeur et niveau marin.",
                'duration' => 21,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Un profil de température montre 24 °C en surface, puis 18 °C à 100 m et 8 °C à 1 000 m. Que constate-t-on ?",
                        'marks' => 1,
                        'explanation' => "Le profil montre clairement une diminution de température avec la profondeur dans la colonne d’eau considérée.",
                        'choices' => [
                            [
                                'choice_text' => "La température diminue avec la profondeur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La température augmente avec la profondeur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La salinité augmente automatiquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La profondeur n’a aucun effet",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un relevé indique une salinité de 37 près d’une zone très évaporante et 34 près d’un grand fleuve. Quelle interprétation est cohérente ?",
                        'marks' => 1,
                        'explanation' => "L’évaporation concentre les sels, tandis qu’un apport d’eau douce dilue localement l’eau de mer.",
                        'choices' => [
                            [
                                'choice_text' => "L’évaporation augmente la salinité et l’apport d’eau douce la diminue localement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le fleuve augmente toujours la salinité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’évaporation transforme le sel en vapeur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux valeurs doivent être identiques",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une carte montre des flèches d’un courant allant du sud vers le nord. Que représentent-elles ?",
                        'marks' => 1,
                        'explanation' => "Les flèches d’une carte de circulation indiquent généralement la direction du transport des masses d’eau.",
                        'choices' => [
                            [
                                'choice_text' => "La direction du déplacement des eaux",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La profondeur du fond",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La salinité directement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La hauteur des vagues",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un bathymètre mesure 4 000 m à un point et 500 m à un autre. Le premier point est…",
                        'marks' => 1,
                        'explanation' => "La différence est 4 000 - 500 = 3 500 m. Le premier point est donc 3 500 m plus profond.",
                        'choices' => [
                            [
                                'choice_text' => "plus profond de 3 500 m",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "plus profond de 500 m",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "moins profond de 3 500 m",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "à la même profondeur",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une bouée mesure des vagues de 2 m de hauteur pendant une tempête. Cette grandeur correspond à…",
                        'marks' => 1,
                        'explanation' => "La hauteur de vague correspond à la différence verticale entre le sommet de la crête et le creux adjacent.",
                        'choices' => [
                            [
                                'choice_text' => "la distance verticale entre une crête et un creux",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la profondeur de l’océan",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la salinité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la longueur du courant",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Sur un profil bathymétrique, une dépression étroite et très profonde correspond probablement à…",
                        'marks' => 1,
                        'explanation' => "Une dépression très profonde et étroite est caractéristique d’une fosse océanique, souvent associée à une zone de subduction.",
                        'choices' => [
                            [
                                'choice_text' => "une fosse océanique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un plateau continental",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une plage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une dorsale",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un graphique montre une hausse du niveau de la mer deux fois par jour environ. Quel phénomène décrit-il ?",
                        'marks' => 1,
                        'explanation' => "Des variations périodiques du niveau marin à l’échelle de plusieurs heures sont compatibles avec les marées.",
                        'choices' => [
                            [
                                'choice_text' => "Les marées",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les vagues de vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’upwelling",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La salinité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une station côtière observe deux pleines mers par jour lunaire. Quel régime est suggéré ?",
                        'marks' => 1,
                        'explanation' => "Deux pleines mers et deux basses mers par jour lunaire correspondent à un régime semi-diurne, courant sur de nombreuses côtes.",
                        'choices' => [
                            [
                                'choice_text' => "Un régime semi-diurne",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un régime sans marée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un régime annuel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un régime uniquement météorologique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un profil révèle une forte diminution de température sur une faible profondeur puis une variation plus faible. La zone de changement rapide est une…",
                        'marks' => 1,
                        'explanation' => "La thermocline est une couche où la température change rapidement avec la profondeur, séparant souvent des eaux de surface et des eaux plus profondes.",
                        'choices' => [
                            [
                                'choice_text' => "thermocline",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "fosse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "dorsale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "zone de marée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche d’eau devient plus dense après refroidissement et augmentation de salinité. Quel comportement est possible ?",
                        'marks' => 1,
                        'explanation' => "Une eau plus dense a tendance à s’enfoncer sous des eaux moins denses, ce qui participe à certaines composantes de la circulation océanique.",
                        'choices' => [
                            [
                                'choice_text' => "Elle peut s’enfoncer sous une eau moins dense",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle flotte nécessairement au-dessus",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle devient une vague",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle quitte l’océan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Cas pratiques en océanographie",
                'description' => "Appliquer les notions fondamentales à des situations côtières et océaniques réalistes.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Un littoral est exposé à une tempête et les vagues grossissent. Quel transfert d’énergie est surtout responsable ?",
                        'marks' => 1,
                        'explanation' => "Lors d’une tempête, des vents forts transmettent davantage d’énergie à l’océan et peuvent produire des vagues plus grandes.",
                        'choices' => [
                            [
                                'choice_text' => "Le vent transmet davantage d’énergie à la surface de la mer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le fond produit de l’énergie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La salinité double",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La Lune disparaît",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après un séisme sous-marin, une alerte au tsunami est diffusée. Quelle raison justifie cette alerte ?",
                        'marks' => 1,
                        'explanation' => "Un déplacement brutal du fond marin peut déplacer une grande masse d’eau et générer des ondes de tsunami qui atteignent ensuite les côtes.",
                        'choices' => [
                            [
                                'choice_text' => "Le séisme peut avoir déplacé brutalement la colonne d’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Tous les séismes créent des marées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les vagues ordinaires deviennent automatiquement des tsunamis",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La salinité change instantanément",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une côte située sous un courant froid présente une forte production marine près du rivage. Quelle combinaison peut l’expliquer ?",
                        'marks' => 1,
                        'explanation' => "Les zones d’upwelling remontent des eaux riches en nutriments vers la zone photique, ce qui peut stimuler fortement la production biologique.",
                        'choices' => [
                            [
                                'choice_text' => "Un upwelling apporte des nutriments vers la zone éclairée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une eau chaude bloque les nutriments",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La profondeur empêche toute photosynthèse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La salinité détruit le phytoplancton",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un fjord reçoit beaucoup d’eau douce à sa surface tandis que l’eau profonde reste salée. Quel phénomène peut créer une stratification ?",
                        'marks' => 1,
                        'explanation' => "Une différence de salinité crée une différence de densité entre les eaux. Cette stratification peut limiter le mélange vertical.",
                        'choices' => [
                            [
                                'choice_text' => "Des différences de densité liées notamment à la salinité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La fossilisation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les séismes quotidiens",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La disparition des courants",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une région océanique connaît une forte évaporation et peu de pluie. Quel changement est probable en surface ?",
                        'marks' => 1,
                        'explanation' => "Le déficit en eau douce combiné à une forte évaporation concentre les sels dissous et peut augmenter la salinité de surface.",
                        'choices' => [
                            [
                                'choice_text' => "Une salinité plus élevée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une salinité nulle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une température forcément plus basse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une disparition du courant",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une zone polaire, de l’eau de mer gèle. Le sel reste en grande partie dans l’eau liquide. Quel effet peut apparaître ?",
                        'marks' => 1,
                        'explanation' => "Lors de la formation de glace de mer, une grande partie des sels est rejetée dans l’eau liquide, ce qui peut augmenter sa salinité et sa densité.",
                        'choices' => [
                            [
                                'choice_text' => "Une augmentation de la salinité et de la densité de l’eau environnante",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une baisse automatique de salinité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La disparition de la gravité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une création de marée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un navire traverse une zone où les fonds passent de 200 m à 5 000 m sur une courte distance. Quelle structure sous-marine peut être rencontrée ?",
                        'marks' => 1,
                        'explanation' => "Une transition rapide entre faibles et grandes profondeurs est compatible avec une pente continentale et l’entrée dans le domaine océanique profond.",
                        'choices' => [
                            [
                                'choice_text' => "Une pente continentale marquée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un plateau continental parfaitement horizontal",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une plage émergée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un lac",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les cartes de courants utilisent-elles souvent des flèches ?",
                        'marks' => 1,
                        'explanation' => "Les flèches sont une convention simple pour montrer le sens de déplacement des masses d’eau sur une carte.",
                        'choices' => [
                            [
                                'choice_text' => "Pour représenter la direction du déplacement des eaux",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour montrer la profondeur exacte sans mesures",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour représenter la salinité uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour dater les fonds",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une zone reçoit beaucoup de pluie mais peu d’évaporation et se trouve près d’un grand fleuve. Quel effet combiné est plausible ?",
                        'marks' => 1,
                        'explanation' => "Les précipitations et les apports fluviaux ajoutent de l’eau douce tandis que la faible évaporation retire peu d’eau, ce qui favorise une salinité plus faible.",
                        'choices' => [
                            [
                                'choice_text' => "Une salinité de surface relativement faible",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une salinité forcément maximale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une absence d’eau douce",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une augmentation du relief",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi faut-il distinguer vagues, courants et marées ?",
                        'marks' => 1,
                        'explanation' => "Les vagues sont principalement des oscillations de surface, les courants des déplacements de masses d’eau et les marées des variations périodiques du niveau marin liées surtout à la gravitation.",
                        'choices' => [
                            [
                                'choice_text' => "Ils correspondent à des mouvements de l’océan de nature et d’échelle différentes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils sont exactement le même phénomène",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Seules les marées déplacent de l’énergie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les courants sont des roches",
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
