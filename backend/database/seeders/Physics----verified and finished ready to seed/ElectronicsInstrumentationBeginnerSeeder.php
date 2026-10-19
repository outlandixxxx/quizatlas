<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ElectronicsInstrumentationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'electronics-instrumentation')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bases de l’électronique',
                'description' => 'Découvrir les grandeurs électriques fondamentales et les composants élémentaires utilisés en électronique.',
                'questions' => [
                    [
                        'question' => 'Quelle grandeur électrique représente la différence de potentiel entre deux points ?',
                        'choices' => [
                            ['choice_text' => 'La tension électrique', 'is_correct' => true],
                            ['choice_text' => 'La résistance thermique', 'is_correct' => false],
                            ['choice_text' => 'La fréquence mécanique', 'is_correct' => false],
                            ['choice_text' => 'La masse électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'La tension électrique, exprimée en volts, représente une différence de potentiel entre deux points.',
                    ],
                    [
                        'question' => 'Quelle est l’unité SI de l’intensité du courant électrique ?',
                        'choices' => [
                            ['choice_text' => 'Le volt', 'is_correct' => false],
                            ['choice_text' => 'L’ohm', 'is_correct' => false],
                            ['choice_text' => 'L’ampère', 'is_correct' => true],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intensité du courant électrique se mesure en ampères.',
                    ],
                    [
                        'question' => 'Quelle est l’unité SI de la résistance électrique ?',
                        'choices' => [
                            ['choice_text' => 'Le volt', 'is_correct' => false],
                            ['choice_text' => 'Le coulomb', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'L’ohm', 'is_correct' => true],
                        ],
                        'explanation' => 'La résistance électrique est exprimée en ohms, symbole Ω.',
                    ],
                    [
                        'question' => 'Quelle loi relie la tension, la résistance et le courant dans un conducteur ohmique ?',
                        'choices' => [
                            ['choice_text' => 'La loi de Pascal', 'is_correct' => false],
                            ['choice_text' => 'La loi d’Ohm', 'is_correct' => true],
                            ['choice_text' => 'La loi de Snell-Descartes', 'is_correct' => false],
                            ['choice_text' => 'La loi de Hooke', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi d’Ohm s’écrit U = RI.',
                    ],
                    [
                        'question' => 'Quel composant est principalement utilisé pour s’opposer au passage du courant ?',
                        'choices' => [
                            ['choice_text' => 'La bobine uniquement', 'is_correct' => false],
                            ['choice_text' => 'La résistance', 'is_correct' => true],
                            ['choice_text' => 'Le transistor uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le fusible ouvert', 'is_correct' => false],
                        ],
                        'explanation' => 'Une résistance limite le courant et provoque une chute de tension selon la loi d’Ohm.',
                    ],
                    [
                        'question' => 'Quel composant stocke principalement de l’énergie sous forme de champ électrique ?',
                        'choices' => [
                            ['choice_text' => 'La résistance', 'is_correct' => false],
                            ['choice_text' => 'Le fusible', 'is_correct' => false],
                            ['choice_text' => 'Le radiateur', 'is_correct' => false],
                            ['choice_text' => 'Le condensateur', 'is_correct' => true],
                        ],
                        'explanation' => 'Un condensateur emmagasine de l’énergie dans son champ électrique.',
                    ],
                    [
                        'question' => 'Quel composant stocke de l’énergie principalement sous forme de champ magnétique ?',
                        'choices' => [
                            ['choice_text' => 'Le condensateur', 'is_correct' => false],
                            ['choice_text' => 'La résistance', 'is_correct' => false],
                            ['choice_text' => 'La bobine', 'is_correct' => true],
                            ['choice_text' => 'La diode idéale', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bobine ou inductance stocke de l’énergie dans son champ magnétique.',
                    ],
                    [
                        'question' => 'Quel composant permet principalement au courant de circuler facilement dans un seul sens ?',
                        'choices' => [
                            ['choice_text' => 'La diode', 'is_correct' => true],
                            ['choice_text' => 'La résistance', 'is_correct' => false],
                            ['choice_text' => 'Le condensateur idéal', 'is_correct' => false],
                            ['choice_text' => 'Le transformateur ouvert', 'is_correct' => false],
                        ],
                        'explanation' => 'Une diode est un composant non linéaire qui conduit préférentiellement dans un sens.',
                    ],
                    [
                        'question' => 'Quel composant est couramment utilisé comme interrupteur électronique ou amplificateur ?',
                        'choices' => [
                            ['choice_text' => 'Le transistor', 'is_correct' => true],
                            ['choice_text' => 'Le câble', 'is_correct' => false],
                            ['choice_text' => 'La résistance fixe uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le fusible', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transistors sont utilisés notamment pour commuter et amplifier des signaux.',
                    ],
                    [
                        'question' => 'Quelle puissance électrique peut être calculée par la relation P = UI ?',
                        'choices' => [
                            ['choice_text' => 'La résistance mécanique', 'is_correct' => false],
                            ['choice_text' => 'La puissance électrique absorbée ou fournie dans un cas approprié', 'is_correct' => true],
                            ['choice_text' => 'La fréquence du signal', 'is_correct' => false],
                            ['choice_text' => 'La charge du proton', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un dipôle électrique, la puissance instantanée ou en régime continu peut s’écrire P = UI selon les conventions utilisées.',
                    ],
                ],
            ],

            [
                'title' => 'Circuits électriques et lois de Kirchhoff',
                'description' => 'Apprendre à analyser des circuits simples à l’aide des lois de Kirchhoff et des associations de composants.',
                'questions' => [
                    [
                        'question' => 'Que dit la loi des nœuds de Kirchhoff ?',
                        'choices' => [
                            ['choice_text' => 'La somme des tensions est toujours nulle dans tout circuit sans condition', 'is_correct' => false],
                            ['choice_text' => 'La résistance d’un circuit est toujours constante', 'is_correct' => false],
                            ['choice_text' => 'La puissance est toujours nulle à un nœud', 'is_correct' => false],
                            ['choice_text' => 'La somme algébrique des courants en un nœud est nulle', 'is_correct' => true],
                        ],
                        'explanation' => 'La loi des nœuds traduit la conservation de la charge électrique.',
                    ],
                    [
                        'question' => 'Que dit la loi des mailles de Kirchhoff ?',
                        'choices' => [
                            ['choice_text' => 'Tous les courants d’une maille sont identiques', 'is_correct' => false],
                            ['choice_text' => 'La résistance totale d’une maille est nulle', 'is_correct' => false],
                            ['choice_text' => 'La somme algébrique des tensions le long d’une maille fermée est nulle', 'is_correct' => true],
                            ['choice_text' => 'La puissance de chaque composant est nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des mailles découle de la conservation de l’énergie électrique.',
                    ],
                    [
                        'question' => 'Dans un montage série de deux résistances, le courant est :',
                        'choices' => [
                            ['choice_text' => 'Toujours nul dans la première', 'is_correct' => false],
                            ['choice_text' => 'Le même dans les deux résistances', 'is_correct' => true],
                            ['choice_text' => 'Différent selon la résistance traversée dans un circuit idéal série', 'is_correct' => false],
                            ['choice_text' => 'Égal à la tension', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un circuit série sans branchement intermédiaire, le même courant traverse tous les composants.',
                    ],
                    [
                        'question' => 'Deux résistances identiques de 10 Ω montées en série ont une résistance équivalente de :',
                        'choices' => [
                            ['choice_text' => '5 Ω', 'is_correct' => false],
                            ['choice_text' => '10 Ω', 'is_correct' => false],
                            ['choice_text' => '20 Ω', 'is_correct' => true],
                            ['choice_text' => '100 Ω', 'is_correct' => false],
                        ],
                        'explanation' => 'En série, les résistances s’additionnent : Req = R1 + R2 = 20 Ω.',
                    ],
                    [
                        'question' => 'Deux résistances identiques montées en parallèle ont-elles une résistance équivalente inférieure à chacune des résistances individuelles ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est toujours supérieure', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours exactement égale à l’une des résistances', 'is_correct' => false],
                            ['choice_text' => 'Elle devient toujours infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des résistances positives montées en parallèle, la résistance équivalente est inférieure à la plus petite résistance.',
                    ],
                    [
                        'question' => 'Quel instrument mesure principalement une tension électrique ?',
                        'choices' => [
                            ['choice_text' => 'L’ampèremètre', 'is_correct' => false],
                            ['choice_text' => 'Le voltmètre', 'is_correct' => true],
                            ['choice_text' => 'Le wattmètre uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le fréquencemètre uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le voltmètre mesure la différence de potentiel entre deux points.',
                    ],
                    [
                        'question' => 'Comment branche-t-on idéalement un ampèremètre pour mesurer le courant dans une branche ?',
                        'choices' => [
                            ['choice_text' => 'En parallèle sur une source idéale', 'is_correct' => false],
                            ['choice_text' => 'En série avec la branche', 'is_correct' => true],
                            ['choice_text' => 'Toujours entre deux masses mécaniques', 'is_correct' => false],
                            ['choice_text' => 'Sans connexion électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ampèremètre doit être traversé par le courant que l’on souhaite mesurer.',
                    ],
                    [
                        'question' => 'Comment branche-t-on idéalement un voltmètre ?',
                        'choices' => [
                            ['choice_text' => 'En série avec toute la source', 'is_correct' => false],
                            ['choice_text' => 'Toujours en court-circuit', 'is_correct' => false],
                            ['choice_text' => 'En parallèle entre les deux points étudiés', 'is_correct' => true],
                            ['choice_text' => 'Sans référence aux deux points', 'is_correct' => false],
                        ],
                        'explanation' => 'Un voltmètre mesure une différence de potentiel entre deux points et se branche donc en parallèle.',
                    ],
                    [
                        'question' => 'Dans un circuit ouvert idéal, le courant est :',
                        'choices' => [
                            ['choice_text' => 'Infini', 'is_correct' => false],
                            ['choice_text' => 'Égal à la tension', 'is_correct' => false],
                            ['choice_text' => 'Toujours maximal', 'is_correct' => false],
                            ['choice_text' => 'Nul dans la branche ouverte', 'is_correct' => true],
                        ],
                        'explanation' => 'Une coupure du circuit empêche le passage du courant dans la branche concernée.',
                    ],
                    [
                        'question' => 'Dans un court-circuit idéal, la différence de potentiel entre les deux points reliés est :',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Infinie', 'is_correct' => false],
                            ['choice_text' => 'Égale à la résistance', 'is_correct' => false],
                            ['choice_text' => 'Toujours négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Un court-circuit idéal impose une tension nulle entre ses deux bornes.',
                    ],
                ],
            ],

            [
                'title' => 'Diodes et redressement',
                'description' => 'Comprendre le fonctionnement de base des diodes et leur utilisation dans les circuits de redressement.',
                'questions' => [
                    [
                        'question' => 'Dans quel sens une diode classique conduit-elle principalement en polarisation directe ?',
                        'choices' => [
                            ['choice_text' => 'De la cathode vers l’anode uniquement', 'is_correct' => false],
                            ['choice_text' => 'Dans les deux sens avec le même comportement', 'is_correct' => false],
                            ['choice_text' => 'Elle ne conduit jamais', 'is_correct' => false],
                            ['choice_text' => 'De l’anode vers la cathode', 'is_correct' => true],
                        ],
                        'explanation' => 'Une diode conventionnelle conduit lorsque l’anode est à un potentiel suffisamment supérieur à celui de la cathode.',
                    ],
                    [
                        'question' => 'Que signifie polariser une diode en inverse ?',
                        'choices' => [
                            ['choice_text' => 'Augmenter nécessairement son courant', 'is_correct' => false],
                            ['choice_text' => 'La mettre en court-circuit parfait', 'is_correct' => false],
                            ['choice_text' => 'Appliquer une tension qui tend à bloquer la conduction normale de la diode', 'is_correct' => true],
                            ['choice_text' => 'La transformer en résistance variable', 'is_correct' => false],
                        ],
                        'explanation' => 'En polarisation inverse, la diode bloque normalement le courant, sauf phénomènes de fuite ou de claquage selon le composant.',
                    ],
                    [
                        'question' => 'À quoi sert principalement un redresseur ?',
                        'choices' => [
                            ['choice_text' => 'À transformer un courant continu en son uniquement', 'is_correct' => false],
                            ['choice_text' => 'À mesurer une température', 'is_correct' => false],
                            ['choice_text' => 'À convertir une tension alternative en tension unidirectionnelle ou pulsée', 'is_correct' => true],
                            ['choice_text' => 'À amplifier directement une fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'Le redressement utilise notamment des diodes pour obtenir une tension de sortie unidirectionnelle à partir d’une tension alternative.',
                    ],
                    [
                        'question' => 'Qu’appelle-t-on redressement simple alternance ?',
                        'choices' => [
                            ['choice_text' => 'Un redressement qui exploite principalement une alternance du signal d’entrée', 'is_correct' => true],
                            ['choice_text' => 'Un redressement qui utilise uniquement une tension continue', 'is_correct' => false],
                            ['choice_text' => 'Un circuit sans diode', 'is_correct' => false],
                            ['choice_text' => 'Un circuit qui supprime toutes les fréquences', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le redressement simple alternance, une alternance de la tension d’entrée est transmise tandis que l’autre est bloquée.',
                    ],
                    [
                        'question' => 'Quel montage utilise généralement quatre diodes pour effectuer un redressement double alternance ?',
                        'choices' => [
                            ['choice_text' => 'Le pont de Wheatstone', 'is_correct' => false],
                            ['choice_text' => 'Le pont de Kelvin uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le pont thermique', 'is_correct' => false],
                            ['choice_text' => 'Le pont de Graetz', 'is_correct' => true],
                        ],
                        'explanation' => 'Le pont de Graetz est un redresseur double alternance couramment réalisé avec quatre diodes.',
                    ],
                    [
                        'question' => 'Pourquoi ajoute-t-on souvent un condensateur après un redresseur ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire les variations de la tension redressée et lisser le signal', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement la fréquence du secteur', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute charge électrique', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer la tension en résistance', 'is_correct' => false],
                        ],
                        'explanation' => 'Le condensateur se charge près des maxima et se décharge entre eux, ce qui réduit l’ondulation.',
                    ],
                    [
                        'question' => 'Une LED est-elle une diode ?',
                        'choices' => [
                            ['choice_text' => 'Non, c’est toujours une résistance', 'is_correct' => false],
                            ['choice_text' => 'Oui, c’est une diode électroluminescente', 'is_correct' => true],
                            ['choice_text' => 'Non, c’est uniquement un capteur thermique', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais elle ne possède aucune jonction', 'is_correct' => false],
                        ],
                        'explanation' => 'Une LED est une diode semi-conductrice qui émet de la lumière lorsqu’elle est polarisée dans les conditions appropriées.',
                    ],
                    [
                        'question' => 'Quelle propriété est particulièrement utile dans une diode Zener ?',
                        'choices' => [
                            ['choice_text' => 'Sa capacité à produire mécaniquement du mouvement', 'is_correct' => false],
                            ['choice_text' => 'Son fonctionnement uniquement en courant nul', 'is_correct' => false],
                            ['choice_text' => 'Sa transparence optique', 'is_correct' => false],
                            ['choice_text' => 'Son fonctionnement contrôlé en région de claquage pour des applications de régulation', 'is_correct' => true],
                        ],
                        'explanation' => 'Une diode Zener est conçue pour fonctionner dans une région de claquage inverse afin de stabiliser une tension dans certaines applications.',
                    ],
                    [
                        'question' => 'Dans le modèle idéal simplifié, une diode polarisée directement se comporte principalement comme :',
                        'choices' => [
                            ['choice_text' => 'Un circuit ouvert', 'is_correct' => false],
                            ['choice_text' => 'Un interrupteur fermé', 'is_correct' => true],
                            ['choice_text' => 'Une source de courant indépendante', 'is_correct' => false],
                            ['choice_text' => 'Une inductance parfaite', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle idéal, une diode conduit en direct sans chute de tension et bloque en inverse.',
                    ],
                    [
                        'question' => 'Quel composant est souvent associé à une LED pour limiter son courant ?',
                        'choices' => [
                            ['choice_text' => 'Un microphone', 'is_correct' => false],
                            ['choice_text' => 'Une antenne', 'is_correct' => false],
                            ['choice_text' => 'Une résistance', 'is_correct' => true],
                            ['choice_text' => 'Un interrupteur mécanique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une résistance série permet de limiter le courant traversant la LED et d’éviter son endommagement.',
                    ],
                ],
            ],

            [
                'title' => 'Transistors et amplificateurs',
                'description' => 'Découvrir les transistors et leur rôle comme interrupteurs ou amplificateurs dans les circuits électroniques.',
                'questions' => [
                    [
                        'question' => 'Quel type de composant est un transistor bipolaire ?',
                        'choices' => [
                            ['choice_text' => 'Un composant semi-conducteur à trois électrodes', 'is_correct' => true],
                            ['choice_text' => 'Une résistance purement mécanique', 'is_correct' => false],
                            ['choice_text' => 'Une source lumineuse passive', 'is_correct' => false],
                            ['choice_text' => 'Un condensateur à deux bornes uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un transistor bipolaire possède trois bornes : émetteur, base et collecteur.',
                    ],
                    [
                        'question' => 'Quelles sont les trois bornes d’un transistor bipolaire BJT ?',
                        'choices' => [
                            ['choice_text' => 'Anode, cathode et grille', 'is_correct' => false],
                            ['choice_text' => 'Entrée, masse et sortie uniquement', 'is_correct' => false],
                            ['choice_text' => 'Source, drain et collecteur', 'is_correct' => false],
                            ['choice_text' => 'Émetteur, base et collecteur', 'is_correct' => true],
                        ],
                        'explanation' => 'Les trois électrodes d’un BJT sont l’émetteur, la base et le collecteur.',
                    ],
                    [
                        'question' => 'Quels sont les trois terminaux d’un transistor MOSFET classique utilisé en électronique ?',
                        'choices' => [
                            ['choice_text' => 'Anode, cathode et base', 'is_correct' => false],
                            ['choice_text' => 'Source, grille et drain', 'is_correct' => true],
                            ['choice_text' => 'Émetteur, collecteur et grille', 'is_correct' => false],
                            ['choice_text' => 'Phase, neutre et terre', 'is_correct' => false],
                        ],
                        'explanation' => 'Un MOSFET possède principalement une source, une grille et un drain ; le corps ou substrat constitue un quatrième terminal physique souvent relié.',
                    ],
                    [
                        'question' => 'Quelle fonction peut assurer un transistor ?',
                        'choices' => [
                            ['choice_text' => 'Uniquement résistance fixe', 'is_correct' => false],
                            ['choice_text' => 'Uniquement capteur de température', 'is_correct' => false],
                            ['choice_text' => 'Commutateur ou amplificateur', 'is_correct' => true],
                            ['choice_text' => 'Uniquement source d’énergie autonome', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transistors sont utilisés notamment pour commuter des signaux et amplifier des variations électriques.',
                    ],
                    [
                        'question' => 'Que signifie amplifier un signal électrique ?',
                        'choices' => [
                            ['choice_text' => 'Augmenter son amplitude ou sa puissance en utilisant une source d’énergie externe', 'is_correct' => true],
                            ['choice_text' => 'Le rendre nécessairement plus lent', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes ses variations', 'is_correct' => false],
                            ['choice_text' => 'Le convertir obligatoirement en chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un amplificateur utilise une alimentation pour fournir de l’énergie à la sortie tout en conservant l’information du signal d’entrée.',
                    ],
                    [
                        'question' => 'Quelle alimentation est nécessaire au fonctionnement d’un amplificateur électronique réel ?',
                        'choices' => [
                            ['choice_text' => 'Une source d’énergie', 'is_correct' => true],
                            ['choice_text' => 'Aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'Uniquement une source lumineuse', 'is_correct' => false],
                            ['choice_text' => 'Uniquement un aimant permanent', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amplification nécessite de l’énergie, fournie par une alimentation électrique.',
                    ],
                    [
                        'question' => 'Dans une utilisation en commutation, un transistor peut être assimilé grossièrement à :',
                        'choices' => [
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Une antenne passive', 'is_correct' => false],
                            ['choice_text' => 'Un interrupteur commandé électroniquement', 'is_correct' => true],
                            ['choice_text' => 'Une pile chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un transistor peut être commandé entre des états assimilables à un interrupteur ouvert et fermé.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on des transistors dans les circuits numériques ?',
                        'choices' => [
                            ['choice_text' => 'Ils remplacent toujours les capteurs physiques', 'is_correct' => false],
                            ['choice_text' => 'Ils mesurent directement la température', 'is_correct' => false],
                            ['choice_text' => 'Ils produisent toujours de l’énergie sans alimentation', 'is_correct' => false],
                            ['choice_text' => 'Ils permettent de réaliser des fonctions logiques et de commuter rapidement des niveaux électriques', 'is_correct' => true],
                        ],
                        'explanation' => 'Les transistors sont les éléments de base de nombreuses portes logiques et de circuits numériques.',
                    ],
                    [
                        'question' => 'Quel montage permet de faire fonctionner un transistor bipolaire comme amplificateur dans certaines configurations ?',
                        'choices' => [
                            ['choice_text' => 'Un court-circuit permanent de toutes ses bornes', 'is_correct' => false],
                            ['choice_text' => 'Une suppression complète de l’alimentation', 'is_correct' => false],
                            ['choice_text' => 'Une connexion à la terre mécanique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une polarisation adaptée du transistor autour d’un point de fonctionnement', 'is_correct' => true],
                        ],
                        'explanation' => 'L’amplification analogique nécessite de placer le transistor dans une région de fonctionnement appropriée.',
                    ],
                    [
                        'question' => 'Quel avantage majeur présente un transistor par rapport à un interrupteur mécanique dans de nombreux circuits ?',
                        'choices' => [
                            ['choice_text' => 'Il nécessite toujours plus d’énergie qu’un moteur', 'is_correct' => false],
                            ['choice_text' => 'Il peut commuter rapidement sans déplacement mécanique', 'is_correct' => true],
                            ['choice_text' => 'Il fonctionne sans aucun matériau conducteur', 'is_correct' => false],
                            ['choice_text' => 'Il ne peut gérer aucun signal électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transistors permettent des commutations électroniques rapides sans pièces mécaniques mobiles.',
                    ],
                    [
                        'question' => 'Un transistor peut-il être utilisé pour contrôler la puissance délivrée à une charge ?',
                        'choices' => [
                            ['choice_text' => 'Non, il ne peut traiter aucun courant', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement dans les circuits mécaniques', 'is_correct' => false],
                            ['choice_text' => 'Uniquement lorsqu’il n’est connecté à aucune source', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transistors de puissance peuvent contrôler des courants et des tensions importants dans de nombreuses applications.',
                    ],
                ],
            ],

            [
                'title' => 'Signaux analogiques et numériques',
                'description' => 'Comprendre les différences entre signaux analogiques et numériques et les notions de fréquence, amplitude et échantillonnage.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un signal analogique ?',
                        'choices' => [
                            ['choice_text' => 'Un signal limité à deux valeurs uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un signal nécessairement mécanique', 'is_correct' => false],
                            ['choice_text' => 'Un signal dont la grandeur peut varier continûment dans une plage donnée', 'is_correct' => true],
                            ['choice_text' => 'Un signal toujours constant', 'is_correct' => false],
                        ],
                        'explanation' => 'Un signal analogique peut prendre une infinité de valeurs dans une plage continue.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un signal numérique dans sa forme la plus simple ?',
                        'choices' => [
                            ['choice_text' => 'Un signal toujours sinusoïdal', 'is_correct' => false],
                            ['choice_text' => 'Un signal représentant des informations par des niveaux ou états discrets', 'is_correct' => true],
                            ['choice_text' => 'Un signal qui ne possède aucune tension', 'is_correct' => false],
                            ['choice_text' => 'Un signal obligatoirement acoustique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les systèmes numériques utilisent des niveaux discrets pour coder l’information.',
                    ],
                    [
                        'question' => 'Quelle grandeur mesure le nombre de cycles d’un signal périodique par seconde ?',
                        'choices' => [
                            ['choice_text' => 'La fréquence', 'is_correct' => true],
                            ['choice_text' => 'L’amplitude uniquement', 'is_correct' => false],
                            ['choice_text' => 'La résistance', 'is_correct' => false],
                            ['choice_text' => 'La charge', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence correspond au nombre de périodes par seconde et se mesure en hertz.',
                    ],
                    [
                        'question' => 'Quelle est l’unité de la fréquence ?',
                        'choices' => [
                            ['choice_text' => 'Le volt', 'is_correct' => false],
                            ['choice_text' => 'Le hertz', 'is_correct' => true],
                            ['choice_text' => 'L’ampère', 'is_correct' => false],
                            ['choice_text' => 'L’ohm', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence s’exprime en hertz, un hertz correspondant à un cycle par seconde.',
                    ],
                    [
                        'question' => 'Quelle grandeur représente la valeur maximale d’un signal par rapport à sa référence dans une définition simple ?',
                        'choices' => [
                            ['choice_text' => 'La fréquence', 'is_correct' => false],
                            ['choice_text' => 'La période uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’amplitude', 'is_correct' => true],
                            ['choice_text' => 'La résistance', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amplitude caractérise la variation maximale du signal par rapport à sa référence.',
                    ],
                    [
                        'question' => 'Quelle relation relie la période T et la fréquence f d’un signal périodique ?',
                        'choices' => [
                            ['choice_text' => 'f = 1/T', 'is_correct' => true],
                            ['choice_text' => 'f = T', 'is_correct' => false],
                            ['choice_text' => 'f = T²', 'is_correct' => false],
                            ['choice_text' => 'f = 1 + T', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence est l’inverse de la période.',
                    ],
                    [
                        'question' => 'Quel dispositif convertit un signal analogique en données numériques ?',
                        'choices' => [
                            ['choice_text' => 'Un amplificateur mécanique', 'is_correct' => false],
                            ['choice_text' => 'Un convertisseur analogique-numérique (CAN)', 'is_correct' => true],
                            ['choice_text' => 'Un transformateur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un haut-parleur passif', 'is_correct' => false],
                        ],
                        'explanation' => 'Un CAN ou ADC échantillonne et quantifie un signal analogique afin de produire une représentation numérique.',
                    ],
                    [
                        'question' => 'Quel dispositif effectue généralement l’opération inverse, c’est-à-dire convertir une donnée numérique en signal analogique ?',
                        'choices' => [
                            ['choice_text' => 'Un fusible', 'is_correct' => false],
                            ['choice_text' => 'Un oscilloscope', 'is_correct' => false],
                            ['choice_text' => 'Une résistance fixe', 'is_correct' => false],
                            ['choice_text' => 'Un convertisseur numérique-analogique (CNA)', 'is_correct' => true],
                        ],
                        'explanation' => 'Un CNA ou DAC transforme une valeur numérique en grandeur analogique.',
                    ],
                    [
                        'question' => 'Pourquoi échantillonne-t-on un signal analogique ?',
                        'choices' => [
                            ['choice_text' => 'Pour supprimer toute information', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement sa tension', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier sa masse', 'is_correct' => false],
                            ['choice_text' => 'Pour représenter son évolution sous forme de valeurs discrètes dans le temps', 'is_correct' => true],
                        ],
                        'explanation' => 'L’échantillonnage consiste à relever la valeur du signal à des instants espacés.',
                    ],
                    [
                        'question' => 'Quelle opération consiste à associer à un échantillon une valeur parmi un ensemble fini de niveaux ?',
                        'choices' => [
                            ['choice_text' => 'La quantification', 'is_correct' => true],
                            ['choice_text' => 'La modulation mécanique', 'is_correct' => false],
                            ['choice_text' => 'La conduction', 'is_correct' => false],
                            ['choice_text' => 'La polarisation magnétique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantification transforme les amplitudes continues des échantillons en niveaux discrets.',
                    ],
                ],
            ],

            [
                'title' => 'Capteurs et chaînes de mesure',
                'description' => 'Découvrir le rôle des capteurs, du conditionnement du signal et des différentes étapes d’une chaîne de mesure.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un capteur ?',
                        'choices' => [
                            ['choice_text' => 'Un composant qui produit toujours une tension infinie', 'is_correct' => false],
                            ['choice_text' => 'Un dispositif qui transforme une grandeur physique en un signal exploitable', 'is_correct' => true],
                            ['choice_text' => 'Un dispositif qui mesure uniquement la masse', 'is_correct' => false],
                            ['choice_text' => 'Un circuit sans relation avec une grandeur physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un capteur détecte une grandeur comme la température, la pression, la lumière ou l’accélération et fournit un signal associé.',
                    ],
                    [
                        'question' => 'Quel capteur est destiné à mesurer principalement la température ?',
                        'choices' => [
                            ['choice_text' => 'Un accéléromètre', 'is_correct' => false],
                            ['choice_text' => 'Un microphone', 'is_correct' => false],
                            ['choice_text' => 'Une antenne', 'is_correct' => false],
                            ['choice_text' => 'Une thermistance', 'is_correct' => true],
                        ],
                        'explanation' => 'Une thermistance est un composant dont la résistance varie avec la température.',
                    ],
                    [
                        'question' => 'Quel capteur transforme un phénomène lumineux en signal électrique ?',
                        'choices' => [
                            ['choice_text' => 'Une thermistance', 'is_correct' => false],
                            ['choice_text' => 'Une photodiode', 'is_correct' => true],
                            ['choice_text' => 'Une jauge de contrainte uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un potentiomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Une photodiode génère un courant lié à la lumière reçue dans ses conditions de fonctionnement.',
                    ],
                    [
                        'question' => 'Quel capteur est couramment utilisé pour détecter une accélération ?',
                        'choices' => [
                            ['choice_text' => 'Un luxmètre', 'is_correct' => false],
                            ['choice_text' => 'Un manomètre', 'is_correct' => false],
                            ['choice_text' => 'Un accéléromètre', 'is_correct' => true],
                            ['choice_text' => 'Une thermistance', 'is_correct' => false],
                        ],
                        'explanation' => 'Un accéléromètre mesure l’accélération selon un ou plusieurs axes.',
                    ],
                    [
                        'question' => 'Quel capteur peut être utilisé pour mesurer la pression d’un fluide ?',
                        'choices' => [
                            ['choice_text' => 'Un capteur de pression', 'is_correct' => true],
                            ['choice_text' => 'Une LED', 'is_correct' => false],
                            ['choice_text' => 'Un phototransistor uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un quartz optique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un capteur de pression convertit une pression appliquée en une grandeur électrique mesurable.',
                    ],
                    [
                        'question' => 'Quel est le rôle du conditionnement du signal dans une chaîne de mesure ?',
                        'choices' => [
                            ['choice_text' => 'Supprimer définitivement la grandeur mesurée', 'is_correct' => false],
                            ['choice_text' => 'Remplacer automatiquement le capteur', 'is_correct' => false],
                            ['choice_text' => 'Adapter, filtrer, amplifier ou convertir le signal issu du capteur', 'is_correct' => true],
                            ['choice_text' => 'Créer une énergie mécanique sans alimentation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le conditionnement adapte le signal afin qu’il soit exploitable par un système d’acquisition ou de traitement.',
                    ],
                    [
                        'question' => 'Pourquoi amplifie-t-on parfois le signal délivré par un capteur ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire systématiquement sa précision', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute information', 'is_correct' => false],
                            ['choice_text' => 'Parce que le signal peut être trop faible pour être correctement exploité', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un capteur ne peut jamais produire un signal mesurable', 'is_correct' => false],
                        ],
                        'explanation' => 'Les capteurs peuvent produire des signaux de faible amplitude qui nécessitent une amplification avant conversion ou affichage.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un système d’acquisition de données ?',
                        'choices' => [
                            ['choice_text' => 'Un système qui recueille et convertit des mesures pour les enregistrer ou les traiter', 'is_correct' => true],
                            ['choice_text' => 'Un moteur mécanique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un dispositif qui ne fonctionne qu’avec des signaux sonores', 'is_correct' => false],
                            ['choice_text' => 'Un type particulier de batterie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une chaîne d’acquisition recueille les signaux des capteurs et les convertit sous une forme adaptée au traitement informatique.',
                    ],
                    [
                        'question' => 'Quelle grandeur caractérise l’écart entre la valeur mesurée et la valeur de référence ?',
                        'choices' => [
                            ['choice_text' => 'La fréquence d’échantillonnage', 'is_correct' => false],
                            ['choice_text' => 'L’erreur de mesure', 'is_correct' => true],
                            ['choice_text' => 'La résistance de charge uniquement', 'is_correct' => false],
                            ['choice_text' => 'La capacité électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’erreur de mesure correspond à la différence entre la valeur mesurée et une valeur de référence selon la définition utilisée.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on des étalons dans les systèmes de mesure ?',
                        'choices' => [
                            ['choice_text' => 'Pour augmenter la tension d’alimentation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les capteurs', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer automatiquement un signal analogique en son', 'is_correct' => false],
                            ['choice_text' => 'Pour assurer la traçabilité et vérifier la justesse des mesures', 'is_correct' => true],
                        ],
                        'explanation' => 'Les étalons servent de références pour comparer, calibrer et assurer la traçabilité des mesures.',
                    ],
                ],
            ],

            [
                'title' => 'Instruments de mesure',
                'description' => 'Apprendre à utiliser les principaux instruments de mesure électriques et électroniques.',
                'questions' => [
                    [
                        'question' => 'Quel instrument permet d’observer la forme temporelle d’un signal électrique ?',
                        'choices' => [
                            ['choice_text' => 'L’oscilloscope', 'is_correct' => true],
                            ['choice_text' => 'Le thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Le baromètre', 'is_correct' => false],
                            ['choice_text' => 'La balance', 'is_correct' => false],
                        ],
                        'explanation' => 'Un oscilloscope affiche la tension en fonction du temps.',
                    ],
                    [
                        'question' => 'Quel instrument polyvalent peut mesurer tension, courant et résistance ?',
                        'choices' => [
                            ['choice_text' => 'Le spectromètre uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’accéléromètre', 'is_correct' => false],
                            ['choice_text' => 'Le multimètre', 'is_correct' => true],
                            ['choice_text' => 'Le manomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Un multimètre permet de mesurer plusieurs grandeurs électriques.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il choisir correctement le calibre d’un multimètre ?',
                        'choices' => [
                            ['choice_text' => 'Pour supprimer toute résistance interne', 'is_correct' => false],
                            ['choice_text' => 'Pour obtenir une mesure adaptée et éviter une surcharge de l’instrument', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer l’appareil en générateur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un calibre approprié permet une mesure correcte et protège l’instrument contre certaines surcharges.',
                    ],
                    [
                        'question' => 'Un oscilloscope permet-il de mesurer directement une fréquence à partir d’une période observée ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, il ne peut afficher qu’une température', 'is_correct' => false],
                            ['choice_text' => 'Non, il ne mesure jamais de temps', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour des signaux mécaniques', 'is_correct' => false],
                        ],
                        'explanation' => 'En mesurant la période du signal sur l’écran, on peut calculer f = 1/T.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la résolution d’un instrument de mesure ?',
                        'choices' => [
                            ['choice_text' => 'La masse de l’instrument', 'is_correct' => false],
                            ['choice_text' => 'La plus petite variation de la grandeur que l’instrument peut distinguer selon ses spécifications', 'is_correct' => true],
                            ['choice_text' => 'La vitesse de transmission du câble', 'is_correct' => false],
                            ['choice_text' => 'La valeur maximale toujours mesurable', 'is_correct' => false],
                        ],
                        'explanation' => 'La résolution décrit le niveau de détail avec lequel une variation de la grandeur peut être distinguée.',
                    ],
                    [
                        'question' => 'Dans une série de mesures répétées dans les mêmes conditions, que décrit la précision d’un instrument ?',
                        'choices' => [
                            ['choice_text' => 'La taille physique de l’écran', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de boutons de l’appareil', 'is_correct' => false],
                            ['choice_text' => 'La longueur du câble secteur uniquement', 'is_correct' => false],
                            ['choice_text' => 'La proximité entre les résultats répétés, c’est-à-dire leur faible dispersion', 'is_correct' => true],
                        ],
                        'explanation' => 'La précision décrit la proximité entre des résultats répétés. Elle se distingue de la justesse, qui concerne la proximité avec une valeur de référence.',
                    ],
                    [
                        'question' => 'Quel instrument produit généralement un signal électrique de forme et de fréquence réglables pour les essais ?',
                        'choices' => [
                            ['choice_text' => 'Le générateur de fonctions', 'is_correct' => true],
                            ['choice_text' => 'Le voltmètre passif', 'is_correct' => false],
                            ['choice_text' => 'Le baromètre', 'is_correct' => false],
                            ['choice_text' => 'Le thermocouple seul', 'is_correct' => false],
                        ],
                        'explanation' => 'Un générateur de fonctions fournit des signaux de test, par exemple sinusoïdaux, carrés ou triangulaires.',
                    ],
                    [
                        'question' => 'Pourquoi un générateur de fonctions est-il utile en laboratoire d’électronique ?',
                        'choices' => [
                            ['choice_text' => 'Il mesure directement la température corporelle', 'is_correct' => false],
                            ['choice_text' => 'Il remplace toutes les alimentations électriques', 'is_correct' => false],
                            ['choice_text' => 'Il fonctionne uniquement comme oscilloscope', 'is_correct' => false],
                            ['choice_text' => 'Il permet de tester la réponse d’un circuit avec un signal connu', 'is_correct' => true],
                        ],
                        'explanation' => 'Un signal de test contrôlé facilite l’étude et la caractérisation des circuits.',
                    ],
                    [
                        'question' => 'Quel instrument est utilisé pour mesurer précisément une résistance, une capacité ou une inductance selon sa fonction ?',
                        'choices' => [
                            ['choice_text' => 'Un simple thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Un accéléromètre', 'is_correct' => false],
                            ['choice_text' => 'Une boussole', 'is_correct' => false],
                            ['choice_text' => 'Un pont ou un analyseur d’impédance adapté', 'is_correct' => true],
                        ],
                        'explanation' => 'Des instruments spécialisés peuvent mesurer avec précision des paramètres d’impédance comme R, L et C.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il connecter correctement les bornes de mesure d’un multimètre ?',
                        'choices' => [
                            ['choice_text' => 'Parce que toutes les bornes sont mécaniquement identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un multimètre ne mesure rien sans antenne', 'is_correct' => false],
                            ['choice_text' => 'Parce que le branchement dépend de la grandeur mesurée et qu’une erreur peut endommager l’instrument ou le circuit', 'is_correct' => true],
                            ['choice_text' => 'Parce que la couleur des cordons change la loi d’Ohm', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mode courant, tension ou résistance nécessite des connexions différentes ; un mauvais branchement peut créer un court-circuit.',
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsqu’une mesure est perturbée par des signaux parasites ?',
                        'choices' => [
                            ['choice_text' => 'Une augmentation automatique de la masse', 'is_correct' => false],
                            ['choice_text' => 'Une disparition de la tension de référence', 'is_correct' => false],
                            ['choice_text' => 'Du bruit de mesure', 'is_correct' => true],
                            ['choice_text' => 'Une transformation du courant en matière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les parasites électriques ou électromagnétiques peuvent ajouter des variations indésirables au signal mesuré.',
                    ],
                ],
            ],

            [
                'title' => 'Filtrage, conversion et conditionnement',
                'description' => 'Découvrir les filtres électroniques, l’adaptation des signaux et les étapes de conditionnement.',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal d’un filtre électronique ?',
                        'choices' => [
                            ['choice_text' => 'Atténuer ou sélectionner certaines composantes fréquentielles d’un signal', 'is_correct' => true],
                            ['choice_text' => 'Mesurer directement la masse', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement une alimentation', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute tension continue dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Un filtre modifie la réponse du circuit en fonction de la fréquence.',
                    ],
                    [
                        'question' => 'Un filtre passe-bas laisse principalement passer :',
                        'choices' => [
                            ['choice_text' => 'Uniquement les très hautes fréquences', 'is_correct' => false],
                            ['choice_text' => 'Aucune fréquence', 'is_correct' => false],
                            ['choice_text' => 'Seulement les rayons X', 'is_correct' => false],
                            ['choice_text' => 'Les basses fréquences', 'is_correct' => true],
                        ],
                        'explanation' => 'Un filtre passe-bas transmet mieux les basses fréquences et atténue les fréquences plus élevées.',
                    ],
                    [
                        'question' => 'Un filtre passe-haut laisse principalement passer :',
                        'choices' => [
                            ['choice_text' => 'Uniquement le continu', 'is_correct' => false],
                            ['choice_text' => 'Toutes les fréquences avec la même atténuation', 'is_correct' => false],
                            ['choice_text' => 'Les hautes fréquences', 'is_correct' => true],
                            ['choice_text' => 'Uniquement les infrasons mécaniques', 'is_correct' => false],
                        ],
                        'explanation' => 'Un filtre passe-haut atténue les basses fréquences et transmet mieux les hautes.',
                    ],
                    [
                        'question' => 'Quel filtre cherche principalement à laisser passer une bande de fréquences déterminée ?',
                        'choices' => [
                            ['choice_text' => 'Le filtre coupe-tout', 'is_correct' => false],
                            ['choice_text' => 'Le filtre passe-bande', 'is_correct' => true],
                            ['choice_text' => 'Le filtre thermique', 'is_correct' => false],
                            ['choice_text' => 'Le filtre mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un filtre passe-bande sélectionne une plage de fréquences autour d’une zone utile.',
                    ],
                    [
                        'question' => 'Qu’appelle-t-on fréquence de coupure d’un filtre ?',
                        'choices' => [
                            ['choice_text' => 'La fréquence de fonctionnement d’un moteur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence caractéristique séparant approximativement les zones de transmission et d’atténuation', 'is_correct' => true],
                            ['choice_text' => 'La température maximale du composant', 'is_correct' => false],
                            ['choice_text' => 'La fréquence du secteur dans tous les circuits', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence de coupure est une fréquence de référence utilisée pour caractériser la transition de la réponse du filtre.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on un filtre passe-bas sur un signal issu d’un capteur ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire certaines composantes rapides ou du bruit haute fréquence', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter toujours l’amplitude', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute information lente', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer le capteur en générateur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un passe-bas peut atténuer le bruit haute fréquence tout en conservant la tendance utile du signal.',
                    ],
                    [
                        'question' => 'Quel composant est très utilisé dans un filtre RC simple ?',
                        'choices' => [
                            ['choice_text' => 'Deux moteurs', 'is_correct' => false],
                            ['choice_text' => 'Une antenne et une batterie uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une résistance et un condensateur', 'is_correct' => true],
                            ['choice_text' => 'Un fusible et un interrupteur uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les réseaux RC permettent de réaliser des filtres simples dépendant de la fréquence.',
                    ],
                    [
                        'question' => 'Pourquoi adapte-t-on l’impédance entre deux étages électroniques ?',
                        'choices' => [
                            ['choice_text' => 'Pour supprimer toute tension', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le circuit nécessairement plus lourd', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement la température', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter de charger excessivement l’étage précédent et transmettre correctement le signal', 'is_correct' => true],
                        ],
                        'explanation' => 'Une bonne adaptation ou isolation d’impédance permet de préserver le signal et le fonctionnement prévu des étages.',
                    ],
                    [
                        'question' => 'Quel circuit peut effectuer une amplification avec une grande impédance d’entrée ?',
                        'choices' => [
                            ['choice_text' => 'Un fusible', 'is_correct' => false],
                            ['choice_text' => 'Un interrupteur mécanique', 'is_correct' => false],
                            ['choice_text' => 'Une diode de redressement seule', 'is_correct' => false],
                            ['choice_text' => 'Un amplificateur opérationnel dans une configuration adaptée', 'is_correct' => true],
                        ],
                        'explanation' => 'Les amplificateurs opérationnels offrent des caractéristiques d’entrée adaptées à de nombreuses applications de conditionnement.',
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un conditionneur de signal dans une instrumentation ?',
                        'choices' => [
                            ['choice_text' => 'Préparer le signal du capteur pour qu’il soit mesurable, transmis ou numérisé correctement', 'is_correct' => true],
                            ['choice_text' => 'Supprimer le capteur', 'is_correct' => false],
                            ['choice_text' => 'Remplacer la grandeur physique par une masse', 'is_correct' => false],
                            ['choice_text' => 'Transformer tout signal en courant nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Le conditionnement peut inclure amplification, filtrage, isolation, adaptation et conversion.',
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
                    'duration' => 10,
                    'passing_score' => 50,
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

                $choices = $questionData['choices'];

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