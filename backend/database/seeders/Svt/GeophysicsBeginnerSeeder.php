<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class GeophysicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'geophysics')->firstOrFail();

        $quizzes = [
            [
                'title' => "Structure interne de la Terre",
                'description' => "Identifier les grandes enveloppes internes de la Terre et relier leur position à quelques propriétés physiques simples.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Du point de vue géophysique, quelle enveloppe terrestre se trouve directement sous la croûte ?",
                        'explanation' => "Le manteau se trouve sous la croûte et constitue la grande enveloppe rocheuse située entre la croûte et le noyau.",
                        'choices' => [
                            [
                                'choice_text' => "Le manteau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le noyau externe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La lithosphère océanique uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le noyau interne",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle affirmation décrit le mieux la croûte terrestre ?",
                        'explanation' => "La croûte est l'enveloppe solide la plus externe de la Terre. Elle peut être continentale ou océanique.",
                        'choices' => [
                            [
                                'choice_text' => "C'est l'enveloppe solide la plus externe de la Terre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "C'est une couche liquide située au centre de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "C'est la partie la plus chaude de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle est toujours plus épaisse sous les océans que sous les continents",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un schéma montre trois couches concentriques : A au centre, B autour de A, C tout autour. Si A représente le noyau interne, que représente B ?",
                        'explanation' => "Dans un modèle concentrique, le noyau externe entoure le noyau interne et se trouve à l'intérieur du manteau.",
                        'choices' => [
                            [
                                'choice_text' => "Le noyau externe",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La croûte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le manteau supérieur uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'atmosphère",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le manteau est-il généralement plus dense que la croûte ?",
                        'explanation' => "Le manteau contient globalement des matériaux plus riches en fer et magnésium et donc plus denses que ceux de la croûte.",
                        'choices' => [
                            [
                                'choice_text' => "Il contient des matériaux globalement plus denses et riches en silicates de magnésium et de fer",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il est entièrement constitué d'eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il contient moins de matière que la croûte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Sa température plus élevée le rend automatiquement moins massif",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle couche de la Terre est liquide à l'échelle des mouvements géophysiques courants ?",
                        'explanation' => "Le noyau externe est liquide, alors que le noyau interne est solide malgré sa température très élevée.",
                        'choices' => [
                            [
                                'choice_text' => "Le noyau externe",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La croûte continentale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La croûte océanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le noyau interne",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le rayon moyen de la Terre est d'environ 6 371 km. Une couche commence à 5 100 km de profondeur par rapport à la surface. Dans quelle grande région interne se situe-t-on ?",
                        'explanation' => "La profondeur de 5 100 km est proche de la limite entre le noyau externe et le noyau interne ; en dessous se trouve le noyau interne.",
                        'choices' => [
                            [
                                'choice_text' => "Dans le noyau interne",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Dans la croûte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Dans le manteau supérieur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Dans le noyau externe proche de sa limite avec le manteau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle propriété permet de distinguer principalement le noyau externe du noyau interne ?",
                        'explanation' => "La pression extrême au centre permet au noyau interne de rester solide, tandis que le noyau externe est liquide dans les conditions correspondantes.",
                        'choices' => [
                            [
                                'choice_text' => "L'état physique : le noyau externe est liquide, le noyau interne est solide",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le noyau externe est gazeux et le noyau interne est liquide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le noyau externe est composé de roches et le noyau interne d'eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux sont complètement identiques en état et en composition",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Lorsqu'un modèle indique que la densité augmente globalement vers le centre de la Terre, quelle conclusion simple est cohérente ?",
                        'explanation' => "Une augmentation globale de densité vers le centre traduit le fait que les matériaux profonds sont en moyenne plus denses.",
                        'choices' => [
                            [
                                'choice_text' => "Les matériaux des régions profondes sont en moyenne plus denses que ceux de la surface",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La croûte devient moins dense à mesure qu'on approche du centre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Toutes les couches internes ont exactement la même densité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La densité ne dépend que de la distance au Soleil",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle enveloppe comprend la croûte et la partie rigide du manteau supérieur ?",
                        'explanation' => "La lithosphère regroupe la croûte et la partie rigide du manteau supérieur.",
                        'choices' => [
                            [
                                'choice_text' => "La lithosphère",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L'hydrosphère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le noyau externe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La mésosphère atmosphérique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle phrase est correcte au sujet de l'intérieur profond de la Terre ?",
                        'explanation' => "Le poids des matériaux sus-jacents augmente avec la profondeur, ce qui explique l'augmentation de la pression dans la Terre.",
                        'choices' => [
                            [
                                'choice_text' => "La pression augmente fortement quand on s'enfonce vers le centre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La pression devient nulle au centre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La pression est constante dans toutes les couches",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La pression ne dépend que du relief de surface",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une coupe simplifiée indique : croûte 0-35 km, manteau 35-2 900 km, noyau 2 900-6 371 km. Quelle limite se trouve à environ 2 900 km de profondeur ?",
                        'explanation' => "Vers 2 900 km de profondeur se trouve la limite majeure entre le manteau et le noyau.",
                        'choices' => [
                            [
                                'choice_text' => "La limite entre le manteau et le noyau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La limite entre la croûte et le manteau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La limite entre le noyau externe et le noyau interne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La limite entre la lithosphère et l'atmosphère",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Densité, gravité et propriétés physiques",
                'description' => "Comprendre les notions élémentaires de densité et de gravité et leur utilisation pour interpréter des observations géophysiques simples.",
                'duration' => 18,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Deux blocs ont le même volume. Le bloc A a une masse de 2 kg et le bloc B de 4 kg. Lequel est le plus dense ?",
                        'explanation' => "À volume identique, le bloc le plus massif possède davantage de matière dans le même espace : sa densité est donc plus élevée.",
                        'choices' => [
                            [
                                'choice_text' => "Le bloc B",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le bloc A",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils ont forcément la même densité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "On ne peut jamais comparer des densités à partir de masses",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La densité d'un matériau correspond, de façon simplifiée, à",
                        'explanation' => "La densité est définie comme une masse rapportée à un volume ; elle indique à quel point la matière est concentrée dans un espace donné.",
                        'choices' => [
                            [
                                'choice_text' => "sa masse par unité de volume",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "son volume par unité de température",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "sa température par unité de masse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "sa vitesse de déplacement annuelle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un chercheur compare deux roches de même masse. La roche X occupe moins de volume que la roche Y. Que peut-on conclure ?",
                        'explanation' => "À masse égale, occuper moins de volume signifie concentrer la même quantité de matière dans un espace plus petit, donc avoir une densité plus élevée.",
                        'choices' => [
                            [
                                'choice_text' => "X est plus dense que Y",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "X est forcément plus chaude que Y",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Y est toujours plus dure que X",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux ont nécessairement la même densité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Sur Terre, quelle force attire une masse vers le centre de la planète ?",
                        'explanation' => "La gravité terrestre attire les masses vers le centre de la Terre. C'est elle qui donne leur poids aux objets près de la surface.",
                        'choices' => [
                            [
                                'choice_text' => "La gravité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le magnétisme uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La poussée d'Archimède",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La force de Coriolis uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "À altitude légèrement plus élevée, la valeur de l'accélération de la pesanteur est généralement",
                        'explanation' => "Quand l'altitude augmente légèrement, la distance au centre de la Terre augmente et la pesanteur diminue un peu.",
                        'choices' => [
                            [
                                'choice_text' => "un peu plus faible",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un peu plus forte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "exactement doublée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "nulle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un instrument détecte une petite variation locale de gravité. Que peut-elle signaler, entre autres ?",
                        'explanation' => "Une anomalie gravimétrique peut provenir d'un contraste de densité entre les matériaux souterrains et le milieu environnant.",
                        'choices' => [
                            [
                                'choice_text' => "Une différence de densité des matériaux sous la surface",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une variation certaine de la température de l'air uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La présence obligatoire d'un séisme en cours",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une modification du jour et de la nuit",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une masse de 6 kg occupe un volume de 3 L. Sa densité moyenne est de",
                        'explanation' => "La densité vaut masse divisée par volume : 6 kg / 3 L = 2 kg/L.",
                        'choices' => [
                            [
                                'choice_text' => "2 kg/L",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "0,5 kg/L",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "3 kg/L",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "18 kg/L",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les cartes d'anomalies gravimétriques peuvent-elles aider à étudier le sous-sol ?",
                        'explanation' => "La gravimétrie détecte de petites variations de l'accélération de la pesanteur liées notamment à la répartition des masses dans le sous-sol.",
                        'choices' => [
                            [
                                'choice_text' => "Parce que les variations de gravité peuvent refléter des contrastes de densité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu'elles donnent directement la composition chimique exacte de chaque roche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu'elles mesurent uniquement les précipitations",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que la gravité est identique partout à la surface",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un étudiant affirme : « Une roche plus lourde est toujours plus dense. » Quelle correction est la plus juste ?",
                        'explanation' => "Le mot lourd renvoie à une masse ou à un poids, alors que la densité dépend à la fois de la masse et du volume.",
                        'choices' => [
                            [
                                'choice_text' => "La densité dépend de la masse et du volume, donc une roche plus massive n'est pas forcément plus dense",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La densité dépend uniquement de la masse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La densité dépend uniquement de la couleur de la roche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La densité ne peut pas être mesurée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle unité est couramment utilisée pour exprimer la densité d'une roche ?",
                        'explanation' => "La densité des roches s'exprime couramment en grammes par centimètre cube, g/cm³.",
                        'choices' => [
                            [
                                'choice_text' => "g/cm³",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "cm/s",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "N/m²",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "km/h",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Ondes sismiques : P et S",
                'description' => "Reconnaître les principales ondes sismiques et utiliser leur comportement simple pour comprendre l'étude de l'intérieur de la Terre.",
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Lors d'un séisme, quelle onde arrive généralement en premier à une station éloignée ?",
                        'explanation' => "Les ondes P sont les plus rapides parmi les grandes ondes sismiques de volume et arrivent généralement avant les ondes S.",
                        'choices' => [
                            [
                                'choice_text' => "L'onde P",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L'onde S",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La houle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'onde de marée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les ondes P sont appelées ondes de compression parce qu'elles",
                        'explanation' => "Une onde P alterne compressions et dilatations dans le matériau qu'elle traverse, d'où son nom d'onde de compression.",
                        'choices' => [
                            [
                                'choice_text' => "provoquent des compressions et dilatations successives du milieu",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "ne peuvent se propager que dans les liquides",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "font uniquement tourner les roches sur place",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "se déplacent seulement à la surface des océans",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une propriété essentielle des ondes S est qu'elles",
                        'explanation' => "Les ondes S imposent un mouvement transversal qui nécessite un milieu capable de supporter un cisaillement ; elles ne se propagent donc pas dans un liquide.",
                        'choices' => [
                            [
                                'choice_text' => "ne se propagent pas dans un liquide",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "sont toujours plus rapides que les ondes P",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "ne se propagent que dans l'air",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "traversent tous les liquides sans modification",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l'absence d'ondes S dans une partie du globe a-t-elle été utile pour identifier le noyau externe ?",
                        'explanation' => "L'absence d'ondes S transmises à travers le noyau externe indique que cette région se comporte comme un liquide.",
                        'choices' => [
                            [
                                'choice_text' => "Parce que les ondes S ne traversent pas un milieu liquide",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que les ondes S ne traversent jamais les roches solides",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les ondes S sont produites uniquement par les océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les ondes S sont toujours arrêtées par la croûte",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une station enregistre d'abord une onde P puis une onde S. Le délai entre les deux augmente quand la station est plus éloignée de l'épicentre. Que permet notamment ce délai ?",
                        'explanation' => "Le délai entre les arrivées P et S augmente avec la distance car les deux types d'ondes n'ont pas la même vitesse.",
                        'choices' => [
                            [
                                'choice_text' => "Estimer la distance entre la station et l'épicentre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Mesurer directement la température du noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Déterminer automatiquement la vitesse du vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Mesurer la salinité de l'océan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Sur un sismogramme simplifié, les premières petites oscillations sont suivies de secousses plus fortes après un délai. Quelle identification est la plus probable ?",
                        'explanation' => "Sur un sismogramme, les ondes P sont habituellement les premières arrivées ; les ondes S arrivent ensuite et sont souvent plus marquées.",
                        'choices' => [
                            [
                                'choice_text' => "Les premières oscillations correspondent aux ondes P et les suivantes aux ondes S",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les premières oscillations sont les marées et les suivantes les précipitations",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les premières sont les ondes S et les suivantes les ondes P",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux séries sont nécessairement des ondes de surface",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle affirmation compare correctement les ondes P et S ?",
                        'explanation' => "Les ondes P se propagent dans les solides et les liquides, tandis que les ondes S ont besoin d'un milieu solide.",
                        'choices' => [
                            [
                                'choice_text' => "Les ondes P peuvent traverser les solides et les liquides, contrairement aux ondes S",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les ondes S traversent les liquides mais les ondes P non",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux ne traversent que les gaz",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux ont exactement le même comportement dans tous les matériaux",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un séisme se produit en profondeur. Pourquoi les ondes sismiques sont-elles utiles pour étudier des régions terrestres inaccessibles directement ?",
                        'explanation' => "Les ondes sismiques parcourent de grandes profondeurs et leur vitesse ou leur trajectoire révèle des changements de propriétés dans la Terre.",
                        'choices' => [
                            [
                                'choice_text' => "Elles traversent l'intérieur de la Terre et leur vitesse ou leur trajectoire change selon les matériaux",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles permettent de forer jusqu'au centre de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles transforment toutes les roches en magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles mesurent directement la composition chimique de l'air",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une onde P voyage à 6 km/s dans un milieu local. En supposant cette vitesse constante, combien de temps met-elle pour parcourir 30 km ?",
                        'explanation' => "Le temps de trajet vaut distance / vitesse : 30 km / 6 km/s = 5 s.",
                        'choices' => [
                            [
                                'choice_text' => "5 secondes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "6 secondes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "24 secondes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "180 secondes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel phénomène peut produire une zone d'ombre sismique ?",
                        'explanation' => "Les changements de milieu peuvent réfléchir ou réfracter les ondes et créer des zones où certaines ondes n'arrivent pas directement.",
                        'choices' => [
                            [
                                'choice_text' => "La réfraction et la réflexion des ondes lorsqu'elles rencontrent des changements de matériaux",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La disparition du champ magnétique chaque nuit",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La rotation quotidienne de la Lune autour de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L'évaporation de l'eau des océans",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un étudiant pense que les ondes S prouvent que tout l'intérieur de la Terre est solide. Quelle observation contredit cette idée ?",
                        'explanation' => "Le noyau externe liquide empêche la propagation normale des ondes S, ce qui est une preuve majeure de son état physique.",
                        'choices' => [
                            [
                                'choice_text' => "Les ondes S ne traversent pas le noyau externe liquide",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les ondes P ne traversent pas la croûte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les ondes S sont visibles à l'œil nu",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les ondes S n'existent qu'à la surface des continents",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "À distance égale d'un séisme, une station est située sur un matériau où les ondes sismiques sont plus rapides. Quel effet simple peut-on attendre ?",
                        'explanation' => "À distance identique, une onde qui se propage plus vite atteint la station plus tôt ; cela ne change pas la magnitude du séisme.",
                        'choices' => [
                            [
                                'choice_text' => "Les arrivées des ondes seront plus précoces",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le séisme devient automatiquement plus puissant",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les ondes S deviennent des ondes marines",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La magnitude change parce que le milieu est plus rapide",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Le champ magnétique terrestre",
                'description' => "Découvrir l'origine générale du champ magnétique terrestre, ses manifestations et quelques observations simples utilisées en géophysique.",
                'duration' => 18,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "À quoi peut servir une boussole sur Terre ?",
                        'explanation' => "L'aiguille aimantée d'une boussole s'oriente suivant le champ magnétique local de la Terre, ce qui permet de s'orienter.",
                        'choices' => [
                            [
                                'choice_text' => "À s'orienter grâce à l'interaction de son aiguille avec le champ magnétique terrestre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "À mesurer la profondeur d'un séisme",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "À calculer directement la densité d'une roche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "À prévoir avec certitude la météo",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le champ magnétique terrestre est principalement associé, en profondeur, aux mouvements de matière conductrice dans",
                        'explanation' => "Le noyau externe contient un métal liquide conducteur en mouvement ; ces mouvements contribuent à la génération du champ magnétique terrestre.",
                        'choices' => [
                            [
                                'choice_text' => "le noyau externe liquide",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la croûte continentale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "l'atmosphère supérieure uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le manteau supérieur solide uniquement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Comment appelle-t-on la région magnétique entourant la Terre et interagissant avec le vent solaire ?",
                        'explanation' => "La magnétosphère est la région dominée par le champ magnétique terrestre qui interagit avec le vent solaire.",
                        'choices' => [
                            [
                                'choice_text' => "La magnétosphère",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La lithosphère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La biosphère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La troposphère",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le champ magnétique terrestre est-il important pour la Terre ?",
                        'explanation' => "Le champ magnétique dévie une partie des particules chargées du vent solaire et contribue ainsi à protéger l'environnement proche de la Terre.",
                        'choices' => [
                            [
                                'choice_text' => "Il contribue à dévier une partie des particules chargées du vent solaire",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il bloque tous les rayonnements du Soleil sans exception",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il empêche toute éruption volcanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il maintient les océans parfaitement immobiles",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Des roches volcaniques se refroidissent et conservent parfois une aimantation indiquant la direction du champ lors de leur formation. Quelle information cela peut-il fournir ?",
                        'explanation' => "Les minéraux magnétiques peuvent conserver la direction du champ au moment du refroidissement, fournissant une mémoire du champ passé.",
                        'choices' => [
                            [
                                'choice_text' => "Une indication sur la direction du champ magnétique passé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une mesure directe de la masse de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La date exacte de chaque pluie ancienne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La vitesse du vent au moment de l'éruption",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Si l'aiguille d'une boussole change de direction lorsqu'on se déplace loin d'une grande source métallique locale, quelle explication est la plus simple ?",
                        'explanation' => "Une boussole peut être influencée localement par des matériaux métalliques ; il faut donc distinguer le champ terrestre des perturbations proches.",
                        'choices' => [
                            [
                                'choice_text' => "L'orientation locale dépend du champ magnétique terrestre et de perturbations éventuelles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La gravité change complètement de direction sur quelques mètres",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le pôle Nord géographique se déplace de plusieurs kilomètres en quelques secondes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La boussole mesure uniquement la température",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle affirmation est correcte concernant les pôles magnétiques et géographiques ?",
                        'explanation' => "Les pôles géographiques sont définis par l'axe de rotation de la Terre, tandis que les pôles magnétiques dépendent du champ magnétique et ne coïncident pas exactement avec eux.",
                        'choices' => [
                            [
                                'choice_text' => "Ils ne coïncident pas exactement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils sont toujours exactement au même endroit",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les pôles magnétiques se trouvent obligatoirement sur l'équateur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les pôles géographiques disparaissent quand le champ magnétique varie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Comment appelle-t-on une perturbation importante et temporaire de la magnétosphère liée à l'activité solaire ?",
                        'explanation' => "Une tempête géomagnétique correspond à une perturbation du champ magnétique terrestre liée à une forte activité solaire.",
                        'choices' => [
                            [
                                'choice_text' => "Une tempête géomagnétique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une marée solide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une onde sismique S",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une subduction",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un matériau présente une aimantation rémanente. Cela signifie qu'il",
                        'explanation' => "Une aimantation rémanente est une aimantation conservée par un matériau même lorsque le champ extérieur qui l'a orienté n'est plus présent.",
                        'choices' => [
                            [
                                'choice_text' => "peut conserver une trace magnétique après la disparition du champ qui l'a aimanté",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "est forcément liquide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "ne contient jamais de minéraux magnétiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "ne peut pas se refroidir",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l'étude du magnétisme des roches peut-elle intéresser les géophysiciens ?",
                        'explanation' => "Le magnétisme des roches fournit des indices sur le champ ancien et sur certains processus tectoniques et géologiques.",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu'elle apporte des informations sur l'histoire du champ magnétique et certains mouvements géologiques",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu'elle permet de mesurer directement les précipitations",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu'elle remplace toutes les autres méthodes géophysiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que seules les roches calcaires sont magnétiques",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Flux de chaleur interne",
                'description' => "Comprendre simplement comment la chaleur interne de la Terre se transfère et comment elle peut être observée ou exploitée.",
                'duration' => 18,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Le flux géothermique correspond principalement à",
                        'explanation' => "Le flux géothermique décrit le transfert de chaleur interne qui traverse une surface donnée au cours du temps.",
                        'choices' => [
                            [
                                'choice_text' => "la quantité de chaleur qui traverse une surface donnée par unité de temps",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la vitesse des plaques par seconde",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la masse totale du noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la quantité de pluie tombée en une année",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle est une source importante de la chaleur interne de la Terre ?",
                        'explanation' => "La chaleur interne provient en partie de la désintégration radioactive et en partie de l'énergie thermique restante depuis la formation de la Terre.",
                        'choices' => [
                            [
                                'choice_text' => "La désintégration radioactive de certains éléments et la chaleur résiduelle de la formation de la Terre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La lumière de la Lune",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les marées océaniques uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le vent atmosphérique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans la Terre solide, la conduction de chaleur correspond à",
                        'explanation' => "La conduction transfère de l'énergie d'une zone chaude vers une zone froide sans transport global de matière à l'échelle considérée.",
                        'choices' => [
                            [
                                'choice_text' => "un transfert d'énergie thermique sans déplacement global du matériau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un déplacement de continents par les océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une production de lumière par les roches",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un mouvement obligatoire de l'air",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une couche où la convection est possible, le transfert de chaleur est facilité par",
                        'explanation' => "La convection transporte de la chaleur grâce au mouvement de matière plus chaude et plus froide dans un milieu où ce mouvement est possible.",
                        'choices' => [
                            [
                                'choice_text' => "le mouvement de matière chaude et froide",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "l'immobilité complète de la matière",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la disparition de toute différence de température",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la présence obligatoire d'eau liquide",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle observation de terrain peut aider à estimer le flux de chaleur interne ?",
                        'explanation' => "Des mesures de température à différentes profondeurs permettent d'étudier le gradient thermique et donc le flux de chaleur interne.",
                        'choices' => [
                            [
                                'choice_text' => "Des mesures de température avec la profondeur dans des forages",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le nombre de nuages à midi",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La salinité de l'air",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La longueur des jours",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans un forage, la température passe de 20 °C en surface à 35 °C à 500 m de profondeur. Quelle différence de température a été observée ?",
                        'explanation' => "La variation entre 20 °C et 35 °C est de 35 - 20 = 15 °C.",
                        'choices' => [
                            [
                                'choice_text' => "15 °C",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "25 °C",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "50 °C",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "515 °C",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la chaleur interne joue-t-elle un rôle dans la dynamique de la Terre ?",
                        'explanation' => "La chaleur interne contribue à alimenter les mouvements du manteau et, indirectement, une partie de la dynamique de la lithosphère.",
                        'choices' => [
                            [
                                'choice_text' => "Elle contribue aux mouvements internes qui participent à la dynamique du manteau et des plaques",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle empêche totalement les séismes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle refroidit directement l'atmosphère mondiale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle détermine seule toutes les précipitations",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une région présente un flux géothermique élevé. Quelle situation peut y être associée ?",
                        'explanation' => "Un flux géothermique élevé peut caractériser des régions où la chaleur remonte efficacement, notamment à proximité de systèmes volcaniques.",
                        'choices' => [
                            [
                                'choice_text' => "Une zone volcanique ou une région où la chaleur interne remonte plus efficacement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une région où le noyau a disparu",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une zone forcément située au centre d'un océan profond",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un endroit où la gravité est nulle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle unité convient à une puissance thermique mesurée en géophysique ?",
                        'explanation' => "Le watt, symbole W, est l'unité SI de puissance et convient pour exprimer un débit d'énergie thermique.",
                        'choices' => [
                            [
                                'choice_text' => "Watt",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pascal",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Tesla uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Mètre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un étudiant affirme : « Plus on descend sous terre, plus la température diminue toujours. » Quelle correction est la plus juste ?",
                        'explanation' => "Dans de nombreuses régions de la croûte, la température augmente avec la profondeur parce que la chaleur interne remonte vers la surface.",
                        'choices' => [
                            [
                                'choice_text' => "Dans de nombreuses régions, la température augmente avec la profondeur sur les premiers kilomètres",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La température reste toujours exactement constante",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La température devient instantanément celle de l'espace",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La température dépend uniquement de la météo du jour",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Mesurer en géophysique : unités et grandeurs",
                'description' => "Se repérer dans quelques unités et grandeurs courantes de la géophysique et choisir une mesure adaptée à une situation simple.",
                'duration' => 17,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quelle unité est utilisée pour exprimer une distance géologique de plusieurs kilomètres ?",
                        'explanation' => "Le kilomètre est une unité de longueur adaptée aux distances entre régions, failles ou structures géologiques.",
                        'choices' => [
                            [
                                'choice_text' => "Le kilomètre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le tesla",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le hertz",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le watt",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle unité mesure une fréquence, par exemple celle d'un signal sismique ?",
                        'explanation' => "Le hertz, Hz, mesure une fréquence, c'est-à-dire le nombre de répétitions d'un phénomène par seconde.",
                        'choices' => [
                            [
                                'choice_text' => "Le hertz",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le pascal",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le kilogramme",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le mètre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle unité est appropriée pour une pression ?",
                        'explanation' => "Le pascal, Pa, est l'unité SI de pression, importante pour décrire les conditions régnant en profondeur.",
                        'choices' => [
                            [
                                'choice_text' => "Le pascal",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le joule",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le tesla",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le litre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "La magnitude d'un séisme est une grandeur qui sert principalement à caractériser",
                        'explanation' => "La magnitude quantifie la taille du séisme selon l'échelle employée, en lien avec l'énergie libérée ou l'amplitude du signal.",
                        'choices' => [
                            [
                                'choice_text' => "la taille ou l'énergie libérée par le séisme selon l'échelle utilisée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la distance exacte parcourue par chaque personne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la température de l'atmosphère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la profondeur de l'océan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "L'intensité macrosismique décrit surtout",
                        'explanation' => "L'intensité macrosismique décrit les effets ressentis et les dommages observés en un lieu donné ; elle peut donc varier d'une ville à l'autre pour un même séisme.",
                        'choices' => [
                            [
                                'choice_text' => "les effets et dommages observés en un lieu donné",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la masse totale de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la composition du noyau interne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la vitesse du vent solaire",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une plaque tectonique se déplace à 5 cm/an. Quelle distance parcourt-elle en 20 ans, en supposant une vitesse constante ?",
                        'explanation' => "La distance parcourue est vitesse × temps : 5 cm/an × 20 ans = 100 cm, soit 1 m.",
                        'choices' => [
                            [
                                'choice_text' => "1 mètre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "10 cm",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "20 mètres",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "100 mètres",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sismomètre sert principalement à",
                        'explanation' => "Un sismomètre enregistre les mouvements du sol et permet d'analyser les signaux produits par les séismes.",
                        'choices' => [
                            [
                                'choice_text' => "enregistrer les mouvements du sol liés notamment aux séismes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "mesurer la salinité des océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "mesurer la composition chimique de l'atmosphère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "mesurer directement la densité du noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel instrument est spécialement conçu pour mesurer des variations du champ magnétique terrestre ?",
                        'explanation' => "Un magnétomètre mesure le champ magnétique ou ses variations, selon le modèle d'instrument utilisé.",
                        'choices' => [
                            [
                                'choice_text' => "Un magnétomètre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un pluviomètre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un thermomètre médical",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un anémomètre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle grandeur est exprimée en tesla ?",
                        'explanation' => "Le tesla, T, est l'unité SI associée à l'induction magnétique.",
                        'choices' => [
                            [
                                'choice_text' => "L'induction magnétique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La vitesse des plaques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La pression atmosphérique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le flux de chaleur",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un appareil indique 7,0 m/s pour la vitesse de propagation d'un signal. Que mesure-t-il directement ?",
                        'explanation' => "La valeur 7,0 m/s comporte une unité de longueur par temps : c'est donc une vitesse.",
                        'choices' => [
                            [
                                'choice_text' => "Une vitesse",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une masse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une densité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une énergie",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les géophysiciens précisent-ils toujours l'unité associée à une valeur numérique ?",
                        'explanation' => "L'unité précise ce que représente la valeur numérique et permet de comparer correctement des mesures de même nature.",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu'une même valeur numérique peut représenter des grandeurs physiques très différentes selon l'unité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que les nombres sans unité sont toujours faux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu'une unité change la nature chimique de la roche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que toutes les unités ont exactement la même signification",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Lire des observations géophysiques",
                'description' => "Interpréter des profils, tableaux et observations simples de gravité, magnétisme, sismologie et chaleur interne.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Un profil de température dans un forage indique 18 °C à 0 km, 28 °C à 0,5 km et 39 °C à 1 km. Quelle tendance simple observe-t-on ?",
                        'explanation' => "Le tableau montre une hausse régulière de 18 à 39 °C avec la profondeur : la température augmente donc dans le forage.",
                        'choices' => [
                            [
                                'choice_text' => "La température augmente avec la profondeur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La température diminue avec la profondeur",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La température reste constante",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le profil mesure en réalité la gravité",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un tableau donne les intervalles P-S suivants : station A = 2 s, B = 5 s, C = 9 s. Sans calcul supplémentaire, quelle station est la plus éloignée de l'épicentre ?",
                        'explanation' => "À mesure qu'une station s'éloigne, l'intervalle entre P et S tend à augmenter ; 9 s correspond donc ici à la station la plus éloignée.",
                        'choices' => [
                            [
                                'choice_text' => "La station C",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La station A",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La station B",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Impossible, car l'intervalle P-S ne varie jamais",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une carte présente une anomalie gravimétrique positive au-dessus d'une zone. Quelle interprétation élémentaire est possible ?",
                        'explanation' => "Une anomalie gravimétrique positive peut traduire la présence de masses plus denses que la moyenne sous la zone étudiée.",
                        'choices' => [
                            [
                                'choice_text' => "Des matériaux plus denses que la moyenne peuvent contribuer à cette anomalie",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La zone contient forcément un volcan actif",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La température de l'air y est forcément plus élevée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La zone est nécessairement constituée d'eau douce",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Sur une carte magnétique, des bandes alternées de valeurs opposées sont observées au fond d'un océan. Quelle hypothèse simple peut expliquer ce motif ?",
                        'explanation' => "Les bandes magnétiques du plancher océanique enregistrent les inversions successives du champ magnétique au moment où les nouvelles roches se mettent en place.",
                        'choices' => [
                            [
                                'choice_text' => "Des enregistrements successifs de polarités magnétiques lors de la formation du plancher océanique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Des marées qui inversent la gravité chaque semaine",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Des changements quotidiens de salinité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Des couches de pluie fossilisée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un sismogramme montre une première arrivée à 10:15:20 et une seconde à 10:15:35. Le délai entre les deux arrivées est de",
                        'explanation' => "De 10:15:20 à 10:15:35, il s'écoule 15 secondes.",
                        'choices' => [
                            [
                                'choice_text' => "15 secondes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "5 secondes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "20 secondes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "35 secondes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux zones ont des températures mesurées à 1 km de profondeur : zone X = 35 °C, zone Y = 55 °C. Laquelle présente le gradient thermique moyen le plus élevé si les températures de surface sont identiques ?",
                        'explanation' => "Si les températures de surface sont identiques, la zone qui présente la température la plus élevée à 1 km a un gradient moyen plus fort.",
                        'choices' => [
                            [
                                'choice_text' => "La zone Y",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La zone X",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles ont forcément le même gradient",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "On ne peut jamais comparer deux gradients avec des températures",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un capteur magnétique enregistre une variation nette pendant une activité solaire intense. Quelle interprétation est la plus cohérente ?",
                        'explanation' => "Une forte activité solaire peut perturber temporairement le champ magnétique terrestre et donc les mesures magnétiques.",
                        'choices' => [
                            [
                                'choice_text' => "Le champ magnétique local ou régional peut avoir été perturbé par une activité géomagnétique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le capteur a mesuré une éruption volcanique avec certitude",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La masse de la Terre a doublé",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La rotation de la Terre s'est arrêtée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un profil montre que la vitesse des ondes P augmente entre deux couches géologiques. Que peut-on dire simplement ?",
                        'explanation' => "Une variation de vitesse des ondes P signale un changement des propriétés du milieu, par exemple de densité ou d'élasticité.",
                        'choices' => [
                            [
                                'choice_text' => "Les propriétés du matériau traversé changent, ce qui modifie la vitesse des ondes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La source du séisme devient automatiquement plus forte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les ondes P se transforment toujours en ondes S",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La Terre devient plate entre les deux couches",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un réseau de trois stations localise un séisme à l'intersection de trois cercles de distances calculées. Que représente ce point d'intersection ?",
                        'explanation' => "La triangulation sismique utilise les distances estimées à plusieurs stations pour déterminer la position la plus probable de l'épicentre.",
                        'choices' => [
                            [
                                'choice_text' => "Une estimation de la position de l'épicentre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La limite du noyau interne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le pôle magnétique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le centre de gravité de l'océan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une mesure gravimétrique est très légèrement plus faible sur une grande structure souterraine. Quel type de matériau peut expliquer cela, toutes choses égales par ailleurs ?",
                        'explanation' => "À conditions comparables, une masse souterraine moins dense contribue à une gravité légèrement plus faible et donc à une anomalie négative.",
                        'choices' => [
                            [
                                'choice_text' => "Un matériau moins dense que le milieu environnant",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un matériau obligatoirement plus magnétique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un matériau forcément plus chaud de 100 °C",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un matériau sans masse",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un schéma montre des lignes de champ magnétique plus serrées dans une région. Sans autre information, que peut-on dire ?",
                        'explanation' => "Dans une représentation par lignes de champ, des lignes plus serrées indiquent conventionnellement un champ plus intense.",
                        'choices' => [
                            [
                                'choice_text' => "Le champ magnétique est plus intense dans cette région du schéma",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La gravité y est nulle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La température y est nécessairement plus élevée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La région est obligatoirement en mer",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel résultat est le plus directement utile pour repérer une discontinuité profonde grâce aux ondes sismiques ?",
                        'explanation' => "Une discontinuité profonde se repère notamment par un changement abrupt de vitesse, de direction ou de comportement des ondes sismiques.",
                        'choices' => [
                            [
                                'choice_text' => "Un changement net de vitesse ou de trajectoire des ondes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une variation de couleur du ciel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une hausse de la salinité de l'océan",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse du niveau des nuages",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Raisonnement géophysique : mini-cas",
                'description' => "Appliquer des concepts fondamentaux de géophysique à de petites situations inspirées des observations de terrain et de laboratoire.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Une région connaît plusieurs séismes peu profonds alignés sur une longue zone. Quelle interprétation géophysique simple peut être envisagée ?",
                        'explanation' => "Un alignement de séismes peu profonds peut signaler une faille active ou une zone où des contraintes tectoniques se concentrent.",
                        'choices' => [
                            [
                                'choice_text' => "L'existence d'une faille ou d'une limite tectonique active",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La présence obligatoire d'un glacier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une baisse certaine du champ magnétique terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une variation saisonnière de la densité de l'air",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Lors d'une expérience, deux échantillons de même volume donnent des anomalies gravimétriques différentes lorsqu'ils sont placés sous un capteur. Lequel est probablement plus dense ?",
                        'explanation' => "À distance et conditions identiques, une anomalie gravimétrique plus positive est compatible avec une masse souterraine plus dense.",
                        'choices' => [
                            [
                                'choice_text' => "Celui associé à l'anomalie la plus positive, toutes choses égales par ailleurs",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Celui associé à l'anomalie la plus négative, toujours",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils ont nécessairement la même densité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La gravité ne dépend pas des matériaux",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une roche fond à haute température mais reste solide dans les conditions où elle est observée. Quelle affirmation faut-il éviter ?",
                        'explanation' => "La température seule ne suffit pas à décider qu'une roche est liquide : son état dépend aussi des conditions de pression et de sa composition.",
                        'choices' => [
                            [
                                'choice_text' => "Dire qu'elle est liquide simplement parce qu'elle est chaude",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Relier son état physique à la température et à la pression",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Reconnaître qu'une roche chaude peut rester solide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Distinguer température et état physique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après un séisme, une personne affirme que la magnitude est plus grande dans la ville où les dégâts sont les plus importants. Quelle correction est correcte ?",
                        'explanation' => "La magnitude caractérise le séisme dans son ensemble, alors que l'intensité décrit ses effets en un lieu précis.",
                        'choices' => [
                            [
                                'choice_text' => "La magnitude caractérise le séisme, tandis que les effets locaux relèvent notamment de l'intensité",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La magnitude est une mesure de la hauteur des bâtiments",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La magnitude dépend uniquement du type de sol d'une ville",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Magnitude et intensité désignent exactement la même mesure",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un capteur enregistre une première arrivée P à 12 s après le début du signal et une arrivée S à 20 s. Que vaut le délai P-S ?",
                        'explanation' => "Le délai P-S est obtenu en soustrayant les temps d'arrivée : 20 - 12 = 8 s.",
                        'choices' => [
                            [
                                'choice_text' => "8 secondes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "12 secondes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "20 secondes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "32 secondes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un forage traverse une roche dont la température augmente régulièrement avec la profondeur. Quel mécanisme de transfert de chaleur est directement mis en évidence par ce gradient ?",
                        'explanation' => "Un gradient thermique vers des températures plus élevées en profondeur est cohérent avec un flux de chaleur allant vers la surface.",
                        'choices' => [
                            [
                                'choice_text' => "La présence d'un flux de chaleur allant vers la surface",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une inversion obligatoire du champ magnétique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une marée océanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une diminution de la gravité vers la surface",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une boussole placée près d'un gros objet en acier dévie légèrement par rapport à son orientation habituelle. Quelle précaution expérimentale faut-il prendre ?",
                        'explanation' => "Les objets métalliques proches peuvent perturber une boussole ; une mesure fiable demande de les éloigner autant que possible.",
                        'choices' => [
                            [
                                'choice_text' => "Éloigner les objets métalliques susceptibles de perturber la mesure",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Refroidir immédiatement la boussole à 0 °C",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La plonger dans l'eau pour annuler le magnétisme",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La placer dans une boîte en papier humide",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un géophysicien choisit entre sismomètre et magnétomètre pour étudier la propagation d'un séisme. Quel choix est le plus adapté ?",
                        'explanation' => "Le sismomètre est l'instrument adapté à l'enregistrement des vibrations du sol provoquées par un séisme.",
                        'choices' => [
                            [
                                'choice_text' => "Le sismomètre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le magnétomètre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le pluviomètre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le baromètre seul",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une équipe observe une forte anomalie de chaleur près d'un volcan actif. Quelle relation est cohérente ?",
                        'explanation' => "Une anomalie thermique près d'un volcan peut résulter d'une remontée de chaleur associée au système magmatique ou hydrothermal.",
                        'choices' => [
                            [
                                'choice_text' => "Une remontée importante de chaleur interne peut accompagner l'activité magmatique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le volcan refroidit nécessairement le sous-sol",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La chaleur prouve que le noyau est directement exposé",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La chaleur locale signifie que toute la planète se réchauffe au même rythme",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un étudiant place dans le même classement la croûte, le manteau et le noyau externe en les appelant tous des matériaux « rocheux solides ». Quelle erreur identifie-t-on ?",
                        'explanation' => "Le noyau externe n'est pas un milieu rocheux solide ; il est liquide, tandis que la croûte et le manteau sont majoritairement solides dans leur état ordinaire.",
                        'choices' => [
                            [
                                'choice_text' => "Le noyau externe est liquide à l'échelle géologique, donc cette classification est incorrecte",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La croûte n'est jamais solide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le manteau est entièrement gazeux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le noyau externe est situé dans l'atmosphère",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Révision intégrative de géophysique",
                'description' => "Mobiliser ensemble les notions de structure terrestre, sismologie, magnétisme, gravité et chaleur interne dans des questions de synthèse de niveau débutant.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Quelle combinaison associe correctement une méthode et la propriété étudiée ?",
                        'explanation' => "La sismologie analyse les ondes sismiques et leur propagation dans le sous-sol, ce qui renseigne sur sa structure.",
                        'choices' => [
                            [
                                'choice_text' => "Sismologie — propagation des ondes dans le sous-sol",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Gravimétrie — quantité de pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Magnétométrie — vitesse du vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Géothermie — salinité de l'eau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le noyau externe est-il considéré comme liquide ?",
                        'explanation' => "Le comportement des ondes S apporte une preuve importante que le noyau externe est liquide.",
                        'choices' => [
                            [
                                'choice_text' => "Le comportement des ondes S et d'autres données géophysiques montrent qu'elles ne le traversent pas comme un milieu solide",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu'il est composé uniquement d'eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu'il est plus froid que la croûte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu'il se trouve au-dessus de l'atmosphère",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle succession représente correctement les grandes enveloppes en allant de la surface vers le centre ?",
                        'explanation' => "En allant de la surface vers le centre, on rencontre d'abord la croûte, puis le manteau, puis le noyau.",
                        'choices' => [
                            [
                                'choice_text' => "Croûte → manteau → noyau",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Noyau → manteau → croûte",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Manteau → croûte → noyau uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Croûte → atmosphère → noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une station mesure un délai P-S plus grand qu'une autre station pour le même séisme. La première station est, en première approximation",
                        'explanation' => "Un délai P-S plus grand signifie que la station est, en première approximation, plus éloignée de la source du séisme.",
                        'choices' => [
                            [
                                'choice_text' => "plus éloignée de l'épicentre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "plus proche du centre de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "nécessairement située sur une plaque océanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "forcément dans le noyau externe",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle observation relie directement la géophysique au mouvement de chaleur interne ?",
                        'explanation' => "Un gradient de température mesuré dans le sous-sol est un indicateur direct de la présence et de l'intensité locale du transfert de chaleur interne.",
                        'choices' => [
                            [
                                'choice_text' => "L'existence d'un gradient de température avec la profondeur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le changement quotidien de luminosité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La formation des nuages",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La variation des marées de plage",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un modèle simplifié indique une densité de 2,7 g/cm³ pour une roche A et 3,3 g/cm³ pour une roche B. La roche B est",
                        'explanation' => "À 3,3 g/cm³, la roche B possède une densité supérieure à celle de la roche A à 2,7 g/cm³.",
                        'choices' => [
                            [
                                'choice_text' => "plus dense que la roche A",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "moins dense que la roche A",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "forcément plus froide",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "forcément liquide",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Lequel de ces couples contient deux grandeurs réellement utilisées en géophysique ?",
                        'explanation' => "La magnitude et le flux de chaleur sont deux exemples de grandeurs effectivement exploitées en géophysique.",
                        'choices' => [
                            [
                                'choice_text' => "Magnitude et flux de chaleur",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Couleur du ciel et humidité du pain",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pointure et longueur des feuilles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Goût et transparence de l'air",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle phrase résume correctement la différence entre champ magnétique et gravité ?",
                        'explanation' => "La gravité est liée aux masses, tandis que le magnétisme concerne des champs magnétiques et les interactions avec des matériaux ou charges appropriés.",
                        'choices' => [
                            [
                                'choice_text' => "La gravité agit sur les masses, tandis que le champ magnétique concerne les interactions magnétiques",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La gravité agit uniquement sur les aimants",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le champ magnétique est la cause de toutes les marées",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux grandeurs sont exactement la même propriété physique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un signal sismique parcourt 42 km à vitesse constante de 7 km/s. Combien de temps met-il ?",
                        'explanation' => "Le temps de trajet est égal à 42 km / 7 km/s = 6 s.",
                        'choices' => [
                            [
                                'choice_text' => "6 secondes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "7 secondes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "35 secondes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "49 secondes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle proposition décrit le mieux le rôle des méthodes géophysiques ?",
                        'explanation' => "Les méthodes géophysiques permettent d'inférer des propriétés du sous-sol à partir de mesures indirectes, sans devoir observer directement toutes les profondeurs.",
                        'choices' => [
                            [
                                'choice_text' => "Elles permettent d'étudier des propriétés du sous-sol et de l'intérieur de la Terre sans tout observer directement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles rendent inutiles toutes les observations de terrain",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles servent uniquement à mesurer la météo",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles permettent de voir directement chaque atome du noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une région présente une anomalie gravimétrique négative et un flux géothermique élevé. Que faut-il conclure au niveau débutant ?",
                        'explanation' => "Une anomalie gravimétrique et un flux thermique élevé décrivent deux observations distinctes : elles montrent une particularité du sous-sol sans identifier à elles seules un matériau précis.",
                        'choices' => [
                            [
                                'choice_text' => "Ces deux observations signalent des propriétés particulières du sous-sol, mais ne suffisent pas à identifier à elles seules un matériau précis",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles prouvent toujours la présence d'un seul minéral précis",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles prouvent que la région est située au pôle Nord",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles signifient que la gravité est devenue nulle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la géophysique utilise-t-elle plusieurs méthodes plutôt qu'une seule ?",
                        'explanation' => "La combinaison de méthodes réduit les ambiguïtés, car gravité, magnétisme, sismologie et température ne renseignent pas exactement sur les mêmes propriétés.",
                        'choices' => [
                            [
                                'choice_text' => "Parce que chaque méthode renseigne sur des propriétés différentes et que leur combinaison améliore l'interprétation",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce qu'aucune mesure géophysique ne produit jamais de donnée utile",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les instruments fonctionnent seulement une fois par an",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les mêmes données doivent toujours être répétées trois fois",
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
