<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ClassicalMechanicsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'classical-mechanics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Cinématique vectorielle
            // ============================================================

            [
                'title' => 'Cinématique vectorielle et mouvements complexes',
                'description' => 'Analyse avancée des positions, vitesses et accélérations dans des mouvements à une ou plusieurs dimensions.',
                'questions' => [

                    [
                        'question' => 'La position d’une particule est donnée par r(t) = (3t²)i + (4t)j en unités SI. Quelle est sa vitesse à l’instant t ?',
                        'choices' => [
                            ['choice_text' => 'v(t) = (6t)i + 4j', 'is_correct' => true],
                            ['choice_text' => 'v(t) = (3t)i + 4j', 'is_correct' => false],
                            ['choice_text' => 'v(t) = 6i + 4tj', 'is_correct' => false],
                            ['choice_text' => 'v(t) = (6t²)i + 4j', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse est la dérivée temporelle de la position. On obtient v = dr/dt = (6t)i + 4j.',
                    ],

                    [
                        'question' => 'Pour la même particule r(t) = (3t²)i + (4t)j, quelle est son accélération ?',
                        'choices' => [
                            ['choice_text' => 'a = 6i', 'is_correct' => true],
                            ['choice_text' => 'a = 6ti + 4j', 'is_correct' => false],
                            ['choice_text' => 'a = 3i', 'is_correct' => false],
                            ['choice_text' => 'a = 4j', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de v(t) = (6t)i + 4j donne a = 6i.',
                    ],

                    [
                        'question' => 'Une particule possède une vitesse v = 8i + 6j m/s. Quelle est la norme de sa vitesse ?',
                        'choices' => [
                            ['choice_text' => '10 m/s', 'is_correct' => true],
                            ['choice_text' => '14 m/s', 'is_correct' => false],
                            ['choice_text' => '2 m/s', 'is_correct' => false],
                            ['choice_text' => '48 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'La norme vaut |v| = √(8² + 6²) = √100 = 10 m/s.',
                    ],

                    [
                        'question' => 'Dans un mouvement circulaire uniforme de rayon R et de vitesse v, comment est orientée l’accélération ?',
                        'choices' => [
                            ['choice_text' => 'Vers le centre de la trajectoire', 'is_correct' => true],
                            ['choice_text' => 'Dans le sens de la vitesse', 'is_correct' => false],
                            ['choice_text' => 'À l’opposé du centre', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération centripète est radiale et dirigée vers le centre du mouvement circulaire.',
                    ],

                    [
                        'question' => 'Une particule parcourt une trajectoire circulaire de rayon 2 m à une vitesse de 6 m/s. Quelle est la norme de son accélération centripète ?',
                        'choices' => [
                            ['choice_text' => '18 m/s²', 'is_correct' => true],
                            ['choice_text' => '12 m/s²', 'is_correct' => false],
                            ['choice_text' => '3 m/s²', 'is_correct' => false],
                            ['choice_text' => '36 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a_c = v²/R = 36/2 = 18 m/s².',
                    ],

                    [
                        'question' => 'Un projectile idéal est lancé avec une composante verticale initiale de 20 m/s. Avec g = 10 m/s², quelle est sa vitesse verticale après 1,5 s ?',
                        'choices' => [
                            ['choice_text' => '5 m/s vers le haut', 'is_correct' => true],
                            ['choice_text' => '15 m/s vers le haut', 'is_correct' => false],
                            ['choice_text' => '5 m/s vers le bas', 'is_correct' => false],
                            ['choice_text' => '35 m/s vers le haut', 'is_correct' => false],
                        ],
                        'explanation' => 'vy = v0y - gt = 20 - 10 × 1,5 = 5 m/s vers le haut.',
                    ],

                    [
                        'question' => 'Au sommet de la trajectoire d’un projectile sans résistance de l’air, quelle affirmation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'La composante verticale de la vitesse est nulle mais l’accélération ne l’est pas', 'is_correct' => true],
                            ['choice_text' => 'La vitesse et l’accélération sont toutes deux nulles', 'is_correct' => false],
                            ['choice_text' => 'L’accélération devient horizontale', 'is_correct' => false],
                            ['choice_text' => 'La vitesse horizontale devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Au sommet, vy = 0, mais ax = 0 et ay = -g restent valables. La composante horizontale de la vitesse subsiste.',
                    ],

                    [
                        'question' => 'Une particule a une accélération constante a = 4i - 3j m/s². Quelle est la norme de son accélération ?',
                        'choices' => [
                            ['choice_text' => '5 m/s²', 'is_correct' => true],
                            ['choice_text' => '7 m/s²', 'is_correct' => false],
                            ['choice_text' => '1 m/s²', 'is_correct' => false],
                            ['choice_text' => '12 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => '|a| = √(4² + (-3)²) = √25 = 5 m/s².',
                    ],

                    [
                        'question' => 'Dans un mouvement curviligne, quelle décomposition de l’accélération est particulièrement utile ?',
                        'choices' => [
                            ['choice_text' => 'Une composante tangentielle et une composante normale', 'is_correct' => true],
                            ['choice_text' => 'Uniquement une composante verticale', 'is_correct' => false],
                            ['choice_text' => 'Uniquement une composante horizontale', 'is_correct' => false],
                            ['choice_text' => 'Une composante thermique et une composante mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération tangentielle modifie la norme de la vitesse tandis que l’accélération normale modifie sa direction.',
                    ],

                    [
                        'question' => 'Une particule se déplace avec une vitesse constante en norme sur une trajectoire courbe. Quelle composante de son accélération peut rester non nulle ?',
                        'choices' => [
                            ['choice_text' => 'La composante normale', 'is_correct' => true],
                            ['choice_text' => 'La composante tangentielle uniquement', 'is_correct' => false],
                            ['choice_text' => 'Aucune composante', 'is_correct' => false],
                            ['choice_text' => 'Une composante parallèle à la vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Une vitesse de norme constante implique une accélération tangentielle nulle, mais une accélération normale peut subsister si la trajectoire est courbe.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Lois de Newton et référentiels
            // ============================================================

            [
                'title' => 'Dynamique newtonienne et référentiels',
                'description' => 'Application des lois de Newton dans différents référentiels et systèmes soumis à plusieurs interactions.',
                'questions' => [

                    [
                        'question' => 'Dans quel type de référentiel les lois de Newton s’appliquent-elles sous leur forme usuelle sans introduire de forces d’inertie ?',
                        'choices' => [
                            ['choice_text' => 'Dans un référentiel inertiel', 'is_correct' => true],
                            ['choice_text' => 'Dans tout référentiel accéléré', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans un référentiel en rotation', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans un référentiel lié à un fluide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lois de Newton prennent leur forme simple dans les référentiels inertiels, c’est-à-dire non accélérés par rapport à un référentiel inertiel.',
                    ],

                    [
                        'question' => 'Une masse de 5 kg subit une force résultante de 25 N. Quelle est son accélération ?',
                        'choices' => [
                            ['choice_text' => '5 m/s²', 'is_correct' => true],
                            ['choice_text' => '125 m/s²', 'is_correct' => false],
                            ['choice_text' => '20 m/s²', 'is_correct' => false],
                            ['choice_text' => '0,2 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'F = ma, donc a = 25/5 = 5 m/s².',
                    ],

                    [
                        'question' => 'Un bloc de 10 kg est tiré horizontalement par 50 N tandis qu’un frottement de 20 N s’oppose au mouvement. Quelle est l’accélération ?',
                        'choices' => [
                            ['choice_text' => '3 m/s²', 'is_correct' => true],
                            ['choice_text' => '5 m/s²', 'is_correct' => false],
                            ['choice_text' => '7 m/s²', 'is_correct' => false],
                            ['choice_text' => '2 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'La force résultante vaut 50 - 20 = 30 N. Donc a = 30/10 = 3 m/s².',
                    ],

                    [
                        'question' => 'Un objet est en équilibre statique sous trois forces. Quelle propriété doit vérifier leur somme vectorielle ?',
                        'choices' => [
                            ['choice_text' => Elle doit être nulle', 'is_correct' => true],
                            ['choice_text' => Elle doit être maximale', 'is_correct' => false],
                            ['choice_text' => Elle doit être égale au poids deux fois', 'is_correct' => false],
                            ['choice_text' => Elle doit avoir une norme constante non nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équilibre translationnel exige ΣF = 0.',
                    ],

                    [
                        'question' => 'Un ascenseur accélère vers le bas avec une accélération a < g. Comment évolue la réaction normale sur une personne immobile dans la cabine ?',
                        'choices' => [
                            ['choice_text' => Elle devient inférieure au poids', 'is_correct' => true],
                            ['choice_text' => Elle devient supérieure au poids', 'is_correct' => false],
                            ['choice_text' => Elle devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => Elle devient égale à deux fois le poids', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec N - mg = -ma, on obtient N = m(g-a), donc N < mg.',
                    ],

                    [
                        'question' => 'Un bloc de masse m glisse sur un plan incliné avec frottement cinétique μk. Quelle expression donne approximativement la force de frottement ?',
                        'choices' => [
                            ['choice_text' => 'fk = μk N', 'is_correct' => true],
                            ['choice_text' => 'fk = μk mg sinθ dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'fk = mg/μk', 'is_correct' => false],
                            ['choice_text' => 'fk = μk/N', 'is_correct' => false],
                        ],
                        'explanation' => 'Le frottement cinétique est modélisé par fk = μkN, avec N la réaction normale.',
                    ],

                    [
                        'question' => 'Sur un plan incliné sans accélération normale au plan, la réaction normale d’un bloc de masse m vaut...',
                        'choices' => [
                            ['choice_text' => 'mg cosθ', 'is_correct' => true],
                            ['choice_text' => 'mg sinθ', 'is_correct' => false],
                            ['choice_text' => 'mg tanθ', 'is_correct' => false],
                            ['choice_text' => 'mg', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante du poids perpendiculaire au plan vaut mg cosθ, équilibrée par la réaction normale.',
                    ],

                    [
                        'question' => 'Pourquoi les forces d’action-réaction ne doivent-elles pas être additionnées dans le bilan d’un seul objet ?',
                        'choices' => [
                            ['choice_text' => 'Elles s’appliquent à deux objets différents', 'is_correct' => true],
                            ['choice_text' => 'Elles ont toujours des valeurs différentes', 'is_correct' => false],
                            ['choice_text' => 'Elles possèdent toujours le même sens', 'is_correct' => false],
                            ['choice_text' => 'Elles sont toujours nulles', 'is_correct' => false],
                        ],
                        'explanation' => 'Une paire action-réaction relie deux corps. Le bilan d’un seul corps ne contient qu’une des deux forces.',
                    ],

                    [
                        'question' => 'Dans un référentiel en rotation, pourquoi des forces d’inertie peuvent-elles apparaître ?',
                        'choices' => [
                            ['choice_text' => Le référentiel n’est pas inertiel', 'is_correct' => true],
                            ['choice_text' => La masse change nécessairement', 'is_correct' => false],
                            ['choice_text' => Les forces réelles disparaissent', 'is_correct' => false],
                            ['choice_text' => La gravité devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un référentiel non inertiel, des forces fictives ou d’inertie sont introduites pour conserver une forme utilisable des équations de mouvement.',
                    ],

                    [
                        'question' => 'Quelle force d’inertie apparaît notamment dans un référentiel en rotation lorsqu’un objet possède une vitesse relative par rapport au référentiel ?',
                        'choices' => [
                            ['choice_text' => La force de Coriolis', 'is_correct' => true],
                            ['choice_text' => La poussée d’Archimède', 'is_correct' => false],
                            ['choice_text' => La force nucléaire forte', 'is_correct' => false],
                            ['choice_text' => La force électrostatique', 'is_correct' => false],
                        ],
                        'explanation' => 'La force de Coriolis apparaît dans un référentiel en rotation lorsqu’un objet possède une vitesse relative à ce référentiel.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Travail, énergie et potentiels
            // ============================================================

            [
                'title' => 'Énergie mécanique et forces conservatives',
                'description' => 'Analyse énergétique avancée des systèmes mécaniques et des potentiels associés.',
                'questions' => [

                    [
                        'question' => 'Une force conservative possède quelle propriété concernant son travail ?',
                        'choices' => [
                            ['choice_text' => 'Son travail entre deux points est indépendant du chemin suivi', 'is_correct' => true],
                            ['choice_text' => 'Son travail dépend toujours du temps', 'is_correct' => false],
                            ['choice_text' => 'Son travail est toujours négatif', 'is_correct' => false],
                            ['choice_text' => 'Son travail est nécessairement nul entre deux points différents', 'is_correct' => false],
                        ],
                        'explanation' => 'Le travail d’une force conservative dépend uniquement des positions initiale et finale.',
                    ],

                    [
                        'question' => 'Pour une force conservative, le travail sur une trajectoire fermée est...',
                        'choices' => [
                            ['choice_text' => 'Nul', 'is_correct' => true],
                            ['choice_text' => 'Toujours positif', 'is_correct' => false],
                            ['choice_text' => 'Toujours négatif', 'is_correct' => false],
                            ['choice_text' => 'Égal à l’énergie cinétique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intégrale curviligne d’une force conservative sur un contour fermé est nulle.',
                    ],

                    [
                        'question' => 'Un objet de masse 2 kg tombe depuis une hauteur de 10 m sans pertes avec g = 9,8 m/s². Quelle vitesse théorique possède-t-il juste avant l’impact ?',
                        'choices' => [
                            ['choice_text' => Environ 14 m/s', 'is_correct' => true],
                            ['choice_text' => 'Environ 9,8 m/s', 'is_correct' => false],
                            ['choice_text' => 'Environ 19,6 m/s', 'is_correct' => false],
                            ['choice_text' => 'Environ 4,9 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Conservation de l’énergie : mgh = 1/2 mv², donc v = √(2gh) = √196 = 14 m/s.',
                    ],

                    [
                        'question' => 'Le travail net des forces appliquées à une particule est égal à...',
                        'choices' => [
                            ['choice_text' => 'La variation de son énergie cinétique', 'is_correct' => true],
                            ['choice_text' => 'Sa masse multipliée par sa position', 'is_correct' => false],
                            ['choice_text' => 'Son énergie potentielle uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sa quantité de mouvement totale', 'is_correct' => false],
                        ],
                        'explanation' => 'Le théorème de l’énergie cinétique donne ΔEc = Wnet.',
                    ],

                    [
                        'question' => 'Une particule de masse m possède une énergie potentielle U(x) = 1/2 kx². Quelle force lui est associée ?',
                        'choices' => [
                            ['choice_text' => 'F = -kx', 'is_correct' => true],
                            ['choice_text' => 'F = kx', 'is_correct' => false],
                            ['choice_text' => 'F = -1/2 kx²', 'is_correct' => false],
                            ['choice_text' => 'F = k/x', 'is_correct' => false],
                        ],
                        'explanation' => 'F = -dU/dx = -kx, ce qui correspond à la loi de Hooke.',
                    ],

                    [
                        'question' => 'Un potentiel mécanique possède un minimum local en x0. Que peut-on généralement dire de cet équilibre ?',
                        'choices' => [
                            ['choice_text' => Il correspond à un équilibre stable dans le modèle local', 'is_correct' => true],
                            ['choice_text' => Il correspond toujours à un équilibre instable', 'is_correct' => false],
                            ['choice_text' => La force y est maximale', 'is_correct' => false],
                            ['choice_text' => La vitesse y est nécessairement maximale', 'is_correct' => false],
                        ],
                        'explanation' => 'Un minimum local de U correspond à une force nulle et à un équilibre stable pour de petites perturbations.',
                    ],

                    [
                        'question' => 'Si une force non conservative réalise un travail négatif sur un système, l’énergie mécanique du système...',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours constante', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle instantanément', 'is_correct' => false],
                        ],
                        'explanation' => 'Un travail négatif d’une force dissipative ou non conservative réduit l’énergie mécanique, l’énergie étant transférée vers d’autres formes.',
                    ],

                    [
                        'question' => 'Une particule possède une énergie mécanique totale E et une énergie potentielle U(x). Quelle expression donne son énergie cinétique ?',
                        'choices' => [
                            ['choice_text' => 'Ec = E - U(x)', 'is_correct' => true],
                            ['choice_text' => 'Ec = E + U(x)', 'is_correct' => false],
                            ['choice_text' => 'Ec = U(x)/E', 'is_correct' => false],
                            ['choice_text' => 'Ec = EU(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition Em = Ec + U, donc Ec = E - U.',
                    ],

                    [
                        'question' => 'Dans un diagramme d’énergie potentielle, les points de retournement classiques correspondent généralement aux positions où...',
                        'choices' => [
                            ['choice_text' => 'E = U(x)', 'is_correct' => true],
                            ['choice_text' => 'E = 0 indépendamment de U', 'is_correct' => false],
                            ['choice_text' => 'U = -E dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'La masse devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Aux points de retournement, Ec = 0. Comme E = Ec + U, on a donc E = U(x).',
                    ],

                    [
                        'question' => 'Pourquoi les frottements compliquent-ils une analyse basée uniquement sur la conservation de l’énergie mécanique ?',
                        'choices' => [
                            ['choice_text' => Ils transfèrent une partie de l’énergie mécanique vers des formes non mécaniques', 'is_correct' => true],
                            ['choice_text' => 'Ils violent la conservation de l’énergie totale', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent la masse nulle', 'is_correct' => false],
                            ['choice_text' => 'Ils transforment toujours l’énergie mécanique en énergie potentielle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les frottements dissipent de l’énergie mécanique sous forme d’énergie interne, de chaleur ou d’autres formes.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Quantité de mouvement et collisions avancées
            // ============================================================

            [
                'title' => 'Quantité de mouvement et collisions avancées',
                'description' => 'Résolution de collisions unidimensionnelles et analyse des échanges d’énergie et de quantité de mouvement.',
                'questions' => [

                    [
                        'question' => 'Deux masses de 2 kg et 3 kg se déplacent respectivement à 5 m/s et -1 m/s sur une même ligne. Quelle est leur quantité de mouvement totale ?',
                        'choices' => [
                            ['choice_text' => '7 kg·m/s', 'is_correct' => true],
                            ['choice_text' => '13 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '8 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '10 kg·m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'p_tot = 2×5 + 3×(-1) = 10 - 3 = 7 kg·m/s.',
                    ],

                    [
                        'question' => 'Dans un système isolé, une collision conserve nécessairement...',
                        'choices' => [
                            ['choice_text' => 'La quantité de mouvement totale', 'is_correct' => true],
                            ['choice_text' => 'L’énergie cinétique de chaque objet', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de chaque objet', 'is_correct' => false],
                            ['choice_text' => 'La position de chaque objet', 'is_correct' => false],
                        ],
                        'explanation' => 'L’absence de force extérieure résultante implique la conservation de la quantité de mouvement totale.',
                    ],

                    [
                        'question' => 'Dans une collision parfaitement élastique unidimensionnelle, quelles grandeurs sont conservées ?',
                        'choices' => [
                            ['choice_text' => 'La quantité de mouvement et l’énergie cinétique', 'is_correct' => true],
                            ['choice_text' => 'Uniquement l’énergie potentielle', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la vitesse relative', 'is_correct' => false],
                            ['choice_text' => 'La température de chaque objet', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition, une collision parfaitement élastique conserve simultanément quantité de mouvement et énergie cinétique.',
                    ],

                    [
                        'question' => 'Un projectile de masse m explose en deux fragments initialement au repos dans le référentiel du centre de masse. Quelle propriété possède la somme de leurs quantités de mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Elle reste nulle dans ce référentiel', 'is_correct' => true],
                            ['choice_text' => 'Elle devient égale à 2m', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours positive', 'is_correct' => false],
                            ['choice_text' => 'Elle dépend uniquement de la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le référentiel du centre de masse, la quantité de mouvement totale est nulle avant et après l’explosion.',
                    ],

                    [
                        'question' => 'Une impulsion J = 20 N·s agit sur une masse initialement au repos de 4 kg. Quelle vitesse finale obtient-on dans la même direction ?',
                        'choices' => [
                            ['choice_text' => '5 m/s', 'is_correct' => true],
                            ['choice_text' => '80 m/s', 'is_correct' => false],
                            ['choice_text' => '16 m/s', 'is_correct' => false],
                            ['choice_text' => '0,2 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'J = Δp = mv. Donc v = 20/4 = 5 m/s.',
                    ],

                    [
                        'question' => 'Deux corps identiques se déplacent à +4 m/s et -4 m/s avant une collision parfaitement inélastique. Quelle est leur vitesse commune après la collision ?',
                        'choices' => [
                            ['choice_text' => '0 m/s', 'is_correct' => true],
                            ['choice_text' => '4 m/s', 'is_correct' => false],
                            ['choice_text' => '-4 m/s', 'is_correct' => false],
                            ['choice_text' => '8 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantité de mouvement initiale totale est nulle. Les masses identiques restent ensemble, donc leur vitesse commune est nulle.',
                    ],

                    [
                        'question' => 'Lors d’une collision parfaitement inélastique isolée, quelle grandeur est généralement diminuée par la collision ?',
                        'choices' => [
                            ['choice_text' => L’énergie cinétique totale', 'is_correct' => true],
                            ['choice_text' => 'La quantité de mouvement totale', 'is_correct' => false],
                            ['choice_text' => 'La masse totale dans le modèle fermé', 'is_correct' => false],
                            ['choice_text' => 'La conservation de l’énergie totale', 'is_correct' => false],
                        ],
                        'explanation' => 'Une partie de l’énergie cinétique est convertie en déformation, chaleur, son ou autres formes d’énergie.',
                    ],

                    [
                        'question' => 'Pourquoi le référentiel du centre de masse est-il particulièrement utile pour étudier les collisions ?',
                        'choices' => [
                            ['choice_text' => La quantité de mouvement totale y est nulle pour le système isolé', 'is_correct' => true],
                            ['choice_text' => 'Toutes les masses y deviennent égales', 'is_correct' => false],
                            ['choice_text' => 'L’énergie cinétique y est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'La gravité y disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le référentiel du centre de masse d’un système isolé, la quantité de mouvement totale est nulle, ce qui simplifie l’analyse.',
                    ],

                    [
                        'question' => 'Lorsqu’un objet absorbe totalement un second objet lors d’une collision, quel modèle de collision est utilisé ?',
                        'choices' => [
                            ['choice_text' => 'Une collision parfaitement inélastique', 'is_correct' => true],
                            ['choice_text' => 'Une collision parfaitement élastique', 'is_correct' => false],
                            ['choice_text' => 'Une collision sans interaction', 'is_correct' => false],
                            ['choice_text' => 'Une collision purement gravitationnelle dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les deux objets restent attachés après le choc, la collision est parfaitement inélastique.',
                    ],

                    [
                        'question' => 'Pourquoi faut-il appliquer séparément la conservation de la quantité de mouvement selon x et y dans une collision plane ?',
                        'choices' => [
                            ['choice_text' => La quantité de mouvement est une grandeur vectorielle', 'is_correct' => true],
                            ['choice_text' => 'L’énergie cinétique possède deux unités', 'is_correct' => false],
                            ['choice_text' => 'La masse change de direction', 'is_correct' => false],
                            ['choice_text' => 'Les forces n’existent que dans une dimension', 'is_correct' => false],
                        ],
                        'explanation' => 'La conservation vectorielle de la quantité de mouvement équivaut à conserver chacune de ses composantes.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Rotation et moment cinétique
            // ============================================================

            [
                'title' => 'Dynamique rotationnelle et moment cinétique',
                'description' => 'Analyse avancée des rotations, moments d’inertie, couples et conservation du moment cinétique.',
                'questions' => [

                    [
                        'question' => 'Pour un solide tournant autour d’un axe fixe, quelle relation relie le couple résultant, le moment d’inertie et l’accélération angulaire ?',
                        'choices' => [
                            ['choice_text' => 'τ = Iα', 'is_correct' => true],
                            ['choice_text' => 'τ = I/α', 'is_correct' => false],
                            ['choice_text' => 'τ = α/I', 'is_correct' => false],
                            ['choice_text' => 'τ = I + α', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est l’analogue rotationnel de la deuxième loi de Newton pour un axe fixe.',
                    ],

                    [
                        'question' => 'Un disque possède un moment d’inertie de 2 kg·m² et subit un couple résultant de 10 N·m. Quelle est son accélération angulaire ?',
                        'choices' => [
                            ['choice_text' => '5 rad/s²', 'is_correct' => true],
                            ['choice_text' => '20 rad/s²', 'is_correct' => false],
                            ['choice_text' => '0,2 rad/s²', 'is_correct' => false],
                            ['choice_text' => '12 rad/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'α = τ/I = 10/2 = 5 rad/s².',
                    ],

                    [
                        'question' => 'Pour une masse ponctuelle m située à une distance r d’un axe, son moment d’inertie vaut...',
                        'choices' => [
                            ['choice_text' => 'I = mr²', 'is_correct' => true],
                            ['choice_text' => 'I = mr', 'is_correct' => false],
                            ['choice_text' => 'I = m/r²', 'is_correct' => false],
                            ['choice_text' => 'I = m²r', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition, le moment d’inertie d’une masse ponctuelle est I = mr².',
                    ],

                    [
                        'question' => 'Un objet possède un moment d’inertie plus grand autour d’un axe. Pour un même couple appliqué, son accélération angulaire sera...',
                        'choices' => [
                            ['choice_text' => 'Plus faible', 'is_correct' => true],
                            ['choice_text' => 'Plus grande', 'is_correct' => false],
                            ['choice_text' => 'Identique quelle que soit I', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon α = τ/I, à couple identique, une inertie plus grande produit une accélération angulaire plus faible.',
                    ],

                    [
                        'question' => 'Quelle grandeur est conservée autour d’un axe si le couple extérieur résultant est nul ?',
                        'choices' => [
                            ['choice_text' => Le moment cinétique', 'is_correct' => true],
                            ['choice_text' => 'La puissance extérieure', 'is_correct' => false],
                            ['choice_text' => 'La force résultante dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Le moment d’inertie dans tous les systèmes', 'is_correct' => false],
                        ],
                        'explanation' => 'L’absence de couple extérieur résultant implique la conservation du moment cinétique.',
                    ],

                    [
                        'question' => 'Une patineuse en rotation rapproche ses bras de son corps sans couple extérieur significatif. Que devient sa vitesse angulaire ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente', 'is_correct' => true],
                            ['choice_text' => 'Elle diminue', 'is_correct' => false],
                            ['choice_text' => 'Elle reste nécessairement constante', 'is_correct' => false],
                            ['choice_text' => 'Elle devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le moment cinétique L = Iω se conserve. Si I diminue, ω augmente.',
                    ],

                    [
                        'question' => 'L’énergie cinétique de rotation d’un solide autour d’un axe fixe est donnée par...',
                        'choices' => [
                            ['choice_text' => 'Er = 1/2 Iω²', 'is_correct' => true],
                            ['choice_text' => 'Er = Iω', 'is_correct' => false],
                            ['choice_text' => 'Er = I/ω²', 'is_correct' => false],
                            ['choice_text' => 'Er = 1/2 Iω', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie cinétique de rotation est Er = 1/2 Iω².',
                    ],

                    [
                        'question' => 'Un couple constant de 4 N·m agit sur un rotor pendant une rotation de π/2 rad. Quel travail fournit ce couple ?',
                        'choices' => [
                            ['choice_text' => '2π J', 'is_correct' => true],
                            ['choice_text' => '4π J', 'is_correct' => false],
                            ['choice_text' => '2 J', 'is_correct' => false],
                            ['choice_text' => '8 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un couple constant, W = τΔθ = 4 × π/2 = 2π J.',
                    ],

                    [
                        'question' => 'Pourquoi une force appliquée directement sur l’axe de rotation ne produit-elle idéalement aucun couple autour de cet axe ?',
                        'choices' => [
                            ['choice_text' => Son bras de levier est nul', 'is_correct' => true],
                            ['choice_text' => Sa norme est toujours nulle', 'is_correct' => false],
                            ['choice_text' => Elle est toujours parallèle à la vitesse', 'is_correct' => false],
                            ['choice_text' => Le moment est indépendant de la position', 'is_correct' => false],
                        ],
                        'explanation' => 'Le moment τ = rF sinθ est nul lorsque la distance perpendiculaire entre la ligne d’action et l’axe est nulle.',
                    ],

                    [
                        'question' => 'Pour un solide rigide, déplacer de la masse vers l’extérieur par rapport à l’axe tend généralement à...',
                        'choices' => [
                            ['choice_text' => Augmenter son moment d’inertie', 'is_correct' => true],
                            ['choice_text' => Diminuer automatiquement son moment d’inertie', 'is_correct' => false],
                            ['choice_text' => Ne rien changer', 'is_correct' => false],
                            ['choice_text' => Annuler sa masse totale', 'is_correct' => false],
                        ],
                        'explanation' => 'Le moment d’inertie dépend fortement de la distance à l’axe via r².',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Gravitation et orbites
            // ============================================================

            [
                'title' => 'Gravitation newtonienne et mécanique orbitale',
                'description' => 'Analyse des champs gravitationnels, orbites circulaires et énergie gravitationnelle.',
                'questions' => [

                    [
                        'question' => 'Quelle expression donne le potentiel gravitationnel par unité de masse créé par une masse ponctuelle M ?',
                        'choices' => [
                            ['choice_text' => 'Φ = -GM/r', 'is_correct' => true],
                            ['choice_text' => 'Φ = GM/r²', 'is_correct' => false],
                            ['choice_text' => 'Φ = GM/r', 'is_correct' => false],
                            ['choice_text' => 'Φ = -GMr', 'is_correct' => false],
                        ],
                        'explanation' => 'Le potentiel gravitationnel newtonien est Φ = -GM/r avec zéro choisi à l’infini.',
                    ],

                    [
                        'question' => 'Pour une orbite circulaire, l’énergie cinétique d’un satellite de masse m est...',
                        'choices' => [
                            ['choice_text' => 'GMm/(2r)', 'is_correct' => true],
                            ['choice_text' => 'GMm/r', 'is_correct' => false],
                            ['choice_text' => 'GMm/(4r)', 'is_correct' => false],
                            ['choice_text' => '2GMm/r', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec v² = GM/r, Ec = 1/2 mv² = GMm/(2r).',
                    ],

                    [
                        'question' => 'Quelle est l’énergie mécanique totale d’un satellite en orbite circulaire autour d’une masse M ?',
                        'choices' => [
                            ['choice_text' => '-GMm/(2r)', 'is_correct' => true],
                            ['choice_text' => '+GMm/(2r)', 'is_correct' => false],
                            ['choice_text' => '-GMm/r', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'E = Ec + Ep = GMm/(2r) - GMm/r = -GMm/(2r).',
                    ],

                    [
                        'question' => 'Quelle propriété possède une orbite liée dans le modèle newtonien à deux corps ?',
                        'choices' => [
                            ['choice_text' => 'Son énergie mécanique totale est négative si le zéro est fixé à l’infini', 'is_correct' => true],
                            ['choice_text' => 'Son énergie totale est nécessairement positive', 'is_correct' => false],
                            ['choice_text' => 'Sa quantité de mouvement individuelle est constante dans tous les référentiels', 'is_correct' => false],
                            ['choice_text' => 'La force gravitationnelle y est nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une énergie mécanique négative correspond à un état gravitationnel lié.',
                    ],

                    [
                        'question' => 'Si le rayon d’une orbite circulaire est multiplié par quatre, la vitesse orbitale devient...',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus faible', 'is_correct' => true],
                            ['choice_text' => 'Quatre fois plus faible', 'is_correct' => false],
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'v = √(GM/r). Multiplier r par 4 divise v par 2.',
                    ],

                    [
                        'question' => 'Pourquoi le moment cinétique d’un satellite en orbite képlérienne est-il conservé par rapport au centre attracteur ?',
                        'choices' => [
                            ['choice_text' => La force gravitationnelle est centrale et son moment par rapport au centre est nul', 'is_correct' => true],
                            ['choice_text' => 'La gravité ne produit jamais de force', 'is_correct' => false],
                            ['choice_text' => 'La vitesse est nécessairement constante en norme sur toute orbite', 'is_correct' => false],
                            ['choice_text' => 'La masse du satellite change continuellement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une force centrale est colinéaire au vecteur position, donc son couple par rapport au centre est nul.',
                    ],

                    [
                        'question' => 'Que signifie physiquement le rayon de Schwarzschild ?',
                        'choices' => [
                            ['choice_text' => C’est une échelle caractéristique liée à l’horizon d’un trou noir non chargé et non rotatif', 'is_correct' => true],
                            ['choice_text' => 'C’est le rayon d’une orbite circulaire classique de tout satellite', 'is_correct' => false],
                            ['choice_text' => 'C’est toujours le rayon de la Terre', 'is_correct' => false],
                            ['choice_text' => 'C’est la distance maximale de toute interaction gravitationnelle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la relativité générale, le rayon de Schwarzschild rs = 2GM/c² correspond à l’horizon d’un trou noir de Schwarzschild.',
                    ],

                    [
                        'question' => 'Pour échapper au champ gravitationnel d’un astre dans le modèle newtonien, quelle condition énergétique doit être satisfaite ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie mécanique totale doit être au moins nulle', 'is_correct' => true],
                            ['choice_text' => 'L’énergie cinétique doit être nulle', 'is_correct' => false],
                            ['choice_text' => 'Le potentiel doit être infiniment négatif', 'is_correct' => false],
                            ['choice_text' => 'La masse doit disparaître', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec zéro d’énergie potentielle à l’infini, E ≥ 0 correspond à une trajectoire non liée.',
                    ],

                    [
                        'question' => 'Quelle expression donne la vitesse de libération depuis une distance r du centre d’un astre sphérique de masse M ?',
                        'choices' => [
                            ['choice_text' => 've = √(2GM/r)', 'is_correct' => true],
                            ['choice_text' => 've = √(GM/r)', 'is_correct' => false],
                            ['choice_text' => 've = 2GM/r', 'is_correct' => false],
                            ['choice_text' => 've = GM/(2r)', 'is_correct' => false],
                        ],
                        'explanation' => 'L’égalité entre énergie cinétique initiale et énergie nécessaire pour atteindre l’infini donne ve = √(2GM/r).',
                    ],

                    [
                        'question' => 'Selon la troisième loi de Kepler pour des orbites autour du même astre, comment varie approximativement T² avec le rayon orbital r ?',
                        'choices' => [
                            ['choice_text' => 'T² est proportionnel à r³', 'is_correct' => true],
                            ['choice_text' => 'T² est proportionnel à r', 'is_correct' => false],
                            ['choice_text' => 'T² est proportionnel à 1/r', 'is_correct' => false],
                            ['choice_text' => 'T² est proportionnel à r²', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une orbite circulaire, T = 2π√(r³/GM), donc T² ∝ r³.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Oscillations et systèmes dynamiques
            // ============================================================

            [
                'title' => 'Oscillateurs, stabilité et résonance',
                'description' => 'Analyse avancée des systèmes oscillants, de l’amortissement, de la résonance et de la stabilité.',
                'questions' => [

                    [
                        'question' => 'Un oscillateur masse-ressort vérifie mẍ + kx = 0. Quelle est sa pulsation propre ?',
                        'choices' => [
                            ['choice_text' => 'ω0 = √(k/m)', 'is_correct' => true],
                            ['choice_text' => 'ω0 = k/m', 'is_correct' => false],
                            ['choice_text' => 'ω0 = √(m/k)', 'is_correct' => false],
                            ['choice_text' => 'ω0 = m/k', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation donne ω0² = k/m.',
                    ],

                    [
                        'question' => 'Pour un oscillateur harmonique simple x(t) = A cos(ωt), quelle est l’énergie mécanique totale ?',
                        'choices' => [
                            ['choice_text' => 'E = 1/2 kA²', 'is_correct' => true],
                            ['choice_text' => 'E = kA', 'is_correct' => false],
                            ['choice_text' => 'E = 1/2 mA²', 'is_correct' => false],
                            ['choice_text' => 'E = mωA', 'is_correct' => false],
                        ],
                        'explanation' => 'Aux extrémités, toute l’énergie est potentielle élastique : E = 1/2 kA².',
                    ],

                    [
                        'question' => 'Dans un oscillateur harmonique simple, l’accélération est maximale en valeur absolue...',
                        'choices' => [
                            ['choice_text' => 'Aux positions extrêmes', 'is_correct' => true],
                            ['choice_text' => 'À l’équilibre', 'is_correct' => false],
                            ['choice_text' => 'Lorsque la vitesse est maximale', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme a = -ω²x, la norme de l’accélération est maximale lorsque |x| = A.',
                    ],

                    [
                        'question' => 'Un oscillateur amorti possède un coefficient d’amortissement croissant. Quelle tendance qualitative peut-on attendre ?',
                        'choices' => [
                            ['choice_text' => Une diminution de l’amplitude et une réponse moins résonante', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation illimitée de l’amplitude', 'is_correct' => false],
                            ['choice_text' => 'Une conservation parfaite de l’énergie mécanique', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence propre qui devient nécessairement infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amortissement dissipe de l’énergie et réduit généralement l’amplitude et le pic de résonance.',
                    ],

                    [
                        'question' => 'Dans un oscillateur forcé, pourquoi la fréquence de résonance dépend-elle de l’amortissement ?',
                        'choices' => [
                            ['choice_text' => L’amortissement modifie la réponse dynamique et déplace légèrement la fréquence du maximum d’amplitude', 'is_correct' => true],
                            ['choice_text' => 'L’amortissement ne peut jamais modifier la réponse', 'is_correct' => false],
                            ['choice_text' => 'La masse disparaît lorsque l’amortissement augmente', 'is_correct' => false],
                            ['choice_text' => 'La fréquence devient égale à zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un oscillateur amorti et forcé, la fréquence du maximum d’amplitude dépend du niveau d’amortissement.',
                    ],

                    [
                        'question' => 'Un équilibre correspondant à un minimum local d’énergie potentielle est généralement...',
                        'choices' => [
                            ['choice_text' => 'Stable pour de petites perturbations', 'is_correct' => true],
                            ['choice_text' => 'Instable', 'is_correct' => false],
                            ['choice_text' => 'Sans relation avec la stabilité', 'is_correct' => false],
                            ['choice_text' => 'Toujours en mouvement uniforme', 'is_correct' => false],
                        ],
                        'explanation' => 'Une petite perturbation autour d’un minimum local produit une force de rappel dans le modèle conservatif.',
                    ],

                    [
                        'question' => 'Pourquoi un potentiel localement quadratique est-il important autour d’un équilibre stable ?',
                        'choices' => [
                            ['choice_text' => Il conduit souvent à une approximation d’oscillateur harmonique pour les petites perturbations', 'is_correct' => true],
                            ['choice_text' => 'Il rend toujours le système instable', 'is_correct' => false],
                            ['choice_text' => 'Il supprime l’énergie cinétique', 'is_correct' => false],
                            ['choice_text' => 'Il impose une vitesse infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le développement local U ≈ U0 + 1/2 k_eff x² conduit à une force de rappel linéaire.',
                    ],

                    [
                        'question' => 'Dans un oscillateur harmonique, si l’amplitude est multipliée par 3, l’énergie mécanique est multipliée par...',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie varie comme A², donc un facteur 3 sur l’amplitude donne un facteur 9.',
                    ],

                    [
                        'question' => 'Dans un système présentant plusieurs modes de vibration, qu’est-ce qu’une fréquence propre ?',
                        'choices' => [
                            ['choice_text' => Une fréquence à laquelle le système peut osciller naturellement selon un mode donné', 'is_correct' => true],
                            ['choice_text' => 'Une fréquence imposée arbitrairement par l’opérateur', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence toujours égale à zéro', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence indépendante de toute propriété du système', 'is_correct' => false],
                        ],
                        'explanation' => 'Les systèmes à plusieurs degrés de liberté possèdent généralement plusieurs modes propres associés à différentes fréquences naturelles.',
                    ],

                    [
                        'question' => 'Pourquoi les ingénieurs cherchent-ils souvent à éviter une fréquence propre proche d’une excitation périodique ?',
                        'choices' => [
                            ['choice_text' => 'Pour limiter le risque de résonance et de fortes amplitudes vibratoires', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement l’énergie dissipée à zéro', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le système sans masse', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une fréquence propre empêche tout fonctionnement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une excitation proche d’un mode propre peut produire de fortes amplitudes, des contraintes élevées et éventuellement une défaillance.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Mécanique analytique et systèmes complexes
            // ============================================================

            [
                'title' => 'Mécanique analytique et modélisation avancée',
                'description' => 'Introduction à la formulation lagrangienne, aux coordonnées généralisées et aux systèmes mécaniques à contraintes.',
                'questions' => [

                    [
                        'question' => 'Quelle quantité est définie par L = T - V dans la formulation lagrangienne classique ?',
                        'choices' => [
                            ['choice_text' => 'Le lagrangien', 'is_correct' => true],
                            ['choice_text' => 'Le Hamiltonien dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Le moment cinétique', 'is_correct' => false],
                            ['choice_text' => 'La puissance mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le lagrangien classique d’un système conservatif est L = T - V.',
                    ],

                    [
                        'question' => 'Quelle équation fondamentale permet d’obtenir les équations du mouvement dans le formalisme de Lagrange ?',
                        'choices' => [
                            ['choice_text' => d/dt(∂L/∂q̇) - ∂L/∂q = 0', 'is_correct' => true],
                            ['choice_text' => ∂L/∂q = ∂L/∂q̇', 'is_correct' => false],
                            ['choice_text' => L = q + q̇', 'is_correct' => false],
                            ['choice_text' => dL/dt = 0 dans tous les systèmes', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une coordonnée généralisée q sans force non conservative généralisée, l’équation d’Euler-Lagrange est d/dt(∂L/∂q̇) - ∂L/∂q = 0.',
                    ],

                    [
                        'question' => 'Pourquoi les coordonnées généralisées sont-elles utiles en mécanique analytique ?',
                        'choices' => [
                            ['choice_text' => Elles permettent de décrire efficacement des systèmes avec contraintes et géométries complexes', 'is_correct' => true],
                            ['choice_text' => 'Elles suppriment toutes les lois de conservation', 'is_correct' => false],
                            ['choice_text' => 'Elles ne peuvent décrire que des translations', 'is_correct' => false],
                            ['choice_text' => 'Elles rendent toutes les masses égales', 'is_correct' => false],
                        ],
                        'explanation' => 'Les coordonnées généralisées peuvent être choisies pour respecter naturellement les contraintes et réduire le nombre de variables indépendantes.',
                    ],

                    [
                        'question' => 'Pour un pendule simple idéal de longueur l, quelle coordonnée généralisée naturelle peut-on utiliser ?',
                        'choices' => [
                            ['choice_text' => 'L’angle θ du pendule', 'is_correct' => true],
                            ['choice_text' => 'La température du pendule', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse du pendule', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pendule possède un degré de liberté naturel décrit par son angle θ.',
                    ],

                    [
                        'question' => 'Pour le pendule simple, quelle expression représente son énergie cinétique en fonction de θ̇ ?',
                        'choices' => [
                            ['choice_text' => 'T = 1/2 ml²θ̇²', 'is_correct' => true],
                            ['choice_text' => 'T = 1/2 mlθ̇', 'is_correct' => false],
                            ['choice_text' => 'T = ml²θ̇', 'is_correct' => false],
                            ['choice_text' => 'T = 1/2 mθ²l', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse tangentielle vaut v = lθ̇. Donc T = 1/2 mv² = 1/2 ml²θ̇².',
                    ],

                    [
                        'question' => 'Pourquoi les forces de contrainte idéales peuvent-elles être évitées explicitement dans certaines formulations de Lagrange ?',
                        'choices' => [
                            ['choice_text' => Le choix des coordonnées peut intégrer directement les contraintes géométriques', 'is_correct' => true],
                            ['choice_text' => Les contraintes n’existent jamais dans les systèmes réels', 'is_correct' => false],
                            ['choice_text' => Les forces sont toujours nulles', 'is_correct' => false],
                            ['choice_text' => L’énergie potentielle disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'En utilisant des coordonnées indépendantes adaptées, certaines contraintes holonomes sont intégrées à la description du système.',
                    ],

                    [
                        'question' => 'Une coordonnée généralisée q est dite cyclique lorsque le lagrangien ne dépend pas explicitement de q. Quelle conséquence importante en découle ?',
                        'choices' => [
                            ['choice_text' => Le moment conjugué à q est conservé', 'is_correct' => true],
                            ['choice_text' => q devient nécessairement constant', 'is_correct' => false],
                            ['choice_text' => L’énergie cinétique devient nulle', 'is_correct' => false],
                            ['choice_text' => Le système perd un degré de liberté', 'is_correct' => false],
                        ],
                        'explanation' => 'Si ∂L/∂q = 0, l’équation d’Euler-Lagrange donne d/dt(∂L/∂q̇) = 0 : le moment conjugué est conservé.',
                    ],

                    [
                        'question' => 'Dans une approximation des petites oscillations autour d’un équilibre stable, pourquoi peut-on souvent linéariser les équations ?',
                        'choices' => [
                            ['choice_text' => Les termes d’ordre supérieur deviennent négligeables lorsque les perturbations sont suffisamment petites', 'is_correct' => true],
                            ['choice_text' => Les lois de Newton cessent d’être valides', 'is_correct' => false],
                            ['choice_text' => La masse devient constante uniquement dans cette approximation', 'is_correct' => false],
                            ['choice_text' => Les forces non linéaires deviennent infinies', 'is_correct' => false],
                        ],
                        'explanation' => 'Autour d’un équilibre, un développement limité permet souvent de conserver uniquement les termes linéaires pour les petites perturbations.',
                    ],

                    [
                        'question' => 'Pourquoi une formulation lagrangienne peut-elle être avantageuse pour un robot à plusieurs articulations ?',
                        'choices' => [
                            ['choice_text' => Elle permet de traiter systématiquement les coordonnées articulaires, l’énergie et les couplages dynamiques', 'is_correct' => true],
                            ['choice_text' => 'Elle suppose que toutes les articulations sont indépendantes', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine les forces de gravité', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut représenter que les mouvements rectilignes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le formalisme de Lagrange est particulièrement adapté aux systèmes multibody où les coordonnées articulaires et les interactions dynamiques sont nombreuses.',
                    ],

                    [
                        'question' => 'Dans la modélisation d’un système mécanique complexe, pourquoi une validation numérique et expérimentale reste-t-elle nécessaire même après une dérivation analytique correcte ?',
                        'choices' => [
                            ['choice_text' => Les hypothèses, paramètres, approximations et conditions réelles peuvent limiter la validité du modèle', 'is_correct' => true],
                            ['choice_text' => 'Une équation analytique est toujours fausse dans le monde réel', 'is_correct' => false],
                            ['choice_text' => 'Les lois mécaniques ne peuvent jamais être vérifiées', 'is_correct' => false],
                            ['choice_text' => 'La simulation remplace automatiquement toute expérience', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivation correcte dans un modèle donné ne garantit pas que toutes les hypothèses restent valides dans une situation réelle. La validation est donc essentielle.',
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
                    'difficulty' => 'Advanced',
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

                // Mélange des objets complets : la bonne réponse reste
                // attachée à is_correct malgré la randomisation.
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