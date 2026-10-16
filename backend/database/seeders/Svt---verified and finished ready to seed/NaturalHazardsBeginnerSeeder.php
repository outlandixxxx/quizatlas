<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class NaturalHazardsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'natural-hazards')->firstOrFail();

        $quizzes = [
            [
                'title' => "Séismes : mécanismes et vocabulaire",
                'description' => "Maîtriser les notions de foyer, épicentre, magnitude, intensité et ondes sismiques.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Qu’est-ce qui provoque un séisme ?",
                        'explanation' => "Un séisme résulte d’une rupture ou d’un glissement brutal de roches, qui libère de l’énergie sous forme d’ondes sismiques.",
                        'choices' => [
                            ['choice_text' => "Une forte hausse de la température de l’air", 'is_correct' => false],
                            ['choice_text' => "Une libération d’énergie dans la Terre", 'is_correct' => true],
                            ['choice_text' => "Un déplacement de l’eau des océans", 'is_correct' => false],
                            ['choice_text' => "Une variation du champ magnétique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les sismologues cherchent le foyer d’un séisme. Où se situe-t-il ?",
                        'explanation' => "Le foyer, ou hypocentre, est le point en profondeur où démarre la rupture.",
                        'choices' => [
                            ['choice_text' => "En profondeur, là où la rupture commence", 'is_correct' => true],
                            ['choice_text' => "À la surface, là où les dégâts sont les plus forts", 'is_correct' => false],
                            ['choice_text' => "Au sommet du relief le plus proche", 'is_correct' => false],
                            ['choice_text' => "Dans l’océan le plus proche de la faille", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur une carte, un séisme est repéré par son épicentre. De quoi s’agit-il ?",
                        'explanation' => "L’épicentre est la projection du foyer sur la surface ; ce n’est pas forcément l’endroit où les dégâts sont maximaux.",
                        'choices' => [
                            ['choice_text' => "Du point de la surface où les dégâts sont les plus grands", 'is_correct' => false],
                            ['choice_text' => "Du point le plus profond atteint par la rupture", 'is_correct' => false],
                            ['choice_text' => "Du point de la surface situé à la verticale du foyer", 'is_correct' => true],
                            ['choice_text' => "Du centre de la faille sur toute sa longueur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les ondes P sont qualifiées de « primaires ». Que signifie ce nom ?",
                        'explanation' => "Les ondes P sont les plus rapides : elles arrivent en premier aux stations, d’où leur nom.",
                        'choices' => [
                            ['choice_text' => "Ce sont les ondes qui causent le plus de dégâts", 'is_correct' => false],
                            ['choice_text' => "Ce sont les ondes qui voyagent à la surface de la mer", 'is_correct' => false],
                            ['choice_text' => "Ce sont les ondes les plus lentes d’un séisme", 'is_correct' => false],
                            ['choice_text' => "Ce sont les premières ondes enregistrées après un séisme", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "À travers quel type de milieu les ondes S ne se propagent-elles pas ?",
                        'explanation' => "Les ondes S cisaillent la matière, ce qu’un liquide ne supporte pas : elles ne le traversent pas.",
                        'choices' => [
                            ['choice_text' => "Un liquide", 'is_correct' => true],
                            ['choice_text' => "Un solide rigide", 'is_correct' => false],
                            ['choice_text' => "La croûte continentale", 'is_correct' => false],
                            ['choice_text' => "Le manteau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une station du réseau sismique enregistre les mouvements du sol. Quel instrument utilise-t-elle ?",
                        'explanation' => "Un sismomètre enregistre les mouvements du sol et permet d’identifier l’arrivée des différentes ondes.",
                        'choices' => [
                            ['choice_text' => "Un pluviomètre", 'is_correct' => false],
                            ['choice_text' => "Un sismomètre", 'is_correct' => true],
                            ['choice_text' => "Un gravimètre", 'is_correct' => false],
                            ['choice_text' => "Un marégraphe", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un séisme est annoncé avec une magnitude de 5,8. Qu’indique ce nombre ?",
                        'explanation' => "La magnitude caractérise la source du séisme ; les dégâts dépendent aussi de la distance, du sol et des constructions.",
                        'choices' => [
                            ['choice_text' => "Le nombre de bâtiments détruits dans la ville touchée", 'is_correct' => false],
                            ['choice_text' => "La profondeur à laquelle la faille a rompu", 'is_correct' => false],
                            ['choice_text' => "La taille du séisme à sa source", 'is_correct' => true],
                            ['choice_text' => "La durée des secousses ressenties en surface", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Après un séisme, des murs se fissurent dans une ville proche de l’épicentre, alors que les habitants d’une ville lointaine sentent à peine les secousses. Quelle grandeur décrit cette différence ?",
                        'explanation' => "L’intensité décrit les effets observés en un lieu donné ; elle varie d’une ville à l’autre pour un même séisme.",
                        'choices' => [
                            ['choice_text' => "La magnitude", 'is_correct' => false],
                            ['choice_text' => "L’intensité", 'is_correct' => true],
                            ['choice_text' => "La fréquence des ondes", 'is_correct' => false],
                            ['choice_text' => "La profondeur du foyer", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Où se produisent la plupart des séismes ?",
                        'explanation' => "Les plaques bougent les unes par rapport aux autres : les contraintes s’accumulent le long de leurs limites, où les roches finissent par rompre.",
                        'choices' => [
                            ['choice_text' => "Près des limites entre plaques tectoniques", 'is_correct' => true],
                            ['choice_text' => "Au centre des plaques, loin de toute limite", 'is_correct' => false],
                            ['choice_text' => "Surtout sous les océans, loin des continents", 'is_correct' => false],
                            ['choice_text' => "Près des grands déserts", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Après un séisme de magnitude 6, plusieurs secousses plus petites se produisent dans la même région pendant des jours. Comment les appelle-t-on ?",
                        'explanation' => "Les séismes plus petits qui suivent un séisme principal sont appelés répliques.",
                        'choices' => [
                            ['choice_text' => "Des précurseurs", 'is_correct' => false],
                            ['choice_text' => "Des tsunamis", 'is_correct' => false],
                            ['choice_text' => "Des failles", 'is_correct' => false],
                            ['choice_text' => "Des répliques", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Deux stations enregistrent la même onde P : A à 100 km de l’épicentre, B à 400 km. Laquelle l’enregistre la première ?",
                        'explanation' => "L’onde met du temps à parcourir la distance : la station la plus proche la reçoit d’abord.",
                        'choices' => [
                            ['choice_text' => "La station B, car le séisme y est plus fort", 'is_correct' => false],
                            ['choice_text' => "Les deux au même instant", 'is_correct' => false],
                            ['choice_text' => "Ni l’une ni l’autre n’enregistre l’onde P", 'is_correct' => false],
                            ['choice_text' => "La station A, la plus proche", 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Volcans et éruptions",
                'description' => "Identifier les principaux types de volcanisme, les produits émis et les bases de la surveillance.",
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Le Piton de la Fournaise, à La Réunion, émet surtout des coulées de lave fluides, sans grandes explosions. De quel type de volcan s’agit-il ?",
                        'explanation' => "Un volcan effusif émet surtout de la lave fluide, qui s’écoule sans projections violentes.",
                        'choices' => [
                            ['choice_text' => "D’un volcan effusif", 'is_correct' => true],
                            ['choice_text' => "D’un volcan explosif", 'is_correct' => false],
                            ['choice_text' => "D’un volcan éteint", 'is_correct' => false],
                            ['choice_text' => "D’un volcan de boue", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quels produits un volcan explosif projette-t-il ?",
                        'explanation' => "Les éruptions explosives fragmentent le magma : cendres, projections et nuées ardentes dangereuses.",
                        'choices' => [
                            ['choice_text' => "Surtout de longues coulées de lave fluide et lente", 'is_correct' => false],
                            ['choice_text' => "Des cendres, des blocs et des nuées ardentes", 'is_correct' => true],
                            ['choice_text' => "De l’eau liquide et des sédiments marins", 'is_correct' => false],
                            ['choice_text' => "Des gaz seuls, sans cendres ni blocs", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le magma qui atteint la surface devient…",
                        'explanation' => "Le magma s’appelle lave lorsqu’il est émis à la surface de la Terre.",
                        'choices' => [
                            ['choice_text' => "du sédiment", 'is_correct' => false],
                            ['choice_text' => "du minerai", 'is_correct' => false],
                            ['choice_text' => "de la lave", 'is_correct' => true],
                            ['choice_text' => "de la cendre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un magma très visqueux piège les gaz qu’il contient. Quelle conséquence est probable ?",
                        'explanation' => "Les gaz s’échappent mal d’un magma visqueux : la pression monte, et l’éruption devient explosive.",
                        'choices' => [
                            ['choice_text' => "Une coulée de lave rapide et fluide", 'is_correct' => false],
                            ['choice_text' => "Une éruption sans émission de gaz", 'is_correct' => false],
                            ['choice_text' => "Un refroidissement immédiat du volcan", 'is_correct' => false],
                            ['choice_text' => "Une éruption plus explosive", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un observatoire note plus de séismes locaux et un gonflement du volcan. Que cela peut-il annoncer ?",
                        'explanation' => "Plus de séismes et des déformations signalent souvent une remontée de magma, sans garantie qu’une éruption suivra.",
                        'choices' => [
                            ['choice_text' => "Une extinction prochaine du volcan", 'is_correct' => false],
                            ['choice_text' => "Un glissement de terrain à l’autre bout du pays", 'is_correct' => false],
                            ['choice_text' => "Un changement de la direction des vents", 'is_correct' => false],
                            ['choice_text' => "Une remontée de magma, parfois avant une éruption", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une lave basaltique est issue d’un magma pauvre en silice. Comment s’écoule-t-elle ?",
                        'explanation' => "Les magmas pauvres en silice donnent des laves assez fluides, qui coulent facilement sur de longues distances.",
                        'choices' => [
                            ['choice_text' => "En pâte épaisse qui avance à peine", 'is_correct' => false],
                            ['choice_text' => "Plutôt fluide", 'is_correct' => true],
                            ['choice_text' => "En blocs gelés dès la sortie", 'is_correct' => false],
                            ['choice_text' => "En fines cendres dispersées par le vent", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "En randonnée, Hassan arrive au sommet d’un volcan et voit une grande dépression au bord escarpé. De quoi s’agit-il ?",
                        'explanation' => "Le cratère est la dépression située au sommet ou autour du conduit par lequel le magma sort.",
                        'choices' => [
                            ['choice_text' => "D’une faille", 'is_correct' => false],
                            ['choice_text' => "D’une gorge creusée par une rivière", 'is_correct' => false],
                            ['choice_text' => "D’un cratère", 'is_correct' => true],
                            ['choice_text' => "D’un glacier", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une coulée pyroclastique dévale la pente d’un volcan à grande vitesse. Qu’est-ce qui la compose ?",
                        'explanation' => "C’est un mélange dense et brûlant de gaz et de particules volcaniques, capable d’avancer très vite.",
                        'choices' => [
                            ['choice_text' => "De l’eau boueuse froide et des sédiments", 'is_correct' => false],
                            ['choice_text' => "De la lave fluide et lente", 'is_correct' => false],
                            ['choice_text' => "Un mélange brûlant de gaz et de cendres", 'is_correct' => true],
                            ['choice_text' => "De la neige fondue et des cailloux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que permet la surveillance d’un volcan par des sismomètres, des capteurs de déformation et des mesures de gaz ?",
                        'explanation' => "La surveillance repère les signes d’un réveil et aide à adapter l’alerte et la prévention ; elle ne peut ni empêcher ni dater une éruption.",
                        'choices' => [
                            ['choice_text' => "Détecter des changements d’activité pour mieux alerter", 'is_correct' => true],
                            ['choice_text' => "Empêcher l’éruption de se produire", 'is_correct' => false],
                            ['choice_text' => "Prévoir l’heure exacte de chaque éruption", 'is_correct' => false],
                            ['choice_text' => "Éliminer le risque pour les habitants", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Beaucoup de volcans explosifs bordent l’océan Pacifique, au-dessus des zones de subduction. Qu’est-ce qui y fait fondre les roches du manteau ?",
                        'explanation' => "En s’enfonçant, la plaque libère de l’eau, ce qui facilite la fusion du manteau et alimente des magmas souvent explosifs.",
                        'choices' => [
                            ['choice_text' => "L’eau libérée par la plaque qui plonge", 'is_correct' => true],
                            ['choice_text' => "Le frottement de l’air sur la surface", 'is_correct' => false],
                            ['choice_text' => "Le rayonnement du Soleil", 'is_correct' => false],
                            ['choice_text' => "Le vent chaud qui chauffe la roche du sol", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Crues et inondations",
                'description' => "Comprendre les crues, le ruissellement, les plaines inondables et les mesures de réduction du risque.",
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Après de fortes pluies, un champ habituellement sec reste recouvert d’eau pendant deux jours. Comment qualifier cet événement ?",
                        'explanation' => "Une inondation est la submersion temporaire de terrains qui sont normalement émergés.",
                        'choices' => [
                            ['choice_text' => "Une sécheresse", 'is_correct' => false],
                            ['choice_text' => "Une érosion", 'is_correct' => false],
                            ['choice_text' => "Un tsunami", 'is_correct' => false],
                            ['choice_text' => "Une inondation", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Le débit d’un oued augmente fortement et son niveau monte. Comment appelle-t-on ce phénomène ?",
                        'explanation' => "Une crue est une forte hausse du débit et du niveau d’un cours d’eau ; l’étiage correspond au contraire à ses plus bas niveaux.",
                        'choices' => [
                            ['choice_text' => "Un étiage", 'is_correct' => false],
                            ['choice_text' => "Une marée", 'is_correct' => false],
                            ['choice_text' => "Une crue", 'is_correct' => true],
                            ['choice_text' => "Une décrue", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Après la même pluie, une rivière urbaine monte plus vite qu’une rivière forestière. Quelle explication est la bonne ?",
                        'explanation' => "Les surfaces imperméables bloquent l’infiltration : l’eau ruisselle et rejoint très vite la rivière.",
                        'choices' => [
                            ['choice_text' => "Le béton et le bitume empêchent l’eau de s’infiltrer", 'is_correct' => true],
                            ['choice_text' => "Les bâtiments absorbent une grande part de l’eau de pluie", 'is_correct' => false],
                            ['choice_text' => "Le béton laisse l’eau s’infiltrer plus vite", 'is_correct' => false],
                            ['choice_text' => "Les arbres augmentent le ruissellement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une digue protège un quartier contre les crues. Quelle est sa limite ?",
                        'explanation' => "Une digue est calculée pour un niveau de crue donné ; une crue plus forte peut la dépasser ou la rompre.",
                        'choices' => [
                            ['choice_text' => "Elle protège jusqu’à un certain niveau de crue", 'is_correct' => true],
                            ['choice_text' => "Elle empêche les crues, même les plus exceptionnelles", 'is_correct' => false],
                            ['choice_text' => "Elle fait baisser la quantité de pluie", 'is_correct' => false],
                            ['choice_text' => "Elle supprime l’aléa définitivement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une maison est construite dans une plaine inondable. Que risque-t-elle ?",
                        'explanation' => "Une plaine inondable est l’espace que la rivière occupe naturellement lors des crues.",
                        'choices' => [
                            ['choice_text' => "D’être privée de pluie pendant des années", 'is_correct' => false],
                            ['choice_text' => "D’être entourée de roches dures qui retiennent l’eau", 'is_correct' => false],
                            ['choice_text' => "De rester loin du lit de la rivière", 'is_correct' => false],
                            ['choice_text' => "D’être recouverte quand la rivière déborde", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quelle mesure réduit les dégâts d’une crue sans empêcher la pluie ?",
                        'explanation' => "Laisser à l’eau des espaces où s’étaler ralentit la crue et limite les dommages.",
                        'choices' => [
                            ['choice_text' => "Construire des logements sur les berges pour fixer le sol", 'is_correct' => false],
                            ['choice_text' => "Enterrer la rivière dans un petit tuyau unique", 'is_correct' => false],
                            ['choice_text' => "Garder des zones d’expansion de crue sans constructions", 'is_correct' => true],
                            ['choice_text' => "Couper la végétation des berges", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Après un violent orage, quelle rivière monte le plus vite ?",
                        'explanation' => "Une forte pente, un petit bassin et des surfaces imperméables raccourcissent le temps de réponse à la pluie.",
                        'choices' => [
                            ['choice_text' => "Une petite rivière de montagne bordée de zones bétonnées", 'is_correct' => true],
                            ['choice_text' => "Un grand fleuve de plaine à faible pente", 'is_correct' => false],
                            ['choice_text' => "Un cours d’eau de désert sans pluie", 'is_correct' => false],
                            ['choice_text' => "Une rivière entourée de forêts et de prairies perméables", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une tempête pousse la mer vers la côte à marée haute. Quel phénomène aggrave l’inondation côtière ?",
                        'explanation' => "Le vent et la basse pression d’une tempête font monter temporairement la mer : c’est la surcote.",
                        'choices' => [
                            ['choice_text' => "Une baisse du niveau de la mer", 'is_correct' => false],
                            ['choice_text' => "La surcote de tempête", 'is_correct' => true],
                            ['choice_text' => "La décrue des fleuves", 'is_correct' => false],
                            ['choice_text' => "Un retrait de la marée", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Qu’est-ce qu’une crue éclair ?",
                        'explanation' => "Une crue éclair se forme en quelques minutes ou heures, surtout sur les petits bassins pentus et les oueds.",
                        'choices' => [
                            ['choice_text' => "Une crue qui dure plusieurs mois", 'is_correct' => false],
                            ['choice_text' => "Une crue provoquée par un tsunami", 'is_correct' => false],
                            ['choice_text' => "Une baisse rapide du niveau d’une rivière", 'is_correct' => false],
                            ['choice_text' => "Une crue très rapide, après un orage", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quelle information aide directement à prévoir l’évolution d’une crue en temps réel ?",
                        'explanation' => "Le suivi des hauteurs et des débits permet de repérer la montée d’une crue et d’émettre des alertes.",
                        'choices' => [
                            ['choice_text' => "La magnitude des séismes récents", 'is_correct' => false],
                            ['choice_text' => "Le niveau et le débit des cours d’eau", 'is_correct' => true],
                            ['choice_text' => "La salinité des océans", 'is_correct' => false],
                            ['choice_text' => "La température des roches profondes", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Cyclones tropicaux",
                'description' => "Reconnaître les caractéristiques des cyclones, les dangers associés et les principes d’alerte.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Où un cyclone tropical se forme-t-il ?",
                        'explanation' => "Il puise son énergie dans l’eau chaude de l’océan, environ 26 °C ou plus, qui alimente un air humide en mouvement ascendant.",
                        'choices' => [
                            ['choice_text' => "Sur un océan dont l’eau est chaude", 'is_correct' => true],
                            ['choice_text' => "Sur un désert chaud et sec", 'is_correct' => false],
                            ['choice_text' => "Au-dessus d’une chaîne de montagnes", 'is_correct' => false],
                            ['choice_text' => "Sur une mer glacée près du pôle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans l’Atlantique, comment appelle-t-on un cyclone tropical dont les vents soutenus dépassent environ 120 km/h ?",
                        'explanation' => "Dans l’Atlantique et le nord-est du Pacifique, on parle d’ouragan ; dans le nord-ouest du Pacifique, de typhon.",
                        'choices' => [
                            ['choice_text' => "Un typhon", 'is_correct' => false],
                            ['choice_text' => "Une tornade", 'is_correct' => false],
                            ['choice_text' => "Une mousson", 'is_correct' => false],
                            ['choice_text' => "Un ouragan", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Le centre d’un cyclone tropical mature est appelé…",
                        'explanation' => "L’œil est la zone centrale, souvent relativement calme, entourée du mur de l’œil où vents et pluies sont les plus violents.",
                        'choices' => [
                            ['choice_text' => "le foyer", 'is_correct' => false],
                            ['choice_text' => "l’œil", 'is_correct' => true],
                            ['choice_text' => "le cratère", 'is_correct' => false],
                            ['choice_text' => "l’épicentre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quand le mur de l’œil d’un cyclone passe sur une île, que ressentent les habitants ?",
                        'explanation' => "Le mur de l’œil concentre les vents les plus forts et les pluies les plus intenses du cyclone.",
                        'choices' => [
                            ['choice_text' => "Un calme complet avec un ciel dégagé", 'is_correct' => false],
                            ['choice_text' => "Une baisse brutale de la température de la mer", 'is_correct' => false],
                            ['choice_text' => "Des vents violents et de très fortes pluies", 'is_correct' => true],
                            ['choice_text' => "Des secousses sismiques répétées", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel cumul de dangers explique les inondations liées à un cyclone ?",
                        'explanation' => "Un cyclone apporte de fortes pluies, qui font monter les rivières, et une surcote qui fait déborder la mer sur la côte.",
                        'choices' => [
                            ['choice_text' => "Des pluies faibles et une marée basse", 'is_correct' => false],
                            ['choice_text' => "Un séisme et un glissement de terrain", 'is_correct' => false],
                            ['choice_text' => "Des pluies intenses et une montée de la mer", 'is_correct' => true],
                            ['choice_text' => "Une sécheresse et une surcote", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quand une alerte cyclonique est lancée, quel est son but principal ?",
                        'explanation' => "L’alerte permet d’activer les plans de prévention et de mettre les personnes en sécurité avant l’arrivée du phénomène.",
                        'choices' => [
                            ['choice_text' => "Faire changer la trajectoire du cyclone", 'is_correct' => false],
                            ['choice_text' => "Faire baisser la vitesse du vent", 'is_correct' => false],
                            ['choice_text' => "Éviter que le cyclone touche la côte", 'is_correct' => false],
                            ['choice_text' => "Laisser le temps de se mettre à l’abri", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Dans l’hémisphère nord, l’air tourne en spirale autour du centre d’un cyclone. Quel phénomène contribue à cette rotation ?",
                        'explanation' => "La rotation de la Terre dévie les vents qui convergent vers le centre et organise leur circulation en spirale.",
                        'choices' => [
                            ['choice_text' => "Les marées créées par la Lune", 'is_correct' => false],
                            ['choice_text' => "La rotation de la Terre (force de Coriolis)", 'is_correct' => true],
                            ['choice_text' => "La salinité de l’eau de surface", 'is_correct' => false],
                            ['choice_text' => "Le relief des côtes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un cyclone arrive sur un continent. Que lui arrive-t-il ?",
                        'explanation' => "Privé de l’eau chaude qui l’alimente et freiné par le sol, un cyclone perd peu à peu sa puissance.",
                        'choices' => [
                            ['choice_text' => "Il s’affaiblit, faute d’eau chaude à évaporer", 'is_correct' => true],
                            ['choice_text' => "Il se renforce grâce aux montagnes", 'is_correct' => false],
                            ['choice_text' => "Il garde son intensité tant qu’il y a du vent", 'is_correct' => false],
                            ['choice_text' => "Il accélère car le sol offre moins de frottement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que mesure l’échelle de Saffir-Simpson ?",
                        'explanation' => "L’échelle de Saffir-Simpson classe les cyclones de la catégorie 1 à 5 selon la force de leurs vents soutenus.",
                        'choices' => [
                            ['choice_text' => "La magnitude d’un séisme", 'is_correct' => false],
                            ['choice_text' => "La hauteur d’un tsunami", 'is_correct' => false],
                            ['choice_text' => "La quantité de pluie tombée", 'is_correct' => false],
                            ['choice_text' => "L’intensité d’un cyclone d’après ses vents soutenus", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une île basse est frappée par un cyclone. Qu’est-ce qui la rend si vulnérable ?",
                        'explanation' => "Sur une île basse, vents, vagues, surcote et pluies s’ajoutent, et l’eau a peu de chemin à franchir pour tout submerger.",
                        'choices' => [
                            ['choice_text' => "Elle est protégée du vent par son relief", 'is_correct' => false],
                            ['choice_text' => "Elle subit à la fois vents, vagues et montée de la mer", 'is_correct' => true],
                            ['choice_text' => "Sa faible altitude l’empêche d’être submergée par la mer", 'is_correct' => false],
                            ['choice_text' => "Le cyclone s’y affaiblit dès l’arrivée", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Glissements de terrain",
                'description' => "Comprendre les mouvements gravitaires, leurs facteurs déclenchants et les mesures de prévention.",
                'duration' => 21,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Comment définir un glissement de terrain ?",
                        'explanation' => "Un glissement de terrain est un mouvement de matériaux sur une pente, sous l’effet de la gravité.",
                        'choices' => [
                            ['choice_text' => "La montée soudaine d’une rivière dans sa vallée", 'is_correct' => false],
                            ['choice_text' => "Le déplacement d’une masse de sol sur une pente", 'is_correct' => true],
                            ['choice_text' => "Le passage d’une grande vague sur la côte voisine", 'is_correct' => false],
                            ['choice_text' => "La chute de cendres d’un volcan sur ses pentes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Des pluies abondantes saturent le sol d’une colline. Pourquoi cela peut-il déclencher un glissement ?",
                        'explanation' => "L’eau ajoute du poids et rend le sol plus glissant : la pente peut céder.",
                        'choices' => [
                            ['choice_text' => "L’eau fait fondre la roche en profondeur", 'is_correct' => false],
                            ['choice_text' => "L’eau allège le sol et le fait flotter", 'is_correct' => false],
                            ['choice_text' => "L’eau supprime l’effet de la gravité", 'is_correct' => false],
                            ['choice_text' => "L’eau alourdit le sol et réduit sa résistance", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une pente est déboisée pour une exploitation agricole. Quel effet cela a-t-il sur sa stabilité ?",
                        'explanation' => "Les racines renforcent le sol ; sans elles, certaines pentes deviennent moins stables.",
                        'choices' => [
                            ['choice_text' => "Les arbres coupés laissés sur place alourdissent la pente", 'is_correct' => false],
                            ['choice_text' => "La pluie cesse de tomber sur le versant", 'is_correct' => false],
                            ['choice_text' => "Les racines ne retiennent plus le sol, qui se fragilise", 'is_correct' => true],
                            ['choice_text' => "La pente s’aplatit d’elle-même", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pour construire une route, on entaille le pied d’un versant. Quel est le risque ?",
                        'explanation' => "Retirer le pied d’une pente enlève un appui et modifie son équilibre.",
                        'choices' => [
                            ['choice_text' => "Le versant gagne en stabilité car il est plus raide", 'is_correct' => false],
                            ['choice_text' => "L’eau s’infiltre moins et la pente sèche", 'is_correct' => false],
                            ['choice_text' => "Le versant perd son appui et peut glisser", 'is_correct' => true],
                            ['choice_text' => "La végétation repousse plus vite", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Des blocs rocheux se détachent d’une falaise et dévalent la pente. De quel mouvement s’agit-il ?",
                        'explanation' => "Un éboulement est la chute rapide de blocs ou de fragments rocheux depuis une paroi ou une pente.",
                        'choices' => [
                            ['choice_text' => "D’une coulée de boue", 'is_correct' => false],
                            ['choice_text' => "D’un tassement du sol", 'is_correct' => false],
                            ['choice_text' => "D’une crue éclair", 'is_correct' => false],
                            ['choice_text' => "D’un éboulement", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Dans un village bâti sur un versant, des fissures apparaissent peu à peu dans les murs et dans la route. Que peuvent-elles indiquer ?",
                        'explanation' => "Des fissures nouvelles peuvent signaler que le terrain bouge, et justifier une surveillance.",
                        'choices' => [
                            ['choice_text' => "Un séisme prévu pour le lendemain", 'is_correct' => false],
                            ['choice_text' => "Un déplacement lent du terrain", 'is_correct' => true],
                            ['choice_text' => "Un assèchement des puits du village", 'is_correct' => false],
                            ['choice_text' => "La montée d’une rivière lointaine", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Où un glissement de terrain est-il le plus probable ?",
                        'explanation' => "La forte pente, l’argile glissante et l’eau qui s’accumule se combinent pour déclencher un glissement.",
                        'choices' => [
                            ['choice_text' => "Sur une pente raide, argileuse et mouillée", 'is_correct' => true],
                            ['choice_text' => "Sur un plateau plat et rocheux, bien drainé", 'is_correct' => false],
                            ['choice_text' => "Sur une plaine sableuse, sèche et sans pente", 'is_correct' => false],
                            ['choice_text' => "Au centre d’un lac asséché depuis des années", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel aménagement aide à stabiliser une pente ?",
                        'explanation' => "Évacuer l’eau limite le poids et la saturation du sol, deux facteurs de déclenchement.",
                        'choices' => [
                            ['choice_text' => "L’arrosage régulier du versant", 'is_correct' => false],
                            ['choice_text' => "L’ajout de remblais lourds au sommet", 'is_correct' => false],
                            ['choice_text' => "Un système de drainage qui évacue l’eau", 'is_correct' => true],
                            ['choice_text' => "La suppression des murs de soutènement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À quoi sert la carte des glissements déjà connus dans une région ?",
                        'explanation' => "Cette carte guide l’urbanisme et les mesures de surveillance ou de protection.",
                        'choices' => [
                            ['choice_text' => "À éviter de construire dans les secteurs instables", 'is_correct' => true],
                            ['choice_text' => "À modifier le tracé des plaques tectoniques de la région", 'is_correct' => false],
                            ['choice_text' => "À prévoir la date du prochain glissement", 'is_correct' => false],
                            ['choice_text' => "À empêcher la pluie de tomber", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un glissement a déjà eu lieu sur un versant. Peut-on le considérer comme définitivement stable ?",
                        'explanation' => "Un glissement fragilise la pente et fissure le terrain : le secteur peut rester instable et nécessiter une surveillance.",
                        'choices' => [
                            ['choice_text' => "Oui : la pente a retrouvé son équilibre final", 'is_correct' => false],
                            ['choice_text' => "Oui : le risque disparaît dès que la pluie s’arrête", 'is_correct' => false],
                            ['choice_text' => "Non : la gravité a changé sur ce versant", 'is_correct' => false],
                            ['choice_text' => "Non : le terrain fissuré peut bouger de nouveau", 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Tsunamis et submersions",
                'description' => "Relier les séismes sous-marins aux tsunamis et connaître les comportements de sécurité.",
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Quel événement peut déclencher un tsunami ?",
                        'explanation' => "Un tsunami naît d’un déplacement brutal d’une grande masse d’eau, le plus souvent causé par un séisme sous-marin, un glissement de terrain ou une éruption.",
                        'choices' => [
                            ['choice_text' => "Une tempête de vent très violente au large", 'is_correct' => false],
                            ['choice_text' => "Une marée de vives-eaux au large", 'is_correct' => false],
                            ['choice_text' => "Un orage violent sur la côte voisine", 'is_correct' => false],
                            ['choice_text' => "Un séisme qui déplace le fond de la mer", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quel séisme sous-marin a le plus de chances de produire un tsunami ?",
                        'explanation' => "Il faut une secousse assez forte pour déplacer brutalement le fond et la colonne d’eau au-dessus.",
                        'choices' => [
                            ['choice_text' => "Un séisme fort et peu profond qui déplace le fond marin", 'is_correct' => true],
                            ['choice_text' => "Un séisme faible et très profond", 'is_correct' => false],
                            ['choice_text' => "Un séisme fort mais sur un continent", 'is_correct' => false],
                            ['choice_text' => "Un séisme faible qui ne déplace pas le fond", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un tsunami traverse l’océan en pleine mer. Peut-on facilement le voir depuis un bateau ?",
                        'explanation' => "En eau profonde, un tsunami est très long et peu haut : on ne le remarque presque pas, alors qu’il transporte beaucoup d’énergie.",
                        'choices' => [
                            ['choice_text' => "Oui : il y forme une vague géante de plusieurs dizaines de mètres", 'is_correct' => false],
                            ['choice_text' => "Oui : il y déferle comme une vague de tempête", 'is_correct' => false],
                            ['choice_text' => "Non : il n’existe pas tant qu’il est en pleine mer", 'is_correct' => false],
                            ['choice_text' => "Non : sa hauteur y est souvent inférieure à un mètre", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "À l’approche de la côte, la mer devient moins profonde. Que fait un tsunami ?",
                        'explanation' => "Dans une eau moins profonde, le tsunami ralentit et l’énergie se concentre : la vague devient plus haute.",
                        'choices' => [
                            ['choice_text' => "Il accélère et sa hauteur diminue", 'is_correct' => false],
                            ['choice_text' => "Il garde la même vitesse et la même hauteur", 'is_correct' => false],
                            ['choice_text' => "Il s’arrête net et disparaît", 'is_correct' => false],
                            ['choice_text' => "Il ralentit et sa hauteur augmente", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un retrait brutal et inhabituel de la mer est observé après un séisme. Que peut-il annoncer ?",
                        'explanation' => "Un retrait rapide de la mer peut précéder certaines vagues de tsunami ; il faut s’éloigner immédiatement du rivage.",
                        'choices' => [
                            ['choice_text' => "Le début d’une marée basse ordinaire", 'is_correct' => false],
                            ['choice_text' => "Une tempête de sable", 'is_correct' => false],
                            ['choice_text' => "L’arrivée imminente d’un tsunami", 'is_correct' => true],
                            ['choice_text' => "Une éruption volcanique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Après un fort séisme ressenti sur le littoral, aucune alerte n’est encore reçue. Que faut-il faire ?",
                        'explanation' => "Un fort séisme côtier peut être suivi d’un tsunami : partir tout de suite fait gagner un temps précieux.",
                        'choices' => [
                            ['choice_text' => "Rester sur la plage pour observer la mer", 'is_correct' => false],
                            ['choice_text' => "S’éloigner du rivage et gagner un terrain élevé", 'is_correct' => true],
                            ['choice_text' => "Se réfugier dans un sous-sol près du port", 'is_correct' => false],
                            ['choice_text' => "Attendre une confirmation sur les réseaux sociaux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "En quoi un tsunami diffère-t-il d’une vague de tempête ?",
                        'explanation' => "Un tsunami résulte d’un déplacement brutal d’eau (séisme, glissement, éruption) et transporte bien plus d’énergie qu’une vague de vent.",
                        'choices' => [
                            ['choice_text' => "Il est créé par le vent, mais en plus fort", 'is_correct' => false],
                            ['choice_text' => "Il vient d’un déplacement brutal d’eau", 'is_correct' => true],
                            ['choice_text' => "Il est causé par la Lune, comme les marées", 'is_correct' => false],
                            ['choice_text' => "Il ne se forme qu’au bord des côtes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans deux baies voisines, un même tsunami a des effets très différents. Qu’est-ce qui peut l’expliquer ?",
                        'explanation' => "La forme du littoral et du fond peut concentrer ou disperser l’énergie de la vague.",
                        'choices' => [
                            ['choice_text' => "La forme du littoral et du fond marin", 'is_correct' => true],
                            ['choice_text' => "La couleur du sable de chaque plage", 'is_correct' => false],
                            ['choice_text' => "La salinité différente de l’eau", 'is_correct' => false],
                            ['choice_text' => "La force du vent dans chacune des deux baies", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quels éléments un système d’alerte tsunami combine-t-il ?",
                        'explanation' => "Les réseaux d’alerte s’appuient sur les séismes détectés et sur des capteurs de niveau marin pour confirmer les vagues.",
                        'choices' => [
                            ['choice_text' => "La mesure de la température des roches", 'is_correct' => false],
                            ['choice_text' => "L’observation de la couleur du ciel avant l’orage", 'is_correct' => false],
                            ['choice_text' => "Les séismes détectés et le niveau de la mer", 'is_correct' => true],
                            ['choice_text' => "La prévision de la pluie sur la côte", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un village côtier affiche des panneaux d’évacuation vers les hauteurs. Quel est leur intérêt ?",
                        'explanation' => "Un tsunami local peut arriver en quelques minutes : connaître l’itinéraire d’avance fait gagner un temps décisif.",
                        'choices' => [
                            ['choice_text' => "Arrêter la vague avant qu’elle atteigne la côte", 'is_correct' => false],
                            ['choice_text' => "Gagner du temps, car l’alerte peut laisser peu de délai", 'is_correct' => true],
                            ['choice_text' => "Réduire la fréquence des séismes", 'is_correct' => false],
                            ['choice_text' => "Empêcher les marées de monter", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un tsunami file à 700 km/h au large. Combien de temps met-il pour parcourir 350 km ?",
                        'explanation' => "Durée = distance ÷ vitesse = 350 km ÷ 700 km/h = 0,5 h, soit 30 minutes.",
                        'choices' => [
                            ['choice_text' => "30 minutes", 'is_correct' => true],
                            ['choice_text' => "2 heures", 'is_correct' => false],
                            ['choice_text' => "5 heures", 'is_correct' => false],
                            ['choice_text' => "15 minutes", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Aléa, risque et prévention",
                'description' => "Distinguer aléa, vulnérabilité, risque, catastrophe, prévention et préparation.",
                'duration' => 19,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Comment définir un aléa naturel ?",
                        'explanation' => "L’aléa décrit la possibilité qu’un phénomène dangereux se produise dans une zone et sur une période données.",
                        'choices' => [
                            ['choice_text' => "Les dégâts constatés après la fin de l’événement", 'is_correct' => false],
                            ['choice_text' => "Le nombre de victimes recensées", 'is_correct' => false],
                            ['choice_text' => "La probabilité d’un phénomène dangereux", 'is_correct' => true],
                            ['choice_text' => "La valeur des biens exposés", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "De quoi dépend le risque naturel ?",
                        'explanation' => "Le risque naît de la rencontre entre un aléa et des enjeux vulnérables : deux zones soumises au même aléa peuvent avoir des risques différents.",
                        'choices' => [
                            ['choice_text' => "Du nombre de volcans actifs dans le monde", 'is_correct' => false],
                            ['choice_text' => "De l’aléa et des enjeux vulnérables", 'is_correct' => true],
                            ['choice_text' => "Du climat moyen de la planète", 'is_correct' => false],
                            ['choice_text' => "De la profondeur du noyau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une crue emporte des ponts et des maisons, et la commune ne peut pas faire face seule aux secours. Comment qualifier cet événement ?",
                        'explanation' => "Une catastrophe est un événement dont les dégâts dépassent les capacités de réponse d’une société.",
                        'choices' => [
                            ['choice_text' => "Un simple aléa", 'is_correct' => false],
                            ['choice_text' => "Une mesure de prévention", 'is_correct' => false],
                            ['choice_text' => "Une catastrophe", 'is_correct' => true],
                            ['choice_text' => "Un enjeu", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une ville impose des bâtiments parasismiques. Quelle composante du risque diminue surtout ?",
                        'explanation' => "Des constructions adaptées réduisent les dommages pour une même secousse, donc la vulnérabilité.",
                        'choices' => [
                            ['choice_text' => "L’aléa sismique", 'is_correct' => false],
                            ['choice_text' => "La magnitude des séismes", 'is_correct' => false],
                            ['choice_text' => "L’activité des failles", 'is_correct' => false],
                            ['choice_text' => "La vulnérabilité", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un séisme de magnitude 7 secoue un désert sans habitants. Pourquoi n’y a-t-il pas de catastrophe ?",
                        'explanation' => "Un aléa fort cause peu de dommages quand très peu de personnes et de biens sont exposés.",
                        'choices' => [
                            ['choice_text' => "La magnitude baisse quand il y a peu d’habitants", 'is_correct' => false],
                            ['choice_text' => "Le sol du désert absorbe les ondes sismiques", 'is_correct' => false],
                            ['choice_text' => "Les séismes ne se produisent pas dans les déserts", 'is_correct' => false],
                            ['choice_text' => "Presque personne et aucun bien ne sont exposés", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Qu’est-ce que la prévention ?",
                        'explanation' => "La prévention agit en amont : information, aménagement, normes de construction et autres mesures de réduction du risque.",
                        'choices' => [
                            ['choice_text' => "Réduire les dommages avant qu’un événement survienne", 'is_correct' => true],
                            ['choice_text' => "Empêcher le phénomène naturel de se produire", 'is_correct' => false],
                            ['choice_text' => "Aider les victimes après la catastrophe", 'is_correct' => false],
                            ['choice_text' => "Prévoir l’heure exacte de chaque événement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel exemple relève de la préparation à une catastrophe ?",
                        'explanation' => "La préparation organise à l’avance les réactions : exercices, plans d’évacuation, moyens d’intervention.",
                        'choices' => [
                            ['choice_text' => "La construction d’un bâtiment aux normes parasismiques", 'is_correct' => false],
                            ['choice_text' => "Un exercice d’évacuation dans une école", 'is_correct' => true],
                            ['choice_text' => "La cartographie des zones inondables", 'is_correct' => false],
                            ['choice_text' => "L’interdiction de construire en bord de rivière", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À quoi servent les cartes d’aléas pour un urbaniste ?",
                        'explanation' => "Ces cartes orientent la localisation des habitations et des infrastructures, et réduisent l’exposition.",
                        'choices' => [
                            ['choice_text' => "À prévoir la date exacte du prochain événement dans la zone", 'is_correct' => false],
                            ['choice_text' => "À empêcher le phénomène de se produire", 'is_correct' => false],
                            ['choice_text' => "À repérer les zones à risque et adapter l’urbanisme", 'is_correct' => true],
                            ['choice_text' => "À remplacer les règles de construction", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une alerte arrive par SMS, mais personne ne sait quoi faire. Qu’est-ce qui manque pour qu’elle soit efficace ?",
                        'explanation' => "Une alerte ne réduit le risque que si elle arrive à temps et si chacun connaît les gestes à faire.",
                        'choices' => [
                            ['choice_text' => "Un message plus long et plus détaillé", 'is_correct' => false],
                            ['choice_text' => "Des consignes connues d’avance", 'is_correct' => true],
                            ['choice_text' => "Une alerte envoyée une fois l’événement terminé", 'is_correct' => false],
                            ['choice_text' => "Une zone avec peu d’habitants autour", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel comportement augmente le plus le risque pendant un séisme en intérieur ?",
                        'explanation' => "Pendant les secousses, les vitres et les objets qui tombent sont dangereux : mieux vaut se protéger et attendre la fin avant de sortir.",
                        'choices' => [
                            ['choice_text' => "Se précipiter vers une fenêtre pendant les secousses", 'is_correct' => true],
                            ['choice_text' => "Se protéger sous un meuble solide", 'is_correct' => false],
                            ['choice_text' => "S’éloigner des objets qui peuvent tomber", 'is_correct' => false],
                            ['choice_text' => "Attendre la fin des secousses avant de sortir", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Cas pratiques de gestion des risques",
                'description' => "Appliquer les notions de risque naturel à des situations réalistes de protection des populations.",
                'duration' => 25,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Un séisme sous-marin frappe au large. Les autorités évacuent la côte avant même d’avoir vu une vague. Pourquoi ?",
                        'explanation' => "Un séisme sous-marin capable de déplacer le fond peut produire un tsunami : l’évacuation réduit l’exposition de la population côtière.",
                        'choices' => [
                            ['choice_text' => "Le séisme va se répéter sur la côte dans l’heure", 'is_correct' => false],
                            ['choice_text' => "Le séisme a fait monter la marée", 'is_correct' => false],
                            ['choice_text' => "Le séisme a pu générer un tsunami", 'is_correct' => true],
                            ['choice_text' => "Le séisme a déclenché un cyclone", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une ville au pied d’un volcan actif construit de nouvelles routes d’évacuation. Qu’est-ce qui diminue ?",
                        'explanation' => "Des itinéraires praticables permettent de gagner plus vite une zone sûre lors d’une alerte.",
                        'choices' => [
                            ['choice_text' => "La fréquence des éruptions du volcan voisin", 'is_correct' => false],
                            ['choice_text' => "Le temps pour quitter la zone exposée", 'is_correct' => true],
                            ['choice_text' => "La viscosité du magma", 'is_correct' => false],
                            ['choice_text' => "La température du volcan", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une commune interdit de construire dans sa plaine inondable. Quelle stratégie applique-t-elle ?",
                        'explanation' => "Moins de personnes et de biens dans la zone exposée, c’est moins de dommages à chaque crue.",
                        'choices' => [
                            ['choice_text' => "Supprimer l’aléa de crue", 'is_correct' => false],
                            ['choice_text' => "Prévoir parfaitement la date des crues", 'is_correct' => false],
                            ['choice_text' => "Réduire la pluie sur le bassin", 'is_correct' => false],
                            ['choice_text' => "Réduire l’exposition par l’urbanisme", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un village côtier organise chaque année un exercice d’évacuation tsunami. Quel est l’objectif principal ?",
                        'explanation' => "Les exercices rendent les itinéraires et les gestes familiers, ce qui accélère la réaction en situation réelle.",
                        'choices' => [
                            ['choice_text' => "Automatiser les bons réflexes et gagner du temps", 'is_correct' => true],
                            ['choice_text' => "Mesurer la hauteur des vagues", 'is_correct' => false],
                            ['choice_text' => "Tester la résistance des digues", 'is_correct' => false],
                            ['choice_text' => "Compter les habitants du village", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un tronçon de route est bâti sur une pente drainée et surveillé après les pluies. Quel est l’objectif ?",
                        'explanation' => "Le drainage limite l’eau dans le sol, et la surveillance repère les déformations avant un mouvement plus important.",
                        'choices' => [
                            ['choice_text' => "Favoriser l’infiltration de l’eau dans le versant", 'is_correct' => false],
                            ['choice_text' => "Augmenter la pente pour accélérer l’écoulement de l’eau vers la route", 'is_correct' => false],
                            ['choice_text' => "Réduire le risque de glissement et repérer l’instabilité", 'is_correct' => true],
                            ['choice_text' => "Créer des nappes profondes sous la route", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une région plante des dunes végétalisées pour limiter l’érosion. Quel rôle jouent les plantes ?",
                        'explanation' => "Les racines stabilisent le sable ; la végétation amortit une partie de l’énergie du vent et des vagues, sans protéger contre tous les événements extrêmes.",
                        'choices' => [
                            ['choice_text' => "Elles arrêtent les tsunamis les plus forts", 'is_correct' => false],
                            ['choice_text' => "Elles fixent le sable et freinent un peu vents et vagues", 'is_correct' => true],
                            ['choice_text' => "Elles font baisser le niveau de la mer", 'is_correct' => false],
                            ['choice_text' => "Elles empêchent l’eau de pluie de s’infiltrer", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux quartiers subissent le même aléa sismique, mais l’un a des bâtiments plus fragiles. Que dire du risque ?",
                        'explanation' => "À aléa égal, des bâtiments plus fragiles augmentent la vulnérabilité, donc le risque.",
                        'choices' => [
                            ['choice_text' => "Il est identique dans les deux quartiers", 'is_correct' => false],
                            ['choice_text' => "Il est plus élevé dans le quartier aux bâtiments solides", 'is_correct' => false],
                            ['choice_text' => "Il est nul dans le quartier aux bâtiments fragiles", 'is_correct' => false],
                            ['choice_text' => "Il est plus élevé dans le quartier fragile", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Après une alerte inondation, Karim voit une route recouverte d’une eau qui paraît peu profonde. Que doit-il faire ?",
                        'explanation' => "Même peu profonde, une eau en mouvement peut emporter une voiture ou une personne ; l’état de la chaussée est invisible.",
                        'choices' => [
                            ['choice_text' => "Faire demi-tour : le courant est difficile à évaluer", 'is_correct' => true],
                            ['choice_text' => "Traverser doucement en voiture", 'is_correct' => false],
                            ['choice_text' => "Traverser à pied avec un ami pour vérifier la profondeur", 'is_correct' => false],
                            ['choice_text' => "Attendre dans la voiture au milieu de l’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une famille qui vit près d’une rivière prépare un kit d’urgence et repère son point de rassemblement. De quoi relève cette action ?",
                        'explanation' => "Un kit et un itinéraire connus à l’avance améliorent la capacité à réagir vite en situation de crise.",
                        'choices' => [
                            ['choice_text' => "De la prévention de l’aléa", 'is_correct' => false],
                            ['choice_text' => "De la réduction de la magnitude", 'is_correct' => false],
                            ['choice_text' => "De la cartographie de l’aléa", 'is_correct' => false],
                            ['choice_text' => "De la préparation", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quel principe permet de réduire le risque, quel que soit l’aléa ?",
                        'explanation' => "On agit sur plusieurs leviers à la fois : éviter les zones exposées, renforcer les bâtiments, informer, alerter et préparer.",
                        'choices' => [
                            ['choice_text' => "Réduire l’exposition et la vulnérabilité, et préparer", 'is_correct' => true],
                            ['choice_text' => "Attendre l’événement avant d’organiser les secours", 'is_correct' => false],
                            ['choice_text' => "Construire le plus près possible des zones exposées aux aléas", 'is_correct' => false],
                            ['choice_text' => "Ne plus consulter les cartes d’aléas", 'is_correct' => false],
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