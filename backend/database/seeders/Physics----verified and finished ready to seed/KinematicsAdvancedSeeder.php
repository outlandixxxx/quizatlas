<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class KinematicsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'kinematics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Cinématique vectorielle avancée
            // ============================================================

            [
                'title' => 'Cinématique vectorielle avancée',
                'description' => 'Analyse vectorielle de la position, de la vitesse et de l’accélération dans les mouvements plans et spatiaux.',
                'questions' => [

                    [
                        'question' => 'La position d’une particule est r(t) = (2t^3 - t)i + (3t^2 + 4)j. Quelle est sa vitesse ?',
                        'choices' => [
                            ['choice_text' => 'v(t) = (6t² - 1)i + 6tj', 'is_correct' => true],
                            ['choice_text' => 'v(t) = (2t² - 1)i + 3tj', 'is_correct' => false],
                            ['choice_text' => 'v(t) = (6t³ - 1)i + (3t²)j', 'is_correct' => false],
                            ['choice_text' => 'v(t) = (6t² + 1)i + 3tj', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse est la dérivée vectorielle de la position : v = dr/dt = (6t² - 1)i + 6tj.',
                    ],

                    [
                        'question' => 'Pour la même particule, quelle est son accélération ?',
                        'choices' => [
                            ['choice_text' => 'a(t) = 12ti + 6j', 'is_correct' => true],
                            ['choice_text' => 'a(t) = 6ti + 12j', 'is_correct' => false],
                            ['choice_text' => 'a(t) = 12t²i + 6tj', 'is_correct' => false],
                            ['choice_text' => 'a(t) = 6ti + 4j', 'is_correct' => false],
                        ],
                        'explanation' => 'On dérive la vitesse : a = dv/dt = 12ti + 6j.',
                    ],

                    [
                        'question' => 'Une particule possède v = 3i + 4j + 12k m/s. Quelle est la norme de sa vitesse ?',
                        'choices' => [
                            ['choice_text' => '13 m/s', 'is_correct' => true],
                            ['choice_text' => '19 m/s', 'is_correct' => false],
                            ['choice_text' => '12 m/s', 'is_correct' => false],
                            ['choice_text' => '25 m/s', 'is_correct' => false],
                        ],
                        'explanation' => '|v| = √(3² + 4² + 12²) = √169 = 13 m/s.',
                    ],

                    [
                        'question' => 'Une particule possède v = 8i + 6j m/s et a = 3i - 4j m/s². Quel est le produit scalaire v·a ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '-24', 'is_correct' => false],
                            ['choice_text' => '50', 'is_correct' => false],
                        ],
                        'explanation' => 'v·a = 8×3 + 6×(-4) = 24 - 24 = 0. L’accélération est donc instantanément perpendiculaire à la vitesse.',
                    ],

                    [
                        'question' => 'Que signifie physiquement v·a = 0 pour une particule à un instant donné ?',
                        'choices' => [
                            ['choice_text' => 'La norme de la vitesse ne varie pas instantanément', 'is_correct' => true],
                            ['choice_text' => 'La particule est immobile', 'is_correct' => false],
                            ['choice_text' => 'L’accélération est nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'La trajectoire est nécessairement rectiligne', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de la norme de la vitesse dépend de la composante de l’accélération parallèle à v. Si v·a = 0, cette composante est nulle.',
                    ],

                    [
                        'question' => 'Dans un mouvement curviligne, quelle relation donne la composante normale de l’accélération ?',
                        'choices' => [
                            ['choice_text' => 'an = v²/ρ', 'is_correct' => true],
                            ['choice_text' => 'an = ρ/v²', 'is_correct' => false],
                            ['choice_text' => 'an = vρ', 'is_correct' => false],
                            ['choice_text' => 'an = dv/dt', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante normale vaut an = v²/ρ, où ρ est le rayon de courbure local.',
                    ],

                    [
                        'question' => 'Quelle composante de l’accélération est directement reliée à la dérivée temporelle de la norme de la vitesse ?',
                        'choices' => [
                            ['choice_text' => 'La composante tangentielle', 'is_correct' => true],
                            ['choice_text' => 'La composante normale', 'is_correct' => false],
                            ['choice_text' => 'La composante binormale uniquement', 'is_correct' => false],
                            ['choice_text' => 'Aucune', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération tangentielle vérifie at = dv/dt.',
                    ],

                    [
                        'question' => 'Une particule se déplace avec une vitesse de norme constante sur une trajectoire courbe. Quelle conclusion est correcte ?',
                        'choices' => [
                            ['choice_text' => 'L’accélération tangentielle est nulle mais l’accélération normale peut être non nulle', 'is_correct' => true],
                            ['choice_text' => 'Toute l’accélération est nulle', 'is_correct' => false],
                            ['choice_text' => 'L’accélération est nécessairement parallèle à la vitesse', 'is_correct' => false],
                            ['choice_text' => 'La vitesse doit augmenter', 'is_correct' => false],
                        ],
                        'explanation' => 'Une norme de vitesse constante impose at = 0, mais la courbure de la trajectoire peut créer une composante normale.',
                    ],

                    [
                        'question' => 'Si le rayon de courbure d’une trajectoire est doublé à vitesse constante, la composante normale de l’accélération devient...',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus faible', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Quatre fois plus faible', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme an = v²/ρ, doubler ρ divise an par deux.',
                    ],

                    [
                        'question' => 'Dans une trajectoire tridimensionnelle, pourquoi la dérivée du vecteur tangent doit-elle être prise avec précaution ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les vecteurs de base peuvent eux-mêmes varier avec la position le long de la trajectoire', 'is_correct' => true],
                            ['choice_text' => 'Parce que la masse change continuellement', 'is_correct' => false],
                            ['choice_text' => 'Parce que la vitesse est toujours constante', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’espace tridimensionnel n’a pas de dérivées', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une base locale, la variation géométrique des vecteurs unitaires participe à l’expression de l’accélération.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Mouvements relatifs
            // ============================================================

            [
                'title' => 'Cinématique relative et transformations galiléennes',
                'description' => 'Analyse avancée des mouvements relatifs entre référentiels inertiels en translation uniforme.',
                'questions' => [

                    [
                        'question' => 'Deux référentiels R et R′ se déplacent l’un par rapport à l’autre à vitesse constante V. Quelle relation vectorielle relie les vitesses d’une particule ?',
                        'choices' => [
                            ['choice_text' => 'v = v′ + V', 'is_correct' => true],
                            ['choice_text' => 'v = v′V', 'is_correct' => false],
                            ['choice_text' => 'v = v′ - V²', 'is_correct' => false],
                            ['choice_text' => 'v = V/v′', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une transformation galiléenne simple avec V constant, la vitesse dans R est la somme de la vitesse relative et de la vitesse de R′.',
                    ],

                    [
                        'question' => 'Sous une transformation galiléenne entre référentiels en translation uniforme, l’accélération d’une particule est...',
                        'choices' => [
                            ['choice_text' => 'Invariante', 'is_correct' => true],
                            ['choice_text' => 'Toujours multipliée par deux', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Inversement proportionnelle à V', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de la vitesse relative constante du référentiel disparaît, donc les accélérations sont identiques dans les référentiels galiléens.',
                    ],

                    [
                        'question' => 'Un bateau avance à 6 m/s vers le nord par rapport à l’eau et le courant vaut 2 m/s vers l’est. Quelle est la norme de sa vitesse par rapport à la rive ?',
                        'choices' => [
                            ['choice_text' => '2√10 m/s', 'is_correct' => true],
                            ['choice_text' => '8 m/s', 'is_correct' => false],
                            ['choice_text' => '4 m/s', 'is_correct' => false],
                            ['choice_text' => '10 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Les composantes sont perpendiculaires : |v| = √(6² + 2²) = √40 = 2√10 m/s.',
                    ],

                    [
                        'question' => 'Un avion doit se déplacer exactement vers le nord avec une vitesse de 250 m/s par rapport au sol alors qu’un vent souffle à 50 m/s vers l’est. Quelle composante vers l’ouest doit-il avoir par rapport à l’air ?',
                        'choices' => [
                            ['choice_text' => '50 m/s', 'is_correct' => true],
                            ['choice_text' => '200 m/s', 'is_correct' => false],
                            ['choice_text' => '250 m/s', 'is_correct' => false],
                            ['choice_text' => '300 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour annuler la composante est du vent, l’avion doit avoir 50 m/s vers l’ouest par rapport à l’air.',
                    ],

                    [
                        'question' => 'Pourquoi un objet peut-il avoir une trajectoire différente dans deux référentiels inertiels ?',
                        'choices' => [
                            ['choice_text' => Les positions changent selon le mouvement relatif des référentiels', 'is_correct' => true],
                            ['choice_text' => 'Les lois de Newton cessent d’être valides', 'is_correct' => false],
                            ['choice_text' => 'La masse de l’objet change', 'is_correct' => false],
                            ['choice_text' => 'Le temps s’écoule à des vitesses différentes en mécanique classique', 'is_correct' => false],
                        ],
                        'explanation' => 'La transformation des coordonnées modifie la représentation de la trajectoire sans modifier les lois de Newton entre référentiels galiléens.',
                    ],

                    [
                        'question' => 'Un passager marche à 1,5 m/s dans un train se déplaçant à 30 m/s. S’il marche vers l’arrière, sa vitesse par rapport au sol vaut...',
                        'choices' => [
                            ['choice_text' => '28,5 m/s dans le sens du train', 'is_correct' => true],
                            ['choice_text' => '31,5 m/s dans le sens du train', 'is_correct' => false],
                            ['choice_text' => '1,5 m/s vers l’arrière', 'is_correct' => false],
                            ['choice_text' => '30 m/s vers l’arrière', 'is_correct' => false],
                        ],
                        'explanation' => 'vsol = 30 - 1,5 = 28,5 m/s dans le sens du train.',
                    ],

                    [
                        'question' => 'Quelle difficulté apparaît lorsqu’on passe à un référentiel en rotation plutôt qu’à un référentiel inertiel en translation uniforme ?',
                        'choices' => [
                            ['choice_text' => Des termes supplémentaires d’inertie apparaissent dans les équations de mouvement', 'is_correct' => true],
                            ['choice_text' => 'La masse disparaît', 'is_correct' => false],
                            ['choice_text' => 'Le temps devient nul', 'is_correct' => false],
                            ['choice_text' => 'La gravité est automatiquement annulée', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les référentiels accélérés ou en rotation, on doit introduire des forces d’inertie pour conserver une forme newtonienne des équations.',
                    ],

                    [
                        'question' => 'Dans un référentiel en rotation, quelle force d’inertie peut apparaître pour une particule possédant une vitesse relative au référentiel ?',
                        'choices' => [
                            ['choice_text' => 'La force de Coriolis', 'is_correct' => true],
                            ['choice_text' => 'La force de gravité artificielle universelle', 'is_correct' => false],
                            ['choice_text' => 'La force électrostatique', 'is_correct' => false],
                            ['choice_text' => 'La force nucléaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La force de Coriolis est proportionnelle à la vitesse relative et à la vitesse angulaire du référentiel.',
                    ],

                    [
                        'question' => 'Pourquoi le mouvement relatif de deux particules peut-il être étudié sans connaître leur mouvement absolu dans certaines situations ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la vitesse relative est la différence de leurs vitesses dans un même référentiel', 'is_correct' => true],
                            ['choice_text' => 'Parce que leurs masses sont nécessairement identiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que la gravité n’agit jamais sur elles', 'is_correct' => false],
                            ['choice_text' => 'Parce que le temps est absolu uniquement pour les particules proches', 'is_correct' => false],
                        ],
                        'explanation' => 'En mécanique classique, vA/B = vA - vB permet de décrire directement leur mouvement l’un par rapport à l’autre.',
                    ],

                    [
                        'question' => 'Une balle lancée verticalement dans un véhicule en mouvement uniforme possède, dans le référentiel du sol, une composante horizontale de vitesse qui...',
                        'choices' => [
                            ['choice_text' => 'Reste égale à la vitesse horizontale initiale du véhicule si l’air est négligé', 'is_correct' => true],
                            ['choice_text' => 'Devient instantanément nulle', 'is_correct' => false],
                            ['choice_text' => 'Double sous l’effet de la gravité', 'is_correct' => false],
                            ['choice_text' => 'Change de signe au sommet', 'is_correct' => false],
                        ],
                        'explanation' => 'Le véhicule et la balle partagent la même vitesse horizontale initiale, et aucune force horizontale n’agit dans le modèle idéal.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Projectiles avancés
            // ============================================================

            [
                'title' => 'Dynamique cinématique des projectiles',
                'description' => 'Analyse avancée des projectiles, trajectoires, portée, hauteur et effets de la vitesse initiale.',
                'questions' => [

                    [
                        'question' => 'Un projectile est lancé avec une vitesse v0 sous un angle θ dans un champ gravitationnel uniforme. Quelle est sa composante verticale initiale ?',
                        'choices' => [
                            ['choice_text' => 'v0 sinθ', 'is_correct' => true],
                            ['choice_text' => 'v0 cosθ', 'is_correct' => false],
                            ['choice_text' => 'v0 tanθ', 'is_correct' => false],
                            ['choice_text' => 'v0/sinθ', 'is_correct' => false],
                        ],
                        'explanation' => 'La décomposition vectorielle donne v0y = v0 sinθ lorsque θ est mesuré depuis l’horizontale.',
                    ],

                    [
                        'question' => 'Quelle est la composante horizontale de la vitesse initiale ?',
                        'choices' => [
                            ['choice_text' => 'v0 cosθ', 'is_correct' => true],
                            ['choice_text' => 'v0 sinθ', 'is_correct' => false],
                            ['choice_text' => 'v0 tanθ', 'is_correct' => false],
                            ['choice_text' => 'v0/g', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante selon x est v0x = v0 cosθ.',
                    ],

                    [
                        'question' => 'Pour un projectile lancé et reçu à la même hauteur, quelle est sa durée totale de vol ?',
                        'choices' => [
                            ['choice_text' => 'T = 2v0 sinθ/g', 'is_correct' => true],
                            ['choice_text' => 'T = v0 cosθ/g', 'is_correct' => false],
                            ['choice_text' => 'T = v0²/g', 'is_correct' => false],
                            ['choice_text' => 'T = 2v0/g²', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante verticale vérifie 0 = v0 sinθ T - 1/2 gT², donnant T = 2v0 sinθ/g.',
                    ],

                    [
                        'question' => 'Pour un même niveau de départ et d’arrivée, la portée horizontale maximale sans résistance de l’air est obtenue pour...',
                        'choices' => [
                            ['choice_text' => 'θ = 45°', 'is_correct' => true],
                            ['choice_text' => 'θ = 30°', 'is_correct' => false],
                            ['choice_text' => 'θ = 60°', 'is_correct' => false],
                            ['choice_text' => 'θ = 90°', 'is_correct' => false],
                        ],
                        'explanation' => 'R = v0² sin(2θ)/g et sin(2θ) est maximal pour 2θ = 90°.',
                    ],

                    [
                        'question' => 'Pour un angle de lancement fixé, si la vitesse initiale est doublée, la portée idéale à même hauteur est multipliée par...',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '√2', 'is_correct' => false],
                        ],
                        'explanation' => 'La portée varie comme v0². Doubler v0 multiplie donc R par quatre.',
                    ],

                    [
                        'question' => 'À angle de lancement fixé, si la vitesse initiale est doublée, la hauteur maximale idéale est multipliée par...',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '√2', 'is_correct' => false],
                        ],
                        'explanation' => 'hmax = v0² sin²θ/(2g), donc elle varie comme v0².',
                    ],

                    [
                        'question' => 'Pourquoi un projectile subit-il une accélération même au sommet de sa trajectoire ?',
                        'choices' => [
                            ['choice_text' => 'L’accélération gravitationnelle reste dirigée vers le bas', 'is_correct' => true],
                            ['choice_text' => 'La vitesse verticale devient infinie', 'is_correct' => false],
                            ['choice_text' => 'La composante horizontale de l’accélération devient g', 'is_correct' => false],
                            ['choice_text' => 'La masse augmente au sommet', 'is_correct' => false],
                        ],
                        'explanation' => 'Au sommet, vy = 0 mais ay = -g reste non nul.',
                    ],

                    [
                        'question' => 'Deux angles complémentaires θ et 90° - θ produisent la même portée idéale lorsque les hauteurs initiale et finale sont identiques.',
                        'choices' => [
                            ['choice_text' => 'Vrai', 'is_correct' => true],
                            ['choice_text' => 'Faux', 'is_correct' => false],
                            ['choice_text' => 'Uniquement pour θ = 45°', 'is_correct' => false],
                            ['choice_text' => 'Uniquement si g = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux angles donnent le même sin(2θ), donc la même portée théorique.',
                    ],

                    [
                        'question' => 'Pourquoi le modèle parabolique devient-il moins précis pour les projectiles rapides et de longue portée ?',
                        'choices' => [
                            ['choice_text' => 'La résistance de l’air peut devenir importante et dépendre de la vitesse', 'is_correct' => true],
                            ['choice_text' => 'La gravité disparaît avec la vitesse', 'is_correct' => false],
                            ['choice_text' => 'La masse du projectile devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Le temps cesse d’être pertinent', 'is_correct' => false],
                        ],
                        'explanation' => 'À grande vitesse, les forces aérodynamiques peuvent modifier fortement la trajectoire idéale.',
                    ],

                    [
                        'question' => 'Dans un modèle sans résistance de l’air, pourquoi l’équation de la trajectoire est-elle quadratique en x ?',
                        'choices' => [
                            ['choice_text' => 'Parce que x dépend linéairement du temps tandis que y dépend quadratiquement du temps', 'is_correct' => true],
                            ['choice_text' => 'Parce que x et y dépendent tous deux exponentiellement du temps', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’accélération horizontale vaut g', 'is_correct' => false],
                            ['choice_text' => 'Parce que la vitesse verticale reste constante', 'is_correct' => false],
                        ],
                        'explanation' => 'La combinaison x = v0x t et y = v0y t - 1/2 gt² conduit à une relation quadratique entre x et y.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Mouvement circulaire non uniforme
            // ============================================================

            [
                'title' => 'Mouvement circulaire non uniforme',
                'description' => 'Analyse de la vitesse angulaire, de l’accélération tangentielle et de l’accélération normale.',
                'questions' => [

                    [
                        'question' => 'Dans un mouvement circulaire non uniforme, quelle composante de l’accélération est associée à la variation de la vitesse angulaire ?',
                        'choices' => [
                            ['choice_text' => 'L’accélération tangentielle', 'is_correct' => true],
                            ['choice_text' => 'L’accélération normale uniquement', 'is_correct' => false],
                            ['choice_text' => 'La gravité uniquement', 'is_correct' => false],
                            ['choice_text' => 'Aucune', 'is_correct' => false],
                        ],
                        'explanation' => 'at = Rα pour un mouvement circulaire de rayon constant, où α = dω/dt.',
                    ],

                    [
                        'question' => 'Quelle relation donne l’accélération tangentielle pour un mouvement circulaire de rayon constant ?',
                        'choices' => [
                            ['choice_text' => at = Rα', 'is_correct' => true],
                            ['choice_text' => at = Rω²', 'is_correct' => false],
                            ['choice_text' => at = ω/R', 'is_correct' => false],
                            ['choice_text' => at = R/α', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation s’obtient à partir de v = Rω et at = dv/dt.',
                    ],

                    [
                        'question' => 'Quelle relation donne l’accélération normale dans le même mouvement ?',
                        'choices' => [
                            ['choice_text' => an = Rω²', 'is_correct' => true],
                            ['choice_text' => an = Rα', 'is_correct' => false],
                            ['choice_text' => an = ω/R', 'is_correct' => false],
                            ['choice_text' => an = α/R', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme v = Rω, an = v²/R = Rω².',
                    ],

                    [
                        'question' => 'Un disque tourne avec ω = 5 rad/s et α = 2 rad/s². Pour un point situé à 0,4 m de l’axe, quelle est son accélération tangentielle ?',
                        'choices' => [
                            ['choice_text' => '0,8 m/s²', 'is_correct' => true],
                            ['choice_text' => '2 m/s²', 'is_correct' => false],
                            ['choice_text' => '10 m/s²', 'is_correct' => false],
                            ['choice_text' => '20 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'at = Rα = 0,4 × 2 = 0,8 m/s².',
                    ],

                    [
                        'question' => 'Pour ce même point, quelle est l’accélération normale ?',
                        'choices' => [
                            ['choice_text' => '10 m/s²', 'is_correct' => true],
                            ['choice_text' => '2 m/s²', 'is_correct' => false],
                            ['choice_text' => '0,8 m/s²', 'is_correct' => false],
                            ['choice_text' => '25 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'an = Rω² = 0,4 × 25 = 10 m/s².',
                    ],

                    [
                        'question' => 'La norme de l’accélération totale de ce point vaut approximativement...',
                        'choices' => [
                            ['choice_text' => '10,03 m/s²', 'is_correct' => true],
                            ['choice_text' => '10,8 m/s²', 'is_correct' => false],
                            ['choice_text' => '9,2 m/s²', 'is_correct' => false],
                            ['choice_text' => '10,4 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a = √(at² + an²) = √(0,8² + 10²) = √100,64 ≈ 10,03 m/s².',
                    ],

                    [
                        'question' => 'Si ω est constante dans un mouvement circulaire de rayon constant, alors α = 0.',
                        'choices' => [
                            ['choice_text' => 'Vrai', 'is_correct' => true],
                            ['choice_text' => 'Faux', 'is_correct' => false],
                            ['choice_text' => 'Uniquement si R = 0', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'α = dω/dt. Si ω est constante, α est nulle.',
                    ],

                    [
                        'question' => 'Pourquoi l’accélération totale n’est-elle généralement pas tangentielle dans un mouvement circulaire non uniforme ?',
                        'choices' => [
                            ['choice_text' => 'Il faut simultanément modifier la norme et la direction de la vitesse', 'is_correct' => true],
                            ['choice_text' => 'La vitesse n’existe que radialement', 'is_correct' => false],
                            ['choice_text' => 'La gravité est toujours tangentielle', 'is_correct' => false],
                            ['choice_text' => 'La trajectoire est rectiligne', 'is_correct' => false],
                        ],
                        'explanation' => 'Une variation de norme crée at et la courbure crée an ; les deux composantes sont perpendiculaires.',
                    ],

                    [
                        'question' => 'Un point situé deux fois plus loin de l’axe d’un disque possède, à même ω, une accélération normale...',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => true],
                            ['choice_text' => 'Quatre fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Deux fois plus faible', 'is_correct' => false],
                            ['choice_text' => 'Identique', 'is_correct' => false],
                        ],
                        'explanation' => 'an = Rω², donc à ω constant, an est proportionnelle à R.',
                    ],

                    [
                        'question' => 'Pourquoi une roue tournant à vitesse angulaire constante possède-t-elle une accélération alors que α = 0 ?',
                        'choices' => [
                            ['choice_text' => La vitesse angulaire est constante mais la direction de la vitesse linéaire change', 'is_correct' => true],
                            ['choice_text' => 'Parce que la vitesse linéaire est constante en vecteur', 'is_correct' => false],
                            ['choice_text' => 'Parce que le rayon est nul', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’accélération tangentielle est toujours maximale', 'is_correct' => false],
                        ],
                        'explanation' => 'α = 0 signifie absence d’accélération tangentielle, mais l’accélération normale reste présente.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Cinématique analytique
            // ============================================================

            [
                'title' => 'Analyse analytique des mouvements',
                'description' => 'Utilisation des dérivées, intégrales et conditions initiales pour reconstruire la cinématique.',
                'questions' => [

                    [
                        'question' => 'La vitesse d’un mobile est v(t) = 6t² - 4t + 3. Quelle est son accélération ?',
                        'choices' => [
                            ['choice_text' => 'a(t) = 12t - 4', 'is_correct' => true],
                            ['choice_text' => 'a(t) = 6t - 4', 'is_correct' => false],
                            ['choice_text' => 'a(t) = 12t² - 4', 'is_correct' => false],
                            ['choice_text' => 'a(t) = 6t² - 4t', 'is_correct' => false],
                        ],
                        'explanation' => 'On dérive v(t) : a(t) = dv/dt = 12t - 4.',
                    ],

                    [
                        'question' => 'La vitesse d’une particule est v(t) = 4t + 2. Sachant que x(0) = 5 m, quelle est sa position ?',
                        'choices' => [
                            ['choice_text' => 'x(t) = 2t² + 2t + 5', 'is_correct' => true],
                            ['choice_text' => 'x(t) = 4t² + 2t + 5', 'is_correct' => false],
                            ['choice_text' => 'x(t) = 4t + 7', 'is_correct' => false],
                            ['choice_text' => 'x(t) = 2t² + 5', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intégration de v donne x = 2t² + 2t + C. Avec x(0)=5, C=5.',
                    ],

                    [
                        'question' => 'La position d’une particule est x(t) = t³ - 6t² + 9t. Pour quels instants sa vitesse est-elle nulle ?',
                        'choices' => [
                            ['choice_text' => 't = 1 s et t = 3 s', 'is_correct' => true],
                            ['choice_text' => 't = 2 s et t = 4 s', 'is_correct' => false],
                            ['choice_text' => 't = 0 s uniquement', 'is_correct' => false],
                            ['choice_text' => 't = 1 s uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'v = 3t² - 12t + 9 = 3(t-1)(t-3). Donc v = 0 pour t = 1 et 3 s.',
                    ],

                    [
                        'question' => 'Pour x(t) = t³ - 6t² + 9t, quelle est l’accélération à t = 2 s ?',
                        'choices' => [
                            ['choice_text' => '0 m/s²', 'is_correct' => true],
                            ['choice_text' => '6 m/s²', 'is_correct' => false],
                            ['choice_text' => '-6 m/s²', 'is_correct' => false],
                            ['choice_text' => '12 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a = 6t - 12. À t = 2, a = 12 - 12 = 0.',
                    ],

                    [
                        'question' => 'Pourquoi une intégration de l’accélération nécessite-t-elle une condition initiale pour déterminer la vitesse complète ?',
                        'choices' => [
                            ['choice_text' => 'Une constante d’intégration apparaît et doit être déterminée avec une valeur connue de la vitesse', 'is_correct' => true],
                            ['choice_text' => 'L’accélération n’a aucune relation avec la vitesse', 'is_correct' => false],
                            ['choice_text' => 'La vitesse est toujours nulle à t = 0', 'is_correct' => false],
                            ['choice_text' => 'L’intégrale de l’accélération est toujours unique sans constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Intégrer a(t) donne v(t) à une constante près. La condition initiale fixe cette constante.',
                    ],

                    [
                        'question' => 'L’accélération d’un mobile est a(t) = 6t. Avec v(0) = 2 m/s, quelle est sa vitesse ?',
                        'choices' => [
                            ['choice_text' => 'v(t) = 3t² + 2', 'is_correct' => true],
                            ['choice_text' => 'v(t) = 6t² + 2', 'is_correct' => false],
                            ['choice_text' => 'v(t) = 3t + 2', 'is_correct' => false],
                            ['choice_text' => 'v(t) = t³ + 2', 'is_correct' => false],
                        ],
                        'explanation' => 'v = ∫6t dt = 3t² + C. Avec v(0)=2, C=2.',
                    ],

                    [
                        'question' => 'Pourquoi les points où v(t)=0 sont-ils importants dans l’analyse d’une trajectoire unidimensionnelle ?',
                        'choices' => [
                            ['choice_text' => Ils peuvent correspondre à des changements de sens du mouvement', 'is_correct' => true],
                            ['choice_text' => 'Ils indiquent toujours une accélération nulle', 'is_correct' => false],
                            ['choice_text' => 'Ils correspondent toujours à l’origine spatiale', 'is_correct' => false],
                            ['choice_text' => 'Ils impliquent une énergie cinétique infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque v change de signe en passant par zéro, le mobile change de direction.',
                    ],

                    [
                        'question' => 'Si v(t) est positive sur un intervalle, alors la position x(t) y est nécessairement...',
                        'choices' => [
                            ['choice_text' => 'Croissante', 'is_correct' => true],
                            ['choice_text' => 'Décroissante', 'is_correct' => false],
                            ['choice_text' => 'Constante', 'is_correct' => false],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'v = dx/dt. Une vitesse positive signifie que x augmente avec le temps.',
                    ],

                    [
                        'question' => 'Si a(t) est positive sur un intervalle, cela signifie nécessairement que la vitesse scalaire augmente ?',
                        'choices' => [
                            ['choice_text' => 'Non, cela dépend aussi du signe de la vitesse dans le cas unidimensionnel', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, sauf en chute libre', 'is_correct' => false],
                            ['choice_text' => 'Non, parce que l’accélération ne peut pas être positive', 'is_correct' => false],
                        ],
                        'explanation' => 'En 1D, une accélération positive augmente la vitesse algébrique. Si v est négative, sa norme peut diminuer.',
                    ],

                    [
                        'question' => 'Pourquoi les extrema locaux de position sont-ils associés à des instants où la vitesse est nulle, sous des conditions régulières ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la dérivée de la position est nulle à un extremum régulier', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’accélération est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Parce que la masse est minimale', 'is_correct' => false],
                            ['choice_text' => 'Parce que la position ne dépend jamais du temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme v = dx/dt, un extremum régulier de x(t) vérifie dx/dt = 0.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Coordonnées polaires
            // ============================================================

            [
                'title' => 'Cinématique en coordonnées polaires',
                'description' => 'Analyse des trajectoires planes dans une base polaire variable.',
                'questions' => [

                    [
                        'question' => 'Quelle est la vitesse en coordonnées polaires pour un point décrit par r(t) et θ(t) ?',
                        'choices' => [
                            ['choice_text' => 'v = ṙ e_r + rθ̇ e_θ', 'is_correct' => true],
                            ['choice_text' => 'v = r e_r + θ e_θ', 'is_correct' => false],
                            ['choice_text' => 'v = ṙθ̇ e_r', 'is_correct' => false],
                            ['choice_text' => 'v = r² e_r + θ² e_θ', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse comporte une composante radiale ṙ et une composante transverse rθ̇.',
                    ],

                    [
                        'question' => 'Quelle est l’accélération radiale en coordonnées polaires ?',
                        'choices' => [
                            ['choice_text' => 'a_r = r̈ - rθ̇²', 'is_correct' => true],
                            ['choice_text' => 'a_r = r̈ + rθ̇²', 'is_correct' => false],
                            ['choice_text' => 'a_r = rθ̈', 'is_correct' => false],
                            ['choice_text' => 'a_r = ṙθ̇', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée temporelle de la base polaire conduit au terme centripète -rθ̇².',
                    ],

                    [
                        'question' => 'Quelle est l’accélération transverse ?',
                        'choices' => [
                            ['choice_text' => 'a_θ = rθ̈ + 2ṙθ̇', 'is_correct' => true],
                            ['choice_text' => 'a_θ = r̈ + rθ̇²', 'is_correct' => false],
                            ['choice_text' => 'a_θ = rθ̇', 'is_correct' => false],
                            ['choice_text' => 'a_θ = θ̈/r', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante transverse comporte l’accélération angulaire et le terme de couplage 2ṙθ̇.',
                    ],

                    [
                        'question' => 'Si r est constant, quelle composante de la vitesse polaire reste ?',
                        'choices' => [
                            ['choice_text' => 'La composante transverse rθ̇', 'is_correct' => true],
                            ['choice_text' => 'La composante radiale ṙ', 'is_correct' => false],
                            ['choice_text' => 'Aucune composante', 'is_correct' => false],
                            ['choice_text' => 'La composante r̈', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec r constant, ṙ = 0 et la vitesse devient v = rθ̇ e_θ.',
                    ],

                    [
                        'question' => 'Si r est constant et θ̇ est également constant, quelle est l’accélération ?',
                        'choices' => [
                            ['choice_text' => 'a = -rθ̇² e_r', 'is_correct' => true],
                            ['choice_text' => 'a = rθ̇² e_θ', 'is_correct' => false],
                            ['choice_text' => 'a = 0', 'is_correct' => false],
                            ['choice_text' => 'a = rθ̇ e_r', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le mouvement circulaire uniforme, a_r = -rθ̇² et a_θ = 0.',
                    ],

                    [
                        'question' => 'Dans un mouvement radial pur, θ est constant. Quelle composante de la vitesse est alors nulle ?',
                        'choices' => [
                            ['choice_text' => La composante transverse', 'is_correct' => true],
                            ['choice_text' => La composante radiale', 'is_correct' => false],
                            ['choice_text' => Les deux composantes', 'is_correct' => false],
                            ['choice_text' => Aucune', 'is_correct' => false],
                        ],
                        'explanation' => 'Si θ̇ = 0, alors rθ̇ = 0 et la vitesse est purement radiale.',
                    ],

                    [
                        'question' => 'Pourquoi les coordonnées polaires sont-elles particulièrement pratiques pour les mouvements soumis à une force centrale ?',
                        'choices' => [
                            ['choice_text' => La direction radiale coïncide naturellement avec la direction de la force centrale', 'is_correct' => true],
                            ['choice_text' => 'Elles rendent la vitesse toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Elles interdisent les trajectoires non circulaires', 'is_correct' => false],
                            ['choice_text' => 'Elles éliminent toujours θ', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie des forces centrales s’exprime naturellement dans une base radiale et transverse.',
                    ],

                    [
                        'question' => 'Le terme 2ṙθ̇ dans l’accélération transverse disparaît notamment lorsque...',
                        'choices' => [
                            ['choice_text' => 'ṙ = 0 ou θ̇ = 0', 'is_correct' => true],
                            ['choice_text' => 'r = 0 uniquement', 'is_correct' => false],
                            ['choice_text' => 'θ = π uniquement', 'is_correct' => false],
                            ['choice_text' => 'r̈ est maximal', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit 2ṙθ̇ est nul lorsque l’une des deux dérivées est nulle.',
                    ],

                    [
                        'question' => 'Si r(t) augmente alors que θ̇ est constant, le terme transverse de la vitesse rθ̇...',
                        'choices' => [
                            ['choice_text' => 'Augmente proportionnellement à r', 'is_correct' => true],
                            ['choice_text' => 'Diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Reste nul', 'is_correct' => false],
                            ['choice_text' => 'Devient indépendant de θ̇', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante transverse vaut rθ̇. À θ̇ constant, elle augmente avec r.',
                    ],

                    [
                        'question' => 'Pourquoi la base e_r, e_θ doit-elle être dérivée lors du calcul de l’accélération polaire ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les vecteurs unitaires changent de direction lorsque θ varie', 'is_correct' => true],
                            ['choice_text' => 'Parce que les vecteurs unitaires changent de norme', 'is_correct' => false],
                            ['choice_text' => 'Parce que r est toujours constant', 'is_correct' => false],
                            ['choice_text' => 'Parce que la masse dépend de θ', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vecteurs unitaires d’une base polaire tournent avec la particule, ce qui introduit des termes supplémentaires lors de la dérivation.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Courbure et géométrie cinématique
            // ============================================================

            [
                'title' => 'Courbure et géométrie du mouvement',
                'description' => 'Analyse géométrique de la courbure, du rayon de courbure et des repères intrinsèques.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce que le rayon de courbure ρ d’une trajectoire en un point ?',
                        'choices' => [
                            ['choice_text' => 'Le rayon du cercle osculateur qui approxime localement la trajectoire', 'is_correct' => true],
                            ['choice_text' => 'La distance parcourue depuis l’origine', 'is_correct' => false],
                            ['choice_text' => 'La distance au centre de masse', 'is_correct' => false],
                            ['choice_text' => 'Le rayon orbital uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cercle osculateur est le cercle qui représente localement la courbure de la trajectoire.',
                    ],

                    [
                        'question' => 'Quelle relation relie la courbure κ et le rayon de courbure ρ ?',
                        'choices' => [
                            ['choice_text' => 'κ = 1/ρ', 'is_correct' => true],
                            ['choice_text' => 'κ = ρ', 'is_correct' => false],
                            ['choice_text' => 'κ = ρ²', 'is_correct' => false],
                            ['choice_text' => 'κ = 1/ρ²', 'is_correct' => false],
                        ],
                        'explanation' => 'La courbure est l’inverse du rayon de courbure.',
                    ],

                    [
                        'question' => 'Pour une trajectoire parfaitement rectiligne, la courbure est...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Infinie', 'is_correct' => false],
                            ['choice_text' => 'Égale à v²', 'is_correct' => false],
                            ['choice_text' => 'Toujours négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Une droite possède une courbure nulle et un rayon de courbure infini.',
                    ],

                    [
                        'question' => 'Une vitesse élevée sur une trajectoire fortement courbée peut produire une grande accélération normale parce que...',
                        'choices' => [
                            ['choice_text' => 'an = v²κ', 'is_correct' => true],
                            ['choice_text' => 'an = v/κ', 'is_correct' => false],
                            ['choice_text' => 'an = κ/v²', 'is_correct' => false],
                            ['choice_text' => 'an = vκ²', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme an = v²/ρ et κ = 1/ρ, on obtient an = v²κ.',
                    ],

                    [
                        'question' => 'Pourquoi les repères tangent-normal sont-ils utiles pour étudier une trajectoire donnée ?',
                        'choices' => [
                            ['choice_text' => Ils séparent naturellement les effets sur la norme et la direction de la vitesse', 'is_correct' => true],
                            ['choice_text' => 'Ils rendent toute trajectoire rectiligne', 'is_correct' => false],
                            ['choice_text' => 'Ils éliminent les accélérations', 'is_correct' => false],
                            ['choice_text' => 'Ils ne fonctionnent que pour les mouvements circulaires', 'is_correct' => false],
                        ],
                        'explanation' => 'La base tangentielle-normale suit la géométrie locale de la trajectoire et clarifie le rôle des composantes de l’accélération.',
                    ],

                    [
                        'question' => 'Pour un mouvement circulaire de rayon R constant, le rayon de courbure est...',
                        'choices' => [
                            ['choice_text' => 'Égal à R', 'is_correct' => true],
                            ['choice_text' => 'Égal à 1/R', 'is_correct' => false],
                            ['choice_text' => 'Égal à R²', 'is_correct' => false],
                            ['choice_text' => 'Infini', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cercle est sa propre courbe osculatrice, donc son rayon de courbure est R.',
                    ],

                    [
                        'question' => 'Si la courbure d’une trajectoire augmente tandis que la vitesse reste constante, l’accélération normale...',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue', 'is_correct' => false],
                            ['choice_text' => 'Reste identique', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'an = v²κ. À vitesse constante, une augmentation de κ augmente an.',
                    ],

                    [
                        'question' => 'Pourquoi un virage de rayon plus petit est-il plus exigeant à vitesse identique ?',
                        'choices' => [
                            ['choice_text' => La courbure et donc l’accélération normale augmentent', 'is_correct' => true],
                            ['choice_text' => 'La vitesse devient automatiquement nulle', 'is_correct' => false],
                            ['choice_text' => 'La masse augmente', 'is_correct' => false],
                            ['choice_text' => 'La trajectoire devient rectiligne', 'is_correct' => false],
                        ],
                        'explanation' => 'Un rayon plus petit signifie une courbure plus élevée, donc une accélération normale plus importante.',
                    ],

                    [
                        'question' => 'Quel vecteur de la base intrinsèque est dirigé vers le centre de courbure local ?',
                        'choices' => [
                            ['choice_text' => 'Le vecteur normal principal', 'is_correct' => true],
                            ['choice_text' => 'Le vecteur tangent', 'is_correct' => false],
                            ['choice_text' => 'Le vecteur radial global dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Le vecteur vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vecteur normal principal pointe dans la direction de courbure de la trajectoire.',
                    ],

                    [
                        'question' => 'Pourquoi le repère tangent-normal peut-il être préférable à un repère cartésien pour une trajectoire compliquée ?',
                        'choices' => [
                            ['choice_text' => 'Il épouse localement la géométrie du mouvement', 'is_correct' => true],
                            ['choice_text' => 'Il impose une trajectoire circulaire', 'is_correct' => false],
                            ['choice_text' => 'Il élimine les dérivées temporelles', 'is_correct' => false],
                            ['choice_text' => 'Il ne nécessite aucune information sur la vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le repère intrinsèque décrit directement la direction de déplacement et de courbure.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Analyse cinématique intégrée
            // ============================================================

            [
                'title' => 'Analyse cinématique intégrée avancée',
                'description' => 'Résolution de problèmes combinant cinématique analytique, vectorielle, relative et curviligne.',
                'questions' => [

                    [
                        'question' => 'Une particule possède r(t) = (t²)i + (2t²)j. Quelle est sa vitesse à t = 3 s ?',
                        'choices' => [
                            ['choice_text' => '6i + 12j m/s', 'is_correct' => true],
                            ['choice_text' => '3i + 6j m/s', 'is_correct' => false],
                            ['choice_text' => '9i + 18j m/s', 'is_correct' => false],
                            ['choice_text' => '6i + 6j m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'v = dr/dt = 2ti + 4tj. À t = 3 s : v = 6i + 12j m/s.',
                    ],

                    [
                        'question' => 'Pour cette même particule, quelle est son accélération ?',
                        'choices' => [
                            ['choice_text' => '2i + 4j m/s²', 'is_correct' => true],
                            ['choice_text' => '6i + 12j m/s²', 'is_correct' => false],
                            ['choice_text' => '2i + 2j m/s²', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'a = dv/dt = 2i + 4j m/s².',
                    ],

                    [
                        'question' => 'Un mobile a v = 10 m/s et une accélération tangentielle at = 3 m/s². Quelle est la variation de sa vitesse scalaire par seconde à cet instant ?',
                        'choices' => [
                            ['choice_text' => '3 m/s par seconde', 'is_correct' => true],
                            ['choice_text' => '10 m/s par seconde', 'is_correct' => false],
                            ['choice_text' => '30 m/s par seconde', 'is_correct' => false],
                            ['choice_text' => '1/3 m/s par seconde', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition, at = dv/dt. Donc la norme de la vitesse augmente ici à raison de 3 m/s chaque seconde.',
                    ],

                    [
                        'question' => 'Une voiture roule à 20 m/s dans un virage de rayon 100 m. Quelle accélération normale subit-elle ?',
                        'choices' => [
                            ['choice_text' => '4 m/s²', 'is_correct' => true],
                            ['choice_text' => '5 m/s²', 'is_correct' => false],
                            ['choice_text' => '20 m/s²', 'is_correct' => false],
                            ['choice_text' => '0,2 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'an = v²/R = 400/100 = 4 m/s².',
                    ],

                    [
                        'question' => 'Si la même voiture possède aussi une accélération tangentielle de 3 m/s², quelle est la norme de son accélération totale ?',
                        'choices' => [
                            ['choice_text' => '5 m/s²', 'is_correct' => true],
                            ['choice_text' => '7 m/s²', 'is_correct' => false],
                            ['choice_text' => '1 m/s²', 'is_correct' => false],
                            ['choice_text' => '12 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a = √(an² + at²) = √(16 + 9) = 5 m/s².',
                    ],

                    [
                        'question' => 'Un ascenseur monte à 4 m/s mais son accélération est dirigée vers le bas à 1 m/s². La norme de sa vitesse...',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente', 'is_correct' => false],
                            ['choice_text' => 'Reste nécessairement constante', 'is_correct' => false],
                            ['choice_text' => 'Devient instantanément nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse et l’accélération sont opposées, donc la norme de la vitesse diminue.',
                    ],

                    [
                        'question' => 'Une particule suit un cercle de rayon 2 m avec ω = 6 rad/s. Quelle est sa vitesse tangentielle ?',
                        'choices' => [
                            ['choice_text' => '12 m/s', 'is_correct' => true],
                            ['choice_text' => '3 m/s', 'is_correct' => false],
                            ['choice_text' => '36 m/s', 'is_correct' => false],
                            ['choice_text' => '8 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'v = Rω = 2 × 6 = 12 m/s.',
                    ],

                    [
                        'question' => 'Pour cette même particule, quelle est son accélération normale ?',
                        'choices' => [
                            ['choice_text' => '72 m/s²', 'is_correct' => true],
                            ['choice_text' => '36 m/s²', 'is_correct' => false],
                            ['choice_text' => '24 m/s²', 'is_correct' => false],
                            ['choice_text' => '12 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'an = Rω² = 2 × 36 = 72 m/s².',
                    ],

                    [
                        'question' => 'Pourquoi une analyse cinématique complète doit-elle distinguer la variation de la norme de la vitesse de la variation de sa direction ?',
                        'choices' => [
                            ['choice_text' => 'Parce que ces deux effets sont décrits par les composantes tangentielle et normale de l’accélération', 'is_correct' => true],
                            ['choice_text' => 'Parce que la vitesse n’est jamais un vecteur', 'is_correct' => false],
                            ['choice_text' => 'Parce que la trajectoire est toujours rectiligne', 'is_correct' => false],
                            ['choice_text' => 'Parce que la masse détermine directement la direction', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante tangentielle décrit la variation de la norme de v, tandis que la composante normale décrit la variation de sa direction.',
                    ],

                    [
                        'question' => 'Pourquoi la cinématique constitue-t-elle une étape préalable essentielle avant l’étude dynamique d’un système ?',
                        'choices' => [
                            ['choice_text' => 'Elle décrit précisément les mouvements nécessaires pour relier ensuite mouvements et forces', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace entièrement les lois de Newton', 'is_correct' => false],
                            ['choice_text' => 'Elle détermine toujours les forces sans autre information', 'is_correct' => false],
                            ['choice_text' => 'Elle ne concerne que les objets immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'La cinématique établit les relations entre position, vitesse et accélération, qui sont ensuite utilisées dans l’analyse dynamique.',
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

                // Mélange des choix : l'ordre de la bonne réponse
                // reste imprévisible tout en conservant is_correct.
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