<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AcousticsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'acoustics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à l’acoustique',
                'description' => 'Découverte des notions essentielles sur le son, sa production et sa propagation.',
                'questions' => [
                    [
                        'question' => 'Qu’étudie principalement l’acoustique ?',
                        'choices' => [
                            ['choice_text' => 'Uniquement la lumière visible', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les phénomènes électriques', 'is_correct' => false],
                            ['choice_text' => 'La structure des noyaux atomiques', 'is_correct' => false],
                            ['choice_text' => 'Les phénomènes liés au son et aux vibrations mécaniques', 'is_correct' => true],
                        ],
                        'explanation' => 'L’acoustique étudie notamment la production, la propagation et la perception des sons et des vibrations.',
                    ],
                    [
                        'question' => 'Le son dans l’air est principalement une :',
                        'choices' => [
                            ['choice_text' => 'Onde électromagnétique transverse', 'is_correct' => false],
                            ['choice_text' => 'Onde gravitationnelle', 'is_correct' => false],
                            ['choice_text' => 'Onde mécanique longitudinale', 'is_correct' => true],
                            ['choice_text' => 'Onde lumineuse', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’air, le son se propage par compressions et raréfactions successives, donc sous forme d’une onde longitudinale.',
                    ],
                    [
                        'question' => 'Le son a-t-il besoin d’un milieu matériel pour se propager ?',
                        'choices' => [
                            ['choice_text' => 'Non, il se propage parfaitement dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsqu’il est très grave', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement sous l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le son est une onde mécanique et ne peut donc pas se propager dans le vide.',
                    ],
                    [
                        'question' => 'Quelle grandeur mesure le nombre de vibrations par seconde ?',
                        'choices' => [
                            ['choice_text' => 'L’amplitude', 'is_correct' => false],
                            ['choice_text' => 'La longueur', 'is_correct' => false],
                            ['choice_text' => 'La pression statique', 'is_correct' => false],
                            ['choice_text' => 'La fréquence', 'is_correct' => true],
                        ],
                        'explanation' => 'La fréquence indique le nombre d’oscillations effectuées par seconde.',
                    ],
                    [
                        'question' => 'Quelle est l’unité de la fréquence sonore ?',
                        'choices' => [
                            ['choice_text' => 'Le décibel', 'is_correct' => false],
                            ['choice_text' => 'Le hertz', 'is_correct' => true],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le pascal', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence s’exprime en hertz (Hz).',
                    ],
                    [
                        'question' => 'Un son de fréquence plus élevée est généralement perçu comme :',
                        'choices' => [
                            ['choice_text' => 'Plus aigu', 'is_correct' => true],
                            ['choice_text' => 'Plus grave', 'is_correct' => false],
                            ['choice_text' => 'Plus lent', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement plus fort', 'is_correct' => false],
                        ],
                        'explanation' => 'La hauteur du son dépend principalement de sa fréquence : une fréquence élevée correspond à un son aigu.',
                    ],
                    [
                        'question' => 'Quelle grandeur est principalement liée à l’intensité d’une vibration sonore ?',
                        'choices' => [
                            ['choice_text' => 'Sa masse', 'is_correct' => false],
                            ['choice_text' => 'Son amplitude', 'is_correct' => true],
                            ['choice_text' => 'Sa couleur', 'is_correct' => false],
                            ['choice_text' => 'Sa température uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une description simple, une amplitude plus grande correspond à une vibration sonore plus intense.',
                    ],
                    [
                        'question' => 'Quel phénomène produit un son dans une guitare acoustique ?',
                        'choices' => [
                            ['choice_text' => 'La vibration des cordes et la mise en vibration de l’air', 'is_correct' => true],
                            ['choice_text' => 'Une réaction chimique dans les cordes', 'is_correct' => false],
                            ['choice_text' => 'La production de lumière', 'is_correct' => false],
                            ['choice_text' => 'La fusion du bois', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cordes vibrent et transmettent leurs vibrations à la caisse, qui met l’air environnant en mouvement.',
                    ],
                    [
                        'question' => 'Le son est-il une forme de matière ?',
                        'choices' => [
                            ['choice_text' => 'Non, c’est une perturbation mécanique qui transporte de l’énergie', 'is_correct' => true],
                            ['choice_text' => 'Oui, le son est constitué de particules indépendantes', 'is_correct' => false],
                            ['choice_text' => 'Oui, il possède toujours une masse propre', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement dans l’air', 'is_correct' => false],
                        ],
                        'explanation' => 'Le son correspond à une perturbation qui se propage dans un milieu matériel et transporte de l’énergie.',
                    ],
                    [
                        'question' => 'Quel exemple correspond à une source sonore ?',
                        'choices' => [
                            ['choice_text' => 'Un miroir immobile', 'is_correct' => false],
                            ['choice_text' => 'Une corde de violon en vibration', 'is_correct' => true],
                            ['choice_text' => 'Une pierre posée au sol sans mouvement', 'is_correct' => false],
                            ['choice_text' => 'Un récipient vide et immobile', 'is_correct' => false],
                        ],
                        'explanation' => 'Une source sonore est un objet ou un système qui produit des vibrations capables de générer une onde sonore.',
                    ],
                ],
            ],

            [
                'title' => 'Propagation du son',
                'description' => 'Comprendre comment les ondes sonores se propagent dans différents milieux.',
                'questions' => [
                    [
                        'question' => 'Dans lequel de ces milieux le son peut-il se propager ?',
                        'choices' => [
                            ['choice_text' => 'Dans le vide parfait', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans le verre', 'is_correct' => false],
                            ['choice_text' => 'Dans l’eau', 'is_correct' => true],
                            ['choice_text' => 'Uniquement dans l’air', 'is_correct' => false],
                        ],
                        'explanation' => 'Le son peut se propager dans les solides, les liquides et les gaz, mais pas dans le vide.',
                    ],
                    [
                        'question' => 'La vitesse de propagation du son est-elle la même dans tous les milieux ?',
                        'choices' => [
                            ['choice_text' => 'Oui, elle est toujours de 300 000 km/s', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle vaut toujours 343 m/s', 'is_correct' => false],
                            ['choice_text' => 'Non, elle dépend du milieu', 'is_correct' => true],
                            ['choice_text' => 'Elle ne dépend que de la fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'La célérité du son dépend des propriétés mécaniques du milieu dans lequel l’onde se propage.',
                    ],
                    [
                        'question' => 'Dans l’air à température ambiante, la vitesse du son est approximativement de :',
                        'choices' => [
                            ['choice_text' => '343 m/s', 'is_correct' => true],
                            ['choice_text' => '3 m/s', 'is_correct' => false],
                            ['choice_text' => '3 000 m/s', 'is_correct' => false],
                            ['choice_text' => '300 000 km/s', 'is_correct' => false],
                        ],
                        'explanation' => 'À environ 20 °C dans l’air, la célérité du son est proche de 343 m/s.',
                    ],
                    [
                        'question' => 'Dans un solide comme l’acier, le son se propage généralement :',
                        'choices' => [
                            ['choice_text' => 'Plus rapidement que dans l’air', 'is_correct' => true],
                            ['choice_text' => 'Plus lentement que dans le vide', 'is_correct' => false],
                            ['choice_text' => 'À exactement 343 m/s', 'is_correct' => false],
                            ['choice_text' => 'Uniquement si le solide est liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ondes mécaniques se propagent nettement plus vite dans les solides que dans l’air.',
                    ],
                    [
                        'question' => 'Que se passe-t-il à mesure qu’une onde sonore s’éloigne de sa source ?',
                        'choices' => [
                            ['choice_text' => 'Sa fréquence devient nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'Le son devient automatiquement électromagnétique', 'is_correct' => false],
                            ['choice_text' => 'Les particules du milieu quittent définitivement la source', 'is_correct' => false],
                            ['choice_text' => 'Son énergie se répartit sur une région de plus en plus grande', 'is_correct' => true],
                        ],
                        'explanation' => 'La propagation entraîne une redistribution de l’énergie sur une région spatiale de plus en plus étendue.',
                    ],
                    [
                        'question' => 'Un son peut-il traverser une paroi solide ?',
                        'choices' => [
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement si la paroi est transparente', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les solides peuvent transmettre les vibrations mécaniques, même si la transmission dépend de leurs propriétés.',
                    ],
                    [
                        'question' => 'Pourquoi entend-on souvent un train avant de le voir lorsqu’il arrive sur une voie métallique ?',
                        'choices' => [
                            ['choice_text' => 'Le métal produit de la lumière', 'is_correct' => false],
                            ['choice_text' => 'Les vibrations peuvent se propager efficacement dans le métal', 'is_correct' => true],
                            ['choice_text' => 'Le son se propage dans le vide', 'is_correct' => false],
                            ['choice_text' => 'La lumière est toujours plus lente que le son', 'is_correct' => false],
                        ],
                        'explanation' => 'Les solides transmettent efficacement les vibrations mécaniques, souvent avec une célérité supérieure à celle du son dans l’air.',
                    ],
                    [
                        'question' => 'La température de l’air influence-t-elle la vitesse du son ?',
                        'choices' => [
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement lorsqu’il pleut', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'La célérité du son dans l’air varie notamment avec la température.',
                    ],
                    [
                        'question' => 'Quel phénomène permet d’entendre un son réfléchi par une falaise ?',
                        'choices' => [
                            ['choice_text' => 'La diffraction nucléaire', 'is_correct' => false],
                            ['choice_text' => 'La fusion', 'is_correct' => false],
                            ['choice_text' => 'La polarisation électrique uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’écho', 'is_correct' => true],
                        ],
                        'explanation' => 'Un écho résulte de la réflexion d’une onde sonore par une surface suffisamment éloignée.',
                    ],
                    [
                        'question' => 'Quel élément est indispensable à la propagation d’un son mécanique ?',
                        'choices' => [
                            ['choice_text' => 'Un champ magnétique très intense', 'is_correct' => false],
                            ['choice_text' => 'Un milieu capable de transmettre les vibrations', 'is_correct' => true],
                            ['choice_text' => 'Une source lumineuse', 'is_correct' => false],
                            ['choice_text' => 'Une température de 0 °C', 'is_correct' => false],
                        ],
                        'explanation' => 'Le son a besoin d’un milieu matériel dont les constituants peuvent transmettre la perturbation.',
                    ],
                ],
            ],

            [
                'title' => 'Fréquence, période et longueur d’onde',
                'description' => 'Manipuler les principales grandeurs physiques utilisées pour décrire une onde sonore.',
                'questions' => [
                    [
                        'question' => 'Quelle relation relie la fréquence f et la période T d’une onde sonore ?',
                        'choices' => [
                            ['choice_text' => 'f = 1/T', 'is_correct' => true],
                            ['choice_text' => 'f = T', 'is_correct' => false],
                            ['choice_text' => 'f = T²', 'is_correct' => false],
                            ['choice_text' => 'f = T + 1', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence est l’inverse de la période : f = 1/T.',
                    ],
                    [
                        'question' => 'Une vibration sonore possède une période de 0,01 s. Quelle est sa fréquence ?',
                        'choices' => [
                            ['choice_text' => '10 Hz', 'is_correct' => false],
                            ['choice_text' => '0,01 Hz', 'is_correct' => false],
                            ['choice_text' => '100 Hz', 'is_correct' => true],
                            ['choice_text' => '1 000 Hz', 'is_correct' => false],
                        ],
                        'explanation' => 'f = 1/T = 1/0,01 = 100 Hz.',
                    ],
                    [
                        'question' => 'Quelle relation relie la célérité v, la fréquence f et la longueur d’onde λ ?',
                        'choices' => [
                            ['choice_text' => 'v = λ/f', 'is_correct' => false],
                            ['choice_text' => 'v = λf', 'is_correct' => true],
                            ['choice_text' => 'v = f/λ', 'is_correct' => false],
                            ['choice_text' => 'v = λ + f', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une onde périodique, la célérité est donnée par v = λf.',
                    ],
                    [
                        'question' => 'Un son se propage à 340 m/s avec une fréquence de 170 Hz. Quelle est sa longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => '2 m', 'is_correct' => true],
                            ['choice_text' => '0,5 m', 'is_correct' => false],
                            ['choice_text' => '510 m', 'is_correct' => false],
                            ['choice_text' => '57,7 m', 'is_correct' => false],
                        ],
                        'explanation' => 'λ = v/f = 340/170 = 2 m.',
                    ],
                    [
                        'question' => 'À célérité constante, une augmentation de la fréquence entraîne :',
                        'choices' => [
                            ['choice_text' => 'Une augmentation de la longueur d’onde', 'is_correct' => false],
                            ['choice_text' => 'Une disparition du son', 'is_correct' => false],
                            ['choice_text' => 'Une diminution de la longueur d’onde', 'is_correct' => true],
                            ['choice_text' => 'Une période infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme λ = v/f, la longueur d’onde diminue lorsque la fréquence augmente à célérité constante.',
                    ],
                    [
                        'question' => 'Quelle unité correspond à la longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => 'Le hertz', 'is_correct' => false],
                            ['choice_text' => 'Le mètre', 'is_correct' => true],
                            ['choice_text' => 'Le décibel', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                        ],
                        'explanation' => 'La longueur d’onde est une distance, donc son unité SI est le mètre.',
                    ],
                    [
                        'question' => 'Un son possède une fréquence de 1 000 Hz. Sa période vaut :',
                        'choices' => [
                            ['choice_text' => '0,01 s', 'is_correct' => false],
                            ['choice_text' => '1 s', 'is_correct' => false],
                            ['choice_text' => '1 000 s', 'is_correct' => false],
                            ['choice_text' => '0,001 s', 'is_correct' => true],
                        ],
                        'explanation' => 'T = 1/f = 1/1 000 = 0,001 s.',
                    ],
                    [
                        'question' => 'Si la fréquence d’un son double et que sa célérité reste constante, sa longueur d’onde est :',
                        'choices' => [
                            ['choice_text' => 'Doublée', 'is_correct' => false],
                            ['choice_text' => 'Multipliée par quatre', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                            ['choice_text' => 'Divisée par deux', 'is_correct' => true],
                        ],
                        'explanation' => 'La relation λ = v/f montre que λ est inversement proportionnelle à la fréquence.',
                    ],
                    [
                        'question' => 'Quel couple de points d’une onde sonore périodique peut être séparé d’une longueur d’onde et être en phase ?',
                        'choices' => [
                            ['choice_text' => 'Deux points nécessairement opposés', 'is_correct' => false],
                            ['choice_text' => 'Deux points séparés d’un demi-cycle uniquement', 'is_correct' => false],
                            ['choice_text' => 'Deux points correspondant au même état de vibration après un cycle spatial', 'is_correct' => true],
                            ['choice_text' => 'Deux points choisis au hasard sans rapport de phase', 'is_correct' => false],
                        ],
                        'explanation' => 'Une séparation d’une longueur d’onde correspond à un déphasage de 2π, donc à la même phase.',
                    ],
                    [
                        'question' => 'Une onde sonore a une longueur d’onde de 0,68 m et une fréquence de 500 Hz. Sa célérité vaut :',
                        'choices' => [
                            ['choice_text' => '250 m/s', 'is_correct' => false],
                            ['choice_text' => '500,68 m/s', 'is_correct' => false],
                            ['choice_text' => '735 m/s', 'is_correct' => false],
                            ['choice_text' => '340 m/s', 'is_correct' => true],
                        ],
                        'explanation' => 'v = λf = 0,68 × 500 = 340 m/s.',
                    ],
                ],
            ],

            [
                'title' => 'Intensité sonore et décibels',
                'description' => 'Introduction à l’intensité sonore, au niveau sonore et à l’unité décibel.',
                'questions' => [
                    [
                        'question' => 'Quelle grandeur physique mesure le flux de puissance sonore par unité de surface ?',
                        'choices' => [
                            ['choice_text' => 'L’intensité sonore', 'is_correct' => true],
                            ['choice_text' => 'La fréquence', 'is_correct' => false],
                            ['choice_text' => 'La période', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intensité sonore correspond à une puissance transportée par unité de surface.',
                    ],
                    [
                        'question' => 'Quelle est l’unité SI de l’intensité sonore ?',
                        'choices' => [
                            ['choice_text' => 'Hz', 'is_correct' => false],
                            ['choice_text' => 'dB', 'is_correct' => false],
                            ['choice_text' => 'Pa·s', 'is_correct' => false],
                            ['choice_text' => 'W/m²', 'is_correct' => true],
                        ],
                        'explanation' => 'L’intensité sonore s’exprime en watts par mètre carré.',
                    ],
                    [
                        'question' => 'Le décibel est une unité utilisée notamment pour exprimer :',
                        'choices' => [
                            ['choice_text' => 'Une longueur', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence absolue', 'is_correct' => false],
                            ['choice_text' => 'Une masse', 'is_correct' => false],
                            ['choice_text' => 'Un niveau sonore', 'is_correct' => true],
                        ],
                        'explanation' => 'Le décibel est une unité logarithmique largement utilisée pour exprimer des niveaux sonores.',
                    ],
                    [
                        'question' => 'Le niveau sonore se mesure généralement avec :',
                        'choices' => [
                            ['choice_text' => 'Un sonomètre', 'is_correct' => true],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Un voltmètre', 'is_correct' => false],
                            ['choice_text' => 'Un baromètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Un sonomètre mesure le niveau de pression acoustique ou fournit une mesure liée au niveau sonore.',
                    ],
                    [
                        'question' => 'Le niveau sonore est une grandeur :',
                        'choices' => [
                            ['choice_text' => 'Toujours linéaire', 'is_correct' => false],
                            ['choice_text' => 'Toujours proportionnelle à la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de l’intensité', 'is_correct' => false],
                            ['choice_text' => 'Logarithmique', 'is_correct' => true],
                        ],
                        'explanation' => 'La définition du niveau sonore utilise un logarithme, ce qui permet de représenter une grande gamme de niveaux.',
                    ],
                    [
                        'question' => 'Une augmentation de 10 dB correspond, pour l’intensité sonore, à un facteur de :',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '1,1', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la définition du niveau d’intensité sonore, une différence de 10 dB correspond à un rapport d’intensités de 10.',
                    ],
                    [
                        'question' => 'Une augmentation de 20 dB correspond à un facteur d’intensité de :',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '200', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque tranche de 10 dB correspond à un facteur 10 en intensité, donc 20 dB correspondent à 10 × 10 = 100.',
                    ],
                    [
                        'question' => 'Le niveau sonore d’une conversation normale est-il généralement de l’ordre de quelques dizaines de décibels ?',
                        'choices' => [
                            ['choice_text' => 'Non, il est toujours supérieur à 200 dB', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, il est toujours inférieur à -100 dB', 'is_correct' => false],
                            ['choice_text' => 'Non, les conversations ne produisent aucun son', 'is_correct' => false],
                        ],
                        'explanation' => 'Une conversation courante se situe typiquement autour de plusieurs dizaines de décibels, selon la distance et les conditions.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement un niveau sonore de 0 dB ?',
                        'choices' => [
                            ['choice_text' => 'Il signifie toujours silence absolu', 'is_correct' => false],
                            ['choice_text' => 'Il signifie que la fréquence est nulle', 'is_correct' => false],
                            ['choice_text' => 'Il correspond à une référence acoustique et ne signifie pas nécessairement absence totale de pression acoustique', 'is_correct' => true],
                            ['choice_text' => 'Il signifie que le son possède une énergie infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le décibel compare une grandeur à une référence. Un niveau de 0 dB ne signifie donc pas nécessairement absence physique totale de son.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on une échelle logarithmique en acoustique ?',
                        'choices' => [
                            ['choice_text' => 'Parce que l’oreille humaine couvre une très grande plage de niveaux sonores', 'is_correct' => true],
                            ['choice_text' => 'Parce que le son n’a jamais d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Parce que la fréquence est toujours constante', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les distances négatives', 'is_correct' => false],
                        ],
                        'explanation' => 'L’échelle logarithmique permet de représenter de manière pratique une gamme extrêmement large d’intensités sonores.',
                    ],
                ],
            ],

            [
                'title' => 'Hauteur, timbre et perception',
                'description' => 'Comprendre les caractéristiques perceptives du son et leur lien avec les grandeurs physiques.',
                'questions' => [
                    [
                        'question' => 'Quelle caractéristique du son est principalement liée à sa fréquence ?',
                        'choices' => [
                            ['choice_text' => 'La hauteur', 'is_correct' => true],
                            ['choice_text' => 'Le timbre uniquement', 'is_correct' => false],
                            ['choice_text' => 'La durée uniquement', 'is_correct' => false],
                            ['choice_text' => 'La couleur visuelle', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence fondamentale d’un son est principalement associée à sa hauteur perçue.',
                    ],
                    [
                        'question' => 'Quel son possède la fréquence la plus élevée ?',
                        'choices' => [
                            ['choice_text' => 'Un son à 200 Hz', 'is_correct' => false],
                            ['choice_text' => 'Un son à 50 Hz', 'is_correct' => false],
                            ['choice_text' => 'Un son à 10 Hz', 'is_correct' => false],
                            ['choice_text' => 'Un son à 1 000 Hz', 'is_correct' => true],
                        ],
                        'explanation' => 'Parmi ces valeurs, 1 000 Hz est la fréquence la plus élevée.',
                    ],
                    [
                        'question' => 'Deux instruments jouant la même note peuvent-ils avoir des timbres différents ?',
                        'choices' => [
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement si leurs fréquences fondamentales sont différentes', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le timbre dépend de la composition spectrale du son et permet de distinguer des instruments jouant une même note.',
                    ],
                    [
                        'question' => 'Le timbre d’un son est notamment lié à :',
                        'choices' => [
                            ['choice_text' => 'Sa composition en fréquences et harmoniques', 'is_correct' => true],
                            ['choice_text' => 'Sa masse uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sa température uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sa vitesse de propagation uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme du signal et la présence de fréquences harmoniques contribuent fortement au timbre.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un son pur ?',
                        'choices' => [
                            ['choice_text' => 'Un son nécessairement très fort', 'is_correct' => false],
                            ['choice_text' => 'Un son sans aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'Un son correspondant idéalement à une seule fréquence', 'is_correct' => true],
                            ['choice_text' => 'Un son contenant toutes les fréquences possibles', 'is_correct' => false],
                        ],
                        'explanation' => 'Un son pur peut être représenté par une sinusoïde correspondant à une fréquence unique.',
                    ],
                    [
                        'question' => 'Un son composé contient généralement :',
                        'choices' => [
                            ['choice_text' => 'Une seule fréquence obligatoirement', 'is_correct' => false],
                            ['choice_text' => 'Plusieurs composantes fréquentielles', 'is_correct' => true],
                            ['choice_text' => 'Aucune vibration', 'is_correct' => false],
                            ['choice_text' => 'Uniquement des fréquences infrasonores', 'is_correct' => false],
                        ],
                        'explanation' => 'Un son réel combine le plus souvent une fondamentale et plusieurs harmoniques ou autres composantes.',
                    ],
                    [
                        'question' => 'Quelle plage de fréquences est souvent donnée comme ordre de grandeur de l’audition humaine ?',
                        'choices' => [
                            ['choice_text' => 'Environ 20 Hz à 20 kHz', 'is_correct' => true],
                            ['choice_text' => 'Environ 0,001 Hz à 1 Hz', 'is_correct' => false],
                            ['choice_text' => 'Uniquement au-dessus de 1 MHz', 'is_correct' => false],
                            ['choice_text' => 'Uniquement entre 1 et 10 Hz', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une personne jeune avec une audition normale, on donne souvent une plage approximative de 20 Hz à 20 kHz, qui varie selon les individus et l’âge.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on les sons de fréquence inférieure à environ 20 Hz ?',
                        'choices' => [
                            ['choice_text' => 'Les ultrasons', 'is_correct' => false],
                            ['choice_text' => 'Les infrasons', 'is_correct' => true],
                            ['choice_text' => 'Les sons aigus', 'is_correct' => false],
                            ['choice_text' => 'Les harmoniques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les infrasons ont des fréquences inférieures à la limite basse approximative de l’audition humaine.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on les sons de fréquence supérieure à environ 20 kHz ?',
                        'choices' => [
                            ['choice_text' => 'Les infrasons', 'is_correct' => false],
                            ['choice_text' => 'Les ultrasons', 'is_correct' => true],
                            ['choice_text' => 'Les basses fréquences audibles', 'is_correct' => false],
                            ['choice_text' => 'Les sons stationnaires uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ultrasons ont des fréquences supérieures à la limite haute approximative de l’audition humaine.',
                    ],
                    [
                        'question' => 'Une augmentation de l’amplitude d’un son pur, sans changer sa fréquence, modifie principalement :',
                        'choices' => [
                            ['choice_text' => 'Sa hauteur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sa fréquence fondamentale', 'is_correct' => false],
                            ['choice_text' => 'Son niveau ou son intensité perçue', 'is_correct' => true],
                            ['choice_text' => 'La nature du milieu', 'is_correct' => false],
                        ],
                        'explanation' => 'À fréquence constante, augmenter l’amplitude accroît l’intensité sonore et la sensation de son plus fort.',
                    ],
                    [
                        'question' => 'Pourquoi deux voix humaines peuvent-elles être reconnues comme différentes même lorsqu’elles chantent la même note ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la fréquence fondamentale ne peut jamais être la même', 'is_correct' => false],
                            ['choice_text' => 'Parce que la vitesse du son est différente pour chaque personne', 'is_correct' => false],
                            ['choice_text' => 'Parce que le son n’est pas une onde', 'is_correct' => false],
                            ['choice_text' => 'Parce que leurs spectres et leurs harmoniques peuvent être différents', 'is_correct' => true],
                        ],
                        'explanation' => 'Le timbre dépend de la forme du signal et de son contenu harmonique, ce qui rend les voix reconnaissables.',
                    ],
                ],
            ],

            [
                'title' => 'Réflexion, diffraction et absorption',
                'description' => 'Découvrir les principaux phénomènes rencontrés lorsqu’une onde sonore rencontre un obstacle ou une surface.',
                'questions' => [
                    [
                        'question' => 'Que se passe-t-il lorsqu’une onde sonore rencontre une surface et repart dans le milieu initial ?',
                        'choices' => [
                            ['choice_text' => 'Elle est nécessairement détruite', 'is_correct' => false],
                            ['choice_text' => 'Elle devient lumineuse', 'is_correct' => false],
                            ['choice_text' => 'Elle cesse toujours immédiatement de vibrer', 'is_correct' => false],
                            ['choice_text' => 'Elle est réfléchie', 'is_correct' => true],
                        ],
                        'explanation' => 'La réflexion correspond au retour d’une partie de l’onde dans le milieu d’origine.',
                    ],
                    [
                        'question' => 'Quel phénomène sonore est directement lié à la réflexion sur une surface éloignée ?',
                        'choices' => [
                            ['choice_text' => 'La combustion', 'is_correct' => false],
                            ['choice_text' => 'L’écho', 'is_correct' => true],
                            ['choice_text' => 'La conduction électrique', 'is_correct' => false],
                            ['choice_text' => 'La fusion', 'is_correct' => false],
                        ],
                        'explanation' => 'Un écho est une conséquence perceptible de la réflexion d’une onde sonore.',
                    ],
                    [
                        'question' => 'Qu’est-ce que l’absorption acoustique ?',
                        'choices' => [
                            ['choice_text' => 'Le son devient automatiquement plus intense', 'is_correct' => false],
                            ['choice_text' => 'Le son se transforme nécessairement en lumière', 'is_correct' => false],
                            ['choice_text' => 'Une partie de l’énergie sonore est dissipée ou absorbée par un matériau', 'is_correct' => true],
                            ['choice_text' => 'Le son se propage dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les matériaux absorbants réduisent une partie de l’énergie acoustique qui leur arrive.',
                    ],
                    [
                        'question' => 'Quel matériau est généralement utilisé pour réduire les réflexions sonores dans une pièce ?',
                        'choices' => [
                            ['choice_text' => 'Une plaque métallique parfaitement rigide dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Un miroir en verre uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un matériau choisi uniquement pour sa couleur', 'is_correct' => false],
                            ['choice_text' => 'Un matériau acoustiquement absorbant', 'is_correct' => true],
                        ],
                        'explanation' => 'Les matériaux poreux ou spécialement conçus pour l’acoustique peuvent absorber une partie de l’énergie sonore.',
                    ],
                    [
                        'question' => 'Que signifie la diffraction d’une onde ?',
                        'choices' => [
                            ['choice_text' => 'La disparition totale de l’onde', 'is_correct' => false],
                            ['choice_text' => 'La capacité de l’onde à se contourner ou à s’étaler derrière un obstacle ou une ouverture', 'is_correct' => true],
                            ['choice_text' => 'Une transformation du son en matière', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation obligatoire de la fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffraction est particulièrement visible lorsque la taille de l’obstacle ou de l’ouverture est comparable à la longueur d’onde.',
                    ],
                    [
                        'question' => 'Pourquoi peut-on parfois entendre quelqu’un derrière un coin sans le voir ?',
                        'choices' => [
                            ['choice_text' => 'Le son peut subir une diffraction autour de l’obstacle', 'is_correct' => true],
                            ['choice_text' => 'Le son se déplace uniquement en ligne droite comme la lumière géométrique', 'is_correct' => false],
                            ['choice_text' => 'Le son traverse toujours les murs sans atténuation', 'is_correct' => false],
                            ['choice_text' => 'Le son se transforme en onde radio', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ondes sonores peuvent se diffracter autour des obstacles, surtout lorsque leurs dimensions sont comparables à la longueur d’onde.',
                    ],
                    [
                        'question' => 'Une paroi très dure et lisse a généralement tendance à :',
                        'choices' => [
                            ['choice_text' => 'Absorber toute l’énergie sonore', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Réfléchir davantage le son', 'is_correct' => true],
                            ['choice_text' => 'Transformer le son en lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les surfaces dures et lisses sont souvent fortement réfléchissantes en acoustique.',
                    ],
                    [
                        'question' => 'Quel problème peut apparaître dans une grande salle très réverbérante ?',
                        'choices' => [
                            ['choice_text' => 'La fréquence de toutes les voix devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Les paroles peuvent devenir moins intelligibles', 'is_correct' => true],
                            ['choice_text' => 'La salle devient totalement silencieuse', 'is_correct' => false],
                            ['choice_text' => 'La lumière cesse de se propager', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réverbération excessive peut superposer les sons successifs et rendre la parole difficile à comprendre.',
                    ],
                    [
                        'question' => 'Qu’appelle-t-on réverbération ?',
                        'choices' => [
                            ['choice_text' => 'La disparition instantanée du son', 'is_correct' => false],
                            ['choice_text' => 'La création d’un son sans source', 'is_correct' => false],
                            ['choice_text' => 'La persistance du son due à de multiples réflexions dans un espace', 'is_correct' => true],
                            ['choice_text' => 'La propagation du son dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'La réverbération résulte de nombreuses réflexions du son qui prolongent sa présence après l’arrêt de la source.',
                    ],
                    [
                        'question' => 'Quel traitement est adapté pour diminuer la réverbération excessive d’une salle ?',
                        'choices' => [
                            ['choice_text' => 'Ajouter des surfaces ou matériaux absorbants', 'is_correct' => true],
                            ['choice_text' => 'Rendre toutes les surfaces encore plus réfléchissantes', 'is_correct' => false],
                            ['choice_text' => 'Augmenter uniquement la température', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les ouvertures', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ajout de matériaux absorbants réduit l’énergie des réflexions successives et donc le temps de réverbération.',
                    ],
                ],
            ],

            [
                'title' => 'Résonance et instruments de musique',
                'description' => 'Comprendre la résonance acoustique et son rôle dans les instruments de musique.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une résonance acoustique ?',
                        'choices' => [
                            ['choice_text' => 'Une forte réponse du système lorsque l’excitation est proche d’une fréquence propre', 'is_correct' => true],
                            ['choice_text' => 'Une disparition systématique des vibrations', 'is_correct' => false],
                            ['choice_text' => 'Une diminution obligatoire de la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Une transformation du son en chaleur uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La résonance apparaît lorsqu’une excitation correspond ou est proche d’une fréquence naturelle du système.',
                    ],
                    [
                        'question' => 'Pourquoi une caisse de résonance peut-elle augmenter le son produit par un instrument ?',
                        'choices' => [
                            ['choice_text' => 'Elle supprime la vibration des cordes', 'is_correct' => false],
                            ['choice_text' => 'Elle rend le son électromagnétique', 'is_correct' => false],
                            ['choice_text' => 'Elle annule toutes les pertes', 'is_correct' => false],
                            ['choice_text' => 'Elle favorise le couplage des vibrations avec l’air', 'is_correct' => true],
                        ],
                        'explanation' => 'La caisse de résonance facilite le transfert de l’énergie vibratoire vers l’air et peut renforcer certaines fréquences.',
                    ],
                    [
                        'question' => 'Une corde de guitare peut-elle avoir plusieurs fréquences propres ?',
                        'choices' => [
                            ['choice_text' => 'Non, une corde ne peut vibrer qu’à une seule fréquence', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement lorsqu’elle est immobile', 'is_correct' => false],
                        ],
                        'explanation' => 'Une corde peut vibrer selon différents modes propres, correspondant à une fondamentale et à des harmoniques.',
                    ],
                    [
                        'question' => 'Dans une corde vibrante, le mode fondamental correspond généralement à :',
                        'choices' => [
                            ['choice_text' => 'Sa fréquence la plus élevée possible', 'is_correct' => false],
                            ['choice_text' => 'Sa fréquence propre la plus basse', 'is_correct' => true],
                            ['choice_text' => 'Une fréquence nulle', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence indépendante de la longueur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mode fondamental est le premier mode propre, avec la fréquence la plus basse.',
                    ],
                    [
                        'question' => 'Les fréquences harmoniques d’une corde idéale sont liées à :',
                        'choices' => [
                            ['choice_text' => 'Des multiples entiers de la fréquence fondamentale', 'is_correct' => true],
                            ['choice_text' => 'Des valeurs toujours inférieures à la fondamentale', 'is_correct' => false],
                            ['choice_text' => 'Des valeurs toutes égales à zéro', 'is_correct' => false],
                            ['choice_text' => 'Des valeurs indépendantes de la fréquence fondamentale', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une corde idéale, les modes harmoniques ont des fréquences n fois la fréquence fondamentale.',
                    ],
                    [
                        'question' => 'Que se passe-t-il lorsque deux sons ayant des fréquences très proches sont joués ensemble ?',
                        'choices' => [
                            ['choice_text' => 'Les deux sons disparaissent nécessairement', 'is_correct' => false],
                            ['choice_text' => 'La vitesse du son devient infinie', 'is_correct' => false],
                            ['choice_text' => 'Le son devient automatiquement ultrasonore', 'is_correct' => false],
                            ['choice_text' => 'On peut entendre des battements', 'is_correct' => true],
                        ],
                        'explanation' => 'Des fréquences proches peuvent produire une variation périodique de l’amplitude appelée battement.',
                    ],
                    [
                        'question' => 'Si deux fréquences sont 440 Hz et 442 Hz, la fréquence des battements est de :',
                        'choices' => [
                            ['choice_text' => '441 Hz', 'is_correct' => false],
                            ['choice_text' => '882 Hz', 'is_correct' => false],
                            ['choice_text' => '2 Hz', 'is_correct' => true],
                            ['choice_text' => '0,5 Hz', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence de battement est la différence des fréquences : |442 - 440| = 2 Hz.',
                    ],
                    [
                        'question' => 'Quel instrument utilise directement des colonnes d’air pour produire des sons ?',
                        'choices' => [
                            ['choice_text' => 'Le diapason métallique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La flûte', 'is_correct' => true],
                            ['choice_text' => 'Un câble électrique', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une flûte, une colonne d’air mise en vibration produit des modes acoustiques.',
                    ],
                    [
                        'question' => 'Pourquoi change-t-on la longueur d’une colonne d’air dans certains instruments ?',
                        'choices' => [
                            ['choice_text' => 'Pour supprimer complètement les vibrations', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer le son en lumière', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre la fréquence indépendante de la géométrie', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier ses fréquences propres', 'is_correct' => true],
                        ],
                        'explanation' => 'Les fréquences propres d’une colonne d’air dépendent notamment de sa longueur et de ses conditions aux limites.',
                    ],
                    [
                        'question' => 'Quel élément permet à un diapason de produire une vibration sonore durable après avoir été frappé ?',
                        'choices' => [
                            ['choice_text' => 'Une réaction chimique continue', 'is_correct' => false],
                            ['choice_text' => 'Une batterie électrique intégrée', 'is_correct' => false],
                            ['choice_text' => 'Ses oscillations mécaniques propres', 'is_correct' => true],
                            ['choice_text' => 'Une émission lumineuse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le diapason possède des modes propres de vibration et continue à osciller après l’excitation initiale.',
                    ],
                ],
            ],

            [
                'title' => 'Doppler et mouvements relatifs',
                'description' => 'Introduction à l’effet Doppler et aux variations apparentes de fréquence dues au mouvement relatif.',
                'questions' => [
                    [
                        'question' => 'Qu’appelle-t-on effet Doppler ?',
                        'choices' => [
                            ['choice_text' => 'Une disparition totale du son', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation obligatoire de la vitesse du son', 'is_correct' => false],
                            ['choice_text' => 'Une conversion du son en lumière', 'is_correct' => false],
                            ['choice_text' => 'Une variation apparente de la fréquence reçue due au mouvement relatif entre la source et l’observateur', 'is_correct' => true],
                        ],
                        'explanation' => 'L’effet Doppler correspond à une variation de la fréquence observée lorsqu’il existe un mouvement relatif entre source et récepteur.',
                    ],
                    [
                        'question' => 'Lorsqu’une ambulance se rapproche d’un observateur, le son de sa sirène est perçu comme :',
                        'choices' => [
                            ['choice_text' => 'Plus grave', 'is_correct' => false],
                            ['choice_text' => 'Plus aigu', 'is_correct' => true],
                            ['choice_text' => 'Sans fréquence', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement plus faible', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’approche, la fréquence reçue est plus élevée : la hauteur perçue augmente.',
                    ],
                    [
                        'question' => 'Lorsque l’ambulance s’éloigne, le son est perçu comme :',
                        'choices' => [
                            ['choice_text' => 'Plus aigu', 'is_correct' => false],
                            ['choice_text' => 'Toujours plus intense', 'is_correct' => false],
                            ['choice_text' => 'Sans variation de fréquence', 'is_correct' => false],
                            ['choice_text' => 'Plus grave', 'is_correct' => true],
                        ],
                        'explanation' => 'Lorsque la source s’éloigne, la fréquence observée diminue.',
                    ],
                    [
                        'question' => 'L’effet Doppler peut-il se produire si l’observateur se déplace et que la source est immobile ?',
                        'choices' => [
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mouvement relatif entre la source et l’observateur suffit à produire un effet Doppler.',
                    ],
                    [
                        'question' => 'Quel élément est essentiel à l’effet Doppler acoustique ?',
                        'choices' => [
                            ['choice_text' => 'Un mouvement relatif entre la source et le récepteur', 'is_correct' => true],
                            ['choice_text' => 'Une température nulle', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale de milieu', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence toujours supérieure à 20 kHz', 'is_correct' => false],
                        ],
                        'explanation' => 'Le décalage Doppler dépend du mouvement relatif entre la source sonore et l’observateur.',
                    ],
                    [
                        'question' => 'L’effet Doppler modifie-t-il nécessairement la fréquence émise par la source ?',
                        'choices' => [
                            ['choice_text' => 'Oui, la source change toujours sa fréquence interne', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Non, il modifie la fréquence perçue par l’observateur', 'is_correct' => true],
                            ['choice_text' => 'Non, parce qu’un son n’a pas de fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'La source peut émettre à fréquence constante tandis que l’observateur reçoit une fréquence différente à cause du mouvement relatif.',
                    ],
                    [
                        'question' => 'Le radar Doppler utilisé en météorologie exploite-t-il une variation de fréquence liée au mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour mesurer la température', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans l’espace sans air', 'is_correct' => false],
                        ],
                        'explanation' => 'Les radars Doppler utilisent le décalage fréquentiel pour déduire des informations sur le mouvement des particules ou objets ciblés.',
                    ],
                    [
                        'question' => 'Quelle caractéristique permet de reconnaître facilement l’effet Doppler d’une sirène ?',
                        'choices' => [
                            ['choice_text' => 'Une disparition de toute vibration', 'is_correct' => false],
                            ['choice_text' => 'Une transformation du son en infrason uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le changement de hauteur perçue lorsque la source passe devant l’observateur', 'is_correct' => true],
                            ['choice_text' => 'Une vitesse du son infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'La variation de hauteur avant et après le passage de la source est un exemple classique de l’effet Doppler.',
                    ],
                    [
                        'question' => 'Si la source et l’observateur sont immobiles l’un par rapport à l’autre, l’effet Doppler dû au mouvement est :',
                        'choices' => [
                            ['choice_text' => 'Absent', 'is_correct' => true],
                            ['choice_text' => 'Toujours maximal', 'is_correct' => false],
                            ['choice_text' => 'Infini', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement négatif', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans mouvement relatif, il n’y a pas de décalage Doppler lié au mouvement.',
                    ],
                    [
                        'question' => 'Le mouvement d’une source sonore vers un observateur produit généralement un espacement des fronts d’onde :',
                        'choices' => [
                            ['choice_text' => 'Plus grand dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Infini', 'is_correct' => false],
                            ['choice_text' => 'Égal à zéro partout', 'is_correct' => false],
                            ['choice_text' => 'Plus faible dans la direction de l’approche', 'is_correct' => true],
                        ],
                        'explanation' => 'Lorsque la source avance vers l’observateur, les fronts d’onde sont rapprochés dans la direction du mouvement.',
                    ],
                ],
            ],

            [
                'title' => 'Acoustique physiologique',
                'description' => 'Découvrir les bases du fonctionnement de l’oreille et de la perception humaine des sons.',
                'questions' => [
                    [
                        'question' => 'Quel organe humain reçoit principalement les sons ?',
                        'choices' => [
                            ['choice_text' => 'Le poumon', 'is_correct' => false],
                            ['choice_text' => 'L’oreille', 'is_correct' => true],
                            ['choice_text' => 'Le foie', 'is_correct' => false],
                            ['choice_text' => 'L’estomac', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oreille capte les vibrations sonores et les transforme en signaux transmis au système nerveux.',
                    ],
                    [
                        'question' => 'Quelle partie de l’oreille vibre sous l’action des ondes sonores ?',
                        'choices' => [
                            ['choice_text' => 'La rétine', 'is_correct' => false],
                            ['choice_text' => 'Le diaphragme pulmonaire', 'is_correct' => false],
                            ['choice_text' => 'La moelle épinière', 'is_correct' => false],
                            ['choice_text' => 'Le tympan', 'is_correct' => true],
                        ],
                        'explanation' => 'Le tympan transforme les variations de pression acoustique en vibrations mécaniques.',
                    ],
                    [
                        'question' => 'Quelle structure de l’oreille interne joue un rôle central dans l’audition ?',
                        'choices' => [
                            ['choice_text' => 'Le tympan uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le pavillon seulement', 'is_correct' => false],
                            ['choice_text' => 'Le nez', 'is_correct' => false],
                            ['choice_text' => 'La cochlée', 'is_correct' => true],
                        ],
                        'explanation' => 'La cochlée contient les structures sensorielles qui convertissent les vibrations en signaux nerveux.',
                    ],
                    [
                        'question' => 'Quel rôle joue le pavillon de l’oreille ?',
                        'choices' => [
                            ['choice_text' => 'Il transforme directement le son en lumière', 'is_correct' => false],
                            ['choice_text' => 'Il produit les fréquences ultrasonores', 'is_correct' => false],
                            ['choice_text' => 'Il contribue à capter et orienter les sons vers le conduit auditif', 'is_correct' => true],
                            ['choice_text' => 'Il empêche toute vibration', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pavillon collecte les sons et contribue à leur acheminement vers le conduit auditif.',
                    ],
                    [
                        'question' => 'Une exposition prolongée à des niveaux sonores très élevés peut-elle endommager l’audition ?',
                        'choices' => [
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement si le son est grave', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsque la température est élevée', 'is_correct' => false],
                        ],
                        'explanation' => 'Une exposition excessive au bruit peut endommager les structures sensorielles de l’oreille.',
                    ],
                    [
                        'question' => 'Quel paramètre sonore est particulièrement important pour distinguer un son aigu d’un son grave ?',
                        'choices' => [
                            ['choice_text' => 'La fréquence', 'is_correct' => true],
                            ['choice_text' => 'La distance à la source uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse de l’oreille', 'is_correct' => false],
                            ['choice_text' => 'La couleur du son', 'is_correct' => false],
                        ],
                        'explanation' => 'La hauteur perçue dépend principalement de la fréquence du son.',
                    ],
                    [
                        'question' => 'La perception du son dépend-elle uniquement des caractéristiques physiques du signal ?',
                        'choices' => [
                            ['choice_text' => 'Oui, toujours et sans exception', 'is_correct' => false],
                            ['choice_text' => 'Non, elle dépend uniquement de la température', 'is_correct' => false],
                            ['choice_text' => 'Non, elle dépend aussi du fonctionnement du système auditif', 'is_correct' => true],
                            ['choice_text' => 'Oui, parce que tous les humains perçoivent exactement les mêmes sons', 'is_correct' => false],
                        ],
                        'explanation' => 'La perception auditive dépend des propriétés du signal mais aussi de la physiologie et des caractéristiques individuelles.',
                    ],
                    [
                        'question' => 'La sensibilité de l’oreille humaine est-elle identique pour toutes les fréquences audibles ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, parfaitement identique', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement au-dessus de 1 kHz', 'is_correct' => false],
                            ['choice_text' => 'Elle ne dépend jamais de la fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oreille humaine n’a pas la même sensibilité à toutes les fréquences.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on parfois des pondérations comme dB(A) en mesure acoustique ?',
                        'choices' => [
                            ['choice_text' => 'Pour transformer le son en fréquence radio', 'is_correct' => false],
                            ['choice_text' => 'Pour mieux tenir compte de la sensibilité de l’oreille humaine selon la fréquence', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les basses fréquences physiquement', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer la température', 'is_correct' => false],
                        ],
                        'explanation' => 'La pondération A est conçue pour rapprocher la mesure de la sensibilité de l’audition humaine dans certaines conditions.',
                    ],
                    [
                        'question' => 'Quel dispositif protège directement l’oreille contre une partie du bruit extérieur ?',
                        'choices' => [
                            ['choice_text' => 'Des protections auditives', 'is_correct' => true],
                            ['choice_text' => 'Des lunettes de soleil uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Une caméra', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bouchons d’oreilles et les casques antibruit peuvent réduire l’exposition au bruit.',
                    ],
                ],
            ],

            [
                'title' => 'Applications pratiques de l’acoustique',
                'description' => 'Mettre en relation les notions d’acoustique avec des applications technologiques et quotidiennes.',
                'questions' => [
                    [
                        'question' => 'Quel appareil utilise des ultrasons pour produire des images médicales ?',
                        'choices' => [
                            ['choice_text' => 'Le thermomètre classique', 'is_correct' => false],
                            ['choice_text' => 'Le baromètre', 'is_correct' => false],
                            ['choice_text' => 'L’échographe', 'is_correct' => true],
                            ['choice_text' => 'Le microscope optique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’échographie utilise des ondes ultrasonores et analyse notamment leurs réflexions dans les tissus.',
                    ],
                    [
                        'question' => 'Le sonar est principalement utilisé pour :',
                        'choices' => [
                            ['choice_text' => 'Mesurer directement la température du Soleil', 'is_correct' => false],
                            ['choice_text' => 'Détecter ou localiser des objets sous l’eau grâce aux ondes sonores', 'is_correct' => true],
                            ['choice_text' => 'Produire de la lumière', 'is_correct' => false],
                            ['choice_text' => 'Détecter uniquement les champs magnétiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sonar émet des ondes acoustiques dans l’eau et exploite leurs échos pour obtenir des informations sur l’environnement.',
                    ],
                    [
                        'question' => 'Pourquoi les studios d’enregistrement utilisent-ils des panneaux acoustiques ?',
                        'choices' => [
                            ['choice_text' => 'Pour contrôler les réflexions et la réverbération', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter systématiquement toutes les fréquences', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute vibration de l’air', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer les sons en lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les traitements acoustiques permettent de réduire ou contrôler les réflexions et réverbérations indésirables.',
                    ],
                    [
                        'question' => 'Quel système utilise un haut-parleur pour convertir un signal électrique en son ?',
                        'choices' => [
                            ['choice_text' => 'Une enceinte acoustique', 'is_correct' => true],
                            ['choice_text' => 'Un thermocouple', 'is_correct' => false],
                            ['choice_text' => 'Un baromètre', 'is_correct' => false],
                            ['choice_text' => 'Une cellule solaire uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un haut-parleur transforme un signal électrique en vibrations mécaniques qui mettent l’air en mouvement.',
                    ],
                    [
                        'question' => 'Quel dispositif convertit généralement les vibrations sonores en signal électrique ?',
                        'choices' => [
                            ['choice_text' => 'Un haut-parleur utilisé comme sortie uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un microphone', 'is_correct' => true],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Une boussole', 'is_correct' => false],
                        ],
                        'explanation' => 'Un microphone transforme les variations de pression acoustique en un signal électrique.',
                    ],
                    [
                        'question' => 'Pourquoi les architectes prennent-ils en compte l’acoustique d’une salle de spectacle ?',
                        'choices' => [
                            ['choice_text' => 'Pour supprimer toute vibration dans l’air', 'is_correct' => false],
                            ['choice_text' => 'Pour assurer une bonne diffusion et une bonne intelligibilité du son', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre toutes les fréquences égales', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher la lumière de se propager', 'is_correct' => false],
                        ],
                        'explanation' => 'La géométrie et les matériaux d’une salle influencent les réflexions, la réverbération et la qualité sonore perçue.',
                    ],
                    [
                        'question' => 'Quel domaine utilise largement l’analyse des vibrations mécaniques pour détecter des défauts dans les machines ?',
                        'choices' => [
                            ['choice_text' => 'La météorologie uniquement', 'is_correct' => false],
                            ['choice_text' => 'La botanique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La maintenance industrielle', 'is_correct' => true],
                            ['choice_text' => 'La cartographie astronomique seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse vibratoire permet notamment de détecter des déséquilibres, défauts mécaniques ou problèmes de roulements.',
                    ],
                    [
                        'question' => 'Quel phénomène est utilisé pour déterminer la distance d’un obstacle avec un écho sonore ?',
                        'choices' => [
                            ['choice_text' => 'La couleur de l’obstacle', 'is_correct' => false],
                            ['choice_text' => 'La masse de l’obstacle uniquement', 'is_correct' => false],
                            ['choice_text' => 'La température du microphone uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le temps de propagation aller-retour du son', 'is_correct' => true],
                        ],
                        'explanation' => 'En connaissant la célérité du son et le temps aller-retour, on peut estimer la distance jusqu’à l’obstacle.',
                    ],
                    [
                        'question' => 'Une alarme incendie sonore repose principalement sur :',
                        'choices' => [
                            ['choice_text' => 'La suppression de toutes les vibrations', 'is_correct' => false],
                            ['choice_text' => 'La production exclusive d’ultrasons inaudibles', 'is_correct' => false],
                            ['choice_text' => 'La transmission d’un signal dans le vide', 'is_correct' => false],
                            ['choice_text' => 'La production d’un signal acoustique suffisamment perceptible', 'is_correct' => true],
                        ],
                        'explanation' => 'Une alarme sonore est conçue pour produire un signal facilement détectable par les personnes présentes.',
                    ],
                    [
                        'question' => 'Quel est le but d’un système antibruit actif ?',
                        'choices' => [
                            ['choice_text' => 'Augmenter systématiquement le bruit', 'is_correct' => false],
                            ['choice_text' => 'Transformer le bruit en lumière', 'is_correct' => false],
                            ['choice_text' => 'Produire un signal qui interfère avec le bruit pour le réduire', 'is_correct' => true],
                            ['choice_text' => 'Faire disparaître physiquement toutes les vibrations de la source', 'is_correct' => false],
                        ],
                        'explanation' => 'Les systèmes antibruit actifs génèrent un signal opposé au bruit dans certaines conditions afin de réduire la perturbation résultante.',
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
                    'total_marks' => 10,
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