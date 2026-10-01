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
                        'question' => "Un séisme correspond principalement à…",
                        'marks' => 1,
                        'explanation' => "Un séisme résulte d’une rupture ou d’un glissement brutal dans la croûte ou la lithosphère, libérant de l’énergie sous forme d’ondes sismiques.",
                        'choices' => [
                            [
                                'choice_text' => "une libération brutale d’énergie dans la Terre provoquant des vibrations",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une tempête de neige",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une marée exceptionnelle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une éruption solaire",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le foyer d’un séisme est…",
                        'marks' => 1,
                        'explanation' => "Le foyer, ou hypocentre, est le point à l’intérieur de la Terre où débute la rupture à l’origine du séisme.",
                        'choices' => [
                            [
                                'choice_text' => "le point en profondeur où commence la rupture",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "le point à la surface où les dégâts sont maximaux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un volcan",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le sommet d’une montagne",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "L’épicentre est…",
                        'marks' => 1,
                        'explanation' => "L’épicentre est la projection du foyer à la surface terrestre. Il n’est pas nécessairement situé au point de dégâts maximaux.",
                        'choices' => [
                            [
                                'choice_text' => "le point de la surface situé à la verticale du foyer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "le centre du noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la profondeur maximale du séisme",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une faille entière",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les ondes sismiques P sont dites…",
                        'marks' => 1,
                        'explanation' => "Les ondes P se propagent plus rapidement que les ondes S dans un même milieu et sont donc enregistrées en premier par les sismomètres.",
                        'choices' => [
                            [
                                'choice_text' => "primaires car elles arrivent généralement en premier",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "secondaires car elles sont toujours plus lentes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "océaniques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "superficielles uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les ondes S ne se propagent pas à travers…",
                        'marks' => 1,
                        'explanation' => "Les ondes S sont des ondes de cisaillement et nécessitent un milieu capable de résister au cisaillement ; elles ne traversent donc pas les liquides.",
                        'choices' => [
                            [
                                'choice_text' => "les liquides",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "les solides",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la croûte continentale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les roches rigides",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sismomètre sert à…",
                        'marks' => 1,
                        'explanation' => "Un sismomètre enregistre les mouvements du sol. Les données permettent notamment d’identifier l’arrivée des différentes ondes sismiques.",
                        'choices' => [
                            [
                                'choice_text' => "enregistrer les mouvements du sol lors des séismes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "mesurer la pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "mesurer la salinité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "prévoir exactement la date d’un séisme",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La magnitude d’un séisme renseigne principalement sur…",
                        'marks' => 1,
                        'explanation' => "La magnitude est une mesure liée à la taille de la source et à l’énergie libérée. Les dégâts dépendent aussi de la distance, du sol et des constructions.",
                        'choices' => [
                            [
                                'choice_text' => "la taille ou l’énergie libérée par la source sismique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "le nombre de bâtiments détruits uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la hauteur d’une vague météo",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la profondeur de l’océan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "L’intensité macrosismique décrit surtout…",
                        'marks' => 1,
                        'explanation' => "L’intensité décrit les effets du séisme dans un lieu précis. Elle peut varier d’un endroit à l’autre pour un même séisme.",
                        'choices' => [
                            [
                                'choice_text' => "les effets et dommages observés en un lieu donné",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la longueur de la faille uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la vitesse des ondes P",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la température de la croûte",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les séismes sont-ils fréquents près des limites de plaques ?",
                        'marks' => 1,
                        'explanation' => "Les mouvements relatifs des plaques créent des contraintes mécaniques. Leur libération brutale peut produire des séismes fréquents près des limites.",
                        'choices' => [
                            [
                                'choice_text' => "Les mouvements des plaques y concentrent des contraintes et favorisent les ruptures",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les plaques y cessent toute activité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les océans produisent des séismes chaque jour",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les limites de plaques sont toujours volcaniques",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une série de petites secousses suit un séisme principal. Ces événements peuvent être appelés…",
                        'marks' => 1,
                        'explanation' => "Des séismes plus petits qui suivent un séisme principal dans la même région sont appelés répliques et peuvent durer de quelques heures à plusieurs mois selon les cas.",
                        'choices' => [
                            [
                                'choice_text' => "répliques",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "marées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "tsunamis",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "éruptions",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux stations enregistrent les mêmes ondes P à des heures différentes. La station la plus éloignée recevra généralement les ondes…",
                        'marks' => 1,
                        'explanation' => "Les ondes sismiques mettent un temps à parcourir la distance entre la source et une station. Une station plus éloignée les enregistre donc généralement plus tard, toutes choses égales par ailleurs.",
                        'choices' => [
                            [
                                'choice_text' => "plus tard",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "plus tôt",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "sans aucun décalage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "uniquement sous forme d’ondes S",
                                'is_correct' => false,
                            ],
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
                        'question' => "Un volcan effusif se caractérise généralement par…",
                        'marks' => 1,
                        'explanation' => "Un volcan effusif émet principalement des laves relativement fluides. Les éruptions peuvent être moins explosives lorsque le magma est peu visqueux et les gaz s’échappent plus facilement.",
                        'choices' => [
                            [
                                'choice_text' => "des coulées de lave relativement fluides et des éruptions souvent moins explosives",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une absence totale de magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "uniquement des explosions sous-marines",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des séismes sans volcan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un volcan explosif peut produire…",
                        'marks' => 1,
                        'explanation' => "Les éruptions explosives fragmentent le magma et peuvent produire des cendres, des projections et des écoulements pyroclastiques très dangereux.",
                        'choices' => [
                            [
                                'choice_text' => "des cendres, des blocs et des nuées ardentes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "uniquement de l’eau liquide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des marées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "du calcaire sédimentaire",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le magma qui atteint la surface devient…",
                        'marks' => 1,
                        'explanation' => "Le magma est appelé lave lorsqu’il est émis à la surface terrestre.",
                        'choices' => [
                            [
                                'choice_text' => "de la lave",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un tsunami",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "de la vapeur d’eau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un magma visqueux peut-il favoriser des éruptions explosives ?",
                        'marks' => 1,
                        'explanation' => "Un magma visqueux retient davantage les gaz. Leur accumulation peut contribuer à une décompression explosive lorsque la pression est libérée.",
                        'choices' => [
                            [
                                'choice_text' => "Les gaz ont plus de difficulté à s’échapper et peuvent accumuler de la pression",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il ne contient jamais de gaz",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il refroidit plus vite que l’air uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il est toujours liquide comme l’eau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel signe peut annoncer une reprise d’activité volcanique ?",
                        'marks' => 1,
                        'explanation' => "Une hausse des séismes locaux et des déformations du bâtiment volcanique peut indiquer une remontée de magma, même si ce n’est pas une garantie d’éruption.",
                        'choices' => [
                            [
                                'choice_text' => "Une augmentation de la sismicité et des déformations du volcan",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une baisse du nombre de roches partout",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une disparition du magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une marée basse",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La lave basaltique est généralement…",
                        'marks' => 1,
                        'explanation' => "Les basaltes proviennent souvent de magmas relativement pauvres en silice et les laves basaltiques sont généralement assez fluides.",
                        'choices' => [
                            [
                                'choice_text' => "relativement fluide",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "très visqueuse comme une pâte froide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "toujours explosive",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "constituée uniquement de glace",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un cratère volcanique est principalement…",
                        'marks' => 1,
                        'explanation' => "Un cratère est une dépression liée à l’activité volcanique, souvent située au sommet d’un édifice ou autour d’une bouche éruptive.",
                        'choices' => [
                            [
                                'choice_text' => "une dépression située autour ou au sommet d’un conduit éruptif",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une faille océanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un bassin versant",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une nappe phréatique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une coulée pyroclastique est…",
                        'marks' => 1,
                        'explanation' => "Une coulée ou courant pyroclastique est un mélange dense et très chaud de gaz et de particules volcaniques pouvant se déplacer à grande vitesse sur les pentes.",
                        'choices' => [
                            [
                                'choice_text' => "un mélange très chaud de gaz, cendres et fragments volcaniques se déplaçant rapidement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une coulée d’eau froide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une rivière souterraine",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une marée de forte amplitude",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la surveillance volcanique est-elle utile ?",
                        'marks' => 1,
                        'explanation' => "La surveillance des séismes, déformations, gaz et autres paramètres aide à détecter des changements et à adapter les mesures de prévention.",
                        'choices' => [
                            [
                                'choice_text' => "Elle permet de détecter des signes d’activité et d’améliorer l’alerte et la prévention",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle permet de connaître l’heure exacte de toute éruption",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle empêche le volcan d’entrer en éruption",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle supprime le risque pour toujours",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé est correct pour un volcan situé à une zone de subduction ?",
                        'marks' => 1,
                        'explanation' => "La subduction apporte notamment de l’eau et d’autres volatils dans le système mantellique, ce qui favorise la fusion partielle et peut alimenter un volcanisme souvent plus explosif.",
                        'choices' => [
                            [
                                'choice_text' => "Il peut être alimenté par des magmas issus de la fusion partielle favorisée par la présence de fluides",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il ne peut jamais produire de magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il est toujours totalement éteint",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il produit uniquement du basalte très fluide",
                                'is_correct' => false,
                            ],
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
                        'question' => "Une inondation correspond à…",
                        'marks' => 1,
                        'explanation' => "Une inondation se produit lorsqu’une quantité d’eau recouvre temporairement des terrains habituellement non submergés.",
                        'choices' => [
                            [
                                'choice_text' => "la submersion temporaire d’une zone habituellement émergée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une sécheresse prolongée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un séisme sous-marin",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un courant atmosphérique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une crue désigne principalement…",
                        'marks' => 1,
                        'explanation' => "Une crue correspond à une augmentation du débit et du niveau d’un cours d’eau, pouvant provoquer un débordement et une inondation.",
                        'choices' => [
                            [
                                'choice_text' => "l’augmentation importante du débit et du niveau d’un cours d’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la baisse d’une nappe uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une vague océanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une éruption",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une pluie intense sur un bassin très urbanisé peut augmenter le risque d’inondation parce que…",
                        'marks' => 1,
                        'explanation' => "Les surfaces imperméables réduisent l’infiltration et accélèrent l’arrivée de l’eau vers les cours d’eau et les zones basses.",
                        'choices' => [
                            [
                                'choice_text' => "les surfaces imperméables accélèrent le ruissellement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "les routes absorbent toute l’eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les bâtiments créent moins de ruissellement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le béton augmente l’infiltration",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une digue peut réduire localement…",
                        'marks' => 1,
                        'explanation' => "Une digue peut protéger certaines zones contre des crues jusqu’à un niveau donné, mais elle ne supprime pas le danger ni les événements exceptionnels.",
                        'choices' => [
                            [
                                'choice_text' => "la probabilité de débordement jusqu’à un certain niveau de crue",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "toute précipitation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "tous les séismes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le niveau marin mondial",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une zone située dans une plaine inondable est-elle exposée ?",
                        'marks' => 1,
                        'explanation' => "Les plaines inondables sont des secteurs où les eaux d’une rivière peuvent s’étaler lors des crues, ce qui crée un aléa naturel.",
                        'choices' => [
                            [
                                'choice_text' => "Elle peut être naturellement occupée par les eaux lors des crues",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle ne reçoit jamais de pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le sol y est toujours rocheux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les rivières n’y passent jamais",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle mesure réduit le risque d’inondation sans empêcher toute pluie ?",
                        'marks' => 1,
                        'explanation' => "Laisser des espaces où l’eau peut s’étaler réduit localement les dommages et ralentit certains écoulements, tandis qu’un urbanisme adapté limite l’exposition.",
                        'choices' => [
                            [
                                'choice_text' => "Préserver des zones d’expansion des crues et adapter l’urbanisation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Construire partout sur les berges",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Canaliser toutes les eaux dans un seul petit tuyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Supprimer toute végétation",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une montée rapide d’un cours d’eau après une pluie intense est plus probable dans…",
                        'marks' => 1,
                        'explanation' => "La pente, la faible taille et l’imperméabilisation peuvent raccourcir le temps de réponse et favoriser une montée rapide du débit.",
                        'choices' => [
                            [
                                'choice_text' => "un petit bassin urbanisé et pentu",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une zone sans pente et très perméable uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un désert sans pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un bassin entièrement couvert de forêt dans tous les cas",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une inondation côtière peut être aggravée par…",
                        'marks' => 1,
                        'explanation' => "Une forte tempête peut pousser temporairement l’eau vers la côte et produire une surcote, qui s’ajoute parfois à la marée et aux vagues.",
                        'choices' => [
                            [
                                'choice_text' => "une surcote due à une tempête",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une baisse de la pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un faible vent continental",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une nappe profonde",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une digue rompue peut provoquer une arrivée d’eau rapide dans…",
                        'marks' => 1,
                        'explanation' => "La rupture d’une protection hydraulique peut permettre à l’eau accumulée ou au cours d’eau en crue d’envahir rapidement les terrains situés derrière.",
                        'choices' => [
                            [
                                'choice_text' => "les zones situées derrière la protection",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "le noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les nuages",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une dorsale",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle information aide directement à prévoir l’évolution d’une crue en temps réel ?",
                        'marks' => 1,
                        'explanation' => "Le suivi des hauteurs et débits permet d’identifier la montée d’une crue et d’améliorer les alertes hydrologiques.",
                        'choices' => [
                            [
                                'choice_text' => "Le niveau et le débit des cours d’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couleur des roches profondes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La magnitude d’un ancien séisme",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La salinité des océans",
                                'is_correct' => false,
                            ],
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
                        'question' => "Un cyclone tropical se forme au-dessus…",
                        'marks' => 1,
                        'explanation' => "Les cyclones tropicaux ont besoin d’eaux océaniques chaudes pour alimenter la convection et d’un environnement atmosphérique favorable à leur organisation.",
                        'choices' => [
                            [
                                'choice_text' => "d’eaux océaniques suffisamment chaudes et dans des conditions atmosphériques favorables",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "des déserts froids",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "du noyau terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "de grandes chaînes de montagnes uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans l’Atlantique et le nord-est du Pacifique, on parle généralement d’ouragan pour un…",
                        'marks' => 1,
                        'explanation' => "Le terme ouragan désigne certaines formes de cyclone tropical intense dans des bassins déterminés ; la classification dépend de la vitesse des vents.",
                        'choices' => [
                            [
                                'choice_text' => "cyclone tropical atteignant des vents soutenus suffisamment forts",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "orage ordinaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "tsunami",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "tremblement de terre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le centre d’un cyclone tropical mature est appelé…",
                        'marks' => 1,
                        'explanation' => "L’œil est la zone centrale, souvent relativement calme, entourée du mur de l’œil où les vents et pluies sont les plus intenses.",
                        'choices' => [
                            [
                                'choice_text' => "l’œil",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "le foyer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le cratère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "l’épicentre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le mur de l’œil d’un cyclone est une zone où…",
                        'marks' => 1,
                        'explanation' => "Le mur de l’œil entoure l’œil et concentre les plus forts vents et les pluies les plus intenses du cyclone.",
                        'choices' => [
                            [
                                'choice_text' => "les vents et précipitations sont particulièrement forts",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la pression est toujours maximale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le vent est nul",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la mer est parfaitement calme",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un cyclone peut-il provoquer des inondations importantes ?",
                        'marks' => 1,
                        'explanation' => "Les cyclones combinent souvent précipitations intenses, vents et surcote marine, ce qui multiplie les sources d’inondation.",
                        'choices' => [
                            [
                                'choice_text' => "Les pluies intenses peuvent produire des crues et la surcote marine peut submerger les côtes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les cyclones suppriment toute pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les vagues ne touchent jamais les côtes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les sols deviennent instantanément secs",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une alerte cyclonique sert principalement à…",
                        'marks' => 1,
                        'explanation' => "L’alerte permet d’activer les plans de prévention, de sécuriser les personnes et de limiter les dommages avant l’arrivée du phénomène.",
                        'choices' => [
                            [
                                'choice_text' => "permettre aux populations et services de se préparer et de se mettre à l’abri",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "modifier la trajectoire du cyclone",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "supprimer les vents",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "garantir l’absence de dégâts",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les vents d’un cyclone tournent autour du centre notamment à cause…",
                        'marks' => 1,
                        'explanation' => "La rotation terrestre, via l’effet de Coriolis, contribue à organiser la circulation autour du centre du cyclone, en plus des différences de pression et d’autres processus.",
                        'choices' => [
                            [
                                'choice_text' => "de la rotation de la Terre et de la dynamique de l’air",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "de la salinité uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des marées uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "des montagnes continentales",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un cyclone s’affaiblit généralement lorsqu’il passe sur une grande région…",
                        'marks' => 1,
                        'explanation' => "Un cyclone tropical perd généralement son énergie lorsqu’il n’est plus alimenté par des eaux chaudes et subit davantage de frottements et d’interactions avec les reliefs.",
                        'choices' => [
                            [
                                'choice_text' => "continentale ou sur des eaux plus froides",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "d’eau très chaude et peu profonde",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "sans frottement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "où l’humidité augmente sans limite",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel risque côtier est directement lié à la hausse temporaire du niveau de la mer lors d’une tempête ?",
                        'marks' => 1,
                        'explanation' => "La surcote marine est une élévation anormale et temporaire du niveau marin due principalement aux effets du vent et de la pression d’une tempête.",
                        'choices' => [
                            [
                                'choice_text' => "La surcote marine",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le ravinement éolien uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le pergélisol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La subduction",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les zones côtières basses sont-elles particulièrement vulnérables aux cyclones ?",
                        'marks' => 1,
                        'explanation' => "Les zones côtières basses sont exposées à plusieurs aléas simultanés, notamment les vents, les vagues et la surcote qui peut amplifier la submersion.",
                        'choices' => [
                            [
                                'choice_text' => "Elles peuvent cumuler vents, vagues, surcote et inondation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles sont toujours à l’abri du vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Leur altitude empêche toute submersion",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les océans s’assèchent pendant les tempêtes",
                                'is_correct' => false,
                            ],
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
                        'question' => "Un glissement de terrain est principalement…",
                        'marks' => 1,
                        'explanation' => "Un glissement de terrain est un mouvement de matériaux sur une pente, principalement sous l’action de la gravité et favorisé par certains facteurs déclenchants.",
                        'choices' => [
                            [
                                'choice_text' => "le déplacement d’une masse de sol ou de roche sous l’effet de la gravité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une vague océanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une pluie légère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une éruption solaire",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une forte pluie peut déclencher un glissement de terrain parce qu’elle…",
                        'marks' => 1,
                        'explanation' => "L’eau augmente le poids des matériaux et peut réduire certaines forces de résistance, notamment en augmentant les pressions interstitielles.",
                        'choices' => [
                            [
                                'choice_text' => "augmente la teneur en eau et peut réduire la stabilité de certaines pentes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "diminue toujours le poids des sols",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "solidifie les argiles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "supprime la gravité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La déforestation d’une pente peut augmenter l’instabilité car…",
                        'marks' => 1,
                        'explanation' => "Les racines peuvent renforcer le sol. Leur disparition peut donc réduire la stabilité de certaines pentes, surtout avec d’autres facteurs défavorables.",
                        'choices' => [
                            [
                                'choice_text' => "la perte des racines réduit la cohésion mécanique de certains sols",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "les arbres produisent toujours des glissements",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la pluie disparaît",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la pente devient horizontale",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une route creusée au pied d’une pente peut augmenter le risque de mouvement si elle…",
                        'marks' => 1,
                        'explanation' => "En retirant une partie du pied de la pente, des travaux peuvent diminuer le soutien du versant et modifier son équilibre mécanique.",
                        'choices' => [
                            [
                                'choice_text' => "retire un appui et modifie la géométrie de la pente",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "augmente la végétation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "réduit toujours le ruissellement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "supprime toute infiltration",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un éboulement correspond à…",
                        'marks' => 1,
                        'explanation' => "Un éboulement est un mouvement gravitaire rapide de blocs ou fragments rocheux qui se détachent d’une paroi ou d’une pente.",
                        'choices' => [
                            [
                                'choice_text' => "la chute rapide de blocs ou de fragments rocheux depuis une pente",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une montée de rivière",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un cyclone",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une marée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel signe peut indiquer une déformation progressive d’une pente ?",
                        'marks' => 1,
                        'explanation' => "Des fissures, déformations ou déplacements progressifs peuvent signaler une instabilité croissante et justifier une surveillance.",
                        'choices' => [
                            [
                                'choice_text' => "Des fissures nouvelles dans le sol ou les constructions",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une baisse de la salinité marine",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une augmentation des marées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une absence de végétation partout",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une pente argileuse devient instable après plusieurs jours de pluie. Quelle condition favorise le phénomène ?",
                        'marks' => 1,
                        'explanation' => "L’eau qui s’accumule dans les pores peut augmenter les pressions interstitielles et réduire les contraintes effectives qui contribuent à la stabilité.",
                        'choices' => [
                            [
                                'choice_text' => "La saturation en eau et l’augmentation des pressions dans les pores",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La sécheresse extrême uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le gel de l’atmosphère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse de la masse des sols",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel aménagement peut réduire le risque de glissement sur une pente ?",
                        'marks' => 1,
                        'explanation' => "Réduire l’accumulation d’eau et maintenir une stabilité végétale ou des ouvrages adaptés peut limiter certains mécanismes de déclenchement.",
                        'choices' => [
                            [
                                'choice_text' => "Un drainage adapté et une gestion contrôlée de la végétation et des eaux",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La suppression des drains",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’ajout d’eau en continu",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La surcharge du sommet",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi cartographier les zones de glissement connues ?",
                        'marks' => 1,
                        'explanation' => "La cartographie de l’aléa aide à planifier l’urbanisation, les infrastructures et les mesures de surveillance ou de protection.",
                        'choices' => [
                            [
                                'choice_text' => "Pour éviter ou encadrer les constructions dans les secteurs exposés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour faire disparaître les pentes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour prévoir l’heure exacte d’un glissement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour modifier les plaques tectoniques",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après un premier glissement, une pente peut rester vulnérable parce que…",
                        'marks' => 1,
                        'explanation' => "Un glissement peut modifier la pente, fissurer le terrain et laisser des matériaux fragilisés ; le secteur peut donc rester instable et nécessiter une surveillance.",
                        'choices' => [
                            [
                                'choice_text' => "la géométrie et les matériaux ont été modifiés et peuvent rester instables",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "le risque disparaît toujours immédiatement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la gravité cesse d’agir",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la pluie devient impossible",
                                'is_correct' => false,
                            ],
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
                        'question' => "Un tsunami correspond à…",
                        'marks' => 1,
                        'explanation' => "Un tsunami est une série d’ondes générées par un déplacement brutal d’une grande masse d’eau, souvent lié à un séisme sous-marin ou à un glissement.",
                        'choices' => [
                            [
                                'choice_text' => "une série d’ondes de grande longueur d’onde produites par un déplacement important de l’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une marée ordinaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une pluie tropicale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un courant de vent",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un séisme sous-marin est particulièrement susceptible de produire un tsunami s’il…",
                        'marks' => 1,
                        'explanation' => "Un déplacement vertical du fond marin peut déplacer une grande masse d’eau et déclencher un tsunami.",
                        'choices' => [
                            [
                                'choice_text' => "déplace brutalement le fond marin et la colonne d’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "se produit très profondément sans déplacer le fond",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "est très petit",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "a lieu uniquement sur un continent",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Au large, un tsunami peut avoir…",
                        'marks' => 1,
                        'explanation' => "Au large, la grande longueur d’onde du tsunami fait que sa hauteur peut rester relativement faible tout en transportant beaucoup d’énergie.",
                        'choices' => [
                            [
                                'choice_text' => "une faible hauteur mais une très grande longueur d’onde",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une hauteur toujours supérieure à 100 m",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la même forme qu’une marée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "aucune énergie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "En arrivant près des côtes, la vitesse d’un tsunami…",
                        'marks' => 1,
                        'explanation' => "En eau peu profonde, la vitesse des ondes de longue période diminue. L’énergie se concentre alors sur une profondeur moindre et la hauteur peut augmenter.",
                        'choices' => [
                            [
                                'choice_text' => "diminue avec la profondeur tandis que sa hauteur peut augmenter",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "augmente sans limite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "reste exactement constante",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "devient nulle au large",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel signe naturel peut parfois annoncer l’arrivée proche d’un tsunami après un séisme côtier ?",
                        'marks' => 1,
                        'explanation' => "Une variation rapide et inhabituelle du niveau de la mer peut précéder certaines vagues de tsunami. Il faut alors s’éloigner immédiatement de la côte.",
                        'choices' => [
                            [
                                'choice_text' => "Un retrait ou une montée anormale et rapide de la mer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une baisse de la température de l’air uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un arc-en-ciel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une marée faible plusieurs jours après",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Que faut-il faire après un fort séisme côtier ressenti près de la mer si une alerte tsunami n’est pas encore reçue ?",
                        'marks' => 1,
                        'explanation' => "Un séisme fort près de la côte peut être suivi d’un tsunami. Se déplacer immédiatement vers une zone sûre réduit le temps perdu avant une éventuelle vague.",
                        'choices' => [
                            [
                                'choice_text' => "S’éloigner immédiatement du littoral et gagner un terrain plus élevé si possible",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Rester sur la plage pour observer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Descendre dans un sous-sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Attendre les réseaux sociaux avant d’agir",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un tsunami est différent d’une vague de vent ordinaire car…",
                        'marks' => 1,
                        'explanation' => "Les tsunamis sont liés à des déplacements rapides de grandes masses d’eau et ont des longueurs d’onde beaucoup plus grandes que les vagues de vent ordinaires.",
                        'choices' => [
                            [
                                'choice_text' => "son origine et sa longueur d’onde sont très différentes et il mobilise une grande masse d’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "il est toujours créé par le vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "il ne se propage jamais au large",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "il est uniquement lié aux marées",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les ports et baies peuvent-ils subir des effets différents lors d’un tsunami ?",
                        'marks' => 1,
                        'explanation' => "La bathymétrie et la géométrie des côtes peuvent amplifier ou réduire localement la hauteur et la vitesse des eaux lors d’un tsunami.",
                        'choices' => [
                            [
                                'choice_text' => "La forme du littoral et des fonds marins modifie la propagation et la concentration de l’eau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Tous les littoraux réagissent exactement de la même manière",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La salinité annule les vagues",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le vent ne peut jamais agir",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un système d’alerte tsunami repose notamment sur…",
                        'marks' => 1,
                        'explanation' => "Les systèmes d’alerte utilisent notamment les informations sismiques et, selon les réseaux, des capteurs marins et côtiers pour détecter et confirmer les vagues.",
                        'choices' => [
                            [
                                'choice_text' => "la détection rapide des séismes et la surveillance du niveau marin",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la couleur des plages",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la température des maisons",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la pression du sol agricole",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les populations côtières doivent-elles connaître les itinéraires d’évacuation ?",
                        'marks' => 1,
                        'explanation' => "Connaître les itinéraires à l’avance réduit le délai de décision et facilite l’évacuation vers des secteurs en hauteur ou éloignés du littoral.",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu’un tsunami peut laisser très peu de temps pour gagner une zone sûre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu’ils permettent de stopper la vague",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’ils réduisent les séismes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’ils suppriment les marées",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un tsunami se propage rapidement au large puis devient plus lent près de la côte. Quelle évolution de profondeur explique cela ?",
                        'marks' => 1,
                        'explanation' => "La vitesse des tsunamis dépend notamment de la profondeur de l’eau. Ils ralentissent en eau moins profonde à l’approche des côtes.",
                        'choices' => [
                            [
                                'choice_text' => "La profondeur diminue près du rivage",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La profondeur augmente vers la côte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La salinité disparaît",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le fond océanique devient plus chaud",
                                'is_correct' => false,
                            ],
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
                        'question' => "L’aléa désigne principalement…",
                        'marks' => 1,
                        'explanation' => "L’aléa décrit la possibilité de survenue d’un phénomène dangereux et ses caractéristiques selon le lieu et le temps.",
                        'choices' => [
                            [
                                'choice_text' => "la possibilité qu’un phénomène dangereux se produise dans une zone et sur une période données",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "les dommages déjà observés",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "uniquement le nombre de victimes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le prix des bâtiments",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le risque naturel dépend notamment de…",
                        'marks' => 1,
                        'explanation' => "Le risque résulte de la rencontre entre un aléa et des enjeux vulnérables. Deux zones soumises au même aléa peuvent donc avoir des risques différents.",
                        'choices' => [
                            [
                                'choice_text' => "l’aléa et de la vulnérabilité des personnes et des biens exposés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "uniquement du nombre de volcans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "uniquement du climat mondial",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "de la profondeur du noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une catastrophe correspond à un événement qui…",
                        'marks' => 1,
                        'explanation' => "Une catastrophe implique un impact majeur sur une société, avec des dommages et des besoins de réponse qui peuvent dépasser les capacités disponibles localement.",
                        'choices' => [
                            [
                                'choice_text' => "provoque des perturbations et dommages dépassant les capacités normales de réponse d’une société",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "est toujours un phénomène sans victimes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "est identique à l’aléa",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "n’a aucun lien avec la vulnérabilité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une ville construit des bâtiments parasismiques. Quelle composante du risque est surtout réduite ?",
                        'marks' => 1,
                        'explanation' => "Des constructions adaptées réduisent les dommages potentiels pour une même intensité de secousses, donc la vulnérabilité.",
                        'choices' => [
                            [
                                'choice_text' => "La vulnérabilité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’existence du séisme",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La magnitude du séisme",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La tectonique des plaques",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une zone désertique inhabitée peut connaître un séisme de forte magnitude sans catastrophe majeure parce que…",
                        'marks' => 1,
                        'explanation' => "Un aléa peut être important mais produire peu de dommages si très peu de personnes ou de biens sont exposés et vulnérables.",
                        'choices' => [
                            [
                                'choice_text' => "la population et les enjeux exposés peuvent être très faibles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "les séismes n’y existent pas",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la magnitude dépend du nombre d’habitants",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le sol détruit le séisme",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La prévention vise principalement à…",
                        'marks' => 1,
                        'explanation' => "La prévention agit avant la crise par l’information, l’aménagement, les normes de construction, les exercices et d’autres mesures de réduction du risque.",
                        'choices' => [
                            [
                                'choice_text' => "réduire les dommages avant qu’un événement dangereux ne survienne",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "arrêter les phénomènes naturels",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "prédire parfaitement tous les événements",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "supprimer les plaques tectoniques",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La préparation à une catastrophe comprend…",
                        'marks' => 1,
                        'explanation' => "La préparation organise à l’avance les actions, rôles et moyens nécessaires pour réagir rapidement à un phénomène dangereux.",
                        'choices' => [
                            [
                                'choice_text' => "des plans d’évacuation, des exercices et des moyens d’intervention",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "uniquement la construction de nouvelles routes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la modification du climat",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la suppression des alertes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les cartes d’aléas sont-elles utiles à l’urbanisme ?",
                        'marks' => 1,
                        'explanation' => "Les cartes d’aléas orientent la localisation des habitations et infrastructures et contribuent à réduire l’exposition.",
                        'choices' => [
                            [
                                'choice_text' => "Elles permettent d’identifier les secteurs à risque et d’adapter l’occupation du sol",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles empêchent tout phénomène naturel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles donnent toujours une date exacte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles remplacent les règles de construction",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une alerte précoce est efficace surtout si…",
                        'marks' => 1,
                        'explanation' => "Une alerte ne réduit le risque que si elle atteint les populations à temps et si les consignes sont connues et applicables.",
                        'choices' => [
                            [
                                'choice_text' => "les personnes savent à l’avance quoi faire et peuvent recevoir l’information à temps",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "elle reste secrète",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "elle arrive après l’événement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "aucune évacuation n’est possible",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel comportement augmente le plus le risque lors d’un séisme en intérieur ?",
                        'marks' => 1,
                        'explanation' => "Pendant les secousses, les vitres et objets qui tombent constituent un danger. Se protéger et rester à distance des zones dangereuses est recommandé, puis évacuer prudemment après si nécessaire.",
                        'choices' => [
                            [
                                'choice_text' => "Se précipiter vers une fenêtre pendant les secousses",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Se protéger sous un meuble solide et s’éloigner des vitrages",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Rester à l’écart des objets qui peuvent tomber",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Attendre la fin des secousses avant de sortir prudemment",
                                'is_correct' => false,
                            ],
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
                        'question' => "Après un séisme sous-marin, pourquoi les autorités peuvent-elles évacuer rapidement une côte ?",
                        'marks' => 1,
                        'explanation' => "Un séisme sous-marin capable de déplacer le fond peut produire un tsunami. L’évacuation réduit l’exposition de la population côtière.",
                        'choices' => [
                            [
                                'choice_text' => "Le séisme peut avoir généré un tsunami",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les séismes créent toujours des cyclones",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les marées s’arrêtent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La pluie devient immédiatement acide",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une ville située au pied d’un volcan actif construit des voies d’évacuation. Cette action réduit surtout…",
                        'marks' => 1,
                        'explanation' => "Des itinéraires connus et praticables permettent aux habitants de gagner plus rapidement une zone sûre lors d’une alerte.",
                        'choices' => [
                            [
                                'choice_text' => "le temps nécessaire pour quitter une zone exposée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la fréquence des éruptions",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la viscosité du magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la température du volcan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une commune interdit de construire sur une plaine inondable. Quelle stratégie applique-t-elle ?",
                        'marks' => 1,
                        'explanation' => "Limiter la construction dans les zones exposées réduit le nombre de personnes et de biens susceptibles d’être touchés par les crues.",
                        'choices' => [
                            [
                                'choice_text' => "La réduction de l’exposition par l’aménagement du territoire",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La suppression de l’aléa",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La prévision parfaite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La modification du climat",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un village organise chaque année un exercice d’évacuation tsunami. Quel objectif principal ?",
                        'marks' => 1,
                        'explanation' => "Les exercices rendent les itinéraires et les gestes plus familiers, ce qui améliore la rapidité et l’efficacité de la réponse réelle.",
                        'choices' => [
                            [
                                'choice_text' => "Automatiser les bons réflexes et réduire le temps de réaction",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Créer un tsunami artificiel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Mesurer la salinité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Augmenter la hauteur des vagues",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une pente située sous une route est drainée correctement et surveillée après des pluies. Cette mesure vise surtout à…",
                        'marks' => 1,
                        'explanation' => "Le drainage limite l’accumulation d’eau et la surveillance aide à repérer les déformations avant un mouvement plus important.",
                        'choices' => [
                            [
                                'choice_text' => "réduire la probabilité de mouvements de terrain et détecter des signes d’instabilité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "augmenter l’érosion",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "créer des nappes profondes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "déplacer la route vers le noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une région côtière plante des dunes végétalisées pour limiter l’érosion et les submersions mineures. Quel rôle jouent les plantes ?",
                        'marks' => 1,
                        'explanation' => "Les racines stabilisent le sable et la végétation peut réduire l’érosion éolienne et marine, même si elle ne protège pas contre tous les événements extrêmes.",
                        'choices' => [
                            [
                                'choice_text' => "Elles stabilisent le sable et peuvent amortir une partie de l’énergie des vents et des vagues",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles suppriment les marées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles empêchent tous les tsunamis",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles changent la profondeur de l’océan mondial",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une carte montre un même aléa sismique dans deux quartiers, mais l’un possède des bâtiments plus fragiles. Dans ce quartier, le risque peut être…",
                        'marks' => 1,
                        'explanation' => "À aléa comparable, des bâtiments plus fragiles augmentent les dommages potentiels et donc la vulnérabilité et le risque.",
                        'choices' => [
                            [
                                'choice_text' => "plus élevé en raison d’une vulnérabilité plus forte",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "forcément nul",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "identique quels que soient les bâtiments",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "indépendant de l’exposition",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après une alerte inondation, pourquoi faut-il éviter les routes recouvertes d’eau ?",
                        'marks' => 1,
                        'explanation' => "Une eau relativement peu profonde peut déjà exercer une forte force de courant. L’état de la chaussée, le sol et des obstacles peuvent être invisibles.",
                        'choices' => [
                            [
                                'choice_text' => "La profondeur et le courant peuvent être difficiles à évaluer et emporter un véhicule ou une personne",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’eau est toujours potable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La pluie devient plus froide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les véhicules flottent toujours",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une famille vivant près d’une rivière prépare un kit d’urgence et connaît le lieu d’évacuation. Cette action relève surtout…",
                        'marks' => 1,
                        'explanation' => "Un kit et un itinéraire connus avant l’événement améliorent la capacité d’une famille à réagir rapidement en situation de crise.",
                        'choices' => [
                            [
                                'choice_text' => "de la préparation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "de la magnitude",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "de la fossilisation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "de la prévention volcanique uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel principe général permet de réduire le risque face à plusieurs aléas différents ?",
                        'marks' => 1,
                        'explanation' => "La réduction du risque combine plusieurs leviers : éviter les secteurs les plus exposés, renforcer la vulnérabilité, informer et préparer les populations et organiser l’alerte.",
                        'choices' => [
                            [
                                'choice_text' => "Réduire l’exposition, diminuer la vulnérabilité et améliorer l’alerte et la préparation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Attendre l’événement sans plan",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Construire partout dans les zones exposées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer les cartes d’aléas",
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
