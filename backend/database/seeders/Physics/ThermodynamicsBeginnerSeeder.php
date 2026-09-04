<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ThermodynamicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'thermodynamics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Température et équilibre thermique
            // ============================================================

            [
                'title' => 'Température et équilibre thermique',
                'description' => 'Introduction aux concepts fondamentaux de température, chaleur et équilibre thermique.',
                'questions' => [

                    [
                        'question' => 'Quelle grandeur physique indique l’état thermique d’un corps ?',
                        'choices' => [
                            ['choice_text' => 'La température', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La force', 'is_correct' => false],
                            ['choice_text' => 'La vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'La température caractérise l’état thermique d’un système.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la température thermodynamique ?',
                        'choices' => [
                            ['choice_text' => 'Le kelvin', 'is_correct' => true],
                            ['choice_text' => 'Le degré Celsius', 'is_correct' => false],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                        ],
                        'explanation' => 'Le kelvin (K) est l’unité SI de la température thermodynamique.',
                    ],

                    [
                        'question' => 'Que se passe-t-il lorsqu’un objet chaud est mis en contact avec un objet froid ?',
                        'choices' => [
                            ['choice_text' => 'De la chaleur est transférée du corps chaud vers le corps froid', 'is_correct' => true],
                            ['choice_text' => 'La chaleur passe spontanément du froid vers le chaud', 'is_correct' => false],
                            ['choice_text' => 'Aucun transfert d’énergie ne peut avoir lieu', 'is_correct' => false],
                            ['choice_text' => 'Les deux corps perdent nécessairement toute leur énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Un transfert thermique spontané se fait du corps à température plus élevée vers celui à température plus basse.',
                    ],

                    [
                        'question' => 'À l’équilibre thermique entre deux corps en contact, leurs températures sont...',
                        'choices' => [
                            ['choice_text' => 'Égales', 'is_correct' => true],
                            ['choice_text' => 'Toujours opposées', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulles', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement doubles l’une de l’autre', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équilibre thermique correspond à l’absence de transfert thermique net, ce qui implique la même température.',
                    ],

                    [
                        'question' => 'Quelle échelle de température possède un zéro correspondant au zéro absolu ?',
                        'choices' => [
                            ['choice_text' => 'L’échelle Kelvin', 'is_correct' => true],
                            ['choice_text' => 'L’échelle Celsius', 'is_correct' => false],
                            ['choice_text' => 'L’échelle Fahrenheit', 'is_correct' => false],
                            ['choice_text' => 'Toutes les échelles possèdent ce même zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'L’échelle Kelvin est une échelle absolue dont l’origine est le zéro thermodynamique.',
                    ],

                    [
                        'question' => 'En approximation courante, 0 °C correspond à quelle température en kelvins ?',
                        'choices' => [
                            ['choice_text' => '273,15 K', 'is_correct' => true],
                            ['choice_text' => '0 K', 'is_correct' => false],
                            ['choice_text' => '100 K', 'is_correct' => false],
                            ['choice_text' => '373,15 K', 'is_correct' => false],
                        ],
                        'explanation' => 'La conversion est T(K) = T(°C) + 273,15.',
                    ],

                    [
                        'question' => 'Que signifie le zéro absolu en thermodynamique classique ?',
                        'choices' => [
                            ['choice_text' => 'La limite inférieure de la température thermodynamique', 'is_correct' => true],
                            ['choice_text' => 'La température à laquelle toute matière disparaît', 'is_correct' => false],
                            ['choice_text' => 'Une température égale à 0 °C', 'is_correct' => false],
                            ['choice_text' => 'La température d’ébullition de l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le zéro absolu correspond à 0 K et constitue la limite inférieure de l’échelle thermodynamique.',
                    ],

                    [
                        'question' => 'Quelle grandeur représente un transfert d’énergie dû à une différence de température ?',
                        'choices' => [
                            ['choice_text' => 'La chaleur', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La pression', 'is_correct' => false],
                            ['choice_text' => 'La charge électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'La chaleur est un transfert d’énergie provoqué par une différence de température.',
                    ],

                    [
                        'question' => 'Lorsqu’un système atteint l’équilibre thermique avec son environnement, son transfert thermique net devient...',
                        'choices' => [
                            ['choice_text' => 'Nul', 'is_correct' => true],
                            ['choice_text' => 'Infini', 'is_correct' => false],
                            ['choice_text' => 'Toujours maximal', 'is_correct' => false],
                            ['choice_text' => 'Égal à sa masse', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’équilibre thermique, il n’y a plus de transfert thermique net entre le système et son environnement.',
                    ],

                    [
                        'question' => 'Pourquoi une tasse métallique semble-t-elle souvent plus froide qu’une tasse en plastique à température ambiante identique ?',
                        'choices' => [
                            ['choice_text' => Le métal conduit généralement mieux la chaleur et extrait plus rapidement de l’énergie de la main', 'is_correct' => true],
                            ['choice_text' => 'Le métal possède toujours une température plus basse', 'is_correct' => false],
                            ['choice_text' => 'Le plastique produit de la chaleur', 'is_correct' => false],
                            ['choice_text' => 'La masse détermine directement la température ressentie', 'is_correct' => false],
                        ],
                        'explanation' => 'La sensation thermique dépend notamment du taux de transfert de chaleur entre la main et le matériau.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Chaleur et capacité thermique
            // ============================================================

            [
                'title' => 'Chaleur et capacité thermique',
                'description' => 'Compréhension du transfert thermique et des effets de la capacité thermique sur les variations de température.',
                'questions' => [

                    [
                        'question' => 'Quelle est l’unité SI de l’énergie thermique transférée sous forme de chaleur ?',
                        'choices' => [
                            ['choice_text' => 'Le joule', 'is_correct' => true],
                            ['choice_text' => 'Le kelvin', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le pascal', 'is_correct' => false],
                        ],
                        'explanation' => 'La chaleur étant un transfert d’énergie, elle s’exprime en joules dans le SI.',
                    ],

                    [
                        'question' => 'Quelle relation simple donne la chaleur reçue par un corps lorsque sa température varie sans changement d’état ?',
                        'choices' => [
                            ['choice_text' => 'Q = mcΔT', 'is_correct' => true],
                            ['choice_text' => 'Q = m/cΔT', 'is_correct' => false],
                            ['choice_text' => 'Q = c/(mΔT)', 'is_correct' => false],
                            ['choice_text' => 'Q = m + c + ΔT', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une substance de capacité thermique massique c et de masse m, Q = mcΔT.',
                    ],

                    [
                        'question' => 'Que représente la capacité thermique massique d’une substance ?',
                        'choices' => [
                            ['choice_text' => L’énergie nécessaire pour augmenter de 1 K la température d’une unité de masse', 'is_correct' => true],
                            ['choice_text' => 'La masse totale d’un matériau', 'is_correct' => false],
                            ['choice_text' => 'La chaleur totale contenue dans tout objet', 'is_correct' => false],
                            ['choice_text' => 'La température maximale d’une substance', 'is_correct' => false],
                        ],
                        'explanation' => 'La capacité thermique massique indique la quantité d’énergie nécessaire pour augmenter d’un kelvin la température d’une unité de masse.',
                    ],

                    [
                        'question' => 'Deux objets de même masse reçoivent la même quantité de chaleur. Celui qui possède la plus grande capacité thermique massique aura une variation de température...',
                        'choices' => [
                            ['choice_text' => 'Plus faible', 'is_correct' => true],
                            ['choice_text' => 'Plus grande', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de sa capacité thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme ΔT = Q/(mc), une capacité thermique massique plus grande donne une variation de température plus faible.',
                    ],

                    [
                        'question' => 'Une masse de 2 kg reçoit 1000 J et sa capacité thermique massique vaut 500 J/(kg·K). Quelle est sa variation de température ?',
                        'choices' => [
                            ['choice_text' => '1 K', 'is_correct' => true],
                            ['choice_text' => '0,5 K', 'is_correct' => false],
                            ['choice_text' => '2 K', 'is_correct' => false],
                            ['choice_text' => '1000 K', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔT = Q/(mc) = 1000/(2 × 500) = 1 K.',
                    ],

                    [
                        'question' => 'Pourquoi deux matériaux soumis à la même quantité de chaleur ne voient-ils pas nécessairement leur température varier de la même façon ?',
                        'choices' => [
                            ['choice_text' => Leurs capacités thermiques massiques peuvent être différentes', 'is_correct' => true],
                            ['choice_text' => Tous les matériaux ont la même capacité thermique', 'is_correct' => false],
                            ['choice_text' => La chaleur n’a aucun effet sur la température', 'is_correct' => false],
                            ['choice_text' => Leur masse ne peut jamais influencer la variation thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'La variation de température dépend de la masse et de la capacité thermique massique.',
                    ],

                    [
                        'question' => 'Lorsqu’un corps perd de la chaleur sans changement d’état, sa température diminue généralement si aucune autre énergie ne le compense.',
                        'choices' => [
                            ['choice_text' => 'Vrai', 'is_correct' => true],
                            ['choice_text' => 'Faux', 'is_correct' => false],
                            ['choice_text' => 'Uniquement pour les gaz', 'is_correct' => false],
                            ['choice_text' => 'Uniquement pour les métaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle simple Q = mcΔT, une diminution d’énergie thermique entraîne une diminution de température.',
                    ],

                    [
                        'question' => 'Quelle grandeur augmente lorsque l’on double la masse d’un matériau tout en conservant sa capacité thermique massique ?',
                        'choices' => [
                            ['choice_text' => Sa capacité thermique totale', 'is_correct' => true],
                            ['choice_text' => Sa température automatiquement', 'is_correct' => false],
                            ['choice_text' => Son coefficient de dilatation automatiquement', 'is_correct' => false],
                            ['choice_text' => Son énergie potentielle gravitationnelle nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'La capacité thermique totale C = mc double lorsque la masse double.',
                    ],

                    [
                        'question' => 'Un corps de capacité thermique élevée nécessite généralement plus d’énergie pour produire la même variation de température qu’un corps de faible capacité thermique.',
                        'choices' => [
                            ['choice_text' => 'Vrai', 'is_correct' => true],
                            ['choice_text' => 'Faux', 'is_correct' => false],
                            ['choice_text' => 'Uniquement à basse température', 'is_correct' => false],
                            ['choice_text' => 'Uniquement pour les liquides', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition, une grande capacité thermique signifie qu’il faut davantage d’énergie pour une même variation de température.',
                    ],

                    [
                        'question' => 'Pourquoi la capacité thermique d’un système dépend-elle de sa masse ?',
                        'choices' => [
                            ['choice_text' => Plus il contient de matière, plus il faut généralement d’énergie pour modifier sa température d’une quantité donnée', 'is_correct' => true],
                            ['choice_text' => La masse n’intervient jamais dans l’énergie thermique', 'is_correct' => false],
                            ['choice_text' => Une masse plus grande possède toujours une température plus élevée', 'is_correct' => false],
                            ['choice_text' => La masse détermine uniquement la pression', 'is_correct' => false],
                        ],
                        'explanation' => 'La capacité thermique totale est C = mc, donc elle augmente avec la quantité de matière.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Changement d'état
            // ============================================================

            [
                'title' => 'Changements d’état et chaleur latente',
                'description' => 'Étude de la fusion, vaporisation, condensation et de l’énergie associée aux changements d’état.',
                'questions' => [

                    [
                        'question' => 'Comment appelle-t-on le passage de l’état solide à l’état liquide ?',
                        'choices' => [
                            ['choice_text' => 'La fusion', 'is_correct' => true],
                            ['choice_text' => 'La condensation', 'is_correct' => false],
                            ['choice_text' => 'La sublimation', 'is_correct' => false],
                            ['choice_text' => 'La solidification', 'is_correct' => false],
                        ],
                        'explanation' => 'La fusion correspond au passage d’un solide à un liquide.',
                    ],

                    [
                        'question' => 'Comment appelle-t-on le passage de l’état liquide à l’état gazeux ?',
                        'choices' => [
                            ['choice_text' => 'La vaporisation', 'is_correct' => true],
                            ['choice_text' => 'La fusion', 'is_correct' => false],
                            ['choice_text' => 'La solidification', 'is_correct' => false],
                            ['choice_text' => 'La condensation', 'is_correct' => false],
                        ],
                        'explanation' => 'La vaporisation correspond au passage de l’état liquide à l’état gazeux.',
                    ],

                    [
                        'question' => 'Comment appelle-t-on le passage de l’état gazeux à l’état liquide ?',
                        'choices' => [
                            ['choice_text' => 'La condensation', 'is_correct' => true],
                            ['choice_text' => 'La sublimation', 'is_correct' => false],
                            ['choice_text' => 'La fusion', 'is_correct' => false],
                            ['choice_text' => 'La vaporisation', 'is_correct' => false],
                        ],
                        'explanation' => 'La condensation est le passage de la phase gazeuse à la phase liquide.',
                    ],

                    [
                        'question' => 'Comment appelle-t-on le passage direct d’un solide à un gaz ?',
                        'choices' => [
                            ['choice_text' => 'La sublimation', 'is_correct' => true],
                            ['choice_text' => 'La fusion', 'is_correct' => false],
                            ['choice_text' => 'La condensation', 'is_correct' => false],
                            ['choice_text' => 'La liquéfaction uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La sublimation correspond au passage direct solide-gaz.',
                    ],

                    [
                        'question' => 'Pendant un changement d’état d’un corps pur à pression constante, la température reste généralement...',
                        'choices' => [
                            ['choice_text' => 'Constante pendant le changement d’état', 'is_correct' => true],
                            ['choice_text' => 'Toujours en augmentation', 'is_correct' => false],
                            ['choice_text' => 'Toujours en diminution', 'is_correct' => false],
                            ['choice_text' => 'Égale à zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un corps pur au cours d’un changement d’état à pression constante, l’énergie échangée sert principalement à transformer la phase.',
                    ],

                    [
                        'question' => 'Quelle grandeur représente l’énergie nécessaire pour provoquer un changement d’état par unité de masse ?',
                        'choices' => [
                            ['choice_text' => 'La chaleur latente massique', 'is_correct' => true],
                            ['choice_text' => 'La capacité thermique volumique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse molaire', 'is_correct' => false],
                            ['choice_text' => 'La conductivité thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'La chaleur latente massique caractérise l’énergie nécessaire par unité de masse pour un changement d’état.',
                    ],

                    [
                        'question' => 'Quelle relation simple donne l’énergie nécessaire pour faire fondre une masse m avec une chaleur latente massique Lf ?',
                        'choices' => [
                            ['choice_text' => 'Q = mLf', 'is_correct' => true],
                            ['choice_text' => 'Q = Lf/m', 'is_correct' => false],
                            ['choice_text' => 'Q = m/Lf', 'is_correct' => false],
                            ['choice_text' => 'Q = m + Lf', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie latente nécessaire est Q = mLf.',
                    ],

                    [
                        'question' => 'Lors de la vaporisation d’un liquide, l’énergie fournie sert notamment à...',
                        'choices' => [
                            ['choice_text' => 'Surmonter les interactions permettant le passage vers la phase gazeuse', 'is_correct' => true],
                            ['choice_text' => 'Créer de la masse supplémentaire', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la conservation de l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Réduire nécessairement la température du liquide pendant toute vaporisation', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie de vaporisation contribue à modifier l’état microscopique de la matière et à vaincre les interactions entre particules.',
                    ],

                    [
                        'question' => 'La solidification correspond au passage...',
                        'choices' => [
                            ['choice_text' => 'Du liquide au solide', 'is_correct' => true],
                            ['choice_text' => 'Du solide au liquide', 'is_correct' => false],
                            ['choice_text' => 'Du gaz au solide uniquement', 'is_correct' => false],
                            ['choice_text' => 'Du liquide au gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'La solidification est le changement d’état inverse de la fusion.',
                    ],

                    [
                        'question' => 'Lorsqu’une substance se condense, elle libère généralement de l’énergie vers son environnement.',
                        'choices' => [
                            ['choice_text' => 'Vrai', 'is_correct' => true],
                            ['choice_text' => 'Faux', 'is_correct' => false],
                            ['choice_text' => 'Uniquement sous pression nulle', 'is_correct' => false],
                            ['choice_text' => 'Uniquement pour les solides', 'is_correct' => false],
                        ],
                        'explanation' => 'La condensation est un processus exothermique : la substance libère la chaleur latente associée au changement d’état.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Pression et gaz
            // ============================================================

            [
                'title' => 'Pression et comportement des gaz',
                'description' => 'Introduction à la pression, aux gaz parfaits et aux relations entre pression, volume et température.',
                'questions' => [

                    [
                        'question' => 'Quelle est l’unité SI de la pression ?',
                        'choices' => [
                            ['choice_text' => 'Le pascal', 'is_correct' => true],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le kelvin', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pascal (Pa) est l’unité SI de la pression.',
                    ],

                    [
                        'question' => 'Comment définit-on la pression moyenne exercée par une force répartie sur une surface ?',
                        'choices' => [
                            ['choice_text' => 'p = F/S', 'is_correct' => true],
                            ['choice_text' => 'p = F × S', 'is_correct' => false],
                            ['choice_text' => 'p = S/F', 'is_correct' => false],
                            ['choice_text' => 'p = F + S', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression est définie comme la force normale par unité de surface.',
                    ],

                    [
                        'question' => 'Pour un gaz parfait, quelle relation relie pression, volume, quantité de matière et température ?',
                        'choices' => [
                            ['choice_text' => 'PV = nRT', 'is_correct' => true],
                            ['choice_text' => 'P + V = nRT', 'is_correct' => false],
                            ['choice_text' => 'PV = n/R T', 'is_correct' => false],
                            ['choice_text' => 'P/V = nRT', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation d’état du gaz parfait est PV = nRT.',
                    ],

                    [
                        'question' => 'Si le volume d’une quantité fixe de gaz diminue à température constante, sa pression idéale...',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours identique', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'À température et quantité de matière constantes, PV = constante. Une diminution de V augmente donc P.',
                    ],

                    [
                        'question' => 'Si la température absolue d’un gaz parfait augmente à volume constant, sa pression...',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue', 'is_correct' => false],
                            ['choice_text' => 'Reste constante', 'is_correct' => false],
                            ['choice_text' => 'Devient nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'À volume et quantité de matière constants, P est proportionnelle à T en kelvins.',
                    ],

                    [
                        'question' => 'Pourquoi faut-il utiliser la température absolue dans l’équation des gaz parfaits ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la relation thermodynamique est formulée avec la température mesurée à partir du zéro absolu', 'is_correct' => true],
                            ['choice_text' => 'Parce que le degré Celsius est une unité de pression', 'is_correct' => false],
                            ['choice_text' => 'Parce que le kelvin est une unité d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les gaz ne peuvent être décrits qu’en kelvins sans exception expérimentale', 'is_correct' => false],
                        ],
                        'explanation' => 'Les relations thermodynamiques utilisent la température absolue en kelvins.',
                    ],

                    [
                        'question' => 'Une seringue contient un gaz et son piston est poussé lentement à température approximativement constante. Que devient idéalement le volume du gaz ?',
                        'choices' => [
                            ['choice_text' => 'Il diminue', 'is_correct' => true],
                            ['choice_text' => 'Il augmente', 'is_correct' => false],
                            ['choice_text' => 'Il reste nécessairement identique', 'is_correct' => false],
                            ['choice_text' => 'Il devient infini', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déplacement du piston vers l’intérieur réduit le volume disponible au gaz.',
                    ],

                    [
                        'question' => 'À pression constante, lorsque la température absolue d’un gaz parfait augmente, son volume tend à...',
                        'choices' => [
                            ['choice_text' => 'Augmenter', 'is_correct' => true],
                            ['choice_text' => 'Diminuer', 'is_correct' => false],
                            ['choice_text' => 'Rester nul', 'is_correct' => false],
                            ['choice_text' => 'Devenir indépendant de la température', 'is_correct' => false],
                        ],
                        'explanation' => 'À pression et quantité de matière constantes, V est proportionnel à T.',
                    ],

                    [
                        'question' => 'Pourquoi un ballon gonflé peut-il voir sa pression interne varier avec la température ?',
                        'choices' => [
                            ['choice_text' => Les propriétés thermodynamiques du gaz dépendent de la température', 'is_correct' => true],
                            ['choice_text' => La température ne peut jamais modifier la pression', 'is_correct' => false],
                            ['choice_text' => La masse du ballon change avec la température', 'is_correct' => false],
                            ['choice_text' => Le volume devient toujours nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une quantité de gaz donnée, la température, le volume et la pression sont liés par l’équation d’état.',
                    ],

                    [
                        'question' => 'Une pression de 200 kPa correspond à...',
                        'choices' => [
                            ['choice_text' => '200 000 Pa', 'is_correct' => true],
                            ['choice_text' => '20 000 Pa', 'is_correct' => false],
                            ['choice_text' => '200 Pa', 'is_correct' => false],
                            ['choice_text' => '2 000 000 Pa', 'is_correct' => false],
                        ],
                        'explanation' => '1 kPa = 1000 Pa, donc 200 kPa = 200 000 Pa.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Premier principe de la thermodynamique
            // ============================================================

            [
                'title' => 'Premier principe de la thermodynamique',
                'description' => 'Introduction au bilan énergétique, à l’énergie interne, au travail et à la chaleur.',
                'questions' => [

                    [
                        'question' => 'Quel principe exprime la conservation de l’énergie appliquée à un système thermodynamique ?',
                        'choices' => [
                            ['choice_text' => 'Le premier principe de la thermodynamique', 'is_correct' => true],
                            ['choice_text' => 'Le principe d’inertie', 'is_correct' => false],
                            ['choice_text' => 'La loi de Snell-Descartes', 'is_correct' => false],
                            ['choice_text' => 'Le principe de superposition uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier principe est une formulation thermodynamique de la conservation de l’énergie.',
                    ],

                    [
                        'question' => 'Quelle grandeur d’état représente l’énergie microscopique totale associée à un système thermodynamique ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie interne', 'is_correct' => true],
                            ['choice_text' => 'La vitesse moyenne uniquement', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La puissance électrique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie interne regroupe les contributions microscopiques internes du système.',
                    ],

                    [
                        'question' => 'Dans une convention courante, quelle expression représente le premier principe pour un système recevant une chaleur Q et fournissant un travail W ?',
                        'choices' => [
                            ['choice_text' => 'ΔU = Q - W', 'is_correct' => true],
                            ['choice_text' => 'ΔU = Q + W pour cette convention', 'is_correct' => false],
                            ['choice_text' => 'ΔU = W - Q dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'ΔU = QW', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec la convention où W est le travail fourni par le système, le premier principe s’écrit ΔU = Q - W.',
                    ],

                    [
                        'question' => 'Lorsqu’un gaz reçoit de la chaleur et ne fournit aucun travail, son énergie interne...',
                        'choices' => [
                            ['choice_text' => 'Augmente si Q > 0', 'is_correct' => true],
                            ['choice_text' => 'Diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours identique', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Si W = 0, le premier principe donne ΔU = Q. Une chaleur reçue positive augmente donc l’énergie interne.',
                    ],

                    [
                        'question' => 'Dans une transformation adiabatique idéale, le transfert thermique Q est...',
                        'choices' => [
                            ['choice_text' => 'Nul', 'is_correct' => true],
                            ['choice_text' => 'Toujours positif', 'is_correct' => false],
                            ['choice_text' => 'Toujours égal au travail', 'is_correct' => false],
                            ['choice_text' => 'Infini', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transformation adiabatique est définie par l’absence de transfert thermique : Q = 0.',
                    ],

                    [
                        'question' => 'Une compression rapide d’un gaz dans un cylindre isolé peut augmenter sa température parce que...',
                        'choices' => [
                            ['choice_text' => Le travail exercé sur le gaz augmente son énergie interne', 'is_correct' => true],
                            ['choice_text' => 'La masse du gaz augmente', 'is_correct' => false],
                            ['choice_text' => 'L’isolation crée de la chaleur sans apport énergétique', 'is_correct' => false],
                            ['choice_text' => 'La pression devient nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une compression adiabatique, le travail effectué sur le gaz peut augmenter son énergie interne et donc sa température.',
                    ],

                    [
                        'question' => 'Pourquoi l’énergie interne est-elle une fonction d’état ?',
                        'choices' => [
                            ['choice_text' => Sa variation entre deux états dépend uniquement des états initial et final', 'is_correct' => true],
                            ['choice_text' => 'Elle dépend uniquement du chemin suivi', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle est identique à la chaleur dans tous les processus', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie interne est une fonction d’état : ΔU est indépendante du chemin thermodynamique suivi entre deux états.',
                    ],

                    [
                        'question' => 'La chaleur Q est-elle une fonction d’état ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle dépend du processus suivi', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, comme la masse', 'is_correct' => false],
                            ['choice_text' => 'Non, car elle est toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La chaleur est un mode de transfert d’énergie dépendant du chemin thermodynamique.',
                    ],

                    [
                        'question' => 'Un système effectue un cycle complet et revient à son état initial. Quelle est sa variation d’énergie interne ?',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Toujours positive', 'is_correct' => false],
                            ['choice_text' => 'Toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Égale à sa température', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme l’énergie interne est une fonction d’état, elle revient à sa valeur initiale après un cycle : ΔU = 0.',
                    ],

                    [
                        'question' => 'Dans un cycle thermodynamique complet, si le système reçoit 800 J de chaleur nette, quel travail net fournit-il selon la convention ΔU = Q - W ?',
                        'choices' => [
                            ['choice_text' => '800 J', 'is_correct' => true],
                            ['choice_text' => '0 J', 'is_correct' => false],
                            ['choice_text' => '1600 J', 'is_correct' => false],
                            ['choice_text' => '-800 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur un cycle, ΔU = 0. Donc 0 = Q - W, d’où W = Q = 800 J.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Transferts thermiques
            // ============================================================

            [
                'title' => 'Conduction, convection et rayonnement',
                'description' => 'Découverte des trois principaux mécanismes de transfert thermique.',
                'questions' => [

                    [
                        'question' => 'Quel mécanisme thermique correspond au transfert d’énergie à travers un matériau sans mouvement macroscopique de matière ?',
                        'choices' => [
                            ['choice_text' => 'La conduction', 'is_correct' => true],
                            ['choice_text' => 'La convection', 'is_correct' => false],
                            ['choice_text' => 'Le rayonnement uniquement', 'is_correct' => false],
                            ['choice_text' => 'La diffusion de masse uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La conduction transfère de l’énergie thermique à travers un milieu par interactions microscopiques.',
                    ],

                    [
                        'question' => 'Quel mécanisme implique généralement un déplacement macroscopique d’un fluide ?',
                        'choices' => [
                            ['choice_text' => 'La convection', 'is_correct' => true],
                            ['choice_text' => 'La conduction solide uniquement', 'is_correct' => false],
                            ['choice_text' => 'La sublimation', 'is_correct' => false],
                            ['choice_text' => 'La compression adiabatique', 'is_correct' => false],
                        ],
                        'explanation' => 'La convection implique le transport de chaleur associé au mouvement d’un fluide.',
                    ],

                    [
                        'question' => 'Quel mode de transfert thermique peut se produire dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'Le rayonnement', 'is_correct' => true],
                            ['choice_text' => 'La conduction uniquement', 'is_correct' => false],
                            ['choice_text' => 'La convection naturelle uniquement', 'is_correct' => false],
                            ['choice_text' => 'Aucun transfert thermique n’est possible', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayonnement électromagnétique permet le transfert thermique sans support matériel, par exemple entre le Soleil et la Terre.',
                    ],

                    [
                        'question' => 'Pourquoi les métaux sont-ils généralement de bons conducteurs thermiques ?',
                        'choices' => [
                            ['choice_text' => 'Leur structure microscopique permet un transport efficace de l’énergie thermique', 'is_correct' => true],
                            ['choice_text' => 'Ils ne possèdent aucune particule', 'is_correct' => false],
                            ['choice_text' => 'Ils sont toujours à température constante', 'is_correct' => false],
                            ['choice_text' => 'La conduction n’existe que dans les métaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les métaux possèdent notamment des électrons qui contribuent efficacement au transport d’énergie.',
                    ],

                    [
                        'question' => 'Pourquoi une couche d’air immobile peut-elle agir comme isolant thermique ?',
                        'choices' => [
                            ['choice_text' => L’air immobile conduit relativement mal la chaleur et limite certains mouvements convectifs', 'is_correct' => true],
                            ['choice_text' => 'L’air produit du froid', 'is_correct' => false],
                            ['choice_text' => 'L’air empêche tout rayonnement', 'is_correct' => false],
                            ['choice_text' => 'L’air possède toujours une température nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'L’air immobile est un relativement mauvais conducteur thermique et la limitation de la convection améliore l’isolation.',
                    ],

                    [
                        'question' => 'Dans une casserole chauffée par le fond, les mouvements du liquide sont principalement associés à...',
                        'choices' => [
                            ['choice_text' => 'La convection naturelle', 'is_correct' => true],
                            ['choice_text' => 'La conduction dans le vide', 'is_correct' => false],
                            ['choice_text' => 'La sublimation', 'is_correct' => false],
                            ['choice_text' => 'La conduction électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le liquide chauffé devient moins dense et monte, tandis que le liquide plus froid descend : cela crée une convection naturelle.',
                    ],

                    [
                        'question' => 'Pourquoi une surface noire mate absorbe-t-elle généralement davantage de rayonnement thermique qu’une surface brillante ?',
                        'choices' => [
                            ['choice_text' => Les propriétés radiatives de la surface favorisent généralement l’absorption', 'is_correct' => true],
                            ['choice_text' => 'La surface noire possède nécessairement une température plus élevée', 'is_correct' => false],
                            ['choice_text' => 'Les surfaces brillantes n’émettent jamais de rayonnement', 'is_correct' => false],
                            ['choice_text' => 'La couleur n’a aucune relation avec les propriétés radiatives', 'is_correct' => false],
                        ],
                        'explanation' => 'Les propriétés optiques de surface influencent l’absorption et l’émission du rayonnement thermique.',
                    ],

                    [
                        'question' => 'Quel dispositif est principalement conçu pour réduire les transferts thermiques ?',
                        'choices' => [
                            ['choice_text' => 'Un isolant thermique', 'is_correct' => true],
                            ['choice_text' => 'Un conducteur métallique épais dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Un radiateur', 'is_correct' => false],
                            ['choice_text' => 'Une pompe hydraulique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un isolant thermique est conçu pour augmenter la résistance au transfert de chaleur.',
                    ],

                    [
                        'question' => 'Pourquoi une isolation sous vide peut-elle être très efficace dans certains dispositifs thermiques ?',
                        'choices' => [
                            ['choice_text' => Elle réduit fortement la conduction et la convection à travers l’espace séparateur', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime tout rayonnement automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Elle crée une température négative', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente toujours la conduction', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vide limite fortement les mécanismes nécessitant un milieu matériel, même si le rayonnement subsiste.',
                    ],

                    [
                        'question' => 'Pourquoi un radiateur possède-t-il souvent une grande surface d’échange ?',
                        'choices' => [
                            ['choice_text' => Pour augmenter les échanges thermiques avec l’environnement', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire volontairement tous les transferts', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter la masse sans fonction thermique', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute convection', 'is_correct' => false],
                        ],
                        'explanation' => 'Une surface plus grande facilite généralement les échanges thermiques avec l’air ou l’environnement.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Machines thermiques
            // ============================================================

            [
                'title' => 'Machines thermiques et rendement',
                'description' => 'Introduction aux moteurs thermiques, réfrigérateurs, pompes à chaleur et rendements énergétiques.',
                'questions' => [

                    [
                        'question' => 'Quel est l’objectif d’une machine thermique motrice ?',
                        'choices' => [
                            ['choice_text' => Convertir une partie de l’énergie thermique en travail', 'is_correct' => true],
                            ['choice_text' => 'Transformer tout le travail en masse', 'is_correct' => false],
                            ['choice_text' => 'Refroidir nécessairement une source sans consommation d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Supprimer la conservation de l’énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Un moteur thermique reçoit de la chaleur et convertit une partie de cette énergie en travail mécanique.',
                    ],

                    [
                        'question' => 'Pourquoi une machine thermique doit-elle généralement rejeter une partie de la chaleur vers une source froide ?',
                        'choices' => [
                            ['choice_text' => La deuxième loi de la thermodynamique impose une limitation au rendement des cycles réels', 'is_correct' => true],
                            ['choice_text' => 'Parce que toute chaleur peut être convertie à 100 % en travail', 'is_correct' => false],
                            ['choice_text' => 'Parce que la chaleur n’est pas une forme d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Parce que la source chaude doit devenir froide instantanément', 'is_correct' => false],
                        ],
                        'explanation' => 'Une machine thermique cyclique ne peut pas convertir toute la chaleur reçue en travail avec un rendement de 100 %.',
                    ],

                    [
                        'question' => 'Une machine reçoit 1000 J de chaleur et fournit 300 J de travail. Quel est son rendement thermique ?',
                        'choices' => [
                            ['choice_text' => '30 %', 'is_correct' => true],
                            ['choice_text' => '70 %', 'is_correct' => false],
                            ['choice_text' => '300 %', 'is_correct' => false],
                            ['choice_text' => '3 %', 'is_correct' => false],
                        ],
                        'explanation' => 'η = W/Qh = 300/1000 = 0,30 = 30 %.',
                    ],

                    [
                        'question' => 'Une machine thermique reçoit 1000 J et fournit 400 J de travail. Quelle chaleur rejette-t-elle idéalement vers la source froide ?',
                        'choices' => [
                            ['choice_text' => '600 J', 'is_correct' => true],
                            ['choice_text' => '400 J', 'is_correct' => false],
                            ['choice_text' => '1400 J', 'is_correct' => false],
                            ['choice_text' => '100 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier principe sur un cycle donne Qh = W + Qf, donc Qf = 1000 - 400 = 600 J.',
                    ],

                    [
                        'question' => 'Quel dispositif transfère de la chaleur d’une source froide vers une source chaude en consommant du travail ?',
                        'choices' => [
                            ['choice_text' => 'Une pompe à chaleur ou une machine frigorifique', 'is_correct' => true],
                            ['choice_text' => 'Un moteur thermique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une turbine isolée sans apport', 'is_correct' => false],
                            ['choice_text' => 'Un calorimètre passif', 'is_correct' => false],
                        ],
                        'explanation' => 'Un réfrigérateur ou une pompe à chaleur utilise du travail pour transférer de la chaleur d’une zone froide vers une zone chaude.',
                    ],

                    [
                        'question' => 'Quelle caractéristique distingue principalement une pompe à chaleur d’un moteur thermique ?',
                        'choices' => [
                            ['choice_text' => Elle utilise du travail pour déplacer de la chaleur plutôt que pour produire directement du travail à partir d’une source chaude', 'is_correct' => true],
                            ['choice_text' => 'Elle ne nécessite aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'Elle détruit nécessairement de la chaleur', 'is_correct' => false],
                            ['choice_text' => 'Elle fonctionne uniquement avec des solides', 'is_correct' => false],
                        ],
                        'explanation' => 'La pompe à chaleur consomme du travail pour transférer de la chaleur de la source froide vers la source chaude.',
                    ],

                    [
                        'question' => 'Pourquoi le rendement d’un moteur thermique réel est-il inférieur à 100 % ?',
                        'choices' => [
                            ['choice_text' => Une partie de l’énergie thermique doit être rejetée et des irréversibilités existent', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’énergie n’est pas conservée', 'is_correct' => false],
                            ['choice_text' => 'Parce que le travail n’est jamais une énergie', 'is_correct' => false],
                            ['choice_text' => 'Parce que la chaleur est toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le deuxième principe impose des limites fondamentales et les machines réelles ajoutent des pertes supplémentaires.',
                    ],

                    [
                        'question' => 'Quel cycle idéal est généralement utilisé comme référence maximale pour le rendement d’une machine thermique entre deux températures ?',
                        'choices' => [
                            ['choice_text' => 'Le cycle de Carnot', 'is_correct' => true],
                            ['choice_text' => 'Le cycle de Newton', 'is_correct' => false],
                            ['choice_text' => 'Le cycle de Hooke', 'is_correct' => false],
                            ['choice_text' => 'Le cycle de Bernoulli uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cycle de Carnot fournit une limite idéale de rendement entre deux températures extrêmes.',
                    ],

                    [
                        'question' => 'Pour une machine thermique, augmenter la température de la source chaude tout en maintenant la source froide peut généralement...',
                        'choices' => [
                            ['choice_text' => 'Augmenter la limite théorique de rendement', 'is_correct' => true],
                            ['choice_text' => 'Rendre le rendement théorique nul', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute chaleur rejetée', 'is_correct' => false],
                            ['choice_text' => 'Rendre le cycle impossible dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rendement de Carnot η = 1 - Tc/Th augmente lorsque Th augmente, à Tc fixée.',
                    ],

                    [
                        'question' => 'Pourquoi les pertes mécaniques et thermiques d’un moteur réduisent-elles sa performance énergétique ?',
                        'choices' => [
                            ['choice_text' => Une partie de l’énergie disponible est dissipée avant de devenir du travail utile', 'is_correct' => true],
                            ['choice_text' => 'Les pertes créent toujours davantage de travail utile', 'is_correct' => false],
                            ['choice_text' => 'Les pertes rendent la conservation de l’énergie fausse', 'is_correct' => false],
                            ['choice_text' => 'Les pertes ne peuvent concerner que la température extérieure', 'is_correct' => false],
                        ],
                        'explanation' => 'Les frottements, transferts thermiques parasites et autres irréversibilités réduisent le travail utile récupérable.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Applications quotidiennes de la thermodynamique
            // ============================================================

            [
                'title' => 'Applications quotidiennes de la thermodynamique',
                'description' => 'Application des principes thermodynamiques aux systèmes domestiques et industriels simples.',
                'questions' => [

                    [
                        'question' => 'Pourquoi une maison bien isolée nécessite-t-elle généralement moins d’énergie pour rester chaude en hiver ?',
                        'choices' => [
                            ['choice_text' => Elle réduit les transferts thermiques vers l’extérieur', 'is_correct' => true],
                            ['choice_text' => 'Elle crée de l’énergie thermique gratuitement', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime totalement la différence de température', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente automatiquement la puissance du chauffage', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne isolation augmente la résistance thermique de l’enveloppe et réduit les pertes de chaleur.',
                    ],

                    [
                        'question' => 'Pourquoi une bouteille thermos possède-t-elle souvent une double paroi avec un espace sous vide ?',
                        'choices' => [
                            ['choice_text' => Pour réduire principalement la conduction et la convection entre les parois', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la masse du liquide', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute forme de rayonnement sans traitement supplémentaire', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter volontairement les pertes thermiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vide réduit fortement la conduction et la convection dans l’espace séparateur.',
                    ],

                    [
                        'question' => 'Pourquoi une casserole métallique chauffe-t-elle rapidement sur une plaque de cuisson ?',
                        'choices' => [
                            ['choice_text' => Le métal conduit efficacement la chaleur', 'is_correct' => true],
                            ['choice_text' => 'Le métal possède toujours une température initiale plus élevée', 'is_correct' => false],
                            ['choice_text' => 'Le métal ne possède aucune énergie interne', 'is_correct' => false],
                            ['choice_text' => 'La chaleur ne peut traverser que les métaux', 'is_correct' => false],
                        ],
                        'explanation' => 'La bonne conductivité thermique des métaux favorise la distribution rapide de l’énergie thermique.',
                    ],

                    [
                        'question' => 'Pourquoi une climatisation rejette-t-elle généralement de la chaleur à l’extérieur alors qu’elle refroidit une pièce ?',
                        'choices' => [
                            ['choice_text' => Elle transfère la chaleur extraite de la pièce vers l’extérieur en consommant du travail', 'is_correct' => true],
                            ['choice_text' => 'Elle détruit la chaleur extraite', 'is_correct' => false],
                            ['choice_text' => 'Elle crée uniquement du froid sans transfert d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Elle refroidit l’extérieur en priorité', 'is_correct' => false],
                        ],
                        'explanation' => 'Une machine frigorifique extrait de la chaleur de la pièce et rejette cette chaleur plus le travail fourni vers l’environnement extérieur.',
                    ],

                    [
                        'question' => 'Pourquoi les pneus d’un véhicule peuvent-ils voir leur pression changer avec la température ?',
                        'choices' => [
                            ['choice_text' => La pression d’un gaz dépend de la température si les autres paramètres pertinents restent approximativement constants', 'is_correct' => true],
                            ['choice_text' => 'La masse d’air change toujours avec la température', 'is_correct' => false],
                            ['choice_text' => 'Le volume du pneu devient nécessairement nul', 'is_correct' => false],
                            ['choice_text' => 'La température n’influence jamais les gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une quantité de gaz donnée, la pression et la température sont liées par l’équation d’état, avec l’influence réelle de la déformation du pneu à considérer.',
                    ],

                    [
                        'question' => 'Pourquoi souffler sur une boisson chaude peut-il accélérer son refroidissement ?',
                        'choices' => [
                            ['choice_text' => Le mouvement d’air augmente les échanges thermiques et peut accélérer l’évaporation', 'is_correct' => true],
                            ['choice_text' => 'L’air froid détruit directement l’énergie interne', 'is_correct' => false],
                            ['choice_text' => 'Souffler augmente toujours la température de la boisson', 'is_correct' => false],
                            ['choice_text' => 'L’évaporation n’a aucun effet thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mouvement d’air renouvelle l’air au-dessus de la boisson et peut augmenter convection et évaporation, ce qui favorise le refroidissement.',
                    ],

                    [
                        'question' => 'Pourquoi les radiateurs sont-ils souvent placés près des fenêtres ou des parois froides ?',
                        'choices' => [
                            ['choice_text' => Pour favoriser une distribution efficace de la chaleur et compenser les zones de pertes', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter volontairement les pertes thermiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que les fenêtres produisent de la chaleur', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire la température intérieure', 'is_correct' => false],
                        ],
                        'explanation' => 'Le positionnement peut contribuer à créer des mouvements d’air et à compenser les pertes thermiques près des surfaces froides.',
                    ],

                    [
                        'question' => 'Pourquoi les vêtements en plusieurs couches peuvent-ils améliorer l’isolation thermique du corps ?',
                        'choices' => [
                            ['choice_text' => Ils emprisonnent de l’air et réduisent certains transferts thermiques', 'is_correct' => true],
                            ['choice_text' => 'Ils augmentent directement la température corporelle par création d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment tout rayonnement thermique', 'is_correct' => false],
                            ['choice_text' => 'Ils empêchent la conduction dans le corps humain', 'is_correct' => false],
                        ],
                        'explanation' => 'Les couches de vêtements peuvent retenir de l’air relativement immobile, ce qui limite certains échanges thermiques.',
                    ],

                    [
                        'question' => 'Pourquoi un liquide placé au réfrigérateur finit-il par atteindre une température proche de celle de son environnement ?',
                        'choices' => [
                            ['choice_text' => Il échange de la chaleur jusqu’à atteindre l’équilibre thermique avec son environnement', 'is_correct' => true],
                            ['choice_text' => 'Sa température diminue indéfiniment', 'is_correct' => false],
                            ['choice_text' => 'Le réfrigérateur détruit toute son énergie interne', 'is_correct' => false],
                            ['choice_text' => 'La masse du liquide disparaît progressivement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le liquide perd de la chaleur vers son environnement froid jusqu’à atteindre un état d’équilibre thermique.',
                    ],

                    [
                        'question' => 'Pourquoi une cocotte-minute peut-elle cuire certains aliments plus rapidement ?',
                        'choices' => [
                            ['choice_text' => Une pression plus élevée augmente la température d’ébullition de l’eau', 'is_correct' => true],
                            ['choice_text' => 'La pression fait disparaître la chaleur latente', 'is_correct' => false],
                            ['choice_text' => 'L’eau bout toujours à 100 °C quelle que soit la pression', 'is_correct' => false],
                            ['choice_text' => 'La pression réduit automatiquement la température du contenu', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pression accrue augmente la température de saturation de l’eau, ce qui permet une cuisson à température plus élevée.',
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

                // Mélange des objets complets pour conserver
                // is_correct avec la bonne réponse.
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