<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class KinematicsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'kinematics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Cinématique à une dimension
            // ============================================================

            [
                'title' => 'Cinématique rectiligne',
                'description' => 'Étude intermédiaire de la position, de la vitesse et de l’accélération dans les mouvements à une dimension.',
                'questions' => [

                    [
                        'question' => 'La position d’un mobile est donnée par x(t) = 4t² + 2t - 3 en mètres. Quelle est sa vitesse ?',
                        'choices' => [
                            ['choice_text' => 'v(t) = 8t + 2', 'is_correct' => true],
                            ['choice_text' => 'v(t) = 4t + 2', 'is_correct' => false],
                            ['choice_text' => 'v(t) = 8t² + 2', 'is_correct' => false],
                            ['choice_text' => 'v(t) = 4t² + 2t', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse est la dérivée de x(t) : v(t) = dx/dt = 8t + 2.',
                    ],

                    [
                        'question' => 'Pour x(t) = 4t² + 2t - 3, quelle est l’accélération ?',
                        'choices' => [
                            ['choice_text' => '8 m/s²', 'is_correct' => true],
                            ['choice_text' => '4 m/s²', 'is_correct' => false],
                            ['choice_text' => '8t m/s²', 'is_correct' => false],
                            ['choice_text' => '2 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de v(t) = 8t + 2 donne une accélération constante a = 8 m/s².',
                    ],

                    [
                        'question' => 'Un mobile possède une vitesse v(t) = 6t - 4 m/s. À quel instant sa vitesse est-elle nulle ?',
                        'choices' => [
                            ['choice_text' => '2/3 s', 'is_correct' => true],
                            ['choice_text' => '2 s', 'is_correct' => false],
                            ['choice_text' => '3/2 s', 'is_correct' => false],
                            ['choice_text' => '4 s', 'is_correct' => false],
                        ],
                        'explanation' => 'On impose v = 0 : 6t - 4 = 0, donc t = 4/6 = 2/3 s.',
                    ],

                    [
                        'question' => 'Un objet passe de 3 m/s à 15 m/s en 4 s avec une accélération constante. Quelle est son accélération ?',
                        'choices' => [
                            ['choice_text' => '3 m/s²', 'is_correct' => true],
                            ['choice_text' => '4 m/s²', 'is_correct' => false],
                            ['choice_text' => '12 m/s²', 'is_correct' => false],
                            ['choice_text' => '18 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a = (vf - vi)/Δt = (15 - 3)/4 = 3 m/s².',
                    ],

                    [
                        'question' => 'Un mobile possède v0 = 5 m/s et a = 2 m/s². Quelle est sa vitesse après 7 s ?',
                        'choices' => [
                            ['choice_text' => '19 m/s', 'is_correct' => true],
                            ['choice_text' => '14 m/s', 'is_correct' => false],
                            ['choice_text' => '17 m/s', 'is_correct' => false],
                            ['choice_text' => '24 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'v = v0 + at = 5 + 2 × 7 = 19 m/s.',
                    ],

                    [
                        'question' => 'Un objet se déplace avec v0 = 2 m/s et a = 3 m/s². Quel déplacement réalise-t-il en 4 s ?',
                        'choices' => [
                            ['choice_text' => '32 m', 'is_correct' => true],
                            ['choice_text' => '24 m', 'is_correct' => false],
                            ['choice_text' => '28 m', 'is_correct' => false],
                            ['choice_text' => '14 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Δx = v0t + 1/2 at² = 2×4 + 1/2×3×16 = 8 + 24 = 32 m.',
                    ],

                    [
                        'question' => 'Un mobile part du repos avec une accélération de 5 m/s². Quelle distance parcourt-il pendant sa quatrième seconde ?',
                        'choices' => [
                            ['choice_text' => '17,5 m', 'is_correct' => true],
                            ['choice_text' => '10 m', 'is_correct' => false],
                            ['choice_text' => '20 m', 'is_correct' => false],
                            ['choice_text' => '12,5 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Distance parcourue pendant la 4e seconde : x(4) - x(3) = 1/2×5×16 - 1/2×5×9 = 40 - 22,5 = 17,5 m.',
                    ],

                    [
                        'question' => 'Un mobile a une vitesse initiale de 12 m/s et ralentit avec a = -3 m/s². Quelle distance parcourt-il avant de s’arrêter ?',
                        'choices' => [
                            ['choice_text' => '24 m', 'is_correct' => true],
                            ['choice_text' => '36 m', 'is_correct' => false],
                            ['choice_text' => '12 m', 'is_correct' => false],
                            ['choice_text' => '18 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec vf² = v0² + 2aΔx, 0 = 144 - 6Δx, donc Δx = 24 m.',
                    ],

                    [
                        'question' => 'Si l’accélération d’un mobile est constante et négative alors que sa vitesse initiale est positive, que peut-il se produire ?',
                        'choices' => [
                            ['choice_text' => Le mobile peut ralentir, s’arrêter puis repartir dans le sens opposé', 'is_correct' => true],
                            ['choice_text' => 'Le mobile doit rester immobile', 'is_correct' => false],
                            ['choice_text' => 'Sa vitesse doit rester positive', 'is_correct' => false],
                            ['choice_text' => 'Son accélération devient automatiquement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une accélération négative peut faire diminuer la vitesse jusqu’à zéro puis changer son signe.',
                    ],

                    [
                        'question' => 'Pour un mouvement rectiligne uniformément accéléré, quelle quantité correspond à la pente du graphe v(t) ?',
                        'choices' => [
                            ['choice_text' => 'L’accélération', 'is_correct' => true],
                            ['choice_text' => 'La position initiale', 'is_correct' => false],
                            ['choice_text' => 'La distance totale', 'is_correct' => false],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente de v(t) est dv/dt, donc l’accélération.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Mouvement relatif
            // ============================================================

            [
                'title' => 'Mouvement relatif et référentiels',
                'description' => 'Analyse des vitesses relatives et des changements de référentiel galiléens.',
                'questions' => [

                    [
                        'question' => 'Un train avance à 20 m/s par rapport au sol. Un passager marche à 2 m/s vers l’avant par rapport au train. Quelle est sa vitesse par rapport au sol ?',
                        'choices' => [
                            ['choice_text' => '22 m/s', 'is_correct' => true],
                            ['choice_text' => '18 m/s', 'is_correct' => false],
                            ['choice_text' => '20 m/s', 'is_correct' => false],
                            ['choice_text' => '10 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vitesses sont dans le même sens : vpassager/sol = 20 + 2 = 22 m/s.',
                    ],

                    [
                        'question' => 'Le même passager marche à 2 m/s vers l’arrière du train. Quelle est sa vitesse par rapport au sol ?',
                        'choices' => [
                            ['choice_text' => '18 m/s', 'is_correct' => true],
                            ['choice_text' => '22 m/s', 'is_correct' => false],
                            ['choice_text' => '-18 m/s', 'is_correct' => false],
                            ['choice_text' => '2 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'La marche est opposée au mouvement du train : 20 - 2 = 18 m/s.',
                    ],

                    [
                        'question' => 'Deux voitures se déplacent à 30 m/s et 20 m/s dans le même sens. Quelle est la vitesse de la première par rapport à la seconde ?',
                        'choices' => [
                            ['choice_text' => '10 m/s', 'is_correct' => true],
                            ['choice_text' => '50 m/s', 'is_correct' => false],
                            ['choice_text' => '600 m/s', 'is_correct' => false],
                            ['choice_text' => '20 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse relative vaut 30 - 20 = 10 m/s.',
                    ],

                    [
                        'question' => 'Deux voitures se déplacent à 25 m/s et -15 m/s sur un même axe. Quelle est la vitesse de la première par rapport à la seconde ?',
                        'choices' => [
                            ['choice_text' => '40 m/s', 'is_correct' => true],
                            ['choice_text' => '10 m/s', 'is_correct' => false],
                            ['choice_text' => '375 m/s', 'is_correct' => false],
                            ['choice_text' => '-40 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'v1/2 = v1 - v2 = 25 - (-15) = 40 m/s.',
                    ],

                    [
                        'question' => 'Un nageur nage à 2 m/s par rapport à l’eau, tandis qu’un courant s’écoule à 1 m/s dans le même sens. Sa vitesse par rapport à la rive est...',
                        'choices' => [
                            ['choice_text' => '3 m/s', 'is_correct' => true],
                            ['choice_text' => '1 m/s', 'is_correct' => false],
                            ['choice_text' => '2 m/s', 'is_correct' => false],
                            ['choice_text' => '0,5 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vitesses s’additionnent lorsqu’elles ont le même sens : 2 + 1 = 3 m/s.',
                    ],

                    [
                        'question' => 'Un avion vole à 200 m/s vers l’est par rapport à l’air et subit un vent de 30 m/s vers l’ouest. Sa vitesse par rapport au sol vaut...',
                        'choices' => [
                            ['choice_text' => '170 m/s vers l’est', 'is_correct' => true],
                            ['choice_text' => '230 m/s vers l’est', 'is_correct' => false],
                            ['choice_text' => '30 m/s vers l’est', 'is_correct' => false],
                            ['choice_text' => '200 m/s vers l’ouest', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vent est opposé : 200 - 30 = 170 m/s vers l’est.',
                    ],

                    [
                        'question' => 'Pourquoi une vitesse dépend-elle du référentiel alors qu’une distance parcourue peut aussi dépendre du chemin ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse dépend de l’évolution de la position dans le référentiel choisi', 'is_correct' => true],
                            ['choice_text' => 'La vitesse est toujours absolue en mécanique classique', 'is_correct' => false],
                            ['choice_text' => 'La vitesse dépend uniquement de la masse', 'is_correct' => false],
                            ['choice_text' => 'Le référentiel ne joue aucun rôle', 'is_correct' => false],
                        ],
                        'explanation' => 'En mécanique classique, la position et donc la vitesse sont relatives au référentiel.',
                    ],

                    [
                        'question' => 'Dans une transformation galiléenne entre deux référentiels en translation uniforme, l’accélération d’une particule reste...',
                        'choices' => [
                            ['choice_text' => 'La même', 'is_correct' => true],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Multipliée par la vitesse du référentiel', 'is_correct' => false],
                            ['choice_text' => 'Toujours inversée', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des référentiels galiléens en translation uniforme, l’accélération est invariante.',
                    ],

                    [
                        'question' => 'Un passager lance verticalement une balle dans un train en mouvement rectiligne uniforme. Dans le référentiel du train, la balle monte et redescend verticalement. Dans le référentiel du sol, sa trajectoire idéale est...',
                        'choices' => [
                            ['choice_text' => 'Parabolique', 'is_correct' => true],
                            ['choice_text' => 'Verticale uniquement', 'is_correct' => false],
                            ['choice_text' => 'Circulaire', 'is_correct' => false],
                            ['choice_text' => 'Rectiligne horizontale', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le référentiel du sol, la balle conserve la vitesse horizontale du train et subit une accélération verticale, donnant une parabole.',
                    ],

                    [
                        'question' => 'Deux observateurs inertiels mesurent des vitesses différentes pour une même particule. Quelle affirmation est correcte ?',
                        'choices' => [
                            ['choice_text' => Ils peuvent obtenir des vitesses différentes tout en étant cohérents avec la mécanique classique', 'is_correct' => true],
                            ['choice_text' => 'L’un des deux doit nécessairement se tromper', 'is_correct' => false],
                            ['choice_text' => 'La vitesse est toujours identique dans tout référentiel', 'is_correct' => false],
                            ['choice_text' => 'La masse de la particule change automatiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse dépend du référentiel ; les référentiels inertiels restent toutefois liés par les transformations galiléennes.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Projectiles
            // ============================================================

            [
                'title' => 'Mouvement des projectiles',
                'description' => 'Analyse des tirs paraboliques avec décomposition horizontale et verticale.',
                'questions' => [

                    [
                        'question' => 'Dans le mouvement d’un projectile sans résistance de l’air, quelle composante de l’accélération est constante ?',
                        'choices' => [
                            ['choice_text' => 'La composante verticale égale à -g si l’axe vertical est orienté vers le haut', 'is_correct' => true],
                            ['choice_text' => 'La composante horizontale égale à g', 'is_correct' => false],
                            ['choice_text' => 'Les deux composantes sont toujours nulles', 'is_correct' => false],
                            ['choice_text' => 'La composante horizontale égale à -g', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans résistance de l’air, ax = 0 et ay = -g dans un repère où y est positif vers le haut.',
                    ],

                    [
                        'question' => 'Un projectile est lancé avec une vitesse initiale de 20 m/s sous un angle de 30°. Quelle est approximativement sa composante horizontale ?',
                        'choices' => [
                            ['choice_text' => '17,3 m/s', 'is_correct' => true],
                            ['choice_text' => '10 m/s', 'is_correct' => false],
                            ['choice_text' => '20 m/s', 'is_correct' => false],
                            ['choice_text' => '14,1 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'v0x = v0 cos30° ≈ 20 × 0,866 = 17,3 m/s.',
                    ],

                    [
                        'question' => 'Pour le même projectile, quelle est approximativement sa composante verticale initiale ?',
                        'choices' => [
                            ['choice_text' => '10 m/s', 'is_correct' => true],
                            ['choice_text' => '17,3 m/s', 'is_correct' => false],
                            ['choice_text' => '20 m/s', 'is_correct' => false],
                            ['choice_text' => '5 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'v0y = v0 sin30° = 20 × 0,5 = 10 m/s.',
                    ],

                    [
                        'question' => 'Au sommet de la trajectoire d’un projectile, la composante verticale de la vitesse est...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Égale à g', 'is_correct' => false],
                            ['choice_text' => 'Égale à la vitesse initiale', 'is_correct' => false],
                            ['choice_text' => 'Toujours négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Au sommet, vy = 0 momentanément.',
                    ],

                    [
                        'question' => 'Au sommet du projectile précédent, la composante horizontale de la vitesse est...',
                        'choices' => [
                            ['choice_text' => 'Égale à sa valeur initiale dans le modèle sans air', 'is_correct' => true],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                            ['choice_text' => 'Égale à g', 'is_correct' => false],
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme ax = 0, la composante horizontale reste constante.',
                    ],

                    [
                        'question' => 'Un projectile est lancé horizontalement à 8 m/s depuis une hauteur de 20 m. En prenant g = 10 m/s², combien de temps met-il à atteindre le sol ?',
                        'choices' => [
                            ['choice_text' => '2 s', 'is_correct' => true],
                            ['choice_text' => '1 s', 'is_correct' => false],
                            ['choice_text' => '4 s', 'is_correct' => false],
                            ['choice_text' => '8 s', 'is_correct' => false],
                        ],
                        'explanation' => 'Verticalement, 20 = 1/2 × 10 × t², donc t² = 4 et t = 2 s.',
                    ],

                    [
                        'question' => 'Pour le projectile précédent, quelle distance horizontale parcourt-il avant l’impact ?',
                        'choices' => [
                            ['choice_text' => '16 m', 'is_correct' => true],
                            ['choice_text' => '8 m', 'is_correct' => false],
                            ['choice_text' => '20 m', 'is_correct' => false],
                            ['choice_text' => '40 m', 'is_correct' => false],
                        ],
                        'explanation' => 'x = v0x t = 8 × 2 = 16 m.',
                    ],

                    [
                        'question' => 'Pour un projectile lancé depuis et revenant à la même hauteur sans résistance de l’air, quelle expression donne approximativement la portée horizontale ?',
                        'choices' => [
                            ['choice_text' => R = v0² sin(2θ)/g', 'is_correct' => true],
                            ['choice_text' => 'R = v0² cos(2θ)/g', 'is_correct' => false],
                            ['choice_text' => 'R = v0 sinθ/g', 'is_correct' => false],
                            ['choice_text' => 'R = v0²/g²', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un lancement et une réception à même hauteur, R = v0² sin(2θ)/g.',
                    ],

                    [
                        'question' => 'Pour une vitesse initiale donnée et un même niveau de départ et d’arrivée, quel angle maximise théoriquement la portée sans résistance de l’air ?',
                        'choices' => [
                            ['choice_text' => '45°', 'is_correct' => true],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'La portée est proportionnelle à sin(2θ), qui atteint son maximum lorsque 2θ = 90°, donc θ = 45°.',
                    ],

                    [
                        'question' => 'Pourquoi la trajectoire idéale d’un projectile est-elle une parabole ?',
                        'choices' => [
                            ['choice_text' => La position horizontale varie linéairement avec le temps tandis que la position verticale varie quadratiquement', 'is_correct' => true],
                            ['choice_text' => 'Les deux coordonnées varient linéairement', 'is_correct' => false],
                            ['choice_text' => 'La gravité est horizontale', 'is_correct' => false],
                            ['choice_text' => 'La vitesse est constante dans toutes les directions', 'is_correct' => false],
                        ],
                        'explanation' => 'Éliminer le temps entre x = v0x t et y = v0y t - 1/2 gt² donne une équation quadratique en x.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Mouvement circulaire
            // ============================================================

            [
                'title' => 'Cinématique circulaire',
                'description' => 'Étude intermédiaire du mouvement circulaire uniforme et des grandeurs angulaires.',
                'questions' => [

                    [
                        'question' => 'Quelle relation relie la vitesse tangentielle v, le rayon R et la vitesse angulaire ω ?',
                        'choices' => [
                            ['choice_text' => 'v = Rω', 'is_correct' => true],
                            ['choice_text' => 'v = ω/R', 'is_correct' => false],
                            ['choice_text' => 'v = R/ω', 'is_correct' => false],
                            ['choice_text' => 'v = R + ω', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation cinématique fondamentale est v = Rω.',
                    ],

                    [
                        'question' => 'Un objet tourne à 3 Hz. Quelle est sa vitesse angulaire ?',
                        'choices' => [
                            ['choice_text' => '6π rad/s', 'is_correct' => true],
                            ['choice_text' => '3π rad/s', 'is_correct' => false],
                            ['choice_text' => '3 rad/s', 'is_correct' => false],
                            ['choice_text' => '2π/3 rad/s', 'is_correct' => false],
                        ],
                        'explanation' => 'ω = 2πf = 2π × 3 = 6π rad/s.',
                    ],

                    [
                        'question' => 'Un disque tourne à 120 tours/minute. Quelle est sa fréquence en hertz ?',
                        'choices' => [
                            ['choice_text' => '2 Hz', 'is_correct' => true],
                            ['choice_text' => '60 Hz', 'is_correct' => false],
                            ['choice_text' => '120 Hz', 'is_correct' => false],
                            ['choice_text' => '0,5 Hz', 'is_correct' => false],
                        ],
                        'explanation' => '120 tours/min = 120/60 = 2 tours/s = 2 Hz.',
                    ],

                    [
                        'question' => 'Un point situé à 0,5 m de l’axe tourne avec ω = 10 rad/s. Quelle est sa vitesse tangentielle ?',
                        'choices' => [
                            ['choice_text' => '5 m/s', 'is_correct' => true],
                            ['choice_text' => '20 m/s', 'is_correct' => false],
                            ['choice_text' => '10 m/s', 'is_correct' => false],
                            ['choice_text' => '0,05 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'v = Rω = 0,5 × 10 = 5 m/s.',
                    ],

                    [
                        'question' => 'Un point tourne sur un cercle de rayon 4 m à 8 m/s. Quelle est son accélération centripète ?',
                        'choices' => [
                            ['choice_text' => '16 m/s²', 'is_correct' => true],
                            ['choice_text' => '32 m/s²', 'is_correct' => false],
                            ['choice_text' => '2 m/s²', 'is_correct' => false],
                            ['choice_text' => '64 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'ac = v²/R = 64/4 = 16 m/s².',
                    ],

                    [
                        'question' => 'Quelle relation équivalente donne l’accélération centripète en fonction de ω et R ?',
                        'choices' => [
                            ['choice_text' => 'ac = ω²R', 'is_correct' => true],
                            ['choice_text' => 'ac = ωR²', 'is_correct' => false],
                            ['choice_text' => 'ac = ω/R', 'is_correct' => false],
                            ['choice_text' => 'ac = R/ω²', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme v = Rω, ac = v²/R = Rω².',
                    ],

                    [
                        'question' => 'Dans un mouvement circulaire uniforme, quelle composante de l’accélération tangentielle est présente ?',
                        'choices' => [
                            ['choice_text' => 'Elle est nulle', 'is_correct' => true],
                            ['choice_text' => 'Elle est égale à g', 'is_correct' => false],
                            ['choice_text' => 'Elle est maximale', 'is_correct' => false],
                            ['choice_text' => 'Elle est égale à v²/R', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse scalaire étant constante, l’accélération tangentielle est nulle.',
                    ],

                    [
                        'question' => 'Dans un mouvement circulaire uniforme, pourquoi l’accélération reste-t-elle non nulle ?',
                        'choices' => [
                            ['choice_text' => 'La direction du vecteur vitesse change continuellement', 'is_correct' => true],
                            ['choice_text' => 'La norme de la vitesse augmente', 'is_correct' => false],
                            ['choice_text' => 'La masse augmente', 'is_correct' => false],
                            ['choice_text' => 'Le rayon change nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération correspond à la variation du vecteur vitesse, pas uniquement de sa norme.',
                    ],

                    [
                        'question' => 'La période T d’un mouvement circulaire uniforme est reliée à la fréquence f par...',
                        'choices' => [
                            ['choice_text' => 'T = 1/f', 'is_correct' => true],
                            ['choice_text' => 'T = f', 'is_correct' => false],
                            ['choice_text' => 'T = 2πf', 'is_correct' => false],
                            ['choice_text' => 'T = f²', 'is_correct' => false],
                        ],
                        'explanation' => 'La période est le temps nécessaire pour effectuer un cycle et vérifie T = 1/f.',
                    ],

                    [
                        'question' => 'Si le rayon est doublé et que la vitesse angulaire reste constante, la vitesse tangentielle...',
                        'choices' => [
                            ['choice_text' => 'Double', 'is_correct' => true],
                            ['choice_text' => 'Est divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'Est multipliée par quatre', 'is_correct' => false],
                            ['choice_text' => 'Reste constante', 'is_correct' => false],
                        ],
                        'explanation' => 'v = Rω. À ω constant, doubler R double v.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Accélération tangentielle et normale
            // ============================================================

            [
                'title' => 'Accélération tangentielle et normale',
                'description' => 'Décomposition de l’accélération dans les mouvements curvilignes.',
                'questions' => [

                    [
                        'question' => 'Dans un mouvement curviligne, quelle composante de l’accélération modifie principalement la norme de la vitesse ?',
                        'choices' => [
                            ['choice_text' => 'L’accélération tangentielle', 'is_correct' => true],
                            ['choice_text' => 'L’accélération normale', 'is_correct' => false],
                            ['choice_text' => 'L’accélération centripète uniquement', 'is_correct' => false],
                            ['choice_text' => 'Aucune', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante tangentielle est parallèle à la vitesse et modifie sa norme.',
                    ],

                    [
                        'question' => 'Quelle composante modifie principalement la direction du vecteur vitesse ?',
                        'choices' => [
                            ['choice_text' => 'L’accélération normale', 'is_correct' => true],
                            ['choice_text' => 'L’accélération tangentielle', 'is_correct' => false],
                            ['choice_text' => 'L’accélération nulle', 'is_correct' => false],
                            ['choice_text' => 'La vitesse moyenne', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération normale est perpendiculaire à la vitesse et courbe la trajectoire.',
                    ],

                    [
                        'question' => 'Quelle relation donne l’accélération normale pour une trajectoire de rayon de courbure ρ ?',
                        'choices' => [
                            ['choice_text' => 'an = v²/ρ', 'is_correct' => true],
                            ['choice_text' => 'an = vρ', 'is_correct' => false],
                            ['choice_text' => 'an = ρ/v²', 'is_correct' => false],
                            ['choice_text' => 'an = v/ρ²', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération normale vaut an = v²/ρ.',
                    ],

                    [
                        'question' => 'Pour une trajectoire rectiligne, le rayon de courbure est idéalement...',
                        'choices' => [
                            ['choice_text' => 'Infini', 'is_correct' => true],
                            ['choice_text' => 'Nul', 'is_correct' => false],
                            ['choice_text' => 'Égal à la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Égal à l’accélération', 'is_correct' => false],
                        ],
                        'explanation' => 'Une trajectoire parfaitement droite peut être considérée comme ayant une courbure nulle, donc un rayon de courbure infini.',
                    ],

                    [
                        'question' => 'Si la vitesse augmente alors que le rayon de courbure reste constant, l’accélération normale...',
                        'choices' => [
                            ['choice_text' => 'Augmente comme le carré de la vitesse', 'is_correct' => true],
                            ['choice_text' => 'Diminue', 'is_correct' => false],
                            ['choice_text' => 'Reste constante', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'an = v²/ρ. Elle varie donc avec le carré de la vitesse.',
                    ],

                    [
                        'question' => 'Un mobile se déplace sur un cercle de rayon 5 m à 10 m/s et accélère tangentiellement à 2 m/s². Quelle est sa composante normale ?',
                        'choices' => [
                            ['choice_text' => '20 m/s²', 'is_correct' => true],
                            ['choice_text' => '2 m/s²', 'is_correct' => false],
                            ['choice_text' => '50 m/s²', 'is_correct' => false],
                            ['choice_text' => '25 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'an = v²/R = 100/5 = 20 m/s².',
                    ],

                    [
                        'question' => 'Avec at = 2 m/s² et an = 20 m/s², quelle est la norme totale de l’accélération ?',
                        'choices' => [
                            ['choice_text' => '√404 m/s²', 'is_correct' => true],
                            ['choice_text' => '22 m/s²', 'is_correct' => false],
                            ['choice_text' => '18 m/s²', 'is_correct' => false],
                            ['choice_text' => '40 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'Les composantes étant perpendiculaires, a = √(at² + an²) = √(4 + 400) = √404 m/s².',
                    ],

                    [
                        'question' => 'Si la vitesse scalaire est constante sur une trajectoire courbe, l’accélération tangentielle est...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Égale à la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Toujours positive', 'is_correct' => false],
                            ['choice_text' => 'Toujours négative', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse scalaire constante implique une dérivée tangentielle nulle.',
                    ],

                    [
                        'question' => 'Pourquoi un véhicule doit-il ralentir lorsqu’il négocie un virage de petit rayon ?',
                        'choices' => [
                            ['choice_text' => L’accélération normale augmente comme v²/R', 'is_correct' => true],
                            ['choice_text' => 'La masse du véhicule augmente dans le virage', 'is_correct' => false],
                            ['choice_text' => 'La gravité disparaît', 'is_correct' => false],
                            ['choice_text' => 'Le rayon de courbure devient automatiquement infini', 'is_correct' => false],
                        ],
                        'explanation' => 'Un rayon plus faible ou une vitesse plus élevée augmente fortement l’accélération normale requise.',
                    ],

                    [
                        'question' => 'Une accélération purement normale signifie que, localement, la norme de la vitesse...',
                        'choices' => [
                            ['choice_text' => 'Reste constante à cet instant', 'is_correct' => true],
                            ['choice_text' => 'Augmente nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une accélération normale est perpendiculaire à la vitesse et ne modifie pas instantanément sa norme.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Mouvement oscillatoire
            // ============================================================

            [
                'title' => 'Cinématique oscillatoire',
                'description' => 'Étude cinématique des oscillations harmoniques simples.',
                'questions' => [

                    [
                        'question' => 'Une position est donnée par x(t) = A cos(ωt). Quelle est la vitesse ?',
                        'choices' => [
                            ['choice_text' => 'v(t) = -Aω sin(ωt)', 'is_correct' => true],
                            ['choice_text' => 'v(t) = Aω cos(ωt)', 'is_correct' => false],
                            ['choice_text' => 'v(t) = -Aω² cos(ωt)', 'is_correct' => false],
                            ['choice_text' => 'v(t) = A sin(ωt)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de A cos(ωt) est -Aω sin(ωt).',
                    ],

                    [
                        'question' => 'Pour x(t) = A cos(ωt), quelle est l’accélération ?',
                        'choices' => [
                            ['choice_text' => 'a(t) = -Aω² cos(ωt)', 'is_correct' => true],
                            ['choice_text' => 'a(t) = -Aω sin(ωt)', 'is_correct' => false],
                            ['choice_text' => 'a(t) = Aω² sin(ωt)', 'is_correct' => false],
                            ['choice_text' => 'a(t) = Aω cos(ωt)', 'is_correct' => false],
                        ],
                        'explanation' => 'En dérivant une seconde fois, on obtient a(t) = -Aω² cos(ωt) = -ω²x(t).',
                    ],

                    [
                        'question' => 'Dans un mouvement harmonique simple, à quelle position la vitesse a-t-elle sa valeur absolue maximale ?',
                        'choices' => [
                            ['choice_text' => À la position d’équilibre', 'is_correct' => true],
                            ['choice_text' => Aux extrémités', 'is_correct' => false],
                            ['choice_text' => À mi-amplitude uniquement', 'is_correct' => false],
                            ['choice_text' => 'La vitesse est constante', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse est maximale lorsque x = 0.',
                    ],

                    [
                        'question' => 'À quelles positions l’accélération a-t-elle sa valeur absolue maximale ?',
                        'choices' => [
                            ['choice_text' => Aux extrémités de l’oscillation', 'is_correct' => true],
                            ['choice_text' => 'À l’équilibre', 'is_correct' => false],
                            ['choice_text' => 'Lorsque v est maximale', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme a = -ω²x, |a| est maximale lorsque |x| = A.',
                    ],

                    [
                        'question' => 'Un oscillateur a une fréquence de 5 Hz. Quelle est sa période ?',
                        'choices' => [
                            ['choice_text' => '0,2 s', 'is_correct' => true],
                            ['choice_text' => '5 s', 'is_correct' => false],
                            ['choice_text' => '2 s', 'is_correct' => false],
                            ['choice_text' => '10 s', 'is_correct' => false],
                        ],
                        'explanation' => 'T = 1/f = 1/5 = 0,2 s.',
                    ],

                    [
                        'question' => 'Un oscillateur possède une période de 0,5 s. Quelle est sa fréquence ?',
                        'choices' => [
                            ['choice_text' => '2 Hz', 'is_correct' => true],
                            ['choice_text' => '0,5 Hz', 'is_correct' => false],
                            ['choice_text' => '5 Hz', 'is_correct' => false],
                            ['choice_text' => '1 Hz', 'is_correct' => false],
                        ],
                        'explanation' => 'f = 1/T = 1/0,5 = 2 Hz.',
                    ],

                    [
                        'question' => 'Si la pulsation est ω = 4π rad/s, quelle est la fréquence ?',
                        'choices' => [
                            ['choice_text' => '2 Hz', 'is_correct' => true],
                            ['choice_text' => '4 Hz', 'is_correct' => false],
                            ['choice_text' => '8π Hz', 'is_correct' => false],
                            ['choice_text' => 'π/2 Hz', 'is_correct' => false],
                        ],
                        'explanation' => 'f = ω/(2π) = 4π/(2π) = 2 Hz.',
                    ],

                    [
                        'question' => 'Dans un oscillateur harmonique idéal, quelle relation relie amplitude A, pulsation ω et vitesse maximale vmax ?',
                        'choices' => [
                            ['choice_text' => 'vmax = Aω', 'is_correct' => true],
                            ['choice_text' => 'vmax = A/ω', 'is_correct' => false],
                            ['choice_text' => 'vmax = Aω²', 'is_correct' => false],
                            ['choice_text' => 'vmax = ω/A', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse maximale vaut Aω.',
                    ],

                    [
                        'question' => 'Dans un oscillateur harmonique idéal, quelle relation relie amplitude A, pulsation ω et accélération maximale amax ?',
                        'choices' => [
                            ['choice_text' => 'amax = Aω²', 'is_correct' => true],
                            ['choice_text' => 'amax = Aω', 'is_correct' => false],
                            ['choice_text' => 'amax = A/ω²', 'is_correct' => false],
                            ['choice_text' => 'amax = ω/A', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme a = -ω²x, l’accélération maximale vaut Aω² en norme.',
                    ],

                    [
                        'question' => 'Si l’amplitude d’un oscillateur harmonique est doublée sans changer sa pulsation, la vitesse maximale est...',
                        'choices' => [
                            ['choice_text' => 'Doublée', 'is_correct' => true],
                            ['choice_text' => 'Multipliée par quatre', 'is_correct' => false],
                            ['choice_text' => 'Divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'vmax = Aω. À ω constant, doubler A double vmax.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Cinématique en coordonnées polaires
            // ============================================================

            [
                'title' => 'Coordonnées polaires et mouvements plans',
                'description' => 'Introduction aux descriptions cinématiques utilisant les coordonnées polaires.',
                'questions' => [

                    [
                        'question' => 'En coordonnées polaires, quelles sont les deux coordonnées principales d’un point dans un plan ?',
                        'choices' => [
                            ['choice_text' => 'r et θ', 'is_correct' => true],
                            ['choice_text' => 'x et z uniquement', 'is_correct' => false],
                            ['choice_text' => 'p et T uniquement', 'is_correct' => false],
                            ['choice_text' => 'm et v uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les coordonnées polaires décrivent la distance radiale r et l’angle θ.',
                    ],

                    [
                        'question' => 'La vitesse radiale d’un point en coordonnées polaires contient notamment le terme...',
                        'choices' => [
                            ['choice_text' => 'ṙ', 'is_correct' => true],
                            ['choice_text' => 'r²', 'is_correct' => false],
                            ['choice_text' => 'θ/r', 'is_correct' => false],
                            ['choice_text' => 'rθ² uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante radiale de la vitesse est ṙ.',
                    ],

                    [
                        'question' => 'Quelle est l’expression complète de la vitesse en coordonnées polaires ?',
                        'choices' => [
                            ['choice_text' => 'v = ṙ e_r + rθ̇ e_θ', 'is_correct' => true],
                            ['choice_text' => 'v = r e_r + θ e_θ', 'is_correct' => false],
                            ['choice_text' => 'v = ṙθ̇ e_r', 'is_correct' => false],
                            ['choice_text' => 'v = r²e_r + θ²e_θ', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse polaire possède une composante radiale ṙ et une composante transverse rθ̇.',
                    ],

                    [
                        'question' => 'Quelle est l’expression de l’accélération radiale en coordonnées polaires ?',
                        'choices' => [
                            ['choice_text' => 'a_r = r̈ - rθ̇²', 'is_correct' => true],
                            ['choice_text' => 'a_r = r̈ + rθ̇²', 'is_correct' => false],
                            ['choice_text' => 'a_r = rθ̈ uniquement', 'is_correct' => false],
                            ['choice_text' => 'a_r = θ̈ - r²', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante radiale est a_r = r̈ - rθ̇².',
                    ],

                    [
                        'question' => 'Quelle est l’expression de l’accélération transverse en coordonnées polaires ?',
                        'choices' => [
                            ['choice_text' => 'a_θ = rθ̈ + 2ṙθ̇', 'is_correct' => true],
                            ['choice_text' => 'a_θ = rθ̇²', 'is_correct' => false],
                            ['choice_text' => 'a_θ = r̈ - rθ̇²', 'is_correct' => false],
                            ['choice_text' => 'a_θ = ṙθ̈', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante transverse vaut a_θ = rθ̈ + 2ṙθ̇.',
                    ],

                    [
                        'question' => 'Dans un mouvement circulaire de rayon constant, quelle quantité est nulle parmi les dérivées radiales ?',
                        'choices' => [
                            ['choice_text' => 'ṙ et r̈', 'is_correct' => true],
                            ['choice_text' => 'θ̇ et θ̈', 'is_correct' => false],
                            ['choice_text' => 'r et θ', 'is_correct' => false],
                            ['choice_text' => 'Seulement θ', 'is_correct' => false],
                        ],
                        'explanation' => 'Si r est constant, alors ṙ = 0 et r̈ = 0.',
                    ],

                    [
                        'question' => 'Pour un mouvement circulaire uniforme, avec r constant et θ̇ constant, l’accélération polaire est...',
                        'choices' => [
                            ['choice_text' => Entièrement radiale et égale à -rθ̇² e_r', 'is_correct' => true],
                            ['choice_text' => 'Entièrement transverse', 'is_correct' => false],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                            ['choice_text' => 'Toujours positive radialement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce cas, a_r = -rθ̇² et a_θ = 0.',
                    ],

                    [
                        'question' => 'Pourquoi le terme 2ṙθ̇ apparaît-il dans l’accélération transverse ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la base polaire elle-même change lorsque l’angle évolue et que r varie', 'is_correct' => true],
                            ['choice_text' => 'Parce que la masse varie', 'is_correct' => false],
                            ['choice_text' => 'Parce que la gravité est polaire', 'is_correct' => false],
                            ['choice_text' => 'Parce que la vitesse doit être constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vecteurs unitaires e_r et e_θ dépendent de θ ; leurs dérivées introduisent les termes de couplage.',
                    ],

                    [
                        'question' => 'Dans une trajectoire où r augmente avec le temps, que représente principalement ṙ ?',
                        'choices' => [
                            ['choice_text' => La vitesse radiale d’éloignement', 'is_correct' => true],
                            ['choice_text' => 'La vitesse angulaire', 'is_correct' => false],
                            ['choice_text' => 'L’accélération angulaire', 'is_correct' => false],
                            ['choice_text' => 'Le rayon de courbure', 'is_correct' => false],
                        ],
                        'explanation' => 'ṙ mesure la variation de la distance au centre par unité de temps.',
                    ],

                    [
                        'question' => 'Pourquoi les coordonnées polaires sont-elles particulièrement naturelles pour un mouvement central ou orbital ?',
                        'choices' => [
                            ['choice_text' => 'Elles représentent directement la distance au centre et l’angle orbital', 'is_correct' => true],
                            ['choice_text' => 'Elles éliminent toujours toutes les équations différentielles', 'is_correct' => false],
                            ['choice_text' => 'Elles supposent une trajectoire rectiligne', 'is_correct' => false],
                            ['choice_text' => 'Elles ne peuvent décrire que des mouvements circulaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour les forces centrales, la géométrie du problème est naturellement exprimée en r et θ.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Analyse cinématique intégrée
            // ============================================================

            [
                'title' => 'Analyse cinématique intégrée',
                'description' => 'Résolution de problèmes combinant plusieurs outils de cinématique.',
                'questions' => [

                    [
                        'question' => 'Un mobile possède x(t) = 2t³ - 3t² + 4t. Quelle est sa vitesse à t = 2 s ?',
                        'choices' => [
                            ['choice_text' => '16 m/s', 'is_correct' => true],
                            ['choice_text' => '20 m/s', 'is_correct' => false],
                            ['choice_text' => '10 m/s', 'is_correct' => false],
                            ['choice_text' => '8 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'v(t) = 6t² - 6t + 4. À t = 2 : 24 - 12 + 4 = 16 m/s.',
                    ],

                    [
                        'question' => 'Pour le même mobile x(t) = 2t³ - 3t² + 4t, quelle est son accélération à t = 2 s ?',
                        'choices' => [
                            ['choice_text' => '18 m/s²', 'is_correct' => true],
                            ['choice_text' => '12 m/s²', 'is_correct' => false],
                            ['choice_text' => '16 m/s²', 'is_correct' => false],
                            ['choice_text' => '6 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a(t) = 12t - 6. À t = 2 : 24 - 6 = 18 m/s².',
                    ],

                    [
                        'question' => 'La vitesse d’un mobile est v(t) = 3t² - 6t + 2. À t = 1 s, quelle est son accélération ?',
                        'choices' => [
                            ['choice_text' => '0 m/s²', 'is_correct' => true],
                            ['choice_text' => '3 m/s²', 'is_correct' => false],
                            ['choice_text' => '6 m/s²', 'is_correct' => false],
                            ['choice_text' => '-3 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a(t) = dv/dt = 6t - 6. À t = 1, a = 0.',
                    ],

                    [
                        'question' => 'Un objet est lancé verticalement vers le haut à 30 m/s avec g = 10 m/s². Quel est son temps de montée ?',
                        'choices' => [
                            ['choice_text' => '3 s', 'is_correct' => true],
                            ['choice_text' => '2 s', 'is_correct' => false],
                            ['choice_text' => '6 s', 'is_correct' => false],
                            ['choice_text' => '30 s', 'is_correct' => false],
                        ],
                        'explanation' => 'Au sommet v = 0 : 0 = 30 - 10t, donc t = 3 s.',
                    ],

                    [
                        'question' => 'Pour le lancer précédent, quelle hauteur maximale est atteinte ?',
                        'choices' => [
                            ['choice_text' => '45 m', 'is_correct' => true],
                            ['choice_text' => '30 m', 'is_correct' => false],
                            ['choice_text' => '90 m', 'is_correct' => false],
                            ['choice_text' => '15 m', 'is_correct' => false],
                        ],
                        'explanation' => 'hmax = v0²/(2g) = 900/20 = 45 m.',
                    ],

                    [
                        'question' => 'Un véhicule se déplace à 15 m/s sur une route circulaire de rayon 30 m. Quelle est son accélération normale ?',
                        'choices' => [
                            ['choice_text' => '7,5 m/s²', 'is_correct' => true],
                            ['choice_text' => '15 m/s²', 'is_correct' => false],
                            ['choice_text' => '30 m/s²', 'is_correct' => false],
                            ['choice_text' => '0,5 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'an = v²/R = 225/30 = 7,5 m/s².',
                    ],

                    [
                        'question' => 'Un satellite décrit une trajectoire circulaire à vitesse angulaire constante. Quelle quantité reste constante en cinématique idéale ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse angulaire', 'is_correct' => true],
                            ['choice_text' => 'La direction du vecteur vitesse', 'is_correct' => false],
                            ['choice_text' => 'Le vecteur vitesse complet', 'is_correct' => false],
                            ['choice_text' => 'L’accélération tangentielle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un mouvement circulaire uniforme, ω et la norme de v restent constants, mais la direction du vecteur vitesse change.',
                    ],

                    [
                        'question' => 'Une particule a une vitesse v = 3i + 4j m/s et une accélération a = 4i - 3j m/s². Quel angle existe entre les vecteurs vitesse et accélération ?',
                        'choices' => [
                            ['choice_text' => '90°', 'is_correct' => true],
                            ['choice_text' => '0°', 'is_correct' => false],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '180°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit scalaire vaut 3×4 + 4×(-3) = 12 - 12 = 0. Les vecteurs sont perpendiculaires.',
                    ],

                    [
                        'question' => 'Que signifie une accélération perpendiculaire à la vitesse à un instant donné ?',
                        'choices' => [
                            ['choice_text' => La norme de la vitesse ne varie pas instantanément à cet instant', 'is_correct' => true],
                            ['choice_text' => 'La position est nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'Le mobile est nécessairement immobile', 'is_correct' => false],
                            ['choice_text' => 'La trajectoire est nécessairement rectiligne', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante de l’accélération parallèle à la vitesse contrôle la variation de la norme de v. Si elle est nulle, la norme ne varie pas instantanément.',
                    ],

                    [
                        'question' => 'Pourquoi une description cinématique complète nécessite-t-elle à la fois position, vitesse et accélération ?',
                        'choices' => [
                            ['choice_text' => 'Elles décrivent respectivement l’état géométrique, son évolution et la variation de cette évolution', 'is_correct' => true],
                            ['choice_text' => 'Elles représentent trois formes de masse', 'is_correct' => false],
                            ['choice_text' => 'La vitesse suffit toujours à déterminer la position passée', 'is_correct' => false],
                            ['choice_text' => 'L’accélération remplace toujours la position', 'is_correct' => false],
                        ],
                        'explanation' => 'La position décrit où se trouve le mobile, la vitesse comment sa position évolue et l’accélération comment sa vitesse évolue.',
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

                // Mélange réel des choix pour éviter toute position
                // prédictible de la réponse correcte.
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