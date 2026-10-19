<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PhysicsFundamentalsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'physics-fundamentals')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Cinématique
            // ============================================================

            [
                'title' => 'Cinématique et description du mouvement',
                'description' => 'Application des notions de position, vitesse, accélération et trajectoire à des situations physiques simples.',
                'questions' => [

                    [
                        'question' => 'Une voiture parcourt 180 km en 3 heures. Quelle est sa vitesse moyenne ?',
                        'choices' => [
                            ['choice_text' => '60 km/h', 'is_correct' => true],
                            ['choice_text' => '30 km/h', 'is_correct' => false],
                            ['choice_text' => '90 km/h', 'is_correct' => false],
                            ['choice_text' => '540 km/h', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse moyenne est le rapport entre la distance parcourue et la durée : 180 / 3 = 60 km/h.',
                    ],

                    [
                        'question' => 'Un cycliste passe de 5 m/s à 15 m/s en 5 secondes avec une accélération constante. Quelle est son accélération ?',
                        'choices' => [
                            ['choice_text' => '2 m/s²', 'is_correct' => true],
                            ['choice_text' => '3 m/s²', 'is_correct' => false],
                            ['choice_text' => '4 m/s²', 'is_correct' => false],
                            ['choice_text' => '10 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération vaut a = (vf - vi) / Δt = (15 - 5) / 5 = 2 m/s².',
                    ],

                    [
                        'question' => 'Dans un mouvement rectiligne uniforme, quelle grandeur reste constante ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse', 'is_correct' => true],
                            ['choice_text' => 'L’accélération, nécessairement non nulle', 'is_correct' => false],
                            ['choice_text' => 'La position', 'is_correct' => false],
                            ['choice_text' => 'La distance parcourue', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un mouvement rectiligne uniforme, le vecteur vitesse reste constant et l’accélération est nulle.',
                    ],

                    [
                        'question' => 'Un objet initialement au repos possède une accélération constante de 4 m/s². Quelle est sa vitesse après 3 secondes ?',
                        'choices' => [
                            ['choice_text' => '12 m/s', 'is_correct' => true],
                            ['choice_text' => '7 m/s', 'is_correct' => false],
                            ['choice_text' => '16 m/s', 'is_correct' => false],
                            ['choice_text' => '1,33 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec vi = 0, v = vi + at = 0 + 4 × 3 = 12 m/s.',
                    ],

                    [
                        'question' => 'Un objet ralentit alors que son mouvement reste rectiligne. Que peut-on dire de son accélération par rapport à sa vitesse ?',
                        'choices' => [
                            ['choice_text' => 'Elle possède une composante opposée au mouvement', 'is_correct' => true],
                            ['choice_text' => 'Elle est nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours perpendiculaire à la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Elle possède nécessairement la même valeur que la vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’un ralentissement rectiligne, l’accélération est orientée en sens opposé à la vitesse.',
                    ],

                    [
                        'question' => 'Quelle relation permet de calculer la position d’un objet en mouvement rectiligne uniforme ?',
                        'choices' => [
                            ['choice_text' => 'x = x0 + vt', 'is_correct' => true],
                            ['choice_text' => 'x = vt²', 'is_correct' => false],
                            ['choice_text' => 'x = x0 + at', 'is_correct' => false],
                            ['choice_text' => 'x = v/t', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un mouvement rectiligne uniforme, la position évolue selon x = x0 + vt.',
                    ],

                    [
                        'question' => 'Un train se déplace à 20 m/s pendant 30 secondes à vitesse constante. Quelle distance parcourt-il ?',
                        'choices' => [
                            ['choice_text' => '600 m', 'is_correct' => true],
                            ['choice_text' => '50 m', 'is_correct' => false],
                            ['choice_text' => '300 m', 'is_correct' => false],
                            ['choice_text' => '1500 m', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance vaut d = vt = 20 × 30 = 600 m.',
                    ],

                    [
                        'question' => 'Une accélération de 3 m/s² signifie que, pour une accélération constante, la vitesse augmente de...',
                        'choices' => [
                            ['choice_text' => '3 m/s chaque seconde', 'is_correct' => true],
                            ['choice_text' => '3 m chaque seconde', 'is_correct' => false],
                            ['choice_text' => '9 m/s chaque seconde', 'is_correct' => false],
                            ['choice_text' => '1/3 m/s chaque seconde', 'is_correct' => false],
                        ],
                        'explanation' => 'L’unité m/s² signifie une variation de vitesse de 3 m/s par seconde.',
                    ],

                    [
                        'question' => 'Deux objets ont la même vitesse moyenne mais parcourent des distances différentes. Lequel peut avoir une durée de trajet plus longue ?',
                        'choices' => [
                            ['choice_text' => 'Celui qui parcourt la plus grande distance', 'is_correct' => true],
                            ['choice_text' => 'Toujours celui qui parcourt la plus petite distance', 'is_correct' => false],
                            ['choice_text' => 'Les deux ont nécessairement la même durée', 'is_correct' => false],
                            ['choice_text' => 'La durée ne dépend jamais de la distance', 'is_correct' => false],
                        ],
                        'explanation' => 'À vitesse moyenne identique, une distance plus grande nécessite une durée plus longue.',
                    ],

                    [
                        'question' => 'Un objet se déplace sur une trajectoire circulaire à vitesse scalaire constante. Son accélération est-elle nécessairement nulle ?',
                        'choices' => [
                            ['choice_text' => 'Non, car la direction de la vitesse change', 'is_correct' => true],
                            ['choice_text' => 'Oui, car la valeur de la vitesse est constante', 'is_correct' => false],
                            ['choice_text' => 'Oui, car la trajectoire est fermée', 'is_correct' => false],
                            ['choice_text' => 'Non, uniquement si sa masse varie', 'is_correct' => false],
                        ],
                        'explanation' => 'Même avec une vitesse scalaire constante, la direction du vecteur vitesse change sur une trajectoire circulaire, donc une accélération existe.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Dynamique
            // ============================================================

            [
                'title' => 'Dynamique et application des lois de Newton',
                'description' => 'Application des lois de Newton aux forces, aux mouvements et aux situations mécaniques courantes.',
                'questions' => [

                    [
                        'question' => 'Un objet de masse 5 kg subit une force résultante de 20 N. Quelle est son accélération ?',
                        'choices' => [
                            ['choice_text' => '4 m/s²', 'is_correct' => true],
                            ['choice_text' => '25 m/s²', 'is_correct' => false],
                            ['choice_text' => '100 m/s²', 'is_correct' => false],
                            ['choice_text' => '0,25 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon F = ma, a = F/m = 20/5 = 4 m/s².',
                    ],

                    [
                        'question' => 'Deux forces de 10 N et 6 N agissent dans le même sens sur un objet. Quelle est leur résultante ?',
                        'choices' => [
                            ['choice_text' => '16 N dans ce sens', 'is_correct' => true],
                            ['choice_text' => '4 N dans ce sens', 'is_correct' => false],
                            ['choice_text' => '60 N', 'is_correct' => false],
                            ['choice_text' => '1,67 N', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux forces colinéaires et de même sens s’additionnent : 10 + 6 = 16 N.',
                    ],

                    [
                        'question' => 'Deux forces de même intensité et de sens opposés agissent sur un objet. Si elles sont les seules forces, la résultante est...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Égale à leur somme', 'is_correct' => false],
                            ['choice_text' => 'Égale à deux fois leur intensité', 'is_correct' => false],
                            ['choice_text' => 'Toujours dirigée vers la première force', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux forces opposées de même intensité se compensent, donc leur résultante est nulle.',
                    ],

                    [
                        'question' => 'Pourquoi un passager est-il projeté vers l’avant lorsqu’une voiture freine brusquement ?',
                        'choices' => [
                            ['choice_text' => 'En raison de son inertie', 'is_correct' => true],
                            ['choice_text' => 'Parce que sa masse disparaît', 'is_correct' => false],
                            ['choice_text' => 'Parce que la gravité change brutalement de direction', 'is_correct' => false],
                            ['choice_text' => 'Parce que son poids devient nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Le corps du passager tend à conserver son état de mouvement en raison de l’inertie.',
                    ],

                    [
                        'question' => 'Un bloc glisse sur une surface horizontale avec frottement. Quelle force horizontale s’oppose généralement au mouvement ?',
                        'choices' => [
                            ['choice_text' => 'La force de frottement', 'is_correct' => true],
                            ['choice_text' => 'Le poids', 'is_correct' => false],
                            ['choice_text' => 'La poussée d’Archimède', 'is_correct' => false],
                            ['choice_text' => 'La réaction normale uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La force de frottement agit généralement dans le sens opposé au mouvement relatif entre les surfaces.',
                    ],

                    [
                        'question' => 'Un objet de 10 kg est soumis à une force résultante horizontale constante de 30 N. Quelle est son accélération ?',
                        'choices' => [
                            ['choice_text' => '3 m/s²', 'is_correct' => true],
                            ['choice_text' => '0,3 m/s²', 'is_correct' => false],
                            ['choice_text' => '20 m/s²', 'is_correct' => false],
                            ['choice_text' => '300 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec F = ma, a = 30/10 = 3 m/s².',
                    ],

                    [
                        'question' => 'Quelle affirmation distingue correctement le poids et la réaction normale d’un support horizontal dans un cas d’équilibre simple ?',
                        'choices' => [
                            ['choice_text' => 'Le poids est vers le bas et la réaction normale vers le haut', 'is_correct' => true],
                            ['choice_text' => 'Les deux forces sont toujours horizontales', 'is_correct' => false],
                            ['choice_text' => 'Le poids est toujours vers le haut', 'is_correct' => false],
                            ['choice_text' => 'La réaction normale est toujours égale à zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur un support horizontal, le poids est dirigé vers le bas et la réaction normale du support est généralement dirigée vers le haut.',
                    ],

                    [
                        'question' => 'Si la masse d’un objet double alors que la force résultante reste constante, son accélération est...',
                        'choices' => [
                            ['choice_text' => 'Divisée par deux', 'is_correct' => true],
                            ['choice_text' => 'Doublée', 'is_correct' => false],
                            ['choice_text' => 'Multipliée par quatre', 'is_correct' => false],
                            ['choice_text' => 'Inchangée dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'D’après a = F/m, une masse deux fois plus grande donne une accélération deux fois plus faible à force constante.',
                    ],

                    [
                        'question' => 'Une force de 50 N agit horizontalement sur une masse de 10 kg. Une force de frottement de 20 N s’oppose au mouvement. Quelle est l’accélération ?',
                        'choices' => [
                            ['choice_text' => '3 m/s²', 'is_correct' => true],
                            ['choice_text' => '5 m/s²', 'is_correct' => false],
                            ['choice_text' => '7 m/s²', 'is_correct' => false],
                            ['choice_text' => '30 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'La force résultante vaut 50 - 20 = 30 N. Donc a = 30/10 = 3 m/s².',
                    ],

                    [
                        'question' => 'Dans un diagramme des forces, pourquoi représente-t-on les forces par des vecteurs ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une force possède une intensité, une direction et un sens', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une force est toujours une grandeur scalaire', 'is_correct' => false],
                            ['choice_text' => 'Parce que les forces n’ont aucune unité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les vecteurs représentent uniquement des masses', 'is_correct' => false],
                        ],
                        'explanation' => 'Une force est une grandeur vectorielle : sa représentation doit tenir compte de son intensité, de sa direction et de son sens.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Travail et énergie mécanique
            // ============================================================

            [
                'title' => 'Travail et transformations de l’énergie mécanique',
                'description' => 'Résolution de situations impliquant le travail des forces, l’énergie cinétique et l’énergie potentielle.',
                'questions' => [

                    [
                        'question' => 'Une force constante de 20 N déplace un objet de 5 m dans la même direction que la force. Quel travail fournit-elle ?',
                        'choices' => [
                            ['choice_text' => '100 J', 'is_correct' => true],
                            ['choice_text' => '25 J', 'is_correct' => false],
                            ['choice_text' => '4 J', 'is_correct' => false],
                            ['choice_text' => '200 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque force et déplacement sont parallèles et de même sens, W = Fd = 20 × 5 = 100 J.',
                    ],

                    [
                        'question' => 'Une force est perpendiculaire au déplacement d’un objet. Quel est son travail ?',
                        'choices' => [
                            ['choice_text' => 'Nul', 'is_correct' => true],
                            ['choice_text' => 'Toujours positif', 'is_correct' => false],
                            ['choice_text' => 'Toujours négatif', 'is_correct' => false],
                            ['choice_text' => 'Égal à la force multipliée par le temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Le travail d’une force vaut W = Fd cos(θ). Pour θ = 90°, cos(90°) = 0, donc le travail est nul.',
                    ],

                    [
                        'question' => 'Quelle formule donne l’énergie cinétique d’un objet de masse m et de vitesse v ?',
                        'choices' => [
                            ['choice_text' => 'Ec = 1/2 mv²', 'is_correct' => true],
                            ['choice_text' => 'Ec = mv', 'is_correct' => false],
                            ['choice_text' => 'Ec = mgv', 'is_correct' => false],
                            ['choice_text' => 'Ec = m/v²', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie cinétique d’un objet en translation est Ec = 1/2 mv².',
                    ],

                    [
                        'question' => 'Si la vitesse d’un objet est multipliée par deux, son énergie cinétique est multipliée par...',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme Ec = 1/2 mv², doubler la vitesse multiplie l’énergie cinétique par 2² = 4.',
                    ],

                    [
                        'question' => 'Près de la surface terrestre, quelle expression représente approximativement l’énergie potentielle gravitationnelle par rapport à un niveau de référence ?',
                        'choices' => [
                            ['choice_text' => 'Ep = mgh', 'is_correct' => true],
                            ['choice_text' => 'Ep = mv', 'is_correct' => false],
                            ['choice_text' => 'Ep = mg/h', 'is_correct' => false],
                            ['choice_text' => 'Ep = h/mg', 'is_correct' => false],
                        ],
                        'explanation' => 'Près de la surface terrestre, l’énergie potentielle gravitationnelle peut être écrite Ep = mgh par rapport à un niveau de référence choisi.',
                    ],

                    [
                        'question' => 'Lorsqu’un objet tombe sans frottements significatifs, son énergie potentielle gravitationnelle se transforme principalement en...',
                        'choices' => [
                            ['choice_text' => 'Énergie cinétique', 'is_correct' => true],
                            ['choice_text' => 'Masse supplémentaire', 'is_correct' => false],
                            ['choice_text' => 'Charge électrique', 'is_correct' => false],
                            ['choice_text' => 'Volume supplémentaire', 'is_correct' => false],
                        ],
                        'explanation' => 'En l’absence de pertes significatives, la diminution de l’énergie potentielle gravitationnelle correspond à une augmentation de l’énergie cinétique.',
                    ],

                    [
                        'question' => 'Un objet de masse 2 kg se déplace à 3 m/s. Quelle est son énergie cinétique ?',
                        'choices' => [
                            ['choice_text' => '9 J', 'is_correct' => true],
                            ['choice_text' => '6 J', 'is_correct' => false],
                            ['choice_text' => '18 J', 'is_correct' => false],
                            ['choice_text' => '3 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Ec = 1/2 mv² = 1/2 × 2 × 3² = 9 J.',
                    ],

                    [
                        'question' => 'Une force de frottement effectue généralement un travail...',
                        'choices' => [
                            ['choice_text' => 'Négatif lors d’un mouvement opposé à la force', 'is_correct' => true],
                            ['choice_text' => 'Toujours positif', 'is_correct' => false],
                            ['choice_text' => 'Toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Indépendant du déplacement', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque le frottement s’oppose au déplacement, l’angle entre la force et le déplacement est de 180°, donnant un travail négatif.',
                    ],

                    [
                        'question' => 'Le théorème de l’énergie cinétique relie la variation d’énergie cinétique au...',
                        'choices' => [
                            ['choice_text' => 'Travail de la résultante des forces', 'is_correct' => true],
                            ['choice_text' => 'Volume du système uniquement', 'is_correct' => false],
                            ['choice_text' => 'Temps absolu uniquement', 'is_correct' => false],
                            ['choice_text' => 'Nombre de particules uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La variation de l’énergie cinétique d’un objet est égale au travail de la résultante des forces qui s’exercent sur lui.',
                    ],

                    [
                        'question' => 'Un objet possède une énergie mécanique constante lorsqu’il n’y a pas de forces dissipatives et que seules des forces conservatives interviennent. Cette énergie correspond à...',
                        'choices' => [
                            ['choice_text' => 'La somme de ses énergies cinétique et potentielle', 'is_correct' => true],
                            ['choice_text' => 'Uniquement son énergie cinétique', 'is_correct' => false],
                            ['choice_text' => 'Uniquement son énergie thermique', 'is_correct' => false],
                            ['choice_text' => 'La différence entre masse et vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie mécanique est généralement définie comme Em = Ec + Ep et se conserve dans les conditions indiquées.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Quantité de mouvement
            // ============================================================

            [
                'title' => 'Quantité de mouvement et collisions',
                'description' => 'Application des notions de quantité de mouvement, impulsion et conservation dans des interactions simples.',
                'questions' => [

                    [
                        'question' => 'Quelle expression définit la quantité de mouvement d’un objet classique ?',
                        'choices' => [
                            ['choice_text' => 'p = mv', 'is_correct' => true],
                            ['choice_text' => 'p = m/v', 'is_correct' => false],
                            ['choice_text' => 'p = ma', 'is_correct' => false],
                            ['choice_text' => 'p = m + v', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantité de mouvement est le produit de la masse par le vecteur vitesse : p = mv.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la quantité de mouvement ?',
                        'choices' => [
                            ['choice_text' => 'kg·m/s', 'is_correct' => true],
                            ['choice_text' => 'N/m', 'is_correct' => false],
                            ['choice_text' => 'J/s', 'is_correct' => false],
                            ['choice_text' => 'kg/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme p = mv, l’unité SI est kg·m/s.',
                    ],

                    [
                        'question' => 'Dans un système isolé, la quantité de mouvement totale...',
                        'choices' => [
                            ['choice_text' => 'Se conserve', 'is_correct' => true],
                            ['choice_text' => 'Double toujours', 'is_correct' => false],
                            ['choice_text' => 'Devient nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'Dépend uniquement de la température', 'is_correct' => false],
                        ],
                        'explanation' => 'En l’absence de force extérieure résultante, la quantité de mouvement totale du système reste constante.',
                    ],

                    [
                        'question' => 'Un objet de 4 kg se déplace à 5 m/s. Quelle est la valeur de sa quantité de mouvement ?',
                        'choices' => [
                            ['choice_text' => '20 kg·m/s', 'is_correct' => true],
                            ['choice_text' => '9 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '0,8 kg·m/s', 'is_correct' => false],
                            ['choice_text' => '25 kg·m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'p = mv = 4 × 5 = 20 kg·m/s.',
                    ],

                    [
                        'question' => 'Deux patineurs initialement au repos se repoussent mutuellement sur une surface presque sans frottement. Après la poussée, leurs quantités de mouvement sont...',
                        'choices' => [
                            ['choice_text' => Opposées et de même valeur', 'is_correct' => true],
                            ['choice_text' => 'Toujours dans le même sens', 'is_correct' => false],
                            ['choice_text' => 'Toutes deux nulles', 'is_correct' => false],
                            ['choice_text' => 'Toujours identiques en direction et en sens', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantité de mouvement totale initiale étant nulle, les deux quantités de mouvement finales doivent être opposées et de même valeur.',
                    ],

                    [
                        'question' => 'Lors d’une collision parfaitement inélastique, les objets après collision...',
                        'choices' => [
                            ['choice_text' => 'Restent attachés et se déplacent ensemble', 'is_correct' => true],
                            ['choice_text' => 'Repartent toujours avec des vitesses égales et opposées', 'is_correct' => false],
                            ['choice_text' => 'Perdent nécessairement toute leur masse', 'is_correct' => false],
                            ['choice_text' => 'Ne peuvent jamais se déplacer après le choc', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une collision parfaitement inélastique, les objets restent liés après le choc et possèdent une vitesse commune.',
                    ],

                    [
                        'question' => 'Lors d’une collision réelle isolée, quelle grandeur peut ne pas être conservée alors que la quantité de mouvement totale l’est ?',
                        'choices' => [
                            ['choice_text' => L’énergie cinétique', 'is_correct' => true],
                            ['choice_text' => 'La masse totale dans un système fermé ordinaire', 'is_correct' => false],
                            ['choice_text' => 'La quantité de mouvement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de dimensions spatiales', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’une collision inélastique, une partie de l’énergie cinétique peut être transformée en chaleur, son, déformation ou autres formes d’énergie.',
                    ],

                    [
                        'question' => 'Si la masse d’un objet reste constante et que sa vitesse double, sa quantité de mouvement...',
                        'choices' => [
                            ['choice_text' => 'Double', 'is_correct' => true],
                            ['choice_text' => 'Est divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'Est multipliée par quatre', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme p = mv et que m est constante, doubler v double directement p.',
                    ],

                    [
                        'question' => 'Une force extérieure nette agit pendant un intervalle de temps court sur un objet. Le produit force × durée est lié à la variation de...',
                        'choices' => [
                            ['choice_text' => 'La quantité de mouvement', 'is_correct' => true],
                            ['choice_text' => 'La température absolue uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse au repos uniquement', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’impulsion d’une force est liée à la variation de la quantité de mouvement : J = Δp.',
                    ],

                    [
                        'question' => 'Pourquoi les airbags réduisent-ils les conséquences d’un choc ?',
                        'choices' => [
                            ['choice_text' => 'Ils augmentent la durée de décélération et réduisent ainsi la force moyenne', 'is_correct' => true],
                            ['choice_text' => 'Ils augmentent la masse du passager', 'is_correct' => false],
                            ['choice_text' => 'Ils annulent toujours la quantité de mouvement avant le choc', 'is_correct' => false],
                            ['choice_text' => 'Ils empêchent toute variation de vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une même variation de quantité de mouvement, augmenter la durée du choc réduit la force moyenne subie.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Gravitation et mouvement orbital
            // ============================================================

            [
                'title' => 'Gravitation et mouvements des corps célestes',
                'description' => 'Application des notions de gravitation, de poids et de mouvement orbital à des situations simples.',
                'questions' => [

                    [
                        'question' => 'Selon la loi de gravitation universelle, la force gravitationnelle entre deux masses diminue lorsque leur distance...',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Reste constante quelle que soit la distance', 'is_correct' => false],
                            ['choice_text' => 'Devient indépendante des masses', 'is_correct' => false],
                        ],
                        'explanation' => 'La force gravitationnelle est inversement proportionnelle au carré de la distance séparant les centres des deux masses.',
                    ],

                    [
                        'question' => 'Si la distance entre deux masses est multipliée par deux, la force gravitationnelle est divisée par...',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme F est proportionnelle à 1/r², multiplier r par 2 divise F par 2² = 4.',
                    ],

                    [
                        'question' => 'Quelle propriété distingue principalement la masse du poids d’un objet ?',
                        'choices' => [
                            ['choice_text' => 'La masse est une propriété de l’objet tandis que le poids dépend du champ gravitationnel', 'is_correct' => true],
                            ['choice_text' => 'La masse dépend directement de g alors que le poids n’est pas une force', 'is_correct' => false],
                            ['choice_text' => 'La masse se mesure en newtons', 'is_correct' => false],
                            ['choice_text' => 'Le poids est identique partout dans l’Univers', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse caractérise l’objet. Le poids est la force gravitationnelle exercée sur lui et dépend du champ gravitationnel local.',
                    ],

                    [
                        'question' => 'Un astronaute se trouve sur la Lune où le champ gravitationnel est plus faible que sur Terre. Sa masse...',
                        'choices' => [
                            ['choice_text' => 'Reste la même', 'is_correct' => true],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Est divisée par six', 'is_correct' => false],
                            ['choice_text' => 'Double nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse est une propriété intrinsèque de l’astronaute et ne change pas simplement parce que le champ gravitationnel change.',
                    ],

                    [
                        'question' => 'Pourquoi une planète reste-t-elle sur une orbite autour d’une étoile au lieu de se déplacer simplement en ligne droite ?',
                        'choices' => [
                            ['choice_text' => 'La gravitation modifie continuellement la direction de sa vitesse', 'is_correct' => true],
                            ['choice_text' => 'Sa vitesse est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'La planète ne possède aucune inertie', 'is_correct' => false],
                            ['choice_text' => 'La gravitation annule complètement sa vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'La gravitation fournit une accélération dirigée vers l’astre central, ce qui courbe continuellement la trajectoire.',
                    ],

                    [
                        'question' => 'Dans une orbite circulaire idéale, la force gravitationnelle exercée sur un satellite est dirigée...',
                        'choices' => [
                            ['choice_text' => 'Vers le centre de l’orbite', 'is_correct' => true],
                            ['choice_text' => 'Toujours dans le sens de la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Toujours à l’opposé du centre', 'is_correct' => false],
                            ['choice_text' => 'Perpendiculairement au plan orbital', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une orbite circulaire, la force gravitationnelle fournit la force centripète dirigée vers le centre.',
                    ],

                    [
                        'question' => 'Quelle est approximativement l’accélération gravitationnelle près de la surface terrestre ?',
                        'choices' => [
                            ['choice_text' => '9,8 m/s²', 'is_correct' => true],
                            ['choice_text' => '98 m/s²', 'is_correct' => false],
                            ['choice_text' => '0,98 m/s²', 'is_correct' => false],
                            ['choice_text' => '1 m/s² exactement', 'is_correct' => false],
                        ],
                        'explanation' => 'Près de la surface terrestre, g vaut approximativement 9,8 m/s².',
                    ],

                    [
                        'question' => 'Si l’on néglige la résistance de l’air, deux objets de masses différentes lâchés simultanément près de la surface terrestre ont...',
                        'choices' => [
                            ['choice_text' => 'La même accélération gravitationnelle', 'is_correct' => true],
                            ['choice_text' => 'Toujours des accélérations proportionnelles à leur masse', 'is_correct' => false],
                            ['choice_text' => 'Une accélération nulle pour le plus léger', 'is_correct' => false],
                            ['choice_text' => 'Des accélérations nécessairement opposées', 'is_correct' => false],
                        ],
                        'explanation' => 'En négligeant la résistance de l’air, tous les objets subissent approximativement la même accélération gravitationnelle g près de la surface terrestre.',
                    ],

                    [
                        'question' => 'Que devient le poids d’un objet si l’intensité du champ gravitationnel local diminue alors que sa masse reste constante ?',
                        'choices' => [
                            ['choice_text' => 'Il diminue', 'is_correct' => true],
                            ['choice_text' => 'Il augmente nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Il reste identique dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Il devient une masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le poids vérifie P = mg. Si g diminue et m reste constante, le poids diminue.',
                    ],

                    [
                        'question' => 'Pourquoi les astronautes en orbite peuvent-ils sembler en apesanteur alors que la gravitation terrestre agit encore sur eux ?',
                        'choices' => [
                            ['choice_text' => 'Ils sont en chute libre permanente autour de la Terre', 'is_correct' => true],
                            ['choice_text' => 'La gravitation terrestre est exactement nulle en orbite', 'is_correct' => false],
                            ['choice_text' => 'Leur masse disparaît', 'is_correct' => false],
                            ['choice_text' => 'Ils se trouvent hors de tout champ physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un satellite et ses occupants sont en chute libre autour de la Terre. Cette situation donne une sensation d’apesanteur malgré la présence de la gravitation.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Fluides et thermique
            // ============================================================

            [
                'title' => 'Fluides, pression et phénomènes thermiques',
                'description' => 'Application des principes de pression, de poussée d’Archimède et de transferts thermiques.',
                'questions' => [

                    [
                        'question' => 'Une force de 200 N agit perpendiculairement sur une surface de 2 m². Quelle pression moyenne exerce-t-elle ?',
                        'choices' => [
                            ['choice_text' => '100 Pa', 'is_correct' => true],
                            ['choice_text' => '400 Pa', 'is_correct' => false],
                            ['choice_text' => '202 Pa', 'is_correct' => false],
                            ['choice_text' => '0,01 Pa', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression vaut p = F/S = 200/2 = 100 Pa.',
                    ],

                    [
                        'question' => 'Dans un liquide homogène au repos, la pression hydrostatique augmente avec...',
                        'choices' => [
                            ['choice_text' => 'La profondeur', 'is_correct' => true],
                            ['choice_text' => 'La couleur du liquide', 'is_correct' => false],
                            ['choice_text' => 'La forme du récipient uniquement', 'is_correct' => false],
                            ['choice_text' => 'La vitesse du liquide, puisqu’il est au repos', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression hydrostatique augmente avec la profondeur selon la relation Δp = ρgΔh.',
                    ],

                    [
                        'question' => 'Deux points situés à la même profondeur dans un même liquide au repos ont, dans des conditions identiques, une pression...',
                        'choices' => [
                            ['choice_text' => 'Identique', 'is_correct' => true],
                            ['choice_text' => 'Toujours différente', 'is_correct' => false],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                            ['choice_text' => 'Dépendante uniquement de la couleur du récipient', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un liquide homogène au repos, la pression à une profondeur donnée est indépendante de la forme du récipient.',
                    ],

                    [
                        'question' => 'La poussée d’Archimède exercée sur un objet immergé est égale en intensité...',
                        'choices' => [
                            ['choice_text' => 'Au poids du fluide déplacé', 'is_correct' => true],
                            ['choice_text' => 'Au poids de l’objet dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'À la masse de l’objet', 'is_correct' => false],
                            ['choice_text' => 'À la pression atmosphérique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon le principe d’Archimède, la poussée est égale au poids du fluide déplacé.',
                    ],

                    [
                        'question' => 'Un objet coule dans un liquide lorsque, dans la situation initiale, son poids est...',
                        'choices' => [
                            ['choice_text' => 'Supérieur à la poussée d’Archimède', 'is_correct' => true],
                            ['choice_text' => 'Toujours inférieur à la poussée', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement égal à zéro', 'is_correct' => false],
                            ['choice_text' => 'Égal à la pression atmosphérique', 'is_correct' => false],
                        ],
                        'explanation' => 'Si le poids est supérieur à la poussée d’Archimède, la résultante est dirigée vers le bas et l’objet tend à couler.',
                    ],

                    [
                        'question' => 'Lorsqu’un métal chaud est mis en contact avec de l’eau plus froide, l’énergie thermique se transfère spontanément...',
                        'choices' => [
                            ['choice_text' => 'Du métal vers l’eau', 'is_correct' => true],
                            ['choice_text' => 'De l’eau vers le métal uniquement', 'is_correct' => false],
                            ['choice_text' => 'Dans aucune direction', 'is_correct' => false],
                            ['choice_text' => 'Uniquement si les masses sont identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La chaleur se transfère spontanément du corps à température plus élevée vers celui à température plus faible.',
                    ],

                    [
                        'question' => 'Dans un liquide chauffé par le bas, la convection apparaît principalement parce que...',
                        'choices' => [
                            ['choice_text' => Le liquide chauffé devient généralement moins dense et peut monter', 'is_correct' => true],
                            ['choice_text' => 'Le liquide chaud devient toujours plus dense', 'is_correct' => false],
                            ['choice_text' => 'La gravité disparaît', 'is_correct' => false],
                            ['choice_text' => 'La conduction est impossible dans les liquides', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chauffage peut diminuer la densité d’une portion de liquide, provoquant son déplacement vers le haut et favorisant les courants de convection.',
                    ],

                    [
                        'question' => 'Pourquoi une casserole métallique devient-elle chaude lorsqu’elle est placée sur une source de chaleur ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie thermique se propage notamment par conduction dans le métal', 'is_correct' => true],
                            ['choice_text' => 'Le métal crée spontanément de la masse', 'is_correct' => false],
                            ['choice_text' => 'La gravité transforme directement la masse en chaleur', 'is_correct' => false],
                            ['choice_text' => 'Le métal bloque totalement les transferts thermiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les métaux permettent généralement une bonne conduction thermique, ce qui facilite la propagation de l’énergie thermique.',
                    ],

                    [
                        'question' => 'Une pression de 100 kPa correspond à...',
                        'choices' => [
                            ['choice_text' => '100 000 Pa', 'is_correct' => true],
                            ['choice_text' => '100 Pa', 'is_correct' => false],
                            ['choice_text' => '10 Pa', 'is_correct' => false],
                            ['choice_text' => '1 000 000 Pa', 'is_correct' => false],
                        ],
                        'explanation' => 'Le préfixe kilo signifie 1000. Ainsi, 100 kPa = 100 × 1000 Pa = 100 000 Pa.',
                    ],

                    [
                        'question' => 'Pourquoi une poignée large peut-elle être plus confortable qu’une poignée étroite pour porter le même objet ?',
                        'choices' => [
                            ['choice_text' => 'Elle répartit la force sur une surface plus grande et réduit la pression', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente nécessairement le poids de l’objet', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime la gravité', 'is_correct' => false],
                            ['choice_text' => 'Elle rend la masse de l’objet nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'À force identique, augmenter la surface de contact diminue la pression moyenne selon p = F/S.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Électricité et circuits
            // ============================================================

            [
                'title' => 'Circuits électriques et loi d’Ohm',
                'description' => 'Application des relations entre tension, courant et résistance dans des circuits électriques simples.',
                'questions' => [

                    [
                        'question' => 'Une résistance de 10 Ω est soumise à une tension de 20 V. Quel courant la traverse ?',
                        'choices' => [
                            ['choice_text' => '2 A', 'is_correct' => true],
                            ['choice_text' => '0,5 A', 'is_correct' => false],
                            ['choice_text' => '10 A', 'is_correct' => false],
                            ['choice_text' => '200 A', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon la loi d’Ohm, I = U/R = 20/10 = 2 A.',
                    ],

                    [
                        'question' => 'Deux résistances de 5 Ω et 10 Ω sont montées en série. Quelle est leur résistance équivalente ?',
                        'choices' => [
                            ['choice_text' => '15 Ω', 'is_correct' => true],
                            ['choice_text' => '5 Ω', 'is_correct' => false],
                            ['choice_text' => '2 Ω', 'is_correct' => false],
                            ['choice_text' => '50 Ω', 'is_correct' => false],
                        ],
                        'explanation' => 'En série, les résistances s’additionnent : Req = 5 + 10 = 15 Ω.',
                    ],

                    [
                        'question' => 'Dans un circuit série idéal, l’intensité du courant est...',
                        'choices' => [
                            ['choice_text' => 'La même dans tous les composants traversés successivement', 'is_correct' => true],
                            ['choice_text' => 'Nulle dans tous les composants', 'is_correct' => false],
                            ['choice_text' => 'Toujours différente dans chaque résistance', 'is_correct' => false],
                            ['choice_text' => 'Toujours égale à la tension', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un circuit série sans branchement, le même courant traverse successivement tous les composants.',
                    ],

                    [
                        'question' => 'Dans un montage en parallèle idéal, la tension aux bornes des différentes branches est...',
                        'choices' => [
                            ['choice_text' => 'La même', 'is_correct' => true],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Toujours différente', 'is_correct' => false],
                            ['choice_text' => 'Égale à l’intensité totale', 'is_correct' => false],
                        ],
                        'explanation' => 'Les branches d’un circuit parallèle sont connectées aux mêmes deux nœuds et ont donc la même tension.',
                    ],

                    [
                        'question' => 'Une résistance de 4 Ω est parcourue par un courant de 3 A. Quelle puissance électrique dissipe-t-elle ?',
                        'choices' => [
                            ['choice_text' => '36 W', 'is_correct' => true],
                            ['choice_text' => '12 W', 'is_correct' => false],
                            ['choice_text' => '7 W', 'is_correct' => false],
                            ['choice_text' => '1,33 W', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance dissipée par une résistance vaut P = RI² = 4 × 3² = 36 W.',
                    ],

                    [
                        'question' => 'Si la résistance d’un circuit reste constante et que la tension est doublée, le courant idéal selon la loi d’Ohm...',
                        'choices' => [
                            ['choice_text' => 'Double', 'is_correct' => true],
                            ['choice_text' => 'Est divisé par deux', 'is_correct' => false],
                            ['choice_text' => 'Est multiplié par quatre', 'is_correct' => false],
                            ['choice_text' => 'Devient nécessairement nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec I = U/R et R constante, doubler U entraîne le doublement de I.',
                    ],

                    [
                        'question' => 'Pourquoi un disjoncteur peut-il interrompre un circuit électrique ?',
                        'choices' => [
                            ['choice_text' => 'Pour protéger le circuit contre une situation de courant excessif', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter volontairement le courant', 'is_correct' => false],
                            ['choice_text' => 'Pour produire de la lumière sans source', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer toute la tension en masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Un dispositif de protection peut ouvrir le circuit lorsqu’un courant excessif risque d’endommager les conducteurs ou les équipements.',
                    ],

                    [
                        'question' => 'Une lampe reçoit une tension de 12 V et un courant de 2 A. Quelle est sa puissance électrique ?',
                        'choices' => [
                            ['choice_text' => '24 W', 'is_correct' => true],
                            ['choice_text' => '6 W', 'is_correct' => false],
                            ['choice_text' => '14 W', 'is_correct' => false],
                            ['choice_text' => '0,17 W', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance électrique vaut P = UI = 12 × 2 = 24 W.',
                    ],

                    [
                        'question' => 'Quelle modification augmente la résistance d’un conducteur métallique uniforme en conservant le même matériau et la même section ?',
                        'choices' => [
                            ['choice_text' => 'Augmenter sa longueur', 'is_correct' => true],
                            ['choice_text' => 'Diminuer sa longueur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute tension', 'is_correct' => false],
                            ['choice_text' => 'Réduire uniquement le temps de mesure', 'is_correct' => false],
                        ],
                        'explanation' => 'La résistance d’un conducteur uniforme vérifie R = ρL/S. À matériau et section constants, elle augmente avec la longueur.',
                    ],

                    [
                        'question' => 'Dans un circuit parallèle, si une branche indépendante est ouverte, que se passe-t-il idéalement dans les autres branches ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent continuer à fonctionner si elles restent correctement connectées à la source', 'is_correct' => true],
                            ['choice_text' => 'Toutes les branches deviennent nécessairement ouvertes', 'is_correct' => false],
                            ['choice_text' => 'La tension de la source devient automatiquement nulle', 'is_correct' => false],
                            ['choice_text' => 'Le courant de chaque branche devient nécessairement infini', 'is_correct' => false],
                        ],
                        'explanation' => 'Les branches parallèles sont indépendantes du point de vue du chemin du courant. L’ouverture d’une branche ne coupe pas nécessairement les autres.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Ondes, optique et physique moderne
            // ============================================================

            [
                'title' => 'Ondes, optique et phénomènes physiques',
                'description' => 'Application des relations entre fréquence, longueur d’onde, lumière et phénomènes ondulatoires fondamentaux.',
                'questions' => [

                    [
                        'question' => 'Une onde se propage à 300 m/s avec une fréquence de 50 Hz. Quelle est sa longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => '6 m', 'is_correct' => true],
                            ['choice_text' => '15 000 m', 'is_correct' => false],
                            ['choice_text' => '350 m', 'is_correct' => false],
                            ['choice_text' => '0,17 m', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation v = fλ donne λ = v/f = 300/50 = 6 m.',
                    ],

                    [
                        'question' => 'Une onde possède une longueur d’onde de 2 m et une fréquence de 10 Hz. Quelle est sa vitesse ?',
                        'choices' => [
                            ['choice_text' => '20 m/s', 'is_correct' => true],
                            ['choice_text' => '5 m/s', 'is_correct' => false],
                            ['choice_text' => '12 m/s', 'is_correct' => false],
                            ['choice_text' => '0,2 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec v = fλ, on obtient v = 10 × 2 = 20 m/s.',
                    ],

                    [
                        'question' => 'Lorsque la fréquence d’une onde augmente dans un même milieu où sa vitesse reste constante, sa longueur d’onde...',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente', 'is_correct' => false],
                            ['choice_text' => 'Reste nécessairement constante', 'is_correct' => false],
                            ['choice_text' => 'Devient toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme v = fλ et que v reste constante, une augmentation de f implique une diminution de λ.',
                    ],

                    [
                        'question' => 'Pourquoi un son ne se propage-t-il pas dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il nécessite un milieu matériel pour transmettre la perturbation', 'is_correct' => true],
                            ['choice_text' => 'Parce que le son possède une masse nulle', 'is_correct' => false],
                            ['choice_text' => 'Parce que la gravité du vide est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Parce que sa fréquence devient infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le son est une onde mécanique : il nécessite des particules de matière capables de transmettre la perturbation.',
                    ],

                    [
                        'question' => 'Un rayon lumineux passe de l’air vers le verre. Que peut-il arriver à sa direction ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut changer à cause de la réfraction', 'is_correct' => true],
                            ['choice_text' => 'Elle devient toujours parallèle à la surface', 'is_correct' => false],
                            ['choice_text' => 'La lumière cesse nécessairement de se propager', 'is_correct' => false],
                            ['choice_text' => 'Elle est obligatoirement transformée en son', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsqu’une onde lumineuse passe d’un milieu à un autre avec un indice différent, sa vitesse change et sa direction peut être modifiée.',
                    ],

                    [
                        'question' => 'Quel phénomène permet d’expliquer la formation d’un arc-en-ciel à partir de la lumière solaire et des gouttes d’eau ?',
                        'choices' => [
                            ['choice_text' => 'Notamment la réfraction, la réflexion et la dispersion de la lumière', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la conduction thermique', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la gravitation', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la conduction électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les gouttes d’eau peuvent réfracter, réfléchir et disperser la lumière solaire, séparant notamment ses différentes composantes spectrales.',
                    ],

                    [
                        'question' => 'Un son de fréquence plus élevée est généralement perçu comme ayant une hauteur...',
                        'choices' => [
                            ['choice_text' => 'Plus aiguë', 'is_correct' => true],
                            ['choice_text' => 'Plus grave', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement plus forte', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement plus faible', 'is_correct' => false],
                        ],
                        'explanation' => 'La hauteur perçue d’un son est liée à sa fréquence : une fréquence plus élevée correspond généralement à un son plus aigu.',
                    ],

                    [
                        'question' => 'Quelle différence existe entre fréquence et amplitude d’une onde ?',
                        'choices' => [
                            ['choice_text' => 'La fréquence décrit le rythme des oscillations tandis que l’amplitude caractérise leur importance', 'is_correct' => true],
                            ['choice_text' => 'Les deux grandeurs représentent toujours exactement la même chose', 'is_correct' => false],
                            ['choice_text' => 'La fréquence mesure uniquement la distance', 'is_correct' => false],
                            ['choice_text' => 'L’amplitude mesure uniquement le nombre de cycles par seconde', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence indique le nombre d’oscillations par seconde, tandis que l’amplitude mesure l’écart maximal par rapport à la position d’équilibre dans une représentation adaptée.',
                    ],

                    [
                        'question' => 'Une source lumineuse émet principalement une lumière de fréquence plus élevée qu’une autre source dans le domaine visible. Cette lumière tend vers...',
                        'choices' => [
                            ['choice_text' => 'Le violet', 'is_correct' => true],
                            ['choice_text' => 'Le rouge', 'is_correct' => false],
                            ['choice_text' => 'L’infrarouge', 'is_correct' => false],
                            ['choice_text' => 'Les micro-ondes', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le domaine visible, le violet correspond à des fréquences plus élevées et des longueurs d’onde plus courtes que le rouge.',
                    ],

                    [
                        'question' => 'Quel énoncé décrit correctement la relation entre période et fréquence d’une oscillation régulière ?',
                        'choices' => [
                            ['choice_text' => 'La fréquence est l’inverse de la période', 'is_correct' => true],
                            ['choice_text' => 'La fréquence est toujours égale à la période', 'is_correct' => false],
                            ['choice_text' => 'La fréquence est le carré de la période', 'is_correct' => false],
                            ['choice_text' => 'La période ne dépend jamais de la fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une oscillation périodique, la fréquence et la période sont liées par f = 1/T.',
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

                // Mélange des objets complets :
                // is_correct reste attaché à la bonne réponse.
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