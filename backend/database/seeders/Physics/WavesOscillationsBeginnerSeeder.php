<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WavesOscillationsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'waves-oscillations')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction aux oscillations',
                'description' => 'Découverte des notions de base liées aux mouvements oscillatoires et périodiques.',
                'questions' => [
                    [
                        'question' => 'Qu\'appelle-t-on une oscillation ?',
                        'choices' => [
                            ['choice_text' => 'Un mouvement qui se répète autour d\'une position d\'équilibre', 'is_correct' => true],
                            ['choice_text' => 'Un mouvement toujours rectiligne et uniforme', 'is_correct' => false],
                            ['choice_text' => 'Un mouvement qui ne change jamais de direction', 'is_correct' => false],
                            ['choice_text' => 'Un mouvement nécessairement circulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une oscillation correspond à une variation répétée d\'une grandeur physique autour d\'une position ou valeur d\'équilibre.',
                    ],
                    [
                        'question' => 'Quelle est la position autour de laquelle un oscillateur effectue généralement son mouvement ?',
                        'choices' => [
                            ['choice_text' => 'La position d\'équilibre', 'is_correct' => true],
                            ['choice_text' => 'La position infinie', 'is_correct' => false],
                            ['choice_text' => 'La position de rupture', 'is_correct' => false],
                            ['choice_text' => 'La position de masse maximale', 'is_correct' => false],
                        ],
                        'explanation' => 'Un oscillateur revient périodiquement autour d\'une position d\'équilibre.',
                    ],
                    [
                        'question' => 'Quelle grandeur mesure l\'écart maximal par rapport à la position d\'équilibre ?',
                        'choices' => [
                            ['choice_text' => 'L\'amplitude', 'is_correct' => true],
                            ['choice_text' => 'La période', 'is_correct' => false],
                            ['choice_text' => 'La fréquence', 'is_correct' => false],
                            ['choice_text' => 'La phase', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'amplitude représente le déplacement maximal de l\'oscillateur par rapport à l\'équilibre.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on la durée d\'une oscillation complète ?',
                        'choices' => [
                            ['choice_text' => 'La période', 'is_correct' => true],
                            ['choice_text' => 'La pulsation', 'is_correct' => false],
                            ['choice_text' => 'L\'amplitude', 'is_correct' => false],
                            ['choice_text' => 'La longueur d\'onde', 'is_correct' => false],
                        ],
                        'explanation' => 'La période T est le temps nécessaire pour effectuer une oscillation complète.',
                    ],
                    [
                        'question' => 'Quelle unité utilise-t-on pour mesurer la période ?',
                        'choices' => [
                            ['choice_text' => 'La seconde', 'is_correct' => true],
                            ['choice_text' => 'Le hertz', 'is_correct' => false],
                            ['choice_text' => 'Le mètre', 'is_correct' => false],
                            ['choice_text' => 'Le newton', 'is_correct' => false],
                        ],
                        'explanation' => 'La période est une durée et s\'exprime donc en secondes dans le système international.',
                    ],
                    [
                        'question' => 'Quelle grandeur indique le nombre d\'oscillations effectuées par seconde ?',
                        'choices' => [
                            ['choice_text' => 'La fréquence', 'is_correct' => true],
                            ['choice_text' => 'La période', 'is_correct' => false],
                            ['choice_text' => 'L\'élongation', 'is_correct' => false],
                            ['choice_text' => 'La phase initiale', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence f indique combien de cycles sont réalisés par seconde.',
                    ],
                    [
                        'question' => 'Quelle est l\'unité SI de la fréquence ?',
                        'choices' => [
                            ['choice_text' => 'Le hertz', 'is_correct' => true],
                            ['choice_text' => 'La seconde', 'is_correct' => false],
                            ['choice_text' => 'Le mètre par seconde', 'is_correct' => false],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence s\'exprime en hertz, avec 1 Hz correspondant à une oscillation par seconde.',
                    ],
                    [
                        'question' => 'Quelle relation relie la fréquence f à la période T ?',
                        'choices' => [
                            ['choice_text' => 'f = 1/T', 'is_correct' => true],
                            ['choice_text' => 'f = T', 'is_correct' => false],
                            ['choice_text' => 'f = T²', 'is_correct' => false],
                            ['choice_text' => 'f = 1 + T', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence et la période sont inverses : f = 1/T.',
                    ],
                    [
                        'question' => 'Un oscillateur possède une période de 2 s. Quelle est sa fréquence ?',
                        'choices' => [
                            ['choice_text' => '0,5 Hz', 'is_correct' => true],
                            ['choice_text' => '2 Hz', 'is_correct' => false],
                            ['choice_text' => '4 Hz', 'is_correct' => false],
                            ['choice_text' => '1 Hz', 'is_correct' => false],
                        ],
                        'explanation' => 'f = 1/T = 1/2 = 0,5 Hz.',
                    ],
                    [
                        'question' => 'Quel exemple correspond à une oscillation mécanique simple ?',
                        'choices' => [
                            ['choice_text' => 'Une masse suspendue à un ressort', 'is_correct' => true],
                            ['choice_text' => 'Une voiture roulant à vitesse constante sur une route droite', 'is_correct' => false],
                            ['choice_text' => 'Une pierre immobile sur le sol', 'is_correct' => false],
                            ['choice_text' => 'Une règle posée sans mouvement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une masse reliée à un ressort peut effectuer un mouvement périodique autour de sa position d\'équilibre.',
                    ],
                ],
            ],

            [
                'title' => 'Mouvement harmonique simple',
                'description' => 'Introduction au mouvement harmonique simple et à sa description mathématique élémentaire.',
                'questions' => [
                    [
                        'question' => 'Quelle fonction décrit typiquement la position d\'un oscillateur harmonique simple ?',
                        'choices' => [
                            ['choice_text' => 'Une fonction sinusoïdale', 'is_correct' => true],
                            ['choice_text' => 'Une fonction constante uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une fonction linéaire uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une fonction toujours exponentielle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mouvement harmonique simple est généralement décrit par un sinus ou un cosinus.',
                    ],
                    [
                        'question' => 'Dans x(t) = A cos(ωt + φ), que représente A ?',
                        'choices' => [
                            ['choice_text' => 'L\'amplitude', 'is_correct' => true],
                            ['choice_text' => 'La période', 'is_correct' => false],
                            ['choice_text' => 'La fréquence', 'is_correct' => false],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                        ],
                        'explanation' => 'A est l\'amplitude maximale de l\'oscillation.',
                    ],
                    [
                        'question' => 'Dans x(t) = A cos(ωt + φ), que représente φ ?',
                        'choices' => [
                            ['choice_text' => 'La phase initiale', 'is_correct' => true],
                            ['choice_text' => 'La vitesse maximale', 'is_correct' => false],
                            ['choice_text' => 'La masse de l\'oscillateur', 'is_correct' => false],
                            ['choice_text' => 'La période directement', 'is_correct' => false],
                        ],
                        'explanation' => 'φ détermine l\'état de phase de l\'oscillateur à l\'instant choisi comme origine du temps.',
                    ],
                    [
                        'question' => 'Quelle relation relie la pulsation ω à la fréquence f ?',
                        'choices' => [
                            ['choice_text' => 'ω = 2πf', 'is_correct' => true],
                            ['choice_text' => 'ω = f/2π', 'is_correct' => false],
                            ['choice_text' => 'ω = f²', 'is_correct' => false],
                            ['choice_text' => 'ω = f + 2π', 'is_correct' => false],
                        ],
                        'explanation' => 'La pulsation est donnée par ω = 2πf.',
                    ],
                    [
                        'question' => 'Quelle est l\'unité SI de la pulsation ?',
                        'choices' => [
                            ['choice_text' => 'rad/s', 'is_correct' => true],
                            ['choice_text' => 'Hz', 'is_correct' => false],
                            ['choice_text' => 'm/s', 'is_correct' => false],
                            ['choice_text' => 'N/s', 'is_correct' => false],
                        ],
                        'explanation' => 'La pulsation s\'exprime en radians par seconde.',
                    ],
                    [
                        'question' => 'Lorsqu\'un oscillateur harmonique est à son déplacement maximal, sa vitesse est :',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Maximale', 'is_correct' => false],
                            ['choice_text' => 'Infinie', 'is_correct' => false],
                            ['choice_text' => 'Toujours négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Aux extrémités du mouvement, l\'oscillateur change de sens et sa vitesse instantanée est nulle.',
                    ],
                    [
                        'question' => 'À la position d\'équilibre, la vitesse d\'un oscillateur harmonique simple est généralement :',
                        'choices' => [
                            ['choice_text' => 'Maximale en valeur absolue', 'is_correct' => true],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Également à l\'amplitude', 'is_correct' => false],
                            ['choice_text' => 'Infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'oscillateur passe le plus rapidement par la position d\'équilibre.',
                    ],
                    [
                        'question' => 'Dans un mouvement harmonique simple idéal, l\'accélération est dirigée :',
                        'choices' => [
                            ['choice_text' => 'Vers la position d\'équilibre', 'is_correct' => true],
                            ['choice_text' => 'Toujours vers l\'extérieur', 'is_correct' => false],
                            ['choice_text' => 'Toujours vers le haut', 'is_correct' => false],
                            ['choice_text' => 'Dans une direction aléatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'accélération vérifie a = -ω²x, elle est donc opposée au déplacement.',
                    ],
                    [
                        'question' => 'Si l\'amplitude d\'un oscillateur harmonique est multipliée par deux, sa période idéale change-t-elle nécessairement ?',
                        'choices' => [
                            ['choice_text' => 'Non, pas dans le modèle harmonique idéal', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle double toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle devient quatre fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Elle devient toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un oscillateur harmonique idéal, la période ne dépend pas de l\'amplitude.',
                    ],
                    [
                        'question' => 'Quelle grandeur caractérise la répétition du mouvement dans le temps ?',
                        'choices' => [
                            ['choice_text' => 'La période', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La densité', 'is_correct' => false],
                            ['choice_text' => 'La charge électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'La période mesure le temps nécessaire pour retrouver le même état de mouvement.',
                    ],
                ],
            ],

            [
                'title' => 'Oscillateur masse-ressort',
                'description' => 'Étude élémentaire du système masse-ressort et des facteurs qui influencent sa période.',
                'questions' => [
                    [
                        'question' => 'Dans un système masse-ressort idéal, quelle force de rappel est associée au ressort ?',
                        'choices' => [
                            ['choice_text' => 'La force de Hooke', 'is_correct' => true],
                            ['choice_text' => 'La force magnétique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La poussée d\'Archimède', 'is_correct' => false],
                            ['choice_text' => 'La force nucléaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un ressort idéal, la force de rappel suit la loi de Hooke : F = -kx.',
                    ],
                    [
                        'question' => 'Dans la relation F = -kx, que représente k ?',
                        'choices' => [
                            ['choice_text' => 'La constante de raideur du ressort', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La vitesse', 'is_correct' => false],
                            ['choice_text' => 'La température', 'is_correct' => false],
                        ],
                        'explanation' => 'k mesure la raideur du ressort.',
                    ],
                    [
                        'question' => 'Quelle est l\'unité SI de la constante de raideur k ?',
                        'choices' => [
                            ['choice_text' => 'N/m', 'is_correct' => true],
                            ['choice_text' => 'kg/m³', 'is_correct' => false],
                            ['choice_text' => 'J/s', 'is_correct' => false],
                            ['choice_text' => 'Hz', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation F = kx impose à k l\'unité N/m.',
                    ],
                    [
                        'question' => 'Quelle expression donne la période d\'un oscillateur masse-ressort idéal ?',
                        'choices' => [
                            ['choice_text' => 'T = 2π√(m/k)', 'is_correct' => true],
                            ['choice_text' => 'T = 2π√(k/m)', 'is_correct' => false],
                            ['choice_text' => 'T = m/k', 'is_correct' => false],
                            ['choice_text' => 'T = k/m', 'is_correct' => false],
                        ],
                        'explanation' => 'La période d\'un oscillateur masse-ressort idéal est T = 2π√(m/k).',
                    ],
                    [
                        'question' => 'Que se passe-t-il avec la période si la masse suspendue augmente ?',
                        'choices' => [
                            ['choice_text' => 'La période augmente', 'is_correct' => true],
                            ['choice_text' => 'La période diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'La période devient nulle', 'is_correct' => false],
                            ['choice_text' => 'La période est forcément inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'Puisque T est proportionnelle à √m, une masse plus grande entraîne une période plus grande.',
                    ],
                    [
                        'question' => 'Que se passe-t-il avec la période si le ressort devient plus raide ?',
                        'choices' => [
                            ['choice_text' => 'La période diminue', 'is_correct' => true],
                            ['choice_text' => 'La période augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'La période devient infinie', 'is_correct' => false],
                            ['choice_text' => 'La période ne dépend jamais de k', 'is_correct' => false],
                        ],
                        'explanation' => 'La période varie comme 1/√k : un ressort plus raide produit des oscillations plus rapides.',
                    ],
                    [
                        'question' => 'Si la masse est multipliée par quatre, la période d\'un oscillateur masse-ressort est multipliée par :',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'T est proportionnelle à √m, donc √4 = 2.',
                    ],
                    [
                        'question' => 'Si la constante de raideur est multipliée par quatre, la période devient :',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus petite', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Quatre fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Inchangée dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme T est proportionnelle à 1/√k, une multiplication de k par 4 divise T par 2.',
                    ],
                    [
                        'question' => 'À quel endroit l\'énergie potentielle élastique est-elle maximale dans un oscillateur masse-ressort idéal ?',
                        'choices' => [
                            ['choice_text' => Aux positions extrêmes', 'is_correct' => true],
                            ['choice_text' => 'À la position d\'équilibre', 'is_correct' => false],
                            ['choice_text' => 'Lorsque la vitesse est maximale', 'is_correct' => false],
                            ['choice_text' => 'Uniquement après une collision', 'is_correct' => false],
                        ],
                        'explanation' => 'Aux extrémités, l\'élongation est maximale et l\'énergie potentielle élastique l\'est aussi.',
                    ],
                    [
                        'question' => 'Dans un oscillateur idéal sans pertes, l\'énergie mécanique totale :',
                        'choices' => [
                            ['choice_text' => 'Reste constante', 'is_correct' => true],
                            ['choice_text' => 'Diminue continuellement', 'is_correct' => false],
                            ['choice_text' => 'Augmente à chaque oscillation', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle à l\'équilibre', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans frottements ni dissipation, l\'énergie mécanique se conserve.',
                    ],
                ],
            ],

            [
                'title' => 'Pendule simple',
                'description' => 'Découverte du mouvement du pendule simple et de sa période dans l\'approximation des petites oscillations.',
                'questions' => [
                    [
                        'question' => 'De quoi est constitué idéalement un pendule simple ?',
                        'choices' => [
                            ['choice_text' => 'D\'une masse ponctuelle suspendue à un fil léger', 'is_correct' => true],
                            ['choice_text' => 'D\'un ressort électrique uniquement', 'is_correct' => false],
                            ['choice_text' => 'D\'une plaque fixe sans masse', 'is_correct' => false],
                            ['choice_text' => 'D\'un fluide enfermé dans un tube', 'is_correct' => false],
                        ],
                        'explanation' => 'Le modèle du pendule simple utilise une masse ponctuelle reliée à un point fixe par un fil inextensible et léger.',
                    ],
                    [
                        'question' => 'Quelle grandeur a une influence directe sur la période d\'un pendule simple idéal ?',
                        'choices' => [
                            ['choice_text' => 'La longueur du pendule', 'is_correct' => true],
                            ['choice_text' => 'La couleur de la masse', 'is_correct' => false],
                            ['choice_text' => 'La masse de la bille dans l\'approximation idéale', 'is_correct' => false],
                            ['choice_text' => 'Le matériau du fil uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour les petites oscillations, T = 2π√(L/g), donc la période dépend de la longueur et de g.',
                    ],
                    [
                        'question' => 'Quelle expression approchée donne la période d\'un pendule simple pour de petites oscillations ?',
                        'choices' => [
                            ['choice_text' => 'T = 2π√(L/g)', 'is_correct' => true],
                            ['choice_text' => 'T = 2π√(g/L)', 'is_correct' => false],
                            ['choice_text' => 'T = Lg', 'is_correct' => false],
                            ['choice_text' => 'T = g/L', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour de petites amplitudes, la période du pendule simple est approximativement T = 2π√(L/g).',
                    ],
                    [
                        'question' => 'Que devient la période lorsque la longueur du pendule augmente ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente', 'is_correct' => true],
                            ['choice_text' => 'Elle diminue', 'is_correct' => false],
                            ['choice_text' => 'Elle devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle reste toujours identique', 'is_correct' => false],
                        ],
                        'explanation' => 'La période est proportionnelle à √L.',
                    ],
                    [
                        'question' => 'Un pendule idéal oscille-t-il avec une période qui dépend de sa masse dans l\'approximation des petites oscillations ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle est proportionnelle à la masse', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle est proportionnelle au carré de la masse', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle est inversement proportionnelle à la masse dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse n\'apparaît pas dans la formule idéale T = 2π√(L/g).',
                    ],
                    [
                        'question' => 'Pourquoi l\'approximation des petites oscillations est-elle importante pour le pendule simple ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet d\'assimiler le mouvement à un mouvement harmonique simple', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime la gravité', 'is_correct' => false],
                            ['choice_text' => 'Elle rend la masse nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche tout mouvement', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour de petits angles, sin θ peut être approximé par θ, ce qui conduit à une équation harmonique.',
                    ],
                    [
                        'question' => 'Sur Terre, quelle grandeur intervient dans la période du pendule simple ?',
                        'choices' => [
                            ['choice_text' => 'L\'accélération de la pesanteur g', 'is_correct' => true],
                            ['choice_text' => 'La masse du Soleil', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La charge de la masse suspendue', 'is_correct' => false],
                        ],
                        'explanation' => 'La période dépend de g via T = 2π√(L/g).',
                    ],
                    [
                        'question' => 'Si la longueur d\'un pendule est multipliée par quatre, sa période idéale est multipliée par :',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'T est proportionnelle à √L, donc √4 = 2.',
                    ],
                    [
                        'question' => 'À quelle position l\'énergie potentielle gravitationnelle du pendule est-elle maximale ?',
                        'choices' => [
                            ['choice_text' => 'Aux positions extrêmes', 'is_correct' => true],
                            ['choice_text' => 'Au point le plus bas', 'is_correct' => false],
                            ['choice_text' => 'À la vitesse maximale', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pendule atteint sa hauteur maximale aux extrémités de son oscillation.',
                    ],
                    [
                        'question' => 'Au point le plus bas du mouvement, la vitesse du pendule est idéalement :',
                        'choices' => [
                            ['choice_text' => 'Maximale en valeur absolue', 'is_correct' => true],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                            ['choice_text' => 'Toujours négative et nulle', 'is_correct' => false],
                            ['choice_text' => 'Infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'énergie potentielle est minimale au point le plus bas, donc l\'énergie cinétique y est maximale dans le modèle idéal.',
                    ],
                ],
            ],

            [
                'title' => 'Ondes mécaniques',
                'description' => 'Première approche de la propagation des ondes mécaniques dans un milieu matériel.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'une onde mécanique ?',
                        'choices' => [
                            ['choice_text' => 'Une perturbation qui se propage dans un milieu matériel', 'is_correct' => true],
                            ['choice_text' => 'Une particule qui voyage seule dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Une force permanente appliquée à un solide', 'is_correct' => false],
                            ['choice_text' => 'Une température constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Une onde mécanique nécessite un milieu matériel pour se propager.',
                    ],
                    [
                        'question' => 'Une onde transporte principalement :',
                        'choices' => [
                            ['choice_text' => 'De l\'énergie', 'is_correct' => true],
                            ['choice_text' => 'La matière du milieu sur toute sa distance de propagation', 'is_correct' => false],
                            ['choice_text' => 'Une masse globale constante vers l\'avant', 'is_correct' => false],
                            ['choice_text' => 'Uniquement de la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Une onde transmet de l\'énergie et de l\'information sans transporter globalement la matière du milieu sur toute la distance.',
                    ],
                    [
                        'question' => 'Une onde mécanique peut-elle se propager dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement si elle est sonore', 'is_correct' => false],
                            ['choice_text' => 'Uniquement à température nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ondes mécaniques nécessitent des interactions entre les constituants d\'un milieu matériel.',
                    ],
                    [
                        'question' => 'Quel exemple est une onde mécanique ?',
                        'choices' => [
                            ['choice_text' => 'Une onde à la surface de l\'eau', 'is_correct' => true],
                            ['choice_text' => 'La lumière dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Une onde radio dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Un champ électrique statique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vagues et les perturbations à la surface de l\'eau sont des exemples d\'ondes mécaniques.',
                    ],
                    [
                        'question' => 'Dans une onde longitudinale, les particules du milieu oscillent principalement :',
                        'choices' => [
                            ['choice_text' => 'Dans la direction de propagation', 'is_correct' => true],
                            ['choice_text' => 'Perpendiculairement à la direction de propagation uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sans mouvement', 'is_correct' => false],
                            ['choice_text' => 'Uniquement selon une trajectoire circulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une onde longitudinale, les oscillations sont parallèles à la direction de propagation.',
                    ],
                    [
                        'question' => 'Dans une onde transversale, les oscillations sont généralement :',
                        'choices' => [
                            ['choice_text' => 'Perpendiculaires à la direction de propagation', 'is_correct' => true],
                            ['choice_text' => 'Parallèles à la direction de propagation', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulles', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement circulaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une onde transversale, la déformation du milieu est perpendiculaire à la propagation.',
                    ],
                    [
                        'question' => 'Le son dans l\'air est principalement une onde :',
                        'choices' => [
                            ['choice_text' => 'Longitudinale', 'is_correct' => true],
                            ['choice_text' => 'Transversale', 'is_correct' => false],
                            ['choice_text' => 'Électromagnétique', 'is_correct' => false],
                            ['choice_text' => 'Stationnaire dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l\'air, le son se propage sous forme de compressions et de raréfactions longitudinales.',
                    ],
                    [
                        'question' => 'Que représente la célérité d\'une onde ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse de propagation de la perturbation dans le milieu', 'is_correct' => true],
                            ['choice_text' => 'La vitesse d\'une particule qui quitte définitivement le milieu', 'is_correct' => false],
                            ['choice_text' => 'La fréquence de l\'onde', 'is_correct' => false],
                            ['choice_text' => 'L\'amplitude maximale', 'is_correct' => false],
                        ],
                        'explanation' => 'La célérité décrit la vitesse à laquelle la perturbation se propage.',
                    ],
                    [
                        'question' => 'Une onde peut-elle transporter de l\'énergie sans transporter globalement le milieu lui-même ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les ondes stationnaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Les éléments du milieu oscillent localement tandis que la perturbation et l\'énergie se propagent.',
                    ],
                    [
                        'question' => 'Dans une corde tendue, quel type d\'onde peut facilement se propager ?',
                        'choices' => [
                            ['choice_text' => 'Une onde transversale', 'is_correct' => true],
                            ['choice_text' => 'Uniquement une onde électromagnétique', 'is_correct' => false],
                            ['choice_text' => 'Aucune onde', 'is_correct' => false],
                            ['choice_text' => 'Uniquement une onde sonore dans l\'air', 'is_correct' => false],
                        ],
                        'explanation' => 'Une perturbation verticale d\'une corde tendue produit une onde transversale.',
                    ],
                ],
            ],

            [
                'title' => 'Longueur d\'onde et célérité',
                'description' => 'Comprendre la longueur d\'onde, la fréquence et leur relation avec la vitesse de propagation.',
                'questions' => [
                    [
                        'question' => 'Qu\'appelle-t-on longueur d\'onde ?',
                        'choices' => [
                            ['choice_text' => 'La distance parcourue par l\'onde pendant une période', 'is_correct' => true],
                            ['choice_text' => 'Le temps nécessaire pour faire une oscillation', 'is_correct' => false],
                            ['choice_text' => 'L\'amplitude maximale', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d\'oscillations par seconde', 'is_correct' => false],
                        ],
                        'explanation' => 'La longueur d\'onde λ est la distance correspondant à une période de l\'onde.',
                    ],
                    [
                        'question' => 'Quelle est l\'unité SI de la longueur d\'onde ?',
                        'choices' => [
                            ['choice_text' => 'Le mètre', 'is_correct' => true],
                            ['choice_text' => 'Le hertz', 'is_correct' => false],
                            ['choice_text' => 'La seconde', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                        ],
                        'explanation' => 'La longueur d\'onde est une distance et se mesure en mètres dans le SI.',
                    ],
                    [
                        'question' => 'Quelle relation relie la célérité v, la longueur d\'onde λ et la fréquence f ?',
                        'choices' => [
                            ['choice_text' => 'v = λf', 'is_correct' => true],
                            ['choice_text' => 'v = λ/f', 'is_correct' => false],
                            ['choice_text' => 'v = f/λ', 'is_correct' => false],
                            ['choice_text' => 'v = λ + f', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation fondamentale est v = λf.',
                    ],
                    [
                        'question' => 'Une onde possède une longueur d\'onde de 2 m et une fréquence de 3 Hz. Quelle est sa célérité ?',
                        'choices' => [
                            ['choice_text' => '6 m/s', 'is_correct' => true],
                            ['choice_text' => '1,5 m/s', 'is_correct' => false],
                            ['choice_text' => '5 m/s', 'is_correct' => false],
                            ['choice_text' => '0,67 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'v = λf = 2 × 3 = 6 m/s.',
                    ],
                    [
                        'question' => 'À célérité constante, si la fréquence d\'une onde augmente, sa longueur d\'onde :',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente', 'is_correct' => false],
                            ['choice_text' => 'Devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Reste nécessairement constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme v = λf et que v reste constante, λ diminue lorsque f augmente.',
                    ],
                    [
                        'question' => 'À fréquence constante, si la célérité double, la longueur d\'onde :',
                        'choices' => [
                            ['choice_text' => 'Double', 'is_correct' => true],
                            ['choice_text' => 'Est divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'Reste identique', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec f constante, λ = v/f, donc λ varie dans la même proportion que v.',
                    ],
                    [
                        'question' => 'Deux points séparés d\'une longueur d\'onde sur une onde périodique sont généralement :',
                        'choices' => [
                            ['choice_text' => 'En phase', 'is_correct' => true],
                            ['choice_text' => 'Toujours en opposition de phase', 'is_correct' => false],
                            ['choice_text' => 'Sans relation de phase', 'is_correct' => false],
                            ['choice_text' => 'Toujours immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Une séparation spatiale d\'une longueur d\'onde correspond à un déphasage de 2π, donc à la même phase.',
                    ],
                    [
                        'question' => 'Quel paramètre est exprimé en hertz ?',
                        'choices' => [
                            ['choice_text' => 'La fréquence', 'is_correct' => true],
                            ['choice_text' => 'La longueur d\'onde', 'is_correct' => false],
                            ['choice_text' => 'La célérité', 'is_correct' => false],
                            ['choice_text' => 'L\'amplitude', 'is_correct' => false],
                        ],
                        'explanation' => 'Le hertz est l\'unité de fréquence.',
                    ],
                    [
                        'question' => 'Si la période d\'une onde vaut 0,25 s, quelle est sa fréquence ?',
                        'choices' => [
                            ['choice_text' => '4 Hz', 'is_correct' => true],
                            ['choice_text' => '0,25 Hz', 'is_correct' => false],
                            ['choice_text' => '2 Hz', 'is_correct' => false],
                            ['choice_text' => '25 Hz', 'is_correct' => false],
                        ],
                        'explanation' => 'f = 1/T = 1/0,25 = 4 Hz.',
                    ],
                    [
                        'question' => 'Une onde se propage à 10 m/s avec une fréquence de 2 Hz. Quelle est sa longueur d\'onde ?',
                        'choices' => [
                            ['choice_text' => '5 m', 'is_correct' => true],
                            ['choice_text' => '20 m', 'is_correct' => false],
                            ['choice_text' => '0,2 m', 'is_correct' => false],
                            ['choice_text' => '12 m', 'is_correct' => false],
                        ],
                        'explanation' => 'λ = v/f = 10/2 = 5 m.',
                    ],
                ],
            ],

            [
                'title' => 'Superposition et interférences simples',
                'description' => 'Découverte du principe de superposition et des interférences entre ondes.',
                'questions' => [
                    [
                        'question' => 'Que signifie le principe de superposition des ondes ?',
                        'choices' => [
                            ['choice_text' => 'La perturbation résultante est la somme des perturbations individuelles', 'is_correct' => true],
                            ['choice_text' => 'Les ondes disparaissent lorsqu\'elles se rencontrent', 'is_correct' => false],
                            ['choice_text' => 'Une seule onde reste toujours présente', 'is_correct' => false],
                            ['choice_text' => 'Les fréquences deviennent toujours nulles', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un système linéaire, les déformations produites par plusieurs ondes s\'additionnent.',
                    ],
                    [
                        'question' => 'Lorsque deux ondes se renforcent mutuellement, on parle d\'interférence :',
                        'choices' => [
                            ['choice_text' => 'Constructive', 'is_correct' => true],
                            ['choice_text' => 'Destructive', 'is_correct' => false],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                            ['choice_text' => 'Incompressible', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'interférence constructive augmente l\'amplitude résultante.',
                    ],
                    [
                        'question' => 'Lorsque deux perturbations opposées se compensent partiellement ou totalement, on parle d\'interférence :',
                        'choices' => [
                            ['choice_text' => 'Destructive', 'is_correct' => true],
                            ['choice_text' => 'Constructive', 'is_correct' => false],
                            ['choice_text' => 'Résonante', 'is_correct' => false],
                            ['choice_text' => 'Gravitationnelle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une interférence destructive réduit l\'amplitude résultante.',
                    ],
                    [
                        'question' => 'Deux ondes de même phase au même endroit ont tendance à produire :',
                        'choices' => [
                            ['choice_text' => 'Une interférence constructive', 'is_correct' => true],
                            ['choice_text' => 'Une annulation systématique', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale d\'énergie', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Des perturbations en phase s\'additionnent et renforcent généralement le signal résultant.',
                    ],
                    [
                        'question' => 'Deux perturbations de même amplitude et en opposition de phase peuvent donner :',
                        'choices' => [
                            ['choice_text' => 'Une amplitude résultante nulle', 'is_correct' => true],
                            ['choice_text' => 'Une amplitude double', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence infinie', 'is_correct' => false],
                            ['choice_text' => 'Une célérité nulle dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux amplitudes égales et opposées peuvent se compenser exactement.',
                    ],
                    [
                        'question' => 'Le phénomène d\'interférence nécessite-t-il obligatoirement que les deux ondes soient de même amplitude ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, sinon aucune superposition n\'est possible', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les ondes sonores', 'is_correct' => false],
                        ],
                        'explanation' => 'Des ondes d\'amplitudes différentes peuvent également interférer.',
                    ],
                    [
                        'question' => 'Que se passe-t-il lorsque deux ondes mécaniques se croisent dans un milieu linéaire idéal ?',
                        'choices' => [
                            ['choice_text' => 'Elles se superposent puis continuent leur propagation', 'is_correct' => true],
                            ['choice_text' => 'Elles se détruisent définitivement', 'is_correct' => false],
                            ['choice_text' => 'Elles deviennent automatiquement une seule onde permanente', 'is_correct' => false],
                            ['choice_text' => 'Elles s\'arrêtent complètement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ondes se superposent pendant leur rencontre puis poursuivent leur propagation dans un milieu linéaire idéal.',
                    ],
                    [
                        'question' => 'Une interférence constructive correspond généralement à une amplitude résultante :',
                        'choices' => [
                            ['choice_text' => 'Plus grande que celle de chacune des deux perturbations prises séparément', 'is_correct' => true],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Indépendante des amplitudes', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les contributions ont le même signe au même endroit, leurs amplitudes s\'additionnent.',
                    ],
                    [
                        'question' => 'Quelle grandeur caractérise le décalage entre deux oscillations de même fréquence ?',
                        'choices' => [
                            ['choice_text' => 'Le déphasage', 'is_correct' => true],
                            ['choice_text' => 'La masse volumique', 'is_correct' => false],
                            ['choice_text' => 'La température', 'is_correct' => false],
                            ['choice_text' => 'La raideur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déphasage mesure le décalage relatif entre deux oscillations.',
                    ],
                    [
                        'question' => 'Deux ondes cohérentes peuvent produire des zones alternativement renforcées et affaiblies. Ce phénomène est appelé :',
                        'choices' => [
                            ['choice_text' => 'Figure d\'interférences', 'is_correct' => true],
                            ['choice_text' => 'Gravitation', 'is_correct' => false],
                            ['choice_text' => 'Convection', 'is_correct' => false],
                            ['choice_text' => 'Dissociation', 'is_correct' => false],
                        ],
                        'explanation' => 'Les interférences peuvent créer une répartition spatiale de maxima et de minima d\'amplitude.',
                    ],
                ],
            ],

            [
                'title' => 'Ondes stationnaires et résonance',
                'description' => 'Découverte des ondes stationnaires et du phénomène de résonance dans des systèmes oscillants.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'une onde stationnaire ?',
                        'choices' => [
                            ['choice_text' => 'Une configuration résultant notamment de la superposition de deux ondes opposées', 'is_correct' => true],
                            ['choice_text' => 'Une onde qui ne contient aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'Une onde qui ne possède aucune oscillation', 'is_correct' => false],
                            ['choice_text' => 'Une onde qui existe uniquement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Une onde stationnaire peut résulter de la superposition de deux ondes de même fréquence se propageant en sens opposés.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on les points d\'une onde stationnaire où l\'amplitude est toujours nulle ?',
                        'choices' => [
                            ['choice_text' => 'Les nœuds', 'is_correct' => true],
                            ['choice_text' => 'Les ventres', 'is_correct' => false],
                            ['choice_text' => 'Les crêtes', 'is_correct' => false],
                            ['choice_text' => 'Les sources', 'is_correct' => false],
                        ],
                        'explanation' => 'Un nœud est un point fixe où le déplacement reste nul dans une onde stationnaire idéale.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on les points où l\'amplitude d\'une onde stationnaire est maximale ?',
                        'choices' => [
                            ['choice_text' => 'Les ventres', 'is_correct' => true],
                            ['choice_text' => 'Les nœuds', 'is_correct' => false],
                            ['choice_text' => 'Les foyers', 'is_correct' => false],
                            ['choice_text' => 'Les minima de fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ventres sont les points où l\'amplitude de l\'oscillation est maximale.',
                    ],
                    [
                        'question' => 'Dans une onde stationnaire idéale, les nœuds sont-ils fixes dans l\'espace ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, ils se déplacent à la vitesse de l\'onde', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Uniquement si la fréquence est nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La position des nœuds reste fixe dans une onde stationnaire idéale.',
                    ],
                    [
                        'question' => 'Qu\'appelle-t-on résonance ?',
                        'choices' => [
                            ['choice_text' => 'Une forte réponse d\'un système lorsque la fréquence d\'excitation est proche d\'une fréquence propre', 'is_correct' => true],
                            ['choice_text' => 'Une disparition de toutes les oscillations', 'is_correct' => false],
                            ['choice_text' => 'Une diminution obligatoire de la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale de transfert d\'énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'La résonance correspond à une réponse particulièrement importante lorsque l\'excitation est proche d\'une fréquence propre du système.',
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement à la résonance dans un système faiblement amorti ?',
                        'choices' => [
                            ['choice_text' => 'L\'amplitude des oscillations devient importante', 'is_correct' => true],
                            ['choice_text' => 'L\'amplitude devient forcément nulle', 'is_correct' => false],
                            ['choice_text' => 'La fréquence propre disparaît', 'is_correct' => false],
                            ['choice_text' => 'La masse du système change automatiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'À la résonance, le système peut absorber efficacement l\'énergie de l\'excitation, ce qui augmente fortement l\'amplitude.',
                    ],
                    [
                        'question' => 'Une corde fixée à ses deux extrémités peut-elle présenter des modes propres ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elle est dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Uniquement sans tension', 'is_correct' => false],
                        ],
                        'explanation' => 'Une corde fixée aux deux extrémités peut vibrer selon différents modes propres compatibles avec ses conditions aux limites.',
                    ],
                    [
                        'question' => 'Pour une corde fixée aux deux extrémités, les extrémités sont généralement :',
                        'choices' => [
                            ['choice_text' => 'Des nœuds', 'is_correct' => true],
                            ['choice_text' => 'Des ventres obligatoires', 'is_correct' => false],
                            ['choice_text' => 'Des sources indépendantes', 'is_correct' => false],
                            ['choice_text' => 'Des points sans déplacement mais sans relation avec l\'onde', 'is_correct' => false],
                        ],
                        'explanation' => 'Les points fixés ne peuvent pas se déplacer, donc ils correspondent à des nœuds.',
                    ],
                    [
                        'question' => 'La fréquence propre d\'un système correspond à :',
                        'choices' => [
                            ['choice_text' => 'Une fréquence naturelle à laquelle le système peut osciller', 'is_correct' => true],
                            ['choice_text' => 'La fréquence de la source électrique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence toujours égale à zéro', 'is_correct' => false],
                            ['choice_text' => 'La fréquence du mouvement de la Terre uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque système oscillant possède des fréquences naturelles déterminées par ses propriétés physiques.',
                    ],
                    [
                        'question' => 'Quelle situation constitue un exemple courant de résonance ?',
                        'choices' => [
                            ['choice_text' => 'Une balançoire poussée régulièrement au bon rythme', 'is_correct' => true],
                            ['choice_text' => 'Une pierre immobile sur le sol', 'is_correct' => false],
                            ['choice_text' => 'Un objet placé dans une boîte sans interaction', 'is_correct' => false],
                            ['choice_text' => 'Une lampe éteinte', 'is_correct' => false],
                        ],
                        'explanation' => 'Des poussées appliquées au bon rythme peuvent augmenter progressivement l\'amplitude d\'une balançoire.',
                    ],
                ],
            ],

            [
                'title' => 'Applications des ondes et oscillations',
                'description' => 'Questions de synthèse sur les applications courantes des oscillations et des ondes.',
                'questions' => [
                    [
                        'question' => 'Quel phénomène explique le fonctionnement d\'un diapason ?',
                        'choices' => [
                            ['choice_text' => 'Des oscillations mécaniques périodiques', 'is_correct' => true],
                            ['choice_text' => 'Une réaction nucléaire', 'is_correct' => false],
                            ['choice_text' => 'Une conduction électrique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une fusion de matériaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Un diapason produit un son grâce aux vibrations mécaniques de ses branches.',
                    ],
                    [
                        'question' => 'Pourquoi une caisse de résonance peut-elle rendre un instrument plus sonore ?',
                        'choices' => [
                            ['choice_text' => 'Elle favorise la mise en vibration de l\'air et le rayonnement sonore', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime toutes les vibrations', 'is_correct' => false],
                            ['choice_text' => 'Elle rend le son électromagnétique', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine complètement les pertes', 'is_correct' => false],
                        ],
                        'explanation' => 'La caisse de résonance facilite le couplage entre la source vibrante et l\'air environnant.',
                    ],
                    [
                        'question' => 'Quel appareil utilise directement des oscillations pour mesurer le temps ?',
                        'choices' => [
                            ['choice_text' => 'Une horloge à pendule', 'is_correct' => true],
                            ['choice_text' => 'Un baromètre uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un voltmètre', 'is_correct' => false],
                            ['choice_text' => 'Un calorimètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Une horloge à pendule exploite la régularité du mouvement oscillatoire pour mesurer des intervalles de temps.',
                    ],
                    [
                        'question' => 'Comment peut-on réduire les oscillations indésirables d\'un système mécanique ?',
                        'choices' => [
                            ['choice_text' => 'Ajouter de l\'amortissement', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toute masse', 'is_correct' => false],
                            ['choice_text' => 'Augmenter systématiquement l\'amplitude', 'is_correct' => false],
                            ['choice_text' => 'Forcer le système à résonner', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'amortissement dissipe de l\'énergie et réduit généralement l\'amplitude des oscillations.',
                    ],
                    [
                        'question' => 'Quel phénomène permet à une vibration de se transmettre d\'un point à un autre d\'un milieu ?',
                        'choices' => [
                            ['choice_text' => 'La propagation d\'une onde', 'is_correct' => true],
                            ['choice_text' => 'La solidification', 'is_correct' => false],
                            ['choice_text' => 'La fusion', 'is_correct' => false],
                            ['choice_text' => 'La dilatation thermique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La propagation d\'une perturbation de proche en proche constitue une onde.',
                    ],
                    [
                        'question' => 'Un son aigu correspond généralement à une fréquence :',
                        'choices' => [
                            ['choice_text' => 'Plus élevée qu\'un son grave', 'is_correct' => true],
                            ['choice_text' => 'Plus faible qu\'un son grave', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de la fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'La hauteur perçue d\'un son est liée à sa fréquence : une fréquence élevée correspond à un son plus aigu.',
                    ],
                    [
                        'question' => 'Quelle grandeur est principalement liée à la sensation de hauteur d\'un son ?',
                        'choices' => [
                            ['choice_text' => 'La fréquence', 'is_correct' => true],
                            ['choice_text' => 'La masse du haut-parleur', 'is_correct' => false],
                            ['choice_text' => 'La longueur du câble', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique seule', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence d\'une vibration sonore est directement liée à la hauteur du son perçu.',
                    ],
                    [
                        'question' => 'Quelle grandeur influence principalement l\'intensité d\'une vibration dans une description simple ?',
                        'choices' => [
                            ['choice_text' => 'L\'amplitude de l\'oscillation', 'is_correct' => true],
                            ['choice_text' => 'La longueur d\'onde uniquement', 'is_correct' => false],
                            ['choice_text' => 'La période uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse atomique du milieu uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une amplitude plus grande correspond généralement à une oscillation plus énergique et à une intensité plus importante.',
                    ],
                    [
                        'question' => 'Pourquoi les structures des ponts doivent-elles être étudiées vis-à-vis des vibrations ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'une excitation proche d\'une fréquence propre peut amplifier les oscillations', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'un pont est toujours un oscillateur harmonique parfait', 'is_correct' => false],
                            ['choice_text' => 'Parce que la gravité disparaît pendant une vibration', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les vibrations détruisent immédiatement une structure', 'is_correct' => false],
                        ],
                        'explanation' => 'La proximité d\'une excitation avec une fréquence propre peut provoquer une réponse vibratoire importante, d\'où l\'importance de l\'étude dynamique des structures.',
                    ],
                    [
                        'question' => 'Quel phénomène est utilisé en imagerie ultrasonore ?',
                        'choices' => [
                            ['choice_text' => 'La propagation et la réflexion d\'ondes ultrasonores', 'is_correct' => true],
                            ['choice_text' => 'La gravitation quantique', 'is_correct' => false],
                            ['choice_text' => 'La fusion nucléaire', 'is_correct' => false],
                            ['choice_text' => 'La conduction électrique dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'échographie exploite des ondes ultrasonores et l\'analyse de leurs réflexions dans les tissus.',
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