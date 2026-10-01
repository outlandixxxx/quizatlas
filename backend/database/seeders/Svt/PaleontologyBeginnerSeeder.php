<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PaleontologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'paleontology')->firstOrFail();

        $quizzes = [
            [
                'title' => "La fossilisation et la conservation",
                'description' => "Comprendre comment des restes ou traces d’organismes peuvent être conservés dans les roches.",
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Un animal meurt dans un environnement où ses restes sont rapidement recouverts de sédiments. Pourquoi cet enfouissement favorise-t-il la fossilisation ?",
                        'marks' => 1,
                        'explanation' => "L’enfouissement rapide protège les restes de l’oxydation, de la décomposition et du remaniement. Il augmente donc leurs chances d’être conservés.",
                        'choices' => [
                            [
                                'choice_text' => "Il limite l’action des agents de décomposition et de destruction",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il augmente immédiatement la température du squelette",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il transforme les os en lave",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il fait disparaître les sédiments",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel élément a le plus de chances de laisser une trace fossile dans une boue fine ?",
                        'marks' => 1,
                        'explanation' => "Une empreinte est une trace durable laissée dans le sédiment. Après enfouissement et lithification, elle peut être conservée comme fossile de trace.",
                        'choices' => [
                            [
                                'choice_text' => "Une empreinte de pas",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une goutte de pluie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une rafale de vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une ombre portée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Des coquilles calcaires sont enfouies puis la roche qui les contient se consolide. Quel processus a principalement transformé le sédiment meuble en roche ?",
                        'marks' => 1,
                        'explanation' => "La lithification regroupe les processus de compaction et de cimentation qui transforment des sédiments meubles en roche sédimentaire.",
                        'choices' => [
                            [
                                'choice_text' => "La lithification",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La photosynthèse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La fusion",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La cristallisation du magma",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les parties molles d’un organisme sont-elles généralement moins bien conservées que les os ou les coquilles ?",
                        'marks' => 1,
                        'explanation' => "Les tissus mous sont rapidement dégradés par les décomposeurs et les réactions chimiques. Les parties dures résistent généralement mieux.",
                        'choices' => [
                            [
                                'choice_text' => "Elles se décomposent plus facilement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles sont toujours dissoutes par le magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles sont plus lourdes et tombent au fond des océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles ne contiennent jamais d’eau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une feuille est ensevelie dans des sédiments très fins et laisse une fine marque sombre dans la roche. Ce fossile correspond surtout à…",
                        'marks' => 1,
                        'explanation' => "Les sédiments fins peuvent enregistrer la forme et parfois la matière organique d’une feuille sous forme d’empreinte ou de compression.",
                        'choices' => [
                            [
                                'choice_text' => "une empreinte ou un moulage de la feuille",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "un cristal magmatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un fossile de pollen vivant",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une coulée de lave",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel phénomène peut détruire un fossile avant son enfouissement définitif ?",
                        'marks' => 1,
                        'explanation' => "Un transport prolongé peut casser ou user les restes. L’abrasion réduit alors les possibilités de conservation.",
                        'choices' => [
                            [
                                'choice_text' => "Le transport et l’abrasion",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La superposition",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La datation relative",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La sédimentation calme",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une tourbière pauvre en oxygène, des débris végétaux s’accumulent et se dégradent lentement. Quelle condition favorise ici leur conservation ?",
                        'marks' => 1,
                        'explanation' => "Un milieu pauvre en oxygène ralentit certaines dégradations microbiennes et chimiques, ce qui peut favoriser la conservation de matière organique.",
                        'choices' => [
                            [
                                'choice_text' => "Le manque d’oxygène",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une forte activité volcanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une fusion des sédiments",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une exposition prolongée au soleil",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un paléontologue observe des terriers fossilisés dans une couche sédimentaire. Que renseignent-ils directement ?",
                        'marks' => 1,
                        'explanation' => "Les terriers sont des traces d’activité. Ils apportent des informations sur le comportement et les conditions de vie d’organismes anciens.",
                        'choices' => [
                            [
                                'choice_text' => "Le comportement ou l’activité d’anciens organismes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La composition du noyau terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La vitesse de la lumière",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’âge exact de la Terre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le milieu marin peu énergétique peut-il être favorable à la conservation de coquilles ?",
                        'marks' => 1,
                        'explanation' => "Lorsque le remaniement est faible, les coquilles ont davantage de chances de rester sur place, d’être enfouies puis conservées.",
                        'choices' => [
                            [
                                'choice_text' => "Les restes peuvent être moins remaniés et s’accumuler dans le sédiment",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les coquilles deviennent immédiatement des roches magmatiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’eau de mer empêche toute sédimentation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les coquilles cessent d’être calcaires",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle situation augmente le plus la probabilité qu’un reste soit conservé ?",
                        'marks' => 1,
                        'explanation' => "L’enfouissement rapide réduit l’exposition aux agents destructeurs et facilite la conservation dans les sédiments.",
                        'choices' => [
                            [
                                'choice_text' => "Enfouissement rapide dans un sédiment fin",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Exposition longue à l’érosion",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Consommation par plusieurs prédateurs",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Transport répété par un torrent",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Types de fossiles et traces du passé",
                'description' => "Identifier les principaux types de fossiles et ce qu’ils permettent d’étudier.",
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Un fossile de coquille conservant sa forme en trois dimensions est principalement…",
                        'marks' => 1,
                        'explanation' => "Une coquille est une partie du corps de l’organisme. Lorsqu’elle est conservée, elle constitue un reste corporel fossile.",
                        'choices' => [
                            [
                                'choice_text' => "un reste corporel",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une structure tectonique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une roche volcanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un courant marin",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle proposition décrit le mieux un fossile de trace ?",
                        'marks' => 1,
                        'explanation' => "Les fossiles de trace correspondent aux indices d’activité d’un organisme, comme les empreintes, terriers ou pistes.",
                        'choices' => [
                            [
                                'choice_text' => "Une empreinte ou un terrier laissé par un organisme",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un os fossilisé",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une coquille conservée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un grain de quartz",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un paléontologue étudie une coprolithe. De quoi s’agit-il ?",
                        'marks' => 1,
                        'explanation' => "Une coprolithe est une déjection fossilisée. Elle peut renseigner sur le régime alimentaire et l’environnement d’un organisme.",
                        'choices' => [
                            [
                                'choice_text' => "De déjections fossilisées",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "D’un volcan ancien",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "D’une coquille enroulée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "D’une empreinte végétale",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel fossile peut surtout renseigner sur un déplacement collectif d’animaux ?",
                        'marks' => 1,
                        'explanation' => "Une série d’empreintes peut montrer une trajectoire et un déplacement collectif, ce qui apporte des informations comportementales.",
                        'choices' => [
                            [
                                'choice_text' => "Une piste constituée de nombreuses empreintes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une seule dent isolée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un fragment de roche magmatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une bulle de gaz piégée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une ammonite fossile est principalement étudiée comme…",
                        'marks' => 1,
                        'explanation' => "Les ammonites étaient des organismes marins à coquille. Leurs fossiles se trouvent donc dans des roches sédimentaires marines ou anciennes.",
                        'choices' => [
                            [
                                'choice_text' => "un reste d’un organisme marin",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une structure volcanique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un minerai de fer",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un sol fossile",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les fossiles végétaux sont-ils utiles pour reconstituer un ancien milieu ?",
                        'marks' => 1,
                        'explanation' => "La végétation dépend de conditions environnementales. Les fossiles végétaux peuvent donc aider à reconstituer les paysages et certains climats anciens.",
                        'choices' => [
                            [
                                'choice_text' => "Ils peuvent indiquer le type de végétation et certaines conditions climatiques",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils donnent toujours la date exacte de l’éruption d’un volcan",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils mesurent directement la pression atmosphérique actuelle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils indiquent automatiquement la profondeur du noyau terrestre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel objet n’est pas un fossile ?",
                        'marks' => 1,
                        'explanation' => "Un coquillage vivant appartient au présent. Un fossile est un reste ou une trace conservé(e) d’un organisme du passé.",
                        'choices' => [
                            [
                                'choice_text' => "Un coquillage vivant trouvé sur une plage",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une empreinte de trilobite dans une roche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un os minéralisé dans une couche rocheuse",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une feuille fossilisée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un moulage interne de coquille donne surtout des informations sur…",
                        'marks' => 1,
                        'explanation' => "Un moulage interne reproduit l’espace occupé à l’intérieur de la coquille et renseigne donc surtout sur sa morphologie interne.",
                        'choices' => [
                            [
                                'choice_text' => "la forme de la cavité interne de la coquille",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la composition chimique du noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la vitesse d’un courant atmosphérique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la température actuelle de l’océan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel groupe est emblématique du Paléozoïque et possède souvent un exosquelette segmenté ?",
                        'marks' => 1,
                        'explanation' => "Les trilobites sont des arthropodes marins disparus, caractéristiques du Paléozoïque et reconnaissables à leur corps segmenté.",
                        'choices' => [
                            [
                                'choice_text' => "Les trilobites",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les oiseaux modernes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les cétacés",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les graminées",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel type de fossile peut révéler directement une activité de déplacement ?",
                        'marks' => 1,
                        'explanation' => "Une piste conserve le trajet ou la succession d’empreintes laissées par un organisme, ce qui renseigne sur son déplacement.",
                        'choices' => [
                            [
                                'choice_text' => "Une piste fossile",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un cristal de calcite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une coulée basaltique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un fragment de magma",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une dent de mammifère fossilisée est trouvée dans une couche sédimentaire. Que renseigne-t-elle directement ?",
                        'marks' => 1,
                        'explanation' => "Une dent est un reste corporel. Elle apporte donc d’abord une information anatomique sur l’organisme auquel elle appartenait.",
                        'choices' => [
                            [
                                'choice_text' => "La présence d’un organisme qui possédait cette dent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La direction du champ magnétique terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La profondeur de la nappe phréatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La vitesse de sédimentation actuelle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Fossiles stratigraphiques et datation relative",
                'description' => "Utiliser les fossiles pour comparer l’âge relatif de couches sédimentaires.",
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "À quoi sert principalement un fossile stratigraphique ?",
                        'marks' => 1,
                        'explanation' => "Un fossile stratigraphique, présent pendant une durée géologique courte et sur une large zone, aide à corréler des couches de même âge relatif.",
                        'choices' => [
                            [
                                'choice_text' => "À corréler et dater relativement des couches",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "À mesurer directement la température d’une roche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "À déterminer la profondeur du manteau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "À calculer la salinité d’un ancien océan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux couches éloignées contiennent la même espèce de fossile stratigraphique. Quelle conclusion est la plus raisonnable ?",
                        'marks' => 1,
                        'explanation' => "La présence du même fossile stratigraphique permet de corréler les couches et suggère un âge relatif proche, sans exiger une identité totale des roches.",
                        'choices' => [
                            [
                                'choice_text' => "Elles peuvent être approximativement contemporaines",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles ont exactement la même composition minérale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles appartiennent forcément au même continent actuel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles sont nécessairement issues du même volcan",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel caractère est favorable à un bon fossile stratigraphique ?",
                        'marks' => 1,
                        'explanation' => "Plus l’intervalle d’existence est court, plus le fossile est utile pour distinguer des intervalles de temps successifs.",
                        'choices' => [
                            [
                                'choice_text' => "Une durée d’existence relativement courte",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une durée d’existence de plusieurs milliards d’années",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une répartition limitée à un seul mètre carré",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une conservation impossible",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche A contient un fossile X connu pour une courte période. Une couche B contient X. Que peut-on proposer ?",
                        'marks' => 1,
                        'explanation' => "La présence du même fossile stratigraphique constitue un indice de corrélation entre les couches et d’un âge relatif comparable.",
                        'choices' => [
                            [
                                'choice_text' => "A et B ont probablement un âge relatif voisin",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "B est obligatoirement plus ancienne que A",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "A est nécessairement magmatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "X ne peut pas servir à la corrélation",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Si un fossile est apparu avant un autre et a disparu avant lui, le second peut être…",
                        'marks' => 1,
                        'explanation' => "Un fossile dont l’intervalle temporel est mieux circonscrit peut aider à distinguer des couches plus récentes ou plus anciennes dans une série.",
                        'choices' => [
                            [
                                'choice_text' => "utilisé pour reconnaître un intervalle plus récent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "utilisé comme preuve d’une roche magmatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "forcément plus ancien que le premier",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "indépendant de l’âge des couches",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la grande extension géographique est-elle utile pour un fossile stratigraphique ?",
                        'marks' => 1,
                        'explanation' => "Une large répartition géographique permet d’utiliser le même fossile pour comparer des couches situées dans des régions différentes.",
                        'choices' => [
                            [
                                'choice_text' => "Elle permet de corréler des couches éloignées",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle rend l’organisme forcément plus grand",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle empêche toute conservation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle transforme le fossile en minéral",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche contient un fossile caractéristique du Jurassique, tandis qu’une autre contient un fossile caractéristique du Crétacé. Laquelle est relativement plus récente ?",
                        'marks' => 1,
                        'explanation' => "À l’échelle géologique générale, le Crétacé est postérieur au Jurassique. Le fossile permet ici une datation relative.",
                        'choices' => [
                            [
                                'choice_text' => "La couche contenant le fossile du Crétacé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couche contenant le fossile du Jurassique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux sont forcément du même âge",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Impossible sans connaître la météo",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle méthode correspond à une datation relative ?",
                        'marks' => 1,
                        'explanation' => "La datation relative établit un ordre chronologique sans fournir nécessairement un âge numérique exact.",
                        'choices' => [
                            [
                                'choice_text' => "Dire qu’une couche est plus ancienne qu’une autre",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Donner l’âge exact d’une roche en millions d’années",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Mesurer la demi-vie d’un isotope",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Calculer une température avec un thermomètre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un fossile présent dans trois continents et limité à une courte période est particulièrement intéressant pour…",
                        'marks' => 1,
                        'explanation' => "Une large distribution associée à un intervalle temporel court rend le fossile efficace pour corréler des couches éloignées.",
                        'choices' => [
                            [
                                'choice_text' => "la corrélation stratigraphique à grande échelle",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la mesure du pH actuel des océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la cartographie du noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la mesure de la vitesse du vent",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux couches ont des fossiles différents mais tous deux connus pour des intervalles non chevauchants. Peut-on les placer dans le temps ?",
                        'marks' => 1,
                        'explanation' => "Comparer les intervalles d’existence des fossiles peut permettre d’établir l’ordre relatif des couches, même sans âge numérique.",
                        'choices' => [
                            [
                                'choice_text' => "Oui, en comparant les intervalles d’existence des fossiles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Non, les fossiles ne renseignent jamais sur le temps",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Oui, mais seulement si les couches sont volcaniques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Seulement en mesurant la température de surface",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Lire une coupe géologique simple",
                'description' => "Interpréter une succession de couches et appliquer des principes simples de géologie historique.",
                'duration' => 22,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Dans une série sédimentaire non déformée, quelle couche est normalement la plus ancienne ?",
                        'marks' => 1,
                        'explanation' => "Le principe de superposition indique que, dans une série sédimentaire non renversée, les couches inférieures sont généralement plus anciennes que les couches supérieures.",
                        'choices' => [
                            [
                                'choice_text' => "La couche située à la base",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couche située au sommet",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Toujours la couche la plus claire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couche qui contient le plus gros fossile",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche horizontale est recoupée par une faille. Quel événement est plus récent ?",
                        'marks' => 1,
                        'explanation' => "Le principe de recoupement indique qu’une structure qui coupe une autre formation est plus récente que celle qu’elle recoupe.",
                        'choices' => [
                            [
                                'choice_text' => "La faille",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le dépôt de la couche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La formation du sédiment initial",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’altération avant dépôt",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un fossile apparaît dans une couche située au-dessus d’une autre couche fossilifère. Quelle conclusion simple peut-on tirer ?",
                        'marks' => 1,
                        'explanation' => "Dans une série non renversée, la superposition permet d’attribuer un âge relatif plus récent à la couche supérieure.",
                        'choices' => [
                            [
                                'choice_text' => "La couche supérieure est plus récente si la série est normale",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couche supérieure est toujours magmatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La couche inférieure est forcément métamorphique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux couches ont obligatoirement le même âge",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un filon magmatique traverse plusieurs couches sédimentaires. Que signifie ce recoupement ?",
                        'marks' => 1,
                        'explanation' => "Le filon recoupe les couches : il s’est donc mis en place après leur dépôt, selon le principe de recoupement.",
                        'choices' => [
                            [
                                'choice_text' => "Le filon est plus récent que les couches qu’il traverse",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le filon est plus ancien que toutes les couches",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les couches se sont déposées après le filon sans exception",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le filon est un fossile",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche présente des galets issus d’une roche située plus bas. Que peut indiquer la présence de ces galets ?",
                        'marks' => 1,
                        'explanation' => "Les galets sont des fragments remaniés d’une roche antérieure, ce qui indique une phase d’érosion puis de transport.",
                        'choices' => [
                            [
                                'choice_text' => "Une érosion préalable de la roche source",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une fusion totale de la roche source",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une apparition spontanée des galets",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une origine nécessairement extraterrestre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une coupe, on observe de bas en haut : calcaire, grès, argile. Dans une série non renversée, laquelle est la plus récente ?",
                        'marks' => 1,
                        'explanation' => "La couche située au sommet est la plus récente dans une série sédimentaire non renversée.",
                        'choices' => [
                            [
                                'choice_text' => "L’argile",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le calcaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le grès",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Impossible à dire même avec la superposition",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une surface d’érosion sépare deux ensembles de couches. Quel nom décrit le mieux cette interruption de l’enregistrement géologique ?",
                        'marks' => 1,
                        'explanation' => "Une discordance correspond à une interruption de la sédimentation et souvent à une phase d’érosion avant de nouveaux dépôts.",
                        'choices' => [
                            [
                                'choice_text' => "Une discordance",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une chambre magmatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une faille inverse par définition",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un fossile stratigraphique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche est inclinée puis recouverte par une nouvelle couche horizontale. Quel événement est antérieur ?",
                        'marks' => 1,
                        'explanation' => "Le fait que les couches inclinées soient recouvertes par une couche horizontale montre que leur déformation est antérieure au dépôt de la couche supérieure.",
                        'choices' => [
                            [
                                'choice_text' => "L’inclinaison des couches anciennes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le dépôt de la couche horizontale supérieure",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La formation du fossile le plus récent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La période actuelle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel indice permet le mieux de reconnaître une ancienne surface d’érosion dans une coupe ?",
                        'marks' => 1,
                        'explanation' => "Une surface d’érosion peut tronquer des couches plus anciennes et présenter une géométrie irrégulière avant de nouveaux dépôts.",
                        'choices' => [
                            [
                                'choice_text' => "Une limite irrégulière qui tronque des couches anciennes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une couche parfaitement uniforme sans interruption",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une série de fossiles identiques partout",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un cristal isolé dans une roche",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche est présente à gauche d’une coupe mais absente à droite, où une surface d’érosion est visible. Quelle hypothèse simple est cohérente ?",
                        'marks' => 1,
                        'explanation' => "La disparition d’une couche sous une surface d’érosion peut s’expliquer par son décapage avant la poursuite de la sédimentation.",
                        'choices' => [
                            [
                                'choice_text' => "La couche a pu être érodée avant les dépôts suivants",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couche a nécessairement fondu dans le noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle est devenue un fossile",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle a été créée par la météo actuelle",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Grandes extinctions et renouvellement du vivant",
                'description' => "Situer les grandes extinctions et comprendre leur rôle général dans l’histoire de la vie.",
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Une extinction massive correspond à…",
                        'marks' => 1,
                        'explanation' => "Une extinction massive touche une proportion importante des espèces à l’échelle géologique et modifie fortement la biodiversité.",
                        'choices' => [
                            [
                                'choice_text' => "une disparition d’un grand nombre d’espèces sur une période géologiquement courte",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la disparition d’un seul individu",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la formation d’une nouvelle roche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une migration saisonnière",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle grande extinction marque la limite entre le Crétacé et le Paléogène ?",
                        'marks' => 1,
                        'explanation' => "L’extinction K-Pg, il y a environ 66 millions d’années, est notamment connue pour la disparition des dinosaures non aviens.",
                        'choices' => [
                            [
                                'choice_text' => "L’extinction K-Pg",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "L’extinction du Dévonien inférieur seulement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’extinction du Jurassique moyen",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Aucune extinction",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Après une extinction importante, pourquoi certaines lignées peuvent-elles se diversifier rapidement ?",
                        'marks' => 1,
                        'explanation' => "Une diminution du nombre de concurrents peut libérer des niches écologiques et favoriser la diversification des lignées survivantes.",
                        'choices' => [
                            [
                                'choice_text' => "Des niches écologiques deviennent disponibles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les organismes changent tous simultanément d’espèce",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La Terre cesse d’avoir des océans",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les fossiles cessent d’exister",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les dinosaures non aviens ont disparu lors de quelle période ?",
                        'marks' => 1,
                        'explanation' => "Les dinosaures non aviens disparaissent à la limite Crétacé-Paléogène, vers 66 Ma.",
                        'choices' => [
                            [
                                'choice_text' => "À la fin du Crétacé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "À la fin du Permien",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Au début du Trias",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pendant le Précambrien",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les trilobites ont disparu avant l’apparition des premiers humains. Quelle affirmation est correcte ?",
                        'marks' => 1,
                        'explanation' => "Les trilobites sont des arthropodes marins du Paléozoïque, très antérieurs à l’histoire humaine.",
                        'choices' => [
                            [
                                'choice_text' => "Les trilobites sont des organismes bien plus anciens que les humains",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les trilobites et les humains vivaient ensemble",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les trilobites sont des mammifères",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les trilobites sont apparus après Homo sapiens",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une forte diminution de la biodiversité dans les archives fossiles peut constituer un indice de…",
                        'marks' => 1,
                        'explanation' => "Une baisse brutale et généralisée de la diversité fossile peut signaler une crise biologique importante.",
                        'choices' => [
                            [
                                'choice_text' => "crise biologique ou extinction",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "formation d’un nuage",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "augmentation locale du vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "variation journalière de la météo",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quelle proposition résume le mieux le rôle des extinctions dans l’histoire de la vie ?",
                        'marks' => 1,
                        'explanation' => "Les extinctions modifient profondément les écosystèmes. Les survivants peuvent ensuite se diversifier et occuper de nouvelles niches.",
                        'choices' => [
                            [
                                'choice_text' => "Elles modifient la composition de la biodiversité et sont suivies de phases de renouvellement",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elles empêchent toute évolution future",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles ne touchent jamais plusieurs groupes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elles n’affectent que les roches",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une espèce disparaît localement mais reste présente ailleurs. S’agit-il forcément d’une extinction globale ?",
                        'marks' => 1,
                        'explanation' => "Une disparition locale ou régionale ne signifie pas qu’une espèce a disparu de la planète entière.",
                        'choices' => [
                            [
                                'choice_text' => "Non",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Oui, toujours",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Seulement si elle est marine",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Seulement si elle est fossile",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’étude des extinctions intéresse-t-elle les paléontologues ?",
                        'marks' => 1,
                        'explanation' => "Les archives fossiles enregistrent les changements de diversité et permettent d’étudier les crises biologiques et leurs conséquences.",
                        'choices' => [
                            [
                                'choice_text' => "Elle permet de comprendre les changements majeurs de la biodiversité au cours du temps",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle donne directement la météo de demain",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle mesure la gravité à la surface actuelle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle remplace toute étude des roches",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel exemple correspond à un renouvellement de la biodiversité après une crise ?",
                        'marks' => 1,
                        'explanation' => "Après certaines crises, les lignées survivantes peuvent se diversifier et occuper des rôles écologiques laissés vacants.",
                        'choices' => [
                            [
                                'choice_text' => "La diversification de plusieurs lignées dans des niches devenues disponibles",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La disparition simultanée de toute vie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La transformation de tous les fossiles en magma",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’arrêt définitif de la sédimentation",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche renferme des spores et du pollen très abondants. Quelle information peut-on rechercher en priorité ?",
                        'marks' => 1,
                        'explanation' => "Le pollen et les spores peuvent être transportés et conservés dans les sédiments. Leur diversité aide à reconstituer la végétation ancienne et, avec d’autres indices, l’environnement.",
                        'choices' => [
                            [
                                'choice_text' => "La végétation qui entourait le site",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La température du noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La vitesse d’un tsunami",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La profondeur du manteau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Fossiles emblématiques du registre paléontologique",
                'description' => "Reconnaître des groupes fossiles majeurs et leur contexte général.",
                'duration' => 19,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Les ammonites vivaient principalement dans…",
                        'marks' => 1,
                        'explanation' => "Les ammonites étaient des céphalopodes marins à coquille, très répandus dans les mers du Mésozoïque.",
                        'choices' => [
                            [
                                'choice_text' => "les mers",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "les déserts uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les forêts tropicales actuelles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les glaciers continentaux",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les trilobites appartiennent au groupe des…",
                        'marks' => 1,
                        'explanation' => "Les trilobites sont des arthropodes marins disparus, caractérisés notamment par leur corps segmenté.",
                        'choices' => [
                            [
                                'choice_text' => "arthropodes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "mammifères",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "reptiles modernes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "plantes à fleurs",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un fossile de dinosaure ne prouve-t-il pas que les dinosaures vivaient encore récemment ?",
                        'marks' => 1,
                        'explanation' => "Un fossile est une archive du passé. Il faut utiliser son contexte stratigraphique et d’autres méthodes pour le replacer dans le temps.",
                        'choices' => [
                            [
                                'choice_text' => "Parce que les fossiles témoignent du passé et doivent être replacés dans leur âge géologique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que les dinosaures sont invisibles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les fossiles sont toujours faux",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’un fossile ne peut jamais être ancien",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel animal fossile est souvent utilisé comme exemple de transition montrant des caractères de dinosaures et d’oiseaux ?",
                        'marks' => 1,
                        'explanation' => "Archaeopteryx présente des caractères associés aux dinosaures théropodes et aux oiseaux primitifs, ce qui en fait un exemple classique de transition évolutive.",
                        'choices' => [
                            [
                                'choice_text' => "Archaeopteryx",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Trilobite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Mammouth moderne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Foraminifère actuel",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Le mammouth laineux est surtout associé aux environnements froids de…",
                        'marks' => 1,
                        'explanation' => "Le mammouth laineux vivait dans des environnements froids du Pléistocène et du début de l’Holocène.",
                        'choices' => [
                            [
                                'choice_text' => "la fin du Quaternaire",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "l’Archéen",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le début du Cambrien",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "le Trias marin",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel fossile est particulièrement connu pour sa forme en disque segmenté ?",
                        'marks' => 1,
                        'explanation' => "Les trilobites ont un corps souvent allongé et trilobé, avec une segmentation visible sur de nombreux fossiles.",
                        'choices' => [
                            [
                                'choice_text' => "Un trilobite",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une ammonite",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une dent de mammifère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une feuille fossile",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une dent de requin fossilisée constitue…",
                        'marks' => 1,
                        'explanation' => "Une dent appartient directement au corps de l’animal : il s’agit donc d’un reste corporel fossilisé.",
                        'choices' => [
                            [
                                'choice_text' => "un reste corporel",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une trace d’activité",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "un courant fossile",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une couche géologique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les foraminifères fossiles sont-ils utiles en géologie ?",
                        'marks' => 1,
                        'explanation' => "De nombreux foraminifères ont une distribution et une histoire temporelle utiles pour la biostratigraphie et la reconstitution des environnements marins.",
                        'choices' => [
                            [
                                'choice_text' => "Ils peuvent servir à corréler des couches et à reconstituer des milieux anciens",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Ils permettent de mesurer la vitesse actuelle du vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils forment le noyau terrestre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ils indiquent toujours une activité volcanique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel fossile est typiquement associé à un ancien organisme marin doté d’une coquille spiralée ?",
                        'marks' => 1,
                        'explanation' => "La coquille spiralée des ammonites est un caractère particulièrement reconnaissable dans les séries marines mésozoïques.",
                        'choices' => [
                            [
                                'choice_text' => "Une ammonite",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un mammouth",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un trilobite uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un pollen de pin",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Les fossiles de pollen sont particulièrement utiles pour étudier…",
                        'marks' => 1,
                        'explanation' => "Le pollen peut être conservé dans les sédiments et renseigner sur la végétation et certaines conditions environnementales anciennes.",
                        'choices' => [
                            [
                                'choice_text' => "la végétation et l’environnement anciens",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "la composition du noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "les courants électriques du manteau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "la vitesse des plaques directement",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Reconstituer un ancien environnement",
                'description' => "Relier les fossiles et les sédiments aux conditions de vie passées.",
                'duration' => 21,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une couche contient de nombreux coquillages marins et du calcaire. Quel milieu est le plus probable ?",
                        'marks' => 1,
                        'explanation' => "Les organismes marins à coquille et les dépôts calcaires indiquent généralement un environnement marin, souvent peu profond selon les autres indices.",
                        'choices' => [
                            [
                                'choice_text' => "Un ancien milieu marin",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une haute montagne sans eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un désert polaire continental uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une chambre magmatique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Des grains de pollen de plantes de climat froid sont trouvés dans une couche ancienne. Que peut-on proposer ?",
                        'marks' => 1,
                        'explanation' => "Le pollen reflète la végétation présente. Une végétation adaptée au froid peut donc indiquer des conditions climatiques plus froides.",
                        'choices' => [
                            [
                                'choice_text' => "Un épisode plus froid dans la région étudiée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une éruption certaine",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une absence totale d’atmosphère",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une formation du noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Des fossiles d’organismes vivant en eau peu profonde sont trouvés très loin d’une côte actuelle. Quelle interprétation est possible ?",
                        'marks' => 1,
                        'explanation' => "La position actuelle d’un continent ne reflète pas nécessairement son environnement ancien. Une région aujourd’hui continentale peut avoir été recouverte par la mer.",
                        'choices' => [
                            [
                                'choice_text' => "La région pouvait être marine dans le passé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La région était forcément un volcan",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les fossiles ont été créés récemment",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’eau des océans a disparu",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Des traces de racines fossiles et un sol ancien apparaissent entre deux couches sédimentaires. Que suggèrent-elles ?",
                        'marks' => 1,
                        'explanation' => "Des racines fossiles et un paléosol montrent généralement que le substrat a été exposé et colonisé par des végétaux avant le dépôt suivant.",
                        'choices' => [
                            [
                                'choice_text' => "Une période d’exposition et de végétation sur place",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une fusion instantanée des sédiments",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une activité nucléaire naturelle",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un océan profond permanent",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche contient des empreintes de pas de vertébrés ainsi que des dunes fossiles. Quelle information supplémentaire apporte la combinaison ?",
                        'marks' => 1,
                        'explanation' => "Les dunes et les pistes de vertébrés peuvent ensemble indiquer un ancien paysage terrestre soumis à des conditions sèches, selon le contexte.",
                        'choices' => [
                            [
                                'choice_text' => "Elle aide à reconstituer un environnement terrestre aride ou semi-aride",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle prouve la présence d’un récif corallien moderne",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle mesure l’âge absolu de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle identifie le noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Des fossiles de coraux coloniaux abondent dans une couche. Quel environnement est souvent associé à de tels organismes ?",
                        'marks' => 1,
                        'explanation' => "Les coraux constructeurs de récifs vivent surtout dans des mers chaudes, claires et peu profondes permettant la lumière.",
                        'choices' => [
                            [
                                'choice_text' => "Une mer chaude, claire et peu profonde",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un glacier continental",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une zone volcanique sans eau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un désert très froid",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche contient des feuilles de grande taille et des traces de racines abondantes. Que peut-on inférer avec prudence ?",
                        'marks' => 1,
                        'explanation' => "Les restes végétaux et les racines attestent d’une couverture végétale locale ou proche au moment de la formation du dépôt.",
                        'choices' => [
                            [
                                'choice_text' => "Une végétation développée occupait le milieu",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couche s’est formée au cœur du noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le milieu était forcément océanique profond",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Aucun végétal ne pouvait y vivre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi faut-il combiner plusieurs types de fossiles pour reconstituer un paléoenvironnement ?",
                        'marks' => 1,
                        'explanation' => "Associer plusieurs indices biologiques et sédimentaires permet de réduire les interprétations trop simplistes et de mieux reconstruire le contexte ancien.",
                        'choices' => [
                            [
                                'choice_text' => "Parce qu’aucun fossile isolé ne renseigne sur tous les paramètres du milieu",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que les fossiles sont toujours contradictoires",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’un seul fossile n’est jamais réel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que les sédiments ne comptent pas",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Des fossiles de plantes aquatiques et de nombreux débris végétaux apparaissent dans un sédiment fin. Quel milieu est plausible ?",
                        'marks' => 1,
                        'explanation' => "Des sédiments fins et des végétaux aquatiques sont compatibles avec un milieu aquatique relativement calme, comme un lac ou un marais.",
                        'choices' => [
                            [
                                'choice_text' => "Un milieu aquatique calme comme un lac",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une coulée basaltique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un sommet volcanique sec",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le manteau supérieur",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche possède des coquilles très abîmées et des grains arrondis. Que peut indiquer cette association ?",
                        'marks' => 1,
                        'explanation' => "L’abrasion des coquilles et l’arrondissement des grains suggèrent qu’ils ont subi du transport et du remaniement avant leur dépôt.",
                        'choices' => [
                            [
                                'choice_text' => "Un transport ou un remaniement important avant le dépôt",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une conservation parfaite sur place",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’absence de toute énergie dans le milieu",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une formation directement dans le noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Méthodes de travail du paléontologue",
                'description' => "Comprendre comment les fossiles sont observés, classés et interprétés avec leur contexte géologique.",
                'duration' => 20,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Lors d’une fouille, pourquoi note-t-on précisément la position d’un fossile dans la couche ?",
                        'marks' => 1,
                        'explanation' => "La position stratigraphique aide à dater relativement le fossile, à le comparer à d’autres niveaux et à reconstruire son environnement.",
                        'choices' => [
                            [
                                'choice_text' => "Pour conserver son contexte stratigraphique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour connaître immédiatement son ADN complet",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour mesurer la vitesse du vent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour colorer la roche",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Que doit faire un paléontologue avant d’identifier un fossile ?",
                        'marks' => 1,
                        'explanation' => "L’identification repose sur l’observation des caractères de l’échantillon et sur leur comparaison avec des formes connues.",
                        'choices' => [
                            [
                                'choice_text' => "Observer ses caractères morphologiques et son contexte",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Choisir au hasard une espèce",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le chauffer jusqu’à fusion",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le comparer uniquement à une roche magmatique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi conserver un échantillon avec sa documentation de terrain ?",
                        'marks' => 1,
                        'explanation' => "La documentation associe le fossile à une couche, une localisation et des observations utiles pour les interprétations ultérieures.",
                        'choices' => [
                            [
                                'choice_text' => "Pour pouvoir relier les observations de laboratoire au contexte d’origine",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour empêcher toute étude future",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour changer son âge",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour augmenter artificiellement sa taille",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une photographie montre un fossile mais aucune information sur sa couche d’origine. Quelle limite présente cette situation ?",
                        'marks' => 1,
                        'explanation' => "Sans provenance, on perd une partie des informations permettant la datation relative et la reconstruction du milieu.",
                        'choices' => [
                            [
                                'choice_text' => "Le contexte stratigraphique et environnemental est difficile à établir",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le fossile devient automatiquement plus récent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La forme ne peut jamais être observée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La roche devient forcément volcanique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel outil aide directement à comparer la forme d’un fossile avec des spécimens connus ?",
                        'marks' => 1,
                        'explanation' => "Les collections de référence et la documentation scientifique permettent de comparer les caractères morphologiques et la répartition des espèces.",
                        'choices' => [
                            [
                                'choice_text' => "Une collection de référence ou une base documentaire scientifique",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un baromètre météo",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un sismographe",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un thermomètre de cuisine",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un fossile fragmenté peut-il rester utile ?",
                        'marks' => 1,
                        'explanation' => "Même incomplet, un fossile peut présenter une structure caractéristique permettant une identification ou une interprétation partielle.",
                        'choices' => [
                            [
                                'choice_text' => "Certains fragments conservent des caractères diagnostiques",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Tout fragment est inutilisable",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il prouve toujours une extinction",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il donne automatiquement une date exacte",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel enregistrement est particulièrement important sur un site fossilifère ?",
                        'marks' => 1,
                        'explanation' => "Documenter les niveaux stratigraphiques et les emplacements permet de conserver la valeur scientifique des découvertes.",
                        'choices' => [
                            [
                                'choice_text' => "La stratigraphie et la localisation des découvertes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Uniquement la couleur du ciel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le niveau sonore du laboratoire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La vitesse du véhicule utilisé",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi éviter de confondre un fossile transporté avec un fossile trouvé sur place ?",
                        'marks' => 1,
                        'explanation' => "Un fossile remanié peut provenir d’une couche plus ancienne. Le prendre pour un élément contemporain du dépôt conduirait à une mauvaise interprétation.",
                        'choices' => [
                            [
                                'choice_text' => "Le transport peut modifier l’âge apparent et le signal environnemental du dépôt",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que tous les fossiles sont identiques",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que le transport crée de nouvelles espèces",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce qu’un fossile ne peut jamais être déplacé",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel type d’observation permet de repérer une abrasion liée au transport ?",
                        'marks' => 1,
                        'explanation' => "L’usure et l’arrondissement des surfaces sont des indices fréquents d’un transport ou d’un remaniement.",
                        'choices' => [
                            [
                                'choice_text' => "Des surfaces usées ou des cassures arrondies",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une couleur identique à la roche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La présence d’un fossile dans un musée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une température constante",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une étude scientifique, pourquoi comparer plusieurs fossiles d’une même population ?",
                        'marks' => 1,
                        'explanation' => "Comparer plusieurs individus aide à évaluer la variabilité naturelle et évite de créer artificiellement une nouvelle espèce à partir d’une seule différence.",
                        'choices' => [
                            [
                                'choice_text' => "Pour distinguer la variation normale d’un caractère d’une différence entre espèces",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Pour supprimer toute variation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour obtenir un seul spécimen plus grand",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Pour changer l’âge de la couche",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Interpréter un registre fossile",
                'description' => "Lire simplement l’abondance et la répartition des fossiles au cours du temps.",
                'duration' => 19,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Un groupe de fossiles est présent dans plusieurs couches, puis disparaît totalement dans les couches plus récentes. Quelle interprétation est possible ?",
                        'marks' => 1,
                        'explanation' => "Une disparition nette et durable dans le registre fossile peut correspondre à une extinction, en tenant compte des limites de l’enregistrement.",
                        'choices' => [
                            [
                                'choice_text' => "Le groupe a pu connaître une extinction",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il est forcément devenu une roche magmatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il a disparu de la Terre avant d’exister",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les couches récentes sont toujours plus anciennes",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Si la première apparition d’un fossile est observée dans une couche précise, que peut-on dire avec prudence ?",
                        'marks' => 1,
                        'explanation' => "Le registre fossile donne une première occurrence observée, pas forcément la date exacte de l’apparition biologique de l’espèce.",
                        'choices' => [
                            [
                                'choice_text' => "L’organisme est au moins présent à partir de cet intervalle enregistré",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Il apparaît forcément exactement ce jour-là",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La Terre venait de se former",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Il était déjà nécessairement éteint",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le registre fossile n’est-il pas un enregistrement parfait de toute la vie passée ?",
                        'marks' => 1,
                        'explanation' => "De nombreuses espèces ne se fossilisent pas, certains fossiles sont détruits et beaucoup de niveaux ne sont pas conservés ou accessibles.",
                        'choices' => [
                            [
                                'choice_text' => "La fossilisation et la conservation sont rares et incomplètes",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Tous les organismes sont fossilisés de la même façon",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les roches contiennent toujours chaque espèce",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les fossiles sont uniquement artificiels",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une forte abondance de fossiles dans une couche peut indiquer…",
                        'marks' => 1,
                        'explanation' => "L’abondance peut résulter d’une forte présence d’organismes, d’une concentration après transport ou de conditions de conservation favorables. Le contexte reste essentiel.",
                        'choices' => [
                            [
                                'choice_text' => "une accumulation favorable à la conservation ou à l’habitat étudié",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "une absence totale de vie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une erreur certaine de datation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "une activité du noyau",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel biais peut apparaître lorsque les organismes à coquille sont beaucoup mieux représentés que les organismes à corps mou ?",
                        'marks' => 1,
                        'explanation' => "Les parties dures ont généralement de meilleures chances de fossilisation, ce qui rend leur représentation disproportionnée dans les archives.",
                        'choices' => [
                            [
                                'choice_text' => "Le registre fossile favorise les organismes facilement conservés",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Le registre devient toujours plus récent",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les coquilles empêchent les sédiments",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les organismes mous n’ont jamais existé",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux couches ont la même diversité de fossiles mais des espèces différentes. Que peut-on étudier ?",
                        'marks' => 1,
                        'explanation' => "Des assemblages différents peuvent signaler un renouvellement des communautés lié à des changements environnementaux ou biologiques.",
                        'choices' => [
                            [
                                'choice_text' => "Un changement de communautés au cours du temps",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La composition du noyau",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La température du Soleil",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La vitesse du son",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une lacune dans le registre fossile n’indique-t-elle pas nécessairement une absence réelle d’organismes ?",
                        'marks' => 1,
                        'explanation' => "Une lacune peut refléter une absence de dépôt, une érosion, une mauvaise fossilisation ou un mauvais accès aux roches.",
                        'choices' => [
                            [
                                'choice_text' => "La période peut ne pas avoir été enregistrée ou les fossiles peuvent avoir été détruits",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Parce que toute roche contient des fossiles",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que l’extinction est impossible",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Parce que tous les sédiments sont récents",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une espèce fossile est très abondante dans une couche mais rare dans une autre. Quelle conclusion est la plus prudente ?",
                        'marks' => 1,
                        'explanation' => "L’abondance observée dépend de la population, du dépôt et de la conservation. Il faut éviter d’attribuer automatiquement la variation à une seule cause.",
                        'choices' => [
                            [
                                'choice_text' => "Son abondance enregistrée a varié ou les conditions de conservation ont changé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Elle a changé d’ADN exactement entre les deux couches",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle est devenue un minéral",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Elle n’a jamais vécu dans la seconde période",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une succession de fossiles montre d’abord A, puis A+B, puis B seul. Que suggère simplement cette succession ?",
                        'marks' => 1,
                        'explanation' => "La succession traduit un changement des organismes présents ou conservés dans les différents intervalles stratigraphiques.",
                        'choices' => [
                            [
                                'choice_text' => "Un remplacement progressif de la communauté enregistrée",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une fusion des deux espèces",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une absence de sédimentation totale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un retour au temps présent entre chaque couche",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel élément est le plus utile pour interpréter correctement une variation d’abondance fossile ?",
                        'marks' => 1,
                        'explanation' => "Le contexte sédimentaire aide à distinguer une variation écologique d’un effet de transport ou de conservation.",
                        'choices' => [
                            [
                                'choice_text' => "Le contexte sédimentaire associé",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La couleur de l’étiquette du musée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La taille du laboratoire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "L’heure de la journée",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Cas de synthèse : du fossile à l’histoire du milieu",
                'description' => "Mobiliser plusieurs indices paléontologiques dans de petits cas d’interprétation.",
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une couche contient des coraux fossiles, du calcaire et peu de débris terrigènes. Quel milieu est le plus compatible ?",
                        'marks' => 1,
                        'explanation' => "Les coraux et le calcaire, associés à peu de débris terrigènes, sont compatibles avec un milieu marin chaud, clair et peu profond.",
                        'choices' => [
                            [
                                'choice_text' => "Une mer chaude et peu profonde",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un désert glaciaire",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une chambre magmatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une forêt boréale continentale",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une couche supérieure contient des racines fossiles alors que la couche inférieure est riche en coquilles marines. Quelle histoire simple est possible ?",
                        'marks' => 1,
                        'explanation' => "Les coquilles marines indiquent un milieu marin ancien, tandis que des racines dans la couche supérieure témoignent d’un sol exposé et végétalisé.",
                        'choices' => [
                            [
                                'choice_text' => "Un passage d’un milieu marin à une émergence puis à un milieu continental",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Un passage direct du noyau à la surface",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une disparition de toute sédimentation",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une formation instantanée de montagne",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Deux sites éloignés contiennent le même fossile stratigraphique mais des roches différentes. Que peut-on conclure ?",
                        'marks' => 1,
                        'explanation' => "Un fossile stratigraphique sert justement à corréler des âges relatifs malgré des différences de faciès ou de nature des sédiments.",
                        'choices' => [
                            [
                                'choice_text' => "Les couches peuvent être corrélées même si leurs sédiments diffèrent",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les roches doivent avoir été formées par le même volcan",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Le fossile est nécessairement vivant aujourd’hui",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les deux sites doivent être sur le même continent",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un os fossile est très usé et trouvé dans une couche plus jeune que la couche où il se forme habituellement. Quelle possibilité faut-il envisager ?",
                        'marks' => 1,
                        'explanation' => "Un fossile usé dans une couche plus jeune peut avoir été érodé hors d’une couche ancienne puis remanié dans un dépôt plus récent.",
                        'choices' => [
                            [
                                'choice_text' => "Un remaniement depuis une couche plus ancienne",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Une apparition spontanée dans la couche jeune",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une origine magmatique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une erreur de conservation certaine",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Dans une coupe, une faille recoupe trois couches et s’arrête sur une quatrième qui n’est pas décalée. Que peut-on déduire ?",
                        'marks' => 1,
                        'explanation' => "Si la faille affecte les trois couches inférieures mais pas la quatrième, son activité est antérieure au dépôt de la couche supérieure non décalée.",
                        'choices' => [
                            [
                                'choice_text' => "La faille est antérieure au dépôt de la quatrième couche",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La faille est postérieure à la quatrième couche",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Toutes les couches sont du même âge",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La faille est un fossile",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une série montre de bas en haut : trilobites, ammonites, pollen de plantes terrestres. Quelle interprétation générale est la plus prudente ?",
                        'marks' => 1,
                        'explanation' => "Ces fossiles appartiennent à des groupes et à des intervalles différents. Leur succession peut donc informer sur le temps et les changements de milieu.",
                        'choices' => [
                            [
                                'choice_text' => "Elle enregistre des temps et/ou milieux différents",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Les trois organismes vivaient nécessairement ensemble",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Les trilobites sont plus récents que les plantes modernes",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La série est forcément magmatique",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un paléontologue veut vérifier si une couche correspond à un environnement lacustre. Quel indice serait particulièrement utile ?",
                        'marks' => 1,
                        'explanation' => "Des organismes d’eau douce associés à des dépôts calmes peuvent soutenir l’hypothèse d’un ancien lac, surtout avec d’autres indices concordants.",
                        'choices' => [
                            [
                                'choice_text' => "Des fossiles d’organismes d’eau douce associés à des sédiments fins",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Des coquilles de pleine mer uniquement",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Un filon basaltique",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une faille profonde",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Une extinction semble très nette dans un seul bassin sédimentaire. Quelle précaution est importante ?",
                        'marks' => 1,
                        'explanation' => "Une extinction locale peut être confondue avec une lacune d’enregistrement. Il faut comparer plusieurs sites et niveaux avant d’élargir la conclusion.",
                        'choices' => [
                            [
                                'choice_text' => "Vérifier qu’il ne s’agit pas d’une lacune locale du registre fossile",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Conclure immédiatement à une extinction mondiale",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Ignorer la stratigraphie",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Choisir l’espèce au hasard",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Un fossile présente des caractères intermédiaires entre deux groupes connus. Que peut-il apporter ?",
                        'marks' => 1,
                        'explanation' => "Un assemblage de caractères peut éclairer des transitions évolutives, mais l’interprétation doit s’appuyer sur plusieurs données anatomiques et stratigraphiques.",
                        'choices' => [
                            [
                                'choice_text' => "Des informations sur une transition évolutive possible",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "La preuve qu’il n’a jamais évolué",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Une mesure directe de l’âge absolu sans autre donnée",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "La composition du noyau terrestre",
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => "Quel raisonnement combine le mieux paléontologie et stratigraphie ?",
                        'marks' => 1,
                        'explanation' => "La paléontologie fournit les indices biologiques et la stratigraphie leur position relative. Les deux approches se complètent pour reconstruire l’histoire géologique.",
                        'choices' => [
                            [
                                'choice_text' => "Identifier les fossiles puis utiliser leur position et leurs intervalles d’existence pour comparer les couches",
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => "Identifier la couleur des fossiles puis déduire le climat actuel",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Peser les fossiles puis calculer l’âge de la Terre",
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => "Mesurer le vent puis dater les sédiments",
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
