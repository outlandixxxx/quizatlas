<?php

namespace Database\Seeders;

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
                        'explanation' => "Le manteau se trouve sous la croûte : c’est la grande enveloppe rocheuse comprise entre la croûte et le noyau.",
                        'choices' => [
                            ['choice_text' => "Le noyau externe", 'is_correct' => false],
                            ['choice_text' => "Le noyau interne", 'is_correct' => false],
                            ['choice_text' => "La croûte océanique", 'is_correct' => false],
                            ['choice_text' => "Le manteau", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Samira prépare sa fiche de révision. Quelle phrase décrit correctement la croûte terrestre ?",
                        'explanation' => "La croûte est l’enveloppe solide la plus externe, très fine par rapport au reste du globe. Elle peut être continentale ou océanique.",
                        'choices' => [
                            ['choice_text' => "C’est la couche rocheuse la plus épaisse, entre le manteau et le noyau", 'is_correct' => false],
                            ['choice_text' => "C’est une enveloppe liquide qui entoure le noyau interne", 'is_correct' => false],
                            ['choice_text' => "C’est la couche de gaz qui entoure toute la planète", 'is_correct' => false],
                            ['choice_text' => "C’est la fine enveloppe solide qui forme la surface de la planète", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Sur un schéma en coupe, Karim colore le noyau interne en jaune. Quelle enveloppe doit-il colorer juste autour du jaune ?",
                        'explanation' => "Autour du noyau interne vient le noyau externe, lui-même entouré par le manteau.",
                        'choices' => [
                            ['choice_text' => "Le manteau", 'is_correct' => false],
                            ['choice_text' => "La croûte océanique", 'is_correct' => false],
                            ['choice_text' => "Le noyau externe", 'is_correct' => true],
                            ['choice_text' => "La lithosphère", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le manteau est plus dense que la croûte. Qu’est-ce qui l’explique le mieux ?",
                        'explanation' => "Les roches du manteau sont plus riches en fer et en magnésium que celles de la croûte, donc plus lourdes pour un même volume.",
                        'choices' => [
                            ['choice_text' => "Ses roches contiennent plus de quartz et de feldspath", 'is_correct' => false],
                            ['choice_text' => "Il renferme moins de roches et plus de gaz dissous", 'is_correct' => false],
                            ['choice_text' => "Ses roches contiennent plus de fer et de magnésium", 'is_correct' => true],
                            ['choice_text' => "Il est refroidi en permanence par l’eau des océans", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle est la seule enveloppe interne de la Terre qui soit liquide ?",
                        'explanation' => "Le noyau externe est un métal liquide en mouvement, alors que le noyau interne reste solide malgré la chaleur.",
                        'choices' => [
                            ['choice_text' => "Le noyau interne", 'is_correct' => false],
                            ['choice_text' => "Le noyau externe", 'is_correct' => true],
                            ['choice_text' => "Le manteau supérieur", 'is_correct' => false],
                            ['choice_text' => "La croûte océanique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le rayon moyen de la Terre est d’environ 6 371 km. Un forage imaginaire descend à 5 300 km sous la surface. Dans quelle région se trouve-t-il ?",
                        'explanation' => "Le noyau interne commence vers 5 150 km de profondeur : à 5 300 km, on y est déjà entré.",
                        'choices' => [
                            ['choice_text' => "Dans le noyau externe", 'is_correct' => false],
                            ['choice_text' => "Dans le manteau inférieur", 'is_correct' => false],
                            ['choice_text' => "Dans le noyau interne", 'is_correct' => true],
                            ['choice_text' => "Dans la croûte océanique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "De quoi le noyau de la Terre est-il principalement composé ?",
                        'explanation' => "Le noyau est fait surtout de fer allié à du nickel, ce qui explique sa très forte densité.",
                        'choices' => [
                            ['choice_text' => "Surtout de fer, mêlé à un peu de nickel", 'is_correct' => true],
                            ['choice_text' => "Surtout d’aluminium, mêlé à un peu de silicium", 'is_correct' => false],
                            ['choice_text' => "Surtout de cuivre, mêlé à un peu de zinc", 'is_correct' => false],
                            ['choice_text' => "Surtout de plomb, mêlé à un peu d’étain", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un modèle de la Terre indique que la densité augmente vers le centre. Quelle conclusion est cohérente ?",
                        'explanation' => "Plus on descend, plus les matériaux sont lourds pour un même volume, et la densité moyenne grimpe vers le centre.",
                        'choices' => [
                            ['choice_text' => "Les couches profondes sont plus légères que la croûte", 'is_correct' => false],
                            ['choice_text' => "Les couches profondes sont plus denses que la croûte", 'is_correct' => true],
                            ['choice_text' => "Les couches ont la même densité moyenne", 'is_correct' => false],
                            ['choice_text' => "La densité augmente puis s’annule au centre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle enveloppe comprend la croûte et la partie rigide du manteau supérieur ?",
                        'explanation' => "La lithosphère regroupe la croûte et la partie rigide du manteau supérieur.",
                        'choices' => [
                            ['choice_text' => "La lithosphère", 'is_correct' => true],
                            ['choice_text' => "L’asthénosphère", 'is_correct' => false],
                            ['choice_text' => "La biosphère", 'is_correct' => false],
                            ['choice_text' => "Le noyau externe", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quand on s’enfonce dans la Terre, que fait la pression ?",
                        'explanation' => "Chaque couche supporte le poids de toutes celles qui la surmontent : la pression grimpe donc avec la profondeur.",
                        'choices' => [
                            ['choice_text' => "Elle diminue, car les roches deviennent de plus en plus fluides", 'is_correct' => false],
                            ['choice_text' => "Elle reste constante d’une couche à l’autre", 'is_correct' => false],
                            ['choice_text' => "Elle dépend de la température propre à chaque couche", 'is_correct' => false],
                            ['choice_text' => "Elle augmente avec le poids des roches situées au-dessus", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une coupe simplifiée indique : croûte 0-35 km, manteau 35-2 900 km, noyau 2 900-6 371 km. Quelle limite se trouve à environ 2 900 km de profondeur ?",
                        'explanation' => "Vers 2 900 km de profondeur se trouve la limite majeure entre le manteau et le noyau.",
                        'choices' => [
                            ['choice_text' => "La limite entre la croûte et le manteau", 'is_correct' => false],
                            ['choice_text' => "La limite entre le manteau et le noyau", 'is_correct' => true],
                            ['choice_text' => "La limite entre le noyau externe et le noyau interne", 'is_correct' => false],
                            ['choice_text' => "La limite entre la lithosphère et l’asthénosphère", 'is_correct' => false],
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
                        'explanation' => "À volume égal, le bloc de 4 kg contient deux fois plus de matière que celui de 2 kg : il est deux fois plus dense.",
                        'choices' => [
                            ['choice_text' => "Le bloc A, deux fois plus dense", 'is_correct' => false],
                            ['choice_text' => "Les deux, car le volume est identique", 'is_correct' => false],
                            ['choice_text' => "Le bloc B, deux fois plus dense", 'is_correct' => true],
                            ['choice_text' => "Impossible : il faut connaître la température", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle formule donne la densité d’un matériau ?",
                        'explanation' => "On obtient la densité en divisant la masse par le volume ; elle dit combien de matière tient dans un espace donné.",
                        'choices' => [
                            ['choice_text' => "Le volume divisé par la masse", 'is_correct' => false],
                            ['choice_text' => "La masse divisée par le volume", 'is_correct' => true],
                            ['choice_text' => "La masse multipliée par le volume", 'is_correct' => false],
                            ['choice_text' => "La masse divisée par la température", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Nadia compare deux échantillons de même masse. La roche X occupe moins de volume que la roche Y. Que peut-on conclure ?",
                        'explanation' => "À masse égale, la roche qui tient dans le plus petit volume est la plus dense.",
                        'choices' => [
                            ['choice_text' => "X est plus dense que Y", 'is_correct' => true],
                            ['choice_text' => "Y est plus dense que X", 'is_correct' => false],
                            ['choice_text' => "X et Y ont la même densité", 'is_correct' => false],
                            ['choice_text' => "X est plus chaude que Y", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur Terre, quelle force attire une masse vers le centre de la planète ?",
                        'explanation' => "La gravité terrestre attire les masses vers le centre de la Terre. C’est elle qui donne leur poids aux objets près de la surface.",
                        'choices' => [
                            ['choice_text' => "Le magnétisme", 'is_correct' => false],
                            ['choice_text' => "La poussée d’Archimède", 'is_correct' => false],
                            ['choice_text' => "La gravité", 'is_correct' => true],
                            ['choice_text' => "La force de Coriolis", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un géophysicien mesure la pesanteur au pied d’une colline, puis à son sommet, 300 m plus haut. Que constate-t-il ?",
                        'explanation' => "En montant, on s’éloigne un peu du centre de la Terre : la pesanteur diminue très légèrement.",
                        'choices' => [
                            ['choice_text' => "Une valeur très légèrement plus faible", 'is_correct' => true],
                            ['choice_text' => "Une valeur très légèrement plus forte", 'is_correct' => false],
                            ['choice_text' => "Une valeur environ deux fois plus faible", 'is_correct' => false],
                            ['choice_text' => "Une valeur identique dans les deux cas", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un gravimètre enregistre une petite variation locale de la pesanteur au-dessus d’un terrain. Que peut-elle indiquer ?",
                        'explanation' => "Les écarts de pesanteur traduisent le plus souvent des différences de densité entre les matériaux du sous-sol.",
                        'choices' => [
                            ['choice_text' => "Une forte hausse de la température de l’air", 'is_correct' => false],
                            ['choice_text' => "Une inversion récente du champ magnétique", 'is_correct' => false],
                            ['choice_text' => "Une baisse brutale de l’humidité de l’air", 'is_correct' => false],
                            ['choice_text' => "Des roches de densités différentes sous le sol", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une masse de 6 kg occupe un volume de 3 L. Sa densité moyenne est de",
                        'explanation' => "La densité vaut masse divisée par volume : 6 kg / 3 L = 2 kg/L.",
                        'choices' => [
                            ['choice_text' => "0,5 kg/L", 'is_correct' => false],
                            ['choice_text' => "3 kg/L", 'is_correct' => false],
                            ['choice_text' => "18 kg/L", 'is_correct' => false],
                            ['choice_text' => "2 kg/L", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "À quoi servent les cartes d’anomalies gravimétriques en géophysique ?",
                        'explanation' => "Ces cartes montrent où la pesanteur s’écarte de la moyenne, ce qui révèle des contrastes de densité en profondeur.",
                        'choices' => [
                            ['choice_text' => "À mesurer la composition chimique exacte de chaque roche", 'is_correct' => false],
                            ['choice_text' => "À repérer des zones du sous-sol où la densité diffère", 'is_correct' => true],
                            ['choice_text' => "À suivre la trajectoire des ondes sismiques", 'is_correct' => false],
                            ['choice_text' => "À déterminer l’âge des roches du sous-sol", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Hamza affirme qu’un gros bloc de granite est forcément plus dense qu’un petit caillou de basalte, puisqu’il pèse plus. Que lui répondre ?",
                        'explanation' => "Un bloc peut peser davantage simplement parce qu’il est plus gros ; la densité compare la masse au volume.",
                        'choices' => [
                            ['choice_text' => "Non : il faut aussi tenir compte du volume du bloc", 'is_correct' => true],
                            ['choice_text' => "Il a raison : plus une roche pèse, plus elle est dense", 'is_correct' => false],
                            ['choice_text' => "La densité dépend surtout de la couleur de la roche", 'is_correct' => false],
                            ['choice_text' => "On ne peut pas mesurer la densité d’une roche", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle unité est couramment utilisée pour exprimer la densité d’une roche ?",
                        'explanation' => "La densité des roches s’exprime couramment en grammes par centimètre cube, g/cm³.",
                        'choices' => [
                            ['choice_text' => "m/s²", 'is_correct' => false],
                            ['choice_text' => "N/m²", 'is_correct' => false],
                            ['choice_text' => "g/cm³", 'is_correct' => true],
                            ['choice_text' => "kg/s", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Ondes sismiques : P et S",
                'description' => "Reconnaître les principales ondes sismiques et utiliser leur comportement simple pour comprendre l’étude de l’intérieur de la Terre.",
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Lors d’un séisme, quelle onde arrive en premier à une station d’enregistrement éloignée ?",
                        'explanation' => "Les ondes P sont les plus rapides des ondes sismiques : elles sont donc enregistrées avant les ondes S.",
                        'choices' => [
                            ['choice_text' => "L’onde S", 'is_correct' => false],
                            ['choice_text' => "L’onde de Love", 'is_correct' => false],
                            ['choice_text' => "L’onde P", 'is_correct' => true],
                            ['choice_text' => "L’onde de Rayleigh", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les ondes P sont aussi appelées ondes de compression. Que font-elles subir au sol qu’elles traversent ?",
                        'explanation' => "Au passage d’une onde P, la matière est tour à tour comprimée puis étirée, dans le sens où l’onde avance.",
                        'choices' => [
                            ['choice_text' => "Des cisaillements perpendiculaires à leur trajet", 'is_correct' => false],
                            ['choice_text' => "Des compressions et des dilatations successives", 'is_correct' => true],
                            ['choice_text' => "Une rotation d’ensemble des roches", 'is_correct' => false],
                            ['choice_text' => "Un déplacement vertical des roches en surface", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel milieu une onde S est-elle incapable de traverser ?",
                        'explanation' => "Une onde S cisaille la matière, et un liquide ne résiste pas au cisaillement : elle s’y éteint.",
                        'choices' => [
                            ['choice_text' => "Un solide, comme le granite", 'is_correct' => false],
                            ['choice_text' => "Un solide chaud, comme le manteau", 'is_correct' => false],
                            ['choice_text' => "Un liquide, comme le noyau externe", 'is_correct' => true],
                            ['choice_text' => "Un solide fin, comme la croûte océanique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Aucune onde S ne traverse le noyau externe. Que peut-on en déduire ?",
                        'explanation' => "Seul un milieu liquide arrête les ondes S : le noyau externe se comporte donc comme un liquide.",
                        'choices' => [
                            ['choice_text' => "Que le noyau externe est plus dense que le noyau interne", 'is_correct' => false],
                            ['choice_text' => "Que le noyau externe est plus froid que le manteau", 'is_correct' => false],
                            ['choice_text' => "Que le noyau externe absorbe aussi les ondes P", 'is_correct' => false],
                            ['choice_text' => "Que le noyau externe est liquide", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "À la station de Fès, l’onde S arrive 8 s après l’onde P ; à celle d’Agadir, 20 s après. Que peut-on dire de la distance à l’épicentre ?",
                        'explanation' => "Plus on s’éloigne de l’épicentre, plus l’écart entre les arrivées P et S s’allonge.",
                        'choices' => [
                            ['choice_text' => "Agadir est plus éloignée que Fès", 'is_correct' => true],
                            ['choice_text' => "Fès est plus éloignée qu’Agadir", 'is_correct' => false],
                            ['choice_text' => "Fès et Agadir sont à la même distance", 'is_correct' => false],
                            ['choice_text' => "On ne peut pas comparer sans la magnitude", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur un sismogramme, de petites oscillations apparaissent d’abord, puis des secousses bien plus fortes quelques secondes après. À quoi correspondent-elles ?",
                        'explanation' => "L’onde P arrive la première avec une amplitude modérée, puis l’onde S, souvent plus forte, la suit.",
                        'choices' => [
                            ['choice_text' => "Les premières sont des ondes P, les suivantes des ondes S", 'is_correct' => true],
                            ['choice_text' => "Les premières sont des ondes S, les suivantes des ondes P", 'is_correct' => false],
                            ['choice_text' => "Les deux séries sont des ondes P de force différente", 'is_correct' => false],
                            ['choice_text' => "Les petites sont des ondes de surface, les fortes des ondes P", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment appelle-t-on le point de la surface situé à la verticale du foyer d’un séisme ?",
                        'explanation' => "Le foyer est le point de rupture en profondeur ; l’épicentre est le point de la surface situé juste au-dessus.",
                        'choices' => [
                            ['choice_text' => "Le foyer", 'is_correct' => false],
                            ['choice_text' => "L’épicentre", 'is_correct' => true],
                            ['choice_text' => "La faille", 'is_correct' => false],
                            ['choice_text' => "La zone d’ombre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Personne n’a jamais atteint le noyau de la Terre. Comment les sismologues l’étudient-ils ?",
                        'explanation' => "La vitesse et la trajectoire des ondes changent selon les matériaux traversés, ce qui renseigne sur l’intérieur du globe.",
                        'choices' => [
                            ['choice_text' => "En forant un puits jusqu’au centre de la planète", 'is_correct' => false],
                            ['choice_text' => "En analysant comment les ondes de séisme le traversent", 'is_correct' => true],
                            ['choice_text' => "En photographiant l’intérieur depuis un satellite", 'is_correct' => false],
                            ['choice_text' => "En prélevant des roches du noyau lors des éruptions", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une onde P file à 6 km/s dans la croûte. Elle doit parcourir 30 km pour atteindre une station. Combien de temps met-elle ?",
                        'explanation' => "Le temps de trajet vaut distance / vitesse : 30 km / 6 km/s = 5 s.",
                        'choices' => [
                            ['choice_text' => "6 secondes", 'is_correct' => false],
                            ['choice_text' => "24 secondes", 'is_correct' => false],
                            ['choice_text' => "5 secondes", 'is_correct' => true],
                            ['choice_text' => "180 secondes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle est la cause d’une zone d’ombre sismique ?",
                        'explanation' => "Au contact du noyau, les ondes P sont déviées et les ondes S arrêtées, ce qui laisse un secteur du globe sans réception directe.",
                        'choices' => [
                            ['choice_text' => "Des ondes absorbées par l’atmosphère avant d’arriver", 'is_correct' => false],
                            ['choice_text' => "Des ondes bloquées par les océans en surface", 'is_correct' => false],
                            ['choice_text' => "Des ondes qui ne se forment qu’à courte distance", 'is_correct' => false],
                            ['choice_text' => "Des ondes déviées ou stoppées en traversant le noyau", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Les ondes P traversent-elles le noyau externe liquide ?",
                        'explanation' => "Les ondes P passent dans les liquides ; à l’entrée du noyau externe, elles ralentissent et changent de direction.",
                        'choices' => [
                            ['choice_text' => "Oui, mais elles ralentissent et sont déviées", 'is_correct' => true],
                            ['choice_text' => "Oui, à la même vitesse que dans le manteau", 'is_correct' => false],
                            ['choice_text' => "Non, elles sont arrêtées comme les ondes S", 'is_correct' => false],
                            ['choice_text' => "Non, elles s’arrêtent à la base du manteau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Karim déplace sa station vers un terrain où les ondes sismiques vont plus vite. À distance égale du séisme, que change-t-il ?",
                        'explanation' => "À distance égale, une onde plus rapide met moins de temps, alors que la magnitude du séisme ne dépend pas de la station.",
                        'choices' => [
                            ['choice_text' => "Les ondes y arrivent plus tard", 'is_correct' => false],
                            ['choice_text' => "Le séisme y paraît de plus grande magnitude", 'is_correct' => false],
                            ['choice_text' => "Les ondes S y arrivent avant les ondes P", 'is_correct' => false],
                            ['choice_text' => "Les ondes y arrivent plus tôt", 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Le champ magnétique terrestre",
                'description' => "Découvrir l’origine générale du champ magnétique terrestre, ses manifestations et quelques observations simples utilisées en géophysique.",
                'duration' => 18,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Yassine se perd en randonnée dans l’Atlas. Comment sa boussole peut-elle l’aider ?",
                        'explanation' => "L’aiguille est un petit aimant qui s’oriente selon le champ magnétique terrestre, ce qui donne la direction du nord magnétique.",
                        'choices' => [
                            ['choice_text' => "L’aiguille pointe vers le plus haut sommet proche", 'is_correct' => false],
                            ['choice_text' => "L’aiguille suit la direction du vent dominant", 'is_correct' => false],
                            ['choice_text' => "L’aiguille s’aligne sur le champ magnétique de la Terre", 'is_correct' => true],
                            ['choice_text' => "L’aiguille indique la verticale, comme un fil à plomb", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans quelle couche de la Terre naît principalement le champ magnétique ?",
                        'explanation' => "Le fer liquide du noyau externe est en mouvement constant, et ces courants engendrent le champ magnétique.",
                        'choices' => [
                            ['choice_text' => "Dans le noyau externe, en métal liquide", 'is_correct' => true],
                            ['choice_text' => "Dans le noyau interne, en fer solide", 'is_correct' => false],
                            ['choice_text' => "Dans le manteau, en roches fluides", 'is_correct' => false],
                            ['choice_text' => "Dans la croûte, en roches aimantées", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Comment appelle-t-on la région magnétique entourant la Terre et interagissant avec le vent solaire ?",
                        'explanation' => "La magnétosphère est la région dominée par le champ magnétique terrestre, celle qui interagit avec le vent solaire.",
                        'choices' => [
                            ['choice_text' => "L’ionosphère", 'is_correct' => false],
                            ['choice_text' => "La magnétosphère", 'is_correct' => true],
                            ['choice_text' => "L’exosphère", 'is_correct' => false],
                            ['choice_text' => "La stratosphère", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est le principal intérêt du champ magnétique pour la vie sur Terre ?",
                        'explanation' => "Les particules chargées du vent solaire sont en grande partie déviées autour de la Terre, ce qui protège l’atmosphère.",
                        'choices' => [
                            ['choice_text' => "Il dévie une partie des particules chargées du vent solaire", 'is_correct' => true],
                            ['choice_text' => "Il fournit l’énergie qui chauffe l’intérieur de la planète", 'is_correct' => false],
                            ['choice_text' => "Il retient l’eau des océans au fond des bassins", 'is_correct' => false],
                            ['choice_text' => "Il empêche les éruptions volcaniques de se produire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une coulée de lave refroidit et garde l’empreinte du champ magnétique de son époque. Que peut-on en tirer ?",
                        'explanation' => "En refroidissant, les minéraux magnétiques s’alignent sur le champ ambiant et conservent cette orientation.",
                        'choices' => [
                            ['choice_text' => "Le sens du champ magnétique de l’époque", 'is_correct' => true],
                            ['choice_text' => "La vitesse du vent au moment de l’éruption", 'is_correct' => false],
                            ['choice_text' => "La composition de l’air à cette époque", 'is_correct' => false],
                            ['choice_text' => "La profondeur du réservoir de magma", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une boussole indique une direction bizarre à côté d’un tracteur, puis revient à la normale quand on s’en éloigne. Comment l’expliquer ?",
                        'explanation' => "Un gros objet en fer fausse le champ local ; en s’en éloignant, la boussole retrouve le champ terrestre.",
                        'choices' => [
                            ['choice_text' => "Le tracteur modifiait la gravité autour de lui", 'is_correct' => false],
                            ['choice_text' => "Le pôle Nord géographique s’était déplacé un instant", 'is_correct' => false],
                            ['choice_text' => "La masse de fer du tracteur perturbait le champ local", 'is_correct' => true],
                            ['choice_text' => "La chaleur du moteur dérèglait l’aiguille", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle affirmation est correcte concernant les pôles magnétiques et géographiques ?",
                        'explanation' => "Les pôles géographiques sont définis par l’axe de rotation de la Terre, tandis que les pôles magnétiques dépendent du champ magnétique et ne coïncident pas avec eux.",
                        'choices' => [
                            ['choice_text' => "Ils sont exactement au même endroit", 'is_correct' => false],
                            ['choice_text' => "Ils ne coïncident pas exactement", 'is_correct' => true],
                            ['choice_text' => "Les pôles magnétiques se situent à l’équateur", 'is_correct' => false],
                            ['choice_text' => "Les pôles géographiques changent chaque nuit", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Après une forte éruption solaire, des satellites sont perturbés et des aurores apparaissent loin des pôles. De quel phénomène s’agit-il ?",
                        'explanation' => "Une tempête géomagnétique est une perturbation temporaire du champ terrestre provoquée par une forte activité du Soleil.",
                        'choices' => [
                            ['choice_text' => "D’une inversion du champ magnétique", 'is_correct' => false],
                            ['choice_text' => "D’un séisme de forte magnitude", 'is_correct' => false],
                            ['choice_text' => "D’une éruption volcanique sous-marine", 'is_correct' => false],
                            ['choice_text' => "D’une tempête géomagnétique", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Dans quelle région du globe observe-t-on le plus souvent les aurores polaires ?",
                        'explanation' => "Les particules du vent solaire sont guidées par les lignes de champ vers les régions polaires, où elles font briller la haute atmosphère.",
                        'choices' => [
                            ['choice_text' => "Autour de l’équateur terrestre", 'is_correct' => false],
                            ['choice_text' => "Au-dessus des zones volcaniques", 'is_correct' => false],
                            ['choice_text' => "Autour des pôles magnétiques", 'is_correct' => true],
                            ['choice_text' => "Dans les régions les plus pluvieuses", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "En moyenne, où le champ magnétique est-il le plus intense à la surface ?",
                        'explanation' => "Le champ est plus fort près des pôles qu’à l’équateur, comme le montre le resserrement des lignes de champ.",
                        'choices' => [
                            ['choice_text' => "Près de l’équateur", 'is_correct' => false],
                            ['choice_text' => "Au-dessus des océans profonds", 'is_correct' => false],
                            ['choice_text' => "Au-dessus des hautes montagnes", 'is_correct' => false],
                            ['choice_text' => "Près des pôles magnétiques", 'is_correct' => true],
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
                        'question' => "Que mesure le flux géothermique en un point de la surface ?",
                        'explanation' => "Il s’agit de la chaleur venue de l’intérieur de la Terre qui traverse une surface donnée en un temps donné.",
                        'choices' => [
                            ['choice_text' => "La température de l’air au-dessus du sol", 'is_correct' => false],
                            ['choice_text' => "La vitesse à laquelle le sol se déplace", 'is_correct' => false],
                            ['choice_text' => "La quantité d’eau chaude stockée dans le sol", 'is_correct' => false],
                            ['choice_text' => "La chaleur de la Terre qui sort par le sol", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "D’où vient l’essentiel de la chaleur interne de la Terre ?",
                        'explanation' => "Une partie vient de la désintégration d’éléments radioactifs, l’autre de l’énergie héritée de la formation de la planète.",
                        'choices' => [
                            ['choice_text' => "Du rayonnement du Soleil absorbé par la croûte", 'is_correct' => false],
                            ['choice_text' => "Des frottements de l’air contre les roches", 'is_correct' => false],
                            ['choice_text' => "De la radioactivité et de la formation de la Terre", 'is_correct' => true],
                            ['choice_text' => "Des réactions du pétrole enfoui en profondeur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un barreau de métal chauffé à une extrémité devient chaud à l’autre bout, sans bouger. Quel mode de transfert de chaleur est en jeu ?",
                        'explanation' => "La chaleur passe de proche en proche dans le matériau, qui ne se déplace pas : c’est la conduction.",
                        'choices' => [
                            ['choice_text' => "La conduction", 'is_correct' => true],
                            ['choice_text' => "La convection", 'is_correct' => false],
                            ['choice_text' => "Le rayonnement", 'is_correct' => false],
                            ['choice_text' => "La fusion", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans le manteau, de la roche chaude remonte tandis que de la roche plus froide descend. Comment appelle-t-on ce mode de transfert de chaleur ?",
                        'explanation' => "Ici, la chaleur voyage avec la matière qui se déplace, ce qui définit la convection.",
                        'choices' => [
                            ['choice_text' => "La conduction", 'is_correct' => false],
                            ['choice_text' => "Le rayonnement", 'is_correct' => false],
                            ['choice_text' => "La convection", 'is_correct' => true],
                            ['choice_text' => "La diffusion", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle mesure de terrain aide à estimer le flux de chaleur interne ?",
                        'explanation' => "En relevant la température à différentes profondeurs, on obtient le gradient thermique, d’où l’on déduit le flux de chaleur.",
                        'choices' => [
                            ['choice_text' => "La température mesurée à plusieurs profondeurs", 'is_correct' => true],
                            ['choice_text' => "La pression de l’air relevée à plusieurs altitudes", 'is_correct' => false],
                            ['choice_text' => "La vitesse du vent mesurée au-dessus du sol", 'is_correct' => false],
                            ['choice_text' => "La salinité de l’eau mesurée dans les océans", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un forage, la température passe de 20 °C en surface à 35 °C à 500 m de profondeur. Quelle différence de température a été observée ?",
                        'explanation' => "La variation entre 20 °C et 35 °C est de 35 - 20 = 15 °C.",
                        'choices' => [
                            ['choice_text' => "55 °C", 'is_correct' => false],
                            ['choice_text' => "35 °C", 'is_correct' => false],
                            ['choice_text' => "7,5 °C", 'is_correct' => false],
                            ['choice_text' => "15 °C", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quel rôle joue la chaleur interne dans la dynamique de la Terre ?",
                        'explanation' => "La chaleur interne entretient les courants du manteau, qui participent au déplacement des plaques.",
                        'choices' => [
                            ['choice_text' => "Elle fournit l’énergie de la rotation de la Terre", 'is_correct' => false],
                            ['choice_text' => "Elle entretient les mouvements du manteau", 'is_correct' => true],
                            ['choice_text' => "Elle fixe la vitesse du vent à la surface", 'is_correct' => false],
                            ['choice_text' => "Elle supprime les séismes en ramollissant les roches", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une équipe mesure un flux géothermique bien supérieur à la moyenne dans une région. Quel contexte est le plus probable ?",
                        'explanation' => "Près des volcans et des dorsales, la chaleur interne remonte plus facilement vers la surface.",
                        'choices' => [
                            ['choice_text' => "Un très vieux socle continental, stable et épais", 'is_correct' => false],
                            ['choice_text' => "Une zone volcanique ou une dorsale océanique", 'is_correct' => true],
                            ['choice_text' => "Un fond océanique ancien, loin des dorsales", 'is_correct' => false],
                            ['choice_text' => "Un désert chaud au relief plat", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle unité convient à une puissance thermique mesurée en géophysique ?",
                        'explanation' => "Le watt, symbole W, est l’unité SI de puissance : il convient pour exprimer un débit d’énergie thermique.",
                        'choices' => [
                            ['choice_text' => "Le joule", 'is_correct' => false],
                            ['choice_text' => "Le pascal", 'is_correct' => false],
                            ['choice_text' => "Le kelvin", 'is_correct' => false],
                            ['choice_text' => "Le watt", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un mineur descend dans une mine profonde de 3 km. Que constate-t-il sur la température ?",
                        'explanation' => "Dans la croûte, la température monte en moyenne d’environ 25 °C par kilomètre, grâce à la chaleur venue de l’intérieur.",
                        'choices' => [
                            ['choice_text' => "Il y fait plus frais, car il s’éloigne du Soleil", 'is_correct' => false],
                            ['choice_text' => "La température y est la même qu’en surface", 'is_correct' => false],
                            ['choice_text' => "Il y fait nettement plus chaud qu’en surface", 'is_correct' => true],
                            ['choice_text' => "La température chute sous 0 °C en profondeur", 'is_correct' => false],
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
                        'question' => "Quelle unité convient pour donner la distance entre un épicentre et une station ?",
                        'explanation' => "Pour des distances de plusieurs dizaines ou centaines de kilomètres, le kilomètre est l’unité naturelle.",
                        'choices' => [
                            ['choice_text' => "Le kilogramme", 'is_correct' => false],
                            ['choice_text' => "Le kilohertz", 'is_correct' => false],
                            ['choice_text' => "Le kilopascal", 'is_correct' => false],
                            ['choice_text' => "Le kilomètre", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un sismomètre enregistre un signal qui oscille 5 fois par seconde. Dans quelle unité exprime-t-on cette fréquence ?",
                        'explanation' => "Le hertz compte les oscillations par seconde : 5 oscillations par seconde font 5 Hz.",
                        'choices' => [
                            ['choice_text' => "En pascals", 'is_correct' => false],
                            ['choice_text' => "En hertz", 'is_correct' => true],
                            ['choice_text' => "En secondes", 'is_correct' => false],
                            ['choice_text' => "En mètres par seconde", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle unité est appropriée pour une pression ?",
                        'explanation' => "Le pascal, Pa, est l’unité SI de pression, importante pour décrire les conditions régnant en profondeur.",
                        'choices' => [
                            ['choice_text' => "Le pascal", 'is_correct' => true],
                            ['choice_text' => "Le joule", 'is_correct' => false],
                            ['choice_text' => "Le newton", 'is_correct' => false],
                            ['choice_text' => "Le watt", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un séisme est annoncé avec une magnitude de 6,0. Que caractérise ce nombre ?",
                        'explanation' => "La magnitude mesure la taille du séisme à sa source ; elle ne dépend pas de l’endroit où l’on se trouve.",
                        'choices' => [
                            ['choice_text' => "Les dégâts constatés dans la ville la plus proche", 'is_correct' => false],
                            ['choice_text' => "La profondeur à laquelle la faille a rompu", 'is_correct' => false],
                            ['choice_text' => "La taille du séisme à sa source, liée à l’énergie libérée", 'is_correct' => true],
                            ['choice_text' => "La durée des secousses ressenties en surface", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux villes ressentent le même séisme très différemment : l’une a des fissures aux murs, l’autre rien. Quelle grandeur décrit cette différence ?",
                        'explanation' => "L’intensité décrit les effets observés en un lieu, donc elle varie d’une ville à l’autre pour un même séisme.",
                        'choices' => [
                            ['choice_text' => "La magnitude", 'is_correct' => false],
                            ['choice_text' => "La fréquence", 'is_correct' => false],
                            ['choice_text' => "La profondeur du foyer", 'is_correct' => false],
                            ['choice_text' => "L’intensité", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Une plaque tectonique se déplace à 5 cm/an. Quelle distance parcourt-elle en 20 ans, en supposant une vitesse constante ?",
                        'explanation' => "La distance parcourue est vitesse × temps : 5 cm/an × 20 ans = 100 cm, soit 1 m.",
                        'choices' => [
                            ['choice_text' => "10 cm", 'is_correct' => false],
                            ['choice_text' => "1 mètre", 'is_correct' => true],
                            ['choice_text' => "20 mètres", 'is_correct' => false],
                            ['choice_text' => "100 mètres", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que mesure un sismomètre ?",
                        'explanation' => "Il enregistre les mouvements du sol et fournit les sismogrammes que l’on analyse après un séisme.",
                        'choices' => [
                            ['choice_text' => "Les variations du champ magnétique", 'is_correct' => false],
                            ['choice_text' => "Les variations de la pression de l’air", 'is_correct' => false],
                            ['choice_text' => "Les vibrations et mouvements du sol", 'is_correct' => true],
                            ['choice_text' => "Les variations de température du sol", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel instrument est spécialement conçu pour mesurer des variations du champ magnétique terrestre ?",
                        'explanation' => "Un magnétomètre mesure le champ magnétique ou ses variations, selon le modèle d’instrument utilisé.",
                        'choices' => [
                            ['choice_text' => "Un magnétomètre", 'is_correct' => true],
                            ['choice_text' => "Un sismomètre", 'is_correct' => false],
                            ['choice_text' => "Un gravimètre", 'is_correct' => false],
                            ['choice_text' => "Un baromètre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle grandeur s’exprime en m/s² ?",
                        'explanation' => "Une accélération se mesure en mètres par seconde au carré ; la pesanteur terrestre vaut environ 9,8 m/s².",
                        'choices' => [
                            ['choice_text' => "La vitesse des ondes sismiques", 'is_correct' => false],
                            ['choice_text' => "La densité d’une roche", 'is_correct' => false],
                            ['choice_text' => "La pression à l’intérieur de la Terre", 'is_correct' => false],
                            ['choice_text' => "L’accélération de la pesanteur", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un sismologue note qu’un signal a parcouru 90 km en 15 s. Quelle est sa vitesse moyenne ?",
                        'explanation' => "On divise la distance par la durée : 90 km ÷ 15 s = 6 km/s.",
                        'choices' => [
                            ['choice_text' => "6 km/s", 'is_correct' => true],
                            ['choice_text' => "0,17 km/s", 'is_correct' => false],
                            ['choice_text' => "75 km/s", 'is_correct' => false],
                            ['choice_text' => "1 350 km/s", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans son carnet, Omar a noté seulement « 9,8 » pour une mesure. Quel problème cela pose-t-il ?",
                        'explanation' => "Le même nombre peut désigner une accélération, une vitesse ou une durée selon l’unité ; sans elle, la mesure est inutilisable.",
                        'choices' => [
                            ['choice_text' => "Un nombre décimal n’est pas admis en géophysique", 'is_correct' => false],
                            ['choice_text' => "Le nombre doit être arrondi à l’entier", 'is_correct' => false],
                            ['choice_text' => "Sans unité, on ne sait pas ce que représente 9,8", 'is_correct' => true],
                            ['choice_text' => "Les nombres à un chiffre après la virgule sont trop précis", 'is_correct' => false],
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
                        'explanation' => "On passe de 18 °C à 39 °C en descendant d’un kilomètre : la température augmente avec la profondeur.",
                        'choices' => [
                            ['choice_text' => "La température augmente avec la profondeur", 'is_correct' => true],
                            ['choice_text' => "La température diminue avec la profondeur", 'is_correct' => false],
                            ['choice_text' => "La température reste à peu près constante", 'is_correct' => false],
                            ['choice_text' => "La température monte puis redescend", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Trois stations donnent les écarts P-S suivants : A = 2 s, B = 5 s, C = 9 s. Laquelle est la plus éloignée de l’épicentre ?",
                        'explanation' => "L’écart P-S grandit avec la distance : avec 9 s, la station C est la plus éloignée.",
                        'choices' => [
                            ['choice_text' => "La station A", 'is_correct' => false],
                            ['choice_text' => "La station B", 'is_correct' => false],
                            ['choice_text' => "La station C", 'is_correct' => true],
                            ['choice_text' => "Les trois sont à la même distance", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur une carte gravimétrique, une zone montre une anomalie positive. Quelle interprétation est la plus raisonnable ?",
                        'explanation' => "Une anomalie positive signale un excès de masse sous la zone, donc des matériaux plus denses que leur environnement.",
                        'choices' => [
                            ['choice_text' => "Des roches plus denses que la moyenne en profondeur", 'is_correct' => true],
                            ['choice_text' => "Des roches moins denses que dans les zones voisines", 'is_correct' => false],
                            ['choice_text' => "Un champ magnétique plus fort qu’ailleurs", 'is_correct' => false],
                            ['choice_text' => "Une température du sol plus élevée qu’ailleurs", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur une carte magnétique du fond d’un océan, des bandes de valeurs opposées alternent de part et d’autre d’une dorsale. Quelle hypothèse l’explique ?",
                        'explanation' => "En se solidifiant, la roche volcanique du plancher garde la polarité du champ de l’époque, d’où ces bandes alternées.",
                        'choices' => [
                            ['choice_text' => "Des courants marins qui aimantent le fond tour à tour", 'is_correct' => false],
                            ['choice_text' => "Des couches de sédiments déposées à des saisons différentes", 'is_correct' => false],
                            ['choice_text' => "Des écarts de température entre l’eau de surface et celle du fond", 'is_correct' => false],
                            ['choice_text' => "L’enregistrement des inversions du champ par la roche qui se forme", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un sismogramme montre une première arrivée à 10:15:20 et une seconde à 10:15:35. Quel est le délai entre les deux ?",
                        'explanation' => "De 10:15:20 à 10:15:35, il s’écoule 15 secondes.",
                        'choices' => [
                            ['choice_text' => "5 secondes", 'is_correct' => false],
                            ['choice_text' => "15 secondes", 'is_correct' => true],
                            ['choice_text' => "20 secondes", 'is_correct' => false],
                            ['choice_text' => "55 secondes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux forages atteignent 1 km. Le forage X y relève 35 °C, le forage Y 55 °C. En surface, il fait 15 °C dans les deux cas. Quel forage a le gradient moyen le plus fort ?",
                        'explanation' => "Le forage Y gagne 40 °C sur 1 km contre 20 °C pour le forage X : son gradient est deux fois plus fort.",
                        'choices' => [
                            ['choice_text' => "Le forage X", 'is_correct' => false],
                            ['choice_text' => "Le forage Y", 'is_correct' => true],
                            ['choice_text' => "Ils ont le même gradient", 'is_correct' => false],
                            ['choice_text' => "On ne peut pas comparer sans connaître la roche", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un magnétomètre enregistre une variation brutale du champ pendant une forte éruption solaire. Quelle explication est la plus cohérente ?",
                        'explanation' => "Une forte activité solaire peut déclencher une tempête géomagnétique, qui perturbe temporairement le champ mesuré.",
                        'choices' => [
                            ['choice_text' => "Un séisme proche a déplacé l’instrument", 'is_correct' => false],
                            ['choice_text' => "La Lune a modifié la gravité locale", 'is_correct' => false],
                            ['choice_text' => "Une tempête géomagnétique a perturbé le champ", 'is_correct' => true],
                            ['choice_text' => "Un volcan voisin a modifié le champ local", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un profil sismique montre que la vitesse des ondes P passe de 4 à 6 km/s entre deux couches. Que peut-on en déduire ?",
                        'explanation' => "Un saut de vitesse montre que le matériau change, par exemple en densité ou en rigidité, d’une couche à l’autre.",
                        'choices' => [
                            ['choice_text' => "La seconde couche a libéré plus d’énergie", 'is_correct' => false],
                            ['choice_text' => "Les ondes P y sont devenues des ondes S", 'is_correct' => false],
                            ['choice_text' => "Les deux couches n’ont pas les mêmes propriétés", 'is_correct' => true],
                            ['choice_text' => "La station d’enregistrement a changé de place", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Trois stations donnent chacune la distance à un séisme, et on trace trois cercles autour d’elles. À quoi correspond leur point commun ?",
                        'explanation' => "Le point où les trois cercles se croisent donne la position de l’épicentre.",
                        'choices' => [
                            ['choice_text' => "Au foyer du séisme, en profondeur", 'is_correct' => false],
                            ['choice_text' => "À la station la plus proche", 'is_correct' => false],
                            ['choice_text' => "Au centre de la Terre", 'is_correct' => false],
                            ['choice_text' => "À l’épicentre du séisme", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un gravimètre mesure une pesanteur un peu plus faible au-dessus d’une grande structure souterraine. Que peut-on supposer ?",
                        'explanation' => "Un déficit de gravité signale un manque de masse : la structure est moins dense que son environnement.",
                        'choices' => [
                            ['choice_text' => "Elle est plus dense que les roches voisines", 'is_correct' => false],
                            ['choice_text' => "Elle est moins dense que les roches voisines", 'is_correct' => true],
                            ['choice_text' => "Elle est plus magnétique que les roches voisines", 'is_correct' => false],
                            ['choice_text' => "Elle est plus ancienne que les roches voisines", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur un schéma, les lignes de champ magnétique sont plus serrées près des pôles que près de l’équateur. Que traduit ce resserrement ?",
                        'explanation' => "Plus les lignes sont rapprochées, plus le champ est fort à cet endroit.",
                        'choices' => [
                            ['choice_text' => "Un champ plus faible près des pôles", 'is_correct' => false],
                            ['choice_text' => "Une gravité plus forte près des pôles", 'is_correct' => false],
                            ['choice_text' => "Des roches plus denses près des pôles", 'is_correct' => false],
                            ['choice_text' => "Un champ plus intense près des pôles", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quel indice dans les enregistrements sismiques révèle une limite profonde entre deux couches ?",
                        'explanation' => "Quand une onde change brutalement de vitesse ou se dévie, elle vient de franchir une limite entre deux matériaux.",
                        'choices' => [
                            ['choice_text' => "Un changement brusque de vitesse ou de direction des ondes", 'is_correct' => true],
                            ['choice_text' => "Une baisse régulière de l’amplitude avec la distance", 'is_correct' => false],
                            ['choice_text' => "Un allongement progressif de la durée du signal", 'is_correct' => false],
                            ['choice_text' => "Une hausse de la fréquence du signal au fil des jours", 'is_correct' => false],
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
                        'question' => "Des dizaines de séismes peu profonds s’alignent sur une bande de 80 km de long. Quelle interprétation est la plus simple ?",
                        'explanation' => "Des séismes superficiels alignés dessinent le plus souvent une faille active ou une limite entre blocs de la croûte.",
                        'choices' => [
                            ['choice_text' => "Une coulée de lave refroidie sous cette bande", 'is_correct' => false],
                            ['choice_text' => "Une faille active court le long de cette bande", 'is_correct' => true],
                            ['choice_text' => "Une nappe d’eau souterraine en train de se vider", 'is_correct' => false],
                            ['choice_text' => "Un changement de la gravité locale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un géologue trouve une roche de 540 g qui occupe 200 cm³. Quelle est sa densité ?",
                        'explanation' => "On divise la masse par le volume : 540 g ÷ 200 cm³ = 2,7 g/cm³.",
                        'choices' => [
                            ['choice_text' => "0,37 g/cm³", 'is_correct' => false],
                            ['choice_text' => "2,7 g/cm³", 'is_correct' => true],
                            ['choice_text' => "340 g/cm³", 'is_correct' => false],
                            ['choice_text' => "108 000 g/cm³", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un élève dit : « À 1 000 °C, une roche est forcément fondue. » Quelle correction est la plus juste ?",
                        'explanation' => "Une roche très chaude peut rester solide quand la pression est forte : la température seule ne décide pas de son état.",
                        'choices' => [
                            ['choice_text' => "La pression fait fondre les roches plus vite", 'is_correct' => false],
                            ['choice_text' => "Une roche solide ne dépasse pas 500 °C", 'is_correct' => false],
                            ['choice_text' => "Les roches fondent à la même température", 'is_correct' => false],
                            ['choice_text' => "Sous forte pression, une roche chaude peut rester solide", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Après un séisme, Hind affirme que la magnitude est plus forte à Al Hoceïma qu’à Fès, car les dégâts y sont plus importants. Quelle correction est juste ?",
                        'explanation' => "La magnitude décrit le séisme lui-même et n’a qu’une valeur ; l’intensité décrit les effets, qui varient d’un lieu à l’autre.",
                        'choices' => [
                            ['choice_text' => "La magnitude dépend du nombre de bâtiments touchés", 'is_correct' => false],
                            ['choice_text' => "La magnitude est unique ; les dégâts relèvent de l’intensité", 'is_correct' => true],
                            ['choice_text' => "Elle est plus forte dans la ville la plus proche", 'is_correct' => false],
                            ['choice_text' => "La magnitude se mesure en degrés Celsius", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un capteur enregistre une première arrivée P à 12 s après le début du signal et une arrivée S à 20 s. Que vaut le délai P-S ?",
                        'explanation' => "Le délai P-S s’obtient en soustrayant les temps d’arrivée : 20 - 12 = 8 s.",
                        'choices' => [
                            ['choice_text' => "12 secondes", 'is_correct' => false],
                            ['choice_text' => "20 secondes", 'is_correct' => false],
                            ['choice_text' => "8 secondes", 'is_correct' => true],
                            ['choice_text' => "32 secondes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un forage montre que la température augmente régulièrement avec la profondeur. Que peut-on en conclure ?",
                        'explanation' => "Quand la température monte avec la profondeur, la chaleur circule du fond vers la surface.",
                        'choices' => [
                            ['choice_text' => "Que de la chaleur remonte de l’intérieur vers la surface", 'is_correct' => true],
                            ['choice_text' => "Que le champ magnétique est en train de s’inverser", 'is_correct' => false],
                            ['choice_text' => "Que le forage a traversé une nappe d’eau chaude", 'is_correct' => false],
                            ['choice_text' => "Que la gravité diminue vers la surface", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une boussole dévie à côté d’une grande armoire métallique. Que faire pour obtenir une mesure fiable ?",
                        'explanation' => "Le fer et l’acier faussent l’aiguille ; il faut s’en écarter pour mesurer le champ terrestre.",
                        'choices' => [
                            ['choice_text' => "L’éloigner des objets en fer ou en acier", 'is_correct' => true],
                            ['choice_text' => "La poser sur une surface plus chaude", 'is_correct' => false],
                            ['choice_text' => "La plonger dans de l’eau froide", 'is_correct' => false],
                            ['choice_text' => "Lui ajouter un second aimant à côté", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une équipe veut surveiller les vibrations du sol autour d’un volcan. Quel instrument installe-t-elle d’abord ?",
                        'explanation' => "Les vibrations du sol s’enregistrent avec un sismomètre ; les autres instruments mesurent d’autres grandeurs.",
                        'choices' => [
                            ['choice_text' => "Un magnétomètre", 'is_correct' => false],
                            ['choice_text' => "Un baromètre", 'is_correct' => false],
                            ['choice_text' => "Un sismomètre", 'is_correct' => true],
                            ['choice_text' => "Un gravimètre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une équipe mesure une forte anomalie de chaleur au sol près d’un volcan actif. Quelle relation est cohérente ?",
                        'explanation' => "Près d’un volcan actif, la chaleur du magma monte vers la surface et fait grimper le flux de chaleur local.",
                        'choices' => [
                            ['choice_text' => "Le magma refroidit le sous-sol environnant", 'is_correct' => false],
                            ['choice_text' => "Le noyau terrestre affleure sous le cratère", 'is_correct' => false],
                            ['choice_text' => "Le champ magnétique chauffe le sol local", 'is_correct' => false],
                            ['choice_text' => "De la chaleur du magma remonte vers la surface", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un élève classe la croûte, le manteau et le noyau externe parmi les couches solides. Où est l’erreur ?",
                        'explanation' => "La croûte et le manteau sont solides, mais le noyau externe est un métal liquide.",
                        'choices' => [
                            ['choice_text' => "Le manteau est en grande partie liquide", 'is_correct' => false],
                            ['choice_text' => "La croûte est liquide sous les continents", 'is_correct' => false],
                            ['choice_text' => "Le noyau externe est liquide, pas solide", 'is_correct' => true],
                            ['choice_text' => "Le noyau externe est composé de gaz", 'is_correct' => false],
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
                        'question' => "Quel couple associe correctement une méthode géophysique et ce qu’elle étudie ?",
                        'explanation' => "La sismologie étudie comment les ondes traversent le sous-sol ; la gravimétrie suit la pesanteur et la magnétométrie le champ magnétique.",
                        'choices' => [
                            ['choice_text' => "Gravimétrie et direction du champ magnétique", 'is_correct' => false],
                            ['choice_text' => "Magnétométrie et vitesse des ondes P", 'is_correct' => false],
                            ['choice_text' => "Géothermie et variations de la pesanteur", 'is_correct' => false],
                            ['choice_text' => "Sismologie et propagation des ondes dans le sol", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Quelle observation montre que le noyau externe est liquide ?",
                        'explanation' => "Seuls les liquides stoppent les ondes S, et elles disparaissent après la traversée du noyau externe.",
                        'choices' => [
                            ['choice_text' => "Les ondes P ne le traversent pas", 'is_correct' => false],
                            ['choice_text' => "Les ondes S ne le traversent pas", 'is_correct' => true],
                            ['choice_text' => "Les ondes S y sont bien plus rapides que dans le manteau", 'is_correct' => false],
                            ['choice_text' => "Les ondes P y vont plus vite que dans le manteau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans quel ordre rencontre-t-on les grandes enveloppes en partant de la surface vers le centre ?",
                        'explanation' => "On traverse d’abord la croûte, puis le manteau, puis le noyau externe liquide, et enfin le noyau interne solide.",
                        'choices' => [
                            ['choice_text' => "Croûte, manteau, noyau externe, noyau interne", 'is_correct' => true],
                            ['choice_text' => "Croûte, noyau externe, manteau, noyau interne", 'is_correct' => false],
                            ['choice_text' => "Manteau, croûte, noyau interne, noyau externe", 'is_correct' => false],
                            ['choice_text' => "Croûte, manteau, noyau interne, noyau externe", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel instrument mesure de petites variations de la pesanteur ?",
                        'explanation' => "Le gravimètre mesure la pesanteur avec une grande précision ; il sert à repérer des différences de densité dans le sous-sol.",
                        'choices' => [
                            ['choice_text' => "Un magnétomètre", 'is_correct' => false],
                            ['choice_text' => "Un sismomètre", 'is_correct' => false],
                            ['choice_text' => "Un gravimètre", 'is_correct' => true],
                            ['choice_text' => "Un baromètre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle observation relie directement la géophysique à la chaleur interne ?",
                        'explanation' => "Plus on s’enfonce, plus il fait chaud : ce gradient est la trace directe de la chaleur qui monte de l’intérieur.",
                        'choices' => [
                            ['choice_text' => "La baisse de la pression avec la profondeur", 'is_correct' => false],
                            ['choice_text' => "La diminution de la gravité avec l’altitude", 'is_correct' => false],
                            ['choice_text' => "La variation des marées sur la côte", 'is_correct' => false],
                            ['choice_text' => "La hausse de la température avec la profondeur", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un modèle donne 2,7 g/cm³ pour la roche A et 3,3 g/cm³ pour la roche B. Que peut-on dire ?",
                        'explanation' => "Comme 3,3 est supérieur à 2,7, la roche B contient plus de matière par cm³.",
                        'choices' => [
                            ['choice_text' => "La roche B est plus dense que la roche A", 'is_correct' => true],
                            ['choice_text' => "La roche A est plus dense que la roche B", 'is_correct' => false],
                            ['choice_text' => "La roche B est plus chaude que la roche A", 'is_correct' => false],
                            ['choice_text' => "La roche B est liquide et la roche A solide", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lequel de ces appariements instrument-grandeur est correct ?",
                        'explanation' => "Un magnétomètre mesure le champ magnétique, alors que le sismomètre enregistre le mouvement du sol et le gravimètre la pesanteur.",
                        'choices' => [
                            ['choice_text' => "Sismomètre : champ magnétique", 'is_correct' => false],
                            ['choice_text' => "Magnétomètre : champ magnétique", 'is_correct' => true],
                            ['choice_text' => "Gravimètre : température du sous-sol", 'is_correct' => false],
                            ['choice_text' => "Thermomètre de forage : vitesse des ondes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle phrase distingue correctement la gravité du magnétisme ?",
                        'explanation' => "Tout objet qui a une masse subit la gravité, alors que le magnétisme n’agit que sur des aimants, certains métaux ou des charges en mouvement.",
                        'choices' => [
                            ['choice_text' => "La gravité agit seulement sur les aimants, le magnétisme sur toutes les masses", 'is_correct' => false],
                            ['choice_text' => "Les deux forces proviennent du même champ et ne se distinguent pas", 'is_correct' => false],
                            ['choice_text' => "La gravité vient du noyau et le magnétisme de la croûte", 'is_correct' => false],
                            ['choice_text' => "La gravité agit sur toutes les masses, le magnétisme sur certains matériaux", 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => "Un signal sismique parcourt 42 km à vitesse constante de 7 km/s. Combien de temps met-il ?",
                        'explanation' => "Le temps de trajet est égal à 42 km / 7 km/s = 6 s.",
                        'choices' => [
                            ['choice_text' => "6 secondes", 'is_correct' => true],
                            ['choice_text' => "7 secondes", 'is_correct' => false],
                            ['choice_text' => "35 secondes", 'is_correct' => false],
                            ['choice_text' => "49 secondes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l’apport principal des méthodes géophysiques ?",
                        'explanation' => "Ces méthodes déduisent la structure du sous-sol à partir de mesures prises en surface ou en forage, sans avoir à tout creuser.",
                        'choices' => [
                            ['choice_text' => "Remplacer les observations de terrain", 'is_correct' => false],
                            ['choice_text' => "Prévoir avec exactitude la date des séismes", 'is_correct' => false],
                            ['choice_text' => "Étudier le sous-sol et l’intérieur de la Terre à distance", 'is_correct' => true],
                            ['choice_text' => "Prélever directement des échantillons du noyau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une région a une pesanteur plus faible que ses voisines et un flux de chaleur élevé. Quelle hypothèse est la plus raisonnable ?",
                        'explanation' => "Un manque de masse associé à beaucoup de chaleur évoque des roches chaudes, donc moins denses, qui remontent.",
                        'choices' => [
                            ['choice_text' => "Des roches froides et très denses y sont enfouies", 'is_correct' => false],
                            ['choice_text' => "Des roches chaudes et peu denses remontent sous la région", 'is_correct' => true],
                            ['choice_text' => "Un très ancien socle stable domine le sous-sol", 'is_correct' => false],
                            ['choice_text' => "Un lac profond occupe le sous-sol", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une équipe utilise à la fois la sismologie, la gravimétrie et des mesures de température dans la même région. Quel est l’intérêt de cette combinaison ?",
                        'explanation' => "La gravité, les ondes et la chaleur renseignent sur des propriétés différentes, et les recouper limite les erreurs d’interprétation.",
                        'choices' => [
                            ['choice_text' => "Les trois méthodes mesurent la même propriété", 'is_correct' => false],
                            ['choice_text' => "Les trois instruments sont nécessaires pour fonctionner", 'is_correct' => false],
                            ['choice_text' => "Chaque méthode apporte un indice différent sur le sous-sol", 'is_correct' => true],
                            ['choice_text' => "Une seule méthode ne peut pas étudier le sous-sol", 'is_correct' => false],
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