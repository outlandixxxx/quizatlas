<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WavesOpticsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'waves-optics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Fondamentaux des ondes
            // ============================================================

            [
                'title' => 'Fondamentaux des ondes',
                'description' => 'Introduction aux ondes, à leur propagation et à leurs principales caractéristiques.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une onde ?',
                        'choices' => [
                            ['choice_text' => 'Une perturbation qui se propage et transporte de l’énergie', 'is_correct' => true],
                            ['choice_text' => 'Une matière qui se déplace toujours avec la perturbation', 'is_correct' => false],
                            ['choice_text' => 'Une force qui reste immobile', 'is_correct' => false],
                            ['choice_text' => 'Une masse qui augmente avec le temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Une onde correspond à la propagation d’une perturbation et permet un transfert d’énergie sans transport global de matière dans le cas général.',
                    ],
                    [
                        'question' => 'Quelle grandeur mesure le nombre d’oscillations effectuées par seconde ?',
                        'choices' => [
                            ['choice_text' => 'La fréquence', 'is_correct' => true],
                            ['choice_text' => 'La période', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde', 'is_correct' => false],
                            ['choice_text' => 'L’amplitude', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence est le nombre de cycles par seconde et s’exprime en hertz.',
                    ],
                    [
                        'question' => 'Quelle est l’unité SI de la fréquence ?',
                        'choices' => [
                            ['choice_text' => 'Le hertz', 'is_correct' => true],
                            ['choice_text' => 'Le mètre', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le newton', 'is_correct' => false],
                        ],
                        'explanation' => 'Le hertz (Hz) correspond à une oscillation par seconde.',
                    ],
                    [
                        'question' => 'Quelle grandeur représente la durée d’une oscillation complète ?',
                        'choices' => [
                            ['choice_text' => 'La période', 'is_correct' => true],
                            ['choice_text' => 'La fréquence', 'is_correct' => false],
                            ['choice_text' => 'La vitesse', 'is_correct' => false],
                            ['choice_text' => 'L’intensité', 'is_correct' => false],
                        ],
                        'explanation' => 'La période T est le temps nécessaire pour effectuer un cycle complet.',
                    ],
                    [
                        'question' => 'Quelle relation relie la période T et la fréquence f ?',
                        'choices' => [
                            ['choice_text' => 'T = 1/f', 'is_correct' => true],
                            ['choice_text' => 'T = f', 'is_correct' => false],
                            ['choice_text' => 'T = 2f', 'is_correct' => false],
                            ['choice_text' => 'T = f²', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence et la période sont inverses l’une de l’autre.',
                    ],
                    [
                        'question' => 'Quelle grandeur correspond à la distance entre deux points successifs en phase sur une onde périodique ?',
                        'choices' => [
                            ['choice_text' => 'La longueur d’onde', 'is_correct' => true],
                            ['choice_text' => 'La période', 'is_correct' => false],
                            ['choice_text' => 'L’amplitude', 'is_correct' => false],
                            ['choice_text' => 'La fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'La longueur d’onde λ est la distance correspondant à une période spatiale.',
                    ],
                    [
                        'question' => 'Quelle relation générale relie la célérité d’une onde, sa longueur d’onde et sa fréquence ?',
                        'choices' => [
                            ['choice_text' => 'v = λf', 'is_correct' => true],
                            ['choice_text' => 'v = λ/f', 'is_correct' => false],
                            ['choice_text' => 'v = f/λ', 'is_correct' => false],
                            ['choice_text' => 'v = λ + f', 'is_correct' => false],
                        ],
                        'explanation' => 'La célérité d’une onde périodique vérifie v = λf.',
                    ],
                    [
                        'question' => 'Une onde possède une fréquence de 5 Hz. Quelle est sa période ?',
                        'choices' => [
                            ['choice_text' => '0,2 s', 'is_correct' => true],
                            ['choice_text' => '5 s', 'is_correct' => false],
                            ['choice_text' => '2 s', 'is_correct' => false],
                            ['choice_text' => '0,5 s', 'is_correct' => false],
                        ],
                        'explanation' => 'T = 1/f = 1/5 = 0,2 s.',
                    ],
                    [
                        'question' => 'Une onde se propage à 20 m/s avec une fréquence de 4 Hz. Quelle est sa longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => '5 m', 'is_correct' => true],
                            ['choice_text' => '80 m', 'is_correct' => false],
                            ['choice_text' => '0,2 m', 'is_correct' => false],
                            ['choice_text' => '16 m', 'is_correct' => false],
                        ],
                        'explanation' => 'λ = v/f = 20/4 = 5 m.',
                    ],
                    [
                        'question' => 'Dans une onde mécanique progressive, le milieu de propagation est-il généralement transporté dans son ensemble avec l’onde ?',
                        'choices' => [
                            ['choice_text' => 'Non, les particules oscillent localement tandis que l’énergie se propage', 'is_correct' => true],
                            ['choice_text' => 'Oui, toute la matière se déplace avec l’onde', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement dans les solides', 'is_correct' => false],
                            ['choice_text' => 'Non, parce qu’aucune énergie ne se propage', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une onde mécanique, les particules du milieu oscillent autour de leur position d’équilibre tandis que la perturbation se propage.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Ondes mécaniques
            // ============================================================

            [
                'title' => 'Ondes mécaniques',
                'description' => 'Différents types d’ondes mécaniques et propagation dans les milieux matériels.',
                'questions' => [
                    [
                        'question' => 'Une onde sonore dans l’air est principalement une onde...',
                        'choices' => [
                            ['choice_text' => 'Longitudinale', 'is_correct' => true],
                            ['choice_text' => 'Transversale', 'is_correct' => false],
                            ['choice_text' => 'Électromagnétique', 'is_correct' => false],
                            ['choice_text' => 'Stationnaire dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’air, les particules oscillent principalement dans la direction de propagation du son.',
                    ],
                    [
                        'question' => 'Une onde sur une corde tendue est généralement modélisée comme une onde...',
                        'choices' => [
                            ['choice_text' => 'Transversale', 'is_correct' => true],
                            ['choice_text' => 'Longitudinale uniquement', 'is_correct' => false],
                            ['choice_text' => 'Thermique', 'is_correct' => false],
                            ['choice_text' => 'Électromagnétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle classique, la perturbation de la corde est perpendiculaire à la direction de propagation.',
                    ],
                    [
                        'question' => 'Quelle grandeur influence directement la célérité d’une onde mécanique dans un milieu donné ?',
                        'choices' => [
                            ['choice_text' => 'Les propriétés du milieu', 'is_correct' => true],
                            ['choice_text' => 'La couleur de l’onde', 'is_correct' => false],
                            ['choice_text' => 'La masse de l’observateur', 'is_correct' => false],
                            ['choice_text' => 'La température de l’observateur uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La célérité dépend des propriétés physiques du milieu, comme sa rigidité, sa masse volumique ou sa tension.',
                    ],
                    [
                        'question' => 'Sur une corde tendue, si la tension augmente tandis que la masse linéique reste constante, la célérité de l’onde...',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Devient indépendante de la tension', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une corde idéale, v = √(T/μ), donc une tension plus élevée augmente la célérité.',
                    ],
                    [
                        'question' => 'Pourquoi le son ne peut-il pas se propager dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'Il nécessite un milieu matériel pour transmettre la perturbation mécanique', 'is_correct' => true],
                            ['choice_text' => 'Le son est toujours une onde électromagnétique', 'is_correct' => false],
                            ['choice_text' => 'Le vide absorbe toute lumière', 'is_correct' => false],
                            ['choice_text' => 'La fréquence devient nulle dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le son est une onde mécanique et nécessite des particules capables de transmettre les variations de pression.',
                    ],
                    [
                        'question' => 'Une onde mécanique transporte principalement...',
                        'choices' => [
                            ['choice_text' => 'De l’énergie à travers le milieu', 'is_correct' => true],
                            ['choice_text' => 'La totalité du milieu matériel', 'is_correct' => false],
                            ['choice_text' => 'Uniquement de la masse', 'is_correct' => false],
                            ['choice_text' => 'Une charge électrique nette dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'La propagation de la perturbation permet le transfert d’énergie.',
                    ],
                    [
                        'question' => 'Que se passe-t-il lorsqu’une onde atteint un obstacle et revient dans le même milieu ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut subir une réflexion', 'is_correct' => true],
                            ['choice_text' => 'Elle devient nécessairement électromagnétique', 'is_correct' => false],
                            ['choice_text' => 'Elle perd toujours toute son énergie', 'is_correct' => false],
                            ['choice_text' => 'Sa fréquence devient automatiquement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La réflexion correspond au retour de l’onde dans son milieu d’origine après interaction avec une interface ou un obstacle.',
                    ],
                    [
                        'question' => 'Lorsqu’une onde passe d’un milieu à un autre, quelle grandeur reste généralement inchangée à une interface fixe ?',
                        'choices' => [
                            ['choice_text' => 'La fréquence', 'is_correct' => true],
                            ['choice_text' => 'La célérité', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde', 'is_correct' => false],
                            ['choice_text' => 'L’amplitude dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence est imposée par la source et reste la même de part et d’autre de l’interface.',
                    ],
                    [
                        'question' => 'Si la célérité d’une onde diminue dans un nouveau milieu alors que sa fréquence reste constante, sa longueur d’onde...',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Reste nécessairement inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme λ = v/f et que f reste constante, une diminution de v entraîne une diminution de λ.',
                    ],
                    [
                        'question' => 'Pourquoi l’amplitude d’une onde peut-elle diminuer au cours de sa propagation dans un milieu réel ?',
                        'choices' => [
                            ['choice_text' => 'Une partie de l’énergie peut être dissipée ou répartie sur une surface plus grande', 'is_correct' => true],
                            ['choice_text' => 'La fréquence disparaît progressivement', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'L’onde cesse nécessairement d’être une onde', 'is_correct' => false],
                        ],
                        'explanation' => 'L’atténuation peut résulter de pertes dans le milieu ou de la dispersion géométrique de l’énergie.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Ondes périodiques
            // ============================================================

            [
                'title' => 'Ondes périodiques',
                'description' => 'Relation entre période, fréquence, longueur d’onde, phase et représentation des ondes.',
                'questions' => [
                    [
                        'question' => 'Une onde a une période de 0,25 s. Quelle est sa fréquence ?',
                        'choices' => [
                            ['choice_text' => '4 Hz', 'is_correct' => true],
                            ['choice_text' => '0,25 Hz', 'is_correct' => false],
                            ['choice_text' => '2 Hz', 'is_correct' => false],
                            ['choice_text' => '25 Hz', 'is_correct' => false],
                        ],
                        'explanation' => 'f = 1/T = 1/0,25 = 4 Hz.',
                    ],
                    [
                        'question' => 'Une onde de fréquence 10 Hz se propage à 30 m/s. Quelle est sa longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => '3 m', 'is_correct' => true],
                            ['choice_text' => '300 m', 'is_correct' => false],
                            ['choice_text' => '0,33 m', 'is_correct' => false],
                            ['choice_text' => '40 m', 'is_correct' => false],
                        ],
                        'explanation' => 'λ = v/f = 30/10 = 3 m.',
                    ],
                    [
                        'question' => 'Deux points séparés d’une longueur d’onde sur une onde progressive sinusoïdale sont...',
                        'choices' => [
                            ['choice_text' => 'En phase', 'is_correct' => true],
                            ['choice_text' => 'Toujours en opposition de phase', 'is_correct' => false],
                            ['choice_text' => 'Toujours immobiles', 'is_correct' => false],
                            ['choice_text' => 'Sans relation de phase', 'is_correct' => false],
                        ],
                        'explanation' => 'Une séparation d’une longueur d’onde correspond à une différence de phase de 2π, donc les points sont en phase.',
                    ],
                    [
                        'question' => 'Deux points séparés d’une demi-longueur d’onde sur une onde sinusoïdale sont généralement...',
                        'choices' => [
                            ['choice_text' => 'En opposition de phase', 'is_correct' => true],
                            ['choice_text' => 'En phase', 'is_correct' => false],
                            ['choice_text' => 'Toujours au repos', 'is_correct' => false],
                            ['choice_text' => 'Séparés de quatre périodes temporelles', 'is_correct' => false],
                        ],
                        'explanation' => 'Une séparation λ/2 correspond à une différence de phase de π.',
                    ],
                    [
                        'question' => 'Quelle grandeur caractérise l’écart maximal par rapport à la position d’équilibre pour une onde sinusoïdale ?',
                        'choices' => [
                            ['choice_text' => 'L’amplitude', 'is_correct' => true],
                            ['choice_text' => 'La période', 'is_correct' => false],
                            ['choice_text' => 'La fréquence', 'is_correct' => false],
                            ['choice_text' => 'La célérité', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amplitude est la valeur maximale de la perturbation par rapport à l’équilibre.',
                    ],
                    [
                        'question' => 'Quelle expression peut représenter une onde progressive sinusoïdale se propageant selon +x ?',
                        'choices' => [
                            ['choice_text' => 'y(x,t) = A cos(kx - ωt)', 'is_correct' => true],
                            ['choice_text' => 'y(x,t) = A cos(kx + ωt) pour une propagation vers +x', 'is_correct' => false],
                            ['choice_text' => 'y(x,t) = A + k + ω', 'is_correct' => false],
                            ['choice_text' => 'y(x,t) = x/t uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme kx - ωt correspond à une propagation vers les x croissants.',
                    ],
                    [
                        'question' => 'Quelle relation relie le nombre d’onde k et la longueur d’onde λ ?',
                        'choices' => [
                            ['choice_text' => 'k = 2π/λ', 'is_correct' => true],
                            ['choice_text' => 'k = λ/2π', 'is_correct' => false],
                            ['choice_text' => 'k = 2πλ', 'is_correct' => false],
                            ['choice_text' => 'k = 1/(2πλ)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre d’onde est k = 2π/λ.',
                    ],
                    [
                        'question' => 'Quelle relation relie la pulsation ω à la fréquence f ?',
                        'choices' => [
                            ['choice_text' => 'ω = 2πf', 'is_correct' => true],
                            ['choice_text' => 'ω = f/(2π)', 'is_correct' => false],
                            ['choice_text' => 'ω = 2f', 'is_correct' => false],
                            ['choice_text' => 'ω = π/f', 'is_correct' => false],
                        ],
                        'explanation' => 'La pulsation est exprimée en rad/s et vaut ω = 2πf.',
                    ],
                    [
                        'question' => 'Une onde a une longueur d’onde de 0,5 m et une fréquence de 20 Hz. Quelle est sa célérité ?',
                        'choices' => [
                            ['choice_text' => '10 m/s', 'is_correct' => true],
                            ['choice_text' => '40 m/s', 'is_correct' => false],
                            ['choice_text' => '0,025 m/s', 'is_correct' => false],
                            ['choice_text' => '20,5 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'v = λf = 0,5 × 20 = 10 m/s.',
                    ],
                    [
                        'question' => 'Pourquoi la longueur d’onde peut-elle changer lorsqu’une onde change de milieu ?',
                        'choices' => [
                            ['choice_text' => 'La célérité peut changer tandis que la fréquence imposée par la source reste constante', 'is_correct' => true],
                            ['choice_text' => 'La fréquence devient automatiquement différente', 'is_correct' => false],
                            ['choice_text' => 'La période disparaît', 'is_correct' => false],
                            ['choice_text' => 'L’amplitude impose toujours directement λ', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme λ = v/f, une variation de célérité à fréquence constante entraîne une variation de longueur d’onde.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Son et acoustique
            // ============================================================

            [
                'title' => 'Son et acoustique fondamentale',
                'description' => 'Introduction à la fréquence, à la hauteur, à l’intensité et à la propagation du son.',
                'questions' => [
                    [
                        'question' => 'La hauteur perçue d’un son est principalement liée à sa...',
                        'choices' => [
                            ['choice_text' => 'Fréquence', 'is_correct' => true],
                            ['choice_text' => 'Amplitude uniquement', 'is_correct' => false],
                            ['choice_text' => 'Vitesse de propagation uniquement', 'is_correct' => false],
                            ['choice_text' => 'Masse de la source', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fréquence plus élevée correspond à un son perçu comme plus aigu.',
                    ],
                    [
                        'question' => 'L’intensité sonore est principalement liée à...',
                        'choices' => [
                            ['choice_text' => 'La puissance transportée par unité de surface', 'is_correct' => true],
                            ['choice_text' => 'La fréquence seule', 'is_correct' => false],
                            ['choice_text' => 'La masse de l’air uniquement', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intensité correspond à la puissance moyenne transportée par l’onde par unité de surface.',
                    ],
                    [
                        'question' => 'Dans l’air, une augmentation de la fréquence d’un son à température donnée entraîne généralement...',
                        'choices' => [
                            ['choice_text' => 'Une diminution de sa longueur d’onde', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation de sa célérité', 'is_correct' => false],
                            ['choice_text' => 'Une disparition de l’onde', 'is_correct' => false],
                            ['choice_text' => 'Une diminution obligatoire de l’amplitude', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un même milieu, v est approximativement constante, donc λ = v/f diminue lorsque f augmente.',
                    ],
                    [
                        'question' => 'Quel ordre de grandeur correspond à la vitesse du son dans l’air à température ambiante ?',
                        'choices' => [
                            ['choice_text' => 'Environ 340 m/s', 'is_correct' => true],
                            ['choice_text' => 'Environ 3 m/s', 'is_correct' => false],
                            ['choice_text' => 'Environ 300 000 km/s', 'is_correct' => false],
                            ['choice_text' => 'Environ 3400 km/s', 'is_correct' => false],
                        ],
                        'explanation' => 'La célérité du son dans l’air est d’environ 340 m/s dans des conditions ordinaires.',
                    ],
                    [
                        'question' => 'Pourquoi le son se propage-t-il généralement plus vite dans les solides que dans les gaz ?',
                        'choices' => [
                            ['choice_text' => 'Les interactions mécaniques dans les solides permettent généralement une propagation plus rapide des perturbations', 'is_correct' => true],
                            ['choice_text' => 'Les solides ne possèdent aucune masse', 'is_correct' => false],
                            ['choice_text' => 'La fréquence des sons y devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Les gaz n’ont aucune élasticité', 'is_correct' => false],
                        ],
                        'explanation' => 'La célérité dépend des propriétés élastiques et inertielle du milieu.',
                    ],
                    [
                        'question' => 'Quel phénomène permet d’entendre une répétition d’un son après sa réflexion sur une surface éloignée ?',
                        'choices' => [
                            ['choice_text' => 'L’écho', 'is_correct' => true],
                            ['choice_text' => 'La réfraction', 'is_correct' => false],
                            ['choice_text' => 'La polarisation', 'is_correct' => false],
                            ['choice_text' => 'La dispersion', 'is_correct' => false],
                        ],
                        'explanation' => 'Un écho est une réflexion sonore suffisamment séparée dans le temps du son initial pour être perçue distinctement.',
                    ],
                    [
                        'question' => 'Pourquoi le son peut-il être absorbé par certains matériaux ?',
                        'choices' => [
                            ['choice_text' => 'Une partie de l’énergie acoustique est dissipée dans le matériau', 'is_correct' => true],
                            ['choice_text' => 'Le matériau détruit la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Le son devient toujours électromagnétique', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde devient automatiquement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les matériaux absorbants convertissent une partie de l’énergie acoustique en énergie interne, notamment par pertes visqueuses et autres mécanismes.',
                    ],
                    [
                        'question' => 'Quel domaine de fréquences est approximativement audible pour un humain jeune en bonne santé ?',
                        'choices' => [
                            ['choice_text' => '20 Hz à 20 kHz', 'is_correct' => true],
                            ['choice_text' => '2 Hz à 200 Hz', 'is_correct' => false],
                            ['choice_text' => '200 Hz à 2 MHz', 'is_correct' => false],
                            ['choice_text' => '20 kHz à 200 kHz uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La plage audible humaine est généralement approximée de 20 Hz à 20 kHz, avec de fortes variations individuelles.',
                    ],
                    [
                        'question' => 'Une fréquence supérieure à 20 kHz est généralement classée comme...',
                        'choices' => [
                            ['choice_text' => 'Ultrasonore', 'is_correct' => true],
                            ['choice_text' => 'Infrasonore', 'is_correct' => false],
                            ['choice_text' => 'Audible uniquement', 'is_correct' => false],
                            ['choice_text' => 'Stationnaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ultrasons correspondent à des fréquences supérieures à la limite supérieure approximative de l’audition humaine.',
                    ],
                    [
                        'question' => 'Une fréquence inférieure à 20 Hz est généralement classée comme...',
                        'choices' => [
                            ['choice_text' => 'Infrasonore', 'is_correct' => true],
                            ['choice_text' => 'Ultrasonore', 'is_correct' => false],
                            ['choice_text' => 'Optique', 'is_correct' => false],
                            ['choice_text' => 'Électromagnétique visible', 'is_correct' => false],
                        ],
                        'explanation' => 'Les infrasons se situent sous la limite approximative de 20 Hz pour l’audition humaine.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Optique géométrique
            // ============================================================

            [
                'title' => 'Optique géométrique',
                'description' => 'Introduction à la réflexion, à la réfraction et aux lentilles.',
                'questions' => [
                    [
                        'question' => 'Quelle loi décrit la réflexion de la lumière sur une surface plane ?',
                        'choices' => [
                            ['choice_text' => 'L’angle de réflexion est égal à l’angle d’incidence', 'is_correct' => true],
                            ['choice_text' => 'L’angle de réflexion est toujours nul', 'is_correct' => false],
                            ['choice_text' => 'L’angle de réflexion est deux fois l’angle d’incidence', 'is_correct' => false],
                            ['choice_text' => 'L’angle de réflexion ne dépend pas de l’incidence', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de la réflexion stipule que l’angle de réflexion est égal à l’angle d’incidence, mesurés par rapport à la normale.',
                    ],
                    [
                        'question' => 'Lorsqu’un rayon passe de l’air au verre, il est généralement...',
                        'choices' => [
                            ['choice_text' => 'Réfracté vers la normale', 'is_correct' => true],
                            ['choice_text' => 'Réfracté loin de la normale', 'is_correct' => false],
                            ['choice_text' => 'Toujours réfléchi totalement', 'is_correct' => false],
                            ['choice_text' => 'Non dévié dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verre possède généralement un indice plus élevé que l’air, donc le rayon se rapproche de la normale lors de l’entrée.',
                    ],
                    [
                        'question' => 'Quelle loi relie les angles d’incidence et de réfraction ainsi que les indices des deux milieux ?',
                        'choices' => [
                            ['choice_text' => 'La loi de Snell-Descartes', 'is_correct' => true],
                            ['choice_text' => 'La loi de Hooke', 'is_correct' => false],
                            ['choice_text' => 'La loi de Newton', 'is_correct' => false],
                            ['choice_text' => 'La loi de Faraday', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Snell-Descartes s’écrit n1 sin i = n2 sin r.',
                    ],
                    [
                        'question' => 'Quel est approximativement l’indice de réfraction du vide ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '300', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition, l’indice du vide est égal à 1.',
                    ],
                    [
                        'question' => 'Quelle relation relie l’indice de réfraction n et la vitesse de la lumière v dans un milieu ?',
                        'choices' => [
                            ['choice_text' => 'n = c/v', 'is_correct' => true],
                            ['choice_text' => 'n = v/c', 'is_correct' => false],
                            ['choice_text' => 'n = c + v', 'is_correct' => false],
                            ['choice_text' => 'n = cv', 'is_correct' => false],
                        ],
                        'explanation' => 'L’indice est le rapport entre la célérité de la lumière dans le vide c et celle dans le milieu v.',
                    ],
                    [
                        'question' => 'Une lentille convergente possède généralement...',
                        'choices' => [
                            ['choice_text' => 'Une puissance optique positive', 'is_correct' => true],
                            ['choice_text' => 'Une puissance toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Une puissance nulle', 'is_correct' => false],
                            ['choice_text' => 'Une distance focale nécessairement négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la convention usuelle, une lentille convergente possède une distance focale positive et une vergence positive.',
                    ],
                    [
                        'question' => 'Une lentille divergente possède généralement une distance focale image...',
                        'choices' => [
                            ['choice_text' => 'Négative', 'is_correct' => true],
                            ['choice_text' => 'Positive', 'is_correct' => false],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                            ['choice_text' => 'Toujours infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la convention de signes usuelle, le foyer image d’une lentille divergente est virtuel et la focale est négative.',
                    ],
                    [
                        'question' => 'Quelle relation est couramment utilisée pour une lentille mince ?',
                        'choices' => [
                            ['choice_text' => '1/f = 1/do + 1/di', 'is_correct' => true],
                            ['choice_text' => 'f = do + di', 'is_correct' => false],
                            ['choice_text' => '1/f = do × di', 'is_correct' => false],
                            ['choice_text' => 'f² = do + di', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule de conjugaison des lentilles minces relie la focale, la distance objet et la distance image selon la convention choisie.',
                    ],
                    [
                        'question' => 'Quel phénomène permet à un objet immergé dans l’eau de sembler déplacé lorsqu’on l’observe depuis l’air ?',
                        'choices' => [
                            ['choice_text' => 'La réfraction', 'is_correct' => true],
                            ['choice_text' => 'La diffraction uniquement', 'is_correct' => false],
                            ['choice_text' => 'La polarisation uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’émission thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'La réfraction modifie la direction apparente des rayons lumineux lorsqu’ils traversent l’interface eau-air.',
                    ],
                    [
                        'question' => 'Pourquoi une image formée par une lentille convergente peut-elle être réelle ou virtuelle selon la position de l’objet ?',
                        'choices' => [
                            ['choice_text' => 'La géométrie des rayons change selon la distance objet par rapport au foyer', 'is_correct' => true],
                            ['choice_text' => 'Une lentille convergente ne forme jamais d’image virtuelle', 'is_correct' => false],
                            ['choice_text' => 'La fréquence lumineuse détermine seule la nature de l’image', 'is_correct' => false],
                            ['choice_text' => 'La masse de l’objet détermine directement le type d’image', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un objet placé entre la lentille convergente et son foyer, l’image est virtuelle et agrandie ; au-delà du foyer, une image réelle peut se former.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Miroirs et formation des images
            // ============================================================

            [
                'title' => 'Miroirs et formation des images',
                'description' => 'Étude élémentaire des miroirs plans et sphériques et des caractéristiques des images.',
                'questions' => [
                    [
                        'question' => 'Quelle propriété caractérise l’image donnée par un miroir plan ?',
                        'choices' => [
                            ['choice_text' => 'Elle est virtuelle et de même taille que l’objet', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours réelle et inversée verticalement', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours plus grande que l’objet', 'is_correct' => false],
                            ['choice_text' => 'Elle se forme nécessairement derrière le miroir à une distance différente', 'is_correct' => false],
                        ],
                        'explanation' => 'Un miroir plan forme une image virtuelle, droite et de même grandeur, symétrique de l’objet par rapport au plan du miroir.',
                    ],
                    [
                        'question' => 'La distance entre l’objet et un miroir plan est de 2 m. À quelle distance derrière le miroir se trouve l’image ?',
                        'choices' => [
                            ['choice_text' => '2 m', 'is_correct' => true],
                            ['choice_text' => '1 m', 'is_correct' => false],
                            ['choice_text' => '4 m', 'is_correct' => false],
                            ['choice_text' => '0 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un miroir plan, l’image est située à la même distance derrière le miroir que l’objet devant le miroir.',
                    ],
                    [
                        'question' => 'Quelle caractéristique distingue une image virtuelle d’une image réelle ?',
                        'choices' => [
                            ['choice_text' => 'Une image virtuelle ne peut pas être formée sur un écran placé au point image', 'is_correct' => true],
                            ['choice_text' => 'Une image virtuelle est toujours plus grande', 'is_correct' => false],
                            ['choice_text' => 'Une image réelle est toujours droite', 'is_correct' => false],
                            ['choice_text' => 'Une image réelle existe uniquement avec des miroirs plans', 'is_correct' => false],
                        ],
                        'explanation' => 'Une image réelle résulte de la convergence effective des rayons et peut être recueillie sur un écran.',
                    ],
                    [
                        'question' => 'Dans un miroir concave, des rayons parallèles à l’axe principal se réfléchissent idéalement en direction...',
                        'choices' => [
                            ['choice_text' => 'Du foyer principal', 'is_correct' => true],
                            ['choice_text' => 'Du centre de la Terre', 'is_correct' => false],
                            ['choice_text' => 'D’un point à l’infini uniquement', 'is_correct' => false],
                            ['choice_text' => 'D’un point situé devant le sommet avec rayon nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Un miroir concave convergent focalise les rayons parallèles en son foyer dans l’approximation paraxiale.',
                    ],
                    [
                        'question' => 'Un miroir convexe est généralement...',
                        'choices' => [
                            ['choice_text' => 'Divergent', 'is_correct' => true],
                            ['choice_text' => 'Convergent', 'is_correct' => false],
                            ['choice_text' => 'Sans puissance optique', 'is_correct' => false],
                            ['choice_text' => 'Toujours plan', 'is_correct' => false],
                        ],
                        'explanation' => 'Les rayons réfléchis par un miroir convexe divergent comme s’ils provenaient d’un foyer virtuel.',
                    ],
                    [
                        'question' => 'Quelle relation relie la distance focale f et le rayon de courbure R d’un miroir sphérique paraxial ?',
                        'choices' => [
                            ['choice_text' => 'f = R/2', 'is_correct' => true],
                            ['choice_text' => 'f = 2R', 'is_correct' => false],
                            ['choice_text' => 'f = R²', 'is_correct' => false],
                            ['choice_text' => 'f = 1/R', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un miroir sphérique dans l’approximation paraxiale, la focale vaut la moitié du rayon de courbure.',
                    ],
                    [
                        'question' => 'Pourquoi l’approximation paraxiale est-elle utilisée en optique géométrique pour les lentilles et miroirs ?',
                        'choices' => [
                            ['choice_text' => 'Elle simplifie les relations géométriques pour les rayons proches de l’axe', 'is_correct' => true],
                            ['choice_text' => 'Elle rend la lumière non physique', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime la réfraction', 'is_correct' => false],
                            ['choice_text' => 'Elle impose toujours une réflexion totale', 'is_correct' => false],
                        ],
                        'explanation' => 'L’approximation paraxiale permet notamment d’obtenir les relations simples des lentilles minces et miroirs sphériques.',
                    ],
                    [
                        'question' => 'Dans un miroir concave, un objet placé très loin par rapport à la focale produit une image proche...',
                        'choices' => [
                            ['choice_text' => 'Du foyer', 'is_correct' => true],
                            ['choice_text' => 'Du sommet uniquement', 'is_correct' => false],
                            ['choice_text' => 'De l’infini derrière le miroir', 'is_correct' => false],
                            ['choice_text' => 'Du centre de la lentille', 'is_correct' => false],
                        ],
                        'explanation' => 'Des rayons provenant d’un objet très éloigné sont approximativement parallèles et convergent près du foyer.',
                    ],
                    [
                        'question' => 'Pourquoi une image formée par un miroir convexe est-elle généralement virtuelle ?',
                        'choices' => [
                            ['choice_text' => 'Les rayons réfléchis divergent et leurs prolongements semblent provenir d’un point situé derrière le miroir', 'is_correct' => true],
                            ['choice_text' => 'Les rayons convergent réellement derrière le miroir', 'is_correct' => false],
                            ['choice_text' => 'Le miroir absorbe tous les rayons', 'is_correct' => false],
                            ['choice_text' => 'La lumière ne peut pas être réfléchie par un miroir convexe', 'is_correct' => false],
                        ],
                        'explanation' => 'Les prolongements des rayons réfléchis se rencontrent virtuellement derrière le miroir.',
                    ],
                    [
                        'question' => 'Un avantage courant des miroirs convexes dans les véhicules est...',
                        'choices' => [
                            ['choice_text' => 'Un champ de vision plus large', 'is_correct' => true],
                            ['choice_text' => 'Une image toujours agrandie', 'is_correct' => false],
                            ['choice_text' => 'Une mise au point infinie', 'is_correct' => false],
                            ['choice_text' => 'Une absence de distorsion dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Les miroirs convexes permettent d’observer une zone plus large, au prix d’une image généralement réduite.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Interférence et diffraction
            // ============================================================

            [
                'title' => 'Interférences et diffraction',
                'description' => 'Introduction aux phénomènes ondulatoires d’interférence et de diffraction de la lumière.',
                'questions' => [
                    [
                        'question' => 'Que se produit-il lorsque deux ondes se superposent ?',
                        'choices' => [
                            ['choice_text' => 'Leurs perturbations s’additionnent selon le principe de superposition', 'is_correct' => true],
                            ['choice_text' => 'Elles cessent nécessairement d’exister', 'is_correct' => false],
                            ['choice_text' => 'Une seule onde reste toujours', 'is_correct' => false],
                            ['choice_text' => 'Leur fréquence devient automatiquement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un système linéaire, les perturbations s’additionnent lors de la superposition.',
                    ],
                    [
                        'question' => 'Quand deux ondes sont en phase et se renforcent, parle-t-on d’interférence...',
                        'choices' => [
                            ['choice_text' => 'Constructive', 'is_correct' => true],
                            ['choice_text' => 'Destructive', 'is_correct' => false],
                            ['choice_text' => 'Totale', 'is_correct' => false],
                            ['choice_text' => 'Réfractive', 'is_correct' => false],
                        ],
                        'explanation' => 'Des ondes en phase peuvent produire une amplitude résultante plus grande : c’est une interférence constructive.',
                    ],
                    [
                        'question' => 'Lorsque deux ondes de même amplitude sont en opposition de phase, leur superposition idéale peut donner...',
                        'choices' => [
                            ['choice_text' => 'Une annulation', 'is_correct' => true],
                            ['choice_text' => 'Une amplitude doublée', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence double', 'is_correct' => false],
                            ['choice_text' => 'Une longueur d’onde infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux perturbations opposées de même amplitude peuvent s’annuler localement.',
                    ],
                    [
                        'question' => 'Une différence de marche égale à une longueur d’onde correspond à une différence de phase de...',
                        'choices' => [
                            ['choice_text' => '2π', 'is_correct' => true],
                            ['choice_text' => 'π', 'is_correct' => false],
                            ['choice_text' => 'π/2', 'is_correct' => false],
                            ['choice_text' => '4π', 'is_correct' => false],
                        ],
                        'explanation' => 'Une longueur d’onde correspond à un cycle complet, donc à une différence de phase de 2π.',
                    ],
                    [
                        'question' => 'Une différence de marche égale à λ/2 correspond à une différence de phase de...',
                        'choices' => [
                            ['choice_text' => 'π', 'is_correct' => true],
                            ['choice_text' => '2π', 'is_correct' => false],
                            ['choice_text' => 'π/4', 'is_correct' => false],
                            ['choice_text' => '4π', 'is_correct' => false],
                        ],
                        'explanation' => 'Une demi-longueur d’onde correspond à une demi-période spatiale, donc à π radians.',
                    ],
                    [
                        'question' => 'Quel phénomène décrit l’étalement d’une onde lorsqu’elle rencontre une ouverture ou un obstacle de dimension comparable à sa longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => 'La diffraction', 'is_correct' => true],
                            ['choice_text' => 'La réflexion uniquement', 'is_correct' => false],
                            ['choice_text' => 'La polarisation uniquement', 'is_correct' => false],
                            ['choice_text' => 'La conduction', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffraction devient importante lorsque la taille de l’ouverture ou de l’obstacle est du même ordre que λ.',
                    ],
                    [
                        'question' => 'Pourquoi la diffraction est-elle moins marquée lorsque la taille d’une ouverture est très grande devant la longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => 'L’étalement angulaire devient relativement faible', 'is_correct' => true],
                            ['choice_text' => 'La fréquence devient nulle', 'is_correct' => false],
                            ['choice_text' => 'La lumière cesse de se propager', 'is_correct' => false],
                            ['choice_text' => 'La vitesse devient infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une ouverture beaucoup plus grande que λ produit une diffraction plus faible et un faisceau moins étalé.',
                    ],
                    [
                        'question' => 'Dans l’expérience des fentes de Young, les franges observées résultent principalement...',
                        'choices' => [
                            ['choice_text' => 'D’interférences entre les deux ondes issues des fentes', 'is_correct' => true],
                            ['choice_text' => 'De l’absorption totale de la lumière', 'is_correct' => false],
                            ['choice_text' => 'D’une variation de vitesse de la lumière dans le vide', 'is_correct' => false],
                            ['choice_text' => 'D’une réflexion sur une seule fente', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux fentes agissent comme sources cohérentes et leurs ondes se superposent sur l’écran.',
                    ],
                    [
                        'question' => 'Pourquoi des sources lumineuses doivent-elles être cohérentes pour produire des franges d’interférence stables ?',
                        'choices' => [
                            ['choice_text' => 'Leur différence de phase doit rester suffisamment stable dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Elles doivent avoir nécessairement des amplitudes différentes', 'is_correct' => false],
                            ['choice_text' => 'Elles doivent toujours produire deux fréquences différentes', 'is_correct' => false],
                            ['choice_text' => 'Elles doivent être placées à des distances infinies', 'is_correct' => false],
                        ],
                        'explanation' => 'Une différence de phase stable est nécessaire pour observer un motif d’interférence stationnaire.',
                    ],
                    [
                        'question' => 'Dans un motif d’interférence, une frange brillante correspond généralement à...',
                        'choices' => [
                            ['choice_text' => 'Une interférence constructive', 'is_correct' => true],
                            ['choice_text' => 'Une interférence destructive', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale d’onde', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les maxima d’intensité correspondent aux conditions d’interférence constructive.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Optique physique et applications
            // ============================================================

            [
                'title' => 'Optique physique et applications',
                'description' => 'Synthèse des principaux phénomènes ondulatoires de la lumière et de leurs applications simples.',
                'questions' => [
                    [
                        'question' => 'La lumière visible est une forme de...',
                        'choices' => [
                            ['choice_text' => 'Onde électromagnétique', 'is_correct' => true],
                            ['choice_text' => 'Onde mécanique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Onde sonore', 'is_correct' => false],
                            ['choice_text' => 'Onde nécessitant un milieu matériel', 'is_correct' => false],
                        ],
                        'explanation' => 'La lumière visible appartient au spectre électromagnétique et peut se propager dans le vide.',
                    ],
                    [
                        'question' => 'Quelle est approximativement la célérité de la lumière dans le vide ?',
                        'choices' => [
                            ['choice_text' => '3,0 × 10^8 m/s', 'is_correct' => true],
                            ['choice_text' => '3,0 × 10^4 m/s', 'is_correct' => false],
                            ['choice_text' => '3,0 × 10^6 m/s', 'is_correct' => false],
                            ['choice_text' => '3,0 × 10^2 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse de la lumière dans le vide est approximativement 3,00 × 10^8 m/s.',
                    ],
                    [
                        'question' => 'Quelle relation relie la célérité c, la fréquence f et la longueur d’onde λ dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'c = λf', 'is_correct' => true],
                            ['choice_text' => 'c = λ/f', 'is_correct' => false],
                            ['choice_text' => 'c = f/λ', 'is_correct' => false],
                            ['choice_text' => 'c = λ + f', 'is_correct' => false],
                        ],
                        'explanation' => 'Toute onde périodique vérifie v = λf ; dans le vide, v = c.',
                    ],
                    [
                        'question' => 'Quelle couleur visible possède généralement la plus grande fréquence parmi les couleurs du spectre visible ?',
                        'choices' => [
                            ['choice_text' => 'Le violet', 'is_correct' => true],
                            ['choice_text' => 'Le rouge', 'is_correct' => false],
                            ['choice_text' => 'Le jaune', 'is_correct' => false],
                            ['choice_text' => 'Le vert', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le spectre visible, la fréquence augmente globalement du rouge vers le violet.',
                    ],
                    [
                        'question' => 'Quelle couleur visible possède généralement la plus grande longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => 'Le rouge', 'is_correct' => true],
                            ['choice_text' => 'Le violet', 'is_correct' => false],
                            ['choice_text' => 'Le bleu', 'is_correct' => false],
                            ['choice_text' => 'Le vert', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rouge correspond à la plus grande longueur d’onde du domaine visible.',
                    ],
                    [
                        'question' => 'Pourquoi un prisme peut-il séparer la lumière blanche en plusieurs couleurs ?',
                        'choices' => [
                            ['choice_text' => 'L’indice de réfraction dépend de la longueur d’onde', 'is_correct' => true],
                            ['choice_text' => 'Toutes les couleurs ont toujours des vitesses différentes dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Le prisme crée de nouvelles fréquences à partir de rien', 'is_correct' => false],
                            ['choice_text' => 'La lumière blanche n’est pas composée de plusieurs longueurs d’onde', 'is_correct' => false],
                        ],
                        'explanation' => 'La dispersion chromatique vient de la dépendance de l’indice de réfraction avec la longueur d’onde.',
                    ],
                    [
                        'question' => 'Quel phénomène explique les couleurs observées sur certaines bulles de savon ?',
                        'choices' => [
                            ['choice_text' => 'Les interférences lumineuses dans les couches minces', 'is_correct' => true],
                            ['choice_text' => 'La gravité uniquement', 'is_correct' => false],
                            ['choice_text' => 'La réflexion totale uniquement', 'is_correct' => false],
                            ['choice_text' => 'La diffraction acoustique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les réflexions aux différentes interfaces de la couche mince interfèrent et certaines longueurs d’onde sont renforcées ou atténuées.',
                    ],
                    [
                        'question' => 'Pourquoi les lunettes utilisent-elles des lentilles pour modifier la convergence des rayons lumineux ?',
                        'choices' => [
                            ['choice_text' => 'Les lentilles modifient la trajectoire des rayons par réfraction', 'is_correct' => true],
                            ['choice_text' => 'Les lentilles absorbent toute la lumière', 'is_correct' => false],
                            ['choice_text' => 'Les lentilles changent la fréquence de la lumière visible dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Les lentilles produisent des sons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les surfaces réfractantes des lentilles permettent de modifier la convergence ou divergence des rayons.',
                    ],
                    [
                        'question' => 'Pourquoi la polarisation est-elle une propriété caractéristique des ondes transversales électromagnétiques ?',
                        'choices' => [
                            ['choice_text' => 'Le champ électrique peut être orienté dans une direction transverse déterminée', 'is_correct' => true],
                            ['choice_text' => 'Une onde longitudinale possède toujours une polarisation linéaire', 'is_correct' => false],
                            ['choice_text' => 'La polarisation signifie uniquement une variation de fréquence', 'is_correct' => false],
                            ['choice_text' => 'La lumière ne possède aucun champ électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'La polarisation décrit l’orientation des oscillations transversales du champ électrique.',
                    ],
                    [
                        'question' => 'Pourquoi les fibres optiques peuvent-elles guider la lumière sur de longues distances ?',
                        'choices' => [
                            ['choice_text' => 'La lumière peut y être guidée par réflexion totale interne', 'is_correct' => true],
                            ['choice_text' => 'La lumière y devient une onde sonore', 'is_correct' => false],
                            ['choice_text' => 'La fibre absorbe entièrement la lumière puis la recrée', 'is_correct' => false],
                            ['choice_text' => 'La fréquence lumineuse devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une différence d’indice appropriée entre cœur et gaine permet la réflexion totale interne et le guidage de la lumière.',
                    ],
                ],
            ],
        ];

        // ============================================================
        // QUIZ SETTINGS
        // duration = minutes
        // passing_score = percentage
        // ============================================================

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50], // Fondamentaux des ondes
            1 => ['duration' => 20, 'passing_score' => 60], // Ondes mécaniques
            2 => ['duration' => 20, 'passing_score' => 60], // Ondes périodiques
            3 => ['duration' => 20, 'passing_score' => 60], // Son et acoustique
            4 => ['duration' => 25, 'passing_score' => 65], // Optique géométrique
            5 => ['duration' => 25, 'passing_score' => 65], // Miroirs
            6 => ['duration' => 25, 'passing_score' => 65], // Interférences et diffraction
            7 => ['duration' => 25, 'passing_score' => 65], // Optique physique
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex] ?? [
                'duration' => 20,
                'passing_score' => 60,
            ];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
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

                // Randomize answer positions while keeping
                // is_correct attached to the correct choice.
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