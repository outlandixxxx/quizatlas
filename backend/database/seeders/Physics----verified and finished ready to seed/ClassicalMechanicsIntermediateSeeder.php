<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ClassicalMechanicsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'classical-mechanics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Cinématique avancée
            // ============================================================

            [
                'title' => 'Cinématique et mouvements à accélération constante',
                'description' => 'Application des équations de mouvement aux trajectoires rectilignes et aux mouvements accélérés.',
                'questions' => [

                    [
                        'question' => 'Une voiture part du repos avec une accélération constante de 2 m/s². Quelle vitesse atteint-elle après 8 s ?',
                        'choices' => [
                            ['choice_text' => '16 m/s', 'is_correct' => true],
                            ['choice_text' => '8 m/s', 'is_correct' => false],
                            ['choice_text' => '10 m/s', 'is_correct' => false],
                            ['choice_text' => '32 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec v0 = 0 et une accélération constante, v = v0 + at = 2 × 8 = 16 m/s.',
                    ],

                    [
                        'question' => 'Un objet part du repos avec une accélération constante de 4 m/s² pendant 5 s. Quelle distance parcourt-il ?',
                        'choices' => [
                            ['choice_text' => '50 m', 'is_correct' => true],
                            ['choice_text' => '20 m', 'is_correct' => false],
                            ['choice_text' => '100 m', 'is_correct' => false],
                            ['choice_text' => '40 m', 'is_correct' => false],
                        ],
                        'explanation' => 'd = 1/2 at² = 1/2 × 4 × 25 = 50 m.',
                    ],

                    [
                        'question' => 'Un objet possède une vitesse initiale de 10 m/s et une accélération constante de -2 m/s². Après combien de temps s’arrête-t-il momentanément ?',
                        'choices' => [
                            ['choice_text' => '5 s', 'is_correct' => true],
                            ['choice_text' => '2 s', 'is_correct' => false],
                            ['choice_text' => '10 s', 'is_correct' => false],
                            ['choice_text' => '20 s', 'is_correct' => false],
                        ],
                        'explanation' => 'L’arrêt correspond à v = 0 : 0 = 10 - 2t, donc t = 5 s.',
                    ],

                    [
                        'question' => 'Lors d’un mouvement rectiligne uniformément accéléré, quelle relation donne correctement la vitesse en fonction du temps ?',
                        'choices' => [
                            ['choice_text' => 'v = v0 + at', 'is_correct' => true],
                            ['choice_text' => 'v = v0 + at²', 'is_correct' => false],
                            ['choice_text' => 'v = at/2', 'is_correct' => false],
                            ['choice_text' => 'v = v0/t + a', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque l’accélération est constante, v(t) = v0 + at.',
                    ],

                    [
                        'question' => 'Quelle relation relie vitesse, vitesse initiale, accélération et déplacement pour une accélération constante ?',
                        'choices' => [
                            ['choice_text' => 'v² = v0² + 2aΔx', 'is_correct' => true],
                            ['choice_text' => 'v = v0² + 2aΔx', 'is_correct' => false],
                            ['choice_text' => 'v² = v0 + aΔx', 'is_correct' => false],
                            ['choice_text' => 'v = v0 + 2aΔx²', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette relation élimine explicitement le temps pour un mouvement à accélération constante.',
                    ],

                    [
                        'question' => 'Un projectile est lancé horizontalement depuis une hauteur de 20 m avec une vitesse initiale de 10 m/s. En négligeant l’air, quelle est sa vitesse horizontale juste avant l’impact ?',
                        'choices' => [
                            ['choice_text' => '10 m/s', 'is_correct' => true],
                            ['choice_text' => '0 m/s', 'is_correct' => false],
                            ['choice_text' => '20 m/s', 'is_correct' => false],
                            ['choice_text' => '9,8 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans résistance de l’air, aucune accélération horizontale n’agit. La composante horizontale de la vitesse reste donc 10 m/s.',
                    ],

                    [
                        'question' => 'Dans un mouvement de projectile sans résistance de l’air, quelle composante de l’accélération reste nulle ?',
                        'choices' => [
                            ['choice_text' => 'La composante horizontale', 'is_correct' => true],
                            ['choice_text' => 'La composante verticale', 'is_correct' => false],
                            ['choice_text' => 'Toutes les composantes', 'is_correct' => false],
                            ['choice_text' => 'La composante tangentielle dans tous les référentiels', 'is_correct' => false],
                        ],
                        'explanation' => 'Le projectile ne subit que l’accélération gravitationnelle verticale dans ce modèle, donc ax = 0.',
                    ],

                    [
                        'question' => 'Un objet tombe en chute libre à partir du repos pendant 3 s avec g = 9,8 m/s². Quelle distance verticale parcourt-il ?',
                        'choices' => [
                            ['choice_text' => '44,1 m', 'is_correct' => true],
                            ['choice_text' => '29,4 m', 'is_correct' => false],
                            ['choice_text' => '14,7 m', 'is_correct' => false],
                            ['choice_text' => '88,2 m', 'is_correct' => false],
                        ],
                        'explanation' => 'd = 1/2 gt² = 1/2 × 9,8 × 9 = 44,1 m.',
                    ],

                    [
                        'question' => 'Un objet se déplace en cercle à vitesse scalaire constante. Pourquoi possède-t-il néanmoins une accélération ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la direction du vecteur vitesse change continuellement', 'is_correct' => true],
                            ['choice_text' => 'Parce que sa masse change', 'is_correct' => false],
                            ['choice_text' => 'Parce que sa vitesse scalaire augmente', 'is_correct' => false],
                            ['choice_text' => 'Parce que le temps s’arrête', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération mesure la variation du vecteur vitesse. Dans un mouvement circulaire, sa direction change continuellement.',
                    ],

                    [
                        'question' => 'Un véhicule passe de 20 m/s à 5 m/s en 3 s avec une accélération constante. Quelle est son accélération moyenne et instantanée dans ce modèle ?',
                        'choices' => [
                            ['choice_text' => '-5 m/s²', 'is_correct' => true],
                            ['choice_text' => '5 m/s²', 'is_correct' => false],
                            ['choice_text' => '-15 m/s²', 'is_correct' => false],
                            ['choice_text' => '15 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a = (vf - vi)/Δt = (5 - 20)/3 = -5 m/s².',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Dynamique newtonienne
            // ============================================================

            [
                'title' => 'Dynamique et diagrammes des forces',
                'description' => 'Application des lois de Newton à des systèmes soumis à plusieurs forces.',
                'questions' => [

                    [
                        'question' => 'Un bloc de 10 kg subit une force horizontale résultante de 30 N. Quelle est son accélération ?',
                        'choices' => [
                            ['choice_text' => '3 m/s²', 'is_correct' => true],
                            ['choice_text' => '30 m/s²', 'is_correct' => false],
                            ['choice_text' => '0,3 m/s²', 'is_correct' => false],
                            ['choice_text' => '300 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon F = ma, a = F/m = 30/10 = 3 m/s².',
                    ],

                    [
                        'question' => 'Un bloc de 5 kg est tiré par une force de 20 N sur une surface horizontale. Le frottement vaut 5 N. Quelle est son accélération ?',
                        'choices' => [
                            ['choice_text' => '3 m/s²', 'is_correct' => true],
                            ['choice_text' => '4 m/s²', 'is_correct' => false],
                            ['choice_text' => '5 m/s²', 'is_correct' => false],
                            ['choice_text' => '15 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'La résultante horizontale vaut 20 - 5 = 15 N. Donc a = 15/5 = 3 m/s².',
                    ],

                    [
                        'question' => 'Un objet repose immobile sur une table horizontale. Quelle relation existe entre son poids et la réaction normale si aucune autre force verticale n’agit ?',
                        'choices' => [
                            ['choice_text' => N = mg', 'is_correct' => true],
                            ['choice_text' => N = 0', 'is_correct' => false],
                            ['choice_text' => N = 2mg', 'is_correct' => false],
                            ['choice_text' => N = m/g', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équilibre vertical impose N - mg = 0, donc N = mg.',
                    ],

                    [
                        'question' => 'Un bloc glisse sans frottement sur un plan incliné d’angle θ. Quelle composante du poids provoque son accélération le long du plan ?',
                        'choices' => [
                            ['choice_text' => mg sin(θ)', 'is_correct' => true],
                            ['choice_text' => mg cos(θ)', 'is_correct' => false],
                            ['choice_text' => mg tan(θ)', 'is_correct' => false],
                            ['choice_text' => mg/sin(θ)', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante tangentielle du poids vaut mg sin(θ).',
                    ],

                    [
                        'question' => 'Sur un plan incliné sans frottement, la réaction normale vaut idéalement...',
                        'choices' => [
                            ['choice_text' => 'mg cos(θ)', 'is_correct' => true],
                            ['choice_text' => 'mg sin(θ)', 'is_correct' => false],
                            ['choice_text' => 'mg tan(θ)', 'is_correct' => false],
                            ['choice_text' => 'mg', 'is_correct' => false],
                        ],
                        'explanation' => 'Perpendiculairement au plan, l’équilibre impose N = mg cos(θ).',
                    ],

                    [
                        'question' => 'Une masse de 2 kg est soumise à deux forces horizontales opposées de 12 N et 7 N. Quelle est son accélération ?',
                        'choices' => [
                            ['choice_text' => '2,5 m/s² dans le sens de la force de 12 N', 'is_correct' => true],
                            ['choice_text' => '9,5 m/s² dans le sens de la force de 12 N', 'is_correct' => false],
                            ['choice_text' => '3,5 m/s² dans le sens de la force de 7 N', 'is_correct' => false],
                            ['choice_text' => '5 m/s² dans le sens de la force de 7 N', 'is_correct' => false],
                        ],
                        'explanation' => 'La résultante vaut 12 - 7 = 5 N. Donc a = 5/2 = 2,5 m/s² dans le sens de la force de 12 N.',
                    ],

                    [
                        'question' => 'Pourquoi les forces d’action-réaction ne s’annulent-elles pas lorsqu’on applique la deuxième loi de Newton à un seul objet ?',
                        'choices' => [
                            ['choice_text' => 'Elles s’exercent sur deux corps différents', 'is_correct' => true],
                            ['choice_text' => 'Elles ont toujours des intensités différentes', 'is_correct' => false],
                            ['choice_text' => 'Elles ont le même sens', 'is_correct' => false],
                            ['choice_text' => 'Elles n’existent que dans les référentiels accélérés', 'is_correct' => false],
                        ],
                        'explanation' => 'Une paire action-réaction agit sur deux objets différents. Elles ne doivent donc pas être additionnées dans le bilan des forces d’un seul objet.',
                    ],

                    [
                        'question' => 'Un ascenseur accélère vers le haut. Pour une personne immobile par rapport à la cabine, la réaction normale du plancher est...',
                        'choices' => [
                            ['choice_text' => 'Supérieure à son poids', 'is_correct' => true],
                            ['choice_text' => 'Inférieure à son poids', 'is_correct' => false],
                            ['choice_text' => 'Également nulle', 'is_correct' => false],
                            ['choice_text' => 'Toujours égale à zéro pendant toute l’accélération', 'is_correct' => false],
                        ],
                        'explanation' => 'N - mg = ma avec a > 0 vers le haut, donc N = m(g + a) > mg.',
                    ],

                    [
                        'question' => 'Un objet est tiré horizontalement à vitesse constante malgré un frottement de 8 N. Quelle est la force de traction horizontale ?',
                        'choices' => [
                            ['choice_text' => '8 N', 'is_correct' => true],
                            ['choice_text' => '0 N', 'is_correct' => false],
                            ['choice_text' => '16 N', 'is_correct' => false],
                            ['choice_text' => '4 N', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse constante implique une résultante nulle. La traction doit donc compenser exactement le frottement.',
                    ],

                    [
                        'question' => 'Pourquoi utilise-t-on un diagramme de corps libre avant d’écrire les équations de Newton ?',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les forces réellement appliquées au système étudié', 'is_correct' => true],
                            ['choice_text' => 'Pour calculer automatiquement la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la masse du système', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter de choisir un référentiel', 'is_correct' => false],
                        ],
                        'explanation' => 'Le diagramme de corps libre permet de recenser et d’orienter correctement les forces avant de résoudre le problème.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Travail et énergie
            // ============================================================

            [
                'title' => 'Travail, énergie cinétique et énergie potentielle',
                'description' => 'Application des théorèmes énergétiques aux systèmes mécaniques.',
                'questions' => [

                    [
                        'question' => 'Une force de 15 N agit dans le même sens qu’un déplacement de 4 m. Quel est son travail ?',
                        'choices' => [
                            ['choice_text' => '60 J', 'is_correct' => true],
                            ['choice_text' => '19 J', 'is_correct' => false],
                            ['choice_text' => '11 J', 'is_correct' => false],
                            ['choice_text' => '3,75 J', 'is_correct' => false],
                        ],
                        'explanation' => 'W = Fd cos(0°) = 15 × 4 = 60 J.',
                    ],

                    [
                        'question' => 'Une force de frottement de 10 N agit sur un objet qui se déplace de 6 m dans le sens opposé. Quel est le travail du frottement ?',
                        'choices' => [
                            ['choice_text' => '-60 J', 'is_correct' => true],
                            ['choice_text' => '60 J', 'is_correct' => false],
                            ['choice_text' => '-16 J', 'is_correct' => false],
                            ['choice_text' => '0 J', 'is_correct' => false],
                        ],
                        'explanation' => 'L’angle vaut 180°, donc W = Fd cos(180°) = -10 × 6 = -60 J.',
                    ],

                    [
                        'question' => 'Un objet de 4 kg se déplace à 5 m/s. Quelle est son énergie cinétique ?',
                        'choices' => [
                            ['choice_text' => '50 J', 'is_correct' => true],
                            ['choice_text' => '20 J', 'is_correct' => false],
                            ['choice_text' => '100 J', 'is_correct' => false],
                            ['choice_text' => '10 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Ec = 1/2 mv² = 1/2 × 4 × 25 = 50 J.',
                    ],

                    [
                        'question' => 'Si la vitesse d’un objet est multipliée par trois, son énergie cinétique est multipliée par...',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie cinétique est proportionnelle à v². Un facteur 3 sur la vitesse donne donc un facteur 9 sur Ec.',
                    ],

                    [
                        'question' => 'Un objet de 3 kg est élevé de 4 m près de la surface terrestre. Avec g = 9,8 m/s², de combien augmente son énergie potentielle gravitationnelle ?',
                        'choices' => [
                            ['choice_text' => '117,6 J', 'is_correct' => true],
                            ['choice_text' => '29,4 J', 'is_correct' => false],
                            ['choice_text' => '39,2 J', 'is_correct' => false],
                            ['choice_text' => '12 J', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔEp = mgΔh = 3 × 9,8 × 4 = 117,6 J.',
                    ],

                    [
                        'question' => 'Lorsqu’un objet descend sans frottements depuis une hauteur h, quelle transformation énergétique est attendue ?',
                        'choices' => [
                            ['choice_text' => 'Une diminution de l’énergie potentielle et une augmentation de l’énergie cinétique', 'is_correct' => true],
                            ['choice_text' => 'Une diminution simultanée des deux énergies', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation de l’énergie potentielle uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une disparition de toute énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans pertes, l’énergie mécanique reste constante : la diminution d’Ep se transforme en augmentation d’Ec.',
                    ],

                    [
                        'question' => 'Le théorème de l’énergie cinétique affirme que la variation d’énergie cinétique est égale...',
                        'choices' => [
                            ['choice_text' => 'Au travail de la résultante des forces', 'is_correct' => true],
                            ['choice_text' => 'À la somme des masses', 'is_correct' => false],
                            ['choice_text' => 'À la vitesse finale uniquement', 'is_correct' => false],
                            ['choice_text' => 'Au produit masse × temps', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔEc = Wtotal, où Wtotal est le travail de la résultante des forces appliquées.',
                    ],

                    [
                        'question' => 'Un bloc glisse sur une surface horizontale avec frottement. Quelle forme d’énergie augmente généralement en raison du frottement ?',
                        'choices' => [
                            ['choice_text' => L’énergie thermique interne', 'is_correct' => true],
                            ['choice_text' => 'L’énergie potentielle gravitationnelle', 'is_correct' => false],
                            ['choice_text' => 'L’énergie cinétique totale sans aucune perte', 'is_correct' => false],
                            ['choice_text' => 'L’énergie potentielle élastique nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le frottement transforme une partie de l’énergie mécanique en énergie interne, notamment sous forme thermique.',
                    ],

                    [
                        'question' => 'Pourquoi l’énergie mécanique n’est-elle pas toujours conservée dans un système réel ?',
                        'choices' => [
                            ['choice_text' => 'Des forces dissipatives peuvent transférer de l’énergie mécanique vers d’autres formes', 'is_correct' => true],
                            ['choice_text' => 'La conservation de l’énergie est fausse', 'is_correct' => false],
                            ['choice_text' => 'La masse disparaît toujours', 'is_correct' => false],
                            ['choice_text' => 'La gravité ne conserve jamais l’énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie totale se conserve, mais l’énergie mécanique peut diminuer lorsqu’il existe des forces dissipatives.',
                    ],

                    [
                        'question' => 'Un ressort idéal est comprimé puis relâché sur une surface sans frottement. L’énergie emmagasinée initialement dans le ressort devient principalement...',
                        'choices' => [
                            ['choice_text' => 'De l’énergie cinétique du système', 'is_correct' => true],
                            ['choice_text' => 'De l’énergie thermique uniquement', 'is_correct' => false],
                            ['choice_text' => 'De la masse supplémentaire', 'is_correct' => false],
                            ['choice_text' => 'De la charge électrique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie potentielle élastique du ressort se transforme en énergie cinétique lorsque le ressort se détend.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Quantité de mouvement et collisions
            // ============================================================

            [
                'title' => 'Quantité de mouvement et collisions',
                'description' => 'Application de la conservation de la quantité de mouvement aux collisions et interactions mécaniques.',
                'questions' => [

                    [
                        'question' => 'Un objet de 5 kg se déplace à 4 m/s. Quelle est sa quantité de mouvement ?',
                        'choices' => [
                            ['choice_text' => '20 kg·m/s', 'is_correct' => true],
                            ['choice_text' => '9 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '1,25 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '25 kg·m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'p = mv = 5 × 4 = 20 kg·m/s.',
                    ],

                    [
                        'question' => 'Un objet de 2 kg se déplace à 6 m/s et entre en collision parfaitement inélastique avec un objet de 4 kg au repos. Quelle est leur vitesse commune après le choc ?',
                        'choices' => [
                            ['choice_text' => '2 m/s', 'is_correct' => true],
                            ['choice_text' => '3 m/s', 'is_correct' => false],
                            ['choice_text' => '6 m/s', 'is_correct' => false],
                            ['choice_text' => '12 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Conservation de p : 2×6 = (2+4)v, donc v = 12/6 = 2 m/s.',
                    ],

                    [
                        'question' => 'Pourquoi l’énergie cinétique n’est-elle pas nécessairement conservée lors d’une collision parfaitement inélastique ?',
                        'choices' => [
                            ['choice_text' => Une partie est transformée en déformation, chaleur, son ou autres formes d’énergie', 'is_correct' => true],
                            ['choice_text' => 'Parce que la conservation de l’énergie est fausse', 'is_correct' => false],
                            ['choice_text' => 'Parce que la quantité de mouvement disparaît', 'is_correct' => false],
                            ['choice_text' => 'Parce que la masse totale devient toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie totale se conserve, mais l’énergie cinétique peut être convertie en d’autres formes lors d’une collision inélastique.',
                    ],

                    [
                        'question' => 'Deux objets initialement au repos explosent en deux fragments. Quel est le moment linéaire total des deux fragments si le système est isolé ?',
                        'choices' => [
                            ['choice_text' => 'Nul', 'is_correct' => true],
                            ['choice_text' => 'Toujours positif', 'is_correct' => false],
                            ['choice_text' => 'Toujours égal à la masse totale', 'is_correct' => false],
                            ['choice_text' => 'Infini', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantité de mouvement initiale est nulle. Elle reste donc nulle après l’explosion.',
                    ],

                    [
                        'question' => 'Un objet reçoit une impulsion de 15 N·s. Quelle est la variation de sa quantité de mouvement ?',
                        'choices' => [
                            ['choice_text' => '15 kg·m/s', 'is_correct' => true],
                            ['choice_text' => '1 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '30 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '225 kg·m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'L’impulsion J est égale à la variation de quantité de mouvement : J = Δp.',
                    ],

                    [
                        'question' => 'Pourquoi augmenter la durée d’un choc peut-il réduire la force moyenne subie par un objet pour une même variation de quantité de mouvement ?',
                        'choices' => [
                            ['choice_text' => Parce que Fmoy Δt = Δp', 'is_correct' => true],
                            ['choice_text' => 'Parce que la quantité de mouvement devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Parce que la masse diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’énergie cinétique augmente toujours', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une variation de quantité de mouvement fixée, une durée d’interaction plus longue donne une force moyenne plus faible.',
                    ],

                    [
                        'question' => 'Deux patineurs se repoussent. Le patineur A a une masse deux fois supérieure à celle de B. En négligeant les forces extérieures, leurs quantités de mouvement ont...',
                        'choices' => [
                            ['choice_text' => La même norme et des sens opposés', 'is_correct' => true],
                            ['choice_text' => 'Une norme deux fois supérieure pour A', 'is_correct' => false],
                            ['choice_text' => 'Une norme deux fois supérieure pour B', 'is_correct' => false],
                            ['choice_text' => 'Toutes deux une norme nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système part du repos et conserve une quantité de mouvement totale nulle. Les deux quantités de mouvement finales sont donc opposées et de même norme, même si les vitesses sont différentes.',
                    ],

                    [
                        'question' => 'Dans la situation précédente, quel patineur possède la plus grande vitesse ?',
                        'choices' => [
                            ['choice_text' => Le patineur B, de plus faible masse', 'is_correct' => true],
                            ['choice_text' => 'Le patineur A, de plus grande masse', 'is_correct' => false],
                            ['choice_text' => 'Les deux ont toujours la même vitesse', 'is_correct' => false],
                            ['choice_text' => 'Impossible à déterminer sans connaître le signe de la masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme les normes des quantités de mouvement sont égales, mv est constant. Le corps de plus faible masse doit donc avoir une vitesse de norme plus grande.',
                    ],

                    [
                        'question' => 'Lors d’une collision élastique idéale, quelles grandeurs sont conservées dans un système isolé ?',
                        'choices' => [
                            ['choice_text' => 'La quantité de mouvement et l’énergie cinétique', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la force', 'is_correct' => false],
                            ['choice_text' => 'Uniquement l’énergie potentielle', 'is_correct' => false],
                            ['choice_text' => 'La température de chaque objet individuellement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une collision élastique idéale conserve simultanément la quantité de mouvement totale et l’énergie cinétique totale.',
                    ],

                    [
                        'question' => 'Pourquoi faut-il utiliser les vecteurs plutôt que seulement les valeurs scalaires lors de l’analyse d’une collision à deux dimensions ?',
                        'choices' => [
                            ['choice_text' => La quantité de mouvement possède une direction et doit être conservée vectoriellement', 'is_correct' => true],
                            ['choice_text' => 'La masse devient une grandeur vectorielle', 'is_correct' => false],
                            ['choice_text' => 'Les vitesses sont toujours scalaires dans deux dimensions', 'is_correct' => false],
                            ['choice_text' => 'L’énergie cinétique possède toujours une direction', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantité de mouvement est vectorielle. Sa conservation doit donc être appliquée séparément selon les directions pertinentes.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Rotation
            // ============================================================

            [
                'title' => 'Cinématique et dynamique de rotation',
                'description' => 'Introduction aux grandeurs angulaires, aux moments de force et à la dynamique des solides en rotation.',
                'questions' => [

                    [
                        'question' => 'Quelle grandeur décrit la rapidité de rotation d’un objet ?',
                        'choices' => [
                            ['choice_text' => La vitesse angulaire', 'is_correct' => true],
                            ['choice_text' => 'La force normale', 'is_correct' => false],
                            ['choice_text' => 'La pression', 'is_correct' => false],
                            ['choice_text' => 'La masse volumique', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse angulaire ω mesure la variation de la position angulaire par unité de temps.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la vitesse angulaire ?',
                        'choices' => [
                            ['choice_text' => 'rad/s', 'is_correct' => true],
                            ['choice_text' => 'm/s', 'is_correct' => false],
                            ['choice_text' => 'N·m', 'is_correct' => false],
                            ['choice_text' => 'rad/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse angulaire s’exprime en radians par seconde.',
                    ],

                    [
                        'question' => 'Un disque tourne à 2 tours par seconde. Quelle est sa fréquence de rotation ?',
                        'choices' => [
                            ['choice_text' => '2 Hz', 'is_correct' => true],
                            ['choice_text' => '4 Hz', 'is_correct' => false],
                            ['choice_text' => '0,5 Hz', 'is_correct' => false],
                            ['choice_text' => '2π Hz', 'is_correct' => false],
                        ],
                        'explanation' => 'Un tour par seconde correspond à 1 Hz. Donc 2 tours/s = 2 Hz.',
                    ],

                    [
                        'question' => 'Quelle relation relie vitesse linéaire tangentielle v, rayon r et vitesse angulaire ω ?',
                        'choices' => [
                            ['choice_text' => 'v = rω', 'is_correct' => true],
                            ['choice_text' => 'v = ω/r', 'is_correct' => false],
                            ['choice_text' => 'v = r/ω', 'is_correct' => false],
                            ['choice_text' => 'v = r + ω', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse tangentielle est v = rω.',
                    ],

                    [
                        'question' => 'Un point situé à deux fois plus de distance de l’axe qu’un autre, sur un disque en rotation avec la même ω, possède une vitesse tangentielle...',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => true],
                            ['choice_text' => 'Identique', 'is_correct' => false],
                            ['choice_text' => 'Deux fois plus faible', 'is_correct' => false],
                            ['choice_text' => 'Quatre fois plus grande', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme v = rω, doubler r à ω constant double la vitesse tangentielle.',
                    ],

                    [
                        'question' => 'Un couple résultant de 12 N·m agit sur un moment d’inertie de 4 kg·m². Quelle est l’accélération angulaire ?',
                        'choices' => [
                            ['choice_text' => '3 rad/s²', 'is_correct' => true],
                            ['choice_text' => '48 rad/s²', 'is_correct' => false],
                            ['choice_text' => '0,33 rad/s²', 'is_correct' => false],
                            ['choice_text' => '16 rad/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon τ = Iα, α = τ/I = 12/4 = 3 rad/s².',
                    ],

                    [
                        'question' => 'Pourquoi la masse est-elle répartie par rapport à l’axe dans le moment d’inertie ?',
                        'choices' => [
                            ['choice_text' => Les masses éloignées de l’axe contribuent davantage à l’inertie rotationnelle', 'is_correct' => true],
                            ['choice_text' => 'La distance à l’axe n’a aucun effet', 'is_correct' => false],
                            ['choice_text' => 'Le moment d’inertie dépend uniquement du volume', 'is_correct' => false],
                            ['choice_text' => 'L’axe n’intervient que dans la translation', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des masses ponctuelles, I = Σmr². Une masse située plus loin de l’axe contribue donc davantage.',
                    ],

                    [
                        'question' => 'Le moment d’une force par rapport à un axe est nul si la ligne d’action de la force...',
                        'choices' => [
                            ['choice_text' => 'Passe par l’axe', 'is_correct' => true],
                            ['choice_text' => 'Est perpendiculaire à l’axe et éloignée de celui-ci', 'is_correct' => false],
                            ['choice_text' => 'Possède toujours une grande norme', 'is_correct' => false],
                            ['choice_text' => 'Est horizontale dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Si le bras de levier est nul, la force ne produit pas de moment par rapport à cet axe.',
                    ],

                    [
                        'question' => 'Un volant d’inertie tourne sans couple extérieur résultant. Quelle grandeur rotationnelle se conserve idéalement ?',
                        'choices' => [
                            ['choice_text' => Le moment cinétique', 'is_correct' => true],
                            ['choice_text' => 'La pression', 'is_correct' => false],
                            ['choice_text' => 'La température', 'is_correct' => false],
                            ['choice_text' => 'La puissance dissipée', 'is_correct' => false],
                        ],
                        'explanation' => 'En l’absence de moment extérieur résultant, le moment cinétique se conserve.',
                    ],

                    [
                        'question' => 'Un disque ralentit sous l’action d’un couple résistif constant. Quelle grandeur angulaire est alors constante ?',
                        'choices' => [
                            ['choice_text' => L’accélération angulaire', 'is_correct' => true],
                            ['choice_text' => 'La vitesse angulaire', 'is_correct' => false],
                            ['choice_text' => 'L’angle parcouru', 'is_correct' => false],
                            ['choice_text' => 'Le moment d’inertie nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un couple résultant constant et un moment d’inertie constant, α = τ/I est constant.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Gravitation et orbites
            // ============================================================

            [
                'title' => 'Gravitation et dynamique orbitale',
                'description' => 'Application de la gravitation newtonienne aux satellites, aux orbites et aux champs gravitationnels.',
                'questions' => [

                    [
                        'question' => 'Quelle expression donne la force gravitationnelle entre deux masses ponctuelles m1 et m2 séparées par une distance r ?',
                        'choices' => [
                            ['choice_text' => 'F = Gm1m2/r²', 'is_correct' => true],
                            ['choice_text' => 'F = Gm1m2/r', 'is_correct' => false],
                            ['choice_text' => 'F = Gr²/(m1m2)', 'is_correct' => false],
                            ['choice_text' => 'F = G(m1+m2)/r', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de gravitation universelle de Newton donne F = Gm1m2/r².',
                    ],

                    [
                        'question' => 'Si la distance entre deux masses est multipliée par trois, la force gravitationnelle est multipliée par...',
                        'choices' => [
                            ['choice_text' => '1/9', 'is_correct' => true],
                            ['choice_text' => '1/3', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'La force varie comme 1/r². Multiplier r par 3 divise donc la force par 9.',
                    ],

                    [
                        'question' => 'Pour une orbite circulaire de rayon r autour d’une masse M, quelle expression donne la vitesse orbitale ?',
                        'choices' => [
                            ['choice_text' => 'v = √(GM/r)', 'is_correct' => true],
                            ['choice_text' => 'v = GM/r', 'is_correct' => false],
                            ['choice_text' => 'v = √(Gr/M)', 'is_correct' => false],
                            ['choice_text' => 'v = r/GM', 'is_correct' => false],
                        ],
                        'explanation' => 'L’égalité entre force gravitationnelle et force centripète donne v²/r = GM/r², donc v = √(GM/r).',
                    ],

                    [
                        'question' => 'Dans une orbite circulaire autour d’un même astre, si le rayon orbital augmente, la vitesse circulaire...',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente', 'is_correct' => false],
                            ['choice_text' => 'Reste constante', 'is_correct' => false],
                            ['choice_text' => 'Devient toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'v = √(GM/r), donc la vitesse diminue lorsque le rayon augmente.',
                    ],

                    [
                        'question' => 'Un satellite en orbite circulaire possède une accélération dirigée...',
                        'choices' => [
                            ['choice_text' => 'Vers le centre de l’orbite', 'is_correct' => true],
                            ['choice_text' => 'Dans le sens de sa vitesse', 'is_correct' => false],
                            ['choice_text' => 'À l’opposé du centre', 'is_correct' => false],
                            ['choice_text' => 'Perpendiculairement au plan orbital', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération centripète est dirigée vers le centre et est fournie ici par la gravitation.',
                    ],

                    [
                        'question' => 'Pourquoi un astronaute en orbite peut-il ressentir une sensation d’apesanteur alors que la gravité n’est pas nulle ?',
                        'choices' => [
                            ['choice_text' => L’astronaute et son vaisseau sont en chute libre permanente autour de la Terre', 'is_correct' => true],
                            ['choice_text' => 'La Terre n’exerce plus aucune gravité', 'is_correct' => false],
                            ['choice_text' => 'Sa masse est devenue nulle', 'is_correct' => false],
                            ['choice_text' => 'Son accélération est nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'L’orbite correspond à une chute libre courbée par la gravitation. L’absence de support normal produit la sensation d’apesanteur.',
                    ],

                    [
                        'question' => 'Quelle grandeur caractérise directement l’intensité du champ gravitationnel en un point ?',
                        'choices' => [
                            ['choice_text' => 'La force gravitationnelle par unité de masse', 'is_correct' => true],
                            ['choice_text' => 'La masse totale de l’univers', 'is_correct' => false],
                            ['choice_text' => 'L’énergie cinétique par unité de temps', 'is_correct' => false],
                            ['choice_text' => 'La vitesse orbitale uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ gravitationnel g est défini comme la force gravitationnelle par unité de masse test.',
                    ],

                    [
                        'question' => 'Si on double la masse de l’astre central tout en conservant le même rayon orbital, la vitesse circulaire idéale est multipliée par...',
                        'choices' => [
                            ['choice_text' => '√2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1/√2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse vérifie v = √(GM/r). Doubler M multiplie donc v par √2.',
                    ],

                    [
                        'question' => 'Pour un satellite en orbite circulaire, quelle force fournit la force centripète ?',
                        'choices' => [
                            ['choice_text' => La force gravitationnelle', 'is_correct' => true],
                            ['choice_text' => Une force centripète indépendante ajoutée artificiellement', 'is_correct' => false],
                            ['choice_text' => La force de frottement atmosphérique dans tous les cas', 'is_correct' => false],
                            ['choice_text' => La poussée d’Archimède', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une orbite gravitationnelle idéale, c’est la gravitation qui fournit l’accélération centripète.',
                    ],

                    [
                        'question' => 'Pourquoi la période orbitale d’un satellite augmente-t-elle généralement lorsque son rayon orbital augmente ?',
                        'choices' => [
                            ['choice_text' => Le satellite parcourt une orbite plus grande tout en se déplaçant à une vitesse circulaire plus faible', 'is_correct' => true],
                            ['choice_text' => La gravité augmente avec le rayon', 'is_correct' => false],
                            ['choice_text' => La vitesse orbitale augmente toujours avec le rayon', 'is_correct' => false],
                            ['choice_text' => La masse du satellite double nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'La circonférence augmente comme r tandis que la vitesse v diminue comme 1/√r, donc la période T = 2πr/v augmente avec r.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Oscillations et mouvement harmonique
            // ============================================================

            [
                'title' => 'Oscillations et mouvement harmonique simple',
                'description' => 'Étude des oscillateurs masse-ressort, pendules et échanges d’énergie périodiques.',
                'questions' => [

                    [
                        'question' => 'Quelle équation caractérise un oscillateur harmonique simple idéal de position x ?',
                        'choices' => [
                            ['choice_text' => ẍ + ω²x = 0', 'is_correct' => true],
                            ['choice_text' => 'ẍ - ωx = 0', 'is_correct' => false],
                            ['choice_text' => 'ẋ + ω²x = 0', 'is_correct' => false],
                            ['choice_text' => 'x + ω² = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation différentielle de l’oscillateur harmonique simple est ẍ + ω²x = 0.',
                    ],

                    [
                        'question' => 'Pour un système masse-ressort idéal, la pulsation propre vaut...',
                        'choices' => [
                            ['choice_text' => 'ω = √(k/m)', 'is_correct' => true],
                            ['choice_text' => 'ω = √(m/k)', 'is_correct' => false],
                            ['choice_text' => 'ω = k/m', 'is_correct' => false],
                            ['choice_text' => 'ω = m/k', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Hooke et la deuxième loi de Newton donnent ω² = k/m.',
                    ],

                    [
                        'question' => 'Si la raideur d’un ressort est multipliée par quatre avec la même masse, la fréquence propre est...',
                        'choices' => [
                            ['choice_text' => 'Multipliée par deux', 'is_correct' => true],
                            ['choice_text' => 'Multipliée par quatre', 'is_correct' => false],
                            ['choice_text' => 'Divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'f = (1/2π)√(k/m). Multiplier k par quatre multiplie f par deux.',
                    ],

                    [
                        'question' => 'Pour un oscillateur harmonique idéal, à quelle position la vitesse est-elle maximale en valeur absolue ?',
                        'choices' => [
                            ['choice_text' => 'À la position d’équilibre', 'is_correct' => true],
                            ['choice_text' => 'Aux extrémités', 'is_correct' => false],
                            ['choice_text' => 'À l’amplitude maximale', 'is_correct' => false],
                            ['choice_text' => 'La vitesse est constante', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’équilibre, l’énergie potentielle est minimale et l’énergie cinétique est maximale.',
                    ],

                    [
                        'question' => 'Aux extrémités du mouvement d’un oscillateur harmonique idéal, la vitesse instantanée est...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Maximale', 'is_correct' => false],
                            ['choice_text' => 'Infinie', 'is_correct' => false],
                            ['choice_text' => 'Toujours égale à l’accélération', 'is_correct' => false],
                        ],
                        'explanation' => 'Aux positions extrêmes, le mouvement change de sens ; la vitesse instantanée est donc nulle.',
                    ],

                    [
                        'question' => 'Pour un pendule simple aux petites oscillations, la période dépend principalement de...',
                        'choices' => [
                            ['choice_text' => 'La longueur du pendule et g', 'is_correct' => true],
                            ['choice_text' => 'La masse uniquement', 'is_correct' => false],
                            ['choice_text' => 'La couleur du pendule', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de rotation de la Terre uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Aux petites amplitudes, T = 2π√(L/g). La masse n’intervient pas.',
                    ],

                    [
                        'question' => 'Si la longueur d’un pendule simple est multipliée par neuf, sa période aux petites oscillations devient...',
                        'choices' => [
                            ['choice_text' => 'Trois fois plus grande', 'is_correct' => true],
                            ['choice_text' => 'Neuf fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Trois fois plus petite', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'La période est proportionnelle à √L. √9 = 3.',
                    ],

                    [
                        'question' => 'Dans un oscillateur amorti, l’amplitude diminue avec le temps parce que...',
                        'choices' => [
                            ['choice_text' => 'L’énergie mécanique est dissipée', 'is_correct' => true],
                            ['choice_text' => 'La masse diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'La gravité disparaît', 'is_correct' => false],
                            ['choice_text' => 'La fréquence devient nécessairement nulle immédiatement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amortissement dissipe de l’énergie mécanique, ce qui réduit progressivement l’amplitude.',
                    ],

                    [
                        'question' => 'Qu’est-ce qu’une résonance mécanique ?',
                        'choices' => [
                            ['choice_text' => Une réponse de grande amplitude lorsque la fréquence d’excitation est proche d’une fréquence propre', 'is_correct' => true],
                            ['choice_text' => 'Une disparition obligatoire des oscillations', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation de masse', 'is_correct' => false],
                            ['choice_text' => 'Une force toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La résonance se produit lorsque l’excitation périodique est proche d’une fréquence naturelle du système.',
                    ],

                    [
                        'question' => 'Pour un oscillateur masse-ressort idéal, si la masse est multipliée par quatre, la période est...',
                        'choices' => [
                            ['choice_text' => 'Multipliée par deux', 'is_correct' => true],
                            ['choice_text' => 'Multipliée par quatre', 'is_correct' => false],
                            ['choice_text' => 'Divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'T = 2π√(m/k). Multiplier m par quatre multiplie T par deux.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Statique et dynamique appliquée
            // ============================================================

            [
                'title' => 'Équilibre, statique et applications mécaniques',
                'description' => 'Application des conditions d’équilibre aux poutres, leviers et systèmes mécaniques simples.',
                'questions' => [

                    [
                        'question' => 'Quelles sont les deux conditions générales d’équilibre statique d’un solide rigide dans un plan ?',
                        'choices' => [
                            ['choice_text' => ΣF = 0 et Στ = 0', 'is_correct' => true],
                            ['choice_text' => 'ΣF = mg uniquement', 'is_correct' => false],
                            ['choice_text' => 'Στ = ma uniquement', 'is_correct' => false],
                            ['choice_text' => 'ΣF = constante et Στ = constante', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équilibre statique exige l’annulation de la résultante des forces et de la résultante des moments.',
                    ],

                    [
                        'question' => 'Une poutre horizontale est soutenue à ses deux extrémités et porte une charge centrée. Dans une configuration symétrique, les réactions verticales sont...',
                        'choices' => [
                            ['choice_text' => 'Égales et chacune vaut la moitié de la charge', 'is_correct' => true],
                            ['choice_text' => 'Toutes deux nulles', 'is_correct' => false],
                            ['choice_text' => 'Une seule supporte toute la charge par principe', 'is_correct' => false],
                            ['choice_text' => 'Opposées à la charge sans somme nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie et l’équilibre des moments imposent des réactions égales. Leur somme doit équilibrer la charge.',
                    ],

                    [
                        'question' => 'Une force de 50 N est appliquée perpendiculairement à une barre à 0,4 m de son axe. Quel est le moment de cette force ?',
                        'choices' => [
                            ['choice_text' => '20 N·m', 'is_correct' => true],
                            ['choice_text' => '125 N·m', 'is_correct' => false],
                            ['choice_text' => '50,4 N·m', 'is_correct' => false],
                            ['choice_text' => '0,8 N·m', 'is_correct' => false],
                        ],
                        'explanation' => 'τ = rF = 0,4 × 50 = 20 N·m.',
                    ],

                    [
                        'question' => 'Une personne veut réduire de moitié la force nécessaire pour produire un même moment avec un levier. Que peut-elle faire, idéalement ?',
                        'choices' => [
                            ['choice_text' => Doubler le bras de levier', 'is_correct' => true],
                            ['choice_text' => Diviser le bras de levier par deux', 'is_correct' => false],
                            ['choice_text' => Supprimer le point d’appui', 'is_correct' => false],
                            ['choice_text' => Réduire la masse du levier à zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme τ = rF, doubler r permet de diviser F par deux pour un même moment requis.',
                    ],

                    [
                        'question' => 'Pourquoi le centre de masse est-il utile pour analyser certaines situations mécaniques ?',
                        'choices' => [
                            ['choice_text' => Le mouvement translationnel global d’un système peut être décrit à partir de son centre de masse', 'is_correct' => true],
                            ['choice_text' => Il remplace toujours tous les détails internes du système', 'is_correct' => false],
                            ['choice_text' => Il détermine uniquement la température', 'is_correct' => false],
                            ['choice_text' => Il est toujours situé à l’intérieur de la matière', 'is_correct' => false],
                        ],
                        'explanation' => 'Le centre de masse permet de décrire efficacement le mouvement global d’un système sous l’action de forces extérieures.',
                    ],

                    [
                        'question' => 'Un objet est suspendu par un câble vertical et reste au repos. Si son poids vaut 100 N, la tension du câble vaut idéalement...',
                        'choices' => [
                            ['choice_text' => '100 N', 'is_correct' => true],
                            ['choice_text' => '0 N', 'is_correct' => false],
                            ['choice_text' => '50 N', 'is_correct' => false],
                            ['choice_text' => '200 N', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’équilibre vertical, la tension compense exactement le poids.',
                    ],

                    [
                        'question' => 'Pour qu’un objet rigide ne bascule pas autour d’un bord, pourquoi la position de sa projection du centre de masse est-elle importante ?',
                        'choices' => [
                            ['choice_text' => Une projection située à l’intérieur de la base de support favorise l’équilibre statique', 'is_correct' => true],
                            ['choice_text' => 'Le centre de masse doit toujours être au-dessus d’un coin', 'is_correct' => false],
                            ['choice_text' => 'La masse n’a aucun rapport avec le basculement', 'is_correct' => false],
                            ['choice_text' => 'La hauteur du centre de masse n’a jamais d’importance', 'is_correct' => false],
                        ],
                        'explanation' => 'La stabilité dépend notamment de la position de la projection verticale du centre de masse par rapport à la base de support.',
                    ],

                    [
                        'question' => 'Une échelle repose contre un mur et est en équilibre statique. Pourquoi les forces de contact au sol et au mur doivent-elles être prises en compte ?',
                        'choices' => [
                            ['choice_text' => Elles contribuent à équilibrer à la fois les forces et les moments', 'is_correct' => true],
                            ['choice_text' => 'Les contacts n’exercent jamais de force', 'is_correct' => false],
                            ['choice_text' => 'Seul le poids intervient dans l’équilibre', 'is_correct' => false],
                            ['choice_text' => 'Les moments ne dépendent pas des forces de contact', 'is_correct' => false],
                        ],
                        'explanation' => 'Les réactions aux contacts et les éventuels frottements participent aux conditions d’équilibre translationnel et rotationnel.',
                    ],

                    [
                        'question' => 'Si une force de 30 N est appliquée à 2 m d’un axe avec un angle de 30° entre la force et le rayon, quel est le moment en norme ?',
                        'choices' => [
                            ['choice_text' => '30 N·m', 'is_correct' => true],
                            ['choice_text' => '60 N·m', 'is_correct' => false],
                            ['choice_text' => '15 N·m', 'is_correct' => false],
                            ['choice_text' => '52 N·m', 'is_correct' => false],
                        ],
                        'explanation' => 'τ = rF sin(θ) = 2 × 30 × sin(30°) = 60 × 0,5 = 30 N·m.',
                    ],

                    [
                        'question' => 'Une structure est soumise à des forces qui donnent une résultante nulle mais un moment résultant non nul. Quelle conclusion est correcte ?',
                        'choices' => [
                            ['choice_text' => Elle peut avoir une tendance à tourner et n’est donc pas en équilibre statique complet', 'is_correct' => true],
                            ['choice_text' => 'Elle est nécessairement en équilibre complet', 'is_correct' => false],
                            ['choice_text' => 'Elle doit accélérer uniquement en translation', 'is_correct' => false],
                            ['choice_text' => 'Son énergie cinétique est nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une résultante des forces nulle ne suffit pas à garantir l’équilibre d’un solide : la somme des moments doit également être nulle.',
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
                    'difficulty' => 'Intermediate',
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

                // Mélange des objets complets pour que is_correct
                // reste attaché à la bonne réponse.
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